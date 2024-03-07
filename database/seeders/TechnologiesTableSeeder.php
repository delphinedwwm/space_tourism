<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TechnologiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $technologies = [
            ['image' => "/images/technologie/lanceur.png",

            'nom_fr'=> "Le lanceur",
            'description_fr'=> "Un lanceur ou une fusée porteuse est un véhicule propulsé par fusée utilisé pour transporter une charge utile de la surface de la Terre vers l’espace, habituellement vers l’orbite terrestre ou au-delà. Notre fusée WEB-X est la plus puissante en service. Debout à 150 mètres de hauteur, elle donne lieu à un impressionnant spectacle sur le pas de tir !",

            'nom_en'=> "The Launcher",
            'description_en'=> "A launcher or carrier rocket is a rocket-powered vehicle used to transport a payload from the Earth's surface to space, usually to Earth orbit or beyond. Our WEB-X rocket is the most powerful in service. Standing at 150 meters tall, it provides an impressive spectacle on the launch pad!",
            ],

            ['image' => "/images/technologie/spatioport.png",

            'nom_fr'=> "Le spatioport",
            'description_fr'=> "Un spatioport ou cosmodrome est un site de lancement (ou de réception) d’engins spatiaux, par analogie avec le port maritime pour les navires ou l’aéroport pour les aéronefs. Basé au célèbre Cap Canaveral, notre spatioport est idéalement situé pour profiter de la rotation de la Terre pour le lancement.",

            'nom_en'=> "The Spaceport",
            'description_en'=> "A spaceport or cosmodrome is a launch (or receiving) site for spacecraft, analogous to a seaport for ships or an airport for aircraft. Based at the famous Cape Canaveral, our spaceport is ideally located to take advantage of Earth's rotation for launch.",
            ],
            
            ['image' => "/images/technologie/capsule_spaciale.png",

            'nom_fr'=> "La capsule spatiale",
            'description_fr'=> "Une capsule spatiale est un engin spatial habitable qui utilise une capsule à corps émoussé pour rentrer dans l’atmosphère terrestre sans ailes. Notre capsule est l’endroit où vous passerez votre temps pendant le vol. Il comprend une salle de gym, un cinéma et de nombreuses autres activités pour vous divertir.",

            'nom_en'=> "The Space Capsule",
            'description_en'=> "A space capsule is a habitable spacecraft that uses a blunt-body capsule to re-enter Earth's atmosphere without wings. Our capsule is where you will spend your time during the flight. It includes a gym, a cinema, and many other activities to entertain you.",
            ],
        ];
        DB::table('technologies')->insert($technologies);
    }
}
