<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Migration_od_modify_data extends CI_Migration {
	
	function up() 
	{	
		set_time_limit(10000);
		// We must set the execution time to atleast 10 or 15
		// Mins
		$this->db->order_by('id');
			
		$q = $this->db->get('owner');
			
		if ($q->num_rows() > 0)
		{
			foreach ($q->result_array() as $row)
			{
				$g = new Od_m();
				
				$g->get_by_id($row['od_id']);
				$g->owner_id = $row['id'];
				$g->save();
				
			}
		}
	}

	function down() 
	{
		
	}
}
