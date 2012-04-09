<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Helps extends CI_Model {
	
	// --------------------------------------------------------------------
	
	/**
	 * Constructor
	 *
	 * @return Helps
	 */
	function Helps()
	{
		parent::__construct();
	}
	
	// --------------------------------------------------------------------
	
	var $x 						= 2;	// Use for line colors
	var $y 						= 1;	// Use for line colors
	var $font_color_am_login 	= 0;	// 200 = red, 100 = maroon, 0 = black
	var $font_color_pm_login 	= 0;	// 200 = red, 100 = maroon, 0 = black
	var $font_color_am_logout 	= 0;	// 200 = red, 100 = maroon, 0 = black
	var $font_color_pm_logout 	= 0;	// 200 = red, 100 = maroon, 0 = black
	
	
	var $am_font_bold 			= '';	// Make the font bold. Change to letter b
										// to make the font bold. Default is blank
										// regular font
	var $pm_font_bold 			= '';
	var $am_out_bold 			= '';
	var $pm_out_bold 			= '';
	
	var $days 					= 0;
	var $hours 					= 0;
	var $minutes 				= 0;
	
	var $hours_late				= 0;
	var $count_late				= 0;
	
	var $hours_undertime		= 0;
	var $count_undertime		= 0;
	
	//For tardiness use
	var $am_login 				= 0;
	var $pm_login 				= 0;
	
	//For tardiness use
	var $am_logout 				= 0;
	var $pm_logout 				= 0;
	
	var $pm_late_hours 			= 0;
	var $pm_undertime_hours 	= 0;
	
	var $installed_version;
	
	// --------------------------------------------------------------------
	
	/**
	 * Change the format of the time.
	 * If the $log is OB, Leave or CTO
	 * dont change the format, return as is.
	 *
	 * @param string $log
	 * @param string $is_pm
	 * @param string $format
	 * @return string
	 */
	function change_format($log, $is_pm, $format = '')
	{
		if($log == 'Official Business' || $log == 'Leave' || $log == 'OB')
		{
			return $log;
		}
		if ($log == '')
		{
			return $log;
		}
	
		if ($is_pm == 1)
		{
			$log = date('h:i', strtotime($log));
		}
		
		return $log;
	}
	
	// --------------------------------------------------------------------
	
	/**
	 * Get the time late (time_log is the employee time, must_log is the time must log
	 *
	 * @param string $am_login
	 * @param string $time_a
	 * @param string $pm_login
	 * @param string $time_c
	 * @return void
	 */
	function check_late($am_login, $time_a, $pm_login, $time_c)
	{
		
		// 200 = red
		// 100 = maroon
		$minutes_tardy = $this->Settings->get_selected_field('minutes_tardy');
			
		// Black font
		$this->font_color_am_login = 0;
		
		$this->am_font_bold = '';
		$this->pm_font_bold = '';
		
		// Am login
		if($am_login != "")
		{
			
			// If whole day leave OB or CTO exit the if statement
			if( ($am_login=="Official Business" && $pm_login=="Official Business") || ($am_login=="Leave" && $pm_login=="Leave") || 
			($am_login=="CTO" && $pm_login=="CTO") )
			{	
				// Black font
				$this->font_color_am_login = 0;
				return 0;
			}
			
			// If am is not leave, ob, cto and am_login is late
			if( ($am_login > $time_a) && ($am_login !="Leave") && ($am_login !="Official Business") && ($am_login !="CTO"))
			{
				$this->hours_late += strtotime($am_login) - strtotime($time_a);
				
				$this->am_font_bold = 'B';
				$this->font_color_am_login = 100;
				
				$seconds_late = strtotime($am_login) - strtotime($time_a);
				
				if ($minutes_tardy != 1)
				{
					if ($seconds_late >= ($minutes_tardy * 60))
					{
						$this->count_late += 1;
						$this->am_font_bold = 'B';
						$this->font_color_am_login = 200;
					}
				
				}
				else
				{
					$this->count_late += 1;
					$this->am_font_bold = 'B';
					$this->font_color_am_login = 200;
					
				}
				
				// For tardiness use
				$this->am_login = strtotime($am_login) - strtotime($time_a);
				
			}
		}
		
		if($pm_login!="")
		{
			
			if(($pm_login=="Official Business") || ($pm_login=="Leave") || ($pm_login=="CTO"))
			{	
				
				$this->font_color_pm_login = 0;
				return 0;
				
			}
			
			if($pm_login > $time_c)
			{
				
				$this->pm_font_bold = 'B';
				$this->font_color_pm_login = 100;

				//if $time_c is blank make the var zero
				$add = 1;

				//Temporary problem fixer
				if ($time_c == '')
				{
					$time_c = '13:00';
					$add = 0;
				}
				//End Temporary problem fixer

				$this->hours_late += strtotime($pm_login) - strtotime($time_c) ;
				
				$this->pm_late_hours = strtotime($pm_login) - strtotime($time_c) ;

				$seconds_late = strtotime($pm_login) - strtotime($time_c);

				if ($minutes_tardy != 1)
				{
					if ($seconds_late >= ($minutes_tardy * 60))
					{
						$this->count_late += 1;
						$this->pm_font_bold = 'B';
						$this->font_color_pm_login = 200;
					}

				}
				else
				{
					$this->count_late += 1;
					$this->pm_font_bold = 'B';
					$this->font_color_pm_login = 200;

				}

				//For tardiness use
				$this->pm_login = strtotime($pm_login) - strtotime($time_c);
				
			}
		}
		
		
		//return $late;
	}
	
	// --------------------------------------------------------------------
	
	/**
	 * THIS IS FOR 8 HOURS STRAIGHT
	 * Get the time late
	 *
	 * @param string $date_log
	 * @param string $time_log
	 * @param string $must_log
	 * @param string $am_or_pm
	 * @param string $must_am_or_pm
	 * @return double
	 */
	function check_late_8hrs( $time_log, $must_log, $am_or_pm, $must_am_or_pm )
	{
		$late['hours'] = 0;
		$late['count'] = 0;
		
		//am login
		if ($time_log != "")
		{
			if ($time_log > $must_log)
			{
				
				if ($time_log >= '12:00')
				{
					if ($am_or_pm==$must_am_or_pm)
					{
						$late['hours'] += 0;
						$late['count'] += 0;
					}
				
				}
				
				else{
					$late['hours'] += strtotime($time_log) - strtotime($must_log);
					$late['count'] += 1;
				}
			}
			
			if ($time_log < $must_log)
			{
				if ($am_or_pm!=$must_am_or_pm)
				{
					$late['hours'] += strtotime($time_log) - strtotime('00:00');
					$late['hours'] += strtotime('12:00') - strtotime($must_log);
					
					$late['count'] += 1;
				}
			}
		}
		
		
		return $late;
	}
	
	// --------------------------------------------------------------------
	
	/**
	 * THIS IS FOR 24 HOURS STRAIGHT
	 * Get the time late
	 *
	 * @param string $time_log
	 * @param string $must_log
	 * @param string $am_or_pm
	 * @param string $must_am_or_pm
	 * @return double
	 */
	function check_late_24( $time_log, $must_log, $am_or_pm, $must_am_or_pm )
	{
		$late['hours'] = 0;
		$late['count'] = 0;
		
		if($time_log!="")
		{
			if($time_log > $must_log)
			{
				
				if($time_log >= '12:00')
				{
					$late['hours'] += strtotime($time_log) - strtotime($must_log);
					$late['count'] += 1;
				}
				
				if($time_log < '12:00' )
				{
					$late['hours'] += strtotime($time_log) - strtotime($must_log);
					$late['count'] += 1;
				}
				
			}
			
			if($time_log < $must_log)
			{
				if($am_or_pm!=$must_am_or_pm)
				{
					$late['hours'] += strtotime($time_log) - strtotime('00:00');
					$late['hours'] += strtotime('12:00') - strtotime($must_log);
					
					$late['count'] += 1;
				}
			}
		}
		
		
		return $late;
	}
	
	// --------------------------------------------------------------------
	
	/**
	 * THIS IS FOR 8 HOURS STRAIGHT 10pm to 6am
	 * Get the time late
	 *
	 * @param string $time_log
	 * @param string $must_log
	 * @param string $am_or_pm
	 * @param string $must_am_or_pm
	 * @return double
	 */
	function check_late_106( $time_log, $must_log, $am_or_pm, $must_am_or_pm )
	{
		$late['hours'] = 0;
		$late['count'] = 0;
		
		//pm login
		if($time_log!="")
		{
			if($time_log > $must_log)
			{
				
				if($time_log >= '12:00')
				{
					$late['hours'] += strtotime($time_log) - strtotime($must_log);
					$late['count'] += 1;
				}
				
				if($time_log < '12:00' )
				{
					$late['hours'] += strtotime($time_log) - strtotime($must_log);
					$late['count'] += 1;
				}
				
			}
			
			if($time_log < $must_log)
			{
				if($am_or_pm!=$must_am_or_pm)
				{
					$late['hours'] += strtotime($time_log) - strtotime('00:00');
					$late['hours'] += strtotime('12:00') - strtotime($must_log);
					
					$late['count'] += 1;
				}
			}
		}
		
		
		return $late;
	}
	
	// --------------------------------------------------------------------
	
	/**
	 * Check for undertime
	 *
	 * @param string $am_logout
	 * @param string $time_b
	 * @param string $pm_logout
	 * @param string $time_d
	 * @return void
	 */
	function check_undertime($am_logout, $time_b, $pm_logout, $time_d)
	{
		$this->font_color_am_logout = 0;
		
		$is_undertime_tardi = $this->Settings->get_selected_field('undertime_tardi');
	
		// am logout
		if($am_logout!="")
		{
			
			if($am_logout=="Official Business" || $am_logout=="Leave" || $am_logout=="CTO")
			{
				return 0;
			}
		
			if($am_logout < $time_b)
			{
				$this->hours_undertime += strtotime($time_b) - strtotime($am_logout);
				$this->count_undertime += 1;
				
				// For tardiness use
				$this->am_logout = strtotime($time_b) - strtotime($am_logout);
				
				// mark the undertime as red
				$this->font_color_am_logout = 100;
				$this->am_out_bold = 'B';
				
				// If undertime is mark as tardi set font red
				if ($is_undertime_tardi == 1) 
				{
					$this->font_color_am_logout = 200;
		 		}
			
			}
		}
		
		// pm logout
		if($pm_logout!="")
		{
			if($pm_logout=="Official Business" || $pm_logout=="Leave" || $pm_logout=="CTO")
			{
				return 0;
			}
			
			if($pm_logout < $time_d)
			{
				$this->hours_undertime += strtotime($time_d) - strtotime($pm_logout);
				$this->count_undertime += 1;
				
				$this->pm_undertime_hours = strtotime($time_d) - strtotime($pm_logout);
				
				// For tardiness use
				$this->pm_logout = strtotime($time_d) - strtotime($pm_logout);
				
				// mark the undertime as red
				$this->font_color_pm_logout = 100;
				$this->pm_out_bold = 'B';
				
				// If undertime is mark as tardi set font red
				if ($is_undertime_tardi == 1) 
				{
					$this->font_color_pm_logout = 200;
		 		}
			
			}
		}
		
		// If undertime is not mark as tardi
		$is_undertime_tardi = $this->Settings->get_selected_field('undertime_tardi');
		
		if ($is_undertime_tardi == 0) 
		{
			$this->count_undertime = 0;
 		}
		
		//return $undertime;
	}
	
	// --------------------------------------------------------------------
	
	/**
	 * THIS IS FOR 8 HOURS STRAIGHT
	 * check for under time
	 *
	 * @param unknown_type $date_log
	 * @param unknown_type $time_log
	 * @param unknown_type $must_log
	 * @param unknown_type $am_or_pm
	 * @param unknown_type $must_am_or_pm
	 * @return unknown
	 */
	function check_undertime_8hrs($date_log, $time_log, $must_log, $am_or_pm, $must_am_or_pm)
	{
		$undertime['hours'] = 0;
		$undertime['count'] = 0;
		
		//LOGOUT
		if($time_log!="")
		{
			if($time_log < $must_log)
			{
				$undertime['hours'] += strtotime($must_log) - strtotime($time_log);
				$undertime['count'] += 1;
			
			}
			
			if($time_log > $must_log)
			{
				
				
				if($time_log >= '12:00')
				{
				
					//if AM AND PM 
					if($am_or_pm!=$must_am_or_pm)
					{
						$undertime['hours'] += strtotime($must_log) - strtotime('00:00');
						$undertime['hours'] += strtotime('12:00') - strtotime($time_log);
						
						$undertime['count'] += 1;
					}
				
					//IF AM AND AM
					if($am_or_pm==$must_am_or_pm)
					{
						$temp = strtotime($must_log) - strtotime('00:00');
						$temp2 = strtotime($time_log) - strtotime('12:00');
						
						$undertime['hours'] += $temp - $temp2;
						$undertime['count'] += 1;
					}
				}
				
				else
				{
					if($am_or_pm!=$must_am_or_pm)
					{
						
						$undertime['hours'] += strtotime($must_log) - strtotime('00:00');
						$undertime['hours'] += strtotime('12:00') - strtotime($time_log);
						
						$undertime['count'] += 1;
					}
				
				}
			}
		}
		
		
		return $undertime;
	}
	
	// --------------------------------------------------------------------
	
	/**
	 * THIS IS FOR 24 HOURS STRAIGHT
	 * Check for under time
	 *
	 * @param unknown_type $time_log
	 * @param unknown_type $must_log
	 * @param unknown_type $am_or_pm
	 * @param unknown_type $must_am_or_pm
	 * @return unknown
	 */
	function check_undertime_24($time_log, $must_log, $am_or_pm, $must_am_or_pm)
	{
		$undertime['hours'] = 0;
		$undertime['count'] = 0;
		
		//LOGOUT
		if($time_log!="")
		{
			if($time_log < $must_log)
			{
				$undertime['hours'] += strtotime($must_log) - strtotime($time_log);
				$undertime['count'] += 1;
			
			}
			
			if($time_log > $must_log)
			{
				
				
				if($time_log >= '12:00')
				{
					$temp = strtotime($must_log) - strtotime('00:00');
					$temp2 = strtotime($time_log) - strtotime('12:00');
					
					$undertime['hours'] += $temp - $temp2;
					$undertime['count'] += 1;
					
				}
				
			}
		}
		
		
		return $undertime;
	}
	
	// --------------------------------------------------------------------
	
	/**
	 * THIS IS FOR 8 HOURS STRAIGHT 10pm to 6am
	 * Check for under time
	 *
	 * @param unknown_type $time_log
	 * @param unknown_type $must_log
	 * @param unknown_type $am_or_pm
	 * @param unknown_type $must_am_or_pm
	 * @return unknown
	 */
	function check_undertime_106($time_log, $must_log, $am_or_pm, $must_am_or_pm)
	{
		$undertime['hours'] = 0;
		$undertime['count'] = 0;
		
		//LOGOUT
		if($time_log!="")
		{
			if($time_log < $must_log)
			{
				$undertime['hours'] += strtotime($must_log) - strtotime($time_log);
				$undertime['count'] += 1;
			
			}
			
			if($time_log > $must_log)
			{
				
				
				if($time_log >= '12:00')
				{
					$temp = strtotime($must_log) - strtotime('00:00');
					$temp2 = strtotime($time_log) - strtotime('12:00');
					
					$undertime['hours'] += $temp - $temp2;
					$undertime['count'] += 1;
					
				}
				
			}
		}
		
		
		return $undertime;
	}
	
	// --------------------------------------------------------------------
	
	/**
	 * check updates
	 *
	 * @return string
	 */
	function check_updates()
	{
		$this->set_version();
		
		return $this->installed_version;
	}
	
	// --------------------------------------------------------------------
	
	/**
	 * Compute over time
	 *
	 * @param string $ot_in
	 * @param string $ot_out
	 * @return unknown
	 */
	function compute_over_time($ot_in, $ot_out)
	{
		return 	strtotime($ot_out) - strtotime($ot_in);
		
		if($login!="" && $logout!="")
		{
			if($login > "12:00")
			{
				$logout = strtotime($logout) - strtotime('00:00');
				$login  = strtotime($login) - strtotime('12:00');
				return $logout - $login;
			}
			else{
			
				return 	strtotime($logout) - strtotime($login);
			}	
		}
	}
	
	// --------------------------------------------------------------------
	
	/**
	 * $ut variable is use for undertime porpose
	 *
	 * @param unknown_type $integer
	 * @return unknown
	 */
	function compute_time($integer, $ut = 0) 
	{ 
		$days = 0;
		
		$hours = 0;
		
		$minutes = 0;
		$return = '';
		
	    $seconds=$integer; 

		// use for UT		
		$ut_hour = '0-';
		
	
	    if ($seconds/60 >=1) 
	
	    { 
	
			$minutes=floor($seconds/60); 
		
			if ($minutes/60 >= 1) 
		
			{ # Hours 
		
				$hours=floor($minutes/60); 
				
				$ut_hour = '';
			
				if ($days>=1 && $hours >=1) $return="$return"; 
			
				if ($hours >=2) $return="$return $hours hrs"; 
			
				if ($hours ==1) $return="$return $hours hr"; 
		
			} #end of Hours 
		
			$minutes=$minutes-(floor($minutes/60))*60; 
		
			if ($hours>=1 && $minutes >=1) $return="$return"; 
		
			if ($minutes >=2) $return="$return $minutes mins"; 
		
			if ($minutes ==1) $return="$return $minutes min"; 
		
	    } #end of minutes 
	
	    $seconds=$integer-(floor($integer/60))*60; 
	
	    if ($minutes>=1 && $seconds >=1) $return="$return"; 
	
	    if ($seconds >=2) $return="$return $seconds secs"; 
	
	    if ($seconds ==1) $return="$return $seconds sec"; 
	
	    $return="$return"; 
		
		if ($ut == 1)
		{
			return $ut_hour.$return;
		}
		else
		{
	    	return $return; 
		}
	
	}
	
	// --------------------------------------------------------------------
	
	/** 
	*  Function:   convert_number 
	*
	*  Description: 
	*  Converts a given integer (in range [0..1T-1], inclusive) into 
	*  alphabetical format ("one", "two", etc.)
	*
	*  @int
	*
	*  @return string
	*
	*/ 
	function convert_number($number) 
	{ 
		if (($number < 0) || ($number > 999999999)) 
		{ 
		throw new Exception("Number is out of range");
		} 
	
		$Gn = floor($number / 1000000);  /* Millions (giga) */ 
		$number -= $Gn * 1000000; 
		$kn = floor($number / 1000);     /* Thousands (kilo) */ 
		$number -= $kn * 1000; 
		$Hn = floor($number / 100);      /* Hundreds (hecto) */ 
		$number -= $Hn * 100; 
		$Dn = floor($number / 10);       /* Tens (deca) */ 
		$n = $number % 10;               /* Ones */ 
	
		$res = ""; 
	
		if ($Gn) 
		{ 
			$res .= convert_number($Gn) . " Million"; 
		} 
	
		if ($kn) 
		{ 
			$res .= (empty($res) ? "" : " ") . 
				convert_number($kn) . " Thousand"; 
		} 
	
		if ($Hn) 
		{ 
			$res .= (empty($res) ? "" : " ") . 
				convert_number($Hn) . " Hundred"; 
		} 
	
		$ones = array("", "One", "Two", "Three", "Four", "Five", "Six", 
			"Seven", "Eight", "Nine", "Ten", "Eleven", "Twelve", "Thirteen", 
			"Fourteen", "Fifteen", "Sixteen", "Seventeen", "Eightteen", 
			"Nineteen"); 
		$tens = array("", "", "Twenty", "Thirty", "Fourty", "Fifty", "Sixty", 
			"Seventy", "Eigthy", "Ninety"); 
	
		if ($Dn || $n) 
		{ 
			if (!empty($res)) 
			{ 
				$res .= " and "; 
			} 
	
			if ($Dn < 2) 
			{ 
				$res .= $ones[$Dn * 10 + $n]; 
			} 
			else 
			{ 
				$res .= $tens[$Dn]; 
	
				if ($n) 
				{ 
					$res .= "-" . $ones[$n]; 
				} 
			} 
		} 
	
		if (empty($res)) 
		{ 
			$res = "zero"; 
		} 
	
		return $res; 
	} 
	
	// --------------------------------------------------------------------
	
	/**
	 * COUNT HOURS WORKED
	 *
	 * @param string $login
	 * @param string $logout
	 * @return double
	 */
	function count_hours_work($login, $logout)
	{
		
		if($login!="" && $logout!="")
		{
			if($login > "12:00")
			{
				$logout = strtotime($logout) - strtotime('00:00');
				$login  = strtotime($login) - strtotime('12:00');
				return $logout - $login;
				
			}
			else{
			
				return 	strtotime($logout) - strtotime($login);
			}	
		}
	
	}
	
	// --------------------------------------------------------------------
	
	/**
	 * THIS IS FOR 8 HOURS STRAIGHT
	 * COUNT HOURS WORKED
	 *
	 * @param string $login
	 * @param string $logout
	 * @param string $am_or_pm
	 * @param string $am_or_pm2
	 * @return double
	 */
	function count_hours_work_8hrs($login, $logout, $am_or_pm, $am_or_pm2)
	{
		if($login!="" && $logout!="")
		{
			if($logout < $login)
			{
				if($am_or_pm!=$am_or_pm2)
				{
					
					$logout = strtotime($logout) - strtotime('00:00');
					$login  = strtotime('12:00') - strtotime($login) ;
					return $logout + $login;
				
				}
			}
			
			if($logout > $login)
			{
				return strtotime($logout) - strtotime($login);
			}	
		}
	
	}
	
	// --------------------------------------------------------------------
	
	/**
	 * Get the dates between two dates
	 *
	 * @param string(date) $date1
	 * @param string(date) $date2
	 * @return unknown
	 */
	function days_between($date1, $date2)
	{
	    $d1 = explode("-", $date1);
	    $d2 = explode("-", $date2);
	  
	    $year1 = $d1[0];
	    $month1 = $d1[1];
	    $day1 = $d1[2];
	
	    $year2 =  $d2[0];
	    $month2 = $d2[1];
	    $day2 = $d2[2];
	   
	    $deadline1 = mktime(0, 0, 0, $month1, $day1, $year1, 0);
	    $deadline2 = mktime(0, 0, 0, $month2, $day2, $year2, 0);
	    $res = round( ($deadline2 - $deadline1) / (60 * 60 * 24) );
	    return $res;
	}
	
	// --------------------------------------------------------------------
	
	/**
	 * Difference between to time
	 *
	 * @param string $bigTime
	 * @param string $smallTime
	 * @return string
	 */
	function diff_time($big_time,$small_time)
	{
		//input format hh:mm:ss
	
		list($h1,$m1,$s1)=split(":",$big_time);
		list($h2,$m2,$s2)=split(":",$small_time);
	   
		$second1=$s1+($h1*3600)+($m1*60);//converting it into seconds
		$second2=$s2+($h2*3600)+($m2*60);
	   
	   
		if ($second1==$second2)
		{
			$result_time="00:00:00";
			return $result_time;
			exit();
		}
	   
	   
	   
		if ($second1<$second2) //
		{
			$second1=$second1+(24*60*60);//adding 24 hours to it.
		}
	   
	   
	   
		$second3=$second1-$second2;
	   
		//print $second3;
		if ($second3==0)
		{
			$h3=0;
		}
		else
		{
			$h3=floor($second3/3600);//find total hours
		}
		   
		$rem_second=$second3-($h3*3600);//get remaining seconds
		if ($rem_second==0)
		{
			$m3=0;
		}
		else
		{
			$m3=floor($rem_second/60);// for finding remaining  minutes
		}
		   
		$s3=$rem_second-(60*$m3);
	   
		if($h3==0)//formating result.
		{
			$h3="00";
		}
		if($m3==0)
		{
			$m3="00";
		}
		if($s3==0)
		{
			$s3="00";
		}
		   
		$result_time="$h3:$m3";
	   
	   
		return $result_time;
	
	}
	
	// --------------------------------------------------------------------
	
	/**
	 * Get extension of the filename
	 *
	 * @param unknown_type $filename
	 * @return unknown
	 */
	function find_exts($filename)
	{
		$filename = strtolower($filename) ;
		$exts = split("[/\\.]", $filename) ;
		$n = count($exts)-1;
		$exts = $exts[$n];
		return $exts;
	}
	
	// --------------------------------------------------------------------
	
	/**
	 * Footer
	 *
	 */
	function footer()
	{
		$system_name = $this->Settings->get_selected_field('lgu_name');
		
		echo $system_name;
	}
	
	// --------------------------------------------------------------------
	
	 /**
	  * Get days between two days
	  *
	  * @param string $start
	  * @param string $end
	  * @return array
	  */
	function get_days_in_between($start, $end) 
	 {  
	   // Vars  
	    $day = 86400; // Day in seconds  
	    $format = 'Y-m-d'; // Output format (see PHP date funciton)  
	     $sTime = strtotime($start); // Start as time  
	    $eTime = strtotime($end); // End as time  
	    $numDays = round(($eTime - $sTime) / $day) + 1;  
	    $days = array();  
	     
	    // Get days  
	   for ($d = 0; $d < $numDays; $d++) 
	   {  
	     $days[] = date($format, ($sTime + ($d * $day)));  
    	}  
     
	    // Return days  
	    return $days;  
    }   
	
    // --------------------------------------------------------------------
    
    /**
	 * Get the last day of the month
	 *
	 * @param int $month
	 * @param int $year
	 * @return string(date)
	 */
	function get_last_day($month, $year)
	{
		return idate('d', mktime(0, 0, 0, ($month + 1), 0, $year));
	}
    
	// --------------------------------------------------------------------
	
	/**
	 * This function use for leave management
	 * get the year and month of two dates
	 * 
	 *
	 * @param string $date1
	 * @param string $date2
	 * @return array
	 */
	function get_months($date1, $date2) {
	   $time1  = strtotime($date1);
	   $time2  = strtotime($date2);
	   $my     = date('mY', $time2);
	
	   $months = array(date('Y-m', $time1));
	   $f      = '';
	
	   while($time1 < $time2) {
	      $time1 = strtotime((date('Y-m-d', $time1).' +15days'));
	      if(date('Y-m', $time1) != $f) {
	         $f = date('Y-m', $time1);
	         if(date('mY', $time1) != $my && ($time1 < $time2))
	            $months[] = date('Y-m', $time1);
	      }
	   }
	
	   $months[] = date('Y-m', $time2);
	   return $months;
	}
	
	// --------------------------------------------------------------------
	
	/**
	 * Get month name
	 *
	 * @param int $month
	 * @return string
	 */
	function get_month_name($month)
	{
		switch($month)
		{
	    case "01" :
	       	$month = "January";
			break;
	    case "02" :
	       $month = "February";
			break;
	   	case "03" :
	        $month = "March";
			break;
	    case "04" :
	        $month = "April";
			break;
	    case "05" :
	        $month = "May";
			break;
	    case "06" :
	        $month = "June";
			break;
	    case "07" :
	        $month = "July";
			break;
	    case "08" :
	        $month = "August";
			break;
	    case "09" :
	        $month = "September";
			break;
	    case "10" :
	        $month = "October";
			break;
	    case "11" :
	        $month = "November";
			break;
	    case "12" :
	        $month = "December";
			break;
		} 
		
		return $month;
	}
	
	// --------------------------------------------------------------------
	
	/**
	 * The script is used for image compression such as photo gallery and the script
	 * automatically compressthe image base on the given dimension. 
	 * It will automatically calculate the landscape image or portraitimage
	 * Before use this code you must have to enable your gd library
	 * $imgfile="pics/aa.jpg"; // The Source of your image file
	 * sample: imageCompression($imgfile,150,"pics/b.jpg");
	 *
	 * @param unknown_type $imgfile
	 * @param unknown_type $thumbsize
	 * @param unknown_type $savePath
	 * @param unknown_type $file_extension
	 */
	function image_compression($imgfile="", $thumbsize=0, $savePath=NULL, $file_extension) 
	{
	    if($savePath==NULL) 
		{
	        /* To display the image in browser
	       
	        */
			if($file_extension == 'jpg' || $file_extension == 'jpeg')
			{
				header('Content-type: image/jpeg');
			}
			
			if($file_extension == 'gif')
			{
				header('Content-type: image/gif');
			}
			
			if($file_extension == 'png')
			{
				header('Content-type: image/png');
			}
			
	        
	       
	    }
	    list($width,$height)=getimagesize($imgfile);
	    /**
	     * The width and the height of the image also the getimagesize 
		 * retrieve other information as well.   
		 */
	   
	    $imgratio=$width/$height; 
	    /**
	     * To compress the image we will calculate the ration
	     * For eg. if the image width=700 and the height = 921 then the ration is 0.77...
	     * if means the image must be compression from its height and the width is 
		 * based on its height
	     * so the newheight = thumbsize and the newwidth is thumbsize*0.77...
	     */
	   
	    if($imgratio>1) 
		{
	        $newwidth=$thumbsize;
	        $newheight=$thumbsize/$imgratio;
	    } else 
		{
	        $newheight=$thumbsize;       
	        $newwidth=$thumbsize*$imgratio;
	    }
	   
	    $thumb=imagecreatetruecolor($newwidth,$newheight); // Making a new true color image
	    //change imagecreatefromjpeg to imagecreatefromgif if gif
		
		if($file_extension == 'jpg' || $file_extension == 'jpeg')
		{
				$source=imagecreatefromjpeg($imgfile); // Now it will create a new image from the source
		}
		
		if($file_extension == 'gif')
		{
				$source=imagecreatefromgif($imgfile); // Now it will create a new image from the source
		}
		
		if($file_extension == 'png')
		{
				$source=imagecreatefrompng($imgfile); // Now it will create a new image from the source
		}
		
		
	    imagecopyresampled($thumb, $source,0,0,0,0,$newwidth,$newheight,$width,$height);  // Copy and resize the image
	    
		//change imagejpeg to imagegif if gif
		if($file_extension == 'jpg' || $file_extension == 'jpeg')
		{
				imagejpeg($thumb, $savePath, 100);
		}
		
		if($file_extension == 'gif' || $file_extension == 'png')
		{
				imagegif($thumb, $savePath, 100);
		}
		
		
	    /**
	     * Out put of image if the $savePath is null then it will display the 
		 * image in the browser
	     */
	    imagedestroy($thumb);//Destroy the image
	}
	
	// --------------------------------------------------------------------
	
	/**
	 * Return TRUE if the date is the last day of
	 * the month. FALSE if not
	 *
	 * @param int $month
	 * @param int $year
	 * @param int $day
	 * @return bool
	 */
	function is_last_day($month, $year, $day)
	{
		$last_day = idate('d', mktime(0, 0, 0, ($month + 1), 0, $year));
		
		if ($last_day == $day)
		{
			return TRUE;
		}
		
		else
		{
			return FALSE;
		}
	}
	
	// --------------------------------------------------------------------
	
	/**
	 * Tells whether the log is blank or not
	 *
	 * @param string $log
	 * @return string
	 */
	function is_log_blank($log)
	{
		if ($log == '')
		{
			return  '#FFCC00';
		}
		else
		{
			return  '';
		}
	}
	
	// --------------------------------------------------------------------
	
	/**
	 * Tells whether the log is ob or not
	 *
	 * @param string $log
	 * @return string
	 */
	function is_ob($log)
	{
		if ($log == 'Official Business')
		{
			return 'OB';
		}
			
		else
		{
			return $log;
		}
			
	}
	
	// --------------------------------------------------------------------
	
	/**
	 * determine if the date is saturday or sunday
	 *
	 * @param int $month
	 * @param int $day
	 * @param int $year
	 * @return string
	 */
	function is_sat_sun($month, $day, $year)
	{
		$day_name = date("l", mktime(0, 0, 0, $month, $day, $year));
		
		return $day_name;
	}
	
	// --------------------------------------------------------------------
	
	/**
	 * Set the color of table rows
	 *
	 * @return string
	 */
	function set_line_colors()
	{
		if($this->x > $this->y)
		{
			$this->y+=2;
			$bg="#F2F2F2";
		
		}else{
			
			$this->x+=2;
			$bg="#Ffffff";
		}
		
		return $bg;
	}
	
	// --------------------------------------------------------------------
	
	/**
	 * Set the font to maroon
	 *
	 * @param string $log
	 * @param string $is_pm
	 * @return string
	 */
	function set_font_maroon($log, $is_pm)
	{
		if($log == 'Official Business' || $log == 'Leave' || $log == 'OB')
		{
			return $log;
		}
		
		if ($is_pm == 1)
		{
			$log = date('h:i', strtotime($log));
		}
		return '<font color="#993333">'.$log.'</font>';	
	}
	
	// --------------------------------------------------------------------
	
	/**
	 * Set the font to red
	 *
	 * @param string $log
	 * @param string $time
	 * @param string $is_pm
	 * @return string
	 */
	function set_font_red($log, $time, $is_pm)
	{
		if($log == 'Official Business' || $log == 'Leave' || $log == 'OB')
		{
			return $log;
		}
		if ($log > $time)
		{
			
			if ($log == 'Official Business' OR $log =='Leave')
			{
				return $log;
			}
		
			// Change hour format
			$log = $this->change_format($log, $is_pm, $format = '');
		
			
			return '<b><font color=red>'.$log.'</font></b>';
		}
		else 
		{
			$log = $this->change_format($log, $is_pm, $format = '');
			
			return $log;
		}
		
	}
	
	// --------------------------------------------------------------------
	
	/**
	 * Cut the office name into two if the lines is long
	 *
	 * @param unknown_type $cadena
	 * @param unknown_type $char_no
	 * @return unknown
	 */
	function splitstroverflow($cadena,$char_no) 
	{
		$pri_renglon = array();
		$seg_renglon = array();
		$palabras = explode(" ",trim($cadena));
	       
		for ($i = 0; $i < count($palabras); $i++) 
		{
			$sum += strlen($palabras[$i])+1;
			if ($sum >= $char_no) $seg_renglon[] = $palabras[$i] . " ";
			else $pri_renglon[] = $palabras[$i] . " ";
		}
			   
		for ($i = 0; $i < count($pri_renglon); $i++)
			$renglones[0] .= $pri_renglon[$i];
				   
		for ($i = 0; $i < count($seg_renglon); $i++)
			$renglones[1] .= $seg_renglon[$i];
			   
		return $renglones;
	}
	
}

/* End of file settings.php */
/* Location: ./system/application/libraries/helps.php */