<div id="borang2" class="panel panel-info">
  <div class="panel-heading">
    <h3 class="panel-title">Send SMS to <?=$phoneno?></h3>
  </div>
  <div class="panel-body">
    <textarea id="msg" class="form-control" rows="3"></textarea>
    <br />
    <button id="makesms">Send SMS</button>
  </div>
</div>

<div id="status2">
	
</div>

<script>
	
	$("#makesms").click(function(){
		
		$.post('/index.php/tmapi/send_sms',{phone : '<?=$phoneno?>',msg:$("#msg").val()},function(data){
			
			$("#borang2").hide();
			$("#status2").html('<pre>'+data+'</pre>');
			
		});
		
	});
	
</script>