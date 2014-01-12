<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
        'action'=>Yii::app()->createUrl($this->route),
        'method'=>'get',
)); ?>

       

        <div class="row">
                
                <?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>250, 'placeholder' => 'NOM Organisation')); ?>
				<?php echo $form->textField($model,'acronym',array('size'=>20,'maxlength'=>20, 'placeholder' => 'ACRONYME Organisation')); ?>
				<?php echo CHtml::submitButton(Yii::t('app', 'Recherche')); ?>
				<?php echo '</br> &nbsp&nbsp&nbsp;'.Yii::t('app', '*Effacer et cliquer le bouton-recherche &agrave; nouveau pour rafr&eacute;chir la page.'); ?>
        </div>

        
        <div class="row">
                <?php //echo $form->label($model,'acronym'); ?>
                <?php //echo $form->textField($model,'acronym',array('size'=>20,'maxlength'=>20)); ?>
        </div>

        

        <div class="row">
                <?php //echo $form->label($model,'present_before_earthquake'); ?>
                <?php //echo $form->checkBox($model,'present_before_earthquake'); ?>
        </div>

        <div class="row buttons">
                <?php //echo CHtml::submitButton(Yii::t('app', 'Search')); ?>
        </div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->
