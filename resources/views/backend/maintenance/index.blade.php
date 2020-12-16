@extends('backend.layouts.app', ['title'=>'My Investments :: ' . ($site_settings->site_name?? config('company.name')), 'page'=>'Add New Investment'])

@section('content')

<div class = "row mt-3 mb-2">
    <div class = "col-md-12">
        <h1>Sorry, we're down for maintenance</h1>
        <p>We'll be back in two(2) weeks. Please check regularly for update!</p>
    </div>
</div>	
        
@endsection