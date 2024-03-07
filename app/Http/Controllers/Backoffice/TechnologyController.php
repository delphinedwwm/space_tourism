<?php

namespace App\Http\Controllers\Backoffice;

use App\Models\Technology; 
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TechnologyController extends Controller
{
    // Afficher toutes les membres de l'équipage
    public function index()
    {
        $technologies = Technology::all();
       
        return view('backoffice.technology.index', ['technologies' => $technologies]);
    }

    public function show($id)
    {
        $technology = Technology::findOrFail($id); // findOrFail = méthode utilisée pour récupérer un modèle par sa clé primaire (ID) à partir de la base de données
        return view('backoffice.technology.show', compact('technology'));
    }

    public function create()
    {
        return view('backoffice.technology.create');
    }

    public function store(Request $request)
    {
        // Valider les données
       
        $validatedData = $request->validate([
            'image' =>'required|image|mimes:jpg,png|max:2048',
 
            'nom_fr' => 'required|string',
            'description_fr' => 'required|string',

            'nom_en' => 'required|string',
            'description_en' => 'required|string',
        ]);
       
        $technology = new Technology($validatedData);

        $path = $validatedData['image']->store('images', 'public');

        $technology->image = 'storage/'.$path;

        $technology->save();

        return redirect()->route('backoffice.technology.index');
    }

    public function edit($id)
    {
        $technology = Technology::findOrFail($id); // findOrFail = méthode utilisée pour récupérer un modèle par sa clé primaire (ID) à partir de la base de données
        return view('backoffice.technology.edit', compact('technology'));
    }

    public function update(Request $request, $id)
    {   // Valider les données
   
        $validatedData = $request->validate([
            // Spécifiez les règles de validation pour les champs
            'image' =>'required|image|mimes:jpg,png|max:2048',

            'nom_fr' => 'required|string',
            'description_fr' => 'required|string',
            'nom_en' => 'required|string',
            'description_en' => 'required|string',
        ]);
        
        $technology = Technology::findOrFail($id); 
        $oldImagePath = $technology->image;

        if ($request->hasFile('image')) {
            // méthode hasFile() pour vérifier si un fichier a été téléchargé avec la clé 'image' dans la requête.
        
            if ($oldImagePath) {  
                // Supprimer l'image du dossier storage/app/public/images
                $oldImagePath = str_replace('storage/', '', $oldImagePath);
                Storage::disk('public')->delete($oldImagePath);
            }
        
            // $imagePath = $request->image->store('images', 'public');
            $path = $validatedData['image']->store('images', 'public');
            $technology->image = 'storage/'.$path;
            
        }

        $technology->save();

        return redirect()->route('backoffice.technology.index');
    }

    public function delete($id)
    {
        // Trouver la technologie correspondante dans la base de données
        $technologie = Crew::findOrFail($id);

        // Passer la technologie à la vue
        return view('backoffice.technologie.delete', compact('technologie'));
    }

    // Supprime une technologie
    public function destroy($id)
    {
        // Trouve la technologie à supprimer
        $technology = Tectnology::findOrFail($id); // findOrFail = méthode utilisée pour récupérer un modèle par sa clé primaire (ID) à partir de la base de données

        // Supprime la technologie de la base de données
        $technology->delete();

        // Redirige l'utilisateur vers la page index 
        return redirect()->route('backoffice.technology.index');
    }
 
}
