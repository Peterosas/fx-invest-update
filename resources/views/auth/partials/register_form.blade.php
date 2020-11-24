
<div class="payment_form white-bg wow fadeInDown" data-wow-duration="1.2s" data-wow-delay=".2s">
        <div class="info text-center">
            <h3>Create Account</h3>
            <p>Open account for free and start earning!</p>
        </div>
          
       <form method = "post" action = "{{ route('register') }}" class = "form-submit">
        @csrf
        <div class="row">
            <div class="col-md-6">
                 <input id="first_name" type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name" value="{{ old('first_name') }}" required autocomplete="first_name" autofocus placeholder="FIRST NAME">

                @error('first_name')
                    <span class="error" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            
            <div class = "col-md-6">
                <input id="last_name" type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{ old('last_name') }}" required autocomplete="last_name" placeholder="LAST NAME">

                @error('last_name')
                    <span class="error" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
                            
        <br />
     
        <div class = "row">
            <div class="col-md-12">
                <input id="phone" type="phone" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone" placeholder="PHONE">

                @error('phone')
                    <span class="error" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
           
         <br />
     
        <div class = "row">
            <div class="col-md-6">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="EMAIL ADDRESS">

                @error('email')
                        <span class="error" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                @enderror
            </div>
            
            <div class="col-md-6">
                <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" placeholder="USERNAME">

                @error('username')
                    <span class="error" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
        </div>
           
        <br />
           
        @php ($countries = Countries::getList('en', 'php'))

        <div class = "row">
            <div class = "col-12">
                
                    <select id = "country" name = "country" class = "form-control select2">
                        <option selected disabled>---------- Select Country -----------</option>
                        @foreach($countries as $country_code => $country)
                            <option value = "{{ $country_code }}">{{ $country }}</option>
                        @endforeach
                    </select>
               
            </div>   
        </div>
           
        <br />
        
     
        <div class = "row">
            <div class="col-md-6">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="password" placeholder="PASSWORD">

                @error('password')
                    <span class="error" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            
            <div class="col-md-6">
                <input id="password_confirmation" type="password" class="form-control @error('password_confirmation') is-invalid @enderror" name="password_confirmation" required autocomplete="password_confirmation" placeholder="CONFIRM PASSWORD">
            </div>
        </div>
    
         <br />
        
        <div class = "row">
            <div class="col-md-12">
                <span class = "text-danger">Leave Sponsor ID field blank, if no sponsor </span>
                
                <input id="sponsor_id" type="text" class="form-control @error('sponsor_id') is-invalid @enderror" name="sponsor_id"  autocomplete="sponsor_id" placeholder="Sponsor ID" value = "{{ $_GET['ref_id']?? '' }}" {{ isset($_GET['ref_id'])? 'readonly':'' }} >
            </div>
            
        </div>
        <br />
     
        
        <div class="submit_btn">
                <button class="boxed-btn5" type="submit">Register</button>
        </div>
     </form>
</div>