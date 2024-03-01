@extends('layouts.main')

@section('og-title', 'space tourism page equipage')

@section('og-url',' equipage')

@section('og-image', asset('/images/equipage_background.jpg'))

@section('title', 'Equipage')

@section('img-bkgrd', 'equipage')

@section('content')
    <main class="contenu_principal" role="main" aria-labelledby="titre_principal"> <!-- role = pour indiquer que cette section est le contenu principal de la page. / la balise <h1> est le titre principal de cette section, on ajoute l'attribut aria-labelledby pour référencer cet élément.-->

    <h1 class="titre"><span class="number_titre_h1">02</span>{{ __("titre_page_equipage") }}</h1>

    <figure class="image_equipage">
        <img src="{{ $article['image'] }}" class="equipier" alt="{{ $article['poste'] }}">
    </figure>

    <hr>

    <nav class="nav_equipe">
        <ul role="list">
            <li role="listitem"><a href="{{ route('equipage', ['equipe'=>'commandant']) }}" alt="article_commandant" aria-label="Voir l'article sur le commandant"></a></li><!-- pour les liens de navigation afin d'améliorer leur descriptivité -->
            <li role="listitem"><a href="{{ route('equipage', ['equipe'=>'specialiste']) }}" alt="article_spécialiste_mission" aria-label="Voir l'article sur le spécialiste de mission"></a></li>
            <li role="listitem"><a href="{{ route('equipage', ['equipe'=>'pilote']) }}" alt="article_pilote" aria-label="Voir l'article sur le pilote"></a></li>
            <li role="listitem"><a href="{{ route('equipage', ['equipe'=>'ingenieur']) }}" alt="article_ingenieure" aria-label="Voir l'article sur l'ingénieur"></a></li>
        </ul>
    </nav>

    <section class="etiquette">
        <h2 class="poste">{{ $article['poste'] }}</h2>
        <h3 class="nom_personne">{{ $article['nom'] }}</h3>
        <p class="fonction" aria-live="polite">{{ $article['fonction'] }}</p><!-- l'attribut aria-live au paragraphe avec la classe fonction (s'il contient des informations dynamiques)-->
    </section>

    </main>   
@endsection  

