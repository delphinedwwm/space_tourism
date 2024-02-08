<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function accueil() {
        // $locale = app()->getLocale();
        // echo $locale;
        return view('accueil');
    }
    
    public function destination($planete) {
        // dd($planete);
        $articles = [
            'lune' =>
                ['image' => asset("/images/destination/lune.png"),
                'titre' => __("lune"),
                'voyage' => __("description_lune"),
                'distance' => __("distance_lune"),
                'durée' => __("duree_lune")
                ],
    
            'mars' =>
                ['image' => asset("/images/destination/mars.png"),
                'titre' => __("mars"),
                'voyage' => __("description_mars"),
                'distance' => __("distance_mars"),
                'durée' => __("duree_mars")
                ],
            
            'europe' =>
                ['image' => asset("/images/destination/europe.png"),
                'titre' => __("europe"),
                'voyage' =>  __("description_europe"),
                'distance' => __("distance_europe"),
                'durée' => __("duree_europe")
                ],
                
            'titan' =>
                ['image' => asset("/images/destination/titan.png"),
                'titre' => __("titan"),
                'voyage' => __("description_titan"),
                'distance' =>  __("distance_titan"),
                'durée' => __("duree_titan")
                ],
        ];
        return view('destination', [
            'article' => $articles[$planete]
        ]);
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