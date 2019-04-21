@extends('layouts.frontend')

@section('content')
<!-- Event Section Start -->
        <section class="event-area section-padding white-bg">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 text-left">
                        <div class="section-title mb-70">
                            <h2 class="mb-5">Our Events</h2>
                            <p>There are many variations of ages om Ipsum available, but the mrity ave suffered
                                <br /> aleration in some orm altime to share.</p>
                            <hr class="line" />
                        </div>
                    </div>
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-xs-12 col-sm-6 mobi-mb-30">
                        <div class="event-box d-flex">
                            <div class="thumb pull-left">
                                <a href="event-details.html"><img src="{{ asset('img/event/style1/3.jpg') }}" alt="Thumbnail Image" /></a>
                                <div class="date">
                                    <h2 class="mb-3">12</h2>
                                    <h5 class="no-margin">jun</h5>
                                </div>
                            </div>
                            <div class="event-content">
                                <div class="align-container">
                                    <div class="align-inner">
                                        <a href="event-details.html">
                                            <h4 class="text-capitalize">Workshop UI Design</h4>
                                        </a>
                                        <ul>
                                            <li><i class="zmdi zmdi-time"></i> 5.00 pm - 8.00 pm</li>
                                            <li><i class="zmdi zmdi-pin"></i> Melborn, Australia</li>
                                        </ul>
                                        <p>On the other hand, we denou with
                                            <br/> righteous indignation and dislmen
                                            <br /> who are so beguiled and.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.event box end -->
                    <div class="col-xs-12 col-sm-6">
                        <div class="event-box d-flex">
                            <div class="thumb pull-left">
                                <a href="event-details.html"><img src="{{ asset('img/event/style1/7.jpg') }}" alt="Thumbnail Image" /></a>
                                <div class="date">
                                    <h2 class="mb-3">12</h2>
                                    <h5 class="no-margin">jun</h5>
                                </div>
                            </div>
                            <div class="event-content">
                                <div class="align-container">
                                    <div class="align-inner">
                                        <a href="event-details.html">
                                            <h4 class="text-capitalize">Photo Effect Tutorials</h4>
                                        </a>
                                        <ul>
                                            <li><i class="zmdi zmdi-time"></i> 5.00 pm - 8.00 pm</li>
                                            <li><i class="zmdi zmdi-pin"></i> Melborn, Australia</li>
                                        </ul>
                                        <p>On the other hand, we denou with
                                            <br/> righteous indignation and dislmen
                                            <br /> who are so beguiled and.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.event box end -->
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-xs-12 text-center pt-60">
                        <div class="all-event d-block">
                            <a class="btn" href="events.html">All Events</a>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </section>
        <!-- Event Section End -->

@endsection