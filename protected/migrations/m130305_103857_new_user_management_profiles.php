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
	}

	public function down()
	{
		$this->dropTable('profiles');
	}
}
