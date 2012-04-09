<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Employee_manage extends MX_Controller  {

	// --------------------------------------------------------------------
	
	function __construct()
    {
        parent::__construct();
		$this->output->enable_profiler(TRUE);
		
		$this->load->model('options');
    }  
	
	// --------------------------------------------------------------------
	
	/**
	 * Enter description here...
	 *
	 */
	function add_employee()
	{
		$data['page_name'] 			= '<b>Add employee</b>';
		$data['msg'] 				= '';
		
		//Office
		$data['options'] 			= $this->options->office_options();
		$data['selected'] 			= $this->session->userdata('office_id');
		
		//Detailed office
		$detailed_options 			= $this->options->office_options($add_select = TRUE);
		$data['detailed_options'] 	= $detailed_options;
		$data['detailed_selected'] 	= '';
		
		//Type of employment
		$data['permanent_options'] 	= $this->options->type_employment();
		$data['permanent_selected'] = '';
		
		//Salary grade options
		$data['sg_options']  		= $this->options->salary_grade();
		$data['sg_selected'] 		= '';
		
		//Step increment
		$data['step_options'] 		= $this->options->step();
		$data['step_selected'] 		= '';
		
		//Shift List
		$data['shifts_options'] 	= $this->options->shift();
		
		$op 						= $this->input->post('op');
		
		//If form submit
		if($op == 1)
		{
			
			$this->form_validation->set_rules('id', 'Employee ID', 'required|callback_employee_id_check');
			$this->form_validation->set_rules('salutation', 'Salutation', 'required');
			$this->form_validation->set_rules('lname', 'Last Name', 'required');
			$this->form_validation->set_rules('fname', 'First Name', 'required');
			$this->form_validation->set_rules('position', 'Position', 'required');
			$this->form_validation->set_rules('permanent', 'Type of employment', 'required');
			//$this->form_validation->set_rules('password', 'Password', 'required|matches[repassword]');
			
			if ($this->form_validation->run($this) == FALSE)
			{
				$data['selected'] 			= $this->input->post('office_id');
				$data['detailed_selected'] 	= $this->input->post('detailed_office_id');
				$data['permanent_selected'] = $this->input->post('permanent');
				$data['sg_selected'] 		= $this->input->post('sg');
				$data['step_selected'] 		= $this->input->post('step');
			}
			else
			{
			
				$shift_id 				= $this->input->post('shift2');
				$shift_type 			= $this->input->post('shift2');
	
				//If other shift if selected
				if($this->input->post('hour1'))
				{
					$hour1 		= $this->input->post('hour1');
					$minute1 	= $this->input->post('minute1');
					$am_pm1 	= $this->input->post('am_pm1');
					$hour2 		= $this->input->post('hour2');
					$minute2 	= $this->input->post('minute2');
					$am_pm2 	= $this->input->post('am_pm2');
					
					$times = $hour1.':'.$minute1.','.$am_pm1.',';
					$times.= $hour2.':'.$minute2.','.$am_pm2;
					
					$row = $this->Shift->shift_details($times);
					
					if (!empty($row))
					{
						$shift_id 	= $row['shift_id'];
						$shift_type = $row['shift_type'];
					}
					else
					{
						if($am_pm1 == 'AM' && $am_pm2 == 'PM')
						{
							$shift_type 	= 2;
						}
						
						if($am_pm1 == 'PM' && $am_pm2 == 'PM')
						{
							$shift_type 	= 2;
						}
						
						if($am_pm1 == 'PM' && $am_pm2 == 'AM')
						{
							$shift_type 	= 3;
						}
						
						
						$hour1 = $hour1.':'.$minute1.','.$am_pm1;
						$hour2 = $hour2.':'.$minute2.','.$am_pm2;
						
						if($hour1 == $hour2)
						{
							$shift_type = 4;
						}
						
						//insert to table shift
						
						//insert to table shift and get the ID
						$shift_id = $this->Shift->add_shift($this->session->userdata('office_id'), $shift_type, $times);
						
						$shift_type = $shift_type;
					
					}
			
				}
				
				//File name of the photo
				$file_register = $this->session->userdata('file_register');
				$finger_pics = '/../ats/pics/'.$this->session->userdata('file_register');
				
				$info = array(
				'id' 					=> $this->input->post('id'),
				'lname' 				=> $this->input->post('lname'),
				'fname' 				=> $this->input->post('fname'),
				'mname' 				=> $this->input->post('mname'),
				'position' 				=> $this->input->post('position'),
				'office_id' 			=> $this->input->post('office_id'),
				'detailed_office_id'	=> $this->input->post('detailed_office_id'),
				'salut'					=> $this->input->post('salutation'),
				'pics' 					=> $file_register,
				'finger_pics' 			=> $finger_pics,
				'shift_id' 				=> $shift_id,
				'shift_type' 			=> $shift_type,
				'status' 				=> 1,
				'permanent' 			=> $this->input->post('permanent'),
				'first_day_of_service' 	=> $this->input->post('first_day_of_service'),
				'salary_grade' 			=> $this->input->post('sg'),
				'step'					=> $this->input->post('step'),
				'newly_added' 			=> 1,
				'updated'				=> 1
				);
		
				$id = $this->Employee->add_employee($info);
				
				$this->Logs->insert_logs($this->session->userdata('username'), 
										 $this->session->userdata('office_id'), 
										'ADD EMPLOYEE', 
										'Add new employee ('.$id.')', 
										$id);
										
				//Use for messaging
				$this->session->set_flashdata('msg', 'New Employee added!');
				
				//Redirect to adding new employee form
				redirect(base_url().'index.php/Employee_Manage/add_employee', 'refresh');				
			}
					
		}
		$this->load->view('includes/header');
		
		$this->load->view('includes/menu', $data);
		$this->load->view('includes/body_top', $data);
		
		$this->load->view('add_employee', $data);
		
		$this->load->view('includes/footer');
		
	}
	
	// --------------------------------------------------------------------
	
	/**
	 * Enter description here...
	 *
	 */
	function list_employee()
	{

		$data['page_name'] = '<b>Employee List</b>';
		$data['msg'] = '';
		
		$off = $this->uri->segment(4, 0);
		
		//echo $off;
		if ($off == 0)
		{
			$office_id = $this->session->userdata('office_id');
			$data['selected'] = $this->session->userdata('office_id');
		}
		else
		{
			$office_id = $off;
			$data['selected'] = $office_id;
		}
		
		//Use for office listbox
		$data['options'] = $this->options->office_options();
		
		
		$this->Employee->fields = array(
									'id',
									'fname',
									'mname',
									'lname',
									'office_id',
									'status',
									'pics',
									'position'
									);
		
		$this->Employee->get_employee_list($office_id,
											'',
											'',
											'',
											'',
											''
											);
		
		$this->load->library('mi_pagination');
		
		$config['base_url'] = base_url().'index.php/Employee_Manage/list_employee';
		$config['total_rows'] = $this->Employee->num_rows;
		$config['office_id'] = $office_id; //add ko
	    $config['per_page'] = '15';
	    $config['full_tag_open'] = '<p>';
	    $config['full_tag_close'] = '</p>';
		
		$employee_id = '';
		
		//http://localhost/hris/user_guide/libraries/uri.html
		
		$this->mi_pagination->initialize($config);
		
		$data['query_result'] = $this->Employee->get_employee_list($office_id, 
																   $employee_id, 
																   $config['per_page'], 
																   $this->uri->segment(3),
																   '',
																   ''
																   );
		$op = $this->input->post('op');
		
		//if form submit
		if($op == 1)
		{
			$employees = $this->input->post('employee');
			
			if(is_array($employees))
			{
				foreach($employees as $employee)
				{
					$action = $this->input->post('action');
					//deactivate
					if($action==0)
					{
						$this->Employee->set_status($employee, 0);					
					}
					
					//if activate
					if($action==1)
					{
						$this->Employee->set_status($employee, 1);
					}
					
				}
				
			}
			
			$office_id 		= $this->input->post('office_id');
			$employee_id 	= $this->input->post('employee_id');
			$lname 			= $this->input->post('lname');
			
			$this->Employee->get_employee_list($office_id, $employee_id);
			
			$config['base_url'] = base_url().'index.php/Employee_Manage/list_employee/';
			$config['total_rows'] = $this->Employee->num_rows;
			$config['office_id'] = $office_id; //add ko
			$config['per_page'] = '15';
			
			$data['query_result'] = $this->Employee->get_employee_list($office_id, 
																	   $employee_id, 
																	   $config['per_page'], 
																	   $this->uri->segment(3),
																	   '',
																	   ''
																	   );
			
			if ($lname != '')
			{
				$this->Employee->get_employee_list('',
												   '',
												   $config['per_page'],
												   $this->uri->segment(3),
												   $lname
												   );
				
				$config['total_rows'] = $this->Employee->num_rows;
				
				$data['query_result'] = $this->Employee->get_employee_list('',
																		   '',
																		   $config['per_page'],
																		   $this->uri->segment(3),
																		   $lname
																		   );
			}
			
			if ($employee_id != '')
			{
				$this->Employee->get_employee_list('',
												   $employee_id,
												   $config['per_page'],
												   $this->uri->segment(3),
												   ''
												   );
				
				$config['total_rows'] = $this->Employee->num_rows;
				
				$data['query_result'] = $this->Employee->get_employee_list('',
																		   $employee_id,
																		   $config['per_page'],
																		   $this->uri->segment(3),
																		   ''
																		   );
			}
			
			
			
			$data['selected'] = $this->input->post('office_id');
		
		}
		
		$data['page'] = $this->uri->segment(3, 0);
		
		$this->mi_pagination->initialize($config);
		
		$this->load->view('includes/header');
		
		$this->load->view('includes/menu', $data);
		$this->load->view('includes/body_top', $data);
		
		$this->load->view('list_employee', $data);
		
		$this->load->view('includes/footer');
		
	}
	
	// --------------------------------------------------------------------
	
	/**
	 * Enter description here...
	 *
	 * @param unknown_type $employee_id
	 * @param unknown_type $office_id
	 * @param unknown_type $page
	 */
	function edit_employee($employee_id = '', $office_id = '', $page = '')
	{
		$data['page_name'] = '<b>Edit Employee</b>';
		$data['msg'] = '';
		
		$this->Employee->fields = array(
										'shift_id',
										'office_id',
										'detailed_office_id',
										'permanent',
										'first_day_of_service',
										'position',
										'employee_id',
										'salary_grade',
										'step',
										'pics',
										'id',
										'salut',
										'lname',
										'fname',
										'mname'
										);
		
		$employee_info = $this->Employee->get_employee_info($employee_id);
		
		if ($employee_id == '')
		{
			$employee_info = $this->Employee->get_employee_info($this->input->post('orig_id'));
		}
		
		$shift_id_from_select = $employee_info['shift_id'];
		
		//Use for office listbox
		$data['options'] = $this->options->office_options();
		$data['selected'] = $employee_info['office_id'];
		
		//for detailed office
		$data['detailed_options'] = $this->options->office_options($add_select = TRUE);
		$data['detailed_selected'] = $employee_info['detailed_office_id'];
		
		//dropdown for type of employment
		$data['permanent_options'] = $this->options->type_employment();

		$data['permanent_options_selected'] = $employee_info['permanent'];
		$data['first_day_of_service'] 		= $employee_info['first_day_of_service'];
		$data['position'] 					= $employee_info['position'];
		$data['employee_id'] 				= $employee_info['employee_id'];
		
		//Salary grade options
		$data['sg_options'] = $this->options->salary_grade();
		
		
		//step increment
		$data['step_options'] = $this->options->step();
		
		$data['sg_selected'] = $employee_info['salary_grade'];
		
		$data['step_selected'] = $employee_info['step'];
		
		$data['page']			= $this->uri->segment(5);
		$data['office_return']	= $this->uri->segment(4);
		
		$data['image_file_name'] = $employee_info['pics'];
		
		//Shift List
		$data['shifts_options'] 	= $this->options->shift();
		
		if ($employee_info['pics'] == '' || !file_exists('pics/'.$employee_info['pics']))
		{
			$data['image_file_name'] = 'not_available.jpg';
		}
		
		$data['id'] 		= $employee_info['id'];
		$data['salutation'] = $employee_info['salut'];
		$data['lname'] 		= $employee_info['lname'];
		$data['fname'] 		= $employee_info['fname'];
		$data['mname'] 		= $employee_info['mname'];
		
		//The original employee id
		$data['orig_id'] = $employee_info['id'];
		
		$op = $this->input->post('op');
		
		if ($op == 1)
		{
			$employee_id 	= $this->input->post('employee_id');
			
			$orig_id 		= $this->input->post('orig_id');
			
			$id 			= $this->input->post('id');
			
			if ($id != $orig_id)
			{
				$this->form_validation->set_rules('id', 'Employee ID', 'required|callback_employee_id_check');
			}
			
			$this->form_validation->set_rules('salutation', 'Salutation', 'required');
			$this->form_validation->set_rules('lname', 'Last Name', 'required');
			$this->form_validation->set_rules('fname', 'First Name', 'required');
			$this->form_validation->set_rules('position', 'Position', 'required');
			$this->form_validation->set_rules('permanent', 'Type of employment', 'required');
			
			if ($this->form_validation->run($this) == FALSE)
			{
				$data['selected'] 			= $this->input->post('office_id');
				$data['detailed_selected'] 	= $this->input->post('detailed_office_id');
				$data['employee_id'] 		= $this->input->post('employee_id');
				$data['page']				= $this->input->post('page');
				$data['office_return']		= $this->input->post('office_return');
			}
			else
			{
				$info = array(
						'id' 					=> $this->input->post('id'),
						'lname' 				=> $this->input->post('lname'),
						'fname' 				=> $this->input->post('fname'),
						'mname' 				=> $this->input->post('mname'),
						'office_id' 			=> $this->input->post('office_id'),
						'detailed_office_id' 	=> $this->input->post('detailed_office_id'),
						'salut' 				=> $this->input->post('salutation'),
						'permanent' 			=> $this->input->post('permanent'),
						'first_day_of_service' 	=> $this->input->post('first_day_of_service'),
						'salary_grade' 			=> $this->input->post('sg'),
						'step'					=> $this->input->post('step'),
						'position' 				=> $this->input->post('position'),
						'shift_id' 				=> $this->input->post('shift2'),
						'shift_type' 			=> $this->input->post('shift2'),
						'updated' 				=> 1
						);
				
				//File name of the photo
				$file_register = $this->session->userdata('file_register');
						
				if ($file_register)
				{
					$info['pics'] = $file_register;
					$info['finger_pics'] = '/../ats/pics/'.$this->session->userdata('file_register');
				}
				
				$this->Employee->update_employee($info, $employee_id);
				
				$this->Logs->insert_logs($this->session->userdata('username'), 
										 $this->session->userdata('office_id'), 
										 'EDIT EMPLOYEE', 
										 'Edit employee ('.$id.')', 
										 $id
										 );
				
				
				$page			= $this->input->post('page');
				$office_return	= $this->input->post('office_return');
				
				redirect(base_url().'index.php/Employee_Manage/list_employee/'.$page.'/'.$office_return, 'refresh');
			}
			
			
		}
		
		
		$this->load->view('includes/header');
		
		$this->load->view('includes/menu', $data);
		$this->load->view('includes/body_top', $data);
		
		$this->load->view('edit_employee', $data);
		
		$this->load->view('includes/footer');
	}
	
	// --------------------------------------------------------------------
	
	function delete_employee($id, $page, $office_return)
	{
		$this->Employee->delete_employee($id);
		redirect(base_url().'index.php/Employee_Manage/list_employee/'.$office_return.'/'.$page, 'refresh');
	}
	
	// --------------------------------------------------------------------
	
	/**
	 * Check if emmployee id exists
	 *
	 * @param string $employee_id
	 * @return boolean
	 */
	function employee_id_check($employee_id)
	{
		$is_employee_id_exists = $this->Employee->is_employee_id_exists($employee_id);
		
		if ($is_employee_id_exists == TRUE)
		{
			$this->form_validation->set_message('employee_id_check', 'The Employee ID exists!');
			return FALSE;
		}
		else
		{
			return TRUE;
		}
	}
	
	
}	

/* End of file agency.php */
/* Location: ./system/application/modules/employee_manage/controllers/employee_manage.php */