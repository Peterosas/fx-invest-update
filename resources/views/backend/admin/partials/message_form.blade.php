<div class = "container">

    <div class = "row">
    
        <div class = "col-md-10 offset-md-1">
        
             <!-- Basic Forms -->
      <div class="card">
        <div class = "card-header card-primary text-center">
             <h3 class = "text-white">Notify Clients</h3> 
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col">
                @include('layouts.loader', ['loader_class'=>'bgw'])
            	<form method = "post" action = "#" class = "form-submit">
                   <div class = "row">
                        <div class = "col-md-6">
                            <label for = "title">Title</label>
                            <input type = "text" name = "title" id = "title" value = {{old('title')}} class = form/>
                        </div>
                   </div>
                   <div class = "row">
                        <div class = "col-md-6">
                            <label for = "content">Your Message</label>
                            <textarea class = "form-control" name  = "content" id = "content">{{ old('content') }}</textarea>
                        </div>
                   </div>
                   <br />
                    <div class = "row">
                        <div class="col-6 text-left">
                                <button type="submit" class="btn btn-info">Send</button>
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