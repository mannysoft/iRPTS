<?php if(!$this->session->userdata('username'))
{
 	redirect(base_url(), 'refresh');
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang=""><head>
	<meta http-equiv="Content-Type" content="text/html; charset=">
	<link href="<?php echo base_url();?>/images/favicon.ico" rel="shortcut icon"><title>Attendance Tracking and Leave Management System <?php echo $this->Settings->get_selected_field('version');?> [Administrator Page]</title>

<link href="<?php echo base_url();?>/css/edo-style.css" rel="stylesheet" type="text/css" >	
<link href="<?php echo base_url();?>/css/style.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url();?>/css/style_form.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url();?>/css/style_table.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url();?>/css/style_layout.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url();?>/css/style_menu_dropdown.css" rel="stylesheet" type="text/css" media="screen,print,handheld,projection">
<link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url();?>/css/calendar-win2k-cold-1.css" title="win2k-cold-1">	

<script language="javascript" src="<?php echo base_url();?>/js/tooltip.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>/js/calendar.js"></script>  
<script type="text/javascript" src="<?php echo base_url();?>/js/calendar-en.js"></script>  
<script type="text/javascript" src="<?php echo base_url();?>/js/calendar-setup.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>/js/row_highlight.js"></script>
<script type="text/JavaScript" src="<?php echo base_url();?>/uploader.js"></script>
<script type="text/JavaScript" src="<?php echo base_url();?>/ajax_view_name.js"></script>
<script type="text/JavaScript" src="<?php echo base_url();?>/js/function.js"></script>
<script type="text/JavaScript" src="<?php echo base_url();?>/js/jquery-1.4.2.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>/js/lib.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>/ajax.js"></script>

<script type="text/javascript">

function disable(form)
{
	//alert("");
	var check1 = form.login_out.value;
	
	
	if(check1==1)
	{	
		form.am_pm.disabled = false
		form.type.disabled = true
		form.check_ampm.disabled = true
		form.login_out.disabled = false
		form.login_out.checked = false
	}
	
	
}

function enable(form)
{
	var check1 = form.check_ampm.value;
	
	if(check1==1)
	{	
		form.am_pm.disabled = true
		form.type.disabled = false
		form.check_ampm.disabled = false
		//form.login_out.disabled = true
		form.check_ampm.checked = false
	}

}

</script>


<!--[if lt IE 7.]>
		<script type="text/javascript" src="./lib/lib.pngfix.js"></script>
	<![endif]--><script type="text/javascript">
		switchToDrowpdown('opened_menu', 'opened_menu_2', 'menu_close');
		</script><link href="css/style_heading.css" rel="stylesheet" type="text/css">
        <style type="text/css">
<!--
#Layer1 {
	position:absolute;
	width:200px;
	height:115px;
	z-index:1;
	left: 342px;
	top: 69px;
}
-->
</style>
<style type="text/css">
.access-only {
		display: none;
}
#employee_image 
{
	background: #DEEF9B;
	border: 1px solid #B5CF4B;
	padding: 5px;
}
</style>


<!--this is use for autocomplete-->

<link rel="stylesheet" href="<?php echo base_url();?>/css/autocomplete.css" type="text/css" media="screen">
<script src="<?php echo base_url();?>/js/jquery.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>/js/dimensions.js" type="text/javascript"></script>
<script src="<?php echo base_url();?>/js/autocomplete.js" type="text/javascript"></script>

</head>
<body><script type="text/javascript" src="<?php echo base_url();?>/js/wz_tooltip.js"></script>
<div id="header" class="layout_header">
		<!--<img src="images/prov'l_logo.jpg" alt="Left logo" width="68" height="68" class="left_logo">--></div>
<div id="menu_over" class="layout_menu_over">
<div>