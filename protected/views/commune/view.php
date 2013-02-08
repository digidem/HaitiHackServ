<?php
$this->breadcrumbs=array(
	'Communes'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Commune', 'url'=>array('index')),
	array('label'=>'Create Commune', 'url'=>array('create')),
	array('label'=>'Update Commune', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Commune', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Commune', 'url'=>array('admin')),
);
?>

<h1>View Commune : <?php echo $model->name; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		//'id',
                'name',
		'departement0.name',
		'longitude',
		'latitude',
		
	),
)); ?>


<br /><h2> Quartier in this Commune: </h2>
<ul><?php foreach($model->quartiers as $foreignobj) { 

				printf('<li>%s</li>', CHtml::link($foreignobj->name, array('quartier/view', 'id' => $foreignobj->id)));

				} ?></ul>