<%@LANGUAGE="VBSCRIPT" CODEPAGE="1252"%>
<!--#include file="gm_pages/login_check.asp"-->
<!--#include file="online.asp"-->
<!--#include file="connection.asp"-->
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>OTHL - Old Time Hockey League - League Rules</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="styles/othl.css" rel="stylesheet" type="text/css">
<script language="JavaScript"> 
      function openwin(URL){ 
      window.open(URL,"foo","resizeable=no,toolbar=no,scrollbars=no,location=no,directories=no,status=no,menubar=no,width=200,height=150,top=205,left=500"); 
      } 
</script>
</head>
<body>
		<table border="0" cellspacing="0" cellpadding="0" align="center" id="network_wrap">
			  <tr> 
			    <td height="20" valign="top" colspan="3"> 
			      <table cellpadding="2" cellspacing="0" class="network">
			        <tr> 
			          <td class="network">&nbsp;OTHL NETWORK » <a href="http://forum.othl.org" class="network">MESSAGE BOARD</a>&nbsp;|&nbsp;<a 				href="http://prospects.othl.org" class="network">PROSPECTS</a>&nbsp;|&nbsp;<a href="http://othlpa.othl.org" class="network">PLAYER ASSOCIATION</a></td>
			        </tr>
				  </table>
				</td>
			  </tr>
			</table>
<table width="750" border="0" cellspacing="0" cellpadding="0" height="100%" bgcolor="#333333" background="images/bigback.jpg" align="center">
  <tr>
    <td valign="top"> 
      <table width="730" border="0" cellspacing="0" cellpadding="0" bgcolor="#666666" height="100%" align="center">
        <tr>
          <td valign="top"> 
            <table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#CCCCCC" height="100%" align="center">
              <tr> 
                <td valign="top"><img src="images/main_logo.jpg" width="730" height="85"></td>
              </tr>
<%
	If Not Session("inloggad") = "True" Then
Response.Write "<tr>"
Response.Write "<td height='35' background='images/logo_downside.jpg' align='right' valign='middle'><a href=""JavaScript:openwin('login.asp');"" class='potw2'>GM LOGIN</a>&nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;<a href='admin/index.asp' class='potw2'>ADMIN LOGIN</a>&nbsp;&nbsp;</td>"
Response.Write "</tr>"
	Else	  
Response.Write "<tr>"
Response.Write "<td height='35' background='images/logo_downside_gm.jpg' align='right' valign='middle'>"
Response.Write "<table width='100%' height='25'  border='0' cellpadding='0' cellspacing='0'>"
Response.Write "<tr>"
Response.Write "<td width='42%'>&nbsp;</td>"
Response.Write "<td width='38%' valign='top' align='right'><select name='clicklist' onchange='parent.top.location.href=this.options[this.selectedIndex].value'>"
Response.Write "<option style='background: #BAD8E1;'>TEAM SITES >></option><option>- - -</option>"
	strSQL = ("SELECT gm_team, team_id FROM tbl_gms ORDER by team_id")
	Set Teams = Connect.Execute(strSQL)
	
	Do Until Teams.Eof
Response.Write "<option value='team.asp?team_id="& teams("team_id") &"' style='background: #BAD8E1;'>&nbsp;"& teams("gm_team") &"</option>"
	Teams.MoveNext
	Loop
