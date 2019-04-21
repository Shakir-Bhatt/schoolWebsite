<header class="main-header">
            <div class="top-bar">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="d-flex justify-end">
                                <div class="left mr-auto">
                                    <ul class="clearfix">
                                        <li>Phone: <a href="tel:+91">+98 698 547 258</a></li>
                                        <li>Open hours: 9.00 -6.00 SAT-MON</li>
                                    </ul>
                                </div>
                                <div class="right l-height">
                                    <ul class="clearfix d-inblock">
                                        <li><a href="#">Login</a></li>
                                        <li><a href="#">Regester</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container -->
            </div>
            <div id="active-sticky" class="navgation-bar">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="d-flex justify-end">
                                <div class="logo mr-auto">
                                    <a href="{{ URL::to('/') }}"><img src="{{ asset('img/logo.png') }}" alt="Cultura" /></a>
                                </div>
                                <!-- Static navbar -->
                                <nav class="mainmenu">
                                    <div class="navbar-header">
                                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar">
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                        </button>
                                    </div>
                                    <div id="navbar" class="navbar-collapse collapse no-padding">
                                        <ul class="navbar-nav dropdown">
                                            <li><a href="{{ URL::to('/') }}">Home</a></li>
                                            <li><a href="{{ URL::to('teacher') }}">Teachers</a></li>
                                            <li><a href="{{ URL::to('about') }}">About Us</a></li></a>
                                            <li><a href="{{ URL::to('blog') }}">Blog </a></li>
                                            <li><a href="{{ URL::to('contact') }}">Contact</a></li>
                                        </ul>
                                    </div>
                                    <!--/.nav-collapse -->
                                </nav>
                                <div class="search-toggle pull-right">
                                    <i class="zmdi zmdi-search"></i>
                                </div>
                                <div class="courses-searching">
                                    <div class="close-search"></div>
                                    <form action="#">
                                        <input type="text" name="search" placeholder="Courses Search..." />
                                        <button id="close" type="submit"><i class="zmdi zmdi-search"></i></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.row -->
                </div>
                <!-- /.container -->
            </div>
        </header>