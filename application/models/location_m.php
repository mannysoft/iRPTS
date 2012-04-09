<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Location_m extends DataMapper{
	// --------------------------------------------------------------------
	
	public $table = 'location';
	
	public $fields 	= array();
	
	public $num_rows 	= 0;
	
	// --------------------------------------------------------------------
	
	function __construct()
    {
        parent::__construct();
		
		
    }
	
}

/* End of file agency.php */
/* Location: ./system/application/model/agency.php */