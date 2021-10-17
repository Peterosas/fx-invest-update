
<div class = "row text-center mb-4">
    <div class = "col-md-4 offset-md-4">
        <div class="card">
        <div class = "card-header">
            @include('layouts.balance')    
        </div>
        <!-- /.box-header -->
        <div class="card-body">
          <div class="row">
            <div class="col">
                    <div class = "row">
                        <div class = "col-12">
                            
                             @include('layouts.loader', ['loader_class' => 'bgw'])
            	               <form method = "post" action = "{{ route('trans.deposit') }}" class = "form-submit">
                            <h2 class = "title text-primary">Bitcoin Deposit</h2>
                            

                            @if($wallet_address)
                            <div class = "mt-1 mb-1">
                                {!! QrCode::size(180)->generate($wallet_address?? 'Service Unavailable. Try again later!') !!}
                            </div> 
                            
                            <div class="input-group">
                                    <input type="text" class="form-control" id="copy-link" value="{{ $wallet_address?? 'Service Unavailable. Try again later!' }}" readonly>
                                    <div class="input-group-append">
                                      <button type = "button" class="input-group-text btn-copy-link" data-clipboard-target="#copy-link" data-toggle="tooltip" title = "Copy to clipboard" href = "javascript:void(0)"><i class = "fa fa-copy"></i></button>
                                    </div>
                              </div>
                            <input type = "hidden" name = "wallet_address" value = "{{ $wallet_address?? '' }}" />
                                   
                            <p class = "mt-1">
                                <strong class = "font-size-20">IMPORTANT:</strong>
                                
                                Please use the above address only once.
                                If you have no bitcoin account yet, <a href = "https://blockchain.com" target="_blank">click here</a> to create one.
                            </p>
                           
                            <div class = "mt-2">
                                
                                <a href = "javascript:void(0)" class = "btn btn-sm btn-danger btn-mf-close">Cancel</a> 
                                
                                <a href = "http://blockchain.com/btc/address/{{ $wallet_address }}" target = "_blank" class = "btn btn-sm btn-primary">View Transaction Status</a>
                                
                            
                            </div>
                            @else
                              <h3>Oops! Service unavailable at the moment. Please try again later!
                              <div class = "mt-2">
                                <a href = "javascript:void(0)" class = "btn btn-danger btn-mf-close">Close</a> 
                              </div>
                            @endif


                                   
                            @csrf
                            </form>
                        </div>
                                

    
                    </div>
                
                
				
            	
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.box-body -->
      </div>
    </div>
</div>