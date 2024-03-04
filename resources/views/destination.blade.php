@extends('layouts.main')

@section('og-title', 'space tourism page destination')

@section('og-url',' destination')

@section('og-image', asset('/images/destination_background.jpg'))

@section('title', 'Destinatiions')

@section('img-bkgrd', 'destination')

@section('content')
    <main class="contenu_principal" role="main" aria-labelledby="titre_principal"> <!-- role = pour indiquer que cette section est le contenu principal de la page. / la balise <h1> est le titre principal de cette section, on ajoute l'attribut aria-labelledby pour référencer cet élément.-->

        <h1 class="titre"><span class="number_titre_h1">01</span>{{ __("titre_page_destination") }}</h1>

        <figure class="planete">
            <img src="{{ $planet->image }}" class="img_planete" alt="{{ $planet->titre }}">
        </figure>
    
        <nav class="planetes">
            <ul role="list">
                <!-- <li role="listitem"><a href="{{route('destination', 1) }}" alt="article_lune" aria-label="Explorer la Lune">{{ __("lune") }}</a></li>  
                <li role="listitem"><a href="{{route('destination', 2) }}" alt="article_mars" aria-label="Explorer Mars">{{ __("mars") }}</a></li>
                <li role="listitem"><a href="{{route('destination', 3) }}" alt="article_europe" aria-label="Explorer Europe">{{ __("europe") }}</a></li>
                <li role="listitem"><a href="{{route('destination', 4) }}" alt="article_titan" aria-label="Explorer Titan">{{ __("titan") }}</a></li> -->
                @foreach($links as $link)
                    <li role="listitem"> <a href="{{ route('destination', $link->id) }}"> {{ $link->titre }} </a></li>
                @endforeach

            </ul>
        </nav>

        <section class="etiquette" aria-labelledby="titre_planete"><!--pour faire référence au titre (<h2 class="nom_planete">). Cela peut aider les utilisateurs d'outils d'assistance à comprendre la relation entre la section et son titre.-->
            <h2 class="nom_planete">{{ $planet->titre }}</h2>
            <p class="voyage" aria-live="polite">{{ $planet->destination }}</p><!-- utilisé ici pour indiquer que des mises à jour dynamiques sur la page seront annoncées de manière discrète, sans interrompre l'utilisateur.-->
            <hr>
            <p class="distance" aria-label="Distance: {{ $planet->distance }}">{{ __("distance") }} 
                <span>{{ $planet->distance }}</span>    
            </p>
            <p class="duree" aria-label="Duree: {{ $planet->duree }}">{{ __("duree") }} 
                <span> {{ $planet->duree }}</span>
            </p>
        </section>

    </main>   

@endsection