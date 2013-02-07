<?php
$this->breadcrumbs=array(
	'Branchsites'=>array('index'),
	$model->branch_name=>array('view','id'=>$model->id),
	Yii::t('app', 'Update'),
);

$this->menu=array(
	array('label'=>'List Branchsite', 'url'=>array('index')),
	array('label'=>'Create Branchsite', 'url'=>array('create')),
	array('label'=>'View Branchsite', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Branchsite', 'url'=>array('admin')),
);
?>

<h1> Update Organisation branch : <?php echo $model->branch_name; ?> </h1>
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
	<?php echo CHtml::submitButton(Yii::t('app', 'Update')); ?>
</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
