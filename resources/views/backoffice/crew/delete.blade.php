@extends('backoffice.layouts.main')

@section('content')
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
@endsection