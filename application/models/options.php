<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Options extends CI_Model{

	// --------------------------------------------------------------------
	
	/**
	 * Constructor
	 *
	 * @return Options
	 */
	function __construct()
	{
		parent::__construct();
	}
	
	function barangay_options($district_id = '', $add_select = FALSE)
	{
		$b = new Barangay();
		
		$b->order_by('description');
		
		if ( $district_id != '')
		{
			$b->where('district_id', $district_id);	
		}
		
		$barangays = $b->get();
		
		if ($add_select == TRUE)
		{
			$options[] = '---Select Barangay---';	
		}
		
		foreach($barangays as $barangay)
		{
			$options[$barangay->id] = $barangay->description;
		}
		
		return $options;
	}
	
	// --------------------------------------------------------------------
	
	/**
	 * Options for dropdown list
	 * day 1-31
	 *
	 * @return array
	 */
	function days_options()
	{
		$day = 1; 
		
		while($day != 32)
		{
			//Add leading zero to month
			$x = sprintf("%02d", $day);
			
			$options[$x] = $x;
		
			$day ++; 
		}
		
		return $options;
		
	}
	
	function district_options($add_select = FALSE)
	{
		
		$d = new District();
		
		$districts = $d->order_by('description')->get();
		
		if ($add_select == TRUE)
		{
			$options[] = 'SELECT OFFICE';	
		}
		
		foreach($districts as $district)
		{
			$options[$district->id] = $district->description;
		}
		
		return $options;
	}
	
	// --------------------------------------------------------------------
	
	function municipality_options($add_select = FALSE)
	{
		$m = new Municipality_city();
		
		$m->order_by('description')->get();
		
		if ($add_select == TRUE)
		{
			$options[] = 'SELECT OFFICE';	
		}
		
		foreach($m as $municipality)
		{
			$options[$municipality->id] = $municipality->description;
		}
		
		return $options;
	}
	
	// --------------------------------------------------------------------
	
	/**
	 * Options for month
	 *
	 * @param boolean $add_select
	 * @return array
	 */
	function month_options($add_select = FALSE)
	{
		$month = 1;
		
		$this->load->model('helps');
		
		while($month != 13)
		{
			//Add leading zero to month
			$x = sprintf("%02d", $month);
			
			$options[$x] = $this->helps->get_month_name($month);
			
			$month ++;
		}
		
		return $options;
	}
	
	
	function province_options($add_select = FALSE)
	{
		$p = new Province();
		
		$provinces = $p->order_by('description')->get();
		
		if ($add_select == TRUE)
		{
			$options[] = 'SELECT OFFICE';	
		}
		
		foreach($provinces as $province)
		{
			$options[$province->id] = $province->description;
		}
		
		return $options;
	}
	
	// --------------------------------------------------------------------
	
	/**
	 * Options for office
	 *
	 * @param boolean $add_select
	 * @return array
	 */
	function office_options($add_select = FALSE)
	{
		$this->Office->fields = array('office_id', 'office_name');
		
		$offices = $this->Office->get_offices();
		
		
		if ($add_select == TRUE)
		{
			$options[] = 'SELECT OFFICE';	
		}
		
		foreach($offices as $office)
		{
			$options[$office['office_id']] = $office['office_name'];
		}
		
		return $options;
	}
	
	// --------------------------------------------------------------------
	
	function report_code_options()
	{
		
		$options = array(
					'AG'	=> 	'AG',
					'CO'	=>	'CO',
					'CU'	=>	'CU',
					'GO'	=>	'GO',
					'HO'	=>	'HO',
					'IN'	=>	'IN',	
					'OTE'	=>	'OTE',
					'OTX'	=>	'OTX',
					'RE'	=>	'RE',
					'SC'	=> 	'SC'
		);
		
		return $options;
	}
	
	// --------------------------------------------------------------------
	
	/**
	 * Options for salary grade
	 *
	 * @return array
	 */
	function salary_grade()
	{
		$x = 1;
		while($x != 31)
		{ 
			$sg_options[$x] = $x;
			$x++;
		}
		
		return $sg_options;
	}
	
	// --------------------------------------------------------------------
	
	/**
	 * Options for user type
	 *
	 * @return array
	 */
	function user_type()
	{
		$user_type = array(
							'1' => 'Super System Administrator',
							'2' => 'System Administrator',
							'3'	=> 'Time Keeper',
							'4'	=> 'OB Encoder',
							'5'	=> 'Leave Manager'
							);
		
		return $user_type;
	}
	
	// --------------------------------------------------------------------
	
	/**
	 * Options for years. We need to specify the 
	 * start and end of the year for dropdown list
	 *
	 * @param int $start
	 * @param int $end
	 * @param boolean $add_select
	 * @return array
	 */
	function year_options($start = 2010, $end = 2020, $add_select = FALSE)
	{
		$year = $start;
		
		while($year <= $end)
		{
			$options[$year] = $year;
			
			$year ++;
		}
		
		return $options;
	}
	
	// --------------------------------------------------------------------
	
	
}

/* End of file options.php */
/* Location: ./system/application/model/options.php */