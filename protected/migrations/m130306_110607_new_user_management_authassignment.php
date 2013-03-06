<?php

class m130306_110607_new_user_management_authassignment extends CDbMigration
{
    public function up()
    {
        $this->createTable('authassignment', array(
            'itemname' => 'VARCHAR(64) NOT NULL',
            'userid' => 'VARCHAR(64) NOT NULL',
            'bizrule' => 'text',
            'data' => 'text',
        ));
        
        $this->createIndex('index_authassignment', 'authassignment', 'itemname,userid', true);
    }
 
    public function down()
    {
        $this->dropIndex('index_authassignment');
        $this->dropTable('authassignment');
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