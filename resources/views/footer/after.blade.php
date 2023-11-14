@extends('layouts.layouts')

<style>
    /* ====================Styling untuk navbar =========================*/
    #logo-img {
        filter: invert(1);
        /* Membalikkan warna ikon menjadi putih saat latar belakang berwarna gelap */
    }

    /* Atur warna latar belakang dan bayangan untuk navbar saat di-scroll */
    .scroll-nav-active {
        background-color: white;
        /* Ganti warna latar belakang navbar saat di-scroll */
        box-shadow: 1px 1px 11px -1px rgba(1, 1, 1, 0.08);
    }

    /* Tambahkan class scroll-nav-active pada navbar saat di-scroll */
    .navbar-nav .nav-item a[href="#home"] {
        color:
            black
            /* Warna font untuk elemen Home */
        ;
    }

    .navbar-nav .nav-item a[href="#contact"] {
        color:
            black
            /* Warna font untuk elemen Home */
        ;
    }

    .navbar-nav .nav-item a[href="#pricing"] {
        color:
            black
            /* Warna font untuk elemen Home */
        ;
    }

    .scroll-nav-active .navbar-nav .nav-item .nav-link,
    .scroll-nav-active .navbar-nav .nav-item2 {
        color:

            /* Warna font default saat di-scroll */
        ;
    }

    /* Hapus CSS untuk warna font di luar kondisi scroll */
    .navbar-nav .nav-item .nav-link,
    .navbar-nav .nav-item2 {
        color: black;
        /* Warna font default tanpa di-scroll */
    }

    /* Atur warna font pada dropdown menu saat di-scroll */
    .scroll-nav-active .navbar-nav .dropdown-menu .dropdown-item {
        color:
            /* Warna font default saat di-scroll */
        ;
    }

    /* Hapus CSS untuk warna font di luar kondisi scroll pada dropdown menu */
    .navbar-nav .dropdown-menu .dropdown-item {
        color: black;
        /* Warna font default tanpa di-scroll */
    }

    /*memperbesar tulisan view*/
    .larger-font {
        font-size: 14px;
    }
</style>

@section('content')
    <section id="detail" style="margin-top: 40px" class="py-5">
    </section>
    <section id="services" class="services section-bg">
        <div class="container">

            <div class="section-title">
                <h2 data-aos="fw-bold mb-5 text-secondary"> Tutorial Adobe After Effect</h2>
            </div>

            <div class="row justify-content-center">
                <div class="row py-2" data-aos="zoom-in">
                    <div class="col-lg-4">
                        <div class="card border-0">
                            <img src="{{ asset('assets/images/tutorial/after/tutorial1.jpg') }}" class="img-fluid mb-3"
                                height="350" width="350" alt="">
                            <div class="konten-project-center">
                                <h5 class="fw-bold mb-3">Looping Clone Effect dari Agung Hapsah</h5>
                                <a href="https://youtu.be/tbAeKmJwr-g" class="larger-font"><i class="bi bi-arrow-right"></i>
                                    View</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card border-0">
                            <img src="{{ asset('assets/images/tutorial/after/tutorial2.jpg') }}" class="img-fluid mb-3"
                                height="350" width="350" alt="">
                            <div class="konten-project">
                                <h5 class="fw-bold mb-3">CARA EDIT SHARINGAN EYE / MATA</h5>
                                <a href="https://youtu.be/m9-mkw-XpLo" class="larger-font"><i class="bi bi-arrow-right"></i>
                                    View</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card border-0">
                            <img src="{{ asset('assets/images/tutorial/after/tutorial3.jpg') }}" class="img-fluid mb-3"
                                height="350" width="350" alt="">
                            <div class="konten-project">
                                <h5 class="fw-bold mb-3">CAPTAIN MARVEL ENERGY EFFECT</h5>
                                <a href="https://youtu.be/CI0LZFJvCoo" class="larger-font"><i class="bi bi-arrow-right"></i>
                                    View</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row py-2" data-aos="zoom-in">
                    <div class="col-lg-4">
                        <div class="card border-0">
                            <img src="{{ asset('assets/images/tutorial/after/tutorial4.jpg') }}" class="img-fluid mb-3"
                                height="350" width="350" alt="">
                            <div class="konten-project-center">
                                <h5 class="fw-bold mb-3">Tutorial AUDIO SPECTRUM seperti</h5>
                                <a href="https://youtu.be/2XyndAJZTR8" class="larger-font"><i class="bi bi-arrow-right"></i>
                                    View</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card border-0">
                            <img src="{{ asset('assets/images/tutorial/after/tutorial5.jpg') }}" class="img-fluid mb-3"
                                height="350" width="350" alt="">
                            <div class="konten-project">
                                <h5 class="fw-bold mb-3">Hologram Effect dari Agung Hapsah</h5>
                                <a href="https://youtu.be/5lcBaIHkmWo" class="larger-font"><i class="bi bi-arrow-right"></i>
                                    View</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card border-0">
                            <img src="{{ asset('assets/images/tutorial/after/tutorial6.jpg') }}" class="img-fluid mb-3"
                                height="350" width="350" alt="">
                            <div class="konten-project">
                                <h5 class="fw-bold mb-3">Tutorial PORTAL DOCTOR STRANGE</h5>
                                <a href="https://youtu.be/CkBW9vz9tXs" class="larger-font"><i class="bi bi-arrow-right"></i>
                                    View</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row py-2" data-aos="zoom-in">
                <div class="col-lg-4">
                    <div class="card border-0">
                        <img src="{{ asset('assets/images/tutorial/after/tutorial4.jpg') }}" class="img-fluid mb-3"
                            height="350" width="350" alt="">
                        <div class="konten-project-center">
                            <h5 class="fw-bold mb-3">Tutorial AUDIO SPECTRUM seperti</h5>
                            <a href="https://youtu.be/2XyndAJZTR8" class="larger-font"><i class="bi bi-arrow-right"></i>
                                View</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card border-0">
                        <img src="{{ asset('assets/images/tutorial/after/tutorial5.jpg') }}" class="img-fluid mb-3"
                            height="350" width="350" alt="">
                        <div class="konten-project">
                            <h5 class="fw-bold mb-3">Hologram Effect dari Agung Hapsah</h5>
                            <a href="https://youtu.be/5lcBaIHkmWo" class="larger-font"><i class="bi bi-arrow-right"></i>
                                View</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card border-0">
                        <img src="{{ asset('assets/images/tutorial/after/tutorial6.jpg') }}" class="img-fluid mb-3"
                            height="350" width="350" alt="">
                        <div class="konten-project">
                            <h5 class="fw-bold mb-3">Tutorial PORTAL DOCTOR STRANGE</h5>
                            <a href="https://youtu.be/CkBW9vz9tXs" class="larger-font"><i class="bi bi-arrow-right"></i>
                                View</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Services Section -->
@endsection
