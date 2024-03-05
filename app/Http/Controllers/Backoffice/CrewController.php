<?php

namespace App\Http\Controllers\Backoffice;

use App\Models\Crew; 
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CrewController extends Controller
{
     // Afficher toutes les membres de l'équipage
     public function index()
     {
         $crews = Crew::all();
        
         return view('backoffice.crew.index', ['crews' => $crews]);
     }
 
     public function show($id)
     {
         $crew = Crew::findOrFail($id); // findOrFail = méthode utilisée pour récupérer un modèle par sa clé primaire (ID) à partir de la base de données
         return view('backoffice.crew.show', compact('crew'));
         
     }

     public function create()
    {
        return view('backoffice.crew.create');
    }

    public function store(Request $request)
    {
        // Valider les données
       
        $validatedData = $request->validate([
            // Spécifiez les règles de validation pour les champs
            'image' =>'required|image|mimes:jpg,png|max:2048',
            'fonction_fr' => 'required|string|max:255', // required = champs obligatoire et '|' est utilisée pour séparer différentes règles de validation 
            'nom_fr' => 'required|string',
            'description_fr' => 'required|string',
            'fonction_en' => 'required|string|max:255',
            'nom_en' => 'required|string',
            'description_en' => 'required|string',
        ]);
       
        $crew = new Crew($validatedData);

        $path = $validatedData['image']->store('images', 'public');

        $crew->image = 'storage/'.$path;

        $crew->save();

        return redirect()->route('backoffice.crew.index');
    }
    public function edit($id)
    {
        $crew = Crew::findOrFail($id); // findOrFail = méthode utilisée pour récupérer un modèle par sa clé primaire (ID) à partir de la base de données
        return view('backoffice.crew.edit', compact('crew'));
        
    }

    public function update(Request $request, $id)
    {   // Valider les données
   
        $validatedData = $request->validate([
            // Spécifiez les règles de validation pour les champs
            'image' =>'required|image|mimes:jpg,png|max:2048',
            'fonction_fr' => 'required|string|max:255', 
            'nom_fr' => 'required|string',
            'description_fr' => 'required|string',
            'fonction_en' => 'required|string|max:255',
            'nom_en' => 'required|string',
            'description_en' => 'required|string',
        ]);
        
        $crew = Crew::findOrFail($id); 
        $oldImagePath = $crew->image;


        if ($request->hasFile('image')) {
            // méthode hasFile() pour vérifier si un fichier a été téléchargé avec la clé 'image' dans la requête.
        
            if ($oldImagePath) {  

                // Supprimer l'image du dossier storage/app/public/images
                $oldImagePath = str_replace('storage/', '', $oldImagePath);
                Storage::disk('public')->delete($oldImagePath);
            }
        
            // $imagePath = $request->image->store('images', 'public');
            $path = $validatedData['image']->store('images', 'public');
            $crew->image = 'storage/'.$path;
            

        }

        $crew->save();

        return redirect()->route('backoffice.crew.index');
    }

    public function delete($id)
    {
        // Trouver la destination correspondante dans la base de données
        $crew = Crew::findOrFail($id);

        // Passer la destination à la vue
        return view('backoffice.crew.delete', compact('crew'));
    }


    // Supprime une destination
    public function destroy($id)
    {
        // Trouve la destination à supprimer
        $crew = Crew::findOrFail($id); // findOrFail = méthode utilisée pour récupérer un modèle par sa clé primaire (ID) à partir de la base de données

        // Supprime la destination de la base de données
        $crew->delete();

        // Redirige l'utilisateur vers la page index 
        return redirect()->route('backoffice.crew.index');
    }
 
}
