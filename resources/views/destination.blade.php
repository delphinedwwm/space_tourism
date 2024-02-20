<!DOCTYPE html>
<html xmlns:og="http://ogp.me/ns#" lang="{{ str_replace('_', '-', app()->getLocale()) }}" aria-lang="fr"><!-- pour indiquer la langue principale de la page.-->
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Space Tourism</title>

        @vite(['public/css/app.css', 'public/js/app.js'])

        
        <!-- balises Open Graph -->

        <meta property="og:title" content="space tourism page destination" />

        <meta property="og:type" content="article" />

        <meta property="og:url" content="{{ url('/destination/' . $planet->titre) }}" />

        <meta property="og:image" content=" {{ asset('/images/destination_background.jpg') }}" />

        <meta property="og:site_name" content="Space Tourism" />

        <!---------------------------------------------------->
      
    </head>

    <body class="destination" aria-live="polite"> <!-- utilisé ici pour indiquer que des mises à jour dynamiques sur la page seront annoncées de manière discrète, sans interrompre l'utilisateur.-->
      
        @include('layouts.header')

        <main class="contenu_principal" role="main" aria-labelledby="titre_principal"> <!-- role = pour indiquer que cette section est le contenu principal de la page. / la balise <h1> est le titre principal de cette section, on ajoute l'attribut aria-labelledby pour référencer cet élément.-->

            <h1 class="titre"><span class="number_titre_h1">01</span>{{ __("titre_page_destination") }}</h1>

            <figure class="planete">
                <img src="{{ $article['image'] }}" class="img_planete" alt="{{ $planet['titre'] }}">
            </figure>
        
            <nav class="planetes">
                <ul role="list">
                    <li role="listitem"><a href="{{route('destination', ['planete'=>'lune'])}}" alt="article_lune" aria-label="Explorer la Lune">{{ __("lune") }}</a></li> <!--pour les éléments qui ne sont pas immédiatement évidents pour les utilisateurs d'outils d'assistance. -->
                    <li role="listitem"><a href="{{route('destination', ['planete'=>'mars'])}}" alt="article_mars" aria-label="Explorer Mars">{{ __("mars") }}</a></li>
                    <li role="listitem"><a href="{{route('destination', ['planete'=>'europe'])}}" alt="article_europe" aria-label="Explorer Europe">{{ __("europe") }}</a></li>
                    <li role="listitem"><a href="{{route('destination', ['planete'=>'titan'])}}" alt="article_titan" aria-label="Explorer Titan">{{ __("titan") }}</a></li>
                </ul>
            </nav>

            <section class="etiquette" aria-labelledby="titre_planete"><!--pour faire référence au titre (<h2 class="nom_planete">). Cela peut aider les utilisateurs d'outils d'assistance à comprendre la relation entre la section et son titre.-->
                <h2 class="nom_planete">{{ $planet["titre_{$locale}"] }}</h2>
                <p class="voyage" aria-live="polite">{{ $planet['voyage'] }}</p><!-- utilisé ici pour indiquer que des mises à jour dynamiques sur la page seront annoncées de manière discrète, sans interrompre l'utilisateur.-->
                <hr>
                <p class="distance" aria-label="Distance: {{ $planet['distance'] }}">{{ __("distance") }} 
                    <span>{{ $planet['distance'] }}</span>    
                </p>
                <p class="duree" aria-label="Durée: {{ $planet['durée'] }}">{{ __("duree") }} 
                    <span> {{ $planet['durée'] }}</span>
                </p>
            </section>
    
        </main>   

    </body>
</html>