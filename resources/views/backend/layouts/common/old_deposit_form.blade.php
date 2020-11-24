
<div class = "row">
    <div class = "col-12">
        <div class="box">
        <!-- /.box-header -->
        <div class="box-body">
        @include('layouts.balance')
        <br /><br />
        <div class = "address-wrapper alert alert-default text-center">
            <div class = "address-box">All Payments should be made via this wallet address </div>
            <div class="input-group">
                    <input type="text" class="form-control" id="copy-link" value="{{ ($site_settings->wallet_address?? config('company.wallet.address')) }}" readonly>
                    <div class="input-group-append">
                      <button class="input-group-text btn-copy-link" data-clipboard-target="#copy-link" data-toggle="tooltip" title = "Copy to clipboard" href = "javascript:void(0)"><i class = "fa fa-copy"></i></button>
                    </div>
              </div>

        </div>

            
          <div class="row">
            <div class="col">
                

                    <div class = "row">
                        <div class = "col-md-6">
                            
                            <div class="jumbotron bg-white text-right">
                              <div>
                                    <img class = "img-blockchain" src = "{{ asset('fxu') }}/blockchain.png" alt = "" />
                              </div>
                              <h2 class = "font-size-25">Upload blockchain hash ID</h2>
                              <p class = "text-verify">For automatic 3x3 verification</p>
                            </div>


                        </div>
                        <div class = "col-md-6">
                            
                             @include('layouts.loader', ['loader_class' => 'bgw'])
            	               <form method = "post" action = "{{ route('trans.deposit') }}" class = "form-submit">
                            <h2 class = "title">Blockchain Payment Verification</h2>
                            <br />
                            
                            <div class="form-group">
                                <h5>Amount Paid <span>({{ config('company.currency.symbol') }})</span> <span class="text-danger">*</span></h5>
                                <input type="number" name="amount" class="form-control" placeholder="0.00">

                            </div>
                           
                             <div class="form-group">
                                <h5>Transaction Hash<span class="text-danger">*</span></h5>
                                <input type="text" name="trans_hash_id" class="form-control" placeholder="Transaction Hash">

                            </div>
                            
                            <div>
                                <button type="submit" class="btn btn-sm btn-warning">Upload Payment</button>
                            </div>
                                   
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