Response.Write "<option value='#'>- - -</option></select>&nbsp;</td>"
Response.Write "<td width='5%' align='right' valign='top'>&nbsp;</td>"
Response.Write "<td width='15%' align='right' valign='top'><select name='clicklist' onchange='parent.top.location.href=this.options[this.selectedIndex].value'>"
Response.Write "<option style='background: #BAD8E1;'>GM MENU >></option><option value='#'>- - -</option><option value='gm_pages/gm_home.asp?alt=' style='background: #BAD8E1;'>&nbsp;GM Home</option><option value='#'>- - -</option><option value='gm_pages/gm_news.asp?alt=add' style='background: #BAD8E1;'>&nbsp;Add News</option><option value='gm_pages/gm_news.asp?alt=edit' style='background: #BAD8E1;'>&nbsp;Edit News</option><option value='gm_pages/gm_news.asp?alt=remove' style='background: #BAD8E1;'>&nbsp;Remove News</option><option value='#'>- - -</option><option value='gm_pages/gm_prospects.asp?alt=add' style='background: #BAD8E1;'>&nbsp;Add Prospect Article</option><option value='gm_pages/gm_prospects.asp?alt=edit' style='background: #BAD8E1;'>&nbsp;Edit Prospect Article</option><option value='gm_pages/gm_prospects.asp?alt=remove' style='background: #BAD8E1;'>&nbsp;Remove Prospect Article</option><option value='#'>- - -</option><option value='gm_pages/gm_info.asp?alt=' style='background: #BAD8E1;'>&nbsp;Edit Profile</option><option value='#'>- - -</option><option value='gm_pages/gm_trade.asp?alt=' style='background: #BAD8E1;'>&nbsp;Send in trade</option><option value='gm_pages/gm_trade.asp?alt=waiver' style='background: #BAD8E1;'>&nbsp;Send in waiver claim</option><option value='#'>- - -</option><option value='gm_pages/gm_trade.asp?alt=position' style='background: #BAD8E1;'>&nbsp;Change player position</option><option value='#'>- - -</option><option value='gm_pages/gm_offer.asp?alt=PRO' style='background: #BAD8E1;'>&nbsp;Send in PRO offer</option><option value='gm_pages/gm_offer.asp?alt=RFA' style='background: #BAD8E1;'>&nbsp;Send in RFA offer</option><option value='gm_pages/gm_offer.asp?alt=UFA' style='background: #BAD8E1;'>&nbsp;Send in UFA offer</option><option value='#'>- - -</option><option value='gm_pages/gm_coach.asp?alt=' style='background: #BAD8E1;'>&nbsp;Coach Extension</option><option value='gm_pages/gm_coach.asp?alt=offer' style='background: #BAD8E1;'>&nbsp;New Head Coach</option><option value='#'>- - -</option><option value='gm_pages/logout.asp' stye='backgrund: #BAD8E1;'>&nbsp;Logout</option></select>&nbsp;</td>"
Response.Write "</tr>"
Response.Write "</table>"
Response.Write "</td>"
Response.Write "</tr>"
End If
%>		
              <tr>
                <td height="100%" valign="top">
                  <table width="100%" border="0" cellspacing="0" cellpadding="0" height="100%">
                    <tr> 
                      <td width="5" valign="top"> <br>
                        <br>
                      </td>
                      <td width="120" valign="top">
                        <!-- #include file="menu/menu.asp" -->
                      </td>
                      <td width="5" background="images/vert_line.jpg">&nbsp;</td>
                      <td valign="top"> 
                        <table width="100%" border="0" cellspacing="2" cellpadding="2">
                          <tr> 
                            <td valign="top" width="77%" class="main">
                              <table border="0" cellspacing="0" cellpadding="0" width="100%">
                                <tr> 
                                  <td height="30" background="images/background_teamline.jpg"><strong>LEAGUE RULES</strong></td>
                                </tr>
                              </table>
                              <br>
                              <table class="office" width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#ECECEC">
                                <tr> 
                                  <td class='gm' height='20' background='images/background_greyline_15.jpg'> 
                                    <div align='center'><b class='gm'>LEAGUE RULES 
                                      <a name="top"></a> </b></div>
                                  </td>
                                </tr>
                                <tr> 
                                  <td height="20"> 
                                    <div align="center"><a href="rules.asp">TABLE OF CONTENTS</a></div>
                                  </td>
                                </tr>
                              </table>
                              <br>
                              <table class="office" width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#ECECEC">
                                <tr> 
                                  <td class='gm' height='20' background='images/background_greyline_15.jpg' colspan="6"> 
                                    <div align='center'><b class='gm'><a name="1"></a>CHAPTER 
                                      1, CODE OF CONDUCT</b></div>
                                  </td>
                                </tr>
                                <tr> 
                                  <td width="6" height="20">&nbsp;</td>
                                  <td width="14" height="20"> 
                                    <div align="center"><img src="images/line_black.jpg" width="3" height="3" align="absmiddle"></div>
                                  </td>
                                  <td width="36" height="20"> 
                                    <div align="center"><b>1</b></div>
                                  </td>
                                  <td height="20" colspan="3"><b><a name="1"></a>CODE 
                                    OF CONDUCT</b></td>
                                </tr>
                                <tr> 
                                  <td width="6" height="20">&nbsp;</td>
                                  <td width="14" height="20"> 
                                    <div align="center"></div>
                                  </td>
                                  <td width="36" height="20"> 
                                    <div align="center"></div>
                                  </td>
                                  <td height="20" colspan="3" valign="top"> The OTHL code of conduct applies to both people in league management positions and General Managers. Everyone in the OTHL must act in an appropriate manner towards one another. Treat others how you would want to be treated. Be polite and courteous to other GM's, show them respect. Even if you get a ridiculous offer, it isn't right to tear their head off about it. Instead simply explain why you don't like it or just reply with a simple “no thanks.” Debates on the message board and team rivalries are by all means encouraged but know where to draw the line. Any racist remarks or other disrespectful comments will be grounds for immediate dismissal. If anyone is caught cheating in any way they will be immediately dismissed. Members who do not abide by the OTHL code of conduct will be subject to dismissal. </td>
                                </tr>
                                <tr> 
                                  <td width="6" height="20">&nbsp;</td>
                                  <td width="14" height="20">&nbsp;</td>
                                  <td width="36" height="20">&nbsp;</td>
                                  <td height="20" colspan="3" valign="top" background="images/background_linerules.jpg">&nbsp;</td>
                                </tr>
                                <tr> 
                                  <td colspan="3" height="20">&nbsp;</td>
                                  <td height="20" colspan="3" valign="top">
                                    <div align="center"><a href="rules.asp">TABLE OF CONTENTS</a> | <a href="rules_read.asp#top">TO 
                                      THE TOP</a></div>
                                  </td>
                                </tr>
                              </table>
                              <br>
                              <table class="office" width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#ECECEC">
                                <tr> 
                                  <td class='gm' height='20' background='images/background_greyline_15.jpg' colspan="6"> 
                                    <div align='center'><b class='gm'><a name="2"></a>CHAPTER 
                                      2, COMISSIONERS</b></div>
                                  </td>
                                </tr>
                                <tr> 
                                  <td width="6" height="20">&nbsp;</td>
                                  <td width="14" height="20"> 
                                    <div align="center"><img src="images/line_black.jpg" width="3" height="3" align="absmiddle"></div>
                                  </td>
                                  <td width="36" height="20"> 
                                    <div align="center"><b>2</b></div>
                                  </td>
                                  <td height="20" colspan="3"><b><a name="2"></a>COMMISSIONERS</b></td>
                                </tr>
                                <tr> 
                                  <td width="6" height="20">&nbsp;</td>
                                  <td width="14" height="20"> 
                                    <div align="center"></div>
                                  </td>
                                  <td width="36" height="20"> 
                                    <div align="center"></div>
                                  </td>
                                  <td height="20" colspan="3" valign="top"><p>There are three Commissioners of the OTHL; Greg Byron, Mathias Vaigur and Jason Fisher who handle various different tasks. Each Commissioner has an equal say in everything and cannot overrule another Commissioner. Commissioners do not have a right to make significant decisions or changes on their own. The Commissioners are in place to prevent any cheating or dictatorship that occurs in many FHL leagues, as well as to share an equal workload and make group decisions. The Commissioners are responsible for the operations of the entire OTHL.</p></td>
                                </tr>
                                <tr> 
                                  <td width="6" height="20">&nbsp;</td>
                                  <td width="14" height="20">&nbsp;</td>
                                  <td width="36" height="20">&nbsp;</td>
                                  <td height="20" colspan="3" valign="top" background="images/background_linerules.jpg">&nbsp;</td>
                                </tr>
                                <tr> 
                                  <td colspan="3" height="20">&nbsp;</td>
                                  <td height="20" colspan="3" valign="top">
                                    <div align="center"><a href="rules.asp">TABLE OF CONTENTS</a> | <a href="rules_read.asp#top">TO 
                                      THE TOP</a></div>
                                  </td>
                                </tr>
                              </table>
                              <br>
                              <table class="office" width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#ECECEC">
                                <tr> 
                                  <td class='gm' height='20' background='images/background_greyline_15.jpg' colspan="6"> 
                                    <div align='center'><b class='gm'><a name="3"></a>CHAPTER 
                                      3, FHL SIMULATOR</b></div>
                                  </td>
                                </tr>
                                <tr> 
                                  <td width="6" height="20">&nbsp;</td>
                                  <td width="14" height="20"> 
                                    <div align="center"><img src="images/line_black.jpg" width="3" height="3" align="absmiddle"></div>
                                  </td>
                                  <td width="36" height="20"> 
                                    <div align="center"><b>3</b></div>
                                  </td>
                                  <td height="20" colspan="3"><b><a name="3"></a>FHL 
                                    SIMULATOR </b></td>
                                </tr>
                                <tr> 
                                  <td width="6" height="20">&nbsp;</td>
                                  <td width="14" height="20"> 
                                    <div align="center"></div>
                                  </td>
                                  <td width="36" height="20"> 
                                    <div align="center"></div>
                                  </td>
                                  <td height="20" colspan="3">The OTHL uses the 
                                    FHL simulator, version 1.5 produced by Batesoft 
                                    (www.fhlsim.com). All credit for the simulator 
                                    goes to Batesoft. The league may update versions 
                                    of the simulator at any given time, without 
                                    notice.</td>
                                </tr>
                                <tr> 
                                  <td width="6" height="20">&nbsp;</td>
                                  <td width="14" height="20">&nbsp;</td>
                                  <td width="36" height="20">&nbsp;</td>
                                  <td height="20" colspan="3" background="images/background_linerules.jpg">&nbsp;</td>
                                </tr>
                                <tr> 
                                  <td colspan="3" height="20">&nbsp;</td>
                                  <td height="20" colspan="3"><a href="rules.asp">TABEL 
                                    OF CONTETS</a> | <a href="rules_read.asp#top">TO 
                                    THE TOP</a></td>
                                </tr>
                              </table>
                              <br>
                              <table class="office" width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#ECECEC">
                                <tr> 
                                  <td class='gm' height='20' background='images/background_greyline_15.jpg' colspan="6"> 
                                    <div align='center'><b class='gm'><a name="4"></a>CHAPTER 
                                      4, BOARD OF DIRECTORS (BOD)</b></div>
                                  </td>
                                </tr>
                                <tr> 
                                  <td width="6" height="20">&nbsp;</td>
                                  <td width="14" height="20"> 
                                    <div align="center"><img src="images/line_black.jpg" width="3" height="3" align="absmiddle"></div>
                                  </td>
                                  <td width="36" height="20"> 
                                    <div align="center"><b>4a</b></div>
                                  </td>
                                  <td height="20" colspan="3"><b><a name="4a"></a>GENERAL 
                                    INFORMATION</b></td>
                                </tr>
                                <tr> 
                                  <td width="6" height="20">&nbsp;</td>
                                  <td width="14" height="20"> 
                                    <div align="center"></div>
                                  </td>
                                  <td width="36" height="20"> 
                                    <div align="center"></div>
                                  </td>
                                  <td height="20" colspan="3">The <a href="bod.asp" title="Board Of Directors">BOD</a> is made up of a select group of GM's chosen by the Commissioners. A Commissioner may also be a member of the BOD. The BOD will be called upon to help make important decisions, vote on possible player suspensions and to vote on trades that may be excessively unfair. The BOD members are expected to be leaders and be good role models for the rest of the GM's, lending a hand here and there and helping out GM's if they have questions or whatnot.</td>
                                </tr>
                                <tr> 
                                  <td width="6" height="20">&nbsp;</td>
                                  <td width="14" height="20">&nbsp;</td>
                                  <td width="36" height="20">&nbsp;</td>
                                  <td height="20" colspan="3">&nbsp;</td>
                                </tr>
                                <tr> 
                                  <td width="6" height="20">&nbsp;</td>
                                  <td width="14" height="20"> 
                                    <div align="center"><img src="images/line_black.jpg" width="3" height="3" align="absmiddle"></div>
                                  </td>
                                  <td width="36" height="20"> 
                                    <div align="center"><b>4b</b></div>
                                  </td>
                                  <td height="20" colspan="3"><b><a name="4b"></a> 
                                    BOARD OF DIRECTORS, TRADE REVIEW</b></td>
                                </tr>
                                <tr> 
                                  <td width="6" height="20">&nbsp;</td>
                                  <td width="14" height="20"> 
                                    <div align="center"></div>
                                  </td>
                                  <td width="36" height="20"> 
                                    <div align="center"></div>
                                  </td>
                                  <td height="20" colspan="3"><p>If a trade is made that anyone feels is unfair then they may notify a Commissioner and a decision will be made to either send the trade to the <a href="bod.asp" title="Board Of Directors">BOD</a> or let the trade go through.<br>
                                    <br>
                                    Then a trade is sent to the <a href="bod.asp" title="Board Of Directors">BOD</a>, the trade is temporarily frozen. The trade will be voted on by all <a href="bod.asp" title="Board Of Directors">BOD</a> members, they can simply respond with a “yes” or “no” answer but giving explanations is encouraged. Voting will be done privately in the <a href="bod.asp" title="Board Of Directors">BOD</a> section of the message board. The results of the <a href="bod.asp" title="Board Of Directors">BOD's</a> decision will be given within 24 hours. In the event that one or two <a href="bod.asp" title="Board Of Directors">BOD</a> members are involved in the trade then the <a href="bod.asp" title="Board Of Directors">BOD</a> members involved will not be allowed to vote .</p>                                  </td>
                                </tr>
                                <tr> 
                                  <td width="6" height="20">&nbsp;</td>
                                  <td width="14" height="20">&nbsp;</td>
                                  <td width="36" height="20">&nbsp;</td>
                                  <td height="20" colspan="3" background="images/background_linerules.jpg">&nbsp;</td>
                                </tr>
                                <tr> 
                                  <td colspan="3" height="20">&nbsp;</td>
                                  <td height="20" colspan="3">
                                    <div align="center"><a href="rules.asp">TABLE OF CONTENTS</a> | <a href="rules_read.asp#top">TO 
                                      THE TOP</a></div>
                                  </td>
                                </tr>
                              </table>
                              <br>
                              <table class="office" width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#ECECEC">
                                <tr> 
                                  <td class='gm' height='20' background='images/background_greyline_15.jpg' colspan="6"> 
                                    <div align='center'><b class='gm'><a name="5"></a>CHAPTER 
                                      5, GENERAL MANAGER OPERATIONS</b></div>
                                  </td>
                                </tr>
                                <tr> 
                                  <td width="6" height="20">&nbsp;</td>
                                  <td width="14" height="20"> 
                                    <div align="center"><img src="images/line_black.jpg" width="3" height="3" align="absmiddle"></div>
                                  </td>
                                  <td width="36" height="20"> 
                                    <div align="center"><b>5a</b></div>
                                  </td>
                                  <td height="20" colspan="3"><b><a name="5a"></a>DUTIES</b></td>
                                </tr>
                                <tr> 
                                  <td width="6" height="20">&nbsp;</td>
                                  <td width="14" height="20"> 
                                    <div align="center"></div>
                                  </td>
                                  <td width="36" height="20"> 
                                    <div align="center"></div>
                                  </td>
                                  <td height="20" colspan="3">As a General Manager 
                                    in the OTHL you have some specific duties 
                                    that should be done on a regular basis. The 
                                    duties include but are not limited to; sending 
                                    in lines, making trades to improve your franchise, 
                                    signing players, balancing your franchise's 
                                    finances and keeping within the roster limitations. 
                                    If you frequently do not live up to your duties 
                                    then you are subject to dismissal. <br>
                                    <br>
                                  </td>
                                </tr>
                                <tr> 
                                  <td width="6" height="20">&nbsp;</td>
                                  <td width="14" height="20">&nbsp;</td>
                                  <td width="36" height="20">&nbsp;</td>
                                  <td height="20" colspan="3">&nbsp;</td>
                                </tr>
                                <tr> 
                                  <td width="6" height="20">&nbsp;</td>
                                  <td width="14" height="20"> 
                                    <div align="center"><img src="images/line_black.jpg" width="3" height="3" align="absmiddle"></div>
                                  </td>
                                  <td width="36" height="20"> 
                                    <div align="center"><b>5b</b></div>
                                  </td>
                                  <td height="20" colspan="3"><b><a name="5b"></a>PARTICIPATION</b></td>
                                </tr>
                                <tr> 
                                  <td width="6" height="20">&nbsp;</td>
                                  <td width="14" height="20"> 
                                    <div align="center"></div>
                                  </td>
                                  <td width="36" height="20"> 
                                    <div align="center"></div>
                                  </td>
                                  <td height="20" colspan="3"> Being active and social around the league are just as important as your GM duties. You must have ICQ and use it to be in the OTHL, ICQ is a very important communication tool and a lot of fun can be had talking to other GM's. Reading and posting on the message board is highly encouraged. A lot of important information is on the message board along with some great discussions. If you do not keep up with the message board then you will miss things, the message board is a huge part of the league and that cannot be stressed enough. Checking and replying to e-mail is also very important, it's expected that you check e-mail at least once every 48 hours. Again if you frequently do not live up to these expectations then you will be subject to dismissal </td>
                                </tr>
                                <tr> 
                                  <td width="6" height="20">&nbsp;</td>
                                  <td width="14" height="20">&nbsp;</td>
                                  <td width="36" height="20">&nbsp;</td>
                                  <td height="20" colspan="3">&nbsp;</td>
                                </tr>
                                <tr> 
                                  <td width="6" height="20">&nbsp;</td>
                                  <td width="14" height="20"> 
                                    <div align="center"><img src="images/line_black.jpg" width="3" height="3" align="absmiddle"></div>
                                  </td>
                                  <td width="36" height="20"> 
                                    <div align="center"><b>5c</b></div>
                                  </td>
                                  <td height="20" colspan="3"><b><a name="5c"></a>LEAVE 
                                    OF ABSENCE</b></td>
                                </tr>
                                <tr> 
                                  <td width="6" height="20">&nbsp;</td>
                                  <td width="14" height="20"> 
                                    <div align="center"></div>
                                  </td>
                                  <td width="36" height="20"> 
                                    <div align="center"></div>
                                  </td>
                                  <td height="20" colspan="3"> There will obviously be exceptions made to GM duties and participation as long as notice is given. If you are studying for exams, have a ton of homework, going on vacation, injured, getting married etc.. then obviously you will not be able to fulfill your duties. Let at least one of the Commissioners know and it should be fine. If a GM is gone for a lot longer than they stated, gone for a while without any notice or is frequently too busy then each case will be looked at individually and they may be subject to dismissal. </td>
                                </tr>
                                <tr> 
                                  <td width="6" height="20">&nbsp;</td>
                                  <td width="14" height="20">&nbsp;</td>
                                  <td width="36" height="20">&nbsp;</td>
                                  <td height="20" colspan="3">&nbsp;</td>
                                </tr>
                                <tr> 
                                  <td width="6" height="20">&nbsp;</td>
                                  <td width="14" height="20"> 
                                    <div align="center"><img src="images/line_black.jpg" width="3" height="3" align="absmiddle"></div>
                                  </td>
                                  <td width="36" height="20"> 
                                    <div align="center"><b>5d</b></div>
                                  </td>
                                  <td height="20" colspan="3"><b><a name="5d"></a>SWITCHING 
                                    TEAMS </b></td>
                                </tr>
                                <tr> 
                                  <td width="6" height="20">&nbsp;</td>
                                  <td width="14" height="20"> 
                                    <div align="center"></div>
                                  </td>
                                  <td width="36" height="20"> 
                                    <div align="center"></div>
                                  </td>
                                  <td height="20" colspan="3"> When a GM leaves the league for any reason then their former team becomes available to anyone in the league who wants to switch teams. However someone from outside of the league could take over the team, current OTHL GM's do not get priority. The decision of who gets the team will be left to the Commissioners entirely. </td>
                                </tr>
								<tr> 
                                  <td width="6" height="20">&nbsp;</td>
                                  <td width="14" height="20">&nbsp;</td>
                                  <td width="36" height="20">&nbsp;</td>
                                  <td height="20" colspan="3">&nbsp;</td>
                                </tr>
                                <tr> 
                                  <td width="6" height="20">&nbsp;</td>
                                  <td width="14" height="20"> 
                                    <div align="center"><img src="images/line_black.jpg" width="3" height="3" align="absmiddle"></div>
                                  </td>
                                  <td width="36" height="20"> 
                                    <div align="center"><b>5e</b></div>
                                  </td>
                                  <td height="20" colspan="3"><b><a name="5d"></a>COMPLAINTS</b></td>
                                </tr>
                                <tr> 
                                  <td width="6" height="20">&nbsp;</td>
                                  <td width="14" height="20"> 
                                    <div align="center"></div>
                                  </td>
                                  <td width="36" height="20"> 
                                    <div align="center"></div>
                                  </td>
                                  <td height="20" colspan="3"> To file a complaint about anything going on in the league you can e-mail a Commissioner or privately get in touch with the league in another way. Complaints are not to be posted on the message board at all. If you have any concerns they will be dealt with professionally and privately.</td>
                                </tr>								
                                <tr> 
                                  <td width="6" height="20">&nbsp;</td>
                                  <td width="14" height="20">&nbsp;</td>
                                  <td width="36" height="20">&nbsp;</td>
                                  <td height="20" colspan="3" background="images/background_linerules.jpg">&nbsp;</td>
                                </tr>
                                <tr> 
                                  <td colspan="3" height="21">&nbsp;</td>
                                  <td height="21" colspan="3"> 
                                    <div align="center"><a href="rules.asp">TABLE OF CONTENTS</a> | <a href="rules_read.asp#top">TO 
                                      THE TOP</a></div>
                                  </td>
                                </tr>
                              </table>
                              <br>
                              <table class="office" width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#ECECEC">
                                <tr> 
                                  <td class='gm' height='20' background='images/background_greyline_15.jpg' colspan="6"> 
                                    <div align='center'><b class='gm'><a name="6"></a>CHAPTER 
                                      6, COACHES</b></div>
                                  </td>
                                </tr>
                                <tr> 
                                  <td width="6" height="20">&nbsp;</td>
                                  <td width="14" height="20"> 
                                    <div align="center"><img src="images/line_black.jpg" width="3" height="3" align="absmiddle"></div>
                                  </td>
                                  <td width="36" height="20"> 
                                    <div align="center"><b>6a</b></div>
                                  </td>
                                  <td height="20" colspan="3"><b><a name="6a"></a>GENERAL 
                                    INFORMATION</b></td>
                                </tr>
                                <tr> 
                                  <td width="6" height="20">&nbsp;</td>
                                  <td width="14" height="20"> 
                                    <div align="center"></div>
                                  </td>
                                  <td width="36" height="20"> 
                                    <div align="center"></div>
                                  </td>
                                  <td height="20" colspan="3">Coaches affect the 
                                    way your team plays. Coach ratings can be 
                                    seen on the coach listings page. Each signed 
                                    coach has their own contract with a set salary 
                                    and length. Coaches can have their contracts 
                                    extended at any time. Each time a coaches 
                                    contract is renewed or extended, their salary 
                                    must go up by a minimum of 10%. Coach ratings 
                                    are based on the NHL and can change only at 
                                    the end of a season.</td>
                                </tr>
                                <tr> 
                                  <td width="6" height="20">&nbsp;</td>
                                  <td width="14" height="20">&nbsp;</td>
                                  <td width="36" height="20">&nbsp;</td>
                                  <td height="20" colspan="3">&nbsp;</td>
                                </tr>
                                <tr> 
                                  <td width="6" height="20">&nbsp;</td>
                                  <td width="14" height="20"> 
                                    <div align="center"><img src="images/line_black.jpg" width="3" height="3" align="absmiddle"></div>
                                  </td>
                                  <td width="36" height="20"> 
                                    <div align="center"><b>6b</b></div>
                                  </td>
                                  <td height="20" colspan="3"><b><a name="6b"></a>MAKING 
                                    COACHING CHANGES</b></td>
                                </tr>
                                <tr> 
                                  <td width="6" height="20">&nbsp;</td>
                                  <td width="14" height="20"> 
                                    <div align="center"></div>
                                  </td>
                                  <td width="36" height="20"> 
                                    <div align="center"></div>
                                  </td>
                                  <td height="20" colspan="3">Coaches may be fired 
                                    at any time, however they must be paid 80% of their entire contract immediately 
                                    by their former club. As soon as a coach is 
                                    fired, one must be signed and hired at the 
                                    same time. Any coach on the coaches list who 
                                    is not signed with another team may be hired. 
                                    New coaches may be added to the list at any 
                                    time. A coach who retires in the NHL, will 
                                    finish the current OTHL season and retire 
                                    in the OTHL in the following off-season. If 
                                    a coach retires in the NHL during the OTHL 
                                    off-season then he retires immediately from 
                                    the OTHL. Once a coach retires from the OTHL, 
                                    he forfeits his pay and his contract is voided. 
                                    The coaches former team will retain the coaches 
                                    rights</td>
                                </tr>
                                <tr> 
                                  <td width="6" height="20">&nbsp;</td>
                                  <td width="14" height="20">&nbsp;</td>
                                  <td width="36" height="20">&nbsp;</td>
                                  <td height="20" colspan="3" background="images/background_linerules.jpg">&nbsp;</td>
                                </tr>
                                <tr> 
                                  <td colspan="3" height="20">&nbsp;</td>
                                  <td height="20" colspan="3">
                                    <div align="center"><a href="rules.asp">TABLE OF CONTENTS</a> | <a href="rules_read.asp#top">TO 
                                      THE TOP</a></div>
                                  </td>
                                </tr>
                              </table>
                              <br>
                              <table class="office" width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#ECECEC">
                                <tr> 
                                  <td class='gm' height='20' background='images/background_greyline_15.jpg' colspan="6"><div align='center'><b class='gm'><a name="7"></a>CHAPTER 7, TEAM ROSTER</b></div></td>
                                </tr>
                                <tr> 
                                  <td width="6" height="20">&nbsp;</td>
                                  <td width="14" height="20"><div align="center"><img src="images/line_black.jpg" width="3" height="3" align="absmiddle"></div></td>
                                  <td width="36" height="20"><div align="center"><b>7a</b></div></td>
                                  <td height="20" colspan="3"><b><a name="7a"></a>ROSTER RESTRICTIONS</b></td>
                                </tr>
                                <tr> 
                                  <td width="6" height="20">&nbsp;</td>
                                  <td width="14" height="20"><div align="center"></div></td>
                                  <td width="36" height="20"><div align="center"></div></td>
                                  <td height="20" colspan="3"><p>Teams must have a minimum of 20 active, non-injured players on their parent club roster at all times. Of these, at least 3 must be listed at each forward position (C, RW, LW), at least 6 must be listed at defense, and at least 2 must be goaltenders. Compliance with this rule can be assured by frequently sending in lines via the GM Editor. Teams are encouraged to have 3 goalies signed to OTHL contracts in case one is injured. If a goalie needs to be brought in immediately for whatever reason then the team's best goalie prospect will be signed for $1,100,000 per season for 3 seasons. </p><p>Teams may have a maximum of 24 active, non injured players on their pro roster at one time during the regular season and playoffs. Teams may have an unlimited amount of players on their pro roster during pre-season. </p><p>Teams may have a maximum of 50 players signed to OTHL contracts.</p></td>
                                </tr>
                                <tr> 
                                  <td width="6" height="20">&nbsp;</td>
                                  <td width="14" height="20">&nbsp;</td>
                                  <td width="36" height="20">&nbsp;</td>
                                  <td height="20" colspan="3">&nbsp;</td>
                                </tr>
                                <tr> 
                                  <td width="6" height="20">&nbsp;</td>
                                  <td width="14" height="20"><div align="center"><img src="images/line_black.jpg" width="3" height="3" align="absmiddle"></div></td>
                                  <td width="36" height="20"><div align="center"><b>7ai</b></div></td>
                                  <td height="20" colspan="3"><b><a name="7ai"></a>GOALIE RESTRICTIONS</b></td>
                                </tr>
                                <tr> 
                                  <td width="6" height="20">&nbsp;</td>
                                  <td width="14" height="20"></td>
                                  <td width="36" height="20"></td>
                                  <td height="20" colspan="3"><p>Teams are only allowed to play a goalie for up to 72 games or 4,320 minutes during the course of the regular season. If a goalie plays a 73rd game then the said goalie is suspended for the rest of the regular season (which would be a maximum of 10 games). If the goalie plays his 73rd regular season game on the last day of the season then he is suspended for 1 playoff game - if the team does not make the playoffs then the team is fined $100,000.</p></td>
                                </tr>
                                <tr> 
                                  <td width="6" height="20">&nbsp;</td>
                                  <td width="14" height="20">&nbsp;</td>
                                  <td width="36" height="20">&nbsp;</td>
                                  <td height="20" colspan="3">&nbsp;</td>
                                </tr>								
                                <tr> 
                                  <td width="6" height="20">&nbsp;</td>
                                  <td width="14" height="20"><div align="center"><img src="images/line_black.jpg" width="3" height="3" align="absmiddle"></div></td>
                                  <td width="36" height="20"><div align="center"><b>7b</b></div></td>
                                  <td height="20" colspan="3"><b><a name="7b"></a>FINES</b></td>
                                </tr>
                                <tr> 
                                  <td width="6" height="20">&nbsp;</td>
                                  <td width="14" height="20"></td>
                                  <td width="36" height="20"></td>
                                  <td height="20" colspan="3">Failure to comply with the roster requirements will result in  a fine of $100,000 for the first team game played with rosters in violation of the CBA and $250,000 for each subsequent game played with rosters in violation of the CBA.</td>
                                </tr>
                                <tr> 
                                  <td width="6" height="20">&nbsp;</td>
                                  <td width="14" height="20">&nbsp;</td>
                                  <td width="36" height="20">&nbsp;</td>
                                  <td height="20" colspan="3">&nbsp;</td>
                                </tr>
                                <tr> 
                                  <td width="6" height="20">&nbsp;</td>
                                  <td width="14" height="20"><div align="center"><img src="images/line_black.jpg" width="3" height="3" align="absmiddle"></div></td>
                                  <td width="36" height="20"><div align="center"><b>7c</b></div></td>
                                  <td height="20" colspan="3"><b><a name="7c"></a>SWITCHING A PLAYER'S POSITION</b></td>
                                </tr>
                                <tr> 
                                  <td width="6" height="20">&nbsp;</td>
                                  <td width="14" height="20">&nbsp;</td>
                                  <td width="36" height="20">&nbsp;</td>
                                  <td height="20" colspan="3"><p>You may switch a player's position at any time. You must provide proof that the player has played the position you want them changed to by providing a Commissioner with a valid link that shows the player at that position. The link must come from one of four acceptable sources, either TSN.ca, ESPN.com, NHL.com or one of the official NHL team websites.</p></td>
                                </tr>
                                <tr> 
                                  <td width="6" height="20">&nbsp;</td>
                                  <td width="14" height="20">&nbsp;</td>
                                  <td width="36" height="20">&nbsp;</td>
                                  <td height="20" colspan="3">&nbsp;</td>
                                </tr>
                                <tr> 
                                  <td width="6" height="20">&nbsp;</td>
                                  <td width="14" height="20"><div align="center"><img src="images/line_black.jpg" width="3" height="3" align="absmiddle"></div></td>
                                  <td width="36" height="20"><div align="center"><b>7d</b></div></td>
                                  <td height="20" colspan="3"><b><a name="7d"></a>RELEASING A PLAYER</b></td>
                                </tr>
                                <tr> 
                                  <td width="6" height="20">&nbsp;</td>
                                  <td width="14" height="20">&nbsp;</td>
                                  <td width="36" height="20">&nbsp;</td>
                                  <td height="20" colspan="3"><p>A team may terminate a player's contract at any time, however the team is obligated to pay the player's full remaining contract as one lump sum at the time of termination. This process is referred to as &quot;buying-out&quot; the remaining life of the contract. At the point of termination, the player becomes a unrestricted free agent (UFA) regardless of age. If the player has retired in the NHL then he will be terminated from the league.</p></td>
                                </tr>
                                <tr> 
                                  <td width="6" height="20">&nbsp;</td>
                                  <td width="14" height="20">&nbsp;</td>
                                  <td width="36" height="20">&nbsp;</td>
                                  <td height="20" colspan="3">&nbsp;</td>
                                </tr>
                                <tr> 
                                  <td width="6" height="20">&nbsp;</td>
                                  <td width="14" height="20"><div align="center"><img src="images/line_black.jpg" width="3" height="3" align="absmiddle"></div></td>
                                  <td width="36" height="20"><div align="center"><b>7e</b></div></td>
                                  <td height="20" colspan="3"><b><a name="7e"></a>TEAM ROSTER, ROOKIE STATUS</b></td>
                                </tr>
                                <tr> 
                                  <td width="6" height="20">&nbsp;</td>
                                  <td width="14" height="20">&nbsp;</td>
                                  <td width="36" height="20">&nbsp;</td>
                                  <td height="20" colspan="3"><p>To qualify to be a rookie, the skater/goalie must be 25 years old or younger at the start of the OTHL season. A skater remains a rookie for the first 24 OTHL pro games, on their 25th game they give up rookie status. A goalie remains a rookie for the first 12 OTHL pro games, on their 13th game they give up rookie status. However anyone who starts a season as a rookie, emains a rookie until the end of that season.</p></td>
                                </tr>
                                <tr> 
                                  <td width="6" height="20">&nbsp;</td>
                                  <td width="14" height="20">&nbsp;</td>
                                  <td width="36" height="20">&nbsp;</td>
                                  <td height="20" colspan="3" background="images/background_linerules.jpg">&nbsp;</td>
                                </tr>
                                <tr> 
                                  <td colspan="3" height="20">&nbsp;</td>
                                  <td height="20" colspan="3"><div align="center"><a href="rules.asp">TABLE OF CONTENTS</a> | <a href="rules_read.asp#top">TO THE TOP</a></div></td>
                                </tr>
                              </table>
                              <br/>
                              <table class="office" width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#ECECEC">
                                <tr> 
                                  <td class='gm' height='20' background='images/background_greyline_15.jpg' colspan="6"><div align='center'><b class='gm'><a name="8"></a>CHAPTER 8, TEAM LINES</b></div></td>
                                </tr>
                                <tr> 
                                  <td width="6" height="20">&nbsp;</td>
                                  <td width="14" height="20"><div align="center"><img src="images/line_black.jpg" width="3" height="3" align="absmiddle"></div></td>
                                  <td width="36" height="20"><div align="center"><b>8a</b></div></td>
                                  <td height="20" colspan="3"><b><a name="8a"></a>LINE RESTRICTIONS</b></td>
                                </tr>
                                <tr> 
                                  <td width="6" height="20">&nbsp;</td>
                                  <td width="14" height="20">&nbsp;</td>
                                  <td width="36" height="20">&nbsp;</td>
                                  <td height="20" colspan="3"><p>As discussed in section 7a., functional lines must include dressing 20 active, non-injured players. Again, of these, at least 3 must be listed at each forward position (C, RW, LW), at least 6 must be listed at defense, and 2 must be goaltenders.</p><p>A GM must submit the best lines as they possibly can or atleast within reason. If any team is caught using lines that considerably hurt their team's chances of winning then it will be grounds for dismissal. The commissioners will use their discretion to monitor the lines and make sure no teams are throwing games.</p></td>
                                </tr>
                                <tr> 
                                  <td width="6" height="20">&nbsp;</td>
                                  <td width="14" height="20">&nbsp;</td>
                                  <td width="36" height="20">&nbsp;</td>
                                  <td height="20" colspan="3">&nbsp;</td>
                                </tr>
                                <tr> 
                                  <td width="6" height="20">&nbsp;</td>
                                  <td width="14" height="20"><div align="center"><img src="images/line_black.jpg" width="3" height="3" align="absmiddle"></div></td>
                                  <td width="36" height="20"><div align="center"><b>8b</b></div></td>
                                  <td height="20" colspan="3"><b><a name="8b"></a>PLAYING PLAYERS OUT OF POSITION</b></td>
                                </tr>
                                <tr> 
                                  <td width="6" height="20">&nbsp;</td>
                                  <td width="14" height="20">&nbsp;</td>
                                  <td width="36" height="20">&nbsp;</td>
                                  <td height="20" colspan="3"><p>Players may play out of position, but according to the makers of the simulator, their performance will be reduced if they play at a position other than that at which they are listed.</p></td>
                                </tr>
                                <tr> 
                                  <td width="6" height="20">&nbsp;</td>
                                  <td width="14" height="20">&nbsp;</td>
                                  <td width="36" height="20">&nbsp;</td>
                                  <td height="20" colspan="3">&nbsp;</td>
                                </tr>
                                <tr> 
                                  <td width="6" height="20">&nbsp;</td>
                                  <td width="14" height="20"><div align="center"><img src="images/line_black.jpg" width="3" height="3" align="absmiddle"></div></td>
                                  <td width="36" height="20"><div align="center"><b>8c</b></div></td>
                                  <td height="20" colspan="3"><b><a name="8c"></a>SUBMITTING LINES</b></td>
                                </tr>
                                <tr> 
                                  <td width="6" height="20">&nbsp;</td>
                                  <td width="14" height="20">&nbsp;</td>
                                  <td width="36" height="20">&nbsp;</td>
                                  <td height="20" colspan="3"><p>The essentials of using the editor are as follows; First, you must download the “League Files” from the OTHL home page. Unzip the contents of the file onto your computer in the directory of your choice. While running the GM Editor, select “File Open” and open the files for the OTHL. Select your team and from there it should be pretty self-explanatory. Once your lines are set choose “Save Lines”. Do not type in a password; just click “OK.” Then send the files in an email with the lines file attached to the appropriate e-mail address. The filename should be “yourteam.lns” </p></td>
                                </tr>
                                <tr> 
                                  <td width="6" height="20">&nbsp;</td>
                                  <td width="14" height="20">&nbsp;</td>
                                  <td width="36" height="20">&nbsp;</td>
                                  <td height="20" colspan="3" background="images/background_linerules.jpg">&nbsp;</td>
                                </tr>
                                <tr> 
                                  <td colspan="3" height="20">&nbsp;</td>
                                  <td height="20" colspan="3"><div align="center"><a href="rules.asp">TABLE OF CONTENTS</a> | <a href="rules_read.asp#top">TO THE TOP</a></div></td>
                                </tr>
                              </table>
                              <br/>
                              <table class="office" width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#ECECEC">
                                <tr> 
                                  <td class='gm' height='20' background='images/background_greyline_15.jpg' colspan="6"><div align='center'><b class='gm'><a name="9"></a>CHAPTER 9, PLAYER RATINGS</b></div></td>
                                </tr>
                                <tr> 
                                  <td width="6" height="20">&nbsp;</td>
                                  <td width="14" height="20"><div align="center"><img src="images/line_black.jpg" width="3" height="3" align="absmiddle"></div></td>
                                  <td width="36" height="20"><div align="center"><b>9a</b></div></td>
                                  <td height="20" colspan="3"><b><a name="9a"></a>RATING ABBREVIATIONS</b></td>
                                </tr>
                                <tr> 
                                  <td width="6" height="20">&nbsp;</td>
                                  <td width="14" height="20">&nbsp;</td>
                                  <td width="36" height="20">&nbsp;</td>
                                  <td height="20" colspan="3"> Player performance 
                                    is based on their ratings in a variety of 
                                    skills. The<br>
                                    abbreviations are as follows: 
                                    <p><b><i>FOR ALL PLAYERS:</i></b></p>
                                    <p>PO - Position - Indicates the position 
                                      the player plays.<br>
                                      HD - Stick Hand - Indicates skater's stick 
                                      hand or goalie's glove hand<br>
                                      CD - Condition - How healthy the player 
                                      is. &quot;OK&quot; indicates 100%.<br>
                                      IJ - Injury - How long the player is injured 
                                      for.<br>
                                      EX - Experience - The amount of experience 
                                      the player has.<br>
                                      LD - Leadership - The player's leadership 
                                      skills.<br>
                                      OV - Overall - The player's overall effectiveness.</p>
                                    <p><b><i>SKATERS:</i></b></p>
                                    <p>IT - Intensity - Hitting, fore checking 
                                      and fighting.<br>
                                      SP - Speed - This indicates the player's 
                                      skating speed.<br>
                                      ST - Strength - Indicates the player's strength 
                                      and power.<br>
                                      EN - Endurance - Ability to play long, more 
                                      productive shifts.<br>
                                      DU - Durability - The player's tendency 
                                      to get injured.<br>
                                      DI - Discipline - The player's tendency 
                                      to get penalized.<br>
                                      SK - Skating - Player's ability to stop, 
                                      turn, accelerate and skate.<br>
                                      PA - Passing - The player's ability to pass 
                                      the puck.<br>
                                      PC - Puck Control - The player's ability 
                                      to control the puck.<br>
                                      DF - Defense - Ability to back check and 
                                      play defense.<br>
                                      SC - Scoring - Player's shooting and goal 
                                      scoring ability.</p>
                                    <p><b><i>GOALTENDERS:</i></b></p>
                                    <p>IT - Player's likeliness to play the puck 
                                      and cut down the angles.<br>
                                      SP - Player's overall speed. Glove quickness 
                                      and reaction ability.<br>
                                      ST - Size in goal. A bigger goalie can take 
                                      up more of the net.<br>
                                      EN - Same as above.<br>
                                      DU - Save as above.<br>
                                      DI - Save as above.<br>
                                      SK - Ability to move around in his crease, 
                                      side to side movement.<br>
                                      PA - Ability to play the puck out to the 
                                      forwards.<br>
                                      PC - How well the player controls rebounds 
                                      and gathers the puck</p>
                                  </td>
                                </tr>
                                <tr> 
                                  <td width="6" height="20">&nbsp;</td>
                                  <td width="14" height="20">&nbsp;</td>
                                  <td width="36" height="20">&nbsp;</td>
                                  <td height="20" colspan="3">&nbsp;</td>
                                </tr>
                                <tr> 
                                  <td width="6" height="20">&nbsp;</td>
                                  <td width="14" height="20"> 
                                    <div align="center"><img src="images/line_black.jpg" width="3" height="3" align="absmiddle"></div>
                                  </td>
                                  <td width="36" height="20"> 
                                    <div align="center"><b>9b</b></div>
                                  </td>
                                  <td height="20" colspan="3"><b><a name="9b"></a>RE-RATES</b></td>
                                </tr>
                                <tr> 
                                  <td width="6" height="20">&nbsp;</td>
                                  <td width="14" height="20"> 
                                    <div align="center"></div>
                                  </td>
                                  <td width="36" height="20"> 
                                    <div align="center"></div>
                                  </td>
                                  <td height="20" colspan="3">The player ratings 
                                    will be based on NHL performance, not based 
                                    on how well they perform in the simulator. 
                                    Ratings will be made and reviewed by members 
                                    of the BOD. The ratings will be reviewed twice 
                                    per season.</td>
                                </tr>
                                <tr> 
                                  <td width="6" height="20">&nbsp;</td>
                                  <td width="14" height="20">&nbsp;</td>
                                  <td width="36" height="20">&nbsp;</td>
                                  <td height="20" colspan="3">&nbsp;</td>
                                </tr>
                                <tr> 
                                  <td width="6" height="20">&nbsp;</td>
                                  <td width="14" height="20"> 
                                    <div align="center"><img src="images/line_black.jpg" width="3" height="3" align="absmiddle"></div>
                                  </td>
                                  <td width="36" height="20"> 
                                    <div align="center"><b>9bi</b></div>
                                  </td>
                                  <td height="20" colspan="3"><b><a name="9bi"></a>OFF-SEASON 
                                    RE-RATES</b></td>
                                </tr>
                                <tr> 
                                  <td width="6" height="20">&nbsp;</td>
                                  <td width="14" height="20"> 
                                    <div align="center"></div>
                                  </td>
                                  <td width="36" height="20"> 
                                    <div align="center"></div>
                                  </td>
                                  <td height="20" colspan="3">During the off-season, 
                                    all players that played at least 1 NHL game 
                                    during the past NHL season will be re-rated, 
                                    some may be re-rated that didn't play an NHL 
                                    game for various reasons. The ratings will 
                                    be based primarily on the last NHL season 
                                    but the player's performances from previous 
                                    NHL seasons will be taken into account too. 
                                    Players who did not play a majority of the 
                                    season due to injury or holdout will not have 
                                    their ratings decreased (except for perhaps 
                                    the durability rating), unless age and time 
                                    away from the game can be judged to be a significant 
                                    detriment to a player's perceived abilities. 
                                    Before the season begins, each team can select 
                                    three players to be re-rated again, they may 
                                    state why they want them re-rated or what 
                                    they don't like about the rating.</td>
                                </tr>
                                <tr> 
                                  <td width="6" height="20">&nbsp;</td>
                                  <td width="14" height="20">&nbsp;</td>
                                  <td width="36" height="20">&nbsp;</td>
                                  <td height="20" colspan="3">&nbsp;</td>
                                </tr>
                                <tr> 
                                  <td width="6" height="20">&nbsp;</td>
                                  <td width="14" height="20"> 
                                    <div align="center"><img src="images/line_black.jpg" width="3" height="3" align="absmiddle"></div>
                                  </td>
                                  <td width="36" height="20"> 
                                    <div align="center"><b>9bii</b></div>
                                  </td>
                                  <td height="20" colspan="3"><b><a name="9bii"></a>MID-SEASON 
                                    RE-RATES</b></td>
                                </tr>
                                <tr> 
                                  <td width="6" height="20">&nbsp;</td>
                                  <td width="14" height="20"> 
                                    <div align="center"></div>
                                  </td>
                                  <td width="36" height="20"> 
                                    <div align="center"></div>
                                  </td>
                                  <td height="20" colspan="3">Near the middle 
                                    of the season, teams will be allowed to submit 
                                    3<br>
                                    players whose ratings they would like to have 
                                    reviewed. Again, they may state why they want 
                                    them re-rated or what they don't like about 
                                    the rating. Those players' ratings may increase 
                                    or decrease, based on their performance during 
                                    that NHL season. GM's are allowed to trade 
                                    1 of their 3 mid-season re-rates after it 
                                    is announced when the re-rates will be. A 
                                    re-rate may only be traded once. The mid-season 
                                    re-rates are non-negotiable and will not be 
                                    reviewed after they are released.</td>
                                </tr>
                                <tr> 
                                  <td width="6" height="20">&nbsp;</td>
                                  <td width="14" height="20">&nbsp;</td>
                                  <td width="36" height="20">&nbsp;</td>
                                  <td height="20" colspan="3" background="images/background_linerules.jpg">&nbsp;</td>
                                </tr>
                                <tr> 
                                  <td colspan="3" height="20">&nbsp;</td>
                                  <td height="20" colspan="3">
                                    <div align="center"><a href="rules.asp">TABLE OF CONTENTS</a> | <a href="rules_read.asp#top">TO 
                                      THE TOP</a></div>
                                  </td>
                                </tr>
                              </table>
                              <br>
                              <table class="office" width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#ECECEC">
                                <tr> 
                                  <td class='gm' height='20' background='images/background_greyline_15.jpg' colspan="6"> 
                                    <div align='center'><b class='gm'><a name="10"></a>CHAPTER 
                                      10, PLAYER SUSPENSIONS</b></div>
                                  </td>
                                </tr>
                                <tr> 
                                  <td width="6" height="20">&nbsp;</td>
                                  <td width="14" height="20"> 
                                    <div align="center"><img src="images/line_black.jpg" width="3" height="3" align="absmiddle"></div>
                                  </td>
                                  <td width="36" height="20"> 
                                    <div align="center"><b>10a</b></div>
                                  </td>
                                  <td height="20" colspan="3"><b><a name="10a"></a>AUTOMATIC SUSPENSION</b></td>
                                </tr>
                                <tr> 
                                  <td width="6" height="20">&nbsp;</td>
                                  <td width="14" height="20"> 
                                    <div align="center"></div>
                                  </td>
                                  <td width="36" height="20"> 
                                    <div align="center"></div>
                                  </td>
                                  <td height="20" colspan="3">An automatic suspension is sometimes issued 
                                    immediately after a game by the simulator. 
                                    The suspension is for a set number of games 
                                    and the suspended player cannot be dressed 
                                  until the full suspension has been served.</td>
                                </tr>
                                <tr> 
                                  <td width="6" height="20">&nbsp;</td>
                                  <td width="14" height="20">&nbsp;</td>
                                  <td width="36" height="20">&nbsp;</td>
                                  <td height="20" colspan="3">&nbsp;</td>
                                </tr>
                                <tr> 
                                  <td width="6" height="20">&nbsp;</td>
                                  <td width="14" height="20"> 
                                    <div align="center"><img src="images/line_black.jpg" width="3" height="3" align="absmiddle"></div>
                                  </td>
                                  <td width="36" height="20"> 
                                    <div align="center"><b>10b</b></div>
                                  </td>
                                  <td height="20" colspan="3"><b><a name="10b"></a>HOLD OUT SUSPENSION</b></td>
                                </tr>
                                <tr> 
                                  <td width="6" height="20">&nbsp;</td>
                                  <td width="14" height="20"> 
                                    <div align="center"></div>
                                  </td>
                                  <td width="36" height="20"> 
                                    <div align="center"></div>
                                  </td>
                                  <td height="20" colspan="3"><p>When a player has no contract with an OTHL team and they are on a team roster then they will be suspended from playing in any regular season or playoff games. The player will remain suspended until they have a contract. </p></td>
                                </tr>
                                <tr> 
                                  <td width="6" height="20">&nbsp;</td>
                                  <td width="14" height="20">&nbsp;</td>
                                  <td width="36" height="20">&nbsp;</td>
                                  <td height="20" colspan="3" background="images/background_linerules.jpg">&nbsp;</td>
                                </tr>
                                <tr> 
                                  <td colspan="3" height="20">&nbsp;</td>
                                  <td height="20" colspan="3">
                                    <div align="center"><a href="rules.asp">TABLE OF CONTENTS</a> | <a href="rules_read.asp#top">TO 
                                      THE TOP</a></div>
                                  </td>
                                </tr>
                              </table>
                              <br>
                              <table class="office" width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#ECECEC">
                                <tr> 
                                  <td class='gm' height='20' background='images/background_greyline_15.jpg' colspan="6"> 
                                    <div align='center'><b class='gm'><a name="11"></a>CHAPTER 
                                      11, TRADES</b></div>
                                  </td>
                                </tr>
                                <tr> 
                                  <td width="6" height="20">&nbsp;</td>
                                  <td width="14" height="20"><div align="center"><img src="images/line_black.jpg" width="3" height="3" align="absmiddle"></div></td>
                                  <td width="36" height="20"><div align="center"><b>11a</b></div></td>
                                  <td height="20" colspan="3"><b><a name="11a"></a>TRADE ASSETS</b></td>
                                </tr>
                                <tr> 
                                  <td width="6" height="20">&nbsp;</td>
                                  <td width="14" height="20">&nbsp;</td>
                                  <td width="36" height="20">&nbsp;</td>
                                  <td height="20" colspan="3"><p>Teams in the OTHL may trade players under contract, draft picks, prospects, cash, future considerations* and at times, 1 re-rate (around mid-season, see section 9bii). Teams may not trade unavailing players. If you trade future considerations, they must be clearly stated what they are. Both teams must submit the trade to the league before the trade can go through.</p><p>* The future considirations cannot be nhl based stipulations</p></td>
                                </tr>
                                <tr> 
                                  <td width="6" height="20">&nbsp;</td>
                                  <td width="14" height="20">&nbsp;</td>
                                  <td width="36" height="20">&nbsp;</td>
                                  <td height="20" colspan="3">&nbsp;</td>
                                </tr>
                                <tr> 
                                  <td width="6" height="20">&nbsp;</td>
                                  <td width="14" height="20"><div align="center"><img src="images/line_black.jpg" width="3" height="3" align="absmiddle"></div></td>
                                  <td width="36" height="20"><div align="center"><b>11b</b></div></td>
                                  <td height="20" colspan="3"><b><a name="11b"></a>TRADE LIMITATIONS</b></td>
                                </tr>
                                <tr> 
                                  <td width="6" height="20">&nbsp;</td>
                                  <td width="14" height="20">&nbsp;</td>
                                  <td width="36" height="20">&nbsp;</td>
                                  <td height="20" colspan="3"><p>There are four trade limitations in the OTHL. The first limitation is that GM's can only trade up to $5,000,000 in one trade. The second limitation is that new GM's will be watched very closely for the first little while to make sure they are making smart trades. The third limitation is that once a GM has traded for “Player X” they may not trade “Player X” until their first trade has been approved and updated on the website. This is referred to as “double trading” and it will not be tolerated. For the first offence of “double trading”, a $500,000 fine will be issued to the team and the trade will not go through until the next update. The fine doubles for each time the offence is committed and/or the GM may be subject to dismissal.</p>

