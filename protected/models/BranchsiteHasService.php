<?php

class BranchsiteHasService extends CActiveRecord
{
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public function tableName()
	{
		return 'branchsite_has_service';
	}

	public function rules()
	{
		return array(
			array('service, branchsite', 'required'),
			array('service, branchsite', 'numerical', 'integerOnly'=>true),
			array('service, branchsite', 'safe', 'on'=>'search'),
		);
	}

	public function relations()
	{
		return array(
			'service' => array(self::BELONGS_TO, 'Service', 'service'),
			'branchsite' => array(self::BELONGS_TO, 'Branchsite', 'branchsite'),
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
			'service' => Yii::t('app', 'Service'),
			'branchsite' => Yii::t('app', 'Branchsite'),
		);
	}

	public function search()
	{
		$criteria=new CDbCriteria;

		$criteria->compare('service',$this->service);

		$criteria->compare('branchsite',$this->branchsite);

		return new CActiveDataProvider(get_class($this), array(
			'criteria'=>$criteria,
		));
	}
}
