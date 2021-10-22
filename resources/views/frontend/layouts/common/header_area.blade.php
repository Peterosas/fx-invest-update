 <!-- header-start -->
    <header>
        <div class="header-area ">
            <div id="sticky-header" class="main-header-area">
                <div class="container-fluid ">
                    <div class="header_bottom_border">
                        <div class="row align-items-center">
                            <div class="col-xl-3 col-lg-2">
                                <div class="logo">
                                    <a href="{{ route('home') }}">
                                        <img src="{{ asset('pages') }}/img/logo.png" alt="">
                                        
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-7">
                                <div class="main-menu  d-none d-lg-block">
                                    <nav>
                                        <ul id="navigation">
                                            <li><a href="{{ route('home') }}">home</a></li>
                                            <li><a href="javascript::void(0)" data-to-section = "#investment_plan">Packages</a></li>
                                            
                                            <li><a href="{{ route('about') }}">About Us</a>
                                            </li>
                                            
                                            
                                         
                                           
                                            
                                            <li><a href="{{ route('faq') }}">FAQ</a></li>
                                            <li><a href="{{ route('contact') }}">Contact</a></li>
                                            
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3">
                                <div class="Appointment">
                                  <div>
                                      <a class="boxed-btn" href="{{ route('login') }}">Sign In</a>
                                  </div>
                                  <div class="ml-2">
                                      <a class="boxed-btn" href="{{ route('register') }}">Sign Up</a>
                                  </div>
                                </div>
                            </div>
                           
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none" style="margin-top: -5rem"></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </header>
    <!-- header-end -->