<p>The fourth and final limitation, is that a team cannot make a trade that would put them over the salary cap. Any trade that puts either team over the cap, will be rejected right away. If a team is trying to make a trade that would put them over the cap, they have to make adjustments prior to the deal being sent in for league approval. Either by sending down players to the farm, or make another seperate deal that would clear as much cap room as needed for the first trade to go trough.</p>


<p>If you are trading future considerations, they may not suggest that a player in the trade will return to his original team that he was traded by, via another trade or waivers. If the future considerations do suggest this then the trade is void. The future considerations cannot contain NHL based stipulations either.</p></td>
                                </tr>
                                <tr> 
                                  <td width="6" height="20">&nbsp;</td>
                                  <td width="14" height="20">&nbsp;</td>
                                  <td width="36" height="20">&nbsp;</td>
                                  <td height="20" colspan="3">&nbsp;</td>
                                </tr>		
                                <tr> 
                                  <td width="6" height="20">&nbsp;</td>
                                  <td width="14" height="20"><div align="center"><img src="images/line_black.jpg" width="3" height="3" align="absmiddle"></div></td>
                                  <td width="36" height="20"><div align="center"><b>11c</b></div></td>
                                  <td height="20" colspan="3"><b><a name="11c"></a>TRADE DEADLINE</b></td>
                                </tr>
                                <tr> 
                                  <td width="6" height="20">&nbsp;</td>
                                  <td width="14" height="20">&nbsp;</td>
                                  <td width="36" height="20">&nbsp;</td>
                                  <td height="20" colspan="3"><p>Towards the end of every regular season there will be a set time where all trading will end until after playoffs, this is called the trade deadline. The trade deadline occurs after approximately 88% of the OTHL games have been played in the regular season.</p></td>
                                </tr>																						
                                <tr> 
                                  <td width="6" height="20">&nbsp;</td>
                                  <td width="14" height="20">&nbsp;</td>
                                  <td width="36" height="20">&nbsp;</td>
                                  <td height="20" colspan="3" background="images/background_linerules.jpg">&nbsp;</td>
                                </tr>
                                <tr> 
                                  <td colspan="3" height="20">&nbsp;</td>
                                  <td height="20" colspan="3"><div align="center"><a href="rules.asp">TABLE OF CONTENTS</a> | <a href="rules_read.asp#top">TO THE TOP</a></div></td>
                                </tr>
                              </table>
                              <br/>
                              <table class="office" width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#ECECEC">
                                <tr> 
                                  <td class='gm' height='20' background='images/background_greyline_15.jpg' colspan="6"> 
                                    <div align='center'><b class='gm'><a name="12"></a>CHAPTER 
                                      12, WAIVERS</b></div>
                                  </td>
                                </tr>
                                <tr> 
                                  <td width="6" height="20">&nbsp;</td>
                                  <td width="14" height="20"> 
                                    <div align="center"><img src="images/line_black.jpg" width="3" height="3" align="absmiddle"></div>
                                  </td>
                                  <td width="36" height="20"> 
                                    <div align="center"><b>12a</b></div>
                                  </td>
                                  <td height="20" colspan="3"><b><a name="12a"></a>WAIVER 
                                    ELIGIBILITY</b></td>
                                </tr>
                                <tr> 
                                  <td width="6" height="20">&nbsp;</td>
                                  <td width="14" height="20"></td>
                                  <td width="36" height="20"></td>
                                  <td height="20" colspan="3"><p><b>AGE LIMITS:</b> Any player who is 25 years old or older, will be placed on waivers if a team sends him down to the farm team. Players who are 18-24 years old can be freely sent to the farm club, unless they meet the rating limit (see below).</p>

