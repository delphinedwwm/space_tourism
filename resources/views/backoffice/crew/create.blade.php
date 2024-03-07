<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Créer un nouveau membre d'équipage</title>
    <!-- Link Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1 class="mt-5 mb-4">Créer un nouveau membre d'équipage</h1>
<!-- 
        @if ($errors->any() )
            <ul id="errors">
                @foreach ($errors->all() as $error)
                    <li> {{ $error }} </li>
                @endforeach
            </ul>
        @endif -->

        <form action="{{ route('backoffice.crew.store') }}" method="POST" enctype="multipart/form-data">
            @csrf <!-- Ajoute le jeton CSRF pour la sécurité -->
            <input type="file" id = "image" name = "image" accepte = "image/png, image/jpeg" value = "{{ old('image', '') }}">
                @error('image')
                        <span>{{ $message }}</span>
                @enderror
            <div class="form-group">
                <label for="fonction_fr">Fonction (FR)</label>
                <input type="text" class="form-control" id="fonction_fr" name="fonction_fr" value = "{{ old('fonction_fr', '') }}">
                @error('fonction_fr')
                    <span>{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="nom_fr">Nom (FR)</label>
                <input type="text" class="form-control" id="nom_fr" name="nom_fr" value = "{{ old('nom_fr', '') }}">
                @error('nom_fr')
                    <span>{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="description_fr">Description (FR)</label>
                <textarea class="form-control" id="description_fr" name="description_fr">{{ old('description_fr', '') }}</textarea>
                @error('description_fr')
                    <span>{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="fonction_en">Fonction (EN)</label>
                <input type="text" class="form-control" id="fonction_en" name="fonction_en" value = "{{ old('nom_en', '') }}">
                @error('nom_fr')
                    <span>{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="nom_en">Nom (EN)</label>
                <input type="text" class="form-control" id="nom_en" name="nom_en" value = "{{ old('nom_en', '') }}">
                @error('nom_en')
                    <span>{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="description_en">Description (EN)</label>
                <textarea class="form-control" id="description_en" name="description_en">{{ old('description_en', '') }}</textarea>
                @error('description_fr')
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
