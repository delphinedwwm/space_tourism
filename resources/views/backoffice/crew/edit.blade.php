<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier</title>
    <!-- Link Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1 class="mt-5 mb-4">Modification du membre d'équipage : {{$crew->nom_fr}}</h1>

        <form action="{{ route('backoffice.crew.update', $crew->id) }}" method="POST" enctype="multipart/form-data">
            @csrf <!-- Ajoute le jeton CSRF pour la sécurité -->
            @method('POST') <!-- en php que 2 method connues : get et post -->
            <input type="file" id="image" name="image" accept="image/png, image/jpeg">
            @error('image')
            <span>{{ $message }}</span>
            @enderror
            
            <div class="form-group">
                <label for="fonction_fr">Fonction (FR)</label>
                <input type="text" class="form-control" id="fonction_fr" name="fonction_fr" value="{{ $crew->fonction_fr }}">
                @error('fonction_fr')
                <span>{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="nom_fr">Nom (FR)</label>
                <input type="text" class="form-control" id="nom_fr" name="nom_fr" value="{{ $crew->nom_fr }}">
                @error('nom_fr')
                <span>{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="description_fr">Description (FR)</label>
                <textarea class="form-control" id="description_fr" name="description_fr">{{ $crew->description_fr }}</textarea>
                @error('description_fr')
                <span>{{ $message }}</span>
                @enderror
            </div>
            
            <div class="form-group">
                <label for="fonction_en">Fonction (EN)</label>
                <input type="text" class="form-control" id="fonction_en" name="fonction_en" value="{{ $crew->fonction_en }}">
                @error('fonction_en')
                <span>{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="nom_en">Nom (EN)</label>
                <input type="text" class="form-control" id="nom_en" name="nom_en" value="{{ $crew->nom_en }}">
                @error('nom_en')
                <span>{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="description_en">Description (EN)</label>
                <textarea class="form-control" id="description_en" name="description_en">{{ $crew->description_en }}</textarea>
                @error('description_fr')
                <span>{{ $message }}</span>
                @enderror
            </div>
           
         
            <button type="submit" class="btn btn-primary">Mettre à jour</button>
        </form>
    </div>

    <!-- Link Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script> -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
