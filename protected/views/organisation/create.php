<?php
$this->breadcrumbs=array(
	'Organisations'=>array(Yii::t('app', 'index')),
	Yii::t('app', 'Create'),
);

$this->menu=array(
	array('label'=>'Lister les Organisations', 'url'=>array('index')),
	//array('label'=>'Manage Organisation', 'url'=>array('admin')),
);
?>

<h2> Cr&eacute;er une Organisation </h2>
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
	
	<?php echo CHtml::submitButton(Yii::t('app', 'Creer'),array('name'=>'create'));    ?>
	<?php echo CHtml::submitButton(Yii::t('app', 'Ajouter-Branche'),array('name'=>'addBranch')); ?>
</div>

<?php $this->endWidget(); ?>

</div>
