<?php
$this->breadcrumbs=array(
	'Partners'=>array(Yii::t('app', 'index')),
	Yii::t('app', 'Create'),
);

$this->menu=array(
	array('label'=>'List Partners', 'url'=>array('index')),
	array('label'=>'Manage Partners', 'url'=>array('admin')),
);
?>

<h1> Create Partners </h1>
<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'partners-form',
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
