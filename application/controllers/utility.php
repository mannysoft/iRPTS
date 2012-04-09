<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Utility extends MX_Controller {

	// --------------------------------------------------------------------
	
	var $xml			= '';
	var $office_id 	= 1;
	
	// --------------------------------------------------------------------
	
	function __construct()
    {
        parent::__construct();
		//$this->output->enable_profiler(TRUE);
    }  
	
	// --------------------------------------------------------------------
	
	function manual_upload_data()
	{
		$config['upload_path'] 		= './logs/uploaded/';
		$config['allowed_types'] 	= 'zip|jpg|png';
		$config['overwrite'] 		= TRUE;
		$config['remove_spaces'] 	= TRUE;
		//$config['max_size']	= '100';
		//$config['max_width']  = '1024';
		//$config['max_height']  = '768';
		
		$this->load->library('upload', $config);
	
		if ( ! $this->upload->do_upload('file'))
		{
			$error = array('error' => $this->upload->display_errors());
			
			//$this->load->view('upload_form', $error);
		}	
		else
		{
			$data = array('upload_data' => $this->upload->data());
			
			$file_name = $data['upload_data']['file_name'];
			
			//echo $file_name;
			
			$this->load->library('ftp');
			$this->load->library('my_ftp');
			$this->load->library('archive_extractor');
			
			list($office_id, $day, $year) = split('[-.-]', $file_name);
			
			//Extract the file to office id folder
			$files=$this->archive_extractor->extractArchive( 'logs/uploaded/'.$file_name, 'logs/uploaded/'.$office_id.'/' );
			
			//process logs
			$this->office_id = $office_id;
			$this->process_logs();
			
			//delete the zip file
			if(file_exists('logs/uploaded/'.$file_name))
			{
				unlink('logs/uploaded/'.$file_name);
			}
			
			?>
			<script>
            alert("Manual uploading success!");
			//document.getElementById('upload_status').innerHTML = "";
            </script>
			<?php
			//echo '<b><font color=red>Manual uploading success!</font></b>';
			
		}
	}
	
	// --------------------------------------------------------------------
	
	function process_logs()
	{
		
		// Need to change the error reporting in index.php
		// Show all errors, except for notices
		 error_reporting(E_ALL & ~E_NOTICE);
		
		$office_id = $this->office_id;
		
		//For DTR
		$xml_data=file_get_contents('logs/uploaded/'.$office_id.'/logs/dtr.xml');
		
		$this->XmlToArray($xml_data);
		
		//Creating Array
		$arrayData = $this->createArray();
		
		//print_r($arrayData);
		
				
		if (array_key_exists('dtr', $arrayData['root']))
		{
			foreach($arrayData['root']['dtr'] as $dtr)
			{
				
				
				$office_id2 = $this->Employee->get_single_field('office_id', $dtr['employee_id']);
				
				
				$is_log_exists = $this->Dtr->is_log_date_exists($dtr['employee_id'], $dtr['log_date']);
				
				if ($is_log_exists == FALSE)
				{
					if($dtr['leave_type_id'] == 0)
					{
						$dtr['leave_type_id'] = '';
					}
					if($dtr['leave_half_day'] == 0)
					{
						$dtr['leave_half_day'] = '';
					}
					
					
					if ($dtr['pm_login'] < '13:00' && $dtr['pm_login'] != '') 
					{
						$dtr['pm_login'] = strtotime($dtr['pm_login'].' PM');
						$dtr['pm_login'] = date('H:i', $dtr['pm_login']);
					}
					
					if ($dtr['pm_logout'] < '13:00' && $dtr['pm_logout'] != '') 
					{
						$dtr['pm_logout'] = strtotime($dtr['pm_logout'].' PM');
						$dtr['pm_logout'] = date('H:i', $dtr['pm_logout']);
					}
					
					if ($dtr['ot_login'] < '13:00' && $dtr['ot_login'] != '') 
					{
						$dtr['ot_login'] = strtotime($dtr['ot_login'].' PM');
						$dtr['ot_login'] = date('H:i', $dtr['ot_login']);
					}
					
					if ($dtr['ot_logout'] < '13:00' && $dtr['ot_logout'] != '') 
					{
						$dtr['ot_logout'] = strtotime($dtr['ot_logout'].' PM');
						$dtr['ot_logout'] = date('H:i', $dtr['ot_logout']);
					}
					
					$data = array(
					   'employee_id' => $dtr['employee_id'] ,
					   'log_date' => $dtr['log_date'] ,
					   'am_login' => $dtr['am_login'],
					   'am_logout' => $dtr['am_logout'] ,
					   'pm_login' => $dtr['pm_login'] ,
					   'pm_logout' => $dtr['pm_logout'],
					   'ot_login' => $dtr['ot_login'] ,
					   'ot_logout' => $dtr['ot_logout'] ,
					   'office_id' => $office_id2,
					   'shift_id' => $dtr['shift_id'],
					   'leave_type_id' => $dtr['leave_type_id'],
					   'leave_half_day' => $dtr['leave_half_day']
					);
					
					$this->Dtr->insert_dtr($data); 
				}
				else
				{
					//update the dtr
					
					if($dtr['am_login'] != '')
					{
						//$this->updateDtr('am_login', $dtr['am_login'], $dtr['log_date'], 
										//$dtr['employee_id'], $office_id2);
										
						$data = array(
									'am_login' 	=> $dtr['am_login'],
									'office_id'	=> $office_id2
									);				
										
						$this->Dtr->edit_dtr($data, $dtr['employee_id'], $dtr['log_date']);			
					}
					
					if($dtr['am_logout'] != '')
					{
						//$this->updateDtr('am_logout', $dtr['am_logout'], $dtr['log_date'], 
									//$dtr['employee_id'], $office_id2);
									
						$data = array(
									'am_logout' => $dtr['am_logout'],
									'office_id'	=> $office_id2
									);				
										
						$this->Dtr->edit_dtr($data, $dtr['employee_id'], $dtr['log_date']);						
					}				
					
					if($dtr['pm_login'] != '')
					{
						if ($dtr['pm_login'] < '13:00') 
						{
							$dtr['pm_login'] = strtotime($dtr['pm_login'].' PM');
							$dtr['pm_login'] = date('H:i', $dtr['pm_login']);
						}
						
						//$this->updateDtr('pm_login', $dtr['pm_login'], $dtr['log_date'], 
									//$dtr['employee_id'], $office_id2);
									
						$data = array(
									'pm_login' => $dtr['pm_login'],
									'office_id'	=> $office_id2
									);				
										
						$this->Dtr->edit_dtr($data, $dtr['employee_id'], $dtr['log_date']);						
					}
					if($dtr['pm_logout'] != '')
					{
						if ($dtr['pm_logout'] < '13:00') 
						{
							$dtr['pm_logout'] = strtotime($dtr['pm_logout'].' PM');
							$dtr['pm_logout'] = date('H:i', $dtr['pm_logout']);
						}
						
						//$this->updateDtr('pm_logout', $dtr['pm_logout'], $dtr['log_date'], 
									//$dtr['employee_id'], $office_id2);
									
						$data = array(
									'pm_logout' => $dtr['pm_logout'],
									'office_id'	=> $office_id2
									);				
										
						$this->Dtr->edit_dtr($data, $dtr['employee_id'], $dtr['log_date']);							
					}
					if($dtr['ot_login'] != '')
					{
						if ($dtr['ot_login'] < '13:00') 
						{
							$dtr['ot_login'] = strtotime($dtr['ot_login'].' PM');
							$dtr['ot_login'] = date('H:i', $dtr['ot_login']);
						}
						
						//$this->updateDtr('ot_login', $dtr['ot_login'], $dtr['log_date'], 
									//$dtr['employee_id'], $office_id2);
									
						$data = array(
									'ot_login' => $dtr['ot_login'],
									'office_id'	=> $office_id2
									);				
										
						$this->Dtr->edit_dtr($data, $dtr['employee_id'], $dtr['log_date']);							
					}
					if($dtr['ot_logout'] != '')
					{
						if ($dtr['ot_logout'] < '13:00') 
						{
							$dtr['ot_logout'] = strtotime($dtr['ot_logout'].' PM');
							$dtr['ot_logout'] = date('H:i', $dtr['ot_logout']);
						}
						
						//$this->updateDtr('ot_logout', $dtr['ot_logout'], $dtr['log_date'], 
									//$dtr['employee_id'], $office_id2);
									
						$data = array(
									'ot_logout' => $dtr['ot_logout'],
									'office_id'	=> $office_id2
									);				
										
						$this->Dtr->edit_dtr($data, $dtr['employee_id'], $dtr['log_date']);						
					}
					
					
					
					
							
				}
					
			}
		}
		
		
		
		//$xml_data=file_get_contents('logs/uploaded/'.$office_id.'/logs/dtr.xml');
		
		//For LOgs
		$xml_data=file_get_contents('logs/uploaded/'.$office_id.'/logs/logs.xml');
		
		$this->XmlToArray($xml_data);
		
		//Creating Array
		$arrayData = $this->createArray();
		
		if (array_key_exists('logs', $arrayData['root']))
		{		
			foreach($arrayData['root']['logs'] as $logs)
			{
				//echo $dtr['employee_id'].'<br>';
				$is_log_exists = $this->Logs->is_log_exists($logs['username'], $logs['office_id'], $logs['date']);
				
				if ($is_log_exists == FALSE)
				{
				
					$data = array(
					   'username' => $logs['username'] ,
					   'office_id' => $logs['office_id'] ,
					   'command' => $logs['command'],
					   'details' => $logs['details'],
					   'employee_id_affected' => $logs['employee_id_affected'] ,
					   'date' => $logs['date'] 
					);
					
					$this->Logs->add_logs($data); 
				}
				
			}
		}	
		
		
		//For Employee
		$xml_data=file_get_contents('logs/uploaded/'.$office_id.'/logs/employee.xml');
		
		$this->XmlToArray($xml_data);
		
		//Creating Array
		$arrayData = $this->createArray();
		
		if (array_key_exists('employee', $arrayData['root']))
		{		
			foreach($arrayData['root']['employee'] as $employee)
			{
				$is_employee_exists = $this->Employee->is_employee_id_exists($employee['id']);
				
				if ($is_employee_exists == FALSE)
				{
				
					$data = array(
					   'id' 				=> $employee['id'],
					   'salut' 				=> $employee['salut'],
					   'fname' 				=> $employee['fname'],
					   'mname' 				=> $employee['mname'],
					   'lname' 				=> $employee['lname'],
					   'salary_grade' 		=> $employee['salary_grade'] ,
					   'step' 				=> $employee['step'],
					   'monthly_salary' 	=> $employee['monthly_salary'],
					   'permanent' 			=> $employee['permanent'],
					   'office_id' 			=> $employee['office_id'],
					   'detailed_office_id' => $employee['detailed_office_id'],
					   'pics' 				=> $employee['pics'],
					   'status' 			=> $employee['status'],
					   'shift_id' 			=> $employee['shift_id'] ,
					   'shift_type' 		=> $employee['shift_type']  
					);
					
					$this->Employee->add_employee($data); 
				}
				
			}
			
		}
		
		$response = array (
                   array(
                         'msg' => array('Uploading data to server success!!!', 'string'),
                         'description' => array('OK', 'string'),
                         'other_message' => array('sample', 'string')
                        ),
                 'struct'
                 );
				 
		//delete the files
		$this->load->helper('file');
		delete_files('logs/uploaded/'.$office_id.'/', TRUE);		 
						
		//return $this->xmlrpc->send_response($response);
	}
	
	// --------------------------------------------------------------------
	
	function upload_image()
	{
		$config['upload_path'] = './pics/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['overwrite'] 		= TRUE;
		//$config['remove_spaces'] 	= TRUE;
		//$config['max_size']	= '100';
		//$config['max_width']  = '1024';
		//$config['max_height']  = '768';
		
		$this->load->library('upload', $config);
	
		if ( ! $this->upload->do_upload('file'))
		{
			$error = array('error' => $this->upload->display_errors());
			//$this->load->view('upload_form', $error);
			echo 'whahahahhaa';
		}	
		else
		{
			$data = array('upload_data' => $this->upload->data());
			
			$config['image_library'] = 'gd2';
			$config['source_image'] = 'pics/'.$data['upload_data']['file_name'];
			//$config['create_thumb'] = TRUE;
			$config['maintain_ratio'] = TRUE;
			$config['width'] = 220;
			$config['height'] = 220;
			
			$this->load->library('image_lib', $config);
			
			$this->image_lib->resize();
			
			echo $this->image_lib->display_errors();
			
			//put the file name to session
			$this->session->set_userdata('file_register', $data['upload_data']['file_name']);
			
			echo '<img src="'.base_url().'pics/'.$data['upload_data']['file_name'].'" />';
			//$this->load->view('upload_success', $data);
		}
	}
	
	// --------------------------------------------------------------------
	
	function show_image($image_file_name = '')
	{
		echo '<img src="'.base_url().'pics/'.$image_file_name.'" />';
	}
	
	// --------------------------------------------------------------------
	
	/**
    * Default Constructor
    * @param $xml = xml data
    * @return none
    */
    function XmlToArray($xml)
    {
       $this->xml = $xml;   
    }
   
    /**
    * _struct_to_array($values, &$i)
    *
    * This is adds the contents of the return xml into the array for easier processing.
    * Recursive, Static
    *
    * @access    private
    * @param    array  $values this is the xml data in an array
    * @param    int    $i  this is the current location in the array
    * @return    Array
    */
    function _struct_to_array($values, &$i)
    {
        $child = array();
        if (isset($values[$i]['value'])) array_push($child, $values[$i]['value']);
       
        while ($i++ < count($values)) {
            switch ($values[$i]['type']) {
                case 'cdata':
                array_push($child, $values[$i]['value']);
                break;
               
                case 'complete':
                    $name = $values[$i]['tag'];
                    if(!empty($name)){
                    $child[$name]= ($values[$i]['value'])?($values[$i]['value']):'';
                    if(isset($values[$i]['attributes'])) {                   
                        $child[$name] = $values[$i]['attributes'];
                    }
                }   
              break;
               
                case 'open':
                    $name = $values[$i]['tag'];
                    $size = isset($child[$name]) ? sizeof($child[$name]) : 0;
                    $child[$name][$size] = $this->_struct_to_array($values, $i);
                break;
               
                case 'close':
                return $child;
                break;
            }
        }
        return $child;
    }//_struct_to_array
   	
	// --------------------------------------------------------------------
	
    /**
    * createArray($data)
    *
    * This is adds the contents of the return xml into the array for easier processing.
    *
    * @access    public
    * @param    string    $data this is the string of the xml data
    * @return    Array
    */
    function createArray()
    {
        $xml    = $this->xml;
        $values = array();
        $index  = array();
        $array  = array();
        $parser = xml_parser_create();
        xml_parser_set_option($parser, XML_OPTION_SKIP_WHITE, 1);
        xml_parser_set_option($parser, XML_OPTION_CASE_FOLDING, 0);
        xml_parse_into_struct($parser, $xml, $values, $index);
        xml_parser_free($parser);
        $i = 0;
        $name = $values[$i]['tag'];
        $array[$name] = isset($values[$i]['attributes']) ? $values[$i]['attributes'] : '';
        $array[$name] = $this->_struct_to_array($values, $i);
        return $array;
    }//createArray

}