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

 
}
