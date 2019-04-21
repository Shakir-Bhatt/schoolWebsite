<!DOCTYPE html>
<html class="no-js" lang="en">


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Cultura is a Education HTML Template">
    <meta name="keywords" content="	classes, college, course, courses, educational, learning, online courses, revolution slider, school, seminar, tutorials, university, workshop">
    <meta name="author" content="regaltheme.com">
    <title>Default Home Version || Cultura</title>
    <!-- favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('img/favicon.ico') }}">
    <!-- style css -->
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <!-- modernizr js -->
    <script src="{{ asset('js/vendor/modernizr-2.8.3.min.js') }}"></script>

</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
	
    <!-- Loading Bar Start -->
    <div id="loading-wrap">
        <div class="loading-effect"></div>
    </div>
    <!-- Loading Bar End -->
    <!-- Wrapper Start -->
    <div class="wrapper">
        <!-- Header Section Start -->
        @include('frontend.includes.header')
        <!-- Header Section End -->
        <!-- Slider Section Start -->
        <section class="slider-area">
            <div id="mainslider">
                <div class="swiper-wrapper">
                    <div class="single-item swiper-slide overlay dark-1">
                        <img src="{{ asset('img/slider/1.jpg') }}" alt="Slider Image" />
                        <div class="slider-caption">
                            <div class="container">
                                <h2 class="white-color mb-5 hidden-xs rt-effect delay-1">Study</h2>
                                <h1 class="font-60 mb-20 rt-effect-height delay-2">Make smarter <span class="theme-color">Career</span></h1>
                                <p class="mb-25 hidden-xs hidden-sm rt-effect delay-3">On the other hand, we denounce with righteous indignation and dislike men who are so beguiled
                                    <br /> and demoralized by the charms of pleasure of the moment, </p>
                                <div class="rt-effect-btn rt-effect delay-4">
                                    <a class="btn" href="javascript:viod(0)">Start a Course</a>
                                </div>
                            </div>
                            <!-- /.container -->
                        </div>
                    </div>
                    <!-- /.Item End -->
                    <div class="single-item swiper-slide overlay dark-1">
                        <img src="{{ asset('img/slider/2.jpg') }}" alt="Slider Image" />
                        <div class="slider-caption">
                            <div class="container">
                                <h2 class="white-color mb-5 hidden-xs rt-effect delay-1">Education</h2>
                                <h1 class="font-60 mb-20 rt-effect-height delay-2">Must Teach <span class="theme-color">Life</span></h1>
                                <p class="mb-25 hidden-xs hidden-sm rt-effect delay-3">On the other hand, we denounce with righteous indignation and dislike men who are so beguiled
                                    <br /> and demoralized by the charms of pleasure of the moment, </p>
                                <div class="rt-effect-btn rt-effect delay-4">
                                    <a class="btn" href="javascript:viod(0)">Start a Course</a>
                                </div>
                            </div>
                            <!-- /.container -->
                        </div>
                    </div>
                    <!-- /.Item End -->
                </div>
                <!-- Add Arrows -->
                <div class="swiper-next swiper-arrow"><i class="next zmdi zmdi-chevron-right"></i></div>
                <div class="swiper-prev swiper-arrow"><i class="prev zmdi zmdi-chevron-left"></i></div>
            </div>
        </section>
        <!-- Slider Section End -->
        <!-- Service Box Start -->
        <section class="service-box-area white-bg">
            <div class="container">
                <div class="tec-box percent-33 bg-color-1 pull-left">
                    <div class="align-container">
                        <div class="align-inner">
                            <h3 class="white-color mb-15">National Awards</h3>
                            <p class="white-color">There are many variations passages of Lorem Ipsum available, be majority have suffered alteration</p>
                        </div>
                    </div>
                    <div class="tec-icon">
                        <img src="{{ asset('img/icons/1.png') }}" alt="Icon" />
                    </div>
                </div>
                <!-- /.Box End -->
                <div class="tec-box percent-33 theme-bg pull-left">
                    <div class="align-container">
                        <div class="align-inner">
                            <h3 class="white-color mb-15">Best Teachers</h3>
                            <p class="white-color">There are many variations passages of Lorem Ipsum available, be majority have suffered alteration</p>
                        </div>
                    </div>
                    <div class="tec-icon">
                        <img src="{{ asset('img/icons/2.png') }}" alt="Icon" />
                    </div>
                </div>
                <!-- /.Box End -->
                <div class="tec-box percent-33 bg-color-1 pull-left">
                    <div class="align-container">
                        <div class="align-inner">
                            <h3 class="white-color mb-15">Trending courses</h3>
                            <p class="white-color">There are many variations passages of Lorem Ipsum available, be majority have suffered alteration</p>
                        </div>
                    </div>
                    <div class="tec-icon">
                        <img src="{{ asset('img/icons/3.png') }}" alt="Icon" />
                    </div>
                </div>
                <!-- /.Box End -->
            </div>
            <!-- /.container -->
        </section>
        <!-- Service Box End -->
        
        @yield('content')
        
        
        
        
        
        
        
        <!-- Call To Action Start -->
        <section class="cta-one gradient-1">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="cta-content theme-bg clearfix">
                            <div class="pull-left">
                                <h2 class="white-color">Become an instruction</h2>
                                <p>Join thousand of instructors and earn money hassle free</p>
                            </div>
                            <div class="pull-right pt-10">
                                <a class="btn black" href="#">Get Start Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </section>
        <!-- Call To Action End -->
        <!-- Footer Section Start -->
        @include('frontend.includes.footer')
        <!-- Footer Section End -->
    </div>
    <!-- Wrapper Start -->

    <!-- All JS Here -->
    <!-- jQuery Latest Version -->
    <script src="{{ asset('js/vendor/jquery-1.12.4.min.js') }}"></script>
    <!-- Bootstrap JS -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <!-- Form Validate -->
    <script src="{{ asset('js/jquery.validate.min.js') }}"></script>
    <!-- Slick Slider JS -->
    <script src="{{ asset('js/slick.min.js') }}"></script>
    <!-- Swiper JS -->
    <script src="{{ asset('js/swiper.min.js') }}"></script>
    <!-- Isotope JS -->
    <script src="{{ asset('js/isotope.pkgd.min.js') }}"></script>
    <!-- Plugins JS -->
    <script src="{{ asset('js/plugins.js') }}"></script>
    <!-- main JS -->
    <script src="{{ asset('js/main.js') }}"></script>

</body>


</html>