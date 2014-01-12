<?php
$this->breadcrumbs=array(
	'Communes'=>array(Yii::t('app', 'index')),
	Yii::t('app', 'Create'),
);

$this->menu=array(
	array('label'=>'Back to List Organisation', 'url'=>array('/Departement/index')),
	//array('label'=>'Manage Commune', 'url'=>array('admin')),
);
?>

<h2> Create Commune for the Departement: <?php echo Departement::model()->findByPk($_GET['depId'])->name;?></h2>
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

</div>
