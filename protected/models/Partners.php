<?php

class Partners extends CActiveRecord
{
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public function tableName()
	{
		return 'partners';
	}

	public function rules()
	{
		return array(
			array('name, organisation', 'required'),
			array('presence_before_earthquake, organisation', 'numerical', 'integerOnly'=>true),
			array('name', 'length', 'max'=>250),
			array('id, presence_before_earthquake, name, organisation', 'safe', 'on'=>'search'),
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
			'presence_before_earthquake' => Yii::t('app', 'Presence Before Earthquake'),
			'name' => Yii::t('app', 'Name'),
			'organisation' => Yii::t('app', 'Organisation'),
		);
	}

	public function search()
	{
		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);

		$criteria->compare('presence_before_earthquake',$this->presence_before_earthquake);

		$criteria->compare('name',$this->name,true);

		$criteria->compare('organisation',$this->organisation);

		return new CActiveDataProvider(get_class($this), array(
			'criteria'=>$criteria,
		));
	}
}
