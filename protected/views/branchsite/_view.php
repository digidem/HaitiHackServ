<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('street_address')); ?>:</b>
	<?php echo CHtml::encode($data->street_address); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('longitude')); ?>:</b>
	<?php echo CHtml::encode($data->longitude); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('latitude')); ?>:</b>
	<?php echo CHtml::encode($data->latitude); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('url')); ?>:</b>
	<?php echo CHtml::encode($data->url); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('site_phone')); ?>:</b>
	<?php echo CHtml::encode($data->site_phone); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('branch_name')); ?>:</b>
	<?php echo CHtml::encode($data->branch_name); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('organisation')); ?>:</b>
	<?php echo CHtml::encode($data->organisation); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('quartier')); ?>:</b>
	<?php echo CHtml::encode($data->quartier); ?>
	<br />

	*/ ?>

</div>
