@php ($investments = $referral->investments )
<div class = "row">
            <div class="col-md-8 offset-md-2">
			<div class="box">
				<div class="box-header with-border text-center">
				  <h2 class="box-title">Bonus Report for {{ $referral->first_name . ' ' . $referral->last_name }}</h2>
				</div>
				<div class="box-body">
                    
                    <div class = "row">
                        <div class = "col-sm-6">
                            <h3>{{ count($investments) }} investments found</h3>
                        </div>
                        <div class = "col-sm-6">
                            <h3>Total Bonus Earned: {{ formatAmount($referral->totalBonusEarnedFromMe()) }}</h3>
                        </div>
                    </div>
                    
					<div class="table-responsive">
						<table class="table table-bordered no-margin table-dark table-invest">
						  <thead>					
							<tr class="bg-blue">
                              <th>Username</th>
							  <th>Package</th>
							  <th>Bonus Earned</th>
							  <th>Date Created</th>
							</tr>
						  </thead>
						  <tbody>
                            
                            @foreach($investments as $investment)
							<tr>
							  <td>
								<a href="#" class="text-yellow hover-warning">
								  {{ $investment->user->username }}
								</a>
								
							  </td>
                                
							  <td>{{ $investment->package->name }}</td>
							  <td>
								{{ formatAmount($investment->bonus()) }}
							  </td>
                            
                              <td>
                                {{ $investment->created_at }}
                              </td>
                              
							</tr>
                            @endforeach
						  </tbody>
						</table>
					</div>
				</div>
				<!-- /.box-body -->
                
                <div class = "box-footer">
                    <div class="col-6 text-right">
                        <a href="javascript:void(0)" class="btn btn-danger btn-mf-close">Cancel</a>  
                    </div>
                </div>
			  </div>
			  <!-- /.box -->

		  </div> 
		  
        </div>
