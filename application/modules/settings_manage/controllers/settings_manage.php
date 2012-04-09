<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Settings_Manage extends MX_Controller {

	
	// --------------------------------------------------------------------
	
	function __construct()
    {
        parent::__construct();
		
		$this->load->model('options');
		
		header("Cache-Control: no-cache, must-revalidate"); // HTTP/1.1
		header("Expires: Sat, 26 Jul 1997 05:00:00 GMT"); // Date in the past
		
		$this->output->enable_profiler(TRUE);
    }  

	// --------------------------------------------------------------------
	
	function lgu_settings()
	{
		$data['page_name'] = '<b>LGU Settings</b>';
		$data['msg'] = '';
				
		if ($this->input->post('op'))
		{
			
			$this->form_validation->set_rules('lgu_name', 'LGU Name','required');
			$this->form_validation->set_rules('chief_designation', 'Chief Designation', 'required');
			
			
			if ($this->form_validation->run($this) == FALSE)
			{
				
			}
			else
			{
				// We get all the POST data. $key is the field name
				// which is the name of settings in database table.
				// We update the settings table to a new value($val)
				foreach ($_POST as $key => $val)
				{
					$this->Settings->update_settings($key, $val);
				}
				
				$data['msg'] = 'Settings has been saved!';
			}
		}
		
		$data['settings'] = $this->Settings->get_settings();
				
		$data['main_content'] = 'lgu_settings';
		
		$this->load->view('includes/template', $data);
	}
	
	// --------------------------------------------------------------------
	
	function assessment_settings()
	{	
		$data['page_name'] = '<b>Assessment Settings</b>';
		$data['msg'] = '';
		
		
		if ($this->input->post('op'))
		{
			$this->Settings->update_settings('auto_calculate', $this->input->post('auto_calculate'));
			
			$data['msg'] = 'Settings has been saved!';
		}
		
		$data['auto_calculate'] = $this->Settings->get_selected_field('auto_calculate');
		
		$data['auto_calculate'] = ($data['auto_calculate'] == 1) ? 'checked' : '';
						
		$data['main_content'] = 'assessment_settings';
		
		$this->load->view('includes/template', $data);
		
	}
	
	
	// --------------------------------------------------------------------
	
	function treasury_settings()
	{
		$data['page_name'] = '<b>Treasury Settings</b>';
		
		$data['msg'] = '';
		
		
		if ($this->input->post('op'))
		{
			for ($i = 1; $i != 39; $i ++)
			{
				$months[] = $this->input->post('m'.$i);
			}
			
			// From array to comma separated months
			$months_separated = implode(",", $months);
			
			$s = new Treasury_setting();
			$s->where('id', '1')->get();
			
			$s->penalty_lut						= $months_separated;
			$s->annual_due_date					= $this->input->post('annual_due_date');
			$s->pct_rpt_tax						= $this->input->post('pct_rpt_tax');
			$s->pct_sef							= $this->input->post('pct_sef');
			$s->pct_idle						= $this->input->post('pct_idle');
			$s->discount_percentage				= $this->input->post('discount_percentage');
			$s->discount_period					= $this->input->post('month').'-'.$this->input->post('day');
			$s->advanced_discount_percentage	= $this->input->post('advanced_discount_percentage');
			$s->q1_advanced_discount_percentage	= $this->input->post('q1_advanced_discount_percentage');
						
			$s->save();
			
			$data['msg'] =  'Treasury Settings has been saved!';
		
		}
		
		$s = new Treasury_setting();
		
		$data['settings'] = $s->get();
		
		list($month, $day) = explode('-', $data['settings']->discount_period);
		
		// Months
		$data['month_options'] 		= $this->options->month_options();
		$data['month_selected'] 	= $month;
		
		// Day
		$data['days_options'] 		= $this->options->days_options();
		
		$data['days_selected'] 		= $day;
		
		$data['m'] = explode(',', $data['settings']->penalty_lut);
				
		$data['main_content'] = 'treasury_settings';
		
		$this->load->view('includes/template', $data);

	}
	
	// --------------------------------------------------------------------
	
}	