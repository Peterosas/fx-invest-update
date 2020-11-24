<form method = "post" action = "{{ route('account.settings') }}" class = "form-submit bg-white" style = "padding: 1em;" autocomplete="off">
					<div class="form-group row">
					  <div class="col-sm-12">
                          
                        @if(isset($update))
                          <h5>Update Transaction PIN</h5>
                          <hr />
                        @endif
                          
                       
					  </div>
                        
					</div>
    
                    <h3 class = "text-warning"><i class = 'fa fa-warning'></i> Keep your PIN safe!</h3>
                        
                    <div class="form-group row">
					  <div class="col-md-6">
						<input class="form-control" type="password" placeholder="Transaction PIN" name = "trans_pin" id ="trans_pin" value = "{{ old('trans_pin')?? '' }}">
                          
                        @error('trans_pin')
                            <span class="error" role="alert">
                                {{ $message }}
                            </span>
                        @enderror
                          
					  </div>
                        
                      <div class="col-md-6">
						<input class="form-control" type="password" placeholder="Confirm Transaction PIN" name = "trans_pin_confirmation" id ="trans_pin_confirmation" value = "{{ old('trans_pin_confirmation')?? '' }}">
                          
                        @error('trans_pin_confirmation')
                            <span class="error" role="alert">
                                {{ $message }}
                            </span>
                        @enderror
                          
					  </div>
					</div>
                    
                    @csrf
                        
                    <br />
					@if(isset($update))
                        <hr />
                        <div class = "row">
                            <div class = "col-6 text-right">
                                <a href = "javascript:void(0)" class = "btn btn-danger btn-sm btn-mf-close">Cancel</a>  
                            </div>
                            <div class = "col-6 text-left">
                                 <input type = "submit" value = "Update" class = "btn btn-success btn-sm" />
                            </div>
                        </div>
                    @else
                        <div class = "text-right">
                        <input type = "submit" value = "Create" class = "btn btn-success" />  
                      </div>
                    @endif
                        
                    </form>