<div class = "container">

    <div class = "row">
    
        <div class = "col-md-10 offset-md-1">
        
             <!-- Basic Forms -->
      <div class="card">
        <div class = "card-header card-primary text-center">
             <h3 class = "text-white">Account created on {{ $user->created_at }}</h3> 
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col">
                @include('layouts.loader', ['loader_class'=>'bgw'])
            	<form method = "post" action = "{{ route('admin.user.edit', ['id'=>$user->id]) }}" class = "form-submit">
                   
                    <div class = "row">
                         <div class = "col-md-4">
                            <div class="form-group">
                                <h5>First Name <span class="text-danger">*</span></h5>
                                <input type="text" name="first_name" class="form-control"  placeholder="First Name" value = "{{ $user->first_name?? '' }}" readonly>

                            </div>
                        </div>
                        
                        <div class = "col-md-4">
                            <div class="form-group">
                                <h5>Last Name <span class="text-danger">*</span></h5>
                                <input type="text" name="last_name" class="form-control"  placeholder="Last Name" value = "{{ $user->last_name?? '' }}" readonly>

                            </div>
                        </div>
                         <div class = "col-md-4">
                            <div class="form-group">
                                <h5>Country <span class="text-danger">*</span></h5>
                                <input type="text" name="country" class="form-control"  placeholder="Country" value = "{{ $user->country?? '' }}" readonly>

                            </div>
                        </div>
                    </div>
                    <div class = "row">
                         <div class = "col-md-4">
                            <div class="form-group">
                                <h5>Email Address <span class="text-danger">*</span></h5>
                                <input type="text" name="email" class="form-control"  placeholder="Email Address" value = "{{ $user->email?? '' }}" readonly>

                            </div>
                        </div>
                        
                         <div class = "col-md-4">
                            <div class="form-group">
                                <h5>Username <span class="text-danger">*</span></h5>
                                <input type="text" name="username" class="form-control"  placeholder="Username" value = "{{ $user->username?? '' }}" readonly>

                            </div>
                        </div>
                        
                        <div class = "col-md-4">
                            <div class="form-group">
                                <h5>Phone Number <span class="text-danger">*</span></h5>
                                <input type="text" name="phone" class="form-control"  placeholder="Phone" value = "{{ $user->phone?? '' }}" readonly>
                            </div>
                        </div>
                        
                    </div>
                   
                    
                    <div class = "row">
                        <div class = "col-md-4">
                            <div class="form-group">
                                <h5>Sponsor ID <span class="text-danger">*</span></h5>
                                <input type="text" name="sponsor_id" class="form-control"  placeholder="Sponsor ID" value = "{{ $user->sponsor_id?? '' }}" readonly>

                            </div>
                        </div>
                        
                        <div class = "col-md-4">
                            <div class="form-group">
                                <h5>Referral ID <span class="text-danger">*</span></h5>
                                <input type="text" name="ref_id" class="form-control"  placeholder="Referral ID" value = "{{ $user->ref_id?? '' }}" readonly>

                            </div>
                        </div>
                        
                        <div class = "col-md-4">
                            <div class="form-group">
                                <h5>User Role <span class="text-danger">*</span></h5>
                                <input type="text" name="role" class="form-control"  placeholder="User Role" value = "{{ $user->role?? '' }}" readonly>

                            </div>
                        </div>
                    </div>
                    
                     <div class = "row">
                        <div class = "col-md-6">
                            <div class="form-group">
                                <h5>Total Balance <span class="text-danger">*</span></h5>
                                <input type="text" name="total_amount" class="form-control"  placeholder="Total Balance" value = "{{ $user->total_amount?? 0 }}">

                            </div>
                        </div>
                        
                        <div class = "col-md-6">
                            <div class="form-group">
                                <h5>Total Bonus <span class="text-danger">*</span></h5>
                                <input type="text" name="total_bonus" class="form-control"  placeholder="Total Bonus" value = "{{ $user->total_bonus?? 0 }}">

                            </div>
                        </div>
                         
                         
                    </div>
                    
                    @csrf
                    
                    @if(getRole("user") == $user->role)    
                    <div class = "row">
                         <div class = "col-md-6">
                            <div class="form-group">
                                @php ($pass = mt_rand(1000000, 9999999))
                                
                                
                                <h5>Reset Password to  <strong>{{ $pass }}</strong>? <input type = "checkbox" name = "password_" value = {{ $pass }}> </h5>
                                <span class = "text-danger">Please note down this password before checking this option.</span>
                            </div>
                        </div>
                    </div>
                    @endif
                    
                    
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
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
      
            
        </div>
    
    </div>


</div>