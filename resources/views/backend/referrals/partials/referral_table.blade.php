@php ($referrals = Auth::user()->referrals())

<div class = "row mb-3">
            <div class="col-12">
			<div class="card card-primary">
				<div class="card-header">
				  <h4 class="card-title pull-left">My Downlines</h4>
				  @include("backend.layouts.common.reload")
				</div>
				<div class="card-body">
                    <div class = "row text-white">
                        <div class = "col-sm-6">
                            <h5>{{ count($referrals) }} members found</h5>
                        </div>
                        <div class = "col-sm-6">
                            <h5>Total Bonus Earned: {{ formatAmount(Auth::user()->total_bonus) }}</h5>
                        </div>
                    </div>
                    <hr />
                   
                    
                    
					<div class="table-responsive">
						<table class="table table-bordered table-dark table-invest no-margin">
						  <thead>					
							<tr class="bg-blue">
                              <th>#</th>
							  <th>Name</th>
							  <th>Amount</th>
                              <th>Commission</th>
							  <th>Date</th>
							 
							</tr>
						  </thead>
						  <tbody>
                            
                            @php ($count = 1)
                            @foreach($referrals as $ref)
                              
                            @php ($referral_invests = $ref->investments)
                       
                              @if (count($referral_invests) > 0)
                                @foreach($referral_invests as $referral)
                                <tr>
                                  <td>
                                    {{ $count++ }}

                                  </td>

                                  <td>
                                      {{ $ref->first_name . " " . $ref->last_name }}</td>

                                 <td>
                                      {{ formatAmount( $referral->amount?? 0.00 ) }}
                                 </td>

                                  <td>
                                      {{ formatAmount($referral->amount * getReferralBonus()/ 100) }}
                                  </td>

                                  <td>
                                    {{ $referral->created_at }}
                                  </td>

                                </tr>

                                @endforeach
                              
                              @else
                              <tr>
                                  <td>
                                    {{ $count++ }}

                                  </td>

                                  <td>
                                      {{ $ref->first_name . " " . $ref->last_name }}

                                  </td>

                                 <td>
                                      {{ formatAmount(0.00) }}
                                 </td>

                                  <td>
                                      {{ formatAmount(0.00) }}
                                  </td>

                                  <td>
                                    {{ $ref->created_at }}
                                  </td>

                                </tr>
                              @endif
                              
                            @endforeach
						  </tbody>
						</table>
					</div>
				</div>
				<!-- /.card-body -->
			  </div>
			  <!-- /.card -->

		  </div> 
		  
        </div>