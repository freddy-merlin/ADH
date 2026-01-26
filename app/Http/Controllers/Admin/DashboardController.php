<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ProjectRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        // Calcul des statistiques
        $stats = [
            'nouveau' => ProjectRequest::where('statut', 'nouveau')->count(),
            'en_cours' => ProjectRequest::whereIn('statut', ['en_cours', 'analyse'])->count(),
            'traite' => ProjectRequest::whereIn('statut', ['accepte', 'termine', 'refuse'])->count(),
            'total_mois' => ProjectRequest::whereMonth('created_at', now()->month)
                ->whereYear('created_at', now()->year)
                ->count(),
        ];

        // Construire la requête avec filtres
        $query = ProjectRequest::with(['types', 'features', 'documents'])
            ->orderBy('created_at', 'desc');

        // Filtre par statut
        if ($request->filled('status')) {
            $query->where('statut', $request->status);
        }

        // Filtre par période
        if ($request->filled('period')) {
            switch ($request->period) {
                case 'today':
                    $query->whereDate('created_at', today());
                    break;
                case 'week':
                    $query->whereBetween('created_at', [
                        now()->startOfWeek(),
                        now()->endOfWeek()
                    ]);
                    break;
                case 'month':
                    $query->whereMonth('created_at', now()->month)
                        ->whereYear('created_at', now()->year);
                    break;
            }
        }

        // Filtre par recherche
        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function($q) use ($search) {
                $q->where('prenom', 'like', "%{$search}%")
                    ->orWhere('nom', 'like', "%{$search}%")
                    ->orWhere('email', 'like', "%{$search}%")
                    ->orWhere('organisation', 'like', "%{$search}%")
                    ->orWhere('telephone', 'like', "%{$search}%");
            });
        }

        // Pagination
        $requests = $query->paginate(20);

        return view('admin.dashboard', compact('stats', 'requests'));
    }

    public function details($id)
    {
        $request = ProjectRequest::with([
            'types',
            'features',
            'documents'
        ])->findOrFail($id);

        return view('admin.project-requests.partials.modal-content', compact('request'));
    }

    public function export(Request $request)
    {
        $query = ProjectRequest::with(['types', 'features'])
            ->orderBy('created_at', 'desc');

        // Appliquer les mêmes filtres
        if ($request->filled('status')) {
            $query->where('statut', $request->status);
        }

        if ($request->filled('period')) {
            switch ($request->period) {
                case 'today':
                    $query->whereDate('created_at', today());
                    break;
                case 'week':
                    $query->whereBetween('created_at', [
                        now()->startOfWeek(),
                        now()->endOfWeek()
                    ]);
                    break;
                case 'month':
                    $query->whereMonth('created_at', now()->month)
                        ->whereYear('created_at', now()->year);
                    break;
            }
        }

        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function($q) use ($search) {
                $q->where('prenom', 'like', "%{$search}%")
                    ->orWhere('nom', 'like', "%{$search}%")
                    ->orWhere('email', 'like', "%{$search}%")
                    ->orWhere('organisation', 'like', "%{$search}%");
            });
        }

        $requests = $query->get();

        $filename = 'demandes_projet_' . date('Y-m-d_H-i') . '.csv';
        
        $headers = [
            'Content-Type' => 'text/csv',
            'Content-Disposition' => "attachment; filename=\"$filename\"",
        ];

        $callback = function() use ($requests) {
            $file = fopen('php://output', 'w');
            
            // En-têtes
            fputcsv($file, [
                'ID',
                'Nom complet',
                'Email',
                'Téléphone',
                'Organisation',
                'Types de projet',
                'Fonctionnalités',
                'Statut',
                'Date de création',
                'Urgence',
                'Budget',
                'Délais'
            ]);

            // Données
            foreach ($requests as $req) {
                $types = $req->types->map(function($type) {
                    return $type->pivot->custom_value ?? $type->label;
                })->implode(', ');

                $features = $req->features->map(function($feature) {
                    return $feature->pivot->custom_value ?? $feature->label;
                })->implode(', ');

                fputcsv($file, [
                    $req->id,
                    $req->prenom . ' ' . $req->nom,
                    $req->email,
                    $req->telephone,
                    $req->organisation,
                    $types,
                    $features,
                    $req->statut,
                    $req->created_at->format('d/m/Y H:i'),
                    $req->urgence,
                    $req->budget,
                    $req->delais
                ]);
            }

            fclose($file);
        };

        return response()->stream($callback, 200, $headers);
    }

    public function destroy($id)
    {
        $projectRequest = ProjectRequest::findOrFail($id);
        $projectRequest->delete();

        return response()->json(['success' => true]);
    }
}