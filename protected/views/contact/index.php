<?php
$this->breadcrumbs = array(
	'Contacts',
	Yii::t('app', 'Index'),
);

$this->menu=array(
	array('label'=>Yii::t('app', 'Create') . ' Contact', 'url'=>array('create')),
	array('label'=>Yii::t('app', 'Manage') . ' Contact', 'url'=>array('admin')),
);
?>

<h1>Contacts</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
