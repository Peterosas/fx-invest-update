 <div class="container">
			
			<div class="col-md-6 offset-md-3">
			

				<!-- Section Title Starts -->
				<div class="text-center">
                    <!-- Logo Starts -->
                    <a href="{{ route('home') }}">
                        <img class="img-responsive" src="{{ asset('pages') }}/img/logo.png" alt="logo">
                    </a>
                    <!-- Logo Ends -->
                    
				    <h2 class="section-title">member <span>login</span></h2>
				    <p class="info-form">Access your wallet securely</p>
				</div>
				
                <!-- Section Title Ends -->
				<!-- Form Starts -->
				<form method="POST" action="{{ route('login') }}">
                    @csrf
				    <!-- Input Field Starts -->
				    <div class="form-group">
				        <input id="login_id" type="login_id" class="form-control @error('login_id') is-invalid @enderror" name="login_id" value="{{ old('login_id') }}" required autocomplete="login_id" autofocus placeholder="LOGIN ID">

                                @if ($errors->has('username') || $errors->has('email'))
                                    <span class="error">
                                        <strong>{{ $errors->first('username') ?: $errors->first('email') }}</strong>
                                    </span>
                                @endif
							</div>
							<!-- Input Field Ends -->
							<!-- Input Field Starts -->
							<div class="form-group">
								 <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="PASSWORD">

                                @error('password')
                                    <span class="error" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
							</div>
                    
                             
                            <div style = "padding-top: 1em; padding-bottom: 3em;">
                                <div class = "pull-left">
                                    <div class="form-group">
                                    <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                    </div>
                                </div> 
                                
                                <div class = "pull-right">
                                    <a href = "{{ route('password.request') }}">Forgot your password?</a>
                                </div>
                            </div>
                             
							<!-- Input Field Ends -->
							<!-- Submit Form Button Starts -->
							<div class="form-group">
								<button class="btn btn-primary" type="submit">login</button>
								<p class="text-center">don't have an account ? <a href="{{ route('register') }}">register now</a>
							</div>
							<!-- Submit Form Button Ends -->
						</form>
				<!-- Form Ends -->
            </div>

		</div>
        