<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
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
 * iHRMIS Leave Class
 *
 * This class use for processing leave applications.
 *
 * @package		iHRMIS
 * @subpackage	Libraries
 * @category	Leave
 * @author		Manolito Isles
 * @link		http://charliesoft.net/hrmis/user_guide/libraries/leave.html
 */
class Leave {

   	public $employee_id 		= '';
   	public $multiple 			= '';
	public $month 				= '';
	public $year  				= '';
	public $leave_type_id  		= '';
	public $month5  			= '';
	public $year5  				= '';
	public $multiple5  			= '';
	public $special_priv_id  	= '';
	public $days  				= '';
	public $mone  				= '';
	public $process  			= 0;
	
	public $date_process 		= array();
	public $count_leave 		= 0;
	public $invalid 			= '';
	
	public $dates				= array();
	public $action_taken		= '';
	public $max_date			= '';
	
	public $allow_sat_sun		= 0; // allow leave for saturday or sunday
								 // if set to 1 leave will allow the saturday and sunday
   
    // ------------------------------------------------------------------------
   
    function __construct($params = array())
    {
        if (count($params) > 0)
		{
			$this->initialize($params);
		}
    }
	
	// ------------------------------------------------------------------------
	
	/**
	 * Initialize Preferences
	 *
	 * @access	public
	 * @param	array	initialization parameters
	 * @return	void
	 */
	function initialize($params = array())
	{
		if (count($params) > 0)
		{
			foreach ($params as $key => $val)
			{
				if (isset($this->$key))
				{
					$this->$key = $val;
				}
			}
		}
		
		// Set to blank if the value is equal to zero
				
		if ($this->multiple == 0)
		{
			$this->multiple = '';
		}
		if ($this->multiple5 == 0)
		{
			$this->multiple5 = '';
		}
		if ($this->days == 0)
		{
			$this->days = '';
		}
		if ($this->mone == 0)
		{
			$this->mone = '';
		}
	}
	
	// ------------------------------------------------------------------------
	
	function is_employee($name = '')
	{
		$CI =& get_instance();
		
		if(count($name) != 0)
		{
			// Check what type of user is logged
			// If leave manager
			$CI->load->library('session');
			
			if ( $CI->session->userdata('user_type') == 5)
  			{
				// If the office is not equal to office id of user logged
				if ($CI->session->userdata('office_id') != $name['office_id'])
				{
					echo '<font color="red">You are not allowed to view this records!</font>';
					return ;
				}
				
			}
			
			$pics = $name['pics'];
			
			if($name['pics']=="")
			{
				$pics = 'not_available.jpg';
			}
			
			if (file_exists('pics/'.$pics))
			{
				list($width, $height) = getimagesize('pics/'.$pics);
			}
			else if (!file_exists('pics/'.$pics))
			{
				$pics = 'not_available.jpg';
				list($width, $height) = getimagesize('pics/'.$pics);
			}
			
			$w = $width/2;
			$h = $height/2;
			
			//echo base_url().'pics/'.$name['pics'];
			
			echo '<center><img src="'.base_url().'pics/'.$pics.'" width="'.$w.'" height="'.$h.'" /></center><br>';
			//echo '<center><strong>'.utf8_encode($name['fname'].' '.$name['mname'].' '.$name['lname']).'</strong></center><br>';
			echo '<center><strong>'.$name['fname'].' '.$name['mname'].' '.$name['lname'].'</strong></center><br>';
			echo '<input name="taken" type="hidden" id="no_record" value="1" />';
			
			
			
			//=========
			$total_leave = $CI->Leave_card->get_total_leave_credits($this->employee_id);
			
			$vbalance =  $total_leave['vacation'];
			$sbalance =  $total_leave['sick'];
			//==========
			
			$total_leave_balance = $vbalance + $sbalance;
			
			$last_earn = $CI->Leave_card->get_last_earn($this->employee_id);
			
			//echo $last_earn;
			
			if ( $last_earn != '0000-00-00')
			{
				$last_earn = date('F d, Y', strtotime($last_earn));
			}
			else
			{
				$last_earn = date('F d, Y');
			}
			
			echo '<strong></strong> Leave Balances as of <b>'.$last_earn.'</b><br>';
			echo '<strong></strong> Vacation Leave Balance: <b>'.number_format($vbalance, 3).'</b><br>';
			echo '<strong></strong> Sick Leave Balance: <b>'.number_format($sbalance, 3).'</b><br>';
			echo '<strong></strong> Total Leave Balances: <b>'.number_format($total_leave_balance, 3).'</b><br>';
			echo '<strong></strong> MC#6 Balance: <b>'.$CI->Leave_card->get_mc_balance($this->employee_id, $this->year).'</b><br><br>';
			
			?>
			<br /><a href="#" onClick="openBrWindow('<?php echo base_url();?>leave_manage/leave_card/<?php echo $this->employee_id;?>','','scrollbars=yes,width=900,height=600')" style="cursor: pointer;">View Leave Card</a><br />
			<?php
		}
			
		else
		{
			echo '<center><strong>Enter a valid Employee ID</strong></center><br>';
			
			$value = 0;
			
			if($CI->session->userdata('employees') && is_array($CI->session->userdata('employees')))
			{
				$value = 1;
			}
			?>
			<input name="taken" type="hidden" id="no_record" value="<?php echo $value;?>" />
			<?php
		}
	}
	
