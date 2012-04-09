<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Property extends MX_Controller {

	
	// --------------------------------------------------------------------
	
	function __construct()
    {
        parent::__construct();
		
		$this->load->model('options');
				
		$this->output->enable_profiler(TRUE);
    }  
	
	// --------------------------------------------------------------------
	
	function land_classes()
	{
		$data = array();
		
		$data['page_name'] = 'Settings>>Property>>Land>>Classes';
		
		$data['msg'] = '';
				
		$l = new Land_class_m();
		
		$l->order_by('description');
		
		$data['land_class'] = $l->get();
		
		$data['main_content'] = 'property/land/land_classes';
		
		$this->load->view('includes/template', $data);
	}
	
	// --------------------------------------------------------------------
	
	function land_classes_save($id = '')
	{
		$data['page_name'] = '<b>Add Land Class</b>';
		
		if ($id != '')
		{
			$data['page_name'] = '<b>Edit Land Class</b>';
		}
		
		$data['focus_field'] = 'code';
		$data['msg'] = '';
				
		$p = new Land_class_m();
		
		$data['land_class'] = $p->get_by_id($id);
						
		// If form submitted
		if($this->input->post('op'))
		{
			$this->form_validation->set_rules('code', 'Code','required');
			$this->form_validation->set_rules('description', 'Description', 'required');
			$this->form_validation->set_rules('value', 'Assessment Level', 'required|numeric');
			
			if ($this->form_validation->run($this) == TRUE)
			{				
				$p->code			= $this->input->post('code');
				$p->description		= $this->input->post('description');
				$p->value			= $this->input->post('value');
				$p->status			= $this->input->post('status');
				
				$p->save();
																					 
				$this->session->set_flashdata('msg', 'Land Class has been saved!');
						
				redirect(base_url().'settings_manage/property/land_classes', 'refresh');
			}
					
		}
				
		$data['main_content'] = 'property/land/land_classes_save';
		
		$this->load->view('includes/template', $data);
		
	}
	
	// --------------------------------------------------------------------
	
	/**
	 * Delete Land Class
	 *
	 * @param int $id
	 */
	function land_classes_delete($id = '')
	{
		$p = new Land_class_m();
		$p->get_by_id( $id )->delete();
				
		$this->session->set_flashdata('msg', 'Land Class has been deleted!');
		
		redirect(base_url().'settings_manage/property/land_classes', 'refresh');
		
	}
	
	// --------------------------------------------------------------------
	
	function land_actual_uses()
	{
		$data = array();
		
		$data['page_name'] = 'Settings>>Property>>Land>>Actual Uses';
		
		$data['msg'] = '';
		
		$l = new Land_actual_use_m();
		
		$l->order_by('description');
		
		$data['land_actual_use'] = $l->get();
		
		$data['main_content'] = 'property/land/land_actual_uses';
		
		$this->load->view('includes/template', $data);
	}
	
	// --------------------------------------------------------------------
	
	function land_actual_uses_save($id = '')
	{
		
		$data['page_name'] 	= 'Property Settings';
		
		$data['msg'] 		= '';
		
		$data['focus_field'] = 'report_code';
				
		$l = new Land_actual_use_m();
		
		$data['land'] = $l->get_by_id($id);
		
		if ($this->input->post("op"))
		{
			$this->form_validation->set_rules('code', 'Code','required');
			$this->form_validation->set_rules('description', 'Description', 'required');
			$this->form_validation->set_rules('value', 'Assessment Level', 'required|numeric');
			
			
			if ($this->form_validation->run($this) == TRUE)
			{
				$l->report_code	= $this->input->post('report_code');			
				$l->code		= $this->input->post('code');
				$l->description	= $this->input->post('description');
				$l->value		= $this->input->post('value');
				$l->status		= $this->input->post('status');	
				$l->save();
				
				$this->session->set_flashdata('msg', 'Land Actual Use has been saved!');
							
				redirect(base_url().'settings_manage/property/land_actual_uses', 'refresh');
			}
			
		}
		
		$data['main_content'] = 'property/land/land_actual_uses_save';
		
		$this->load->view('includes/template', $data);
	}
	
	// --------------------------------------------------------------------
	
	/**
	 * Delete Land actual use
	 *
	 * @param int $id
	 */
	function land_actual_uses_delete($id = '')
	{
		$l = new Land_actual_use_m();
		$l->get_by_id( $id )->delete();
				
		$this->session->set_flashdata('msg', 'Land Actual use has been deleted!');
		
		redirect(base_url().'settings_manage/property/land_actual_uses', 'refresh');
		
	}
	
	// --------------------------------------------------------------------
	
	function land_sub_classes()
	{
		$data['page_name'] 	= 'Property Settings';
		
		$data['msg'] 		= '';
						
		$l = new Land_sub_class_m();
		
		$l->order_by('description');
		
		$data['land_sub_classes'] = $l->get();
		
		$data['main_content'] = 'property/land/land_sub_classes';
		
		$this->load->view('includes/template', $data);
	}
	
	// --------------------------------------------------------------------
	
	function land_sub_classes_save($id = '')
	{
		$data['page_name'] 	= 'Property Settings';
		
		$data['msg'] 		= '';
		
		$data['focus_field'] = 'code';
		
		$l = new Land_sub_class_m();
		
		$data['land'] = $l->get_by_id($id);

		if ($this->input->post("op"))
		{
			$this->form_validation->set_rules('code', 'Code','required');
			$this->form_validation->set_rules('description', 'Description', 'required');
			$this->form_validation->set_rules('value', 'Unit Value', 'required|numeric');
			
			
			if ($this->form_validation->run($this) == TRUE)
			{
				
				$l->code			= $this->input->post('code');
				$l->description		= $this->input->post('description');
				$l->value			= $this->input->post('value');
				$l->status			= $this->input->post('status');
				
				$l->save();
				
				$this->session->set_flashdata('msg', 'Land Subclass has been saved!');
						
				redirect(base_url().'settings_manage/property/land_sub_classes', 'refresh');
			}
			
		}
		
		$data['main_content'] = 'property/land/land_sub_classes_save';
		
		$this->load->view('includes/template', $data);	}
	
	// --------------------------------------------------------------------
	
	function land_sub_classes_delete($id = '')
	{
		$l = new Land_sub_class_m();
		$l->get_by_id( $id )->delete();
				
		$this->session->set_flashdata('msg', 'Land Subclass has been deleted!');
		
		redirect(base_url().'settings_manage/property/land_sub_classes', 'refresh');
		
	}
	
	// --------------------------------------------------------------------
	
	function plant_classes()
	{
		$data['page_name'] 	= 'Property Settings';
		
		$data['msg'] 		= '';
						
		$p = new Plant_tree_class_m();
		
		$p->order_by('description');
		
		$data['plants'] = $p->get();
		
		$data['main_content'] = 'property/plant/plant_classes';
		
		$this->load->view('includes/template', $data);
	}
	
	// --------------------------------------------------------------------
	
	function plant_classes_save($id = '')
	{
		$data['page_name'] 	= 'Property Settings';
		
		$data['msg'] 		= '';
		
		$data['focus_field'] = 'code';
		
		$l = new Plant_tree_class_m();
		
		$data['plant'] = $l->get_by_id($id);

		if ($this->input->post("op"))
		{
			$this->form_validation->set_rules('code', 'Code','required');
			$this->form_validation->set_rules('description', 'Description', 'required');
			$this->form_validation->set_rules('value', 'Unit Value', 'required|numeric');
			
			
			if ($this->form_validation->run($this) == TRUE)
			{
				
				$l->code			= $this->input->post('code');
				$l->description		= $this->input->post('description');
				$l->value			= $this->input->post('value');
				$l->status			= $this->input->post('status');
				
				$l->save();
				
				$this->session->set_flashdata('msg', 'Plant Class has been saved!');
						
				redirect(base_url().'settings_manage/property/plant_classes', 'refresh');
			}
			
		}
		
		$data['main_content'] = 'property/plant/plant_classes_save';
		
		$this->load->view('includes/template', $data);	}
	
	// --------------------------------------------------------------------
	
	function plant_classes_delete($id = '')
	{
		$l = new Plant_tree_class_m();
		$l->get_by_id( $id )->delete();
				
		$this->session->set_flashdata('msg', 'Plant Class has been deleted!');
		
		redirect(base_url().'settings_manage/property/plant_classes', 'refresh');
		
	}
	
	// --------------------------------------------------------------------
	
	function plant_actual_uses()
	{
		$data = array();
		
		$data['page_name'] = 'Settings>>Property>>Land>>Actual Uses';
		
		$data['msg'] = '';
		
		$l = new Plant_tree_actual_use_m();
		
		$l->order_by('description');
		
		$data['plants'] = $l->get();
		
		$data['main_content'] = 'property/plant/plant_actual_uses';
		
		$this->load->view('includes/template', $data);
	}
	
	// --------------------------------------------------------------------
	
	function plant_actual_uses_save($id = '')
	{
		
		$data['page_name'] 	= 'Property Settings';
		
		$data['msg'] 		= '';
		
		$data['focus_field'] = 'report_code';
				
		$l = new Plant_tree_actual_use_m();
		
		$data['plant'] = $l->get_by_id($id);
		
		if ($this->input->post("op"))
		{
			$this->form_validation->set_rules('code', 'Code','required');
			$this->form_validation->set_rules('description', 'Description', 'required');
			$this->form_validation->set_rules('value', 'Assessment Level', 'required|numeric');
			
			
			if ($this->form_validation->run($this) == TRUE)
			{
				$l->report_code	= $this->input->post('report_code');			
				$l->code		= $this->input->post('code');
				$l->description	= $this->input->post('description');
				$l->value		= $this->input->post('value');
				$l->status		= $this->input->post('status');	
				$l->save();
				
				$this->session->set_flashdata('msg', 'Plant Actual Use has been saved!');
							
				redirect(base_url().'settings_manage/property/plant_actual_uses', 'refresh');
			}
			
		}
		
		$data['main_content'] = 'property/plant/plant_actual_uses_save';
		
		$this->load->view('includes/template', $data);
	}
	
	// --------------------------------------------------------------------
	
	function plant_actual_uses_delete($id = '')
	{
		$l = new Plant_tree_actual_use_m();
		$l->get_by_id( $id )->delete();
				
		$this->session->set_flashdata('msg', 'Plant Actual use has been deleted!');
		
		redirect(base_url().'settings_manage/property/plant_actual_uses', 'refresh');
		
	}
	
	// --------------------------------------------------------------------
	// --------------------------------------------------------------------
		
	function build_classes()
	{
		$data['page_name'] 	= 'Property Settings';
		
		$data['msg'] 		= '';
						
		$p = new Improvement_building_class_m();
		
		$p->order_by('description');
		
		$data['builds'] = $p->get();
		
		$data['main_content'] = 'property/build/build_classes';
		
		$this->load->view('includes/template', $data);
	}
	
	// --------------------------------------------------------------------
	
	function build_classes_save($id = '')
	{
		$data['page_name'] 	= 'Property Settings';
		
		$data['msg'] 		= '';
		
		$data['focus_field'] = 'code';
		
		$l = new Improvement_building_class_m();
		
		$data['build'] = $l->get_by_id($id);

		if ($this->input->post("op"))
		{
			$this->form_validation->set_rules('code', 'Code','required');
			$this->form_validation->set_rules('description', 'Description', 'required');
			//$this->form_validation->set_rules('value', 'Unit Value', 'required|numeric');
			
			
			if ($this->form_validation->run($this) == TRUE)
			{
				
				$l->code				= $this->input->post('code');
				$l->description			= $this->input->post('description');
				$l->range_lower_bound	= $this->input->post('range_lower_bound');
				$l->range_upper_bound	= $this->input->post('range_upper_bound');
				$l->value				= $this->input->post('value');
				$l->type				= $this->input->post('type');
				$l->status				= $this->input->post('status');
				
				$l->save();
				
				$this->session->set_flashdata('msg', 'Building and Improvement Class has been saved!');
						
				redirect(base_url().'settings_manage/property/build_classes', 'refresh');
			}
			
		}
		
		$data['main_content'] = 'property/build/build_classes_save';
		
		$this->load->view('includes/template', $data);	}
	
	// --------------------------------------------------------------------
	
	function build_classes_delete($id = '')
	{
		$l = new Improvement_building_class_m();
		$l->get_by_id( $id )->delete();
				
		$this->session->set_flashdata('msg', 'Building and Improvement Class has been deleted!');
		
		redirect(base_url().'settings_manage/property/build_classes', 'refresh');
		
	}
	
	function build_actual_uses()
	{
		$data = array();
		
		$data['page_name'] = 'Settings>>Property>>Land>>Actual Uses';
		
		$data['msg'] = '';
		
		$l = new Improvement_building_actual_use_m();
		
		$l->order_by('description');
		
		$data['plants'] = $l->get();
		
		$data['main_content'] = 'property/build/build_actual_uses';
		
		$this->load->view('includes/template', $data);
	}
	
	// --------------------------------------------------------------------
	
	function plant_actual_uses_save1($id = '')
	{
		
		$data['page_name'] 	= 'Property Settings';
		
		$data['msg'] 		= '';
		
		$data['focus_field'] = 'report_code';
				
		$l = new Plant_tree_actual_use_m();
		
		$data['plant'] = $l->get_by_id($id);
		
		if ($this->input->post("op"))
		{
			$this->form_validation->set_rules('code', 'Code','required');
			$this->form_validation->set_rules('description', 'Description', 'required');
			$this->form_validation->set_rules('value', 'Assessment Level', 'required|numeric');
			
			
			if ($this->form_validation->run($this) == TRUE)
			{
				$l->report_code	= $this->input->post('report_code');			
				$l->code		= $this->input->post('code');
				$l->description	= $this->input->post('description');
				$l->value		= $this->input->post('value');
				$l->status		= $this->input->post('status');	
				$l->save();
				
				$this->session->set_flashdata('msg', 'Plant Actual Use has been saved!');
							
				redirect(base_url().'settings_manage/property/plant_actual_uses', 'refresh');
			}
			
		}
		
		$data['main_content'] = 'property/plant/plant_actual_uses_save';
		
		$this->load->view('includes/template', $data);
	}
	
	// --------------------------------------------------------------------
	
	function plant_actual_uses_delete1($id = '')
	{
		$l = new Plant_tree_actual_use_m();
		$l->get_by_id( $id )->delete();
				
		$this->session->set_flashdata('msg', 'Plant Actual use has been deleted!');
		
		redirect(base_url().'settings_manage/property/plant_actual_uses', 'refresh');
		
	}
	
	
}	