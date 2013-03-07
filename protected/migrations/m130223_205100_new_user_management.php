<?php

class m130223_205100_new_user_management extends CDbMigration
{
	public function up()
	{
		$this->dropTable('users');

		$this->createTable('users', array(
			'id' => 'pk',
			'username' => 'VARCHAR (20) NOT NULL',
			'password' => 'VARCHAR (128) NOT NULL',
			'email' => 'VARCHAR (128) NOT NULL',
			'activkey' => 'VARCHAR (128) NOT NULL DEFAULT \'\'',
			'create_at' => 'TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP',
			'lastvisit_at' => 'TIMESTAMP NOT NULL DEFAULT \'0000-00-00 00:00:00\'',
			'superuser' => 'integer(1) NOT NULL DEFAULT \'0\' ',
			'status' => 'integer(1) NOT NULL',
		));

		$this->createIndex('users_email', 'users', 'email', true);
		$this->createIndex('users_username', 'users', 'username', true);
		$this->createIndex('users_status', 'users', 'status', false);
		$this->createIndex('users_superuser', 'users', 'superuser', false);
	}

	public function down()
	{
		$this->dropIndex('users_email');
		$this->dropIndex('users_username');
		$this->dropIndex('users_status');
		$this->dropIndex('users_superuser');
		$this->dropTable('users');

		$this->createTable('users', array(
			'id' => 'pk',
			'username' => 'VARCHAR (20) NOT NULL',
			'fullname' => 'VARCHAR (150) NOT NULL',
			'password' => 'VARCHAR (150) NOT NULL',
			'email' => 'VARCHAR (100) NOT NULL',
			'level' => 'VARCHAR (45) NOT NULL',
		));

		$this->insert('users', array(
			'id' => '1',
			'username' => 'admin',
			'fullname' => 'XXX',
			'password' => '098f6bcd4621d373cade4e832627b4f6',
			'email' => 'xxx@example.com',
			'level' => 'Admin',
		));

		$this->insert('users', array(
			'id' => '2',
			'username' => 'simple',
			'fullname' => 'Simple User',
			'password' => '098f6bcd4621d373cade4e832627b4f6',
			'email' => 'xxx@example.com',
			'level' => 'Basic',
		));
	}
}
