<?php

class m130306_133845_new_user_management_addprofile extends CDbMigration
{
	public function up()
	{
		$this->insert('profiles', array(
			'user_id'=>'1'
			'firstname' => 'Administrator',
			'lastname' => 'Admin',

        ));	
	}

	public function down()
	{
		$this->delete(
			'profiles',"user_id = '1'"
		);
	}

	/*
	// Use safeUp/safeDown to do migration with transaction
	public function safeUp()
	{
	}

	public function safeDown()
	{
	}
	*/
}