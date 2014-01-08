<?php

class GroupHasUser extends CActiveRecord
{
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public function tableName()
	{
		return 'group_has_user';
	}

	public function rules()
	{
		return array(
			array('group, user', 'required'),
			array('group, user', 'numerical', 'integerOnly'=>true),
			array('group, user', 'safe', 'on'=>'search'),
		);
	}

	public function relations()
	{
		return array(
			'group0' => array(self::BELONGS_TO, 'Group', 'group'),
			'user0' => array(self::BELONGS_TO, 'User', 'user'),
		);
	}

	public function behaviors()
	{
		return array('CAdvancedArBehavior',
				array('class' => 'ext.CAdvancedArBehavior')
				);
	}

	public function attributeLabels()
	{
		return array(
			'group' => Yii::t('app', 'Group'),
			'user' => Yii::t('app', 'User'),
		);
	}

	public function search()
	{
		$criteria=new CDbCriteria;

		$criteria->compare('group',$this->group);

		$criteria->compare('user',$this->user);

		return new CActiveDataProvider(get_class($this), array(
			'criteria'=>$criteria,
		));
	}
}
