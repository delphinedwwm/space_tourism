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

    <body class="technologie">
    
        @include('layouts.header')

            <main class="contenu_principal">
                
                <h1 class="titre"><span class="number_titre_h1">03</span>Lanceur spatial 101</h1>
                
                <figure class="img_technologie">
                    <img src="{{ $article['image'] }}" class="img_tech" alt="{{ $article['objet'] }}">
                </figure>

                <nav class="nav_technologie">
                    <ul>
                        <li><a href="{{ route('technologie', ['techno'=>'lanceur']) }}" alt="article_le_lanceur">1</a></li>
                        <li><a href="{{ route('technologie', ['techno'=>'spatioport']) }}" alt="article_le_spatioport">2</a></li>
                        <li><a href="{{ route('technologie', ['techno'=>'capsule']) }}" alt="article_la_capsule_spaciale">3</a></li>
                    </ul>
                </nav>

                <section class="etiquette">
                    <h2 class="terminologie">{{ $article['nom'] }}</h2>
                    <h2 class="objet">{{ $article['objet'] }}</h2>
                    <p class="description" >{{ $article['description'] }}</p>
                </section>

            </main>   
            
    </body>
    
</html>