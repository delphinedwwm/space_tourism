@extends('layouts.main')

@section('og-title', 'space tourism page accueil')

@section('og-url', url('/accueil'))

@section('og-image', asset('/images/destination_background.jpg'))

@section('title', 'Accueil')

@section('img-bkgrd', 'accueil')

@section('content')
    <main class="contenu_principal" role="main" aria-labelledby="titre_principal"> <!-- role = pour indiquer que cette section est le contenu principal de la page. / la balise <h1> est le titre principal de cette section, on ajoute l'attribut aria-labelledby pour référencer cet élément.-->
        <h1 class="titre_principal">{{ __("titre_page_accueil") }}</span></h1>
        <p class="speech" aria-live="polite">{{ __("speech") }}</p> <!--le paragraphe contient des informations importantes qui peuvent être mises à jour dynamiquement-->
        <a href="{{route('destination', ['id'=>'1'])}}" class="cta-button" aria-label="Explorer la Lune">{{ __("boutton_cta") }}</a><!--pour fournir une description significative du lien.-->
    </main> 
@endsection 

