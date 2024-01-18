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
                <figure class="planete">
                    <img src="{{ $article['picture'] }}" class="img_picture" alt="{{ $article['title'] }}">
                </figure>
            @endforeach

            <nav class="planetes">
                <ul>
                    <li><a href="{{ $article['title'] }}" alt="article_lune">Lune</a></li>
                    <li><a href="{{ $article['title'] }}" alt="article_mars">Mars</a></li>
                    <li><a href="{{ $article['title'] }}" alt="article_europe">Europe</a></li>
                    <li><a href="{{ $article['title'] }}" alt="article_titan">Titan</a></li>
                </ul>
            </nav>

            @foreach($articles as $article)
                <section class="etiquette">
                    <h2 class="nom_planete">{{ $article['title'] }}</h2>
                    <p class="description">{{ $article['content'] }}</p>
                    <hr>
                    <p class="distance" >Distance 
                        <span>{{ $article['distance'] }}</span>    
                    </p>
                    <p class="duree">Durée
                        <span> {{ $article['durée'] }}</span>
                    </p>
                </section>
            @endforeach

        </main>   

    </body>
</html>