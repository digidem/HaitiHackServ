<?php

class m130306_105427_new_user_management_authitem extends CDbMigration
{
	public function up()
	{
		$this->createTable('authitem', array(
			'name' => 'VARCHAR(64) NOT NULL',
			'type' => 'integer NOT NULL',
			'description' => 'text',
			'bizrule' => 'text',
			'data' => 'text',
		), "ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci");

		$this->createIndex('index_auth_item', 'authitem', 'name', true);
	}

	public function down()
	{
		$this->dropIndex('index_auth_item');
		$this->dropTable('authitem');
	}
}
