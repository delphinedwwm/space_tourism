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
    <body class="home">

        @include('layouts.header')

        <div class="enveloppe">
            
            <main class="contenue_principal">
                <p class="slogan">DONC VOUS VOULEZ VOYAGER DANS</p>
                <h1>L'ESPACE</h1>
                <p class="speech">Soyons objectif; si vous voulez aller dans l'espace, vous pouvez aller véritablement dans le véritable espace et non juste planer sur le bord de celui-ci. Eh bien, asseyez-vous parce que nous allons vous donner une expérience vraiment extraordinaire&nbsp;!</p> 
                <a href="/destination"class="cta-button">EXPLORER</a>
            </main>  

        </div>            
    </body>
</html>