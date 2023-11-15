<!--Navbar-->
<nav
    class="navbar navbar-expand-lg navbar-dark py-3 fixed-top justify-content-end {{ Request::segment(1) == '' ? '' : 'bg-white shadow text-dark' }}">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img id="logo-img" src="{{ asset('assets/icons/logo.png') }}" height="60" width="60" alt=>
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse d-flex" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#home">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="#contact">About Us</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Portofolio
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#project">Video Event</a></li>
                        <li><a class="dropdown-item" href="#project">Documenter Film</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#portfolio">Photo Event</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="#pricing">Pricelist</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        More
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Showreel</a></li>
                        <li><a class="dropdown-item" href="{{ route('form-career') }}">Karir</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Clients</a></li>
                    </ul>
                </li>
                <li class="nav-item mr-auto">
                    <a class="nav-link active" href="{{ route('contact-us') }}">
                        <button class="btn btn-primary">Contact Us</button>
                    </a>

                </li>
            </ul>
        </div>
    </div>
</nav>
