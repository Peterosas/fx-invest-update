@extends('backend.layouts.app', ['title'=>'All Users :: ' . ($site_settings->site_name?? config('company.name')), 'page'=>'Registered Users'])

@section('content')
		@include('backend.admin.partials.users_table')
@endsection