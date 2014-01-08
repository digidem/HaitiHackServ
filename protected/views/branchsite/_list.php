

<?php echo $form->errorSummary($model); ?>

<?php
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

<div class="search-form" style="display:none">
<?php //$this->renderPartial('_search',array(
	//'model'=>$model,
//)); 


?>
</div>

</br></br>


<?php 
   $from=$_GET['from'];
   if($from==1)//la creation vient de la page branchsite
   { $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'branchsite-grid',
	'showTableOnEmpty'=>'true',
	'dataProvider'=>$model->findByPk($_GET['orgaId']),
	
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
			
		array( 'class'=>'CButtonColumn',),		   
		   ),
		  
     )); 
	}
   elseif($from==0)//la creation vient de la page organisation
   { 
     $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'branchsite-grid',
	'showTableOnEmpty'=>'true',
	'dataProvider'=>$model->searchById($_GET['orgaId']),
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
						   
		   
		 
		  ),
     )); 
	  
	}
				
				

?>