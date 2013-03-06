<?php

class m130305_103857_new_user_management_profiles extends CDbMigration
{
	public function up()
	{
		
		$this->createTable('profiles', array(
            'user_id' => 'pk',
			'firstname' => 'VARCHAR (50) NOT NULL DEFAULT \'\'',
			'lastname' => 'VARCHAR (50) NOT NULL DEFAULT \'\'',

        ));
        
        $this->createIndex('profiles_pk', 'profiles', 'id', true);	
	
	}

	public function down()
	{
        $this->dropIndex('profiles_pk');	
        $this->dropTable('profiles');
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