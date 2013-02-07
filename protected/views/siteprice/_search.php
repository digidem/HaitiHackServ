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
                <?php echo $form->label($model,'prix_service'); ?>
                <?php echo $form->textField($model,'prix_service'); ?>
        </div>

        <div class="row">
                <?php echo $form->label($model,'referral_necessary'); ?>
                <?php echo $form->checkBox($model,'referral_necessary'); ?>
        </div>

        <div class="row">
                <?php echo $form->label($model,'branchsite'); ?>
                <?php ; ?>
        </div>

        <div class="row">
                <?php echo $form->label($model,'services'); ?>
                <?php ; ?>
        </div>

        <div class="row buttons">
                <?php echo CHtml::submitButton(Yii::t('app', 'Search')); ?>
        </div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
