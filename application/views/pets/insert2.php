<?php echo form_open('pets/insert', array('role' => 'form')) ?>
	<div class="form-group">
		<?php echo form_label(lang('pets_name'), 'name') ?>
		<?php echo form_error('name'); ?>
		<?php echo form_input('name', set_value('name'), 'class="form-control"') ?>
	</div>
	<div class="form-group">
		<?php echo form_label(lang('pets_type'), 'type') ?>
		<?php echo form_error('type'); ?>
		<?php
			// echo form_textarea('body', set_value('body'), 'class="form-control"')
			echo form_textarea('type', set_value('type'),  'class="form-control"')
		?>
	</div>
	<div class="form-group">
		<?php echo form_label(lang('pets_sex'), 'sex') ?>
		<?php echo form_error('sex'); ?>
		<?php
			// echo form_textarea('body', set_value('body'), 'class="form-control"')
			echo form_textarea('sex', set_value('sex'),  'class="form-control"')
		?>
	</div>
	<div class="form-group">
		<?php echo form_label(lang('pets_toyid'), 'toyid') ?>
		<?php echo form_error('toyid'); ?>
		<?php
			// echo form_textarea('body', set_value('body'), 'class="form-control"')
			echo form_textarea('toyid', set_value('toyid'),  'class="form-control"')
		?>
	</div>
	<div class="form-group">
		<?php echo form_label(lang('pets_ownerid'), 'ownerid') ?>
		<?php echo form_error('ownerid'); ?>
		<?php
			// echo form_textarea('body', set_value('body'), 'class="form-control"')
			echo form_textarea('ownerid', set_value('ownerid'),  'class="form-control"')
		?>
	</div>
	<?php echo form_submit('submit', lang('pets_submit'), 'class="btn btn-primary"') ?>
<?php echo form_close() ?>
