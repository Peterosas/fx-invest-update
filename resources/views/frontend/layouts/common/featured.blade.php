<div class = "container-fluid">
    <div class="works_area featured">

            <div class="row">

                <div class="col-md-6">
                    <div class="single_works wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">
                      <h3 class = "box-r">{{ getReferralBonus() }}% Referral Bonus on any investments or reinvestments made by your downline</h3>
                    </div>
                </div>
                
                @php ($roi_str = "")
                
                @if ($packages->count() > 1)
                    @php ( $roi_str = $packages[0]->roi . '% - ' . $packages[count($packages) - 1]->roi . '%' )
                @elseif ($packages->count() == 1)
                    @php ( $roi_str = $packages[0]->roi . '%' )
                @endif
                
                <div class="col-md-6">
                    <div class="single_works wow fadeInUp" data-wow-duration="1s" data-wow-delay=".6s">

                        <h3>RETURN ON INVESTMENT</h3>
                        <p>Forex and Binary Option Investments with {{ $roi_str }} Profit Guarrantee</p>

                    </div>
                </div>

              
            </div>

    </div>
    
     <div class="works_area featured mt-5">
            <div class = "row">
                  <div class="col-md-12">
                    <div class="single_works wow fadeInUp" data-wow-duration="1s" data-wow-delay=".4s">
                      <h2>RECHARGE FROM YOUR WALLET</h2>
                      <hr />
                      <div>
                        <img src = "{{ asset('pages') }}/img/backgrounds/recharge.jpg" alt = "Airtime Recharge and Subscriptions" width = 100% />
                      </div>
                    
                    </div>
                </div>

            </div>

    </div>
</div>