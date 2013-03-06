<?php

class m130305_103918_new_user_management_profiles_fields extends CDbMigration
{
	public function up()
	{
		
		$this->createTable('profiles_fields', array(
            'id' => 'pk',
            'required' => 'INTEGER (1) NOT NULL ',
            'position' => 'INTEGER (3) NOT NULL ',
            'visible' => 'INTEGER (1) NOT NULL ',
			'varname' => 'VARCHAR (50) NOT NULL ',
			'title' => 'VARCHAR (255) NOT NULL ',
			'field_type' => 'VARCHAR (50) NOT NULL ',
			'field_size' => 'VARCHAR (15) NOT NULL ',
			'field_size_min' => 'VARCHAR (15) NOT NULL ',
			'match' => 'VARCHAR (255) NOT NULL ',
			'range' => 'VARCHAR (255) NOT NULL ',
			'error_message' => 'VARCHAR (255) NOT NULL ',
			'default' => 'VARCHAR (255) NOT NULL ',
			'widget' => 'VARCHAR (255) NOT NULL ',
			'other_validator' => 'VARCHAR (50000) NOT NULL ',
			'widgetparams' => 'VARCHAR (50000) NOT NULL ',

        ));

	
	}

	public function down()
	{

        $this->dropTable('profiles_fields');
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