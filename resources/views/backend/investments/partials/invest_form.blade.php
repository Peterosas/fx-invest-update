 <!-- Basic Forms -->
      <div class="card mb-2 card-gray">
        <div class="card-header card-primary text-yellow">
           @include('layouts.balance')
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <div class="row">
            <div class="col">
                @include('layouts.loader', ['loader_class'=>'bgw'])
            	<form method = "post" action = "{{ route('invest.add') }}" class = "form-submit">
					
                    <div class = "row">
                        
                        <div class = "col-md-12">
                            <div class="form-group">
                                <h5>Package <span class="text-danger">*</span></h5>
                                
                                <select name = "package_id" class = "form-control" data-price-update>
                                    <option selected disabled>------- Select Package --------</option>
                                    
                                    @foreach($packages as $package)
                                        <option value = "{{ $package->id }}" data-target = '#amount' data-min-amount = '{{ $package->min_amount }}'>{{ $package->preparePack() }}</option>
                                    @endforeach
                                </select>

                            </div>
                        </div>
                        
                        
                        
                        <div class = "col-md-12">
                            <div class="form-group">
                                <h5>Amount <span>({{ config('company.currency.name') }})</span> <span class="text-danger">*</span></h5>
                                <input id = "amount" type="number" name="amount" class="form-control"  placeholder="0.00" disabled>

                            </div>
                        </div>
                        @csrf
                        
                    </div>
					
                    
			
					<div class="text-xs-right">
						<button type="submit" class="btn btn-warning">Invest</button>
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
      