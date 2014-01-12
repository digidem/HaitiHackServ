<p class="note">Fields with <span class="required">*</span> are required.</p>

<?php echo $form->errorSummary($model); ?>

<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>250)); ?>
<?php echo $form->error($model,'name'); ?>
	</div>

<!--<label for="Commune">Commune</label> --><?php 
					/* $this->widget('application.components.Relation', array(
							'model' => $model,
							'relation' => 'commune0',
							'fields' => 'name',
							'allowEmpty' => false,
							'style' => 'dropdownlist',
							)
						); */ ?>

	<div class="row">
		<?php echo $form->labelEx($model,'longitude'); ?>
<?php echo $form->textField($model,'longitude',array('size'=>45,'maxlength'=>45)); ?>
<?php echo $form->error($model,'longitude'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'latitude'); ?>
<?php echo $form->textField($model,'latitude',array('size'=>45,'maxlength'=>45)); ?>
<?php echo $form->error($model,'latitude'); ?>
	</div>

	

	<div class="row">
			</div>



		