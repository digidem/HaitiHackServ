<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('branch_name')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->branch_name), array('view', 'id'=>$data->id)); ?>
	<br />
        
        <b><?php echo CHtml::encode($data->getAttributeLabel('organisation')); ?>:</b>
	<?php echo CHtml::encode($data->organisation0['name']); ?>
        <br />
        
        <b><?php echo CHtml::encode($data->getAttributeLabel('site_phone')); ?>:</b>
	<?php echo CHtml::encode($data->site_phone); ?>
	<br />
        
        <b><?php echo CHtml::encode($data->getAttributeLabel('quartier')); ?>:</b>
	<?php echo CHtml::encode($data->quartier0['name']); ?>
	<br />
        
     	 

</div>
