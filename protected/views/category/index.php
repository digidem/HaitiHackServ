<?php
$this->breadcrumbs = array(
	'Categories',
	Yii::t('app', 'Index'),
);

$this->menu=array(
	array('label'=>Yii::t('app', 'Create') . ' Category', 'url'=>array('create')),
	array('label'=>Yii::t('app', 'Manage') . ' Category', 'url'=>array('admin')),
);
?>

<h1>Categories</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
