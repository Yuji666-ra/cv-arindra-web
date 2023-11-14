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
</style>

@section('content')
    <section id="detail" style="margin-top: 40px" class="py-5">
    </section>
    <section id="services" class="services section-bg">
        <div class="container">

            <div class="section-title">
                <h2 data-aos="fw-bold mb-3"> Tutorial Adobe Premiere</h2>
            </div>

            <div class="row justify-content-center">
                <div class="row py-2" data-aos="zoom-in">
                    <div class="col-lg-4">
                        <div class="card border-0">
                            <img src="{{ asset('assets/images/tutorial/premiere/tutorial1.jpg') }}" class="img-fluid mb-3"
                                height="350" width="350" alt="">
                            <div class="konten-project-center">
                                <h5 class="fw-bold mb-3">Membuat Kelap-kelip Pada Video</h5>
                                <a href="https://youtu.be/WM9-uROYG9s"><i class="bi bi-arrow-right"></i> View</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card border-0">
                            <img src="{{ asset('assets/images/tutorial/premiere/tutorial2.jpg') }}" class="img-fluid mb-3"
                                height="350" width="350" alt="">
                            <div class="konten-project">
                                <h5 class="fw-bold mb-3">Cara Mengedit Boomerang Drone</h5>
                                <a href="https://youtu.be/1g6zOFexrN0"><i class="bi bi-arrow-right"></i> View</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card border-0">
                            <img src="{{ asset('assets/images/tutorial/premiere/tutorial3.jpg') }}" class="img-fluid mb-3"
                                height="350" width="350" alt="">
                            <div class="konten-project">
                                <h5 class="fw-bold mb-3">Cara Edit Speed Ramp Transition</h5>
                                <a href="https://youtu.be/WM9-uROYG9s"><i class="bi bi-arrow-right"></i> View</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row py-2" data-aos="zoom-in">
                    <div class="col-lg-4">
                        <div class="card border-0">
                            <img src="{{ asset('assets/images/tutorial/premiere/tutorial4.jpg') }}" class="img-fluid mb-3"
                                height="350" width="350" alt="">
                            <div class="konten-project-center">
                                <h5 class="fw-bold mb-3">Membuat Kelap-kelip Pada Video</h5>
                                <a href="https://youtu.be/s7KDHzu7ohI"><i class="bi bi-arrow-right"></i> View</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card border-0">
                            <img src="{{ asset('assets/images/tutorial/premiere/tutorial5.jpg') }}" class="img-fluid mb-3"
                                height="350" width="350" alt="">
                            <div class="konten-project">
                                <h5 class="fw-bold mb-3">Cara Mengedit Boomerang Drone</h5>
                                <a href="https://youtu.be/LyBKNNo9-Rc"><i class="bi bi-arrow-right"></i> View</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card border-0">
                            <img src="{{ asset('assets/images/tutorial/premiere/tutorial6.jpg') }}" class="img-fluid mb-3"
                                height="350" width="350" alt="">
                            <div class="konten-project">
                                <h5 class="fw-bold mb-3">Cara Edit Speed Ramp Transition</h5>
                                <a href="https://youtu.be/mCCmHIyq7YA"><i class="bi bi-arrow-right"></i> View</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row py-2" data-aos="zoom-in">
                    <div class="col-lg-4">
                        <div class="card border-0">
                            <img src="{{ asset('assets/images/tutorial/premiere/tutorial7.jpg') }}" class="img-fluid mb-3"
                                height="350" width="350" alt="">
                            <div class="konten-project-center">
                                <h5 class="fw-bold mb-3">Tutorial Cara Edit Video 4K Dengan Adobe Premiere Di PC Kentang
                                </h5>
                                <a href="https://youtu.be/xn9xOemZzds"><i class="bi bi-arrow-right"></i> View</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card border-0">
                            <img src="{{ asset('assets/images/tutorial/premiere/tutorial8.jpg') }}" class="img-fluid mb-3"
                                height="350" width="350" alt="">
                            <div class="konten-project">
                                <h5 class="fw-bold mb-3">Cara Transisi Masking Di Adobe Premiere Pro Seperti Agung Hapsah
                                </h5>
                                <a href="https://youtu.be/MmH1w2iU784"><i class="bi bi-arrow-right"></i> View</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card border-0">
                            <img src="{{ asset('assets/images/tutorial/premiere/tutorial9.jpg') }}" class="img-fluid mb-3"
                                height="350" width="350" alt="">
                            <div class="konten-project">
                                <h5 class="fw-bold mb-3">Tutorial Teal and orange di Adobe Premier Menggunakan Adobe
                                    Lightroom Indonesia</h5>
                                <a href="https://youtu.be/PqAvDaPbNhI"><i class="bi bi-arrow-right"></i> View</a>
                            </div>
                        </div>
                    </div>
                </div>



            </div>
    </section><!-- End Services Section -->
@endsection
