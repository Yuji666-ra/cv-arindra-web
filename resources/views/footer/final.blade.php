@extends('layouts.layouts')

@section('content')
    <section id="detail" style="margin-top: 40px" class="py-5">
    </section>
    <section id="services" class="services section-bg">
        <div class="container">

            <div class="section-title">
                <h2 data-aos="fw-bold mb-3"> Tutorial Final Cut Pro</h2>
            </div>

            <div class="row justify-content-center">
                <div class="row py-2" data-aos="zoom-in">
                    <div class="col-lg-4">
                        <div class="card border-0">
                            <img src="{{ asset('assets/images/tutorial/final/tutorial1.jpg') }}" class="img-fluid mb-3"
                                height="350" width="350" alt="">
                            <div class="konten-project-center">
                                <h5 class="fw-bold mb-3">Cara Mudah Mengedit Video di Final Cut Pro</h5>
                                <a href="https://youtu.be/WM9-uROYG9s"><i class="bi bi-arrow-right"></i> View</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card border-0">
                            <img src="{{ asset('assets/images/tutorial/final/tutorial2.jpg') }}" class="img-fluid mb-3"
                                height="350" width="350" alt="">
                            <div class="konten-project">
                                <h5 class="fw-bold mb-3">Belajar Final Cut Pro X Bahasa Indonesia (Basic)</h5>
                                <a href="https://youtu.be/IZ1cIQol-6g"><i class="bi bi-arrow-right"></i> View</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card border-0">
                            <img src="{{ asset('assets/images/tutorial/final/tutorial3.jpg') }}" class="img-fluid mb-3"
                                height="350" width="350" alt="">
                            <div class="konten-project">
                                <h5 class="fw-bold mb-3">Smooth Transitions</h5>
                                <a href="https://youtu.be/WM9-uROYG9s"><i class="bi bi-arrow-right"></i> View</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row py-2" data-aos="zoom-in">
                    <div class="col-lg-4">
                        <div class="card border-0">
                            <img src="{{ asset('assets/images/tutorial/final/tutorial4.jpg') }}" class="img-fluid mb-3"
                                height="350" width="350" alt="">
                            <div class="konten-project-center">
                                <h5 class="fw-bold mb-3">Tutorial Door Open Transition</h5>
                                <a href="https://youtu.be/NMKLr8TGp9E"><i class="bi bi-arrow-right"></i> View</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card border-0">
                            <img src="{{ asset('assets/images/tutorial/final/tutorial5.jpg') }}" class="img-fluid mb-3"
                                height="350" width="350" alt="">
                            <div class="konten-project">
                                <h5 class="fw-bold mb-3">Cara Mengedit Boomerang Drone</h5>
                                <a href="https://youtu.be/xJRzccyF9bE"><i class="bi bi-arrow-right"></i> View</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card border-0">
                            <img src="{{ asset('assets/images/tutorial/final/tutorial6.jpg') }}" class="img-fluid mb-3"
                                height="350" width="350" alt="">
                            <div class="konten-project">
                                <h5 class="fw-bold mb-3">Cara Edit Speed Ramp Transition</h5>
                                <a href="https://youtu.be/118lk7V-3Zo"><i class="bi bi-arrow-right"></i> View</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section><!-- End Services Section -->
@endsection
