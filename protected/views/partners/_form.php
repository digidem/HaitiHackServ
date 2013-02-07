<p class="note">Fields with <span class="required">*</span> are required.</p>

<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'presence_before_earthquake'); ?>
<?php echo $form->checkBox($model,'presence_before_earthquake'); ?>
<?php echo $form->error($model,'presence_before_earthquake'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>250)); ?>
<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
			</div>


<label for="Organisation">Belonging Organisation</label><?php 
					$this->widget('application.components.Relation', array(
							'model' => $model,
							'relation' => 'organisation0',
							'fields' => 'name',
							'allowEmpty' => false,
							'style' => 'dropdownlist',
							)
						); ?>
			