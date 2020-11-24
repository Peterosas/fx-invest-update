@extends('backend.layouts.app', ['title'=>'Airtime, Data, CableTV Subscription, Electricity :: ' . ($site_settings->site_name?? config('company.name')), 'page'=>'Dashboard'])


@section('content')
@php($billers = get_billers())

<div class = "mt-5 biller-container">
  <ul class="nav nav-pills" role="tablist">
    @foreach ($billers as $biller => $value)
    <li class="nav-item {{ isset($value['active_class'])? $value['active_class']:'' }}">
      <a class="nav-link" data-toggle="pill" href="#{{ $biller }}">{{ getFriendlyName($biller) }}</a>
    </li>
    @endforeach
  </ul>
 
  <!-- Tab panes -->
  <div class="tab-content mt-4 mb-3">
      
    @foreach ($billers as $biller => $value)
      <div id="{{ $biller }}" class="container tab-pane {{ $value['active_class']?? 'fade' }}"><br>
       
            
        
            @php ($submenu = $value['submenu']?? [])
            
            
            <div class = "container">
            @foreach ($submenu as $menu)
            
                <div class = "biller-cell">
                    <a href = "{{ 'billers?p=' . $biller . '&q=' . $menu['name'] }}" class = "btn btn-primary biller-blink p-0 ajax-popup-link" data-toggle="tooltip" title="{{ 'Click to purchase your ' . $menu['name'] }}" data-page = "{{ $value['page'] }}">
                        
                        <img src = "{{ asset('pages') . '/' . $menu['thumbnail'] }}" alt = "{{ $menu['description'] }}" />
                    
                        <span class = "biller-link-label">{{ $menu['name'] }}</span>
                    
                    </a>
                </div>
            
            @endforeach
            </div>
        

    </div>
    
    @endforeach

  </div>
</div>

@endsection

@push('css')

<style>

/* BILLER STYLING SECTION START */




</style>


@endpush


@push('js')

<script>

    
</script>

@endpush


