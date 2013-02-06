<?php

class Contact extends CActiveRecord
{
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public function tableName()
	{
		return 'contact';
	}

	public function rules()
	{
		return array(
			array('name, organisation', 'required'),
			array('organisation', 'numerical', 'integerOnly'=>true),
			array('name', 'length', 'max'=>250),
			array('phone', 'length', 'max'=>45),
			array('email', 'length', 'max'=>100),
			array('id, name, phone, email, organisation', 'safe', 'on'=>'search'),
		);
	}

	public function relations()
	{
		return array(
			'organisation0' => array(self::BELONGS_TO, 'Organisation', 'organisation'),
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
			'id' => Yii::t('app', 'ID'),
			'name' => Yii::t('app', 'Name'),
			'phone' => Yii::t('app', 'Phone'),
			'email' => Yii::t('app', 'Email'),
			'organisation' => Yii::t('app', 'Organisation'),
		);
	}

	public function search()
	{
		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);

		$criteria->compare('name',$this->name,true);

		$criteria->compare('phone',$this->phone,true);

		$criteria->compare('email',$this->email,true);

		$criteria->compare('organisation',$this->organisation);

		return new CActiveDataProvider(get_class($this), array(
			'criteria'=>$criteria,
		));
	}
}
