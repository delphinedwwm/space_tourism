<?php

namespace App\Http\Middleware;

use Closure; //classe PHP prédéfinie utilisée pour représenter les fonctions anonymes
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

   

    class Locale // Déclararation d'une classe appelée Locale qui implémente la logique du middleware
    {
        public function handle($request, Closure $next) // méthode handle est la méthode qui est appelée chaque fois qu'une requête HTTP entre dans l'application
        {
            $locale = session('locale', config('app.locale')); //  récupère la langue stockée dans la session de l'utilisateur.  Si aucune langue n'est trouvée dans la session, elle utilise la langue par défaut 

            app()->setLocale($locale); // définit la langue de l'application en utilisant la méthode setLocale.  la langue de l'application sera changée pour la langue spécifiée ici. 

            return $next($request); // appelle la fonction de rappel (Closure) suivante dans la chaîne des middlewares en utilisant $next($request). 
        }
    }
