<?php
$this->breadcrumbs=array(
	'Organisations'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List All Branchsites', 'url'=>array('/branchsite/admin','orgaId'=>$_GET['id'])),
	array('label'=>'List Organisation', 'url'=>array('index')),
	array('label'=>'Update Organisation', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Create New Organisation', 'url'=>array('create')),
	
	//array('label'=>'Delete Organisation', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	//array('label'=>'Manage Organisation', 'url'=>array('admin')),
);

  Yii::app()->clientScript->registerScript('searchById', "
			$('.search-button').click(function(){
				$('.search-form').toggle();
				return false;
				});
			$('.search-form form').submit(function(){
				$.fn.yiiGridView.update('branchsite-grid', {
data: $(this).serialize()
});
				return false;
				});
			");


?>

<h2>View Organisation : <?php echo $model->name; ?></h2>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		//'id',
		'name',
                'acronym',
		'email',		
		'url',
		//'present_before_earthquake',
		'coverage',
	),
)); ?>


<br />
<?php 
$dataProvider=Branchsite::model()->searchById($_GET['id']);
  if(isset($dataProvider)){ ?>
<div style="margin-bottom:-47px" ><?php echo "<h4><b> Branch of this Organisation: </b></h4></br> "; ?></div>
 <?php   }
  else{   ?>
  <div style="margin-bottom:-27px" ><?php echo "<h4><b> Branch of this Organisation: </b></h4> </br></br>"; ?></div>
<?php 
  }
?> 

<?php  
		
			
			
		// $pageSize=Yii::app()->user->getState('pageSize',Yii::app()->params['defaultPageSize']); // set controller and model for that before
		 $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'branchsite-grid',
	'showTableOnEmpty'=>'true',
	'dataProvider'=>$dataProvider,
	
	//'filter'=>$model,
	'columns'=>array(
		//'id',
                'branch_name',
                //'organisation0.name',
		'street_address',
                //'quartier0.name'
		//'longitude',
		//'latitude',
		//'url',
		'site_phone',
			
		 array( 'class'=>'CButtonColumn',
		       /* 'header'=>CHtml::dropDownList('pageSize',$pageSize,array(10=>10,20=>20,50=>50,100=>100),array(
                                  'onchange'=>"$.fn.yiiGridView.update('branchsite-grid',{ data:{pageSize: $(this).val() }})",
                    )), */
					'template'=>'{view}{update}{delete}',
			   'buttons'=>array (
        'update'=> array(
            'label'=>'Update',
            //'imageUrl'=>Yii::app()->request->baseUrl.'/images/update.png',
            'url'=>'Yii::app()->createUrl("branchsite/update", array("id"=>$data->id,"orgaId"=>$_GET[\'id\']))',
            'options'=>array( 'class'=>'icon-edit' ),
        ),
         'view'=>array(
            'label'=>'View',
            //'imageUrl'=>Yii::app()->request->baseUrl.'/images/view.png',
            'url'=>'Yii::app()->createUrl("branchsite/view", array("id"=>$data->id,"orgaId"=>$_GET[\'id\']))',
            'options'=>array( 'class'=>'icon-search' ),
        ),
        'delete'=>array(
            'label'=>'Delete',
            //'imageUrl'=>Yii::app()->request->baseUrl.'/images/delete.png',
            'url'=>'Yii::app()->createUrl("branchsite/delete", array("id"=>$data->id,"orgaId"=>$_GET[\'id\']))',
            'options'=>array( 'class'=>'icon-remove' ),
        ), 
    ),
			   ), 
            	   		
		   ),
		  
     )); 
				
	?>
<br />
<div class="left" style="margin-top:-32px; width:100%;"><div class="left" style="margin-top:-4px; "><h3>Contact of this Organisation: &nbsp;</br></h3></div>
         <h5><b><?php $modelContact=Contact::model()->searchByIdOrga($model->id);
	         $res=$modelContact->getData();
		 foreach ($res as $contact) 
   		    echo $contact->name.' (T&eacute;l.:'.$contact->phone.' / email: '.$contact->email.' )</br>';			
	  ?></b></h5></div><br />
	  
	  
 <!--<br /><h2>Partners  of this Organisation: </h2>    -->
<ul><?php /* foreach($model->partners as $foreignobj) { 

				printf('<li>%s</li>', CHtml::link($foreignobj->name, array('partners/view', 'id' => $foreignobj->id)));

				} */ ?></ul>