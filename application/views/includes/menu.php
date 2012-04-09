<?php

 
$class_menu_close = '';

$base = '<a href="'.base_url().'';
$image = '<img class="menu_icon" src="'.base_url().'images/blank.gif">';

//http://codeigniter.com/user_guide/helpers/html_helper.html#ol_and_ul

$attributes = array('class' => 'list_modules');

$user_management = array(
						'users' 		=> $base.'users">'.$image.'Manage Users</a>',
						'groups' 		=> $base.'groups">'.$image.'Groups</a>',
						'permissions' 	=> $base.'permissions">'.$image.'Permissions</a>',
            			);

$employee_management = array(
						//$base.'employees/add_employee">'.$image.'Add Employee</a>',
						$base.'employees">'.$image.'Manage Employees</a>',
						$base.'pds/personal_info">'.$image.'Personal Data Sheet</a>',
						$base.'pds/service_record">'.$image.'Service Records</a>',
						$base.'personnel/assets">'.$image.'Assets and Liabilities</a>',
						$base.'personnel/personnel_schedule">'.$image.'Personnel Schedule</a>',
						$base.'personnel/plantilla">'.$image.'Plantilla of Personnel</a>',
						$base.'pds/reports">'.$image.'Reports</a>'
            			);
						
$training_management = array(
						$base.'training_manage/type">'.$image.'Training Type</a>',
						$base.'training_manage/course">'.$image.'Training Course</a>',
						$base.'training_manage/event">'.$image.'Training Event</a>',
						$base.'training_manage/attendance">'.$image.'Training Attendance</a>',
						$base.'training_manage/contact_type">'.$image.'Training Contact Type</a>',
						$base.'training_manage/contact_info">'.$image.'Training Contact Info</a>',
						
            			);						

$dtr_management = 		array(
						$base.'dtr_manage/dtr">'.$image.'DTR</a>',
						$base.'dtr_manage/jo">'.$image.'Contractual / Job Order</a>',
						$base.'dtr_manage/double_entries">'.$image.'Double Entries</a>'
            			);
						
$attendance_management = array(
						$base.'attendance/view_attendance">'.$image.'View Attendance</a>',
						$base.'attendance/dtr">'.$image.'View/Print DTR</a>',
						$base.'attendance/jo">'.$image.'Contractual / Job Order</a>',
						$base.'attendance/double_entries">'.$image.'Double Entries</a>',
						$base.'attendance/view_absences">'.$image.'View Absences</a>',
						$base.'attendance/view_late">'.$image.'View Late / Undertime</a>',
						$base.'attendance/view_ob">'.$image.'View Official Business</a>',
						$base.'attendance/view_tardiness">'.$image.'View Tardiness</a>',
						$base.'attendance/view_ten_tardiness">'.$image.'View 10x Tardiness</a>'
            			);
						
$manual_management = 	array(
						//$base.'manual_manage/ob">'.$image.'Official Business</a>',
						$base.'manual_manage/login">'.$image.'Manual Login/ Logout</a>',
						$base.'manual_manage/cto">'.$image.'Compensatory Time off</a>',
						$base.'manual_manage/cto_apps">'.$image.'CTO Applications</a>',
						$base.'manual_manage/cto_forward_balance">'.$image.'CTO Forward Balance</a>',
						$base.'manual_manage/office_pass">'.$image.'Office Pass/ Pass Slip</a>'
            			);					
						
$leave_management = 	array(
						$base.'leave_manage/records">'.$image.'Leave Card/Certification</a>',
						$base.'leave_manage/file_leave">'.$image.'File Leave</a>',
						$base.'leave_manage/encode_leave_card">'.$image.'Encode Leave Card</a>',
						$base.'leave_manage/leave_apps">'.$image.'Leave Application</a>',
						$base.'leave_manage/forwarded">'.$image.'Leave Forwarded</a>',
						$base.'leave_manage/undertime">'.$image.'Encode Tardy/Undertime</a>',
						$base.'leave_manage/wop">'.$image.'Leave WOP</a>',
						$base.'leave_manage/stop_earning">'.$image.'Stop Leave Earnings</a>',
						$base.'leave_manage/settings">'.$image.'Settings</a>',
            			);
						
					


