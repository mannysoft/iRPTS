<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Faas_manage extends MX_Controller {

	// --------------------------------------------------------------------
	
	function __construct()
    {
        parent::__construct();
		
		$this->load->model('options');
		
		$this->output->enable_profiler(TRUE);
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