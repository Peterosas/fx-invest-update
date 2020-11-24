@php ($investments = Auth::user()->referrals())

<div class = "row mb-3">
            <div class="col-md-8 offset-md-2">
			<div class="card">

				<div class="card-body">
                   
                    
					<div class="table-responsive">
						<table class="table table-striped">
						  <thead>					
							<tr class="bg-blue">
                              <th>Date</th>
							  <th>Package</th>
							  <th>Amount</th>
							  <th>Daily Profit</th>
							  <th>Total Profit</th>
                              <th>Days Elapsed</th>
							</tr>
						  </thead>
						  <tbody>
                        
                                <tr>
                                <td>
                                    {{ $investment->created_at }}
                                  </td>

                                
                                  <td>
                                      {{ $investment->package->name }}
                                  </td>
                                 <td>
                                      {{ formatAmount( $investment->amount?? 0.00 ) }}</td>

                                <td>
                                      {{ formatAmount( $investment->dailyEarnings()?? 0.00 ) }}</td>
                                    
                                 <td>
                                      {{ formatAmount( $investment->totalEarnings()?? 0.00 ) }}</td>
                                    
                                <td>
                                    {{ $investment->daysElapsed() }} days
                                </td>
                                  
                                </tr>

						  </tbody>
						</table>
					</div>
                
				</div>
                
                <div class = "card-footer">
                    <a href="javascript:void(0)" class="btn btn-warning btn-mf-close">Close</a>  
                </div>
				<!-- /.card-body -->
			  </div>
			  <!-- /.card -->

		  </div> 
		  
        </div>