<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_type extends CI_Model{

	// --------------------------------------------------------------------
	
	/**
	 * Constructor
	 *
	 * @return User_type
	 */
	function User_type()
	{
		parent::__construct();
	}
	
	// --------------------------------------------------------------------
	
	/**
	 * Get the user type of a user
	 *
	 * @param int $id
	 * @return string
	 */
	function get_user_type($id)
	{
		$user_type = '';
		
		$this->db->where('id', $id);
		$q = $this->db->get('user_type');
		
		if ($q->num_rows() > 0)
		{
			foreach ($q->result_array() as $row)
			{
				$user_type = $row['name'];
			}
		}
		
		return $user_type;
		
		$q->free_result();
	}
	
	// --------------------------------------------------------------------
	
	/**
	 * Get selected field in user info
	 *
	 * @param string $field
	 * @param int $id
	 * @return string
	 */
	function select($field, $id)
	{
		if($field == '')
		{
			$field = '*';
		}
		
		$this->db->select($field);
		$this->db->where('id', $id);
		$q = $this->db->get('user_type', 1);
		
		if ($q->num_rows() > 0)
		{
			foreach ($q->result_array() as $row)
			{
				$user_type = $row[$field];	
			}
		}
		
		return $user_type;
		
		$q->free_result();
		
	}
	
}

/* End of file user_type.php */
/* Location: ./system/application/model/user_type.php */