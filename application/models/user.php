<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Model{

	// --------------------------------------------------------------------
	
	/**
	 * Constructor
	 *
	 * @return User
	 */
	function User()
	{
		parent::__construct();
		
		$this->load->helper('security');
	}
	
	// --------------------------------------------------------------------
	
	/**
	 * Add new user
	 *
	 * @param unknown_type $info
	 * @return unknown
	 */
	function add_user($data)
	{
		$this->db->insert('user', $data);
	}
	
	// --------------------------------------------------------------------
	
	/**
	 * Delete user
	 *
	 * @param varchar $username
	 */
	function delete_user($username)
	{
		$this->db->delete('user', array('username' => $username)); 
	}
	
	// --------------------------------------------------------------------
	
	/**
	 * Get the maximum user
	 *
	 * @return varchar
	 */
	function get_max_user()
	{
		$max_user = '';
		
		$this->db->select_max('username', 'max_user');
		$q = $this->db->get('user');
		
		if ($q->num_rows() > 0)
		{
			foreach ($q->result_array() as $row)
			{
				$max_user = $row['max_user'] + 1;
			}
		}
		
		
		return $max_user;
		
		$q->free_result();
	}
	
	// --------------------------------------------------------------------
	
	/**
	 * THE FUNCTIONS BELOW ARE FOR TIMEKEEPER
	 * Get the data of a user
	 *
	 * @param varchar $username
	 * @return array
	 */
	function get_user_data($username)
	{
		$data = array();
		
		$this->db->where('username', $username);
		$this->db->limit(1);
		$q = $this->db->get('user');
		
		if ($q->num_rows() > 0)
		{
			foreach ($q->result_array() as $row)
			{
				$data = $row;
			}
		}
		
		
		
		return $data;
		
		$q->free_result();
	}
	
	// --------------------------------------------------------------------
	
	/**
	 * Get users
	 *
	 * @param array $fields
	 * @return array
	 */
	function get_users($fields = array())
	{
		$data = array();
		
		$this->db->select($fields);

		$this->db->order_by('lname');
		$q = $this->db->get('user');
		
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
	 * Check if username exists
	 *
	 * @param string $username
	 * @return boolean
	 */
	function is_username_exists($username)
	{
		$this->db->select('username');
		$this->db->where('username', $username);
		$q = $this->db->get('user');
		
		
		if ($q->num_rows() > 0)
		{
			return TRUE;
		}
		else
		{
			return FALSE;
		}
		
		$q->free_result();
	}
	
	// --------------------------------------------------------------------
	
	/**
	 * Tells whether a user is valid or not
	 *
	 * @param varchar $username
	 * @param varchar $password
	 * @return boolean
	 */
	function is_valid_user($username, $password)
	{
		$this->db->where('username', $username);
		$this->db->where('password', $password);
		$this->db->where('stat', 1);
		
		$q = $this->db->get('user');
		
		
		
		if ($q->num_rows() > 0)
		{
			return TRUE;
		}
		else 
		{
			return FALSE;
		}
		
		return $data;
		
		$q->free_result();
	}
	
	// --------------------------------------------------------------------
	
	/**
	 * Update or edit user account
	 *
	 * @param array $data
	 * @param int $user_id
	 */
	function update_user($data, $user_id = '')
	{
		$this->db->where('user_id', $user_id);
		$this->db->update('user', $data); 
	}
	
	// --------------------------------------------------------------------
	
	/**
	 * Validate the username and password
	 *
	 * @param mixed $username
	 * @param mixed $password
	 * @return array
	 */
	function validate_user($username, $password)
	{
		$data = array();
		
		$data['system_message'] = '';
		
		//Encript password
		$password = do_hash($password, 'md5');
		
		$options = array('username' => $username, 'password' => $password);
		$q = $this->db->get_where('user', $options, 1);
			
		if ($q->num_rows() > 0)
		{
			$row = $q->row();
			
			$fname 		= $row->fname;
			$lname 		= $row->lname;
			$mname 		= $row->mname;
				
			$username = $username;
				
			$session_data = array(
							'username'	=> $row->username, 
							'lname' 	=> $row->lname,
							'office_id' => $row->office_id
							);

			$this->session->set_userdata($session_data);
				
			$data['system_message'] = 'valid';
				
		}
			
		return $data;
	}
	
	// --------------------------------------------------------------------
	
}

/* End of file user.php */
/* Location: ./system/application/model/user.php */