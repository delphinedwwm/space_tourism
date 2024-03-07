<!DOCTYPE html>
<html>
<head>

    <title>@yield('title')</title>
    
    @vite(['public/css/app.css', 'public/js/app.js'])

</head>
<body>

    @include('component.header')

    @yield('content')

</body>
</html>