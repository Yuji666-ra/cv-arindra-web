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
            <h2 class="text-secondary mb-5">Price List Photo Event </h2>
        </div>

        <section id="pricing" class="pricing">
            <div class="container" data-aos="fade-up">

                <div class="row justify-content-center">

                    <div class="col-lg-3 col-md-6 " data-aos="fade-up" data-aos-delay="100">
                        <div class="box  featured">
                            <h3 style="background-color: #4CAF50; color: white">Bronze</h3>
                            <h4 style="color: #4CAF50;"><sup>Rp</sup>1.5-2.5 JT<span></span></h4>
                            <ul>
                                <li>1 Photographer</li>
                                <li>Standard Photo Documentation</li>
                                <li>Upload to Google Drive</li>
                            </ul>

                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="200">
                        <div class="box featured">
                            <h3 style="background-color: #FC9236; color: white">Silver</h3>
                            <h4 style="color: #FC9236;"><sup>Rp</sup>3-5 JT<span></span></h4>
                            <ul>
                                <li>2 Photographers</li>
                                <li>Standard Photo Documentation</li>
                                <li>Candid Photo Unlimited</li>
                                <li>15s Album</li>
                                <li>Upload to Google Drive + DVD</li>
                            </ul>
                        </div>
                    </div>


                    <div class="col-lg-3 col-md-6 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="400">
                        <div class="box  featured">
                            <h3>Gold</h3>
                            <h4><sup>Rp</sup>7.5-10 JT<span></span></h4>
                            <ul>
                                <li>3 Photographers</li>
                                <li>Standard Photo Documentation</li>
                                <li>Candid Photo Unlimited</li>
                                <li>Aerial Photo</li>
                                <li>30s Album</li>
                                <li>Photo Frame</li>
                                <li>Edited Photos</li>
                                <li>Upload to Google Drive + DVD + USB</li>
                            </ul>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Pricing Section -->

    </section>
@endsection
