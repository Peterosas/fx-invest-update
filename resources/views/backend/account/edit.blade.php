

@extends('backend.layouts.app', ['title'=>'Secure your wallet :: ' . ($site_settings->site_name?? config('company.name')), 'page'=>($as == null)? 'Account Setup': 'Secure your wallet'])

@section('content')

<div class = "row">
    <div class = "col-12">
        <div class="card card-solid bg-black">
			<div class="card-header with-border">
			  <h5 class="card-title">
                @if (!$as)
                  Create Transaction PIN
                @else
                  PIN Information
                @endif
            </h5>
			</div>
			<!-- /.card-header -->
			<div class="card-body">
			  <div class="row">
                
                
				<div class="col-12">
                    @if (!$as)
                        @include("layouts.loader", ['loader_class'=>'bgw'])
                        @include("backend.account.partials.form")
                    @else
                    
                    <div class="row">
        
                            <div class = "col-12">
                        
                                <br />
                                <label>Transaction PIN </label>
                                <input type = "password" class = "wallet form-control text-yellow" value = "xxxxxxxxxx" readonly />
                            </div>
                    </div>
                    <br />
                    <a class = "btn btn-sm btn-success ajax-popup-link" href="{{ route('account.settings.check')}}">Edit PIN</a>
                    
                    @endif
				</div>
				<!-- /.col -->
			  </div>
			  <!-- /.row -->
			</div>
			<!-- /.card-body -->
		  </div>
    </div>
</div>


@endsection