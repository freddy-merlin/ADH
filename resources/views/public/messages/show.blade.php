<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversation - ADH Group</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        :root {
            --primary-color: #0066cc;
            --primary-dark: #004080;
        }
        
        body {
            background-color: #f5f7fb;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        .navbar {
            background: linear-gradient(135deg, var(--primary-color), var(--primary-dark));
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        }
        
        .conversation-container {
            max-width: 800px;
            margin: 30px auto;
            background: white;
            border-radius: 15px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.08);
            overflow: hidden;
        }
        
        .messages-wrapper {
            max-height: 60vh;
            overflow-y: auto;
            padding: 20px;
        }
        
        .message {
            margin-bottom: 20px;
            display: flex;
        }
        
        .message.admin {
            justify-content: flex-end;
        }
        
        .message.user {
            justify-content: flex-start;
        }
        
        .message-bubble {
            max-width: 70%;
            padding: 15px;
            border-radius: 15px;
            position: relative;
            word-wrap: break-word;
        }
        
        .message.admin .message-bubble {
            background: linear-gradient(135deg, var(--primary-color), var(--primary-dark));
            color: white;
            border-bottom-right-radius: 5px;
        }
        
        .message.user .message-bubble {
            background: #f0f8ff;
            color: #333;
            border: 1px solid #e0e0e0;
            border-bottom-left-radius: 5px;
        }
        
        .message-time {
            font-size: 0.8rem;
            color: #999;
            margin-top: 5px;
        }
        
        .message.admin .message-time {
            text-align: right;
            color: rgba(255,255,255,0.8);
        }
        
        .reply-form {
            background: white;
            border-top: 1px solid #e0e0e0;
            padding: 20px;
        }
        
        .btn-primary {
            background: linear-gradient(135deg, var(--primary-color), var(--primary-dark));
            border: none;
            border-radius: 8px;
            padding: 10px 25px;
            font-weight: 600;
        }
        
        .btn-primary:hover {
            background: linear-gradient(135deg, #0055aa, #003366);
        }
        
        .attachment {
            display: inline-block;
            background: rgba(255,255,255,0.1);
            padding: 8px 12px;
            border-radius: 6px;
            margin-top: 10px;
            border: 1px solid rgba(255,255,255,0.2);
        }
        
        .attachment a {
            color: inherit;
            text-decoration: none;
        }
        
        .attachment a:hover {
            text-decoration: underline;
        }
        
        .info-card {
            background: #e6f0ff;
            border-radius: 10px;
            padding: 20px;
            margin: 20px;
            border-left: 4px solid var(--primary-color);
        }
        
        #messagesContainer {
            scrollbar-width: thin;
            scrollbar-color: #adb5bd #f8f9fa;
        }
        
        #messagesContainer::-webkit-scrollbar {
            width: 8px;
        }
        
        #messagesContainer::-webkit-scrollbar-track {
            background: #f8f9fa;
            border-radius: 4px;
        }
        
        #messagesContainer::-webkit-scrollbar-thumb {
            background-color: #adb5bd;
            border-radius: 4px;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="#">
                <i class="fas fa-shield-alt me-2"></i>ADH Group - Conversation sécurisée
            </a>
            <div class="navbar-text">
                <small>Session valide 24h</small>
            </div>
        </div>
    </nav>

    <div class="container my-4">
        <div class="conversation-container">
            <!-- En-tête -->
            <div class="info-card">
                <div class="row align-items-center">
                    <div class="col-md-8">
                        <h5 class="mb-2"><i class="fas fa-user me-2"></i>{{ $conversation->projectRequest->prenom }} {{ $conversation->projectRequest->nom }}</h5>
                        <p class="mb-1"><strong>Organisation :</strong> {{ $conversation->projectRequest->organisation }}</p>
                        <p class="mb-0"><strong>Référence :</strong> #{{ str_pad($conversation->projectRequest->id, 5, '0', STR_PAD_LEFT) }}</p>
                    </div>
                    <div class="col-md-4 text-end">
                        <div class="badge bg-primary mb-2">Conversation active</div>
                        <p class="mb-0 text-muted"><small>Créée le {{ $conversation->created_at->format('d/m/Y') }}</small></p>
                    </div>
                </div>
            </div>

            <!-- Messages -->
            <div id="messagesContainer" class="messages-wrapper">
                @foreach($conversation->messages as $message)
                    <div class="message {{ $message->sender_type === 'admin' ? 'admin' : 'user' }}">
                        <div class="message-bubble">
                            <div class="message-content">
                                {!! nl2br(e($message->content)) !!}
                                
                                @if($message->attachments->count() > 0)
                                    <div class="attachments mt-2">
                                        @foreach($message->attachments as $attachment)
                                            <div class="attachment">
                                                <a href="{{ Storage::url($attachment->file_path) }}" target="_blank" class="d-flex align-items-center">
                                                    <i class="fas fa-paperclip me-2"></i>
                                                    <span>{{ $attachment->original_filename }}</span>
                                                    <small class="ms-2">({{ round($attachment->file_size / 1024) }} KB)</small>
                                                </a>
                                            </div>
                                        @endforeach
                                    </div>
                                @endif
                            </div>
                            <div class="message-time">
                                {{ $message->created_at->format('d/m/Y H:i') }}
                                @if($message->sender_type === 'admin')
                                    <i class="fas fa-user-tie ms-2"></i>
                                @else
                                    <i class="fas fa-user ms-2"></i>
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Formulaire de réponse -->
            <div class="reply-form">
                <form id="replyForm">
                    @csrf
                    <div class="mb-3">
                        <label for="replyContent" class="form-label">Votre réponse</label>
                        <textarea class="form-control" id="replyContent" name="content" rows="3" 
                                  required placeholder="Tapez votre message ici..." maxlength="5000"></textarea>
                        <div class="form-text text-end">
                            <span id="charCount">0</span>/5000 caractères
                        </div>
                    </div>
                    <div class="d-flex justify-content-between align-items-center">
                        <small class="text-muted">
                            <i class="fas fa-lock me-1"></i>
                            Conversation sécurisée et chiffrée
                        </small>
                        <button type="submit" class="btn btn-primary" id="submitBtn">
                            <i class="fas fa-paper-plane me-2"></i>Envoyer
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Faire défiler vers le bas des messages
        function scrollToBottom() {
            const container = document.getElementById('messagesContainer');
            container.scrollTop = container.scrollHeight;
        }

        // Compteur de caractères
        $('#replyContent').on('input', function() {
            const length = $(this).val().length;
            $('#charCount').text(length);
            
            if (length > 5000) {
                $(this).val($(this).val().substring(0, 5000));
                $('#charCount').text('5000').addClass('text-danger');
            } else {
                $('#charCount').removeClass('text-danger');
            }
        });

        // Envoi du formulaire de réponse
        $('#replyForm').on('submit', function(e) {
            e.preventDefault();

            const content = $('#replyContent').val().trim();
            if (content.length < 2) {
                alert('Le message doit contenir au moins 2 caractères.');
                return;
            }

            const formData = new FormData(this);
            const button = $('#submitBtn');
            const originalText = button.html();

            // Désactiver le bouton
            button.prop('disabled', true);
            button.html('<i class="fas fa-spinner fa-spin me-2"></i>Envoi...');

            $.ajax({
                url: '{{ route("public.messages.reply", $conversation->conversation_uid) }}',
                method: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                success: function(response) {
                    if (response.success) {
                        // Réinitialiser le formulaire
                        $('#replyContent').val('');
                        $('#charCount').text('0');
                        
                        // Recharger la page pour voir le nouveau message
                        location.reload();
                    } else {
                        alert('Erreur: ' + (response.message || 'Une erreur est survenue'));
                        button.prop('disabled', false);
                        button.html(originalText);
                    }
                },
                error: function(xhr) {
                    if (xhr.status === 403) {
                        alert('Votre session a expiré. Vous allez être redirigé.');
                        window.location.href = '{{ route("public.messages.access", $conversation->conversation_uid) }}';
                    } else if (xhr.responseJSON && xhr.responseJSON.errors) {
                        const errors = Object.values(xhr.responseJSON.errors).flat().join('\n');
                        alert('Erreur de validation:\n' + errors);
                    } else {
                        alert('Une erreur réseau est survenue. Veuillez réessayer.');
                    }
                    button.prop('disabled', false);
                    button.html(originalText);
                }
            });
        });

        // Au chargement de la page
        $(document).ready(function() {
            scrollToBottom();
            
            // Rafraîchir automatiquement les messages toutes les 30 secondes
            setInterval(function() {
                $.get(window.location.href, function(data) {
                    // Vous pourriez implémenter une mise à jour partielle ici
                    // Pour l'instant, on laisse le rechargement complet
                });
            }, 30000);
        });
    </script>
</body>
</html>