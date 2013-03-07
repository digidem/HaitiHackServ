<?php

class m130306_111342_new_user_management_adduser extends CDbMigration
{
	public function up()
	{
		$this->insert('users', array(
			'id' => '1',
			'username' => 'admin',
			'password' => '21232f297a57a5a743894a0e4a801fc3',
			'email' => 'xx@example.com',
			'activkey' => '9a24eff8c15a6a141ece27eb6947da0f',
			'create_at' => 'NOW()',
			'lastvisit_at' => 'NOW()',
			'superuser' => '1',
			'status' => '1',
		));
	}

	public function down()
	{
		$this->delete(
			'users',"id = '1'"
		);
	}
}
