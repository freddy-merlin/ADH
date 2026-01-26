<?php

namespace App\Http\Controllers;

use App\Models\ProjectRequest;
use App\Models\ProjectTypeCatalog;
use App\Models\ProjectFeatureCatalog;
use App\Models\ProjectDocument;
use App\Models\ProjectStatusHistory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;

class ProjectRequestController extends Controller
{
    public function store(Request $request)
    {
        // Log des données reçues
        Log::info('=== DEBUT DEMANDE PROJET ===');
        Log::info('Données reçues:', [
            'prenom' => $request->prenom,
            'nom' => $request->nom,
            'email' => $request->email,
            'telephone' => $request->telephone,
            'type_projet' => $request->type_projet,
            'fonctionnalites' => $request->fonctionnalites,
            'urgence' => $request->urgence,
            'has_documents' => $request->hasFile('documents'),
            'documents_count' => $request->hasFile('documents') ? count($request->file('documents')) : 0,
        ]);

        // Validation des données
        $validator = Validator::make($request->all(), [
            'prenom' => 'required|string|max:100',
            'nom' => 'required|string|max:100',
            'organisation' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'telephone' => 'required|string|max:20',
            'role' => 'required|string|max:255',
            'type_projet' => 'required|array',
            'type_projet.*' => 'in:web,mobile,plateforme,site,autre',
            'type_autre' => 'nullable|string|max:255',
            'probleme' => 'required|string',
            'objectifs' => 'required|string',
            'cible' => 'required|string|max:255',
            'fonctionnalites' => 'nullable|array',
            'fonctionnalites.*' => 'in:auth,users,dashboard,payment,api',
            'autres_besoins' => 'nullable|string',
            'delais' => 'nullable|string|max:100',
            'budget' => 'nullable|string|max:50',
            'urgence' => 'nullable|string|in:faible,moyen,eleve,critique',
            'documents' => 'nullable|array',
            'documents.*' => 'file|mimes:pdf,doc,docx,xls,xlsx|max:10240', // 10MB max
        ]);

        if ($validator->fails()) {
            Log::warning('Validation échouée:', [
                'errors' => $validator->errors()->toArray()
            ]);
            
            return response()->json([
                'success' => false,
                'errors' => $validator->errors()
            ], 422);
        }

        Log::info('Validation réussie');

        // Commencer une transaction
        DB::beginTransaction();

        try {
            // Création de la demande de projet
            Log::info('Création de ProjectRequest...');
            
            $projectRequest = ProjectRequest::create([
                'prenom' => $request->prenom,
                'nom' => $request->nom,
                'organisation' => $request->organisation,
                'email' => $request->email,
                'telephone' => $request->telephone,
                'role' => $request->role,
                'type_autre' => $request->type_autre,
                'probleme' => $request->probleme,
                'objectifs' => $request->objectifs,
                'cible' => $request->cible,
                'autres_besoins' => $request->autres_besoins,
                'delais' => $request->delais,
                'budget' => $request->budget,
                'urgence' => $request->urgence,
                'ip_address' => $request->ip(),
                'user_agent' => $request->userAgent(),
            ]);

            Log::info('ProjectRequest créé avec ID: ' . $projectRequest->id);

            // Enregistrement des types de projet (relation many-to-many)
            Log::info('Enregistrement des types de projet...');
            foreach ($request->type_projet as $typeKey) {
                $type = ProjectTypeCatalog::where('type_key', $typeKey)->first();
                if ($type) {
                    $customValue = null;
                    // Si c'est le type "autre" et qu'il y a une valeur personnalisée
                    if ($typeKey === 'autre' && $request->filled('type_autre')) {
                        $customValue = $request->type_autre;
                    }
                    
                    // Attacher le type avec la valeur personnalisée
                    $projectRequest->types()->attach($type->id, [
                        'custom_value' => $customValue
                    ]);
                    
                    Log::info('Type attaché: ' . $typeKey . ' (ID: ' . $type->id . ')');
                } else {
                    Log::warning('Type non trouvé dans le catalogue: ' . $typeKey);
                }
            }
            Log::info('Types de projet enregistrés: ' . count($request->type_projet));

            // Enregistrement des fonctionnalités (relation many-to-many)
            if ($request->has('fonctionnalites') && is_array($request->fonctionnalites)) {
                Log::info('Enregistrement des fonctionnalités...');
                foreach ($request->fonctionnalites as $featureKey) {
                    $feature = ProjectFeatureCatalog::where('feature_key', $featureKey)->first();
                    if ($feature) {
                        $projectRequest->features()->attach($feature->id, [
                            'custom_value' => null // Pas de valeur personnalisée pour les fonctionnalités pour l'instant
                        ]);
                        Log::info('Fonctionnalité attachée: ' . $featureKey . ' (ID: ' . $feature->id . ')');
                    } else {
                        Log::warning('Fonctionnalité non trouvée dans le catalogue: ' . $featureKey);
                    }
                }
                Log::info('Fonctionnalités enregistrées: ' . count($request->fonctionnalites));
            } else {
                Log::info('Aucune fonctionnalité à enregistrer');
            }

            // Enregistrement des documents
            if ($request->hasFile('documents')) {
                Log::info('Enregistrement des documents...');
                $documentsCount = 0;
                
                foreach ($request->file('documents') as $file) {
                    try {
                        $originalFilename = $file->getClientOriginalName();
                        $filename = time() . '_' . $documentsCount . '_' . $originalFilename;
                        
                        Log::info('Traitement document: ' . $originalFilename, [
                            'size' => $file->getSize(),
                            'mime' => $file->getMimeType(),
                        ]);
                        
                        $filePath = $file->storeAs('project_documents', $filename, 'public');

                        ProjectDocument::create([
                            'project_request_id' => $projectRequest->id,
                            'filename' => $filename,
                            'original_filename' => $originalFilename,
                            'file_path' => $filePath,
                            'file_size' => $file->getSize(),
                            'mime_type' => $file->getMimeType(),
                        ]);
                        
                        $documentsCount++;
                    } catch (\Exception $docException) {
                        Log::error('Erreur lors du traitement du document: ' . $docException->getMessage());
                        throw $docException;
                    }
                }
                
                Log::info('Documents enregistrés: ' . $documentsCount);
            } else {
                Log::info('Aucun document à enregistrer');
            }

            // Enregistrement de l'historique du statut
            Log::info('Enregistrement de l\'historique...');
            ProjectStatusHistory::create([
                'project_request_id' => $projectRequest->id,
                'ancien_statut' => null,
                'nouveau_statut' => 'nouveau',
                'commentaire' => 'Demande créée via le formulaire',
                'changed_by' => 'Système',
            ]);

            // Envoyer un email
            Log::info('Envoi des emails...');
            try {
                $this->sendEmail($projectRequest);
                Log::info('Emails envoyés avec succès');
            } catch (\Exception $mailException) {
                Log::error('Erreur lors de l\'envoi des emails: ' . $mailException->getMessage());
                // On continue même si l'email échoue
            }

            // Tout s'est bien passé, on commit
            DB::commit();
            Log::info('Transaction committée avec succès');
            Log::info('=== FIN DEMANDE PROJET (SUCCES) ===');

            return response()->json([
                'success' => true,
                'message' => 'Votre demande a été enregistrée avec succès.',
                'project_id' => $projectRequest->id
            ]);

        } catch (\Exception $e) {
            // En cas d'erreur, on annule et on retourne une erreur
            DB::rollback();

            Log::error('=== ERREUR CRITIQUE ===');
            Log::error('Message: ' . $e->getMessage());
            Log::error('Fichier: ' . $e->getFile());
            Log::error('Ligne: ' . $e->getLine());
            Log::error('Trace: ' . $e->getTraceAsString());
            Log::error('=== FIN ERREUR ===');

            return response()->json([
                'success' => false,
                'message' => 'Une erreur est survenue lors de l\'enregistrement de votre demande.',
                'error' => config('app.debug') ? $e->getMessage() : null
            ], 500);
        }
    }

    private function sendEmail(ProjectRequest $projectRequest)
    {
        try {
            $to = config('mail.from.address');
            $subject = 'Nouvelle demande de projet de ' . $projectRequest->prenom . ' ' . $projectRequest->nom;

            Mail::send('emails.project_request', ['projectRequest' => $projectRequest], function ($message) use ($to, $subject) {
                $message->to($to)
                        ->subject($subject);
            });

            // Email de confirmation au client
            $clientSubject = 'Confirmation de votre demande de projet';
            Mail::send('emails.project_request_client', ['projectRequest' => $projectRequest], function ($message) use ($projectRequest, $clientSubject) {
                $message->to($projectRequest->email)
                        ->subject($clientSubject);
            });
        } catch (\Exception $e) {
            Log::error('Erreur sendEmail: ' . $e->getMessage());
            throw $e;
        }
    }
}