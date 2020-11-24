 <!-- Basic Forms -->
      <div class="card mb-4">
        <div class="card-header card-primary">
      
          <div class = "pull-left text-yellow">
            @include('layouts.balance')  
          </div>
                    
        
          @include("backend.layouts.common.reload")
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <div class="row">
            <div class="col-md-8 offset-md-2">
                @include('layouts.loader', ['loader_class'=>'bgw'])
            	<form method = "post" action = "{{ route('trans.withdraw') }}" class = "form-submit">
					
                    <div class = "row">
                        <div class = "col-md-12">
                            <div class="form-group">
                                <h5>Your Wallet Address <span class="text-danger">*</span></h5>
                                <input type="text" name="wallet_address" class="form-control"  placeholder="Wallet Address">

                            </div>
                        </div>
                    </div>
                    <br />
                    <div class = "row">
                        <div class = "col-md-6">
                            <div class="form-group">
                                <h5>Amount <span>({{ config('company.currency.name') }})</span> <span class="text-danger">*</span></h5>
                                <input type="number" name="amount" class="form-control"  placeholder="0.00">

                            </div>
                        </div>
                        @csrf
                        <div class = "col-md-6">
                            <div class="form-group">
                                <h5>PIN <span class="text-danger">*</span></h5>
                                <input type="password" name="trans_pin" class="form-control"  placeholder="Provide your transaction pin">

                            </div>
                        </div>
                        
                    </div>
					
                    
			
					<div class="text-xs-right">
						<button type="submit" class="btn btn-warning">Process</button>
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
      