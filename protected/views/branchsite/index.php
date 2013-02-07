<?php
$this->breadcrumbs = array(
	'Branchsites',
	Yii::t('app', 'Index'),
);

$this->menu=array(
	array('label'=>Yii::t('app', 'Create') . ' Branchsite', 'url'=>array('create')),
	array('label'=>Yii::t('app', 'Manage') . ' Branchsite', 'url'=>array('admin')),
);
?>

<h1>Branchsites</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
