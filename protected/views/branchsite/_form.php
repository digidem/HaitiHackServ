<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/osm_results.css" />
<?php
$assets = Yii::app()->getAssetManager()->publish('protected/javascripts');
Yii::app()->clientScript->registerScriptFile(
    $assets . '/search_listener.js',
    CClientScript::POS_END
);

Yii::app()->clientScript->registerScript(
    'search_listener',
<<<EOF
      new SearchListener($('[data-address-search="base"]'));
EOF
, CClientScript::POS_END
);
?>

<?php $this->widget('ext.yiiselect2.YiiSelect2', array('target' => 'select',)); ?>


<p class="note">Fields with <span class="required">*</span> are required.</p>

<?php echo $form->errorSummary($model); ?>
<div class="niv1">

<div class="row">
	<?php echo $form->labelEx($model,'branch_name'); ?>
	<?php echo $form->textField($model, 'branch_name',
		array(
			'size'=>35,
			'maxlength'=>250,
			'placeholder' => 'Branch Name'
	)); ?>
	<?php echo $form->error($model,'branch_name'); ?>
	
	
	
	<?php echo $form->labelEx($model, 'categories'); ?>
	<?php
		$criteria = new CDbCriteria(array('order'=>'category_name'));

		echo  $form->dropDownList($model, 'categories',
			CHtml::listData(Category::model()->findAll($criteria), 'id', 'category_name'),
			array('multiple'=>'multiple')
		);
	?>
	<?php echo $form->error($model, 'categories'); ?>
	
	
	<?php //$modelService = new Service();
	           echo $form->labelEx($model,'Service'); ?>
	<?php
		/* if(isset($this->service_id))
          echo $form->dropDownList($modelService,'service_name',$this->loadService(), array('prompt'=> 'Please Select', 'options' => array($this->service_id=>array('selected'=>true)) )); 
		else
		  {  $this->service_id=0;
		      echo $form->dropDownList($modelService,'service_name',$this->loadService());
		   } */

		$criteria = new CDbCriteria(array('order'=>'service_name'));

		echo $form->dropDownList($model, 'services',
			CHtml::listData(Service::model()->findAll($criteria), 'id', 'service_name'),
			array('multiple'=>'multiple')
		);
	
	
	?>
	<?php echo $form->error($model, 'service'); ?>
</div>
</div>

<?php
     $criteria = new CDbCriteria(array('order'=>'name'));
	
   ?>

<span data-address-search="base">
	

	<div class="row">
	  <label for="Quartier">Quartier <span class="required">*</span></label> 
	  <?php $this->widget('application.components.Relation', array(
		'model' => $model,
		'relation' => 'quartier0',
		'fields' => 'name',
		'allowEmpty' => true,
		'style' => 'dropdownlist',
		'parentObjects' => Quartier::model()->findAll($criteria),
		'htmlOptions' => array("data-address-search" => "source"),
	  ));  ?>
	</div>



<div class="right">
	
	<?php echo $form->labelEx($model,'site_phone'); ?>
	<?php echo $form->textField($model, 'site_phone', array(
		'placeholder' => 'Phone Number',
		'size' => 45,
		'maxlength' => 200,
	)); ?>
	<?php echo $form->error($model, 'site_phone'); ?>

	<?php echo $form->labelEx($model, 'url'); ?>
	<?php echo $form->urlField($model, 'url', array(
		'placeholder' => 'URL',
		'size' => 45,
	   	'maxlength' => 200,
	)); ?>
	<?php echo $form->error($model,'url'); ?>
</div>



	<div class="row">
		<?php echo $form->labelEx($model,'street_address'); ?>
		<?php echo $form->textField(
			$model,
			'street_address',
			array(
				'size' => 48,
				'maxlength' => 250,
				"data-address-search" => "search",
			)
		); ?>
		<?php echo $form->error($model,'street_address'); ?>
		<input type="button" data-address-search="trigger" value="Search" />
	</div>

	<div style="margin-top:17px;"> 
		<input type="text" name="addressFound" placeholder="This is the full location found in the geolocation service" size="58">
	</div>

	<div>
		<input type="hidden" name="builtAddress" placeholder="Fill me out!" size="100">
	</div>

	<div class="row">
	  <label for="longitude">Coordinates</label>
		Lat: <?php echo $form->textField(
			$model,
			'longitude',
			array(
				'size'=>20,
				'maxlength' => 45,
				'data-address-search' => 'longitude',
			)
		); ?>

		&nbsp;&nbsp;&nbsp;&nbsp;Lon: <?php echo $form->textField(
			$model,
			'latitude',
			array(
				'size' => 20,
				'maxlength' => 45,
				'data-address-search' => 'latitude',
			)
		); ?>

		<?php echo $form->error($model, 'longitude'); ?> 
		<?php echo $form->error($model, 'latitude'); ?>
	</div>
</span>



<script src="http://digidem.github.com/HaitiHackMap/scripts/haiti_hack_map.js"></script>
