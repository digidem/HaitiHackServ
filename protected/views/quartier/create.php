<?php
$this->breadcrumbs=array(
	'Quartiers'=>array(Yii::t('app', 'index')),
	Yii::t('app', 'Create'),
);

$this->menu=array(
	array('label'=>'Back to previous', 'url'=>array('/commune/view','id'=>$_GET['comId'],'depId'=>$_GET['depId'])),
	//array('label'=>'Manage Quartier', 'url'=>array('admin','comId'=>$_GET['comId'])),
);
?>

<h2> Create Quartier in <a href="#" title="Commune"><?php if($_GET['comId']!=null) echo Commune::Model()->findByPk($_GET['comId'])->name; ?></a> for <a href="#" title="Departement"><?php if($_GET['depId']!=null) echo Departement::Model()->findByPk($_GET['depId'])->name; ?></a> </h2>

<?php /*if($_GET['depId']!=null) echo Departement::Model()->findByPk($_GET['depId'])->name; 
                       else {  $idDep=Commune::Model()->findByPk($_GET['id'])->departement;
					          echo Departement::Model()->findByPk($idDep)->name;
						 }*/
						 ?>

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
	<?php echo CHtml::submitButton(Yii::t('app', 'Add New Quartier'),array('name'=>'addNewQuartier'));    ?>
</div>

<?php $this->endWidget(); ?>

</div>