	// ------------------------------------------------------------------------
	
	function multiple_months()
	{
		$CI =& get_instance();
		
		$more_dates = $CI->Helps->get_days_in_between($this->year. '-'.$this->month. '-'.$this->multiple, 
													  $this->year5.'-'.$this->month5.'-'.$this->multiple5);
															 
			
		$this->count_leave = 0;
		
		$this->date_process = '';
		
		foreach ($more_dates as $more_date)
		{
			list($year, $month, $day) = explode('-', $more_date);
			
			$is_sat_sun = $CI->Helps->is_sat_sun($month, $day, $year);
			
			$is_holiday = $CI->Holiday->is_holiday($more_date);
			
			// If maternity add 1 day
			if ( ($is_sat_sun == 'Saturday' or $is_sat_sun == 'Sunday' or $is_holiday == TRUE) && $this->leave_type_id == 5)
			{
				$this->count_leave += 1;
			}
			
			if ($is_sat_sun == 'Saturday' or $is_sat_sun == 'Sunday' or $is_holiday == TRUE)
			{
				// If allow sat or sun
				if ( $this->allow_sat_sun == 1)
				{
					$this->date_process[] = $more_date;
					$this->count_leave += 1;
				}
			}
			else
			{
				$this->date_process[] = $more_date;
				$this->count_leave += 1;
			}
			
			
		}
														 
		// Do this if to prevent error if the dates selected is sat or sun or holiday
		if ($this->count_leave != 0)
		{
			$this->dates = array_unique($this->date_process);
		}
	}
	
	// ------------------------------------------------------------------------
	
