<table class="table border">
	<thead>
		<tr>
			<th>ID</th>
			<th>REMIND TIME</th>
			<th>START DATE</th>
			
			<th>RESIVEER</th>
			<th>TASK NAME</th><th>MESSAGE</th>
			<th>FUNCTION</th>
		</tr>
	</thead>
	<tbody>
<?php	foreach ($task as $s) { ?>
			<tr>
				<td><?=$s->tid?></td>
				<td><?=$s->remindDateTime?></td>
				<td><?=$s->startDateTime?></td>
				
				<td><?=$s->recipient?></td><td><?=$s->message?></td>
				<td><?=$s->taskName?></td>
				<td> 
				
					<button><i class="ace-icon fa fa-trash"></i></button>
					<button>Edit</button>
					
				</td>
			</tr>
<?php	} ?>
	</tbody>
</table>

<script>
	function call(phone){
		alert(phone);
	}
</script>