@extends('layouts.admin')

@section('title', 'Détails de la demande #' . $request->id)

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Demande #{{ str_pad($request->id, 5, '0', STR_PAD_LEFT) }}</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
        <a href="{{ route('admin.project-requests.index') }}" class="btn btn-sm btn-outline-secondary">
            <i class="fas fa-arrow-left"></i> Retour
        </a>
    </div>
</div>

<div class="row">
    <div class="col-md-8">
        <!-- Informations générales -->
        <div class="card mb-4">
            <div class="card-header">
                <h5 class="mb-0"><i class="fas fa-info-circle"></i> Informations générales</h5>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <p><strong>Nom complet :</strong><br>{{ $request->prenom }} {{ $request->nom }}</p>
                        <p><strong>Organisation :</strong><br>{{ $request->organisation }}</p>
                        <p><strong>Rôle :</strong><br>{{ $request->role }}</p>
                    </div>
                    <div class="col-md-6">
                        <p><strong>Email :</strong><br>{{ $request->email }}</p>
                        <p><strong>Téléphone :</strong><br>{{ $request->telephone }}</p>
                        <p><strong>Date de création :</strong><br>{{ $request->created_at->format('d/m/Y H:i') }}</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Type de projet -->
        <div class="card mb-4">
            <div class="card-header">
                <h5 class="mb-0"><i class="fas fa-laptop-code"></i> Type de projet</h5>
            </div>
            <div class="card-body">
                @foreach($request->types as $type)
                    @php
                        $typeLabel = $type->pivot->custom_value ?? $type->label;
                    @endphp
                    <span class="badge bg-secondary mb-2 me-2">{{ $typeLabel }}</span>
                @endforeach
                @if($request->type_autre)
                    <p class="mt-3"><strong>Précisions :</strong> {{ $request->type_autre }}</p>
                @endif
            </div>
        </div>

        <!-- Contexte & objectifs -->
        <div class="card mb-4">
            <div class="card-header">
                <h5 class="mb-0"><i class="fas fa-bullseye"></i> Contexte & objectifs</h5>
            </div>
            <div class="card-body">
                <p><strong>Problème à résoudre :</strong></p>
                <p>{{ $request->probleme }}</p>
                
                <p class="mt-3"><strong>Objectifs :</strong></p>
                <p>{{ $request->objectifs }}</p>
                
                <p class="mt-3"><strong>Public cible :</strong> {{ $request->cible }}</p>
            </div>
        </div>

        <!-- Fonctionnalités -->
        <div class="card mb-4">
            <div class="card-header">
                <h5 class="mb-0"><i class="fas fa-cogs"></i> Fonctionnalités</h5>
            </div>
            <div class="card-body">
                @foreach($request->features as $feature)
                    @php
                        $featureLabel = $feature->pivot->custom_value ?? $feature->label;
                    @endphp
                    <span class="badge bg-info mb-2 me-2">{{ $featureLabel }}</span>
                @endforeach
                
                @if($request->autres_besoins)
                    <p class="mt-3"><strong>Autres besoins :</strong></p>
                    <p>{{ $request->autres_besoins }}</p>
                @endif
            </div>
        </div>

        <!-- Contraintes -->
        <div class="card mb-4">
            <div class="card-header">
                <h5 class="mb-0"><i class="fas fa-calendar-check"></i> Contraintes</h5>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4">
                        <p><strong>Délais :</strong><br>{{ $request->delais ?? 'Non spécifié' }}</p>
                    </div>
                    <div class="col-md-4">
                        <p><strong>Budget :</strong><br>{{ $request->budget ?? 'Non spécifié' }}</p>
                    </div>
                    <div class="col-md-4">
                        <p><strong>Urgence :</strong><br>{{ $request->urgence ?? 'Non spécifié' }}</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Documents -->
        @if($request->documents->count() > 0)
        <div class="card mb-4">
            <div class="card-header">
                <h5 class="mb-0"><i class="fas fa-file"></i> Documents joints ({{ $request->documents->count() }})</h5>
            </div>
            <div class="card-body">
                <ul class="list-group">
                    @foreach($request->documents as $document)
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <div>
                            <i class="fas fa-file-pdf text-danger"></i>
                            {{ $document->original_filename }}
                            <small class="text-muted">({{ number_format($document->file_size / 1024, 2) }} KB)</small>
                        </div>
                        <a href="{{ Storage::url($document->file_path) }}" 
                           target="_blank" 
                           class="btn btn-sm btn-outline-primary">
                            <i class="fas fa-download"></i> Télécharger
                        </a>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
        @endif
    </div>

    <div class="col-md-4">
        <!-- Statut et actions -->
        <div class="card mb-4">
            <div class="card-header">
                <h5 class="mb-0"><i class="fas fa-tasks"></i> Gestion de la demande</h5>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.project-requests.update', $request->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    
                    <div class="mb-3">
                        <label for="statut" class="form-label">Statut actuel</label>
                        <select class="form-select" id="statut" name="statut" required>
                            <option value="nouveau" {{ $request->statut == 'nouveau' ? 'selected' : '' }}>Nouveau</option>
                            <option value="en_cours" {{ $request->statut == 'en_cours' ? 'selected' : '' }}>En cours</option>
                            <option value="analyse" {{ $request->statut == 'analyse' ? 'selected' : '' }}>En analyse</option>
                            <option value="accepte" {{ $request->statut == 'accepte' ? 'selected' : '' }}>Accepté</option>
                            <option value="refuse" {{ $request->statut == 'refuse' ? 'selected' : '' }}>Refusé</option>
                            <option value="termine" {{ $request->statut == 'termine' ? 'selected' : '' }}>Terminé</option>
                        </select>
                    </div>
                    
                    <div class="mb-3">
                        <label for="commentaire" class="form-label">Commentaire (optionnel)</label>
                        <textarea class="form-control" id="commentaire" name="commentaire" rows="3" 
                                  placeholder="Ajouter un commentaire pour l'historique..."></textarea>
                    </div>
                    
                    <button type="submit" class="btn btn-primary w-100">
                        <i class="fas fa-save"></i> Mettre à jour le statut
                    </button>
                </form>
                
                <hr>
                
                <div class="d-grid gap-2">
                    <a href="mailto:{{ $request->email }}?subject=Réponse%20à%20votre%20demande%20de%20projet" 
                       class="btn btn-outline-primary">
                        <i class="fas fa-envelope"></i> Envoyer un email
                    </a>

                     
                    <div class="d-grid gap-2 mt-3">
                        @if($request->conversation)
                            <a href="{{ route('admin.messages.show', $request->conversation->id) }}" 
                            class="btn btn-primary">
                                <i class="fas fa-comments"></i> Voir la conversation
                            </a>
                        @else
                            <a href="{{ route('admin.messages.create', $request->id) }}" 
                            class="btn btn-success">
                                <i class="fas fa-comment-medical"></i> Démarrer une conversation
                            </a>
                        @endif
                    </div>
                    
                    <form action="{{ route('admin.project-requests.destroy', $request->id) }}" 
                          method="POST" 
                          onsubmit="return confirm('Êtes-vous sûr de vouloir supprimer cette demande ? Cette action est irréversible.')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-outline-danger w-100">
                            <i class="fas fa-trash"></i> Supprimer la demande
                        </button>
                    </form>
                </div>
            </div>
        </div>

        <!-- Historique des statuts -->
        <div class="card">
            <div class="card-header">
                <h5 class="mb-0"><i class="fas fa-history"></i> Historique des statuts</h5>
            </div>
            <div class="card-body">
                @if($request->statusHistories->count() > 0)
                    <div class="timeline">
                        @foreach($request->statusHistories as $history)
                        <div class="timeline-item mb-3">
                            <div class="timeline-marker bg-primary"></div>
                            <div class="timeline-content">
                                <small class="text-muted">{{ $history->created_at->format('d/m/Y H:i') }}</small>
                                <p class="mb-1">
                                    <strong>{{ $history->changed_by ?? 'Système' }}</strong>
                                    @if($history->ancien_statut)
                                        <span class="badge bg-secondary">{{ $history->ancien_statut }}</span>
                                        <i class="fas fa-arrow-right mx-1"></i>
                                    @endif
                                    <span class="badge bg-primary">{{ $history->nouveau_statut }}</span>
                                </p>
                                @if($history->commentaire)
                                    <p class="mb-0"><em>"{{ $history->commentaire }}"</em></p>
                                @endif
                            </div>
                        </div>
                        @endforeach
                    </div>
                @else
                    <p class="text-muted text-center mb-0">Aucun historique disponible</p>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection

@push('styles')
<style>
.timeline {
    position: relative;
    padding-left: 20px;
}

.timeline-item {
    position: relative;
    padding-left: 20px;
}

.timeline-marker {
    position: absolute;
    left: 0;
    top: 5px;
    width: 10px;
    height: 10px;
    border-radius: 50%;
    background: #007bff;
}

.timeline-content {
    margin-left: 10px;
}

.badge {
    font-size: 0.8em;
    padding: 0.35em 0.65em;
}
</style>
@endpush