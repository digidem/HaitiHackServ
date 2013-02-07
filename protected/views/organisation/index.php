<?php
$this->breadcrumbs = array(
	'Organisations',
	Yii::t('app', 'Index'),
);

$this->menu=array(
	array('label'=>Yii::t('app', 'Create') . ' Organisation', 'url'=>array('create')),
	array('label'=>Yii::t('app', 'Manage') . ' Organisation', 'url'=>array('admin')),
);
?>

<h1>Organisations</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
