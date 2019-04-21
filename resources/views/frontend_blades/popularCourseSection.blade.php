@extends('layouts.frontend')

@section('content')


<!-- Popular Course Start -->
        <section class="courses-area section-padding white-bg">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 text-left">
                        <div class="section-title mb-70">
                            <h2 class="mb-5">Popular courses</h2>
                            <p>There are many variations of ages om Ipsum available, but the mrity ave suffered
                                <br /> aleration in some orm altime to share.</p>
                            <hr class="line" />
                        </div>
                    </div>
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-xs-12 col-sm-4 mobi-mb-30">
                        <div class="course-box">
                            <div class="course-content plr-25">
                                <div class="thumb text-center">
                                    <a href="course-details.html"><img src="{{ asset('img/course/1.jpg') }}" alt="Thumbnail Image" /></a>
                                    <div class="price">
                                        <h3 class="no-margin"><span>$</span>30</h3>
                                    </div>
                                </div>
                                <a href="course-details.html">
                                    <h3 class="text-capitalize">Learn Photoshop 2017</h3>
                                </a>
                                <div class="date-comment clearfix">
                                    <div class="pull-left">
                                        <h6><span>Date: </span>15.6.17</h6>
                                    </div>
                                    <div class="pull-right">
                                        <h6><i class="zmdi zmdi-comments"></i> 20</h6>
                                    </div>
                                </div>
                                <p class="mb-20">There are many variations of ages om Ipsum available, but the mrity ave suffered aleration in some orm altime to share.</p>
                                <a class="btn btn-1" href="course-details.html">Learn Now</a>
                            </div>
                            <div class="footer clearfix plr-25">
                                <div class="pull-left">
                                    <img class="pull-left" src="{{ asset('img/course/t1.png') }}" alt="Teacher Image" />
                                    <h5 class="no-margin">Mark Thomas</h5>
                                </div>
                                <div class="pull-right rating">
                                    <i class="zmdi zmdi-star"></i>
                                    <i class="zmdi zmdi-star"></i>
                                    <i class="zmdi zmdi-star"></i>
                                    <i class="zmdi zmdi-star"></i>
                                    <i class="zmdi zmdi-star-half"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.course box end -->
                    <div class="col-xs-12 col-sm-4 mobi-mb-30">
                        <div class="course-box">
                            <div class="course-content plr-25">
                                <div class="thumb text-center">
                                    <a href="course-details.html"><img src="{{ asset('img/course/2.jpg') }}" alt="Thumbnail Image" /></a>
                                    <div class="price">
                                        <h3 class="no-margin"><span>$</span>40</h3>
                                    </div>
                                </div>
                                <a href="course-details.html">
                                    <h3 class="text-capitalize">Learn App Design 2017</h3>
                                </a>
                                <div class="date-comment clearfix">
                                    <div class="pull-left">
                                        <h6><span>Date: </span>15.6.17</h6>
                                    </div>
                                    <div class="pull-right">
                                        <h6><i class="zmdi zmdi-comments"></i> 20</h6>
                                    </div>
                                </div>
                                <p class="mb-20">There are many variations of ages om Ipsum available, but the mrity ave suffered aleration in some orm altime to share.</p>
                                <a class="btn btn-1" href="course-details.html">Learn Now</a>
                            </div>
                            <div class="footer clearfix plr-25">
                                <div class="pull-left">
                                    <img class="pull-left" src="{{ asset('img/course/t7.png') }}" alt="Teacher Image" />
                                    <h5 class="no-margin">Jacob Wright</h5>
                                </div>
                                <div class="pull-right rating">
                                    <i class="zmdi zmdi-star"></i>
                                    <i class="zmdi zmdi-star"></i>
                                    <i class="zmdi zmdi-star"></i>
                                    <i class="zmdi zmdi-star"></i>
                                    <i class="zmdi zmdi-star-half"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.course box end -->
                    <div class="col-xs-12 col-sm-4">
                        <div class="course-box">
                            <div class="course-content plr-25">
                                <div class="thumb text-center">
                                    <a href="course-details.html"><img src="{{ asset('img/course/3.jpg') }}" alt="Thumbnail Image" /></a>
                                    <div class="price">
                                        <h3 class="no-margin"><span>$</span>18</h3>
                                    </div>
                                </div>
                                <a href="course-details.html">
                                    <h3 class="text-capitalize">Learn App Design</h3>
                                </a>
                                <div class="date-comment clearfix">
                                    <div class="pull-left">
                                        <h6><span>Date: </span>15.6.17</h6>
                                    </div>
                                    <div class="pull-right">
                                        <h6><i class="zmdi zmdi-comments"></i> 20</h6>
                                    </div>
                                </div>
                                <p class="mb-20">There are many variations of ages om Ipsum available, but the mrity ave suffered aleration in some orm altime to share.</p>
                                <a class="btn btn-1" href="course-details.html">Learn Now</a>
                            </div>
                            <div class="footer clearfix plr-25">
                                <div class="pull-left">
                                    <img class="pull-left" src="{{ asset('img/course/t8.png') }}" alt="Teacher Image" />
                                    <h5 class="no-margin">Frank Harper</h5>
                                </div>
                                <div class="pull-right rating">
                                    <i class="zmdi zmdi-star"></i>
                                    <i class="zmdi zmdi-star"></i>
                                    <i class="zmdi zmdi-star"></i>
                                    <i class="zmdi zmdi-star"></i>
                                    <i class="zmdi zmdi-star-half"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.course box end -->
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-xs-12 text-center pt-60">
                        <div class="all-course d-block">
                            <a class="btn" href="courses.html">All Courses</a>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </section>
        <!-- Popular Course End -->

@endsection