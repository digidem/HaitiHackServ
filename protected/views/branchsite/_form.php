<p class="note">Fields with <span class="required">*</span> are required.</p>

<?php echo $form->errorSummary($model); ?>

<div class="row">
		<?php echo $form->labelEx($model,'branch_name'); ?>
<?php echo $form->textField($model,'branch_name',array('size'=>60,'maxlength'=>250)); ?>
<?php echo $form->error($model,'branch_name'); ?>
	</div>

<label for="Organisation">Organisation</label><?php
					$this->widget('application.components.Relation', array(
							'model' => $model,
							'relation' => 'organisation0',
							'fields' => 'name',
							'allowEmpty' => false,
							'style' => 'dropdownlist',
							)
						); ?>

<label for="Quartier">Quartier</label><?php
					$this->widget('application.components.Relation', array(
							'model' => $model,
							'relation' => 'quartier0',
							'fields' => 'name',
							'allowEmpty' => true,
							'style' => 'dropdownlist',
							)
						); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'street_address'); ?>
<?php echo $form->textField($model,'street_address',array('size'=>60,'maxlength'=>250)); ?>
<?php echo $form->error($model,'street_address'); ?>
	</div>

<div class="row">
		<?php echo $form->labelEx($model,'site_phone'); ?>
<?php echo $form->textField($model,'site_phone',array('size'=>45,'maxlength'=>45)); ?>
<?php echo $form->error($model,'site_phone'); ?>
	</div>

<div class="row">
		<?php echo $form->labelEx($model,'url'); ?>
<?php echo $form->textField($model,'url',array('size'=>60,'maxlength'=>250)); ?>
<?php echo $form->error($model,'url'); ?>
	</div>

	<div class="row">
    Lat: <?php echo $form->textField($model, 'longitude', array('size'=>20, 'maxlength' => 45)); ?>

    Lon: <?php echo $form->textField($model, 'latitude', array('size'=>20, 'maxlength' => 45)); ?>

    <?php echo $form->error($model,'longitude'); ?>
	</div>

	<div class="row">

	</div>

	<div class="row">
  </div>

	<div class="row">
  </div>

  <label for="Category">Category</label><?php
      $this->widget('application.components.Relation', array(
          'model' => $model,
          'relation' => 'categories',
          'fields' => 'category_name',
          'allowEmpty' => false,
          'style' => 'checkbox',
          )
        ); ?>
