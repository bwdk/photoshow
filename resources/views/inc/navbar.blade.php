<nav class="navbar navbar-expand-md navbar-dark bg-dark">

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault"
        aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <!-- En utilisant Request::route au lieu du chemin de la page-->
                <a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="/">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ Request::route()->getName() === 'album-create' ? 'active' : '' }}"
                    href="{{ route('album-create') }}">Create Album</a>
            </li>
        </ul>

    </div>
</nav>