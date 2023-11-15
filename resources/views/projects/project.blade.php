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

    /*Cover Jumbotron*/
    .cover {
        height: 50vh;
        /* 100% tinggi dari viewport */
        background-color: #37517E;
        /* Ganti dengan warna yang diinginkan */
        color: white;
        /* Warna teks agar terlihat jelas di atas warna latar belakang */
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        text-align: center;
    }

    .cover h1 {
        font-size: 3rem;
        margin-bottom: 20px;
    }

    .cover p {
        font-size: 1.5rem;
    }
</style>
@section('content')
    <section id="detail" style="margin-top: 12px" class="py-5">
        <div class="cover">
            <h1>Project CV.Arindra Production</h1>
            <p>Berikut adalah Project yang telah kami lakukan.</p>
        </div>

        <div class="container col-xxl-8">


            <div class="row py-5" data-aos="zoom-in">
                <div class="col-lg-4">
                    <div class="card border-0">
                        <img src="{{ asset('assets/images/projects/project-1.jpeg') }}" class="img-fluid mb-3"
                            height="350" width="350" alt="">
                        <div class="konten-project">
                            <p class="mb-3 text-secondary">8/08/2023</p>
                            <h5 class="fw-bold mb-3">DBL Junior East Java Series 2023</h5>
                            <p class="text-secondary">CV. Arindra Production di berikan kesempatan untuk
                                mendokumentasikan salah satu acara tahunan bergengsi yaitu DBL Junior East Java Series 2023
                                dengan player tim dari SMP Muhammadiyah 5 Surabaya, hasilnya cukup memuaskan dan client
                                sangat puas dengan pelayanan kami.
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card border-0">
                        <img src="{{ asset('assets/images/projects/project-2.jpeg') }}" class="img-fluid mb-3"
                            height="350" width="350" alt="">
                        <div class="konten-project">
                            <p class="mb-3 text-secondary">1/03/2023</p>
                            <h5 class="fw-bold mb-3">Hitzbul Wathan Camp 2022</h5>
                            <p class="text-secondary">CV. Arindra Production di berikan kesempatan untuk
                                mendokumentasikan salah satu acara tahunan bergengsi yaitu Hitzbul Wathan Camp 2022
                                dari SMP Muhammadiyah 5 Surabaya, hasilnya cukup memuaskan dan client sangat puas
                                dengan pelayanan kami.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card border-0">
                        <img src="{{ asset('assets/images/projects/project-3.jpeg') }}" class="img-fluid mb-3"
                            height="350" width="350" alt="">
                        <div class="konten-project">
                            <p class="mb-3 text-secondary">10/01/2023</p>
                            <h5 class="fw-bold mb-3">Spemma Esport Competition</h5>
                            <p class="text-secondary">CV. Arindra Production di berikan kesempatan untuk menghandle dan
                                mengorganize salah satu acara bergengsi yaitu Spemma Esport Competition SMP Muhammadiyah 5
                                Surabaya,
                                hasilnya cukup memuaskan dan client sangat puas dengan pelayanan kami. </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row py-5" data-aos="zoom-in">
                <div class="col-lg-4">
                    <div class="card border-0">
                        <img src="{{ asset('assets/images/projects/project-4.jpg') }}" class="img-fluid mb-3" height="350"
                            width="350" alt="">
                        <div class="konten-project">
                            <p class="mb-3 text-secondary">10/01/2023</p>
                            <h5 class="fw-bold mb-3">Sosialisasi Ketentuan Perbankan OJK</h5>
                            <p class="text-secondary">CV. Arindra Production di berikan kesempatan untuk menghandle salah
                                satu
                                acara bergengsi bersama Otoritas Jasa Keuangan Surabaya yaitu Sosialisasi Ketentuan
                                Perbankan.
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card border-0">
                        <img src="{{ asset('assets/images/projects/project-5.jpg') }}" class="img-fluid mb-3" height="350"
                            width="350" alt="">
                        <div class="konten-project">
                            <p class="mb-3 text-secondary">02/11/2022</p>
                            <h5 class="fw-bold mb-3">DBL Junior Exhibition 2022</h5>
                            <p class="text-secondary">CV. Arindra Production di berikan kesempatan untuk mendokumentasikan
                                salah satu acara tahunan bergengsi yaitu DBL Junior Exhibition 2022 dengan player tim dari
                                SMP Muhammadiyah 5 Surabaya, hasilnya cukup memuaskan dan client sangat puas dengan
                                pelayanan kami.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card border-0">
                        <img src="{{ asset('assets/images/projects/project-6.jpg') }}" class="img-fluid mb-3" height="350"
                            width="350" alt="">
                        <div class="konten-project">
                            <p class="mb-3 text-secondary">01/11/2022</p>
                            <h5 class="fw-bold mb-3">Vaganza Of Seventeen Spemma Esport</h5>
                            <p class="text-secondary">CV. Arindra Production di berikan kesempatan untuk menghandle salah
                                satu acara
                                tahunan bergengsi yaitu 17 agustus 2022 SMP Muhammadiyah 5 Surabaya, hasilnya cukup
                                memuaskan dan
                                client sangat puas dengan pelayanan kami.
                            </p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row py-5" data-aos="zoom-in">
                <div class="col-lg-4">
                    <div class="card border-0">
                        <img src="{{ asset('assets/images/projects/project-7.jpg') }}" class="img-fluid mb-3" height="350"
                            width="350" alt="">
                        <div class="konten-project">
                            <p class="mb-3 text-secondary">24/9/2023</p>
                            <h5 class="fw-bold mb-3">Talkshow Aerospace Career Bamantara Eepisat</h5>
                            <p class="text-secondary">CV. Arindra Production di berikan kesempatan untuk menghandle salah
                                satu
                                acara bergengsi bersama OCV. Arindra Production di percaya untuk menghandle live streaming
                                acara
                                Talkshow Aerospace Career Bamantara Eepisat dengan bintang tamu Vina Mulyana yang begitu
                                meriah,
                                hasilnya cukup memuaskan dan sangat puas dengan pelayanan kami.
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card border-0">
                        <img src="{{ asset('assets/images/projects/project-8.jpg') }}" class="img-fluid mb-3" height="350"
                            width="350" alt="">
                        <div class="konten-project">
                            <p class="mb-3 text-secondary">03/9/2022</p>
                            <h5 class="fw-bold mb-3">Jawa Timur Fun Race FPV Drone</h5>
                            <p class="text-secondary">CV. Arindra Production di percaya untuk menghandle live streaming
                                acara
                                Jawa Timur Fun Race FPV Drone yang begitu meriah, hasilnya cukup memuaskan dan sangat puas
                                dengan pelayanan kami.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card border-0">
                        <img src="{{ asset('assets/images/projects/project-9.jpg') }}" class="img-fluid mb-3"
                            height="350" width="350" alt="">
                        <div class="konten-project">
                            <p class="mb-3 text-secondary">28/8/2022</p>
                            <h5 class="fw-bold mb-3">IT Telkom Surabaya Esport Competition</h5>
                            <p class="text-secondary">CV. Arindra Production di percaya untuk menghandle live streaming
                                acara IT Telkom Surabaya
                                Esport Competition yang begitu meriah, hasilnya cukup memuaskan dan pihak client sangat puas
                                dengan pelayanan kami.
                            </p>
                        </div>
                    </div>
                </div>
            </div>


    </section>
@endsection
