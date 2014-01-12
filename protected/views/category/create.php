<?php
$this->breadcrumbs=array(
	'Categories'=>array(Yii::t('app', 'index')),
	Yii::t('app', 'Create'),
);

$this->menu=array(
	array('label'=>'Back to List Categories', 'url'=>array('/Category/admin')),
	/* array('label'=>'List Category', 'url'=>array('index')),
	array('label'=>'Manage Category', 'url'=>array('admin')) ,*/
);
?>

<h2> Create Category </h2>
<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'category-form',
	'enableAjaxValidation'=>true,
)); 
echo $this->renderPartial('_form', array(
	'model'=>$model,
	'form' =>$form
	)); ?>

<div class="row buttons">
	<?php echo CHtml::submitButton(Yii::t('app', 'Save'),array('name'=>'save')); ?>
	<?php echo CHtml::submitButton(Yii::t('app', 'Add New Category'),array('name'=>'addNewCategory'));    ?>
</div>

<?php $this->endWidget(); ?>

</div>
