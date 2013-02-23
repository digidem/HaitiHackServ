<?php
$this->breadcrumbs=array(
	'Branchsites'=>array('index'),
	$model->branch_name,
);

$this->menu=array(
	array('label'=>'List Organisation branch', 'url'=>array('index')),
	array('label'=>'Create Organisation branch', 'url'=>array('create')),
	array('label'=>'Update Organisation branch', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Organisation branch', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Organisation branch', 'url'=>array('admin')),
);
?>

<h1>View Organisation Branch : <?php echo $model->branch_name; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		//'id',
        'branch_name',
        'organisation0.name',
        'departement0.name',
        'commune0.name',
        'quartier0.name',
		'street_address',
		'longitude',
		'latitude',
        'site_phone',
        'url',
        'hours_of_operation'
		
	),
)); ?>

<br /><h2> Services of this organisation branch </h2>
<ul><?php foreach($model->services as $foreignobj) { 

				printf('<li>%s</li>', CHtml::link($foreignobj->service_name, array('service/view', 'id' => $foreignobj->id)));

				} ?></ul><br />

<br /><h2> Categories of this organisation branch </h2>
<ul><?php foreach($model->categories as $foreignobj) { 

				printf('<li>%s</li>', CHtml::link($foreignobj->category_name, array('category/view', 'id' => $foreignobj->id)));

				} ?></ul><br />
                                
 