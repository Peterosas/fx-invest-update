<div class = "row mt-3">
            <div class="col-12">
			<div class="card card-primary">
				<div class="card-header">
				  <h3 class="card-title pull-left">All Transactions</h3>

				  @include("backend.layouts.common.reload")
				</div>
				<div class="card-body">
                            
        
					<div class="table-responsive">
						<table class="table table-striped table-dark table-invest">
						  <thead>					
							<tr class="bg-blue">
                              <th>Date</th>
							  <th>Trans. Type</th>
							  <th>Amount</th>
							  <th>Status</th>
                              
							</tr>
						  </thead>
						  <tbody>
                            @foreach($transactions as $transaction)
							<tr>
                            <td>{{ $transaction->created_at }}</td>
                            
							  <td>{{ $transaction->trans_type }}</td>
							  <td>
								{{ formatAmount($transaction->amount) }}
							  </td>
                                
							  <td class="{{ getStatusLabel($transaction->status) }}">{{ $transaction->status }}</td>
                                
							</tr>
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