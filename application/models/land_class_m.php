<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Land_class_m extends DataMapper
{
	public $table = 'land_classes';
	
	// --------------------------------------------------------------------
		
	function __construct()
    {
        parent::__construct();
    }
	
	// --------------------------------------------------------------------
	
	function land_classes()
	{
		$this->where('status', 'active');
		
		$this->order_by('description');
		
		return $this->get();
		
	}
	
	// --------------------------------------------------------------------
	
	function land_classes_options()
	{		
		$land_classes = $this->land_classes();
				
		foreach($land_classes as $land_class)
		{
			$options[$land_class->id] = $land_class->description;
		}
		
		return $options;
	}
	
}

/* End of file agency.php */
/* Location: ./system/application/model/agency.php */