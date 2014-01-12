<?php
$this->breadcrumbs=array(
	'Departements'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	Yii::t('app', 'Update'),
);

$this->menu=array(
	array('label'=>'List Departement', 'url'=>array('index')),
	array('label'=>'Create New Departement', 'url'=>array('create')),
	//array('label'=>'View Departement', 'url'=>array('view', 'id'=>$model->id)),
	//array('label'=>'Manage Departement', 'url'=>array('admin')),
);
?>

<h2> Update Departement : <?php echo $model->name; ?> </h2>
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
	<?php echo CHtml::submitButton(Yii::t('app', 'Save'),array('name'=>'save'));    ?>
	<?php echo CHtml::submitButton(Yii::t('app', 'Add Commune'),array('name'=>'addCommune')); ?>
</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
