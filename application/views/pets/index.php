<table class="table table-hover">
	<thead>
		<tr>
			<th><?php echo lang('pets_id') ?></th>
			<th><?php echo lang('pets_ownerid') ?></th>
			<th><?php echo lang('pets_toyid') ?></th>
			<th><?php echo lang('pets_name') ?></th>
			<th><?php echo lang('pets_type') ?></th>
			<th><?php echo lang('pets_sex') ?></th>
			<th><?php echo lang('control_entry') ?></th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($rows as $row) : ?>
		<tr>
			<?php foreach ($row as $val) : ?>
			<td><?php echo htmlspecialchars($val) ?></td>
			<?php endforeach ?>
			<td>
				<ul class="nav nav-pills">
					<?php echo myMenu($row->id, $action, $controller) ?>
				</ul>
			</td>
		</tr>
		<?php endforeach ?>
	</tbody>
</table>
