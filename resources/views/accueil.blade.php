<!DOCTYPE html>
<html xmlns:og="http://ogp.me/ns#" lang="{{ str_replace('_', '-', app()->getLocale()) }}" aria-lang="fr"><!-- pour indiquer la langue principale de la page.-->

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Space Tourism</title>

        @vite(['public/css/app.css', 'public/js/app.js'])

        <!-- balises Open Graph -->

        <meta property="og:title" content="Space Tourism" />

        <meta property="og:type" content="article" />

        <meta property="og:url" content="http://space_tourism.test/open-graph/" />

        <meta property="og:image" content="http://public/images/bureau_background/bureau_accueil_background.jpg" />

        <meta property="og:site_name" content="space tourism page d'accueil" />

        <!---------------------------------------------------->

    </head>

    <body class="accueil" aria-live="polite"> <!-- utilisé ici pour indiquer que des mises à jour dynamiques sur la page seront annoncées de manière discrète, sans interrompre l'utilisateur.-->

        @include('layouts.header')

            <main class="contenu_principal" role="main" aria-labelledby="titre_principal"> <!-- role = pour indiquer que cette section est le contenu principal de la page. / la balise <h1> est le titre principal de cette section, on ajoute l'attribut aria-labelledby pour référencer cet élément.-->
                <h1 class="titre_principal">Donc vous voyager dans<br><span>l'espace</span></h1>
                <p class="speech" aria-live="polite">Soyons objectif; si vous voulez aller dans l'espace, vous pouvez aller véritablement dans le véritable espace et non juste planer sur le bord de celui-ci. Eh bien, asseyez-vous parce que nous allons vous donner une expérience vraiment extraordinaire&nbsp;!</p> <!--le paragraphe contient des informations importantes qui peuvent être mises à jour dynamiquement-->
                <a href="{{route('destination', ['planete'=>'lune'])}}" class="cta-button" aria-label="Explorer la Lune">EXPLORER</a><!--pour fournir une description significative du lien.-->
            </main>  
     
    </body>
    
</html>