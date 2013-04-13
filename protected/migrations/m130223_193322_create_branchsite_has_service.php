<?php

class m130223_193322_create_branchsite_has_service extends CDbMigration
{
	public function up()
	{
		$this->createTable(
			'branchsite_has_service', array(
				'branchsite' => 'integer',
				'service' => 'integer',
			), "ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci");

		$this->createIndex('index_branchsite_has_service_branchsite',
						   'branchsite_has_service', 'branchsite', FALSE);
		$this->createIndex('index_branchsite_has_service_service',
						   'branchsite_has_service', 'service', FALSE);
		$this->createIndex('index_branchsite_has_service_branchsite_service',
			'branchsite_has_service', 'branchsite,service', TRUE);
	}

	public function down()
	{
		$this->dropIndex('index_branchsite_has_service_branchsite');
		$this->dropIndex('index_branchsite_has_service_service');
		$this->dropIndex('index_branchsite_has_service_branchsite_service');

		$this->dropTable('branchsite_has_service');
	}
}
