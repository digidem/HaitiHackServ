<?php
$this->breadcrumbs=array(
	'Communes'=>array('index'),
	$model->name,
);

			if(isset($_GET['all'])&& ($_GET['all']==1))
	      $menuItem=array('label'=>'Previous page', 'url'=>array('/commune/admin', 'depId'=>$_GET['depId']));
		  else
		    $menuItem=array('label'=>'Previous page', 'url'=>array('/departement/view', 'id'=>$_GET['depId']));

$this->menu=array(
	$menuItem,
	array('label'=>'List Quartier', 'url'=>array('/quartier/admin', 'comId'=>$_GET['id'], 'depId'=>$_GET['depId'])),
	array('label'=>'Update this Commune', 'url'=>array('update', 'id'=>$model->id, 'depId'=>$_GET['depId'])),
	array('label'=>'Delete Commune', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this commune?')),
	//array('label'=>'Manage Commune', 'url'=>array('admin')),
);
?>

<h2>A Commune of the Department: <?php if($_GET['depId']!=null) echo Departement::Model()->findByPk($_GET['depId'])->name;
                       else {  $idDep=Commune::Model()->findByPk($_GET['id'])->departement;
					          echo Departement::Model()->findByPk($idDep)->name;
						 }
?></h2>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		//'id',
                'name',
		//'departement0.name',
		'longitude',
		'latitude',
	),
)); ?>

<br /><?php
$dataProvider=Quartier::model()->searchById($_GET['id']);
  if(isset($dataProvider)){ ?>
<div style="margin-bottom:-47px" ><?php echo "<h4><b> Quartier of this Commune: </b></h4> </br>"; ?></div>
 <?php   }
  else{   ?>
  <div style="margin-bottom:-27px" ><?php echo "<h4><b> Quartier of this Commune: </b></h4> </br></br>"; ?></div>
<?php
  }
?>

<?php
		 $pageSize=Yii::app()->user->getState('pageSize',Yii::app()->params['defaultPageSize']); // set controller and model for that before
		 $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'quartier-grid',
	'showTableOnEmpty'=>'true',
	'dataProvider'=>$dataProvider,

	//'filter'=>$model,
	'columns'=>array(
		//'id',
         'name',
		//'commune0.name',

		 array( 'class'=>'CButtonColumn',
		        'header'=>CHtml::dropDownList('pageSize',$pageSize,array(10=>10,20=>20,50=>50,100=>100),array(
                                  'onchange'=>"$.fn.yiiGridView.update('quartier-grid',{ data:{pageSize: $(this).val() }})",
                    )),
					'template'=>'{view}{update}{delete}',
			   'buttons'=>array (
        'update'=> array(
            'label'=>'Update',
            //'imageUrl'=>Yii::app()->request->baseUrl.'/images/update.png',
            'url'=>'Yii::app()->createUrl("quartier/update", array("id"=>$data->id,"comId"=>$_GET[\'id\'],"depId"=>$_GET[\'depId\']))',
            'options'=>array( 'class'=>'icon-edit' ),
        ),
         'view'=>array(
            'label'=>'View',
            //'imageUrl'=>Yii::app()->request->baseUrl.'/images/view.png',
            'url'=>'Yii::app()->createUrl("quartier/view", array("id"=>$data->id,"comId"=>$_GET[\'id\'],"depId"=>$_GET[\'depId\']))',
            'options'=>array( 'class'=>'icon-search' ),
        ),
        'delete'=>array(
            'label'=>'Delete',
            //'imageUrl'=>Yii::app()->request->baseUrl.'/images/delete.png',
            'url'=>'Yii::app()->createUrl("quartier/delete", array("id"=>$data->id,"comId"=>$_GET[\'id\'],"depId"=>$_GET[\'depId\']))',
            'options'=>array( 'class'=>'icon-remove' ),
        ),
    ),
			   ),

		   ),
     ));
	?>