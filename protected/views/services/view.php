<?php
$this->breadcrumbs=array(
	'Services'=>array('index'),
	$model->service_name,
);

$this->menu=array(
	array('label'=>'List Services', 'url'=>array('index')),
	array('label'=>'Create Services', 'url'=>array('create')),
	array('label'=>'Update Services', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Services', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Services', 'url'=>array('admin')),
);
?>

<h1>View Services : <?php echo $model->service_name; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		//'id',
		'service_name',
		'description',
	),
)); ?>


<br /><h2> Service can be found : </h2>
<ul><?php foreach($model->sitePrices as $foreignobj) { 

				printf('<li>%s service price => %d</li>',  CHtml::link($foreignobj->branchsite0['branch_name'], array('siteprice/view', 'id' => $foreignobj->id)),CHtml::encode($foreignobj->prix_service));
                              //  printf('<li>%s</li>',CHtml::encode($foreignobj->services0['service_name']));

				} ?></ul>