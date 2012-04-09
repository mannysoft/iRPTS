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
class Home extends MX_Controller  
{
	// --------------------------------------------------------------------
	
	function __construct()
    {
        parent::__construct();
		//$this->output->enable_profiler(TRUE);
		//$this->load->driver('my_driver');
		//$this->my_driver->my_driver_subclass->cool();
		
		//$this->load->spark('gas/2.1.1');
		
		//$this->ci_alerts->set('error', 'hehe');
		
		//echo $this->ci_alerts->display();
    }  
	
	// --------------------------------------------------------------------
	
	function index()
	{
		
		$this->is_user_logged($isUserLogged);
	}
	
	// --------------------------------------------------------------------
	
	function is_user_logged($isUserLogged = FALSE)
	{
		if ($isUserLogged == FALSE)
		{
			redirect('login/show_login', 'refresh');
		}
	}
	
	// --------------------------------------------------------------------
	
	function home_page()
	{
		$data['msg'] = '';
		
		$data['page_name'] = 'Home';
			
		$data['main_content'] = 'home';
		
		$this->load->view('includes/template', $data);
	}
}

/* End of file home.php */
/* Location: ./system/application/modules/home/controllers/home.php */