<form id="myform" method="post" action="" target="" enctype="multipart/form-data">
<table width="100%" border="0">
  <tr>
    <td width="88%"><strong>User ID:</strong>
      <input name="username" type="text" id="username" class="ilaw" onfocus="this.style.margin = '0'; this.style.borderWidth = '2px'; this.style.backgroundColor = '#FFFFFF';" onblur="this.style.margin = '1px'; this.style.borderWidth = '1px'; this.style.backgroundColor = '#E9F0F5';"/>
      <input name="search_button" type="submit" id="search_button" value="Search" class="button"/>
      <div id="added"></div></td>
    <td width="1%">&nbsp;</td>
    <td width="11%"><a href="<?php echo base_url();?>index.php/User_Manage/add_user">Add user</a> </td>
  </tr>
</table>

<table width="100%" border="0" class="type-one">
      <tr class="type-one-header">
        <th width="2%" scope="col"><input name="checkall" type="checkbox" id="checkall" onClick="select_all('user', '1');" value="1"/></th>
        <th width="11%" scope="col"><strong>User ID.</strong></th>
        <th width="23%" scope="col"><strong>Employee Name</strong></th>
        <th width="22%" scope="col"><strong>Department / Office</strong></th>
        <th width="19%" scope="col"><strong>Status</strong></th>
        <th width="10%" scope="col"><strong>Position</strong><input name="op" type="hidden" id="op" value="1" /></th>
        <th width="13%" scope="col"><strong>Action</strong></th>
  </tr>
	  
	  <?php
			
	foreach($users as $row)
	{
		$user_id = $row['user_id'];
		$fname = $row['fname'];
		$mname = $row['mname'];
		$lname = $row['lname'];
		$username	   = $row['username'];
		$office_id	   = $row['office_id'];
		$status	   = $row['stat'];
		$user_type =$row['user_type'];
		
		$user_type = $this->User_type->get_user_type($user_type);
		
		//get the office name
		$office_name = $this->Office->get_office_name($office_id);
		
		$bg 	= $this->Helps->set_line_colors();
		
		if($status==1)
		{
			$status='Active';
		}
		
		else{
			$status='Not Active';
		}
		
		
		?><tr bgcolor="<?php echo $bg;?>" onmouseover="this.bgColor = '#ABC7E9';this.style.color='#000000';" 
    onmouseout ="this.bgColor = '<?php echo $bg;?>';this.style.color='#000000'">
        <td bgcolor=""><input name="user[]" type="checkbox" value="<?php echo $username;?>" ONCLICK="highlightRow(this,'#ABC7E9');"/></td>
		<td bgcolor=""><?php echo $username;?></td>
        <td bgcolor=""><strong><?php echo $fname.' '.$mname.' '.$lname;?></strong></td>
        <td bgcolor=""><?php echo $office_name;?></td>
        <td bgcolor=""><?php echo $status;?></td>
        <td bgcolor=""><?php echo $user_type;?></td>
        <td bgcolor=""><?php //if($this->session->userdata('user_type')==1){?>
          <a href="<?php echo base_url();?>index.php/User_Manage/edit_user/<?php echo $username;?>">Edit</a> | 
		  <a href="#" onclick="delete_user('<?php echo $username;?>','Delete User <?php echo $lname.', '.$fname?>?')">Delete</a>
          <?php //}?>
        </td>
        </tr>
		<?php
		
		}
	  ?>
      <tr>
        <td colspan="7"><select name="action" id="action" onchange="this.form.submit();">
          <option>With Selected:</option>
          <option value="0">Deactivate</option>
		  <option value="1">Activate</option>
        </select>
          <input name="op" type="hidden" id="op" value="1" /></td>
  </tr>
</table>
</form>