<p><b>RATING LIMIT:</b> Any player sent to the farm and remains there at the start of the season, who has a 75 overall rating or higher, is automatically put on waivers.</p>

</td>
                                </tr>
                                <tr> 
                                  <td width="6" height="20">&nbsp;</td>
                                  <td width="14" height="20">&nbsp;</td>
                                  <td width="36" height="20">&nbsp;</td>
                                  <td height="20" colspan="3">&nbsp;</td>
                                </tr>
                                <tr> 
                                  <td width="6" height="20">&nbsp;</td>
                                  <td width="14" height="20"> 
                                    <div align="center"><img src="images/line_black.jpg" width="3" height="3" align="absmiddle"></div>
                                  </td>
                                  <td width="36" height="20"> 
                                    <div align="center"><b>12b</b></div>
                                  </td>
                                  <td height="20" colspan="3"><b><a name="12b"></a>WAIVER 
                                    WIRE / CLAIMING A PLAYER</b></td>
                                </tr>
                                <tr> 
                                  <td width="6" height="20">&nbsp;</td>
                                  <td width="14" height="20"></td>
                                  <td width="36" height="20"></td>
                                  <td height="20" colspan="3"><p>Once a player is placed on the waiver wire, any team may claim him for 48 hours. If two or more teams claim a player, the team who is the highest in the waivers priority list will get the player. If a team claims a player, he must be put on the pro roster, otherwise he will be placed on waivers again. If a player is not claimed in 48 hours, he will go to the original club's farm team. During the off-season and pre-season, a team may send any player to the minor leagues without having to go through the waiver process.</p>
<p>The team that claims a player, will pay $100,000 dollars to the team that put the player on the waiver wire as compensation.</p>
</td>
                                </tr>
                                <tr> 
                                  <td width="6" height="20">&nbsp;</td>
                                  <td width="14" height="20">&nbsp;</td>
                                  <td width="36" height="20">&nbsp;</td>
                                  <td height="20" colspan="3" background="images/background_linerules.jpg">&nbsp;</td>
                                </tr>
                                <tr> 
                                  <td colspan="3" height="20">&nbsp;</td>
                                  <td height="20" colspan="3">
                                    <div align="center"><a href="rules.asp">TABLE OF CONTENTS</a> | <a href="rules_read.asp#top">TO 
                                      THE TOP</a></div>
                                  </td>
                                </tr>
                              </table>
                              <br>
                              <table class="office" width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#ECECEC">
                                <tr> 
                                  <td class='gm' height='20' background='images/background_greyline_15.jpg' colspan="6"> 
                                    <div align='center'><b class='gm'><a name="13"></a>CHAPTER 
                                      13, PROSPECTS</b></div>
                                  </td>
                                </tr>
                                <tr> 
                                  <td width="6" height="20">&nbsp;</td>
                                  <td width="14" height="20"> 
                                    <div align="center"><img src="images/line_black.jpg" width="3" height="3" align="absmiddle"></div>
                                  </td>
                                  <td width="36" height="20"> 
                                    <div align="center"><b>13a</b></div>
                                  </td>
                                  <td height="20" colspan="3"><b><a name="13a"></a>GENERAL 
                                    INFORMATION</b></td>
                                </tr>
                                <tr> 
                                  <td width="6" height="20">&nbsp;</td>
                                  <td width="14" height="20"> 
                                    <div align="center"></div>
                                  </td>
                                  <td width="36" height="20"> 
                                    <div align="center"></div>
                                  </td>
                                  <td height="20" colspan="3"><p>Each OTHL team has a prospect list on the <a href="http://prospects.othl.org" title="Prospect Website">prospect website</a>. Players on the prospect list have their rights owned by that particular team but have not been signed to a contract. Teams do not pay anything to these prospects. Teams may have any player removed from their list at no cost and either added to their unavailing players list or released meaning the player is no longer considered a prospect but rather an unrestricted free agent (UFA) and can be signed by anyone. Once prospects a turn 25 years old they are removed at the end of the season and put on the team's unavailing players list. </p></td>
                                </tr>
                                <tr> 
                                  <td width="6" height="20">&nbsp;</td>
                                  <td width="14" height="20">&nbsp;</td>
                                  <td width="36" height="20">&nbsp;</td>
                                  <td height="20" colspan="3">&nbsp;</td>
                                </tr>
                                <tr> 
                                  <td width="6" height="20">&nbsp;</td>
                                  <td width="14" height="20"> 
                                    <div align="center"><img src="images/line_black.jpg" width="3" height="3" align="absmiddle"></div>
                                  </td>
                                  <td width="36" height="20"> 
                                    <div align="center"><b>13b</b></div>
                                  </td>
                                  <td height="20" colspan="3"><b><a name="13b"></a>SIGNING 
                                    A PROSPECT</b></td>
                                </tr>
                                <tr> 
                                  <td width="6" height="20">&nbsp;</td>
                                  <td width="14" height="20"> 
                                    <div align="center"></div>
                                  </td>
                                  <td width="36" height="20"> 
                                    <div align="center"></div>
                                  </td>
                                  <td height="20" colspan="3">
<p>Prospects can be signed to an OTHL contract at any time during the season. The contract must be for 3 years in length and at a maximum yearly salary of $850,000. Upon signing a prospect, they will be transferred to the farm team where they may play there or be called up to the pro team.</p>

<p>A player must have played at least 1 NHL game in order to be eligable for signing. If a team only has 2 goaltenders on there roster, then the team can sign a prospect goaltender even without the 1 game experience.</p>
									</td>
                                </tr>
                                <tr> 
                                  <td width="6" height="20">&nbsp;</td>
                                  <td width="14" height="20">&nbsp;</td>
                                  <td width="36" height="20">&nbsp;</td>
                                  <td height="20" colspan="3">&nbsp;</td>
                                </tr>
                                <tr> 
                                  <td width="6" height="20">&nbsp;</td>
                                  <td width="14" height="20"> 
                                    <div align="center"><img src="images/line_black.jpg" width="3" height="3" align="absmiddle"></div>
                                  </td>
                                  <td width="36" height="20"> 
                                    <div align="center"><b>13c</b></div>
                                  </td>
                                  <td height="20" colspan="3"><b><a name="13c"></a>ACQUIRING 
                                    A NEW PLAYER </b></td>
                                </tr>
                                <tr> 
                                  <td width="6" height="20">&nbsp;</td>
                                  <td width="14" height="20"> 
                                    <div align="center"></div>
                                  </td>
                                  <td width="36" height="20"> 
                                    <div align="center"></div>
                                  </td>
                                  <td height="20" colspan="3"> 
                                    <p>Any player not listed on any team's prospect list, signed to a OTHL contract, retired from the NHL, on a team's unavailing player's list or eligible for the OTHL Draft, can be acquired by any team at any time, except during times where new free agent signings are not allowed. In order to sign such a player, he is must be signed as a regular Unrestricted Free Agent and signed to a pro contract. See chapter <a href="http://www.othl.org/rules_read.asp#16c">16c</a>, <a href="http://www.othl.org/rules_read.asp#16c"><b>SIGNING UNRESTRICTED FREE AGENTS (UFA)</b></a>.</p>

<p>1. All players playing in Europe are exempt unless they have already played in the NHL before or have been drafted by the NHL.</p>

