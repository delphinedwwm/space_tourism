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

                <ul>
                    @foreach($articles as $article)
                    <li>{{$article['picture']}}</li>
                    @endforeach
                </ul>

            </main>   

 
         
    </body>
</html>