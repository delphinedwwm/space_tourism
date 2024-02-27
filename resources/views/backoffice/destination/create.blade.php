<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Créer une nouvelle planète</title>
    <!-- Link Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1 class="mt-5 mb-4">Créer une nouvelle planète</h1>
<!-- 
        @if ($errors->any() )
            <ul id="errors">
                @foreach ($errors->all() as $error)
                    <li> {{ $error }} </li>
                @endforeach
            </ul>
        @endif -->

        <form action="{{ route('backoffice.destination.store') }}" method="POST" enctype="multipart/form-data">
            @csrf <!-- Ajoute le jeton CSRF pour la sécurité -->
            <input type="file" id = "image" name = "image" accepte = "image/png, image/jpeg" value = "{{ old('image', '') }}">
                @error('image')
                        <span>{{ $message }}</span>
                @enderror
            <div class="form-group">
                <label for="titre_fr">Titre (FR)</label>
                <input type="text" class="form-control" id="titre_fr" name="titre_fr" value = "{{ old('titre_fr', '') }}">
                @error('titre_fr')
                    <span>{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="destination_fr">Destination (FR)</label>
                <textarea class="form-control" id="destination_fr" name="destination_fr">{{ old('destination_fr', '') }}</textarea>
                @error('destination_fr')
                    <span>{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="distance_fr">Distance (FR)</label>
                <input type="text" class="form-control" id="distance_fr" name="distance_fr" value = "{{ old('titre_fr', '') }}">
                @error('titre_fr')
                    <span>{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="duree_fr">Durée (FR)</label>
                <input type="text" class="form-control" id="duree_fr" name="duree_fr" value = "{{ old('duree_fr', '') }}">
                @error('duree_fr')
                    <span>{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="titre_en">Titre (EN)</label>
                <input type="text" class="form-control" id="titre_en" name="titre_en" value = "{{ old('titre_en', '') }}">
                @error('titre_en')
                    <span>{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="destination_en">Destination (EN)</label>
                <textarea class="form-control" id="destination_en" name="destination_en">{{ old('destination_en', '') }}</textarea>
                @error('destination_fr')
                    <span>{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="distance_en">Distance (EN)</label>
                <input type="text" class="form-control" id="distance_en" name="distance_en" value = "{{ old('titre_en', '') }}">
                @error('titre_fr')
                    <span>{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="duree_en">Durée (EN)</label>
                <input type="text" class="form-control" id="duree_en" name="duree_en" value = "{{ old('duree_en', '') }}">
                @error('distance_en')
                    <span>{{ $message }}</span>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Créer</button>
        </form>
    </div>

    <!-- Link Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script> -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
