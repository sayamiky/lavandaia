@extends('layout.main')
@section('content')
    <section class="single-page-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Contact Us</h2>
                    <ol class="breadcrumb header-bradcrumb justify-content-center">
                        <li class="breadcrumb-item active" aria-current="page">Hubungi Kami</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <!--Start Contact Us
     =========================================== -->
    <section class="contact-us" id="contact">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-12 col-lg-8">
                    <div class="title text-center">
                        <h2>Get In Touch</h2>
                    </div>
                </div>
                <!-- section title -->
                <div class="col-xl-6 col-lg-8">
                    <div class="title text-center">
                        <p>Perlu menghubungi kami? Isi formulir dengan pertanyaan Anda atau temukan email departemen
                            yang ingin Anda hubungi di bawah ini.</p>
                        <div class="border"></div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-8">
                    <div class="title text-center">
                        <p>Need to get in touch with us? Either fill out the form with your inquiry or find the
                            department email you'd like to contact below.</p>
                        <div class="border"></div>
                    </div>
                </div>
                <!-- /section title -->
            </div>
            <div class="row">
                <!-- Contact Details -->
                <div class="contact-details col-md-6 ">
                    <h3 class="mb-3">Contact Details</h3>
                    <p>Terima kasih sudah mampir! Jika kamu memiliki pertanyaan seputar Lavandaia Dharma Bali, hubungi
                        kami melalui kontak di laman ini.</p>
                    <p>Thanks for comming! If you have questions about Lavandaia Dharma Bali, contact us via the contact
                        bellow.</p>
                    <ul class="contact-short-info mt-4">
                        <li class="mb-3">
                            <i class="tf-ion-ios-home"></i>
                            <span>Basecamp Lavandaia
                                Br. Srijati, Desa Sibang Gede,
                                Abiansemal, Badung-Bali</span>
                        </li>
                        <li class="mb-3">
                            <i class="tf-ion-android-phone-portrait"></i>
                            <span>Phone: +6285-31-000-000</span>
                        </li>
                        <li class="mb-3">
                            <i class="tf-ion-android-globe"></i>
                            <span>Fax: +6285-31-000-000</span>
                        </li>
                        <li>
                            <i class="tf-ion-android-mail"></i>
                            <span>Email: hello@gmail.com</span>
                        </li>
                    </ul>
                    <!-- Footer Social Links -->
                    <div class="social-icon">
                        <ul>
                            <li><i class="tf-ion-social-facebook"></i></li>
                            <li><i class="tf-ion-social-twitter"></i></li>
                            <li><i class="tf-ion-social-dribbble-outline"></i></li>
                            <li><i class="tf-ion-social-linkedin-outline"></i></li>
                        </ul>
                    </div>
                    <!--/. End Footer Social Links -->
                </div>
                <!-- / End Contact Details -->

                <!-- Contact Form -->
                <div class="contact-form col-md-6 ">
                    <form id="contact-form" role="form">
                        <div class="form-group mb-4">
                            <input type="text" placeholder="Your Name" class="form-control" name="name" id="name"
                                required>
                        </div>

                        <div class="form-group mb-4">
                            <input type="email" placeholder="Your Email" class="form-control" name="email"
                                id="email" required>
                        </div>

                        <div class="form-group mb-4">
                            <input type="text" placeholder="Subject" class="form-control" name="subject" id="subject"
                                required>
                        </div>

                        <div class="form-group mb-4">
                            <textarea rows="6" placeholder="Message" class="form-control" name="message" id="message" required></textarea>
                        </div>
                        <div id="cf-submit">
                            <input type="submit" id="contact-submit" class="btn btn-transparent" value="Submit">
                        </div>

                    </form>
                </div>
                <!-- ./End Contact Form -->

            </div> <!-- end row -->
        </div> <!-- end container -->
    </section> <!-- end section -->

    <!--================================
    =            Google Map            =
    =================================-->
    <div class="google-map">
        {{-- <div id="map_canvas" class="map_canvas" data-latitude="40.712776" data-longitude="-74.005974"
            data-marker="images/marker.png" data-marker-name="Bingo"></div> --}}
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31561.84208718433!2d115.18440877256944!3d-8.573845247923755!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd23e9c75836f47%3A0x4b5df247888cde3a!2sSibang%20Gede%2C%20Abiansemal%2C%20Badung%20Regency%2C%20Bali!5e0!3m2!1sen!2sid!4v1679158947542!5m2!1sen!2sid"
            width="1625" height="470" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <!--====  End of Google Map  ====-->
@endsection
