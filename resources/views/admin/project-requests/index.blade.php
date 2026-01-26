@extends('layouts.admin')

@section('title', 'Demandes de projet')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Demandes de projet</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
        <div class="btn-group me-2">
            <a href="{{ route('admin.project-requests.index', ['statut' => 'nouveau']) }}" class="btn btn-sm btn-outline-primary">
                <i class="fas fa-plus-circle"></i> Nouvelles  
            </a>
        </div>
    </div>
</div>

<!-- Filtres -->
<div class="card mb-4">
    <div class="card-body">
        <form method="GET" action="{{ route('admin.project-requests.index') }}" class="row g-3">
            <div class="col-md-4">
                <label for="search" class="form-label">Recherche</label>
                <input type="text" class="form-control" id="search" name="search" 
                       value="{{ request('search') }}" placeholder="Nom, email, organisation...">
            </div>
            <div class="col-md-3">
                <label for="statut" class="form-label">Statut</label>
                <select class="form-select" id="statut" name="statut">
                    <option value="">Tous les statuts</option>
                    <option value="nouveau" {{ request('statut') == 'nouveau' ? 'selected' : '' }}>Nouveau</option>
                    <option value="en_cours" {{ request('statut') == 'en_cours' ? 'selected' : '' }}>En cours</option>
                    <option value="analyse" {{ request('statut') == 'analyse' ? 'selected' : '' }}>En analyse</option>
                    <option value="accepte" {{ request('statut') == 'accepte' ? 'selected' : '' }}>Accepté</option>
                    <option value="refuse" {{ request('statut') == 'refuse' ? 'selected' : '' }}>Refusé</option>
                    <option value="termine" {{ request('statut') == 'termine' ? 'selected' : '' }}>Terminé</option>
                </select>
            </div>
            <div class="col-md-2">
                <label for="date_from" class="form-label">Du</label>
                <input type="date" class="form-control" id="date_from" name="date_from" 
                       value="{{ request('date_from') }}">
            </div>
            <div class="col-md-2">
                <label for="date_to" class="form-label">Au</label>
                <input type="date" class="form-control" id="date_to" name="date_to" 
                       value="{{ request('date_to') }}">
            </div>
            <div class="col-md-1 d-flex align-items-end">
                <button type="submit" class="btn btn-primary w-100">
                    <i class="fas fa-filter"></i>
                </button>
            </div>
        </form>
    </div>
</div>

<!-- Table des demandes -->
<div class="table-responsive">
    <table class="table table-hover"> 
        <thead class="table-light">
            <tr>
                <th>ID</th>
                <th>Client</th>
                <th>Organisation</th>
                <th>Contact</th>
                <th>Type projet</th>
                <th>Fonctionnalités</th>
                <th>Statut</th>
                <th>Date</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($requests as $request)
            <tr>
                <td>#{{ str_pad($request->id, 5, '0', STR_PAD_LEFT) }}</td>
                <td>
                    <strong>{{ $request->prenom }} {{ $request->nom }}</strong><br>
                    <small class="text-muted">{{ $request->role }}</small>
                </td>
                <td>{{ $request->organisation }}</td>
                <td>
                    <div>{{ $request->email }}</div>
                    <small>{{ $request->telephone }}</small>
                </td>
                <td>
                    @foreach($request->types as $type)
                        @php
                            // Récupérer le label du catalogue ou le custom_value si présent
                            $typeLabel = $type->pivot->custom_value ?? $type->label;
                        @endphp
                        <span class="badge bg-secondary mb-1">{{ $typeLabel }}</span><br>
                    @endforeach
                    @if($request->type_autre)
                        <small class="text-muted">{{ $request->type_autre }}</small>
                    @endif
                </td>
                <td>
                    @foreach($request->features as $feature)
                        @php
                            // Récupérer le label du catalogue ou le custom_value si présent
                            $featureLabel = $feature->pivot->custom_value ?? $feature->label;
                        @endphp
                        <span class="badge bg-info mb-1">{{ $featureLabel }}</span><br>
                    @endforeach
                </td>
                <td>
                    @php
                        $statusClasses = [
                            'nouveau' => 'bg-primary',
                            'en_cours' => 'bg-warning',
                            'analyse' => 'bg-info',
                            'accepte' => 'bg-success',
                            'refuse' => 'bg-danger',
                            'termine' => 'bg-secondary',
                        ];
                    @endphp
                    <span class="badge {{ $statusClasses[$request->statut] ?? 'bg-primary' }}">
                        {{ ucfirst($request->statut) }}
                    </span>
                </td>
                <td>
                    {{ $request->created_at->format('d/m/Y') }}<br>
                    <small>{{ $request->created_at->format('H:i') }}</small>
                </td>
                <td>
                    <div class="btn-group btn-group-sm">
                        <a href="{{ route('admin.project-requests.show', $request->id) }}" 
                           class="btn btn-outline-primary" title="Voir">
                            <i class="fas fa-eye"></i>
                        </a>
                        <a href="mailto:{{ $request->email }}" 
                           class="btn btn-outline-secondary" title="Envoyer un email">
                            <i class="fas fa-envelope"></i>
                        </a>
                        <form action="{{ route('admin.project-requests.destroy', $request->id) }}" 
                              method="POST" class="d-inline" 
                              onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer cette demande ?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-outline-danger" title="Supprimer">
                                <i class="fas fa-trash"></i>
                            </button>
                        </form>
                    </div>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    
    <!-- Pagination -->
    <div class="d-flex justify-content-center">
        {{ $requests->links() }}
    </div>
</div>
@endsection

@push('styles')
<style>
.badge {
    font-size: 0.8em;
    padding: 0.35em 0.65em;
}

.bg-primary { background-color: #007bff !important; }
.bg-warning { background-color: #ffc107 !important; color: #000; }
.bg-info { background-color: #17a2b8 !important; }
.bg-success { background-color: #28a745 !important; }
.bg-danger { background-color: #dc3545 !important; }
.bg-secondary { background-color: #6c757d !important; }
</style>
@endpush