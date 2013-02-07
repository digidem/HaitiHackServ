<?php
$this->breadcrumbs=array(
	'Site Prices'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List SitePrice', 'url'=>array('index')),
	array('label'=>'Create SitePrice', 'url'=>array('create')),
	array('label'=>'Update SitePrice', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete SitePrice', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage SitePrice', 'url'=>array('admin')),
);
?>

<h1>View SitePrice #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'prix_service',
		'referral_necessary',
		'branchsite0.street_address',
		'services0.service_name',
	),
)); ?>


