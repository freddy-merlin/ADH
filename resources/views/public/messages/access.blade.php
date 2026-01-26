<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accès sécurisé - ADH Group</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        :root {
            --primary-color: #0066cc;
            --primary-dark: #004080;
        }
        
        body {
            background: linear-gradient(135deg, #f8f9fa, #e9ecef);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        .access-card {
            background: white;
            border-radius: 15px;
            padding: 40px;
            box-shadow: 0 10px 30px rgba(0,0,0,0.1);
            max-width: 500px;
            width: 100%;
        }
        
        .logo {
            text-align: center;
            margin-bottom: 30px;
        }
        
        .logo h1 {
            color: var(--primary-color);
            font-weight: 700;
            margin-bottom: 10px;
        }
        
        .logo p {
            color: #666;
        }
        
        .info-box {
            background: #e6f0ff;
            border-left: 4px solid var(--primary-color);
            padding: 20px;
            border-radius: 8px;
            margin-bottom: 25px;
        }
        
        .code-input {
            letter-spacing: 10px;
            font-size: 2rem;
            font-weight: bold;
            text-align: center;
            text-transform: uppercase;
        }
        
        .btn-primary {
            background: linear-gradient(135deg, var(--primary-color), var(--primary-dark));
            border: none;
            padding: 12px;
            font-weight: 600;
            border-radius: 8px;
            width: 100%;
            margin-top: 20px;
            transition: all 0.3s;
        }
        
        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0,102,204,0.2);
        }
        
        .form-text {
            color: #666;
            font-size: 0.9rem;
        }
        
        .error-box {
            background: #ffe6e6;
            border-left: 4px solid #dc3545;
            padding: 15px;
            border-radius: 8px;
            margin-bottom: 20px;
        }
        
        .conversation-info {
            background: #f8f9fa;
            border-radius: 8px;
            padding: 15px;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="access-card">
        <div class="logo">
            <h1><i class="fas fa-lock me-2"></i>ADH Group</h1>
            <p>Accès sécurisé à votre conversation</p>
        </div>
        
        @if($errors->any())
            <div class="error-box">
                <i class="fas fa-exclamation-triangle me-2"></i>
                @foreach($errors->all() as $error)
                    {{ $error }}
                @endforeach
            </div>
        @endif
        
        <div class="conversation-info">
            <h5 class="mb-3"><i class="fas fa-conversation me-2"></i>Détails de la conversation</h5>
            <p class="mb-1"><strong>Client :</strong> {{ $conversation->projectRequest->prenom }} {{ $conversation->projectRequest->nom }}</p>
            <p class="mb-1"><strong>Référence :</strong> #{{ str_pad($conversation->projectRequest->id, 5, '0', STR_PAD_LEFT) }}</p>
            <p class="mb-0"><strong>Date de création :</strong> {{ $conversation->created_at->format('d/m/Y') }}</p>
        </div>
        
        @if(!$conversation->isAccessCodeValid())
            <div class="alert alert-warning">
                <i class="fas fa-exclamation-triangle"></i>
                <strong>Code d'accès expiré</strong><br>
                Le code d'accès pour cette conversation a expiré. Veuillez contacter notre équipe pour obtenir un nouveau code.
            </div>
        @else
            <form method="POST" action="{{ route('public.messages.verify', $conversation->conversation_uid) }}">
                @csrf
                
                <div class="mb-4">
                    <label for="access_code" class="form-label fw-bold">Code d'accès</label>
                    <input type="text" 
                           class="form-control code-input" 
                           id="access_code" 
                           name="access_code" 
                           required 
                           maxlength="6"
                           placeholder="ABCDEF"
                           value="{{ old('access_code') }}">
                    <div class="form-text text-center mt-2">
                        Entrez le code à 6 caractères reçu par email
                    </div>
                </div>
                
                <button type="submit" class="btn btn-primary">
                    <i class="fas fa-unlock-alt me-2"></i> Accéder à la conversation
                </button>
                
                <div class="text-center mt-4">
                    <small class="text-muted">
                        <i class="fas fa-info-circle me-1"></i>
                        Ce code est valide jusqu'au {{ $conversation->access_code_expires_at->format('d/m/Y') }}
                    </small>
                </div>
            </form>
        @endif
        
        <hr class="my-4">
        
        <div class="text-center">
            <small class="text-muted">
                Si vous n'avez pas reçu de code ou si vous rencontrez des problèmes,<br>
                contactez-nous à <a href="mailto:support@adhgroup.com">support@adhgroup.com</a>
            </small>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Focus sur le champ de code
        document.getElementById('access_code').focus();
        
        // Convertir automatiquement en majuscules
        document.getElementById('access_code').addEventListener('input', function(e) {
            this.value = this.value.toUpperCase().replace(/[^A-Z0-9]/g, '');
        });
        
        // Auto-soumettre après 6 caractères
        document.getElementById('access_code').addEventListener('input', function(e) {
            if (this.value.length === 6) {
                this.form.submit();
            }
        });
        
        // Effacer les erreurs quand on commence à taper
        document.getElementById('access_code').addEventListener('keypress', function(e) {
            const errorBox = document.querySelector('.error-box');
            if (errorBox) {
                errorBox.style.display = 'none';
            }
        });
    </script>
</body>
</html>