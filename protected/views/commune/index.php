<?php
$this->breadcrumbs = array(
	'Communes',
	Yii::t('app', 'Index'),
);

$this->menu=array(
	array('label'=>Yii::t('app', 'Create') . ' Commune', 'url'=>array('create')),
	array('label'=>Yii::t('app', 'Manage') . ' Commune', 'url'=>array('admin')),
);
?>

<h1>Communes</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
