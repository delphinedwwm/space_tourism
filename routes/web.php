<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
use App\Http\Controllers\PostController;
Route::get('/', [PostController::class, 'index']);

Route::get('/', [\App\Http\Controllers\PostController::class, 'destination']);

Route::get('/equipage', function () {
    $articles = [
        // 'commandant' =>
            ['image' => asset("/images/equipage/commandant.png"),
            'poste' => 'commandant',
            'nom' => "Douglas Hurley",
            'fonction' => "Douglas Gerald Hurley est un ingénieur américain, un ancien pilote du Coprs des Marines et un ancien astronaute de la NASA. Il s'est lancé dans l'espace pour la troisième fois en tant que commandant du vaissaux Crew Dragon Demo-2.",
            ],

        // 'spécialiste de mission' =>
            ['image' => asset("/images/equipage/specialiste.png"),
            'poste' => 'spécialiste de mission',
            'nom' => "Mark Shuttleworth",
            'fonction' => "Mark Richard Shuttleworth est le fondateur et PDG de Canonical, la société derrière le système d’exploitation Ubuntu basé sur Linux. Shuttleworth est devenu le premier sud-africain à voyager dans l’espace en tant que touriste spatial.",
            ],

        // 'pilote' =>
            ['image' => asset("/images/equipage/pilote.png"),
            'poste' => 'pilote',
            'nom' => "Victor Glover",
            'fonction' => "Pilote du premier vol opérationnel du SpaceX Crew Dragon à destination de la Station Spatiale Internationale. Glover est commandant dans la marine américaine, où il pilote un F/A-18. Il a été membre de l’équipage de l’Expedition 64 et a servi comme ingénieur de vol des systèmes de station.",
            ],

        // 'ingenieur de vol' =>
            ['image' => asset("/images/equipage/ingenieure.png"),
            'poste' => 'ingenieur de vol',
            'nom' => "Anousheh Ansari",
            'fonction' => "Anousheh Ansari est une ingénieure Irano-Américaine et cofondatrice de Prodea Systems. Ansari était la quatrième touriste de l'espace autofinancée, la première femme autofinancée à se rendre à l'ISS, et la première iranienne dans l'espace.",
            ],
    ];
    return view('equipage', [
        'articles' => $articles
    ]);
})->name('equipage');

Route::get('/technologie', function () {
    $articles = [
        // 'Le lanceur' =>
            ['image' => asset("/images/technologie/lanceur.png"),
            'nom' => 'La terminologie...',
            'objet' => "Le lanceur",
            'description' => "Un lanceur ou une fusée porteuse est un véhicule propulsé par fusée utilisé pour transporter une charge utile de la surface de la Terre vers l’espace, habituellement vers l’orbite terrestre ou au-delà. Notre fusée WEB-X est la plus puissante en service. Debout à 150 mètres de hauteur, elle donne lieu à un impressionnant spectacle sur le pas de tir !",
            ],

        // 'Le spatiopor' =>
            ['image' => asset("/images/technologie/spatioport.png"),
            'nom' => 'La terminologie...',
            'objet' => "Le spatioport",
            'description' => "Un spatioport ou cosmodrome est un site de lancement (ou de réception) d’engins spatiaux, par analogie avec le port maritime pour les navires ou l’aéroport pour les aéronefs. Basé au célèbre Cap Canaveral, notre spatioport est idéalement situé pour profiter de la rotation de la Terre pour le lancement.",
            ],

        // 'la capsule spaciale' =>    
            ['image' => asset("/images/technologie/capsule_spaciale.png"),
            'nom' => 'La terminologie...',
            'objet' => "la capsule spaciale",
            'description' => "Une capsule spatiale est un engin spatial habitable qui utilise une capsule à corps émoussé pour rentrer dans l’atmosphère terrestre sans ailes. Notre capsule est l’endroit où vous passerez votre temps pendant le vol. Il comprend une salle de gym, un cinéma et de nombreuses autres activités pour vous divertir.",
            ],
    ];

    return view('technologie', [
        'articles' => $articles
    ]);
})->name('technologie');

