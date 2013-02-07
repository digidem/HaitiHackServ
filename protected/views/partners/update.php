<?php
$this->breadcrumbs=array(
	'Partners'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	Yii::t('app', 'Update'),
);

$this->menu=array(
	array('label'=>'List Partners', 'url'=>array('index')),
	array('label'=>'Create Partners', 'url'=>array('create')),
	array('label'=>'View Partners', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Partners', 'url'=>array('admin')),
);
?>

<h1> Update Partners : <?php echo $model->name; ?> </h1>
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
	<?php echo CHtml::submitButton(Yii::t('app', 'Update')); ?>
</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
