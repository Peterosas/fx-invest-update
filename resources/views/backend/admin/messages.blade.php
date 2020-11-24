@extends('backend.layouts.app', ['title'=>'Notify Clients :: ' . ($site_settings->site_name?? config('company.name')), 'page'=>'Notify Clients'])

@section('content')
    @include('backend.admin.partials.messages_form')
    @include('backend.admin.partials.messages_table')
@endsection