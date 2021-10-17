@extends('backend.layouts.app', ['title'=>'Payment Requests :: ' . ($site_settings->site_name?? config('company.name')), 'page'=>'Registered Users'])

@section('content')
		@include('backend.admin.partials.payments_table')
@endsection