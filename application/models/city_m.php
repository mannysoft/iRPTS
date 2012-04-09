<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class City_m extends DataMapper
{
	public $table = 'municipality_city';
	// --------------------------------------------------------------------
		
	function __construct()
    {
        parent::__construct();
    }
	
	// --------------------------------------------------------------------
	
	function cities()
	{
		$this->where('status', 'active');
		
		$this->order_by('description');
		
		return $this->get();
		
	}
	
	// --------------------------------------------------------------------
	
	function cities_options()
	{		
		$cities = $this->cities();
				
		foreach($cities as $city)
		{
			$options[$city->id] = $city->description;
		}
		
		return $options;
	}
	
}

/* End of file agency.php */
/* Location: ./system/application/model/agency.php */