<p>2. Anyone currently playing in the CHL or NCAA or other junior level type team is exempt. A player currently in the CHL, NCAA or other junior level must be drafted by a OTHL team. Only players that has played at least 1 NHL game are eligable for signing.</p>

									</td>
                                </tr>
                                <tr> 
                                  <td width="6" height="20">&nbsp;</td>
                                  <td width="14" height="20">&nbsp;</td>
                                  <td width="36" height="20">&nbsp;</td>
                                  <td height="20" colspan="3" background="images/background_linerules.jpg">&nbsp;</td>
                                </tr>
                                <tr> 
                                  <td colspan="3" height="20">&nbsp;</td>
                                  <td height="20" colspan="3">
                                    <div align="center"><a href="rules.asp">TABLE OF CONTENTS</a> | <a href="rules_read.asp#top">TO 
                                      THE TOP</a></div>
                                  </td>
                                </tr>
                              </table>
                              <br>
                              <table class="office" width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#ECECEC">
                                <tr> 
                                  <td class='gm' height='20' background='images/background_greyline_15.jpg' colspan="6"><div align='center'><b class='gm'><a name="14"></a>CHAPTER 14, PLAYER TERMINATION</b></div></td>
                                </tr>
                                <tr> 
                                  <td width="6" height="20">&nbsp;</td>
                                  <td width="14" height="20"><div align="center"><img src="images/line_black.jpg" width="3" height="3" align="absmiddle"></div></td>
                                  <td width="36" height="20"><div align="center"><b>14a</b></div></td>
                                  <td height="20" colspan="3"><b><a name="14a"></a>RETIREMENT</b></td>
                                </tr>
                                <tr> 
                                  <td width="6" height="20">&nbsp;</td>
                                  <td width="14" height="20">&nbsp;</td>
                                  <td width="36" height="20">&nbsp;</td>
                                  <td height="20" colspan="3"><p>If a player retires in the NHL while a OTHL regular season is in progress, then the player will retire at the end of the OTHL regular season (or after the playoffs if the team has made it to the playoffs). If a player retires in the NHL during a OTHL off-season then he will retire immediately. If a player retires in the NHL while being involved in a OTHL free agency period then he still retires immediately, signed or not, however no money will be given to the player. Once a player retires from the OTHL he forfeits his pay and his contract is voided. The player's former team will retain the player's rights.</p><p>If the unfortunate occurs and an OTHL player/prospect passes away in real life then that player/prospect is immediately taken out of the OTHL out of respect for the player/prospect and their family.</p></td>
                                </tr>
                                <tr> 
                                  <td width="6" height="20">&nbsp;</td>
                                  <td width="14" height="20">&nbsp;</td>
                                  <td width="36" height="20">&nbsp;</td>
                                  <td height="20" colspan="3">&nbsp;</td>
                                </tr>
                                <tr> 
                                  <td width="6" height="20">&nbsp;</td>
                                  <td width="14" height="20"><div align="center"><img src="images/line_black.jpg" width="3" height="3" align="absmiddle"></div></td>
                                  <td width="36" height="20"><div align="center"><b>14b</b></div></td>
                                  <td height="20" colspan="3"><b><a name="14b"></a>TERMINATING UNAVAILING PLAYERS</b></td>
                                </tr>
                                <tr> 
                                  <td width="6" height="20">&nbsp;</td>
                                  <td width="14" height="20"> 
                                    <div align="center"></div>
                                  </td>
                                  <td width="36" height="20"> 
                                    <div align="center"></div>
                                  </td>
                                  <td height="20" colspan="3"><p>Unavailing players will be terminated at the end of each OTHL season. An unavailing player is one that has not played a NHL game in the previous NHL season without cause and it doesn't look like they will be playing an NHL game anytime soon. Players that are good young players or were holdouts or injured will be exempt from being terminated. </p>
                                  <p>In some cases if a player was playing in Europe they may be terminated if it doesn't look like they will come back to the NHL but in some cases they may be allowed to stay. Unavailing players are judged by the Commissioners and each player will be looked at on an individual basis. Once an unavailing player is terminated they are either put back onto the team's prospect list (for players 24 yrs old and under) or the former team just retains the player's rights and the player is put on the team's unavailing players list (for players over 24 yrs old). </p></td>
                                </tr>
                                <tr> 
                                  <td width="6" height="20">&nbsp;</td>
                                  <td width="14" height="20">&nbsp;</td>
                                  <td width="36" height="20">&nbsp;</td>
                                  <td height="20" colspan="3">&nbsp;</td>
                                </tr>
                                <tr> 
                                  <td width="6" height="20">&nbsp;</td>
                                  <td width="14" height="20"> 
                                    <div align="center"><img src="images/line_black.jpg" width="3" height="3" align="absmiddle"></div>
                                  </td>
                                  <td width="36" height="20"> 
                                    <div align="center"><b>14c</b></div>
                                  </td>
                                  <td height="20" colspan="3"><b><a name="14c"></a>RELEASING 
                                    A PLAYER</b></td>
                                </tr>
                                <tr> 
                                  <td width="6" height="20">&nbsp;</td>
                                  <td width="14" height="20"> 
                                    <div align="center"></div>
                                  </td>
                                  <td width="36" height="20"> 
                                    <div align="center"></div>
                                  </td>
                                  <td height="20" colspan="3">Discussed in section <a href="rules_read.asp#7d">7d</a> </td>
                                </tr>
                                <tr> 
                                  <td width="6" height="20">&nbsp;</td>
                                  <td width="14" height="20">&nbsp;</td>
                                  <td width="36" height="20">&nbsp;</td>
                                  <td height="20" colspan="3" background="images/background_linerules.jpg">&nbsp;</td>
                                </tr>
                                <tr> 
                                  <td colspan="3" height="20">&nbsp;</td>
                                  <td height="20" colspan="3">
                                    <div align="center"><a href="rules.asp">TABLE OF CONTENTS</a> | <a href="rules_read.asp#top">TO 
                                      THE TOP</a></div>
                                  </td>
                                </tr>
                              </table>
                              <br>
                              <table class="office" width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#ECECEC">
                                <tr> 
                                  <td class='gm' height='20' background='images/background_greyline_15.jpg' colspan="6"><div align='center'><b class='gm'><a name="15"></a>CHAPTER 15, CONTRACTS</b></div></td>
                                </tr>
                                <tr> 
                                  <td width="6" height="20">&nbsp;</td>
                                  <td width="14" height="20"><div align="center"><img src="images/line_black.jpg" width="3" height="3" align="absmiddle"></div></td>
                                  <td width="36" height="20"><div align="center"><b>15</b></div></td>
                                  <td height="20" colspan="3"><b><a name="15"></a>GENERAL INFORMATION</b></td>
                                </tr>
                                <tr> 
                                  <td width="6" height="20">&nbsp;</td>
                                  <td width="14" height="20">&nbsp;</td>
                                  <td width="36" height="20">&nbsp;</td>
                                  <td height="20" colspan="3"><p>In order to play for a team, a player must be signed to a contract. Contracts must be at least $475,000 per year, and may be no more than 4 years long unless the player is over 30 years old, then the contract can be for 5 years. A prospects first contract must be 3 years in length and at a maximum salary of $850,000 per year. An unavailing player or new UFA player do not qualify for prospect contracts. Contracts must be negotiated with the appropriate OTHLPA representative. Contracts may include signing bonuses, which are deducted immediately from the team's cash balance. Contracts may also include stipulations such as a no-trade clause. No-trade clauses may only be offered to players 30 years of age and older. Players who are on the farm roster are paid 10% of their full contract for the time they are in the minors.</p></td>
                                </tr>
                                <tr> 
                                  <td width="6" height="20">&nbsp;</td>
                                  <td width="14" height="20">&nbsp;</td>
                                  <td width="36" height="20">&nbsp;</td>
                                  <td height="20" colspan="3" valign="top" background="images/background_linerules.jpg">&nbsp;</td>
                                </tr>
                                <tr> 
                                  <td colspan="3" height="20">&nbsp;</td>
                                  <td height="20" colspan="3" valign="top"><div align="center"><a href="rules.asp">TABLE OF CONTENTS</a> | <a href="rules_read.asp#top">TO THE TOP</a></div></td>
                                </tr>
                              </table>
                              <br/>
                              <table class="office" width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#ECECEC">
                                <tr> 
                                  <td class='gm' height='20' background='images/background_greyline_15.jpg' colspan="6"><div align='center'><b class='gm'><a name="16"></a>CHAPTER 16, FREE AGENCY</b></div></td>
                                </tr>
                                <tr> 
                                  <td width="6" height="20">&nbsp;</td>
                                  <td width="14" height="20"><div align="center"><img src="images/line_black.jpg" width="3" height="3" align="absmiddle"></div></td>
                                  <td width="36" height="20"><div align="center"><b>16a</b></div></td>
                                  <td height="20" colspan="3"><b><a name="16a"></a>TYPES OF FREE AGENTS</b></td>
                                </tr>
                                <tr> 
                                  <td width="6" height="20">&nbsp;</td>
                                  <td width="14" height="20">&nbsp;</td>
                                  <td width="36" height="20">&nbsp;</td>
                                  <td height="20" colspan="3"><p>There are two types of free agents, restricted free agents (RFA's) and unrestricted free agents (UFA's). </p>
                                    <p>Restricted Free Agents </p>
                                    <p>- Players whose contracts expire who do not qualify for unrestricted free agency (i.e. they are under 30) can have their free agent rights restricted by their former club. If another team signs a RFA then compensation will be provided to the player's former team. </p>
                                    <p>Unrestricted Free Agents </p>
                                    <p>- Any player aged 30 or older at the end of the season, whose current contract has expired becomes an unrestricted free agent. UFA's can be signed by any team without compensation to the former team. </p>
                                    - Any player not listed on any team's prospect list, signed to a OTHL contract, retired from the NHL, on a team's unavailing player's list or eligible for the NHL Draft, can be acquired by any team at any time. Please see section <a href="rules_read.asp#13c">13c</a>. and section <a href="rules_read.asp#16cii">16cii</a>. for complete details on this method of signing UFA's.
                                  </td>
                                </tr>
                                <tr> 
                                  <td width="6" height="20">&nbsp;</td>
                                  <td width="14" height="20">&nbsp;</td>
                                  <td width="36" height="20">&nbsp;</td>
                                  <td height="20" colspan="3">&nbsp;</td>
                                </tr>
                                <tr> 
                                  <td width="6" height="20">&nbsp;</td>
                                  <td width="14" height="20"><div align="center"><img src="images/line_black.jpg" width="3" height="3" align="absmiddle"></div></td>
                                  <td width="36" height="20"><div align="center"><b>16b</b></div></td>
                                  <td height="20" colspan="3"><b><a name="16b"></a>THE OLTHPA (OLD TIME HOCKEY LEAUGE PLAYER ASSOCIATION)</b></td>
                                </tr>
                                <tr> 
                                  <td width="6" height="20">&nbsp;</td>
                                  <td width="14" height="20">&nbsp;</td>
                                  <td width="36" height="20">&nbsp;</td>
                                  <td height="20" colspan="3">The OTHL Player's 
                                    Association handles all the leagues financial 
                                    contracts. The OTHL will have agent(s) who 
                                    will be in charge of negotiating contracts 
                                    for their clients. The agent will act as the 
                                    player's voice in negotiations and carefully 
                                    decide where they would like to sign and why. 
                                    <br>
                                    <br>
                                    Players may sign with a team for various reasons 
                                    such as location, money, contract length, 
                                    whether the team is a contender, if they have 
                                    played for the team in the past, they have 
                                    someone they know on the team, they need a 
                                    change of scenery etc., GM's are encouraged 
                                    to develop a good relationship with the agent(s) 
                                    otherwise it may affect their GM credit, see 
                                    <a href="rules_read.asp#17">section 17</a> 
                                    for more information on GM credit.</td>
                                </tr>
                                <tr> 
                                  <td width="6" height="20">&nbsp;</td>
                                  <td width="14" height="20">&nbsp;</td>
                                  <td width="36" height="20">&nbsp;</td>
                                  <td height="20" colspan="3">&nbsp;</td>
                                </tr>
                                <tr> 
                                  <td width="6" height="20">&nbsp;</td>
                                  <td width="14" height="20"> 
                                    <div align="center"><img src="images/line_black.jpg" width="3" height="3" align="absmiddle"></div>
                                  </td>
                                  <td width="36" height="20"> 
                                    <div align="center"><b>16c</b></div>
                                  </td>
                                  <td height="20" colspan="3"><b><a name="16c"></a>SIGNING 
                                    UNRESTRICTED FREE AGENTS (UFA)</b></td>
                                </tr>
                                <tr> 
                                  <td width="6" height="20">&nbsp;</td>
                                  <td width="14" height="20"> 
                                    <div align="center"></div>
                                  </td>
                                  <td width="36" height="20"> 
                                    <div align="center"></div>
                                  </td>
                                  <td height="20" colspan="3">
								  <p>This section is referring to players who are not already in the league. Please refer to <a href="rules_read.asp#13c">section 13c</a>. and <a href="rules_read.asp#16cii">section 16cii</a>. where it is covered completely.</p>

<p>A unrestricted free agent (UFA) cannot sign for a salary higher then 20% of the current cap. In the 2006-2007 season, with the salary cap at $39,000,000 no player can be signed for more then $7,800,000 per season. And no player can be signed to a deal lower then $475,000 per season.</p>

<p>Any unrestricted free agent (UFA) may recive a signing bonus when he signs. But the signing bonus cannot exceed 25% of the total value of the salary. (IE 2 million per season for 4 years is 8 million in salary,
so the bonus may be at max, 2 million)</p>

<p>Starting with the season 2006-2007 no unrestricted free agents can be signed after December 31st. After the December 31st a no-sign period will be put in place until the start of the unrestricted free agency. Witch usally starts July 1st. Only players already on a teams roster can sign contract extensions after December 31st.</p>

