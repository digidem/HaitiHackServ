<?php
$this->breadcrumbs=array(
	'Site Prices'=>array('index'),
	$model->branchsite0['branch_name'],
);

$this->menu=array(
	array('label'=>'List SitePrice', 'url'=>array('index')),
	array('label'=>'Create SitePrice', 'url'=>array('create')),
	array('label'=>'Update SitePrice', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete SitePrice', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage SitePrice', 'url'=>array('admin')),
);
?>

<h1>View branch service price: <?php echo $model->branchsite0['branch_name']; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		//'id',
                'branchsite0.branch_name',
		'services0.service_name',
		'prix_service',
		'referral_necessary',
		
	),
)); ?>


