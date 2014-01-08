<?php

class Group extends CActiveRecord
{
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public function tableName()
	{
		return 'group';
	}

	public function rules()
	{
		return array(
			array('group_name', 'required'),
			array('group_name', 'length', 'max'=>50),
			array('id, group_name','safe', 'on'=>'search'),
		);
	}

	public function relations()
	{
		return array(
			'user' => array(self::HAS_MANY, 'User', 'group_has_user(group, user)'),
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
			'group_name' => Yii::t('app', 'group Name'),
			
		);
	}

	public function search()
	{
		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);

		$criteria->compare('group_name',$this->group_name,true);

		return new CActiveDataProvider(get_class($this), array(
			'pagination'=>array(
        			'pageSize'=> Yii::app()->user->getState('pageSize',Yii::app()->params['defaultPageSize']),
    			),
			'criteria'=>$criteria,
		));
	}
	
	
	
	public function searchByIdUser($id)
	{      
			$criteria = new CDbCriteria;
			
			$criteria->alias ='g';
			$criteria->select = 'g.id, g.group_name';
			$criteria->join = 'left join group_has_user gu on (g.id=gu.group)';
			$criteria->condition = 'gu.user=:Id';
			   $criteria->params = array(':Id'=>$id);
	        
			//$criteria->limit = '10';
		    
		    		 
    return new CActiveDataProvider($this, array(
             'pagination'=>array(
        			'pageSize'=> Yii::app()->user->getState('pageSize',Yii::app()->params['defaultPageSize']),
    			), 
			'criteria'=>$criteria,
		
		
    ));
    }
	
	}