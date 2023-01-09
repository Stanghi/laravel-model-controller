<nav class="navbar navbar-expand-lg bg-light pb-0">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class=" {{ Route::currentRouteName() === 'home' ? 'active' : '' }}">
                    <a class="nav-link " aria-current="page" href="{{ route('home') }}">Movies</a>
                </li>

                <li class=" {{ Route::currentRouteName() === 'about' ? 'active' : 'nav-item' }}">
                    <a class="nav-link" href="{{ route('about') }}">About</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
