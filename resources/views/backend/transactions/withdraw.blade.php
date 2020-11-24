@extends('backend.layouts.app', ['title'=>'Cashout :: ' . ($site_settings->site_name?? config('company.name')), 'page'=>'Cashout'])

@section('content')
        @include('backend.layouts.common.referral_link')
		@include('backend.layouts.common.withdraw_form')
@endsection