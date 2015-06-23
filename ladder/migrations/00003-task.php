<?php

class Task_Migration_00003 extends Migration {
	protected $min_version = '0.8.1';
	// protected $databases = FALSE;
	// protected $import_data = array();
	// protected $import_update = FALSE; // TRUE for all, or array of tables from import_data to update.
	// protected $import_key_fields = FALSE; // Array of 'table' => array('fields', 'for', 'where').
	// protected $unimport_data = TRUE; // or an array of tables to unimport.
	// protected $unimport_key_fields = FALSE; // or an array of table => array(key, fields).

	public function up() {
		$this->create_table('task')
		->column("task_name", "varchar",array("limit"=>"255"))
		->column("day_id","integer")
		->column("user_id", "integer");
		// $this->table('table')
		// $this->set('key', 'value');
	}

	public function down() {
		$this->table('task')->drop();
		// $value = $this->get('key');
	}
}