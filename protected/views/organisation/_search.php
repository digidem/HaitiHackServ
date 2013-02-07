<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
        'action'=>Yii::app()->createUrl($this->route),
        'method'=>'get',
)); ?>

        <div class="row">
                <?php echo $form->label($model,'id'); ?>
                <?php echo $form->textField($model,'id'); ?>
        </div>

        <div class="row">
                <?php echo $form->label($model,'name'); ?>
                <?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>250)); ?>
        </div>

        <div class="row">
                <?php echo $form->label($model,'email'); ?>
                <?php echo $form->textField($model,'email',array('size'=>45,'maxlength'=>45)); ?>
        </div>

        <div class="row">
                <?php echo $form->label($model,'acronym'); ?>
                <?php echo $form->textField($model,'acronym',array('size'=>20,'maxlength'=>20)); ?>
        </div>

        <div class="row">
                <?php echo $form->label($model,'url'); ?>
                <?php echo $form->textField($model,'url',array('size'=>60,'maxlength'=>250)); ?>
        </div>

        <div class="row">
                <?php echo $form->label($model,'present_before_earthquake'); ?>
                <?php echo $form->checkBox($model,'present_before_earthquake'); ?>
        </div>

        <div class="row">
                <?php echo $form->label($model,'coverage'); ?>
                <?php echo $form->textField($model,'coverage',array('size'=>45,'maxlength'=>45)); ?>
        </div>

        <div class="row buttons">
                <?php echo CHtml::submitButton(Yii::t('app', 'Search')); ?>
        </div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
