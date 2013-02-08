<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />
        
        <b><?php echo CHtml::encode($data->getAttributeLabel('branchsite')); ?>:</b>
	<?php echo CHtml::encode($data->branchsite0['branch_name']); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('services')); ?>:</b>
	<?php echo CHtml::encode($data->services0['service_name']); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('prix_service')); ?>:</b>
	<?php echo CHtml::encode($data->prix_service); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('referral_necessary')); ?>:</b>
	<?php echo CHtml::encode($data->referral_necessary); ?>
	<br />

	


</div>
