<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Space Tourism</title>

        <!-- Fonts -->
        <!-- <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" /> -->

        <!-- Styles -->
        @vite(['public/css/app.css', 'public/js/app.js'])
      
    </head>
    <body class="equipage">
    
        @include('layouts.header')

        <main class="contenu_principal">


        <h1 class="titre"><span class="number_titre_h1">02</span>rencontrez l'équipage</h1>

        <figure class="image_equipage">
            <img src="{{ $article['image'] }}" class="equipier" alt="{{ $article['poste'] }}">
            
        </figure>
    
        <hr>

        <nav class="nav_equipe">
            <ul>
                <li><a href="{{ $article['poste'] }}" alt="article_commandant"></a></li>
                <li><a href="{{ $article['poste'] }}" alt="article_spécialiste_mission"></a></li>
                <li><a href="{{ $article['poste'] }}" alt="article_pilote"></a></li>
                <li><a href="{{ $article['poste'] }}" alt="article_ingenieure"></a></li>
            </ul>
        </nav>

        <section class="etiquette">
            <h2 class="poste">{{ $article['poste'] }}</h2>
            <h3 class="nom_personne">{{ $article['nom'] }}</h3>
            <p class="fonction">{{ $article['fonction'] }}</p>
        </section>

        
        </main>   
                
    </body>
</html>