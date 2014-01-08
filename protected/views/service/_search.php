<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
        'action'=>Yii::app()->createUrl($this->route),
        'method'=>'get',
)); ?>

       

        <div class="row">
                
				<?php echo $form->textField($model,'service_name',array('size'=>60,'maxlength'=>250, 'placeholder' => 'Service NAME ')); ?>
				<?php echo CHtml::submitButton(Yii::t('app', 'Search')); ?>
				<?php echo '</br> &nbsp&nbsp&nbsp;'.Yii::t('app', '*Clear and click search-button again to refresh.'); ?>
        </div>

        
        <div class="row buttons">
                <?php //echo CHtml::submitButton(Yii::t('app', 'Search')); ?>
        </div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
