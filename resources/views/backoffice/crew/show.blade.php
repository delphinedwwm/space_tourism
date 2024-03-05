<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Equipage</title>
    <!-- Link Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1 class="mt-5 mb-4">Equipage</h1>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Id</th> 
                    <th scope="col">Image</th>
                    <th scope="col">fonction_fr</th>
                    <th scope="col">nom_fr</th>
                    <th scope="col">description_fr</th>
                    <th scope="col">fonction_en</th>
                    <th scope="col">nom_en</th>
                    <th scope="col">description_en</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>  
                <tr>
                    <td>{{ $crew->id }}</td> 
                    <td><img src="{{ asset($crew->image) }}" alt="{{ $crew->nom_fr }}" class="img-fluid"></td>
                    <td>{{ $crew->fonction_fr}}</td>
                    <td>{{ $crew->nom_fr }} </td>
                    <td>{{ $crew->description_fr}}</td>
                    <td>{{ $crew->fonction_en }}</td>
                    <td>{{ $crew->nom_en }}</td>
                    <td>{{ $crew->description_en}}</td>
                    
                    <td>
                        <a href="{{ route('backoffice.crew.edit', $crew->id) }}" class="btn btn-warning">Modifier</a>
                        <a href="{{ route('backoffice.crew.delete', $crew->id) }}" class="btn btn-danger">Supprimer</a>
                        <form action="{{ route('backoffice.crew.index', $crew->id) }}" method="GET">
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
