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
    <body class="destination">
    
        @include('layouts.header')

        <main class="contenu_principal">


        <h1 class="title"><span class="number_titre_h1">01</span>Choisissez votre destination</h1>

        @foreach($articles as $article)
            <figure class="crews">
                <img src="{{ $article['picture'] }}" class="img_picture" alt="{{ $article['function'] }}">
                
            </figure>
        @endforeach
        
        <hr>

        <nav class="equipage">
            <ul>
                <li><a href="#child-1"></a></li>
                <li><a href="#child-2"></a></li>
                <li><a href="#child-3"></a></li>
                <li><a href="#child-4"></a></li>
            </ul>
        </nav>

        @foreach($articles as $article)
            <section class="etiquette">
                <h2 class="poste_personne">{{ $article['function'] }}</h2>
                <h2 class="name_personne">{{ $article['name'] }}</h2>
                <p class="description">{{ $article['description'] }}</p>
            </section>
        @endforeach
        
        </main>   
                
    </body>
</html>