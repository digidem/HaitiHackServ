<?php

class Commune extends CActiveRecord
{
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public function tableName()
	{
		return 'commune';
	}

	public function rules()
	{
		return array(
			array('name, departement', 'required'),
			array('departement', 'numerical', 'integerOnly'=>true),
			array('longitude, latitude', 'length', 'max'=>45),
			array('name', 'length', 'max'=>250),
			array('id, longitude, latitude, name, departement', 'safe', 'on'=>'search'),
		);
	}

	public function relations()
	{
		return array(
			'departement0' => array(self::BELONGS_TO, 'Departement', 'departement'),
			'quartiers' => array(self::HAS_MANY, 'Quartier', 'commune'),
		    'branchsites' => array(self::HAS_MANY, 'Branchsite', 'commune'),
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
			'departement' => Yii::t('app', 'Departement'),
		);
	}

	public function search()
	{
		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);

		$criteria->compare('longitude',$this->longitude,true);

		$criteria->compare('latitude',$this->latitude,true);

		$criteria->compare('name',$this->name,true);

		$criteria->compare('departement',$this->departement);

		return new CActiveDataProvider(get_class($this), array(
			'criteria'=>$criteria,
		));
	}
}
