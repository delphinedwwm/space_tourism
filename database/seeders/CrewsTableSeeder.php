<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CrewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $crews = [
            ['image' => "/images/equipage/commandant.png",

            'fonction_fr'=> "Commandant",
            'nom_fr'=>"Douglas Hurley",
            'description_fr'=> "Douglas Gerald Hurley est un ingénieur américain, un ancien pilote du Coprs des Marines et un ancien astronaute de la NASA. Il s'est lancé dans l'espace pour la troisième fois en tant que commandant du vaissaux Crew Dragon Demo-2.",

            'fonction_en'=> "Commander",
            'nom_en'=> "Douglas Hurley",
            'description_en'=> "Douglas Gerald Hurley is an American engineer, a former Marine Corps pilot, and a former NASA astronaut. He ventured into space for the third time as the commander of the Crew Dragon Demo-2 spacecraft.",
            ],

            ['image' => "/images/equipage/specialiste.png",

            'fonction_fr'=> "Spécialiste de mission",
            'nom_fr'=> "Mark Shuttleworth",
            'description_fr'=> "Mark Richard Shuttleworth est le fondateur et PDG de Canonical, la société derrière le système d’exploitation Ubuntu basé sur Linux. Shuttleworth est devenu le premier sud-africain à voyager dans l’espace en tant que touriste spatial.",

            'fonction_en'=> "Mission Specialist",
            'nom_en'=> "Mark Shuttleworth",
            'description_en'=> "Mark Richard Shuttleworth is the founder and CEO of Canonical, the company behind the Ubuntu Linux-based operating system. Shuttleworth became the first South African to travel to space as a space tourist.",
            ],
            
            ['image' => "/images/equipage/pilote.png",

            'fonction_fr'=> "Pilote",
            'nom_fr'=> "Victor Glover",
            'description_fr'=> "Pilote du premier vol opérationnel du SpaceX Crew Dragon à destination de la Station Spatiale Internationale. Glover est commandant dans la marine américaine, où il pilote un F/A-18. Il a été membre de l’équipage de l’Expedition 64 et a servi comme ingénieur de vol des systèmes de station.",

            'fonction_en'=> "Pilot",
            'nom_en'=> "Victor Glover",
            'description_en'=> "Pilot of the first operational flight of the SpaceX Crew Dragon to the International Space Station. Glover is a commander in the U.S. Navy, where he pilots an F/A-18. He was a crew member of Expedition 64 and served as a systems flight engineer.",
            ],
        
            ['image' => "/images/equipage/ingenieure.png",

            'fonction_fr'=> "Ingenieure de vol",
            'nom_fr'=> "Anousheh Ansari",
            'description_fr'=> "Anousheh Ansari est une ingénieure Irano-Américaine et cofondatrice de Prodea Systems. Ansari était la quatrième touriste de l'espace autofinancée, la première femme autofinancée à se rendre à l'ISS, et la première iranienne dans l'espace.",

            'fonction_en'=> "Flight Engineer",
            'nom_en'=> "Anousheh Ansari",
            'description_en'=> "Anousheh Ansari is an Iranian-American engineer and co-founder of Prodea Systems. Ansari was the fourth self-funded space tourist, the first self-funded woman to visit the ISS, and the first Iranian in space.",
            ],
        ];
        DB::table('crews')->insert($crews);
    }
}