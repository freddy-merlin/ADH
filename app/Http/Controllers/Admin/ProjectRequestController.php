<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ProjectRequest;
use App\Models\ProjectStatusHistory;
use Illuminate\Http\Request;

class ProjectRequestController extends Controller
{
    public function index()
    {
        $query = ProjectRequest::with(['types', 'features', 'documents', 'statusHistories'])
                                 ->orderBy('created_at', 'desc');

        // Filtres
        if (request('search')) {
            $search = request('search');
            $query->where(function($q) use ($search) {
                $q->where('prenom', 'like', "%{$search}%")
                  ->orWhere('nom', 'like', "%{$search}%")
                  ->orWhere('email', 'like', "%{$search}%")
                  ->orWhere('organisation', 'like', "%{$search}%");
            });
        }

        if (request('statut')) {
            $query->where('statut', request('statut'));
        }

        if (request('date_from')) {
            $query->whereDate('created_at', '>=', request('date_from'));
        }

        if (request('date_to')) {
            $query->whereDate('created_at', '<=', request('date_to'));
        }

        $requests = $query->paginate(10);

        return view('admin.project-requests.index', compact('requests'));
    }

    public function show($id)
    {
        $request = ProjectRequest::with(['types', 'features', 'documents', 'statusHistories' => function($query) {
            $query->orderBy('created_at', 'desc');
        }])->findOrFail($id);

        return view('admin.project-requests.show', compact('request'));
    }

    public function update(Request $request, $id)
    {
        $projectRequest = ProjectRequest::findOrFail($id);

        $validated = $request->validate([
            'statut' => 'required|string|in:nouveau,en_cours,analyse,accepte,refuse,termine',
            'commentaire' => 'nullable|string',
        ]);

        $ancienStatut = $projectRequest->statut;
        $nouveauStatut = $validated['statut'];

        // Mettre à jour le statut de la demande
        $projectRequest->statut = $nouveauStatut;
        $projectRequest->save();

        // Enregistrer dans l'historique
        ProjectStatusHistory::create([
            'project_request_id' => $projectRequest->id,
            'ancien_statut' => $ancienStatut,
            'nouveau_statut' => $nouveauStatut,
            'commentaire' => $validated['commentaire'] ?? null,
            'changed_by' => auth()->user()->name, 
        ]);

        return redirect()->route('admin.project-requests.show', $id)
                         ->with('success', 'Statut mis à jour avec succès.');
    }

    public function destroy($id)
    {
        $projectRequest = ProjectRequest::findOrFail($id);
        $projectRequest->delete();

        return redirect()->route('admin.project-requests.index')
                         ->with('success', 'Demande supprimée avec succès.');
    }
}