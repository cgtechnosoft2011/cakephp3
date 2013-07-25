<div class="categories form">
<?php echo $this->Form->create('Category'); ?>
	<fieldset>
		<legend><?php echo __('Admin Edit Category'); ?></legend>
	<?php
		echo $this->Form->input('c_id');
		echo $this->Form->input('c_parent_id');
		echo $this->Form->input('c_name');
		echo $this->Form->input('c_status');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Category.c_id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Category.c_id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Categories'), array('action' => 'index')); ?></li>
	</ul>
</div>
