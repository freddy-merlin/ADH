@extends('layouts.admin')

@section('title', 'Détail demande #' . $request->id)

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Demande #{{ str_pad($request->id, 5, '0', STR_PAD_LEFT) }}</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
        <div class="btn-group me-2">
            <a href="{{ route('admin.project-requests.index') }}" class="btn btn-sm btn-outline-secondary">
                <i class="fas fa-arrow-left"></i> Retour
            </a>
            <a href="mailto:{{ $request->email }}" class="btn btn-sm btn-outline-primary">
                <i class="fas fa-envelope"></i> Contacter
            </a>
        </div>
    </div>
</div>

<div class="row">
    <!-- Informations principales -->
    <div class="col-lg-8">
        <div class="card mb-4">
            <div class="card-header bg-primary text-white">
                <i class="fas fa-info-circle me-2"></i> Informations du client
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <h6>Identité</h6>
                        <p><strong>Nom :</strong> {{ $request->prenom }} {{ $request->nom }}</p>
                        <p><strong>Organisation :</strong> {{ $request->organisation }}</p>
                        <p><strong>Rôle :</strong> {{ $request->role }}</p>
                    </div>
                    <div class="col-md-6">
                        <h6>Contact</h6>
                        <p><strong>Email :</strong> <a href="mailto:{{ $request->email }}">{{ $request->email }}</a></p>
                        <p><strong>Téléphone :</strong> <a href="tel:{{ $request->telephone }}">{{ $request->telephone }}</a></p>
                        <p><strong>Date de soumission :</strong> {{ $request->created_at->format('d/m/Y H:i') }}</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Détails du projet -->
        <div class="card mb-4">
            <div class="card-header bg-primary text-white">
                <i class="fas fa-project-diagram me-2"></i> Détails du projet
            </div>
            <div class="card-body">
                <h6>Types de projet</h6>
                <div class="mb-3">
                    @foreach($request->types as $type)
                        <span class="badge bg-primary me-1 mb-1">{{ $type->type }}</span>
                    @endforeach
                    @if($request->type_autre)
                        <p class="mt-2"><strong>Autre :</strong> {{ $request->type_autre }}</p>
                    @endif
                </div>

                <h6>Contexte et objectifs</h6>
                <div class="mb-3">
                    <p><strong>Problème à résoudre :</strong></p>
                    <div class="bg-light p-3 rounded mb-3">
                        {{ $request->probleme }}
                    </div>
                    
                    <p><strong>Objectifs :</strong></p>
                    <div class="bg-light p-3 rounded mb-3">
                        {{ $request->objectifs }}
                    </div>
                    
                    <p><strong>Public cible :</strong> {{ $request->cible }}</p>
                </div>

                <h6>Fonctionnalités souhaitées</h6>
                <div class="mb-3">
                    @if($request->features->count() > 0)
                        <div class="row">
                            @foreach($request->features as $feature)
                                <div class="col-md-4 mb-2">
                                    <span class="badge bg-success">{{ $feature->feature }}</span>
                                </div>
                            @endforeach
                        </div>
                    @else
                        <p class="text-muted">Aucune fonctionnalité spécifiée</p>
                    @endif
                    
                    @if($request->autres_besoins)
                        <p class="mt-3"><strong>Autres besoins :</strong></p>
                        <div class="bg-light p-3 rounded">
                            {{ $request->autres_besoins }}
                        </div>
                    @endif
                </div>

                <h6>Contraintes</h6>
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
            <div class="card-header bg-primary text-white">
                <i class="fas fa-file me-2"></i> Documents joints
            </div>
            <div class="card-body">
                <div class="list-group">
                    @foreach($request->documents as $document)
                    <div class="list-group-item d-flex justify-content-between align-items-center">
                        <div>
                            <i class="fas fa-file-pdf text-danger me-2"></i>
                            {{ $document->original_filename }}
                            <small class="text-muted ms-2">({{ round($document->file_size / 1024) }} KB)</small>
                        </div>
                        <a href="{{ route('admin.project-requests.download', ['request' => $request->id, 'document' => $document->id]) }}" 
                           class="btn btn-sm btn-outline-primary">
                            <i class="fas fa-download"></i> Télécharger
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        @endif
    </div>

    <!-- Sidebar - Actions et historique -->
    <div class="col-lg-4">
        <!-- Mettre à jour le statut -->
        <div class="card mb-4">
            <div class="card-header bg-success text-white">
                <i class="fas fa-sync-alt me-2"></i> Mettre à jour le statut
            </div>
            <div class="card-body">
                <form action="{{ route('admin.project-requests.update-status', $request->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    
                    <div class="mb-3">
                        <label for="status" class="form-label">Nouveau statut</label>
                        <select class="form-select" id="status" name="status" required>
                            <option value="nouveau" {{ $request->status == 'nouveau' ? 'selected' : '' }}>Nouveau</option>
                            <option value="en_analyse" {{ $request->status == 'en_analyse' ? 'selected' : '' }}>En analyse</option>
                            <option value="contacte" {{ $request->status == 'contacte' ? 'selected' : '' }}>Contacté</option>
                            <option value="devis_envoye" {{ $request->status == 'devis_envoye' ? 'selected' : '' }}>Devis envoyé</option>
                            <option value="accepte" {{ $request->status == 'accepte' ? 'selected' : '' }}>Accepté</option>
                            <option value="refuse" {{ $request->status == 'refuse' ? 'selected' : '' }}>Refusé</option>
                            <option value="termine" {{ $request->status == 'termine' ? 'selected' : '' }}>Terminé</option>
                        </select>
                    </div>
                    
                    <div class="mb-3">
                        <label for="comment" class="form-label">Commentaire (visible dans l'historique)</label>
                        <textarea class="form-control" id="comment" name="comment" rows="3" 
                                  placeholder="Ajouter un commentaire..."></textarea>
                    </div>
                    
                    <div class="mb-3">
                        <label for="admin_note" class="form-label">Note interne</label>
                        <textarea class="form-control" id="admin_note" name="admin_note" rows="3" 
                                  placeholder="Note pour l'équipe interne...">{{ $request->admin_note }}</textarea>
                    </div>
                    
                    <button type="submit" class="btn btn-success w-100">
                        <i class="fas fa-save me-1"></i> Enregistrer les modifications
                    </button>
                </form>
            </div>
        </div>

        <!-- Informations techniques -->
        <div class="card mb-4">
            <div class="card-header bg-info text-white">
                <i class="fas fa-server me-2"></i> Informations techniques
            </div>
            <div class="card-body">
                <p><strong>IP :</strong> {{ $request->ip_address }}</p>
                <p><strong>User Agent :</strong></p>
                <small class="text-muted">{{ Str::limit($request->user_agent, 100) }}</small>
            </div>
        </div>

        <!-- Historique des statuts -->
        <div class="card">
            <div class="card-header bg-secondary text-white">
                <i class="fas fa-history me-2"></i> Historique des statuts
            </div>
            <div class="card-body">
                <div class="timeline">
                    @foreach($request->statusHistories as $history)
                    <div class="timeline-item mb-3">
                        <div class="timeline-marker"></div>
                        <div class="timeline-content">
                            <div class="d-flex justify-content-between">
                                <strong>{{ ucfirst(str_replace('_', ' ', $history->nouveau_statut)) }}</strong>
                                <small class="text-muted">{{ $history->created_at->format('d/m H:i') }}</small>
                            </div>
                            <small>Par : {{ $history->changed_by }}</small>
                            @if($history->commentaire)
                                <p class="mb-0 mt-1">{{ $history->commentaire }}</p>
                            @endif
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.timeline {
    position: relative;
    padding-left: 20px;
}

.timeline-item {
    position: relative;
}

.timeline-marker {
    position: absolute;
    left: -20px;
    top: 5px;
    width: 10px;
    height: 10px;
    background: #6c757d;
    border-radius: 50%;
}

.timeline-content {
    padding-left: 10px;
    border-left: 2px solid #dee2e6;
    padding-bottom: 10px;
}
</style>
@endsection