</td>
                                </tr>
                                <tr> 
                                  <td width="6" height="20">&nbsp;</td>
                                  <td width="14" height="20">&nbsp;</td>
                                  <td width="36" height="20">&nbsp;</td>
                                  <td height="20" colspan="3">&nbsp;</td>
                                </tr>
                                <tr> 
                                  <td width="6" height="20">&nbsp;</td>
                                  <td width="14" height="20"> 
                                    <div align="center"><img src="images/line_black.jpg" width="3" height="3" align="absmiddle"></div>
                                  </td>
                                  <td width="36" height="20"> 
                                    <div align="center"><b>16ci</b></div>
                                  </td>
                                  <td height="20" colspan="3"><b><a name="16ci"></a> 
                                    OFF-SEASON UNRESTRICTED FREE AGENCY</b></td>
                                </tr>
                                <tr> 
                                  <td width="6" height="20">&nbsp;</td>
                                  <td width="14" height="20"> 
                                    <div align="center"></div>
                                  </td>
                                  <td width="36" height="20"> 
                                    <div align="center"></div>
                                  </td>
                                  <td height="20" colspan="3"><p>Off-season unrestricted 
                                    free agency is for any player aged 30 or older 
                                    on January 1st of the year the free agency 
                                    begins, whose current contract has expired 
                                    becomes an unrestricted free agent. UFA's 
                                    can be signed by any team without compensation 
                                    to the former team.</p>
                                    <p>The process will be very much like the 
                                      NHL. GM's will be able to send in offers 
                                      after a certain date to the unrestricted 
                                      free agents and the OTHLPA agent(s) will 
                                      begin negotiations. The process will continue 
                                      until there are no more offers for UFA's.</p>
                                  </td>
                                </tr>
                                <tr> 
                                  <td width="6" height="20">&nbsp;</td>
                                  <td width="14" height="20">&nbsp;</td>
                                  <td width="36" height="20">&nbsp;</td>
                                  <td height="20" colspan="3">&nbsp;</td>
                                </tr>
                                <tr> 
                                  <td width="6" height="20">&nbsp;</td>
                                  <td width="14" height="20"> 
                                    <div align="center"><img src="images/line_black.jpg" width="3" height="3" align="absmiddle"></div>
                                  </td>
                                  <td width="36" height="20"> 
                                    <div align="center"><b>16cii</b></div>
                                  </td>
                                  <td height="20" colspan="3"><b><a name="16cii"></a>RELEASED UNRESTRICTED FREE AGENTS</b></td>
                                </tr>
                                <tr> 
                                  <td width="6" height="20">&nbsp;</td>
                                  <td width="14" height="20"> 
                                    <div align="center"></div>
                                  </td>
                                  <td width="36" height="20"> 
                                    <div align="center"></div>
                                  </td>
                                  <td height="20" colspan="3"><p>Released free agents are players that have been bought out by their former teams or prospects that have been let go. These players will become UFA's immediately and any team can sign them at any time via section <a href="rules_read.asp#13c">13c</a>.</p></td>
                                </tr>
                                <tr> 
                                  <td width="6" height="20">&nbsp;</td>
                                  <td width="14" height="20">&nbsp;</td>
                                  <td width="36" height="20">&nbsp;</td>
                                  <td height="20" colspan="3">&nbsp;</td>
                                </tr>
                                <tr> 
                                  <td width="6" height="20">&nbsp;</td>
                                  <td width="14" height="20"> 
                                    <div align="center"><img src="images/line_black.jpg" width="3" height="3" align="absmiddle"></div>
                                  </td>
                                  <td width="36" height="20"> 
                                    <div align="center"><b>16d</b></div>
                                  </td>
                                  <td height="20" colspan="3"><b><a name="16d"></a>SIGNINGS 
                                    RESTRICTED FREE AGENTS (RFA)</b></td>
                                </tr>
                                <tr> 
                                  <td width="6" height="20">&nbsp;</td>
                                  <td width="14" height="20"> 
                                    <div align="center"></div>
                                  </td>
                                  <td width="36" height="20"> 
                                    <div align="center"></div>
                                  </td>
                                  <td height="20" colspan="3"><p>Players whose contracts 
                                    expire who do not qualify for unrestricted 
                                    free agency (i.e. they are under 30) can have 
                                    their free agent rights restricted by their 
                                    former club. If another team signs a RFA then 
                                    compensation will be provided to the player's 
                                    former team.</p>
                                    <p>If there are unsigned restricted free agents 
                                      at or after the off-season free agency period 
                                      then other teams may send in offers to the 
                                      RFA's. If another team signs the player, 
                                      the player's former team has the right to 
                                      either match the offer (in which case the 
                                      player automatically returns to his former 
                                      team with the new contract), or decline, 
                                      and take compensation from the new team.</p>
                                  </td>
                                </tr>
                                <tr> 
                                  <td width="6" height="20">&nbsp;</td>
                                  <td width="14" height="20">&nbsp;</td>
                                  <td width="36" height="20">&nbsp;</td>
                                  <td height="20" colspan="3">&nbsp;</td>
                                </tr>
                                <tr> 
                                  <td width="6" height="20">&nbsp;</td>
                                  <td width="14" height="20"> 
                                    <div align="center"><img src="images/line_black.jpg" width="3" height="3" align="absmiddle"></div>
                                  </td>
                                  <td width="36" height="20"> 
                                    <div align="center"><b>16di</b></div>
                                  </td>
                                  <td height="20" colspan="3"><b><a name="16di"></a>RESTRICTED 
                                    FREE AGENTS COMPENSATION</b></td>
                                </tr>
                                <tr> 
                                  <td width="6" height="20">&nbsp;</td>
                                  <td width="14" height="20"> 
                                    <div align="center"></div>
                                  </td>
                                  <td width="36" height="20"> 
                                    <div align="center"></div>
                                  </td>
                                  <td height="20" colspan="3"><p>When a team loses 
                                    a RFA to another team then they are entitled 
                                    to compensation.
                                    </p>
                                    <p>
                                    <table width="95%" border="0" cellspacing="2" cellpadding="2" align="center">
                                      <tr> 
                                        <td width="45%"> <b>New Annual Salary 
                                          (Base + Bonuses) </b></td>
                                        <td width="55%"> <b>Compensation</b></td>
                                      </tr>
                                    </table>
                                    <table width="95%" border="0" cellspacing="2" cellpadding="2" align="center">
                                      <tr> 
                                        <td width="20%">up to</td>
                                        <td width="5%"> 
                                          <div align="center">&nbsp;</div>
                                        </td>
                                        <td width="20%">up to $660,000</td>
                                        <td width="55%">No compensation</td>
                                      </tr>
                                      <tr> 
                                        <td width="20%">$660,000</td>
                                        <td width="5%"> 
                                          <div align="center">to</div>
                                        </td>
                                        <td width="20%">$1 million</td>
                                        <td width="55%">One 3rd round draft pick</td>
                                      </tr>
                                      <tr> 
                                        <td width="20%">$1 million</td>
                                        <td width="5%"> 
                                          <div align="center">to</div>
                                        </td>
                                        <td width="20%">$2 million</td>
                                        <td width="55%">One 2nd round draft pick</td>
                                      </tr>
                                      <tr> 
                                        <td width="20%">$2 million</td>
                                        <td width="5%"> 
                                          <div align="center">to</div>
                                        </td>
                                        <td width="20%">$3 million</td>
                                        <td width="55%">One 1st and one 3rd round draft pick</td>
                                      </tr>
                                      <tr> 
                                        <td width="20%">$3 million</td>
                                        <td width="5%"> 
                                          <div align="center">to</div>
                                        </td>
                                        <td width="20%">$4 million</td>
                                        <td width="55%">One 1st, one 2nd and one 3rd round draft pick</td>
                                      </tr>
                                      <tr> 
                                        <td width="20%">$4 million</td>
                                        <td width="5%"> 
                                          <div align="center">to</div>
                                        </td>
                                        <td width="20%">$5 million</td>
                                        <td width="55%">Two 1st, one 2nd and one 3rd round draft pick</td>
                                      </tr>
                                      <tr> 
                                        <td width="20%">$5 million</td>
                                        <td width="5%"> 
                                          <div align="center">-</div>
                                        </td>
                                        <td width="20%"><</td>
                                        <td width="55%">Four 1st round draft picks</td>
                                      </tr>
                                    </table>
                                   
                                    <p><b>COMPENSATION PICK RULES:</b><br>
                                    The team that signs a player to an offer-sheet, can only do so if they have the draft picks that match the compensation (see above), otherwise the offer sheet is voided.
                                     The draft picks must be the new teams original picks.</p>
                                     <p><i>For example: Anaheim cannot trade for another teams draft pick(s) and then use it as compensation. They must use there own picks.</i></p>
                                     <p>The draft picks must also be available in the upcoming draft. So if the comensation is a 1st round pick and a 2nd round pick, then both those picks must be available in
                                     the next upcoming draft. If the compensation is two 1st round draft picks, then they must be in sequential years.</p>
                                    <p><b>OTHER COMPENSATION:</b><br>
                                    Once an offer-sheet is ruled valid. The two teams are free to negotiate the compensation. The negotiated compensation will then be reviewed by the Board of Directors (BOD).</p>                                    
                                    <p><b>TRADE RESTRICTIONS:</b><br>
                                    If a team decides to match the offer sheet made to one of there players. Then they are not allowed to trade that player for 1 season.</p>
                                  </td>
                                </tr>
                                <tr> 
                                  <td width="6" height="20">&nbsp;</td>
                                  <td width="14" height="20">&nbsp;</td>
                                  <td width="36" height="20">&nbsp;</td>
                                  <td height="20" colspan="3" background="images/background_linerules.jpg">&nbsp;</td>
                                </tr>
                                <tr> 
                                  <td colspan="3" height="20">&nbsp;</td>
                                  <td height="20" colspan="3">
                                    <div align="center"><a href="rules.asp">TABLE OF CONTENTS</a> | <a href="rules_read.asp#top">TO 
                                      THE TOP</a></div>
                                  </td>
                                </tr>
                              </table>
                              <br>
                              <table class="office" width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#ECECEC">
                                <tr> 
                                  <td class='gm' height='20' background='images/background_greyline_15.jpg' colspan="6"> 
                                    <div align='center'><b class='gm'><a name="17"></a>CHAPTER 
                                      17, GENERAL MANAGER CREDIT</b></div>
                                  </td>
                                </tr>
                                <tr> 
                                  <td width="6" height="20">&nbsp;</td>
                                  <td width="14" height="20"> 
                                    <div align="center"><img src="images/line_black.jpg" width="3" height="3" align="absmiddle"></div>
                                  </td>
                                  <td width="36" height="20"> 
                                    <div align="center"><b>17a</b></div>
                                  </td>
                                  <td height="20" colspan="3"><b><a name="17a"></a>GENERAL 
                                    INFORMATION</b></td>
                                </tr>
                                <tr> 
                                  <td width="6" height="20">&nbsp;</td>
                                  <td width="14" height="20"> 
                                    <div align="center"></div>
                                  </td>
                                  <td width="36" height="20"> 
                                    <div align="center"></div>
                                  </td>
                                  <td height="20" colspan="3">Each General Manager 
                                    (GM) will be assigned a credit rating based 
                                    on their dealings with the OTHLPA. GM's will 
                                    be graded on how fair their contract offers 
                                    are, whether or not they show their players 
                                    respect and whether or not they keep their 
                                    promises or stick to what they say. The credit 
                                    ratings range from &quot;A&quot; (being the 
                                    best) to &quot;F&quot; (being the worst). 
                                    Every GM will start out with an &quot;A&quot;. 
                                    When a new GM comes in they will start with 
                                    an &quot;A&quot;, the previous GM's credit 
                                    rating is terminated. The worse credit rating 
                                    a GM has, the harder it will be for that GM 
                                    to sign a player. For instance a GM with a 
                                    &quot;C&quot; is going to have a harder time 
                                    signing a player than a GM with a &quot;A&quot;.</td>
                                </tr>
                                <tr> 
                                  <td width="6" height="20">&nbsp;</td>
                                  <td width="14" height="20">&nbsp;</td>
                                  <td width="36" height="20">&nbsp;</td>
                                  <td height="20" colspan="3" valign="top">&nbsp;</td>
                                </tr>
                                <tr> 
                                  <td width="6" height="20">&nbsp;</td>
                                  <td width="14" height="20"> 
                                    <div align="center"><img src="images/line_black.jpg" width="3" height="3" align="absmiddle"></div>
                                  </td>
                                  <td width="36" height="20"> 
                                    <div align="center"><b>17b</b></div>
                                  </td>
                                  <td height="20" colspan="3"><b><a name="17b"></a>GENERAL 
                                    MANAGER CREDIT, WAYS TO LOSE CREDIT</b></td>
                                </tr>
                                <tr> 
                                  <td width="6" height="20">&nbsp;</td>
                                  <td width="14" height="20"> 
                                    <div align="center"></div>
                                  </td>
                                  <td width="36" height="20"> 
                                    <div align="center"></div>
                                  </td>
                                  <td height="20" colspan="3"> 
                                    <p><br>
                                      <img src="images/line_black.jpg" width="2" height="2" align="absmiddle"> 
                                      Giving a significantly low contract offer 
                                      <br>
                                      <br>
                                      <img src="images/line_black.jpg" width="2" height="2" align="absmiddle"> 
                                      Trading a player who was signed via UFA 
                                      in the last year or a prospect who was just 
                                      brought into the league in the last year 
                                      via section <a href="rules_read.asp#13c">13c</a><br>
                                      <br>
                                      <img src="images/line_black.jpg" width="2" height="2" align="absmiddle"> 
                                      Not sticking to what you say to players 
                                      (I.E: If a GM tells a goalie that if he 
                                      signs he will be the #1 goalie and then 
                                      makes him his backup goalie instead)<br>
                                      <br>
                                      <img src="images/line_black.jpg" width="2" height="2" align="absmiddle"> 
                                      Disrespecting the OTHLPA agents</p>
                                  </td>
                                </tr>
                                <tr> 
                                  <td width="6" height="20">&nbsp;</td>
                                  <td width="14" height="20">&nbsp;</td>
                                  <td width="36" height="20">&nbsp;</td>
                                  <td height="20" colspan="3" valign="top">&nbsp;</td>
                                </tr>
                                <tr> 
                                  <td width="6" height="20">&nbsp;</td>
                                  <td width="14" height="20"> 
                                    <div align="center"><img src="images/line_black.jpg" width="3" height="3" align="absmiddle"></div>
                                  </td>
                                  <td width="36" height="20"> 
                                    <div align="center"><b>17c</b></div>
                                  </td>
                                  <td height="20" colspan="3"><b><a name="17c"></a>GENERAL 
                                    MANAGER CREDIT, WAYS TO GAIN CREDIT</b></td>
                                </tr>
                                <tr> 
                                  <td width="6" height="20">&nbsp;</td>
                                  <td width="14" height="20"> 
                                    <div align="center"></div>
                                  </td>
                                  <td width="36" height="20"> 
                                    <div align="center"></div>
                                  </td>
                                  <td height="20" colspan="3"> 
                                    <p><br>
                                      <img src="images/line_black.jpg" width="2" height="2" align="absmiddle"> 
                                      Continuously making decent contract offers<br>
                                      <br>
                                      <img src="images/line_black.jpg" width="2" height="2" align="absmiddle"> 
                                      Keeping to what you say<br>
                                      <br>
                                      <img src="images/line_black.jpg" width="2" height="2" align="absmiddle"> 
                                      Holding onto players signed via UFA or prospects 
                                      signed via section <a href="rules_read2.asp#13c">13c</a>. 
                                      for over a year<br>
                                      <br>
                                      <img src="images/line_black.jpg" width="2" height="2" align="absmiddle"> 
                                      Showing respect to the OTHLPA agents</p>
                                  </td>
                                </tr>
                                <tr> 
                                  <td width="6" height="20">&nbsp;</td>
                                  <td width="14" height="20">&nbsp;</td>
                                  <td width="36" height="20">&nbsp;</td>
                                  <td height="20" colspan="3" valign="top" background="images/background_linerules.jpg">&nbsp;</td>
                                </tr>
                                <tr>
                                  <td width="6" height="20">&nbsp;</td>
                                  <td width="14" height="20">&nbsp;</td>
                                  <td width="36" height="20">&nbsp;</td>
                                  <td height="20" colspan="3" valign="top">
                                    <div align="center"><a href="rules.asp">TABLE OF CONTENTS</a> | <a href="rules_read.asp#top">TO 
                                      THE TOP</a></div>
                                  </td>
                                </tr>
                              </table>
                              <br>
                              <table class="office" width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#ECECEC">
                                <tr> 
                                  <td class='gm' height='20' background='images/background_greyline_15.jpg' colspan="6"> 
                                    <div align='center'><b class='gm'><a name="18"></a>CHAPTER 
                                      18, FINANCES</b></div>
                                  </td>
                                </tr>
                                <tr> 
                                  <td width="6" height="20">&nbsp;</td>
                                  <td width="14" height="20"> 
                                    <div align="center"><img src="images/line_black.jpg" width="3" height="3" align="absmiddle"></div>
                                  </td>
                                  <td width="36" height="20"> 
                                    <div align="center"><b>18a</b></div>
                                  </td>
                                  <td height="20" colspan="3"><b><a name="18a"></a>GENERAL 
                                    INFORMATION</b></td>
                                </tr>
                                <tr> 
                                  <td width="6" height="20">&nbsp;</td>
                                  <td width="14" height="20"> 
                                    <div align="center"></div>
                                  </td>
                                  <td width="36" height="20"> 
                                    <div align="center"></div>
                                  </td>
                                  <td height="20" colspan="3">One of your goals 
                                    as GM of an OTHL franchise is to make sure 
                                    the franchise remains financially sound. All 
                                    teams will start out with $45,000,000 including 
                                    new teams if any are added at a later date. 
                                    Franchises gain money by selling tickets and 
                                    they must sell enough tickets to pay for their 
                                    expenses. Team expenses include but are not 
                                    limited to pro and farm payrolls, coach salary, 
                                    prospect fees, signing bonuses and more.</td>
                                </tr>
                                <tr> 
                                  <td width="6" height="20">&nbsp;</td>
                                  <td width="14" height="20">&nbsp;</td>
                                  <td width="36" height="20">&nbsp;</td>
                                  <td height="20" colspan="3" valign="top">&nbsp;</td>
                                </tr>
                                <tr> 
                                  <td width="6" height="20">&nbsp;</td>
                                  <td width="14" height="20"><div align="center"><img src="images/line_black.jpg" width="3" height="3" align="absmiddle"></div></td>
                                  <td width="36" height="20"><div align="center"><b>18b</b></div></td>
                                  <td height="20" colspan="3"><b><a name="18b"></a>SALARY CAP & SALARY FLOOR</b></td>
                                </tr>
                                <tr> 
                                  <td width="6" height="20">&nbsp;</td>
                                  <td width="14" height="20">&nbsp;</td>
                                  <td width="36" height="20">&nbsp;</td>
                                  <td height="20" colspan="3"><p>The salary cap in the OTHL is subject of the NHL salary cap. The cap is a hard cap, meaning if you go above it then there will be penalties in consequence. The salary cap will be adjusted to what ever number the NHL operates under, with 1 year delay. Salary cap expense is pro salaries only. During the off-season there is no salary cap in the OTHL. The OTHL cap is then activated at the first day of the OTHL regular season. If a team fails to meet the salary cap requierment at the start of the season, then the team will be fined and the team general manager is also subject to punishment.</p>

<p>The OTHL also have a salary floor which all teams must be over during the regular season. The salary cap and the salary floor are both announced in time for the start of the regular season. If the caps are not announced at the time of the regular season, then no fines will be handed out by the league.</p>

<p><b>SALARY CAP NUMBERS:</b></p>

<p><b>2005 - 2006</b> : $50,000,000 dollars<br/>
<b>2006 - 2007</b> : $39,000,000 dollars<br/>
<b>2007 - 2008</b> : $50,300,000 dollars<br/>
<b>2008 - 2009</b> : Not announced at the current date</p>

<p><b>SALARY FLOOR NUMBERS:</b></p>

<p><b>2005 - 2006</b> : No salary floor<br/>
<b>2006 - 2007</b> : $21,000,000 dollars<br/>
<b>2007 - 2008</b> : $34,300,000 dollars<br/>
<b>2008 - 2009</b> : Not announced at the current date</p>

