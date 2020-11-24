@include("backend.admin.partials.admin_wallets")

<div class = "row">
            <div class="col-12">
			<div class="card">
				<div class="card-header card-primary with-border">
				  <h3 class="card-title pull-left">All Client Requests</h3>

				  @include("backend.layouts.common.reload")
				</div>
				<div class="card-body">             
                    
					<div class="table-responsive">
						<table class="table table-bordered no-margin admin-table">
						  <thead>					
							<tr class="bg-blue">
                              <th>Date</th>
                              <th>Trans. Code</th>
							  <th>Name</th>
                              <th>Email</th>
                              <th>Request Type</th>
                              <th>Amount</th>
                              <th>Status</th>
							  <th>Action</th>
							 
							</tr>
						  </thead>
						  <tbody>
                            
                              
                            @foreach($ad_trans as $transaction)
							<tr>
                             <td>
								{{ $transaction->created_at }}
							 </td>
                                
							 <td>
								{{ $transaction->trans_code }}
							  </td>
                                
							  <td>{{ $transaction->user->first_name . " " . $transaction->user->last_name}}</td>
							
							  <td>
								{{ $transaction->user->email }}
							  </td>

                                
                              <td>
								{{ $transaction->trans_type }}
							  </td>
                                
                              <td>
								{{ formatAmount($transaction->amount) }}
							  </td>
                                  
                              <td class = "{{ getStatusLabel($transaction->status) }}">{{ getStatusText($transaction->status) }}</td>
                                                    
                                
                              <td>
                                <a href = "{{ route('admin.client.request.edit', ['id'=>$transaction->id]) }}" class = "btn btn-sm btn-warning ajax-popup-link"><i class = "fa fa-eye"></i></a> 
                                  
                                <br /><br />
                                  
                                <a href = "{{ route('admin.client.request.delete', ['id'=>$transaction->id]) }}" class = "btn btn-sm btn-danger btn-action-delete"><i class = "fa fa-trash"></i></a> 
                                  
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