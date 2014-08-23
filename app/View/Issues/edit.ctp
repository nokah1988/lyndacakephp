<div class="issues form">
<?php echo $this->Form->create('Issue', array('type' => 'file')); ?>
	<fieldset>
		<legend><?php echo __('Edit Issue'); ?></legend>
	<?php
		echo $this->Form->input('issue_id');
		echo $this->Form->input('issue_publication_id');
		echo $this->Form->input('issue_number');
		echo $this->Form->input('issue_date_publication');
		echo $this->Form->input('issue_cover', array('type' => 'file'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Issue.issue_id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Issue.issue_id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Issues'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Publications'), array('controller' => 'publications', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Publication'), array('controller' => 'publications', 'action' => 'add')); ?> </li>
	</ul>
</div>
