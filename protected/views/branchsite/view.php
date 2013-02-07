<?php
$this->breadcrumbs=array(
	'Branchsites'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Branchsite', 'url'=>array('index')),
	array('label'=>'Create Branchsite', 'url'=>array('create')),
	array('label'=>'Update Branchsite', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Branchsite', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Branchsite', 'url'=>array('admin')),
);
?>

<h1>View Branchsite #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'street_address',
		'longitude',
		'latitude',
		'url',
		'site_phone',
		'branch_name',
		'organisation0.name',
		'quartier0.longitude',
	),
)); ?>


<br /><h2> This Category belongs to this Branchsite: </h2>
<ul><?php foreach($model->categories as $foreignobj) { 

				printf('<li>%s</li>', CHtml::link($foreignobj->category_name, array('category/view', 'id' => $foreignobj->id)));

				} ?></ul><br /><h2> This SitePrice belongs to this Branchsite: </h2>
<ul><?php foreach($model->sitePrices as $foreignobj) { 

				printf('<li>%s</li>', CHtml::link($foreignobj->prix_service, array('siteprice/view', 'id' => $foreignobj->id)));

				} ?></ul>