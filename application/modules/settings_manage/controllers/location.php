<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Location extends MX_Controller {

	
	// --------------------------------------------------------------------
	
	function __construct()
    {
        parent::__construct();
		
		$this->load->model('options');
		
		$this->output->enable_profiler(TRUE);
    }  
	
	// --------------------------------------------------------------------
	
	function province()
	{
		$data = array();
		
		$data['page_name'] = 'Settings>>Location>>Province';
		
		$data['msg'] = '';
		
		$p = new Province_m();
		
		$data['provinces'] 	= $p->get();
		
		$data['main_content'] = 'location/province';
		
		$this->load->view('includes/template', $data);
				
	}
	
	// --------------------------------------------------------------------
	
	function province_save($id = '')
	{
		$data['page_name'] = '<b>Add Province</b>';
		
		if ($id != '')
		{
			$data['page_name'] = '<b>Edit Province</b>';
		}
		
		$data['focus_field'] = 'code';
		$data['msg'] = '';
				
		$p = new Province_m();
		
		$data['province'] = $p->get_by_id($id);
						
		// If form submitted
		if($this->input->post('op'))
		{
			$this->form_validation->set_rules('code', 'Code', 'required');
			$this->form_validation->set_rules('description', 'Description', 'required');
			
			if ($this->form_validation->run($this) == TRUE)
			{				
				$p->code			= $this->input->post('code');
				$p->description		= $this->input->post('description');
				$p->status			= $this->input->post('status');
				
				$p->save();
																					 
				$this->session->set_flashdata('msg', 'Province has been saved!');
						
				redirect(base_url().'settings_manage/location/province', 'refresh');
			}
					
		}
				
		$data['main_content'] = 'location/province_save';
		
		$this->load->view('includes/template', $data);
				
	}
	
	// --------------------------------------------------------------------
	
	/**
	 * Delete Province
	 *
	 * @param int $id
	 */
	function province_delete($id = '')
	{
		$p = new Province_m();
		$p->get_by_id( $id )->delete();
				
		$this->session->set_flashdata('msg', 'Province has been deleted!');
		
		redirect(base_url().'settings_manage/location/province', 'refresh');
		
	}
	
	// --------------------------------------------------------------------
	
	function city()
	{
		$data = array();
		
		$data['page_name'] = 'Settings>>Location>>Municipality/City';
		
		$data['msg'] = '';
		
		$p = new City_m();
		
		$data['cities'] = $p->get();
		
		$data['main_content'] = 'location/city';
		
		$this->load->view('includes/template', $data);
				
	}
	
	// --------------------------------------------------------------------
	
	function city_save($id = '')
	{
		$data['page_name'] = '<b>Add City</b>';
		
		if ($id != '')
		{
			$data['page_name'] = '<b>Edit City</b>';
		}
		
		$data['focus_field'] = 'code';
		$data['msg'] = '';
				
		$c = new City_m();
		
		$data['city'] = $c->get_by_id($id);
						
		// If form submitted
		if($this->input->post('op'))
		{
			$this->form_validation->set_rules('code', 'Code', 'required');
			$this->form_validation->set_rules('description', 'Description', 'required');
			
			if ($this->form_validation->run($this) == TRUE)
			{				
				$c->province_id		= $this->input->post('province_id');
				$c->code			= $this->input->post('code');
				$c->description		= $this->input->post('description');
				$c->status			= $this->input->post('status');
				
				$c->save();
																					 
				$this->session->set_flashdata('msg', 'Municipality/City has been saved!');
						
				redirect(base_url().'settings_manage/location/city', 'refresh');
			}
					
		}
				
		$data['main_content'] = 'location/city_save';
		
		$this->load->view('includes/template', $data);
				
	}
	
	// --------------------------------------------------------------------
	
	/**
	 * Delete City
	 *
	 * @param int $id
	 */
	function city_delete($id = '')
	{
		$c = new City_m();
		$c->get_by_id( $id )->delete();
				
		$this->session->set_flashdata('msg', 'Municipality/City has been deleted!');
		
		redirect(base_url().'settings_manage/location/city', 'refresh');
		
	}
		
	// --------------------------------------------------------------------
	
	function district()
	{
		$data = array();
		
		$data['page_name'] = 'Settings>>Location>>Districts';
		
		$data['msg'] = '';
		
		$d = new District_m();
		
		$d->order_by('description');
		
		$data['districts'] = $d->get();
		
		$data['main_content'] = 'location/district';
		
		$this->load->view('includes/template', $data);
				
	}
	
	// --------------------------------------------------------------------
	
	function district_save($id = '')
	{
		$data['page_name'] = '<b>Add District</b>';
		
		if ($id != '')
		{
			$data['page_name'] = '<b>Edit District</b>';
		}
		
		$data['focus_field'] = 'code';
		$data['msg'] = '';
				
		$d = new District_m();
		
		$data['district'] = $d->get_by_id($id);
						
		// If form submitted
		if($this->input->post('op'))
		{
			$this->form_validation->set_rules('code', 'Code', 'required');
			$this->form_validation->set_rules('description', 'Description', 'required');
			
			if ($this->form_validation->run($this) == TRUE)
			{				
				$d->municipality_city_id	= $this->input->post('municipality_city_id');
				$d->code					= $this->input->post('code');
				$d->description				= $this->input->post('description');
				$d->status					= $this->input->post('status');
				
				$d->save();
																					 
				$this->session->set_flashdata('msg', 'District has been saved!');
						
				redirect(base_url().'settings_manage/location/district', 'refresh');
			}
					
		}
				
		$data['main_content'] = 'location/district_save';
		
		$this->load->view('includes/template', $data);
				
	}
	
	// --------------------------------------------------------------------
	
	/**
	 * Delete District
	 *
	 * @param int $id
	 */
	function district_delete($id = '')
	{
		$d = new District_m();
		$d->get_by_id( $id )->delete();
				
		$this->session->set_flashdata('msg', 'District has been deleted!');
		
		redirect(base_url().'settings_manage/location/district', 'refresh');
		
	}
	
	// --------------------------------------------------------------------
	
	function barangay()
	{
		$data = array();
		
		$data['page_name'] = 'Settings>>Location>>Barangays';
		
		$data['msg'] = '';
		
		$d = new Barangay_m();
		
		$d->order_by('description');
		
		$data['barangays'] = $d->get();
		
		$data['main_content'] = 'location/barangay';
		
		$this->load->view('includes/template', $data);
				
	}
	
	// --------------------------------------------------------------------
	
	function barangay_save($id = '')
	{
		$data['page_name'] = '<b>Add Barangay</b>';
		
		if ($id != '')
		{
			$data['page_name'] = '<b>Edit Barangay</b>';
		}
		
		$data['focus_field'] = 'code';
		$data['msg'] = '';
				
		$b = new Barangay_m();
		
		$data['barangay'] = $b->get_by_id($id);
						
		// If form submitted
		if($this->input->post('op'))
		{
			$this->form_validation->set_rules('code', 'Code', 'required');
			$this->form_validation->set_rules('description', 'Description', 'required');
			
			if ($this->form_validation->run($this) == TRUE)
			{				
				$b->district_id				= $this->input->post('district_id');
				$b->code					= $this->input->post('code');
				$b->description				= $this->input->post('description');
				$b->status					= $this->input->post('status');
				
				$b->save();
																					 
				$this->session->set_flashdata('msg', 'Barangay has been saved!');
						
				redirect(base_url().'settings_manage/location/barangay', 'refresh');
			}
					
		}
				
		$data['main_content'] = 'location/barangay_save';
		
		$this->load->view('includes/template', $data);
				
	}
	
	// --------------------------------------------------------------------
	
	/**
	 * Delete barangay
	 *
	 * @param int $id
	 */
	function barangay_delete($id = '')
	{
		$b = new Barangay_m();
		$b->get_by_id( $id )->delete();
				
		$this->session->set_flashdata('msg', 'Barangay has been deleted!');
		
		redirect(base_url().'settings_manage/location/barangay', 'refresh');
		
	}
	
	// --------------------------------------------------------------------
}	