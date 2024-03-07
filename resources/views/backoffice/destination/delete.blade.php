@extends('backoffice.layouts.main')

@section('content')
    <h1>Etes vous sure de vouloir supprimer la planète suivante : {{$destination->titre_fr}}?</h1>
    <form action="{{ route('backoffice.destination.destroy', $destination->id) }}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Supprimer</button>
    </form>
        <a href="#" onclick="event.preventDefault(); document.getElementById('cancel-form').submit();">Annuler</a>
    </form>
    <!-- Formulaire pour l'annulation -->
    <form id="cancel-form" action="{{ route('backoffice.destination.index') }}" method="GET" style="display: none;">
        @csrf
    </form>
@endsection