@extends('layouts.layouts')

@section('content')
    <section id="detail" style="margin-top: 100px" class="py-5">
    </section>

<!-- ======= Contact Section ======= -->
<section id="contact" class="contact">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Contact</h2>
        <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
      </div>

      <div class="row">

        <div class="col-lg-5 d-flex align-items-stretch">
          <div class="info">
            <div class="address">
              <i class="bi bi-geo-alt"></i>
              <h4>Location:</h4>
              <p>Jl. Bendul Merisi Selatan III No.102, Bendul Merisi, Kec. Wonocolo, Surabaya, Jawa Timur 60239, Indonesia</p>
            </div>

            <div class="email">
              <i class="bi bi-envelope"></i>
              <h4>Email:</h4>
              <p>info@arindraproduction.co.id</p>
            </div>

            <div class="phone">
              <i class="bi bi-phone"></i>
              <h4>Call:</h4>
              <p>0812-5220-0899</p>
            </div>

            <iframe src="<iframe src="<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7914.767003881438!2d112.744803!3d-7.310742!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fb0e881ce1e5%3A0x9eb06cd487b3ebf3!2sCV.%20Arindra%20Production%20Surabaya!5e0!3m2!1sen!2sus!4v1696869721938!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>

        </div>

        <div class="container">
            @if (session('message'))
                <div class="alert">
                    {{ session('message') }}
                </div>
            @endif

        <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
          <form action="forms/contact.php" method="post" role="form" class="php-email-form">
            <div class="row">
              <div class="form-group col-md-6">
                <label for="name">Your Name</label>
                <input type="text" name="name" class="form-control" id="name" required>
              </div>
              <div class="form-group col-md-6">
                <label for="name">Your Email</label>
                <input type="email" class="form-control" name="email" id="email" required>
              </div>
            </div>
            <div class="form-group">
              <label for="name">Subject</label>
              <input type="text" class="form-control" name="subject" id="subject" required>
            </div>
            <div class="form-group">
              <label for="name">Message</label>
              <textarea class="form-control" name="message" rows="10" required></textarea>
            </div>
            <div class="my-3">
              <div class="loading">Loading</div>
              <div class="error-message"></div>
              <div class="sent-message">Your message has been sent. Thank you!</div>
            </div>
            <div class="text-center"><button type="submit">Send Message</button></div>
          </form>
        </div>

      </div>

    </div>
  </section><!-- End Contact Section -->
  @endsection
