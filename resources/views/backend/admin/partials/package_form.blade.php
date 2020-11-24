<div class = "card">
    <div class = "card-header card-primary">
        @if (!Str::startsWith(Route::currentRouteName(), 'admin.package.edit'))
            <h4 class = "card-title">New Package</h4>
        
            @php ($route = route('admin.packages') )
        @else 
            <h4 class = "card-title">Update Package</h4>
             @php ($route = route('admin.package.edit', ['id'=>$package->id]) )
        @endif
        
    </div>
    <div class = "card-body">
        
        <div class = "row">
            <div class = "col-md-8 offset-md-2">
                <div class="row">
                    <div class="col">
                        @include('layouts.loader', ['loader_class'=>'bgw'])
                        <form method = "post" action = "{{ $route }}" class = "form-submit">
					
                     <div class = "row">
                        <div class = "col-md-6">
                            <div class="form-group">
                                <h5>Package Name<span class="text-danger">*</span></h5>
                                <input type="text" name="name" class="form-control"  placeholder="Package Name" value = "{{ $package->name?? ''}}" >

                            </div>
                        </div>
                         
                        <div class = "col-md-6">
                            <div class="form-group">
                                <h5>Minimum Amount ({{ getCurrency() }})<span class="text-danger">*</span></h5>
                                <input type="number" name="min_amount" class="form-control"  placeholder="Minimum Investment Amount" value = "{{ $package->min_amount?? '' }}">

                            </div>
                        </div>
                        
                        <div class = "col-md-6">
                            <div class="form-group">
                                <h5>ROI (%)<span class="text-danger">*</span></h5>
                                <input type="number" name="roi" class="form-control"  placeholder="ROI e.g 1, 2, 3, etc." value = "{{ $package->roi?? '' }}">

                            </div>
                        </div>
                         
                        <div class = "col-md-6">
                            <div class="form-group">
                                <h5>Duration (in days)<span class="text-danger">*</span></h5>
                                <input type="number" name="duration_in_days" class="form-control"  placeholder="ROI Duration in Days" value = "{{ $package->duration_in_days?? 0 }}" >

                            </div>
                        </div>
                        
                    </div>
                    
                    <div class = "row">
                         <div class = "col-12">
                            <div class="form-group">
                                <h5>Description <span class="text-danger">optional</span></h5>
                                
                                <textarea class = "form-control" style = "min-height: 200px" name = "description">{{ $package->description?? ''}}</textarea>

                            </div>
                        </div>
                    
                    </div>
                   
                    
                    
                    @csrf
                    
                
                    <br />
                    
                    <div class = "row">
                        <div class="col-6 text-right">
                                <a href="javascript:void(0)" class="btn btn-danger btn-mf-close">Cancel</a>  
                         </div>
                        
                        <div class="col-6 text-left">
                                <button type="submit" class="btn btn-info">Save</button>
                        </div>
                    
                    </div>
					
				</form>
            	
            </div>
            <!-- /.col -->
          </div>
<!-- /.row -->
            </div>
        </div>

    </div>
</div>