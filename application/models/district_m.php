<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class District_m extends DataMapper
{
	public $table = 'district';
	
	// --------------------------------------------------------------------
		
	function __construct()
    {
        parent::__construct();
    }
	
	// --------------------------------------------------------------------
	
	function districts()
	{
		$this->where('status', 'active');
		
		$this->order_by('description');
		
		return $this->get();
		
	}
	
	// --------------------------------------------------------------------
	
	function district_options()
	{		
		$districts = $this->districts();
				
		foreach($districts as $district)
		{
			$options[$district->id] = $district->description;
		}
		
		return $options;
	}
	
}

/* End of file agency.php */
/* Location: ./system/application/model/agency.php */