</td>
                                </tr>
                                <tr> 
                                  <td width="6" height="20">&nbsp;</td>
                                  <td width="14" height="20">&nbsp;</td>
                                  <td width="36" height="20">&nbsp;</td>
                                  <td height="20" colspan="3" valign="top">&nbsp;</td>
                                </tr>
                                <tr> 
                                  <td width="6" height="20">&nbsp;</td>
                                  <td width="14" height="20"><div align="center"><img src="images/line_black.jpg" width="3" height="3" align="absmiddle"></div></td>
                                  <td width="36" height="20"><div align="center"><b>18bi</b></div></td>
                                  <td height="20" colspan="3"><b><a name="18bi"></a>SALARY CAP PENALTY</b></td>
                                </tr>
                                <tr> 
                                  <td width="6" height="20">&nbsp;</td>
                                  <td width="14" height="20">&nbsp;</td>
                                  <td width="36" height="20">&nbsp;</td>
                                  <td height="20" colspan="3">
								  <p><b>Cap Penalty, before the start of the regular season</b></p>
								  
								  If a team is in violation of the cap at the first day of the OTHL regular season then the following penalties apply:</p>
								  
								  <p>The team will be penalized by the sum of $10 million dollars.  If the team is over the cap, in addition to the fine, the highest paid player on the team will be released and can be signed by any team as an unrestricted free agent. The commissioners also has the option to waive the highest rated player insted of the highets paid player.</p>
								  
								  <p><b>Cap Violation - Under Floor, During Season</b></p>
								    <p>If a team goes violates the cap before the trade deadline then the following penalties apply:</p>
								    <p>Day 1 - Team is fined $10 million dollars<br/>
								     Day 2 - Team is fined an additional $10 million dollars<br/>
									 Day 3 - Team is fined an additional $10 million dollars, and lose a 3rd, 4th, 5th, 6th, and 7th round draft pick.  Picks will be taken away in the most current year, or earliest year available.  If picks are not owned by team in violation, similar value will be determined by the commissioners.<br/>
									 Day 4 - Team is fined an additional $10 million, and lose two (2) 1st rd picks, and a 2nd rd pick.   Picks will be taken away in the most current year, or earliest year available.  If picks are not owned by team in violation, similar value will be determined by the commissioners.</p>
																	  
								  <p><b>Cap Violation - Over Cap, Before Trade Deadline</b></p>
								    <p>If a team goes violates the cap before the trade deadline then the following penalties apply:</p>
								    <p>Day 1 - Team is fined $2 million dollars<br/>
								     Day 2 - Team is fined an additional $3 million dollars<br/>
									 Day 3 - Last day to get under the cap by waiving/buying out/trading a player<br/>
									 Day 4 - If the team is still over the cap then automatically player(s) are waived to get under.</p>
									<p><b>Cap Violation - Over Cap, After Trade Deadline</b></p>
									<p>If a team goes over the cap after the trade deadline then the following penalties apply:</p>
									<p>Day 1 - Team in fined $2 million dollars<br/>
									Day 2 - Team is fined an additional $3 million dollars. Last day to get under the cap by waiving/buying out a player<br/>
									Day 3 - If the team is still over the cap then automatically player(s) are waived to get under.</p>
									<p><b>Player(s) That Will Get Automatically Waived</b></p>
									<p>If the league is forced to automatically waive a player because of salary cap penalties then one of two situations will occur, in this order:</p>
									<p><b>Situation 1</b><br/> The highest paid player that gets the team under the cap will be waived.</p><p>For example if Team X is $4,000,000 over the cap and Team X's top paid players are:</p><p>Joe Blow - $9,000,000<br/>John Joe - $5,500,000<br/>Jim Jensen - $4,100,000</p><p>Then Jim Jensen would be the one to get waived as he is the highest paid player that gets the team under the cap.</p>
									<p><b>Situation 2</b><br/> In the event that the team does not have one player that will get them under the cap then the highest paid player on the team will be waived along with the lowest paid player that gets them under the cap.</p><p>For example if Team X is $5,000,000 over the cap and Team X's top paid players are:</p><p>Henry High $4,200,000<br/>John Kent $3,600,000<br/>Peter Paul $3,500,000<br/>Jeff Joe $3,200,000<br/>Fred Frank $2,700,000</p>
									<p>Then Henry High would be waived as he is the team's highest paid player along with a player who makes $800,000 or the next step up from there (the lowest paid player that gets the team under the cap).</p></td><
                                </tr>
                                <tr> 
                                  <td width="6" height="20">&nbsp;</td>
                                  <td width="14" height="20">&nbsp;</td>
                                  <td width="36" height="20">&nbsp;</td>
                                  <td height="20" colspan="3" valign="top">&nbsp;</td>
                                </tr>
                                <tr> 
                                  <td width="6" height="20">&nbsp;</td>
                                  <td width="14" height="20"><div align="center"><img src="images/line_black.jpg" width="3" height="3" align="absmiddle"></div></td>
                                  <td width="36" height="20"><div align="center"><b>18c</b></div></td>
                                  <td height="20" colspan="3"><b><a name="18c"></a>GENERATING REVENUE</b></td>
                                </tr>
                                <tr> 
                                  <td width="6" height="20">&nbsp;</td>
                                  <td width="14" height="20">&nbsp;</td>
                                  <td width="36" height="20">&nbsp;</td>
                                  <td height="20" colspan="3">Teams can earn revenue 
                                    in the following ways: <br>
                                    <br>
                                    <img src="images/line_black.jpg" width="2" height="2" align="absmiddle"> 
                                    Teams will earn revenue buy selling tickets 
                                    to their games. The amount a team earns depends 
                                    on the arena size, attendance, and ticket 
                                    prices.<br>
                                    <br>
                                    <img src="images/line_black.jpg" width="2" height="2" align="absmiddle"> 
                                    Ticket prices can be changed any time during 
                                    the off-season or the first 10 games of the 
                                    regular season and once at the all-star break.<br>
                                    <br>
                                    <img src="images/line_black.jpg" width="2" height="2" align="absmiddle"> 
                                    Attendance will be based on whether a team 
                                    is playing well and if the team has any star 
                                    players, (80 plus in ratings), for the fans 
                                    to watch play.</td>
                                </tr>
                                <tr> 
                                  <td width="6" height="20">&nbsp;</td>
                                  <td width="14" height="20">&nbsp;</td>
                                  <td width="36" height="20">&nbsp;</td>
                                  <td height="20" colspan="3" valign="top">&nbsp;</td>
                                </tr>
                                <tr> 
                                  <td width="6" height="20">&nbsp;</td>
                                  <td width="14" height="20"> 
                                    <div align="center"><img src="images/line_black.jpg" width="3" height="3" align="absmiddle"></div>
                                  </td>
                                  <td width="36" height="20"> 
                                    <div align="center"><b>18c</b></div>
                                  </td>
                                  <td height="20" colspan="3"><b><a name="18c"></a>SPECIAL 
                                    ACHIEVEMENT BONUSES</b></td>
                                </tr>
                                <tr> 
                                  <td width="6" height="20">&nbsp;</td>
                                  <td width="14" height="20"> 
                                    <div align="center"></div>
                                  </td>
                                  <td width="36" height="20"> 
                                    <div align="center"></div>
                                  </td>
                                  <td height="20" colspan="3">There will be special 
                                    achievement bonuses given out at the end of 
                                    each OTHL season. Specific dollar amounts 
                                    will not be revealed until the end of the 
                                    season but money will be given out to GM's 
                                    who are active on the message board and ICQ, 
                                    GM's who send in lines and answer their e-mails 
                                    on a regular basis. Money will also be given 
                                    out for GM's who help the league out in any 
                                    way with articles or simular tasks. Prize 
                                    money will also be given out to teams that 
                                    win any kind of league award.</td>
                                </tr>
                                <tr> 
                                  <td width="6" height="20">&nbsp;</td>
                                  <td width="14" height="20">&nbsp;</td>
                                  <td width="36" height="20">&nbsp;</td>
                                  <td height="20" colspan="3" valign="top">&nbsp;</td>
                                </tr>
                                <tr> 
                                  <td width="6" height="20">&nbsp;</td>
                                  <td width="14" height="20"> 
                                    <div align="center"><img src="images/line_black.jpg" width="3" height="3" align="absmiddle"></div>
                                  </td>
                                  <td width="36" height="20"> 
                                    <div align="center"><b>18ci</b></div>
                                  </td>
                                  <td height="20" colspan="3"><b><a name="18ci"></a> 
                                    PRIZE MONEY</b></td>
                                </tr>
                                <tr> 
                                  <td width="6" height="20">&nbsp;</td>
                                  <td width="14" height="20"> 
                                    <div align="center"></div>
                                  </td>
                                  <td width="36" height="20"> 
                                    <div align="center"></div>
                                  </td>
                                  <td height="20" colspan="3">
								  <p><b>Awards:</b> Every team that wins a major team oriented award will be given $250,000 dollars. 
								  The awards are: the Stanley Cup, President's Trophy, the Prince Of Wales Trophy and the Clarence S. Campbell Trophy.</p>
								  <p>Every team that has a player that wins a major award will be awarded with $150,000 dollars. (Hart, Vezina, Calder, Conn Smythe and so on).</p>
								  <p>Every team that has a player that wins a minor award will be awarded with $75,000 dollars. The awards include: the Bob Probert Trophy, the Wayne Gretzky Trophy, the Scott Stevens Trophy, the Vladimir Konstantin Trophy, the Iron Man Trophy, the Gordie Howe Trophy, the Larry Robinson Trophy, the OTHL Star of the Year and the Unsung Hero Award.</p>
                                  <p><b>Performance Money:</b> A team will be given $250,000 for each playoff round they win.</p></td>
                                </tr>
                                <tr> 
                                  <td width="6" height="20">&nbsp;</td>
                                  <td width="14" height="20">&nbsp;</td>
                                  <td width="36" height="20">&nbsp;</td>
                                  <td height="20" colspan="3" valign="top">&nbsp;</td>
                                </tr>
                                <tr> 
                                  <td width="6" height="20">&nbsp;</td>
                                  <td width="14" height="20"> 
                                    <div align="center"><img src="images/line_black.jpg" width="3" height="3" align="absmiddle"></div>
                                  </td>
                                  <td width="36" height="20"> 
                                    <div align="center"><b>18e</b></div>
                                  </td>
                                  <td height="20" colspan="3"><b><a name="18e"></a>TEAMS 
                                    IN FINANCIAL DISTRESS</b></td>
                                </tr>
                                <tr> 
                                  <td width="6" height="20">&nbsp;</td>
                                  <td width="14" height="20"> 
                                    <div align="center"></div>
                                  </td>
                                  <td width="36" height="20"> 
                                    <div align="center"></div>
                                  </td>
                                  <td height="20" colspan="3"><p>A team in financial distress is one that may be in danger of becoming bankrupt. The Commissioners will be keeping a close eye on finances and if they see a GM who is not handling their money wisely they will be warned to correct the problem. If the problem is not getting corrected or starts to get worse then the GM at fault may be subject to dismissal. </p></td>
                                </tr>
                                <tr> 
                                  <td width="6" height="20">&nbsp;</td>
                                  <td width="14" height="20">&nbsp;</td>
                                  <td width="36" height="20">&nbsp;</td>
                                  <td height="20" colspan="3" valign="top" background="images/background_linerules.jpg">&nbsp;</td>
                                </tr>
                                <tr>
                                  <td width="6" height="20">&nbsp;</td>
                                  <td width="14" height="20">&nbsp;</td>
                                  <td width="36" height="20">&nbsp;</td>
                                  <td height="20" colspan="3" valign="top">
                                    <div align="center"><a href="rules.asp">TABLE OF CONTENTS</a> | <a href="rules_read.asp#top">TO 
                                      THE TOP</a></div>
                                  </td>
                                </tr>
                              </table>
                              <br>
                              <table class="office" width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#ECECEC">
                                <tr> 
                                  <td class='gm' height='20' background='images/background_greyline_15.jpg' colspan="6"> 
                                    <div align='center'><b class='gm'><a name="19"></a>CHAPTER 
                                      19, DRAFTS</b></div>
                                  </td>
                                </tr>
                                <tr> 
                                  <td width="6" height="20">&nbsp;</td>
                                  <td width="14" height="20"> 
                                    <div align="center"><img src="images/line_black.jpg" width="3" height="3" align="absmiddle"></div>
                                  </td>
                                  <td width="36" height="20"> 
                                    <div align="center"><b>19a</b></div>
                                  </td>
                                  <td height="20" colspan="3"><b><a name="19a"></a>GENERAL 
                                    INFORMATION</b></td>
                                </tr>
                                <tr> 
                                  <td width="6" height="20">&nbsp;</td>
                                  <td width="14" height="20"> 
                                    <div align="center"></div>
                                  </td>
                                  <td width="36" height="20"> 
                                    <div align="center"></div>
                                  </td>
                                  <td height="20" colspan="3"> Drafts will usually be held on IRC (Internet Relay Chat). In order to participate in a chat on IRC, you will need a chat client. The most common one is called mIRC and can be downloaded for free at <a href="http://www.mirc.com">www.mirc.com </a>. Other IRC clients can also be used, as long as they will allow you to connect to the designated channel on the server of our choice. <br>
                                    <br>
