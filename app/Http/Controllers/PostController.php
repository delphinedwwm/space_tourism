<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() {
        return view('accueil');
    }
    
    public function destination() {
        $articles = [
            // 'lune' =>
                ['image' => asset("/images/destination/lune.png"),
                'titre' => 'lune',
                'voyage' => "Voyez notre planète comme vous ne l'avez jamais vue auparavant. Un parfait voayage de détente pour vous aider à prendre du recul et revenir requinquer. Pendant que vous y êtes, plangez-vous dans l'histoire en visitant les sites d'atterrissage de Luna 2 et Apollo 11.",
                'distance' => "384 000 km",
                'durée' => "3 jours"
                ],
    
            // 'mars' =>
                ['image' => asset("/images/destination/mars.png"),
                'titre' => 'mars',
                'voyage' => "N'oubliez pas vos bottes de randonnée. Vous en aurez besoin pour gravir le mont Olympus, la plus haute montagne planétaire dans notre système solaire. Il fait deux fois et demie la taille de l'Everest!",
                'distance' => "225 gm",
                'durée' => "9 mois"
                ],
            
            // 'europe' =>
                ['image' => asset("/images/destination/europe.png"),
                'titre' => 'europe',
                'voyage' => "La plus petite des quatre lunes galiléennes en orbite autour de Jupiter, Europe est le rêve des amoureux de  l'hiver. Sa surface glacée est parfaite pour faire un peu de patin à glace, du curling, du hockey ou tout simplement pour vous détentre dans votre confortable chalet hivernal.",
                'distance' => "628 gm",
                'durée' => "3 ans"
                ],
                
            // 'titan' =>
                ['image' => asset("/images/destination/titan.png"),
                'titre' => 'titan',
                'voyage' => "La seule lune connue pour avoir une atmosphère dense autre que la Terre, Titan est comme une maison loin de la laison (et juste quelques centaines de degrés plus froid !). En bonus, vous pouvez contemplez des vues saisissantes des anneaux de Saturne.",
                'distance' => "1,6 tm",
                'durée' => "7 ans"
                ],
        ];
        return view('destination', [
            'articles' => $articles
        ]);
    }

    public function equipage() {
        
    }
    
}