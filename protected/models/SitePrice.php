<?php

class SitePrice extends CActiveRecord
{
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public function tableName()
	{
		return 'site_price';
	}

	public function rules()
	{
		return array(
			array('referral_necessary, branchsite, services', 'required'),
			array('referral_necessary, branchsite, services', 'numerical', 'integerOnly'=>true),
			array('prix_service', 'numerical'),
			array('id, prix_service, referral_necessary, branchsite, services', 'safe', 'on'=>'search'),
		);
	}

	public function relations()
	{
		return array(
			'branchsite0' => array(self::BELONGS_TO, 'Branchsite', 'branchsite'),
			'services0' => array(self::BELONGS_TO, 'Services', 'services'),
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
			'prix_service' => Yii::t('app', 'Prix Service'),
			'referral_necessary' => Yii::t('app', 'Referral Necessary'),
			'branchsite' => Yii::t('app', 'Branchsite'),
			'services' => Yii::t('app', 'Services'),
		);
	}

	public function search()
	{
		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);

		$criteria->compare('prix_service',$this->prix_service);

		$criteria->compare('referral_necessary',$this->referral_necessary);

		$criteria->compare('branchsite',$this->branchsite);

		$criteria->compare('services',$this->services);

		return new CActiveDataProvider(get_class($this), array(
			'criteria'=>$criteria,
		));
	}
}
