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
        $requests = ProjectRequest::with(['types', 'features', 'documents', 'statusHistories'])
                                 ->orderBy('created_at', 'desc')
                                 ->paginate(10);

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
            'status' => 'required|string|in:nouveau,en_cours,accepte,refuse,termine',
            'commentaire' => 'nullable|string',
        ]);

        $ancienStatut = $projectRequest->statut; // Supposons que vous avez un champ statut dans ProjectRequest
        $nouveauStatut = $validated['status'];

        // Mettre à jour le statut de la demande
        $projectRequest->statut = $nouveauStatut;
        $projectRequest->save();

        // Enregistrer dans l'historique
        ProjectStatusHistory::create([
            'project_request_id' => $projectRequest->id,
            'ancien_statut' => $ancienStatut,
            'nouveau_statut' => $nouveauStatut,
            'commentaire' => $validated['commentaire'] ?? null,
            'changed_by' => auth()->user()->name, // ou un champ approprié de l'utilisateur
        ]);

        return redirect()->route('admin.project-requests.show', $id)
                         ->with('success', 'Statut mis à jour avec succès.');
    }
}