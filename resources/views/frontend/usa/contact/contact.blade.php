@extends('frontend.usa.main_master')
@section('content')
    @section('title')
        Contact
    @endsection

    <div class="page-header">
        <div class="page-header__bg"
             style="background-image: url({{ asset('frontend/assets/images/resources/contact.png') }});"></div>
        <!-- /.page-header__bg -->
        <div class="container">
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="index.html">Home</a></li>
                <li>Contact</li>
            </ul>
            <h2 class="page-header__title">Contact</h2><!-- /.page-header__title -->
        </div><!-- /.container -->
    </div><!-- /.page-header -->

    <section class="contact-one section-padding--top section-padding--bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <form action="../../../../../public/frontend/assets/inc/sendemail.php" class="contact-one__form contact-form-validated">
                        <div class="section-title">
                            <p class="section-title__text">Contact with us</p><!-- /.section-title__text -->
                            <h2 class="section-title__title">Join Us To Get IT
                                Consultations</h2><!-- /.section-title__title -->
                        </div><!-- /.section-title -->
                        <div class="row ">
                            <div class="col-lg-6 col-md-12">
                                <input type="text" placeholder="Your name" name="name">
                            </div><!-- /.col-lg-6 col-md-12 -->
                            <div class="col-lg-6 col-md-12">
                                <input type="email" placeholder="Email address" name="email">
                            </div><!-- /.col-lg-6 col-md-12 -->
                            <div class="col-lg-12 col-md-12">
                                <textarea name="message" placeholder="Write message"></textarea>
                            </div><!-- /.col-lg-6 col-md-12 -->
                            <div class="col-md-12">
                                <button class="thm-btn contact-one__btn" type="submit"><span>send a
											message</span></button>
                            </div><!-- /.col-md-12 -->
                        </div><!-- /.row -->
                    </form><!-- /.contact-one__form -->
                    <div class="result"></div><!-- / -->
                </div><!-- /.col-lg-8 -->
                <div class="col-lg-4">
                    <div class="contact-one__info wow fadeInRight" data-wow-duration="1500ms"
                         style="background-image: url({{ asset('frontend/assets/images/background/') }});">
                        <div class="contact-one__item">
                            <h3 class="contact-one__item__title">Address</h3><!-- /.contact-one__item__title -->
                            <p class="contact-one__item__text">Level: 06 & 14 (west), BDBL Bhaban,<br> 12 Karwan Bazar, Tejgaon.
Dhaka - 1215, Bangladesh <br> </p><!-- /.contact-one__item__text -->
                        </div><!-- /.contact-one__item -->
                        <div class="contact-one__item">
                            <h3 class="contact-one__item__title">Phone</h3><!-- /.contact-one__item__title -->
                            <p class="contact-one__item__text">Local: <a href="tel:+88 02550 12235">+88 02550 12235</a><br>
                                Mobile: <a href="tel:+88 01318 013300">+88 01318 013300</a></p>
                            <!-- /.contact-one__item__text -->
                        </div><!-- /.contact-one__item -->
                        <div class="contact-one__item">
                            <h3 class="contact-one__item__title">Email</h3><!-- /.contact-one__item__title -->
                            <p class="contact-one__item__text"><a

                                    <a href="mailto:info@righttime.biz">info@righttime.biz</a></p>
                            <!-- /.contact-one__item__text -->
                        </div><!-- /.contact-one__item -->
                        <div class="contact-one__item">
                            <ul class="contact-one__social">
                                <!--<li><a href="#"><i class="fab fa-twitter"></i></a></li>-->
                                <li><a href="https://www.facebook.com/RightTimeLimited/"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="https://www.linkedin.com/company/right-time-limited/"><i class="fab fa-linkedin"></i></a></li>
                                <!--<li><a href="#"><i class="fab fa-instagram"></i></a></li>-->
                            </ul><!-- /.contact-one__social -->
                        </div><!-- /.contact-one__item -->
                    </div><!-- /.contact-one__info -->
                </div><!-- /.col-lg-4 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.contact-one -->

    <!--Google Map Start-->
    <section class="google-map google-map--contact">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.902997748803!2d90.39122601481527!3d23.75083828458909!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b9f23cc80b29%3A0x32a4288b0ac82b75!2sRight%20Time%20Limited!5e0!3m2!1sen!2sbd!4v1664796188776!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

    </section>
    <!--Google Map End-->
    <br>
    <br>
    <br>
    <br>


@endsection
