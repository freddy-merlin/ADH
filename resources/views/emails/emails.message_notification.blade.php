<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nouveau message - ADH Group</title>
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
        .access-info {
            background-color: #e6f0ff;
            border: 1px solid #b3d1ff;
            border-radius: 8px;
            padding: 20px;
            margin: 25px 0;
        }
        .access-code {
            font-size: 28px;
            font-weight: bold;
            color: #0066cc;
            letter-spacing: 3px;
            text-align: center;
            margin: 10px 0;
            padding: 10px;
            background-color: white;
            border-radius: 6px;
            border: 2px dashed #0066cc;
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
        .steps {
            list-style-type: none;
            padding-left: 0;
            margin: 25px 0;
        }
        .steps li {
            margin-bottom: 15px;
            padding-left: 30px;
            position: relative;
        }
        .steps li:before {
            content: "✓";
            position: absolute;
            left: 0;
            color: #0066cc;
            font-weight: bold;
            font-size: 18px;
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
        @media (max-width: 600px) {
            body {
                padding: 10px;
            }
            .content {
                padding: 20px;
            }
            .access-code {
                font-size: 24px;
                padding: 8px;
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
            <p>Communication sécurisée</p>
        </div>
        
        <div class="content">
            <div class="greeting">
                Bonjour <strong>{{ $projectRequest->prenom }} {{ $projectRequest->nom }}</strong>,
            </div>
            
            <p>Vous avez reçu un nouveau message concernant votre demande de projet.</p>
            
            <div class="project-info">
                <div class="info-item"><strong>Référence :</strong> #{{ str_pad($projectRequest->id, 5, '0', STR_PAD_LEFT) }}</div>
                <div class="info-item"><strong>Organisation :</strong> {{ $projectRequest->organisation }}</div>
                <div class="info-item"><strong>Date de la demande :</strong> {{ $projectRequest->created_at->format('d/m/Y') }}</div>
            </div>
            
            @if($accessCode)
            <div class="access-info">
                <h3 style="margin-top: 0; color: #0066cc;">Votre code d'accès unique :</h3>
                <div class="access-code">{{ $accessCode }}</div>
                <p style="text-align: center; color: #666; font-size: 14px;">
                    Ce code est requis pour accéder à votre conversation sécurisée
                </p>
            </div>
            @endif
            
            <div style="text-align: center; margin: 30px 0;">
                <a href="{{ route('public.messages.access', $conversation->conversation_uid) }}" class="button">
                    Accéder à la conversation
                </a>
            </div>
            
            <p>Pour accéder à votre conversation sécurisée :</p>
            <ol class="steps">
                <li>Cliquez sur le bouton ci-dessus ou copiez ce lien :<br>
                    <small style="color: #666; word-break: break-all;">
                        {{ route('public.messages.access', $conversation->conversation_uid) }}
                    </small>
                </li>
                @if($accessCode)
                <li>Entrez le code d'accès : <strong>{{ $accessCode }}</strong></li>
                @endif
                <li>Lisez le message de notre équipe</li>
                <li>Répondez directement via l'interface sécurisée</li>
            </ol>
            
            <div class="note">
                <strong>⚠️ Important :</strong><br>
                • Ce lien et ce code sont personnels et confidentiels<br>
                • Ne les partagez pas avec des tiers<br>
                • L'accès est valide pendant 7 jours<br>
                • Conservez cet email pour référence future
            </div>
            
            <p style="margin-top: 30px; color: #666;">
                Si vous rencontrez des difficultés pour accéder à la conversation,<br>
                contactez-nous à <a href="mailto:support@adhgroup.com" style="color: #0066cc;">support@adhgroup.com</a>
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