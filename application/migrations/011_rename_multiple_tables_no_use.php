<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_rename_multiple_tables_no_use extends CI_Migration {
	
	function up() 
	{			
		
		if ( $this->db->table_exists('company_address'))
		{	
			$this->dbforge->rename_table('company_address', 'z_company_address');
		}
		if ( $this->db->table_exists('owner_company'))
		{	
			$this->dbforge->rename_table('owner_company', 'z_owner_company');
		}
		if ( $this->db->table_exists('owner_person'))
		{	
			$this->dbforge->rename_table('owner_person', 'z_owner_person');
		}
		if ( $this->db->table_exists('person_address'))
		{	
			$this->dbforge->rename_table('person_address', 'z_person_address');
		}
		
	}

	function down() 
	{		
		
	}
}
