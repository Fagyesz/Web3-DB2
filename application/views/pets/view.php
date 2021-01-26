<dl class="dl-horizontal">
	<dt><?php echo lang('pets_id') ?></dt>
	<dd><?php echo $row->id ?></dd>

	<dt><?php echo lang('pets_name') ?></dt>
	<dd><?php echo htmlspecialchars($row->name) ?></dd>
	
	<dt><?php echo lang('pets_type') ?></dt>
	<dd><?php echo str_replace("\n", '<br>', htmlspecialchars($row->type)) ?></dd>

	<dt><?php echo lang('pets_sex') ?></dt>
	<dd><?php echo str_replace("\n", '<br>', htmlspecialchars($row->sex)) ?></dd>

	
	<dt><?php echo lang('pets_toyid') ?></dt>
	<dd><?php echo str_replace("\n", '<br>', htmlspecialchars($row->toyid)) ?></dd>

	<dt><?php echo lang('pets_ownerid') ?></dt>
	<dd><?php echo str_replace("\n", '<br>', htmlspecialchars($row->ownerid)) ?></dd>

	
</dl>	
