@extends('backoffice.layouts.main')

@section('content')
    <div class="container">
        <h1 class="mt-5 mb-4">Crews</h1>
        <a href="" class="btn btn-primary mb-3">Ajouter un membre</a>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Id</th> 
                    <th scope="col">Noms</th>
                    <th scope="col">Image</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($crews as $crew)
                    <tr>
                        <td>{{ $crew->id }}</td> 
                        <td>{{ $crew->nom_fr }} </td>
                        <td><img src="{{ asset($crew->image) }}" alt="{{ $crew->nom_fr }}" class="img-fluid img-thumbnail" style="max-width: 100px;"></td>
                        <td>
                            <a href="{{ route('backoffice.crew.show', $crew->id) }}" class="btn btn-info">Aperçu</a>
                            <a href="{{ route('backoffice.crew.edit', $crew->id) }}" class="btn btn-warning">Modifier</a>
                            <a href="{{ route('backoffice.crew.delete', $crew->id) }}" class="btn btn-danger">Supprimer</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

