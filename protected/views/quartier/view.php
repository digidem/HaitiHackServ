<?php
$this->breadcrumbs=array(
	'Quartiers'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Quartier', 'url'=>array('index')),
	array('label'=>'Create Quartier', 'url'=>array('create')),
	array('label'=>'Update Quartier', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Quartier', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Quartier', 'url'=>array('admin')),
);
?>

<h1>View Quartier : <?php echo $model->name; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		//'id',
                'name',
		'commune0.name',
                'longitude',
		'latitude',
		
	),
)); ?>


<br /><h2> Organisation Branch in this  Quartier: </h2>
<ul><?php foreach($model->branchsites as $foreignobj) { 

				printf('<li>%s</li>', CHtml::link($foreignobj->branch_name, array('branchsite/view', 'id' => $foreignobj->id)));

				} ?></ul>