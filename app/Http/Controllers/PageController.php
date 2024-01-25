<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function accueil() {
        return view('accueil');
    }
    
    public function destination($planete) {
        // dd($planete);
        $articles = [
            'lune' =>
                ['image' => asset("/images/destination/lune.png"),
                'titre' => 'lune',
                'voyage' => "Voyez notre planète comme vous ne l'avez jamais vue auparavant. Un parfait voayage de détente pour vous aider à prendre du recul et revenir requinquer. Pendant que vous y êtes, plangez-vous dans l'histoire en visitant les sites d'atterrissage de Luna 2 et Apollo 11.",
                'distance' => "384 000 km",
                'durée' => "3 jours"
                ],
    
            'mars' =>
                ['image' => asset("/images/destination/mars.png"),
                'titre' => 'mars',
                'voyage' => "N'oubliez pas vos bottes de randonnée. Vous en aurez besoin pour gravir le mont Olympus, la plus haute montagne planétaire dans notre système solaire. Il fait deux fois et demie la taille de l'Everest!",
                'distance' => "225 gm",
                'durée' => "9 mois"
                ],
            
            'europe' =>
                ['image' => asset("/images/destination/europe.png"),
                'titre' => 'europe',
                'voyage' => "La plus petite des quatre lunes galiléennes en orbite autour de Jupiter, Europe est le rêve des amoureux de  l'hiver. Sa surface glacée est parfaite pour faire un peu de patin à glace, du curling, du hockey ou tout simplement pour vous détentre dans votre confortable chalet hivernal.",
                'distance' => "628 gm",
                'durée' => "3 ans"
                ],
                
            'titan' =>
                ['image' => asset("/images/destination/titan.png"),
                'titre' => 'titan',
                'voyage' => "La seule lune connue pour avoir une atmosphère dense autre que la Terre, Titan est comme une maison loin de la laison (et juste quelques centaines de degrés plus froid !). En bonus, vous pouvez contemplez des vues saisissantes des anneaux de Saturne.",
                'distance' => "1,6 tm",
                'durée' => "7 ans"
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
                'poste' => 'commandant',
                'nom' => "Douglas Hurley",
                'fonction' => "Douglas Gerald Hurley est un ingénieur américain, un ancien pilote du Coprs des Marines et un ancien astronaute de la NASA. Il s'est lancé dans l'espace pour la troisième fois en tant que commandant du vaissaux Crew Dragon Demo-2.",
                ],
    
            'specialiste' =>
                ['image' => asset("/images/equipage/specialiste.png"),
                'poste' => 'spécialiste de mission',
                'nom' => "Mark Shuttleworth",
                'fonction' => "Mark Richard Shuttleworth est le fondateur et PDG de Canonical, la société derrière le système d’exploitation Ubuntu basé sur Linux. Shuttleworth est devenu le premier sud-africain à voyager dans l’espace en tant que touriste spatial.",
                ],
    
            'pilote' =>
                ['image' => asset("/images/equipage/pilote.png"),
                'poste' => 'pilote',
                'nom' => "Victor Glover",
                'fonction' => "Pilote du premier vol opérationnel du SpaceX Crew Dragon à destination de la Station Spatiale Internationale. Glover est commandant dans la marine américaine, où il pilote un F/A-18. Il a été membre de l’équipage de l’Expedition 64 et a servi comme ingénieur de vol des systèmes de station.",
                ],
    
            'ingenieur' =>
                ['image' => asset("/images/equipage/ingenieure.png"),
                'poste' => 'ingenieur de vol',
                'nom' => "Anousheh Ansari",
                'fonction' => "Anousheh Ansari est une ingénieure Irano-Américaine et cofondatrice de Prodea Systems. Ansari était la quatrième touriste de l'espace autofinancée, la première femme autofinancée à se rendre à l'ISS, et la première iranienne dans l'espace.",
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
                'nom' => 'La terminologie...',
                'objet' => "Le lanceur",
                'description' => "Un lanceur ou une fusée porteuse est un véhicule propulsé par fusée utilisé pour transporter une charge utile de la surface de la Terre vers l’espace, habituellement vers l’orbite terrestre ou au-delà. Notre fusée WEB-X est la plus puissante en service. Debout à 150 mètres de hauteur, elle donne lieu à un impressionnant spectacle sur le pas de tir !",
                ],

            'spatioport' =>
                ['image' => asset("/images/technologie/spatioport.png"),
                'nom' => 'La terminologie...',
                'objet' => "Le spatioport",
                'description' => "Un spatioport ou cosmodrome est un site de lancement (ou de réception) d’engins spatiaux, par analogie avec le port maritime pour les navires ou l’aéroport pour les aéronefs. Basé au célèbre Cap Canaveral, notre spatioport est idéalement situé pour profiter de la rotation de la Terre pour le lancement.",
                ],

            'capsule' =>    
                ['image' => asset("/images/technologie/capsule_spaciale.png"),
                'nom' => 'La terminologie...',
                'objet' => "la capsule spaciale",
                'description' => "Une capsule spatiale est un engin spatial habitable qui utilise une capsule à corps émoussé pour rentrer dans l’atmosphère terrestre sans ailes. Notre capsule est l’endroit où vous passerez votre temps pendant le vol. Il comprend une salle de gym, un cinéma et de nombreuses autres activités pour vous divertir.",
                ],
        ];

        return view('technologie', [
            'article' => $articles[$techno]
        ]); 
        }
}