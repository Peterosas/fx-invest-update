<div class = "container">

    <div class = "row">
    
        <div class = "col-md-10 offset-md-2">
        
             <!-- Basic Forms -->
      <div class="card">
        
        <!-- /.card-header -->
        <div class="card-body">
          <div class="row">
            <div class="col">
                
                @if ($transaction->investment)
                    <h3 class = "text-black text-center">Investment Due Date: {{ $transaction->investment->getDueDate() }}</h3>
                    <hr />
                @endif
                
                <h5 class = "alert alert-warning text-center">
                    {{ ucfirst($transaction->trans_type) }} Transaction initiated on {{ $transaction->created_at }}
                </h5>
                
                @include('layouts.loader', ['loader_class'=>'bgw'])
            	<form method = "post" action = "{{ route('admin.client.request.edit', ['id'=>$transaction->id]) }}" class = "form-submit">
                    <div class = "row">
                        <div class = "col-md-12">
                            <div class="form-group">
                                <h5>Name <span class="text-danger">*</span></h5>
                                <input type="text" name="name" class="form-control"  placeholder="Name" value = "{{ $transaction->user->first_name . ' ' . $transaction->user->last_name }}" readonly>
                            </div>
                        </div>
                    </div>
                    
                    
                    <div class = "row">
                        @if ($transaction->trans_type == "withdrawal")
                         <div class = "col-12">
                            <div class="form-group">
                                
                                <h5>Client Wallet Address <span class="text-danger">*</span></h5>
                                <input type="text" name="wallet_address" class="form-control"  placeholder="Wallet Address" value = "{{ $transaction->to_address?? 'Not Required' }}" readonly>
                                
                            </div>
                        </div>
                        @elseif ($transaction->trans_type == "deposit")
                        <div class = "col-12">
                            <div class="form-group">
                                
                                <h5>Company Wallet Address <span class="text-danger">*</span></h5>
                                <input type="text" name="wallet_address" class="form-control"  placeholder="Wallet Address" value = "{{ $transaction->to_address?? 'Not Required' }}" readonly>
                            </div>
                        </div>
                        
                        @endif
                    </div>
                    <input type = "hidden" class = "sub-button" name = "sbutton" />
                    
                    
                    
					<div class = "row">
                                                
                        <div class = "col-md-4">
                            <div class="form-group">
                                <h5>Email <span class="text-danger">*</span></h5>
                                <input type="text" name="email" class="form-control"  placeholder="Email" value = "{{ $transaction->user->email }}" readonly>
                            </div>
                        </div>
                        
                        <div class = "col-md-4">
                            <div class="form-group">
                                <h5>Username <span class="text-danger">*</span></h5>
                                <input type="text" name="username" class="form-control"  placeholder="Username" value = "{{ $transaction->user->username }}" readonly>
                            </div>
                        </div>
                        
                        <div class = "col-md-4">
                            <div class="form-group">
                                <h5>Phone Number <span class="text-danger">*</span></h5>
                                <input type="text" name="phone" class="form-control"  placeholder="phone" value = "{{ $transaction->user->phone }}" readonly>
                            </div>
                        </div>
                        
                    </div>
                    <div class = "row">
                         <div class = "col-md-6">
                            <div class="form-group">
                                <h5>Amount <span class="text-danger">*</span></h5>
                                <input type="text" name="amount" class="form-control"  placeholder="Amount" value = "{{ $transaction->amount?? '' }}" readonly>

                            </div>
                        </div>
                        
                         <div class = "col-md-6">
                            <div class="form-group">
                                <h5>Old Balance <span class="text-danger">*</span></h5>
                                 <input type="text" name="old_balance" class="form-control"  placeholder="Old Balance" value = "{{ $transaction->old_balance?? '' }}" readonly>

                            </div>
                        </div>
                        
                    </div>
                    
                    @csrf
                    
                    <div class = "row">
                        <div class = "col-12">
                            <textarea class = "form-control" name = "description" placeholder="Remark" style = "min-height: 100px">{{ $transaction->description }}</textarea>
                        </div>
                    </div>
                    
                    <br />
                    
                    
                    
                    @php ($declined = ($transaction->status == "declined"))
                    <div class = "row">
                        <div class="@if ($declined) col-6 text-right @else col-4 text-right @endif">
                                <a href="javascript:void(0)" class="btn btn-warning btn-mf-close">Cancel</a>  
                        </div>
                        
                        <div class="@if ($declined) col-6 text-left @else col-4 text-center @endif">
                                <input type="submit" class="btn btn-success" name = "confirm" value = "Confirm" onclick = "this.form.sbutton.value = this.value" />
                        </div>
                        
                        @if($transaction->status != "declined")
                        
                        <div class="col-4 text-left">
                                <input type="submit" class="btn btn-danger" name = "decline" value = "Decline" onclick = "this.form.sbutton.value = this.value" />
                        </div>
                        @endif
                    
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