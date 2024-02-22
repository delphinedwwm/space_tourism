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
}
