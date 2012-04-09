<!--<a href="#" id="back">back</a>-->

<div id="owner_info">
<fieldset><legend>Owner Information</legend>
<table width="100%" border="0">
  <tr>
    <td width="48%"><div id="persons">
      <table width="100%" border="0">
        <tr>
          <td><!--<a href="#" id="add_person_owner">Add Owner</a>--></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td width="39%">Person</td>
          <td width="61%">&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td>Name</td>
        </tr>
        <?php 
	   foreach ($persons as $person_id)
	   {
		   $this->Person->fields = array('id', 'first_name', 'middle_name', 'last_name');
		
			$owner = $this->Person->get_person_name($person_id);
	   ?>
        <tr>
          <td>&nbsp;</td>
          <td><?php echo $owner['last_name'].', '.$owner['first_name'].' '.$owner['middle_name'];?></td>
        </tr>
        <?php 
	   }
	  ?>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
      </table>
    </div></td>
    <td width="52%"><table width="100%" border="0">
      <tr>
        <td>Company/Group</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
    </table></td>
    </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    </tr>
</table>
</fieldset>
</div>

<div id="property_info">
<fieldset><legend>Property Information</legend>
  <table width="100%" border="0" cellspacing="1" cellpadding="2" class="fields">
    <!-- BEGIN PropertyInfoEncodeLink -->
    <tr valign="top" bgcolor="#F6F6F6">
      <td align="left" class="fileds_comment" colspan="4">- <a href="javascript: openWin('PropertyInfoEncode.php{Session}&amp;formAction=edit','popupWindow',0,0,550,610);" class="fields">edit Property Information</a></td>
    </tr>
    <!-- END PropertyInfoEncodeLink -->
    <tr valign="top" bgcolor="#F6F6F6">
      <td align="right" class="fileds_comment" rowspan="2">Location: </td>
      <td class="fileds_comment" width="25%" align="left"><b><?php echo $location['number'];?></b><br />
        (Number)</td>
      <td class="fileds_comment" width="25%" align="left"><b><?php echo $location['street'];?></b><br />
        (Street)</td>
      <td class="fileds_comment" width="25%" align="left"><b><?php echo $barangay_name;?></b><br />
        (Barangay)</td>
    </tr>
    <tr valign="top" bgcolor="#F6F6F6">
      <td class="fileds_comment" align="left"><b><?php echo $district_name;?></b><br />
        (District)</td>
      <td class="fileds_comment" align="left"><b><?php echo $municipality_city;?></b><br />
        (Municipality/City) </td>
      <td class="fileds_comment" align="left"><b><?php echo $province;?></b><br />
        (Province)</td>
    </tr>
    <tr valign="top" bgcolor="#F6F6F6">
      <td align="right" class="fileds_comment">House Tag Number:</td>
      <td class="fileds_comment"><b><?php echo $od_details['house_tag_number'];?></b></td>
      <td class="fileds_comment" align="right">Land Area:</td>
      <td class="fileds_comment"><b><?php echo $od_details['land_area'];?></b></td>
    </tr>
    <tr valign="top" bgcolor="#F6F6F6">
      <td class="fileds_comment" align="right">Lot Number:</td>
      <td class="fileds_comment"><b><?php echo $od_details['lot_number'];?></b></td>
      <td class="fileds_comment" align="right">Zone Number:</td>
      <td class="fileds_comment"><b><?php echo $od_details['zone_number'];?></b></td>
    </tr>
    <tr valign="top" bgcolor="#F6F6F6">
      <td class="fileds_comment" align="right">Block Number:</td>
      <td class="fileds_comment"><b><?php echo $od_details['block_number'];?></b></td>
      <td class="fileds_comment" align="right">PSD13:</td>
      <td class="fileds_comment"><b><?php echo $od_details['psd13'];?></b></td>
    </tr>
    <tr valign="top" bgcolor="#F6F6F6">
      <td class="fileds_comment" align="right">&nbsp;</td>
      <td class="fileds_comment">&nbsp;</td>
      <td class="fileds_comment" align="right">&nbsp;</td>
      <td class="fileds_comment">&nbsp;</td>
    </tr>
    <tr valign="top" bgcolor="#F6F6F6">
      <td colspan="2" ><input name="affidavit_of_ownership" type="checkbox" id="affidavit_of_ownership" value="1" <?php echo $affidavit_of_ownership;?>/>
        Affidavit of Ownership</td>
      <td class="fileds_comment" align="right">&nbsp;</td>
      <td class="fileds_comment">&nbsp;</td>
    </tr>
    <tr valign="top" bgcolor="#F6F6F6">
      <td colspan="2" ><input name="barangay_certificate" type="checkbox" id="barangay_certificate" value="1" <?php echo $barangay_certificate;?>/>
        Barangay Certificate </td>
      <td class="fileds_comment" align="right">&nbsp;</td>
      <td class="fileds_comment">&nbsp;</td>
    </tr>
    <tr valign="top" bgcolor="#F6F6F6">
      <td colspan="2" ><input name="land_tagging" type="checkbox" id="land_tagging" value="1" <?php echo $land_tagging;?>/>
        Land Tagging </td>
      <td class="fileds_comment" align="right">&nbsp;</td>
      <td class="fileds_comment">&nbsp;</td>
    </tr>
  </table>
</fieldset>
</div>


