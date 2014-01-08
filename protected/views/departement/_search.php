<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
        'action'=>Yii::app()->createUrl($this->route),
        'method'=>'get',
)); ?>

       

        <div class="row">
                <?php echo $form->textField($model,'name',array('size'=>30,'maxlength'=>250, 'placeholder' => 'Search Departement')); ?>
				<?php echo CHtml::submitButton(Yii::t('app', 'Search')); ?>
				<?php echo '</br> &nbsp&nbsp&nbsp;'.Yii::t('app', '*If no resullts found, just clear and click search-button again to refresh.'); ?>
        </div>

        <div class="row buttons">
                <?php //echo CHtml::submitButton(Yii::t('app', 'Search')); ?>
        </div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
