@extends('layout.main')
@section('content')
    <section class="single-page-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Gallery Us</h2>
                    <ol class="breadcrumb header-bradcrumb justify-content-center">
                        <li class="breadcrumb-item active" aria-current="page">Galeri Kami</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="portfolio section-sm" id="portfolio">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-12">
                            <div class="filtr-container">
                                <div class="col-md-3 col-sm-6 col-xs-6 filtr-item " data-category="mix, design">
                                    <div class="portfolio-block">
                                        <img class="img-fluid" src="{{ asset('main/images/gallery/Picture6.jpg') }}"
                                            alt="">
                                        <div class="caption">
                                            <a class="search-icon" href="{{ asset('main/images/gallery/Picture6.jpg') }}"
                                                data-lightbox="image-1">
                                                <i class="tf-ion-ios-search-strong"></i>
                                            </a>
                                            <h4><a href="#">See Details</a></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-6 filtr-item " data-category="mix, design, ios">
                                    <div class="portfolio-block">
                                        <img class="img-fluid" src="{{ asset('main/images/gallery/Picture21.jpg') }}"
                                            alt="">
                                        <div class="caption">
                                            <a class="search-icon" href="{{ asset('main/images/gallery/Picture21.jpg') }}"
                                                data-lightbox="image-1">
                                                <i class="tf-ion-ios-search-strong"></i>
                                            </a>
                                            <h4><a href="#">See Details</a></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-6 filtr-item "
                                    data-category="mix, photography, development">
                                    <div class="portfolio-block">
                                        <img class="img-fluid" src="{{ asset('main/images/gallery/Picture35.jpg') }}"
                                            alt="">
                                        <div class="caption">
                                            <a class="search-icon" href="{{ asset('main/images/gallery/Picture35.jpg') }}"
                                                data-lightbox="image-1">
                                                <i class="tf-ion-ios-search-strong"></i>
                                            </a>
                                            <h4><a href="#">See Details</a></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-6 filtr-item " data-category="mix, photography, ios">
                                    <div class="portfolio-block">
                                        <img class="img-fluid" src="{{ asset('main/images/gallery/Picture39.jpg') }}"
                                            alt="">
                                        <div class="caption">
                                            <a class="search-icon" href="{{ asset('main/images/gallery/Picture39.jpg') }}"
                                                data-lightbox="image-1">
                                                <i class="tf-ion-ios-search-strong"></i>
                                            </a>
                                            <h4><a href="#">See Details</a></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-6 filtr-item " data-category="mix, design">
                                    <div class="portfolio-block">
                                        <img class="img-fluid" src="{{ asset('main/images/gallery/Picture13.jpg') }}"
                                            alt="">
                                        <div class="caption">
                                            <a class="search-icon" href="{{ asset('main/images/gallery/Picture13.jpg') }}"
                                                data-lightbox="image-1">
                                                <i class="tf-ion-ios-search-strong"></i>
                                            </a>
                                            <h4><a href="#">See Details</a></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-6 filtr-item "
                                    data-category="mix, design, development">
                                    <div class="portfolio-block">
                                        <img class="img-fluid" src="{{ asset('main/images/gallery/Picture22.jpg') }}"
                                            alt="">
                                        <div class="caption">
                                            <a class="search-icon" href="{{ asset('main/images/gallery/Picture22.jpg') }}"
                                                data-lightbox="image-1">
                                                <i class="tf-ion-ios-search-strong"></i>
                                            </a>
                                            <h4><a href="#">See Details</a></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-6 filtr-item " data-category="mix, photography">
                                    <div class="portfolio-block">
                                        <img class="img-fluid" src="{{ asset('main/images/gallery/Picture19.jpg') }}"
                                            alt="">
                                        <div class="caption">
                                            <a class="search-icon" href="{{ asset('main/images/gallery/Picture19.jpg') }}"
                                                data-lightbox="image-1">
                                                <i class="tf-ion-ios-search-strong"></i>
                                            </a>
                                            <h4><a href="#">See Details</a></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-6 col-xs-6 filtr-item "
                                    data-category="mix, design, development">
                                    <div class="portfolio-block">
                                        <img class="img-fluid" src="{{ asset('main/images/gallery/Picture8.jpg') }}"
                                            alt="">
                                        <div class="caption">
                                            <a class="search-icon" href="{{ asset('main/images/gallery/Picture8.jpg') }}"
                                                data-lightbox="image-1">
                                                <i class="tf-ion-ios-search-strong"></i>
                                            </a>
                                            <h4><a href="#">See Details</a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> <!-- /end col-lg-12 -->
            </div> <!-- end row -->
        </div> <!-- end container -->
    </section> <!-- End section -->
@endsection
