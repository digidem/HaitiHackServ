<?php
$this->breadcrumbs=array(
	'Departements'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'Previous', 'url'=>array('index')),
	array('label'=>'List All Communes', 'url'=>array('/commune/admin','depId'=>$_GET['id'])),
	array('label'=>'Update Departement', 'url'=>array('update', 'id'=>$model->id)),
);

		Yii::app()->clientScript->registerScript('search', "
			$('.search-button').click(function(){
				$('.search-form').toggle();
				return false;
				});
			$('.search-form form').submit(function(){
				$.fn.yiiGridView.update('commune-grid', {
data: $(this).serialize()
});
				return false;
				});
			");
?>

<h2>View Departement : <?php echo $model->name; ?></h2>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		//'id',
                'name',
		'longitude',
		'latitude',

	),
)); ?>

<br />

<?php

$dataProvider=Commune::model()->searchById($_GET['id']);
  if(Commune::model()->searchById($_GET['id'])){ ?>
<div style="margin-bottom:-47px" ><?php echo "<h4><b> Commune in this Departement: </b></h4></br> "; ?></div>
 <?php   }
  ?>

<?php
	 $pageSize=Yii::app()->user->getState('pageSize',Yii::app()->params['defaultPageSize']); // set controller and model for that before
	 $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'commune-grid',
	'showTableOnEmpty'=>'true',
	'dataProvider'=>$dataProvider,
	//'filter'=>$model,
	'columns'=>array(
                'name',
		//'departement0.name',
		//'id',
		'longitude',
		'latitude',

		array( 'class'=>'CButtonColumn',
		       'header'=>CHtml::dropDownList('pageSize',$pageSize,array(10=>10,20=>20,50=>50,100=>100),array(
                                  'onchange'=>"$.fn.yiiGridView.update('commune-grid',{ data:{pageSize: $(this).val() }})",
                    )),
					'template'=>'{view}{update}{delete}',
			   'buttons'=>array (
         'update'=> array(
            'label'=>'Update',
            //'imageUrl'=>Yii::app()->request->baseUrl.'/images/update.png',
            'url'=>'Yii::app()->createUrl("commune/update", array("id"=>$data->id,"depId"=>$_GET[\'id\']))',
            'options'=>array( 'class'=>'icon-edit' ),
        ),
         'view'=>array(
            'label'=>'View',
            //'imageUrl'=>Yii::app()->request->baseUrl.'/images/view.png',
            'url'=>'Yii::app()->createUrl("commune/view", array("id"=>$data->id,"depId"=>$_GET[\'id\']))',
            'options'=>array( 'class'=>'icon-search' ),
        ),
        'delete'=>array(
            'label'=>'Delete',
            //'imageUrl'=>Yii::app()->request->baseUrl.'/images/delete.png',
            'url'=>'Yii::app()->createUrl("commune/delete", array("id"=>$data->id,"depId"=>$_GET[\'id\']))',
            'options'=>array( 'class'=>'icon-remove' ),
        ),
    ),
			),

	),
)); ?>