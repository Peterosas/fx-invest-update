@extends('backend.layouts.app', ['title'=>'Deposit :: ' . ($site_settings->site_name?? config('company.name')), 'page'=>'Deposit'])

@section('content')
    @include('backend.layouts.common.deposit_form')
@endsection