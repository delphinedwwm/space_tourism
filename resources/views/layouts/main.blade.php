<!DOCTYPE html>
<html xmlns:og="http://ogp.me/ns#" lang="{{ str_replace('_', '-', app()->getLocale()) }}" aria-lang="fr"><!-- pour indiquer la langue principale de la page.-->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    
    @vite(['public/css/app.css', 'public/js/app.js'])

<!-- balises Open Graph -->

<meta property="og:title" content="@yield('og-title')" />

<meta property="og:type" content="@yield('og-type', 'article')" />

<meta property="og:url" content="@yield('og-url')" />

<meta property="og:image" content="@yield('og-image')"  />

<meta property="og:site_name" content="@yield('og-site-name', 'Space Tourism')"  />

<!---------------------------------------------------->
</head>
<body class="background @yield('img-bkgrd')">

    @include('component.header')

    @yield('content')

</body>
</html>