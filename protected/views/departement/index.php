<?php
$this->breadcrumbs = array(
	'Departements',
	Yii::t('app', 'Index'),
);

$this->menu=array(
	array('label'=>Yii::t('app', 'Create') . ' Departement', 'url'=>array('create')),
	array('label'=>Yii::t('app', 'Manage') . ' Departement', 'url'=>array('admin')),
);
?>

<h1>Departements</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
