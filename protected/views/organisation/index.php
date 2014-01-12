<?php
$this->breadcrumbs = array(
	'Organisations',
	Yii::t('app', 'Index'),
);

$this->menu=array(
	array('label'=>Yii::t('app', 'Creer') . ' Organisation', 'url'=>array('create')),
	array('label'=>'Lister les Branches', 'url'=>array('/branchsite/admin','orgaId'=>'')),
	//array('label'=>Yii::t('app', 'Manage') . ' Organisation', 'url'=>array('admin')),
);

    Yii::app()->clientScript->registerScript('search', "
			$('.search-button').click(function(){
				$('.search-form').toggle();
				return false;
				});
			$('.search-form form').submit(function(){
				$.fn.yiiGridView.update('organisation-grid', {
data: $(this).serialize()
});
				return false;
				});
			");
?>

<?php //echo CHtml::link(Yii::t('app', 'Advanced Search'),'#',array('class'=>'search-button')); ?>
<div class="search-form" style="">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div>

<div style="margin-bottom:-27px" ><h2>Organisations</h2> </div>

<?php /* $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
));  */?>

<?php
    $pageSize=Yii::app()->user->getState('pageSize',Yii::app()->params['defaultPageSize']); // set controller and model for that before
	$this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'organisation-grid',
	'dataProvider'=>$model->search(),
	'enablePagination'=>true,
	'selectableRows' =>1,
	//'filter'=>$model,
	'columns'=>array(
		//'id',
		'name',
		'email',
		'acronym',
		//'url',
		//'present_before_earthquake',
		/*
		'coverage',
		*/
		array(
			'class'=>'CButtonColumn',
			'header'=>CHtml::dropDownList('pageSize',$pageSize,array(10=>10,20=>20,50=>50,100=>100),array(
                                  'onchange'=>"$.fn.yiiGridView.update('organisation-grid',{ data:{pageSize: $(this).val() }})",
                    )),
			'template'=>'{view}{update}',
		),
	),
)); ?>