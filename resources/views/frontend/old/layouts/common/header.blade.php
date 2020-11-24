<!-- Header Starts -->
        <header class="header">
            <div class="container">
                <div class="row">
                    <!-- Logo Starts -->
                    <div class="main-logo col-xs-12 col-md-3 col-md-2 col-lg-2 hidden-xs">
                        <a href="{{ route('home') }}">
							<img id="logo" class="img-responsive" src="{{ asset('pages') }}/images/logo-dark.png" alt="logo">
						</a>
                    </div>
                    <!-- Logo Ends -->
                    <!-- Statistics Starts -->
                    <div class="col-md-7 col-lg-7">
                        <ul class="unstyled bitcoin-stats text-center">
                            <li>
                                24/7 Live Support - {{ config('company.support.email') }}
                            </li>
                        </ul>
                    </div>
                    <!-- Statistics Ends -->
                    <!-- User Sign In/Sign Up Starts -->
                    <div class="col-md-3 col-lg-3">
                        <ul class="unstyled user">
                            <li class="sign-in"><a href="{{ route('login') }}" class="btn btn-primary"><i class="fa fa-user"></i> sign in</a></li>
                            <li class="sign-up"><a href="{{ route('register') }}" class="btn btn-primary"><i class="fa fa-user-plus"></i> register</a></li>
                        </ul>
                    </div>
                    <!-- User Sign In/Sign Up Ends -->
                </div>
            </div>
            <!-- Navigation Menu Starts -->
            <nav class="site-navigation navigation" id="site-navigation">
                <div class="container">
                    <div class="site-nav-inner">
                        <!-- Logo For ONLY Mobile display Starts -->
                        <a class="logo-mobile" href="{{ route('home') }}">
							<img id="logo-mobile" class="img-responsive" src="{{ asset('pages') }}/images/logo-dark.png" alt="">
						</a>
                        <!-- Logo For ONLY Mobile display Ends -->
                        <!-- Toggle Icon for Mobile Starts -->
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
                        <!-- Toggle Icon for Mobile Ends -->
                        <div class="collapse navbar-collapse navbar-responsive-collapse">
                            <!-- Main Menu Starts -->
                            <ul class="nav navbar-nav">
                                <li {{ (Route::currentRouteName() == 'home')? 'class=active':'' }}><a href="{{ route('home') }}">Home</a></li>
                                <li {{ (Route::currentRouteName() == 'about')? 'class=active':'' }}><a href="{{ route('about') }}">About Us</a></li>
                                <li {{ (Route::currentRouteName() == 'pricing')? 'class=active':'' }}><a href="{{ route('pricing') }}">Our Packages</a></li> 
                                
                                
                                <li {{ (Route::currentRouteName() == 'faq')? 'class=active':'' }}><a href="{{ route('faq') }}">FAQ</a></li>
                                
                                
                                
                                <li {{ (Route::currentRouteName() == 'contact')? 'class=active':'' }}><a href="{{ route('contact') }}">Contact Us</a></li>
                             
                             
								
                            </ul>
                            <!-- Main Menu Ends -->
                        </div>
                    </div>
                </div>
              
                <!-- Search Input Ends -->
            </nav>
            <!-- Navigation Menu Ends -->
        </header>
        <!-- Header Ends -->