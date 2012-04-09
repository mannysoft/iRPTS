<table width="836" height="375" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td width="836" align="left" valign="top"><!-- BEGIN RPTOPTable -->
      <table width="100%" border="0" cellspacing="0" cellpadding="0" align="center">
        <tr>
          <td align="center" valign="top" class="subtitle"><table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td class="subtitle">OWNER'S INFORMATION <br /></td>
              <td align="right" valign="top"><a href="#top"><img src="images/arrow_down.gif" width="40" height="30" border="0" /></a></td>
            </tr>
          </table></td>
        </tr>
        <tr>
          <td align="center" valign="top"><!-- BEGIN OwnerListTable -->
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td class="mainnav" valign="top"><table width="100%" border="0" cellspacing="1" cellpadding="2" height="100%">
                  <!-- BEGIN PersonTable -->
                  <tr bgcolor="#F6F6F6">
                    <td class="fileds_comment" width="111">Name </td>
                    <td width="273" class="fileds_comment">Address</td>
                    <td width="763" class="fileds_comment">Telephone</td>
                  </tr>
                  <!-- BEGIN PersonList -->
                  <tr bgcolor="#F6F6F6" valign="top">
                    <td class="fields">{fullName} </td>
                    <td class="fileds_comment">{address} </td>
                    <td class="fileds_comment">{telephone}</td>
                  </tr>
                  <!-- END PersonList -->
                  <!-- BEGIN PersonDBEmpty -->
                  <!-- END PersonDBEmpty -->
                  <!-- END PersonTable -->
                  <!-- BEGIN CompanyTable -->
                  <!-- BEGIN CompanyList -->
                  <tr bgcolor="#F6F6F6" valign="top">
                    <td class="fields">{companyName} </td>
                    <td class="fileds_comment">{address}</td>
                    <td class="fileds_comment">{telephone}</td>
                  </tr>
                  <!-- END CompanyList -->
                  <!-- BEGIN OwnerDBEmpty -->
                  <tr bgcolor="#F6F6F6">
                    <td class="fileds_comment" valign="top" colspan="3" align="left">none</td>
                  </tr>
                  <!-- END OwnerDBEmpty -->
                  <!-- END CompanyTable -->
                </table></td>
              </tr>
            </table>
            <!-- END OwnerListTable --></td>
        </tr>
        <tr>
          <td align="center" valign="top"><img src="images/spacer.gif" width="10" height="15" /></td>
        </tr>
        <tr>
          <td align="center" valign="top" class="subtitle"><table width="100%" border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td class="subtitle">TD DETAILS<a name="#td" id="#td"></a> <br /></td>
              <td align="right" valign="top"><a href="#top"><img src="images/arrow_up.gif" width="40" height="30" border="0" /></a></td>
            </tr>
          </table></td>
        </tr>
        <tr>
          <td align="center" valign="top"><img src="images/spacer.gif" width="10" height="15" /></td>
        </tr>
        <tr>
          <td align="center" valign="top"><!-- BEGIN TDTable -->
            <table width="100%" border="0" cellpadding="2" cellspacing="1">
              <tr align="center">
                <td bgcolor="#CCCCCC" class="fileds_comment"><font size="2"><b>TD Number</b></font></td>
                <td bgcolor="#CCCCCC" class="fileds_comment"><font size="2"><b>Property Index Number </b></font></td>
                <td bgcolor="#CCCCCC" class="fileds_comment"><font size=2><b>Assessment Value</b></td>
              </tr>
              <!-- BEGIN TDList -->
              <tr align="left">
                <td class="fileds_comment"  align="center" bgcolor="#F6F6F6" valign="middle"><font size="2">{tdNumber}</font></td>
                <td class="fileds_comment"  align="right" bgcolor="#F6F6F6" valign="middle"><font size="2">{propertyIndexNumber}</font></td>
                <td  align="right" class="fileds_comment" bgcolor="#F6F6F6" valign="middle"><font size="2">{assessedValue}</font></td>
              </tr>
              <tr id="tdRow{ctr}" align="left">
                <td colspan="3"  align="center" valign="top" class="fileds_comment"><table width="100%" border="0" cellspacing="1" cellpadding="5" align="center" class="fileds_comment" bgcolor="#000000">
                  <!-- BEGIN Land -->
                  <tr bgcolor="#CCCCCC">
                    <td colspan="3" class="fileds_comment" align="left" nowrap="nowrap"><b>Land
                      Details </b></td>
                  </tr>
                  <tr bgcolor="#CCCCCC">
                    <td colspan="3" class="fileds_comment" align="left" nowrap="nowrap">Identification
                      Numbers </td>
                  </tr>
                  <tr>
                    <td rowspan="2" class="fileds_comment" align="right" valign="middle" nowrap="nowrap" bgcolor="#F6F6F6" width="100">&nbsp;</td>
                    <td class="fileds_comment" bgcolor="#F6F6F6"><b>{arpNumber} </b><br />
                      (ARP Number) </td>
                    <td class="fileds_comment" bgcolor="#F6F6F6"><b>{propertyIndexNumber} </b><br />
                      (PIN) </td>
                  </tr>
                  <tr bgcolor="#F6F6F6">
                    <td class="fileds_comment"><b>{octTctNumber} </b><br />
                      (OCT/TCT Number) </td>
                    <td class="fileds_comment"><b>{surveyNumber}</b> <br />
                      (Survey Number) </td>
                  </tr>
                  <tr>
                    <td class="fileds_comment" align="left" nowrap="nowrap" colspan="3" bgcolor="#CCCCCC">Boundaries </td>
                  </tr>
                  <tr>
                    <td class="fileds_comment" align="right" valign="middle" nowrap="nowrap" rowspan="2" bgcolor="#F6F6F6">&nbsp;</td>
                    <td bgcolor="#F6F6F6"><b>{north} </b><br />
                      (north) </td>
                    <td bgcolor="#F6F6F6"><b>{south} </b><br />
                      (south) </td>
                  </tr>
                  <tr bgcolor="#F6F6F6">
                    <td><b>{east} </b><br />
                      (east) </td>
                    <td><b>{west} </b><br />
                      (west) </td>
                  </tr>
                  <tr>
                    <td class="fileds_comment" bgcolor="#CCCCCC" colspan="3" align="left">Adminisrator</td>
                  </tr>
                  <tr>
                    <td class="fileds_comment" align="right" rowspan="3" bgcolor="#F6F6F6"> Name</td>
                    <td class="fileds_comment" colspan="2" bgcolor="#F6F6F6"><b>{lastName} </b><br />
                      (lastname) </td>
                  </tr>
                  <tr bgcolor="#F6F6F6">
                    <td class="fileds_comment" colspan="2"><b>{firstName} </b><br />
                      (firstname) </td>
                  </tr>
                  <tr bgcolor="#F6F6F6">
                    <td class="fileds_comment" colspan="2"><b>{middleName} </b><br />
                      middlename </td>
                  </tr>
                  <tr>
                    <td class="fileds_comment" align="right" bgcolor="#F6F6F6" rowspan="3"> Address</td>
                    <td class="fileds_comment" bgcolor="#F6F6F6"><b>{number} </b><br />
                      (number) </td>
                    <td class="fileds_comment" bgcolor="#F6F6F6"><b>{street} </b><br />
                      (street) </td>
                  </tr>
                  <tr bgcolor="#F6F6F6">
                    <td class="fileds_comment"><strong>{barangay}</strong> <br />
                      (barangay) </td>
                    <td class="fileds_comment"><b>{district} </b><br />
                      (district) </td>
                  </tr>
                  <tr bgcolor="#F6F6F6">
                    <td class="fileds_comment"><b>{municipalityCity} </b><br />
                      (municipality/city) </td>
                    <td class="fileds_comment"><b>{province} </b><br />
                      (province) </td>
                  </tr>
                  <tr>
                    <td class="fileds_comment" align="right" bgcolor="#F6F6F6">ContactNumber</td>
                    <td class="fileds_comment" colspan="2" bgcolor="#F6F6F6"><b>{telephone} </b></td>
                  </tr>
                  <tr>
                    <td class="fileds_comment" align="right" bgcolor="#F6F6F6">Email</td>
                    <td class="fileds_comment" colspan="2" bgcolor="#F6F6F6"><b>{email} </b></td>
                  </tr>
                  <tr>
                    <td class="fileds_comment" align="left" bgcolor="#CCCCCC" colspan="3">Land
                      Appraisal</td>
                  </tr>
                  <tr>
                    <td class="fileds_comment" align="right" bgcolor="#F6F6F6">Kind</td>
                    <td class="fileds_comment" colspan="2" bgcolor="#F6F6F6"><b> {kind} </b></td>
                  </tr>
                  <tr>
                    <td class="fileds_comment" align="right" bgcolor="#F6F6F6">Classification</td>
                    <td class="fileds_comment" colspan="2" bgcolor="#F6F6F6"><b> {classification} </b></td>
                  </tr>
                  <tr>
                    <td class="fileds_comment" align="right" bgcolor="#F6F6F6">Sub-Class</td>
                    <td class="fileds_comment" colspan="2" bgcolor="#F6F6F6"><b> {subClass} </b></td>
                  </tr>
                  <tr>
                    <td class="fileds_comment" align="right" bgcolor="#F6F6F6">Area</td>
                    <td class="fileds_comment" colspan="2" bgcolor="#F6F6F6"><b> {area} </b></td>
                  </tr>
                  <tr>
                    <td class="fileds_comment" align="right" bgcolor="#F6F6F6">Actual
                      Use</td>
                    <td class="fileds_comment" colspan="2" bgcolor="#F6F6F6"><b> {actualUse} </b></td>
                  </tr>
                  <tr>
                    <td class="fileds_comment" align="right" bgcolor="#F6F6F6">Unit
                      Value</td>
                    <td class="fileds_comment" colspan="2" bgcolor="#F6F6F6"><b> {unitValue} </b></td>
                  </tr>
                  <tr>
                    <td class="fileds_comment" align="right" bgcolor="#F6F6F6">Market
                      Value </td>
                    <td class="fileds_comment" colspan="2" bgcolor="#F6F6F6"><b> {marketValue} </b></td>
                  </tr>
                  <tr align="left">
                    <td class="fileds_comment" bgcolor="#CCCCCC" colspan="3">Value
                      Adjustments Factor </td>
                  </tr>
                  <tr>
                    <td class="fileds_comment" align="right" bgcolor="#F6F6F6">Adjustment
                      Factor </td>
                    <td class="fileds_comment" colspan="2" bgcolor="#F6F6F6"><b> {adjustmentFactor} </b></td>
                  </tr>
                  <tr>
                    <td class="fileds_comment" align="right" bgcolor="#F6F6F6">%
                      Adjustment</td>
                    <td class="fileds_comment" colspan="2" bgcolor="#F6F6F6"><b> {percentAdjustment} </b></td>
                  </tr>
                  <tr>
                    <td class="fileds_comment" align="right" bgcolor="#F6F6F6">Value
                      Adjustment</td>
                    <td class="fileds_comment" colspan="2" bgcolor="#F6F6F6"><b> {valueAdjustment} </b></td>
                  </tr>
                  <tr align="left">
                    <td class="fileds_comment" bgcolor="#CCCCCC" colspan="3">Property
                      Assessment </td>
                  </tr>
                  <tr valign="top">
                    <td align="right" bgcolor="#F6F6F6" class="fileds_comment">Adjusted
                      Market Value</td>
                    <td colspan="2" bgcolor="#F6F6F6" class="fileds_comment"><b> {adjustedMarketValue} </b></td>
                  </tr>
                  <tr valign="top">
                    <td align="right" bgcolor="#F6F6F6" class="fileds_comment">Assessment
                      Level </td>
                    <td colspan="2" bgcolor="#F6F6F6" class="fileds_comment"><b> {assessmentLevel} </b></td>
                  </tr>
                  <tr valign="top">
                    <td align="right" bgcolor="#F6F6F6" class="fileds_comment">Assessed
                      Value </td>
                    <td colspan="2" bgcolor="#F6F6F6" class="fileds_comment"><b> {assessedValue} </b></td>
                  </tr>
                  <tr valign="top">
                    <td align="right" bgcolor="#F6F6F6" class="fileds_comment">Effectivity</td>
                    <td colspan="2" bgcolor="#F6F6F6" class="fileds_comment"><b> {effectivity} </b></td>
                  </tr>
                  <tr valign="top">
                    <td align="right" bgcolor="#F6F6F6" class="fileds_comment">Taxability</td>
                    <td colspan="2" bgcolor="#F6F6F6" class="fileds_comment"><b> {taxability} </b></td>
                  </tr>
                  <tr bgcolor="#CCCCCC" align="left">
                    <td class="fileds_comment" colspan="3">Certification </td>
                  </tr>
                  <tr>
                    <td class="fileds_comment" align="right" bgcolor="#F6F6F6">Verified
                      By </td>
                    <td class="fileds_comment" bgcolor="#F6F6F6"><b> {verifiedByName}</b></td>
                    <td class="fileds_comment" bgcolor="#F6F6F6">&nbsp;</td>
                  </tr>
                  <tr>
                    <td class="fileds_comment" align="right" bgcolor="#F6F6F6">Plottings
                      By </td>
                    <td class="fileds_comment" bgcolor="#F6F6F6"><b> {plottingsByName}</b></td>
                    <td class="fileds_comment" bgcolor="#F6F6F6">&nbsp;</td>
                  </tr>
                  <tr>
                    <td class="fileds_comment" align="right" bgcolor="#F6F6F6">Noted
                      By</td>
                    <td class="fileds_comment" bgcolor="#F6F6F6"><b>{notedByName} </b></td>
                    <td class="fileds_comment" bgcolor="#F6F6F6">&nbsp;</td>
                  </tr>
                  <tr valign="top">
                    <td align="right" bgcolor="#F6F6F6" class="fileds_comment">Appraised
                      By </td>
                    <td bgcolor="#F6F6F6" class="fileds_comment"><b>{appraisedByName} </b></td>
                    <td bgcolor="#F6F6F6" class="fileds_comment"> Date
                      <table border="0" cellspacing="0" cellpadding="2" width="100">
                        <tr>
                          <td class="fileds_comment" width="33%"><b>{as_month}</b> (month)</td>
                          <td class="fileds_comment" width="33%"><b>{as_dayValue}</b> (day)</td>
                          <td class="fileds_comment" width="33%"><b>{as_yearValue}</b> (year) </td>
                        </tr>
                      </table></td>
                  </tr>
                  <tr valign="top">
                    <td align="right" bgcolor="#F6F6F6" class="fileds_comment">Recommending
                      Approval </td>
                    <td bgcolor="#F6F6F6" class="fileds_comment"><b>{recommendingApprovalName}</b></td>
                    <td bgcolor="#F6F6F6" class="fileds_comment"> Date
                      <table border="0" cellspacing="0" cellpadding="2" width="100">
                        <tr>
                          <td class="fileds_comment" width="33%"><b>{re_month}</b> (month)</td>
                          <td class="fileds_comment" width="33%"><b>{re_dayValue}</b> (day)</td>
                          <td class="fileds_comment" width="33%"><b>{re_yearValue}</b> (year) </td>
                        </tr>
                      </table></td>
                  </tr>
                  <tr valign="top">
                    <td align="right" bgcolor="#F6F6F6" class="fileds_comment">Approved
                      By </td>
                    <td bgcolor="#F6F6F6" class="fileds_comment"><b>{approvedByName} </b></td>
                    <td bgcolor="#F6F6F6" class="fileds_comment"> Date
                      <table border="0" cellspacing="0" cellpadding="2" width="100">
                        <tr>
                          <td class="fileds_comment" width="33%"><b>{av_month}</b> (month)</td>
                          <td class="fileds_comment" width="33%"><b>{av_dayValue}</b> (day)</td>
                          <td class="fileds_comment" width="33%"><b>{av_yearValue}</b> (year) </td>
                        </tr>
                      </table></td>
                  </tr>
                  <tr>
                    <td class="fileds_comment" align="left" bgcolor="#CCCCCC" colspan="3">Memoranda</td>
                  </tr>
                  <tr>
                    <td class="fileds_comment" align="right" bgcolor="#F6F6F6">&nbsp;</td>
                    <td class="fileds_comment" colspan="2" bgcolor="#F6F6F6"><b>{memoranda} </b></td>
                  </tr>
                  <!-- END Land -->
                  <!-- BEGIN PlantsTrees -->
                  <tr bgcolor="#F6F6F6">
                    <td colspan="3" class="fileds_comment" valign="middle" align="left"><b>PLANTS/TREES
                      PROPERTY INFORMATION</b></td>
                  </tr>
                  <tr bgcolor="#CCCCCC">
                    <td colspan="3" class="fileds_comment" align="left" nowrap="nowrap">Identification
                      Numbers </td>
                  </tr>
                  <tr>
                    <td width="100" rowspan="2" align="right" valign="middle" nowrap="nowrap" bgcolor="#F6F6F6" class="fileds_comment">&nbsp;</td>
                    <td class="fileds_comment" bgcolor="#F6F6F6"><strong>{arpNumber}</strong> <br />
                      (ARP Number) </td>
                    <td class="fileds_comment" bgcolor="#F6F6F6"><strong>{propertyIndexNumber} </strong><br />
                      (PIN) </td>
                  </tr>
                  <tr>
                    <td class="fileds_comment" bgcolor="#F6F6F6"><strong>{surveyNumber}</strong> <br />
                      (Survey Number) </td>
                    <td class="fileds_comment" bgcolor="#F6F6F6">&nbsp;</td>
                  </tr>
                  <tr>
                    <td class="fileds_comment" align="left" bgcolor="#CCCCCC" colspan="3">Location
                      Details </td>
                  </tr>
                  <tr>
                    <td class="fileds_comment" align="right" bgcolor="#F6F6F6">landPin</td>
                    <td class="fileds_comment" colspan="2" bgcolor="#F6F6F6"><strong>{landPin} </strong></td>
                  </tr>
                  <tr>
                    <td class="fileds_comment" bgcolor="#CCCCCC" colspan="3" align="left">Adminisrator</td>
                  </tr>
                  <tr>
                    <td class="fileds_comment" align="right" rowspan="3" bgcolor="#F6F6F6"><input type="hidden" name="personID" value="{personID}" />
                      Name</td>
                    <td class="fileds_comment" colspan="2" bgcolor="#F6F6F6"><strong>{lastName} </strong><br />
                      (lastname) </td>
                  </tr>
                  <tr bgcolor="#F6F6F6">
                    <td class="fileds_comment" colspan="2"><strong>{firstName} </strong><br />
                      (firstname) </td>
                  </tr>
                  <tr bgcolor="#F6F6F6">
                    <td class="fileds_comment" colspan="2"><strong>{middleName} </strong><br />
                      middlename </td>
                  </tr>
                  <tr>
                    <td class="fileds_comment" align="right" bgcolor="#F6F6F6" rowspan="3"><input type="hidden" name="addressID" value="{addressID}" />
                      Address</td>
                    <td class="fileds_comment" bgcolor="#F6F6F6"><strong>{number} </strong><br />
                      (number) </td>
                    <td class="fileds_comment" bgcolor="#F6F6F6"><strong>{street} </strong><br />
                      (street) </td>
                  </tr>
                  <tr bgcolor="#F6F6F6">
                    <td class="fileds_comment"><strong>{barangay} </strong><br />
                      (barangay) </td>
                    <td class="fileds_comment">{district} <br />
                      (district) </td>
                  </tr>
                  <tr bgcolor="#F6F6F6">
                    <td class="fileds_comment"><strong>{municipalityCity} </strong><br />
                      (municipality/city) </td>
                    <td class="fileds_comment"><strong>{province} </strong><br />
                      (province) </td>
                  </tr>
                  <tr>
                    <td class="fileds_comment" align="right" bgcolor="#F6F6F6">ContactNumber</td>
                    <td class="fileds_comment" colspan="2" bgcolor="#F6F6F6">{telephone} </td>
                  </tr>
                  <tr>
                    <td class="fileds_comment" align="right" bgcolor="#F6F6F6">Email</td>
                    <td class="fileds_comment" colspan="2" bgcolor="#F6F6F6">{email} </td>
                  </tr>
                  <tr>
                    <td class="fileds_comment" align="left" bgcolor="#CCCCCC" colspan="3">Plants
                      and Trees Appraisal</td>
                  </tr>
                  <tr>
                    <td class="fileds_comment" align="right" bgcolor="#F6F6F6">productClass</td>
                    <td class="fileds_comment" colspan="2" bgcolor="#F6F6F6"><strong>{productClass} </strong></td>
                  </tr>
                  <tr>
                    <td class="fileds_comment" align="right" bgcolor="#F6F6F6">areaPlanted</td>
                    <td class="fileds_comment" colspan="2" bgcolor="#F6F6F6"><strong>{areaPlanted} </strong></td>
                  </tr>
                  <tr>
                    <td class="fileds_comment" align="right" bgcolor="#F6F6F6">totalNumber</td>
                    <td class="fileds_comment" colspan="2" bgcolor="#F6F6F6"><strong>{totalNumber} </strong></td>
                  </tr>
                  <tr>
                    <td class="fileds_comment" align="right" bgcolor="#F6F6F6">nonFruitBearing</td>
                    <td class="fileds_comment" colspan="2" bgcolor="#F6F6F6"><strong>{nonFruitBearing} </strong></td>
                  </tr>
                  <tr>
                    <td class="fileds_comment" align="right" bgcolor="#F6F6F6">fruitBearing</td>
                    <td class="fileds_comment" colspan="2" bgcolor="#F6F6F6"><strong>{fruitBearing} </strong></td>
                  </tr>
                  <tr>
                    <td class="fileds_comment" align="right" bgcolor="#F6F6F6">age</td>
                    <td class="fileds_comment" colspan="2" bgcolor="#F6F6F6"><strong>{age} </strong></td>
                  </tr>
                  <tr>
                    <td class="fileds_comment" align="right" bgcolor="#F6F6F6">unitPrice</td>
                    <td class="fileds_comment" colspan="2" bgcolor="#F6F6F6"><strong>{unitPrice} </strong></td>
                  </tr>
                  <tr align="left">
                    <td class="fileds_comment" bgcolor="#CCCCCC" colspan="3">Value
                      Computation</td>
                  </tr>
                  <tr>
                    <td class="fileds_comment" align="right" bgcolor="#F6F6F6">adjustmentFactor</td>
                    <td class="fileds_comment" colspan="2" bgcolor="#F6F6F6"><strong>{adjustmentFactor} </strong></td>
                  </tr>
                  <tr>
                    <td class="fileds_comment" align="right" bgcolor="#F6F6F6">percentAdjustment</td>
                    <td class="fileds_comment" colspan="2" bgcolor="#F6F6F6"><strong>{percentAdjustment} </strong></td>
                  </tr>
                  <tr>
                    <td class="fileds_comment" align="right" bgcolor="#F6F6F6">valueAdjustment</td>
                    <td class="fileds_comment" colspan="2" bgcolor="#F6F6F6"><strong>{valueAdjustment} </strong></td>
                  </tr>
                  <tr align="left">
                    <td class="fileds_comment" bgcolor="#CCCCCC" colspan="3">Property
                      Assessment </td>
                  </tr>
                  <tr>
                    <td class="fileds_comment" align="right" bgcolor="#F6F6F6">Kind</td>
                    <td class="fileds_comment" colspan="2" bgcolor="#F6F6F6"><strong>{kind} </strong></td>
                  </tr>
                  <tr>
                    <td class="fileds_comment" align="right" bgcolor="#F6F6F6">Actual
                      Use</td>
                    <td class="fileds_comment" colspan="2" bgcolor="#F6F6F6"><strong>{actualUse} </strong></td>
                  </tr>
                  <tr>
                    <td class="fileds_comment" align="right" bgcolor="#F6F6F6">Market
                      Value </td>
                    <td class="fileds_comment" colspan="2" bgcolor="#F6F6F6"><strong>{marketValue} </strong></td>
                  </tr>
                  <tr>
                    <td class="fileds_comment" align="right" bgcolor="#F6F6F6">Adjusted
                      Market Value</td>
                    <td class="fileds_comment" colspan="2" bgcolor="#F6F6F6"><strong>{adjustedMarketValue} </strong></td>
                  </tr>
                  <tr>
                    <td class="fileds_comment" align="right" bgcolor="#F6F6F6">Assessment
                      Level </td>
                    <td class="fileds_comment" colspan="2" bgcolor="#F6F6F6"><strong>{assessmentLevel} </strong></td>
                  </tr>
                  <tr>
                    <td class="fileds_comment" align="right" bgcolor="#F6F6F6">Assessed
                      Value </td>
                    <td class="fileds_comment" colspan="2" bgcolor="#F6F6F6"><strong>{assessedValue} </strong></td>
                  </tr>
                  <tr>
                    <td class="fileds_comment" align="right" bgcolor="#F6F6F6">Effectivity</td>
                    <td class="fileds_comment" colspan="2" bgcolor="#F6F6F6"><strong>{effectivity} </strong></td>
                  </tr>
                  <tr>
                    <td class="fileds_comment" align="right" bgcolor="#F6F6F6">Taxability</td>
                    <td class="fileds_comment" colspan="2" bgcolor="#F6F6F6"><strong>{taxability} </strong></td>
                  </tr>
                  <tr align="left" bgcolor="#CCCCCC">
                    <td class="fileds_comment" colspan="3">Certification </td>
                  </tr>
                  <tr>
                    <td class="fileds_comment" align="right" bgcolor="#F6F6F6">Verified
                      By </td>
                    <td bgcolor="#F6F6F6"><b> {verifiedByName}</b></td>
                    <td class="fileds_comment" bgcolor="#F6F6F6">&nbsp;</td>
                  </tr>
                  <tr>
                    <td class="fileds_comment" align="right" bgcolor="#F6F6F6">Plottings
                      By </td>
                    <td bgcolor="#F6F6F6"><b> {plottingsByName}</b></td>
                    <td class="fileds_comment" bgcolor="#F6F6F6">&nbsp;</td>
                  </tr>
                  <tr>
                    <td class="fileds_comment" align="right" bgcolor="#F6F6F6">Noted
                      By</td>
                    <td bgcolor="#F6F6F6"><b>{notedByName} </b></td>
                    <td class="fileds_comment" bgcolor="#F6F6F6">&nbsp;</td>
                  </tr>
                  <tr valign="top">
                    <td align="right" bgcolor="#F6F6F6" class="fileds_comment">Appraised
                      By </td>
                    <td bgcolor="#F6F6F6"><b>{appraisedByName} </b></td>
                    <td bgcolor="#F6F6F6" class="fileds_comment"> Date
                      <table border="0" cellspacing="0" cellpadding="2" width="100">
                        <tr>
                          <td class="fileds_comment" width="33%"><b>{as_month}</b> (month)</td>
                          <td class="fileds_comment" width="33%"><b>{as_dayValue}</b> (day)</td>
                          <td class="fileds_comment" width="33%"><b>{as_yearValue}</b> (year) </td>
                        </tr>
                      </table></td>
                  </tr>
                  <tr valign="top">
                    <td align="right" bgcolor="#F6F6F6" class="fileds_comment">Recommending
                      Approval </td>
                    <td bgcolor="#F6F6F6"><b>{recommendingApprovalName}</b></td>
                    <td bgcolor="#F6F6F6" class="fileds_comment"> Date
                      <table border="0" cellspacing="0" cellpadding="2" width="100">
                        <tr>
                          <td class="fileds_comment" width="33%"><b>{re_month}</b> (month)</td>
                          <td class="fileds_comment" width="33%"><b>{re_dayValue}</b> (day)</td>
                          <td class="fileds_comment" width="33%"><b>{re_yearValue}</b> (year) </td>
                        </tr>
                      </table></td>
                  </tr>
                  <tr valign="top">
                    <td align="right" bgcolor="#F6F6F6" class="fileds_comment">Approved
                      By </td>
                    <td bgcolor="#F6F6F6"><b>{approvedByName} </b></td>
                    <td bgcolor="#F6F6F6" class="fileds_comment"> Date
                      <table border="0" cellspacing="0" cellpadding="2" width="100">
                        <tr>
                          <td class="fileds_comment" width="33%"><b>{av_month}</b> (month)</td>
                          <td class="fileds_comment" width="33%"><b>{av_dayValue}</b> (day)</td>
                          <td class="fileds_comment" width="33%"><b>{av_yearValue}</b> (year) </td>
                        </tr>
                      </table></td>
                  </tr>
                  <tr>
                    <td class="fileds_comment" align="left" bgcolor="#CCCCCC" colspan="3">Memoranda</td>
                  </tr>
                  <tr>
                    <td class="fileds_comment" align="right" bgcolor="#F6F6F6">&nbsp;</td>
                    <td class="fileds_comment" colspan="2" bgcolor="#F6F6F6"><b>{memoranda} </b></td>
                  </tr>
                  <!-- END PlantsTrees -->
                  <!-- BEGIN ImprovementsBuildings -->
                  <tr bgcolor="#F6F6F6">
                    <td colspan="3" class="fileds_comment" valign="middle" align="left"><b>IMPROVEMENTS/BUILDING
                      PROPERTY INFORMATION</b></td>
                  </tr>
                  <tr bgcolor="#CCCCCC">
                    <td colspan="3" class="fileds_comment" align="left" nowrap="nowrap">Identification
                      Numbers </td>
                  </tr>
                  <tr>
                    <td class="fileds_comment" align="right" valign="middle" nowrap="nowrap" bgcolor="#F6F6F6" width="100">&nbsp;</td>
                    <td class="fileds_comment" bgcolor="#F6F6F6"><strong>{arpNumber} <br />
                      (ARP Number) </strong></td>
                    <td class="fileds_comment" bgcolor="#F6F6F6"><strong>{propertyIndexNumber} <br />
                      (PIN) </strong></td>
                  </tr>
                  <tr>
                    <td class="fileds_comment" align="left" bgcolor="#CCCCCC" colspan="3">Location
                      Details </td>
                  </tr>
                  <tr>
                    <td class="fileds_comment" align="right" bgcolor="#F6F6F6">landPin</td>
                    <td class="fileds_comment" colspan="2" bgcolor="#F6F6F6"><strong>{landPin} </strong></td>
                  </tr>
                  <tr>
                    <td class="fileds_comment" bgcolor="#CCCCCC" colspan="3" align="left">Adminisrator</td>
                  </tr>
                  <tr>
                    <td class="fileds_comment" align="right" rowspan="3" bgcolor="#F6F6F6">{personID}
                      <input type="hidden" name="personID" value="" />
                      Name</td>
                    <td class="fileds_comment" colspan="2" bgcolor="#F6F6F6"><strong>{lastName} <br />
                      (lastname) </strong></td>
                  </tr>
                  <tr bgcolor="#F6F6F6">
                    <td class="fileds_comment" colspan="2"><strong>{firstName} <br />
                      (firstname) </strong></td>
                  </tr>
                  <tr bgcolor="#F6F6F6">
                    <td class="fileds_comment" colspan="2"><strong>{middleName} <br />
                      middlename </strong></td>
                  </tr>
                  <tr>
                    <td class="fileds_comment" align="right" bgcolor="#F6F6F6" rowspan="3"><input type="hidden" name="addressID" value="{addressID}" />
                      Address</td>
                    <td class="fileds_comment" bgcolor="#F6F6F6"><strong>{number} <br />
                      (number) </strong></td>
                    <td class="fileds_comment" bgcolor="#F6F6F6"><strong>{street} <br />
                      (street) </strong></td>
                  </tr>
                  <tr bgcolor="#F6F6F6">
                    <td class="fileds_comment"><strong>{barangay} <br />
                      (barangay) </strong></td>
                    <td class="fileds_comment"><strong>{district} <br />
                      (district) </strong></td>
                  </tr>
                  <tr bgcolor="#F6F6F6">
                    <td class="fileds_comment"><strong>{municipalityCity} <br />
                      (municipality/city) </strong></td>
                    <td class="fileds_comment"><strong>{province} <br />
                      (province) </strong></td>
                  </tr>
                  <tr>
                    <td class="fileds_comment" align="right" bgcolor="#F6F6F6">ContactNumber</td>
                    <td class="fileds_comment" colspan="2" bgcolor="#F6F6F6"><strong>{telephone} </strong></td>
                  </tr>
                  <tr>
                    <td class="fileds_comment" align="right" bgcolor="#F6F6F6">Email</td>
                    <td class="fileds_comment" colspan="2" bgcolor="#F6F6F6"><strong>{email} </strong></td>
                  </tr>
                  <tr>
                    <td class="fileds_comment" align="left" bgcolor="#CCCCCC" colspan="3">Structural
                      Characteristics </td>
                  </tr>
                  <tr>
                    <td class="fileds_comment" align="right" bgcolor="#F6F6F6">foundation</td>
                    <td class="fileds_comment" colspan="2" bgcolor="#F6F6F6"><strong>{foundation} </strong></td>
                  </tr>
                  <tr>
                    <td class="fileds_comment" align="right" bgcolor="#F6F6F6">columnsBldg</td>
                    <td class="fileds_comment" colspan="2" bgcolor="#F6F6F6"><strong>{columnsBldg} </strong></td>
                  </tr>
                  <tr>
                    <td class="fileds_comment" align="right" bgcolor="#F6F6F6">beams</td>
                    <td class="fileds_comment" colspan="2" bgcolor="#F6F6F6"><strong>{beams} </strong></td>
                  </tr>
                  <tr>
                    <td class="fileds_comment" align="right" bgcolor="#F6F6F6">trussFraming</td>
                    <td class="fileds_comment" colspan="2" bgcolor="#F6F6F6"><strong>{trussFraming} </strong></td>
                  </tr>
                  <tr>
                    <td class="fileds_comment" align="right" bgcolor="#F6F6F6">roof</td>
                    <td class="fileds_comment" colspan="2" bgcolor="#F6F6F6"><strong>{roof} </strong></td>
                  </tr>
                  <tr>
                    <td class="fileds_comment" align="right" bgcolor="#F6F6F6">exteriorWalls</td>
                    <td class="fileds_comment" colspan="2" bgcolor="#F6F6F6"><strong>{exteriorWalls} </strong></td>
                  </tr>
                  <tr>
                    <td class="fileds_comment" align="right" bgcolor="#F6F6F6">flooring</td>
                    <td class="fileds_comment" colspan="2" bgcolor="#F6F6F6"><strong>{flooring} </strong></td>
                  </tr>
                  <tr>
                    <td class="fileds_comment" align="right" bgcolor="#F6F6F6">doors</td>
                    <td class="fileds_comment" colspan="2" bgcolor="#F6F6F6"><strong>{doors} </strong></td>
                  </tr>
                  <tr>
                    <td class="fileds_comment" align="right" bgcolor="#F6F6F6">ceiling</td>
                    <td class="fileds_comment" colspan="2" bgcolor="#F6F6F6"><strong>{ceiling} </strong></td>
                  </tr>
                  <tr>
                    <td class="fileds_comment" align="right" bgcolor="#F6F6F6">structuralTypes</td>
                    <td class="fileds_comment" colspan="2" bgcolor="#F6F6F6"><strong>{structuralTypes} </strong></td>
                  </tr>
                  <tr>
                    <td class="fileds_comment" align="right" bgcolor="#F6F6F6">buildingClassification</td>
                    <td class="fileds_comment" colspan="2" bgcolor="#F6F6F6"><strong>{buildingClassification} </strong></td>
                  </tr>
                  <tr>
                    <td class="fileds_comment" align="right" bgcolor="#F6F6F6">buildingPermit</td>
                    <td class="fileds_comment" colspan="2" bgcolor="#F6F6F6"><strong>{buildingPermit} </strong></td>
                  </tr>
                  <tr>
                    <td class="fileds_comment" align="right" bgcolor="#F6F6F6">buildingAge</td>
                    <td class="fileds_comment" colspan="2" bgcolor="#F6F6F6"><strong>{buildingAge} </strong></td>
                  </tr>
                  <tr>
                    <td class="fileds_comment" align="right" bgcolor="#F6F6F6">cctNumber</td>
                    <td class="fileds_comment" colspan="2" bgcolor="#F6F6F6"><strong>{cctNumber} </strong></td>
                  </tr>
                  <tr>
                    <td class="fileds_comment" align="right" bgcolor="#F6F6F6">numberOfStoreys</td>
                    <td class="fileds_comment" colspan="2" bgcolor="#F6F6F6"><strong>{numberOfStoreys} </strong></td>
                  </tr>
                  <tr>
                    <td class="fileds_comment" align="right" bgcolor="#F6F6F6">windows</td>
                    <td class="fileds_comment" colspan="2" bgcolor="#F6F6F6"><strong>{windows} </strong></td>
                  </tr>
                  <tr>
                    <td class="fileds_comment" align="right" bgcolor="#F6F6F6">stairs</td>
                    <td class="fileds_comment" colspan="2" bgcolor="#F6F6F6"><strong>{stairs} </strong></td>
                  </tr>
                  <tr>
                    <td class="fileds_comment" align="right" bgcolor="#F6F6F6">partition</td>
                    <td class="fileds_comment" colspan="2" bgcolor="#F6F6F6"><strong>{partition} </strong></td>
                  </tr>
                  <tr>
                    <td class="fileds_comment" align="right" bgcolor="#F6F6F6">wallFinish</td>
                    <td class="fileds_comment" colspan="2" bgcolor="#F6F6F6"><strong>{wallFinish} </strong></td>
                  </tr>
                  <tr>
                    <td class="fileds_comment" align="right" bgcolor="#F6F6F6">electrical</td>
                    <td class="fileds_comment" colspan="2" bgcolor="#F6F6F6"><strong>{electrical} </strong></td>
                  </tr>
                  <tr>
                    <td class="fileds_comment" align="right" bgcolor="#F6F6F6">toiletAndBath</td>
                    <td class="fileds_comment" colspan="2" bgcolor="#F6F6F6"><strong>{toiletAndBath} </strong></td>
                  </tr>
                  <tr>
                    <td class="fileds_comment" align="right" bgcolor="#F6F6F6">plumbingSewer</td>
                    <td class="fileds_comment" colspan="2" bgcolor="#F6F6F6"><strong>{plumbingSewer} </strong></td>
                  </tr>
                  <tr>
                    <td class="fileds_comment" align="right" bgcolor="#F6F6F6">fixtures</td>
                    <td class="fileds_comment" colspan="2" bgcolor="#F6F6F6"><strong>{fixtures} </strong></td>
                  </tr>
                  <tr>
                    <td class="fileds_comment" align="right" bgcolor="#F6F6F6">dateConstructed</td>
                    <td class="fileds_comment" colspan="2" bgcolor="#F6F6F6"><table border="0" cellspacing="0" cellpadding="2" width="100">
                      <tr>
                        <td class="fileds_comment" width="33%"><b>{dc_month}</b> (month)</td>
                        <td class="fileds_comment" width="33%"><b>{dc_dayValue}</b> (day)</td>
                        <td class="fileds_comment" width="33%"><b>{dc_yearValue}</b> (year) </td>
                      </tr>
                    </table></td>
                  </tr>
                  <tr>
                    <td class="fileds_comment" align="right" bgcolor="#F6F6F6">dateOccupied</td>
                    <td class="fileds_comment" colspan="2" bgcolor="#F6F6F6"><table border="0" cellspacing="0" cellpadding="2" width="100">
                      <tr>
                        <td class="fileds_comment" width="33%"><b>{do_month}</b> (month)</td>
                        <td class="fileds_comment" width="33%"><b>{do_dayValue}</b> (day)</td>
                        <td class="fileds_comment" width="33%"><b>{do_yearValue}</b> (year) </td>
                      </tr>
                    </table></td>
                  </tr>
                  <tr>
                    <td class="fileds_comment" align="right" bgcolor="#F6F6F6">dateCompleted</td>
                    <td class="fileds_comment" colspan="2" bgcolor="#F6F6F6"><table border="0" cellspacing="0" cellpadding="2" width="100">
                      <tr>
                        <td class="fileds_comment" width="33%"><b>{dm_month}</b> (month)</td>
                        <td class="fileds_comment" width="33%"><b>{dm_dayValue}</b> (day)</td>
                        <td class="fileds_comment" width="33%"><b>{dm_yearValue}</b> (year) </td>
                      </tr>
                    </table></td>
                  </tr>
                  <tr>
                    <td class="fileds_comment" align="right" bgcolor="#F6F6F6">areaOfGroundFloor</td>
                    <td class="fileds_comment" colspan="2" bgcolor="#F6F6F6"><strong>{areaOfGroundFloor} </strong></td>
                  </tr>
                  <tr>
                    <td class="fileds_comment" align="right" bgcolor="#F6F6F6">totalBuildingArea</td>
                    <td class="fileds_comment" colspan="2" bgcolor="#F6F6F6"><strong>{totalBuildingArea} </strong></td>
                  </tr>
                  <tr align="left">
                    <td class="fileds_comment" bgcolor="#CCCCCC" colspan="3">Value
                      Computation</td>
                  </tr>
                  <tr>
                    <td class="fileds_comment" align="right" bgcolor="#F6F6F6">buildingCoreAndAdditionalItems</td>
                    <td class="fileds_comment" colspan="2" bgcolor="#F6F6F6"><strong>{buildingCoreAndAdditionalItems} </strong></td>
                  </tr>
                  <tr>
                    <td class="fileds_comment" align="right" bgcolor="#F6F6F6">depreciationRate</td>
                    <td class="fileds_comment" colspan="2" bgcolor="#F6F6F6"><strong>{depreciationRate} </strong></td>
                  </tr>
                  <tr>
                    <td class="fileds_comment" align="right" bgcolor="#F6F6F6">accumulatedDepreciation</td>
                    <td class="fileds_comment" colspan="2" bgcolor="#F6F6F6"><strong>{accumulatedDepreciation} </strong></td>
                  </tr>
                  <tr align="left">
                    <td class="fileds_comment" bgcolor="#CCCCCC" colspan="3">Property
                      Assessment </td>
                  </tr>
                  <tr>
                    <td class="fileds_comment" align="right" bgcolor="#F6F6F6">Kind</td>
                    <td class="fileds_comment" colspan="2" bgcolor="#F6F6F6"><strong>{kind} </strong></td>
                  </tr>
                  <tr>
                    <td class="fileds_comment" align="right" bgcolor="#F6F6F6">Actual
                      Use</td>
                    <td class="fileds_comment" colspan="2" bgcolor="#F6F6F6"><strong>{actualUse} </strong></td>
                  </tr>
                  <tr>
                    <td class="fileds_comment" align="right" bgcolor="#F6F6F6">Market
                      Value </td>
                    <td class="fileds_comment" colspan="2" bgcolor="#F6F6F6"><strong>{marketValue} </strong></td>
                  </tr>
                  <tr>
                    <td class="fileds_comment" align="right" bgcolor="#F6F6F6">Adjusted
                      Market Value</td>
                    <td class="fileds_comment" colspan="2" bgcolor="#F6F6F6"><strong>{adjustedMarketValue} </strong></td>
                  </tr>
                  <tr>
                    <td class="fileds_comment" align="right" bgcolor="#F6F6F6">Assessment
                      Level </td>
                    <td class="fileds_comment" colspan="2" bgcolor="#F6F6F6"><strong>{assessmentLevel} </strong></td>
                  </tr>
                  <tr>
                    <td class="fileds_comment" align="right" bgcolor="#F6F6F6">Assessed
                      Value </td>
                    <td class="fileds_comment" colspan="2" bgcolor="#F6F6F6"><strong>{assessedValue} </strong></td>
                  </tr>
                  <tr>
                    <td class="fileds_comment" align="right" bgcolor="#F6F6F6">Effectivity</td>
                    <td class="fileds_comment" colspan="2" bgcolor="#F6F6F6"><strong>{effectivity} </strong></td>
                  </tr>
                  <tr>
                    <td class="fileds_comment" align="right" bgcolor="#F6F6F6">Taxability</td>
                    <td class="fileds_comment" colspan="2" bgcolor="#F6F6F6"><strong>{taxability} </strong></td>
                  </tr>
                  <tr align="left" bgcolor="#CCCCCC">
                    <td class="fileds_comment" colspan="3">Certification </td>
                  </tr>
                  <tr bgcolor="#000000">
                    <td class="fileds_comment" align="right" bgcolor="#F6F6F6">Verified
                      By </td>
                    <td bgcolor="#F6F6F6"><b> {verifiedByName}</b></td>
                    <td class="fileds_comment" bgcolor="#F6F6F6">&nbsp;</td>
                  </tr>
                  <tr bgcolor="#000000">
                    <td class="fileds_comment" align="right" bgcolor="#F6F6F6">Plottings
                      By </td>
                    <td bgcolor="#F6F6F6"><b> {plottingsByName}</b></td>
                    <td class="fileds_comment" bgcolor="#F6F6F6">&nbsp;</td>
                  </tr>
                  <tr bgcolor="#000000">
                    <td class="fileds_comment" align="right" bgcolor="#F6F6F6">Noted
                      By</td>
                    <td bgcolor="#F6F6F6"><b>{notedByName} </b></td>
                    <td class="fileds_comment" bgcolor="#F6F6F6">&nbsp;</td>
                  </tr>
                  <tr valign="top" bgcolor="#000000">
                    <td align="right" bgcolor="#F6F6F6" class="fileds_comment">Appraised
                      By </td>
                    <td bgcolor="#F6F6F6"><b>{appraisedByName} </b></td>
                    <td bgcolor="#F6F6F6" class="fileds_comment"> Date
                      <table border="0" cellspacing="0" cellpadding="2" width="100">
                        <tr>
                          <td class="fileds_comment" width="33%"><b>{as_month}</b> (month)</td>
                          <td class="fileds_comment" width="33%"><b>{as_dayValue}</b> (day)</td>
                          <td class="fileds_comment" width="33%"><b>{as_yearValue}</b> (year) </td>
                        </tr>
                      </table></td>
                  </tr>
                  <tr valign="top" bgcolor="#000000">
                    <td align="right" bgcolor="#F6F6F6" class="fileds_comment">Recommending
                      Approval </td>
                    <td bgcolor="#F6F6F6"><b>{recommendingApprovalName}</b></td>
                    <td bgcolor="#F6F6F6" class="fileds_comment"> Date
                      <table border="0" cellspacing="0" cellpadding="2" width="100">
                        <tr>
                          <td class="fileds_comment" width="33%"><b>{re_month}</b> (month)</td>
                          <td class="fileds_comment" width="33%"><b>{re_dayValue}</b> (day)</td>
                          <td class="fileds_comment" width="33%"><b>{re_yearValue}</b> (year) </td>
                        </tr>
                      </table></td>
                  </tr>
                  <tr valign="top" bgcolor="#000000">
                    <td align="right" bgcolor="#F6F6F6" class="fileds_comment">Approved
                      By </td>
                    <td bgcolor="#F6F6F6"><b>{approvedByName} </b></td>
                    <td bgcolor="#F6F6F6" class="fileds_comment"> Date
                      <table border="0" cellspacing="0" cellpadding="2" width="100">
                        <tr>
                          <td class="fileds_comment" width="33%"><b>{av_month}</b> (month)</td>
                          <td class="fileds_comment" width="33%"><b>{av_dayValue}</b> (day)</td>
                          <td class="fileds_comment" width="33%"><b>{av_yearValue}</b> (year) </td>
                        </tr>
                      </table></td>
                  </tr>
                  <tr bgcolor="#000000">
                    <td class="fileds_comment" align="left" bgcolor="#CCCCCC" colspan="3">Memoranda</td>
                  </tr>
                  <tr bgcolor="#000000">
                    <td class="fileds_comment" align="right" bgcolor="#F6F6F6">&nbsp;</td>
                    <td class="fileds_comment" colspan="2" bgcolor="#F6F6F6"><b>{memoranda} </b></td>
                  </tr>
                  <!-- END ImprovementsBuildings -->
                  <!-- BEGIN Machineries -->
                  <tr bgcolor="#F6F6F6">
                    <td colspan="3" class="fileds_comment" valign="middle" align="left"><b>MACHINERIES
                      PROPERTY INFORMATION</b></td>
                  </tr>
                  <tr bgcolor="#CCCCCC">
                    <td colspan="3" class="fileds_comment" align="left" nowrap="nowrap">Identification
                      Numbers </td>
                  </tr>
                  <tr>
                    <td class="fileds_comment" align="right" valign="middle" nowrap="nowrap" bgcolor="#F6F6F6" width="100">&nbsp;</td>
                    <td class="fileds_comment" bgcolor="#F6F6F6"><strong>{arpNumber} </strong><br />
                      (ARP Number) </td>
                    <td class="fileds_comment" bgcolor="#F6F6F6"><strong>{propertyIndexNumber} </strong><br />
                      (PIN) </td>
                  </tr>
                  <tr>
                    <td class="fileds_comment" align="left" bgcolor="#CCCCCC" colspan="3">Location
                      Details </td>
                  </tr>
                  <tr>
                    <td class="fileds_comment" align="right" bgcolor="#F6F6F6">landPin</td>
                    <td class="fileds_comment" colspan="2" bgcolor="#F6F6F6"><strong>{landPin} </strong></td>
                  </tr>
                  <tr>
                    <td class="fileds_comment" align="right" bgcolor="#F6F6F6">buildingPin</td>
                    <td class="fileds_comment" colspan="2" bgcolor="#F6F6F6"><strong>{buildingPin} </strong></td>
                  </tr>
                  <tr>
                    <td class="fileds_comment" bgcolor="#CCCCCC" colspan="3" align="left">Adminisrator</td>
                  </tr>
                  <tr>
                    <td class="fileds_comment" align="right" rowspan="3" bgcolor="#F6F6F6"> Name</td>
                    <td class="fileds_comment" colspan="2" bgcolor="#F6F6F6"><strong>{lastName} </strong><br />
                      (lastname) </td>
                  </tr>
                  <tr bgcolor="#F6F6F6">
                    <td class="fileds_comment" colspan="2"><strong>{firstName} </strong><br />
                      (firstname) </td>
                  </tr>
                  <tr bgcolor="#F6F6F6">
                    <td class="fileds_comment" colspan="2"><strong>{middleName} </strong><br />
                      middlename </td>
                  </tr>
                  <tr>
                    <td class="fileds_comment" align="right" bgcolor="#F6F6F6" rowspan="3"><input type="hidden" name="addressID" value="{addressID}" />
                      Address</td>
                    <td class="fileds_comment" bgcolor="#F6F6F6"><strong>{number} </strong><br />
                      (number) </td>
                    <td class="fileds_comment" bgcolor="#F6F6F6"><strong>{street}</strong> <br />
                      (street) </td>
                  </tr>
                  <tr bgcolor="#F6F6F6">
                    <td class="fileds_comment"><strong>{barangay} </strong><br />
                      (barangay) </td>
                    <td class="fileds_comment"><strong>{district} </strong><br />
                      (district) </td>
                  </tr>
                  <tr bgcolor="#F6F6F6">
                    <td class="fileds_comment"><strong>{municipalityCity} </strong><br />
                      (municipality/city) </td>
                    <td class="fileds_comment"><strong>{province} </strong><br />
                      (province) </td>
                  </tr>
                  <tr>
                    <td class="fileds_comment" align="right" bgcolor="#F6F6F6">ContactNumber</td>
                    <td class="fileds_comment" colspan="2" bgcolor="#F6F6F6"><strong>{telephone} </strong></td>
                  </tr>
                  <tr>
                    <td class="fileds_comment" align="right" bgcolor="#F6F6F6">Email</td>
                    <td class="fileds_comment" colspan="2" bgcolor="#F6F6F6"><strong>{email} </strong></td>
                  </tr>
                  <tr>
                    <td class="fileds_comment" align="left" bgcolor="#CCCCCC" colspan="3">Machinery
                      Information</td>
                  </tr>
                  <tr>
                    <td class="fileds_comment" align="right" bgcolor="#F6F6F6">machineryDescription</td>
                    <td class="fileds_comment" colspan="2" bgcolor="#F6F6F6"><strong>{machineryDescription} </strong></td>
                  </tr>
                  <tr>
                    <td class="fileds_comment" align="right" bgcolor="#F6F6F6">brand</td>
                    <td class="fileds_comment" colspan="2" bgcolor="#F6F6F6"><strong>{brand} </strong></td>
                  </tr>
                  <tr>
                    <td class="fileds_comment" align="right" bgcolor="#F6F6F6">modelNumber</td>
                    <td class="fileds_comment" colspan="2" bgcolor="#F6F6F6"><strong>{modelNumber} </strong></td>
                  </tr>
                  <tr>
                    <td class="fileds_comment" align="right" bgcolor="#F6F6F6">capacity</td>
                    <td class="fileds_comment" colspan="2" bgcolor="#F6F6F6"><strong>{capacity} </strong></td>
                  </tr>
                  <tr>
                    <td class="fileds_comment" align="right" bgcolor="#F6F6F6">dateAcquired</td>
                    <td class="fileds_comment" colspan="2" bgcolor="#F6F6F6"><table border="0" cellspacing="0" cellpadding="2" width="100">
                      <tr>
                        <td class="fileds_comment" width="33%"><b>{da_month}</b> (month)</td>
                        <td class="fileds_comment" width="33%"><b>{da_dayValue}</b> (day)</td>
                        <td class="fileds_comment" width="33%"><b>{da_yearValue}</b> (year) </td>
                      </tr>
                    </table></td>
                  </tr>
                  <tr>
                    <td class="fileds_comment" align="right" bgcolor="#F6F6F6">conditionWhenAcquired</td>
                    <td class="fileds_comment" colspan="2" bgcolor="#F6F6F6"><strong>{conditionWhenAcquired}</strong></td>
                  </tr>
                  <tr>
                    <td class="fileds_comment" align="right" bgcolor="#F6F6F6">EconomicLife</td>
                    <td class="fileds_comment" bgcolor="#F6F6F6"><strong>{estimatedEconomicLife} </strong><br />
                      (estimatedEconomicLife) </td>
                    <td class="fileds_comment" bgcolor="#F6F6F6"><strong>{remainingEconomicLife} </strong><br />
                      (remainingEconomicLife) </td>
                  </tr>
                  <tr>
                    <td class="fileds_comment" align="right" bgcolor="#F6F6F6">dateOfInstallation</td>
                    <td class="fileds_comment" colspan="2" bgcolor="#F6F6F6"><table border="0" cellspacing="0" cellpadding="2" width="100">
                      <tr>
                        <td class="fileds_comment" width="33%"><b>{di_month}</b> (month)</td>
                        <td class="fileds_comment" width="33%"><b>{di_dayValue}</b> (day)</td>
                        <td class="fileds_comment" width="33%"><b>{di_yearValue}</b> (year) </td>
                      </tr>
                    </table></td>
                  </tr>
                  <tr>
                    <td class="fileds_comment" align="right" bgcolor="#F6F6F6">dateOfOperation</td>
                    <td class="fileds_comment" colspan="2" bgcolor="#F6F6F6"><table border="0" cellspacing="0" cellpadding="2" width="100">
                      <tr>
                        <td class="fileds_comment" width="33%"><b>{do_month}</b> (month)</td>
                        <td class="fileds_comment" width="33%"><b>{do_dayValue}</b> (day)</td>
                        <td class="fileds_comment" width="33%"><b>{do_yearValue}</b> (year) </td>
                      </tr>
                    </table></td>
                  </tr>
                  <tr>
                    <td class="fileds_comment" align="right" bgcolor="#F6F6F6">remarks</td>
                    <td class="fileds_comment" colspan="2" bgcolor="#F6F6F6"><strong>{remarks} </strong></td>
                  </tr>
                  <tr align="left">
                    <td class="fileds_comment" bgcolor="#CCCCCC" colspan="3">Property
                      Appraisal </td>
                  </tr>
                  <tr>
                    <td class="fileds_comment" align="right" bgcolor="#F6F6F6">numberOfUnits</td>
                    <td class="fileds_comment" colspan="2" bgcolor="#F6F6F6"><strong>{numberOfUnits} </strong></td>
                  </tr>
                  <tr>
                    <td class="fileds_comment" align="right" bgcolor="#F6F6F6">acquisitionCost</td>
                    <td class="fileds_comment" colspan="2" bgcolor="#F6F6F6"><strong>{acquisitionCost} </strong></td>
                  </tr>
                  <tr>
                    <td class="fileds_comment" align="right" bgcolor="#F6F6F6" rowspan="2">Additional
                      Cost</td>
                    <td class="fileds_comment" bgcolor="#F6F6F6"><strong>{freightCost} </strong><br />
                      (frieghtCost) </td>
                    <td class="fileds_comment" bgcolor="#F6F6F6"><strong>{insuranceCost} </strong><br />
                      (insuranceCost) </td>
                  </tr>
                  <tr>
                    <td class="fileds_comment" bgcolor="#F6F6F6"><strong>{installationCost}</strong> <br />
                      (installationCost) </td>
                    <td class="fileds_comment" bgcolor="#F6F6F6"><strong>{othersCost} </strong><br />
                      (othersCost) </td>
                  </tr>
                  <tr align="left">
                    <td class="fileds_comment" bgcolor="#CCCCCC" colspan="3">Value
                      Computation</td>
                  </tr>
                  <tr>
                    <td class="fileds_comment" align="right" bgcolor="#F6F6F6">depreciation</td>
                    <td class="fileds_comment" colspan="2" bgcolor="#F6F6F6"><strong>{depreciation} </strong></td>
                  </tr>
                  <tr>
                    <td class="fileds_comment" align="right" bgcolor="#F6F6F6">depreciatedMarketValue</td>
                    <td class="fileds_comment" colspan="2" bgcolor="#F6F6F6"><strong>{depreciatedMarketValue} </strong></td>
                  </tr>
                  <tr align="left">
                    <td class="fileds_comment" bgcolor="#CCCCCC" colspan="3">Property
                      Assessment </td>
                  </tr>
                  <tr>
                    <td class="fileds_comment" align="right" bgcolor="#F6F6F6">Kind</td>
                    <td class="fileds_comment" colspan="2" bgcolor="#F6F6F6"><strong>{kind} </strong></td>
                  </tr>
                  <tr>
                    <td class="fileds_comment" align="right" bgcolor="#F6F6F6">Actual
                      Use</td>
                    <td class="fileds_comment" colspan="2" bgcolor="#F6F6F6"><strong>{actualUse} </strong></td>
                  </tr>
                  <tr>
                    <td class="fileds_comment" align="right" bgcolor="#F6F6F6">Market
                      Value </td>
                    <td class="fileds_comment" colspan="2" bgcolor="#F6F6F6"><strong>{marketValue} </strong></td>
                  </tr>
                  <tr>
                    <td class="fileds_comment" align="right" bgcolor="#F6F6F6">Adjusted
                      Market Value</td>
                    <td class="fileds_comment" colspan="2" bgcolor="#F6F6F6"><strong>{adjustedMarketValue} </strong></td>
                  </tr>
                  <tr>
                    <td class="fileds_comment" align="right" bgcolor="#F6F6F6">Assessment
                      Level </td>
                    <td class="fileds_comment" colspan="2" bgcolor="#F6F6F6"><strong>{assessmentLevel} </strong></td>
                  </tr>
                  <tr>
                    <td class="fileds_comment" align="right" bgcolor="#F6F6F6">Assessed
                      Value </td>
                    <td class="fileds_comment" colspan="2" bgcolor="#F6F6F6"><strong>{assessedValue} </strong></td>
                  </tr>
                  <tr>
                    <td class="fileds_comment" align="right" bgcolor="#F6F6F6">Effectivity</td>
                    <td class="fileds_comment" colspan="2" bgcolor="#F6F6F6"><strong>{effectivity} </strong></td>
                  </tr>
                  <tr>
                    <td class="fileds_comment" align="right" bgcolor="#F6F6F6">Taxability</td>
                    <td class="fileds_comment" colspan="2" bgcolor="#F6F6F6"><strong>{taxability} </strong></td>
                  </tr>
                  <tr align="left" bgcolor="#CCCCCC">
                    <td class="fileds_comment" colspan="3">Certification </td>
                  </tr>
                  <tr bgcolor="#000000">
                    <td class="fileds_comment" align="right" bgcolor="#F6F6F6">Verified
                      By </td>
                    <td bgcolor="#F6F6F6"><b> {verifiedByName}</b></td>
                    <td class="fileds_comment" bgcolor="#F6F6F6">&nbsp;</td>
                  </tr>
                  <tr bgcolor="#000000">
                    <td class="fileds_comment" align="right" bgcolor="#F6F6F6">Plottings
                      By </td>
                    <td bgcolor="#F6F6F6"><b> {plottingsByName}</b></td>
                    <td class="fileds_comment" bgcolor="#F6F6F6">&nbsp;</td>
                  </tr>
                  <tr bgcolor="#000000">
                    <td class="fileds_comment" align="right" bgcolor="#F6F6F6">Noted
                      By</td>
                    <td bgcolor="#F6F6F6"><b>{notedByName} </b></td>
                    <td class="fileds_comment" bgcolor="#F6F6F6">&nbsp;</td>
                  </tr>
                  <tr valign="top" bgcolor="#000000">
                    <td align="right" bgcolor="#F6F6F6" class="fileds_comment">Appraised
                      By </td>
                    <td bgcolor="#F6F6F6"><b>{appraisedByName} </b></td>
                    <td bgcolor="#F6F6F6" class="fileds_comment"> Date
                      <table border="0" cellspacing="0" cellpadding="2" width="100">
                        <tr>
                          <td class="fileds_comment" width="33%"><b>{as_month}</b> (month)</td>
                          <td class="fileds_comment" width="33%"><b>{as_dayValue}</b> (day)</td>
                          <td class="fileds_comment" width="33%"><b>{as_yearValue}</b> (year) </td>
                        </tr>
                      </table></td>
                  </tr>
                  <tr valign="top" bgcolor="#000000">
                    <td align="right" bgcolor="#F6F6F6" class="fileds_comment">Recommending
                      Approval </td>
                    <td bgcolor="#F6F6F6"><b>{recommendingApprovalName}</b></td>
                    <td bgcolor="#F6F6F6" class="fileds_comment"> Date
                      <table border="0" cellspacing="0" cellpadding="2" width="100">
                        <tr>
                          <td class="fileds_comment" width="33%"><b>{re_month}</b> (month)</td>
                          <td class="fileds_comment" width="33%"><b>{re_dayValue}</b> (day)</td>
                          <td class="fileds_comment" width="33%"><b>{re_yearValue}</b> (year) </td>
                        </tr>
                      </table></td>
                  </tr>
                  <tr valign="top" bgcolor="#000000">
                    <td align="right" bgcolor="#F6F6F6" class="fileds_comment">Approved
                      By </td>
                    <td bgcolor="#F6F6F6"><b>{approvedByName} </b></td>
                    <td bgcolor="#F6F6F6" class="fileds_comment"> Date
                      <table border="0" cellspacing="0" cellpadding="2" width="100">
                        <tr>
                          <td class="fileds_comment" width="33%"><b>{av_month}</b> (month)</td>
                          <td class="fileds_comment" width="33%"><b>{av_dayValue}</b> (day)</td>
                          <td class="fileds_comment" width="33%"><b>{av_yearValue}</b> (year) </td>
                        </tr>
                      </table></td>
                  </tr>
                  <tr bgcolor="#000000">
                    <td class="fileds_comment" align="left" bgcolor="#CCCCCC" colspan="3">Memoranda</td>
                  </tr>
                  <tr bgcolor="#000000">
                    <td class="fileds_comment" align="right" bgcolor="#F6F6F6">&nbsp;</td>
                    <td class="fileds_comment" colspan="2" bgcolor="#F6F6F6"><b>{memoranda} </b></td>
                  </tr>
                  <!-- END Machineries -->
                  <!-- BEGIN TD -->
                  <tr bgcolor="#F6F6F6">
                    <td colspan="3" class="fileds_comment" valign="middle" align="left"><b>DECLARATION
                      OF PROPERTY</b> ({propertyType})</td>
                  </tr>
                  <tr bgcolor="#CCCCCC">
                    <td colspan="3" class="fileds_comment" align="left" nowrap="nowrap">Identification
                      Numbers </td>
                  </tr>
                  <tr>
                    <td class="fileds_comment" align="right" valign="middle" nowrap="nowrap" bgcolor="#F6F6F6" width="100">&nbsp;</td>
                    <td colspan="2" bgcolor="#F6F6F6" class="fileds_comment"><strong>{taxDeclarationNumber} </strong><br />
                      (Tax Declaration Number) <br /></td>
                  </tr>
                  <tr bgcolor="#CCCCCC" align="left">
                    <td class="fileds_comment" colspan="3">Approval</td>
                  </tr>
                  <tr>
                    <td class="fileds_comment" align="right" bgcolor="#F6F6F6">Provincial
                      Assessor</td>
                    <td class="fileds_comment" bgcolor="#F6F6F6"><strong>{provincialAssessorName} </strong></td>
                    <td class="fileds_comment" bgcolor="#F6F6F6"> Date
                      <table border="0" cellspacing="0" cellpadding="2" width="100">
                        <tr>
                          <td class="fileds_comment" width="33%"><b>{pa_month}</b> (month)</td>
                          <td class="fileds_comment" width="33%"><b>{pa_dayValue}</b> (day)</td>
                          <td class="fileds_comment" width="33%"><b>{pa_yearValue}</b> (year) </td>
                        </tr>
                      </table></td>
                  </tr>
                  <tr>
                    <td class="fileds_comment" align="right" bgcolor="#F6F6F6">City/Municipal
                      Assessor</td>
                    <td class="fileds_comment" bgcolor="#F6F6F6"><strong>{cityMunicipalAssessorName}</strong></td>
                    <td class="fileds_comment" bgcolor="#F6F6F6"> Date
                      <table border="0" cellspacing="0" cellpadding="2" width="100">
                        <tr>
                          <td class="fileds_comment" width="33%"><b>{cm_month}</b> (month)</td>
                          <td class="fileds_comment" width="33%"><b>{cm_dayValue}</b> (day)</td>
                          <td class="fileds_comment" width="33%"><b>{cm_yearValue}</b> (year) </td>
                        </tr>
                      </table></td>
                  </tr>
                  <tr>
                    <td class="fileds_comment" align="left" nowrap="nowrap" colspan="3" bgcolor="#CCCCCC">&nbsp;</td>
                  </tr>
                  <tr>
                    <td class="fileds_comment" align="right" valign="middle" nowrap="nowrap" rowspan="4" bgcolor="#F6F6F6">&nbsp;</td>
                    <td bgcolor="#F6F6F6"><strong>{cancelsTDNumber} </strong><br />
                      Cancels TD Number)</td>
                    <td bgcolor="#F6F6F6"><strong>{canceledByTDNumber} </strong><br />
                      (Canceled By TD Number) </td>
                  </tr>
                  <tr bgcolor="#F6F6F6">
                    <td><strong>{taxBeginsWithTheYear} </strong><br />
                      (Tax Begins With The Year) </td>
                    <td><strong>{ceasesWithTheYear} </strong><br />
                      (Ceases With The Year) </td>
                  </tr>
                  <tr bgcolor="#F6F6F6">
                    <td><strong>{enteredInRPARForByName} </strong><br />
                      (enteredInRPARForBy) </td>
                    <td><strong>{enteredInRPARForYear}</strong><br />
                      (enteredInRPARForYear) </td>
                  </tr>
                  <tr bgcolor="#F6F6F6">
                    <td><strong>{previousOwner} </strong><br />
                      (Previous Owner) </td>
                    <td><strong>{previousAssessedValue} </strong><br />
                      (Previous Assessed Value) </td>
                  </tr>
                  <tr>
                    <td class="fileds_comment" align="left" nowrap="nowrap" colspan="3" bgcolor="#CCCCCC">Tax
                      Bill </td>
                  </tr>
                  <tr bgcolor="#F6F6F6">
                    <td class="fileds_comment" align="right" valign="middle" nowrap="nowrap" bgcolor="#F6F6F6">Market
                      Value </td>
                    <td colspan="2"><strong>{marketValue}</strong></td>
                  </tr>
                  <tr bgcolor="#F6F6F6">
                    <td class="fileds_comment" align="right" valign="middle" nowrap="nowrap" bgcolor="#F6F6F6">Assessed
                      Value </td>
                    <td colspan="2"><strong>{assessedValue}</strong></td>
                  </tr>
                  <tr bgcolor="#F6F6F6">
                    <td class="fileds_comment" align="right" valign="middle" nowrap="nowrap" bgcolor="#F6F6F6">Basic
                      Tax </td>
                    <td colspan="2"><strong>{basicTax}</strong></td>
                  </tr>
                  <tr bgcolor="#F6F6F6">
                    <td class="fileds_comment" align="right" valign="middle" nowrap="nowrap" bgcolor="#F6F6F6">SEF
                      Tax </td>
                    <td colspan="2"><strong>{sefTax}</strong></td>
                  </tr>
                  <tr bgcolor="#F6F6F6">
                    <td class="fileds_comment" align="right" valign="middle" nowrap="nowrap" bgcolor="#F6F6F6">Total</td>
                    <td colspan="2"><strong>{total}</strong></td>
                  </tr>
                  <!-- END TD -->
                </table></td>
              </tr>
              <!-- END TDList -->
              <!-- BEGIN TDDBEmpty -->
              <tr align="left">
                <td class="fileds_comment" colspan="6" bgcolor="#F6F6F6" valign="middle">none</td>
              </tr>
              <!-- END TDDBEmpty -->
            </table>
            <!-- END TDTable --></td>
        </tr>
        <tr>
          <td align="center" valign="top"><img src="images/spacer.gif" width="10" height="15" /></td>
        </tr>
        <tr>
          <td align="center" valign="top"><img src="images/spacer.gif" width="10" height="15" /><a name="#down" id="#down"></a></td>
        </tr>
        <tr>
          <td align="center" valign="top" class="fileds_comment">Tampering with
            this system is criminally punishable under Philippine Laws.<br />
            &copy;
            Republic of the Philippines National Computer Center. All Rights Reserved. </td>
        </tr>
      </table>
      <!-- END RPTOPTable --></td>
  </tr>
</table>
