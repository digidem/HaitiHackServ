<?php

class Users extends CActiveRecord
{
    
    const LEVEL_ADMIN = 'Admin';
    const LEVEL_USER = 'Basic';
    
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public function tableName()
	{
		return 'users';
	}

	public function rules()
	{
		return array(
			array('fullname, username, password, email, level', 'required'),
			array('fullname', 'length', 'max'=>150),
			array('username, level', 'length', 'max'=>45),
			array('password, email', 'length', 'max'=>100),
			array('id, fullname, username, password, email, level', 'safe', 'on'=>'search'),
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
			'id' => Yii::t('app', 'ID'),
			'fullname' => Yii::t('app', 'Fullname'),
			'username' => Yii::t('app', 'Username'),
			'password' => Yii::t('app', 'Password'),
			'email' => Yii::t('app', 'Email'),
			'level' => Yii::t('app', 'Level'),
		);
	}

	public function search()
	{
		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);

		$criteria->compare('fullname',$this->fullname,true);

		$criteria->compare('username',$this->username,true);

		$criteria->compare('password',$this->password,true);

		$criteria->compare('email',$this->email,true);

		$criteria->compare('level',$this->level,true);

		return new CActiveDataProvider(get_class($this), array(
			'criteria'=>$criteria,
		));
	}
        
        
        // to get all the level 
        
        public function getLevels(){
            return array(
                self::LEVEL_ADMIN=>'Admin',
                self::LEVEL_USER=>'Basic',
                               
            );            
        }
        
        // Get one level of user 
        
        public function getLevel(){
            $level = $this->getLevels();
            return $level[$this->level];
        }
        
        //Encrypt the password with MD5 
        
        public function encrypt($password){                
                return md5($password);            
               }
}
