@extends('backend.layouts.app', ['title'=>'Transaction History :: ' . ($site_settings->site_name?? config('company.name')), 'page'=>'Transaction History'])

@section('content')

<ul class="nav nav-pills mt-2 nav-pills-default" id="trans_tab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="all-tab" data-toggle="tab" href="#all" role="tab" aria-controls="all" aria-selected="true">ALL</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="withdrawal_history-tab" data-toggle="tab" href="#withdrawal_history" role="tab" aria-controls="withdrawal_history" aria-selected="false">WITHDRAWAL HISTORY</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="deposit_history-tab" data-toggle="tab" href="#deposit_history" role="tab" aria-controls="deposit_history" aria-selected="false">DEPOSIT HISTORY</a>
  </li>
</ul>
<div class="tab-content" id="trans_tab_content">
  <div class="tab-pane fade show active" id="all" role="tabpanel" aria-labelledby="all-tab">
      
      @include('backend.layouts.common.transactions')
    
  </div>
  <div class="tab-pane fade" id="withdrawal_history" role="tabpanel" aria-labelledby="withdrawal_history-tab">
      @include('backend.layouts.common.withdrawal_history')  
  </div>
  <div class="tab-pane fade" id="deposit_history" role="tabpanel" aria-labelledby="deposit_history-tab">
      @include('backend.layouts.common.deposit_history')
  </div>
</div>

@endsection