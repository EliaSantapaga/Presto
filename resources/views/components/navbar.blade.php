<nav class="navbar navbar-expand-xxl fixed-top navbar-dark nav nav-scrolled mx-3" aria-label="Offcanvas navbar small">

    <div class="container nav-container rounded-pill" id="nav-container">

        <a class="navbar-brand mx-3 presto" href="{{ route('homepage') }}">
            <span class="text-uppercase text-white fs-1 fst-italic fw-bold ff-orbitron">Pre<i
                    class="fas fa-bolt fs-1 text-white logo neon-logo"></i>to</span>
        </a>
        
        <button class="navbar-toggler mx-3" type="button" data-bs-toggle="offcanvas" data-bs-target="#navbar"
            aria-controls="navbar">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="navbar" aria-labelledby="navbarLabel">

            <div class="offcanvas-header">

                <a class="navbar-brand mx-3 presto" href="{{ route('homepage') }}">
                    <span class="text-uppercase text-white fs-1 fst-italic fw-bold ff-orbitron neon">Pre<i
                            class="fa-solid fa-bolt fs-1 text-white logo neon"></i>to</span>
                </a>

                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                    aria-label="Close"></button>
            </div>

            <div class="offcanvas-body menu justify-content-center">
                <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">

                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="{{ route('homepage') }}">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('about') }}">Chi siamo</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('services') }}">Servizi</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="{{ route('work.with.us') }}">Lavora con noi</a>
                    </li>                    

                    <li class="nav-item">
                        <a class="nav-link" href="http://www.gamesintime.altervista.org/giochi-del-mese"
                            target="_blank">GiT</a>
                    </li>

                    {{-- <li class="nav-item">
                        <a class="nav-link" href="{{ route('contacts') }}">Contatti</a>
                    </li> --}}

                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">Registrati</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">Login</a>
                        </li>
                    @else
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('blog') }}">Catalogo</a>
                        </li>

                        @if (Auth::user()->is_writer)
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('article.create') }}">Autore</a>
                            </li>
                        @endif

                        @if (Auth::user()->is_revisor)
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('dashboard.revisor') }}">
                                    Revisore

                                    @if (\App\Models\Article::revisorArticlesCount() > 0)
                                        <span class="position-relative ms-1 me-4">
                                            <span
                                                class="translate-middle top-50 position-absolute badge rounded-pill box-shadow-pink bg-danger ms-3">
                                                {{ \App\Models\Article::revisorArticlesCount() }}
                                            </span>
                                        </span>
                                    @endif

                                </a>
                            </li>
                        @endif

                        @if (Auth::user()->is_admin)
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('dashboard.admin') }}">
                                    Admin

                                    @if (\App\Models\User::adminRequestsCount() > 0)
                                        <span class="position-relative ms-1 me-4">
                                            <span
                                                class="translate-middle top-50 position-absolute badge rounded-pill box-shadow-pink bg-danger ms-3">
                                                {{ \App\Models\User::adminRequestsCount() }}
                                            </span>
                                        </span>
                                    @endif
                                </a>
                            </li>
                        @endif


                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('logout') }}"
                                onclick="event.preventDefault(); document.querySelector('#logout').submit()">Logout</a>

                            <form action="{{ route('logout') }}" method="POST" id="logout">
                                @csrf
                            </form>
                        </li>

                        {{-- <a class="nav-link" href="#">
                            {{ Auth::user()->name }}

                        {{-- SEGNALATORE NOTIFICHE UTENTE --}}
                            {{-- @if (\App\Models\User::adminRequestsCount() > 0 || \App\Models\Article::revisorArticlesCount() > 0)
                                <span class="position-relative me-4">
                                    <span
                                        class="translate-middle top-50 position-absolute rounded-pill box-shadow-pink bg-danger ms-3 badge-user">
                                    </span>
                                </span>
                            @endif

                        </a> --}}
                    </ul>
                @endguest

                <!-- Button trigger modal -->
                <button type="button" class="btn bg-trans me-2 text-light" data-bs-toggle="modal"
                    data-bs-target="#exampleModal">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </button>

            </div>
        </div>
    </div>
</nav>

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog rounded-pill bg-transparent">
        <div class="modal-content rounded-pill px-3 bg-transparent border-0">

            <div class="modal-body px-3">
                <form class="d-flex" role="search" action="{{ route('search') }}">
                    <input class="form-control me-3 rounded-pill box-shadow-pink text-center" type="search"
                        placeholder="Cerca..." aria-label="Search" name="search">
                    <button type="button" class="btn bg-trans me-2" data-bs-toggle="modal"
                        data-bs-target="#exampleModal">
                        <i class="fa-solid fa-magnifying-glass text-shadow-pink fs-4 text-white"></i>
                    </button>
                    <button type="button" class="btn fs-4" data-bs-dismiss="modal" aria-label="Close"><i
                            class="fa-solid fa-xmark text-shadow-pink text-white"></i></button>
                </form>
            </div>
        </div>
    </div>
</div>