@extends('backend.layouts.app', ['title'=>'Dashboard :: ' . ($site_settings->site_name?? config('company.name')), 'page'=>'Dashboard'])

@section('content')

@include("backend.layouts.common.bills_nav")
   
@if (!Auth::user()->account_settings)
  @include("backend.layouts.common.pin_flash")
@endif    
  <div class="row">
      <div class="col-xl-4 grid-margin">
            @include("backend.layouts.common.referral_link")
            @include("backend.layouts.common.wallets")      
      </div>
      <div class="col-xl-8">
            @include("backend.layouts.common.quick_link")
            @include('backend.investments.partials.invest_table', ['trans_count'=>10, 'finvest_date'=>''])
      </div>
  </div>
@endsection