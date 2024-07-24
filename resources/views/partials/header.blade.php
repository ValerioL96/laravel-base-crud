<header>
    <nav class="navbar navbar-expand-lg bg-body-tertiary bg-dark border-bottom border-body" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                Animali della Riserva
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link {{Route::currentRouteName()==='pages.home' ? 'active' : ''}}"
                        aria-current="page" href="{{route('pages.home')}}">
                        Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{Route::currentRouteName()==='pages.create' ? 'active' : ''}}"
                        aria-current="page" href="{{route('pages.create')}}">
                        Added new animal
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>
