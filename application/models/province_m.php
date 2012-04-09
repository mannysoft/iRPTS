<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Province_m extends DataMapper
{
	public $table = 'province';
	
	// --------------------------------------------------------------------
		
	function __construct()
    {
        parent::__construct();
    }
	
	// --------------------------------------------------------------------
	
	function provinces()
	{
		$this->where('status', 'active');
		
		$this->order_by('description');
		
		return $this->get();
		
	}
	
	// --------------------------------------------------------------------
	
	function province_options()
	{		
		$provinces = $this->provinces();
				
		foreach($provinces as $province)
		{
			$options[$province->id] = $province->description;
		}
		
		return $options;
	}
	
}

/* End of file agency.php */
/* Location: ./system/application/model/agency.php */