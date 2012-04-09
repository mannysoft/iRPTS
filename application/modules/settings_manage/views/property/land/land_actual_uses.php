<table width="100%" border="0">
  <tr>
    <td width="10%">&nbsp;</td>
    <td width="67%">&nbsp;</td>
    <td width="23%"><a href="<?php echo base_url();?>settings_manage/property/land_actual_uses_save/">Add new</a></td>
  </tr>
</table>
<table width="100%" border="0">
  <tr>
    <td width="79%">&nbsp;</td>
    <td width="6%"></td>
    <td width="15%">&nbsp;</td>
  </tr>
</table>
<table width="100%" border="0" class="type-one">
      <tr class="type-one-header">
        <th width="1%" bgcolor="#D6D6D6"><input name="checkall" type="checkbox" id="checkall" onClick="select_all('employee', '1');" value="1"/></td>
        
        <th width="18%" bgcolor="#D6D6D6"><strong>Code</strong></th>
        <th width="22%" bgcolor="#D6D6D6">Description</th>
        <th width="16%" bgcolor="#D6D6D6">Assessment Level</th>
        <th width="14%" bgcolor="#D6D6D6">Report Code</th>
        <th width="14%" bgcolor="#D6D6D6"><strong>Status</strong></th>
        <th width="29%" bgcolor="#D6D6D6"><strong>Action</strong></th>
  </tr>
	  
	 	  <?php foreach( $land_actual_use as $row ): ?>
		 <?php $bg 	= $this->Helps->set_line_colors();?>
  <tr bgcolor="<?php echo $bg;?>" onmouseover="this.bgColor = '<?php echo $this->config->item('mouseover_linecolor')?>';" 
    onmouseout ="this.bgColor = '<?php echo $bg;?>';">

        <td bgcolor=""><input name="employee[]" type="checkbox" value="<?php //echo $id;?>" ONCLICK="highlightRow(this,'#ABC7E9');"/></td>
        <td bgcolor=""><?php echo $row->code;?></td>
		<td bgcolor=""><?php echo $row->description;?></td>
		<td align="right"><?php echo $row->value;?> %</td>
		<td bgcolor=""><?php echo $row->report_code;?></td>
        <td bgcolor=""><?php echo $row->status;?></td>
        <td align="left" bgcolor="">
        <a href="<?php echo base_url();?>settings_manage/property/land_actual_uses_save/<?php echo $row->id;?>" class="edit_barangay">Edit</a> | <a href="#" onclick="delete_user('<?php echo $row->username;?>','Delete <?php echo $row->description;?>?', '<?php echo base_url();?>settings_manage/property/land_actual_uses_delete/<?php echo $row->id;?>')">Delete</a></td>
        </tr>
		<?php endforeach;?>
        <tr>
          <td>
		<!--<select name="action" id="action" onchange="this.form.submit();">
          <option>With Selected:</option>
          <option value="0">Deactivate</option>
		  <option value="1">Activate</option>
        </select>-->
          <input name="op" type="hidden" id="op" value="1" /></td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
</table>
<script>
function delete_user(delete_id, msg, url)
{
	var answer = confirm(msg)
	
	if (!answer)
	{
		return false;
	}
	
	window.location = url
}
</script>