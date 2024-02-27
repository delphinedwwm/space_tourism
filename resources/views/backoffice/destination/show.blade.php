<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Destinations</title>
    <!-- Link Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1 class="mt-5 mb-4">Destinations</h1>
        <table class="table">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">Id</th> 
                    <th scope="col">Image</th>
                    <th scope="col">Titre_fr</th>
                    <th scope="col">Desciption_fr</th>
                    <th scope="col">Distance_fr</th>
                    <th scope="col">Durée_fr</th>
                    <th scope="col">Titre_en</th>
                    <th scope="col">Desciption_en</th>
                    <th scope="col">Distance_en</th>
                    <th scope="col">Durée_en</th>
                    <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>  
                <tr>
                    <td>{{ $destination->id }}</td> 
                    <td><img src="{{ asset($destination->image) }}" alt="{{ $destination->titre_fr }}" class="img-fluid"></td>
                    <td>{{ $destination->titre_fr }} </td>
                    <td>{{ $destination->destination_fr}}</td>
                    <td>{{ $destination->distance_fr }}</td>
                    <td>{{ $destination->duree_fr }}</td>
                    <td>{{ $destination->titre_en }}</td>
                    <td>{{ $destination->destination_en }}</td>
                    <td>{{ $destination->distance_en }}</td>
                    <td>{{ $destination->duree_en }}</td>
                    <td>
                        <a href="{{ route('backoffice.destination.edit', $destination->id) }}" class="btn btn-warning">Modifier</a>
                        <a href="{{ route('backoffice.destination.delete', $destination->id) }}" class="btn btn-danger">Supprimer</a>
                        <form action="{{ route('backoffice.destination.index', $destination->id) }}" method="GET">
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
