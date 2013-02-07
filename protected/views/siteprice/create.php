<?php
$this->breadcrumbs=array(
	'Site Prices'=>array(Yii::t('app', 'index')),
	Yii::t('app', 'Create'),
);

$this->menu=array(
	array('label'=>'List SitePrice', 'url'=>array('index')),
	array('label'=>'Manage SitePrice', 'url'=>array('admin')),
);
?>

<h1> Create SitePrice </h1>
<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'site-price-form',
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
