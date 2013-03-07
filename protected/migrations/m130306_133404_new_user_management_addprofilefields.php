<?php

class m130306_133404_new_user_management_addprofilefields extends CDbMigration
{
	public function up()
	{
		$this->insert('profiles_fields', array(
			'id' => '1',
			'required' => '1 ',
			'position' => '1 ',
			'visible' => '3',
			'varname' => 'lastname',
			'title' => 'Last Name',
			'field_type' => 'VARCHAR',
			'field_size' => '50',
			'field_size_min' => '3',
			'match' => '',
			'range' => '',
			'error_message' => 'Incorrect last name: length should be between 3 and 50 characters!',
			'default' => '',
			'widget' => '',
			'other_validator' => '',
			'widgetparams' => '',
		));

		$this->insert('profiles_fields', array(
			'id' => '2',
			'required' => '1 ',
			'position' => '1 ',
			'visible' => '3',
			'varname' => 'firstname',
			'title' => 'First Name',
			'field_type' => 'VARCHAR',
			'field_size' => '50',
			'field_size_min' => '3',
			'match' => '',
			'range' => '',
			'error_message' => 'Incorrect first name: length should be between 3 and 50 characters!',
			'default' => '',
			'widget' => '',
			'other_validator' => '',
			'widgetparams' => '',
		));

		$this->createIndex('profiles_fields_pk', 'profiles_fields', 'id', true);
	}

	public function down()
	{
		$this->delete(
			'profiles_fields',"id = '1'"
		);
		$this->delete(
			'profiles_fields',"id = '2'"
		);
	}
}
