<?php

// app/Http/Controllers/LangController.php

namespace App\Http\Controllers; // déclaration qui indique dans quel espace de noms se trouve ce contrôleur

use App\Http\Controllers\Controller; 

class LangController extends Controller // la classe LangController étend la classe de base Controller de Laravel
{
    public function changeLocale($locale) // requête est faite à la route que nous avons définie précédemment
    {
        // s'assurer que la langue est prise en charge
        if (in_array($locale, ["fr", "en"])) { // vérifie si la langue fournie est présente dans la liste des langues prises en charge définie dans le fichier config/app.php
            session(['locale' => $locale]); // Si la langue est prise en charge, la langue est stocké dans la session de l'utilisateur
            // dd(session("locale"));
        }

        return back(); //  redirige l'utilisateur vers la page précédente
    }
}