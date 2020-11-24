@extends('frontend.layouts.app', ['title'=>'Sign Up :: ' . ($site_settings->site_name?? config('company.name')) ])

@section('content')
    <!-- Wrapper Starts -->
    <div class="wrapper">
        <div class="container-fluid user-auth">
			<div class="hidden-xs col-sm-4 col-md-4 col-lg-4">
				<!-- Logo Starts -->
				<a class="logo" href="{{ route('home') }}">
					<img id="logo-user" class="img-responsive" src="{{ asset('pages') }}/images/logo-dark.png" alt="logo">
				</a>
				<!-- Logo Ends -->
			    
			</div>
			<div class="col-xs-12">
				<!-- Logo Starts -->
				<a class="visible-xs" href="{{ route('home') }}">
					<img id="logo" class="img-responsive mobile-logo" src="{{ asset('pages') }}/images/logo-dark.png" alt="logo">
				</a>
				<!-- Logo Ends -->
				<div class="form-container">
					<div>
						<!-- Section Title Starts -->
						<div class="row text-center">
							<h2 class="title-head hidden-xs">get <span>started</span></h2>
							 <p class="info-form">Open account for free and start earning!</p>
						</div>
						<!-- Section Title Ends -->
						<!-- Form Starts -->
						<form method="POST" action="{{ route('register') }}">
                        @csrf

							<!-- Input Field Starts -->
							<div class="form-group">
								<input id="first_name" type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name" value="{{ old('first_name') }}" required autocomplete="first_name" autofocus placeholder="FIRST NAME">

                                @error('first_name')
                                    <span class="error" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
							</div>
                            
                            <div class="form-group">
								<input id="last_name" type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}" required autocomplete="last_name" placeholder="LAST NAME">

                                @error('last_name')
                                    <span class="error" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
							</div>
							<!-- Input Field Ends -->
                            
                            <!-- Input Field Starts -->
							<div class="form-group">
								<input id="phone" type="phone" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone" placeholder="PHONE">

                                @error('phone')
                                    <span class="error" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
							</div>
							<!-- Input Field Ends -->
                            
							<!-- Input Field Starts -->
							<div class="form-group">
								<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="EMAIL ADDRESS">

                                @error('email')
                                    <span class="error" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
							</div>
                            
                            <div class="form-group">
								<input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" placeholder="USERNAME">

                                @error('username')
                                    <span class="error" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
							</div>
                            
							<!-- Input Field Ends -->
							<!-- Input Field Starts -->
							<div class="form-group">
								<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="password" placeholder="PASSWORD">

                                @error('password')
                                    <span class="error" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
							</div>
							<!-- Input Field Ends -->
                            
                            <!-- Input Field Starts -->
							<div class="form-group">
								<input id="password_confirmation" type="password" class="form-control @error('password_confirmation') is-invalid @enderror" name="password_confirmation" required autocomplete="password_confirmation" placeholder="CONFIRM PASSWORD">
							</div>
							<!-- Input Field Ends -->
                            
                            <span class = "text-danger">Leave Sponsor ID field blank, if no sponsor </span>
                            <!-- Input Field Starts -->
							<div class="form-group">
								<input id="sponsor_id" type="text" class="form-control @error('sponsor_id') is-invalid @enderror" name="sponsor_id"  autocomplete="sponsor_id" placeholder="Sponsor ID" value = "{{ $_GET['ref_id']?? '' }}" {{ isset($_GET['ref_id'])? 'readonly':'' }} >
							</div>
							<!-- Input Field Ends -->
                            
                            
							<!-- Submit Form Button Starts -->
							<div class="form-group">
								<button class="btn btn-primary" type="submit">create account</button>
								<p class="text-center">already have an account ? <a href="{{ route('login') }}">Login</a>
							</div>
							<!-- Submit Form Button Ends -->
						</form>
						<!-- Form Ends -->
					</div>
				</div>
				
			</div>
		</div>
        
    </div>
    <!-- Wrapper Ends -->
@endsection