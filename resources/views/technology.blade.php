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
        @vite(['resources/css/app.css', 'resources/js/app.js'])
      
    </head>
    <body class="technology">
    
        @include('layouts.header')

    <main class="contenue_principal">
        <p>technology</p>
        <title>L'ESPACE</title>
        <p>Soyons objectif; si vous voulez aller dans l'espace, vous pouvez aller véritablement dans le véritable espace et non juste planer sur le bord de celui-ci. Eh bien, asseyez-vous parce que nous allons vous donner une expérience vraiment extraordinaire!</p>
        <a a href="destination.blade.php"class="cta-button">EXPLORER</a>
    </main>   
                
    </body>
</html>