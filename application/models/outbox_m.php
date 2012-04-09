<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Outbox_m extends DataMapper{

	public $table = 'outbox';
	// --------------------------------------------------------------------
	
	
	function __construct()
	{
		parent::__construct();
	}
	
	// --------------------------------------------------------------------
	
}

/* End of file agency.php */
/* Location: ./system/application/model/afs.php */