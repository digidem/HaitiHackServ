<?php
$this->breadcrumbs=array(
	'Services'=>array('index'),
	$model->service_name=>array('view','id'=>$model->id),
	Yii::t('app', 'Update'),
);

$this->menu=array(
	array('label'=>'List Services', 'url'=>array('admin')),
	array('label'=>'Create New Service', 'url'=>array('create')),
	/* array('label'=>'View Services', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Services', 'url'=>array('admin')), */
);
?>

<h2> Update Service: <?php echo $model->service_name; ?> </h2>
<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'services-form',
	'enableAjaxValidation'=>true,
)); 
echo $this->renderPartial('_form', array(
	'model'=>$model,
	'form' =>$form
	)); ?>

<div class="row buttons">
	<?php echo CHtml::submitButton(Yii::t('app', 'Save'),array('name'=>'save'));    ?>
	<?php echo CHtml::submitButton(Yii::t('app', 'Add New Service'),array('name'=>'addNewService')); ?>
</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
