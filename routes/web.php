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
        'title' => 'Moon',
        'content' => "Voyez notre planète comme vous ne l'avez jamais vue auparavant. Un parfait voayage de détente pour vous aider à prendre du recul et revenir requinquer. Pendant que vous y êtes, plangez-vous dans l'histoire en visitant les sites d'atterrissage de Luna 2 et Apollo 11.",
        'distance' => '384 000 km',
        'durée' => '3 jours'
        ],

        ['picture' => asset("/images/planetes/mars.png"),
        'title' => 'Mars',
        'content' => "N'oubliez pas vos bottes de randonnée. Vous en aurez besoin pour gravir le mont Olympus, la plus haute montagne planétaire dans notre système solaire. Il fait deux fois et demie la taille de l'Everest!",
        'distance' => '225 gm',
        'durée' => '9 mois'
        ],

        ['picture' => asset("/images/planetes/europe.png"),
        'title' => 'europe',
        'content' => "La plus petite des quatre lunes galiléennes en orbite autour de Jupiter, Europe est le rêve des amoureux de  l'hiver. Sa surface glacée est parfaite pour faire un peu de patin à glace, du curling, du hockey ou tout simplement pour vous détentre dans votre confortable chalet hivernal.",
        'distance' => '628 gm',
        'durée' => '3 ans'
        ],

        ['picture' => asset("/images/planetes/titan.png"),
        'title' => 'titan',
        'content' => "La seule lune connue pour avoir une atmosphère dense autre que la Terre, Titan est comme une maison loin de la laison (et juste quelques centaines de degrés plus froid !). En bonus, vous pouvez contemplez des vues saisissantes des anneaux de Saturne.",
        'distance' => '1,6 tm',
        'durée' => '7 ans'
        ],
];


    return view('destination', [
        'articles' => $articles
    ]);
})->name('destination');

Route::get('/crew', function () {
    return view('crew');
})->name('crew');

Route::get('/technology', function () {
    return view('technology');
})->name('technology');

