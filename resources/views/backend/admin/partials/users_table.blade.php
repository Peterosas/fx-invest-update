<div class = "row">
            <div class="col-12">
			<div class="card">
				<div class="card-header card-primary with-border">
				  <h3 class="card-title pull-left">All Registered Users</h3>

				  @include("backend.layouts.common.reload")
				</div>
				<div class="card-body">
                    
					<div class="table-responsive">
						<table class="table table-bordered no-margin admin-table">
						  <thead>					
							<tr class="bg-blue">
                              <th>#</th>
							  <th>Name</th>
                              <th>Email</th>
							  <th>Date</th>
							  <th>Action</th>
							 
							</tr>
						  </thead>
						  <tbody>
                            
                            @php ($count = 1)
                            @foreach($users as $user)
							<tr>
							  <td>
								 {{ $count++ }}
								
							  </td>
                                
							  <td>{{ $user->first_name . ' ' . $user->last_name }}</td>
							 
                              <td>
								{{ $user->email }}
							  </td>
                                
                              <td>
								{{ $user->created_at }}
							  </td>
                                
                              <td>
                                <a href = "{{ route('admin.user.edit', ['id'=>$user->id]) }}" class = "btn btn-sm btn-warning ajax-popup-link"><i class = "fa fa-pencil"></i></a> 
                                  
                                <br /><br />
                                  
                                <a href = "{{ route('admin.user.delete', ['id'=>$user->id]) }}" class = "btn btn-sm btn-danger btn-action-delete"><i class = "fa fa-trash"></i></a> 
                                  
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