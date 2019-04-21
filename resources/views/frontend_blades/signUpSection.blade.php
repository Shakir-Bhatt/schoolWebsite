@extends('layouts.frontend')

@section('content')
<!-- Sign Up Online Start -->
        <section class="signup-area ptb-70 bg-img-1 parallax overlay overlay-1">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-6">
                        <div class="countdown-text pt-80">
                            <h3 class="mb-5 white-color">GET THE COACHING TRAINING</h3>
                            <h2 class="mb-30 white-color">BY James Russell For online</h2>
                            <div id="timer">
                                <div id="days"></div>
                                <div id="hours"></div>
                                <div id="minutes"></div>
                                <div id="seconds"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6">
                        <div class="signup-form custom-input white-bg">
                            <h3 class="mb-20">Sign Up Now</h3>
                            <form action="javascript:viod(0)">
                                <input type="text" name="name" placeholder="Your Name" required />
                                <input type="email" name="email" placeholder="Email" required />
                                <input type="text" name="phone" placeholder="Phone" />
                                <button type="submit" class="btn">Get It Now</button>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </section>
        <!-- Sign Up Online End -->
@endsection