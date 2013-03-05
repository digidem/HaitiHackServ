<?php $this->widget('ext.yiiselect2.YiiSelect2', array('target' => 'select',)); ?>

<p class="note">Fields with <span class="required">*</span> are required.</p>

<?php echo $form->errorSummary($model); ?>

<div class="row">
	<?php echo $form->labelEx($model,'branch_name'); ?>
	<?php echo $form->textField($model, 'branch_name',
		array(
			'size'=>60,
			'maxlength'=>250,
			'placeholder' => 'Branch Name'
	)); ?>
	<?php echo $form->error($model,'branch_name'); ?>
</div>

<div class="row">
  <label for="Organisation">Organisation</label>
  <?php
    $criteria = new CDbCriteria(array('order'=>'name'));

    $this->widget('application.components.Relation', array(
      'model' => $model,
      'relation' => 'organisation0',
      'fields' => 'name',
      'allowEmpty' => false,
      'style' => 'dropdownlist',
      'parentObjects' => Organisation::model()->findAll($criteria),
    ));
  ?>
</div>

<div class="row">
  <label for="Departement">Departement</label>
  <?php $this->widget('application.components.Relation', array(
    'model' => $model,
    'relation' => 'departement0',
    'fields' => 'name',
    'allowEmpty' => false,
    'style' => 'dropdownlist',
    'parentObjects' => Departement::model()->findAll($criteria),
  )); ?>
</div>

<div class="row">
  <label for="Commune">Commune</label>
  <?php $this->widget('application.components.Relation', array(
    'model' => $model,
    'relation' => 'commune0',
    'fields' => 'name',
    'allowEmpty' => true,
    'style' => 'dropdownlist',
    'parentObjects' => Commune::model()->findAll($criteria),
  )); ?>
</div>

<div class="row">
  <label for="Quartier">Quartier</label>
  <?php $this->widget('application.components.Relation', array(
    'model' => $model,
    'relation' => 'quartier0',
    'fields' => 'name',
    'allowEmpty' => true,
    'style' => 'dropdownlist',
    'parentObjects' => Quartier::model()->findAll($criteria),
  )); ?>
</div>

<div class="row">
	<?php echo $form->labelEx($model,'street_address'); ?>
	<?php echo $form->textField(
		$model,'street_address', array('size'=>60,'maxlength'=>250)
	); ?>
	<?php echo $form->error($model,'street_address'); ?>
</div>

<div class="row">
  <label for="longitude">Coordinates</label>
	Lat: <?php echo $form->textField(
		$model, 'longitude', array('size'=>20, 'maxlength' => 45)
	); ?>

	Lon: <?php echo $form->textField(
		$model, 'latitude', array('size'=>20, 'maxlength' => 45)
	); ?>

    <?php echo $form->error($model, 'longitude'); ?>
    <?php echo $form->error($model, 'latitude'); ?>
</div>

<div class="row">
	<?php echo $form->labelEx($model,'site_phone'); ?>
	<?php echo $form->textField($model, 'site_phone', array(
		'placeholder' => 'Phone Number',
		'size' => 60,
		'maxlength' => 200,
	)); ?>
	<?php echo $form->error($model, 'site_phone'); ?>
</div>

<div class="row">
	<?php echo $form->labelEx($model, 'url'); ?>
	<?php echo $form->urlField($model, 'url', array(
		'placeholder' => 'URL',
		'size' => 60,
	   	'maxlength' => 200,
	)); ?>
	<?php echo $form->error($model,'url'); ?>
</div>

<div class="row">
	<?php echo $form->labelEx($model,'hours_of_operation'); ?>
	<?php echo $form->textArea($model,'hours_of_operation',array()); ?>
	<?php echo $form->error($model,'hours_of_operations'); ?>
</div>

<div class="row">
	<?php echo $form->labelEx($model, 'categories'); ?>
	<?php
		$criteria = new CDbCriteria(array('order'=>'category_name'));

		echo $form->dropDownList($model, 'categories',
			CHtml::listData(Category::model()->findAll($criteria), 'id', 'category_name'),
			array('multiple'=>'multiple')
		);
	?>
	<?php echo $form->error($model, 'categories'); ?>
</div>

<div class="row">
	<?php echo $form->labelEx($model, 'services'); ?>
	<?php
		$criteria = new CDbCriteria(array('order'=>'service_name'));

		echo $form->dropDownList($model, 'services',
			CHtml::listData(Service::model()->findAll($criteria), 'id', 'service_name'),
			array('multiple'=>'multiple')
		);
	?>
	<?php echo $form->error($model, 'services'); ?>
</div>
