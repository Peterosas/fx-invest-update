@extends('frontend.layouts.app', ['title'=> ($site_settings->site_name?? config('company.name')) . ' - Capital Investments Platform'])


@section('content')
        @include('frontend.layouts.common.header')
        <!-- Slider Starts -->
        @include("frontend.layouts.common.slider")
        <!-- Slider Ends -->
        <!-- Features Section Starts -->
        @include("frontend.layouts.common.features")
        <!-- Features Section Ends -->
        <!-- About Section Starts -->
        @include("frontend.layouts.common.about")
        <!-- About Section Ends -->
        <!-- Features and Video Section Starts -->
        @include("frontend.layouts.common.image-block")
        <!-- Features and Video Section Ends -->
        <!-- Pricing Starts -->
        @include("frontend.layouts.common.pricing")
        <!-- Pricing Ends -->
        <!-- Bitcoin Calculator Section Starts -->
        @include("frontend.layouts.common.bitcoin-calculator")
        <!-- Bitcoin Calculator Section Ends -->
        <!-- Quote and Chart Section Starts -->
        @include("frontend.layouts.common.image-block2")
        <!-- Quote and Chart Section Ends -->

        <!-- Call To Action Section Starts -->
        @include("frontend.layouts.common.call-action-all")
        <!-- Call To Action Section Ends -->

        @include('frontend.layouts.common.footer')
@endsection