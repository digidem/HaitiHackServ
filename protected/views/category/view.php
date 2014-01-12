<?php
$this->breadcrumbs=array(
	'Categories'=>array('index'),
	$model->category_name,
);

$this->menu=array(
	array('label'=>'Back to List Categories', 'url'=>array('/Category/admin')),
	array('label'=>'Update this Category', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Category', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this category?')),
);
?>

<h2>Category: <?php echo $model->category_name; ?></h2>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		//'id',
		'category_name',
		'description',
	),
)); ?>