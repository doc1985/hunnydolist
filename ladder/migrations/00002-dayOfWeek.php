<?php

class DayOfWeek_Migration_00002 extends Migration {
	protected $min_version = '0.8.1';
	// protected $databases = FALSE;
	// protected $import_data = array();
	// protected $import_update = FALSE; // TRUE for all, or array of tables from import_data to update.
	// protected $import_key_fields = FALSE; // Array of 'table' => array('fields', 'for', 'where').
	// protected $unimport_data = TRUE; // or an array of tables to unimport.
	// protected $unimport_key_fields = FALSE; // or an array of table => array(key, fields).

	public function up() {
		 $this->create_table('day_of_week')
		 ->column("day","varchar",array("length"=>"45"))
		 ->execute();

		 $sql = "INSERT INTO `day_of_week` 
		 (`day`)
		 VALUES 
		 ('Sunday'),('Monday'),('Tuesday'),('Wednesday'),('Thursday'),('Friday'),('Saturday')";

		 $this->db->query($sql);
		// $this->table('table')
		// $this->set('key', 'value');
	}

	public function down() {
	     $this->table('day_of_week')->drop();
		// $value = $this->get('key');
	}
}