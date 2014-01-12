<?php
$this->breadcrumbs=array(
	'Departements'=>array(Yii::t('app', 'index')),
	Yii::t('app', 'Create'),
);

$this->menu=array(
	array('label'=>'List Departement', 'url'=>array('index')),
	//array('label'=>'Manage Departement', 'url'=>array('admin')),
);
?>

<h2> Create Departement </h2>
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
	<?php echo CHtml::submitButton(Yii::t('app', 'Create'),array('name'=>'create'));    ?>
	<?php echo CHtml::submitButton(Yii::t('app', 'Add Commune'),array('name'=>'addCommune')); ?>
</div>

<?php $this->endWidget(); ?>

</div>
