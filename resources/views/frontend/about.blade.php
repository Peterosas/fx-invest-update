@extends('frontend.layouts.app', ['title'=>'About Us :: ' . ($site_settings->site_name?? config('company.name'))])


@section("content")

    @include("frontend.layouts.common.header_area")
    
    
    <!-- about_area_start  -->
    <div class="about_area plus_padding">
        <div class="container">
            <div class="row align-items-center">

                <div class="col-md-12">
                    <div class="about_info pl-68">
                        <div class="section_title wow fadeInUp" data-wow-duration="1.2s" data-wow-delay=".3s">
                            <h3>Who are we?</h3>
                        </div>
                        <p class="wow fadeInUp" data-wow-duration="1.2s" data-wow-delay=".4s"><a href = "index.html" class = "site-name">Vantagehubfx</a> is legally registered with all the relevant authorities as an online investing firm, which its focus is using the current forex and binary option market to generate a huge profit for our clients.</p>
                        <br />

                        <div class="section_title wow fadeInUp" data-wow-duration="1.2s" data-wow-delay=".3s">
                            <h3>Our Vision</h3>
                        </div>
                        <p class="wow fadeInUp" data-wow-duration="1.2s" data-wow-delay=".4s"><a href = "index.html" class = "site-name">Vantagehubfx</a> is the leader in supporting individuals who desire greater success in <strong>Forex Trading</strong> and <strong>Binary Option</strong>, more profitable companies and the ability to contribute to the success of their finance.</p>

                        <br />

                        <div class="section_title wow fadeInUp" data-wow-duration="1.2s" data-wow-delay=".3s">
                            <h3>Our Aim</h3>
                        </div>
                        <p class="wow fadeInUp" data-wow-duration="1.2s" data-wow-delay=".4s"><a href = "index.html" class = "site-name">Vantagehubfx</a> is committed to providing a complete, balanced financial solution and building sound financial security to enable our clients to live and share their dreams with the next generation.
Meeting and exceeding client expectations is the basis of our success and our reputation. We’ve built our organization around our clients’ needs, focusing on what serves, not what sells, and demonstrating trust and integrity in every action we take on our clients’ behalf. These measures have led to the success that matters most to us: highly satisfied clients and enduring client relationships, across the World </p>

                        <br />

                        <div class="section_title wow fadeInUp" data-wow-duration="1.2s" data-wow-delay=".3s">
                            <h3>Mission Statement</h3>
                        </div>
                        <p class="wow fadeInUp" data-wow-duration="1.2s" data-wow-delay=".4s">We will help members develop and achieve goals for personal, business, and professional endeavors by providing network review, business tools, and one-on-one consulting.</p>

                        <div class="about_btn wow fadeInRight" data-wow-duration="1.3s" data-wow-delay=".5s">
                            <a class="boxed-btn3" href="apply.html">Open An Account</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- about_area_end  -->
    @include("frontend.layouts.common.footer_area")

@endsection

@include("frontend.layouts.common.slider_asset")