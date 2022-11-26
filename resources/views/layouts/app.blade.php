<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <title>@yield('title') | {{ config('app.name', 'Laravel') }}</title>
        <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
        <script src="https://kit.fontawesome.com/4c7e90a598.js" crossorigin="anonymous"></script>
    </head>
    <body>
        
        
        @include('layouts.nav')
        @yield('content')
        @include('layouts.footer')

    </body>
    
</html>
