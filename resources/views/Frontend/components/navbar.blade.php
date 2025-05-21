<nav class="navbar navbar-expand-lg navbar-dark bg-transparent position-absolute top-0 start-0 w-100 px-3 py-5" style="z-index: 10;" data-aos="fade-down" data-aos-duration="1000">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img src="{{ asset('images/logo.svg') }}" alt="{{ config('app.name') }}" height="56px">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar" aria-controls="mainNavbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="mainNavbar">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link text-uppercase" href="#denne-menu">Denné Menu</a></li>
                <li class="nav-item"><a class="nav-link text-uppercase" href="#jedalny-listok">Jedálny Lístok</a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link  text-uppercase" href="#catering-oslavy">
                        Catering a Oslavy
                    </a>

                </li>
                <li class="nav-item"><a class="nav-link text-uppercase" href="#langose">Langoše</a></li>
                <li class="nav-item"><a class="nav-link text-uppercase" href="#kontakt">Kontakt</a></li>
            </ul>
        </div>
    </div>
</nav>
