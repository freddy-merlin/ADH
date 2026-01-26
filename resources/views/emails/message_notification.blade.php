<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Nouveau message - ADH Group</title>
</head>
<body style="font-family: Arial, sans-serif; line-height: 1.6;">
    <div style="max-width: 600px; margin: 0 auto; padding: 20px;">
        <div style="background: linear-gradient(135deg, #0066cc, #004080); padding: 20px; text-align: center; color: white;">
            <h1>ADH Group</h1>
        </div>
        
        <div style="background: #f8f9fa; padding: 30px; border: 1px solid #e0e0e0;">
            <h2>Bonjour {{ $projectRequest->prenom }} {{ $projectRequest->nom }},</h2>
            
            <p>Vous avez reçu un nouveau message concernant votre demande de projet <strong>#{{ str_pad($projectRequest->id, 5, '0', STR_PAD_LEFT) }}</strong>.</p>
            
            @if($accessCode)
            <div style="background: #fff; border-left: 4px solid #0066cc; padding: 15px; margin: 20px 0;">
                <p><strong>Code d'accès :</strong> <span style="font-size: 1.2em; font-weight: bold; color: #0066cc;">{{ $accessCode }}</span></p>
                <p><small>Ce code est requis pour accéder à votre conversation.</small></p>
            </div>
            @endif
            
            <div style="text-align: center; margin: 30px 0;">
                <a href="{{ route('public.messages.access', $conversation->conversation_uid) }}" 
                   style="background: #0066cc; color: white; padding: 12px 30px; text-decoration: none; border-radius: 5px; display: inline-block; font-weight: bold;">
                    Accéder à la conversation
                </a>
            </div>
            
            <p>Pour accéder à votre conversation :</p>
            <ol>
                <li>Cliquez sur le bouton ci-dessus</li>
                @if($accessCode)
                <li>Entrez le code d'accès : <strong>{{ $accessCode }}</strong></li>
                @endif
                <li>Lisez le message et répondez si nécessaire</li>
            </ol>
            
            <p style="margin-top: 30px; padding-top: 20px; border-top: 1px solid #e0e0e0;">
                <small>Ce lien est valide pendant 7 jours. Si vous rencontrez des problèmes, contactez-nous à l'adresse : contact@adhgroup.com</small>
            </p>
        </div>
        
        <div style="background: #333; color: white; padding: 20px; text-align: center; margin-top: 20px;">
            <p>© {{ date('Y') }} ADH Group. Tous droits réservés.</p>
            <p><small>Cet email a été envoyé automatiquement, merci de ne pas y répondre directement.</small></p>
        </div>
    </div>
</body>
</html>