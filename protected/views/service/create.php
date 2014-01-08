<?php
$this->breadcrumbs=array(
	'Services'=>array(Yii::t('app', 'index')),
	Yii::t('app', 'Create'),
);

$this->menu=array(
	array('label'=>'Back to List Services', 'url'=>array('/Service/admin')),
	/* array('label'=>'List Services', 'url'=>array('index')),
	array('label'=>'Manage Services', 'url'=>array('admin')), */
);
?>

<h2> Create Services </h2>
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
	<?php echo CHtml::submitButton(Yii::t('app', 'Save'),array('name'=>'save')); ?>
	<?php echo CHtml::submitButton(Yii::t('app', 'Add New Service'),array('name'=>'addNewService'));    ?>
</div>

<?php $this->endWidget(); ?>

</div>