// Payroll Module
$payroll_management = 	array(
						$base.'payroll_manage/records">'.$image.'Leave Card/Certification</a>',
						$base.'payroll_manage/file_leave">'.$image.'File Leave</a>',
						$base.'payroll_manage/leave_apps">'.$image.'Leave Application</a>',
						$base.'payroll_manage/forwarded">'.$image.'Leave Forwarded</a>',
						$base.'payroll_manage/undertime">'.$image.'Encode Tardy/Undertime</a>',
						$base.'payroll_manage/wop">'.$image.'Leave WOP</a>',
						$base.'payroll_manage/stop_earning">'.$image.'Stop Leave Earnings</a>',
						$base.'payroll_manage/settings">'.$image.'Settings</a>',
            			);
						
$settings_management =  array(
						$base.'settings_manage/salary_grade">'.$image.'Salary Grade (Authorized)</a>',
						$base.'settings_manage/salary_grade_proposed">'.$image.'Salary Grade (Proposed)</a>',
						$base.'settings_manage/holiday">'.$image.'Holiday</a>',
						$base.'settings_manage/schedules">'.$image.'Schedules</a>',
						//$base.'settings_manage/schedule">'.$image.'Employee Schedule</a>',
						$base.'settings_manage/employee_schedule">'.$image.'Employee Schedule</a>',
						$base.'settings_manage/audit_trail">'.$image.'Audit Trail</a>',
						$base.'settings_manage/general_settings">'.$image.'General Settings</a>',
						$base.'settings_manage/backup">'.$image.'Back up/ Restore</a>',
						$base.'settings_manage/offline_update">'.$image.'Offline Update</a>',
            			);																							
?>
<ul id="main_menu" class="main_menu_over"><!-- Main menu -->

