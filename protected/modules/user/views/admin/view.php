<?php
$this->breadcrumbs=array(
	UserModule::t('Users')=>array('admin'),
	$model->username,
);


$this->menu=array(
    array('label'=>UserModule::t('Update This User'), 'url'=>array('update','id'=>$model->id)),
    array('label'=>UserModule::t('List All Users'), 'url'=>array('admin')),
    array('label'=>UserModule::t('Create New User'), 'url'=>array('create')),

);
?>
<h2><?php echo UserModule::t('View User').' "'.$model->username.'"'; ?></h2>

<?php
 
	$attributes = array(
		'id',
		'username',
	);
	
	$profileFields=ProfileField::model()->forOwner()->sort()->findAll();
	if ($profileFields) {
		foreach($profileFields as $field) {
			array_push($attributes,array(
					'label' => UserModule::t($field->title),
					'name' => $field->varname,
					'type'=>'raw',
					'value' => (($field->widgetView($model->profile))?$field->widgetView($model->profile):(($field->range)?Profile::range($field->range,$model->profile->getAttribute($field->varname)):$model->profile->getAttribute($field->varname))),
				));
		}
	}
	
	array_push($attributes,
		//'password',
		'email',
		//'activkey',
		'create_at',
		'lastvisit_at',
		
				array(
			'name' => 'superuser',
			'value' => User::itemAlias("AdminStatus",$model->superuser),
		),
		array(
			'name' => 'group_name',
			'value' =>Group::model()->findByPk($model->user0->group)->group_name),
		
        array(
			'name' => 'status',
			'value' => User::itemAlias("UserStatus",$model->status),
		)
	);
	
	$this->widget('zii.widgets.CDetailView', array(
		'data'=>$model,
		'attributes'=>$attributes,
	));
	

?>
