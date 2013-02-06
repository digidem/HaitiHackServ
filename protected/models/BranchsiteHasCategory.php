<?php

class BranchsiteHasCategory extends CActiveRecord
{
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public function tableName()
	{
		return 'branchsite_has_category';
	}

	public function rules()
	{
		return array(
			array('category, branchsite', 'required'),
			array('category, branchsite', 'numerical', 'integerOnly'=>true),
			array('category, branchsite', 'safe', 'on'=>'search'),
		);
	}

	public function relations()
	{
		return array(
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
			'category' => Yii::t('app', 'Category'),
			'branchsite' => Yii::t('app', 'Branchsite'),
		);
	}

	public function search()
	{
		$criteria=new CDbCriteria;

		$criteria->compare('category',$this->category);

		$criteria->compare('branchsite',$this->branchsite);

		return new CActiveDataProvider(get_class($this), array(
			'criteria'=>$criteria,
		));
	}
}
