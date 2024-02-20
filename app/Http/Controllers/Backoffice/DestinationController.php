<?php

namespace App\Http\Controllers\Backoffice;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DestinationController extends Controller
{
    // Afficher une destination
    public function index()
    {
        $destinations = Destination::all();
        return view('destinations.index', ['destinations' => $destinations]);
    }

    // Afficher le formulaire d'ajout d'une nouvelle destination
    public function create()
    {
        return view('destinations.create');
    }    
}
