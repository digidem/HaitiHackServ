<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
        'action'=>Yii::app()->createUrl($this->route),
        'method'=>'get',
)); ?>

       

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
                 <?php 
                $this->widget('application.components.Relation', array(
                        'model' => $model,
                        'relation' => 'branchsite0',
                        'fields' => 'branch_name',
                        'allowEmpty' => false,
                        'style' => 'dropdownlist',
                        )
                ); ?>
        </div>

        <div class="row">
                <?php echo $form->label($model,'services'); ?>
                <?php 
        $this->widget('application.components.Relation', array(
                        'model' => $model,
                        'relation' => 'services0',
                        'fields' => 'service_name',
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
