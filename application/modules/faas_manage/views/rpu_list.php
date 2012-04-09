<form method="post" action="" id="myform">
<table width="100%" border="0">
      <tr>
        <td width="19%">&nbsp;</td>
        <td width="65%">&nbsp;</td>
        <td width="16%">&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td><strong>
          <input name="search_key" type="text" id="search_key" value="Search owner or location" />
          <input type="submit" name="button" id="button" value="Go" />
        </strong></td>
        <td><strong>
          <?php $js = 'id= "barangay"';echo form_dropdown('barangay', $barangay_options, $barangay_option_selected, $js);?>
        </strong>          <input type="submit" name="filter" id="filter" value="Filter" /></td>
        <td><a href="<?php echo base_url().'index.php/Rpu_Manage/add_rpu';?>" id="add_rpu">Add new</a></td>
      </tr>
    </table>
    <table width="100%" border="0" class="type-one">
  <tr>
    <th colspan="9" align="left">      <strong>
      <input name="op" type="hidden" id="op" value="1" />
    </strong></th>
  </tr>
  <tr class="type-one-header">
    <th width="5%" bgcolor="#D6D6D6"><strong>ID</strong></th>
    <th width="11%" bgcolor="#D6D6D6"><strong>Owner</strong></th>
    <th width="15%" bgcolor="#D6D6D6">Location</th>
    <th width="11%" bgcolor="#D6D6D6">Land Area</th>
    <th width="27%" bgcolor="#D6D6D6">Property</th>
    <th width="6%" bgcolor="#D6D6D6">&nbsp;</th>
    <th width="6%" bgcolor="#D6D6D6">&nbsp;</th>
    <th width="11%" bgcolor="#D6D6D6">&nbsp;</th>
    <th width="8%" bgcolor="#D6D6D6">&nbsp;</th>
  </tr>
  <?php 
  
  $this->load->model('helps');
  
  foreach ($rows as $row) 
{
	 	//bg
		$bg 				= $this->helps->set_line_colors();
		
		//$address =  $row['number'].', '.$row['street'].',  '.
					//$row['barangay'].', '.$row['district'].', '.
					//$row['municipality_city'].', '.$row['province'];
		?>
  <tr bgcolor="<?php echo $bg;?>" onmouseover="this.bgColor = '#ABC7E9';this.style.color='#000000';" 
    onmouseout ="this.bgColor = '<?php echo $bg;?>';this.style.color='#000000'">
    <td bgcolor=""><?php echo $row->id;?></td>
    <td bgcolor=""><?php //echo $row['last_name'].', '.$row['first_name'].' '.$row['middle_name'];?></td>
    <td bgcolor=""><?php //echo $address;?></td>
    <td bgcolor=""><?php //echo $row['land_area'];?></td>
    <td bgcolor="">&nbsp;</td>
    <td bgcolor=""><a href="<?php echo base_url().'rpu_manage/rpu_details/'.$row->id;?>">View</a></td>
    <td bgcolor=""><a href="<?php echo base_url().'rpu_manage/afs_details/'.$row->id;?>">FASS</a></td>
    <td bgcolor=""><a href="<?php echo base_url().'rpu_manage/td_details/'.$row->id;?>">Tax Declaration</a></td>
    <td bgcolor=""><a href="<?php echo base_url().'rpu_manage/rptop_details/'.$row->id;?>">RPTOP</a></td>
  </tr>
  
  <?php
		
		}
	  ?>
    <tr> 
    <td colspan="3" bgcolor=""><?php echo $this->pagination->create_links();?></td>
    <td bgcolor="">&nbsp;</td>
    <td bgcolor="">&nbsp;</td>
    <td bgcolor="">&nbsp;</td>
    <td bgcolor="">&nbsp;</td>
    <td bgcolor="">&nbsp;</td>
    <td bgcolor="">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="9"></td>
  </tr>
</table>
</form>
<script>

function go_to(id)
{
	$('#page_name').html("<b>RPU Details</b>");
	$('.std_block').load("<?php echo base_url().'index.php/Rpu_Manage/rpu_details/';?>" + id);
	return false;
}

$('#add_rpu').click(function(){

	return true;
	
	$('.std_block').load("<?php echo base_url().'index.php/Rpu_Manage/add_rpu';?>");
	$('#page_name').html("<b>Add RPU</b>");
	
});

$('#search_key').click(function(){

	$(this).val("");
	
});


</script>