
<div class = "container">
    <div class = "row">
        <div class = "col-md-4 offset-md-4">
            
            @include("layouts.loader")
            
            <form method = "post" action = "{{ route('account.settings.check') }}" class = "form-submit" autocomplete="off" style = "background-color: #fff; padding: 1.5em;">
                <h2 class = "text-center">Hi, {{ Auth::user()->displayName() }}</h2> 
                <br />
                <div class = "form-group">
                    <input type = "password" class = "form-control text-center" autocomplete="false" placeholder = "Enter Transaction PIN" name = "trans_pin" />
                </div>
               
                @csrf
                <div class = "row">
                    <div class = "col-6">
                        <a href = "javascript:void(0)" class = "btn btn-sm btn-danger btn-mf-close">Cancel</a>  
                    </div>
                    <div class = "col-6 text-right">
                         <input type = "submit" value = "Proceed" class = "btn btn-sm btn-success" />
                    </div>
                </div>
               
            </form>
        </div>
    </div>
</div>