GM's are encouraged to download the program, learn the basics of it and keep an IRC client available to them at all times. <br>
<br>
ICQ, e-mail or the message board can be used but only as a last resort. If a GM cannot make it to a draft then it is up to them to make arrangements to send in a draft list to one of the Commissioners or have someone draft for them. If a GM does not make these arrangements then a Commissioner or <a href="bod.asp" title="Board Of Directors">BOD</a> member can draft for them and they may not be the best of picks. </td>
                                </tr>
                                <tr> 
                                  <td width="6" height="20">&nbsp;</td>
                                  <td width="14" height="20">&nbsp;</td>
                                  <td width="36" height="20">&nbsp;</td>
                                  <td height="20" colspan="3" valign="top">&nbsp;</td>
                                </tr>
                                <tr> 
                                  <td width="6" height="20">&nbsp;</td>
                                  <td width="14" height="20"> 
                                    <div align="center"><img src="images/line_black.jpg" width="3" height="3" align="absmiddle"></div>
                                  </td>
                                  <td width="36" height="20"> 
                                    <div align="center"><b>19ai</b></div>
                                  </td>
                                  <td height="20" colspan="3"><b><a name="19i"></a>DRAFT ETIQUETTE</b></td>
                                </tr>
                                <tr> 
                                  <td width="6" height="20">&nbsp;</td>
                                  <td width="14" height="20"> 
                                    <div align="center"></div>
                                  </td>
                                  <td width="36" height="20"> 
                                    <div align="center"></div>
                                  </td>
                                  <td height="20" colspan="3"> <p>One of the biggest issues with organizing a draft is that GM's often fail to follow instructions. If the draft is scheduled for 11am EST then be there ready to go 5-10 minutes early. Do not bother showing up for 10 minutes then leaving for 20 then popping in for 5 etc., this only creates confusion. If you can't be on for 30 minutes straight then we insted suggest that you send in a draft list. </p>
                                    <p>Your nickname on IRC MUST have something to do with your team name unless you are a Commissioner. Names like “VancouverGM”, “GMCanucks”, “Canucks-Greg” etc., are acceptable choices. </p>
                                  In the entry draft there will be two separate channels. One channel is for talking with the GM's and one channel is for the draft activities to happen. No one is allowed to speak in the draft channel other than the person(s) running the draft. When it is your turn to choose, you can send a personal message to the person(s) in charge and they will announce your pick for you in the draft channel. Teams must make selections in a timely manner otherwise a Commissioner will make the pick for them </td>
                                </tr>
                                <tr> 
                                  <td width="6" height="20">&nbsp;</td>
                                  <td width="14" height="20">&nbsp;</td>
                                  <td width="36" height="20">&nbsp;</td>
                                  <td height="20" colspan="3" valign="top">&nbsp;</td>
                                </tr>								
                                <tr> 
                                  <td width="6" height="20">&nbsp;</td>
                                  <td width="14" height="20"> 
                                    <div align="center"><img src="images/line_black.jpg" width="3" height="3" align="absmiddle"></div>
                                  </td>
                                  <td width="36" height="20"> 
                                    <div align="center"><b>19b</b></div>
                                  </td>
                                  <td height="20" colspan="3"><b><a name="19b"></a>ENTRY 
                                    DRAFT</b></td>
                                </tr>
                                <tr> 
                                  <td width="6" height="20">&nbsp;</td>
                                  <td width="14" height="20"> 
                                    <div align="center"></div>
                                  </td>
                                  <td width="36" height="20"> 
                                    <div align="center"></div>
                                  </td>
                                  <td height="20" colspan="3"> The entry draft will occur in the off-season. All players that were eligible for the previous NHL entry draft will be included in the OTHL entry draft and only these players. The entry draft will be a full 9 rounds. GM's will be allowed to trade during this draft. The draft order will be in reverse order of the previous OTHL standings with the non-playoff teams entering a draft lottery. The draft lottery only affects the first round of the draft, all other rounds will be in reverse order of the previous OTHL standings </td>
                                </tr>
                                <tr> 
                                  <td width="6" height="20">&nbsp;</td>
                                  <td width="14" height="20">&nbsp;</td>
                                  <td width="36" height="20">&nbsp;</td>
                                  <td height="20" colspan="3" valign="top">&nbsp;</td>
                                </tr>
                                <tr> 
                                  <td width="6" height="20">&nbsp;</td>
                                  <td width="14" height="20"> 
                                    <div align="center"><img src="images/line_black.jpg" width="3" height="3" align="absmiddle"></div>
                                  </td>
                                  <td width="36" height="20"> 
                                    <div align="center"><b>19bi</b></div>
                                  </td>
                                  <td height="20" colspan="3"><b><a name="19bi"></a>ENTRY 
                                    DRAFT LOTTERY</b></td>
                                </tr>
                                <tr> 
                                  <td width="6" height="20">&nbsp;</td>
                                  <td width="14" height="20"> 
                                    <div align="center"></div>
                                  </td>
                                  <td width="36" height="20"> 
                                    <div align="center"></div>
                                  </td>
                                  <td height="20" colspan="3"><p>For all the non-playoff teams there will be a draft lottery held, done automatically by the simulator. The team who finished the season in last place will have the best odds of selecting first, the second to last team will have the second best odds and so on. The lottery is to determine who will draft first overall. Teams who finish 26 th – 30 th in the standings can move up a maximum of 4 spots therefore any of these teams have a shot at selecting first overall. Teams who finish 17 th – 25 th can move up a maximum of 4 spots therefore none of the teams have a chance of selecting first overall. </p>
                                  <p>Here are the odds of selecting first for 
                                      non-playoff teams:</p>
                                    <p align="center">30th............. 25.0% 
                                      <br>
                                      29th............. 18.8% <br>
                                      28th............. 14.2% <br>
                                      27th............. 10.7% <br>
                                      26th.............. 8.1% <br>
                                      25th............... 6.2% <br>
                                      24th............... 4.7% <br>
                                      23rd............... 3.6% <br>
                                      22nd.............. 2.7% <br>
                                      21st............... 2.1% <br>
                                      20th.............. 1.5% <br>
                                      19th.............. 1.1% <br>
                                      18th.............. 0.8% <br>
                                      17th.............. 0.5%<br>
                                    </p>
                                  </td>
                                </tr>
                                <tr> 
                                  <td width="6" height="20">&nbsp;</td>
                                  <td width="14" height="20">&nbsp;</td>
                                  <td width="36" height="20">&nbsp;</td>
                                  <td height="20" colspan="3" valign="top">&nbsp;</td>
                                </tr>
                                <tr> 
                                  <td width="6" height="20">&nbsp;</td>
                                  <td width="14" height="20"> 
                                    <div align="center"><img src="images/line_black.jpg" width="3" height="3" align="absmiddle"></div>
                                  </td>
                                  <td width="36" height="20"> 
                                    <div align="center"><b>19c</b></div>
                                  </td>
                                  <td height="20" colspan="3"><b><a name="19c"></a>waiver 
                                    DRAFT</b></td>
                                </tr>
                                <tr> 
                                  <td width="6" height="20">&nbsp;</td>
                                  <td width="14" height="20"></td>
                                  <td width="36" height="20"></td>
                                  <td height="20" colspan="3"><p>After the 2005-2006 season there will no longer a waiver draft before the start of the regular season OTHL.</p>
                                    </td>
                                </tr>
                                <tr> 
                                  <td width="6" height="20">&nbsp;</td>
                                  <td width="14" height="20">&nbsp;</td>
                                  <td width="36" height="20">&nbsp;</td>
                                  <td height="20" colspan="3" valign="top">&nbsp;</td>
                                </tr>
                                <tr> 
                                  <td width="6" height="20">&nbsp;</td>
                                  <td width="14" height="20"> 
                                    <div align="center"><img src="images/line_black.jpg" width="3" height="3" align="absmiddle"></div>
                                  </td>
                                  <td width="36" height="20"> 
                                    <div align="center"><b>19d</b></div>
                                  </td>
                                  <td height="20" colspan="3"><b><a name="19d"></a>EXPANSION 
                                    DRAFT</b></td>
                                </tr>
                                <tr> 
                                  <td width="6" height="20">&nbsp;</td>
                                  <td width="14" height="20"> 
                                    <div align="center"></div>
                                  </td>
                                  <td width="36" height="20"> 
                                    <div align="center"></div>
                                  </td>
                                  <td height="20" colspan="3">The OTHL will expand 
                                    in the first off-season following an NHL expansion. 
                                    Existing clubs may choose either of the following 
                                    protection plans:<br>
                                    <br>
                                    <b>1,</b> Up to 5 defensemen, 9 forwards, 
                                    and 1 goaltender <br>
                                    <br>
                                    or<br>
                                    <br>
                                    <b>2,</b> Up to 4 defensemen, 8 forwards, 
                                    and 2 goaltenders<br>
                                    <br>
                                    Each club must expose for claim at least the 
                                    following players who meet the experience 
                                    requirements indicated below: <br>
                                    <br>
                                    One Goaltender - For teams protecting one 
                                    goaltender, no experience requirement is necessary. 
                                    For teams protecting two goaltenders, one 
                                    of the goalies must have at least 15 games 
                                    of experience in the OTHL pro league. Games 
                                    played include regular season and playoff 
                                    games. <br>
                                    <br>
                                    One Experienced Defenseman - A defenseman 
                                    who has at least 40 OTHL games of experience. 
                                    Games played include regular season and playoff 
                                    games. <br>
                                    <br>
                                    Two Experienced Forwards - Two forwards who 
                                    have at least 40 OTHL games of experience 
                                    each. Games played include regular season 
                                    and playoff games.</td>
                                </tr>
                                <tr> 
                                  <td width="6" height="20">&nbsp;</td>
                                  <td width="14" height="20">&nbsp;</td>
                                  <td width="36" height="20">&nbsp;</td>
                                  <td height="20" colspan="3" valign="top">&nbsp;</td>
                                </tr>
                                <tr> 
                                  <td width="6" height="20">&nbsp;</td>
                                  <td width="14" height="20"> 
                                    <div align="center"><img src="images/line_black.jpg" width="3" height="3" align="absmiddle"></div>
                                  </td>
                                  <td width="36" height="20"> 
                                    <div align="center"><b>19e</b></div>
                                  </td>
                                  <td height="20" colspan="3"><b><a name="19e"></a>EQUALIZTION 
                                    DRAFT</b></td>
                                </tr>
                                <tr> 
                                  <td width="6" height="20">&nbsp;</td>
                                  <td width="14" height="20"> 
                                    <div align="center"></div>
                                  </td>
                                  <td width="36" height="20"> 
                                    <div align="center"></div>
                                  </td>
                                  <td height="20" colspan="3"><p>If the Commissioners feel a OTHL team or teams have become too weak then an equalization draft may be necessary as a last resort to balance the league. The equalization draft is to be used for emergency purposes only and will hopefully never have to be used. If there is an equalization draft, it will take place in the off-season. The rules and stipulations will be made by the Commissioners and every GM will be given a fair amount of time to prepare for the draft. </p></td>
                                </tr>
                                <tr> 
                                  <td width="6" height="20">&nbsp;</td>
                                  <td width="14" height="20">&nbsp;</td>
                                  <td width="36" height="20">&nbsp;</td>
                                  <td height="20" colspan="3" valign="top">&nbsp;</td>
                                </tr>
                                <tr> 
                                  <td width="6" height="20">&nbsp;</td>
                                  <td width="14" height="20"> 
                                    <div align="center"><img src="images/line_black.jpg" width="3" height="3" align="absmiddle"></div>
                                  </td>
                                  <td width="36" height="20"> 
                                    <div align="center"><b>19f</b></div>
                                  </td>
                                  <td height="20" colspan="3"><b><a name="19f"></a>CONTRACTION 
                                    DRAFT</b></td>
                                </tr>
                                <tr> 
                                  <td width="6" height="20">&nbsp;</td>
                                  <td width="14" height="20"> 
                                    <div align="center"></div>
                                  </td>
                                  <td width="36" height="20"> 
                                    <div align="center"></div>
                                  </td>
                                  <td height="20" colspan="3">The contraction 
                                    draft is a tool the commissioners can use 
                                    if they feel the league is unjust, and if 
                                    a team is unable to compete in any way shape 
                                    or form.<br>
                                    <br>
                                    The OTHL will contract in the first off-season 
                                    following an NHL contraction or if the Co-Commissioners 
                                    feel a contraction is needed in the OTHL. 
                                    If there is still a GM on a team that needs 
                                    to be contracted then that GM will either 
                                    be let go, temporarily out of work until another 
                                    GM spot opens up or contraction will be put 
                                    on hold. <br>
                                    <br>
                                    A contraction draft will be held in the off-season. 
                                    The team or teams that are being contracted 
                                    will have all their assets put into the draft 
                                    including roster players, prospects, draft 
                                    picks and any other players or coaches that 
                                    they may own the rights to.<br>
                                    <br>
                                    The draft order will be a reverse order of 
                                    the previous OTHL season standings and the 
                                    draft will continue until all the assets have 
                                    been selected.</td>
                                </tr>
                                <tr> 
                                  <td width="6" height="20">&nbsp;</td>
                                  <td width="14" height="20">&nbsp;</td>
                                  <td width="36" height="20">&nbsp;</td>
                                  <td height="20" colspan="3" valign="top" background="images/background_linerules.jpg">&nbsp;</td>
                                </tr>
                                <tr> 
                                  <td colspan="3" height="20">&nbsp;</td>
                                  <td height="20" colspan="3" valign="top">
                                    <div align="center"><a href="rules.asp">TABLE OF CONTENTS</a> | <a href="rules_read.asp#top">TO 
                                      THE TOP</a></div>
                                  </td>
                                </tr>
                              </table>
                              <br>
                              <table class="office" width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#ECECEC">
                                <tr> 
                                  <td class='gm' height='20' background='images/background_greyline_15.jpg' colspan="6"> 
                                    <div align='center'><b class='gm'><a name="20"></a>CHAPTER 
                                      20, SPECIAL EVENTS</b></div>
                                  </td>
                                </tr>
                                <tr> 
                                  <td width="6" height="20">&nbsp;</td>
                                  <td width="14" height="20"> 
                                    <div align="center"><img src="images/line_black.jpg" width="3" height="3" align="absmiddle"></div>
                                  </td>
                                  <td width="36" height="20"> 
                                    <div align="center"><b>20a</b></div>
                                  </td>
                                  <td height="20" colspan="3"><b><a name="20a"></a>ALL-STAR 
                                    GAME</b></td>
                                </tr>
                                <tr> 
                                  <td width="6" height="20">&nbsp;</td>
                                  <td width="14" height="20"> 
                                    <div align="center"></div>
                                  </td>
                                  <td width="36" height="20"> 
                                    <div align="center"></div>
                                  </td>
                                  <td height="20" colspan="3"> Each season, between the 30-50 game mark (per team) the OTHL will host an All-Star game. The city that will host the All-Star game will be the same as the NHL had for the previous NHL season. <br>
                                    <br>
                                  There will be a break in the schedule to allow for the game to take place. <br>
                                  <br>
                                  There will be two All-Star teams, an East and a West. Each team will be made up of at least 3 players at each forward position plus 3 other forwards at any position, 6 defensemen and 2 goalies. Each OTHL team must have at least one representative at the All-Star game. There will also be 1 coach selected from each conference to coach the teams. Lines will be made by the Commissioners. Any stats that are cumulated in the game will be separate from regular season stats </td>
                                </tr>
                                <tr> 
                                  <td width="6" height="20">&nbsp;</td>
                                  <td width="14" height="20">&nbsp;</td>
                                  <td width="36" height="20">&nbsp;</td>
                                  <td height="20" colspan="3">&nbsp;</td>
                                </tr>
                                <tr> 
                                  <td width="6" height="20">&nbsp;</td>
                                  <td width="14" height="20"> 
                                    <div align="center"><img src="images/line_black.jpg" width="3" height="3" align="absmiddle"></div>
                                  </td>
                                  <td width="36" height="20"> 
                                    <div align="center"><b>20b</b></div>
                                  </td>
                                  <td height="20" colspan="3"><b><a name="20b"></a>YOUNG-STARS 
                                    GAME</b></td>
                                </tr>
                                <tr> 
                                  <td width="6" height="20">&nbsp;</td>
                                  <td width="14" height="20"> 
                                    <div align="center"></div>
                                  </td>
                                  <td width="36" height="20"> 
                                    <div align="center"></div>
                                  </td>
                                  <td height="20" colspan="3"><p>Each season, between the 30-50 game mark (per team), the OTHL will host a Young-Stars game, a day or two before the All-Star game takes place. The same city hosting the All-Star game, will also host the Young-Stars game. <br>
                                    <br>
                                  There will be a break in the schedule to allow for the game to take place. <br>
                                  <br>
                                  There will be two Young-Stars teams, an East and a West. Each team will be made up of at least 3 players at each forward position plus 3 other forwards at any position, 6 defensemen and 2 goalies. Players participating in the Young-Stars game must be 24 years old or younger. Participants in the Young-Stars game are also allowed to play in the All-Star game. All OTHL teams do not have to be represented. There will also be 1 coach selected from each conference to coach the teams. Lines will be made by the Commissioners. Any stats that are cumulated in the game will be separate from regular season stats. </p></td>
                                </tr>
                                <tr> 
                                  <td width="6" height="20">&nbsp;</td>
                                  <td width="14" height="20">&nbsp;</td>
                                  <td width="36" height="20">&nbsp;</td>
                                  <td height="20" colspan="3">&nbsp;</td>
                                </tr>
                                <tr> 
                                  <td width="6" height="20">&nbsp;</td>
                                  <td width="14" height="20"> 
                                    <div align="center"><img src="images/line_black.jpg" width="3" height="3" align="absmiddle"></div>
                                  </td>
                                  <td width="36" height="20"> 
                                    <div align="center"><b>20c</b></div>
                                  </td>
                                  <td height="20" colspan="3"><b><a name="20b"></a>AWARDS</b></td>
                                </tr>
                                <tr> 
                                  <td width="6" height="20">&nbsp;</td>
                                  <td width="14" height="20"> 
                                    <div align="center"></div>
                                  </td>
                                  <td width="36" height="20"> 
                                    <div align="center"></div>
                                  </td>
                                  <td height="20" colspan="3"><p>At the end of each OTHL season, awards will be handed out. Some awards will be automatically given (Art Ross Trophy, William M. Jennings Trophy, Presidents Trophy etc..) but the majority will be handed out by the Commissioners (GM of the Year, Lady Byng Trophy, James Norris Trophy, Conn Smythe Trophy etc..). Teams will be rewarded money for each award, see section <a href="rules_read.asp#18di">18di</a>.</p>
                                  <p>Money will not be given out for OTMHL awards. </p></td>
                                </tr>
                                <tr> 
                                  <td width="6" height="20">&nbsp;</td>
                                  <td width="14" height="20">&nbsp;</td>
                                  <td width="36" height="20">&nbsp;</td>
                                  <td height="20" colspan="3" background="images/background_linerules.jpg">&nbsp;</td>
                                </tr>
                                <tr> 
                                  <td colspan="3" height="20">&nbsp;</td>
                                  <td height="20" colspan="3">
                                    <div align="center"><a href="rules.asp">TABLE OF CONTENTS</a> | <a href="rules_read.asp#top">TO 
                                      THE TOP</a></div>
                                  </td>
                                </tr>
                              </table>
                              <br>
                              <table class="office" width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#ECECEC">
                                <tr> 
                                  <td class='gm' height='20' background='images/background_greyline_15.jpg' colspan="6"> 
                                    <div align='center'><b class='gm'><a name="21"></a>CHAPTER 
                                      21, OTHMHL</b></div>
                                  </td>
                                </tr>
                                <tr> 
                                  <td width="6" height="20">&nbsp;</td>
                                  <td width="14" height="20"> 
                                    <div align="center"><img src="images/line_black.jpg" width="3" height="3" align="absmiddle"></div>
                                  </td>
                                  <td width="36" height="20"> 
                                    <div align="center"><b>21</b></div>
                                  </td>
                                  <td height="20" colspan="3"><b><a name="21"></a>GENERAL 
                                    INFORMATION </b></td>
                                </tr>
                                <tr> 
                                  <td width="6" height="20">&nbsp;</td>
                                  <td width="14" height="20"> 
                                    <div align="center"></div>
                                  </td>
                                  <td width="36" height="20"> 
                                    <div align="center"></div>
                                  </td>
                                  <td height="20" colspan="3">The OTMHL is the 
                                    minor league for the OTHL. Each OTHL team 
                                    is affiliated with 1 OTMHL team and has rights 
                                    to all of their players. The OTMHL teams will 
                                    play on the same days as their OTHL affiliates 
                                    and they will play against the same organization</td>
                                </tr>
                                <tr> 
                                  <td width="6" height="20">&nbsp;</td>
                                  <td width="14" height="20">&nbsp;</td>
                                  <td width="36" height="20">&nbsp;</td>
                                  <td height="20" colspan="3" valign="top" background="images/background_linerules.jpg">&nbsp;</td>
                                </tr>
                                <tr> 
                                  <td colspan="3" height="20">&nbsp;</td>
                                  <td height="20"> 
                                    <div align="center"><a href="rules.asp">TABLE OF CONTENTS</a> | <a href="rules_read.asp#top">TO 
                                      THE TOP</a></div>
                                  </td>
                                </tr>
                              </table>
                              <br>
                              <table class="office" width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#ECECEC">
                                <tr> 
                                  <td class='gm' height='20' background='images/background_greyline_15.jpg' colspan="6"> 
                                    <div align='center'><b class='gm'><a name="22"></a>CHAPTER 
                                      22, NOTE</b></div>
                                  </td>
                                </tr>
                                <tr> 
                                  <td width="6" height="20">&nbsp;</td>
                                  <td width="14" height="20"> 
                                    <div align="center"><img src="images/line_black.jpg" width="3" height="3" align="absmiddle"></div>
                                  </td>
                                  <td width="36" height="20"> 
                                    <div align="center"><b>22</b></div>
                                  </td>
                                  <td height="20" colspan="3"><b><a name="21"></a>NOTE</b></td>
                                </tr>
                                <tr> 
                                  <td width="6" height="20">&nbsp;</td>
                                  <td width="14" height="20"> 
                                    <div align="center"></div>
                                  </td>
                                  <td width="36" height="20"> 
                                    <div align="center"></div>
                                  </td>
                                  <td height="20" colspan="3">The OTHL CBA is 
                                    subject to review at any time and can be changed 
                                    at any time. When anything in the CBA has 
                                    changed, all GM's will be notified. </td>
                                </tr>
                                <tr> 
                                  <td width="6" height="20">&nbsp;</td>
                                  <td width="14" height="20">&nbsp;</td>
                                  <td width="36" height="20">&nbsp;</td>
                                  <td height="20" colspan="3" valign="top" background="images/background_linerules.jpg">&nbsp;</td>
                                </tr>
                                <tr> 
                                  <td colspan="3" height="20">&nbsp;</td>
                                  <td height="20"> 
                                    <div align="center"><a href="rules.asp">TABLE OF CONTENTS</a> | <a href="rules_read.asp#top">TO 
                                      THE TOP</a></div>
                                  </td>
                                </tr>
                              </table>  
                              <br>
                              <table class="office" width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#ECECEC">
                                <tr> 
                                  <td class='gm' height='20' background='images/background_greyline_15.jpg'> 
                                    <div align='center'><a name="down"></a></div>
                                  </td>
                                </tr>
                                <tr> 
                                  <td height="20">
                                    <div align="center"><a href="rules.asp">TABLE OF CONTENTS</a> | <a href="rules_read.asp#top">TO 
                                      THE TOP</a></div>
                                  </td>
                                </tr>
                              </table>
                              <img src="images/line_darkgrey.jpg" width="580" height="1">
                            </td>
                          </tr>
                        </table>
                        
                      </td>
                      <td width="5">&nbsp;</td>
                    </tr>
                  </table>
                </td>
              </tr>
              <tr>
                <td valign="baseline"><img src="images/bottom_pic.jpg" width="730" height="19"></td>
              </tr>
            </table>
          </td>
        </tr>
      </table>
    </td>
  </tr>
</table>
</body>
</html>
<% Connect.Close : Set Connect = Nothing %>