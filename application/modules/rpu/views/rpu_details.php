<!--<a href="#" id="back">back</a>-->

<div id="owner_info">
<fieldset><legend>Owner Information</legend>
<table width="100%" border="1" class="type-one">
  <tr>
    <td width="48%"><div id="persons">
      <table width="100%" border="0" class="type-one">
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

	   ?>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <?php 

	  ?>
        <tr>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
      </table>
    </div></td>
    <td width="52%"><table width="100%" border="0" class="type-one">
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
  <table width="100%" border="0" cellspacing="1" cellpadding="2">
    <!-- BEGIN PropertyInfoEncodeLink -->
    <tr valign="top" bgcolor="#F6F6F6">
      <td align="left" colspan="4">- <a href="javascript: openWin('PropertyInfoEncode.php{Session}&amp;formAction=edit','popupWindow',0,0,550,610);">edit Property Information</a></td>
    </tr>
    <!-- END PropertyInfoEncodeLink -->
    <tr valign="top" bgcolor="#F6F6F6">
      <td align="right" rowspan="2">Location: </td>
      <td width="25%" align="left"><br />
        (Number)</td>
      <td width="25%" align="left"><br />
        (Street)</td>
      <td width="25%" align="left"><br />
        (Barangay)</td>
    </tr>
    <tr valign="top" bgcolor="#F6F6F6">
      <td align="left"><br />
        (District)</td>
      <td align="left"><br />
        (Municipality/City) </td>
      <td align="left"><br />
        (Province)</td>
    </tr>
    <tr valign="top" bgcolor="#F6F6F6">
      <td align="right" >House Tag Number:</td>
      <td >&nbsp;</td>
      <td align="right">Land Area:</td>
      <td >&nbsp;</td>
    </tr>
    <tr valign="top" bgcolor="#F6F6F6">
      <td align="right">Lot Number:</td>
      <td >&nbsp;</td>
      <td align="right">Zone Number:</td>
      <td >&nbsp;</td>
    </tr>
    <tr valign="top" bgcolor="#F6F6F6">
      <td align="right">Block Number:</td>
      <td >&nbsp;</td>
      <td align="right">PSD13:</td>
      <td >&nbsp;</td>
    </tr>
    <tr valign="top" bgcolor="#F6F6F6">
      <td align="right">&nbsp;</td>
      <td >&nbsp;</td>
      <td align="right">&nbsp;</td>
      <td >&nbsp;</td>
    </tr>
    <tr valign="top" bgcolor="#F6F6F6">
      <td colspan="2" ><input name="affidavit_of_ownership" type="checkbox" id="affidavit_of_ownership" value="1"/>
        Affidavit of Ownership</td>
      <td align="right">&nbsp;</td>
      <td >&nbsp;</td>
    </tr>
    <tr valign="top" bgcolor="#F6F6F6">
      <td colspan="2" ><input name="barangay_certificate" type="checkbox" id="barangay_certificate" value="1"/>
        Barangay Certificate </td>
      <td align="right">&nbsp;</td>
      <td >&nbsp;</td>
    </tr>
    <tr valign="top" bgcolor="#F6F6F6">
      <td colspan="2" ><input name="land_tagging" type="checkbox" id="land_tagging" value="1"/>
        Land Tagging </td>
      <td align="right">&nbsp;</td>
      <td >&nbsp;</td>
    </tr>
  </table>
</fieldset>
</div>


<div id="history">
<fieldset><legend>History Information</legend>
  <table border="1" width="100%"  class="type-one">
    <tr>
      <td><b>PRECEDING</b></td>
      <td align="center">&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <th><b>OD ID</b></th>
      <th align="center"><b>Transaction Code</b></th>
      <th><b>Owner</b></th>
      <th><b>Location</b></th>
      <th><b>Land Area</b></th>
      <th>&nbsp;</th>
    </tr>
    <!-- BEGIN PrecedingODList -->
    <tr>
      <td bgcolor="#F6F6F6" align="center"><b>{odID}</b>&nbsp; </td>
      <td bgcolor="#F6F6F6" align="center"><b>{transactionCode}</b>&nbsp; </td>
      <td width="170" bgcolor="#F6F6F6" align="left" valign="top"><!-- BEGIN PrecedingODPersonList -->
        <a href="javascript: openWin('PersonDetails.php{Session}&amp;personID={personID}&amp;formAction=viewOnly','popupWindow',300,150,350,400)">{OwnerPerson}</a> <br />
        <!-- END PrecedingODPersonList -->
        <!-- BEGIN PrecedingODCompanyList -->
        <a href="javascript: openWin('CompanyDetails.php{Session}&amp;companyID={companyID}&amp;formAction=viewOnly','popupWindow',300,150,350,400)">{OwnerCompany}</a> <br />
        <!-- END PrecedingODCompanyList -->
        {none} </td>
      <td bgcolor="#F6F6F6" align="left" valign="top"><b>{locationAddress}</b>&nbsp; </td>
      <td bgcolor="#F6F6F6" align="right"><b>{landArea}</b>&nbsp; </td>
      <td align="center" bgcolor="#F6F6F6"><a href="ODDetails.php{Session}&amp;odID={odID}&amp;formAction=view">View &gt;&gt;</a></td>
    </tr>
    <!-- END PrecedingODList -->
    <!-- BEGIN PrecedingODDBEmpty -->
    <tr>
      <td colspan="6" bgcolor="#F6F6F6"> none preceding </td>
    </tr>
    <!-- END PrecedingODDBEmpty -->
  </table>
  <table border="1" width="100%"  class="type-one">
    <tr>
      <td><strong>SUCCEEDING</strong></td>
      <td align="center">&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <th><b>OD ID</b></th>
      <th align="center"><b>Transaction Code</b></th>
      <th><b>Owner</b></th>
      <th><b>Location</b></th>
      <th><b>Land Area</b></th>
      <th>&nbsp;</th>
    </tr>
    <!-- BEGIN PrecedingODList -->
    <tr>
      <td bgcolor="#F6F6F6" align="center"><b>{odID}</b>&nbsp; </td>
      <td bgcolor="#F6F6F6" align="center"><b>{transactionCode}</b>&nbsp; </td>
      <td width="170" bgcolor="#F6F6F6" align="left" valign="top"><!-- BEGIN PrecedingODPersonList -->
        <a href="javascript: openWin('PersonDetails.php{Session}&amp;personID={personID}&amp;formAction=viewOnly','popupWindow',300,150,350,400)">{OwnerPerson}</a> <br />
        <!-- END PrecedingODPersonList -->
        <!-- BEGIN PrecedingODCompanyList -->
        <a href="javascript: openWin('CompanyDetails.php{Session}&amp;companyID={companyID}&amp;formAction=viewOnly','popupWindow',300,150,350,400)">{OwnerCompany}</a> <br />
        <!-- END PrecedingODCompanyList -->
        {none} </td>
      <td bgcolor="#F6F6F6" align="left" valign="top"><b>{locationAddress}</b>&nbsp; </td>
      <td bgcolor="#F6F6F6" align="right"><b>{landArea}</b>&nbsp; </td>
      <td align="center" bgcolor="#F6F6F6"><a href="ODDetails.php{Session}&amp;odID={odID}&amp;formAction=view">View &gt;&gt;</a></td>
    </tr>
    <!-- END PrecedingODList -->
    <!-- BEGIN PrecedingODDBEmpty -->
    <tr>
      <td colspan="6" bgcolor="#F6F6F6"> none succeeding </td>
    </tr>
    <!-- END PrecedingODDBEmpty -->
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