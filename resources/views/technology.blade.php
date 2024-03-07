@extends('layouts.main')


@section('og-title', 'space tourism page technologies')

@section('og-url',' technologies')

@section('og-image', asset('/images/technologies_background.jpg'))

@section('title', 'Technologies')

@section('img-bkgrd', 'technologies')

@section('content')

    <main class="contenu_principal" role="main" aria-labelledby="titre_principal"> <!-- role = pour indiquer que cette section est le contenu principal de la page. / la balise <h1> est le titre principal de cette section, on ajoute l'attribut aria-labelledby pour référencer cet élément.-->
        
    <h1 class="titre"><span class="number_titre_h1">03</span>{{ __("titre_page_technologie") }}</h1>

    <figure class="image_techno">
        <img src="{{ $techno['image'] }}" class="techno" alt="{{ $techno['poste'] }}">
    </figure>

    <hr>

    <nav class="nav_equipe">
        <ul role="list">
            
        
            @foreach($links as $link)
                <li role="listitem"> <a href="{{ route('technology', $link->id) }}"> {{ $link->nom }} </a></li>
            @endforeach
        </ul>
    </nav>
    <section class="etiquette" aria-labelledby="nom_technologie"><!--pour faire référence au titre (<h2 class="nom_planete">). Cela peut aider les utilisateurs d'outils d'assistance à comprendre la relation entre la section et son titre.-->
        <h2 class="nom_technologie">{{ $techno->nom }}</h2>
        
        <p class="fonction" aria-live="polite">{{ $techno->fonction }}</p><!-- utilisé ici pour indiquer que des mises à jour dynamiques sur la page seront annoncées de manière discrète, sans interrompre l'utilisateur.-->
        <hr>
        <p class="description" aria-label="Description: {{ $techno->description }}">{{ $techno->description }}</p>

    </section>


        
@endsection