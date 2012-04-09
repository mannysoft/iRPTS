<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Od_m extends DataMapper
{
	// --------------------------------------------------------------------
	public $table = 'od';
	
	public $has_one = array("location", "afs");
	
	// --------------------------------------------------------------------
	
	function __construct()
    {
        parent::__construct();
		
		
		
		//$this->output->enable_profiler(TRUE);
    }  
	
}

/* End of file dtr.php */
/* Location: ./system/application/model/dtr.php */