<?php
$this->breadcrumbs=array(
	'Categories'=>array('index'),
	$model->category_name=>array('view','id'=>$model->id),
	Yii::t('app', 'Update'),
);

$this->menu=array(
	array('label'=>'List Categories', 'url'=>array('admin')),
	array('label'=>'Create New Category', 'url'=>array('create')),
	
);
?>

<h2> Update Category: <?php echo $model->category_name; ?> </h2>
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
	<?php echo CHtml::submitButton(Yii::t('app', 'Save'),array('name'=>'save'));    ?>
	<?php echo CHtml::submitButton(Yii::t('app', 'Add New Category'),array('name'=>'addNewCategory')); ?>
</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
