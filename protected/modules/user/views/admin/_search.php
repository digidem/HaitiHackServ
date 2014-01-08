<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
    'action'=>Yii::app()->createUrl($this->route),
    'method'=>'get',
)); ?>

    <div class="row">
        <?php echo $form->textField($model,'username',array('size'=>20,'maxlength'=>20, 'placeholder' => 'Username')); ?>
   
       
        <?php //echo $form->dropDownList($model,'status',$model->itemAlias('UserStatus')); ?>
   

				<?php echo CHtml::submitButton(Yii::t('app', 'Search')); ?>
				<?php echo '</br> &nbsp&nbsp&nbsp;'.Yii::t('app', '*Clear and click search-button again to refresh.'); ?>
				
    </div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->