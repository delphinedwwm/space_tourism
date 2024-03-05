<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Destination;
use App\Models\Crew;

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

    public function technologie($techno) {
        $articles = [
            'lanceur' =>
                ['image' => asset("/images/technologie/lanceur.png"),
                'nom' => __("terminologie"),
                'objet' => __("lanceur"),
                'description' => __("description_lanceur"),
                ],

            'spatioport' =>
                ['image' => asset("/images/technologie/spatioport.png"),
                'nom' => __("terminologie"),
                'objet' => __("spatiaport"),
                'description' => __("description_spatioport"),
                ],

            'capsule' =>    
                ['image' => asset("/images/technologie/capsule_spaciale.png"),
                'nom' => __("terminologie"),
                'objet' => __("capsule"),
                'description' => __("description_capsule"),
                ],
        ];

        return view('technologie', [
            'article' => $articles[$techno]
        ]); 
        }
    }