<?php
$this->breadcrumbs=array(
	'Branchsites'=>array(Yii::t('app', 'index')),
	Yii::t('app', 'Create'),
);

$this->menu=array(
	array('label'=>'List Branchsite', 'url'=>array('index')),
	array('label'=>'Manage Branchsite', 'url'=>array('admin')),
);
?>

<h1> Create Branchsite </h1>
<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'branchsite-form',
	'enableAjaxValidation'=>true,
));
echo $this->renderPartial('_form', array(
	'model'=>$model,
	'form' =>$form
)); ?>

<div class="row buttons">
	<?php echo CHtml::submitButton(Yii::t('app', 'Create')); ?>
</div>

<?php $this->endWidget(); ?>

</div>
