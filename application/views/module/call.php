
<button onclick="addnew()">New Client</button>
<hr/>
<table class="table border">
	<thead>
		<tr>
			<th>ID</th>
			<th>COUSTMER</th>
			<th>ORDER INFORMATION</th>
			<th>STAT</th>
			<th>FUNCTION</th>
		</tr>
	</thead>
	<tbody>
<?php	foreach ($call as $s) { ?>
			<tr >
				<td><?=$s->cid?></td>
				<td><?=$s->name?></td>
				<td><?=$s->phone?></td>
				<td><?=$s->syarikat?></td>
				<td>
					<button onclick="call('<?=$s->phone?>')" ><i class="ace-icon fa fa-phone"></i></button>
					<button onclick="sms('<?=$s->phone?>')">SMS</button>
					<button onclick="voip('<?=$s->phone?>')">TTS CALL</button>
					
				</td>
			</tr>
<?php	} ?>
	</tbody>
</table>
<script>
	function call(phone){
		
				var page_url = '/index.php/panel/makecall';
				$('#paparx').text('Looding  ...').show();
				$('#paparx').load(page_url,{no:phone}).show();
	}
	function sms(phone){
		
				var page_url = '/index.php/panel/makesms';
				$('#paparx').text('Looding  ...').show();
				$('#paparx').load(page_url,{no:phone}).show();
		
	}
	function voip(phone){
				var page_url = '/index.php/panel/makevoip';
				$('#paparx').text('Looding  ...').show();
				$('#paparx').load(page_url,{no:phone}).show();
		
	}
	function addnew(){
		
				var page_url = '/index.php/panel/makenew';
				$('#paparx').text('Looding  ...').show();
				$('#paparx').load(page_url).show();
	}
</script>