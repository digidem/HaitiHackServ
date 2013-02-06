<?php

class Quartier extends CActiveRecord
{
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public function tableName()
	{
		return 'quartier';
	}

	public function rules()
	{
		return array(
			array('name, commune', 'required'),
			array('commune', 'numerical', 'integerOnly'=>true),
			array('longitude, latitude', 'length', 'max'=>45),
			array('name', 'length', 'max'=>250),
			array('id, longitude, latitude, name, commune', 'safe', 'on'=>'search'),
		);
	}

	public function relations()
	{
		return array(
			'branchsites' => array(self::HAS_MANY, 'Branchsite', 'quartier'),
			'commune0' => array(self::BELONGS_TO, 'Commune', 'commune'),
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
			'commune' => Yii::t('app', 'Commune'),
		);
	}

	public function search()
	{
		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);

		$criteria->compare('longitude',$this->longitude,true);

		$criteria->compare('latitude',$this->latitude,true);

		$criteria->compare('name',$this->name,true);

		$criteria->compare('commune',$this->commune);

		return new CActiveDataProvider(get_class($this), array(
			'criteria'=>$criteria,
		));
	}
}
