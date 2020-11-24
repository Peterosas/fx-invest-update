<div class = "container">

    <div class = "row">
    
        <div class = "col-md-10 offset-md-1">
        
             <!-- Basic Forms -->
      <div class="card">
        @php ($user = Auth::user())
        <!-- /.card-header -->
        <div class="card-body">
          <div class="row">
            <div class="col">
                @include('layouts.loader', ['loader_class'=>'bgw'])
            	<form method = "post" action = "{{ route('admin.site.settings') }}" class = "form-submit">
					
                    <div class = "row">
                         <div class = "col-12">
                            <div class="form-group">
                                <h5>Company Wallet Addresses <span class="text-danger">*</span></h5>
                                
                                <textarea class = "form-control" style = "min-height: 200px" name = "wallet_address">{{ getCompanyWalletAddress() }}</textarea>

                            </div>
                        </div>
                    
                    </div>
                    <div class = "row">
                        <div class = "col-md-6">
                            <div class="form-group">
                                <h5>Referral Bonus (%)<span class="text-danger">*</span></h5>
                                <input type="number" name="referral_bonus" class="form-control"  placeholder="Referral Bonus" value = "{{ getReferralBonus() }}">

                            </div>
                        </div>
                        
                        <div class = "col-md-6">
                            <div class="form-group">
                                <h5>Min. Withdrawal Balance ({{ getCurrency() }})<span class="text-danger">*</span></h5>
                                <input type="number" name="min_balance" class="form-control"  placeholder="Minimum Withdrawal Balance" value = "{{ getMinWithdrawal()  }}">

                            </div>
                        </div>
                        
                    </div>
                    
                    
                    @csrf
                    
                
                    <br />
                    
                    <div class = "row">
                        <div class="col-6 text-right">
                                <a href="javascript:void(0)" class="btn btn-danger btn-mf-close">Cancel</a>  
                         </div>
                        
                        <div class="col-6 text-left">
                                <button type="submit" class="btn btn-info">Save</button>
                        </div>
                    
                    </div>
					
				</form>
            	
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
      
            
        </div>
    
    </div>


</div>