<?php

namespace App\Http\Controllers\Backoffice;

use App\Models\Destination; 
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


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
            'image' =>'required|image|mimes:jpg,png|max:2048',
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

        $path = $validatedData['image']->store('images', 'public');

        $destination->image = 'storage/'.$path;

        $destination->save();

        return redirect()->route('backoffice.destination.index');
    }

    public function edit($id)
    {
        $destination = Destination::findOrFail($id); // findOrFail = méthode utilisée pour récupérer un modèle par sa clé primaire (ID) à partir de la base de données
        return view('backoffice.destination.edit', compact('destination'));
        
    }

    public function update(Request $request, $id)
    {   // Valider les données
   
        $validatedData = $request->validate([
            // Spécifiez les règles de validation pour les champs
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'titre_fr' => 'required|string|max:255', // required = champs obligatoire et '|' est utilisée pour séparer différentes règles de validation 
            'destination_fr' => 'required|string',
            'distance_fr' => 'required|string',
            'duree_fr' => 'required|string',
            'titre_en' => 'required|string|max:255',
            'destination_en' => 'required|string',
            'distance_en' => 'required|string',
            'duree_en' => 'required|string',
        ]);
        
        $destination = Destination::findOrFail($id); // Récupérer la destination depuis la base de données
        $oldImagePath = $destination->image;

        
        // if($request->image !== null){ 
            
            // storage::delete($destination->'image', 'id');

            // $path = $request->image->store('images', 'public');

            // $destination->image = 'storage/'.$path;
        // }
        // $path = $validatedData['image']->store('images', 'public');

        // $destination->image = 'storage/'.$path;

        if ($request->hasFile('image')) {
            // méthode hasFile() pour vérifier si un fichier a été téléchargé avec la clé 'image' dans la requête.
        
            if ($oldImagePath) {
                // Extraire le chemin de l'image de $destination->image
                // $imagePath = Storage::url($oldImagePath);

                // Supprimer l'image du dossier storage/app/public/images
                $oldImagePath = str_replace('storage/', '', $oldImagePath);
                Storage::disk('public')->delete($oldImagePath);
            }
        
            // $imagePath = $request->image->store('images', 'public');
            $path = $validatedData['image']->store('images', 'public');
            $destination->image = 'storage/'.$path;
            // dd($destination->image);
            // Si $request->image n'est pas nul, alors le code exécute la méthode store() sur l'objet $request->image.
            // dossier de destination où le fichier doit être stocké ('images') et le système de fichiers de stockage à utiliser ('public').

        }
        // $destination->update($validatedData); // Mettre à jour les attributs de la destination
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
