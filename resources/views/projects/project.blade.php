@extends('layouts.layouts')

@section('content')
    <section id="detail" style="margin-top: 100px" class="py-5">
        <div class="container col-xxl-8">

            <div class="header-projecr text-center">
                <h2 class="fw-bold">Project CV. Arindra Production </h2>
            </div>

            <div class="row py-5" data-aos="zoom-in">
                <div class="col-lg-4">
                    <div class="card border-0">
                        <img src="{{ asset('assets/images/project-1.jpeg') }}" class="img-fluid mb-3" height="350"
                            width="350" alt="">
                        <div class="konten-project">
                            <p class="mb-3 text-secondary">8/08/2023</p>
                            <h5 class="fw-bold mb-3">DBL Junior East Java Series 2023</h5>
                            <p class="text-secondary">CV. Arindra Production di berikan kesempatan untuk
                                mendokumentasikan salah satu acara tahunan
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card border-0">
                        <img src="{{ asset('assets/images/project-2.jpeg') }}" class="img-fluid mb-3" height="350"
                            width="350" alt="">
                        <div class="konten-project">
                            <p class="mb-3 text-secondary">1/03/2023</p>
                            <h5 class="fw-bold mb-3">Hitzbul Wathan Camp 2022</h5>
                            <p class="text-secondary">CV. Arindra Production di berikan kesempatan untuk
                                mendokumentasikan salah satu acara tahunan bergengsi yaitu Hitzbul Wathan Camp 2022 </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card border-0">
                        <img src="{{ asset('assets/images/project-3.jpeg') }}" class="img-fluid mb-3" height="350"
                            width="350" alt="">
                        <div class="konten-project">
                            <p class="mb-3 text-secondary">10/01/2023</p>
                            <h5 class="fw-bold mb-3">Spemma Esport Competition</h5>
                            <p class="text-secondary">CV. Arindra Production di berikan kesempatan untuk menghandle dan
                                mengorganize salah satu acara bergengsi yaitu Spemma Esport Competition </p>
                        </div>
                    </div>
                </div>
            </div>

    </section>
@endsection
