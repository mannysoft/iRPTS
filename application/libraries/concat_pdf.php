<?php
/**
 * Integrated Human Resource Management Information System
 *
 * An Application Software use by Government agencies for management
 * of employees Attendance, Leave Administration, Payroll, Personnel
 * Training, Service Records, Performance, Recruitment and more...
 *
 * @package		iHRMIS
 * @author		Manolito Isles
 * @copyright	Copyright (c) 2008 - 2012, Charliesoft
 * @license		http://charliesoft.net/hrmis/user_guide/license.html
 * @link		http://charliesoft.net
 * @since		Version 1.0
 * @filesource
 */

// ------------------------------------------------------------------------

/**
 * iHRMIS Concatenate PDF Class
 *
 * This class use for concatenating pdf files.
 *
 * @package		iHRMIS
 * @subpackage	Libraries
 * @category	PDF Utilities
 * @author		Manolito Isles
 * @link		http://charliesoft.net/hrmis/user_guide/libraries/concat_pdf.html
 */
require_once('fpdi.php');

class Concat_pdf extends FPDI{
	
	// ------------------------------------------------------------------------
	
	function setFiles($files) 
	{ 
		$this->files = $files; 
	} 
	
	// ------------------------------------------------------------------------
	
	function concat() { 
		foreach($this->files AS $file) { 
			$pagecount = $this->setSourceFile($file); 
			for ($i = 1; $i <= $pagecount; $i++) { 
				 $tplidx = $this->ImportPage($i); 
				 $s = $this->getTemplatesize($tplidx); 
				 $this->AddPage('P', array($s['w'], $s['h'])); 
				 $this->useTemplate($tplidx); 
			} 
		} 
	}
	
	// ------------------------------------------------------------------------
}