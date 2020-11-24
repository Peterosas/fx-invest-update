@extends('frontend.layouts.app', ['title'=>'Login :: ' . ($site_settings->site_name?? config('company.name'))])


@section('content')
@include("frontend.layouts.common.header_area")
<div class = "container form-container">
    <div class = "row">
        <div class = "col-md-8 offset-md-2">
           <ul class="nav nav-tabs" id="authTab" role="tablist">
              <li class="nav-item">
                <a class="nav-link {{ $login_active?? '' }}" id="login_panel-tab" data-toggle="tab" href="#login_panel" role="tab" aria-controls="login_panel" aria-selected="true">Login</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ $register_active?? '' }}" id="register_account_panel-tab" data-toggle="tab" href="#register_account_panel" role="tab" aria-controls="register_account_panel" aria-selected="false">New Account</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ $password_reset_active?? '' }}" id="recover_pass_panel-tab" data-toggle="tab" href="#recover_pass_panel" role="tab" aria-controls="recover_pass_panel" aria-selected="false">Change Password</a>
              </li>
            </ul>
            <div class="tab-content" id="authTabContent">
              <div class="tab-pane fade {{ isset($login_active)? 'show ' . $login_active: '' }}" id="login_panel" role="tabpanel" aria-labelledby="login_panel-tab">
                <div class = "row">
                    <div class = "col-md-8 offset-md-2">
                        @include("auth.partials.login_form")
                    </div>  
                </div>  
              </div>
              <div class="tab-pane fade {{ isset($register_active)? 'show ' . $register_active: '' }}" id="register_account_panel" role="tabpanel" aria-labelledby="register_account_panel-tab">
                  <div class = "col-md-10 offset-md-1">
                    @include("auth.partials.register_form")
                  </div>
                </div>
              <div class="tab-pane fade {{ isset($password_reset_active)? 'show ' . $password_reset_active: '' }}" id="recover_pass_panel" role="tabpanel" aria-labelledby="recover_pass_panel-tab">
                  <div class = "col-md-8 offset-md-2">
                    @include("auth.partials.recover_pass_form")
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include("frontend.layouts.common.footer_area")
@endsection

@push('css')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />

@endpush

@push('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
<script>
    $(function() {
        $(".form-submit").on("submit", function() {
           
            $(this).hide();
            
        });
        
        $('.select2').select2();
    });
</script>


@endpush