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

Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('/destination', function () {
    $articles = [
        ['picture' => asset("/images/planetes/moon.png"),
        'title' => 'lune',
        'content' => "Voyez notre planète comme vous ne l'avez jamais vue auparavant. Un parfait voayage de détente pour vous aider à prendre du recul et revenir requinquer. Pendant que vous y êtes, plangez-vous dans l'histoire en visitant les sites d'atterrissage de Luna 2 et Apollo 11.",
        'distance' => "384 000 km",
        'durée' => "3 jours"
        ],

        ['picture' => asset("/images/planetes/mars.png"),
        'title' => 'mars',
        'content' => "N'oubliez pas vos bottes de randonnée. Vous en aurez besoin pour gravir le mont Olympus, la plus haute montagne planétaire dans notre système solaire. Il fait deux fois et demie la taille de l'Everest!",
        'distance' => "225 gm",
        'durée' => "9 mois"
        ],

        ['picture' => asset("/images/planetes/europe.png"),
        'title' => 'europe',
        'content' => "La plus petite des quatre lunes galiléennes en orbite autour de Jupiter, Europe est le rêve des amoureux de  l'hiver. Sa surface glacée est parfaite pour faire un peu de patin à glace, du curling, du hockey ou tout simplement pour vous détentre dans votre confortable chalet hivernal.",
        'distance' => "628 gm",
        'durée' => "3 ans"
        ],

        ['picture' => asset("/images/planetes/titan.png"),
        'title' => 'titan',
        'content' => "La seule lune connue pour avoir une atmosphère dense autre que la Terre, Titan est comme une maison loin de la laison (et juste quelques centaines de degrés plus froid !). En bonus, vous pouvez contemplez des vues saisissantes des anneaux de Saturne.",
        'distance' => "1,6 tm",
        'durée' => "7 ans"
        ],
];


    return view('destination', [
        'articles' => $articles
    ]);
})->name('destination');

Route::get('/crew', function () {
    $articles = [
        // 'lune' =>
        ['picture' => asset("/images/crews/commandant.png"),
        'function' => 'commandant',
        'name' => "Douglas Hurley",
        'description' => "Douglas Gerald Hurley est un ingénieur américain, un ancien pilote du Coprs des Marines et un ancien astronaute de la NASA. Il s'est lancé dans l'espace pour la troisième fois en tant que commandant du vaissaux Crew Dragon Demo-2.",
        ],

        ['picture' => asset("/images/crews/specialist.png"),
        'function' => 'spécialiste de mission',
        'name' => "Mark Shuttleworth",
        'description' => "Mark Richard Shuttleworth est le fondateur et PDG de Canonical, la société derrière le système d’exploitation Ubuntu basé sur Linux. Shuttleworth est devenu le premier sud-africain à voyager dans l’espace en tant que touriste spatial.",
        ],

        ['picture' => asset("/images/crews/pilote.png"),
        'function' => 'pilote',
        'name' => "Victor Glover",
        'description' => "Pilote du premier vol opérationnel du SpaceX Crew Dragon à destination de la Station Spatiale Internationale. Glover est commandant dans la marine américaine, où il pilote un F/A-18. Il a été membre de l’équipage de l’Expedition 64 et a servi comme ingénieur de vol des systèmes de station.",
        ],

        ['picture' => asset("/images/crews/ingenieure.png"),
        'function' => 'ingenieur de vol',
        'name' => "Anousheh Ansari",
        'description' => "Anousheh Ansari est une ingénieure Irano-Américaine et cofondatrice de Prodea Systems. Ansari était la quatrième touriste de l'espace autofinancée, la première femme autofinancée à se rendre à l'ISS, et la première iranienne dans l'espace.",
        ],
    ];
    return view('crew', [
        'articles' => $articles
    ]);
})->name('crew');

Route::get('/technology', function () {
    $articles = [
        ['picture' => asset("/images/technology/lanceur.png"),
        'name' => 'La terminologie...',
        'objet' => "Le lanceur",
        'description' => "Un lanceur ou une fusée porteuse est un véhicule propulsé par fusée utilisé pour transporter une charge utile de la surface de la Terre vers l’espace, habituellement vers l’orbite terrestre ou au-delà. Notre fusée WEB-X est la plus puissante en service. Debout à 150 mètres de hauteur, elle donne lieu à un impressionnant spectacle sur le pas de tir !",
        ],

        ['picture' => asset("/images/technology/spatioport.png"),
        'name' => 'La terminologie...',
        'objet' => "Le spatioport",
        'description' => "Un lanceur ou une fusée porteuse est un véhicule propulsé par fusée utilisé pour transporter une charge utile de la surface de la Terre vers l’espace, habituellement vers l’orbite terrestre ou au-delà. Notre fusée WEB-X est la plus puissante en service. Debout à 150 mètres de hauteur, elle donne lieu à un impressionnant spectacle sur le pas de tir !",
        ],

        ['picture' => asset("/images/technology/capsule_spaciale.png"),
        'name' => 'La terminologie...',
        'objet' => "la capsule spaciale",
        'description' => "Un lanceur ou une fusée porteuse est un véhicule propulsé par fusée utilisé pour transporter une charge utile de la surface de la Terre vers l’espace, habituellement vers l’orbite terrestre ou au-delà. Notre fusée WEB-X est la plus puissante en service. Debout à 150 mètres de hauteur, elle donne lieu à un impressionnant spectacle sur le pas de tir !",
        ],
    ];

    return view('technology', [
        'articles' => $articles
    ]);
})->name('technology');

