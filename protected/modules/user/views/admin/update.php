<?php
$this->breadcrumbs=array(
	(UserModule::t('Users'))=>array('admin'),
	$model->username=>array('view','id'=>$model->id),
	(UserModule::t('Update')),
);
$this->menu=array(
    array('label'=>UserModule::t('List All Users'), 'url'=>array('admin')),
    array('label'=>UserModule::t('Create New User'), 'url'=>array('create')),

);
?>

<h2><?php echo  UserModule::t('Update User')." ".$model->id; ?></h2>

<?php
	echo $this->renderPartial('_form', array('model'=>$model,'profile'=>$profile));
?>