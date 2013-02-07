<?php
$this->breadcrumbs=array(
	'Organisations'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Organisation', 'url'=>array('index')),
	array('label'=>'Create Organisation', 'url'=>array('create')),
	array('label'=>'Update Organisation', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Organisation', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Organisation', 'url'=>array('admin')),
);
?>

<h1>View Organisation #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'email',
		'acronym',
		'url',
		'present_before_earthquake',
		'coverage',
	),
)); ?>


<br /><h2> This Branchsite belongs to this Organisation: </h2>
<ul><?php foreach($model->branchsites as $foreignobj) { 

				printf('<li>%s</li>', CHtml::link($foreignobj->branch_name, array('branchsite/view', 'id' => $foreignobj->id)));

				} ?></ul><br /><h2> This Contact belongs to this Organisation: </h2>
<ul><?php foreach($model->contacts as $foreignobj) { 

				printf('<li>%s</li>', CHtml::link($foreignobj->name, array('contact/view', 'id' => $foreignobj->id)));

				} ?></ul><br /><h2> This Partners belongs to this Organisation: </h2>
<ul><?php foreach($model->partners as $foreignobj) { 

				printf('<li>%s</li>', CHtml::link($foreignobj->name, array('partners/view', 'id' => $foreignobj->id)));

				} ?></ul>