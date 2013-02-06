<?php

class Services extends CActiveRecord
{
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public function tableName()
	{
		return 'services';
	}

	public function rules()
	{
		return array(
			array('service_name', 'required'),
			array('service_name', 'length', 'max'=>45),
			array('description', 'safe'),
			array('id, service_name, description', 'safe', 'on'=>'search'),
		);
	}

	public function relations()
	{
		return array(
			'sitePrices' => array(self::HAS_MANY, 'SitePrice', 'services'),
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
			'service_name' => Yii::t('app', 'Service Name'),
			'description' => Yii::t('app', 'Description'),
		);
	}

	public function search()
	{
		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);

		$criteria->compare('service_name',$this->service_name,true);

		$criteria->compare('description',$this->description,true);

		return new CActiveDataProvider(get_class($this), array(
			'criteria'=>$criteria,
		));
	}
}
