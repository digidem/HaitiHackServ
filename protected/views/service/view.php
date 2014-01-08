<?php
$this->breadcrumbs=array(
	'Services'=>array('index'),
	$model->service_name,
);

 
		   
$this->menu=array(
	array('label'=>'Back to List Services', 'url'=>array('/Service/admin')),
	array('label'=>'Update this Service', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete this Service', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this service?')),
	
);
?>

<h2>Service: <?php echo $model->service_name; ?></h2>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		//'id',
		'service_name',
		'description',
	),
)); ?>

