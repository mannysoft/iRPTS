<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Location_address_m extends DataMapper{
	
	// --------------------------------------------------------------------
	public $table = 'location_address';
	
	public $has_one = array("location");
	
	// --------------------------------------------------------------------
	
	function __construct()
    {
        parent::__construct();
		
		
    }
	
	
	
	
	
}

/* End of file agency.php */
/* Location: ./system/application/model/agency.php */