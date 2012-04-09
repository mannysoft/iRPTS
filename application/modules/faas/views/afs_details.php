<table width="90%" border="0" cellspacing="0" cellpadding="0" align="center">
  <tr>
    <td align="center" valign="top" class="subtitle"><table width="90%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td colspan=2><a href="<?php echo base_url();?>home/home_page/aso/?keepThis=true&TB_iframe=true&height=570&width=950" title="add a caption to title attribute / or leave blank" class="thickbox">Example 1</a>  <a href="http://localhost/hris/0.4/employees/modal_edit_employee/20065004?keepThis=true&TB_iframe=true&height=570&width=950" title="add a caption to title attribute / or leave blank" class="thickbox">Example 1</a>
<a href="ajaxOverFlow.htm?keepThis=true&TB_iframe=true&height=300&width=500" title="add a caption to title attribute / or leave blank" class="thickbox">Example 2</a>
<a href="iframeModal.html?placeValuesBeforeTB_=savedValues&TB_iframe=true&height=200&width=300&modal=true" title="add a caption to title attribute / or leave blank" class="thickbox">Open iFrame Modal</a>&nbsp;</td>
      </tr>
      <tr>
        <td class="subtitle"> OWNER'S INFORMATION <font class="fields"></td>
        <td align="right" valign="middle"><a href="#down"><img src="images/arrow_down.gif" width="40" height="30" border="0"></a></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td align="center" valign="top" class="title"><img src="images/spacer.gif" width="10" height="15"></td>
  </tr>
  <tr>
    <td align="center" valign="top"><!-- BEGIN OwnerListTable -->
      <table width="90%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td class="mainnav" valign="top"><table width="100%" border="0" cellspacing="1" cellpadding="2" height="100%">
            <!-- BEGIN PersonTable -->
            <tr bgcolor="#F6F6F6">
              <td  width="100">Name </td>
              <td >Address</td>
              <td >Telephone</td>
            </tr>
            <!-- BEGIN PersonList -->
            <tr bgcolor="#F6F6F6" valign="top">
              <td ><a href="javascript: openWin('PersonDetails.php{Session}&personID={personID}&formAction={ownerViewAccess}','popupWindow',50,50,350,400)" class="fields">{fullName}</a></td>
              <td >{address} </td>
              <td >{telephone}</td>
            </tr>
            <!-- END PersonList -->
            <!-- BEGIN PersonDBEmpty -->
            <!-- END PersonDBEmpty -->
            <!-- END PersonTable -->
            <!-- BEGIN CompanyTable -->
            <!-- BEGIN CompanyList -->
            <tr bgcolor="#F6F6F6" valign="top">
              <td ><font color="#0000FF"><a href="javascript: openWin('CompanyDetails.php{Session} &companyID={companyID}&formAction={ownerViewAccess}','popupWindow',50,50,450,500)" class="fields">{companyName}</a></font></td>
              <td >{address}</td>
              <td >{telephone}</td>
            </tr>
            <!-- END CompanyList -->
            <!-- BEGIN OwnerDBEmpty -->
            <tr bgcolor="#F6F6F6">
              <td  valign="top" colspan="3" align="left">none</td>
            </tr>
            <!-- END OwnerDBEmpty -->
            <!-- END CompanyTable -->
          </table></td>
        </tr>
      </table>
      <!-- END OwnerListTable --></td>
  </tr>
  <tr>
    <td align="center" valign="top"><img src="images/spacer.gif" width="10" height="15"></td>
  </tr>
  <tr>
    <td align="center" valign="top" class="subtitle"><table width="90%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td class="subtitle">LOCATION OF PROPERTY</td>
        <td align="right" valign="top"><a href="#top"><img src="images/arrow_up.gif" width="40" height="30" border="0"></a></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td align="center" valign="top"><img src="images/spacer.gif" width="10" height="15"></td>
  </tr>
  <tr>
    <td align="center" valign="top"><table width="90%" border="0" cellspacing="1" cellpadding="2" class="fields">
      <!--tr valign="top" bgcolor="#F6F6F6"> 
                            <td align="left"  colspan="4">- 
                              <a href="javascript: openWin('AFSEncode.php{Session}&formAction=edit','popupWindow',0,0,550,610);" class="fields">enter 
                              values</a></td>
                          </tr-->
      <tr valign="top" bgcolor="#F6F6F6">
        <td align="right" >Location: </td>
        <td ><b>{number} {street}</b><br>
          (Number / Street)</td>
        <td ><b>{barangay}, {district}</b><br>
          (Barangay / District)</td>
        <td ><b>{municipalityCity}, {province}</b><br>
          (Municipality / City / Province)</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td>&nbsp;<br></td>
  </tr>
  <tr>
    <td align="center" valign="top" class="subtitle"><table width="90%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td class="subtitle">RPU IDENTIFICATION NUMBERS</td>
        <td align="right" valign="top"><a href="#top"><img src="images/arrow_up.gif" width="40" height="30" border="0"></a></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td align="center" valign="top"><img src="images/spacer.gif" width="10" height="15"></td>
  </tr>
  <tr>
    <td align="center" valign="top"><table width="90%" border="0" cellspacing="1" cellpadding="4" class="fields">
      <!-- BEGIN RPUIdentificationEncodeLink -->
      <tr bgcolor="#F6F6F6">
        <td align="left" class="fields" colspan=2><table border=0 cellspacing=0 cellpadding=0 width="100%">
          <tr>
            <td class="fields" align=left> - <a href="javascript: openWin('RPUIdentificationEncode.php{Session}&afsID={afsID}','popupWindow',50,50,550,350);">edit Identification Numbers </a></td>
            <td align="right" class="fields">&nbsp;&nbsp; </td>
          </tr>
        </table></td>
      </tr>
      <!-- END RPUIdentificationEncodeLink -->
      <!-- BEGIN RPUIdentificationDBEmpty -->
      <tr bgcolor="#F6F6F6">
        <td align="left"  colspan=2> no identification numbers </td>
      </tr>
      <!-- END RPUIdentificationDBEmpty -->
      <!-- BEGIN RPUIdentificationTable -->
      <!-- BEGIN RPUIdentification -->
      <tr bgcolor="#CCCCCC">
        <td colspan="2"  align="left" nowrap>Identification 
          Numbers </td>
      </tr>
      <tr>
        <td bgcolor="#F6F6F6" width="170"  align=right> ARP Number: </td>
        <td bgcolor="#F6F6F6" ><strong><?php echo $afs->arp_number;?></strong>&nbsp; </td>
      </tr>
      <tr>
        <td bgcolor="#F6F6F6" width="170"  align=right> Property Index Number: </td>
        <td bgcolor="#F6F6F6" ><strong><?php echo $afs->property_index_number;?></strong>&nbsp; </td>
      </tr>
      <tr>
        <td bgcolor="#F6F6F6" width="170"  align=right> Taxability: </td>
        <td bgcolor="#F6F6F6" ><strong><?php echo $afs->taxability;?></strong>&nbsp; </td>
      </tr>
      <tr>
        <td bgcolor="#F6F6F6" width="170"  align=right> Effectivity: </td>
        <td bgcolor="#F6F6F6" ><strong><?php echo $afs->effectivity;?></strong>&nbsp; </td>
      </tr>
      <!-- END RPUIdentification -->
      <!-- END RPUIdentificationTable -->
    </table></td>
  </tr>
  <tr>
    <td>&nbsp;<br></td>
  </tr>
  <!-- BEGIN DeclarationOfProperty -->
  <tr>
    <td align="center" valign="top" class="subtitle"><table width="90%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td class="subtitle">DECLARATION OF PROPERTY</td>
        <td align="right" valign="top"><a href="#top"><img src="images/arrow_up.gif" width="40" height="30" border="0"></a></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td align="center" valign="top"><img src="images/spacer.gif" width="10" height="15"></td>
  </tr>
  <tr>
    <td align="center" valign="top"><table width="90%" border="0" cellspacing="1" cellpadding="2" class="fields">
      <tr bgcolor="#F6F6F6">
        <td align="left" class="fields" colspan=3><table border=0 cellspacing=0 cellpadding=0 width="100%">
          <tr>
            <td class="fields" align=left><!-- BEGIN TDEncodeLink -->
              - <a href="javascript: openWin('TDEncode.php{Session}&tdID={tdID}&afsID={afsID}&propertyType={propertyType}','popupWindow',100,50,600,610);">edit TD</a>
              <!-- END TDEncodeLink --></td>
            <td align="right" class="fields"><input type="button" name="Button" value="Print(Itemized)"
onClick="javascript:location.href='PrintTD.php{Session}&odID={odID}&ownerID={ownerID}&afsID={afsID}&print=true'">
              &nbsp;&nbsp;
              <input type="button" name="Button2" value="Print(Summarized)"
onClick="javascript:location.href='PrintTDsumm.php{Session}&odID={odID}&ownerID={ownerID}&afsID={afsID}&print=true'">
              &nbsp;&nbsp;
              <input type="button" name="Button2" value="Print(2page)" 
