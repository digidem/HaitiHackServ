<?php
$this->breadcrumbs=array(
	'Communes'=>array(Yii::t('app', 'index')),
	Yii::t('app', 'Manage'),
);

		if(isset($_GET['depId'])&& ($_GET['depId']!=null))
		      $menuItem=array('label'=>'Previous page', 'url'=>array('/departement/view', 'id'=>$_GET['depId']));
		else
		      $menuItem=array('label'=>'Previous page', 'url'=>array('/departement/index', 'depId'=>''));

$Departement='Departement';

$this->menu=array(
		$menuItem,
		array('label'=>'List Quartiers', 'url'=>array('/quartier/admin','comId'=>'','all'=>'','depId'=>$_GET['depId'])),
		/* array('label'=>Yii::t('app',
				'List Commune'), 'url'=>array('index')),
		array('label'=>Yii::t('app', 'Create Commune'),
				'url'=>array('create')),*/
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

<h2> All &nbsp;Communes</h2>

<?php //echo CHtml::link(Yii::t('app', 'Advanced Search'),'#',array('class'=>'search-button')); ?>
<div class="search-form" style="">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div>

<?php $pageSize=Yii::app()->user->getState('pageSize',Yii::app()->params['defaultPageSize']); // set controller and model for that before
     $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'commune-grid',
	'dataProvider'=>$model->search(),
	//'filter'=>$model,
	'columns'=>array(
                'name',
		array('name'=>$Departement, 'value'=>'$data->departement0->name'),
		//'id',
		//'longitude',
		//'latitude',

		array(
			'class'=>'CButtonColumn',
			'header'=>CHtml::dropDownList('pageSize',$pageSize,array(10=>10,20=>20,50=>50,100=>100),array(
                                  'onchange'=>"$.fn.yiiGridView.update('commune-grid',{ data:{pageSize: $(this).val() }})",
                    )),
					'template'=>'{view}',
					'buttons'=>array (
        'view'=> array(
            'label'=>'view',
            //'imageUrl'=>Yii::app()->request->baseUrl.'/images/view.png',
            'url'=>'Yii::app()->createUrl("commune/view", array("id"=>$data->id,"depId"=>$_GET[\'depId\'],"all"=>1))',
            'options'=>array( 'class'=>'icon-view' ),
        ),
		),
		),
	),
)); ?>
