<!DOCTYPE html>
<html xmlns:og="http://ogp.me/ns#" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Space Tourism</title>

        <!-- Fonts -->
        

        <!-- Styles -->

        @vite(['public/css/app.css', 'public/js/app.js'])

        <!-- balises Open Graph

        <meta property="og:title" content="Article sur l'Open Graph par Referenseo" />

        <meta property="og:type" content="article" />

        <meta property="og:url" content="http://www.yakaferci.com/open-graph/" />

        <meta property="og:image" content="http://referenseo/images/open-graph.jpg" />

        <meta property="og:site_name" content="Agence de référencement Referenseo" />

        ---------------------------------------------------->

    </head>

    <body class="accueil">

        @include('layouts.header')

            <main class="contenu_principal">
                <h1 class="titre_principal">Donc vous voyager dans<br><span>l'espace</span></h1>
                <p class="speech">Soyons objectif; si vous voulez aller dans l'espace, vous pouvez aller véritablement dans le véritable espace et non juste planer sur le bord de celui-ci. Eh bien, asseyez-vous parce que nous allons vous donner une expérience vraiment extraordinaire&nbsp;!</p> 
                <a href="{{route('destination', ['planete'=>'lune'])}}" class="cta-button">EXPLORER</a>
            </main>  
     
    </body>
    
</html>