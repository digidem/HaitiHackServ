<?php
$this->breadcrumbs=array(
	'Quartiers'=>array('index'),
	$model->name,
);


if(isset($_GET['all'])&& ($_GET['all']==1))
	          $menuItem=array('label'=>'Previous page', 'url'=>array('/quartier/admin', 'comId'=>$_GET['comId'],'depId'=>$_GET['depId']));
		  else
		      $menuItem=array('label'=>'Previous page', 'url'=>array('/commune/view', 'id'=>$_GET['comId'],'depId'=>$_GET['depId']));
			  
$this->menu=array(
	$menuItem,
	array('label'=>'Update this Quartier', 'url'=>array('update', 'id'=>$model->id, 'comId'=>$_GET['comId'],'depId'=>$_GET['depId'],'from'=>'qv')),
	array('label'=>'Delete Quartier', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this quartier?')),
	//array('label'=>'Manage Quartier', 'url'=>array('admin')),
);

$Commune="Commune";

?>

<h2>Quartier : <?php echo $model->name; ?></h2>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		//'id',
           //     'name',
		array('name'=>$Commune,'value'=>$model->commune0->name),
                'longitude',
		'latitude',
		
	),
)); ?>


<br /><h2> Organisation Branch in this  Quartier: </h2>
<ul><?php 
             $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'branchsite-grid',
	'dataProvider'=>Branchsite::model()->searchByIdQuartier($model->id),
	//'filter'=>$model,
	'columns'=>array(
		//'id',
                'branch_name',
            
		'street_address',
                //'quartier0.name'
		//'longitude',
		//'latitude',
		//'url',
		//'site_phone',
		'organisation0.name',
      ),
));
 ?></ul>