<p class="note">Fields with <span class="required">*</span> are required.</p>

<?php echo $form->errorSummary($model); ?>

<label for="Services">Services</label>
    <?php 
        $this->widget('application.components.Relation', array(
                        'model' => $model,
                        'relation' => 'services0',
                        'fields' => 'service_name',
                        'allowEmpty' => false,
                        'style' => 'dropdownlist',
                        )
                ); ?>

<label for="Branchsite">Organisation Branch</label>
    <?php 
        $this->widget('application.components.Relation', array(
                        'model' => $model,
                        'relation' => 'branchsite0',
                        'fields' => 'branch_name',
                        'allowEmpty' => false,
                        'style' => 'dropdownlist',
                        )
                ); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'prix_service'); ?>
<?php echo $form->textField($model,'prix_service'); ?>
<?php echo $form->error($model,'prix_service'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'referral_necessary'); ?>
<?php echo $form->checkBox($model,'referral_necessary'); ?>
<?php echo $form->error($model,'referral_necessary'); ?>
	</div>

	<div class="row">
			</div>

	<div class="row">
			</div>



			
			