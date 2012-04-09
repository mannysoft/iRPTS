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
class Permissions extends MX_Controller {

	// --------------------------------------------------------------------
	
	function __construct()
    {
        parent::__construct();
		
		$this->load->model('options');
		
		//$this->output->enable_profiler(TRUE);
    }  
	
	// --------------------------------------------------------------------
	
	function group($id = '', $back_from = '')
	{
		$data['page_name'] 	= '<b>Permissions</b>';
		$data['legend'] 	= '<b>Add</b>';
		$data['focus_field'] 	= '';
		
		if ( $id != '' )
		{
			$data['legend'] 	= '<b>Edit Permissions for Group</b>';
		}
		
		$data['msg'] = '';
			
		
		$g = new Group_m();
		
		$data['row'] = $g->get_by_id( $id );
				
		$data['legend'] .= ' "'.$g->name.'"';
		
		$this->load->config('permissions');
				
		$data['permissions'] = $this->config->item('permissions');
		
		$data['group_id'] = $id;
		
		if ($back_from == 'groups')
		{
			$data['back_from'] = 'groups';
		}
		if ($back_from == 'permissions')
		{
			$data['back_from'] = 'permissions';
		}
		
		//print_r(array_combine($hours = range(0, 23), $hours));
		
		if ( $this->input->post('op'))
		{
			if ( $this->input->post('modules') )
			{
				foreach ($this->input->post('main_modules') as $module)
				{
					$p = new Permission_m();
					$p->where('group_id', $id);
					$p->where('module', $module)->get();
					$p->group_id 	= $id;
					$p->module 		= $module;
					$p->roles 		= ($this->input->post($module)) ? json_encode($this->input->post($module)) : NULL;
					$p->save();
					
					// If no methods selected
					// Remove the module from permissions table
					if ($p->roles == NULL)
					{
						$p = new Permission_m();
						$p->where('group_id', $id);
						$p->where('module', $module)->get();
						$p->delete();
						
					}
				}
				
				$data['msg'] = 'Permissions has been saved!';
			}
					
			//redirect(base_url().'groups', 'refresh');
			
		}
	
		$data['main_content'] = 'group';
		
		$this->load->view('includes/template', $data);	
	}
	
	// --------------------------------------------------------------------
	
	function index()
	{
		$data['page_name'] = '<b>Permissions</b>';
		
		$data['msg'] = '';
		
		$this->load->library('pagination');
		
		$s = new Group_m();
		
		$config['base_url'] = base_url().'groups/index';
		$config['total_rows'] = $s->count();
		$config['per_page'] = '15';
		$config['full_tag_open'] = '<p>';
	    $config['full_tag_close'] = '</p>';
		
		$this->pagination->initialize($config);
		
		// How many related records we want to limit ourselves to
		$limit = $config['per_page'];
		
		// Set the offset for our paging
		$offset = $this->uri->segment(3);
		
		$s->order_by('name');
		
		$data['rows'] = $s->get($limit, $offset);
		
		$data['page'] = $this->uri->segment(3);
				
		$data['main_content'] = 'index';
		
		$this->load->view('includes/template', $data);
	
	}
}	

/* End of file office_manage.php */
/* Location: ./system/application/modules/office_manage/controllers/office_manage.php */