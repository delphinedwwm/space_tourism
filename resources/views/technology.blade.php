@extends('layouts.main')


@section('og-title', 'space tourism page technologies')

@section('og-url',' technologies')

@section('og-image', asset('/images/technologies_background.jpg'))

@section('title', 'Technologies')

@section('img-bkgrd', 'technologies')

@section('content')

    <main class="contenu_principal" role="main" aria-labelledby="titre_principal"> <!-- role = pour indiquer que cette section est le contenu principal de la page. / la balise <h1> est le titre principal de cette section, on ajoute l'attribut aria-labelledby pour référencer cet élément.-->
        
        <h1 class="titre"><span class="number_titre_h1">03</span>{{ __("titre_page_technologie") }}</h1>
        
        <figure class="img_technologie">
            <img src="{{ $article['image'] }}" class="img_tech" alt="{{ $article['objet'] }}">
        </figure>

        <nav role="nav" class="nav_technologie">
            <ul role="list">
                <li role="listitem"><a href="{{ route('technologie', ['techno'=>'lanceur']) }}" alt="article_le_lanceur" aria-label="Voir l'article sur le lanceur">1</a></li><!-- pour les liens de navigation afin d'améliorer leur descriptivité -->
                <li role="listitem"><a href="{{ route('technologie', ['techno'=>'spatioport']) }}" alt="article_le_spatioport" aria-label="Voir l'article sur le spatioport">2</a></li>
                <li role="listitem"><a href="{{ route('technologie', ['techno'=>'capsule']) }}" alt="article_la_capsule_spaciale" aria-label="Voir l'article sur la capsule spatiale">3</a></li>
            </ul>
        </nav>

        <section class="etiquette">
            <h2 class="terminologie">{{ $article['nom'] }}</h2>
            <h2 class="objet">{{ $article['objet'] }}</h2>
            <p class="description" aria-live="polite">{{ $article['description'] }}</p><!-- l'attribut aria-live au paragraphe avec la classe description (s'il contient des informations dynamiques)-->
        </section>

    </main>   
            
@endsection