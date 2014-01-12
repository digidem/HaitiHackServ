<?php
$this->breadcrumbs=array(
	'Organisations'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	Yii::t('app', 'Update'),
);

$this->menu=array(
	array('label'=>'List Organisation', 'url'=>array('index')),
	array('label'=>'Create New Organisation', 'url'=>array('create')),
	//array('label'=>'View Organisation', 'url'=>array('view', 'id'=>$model->id)),
	//array('label'=>'Manage Organisation', 'url'=>array('admin')),
);
?>

<h2> Update Organisation : <?php echo $model->name; ?> </h2>
<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'organisation-form',
	'enableAjaxValidation'=>true,
));
echo $this->renderPartial('_form', array(
	'model'=>$model,
	'form' =>$form
	)); ?>

<div class="row buttons">
	<?php echo CHtml::submitButton(Yii::t('app', 'Save'),array('name'=>'save'));    ?>
	<?php echo CHtml::submitButton(Yii::t('app', 'Add Branch'),array('name'=>'addBranch')); ?>
</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
