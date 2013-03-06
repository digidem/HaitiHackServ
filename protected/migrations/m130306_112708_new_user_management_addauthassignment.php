<?php

class m130306_112708_new_user_management_addauthassignment extends CDbMigration
{
	public function up()
	{
        $this->insert('authassignment', array(
            'itemname' => 'admin',
            'userid' => '1',
            'bizrule' => '',
            'data' => '',
        ));	
	}

	public function down()
	{
		$this->delete(
			'authassignment',"itemname = 'admin'"
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