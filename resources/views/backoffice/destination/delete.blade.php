<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Supprimer une planète</title>
</head>
<body>
    <h1>Etes vous sure de vouloir supprimer la planète suivante : {{$destination->titre_fr}}?</h1>
    <form action="{{ route('backoffice.destination.destroy', $destination->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Supprimer</button>
    </form>
        <button type="submit">Oui, supprimer</button>
        <a href="#" onclick="event.preventDefault(); document.getElementById('cancel-form').submit();">Annuler</a>
    </form>
    <!-- Formulaire pour l'annulation -->
    <form id="cancel-form" action="{{ route('backoffice.destination.index') }}" method="GET" style="display: none;">
        @csrf
    </form>
</body>
</html>