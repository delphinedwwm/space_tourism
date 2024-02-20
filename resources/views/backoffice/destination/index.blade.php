<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Destinations</title>
</head>
<body>
    <table>
        <th>
            <tr>
                <td>Id</td> 
                <td>Titre</td>
                <td>Description</td>
                <td>Distance</td>
                <td>Durée</td>
            </tr>
        </th>

            @foreach($destinations as $destination)
            <tr>
                <td> 
                {{ $destination->id }},{{ $destination->titre_fr }}, {{ $destination->destination_fr }}, {{ $destination->distance_fr }}, {{ $destination->duree_fr }}, {{ $destination->titre_en }}, {{ $destination->destination_en }}, {{ $destination->distance_en }}, {{ $destination->duree_en }}          
                </td>
            </tr>
            @endforeach
        
    </table>
</body>
</html>