<div id="borang" class="panel panel-info">
  <div class="panel-heading">
    <h3 class="panel-title">TTS to <?=$phoneno?></h3>
  </div>
  <div class="panel-body">
    <textarea id="msg" class="form-control" rows="3"></textarea>
    <br />
    <button id="makeit">Make TTS Call</button>
  </div>
</div>
<div id="status">
	
</div>

<script>
	
	$("#makeit").click(function(){
		
		$.post('/index.php/tmapi/tts_call',{phone : <?=$phoneno?>,msg:$("#msg").val()},function(data){
			
			$("#borang").hide();
			$("#status").html('<pre>'+data+'</pre>');
			
		});
		
	});
	
</script>