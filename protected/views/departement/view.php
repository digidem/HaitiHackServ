<?php
$this->breadcrumbs=array(
	'Departements'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Departement', 'url'=>array('index')),
	array('label'=>'Create Departement', 'url'=>array('create')),
	array('label'=>'Update Departement', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Departement', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Departement', 'url'=>array('admin')),
);
?>

<h1>View Departement : <?php echo $model->name; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		//'id',
                'name',
		'longitude',
		'latitude',
		
	),
)); ?>


<br /><h2> Commune in this Departement: </h2>
<ul><?php foreach($model->communes as $foreignobj) { 

				printf('<li>%s</li>', CHtml::link($foreignobj->name, array('commune/view', 'id' => $foreignobj->id)));

				} ?></ul>