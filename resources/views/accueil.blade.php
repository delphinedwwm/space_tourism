<!DOCTYPE html>
<html xmlns:og="http://ogp.me/ns#" lang="{{ str_replace('_', '-', app()->getLocale()) }}" aria-lang="fr"><!-- pour indiquer la langue principale de la page.-->

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Space Tourism</title>

        @vite(['public/css/app.css', 'public/js/app.js'])

        <!-- balises Open Graph -->

        <meta property="og:title" content="space tourism page accueil" />

        <meta property="og:type" content="article" />

        <meta property="og:url" content="{{ url('/accueil') }}" />

        <meta property="og:image" content=" {{ asset('/images/destination_background.jpg') }}" />

        <meta property="og:site_name" content="Space Tourism" />

        <!---------------------------------------------------->

    </head>

    <body class="accueil" aria-live="polite"> <!-- utilisé ici pour indiquer que des mises à jour dynamiques sur la page seront annoncées de manière discrète, sans interrompre l'utilisateur.-->

        @include('layouts.header')

            <main class="contenu_principal" role="main" aria-labelledby="titre_principal"> <!-- role = pour indiquer que cette section est le contenu principal de la page. / la balise <h1> est le titre principal de cette section, on ajoute l'attribut aria-labelledby pour référencer cet élément.-->
                <h1 class="titre_principal">{{ __("titre_page_accueil") }}</span></h1>
                <p class="speech" aria-live="polite">{{ __("speech") }}</p> <!--le paragraphe contient des informations importantes qui peuvent être mises à jour dynamiquement-->
                <a href="{{route('destination', ['planete'=>'lune'])}}" class="cta-button" aria-label="Explorer la Lune">{{ __("boutton_cta") }}</a><!--pour fournir une description significative du lien.-->
            </main>  
     
    </body>
    
</html>