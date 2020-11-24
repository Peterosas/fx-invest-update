<div class = "row">
            <div class="col-12">
			<div class="card">
				<div class="card-header card-primary with-border">
				  <h3 class="card-title pull-left">All Packages</h3>

				  @include("backend.layouts.common.reload")
				</div>
				<div class="card-body">
                
                    
                    
					<div class="table-responsive">
						<table class="table table-bordered no-margin admin-table">
						  <thead>					
							<tr class="bg-blue">
                              <th>#</th>
							  <th>Package Name</th>
							  <th>Min. Amount</th>
							  <th>ROI</th>
							  <th>Duration (In Days)</th>
                              <th>Description</th>
							  <th>Date</th>
							  <th>Action</th>
							 
							</tr>
						  </thead>
						  <tbody>
                            
                            @php ($count = 1)
                            @foreach($packages as $package)
							<tr>
							  <td>
								 {{ $count++ }}
								
							  </td>
                                
							  <td>{{ $package->name }}</td>
							  <td>{{ $package->min_amount }}</td>
							  <td>{{ $package->roi }}</td>
							  <td>{{ $package->duration_in_days }}</td>
							  <td>{{ $package->description }}</td>
							 
                                
                              <td>
								{{ $package->created_at }}
							  </td>
                                
                              <td>
                                <a href = "{{ route('admin.package.edit', ['id'=>$package->id]) }}" class = "btn btn-sm btn-warning ajax-popup-link"><i class = "fa fa-pencil"></i></a> 
                                  
                                <br /><br />
                                  
                                <a href = "{{ route('admin.package.delete', ['id'=>$package->id]) }}" class = "btn btn-sm btn-danger btn-action-delete"><i class = "fa fa-trash"></i></a> 
                                  
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