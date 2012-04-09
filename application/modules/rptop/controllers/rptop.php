<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Rptop extends MX_Controller {

	// --------------------------------------------------------------------
	
	function __construct()
    {
        parent::__construct();
		
		$this->load->model('options');
		
		$this->output->enable_profiler(TRUE);
    }  
	
	// --------------------------------------------------------------------

	function index()
	{
		$data['page_name'] 			= '<b>RPTOP List</b>';
		
		$data['msg'] = '';
		
		// Get the list of Barngay alphabetically
		$brgy = new Barangay_m();
		$brgy->order_by('description','ASC');
		
		$data['brgy_rows'] = $brgy->get();
		
		$this->load->library('pagination');
		
		$afs = new Rptop_m();
		
		$config['base_url'] = base_url().'faas/index/';
		$config['total_rows'] = $afs->count();
		$config['per_page'] = '15';
		$config['full_tag_open'] = '<p>';
	    $config['full_tag_close'] = '</p>';
		
		$this->pagination->initialize($config);
		
		// How many related records we want to limit ourselves to
		$limit = $config['per_page'];
		
		// Set the offset for our paging
		$offset = $this->uri->segment(3);
		
		
		$data['rows'] = $afs->get($limit, $offset);
		
		$data['page'] = $this->uri->segment(3);
		
		
		
		if($this->input->post('op'))
		{
			$this->Person->fields = array('id');
			
			
			$person_ids 		= $this->Person->search_person($this->input->post('search_key'));
			
			$owner_ids  		= $this->Owner_person->get_owner_id($person_ids);
			
			$od_ids 			= $this->Owner->get_od_ids($owner_ids);
			
			//To do:  add $od_ids from company search
			
			$data['rows'] 		= $this->Od->get_ods( $od_ids );
			
		}
		
		$data['main_content'] = 'index';
		
		$this->load->view('includes/template', $data);
		
	}
	
	// --------------------------------------------------------------------
	
	function afs_details( $od_id = '' )
	{
		$data['page_name'] 			= '<b>FAAS</b>';
		$data['msg'] 				= '';
		
		$afs = new Afs();
		
		$data['afs']				= $afs->get_by_od_id($od_id);
		
		// TD
		$td = new Td();
		
		$td->get_by_afs_id($afs->id);
		
		$person = new Person();
		
		// Get the name of provincial Assessor
		if ( $td->provincial_assessor != '')
		{
			$person->get_by_id($td->provincial_assessor);
		}
		
		
		
		
		$data['td']['provincial_assessor'] = $person->first_name.' '.$person->middle_name.' '.$person->last_name;
		
		// Get the name of municipal Assessor
		if ( $td->city_municipal_assessor != '')
		{
			$person->get_by_id($td->city_municipal_assessor);
		}
		
		$data['td']['city_municipal_assessor'] = $person->first_name.' '.$person->middle_name.' '.$person->last_name;
		
		$data['main_content'] = 'afs_details';
		
		$this->load->view('includes/template', $data);
		
	}
	
}

/* End of file agency.php */
/* Location: ./system/application/modules/attendance_manage/controllers/attendance_manage.php */