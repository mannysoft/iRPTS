<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Report_code_m extends DataMapper
{
	public $table = 'report_code';
	
	// --------------------------------------------------------------------
		
	function __construct()
    {
        parent::__construct();
    }
	
	// --------------------------------------------------------------------
	
	function report_codes()
	{		
		$this->order_by('description');
		
		return $this->get();
		
	}
	
	// --------------------------------------------------------------------
	
	function report_codes_options()
	{		
		$report_codes = $this->report_codes();
				
		foreach($report_codes as $report_code)
		{
			$options[$report_code->code] = $report_code->description.' ('.$report_code->code.')';
		}
		
		return $options;
	}
	
}

/* End of file agency.php */
/* Location: ./system/application/model/agency.php */