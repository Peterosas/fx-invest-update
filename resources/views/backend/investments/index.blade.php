@extends('backend.layouts.app', ['title'=>'My Investments :: ' . ($site_settings->site_name?? config('company.name')), 'page'=>'Add New Investment'])

@section('content')

<div class = "row mt-3 mb-2">
    <div class = "col-md-4">
        @include('backend.investments.partials.invest_form')
    </div>
    <div class = "col-md-8">
        @include('backend.investments.partials.invest_table')
    </div>
</div>	
        
@endsection