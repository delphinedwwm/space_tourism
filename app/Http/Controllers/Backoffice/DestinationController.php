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
        $destination = Destination::findOrFail($id);
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
            'titre_fr' => 'required|string|max:255',
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

}
