@extends('backend.layouts.app', ['title'=>'Client Requests :: ' . ($site_settings->site_name?? config('company.name')), 'page'=>'Site Settings'])

@section('content')
    @include('backend.admin.partials.site_settings_form')
@endsection