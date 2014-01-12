<?php
$this->breadcrumbs=array(
	'Branchsites'=>array(Yii::t('app', 'index')),
	Yii::t('app', 'Manage'),
);

        if(isset($_GET['orgaId'])&& ($_GET['orgaId']!=null))
		      $menuItem=array('label'=>'Previous page', 'url'=>array('/organisation/view', 'id'=>$_GET['orgaId']));
				else
		      $menuItem=array('label'=>'Previous page', 'url'=>array('/organisation/index'));

$this->menu=array(
		$menuItem,
		/* array('label'=>Yii::t('app',
				'List Branchsite'), 'url'=>array('index')),
		array('label'=>Yii::t('app', 'Create Branchsite'),
				'url'=>array('create')), */
			);

		Yii::app()->clientScript->registerScript('search', "
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

<h2> All&nbsp;Branchsites&nbsp;Organisations</h2>

<?php //echo CHtml::link(Yii::t('app', 'Advanced Search'),'#',array('class'=>'search-button')); ?>
<div class="search-form" style="">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div>

<?php $pageSize=Yii::app()->user->getState('pageSize',Yii::app()->params['defaultPageSize']); // set controller and model for that before
     $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'branchsite-grid',
	'dataProvider'=>$model->search(),
	//'filter'=>$model,
	'columns'=>array(
		//'id',
                'branch_name',

		'street_address',
                //'quartier0.name'
		//'longitude',
		//'latitude',
		//'url',
		'site_phone',
		'organisation0.name',

		 array(
			'class'=>'CButtonColumn',
			'header'=>CHtml::dropDownList('pageSize',$pageSize,array(10=>10,20=>20,50=>50,100=>100),array(
                                  'onchange'=>"$.fn.yiiGridView.update('branchsite-grid',{ data:{pageSize: $(this).val() }})",
                    )),
					'template'=>'{view}',
					'buttons'=>array (
        'view'=> array(
            'label'=>'view',
            //'imageUrl'=>Yii::app()->request->baseUrl.'/images/view.png',
            'url'=>'Yii::app()->createUrl("branchsite/view", array("id"=>$data->id,"orgaId"=>$_GET[\'orgaId\'],"all"=>1))',
            'options'=>array( 'class'=>'icon-view' ),
        ),
		),
		),
	),
)); ?>
