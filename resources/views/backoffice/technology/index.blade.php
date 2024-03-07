@extends('backoffice.layouts.main')

@section('content')
    <div class="container">
        <h1 class="mt-5 mb-4">Technologies</h1>
        <a href="{{ route('backoffice.technology.create') }}" class="btn btn-primary mb-3">Ajouter une technologie</a>
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
                @foreach($technologies as $technology)
                    <tr>
                        <td>{{ $technology->id }}</td> 
                        <td>{{ $technology->nom_fr }} <br> {{ $technology->nom_en }} </td>
                        <td><img src="{{ asset($technology->image) }}" alt="{{ $technology->nom_fr }}" class="img-fluid img-thumbnail" style="max-width: 100px;"></td>
                        <td>
                            <a href="{{ route('backoffice.technology.show', $technology->id) }}" class="btn btn-info">Aperçu</a>
                            <a href="{{ route('backoffice.technology.edit', $technology->id) }}" class="btn btn-warning">Modifier</a>
                            <a href="{{ route('backoffice.technology.delete', $technology->id) }}" class="btn btn-danger">Supprimer</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

