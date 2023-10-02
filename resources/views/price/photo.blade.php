@extends('layouts.layouts')

@section('content')
    <section id="detail" style="margin-top: 100px" class="py-5">

            <div class="header-projecr text-center">
                <h2 class="fw-bold">Price List Photo Event </h2>
            </div>

    <section id="pricing" class="pricing">
        <div class="container" data-aos="fade-up">

          <div class="row justify-content-center">

            <div class="col-lg-3 col-md-6 " data-aos="fade-up" data-aos-delay="100">
              <div  class="box  featured">
                <h3 style="background-color: #4CAF50; color: white" >Bronze</h3>
                <h4 style="color: #4CAF50;"><sup>Rp</sup>1.5-2.5 JT<span></span></h4>
                <ul>
                  <li>1 Photographer</li>
                  <li>Standard Photo Documentation</li>
                  <li>Upload to Google Drive</li>
                </ul>
                <div class="btn-wrap">
                  <a href="#" class="btn-buy" style="background-color: #4CAF50; color: white">Buy Now</a>
                </div>
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
                <div class="btn-wrap">
                  <a style="background-color: #FC9236; color: white" href="#" class="btn-buy">Buy Now</a>
                </div>
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
                <div class="btn-wrap">
                  <a href="#" class="btn-buy">Buy Now</a>
                </div>
              </div>
            </div>

          </div>

        </div>
      </section><!-- End Pricing Section -->

    </section>
@endsection
