@extends('frontend.bd.main_master')
@section('content')
    @section('title')
        Our-Team
    @endsection

    <div class="page-header">
        <div class="page-header__bg"
             style="background-image: url({{ asset('frontend/assets/images/background/page-header-bg-1-1.jpg') }});"></div>
        <!-- /.page-header__bg -->
        <div class="container">
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="{{ url('/') }}">Home</a></li>
                <li>Our Team</li>
            </ul>
            <h2 class="page-header__title">Our Team</h2><!-- /.page-header__title -->
        </div><!-- /.container -->
    </div><!-- /.page-header -->

    <section class="section-padding--bottom section-padding--top">
        <div class="container">
            <div class="section-title text-center">
                <p class="section-title__text">Our Team members</p><!-- /.section-title__text -->
                <h2 class="section-title__title">Our Expert Person to Provide <br> IT Solution Services</h2>
                <!-- /.section-title__title -->
            </div><!-- /.section-title -->
            <div class="row gutter-y-30">
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="team-card-one wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="000ms">
                        <div class="team-card-one__image">
                            <img src="{{ asset('frontend/assets/images/team/ceo.jpg') }}" alt="">
                            <div class="team-card-one__social">
                                <ul class="team-card-one__social__links">
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                </ul><!-- /.team-card-one__social__links -->
                                <div class="team-card-one__social__icon">
                                    <i class="fa fa-share-alt"></i>
                                </div><!-- /.team-card-one__social__icon -->
                            </div><!-- /.team-card-one__social -->
                        </div><!-- /.team-card-one__image -->
                        <div class="team-card-one__content">
                            <h3 class="team-card-one__title"><a href="#">Sahaly Yasmin Bhuiyan</a></h3>
                            <!-- /.team-card-one__title -->
                            <p class="team-card-one__designation">Chairman</p><!-- /.team-card-one__designation -->
                        </div><!-- /.team-card-one__content -->
                    </div><!-- /.team-card-one -->
                </div><!-- /.col-lg-4 col-md-6 col-sm-12 -->
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="team-card-one wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="100ms">
                        <div class="team-card-one__image">
                            <img src="{{ asset('frontend/assets/images/team/c.jpg') }}" alt="">
                            <div class="team-card-one__social">
                                <ul class="team-card-one__social__links">
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                </ul><!-- /.team-card-one__social__links -->
                                <div class="team-card-one__social__icon">
                                    <i class="fa fa-share-alt"></i>
                                </div><!-- /.team-card-one__social__icon -->
                            </div><!-- /.team-card-one__social -->
                        </div><!-- /.team-card-one__image -->
                        <div class="team-card-one__content">
                            <h3 class="team-card-one__title"><a href="#">GG</a></h3>
                            <!-- /.team-card-one__title -->
                            <p class="team-card-one__designation">Manager</p><!-- /.team-card-one__designation -->
                        </div><!-- /.team-card-one__content -->
                    </div><!-- /.team-card-one -->
                </div><!-- /.col-lg-4 col-md-6 col-sm-12 -->
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="team-card-one wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="200ms">
                        <div class="team-card-one__image">
                            <img src="{{ asset('frontend/assets/images/team/team-1-3.jpg') }}" alt="">
                            <div class="team-card-one__social">
                                <ul class="team-card-one__social__links">
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                </ul><!-- /.team-card-one__social__links -->
                                <div class="team-card-one__social__icon">
                                    <i class="fa fa-share-alt"></i>
                                </div><!-- /.team-card-one__social__icon -->
                            </div><!-- /.team-card-one__social -->
                        </div><!-- /.team-card-one__image -->
                        <div class="team-card-one__content">
                            <h3 class="team-card-one__title"><a href="#">Kevin Martin</a></h3>
                            <!-- /.team-card-one__title -->
                            <p class="team-card-one__designation">Developer</p><!-- /.team-card-one__designation -->
                        </div><!-- /.team-card-one__content -->
                    </div><!-- /.team-card-one -->
                </div><!-- /.col-lg-4 col-md-6 col-sm-12 -->
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="team-card-one wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="300ms">
                        <div class="team-card-one__image">
                            <img src="{{ asset('frontend/assets/images/team/team-1-4.jpg') }}" alt="">
                            <div class="team-card-one__social">
                                <ul class="team-card-one__social__links">
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                </ul><!-- /.team-card-one__social__links -->
                                <div class="team-card-one__social__icon">
                                    <i class="fa fa-share-alt"></i>
                                </div><!-- /.team-card-one__social__icon -->
                            </div><!-- /.team-card-one__social -->
                        </div><!-- /.team-card-one__image -->
                        <div class="team-card-one__content">
                            <h3 class="team-card-one__title"><a href="#">Sarah Albert</a></h3>
                            <!-- /.team-card-one__title -->
                            <p class="team-card-one__designation">Director</p><!-- /.team-card-one__designation -->
                        </div><!-- /.team-card-one__content -->
                    </div><!-- /.team-card-one -->
                </div><!-- /.col-lg-4 col-md-6 col-sm-12 -->
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="team-card-one wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="400ms">
                        <div class="team-card-one__image">
                            <img src="{{ asset('frontend/assets/images/team/team-1-5.jpg') }}" alt="">
                            <div class="team-card-one__social">
                                <ul class="team-card-one__social__links">
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                </ul><!-- /.team-card-one__social__links -->
                                <div class="team-card-one__social__icon">
                                    <i class="fa fa-share-alt"></i>
                                </div><!-- /.team-card-one__social__icon -->
                            </div><!-- /.team-card-one__social -->
                        </div><!-- /.team-card-one__image -->
                        <div class="team-card-one__content">
                            <h3 class="team-card-one__title"><a href="#">Mike Hardson</a></h3>
                            <!-- /.team-card-one__title -->
                            <p class="team-card-one__designation">Designer</p><!-- /.team-card-one__designation -->
                        </div><!-- /.team-card-one__content -->
                    </div><!-- /.team-card-one -->
                </div><!-- /.col-lg-4 col-md-6 col-sm-12 -->
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="team-card-one wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="500ms">
                        <div class="team-card-one__image">
                            <img src="{{ asset('frontend/assets/images/team/team-1-6.jpg') }}" alt="">
                            <div class="team-card-one__social">
                                <ul class="team-card-one__social__links">
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fab fa-pinterest-p"></i></a></li>
                                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                </ul><!-- /.team-card-one__social__links -->
                                <div class="team-card-one__social__icon">
                                    <i class="fa fa-share-alt"></i>
                                </div><!-- /.team-card-one__social__icon -->
                            </div><!-- /.team-card-one__social -->
                        </div><!-- /.team-card-one__image -->
                        <div class="team-card-one__content">
                            <h3 class="team-card-one__title"><a href="#">Christine Eve</a></h3>
                            <!-- /.team-card-one__title -->
                            <p class="team-card-one__designation">IT Expert</p><!-- /.team-card-one__designation -->
                        </div><!-- /.team-card-one__content -->
                    </div><!-- /.team-card-one -->
                </div><!-- /.col-lg-4 col-md-6 col-sm-12 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section>
@endsection
