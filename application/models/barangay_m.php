<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Barangay_m extends DataMapper
{
	public $table = 'barangay';
	
	// --------------------------------------------------------------------
		
	function __construct()
    {
        parent::__construct();
    }
	
	// --------------------------------------------------------------------
	
	function barangays()
	{
		$this->where('status', 'active');
		
		$this->order_by('description');
		
		return $this->get();
		
	}
	
	// --------------------------------------------------------------------
	
	function district_options()
	{		
		$barangays = $this->barangays();
				
		foreach($barangays as $barangay)
		{
			$options[$barangay->id] = $barangay->description;
		}
		
		return $options;
	}
	
}

/* End of file agency.php */
/* Location: ./system/application/model/agency.php */