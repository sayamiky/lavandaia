@extends('layout.main')
@section('content')
    <div class="hero-slider">
        <div class="slider-item th-fullpage hero-area"
            style="background-image: url({{ asset('main/images/slider/Picture1.jpg') }});">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h1 data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".1">LAVANDAIA <br>
                            DHARMA BALI</h1>
                        <p data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".5">Pembersihan Micro-Macro
                            cosmos
                            dengang dengan penuh cinta kasih
                            <br> demi menjaga hubungan sesuai dengan Tri Hita Karana dengan dasar
                            Tatwam Asi <br>
                        </p>
                        <a data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".8" class="btn btn-main"
                            href="{{ route('activities.index') }}">Explore Us</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="slider-item th-fullpage hero-area"
            style="background-image: url({{ asset('main/images/slider/Picture6.jpg') }});">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h1 data-duration-in=".3" data-animation-in="fadeInDown" data-delay-in=".1">Kenapa Hadir
                            <br> Lavandaia Dharma Bali?
                        </h1>
                        <p data-duration-in=".3" data-animation-in="fadeInDown" data-delay-in=".5"> Membantu mempengaruhi
                            satu
                            organisme dengan organisme
                            <br> lainnya memiliki keterhubungan yang hidup.
                        </p>
                        <a data-duration-in=".3" data-animation-in="fadeInDown" data-delay-in=".8" class="btn btn-main"
                            href="{{ route('programs.index') }}">Explore Us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Start About Section-->
    <section class="service-2 section">
        <div class="container">
            <div class="row justify-content-center">

                <div class="col-lg-6">
                    <!-- section title -->
                    <div class="title text-center">
                        <h2>Apa itu
                            Lavandaia Dharma Bali?</h2>
                        <p>Lavandaia merupakan sebuah kata yang memuat unsur;
                            Cahaya Cinta Kehidupan.
                            sebuah komponen
                            inti dan menjadi akar untuk menjadi titik tuju untuk
                            sebuah ruang penyimpanan untuk
                            menyimpan sumber daya. </p>
                        <div class="border"></div>
                    </div>
                    <!-- /section title -->
                </div>
            </div>
            <div class="row">

                <div class="col-md-4 text-center d-none d-md-block">
                    <img loading="lazy" src="" class="img-fluid inline-block" alt="">
                </div>
            </div>
        </div>
    </section> <!-- End section -->

    <!--Start About Section-->
    <section class="about-2 section" id="about">
        <div class="container">
            <div class="row justify-content-center">
                <!-- section title -->
                <div class="col-lg-6">
                    <div class="title text-center">
                        <h2>Apa Program
                            Lavandaia Dharma Bali?</h2>
                        <p>Ada 5 Program Kegiatan dari Lavandaia Dharma Bali yaitu: </p>
                        <div class="border"></div>
                    </div>
                </div>
                <!-- /section title -->
            </div>

            <div class="row">

                <div class="col-md-6 mb-4 mb-md-0">
                    <img loading="lazy" src="{{ asset('main/images/about/Picture22.jpg') }}" class="img-fluid"
                        alt="">
                </div>
                <div class="col-md-6">
                    <ul class="checklist">
                        <li>Peternakan.</li>
                        <li>Pertanian.</li>
                        <li>Edukasi.</li>
                        <li>Pengelolaan Sampah.</li>
                        <li>Pasar Komunitas Lavandaia.</li>
                    </ul>
                    <a href="{{ route('abouts.index') }}" class="btn btn-main mt-20">Learn More</a>
                </div>
            </div> <!-- End row -->
        </div> <!-- End container -->
    </section> <!-- End section -->

    <!-- Start Call To Action -->
    <section class="call-to-action section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-8 text-center">
                    <h2>Dimana Lavandaia Dharma Bali?</h2>
                    <p>Basecamp Lavandaia
                        Br. Srijati, Desa Sibang Gede,
                        Abiansemal, Badung-Bali</p>
                    <a href="{{ route('contacts.index') }}" class="btn btn-main">Contact Us</a>
                </div>
            </div> <!-- End row -->
        </div> <!-- End container -->
    </section> <!-- End section -->

    <!--Start Blog Section-->
    <section class="blog" id="blog">
        <div class="container">
            <div class="row justify-content-center">
                <!-- section title -->
                <div class="col-xl-6 col-lg-8">
                    <div class="title text-center ">
                        <h2> Kegiatan di Lavandaia <span class="color"></span></h2>
                        <div class="border"></div>
                        <p></p>
                    </div>
                </div>
                <!-- /section title -->
            </div>

            <div class="row">
                <!-- single blog post -->
                <article class="col-lg-4 col-md-6">
                    <div class="post-item">
                        <div class="media-wrapper">
                            <img loading="lazy" src="{{ asset('main/images/blog/Picture24.jpg') }}"
                                alt="amazing caves coverimage" class="img-fluid">
                        </div>

                        <div class="content">
                            <h3><a href="#">Ternak Ayam</a></h3>
                            <p>Hasil dari ternak ayam yang sudah siap di panen</p>
                            <a class="btn btn-main" href="#">Read more</a>
                        </div>
                </article>
                <!-- /single blog post -->

                <!-- single blog post -->
                <article class="col-lg-4 col-md-6">
                    <div class="post-item">
                        <div class="media-wrapper">
                            <img loading="lazy" src="{{ asset('main/images/blog/Picture6.jpg') }}"
                                alt="amazing caves coverimage" class="img-fluid">
                        </div>

                        <div class="content">
                            <h3><a href="#">Pembuatan Pupuk</a></h3>
                            <p>Proses pembuatan pupuk organik menggunakan serabut kelapa</p>
                            <a class="btn btn-main" href="#">Read more</a>
                        </div>
                </article>
                <!-- end single blog post -->

                <!-- single blog post -->
                <article class="col-lg-4 col-md-6">
                    <div class="post-item">
                        <div class="media-wrapper">
                            <img loading="lazy" src="{{ asset('main/images/blog/Picture32.jpg') }}"
                                alt="amazing caves coverimage" class="img-fluid">
                        </div>

                        <div class="content">
                            <h3><a href="#">Ternak Lebah</a></h3>
                            <p>Ternak lebah bisa dipakai berbagai macam maanfaat untuk manusia maupun untuk tumbuh -
                                tumbuhan di sekitar</p>
                            <a class="btn btn-main" href="#">Read more</a>
                        </div>
                </article>
                <!-- end single blog post -->
            </div> <!-- end row -->
        </div> <!-- end container -->
    </section> <!-- end section -->
@endsection
