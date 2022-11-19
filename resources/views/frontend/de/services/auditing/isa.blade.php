@extends('frontend.de.main_master')
@section('content')
    @section('title')
        Information System Audit
    @endsection

    <div class="page-header">
        <div class="page-header__bg"
             style="background-image: url({{ asset('https://www.wallpaperflare.com/static/354/88/880/system-scheme-blue-blueprint-wallpaper.jpg') }});"></div>
        <!-- /.page-header__bg -->
        <div class="container">
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="{{ url('/de') }}">Home</a></li>
                <li><a href="{{ url('de/services') }}">Services</a></li>
                <li><a href="{{ url('de/services/auditing') }}">Auditing</a></li>
                <li>Information System Audit</li>
            </ul>
            <h2 class="page-header__title">Information System Audit</h2><!-- /.page-header__title -->
        </div><!-- /.container -->
    </div><!-- /.page-header -->

    <section class="section-padding--bottom section-padding--top">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">


                    <h3 style="color:orange;" class="blog-card-one__title blog-details__title">Information System Audit</h3>
                    <div class="blog-details__content">
                        <p>The effectiveness of an information system’s controls is evaluated through an information systems audit. An audit aims to establish whether information systems are safeguarding corporate assets, maintaining the integrity of stored and communicated data, supporting corporate objectives effectively, and operating efficiently. It is a part of a more general financial audit that verifies an organization’s accounting records and financial statements. Information systems are designed so that every financial transaction can be traced. In other words, an audit trail must exist that can establish where each transaction originated and how it was processed. Aside from financial audits, operational audits are used to evaluate the effectiveness and efficiency of information systems operations, and technological audits verify those information technologies are appropriately chosen, configured, and implemented.</p>
                    <br><br><br>
                    </div><!-- /.blog-details__content -->


                </div><!-- /.col-lg-8 -->
                <div class="col-lg-4">
                    <div class="sidebar">
                        <div class="sidebar__item sidebar__item--category">
                            @include('frontend.de.services.auditing.common')
                        </div><!-- /.sidebar__item -->
                    </div><!-- /.sidebar -->
                </div><!-- /.col-lg-4 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><br>



@endsection
