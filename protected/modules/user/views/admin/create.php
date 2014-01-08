<?php
$this->breadcrumbs=array(
	UserModule::t('Users')=>array('admin'),
	UserModule::t('Create'),
);

$this->menu=array(
    array('label'=>UserModule::t('List All Users'), 'url'=>array('admin')),
    
);
?>
<h2><?php echo UserModule::t("Create User"); ?></h2>

<?php
	echo $this->renderPartial('_form', array('model'=>$model,'profile'=>$profile));
?>