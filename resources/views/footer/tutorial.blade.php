@extends('layouts.layouts')

@section('content')
    <section id="detail" style="margin-top: 40px" class="py-5">
    </section>
    <section id="services" class="services section-bg">
        <div class="container">

            <div class="section-title">
                <h2 data-aos="fade-in">Tutorial Videography & Photography</h2>
                <p data-aos="fade-in">List tutorial videography terlengkap bahasa indonesia dari dasar</p>
            </div>

            <div class="row justify-content-center">

                <div class="icon-box">
                    <div class="icon"><i class=""></i>
                        <img src="{{ asset('assets/images/tutorial/adobe-premiere.png') }}" alt="adobe-premiere"
                            height="100" width="100">
                    </div>
                    <h4>Adobe Premiere</h4>
                    <p>Adobe Premiere adalah perangkat lunak pengeditan video non-linier yang memungkinkan penggunanya untuk
                        mengedit, mengatur, dan mengolah video secara profesional.
                        Dengan adopsi sistem non-linier, pengguna dapat memodifikasi video secara bebas tanpa mengganggu
                        bagian lainnya.
                    </p>
                    <a href="{{ route('footer/premiere') }}"><i class="bi bi-arrow-right"></i> Learn More</a>
                </div>
                <div class="icon-box">
                    <div class="icon"><i class=""></i>
                        <img src="{{ asset('assets/images/tutorial/final-cut-pro.jpg') }}" alt="adobe-premiere"
                            height="100" width="200">
                    </div>
                    <h4>Final Cut Pro</h4>
                    <p>Final Cut Pro adalah software pengedit video yang sangat bagus untuk pasca-produksi bagi pengguna
                        Mac. Software ini memungkinkan
                        Anda untuk mengedit video dan audio, melakukan gradasi warna tingkat lanjut, membuat dan mengedit
                        closed captions, dan masih banyak lagi.</p>
                    <a href="{{ route('footer/final') }}"><i class="bi bi-arrow-right"></i> Learn More</a>
                </div>
                <div class="icon-box">
                    <div class="icon"><i class=""></i>
                        <img src="{{ asset('assets/images/tutorial/adobe-after-effect.png') }}" alt="adobe-premiere"
                            height="100" width="200">
                    </div>
                    <h4>Adobe After Effect</h4>
                    <p>Adobe After Effects adalah perangkat lunak profesional pengolah motion graphic (grafik gerak digital)
                        untuk editing konten video serta efek visual.
                        Software inilah yang secara luas dan Handal digunakan untuk kebutuhan pembuatan video, konten
                        multimedia, film, hingga web. Kemampuan utama dari
                        software ini yaitu dapat mengubah objek menjadi animasi. </p>
                    <a href="{{ route('footer/after') }}"><i class="bi bi-arrow-right"></i> Learn More</a>
                </div>
                <div class="icon-box">
                    <div class="icon"><i class=""></i>
                        <img src="{{ asset('assets/images/tutorial/davinci.jpg') }}" alt="adobe-premiere" height="100"
                            width="200">
                    </div>
                    <h4>Davinci Resolve</h4>
                    <p>Davinci resolve merupakan aplikasi editing video yang sangat populer dan banyak digunakan di berbagai
                        editor video proffesional. Selain dapat
                        digunakan secara gratis aplikasi ini juga powerfull dalam melakukan berbagai tugas seperti editing,
                        motion graphic, sound composition, color
                        correction dan color grading</p>
                    <a href="{{ route('footer/davinci') }}"><i class="bi bi-arrow-right"></i> Learn More</a>
                </div>
                <div class="icon-box">
                    <div class="icon"><i class=""></i>
                        <img src="{{ asset('assets/images/tutorial/lightroom.png') }}" alt="adobe-premiere" height="100"
                            width="200">
                    </div>
                    <h4>Adobe Lightroom</h4>
                    <p>Adobe Lightroom adalah salah satu software pengedit foto paling populer untuk fotografer.
                        Adobe Lightroom menawarkan teknologi edit foto yang canggih. Ada banyak elemen foto yang dapat
                        kamu sesuaikan dengan aplikasi ini.</p>
                    <a href="{{ route('footer/lightroom') }}"><i class="bi bi-arrow-right"></i> Learn More</a>
                </div>
                <div class="icon-box">
                    <div class="icon"><i class=""></i>
                        <img src="{{ asset('assets/images/tutorial/photoshop.png') }}" alt="adobe-premiere" height="100"
                            width="200">
                    </div>
                    <h4>Adobe Photoshop</h4>
                    <p>Adobe Photoshop adalah perangkat lunak editor citra buatan Adobe
                        System yang di khususkan untuk pengeditan foto/gambar dan pembuatan efek. Hasil gambar yang
                        diolah dengan Adobe Photoshop ini banyak digunakan mulai dari periklanan, fotografi, website
                        hingga multimedia pembelajaran.</p>
                    <a href="{{ route('footer/photoshop') }}"><i class="bi bi-arrow-right"></i> Learn More</a>
                </div>
                <div class="icon-box">
                    <div class="icon"><i class=""></i>
                        <img src="{{ asset('assets/images/tutorial/kinemaster.png') }}" alt="adobe-premiere" height="100"
                            width="200">
                    </div>
                    <h4>Kinemaster</h4>
                    <p>Kinemaster adalah sebuah aplikasi smartphone yang khusus digunakan untuk keperluan editing video,
                        aplikasi ini dikembangkan oleh Nex Streaming sebuah perusahaan yang bergerak dalam bidang
                        pengembangan
                        perangkat lunak multimedia yang berkantor pusat di Seoul ( Korea ).</p>
                    <a href="{{ route('footer/master') }}"><i class="bi bi-arrow-right"></i> Learn More</a>
                </div>
            </div>


    </section><!-- End Services Section -->
@endsection
