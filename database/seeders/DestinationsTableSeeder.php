<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DestinationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run():void
    {
        $destinations = [
            ['image' => "/images/destination/lune.png",

            "titre_fr"=> "lune",
            "destination_fr"=>"Voyez notre planète comme vous ne l'avez jamais vue auparavant. Un parfait voayage de détente pour vous aider à prendre du recul et revenir requinquer. Pendant que vous y êtes, plangez-vous dans l'histoire en visitant les sites d'atterrissage de Luna 2 et Apollo 11.",
            "distance_fr"=>"384000km",
            "duree_fr"=>"3 jours",

            "titre_en"=> "moon",
            "destination_en"=> "See our planet like you've never seen it before. A perfect relaxing journey to help you step back and come back rejuvenated. While you're there, immerse yourself in history by visiting the landing sites of Luna 2 and Apollo 11.",
            "distance_en"=> "384000km",
            "duree_en"=> "3 days"
            ],
     
            ['image' => "/images/destination/mars.png",
            
            "titre_fr" => "mars",
            "destination_fr"=>"N'oubliez pas vos bottes de randonnée. Vous en aurez besoin pour gravir le mont Olympus, la plus haute montagne planétaire dans notre système solaire. Il fait deux fois et demie la taille de l'Everest!",
            "distance_fr"=>"225 GM",
            "duree_fr"=>"9 mois",

            "titre_en" => "mars",
            "destination_en"=>"Don't forget your hiking boots. You'll need them to climb Mount Olympus, the tallest planetary mountain in our solar system. It's two and a half times the size of Everest!",
            "distance_en"=>"225 GM",
            "duree_en"=>"9 months"
            ],
        
            ['image' => "/images/destination/europe.png",

            "titre_fr" =>"europe",
            "destination_fr"=>"La plus petite des quatre lunes galiléennes en orbite autour de Jupiter, Europe est le rêve des amoureux de  l'hiver. Sa surface glacée est parfaite pour faire un peu de patin à glace, du curling, du hockey ou tout simplement pour vous détentre dans votre confortable chalet hivernal.",
            "distance_fr"=>"628 Gm",
            "duree_fr"=>"3 ans",

            "titre_en" =>"europe",
            "destination_en"=>"The smallest of the four Galilean moons orbiting Jupiter, Europe is a winter lover's dream. Its icy surface is perfect for ice skating, curling, hockey, or simply relaxing in your cozy winter cabin.",
            "distance_en"=>"628 Gm",
            "duree_en"=>"3 years"
            ],
            
            ['image' => "/images/destination/titan.png",

            "titre_fr"=>"titan",
            "destination_fr"=>"La seule lune connue pour avoir une atmosphère dense autre que la Terre, Titan est comme une maison loin de la laison (et juste quelques centaines de degrés plus froid !). En bonus, vous pouvez contemplez des vues saisissantes des anneaux de Saturne.",
            "distance_fr"=>"1,6TM",
            "duree_fr"=>"7 ans",

            "titre_en"=>"titan",
            "destination_en"=>"The only moon known to have a dense atmosphere other than Earth, Titan is like a home away from home (just a few hundred degrees colder!). As a bonus, you can enjoy stunning views of Saturn's rings.",
            "distance_en"=>"1,6TM",
            "duree_en"=>"7 years"

            ],
        ];

        DB::table('destinations')->insert($destinations);
    }
}
