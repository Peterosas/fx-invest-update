@extends('frontend.layouts.app', ['title'=>'About ' . ($site_settings->site_name?? config('company.name'))])


@section('content')
    <!-- Wrapper Starts -->
    <div class="wrapper">
        @include('frontend.layouts.common.header')
		<!-- Banner Area Starts -->
		 @include('frontend.layouts.common.banner', ['page' => 'About Us'])
		<!-- Banner Area Starts -->
        <!-- About Section Starts -->
        <section class="about-page">
            <div class="container">
				<!-- Section Content Starts -->
                <div class="row about-content">
                    <!-- Image Starts -->
                    <div class="col-sm-12 col-md-5 col-lg-6 text-center">
                        <img id="about-us" class="img-responsive img-about-us" src="{{ asset('pages') }}/images/about-us.png" alt="about us">
                    </div>
                    <!-- Image Ends -->
                    <!-- Content Starts -->
                    <div class="col-sm-12 col-md-7 col-lg-6">
						<div class="feature-about">
							<h3 class="title-about">WE ARE {{ config('company.name') }}</h3>
							<p>We are a team of professional Fx and binary option trader. Our goal is to create an enabling environment where investors round the globe invest their funds to generate financial freedom.
                            </p>
						</div>
						<div class="feature-about">
							<h3 class="title-about risk-title"><i class="fa fa-warning"></i> How to Invest with {{config('company.name')}}</h3>
							<p>You must have a Bitcoin wallet to invest and earn. Visit <a href = "https://blockchain.com" target = "_blank">Blockchain</a>, <a href = "https://coinbase.com" target = "_blank">Coinbase</a>  or  <a href = "https://luno.com" target = "_blank">Luno</a> to create a bitcoin wallet.</p>
                            
                            <p>
                                Profits accumulated can only be withdrawn from {{ getMinBalance() }} and above.
                            </p>
                            
                            <p>
                                Our company offers {{ getReferralBonus() }}% referral bonus upon reinvestment.
Withdrawals are paid instantly into your Bitcoin wallet account!
Investment capital can only be withdrawn after 30days.
                            </p>
						</div>
						<a class="btn btn-primary btn-services" href="{{ route('pricing') }}">Our Packages</a>
                    </div>
                    <!-- Content Ends -->
					
                </div>
                <!-- Section Content Ends -->
			</div><!--/ Content row end -->
        </section>
        <!-- About Section Ends -->
		
        <!-- Team Section Starts -->
        @include('frontend.layouts.common.team')
        <!-- Team Section Ends -->
        <!-- Call To Action Section Starts -->
        @include('frontend.layouts.common.call-action-all')
        <!-- Call To Action Section Ends -->
        <!-- Footer Starts -->
        @include('frontend.layouts.common.footer')
        <!-- Footer Ends -->
@endsection