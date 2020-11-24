<div class = "row">
            <div class="col-12">
			<div class="box">
				<div class="box-header with-border">
				  <h3 class="box-title">My Investments</h3>

				  <div class="box-tools pull-right">
					<button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
							title="Collapse">
					  <i class="fa fa-minus"></i></button>
					
				  </div>
				</div>
				<div class="box-body">
                    
                    @include("layouts.status-indicators")
                    
					<div class="table-responsive">
						<table class="table table-bordered no-margin">
						  <thead>					
							<tr class="bg-blue">
                              <th>Invest. Code</th>
							  <th>Package</th>
							  <th>Amount Invested</th>
							  <th>Daily Earning</th>
                              <th>Total Earning</th>
                              <th>ROI Days</th>
							  <th>Status</th>
							  <th>Days Elapsed</th>
							  <th>Remark</th>
							  <th>Date Created</th>
							</tr>
						  </thead>
						  <tbody>
                            @php ($investments =  Auth::user()->investments)
                            @foreach($investments as $investment)
							<tr>
							  <td>
								<a href="#" class="text-yellow hover-warning">
								  {{ $investment->invest_code }}
								</a>
								
							  </td>
                                
							  <td>{{ $investment->package->name }}</td>
							  <td>
								{{ formatAmount($investment->amount) }}
							  </td>
                                
                              <td>
								{{ formatAmount($investment->dailyEarnings()) }}
							  </td>
                                
                              <td>
								{{ formatAmount($investment->totalEarnings()) }}
							  </td>
                                
                              <td>
								{{ $investment->package->duration_in_days }} days
							  </td>
                                
							  <td class="{{ getStatusLabel($investment->status) }}">{{ $investment->status }}</td>
                            
                              <td>{{ $investment->created_at->diffInDays() }} days ago</td>
                                
        
                                
                              <td>{{ $investment->description }}</td>
                                
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
			  </div>
			  <!-- /.box -->

		  </div> 
		  
        </div>
