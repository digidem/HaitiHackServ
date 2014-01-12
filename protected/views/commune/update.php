<?php
$this->breadcrumbs=array(
	'Communes'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	Yii::t('app', 'Update'),
);

$this->menu=array(
	array('label'=>'Back to List Commune', 'url'=>array('/commune/admin', 'depId'=>$_GET['depId'])),
	//array('label'=>'Create New Commune', 'url'=>array('create','depId'=>$_GET['depId'],'from'=>1)),
	// array('label'=>'View Commune', 'url'=>array('view', 'id'=>$model->id)),
	// array('label'=>'Manage Commune', 'url'=>array('admin')),
);
?>

<h2> Update Commune : <?php echo $model->name; ?> </h2>
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
	<?php echo CHtml::submitButton(Yii::t('app', 'Add Quartier'),array('name'=>'addQuartier'));    ?>
	<?php echo CHtml::submitButton(Yii::t('app', 'Add New Commune'),array('name'=>'addNewCommune')); ?>
	<?php echo CHtml::submitButton(Yii::t('app', 'Save'),array('name'=>'save')); ?>
</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
