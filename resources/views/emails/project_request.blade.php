<!DOCTYPE html>
<html>
<head>
    <title>Nouvelle demande de projet</title>
</head>
<body>
    <h1>Nouvelle demande de projet</h1>
    <p><strong>Nom :</strong> {{ $projectRequest->prenom }} {{ $projectRequest->nom }}</p>
    <p><strong>Organisation :</strong> {{ $projectRequest->organisation }}</p>
    <p><strong>Email :</strong> {{ $projectRequest->email }}</p>
    <p><strong>Téléphone :</strong> {{ $projectRequest->telephone }}</p>
    <p><strong>Rôle :</strong> {{ $projectRequest->role }}</p>
    <p><strong>Problème :</strong> {{ $projectRequest->probleme }}</p>
    <p><strong>Objectifs :</strong> {{ $projectRequest->objectifs }}</p>
    <p><strong>Cible :</strong> {{ $projectRequest->cible }}</p>
    <p><strong>Délais :</strong> {{ $projectRequest->delais }}</p>
    <p><strong>Budget :</strong> {{ $projectRequest->budget }}</p>
    <p><strong>Urgence :</strong> {{ $projectRequest->urgence }}</p>
    <p><strong>Date de la demande :</strong> {{ $projectRequest->created_at }}</p>
</body>
</html>