onClick="javascript:location.href='PrintTD2page.php{Session}&odID={odID}&ownerID={ownerID}&afsID={afsID}&print=true'">
              &nbsp;&nbsp; </td>
          </tr>
        </table></td>
      </tr>
      <!-- BEGIN TDDBEmpty -->
      <tr bgcolor="#F6F6F6">
        <td align="left"  colspan=3> none </td>
      </tr>
      <!-- END TDDBEmpty -->
      <!-- BEGIN TDTable -->
      <!-- BEGIN TD -->
      <tr bgcolor="#CCCCCC">
        <td colspan="3"  align="left" nowrap>Identification 
          Numbers </td>
      </tr>
      <tr>
        <td  align="right" valign="middle" nowrap bgcolor="#F6F6F6" width="100">&nbsp;</td>
        <td colspan="2" bgcolor="#F6F6F6" ><strong><?php echo $td['tax_declaration_number'];?></strong><strong></strong><br>
          (Tax Declaration Number) <br></td>
      </tr>
      <tr bgcolor="#CCCCCC" align="left">
        <td  colspan="3">Approval</td>
      </tr>
      <tr>
        <td  align="right" bgcolor="#F6F6F6">Provincial 
          Assessor</td>
        <td  bgcolor="#F6F6F6"><strong><?php echo $td['provincial_assessor'];?> </strong></td>
        <td  bgcolor="#F6F6F6"> Date
          <table border="0" cellspacing="0" cellpadding="2" width="100">
            <tr>
              <td  width="33%"><b>{pa_month}</b> (month)</td>
              <td  width="33%"><b>{pa_dayValue}</b> (day)</td>
              <td  width="33%"><b>{pa_yearValue}</b> (year) </td>
            </tr>
          </table></td>
      </tr>
      <tr>
        <td  align="right" bgcolor="#F6F6F6">City/Municipal 
          Assessor</td>
        <td  bgcolor="#F6F6F6"><strong><?php echo $td['city_municipal_assessor'];?></strong></td>
        <td  bgcolor="#F6F6F6"> Date
          <table border="0" cellspacing="0" cellpadding="2" width="100">
            <tr>
              <td  width="33%"><b>{cm_month}</b> (month)</td>
              <td  width="33%"><b>{cm_dayValue}</b> (day)</td>
              <td  width="33%"><b>{cm_yearValue}</b> (year) </td>
            </tr>
          </table></td>
      </tr>
      <tr>
        <td  align="left" nowrap colspan="3" bgcolor="#CCCCCC">&nbsp;</td>
      </tr>
      <tr>
        <td  align="right" valign="middle" nowrap rowspan="4" bgcolor="#F6F6F6">&nbsp;</td>
        <td bgcolor="#F6F6F6"  valign=top><strong><?php echo $td['cancels_td_number'];?></strong><br>
          (Cancels TD Number)</td>
        <td bgcolor="#F6F6F6"  valign=top><strong><?php echo $td['canceled_by_td_number'];?></strong><br>
          (Canceled By TD Number) </td>
      </tr>
      <tr bgcolor="#F6F6F6">
        <td ><strong><?php echo $td['tax_begins_with_the_year'];?> </strong><br>
          (Tax Begins With The Year) </td>
        <td ><!-- 
				   <strong>{ceasesWithTheYear} </strong><br>
				   (Ceases With The Year) --></td>
      </tr>
      <tr bgcolor="#F6F6F6">
        <td ><strong><?php echo $td['entered_in_rpar_for_year'];?> </strong><br>
          (enteredInRPARForBy) </td>
        <td ><strong><?php echo $td['entered_in_rpar_for_by'];?></strong><br>
          (enteredInRPARForYear) </td>
      </tr>
      <tr bgcolor="#F6F6F6" >
        <td><strong><?php echo $td['previous_owner'];?></strong><br>
          (Previous Owner) </td>
        <td ><strong><?php echo $td['previous_assessed_value'];?> </strong><br>
          (Previous Assessed Value) </td>
      </tr>
      <tr bgcolor="#CCCCCC" align="left">
        <td  colspan="3">Memoranda</td>
      </tr>
      <tr bgcolor="#F6F6F6" >
        <td>&nbsp;</td>
        <td colspan=2><strong><?php echo $td['memoranda'];?></strong><br></td>
      </tr>
      <!-- END TD -->
      <!-- END TDTable -->
    </table>
  </tr>
  <!-- END DeclarationOfProperty -->
  <tr>
    <td align="center" valign="top"><img src="images/spacer.gif" width="10" height="15"></td>
  </tr>
  <!-- BEGIN GISTechnicalDescriptionHide -->
  <tr>
    <td align="center" valign="top" class="subtitle"><table width="90%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td class="subtitle">GIS TECHNICAL DESCRIPTION</td>
        <td align="right" valign="top"><a href="#top"><img src="images/arrow_up.gif" width="40" height="30" border="0"></a></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td align="center" valign="top"><img src="images/spacer.gif" width="10" height="15"></td>
  </tr>
  <tr>
    <td align="center" valign="top"><table width="90%" border="0" cellspacing="1" cellpadding="4" class="fields">
      <!-- BEGIN GISTechnicalDescriptionEncodeLink -->
      <tr bgcolor="#F6F6F6">
        <td align="left" class="fields" colspan=6><table border=0 cellspacing=0 cellpadding=0 width="100%">
          <tr>
            <td class="fields" align=left> - <a href="javascript: openWin('GISTechnicalDescriptionEncode.php{Session}&afsID={afsID}','popupWindow',50,50,560,550);">edit GIS Technical Description</a></td>
            <td align="right" class="fields">&nbsp;&nbsp; </td>
          </tr>
        </table></td>
      </tr>
      <!-- END GISTechnicalDescriptionEncodeLink -->
      <!-- BEGIN GISTechnicalDescriptionDBEmpty -->
      <tr bgcolor="#F6F6F6">
        <td align="left"  colspan=6> no GIS technical description </td>
      </tr>
      <!-- END GISTechnicalDescriptionDBEmpty -->
      <!-- BEGIN GISTechnicalDescriptionTable -->
      <!-- BEGIN GISTechnicalDescription -->
      <tr bgcolor="#CCCCCC">
        <td colspan="6"  align="left" nowrap>GISTechnicalDescription</td>
      </tr>
      <tr>
        <td bgcolor="#F6F6F6"  align=left colspan=6> Cadastral Lot Number : <strong>{cadastralLotNumber}</strong></td>
      </tr>
      <tr>
        <td bgcolor="#F6F6F6"  align="center"><strong>pointID</strong>&nbsp; </td>
        <td bgcolor="#F6F6F6"  align="center"><strong>point type</strong>&nbsp; </td>
        <td bgcolor="#F6F6F6"  align="center"><strong>quadrant</strong>&nbsp; </td>
        <td bgcolor="#F6F6F6" ><strong>bearing</strong> (degrees)&nbsp; </td>
        <td bgcolor="#F6F6F6" ><strong>bearing</strong> (minutes)&nbsp; </td>
        <td bgcolor="#F6F6F6" ><strong>distance</strong> (m)&nbsp; </td>
      </tr>
      <!-- END GISTechnicalDescription -->
      <!-- END GISTechnicalDescriptionTable -->
      <!-- BEGIN PointsList -->
      <tr>
        <td bgcolor="#F6F6F6" > {pointID}&nbsp; </td>
        <td bgcolor="#F6F6F6" > {pointType}&nbsp; </td>
        <td bgcolor="#F6F6F6" > {quadrant}&nbsp; </td>
        <td bgcolor="#F6F6F6" > {bearingDeg}&nbsp; </td>
        <td bgcolor="#F6F6F6" > {bearingMin}&nbsp; </td>
        <td bgcolor="#F6F6F6" > {distance}&nbsp; </td>
      </tr>
      <!-- END PointsList -->
    </table></td>
  </tr>
  <tr>
    <td align="center" valign="top"><img src="images/spacer.gif" width="10" height="15"></td>
  </tr>
  <!-- END GISTechnicalDescriptionHide -->
  <!-- BEGIN Land -->
  <tr>
    <td align="center" valign="top" class="subtitle"><table width="90%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td class="subtitle">LAND<a name="#land"></a></td>
        <td align="right" valign="top"><a href="#top"><img src="images/arrow_up.gif" width="40" height="30" border="0"></a></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td align="center" valign="top"><img src="images/spacer.gif" width="10" height="15"></td>
  </tr>
  <tr>
    <td align="center" valign="top"><!-- BEGIN LandTable -->
      <form name="landForm" method="post" action="AFSDetails.php{Session}&type=land">
        <table width="90%" border="0" cellpadding="2" cellspacing="1">
          <tr align="left">
            <td colspan="4" class="fields" bgcolor="#F6F6F6" valign="middle"><!-- BEGIN AddLandLink -->
              - <a href="javascript: openWin('LandEncode.php{Session}','popupWindow',50,50,600,500);" class="fields">add Land</a>
              <!-- END AddLandLink --></td>
            <td align=center bgcolor="#F6F6F6"><input type="button" name="Button2" value="Print" onClick="location.href='PrintLandFAAS.php{Session}&odID={odID}&ownerID={ownerID}&afsID={afsID}&print=true';"></td>
          </tr>
          <tr align="center">
            <td width="15%" bgcolor="#CCCCCC" ><b>Show/Hide<br>
              </b>
              <input type="checkbox" name="landShowHide" value="1" onClick="toggleShowHide('land');"></td>
            <td width="25%" bgcolor="#CCCCCC" ><b>Market Value</b></td>
            <td width="30%" bgcolor="#CCCCCC" ><b>Assessed Value</b></td>
            <td width="15%" bgcolor="#CCCCCC" >&nbsp;</td>
            <td width="15%" bgcolor="#CCCCCC" ><input type="hidden" name="formAction" value="remove">
              <input type="button" name="Submit" value="Remove" onClick="document.landForm.submit();" {removePropertyDisabled}></td>
          </tr>
          <!-- BEGIN LandList -->
          <tr align="left">
            <td   align="center" bgcolor="#F6F6F6" valign="middle"><a name="#land{propertyID}"></a>
              <input type="checkbox" name="landChk{ctr}" value="1" onClick="toggle('land','{propertyID}')"></td>
            <td   align="center" bgcolor="#F6F6F6" valign="middle"> {marketValue} </td>
            <td   align="center" bgcolor="#F6F6F6" valign="middle"> {assessedValue} </td>
            <td  align="center"  bgcolor="#F6F6F6" valign="middle"><!-- BEGIN EditLandLink -->
              <a href="javascript: openWin('LandEncode.php{Session}&propertyID={propertyID}&formAction=edit','popupWindow',50,50,600,500);">Edit</a>
              <!-- END EditLandLink --></td>
            <td  align="center"  bgcolor="#F6F6F6" valign="middle"><input type="checkbox" name="landID[]" value="{propertyID}" {removePropertyDisabled}></td>
          </tr>
          <tr id="landRow{propertyID}" align="left">
            <td colspan="5"  align="center" valign="top" ><table width="100%" border="0" cellspacing="1" cellpadding="5" align="center"  bgcolor="#000000">
              <tr bgcolor="#CCCCCC">
                <td colspan="3"  align="left" nowrap><b>Land 
                  Details </b></td>
              </tr>
              <tr bgcolor="#CCCCCC">
                <td colspan="3"  align="left" nowrap>Identification 
                  Numbers </td>
              </tr>
              <!--
				 <tr> 
				  <td rowspan="2"  align="right" valign="middle" nowrap bgcolor="#F6F6F6" width="100">&nbsp;</td>
				  <td  bgcolor="#F6F6F6"> <b>{arpNumber} 
				   </b><br>
				   (ARP Number) </td>
				  <td  bgcolor="#F6F6F6"> <b>{propertyIndexNumber} 
				   </b><br>
				   (PIN) </td>
				 </tr>
				 -->
              <tr bgcolor="#F6F6F6">
                <td  align="right" valign="middle" nowrap bgcolor="#F6F6F6" width="100">&nbsp;</td>
                <td ><b>{octTctNumber} </b><br>
                  (OCT/TCT Number) </td>
                <td ><b>{surveyNumber}</b> <br>
                  (Survey Number) </td>
              </tr>
              <tr>
                <td  align="left" nowrap colspan="3" bgcolor="#CCCCCC">Boundaries </td>
              </tr>
              <tr>
                <td  align="right" valign="middle" nowrap rowspan="2" bgcolor="#F6F6F6">&nbsp;</td>
                <td bgcolor="#F6F6F6"><b>{north} </b><br>
                  (north) </td>
                <td bgcolor="#F6F6F6"><b>{south} </b><br>
                  (south) </td>
              </tr>
              <tr bgcolor="#F6F6F6">
                <td><b>{east} </b><br>
                  (east) </td>
                <td><b>{west} </b><br>
                  (west) </td>
              </tr>
              <tr>
                <td  align="right" bgcolor="#F6F6F6">Boundary Description</td>
                <td  colspan="2" bgcolor="#F6F6F6" valign=top align=left><b>{boundaryDescription} </b></td>
              </tr>
              <tr>
                <td  bgcolor="#CCCCCC" colspan="3" align="left">Adminisrator</td>
              </tr>
              <tr>
                <td  align="right" rowspan="3" bgcolor="#F6F6F6"> Name</td>
                <td  colspan="2" bgcolor="#F6F6F6"><b>{lastName} </b><br>
                  (lastname) </td>
              </tr>
              <tr bgcolor="#F6F6F6">
                <td  colspan="2"><b>{firstName} </b><br>
                  (firstname) </td>
              </tr>
              <tr bgcolor="#F6F6F6">
                <td  colspan="2"><b>{middleName} </b><br>
                  middlename </td>
              </tr>
              <tr>
                <td  align="right" bgcolor="#F6F6F6" rowspan="3"> Address</td>
                <td  bgcolor="#F6F6F6"><b>{number} </b><br>
                  (number) </td>
                <td  bgcolor="#F6F6F6"><b>{street} </b><br>
                  (street) </td>
              </tr>
              <tr bgcolor="#F6F6F6">
                <td ><b>{barangay}</b> <br>
                  (barangay) </td>
                <td ><b>{district} </b><br>
                  (district) </td>
              </tr>
              <tr bgcolor="#F6F6F6">
                <td ><b>{municipalityCity} </b><br>
                  (municipality/city) </td>
                <td ><b>{province} </b><br>
                  (province) </td>
              </tr>
              <tr>
                <td  align="right" bgcolor="#F6F6F6">ContactNumber</td>
                <td  colspan="2" bgcolor="#F6F6F6"><b>{telephone} </b></td>
              </tr>
              <tr>
                <td  align="right" bgcolor="#F6F6F6">Email</td>
                <td  colspan="2" bgcolor="#F6F6F6"><b>{email} </b></td>
              </tr>
              <tr>
                <td  align="left" bgcolor="#CCCCCC" colspan="3">Land 
                  Appraisal</td>
              </tr>
              <tr>
                <!-- Kind is now known as "Description" -->
                <td  align="right" bgcolor="#F6F6F6">Description</td>
                <td  colspan="2" bgcolor="#F6F6F6"><b> {kind} </b></td>
              </tr>
              <tr>
                <td  align="right" bgcolor="#F6F6F6">Classification</td>
                <td  colspan="2" bgcolor="#F6F6F6"><b> {classification} </b></td>
              </tr>
              <tr>
                <td  align="right" bgcolor="#F6F6F6">Sub-Class</td>
                <td  colspan="2" bgcolor="#F6F6F6"><b> {subClass} </b></td>
              </tr>
              <tr>
                <td  align="right" bgcolor="#F6F6F6">Area</td>
                <td  colspan="2" bgcolor="#F6F6F6"><b> {area} </b>{unit}</td>
              </tr>
              <tr>
                <td  align="right" bgcolor="#F6F6F6">Actual 
                  Use</td>
                <td  colspan="2" bgcolor="#F6F6F6"><b> {actualUse} </b></td>
              </tr>
              <tr>
                <td  align="right" bgcolor="#F6F6F6">Unit 
                  Value</td>
                <td  colspan="2" bgcolor="#F6F6F6"><b> {unitValue} </b></td>
              </tr>
              <tr>
                <td  align="right" bgcolor="#F6F6F6">Market 
                  Value </td>
                <td  colspan="2" bgcolor="#F6F6F6"><b> {marketValue} </b></td>
              </tr>
              <tr align="left">
                <td  bgcolor="#CCCCCC" colspan="3">Value 
                  Adjustments Factor </td>
              </tr>
              <tr>
                <td  align="right" bgcolor="#F6F6F6">Adjustment 
                  Factor </td>
                <td  colspan="2" bgcolor="#F6F6F6"><b> {adjustmentFactor} </b></td>
              </tr>
              <tr>
                <td  align="right" bgcolor="#F6F6F6">% 
                  Adjustment</td>
                <td  colspan="2" bgcolor="#F6F6F6"><b> {percentAdjustment} %</b></td>
              </tr>
              <tr>
                <td  align="right" bgcolor="#F6F6F6">Value 
                  Adjustment</td>
                <td  colspan="2" bgcolor="#F6F6F6"><b> {valueAdjustment} </b></td>
              </tr>
              <tr align="left">
                <td  bgcolor="#CCCCCC" colspan="3">Property 
                  Assessment </td>
              </tr>
              <tr valign="top">
                <td align="right" bgcolor="#F6F6F6" >Adjusted 
                  Market Value</td>
                <td colspan="2" bgcolor="#F6F6F6" ><b> {adjustedMarketValue} </b></td>
              </tr>
              <tr valign="top">
                <td align="right" bgcolor="#F6F6F6" >Assessment 
                  Level </td>
                <td colspan="2" bgcolor="#F6F6F6" ><b> {assessmentLevel} %</b></td>
              </tr>
              <tr valign="top">
                <td align="right" bgcolor="#F6F6F6" >Assessed 
                  Value </td>
                <td colspan="2" bgcolor="#F6F6F6" ><b> {assessedValue} </b></td>
              </tr>
              <!--
				 <tr valign="top"> 
				  <td align="right" bgcolor="#F6F6F6" >Effectivity</td>
				  <td colspan="2" bgcolor="#F6F6F6" ><b> 
				   {effectivity} </b></td>
				 </tr>
				 -->
              <!--
				 <tr valign="top"> 
				  <td align="right" bgcolor="#F6F6F6" >Taxability</td>
				  <td colspan="2" bgcolor="#F6F6F6" ><b> 
				   {taxability} </b></td>
				 </tr>
				 -->
              <tr bgcolor="#CCCCCC" align="left">
                <td  colspan="3">Certification </td>
              </tr>
              <tr>
                <td  align="right" bgcolor="#F6F6F6">Verified 
                  By </td>
                <td  bgcolor="#F6F6F6"><b> {verifiedByName}</b></td>
                <td  bgcolor="#F6F6F6">&nbsp;</td>
              </tr>
              <tr>
                <td  align="right" bgcolor="#F6F6F6">Plottings 
                  By </td>
                <td  bgcolor="#F6F6F6"><b> {plottingsByName}</b></td>
                <td  bgcolor="#F6F6F6">&nbsp;</td>
              </tr>
              <tr>
                <td  align="right" bgcolor="#F6F6F6">Noted 
                  By</td>
                <td  bgcolor="#F6F6F6"><b>{notedByName} </b></td>
                <td  bgcolor="#F6F6F6">&nbsp;</td>
              </tr>
              <tr valign="top">
                <td align="right" bgcolor="#F6F6F6" >Appraised 
                  By </td>
                <td bgcolor="#F6F6F6" ><b>{appraisedByName} </b></td>
                <td bgcolor="#F6F6F6" > Date
                  <table border="0" cellspacing="0" cellpadding="2" width="100">
                    <tr>
                      <td  width="33%"><b>{as_month}</b> (month)</td>
                      <td  width="33%"><b>{as_dayValue}</b> (day)</td>
                      <td  width="33%"><b>{as_yearValue}</b> (year) </td>
                    </tr>
                  </table></td>
              </tr>
              <tr valign="top">
                <td align="right" bgcolor="#F6F6F6" >Recommending 
                  Approval </td>
                <td bgcolor="#F6F6F6" ><b>{recommendingApprovalName}</b></td>
                <td bgcolor="#F6F6F6" > Date
                  <table border="0" cellspacing="0" cellpadding="2" width="100">
                    <tr>
                      <td  width="33%"><b>{re_month}</b> (month)</td>
                      <td  width="33%"><b>{re_dayValue}</b> (day)</td>
                      <td  width="33%"><b>{re_yearValue}</b> (year) </td>
                    </tr>
                  </table></td>
              </tr>
              <tr valign="top">
                <td align="right" bgcolor="#F6F6F6" >Approved 
                  By </td>
                <td bgcolor="#F6F6F6" ><b>{approvedByName} </b></td>
                <td bgcolor="#F6F6F6" > Date
                  <table border="0" cellspacing="0" cellpadding="2" width="100">
                    <tr>
                      <td  width="33%"><b>{av_month}</b> (month)</td>
                      <td  width="33%"><b>{av_dayValue}</b> (day)</td>
                      <td  width="33%"><b>{av_yearValue}</b> (year) </td>
                    </tr>
                  </table></td>
              </tr>
              <tr>
                <td  align="left" bgcolor="#CCCCCC" colspan="3">Memoranda</td>
              </tr>
              <tr>
                <td  align="right" bgcolor="#F6F6F6">&nbsp;</td>
                <td  colspan="2" bgcolor="#F6F6F6"><b>{memoranda} </b></td>
              </tr>
              <tr>
                <td  align="left" bgcolor="#CCCCCC" colspan="3">Misc</td>
              </tr>
              <tr>
                <td  align="right" bgcolor="#F6F6F6">Idle</td>
                <td  colspan="2" bgcolor="#F6F6F6"><b>{idle}</b></td>
              </tr>
              <tr>
                <td  align="right" bgcolor="#F6F6F6">Contested</td>
                <td  colspan="2" bgcolor="#F6F6F6"><b>{contested}</b></td>
              </tr>
            </table></td>
          </tr>
          <!-- END LandList -->
          <!-- BEGIN LandDBEmpty -->
          <tr align="left">
            <td  colspan="5" bgcolor="#F6F6F6" valign="middle">none</td>
          </tr>
          <!-- END LandDBEmpty -->
        </table>
      </form>
      <!-- END LandTable --></td>
  </tr>
  <!-- END Land -->
  <tr>
    <td align="center" valign="top"><img src="images/spacer.gif" width="10" height="15"></td>
  </tr>
  <!-- BEGIN PlantsTrees -->
  <tr>
    <td align="center" valign="top" class="subtitle"><table width="90%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td class="subtitle">PLANTS AND TREES<a name="#plantsTrees" id="#plantsTrees"></a></td>
        <td align="right" valign="top"><a href="#top"><img src="images/arrow_up.gif" width="40" height="30" border="0"></a></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td align="center" valign="top"><img src="images/spacer.gif" width="10" height="15"></td>
  </tr>
  <tr>
    <td align="center" valign="top"><!-- BEGIN PlantsTreesTable -->
      <form name="plantsTreesForm" method="post" action="AFSDetails.php{Session}&type=plantsTrees">
        <table width="90%" border="0" cellpadding="2" cellspacing="1">
          <tr align="left" valign="middle">
            <td colspan="4" class="fields" bgcolor="#F6F6F6"><!-- BEGIN AddPlantsTreesLink -->
              - <a href="javascript: openWin('PlantsTreesEncode.php{Session}&afsID={afsID}','popupWindow',50,50,600,500);" class="fields">add Plants/Trees </a>
              <!-- END AddPlantsTreesLink --></td>
            <td align=center bgcolor="#F6F6F6"><input type="button" name="Button2" value="Print" onClick="location.href='PrintLandFAAS.php{Session}&odID={odID}&ownerID={ownerID}&afsID={afsID}&print=true';"></td>
          </tr>
          <tr align="center" valign="middle" bgcolor="#CCCCCC">
            <td width="15%" ><b>Show/Hide<br>
              </b>
              <input name="plantsTreesShowHide" type="checkbox" id="plantsTreesShowHide" onClick="toggleShowHide('plantsTrees');" value="1"></td>
            <td width="25%" ><b>Market Value</b></td>
            <td width="30%" ><b>Assessed Value</b></td>
            <td width="15%" ><b>&nbsp;</b></td>
            <td width="15%" ><input type="hidden" name="formAction" value="remove">
              <input type="button" name="Submit" value="Remove" onClick="document.plantsTreesForm.submit();" {removePropertyDisabled}></td>
          </tr>
          <!-- BEGIN PlantsTreesList -->
          <tr align="left" valign="middle">
            <td   align="center" bgcolor="#F6F6F6"><a name="#plantsTrees{propertyID}" id="#plantsTrees{propertyID}"></a>
              <input type="checkbox" name="plantsTreesChk{ctr}" value="1" onClick="toggle('plantsTrees','{propertyID}')"></td>
            <td   align="center" bgcolor="#F6F6F6"> {marketValue} </td>
            <td   align="center" bgcolor="#F6F6F6"> {assessedValue} </td>
            <td  align="center"  bgcolor="#F6F6F6"><!-- BEGIN EditPlantsTreesLink -->
              <a href="javascript: openWin('PlantsTreesEncode.php{Session}&afsID={afsID}&propertyID={propertyID}&formAction=edit','popupWindow',50,50,600,500);">Edit</a>
              <!-- END EditPlantsTreesLink --></td>
            <td  align="center"  bgcolor="#F6F6F6"><input type="checkbox" name="plantsTreesID[]" value="{propertyID}" {removePropertyDisabled}></td>
          </tr>
          <tr id="plantsTreesRow{propertyID}" align="left" valign="middle">
            <td colspan="5"  align="center" bgcolor="#F6F6F6" ><table width="100%" border="0" align="center" cellpadding="5" cellspacing="1" bgcolor="#000000" >
              <tr bgcolor="#F6F6F6">
                <td colspan="3"  valign="middle" align="left"><b>PLANTS/TREES 
                  PROPERTY INFORMATION</b></td>
              </tr>
              <tr bgcolor="#CCCCCC">
                <td colspan="3"  align="left" nowrap>Identification 
                  Numbers </td>
              </tr>
              <!--

				 <tr> 
				  <td width="100" rowspan="2" align="right" valign="middle" nowrap bgcolor="#F6F6F6" >&nbsp;</td>
				  <td  bgcolor="#F6F6F6"><strong>{arpNumber}</strong> 
				   <br>
				   (ARP Number) </td>
				  <td  bgcolor="#F6F6F6"><strong>{propertyIndexNumber} 
				   </strong><br>
				   (PIN) </td>
				 </tr>

				 -->
              <tr>
                <td width="100" align="right" valign="middle" nowrap bgcolor="#F6F6F6" >&nbsp;</td>
                <td colspan=2  bgcolor="#F6F6F6"><strong>{surveyNumber}</strong> <br>
                  (Survey Number) </td>
              </tr>
              <tr>
                <td  align="left" bgcolor="#CCCCCC" colspan="3">Location 
                  Details </td>
              </tr>
              <tr>
                <td  align="right" bgcolor="#F6F6F6">landPin</td>
                <td  colspan="2" bgcolor="#F6F6F6"><strong>{landPin} </strong></td>
              </tr>
              <tr>
                <td  bgcolor="#CCCCCC" colspan="3" align="left">Adminisrator</td>
              </tr>
              <tr>
                <td  align="right" rowspan="3" bgcolor="#F6F6F6"><input type="hidden" name="personID" value="{personID}">
                  Name</td>
                <td  colspan="2" bgcolor="#F6F6F6"><strong>{lastName} </strong><br>
                  (lastname) </td>
              </tr>
              <tr bgcolor="#F6F6F6">
                <td  colspan="2"><strong>{firstName} </strong><br>
                  (firstname) </td>
              </tr>
              <tr bgcolor="#F6F6F6">
                <td  colspan="2"><strong>{middleName} </strong><br>
                  middlename </td>
              </tr>
              <tr>
                <td  align="right" bgcolor="#F6F6F6" rowspan="3"><input type="hidden" name="addressID" value="{addressID}">
                  Address</td>
                <td  bgcolor="#F6F6F6"><strong>{number} </strong><br>
                  (number) </td>
                <td  bgcolor="#F6F6F6"><strong>{street} </strong><br>
                  (street) </td>
              </tr>
              <tr bgcolor="#F6F6F6">
                <td ><strong>{barangay} </strong><br>
                  (barangay) </td>
                <td ><strong>{district}</strong> <br>
                  (district) </td>
              </tr>
              <tr bgcolor="#F6F6F6">
                <td ><strong>{municipalityCity} </strong><br>
                  (municipality/city) </td>
                <td ><strong>{province} </strong><br>
                  (province) </td>
              </tr>
              <tr>
                <td  align="right" bgcolor="#F6F6F6">ContactNumber</td>
                <td  colspan="2" bgcolor="#F6F6F6"><strong>{telephone}</strong></td>
              </tr>
              <tr>
                <td  align="right" bgcolor="#F6F6F6">Email</td>
                <td  colspan="2" bgcolor="#F6F6F6"><strong>{email}</strong></td>
              </tr>
              <tr>
                <td  align="left" bgcolor="#CCCCCC" colspan="3">Plants 
                  and Trees Appraisal</td>
              </tr>
              <tr>
                <td  align="right" bgcolor="#F6F6F6">productClass</td>
                <td  colspan="2" bgcolor="#F6F6F6"><strong>{productClass} </strong></td>
              </tr>
              <tr>
                <td  align="right" bgcolor="#F6F6F6">areaPlanted</td>
                <td  colspan="2" bgcolor="#F6F6F6"><strong>{areaPlanted} </strong></td>
              </tr>
              <tr>
                <td  align="right" bgcolor="#F6F6F6">totalNumber</td>
                <td  colspan="2" bgcolor="#F6F6F6"><strong>{totalNumber} </strong></td>
              </tr>
              <tr>
                <td  align="right" bgcolor="#F6F6F6">nonFruitBearing</td>
                <td  colspan="2" bgcolor="#F6F6F6"><strong>{nonFruitBearing} </strong></td>
              </tr>
              <tr>
                <td  align="right" bgcolor="#F6F6F6">fruitBearing</td>
                <td  colspan="2" bgcolor="#F6F6F6"><strong>{fruitBearing} </strong></td>
              </tr>
              <tr>
                <td  align="right" bgcolor="#F6F6F6">age</td>
                <td  colspan="2" bgcolor="#F6F6F6"><strong>{age} </strong></td>
              </tr>
              <tr>
                <td  align="right" bgcolor="#F6F6F6">unitPrice</td>
                <td  colspan="2" bgcolor="#F6F6F6"><strong>{unitPrice} </strong></td>
              </tr>
              <tr align="left">
                <td  bgcolor="#CCCCCC" colspan="3">Value 
                  Computation</td>
              </tr>
              <tr>
                <td  align="right" bgcolor="#F6F6F6">adjustmentFactor</td>
                <td  colspan="2" bgcolor="#F6F6F6"><strong>{adjustmentFactor} </strong></td>
              </tr>
              <tr>
                <td  align="right" bgcolor="#F6F6F6">% Adjustment</td>
                <td  colspan="2" bgcolor="#F6F6F6"><strong>{percentAdjustment}</strong> %</td>
              </tr>
              <tr>
                <td  align="right" bgcolor="#F6F6F6">valueAdjustment</td>
                <td  colspan="2" bgcolor="#F6F6F6"><strong>{valueAdjustment} </strong></td>
              </tr>
              <tr align="left">
                <td  bgcolor="#CCCCCC" colspan="3">Property 
                  Assessment </td>
              </tr>
              <tr>
                <td  align="right" bgcolor="#F6F6F6">Kind</td>
                <td  colspan="2" bgcolor="#F6F6F6"><strong>{kind} </strong></td>
              </tr>
              <tr>
                <td  align="right" bgcolor="#F6F6F6">Actual 
                  Use</td>
                <td  colspan="2" bgcolor="#F6F6F6"><strong>{actualUse} </strong></td>
              </tr>
              <tr>
                <td  align="right" bgcolor="#F6F6F6">Market 
                  Value </td>
                <td  colspan="2" bgcolor="#F6F6F6"><strong>{marketValue} </strong></td>
              </tr>
              <tr>
                <td  align="right" bgcolor="#F6F6F6">Adjusted 
                  Market Value</td>
                <td  colspan="2" bgcolor="#F6F6F6"><strong>{adjustedMarketValue} </strong></td>
              </tr>
              <tr>
                <td  align="right" bgcolor="#F6F6F6">Assessment 
                  Level </td>
                <td  colspan="2" bgcolor="#F6F6F6"><strong>{assessmentLevel} </strong> %</td>
              </tr>
              <tr>
                <td  align="right" bgcolor="#F6F6F6">Assessed 
                  Value </td>
                <td  colspan="2" bgcolor="#F6F6F6"><strong>{assessedValue} </strong></td>
              </tr>
              <!--
				 <tr> 
				  <td  align="right" bgcolor="#F6F6F6">Effectivity</td>
				  <td  colspan="2" bgcolor="#F6F6F6"><strong>{effectivity} 
				   </strong></td>
				 </tr>
				 -->
              <!--
				 <tr> 
				  <td  align="right" bgcolor="#F6F6F6">Taxability</td>
				  <td  colspan="2" bgcolor="#F6F6F6"><strong>{taxability} 
				   </strong> </td>
				 </tr>
				 -->
              <tr align="left" bgcolor="#CCCCCC">
                <td  colspan="3">Certification </td>
              </tr>
              <tr>
                <td  align="right" bgcolor="#F6F6F6">Verified 
                  By </td>
                <td bgcolor="#F6F6F6"><b> {verifiedByName}</b></td>
                <td  bgcolor="#F6F6F6">&nbsp;</td>
              </tr>
              <tr>
                <td  align="right" bgcolor="#F6F6F6">Plottings 
                  By </td>
                <td bgcolor="#F6F6F6"><b> {plottingsByName}</b></td>
                <td  bgcolor="#F6F6F6">&nbsp;</td>
              </tr>
              <tr>
                <td  align="right" bgcolor="#F6F6F6">Noted 
                  By</td>
                <td bgcolor="#F6F6F6"><b>{notedByName} </b></td>
                <td  bgcolor="#F6F6F6">&nbsp;</td>
              </tr>
              <tr valign="top">
                <td align="right" bgcolor="#F6F6F6" >Appraised 
                  By </td>
                <td bgcolor="#F6F6F6"><b>{appraisedByName} </b></td>
                <td bgcolor="#F6F6F6" > Date
                  <table border="0" cellspacing="0" cellpadding="2" width="100">
                    <tr>
                      <td  width="33%"><b>{as_month}</b> (month)</td>
                      <td  width="33%"><b>{as_dayValue}</b> (day)</td>
                      <td  width="33%"><b>{as_yearValue}</b> (year) </td>
                    </tr>
                  </table></td>
              </tr>
              <tr valign="top">
                <td align="right" bgcolor="#F6F6F6" >Recommending 
                  Approval </td>
                <td bgcolor="#F6F6F6"><b>{recommendingApprovalName}</b></td>
                <td bgcolor="#F6F6F6" > Date
                  <table border="0" cellspacing="0" cellpadding="2" width="100">
                    <tr>
                      <td  width="33%"><b>{re_month}</b> (month)</td>
                      <td  width="33%"><b>{re_dayValue}</b> (day)</td>
                      <td  width="33%"><b>{re_yearValue}</b> (year) </td>
                    </tr>
                  </table></td>
              </tr>
              <tr valign="top">
                <td align="right" bgcolor="#F6F6F6" >Approved 
                  By </td>
                <td bgcolor="#F6F6F6"><b>{approvedByName} </b></td>
                <td bgcolor="#F6F6F6" > Date
                  <table border="0" cellspacing="0" cellpadding="2" width="100">
                    <tr>
                      <td  width="33%"><b>{av_month}</b> (month)</td>
                      <td  width="33%"><b>{av_dayValue}</b> (day)</td>
                      <td  width="33%"><b>{av_yearValue}</b> (year) </td>
                    </tr>
                  </table></td>
              </tr>
              <tr>
                <td  align="left" bgcolor="#CCCCCC" colspan="3">Memoranda</td>
              </tr>
              <tr>
                <td  align="right" bgcolor="#F6F6F6">&nbsp;</td>
                <td  colspan="2" bgcolor="#F6F6F6"><b>{memoranda} </b></td>
              </tr>
            </table></td>
          </tr>
          <!-- END PlantsTreesList -->
          <!-- BEGIN PlantsTreesDBEmpty -->
          <tr align="left" valign="middle">
            <td  colspan="5" bgcolor="#F6F6F6">none</td>
          </tr>
          <!-- END PlantsTreesDBEmpty -->
        </table>
      </form>
      <!-- END PlantsTreesTable --></td>
  </tr>
  <!-- END PlantsTrees -->
  <tr>
    <td align="center" valign="top"><img src="images/spacer.gif" width="10" height="15"></td>
  </tr>
  <tr>
    <td align="center" valign="top"><img src="images/spacer.gif" width="10" height="15"></td>
  </tr>
  <!-- BEGIN ImprovementsBuildings -->
  <tr>
    <td align="center" valign="top" class="subtitle"><table width="90%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td class="subtitle">IMPROVEMENTS/BUILDINGS<a name="#improvementsBuildings" id="#improvementsBuildings"></a></td>
        <td align="right" valign="top"><a href="#top"><img src="images/arrow_up.gif" width="40" height="30" border="0"></a></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td align="center" valign="top"><img src="images/spacer.gif" width="10" height="15"></td>
  </tr>
  <tr>
    <td align="center" valign="top"><!-- BEGIN ImprovementsBuildingsTable -->
      <form action="AFSDetails.php{Session}&type=improvementsBuildings" method="post" name="improvementsBuildingsForm" id="improvementsBuildingsForm">
        <table width="90%" border="0" cellpadding="2" cellspacing="1">
          <tr align="left">
            <td colspan="4" class="fields" bgcolor="#F6F6F6" valign="middle"><!-- BEGIN AddImprovementsBuildingsLink -->
              - <a href="javascript: openWin('ImprovementsBuildingsEncode.php{Session}&afsID={afsID}','popupWindow',50,50,600,500);" class="fields">add Improvements / Buildings</a>
              <!-- END AddImprovementsBuildingsLink --></td>
            <td align=center bgcolor="#F6F6F6"><input type="button" name="Button2" value="Print" onClick="location.href='PrintImprovementsBuildingsFAAS.php{Session}&odID={odID}&ownerID={ownerID}&afsID={afsID}&print=true'"></td>
          </tr>
          <tr align="center">
            <td width="15%" bgcolor="#CCCCCC" ><b>Show/Hide<br>
              </b>
              <input name="improvementsBuildingsShowHide" type="checkbox" id="improvementsBuildingsShowHide" onClick="toggleShowHide('improvementsBuildings');" value="1"></td>
            <td width="25%" bgcolor="#CCCCCC" ><b>Market Value</b></td>
            <td width="30%" bgcolor="#CCCCCC" ><b>Assessed Value</b></td>
            <td width="15%" bgcolor="#CCCCCC" ><b>&nbsp;</b></td>
            <td width="15%" bgcolor="#CCCCCC" ><input type="hidden" name="formAction" value="remove">
              <input type="button" name="Submit" value="Remove" onClick="document.improvementsBuildingsForm.submit();" {removePropertyDisabled}></td>
          </tr>
          <!-- BEGIN ImprovementsBuildingsList -->
          <tr valign="middle">
            <td   align="center" bgcolor="#F6F6F6" rowspan="{rowspan}"><a name="#improvementsBuildings{propertyID}" id="#improvementsBuildings{propertyID}"></a>
              <input name="improvementsBuildingsChk{ctr}" type="checkbox" id="improvementsBuildingsChk{ctr}" onClick="toggle('improvementsBuildings','{propertyID}')" value="1"></td>
            <td   align="center" bgcolor="#F6F6F6" rowspan="{rowspan}"> {marketValue} </td>
            <td  align="center" bgcolor="#F6F6F6" > {assessedValue} </td>
            <td  align="center" bgcolor="#F6F6F6" ><!-- BEGIN EditImprovementsBuildingsLink -->
              <a href="javascript: openWin('ImprovementsBuildingsEncode.php{Session}&afsID={afsID}&propertyID={propertyID}&formAction=edit','popupWindow',50,50,600,500);">Edit</a>
              <!-- END EditImprovementsBuildingsLink --></td>
            <td  align="center"  bgcolor="#F6F6F6"><input type="checkbox" name="improvementsBuildingsID[]" value="{propertyID}" {removePropertyDisabled}></td>
          </tr>
          <tr  id="improvementsBuildingsRow{propertyID}" valign="middle">
            <td colspan="6"  align="center" bgcolor="#F6F6F6" ><table width="100%" border="0" align="center" cellpadding="5" cellspacing="1" bgcolor="#333333" >
              <tr bgcolor="#F6F6F6">
                <td colspan="3"  valign="middle" align="left"><b>IMPROVEMENTS/BUILDING 
                  PROPERTY INFORMATION</b></td>
              </tr>
              <!--
					<tr bgcolor="#CCCCCC"> 
					 <td colspan="3"  align="left" nowrap>Identification 
					  Numbers </td>
					</tr>
					<tr> 
					 <td  align="right" valign="middle" nowrap bgcolor="#F6F6F6" width="100">&nbsp;</td>
					 <td  bgcolor="#F6F6F6"><strong>{arpNumber}</strong> 
					  <br>
					  (ARP Number) </td>
					 <td  bgcolor="#F6F6F6"><strong>{propertyIndexNumber}</strong> 
					  <br>
					  (PIN) </td>
					</tr>
					-->
              <tr>
                <td  align="left" bgcolor="#CCCCCC" colspan="3">Location 
                  Details </td>
              </tr>
              <tr>
                <td  align="right" bgcolor="#F6F6F6">landPin</td>
                <td  colspan="2" bgcolor="#F6F6F6"><strong>{landPin} </strong></td>
              </tr>
              <tr>
                <td  bgcolor="#CCCCCC" colspan="3" align="left">Adminisrator</td>
              </tr>
              <tr>
                <td  align="right" rowspan="3" bgcolor="#F6F6F6"><input type="hidden" name="personID" value="">
                  Name</td>
                <td  colspan="2" bgcolor="#F6F6F6"><strong>{lastName}</strong> <br>
                  (lastname) </td>
              </tr>
              <tr bgcolor="#F6F6F6">
                <td  colspan="2"><strong>{firstName}</strong> <br>
                  (firstname) </td>
              </tr>
              <tr bgcolor="#F6F6F6">
                <td  colspan="2"><strong>{middleName}</strong> <br>
                  middlename </td>
              </tr>
              <tr>
                <td  align="right" bgcolor="#F6F6F6" rowspan="3"><input type="hidden" name="addressID" value="{addressID}">
                  Address</td>
                <td  bgcolor="#F6F6F6"><strong>{number}</strong> <br>
                  (number) </td>
                <td  bgcolor="#F6F6F6"><strong>{street}</strong> <br>
                  (street) </td>
              </tr>
              <tr bgcolor="#F6F6F6">
                <td ><strong>{barangay}</strong> <br>
                  (barangay) </td>
                <td ><strong>{district}</strong> <br>
                  (district) </td>
              </tr>
              <tr bgcolor="#F6F6F6">
                <td ><strong>{municipalityCity}</strong> <br>
                  (municipality/city) </td>
                <td ><strong>{province}</strong> <br>
                  (province) </td>
              </tr>
              <tr>
                <td  align="right" bgcolor="#F6F6F6">ContactNumber</td>
                <td  colspan="2" bgcolor="#F6F6F6"><strong>{telephone} </strong></td>
              </tr>
              <tr>
                <td  align="right" bgcolor="#F6F6F6">Email</td>
                <td  colspan="2" bgcolor="#F6F6F6"><strong>{email} </strong></td>
              </tr>
              <tr>
                <td  align="left" bgcolor="#CCCCCC" colspan="3">Structural 
                  Characteristics </td>
              </tr>
              <tr>
                <td  align="right" bgcolor="#F6F6F6">foundation</td>
                <td  colspan="2" bgcolor="#F6F6F6"><strong>{foundation} </strong></td>
              </tr>
              <tr>
                <td  align="right" bgcolor="#F6F6F6">columnsBldg</td>
                <td  colspan="2" bgcolor="#F6F6F6"><strong>{columnsBldg} </strong></td>
              </tr>
              <tr>
                <td  align="right" bgcolor="#F6F6F6">beams</td>
                <td  colspan="2" bgcolor="#F6F6F6"><strong>{beams} </strong></td>
              </tr>
              <tr>
                <td  align="right" bgcolor="#F6F6F6">trussFraming</td>
                <td  colspan="2" bgcolor="#F6F6F6"><strong>{trussFraming} </strong></td>
              </tr>
              <tr>
                <td  align="right" bgcolor="#F6F6F6">roof</td>
                <td  colspan="2" bgcolor="#F6F6F6"><strong>{roof} </strong></td>
              </tr>
              <tr>
                <td  align="right" bgcolor="#F6F6F6">exteriorWalls</td>
                <td  colspan="2" bgcolor="#F6F6F6"><strong>{exteriorWalls} </strong></td>
              </tr>
              <tr>
                <td  align="right" bgcolor="#F6F6F6">flooring</td>
                <td  colspan="2" bgcolor="#F6F6F6"><strong>{flooring} </strong></td>
              </tr>
              <tr>
                <td  align="right" bgcolor="#F6F6F6">doors</td>
                <td  colspan="2" bgcolor="#F6F6F6"><strong>{doors} </strong></td>
              </tr>
              <tr>
                <td  align="right" bgcolor="#F6F6F6">ceiling</td>
                <td  colspan="2" bgcolor="#F6F6F6"><strong>{ceiling} </strong></td>
              </tr>
              <tr>
                <td  align="right" bgcolor="#F6F6F6">structuralTypes</td>
                <td  colspan="2" bgcolor="#F6F6F6"><strong>{structuralTypes} </strong></td>
              </tr>
              <tr>
                <td  align="right" bgcolor="#F6F6F6">buildingClassification</td>
                <td  colspan="2" bgcolor="#F6F6F6"><strong>{buildingClassification} </strong></td>
              </tr>
              <tr>
                <td  align="right" bgcolor="#F6F6F6">buildingPermit</td>
                <td  colspan="2" bgcolor="#F6F6F6"><strong>{buildingPermit} </strong></td>
              </tr>
              <tr>
                <td  align="right" bgcolor="#F6F6F6">buildingAge</td>
                <td  colspan="2" bgcolor="#F6F6F6"><strong>{buildingAge} </strong></td>
              </tr>
              <tr>
                <td  align="right" bgcolor="#F6F6F6">cctNumber</td>
                <td  colspan="2" bgcolor="#F6F6F6"><strong>{cctNumber} </strong></td>
              </tr>
              <tr>
                <td  align="right" bgcolor="#F6F6F6">numberOfStoreys</td>
                <td  colspan="2" bgcolor="#F6F6F6"><strong>{numberOfStoreys} </strong></td>
              </tr>
              <tr>
                <td  align="right" bgcolor="#F6F6F6">windows</td>
                <td  colspan="2" bgcolor="#F6F6F6"><strong>{windows} </strong></td>
              </tr>
              <tr>
                <td  align="right" bgcolor="#F6F6F6">stairs</td>
                <td  colspan="2" bgcolor="#F6F6F6"><strong>{stairs} </strong></td>
              </tr>
              <tr>
                <td  align="right" bgcolor="#F6F6F6">partition</td>
                <td  colspan="2" bgcolor="#F6F6F6"><strong>{partition} </strong></td>
              </tr>
              <tr>
                <td  align="right" bgcolor="#F6F6F6">wallFinish</td>
                <td  colspan="2" bgcolor="#F6F6F6"><strong>{wallFinish} </strong></td>
              </tr>
              <tr>
                <td  align="right" bgcolor="#F6F6F6">electrical</td>
                <td  colspan="2" bgcolor="#F6F6F6"><strong>{electrical} </strong></td>
              </tr>
              <tr>
                <td  align="right" bgcolor="#F6F6F6">toiletAndBath</td>
                <td  colspan="2" bgcolor="#F6F6F6"><strong>{toiletAndBath} </strong></td>
              </tr>
              <tr>
                <td  align="right" bgcolor="#F6F6F6">plumbingSewer</td>
                <td  colspan="2" bgcolor="#F6F6F6"><strong>{plumbingSewer} </strong></td>
              </tr>
              <tr>
                <td  align="right" bgcolor="#F6F6F6">fixtures</td>
                <td  colspan="2" bgcolor="#F6F6F6"><strong>{fixtures} </strong></td>
              </tr>
              <tr>
                <td  align="right" bgcolor="#F6F6F6">dateConstructed</td>
                <td  colspan="2" bgcolor="#F6F6F6"><table border="0" cellspacing="0" cellpadding="2" width="100">
                  <tr>
                    <td  width="33%"><b>{dc_month}</b> (month)</td>
                    <td  width="33%"><b>{dc_dayValue}</b> (day)</td>
                    <td  width="33%"><b>{dc_yearValue}</b> (year) </td>
                  </tr>
                </table></td>
              </tr>
              <tr>
                <td  align="right" bgcolor="#F6F6F6">dateOccupied</td>
                <td  colspan="2" bgcolor="#F6F6F6"><table border="0" cellspacing="0" cellpadding="2" width="100">
                  <tr>
                    <td  width="33%"><b>{do_month}</b> (month)</td>
                    <td  width="33%"><b>{do_dayValue}</b> (day)</td>
                    <td  width="33%"><b>{do_yearValue}</b> (year) </td>
                  </tr>
                </table></td>
              </tr>
              <tr>
                <td  align="right" bgcolor="#F6F6F6">dateCompleted</td>
                <td  colspan="2" bgcolor="#F6F6F6"><table border="0" cellspacing="0" cellpadding="2" width="100">
                  <tr>
                    <td  width="33%"><b>{dm_month}</b> (month)</td>
                    <td  width="33%"><b>{dm_dayValue}</b> (day)</td>
                    <td  width="33%"><b>{dm_yearValue}</b> (year) </td>
                  </tr>
                </table></td>
              </tr>
              <tr>
                <td  align="right" bgcolor="#F6F6F6">areaOfGroundFloor</td>
                <td  colspan="2" bgcolor="#F6F6F6"><strong>{areaOfGroundFloor} </strong></td>
              </tr>
              <tr>
                <!-- "totalArea" is totalBuildingArea -->
                <td  align="right" bgcolor="#F6F6F6">totalArea</td>
                <td  colspan="2" bgcolor="#F6F6F6"><strong>{totalBuildingArea} </strong></td>
              </tr>
              <tr>
                <td  align="right" bgcolor="#F6F6F6">unitValue</td>
                <td  colspan="2" bgcolor="#F6F6F6"><strong>{unitValue} </strong></td>
              </tr>
              <tr align="left">
                <td  bgcolor="#CCCCCC" colspan="3">Value 
                  Computation</td>
              </tr>
              <tr>
                <td  align="right" bgcolor="#F6F6F6">buildingCore</td>
                <td  colspan="2" bgcolor="#F6F6F6"><strong>{buildingCoreAndAdditionalItems} </strong></td>
              </tr>
              <tr>
                <td  align="right" bgcolor="#F6F6F6">AdditionalItems</td>
                <td  colspan="2" bgcolor="#F6F6F6"><strong>{addItems} </strong></td>
              </tr>
              <tr>
                <td  align="right" bgcolor="#F6F6F6">depreciationRate</td>
                <td  colspan="2" bgcolor="#F6F6F6"><strong>{depreciationRate} </strong></td>
              </tr>
              <tr>
                <td  align="right" bgcolor="#F6F6F6">accumulatedDepreciation</td>
                <td  colspan="2" bgcolor="#F6F6F6"><strong>{accumulatedDepreciation} </strong></td>
              </tr>
              <tr align="left">
                <td  bgcolor="#CCCCCC" colspan="3">Property 
                  Assessment </td>
              </tr>
              <tr>
                <td  align="right" bgcolor="#F6F6F6">Kind</td>
                <td  colspan="2" bgcolor="#F6F6F6"><strong>{kind} </strong></td>
              </tr>
              <tr>
                <td  align="right" bgcolor="#F6F6F6">Actual 
                  Use</td>
                <td  colspan="2" bgcolor="#F6F6F6"><strong>{actualUse} </strong></td>
              </tr>
              <tr>
                <td  align="right" bgcolor="#F6F6F6">Market 
                  Value </td>
                <td  colspan="2" bgcolor="#F6F6F6"><strong>{marketValue} </strong></td>
              </tr>
              <tr>
                <td  align="right" bgcolor="#F6F6F6">Adjusted 
                  Market Value</td>
                <td  colspan="2" bgcolor="#F6F6F6"><strong>{adjustedMarketValue} </strong></td>
              </tr>
              <tr>
                <td  align="right" bgcolor="#F6F6F6">Assessment 
                  Level </td>
                <td  colspan="2" bgcolor="#F6F6F6"><strong>{assessmentLevel} </strong></td>
              </tr>
              <tr>
                <td  align="right" bgcolor="#F6F6F6">Assessed 
                  Value </td>
                <td  colspan="2" bgcolor="#F6F6F6"><strong>{assessedValue} </strong></td>
              </tr>
              <!--
					<tr> 
					 <td  align="right" bgcolor="#F6F6F6">Effectivity</td>
					 <td  colspan="2" bgcolor="#F6F6F6"><strong>{effectivity} 
					  </strong></td>
					</tr>
					<tr> 
					 <td  align="right" bgcolor="#F6F6F6">Taxability</td>
					 <td  colspan="2" bgcolor="#F6F6F6"><strong>{taxability} 
					  </strong></td>
					</tr>
					-->
              <tr align="left" bgcolor="#CCCCCC">
                <td  colspan="3">Certification </td>
              </tr>
              <tr bgcolor="#000000">
                <td  align="right" bgcolor="#F6F6F6">Verified 
                  By </td>
                <td bgcolor="#F6F6F6"><b> {verifiedByName}</b></td>
                <td  bgcolor="#F6F6F6">&nbsp;</td>
              </tr>
              <tr bgcolor="#000000">
                <td  align="right" bgcolor="#F6F6F6">Plottings 
                  By </td>
                <td bgcolor="#F6F6F6"><b> {plottingsByName}</b></td>
                <td  bgcolor="#F6F6F6">&nbsp;</td>
              </tr>
              <tr bgcolor="#000000">
                <td  align="right" bgcolor="#F6F6F6">Noted 
                  By</td>
                <td bgcolor="#F6F6F6"><b>{notedByName} </b></td>
                <td  bgcolor="#F6F6F6">&nbsp;</td>
              </tr>
              <tr valign="top" bgcolor="#000000">
                <td align="right" bgcolor="#F6F6F6" >Appraised 
                  By </td>
                <td bgcolor="#F6F6F6"><b>{appraisedByName} </b></td>
                <td bgcolor="#F6F6F6" > Date
                  <table border="0" cellspacing="0" cellpadding="2" width="100">
                    <tr>
                      <td  width="33%"><b>{as_month}</b> (month)</td>
                      <td  width="33%"><b>{as_dayValue}</b> (day)</td>
                      <td  width="33%"><b>{as_yearValue}</b> (year) </td>
                    </tr>
                  </table></td>
              </tr>
              <tr valign="top" bgcolor="#000000">
                <td align="right" bgcolor="#F6F6F6" >Recommending 
                  Approval </td>
                <td bgcolor="#F6F6F6"><b>{recommendingApprovalName}</b></td>
                <td bgcolor="#F6F6F6" > Date
                  <table border="0" cellspacing="0" cellpadding="2" width="100">
                    <tr>
                      <td  width="33%"><b>{re_month}</b> (month)</td>
                      <td  width="33%"><b>{re_dayValue}</b> (day)</td>
                      <td  width="33%"><b>{re_yearValue}</b> (year) </td>
                    </tr>
                  </table></td>
              </tr>
              <tr valign="top" bgcolor="#000000">
                <td align="right" bgcolor="#F6F6F6" >Approved 
                  By </td>
                <td bgcolor="#F6F6F6"><b>{approvedByName} </b></td>
                <td bgcolor="#F6F6F6" > Date
                  <table border="0" cellspacing="0" cellpadding="2" width="100">
                    <tr>
                      <td  width="33%"><b>{av_month}</b> (month)</td>
                      <td  width="33%"><b>{av_dayValue}</b> (day)</td>
                      <td  width="33%"><b>{av_yearValue}</b> (year) </td>
                    </tr>
                  </table></td>
              </tr>
              <tr bgcolor="#000000">
                <td  align="left" bgcolor="#CCCCCC" colspan="3">Memoranda</td>
              </tr>
              <tr bgcolor="#000000">
                <td  align="right" bgcolor="#F6F6F6">&nbsp;</td>
                <td  colspan="2" bgcolor="#F6F6F6"><b>{memoranda} </b></td>
              </tr>
            </table></td>
          </tr>
          <!-- END ImprovementsBuildingsList -->
          <!-- BEGIN ImprovementsBuildingsDBEmpty -->
          <tr bgcolor="#F6F6F6" valign="middle">
            <td  colspan="5" align="left" bgcolor="#F6F6F6"><table width="100%" border="0" cellspacing="2" cellpadding="0">
              <tr>
                <td >none</td>
              </tr>
            </table></td>
          </tr>
          <!-- END ImprovementsBuildingsDBEmpty -->
        </table>
      </form>
      <!-- END ImprovementsBuildingsTable --></td>
  </tr>
  <!-- END ImprovementsBuildings -->
  <tr>
    <td align="center" valign="top"><img src="images/spacer.gif" width="10" height="15"></td>
  </tr>
  <!-- BEGIN Machineries -->
  <tr>
    <td align="center" valign="top" class="subtitle"><table width="90%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td class="subtitle">MACHINERIES<a name="#machineries" id="#machineries"></a></td>
        <td align="right" valign="top"><a href="#top"><img src="images/arrow_up.gif" width="40" height="30" border="0"></a></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td align="center" valign="top"><img src="images/spacer.gif" width="10" height="15"></td>
  </tr>
  <tr>
    <td align="center" valign="top"><!-- BEGIN MachineriesTable -->
      <form action="AFSDetails.php{Session}&type=machineries" method="post" name="machineriesForm" id="machineriesForm">
        <table width="90%" border="0" cellpadding="2" cellspacing="1">
          <tr align="left" valign="middle">
            <td colspan="4" class="fields" bgcolor="#F6F6F6"><!-- BEGIN AddMachineriesLink -->
              - <a href="javascript: openWin('MachineriesEncode.php{Session}&afsID={afsID}','popupWindow',50,50,600,500);" class="fields">add Machinery </a>
              <!-- END AddMachineriesLink --></td>
            <td bgcolor="#F6F6F6" align=center><input type="button" name="Button2" value="Print" onClick="location.href='PrintMachineriesFAAS.php{Session}&odID={odID}&ownerID={ownerID}&afsID={afsID}&print=true'"></td>
          </tr>
          <tr align="center" valign="middle" bgcolor="#CCCCCC">
            <td width="15%" ><b>Show/Hide<br>
              </b>
              <input name="machineriesShowHide" type="checkbox" id="machineriesShowHide" onClick="toggleShowHide('machineries');" value="1"></td>
            <td width="25%" ><b>Market Value</b></td>
            <td width="30%" ><b>Assessed Value</b></td>
            <td width="15%" ><b>&nbsp;</b></td>
            <td width="15%" ><input type="hidden" name="formAction" value="remove">
              <input type="button" name="Submit" value="Remove" onClick="document.machineriesForm.submit();" {removePropertyDisabled}></td>
          </tr>
          <!-- BEGIN MachineriesList -->
          <tr align="left" valign="middle">
            <td rowspan="{rowspan}"  align="center" bgcolor="#F6F6F6" ><a name="#machineries{propertyID}" id="#machineries{propertyID}"></a>
              <input name="machineriesChk{ctr}" type="checkbox" id="machineriesChk{ctr}" onClick="toggle('machineries','{propertyID}')" value="1"></td>
            <td   align="center" bgcolor="#F6F6F6"> {marketValue} </td>
            <td   align="center" bgcolor="#F6F6F6"> {assessedValue} </td>
            <td  align="center"  bgcolor="#F6F6F6"><!-- BEGIN EditMachineriesLink -->
              <a href="javascript: openWin('MachineriesEncode.php{Session}&afsID={afsID}&propertyID={propertyID}&formAction=edit','popupWindow',50,50,600,500);">Edit</a>
              <!-- END EditMachineriesLink --></td>
            <td  align="center"  bgcolor="#F6F6F6"><input type="checkbox" name="machineriesID[]" value="{propertyID}" {removePropertyDisabled}></td>
          </tr>
          <tr  id="machineriesRow{propertyID}" align="left" valign="middle">
            <td colspan="5"  align="center" bgcolor="#F6F6F6" ><table width="100%" border="0" align="center" cellpadding="5" cellspacing="1" bgcolor="#000000" >
              <tr bgcolor="#F6F6F6">
                <td colspan="3"  valign="middle" align="left"><b>MACHINERIES 
                  PROPERTY INFORMATION</b></td>
              </tr>
              <!--
				 <tr bgcolor="#CCCCCC"> 
				  <td colspan="3"  align="left" nowrap>Identification 
				   Numbers </td>
				 </tr>
				 <tr> 
				  <td  align="right" valign="middle" nowrap bgcolor="#F6F6F6" width="100">&nbsp;</td>
				  <td  bgcolor="#F6F6F6"><strong>{arpNumber} 
				   </strong><br>
				   (ARP Number) </td>
				  <td  bgcolor="#F6F6F6"><strong>{propertyIndexNumber} 
				   </strong><br>
				   (PIN) </td>
				 </tr>
				 -->
              <tr>
                <td  align="left" bgcolor="#CCCCCC" colspan="3">Location 
                  Details </td>
              </tr>
              <tr>
                <td  align="right" bgcolor="#F6F6F6">landPin</td>
                <td  colspan="2" bgcolor="#F6F6F6"><strong>{landPin} </strong></td>
              </tr>
              <tr>
                <td  align="right" bgcolor="#F6F6F6">buildingPin</td>
                <td  colspan="2" bgcolor="#F6F6F6"><strong>{buildingPin} </strong></td>
              </tr>
              <tr>
                <td  bgcolor="#CCCCCC" colspan="3" align="left">Adminisrator</td>
              </tr>
              <tr>
                <td  align="right" rowspan="3" bgcolor="#F6F6F6"> Name</td>
                <td  colspan="2" bgcolor="#F6F6F6"><strong>{lastName} </strong><br>
                  (lastname) </td>
              </tr>
              <tr bgcolor="#F6F6F6">
                <td  colspan="2"><strong>{firstName} </strong><br>
                  (firstname) </td>
              </tr>
              <tr bgcolor="#F6F6F6">
                <td  colspan="2"><strong>{middleName} </strong><br>
                  middlename </td>
              </tr>
              <tr>
                <td  align="right" bgcolor="#F6F6F6" rowspan="3"><input type="hidden" name="addressID" value="{addressID}">
                  Address</td>
                <td  bgcolor="#F6F6F6"><strong>{number} </strong><br>
                  (number) </td>
                <td  bgcolor="#F6F6F6"><strong>{street}</strong> <br>
                  (street) </td>
              </tr>
              <tr bgcolor="#F6F6F6">
                <td ><strong>{barangay} </strong><br>
                  (barangay) </td>
                <td ><strong>{district} </strong><br>
                  (district) </td>
              </tr>
              <tr bgcolor="#F6F6F6">
                <td ><strong>{municipalityCity} </strong><br>
                  (municipality/city) </td>
                <td ><strong>{province} </strong><br>
                  (province) </td>
              </tr>
              <tr>
                <td  align="right" bgcolor="#F6F6F6">ContactNumber</td>
                <td  colspan="2" bgcolor="#F6F6F6"><strong>{telephone} </strong></td>
              </tr>
              <tr>
                <td  align="right" bgcolor="#F6F6F6">Email</td>
                <td  colspan="2" bgcolor="#F6F6F6"><strong>{email} </strong></td>
              </tr>
              <tr>
                <td  align="left" bgcolor="#CCCCCC" colspan="3">Machinery 
                  Information</td>
              </tr>
              <tr>
                <td  align="right" bgcolor="#F6F6F6">machineryDescription</td>
                <td  colspan="2" bgcolor="#F6F6F6"><strong>{machineryDescription} </strong></td>
              </tr>
              <tr>
                <td  align="right" bgcolor="#F6F6F6">brand</td>
                <td  colspan="2" bgcolor="#F6F6F6"><strong>{brand} </strong></td>
              </tr>
              <tr>
                <td  align="right" bgcolor="#F6F6F6">modelNumber</td>
                <td  colspan="2" bgcolor="#F6F6F6"><strong>{modelNumber} </strong></td>
              </tr>
              <tr>
                <td  align="right" bgcolor="#F6F6F6">capacity</td>
                <td  colspan="2" bgcolor="#F6F6F6"><strong>{capacity} </strong></td>
              </tr>
              <tr>
                <td  align="right" bgcolor="#F6F6F6">dateAcquired</td>
                <td  colspan="2" bgcolor="#F6F6F6"><table border="0" cellspacing="0" cellpadding="2" width="100">
                  <tr>
                    <td  width="33%"><b>{da_month}</b> (month)</td>
                    <td  width="33%"><b>{da_dayValue}</b> (day)</td>
                    <td  width="33%"><b>{da_yearValue}</b> (year) </td>
                  </tr>
                </table></td>
              </tr>
              <tr>
                <td  align="right" bgcolor="#F6F6F6">conditionWhenAcquired</td>
                <td  colspan="2" bgcolor="#F6F6F6"><strong>{conditionWhenAcquired}</strong></td>
              </tr>
              <tr>
                <td  align="right" bgcolor="#F6F6F6">EconomicLife</td>
                <td  bgcolor="#F6F6F6"><strong>{estimatedEconomicLife} </strong><br>
                  (estimatedEconomicLife) </td>
                <td  bgcolor="#F6F6F6"><strong>{remainingEconomicLife} </strong><br>
                  (remainingEconomicLife) </td>
              </tr>
              <tr>
                <td  align="right" bgcolor="#F6F6F6">dateOfInstallation</td>
                <td  colspan="2" bgcolor="#F6F6F6"><table border="0" cellspacing="0" cellpadding="2" width="100">
                  <tr>
                    <td  width="33%"><b>{di_month}</b> (month)</td>
                    <td  width="33%"><b>{di_dayValue}</b> (day)</td>
                    <td  width="33%"><b>{di_yearValue}</b> (year) </td>
                  </tr>
                </table></td>
              </tr>
              <tr>
                <td  align="right" bgcolor="#F6F6F6">dateOfOperation</td>
                <td  colspan="2" bgcolor="#F6F6F6"><table border="0" cellspacing="0" cellpadding="2" width="100">
                  <tr>
                    <td  width="33%"><b>{do_month}</b> (month)</td>
                    <td  width="33%"><b>{do_dayValue}</b> (day)</td>
                    <td  width="33%"><b>{do_yearValue}</b> (year) </td>
                  </tr>
                </table></td>
              </tr>
              <tr>
                <td  align="right" bgcolor="#F6F6F6">remarks</td>
                <td  colspan="2" bgcolor="#F6F6F6"><strong>{remarks} </strong></td>
              </tr>
              <tr align="left">
                <td  bgcolor="#CCCCCC" colspan="3">Property 
                  Appraisal </td>
              </tr>
              <tr>
                <td  align="right" bgcolor="#F6F6F6">numberOfUnits</td>
                <td  colspan="2" bgcolor="#F6F6F6"><strong>{numberOfUnits} </strong></td>
              </tr>
              <tr>
                <td  align="right" bgcolor="#F6F6F6">acquisitionCost</td>
                <td  colspan="2" bgcolor="#F6F6F6"><strong>{acquisitionCost} </strong></td>
              </tr>
              <tr>
                <td  align="right" bgcolor="#F6F6F6" rowspan="2">Additional
                  Cost</td>
                <td  bgcolor="#F6F6F6"><strong>{freightCost} </strong><br>
                  (frieghtCost) </td>
                <td  bgcolor="#F6F6F6"><strong>{insuranceCost} </strong><br>
                  (insuranceCost) </td>
              </tr>
              <tr>
                <td  bgcolor="#F6F6F6"><strong>{installationCost}</strong> <br>
                  (installationCost) </td>
                <td  bgcolor="#F6F6F6"><strong>{othersCost} </strong><br>
                  (othersCost) </td>
              </tr>
              <tr align="left">
                <td  bgcolor="#CCCCCC" colspan="3">Value 
                  Computation</td>
              </tr>
              <tr>
                <td  align="right" bgcolor="#F6F6F6">depreciation</td>
                <td  colspan="2" bgcolor="#F6F6F6"><strong>{depreciation} </strong></td>
              </tr>
              <tr>
                <td  align="right" bgcolor="#F6F6F6">Total Depreciation</td>
                <td  colspan="2" bgcolor="#F6F6F6"><strong>{totalDepreciation} </strong></td>
              </tr>
              <tr>
                <td  align="right" bgcolor="#F6F6F6">Total Depreciated MarketValue</td>
                <td  colspan="2" bgcolor="#F6F6F6"><strong>{depreciatedMarketValue} </strong></td>
              </tr>
              <tr align="left">
                <td  bgcolor="#CCCCCC" colspan="3">Property 
                  Assessment </td>
              </tr>
              <tr>
                <td  align="right" bgcolor="#F6F6F6">Kind</td>
                <td  colspan="2" bgcolor="#F6F6F6"><strong>{kind} </strong></td>
              </tr>
              <tr>
                <td  align="right" bgcolor="#F6F6F6">Actual 
                  Use</td>
                <td  colspan="2" bgcolor="#F6F6F6"><strong>{actualUse} </strong></td>
              </tr>
              <tr>
                <td  align="right" bgcolor="#F6F6F6">Market 
                  Value </td>
                <td  colspan="2" bgcolor="#F6F6F6"><strong>{marketValue} </strong></td>
              </tr>
              <tr>
                <td  align="right" bgcolor="#F6F6F6">Adjusted 
                  Market Value</td>
                <td  colspan="2" bgcolor="#F6F6F6"><strong>{adjustedMarketValue} </strong></td>
              </tr>
              <tr>
                <td  align="right" bgcolor="#F6F6F6">Assessment 
                  Level </td>
                <td  colspan="2" bgcolor="#F6F6F6"><strong>{assessmentLevel} </strong></td>
              </tr>
              <tr>
                <td  align="right" bgcolor="#F6F6F6">Assessed 
                  Value </td>
                <td  colspan="2" bgcolor="#F6F6F6"><strong>{assessedValue} </strong></td>
              </tr>
              <!--
				 <tr> 
				  <td  align="right" bgcolor="#F6F6F6">Effectivity</td>
				  <td  colspan="2" bgcolor="#F6F6F6"><strong>{effectivity} 
				   </strong> </td>
				 </tr>
				 <tr> 
				  <td  align="right" bgcolor="#F6F6F6">Taxability</td>
				  <td  colspan="2" bgcolor="#F6F6F6"><strong>{taxability} 
				   </strong> </td>
				 </tr>
				 -->
              <tr align="left" bgcolor="#CCCCCC">
                <td  colspan="3">Certification </td>
              </tr>
              <tr bgcolor="#000000">
                <td  align="right" bgcolor="#F6F6F6">Verified 
                  By </td>
                <td bgcolor="#F6F6F6"><b> {verifiedByName}</b></td>
                <td  bgcolor="#F6F6F6">&nbsp;</td>
              </tr>
              <tr bgcolor="#000000">
                <td  align="right" bgcolor="#F6F6F6">Plottings 
                  By </td>
                <td bgcolor="#F6F6F6"><b> {plottingsByName}</b></td>
                <td  bgcolor="#F6F6F6">&nbsp;</td>
              </tr>
              <tr bgcolor="#000000">
                <td  align="right" bgcolor="#F6F6F6">Noted 
                  By</td>
                <td bgcolor="#F6F6F6"><b>{notedByName} </b></td>
                <td  bgcolor="#F6F6F6">&nbsp;</td>
              </tr>
              <tr valign="top" bgcolor="#000000">
                <td align="right" bgcolor="#F6F6F6" >Appraised 
                  By </td>
                <td bgcolor="#F6F6F6"><b>{appraisedByName} </b></td>
                <td bgcolor="#F6F6F6" > Date
                  <table border="0" cellspacing="0" cellpadding="2" width="100">
                    <tr>
                      <td  width="33%"><b>{as_month}</b> (month)</td>
                      <td  width="33%"><b>{as_dayValue}</b> (day)</td>
                      <td  width="33%"><b>{as_yearValue}</b> (year) </td>
                    </tr>
                  </table></td>
              </tr>
              <tr valign="top" bgcolor="#000000">
                <td align="right" bgcolor="#F6F6F6" >Recommending 
                  Approval </td>
                <td bgcolor="#F6F6F6"><b>{recommendingApprovalName}</b></td>
                <td bgcolor="#F6F6F6" > Date
                  <table border="0" cellspacing="0" cellpadding="2" width="100">
                    <tr>
                      <td  width="33%"><b>{re_month}</b> (month)</td>
                      <td  width="33%"><b>{re_dayValue}</b> (day)</td>
                      <td  width="33%"><b>{re_yearValue}</b> (year) </td>
                    </tr>
                  </table></td>
              </tr>
              <tr valign="top" bgcolor="#000000">
                <td align="right" bgcolor="#F6F6F6" >Approved 
                  By </td>
                <td bgcolor="#F6F6F6"><b>{approvedByName} </b></td>
                <td bgcolor="#F6F6F6" > Date
                  <table border="0" cellspacing="0" cellpadding="2" width="100">
                    <tr>
                      <td  width="33%"><b>{av_month}</b> (month)</td>
                      <td  width="33%"><b>{av_dayValue}</b> (day)</td>
                      <td  width="33%"><b>{av_yearValue}</b> (year) </td>
                    </tr>
                  </table></td>
              </tr>
              <tr bgcolor="#000000">
                <td  align="left" bgcolor="#CCCCCC" colspan="3">Memoranda</td>
              </tr>
              <tr bgcolor="#000000">
                <td  align="right" bgcolor="#F6F6F6">&nbsp;</td>
                <td  colspan="2" bgcolor="#F6F6F6"><b>{memoranda} </b></td>
              </tr>
            </table></td>
          </tr>
          <!-- END MachineriesList -->
          <!-- BEGIN MachineriesDBEmpty -->
          <tr align="left" valign="middle">
            <td  colspan="5" bgcolor="#F6F6F6">none</td>
          </tr>
          <!-- END MachineriesDBEmpty -->
        </table>
      </form>
      <!-- END MachineriesTable --></td>
  </tr>
  <!-- END Machineries -->
  <tr>
    <td align="center" valign="top"><img src="images/spacer.gif" width="10" height="15"></td>
  </tr>
  <tr>
    <td align="center" valign="top" class="subtitle"><table width="90%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td class="subtitle">VALUATION<a name="#valuation" id="#valuation"></a></td>
        <td align="right" valign="top"><a href="#top"><img src="images/arrow_up.gif" width="40" height="30" border="0"></a></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td align="center" valign="top"><img src="images/spacer.gif" width="10" height="15"></td>
  </tr>
  <tr>
    <td align="center" valign="top"><table width="90%" border="0" cellspacing="1" cellpadding="2" class="fields">
      <!--tr valign="top" bgcolor="#F6F6F6"> 
                            <td align="left"  colspan="4">- 
                              <a href="javascript: openWin('AFSEncode.php{Session}&formAction=edit','popupWindow',0,0,550,610);" class="fields">enter 
                              values</a></td>
                          </tr-->
      <tr align="center" valign="top" bgcolor="#CCCCCC">
        <td width="25%" >Total Value</td>
        <td width="25%" >Market Value</td>
        <td width="25%" >Assessed Value</td>
      </tr>
      <!-- BEGIN LandTotals -->
      <tr valign="top" bgcolor="#F6F6F6">
        <td align="center" > Land</td>
        <td align="right" >{landTotalMarketValue}</td>
        <td align="right" >{landTotalAssessedValue}</td>
      </tr>
      <!-- END LandTotals -->
      <!-- BEGIN PlantsTreesTotals -->
      <tr valign="top" bgcolor="#F6F6F6">
        <td align="center" >Plants/Trees</td>
        <td align="right" >{plantTotalMarketValue}</td>
        <td align="right" >{plantTotalAssessedValue}</td>
      </tr>
      <!-- END PlantsTreesTotals -->
      <!-- BEGIN ImprovementsBuildingsTotals -->
      <tr valign="top" bgcolor="#F6F6F6">
        <td align="center" >Improvements/Buildings</td>
        <td align="right" >{bldgTotalMarketValue}</td>
        <td align="right" >{bldgTotalAssessedValue}</td>
      </tr>
      <!-- END ImprovementsBuildingsTotals -->
      <!-- BEGIN MachineriesTotals -->
      <tr valign="top" bgcolor="#F6F6F6">
        <td align="center" >Machineries</td>
        <td align="right" >{machTotalMarketValue}</td>
        <td align="right" >{machTotalAssessedValue}</td>
      </tr>
      <!-- END MachineriesTotals -->
      <tr valign="top" bgcolor="#F6F6F6">
        <td align="center" >Total</td>
        <td align="right" ><strong>{totalMarketValue}</strong></td>
        <td align="right" ><strong>{totalAssessedValue}</strong></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td align="left" valign="top">&nbsp;</td>
  </tr>
  <tr>
    <td align="left" valign="top" class="fields">&lt;&lt; <b><a href="ODDetails.php{Session}&odID={odID}">back 
      to RPU Details</a></b><img src="images/spacer.gif" width="10" height="15"></td>
  </tr>
  <tr>
    <td align="center" valign="top"><img src="images/spacer.gif" width="10" height="15"><a name="#down"></a></td>
  </tr>
  <tr>
    <td align="center" valign="top" >Tampering with 
      this system is criminally punishable under Philippine Laws.<br>
      &copy; 
      Republic of the Philippines National Computer Center. All Rights Reserved. </td>
  </tr>
</table>
