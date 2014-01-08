<?php
$this->breadcrumbs=array(
	'Branchsites'=>array(Yii::t('app', 'index')),
	Yii::t('app', 'Create'),
);

$this->menu=array(
	array('label'=>'Back to List Organisation', 'url'=>array('/Organisation/index')),
	//array('label'=>'Manage Branchsite', 'url'=>array('admin')),
);
?>

<h2> Create Branchsite for <?php echo Organisation::model()->findByPk($_GET['orgaId'])->name;?></h2>
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
	<?php echo CHtml::submitButton(Yii::t('app', 'Add New Branch'),array('name'=>'addNewBranch')); ?>
</div>

<?php $this->endWidget(); ?>


  <div  style="margin-bottom:-45px" ><?php echo "</br>".Organisation::model()->findByPk($_GET['orgaId'])->name." Branchsites </br>";//echo CHtml::link(Yii::t('app', 'Advanced Search'),'#',array('class'=>'search-button')); ?></div>


<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'branchsite-form',
	
)); 
echo  $this->renderPartial('_list', array(
	'model'=>$model,
	'form' =>$form
	)); ?>
	
	<?php $this->endWidget(); ?>

</div>