	function process_dates()
	{
		$CI =& get_instance();
		
		foreach ($this->dates as $date)
		{
			// ------------------------------------------------------------------------
			
			// If the date is like 25-26
			
			if (substr($date, 1, 1) == '-' or substr($date, 2, 1) == '-') 
			{
				// Get the minimum day and the maximum day of 25-26 (25-26 is the sample days)
				
				list($day1, $day2) = explode('-', $date);
				
				$dash_dates = $CI->Helps->get_days_in_between($this->year.'-'.$this->month.'-'.$day1, 
															  $this->year.'-'.$this->month.'-'.$day2);
			
				foreach ($dash_dates as $dash_date)
				{
					//list($year45, $month45, $day45) = split('[-.-]', $dash_date);
					list($year45, $month45, $day45) = explode('-', $dash_date);
					
					$is_sat_sun = $CI->Helps->is_sat_sun($month45, $day45, $year45);
					
					$is_holiday = $CI->Holiday->is_holiday($dash_date);
					
					
					// If maternity add 1 day
					if ( ($is_sat_sun == 'Saturday' or $is_sat_sun == 'Sunday' or $is_holiday == TRUE) && $this->leave_type_id == 5)
					{
						$this->count_leave += 1;
					}
					
					if ($is_sat_sun == 'Saturday' or $is_sat_sun == 'Sunday' or $is_holiday == TRUE)
					{
						// If allow sat or sun
						if ( $this->allow_sat_sun == 1)
						{
							$this->date_process[] = $dash_date;
							$this->count_leave += 1;
						}
					}
					else
					{
						$this->date_process[] = $dash_date;
						$this->count_leave += 1;
						
					}
					
					
				}
			}
			
			// ------------------------------------------------------------------------
			
			else // If the day has a 1 or 2 character
			{
				// ------------------------------------------------------------------------
				
				if (strlen($date) == 1 or strlen($date) == 2)
				{
					
					if (is_numeric($date))
					{
						$is_sat_sun = $CI->Helps->is_sat_sun($this->month, $date, $this->year);
					
						$is_holiday = $CI->Holiday->is_holiday($this->year.'-'.$this->month.'-'.$date);
						
						if ($is_sat_sun == 'Saturday' or $is_sat_sun == 'Sunday' or $is_holiday == TRUE)
						{
							
							// If allow sat or sun
							if ( $this->allow_sat_sun == 1)
							{
								$this->date_process[] = $this->year.'-'.$this->month.'-'.$date;
								$this->count_leave += 1;
							}
						}
						else
						{
							$this->date_process[] = $this->year.'-'.$this->month.'-'.$date;
							$this->count_leave += 1;
						}
						
					}
					
				}
				
				// ------------------------------------------------------------------------
				
				// If the date is like 1am or 1pm
				
				if (strlen($date) == 3)
				{
					
					$am_pm =  strtolower(substr($date, -2));
					$day = substr($date, 0, 1);
					
					if (is_numeric($day) && ($am_pm == 'am' or $am_pm == 'pm') )
					{
						$is_sat_sun = $CI->Helps->is_sat_sun($this->month, $day, $this->year);
					
						$is_holiday = $CI->Holiday->is_holiday($this->year.'-'.$this->month.'-'.$day);
						
						if ($is_sat_sun == 'Saturday' or $is_sat_sun == 'Sunday' or $is_holiday == TRUE)
						{
							// If allow sat or sun
							if ( $this->allow_sat_sun == 1)
							{
								$this->date_process[] = $this->year.'-'.$this->month.'-'.$day.' '.$am_pm;
								$this->count_leave += 0.5;
							}
						}
						else
						{
							$this->date_process[] = $this->year.'-'.$this->month.'-'.$day.' '.$am_pm;
							$this->count_leave += 0.5;
						}
						
					}
					
				}
				
				// ------------------------------------------------------------------------
				
				// If the date is like 10am or 12pm
				
				if (strlen($date) == 4)
				{
					$am_pm =  strtolower(substr($date, -2));
					$day = substr($date, 0, 2);
					
					if (is_numeric($day) && ($am_pm == 'am' or $am_pm == 'pm') )
					{
						$is_sat_sun = $CI->Helps->is_sat_sun($this->month, $day, $this->year);
					
						$is_holiday = $CI->Holiday->is_holiday($this->year.'-'.$this->month.'-'.$day);
						
						if ($is_sat_sun == 'Saturday' or $is_sat_sun == 'Sunday' or $is_holiday == TRUE)
						{
							// If allow sat or sun
							if ( $this->allow_sat_sun == 1)
							{
								$this->date_process[] = $this->year.'-'.$this->month.'-'.$day.' '.$am_pm;
								$this->count_leave += 0.5;
							}
						}
						else
						{
							$this->date_process[] = $this->year.'-'.$this->month.'-'.$day.' '.$am_pm;
							$this->count_leave += 0.5;
						}
						
						
					}
				}
			}	
			
		}
	}
	
