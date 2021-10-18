@extends('frontend.layouts.app', ['title'=>'Frequently Ask Questions :: ' . ($site_settings->site_name?? config('company.name'))])


@section("content")

    @include("frontend.layouts.common.header_area")
    

    <!-- accordion_area_start  -->
    <div class="accordion_area extra_padding">
        <div class="container">
            <div class="row justify-content-end">
                <div class="col-lg-6">
                    <div class="faq_ask pl-68">
                        <h3 class="wow fadeInRight" data-wow-duration="1s" data-wow-delay=".3s">Frequently ask</h3>
                            <div id="accordion">
                                
                                <div class="card wow fadeInUp" data-wow-duration="1.1s" data-wow-delay=".3s">
                                    <div class="card-header" id="headingOnee">
                                      <h5 class="mb-0">
                                        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOnee" aria-expanded="true" aria-controls="collapseOnee">
                                            How Can I Register?
                                        </button>
                                      </h5>
                                    </div>

                                    <div id="collapseOnee" class="collapse show" aria-labelledby="headingOnee" data-parent="#accordion">
                                      <div class="card-body">
                                        Ans. you can register through this link: <strong class = "text-primary">{{ route('register') }} or <a href = "{{ route('register') }}">click here</a></strong>
                                      </div>
                                    </div>
                                  </div>
                                
                                <div class="card wow fadeInUp" data-wow-duration="1.3s" data-wow-delay=".5s">
                                        <div class="card-header" id="headingthree_fives">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapsethree_fives" aria-expanded="false" aria-controls="collapsethree_fives">
                                                     How can I make a deposit to my wowfxpro account?
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="collapsethree_fives" class="collapse" aria-labelledby="headingthree_fives" data-parent="#accordion" style="">
                                            <div class="card-body">Ans: You must have a Bitcoin account or visit blockchain.com, coinbase.com or luno.com to create a bitcoin account.
Kindly login to your wowfxpro dashboard click on deposit, copy the display wallet address and make your deposit. 

                                            </div>
                                        </div>
                                    </div>
                                 <div class="card wow fadeInUp" data-wow-duration="1.2s" data-wow-delay=".4s">
                                        <div class="card-header" id="headingOne">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                                                     When can I make a withdrawal? 
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion" style="">
                                            <div class="card-body">Ans: Withdrawals can be done anytime of the day from Mondays to Fridays.  
                                            </div>
                                        </div>
                                    </div>
                                
                                    <div class="card wow fadeInUp" data-wow-duration="1.3s" data-wow-delay=".5s">
                                        <div class="card-header" id="headingthree_threes">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapsethree_threes" aria-expanded="false" aria-controls="collapsethree_threes">
                                                     What are the minimum  investment? 
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="collapsethree_threes" class="collapse" aria-labelledby="headingthree_threes" data-parent="#accordion" style="">
                                            <div class="card-body">
                                                
                <p>
                    <strong>Ans:</strong> Every packages has a specific interest rate attached to it.
                </p>
                    
                @foreach($packages as $package)
                    <p><strong>{{ strtoupper($package->name) }}:</strong> Minimum Investment ({{ formatAmount($package->min_amount) }}), Profit {{ $package->roi }}% in {{ $package->duration_in_days }} days.</p>
                @endforeach                                     

                                            </div>
                                        </div>
                                    </div>
                                
                                
                                    <div class="card wow fadeInUp" data-wow-duration="1.3s" data-wow-delay=".5s">
                                        <div class="card-header" id="headingThree">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                     When can I make a deposit? 
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion" style="">
                                            <div class="card-body">Ans: You can make deposits anytime of the day from Mondays to Fridays. 
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card wow fadeInUp" data-wow-duration="1.4s" data-wow-delay=".6s">
                                        <div class="card-header" id="headingThree4">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree4" aria-expanded="false" aria-controls="collapseThree4">
                                                    Is there age restriction for this program? 
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="collapseThree4" class="collapse" aria-labelledby="headingThree4" data-parent="#accordion" style="">
                                            <div class="card-body">Ans: You must be atleast 18years of age before you can register with us. 
                                            </div>
                                        </div>
                                    </div>
                                
                                    <div class="card wow fadeInUp" data-wow-duration="1.3s" data-wow-delay=".5s">
                                        <div class="card-header" id="headingthree_ones">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapsethree_ones" aria-expanded="false" aria-controls="collapsethree_ones">
                                                     How can I make money on wowfxpro.com?
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="collapsethree_ones" class="collapse" aria-labelledby="headingthree_ones" data-parent="#accordion" style="">
                                            <div class="card-body">Ans: You start making money on wowfxpro.com once you invest in any of the available packages on the platform. You have the option to choose between <strong>BEGINNER</strong>, <strong>BASIC</strong> and <strong>ADVANCE</strong>. Every packages has a specific interest rate attached to it.
                                            </div>
                                        </div>
                                    </div>
                                
                                    <div class="card wow fadeInUp" data-wow-duration="1.3s" data-wow-delay=".5s">
                                        <div class="card-header" id="headingthree_twos">
                                            <h5 class="mb-0">
                                                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapsethree_twos" aria-expanded="false" aria-controls="collapsethree_twos">
                                                     How to Invest?
                                                </button>
                                            </h5>
                                        </div>
                                        <div id="collapsethree_twos" class="collapse" aria-labelledby="headingthree_twos" data-parent="#accordion" style="">
                                            <div class="card-body">Ans: Select Investment Package of your choice and the amount you want to invest and click on (INVEST)
                                            </div>
                                        </div>
                                    </div>
                                </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ accordion_area_end  -->


    @include("frontend.layouts.common.footer_area")

@endsection