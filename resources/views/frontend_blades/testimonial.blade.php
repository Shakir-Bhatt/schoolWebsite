@extends('layouts.frontend')

@section('content')
<!-- Testimonial Section Start -->
        <section class="testimonial-area section-padding white-bg">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 text-center">
                        <div class="section-title mb-70">
                            <h2 class="mb-5">What people say</h2>
                            <p>There are many variations of ages om Ipsum available, but the mrity ave suffered
                                <br /> aleration in some orm altime to share.</p>
                            <hr class="line" />
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
            <div id="testimonial" class="text-center">
                <div class="slide-item">
                    <div class="say-box ptb-30 white-bg">
                        <img src="{{ asset('img/icons/4.png') }}" alt="Icon" />
                        <p class="mb-20">All the Lorem Ipsum generators on the Internet tend
                            <br /> repeat predefined chunks as necessary, making this the first true geerator on</p>
                        <h4 class="theme-color mb-5">Gary Black</h4>
                        <h6 class="on-margin">UX Designer</h6>
                    </div>
                </div>
                <!-- /.Item end -->
                <div class="slide-item">
                    <div class="say-box ptb-30 white-bg">
                        <img src="{{ asset('img/icons/4.png') }}" alt="Icon" />
                        <p class="mb-20">All the Lorem Ipsum generators on the Internet tend
                            <br /> repeat predefined chunks as necessary, making this the first true geerator on</p>
                        <h4 class="theme-color mb-5">Gary Black</h4>
                        <h6 class="on-margin">UX Designer</h6>
                    </div>
                </div>
                <!-- /.Item end -->
                <div class="slide-item">
                    <div class="say-box ptb-30 white-bg">
                        <img src="{{ asset('img/icons/4.png') }}" alt="Icon" />
                        <p class="mb-20">All the Lorem Ipsum generators on the Internet tend
                            <br /> repeat predefined chunks as necessary, making this the first true geerator on</p>
                        <h4 class="theme-color mb-5">Gary Black</h4>
                        <h6 class="on-margin">UX Designer</h6>
                    </div>
                </div>
                <!-- /.Item end -->
            </div>
        </section>
        <!-- Testimonial Section End -->
@endsection