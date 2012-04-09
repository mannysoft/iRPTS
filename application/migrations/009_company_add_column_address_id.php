<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_company_add_column_address_id extends CI_Migration {
	
	function up() 
	{	
		
		$fields = array(
                        'address_id' => array('type' => 'INT (11)', 'null' => FALSE)
);
		$this->dbforge->add_column('company', $fields, 'status');		

	}

	function down() 
	{
		
		$this->dbforge->drop_column('company', 'address_id');
		
	}
}
