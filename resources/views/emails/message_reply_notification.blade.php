<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nouvelle réponse - ADH Group</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: #333;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f8f9fa;
        }
        .container {
            background-color: #ffffff;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }
        .header {
            background: linear-gradient(135deg, #0066cc, #004080);
            color: white;
            padding: 30px 20px;
            text-align: center;
        }
        .header h1 {
            margin: 0;
            font-size: 28px;
            font-weight: 600;
        }
        .header p {
            margin: 10px 0 0;
            opacity: 0.9;
        }
        .content {
            padding: 30px;
        }
        .greeting {
            font-size: 18px;
            margin-bottom: 20px;
            color: #0066cc;
        }
        .message-box {
            background-color: #f8f9fa;
            border-left: 4px solid #0066cc;
            padding: 20px;
            margin: 25px 0;
            border-radius: 0 8px 8px 0;
        }
        .button {
            display: inline-block;
            background: linear-gradient(135deg, #0066cc, #004080);
            color: white;
            text-decoration: none;
            padding: 14px 30px;
            border-radius: 6px;
            font-weight: 600;
            font-size: 16px;
            margin: 20px 0;
            text-align: center;
            transition: all 0.3s ease;
        }
        .button:hover {
            background: linear-gradient(135deg, #0055aa, #003366);
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(0, 102, 204, 0.3);
        }
        .footer {
            background-color: #1a1a2e;
            color: white;
            padding: 25px;
            text-align: center;
            font-size: 14px;
        }
        .footer a {
            color: #b3d1ff;
            text-decoration: none;
        }
        .footer a:hover {
            text-decoration: underline;
        }
        .project-info {
            background-color: #f0f8ff;
            border-radius: 8px;
            padding: 15px;
            margin-bottom: 25px;
            border: 1px solid #d1e7ff;
        }
        .info-item {
            margin-bottom: 8px;
        }
        .info-item strong {
            color: #0066cc;
            min-width: 120px;
            display: inline-block;
        }
        .note {
            background-color: #fff3cd;
            border: 1px solid #ffecb5;
            border-radius: 6px;
            padding: 15px;
            margin-top: 25px;
            color: #856404;
        }
        .message-preview {
            background-color: #e6f0ff;
            border-radius: 8px;
            padding: 15px;
            margin: 20px 0;
            border: 1px solid #b3d1ff;
            font-style: italic;
            color: #555;
        }
        .unread-count {
            display: inline-block;
            background-color: #dc3545;
            color: white;
            border-radius: 50%;
            width: 24px;
            height: 24px;
            text-align: center;
            line-height: 24px;
            font-size: 14px;
            font-weight: bold;
            margin-left: 10px;
        }
        @media (max-width: 600px) {
            body {
                padding: 10px;
            }
            .content {
                padding: 20px;
            }
            .button {
                display: block;
                padding: 12px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>ADH Group</h1>
            <p>Nouvelle réponse à votre message</p>
        </div>
        
        <div class="content">
            <div class="greeting">
                Bonjour <strong>{{ $projectRequest->prenom }} {{ $projectRequest->nom }}</strong>,
            </div>
            
            <p>Notre équipe a répondu à votre message concernant votre demande de projet.</p>
            
            <div class="project-info">
                <div class="info-item"><strong>Référence :</strong> #{{ str_pad($projectRequest->id, 5, '0', STR_PAD_LEFT) }}</div>
                <div class="info-item"><strong>Organisation :</strong> {{ $projectRequest->organisation }}</div>
                <div class="info-item"><strong>Date de la demande :</strong> {{ $projectRequest->created_at->format('d/m/Y') }}</div>
            </div>
            
            <div class="message-box">
                <h3 style="margin-top: 0; color: #0066cc;">
                    Vous avez un nouveau message
                    <span class="unread-count">1</span>
                </h3>
                <p>Connectez-vous à votre conversation sécurisée pour lire la réponse complète de notre équipe.</p>
            </div>
            
            <div style="text-align: center; margin: 30px 0;">
                <a href="{{ route('public.messages.show', $conversation->conversation_uid) }}" class="button">
                    Voir la réponse
                </a>
            </div>
            
            <p>Pour accéder à votre conversation :</p>
            <ol style="padding-left: 20px; margin-bottom: 25px;">
                <li>Cliquez sur le bouton ci-dessus</li>
                <li>Si nécessaire, entrez votre code d'accès</li>
                <li>Lisez le nouveau message</li>
                <li>Répondez directement via l'interface</li>
            </ol>
            
            <div class="note">
                <strong>💡 Rappel :</strong><br>
                • Votre conversation est sécurisée et confidentielle<br>
                • Vous pouvez continuer à échanger avec notre équipe via cette interface<br>
                • Toutes les pièces jointes sont accessibles depuis la conversation
            </div>
            
            <p style="margin-top: 30px; color: #666; font-size: 14px;">
                <strong>Lien direct :</strong><br>
                <small style="word-break: break-all;">
                    {{ route('public.messages.show', $conversation->conversation_uid) }}
                </small>
            </p>
        </div>
        
        <div class="footer">
            <p>© {{ date('Y') }} ADH Group. Tous droits réservés.</p>
            <p>
                <small>
                    <a href="#" style="color: #b3d1ff; margin: 0 10px;">Politique de confidentialité</a> | 
                    <a href="#" style="color: #b3d1ff; margin: 0 10px;">Conditions d'utilisation</a> | 
                    <a href="#" style="color: #b3d1ff; margin: 0 10px;">Contact</a>
                </small>
            </p>
            <p style="opacity: 0.7; margin-top: 15px; font-size: 12px;">
                Cet email a été envoyé automatiquement. Merci de ne pas y répondre directement.<br>
                Pour toute question, utilisez notre système de messagerie sécurisé.
            </p>
        </div>
    </div>
</body>
</html>