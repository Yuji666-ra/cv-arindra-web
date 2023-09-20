<!--Navbar-->
<nav
    class="navbar navbar-expand-lg navbar-dark py-3 fixed-top {{ Request::segment(1) == '' ? '' : 'bg-white shadow text-dark' }}">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="{{ asset('assets/icons/logo.png') }}" height="60" width="60" alt=>
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="#">About Us</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Portofolio
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Video Event</a></li>
                        <li><a class="dropdown-item" href="#">Documenter Film</a></li>
                        <li><a class="dropdown-item" href="#">Photo Event</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="#">Pricelist</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        More
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('career')}}">Karir</a></li>
                        <li><a class="dropdown-item" href="#">Clients</a></li>
                    </ul>
                </li>
            </ul>
            <div class="d-flex ml-auto">
                <button class="btn btn-primary" href="{{ route('contact')}}">Contact Us</button>
            </div>
        </div>
    </div>
</nav>
