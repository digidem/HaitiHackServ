<?php
$this->breadcrumbs=array(
	'Contacts'=>array(Yii::t('app', 'index')),
	Yii::t('app', 'Create'),
);

$this->menu=array(
	array('label'=>'Back to List Contacts', 'url'=>array('/contact/admin')),
	
);
?>

<h2> Create Contact </h2>
<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'contact-form',
	'enableAjaxValidation'=>true,
)); 
echo $this->renderPartial('_form', array(
	'model'=>$model,
	'form' =>$form
	)); ?>

<div class="row buttons">
	<?php echo CHtml::submitButton(Yii::t('app', 'Save')); ?>
</div>

<?php $this->endWidget(); ?>

</div>
