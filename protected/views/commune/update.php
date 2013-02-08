<?php
$this->breadcrumbs=array(
	'Communes'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	Yii::t('app', 'Update'),
);

$this->menu=array(
	array('label'=>'List Commune', 'url'=>array('index')),
	array('label'=>'Create Commune', 'url'=>array('create')),
	array('label'=>'View Commune', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Commune', 'url'=>array('admin')),
);
?>

<h1> Update Commune : <?php echo $model->name; ?> </h1>
<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'commune-form',
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
