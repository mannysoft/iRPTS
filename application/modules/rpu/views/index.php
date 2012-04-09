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
        <td><b>
          <input name="search_key" type="text" id="search_key" value="Search owner or location" />
          <input type="submit" name="button" id="button" value="Go" />
        </b></td>
        <td><b>
          <?php
			  foreach($brgy_rows as $brgy_row)
			  {
				$brgy_opts[$brgy_row->id] = ucwords($brgy_row->description);
			  }
			  $js = 'id= "barangay"';
			  echo form_dropdown('barangay', $brgy_opts, $this->input->post('barangay'), $js);
		   ?>
        </b>          <input type="submit" name="filter" id="filter" value="Filter" /></td>
        <td><a href="<?php echo base_url().'index.php/rpu/save';?>" id="add_rpu">Add new</a></td>
      </tr>
    </table>
    <table width="100%" border="0" class="type-one">
  <tr>
    <th colspan="9" align="left">      <b>
      <input name="op" type="hidden" id="op" value="1" />
    </b></th>
  </tr>
  <tr class="type-one-header">
    <th width="5%" bgcolor="#D6D6D6"><b>ID</b></th>
    <th width="18%" bgcolor="#D6D6D6"><b>Owner</b></th>
    <th width="15%" bgcolor="#D6D6D6">Location</th>
    <th width="8%" bgcolor="#D6D6D6">Land Area</th>
    <th width="6%" bgcolor="#D6D6D6">&nbsp;</th>
    <th width="6%" bgcolor="#D6D6D6">&nbsp;</th>
    <th width="8%" bgcolor="#D6D6D6">&nbsp;</th>
    <th width="6%" bgcolor="#D6D6D6">&nbsp;</th>
  </tr>
  <?php 
  
	$this->load->model('helps');
	
	foreach ($rows as $row) 
	{
		$bg = $this->helps->set_line_colors();
		
		//Get Owner Person/Company
		$o = new Owner_m();
		$o->get_by_id($row->owner_id);
		
		//get person full name
		$person = new Person_m();
		$person->get_by_id($o->person_id);		
		
		//Get person name
		if($person->person_id != '0')
		{
			$owner = strtoupper($person->last_name).', '.$person->first_name.' '.$person->middle_name;
		}
		
		//Get company name
		$c = new Company_m();
		$c->get_by_id($o->company_id);
		if($o->company_id != '0')
		{
			$owner = $c->company_name;
		}

		//Get Address Location		
		$l = new Location_m();
		$l->get_by_od_id($row->id);			
		
		$la = new Location_address_m();
		$la->get_by_id($l->location_address_id);
		
		$b = new Barangay_m();
		$b->get_by_id($la->barangay_id);
		
		$d = new District_m();
		$d->get_by_id($la->district);
			
		$m = new Municipality_city_m();	
		$m->get_by_id($la->municipality_city);
		
		$p = new Province_m();
		$p->get_by_id($la->province);
			
		$address ='';
		if($l->od_id)
		{
			$address = $b->description." ".$d->description." ".$m->description." ".$p->description;
		}
		
		?>
  <tr bgcolor="<?php echo $bg;?>" onmouseover="this.bgColor = '#ABC7E9';this.style.color='#000000';" 
    onmouseout ="this.bgColor = '<?php echo $bg;?>';this.style.color='#000000'">
    <td bgcolor=""><?php echo $row->id;?></td>
    <td bgcolor=""><?php echo ucwords($owner); ?></td>
    <td bgcolor=""><?php echo ucwords($address); ?></td>
    <td bgcolor=""><?php echo $row->land_area;?></td>
    <td bgcolor=""><a href="<?php echo base_url().'rpu/rpu_details/'.$row->id;?>">View</a></td>
    <td bgcolor=""><a href="<?php echo base_url().'rpu/afs_details/'.$row->id;?>">FASS</a></td>
    <td bgcolor=""><a href="<?php echo base_url().'rpu/td_details/'.$row->id;?>">Tax Declaration</a></td>
    <td bgcolor=""><a href="<?php echo base_url().'rpu/rptop_details/'.$row->id;?>">RPTOP</a></td>
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
	$('.std_block').load("<?php echo base_url().'index.php/rpu/rpu_details/';?>" + id);
	return false;
}

$('#add_rpu').click(function(){

	return true;
	
	$('.std_block').load("<?php echo base_url().'index.php/rpu/add_rpu';?>");
	$('#page_name').html("<b>Add RPU</b>");
	
});

$('#search_key').click(function(){

	$(this).val("");
	
});


</script>