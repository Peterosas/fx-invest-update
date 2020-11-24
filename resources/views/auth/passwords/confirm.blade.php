@extends('frontend.layouts.app', ['title'=>'Confirm Password :: ' . ($site_settings->site_name?? config('company.name'))])


@section('content')
        <div class="container-fluid user-auth">
			<div class="hidden-xs col-sm-4 col-md-4 col-lg-4">
				<!-- Logo Starts -->
				<a class="logo" href="{{ route('home') }}">
					<img id="logo-user" class="img-responsive" src="{{ asset('pages') }}/images/logo-dark.png" alt="logo">
				</a>
				<!-- Logo Ends -->
				@include('frontend.layouts.common.auth-slider')
			</div>
			<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
				<!-- Logo Starts -->
				<a class="visible-xs" href="{{ route('home') }}">
					<img id="logo" class="img-responsive mobile-logo" src="{{ asset('pages') }}/images/logo-dark.png" alt="logo">
				</a>
				<!-- Logo Ends -->
				<div class="form-container">
					<div>
						<!-- Section Title Starts -->
						<div class="row text-center">
							<h3 class="title-head"> {{ __('Please confirm your password before continuing.') }} </h3>
							 
						</div>
                        
                        
						<!-- Section Title Ends -->
						<!-- Form Starts -->
						 <form method="POST" action="{{ route('password.confirm') }}">
                        @csrf
                             
                            @if (session('status'))
                            <div class="text-success">
                                {{ session('status') }}
                            </div>
                            @endif
                             
							<!-- Input Field Starts -->
							<div class="form-group">
								<input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="error" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
							</div>
                             
                             
							<!-- Input Field Ends -->
							<!-- Submit Form Button Starts -->
							<div class="form-group">
								<button type="submit" class="btn btn-primary">
                                    {{ __('Confirm Password') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
							</div>
							<!-- Submit Form Button Ends -->
						</form>
						<!-- Form Ends -->
					</div>
				</div>
				
			</div>
		</div>
        
@endsection