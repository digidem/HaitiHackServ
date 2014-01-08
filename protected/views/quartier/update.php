<?php
$this->breadcrumbs=array(
	'Quartiers'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	Yii::t('app', 'Update'),
);


if(isset($_GET['from'])&& ($_GET['from']=="qv"))
	          $menuItem=array('label'=>'Previous page', 'url'=>array('/quartier/view', 'id'=>$_GET['id'],'comId'=>$_GET['comId'],'depId'=>$_GET['depId']));
		  else
		      $menuItem=array('label'=>'Previous page', 'url'=>array('/commune/view', 'id'=>$_GET['comId'],'depId'=>$_GET['depId']));

$this->menu=array(
	$menuItem,
	
	
);
?>

<h1> Update Quartier : <?php echo $model->name; ?> </h1>
<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'quartier-form',
	'enableAjaxValidation'=>true,
)); 
echo $this->renderPartial('_form', array(
	'model'=>$model,
	'form' =>$form
	)); ?>

<div class="row buttons">
	<?php echo CHtml::submitButton(Yii::t('app', 'Save'),array('name'=>'save')); ?>
	<?php echo CHtml::submitButton(Yii::t('app', 'Add New Quartier'),array('name'=>'addNewQuartier')); ?>
</div>

<?php $this->endWidget(); ?>

</div><!-- form -->