	// ------------------------------------------------------------------------
	
	function earn_leave($employee_id = '', $month = '', $year = '')
	{
		$CI =& get_instance();
		
		// Modified 02.28.2012
		// Since version 2.00.00
		// We'll check the leave earning from
		// First day of service to the latest
		// encoded data. We do this for Province of Laguna
		
		$month2 = $this->Leave_card->get_last_leave_filed($id);
		
		$present_date = date('Y-m-d');
		
		// If there is leave filed and the the last date
		// of filing of leave is less than the current date			
		if ($month2 != NULL and ($month2 < $present_date))
		{
			$month2 = date('Y-m-d');
		}
		
		if ($month2 == NULL)
		{
			$month2 = $data['name']['first_day_of_service'];
			
		}
		
		
		$months = $this->Helps->get_months($data['name']['first_day_of_service'], $month2);
		
		// We get here the last day of the month
		// for every month fromn 1st day of service to date
		foreach($months as $month)
		{
			list($y, $m) = explode('-', $month);
			
			$all_date[] = date('Y-m-d',mktime(0, 0, 0, ($m + 1), 0, $y));
			
		}
		
		// Sort the array
		sort($all_date);
		
		// Remove duplicate values
		$dates = array_unique($all_date);
		
		$lgu_code = $this->Settings->get_selected_field( 'lgu_code' );
		
		if ($lgu_code == 'laguna_province')
		{
			$i = 0;
			
			foreach ($dates as $date)
			{
				// Lets earned the leave credits if not exists(first month from 1st day of service)
				if ($i == 0)
				{
					// This month is the first month of the service
					// We'll check if the employee has earn his/her
					// first leave credits
					
					list($year3, $month3, $day3) = explode('-', $data['name']['first_day_of_service']);
					list($year4, $month4, $day4) = explode('-', $date);
					
					$days_earned = $day4 - $day3;
					
					$days_earned += 1; // add 1 day because we include the 1st day of service
										//  in our count
										
					if ($days_earned >= 31)
					{
						$days_earned = 30;
					}					
					
					// We'll get the equivalent
					$first_month_earned = $this->Conversion_table->days_equivalent($days_earned);
					
					// Add to leave card table
					$data1 = array(
								"employee_id"	=> $id,
								"period" 		=> $date,
								"v_earned" 		=> $first_month_earned, 
								"s_earned" 		=> $first_month_earned,
								"date"			=> $date
								);
					
					// Lets check if the leave earning exist 
					// before we insert another one.
					
					$is_leave_earn_exists = $this->Leave_card->is_leave_earn_exists($data1);
					
					if ($is_leave_earn_exists == FALSE)
					{
						$this->Leave_card->add_leave_card($data1);
					}
					
					$i ++;
					
					//echo $date.'<br>';
					
				}
				else
				{
					// Add to leave card table
					$data1 = array(
								"employee_id"	=> $id,
								"period" 		=> $date,
								"v_earned" 		=> 1.25, 
								"s_earned" 		=> 1.25,
								"date"			=> $date
								);
					
					// Lets check if the leave earning exist 
					// before we insert another one.
					
					$is_leave_earn_exists = $this->Leave_card->is_leave_earn_exists($data1);
					
					$allow_earned = FALSE;
					
					$present_date = date('Y-m-d');
					
					// If the present date is greater than the date
					// that the leave should earned
					// Ex: if today is 2012.03.02 then the date of earned is 2012.02.29
					
					if ($present_date > $date)
					{
						$allow_earned = TRUE;
					}
					
					if ($is_leave_earn_exists == FALSE and $allow_earned == TRUE)
					{
						$this->Leave_card->add_leave_card($data1);
					}
					
					//echo $date.'<br>';
				}
				
			}
		}
		// End modification	
	}
	
	// ------------------------------------------------------------------------
	
	
}
