@extends('layouts.admin')

@section('title', 'Conversation #' . $conversation->id)
@section('page-title', 'Conversation #' . $conversation->id)
@section('breadcrumb', 'Messages > Conversation')

@section('content')
<div class="row">
    <div class="col-md-8">
        <div class="card mb-4">
            <div class="card-header">
                <div class="d-flex justify-content-between align-items-center">
                    <h5 class="mb-0">
                        <i class="fas fa-comments"></i> Conversation
                        <small class="text-muted">avec {{ $conversation->projectRequest->prenom }} {{ $conversation->projectRequest->nom }}</small>
                    </h5>
                    <div>
                        <span class="badge bg-primary">Demande #{{ str_pad($conversation->projectRequest->id, 5, '0', STR_PAD_LEFT) }}</span>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="conversation-container" style="max-height: 500px; overflow-y: auto; padding: 15px;">
                    @if($conversation->messages->count() > 0)
                        @foreach($conversation->messages as $message)
                            <div class="message mb-4 {{ $message->sender_type === 'admin' ? 'text-end' : '' }}">
                                <div class="d-flex {{ $message->sender_type === 'admin' ? 'justify-content-end' : 'justify-content-start' }}">
                                    <div class="message-bubble {{ $message->sender_type === 'admin' ? 'bg-primary text-white' : 'bg-light' }}" 
                                         style="max-width: 70%; border-radius: 15px; padding: 10px 15px;">
                                        <div class="message-header mb-2">
                                            <small class="{{ $message->sender_type === 'admin' ? 'text-white-50' : 'text-muted' }}">
                                                <strong>{{ $message->sender_type === 'admin' ? ($message->admin ? $message->admin->name : 'Administrateur') : $conversation->projectRequest->prenom }}</strong>
                                                • {{ $message->created_at->format('d/m/Y H:i') }}
                                                @if($message->is_read && $message->sender_type === 'user')
                                                    <i class="fas fa-check text-success ms-1"></i>
                                                @endif
                                            </small>
                                        </div>
                                        <div class="message-content">
                                            {!! nl2br(e($message->content)) !!}
                                        </div>
                                        
                                        @if($message->attachments->count() > 0)
                                            <div class="message-attachments mt-3">
                                                @foreach($message->attachments as $attachment)
                                                    <div class="attachment-item bg-white rounded p-2 mb-2">
                                                        <div class="d-flex align-items-center">
                                                            <i class="fas fa-paperclip me-2 text-muted"></i>
                                                            <div style="flex: 1;">
                                                                <small class="d-block">{{ $attachment->original_filename }}</small>
                                                                <small class="text-muted">{{ number_format($attachment->file_size / 1024, 2) }} KB</small>
                                                            </div>
                                                            <a href="{{ Storage::url($attachment->file_path) }}" 
                                                               target="_blank" 
                                                               class="btn btn-sm btn-outline-primary">
                                                                <i class="fas fa-download"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            </div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <div class="text-center py-5">
                            <i class="fas fa-comment-slash fa-3x text-muted mb-3"></i>
                            <p class="text-muted">Aucun message dans cette conversation.</p>
                        </div>
                    @endif
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                <h5 class="mb-0"><i class="fas fa-reply"></i> Répondre</h5>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.messages.reply', $conversation->id) }}" method="POST" enctype="multipart/form-data" id="replyForm">
                    @csrf
                    
                    <div class="mb-3">
                        <label for="reply_content" class="form-label">Votre message *</label>
                        <textarea class="form-control" id="reply_content" name="content" rows="5" required 
                                  placeholder="Tapez votre réponse ici..."></textarea>
                    </div>

                    <div class="mb-3">
                        <label for="reply_attachments" class="form-label">Pièces jointes (optionnel)</label>
                        <input type="file" class="form-control" id="reply_attachments" name="attachments[]" multiple>
                        <div class="form-text">
                            Formats acceptés : PDF, DOC, DOCX, XLS, XLSX, JPG, JPEG, PNG (Max 5MB par fichier)
                        </div>
                    </div>

                    <div class="d-flex gap-2">
                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-paper-plane"></i> Envoyer la réponse
                        </button>
                        <a href="{{ route('admin.messages.index') }}" class="btn btn-outline-secondary">
                            <i class="fas fa-arrow-left"></i> Retour aux conversations
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    <div class="col-md-4">
        <div class="card mb-4">
            <div class="card-header">
                <h5 class="mb-0"><i class="fas fa-user"></i> Informations client</h5>
            </div>
            <div class="card-body">
                <p class="mb-2">
                    <strong>Nom :</strong><br>
                    {{ $conversation->projectRequest->prenom }} {{ $conversation->projectRequest->nom }}
                </p>
                <p class="mb-2">
                    <strong>Organisation :</strong><br>
                    {{ $conversation->projectRequest->organisation }}
                </p>
                <p class="mb-2">
                    <strong>Email :</strong><br>
                    {{ $conversation->projectRequest->email }}
                </p>
                <p class="mb-2">
                    <strong>Téléphone :</strong><br>
                    {{ $conversation->projectRequest->telephone }}
                </p>
                <p class="mb-0">
                    <strong>Rôle :</strong><br>
                    {{ $conversation->projectRequest->role }}
                </p>
                
                <hr>
                
                <div class="d-grid gap-2">
                    <a href="{{ route('admin.project-requests.show', $conversation->projectRequest->id) }}" 
                       class="btn btn-outline-primary">
                        <i class="fas fa-external-link-alt"></i> Voir la demande complète
                    </a>
                    <a href="mailto:{{ $conversation->projectRequest->email }}" 
                       class="btn btn-outline-secondary">
                        <i class="fas fa-envelope"></i> Envoyer un email direct
                    </a>
                </div>
            </div>
        </div>
        
        <div class="card">
            <div class="card-header">
                <h5 class="mb-0"><i class="fas fa-link"></i> Informations d'accès</h5>
            </div>
            <div class="card-body">
                <div class="mb-3">
                    <label class="form-label">Lien d'accès public :</label>
                    <div class="input-group mb-2">
                        <input type="text" class="form-control" 
                               value="{{ route('public.messages.access', $conversation->conversation_uid) }}" 
                               readonly id="accessLink">
                        <button class="btn btn-outline-secondary" type="button" onclick="copyAccessLink()">
                            <i class="fas fa-copy"></i>
                        </button>
                    </div>
                    <small class="text-muted">
                        Lien pour que le client accède à la conversation
                    </small>
                </div>
                
                @if($conversation->access_code)
                    <div class="mb-3">
                        <label class="form-label">Code d'accès :</label>
                        <div class="input-group">
                            <input type="text" class="form-control" value="{{ $conversation->access_code }}" readonly id="accessCode">
                            <button class="btn btn-outline-secondary" type="button" onclick="copyAccessCode()">
                                <i class="fas fa-copy"></i>
                            </button>
                        </div>
                        <small class="text-muted">
                            Valide jusqu'au {{ $conversation->access_code_expires_at->format('d/m/Y H:i') }}
                        </small>
                    </div>
                @else
                    <div class="alert alert-warning">
                        <i class="fas fa-exclamation-triangle"></i> 
                        Aucun code d'accès actif. Le client ne peut pas accéder à la conversation.
                    </div>
                @endif
                
                <div class="alert alert-info">
                    <small>
                        <i class="fas fa-info-circle"></i> 
                        Le client reçoit automatiquement un email avec le lien et le code à chaque nouveau message.
                    </small>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
    // Faire défiler vers le bas de la conversation
    document.addEventListener('DOMContentLoaded', function() {
        const container = document.querySelector('.conversation-container');
        if (container) {
            container.scrollTop = container.scrollHeight;
        }
    });
    
    // Copier le lien d'accès
    function copyAccessLink() {
        const input = document.getElementById('accessLink');
        input.select();
        input.setSelectionRange(0, 99999);
        document.execCommand('copy');
        
        // Afficher un message temporaire
        const btn = event.target.closest('button');
        const originalHTML = btn.innerHTML;
        btn.innerHTML = '<i class="fas fa-check"></i>';
        btn.classList.remove('btn-outline-secondary');
        btn.classList.add('btn-success');
        
        setTimeout(() => {
            btn.innerHTML = originalHTML;
            btn.classList.remove('btn-success');
            btn.classList.add('btn-outline-secondary');
        }, 2000);
    }
    
    // Copier le code d'accès
    function copyAccessCode() {
        const input = document.getElementById('accessCode');
        input.select();
        input.setSelectionRange(0, 99999);
        document.execCommand('copy');
        
        // Afficher un message temporaire
        const btn = event.target.closest('button');
        const originalHTML = btn.innerHTML;
        btn.innerHTML = '<i class="fas fa-check"></i>';
        btn.classList.remove('btn-outline-secondary');
        btn.classList.add('btn-success');
        
        setTimeout(() => {
            btn.innerHTML = originalHTML;
            btn.classList.remove('btn-success');
            btn.classList.add('btn-outline-secondary');
        }, 2000);
    }
    
    // Validation du formulaire de réponse
    document.getElementById('replyForm').addEventListener('submit', function(e) {
        const content = document.getElementById('reply_content').value.trim();
        
        if (content.length < 5) {
            e.preventDefault();
            alert('Le message doit contenir au moins 5 caractères.');
            return;
        }
    });
</script>

@push('styles')
<style>
    .message-bubble {
        position: relative;
    }
    
    .message-bubble.bg-primary:after {
        content: '';
        position: absolute;
        right: -10px;
        top: 15px;
        border: 10px solid transparent;
        border-left-color: #007bff;
        border-right: 0;
    }
    
    .message-bubble.bg-light:after {
        content: '';
        position: absolute;
        left: -10px;
        top: 15px;
        border: 10px solid transparent;
        border-right-color: #f8f9fa;
        border-left: 0;
    }
    
    .attachment-item {
        border: 1px solid #dee2e6;
        transition: all 0.2s;
    }
    
    .attachment-item:hover {
        background-color: #f8f9fa;
    }
    
    .conversation-container {
        scrollbar-width: thin;
        scrollbar-color: #adb5bd #f8f9fa;
    }
    
    .conversation-container::-webkit-scrollbar {
        width: 8px;
    }
    
    .conversation-container::-webkit-scrollbar-track {
        background: #f8f9fa;
    }
    
    .conversation-container::-webkit-scrollbar-thumb {
        background-color: #adb5bd;
        border-radius: 4px;
    }
</style>
@endpush