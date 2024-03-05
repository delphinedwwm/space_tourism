<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Destination;
use App\Models\Crew;
use App\Models\Technology;

class PageController extends Controller
{
    public function accueil() {
        // $locale = app()->getLocale();
        // echo $locale;
        return view('accueil');
    }
    
    public function destination($id) {
        $locale = app()->getLocale();

        $planet = Destination::select(
            "id",
            'image', 
            "titre_{$locale} as titre",
            "destination_{$locale} as destination",
            "distance_{$locale} as distance",
            "duree_{$locale} as duree"
            )->find($id);

        $links = Destination::all('id', "titre_{$locale} as titre");

        return view('destination', ['planet' => $planet , 'links' => $links]);

    }

    public function crew($id) {
        $locale = app()->getLocale();

        $member = Crew::select(
            "id",
            'image', 
            "nom_{$locale} as nom",
            "fonction_{$locale} as fonction",
            "description_{$locale} as description",
            )->find($id);

        $links = Crew::all('id', "nom_{$locale} as nom");

        return view('crew', ['member' => $member , 'links' => $links]);

    }

    public function technology($id) {
        $locale = app()->getLocale();

        $techno = Technology::select(
            "id",
            'image', 
            "nom_{$locale} as nom",
            "objet_{$locale} as objet",
            "description_{$locale} as description",
            )->find($id);

        $links = Technology::all('id', "nom_{$locale} as nom");

        return view('technology', ['techno' => $techno , 'links' => $links]);
    }
}