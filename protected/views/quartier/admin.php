<?php
$this->breadcrumbs=array(
	'Quartiers'=>array(Yii::t('app', 'index')),
	Yii::t('app', 'Manage'),
);

if(isset($_GET['comId'])&& ($_GET['comId']!=null))
		{    if(isset($_GET['depId'])&&($_GET['depId']!=null))
		       $menuItem=array('label'=>'Previous page', 'url'=>array('/commune/view','id'=>$_GET['comId'],'depId'=>$_GET['depId']));  
		     else
		       $menuItem=array('label'=>'Previous page', 'url'=>array('/quartier/view', 'id'=>$_GET['comId']));
		}
		elseif($_GET['all']==null)
		      $menuItem=array('label'=>'Previous page', 'url'=>array('/commune/admin','comId'=>'','depId'=>$_GET['depId']));
		   else 
			  $menuItem=array('label'=>'Previous page', 'url'=>array('/quartier/index'));
			  
$Commune='commune';

$this->menu=array(
		$menuItem,
		/* array('label'=>Yii::t('app',
				'List Quartier'), 'url'=>array('index')),
		array('label'=>Yii::t('app', 'Create Quartier'),
				'url'=>array('create')), */
			);

	
			
		Yii::app()->clientScript->registerScript('search', "
			$('.search-button').click(function(){
				$('.search-form').toggle();
				return false;
				});
			$('.search-form form').submit(function(){
				$.fn.yiiGridView.update('quartier-grid', {
data: $(this).serialize()
});
				return false;
				});
			");
			
			
	
	?>

		
<h1> All&nbsp;Quartiers</h1>

<?php //echo CHtml::link(Yii::t('app', 'Advanced Search'),'#',array('class'=>'search-button')); ?>
<div class="search-form" style="">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div>

<?php $pageSize=Yii::app()->user->getState('pageSize',Yii::app()->params['defaultPageSize']); // set controller and model for that before
    $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'quartier-grid',
	'dataProvider'=>$model->search(),
	//'filter'=>$model,
	'columns'=>array(
		//'id',
		//'longitude',
		//'latitude',
		'name',
		array('name'=>$Commune, 'value'=>'$data->commune0->name'),
		array(
			'class'=>'CButtonColumn',
			'header'=>CHtml::dropDownList('pageSize',$pageSize,array(10=>10,20=>20,50=>50,100=>100),array(
                                  'onchange'=>"$.fn.yiiGridView.update('quartier-grid',{ data:{pageSize: $(this).val() }})",
                    )),
					'template'=>'{view}',
					'buttons'=>array (
        'view'=> array(
            'label'=>'view',
            //'imageUrl'=>Yii::app()->request->baseUrl.'/images/view.png',
            'url'=>'Yii::app()->createUrl("quartier/view", array("id"=>$data->id,"comId"=>$_GET[\'comId\'],"all"=>1))',
            'options'=>array( 'class'=>'icon-view' ),
        ),
		),
		),
	),
)); ?>
