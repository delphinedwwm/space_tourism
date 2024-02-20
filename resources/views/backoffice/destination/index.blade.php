<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Destinations</title>
</head>
<body>
    <table>
        <thead>
            <th>Id</th> 
            <th>Titre_fr</th>
            <th>Description_fr</th>
            <th>Distance_fr</th>
            <th>Durée_fr</th>
            <th>Titre_en</th>
            <th>Description_en</th>
            <th>Distance_en</th>
            <th>Durée</th>
            <th>Actions</th>
        </thead>
        <tbody>
            @foreach($destinations as $destination)
                <tr>
                    <td>{{ $destination->id }}</td> 
                    <td>{{ $destination->titre_fr }}</td>
                    <td>{{ $destination->destination_fr }}</td>
                    <td>{{ $destination->distance_fr }}</td>
                    <td>{{ $destination->duree_fr }}</td>
                    <td>{{ $destination->titre_en }}</td>
                    <td>{{ $destination->destination_en }}</td>
                    <td>{{ $destination->distance_en }}</td>
                    <td>{{ $destination->duree_en }}</td>
                    <td>
                    <form action="{{ route('modifier', ['id' => $destination->id]) }}" method="GET">
                            <button type="submit">Modifier</button>
                        </form>
                        <form action="{{ route('ajouter') }}" method="GET">
                            <button type="submit">Ajouter</button>
                        </form>
                        <form action="{{ route('supprimer', ['id' => $destination->id]) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Supprimer</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>

    </table>
</body>
</html>