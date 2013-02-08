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
                <?php echo $form->label($model,'departement'); ?>
                <?php 
					$this->widget('application.components.Relation', array(
							'model' => $model,
							'relation' => 'departement0',
							'fields' => 'name',
							'allowEmpty' => true,
							'style' => 'dropdownlist',
							)
						); ?>
        </div>

        <div class="row buttons">
                <?php echo CHtml::submitButton(Yii::t('app', 'Search')); ?>
        </div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
