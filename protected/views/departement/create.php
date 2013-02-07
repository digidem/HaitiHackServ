<?php
$this->breadcrumbs=array(
	'Departements'=>array(Yii::t('app', 'index')),
	Yii::t('app', 'Create'),
);

$this->menu=array(
	array('label'=>'List Departement', 'url'=>array('index')),
	array('label'=>'Manage Departement', 'url'=>array('admin')),
);
?>

<h1> Create Departement </h1>
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
	<?php echo CHtml::submitButton(Yii::t('app', 'Create')); ?>
</div>

<?php $this->endWidget(); ?>

</div>
