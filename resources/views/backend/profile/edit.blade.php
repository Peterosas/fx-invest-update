
@extends('backend.layouts.app', ['title'=>'Edit Profile :: ' . ($site_settings->site_name?? config('company.name')), 'page'=>'Edit Profile'])

@section('content')

<div class = "row">
    <div class = "col-12">
        <div class="card">
			<div class="card-header card-primary">
			  <h3 class="card-title">Personal details</h3>
			</div>
			<!-- /.card-header -->
			<div class="card-body">
			 <div class="row">
				<div class="col-md-6">
					<div class="form-group">
					  <label >First Name</label>
					  <div>
						<input class="form-control" type="text" placeholder="First Name" name = "first_name" id ="first_name" value = "{{ old('first_name')?? Auth::user()->first_name }}">
                          
                        @error('first_name')
                            <span class="error" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                          
					  </div>
					</div>
                </div>
                  
                <div class = "col-md-6">
                    <div class="form-group">
					  <label >Last Name</label>
					  <div>
						<input class="form-control" type="text" placeholder="Last Name" name = "last_name" id = "last_name" value = "{{ old('last_name')??Auth::user()->last_name }}">
                          
                        @error('last_name')
                            <span class="error" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
					  </div>
					</div>
                </div>
                  
            </div>
           
            <div class = "row">
                <div class = "col-md-6">
                     <div class="form-group">
                              <label >Email Adress</label>
                              
                                <input class="form-control" type="email" placeholder="Email Address" name = "email" id ="email" value = "{{ old('email')?? Auth::user()->email }}" readonly>
                                @error('email')
                                    <span class="error" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                              
                    </div>
                </div>
                
                <div class = "col-md-6">
                    <div class="form-group">
					  <label for = "phone">Phone Number</label>
					  
						<input class="form-control" type="tel" placeholder="Phone Number" name = "phone" id ="phone" value = "{{ old('phone')?? Auth::user()->phone }}">
                          
                        @error('phone')
                            <span class="error" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

					</div>
                </div>
            </div>
                
           
                
					<div class="form-group">
					  <button type="submit" class="btn btn-success">Update</button>
					</div>
				</div>
				<!-- /.col -->
			  </div>
    </div>
</div>

<div class = "row">
    <div class = "col-12">
        <div class="card">
			<div class="card-header card-primary">
			  <h3 class="card-title">Change Password</h3>
			</div>
			<!-- /.card-header -->
			<div class="card-body">
            <form method = "post" action = "{{ route('user.password.update') }}">
			 <div class="row">
				<div class="col-md-4">
					<div class="form-group">
					  <label >Current Password</label>
					  <div>
						<input class="form-control" type="password" placeholder="Current Password" name = "current_password" id = "current_password" required >
                          
                        @error('current_password')
                            <span class="error" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                          
					  </div>
					</div>
                </div>
                 @csrf
                 
                 <div class="col-md-4">
					<div class="form-group">
					  <label >New Password</label>
					  <div>
						<input class="form-control" type="password" placeholder="New Password" name = "new_password" id = "new_password" required >
                          
                        @error('new_password')
                            <span class="error" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                          
					  </div>
					</div>
                </div>
                 
                 <div class="col-md-4">
					<div class="form-group">
					  <label >Confirm New Password</label>
					  <div>
						<input class="form-control" type="password" placeholder="Confirm New Password" name = "new_password_confirmation" id = "new_password_confirmation" required >
                          
                        @error('new_password_confirmation')
                            <span class="error" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                          
					  </div>
					</div>
                </div>
            </div>
           
                
					<div class="form-group">
					  <button type="submit" class="btn btn-success">Update</button>
					</div>
            </form>
            </div>
        </div>
    </div>
</div>


@endsection