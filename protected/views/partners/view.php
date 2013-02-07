<?php
$this->breadcrumbs=array(
	'Partners'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Partners', 'url'=>array('index')),
	array('label'=>'Create Partners', 'url'=>array('create')),
	array('label'=>'Update Partners', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Partners', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Partners', 'url'=>array('admin')),
);
?>

<h1>View Partners #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'presence_before_earthquake',
		'name',
		'organisation0.name',
	),
)); ?>


