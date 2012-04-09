<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * Integrated Human Resource Management Information System
 *
 * An Application Software use by Government agencies for management
 * of employees Attendance, Leave Administration, Payroll, Personnel
 * Training, Service Records, Performance, Recruitment and more...
 *
 * @package		iHRMIS
 * @author		Manolito Isles
 * @copyright	Copyright (c) 2008 - 2012, Charliesoft
 * @license		http://charliesoft.net/hrmis/user_guide/license.html
 * @link		http://charliesoft.net
 * @since		Version 1.0
 * @filesource
 */

// ------------------------------------------------------------------------

/**
 * iHRMIS Conversion Table Class
 *
 * This class use for converting number of minutes late
 * to the corresponding equivalent to leave credits.
 *
 * @package		iHRMIS
 * @subpackage	Models
 * @category	Models
 * @author		Manolito Isles
 * @link		http://charliesoft.net/hrmis/user_guide/models/conversion_table.html
 */
class Login extends MX_Controller  
{

	// --------------------------------------------------------------------
	
	function __construct()
    {
        parent::__construct();
		//$this->output->enable_profiler(TRUE);
		
	
    }  
	
	// --------------------------------------------------------------------
	
	function index()
	{
		if($this->session->userdata('username'))
		{
			redirect(base_url().'home/home_page', 'refresh');
		}
		redirect('login/show_login', 'refresh');
	}
	
	// --------------------------------------------------------------------
	
	function show_login()
	{
		
		$data = array();
		
		$data['system_message'] = '';
		
		if ($this->input->post('op'))
		{
			$username = $this->input->post('username');
			$password = $this->input->post('password');
					
			if (($username=="")||($password==""))
			{
				$data['system_message'] = 'Please complete the fields!';
			}	
			else 
			{
				// Encript password
				$password = do_hash($password, 'md5');
				
				$u = new User_m();
				
				$u->where('username', $username);
				$u->where('password', $password);
				$u->where('stat', 'Active');
				$u->get();
				
				// Check if the user exists			
				if ($u->exists())
				{
					//									
					$session_data = array(
									'username'	=> $u->username, 
									'lname' 	=> $u->lname,
									'office_id' => $u->office_id,
									'group_id'	=> $u->group_id,
									'user_type' => $u->user_type
									);
		
					$this->session->set_userdata($session_data);
					
					redirect('home/home_page', 'refresh');
				}
				else
				{
					$data['system_message'] = 'Invalid username or password!';
				}
				
			}
			
		}
	
		$this->load->view('login', $data);
	}
	
	// --------------------------------------------------------------------
	
	function log_out()
	{
		$this->session->sess_destroy();
		redirect('login/show_login', 'refresh');
	}
	
}

/* End of file login.php */
/* Location: ./system/application/modules/login/controllers/login.php */