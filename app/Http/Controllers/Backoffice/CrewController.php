<?php

namespace App\Http\Controllers\Backoffice;

use App\Models\Destination; 
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CrewController extends Controller
{
     // Afficher toutes les membres de l'équipage
     public function index()
     {
         $crews = crew::all();
         return view('backoffice.crew.index', ['crews' => $crews]);
     }
 
     public function show($id)
     {
         $crew = crew::findOrFail($id); // findOrFail = méthode utilisée pour récupérer un modèle par sa clé primaire (ID) à partir de la base de données
         return view('backoffice.crew.show', compact('crew'));
         
     }
 
}
