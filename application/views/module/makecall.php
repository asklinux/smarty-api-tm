<div id="status3" class="panel panel-info">
  <div class="panel-heading">
    <h3 class="panel-title">Call  <?=$phoneno?></h3>
  </div>
  <div class="panel-body">
    <div class="form-group">
   
    <label for="inputPassword" class="col-sm-2 control-label">Staff No Incharge</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="staffno" placeholder="staff phone number">
      
      <br />
    <button id="makecall">Make Call</button>
    </div>
    
  </div>
</div>
</div>

<div id="status3"></div>

<script>
	
	$("#makecall").click(function(){
		
		$.post('/index.php/tmapi/click_to_dail',{phone : <?=$phoneno?>,staffno:$("#staffno").val()},function(data){
			
			$("#borang3").hide();
			$("#status3").html('<pre>'+data+'</pre>');
			
		});
		
	});
	
</script>