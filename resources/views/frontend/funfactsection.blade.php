@extends('layouts.frontend')

@section('content')
<!-- Fun Facts Start -->
        <section class="fun-facts-area ptb-150 bg-img-2 parallax overlay dark-3">
            <div class="container">
                <div class="row text-center">
                    <div class="col-xs-12 col-sm-6 col-md-3 mobi-mb-50 tab-mb-50">
                        <div class="counter-func">
                            <img class="mb-25" src="{{ asset('img/icons/facts/1.png') }}" alt="Icon" />
                            <h1><span class="counter theme-color">75</span></h1>
                            <h5 class="no-margin">Teachers</h5>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3 mobi-mb-50 tab-mb-50">
                        <div class="counter-func">
                            <img class="mb-25" src="{{ asset('img/icons/facts/2.png') }}" alt="Icon" />
                            <h1><span class="counter theme-color">1200</span></h1>
                            <h5 class="no-margin">Classes complete</h5>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3 mobi-mb-50">
                        <div class="counter-func">
                            <img class="mb-25" src="{{ asset('img/icons/facts/3.png') }}" alt="Icon" />
                            <h1><span class="counter theme-color">120</span></h1>
                            <h5 class="no-margin">all courses</h5>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-3">
                        <div class="counter-func">
                            <img class="mb-25" src="{{ asset('img/icons/facts/4.png') }}" alt="Icon" />
                            <h1><span class="counter theme-color">1200</span></h1>
                            <h5 class="no-margin">Students enrolled</h5>
                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </section>
        <!-- Fun Facts End -->
@endsection