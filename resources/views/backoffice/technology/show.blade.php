<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Technologies</title>
    <!-- Link Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1 class="mt-5 mb-4">Technologies</h1>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Id</th> 
                    <th scope="col">Image</th>
                    <th scope="col">nom_fr</th>
                    <th scope="col">description_fr</th>
                    <th scope="col">nom_en</th>
                    <th scope="col">description_en</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>  
                <tr>
                    <td>{{ $technology->id }}</td> 
                    <td><img src="{{ asset($technology->image) }}" alt="{{ $technology->nom_fr }}" class="img-fluid"></td>
                    <td>{{ $technology->nom_fr }} </td>
                    <td>{{ $technology->description_fr}}</td>
                    <td>{{ $technology->nom_en }}</td>
                    <td>{{ $technology->description_en}}</td>
                    
                    <td>
                        <a href="{{ route('backoffice.technology.edit', $technology->id) }}" class="btn btn-warning">Modifier</a>
                        <a href="{{ route('backoffice.technology.delete', $technology->id) }}" class="btn btn-danger">Supprimer</a>
                        <form action="{{ route('backoffice.technology.index', $technology->id) }}" method="GET">
                            <button type="submit" class="btn btn-info">Retour</button>
                        </form>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <!-- Link Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
