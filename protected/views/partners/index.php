<?php
$this->breadcrumbs = array(
	'Partners',
	Yii::t('app', 'Index'),
);

$this->menu=array(
	array('label'=>Yii::t('app', 'Create') . ' Partners', 'url'=>array('create')),
	array('label'=>Yii::t('app', 'Manage') . ' Partners', 'url'=>array('admin')),
);
?>

<h1>Partners</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
