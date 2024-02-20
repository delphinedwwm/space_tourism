<?php

namespace App\Http\Controllers\Backoffice;

use App\Models\Destination; 
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DestinationController extends Controller
{
    // Afficher une destination
    public function index()
    {
        $destinations = Destination::all();
        return view('backoffice.destination.index', ['destinations' => $destinations]);
    }

    // Afficher le formulaire d'ajout d'une nouvelle destination
    public function create()
    {
        return view('destinations.create');
    }    

 
    // Enregistrer une nouvelle destination
    public function store(Request $request)
    {
        // Valider les données
        $validatedData = $request->validate([
            // Spécifiez les règles de validation pour les champs
            'titre_fr' => 'required|string|max:255',
            'description_fr' => 'required|string',
            'distance_fr' => 'required|numeric',
            'duree_fr' => 'required|numeric',
            'titre_en' => 'required|string|max:255',
            'description_en' => 'required|string',
            'distance_en' => 'required|numeric',
            'duree_en' => 'required|numeric',
        ]);
 
        // Créer une nouvelle instance de Destination avec les données validées
        $destination = new Destination($validatedData);
        // Enregistrez la nouvelle destination dans la base de données
        $destination->save();

        // Rediriger l'utilisateur vers la page index ou toute autre page appropriée
        return redirect()->route('destinations.index');
    }

    // Afficher le formulaire de modification d'une destination
    public function edit($id)
    {
        $destination = Destination::findOrFail($id);
        return view('destinations.edit', ['destination' => $destination]);
    }

    // Mettre à jour une destination existante
    public function update(Request $request, $id)
    {
        // Valider les données
        $validatedData = $request->validate([
            // Spécifiez les règles de validation pour les champs
            'titre_fr' => 'required|string|max:255',
            'description_fr' => 'required|string',
            'distance_fr' => 'required|numeric',
            'duree_fr' => 'required|numeric',
            'titre_en' => 'required|string|max:255',
            'description_en' => 'required|string',
            'distance_en' => 'required|numeric',
            'duree_en' => 'required|numeric',
        ]);

        // Récupérer la destination à mettre à jour
        $destination = Destination::findOrFail($id);

        // Mettre à jour les champs de la destination avec les données validées
        // Exemple : $destination->champ = $request->champ;
        

        // Enregistrez les modifications dans la base de données
        $destination->save();

        // Rediriger l'utilisateur vers la page index ou toute autre page appropriée
        return redirect()->route('destinations.index');
    }

    // Supprimer une destination
    public function destroy($id)
    {
        // Trouver la destination à supprimer
        $destination = Destination::findOrFail($id);

        // Supprimer la destination de la base de données
        $destination->delete();

        // Rediriger l'utilisateur vers la page index ou toute autre page appropriée
        return redirect()->route('destinations.index');
    }
}
