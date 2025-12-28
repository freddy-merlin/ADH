<?php

namespace App\Http\Controllers;

use App\Models\ProjectRequest;
use App\Models\ProjectType;
use App\Models\ProjectFeature;
use App\Models\ProjectDocument;
use App\Models\ProjectStatusHistory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class ProjectRequestController extends Controller
{
    public function store(Request $request)
    {
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
            return response()->json([
                'success' => false,
                'errors' => $validator->errors()
            ], 422);
        }

        // Commencer une transaction
        \DB::beginTransaction();

        try {
            // Création de la demande de projet
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

            // Enregistrement des types de projet
            foreach ($request->type_projet as $type) {
                ProjectType::create([
                    'project_request_id' => $projectRequest->id,
                    'type' => $type,
                ]);
            }

            // Enregistrement des fonctionnalités
            if ($request->has('fonctionnalites')) {
                foreach ($request->fonctionnalites as $feature) {
                    ProjectFeature::create([
                        'project_request_id' => $projectRequest->id,
                        'feature' => $feature,
                    ]);
                }
            }

            // Enregistrement des documents
            if ($request->hasFile('documents')) {
                foreach ($request->file('documents') as $file) {
                    $originalFilename = $file->getClientOriginalName();
                    $filename = time() . '_' . $originalFilename;
                    $filePath = $file->storeAs('project_documents', $filename, 'public');

                    ProjectDocument::create([
                        'project_request_id' => $projectRequest->id,
                        'filename' => $filename,
                        'original_filename' => $originalFilename,
                        'file_path' => $filePath,
                        'file_size' => $file->getSize(),
                        'mime_type' => $file->getMimeType(),
                    ]);
                }
            }

            // Enregistrement de l'historique du statut
            ProjectStatusHistory::create([
                'project_request_id' => $projectRequest->id,
                'ancien_statut' => null,
                'nouveau_statut' => 'nouveau',
                'commentaire' => 'Demande créée via le formulaire',
                'changed_by' => 'Système',
            ]);

            // Envoyer un email
            $this->sendEmail($projectRequest);

            // Tout s'est bien passé, on commit
            \DB::commit();

            return response()->json([
                'success' => true,
                'message' => 'Votre demande a été enregistrée avec succès.'
            ]);

        } catch (\Exception $e) {
            // En cas d'erreur, on annonce et on retourne une erreur
            \DB::rollback();

            \Log::error('Erreur lors de l\'enregistrement de la demande de projet: ' . $e->getMessage());

            return response()->json([
                'success' => false,
                'message' => 'Une erreur est survenue lors de l\'enregistrement de votre demande.'
            ], 500);
        }
    }

    private function sendEmail(ProjectRequest $projectRequest)
    {
        

        $to = config('mail.from.address'); // ou l'adresse de l'administrateur
        $subject = 'Nouvelle demande de projet de ' . $projectRequest->prenom . ' ' . $projectRequest->nom;

        Mail::send('emails.project_request', ['projectRequest' => $projectRequest], function ($message) use ($to, $subject) {
            $message->to($to)
                    ->subject($subject);
        });

        // Vous pouvez aussi envoyer un email de confirmation au client
        $clientSubject = 'Confirmation de votre demande de projet';
        Mail::send('emails.project_request_client', ['projectRequest' => $projectRequest], function ($message) use ($projectRequest, $clientSubject) {
            $message->to($projectRequest->email)
                    ->subject($clientSubject);
        });
    }
}