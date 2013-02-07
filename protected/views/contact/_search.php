<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
        'action'=>Yii::app()->createUrl($this->route),
        'method'=>'get',
)); ?>

       

        <div class="row">
                <?php echo $form->label($model,'name'); ?>
                <?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>250)); ?>
        </div>

        <div class="row">
                <?php echo $form->label($model,'phone'); ?>
                <?php echo $form->textField($model,'phone',array('size'=>45,'maxlength'=>45)); ?>
        </div>

        <div class="row">
                <?php echo $form->label($model,'email'); ?>
                <?php echo $form->textField($model,'email',array('size'=>60,'maxlength'=>100)); ?>
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

        <div class="row buttons">
                <?php echo CHtml::submitButton(Yii::t('app', 'Search')); ?>
        </div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
