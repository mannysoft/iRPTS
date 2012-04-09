<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Ajax extends MX_Controller {

	// --------------------------------------------------------------------
	
	function __construct()
    {
        parent::__construct();
		
		header("Cache-Control: no-cache, must-revalidate"); // HTTP/1.1
		header("Expires: Sat, 26 Jul 1997 05:00:00 GMT"); // Date in the past
    }  
	
	function sample2()
	{
		?>
		<table width="200" border="1">
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
          <tr>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
            <td>&nbsp;</td>
          </tr>
        </table>

		<?php	
	}
	
	function sample()
	{
		echo $this->input->post('barangay');
		
		// Run module 
		echo modules::run("Rpu_Manage/add_rpu");
		
		//echo var_dump($this->input->post('success'));
		// If success 
		if ($this->input->post('success') == TRUE)
		{
			?>
			<script>
            $('#page_name').html("<b>RPU Details</b>");
            $('.std_block').load("<?php echo base_url().'index.php/Rpu_Manage/rpu_details/700';?>");
            </script>
            <?php
		}
	}
	
	// --------------------------------------------------------------------
	
	function cancel_deduct_undertime($month, $year)
	{
		$last_day = $this->Helps->get_last_day($month, $year);
	
		$last_day = $year.'-'.$month.'-'.$last_day;
		
		$this->Leave_card->set_enabled($last_day, 0);
		
		echo '<b>Done!</b>';
	}
	
	// --------------------------------------------------------------------
	
	function connect_machine($ip, $com_no = 0, $machine_no = 0, $delete_data = '')
	{
		
		
		// Change the IP address of t4_connect/logs/ip.txt
		$this->Stand_alone->change_ip('t4_connect/logs/ip.txt', $ip);
		
		// If the checkbox for delete logs from 
		// machine is check then delete the logs from machine
		if ($delete_data)
		{
			$this->Stand_alone->change_delete_status('yes');
			
			//to be implement after a long period of testing
		}
		
		
		if ($com_no != 0)
		{
			// Change method
			$this->Stand_alone->change_method('t4_connect/logs/method.txt', 'com');	
			
		}
		else
		{
			// change method
			$this->Stand_alone->change_method('t4_connect/logs/method.txt', 'net');	
		}
		 
		
		//Sleep for 2 seconds
		sleep(2);
		
		//Excute the exe file
		exec("t4_connect\\logs.exe");
		
		//Sleep for 2 seconds
		sleep(2);
		
		//Read the message file
		$msg = file_get_contents('t4_connect/logs/msg.txt', true);
		
		//print_r($msg);
		
		//$msg = 'Success';
		
		//echo $ip;
		
		//$msg = 'Failed';
		if (trim($msg) == 'Success')
		{
			//Read the logs file and put to db
			$TempTXT = "t4_connect/logs/".date('Y-m-d').'.txt';
			//echo $TempTXT;
			//$TempTXT = "t4_connect/logs/".'2010-01-17.txt';
			
			if (!file_exists($TempTXT))
			{
				$TempTXT = 't4_connect/logs/temp.txt';
			}
			
			if ($fd = fopen ($TempTXT, "r")) 
			{
				while (!feof ($fd)) 
				{ 
					$lines[] = fgets($fd, 4096); 
				}
			  fclose ($fd);
			}
			
			sort($lines);
			
			$log_type 	 = '';
			$ampm 	  	 = '';
			$employee_id = '';
			$log_date	 = '';
			
			foreach($lines as $line)
			{
				//echo $line.'<br>';
				
				
				if (count(split(' ', $line)) != 4)
				{
					$employee_id = '';
					$date = '' ;
					$time = '';
					$inout = '';
				}
				else
				{
					list($employee_id, $date, $time, $inout)  = split(' ', $line);
				}
				
				
				
				
				$time = date('H:i', strtotime($time));
				
				//0 = in , 1 = out
				
				// get the office id of an employee
				$office_id = $this->Employee->get_single_field('office_id', $employee_id);
				
				
				
				//INSERT to table
				$info = array(
							"employee_id" 	=> $employee_id,
							"office_id"		=> $office_id,
							"log_date" 		=> $date,
							"logs" 			=> $time,
							"log_type" 		=> $inout,
							"date_extract" 	=> date('Y-m-d')
							);
			
				$id = $this->Dtr_temp->insert_dtr_temp($info);
				
				//echo $inout.'<br>';
				
			}	
			
			
			//exit;
			
			
			//INSERT the logs to dtr table
			$this->Stand_alone->get_logs();
			
			//exit;
			//EMPTY the dtr_temp
			
			// Display message
			echo '<b><font color=red>Downloading Logs Success!</font></b>';
			$this->Logs->insert_logs(
									$this->session->userdata('username'), 
									$this->session->userdata('office_id'), 
									'DOWNLOAD LOGS', 
									'Download logs from machine', 
									''
									);
		}
		else if (trim($msg) == 'Failed')
		{
			echo '<b><font color=red>Downloading Logs Failed! Please try again.</font></b>';
			
			$this->Logs->insert_logs(
									$this->session->userdata('username'), 
									$this->session->userdata('office_id'), 
									'DOWNLOAD LOGS', 
									'Download logs from machine', 
									'');
		}
	}
	
	// --------------------------------------------------------------------
	
	function deduct_undertime($month, $year)
	{
		$last_day = $this->Helps->get_last_day($month, $year);
	
		$last_day = $year.'-'.$month.'-'.$last_day;
		
		$this->Leave_card->set_enabled($last_day, 1);
		
		echo '<b>Done!</b>';
	}
	
	// --------------------------------------------------------------------
	
	function edit_place($mode = '')
	{
		if ($mode == 'leave_forward')
		{
			$employee_id = $this->input->post('rowid');
			
			$this->Forwarded_leave->update_forward_leave($employee_id, $this->input->post('colid'), $this->input->post('new'));
			exit;
		}
		
		//$colid = table field, $new = new value, $rowid = table row id
		if ($this->input->post('colid') == 'ob_leave')
		{
			if(trim($this->input->post('new')) == '')
			{
				$data	= array('notes' => $this->input->post('new') );
				
				//get manual_log_id in table dtr
				$manual_log_id = $this->Dtr->get_manual_log_id($this->input->post('rowid'));
				
				//execute the update
				$this->Manual_log->update_manual_log($data, $manual_log_id);
			}
			
			
			$is_ob = $this->Dtr->is_ob($this->input->post('rowid'));
			
			//this is for OB
			if($is_ob == TRUE)
			{
				$dtr_details = $this->Dtr->get_dtr_details($this->input->post('rowid'));
				
				$office_id = $this->Employee->select_field('office_id', $dtr_details['employee_id']);
				
				$is_ob_half = $this->Dtr->is_ob_half($this->input->post('rowid'));
				
				$half_day = $dtr_details['log_date'];
				
				if($is_ob_half == TRUE)
				{
					$half_day = 'Half Day';
				}
				
				$is_manual_log_exists = $this->Manual_log->is_manual_log_exists($dtr_details['employee_id'], 1, $dtr_details['log_date']);
				
				if ($is_manual_log_exists == FALSE)
				{
				
					$data = array(
							'employee_id' 			=> $dtr_details['employee_id'],
							'office_id'				=> $office_id,
							'log_type' 				=> 1,
							'if_single_time' 		=> '',
							'cover_if_ob_or_leave' 	=> $dtr_details['log_date'],
							'cover_if_ob_or_leave2' => $half_day,
							'notes' 				=> $this->input->post('new')
							);
					$id = $this->Manual_log->insert_manual_log($data);
					
					$this->Dtr->update_dtr('manual_log_id', $id, $this->input->post('rowid'));
				}
				if($is_manual_log_exists != FALSE)
				{
					//fields
					$data	= array(
								'if_single_time' 			=> '', 
								'cover_if_ob_or_leave' 		=> $dtr_details['log_date'],
								'cover_if_ob_or_leave2' 	=> $half_day, 
								'notes' 					=> $this->input->post('new')
						);
					
					$this->Manual_log->update_manual_log($data, $is_manual_log_exists);
					
					$this->Dtr->update_dtr('manual_log_id', $is_manual_log_exists, $this->input->post('rowid'));
				}
				
			}
			
			//this is for leave==============================================================================
			$is_leave = $this->Dtr->is_leave($this->input->post('rowid'));
			
			if($is_leave == TRUE)
			{
				$dtr_details = $Dtr->get_dtr_details($this->input->post('rowid'));
				
				$office_id = $this->Employee->select_field('office_id', $dtr_details['employee_id']);
				
				$is_leave_half = $this->Dtr->is_leave_half($this->input->post('rowid'));
				
				$half_day = $dtr_details['log_date'];
				
				$value_day = 1;
				
				if($is_leave_half == TRUE)
				{
					$half_day = 'Half Day';
					$value_day = 0.5;
				}
				
				//Tel what kind of leave
				if($this->input->post('new') == 'vl' or $this->input->post('new') == 'SL')
				{
					$notes = 'Vacation Leave';
					$leave_type_id = 1;
				}
				if($this->input->post('new') == 'sl' or $this->input->post('new') == 'VL')
				{
					$notes = 'Sick Leave';
					$leave_type_id = 2;
				}
				if($this->input->post('new') != 'sl' or $this->input->post('new') != 'VL' or 
				   $this->input->post('new') != 'vl' or $this->input->post('new') != 'SL')
				{
					//echo 'Invalid input!!!';
				}
				
				$is_manual_log_exists = $this->Manual_log->is_manual_log_exists($dtr_details['employee_id'], 2, $dtr_details['log_date']);
				
				if ($is_manual_log_exists == FALSE)
				{
				
					$data = array(
							'employee_id' 				=> $dtr_details['employee_id'],
							'office_id'					=> $office_id,
							'log_type' 					=> 2,
							'if_single_time' 			=> '',
							'cover_if_ob_or_leave' 		=> $dtr_details['log_date'],
							'cover_if_ob_or_leave2' 	=> $half_day,
							'notes' => $notes
							);
					$id = $this->Manual_log->insert_manual_log($data);
					
					$manual_log_id = $id;
					
					$this->Dtr->update_dtr('manual_log_id', $id, $this->input->post('rowid'));
					$this->Dtr->update_dtr('leave_type_id', $leave_type_id, $this->input->post('rowid'));
				}
				if($is_manual_log_exists != FALSE)
				{
					$data	= array(
						'if_single_time' 		=> '', 
						'cover_if_ob_or_leave' 	=> $dtr_details['log_date'],
						'cover_if_ob_or_leave2' => $half_day,
						'notes' 				=> $notes
						);
					
					$this->Manual_log->update_manual_log($data, $is_manual_log_exists);
					
					$this->Dtr->update_dtr('manual_log_id', $is_manual_log_exists, $this->input->post('rowid'));
					$this->Dtr->update_dtr('leave_type_id', $leave_type_id, $this->input->post('rowid'));
					
					$manual_log_id = $is_manual_log_exists;
				}
				
			}
			
		}
		else // Use for editing attendance ===============================================
		{
			$new = $this->input->post('new');
			
			$new_value = str_replace(':','', $this->input->post('new'));
			
			if ($new_value == 'OB' or $new_value == 'ob')
			{
				$new = 'Official Business';
			}
			if ($new_value == 'Leave' or $new_value == 'leave' or $new_value == 'l')
			{
				$new = 'Leave';
			}
			
			$this->Dtr->update_dtr($this->input->post('colid'), 
								   $new, 
								   $this->input->post('rowid')
								   );
			//to do(if value is official business
			//check if there is manual log
			//if there is none then create entry in manual logs
		}
		
		
		$dtr_details = $this->Dtr->get_dtr_details($this->input->post('rowid'));
			
			
			//print_r($dtr_details);
			if ($this->input->post('old') == '')
			{
				$old = 'No Log';
			}
			if ($this->input->post('new') == '')
			{
				$new = 'No Log';
			}
			
		//use for use logs
		$this->Logs->insert_logs($this->session->userdata('username'), 
								 $this->session->userdata('office_id'), 
								 'EDIT LOGS', 
								 'Edited '.$this->input->post('colid').'('.$dtr_details['log_date'].') Change from '.
								 $this->input->post('old').' to '.$this->input->post('new'), 
								 $dtr_details['employee_id']);

	}
	
	// --------------------------------------------------------------------
	
	function file_leave($employee_id = '', $multiple = '', $month = '', $year = '', 
						$leave_type_id = '', $month5 = '', $year5 = '', $multiple5 = '', 
						$special_priv_id = '', $days = '', $mone = '', $process = 0)
	{
		
		if ($multiple == 0)
		{
			$multiple = '';
		}
		if ($multiple5 == 0)
		{
			$multiple5 = '';
		}
		if ($days == 0)
		{
			$days = '';
		}
		if ($mone == 0)
		{
			$mone = '';
		}
		
		
		if (isset($_GET['mode']) && $_GET['mode'] == 'approved_leave')
		{
			
			$leave_apps = $this->Leave_apps->get_leave_apps_info($_GET['leave_apps_id']);
			
			$_GET['employee_id'] 	= $leave_apps['employee_id'];
			$_GET['multiple']	 	= $leave_apps['details'];
			$_GET['month']	 		= $leave_apps['month'];
			$_GET['year']	 		= $leave_apps['year'];
			$_GET['leave_type_id']	= $leave_apps['leave_type_id'];
			$_GET['special_priv_id']= $leave_apps['special_priv_id'];
			$_GET['days']	 		= $leave_apps['days'];
			$_GET['mone']	 		= $leave_apps['details'];
			$_GET['process']	 	= 1;
			
			//set the leave to approved
			$this->Leave_apps->set_approved($_GET['leave_apps_id']);
			
		}
		
		if(!is_numeric($employee_id))
		{
			echo $this->view_name($employee_id);
			exit;
		}
		
		$multiple  = str_replace (" ", "", $multiple);
		
		$dates = explode(",", $multiple);
		
		$name = $this->Employee->get_employee_info($employee_id);
	
		if(count($name) != 0)
		{
			$pics = $name['pics'];
			
			if($name['pics']=="")
			{
				$pics = 'not_available.jpg';
			}
			
			//if (file_exists('../pics/'.$pics))
			//{
				//list($width, $height) = getimagesize('../pics/'.$pics);
			//}
			
			//$w = $width/2;
			//$h = $height/2;
			
			//echo '<center><img src="../pics/'.$name['pics'].'" width="'.$w.'" height="'.$h.'" /></center><br>';
			//echo '<center><strong>'.utf8_encode($name['fname'].' '.$name['mname'].' '.$name['lname']).'</strong></center><br>';
			echo '<center><strong>'.$name['fname'].' '.$name['mname'].' '.$name['lname'].'</strong></center><br>';
			echo '<input name="taken" type="hidden" id="no_record" value="1" />';
			
			
			
			//=========
			$total_leave = $this->Leave_card->get_total_leave_credits($employee_id);
			
			$vbalance =  $total_leave['vacation'];
			$sbalance =  $total_leave['sick'];
			//==========
			
			$total_leave_balance = $vbalance + $sbalance;
			
			$last_earn = $this->Leave_card->get_last_earn($employee_id);
			$last_earn = date('F d, Y', strtotime($last_earn));
			
			echo '<strong></strong> Leave Balances as of <b>'.$last_earn.'</b><br>';
			echo '<strong></strong> Vacation Leave Balance: <b>'.$vbalance.'</b><br>';
			echo '<strong></strong> Sick Leave Balance: <b>'.$sbalance.'</b><br>';
			echo '<strong></strong> Total Leave Balances: <b>'.$total_leave_balance.'</b><br>';
			echo '<strong></strong> MC#6 Balance: <b>'.$this->Leave_card->get_mc_balance($employee_id, $year).'</b><br><br>';
			
			?>
			<br />View Leave Card <img src="<?php echo base_url();?>images/classevent_main.png" title="History" onClick="openBrWindow('<?php echo base_url();?>index.php/Leave_Manage/leave_card/<?php echo $employee_id;?>','','scrollbars=yes,width=900,height=600')" style="cursor: pointer;"/><br />
			<?php
		}
			
		else
		{
			echo '<center><strong>Enter a valid Employee ID</strong></center><br>';
			
			$value = 0;
			
			if($this->session->userdata('employees') && is_array($this->session->userdata('employees')))
			{
				$value = 1;
			}
			?>
			<input name="taken" type="hidden" id="no_record" value="<?php echo $value;?>" />
			<?php
		}
		
		$dates = array_unique($dates);
		
		$date_process = array();
		
		$count_leave = 0;
		
		$invalid = '';
		
		foreach ($dates as $date)
		{
			
			if (substr($date, 1, 1) == '-' or substr($date, 2, 1) == '-') 
			{
				list($day1, $day2) = split('[-.-]', $date);
				
				$dash_dates = $this->Helps->get_days_in_between($year.'-'.$month.'-'.$day1, 
															 $year.'-'.$month.'-'.$day2);
			
				foreach ($dash_dates as $dash_date)
				{
					list($year45, $month45, $day45) = split('[-.-]', $dash_date);
					
					$is_sat_sun = $this->Helps->is_sat_sun($month45, $day45, $year45);
					
					$is_holiday = $this->Holiday->is_holiday($dash_date);
					
					
					//if maternity add 1 day
					if ( ($is_sat_sun == 'Saturday' or $is_sat_sun == 'Sunday' or $is_holiday == TRUE) && $leave_type_id == 5)
					{
						$count_leave += 1;
					}
					
					if ($is_sat_sun == 'Saturday' or $is_sat_sun == 'Sunday' or $is_holiday == TRUE)
					{
					
					}
					else
					{
						$date_process[] = $dash_date;
						$count_leave += 1;
						
					}
					
					
				}
			}
			else
			{
				if (strlen($date) == 1 or strlen($date) == 2)
				{
					if (is_numeric($date))
					{
						$is_sat_sun = $this->Helps->is_sat_sun($month, $date, $year);
					
						$is_holiday = $this->Holiday->is_holiday($year.'-'.$month.'-'.$date);
						
						if ($is_sat_sun == 'Saturday' or $is_sat_sun == 'Sunday' or $is_holiday == TRUE)
						{
						
						}
						else
						{
							$date_process[] = $year.'-'.$month.'-'.$date;
							$count_leave += 1;
						}
						
					}
					
				}
				
				if (strlen($date) == 3)
				{
					$am_pm =  strtolower(substr($date, -2));
					$day = substr($date, 0, 1);
					
					if (is_numeric($day) && ($am_pm == 'am' or $am_pm == 'pm') )
					{
						$is_sat_sun = $this->Helps->is_sat_sun($month, $day, $year);
					
						$is_holiday = $this->Holiday->is_holiday($year.'-'.$month.'-'.$day);
						
						if ($is_sat_sun == 'Saturday' or $is_sat_sun == 'Sunday' or $is_holiday == TRUE)
						{
						
						}
						else
						{
							$date_process[] = $year.'-'.$month.'-'.$day.' '.$am_pm;
							$count_leave += 0.5;
						}
						
					}
					
				}
				
				if (strlen($date) == 4)
				{
					$am_pm =  strtolower(substr($date, -2));
					$day = substr($date, 0, 2);
					
					if (is_numeric($day) && ($am_pm == 'am' or $am_pm == 'pm') )
					{
						$is_sat_sun = $this->Helps->is_sat_sun($month, $day, $year);
					
						$is_holiday = $this->Holiday->is_holiday($year.'-'.$month.'-'.$day);
						
						if ($is_sat_sun == 'Saturday' or $is_sat_sun == 'Sunday' or $is_holiday == TRUE)
						{
						
						}
						else
						{
							$date_process[] = $year.'-'.$month.'-'.$day.' '.$am_pm;
							$count_leave += 0.5;
						}
						
						
					}
				}
			}	
			
		}
		
		$dates = array_unique($date_process);
		
		
		$office_id = $this->Employee->get_single_field('office_id', $employee_id);
		$notes = $this->Leave_type->get_leave_name($leave_type_id);
		
		
		if (isset($days) && $days != 0 && $days != '')
		{
			$count_leave = $days;
		}
		
		//print_r($dates);
		
		
		//if multiple months===========================================================================================================
		//=============================================================================================================================
		if ($multiple !='' && $multiple5 !='')
		{
			//echo 'ok';
			$more_dates = $this->Helps->get_days_in_between($year.'-'.$month.'-'.$multiple, 
															 $year5.'-'.$month5.'-'.$multiple5);
															 
			
			$count_leave = 0;
			
			$date_process = '';
			
			foreach ($more_dates as $more_date)
			{
				list($year, $month, $day) = split('[-.-]', $more_date);
				
				$is_sat_sun = $this->Helps->is_sat_sun($month, $day, $year);
				
				$is_holiday = $this->Holiday->is_holiday($more_date);
				
				//if maternity add 1 day
				if ( ($is_sat_sun == 'Saturday' or $is_sat_sun == 'Sunday' or $is_holiday == TRUE) && $leave_type_id == 5)
				{
					$count_leave += 1;
				}
				
				if ($is_sat_sun == 'Saturday' or $is_sat_sun == 'Sunday' or $is_holiday == TRUE)
				{
				
				}
				else
				{
					$date_process[] = $more_date;
					$count_leave += 1;
				}
				
				
			}
															 
			//do this if to prevent error if the dates selected is sat or sun or holiday
			if ($count_leave != 0)
			{
				$dates = array_unique($date_process);
			}
														 
		}
		
		echo $count_leave.' '.$notes.'<br><br>';
		
		
		//If date is sat sun or holiday
		if ($count_leave == 0)
		{
			echo '<input name="sat_sun" type="hidden" id="sat_sun" value="1" />';	
		}
		else
		{
			echo '<input name="sat_sun" type="hidden" id="sat_sun" value="0" />';	
		}
		
		//foreach($date_process as $date_proces)
		//{
			//echo $date_proces.'<br>';
		//}
		
		if (count($dates)>0)
		{
			$max_date = max($dates);
			$max_date = explode(" ", $max_date);
			$max_date = $max_date[0];
			
			$min_date = min($dates);
			$min_date = explode(" ", $min_date);
			$min_date = $min_date[0];
		}
		
		
		if ($leave_type_id == 9)
		{
			$max_date 	= date('Y-m-d');
			$min_date 	= date('Y-m-d');
		}
		
		//$_SESSION['type_user'] = 5;
		
		//echo $_SESSION['type_user'];
		
		//$process = 1;
		
		if ($process)
		{
			echo 'process na';
			//exit;
			//to do:
			//if the application is from outside of hrm()
			//put the apps in ats_apps table then exit
			
			//exit;
			
			//$leave_apps_stat = 1;
			
			if ($this->session->userdata('type_user') == 5 && $mode != 'approved_leave')
			{
				$table  = TABLEPREF.'leave_apps';
				
				$info = array('employee_id' 	=> $employee_id,
							  'details'			=> $multiple,
							  'month'			=> $month,
							  'year'			=> $year,
							  'leave_type_id'	=> $leave_type_id,
							  'special_priv_id'	=> $special_priv_id,
							  'days'			=> $count_leave,
							  'mone'			=> $mone,
							  'date_encode'		=> date('Y-m-d'),
							  'username'		=> $this->session->userdata('username')
						);
						
				$leave_apps_id = $this->Leave_apps->insert_leave_apps($info);
				echo 'Leave application was set for approval.<br>';
				echo 'You may print your leave application now';
				?>
				<img src="images/manpage_manpage.png" title="History" onClick="openBrWindow('leave-apps.php?leave_apps_id=<?php echo $leave_apps_id;?>','','scrollbars=yes,width=900,height=600')" style="cursor: pointer;"/>
				<?php
				exit;
			}
			
			//INSERT TO MANUAL LOG
					$info = array(
								"employee_id" 			=> $employee_id, 
								"office_id" 			=> $office_id,
								"cover_if_ob_or_leave" 	=> $min_date,
								"cover_if_ob_or_leave2" => $max_date,
								"multiple"				=> 0,
								"log_type" 				=> 2,
								"notes" 				=> $notes
					);
					
			//get the ID of inserted values
			$manual_log_id = $this->Manual_log->insert_manual_log($info);
			
			//exit;
			//==========ADD TO LEAVE CARD============================
						
			$action_taken = $this->Helps->get_month_name($month).' '.$multiple.', '.$year;
			
			//If settings is not chrnological order in leave
			//$leave_order_chrono = $this->Settings->get_selected_field('leave_order_chrono');
			
			//if ($leave_order_chrono == 0)
			//{
				//$action_taken = $Settings->get_month_name(date('F')).' '.date('d').', '.date('Y');
			//}
			
			//if multiple months===========================================================================================================
			//=============================================================================================================================
			if ($multiple !='' && $multiple5 !='')
			{
				//$action_taken = $Settings->get_month_name($_GET['month5']).' '.$_GET['multiple5'].', '.$_GET['year5'];
				
				
				$action_taken = $this->Helps->get_month_name($month).' '.$multiple.', '.$year. '-' .
								$this->Helps->get_month_name($month5).' '.$multiple5.', '.$year5;
				
				$max_date = $year5.'-'.$month5.'-'.$multiple5;
			}
			
			//if monetization
			if ($leave_type_id == 9)
			{
				$action_taken = date('F d, Y');
			}
			
			//VL
			if ($leave_type_id == 1)
			{
				$info = array(
							"employee_id"		=> $employee_id,
							"particulars"		=> $count_leave.' VL',
							'v_abs' 			=> $count_leave, 
							"action_take" 		=> $action_taken,
							"date"				=> $max_date,
							"leave_type_id" 	=> $leave_type_id,
							"special_priv_id"	=> 0,
							"manual_log_id"		=> $manual_log_id	
							);
				$this->Leave_card->add_leave_card($info);
				
				//$this->Leave_card->add_leave($employee_id, $count_leave.' VL', 'v_abs', $count_leave, 
							//$action_taken, $max_date, $leave_type_id, 0, $manual_log_id);
			}
			//Sick leave
			if ($leave_type_id == 2)
			{
				$info = array(
							"employee_id"		=> $employee_id,
							"particulars"		=> $count_leave.' SL',
							's_abs' 			=> $count_leave, 
							"action_take" 		=> $action_taken,
							"date"				=> $max_date,
							"leave_type_id" 	=> $leave_type_id,
							"special_priv_id"	=> 0,
							"manual_log_id"		=> $manual_log_id	
							);
				$this->Leave_card->add_leave_card($info);
				
				//$this->Leave_card->add_leave($employee_id, $count_leave.' SL', 's_abs', $count_leave, 
							//$action_taken, $max_date, $leave_type_id, 0, $manual_log_id);
			}
			
			//Special Privilege Leave(MC#6)
			if ($leave_type_id == 3)
			{
				if($special_priv_id == 1)
				{
					$special_priv = 'Personal Milestone';
				}
				if($special_priv_id == 2)
				{
					$special_priv = 'Parental Obligation';
				}
				if($special_priv_id == 3)
				{
					$special_priv = 'Filial Obligation';
				}
				if($special_priv_id == 4)
				{
					$special_priv = 'Domestic Emergency';
				}
				if($special_priv_id == 5)
				{
					$special_priv = 'Personal Transaction';
				}
				
				$info = array(
							"employee_id"		=> $employee_id,
							"particulars"		=> $count_leave.' '.$special_priv,
							'v_abs' 			=> $count_leave, 
							"action_take" 		=> $action_taken,
							"date"				=> $max_date,
							"leave_type_id" 	=> $leave_type_id,
							"special_priv_id"	=> $special_priv_id,
							"manual_log_id"		=> $manual_log_id	
							);
				$this->Leave_card->add_leave_card($info);
				
				//$this->Leave_card->add_leave($employee_id, $count_leave.' '.$special_priv, 'v_abs', $count_leave, 
							//$action_taken, $max_date, $leave_type_id, $special_priv_id, $manual_log_id);
				
			}
			
			//paternity leave
			if ($leave_type_id == 4)
			{
				$info = array(
							"employee_id"		=> $employee_id,
							"particulars"		=> $count_leave.' Paternity Leave',
							's_abs' 			=> $count_leave, 
							"action_take" 		=> $action_taken,
							"date"				=> $max_date,
							"leave_type_id" 	=> $leave_type_id,
							"special_priv_id"	=> 0,
							"manual_log_id"		=> $manual_log_id	
							);
				$this->Leave_card->add_leave_card($info);
				
				//$this->Leave_card->add_leave($employee_id, $count_leave.' Paternity Leave', 's_abs', $count_leave, 
							//$action_taken, $max_date, $leave_type_id, 0, $manual_log_id);
							
			}
			
			//maternity leave
			if ($leave_type_id == 5)
			{
				$info = array(
							"employee_id"		=> $employee_id,
							"particulars"		=> $count_leave.' Maternity Leave',
							's_abs' 			=> $count_leave, 
							"action_take" 		=> $action_taken,
							"date"				=> $max_date,
							"leave_type_id" 	=> $leave_type_id,
							"special_priv_id"	=> 0,
							"manual_log_id"		=> $manual_log_id	
							);
				$this->Leave_card->add_leave_card($info);
				
				//$this->Leave_card->add_leave($employee_id, $count_leave.' Maternity Leave', 's_abs', $count_leave, 
							//$action_taken, $max_date, $leave_type_id, 0, $manual_log_id);
			}
			
			//solo parent leave
			if ($leave_type_id == 6)
			{
				$info = array(
							"employee_id"		=> $employee_id,
							"particulars"		=> $count_leave.' Solo Parent',
							's_abs' 			=> $count_leave, 
							"action_take" 		=> $action_taken,
							"date"				=> $max_date,
							"leave_type_id" 	=> $leave_type_id,
							"special_priv_id"	=> 0,
							"manual_log_id"		=> $manual_log_id	
							);
				$this->Leave_card->add_leave_card($info);
				//$this->Leave_card->add_leave($employee_id, $count_leave.' Solo Parent', 's_abs', $count_leave, 
							//$action_taken, $max_date, $leave_type_id, 0, $manual_log_id);
			}
			
			//forced leave
			if ($leave_type_id == 7)
			{
				$info = array(
							"employee_id"		=> $employee_id,
							"particulars"		=> $count_leave.' Forced Leave',
							'v_abs' 			=> $count_leave, 
							"action_take" 		=> $action_taken,
							"date"				=> $max_date,
							"leave_type_id" 	=> $leave_type_id,
							"special_priv_id"	=> 0,
							"manual_log_id"		=> $manual_log_id	
							);
				$this->Leave_card->add_leave_card($info);
				//$this->Leave_card->add_leave($employee_id, $count_leave.' Forced Leave', 'v_abs', $count_leave, 
							//$action_taken, $max_date, $leave_type_id, 0, $manual_log_id);
			}
			
			//monetization leave
			if ($leave_type_id == 9)
			{
				//monetary VL
				if ($mone == 1)
				{
					$info = array(
							"employee_id"		=> $employee_id,
							"particulars"		=> $count_leave.' days Monet.',
							'v_abs' 			=> $count_leave, 
							"action_take" 		=> $action_taken,
							"date"				=> date('Y-m-d'),
							"leave_type_id" 	=> $leave_type_id,
							"special_priv_id"	=> 0,
							"manual_log_id"		=> $manual_log_id	
							);
					$this->Leave_card->add_leave_card($info);
					//$this->Leave_card->add_leave($employee_id, $count_leave.' days Monet.', 'v_abs', $count_leave, $action_taken, date('Y-m-d'), $leave_type_id, 0, $manual_log_id);
				}
				//monetary SL
				if ($mone == 2)
				{
					$info = array(
							"employee_id"		=> $employee_id,
							"particulars"		=> $count_leave.' days Monet.',
							's_abs' 			=> $count_leave, 
							"action_take" 		=> $action_taken,
							"date"				=> date('Y-m-d'),
							"leave_type_id" 	=> $leave_type_id,
							"special_priv_id"	=> 0,
							"manual_log_id"		=> $manual_log_id	
							);
					$this->Leave_card->add_leave_card($info);
					//$this->Leave_card->add_leave($employee_id, $count_leave.' days Monet.', 's_abs', $count_leave, $action_taken, date('Y-m-d'), $leave_type_id, 0, $manual_log_id);
				}
				//exit the script
				?><script>show_leave_card($('#employee_id').val())</script><?php
				exit;
			}
			
			foreach ($dates as $date)
			{
				//if half day
				if (strlen($date) > 10)
				{	
					//get am or pm
					$am_pm =  strtolower(substr($date, -2));
					
					$day = explode(" ", $date);
					
					$day = $day[0];
					
					
					if($am_pm == 'am')
					{
						$field = 'am_login';
						$field2 = 'am_logout';
					}
					
					if($am_pm=='pm')
					{
						$field = 'pm_login';
						$field2 = 'pm_logout';
					}
					
					
					//Select if log_date exist in dtr
					$is_log_date_exists = $this->Dtr->is_log_date_exists($employee_id, $day);
						
					
					//update
					if( $is_log_date_exists == TRUE)
					{
						
						
						
						$info = array(
									$field 			=> 'Leave',
									$field2 		=> 'Leave',
									'leave_type_id' => $leave_type_id,
									'leave_half_day'=> 1
									);
						
						
						$this->Dtr->edit_dtr($data, $employee_id, $day);
					}
					
					
					else //insert
					{
						$info = array(
								$field 			=> 'Leave', 
								$field2 		=> 'Leave',
								"log_date" 		=> $day,
								"employee_id" 	=> $employee_id,
								"office_id" 	=> $office_id,
								'leave_type_id' => $leave_type_id,
								'leave_half_day'=> 1,
								'manual_log_id' => $manual_log_id
								);
				
						$this->Dtr->insert_dtr($info);
						
						//use for use logs
						$this->Logs->insert_logs(
												$this->session->userdata('username'), 
												$this->session->userdata('office_id'), 
												$log_type.' EVENT', 
												'', 
												$employee_id
												);
					}
						
				}
				
				else //whole day
				{
					//Select if log_date exist in dtr
					$is_log_date_exists = $this->Dtr->is_log_date_exists($employee_id, $date);
					//delete the data if the date and employee id exists
					if($is_log_date_exists == TRUE)
					{
						
						//delete the data
						$this->Dtr->delete_dtr($employee_id, $date);
						
						//insert the data to dtr if the type of leave is not
						//commutation or monetization
						if($leave_type_id < 9  ||  $leave_type_id == 11 ||  $leave_type_id == 18 ||  $leave_type_id == 19)
						{
							$info = array(
									"employee_id" 	=> $employee_id, 
									"log_date" 		=> $date,
									"manual_log_id" => $manual_log_id,
									"am_login" 		=> 'Leave',
									"am_logout" 	=> 'Leave',
									"pm_login" 		=> 'Leave',
									"pm_logout" 	=> 'Leave',
									"office_id" 	=> $office_id,
									'leave_type_id' => $leave_type_id
									);
							
							$this->Dtr->insert_dtr($info);
						}
						
					}
					
					
					//if no result found
					if($is_log_date_exists == FALSE)
					{
						//i will decide what data will be pass to dtr table. Is it OB or leave or the time itself
						//insert the data to dtr if the type of leave is not
						//commutation or monetization
						if($leave_type_id < 9 ||  $leave_type_id == 11 ||  $leave_type_id == 18 ||  $leave_type_id == 19)
						{
							
							$info = array(
									"employee_id" 	=> $employee_id, 
									"log_date" 		=> $date,
									"manual_log_id" => $manual_log_id,
									"am_login" 		=> 'Leave',
									"am_logout" 	=> 'Leave',
									"pm_login" 		=> 'Leave',
									"pm_logout" 	=> 'Leave',
									"office_id" 	=> $office_id,
									'leave_type_id' => $leave_type_id
									);
							
							$this->Dtr->insert_dtr($info);
							
						}
		
					}
					
				}
			}
			
			?>
			<script>
			$('#multiple').val("");
			$('#leave_card').load("<?php echo base_url().('index.php/Ajax/show_leave_card/'); ?>" + $('#employee_id').val());
			</script>
			<?php
		}
	}
	
	// --------------------------------------------------------------------
	
	function is_employee_id_exists($employee_id)
	{	
		$is_employee_id_exists = $this->Employee->is_employee_id_exists($employee_id);
		
		if($is_employee_id_exists == FALSE)
		{
			echo '<strong><font color=red>This ID is available.<font></strong>';
		}
		
		else
		{
			echo '<strong>'.$employee_id.'<font color=red> is taken.<font></strong>';
		}
	}
	
	// --------------------------------------------------------------------
	
	function manual_log_employees($office_id)
	{
		$data = array();
		
		$this->Employee->fields = array(
										'fname',
										'mname',
										'lname',
										'id',
										'office_id',
										'status'
										);
		$data['rows'] 	= $this->Employee->get_employee_list( $office_id );
		$total_results 	= $this->Employee->num_rows;
		
		$this->load->view('ajax/manual_log_employees', $data);
		
	}
	
	// --------------------------------------------------------------------
	
	function process_manual_log($start_ob = 0, $overwrite_logs = 0, $date1 = '', $date2 = '',
								$time1, $time2, $time3, $time4 )
	{
		
		
		$dates =  $this->Helps->get_days_in_between($date1, $date2);
		
		if($date1 == $date2)
		{
			$dates = array($date1);
		}
		
		$employees = $this->session->userdata('employees');
		
		foreach($employees as $employee_id)
		{
			$i = 0;
			
			foreach($dates as $date)
			{
				
				$office_id = $this->Employee->get_single_field('office_id', $employee_id);
				
				$shift_type = $this->Employee->get_single_field('shift_type', $employee_id);
				
				//AM LOGIN
				if ($time1 !="0:0")
				{
					
					if ($time1 == 'o:b')
					{
						$time1 = 'Official Business';
					}
					
					//Do nothing if first day manual log and start in PM
					if ($start_ob == 1 && $i == 0)
					{
					
					}
					else
					{
						
						$this->Dtr->manual_log($office_id, $employee_id, $time1, $date, 1, $shift_type, $overwrite_logs);
					}
					
				}
				
				//AM LOGOUT
				if ($time2 !="0:0")
				{
					
					if ($time2 == 'o:b')
					{
						$time2 = 'Official Business';
					}
					
					//Do nothing if first day manual log and start in PM
					if ($start_ob == 1 && $i == 0)
					{
					
					}
					else
					{
						$this->Dtr->manual_log($office_id, $employee_id, $time2, $date, 2, $shift_type, $overwrite_logs);
					}
					//echo 'ok';
				}
				
				//PM LOGIN
				if ($time3 !="0:0"){
					
					if ($time3 == 'o:b')
					{
						$time3 = 'Official Business';
					}
					else
					{
						if ($time3 < '13:00') 
						{
							$time3 = strtotime($time3.' PM');
							$time3 = date('H:i', $time3);
						}
					}
					$this->Dtr->manual_log($office_id, $employee_id, $time3, $date, 3, $shift_type, $overwrite_logs);
				}
				
				//PM LOGOUT
				if ($time4 !="0:0"){
					if ($time4 == 'o:b')
					{
						$time4 = 'Official Business';
					}
					
					else
					{
						if ($time4 < '13:00') 
						{
							$time4 = strtotime($time4.' PM');
							$time4 = date('H:i', $time4);
						}
					}
					$this->Dtr->manual_log($office_id, $employee_id, $time4, $date, 4, $shift_type, $overwrite_logs);
				}
				
				$i ++;
			}
		}
		
		//Unset the session
		$employees = array();
		$this->session->set_userdata($employees);
		
		echo 'Done!';
		
	}
	
	// --------------------------------------------------------------------
	
	function set_selected($employee_id = '', $stat = 0)
	{
		
		//Add
		if($stat == 1)
		{
			$employees = $this->session->userdata('employees');
			
			if ($employees == FALSE)
			{
				$employees = array();
			}
			
			//Add new employees if not exists
			if ($employee_id != 0)
			{
				array_push($employees, $employee_id);
			}
			
			
			$employees = array_unique($employees);
			
			$this->session->set_userdata('employees', $employees);
		}
		else // Remove
		{
			
			//search empoyee id in array and delete
			$employees = $this->session->userdata('employees');
			
			$key = array_search($employee_id, $employees); 
			
			//Unset
			unset($employees[$key]);
			
			$this->session->set_userdata('employees', $employees);
		}
		
		$employees = $this->session->userdata('employees');
		
		foreach($employees as $employee_id)
		{
			$name = $this->Employee->get_employee_info($employee_id, 'lname, fname');
			echo $name['lname'].', '.$name['fname'].'<br>';
		}
	}
	
	// --------------------------------------------------------------------
	
	function show_employees($office_id = '', $employment = '')
	{
		$data = array();
		
		if ($office_id != '')
		{
			//If employment status not equal to all
			if ($employment != 'all')
			{
				$this->Employee->employment_type = $employment;
				
			}
			$this->Employee->fields = array(
											'id',
											'lname',
											'fname',
											'mname',
											'office_id',
											'status'
											);
			
			$data['rows'] = $this->Employee->get_employee_list($office_id);
			
			$this->load->view('ajax/show_employees', $data);
		}

	}
	
	// --------------------------------------------------------------------
	
	function show_leave_card($employee_id = '')
	{
		$data 			= array();
		$data['rows'] 	= $this->Manual_log->office_manual_log($employee_id, 2, $include_hidden = 0);
		
		$this->load->view('ajax/show_leave_card', $data);
		
	}
	
	// --------------------------------------------------------------------
	
	function show_leave_forwarded($office_id = '')
	{
		$data 			= array();
		$this->Employee->fields = array(
                                'id',
                                'employee_id',
                                'office_id',
                                'lname',
                                'fname',
                                'mname'
                                );
        
		$data['rows'] = $this->Employee->get_employee_list($this->session->userdata('office_id'), '');
		
		if ($office_id != '')
		{
			$data['rows'] = $this->Employee->get_employee_list($office_id, '');
		}
		
		$this->load->view('ajax/show_leave_forwarded', $data);
	}
	
	// --------------------------------------------------------------------
	
	function upload_data_server($date1, $date2, $download_zip = false)
	{
		//Create dtr by range of date
		$logs = $this->Dtr->get_dtr_range($date1, $date2);
		
		//Create an xml file(DTR)
		$xml_output  = "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
		$xml_output .= "<root>\n";
	
		foreach($logs as $log)
		{
			$xml_output .= "\t<dtr>\n";
			$xml_output .= "\t\t<employee_id>" . $log['employee_id'] . "</employee_id>\n";
			$xml_output .= "\t\t<log_date>" . $log['log_date'] . "</log_date>\n";
			$xml_output .= "\t\t<am_login>" . $log['am_login'] . "</am_login>\n";
			$xml_output .= "\t\t<am_logout>" . $log['am_logout'] . "</am_logout>\n";
			$xml_output .= "\t\t<pm_login>" . $log['pm_login'] . "</pm_login>\n";
			$xml_output .= "\t\t<pm_logout>" . $log['pm_logout'] . "</pm_logout>\n";
			$xml_output .= "\t\t<ot_login>" . $log['ot_login'] . "</ot_login>\n";
			$xml_output .= "\t\t<ot_logout>" . $log['ot_logout'] . "</ot_logout>\n";
			$xml_output .= "\t\t<leave_type_id>" . $log['leave_type_id'] . "</leave_type_id>\n";
			$xml_output .= "\t\t<leave_half_day>" . $log['leave_half_day'] . "</leave_half_day>\n";
			$xml_output .= "\t\t<office_id>" . $log['office_id'] . "</office_id>\n";
			$xml_output .= "\t\t<shift_id>" . $log['shift_id'] . "</shift_id>\n";
			$xml_output .= "\t</dtr>\n";
		}
		
		$xml_output  .=  "</root>"; 
			
		$filenamepath =   "logs/dtr.xml";
		 
		$fp = fopen($filenamepath,'w');
		
		$write = fwrite($fp,$xml_output); 
		
		
		//Employee
		$new_employees = $this->Employee->get_new_employee();
		$xml_output  = "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
		$xml_output .= "<root>\n";
	
		foreach($new_employees as $new_employee)
		{
			$xml_output .= "\t<employee>\n";
			$xml_output .= "\t\t<id>" . $new_employee['id'] . "</id>\n";
			$xml_output .= "\t\t<salut>" . $new_employee['salut'] . "</salut>\n";
			$xml_output .= "\t\t<fname>" . $new_employee['fname'] . "</fname>\n";
			$xml_output .= "\t\t<mname>" . $new_employee['mname'] . "</mname>\n";
			$xml_output .= "\t\t<lname>" . $new_employee['lname'] . "</lname>\n";
			$xml_output .= "\t\t<salary_grade>" . $new_employee['salary_grade'] . "</salary_grade>\n";
			$xml_output .= "\t\t<step>" . $new_employee['step'] . "</step>\n";
			$xml_output .= "\t\t<monthly_salary>" . $new_employee['monthly_salary'] . "</monthly_salary>\n";
			$xml_output .= "\t\t<permanent>" . $new_employee['permanent'] . "</permanent>\n";
			$xml_output .= "\t\t<office_id>" . $new_employee['office_id'] . "</office_id>\n";
			$xml_output .= "\t\t<detailed_office_id>" . $new_employee['detailed_office_id'] . "</detailed_office_id>\n";
			$xml_output .= "\t\t<pics>" . $new_employee['pics'] . "</pics>\n";
			$xml_output .= "\t\t<status>" . $new_employee['status'] . "</status>\n";
			$xml_output .= "\t\t<shift_id>" . $new_employee['shift_id'] . "</shift_id>\n";
			$xml_output .= "\t\t<shift_type>" . $new_employee['shift_type'] . "</shift_type>\n";
			$xml_output .= "\t</employee>\n";
		}
		
		$xml_output  .=  "</root>"; 
			
		$filenamepath =   "logs/employee.xml";
		 
		$fp = fopen($filenamepath,'w');
		
		$write = fwrite($fp,$xml_output);
		
		//Create user logs by range of date
		$user_logs = $this->Logs->get_logs();
		
		//Create an xml file(user_logs)
		$xml_output  = "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
		$xml_output .= "<root>\n";
	
		foreach($user_logs as $log)
		{
			$xml_output .= "\t<logs>\n";
			$xml_output .= "\t\t<username>" . $log['username'] . "</username>\n";
			$xml_output .= "\t\t<office_id>" . $log['office_id'] . "</office_id>\n";
			$xml_output .= "\t\t<command>" . $log['command'] . "</command>\n";
			$xml_output .= "\t\t<details>" . $log['details'] . "</details>\n";
			$xml_output .= "\t\t<employee_id_affected>" . $log['employee_id_affected'] . "</employee_id_affected>\n";
			$xml_output .= "\t\t<date>" . $log['date'] . "</date>\n";
			$xml_output .= "\t</logs>\n";
		}
		
		$xml_output  .=  "</root>"; 
			
		$filenamepath =   "logs/logs.xml";
		 
		$fp = fopen($filenamepath,'w');
		
		$write = fwrite($fp,$xml_output);
		
		
		//office pass
		$passes = $this->Office_pass->get_office_pass_list($date1, $date2);
		
		//Create an xml file()
		$xml_output  = "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
		$xml_output .= "<root>\n";
	
		foreach($passes as $passe)
		{
			$xml_output .= "\t<office_pass>\n";
			$xml_output .= "\t\t<employee_id>" . $passe['employee_id'] . "</employee_id>\n";
			$xml_output .= "\t\t<office_id>" . $passe['office_id'] . "</office_id>\n";
			$xml_output .= "\t\t<date>" . $passe['date'] . "</date>\n";
			$xml_output .= "\t\t<time_out>" . $passe['time_out'] . "</time_out>\n";
			$xml_output .= "\t\t<time_in>" . $passe['time_in'] . "</time_in>\n";
			$xml_output .= "\t\t<seconds>" . $passe['seconds'] . "</seconds>\n";
			$xml_output .= "\t\t<date_acquired>" . $passe['date_acquired'] . "</date_acquired>\n";
			$xml_output .= "\t</office_pass>\n";
		}
		
		$xml_output  .=  "</root>"; 
			
		$filenamepath =   "logs/office_pass.xml";
		 
		$fp = fopen($filenamepath,'w');
		
		$write = fwrite($fp,$xml_output);
		
		//tardiness
		$tardiness = $this->Tardiness->get_tardiness($date1, $date2);
		
		//Create an xml file()
		$xml_output  = "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
		$xml_output .= "<root>\n";
	
		foreach($tardiness as $tardi)
		{
			$xml_output .= "\t<tardiness>\n";
			$xml_output .= "\t\t<employee_id>" . $tardi['employee_id'] . "</employee_id>\n";
			$xml_output .= "\t\t<office_id>" . $tardi['office_id'] . "</office_id>\n";
			$xml_output .= "\t\t<late>" . $tardi['late'] . "</late>\n";
			$xml_output .= "\t\t<undertime>" . $tardi['undertime'] . "</undertime>\n";
			$xml_output .= "\t\t<number_tardiness>" . $tardi['number_tardiness'] . "</number_tardiness>\n";
			$xml_output .= "\t\t<log_type>" . $tardi['log_type'] . "</log_type>\n";
			$xml_output .= "\t\t<date>" . $tardi['date'] . "</date>\n";
			$xml_output .= "\t\t<late_seconds>" . $tardi['late_seconds'] . "</late_seconds>\n";
			$xml_output .= "\t\t<undertime_seconds>" . $tardi['undertime_seconds'] . "</undertime_seconds>\n";
			$xml_output .= "\t\t<seconds>" . $tardi['seconds'] . "</seconds>\n";
			$xml_output .= "\t</tardiness>\n";
		}
		
		$xml_output  .=  "</root>"; 
			
		$filenamepath =   "logs/tardiness.xml";
		 
		$fp = fopen($filenamepath,'w');
		
		$write = fwrite($fp,$xml_output);
		
		$this->Zipper->addFiles(array(
			"logs/dtr.xml",
			"logs/logs.xml", 
			"logs/employee.xml",
			"logs/office_pass.xml",
			"logs/tardiness.xml"
			)
			); 
		
		$this->Zipper->output("logs/".$this->session->userdata('office_id').'-'.date('Y-m-d').".zip");
		
		
		if ($download_zip == 'true')
		{
			echo anchor(base_url().'logs/'.$this->session->userdata('office_id').'-'.date('Y-m-d').".zip", 'Download File');
			$this->Logs->insert_logs($this->session->userdata('username'), 
									 $this->session->userdata('office_id'), 
									 'DOWNLOAD ZIP FILE', 'Download zip file from computer', 
									 ''
									 );
			exit;
		}
		
	}
	
	// --------------------------------------------------------------------
	
	function view_name($employee_id, $lname = '', $fname = '')
	{
		if(!is_numeric($employee_id))
		{
			$lname = $employee_id;
			$names = $this->Employee->get_employee_list('', 
													   '', 
													   $per_page = "", 
													   $off_set = "", 
													   $lname, 
													   $fields = array());
													   
			foreach ($names as $name)
			{
				$id = $name['id'];
				echo '<a href="#" onclick="change_value('."'".$id."'".')">'.$name['lname'].' '.$name['fname'].', '.$name['mname'].'</a><br>';
			}
			
			?>
			<input name="valid_id" type="hidden" id="valid_id" value="0" />
			<?php
			
		}
		else
		{	
			$this->Employee->fields = array('pics', 'fname', 'mname', 'lname');
			$name = $this->Employee->get_employee_info($employee_id);
			
			if(count($name) != 0)
			{
				
				echo '<img src="'.base_url().'pics/'.$name['pics'].'" id="employee_image"/>'.
				 '<br><strong>'.$name['fname'].' '.$name['mname'].' '.$name['lname'].'</strong>';
				 
				 ?>
				<input name="valid_id" type="hidden" id="valid_id" value="1" />
				<?php
			}
			
			else
			{	
				$pics = 'not_available.jpg';
				echo '<img src="'.base_url().'pics/'.$pics.'" width="120" height="120" id="employee_image"/><br>
					 <font color="#FFFFFF">.</font>';
					 
				?>
				<input name="valid_id" type="hidden" id="valid_id" value="0" />
				<?php
			}
			
			
		}										   
			
	}
	
}	