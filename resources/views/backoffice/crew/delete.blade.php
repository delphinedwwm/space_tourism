<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Supprimer un membre d'équipage</title>
</head>
<body>
    <h1>Etes vous sure de vouloir supprimer : {{$crew->nom_fr}}?</h1>
    <form action="{{ route('backoffice.crew.destroy', $crew->id) }}" method="POST">
        @csrf
        @method('DELETE')
    </form>
        <button type="submit">Oui, supprimer</button>
        <a href="#" onclick="event.preventDefault(); document.getElementById('cancel-form').submit();">Annuler</a>
    </form>
    <!-- Formulaire pour l'annulation -->
    <form id="cancel-form" action="{{ route('backoffice.crew.index') }}" method="GET" style="display: none;">
        @csrf
    </form>
</body>
</html>