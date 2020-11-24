@extends('backend.layouts.app', ['title'=>'Manage Package :: ' . ($site_settings->site_name?? config('company.name')), 'page'=>'Package'])

@section('content')
    
<div class = "row mb-5 mt-1">
    
    <div class = "col-md-12">
        
             <!-- Basic Forms -->
      <div class="card card-gray">
        @php ($user = Auth::user())
        <!-- /.card-header -->
        <div class="card-body">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs">
          <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#home">All Packages</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#menu1">Create New Package</a>
          </li>

        </ul>

        <!-- Tab panes -->
        <div class="tab-content mt-2 mb-5">
          <div class="tab-pane container active" id="home">@include('backend.admin.partials.package_table')</div>
          <div class="tab-pane container fade" id="menu1">@include('backend.admin.partials.package_form')</div>
        </div>

        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
      
            
        </div>
    
    </div>

    
@endsection