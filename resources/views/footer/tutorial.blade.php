@extends('layouts.layouts')

@section('content')
    <section id="detail" style="margin-top: 40px" class="py-5">
    </section>
    <section id="services" class="services section-bg">
        <div class="container">

          <div class="section-title">
            <h2 data-aos="fade-in">Tutorial</h2>
            <p data-aos="fade-in">Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
          </div>

          <div class="row justify-content-center">
            <div class="col-md-6 d-flex" data-aos="zoom-in">
              <div class="card">
                <div class="card-img-content-center">
                  <img src="{{ asset('assets/images/tutorial/adobe-premiere.png') }}" alt="adobe-premiere" height="150"
                  width="150">
                </div>
                <div class="card-body">
                  <h5 class="card-title"><a href="">Temporibus laudantium</a></h5>
                  <p class="card-text">Lorem ipsum dolor sit amet, consectetur elit  sed do eiusmod tempor ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat</p>
                  <div class="read-more"><a href="{{route('footer/premiere')}}"><i class="bi bi-arrow-right"></i> Read More</a></div>
                </div>
              </div>
            </div>
            <div class="col-md-6 d-flex" data-aos="zoom-in">
                <div class="card">
                  <div class="card-img justify-content-center">
                    <img src="{{ asset('assets/images/tutorial/final-cut-pro.jpg') }}" alt="final-cut-pro" height="200"
                    width="300">
                  </div>
                  <div class="card-body">
                    <h5 class="card-title"><a href="">Temporibus laudantium</a></h5>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat</p>
                    <div class="read-more"><a href="{{route('footer/final')}}"><i class="bi bi-arrow-right"></i> Read More</a></div>
                  </div>
                </div>
              </div>
              <div class="col-md-6 d-flex" data-aos="zoom-in">
                <div class="card">
                  <div class="card-img justify-content-center">
                    <img src="{{ asset('assets/images/tutorial/adobe-after-effect.png') }}" alt="after-effect" height="200"
                    width="200">
                  </div>
                  <div class="card-body">
                    <h5 class="card-title"><a href="">Temporibus laudantium</a></h5>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat</p>
                    <div class="read-more"><a href="{{route('footer/after')}}"><i class="bi bi-arrow-right"></i> Read More</a></div>
                  </div>
                </div>
              </div>
              <div class="col-md-6 d-flex" data-aos="zoom-in">
                <div class="card">
                  <div class="card-img justify-content-center">
                    <img src="{{ asset('assets/images/tutorial/davinci.jpg') }}" alt="davinci" height="200"
                    width="200">
                  </div>
                  <div class="card-body">
                    <h5 class="card-title"><a href="">Temporibus laudantium</a></h5>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat</p>
                    <div class="read-more"><a href="{{route('footer/davinci')}}"><i class="bi bi-arrow-right"></i> Read More</a></div>
                  </div>
                </div>
              </div>
              <div class="col-md-6 d-flex" data-aos="zoom-in">
                <div class="card">
                  <div class="card-img justify-content-center">
                    <img src="{{ asset('assets/images/tutorial/lightroom.png') }}" alt="lightroom" height="200"
                    width="200">
                  </div>
                  <div class="card-body">
                    <h5 class="card-title"><a href="">Temporibus laudantium</a></h5>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat</p>
                    <div class="read-more"><a href="{{route('footer/lightroom')}}"><i class="bi bi-arrow-right"></i> Read More</a></div>
                  </div>
                </div>
              </div>
              <div class="col-md-6 d-flex" data-aos="zoom-in">
                <div class="card">
                  <div class="card-img justify-content-center">
                    <img src="{{ asset('assets/images/tutorial/photoshop.png') }}" alt="photoshop" height="200"
                    width="200">
                  </div>
                  <div class="card-body">
                    <h5 class="card-title"><a href="">Temporibus laudantium</a></h5>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat</p>
                    <div class="read-more"><a href="{{route('footer/photoshop')}}"><i class="bi bi-arrow-right"></i> Read More</a></div>
                  </div>
                </div>
              </div>
              <div class="col-md-6 d-flex" data-aos="zoom-in">
                <div class="card">
                  <div class="card-img justify-content-center">
                    <img src="{{ asset('assets/images/tutorial/kinemaster.png') }}" alt="kinemaster" height="200"
                    width="200">
                  </div>
                  <div class="card-body">
                    <h5 class="card-title"><a href="">Temporibus laudantium</a></h5>
                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur elit, sed do eiusmod tempor ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat</p>
                    <div class="read-more"><a href="{{route('footer/master')}}"><i class="bi bi-arrow-right"></i> Read More</a></div>
                  </div>
                </div>
              </div>

        </div>
      </section><!-- End Services Section -->
@endsection
