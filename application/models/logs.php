<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Logs extends CI_Model{

	
	// --------------------------------------------------------------------
	
	var $num_rows = 0;
	
	// --------------------------------------------------------------------
	
	/**
	 * Constructor
	 *
	 * @return Logs
	 */
	function Logs()
	{
		parent::__construct();
	}
	
	// --------------------------------------------------------------------
	
	function add_logs($data)
	{
		$this->db->insert('logs', $data);
	}
	
	// --------------------------------------------------------------------
	
	/**
	 * Delete all logs
	 *
	 */
	function delete_all_logs()
	{
		$this->db->truncate('logs'); 

	}
	
	// --------------------------------------------------------------------
	
	/**
	 * Delete selected logs
	 *
	 * @param int $id
	 */
	function delete_logs($id)
	{
		$this->db->delete('logs', array('id' => $id)); 
	}
	
	// --------------------------------------------------------------------
	
	
	/**
	 * Get logs by office
	 *
	 * @param int $office_id
	 * @param int $per_page
	 * @param int $off_set
	 * @return array
	 */
	function get_logs($office_id = '', $per_page = "", $off_set = "")
	{
		$data = array();
		
		if ($office_id != '')
		{
			$this->db->where('office_id', $office_id);
		}
		
		$this->db->order_by('date', 'DESC');
		
		$this->db->limit($per_page, $off_set);
		
		$q = $this->db->get('logs');
		
		$this->num_rows = $q->num_rows();
		
		if ($q->num_rows() > 0)
		{
			foreach ($q->result_array() as $row)
			{
				$data[] = $row;
			}
		}
	
		return $data;
		
		$q->free_result();
	}
	
	// --------------------------------------------------------------------
	
	/**
	 * Insert to logs
	 *
	 * @param string $command
	 * @param varchar $employee_id_affected
	 */
	function insert_logs($username, $office_id, $command, $details = '1', $employee_id_affected = '1')
	{
		
		$data = array(
               'username' 				=> $username ,
               'office_id' 				=> $office_id ,
               'command' 				=> $command,
               'details'				=> $details,
               'employee_id_affected' 	=> $employee_id_affected,
               'date' 					=> date('Y-m-d h:i')
            );

		$this->db->insert('logs', $data);

	}
	
	// --------------------------------------------------------------------
	
	function is_log_exists($username, $office_id, $date)
	{
		$options = array(
			'username' 		=> $username, 
			'office_id' 	=> $office_id,
			'date' 			=> $date
			);
		
		$q = $this->db->getwhere('logs', $options, 1);
		
		if ($q->num_rows() > 0)
		{
			return TRUE;
		}
		else
		{
			return FALSE;
		}
	
		//return $data;
		
		$q->free_result(); 
	}
}

/* End of file logs.php */
/* Location: ./system/application/model/logs.php */