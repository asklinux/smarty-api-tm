<div id="status3" class="panel panel-info">
  <div class="panel-heading">
    <h3 class="panel-title">New Client</h3>
  </div>
  <div class="panel-body">
    <div class="form-group">
   
    <label for="name" class="col-sm-2 control-label">Name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="name" placeholder="Client Full Name">
      
      <br />
    
    </div>
    
    <label for="phone" class="col-sm-2 control-label">Phone No</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="phone" placeholder="Client phone number">
      
      <br />
    
    </div>
   <label for="company" class="col-sm-2 control-label">Company Name </label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="company" placeholder="Company Name">
      
      <br />
     <button id="makeclient">Save Client</button>
    </div>
  </div>
</div>
</div>

<div id="status3"></div>

<script>
	
	$("#makeclient").click(function(){
		
		$.post('/index.php/panel/addclient',{phone : $("#phone").val() ,name:$("#name").val(),company:$("#company").val()},function(data){
			
			$("#borang3").hide();
			$("#status3").html('<div class="alert alert-success" role="alert">Data Save</div>');
			
		});
		
	});
	
</script>