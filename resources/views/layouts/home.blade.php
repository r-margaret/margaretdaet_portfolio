<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="shortcut icon" type="image/png" href="{{ url('img/m_icon.png') }}">

    <title>I'm Margaret Daet!</title>

    <!-- Scripts -->
    <script src="{{ url('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ url('css/app.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">

</head>
<body>
    <div id="app">
        @include('incorporate.navbar')

        <main class="pt-5 pb-2">
            @yield('content')   
        </main>
        
    </div>

</body>
</html>
