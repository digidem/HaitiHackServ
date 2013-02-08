<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->name), array('view', 'id'=>$data->id)); ?>
	<br />

	

	

	<b><?php echo CHtml::encode($data->getAttributeLabel('commune')); ?>:</b>
	<?php echo CHtml::encode($data->commune0['name']); ?>
	<br />


</div>
