<table width="100%" border="0">
  <tr>
    <td width="10%">&nbsp;</td>
    <td width="67%">&nbsp;</td>
    <td width="23%"><a href="<?php echo base_url();?>settings_manage/property/build_depreciation_save/">Add new</a></td>
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
        <th bgcolor="#D6D6D6"><input name="checkall" type="checkbox" id="checkall" onclick="select_all('employee', '1');" value="1"/>        
        <th bgcolor="#D6D6D6"><strong>Code</strong></th>
        <th bgcolor="#D6D6D6">Description</th>
        <th colspan="2" bgcolor="#D6D6D6">Range</th>
        <th bgcolor="#D6D6D6">Assessment Level (%)</th>
        <th bgcolor="#D6D6D6">Report Code</th>
        <th bgcolor="#D6D6D6"><strong>Status</strong></th>
        <th bgcolor="#D6D6D6"><strong>Action</strong></th>
      </tr>
      <tr class="type-one-header">
        <th width="3%" bgcolor="#D6D6D6"></td>
        
        <th width="7%" bgcolor="#D6D6D6">&nbsp;</th>
        <th width="37%" bgcolor="#D6D6D6">&nbsp;</th>
        <th width="9%" bgcolor="#D6D6D6">Lower Bound</th>
        <th width="9%" bgcolor="#D6D6D6">Upper Bound</th>
        <th width="9%" bgcolor="#D6D6D6">&nbsp;</th>
        <th width="6%" bgcolor="#D6D6D6">&nbsp;</th>
        <th width="9%" bgcolor="#D6D6D6">&nbsp;</th>
        <th width="11%" bgcolor="#D6D6D6">&nbsp;</th>
  </tr>
	  
	 	  <?php foreach( $plants as $row ): ?>
		 <?php $bg 	= $this->Helps->set_line_colors();?>
  <tr bgcolor="<?php echo $bg;?>" onmouseover="this.bgColor = '<?php echo $this->config->item('mouseover_linecolor')?>';" 
    onmouseout ="this.bgColor = '<?php echo $bg;?>';">

        <td bgcolor=""><input name="employee[]" type="checkbox" value="<?php //echo $id;?>" ONCLICK="highlightRow(this,'#ABC7E9');"/></td>
        <td bgcolor=""><?php echo $row->code;?></td>
		<td bgcolor=""><?php echo $row->description;?></td>
		<td align="right"><?php echo $row->range_lower_bound;?></td>
		<td align="right"><?php echo $row->range_upper_bound;?></td>
		<td align="right" bgcolor=""><?php echo $row->value;?></td>
		<td bgcolor=""><?php echo $row->report_code;?></td>
        <td bgcolor=""><?php echo $row->status;?></td>
        <td align="left" bgcolor="">
        <a href="<?php echo base_url();?>settings_manage/property/build_depreciation_save/<?php echo $row->id;?>" class="edit_barangay">Edit</a> | <a href="#" onclick="delete_item('<?php echo $row->username;?>','Delete <?php echo $row->description;?>?', '<?php echo base_url();?>settings_manage/property/build_depreciation_delete/<?php echo $row->id;?>')">Delete</a></td>
        </tr>
		<?php endforeach;?>
        <tr>
          <td>
          <input name="op" type="hidden" id="op" value="1" /></td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
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
        <td></td>
        <td></td>
      </tr>
</table>