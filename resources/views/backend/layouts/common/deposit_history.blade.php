<div class = "row mt-3">
            <div class="col-12">
			<div class="card card-primary">
				<div class="card-header">
				  <h3 class="card-title pull-left">deposit History</h3>

				  @include("backend.layouts.common.reload")
				</div>
				<div class="card-body">
                            
        
					<div class="table-responsive">
						<table class="table table-striped table-dark table-invest">
						  <thead>					
							<tr class="bg-blue">
                              <th>Date</th>
                              <th>Sent To</th>
							  <th>Amount</th>
							  <th>Status</th>
                             
							</tr>
						  </thead>
						  <tbody>
                            @foreach($transactions as $transaction)
                                @if ($transaction->trans_type == "deposit")
                                    <tr>

                                      <td>
                                         {{ $transaction->created_at }}

                                      </td>
                                        
                                      <td>
                                          {{ $transaction->to_address?? "N/A" }}
                                      </td>

                                      <td>
                                        {{ formatAmount($transaction->amount) }}
                                      </td>
                                    
                                    @if($transaction->status == "completed")
                                      <td class="{{ getStatusLabel($transaction->status) }}">{{ $transaction->status }}</td>
                                    @else
                                        
                                      <td>
                                        <a href = "http://blockchain.com/btc/address/{{ $transaction->to_address }}" target = "_blank" class = "btn btn-sm btn-primary">View Status</a>  
                                      </td>
                                    @endif

                            
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