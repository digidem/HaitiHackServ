<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('service_name')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->service_name), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('description')); ?>:</b>
	<?php echo CHtml::encode($data->description); ?>
	<br />


</div>
