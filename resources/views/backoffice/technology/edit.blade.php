@extends('backoffice.layouts.main')

@section('content')
    <div class="container">
        <h1 class="mt-5 mb-4">Modification du membre d'équipage : {{$technology->nom_fr}}</h1>

        <form action="{{ route('backoffice.crew.update', $technology->id) }}" method="POST" enctype="multipart/form-data">
            @csrf <!-- Ajoute le jeton CSRF pour la sécurité -->
            @method('POST') <!-- en php que 2 method connues : get et post -->
            <input type="file" id="image" name="image" accept="image/png, image/jpeg">
            @error('image')
            <span>{{ $message }}</span>
            @enderror

            <div class="form-group">
                <label for="nom_fr">Nom (FR)</label>
                <input type="text" class="form-control" id="nom_fr" name="nom_fr" value="{{ $technology->nom_fr }}">
                @error('nom_fr')
                <span>{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="description_fr">Description (FR)</label>
                <textarea class="form-control" id="description_fr" name="description_fr">{{ $technology->description_fr }}</textarea>
                @error('description_fr')
                <span>{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="nom_en">Nom (EN)</label>
                <input type="text" class="form-control" id="nom_en" name="nom_en" value="{{ $technology->nom_en }}">
                @error('nom_en')
                <span>{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="description_en">Description (EN)</label>
                <textarea class="form-control" id="description_en" name="description_en">{{ $technology->description_en }}</textarea>
                @error('description_fr')
                <span>{{ $message }}</span>
                @enderror
            </div>         
            <button type="submit" class="btn btn-primary">Mettre à jour</button>
        </form>
    </div>
@endsection
