<table class="table border">
	<thead>
		<tr>
			<th>ID</th>
			<th>SMS TO</th>
			<th>SMS FROM</th>
			<th>MESSSAGE</th>
		</tr>
	</thead>
	<tbody>
<?php	foreach ($sms as $s) { ?>
			<tr>
				<td><?=$s->sid?></td>
				<td><?=$s->sms_to?></td>
				<td><?=$s->sms_from?></td>
				<td><?=$s->msg?></td>
			</tr>
<?php	} ?>
	</tbody>
</table>
<div id="papar"></div>

