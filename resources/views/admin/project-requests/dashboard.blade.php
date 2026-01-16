@extends('layouts.admin')

@section('title', 'Tableau de bord')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Tableau de bord</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
        <span class="me-3">
            <i class="fas fa-user me-1"></i> {{ Auth::user()->name }}
        </span>
    </div>
</div>

<!-- Statistiques -->
<div class="row mb-4">
    <div class="col-md-3">
        <div class="card text-white bg-primary">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h6 class="card-title">Total</h6>
                        <h2 class="mb-0">{{ $stats['total'] }}</h2>
                    </div>
                    <i class="fas fa-clipboard-list fa-2x opacity-50"></i>
                </div>
                <p class="card-text mb-0">Demandes totales</p>
            </div>
        </div>
    </div>
    
    <div class="col-md-3">
        <div class="card text-white bg-info">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h6 class="card-title">Nouvelles</h6>
                        <h2 class="mb-0">{{ $stats['new'] }}</h2>
                    </div>
                    <i class="fas fa-plus-circle fa-2x opacity-50"></i>
                </div>
                <p class="card-text mb-0">À traiter</p>
            </div>
        </div>
    </div>
    
    <div class="col-md-3">
        <div class="card text-white bg-warning">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h6 class="card-title">En cours</h6>
                        <h2 class="mb-0">{{ $stats['in_progress'] }}</h2>
                    </div>
                    <i class="fas fa-spinner fa-2x opacity-50"></i>
                </div>
                <p class="card-text mb-0">En analyse/contact</p>
            </div>
        </div>
    </div>
    
    <div class="col-md-3">
        <div class="card text-white bg-success">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <div>
                        <h6 class="card-title">Terminées</h6>
                        <h2 class="mb-0">{{ $stats['completed'] }}</h2>
                    </div>
                    <i class="fas fa-check-circle fa-2x opacity-50"></i>
                </div>
                <p class="card-text mb-0">Acceptées/terminées</p>
            </div>
        </div>
    </div>
</div>

<!-- Dernières demandes -->
<div class="card">
    <div class="card-header">
        <i class="fas fa-clock me-2"></i> Dernières demandes
    </div>
    <div class="card-body">
        @if($recentRequests->count() > 0)
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Client</th>
                            <th>Organisation</th>
                            <th>Type</th>
                            <th>Statut</th>
                            <th>Date</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($recentRequests as $request)
                        <tr>
                            <td>#{{ str_pad($request->id, 5, '0', STR_PAD_LEFT) }}</td>
                            <td>{{ $request->prenom }} {{ $request->nom }}</td>
                            <td>{{ $request->organisation }}</td>
                            <td>
                                @foreach($request->types->take(2) as $type)
                                    <span class="badge bg-secondary">{{ $type->type }}</span>
                                @endforeach
                            </td>
                            <td>
                                <span class="badge bg-{{ $request->status == 'nouveau' ? 'info' : ($request->status == 'accepte' ? 'success' : 'warning') }}">
                                    {{ $request->status }}
                                </span>
                            </td>
                            <td>{{ $request->created_at->format('d/m H:i') }}</td>
                            <td>
                                <a href="{{ route('admin.project-requests.show', $request->id) }}" 
                                   class="btn btn-sm btn-outline-primary">
                                    <i class="fas fa-eye"></i>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @else
            <p class="text-center text-muted my-4">Aucune demande récente</p>
        @endif
    </div>
</div>
@endsection