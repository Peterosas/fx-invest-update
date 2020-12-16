<!-- service_area_start  -->
    <div class="service_area" id = "investment_plan">
        <div class = "plan_bg">
        <div class="container">
            <div class="row">
                @foreach($packages as $package)
                <div class="col-lg-4 col-md-6 text-center">
                    <span class = "fa fa-check-circle p-icon"></span>
                    <h4 class = "p-title">{{ $package->name }}</h4>
                    <p class = "p-description">Min. Investment: {{ formatAmount($package->min_amount) }}  
                        <br />
                        {{ $package->description }}  
                    </p>
                </div>
               
                @endforeach

            </div>
        </div>
      </div>
    </div>
    <!-- service_area_end  -->