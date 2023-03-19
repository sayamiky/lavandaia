@extends('layout.main')
@section('content')
    <section class="single-page-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Our Avtivity</h2>
                    <ol class="breadcrumb header-bradcrumb justify-content-center">
                        <li class="breadcrumb-item active" aria-current="page">Kegiatan Kami</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="company-mission section-sm bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h3 style="text-align: justify;">Apa Misi
                        Lavandaia Dharma Bali?</h3>
                    <p style="text-align: justify;">1. Membangun kemandirian akar rumput yang berpegang pada Tri Hita Karana
                        dan berlandaskan Tatwam Asi.</p>
                    <p style="text-align: justify;">2. Menjadi ruang belajar dan berbagi sumber daya dan potensi berpegang
                        pada Tri Hita Karana dan berlandaskan Tatwam Asi.</p>
                    <!-- <img loading="lazy" src="images/company/company-image-2.jpg" alt="" class="img-fluid mt-30"> -->
                </div>
                <div class="col-md-6 mt-5 mt-md-0">
                    <h3 style="text-align: justify;"><i>What is The Mission of
                            Lavandaia Dharma Bali?</i></h3>
                    <p style="text-align: justify;"><i>1. Build grassroots independence that adheres
                            to Tri Hita Karana and is based on Tatwam Asi.</i></p>
                    <p style="text-align: justify;"><i>2. Become a learning space and share resources in adherence to Tri
                            Hita Karana
                            and based on Tatwam Asi.</i></p>
                    <!-- <img loading="lazy" src="images/company/company-image-3.jpg" alt="" class="img-fluid mt-30"> -->
                </div>
            </div>
        </div>
    </section>

    <section class="call-to-action-2 section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2>Semua program Lavandaia Dharma Bali diaplikasikan dalam skala kecil dalam bentuk demonstrasi plot di
                        Basecamp Lavandaia</h2>
                </div>
            </div> <!-- End row -->
        </div> <!-- End container -->
    </section> <!-- End section -->

    <section class="company-mission section-sm">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-8">
                    <div class="col-md-12 text-center">
                        <h2>Sneak Peak Gallery</h2>
                        <br>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="company-gallery">
                        <img loading="lazy" src="{{ asset('main/images/company/Picture35.jpg') }}" alt="">
                        <img loading="lazy" src="{{ asset('main/images/company/Picture8.jpg') }}" alt="">
                        <img loading="lazy" src="{{ asset('main/images/company/Picture15.jpg') }}" alt="">
                        <img loading="lazy" src="{{ asset('main/images/company/Picture17.jpg') }}" alt="">
                        <img loading="lazy" src="{{ asset('main/images/company/Picture20.jpg') }}" alt="">
                        <img loading="lazy" src="{{ asset('main/images/company/Picture21.jpg') }}" alt="">
                        <img loading="lazy" src="{{ asset('main/images/company/Picture40.jpg') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
