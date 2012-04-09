<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Administration extends MX_Controller  {

	// --------------------------------------------------------------------
	
	function __construct()
    {
        parent::__construct();
		
		$this->load->helper('security');
		
		$this->load->model('options');
		
		$this->output->enable_profiler(TRUE);
    }  
	
	// --------------------------------------------------------------------
	
	/**
	 * Enter description here...
	 *
	 */
	function add_user()
	{
		$data['page_name'] = '<b>Add User</b>';
		$data['msg'] = '';
		
		//Use for office listbox
		$data['options'] = $this->options->office_options();
		
		$data['selected'] = $this->session->userdata('office_id');
		
		//User type options
		$data['user_type_options'] = $this->options->user_type();
									
		$data['user_type_selected'] = 3;							
		
		$this->load->view('includes/header');
		
		$this->load->view('includes/menu', $data);
		$this->load->view('includes/body_top', $data);
		
		$op = $this->input->post('op');
		
		//If form submit
		if($op == 1)
		{
			//http://codeigniter.com/forums/viewthread/161740/#776966
			//solved the callback functions problem
			$this->form_validation->set_rules('username', 'User ID', 'required|min_length[4]|max_length[12]|callback_username_check');
			$this->form_validation->set_rules('last', 'Last Name', 'required');
			$this->form_validation->set_rules('first', 'First Name', 'required');
			$this->form_validation->set_rules('password', 'Password', 'required|matches[repassword]');
			$this->form_validation->set_rules('user_type', 'User Type', 'required');
			
			if ($this->form_validation->run($this) == FALSE)
			{
				$data['selected'] 			= $this->input->post('office_id');
				$data['user_type_selected'] = $this->input->post('user_type');		
			}
			else
			{
				//Encript password
				$password = do_hash($this->input->post('password'), 'md5');
				
				$info = array(
				'username' 				=> $this->input->post('username'),
				'lname' 				=> $this->input->post('last'),
				'fname' 				=> $this->input->post('first'),
				'mname' 				=> $this->input->post('middle'),
				'password' 				=> $password,
				'office_id' 			=> $this->input->post('office_id'),
				'stat'					=> 1,
				'user_type'				=> $this->input->post('user_type')
				);
			
				$this->User->add_user($info);
				
				$user = $this->User->get_user_data($this->input->post('username'));
				
				$this->Logs->insert_logs($this->session->userdata('username'), 
										 $this->session->userdata('office_id'), 
										 'ADD USER', 
										 'Add new user ('.$user['username'].')', 
										 '');
						
				redirect(base_url().'index.php/User_Manage/list_user', 'refresh');		
			}
					
		}
		
		$this->load->view('add_user', $data);
		
		$this->load->view('includes/footer');
		
	}
	
	// --------------------------------------------------------------------
	
	/**
	 * Enter description here...
	 *
	 */
	function list_user()
	{
		$data['page_name'] = '<b>User List</b>';
		
		$data['msg'] = '';
		
		$op = $this->input->post('op');
		
		//if form submit
		if($op == 1)
		{
			$users = $office_id	= $this->input->post('user');
			
			if(is_array($users))
			{
				foreach($users as $user)
				{
					//deactivate
					if($this->input->post('action')==0)
					{
						$this->User->change_user_stat(0, $user);				
					}
					
					//if activate
					if($this->input->post('action')==1)
					{
						$this->User->change_user_stat(1, $user);
					}
				}
			}	
		}
		
		
		$data['users'] = $this->User->get_users();
		
		$this->load->view('includes/header');
		
		$this->load->view('includes/menu', $data);
		$this->load->view('includes/body_top', $data);
		
		$this->load->view('list_user', $data);
		
		$this->load->view('includes/footer');
		
	}
	
	// --------------------------------------------------------------------
	
	/**
	 * Enter description here...
	 *
	 * @param unknown_type $username
	 */
	function edit_user($username)
	{	
		$data['page_name'] = '<b>Edit User</b>';
		
		$data['msg'] = '';
		
		$data['username'] = $username;
		
		$user = $this->User->get_user_data($username);
		
		//Use for office listbox
		$data['options'] = $this->options->office_options();
		$data['selected'] = $user['office_id'];
		
		//User type options
		$data['user_type_options'] = $this->options->user_type();
									
		$data['user_type_selected'] = $user['user_type'];
		
		$data['lname'] = $user['lname'];
		$data['fname'] = $user['fname'];
		$data['mname'] = $user['mname'];
		$data['password'] = $user['password'];
		$data['user_id'] = $user['user_id'];
		
		
		$op = $this->input->post('op');
		
		if($op == 1)
		{
			//Encript password
			$password = do_hash($this->input->post('password'), 'md5');
			
			$data = array(
				'username' 	=> $this->input->post('username'),
				'lname' 	=> $this->input->post('last'),
				'fname' 	=> $this->input->post('first'),
				'mname' 	=> $this->input->post('middle'),
				'office_id' => $this->input->post('office_id'),
				'password' 	=> $password,
				'user_type' => $this->input->post('user_type')
				);
			
			$this->User->update_user($data, $this->input->post('user_id'));
			
			$this->Logs->insert_logs($this->session->userdata('username'), 
									 $this->session->userdata('office_id'), 
									 'EDIT USER', 'Edit user ('.$this->input->post('username').')', 
									 '');
			
			redirect(base_url().'index.php/User_Manage/list_user', 'refresh');
			
		}
		
		$this->load->view('includes/header');
		
		$this->load->view('includes/menu', $data);
		$this->load->view('includes/body_top', $data);
		
		$this->load->view('edit_user', $data);
		
		$this->load->view('includes/footer');
		
	}
	
	// --------------------------------------------------------------------
	
	/**
	 * Enter description here...
	 *
	 * @param unknown_type $username
	 */
	function delete_user($username)
	{
		$this->User->delete_user($username);
	
		$this->Logs->insert_logs($this->session->userdata('username'), 
								 $this->session->userdata('office_id'), 
								 'DELETE USER', 
								 'DELETE user ('.$username.')', 
								 '');
		
		redirect(base_url().'index.php/User_Manage/list_user', 'refresh');
		
	}
	
	// --------------------------------------------------------------------
	
	/**
	 * Check if the username exist
	 *
	 * @param string $username
	 * @return boolean
	 */
	function username_check($username)
	{
		$is_username_exists = $this->User->is_username_exists($username);
		
		if ($is_username_exists == TRUE)
		{
			$this->form_validation->set_message('username_check', 
												'The Username exists! Please enter another username.');
			return FALSE;
		}
		else
		{
			return TRUE;
		}
	}
}

/* End of file agency.php */
/* Location: ./system/application/modules/user_manage/controllers/user_manage.php */