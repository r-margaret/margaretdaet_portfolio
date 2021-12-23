<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="shortcut icon" type="image/png" href="{{ url('img/m_icon.png') }}">

    <title>Contact &#8212; I'm Margaret Daet!</title>

    <!-- Scripts -->
    <script src="{{ url('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ url('css/app.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">

    @livewireStyles
</head>
<body>

    {{$slot}}

    <!-- <div id="app">
        @include('incorporate.navbar')

        <main class="pt-5 pb-2">
            @yield('content')
            
        </main>
        
    </div> -->

    @livewireScripts
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

</body>
</html>
