<?php
$this->breadcrumbs=array(
	'Categories'=>array('index'),
	$model->category_name,
);

$this->menu=array(
	array('label'=>'List Category', 'url'=>array('index')),
	array('label'=>'Create Category', 'url'=>array('create')),
	array('label'=>'Update Category', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Category', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Category', 'url'=>array('admin')),
);
?>

<h1>View Category : <?php echo $model->category_name; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		//'id',
		'category_name',
		'description',
	),
)); ?>


<br /><h2>Organisation branch in this category: </h2>
<ul><?php foreach($model->branchsites as $foreignobj) { 

				printf('<li>%s</li>', CHtml::link($foreignobj->branch_name, array('branchsite/view', 'id' => $foreignobj->id)));

				} ?></ul>