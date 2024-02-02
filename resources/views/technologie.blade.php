<!DOCTYPE html>
<html xmlns:og="http://ogp.me/ns#" lang="{{ str_replace('_', '-', app()->getLocale()) }}" aria-lang="fr"><!-- pour indiquer la langue principale de la page.-->
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Space Tourism</title>

       
        @vite(['public/css/app.css', 'public/js/app.js'])
      

        <!-- balises Open Graph -->

        <meta property="og:title" content="space tourism page technologie" />

        <meta property="og:type" content="article" />

        <meta property="og:url" content="{{ url('/technologie/' . $article['objet']) }}" />

        <meta property="og:image" content=" {{ asset('/images/technologie_background.jpg') }}" />

        <meta property="og:site_name" content="Space Tourism" />

        <!---------------------------------------------------->
    </head>

    <body class="technologie" aria-live="polite"> <!-- utilisé ici pour indiquer que des mises à jour dynamiques sur la page seront annoncées de manière discrète, sans interrompre l'utilisateur.-->
    
        @include('layouts.header')

            <main class="contenu_principal" role="main" aria-labelledby="titre_principal"> <!-- role = pour indiquer que cette section est le contenu principal de la page. / la balise <h1> est le titre principal de cette section, on ajoute l'attribut aria-labelledby pour référencer cet élément.-->
                
                <h1 class="titre"><span class="number_titre_h1">03</span>Lanceur spatial 101</h1>
                
                <figure class="img_technologie">
                    <img src="{{ $article['image'] }}" class="img_tech" alt="{{ $article['objet'] }}">
                </figure>

                <nav class="nav_technologie">
                    <ul>
                        <li><a href="{{ route('technologie', ['techno'=>'lanceur']) }}" alt="article_le_lanceur" aria-label="Voir l'article sur le lanceur">1</a></li><!-- pour les liens de navigation afin d'améliorer leur descriptivité -->
                        <li><a href="{{ route('technologie', ['techno'=>'spatioport']) }}" alt="article_le_spatioport" aria-label="Voir l'article sur le spatioport">2</a></li>
                        <li><a href="{{ route('technologie', ['techno'=>'capsule']) }}" alt="article_la_capsule_spaciale" aria-label="Voir l'article sur la capsule spatiale">3</a></li>
                    </ul>
                </nav>

                <section class="etiquette">
                    <h2 class="terminologie">{{ $article['nom'] }}</h2>
                    <h2 class="objet">{{ $article['objet'] }}</h2>
                    <p class="description" aria-live="polite">{{ $article['description'] }}</p><!-- l'attribut aria-live au paragraphe avec la classe description (s'il contient des informations dynamiques)-->
                </section>

            </main>   
            
    </body>
    
</html>