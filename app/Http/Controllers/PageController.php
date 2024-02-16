<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Destination;

class PageController extends Controller
{
    public function accueil() {
        // $locale = app()->getLocale();
        // echo $locale;
        return view('accueil');
    }
    
    public function destination($id) {
        $locale = app()->getLocale();

        $planet = Destination::select('image', "titre_{$locale} as titre")->find($id);

        return view('destination', ['planet' => $planet , 'locale' => $locale]);

    }

    public function equipage($equipe) {
        $articles = [
            'commandant' =>
                ['image' => asset("/images/equipage/commandant.png"),
                'poste' => __("commandant"),
                'nom' => __("nom_commandant"),
                'fonction' => __("description_commandant"),
                ],
    
            'specialiste' =>
                ['image' => asset("/images/equipage/specialiste.png"),
                'poste' => __("spécialiste de mission"),
                'nom' => __("nom_specialiste"),
                'fonction' => __("description_specialiste"),
                ],
    
            'pilote' =>
                ['image' => asset("/images/equipage/pilote.png"),
                'poste' => __("pilote"),
                'nom' => __("nom_pilote"),
                'fonction' => __("description_pilote"),
                ],
    
            'ingenieur' =>
                ['image' => asset("/images/equipage/ingenieure.png"),
                'poste' => __("ingenieure"),
                'nom' => __("nom_ingenieure"),
                'fonction' => __("description_ingenieure"),
                ],
        ];
        return view('equipage', [
            'article' => $articles[$equipe]
        ]);
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