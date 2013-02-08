<p class="note">Fields with <span class="required">*</span> are required.</p>

<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'fullname'); ?>
<?php echo $form->textField($model,'fullname',array('size'=>60,'maxlength'=>150)); ?>
<?php echo $form->error($model,'fullname'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'username'); ?>
<?php echo $form->textField($model,'username',array('size'=>45,'maxlength'=>45)); ?>
<?php echo $form->error($model,'username'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'password'); ?>
<?php echo $form->passwordField($model,'password',array('size'=>60,'maxlength'=>100)); ?>
<?php echo $form->error($model,'password'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
<?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>100)); ?>
<?php echo $form->error($model,'email'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'level'); ?>
<?php echo $form->dropDownList($model,'level',$model->getLevels()); ?>
<?php echo $form->error($model,'level'); ?>
	</div>


