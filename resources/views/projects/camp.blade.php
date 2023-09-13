@extends('layouts.layouts')

@section('content')
    <!--Project-->
    <section id="project" class="py-5" style="margin-top:100px">
        <div class="container py-5">

            <div class="header-projecr text-center">
                <h2 class="fw-bold">Hitzbul Wathan Camp 2022 </h2>
            </div>

            <div class="row py-5 justify-content-center" data-aos="zoom-in">
                <div class="col-lg-4">
                    <div class="card border-0">
                        <img src="{{ asset('assets/images/project-2.jpeg') }}" class="img-fluid mb-3" height="350"
                            width="350" alt="">
                        <div class="konten-project">
                            <p class="mb-3 text-secondary">1/03/2023</p>
                            <p class="text-secondary">CV. Arindra Production di berikan kesempatan untuk
                                mendokumentasikan salah satu acara tahunan bergengsi yaitu Hitzbul Wathan Camp 2022 </p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection
