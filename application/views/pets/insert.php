<?php echo form_open("pets/insert", array('role' => 'form')) ?>
	<?php // ------------------------------------------------ ?>
	<div class="form-group">
		<label for="name"><?php echo lang('pets_name') ?></label>
		<?php echo form_error('name'); ?>
		<input
			type="text"
			name="name"
			class="form-control"
			value="<?php echo set_value('name'); ?>"
			placeholder="<?php echo lang('pets_name_ph') ?>"
		>
	</div>
	<?php //  ------------------------------------------------ ?>
	<div class="form-group">
		<label for="type"><?php echo lang('pets_type') ?></label>
		<?php echo form_error('type'); ?>
		<input
			type="type"
			name="type"
			class="form-control"
			value="<?php echo set_value('type'); ?>"
			placeholder="<?php echo lang('pets_type_ph') ?>"
		>
	</div>
	<?php //  ------------------------------------------------ ?>
	<div class="form-group">
		<label for="sex"><?php echo lang('pets_sex') ?></label>
		<?php echo form_error('sex'); ?>
		<input
			type="sex"
			name="sex"
			class="form-control"
			value="<?php echo set_value('sex'); ?>"
			placeholder="<?php echo lang('pets_sex_ph') ?>"
		>
	</div>
	<?php //  ------------------------------------------------ ?>
	<div class="form-group">
		<label for="toyid"><?php echo lang('pets_toyid') ?></label>
		<?php echo form_error('toyid'); ?>
		<input
			type="toyid"
			name="toyid"
			class="form-control"
			value="<?php echo set_value('toyid'); ?>"
			placeholder="<?php echo lang('toyid') ?>"

		>
	</div>
	<div class="form-group">
		<label for="ownerid"><?php echo lang('pets_ownerid') ?></label>
		<?php echo form_error('toyid'); ?>
		<input
			type="ownerid"
			name="ownerid"
			class="form-control"
			value="<?php echo set_value('ownerid'); ?>"
			placeholder="<?php echo lang('ownerid') ?>"

		>
	</div>
	<?php echo form_submit('submit', lang('pets_submit'), 'class="btn btn-primary"') ?>
<?php echo form_close() ?>
