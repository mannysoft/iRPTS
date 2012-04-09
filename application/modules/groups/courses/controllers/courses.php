<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Courses extends MX_Controller {

	// --------------------------------------------------------------------
	
	function __construct()
    {
        parent::__construct();
		
		$this->load->model('options');
		
		$this->output->enable_profiler(TRUE);
    }  
	
	function index()
	{
		$data['page_name'] = '<b>Courses</b>';
		
		$data['msg'] = '';
		
		$this->load->library('pagination');
		
		$c = new Course_m();
		
		$config['base_url']  	  = base_url().'Courses/index';
		$config['total_rows']	  = $c->count();
		$config['per_page']		  = '15';
		$config['full_tag_open']  = '<p>';
	    $config['full_tag_close'] = '</p>';
		
		$this->pagination->initialize($config);
		
		// How many related records we want to limit ourselves to
		$limit = $config['per_page'];
		
		// Set the offset for our paging
		$offset = $this->uri->segment(3);
		
		$c->order_by('course_code','DESC');
		
		$data['rows'] = $c->get($limit, $offset);
		
		$data['page'] = $this->uri->segment(3);
				
		$data['main_content'] = 'index';
		
		$this->load->view('includes/template', $data);
	
	}
	// --------------------------------------------------------------------
	function save( $id = '' )
	{		
		$data['page_name'] 	= '<b>Courses</b>';
		$data['legend'] 	= '<b>Add</b>';
		$data['stat'] = '';
		
		if ( $id != '' )
		{
			$data['legend'] 	= '<b>Edit</b>';
		}
		
		$data['msg'] = '';
			
		$c = new Course_m();
		
		$row = $c->get_by_id( $id );

		if($row->id == '')
		{
			//if ID has no value - return post 
			$data['course_code'] = $this->input->post('course_code');
			$data['course'] 	 = $this->input->post('course');
			$data['description'] = $this->input->post('description');
			$data['year'] 		 = $this->input->post('year');

			if($this->input->post('hcs') == 1)
			{
				$data['hcs'] = "Checked";
			}
			else
			{
				$data['hcs'] = "";	
			}
			
			if($this->input->post('open') == 1)
			{
				$data['open'] = "Checked";
			}
			else
			{
				$data['open'] = "";	
			}
		}
		else
		{
			//if ID has a value - display data 
			$data['course_code'] = $row->course_code;
			$data['course'] 	 = $row->course;
			$data['description'] = $row->description;
			$data['year'] 		 = $row->year;
			if($row->hcs == 1)
			{
				$data['hcs'] = "Checked";
			}
			else
			{
				$data['hcs'] = "";	
			}
			
			if($row->open == 1)
			{
				$data['open'] = "Checked";
			}
			else
			{
				$data['open'] = "";	
			}
		}
		
		//To compare new and old room number
		$old = $this->input->post('course_code_old');
		$new = $this->input->post('course_code');

		if ( $this->input->post('op'))
		{	
			if($old == $new) //check if the room number is exisiting
			{		
				$this->form_validation->set_rules('course_code',  '<b>Course Code</b>', 'required');
			}
			else
			{
				$this->form_validation->set_rules('course_code',  '<b>Course Code</b>', 'required|callback_course_code_check');	
			}
			
			
			if ($this->form_validation->run($this) == TRUE)
			{				
				
				if($this->input->post('hcs') == 1):
					$hcs = "1";
				else:
					$hcs = "0";	
				endif;
				
				if($this->input->post('open') == 1):
					$open = "1";
				else:
					$open = "0";	
				endif;
				
				$c->course_code	= $this->input->post('course_code');
				$c->course 		= $this->input->post('course');	
				$c->description	= $this->input->post('description');	 
				$c->years 		= $this->input->post('years');	
				$c->hcs 		= $hcs;  				//HCS = 1, regular course = 0	
				$c->open 		= $open;
				$c->save();
				
				// Use for messaging
				$this->session->set_flashdata('msg', 'Course Added!');
				
				redirect(base_url().'Courses', 'refresh');
			}
		}
	
		$data['main_content'] = 'save';
		
		$this->load->view('includes/template', $data);	
	}
	// --------------------------------------------------------------------
	function delete($id)
	{
		$c = new Course_m();
		$c->get_by_id( $id )->delete();

		// Use for messaging
		$this->session->set_flashdata('msg', 'Course Deleted!');
		redirect(base_url().'Courses', 'refresh');
	}
	// --------------------------------------------------------------------
	/**
	 * Check if subject code exists
	 *
	 * @param string $course_code
	 * @return boolean
	 */
	function course_code_check($course_code)
	{
		$c = new Course_m();
		$c->where('course_code', $course_code);
		$c->get();
		$is_course_code_exists = $c->course_code;
	
		if ($is_course_code_exists == $course_code)
		{
			$this->form_validation->set_message('course_code_check', '<b>The Course Code</b> ( '.$course_code.' ) is already existing!');
			return FALSE;
		}
		else
		{
			return TRUE;
		}
	}
	//------------------------------------------------------------------------			
}	

/* End of file office_manage.php */
/* Location: ./system/application/modules/office_manage/controllers/office_manage.php */