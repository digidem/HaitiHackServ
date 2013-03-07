<?php

class m130306_091403_new_user_management_rights extends CDbMigration
{
	public function up()
	{
		$this->createTable('rights', array(
			'type' => 'INTEGER (11) NOT NULL',
			'weight' => 'INTEGER (11) NOT NULL',
			'itemname' => 'VARCHAR (64) NOT NULL',
		));

		$this->createIndex('rights_uq', 'rights', 'itemname', true);
	}

	public function down()
	{
		$this->dropIndex('rights_uq');
		$this->dropTable('rights');
	}
}
