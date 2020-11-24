@extends('backend.layouts.app', ['title'=>'My Downline :: ' . ($site_settings->site_name?? config('company.name')), 'page'=>'My Downline'])

@section('content')
        @include('backend.layouts.common.referral_link')
		@include('backend.referrals.partials.referral_table')
@endsection