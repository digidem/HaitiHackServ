<?php
$this->breadcrumbs=array(
	'Departements'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	Yii::t('app', 'Update'),
);

$this->menu=array(
	array('label'=>'List Departement', 'url'=>array('index')),
	array('label'=>'Create Departement', 'url'=>array('create')),
	array('label'=>'View Departement', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Departement', 'url'=>array('admin')),
);
?>

<h1> Update Departement : <?php echo $model->name; ?> </h1>
<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'departement-form',
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
