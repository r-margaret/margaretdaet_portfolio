<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <link rel="shortcut icon" type="image/png" href="{{ url('img/m_icon.png') }}">

    <title>About &#8212; I'm Margaret Daet!</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    
    <script type="text/javascript">
        google.charts.load('current', {packages: ['corechart', 'bar']});
        google.charts.setOnLoadCallback(barChartSkills);

        function barChartSkills() {

            var data = google.visualization.arrayToDataTable([
                ['Element', 'Percentage', { role: 'style' }],
                ['HTML', 90, '#c9003c'],            
                ['CSS', 75, '#c9003c'],            
                ['Laravel 8', 45, '#c9003c'],            
                ['JavaScript', 50, '#c9003c'],            
                ['Bootstrap 5', 83, '#c9003c'],         
                ['MySQL', 90, '#c9003c'],
                ['Android Studio', 60, '#c9003c' ]
            ]);

            var options = {
                chartArea: {width: '50%'},
                'backgroundColor': 'FFFEF2',
                'legend': 'none',
                hAxis: {
                    title: 'Percentage',
                    minValue: 0,
                    maxValue: 100
                },
                vAxis: {
                    title: 'Skills'
                }
            };

            var chart = new google.visualization.BarChart(document.getElementById('barChart'));
            chart.draw(data, options);
        }
    </script>    
</head>
<body>
    @include('incorporate.navbar')
    <div class="container pt-5 about-title">
        <div class="row">
            <div class="col-lg-12 text-uppercase">
                <p>About Me</p>
            </div>
        </div>
    </div>
    <div class="container pt-4 aboutPage">
        <div class="row">
            <div class="col-lg-12">
                <p>Hello, <span class="aboutPageEffects">I am Margaret Daet </span> &#8212; a front-end developer currently based in the Philippines. I am passionate about <span class="aboutPageEffects"> building a website </span> that helps people to showcase 
                their products or services. I am determined to learn new things and improve my programming skills. I carefully managed my work 
                and meet projects ahead of the schedule.</p>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <p>Currently, I'm digging in into Android Studio, Laravel 8, and 
                    Firebase for our capstone project.</p>
            </div>
        </div>

        <div  class="row">
            <div class="col-lg-12">
                <p>I'm also good at paper works like in <span class="aboutPageEffects"> RnD (Research and Development) </span> and <span class="aboutPageEffects">System Development Life Cycle (SDLC)</span>. Before working with code, I usually draw a <span class="aboutPageEffects"> prototype </span> in the paper to visualize the interface and content of the project. This will help to save time in the development stage.</p>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <p>When I am not coding (in my spare time), you can find me attending webinars, and trying new food recipes.</p>
            </div>
        </div>
    </div>

    <div class="container py-5 aboutSkills">
        <div class="row">
            <div class="col-lg-3 text-center">
                <p class="aboutPageSkillsEffects">Here are my Skills</p>
                <div id="barChart" class="barchart my-3"></div>
            </div>
        </div>
    </div>

    <section class="py-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-12 aboutCollab text-center">
                    <p>Let's Collaborate.</p>
                    <p><a href="{{ url('/visitor') }}"> Give me a ring!</a></p>
                </div>
                <div class="col-lg-12 aboutSocialAccount pt-5">
                    <ul>
                        <li>
                            <a target="_blank" href="{{ url('https://github.com/r-margaret') }}">   
                                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24" id="gitcolor"><path d="M12 2c5.514 0 10 4.486 10 10s-4.486 10-10 10-10-4.486-10-10 4.486-10 10-10zm0-2c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm0 6c-3.313 0-6 2.686-6 6 0 2.651 1.719 4.9 4.104 5.693.3.056.396-.13.396-.289v-1.117c-1.669.363-2.017-.707-2.017-.707-.272-.693-.666-.878-.666-.878-.544-.373.041-.365.041-.365.603.042.92.619.92.619.535.917 1.403.652 1.746.499.054-.388.209-.652.381-.802-1.333-.152-2.733-.667-2.733-2.965 0-.655.234-1.19.618-1.61-.062-.153-.268-.764.058-1.59 0 0 .504-.161 1.65.615.479-.133.992-.199 1.502-.202.51.002 1.023.069 1.503.202 1.146-.776 1.648-.615 1.648-.615.327.826.121 1.437.06 1.588.385.42.617.955.617 1.61 0 2.305-1.404 2.812-2.74 2.96.216.186.412.551.412 1.111v1.646c0 .16.096.347.4.288 2.383-.793 4.1-3.041 4.1-5.691 0-3.314-2.687-6-6-6z"/></svg>                 
                            </a>
                        </li>
                        <li>
                            <a target="_blank" href="{{ url('https://www.linkedin.com/in/daetmargaret') }}">                    
                                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 24 24" id="linkedincolor"><path d="M12 2c5.514 0 10 4.486 10 10s-4.486 10-10 10-10-4.486-10-10 4.486-10 10-10zm0-2c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm-2 8c0 .557-.447 1.008-1 1.008s-1-.45-1-1.008c0-.557.447-1.008 1-1.008s1 .452 1 1.008zm0 2h-2v6h2v-6zm3 0h-2v6h2v-2.861c0-1.722 2.002-1.881 2.002 0v2.861h1.998v-3.359c0-3.284-3.128-3.164-4-1.548v-1.093z"/></svg>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
</body>
</html>