<div id="history">
<fieldset><legend>History Information</legend>
  <table border="0" width="100%" cellspacing="1" cellpadding="4">
    <tr bgcolor="#dddddd">
      <td class="fields" nowrap="nowrap"><b>PRECEDING</b></td>
      <td class="fileds_comment" align="center">&nbsp;</td>
      <td class="fields">&nbsp;</td>
      <td class="fields">&nbsp;</td>
      <td class="fields" nowrap="nowrap">&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr bgcolor="#dddddd">
      <td class="fields" nowrap="nowrap"><b>OD ID</b></td>
      <td class="fileds_comment" align="center"><b>Transaction<br />
        Code</b></td>
      <td class="fields"><b>Owner</b></td>
      <td class="fields"><b>Location</b></td>
      <td class="fields" nowrap="nowrap"><b>Land Area</b></td>
      <td>&nbsp;</td>
    </tr>
    <!-- BEGIN PrecedingODList -->
    <tr>
      <td class="fileds_comment" bgcolor="#F6F6F6" align="center"><b>{odID}</b>&nbsp; </td>
      <td class="fields" bgcolor="#F6F6F6" align="center"><b>{transactionCode}</b>&nbsp; </td>
      <td width="170" class="fileds_comment" bgcolor="#F6F6F6" align="left" valign="top"><!-- BEGIN PrecedingODPersonList -->
        <a href="javascript: openWin('PersonDetails.php{Session}&amp;personID={personID}&amp;formAction=viewOnly','popupWindow',300,150,350,400)" class="fields">{OwnerPerson}</a> <br />
        <!-- END PrecedingODPersonList -->
        <!-- BEGIN PrecedingODCompanyList -->
        <a href="javascript: openWin('CompanyDetails.php{Session}&amp;companyID={companyID}&amp;formAction=viewOnly','popupWindow',300,150,350,400)" class="fields">{OwnerCompany}</a> <br />
        <!-- END PrecedingODCompanyList -->
        {none} </td>
      <td class="fileds_comment" bgcolor="#F6F6F6" align="left" valign="top"><b>{locationAddress}</b>&nbsp; </td>
      <td class="fileds_comment" bgcolor="#F6F6F6" align="right"><b>{landArea}</b>&nbsp; </td>
      <td class="fileds_comment" align="center" bgcolor="#F6F6F6" nowrap="nowrap"><a href="ODDetails.php{Session}&amp;odID={odID}&amp;formAction=view">View &gt;&gt;</a></td>
    </tr>
    <!-- END PrecedingODList -->
    <!-- BEGIN PrecedingODDBEmpty -->
    <tr>
      <td class="fileds_comment" colspan="6" bgcolor="#F6F6F6"> none preceding </td>
    </tr>
    <!-- END PrecedingODDBEmpty -->
  </table>
  <table border="0" width="100%" cellspacing="1" cellpadding="4">
    <tr bgcolor="#dddddd">
      <td class="fields" nowrap="nowrap"><b>SUCCEEDING</b></td>
      <td class="fileds_comment" align="center">&nbsp;</td>
      <td class="fields">&nbsp;</td>
      <td class="fields">&nbsp;</td>
      <td class="fields" nowrap="nowrap">&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr bgcolor="#dddddd">
      <td class="fields" nowrap="nowrap"><b>OD ID</b></td>
      <td class="fileds_comment" align="center"><b>Transaction<br />
        Code</b></td>
      <td class="fields"><b>Owner</b></td>
      <td class="fields"><b>Location</b></td>
      <td class="fields" nowrap="nowrap"><b>Land Area</b></td>
      <td>&nbsp;</td>
    </tr>
    <!-- BEGIN SucceedingODList -->
    <tr>
      <td class="fileds_comment" bgcolor="#F6F6F6" align="center"><b>{odID}</b>&nbsp; </td>
      <td class="fields" bgcolor="#F6F6F6" align="center"><b>{transactionCode}</b>&nbsp; </td>
      <td width="170" class="fileds_comment" bgcolor="#F6F6F6" align="left" valign="top"><!-- BEGIN SucceedingODPersonList -->
        <a href="javascript: openWin('PersonDetails.php{Session}&amp;personID={personID}&amp;formAction=viewOnly','popupWindow',300,150,350,400)" class="fields">{OwnerPerson}</a> <br />
        <!-- END SucceedingODPersonList -->
        <!-- BEGIN SucceedingODCompanyList -->
        <a href="javascript: openWin('CompanyDetails.php{Session}&amp;companyID={companyID}&amp;formAction=viewOnly','popupWindow',300,150,350,400)" class="fields">{OwnerCompany}</a> <br />
        <!-- END SucceedingODCompanyList -->
        {none} </td>
      <td class="fileds_comment" bgcolor="#F6F6F6" align="left" valign="top"><b>{locationAddress}</b>&nbsp; </td>
      <td class="fileds_comment" bgcolor="#F6F6F6" align="right"><b>{landArea}</b>&nbsp; </td>
      <td class="fileds_comment" align="center" bgcolor="#F6F6F6" nowrap="nowrap"><a href="ODDetails.php{Session}&amp;odID={odID}&amp;formAction=view">View &gt;&gt;</a></td>
    </tr>
    <!-- END SucceedingODList -->
    <!-- BEGIN SucceedingODDBEmpty -->
    <tr>
      <td class="fileds_comment" colspan="6" bgcolor="#F6F6F6"> none succeeding </td>
    </tr>
    <!-- END SucceedingODDBEmpty -->
  </table>
  <p>&nbsp;</p>
</fieldset>
</div>
<script>
$('#back').click(function(){

	$('.std_block').load("<?php echo base_url().'index.php/Rpu_Manage/add_rpu';?>");
	$('#page_name').html("<b>Add RPU</b>");
	
});

$('#add_person_owner').click(function(){

	$('#persons').load("<?php echo base_url().'index.php/ajax/sample2';?>");
	
});
</script>