<?php
$this->breadcrumbs=array(
	'Branchsites'=>array('index'),
	$model->branch_name=>array('view','id'=>$model->id),
	Yii::t('app', 'Update'),
);

$this->menu=array(
	array('label'=>'Back to List Organisation', 'url'=>array('/organisation/index')),
	array('label'=>'Create New Branchsite', 'url'=>array('create','orgaId'=>$_GET['orgaId'],'from'=>1)),
	//array('label'=>'View Branchsite', 'url'=>array('view', 'id'=>$model->id)),
	///array('label'=>'Manage Branchsite', 'url'=>array('admin')),
);
?>

<h2> Update Organisation branch : <?php echo $model->branch_name; ?> </h2>
<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'branchsite-form',
	'enableAjaxValidation'=>true,
)); 

echo $this->renderPartial('_form', array(
	'model'=>$model,
	'form' =>$form
	)); ?>

<div class="row buttons">
	<?php echo CHtml::submitButton(Yii::t('app', 'Save'),array('name'=>'save'));    ?>
	<?php echo CHtml::submitButton(Yii::t('app', 'Add Branch'),array('name'=>'addBranch')); ?>
</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
