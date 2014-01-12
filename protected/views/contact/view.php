<?php
$this->breadcrumbs=array(
	'Contacts'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'Back to List Contacts', 'url'=>array('/Contact/admin')),
	array('label'=>'Update this Contact', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete this Contact', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this contact?')),
	array('label'=>'Create New Contact', 'url'=>array('create')),
);


$Contact="Organisation";
?>

<h2>Contact : <?php echo $model->name; ?></h2>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		//'id',
		//'name',
		'phone',
		'email',
		//'organisation0.name',
		array('name'=>$Contact,'value'=>$model->organisation0->name),
	),
)); ?>


