<?php

class m130306_112515_new_user_management_addauthitem extends CDbMigration
{
	public function up()
	{
        $this->insert('authitem', array(
            'name' => 'admin',
            'type' => '0',
            'description' => '',
            'bizrule' => '',
            'data' => '',
        ));	
	}

	public function down()
	{
		$this->delete(
			'authitem',"name = 'admin'"
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