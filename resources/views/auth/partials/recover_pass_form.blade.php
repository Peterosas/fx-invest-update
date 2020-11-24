 <div class="payment_form white-bg wow fadeInDown" data-wow-duration="1.2s" data-wow-delay=".2s">
     
       <form method = "post" action = "{{ route('password.email') }}" class = "form-submit">
        @csrf
        @if (session('status'))
            <div class="text-success">
                {{ session('status') }}
            </div>
        @endif
           
        <div class="row">
            <div class="col-lg-12">
                 <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Your email address">

                @error('email')
                    <span class="error" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
                            
        <br />
           
        <div class="submit_btn">
            <button class="boxed-btn5" type="submit">{{ __('Send Password Reset Link') }}</button>
        </div>
     </form>
</div>