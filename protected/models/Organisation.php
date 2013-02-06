<?php

class Organisation extends CActiveRecord
{
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public function tableName()
	{
		return 'organisation';
	}

	public function rules()
	{
		return array(
			array('name', 'required'),
			array('present_before_earthquake', 'numerical', 'integerOnly'=>true),
			array('name, url', 'length', 'max'=>250),
			array('email, coverage', 'length', 'max'=>45),
			array('acronym', 'length', 'max'=>20),
			array('id, name, email, acronym, url, present_before_earthquake, coverage', 'safe', 'on'=>'search'),
		);
	}

	public function relations()
	{
		return array(
			'branchsites' => array(self::HAS_MANY, 'Branchsite', 'organisation'),
			'contacts' => array(self::HAS_MANY, 'Contact', 'organisation'),
			'partners' => array(self::HAS_MANY, 'Partners', 'organisation'),
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
			'email' => Yii::t('app', 'Email'),
			'acronym' => Yii::t('app', 'Acronym'),
			'url' => Yii::t('app', 'Url'),
			'present_before_earthquake' => Yii::t('app', 'Present Before Earthquake'),
			'coverage' => Yii::t('app', 'Coverage'),
		);
	}

	public function search()
	{
		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);

		$criteria->compare('name',$this->name,true);

		$criteria->compare('email',$this->email,true);

		$criteria->compare('acronym',$this->acronym,true);

		$criteria->compare('url',$this->url,true);

		$criteria->compare('present_before_earthquake',$this->present_before_earthquake);

		$criteria->compare('coverage',$this->coverage,true);

		return new CActiveDataProvider(get_class($this), array(
			'criteria'=>$criteria,
		));
	}
}
