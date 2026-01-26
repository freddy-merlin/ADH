@extends('layouts.admin')

@section('title', 'Nouveau message')
@section('page-title', 'Nouveau message')
@section('breadcrumb', 'Messages > Nouveau')

@section('content')
<div class="row">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">
                <h5 class="mb-0">Envoyer un message</h5>
            </div>
            <div class="card-body">
                <div class="mb-4">
                    <div class="alert alert-info">
                        <i class="fas fa-info-circle"></i> 
                        Vous allez envoyer un message sécurisé à cet utilisateur. Un email sera envoyé avec un lien sécurisé pour accéder à la conversation.
                    </div>
                    
                    <h6>Destinataire :</h6>
                    <div class="card bg-light mb-3">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <p class="mb-1"><strong>Nom :</strong> {{ $projectRequest->prenom }} {{ $projectRequest->nom }}</p>
                                    <p class="mb-1"><strong>Organisation :</strong> {{ $projectRequest->organisation }}</p>
                                    <p class="mb-1"><strong>Rôle :</strong> {{ $projectRequest->role }}</p>
                                </div>
                                <div class="col-md-6">
                                    <p class="mb-1"><strong>Email :</strong> {{ $projectRequest->email }}</p>
                                    <p class="mb-1"><strong>Téléphone :</strong> {{ $projectRequest->telephone }}</p>
                                    <p class="mb-1"><strong>Demande # :</strong> {{ str_pad($projectRequest->id, 5, '0', STR_PAD_LEFT) }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <form action="{{ route('admin.messages.store', $projectRequest->id) }}" method="POST" enctype="multipart/form-data" id="messageForm">
                    @csrf
                    
                    <div class="mb-3">
                        <label for="content" class="form-label">Message *</label>
                        <textarea class="form-control" id="content" name="content" rows="10" required 
                                  placeholder="Rédigez votre message ici..."></textarea>
                        <div class="form-text">Le message sera envoyé par email avec un lien sécurisé.</div>
                    </div>

                    <div class="mb-3">
                        <label for="attachments" class="form-label">Pièces jointes (optionnel)</label>
                        <div class="input-group">
                            <input type="file" class="form-control" id="attachments" name="attachments[]" multiple>
                            <button class="btn btn-outline-secondary" type="button" onclick="clearAttachments()">
                                <i class="fas fa-times"></i> Effacer
                            </button>
                        </div>
                        <div class="form-text">
                            Formats acceptés : PDF, DOC, DOCX, XLS, XLSX, JPG, JPEG, PNG (Max 5MB par fichier)
                        </div>
                        <div id="attachmentsPreview" class="mt-2"></div>
                    </div>

                    <div class="alert alert-warning">
                        <i class="fas fa-exclamation-triangle"></i> 
                        <strong>Important :</strong> 
                        <ul class="mb-0 mt-2">
                            <li>L'utilisateur recevra un email avec un lien unique pour accéder à ce message</li>
                            <li>Un code d'accès sera généré et inclus dans l'email</li>
                            <li>La conversation sera accessible pendant 7 jours</li>
                            <li>L'utilisateur pourra répondre via une interface sécurisée</li>
                        </ul>
                    </div>

                    <div class="d-flex gap-2">
                        <button type="submit" class="btn btn-primary" id="submitBtn">
                            <i class="fas fa-paper-plane"></i> Envoyer le message
                        </button>
                        <a href="{{ route('admin.project-requests.show', $projectRequest->id) }}" class="btn btn-outline-secondary">
                            <i class="fas fa-arrow-left"></i> Retour
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    <div class="col-md-4">
        <div class="card">
            <div class="card-header">
                <h5 class="mb-0"><i class="fas fa-lightbulb"></i> Conseils</h5>
            </div>
            <div class="card-body">
                <div class="mb-3">
                    <h6>Exemple de message :</h6>
                    <div class="bg-light p-3 rounded mb-3">
                        <p class="mb-1"><strong>Objet :</strong> Votre demande de projet #{{ str_pad($projectRequest->id, 5, '0', STR_PAD_LEFT) }}</p>
                        <p class="mb-0"><strong>Contenu type :</strong></p>
                        <small class="text-muted">
                            "Bonjour {{ $projectRequest->prenom }},<br><br>
                            Nous avons bien reçu votre demande et nous vous en remercions.<br>
                            Nous aimerions échanger avec vous pour mieux comprendre vos besoins.<br><br>
                            Cordialement,<br>
                            L'équipe ADH Group"
                        </small>
                    </div>
                </div>
                
                <div class="mb-3">
                    <h6>Points importants :</h6>
                    <ul class="mb-0">
                        <li>Soyez clair et professionnel</li>
                        <li>Incluez des informations spécifiques à la demande</li>
                        <li>Proposez des prochaines étapes si possible</li>
                        <li>Signez avec votre nom ou "Équipe ADH Group"</li>
                    </ul>
                </div>
                
                <div class="mt-3">
                    <h6>Statut de la demande :</h6>
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
                    <span class="badge {{ $statusClasses[$projectRequest->statut] ?? 'bg-primary' }}">
                        {{ ucfirst($projectRequest->statut) }}
                    </span>
                </div>
            </div>
        </div>
        
        <div class="card mt-3">
            <div class="card-header">
                <h5 class="mb-0"><i class="fas fa-history"></i> Dernières interactions</h5>
            </div>
            <div class="card-body">
                @if($projectRequest->statusHistories->count() > 0)
                    @foreach($projectRequest->statusHistories->take(3) as $history)
                        <div class="border-bottom pb-2 mb-2">
                            <div class="d-flex justify-content-between">
                                <small class="text-muted">{{ $history->created_at->diffForHumans() }}</small>
                                <span class="badge bg-secondary">{{ $history->nouveau_statut }}</span>
                            </div>
                            @if($history->commentaire)
                                <small class="text-muted">{{ Str::limit($history->commentaire, 50) }}</small>
                            @endif
                        </div>
                    @endforeach
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
    #attachmentsPreview .attachment-item {
        background: #f8f9fa;
        border: 1px solid #dee2e6;
        border-radius: 5px;
        padding: 8px 12px;
        margin-bottom: 5px;
        display: flex;
        justify-content: space-between;
        align-items: center;
    }
    
    #attachmentsPreview .attachment-name {
        flex: 1;
        margin-right: 10px;
        font-size: 0.9em;
        word-break: break-all;
    }
    
    .attachment-size {
        color: #6c757d;
        font-size: 0.8em;
    }
