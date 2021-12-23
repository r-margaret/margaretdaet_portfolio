<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <link rel="shortcut icon" type="image/png" href="{{ url('img/m_icon.png') }}">

    <title>Website Project &#8212; I'm Margaret Daet!</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div class="container py-5">
        <div class="row py-3">
            <div class="col-lg-12 project-heading-android">
                <span>Website Project</span>
                <p>Restaurant Website</p>
            </div>
            <div class="restaurant-content">
                <p>In this completed project, we apply JavaScript in the login form and set an information alert on the Home Page every time it will be obtained. We used HTML, CSS, and JavaScript.</p>

                <p>You can instantly watch the clip below for easy viewing of the created page.</p>
            </div>
            <div class="project-heading-android pt-5">
                <video width="85%" controls>
                    <source src="{{ url('video/dishWebsite.mp4') }}" type="video/mp4">
                </video>
            </div>
        </div>
        </div>
    </div>
</body>
</html>