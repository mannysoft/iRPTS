<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_owner_modify_data extends CI_Migration {
	
	function up() 
	{	
		set_time_limit(10000);
		// We must set the execution time to atleast 10 or 15
		// Mins
		$this->db->order_by('id');
		//$this->db->limit(1);
			
		$q = $this->db->get('owner_person');
			
		if ($q->num_rows() > 0)
		{
			foreach ($q->result_array() as $row)
			{
				$g = new Owner_m();
				
				$g->get_by_id($row['owner_id']);
				//echo $this->db->last_query();
				
				$g->person_id = $row['person_id'];
				$g->save();
				//echo $this->db->last_query();
				
			}
		}
	}

	function down() 
	{
		
	}
}
