<div class="categories form">
<?php echo $this->Form->create('Category'); ?>
	<fieldset>
		<legend><?php echo __('Add Category'); ?></legend>
	<?php
		echo $this->Form->select('c_parent_id',array($c_parent_id));
		echo $this->Form->input('c_name');
		echo $this->Form->input('c_status',array('type'=>'checkbox'));
	?>
  <?php 
	  $config['resize_enabled'] = 'false';
	  $events['instanceReady'] = 'function (ev) { }';
	  echo $this->Cksource->ckeditor('Page.content', array('events'=>$events,'escape' => false,'config'=>$config, 'id'=>'content'));?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Categories'), array('action' => 'index')); ?></li>
	</ul>
</div>
