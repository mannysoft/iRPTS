<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_Add_usergroup extends	Migration {
	
	function up() 
	{	
		$this->migrations->verbose AND print "Adding user group...";
		
		$data[] = array('name' => 'Super System Administrator');
		$data[] = array('name' => 'System Administrator');
		$data[] = array('name' => 'Timekeeper');
		$data[] = array('name' => 'Official Business Encoder');
		$data[] = array('name' => 'Leave Manager');
		
		foreach ( $data as $array)
		{
			$this->db->insert('user_group', $array);
		}
		
		// Add column
		$fields = array(
                        'roles' => array('type' => 'TEXT NOT NULL')
		);
		$this->dbforge->add_column('user_group', $fields);

		
		/*
		if ( ! $this->db->table_exists('accounts'))
		{	
			// Setup Keys
			$this->dbforge->add_key('id', TRUE);
			
			$this->dbforge->add_field(array(
				'id' => array('type' => 'INT', 'constraint' => 5, 'unsigned' => TRUE, 'auto_increment' => TRUE),
				'company_name' => array('type' => 'VARCHAR', 'constraint' => '200', 'null' => FALSE),
				'first_name' => array('type' => 'VARCHAR', 'constraint' => '200', 'null' => FALSE),
				'last_name' => array('type' => 'VARCHAR', 'constraint' => '200', 'null' => FALSE),
				'phone' => array('type' => 'TEXT', 'null' => FALSE),
				'email' => array('type' => 'TEXT', 'null' => FALSE),
				'address' => array('type' => 'TEXT', 'null' => FALSE),
				'Last_Update' => array('type' => 'DATETIME', 'null' => FALSE)
			));
			
			$this->dbforge->add_field("Created_At TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP");
			$this->dbforge->create_table('accounts', TRUE);
		}*/
	}

	function down() 
	{
		
		$this->db->empty_table('user_group');
		$this->dbforge->drop_column('user_group', 'roles');
	}
}
