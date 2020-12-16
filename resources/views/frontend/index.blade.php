@extends('frontend.layouts.app', ['title'=>'Home :: ' . ($site_settings->site_name?? config('company.name'))])

@section("content")


    @include("frontend.layouts.common.header_area")
    @include("frontend.layouts.common.slider")
    @include("frontend.layouts.common.packages")
    @include("frontend.layouts.common.about_area")
    @include("frontend.layouts.common.footer_area")


@endsection


@include("frontend.layouts.common.slider_asset")