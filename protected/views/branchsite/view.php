<?php
$this->breadcrumbs=array(
	'Branchsites'=>array('index'),
	$model->branch_name,
);

          if(isset($_GET['all'])&& ($_GET['all']==1))
	          $menuItem=array('label'=>'Previous page', 'url'=>array('/branchsite/admin', 'orgaId'=>$_GET['orgaId']));
		  else
		      $menuItem=array('label'=>'Previous page', 'url'=>array('/organisation/view', 'id'=>$_GET['orgaId']));
		   
$this->menu=array(
	$menuItem,
	array('label'=>'Update this branch', 'url'=>array('update', 'id'=>$model->id, 'orgaId'=>$_GET['orgaId'])),
	array('label'=>'Delete this branch', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this branch?')),
	//array('label'=>'Manage Organisation branch', 'url'=>array('admin')),
);
?>

<h2>A Branch of: <?php if($_GET['orgaId']!=null) echo Organisation::Model()->findByPk($_GET['orgaId'])->name; 
                       else {  $idOrg=Branchsite::Model()->findByPk($_GET['id'])->organisation;
					          echo Organisation::Model()->findByPk($idOrg)->name;
						 }
?></h2>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		//'id',
        'branch_name',
        //'organisation0.name',
        //'departement0.name',
        //'commune0.name',
        'quartier0.name',
		'street_address',
		'longitude',
		'latitude',
        'site_phone',
        'url',
        //'hours_of_operation'
		
	),
)); ?>

<br /> <div class="right" ><div class="left" style="margin-top:-4px; "><h2>Service offered by this branch: &nbsp;</h2></div>
         <h4><b><?php $modelService=Service::model()->searchByIdBranch($model->id);
	         $res=$modelService->getData();
		 foreach ($res as $service) 
   		    echo $service->service_name.' </br>';			
	  ?></b></h4></div><br />

<br />
<div class="left" style="margin-top:-32px; "><div class="left" style="margin-top:-4px; "><h2>Categories of this branch: &nbsp;</h2></div>
         <h4><b><?php $modelCategory=Category::model()->searchByIdBranch($model->id);
	         $res=$modelCategory->getData();
		 foreach ($res as $category) 
   		    echo $category->category_name.' </br>';			
	  ?></b></h4></div><br />
                                
 