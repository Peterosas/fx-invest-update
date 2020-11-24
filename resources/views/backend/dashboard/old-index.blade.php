@extends('backend.layouts.app', ['title'=>'Dashboard :: ' . ($site_settings->site_name?? config('company.name')), 'page'=>'Dashboard'])

@section('content')
		@include('backend.layouts.common.wallets')
		@include('backend.layouts.common.referral_link')
        @include('backend.investments.partials.invest_table', ['trans_count'=>10])
@endsection