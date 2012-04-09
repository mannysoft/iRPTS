<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_owner_drop_column_rpt_op_id extends CI_Migration {
	
	function up() 
	{	
		$this->dbforge->drop_column('owner', 'rpt_op_id');
	}

	function down() 
	{
		
	}
}
