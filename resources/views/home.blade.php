@extends('layouts.home')

@section('content')
<div class="container">
    
    <section id="intro" class="pt-4 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 welcomePage">
                    <p><i>&lt;h2&gt;</i></p>
                    <div class="intro">
                        <span>Hi,<br>I'm Margaret Daet </sp>
                    </div>
                    <p><i>&lt;/h2&gt;</i></p>

                    <p><i>&lt;p&gt;</i></p>
                    <span class="subtitle">Front-End Developer </span>
                    <p class="pt-3"><i>&lt;/p&gt;</i></p>
                </div>
            </div>
        </div>

        <div class="vertical">
            <div class="account">
                <a target="_blank" href="{{ url('https://github.com/r-margaret') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 24 24" id="sidegit"><path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/></svg>
                    <span>Github</span>
                </a>
                <a target="_blank" href="{{ url('https://www.linkedin.com/in/daetmargaret') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 24 24" id="sidelinkedin"><path d="M12 0c-6.627 0-12 5.373-12 12s5.373 12 12 12 12-5.373 12-12-5.373-12-12-12zm-2 16h-2v-6h2v6zm-1-6.891c-.607 0-1.1-.496-1.1-1.109 0-.612.492-1.109 1.1-1.109s1.1.497 1.1 1.109c0 .613-.493 1.109-1.1 1.109zm8 6.891h-1.998v-2.861c0-1.881-2.002-1.722-2.002 0v2.861h-2v-6h2v1.093c.872-1.616 4-1.736 4 1.548v3.359z"/></svg>
                    <span>LinkedIn</span>
                </a>
            </div>
        </div>

        <div class="scrolldown">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </section>

    <section id="projects" class="py-5">
        <div class="container pt-3">
            <div class="row">
                <div class="col-lg-12 project-heading">
                    <span>Projects</span>
                    <p>Building projects with code.</p>
                    <div class="project-content">
                        <div class="project-box">
                            <div class="project-img">
                                <a target="_blank" href="{{ url('/portfolioProject-2018') }}">
                                    <img src="{{ url('img/myWebsite.png') }}" alt="Website">
                                </a>
                            </div>
                            <div class="project-text">
                                <span>HTML/CSS Website</span>
                                <p>2018 / Portfolio Project</p>
                            </div>
                        </div>

                        <div class="project-box">
                            <div class="project-img">
                                <a target="_blank" href="{{ url('/android') }}">
                                    <img src="{{ url('img/androidProject.jpg') }}" alt="Website">
                                </a>
                            </div>
                            <div class="project-text">
                                <span>Android Studio</span>
                                <p>2020 / Menu App Project</p>
                            </div>
                        </div>

                        <div class="project-box">
                            <div class="project-img">
                                <a target="_blank" href="{{ url('/restaurant') }}">
                                    <img src="{{ url('img/dishWebsite.png') }}" alt="Website">
                                </a>
                            </div>
                            <div class="project-text">
                                <span>HTML/CSS/JavaScript Website</span>
                                <p>2019 / Restaurant Project</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="about" class="py-5">
        <div class="container pt-3 pb-2">
            <div class="row">
                <div class="col-lg-12 me">
                    <h2 class="text-uppercase">Your team is incomplete without Margaret.</h2>
                    <img src="{{ url('img/me.png') }}" alt="Margaret Photo">
                    <p><small>Develop projects with great user experience.</small></p>
                    <span>Almost 4 years of experience working with different projects at school. I can take your ideas to life. Take me in your team, and I will thrive to bring your project to the next level.
                        <span class="homeTextEffects">
                            <a href="{{ url('/about') }}">Know me more.</a>
                        </span>
                            <br><br>A few projects are up. Allow yourself to visit and take note that those are my project at school.
                        <span class="homeTextEffects">
                            <a href="{{ url('#contact') }}">Drop a ring!</a>
                        </span>
                    </span>
                </div>
                <div class="col-lg-12 aboutSocialAccount">
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

    <section id="contact" class="py-5">
        <div class="container py-5">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p>NEED A DEVELOPER?</p><br>
                    <a href="{{ url('/visitor') }}">
                        <span>Let's Talk! &#8594;</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

  
    <footer>
        <div class="container pt-5">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <hr>
                    <small>Designed & Built by <span class="footerMyName">Margaret Daet</span></small>
                </div>
            </div>
        </div>
    </footer>

</div>
@endsection
