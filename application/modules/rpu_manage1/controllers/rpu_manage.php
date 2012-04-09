<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Rpu_Manage extends MX_Controller {

	// --------------------------------------------------------------------
	
	function __construct()
    {
        parent::__construct();
		
		$this->load->model('options');
		
		$this->output->enable_profiler(TRUE);
    }  
	
	// --------------------------------------------------------------------

	function rpu_list()
	{
		$data['page_name'] 			= '<b>RPU List</b>';
		
		$data['msg'] = '';
		
		$data['barangay_options'] 				= $this->options->barangay_options('', $add_select = TRUE);
		$data['barangay_option_selected'] 		= '';
		
		$this->load->library('pagination');
		
		$afs = new Afs();
		
		$config['base_url'] = base_url().'rpu_manage/rpu_list';
		$config['total_rows'] = $afs->count();
		$config['per_page'] = '15';
		$config['full_tag_open'] = '<p>';
	    $config['full_tag_close'] = '</p>';
		
		$this->pagination->initialize($config);
		
		// How many related records we want to limit ourselves to
		$limit = $config['per_page'];
		
		// Set the offset for our paging
		$offset = $this->uri->segment(3);
		
		$afs->order_by('effectivity');
		
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
		
		$data['main_content'] = 'rpu_list';
		
		$this->load->view('includes/template', $data);
		
	}
	
	// --------------------------------------------------------------------
	
	function save_rpu( $id = '' )
	{
		$data['page_name'] = '<b>Save RPU</b>';
		$data['msg'] = '';
		
		//province_options
		$data['province_options'] 				= $this->options->province_options();
		
		//
		$data['municipality_options'] 			= $this->options->municipality_options();
		
		$data['district_options'] 				= $this->options->district_options();
		$data['district_option_selected'] 		= '';
		
		$data['barangay_options'] 				= $this->options->barangay_options();
		$data['barangay_option_selected'] 		= '';
		
		
		
		if($this->input->post('op'))
		{
			$data['district_option_selected'] 		= $this->input->post('district');
			$data['barangay_option_selected'] 		= $this->input->post('barangay');
			
			//To do: form validation
			
			$_POST['success'] = FALSE;
			
			$this->form_validation->set_rules('number', 'Number', 'required');
			$this->form_validation->set_rules('street', 'Street', 'required');
			
			if ($this->form_validation->run($this) == FALSE)
			{
				$_POST['success'] = FALSE;
			}
			else
			{
				$_POST['success'] = TRUE;
				
				$od = new Od();
				
				$od->get_by_id ( $id );
				
				$od->house_tag_number 			= $this->input->post('house_tag_number');
				$od->land_area 					= $this->input->post('land_area');
				$od->lot_number 				= $this->input->post('lot_number');
				$od->zone_number 				= $this->input->post('zone_number');
				$od->block_number				= $this->input->post('block_number');
				$od->psd13 						= $this->input->post('psd13');
				$od->affidavit_of_ownership 	= $this->input->post('affidavit_of_ownership');
				$od->barangay_certificate 		= $this->input->post('barangay_certificate');
				$od->land_tagging 				= $this->input->post('land_tagging');
				
				$od->save();
				
				// ========location_address
				
				$la = new Location_address();
				
				$la->number 				= $this->input->post('number');
				$la->street 				= $this->input->post('street');
				$la->province_id 			= $this->input->post('province_id');
				$la->municipality_city_id 	= $this->input->post('municipality_city_id');
				$la->district_id			= $this->input->post('district_id');
				$la->barangay_id			= $this->input->post('barangay_id');
				
				$la->save();
				
				// === locations
				
				$location = new Location();
				$location->get_by_od_id($od->id);
				$location->od_id 				= $od->id;
				$location->location_address_id 	= $la->id;
				
				$location->save();
							
				// ===== afs
				$afs = new Afs();
				$afs->get_by_od_id($od->id);
				$afs->od_id = $od->id;
				$afs->save();
				
				// Redirect
				redirect('rpu_manage/save_owner/'.$od->id);
				
			}			
		}
		
		
		
		$data['main_content'] = 'add_rpu';
		
		$this->load->view('includes/template', $data);
		
	}
	
	// --------------------------------------------------------------------
	
	function save_owner( $od_id = '' )
	{
		$data['page_name'] = '<b>Save Owner Information</b>';
		$data['msg'] = '';
		
		$this->load->model('options');
		
		$data['month_options'] 		= $this->options->month_options();
		$data['month_options_selected'] 		= date('m');
		
		$data['day_options'] 		= $this->options->days_options();
		$data['day_options_selected'] 		= date('d');
		
		$data['year_options'] 		= $this->options->year_options( 1900, 2020 );
		$data['year_options_selected'] 		= date('Y');
		
		$data['barangay_option_selected'] 		= $this->input->post('barangay');
		
		if($this->input->post('op'))
		{
			$data['district_option_selected'] 		= $this->input->post('district');
			$data['barangay_option_selected'] 		= $this->input->post('barangay');
			
			//To do: form validation
			
			
			
			//$this->form_validation->set_rules('number', 'Number', 'required');
			//$this->form_validation->set_rules('street', 'Street', 'required');
			
			$owner = new Owner();
			$owner->od_id = $od_id;
			$owner->save();
			
			// ========Person
			
			$person = new Person();
			
			$birth_day = $this->input->post('birth_year').'-'
						.$this->input->post('birth_month').'-'
						.$this->input->post('birth_day');
			
			$person->person_type 			= 'owner';
			$person->first_name 			= $this->input->post('first_name');
			$person->middle_name 			= $this->input->post('middle_name');
			$person->last_name 				= $this->input->post('last_name');
			$person->gender					= $this->input->post('gender');
			$person->birth_day				= $this->input->post('gender');
			$person->marital_status			= $this->input->post('marital_status');
			$person->tin					= $this->input->post('tin');
			$person->telephone				= $this->input->post('telephone');
			$person->mobile_number			= $this->input->post('mobile_number');
			$person->status					= $this->input->post('status');
			
			$person->save();
			
			// === owner_person
			
			$owner_person = new Owner_person();
			$owner_person->owner_id 	= $owner->id;
			$owner_person->person_id 	= $person->id;
			
			$owner_person->save();
			
					
			// ===== Address
			$address = new Address();
			$address->number 			= $this->input->post('number');
			$address->street 			= $this->input->post('street');
			$address->barangay 			= $this->input->post('barangay');
			$address->district 			= $this->input->post('district');
			$address->municipality_city = $this->input->post('municipality_city');
			$address->province 			= $this->input->post('province');
			$address->save();
			
			// person_addres
			$person_addres = new Person_address();
			$person_addres->person_id 			= $person->id;
			$person_addres->address_id 			= $address->id;
			$person_addres->save();
			
			// Redirect
			redirect('rpu_manage/save_identification_no/'.$od_id);
						
		}
		
		
		
		$data['main_content'] = 'save_owner';
		
		$this->load->view('includes/template', $data);
		
	}
	
	// --------------------------------------------------------------------
	
	function save_identification_no( $od_id = '' )
	{
		$data['page_name'] = '<b>RPU Identification Numbers</b>';
		$data['msg'] = '';
		
		$this->load->model('options');
		
		if($this->input->post('op'))
		{
			$data['district_option_selected'] 		= $this->input->post('district');
			$data['barangay_option_selected'] 		= $this->input->post('barangay');
			
			
			$afs = new Afs();
			
			$afs->get_by_od_id( $od_id );
			$afs->arp_number 			= $this->input->post('arp_number');
			$afs->property_index_number = $this->input->post('property_index_number');
			$afs->taxability 			= $this->input->post('taxability');
			$afs->effectivity 			= $this->input->post('effectivity');
			$afs->save();
			
			// Redirect
			redirect('faas_manage/afs_details/'.$od_id);
				
		}
		
		$afs = new Afs();
			
		$data['afs'] = $afs->get_by_od_id( $od_id );
		
		$data['year_options'] 				= $this->options->year_options( date('Y') - 10, date('Y') + 10 );
		
		$data['taxable'] 	= '';
		$data['exempt'] 	= '';
		
		if ( $afs->taxability == 'Taxable' )
		{
			$data['taxable'] = 'checked';
		}
		else
		{
			$data['exempt'] = 'checked';
		}
		
		$data['year_options_selected'] 		= $afs->effectivity;
		
		$data['main_content'] = 'save_identification_no';
		
		$this->load->view('includes/template', $data);
		
	}
	
	// --------------------------------------------------------------------
	
	function rpu_details($od_id = '')
	{
		$data['page_name'] = '<b>RPU Details</b>';
		$data['msg'] = '';
		
		// Get owner id
		$owner_id 					= $this->Owner->get_owner_id($od_id);
		
		$person_id 					= $this->Owner_person->get_person_id($owner_id);
		
		$data['persons'] 			= $person_id;
		
		$data['od_details']			= $this->Od->get_od_details($od_id);
		
		$location 					= $this->Location_address->get_location($od_id);
		
		$data['barangay_name'] 		= $this->Barangay->get_barangay_name($location['barangay_id']);
		
		$data['district_name'] 		= $this->District->get_district_name($location['district']);
		
		$data['municipality_city'] 	= $this->Municipality_city->get_name($location['municipality_city']);
		
		$data['province'] 			= $this->Province->get_name($location['province']);
		
		$data['location']			= $location ;
		
		$data['affidavit_of_ownership'] = '';
		
		if ($data['od_details']['affidavit_of_ownership'] == 1)
		{
			$data['affidavit_of_ownership'] = 'checked = "checked"';
		}
		
		$data['barangay_certificate'] = '';
		
		if ($data['od_details']['barangay_certificate'] == 1)
		{
			$data['barangay_certificate'] = 'checked = "checked"';
		}
		
		$data['land_tagging'] = '';
		
		if ($data['od_details']['land_tagging'] == 1)
		{
			$data['land_tagging'] = 'checked = "checked"';
		}
		
			
		$this->load->view('includes/header');
		
		$this->load->view('includes/menu', $data);
		$this->load->view('includes/body_top', $data);
		
		$this->load->view('rpu_details', $data);
		
		$this->load->view('includes/footer');
		
	}
	
	// --------------------------------------------------------------------
	
	function td_details($od_id)
	{
		$data['page_name'] = '<b>Tax Declaration</b>';
		
		$data['msg'] = '';
		
		$this->load->view('includes/header');
		
		$this->load->view('includes/menu', $data);
		$this->load->view('includes/body_top', $data);
		
		$this->load->view('td_details', $data);
		
		$this->load->view('includes/footer');
		
	}
	
	function rptop_details($od_id)
	{
		$data['page_name'] = '<b>RPTOP INFORMATION</b>';
		
		$data['msg'] = '';
		
		$this->load->view('includes/header');
		
		$this->load->view('includes/menu', $data);
		$this->load->view('includes/body_top', $data);
		
		$this->load->view('rptop_details', $data);
		
		$this->load->view('includes/footer');
		
	}
	
	
}

/* End of file agency.php */
/* Location: ./system/application/modules/attendance_manage/controllers/attendance_manage.php */