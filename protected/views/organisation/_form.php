<p class="note">Fields with <span class="required">*</span> are required.</p>

<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>250)); ?>
<?php echo $form->error($model,'name'); ?>
	</div>

<div class="row">
		<?php echo $form->labelEx($model,'acronym'); ?>
<?php echo $form->textField($model,'acronym',array('size'=>20,'maxlength'=>20)); ?>
<?php echo $form->error($model,'acronym'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
<?php echo $form->textField($model,'email',array('size'=>45,'maxlength'=>45)); ?>
<?php echo $form->error($model,'email'); ?>
	</div>

	
	<div class="row">
		<?php echo $form->labelEx($model,'url'); ?>
<?php echo $form->textField($model,'url',array('size'=>60,'maxlength'=>250)); ?>
<?php echo $form->error($model,'url'); ?>
	</div>

	<div class="row">
		<?php //echo $form->labelEx($model,'present_before_earthquake'); ?>
<?php //echo $form->checkBox($model,'present_before_earthquake'); ?>
<?php //echo $form->error($model,'present_before_earthquake'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'coverage'); ?>
<?php echo $form->textField($model,'coverage',array('size'=>45,'maxlength'=>45)); ?>
<?php echo $form->error($model,'coverage'); ?>
	</div>


