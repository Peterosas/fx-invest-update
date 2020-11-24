<!-- service_area_start  -->
    <div class="service_area" id = "investment_plan">
        <div class = "plan_bg dir-arrow">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section_title text-center mb-20">
                        <span class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".1s"></span>
                        <h3 class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".2s">What we offer for you</h3>
                        <p class="wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">Our investment plans are tailored to your needs with maximum assurance</p>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($packages as $package)
                <div class="col-lg-4 col-md-6">
                    <div class="single_service wow fadeInLeft" data-wow-duration="1.2s" data-wow-delay=".5s">

                        <div class="info text-center">

                            <span>{{ $package->name }}</span>
                            <hr />
                            <small>MIN. INVEST</small>
                            <h3>{{ formatAmount($package->min_amount) }}</h3>
                            
                            <small>{{ $package->description }}</small>
                            <hr />

                            <div class="apply_btn">
                                <a class="boxed-btn3" href = "{{ route('invest.index') }}">Invest Now</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
      </div>
    </div>
    <!-- service_area_end  -->