<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->name), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('presence_before_earthquake')); ?>:</b>
	<?php echo CHtml::encode($data->presence_before_earthquake); ?>
	<br />

	

	<b><?php echo CHtml::encode($data->getAttributeLabel('organisation')); ?>:</b>
	<?php echo CHtml::encode($data->organisation0['name']); ?>
	<br />


</div>
