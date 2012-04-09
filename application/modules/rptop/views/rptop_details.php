<table width="702" height="375" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td align="left" valign="top"><!-- BEGIN RPTOPTable -->
      <table width="702" height="375" border="0" cellpadding="0" cellspacing="0">
        <tr>
          <td align="left" valign="top"><!-- BEGIN RPTOPTable -->
            <table width="90%" border="0" cellspacing="0" cellpadding="0" align="center">
              <tr>
                <td align="center" valign="top" class="subtitle"><table width="90%" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td colspan="2">&nbsp;</td>
                  </tr>
                  <tr>
                    <td class="subtitle">RPTOP INFORMATION</td>
                    <td align="right" valign="top"><a href="#top"><img src="images/arrow_up.gif" width="40" height="30" border="0" /></a></td>
                  </tr>
                </table></td>
              </tr>
              <tr>
                <td align="center" valign="top">{msg}<img src="images/spacer.gif" width="10" height="15" /></td>
              </tr>
              <tr>
                <td align="center" valign="top"><table width="90%" border="0" cellspacing="1" cellpadding="2" class="fields">
                  <tr valign="top" bgcolor="#F6F6F6">
                    <td align="right" class="fileds_comment" width="25%">rptopNumber</td>
                    <td class="fileds_comment" width="75%"><b>{rptopNumber}</b></td>
                  </tr>
                  <tr valign="top" bgcolor="#F6F6F6">
                    <td align="right" class="fileds_comment">taxabaleYear</td>
                    <td class="fileds_comment"><strong>{taxableYear}</strong></td>
                  </tr>
                  <tr valign="top" bgcolor="#F6F6F6">
                    <td align="right" class="fileds_comment">rptopDate</td>
                    <td class="fileds_comment"><strong>{rptopDate}</strong></td>
                  </tr>
                  <tr valign="top" bgcolor="#F6F6F6">
                    <td align="right" class="fileds_comment">cityAssessor</td>
                    <td class="fileds_comment"><strong>{cityAssessorName}</strong></td>
                  </tr>
                  <tr valign="top" bgcolor="#F6F6F6">
                    <td align="right" class="fileds_comment">cityTreasurer</td>
                    <td class="fileds_comment"><strong>{cityTreasurerName}</strong></td>
                  </tr>
                </table></td>
              </tr>
              <tr>
                <td align="center" valign="top"><img src="images/spacer.gif" width="10" height="15" /></td>
              </tr>
              <tr>
                <td align="center" valign="top" class="subtitle"><table width="90%" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td class="subtitle">PROPERTY OWNER</td>
                    <td align="right" valign="top"><a href="#down"><img src="images/arrow_down.gif" width="40" height="30" border="0" /></a></td>
                  </tr>
                </table></td>
              </tr>
              <tr>
                <td align="center" valign="top" class="title"><img src="images/spacer.gif" width="10" height="15" /></td>
              </tr>
              <tr>
                <td align="center" valign="top"><form action="RPTOPDetails.php{Session}" method="post" name="OwnerList" id="OwnerList" onsubmit="javascript: return confirmSubmit();">
                  <!-- BEGIN OwnerListTable -->
                  <table width="90%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td width="50%" class="mainnav" valign="top"><table width="100%" border="0" cellspacing="1" cellpadding="2" height="100%">
                        <tr bgcolor="#F6F6F6">
                          <td class="fileds_comment" colspan="2">Owner - Person
                            <!-- BEGIN SearchOwnerPersonLink -->
                            <br />
                            - <a href="javascript: openWin('RPTOPPersonSearch.php{Session}','popupWindow',50,50,550,550);" class="fields">search</a>
                            <!-- END SearchOwnerPersonLink --></td>
                        </tr>
                        <!-- BEGIN PersonTable -->
                        <tr bgcolor="#F6F6F6">
                          <td class="fileds_comment" width="20"><font color="#FFFFFF">
                            <input type="button" name="Button2" value="Remove" onclick="javascript: checkAction('remove');" style="background:#E0E0E0;font-size: 10pt; border:0; color:#999999;font-family: arial" {removeOwnerDisabled} />
                          </font></td>
                          <td class="fileds_comment">Name </td>
                        </tr>
                        <!-- BEGIN PersonList -->
                        <tr bgcolor="#F6F6F6">
                          <td class="fileds_comment" align="center" valign="top"><input type="checkbox" name="personID[]" value="{personID}" {removeOwnerDisabled} /></td>
                          <td class="fileds_comment"><a href="javascript: openWin('PersonDetails.php{Session}&amp;personID={personID}&amp;formAction={ownerViewAccess}','popupWindow',50,50,350,400)" class="fields">{fullName}</a></td>
                        </tr>
                        <!-- END PersonList -->
                        <!-- BEGIN PersonDBEmpty -->
                        <tr align="left" bgcolor="#F6F6F6">
                          <td class="fileds_comment" valign="top" colspan="2">none</td>
                        </tr>
                        <!-- END PersonDBEmpty -->
                        <tr align="left" bgcolor="#F6F6F6">
                          <td class="fields" valign="top" colspan="2" height="100%">&nbsp;</td>
                        </tr>
                        <!-- END PersonTable -->
                      </table></td>
                      <td width="50%" class="mainnav" valign="top"><table width="100%" border="0" cellspacing="1" cellpadding="2" height="100%">
                        <tr bgcolor="#F6F6F6">
                          <td class="fileds_comment" colspan="2">Owner - Company
                            <!-- BEGIN SearchOwnerCompanyLink -->
                            <br />
                            - <a href="javascript: openWin('RPTOPCompanySearch.php{Session}','popupWindow',50,50,550,550);" class="fields">search</a>
                            <!-- END SearchOwnerCompanyLink --></td>
                        </tr>
                        <!-- BEGIN CompanyTable -->
                        <tr bgcolor="#F6F6F6">
                          <td class="fileds_comment" width="20"><font color="#FFFFFF">
                            <input type="button" name="Button" value="Remove" onclick="javascript: checkAction('remove');" style="background:#E0E0E0;font-size: 10pt; border:0; color:#999999;font-family: arial" {removeOwnerDisabled} />
                          </font></td>
                          <td class="fileds_comment">Company Name</td>
                        </tr>
                        <!-- BEGIN CompanyList -->
                        <tr bgcolor="#F6F6F6">
                          <td class="fileds_comment" valign="top" align="center"><input type="checkbox" name="companyID[]" value="{companyID}" {removeOwnerDisabled} /></td>
                          <td class="fileds_comment"><a href="javascript: openWin('CompanyDetails.php{Session} &amp;companyID={companyID}&amp;formAction={ownerViewAccess}','popupWindow',50,50,450,500)" class="fields">{companyName}</a></td>
                        </tr>
                        <!-- END CompanyList -->
                        <!-- BEGIN CompanyDBEmpty -->
                        <tr align="left" bgcolor="#F6F6F6">
                          <td class="fileds_comment" valign="top" colspan="2">none</td>
                        </tr>
                        <!-- END CompanyDBEmpty -->
                        <tr align="left" bgcolor="#F6F6F6">
                          <td class="fields" valign="top" colspan="2" height="100%">&nbsp;</td>
                        </tr>
                        <!-- END CompanyTable -->
                      </table></td>
                    </tr>
                  </table>
                  <input type="hidden" name="formAction" value="remove" />
                  <input type="hidden" name="ownerID" value="{ownerID}" />
                  <!-- END OwnerListTable -->
                </form></td>
              </tr>
              <tr>
                <td align="center" valign="top"><img src="images/spacer.gif" width="10" height="15" /></td>
              </tr>
              <tr>
                <td align="center" valign="top" class="subtitle"><table width="90%" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td class="subtitle">NOTICE OF ASSESSMENTS<a name="#td" id="#td"></a></td>
                    <td align="right" valign="top"><a href="#top"><img src="images/arrow_up.gif" width="40" height="30" border="0" /></a></td>
                  </tr>
                </table></td>
              </tr>
              <tr>
                <td align="center" valign="top"><img src="images/spacer.gif" width="10" height="15" /></td>
              </tr>
              <tr>
                <td align="center" valign="top"><!-- BEGIN TDTable -->
                  <form action="RPTOPDetails.php{Session}" method="post" name="RPTOPForm" id="RPTOPForm">
                    <table width="90%" border="0" cellpadding="2" cellspacing="1">
                      <tr align="center">
                        <td width="15%" bgcolor="#CCCCCC" class="fileds_comment"><b>Show/Hide<br />
                          </b>
                          <input type="checkbox" name="tdShowHide" value="1" onclick="toggleShowHide();" /></td>
                        <td width="20%" bgcolor="#CCCCCC" class="fileds_comment"><b>TD 
                          Number</b></td>
                        <td width="15%" bgcolor="#CCCCCC" class="fileds_comment"><strong>Market 
                          Value</strong></td>
                        <td width="15%" bgcolor="#CCCCCC" class="fileds_comment"><b>Assessment 
                          Value</b></td>
                        <td width="15%" bgcolor="#CCCCCC" class="fileds_comment"><strong>view</strong></td>
                        <!--td width="15%" bgcolor="#CCCCCC" class="fileds_comment"> <input type="hidden" name="formAction" value="remove"> 
				<input type="submit" name="Submit" value="Remove"> </td-->
                      </tr>
                      <!-- BEGIN TDList -->
                      <tr align="left">
                        <td class="fileds_comment"  align="center" bgcolor="#F6F6F6" valign="middle"><a name="#td{ctr}" id="#td{ctr}"></a>
                          <input name="tdChk{ctr}" type="checkbox" id="tdChk{ctr}" onclick="toggle('{ctr}')" value="1" /></td>
                        <td class="fileds_comment"  align="center" bgcolor="#F6F6F6" valign="middle"><a href="RPTOPAFSDetails.php{Session}&amp;afsID={afsID}&amp;rptopID={rptopID}">{taxDeclarationNumber} </a></td>
                        <td  align="right" class="fileds_comment" bgcolor="#F6F6F6" valign="middle">{marketValue}</td>
                        <td  align="right" class="fileds_comment" bgcolor="#F6F6F6" valign="middle">{assessedValue}</td>
                        <td  align="center" class="fileds_comment" bgcolor="#F6F6F6" valign="middle"><a href="RPTOPAFSDetails.php{Session}&amp;afsID={afsID}&amp;rptopID={rptopID}">{rptopAfsDetailsLinkLabel} 
                          Details </a></td>
                        <!--td  align="center" class="fileds_comment" bgcolor="#F6F6F6" valign="middle"> 
				<input name="tdID[]" type="checkbox" id="tdID[]" value="{tdID}"> 
			   </td-->
                      </tr>
                      <tr id="tdRow{ctr}" align="left">
                        <td colspan="6"  align="center" valign="top" class="fileds_comment"><table width="100%" border="0" cellspacing="1" cellpadding="5" align="center" class="fileds_comment" bgcolor="#000000">
                          
                          <!-- BEGIN TD -->
                          <tr bgcolor="#F6F6F6">
                            <td colspan="3" class="fileds_comment" valign="middle" align="left"><b>DECLARATION 
                              OF PROPERTY</b></td>
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
                            <td><strong>{enteredInRPARForBy} </strong><br />
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
                        <td class="fileds_comment" colspan="7" bgcolor="#F6F6F6" valign="middle">none</td>
                      </tr>
                      <!-- END TDDBEmpty -->
                    </table>
                  </form>
                  <!-- END TDTable --></td>
              </tr>
              <tr>
                <td align="center" valign="top" class="subtitle"><table width="90%" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td class="subtitle">VALUATION<a name="#valuation" id="#valuation"></a></td>
                    <td align="right" valign="top"><a href="#top"><img src="images/arrow_up.gif" width="40" height="30" border="0" /></a></td>
                  </tr>
                </table></td>
              </tr>
              <tr>
                <td align="center" valign="top"><img src="images/spacer.gif" width="10" height="15" /></td>
              </tr>
              <tr>
                <td align="center" valign="top"><table width="90%" border="0" cellspacing="1" cellpadding="2" class="fields">
                  <!--tr valign="top" bgcolor="#F6F6F6"> 
                            <td align="left" class="fileds_comment" colspan="4">- 
                              <a href="javascript: openWin('AFSEncode.php{Session}&formAction=edit','popupWindow',0,0,550,610);" class="fields">enter 
                              values</a></td>
                          </tr-->
                  <tr align="center" valign="top" bgcolor="#CCCCCC">
                    <td width="25%" class="fileds_comment">Total Value</td>
                    <td width="25%" class="fileds_comment">Market Value</td>
                    <td width="25%" class="fileds_comment">Assessed Value</td>
                  </tr>
                  <tr valign="top" bgcolor="#F6F6F6">
                    <td align="center" class="fileds_comment"> Land</td>
                    <td align="right" class="fileds_comment">{landTotalMarketValue}</td>
                    <td align="right" class="fileds_comment">{landTotalAssessedValue}</td>
                  </tr>
                  <tr valign="top" bgcolor="#F6F6F6">
                    <td align="center" class="fileds_comment">Plants/Trees</td>
                    <td align="right" class="fileds_comment">{plantTotalMarketValue}</td>
                    <td align="right" class="fileds_comment">{plantTotalAssessedValue}</td>
                  </tr>
                  <tr valign="top" bgcolor="#F6F6F6">
                    <td align="center" class="fileds_comment">Improvements/Buildings</td>
                    <td align="right" class="fileds_comment">{bldgTotalMarketValue}</td>
                    <td align="right" class="fileds_comment">{bldgTotalAssessedValue}</td>
                  </tr>
                  <tr valign="top" bgcolor="#F6F6F6">
                    <td align="center" class="fileds_comment">Machineries</td>
                    <td align="right" class="fileds_comment">{machTotalMarketValue}</td>
                    <td align="right" class="fileds_comment">{machTotalAssessedValue}</td>
                  </tr>
                  <tr valign="top" bgcolor="#F6F6F6">
                    <td align="center" class="fileds_comment">Total</td>
                    <td align="right" class="fileds_comment"><strong>{totalMarketValue}</strong></td>
                    <td align="right" class="fileds_comment"><strong>{totalAssessedValue}</strong></td>
                  </tr>
                </table></td>
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
    </table>      <!-- END RPTOPTable --></td>
  </tr>
</table>
