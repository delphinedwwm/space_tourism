<?php

namespace App\Http\Controllers\Backoffice;

use App\Models\Destination; 
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DestinationController extends Controller
{
    // Afficher toutes les destinations
    public function index()
    {
        $destinations = Destination::all();
        return view('backoffice.destination.index', ['destinations' => $destinations]);
    }

    public function show($id)
    {
        $destination = Destination::findOrFail($id); // findOrFail = méthode utilisée pour récupérer un modèle par sa clé primaire (ID) à partir de la base de données
        return view('backoffice.destination.show', compact('destination'));
        
    }

    public function create()
    {
        return view('backoffice.destination.create');
    }

    public function store(Request $request)
    {
        // Valider les données
       
        $validatedData = $request->validate([
            // Spécifiez les règles de validation pour les champs
            // 'image' => asset('image/' . 'required|picture'),
            'titre_fr' => 'required|string|max:255', // required = champs obligatoire et '|' est utilisée pour séparer différentes règles de validation 
            'destination_fr' => 'required|string',
            'distance_fr' => 'required|string',
            'duree_fr' => 'required|string',
            'titre_en' => 'required|string|max:255',
            'destination_en' => 'required|string',
            'distance_en' => 'required|string',
            'duree_en' => 'required|string',
        ]);
 
        $destination = new Destination($validatedData);
       
        $destination->image = 'pas d\'image';
        $destination->save();

        return redirect()->route('backoffice.destination.index');
    }

    public function edit($id)
    {
        $destination = Destination::findOrFail($id); // findOrFail = méthode utilisée pour récupérer un modèle par sa clé primaire (ID) à partir de la base de données
        return view('backoffice.destination.edit', compact('destination'));
        
    }

    public function update(Request $request, $id)
    {
        // Valider les données
       
        $validatedData = $request->validate([
            // Spécifiez les règles de validation pour les champs
            // 'image' => asset('image/' . 'required|picture'),
            'titre_fr' => 'required|string|max:255', // required = champs obligatoire et '|' est utilisée pour séparer différentes règles de validation 
            'destination_fr' => 'required|string',
            'distance_fr' => 'required|string',
            'duree_fr' => 'required|string',
            'titre_en' => 'required|string|max:255',
            'destination_en' => 'required|string',
            'distance_en' => 'required|string',
            'duree_en' => 'required|string',
        ]);
        // Récupérer la destination depuis la base de données
        $destination = Destination::findOrFail($id);

        // Mettre à jour les attributs de la destination
        $destination->update($validatedData);
        $destination->image = 'pas d\'image';
        $destination->save();

        return redirect()->route('backoffice.destination.index');
    }

    public function delete($id)
    {
        // Trouver la destination correspondante dans la base de données
        $destination = Destination::findOrFail($id);

        // Passer la destination à la vue
        return view('backoffice.destination.delete', compact('destination'));
    }


    // Supprime une destination
    public function destroy($id)
    {
        // Trouve la destination à supprimer
        $destination = Destination::findOrFail($id); // findOrFail = méthode utilisée pour récupérer un modèle par sa clé primaire (ID) à partir de la base de données

        // Supprime la destination de la base de données
        $destination->delete();

        // Redirige l'utilisateur vers la page index 
        return redirect()->route('backoffice.destination.index');
    }
}
