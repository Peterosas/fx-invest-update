@extends('frontend.layouts.app', ['title'=>'Packages :: ' . ($site_settings->site_name?? config('company.name'))])


@section('content')
    <!-- Wrapper Starts -->
    <div class="wrapper">
        <!-- Header Starts -->
        @include('frontend.layouts.common.header')
        <!-- Header Ends -->
        
		<!-- Banner Area Starts -->
		@include('frontend.layouts.common.banner', ['page'=>'Our Packages'])
		<!-- Banner Area Ends -->
        
        @include('frontend.layouts.common.features')
        
        <!-- Pricing Starts -->
        @include("frontend.layouts.common.pricing")
        <!-- Pricing Ends -->
        <!-- Footer Starts -->
       
        @include('frontend.layouts.common.footer')

    </div>
    <!-- Wrapper Ends -->
@endsection