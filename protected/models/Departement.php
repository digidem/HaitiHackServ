<?php

class Departement extends CActiveRecord
{
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public function tableName()
	{
		return 'departement';
	}

	public function rules()
	{
		return array(
			array('name', 'required'),
			array('longitude, latitude', 'length', 'max'=>45),
			array('name', 'length', 'max'=>250),
			array('id, longitude, latitude, name', 'safe', 'on'=>'search'),
		);
	}

	public function relations()
	{
		return array(
			'communes' => array(self::HAS_MANY, 'Commune', 'departement'),
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
			'longitude' => Yii::t('app', 'Longitude'),
			'latitude' => Yii::t('app', 'Latitude'),
			'name' => Yii::t('app', 'Name'),
		);
	}

	public function search()
	{
		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);

		$criteria->compare('longitude',$this->longitude,true);

		$criteria->compare('latitude',$this->latitude,true);

		$criteria->compare('name',$this->name,true);

		return new CActiveDataProvider(get_class($this), array(
			'criteria'=>$criteria,
		));
	}
}
