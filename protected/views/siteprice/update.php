<?php
$this->breadcrumbs=array(
	'Site Prices'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	Yii::t('app', 'Update'),
);

$this->menu=array(
	array('label'=>'List SitePrice', 'url'=>array('index')),
	array('label'=>'Create SitePrice', 'url'=>array('create')),
	array('label'=>'View SitePrice', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage SitePrice', 'url'=>array('admin')),
);
?>

<h1> Update SitePrice #<?php echo $model->id; ?> </h1>
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
	<?php echo CHtml::submitButton(Yii::t('app', 'Update')); ?>
</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
