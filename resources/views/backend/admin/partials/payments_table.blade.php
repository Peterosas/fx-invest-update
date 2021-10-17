<div class = "row">
            <div class="col-12">
			<div class="card">
				<div class="card-header card-primary with-border">
				  <h3 class="card-title pull-left">Payment Requests</h3>

				  @include("backend.layouts.common.reload")
				</div>
				<div class="card-body">
                    
					<div class="table-responsive">
						<table class="table table-bordered no-margin admin-table">
						  <thead>					
							<tr class="bg-blue">
                              <th>#</th>
							  <th>Status</th>
							  <th>Name</th>
                              <th>Email</th>
							  <th>Wallet Address</th>
							  <th>Amount (USD)</th>
							  <th>Date</th>
							  <th>Action</th>
							 
							</tr>
						  </thead>
						  <tbody>
                            
                            @php ($count = 1)
                            @foreach($payments as $payment)
							<tr>
							  <td>
								 {{ $count++ }}
								
							  </td>

							  <td>
								 {{ $payment->status }}
								
							  </td>
                                
                                
							  <td>{{ $payment->user->first_name . ' ' . $payment->user->last_name }}</td>
							 
                              <td>
								{{ $payment->user->email }}
							  </td>

							  <td>
								{{ $payment->address }}
							  </td>
                                
							  <td>
								<input type="text" placeholder="Enter Amount" id={{$payment->id}} onblur = "updateDepositAmount(this.value, this.id)" />								
							  </td>

                              <td>
								{{ $payment->created_at }}
							  </td>
                                
                              <td>
                                <a href = "{{ route('admin.payment.decline', ['id'=>$payment->id]) }}" class = "btn btn-sm btn-warning btn-action-delete">Decline</a> 
								<a href = "{{ route('admin.payment.approve', ['id'=>$payment->id]) }}" id="action_{{$payment->id}}" class = "btn btn-sm btn-success btn-action-delete">Approve</a> 
                                  
                             </td>
                              
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