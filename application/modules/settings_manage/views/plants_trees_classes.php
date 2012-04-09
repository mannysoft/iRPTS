<fieldset class="type-one"><legend>Land Classes</legend>
<table width="100%" border="0">
  <tr>
    <td width="10%">&nbsp;</td>
    <td width="67%">&nbsp;</td>
    <td width="23%"><a href="<?php echo base_url();?>index.php/Settings_manage/add_land_classes/">Add new</a></td>
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
        <th width="6%" bgcolor="#D6D6D6"><input name="checkall" type="checkbox" id="checkall" onClick="select_all('employee', '1');" value="1"/></td>
        <th width="17%" bgcolor="#D6D6D6"><strong>Code</strong></th>
        <th width="17%" bgcolor="#D6D6D6">Description</th>
        <th width="10%" bgcolor="#D6D6D6">Assessment Level</th>
        <th width="21%" bgcolor="#D6D6D6"><strong>Status</strong></th>
        <th width="29%" bgcolor="#D6D6D6"><strong>Action</strong></th>
  </tr>
	  
	  <?php 
	  
	foreach($land_classes as $land_class) 
	{
		
		$bg = $this->Helps->set_line_colors();
		
		?><tr bgcolor="<?php echo $bg;?>" onmouseover="this.bgColor = '#ABC7E9';this.style.color='#000000';" 
    onmouseout ="this.bgColor = '<?php echo $bg;?>';this.style.color='#000000'">
        <td bgcolor=""><input name="employee[]" type="checkbox" value="<?php //echo $id;?>" ONCLICK="highlightRow(this,'#ABC7E9');"/></td>
		<td bgcolor=""><?php echo $land_class['code'];?></td>
		<td bgcolor=""><?php echo $land_class['description'];?></td>
		<td align="right" bgcolor=""><?php echo $land_class['value'];?> %</td>
        <td bgcolor=""><?php echo $land_class['status'];?></td>
        <td align="left" bgcolor="">
        <a href="<?php echo base_url();?>index.php/Settings_manage/edit_land_classes/<?php echo $land_class['land_classes_id'];?>" class="edit_barangay">Edit</a> | <a href="<?php echo base_url();?>index.php/Settings_manage/delete_land_classes/<?php echo $land_class['land_classes_id'];?>" class="delete_land_classes">Delete</a></td>
        </tr>
		<?php
		
		}
	  ?>
        <tr>
          <td colspan="2">
		<select name="action" id="action" onchange="this.form.submit();">
          <option>With Selected:</option>
          <option value="0">Deactivate</option>
		  <option value="1">Activate</option>
        </select>
          <input name="op" type="hidden" id="op" value="1" /></td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
      <tr>
        <td colspan="2">&nbsp;</td>
        <td></td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
</table>
</fieldset>