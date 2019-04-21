@extends('layouts.frontend')

@section('content')
<!-- Blog Section Start -->
        <section class="blog-area section-padding white-bg">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 text-left">
                        <div class="section-title mb-70">
                            <h2 class="mb-5">Latest Blog News</h2>
                            <p>There are many variations of ages om Ipsum available, but the mrity ave suffered
                                <br /> aleration in some orm altime to share.</p>
                            <hr class="line" />
                        </div>
                    </div>
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-xs-12 col-sm-4 mobi-mb-30">
                        <div class="blog-post">
                            <div class="thumb text-center">
                                <a href="blog-details.html"><img src="{{ asset('img/blog/1.jpg') }}" alt="Thumbnail Image" /></a>
                            </div>
                            <div class="blog-content ptb-30 plr-35">
                                <div class="date-box clearfix mb-20">
                                    <h4 class="theme-color pull-left no-margin">20 <span>jun</span></h4>
                                    <div class="name-comment pl-15">
                                        <h5 class=" mb-5"><span class="theme-color">By:</span> Mark Thomas</h5>
                                        <h5 class="no-margin"><span class="theme-color">Comment:</span> 20</h5>
                                    </div>
                                </div>
                                <a href="blog-details.html">
                                    <h3 class="text-capitalize">All The Lorem Ipsum Rock</h3>
                                </a>
                                <p>There are many variations of ages oIpsum available, but the mrity ave suffered ation in some orm altime to.</p>
                            </div>
                        </div>
                    </div>
                    <!-- /.Blog Post end -->
                    <div class="col-xs-12 col-sm-4 mobi-mb-30">
                        <div class="blog-post">
                            <div class="thumb text-center">
                                <a href="blog-details.html"><img src="{{ asset('img/blog/2.jpg') }}" alt="Thumbnail Image" /></a>
                            </div>
                            <div class="blog-content ptb-30 plr-35">
                                <div class="date-box clearfix mb-20">
                                    <h4 class="theme-color pull-left no-margin">21 <span>jun</span></h4>
                                    <div class="name-comment pl-15">
                                        <h5 class=" mb-5"><span class="theme-color">By:</span> Mark Thomas</h5>
                                        <h5 class="no-margin"><span class="theme-color">Comment:</span> 22</h5>
                                    </div>
                                </div>
                                <a href="blog-details.html">
                                    <h3 class="text-capitalize">The mrity ave suffered mity</h3>
                                </a>
                                <p>There are many variations of ages oIpsum available, but the mrity ave suffered ation in some orm altime to.</p>
                            </div>
                        </div>
                    </div>
                    <!-- /.Blog Post end -->
                    <div class="col-xs-12 col-sm-4">
                        <div class="blog-post">
                            <div class="thumb text-center">
                                <a href="blog-details.html"><img src="{{ asset('img/blog/3.jpg') }}" alt="Thumbnail Image" /></a>
                            </div>
                            <div class="blog-content ptb-30 plr-35">
                                <div class="date-box clearfix mb-20">
                                    <h4 class="theme-color pull-left no-margin">10 <span>jun</span></h4>
                                    <div class="name-comment pl-15">
                                        <h5 class=" mb-5"><span class="theme-color">By:</span> Mark Thomas</h5>
                                        <h5 class="no-margin"><span class="theme-color">Comment:</span> 10</h5>
                                    </div>
                                </div>
                                <a href="blog-details.html">
                                    <h3 class="text-capitalize">Finibus Bonorum et Malum</h3>
                                </a>
                                <p>There are many variations of ages oIpsum available, but the mrity ave suffered ation in some orm altime to.</p>
                            </div>
                        </div>
                    </div>
                    <!-- /.Blog Post end -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </section>
        <!-- Blog Section End -->
@endsection