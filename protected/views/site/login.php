<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name;
//$this->breadcrumbs=array(
//	'Login',
//);
?>


	<div id="authen">
		<h3 class="firstGraf">Se Connecter</h3>

<div class="form">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'login-form',
	'enableClientValidation'=>true,
	'clientOptions'=>array(
		'validateOnSubmit'=>true,
	),
)); ?>

	<div class="formEnter">
		<?php echo $form->textField($model,'username',array('placeholder' => 'Utilisateur')); ?>
		<?php echo $form->error($model,'username'); ?>
	</div>

	<div class="formEnter">
		<?php echo $form->passwordField($model,'password',array('placeholder' => 'Mot de Passe')); ?>
		<?php echo $form->error($model,'password'); ?>
		
	</div>

	

	<div class="subEnter">
		<?php echo CHtml::submitButton('Connecter'); ?>
	</div>

<?php $this->endWidget(); ?>
</div><!-- form -->
</div>

<div id="iconAdd">
    <ul>
        <li><img src="<?php echo Yii::app()->baseUrl;  ?>/css/img/hackathon_icons/woman.jpg" alt="" class="iconMaj"/></li>
		<li><img src="<?php echo Yii::app()->baseUrl;  ?>/css/img/hackathon_icons/justice.jpg" alt="" class="iconMaj"/></li>
        <li><img src="<?php echo Yii::app()->baseUrl;  ?>/css/img/hackathon_icons/medical.jpg" alt="" class="iconMaj"/></li>
        <li><img src="<?php echo Yii::app()->baseUrl;  ?>/css/img/hackathon_icons/children.jpg" alt="" class="iconMaj"/></li>

    </ul>
</div>
