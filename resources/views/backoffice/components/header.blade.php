<header class="entete-page">
<nav role="nav" class="menu">
        <ul role="list">
            <li role="listitem"><a href="{{ route('accueil') }}" title="page_accueil"><span class="number">00</span>{{ __("Accueil") }}</a></li>
            <li role="listitem"><a href="{{ route('destination', $navlinks['destination']) }}" title="page_destination"><span class="number">01</span>{{ __("Destination") }}</a></li>
            <li role="listitem"><a href="{{ route('crew', $navlinks['crew']) }}" title="page_crew"><span class="number">02</span>{{ __("Crew") }}</a></li>
            <li role="listitem"><a href="{{ route('technology', $navlinks['technology']) }}" title="page_technologie"><span class="number">03</span>{{ __("Technology") }}</a></li>
        </ul>
    </nav>
    
    <script src="app.js"></script>
</header>