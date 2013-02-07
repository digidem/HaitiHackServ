<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
        'action'=>Yii::app()->createUrl($this->route),
        'method'=>'get',
)); ?>

        <div class="row">
                <?php // echo $form->label($model,'id'); ?>
                <?php // echo $form->textField($model,'id'); ?>
        </div>
        
          <div class="row">
                <?php echo $form->label($model,'branch_name'); ?>
                <?php echo $form->textField($model,'branch_name',array('size'=>60,'maxlength'=>250)); ?>
        </div>
        
        <div class="row">
                <?php echo $form->label($model,'street_address'); ?>
                <?php echo $form->textField($model,'street_address',array('size'=>60,'maxlength'=>250)); ?>
        </div>

        <div class="row">
                <?php // echo $form->label($model,'longitude'); ?>
                <?php // echo $form->textField($model,'longitude',array('size'=>45,'maxlength'=>45)); ?>
        </div>

        <div class="row">
                <?php // echo  $form->label($model,'latitude'); ?>
                <?php // echo $form->textField($model,'latitude',array('size'=>45,'maxlength'=>45)); ?>
        </div>

        <div class="row">
                <?php // echo $form->label($model,'url'); ?>
                <?php // echo $form->textField($model,'url',array('size'=>60,'maxlength'=>250)); ?>
        </div>

        <div class="row">
                <?php // echo $form->label($model,'site_phone'); ?>
                <?php // echo $form->textField($model,'site_phone',array('size'=>45,'maxlength'=>45)); ?>
        </div>

      

        <div class="row">
                <?php echo $form->label($model,'organisation'); ?>
                <?php 
			$this->widget('application.components.Relation', array(
					'model' => $model,
					'relation' => 'organisation0',
					'fields' => 'name',
					'allowEmpty' => false,
					'style' => 'dropdownlist',
					)
				); ?>
        </div>

        <div class="row">
                <?php echo $form->label($model,'quartier0.name'); ?>
                <?php 
					$this->widget('application.components.Relation', array(
							'model' => $model,
							'relation' => 'quartier0',
							'fields' => 'name',
							'allowEmpty' => true,
							'style' => 'dropdownlist',
							)
						); ?>
            
                <?php //echo $form->textField($model, 'quartier0.name', array('size'=>60, 'maxlength'=>250)); ; ?>
        </div>

        <div class="row buttons">
                <?php echo CHtml::submitButton(Yii::t('app', 'Search')); ?>
        </div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
