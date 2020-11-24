 <div class="payment_form white-bg wow fadeInDown" data-wow-duration="1.2s" data-wow-delay=".2s">
        <div class="info text-center">
            <h3>Sign In</h3>
            <p>Secure access to your account</p>
        </div>
          
       <form method = "post" action = "{{ route('login') }}" class = "form-submit">
        @csrf
        @if (session('status'))
            <div class="text-success">
                {{ session('status') }}
            </div>
        @endif
        <div class="row">
            <div class="col-lg-12">
                 <input id="login_id" type="login_id" class="form-control @error('login_id') is-invalid @enderror" name="login_id" value="{{ old('login_id') }}" required autocomplete="login_id" autofocus placeholder="Email or Username">

                 @if ($errors->has('username') || $errors->has('email'))
                    <span class="error">
                        <strong>{{ $errors->first('username') ?: $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>
        </div>
                            
        <br />
     
        <div class = "row">
            <div class="col-lg-12">
                 <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="PASSWORD">

                @error('password')
                    <span class="error" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
        <br />
        <div class = "row">
                <div class = "col-lg-12">
                    <p>  
                        
                        <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                        <label class="form-check-label" for="remember">
                            {{ __('Remember Me') }}
                        </label>
                    
                    </p>
                </div>
        </div>
        <hr />
        <div class="submit_btn text-center">
                <button class="boxed-btn5" type="submit">Login</button>
        </div>
     </form>
</div>