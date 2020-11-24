@extends('backend.layouts.app', ['title'=>'Client Requests :: ' . ($site_settings->site_name?? config('company.name')), 'page'=>'Client Requests'])

@section('content')
    @include('backend.admin.partials.client_requests_table')
@endsection