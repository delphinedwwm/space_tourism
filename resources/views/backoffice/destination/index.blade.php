<!DOCTYPE html>
<html lang="fr">
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
        <a href="{{ route('backoffice.destination.create') }}" class="btn btn-primary mb-3">Ajouter une planète</a>
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
                @foreach($destinations as $destination)
                    <tr>
                        <td>{{ $destination->id }}</td> 
                        <td>{{ $destination->titre_fr }} <br> {{ $destination->titre_en }} </td>
                        <td><img src="{{ asset($destination->image) }}" alt="{{ $destination->titre_fr }}" class="img-fluid img-thumbnail" style="max-width: 100px;"></td>
                        <td>
                            <a href="{{ route('backoffice.destination.show', $destination->id) }}" class="btn btn-info">Aperçu</a>
                            <a href="{{ route('backoffice.destination.edit', $destination->id) }}" class="btn btn-warning">Modifier</a>
                            <a href="{{ route('backoffice.destination.delete', $destination->id) }}" class="btn btn-danger">Supprimer</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <!-- Link Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

