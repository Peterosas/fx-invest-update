 <section class="pricing">
            <div class="container">
                <!-- Section Title Starts -->
                <div class="row text-center">
                    <h2 class="title-head">our <span>packages</span></h2>
                </div>
                <!-- Section Title Ends -->
                <!-- Section Content Starts -->
                <div class="row pricing-tables-content">
                    <div class="pricing-container">
                        <!-- Pricing Switcher Starts -->
                    
                        <!-- Pricing Switcher Ends -->
                        <!-- Pricing Tables Starts -->
                        <ul class="pricing-list ">
                            
                            @foreach($packages as $package)
                            <li class="col-xs-6 col-sm-6">
                                <ul class="pricing-wrapper">
                                    <!-- Buy Pricing Table #1 Starts -->
                                    <li data-type="buy" class="is-visible">
                                        <header class="pricing-header">
                                            <h2>{{ $package->name }}
                                                
                                                <br /><br />Min. Investment - <i class="fa fa-dollar"></i>{{ $package->min_amount }} </h2>
                                            <div class="price">
                                            
                                                <span class="value">{{ $package->roi }}%  ROI</span>
                                                <br />
                                                <span>in {{ $package->duration_in_days }} days </span>
                                            </div>
                                        </header>
                                        <footer class="pricing-footer">
                                            <a href="{{ route('invest.index') }}?id={{ $package->id }}" class="btn btn-primary">INVEST NOW</a>
                                        </footer>
                                    </li>
                                    <!-- Buy Pricing Table #1 Ends -->
                                   
                                </ul>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </section>