</style>
@endpush

@push('scripts')
<script>
    // Aperçu des fichiers joints
    document.getElementById('attachments').addEventListener('change', function(e) {
        const preview = document.getElementById('attachmentsPreview');
        preview.innerHTML = '';
        
        const files = e.target.files;
        if (files.length === 0) return;
        
        for (let i = 0; i < files.length; i++) {
            const file = files[i];
            const fileSize = (file.size / 1024 / 1024).toFixed(2); // en MB
            const fileType = file.type.split('/')[1] || 'file';
            
            const item = document.createElement('div');
            item.className = 'attachment-item';
            item.innerHTML = `
                <div class="attachment-name">
                    <i class="fas fa-file-${getFileIcon(fileType)} text-primary me-2"></i>
                    ${file.name}
                </div>
                <div class="attachment-size">
                    ${fileSize} MB
                </div>
            `;
            preview.appendChild(item);
        }
    });
    
    function getFileIcon(fileType) {
        const icons = {
            'pdf': 'pdf',
            'doc': 'word',
            'docx': 'word',
            'xls': 'excel',
            'xlsx': 'excel',
            'jpg': 'image',
            'jpeg': 'image',
            'png': 'image',
            'default': 'alt'
        };
        return icons[fileType.toLowerCase()] || icons.default;
    }
    
    function clearAttachments() {
        document.getElementById('attachments').value = '';
        document.getElementById('attachmentsPreview').innerHTML = '';
    }
    
    // Validation du formulaire
    document.getElementById('messageForm').addEventListener('submit', function(e) {
        const content = document.getElementById('content').value.trim();
        const submitBtn = document.getElementById('submitBtn');
        
        if (content.length < 10) {
            e.preventDefault();
            alert('Le message doit contenir au moins 10 caractères.');
            return;
        }
        
        // Désactiver le bouton pendant l'envoi
        submitBtn.disabled = true;
        submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Envoi en cours...';
    });
    
    // Compteur de caractères
    document.getElementById('content').addEventListener('input', function(e) {
        const length = e.target.value.length;
        const counter = document.getElementById('charCounter') || (function() {
            const counter = document.createElement('div');
            counter.id = 'charCounter';
            counter.className = 'form-text text-end';
            e.target.parentNode.appendChild(counter);
            return counter;
        })();
        
        counter.textContent = `${length} caractères`;
        counter.className = `form-text text-end ${length < 10 ? 'text-danger' : 'text-muted'}`;
    });
</script>
@endpush