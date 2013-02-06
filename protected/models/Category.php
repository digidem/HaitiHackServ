<?php

class Category extends CActiveRecord
{
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public function tableName()
	{
		return 'category';
	}

	public function rules()
	{
		return array(
			array('category_name', 'required'),
			array('category_name', 'length', 'max'=>100),
			array('description', 'safe'),
			array('id, category_name, description', 'safe', 'on'=>'search'),
		);
	}

	public function relations()
	{
		return array(
			'branchsites' => array(self::MANY_MANY, 'Branchsite', 'branchsite_has_category(category, branchsite)'),
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
			'category_name' => Yii::t('app', 'Category Name'),
			'description' => Yii::t('app', 'Description'),
		);
	}

	public function search()
	{
		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);

		$criteria->compare('category_name',$this->category_name,true);

		$criteria->compare('description',$this->description,true);

		return new CActiveDataProvider(get_class($this), array(
			'criteria'=>$criteria,
		));
	}
}
