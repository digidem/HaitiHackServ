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
        ));
        
        $this->createIndex('index_auth_item', 'authitem', 'name', true);
    }
 
    public function down()
    {
        $this->dropIndex('index_auth_item');
        $this->dropTable('authitem');
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