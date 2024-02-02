<header class="entete-page">
    
    <div>
        <svg width="40px" height="40px" viewBox="0 0 40 40" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg">
            <g class="logo">
                <path d="M20 0C8.9543 0 0 8.9543 0 20C0 31.0457 8.9543 40 20 40C31.0457 40 40 31.0457 40 20C40 8.9543 31.0457 0 20 0ZM20 0C20 0 19.1176 9.11765 14.1176 14.1176C9.11765 19.1176 0 20 0 20C0 20 9.11765 20.8824 14.1176 25.8824C19.1176 30.8824 20 40 20 40C20 40 20.8824 30.8824 25.8824 25.8824C30.8824 20.8824 40 20 40 20C40 20 30.8824 19.1176 25.8824 14.1176C20.8824 9.11765 20 0 20 0Z" id="Ellipse-Difference" fill="#FFFFFF" fill-rule="evenodd" stroke="none" />
            </g>
        </svg>
    </div>

    <div class="burger-menu">
        <span></span>
    </div>

    <hr>

    <nav class="menu">
        <ul>
            <li><a href="{{route('accueil')}}" title="page_accueil"><span class="number">00</span>{{ __("Accueil") }}</a></li>
            <li><a href="{{route('destination', ['planete'=>'lune'])}}" title="page_destination"><span class="number">01</span>{{ __("Destination") }}</a></li>
            <li><a href="{{route('equipage', ['equipe'=>'commandant'])}}" title="page_equipage"><span class="number">02</span>{{ __("Equipage") }}</a></li>
            <li><a href="{{route('technologie', ['techno'=>'lanceur'])}}" title="page_technologie"><span class="number">03</span>{{ __("Technologie") }}</a></li>
        </ul>
    </nav>
           
</header>