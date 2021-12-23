<nav class="navbar navbar-expand-lg navbar-light p-2">
    <div class="container">
        <a class="navbar-brand ms-3" href="{{ url('/') }}">
            <img src="{{ url('img/m_icon.png')}}"> argaret
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item pt-1 px-1">
                    <a class="nav-link" href="{{ url('/#about') }}">About</a>
                </li>

                <li class="nav-item pt-1 px-1">
                    <a class="nav-link" href="{{ url('/#projects') }}">Projects</a>
                </li>

                <li class="nav-item pt-1 px-1">
                    <a class="nav-link" href="{{ url('/#contact') }}">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>