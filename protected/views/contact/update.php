<?php
$this->breadcrumbs=array(
	'Contacts'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	Yii::t('app', 'Update'),
);

$this->menu=array(
	array('label'=>'Back to List Contacts', 'url'=>array('/contact/admin')),
	array('label'=>'Update this Contact', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete this Contact', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this contact?')),
);
?>

<h2> Update Contact  <?php echo $model->name; ?> </h1>
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

</div><!-- form -->
