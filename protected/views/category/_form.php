<p class="note">Fields with <span class="required">*</span> are required.</p>

<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'category_name'); ?>
<?php echo $form->textField($model,'category_name',array('size'=>60,'maxlength'=>100)); ?>
<?php echo $form->error($model,'category_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'description'); ?>
<?php echo $form->textArea($model,'description',array('rows'=>6, 'cols'=>50)); ?>
<?php echo $form->error($model,'description'); ?>
	</div>


<label for="Branchsite">Branchsite</label><?php 
					$this->widget('application.components.Relation', array(
							'model' => $model,
							'relation' => 'branchsites',
							'fields' => 'branch_name',
							'allowEmpty' => false,
							'style' => 'dropDownList',
							)
						); ?>