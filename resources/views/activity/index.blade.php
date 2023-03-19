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

    {{-- <section class="company-mission section-sm bg-gray">
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
    </section> <!-- End section --> --}}

    <section class="about-shot-info section-sm">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mt-20">
                    <h2 class="mb-3" style="text-align: right">Budidaya <br> Lele</h2>
                    <p style="text-align: right">Cultivation of Catfish</p>
                </div>
                <div class="col-lg-6 mt-4 mt-lg-0">
                    <img loading="lazy" class="img-fluid" src="{{ asset('main/images/pict/Picture19.jpg') }}" alt="">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 mt-4 mt-lg-0">
                    <img loading="lazy" class="img-fluid" src="{{ asset('main/images/pict/Picture9.jpg') }}" alt="">
                </div>
                <div class="col-lg-6 mt-20">
                    <h2 class="mb-3">Budidaya Ayam Petelur <br> dan Pedaging</h2>
                    <p>Cultivation of layer and broiler chickens</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 mt-20">
                    <h2 class="mb-3" style="text-align: right">Budidaya Sapi Dengan Pemanfaatan <br>Pakan Kering dan Pakan Basah </h2>
                    <p style="text-align: right">Cattle cultivation with the use of dry and wet feed</p>
                </div>
                <div class="col-lg-6 mt-4 mt-lg-0">
                    <img loading="lazy" class="img-fluid" src="{{ asset('main/images/pict/Picture26.png') }}" alt="">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 mt-4 mt-lg-0">
                    <img loading="lazy" class="img-fluid" src="{{ asset('main/images/pict/Picture27.jpg') }}" alt="">
                </div>
                <div class="col-lg-6 mt-20">
                    <h2 class="mb-3">Pengembangan Pertanian Kebun Sayur <br> Dengan Memanfaatkan Kompos Dari Sampah Peternakan</h2>
                    <p>Development Of Vegetable Garden Agriculture By Utilizing Compost From Livestock Waste</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 mt-20">
                    <h2 class="mb-3" style="text-align: right">Budidaya BSF <br>Sebagai Pengurai Sampah Organic</h2>
                    <p style="text-align: right">Cultivation Of BSF As A Decomposer Of Organic Waste</p>
                </div>
                <div class="col-lg-6 mt-4 mt-lg-0">
                    <img loading="lazy" class="img-fluid" src="{{ asset('main/images/pict/Picture31.jpg') }}" alt="">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 mt-4 mt-lg-0">
                    <img loading="lazy" class="img-fluid" src="{{ asset('main/images/pict/Picture35.jpg') }}" alt="">
                </div>
                <div class="col-lg-6 mt-20">
                    <h2 class="mb-3">Pengelolaan Sampah  <br>Organic Menggunakan BSF</h2>
                    <p>Management Of Organic Waste Using BSF </p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 mt-20">
                    <h2 class="mb-3" style="text-align: right">Budidaya Lebah <br>Sebagai Pollinator</h2>
                    <p style="text-align: right">Cultivation Of Bee As Pollinator </p>
                </div>
                <div class="col-lg-6 mt-4 mt-lg-0">
                    <img loading="lazy" class="img-fluid" src="{{ asset('main/images/pict/Picture39.jpg') }}" alt="">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 mt-4 mt-lg-0">
                    <img loading="lazy" class="img-fluid" src="{{ asset('main/images/pict/Picture26.jpg') }}" alt="">
                </div>
                <div class="col-lg-6 mt-20">
                    <h2 class="mb-3">Pemanfaatan Energi Bersih (Biogas) Dari Kotoran Sapi <br>dan Sisa Kotoran Ayam Untuk Kebutuhan Dapur Basecamp Lavandaia</h2>
                    <p>Utilization Of Clean Energy (Biogas) From Cow Manure And Chicken Manure For The Kitchen Needs Of Davandaya House</p>
                </div>
            </div>
        </div>
    </section>
@endsection
