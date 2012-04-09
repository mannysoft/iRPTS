<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_company_modify_data_address_id extends CI_Migration {
	
	function up() 
	{	
		set_time_limit(10000);
		
		// We must set the execution time to atleast 10 or 15
		// Mins
		$this->db->order_by('id');
		//$this->db->limit(10);
			
		$q = $this->db->get('company_address');
			
		if ($q->num_rows() > 0)
		{
			foreach ($q->result_array() as $row)
			{
				$g = new Company_m();
				
				$g->get_by_id($row['company_id']);
				//echo $this->db->last_query();
				
				$g->address_id = $row['address_id'];
				$g->save();
				//echo $this->db->last_query();
				
			}
		}
	}

	function down() 
	{
		
	}
}
