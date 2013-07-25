<div class="categories view">
<h2><?php  echo __('Category'); ?></h2>
	<dl>
		<dt><?php echo __('C Id'); ?></dt>
		<dd>
			<?php echo h($category['Category']['c_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('C Parent Id'); ?></dt>
		<dd>
			<?php echo h($category['Category']['c_parent_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('C Name'); ?></dt>
		<dd>
			<?php echo h($category['Category']['c_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('C Status'); ?></dt>
		<dd>
			<?php echo h($category['Category']['c_status']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Category'), array('action' => 'edit', $category['Category']['c_id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Category'), array('action' => 'delete', $category['Category']['c_id']), null, __('Are you sure you want to delete # %s?', $category['Category']['c_id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Categories'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Category'), array('action' => 'add')); ?> </li>
	</ul>
</div>
