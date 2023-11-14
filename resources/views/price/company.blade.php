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
    <section id="detail" style="margin-top: 100px" class="py-5">

        <div class="header-projecr text-center">
            <h2 class="text-secondary mb-5">Price List Company Profile </h2>
        </div>

        <section id="pricing" class="pricing">
            <div class="container" data-aos="fade-up">

                <div class="row justify-content-center">

                    <div class="col-lg-3 col-md-6 " data-aos="fade-up" data-aos-delay="100">
                        <div class="box  featured">
                            <h3 style="background-color: #4CAF50; color: white">Bronze</h3>
                            <h4 style="color: #4CAF50;"><sup>Rp</sup>10-19 JT<span></span></h4>
                            <ul>
                                <li>1 Day Production</li>
                                <li>3-5 Minute Duration</li>
                                <li>Basic Camera Movement (Tripod & Slider)</li>
                                <li>Aerial Footage</li>
                                <li>Only 1 Revision</li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="200">
                        <div class="box featured">
                            <h3 style="background-color: #FC9236; color: white">Silver</h3>
                            <h4 style="color: #FC9236;"><sup>Rp</sup>25-45 JT<span></span></h4>
                            <ul>
                                <li>2-3 Days Production</li>
                                <li>1 Main Video 4-8 Minutes Duration</li>
                                <li>3 Additional Videos Of 1 Minute</li>
                                <li>Spontaneous Interview</li>
                                <li>1 Talent</li>
                                <li>Basic Camera Movement (Tripod,Slider,Stabilizer)</li>
                                <li>Aerial Footage</li>
                                <li>DVD Masters and Flash Disk</li>
                                <li>2 Revision</li>
                            </ul>

                        </div>
                    </div>


                    <div class="col-lg-3 col-md-6 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="400">
                        <div class="box  featured">
                            <h3>Gold</h3>
                            <h4><sup>Rp</sup>50-100 JT<span></span></h4>
                            <ul>
                                <li>3-5 days production</li>
                                <li>1 Main Video 5-15 Minutes Duration</li>
                                <li>5 Additional Videos of 1 Minutes Duration</li>
                                <li>Scripted Interview</li>
                                <li>Voice Over</li>
                                <li>2-5 Talent</li>
                                <li>Director of Photography</li>
                                <li>Producers</li>
                                <li>Basic Camera Movement (tripod,slider,Stabilizer)</li>
                                <li>Aerial Shot</li>
                                <li>Dvd Master (5), Flasdisk (3), HDD External</li>
                                <li>Professional Photography</li>
                                <li>Photo & Video Behind The Scene</li>
                                <li>3 Revision</li>
                            </ul>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Pricing Section -->

    </section>
@endsection