<li class="menu_close"><a class="first_line" href="<?php echo base_url();?>home/home_page"><img src="<?php echo base_url();?>/images/classroom_classroom.png" alt=".:" width="22" height="22" class="little_icon"><br>
  Home</a></li>
  
  <li class="menu_close" onMouseOver="adminOpenMenu(this, 'menu_open');" onMouseOut="adminCloseMenu(this, 'menu_close');"><a class="first_line" href="?q=9" onClick="return false;"><img src="<?php echo base_url();?>images/admin_manager_view.png" alt=".:" width="22" height="22" class="little_icon"><br>
  RPU<br /> Management</a><ul class="list_modules"><li><a href="<?php echo base_url();?>rpu"><img class="menu_icon" src="<?php echo base_url();?>/images/blank.gif" alt=".:">RPU List</a></li>
  <li><a href="<?php echo base_url();?>faas"><img class="menu_icon" src="<?php echo base_url();?>/images/blank.gif" alt=".:">FAAS List</a></li>
  <li><a href="<?php echo base_url();?>td"><img class="menu_icon" src="<?php echo base_url();?>/images/blank.gif" alt=".:" />TD List</a></li>
  <li><a href="<?php echo base_url();?>rptop"><img class="menu_icon" src="<?php echo base_url();?>/images/blank.gif" alt=".:" />RPTOP List</a></li>
  </ul>
  </li>
  
  
  
  
 
 
           <li class="menu_close"><a class="first_line" href="#"><img src="<?php echo base_url();?>images/admin_manager_view.png" width="22" height="22" class="little_icon"><br>
          Users<br /></a>
          <?php echo ul($user_management, $attributes);?>
          </li>
      
          
 
 
 
 <li class="menu_close" onMouseOver="adminOpenMenu(this, 'menu_open');" onMouseOut="adminCloseMenu(this, 'menu_close');"><a class="first_line" href="?q=22" onClick="return false;"><img src="<?php echo base_url();?>/images/configuration_config.png" alt=".:" width="22" height="22" class="little_icon"><br>
  Settings</a><ul class="list_modules"><li><a href="<?php echo base_url();?>settings_manage/lgu_settings"><img class="menu_icon" src="<?php echo base_url();?>/images/blank.gif" alt=".:">LGU Settings</a></li>
  <li><a href="<?php echo base_url();?>settings_manage/assessment_settings"><img class="menu_icon" src="<?php echo base_url();?>/images/blank.gif" alt=".:">Assessment Settings</a></li>
  <li><a href="<?php echo base_url();?>settings_manage/treasury_settings"><img class="menu_icon" src="<?php echo base_url();?>/images/blank.gif" alt=".:">Treasury Settings</a></li>
  
  
  <li class="menu_close" onmouseover="adminOpenMenu(this, 'menu_open');" onmouseout="adminCloseMenu(this, 'menu_close');"><a class="arrow_left" href="?op=over_main_sel&amp;id_sel=2" onclick="return false;"><img class="menu_icon" src="<?php echo base_url();?>/images/blank.gif" alt=".:" />Location</a>
  <ul>
  <li><a  href="<?php echo base_url();?>settings_manage/location/province"><img class="menu_icon" src="<?php echo base_url();?>/images/blank.gif" alt=".:" />Province</a></li>
  <li><a  href="<?php echo base_url();?>settings_manage/location/city"><img class="menu_icon" src="<?php echo base_url();?>/images/blank.gif" alt=".:" />Municipality/City</a></li>
  <li><a  href="<?php echo base_url();?>settings_manage/location/district"><img class="menu_icon" src="<?php echo base_url();?>/images/blank.gif" alt=".:" />Districts</a></li>
  <li><a  href="<?php echo base_url();?>settings_manage/location/barangay"><img class="menu_icon" src="<?php echo base_url();?>/images/blank.gif" alt=".:" />Barangay</a></li>
  </ul>
  </li>
  
  
  <li class="menu_close" onmouseover="adminOpenMenu(this, 'menu_open');" onmouseout="adminCloseMenu(this, 'menu_close');"><a class="arrow_left" href="?op=over_main_sel&amp;id_sel=2" onclick="return false;"><img class="menu_icon" src="<?php echo base_url();?>/images/blank.gif" alt=".:" />Property</a>
  <ul>
  
  <li class="menu_close" onmouseover="adminOpenMenu(this, 'menu_open');" onmouseout="adminCloseMenu(this, 'menu_close');"><a class="arrow_left" href="?op=over_main_sel&amp;id_sel=2" onclick="return false;"><img class="menu_icon" src="<?php echo base_url();?>/images/blank.gif" alt=".:" />Land</a>
  <ul>
  <li><a  href="<?php echo base_url();?>settings_manage/property/land_classes"><img class="menu_icon" src="<?php echo base_url();?>/images/blank.gif" alt=".:" />Classes</a></li>
  <li><a  href="<?php echo base_url();?>settings_manage/property/land_actual_uses"><img class="menu_icon" src="<?php echo base_url();?>/images/blank.gif" alt=".:" />Actual Uses</a></li>
  <li><a  href="<?php echo base_url();?>Settings_Manage/property/land_sub_classes"><img class="menu_icon" src="<?php echo base_url();?>/images/blank.gif" alt=".:" />Sub Classifications</a></li>
  </ul>
  </li>
  
  
  <li class="menu_close" onmouseover="adminOpenMenu(this, 'menu_open');" onmouseout="adminCloseMenu(this, 'menu_close');"><a class="arrow_left" href="?op=over_main_sel&amp;id_sel=2" onclick="return false;"><img class="menu_icon" src="<?php echo base_url();?>/images/blank.gif" alt=".:" />Plant and Trees</a>
  <ul>
  <li><a  href="<?php echo base_url();?>settings_manage/property/plant_classes"><img class="menu_icon" src="<?php echo base_url();?>/images/blank.gif" alt=".:" />Classes</a></li>
  <li><a  href="<?php echo base_url();?>settings_manage/property/plant_actual_uses"><img class="menu_icon" src="<?php echo base_url();?>/images/blank.gif" alt=".:" />Actual Uses</a></li>
  </ul>
  </li>
  
  <li class="menu_close" onmouseover="adminOpenMenu(this, 'menu_open');" onmouseout="adminCloseMenu(this, 'menu_close');"><a class="arrow_left" href="?op=over_main_sel&amp;id_sel=2" onclick="return false;"><img class="menu_icon" src="<?php echo base_url();?>/images/blank.gif" alt=".:" />Buildings & Improvements</a>
  <ul>
  <li><a  href="<?php echo base_url();?>settings_manage/property/build_classes"><img class="menu_icon" src="<?php echo base_url();?>/images/blank.gif" alt=".:" />Actual Uses</a></li>
  <li><a  href="<?php echo base_url();?>/Settings_Manage/plants_trees_actual_uses"><img class="menu_icon" src="<?php echo base_url();?>/images/blank.gif" alt=".:" />Classes</a></li>
  <li><a  href="<?php echo base_url();?>/Settings_Manage/plants_trees_actual_uses"><img class="menu_icon" src="<?php echo base_url();?>/images/blank.gif" alt=".:" />Depreciation</a></li>
  </ul>
  </li>
  
  <li class="menu_close" onmouseover="adminOpenMenu(this, 'menu_open');" onmouseout="adminCloseMenu(this, 'menu_close');"><a class="arrow_left" href="?op=over_main_sel&amp;id_sel=2" onclick="return false;"><img class="menu_icon" src="<?php echo base_url();?>/images/blank.gif" alt=".:" />Machineries</a>
  <ul>
  <li><a  href="<?php echo base_url();?>/Settings_Manage/plants_trees_classes"><img class="menu_icon" src="<?php echo base_url();?>/images/blank.gif" alt=".:" />Actual Uses</a></li>
  <li><a  href="<?php echo base_url();?>/Settings_Manage/plants_trees_actual_uses"><img class="menu_icon" src="<?php echo base_url();?>/images/blank.gif" alt=".:" />Depreciation</a></li>
  </ul>
  </li>
  
  <li><a  href="<?php echo base_url();?>/Settings_Manage/barangay"><img class="menu_icon" src="<?php echo base_url();?>/images/blank.gif" alt=".:" />Barangay</a></li>
  </ul>
  </li>
  
  
  <li><a href="<?php echo base_url();?>/Settings_Manage/general_settings"><img class="menu_icon" src="<?php echo base_url();?>/images/blank.gif" alt=".:">General Settings</a></li>
   <li><a href="<?php echo base_url();?>/Settings_Manage/backup"><img class="menu_icon" src="<?php echo base_url();?>/images/blank.gif" alt=".:">Backup / Restore</a></li>
   <li><a href="<?php echo base_url();?>/Settings_Manage/offline_update"><img class="menu_icon" src="<?php echo base_url();?>/images/blank.gif" alt=".:">Offline Update</a></li>
  </ul></li>
 
 
 
 
  
  <li class="menu_close"><a class="first_line" href="?q=22" onClick="return false;"><img src="<?php echo base_url();?>/images/configuration_config.png" alt=".:" width="22" height="22" class="little_icon"><br>
  Settings</a>
  <?php echo ul($settings_management, $attributes);?>
  </li>
  
  
  
  
  
  </ul>
<br />
  <br />
  <br />
  <br />
  <br />
  <br />
  <br />
  <br />
&nbsp;&nbsp;&nbsp;Welcome, <a href="<?php echo base_url();?>users/my_account/"><?php echo $this->session->userdata('fname').' '.$this->session->userdata('username');?></a>&nbsp;<a href="<?php echo base_url();?>login/log_out">Logout</a> | <a href="#" id="check_updates">Check for updates</a><!--| <a href="#" onclick="bug_show_form2('<?php echo $this->session->userdata('username');?>')">Report Bugs</a>--> 
<div id="updates_out"></div>

<script>
$('#check_updates').click(function(){

	$('#updates_out').html("Connecting...");
	$('#updates_out').html("");
	//$('#updates_out').load('<?php echo base_url();?>Client_services/check_updates/' + 12);
		
});
</script>

<script>

$('.menu_close').mouseover(function(){

	adminOpenMenu(this, 'menu_open');
});

$('.menu_close').mouseout(function(){

	adminCloseMenu(this, 'menu_close');
});
</script>