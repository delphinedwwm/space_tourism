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

    <body class="technology">
    
        @include('layouts.header')

            <main class="contenu_principal">
                
                <h1 class="title"><span class="number_titre_h1">03</span>Lanceur spatial 101</h1>
                
                @foreach($articles as $article)
                    <figure class="technology">
                        <img src="{{ $article['picture'] }}" class="img_picture" alt="{{ $article['objet'] }}">
                    </figure>
                @endforeach

                <nav class="technology">
                    <ul>
                        <li><a href="#"></a></li>
                        <li><a href="#"></a></li>
                        <li><a href="#"></a></li>
                        <li><a href="#"></a></li>
                    </ul>
                </nav>

                @foreach($articles as $article)
                    <section class="etiquette">
                        <h2 class="therminologie">{{ $article['name'] }}</h2>
                        <h2 class="name_personne">{{ $article['objet'] }}</h2>
                        <p class="description" >{{ $article['description'] }}</p>
                    </section>
                @endforeach

            </main>   
            
    </body>
    
</html>