<?php
$this->breadcrumbs = array(
	'Quartiers',
	Yii::t('app', 'Index'),
);

$this->menu=array(
	array('label'=>Yii::t('app', 'Create') . ' Quartier', 'url'=>array('create')),
	array('label'=>Yii::t('app', 'Manage') . ' Quartier', 'url'=>array('admin')),
);
?>

<h1>Quartiers</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
