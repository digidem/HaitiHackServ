<?php
$this->breadcrumbs = array(
	'Site Prices',
	Yii::t('app', 'Index'),
);

$this->menu=array(
	array('label'=>Yii::t('app', 'Create') . ' SitePrice', 'url'=>array('create')),
	array('label'=>Yii::t('app', 'Manage') . ' SitePrice', 'url'=>array('admin')),
);
?>

<h1>Site Prices</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
