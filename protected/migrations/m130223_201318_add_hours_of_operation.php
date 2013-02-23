<?php

class m130223_201318_add_hours_of_operation extends CDbMigration
{
	public function up()
	{
	  $this->addColumn('branchsite', 'hours_of_operation', 'text');
	}

	public function down()
	{
	  $this->dropColumn('branchsite', 'hours_of_operation');
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