<?php $this->widget('ext.YiiSelect2.YiiSelect2', array(
	'target' => 'select',
)); ?>

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
    $parentCriteria = new CDbCriteria(array('order'=>'name'));
    $this->widget('application.components.Relation', array(
      'model' => $model,
      'relation' => 'organisation0',
      'fields' => 'name',
      'allowEmpty' => false,
      'style' => 'dropdownlist',
      'parentObjects' => Organisation::model()->findAll($parentCriteria),
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
    'parentObjects' => Departement::model()->findAll($parentCriteria),
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
    'parentObjects' => Commune::model()->findAll($parentCriteria),
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
    'parentObjects' => Quartier::model()->findAll($parentCriteria),
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
	<input type="tel" value="<?php $model->site_phone ?>" size="45" maxlength="45"
		placeholder="Phone Number" name="Branchsite[site_phone]" id="Branchsite_site_phone">
	<?php echo $form->error($model,'site_phone'); ?>
</div>

<div class="row">
	<?php echo $form->labelEx($model, 'url'); ?>
	<input type="url" value="<?php $model->url ?>" size="60" maxlength="60"
		placeholder="URL" name="Branchsite[url]" id="Branchsite_url">
	<?php echo $form->error($model,'url'); ?>
</div>

<div class="row">
	<?php echo $form->labelEx($model,'hours_of_operation'); ?>
	<?php echo $form->textArea($model,'hours_of_operation',array()); ?>
	<?php echo $form->error($model,'hours_of_operations'); ?>
</div>

<div class="row">
	<label for="Category">Categories</label>
	<?php
		$parentCriteria = new CDbCriteria(array('order'=>'category_name'));
		$this->widget('application.components.Relation', array(
			'model' => $model,
			'relation' => 'categories',
			'fields' => 'category_name',
			'allowEmpty' => false,
			'style' => 'multiplelist',
			'parentObjects' => Category::model()->findAll($parentCriteria),
			'showAddButton' => false,
		));
	?>
</div>

<div class="row">
	<label for="Service">Services</label>
	<?php
		$parentCriteria = new CDbCriteria(array('order'=>'service_name'));
		$this->widget('application.components.Relation', array(
			'model' => $model,
			'relation' => 'services',
			'fields' => 'service_name',
			'allowEmpty' => false,
			'style' => 'multiplelist',
			'parentObjects' => Service::model()->findAll($parentCriteria),
			'showAddButton' => false,
		));
	?>
</div>
