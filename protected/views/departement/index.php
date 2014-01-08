<?php
$this->breadcrumbs = array(
	'Departements',
	Yii::t('app', 'Index'),
);

$this->menu=array(
	//array('label'=>Yii::t('app', 'Create') . ' Departement', 'url'=>array('create')),
	array('label'=>'Lister les Communes', 'url'=>array('/commune/admin','depId'=>'')),
	
);



Yii::app()->clientScript->registerScript('search', "
			$('.search-button').click(function(){
				$('.search-form').toggle();
				return false;
				});
			$('.search-form form').submit(function(){
				$.fn.yiiGridView.update('departement-grid', {
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


<div style="margin-bottom:-27px" ><h2>Departements</h2> </div>


<?php /*  $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); */ ?>


<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'departement-grid',
	'dataProvider'=>$model->search(),
	//'filter'=>$model,
	'columns'=>array(
		//'id',
		'name',
		'longitude',
		'latitude',
		array(
			'class'=>'CButtonColumn',
			'template'=>'{view}{update}',
		),
	),
)); ?>






