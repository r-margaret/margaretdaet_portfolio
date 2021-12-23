<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <link rel="shortcut icon" type="image/png" href="{{ url('img/m_icon.png') }}">

    <title>Android Project &#8212; I'm Margaret Daet!</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div class="container py-5">
        <div class="row py-3">
            <div class="col-lg-12 project-heading-android">
                <span>Android Studio Project</span>
                <p>Menu Mobile App</p>
            </div>
            <div class="android-content">
                <p>All restaurants or any fast-food chains have a busy environment and cannot almost cater their customers at the same time.
                        That is one of the problems we want to be solved. When there are lots of customers, they cannot accommodate all their needs.
                        The power of a man is not enough to handle all their customer. Good food but terrible services can cause a customer's heart disappointment. 
                        That is why, we the developer came up with an idea to mitigate the problem. 
                        With this app, it will be more systematic inside of the building because the application will work as an ordering and assistant system.</p>
                        
                <p>This application primarily supports the employees of the restaurant, at the same 
                        time can give convenience to their customers. 
                        Good food with good service can capture a customer's heart.</p>
            </div>
            <div class="project-heading-android pt-4">
                <video width="250" controls>
                    <source src="{{ url('video/vid.mp4') }}" type="video/mp4">
                </video>
            </div>
        </div>
        </div>
    </div>
</body>
</html>