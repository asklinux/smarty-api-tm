<table class="table border">
	<thead>
		<tr>
			<th>ID</th>
			<th>COUSTMER</th>
			<th>ORDER INFORMATION</th>
			<th>STAT</th>
		</tr>
	</thead>
	<tbody>
<?php	foreach ($order as $s) { ?>
			<tr>
				<td><?=$s->tid?></td>
				<td><?=$s->pelangan?></td>
				<td><?=$s->maklumat?></td>
				<td><?=$s->status?></td>
			</tr>
<?php	} ?>
	</tbody>
</table>