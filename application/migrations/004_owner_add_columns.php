<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_owner_add_columns extends CI_Migration {
	
	function up() 
	{	
		
		$fields = array(
                        'person_id' => array('type' => 'INT (11)', 'null' => FALSE)
);
		$this->dbforge->add_column('owner', $fields, 'od_id');
		
		
		$fields = array(
                        'company_id' => array('type' => 'INT (11)', 'null' => FALSE)
);
		$this->dbforge->add_column('owner', $fields, 'person_id');
		

	}

	function down() 
	{
		
		$this->dbforge->drop_column('owner', 'person_id');
		$this->dbforge->drop_column('owner', 'company_id');
		
	}
}
