<script src="<?php echo $this->webroot.'js/ckeditor/ckeditor.js'?>"></script>


<div class="categories form">
<?php echo $this->Form->create('Category'); ?>
	<fieldset>
		<legend><?php echo __('Admin Add Category'); ?></legend>
	<?php
		echo $this->Form->input('c_parent_id');
		echo $this->Form->input('c_name');
		//echo $this->Form->input('c_desc');
		
		echo $this->Form->input('Model.field'); 
		echo $this->ckeditor->load('Model.field');
		
		echo $this->Form->input('c_status');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Categories'), array('action' => 'index')); ?></li>
	</ul>
</div>
