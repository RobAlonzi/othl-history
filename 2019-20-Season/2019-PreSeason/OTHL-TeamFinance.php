<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<title>OTHL - Team Finance</title>
<script src="OTHL.js"></script>
<meta name="author" content="Simon Tremblay, sths.simont.info" />
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="Decription" content="Tyler Bell - STHS - Version : 3.1.6.6" />
<link href="STHSMain.css" rel="stylesheet" type="text/css" />
<style>
@media screen and (max-width: 960px) {.STHSWarning {display:block;}
.STHSFinance_FarmSalaryTable {display:none;}
.STHSFinance_TeamTable tr > td:nth-child(6){display:none;}
.STHSFinance_TeamTable tr > td:nth-child(7){display:none;}
.STHSFinance_TeamTable tr > td:nth-child(8){display:none;}}
@media screen and (max-width: 720px) {.STHSFinance_ProSalaryTable{display:none}}
</style>
<link href="OTHL.css" rel="stylesheet" type="text/css" />
<?php If (file_exists("STHSMain-CSSOverwrite.css") == true){echo "<link href=\"STHSMain-CSSOverwrite.css\" rel=\"stylesheet\" type=\"text/css\" />";}?>
</head><body>
<?php $LeagueName = (string)"";
$DatabaseFile = (string)"OTHL-STHS.db";
$LangOverwrite = (boolean)FALSE;
$CareerStatDatabaseFile = (string)"OTHL-STHSCareerStat.db";
$lang = (string)"en"; /* The $lang option must be either "en" or "fr" */
if(isset($_GET['Lang'])){$lang  = filter_var($_GET['Lang'], FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW || FILTER_FLAG_STRIP_HIGH);$LangOverwrite=TRUE;}  /* Allow Users Language Overwrite */
If ($lang == "fr"){include 'LanguageFR.php';}else{include 'LanguageEN.php';}
$db = new SQLite3($DatabaseFile);
$Active = 1; /* Show Webpage Top Menu */
include "Menu.php";?>
<div class="STHSTopLink"><a id="STHSRosterTop"></a> <a href="#Avalanche">Avalanche</a> | <a href="#Blackhawks">Blackhawks</a> | <a href="#BlueJackets">Blue Jackets</a> | <a href="#Blues">Blues</a> | <a href="#Bruins">Bruins</a> | <a href="#Canadiens">Canadiens</a> | <a href="#Canucks">Canucks</a> | <a href="#Capitals">Capitals</a> | <a href="#Coyotes">Coyotes</a> | <a href="#Devils">Devils</a> | <a href="#Ducks">Ducks</a> | <a href="#Flames">Flames</a> | <a href="#Flyers">Flyers</a> | <a href="#GoldenKnights">Golden Knights</a> | <a href="#Hurricanes">Hurricanes</a> | <a href="#Islanders">Islanders</a> | <a href="#Jets">Jets</a> | <a href="#Kings">Kings</a> | <a href="#Lightning">Lightning</a> | <a href="#MapleLeafs">Maple Leafs</a> | <a href="#Oilers">Oilers</a> | <a href="#Panthers">Panthers</a> | <a href="#Penguins">Penguins</a> | <a href="#Predators">Predators</a> | <a href="#Rangers">Rangers</a> | <a href="#RedWings">Red Wings</a> | <a href="#Sabres">Sabres</a> | <a href="#Senators">Senators</a> | <a href="#Sharks">Sharks</a> | <a href="#Stars">Stars</a> | <a href="#Wild">Wild</a> | <a href="javascript:STHS_JS_CloseAll('');">Close All Team View</a> | <a href="javascript:STHS_JS_OpenAll('');">Open All Team View</a>
 | <a href="#SalaryCapCentrale">Salary Cap Centrale Report</a></div>
<h1 class="TeamFinancePro_COL"><a id="Avalanche">Avalanche</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=8">Avalanche Page</a> ]
[ <a href="OTHL-ProTeamRoster.php#Avalanche">Pro Team Roster</a> ]
[ <a href="OTHL-ProTeamScoring.php#Avalanche">Pro Team Scoring</a> ]
[ <a href="OTHL-TeamFinance.php#Avalanche">Team Finance</a> ]
[ <a href="OTHL-ProTeamPlayersInfo.php#Avalanche">Pro Team PlayersInfo</a> ]
[ <a href="OTHL-ProTeamLines.php#Avalanche">Pro Team Lines</a> ]
[ <a href="OTHL-TeamProspects.php#Avalanche">Team Prospects</a> ]
[ <a href="OTHL-ProTeamSchedule.php#Avalanche">Pro Team Schedule</a> ]
[ <a href="OTHL-ProTeamStats.php#Avalanche">Pro Team Stats</a> ]
[ <a href="OTHL-ProTeamStatsVS.php#Avalanche">Pro Team Stats VS</a> ]
[ <a href="OTHL-TeamInjurySuspension.php#Avalanche">Team Injury Suspension</a> ]
[ <a href="OTHL-TeamHistory.php#Avalanche">Team History</a> ]
[ <a href="OTHL-TeamRecords.php#Avalanche">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Avalanche');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Avalanche" style="display: block;">
<br /><br /><table class="STHSTableFullW"><tr><td style="vertical-align: top;width:440px;">
<table class="STHSFinance_TeamTable">
<tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_AreanaCapacity">Arena Capacity - Ticket Price<br />Attendance - %</h3></td></tr>
<tr><td class="STHSW250">Arena Name</td><td class="STHSW200">Pepsi Center</td></tr>
<tr><td>Level 1: </td><td>6000 - $158 - 5,681 - 94.68%</td></tr>
<tr><td>Level 2: </td><td>5000 - $122 - 4,594 - 91.87%</td></tr>
<tr><td>Level 3: </td><td>4000 - $95 - 3,878 - 96.94%</td></tr>
<tr><td>Level 4: </td><td>3000 - $65 - 2,853 - 95.09%</td></tr>
<tr><td>Luxury : </td><td>1000 - $259 - 935 - 93.45%</td></tr>
<tr><td>Total Capacity :</td><td>19000</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Farm Level 1: </td><td>2000 - $50 - 1,482 - 74.11%</td></tr>
<tr><td>Farm Level 2: </td><td>1000 - $0 - 735 - 73.48%</td></tr>
<tr><td>Farm Total Capacity :</td><td>3000</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Income">Income</h3></td></tr>
<tr><td>Home Games Left</td><td>37</td></tr>
<tr><td>Average Attendance - %</td><td>17,939 - 94.42%</td></tr>
<tr><td>Average Income per Game</td><td>$2,281,165</td></tr>
<tr><td>Year to Date Revenue</td><td>$9,124,661</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Home Games Left</td><td>37</td></tr>
<tr><td>Average Attendance - %</td><td>2,217 - 73.90%</td></tr>
<tr><td>Average Income per Game</td><td>$74,113</td></tr>
<tr><td>Year to Date Revenue</td><td>$296,450</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>$65,390,833</td></tr>
<tr><td>Farm Players Total Salaries</td><td>$864,783</td></tr>
<tr><td>Coaches Total Salaries</td><td>$2,100,000</td></tr>
<tr><td>Luxury Taxe Total</td><td>$0</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>$5,858,596</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>$160,265</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>$5,721,506</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>$0</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Pro Estimated Season Revenue</td><td>$84,403,114</td></tr>
<tr><td>Farm Estimated Season Revenue</td><td>$2,742,162</td></tr>
<tr><td>Pro Remaining Season Days</td><td>169</td></tr>
<tr><td>Pro Expenses Per Days</td><td>$359,628</td></tr>
<tr><td>Pro Estimated Expenses</td><td>$60,777,132</td></tr>
<tr><td>Farm Remaining Season Days</td><td>169</td></tr>
<tr><td>Farm Expenses Per Days</td><td>$7,875</td></tr>
<tr><td>Farm Estimated Expenses</td><td>$1,330,875</td></tr>
<tr><td>Estimated Season Expenses</td><td>$62,108,007</td></tr>
<tr><td>Estimated Season Salary Cap</td><td>$65,135,822</td></tr>
<tr><td>Estimate Under Maximum Salary Cap of $81,500,000</td><td>$16,364,178</td></tr>
<tr><td>Estimate Over Minimum Salary Cap of $58,800,000 </td><td>$6,335,822</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>$153,028,532</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>$178,065,801</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Patrick Kane</td>
<td>$10,500,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$9,540,323</td></tr>
<tr><td>Mikko Koivu</td>
<td>$7,750,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$7,041,667</td></tr>
<tr><td>Hampus Lindholm</td>
<td>$6,000,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$5,451,613</td></tr>
<tr><td>J.T. Miller</td>
<td>$5,750,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$5,224,462</td></tr>
<tr><td>Jake Allen</td>
<td>$5,250,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$4,770,161</td></tr>
<tr><td>Brett Pesce</td>
<td>$4,250,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$3,861,559</td></tr>
<tr><td>Braydon Coburn</td>
<td>$3,800,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$3,452,688</td></tr>
<tr><td>Will Butcher</td>
<td>$3,775,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$3,429,973</td></tr>
<tr><td>Michael Frolik</td>
<td>$3,250,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$2,952,957</td></tr>
<tr><td>Anders Nilsson</td>
<td>$2,750,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$2,498,656</td></tr>
<tr><td>Brandon Manning</td>
<td>$2,250,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$2,044,355</td></tr>
<tr><td>Tobias Rieder</td>
<td>$2,000,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$1,817,204</td></tr>
<tr><td>Tomas Nosek</td>
<td>$1,250,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$1,135,753</td></tr>
<tr><td>Travis Boyd</td>
<td>$925,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$840,457</td></tr>
<tr><td>Josh Archibald</td>
<td>$925,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$840,457</td></tr>
<tr><td>Chris Mueller</td>
<td>$900,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$817,742</td></tr>
<tr><td>Brock McGinn</td>
<td>$894,167 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$812,442</td></tr>
<tr><td>Brandon Carlo (Out of Payroll)</td>
<td>$894,167 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$812,442</td></tr>
<tr><td>Jonas Siegenthaler</td>
<td>$888,333 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$807,141</td></tr>
<tr><td>Kevin Rooney</td>
<td>$850,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$772,312</td></tr>
<tr><td>Blake Pietila</td>
<td>$750,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$681,452</td></tr>
<tr><td>Lucas Wallmark</td>
<td>$683,333 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$620,878</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>22</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $66,285,000</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $52,863,333</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $11,888,333</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $4,250,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $66,285,000</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $52,863,333</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $11,888,333</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $4,250,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $66,285,000</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $52,863,333</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $11,888,333</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $4,250,000</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Mike Vecchione</td>
<td>$100,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$90,860</td></tr>
<tr><td>Joseph Cramarossa</td>
<td>$95,200 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$86,499</td></tr>
<tr><td>Adam Clendening</td>
<td>$90,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$81,774</td></tr>
<tr><td>Cameron Gaunce</td>
<td>$84,583 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$76,853</td></tr>
<tr><td>Keegan Lowe</td>
<td>$75,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$68,145</td></tr>
<tr><td>Kurtis Gabriel</td>
<td>$75,000 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$68,145</td></tr>
<tr><td>Kevin Czuczman</td>
<td>$70,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$63,602</td></tr>
<tr><td>Mark Alt</td>
<td>$70,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$63,602</td></tr>
<tr><td>Chris Driedger</td>
<td>$70,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$63,602</td></tr>
<tr><td>Julian Melchiori</td>
<td>$70,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$63,602</td></tr>
<tr><td>Mike Sgarbossa</td>
<td>$65,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$59,059</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>11</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $864,783</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $344,783</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $75,000</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $0</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $864,783</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $344,783</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $75,000</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $0</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="TeamFinancePro_CHI"><a id="Blackhawks">Blackhawks</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=7">Blackhawks Page</a> ]
[ <a href="OTHL-ProTeamRoster.php#Blackhawks">Pro Team Roster</a> ]
[ <a href="OTHL-ProTeamScoring.php#Blackhawks">Pro Team Scoring</a> ]
[ <a href="OTHL-TeamFinance.php#Blackhawks">Team Finance</a> ]
[ <a href="OTHL-ProTeamPlayersInfo.php#Blackhawks">Pro Team PlayersInfo</a> ]
[ <a href="OTHL-ProTeamLines.php#Blackhawks">Pro Team Lines</a> ]
[ <a href="OTHL-TeamProspects.php#Blackhawks">Team Prospects</a> ]
[ <a href="OTHL-ProTeamSchedule.php#Blackhawks">Pro Team Schedule</a> ]
[ <a href="OTHL-ProTeamStats.php#Blackhawks">Pro Team Stats</a> ]
[ <a href="OTHL-ProTeamStatsVS.php#Blackhawks">Pro Team Stats VS</a> ]
[ <a href="OTHL-TeamInjurySuspension.php#Blackhawks">Team Injury Suspension</a> ]
[ <a href="OTHL-TeamHistory.php#Blackhawks">Team History</a> ]
[ <a href="OTHL-TeamRecords.php#Blackhawks">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Blackhawks');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Blackhawks" style="display: block;">
<br /><br /><table class="STHSTableFullW"><tr><td style="vertical-align: top;width:440px;">
<table class="STHSFinance_TeamTable">
<tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_AreanaCapacity">Arena Capacity - Ticket Price<br />Attendance - %</h3></td></tr>
<tr><td class="STHSW250">Arena Name</td><td class="STHSW200">United Center</td></tr>
<tr><td>Level 1: </td><td>6000 - $125 - 5,741 - 95.68%</td></tr>
<tr><td>Level 2: </td><td>5000 - $100 - 4,922 - 98.45%</td></tr>
<tr><td>Level 3: </td><td>4000 - $75 - 3,893 - 97.33%</td></tr>
<tr><td>Level 4: </td><td>3000 - $60 - 2,951 - 98.35%</td></tr>
<tr><td>Luxury : </td><td>1000 - $250 - 981 - 98.10%</td></tr>
<tr><td>Total Capacity :</td><td>19000</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Farm Level 1: </td><td>2000 - $35 - 1,438 - 71.89%</td></tr>
<tr><td>Farm Level 2: </td><td>1000 - $0 - 741 - 74.08%</td></tr>
<tr><td>Farm Total Capacity :</td><td>3000</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Income">Income</h3></td></tr>
<tr><td>Home Games Left</td><td>37</td></tr>
<tr><td>Average Attendance - %</td><td>18,487 - 97.30%</td></tr>
<tr><td>Average Income per Game</td><td>$1,924,043</td></tr>
<tr><td>Year to Date Revenue</td><td>$7,696,170</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Home Games Left</td><td>37</td></tr>
<tr><td>Average Attendance - %</td><td>2,179 - 72.62%</td></tr>
<tr><td>Average Income per Game</td><td>$50,321</td></tr>
<tr><td>Year to Date Revenue</td><td>$201,285</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>$80,312,500</td></tr>
<tr><td>Farm Players Total Salaries</td><td>$1,196,833</td></tr>
<tr><td>Coaches Total Salaries</td><td>$3,840,000</td></tr>
<tr><td>Luxury Taxe Total</td><td>$0</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>$7,404,530</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>$228,531</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>$7,176,034</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>$0</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Pro Estimated Season Revenue</td><td>$71,189,572</td></tr>
<tr><td>Farm Estimated Season Revenue</td><td>$1,861,886</td></tr>
<tr><td>Pro Remaining Season Days</td><td>169</td></tr>
<tr><td>Pro Expenses Per Days</td><td>$445,228</td></tr>
<tr><td>Pro Estimated Expenses</td><td>$75,243,532</td></tr>
<tr><td>Farm Remaining Season Days</td><td>169</td></tr>
<tr><td>Farm Expenses Per Days</td><td>$13,639</td></tr>
<tr><td>Farm Estimated Expenses</td><td>$2,304,991</td></tr>
<tr><td>Estimated Season Expenses</td><td>$77,548,523</td></tr>
<tr><td>Estimated Season Salary Cap</td><td>$80,148,206</td></tr>
<tr><td>Estimate Under Maximum Salary Cap of $81,500,000</td><td>$1,351,794</td></tr>
<tr><td>Estimate Over Minimum Salary Cap of $58,800,000 </td><td>$21,348,206</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>$53,406,193</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>$48,909,128</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Evgeni Malkin</td>
<td>$12,000,000 (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$10,903,226</td></tr>
<tr><td>Corey Crawford</td>
<td>$6,850,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$6,223,925</td></tr>
<tr><td>Tyler Johnson</td>
<td>$6,500,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$5,905,914</td></tr>
<tr><td>Jason Zucker</td>
<td>$5,500,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$4,997,312</td></tr>
<tr><td>Justin Faulk</td>
<td>$5,000,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$4,543,011</td></tr>
<tr><td>Andrew MacDonald</td>
<td>$5,000,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$4,543,011</td></tr>
<tr><td>Alexander Wennberg</td>
<td>$5,000,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$4,543,011</td></tr>
<tr><td>Carl Hagelin</td>
<td>$4,750,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$4,315,860</td></tr>
<tr><td>Shayne Gostisbehere</td>
<td>$4,500,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$4,088,710</td></tr>
<tr><td>Jimmy Howard</td>
<td>$4,200,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$3,816,129</td></tr>
<tr><td>Vladislav Namestnikov</td>
<td>$4,000,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$3,634,409</td></tr>
<tr><td>Matt Calvert</td>
<td>$3,250,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$2,952,957</td></tr>
<tr><td>Brian Boyle</td>
<td>$3,000,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$2,725,806</td></tr>
<tr><td>Zach Werenski</td>
<td>$1,775,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$1,612,769</td></tr>
<tr><td>Sebastian Aho</td>
<td>$1,775,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$1,612,769</td></tr>
<tr><td>Jordan Oesterle</td>
<td>$1,750,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$1,590,054</td></tr>
<tr><td>Anthony DeAngelo</td>
<td>$1,363,333 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$1,238,727</td></tr>
<tr><td>David Kampf</td>
<td>$925,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$840,457</td></tr>
<tr><td>Adam Erne</td>
<td>$874,167 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$794,270</td></tr>
<tr><td>Zac Dalpe</td>
<td>$850,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$772,312</td></tr>
<tr><td>Dominik Simon</td>
<td>$750,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$681,452</td></tr>
<tr><td>Cameron Schilling</td>
<td>$700,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$636,022</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>22</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $80,312,500</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $48,638,333</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $24,250,000</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $22,500,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $80,312,500</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $48,638,333</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $24,250,000</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $22,500,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $80,312,500</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $48,638,333</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $24,250,000</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $22,500,000</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Logan Brown</td>
<td>$157,333 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$142,953</td></tr>
<tr><td>Joshua Ho-Sang</td>
<td>$107,583 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$97,750</td></tr>
<tr><td>Griffen Molino</td>
<td>$100,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$90,860</td></tr>
<tr><td>Austin Czarnik</td>
<td>$97,500 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$88,589</td></tr>
<tr><td>Justin Holl</td>
<td>$92,500 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$84,046</td></tr>
<tr><td>Max Veronneau</td>
<td>$92,500 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$84,046</td></tr>
<tr><td>Kiefer Sherwood</td>
<td>$92,500 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$84,046</td></tr>
<tr><td>Peter Cehlarik</td>
<td>$92,500 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$84,046</td></tr>
<tr><td>Valentin Zykov</td>
<td>$89,417 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$81,244</td></tr>
<tr><td>Matt Tennyson</td>
<td>$75,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$68,145</td></tr>
<tr><td>Al Montoya</td>
<td>$67,500 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$61,331</td></tr>
<tr><td>Matt Bartkowski</td>
<td>$67,500 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$61,331</td></tr>
<tr><td>Joseph Blandisi</td>
<td>$65,000 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$59,059</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>13</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $1,196,833</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $734,833</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $222,333</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $0</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $1,196,833</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $734,833</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $222,333</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $0</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="TeamFinancePro_CLB"><a id="BlueJackets">Blue Jackets</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=9">Blue Jackets Page</a> ]
[ <a href="OTHL-ProTeamRoster.php#BlueJackets">Pro Team Roster</a> ]
[ <a href="OTHL-ProTeamScoring.php#BlueJackets">Pro Team Scoring</a> ]
[ <a href="OTHL-TeamFinance.php#BlueJackets">Team Finance</a> ]
[ <a href="OTHL-ProTeamPlayersInfo.php#BlueJackets">Pro Team PlayersInfo</a> ]
[ <a href="OTHL-ProTeamLines.php#BlueJackets">Pro Team Lines</a> ]
[ <a href="OTHL-TeamProspects.php#BlueJackets">Team Prospects</a> ]
[ <a href="OTHL-ProTeamSchedule.php#BlueJackets">Pro Team Schedule</a> ]
[ <a href="OTHL-ProTeamStats.php#BlueJackets">Pro Team Stats</a> ]
[ <a href="OTHL-ProTeamStatsVS.php#BlueJackets">Pro Team Stats VS</a> ]
[ <a href="OTHL-TeamInjurySuspension.php#BlueJackets">Team Injury Suspension</a> ]
[ <a href="OTHL-TeamHistory.php#BlueJackets">Team History</a> ]
[ <a href="OTHL-TeamRecords.php#BlueJackets">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_BlueJackets');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_BlueJackets" style="display: block;">
<br /><br /><table class="STHSTableFullW"><tr><td style="vertical-align: top;width:440px;">
<table class="STHSFinance_TeamTable">
<tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_AreanaCapacity">Arena Capacity - Ticket Price<br />Attendance - %</h3></td></tr>
<tr><td class="STHSW250">Arena Name</td><td class="STHSW200">Nationwide Arena</td></tr>
<tr><td>Level 1: </td><td>6000 - $225 - 3,864 - 64.39%</td></tr>
<tr><td>Level 2: </td><td>5000 - $165 - 3,091 - 61.83%</td></tr>
<tr><td>Level 3: </td><td>4000 - $135 - 2,343 - 58.57%</td></tr>
<tr><td>Level 4: </td><td>3000 - $100 - 1,804 - 60.13%</td></tr>
<tr><td>Luxury : </td><td>1000 - $300 - 697 - 69.73%</td></tr>
<tr><td>Total Capacity :</td><td>19000</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Farm Level 1: </td><td>2000 - $100 - 1,541 - 77.04%</td></tr>
<tr><td>Farm Level 2: </td><td>1000 - $0 - 742 - 74.20%</td></tr>
<tr><td>Farm Total Capacity :</td><td>3000</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Income">Income</h3></td></tr>
<tr><td>Home Games Left</td><td>37</td></tr>
<tr><td>Average Attendance - %</td><td>11,799 - 62.10%</td></tr>
<tr><td>Average Income per Game</td><td>$2,085,190</td></tr>
<tr><td>Year to Date Revenue</td><td>$8,340,760</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Home Games Left</td><td>37</td></tr>
<tr><td>Average Attendance - %</td><td>2,283 - 76.09%</td></tr>
<tr><td>Average Income per Game</td><td>$154,075</td></tr>
<tr><td>Year to Date Revenue</td><td>$616,300</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>$67,931,667</td></tr>
<tr><td>Farm Players Total Salaries</td><td>$2,038,916</td></tr>
<tr><td>Coaches Total Salaries</td><td>$2,900,000</td></tr>
<tr><td>Luxury Taxe Total</td><td>$0</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>$6,423,867</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>$268,617</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>$6,241,066</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>$0</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Pro Estimated Season Revenue</td><td>$77,152,030</td></tr>
<tr><td>Farm Estimated Season Revenue</td><td>$5,700,775</td></tr>
<tr><td>Pro Remaining Season Days</td><td>169</td></tr>
<tr><td>Pro Expenses Per Days</td><td>$375,977</td></tr>
<tr><td>Pro Estimated Expenses</td><td>$63,540,113</td></tr>
<tr><td>Farm Remaining Season Days</td><td>169</td></tr>
<tr><td>Farm Expenses Per Days</td><td>$15,801</td></tr>
<tr><td>Farm Estimated Expenses</td><td>$2,670,369</td></tr>
<tr><td>Estimated Season Expenses</td><td>$66,210,482</td></tr>
<tr><td>Estimated Season Salary Cap</td><td>$67,963,922</td></tr>
<tr><td>Estimate Under Maximum Salary Cap of $81,500,000</td><td>$13,536,078</td></tr>
<tr><td>Estimate Over Minimum Salary Cap of $58,800,000 </td><td>$9,163,922</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>$25,160,591</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>$41,802,914</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Kyle Okposo</td>
<td>$7,500,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$6,814,516</td></tr>
<tr><td>Evander Kane</td>
<td>$7,000,000 (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$6,360,215</td></tr>
<tr><td>Bo Horvat</td>
<td>$5,500,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$4,997,312</td></tr>
<tr><td>Anton Stralman</td>
<td>$5,500,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$4,997,312</td></tr>
<tr><td>Mats Zuccarello</td>
<td>$5,000,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$4,543,011</td></tr>
<tr><td>Danny DeKeyser</td>
<td>$5,000,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$4,543,011</td></tr>
<tr><td>Jason Demers</td>
<td>$4,500,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$4,088,710</td></tr>
<tr><td>Jacob Markstrom</td>
<td>$4,000,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$3,634,409</td></tr>
<tr><td>Ian Cole</td>
<td>$4,000,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$3,634,409</td></tr>
<tr><td>Elias Pettersson</td>
<td>$3,775,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$3,429,973</td></tr>
<tr><td>Sven Baertschi</td>
<td>$3,400,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$3,089,247</td></tr>
<tr><td>Troy Stecher (Out of Payroll)</td>
<td>$3,000,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$2,725,806</td></tr>
<tr><td>Mark Pysyk</td>
<td>$2,700,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$2,453,226</td></tr>
<tr><td>Thomas Vanek</td>
<td>$2,000,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$1,817,204</td></tr>
<tr><td>Jake Virtanen</td>
<td>$1,250,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$1,135,753</td></tr>
<tr><td>Alex Stalock</td>
<td>$1,250,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$1,135,753</td></tr>
<tr><td>Alexander Kerfoot</td>
<td>$1,137,500 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$1,033,535</td></tr>
<tr><td>Sam Steel</td>
<td>$925,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$840,457</td></tr>
<tr><td>Zach Sanford</td>
<td>$925,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$840,457</td></tr>
<tr><td>Vinnie Hinostroza</td>
<td>$925,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$840,457</td></tr>
<tr><td>Robert Hagg</td>
<td>$894,167 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$812,442</td></tr>
<tr><td>Alex Lyon</td>
<td>$750,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$681,452</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>22</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $70,931,667</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $55,906,667</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $38,200,000</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $20,000,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $70,931,667</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $55,906,667</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $38,200,000</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $20,000,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $70,931,667</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $55,906,667</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $38,200,000</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $20,000,000</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Dion Phaneuf</td>
<td>$550,000 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$499,731</td></tr>
<tr><td>Frederick Gaudreau</td>
<td>$150,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$136,290</td></tr>
<tr><td>Hunter Shinkaruk</td>
<td>$107,583 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$97,750</td></tr>
<tr><td>T.J. Tynan</td>
<td>$92,500 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$84,046</td></tr>
<tr><td>Sami Niku</td>
<td>$91,667 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$83,288</td></tr>
<tr><td>Giovanni Fiore</td>
<td>$90,000 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$81,774</td></tr>
<tr><td>Ashton Sautner</td>
<td>$90,000 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$81,774</td></tr>
<tr><td>Cory Conacher</td>
<td>$85,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$77,231</td></tr>
<tr><td>Evan McEneny</td>
<td>$80,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$72,688</td></tr>
<tr><td>Anthony Greco</td>
<td>$75,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$68,145</td></tr>
<tr><td>Patrick Russell</td>
<td>$75,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$68,145</td></tr>
<tr><td>Phillip Di Giuseppe</td>
<td>$70,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$63,602</td></tr>
<tr><td>Jack Rodewald</td>
<td>$70,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$63,602</td></tr>
<tr><td>Josh Brown</td>
<td>$70,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$63,602</td></tr>
<tr><td>Brad Thiessen</td>
<td>$70,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$63,602</td></tr>
<tr><td>Tommy Cross</td>
<td>$70,000 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$63,602</td></tr>
<tr><td>Denis Malgin</td>
<td>$69,333 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$62,996</td></tr>
<tr><td>Philippe Myers</td>
<td>$67,833 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$61,633</td></tr>
<tr><td>Adam Wilcox</td>
<td>$65,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$59,059</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>19</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $2,038,916</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $1,394,500</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $891,667</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $0</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $2,038,916</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $1,394,500</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $891,667</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $0</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="TeamFinancePro_STL"><a id="Blues">Blues</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=25">Blues Page</a> ]
[ <a href="OTHL-ProTeamRoster.php#Blues">Pro Team Roster</a> ]
[ <a href="OTHL-ProTeamScoring.php#Blues">Pro Team Scoring</a> ]
[ <a href="OTHL-TeamFinance.php#Blues">Team Finance</a> ]
[ <a href="OTHL-ProTeamPlayersInfo.php#Blues">Pro Team PlayersInfo</a> ]
[ <a href="OTHL-ProTeamLines.php#Blues">Pro Team Lines</a> ]
[ <a href="OTHL-TeamProspects.php#Blues">Team Prospects</a> ]
[ <a href="OTHL-ProTeamSchedule.php#Blues">Pro Team Schedule</a> ]
[ <a href="OTHL-ProTeamStats.php#Blues">Pro Team Stats</a> ]
[ <a href="OTHL-ProTeamStatsVS.php#Blues">Pro Team Stats VS</a> ]
[ <a href="OTHL-TeamInjurySuspension.php#Blues">Team Injury Suspension</a> ]
[ <a href="OTHL-TeamHistory.php#Blues">Team History</a> ]
[ <a href="OTHL-TeamRecords.php#Blues">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Blues');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Blues" style="display: block;">
<br /><br /><table class="STHSTableFullW"><tr><td style="vertical-align: top;width:440px;">
<table class="STHSFinance_TeamTable">
<tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_AreanaCapacity">Arena Capacity - Ticket Price<br />Attendance - %</h3></td></tr>
<tr><td class="STHSW250">Arena Name</td><td class="STHSW200">Scottrade Center</td></tr>
<tr><td>Level 1: </td><td>6000 - $174 - 5,549 - 92.48%</td></tr>
<tr><td>Level 2: </td><td>5000 - $124 - 4,718 - 94.36%</td></tr>
<tr><td>Level 3: </td><td>4000 - $109 - 3,001 - 75.02%</td></tr>
<tr><td>Level 4: </td><td>3000 - $75 - 2,945 - 98.16%</td></tr>
<tr><td>Luxury : </td><td>1000 - $300 - 686 - 68.63%</td></tr>
<tr><td>Total Capacity :</td><td>19000</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Farm Level 1: </td><td>2000 - $100 - 1,491 - 74.55%</td></tr>
<tr><td>Farm Level 2: </td><td>1000 - $0 - 722 - 72.17%</td></tr>
<tr><td>Farm Total Capacity :</td><td>3000</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Income">Income</h3></td></tr>
<tr><td>Home Games Left</td><td>38</td></tr>
<tr><td>Average Attendance - %</td><td>16,898 - 88.94%</td></tr>
<tr><td>Average Income per Game</td><td>$2,304,323</td></tr>
<tr><td>Year to Date Revenue</td><td>$6,912,968</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Home Games Left</td><td>38</td></tr>
<tr><td>Average Attendance - %</td><td>2,213 - 73.76%</td></tr>
<tr><td>Average Income per Game</td><td>$149,100</td></tr>
<tr><td>Year to Date Revenue</td><td>$447,300</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>$60,558,333</td></tr>
<tr><td>Farm Players Total Salaries</td><td>$906,500</td></tr>
<tr><td>Coaches Total Salaries</td><td>$3,300,000</td></tr>
<tr><td>Luxury Taxe Total</td><td>$0</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>$5,588,126</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>$182,605</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>$5,359,633</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>$0</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Pro Estimated Season Revenue</td><td>$87,564,261</td></tr>
<tr><td>Farm Estimated Season Revenue</td><td>$5,665,800</td></tr>
<tr><td>Pro Remaining Season Days</td><td>169</td></tr>
<tr><td>Pro Expenses Per Days</td><td>$339,023</td></tr>
<tr><td>Pro Estimated Expenses</td><td>$57,294,887</td></tr>
<tr><td>Farm Remaining Season Days</td><td>169</td></tr>
<tr><td>Farm Expenses Per Days</td><td>$9,175</td></tr>
<tr><td>Farm Estimated Expenses</td><td>$1,550,575</td></tr>
<tr><td>Estimated Season Expenses</td><td>$58,845,462</td></tr>
<tr><td>Estimated Season Salary Cap</td><td>$60,382,991</td></tr>
<tr><td>Estimate Under Maximum Salary Cap of $81,500,000</td><td>$21,117,009</td></tr>
<tr><td>Estimate Over Minimum Salary Cap of $58,800,000 </td><td>$1,582,991</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>$94,554,805</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>$128,939,404</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Jonathan Quick</td>
<td>$7,250,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$6,587,366</td></tr>
<tr><td>Jason Pominville</td>
<td>$6,250,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$5,678,763</td></tr>
<tr><td>Andrew Ladd</td>
<td>$6,000,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$5,451,613</td></tr>
<tr><td>Jonathan Drouin</td>
<td>$5,500,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$4,997,312</td></tr>
<tr><td>David Savard</td>
<td>$4,750,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$4,315,860</td></tr>
<tr><td>Tyler Ennis</td>
<td>$4,600,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$4,179,570</td></tr>
<tr><td>Brendan Smith</td>
<td>$4,250,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$3,861,559</td></tr>
<tr><td>Ryan Callahan</td>
<td>$4,000,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$3,634,409</td></tr>
<tr><td>Antoine Roussel (Out of Payroll)</td>
<td>$3,250,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$2,952,957</td></tr>
<tr><td>Devante Smith-Pelly</td>
<td>$2,000,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$1,817,204</td></tr>
<tr><td>Carter Rowney (Out of Payroll)</td>
<td>$2,000,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$1,817,204</td></tr>
<tr><td>Louis Domingue</td>
<td>$2,000,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$1,817,204</td></tr>
<tr><td>Cedric Paquette</td>
<td>$1,660,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$1,508,280</td></tr>
<tr><td>Gabriel Bourque</td>
<td>$1,400,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$1,272,043</td></tr>
<tr><td>Brendan Perlini</td>
<td>$1,363,333 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$1,238,727</td></tr>
<tr><td>Jakub Vrana</td>
<td>$1,363,333 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$1,238,727</td></tr>
<tr><td>Jakob Chychrun</td>
<td>$1,350,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$1,226,613</td></tr>
<tr><td>Steve Bernier</td>
<td>$1,250,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$1,135,753</td></tr>
<tr><td>Anthony Beauvillier</td>
<td>$1,106,667 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$1,005,520</td></tr>
<tr><td>Dalton Prout</td>
<td>$1,000,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$908,602</td></tr>
<tr><td>Nick Seeler</td>
<td>$925,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$840,457</td></tr>
<tr><td>Alex Biega (Out of Payroll)</td>
<td>$900,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$817,742</td></tr>
<tr><td>Victor Mete</td>
<td>$870,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$790,484</td></tr>
<tr><td>Mirco Mueller</td>
<td>$850,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$772,312</td></tr>
<tr><td>Tanner Kero</td>
<td>$820,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$745,054</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>25</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $66,708,333</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $48,218,333</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $21,160,000</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $12,410,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $66,708,333</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $48,218,333</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $21,160,000</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $12,410,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $66,708,333</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $48,218,333</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $21,160,000</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $12,410,000</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Andrew Hammond</td>
<td>$275,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$249,866</td></tr>
<tr><td>Brendan Lemieux</td>
<td>$103,917 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$94,419</td></tr>
<tr><td>Scott Darling</td>
<td>$100,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$90,860</td></tr>
<tr><td>Marko Dano</td>
<td>$92,500 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$84,046</td></tr>
<tr><td>Josh Currie</td>
<td>$90,000 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$81,774</td></tr>
<tr><td>Joseph Gambardella</td>
<td>$90,000 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$81,774</td></tr>
<tr><td>Luke Gazdic</td>
<td>$82,500 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$74,960</td></tr>
<tr><td>Samuel Blais</td>
<td>$72,583 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$65,949</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>8</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $906,500</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $731,500</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $180,000</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $0</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $906,500</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $731,500</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $180,000</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $0</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="TeamFinancePro_BOS"><a id="Bruins">Bruins</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=3">Bruins Page</a> ]
[ <a href="OTHL-ProTeamRoster.php#Bruins">Pro Team Roster</a> ]
[ <a href="OTHL-ProTeamScoring.php#Bruins">Pro Team Scoring</a> ]
[ <a href="OTHL-TeamFinance.php#Bruins">Team Finance</a> ]
[ <a href="OTHL-ProTeamPlayersInfo.php#Bruins">Pro Team PlayersInfo</a> ]
[ <a href="OTHL-ProTeamLines.php#Bruins">Pro Team Lines</a> ]
[ <a href="OTHL-TeamProspects.php#Bruins">Team Prospects</a> ]
[ <a href="OTHL-ProTeamSchedule.php#Bruins">Pro Team Schedule</a> ]
[ <a href="OTHL-ProTeamStats.php#Bruins">Pro Team Stats</a> ]
[ <a href="OTHL-ProTeamStatsVS.php#Bruins">Pro Team Stats VS</a> ]
[ <a href="OTHL-TeamInjurySuspension.php#Bruins">Team Injury Suspension</a> ]
[ <a href="OTHL-TeamHistory.php#Bruins">Team History</a> ]
[ <a href="OTHL-TeamRecords.php#Bruins">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Bruins');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Bruins" style="display: block;">
<br /><br /><table class="STHSTableFullW"><tr><td style="vertical-align: top;width:440px;">
<table class="STHSFinance_TeamTable">
<tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_AreanaCapacity">Arena Capacity - Ticket Price<br />Attendance - %</h3></td></tr>
<tr><td class="STHSW250">Arena Name</td><td class="STHSW200">TD Banknorth Garden</td></tr>
<tr><td>Level 1: </td><td>6000 - $165 - 5,744 - 95.74%</td></tr>
<tr><td>Level 2: </td><td>5000 - $115 - 4,722 - 94.45%</td></tr>
<tr><td>Level 3: </td><td>4000 - $90 - 3,867 - 96.68%</td></tr>
<tr><td>Level 4: </td><td>3000 - $65 - 2,954 - 98.48%</td></tr>
<tr><td>Luxury : </td><td>1000 - $255 - 921 - 92.10%</td></tr>
<tr><td>Total Capacity :</td><td>19000</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Farm Level 1: </td><td>2000 - $100 - 1,520 - 75.98%</td></tr>
<tr><td>Farm Level 2: </td><td>1000 - $0 - 720 - 72.03%</td></tr>
<tr><td>Farm Total Capacity :</td><td>3000</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Income">Income</h3></td></tr>
<tr><td>Home Games Left</td><td>38</td></tr>
<tr><td>Average Attendance - %</td><td>18,209 - 95.84%</td></tr>
<tr><td>Average Income per Game</td><td>$2,265,800</td></tr>
<tr><td>Year to Date Revenue</td><td>$6,797,400</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Home Games Left</td><td>38</td></tr>
<tr><td>Average Attendance - %</td><td>2,240 - 74.67%</td></tr>
<tr><td>Average Income per Game</td><td>$151,967</td></tr>
<tr><td>Year to Date Revenue</td><td>$455,900</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>$75,882,083</td></tr>
<tr><td>Farm Players Total Salaries</td><td>$1,282,166</td></tr>
<tr><td>Coaches Total Salaries</td><td>$3,900,000</td></tr>
<tr><td>Luxury Taxe Total</td><td>$0</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>$7,603,591</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>$189,447</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>$7,311,114</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>$0</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Pro Estimated Season Revenue</td><td>$86,100,400</td></tr>
<tr><td>Farm Estimated Season Revenue</td><td>$5,774,733</td></tr>
<tr><td>Pro Remaining Season Days</td><td>169</td></tr>
<tr><td>Pro Expenses Per Days</td><td>$425,172</td></tr>
<tr><td>Pro Estimated Expenses</td><td>$71,854,068</td></tr>
<tr><td>Farm Remaining Season Days</td><td>169</td></tr>
<tr><td>Farm Expenses Per Days</td><td>$10,657</td></tr>
<tr><td>Farm Estimated Expenses</td><td>$1,801,033</td></tr>
<tr><td>Estimated Season Expenses</td><td>$73,655,101</td></tr>
<tr><td>Estimated Season Salary Cap</td><td>$76,257,706</td></tr>
<tr><td>Estimate Under Maximum Salary Cap of $81,500,000</td><td>$5,242,294</td></tr>
<tr><td>Estimate Over Minimum Salary Cap of $58,800,000 </td><td>$17,457,706</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>$33,999,053</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>$52,219,085</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Dustin Byfuglien</td>
<td>$9,000,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$8,177,419</td></tr>
<tr><td>Sean Couturier</td>
<td>$7,700,000 (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$6,996,237</td></tr>
<tr><td>Evgenii Dadonov (1 Way Contract)</td>
<td>$7,200,000 (6)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$6,541,935</td></tr>
<tr><td>Braden Holtby</td>
<td>$7,100,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$6,451,075</td></tr>
<tr><td>Brad Marchand</td>
<td>$7,000,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$6,360,215</td></tr>
<tr><td>Bryan Little</td>
<td>$5,500,000 (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$4,997,312</td></tr>
<tr><td>Brandon Saad (Out of Payroll)</td>
<td>$5,500,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$4,997,312</td></tr>
<tr><td>Justin Abdelkader (1 Way Contract)</td>
<td>$4,500,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$4,088,710</td></tr>
<tr><td>Erik Gudbranson</td>
<td>$4,500,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$4,088,710</td></tr>
<tr><td>Leo Komarov</td>
<td>$3,800,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$3,452,688</td></tr>
<tr><td>Ben Chiarot</td>
<td>$3,500,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$3,180,108</td></tr>
<tr><td>Zach Hyman</td>
<td>$3,000,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$2,725,806</td></tr>
<tr><td>Brayden McNabb</td>
<td>$2,800,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$2,544,086</td></tr>
<tr><td>Radek Faksa</td>
<td>$2,350,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$2,135,215</td></tr>
<tr><td>Tim Schaller</td>
<td>$1,900,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$1,726,344</td></tr>
<tr><td>Joonas Korpisalo</td>
<td>$1,150,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$1,044,892</td></tr>
<tr><td>Jaycob Megna</td>
<td>$1,000,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$908,602</td></tr>
<tr><td>Par Lindholm (Out of Payroll)</td>
<td>$925,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$840,457</td></tr>
<tr><td>Blake Coleman</td>
<td>$925,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$840,457</td></tr>
<tr><td>Matt Roy</td>
<td>$833,750 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$757,547</td></tr>
<tr><td>Ben Harpur</td>
<td>$773,333 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$702,652</td></tr>
<tr><td>Barclay Goodrow</td>
<td>$700,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$636,022</td></tr>
<tr><td>Trevor Moore</td>
<td>$650,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$590,591</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>23</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $82,307,083</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $54,100,000</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $35,700,000</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $20,400,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $82,307,083</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $54,100,000</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $35,700,000</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $20,400,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $82,307,083</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $54,100,000</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $35,700,000</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $20,400,000</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Luca Sbisa</td>
<td>$360,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$327,097</td></tr>
<tr><td>Gustav Olofsson</td>
<td>$120,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$109,032</td></tr>
<tr><td>Kole Sherwood</td>
<td>$100,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$90,860</td></tr>
<tr><td>Colton White</td>
<td>$93,583 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$85,030</td></tr>
<tr><td>Adin Hill</td>
<td>$92,500 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$84,046</td></tr>
<tr><td>Madison Bowey</td>
<td>$90,250 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$82,001</td></tr>
<tr><td>Chris Bigras</td>
<td>$90,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$81,774</td></tr>
<tr><td>Karson Kuhlman</td>
<td>$75,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$68,145</td></tr>
<tr><td>Nathan Walker</td>
<td>$68,333 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$62,088</td></tr>
<tr><td>Justin Auger</td>
<td>$65,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$59,059</td></tr>
<tr><td>Jake Dotchin</td>
<td>$65,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$59,059</td></tr>
<tr><td>Radim Simek</td>
<td>$62,500 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$56,788</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>12</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $1,282,166</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $423,583</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $93,583</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $0</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $1,272,166</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $423,583</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $93,583</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $0</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="TeamFinancePro_MTL"><a id="Canadiens">Canadiens</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=16">Canadiens Page</a> ]
[ <a href="OTHL-ProTeamRoster.php#Canadiens">Pro Team Roster</a> ]
[ <a href="OTHL-ProTeamScoring.php#Canadiens">Pro Team Scoring</a> ]
[ <a href="OTHL-TeamFinance.php#Canadiens">Team Finance</a> ]
[ <a href="OTHL-ProTeamPlayersInfo.php#Canadiens">Pro Team PlayersInfo</a> ]
[ <a href="OTHL-ProTeamLines.php#Canadiens">Pro Team Lines</a> ]
[ <a href="OTHL-TeamProspects.php#Canadiens">Team Prospects</a> ]
[ <a href="OTHL-ProTeamSchedule.php#Canadiens">Pro Team Schedule</a> ]
[ <a href="OTHL-ProTeamStats.php#Canadiens">Pro Team Stats</a> ]
[ <a href="OTHL-ProTeamStatsVS.php#Canadiens">Pro Team Stats VS</a> ]
[ <a href="OTHL-TeamInjurySuspension.php#Canadiens">Team Injury Suspension</a> ]
[ <a href="OTHL-TeamHistory.php#Canadiens">Team History</a> ]
[ <a href="OTHL-TeamRecords.php#Canadiens">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Canadiens');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Canadiens" style="display: block;">
<br /><br /><table class="STHSTableFullW"><tr><td style="vertical-align: top;width:440px;">
<table class="STHSFinance_TeamTable">
<tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_AreanaCapacity">Arena Capacity - Ticket Price<br />Attendance - %</h3></td></tr>
<tr><td class="STHSW250">Arena Name</td><td class="STHSW200">Bell Centre</td></tr>
<tr><td>Level 1: </td><td>6000 - $200 - 4,171 - 69.51%</td></tr>
<tr><td>Level 2: </td><td>5000 - $150 - 3,470 - 69.40%</td></tr>
<tr><td>Level 3: </td><td>4000 - $125 - 2,666 - 66.66%</td></tr>
<tr><td>Level 4: </td><td>3000 - $105 - 1,670 - 55.65%</td></tr>
<tr><td>Luxury : </td><td>1000 - $275 - 762 - 76.15%</td></tr>
<tr><td>Total Capacity :</td><td>19000</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Farm Level 1: </td><td>2000 - $75 - 1,474 - 73.71%</td></tr>
<tr><td>Farm Level 2: </td><td>1000 - $0 - 736 - 73.55%</td></tr>
<tr><td>Farm Total Capacity :</td><td>3000</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Income">Income</h3></td></tr>
<tr><td>Home Games Left</td><td>37</td></tr>
<tr><td>Average Attendance - %</td><td>12,738 - 67.04%</td></tr>
<tr><td>Average Income per Game</td><td>$2,072,604</td></tr>
<tr><td>Year to Date Revenue</td><td>$8,290,415</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Home Games Left</td><td>37</td></tr>
<tr><td>Average Attendance - %</td><td>2,210 - 73.66%</td></tr>
<tr><td>Average Income per Game</td><td>$110,569</td></tr>
<tr><td>Year to Date Revenue</td><td>$442,275</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>$78,893,333</td></tr>
<tr><td>Farm Players Total Salaries</td><td>$1,514,584</td></tr>
<tr><td>Coaches Total Salaries</td><td>$2,850,000</td></tr>
<tr><td>Luxury Taxe Total</td><td>$0</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>$7,393,470</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>$216,121</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>$7,210,686</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>$0</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Pro Estimated Season Revenue</td><td>$76,686,339</td></tr>
<tr><td>Farm Estimated Season Revenue</td><td>$4,091,044</td></tr>
<tr><td>Pro Remaining Season Days</td><td>169</td></tr>
<tr><td>Pro Expenses Per Days</td><td>$434,910</td></tr>
<tr><td>Pro Estimated Expenses</td><td>$73,499,790</td></tr>
<tr><td>Farm Remaining Season Days</td><td>169</td></tr>
<tr><td>Farm Expenses Per Days</td><td>$12,713</td></tr>
<tr><td>Farm Estimated Expenses</td><td>$2,148,497</td></tr>
<tr><td>Estimated Season Expenses</td><td>$75,648,287</td></tr>
<tr><td>Estimated Season Salary Cap</td><td>$78,893,388</td></tr>
<tr><td>Estimate Under Maximum Salary Cap of $81,500,000</td><td>$2,606,612</td></tr>
<tr><td>Estimate Over Minimum Salary Cap of $58,800,000 </td><td>$20,093,388</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>$74,073,385</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>$79,202,481</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Jeff Carter</td>
<td>$10,000,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$9,086,022</td></tr>
<tr><td>Marc-Edouard Vlasic</td>
<td>$8,000,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$7,268,817</td></tr>
<tr><td>Aaron Ekblad</td>
<td>$7,650,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$6,950,806</td></tr>
<tr><td>Mark Scheifele</td>
<td>$7,500,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$6,814,516</td></tr>
<tr><td>Artemi Panarin</td>
<td>$7,500,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$6,814,516</td></tr>
<tr><td>Nikolaj Ehlers</td>
<td>$6,000,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$5,451,613</td></tr>
<tr><td>Ben Bishop</td>
<td>$5,500,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$4,997,312</td></tr>
<tr><td>John Klingberg</td>
<td>$4,500,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$4,088,710</td></tr>
<tr><td>Connor Murphy</td>
<td>$3,850,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$3,498,118</td></tr>
<tr><td>Nikita Zadorov</td>
<td>$3,500,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$3,180,108</td></tr>
<tr><td>Valtteri Filppula</td>
<td>$3,000,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$2,725,806</td></tr>
<tr><td>Brandon Tanev</td>
<td>$2,000,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$1,817,204</td></tr>
<tr><td>Melker Karlsson</td>
<td>$2,000,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$1,817,204</td></tr>
<tr><td>Ivan Provorov</td>
<td>$1,774,167 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$1,612,012</td></tr>
<tr><td>Clayton Keller</td>
<td>$1,673,333 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$1,520,394</td></tr>
<tr><td>Daniel Sprong</td>
<td>$925,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$840,457</td></tr>
<tr><td>Cal O'Reilly</td>
<td>$900,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$817,742</td></tr>
<tr><td>Alex DeBrincat</td>
<td>$894,167 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$812,442</td></tr>
<tr><td>Carter Hart</td>
<td>$863,333 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$784,426</td></tr>
<tr><td>Anthony Mantha</td>
<td>$863,333 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$784,426</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>20</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $78,893,333</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $54,005,833</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $34,513,333</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $7,650,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $78,893,333</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $54,005,833</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $34,513,333</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $7,650,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $78,893,333</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $54,005,833</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $34,513,333</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $7,650,000</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Henrik Borgstrom</td>
<td>$149,167 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$135,533</td></tr>
<tr><td>Kalle Kossila</td>
<td>$100,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$90,860</td></tr>
<tr><td>Michael Kapla</td>
<td>$100,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$90,860</td></tr>
<tr><td>Adam Tambellini</td>
<td>$92,500 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$84,046</td></tr>
<tr><td>Jonny Brodzinski</td>
<td>$92,500 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$84,046</td></tr>
<tr><td>Alex Schoenborn</td>
<td>$92,500 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$84,046</td></tr>
<tr><td>Sheldon Rempal</td>
<td>$90,000 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$81,774</td></tr>
<tr><td>T.J. Brennan</td>
<td>$90,000 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$81,774</td></tr>
<tr><td>Jacob MacDonald</td>
<td>$90,000 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$81,774</td></tr>
<tr><td>Alex Nedeljkovic</td>
<td>$89,417 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$81,244</td></tr>
<tr><td>Ryan Lomberg</td>
<td>$85,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$77,231</td></tr>
<tr><td>Vladislav Kamenev</td>
<td>$83,333 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$75,717</td></tr>
<tr><td>Curtis McKenzie</td>
<td>$80,000 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$72,688</td></tr>
<tr><td>Chad Johnson</td>
<td>$75,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$68,145</td></tr>
<tr><td>Brian Lashoff</td>
<td>$75,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$68,145</td></tr>
<tr><td>Matt Luff</td>
<td>$67,667 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$61,482</td></tr>
<tr><td>Austen Brassard</td>
<td>$62,500 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$56,788</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>17</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $1,514,584</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $899,334</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $746,667</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $0</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $1,514,084</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $898,834</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $746,167</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $0</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="TeamFinancePro_VAN"><a id="Canucks">Canucks</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=29">Canucks Page</a> ]
[ <a href="OTHL-ProTeamRoster.php#Canucks">Pro Team Roster</a> ]
[ <a href="OTHL-ProTeamScoring.php#Canucks">Pro Team Scoring</a> ]
[ <a href="OTHL-TeamFinance.php#Canucks">Team Finance</a> ]
[ <a href="OTHL-ProTeamPlayersInfo.php#Canucks">Pro Team PlayersInfo</a> ]
[ <a href="OTHL-ProTeamLines.php#Canucks">Pro Team Lines</a> ]
[ <a href="OTHL-TeamProspects.php#Canucks">Team Prospects</a> ]
[ <a href="OTHL-ProTeamSchedule.php#Canucks">Pro Team Schedule</a> ]
[ <a href="OTHL-ProTeamStats.php#Canucks">Pro Team Stats</a> ]
[ <a href="OTHL-ProTeamStatsVS.php#Canucks">Pro Team Stats VS</a> ]
[ <a href="OTHL-TeamInjurySuspension.php#Canucks">Team Injury Suspension</a> ]
[ <a href="OTHL-TeamHistory.php#Canucks">Team History</a> ]
[ <a href="OTHL-TeamRecords.php#Canucks">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Canucks');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Canucks" style="display: block;">
<br /><br /><table class="STHSTableFullW"><tr><td style="vertical-align: top;width:440px;">
<table class="STHSFinance_TeamTable">
<tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_AreanaCapacity">Arena Capacity - Ticket Price<br />Attendance - %</h3></td></tr>
<tr><td class="STHSW250">Arena Name</td><td class="STHSW200">GM Place</td></tr>
<tr><td>Level 1: </td><td>6000 - $164 - 5,611 - 93.52%</td></tr>
<tr><td>Level 2: </td><td>5000 - $115 - 4,640 - 92.80%</td></tr>
<tr><td>Level 3: </td><td>4000 - $90 - 3,814 - 95.36%</td></tr>
<tr><td>Level 4: </td><td>3000 - $63 - 2,792 - 93.07%</td></tr>
<tr><td>Luxury : </td><td>1000 - $253 - 954 - 95.40%</td></tr>
<tr><td>Total Capacity :</td><td>19000</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Farm Level 1: </td><td>2000 - $100 - 1,557 - 77.87%</td></tr>
<tr><td>Farm Level 2: </td><td>1000 - $0 - 740 - 73.97%</td></tr>
<tr><td>Farm Total Capacity :</td><td>3000</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Income">Income</h3></td></tr>
<tr><td>Home Games Left</td><td>38</td></tr>
<tr><td>Average Attendance - %</td><td>17,812 - 93.75%</td></tr>
<tr><td>Average Income per Game</td><td>$2,214,407</td></tr>
<tr><td>Year to Date Revenue</td><td>$6,643,220</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Home Games Left</td><td>38</td></tr>
<tr><td>Average Attendance - %</td><td>2,297 - 76.57%</td></tr>
<tr><td>Average Income per Game</td><td>$155,733</td></tr>
<tr><td>Year to Date Revenue</td><td>$467,200</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>$73,746,667</td></tr>
<tr><td>Farm Players Total Salaries</td><td>$2,114,500</td></tr>
<tr><td>Coaches Total Salaries</td><td>$2,500,000</td></tr>
<tr><td>Luxury Taxe Total</td><td>$0</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>$6,742,439</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>$260,657</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>$6,582,490</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>$0</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Pro Estimated Season Revenue</td><td>$84,147,453</td></tr>
<tr><td>Farm Estimated Season Revenue</td><td>$5,917,867</td></tr>
<tr><td>Pro Remaining Season Days</td><td>169</td></tr>
<tr><td>Pro Expenses Per Days</td><td>$405,896</td></tr>
<tr><td>Pro Estimated Expenses</td><td>$68,596,424</td></tr>
<tr><td>Farm Remaining Season Days</td><td>169</td></tr>
<tr><td>Farm Expenses Per Days</td><td>$15,401</td></tr>
<tr><td>Farm Estimated Expenses</td><td>$2,602,769</td></tr>
<tr><td>Estimated Season Expenses</td><td>$71,199,193</td></tr>
<tr><td>Estimated Season Salary Cap</td><td>$73,588,793</td></tr>
<tr><td>Estimate Under Maximum Salary Cap of $81,500,000</td><td>$7,911,207</td></tr>
<tr><td>Estimate Over Minimum Salary Cap of $58,800,000 </td><td>$14,788,793</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>$114,671,844</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>$133,537,971</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Ryan Kesler</td>
<td>$7,200,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$6,541,935</td></tr>
<tr><td>Alex Steen</td>
<td>$6,500,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$5,905,914</td></tr>
<tr><td>Henrik Lundqvist</td>
<td>$6,250,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$5,678,763</td></tr>
<tr><td>Tyler Myers</td>
<td>$5,650,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$5,133,602</td></tr>
<tr><td>Jake Gardiner</td>
<td>$5,000,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$4,543,011</td></tr>
<tr><td>Gustav Nyquist</td>
<td>$4,750,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$4,315,860</td></tr>
<tr><td>Nikita Zaitsev</td>
<td>$4,500,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$4,088,710</td></tr>
<tr><td>Cory Schneider</td>
<td>$4,000,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$3,634,409</td></tr>
<tr><td>Auston Matthews</td>
<td>$3,775,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$3,429,973</td></tr>
<tr><td>Nico Hischier</td>
<td>$3,775,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$3,429,973</td></tr>
<tr><td>Cal Clutterbuck</td>
<td>$3,500,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$3,180,108</td></tr>
<tr><td>Zack Smith</td>
<td>$2,750,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$2,498,656</td></tr>
<tr><td>Nick Bonino</td>
<td>$2,500,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$2,271,505</td></tr>
<tr><td>Stephen Johns</td>
<td>$2,400,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$2,180,645</td></tr>
<tr><td>Scott Mayfield</td>
<td>$2,000,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$1,817,204</td></tr>
<tr><td>Kyle Connor</td>
<td>$1,775,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$1,612,769</td></tr>
<tr><td>Pavel Zacha</td>
<td>$1,744,167 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$1,584,754</td></tr>
<tr><td>Mikko Rantanen</td>
<td>$1,627,500 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$1,478,750</td></tr>
<tr><td>Matt Benning</td>
<td>$1,075,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$976,747</td></tr>
<tr><td>Jamie McGinn</td>
<td>$950,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$863,172</td></tr>
<tr><td>William Carrier</td>
<td>$700,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$636,022</td></tr>
<tr><td>Jean-Sebastien Dea</td>
<td>$700,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$636,022</td></tr>
<tr><td>Gavin Bayreuther</td>
<td>$625,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$567,876</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>23</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $73,746,667</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $49,500,000</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $12,900,000</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $6,500,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $73,746,667</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $49,500,000</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $12,900,000</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $6,500,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $73,746,667</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $49,500,000</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $12,900,000</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $6,500,000</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Valeri Nichushkin</td>
<td>$295,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$268,038</td></tr>
<tr><td>Haydn Fleury</td>
<td>$171,333 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$155,674</td></tr>
<tr><td>J.T. Brown</td>
<td>$125,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$113,575</td></tr>
<tr><td>Matt Irwin</td>
<td>$120,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$109,032</td></tr>
<tr><td>Tage Thompson</td>
<td>$113,750 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$103,353</td></tr>
<tr><td>Logan O'Connor</td>
<td>$95,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$86,317</td></tr>
<tr><td>Rudolfs Balcers</td>
<td>$92,500 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$84,046</td></tr>
<tr><td>Anton Blidh</td>
<td>$92,500 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$84,046</td></tr>
<tr><td>Chris Terry</td>
<td>$85,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$77,231</td></tr>
<tr><td>Brett Seney</td>
<td>$82,500 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$74,960</td></tr>
<tr><td>Matt Lorito</td>
<td>$80,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$72,688</td></tr>
<tr><td>Ben Gleason</td>
<td>$76,167 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$69,205</td></tr>
<tr><td>Steven Fogarty</td>
<td>$75,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$68,145</td></tr>
<tr><td>Jacob Middleton</td>
<td>$73,500 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$66,782</td></tr>
<tr><td>Joel L'Esperance</td>
<td>$72,250 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$65,647</td></tr>
<tr><td>Josh Teves</td>
<td>$70,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$63,602</td></tr>
<tr><td>Danick Martel</td>
<td>$70,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$63,602</td></tr>
<tr><td>Brogan Rafferty</td>
<td>$70,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$63,602</td></tr>
<tr><td>Gabriel Dumont</td>
<td>$65,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$59,059</td></tr>
<tr><td>Joe Hicketts</td>
<td>$65,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$59,059</td></tr>
<tr><td>Hunter Miska</td>
<td>$62,500 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$56,788</td></tr>
<tr><td>Landon Bow</td>
<td>$62,500 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$56,788</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>22</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $2,114,500</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $1,532,000</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $324,667</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $0</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $2,102,000</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $1,532,000</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $324,667</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $0</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="TeamFinancePro_WSH"><a id="Capitals">Capitals</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=30">Capitals Page</a> ]
[ <a href="OTHL-ProTeamRoster.php#Capitals">Pro Team Roster</a> ]
[ <a href="OTHL-ProTeamScoring.php#Capitals">Pro Team Scoring</a> ]
[ <a href="OTHL-TeamFinance.php#Capitals">Team Finance</a> ]
[ <a href="OTHL-ProTeamPlayersInfo.php#Capitals">Pro Team PlayersInfo</a> ]
[ <a href="OTHL-ProTeamLines.php#Capitals">Pro Team Lines</a> ]
[ <a href="OTHL-TeamProspects.php#Capitals">Team Prospects</a> ]
[ <a href="OTHL-ProTeamSchedule.php#Capitals">Pro Team Schedule</a> ]
[ <a href="OTHL-ProTeamStats.php#Capitals">Pro Team Stats</a> ]
[ <a href="OTHL-ProTeamStatsVS.php#Capitals">Pro Team Stats VS</a> ]
[ <a href="OTHL-TeamInjurySuspension.php#Capitals">Team Injury Suspension</a> ]
[ <a href="OTHL-TeamHistory.php#Capitals">Team History</a> ]
[ <a href="OTHL-TeamRecords.php#Capitals">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Capitals');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Capitals" style="display: block;">
<br /><br /><table class="STHSTableFullW"><tr><td style="vertical-align: top;width:440px;">
<table class="STHSFinance_TeamTable">
<tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_AreanaCapacity">Arena Capacity - Ticket Price<br />Attendance - %</h3></td></tr>
<tr><td class="STHSW250">Arena Name</td><td class="STHSW200">Verizon Center</td></tr>
<tr><td>Level 1: </td><td>6000 - $165 - 5,701 - 95.01%</td></tr>
<tr><td>Level 2: </td><td>5000 - $112 - 4,872 - 97.43%</td></tr>
<tr><td>Level 3: </td><td>4000 - $90 - 3,859 - 96.49%</td></tr>
<tr><td>Level 4: </td><td>3000 - $65 - 2,853 - 95.11%</td></tr>
<tr><td>Luxury : </td><td>1000 - $250 - 992 - 99.22%</td></tr>
<tr><td>Total Capacity :</td><td>19000</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Farm Level 1: </td><td>2000 - $35 - 1,510 - 75.50%</td></tr>
<tr><td>Farm Level 2: </td><td>1000 - $0 - 761 - 76.14%</td></tr>
<tr><td>Farm Total Capacity :</td><td>3000</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Income">Income</h3></td></tr>
<tr><td>Home Games Left</td><td>36</td></tr>
<tr><td>Average Attendance - %</td><td>18,277 - 96.20%</td></tr>
<tr><td>Average Income per Game</td><td>$2,267,118</td></tr>
<tr><td>Year to Date Revenue</td><td>$11,335,591</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Home Games Left</td><td>36</td></tr>
<tr><td>Average Attendance - %</td><td>2,271 - 75.71%</td></tr>
<tr><td>Average Income per Game</td><td>$52,850</td></tr>
<tr><td>Year to Date Revenue</td><td>$264,250</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>$74,520,000</td></tr>
<tr><td>Farm Players Total Salaries</td><td>$960,817</td></tr>
<tr><td>Coaches Total Salaries</td><td>$6,800,000</td></tr>
<tr><td>Luxury Taxe Total</td><td>$0</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>$7,458,740</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>$161,316</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>$6,910,353</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>$0</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Pro Estimated Season Revenue</td><td>$81,616,255</td></tr>
<tr><td>Farm Estimated Season Revenue</td><td>$1,902,600</td></tr>
<tr><td>Pro Remaining Season Days</td><td>169</td></tr>
<tr><td>Pro Expenses Per Days</td><td>$432,903</td></tr>
<tr><td>Pro Estimated Expenses</td><td>$73,160,607</td></tr>
<tr><td>Farm Remaining Season Days</td><td>169</td></tr>
<tr><td>Farm Expenses Per Days</td><td>$9,467</td></tr>
<tr><td>Farm Estimated Expenses</td><td>$1,599,923</td></tr>
<tr><td>Estimated Season Expenses</td><td>$74,760,530</td></tr>
<tr><td>Estimated Season Salary Cap</td><td>$74,619,358</td></tr>
<tr><td>Estimate Under Maximum Salary Cap of $81,500,000</td><td>$6,880,642</td></tr>
<tr><td>Estimate Over Minimum Salary Cap of $58,800,000 </td><td>$15,819,358</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>$39,296,816</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>$48,055,141</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Jack Eichel</td>
<td>$10,000,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$9,086,022</td></tr>
<tr><td>Jamie Benn</td>
<td>$9,300,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$8,450,000</td></tr>
<tr><td>Drew Doughty</td>
<td>$9,250,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$8,404,570</td></tr>
<tr><td>Ryan Johansen</td>
<td>$8,000,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$7,268,817</td></tr>
<tr><td>Jacob Trouba</td>
<td>$7,500,000 (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$6,814,516</td></tr>
<tr><td>T.J. Oshie</td>
<td>$6,850,000 (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$6,223,925</td></tr>
<tr><td>Alec Martinez</td>
<td>$5,000,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$4,543,011</td></tr>
<tr><td>Kyle Palmieri</td>
<td>$4,650,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$4,225,000</td></tr>
<tr><td>David Schlemko</td>
<td>$2,000,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$1,817,204</td></tr>
<tr><td>Petr Mrazek</td>
<td>$1,900,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$1,726,344</td></tr>
<tr><td>Curtis McElhinney (Out of Payroll)</td>
<td>$1,600,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$1,453,763</td></tr>
<tr><td>Carl Grundstrom</td>
<td>$925,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$840,457</td></tr>
<tr><td>Alexandar Georgiev</td>
<td>$925,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$840,457</td></tr>
<tr><td>Alex Iafallo</td>
<td>$925,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$840,457</td></tr>
<tr><td>Chandler Stephenson</td>
<td>$925,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$840,457</td></tr>
<tr><td>Derek Forbort</td>
<td>$900,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$817,742</td></tr>
<tr><td>Jujhar Khaira</td>
<td>$894,167 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$812,442</td></tr>
<tr><td>Jason Dickinson</td>
<td>$894,167 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$812,442</td></tr>
<tr><td>Jacob Larsson</td>
<td>$894,166 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$812,441</td></tr>
<tr><td>Sean Walker</td>
<td>$745,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$676,909</td></tr>
<tr><td>Gemel Smith</td>
<td>$700,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$636,022</td></tr>
<tr><td>Michael Chaput</td>
<td>$675,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$613,306</td></tr>
<tr><td>Kevin Gravel</td>
<td>$667,500 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$606,492</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>23</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $76,120,000</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $67,889,166</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $50,419,166</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $39,350,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $76,120,000</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $67,889,166</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $50,419,166</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $39,350,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $76,120,000</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $67,889,166</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $50,419,166</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $39,350,000</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Matthew Peca</td>
<td>$92,500 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$84,046</td></tr>
<tr><td>Paul Ladue</td>
<td>$92,500 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$84,046</td></tr>
<tr><td>Blake Lizotte</td>
<td>$92,500 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$84,046</td></tr>
<tr><td>Laurent Dauphin</td>
<td>$89,417 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$81,244</td></tr>
<tr><td>Spencer Martin</td>
<td>$89,400 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$81,229</td></tr>
<tr><td>Jordan Weal</td>
<td>$87,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$79,048</td></tr>
<tr><td>A.J. Greer</td>
<td>$82,500 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$74,960</td></tr>
<tr><td>Luke Witkowski</td>
<td>$75,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$68,145</td></tr>
<tr><td>Steven Kampfer</td>
<td>$65,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$59,059</td></tr>
<tr><td>Oscar Fantenberg</td>
<td>$65,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$59,059</td></tr>
<tr><td>Andrew Campbell</td>
<td>$65,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$59,059</td></tr>
<tr><td>Chris Conner</td>
<td>$65,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$59,059</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>12</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $960,817</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $397,500</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $175,000</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $0</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $960,817</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $397,500</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $175,000</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $0</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="TeamFinancePro_ARI"><a id="Coyotes">Coyotes</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=23">Coyotes Page</a> ]
[ <a href="OTHL-ProTeamRoster.php#Coyotes">Pro Team Roster</a> ]
[ <a href="OTHL-ProTeamScoring.php#Coyotes">Pro Team Scoring</a> ]
[ <a href="OTHL-TeamFinance.php#Coyotes">Team Finance</a> ]
[ <a href="OTHL-ProTeamPlayersInfo.php#Coyotes">Pro Team PlayersInfo</a> ]
[ <a href="OTHL-ProTeamLines.php#Coyotes">Pro Team Lines</a> ]
[ <a href="OTHL-TeamProspects.php#Coyotes">Team Prospects</a> ]
[ <a href="OTHL-ProTeamSchedule.php#Coyotes">Pro Team Schedule</a> ]
[ <a href="OTHL-ProTeamStats.php#Coyotes">Pro Team Stats</a> ]
[ <a href="OTHL-ProTeamStatsVS.php#Coyotes">Pro Team Stats VS</a> ]
[ <a href="OTHL-TeamInjurySuspension.php#Coyotes">Team Injury Suspension</a> ]
[ <a href="OTHL-TeamHistory.php#Coyotes">Team History</a> ]
[ <a href="OTHL-TeamRecords.php#Coyotes">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Coyotes');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Coyotes" style="display: block;">
<br /><br /><table class="STHSTableFullW"><tr><td style="vertical-align: top;width:440px;">
<table class="STHSFinance_TeamTable">
<tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_AreanaCapacity">Arena Capacity - Ticket Price<br />Attendance - %</h3></td></tr>
<tr><td class="STHSW250">Arena Name</td><td class="STHSW200">Jobing.com Arena</td></tr>
<tr><td>Level 1: </td><td>6000 - $225 - 3,706 - 61.76%</td></tr>
<tr><td>Level 2: </td><td>5000 - $165 - 3,166 - 63.31%</td></tr>
<tr><td>Level 3: </td><td>4000 - $135 - 2,471 - 61.78%</td></tr>
<tr><td>Level 4: </td><td>3000 - $115 - 1,508 - 50.26%</td></tr>
<tr><td>Luxury : </td><td>1000 - $300 - 718 - 71.77%</td></tr>
<tr><td>Total Capacity :</td><td>19000</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Farm Level 1: </td><td>2000 - $35 - 1,507 - 75.37%</td></tr>
<tr><td>Farm Level 2: </td><td>1000 - $0 - 744 - 74.40%</td></tr>
<tr><td>Farm Total Capacity :</td><td>3000</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Income">Income</h3></td></tr>
<tr><td>Home Games Left</td><td>38</td></tr>
<tr><td>Average Attendance - %</td><td>11,568 - 60.88%</td></tr>
<tr><td>Average Income per Game</td><td>$2,078,422</td></tr>
<tr><td>Year to Date Revenue</td><td>$6,235,265</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Home Games Left</td><td>38</td></tr>
<tr><td>Average Attendance - %</td><td>2,251 - 75.04%</td></tr>
<tr><td>Average Income per Game</td><td>$52,757</td></tr>
<tr><td>Year to Date Revenue</td><td>$158,270</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>$79,719,666</td></tr>
<tr><td>Farm Players Total Salaries</td><td>$1,355,750</td></tr>
<tr><td>Coaches Total Salaries</td><td>$5,250,000</td></tr>
<tr><td>Luxury Taxe Total</td><td>$0</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>$7,795,446</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>$216,915</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>$7,384,148</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>$0</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Pro Estimated Season Revenue</td><td>$78,980,023</td></tr>
<tr><td>Farm Estimated Season Revenue</td><td>$2,004,753</td></tr>
<tr><td>Pro Remaining Season Days</td><td>169</td></tr>
<tr><td>Pro Expenses Per Days</td><td>$452,794</td></tr>
<tr><td>Pro Estimated Expenses</td><td>$76,522,186</td></tr>
<tr><td>Farm Remaining Season Days</td><td>169</td></tr>
<tr><td>Farm Expenses Per Days</td><td>$11,321</td></tr>
<tr><td>Farm Estimated Expenses</td><td>$1,913,249</td></tr>
<tr><td>Estimated Season Expenses</td><td>$78,435,435</td></tr>
<tr><td>Estimated Season Salary Cap</td><td>$79,817,548</td></tr>
<tr><td>Estimate Under Maximum Salary Cap of $81,500,000</td><td>$1,682,452</td></tr>
<tr><td>Estimate Over Minimum Salary Cap of $58,800,000 </td><td>$21,017,548</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>$56,529,351</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>$59,078,692</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Leon Draisaitl</td>
<td>$8,500,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$7,723,118</td></tr>
<tr><td>Oliver Ekman-Larsson</td>
<td>$8,100,000 (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$7,359,677</td></tr>
<tr><td>Nikita Kucherov</td>
<td>$7,750,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$7,041,667</td></tr>
<tr><td>Tuukka Rask</td>
<td>$7,500,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$6,814,516</td></tr>
<tr><td>Jeff Skinner</td>
<td>$6,750,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$6,133,065</td></tr>
<tr><td>Kevin Hayes</td>
<td>$6,200,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$5,633,333</td></tr>
<tr><td>Kyle Turris</td>
<td>$5,000,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$4,543,011</td></tr>
<tr><td>Niklas Hjalmarsson (Out of Payroll)</td>
<td>$4,900,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$4,452,151</td></tr>
<tr><td>Cody Ceci</td>
<td>$4,800,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$4,361,290</td></tr>
<tr><td>Jay Bouwmeester</td>
<td>$4,500,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$4,088,710</td></tr>
<tr><td>Mika Zibanejad</td>
<td>$3,800,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$3,452,688</td></tr>
<tr><td>Dylan Strome</td>
<td>$3,338,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$3,032,914</td></tr>
<tr><td>Keith Kinkaid</td>
<td>$2,100,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$1,908,065</td></tr>
<tr><td>Carl Gunnarsson</td>
<td>$1,750,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$1,590,054</td></tr>
<tr><td>Nate Thompson</td>
<td>$1,750,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$1,590,054</td></tr>
<tr><td>William Nylander</td>
<td>$1,744,167 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$1,584,754</td></tr>
<tr><td>Kevin Fiala</td>
<td>$1,363,333 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$1,238,727</td></tr>
<tr><td>Thomas Chabot</td>
<td>$1,223,333 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$1,111,523</td></tr>
<tr><td>Christian Fischer</td>
<td>$1,075,833 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$977,504</td></tr>
<tr><td>Oskar Sundqvist</td>
<td>$925,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$840,457</td></tr>
<tr><td>John Gilmour</td>
<td>$800,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$726,882</td></tr>
<tr><td>Dale Weise</td>
<td>$750,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$681,452</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>22</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $84,619,666</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $60,862,166</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $37,050,000</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $29,550,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $84,619,666</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $60,862,166</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $37,050,000</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $29,550,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $84,619,666</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $60,862,166</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $37,050,000</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $29,550,000</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Griffin Reinhart</td>
<td>$321,333 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$291,964</td></tr>
<tr><td>Matt Hunwick</td>
<td>$225,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$204,435</td></tr>
<tr><td>Filip Chytil</td>
<td>$124,417 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$113,045</td></tr>
<tr><td>Brady Keeper</td>
<td>$92,500 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$84,046</td></tr>
<tr><td>Nico Sturm</td>
<td>$92,500 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$84,046</td></tr>
<tr><td>Antti Suomela</td>
<td>$92,500 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$84,046</td></tr>
<tr><td>Tanner Fritz</td>
<td>$80,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$72,688</td></tr>
<tr><td>Erik Condra</td>
<td>$70,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$63,602</td></tr>
<tr><td>Tyler Gaudet</td>
<td>$65,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$59,059</td></tr>
<tr><td>Michael Leighton</td>
<td>$65,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$59,059</td></tr>
<tr><td>Harry Zolnierczyk</td>
<td>$65,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$59,059</td></tr>
<tr><td>Sheldon Dries</td>
<td>$62,500 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$56,788</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>12</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $1,355,750</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $710,750</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $309,417</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $0</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $1,345,750</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $710,750</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $309,417</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $0</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="TeamFinancePro_NJD"><a id="Devils">Devils</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=18">Devils Page</a> ]
[ <a href="OTHL-ProTeamRoster.php#Devils">Pro Team Roster</a> ]
[ <a href="OTHL-ProTeamScoring.php#Devils">Pro Team Scoring</a> ]
[ <a href="OTHL-TeamFinance.php#Devils">Team Finance</a> ]
[ <a href="OTHL-ProTeamPlayersInfo.php#Devils">Pro Team PlayersInfo</a> ]
[ <a href="OTHL-ProTeamLines.php#Devils">Pro Team Lines</a> ]
[ <a href="OTHL-TeamProspects.php#Devils">Team Prospects</a> ]
[ <a href="OTHL-ProTeamSchedule.php#Devils">Pro Team Schedule</a> ]
[ <a href="OTHL-ProTeamStats.php#Devils">Pro Team Stats</a> ]
[ <a href="OTHL-ProTeamStatsVS.php#Devils">Pro Team Stats VS</a> ]
[ <a href="OTHL-TeamInjurySuspension.php#Devils">Team Injury Suspension</a> ]
[ <a href="OTHL-TeamHistory.php#Devils">Team History</a> ]
[ <a href="OTHL-TeamRecords.php#Devils">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Devils');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Devils" style="display: block;">
<br /><br /><table class="STHSTableFullW"><tr><td style="vertical-align: top;width:440px;">
<table class="STHSFinance_TeamTable">
<tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_AreanaCapacity">Arena Capacity - Ticket Price<br />Attendance - %</h3></td></tr>
<tr><td class="STHSW250">Arena Name</td><td class="STHSW200">Prudential Center</td></tr>
<tr><td>Level 1: </td><td>6000 - $160 - 5,727 - 95.45%</td></tr>
<tr><td>Level 2: </td><td>5000 - $110 - 4,788 - 95.77%</td></tr>
<tr><td>Level 3: </td><td>4000 - $70 - 3,927 - 98.18%</td></tr>
<tr><td>Level 4: </td><td>3000 - $50 - 2,976 - 99.18%</td></tr>
<tr><td>Luxury : </td><td>1000 - $180 - 969 - 96.90%</td></tr>
<tr><td>Total Capacity :</td><td>19000</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Farm Level 1: </td><td>2000 - $40 - 1,462 - 73.08%</td></tr>
<tr><td>Farm Level 2: </td><td>1000 - $0 - 771 - 77.08%</td></tr>
<tr><td>Farm Total Capacity :</td><td>3000</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Income">Income</h3></td></tr>
<tr><td>Home Games Left</td><td>37</td></tr>
<tr><td>Average Attendance - %</td><td>18,387 - 96.77%</td></tr>
<tr><td>Average Income per Game</td><td>$2,041,130</td></tr>
<tr><td>Year to Date Revenue</td><td>$8,164,520</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Home Games Left</td><td>37</td></tr>
<tr><td>Average Attendance - %</td><td>2,232 - 74.41%</td></tr>
<tr><td>Average Income per Game</td><td>$58,460</td></tr>
<tr><td>Year to Date Revenue</td><td>$233,840</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>$75,834,167</td></tr>
<tr><td>Farm Players Total Salaries</td><td>$174,167</td></tr>
<tr><td>Coaches Total Salaries</td><td>$2,275,000</td></tr>
<tr><td>Luxury Taxe Total</td><td>$0</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>$7,068,175</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>$86,751</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>$6,931,087</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>$0</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Pro Estimated Season Revenue</td><td>$75,521,810</td></tr>
<tr><td>Farm Estimated Season Revenue</td><td>$2,163,020</td></tr>
<tr><td>Pro Remaining Season Days</td><td>169</td></tr>
<tr><td>Pro Expenses Per Days</td><td>$415,775</td></tr>
<tr><td>Pro Estimated Expenses</td><td>$70,265,975</td></tr>
<tr><td>Farm Remaining Season Days</td><td>169</td></tr>
<tr><td>Farm Expenses Per Days</td><td>$5,103</td></tr>
<tr><td>Farm Estimated Expenses</td><td>$862,407</td></tr>
<tr><td>Estimated Season Expenses</td><td>$71,128,382</td></tr>
<tr><td>Estimated Season Salary Cap</td><td>$75,834,246</td></tr>
<tr><td>Estimate Under Maximum Salary Cap of $81,500,000</td><td>$5,665,754</td></tr>
<tr><td>Estimate Over Minimum Salary Cap of $58,800,000 </td><td>$17,034,246</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>$73,146,162</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>$79,702,610</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Ryan Getzlaf</td>
<td>$9,000,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$8,177,419</td></tr>
<tr><td>Patric Hornqvist</td>
<td>$7,000,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$6,360,215</td></tr>
<tr><td>Chris Tanev</td>
<td>$6,500,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$5,905,914</td></tr>
<tr><td>Robin Lehner</td>
<td>$6,000,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$5,451,613</td></tr>
<tr><td>William Karlsson</td>
<td>$5,850,000 (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$5,315,323</td></tr>
<tr><td>Brandon Dubinsky</td>
<td>$5,750,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$5,224,462</td></tr>
<tr><td>Adam Larsson</td>
<td>$5,000,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$4,543,011</td></tr>
<tr><td>Michael Grabner</td>
<td>$4,850,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$4,406,720</td></tr>
<tr><td>Jimmy Vesey</td>
<td>$3,775,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$3,429,973</td></tr>
<tr><td>Darnell Nurse</td>
<td>$3,250,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$2,952,957</td></tr>
<tr><td>Riley Sheahan</td>
<td>$2,900,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$2,634,946</td></tr>
<tr><td>Martin Hanzal</td>
<td>$2,700,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$2,453,226</td></tr>
<tr><td>Matt Moulson</td>
<td>$1,850,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$1,680,914</td></tr>
<tr><td>Nick Ritchie</td>
<td>$1,675,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$1,521,909</td></tr>
<tr><td>Michael Raffl</td>
<td>$1,650,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$1,499,194</td></tr>
<tr><td>Timo Meier</td>
<td>$1,644,167 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$1,493,894</td></tr>
<tr><td>Christian Folin</td>
<td>$1,500,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$1,362,903</td></tr>
<tr><td>Michal Kempny</td>
<td>$1,000,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$908,602</td></tr>
<tr><td>Markus Nutivaara</td>
<td>$925,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$840,457</td></tr>
<tr><td>Garret Sparks</td>
<td>$850,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$772,312</td></tr>
<tr><td>Maxime Lajoie</td>
<td>$790,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$717,796</td></tr>
<tr><td>Colby Cave</td>
<td>$700,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$636,022</td></tr>
<tr><td>Patrick Brown</td>
<td>$675,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$613,306</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>23</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $75,834,167</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $55,434,167</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $37,250,000</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $34,350,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $75,834,167</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $55,434,167</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $37,250,000</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $34,350,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $75,834,167</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $55,434,167</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $37,250,000</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $34,350,000</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Anders Bjork</td>
<td>$106,667 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$96,918</td></tr>
<tr><td>Kyle Criscuolo</td>
<td>$67,500 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$61,331</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>2</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $174,167</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $106,667</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $0</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $174,167</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $106,667</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $0</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="TeamFinancePro_ANH"><a id="Ducks">Ducks</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=1">Ducks Page</a> ]
[ <a href="OTHL-ProTeamRoster.php#Ducks">Pro Team Roster</a> ]
[ <a href="OTHL-ProTeamScoring.php#Ducks">Pro Team Scoring</a> ]
[ <a href="OTHL-TeamFinance.php#Ducks">Team Finance</a> ]
[ <a href="OTHL-ProTeamPlayersInfo.php#Ducks">Pro Team PlayersInfo</a> ]
[ <a href="OTHL-ProTeamLines.php#Ducks">Pro Team Lines</a> ]
[ <a href="OTHL-TeamProspects.php#Ducks">Team Prospects</a> ]
[ <a href="OTHL-ProTeamSchedule.php#Ducks">Pro Team Schedule</a> ]
[ <a href="OTHL-ProTeamStats.php#Ducks">Pro Team Stats</a> ]
[ <a href="OTHL-ProTeamStatsVS.php#Ducks">Pro Team Stats VS</a> ]
[ <a href="OTHL-TeamInjurySuspension.php#Ducks">Team Injury Suspension</a> ]
[ <a href="OTHL-TeamHistory.php#Ducks">Team History</a> ]
[ <a href="OTHL-TeamRecords.php#Ducks">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Ducks');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Ducks" style="display: block;">
<br /><br /><table class="STHSTableFullW"><tr><td style="vertical-align: top;width:440px;">
<table class="STHSFinance_TeamTable">
<tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_AreanaCapacity">Arena Capacity - Ticket Price<br />Attendance - %</h3></td></tr>
<tr><td class="STHSW250">Arena Name</td><td class="STHSW200">Honda Center</td></tr>
<tr><td>Level 1: </td><td>6000 - $150 - 4,822 - 80.37%</td></tr>
<tr><td>Level 2: </td><td>5000 - $116 - 4,280 - 85.60%</td></tr>
<tr><td>Level 3: </td><td>4000 - $81 - 3,441 - 86.03%</td></tr>
<tr><td>Level 4: </td><td>3000 - $45 - 2,589 - 86.29%</td></tr>
<tr><td>Luxury : </td><td>1000 - $250 - 843 - 84.25%</td></tr>
<tr><td>Total Capacity :</td><td>19000</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Farm Level 1: </td><td>2000 - $35 - 1,494 - 74.68%</td></tr>
<tr><td>Farm Level 2: </td><td>1000 - $0 - 779 - 77.88%</td></tr>
<tr><td>Farm Total Capacity :</td><td>3000</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Income">Income</h3></td></tr>
<tr><td>Home Games Left</td><td>37</td></tr>
<tr><td>Average Attendance - %</td><td>15,974 - 84.08%</td></tr>
<tr><td>Average Income per Game</td><td>$2,075,834</td></tr>
<tr><td>Year to Date Revenue</td><td>$8,303,334</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Home Games Left</td><td>37</td></tr>
<tr><td>Average Attendance - %</td><td>2,272 - 75.74%</td></tr>
<tr><td>Average Income per Game</td><td>$52,273</td></tr>
<tr><td>Year to Date Revenue</td><td>$209,090</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>$78,151,249</td></tr>
<tr><td>Farm Players Total Salaries</td><td>$1,713,049</td></tr>
<tr><td>Coaches Total Salaries</td><td>$3,750,000</td></tr>
<tr><td>Luxury Taxe Total</td><td>$0</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>$7,326,195</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>$235,800</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>$7,052,002</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>$0</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Pro Estimated Season Revenue</td><td>$76,805,840</td></tr>
<tr><td>Farm Estimated Season Revenue</td><td>$1,934,082</td></tr>
<tr><td>Pro Remaining Season Days</td><td>169</td></tr>
<tr><td>Pro Expenses Per Days</td><td>$436,297</td></tr>
<tr><td>Pro Estimated Expenses</td><td>$73,734,193</td></tr>
<tr><td>Farm Remaining Season Days</td><td>169</td></tr>
<tr><td>Farm Expenses Per Days</td><td>$13,242</td></tr>
<tr><td>Farm Estimated Expenses</td><td>$2,237,898</td></tr>
<tr><td>Estimated Season Expenses</td><td>$75,972,091</td></tr>
<tr><td>Estimated Season Salary Cap</td><td>$78,060,394</td></tr>
<tr><td>Estimate Under Maximum Salary Cap of $81,500,000</td><td>$3,439,606</td></tr>
<tr><td>Estimate Over Minimum Salary Cap of $58,800,000 </td><td>$19,260,394</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>$80,975,358</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>$83,743,189</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Jake Muzzin</td>
<td>$8,000,000 (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$7,268,817</td></tr>
<tr><td>Johnny Gaudreau</td>
<td>$7,250,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$6,587,366</td></tr>
<tr><td>Sean Monahan</td>
<td>$6,375,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$5,792,339</td></tr>
<tr><td>Nazem Kadri</td>
<td>$6,100,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$5,542,473</td></tr>
<tr><td>Martin Jones</td>
<td>$6,000,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$5,451,613</td></tr>
<tr><td>Travis Zajac</td>
<td>$6,000,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$5,451,613</td></tr>
<tr><td>Mike Smith</td>
<td>$5,800,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$5,269,892</td></tr>
<tr><td>Morgan Rielly</td>
<td>$5,500,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$4,997,312</td></tr>
<tr><td>Kris Russell</td>
<td>$5,000,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$4,543,011</td></tr>
<tr><td>Andrew Cogliano</td>
<td>$3,400,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$3,089,247</td></tr>
<tr><td>Alex Chiasson</td>
<td>$3,200,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$2,907,527</td></tr>
<tr><td>Jay Beagle</td>
<td>$3,000,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$2,725,806</td></tr>
<tr><td>Devin Shore</td>
<td>$2,300,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$2,089,785</td></tr>
<tr><td>Mattias Janmark</td>
<td>$2,000,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$1,817,204</td></tr>
<tr><td>Mark Jankowski</td>
<td>$1,493,750 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$1,357,224</td></tr>
<tr><td>Josh Morrissey</td>
<td>$1,363,333 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$1,238,727</td></tr>
<tr><td>Charlie McAvoy</td>
<td>$1,258,333 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$1,143,324</td></tr>
<tr><td>Zach Aston-Reese</td>
<td>$925,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$840,457</td></tr>
<tr><td>Jake Guentzel</td>
<td>$925,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$840,457</td></tr>
<tr><td>Tyler Bertuzzi</td>
<td>$910,833 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$827,585</td></tr>
<tr><td>Kenny Agostino</td>
<td>$700,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$636,022</td></tr>
<tr><td>Colin Miller</td>
<td>$650,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$590,591</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>22</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $78,151,249</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $64,408,333</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $39,975,000</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $20,100,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $78,151,249</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $64,408,333</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $39,975,000</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $20,100,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $78,151,249</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $64,408,333</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $39,975,000</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $20,100,000</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Patrick Eaves</td>
<td>$325,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$295,296</td></tr>
<tr><td>Troy Terry</td>
<td>$149,167 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$135,533</td></tr>
<tr><td>Juuso Valimaki</td>
<td>$131,917 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$119,860</td></tr>
<tr><td>Zach Senyshyn</td>
<td>$128,800 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$117,028</td></tr>
<tr><td>Trent Frederic</td>
<td>$113,750 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$103,353</td></tr>
<tr><td>Jon Gillies</td>
<td>$92,500 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$84,046</td></tr>
<tr><td>Dillon Dube</td>
<td>$91,083 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$82,758</td></tr>
<tr><td>Tristan Jarry</td>
<td>$90,500 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$82,228</td></tr>
<tr><td>Joel Hanley</td>
<td>$90,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$81,774</td></tr>
<tr><td>Oliver Kylington</td>
<td>$86,333 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$78,443</td></tr>
<tr><td>Nic Petan</td>
<td>$86,333 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$78,443</td></tr>
<tr><td>Morgan Klimchuk</td>
<td>$86,333 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$78,443</td></tr>
<tr><td>Emile Poirier</td>
<td>$86,333 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$78,443</td></tr>
<tr><td>Warren Foegele</td>
<td>$80,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$72,688</td></tr>
<tr><td>Nicolas Kerdiles</td>
<td>$75,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$68,145</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>15</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $1,713,049</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $871,050</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $614,717</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $0</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $1,713,049</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $871,050</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $614,717</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $0</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="TeamFinancePro_CGY"><a id="Flames">Flames</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=5">Flames Page</a> ]
[ <a href="OTHL-ProTeamRoster.php#Flames">Pro Team Roster</a> ]
[ <a href="OTHL-ProTeamScoring.php#Flames">Pro Team Scoring</a> ]
[ <a href="OTHL-TeamFinance.php#Flames">Team Finance</a> ]
[ <a href="OTHL-ProTeamPlayersInfo.php#Flames">Pro Team PlayersInfo</a> ]
[ <a href="OTHL-ProTeamLines.php#Flames">Pro Team Lines</a> ]
[ <a href="OTHL-TeamProspects.php#Flames">Team Prospects</a> ]
[ <a href="OTHL-ProTeamSchedule.php#Flames">Pro Team Schedule</a> ]
[ <a href="OTHL-ProTeamStats.php#Flames">Pro Team Stats</a> ]
[ <a href="OTHL-ProTeamStatsVS.php#Flames">Pro Team Stats VS</a> ]
[ <a href="OTHL-TeamInjurySuspension.php#Flames">Team Injury Suspension</a> ]
[ <a href="OTHL-TeamHistory.php#Flames">Team History</a> ]
[ <a href="OTHL-TeamRecords.php#Flames">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Flames');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Flames" style="display: block;">
<br /><br /><table class="STHSTableFullW"><tr><td style="vertical-align: top;width:440px;">
<table class="STHSFinance_TeamTable">
<tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_AreanaCapacity">Arena Capacity - Ticket Price<br />Attendance - %</h3></td></tr>
<tr><td class="STHSW250">Arena Name</td><td class="STHSW200">Pengrowth Saddledome</td></tr>
<tr><td>Level 1: </td><td>6000 - $162 - 5,855 - 97.58%</td></tr>
<tr><td>Level 2: </td><td>5000 - $113 - 4,753 - 95.05%</td></tr>
<tr><td>Level 3: </td><td>4000 - $91 - 3,843 - 96.08%</td></tr>
<tr><td>Level 4: </td><td>3000 - $67 - 2,943 - 98.09%</td></tr>
<tr><td>Luxury : </td><td>1000 - $254 - 888 - 88.80%</td></tr>
<tr><td>Total Capacity :</td><td>19000</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Farm Level 1: </td><td>2000 - $50 - 1,538 - 76.88%</td></tr>
<tr><td>Farm Level 2: </td><td>1000 - $0 - 726 - 72.55%</td></tr>
<tr><td>Farm Total Capacity :</td><td>3000</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Income">Income</h3></td></tr>
<tr><td>Home Games Left</td><td>37</td></tr>
<tr><td>Average Attendance - %</td><td>18,281 - 96.22%</td></tr>
<tr><td>Average Income per Game</td><td>$2,149,506</td></tr>
<tr><td>Year to Date Revenue</td><td>$8,598,023</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Home Games Left</td><td>37</td></tr>
<tr><td>Average Attendance - %</td><td>2,263 - 75.43%</td></tr>
<tr><td>Average Income per Game</td><td>$55,021</td></tr>
<tr><td>Year to Date Revenue</td><td>$220,084</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>$81,506,250</td></tr>
<tr><td>Farm Players Total Salaries</td><td>$1,198,500</td></tr>
<tr><td>Coaches Total Salaries</td><td>$5,700,000</td></tr>
<tr><td>Luxury Taxe Total</td><td>$0</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>$7,729,599</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>$177,495</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>$7,272,618</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>$0</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Pro Estimated Season Revenue</td><td>$79,531,713</td></tr>
<tr><td>Farm Estimated Season Revenue</td><td>$2,035,777</td></tr>
<tr><td>Pro Remaining Season Days</td><td>169</td></tr>
<tr><td>Pro Expenses Per Days</td><td>$465,087</td></tr>
<tr><td>Pro Estimated Expenses</td><td>$78,599,703</td></tr>
<tr><td>Farm Remaining Season Days</td><td>169</td></tr>
<tr><td>Farm Expenses Per Days</td><td>$10,207</td></tr>
<tr><td>Farm Estimated Expenses</td><td>$1,724,983</td></tr>
<tr><td>Estimated Season Expenses</td><td>$80,324,686</td></tr>
<tr><td>Estimated Season Salary Cap</td><td>$81,329,432</td></tr>
<tr><td>Estimate Under Maximum Salary Cap of $81,500,000</td><td>$170,568</td></tr>
<tr><td>Estimate Over Minimum Salary Cap of $58,800,000 </td><td>$22,529,432</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>$39,895,257</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>$41,138,061</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Erik Karlsson</td>
<td>$9,200,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$8,359,140</td></tr>
<tr><td>Taylor Hall</td>
<td>$8,750,000 (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$7,950,269</td></tr>
<tr><td>Pekka Rinne</td>
<td>$7,000,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$6,360,215</td></tr>
<tr><td>Dylan Larkin</td>
<td>$6,100,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$5,542,473</td></tr>
<tr><td>Mathew Dumba</td>
<td>$6,000,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$5,451,613</td></tr>
<tr><td>Justin Williams</td>
<td>$6,000,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$5,451,613</td></tr>
<tr><td>Jaccob Slavin</td>
<td>$5,000,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$4,543,011</td></tr>
<tr><td>Viktor Arvidsson</td>
<td>$4,500,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$4,088,710</td></tr>
<tr><td>David Perron</td>
<td>$4,500,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$4,088,710</td></tr>
<tr><td>Roman Polak</td>
<td>$4,250,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$3,861,559</td></tr>
<tr><td>Phillip Danault</td>
<td>$3,300,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$2,998,387</td></tr>
<tr><td>Adam Lowry</td>
<td>$2,900,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$2,634,946</td></tr>
<tr><td>Tom Wilson</td>
<td>$2,500,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$2,271,505</td></tr>
<tr><td>Andrew Copp</td>
<td>$1,650,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$1,499,194</td></tr>
<tr><td>Austin Watson</td>
<td>$1,650,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$1,499,194</td></tr>
<tr><td>Markus Granlund</td>
<td>$1,475,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$1,340,188</td></tr>
<tr><td>Casey DeSmith</td>
<td>$1,150,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$1,044,892</td></tr>
<tr><td>Devon Toews</td>
<td>$1,031,250 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$936,996</td></tr>
<tr><td>Andreas Johnsson</td>
<td>$925,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$840,457</td></tr>
<tr><td>Garnet Hathaway</td>
<td>$925,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$840,457</td></tr>
<tr><td>Brady Skjei</td>
<td>$925,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$840,457</td></tr>
<tr><td>Steven Santini</td>
<td>$925,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$840,457</td></tr>
<tr><td>Jonathon Merrill</td>
<td>$850,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$772,312</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>23</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $81,506,250</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $59,581,250</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $42,231,250</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $22,500,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $81,506,250</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $59,581,250</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $42,231,250</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $22,500,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $81,506,250</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $59,581,250</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $42,231,250</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $22,500,000</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Anthony Duclair</td>
<td>$165,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$149,919</td></tr>
<tr><td>Jack Roslovic</td>
<td>$110,667 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$100,552</td></tr>
<tr><td>Taro Hirose</td>
<td>$92,500 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$84,046</td></tr>
<tr><td>Vinni Lettieri</td>
<td>$92,500 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$84,046</td></tr>
<tr><td>Christoffer Ehn</td>
<td>$92,500 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$84,046</td></tr>
<tr><td>Oscar Dansk</td>
<td>$92,500 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$84,046</td></tr>
<tr><td>Blake Hillman</td>
<td>$92,500 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$84,046</td></tr>
<tr><td>Matthew Highmore</td>
<td>$92,500 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$84,046</td></tr>
<tr><td>Andre Burakovsky</td>
<td>$80,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$72,688</td></tr>
<tr><td>Tyrell Goulbourne</td>
<td>$77,333 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$70,265</td></tr>
<tr><td>Jordan Subban</td>
<td>$75,500 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$68,599</td></tr>
<tr><td>Kyle Rau</td>
<td>$70,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$63,602</td></tr>
<tr><td>Brad Malone</td>
<td>$65,000 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$59,059</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>13</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $1,198,500</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $883,500</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $234,833</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $0</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $1,198,500</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $883,500</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $234,833</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $0</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="TeamFinancePro_PHL"><a id="Flyers">Flyers</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=22">Flyers Page</a> ]
[ <a href="OTHL-ProTeamRoster.php#Flyers">Pro Team Roster</a> ]
[ <a href="OTHL-ProTeamScoring.php#Flyers">Pro Team Scoring</a> ]
[ <a href="OTHL-TeamFinance.php#Flyers">Team Finance</a> ]
[ <a href="OTHL-ProTeamPlayersInfo.php#Flyers">Pro Team PlayersInfo</a> ]
[ <a href="OTHL-ProTeamLines.php#Flyers">Pro Team Lines</a> ]
[ <a href="OTHL-TeamProspects.php#Flyers">Team Prospects</a> ]
[ <a href="OTHL-ProTeamSchedule.php#Flyers">Pro Team Schedule</a> ]
[ <a href="OTHL-ProTeamStats.php#Flyers">Pro Team Stats</a> ]
[ <a href="OTHL-ProTeamStatsVS.php#Flyers">Pro Team Stats VS</a> ]
[ <a href="OTHL-TeamInjurySuspension.php#Flyers">Team Injury Suspension</a> ]
[ <a href="OTHL-TeamHistory.php#Flyers">Team History</a> ]
[ <a href="OTHL-TeamRecords.php#Flyers">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Flyers');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Flyers" style="display: block;">
<br /><br /><table class="STHSTableFullW"><tr><td style="vertical-align: top;width:440px;">
<table class="STHSFinance_TeamTable">
<tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_AreanaCapacity">Arena Capacity - Ticket Price<br />Attendance - %</h3></td></tr>
<tr><td class="STHSW250">Arena Name</td><td class="STHSW200">Wachovia Center</td></tr>
<tr><td>Level 1: </td><td>6000 - $225 - 3,825 - 63.75%</td></tr>
<tr><td>Level 2: </td><td>5000 - $165 - 3,213 - 64.26%</td></tr>
<tr><td>Level 3: </td><td>4000 - $125 - 2,845 - 71.11%</td></tr>
<tr><td>Level 4: </td><td>3000 - $25 - 3,000 - 100.00%</td></tr>
<tr><td>Luxury : </td><td>1000 - $300 - 663 - 66.25%</td></tr>
<tr><td>Total Capacity :</td><td>19000</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Farm Level 1: </td><td>2000 - $40 - 1,497 - 74.83%</td></tr>
<tr><td>Farm Level 2: </td><td>1000 - $0 - 740 - 74.00%</td></tr>
<tr><td>Farm Total Capacity :</td><td>3000</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Income">Income</h3></td></tr>
<tr><td>Home Games Left</td><td>39</td></tr>
<tr><td>Average Attendance - %</td><td>13,545 - 71.29%</td></tr>
<tr><td>Average Income per Game</td><td>$2,020,083</td></tr>
<tr><td>Year to Date Revenue</td><td>$4,040,165</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Home Games Left</td><td>39</td></tr>
<tr><td>Average Attendance - %</td><td>2,237 - 74.55%</td></tr>
<tr><td>Average Income per Game</td><td>$59,860</td></tr>
<tr><td>Year to Date Revenue</td><td>$119,720</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>$76,274,999</td></tr>
<tr><td>Farm Players Total Salaries</td><td>$732,500</td></tr>
<tr><td>Coaches Total Salaries</td><td>$3,600,000</td></tr>
<tr><td>Luxury Taxe Total</td><td>$0</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>$7,245,570</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>$121,788</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>$6,971,377</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>$0</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Pro Estimated Season Revenue</td><td>$78,783,218</td></tr>
<tr><td>Farm Estimated Season Revenue</td><td>$2,334,540</td></tr>
<tr><td>Pro Remaining Season Days</td><td>169</td></tr>
<tr><td>Pro Expenses Per Days</td><td>$426,210</td></tr>
<tr><td>Pro Estimated Expenses</td><td>$72,029,490</td></tr>
<tr><td>Farm Remaining Season Days</td><td>169</td></tr>
<tr><td>Farm Expenses Per Days</td><td>$7,164</td></tr>
<tr><td>Farm Estimated Expenses</td><td>$1,210,716</td></tr>
<tr><td>Estimated Season Expenses</td><td>$73,240,206</td></tr>
<tr><td>Estimated Season Salary Cap</td><td>$76,275,066</td></tr>
<tr><td>Estimate Under Maximum Salary Cap of $81,500,000</td><td>$5,224,934</td></tr>
<tr><td>Estimate Over Minimum Salary Cap of $58,800,000 </td><td>$17,475,066</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>$11,529,950</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>$19,407,502</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Alexander Edler</td>
<td>$7,000,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$6,360,215</td></tr>
<tr><td>Keith Yandle</td>
<td>$6,350,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$5,769,624</td></tr>
<tr><td>Brock Nelson</td>
<td>$6,000,000 (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$5,451,613</td></tr>
<tr><td>Jaroslav Halak</td>
<td>$4,500,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$4,088,710</td></tr>
<tr><td>Max Domi</td>
<td>$4,250,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$3,861,559</td></tr>
<tr><td>Cody Eakin</td>
<td>$4,250,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$3,861,559</td></tr>
<tr><td>Jonas Brodin</td>
<td>$4,200,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$3,816,129</td></tr>
<tr><td>Nick Bjugstad</td>
<td>$4,100,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$3,725,269</td></tr>
<tr><td>Pat Maroon</td>
<td>$3,950,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$3,588,978</td></tr>
<tr><td>Rasmus Dahlin</td>
<td>$3,775,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$3,429,973</td></tr>
<tr><td>Pierre-Luc Dubois</td>
<td>$3,394,166 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$3,083,947</td></tr>
<tr><td>Radko Gudas</td>
<td>$3,250,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$2,952,957</td></tr>
<tr><td>Ryan Strome</td>
<td>$3,100,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$2,816,667</td></tr>
<tr><td>Conor Sheary</td>
<td>$3,000,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$2,725,806</td></tr>
<tr><td>Jonathan Ericsson</td>
<td>$3,000,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$2,725,806</td></tr>
<tr><td>Mikko Koskinen</td>
<td>$2,500,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$2,271,505</td></tr>
<tr><td>Matt Martin</td>
<td>$2,000,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$1,817,204</td></tr>
<tr><td>Trevor Lewis</td>
<td>$1,500,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$1,362,903</td></tr>
<tr><td>Andrej Sekera</td>
<td>$1,500,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$1,362,903</td></tr>
<tr><td>Loui Eriksson</td>
<td>$1,500,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$1,362,903</td></tr>
<tr><td>Kailer Yamamoto</td>
<td>$1,124,166 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$1,021,420</td></tr>
<tr><td>Joel Eriksson Ek</td>
<td>$1,106,667 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$1,005,520</td></tr>
<tr><td>Maxime Comtois</td>
<td>$925,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$840,457</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>23</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $76,274,999</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $56,068,332</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $34,124,166</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $19,350,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $76,274,999</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $56,068,332</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $34,124,166</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $19,350,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $76,274,999</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $56,068,332</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $34,124,166</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $19,350,000</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Brian Gibbons</td>
<td>$300,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$272,581</td></tr>
<tr><td>Buddy Robinson</td>
<td>$150,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$136,290</td></tr>
<tr><td>Joseph Morrow</td>
<td>$100,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$90,860</td></tr>
<tr><td>Justin Kloos</td>
<td>$97,500 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$88,589</td></tr>
<tr><td>Alex Broadhurst</td>
<td>$85,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$77,231</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>5</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $732,500</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $482,500</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $0</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $732,500</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $482,500</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $0</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="TeamFinancePro_VGK"><a id="GoldenKnights">Golden Knights</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=31">Golden Knights Page</a> ]
[ <a href="OTHL-ProTeamRoster.php#GoldenKnights">Pro Team Roster</a> ]
[ <a href="OTHL-ProTeamScoring.php#GoldenKnights">Pro Team Scoring</a> ]
[ <a href="OTHL-TeamFinance.php#GoldenKnights">Team Finance</a> ]
[ <a href="OTHL-ProTeamPlayersInfo.php#GoldenKnights">Pro Team PlayersInfo</a> ]
[ <a href="OTHL-ProTeamLines.php#GoldenKnights">Pro Team Lines</a> ]
[ <a href="OTHL-TeamProspects.php#GoldenKnights">Team Prospects</a> ]
[ <a href="OTHL-ProTeamSchedule.php#GoldenKnights">Pro Team Schedule</a> ]
[ <a href="OTHL-ProTeamStats.php#GoldenKnights">Pro Team Stats</a> ]
[ <a href="OTHL-ProTeamStatsVS.php#GoldenKnights">Pro Team Stats VS</a> ]
[ <a href="OTHL-TeamInjurySuspension.php#GoldenKnights">Team Injury Suspension</a> ]
[ <a href="OTHL-TeamHistory.php#GoldenKnights">Team History</a> ]
[ <a href="OTHL-TeamRecords.php#GoldenKnights">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_GoldenKnights');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_GoldenKnights" style="display: block;">
<br /><br /><table class="STHSTableFullW"><tr><td style="vertical-align: top;width:440px;">
<table class="STHSFinance_TeamTable">
<tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_AreanaCapacity">Arena Capacity - Ticket Price<br />Attendance - %</h3></td></tr>
<tr><td class="STHSW250">Arena Name</td><td class="STHSW200">T-Mobile Arena</td></tr>
<tr><td>Level 1: </td><td>6000 - $190 - 4,242 - 70.70%</td></tr>
<tr><td>Level 2: </td><td>5000 - $135 - 3,733 - 74.66%</td></tr>
<tr><td>Level 3: </td><td>4000 - $115 - 2,677 - 66.93%</td></tr>
<tr><td>Level 4: </td><td>3000 - $80 - 2,173 - 72.43%</td></tr>
<tr><td>Luxury : </td><td>1000 - $285 - 746 - 74.60%</td></tr>
<tr><td>Total Capacity :</td><td>19000</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Farm Level 1: </td><td>2000 - $40 - 1,515 - 75.75%</td></tr>
<tr><td>Farm Level 2: </td><td>1000 - $0 - 767 - 76.66%</td></tr>
<tr><td>Farm Total Capacity :</td><td>3000</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Income">Income</h3></td></tr>
<tr><td>Home Games Left</td><td>36</td></tr>
<tr><td>Average Attendance - %</td><td>13,571 - 71.43%</td></tr>
<tr><td>Average Income per Game</td><td>$2,057,614</td></tr>
<tr><td>Year to Date Revenue</td><td>$10,288,070</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Home Games Left</td><td>36</td></tr>
<tr><td>Average Attendance - %</td><td>2,282 - 76.05%</td></tr>
<tr><td>Average Income per Game</td><td>$60,600</td></tr>
<tr><td>Year to Date Revenue</td><td>$303,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>$79,653,333</td></tr>
<tr><td>Farm Players Total Salaries</td><td>$1,077,500</td></tr>
<tr><td>Coaches Total Salaries</td><td>$3,600,000</td></tr>
<tr><td>Luxury Taxe Total</td><td>$0</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>$7,366,437</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>$163,508</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>$7,092,244</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>$0</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Pro Estimated Season Revenue</td><td>$74,074,104</td></tr>
<tr><td>Farm Estimated Season Revenue</td><td>$2,181,600</td></tr>
<tr><td>Pro Remaining Season Days</td><td>169</td></tr>
<tr><td>Pro Expenses Per Days</td><td>$444,373</td></tr>
<tr><td>Pro Estimated Expenses</td><td>$75,099,037</td></tr>
<tr><td>Farm Remaining Season Days</td><td>169</td></tr>
<tr><td>Farm Expenses Per Days</td><td>$9,019</td></tr>
<tr><td>Farm Estimated Expenses</td><td>$1,524,211</td></tr>
<tr><td>Estimated Season Expenses</td><td>$76,623,248</td></tr>
<tr><td>Estimated Season Salary Cap</td><td>$79,465,480</td></tr>
<tr><td>Estimate Under Maximum Salary Cap of $81,500,000</td><td>$2,034,520</td></tr>
<tr><td>Estimate Over Minimum Salary Cap of $58,800,000 </td><td>$20,665,480</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>$61,445,199</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>$61,077,655</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Nicklas Backstrom</td>
<td>$9,500,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$8,631,720</td></tr>
<tr><td>Mark Giordano</td>
<td>$7,500,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$6,814,516</td></tr>
<tr><td>Alex Goligoski</td>
<td>$6,500,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$5,905,914</td></tr>
<tr><td>Jordan Eberle</td>
<td>$5,750,000 (6)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$5,224,462</td></tr>
<tr><td>Ryan Murray</td>
<td>$4,600,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$4,179,570</td></tr>
<tr><td>Tomas Tatar</td>
<td>$4,500,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$4,088,710</td></tr>
<tr><td>Travis Hamonic</td>
<td>$4,500,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$4,088,710</td></tr>
<tr><td>Tanner Pearson</td>
<td>$4,000,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$3,634,409</td></tr>
<tr><td>Craig Smith</td>
<td>$4,000,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$3,634,409</td></tr>
<tr><td>Johnny Boychuk</td>
<td>$4,000,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$3,634,409</td></tr>
<tr><td>Antti Raanta</td>
<td>$3,600,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$3,270,968</td></tr>
<tr><td>Nolan Patrick</td>
<td>$3,575,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$3,248,253</td></tr>
<tr><td>Patrick Marleau</td>
<td>$3,000,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$2,725,806</td></tr>
<tr><td>Colton Sissons</td>
<td>$2,975,000 (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$2,703,091</td></tr>
<tr><td>Luke Schenn</td>
<td>$2,500,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$2,271,505</td></tr>
<tr><td>Scott Laughton</td>
<td>$2,300,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$2,089,785</td></tr>
<tr><td>Milan Lucic</td>
<td>$2,250,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$2,044,355</td></tr>
<tr><td>Marcus Sorensen</td>
<td>$1,350,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$1,226,613</td></tr>
<tr><td>Jack Campbell</td>
<td>$1,340,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$1,217,527</td></tr>
<tr><td>Travis Sanheim</td>
<td>$1,263,333 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$1,147,867</td></tr>
<tr><td>Nic Dowd</td>
<td>$650,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$590,591</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>21</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $79,653,333</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $59,713,333</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $30,725,000</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $18,225,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $79,653,333</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $59,713,333</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $30,725,000</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $18,225,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $79,653,333</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $59,713,333</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $30,725,000</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $18,225,000</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Andrei Svechnikov</td>
<td>$357,500 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$324,825</td></tr>
<tr><td>Henri Jokiharju</td>
<td>$127,917 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$116,225</td></tr>
<tr><td>Dryden Hunt</td>
<td>$92,500 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$84,046</td></tr>
<tr><td>Dominic Turgeon</td>
<td>$91,917 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$83,516</td></tr>
<tr><td>MacKenzie Blackwood</td>
<td>$91,333 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$82,986</td></tr>
<tr><td>Jacob de La Rose</td>
<td>$90,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$81,774</td></tr>
<tr><td>Caleb Jones</td>
<td>$81,500 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$74,051</td></tr>
<tr><td>Drake Batherson</td>
<td>$77,333 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$70,265</td></tr>
<tr><td>David Warsofsky</td>
<td>$67,500 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$61,331</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>9</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $1,077,500</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $920,000</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $644,250</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $0</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $1,077,500</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $920,000</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $644,250</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $0</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="TeamFinancePro_CAR"><a id="Hurricanes">Hurricanes</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=6">Hurricanes Page</a> ]
[ <a href="OTHL-ProTeamRoster.php#Hurricanes">Pro Team Roster</a> ]
[ <a href="OTHL-ProTeamScoring.php#Hurricanes">Pro Team Scoring</a> ]
[ <a href="OTHL-TeamFinance.php#Hurricanes">Team Finance</a> ]
[ <a href="OTHL-ProTeamPlayersInfo.php#Hurricanes">Pro Team PlayersInfo</a> ]
[ <a href="OTHL-ProTeamLines.php#Hurricanes">Pro Team Lines</a> ]
[ <a href="OTHL-TeamProspects.php#Hurricanes">Team Prospects</a> ]
[ <a href="OTHL-ProTeamSchedule.php#Hurricanes">Pro Team Schedule</a> ]
[ <a href="OTHL-ProTeamStats.php#Hurricanes">Pro Team Stats</a> ]
[ <a href="OTHL-ProTeamStatsVS.php#Hurricanes">Pro Team Stats VS</a> ]
[ <a href="OTHL-TeamInjurySuspension.php#Hurricanes">Team Injury Suspension</a> ]
[ <a href="OTHL-TeamHistory.php#Hurricanes">Team History</a> ]
[ <a href="OTHL-TeamRecords.php#Hurricanes">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Hurricanes');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Hurricanes" style="display: block;">
<br /><br /><table class="STHSTableFullW"><tr><td style="vertical-align: top;width:440px;">
<table class="STHSFinance_TeamTable">
<tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_AreanaCapacity">Arena Capacity - Ticket Price<br />Attendance - %</h3></td></tr>
<tr><td class="STHSW250">Arena Name</td><td class="STHSW200">RBC Center</td></tr>
<tr><td>Level 1: </td><td>6000 - $170 - 5,835 - 97.25%</td></tr>
<tr><td>Level 2: </td><td>5000 - $136 - 3,704 - 74.07%</td></tr>
<tr><td>Level 3: </td><td>4000 - $111 - 2,899 - 72.46%</td></tr>
<tr><td>Level 4: </td><td>3000 - $96 - 1,906 - 63.54%</td></tr>
<tr><td>Luxury : </td><td>1000 - $230 - 992 - 99.20%</td></tr>
<tr><td>Total Capacity :</td><td>19000</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Farm Level 1: </td><td>2000 - $35 - 1,414 - 70.70%</td></tr>
<tr><td>Farm Level 2: </td><td>1000 - $0 - 778 - 77.75%</td></tr>
<tr><td>Farm Total Capacity :</td><td>3000</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Income">Income</h3></td></tr>
<tr><td>Home Games Left</td><td>37</td></tr>
<tr><td>Average Attendance - %</td><td>15,335 - 80.71%</td></tr>
<tr><td>Average Income per Game</td><td>$2,228,477</td></tr>
<tr><td>Year to Date Revenue</td><td>$8,913,908</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Home Games Left</td><td>37</td></tr>
<tr><td>Average Attendance - %</td><td>2,192 - 73.05%</td></tr>
<tr><td>Average Income per Game</td><td>$49,490</td></tr>
<tr><td>Year to Date Revenue</td><td>$197,960</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>$66,192,500</td></tr>
<tr><td>Farm Players Total Salaries</td><td>$2,225,083</td></tr>
<tr><td>Coaches Total Salaries</td><td>$5,000,000</td></tr>
<tr><td>Luxury Taxe Total</td><td>$0</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>$6,329,177</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>$251,403</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>$5,917,891</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>$0</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Pro Estimated Season Revenue</td><td>$82,453,649</td></tr>
<tr><td>Farm Estimated Season Revenue</td><td>$1,831,130</td></tr>
<tr><td>Pro Remaining Season Days</td><td>169</td></tr>
<tr><td>Pro Expenses Per Days</td><td>$380,067</td></tr>
<tr><td>Pro Estimated Expenses</td><td>$64,231,323</td></tr>
<tr><td>Farm Remaining Season Days</td><td>169</td></tr>
<tr><td>Farm Expenses Per Days</td><td>$14,651</td></tr>
<tr><td>Farm Estimated Expenses</td><td>$2,476,019</td></tr>
<tr><td>Estimated Season Expenses</td><td>$66,707,342</td></tr>
<tr><td>Estimated Season Salary Cap</td><td>$66,060,597</td></tr>
<tr><td>Estimate Under Maximum Salary Cap of $81,500,000</td><td>$15,439,403</td></tr>
<tr><td>Estimate Over Minimum Salary Cap of $58,800,000 </td><td>$7,260,597</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>$26,659,953</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>$44,237,390</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>David Backes</td>
<td>$8,000,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$7,268,817</td></tr>
<tr><td>Bobby Ryan</td>
<td>$7,000,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$6,360,215</td></tr>
<tr><td>James Neal</td>
<td>$6,500,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$5,905,914</td></tr>
<tr><td>Paul Stastny</td>
<td>$6,500,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$5,905,914</td></tr>
<tr><td>Wayne Simmonds</td>
<td>$4,750,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$4,315,860</td></tr>
<tr><td>Calvin de Haan</td>
<td>$4,550,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$4,134,140</td></tr>
<tr><td>Mathieu Perreault</td>
<td>$4,500,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$4,088,710</td></tr>
<tr><td>Jonathan Bernier</td>
<td>$4,200,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$3,816,129</td></tr>
<tr><td>Drake Caggiula</td>
<td>$3,775,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$3,429,973</td></tr>
<tr><td>Jan Rutta</td>
<td>$2,300,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$2,089,785</td></tr>
<tr><td>Tucker Poolman</td>
<td>$1,775,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$1,612,769</td></tr>
<tr><td>Connor Carrick</td>
<td>$1,650,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$1,499,194</td></tr>
<tr><td>Slater Koekkoek</td>
<td>$1,444,167 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$1,312,173</td></tr>
<tr><td>Pavel Francouz</td>
<td>$1,100,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$999,462</td></tr>
<tr><td>Nick Cousins</td>
<td>$1,000,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$908,602</td></tr>
<tr><td>Pontus Aberg</td>
<td>$1,000,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$908,602</td></tr>
<tr><td>Ilya Lyubushkin</td>
<td>$985,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$894,973</td></tr>
<tr><td>Boo Nieves</td>
<td>$925,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$840,457</td></tr>
<tr><td>Greg McKegg</td>
<td>$925,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$840,457</td></tr>
<tr><td>Byron Froese</td>
<td>$900,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$817,742</td></tr>
<tr><td>Ryan Hartman</td>
<td>$863,333 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$784,426</td></tr>
<tr><td>MacKenzie Weegar</td>
<td>$800,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$726,882</td></tr>
<tr><td>Joakim Ryan</td>
<td>$750,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$681,452</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>23</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $66,192,500</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $41,160,000</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $29,210,000</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $12,150,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $66,254,167</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $41,160,000</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $29,210,000</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $12,150,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $66,192,500</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $41,160,000</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $29,210,000</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $12,150,000</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Brett Sutter</td>
<td>$200,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$181,720</td></tr>
<tr><td>Casey Mittelstadt</td>
<td>$149,167 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$135,533</td></tr>
<tr><td>Jesse Puljujarvi</td>
<td>$147,500 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$134,019</td></tr>
<tr><td>Dylan Sikura</td>
<td>$138,750 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$126,069</td></tr>
<tr><td>Jordan Schmaltz</td>
<td>$120,833 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$109,789</td></tr>
<tr><td>Kevin Boyle</td>
<td>$97,500 (4)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$88,589</td></tr>
<tr><td>Samuel Girard</td>
<td>$93,583 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$85,030</td></tr>
<tr><td>Dominik Kahun</td>
<td>$92,500 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$84,046</td></tr>
<tr><td>Daniel Brickley</td>
<td>$92,500 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$84,046</td></tr>
<tr><td>Filip Hronek</td>
<td>$92,500 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$84,046</td></tr>
<tr><td>Rem Pitlick</td>
<td>$92,500 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$84,046</td></tr>
<tr><td>Nick Paul</td>
<td>$90,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$81,774</td></tr>
<tr><td>Marcus Pettersson</td>
<td>$89,417 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$81,244</td></tr>
<tr><td>Michael Mersch</td>
<td>$87,500 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$79,503</td></tr>
<tr><td>Rasmus Andersson</td>
<td>$86,333 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$78,443</td></tr>
<tr><td>Andy Andreoff</td>
<td>$85,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$77,231</td></tr>
<tr><td>Ian Scott</td>
<td>$82,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$74,505</td></tr>
<tr><td>Christian Jaros</td>
<td>$80,167 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$72,840</td></tr>
<tr><td>Nathan Gerbe</td>
<td>$80,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$72,688</td></tr>
<tr><td>Nicholas Baptiste</td>
<td>$80,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$72,688</td></tr>
<tr><td>Riley Stillman</td>
<td>$77,333 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$70,265</td></tr>
<tr><td>Jordan Szwarz</td>
<td>$70,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$63,602</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>22</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $2,225,083</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $1,741,250</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $339,167</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $97,500</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $2,225,083</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $1,741,250</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $339,167</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $97,500</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="TeamFinancePro_NYI"><a id="Islanders">Islanders</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=19">Islanders Page</a> ]
[ <a href="OTHL-ProTeamRoster.php#Islanders">Pro Team Roster</a> ]
[ <a href="OTHL-ProTeamScoring.php#Islanders">Pro Team Scoring</a> ]
[ <a href="OTHL-TeamFinance.php#Islanders">Team Finance</a> ]
[ <a href="OTHL-ProTeamPlayersInfo.php#Islanders">Pro Team PlayersInfo</a> ]
[ <a href="OTHL-ProTeamLines.php#Islanders">Pro Team Lines</a> ]
[ <a href="OTHL-TeamProspects.php#Islanders">Team Prospects</a> ]
[ <a href="OTHL-ProTeamSchedule.php#Islanders">Pro Team Schedule</a> ]
[ <a href="OTHL-ProTeamStats.php#Islanders">Pro Team Stats</a> ]
[ <a href="OTHL-ProTeamStatsVS.php#Islanders">Pro Team Stats VS</a> ]
[ <a href="OTHL-TeamInjurySuspension.php#Islanders">Team Injury Suspension</a> ]
[ <a href="OTHL-TeamHistory.php#Islanders">Team History</a> ]
[ <a href="OTHL-TeamRecords.php#Islanders">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Islanders');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Islanders" style="display: block;">
<h2 class="STHSTeamFinance_TeamOverUnderSalaryCap">Islanders is over or under the salary cap!</h2>
<br /><br /><table class="STHSTableFullW"><tr><td style="vertical-align: top;width:440px;">
<table class="STHSFinance_TeamTable">
<tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_AreanaCapacity">Arena Capacity - Ticket Price<br />Attendance - %</h3></td></tr>
<tr><td class="STHSW250">Arena Name</td><td class="STHSW200">Barclays Center</td></tr>
<tr><td>Level 1: </td><td>6000 - $220 - 3,794 - 63.24%</td></tr>
<tr><td>Level 2: </td><td>5000 - $165 - 3,106 - 62.12%</td></tr>
<tr><td>Level 3: </td><td>4000 - $135 - 2,581 - 64.53%</td></tr>
<tr><td>Level 4: </td><td>3000 - $110 - 1,620 - 54.00%</td></tr>
<tr><td>Luxury : </td><td>1000 - $300 - 704 - 70.40%</td></tr>
<tr><td>Total Capacity :</td><td>19000</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Farm Level 1: </td><td>2000 - $19 - 1,429 - 71.47%</td></tr>
<tr><td>Farm Level 2: </td><td>1000 - $0 - 752 - 75.20%</td></tr>
<tr><td>Farm Total Capacity :</td><td>3000</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Income">Income</h3></td></tr>
<tr><td>Home Games Left</td><td>36</td></tr>
<tr><td>Average Attendance - %</td><td>11,805 - 62.13%</td></tr>
<tr><td>Average Income per Game</td><td>$2,085,060</td></tr>
<tr><td>Year to Date Revenue</td><td>$10,425,300</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Home Games Left</td><td>36</td></tr>
<tr><td>Average Attendance - %</td><td>2,181 - 72.71%</td></tr>
<tr><td>Average Income per Game</td><td>$27,159</td></tr>
<tr><td>Year to Date Revenue</td><td>$135,793</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>$81,794,166</td></tr>
<tr><td>Farm Players Total Salaries</td><td>$440,000</td></tr>
<tr><td>Coaches Total Salaries</td><td>$1,900,000</td></tr>
<tr><td>Luxury Taxe Total</td><td>$0</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>$7,536,183</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>$133,928</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>$7,444,788</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>$0</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Pro Estimated Season Revenue</td><td>$75,062,160</td></tr>
<tr><td>Farm Estimated Season Revenue</td><td>$977,710</td></tr>
<tr><td>Pro Remaining Season Days</td><td>169</td></tr>
<tr><td>Pro Expenses Per Days</td><td>$445,130</td></tr>
<tr><td>Pro Estimated Expenses</td><td>$75,226,970</td></tr>
<tr><td>Farm Remaining Season Days</td><td>169</td></tr>
<tr><td>Farm Expenses Per Days</td><td>$7,204</td></tr>
<tr><td>Farm Estimated Expenses</td><td>$1,217,476</td></tr>
<tr><td>Estimated Season Expenses</td><td>$76,444,446</td></tr>
<tr><td>Estimated Season Salary Cap</td><td>$81,763,214</td></tr>
<tr><td>Estimate Under Maximum Salary Cap of $81,500,000</td><td><span style="color:red">-$263,214</span></td></tr>
<tr><td>Estimate Over Minimum Salary Cap of $58,800,000 </td><td>$22,963,214</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>$84,258,651</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>$83,854,075</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Steven Stamkos</td>
<td>$9,500,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$8,631,720</td></tr>
<tr><td>Joe Pavelski</td>
<td>$8,600,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$7,813,978</td></tr>
<tr><td>Victor Hedman</td>
<td>$8,000,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$7,268,817</td></tr>
<tr><td>Ryan O'Reilly</td>
<td>$7,750,000 (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$7,041,667</td></tr>
<tr><td>Jakub Voracek</td>
<td>$7,750,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$7,041,667</td></tr>
<tr><td>Ryan Ellis</td>
<td>$6,250,000 (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$5,678,763</td></tr>
<tr><td>Alexander Radulov</td>
<td>$6,250,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$5,678,763</td></tr>
<tr><td>Colton Parayko</td>
<td>$5,300,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$4,815,591</td></tr>
<tr><td>Philipp Grubauer</td>
<td>$3,330,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$3,025,645</td></tr>
<tr><td>Brad Richardson</td>
<td>$2,750,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$2,498,656</td></tr>
<tr><td>Calle Jarnkrok</td>
<td>$2,250,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$2,044,355</td></tr>
<tr><td>Josh Anderson</td>
<td>$2,000,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$1,817,204</td></tr>
<tr><td>Ryan Pulock (Out of Payroll)</td>
<td>$2,000,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$1,817,204</td></tr>
<tr><td>Matthew Nieto</td>
<td>$1,975,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$1,794,489</td></tr>
<tr><td>Mark Barberio</td>
<td>$1,450,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$1,317,473</td></tr>
<tr><td>Connor Brown</td>
<td>$1,300,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$1,181,183</td></tr>
<tr><td>Mathew Barzal</td>
<td>$1,263,333 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$1,147,867</td></tr>
<tr><td>Daniel Carr</td>
<td>$1,200,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$1,090,323</td></tr>
<tr><td>Nikolay Goldobin</td>
<td>$1,075,833 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$977,504</td></tr>
<tr><td>Dylan DeMelo</td>
<td>$1,000,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$908,602</td></tr>
<tr><td>Scott Harrington</td>
<td>$750,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$681,452</td></tr>
<tr><td>Michael Hutchinson</td>
<td>$700,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$636,022</td></tr>
<tr><td>Connor Brickley</td>
<td>$700,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$636,022</td></tr>
<tr><td>Brandon Halverson</td>
<td>$650,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$590,591</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>24</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $83,794,166</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $67,969,166</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $43,980,000</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $29,750,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $83,794,166</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $67,969,166</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $43,980,000</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $29,750,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $83,794,166</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $67,969,166</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $43,980,000</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $29,750,000</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Landon Ferraro</td>
<td>$80,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$72,688</td></tr>
<tr><td>Taylor Leier</td>
<td>$80,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$72,688</td></tr>
<tr><td>Chase De Leo</td>
<td>$75,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$68,145</td></tr>
<tr><td>Brett Lernout</td>
<td>$70,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$63,602</td></tr>
<tr><td>Max McCormick</td>
<td>$70,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$63,602</td></tr>
<tr><td>Alan Quine</td>
<td>$65,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$59,059</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>6</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $440,000</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $75,000</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $0</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $440,000</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $75,000</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $0</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="TeamFinancePro_WPG"><a id="Jets">Jets</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=2">Jets Page</a> ]
[ <a href="OTHL-ProTeamRoster.php#Jets">Pro Team Roster</a> ]
[ <a href="OTHL-ProTeamScoring.php#Jets">Pro Team Scoring</a> ]
[ <a href="OTHL-TeamFinance.php#Jets">Team Finance</a> ]
[ <a href="OTHL-ProTeamPlayersInfo.php#Jets">Pro Team PlayersInfo</a> ]
[ <a href="OTHL-ProTeamLines.php#Jets">Pro Team Lines</a> ]
[ <a href="OTHL-TeamProspects.php#Jets">Team Prospects</a> ]
[ <a href="OTHL-ProTeamSchedule.php#Jets">Pro Team Schedule</a> ]
[ <a href="OTHL-ProTeamStats.php#Jets">Pro Team Stats</a> ]
[ <a href="OTHL-ProTeamStatsVS.php#Jets">Pro Team Stats VS</a> ]
[ <a href="OTHL-TeamInjurySuspension.php#Jets">Team Injury Suspension</a> ]
[ <a href="OTHL-TeamHistory.php#Jets">Team History</a> ]
[ <a href="OTHL-TeamRecords.php#Jets">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Jets');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Jets" style="display: block;">
<br /><br /><table class="STHSTableFullW"><tr><td style="vertical-align: top;width:440px;">
<table class="STHSFinance_TeamTable">
<tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_AreanaCapacity">Arena Capacity - Ticket Price<br />Attendance - %</h3></td></tr>
<tr><td class="STHSW250">Arena Name</td><td class="STHSW200">MTS Center</td></tr>
<tr><td>Level 1: </td><td>6000 - $130 - 5,922 - 98.70%</td></tr>
<tr><td>Level 2: </td><td>5000 - $80 - 4,970 - 99.40%</td></tr>
<tr><td>Level 3: </td><td>4000 - $60 - 3,967 - 99.16%</td></tr>
<tr><td>Level 4: </td><td>3000 - $50 - 2,928 - 97.61%</td></tr>
<tr><td>Luxury : </td><td>1000 - $275 - 783 - 78.33%</td></tr>
<tr><td>Total Capacity :</td><td>19000</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Farm Level 1: </td><td>2000 - $33 - 1,481 - 74.06%</td></tr>
<tr><td>Farm Level 2: </td><td>1000 - $0 - 783 - 78.30%</td></tr>
<tr><td>Farm Total Capacity :</td><td>3000</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Income">Income</h3></td></tr>
<tr><td>Home Games Left</td><td>37</td></tr>
<tr><td>Average Attendance - %</td><td>18,570 - 97.74%</td></tr>
<tr><td>Average Income per Game</td><td>$1,767,289</td></tr>
<tr><td>Year to Date Revenue</td><td>$7,069,155</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Home Games Left</td><td>37</td></tr>
<tr><td>Average Attendance - %</td><td>2,264 - 75.48%</td></tr>
<tr><td>Average Income per Game</td><td>$48,881</td></tr>
<tr><td>Year to Date Revenue</td><td>$195,525</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>$75,702,499</td></tr>
<tr><td>Farm Players Total Salaries</td><td>$519,583</td></tr>
<tr><td>Coaches Total Salaries</td><td>$1,650,000</td></tr>
<tr><td>Luxury Taxe Total</td><td>$0</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>$6,745,365</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>$122,985</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>$6,658,541</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>$0</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Pro Estimated Season Revenue</td><td>$65,389,684</td></tr>
<tr><td>Farm Estimated Season Revenue</td><td>$1,808,606</td></tr>
<tr><td>Pro Remaining Season Days</td><td>169</td></tr>
<tr><td>Pro Expenses Per Days</td><td>$412,110</td></tr>
<tr><td>Pro Estimated Expenses</td><td>$69,646,590</td></tr>
<tr><td>Farm Remaining Season Days</td><td>169</td></tr>
<tr><td>Farm Expenses Per Days</td><td>$6,557</td></tr>
<tr><td>Farm Estimated Expenses</td><td>$1,108,133</td></tr>
<tr><td>Estimated Season Expenses</td><td>$70,754,723</td></tr>
<tr><td>Estimated Season Salary Cap</td><td>$75,442,048</td></tr>
<tr><td>Estimate Under Maximum Salary Cap of $81,500,000</td><td>$6,057,952</td></tr>
<tr><td>Estimate Over Minimum Salary Cap of $58,800,000 </td><td>$16,642,048</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>$18,056,402</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>$14,499,969</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Jonathan Toews</td>
<td>$10,250,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$9,313,172</td></tr>
<tr><td>Eric Staal</td>
<td>$9,400,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$8,540,860</td></tr>
<tr><td>Kevin Shattenkirk</td>
<td>$6,500,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$5,905,914</td></tr>
<tr><td>Mike Green</td>
<td>$5,375,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$4,883,737</td></tr>
<tr><td>Sami Vatanen</td>
<td>$4,875,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$4,429,435</td></tr>
<tr><td>Olli Maatta</td>
<td>$4,085,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$3,711,640</td></tr>
<tr><td>Joonas Donskoi</td>
<td>$3,900,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$3,543,548</td></tr>
<tr><td>Matt Murray</td>
<td>$3,750,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$3,407,258</td></tr>
<tr><td>Jesperi Kotkaniemi</td>
<td>$3,425,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$3,111,962</td></tr>
<tr><td>Miro Heiskanen</td>
<td>$3,394,166 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$3,083,947</td></tr>
<tr><td>Mikkel Boedker</td>
<td>$3,300,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$2,998,387</td></tr>
<tr><td>Kasperi Kapanen</td>
<td>$3,200,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$2,907,527</td></tr>
<tr><td>Eeli Tolvanen</td>
<td>$3,115,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$2,830,296</td></tr>
<tr><td>Erik Haula</td>
<td>$2,750,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$2,498,656</td></tr>
<tr><td>Matthew Tkachuk</td>
<td>$1,775,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$1,612,769</td></tr>
<tr><td>Julius Honka</td>
<td>$1,363,333 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$1,238,727</td></tr>
<tr><td>Scott Wilson</td>
<td>$1,050,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$954,032</td></tr>
<tr><td>Juuse Saros (Out of Payroll)</td>
<td>$925,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$840,457</td></tr>
<tr><td>Roope Hintz</td>
<td>$925,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$840,457</td></tr>
<tr><td>Juuso Riikola</td>
<td>$925,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$840,457</td></tr>
<tr><td>Rob O'Gara</td>
<td>$925,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$840,457</td></tr>
<tr><td>Chris Thorburn (Out of Payroll)</td>
<td>$900,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$817,742</td></tr>
<tr><td>Ben Street (Out of Payroll)</td>
<td>$750,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$681,452</td></tr>
<tr><td>Markus Hannikainen</td>
<td>$745,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$676,909</td></tr>
<tr><td>Christopher Gibson</td>
<td>$675,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$613,306</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>25</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $78,277,499</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $37,669,166</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $21,344,166</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $3,900,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $78,277,499</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $37,669,166</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $21,344,166</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $3,900,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $78,277,499</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $37,669,166</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $21,344,166</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $3,900,000</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Ryan Lindgren</td>
<td>$110,000 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$99,946</td></tr>
<tr><td>Vitek Vanecek</td>
<td>$92,500 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$84,046</td></tr>
<tr><td>John Quenneville</td>
<td>$89,417 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$81,244</td></tr>
<tr><td>Guillaume Brisebois</td>
<td>$88,833 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$80,714</td></tr>
<tr><td>Clark Bishop</td>
<td>$71,333 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$64,814</td></tr>
<tr><td>Brian Strait</td>
<td>$67,500 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$61,331</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>6</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $519,583</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $427,083</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $359,583</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $0</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $519,583</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $427,083</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $359,583</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $0</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="TeamFinancePro_LAK"><a id="Kings">Kings</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=14">Kings Page</a> ]
[ <a href="OTHL-ProTeamRoster.php#Kings">Pro Team Roster</a> ]
[ <a href="OTHL-ProTeamScoring.php#Kings">Pro Team Scoring</a> ]
[ <a href="OTHL-TeamFinance.php#Kings">Team Finance</a> ]
[ <a href="OTHL-ProTeamPlayersInfo.php#Kings">Pro Team PlayersInfo</a> ]
[ <a href="OTHL-ProTeamLines.php#Kings">Pro Team Lines</a> ]
[ <a href="OTHL-TeamProspects.php#Kings">Team Prospects</a> ]
[ <a href="OTHL-ProTeamSchedule.php#Kings">Pro Team Schedule</a> ]
[ <a href="OTHL-ProTeamStats.php#Kings">Pro Team Stats</a> ]
[ <a href="OTHL-ProTeamStatsVS.php#Kings">Pro Team Stats VS</a> ]
[ <a href="OTHL-TeamInjurySuspension.php#Kings">Team Injury Suspension</a> ]
[ <a href="OTHL-TeamHistory.php#Kings">Team History</a> ]
[ <a href="OTHL-TeamRecords.php#Kings">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Kings');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Kings" style="display: block;">
<br /><br /><table class="STHSTableFullW"><tr><td style="vertical-align: top;width:440px;">
<table class="STHSFinance_TeamTable">
<tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_AreanaCapacity">Arena Capacity - Ticket Price<br />Attendance - %</h3></td></tr>
<tr><td class="STHSW250">Arena Name</td><td class="STHSW200">Staples Center</td></tr>
<tr><td>Level 1: </td><td>6000 - $225 - 3,847 - 64.12%</td></tr>
<tr><td>Level 2: </td><td>5000 - $165 - 3,290 - 65.79%</td></tr>
<tr><td>Level 3: </td><td>4000 - $135 - 2,446 - 61.14%</td></tr>
<tr><td>Level 4: </td><td>3000 - $115 - 1,563 - 52.11%</td></tr>
<tr><td>Luxury : </td><td>1000 - $300 - 711 - 71.10%</td></tr>
<tr><td>Total Capacity :</td><td>19000</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Farm Level 1: </td><td>2000 - $40 - 1,541 - 77.06%</td></tr>
<tr><td>Farm Level 2: </td><td>1000 - $0 - 747 - 74.65%</td></tr>
<tr><td>Farm Total Capacity :</td><td>3000</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Income">Income</h3></td></tr>
<tr><td>Home Games Left</td><td>37</td></tr>
<tr><td>Average Attendance - %</td><td>11,857 - 62.40%</td></tr>
<tr><td>Average Income per Game</td><td>$2,131,649</td></tr>
<tr><td>Year to Date Revenue</td><td>$8,526,595</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Home Games Left</td><td>37</td></tr>
<tr><td>Average Attendance - %</td><td>2,288 - 76.26%</td></tr>
<tr><td>Average Income per Game</td><td>$61,650</td></tr>
<tr><td>Year to Date Revenue</td><td>$246,600</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>$79,855,834</td></tr>
<tr><td>Farm Players Total Salaries</td><td>$659,633</td></tr>
<tr><td>Coaches Total Salaries</td><td>$4,200,000</td></tr>
<tr><td>Luxury Taxe Total</td><td>$0</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>$7,618,550</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>$124,270</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>$7,298,644</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>$0</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Pro Estimated Season Revenue</td><td>$78,871,004</td></tr>
<tr><td>Farm Estimated Season Revenue</td><td>$2,281,050</td></tr>
<tr><td>Pro Remaining Season Days</td><td>169</td></tr>
<tr><td>Pro Expenses Per Days</td><td>$448,150</td></tr>
<tr><td>Pro Estimated Expenses</td><td>$75,737,350</td></tr>
<tr><td>Farm Remaining Season Days</td><td>169</td></tr>
<tr><td>Farm Expenses Per Days</td><td>$7,310</td></tr>
<tr><td>Farm Estimated Expenses</td><td>$1,235,390</td></tr>
<tr><td>Estimated Season Expenses</td><td>$76,972,740</td></tr>
<tr><td>Estimated Season Salary Cap</td><td>$79,855,752</td></tr>
<tr><td>Estimate Under Maximum Salary Cap of $81,500,000</td><td>$1,644,248</td></tr>
<tr><td>Estimate Over Minimum Salary Cap of $58,800,000 </td><td>$21,055,752</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>$41,689,962</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>$45,869,276</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Alex Ovechkin</td>
<td>$12,500,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$11,357,527</td></tr>
<tr><td>P.K. Subban</td>
<td>$9,500,000 (6)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$8,631,720</td></tr>
<tr><td>Devan Dubnyk</td>
<td>$6,250,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$5,678,763</td></tr>
<tr><td>Jonathan Huberdeau</td>
<td>$6,000,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$5,451,613</td></tr>
<tr><td>Nathan MacKinnon</td>
<td>$6,000,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$5,451,613</td></tr>
<tr><td>Nate Schmidt</td>
<td>$5,625,000 (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$5,110,887</td></tr>
<tr><td>Seth Jones</td>
<td>$5,400,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$4,906,452</td></tr>
<tr><td>Alex Galchenyuk</td>
<td>$4,900,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$4,452,151</td></tr>
<tr><td>Elias Lindholm</td>
<td>$4,850,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$4,406,720</td></tr>
<tr><td>Yanni Gourde</td>
<td>$4,750,000 (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$4,315,860</td></tr>
<tr><td>Zack Kassian</td>
<td>$1,950,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$1,771,774</td></tr>
<tr><td>Neal Pionk</td>
<td>$1,775,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$1,612,769</td></tr>
<tr><td>Mitch Marner</td>
<td>$1,744,167 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$1,584,754</td></tr>
<tr><td>Brock Boeser</td>
<td>$1,491,667 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$1,355,332</td></tr>
<tr><td>Malcolm Subban</td>
<td>$1,400,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$1,272,043</td></tr>
<tr><td>Jordan Greenway</td>
<td>$1,255,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$1,140,296</td></tr>
<tr><td>Frederik Gauthier</td>
<td>$990,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$899,516</td></tr>
<tr><td>Adam Pelech</td>
<td>$925,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$840,457</td></tr>
<tr><td>Miles Wood</td>
<td>$925,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$840,457</td></tr>
<tr><td>Christian Wolanin</td>
<td>$925,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$840,457</td></tr>
<tr><td>Riley Nash</td>
<td>$700,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$636,022</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>21</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $79,855,834</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $50,071,667</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $45,405,000</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $43,225,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $79,855,834</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $50,071,667</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $45,405,000</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $43,225,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $79,855,834</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $50,071,667</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $45,405,000</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $43,225,000</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Calle Rosen</td>
<td>$177,500 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$161,277</td></tr>
<tr><td>Andreas Borgman</td>
<td>$177,500 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$161,277</td></tr>
<tr><td>Duncan Siemens</td>
<td>$138,833 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$126,144</td></tr>
<tr><td>Richard Bachman</td>
<td>$90,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$81,774</td></tr>
<tr><td>Mason Appleton</td>
<td>$75,800 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$68,872</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>5</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $659,633</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $569,633</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $0</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $659,633</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $569,633</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $0</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="TeamFinancePro_TBL"><a id="Lightning">Lightning</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=27">Lightning Page</a> ]
[ <a href="OTHL-ProTeamRoster.php#Lightning">Pro Team Roster</a> ]
[ <a href="OTHL-ProTeamScoring.php#Lightning">Pro Team Scoring</a> ]
[ <a href="OTHL-TeamFinance.php#Lightning">Team Finance</a> ]
[ <a href="OTHL-ProTeamPlayersInfo.php#Lightning">Pro Team PlayersInfo</a> ]
[ <a href="OTHL-ProTeamLines.php#Lightning">Pro Team Lines</a> ]
[ <a href="OTHL-TeamProspects.php#Lightning">Team Prospects</a> ]
[ <a href="OTHL-ProTeamSchedule.php#Lightning">Pro Team Schedule</a> ]
[ <a href="OTHL-ProTeamStats.php#Lightning">Pro Team Stats</a> ]
[ <a href="OTHL-ProTeamStatsVS.php#Lightning">Pro Team Stats VS</a> ]
[ <a href="OTHL-TeamInjurySuspension.php#Lightning">Team Injury Suspension</a> ]
[ <a href="OTHL-TeamHistory.php#Lightning">Team History</a> ]
[ <a href="OTHL-TeamRecords.php#Lightning">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Lightning');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Lightning" style="display: block;">
<br /><br /><table class="STHSTableFullW"><tr><td style="vertical-align: top;width:440px;">
<table class="STHSFinance_TeamTable">
<tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_AreanaCapacity">Arena Capacity - Ticket Price<br />Attendance - %</h3></td></tr>
<tr><td class="STHSW250">Arena Name</td><td class="STHSW200">St.Pete Times Forum</td></tr>
<tr><td>Level 1: </td><td>6000 - $225 - 3,741 - 62.35%</td></tr>
<tr><td>Level 2: </td><td>5000 - $165 - 3,082 - 61.64%</td></tr>
<tr><td>Level 3: </td><td>4000 - $135 - 2,560 - 64.00%</td></tr>
<tr><td>Level 4: </td><td>3000 - $115 - 1,618 - 53.93%</td></tr>
<tr><td>Luxury : </td><td>1000 - $300 - 701 - 70.10%</td></tr>
<tr><td>Total Capacity :</td><td>19000</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Farm Level 1: </td><td>2000 - $30 - 1,504 - 75.20%</td></tr>
<tr><td>Farm Level 2: </td><td>1000 - $0 - 768 - 76.80%</td></tr>
<tr><td>Farm Total Capacity :</td><td>3000</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Income">Income</h3></td></tr>
<tr><td>Home Games Left</td><td>40</td></tr>
<tr><td>Average Attendance - %</td><td>11,702 - 61.59%</td></tr>
<tr><td>Average Income per Game</td><td>$2,092,225</td></tr>
<tr><td>Year to Date Revenue</td><td>$2,092,225</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Home Games Left</td><td>40</td></tr>
<tr><td>Average Attendance - %</td><td>2,272 - 75.73%</td></tr>
<tr><td>Average Income per Game</td><td>$45,120</td></tr>
<tr><td>Year to Date Revenue</td><td>$45,120</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>$71,893,000</td></tr>
<tr><td>Farm Players Total Salaries</td><td>$585,000</td></tr>
<tr><td>Coaches Total Salaries</td><td>$5,850,000</td></tr>
<tr><td>Luxury Taxe Total</td><td>$0</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>$6,980,673</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>$131,155</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>$6,523,696</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>$0</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Pro Estimated Season Revenue</td><td>$83,689,000</td></tr>
<tr><td>Farm Estimated Season Revenue</td><td>$1,804,800</td></tr>
<tr><td>Pro Remaining Season Days</td><td>169</td></tr>
<tr><td>Pro Expenses Per Days</td><td>$413,403</td></tr>
<tr><td>Pro Estimated Expenses</td><td>$69,865,107</td></tr>
<tr><td>Farm Remaining Season Days</td><td>169</td></tr>
<tr><td>Farm Expenses Per Days</td><td>$7,715</td></tr>
<tr><td>Farm Estimated Expenses</td><td>$1,303,835</td></tr>
<tr><td>Estimated Season Expenses</td><td>$71,168,942</td></tr>
<tr><td>Estimated Season Salary Cap</td><td>$71,845,914</td></tr>
<tr><td>Estimate Under Maximum Salary Cap of $81,500,000</td><td>$9,654,086</td></tr>
<tr><td>Estimate Over Minimum Salary Cap of $58,800,000 </td><td>$13,045,914</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>-$4,696,850</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>$9,628,008</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>John Tavares</td>
<td>$11,000,000 (6)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$9,994,624</td></tr>
<tr><td>Cam Atkinson</td>
<td>$5,900,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$5,360,753</td></tr>
<tr><td>Mike Hoffman</td>
<td>$5,750,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$5,224,462</td></tr>
<tr><td>Ondrej Palat</td>
<td>$5,750,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$5,224,462</td></tr>
<tr><td>Esa Lindell</td>
<td>$5,200,000 (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$4,724,731</td></tr>
<tr><td>Zach Bogosian</td>
<td>$5,060,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$4,597,527</td></tr>
<tr><td>Marc Methot</td>
<td>$4,500,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$4,088,710</td></tr>
<tr><td>Brandon Sutter</td>
<td>$4,125,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$3,747,984</td></tr>
<tr><td>Vladimir Sobotka</td>
<td>$3,500,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$3,180,108</td></tr>
<tr><td>Sam Gagner</td>
<td>$3,150,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$2,862,097</td></tr>
<tr><td>Adam McQuaid</td>
<td>$2,850,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$2,589,516</td></tr>
<tr><td>Frank Vatrano</td>
<td>$2,533,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$2,301,489</td></tr>
<tr><td>Brian Elliott</td>
<td>$2,000,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$1,817,204</td></tr>
<tr><td>Magnus Paajarvi</td>
<td>$1,900,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$1,726,344</td></tr>
<tr><td>Kevin Connauton</td>
<td>$1,575,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$1,431,048</td></tr>
<tr><td>Josh Leivo</td>
<td>$1,500,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$1,362,903</td></tr>
<tr><td>Derick Brassard</td>
<td>$1,200,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$1,090,323</td></tr>
<tr><td>Tyler Motte</td>
<td>$975,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$885,887</td></tr>
<tr><td>Connor Hellebuyck</td>
<td>$925,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$840,457</td></tr>
<tr><td>Miikka Salomaki</td>
<td>$900,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$817,742</td></tr>
<tr><td>Tom Kuhnhackl</td>
<td>$850,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$772,312</td></tr>
<tr><td>Justin Falk</td>
<td>$750,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$681,452</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>22</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $71,893,000</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $51,293,000</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $30,383,000</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $21,950,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $71,893,000</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $51,293,000</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $30,383,000</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $21,950,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $71,893,000</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $51,293,000</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $30,383,000</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $21,950,000</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Lawrence Pilut</td>
<td>$92,500 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$84,046</td></tr>
<tr><td>Martin Marincin</td>
<td>$92,500 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$84,046</td></tr>
<tr><td>Matt Tomkins</td>
<td>$92,500 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$84,046</td></tr>
<tr><td>Seth Helgeson</td>
<td>$90,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$81,774</td></tr>
<tr><td>Liam O'Brien</td>
<td>$75,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$68,145</td></tr>
<tr><td>Alexandre Grenier</td>
<td>$72,500 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$65,874</td></tr>
<tr><td>Francois Brassard</td>
<td>$70,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$63,602</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>7</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $585,000</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $345,000</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $0</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $585,000</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $345,000</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $0</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="TeamFinancePro_TOR"><a id="MapleLeafs">Maple Leafs</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=28">Maple Leafs Page</a> ]
[ <a href="OTHL-ProTeamRoster.php#MapleLeafs">Pro Team Roster</a> ]
[ <a href="OTHL-ProTeamScoring.php#MapleLeafs">Pro Team Scoring</a> ]
[ <a href="OTHL-TeamFinance.php#MapleLeafs">Team Finance</a> ]
[ <a href="OTHL-ProTeamPlayersInfo.php#MapleLeafs">Pro Team PlayersInfo</a> ]
[ <a href="OTHL-ProTeamLines.php#MapleLeafs">Pro Team Lines</a> ]
[ <a href="OTHL-TeamProspects.php#MapleLeafs">Team Prospects</a> ]
[ <a href="OTHL-ProTeamSchedule.php#MapleLeafs">Pro Team Schedule</a> ]
[ <a href="OTHL-ProTeamStats.php#MapleLeafs">Pro Team Stats</a> ]
[ <a href="OTHL-ProTeamStatsVS.php#MapleLeafs">Pro Team Stats VS</a> ]
[ <a href="OTHL-TeamInjurySuspension.php#MapleLeafs">Team Injury Suspension</a> ]
[ <a href="OTHL-TeamHistory.php#MapleLeafs">Team History</a> ]
[ <a href="OTHL-TeamRecords.php#MapleLeafs">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_MapleLeafs');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_MapleLeafs" style="display: block;">
<br /><br /><table class="STHSTableFullW"><tr><td style="vertical-align: top;width:440px;">
<table class="STHSFinance_TeamTable">
<tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_AreanaCapacity">Arena Capacity - Ticket Price<br />Attendance - %</h3></td></tr>
<tr><td class="STHSW250">Arena Name</td><td class="STHSW200">Air Canada Centre</td></tr>
<tr><td>Level 1: </td><td>6000 - $166 - 5,672 - 94.54%</td></tr>
<tr><td>Level 2: </td><td>5000 - $136 - 3,784 - 75.68%</td></tr>
<tr><td>Level 3: </td><td>4000 - $116 - 2,930 - 73.26%</td></tr>
<tr><td>Level 4: </td><td>3000 - $65 - 2,860 - 95.34%</td></tr>
<tr><td>Luxury : </td><td>1000 - $250 - 933 - 93.30%</td></tr>
<tr><td>Total Capacity :</td><td>19000</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Farm Level 1: </td><td>2000 - $35 - 1,526 - 76.30%</td></tr>
<tr><td>Farm Level 2: </td><td>1000 - $0 - 726 - 72.60%</td></tr>
<tr><td>Farm Total Capacity :</td><td>3000</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Income">Income</h3></td></tr>
<tr><td>Home Games Left</td><td>36</td></tr>
<tr><td>Average Attendance - %</td><td>16,180 - 85.16%</td></tr>
<tr><td>Average Income per Game</td><td>$2,215,359</td></tr>
<tr><td>Year to Date Revenue</td><td>$11,076,795</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Home Games Left</td><td>36</td></tr>
<tr><td>Average Attendance - %</td><td>2,252 - 75.07%</td></tr>
<tr><td>Average Income per Game</td><td>$53,410</td></tr>
<tr><td>Year to Date Revenue</td><td>$267,050</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>$75,500,000</td></tr>
<tr><td>Farm Players Total Salaries</td><td>$874,216</td></tr>
<tr><td>Coaches Total Salaries</td><td>$3,750,000</td></tr>
<tr><td>Luxury Taxe Total</td><td>$0</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>$6,840,454</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>$148,444</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>$6,566,261</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>$0</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Pro Estimated Season Revenue</td><td>$79,752,924</td></tr>
<tr><td>Farm Estimated Season Revenue</td><td>$1,922,760</td></tr>
<tr><td>Pro Remaining Season Days</td><td>169</td></tr>
<tr><td>Pro Expenses Per Days</td><td>$422,043</td></tr>
<tr><td>Pro Estimated Expenses</td><td>$71,325,267</td></tr>
<tr><td>Farm Remaining Season Days</td><td>169</td></tr>
<tr><td>Farm Expenses Per Days</td><td>$8,732</td></tr>
<tr><td>Farm Estimated Expenses</td><td>$1,475,708</td></tr>
<tr><td>Estimated Season Expenses</td><td>$72,800,975</td></tr>
<tr><td>Estimated Season Salary Cap</td><td>$75,165,727</td></tr>
<tr><td>Estimate Under Maximum Salary Cap of $81,500,000</td><td>$6,334,273</td></tr>
<tr><td>Estimate Over Minimum Salary Cap of $58,800,000 </td><td>$16,365,727</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>$139,376,883</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>$148,251,592</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Alex Pietrangelo</td>
<td>$8,250,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$7,495,968</td></tr>
<tr><td>Zdeno Chara</td>
<td>$7,000,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$6,360,215</td></tr>
<tr><td>David Krejci</td>
<td>$6,750,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$6,133,065</td></tr>
<tr><td>Brayden Schenn</td>
<td>$6,000,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$5,451,613</td></tr>
<tr><td>Tomas Hertl</td>
<td>$5,500,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$4,997,312</td></tr>
<tr><td>Shea Theodore</td>
<td>$5,200,000 (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$4,724,731</td></tr>
<tr><td>Brendan Gallagher</td>
<td>$5,100,000 (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$4,633,871</td></tr>
<tr><td>Frederik Andersen</td>
<td>$5,000,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$4,543,011</td></tr>
<tr><td>Boone Jenner</td>
<td>$3,750,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$3,407,258</td></tr>
<tr><td>James Reimer</td>
<td>$3,500,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$3,180,108</td></tr>
<tr><td>Casey Cizikas</td>
<td>$3,300,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$2,998,387</td></tr>
<tr><td>Patrik Nemeth</td>
<td>$3,000,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$2,725,806</td></tr>
<tr><td>Jordan Martinook</td>
<td>$2,000,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$1,817,204</td></tr>
<tr><td>Mark Borowiecki</td>
<td>$1,850,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$1,680,914</td></tr>
<tr><td>Sam Bennett</td>
<td>$1,700,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$1,544,624</td></tr>
<tr><td>Noel Acciari</td>
<td>$1,666,667 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$1,514,337</td></tr>
<tr><td>Tyler Pitlick</td>
<td>$1,250,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$1,135,753</td></tr>
<tr><td>Christian Dvorak</td>
<td>$1,106,667 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$1,005,520</td></tr>
<tr><td>Sean Kuraly</td>
<td>$925,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$840,457</td></tr>
<tr><td>Mike Matheson</td>
<td>$925,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$840,457</td></tr>
<tr><td>Travis Dermott</td>
<td>$863,333 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$784,426</td></tr>
<tr><td>Brett Howden</td>
<td>$863,333 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$784,426</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>22</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $75,500,000</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $56,593,333</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $34,880,000</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $18,550,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $75,500,000</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $56,593,333</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $34,880,000</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $18,550,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $75,500,000</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $56,593,333</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $34,880,000</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $18,550,000</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Henrik Samuelsson</td>
<td>$110,667 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$100,552</td></tr>
<tr><td>Jeremy Bracco</td>
<td>$92,500 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$84,046</td></tr>
<tr><td>Dylan Wells</td>
<td>$91,083 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$82,758</td></tr>
<tr><td>Zachary Fucale</td>
<td>$86,300 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$78,412</td></tr>
<tr><td>Spencer Smallman</td>
<td>$75,833 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$68,902</td></tr>
<tr><td>Lukas Radil</td>
<td>$75,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$68,145</td></tr>
<tr><td>Steven Lorentz</td>
<td>$72,833 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$66,176</td></tr>
<tr><td>Jimmy Hayes</td>
<td>$70,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$63,602</td></tr>
<tr><td>Jared Coreau</td>
<td>$70,000 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$63,602</td></tr>
<tr><td>Cody Goloubef</td>
<td>$65,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$59,059</td></tr>
<tr><td>Ryan Stanton</td>
<td>$65,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$59,059</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>11</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $874,216</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $688,549</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $402,249</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $0</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $874,216</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $688,549</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $402,249</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $0</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="TeamFinancePro_EDM"><a id="Oilers">Oilers</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=12">Oilers Page</a> ]
[ <a href="OTHL-ProTeamRoster.php#Oilers">Pro Team Roster</a> ]
[ <a href="OTHL-ProTeamScoring.php#Oilers">Pro Team Scoring</a> ]
[ <a href="OTHL-TeamFinance.php#Oilers">Team Finance</a> ]
[ <a href="OTHL-ProTeamPlayersInfo.php#Oilers">Pro Team PlayersInfo</a> ]
[ <a href="OTHL-ProTeamLines.php#Oilers">Pro Team Lines</a> ]
[ <a href="OTHL-TeamProspects.php#Oilers">Team Prospects</a> ]
[ <a href="OTHL-ProTeamSchedule.php#Oilers">Pro Team Schedule</a> ]
[ <a href="OTHL-ProTeamStats.php#Oilers">Pro Team Stats</a> ]
[ <a href="OTHL-ProTeamStatsVS.php#Oilers">Pro Team Stats VS</a> ]
[ <a href="OTHL-TeamInjurySuspension.php#Oilers">Team Injury Suspension</a> ]
[ <a href="OTHL-TeamHistory.php#Oilers">Team History</a> ]
[ <a href="OTHL-TeamRecords.php#Oilers">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Oilers');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Oilers" style="display: block;">
<br /><br /><table class="STHSTableFullW"><tr><td style="vertical-align: top;width:440px;">
<table class="STHSFinance_TeamTable">
<tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_AreanaCapacity">Arena Capacity - Ticket Price<br />Attendance - %</h3></td></tr>
<tr><td class="STHSW250">Arena Name</td><td class="STHSW200">Rexall Place</td></tr>
<tr><td>Level 1: </td><td>6000 - $149 - 5,831 - 97.19%</td></tr>
<tr><td>Level 2: </td><td>5000 - $120 - 4,803 - 96.06%</td></tr>
<tr><td>Level 3: </td><td>4000 - $97 - 3,596 - 89.89%</td></tr>
<tr><td>Level 4: </td><td>3000 - $72 - 2,967 - 98.91%</td></tr>
<tr><td>Luxury : </td><td>1000 - $251 - 920 - 92.00%</td></tr>
<tr><td>Total Capacity :</td><td>19000</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Farm Level 1: </td><td>2000 - $70 - 1,458 - 72.91%</td></tr>
<tr><td>Farm Level 2: </td><td>1000 - $0 - 749 - 74.93%</td></tr>
<tr><td>Farm Total Capacity :</td><td>3000</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Income">Income</h3></td></tr>
<tr><td>Home Games Left</td><td>37</td></tr>
<tr><td>Average Attendance - %</td><td>18,117 - 95.35%</td></tr>
<tr><td>Average Income per Game</td><td>$2,237,779</td></tr>
<tr><td>Year to Date Revenue</td><td>$8,951,115</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Home Games Left</td><td>37</td></tr>
<tr><td>Average Attendance - %</td><td>2,208 - 73.58%</td></tr>
<tr><td>Average Income per Game</td><td>$102,078</td></tr>
<tr><td>Year to Date Revenue</td><td>$408,310</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>$81,435,833</td></tr>
<tr><td>Farm Players Total Salaries</td><td>$2,463,835</td></tr>
<tr><td>Coaches Total Salaries</td><td>$2,700,000</td></tr>
<tr><td>Luxury Taxe Total</td><td>$0</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>$7,421,815</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>$318,010</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>$7,239,019</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>$0</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Pro Estimated Season Revenue</td><td>$82,797,814</td></tr>
<tr><td>Farm Estimated Season Revenue</td><td>$3,776,868</td></tr>
<tr><td>Pro Remaining Season Days</td><td>169</td></tr>
<tr><td>Pro Expenses Per Days</td><td>$448,580</td></tr>
<tr><td>Pro Estimated Expenses</td><td>$75,810,020</td></tr>
<tr><td>Farm Remaining Season Days</td><td>169</td></tr>
<tr><td>Farm Expenses Per Days</td><td>$17,010</td></tr>
<tr><td>Farm Estimated Expenses</td><td>$2,874,690</td></tr>
<tr><td>Estimated Season Expenses</td><td>$78,684,710</td></tr>
<tr><td>Estimated Season Salary Cap</td><td>$81,231,782</td></tr>
<tr><td>Estimate Under Maximum Salary Cap of $81,500,000</td><td>$268,218</td></tr>
<tr><td>Estimate Over Minimum Salary Cap of $58,800,000 </td><td>$22,431,782</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>$126,829,550</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>$134,719,522</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Blake Wheeler</td>
<td>$7,500,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$6,814,516</td></tr>
<tr><td>Dustin Brown</td>
<td>$6,500,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$5,905,914</td></tr>
<tr><td>Derek Stepan</td>
<td>$6,500,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$5,905,914</td></tr>
<tr><td>Ryan Nugent-Hopkins</td>
<td>$6,300,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$5,724,194</td></tr>
<tr><td>Jeff Petry</td>
<td>$6,000,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$5,451,613</td></tr>
<tr><td>John Gibson</td>
<td>$6,000,000 (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$5,451,613</td></tr>
<tr><td>Mikael Granlund</td>
<td>$5,650,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$5,133,602</td></tr>
<tr><td>Nick Foligno</td>
<td>$5,250,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$4,770,161</td></tr>
<tr><td>Mattias Ekholm</td>
<td>$5,000,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$4,543,011</td></tr>
<tr><td>Ron Hainsey</td>
<td>$4,000,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$3,634,409</td></tr>
<tr><td>Noah Hanifin</td>
<td>$4,000,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$3,634,409</td></tr>
<tr><td>Lars Eller</td>
<td>$3,500,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$3,180,108</td></tr>
<tr><td>Jean-Gabriel Pageau</td>
<td>$3,100,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$2,816,667</td></tr>
<tr><td>John Moore</td>
<td>$2,850,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$2,589,516</td></tr>
<tr><td>Richard Panik</td>
<td>$2,750,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$2,498,656</td></tr>
<tr><td>Marcus Foligno</td>
<td>$2,250,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$2,044,355</td></tr>
<tr><td>Luke Glendening</td>
<td>$1,800,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$1,635,484</td></tr>
<tr><td>Anthony Cirelli</td>
<td>$935,833 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$850,300</td></tr>
<tr><td>Brandon Montour</td>
<td>$925,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$840,457</td></tr>
<tr><td>Martin Ouellette</td>
<td>$625,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$567,876</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>20</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $81,435,833</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $46,135,833</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $29,725,000</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $11,600,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $81,435,833</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $46,135,833</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $29,725,000</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $11,600,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $81,435,833</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $46,135,833</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $29,725,000</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $11,600,000</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Ryan Miller</td>
<td>$500,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$454,301</td></tr>
<tr><td>Nick Schmaltz</td>
<td>$154,167 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$140,076</td></tr>
<tr><td>Adam Gaudette</td>
<td>$149,167 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$135,533</td></tr>
<tr><td>Zach Whitecloud</td>
<td>$149,167 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$135,533</td></tr>
<tr><td>Luke Kunin</td>
<td>$142,500 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$129,476</td></tr>
<tr><td>Ryan Graves</td>
<td>$100,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$90,860</td></tr>
<tr><td>John Hayden</td>
<td>$92,500 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$84,046</td></tr>
<tr><td>Dominic Toninato</td>
<td>$92,500 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$84,046</td></tr>
<tr><td>Joey Anderson</td>
<td>$92,500 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$84,046</td></tr>
<tr><td>Ryan Kuffner</td>
<td>$92,500 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$84,046</td></tr>
<tr><td>Adam Johnson</td>
<td>$92,500 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$84,046</td></tr>
<tr><td>Zane McIntyre</td>
<td>$92,500 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$84,046</td></tr>
<tr><td>Mitch Reinke</td>
<td>$92,500 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$84,046</td></tr>
<tr><td>Dennis Gilbert</td>
<td>$92,500 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$84,046</td></tr>
<tr><td>Jeremy Lauzon</td>
<td>$87,167 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$79,200</td></tr>
<tr><td>Eric Robinson</td>
<td>$80,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$72,688</td></tr>
<tr><td>Anthony Bitetto</td>
<td>$80,000 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$72,688</td></tr>
<tr><td>Jarred Tinordi</td>
<td>$75,000 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$68,145</td></tr>
<tr><td>Kaden Fulcher</td>
<td>$71,667 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$65,116</td></tr>
<tr><td>Scott Wedgewood</td>
<td>$70,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$63,602</td></tr>
<tr><td>Erik Burgdoerfer</td>
<td>$65,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$59,059</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>21</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $2,463,835</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $1,502,168</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $790,501</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $0</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $2,463,835</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $1,502,168</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $790,501</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $0</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="TeamFinancePro_FLA"><a id="Panthers">Panthers</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=13">Panthers Page</a> ]
[ <a href="OTHL-ProTeamRoster.php#Panthers">Pro Team Roster</a> ]
[ <a href="OTHL-ProTeamScoring.php#Panthers">Pro Team Scoring</a> ]
[ <a href="OTHL-TeamFinance.php#Panthers">Team Finance</a> ]
[ <a href="OTHL-ProTeamPlayersInfo.php#Panthers">Pro Team PlayersInfo</a> ]
[ <a href="OTHL-ProTeamLines.php#Panthers">Pro Team Lines</a> ]
[ <a href="OTHL-TeamProspects.php#Panthers">Team Prospects</a> ]
[ <a href="OTHL-ProTeamSchedule.php#Panthers">Pro Team Schedule</a> ]
[ <a href="OTHL-ProTeamStats.php#Panthers">Pro Team Stats</a> ]
[ <a href="OTHL-ProTeamStatsVS.php#Panthers">Pro Team Stats VS</a> ]
[ <a href="OTHL-TeamInjurySuspension.php#Panthers">Team Injury Suspension</a> ]
[ <a href="OTHL-TeamHistory.php#Panthers">Team History</a> ]
[ <a href="OTHL-TeamRecords.php#Panthers">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Panthers');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Panthers" style="display: block;">
<br /><br /><table class="STHSTableFullW"><tr><td style="vertical-align: top;width:440px;">
<table class="STHSFinance_TeamTable">
<tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_AreanaCapacity">Arena Capacity - Ticket Price<br />Attendance - %</h3></td></tr>
<tr><td class="STHSW250">Arena Name</td><td class="STHSW200">Bank Atlantic Center</td></tr>
<tr><td>Level 1: </td><td>6000 - $140 - 6,000 - 100.00%</td></tr>
<tr><td>Level 2: </td><td>5000 - $115 - 4,708 - 94.16%</td></tr>
<tr><td>Level 3: </td><td>4000 - $85 - 3,960 - 98.99%</td></tr>
<tr><td>Level 4: </td><td>3000 - $65 - 2,936 - 97.87%</td></tr>
<tr><td>Luxury : </td><td>1000 - $300 - 752 - 75.17%</td></tr>
<tr><td>Total Capacity :</td><td>19000</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Farm Level 1: </td><td>2000 - $45 - 1,472 - 73.58%</td></tr>
<tr><td>Farm Level 2: </td><td>1000 - $0 - 757 - 75.70%</td></tr>
<tr><td>Farm Total Capacity :</td><td>3000</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Income">Income</h3></td></tr>
<tr><td>Home Games Left</td><td>38</td></tr>
<tr><td>Average Attendance - %</td><td>18,355 - 96.61%</td></tr>
<tr><td>Average Income per Game</td><td>$2,134,332</td></tr>
<tr><td>Year to Date Revenue</td><td>$6,402,995</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Home Games Left</td><td>38</td></tr>
<tr><td>Average Attendance - %</td><td>2,229 - 74.29%</td></tr>
<tr><td>Average Income per Game</td><td>$66,225</td></tr>
<tr><td>Year to Date Revenue</td><td>$198,675</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>$73,966,833</td></tr>
<tr><td>Farm Players Total Salaries</td><td>$1,621,082</td></tr>
<tr><td>Coaches Total Salaries</td><td>$4,250,000</td></tr>
<tr><td>Luxury Taxe Total</td><td>$0</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>$7,109,192</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>$193,262</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>$6,766,449</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>$0</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Pro Estimated Season Revenue</td><td>$81,104,603</td></tr>
<tr><td>Farm Estimated Season Revenue</td><td>$2,516,550</td></tr>
<tr><td>Pro Remaining Season Days</td><td>169</td></tr>
<tr><td>Pro Expenses Per Days</td><td>$417,832</td></tr>
<tr><td>Pro Estimated Expenses</td><td>$70,613,608</td></tr>
<tr><td>Farm Remaining Season Days</td><td>169</td></tr>
<tr><td>Farm Expenses Per Days</td><td>$11,404</td></tr>
<tr><td>Farm Estimated Expenses</td><td>$1,927,276</td></tr>
<tr><td>Estimated Season Expenses</td><td>$72,540,884</td></tr>
<tr><td>Estimated Season Salary Cap</td><td>$73,972,848</td></tr>
<tr><td>Estimate Under Maximum Salary Cap of $81,500,000</td><td>$7,527,152</td></tr>
<tr><td>Estimate Over Minimum Salary Cap of $58,800,000 </td><td>$15,172,848</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>$52,276,569</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>$63,356,838</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Brent Burns</td>
<td>$9,000,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$8,177,419</td></tr>
<tr><td>Tyler Seguin</td>
<td>$7,500,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$6,814,516</td></tr>
<tr><td>Josh Bailey</td>
<td>$6,000,000 (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$5,451,613</td></tr>
<tr><td>Tyler Bozak</td>
<td>$6,000,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$5,451,613</td></tr>
<tr><td>Marcus Johansson</td>
<td>$5,000,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$4,543,011</td></tr>
<tr><td>Carl Soderberg</td>
<td>$4,900,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$4,452,151</td></tr>
<tr><td>Justin Schultz</td>
<td>$4,800,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$4,361,290</td></tr>
<tr><td>Damon Severson</td>
<td>$4,200,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$3,816,129</td></tr>
<tr><td>Brian Dumoulin</td>
<td>$4,200,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$3,816,129</td></tr>
<tr><td>Michael Stone</td>
<td>$3,500,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$3,180,108</td></tr>
<tr><td>Anton Khudobin</td>
<td>$3,000,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$2,725,806</td></tr>
<tr><td>Darren Helm</td>
<td>$2,900,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$2,634,946</td></tr>
<tr><td>Nathan Beaulieu</td>
<td>$2,250,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$2,044,355</td></tr>
<tr><td>Lawson Crouse</td>
<td>$1,602,500 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$1,456,035</td></tr>
<tr><td>Xavier Ouellet</td>
<td>$1,400,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$1,272,043</td></tr>
<tr><td>Jake Debrusk</td>
<td>$1,288,333 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$1,170,582</td></tr>
<tr><td>Paul Carey</td>
<td>$1,200,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$1,090,323</td></tr>
<tr><td>Curtis Lazar</td>
<td>$1,200,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$1,090,323</td></tr>
<tr><td>Michael McCarron</td>
<td>$1,076,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$977,656</td></tr>
<tr><td>David Rittich</td>
<td>$1,000,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$908,602</td></tr>
<tr><td>Cooper Marody</td>
<td>$1,000,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$908,602</td></tr>
<tr><td>Collin Delia</td>
<td>$950,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$863,172</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>22</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $73,966,833</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $51,364,333</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $37,450,000</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $15,000,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $73,966,833</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $51,364,333</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $37,450,000</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $15,000,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $73,966,833</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $51,364,333</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $37,450,000</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $15,000,000</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Michael Dal Colle</td>
<td>$306,333 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$278,335</td></tr>
<tr><td>Andy Welinski</td>
<td>$177,500 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$161,277</td></tr>
<tr><td>Derrick Pouliot</td>
<td>$128,833 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$117,058</td></tr>
<tr><td>Sonny Milano</td>
<td>$126,333 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$114,787</td></tr>
<tr><td>C.J. Smith</td>
<td>$100,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$90,860</td></tr>
<tr><td>Daniel O'Regan</td>
<td>$92,500 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$84,046</td></tr>
<tr><td>Luke Johnson</td>
<td>$92,500 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$84,046</td></tr>
<tr><td>Carl Dahlstrom</td>
<td>$92,500 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$84,046</td></tr>
<tr><td>Filip Chlapik</td>
<td>$89,417 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$81,244</td></tr>
<tr><td>Brendan Guhle</td>
<td>$88,833 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$80,714</td></tr>
<tr><td>Max Jones</td>
<td>$86,333 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$78,443</td></tr>
<tr><td>Tyler Wotherspoon</td>
<td>$80,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$72,688</td></tr>
<tr><td>Alexandre Carrier</td>
<td>$80,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$72,688</td></tr>
<tr><td>Garrett Wilson</td>
<td>$80,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$72,688</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>14</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $1,621,082</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $780,916</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $392,666</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $0</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $1,621,082</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $780,916</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $392,666</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $0</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="TeamFinancePro_PIT"><a id="Penguins">Penguins</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=24">Penguins Page</a> ]
[ <a href="OTHL-ProTeamRoster.php#Penguins">Pro Team Roster</a> ]
[ <a href="OTHL-ProTeamScoring.php#Penguins">Pro Team Scoring</a> ]
[ <a href="OTHL-TeamFinance.php#Penguins">Team Finance</a> ]
[ <a href="OTHL-ProTeamPlayersInfo.php#Penguins">Pro Team PlayersInfo</a> ]
[ <a href="OTHL-ProTeamLines.php#Penguins">Pro Team Lines</a> ]
[ <a href="OTHL-TeamProspects.php#Penguins">Team Prospects</a> ]
[ <a href="OTHL-ProTeamSchedule.php#Penguins">Pro Team Schedule</a> ]
[ <a href="OTHL-ProTeamStats.php#Penguins">Pro Team Stats</a> ]
[ <a href="OTHL-ProTeamStatsVS.php#Penguins">Pro Team Stats VS</a> ]
[ <a href="OTHL-TeamInjurySuspension.php#Penguins">Team Injury Suspension</a> ]
[ <a href="OTHL-TeamHistory.php#Penguins">Team History</a> ]
[ <a href="OTHL-TeamRecords.php#Penguins">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Penguins');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Penguins" style="display: block;">
<br /><br /><table class="STHSTableFullW"><tr><td style="vertical-align: top;width:440px;">
<table class="STHSFinance_TeamTable">
<tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_AreanaCapacity">Arena Capacity - Ticket Price<br />Attendance - %</h3></td></tr>
<tr><td class="STHSW250">Arena Name</td><td class="STHSW200">Consol Energy Center</td></tr>
<tr><td>Level 1: </td><td>6000 - $225 - 3,885 - 64.75%</td></tr>
<tr><td>Level 2: </td><td>5000 - $165 - 3,118 - 62.35%</td></tr>
<tr><td>Level 3: </td><td>4000 - $135 - 2,469 - 61.71%</td></tr>
<tr><td>Level 4: </td><td>3000 - $115 - 1,524 - 50.79%</td></tr>
<tr><td>Luxury : </td><td>1000 - $300 - 736 - 73.62%</td></tr>
<tr><td>Total Capacity :</td><td>19000</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Farm Level 1: </td><td>2000 - $100 - 1,523 - 76.16%</td></tr>
<tr><td>Farm Level 2: </td><td>1000 - $0 - 764 - 76.35%</td></tr>
<tr><td>Farm Total Capacity :</td><td>3000</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Income">Income</h3></td></tr>
<tr><td>Home Games Left</td><td>35</td></tr>
<tr><td>Average Attendance - %</td><td>11,731 - 61.74%</td></tr>
<tr><td>Average Income per Game</td><td>$2,117,859</td></tr>
<tr><td>Year to Date Revenue</td><td>$12,707,155</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Home Games Left</td><td>35</td></tr>
<tr><td>Average Attendance - %</td><td>2,287 - 76.22%</td></tr>
<tr><td>Average Income per Game</td><td>$152,317</td></tr>
<tr><td>Year to Date Revenue</td><td>$913,900</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>$63,084,166</td></tr>
<tr><td>Farm Players Total Salaries</td><td>$445,084</td></tr>
<tr><td>Coaches Total Salaries</td><td>$1,700,000</td></tr>
<tr><td>Luxury Taxe Total</td><td>$0</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>$5,608,891</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>$115,802</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>$5,526,637</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>$0</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Pro Estimated Season Revenue</td><td>$74,125,071</td></tr>
<tr><td>Farm Estimated Season Revenue</td><td>$5,331,083</td></tr>
<tr><td>Pro Remaining Season Days</td><td>169</td></tr>
<tr><td>Pro Expenses Per Days</td><td>$344,001</td></tr>
<tr><td>Pro Estimated Expenses</td><td>$58,136,169</td></tr>
<tr><td>Farm Remaining Season Days</td><td>169</td></tr>
<tr><td>Farm Expenses Per Days</td><td>$6,694</td></tr>
<tr><td>Farm Estimated Expenses</td><td>$1,131,286</td></tr>
<tr><td>Estimated Season Expenses</td><td>$59,267,455</td></tr>
<tr><td>Estimated Season Salary Cap</td><td>$62,845,015</td></tr>
<tr><td>Estimate Under Maximum Salary Cap of $81,500,000</td><td>$18,654,985</td></tr>
<tr><td>Estimate Over Minimum Salary Cap of $58,800,000 </td><td>$4,045,015</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>$89,924,194</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>$110,112,893</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>James van Riemsdyk</td>
<td>$8,750,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$7,950,269</td></tr>
<tr><td>Cam Fowler</td>
<td>$6,500,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$5,905,914</td></tr>
<tr><td>Semyon Varlamov</td>
<td>$6,000,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$5,451,613</td></tr>
<tr><td>Andy Greene</td>
<td>$5,200,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$4,724,731</td></tr>
<tr><td>Joe Thornton</td>
<td>$4,500,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$4,088,710</td></tr>
<tr><td>Dmitry Kulikov (Out of Payroll)</td>
<td>$4,250,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$3,861,559</td></tr>
<tr><td>Colin Wilson</td>
<td>$4,000,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$3,634,409</td></tr>
<tr><td>Andrew Shaw</td>
<td>$3,700,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$3,361,828</td></tr>
<tr><td>Brady Tkachuk</td>
<td>$3,425,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$3,111,962</td></tr>
<tr><td>Micheal Ferland</td>
<td>$3,250,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$2,952,957</td></tr>
<tr><td>Trevor van Riemsdyk</td>
<td>$2,300,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$2,089,785</td></tr>
<tr><td>Robert Bortuzzo</td>
<td>$1,750,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$1,590,054</td></tr>
<tr><td>Michael Rasmussen</td>
<td>$1,710,833 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$1,554,467</td></tr>
<tr><td>Tyson Jost</td>
<td>$1,673,333 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$1,520,394</td></tr>
<tr><td>Michael Del Zotto</td>
<td>$1,500,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$1,362,903</td></tr>
<tr><td>Chris Wagner</td>
<td>$1,500,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$1,362,903</td></tr>
<tr><td>Kyle Clifford</td>
<td>$1,500,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$1,362,903</td></tr>
<tr><td>Anton Forsberg</td>
<td>$1,000,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$908,602</td></tr>
<tr><td>Evan Rodrigues</td>
<td>$975,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$885,887</td></tr>
<tr><td>Tomas Jurco</td>
<td>$950,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$863,172</td></tr>
<tr><td>Aaron Ness</td>
<td>$750,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$681,452</td></tr>
<tr><td>Mackenzie MacEachern</td>
<td>$750,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$681,452</td></tr>
<tr><td>Matt Read</td>
<td>$750,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$681,452</td></tr>
<tr><td>Chris Wideman</td>
<td>$650,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$590,591</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>24</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $67,334,166</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $56,459,166</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $35,885,833</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $18,000,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $67,334,166</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $56,459,166</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $35,885,833</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $18,000,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $67,334,166</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $56,459,166</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $35,885,833</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $18,000,000</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Roland McKeown</td>
<td>$89,417 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$81,244</td></tr>
<tr><td>Nelson Nogier</td>
<td>$77,167 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$70,114</td></tr>
<tr><td>Jamie Devane</td>
<td>$72,500 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$65,874</td></tr>
<tr><td>Tom McCollum</td>
<td>$70,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$63,602</td></tr>
<tr><td>Alexandre Fortin</td>
<td>$68,500 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$62,239</td></tr>
<tr><td>Dave Dziurzynski</td>
<td>$67,500 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$61,331</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>6</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $445,084</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $159,417</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $89,417</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $0</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $445,084</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $159,417</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $89,417</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $0</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="TeamFinancePro_NSH"><a id="Predators">Predators</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=17">Predators Page</a> ]
[ <a href="OTHL-ProTeamRoster.php#Predators">Pro Team Roster</a> ]
[ <a href="OTHL-ProTeamScoring.php#Predators">Pro Team Scoring</a> ]
[ <a href="OTHL-TeamFinance.php#Predators">Team Finance</a> ]
[ <a href="OTHL-ProTeamPlayersInfo.php#Predators">Pro Team PlayersInfo</a> ]
[ <a href="OTHL-ProTeamLines.php#Predators">Pro Team Lines</a> ]
[ <a href="OTHL-TeamProspects.php#Predators">Team Prospects</a> ]
[ <a href="OTHL-ProTeamSchedule.php#Predators">Pro Team Schedule</a> ]
[ <a href="OTHL-ProTeamStats.php#Predators">Pro Team Stats</a> ]
[ <a href="OTHL-ProTeamStatsVS.php#Predators">Pro Team Stats VS</a> ]
[ <a href="OTHL-TeamInjurySuspension.php#Predators">Team Injury Suspension</a> ]
[ <a href="OTHL-TeamHistory.php#Predators">Team History</a> ]
[ <a href="OTHL-TeamRecords.php#Predators">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Predators');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Predators" style="display: block;">
<br /><br /><table class="STHSTableFullW"><tr><td style="vertical-align: top;width:440px;">
<table class="STHSFinance_TeamTable">
<tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_AreanaCapacity">Arena Capacity - Ticket Price<br />Attendance - %</h3></td></tr>
<tr><td class="STHSW250">Arena Name</td><td class="STHSW200">Sommet Center</td></tr>
<tr><td>Level 1: </td><td>6000 - $225 - 3,687 - 61.45%</td></tr>
<tr><td>Level 2: </td><td>5000 - $165 - 2,968 - 59.36%</td></tr>
<tr><td>Level 3: </td><td>4000 - $135 - 2,421 - 60.51%</td></tr>
<tr><td>Level 4: </td><td>3000 - $100 - 1,856 - 61.87%</td></tr>
<tr><td>Luxury : </td><td>1000 - $300 - 713 - 71.25%</td></tr>
<tr><td>Total Capacity :</td><td>19000</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Farm Level 1: </td><td>2000 - $100 - 1,500 - 74.98%</td></tr>
<tr><td>Farm Level 2: </td><td>1000 - $0 - 737 - 73.65%</td></tr>
<tr><td>Farm Total Capacity :</td><td>3000</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Income">Income</h3></td></tr>
<tr><td>Home Games Left</td><td>37</td></tr>
<tr><td>Average Attendance - %</td><td>11,644 - 61.28%</td></tr>
<tr><td>Average Income per Game</td><td>$2,045,413</td></tr>
<tr><td>Year to Date Revenue</td><td>$8,181,650</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Home Games Left</td><td>37</td></tr>
<tr><td>Average Attendance - %</td><td>2,236 - 74.53%</td></tr>
<tr><td>Average Income per Game</td><td>$149,950</td></tr>
<tr><td>Year to Date Revenue</td><td>$599,800</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>$75,330,000</td></tr>
<tr><td>Farm Players Total Salaries</td><td>$979,417</td></tr>
<tr><td>Coaches Total Salaries</td><td>$3,900,000</td></tr>
<tr><td>Luxury Taxe Total</td><td>$0</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>$7,159,193</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>$171,768</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>$6,885,000</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>$0</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Pro Estimated Season Revenue</td><td>$75,680,262</td></tr>
<tr><td>Farm Estimated Season Revenue</td><td>$5,548,150</td></tr>
<tr><td>Pro Remaining Season Days</td><td>169</td></tr>
<tr><td>Pro Expenses Per Days</td><td>$421,129</td></tr>
<tr><td>Pro Estimated Expenses</td><td>$71,170,801</td></tr>
<tr><td>Farm Remaining Season Days</td><td>169</td></tr>
<tr><td>Farm Expenses Per Days</td><td>$10,104</td></tr>
<tr><td>Farm Estimated Expenses</td><td>$1,707,576</td></tr>
<tr><td>Estimated Season Expenses</td><td>$72,878,377</td></tr>
<tr><td>Estimated Season Salary Cap</td><td>$75,330,000</td></tr>
<tr><td>Estimate Under Maximum Salary Cap of $81,500,000</td><td>$6,170,000</td></tr>
<tr><td>Estimate Over Minimum Salary Cap of $58,800,000 </td><td>$16,530,000</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>$145,107,979</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>$153,458,014</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Carey Price</td>
<td>$8,000,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$7,268,817</td></tr>
<tr><td>Logan Couture</td>
<td>$7,250,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$6,587,366</td></tr>
<tr><td>Jack Johnson</td>
<td>$7,000,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$6,360,215</td></tr>
<tr><td>Reilly Smith</td>
<td>$6,500,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$5,905,914</td></tr>
<tr><td>Jordan Staal</td>
<td>$6,500,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$5,905,914</td></tr>
<tr><td>Deryk Engelland</td>
<td>$6,000,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$5,451,613</td></tr>
<tr><td>Sam Reinhart</td>
<td>$5,500,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$4,997,312</td></tr>
<tr><td>Oscar Klefbom</td>
<td>$5,000,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$4,543,011</td></tr>
<tr><td>Nick Holden</td>
<td>$4,000,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$3,634,409</td></tr>
<tr><td>Alex Killorn</td>
<td>$3,950,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$3,588,978</td></tr>
<tr><td>Andreas Athanasiou</td>
<td>$3,700,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$3,361,828</td></tr>
<tr><td>Kevan Miller</td>
<td>$2,850,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$2,589,516</td></tr>
<tr><td>Alex Tuch</td>
<td>$1,350,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$1,226,613</td></tr>
<tr><td>Pheonix Copley</td>
<td>$1,250,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$1,135,753</td></tr>
<tr><td>Danton Heinen</td>
<td>$995,833 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$904,816</td></tr>
<tr><td>Ryan Dzingel</td>
<td>$900,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$817,742</td></tr>
<tr><td>Adrian Kempe</td>
<td>$894,167 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$812,442</td></tr>
<tr><td>Erik Cernak</td>
<td>$890,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$808,656</td></tr>
<tr><td>Logan Shaw</td>
<td>$700,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$636,022</td></tr>
<tr><td>Zach Redmond</td>
<td>$700,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$636,022</td></tr>
<tr><td>Brett Ritchie</td>
<td>$700,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$636,022</td></tr>
<tr><td>Greg Carey</td>
<td>$700,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$636,022</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>22</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $75,330,000</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $55,680,000</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $21,390,000</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $12,000,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $75,330,000</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $55,680,000</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $21,390,000</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $12,000,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $75,330,000</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $55,680,000</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $21,390,000</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $12,000,000</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Mike Condon</td>
<td>$240,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$218,065</td></tr>
<tr><td>Nick Lappin</td>
<td>$200,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$181,720</td></tr>
<tr><td>Stefan Matteau</td>
<td>$92,500 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$84,046</td></tr>
<tr><td>Dennis Cholowski</td>
<td>$89,417 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$81,244</td></tr>
<tr><td>Justin Dowling</td>
<td>$75,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$68,145</td></tr>
<tr><td>Jayson Megna</td>
<td>$75,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$68,145</td></tr>
<tr><td>Charles Hudon</td>
<td>$72,500 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$65,874</td></tr>
<tr><td>Stuart Percy</td>
<td>$70,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$63,602</td></tr>
<tr><td>Ryan Faragher</td>
<td>$65,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$59,059</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>9</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $979,417</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $404,417</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $89,417</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $0</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $979,417</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $404,417</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $89,417</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $0</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="TeamFinancePro_NYR"><a id="Rangers">Rangers</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=20">Rangers Page</a> ]
[ <a href="OTHL-ProTeamRoster.php#Rangers">Pro Team Roster</a> ]
[ <a href="OTHL-ProTeamScoring.php#Rangers">Pro Team Scoring</a> ]
[ <a href="OTHL-TeamFinance.php#Rangers">Team Finance</a> ]
[ <a href="OTHL-ProTeamPlayersInfo.php#Rangers">Pro Team PlayersInfo</a> ]
[ <a href="OTHL-ProTeamLines.php#Rangers">Pro Team Lines</a> ]
[ <a href="OTHL-TeamProspects.php#Rangers">Team Prospects</a> ]
[ <a href="OTHL-ProTeamSchedule.php#Rangers">Pro Team Schedule</a> ]
[ <a href="OTHL-ProTeamStats.php#Rangers">Pro Team Stats</a> ]
[ <a href="OTHL-ProTeamStatsVS.php#Rangers">Pro Team Stats VS</a> ]
[ <a href="OTHL-TeamInjurySuspension.php#Rangers">Team Injury Suspension</a> ]
[ <a href="OTHL-TeamHistory.php#Rangers">Team History</a> ]
[ <a href="OTHL-TeamRecords.php#Rangers">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Rangers');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Rangers" style="display: block;">
<br /><br /><table class="STHSTableFullW"><tr><td style="vertical-align: top;width:440px;">
<table class="STHSFinance_TeamTable">
<tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_AreanaCapacity">Arena Capacity - Ticket Price<br />Attendance - %</h3></td></tr>
<tr><td class="STHSW250">Arena Name</td><td class="STHSW200">Madison Square Gardens</td></tr>
<tr><td>Level 1: </td><td>6000 - $220 - 4,011 - 66.84%</td></tr>
<tr><td>Level 2: </td><td>5000 - $165 - 3,083 - 61.66%</td></tr>
<tr><td>Level 3: </td><td>4000 - $135 - 2,412 - 60.29%</td></tr>
<tr><td>Level 4: </td><td>3000 - $110 - 1,681 - 56.03%</td></tr>
<tr><td>Luxury : </td><td>1000 - $300 - 728 - 72.80%</td></tr>
<tr><td>Total Capacity :</td><td>19000</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Farm Level 1: </td><td>2000 - $19 - 1,458 - 72.88%</td></tr>
<tr><td>Farm Level 2: </td><td>1000 - $0 - 804 - 80.35%</td></tr>
<tr><td>Farm Total Capacity :</td><td>3000</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Income">Income</h3></td></tr>
<tr><td>Home Games Left</td><td>39</td></tr>
<tr><td>Average Attendance - %</td><td>11,914 - 62.71%</td></tr>
<tr><td>Average Income per Game</td><td>$2,119,868</td></tr>
<tr><td>Year to Date Revenue</td><td>$4,239,735</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Home Games Left</td><td>39</td></tr>
<tr><td>Average Attendance - %</td><td>2,261 - 75.37%</td></tr>
<tr><td>Average Income per Game</td><td>$27,693</td></tr>
<tr><td>Year to Date Revenue</td><td>$55,385</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>$79,676,667</td></tr>
<tr><td>Farm Players Total Salaries</td><td>$627,500</td></tr>
<tr><td>Coaches Total Salaries</td><td>$5,900,000</td></tr>
<tr><td>Luxury Taxe Total</td><td>$0</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>$7,803,715</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>$139,604</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>$7,346,721</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>$0</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Pro Estimated Season Revenue</td><td>$82,674,832</td></tr>
<tr><td>Farm Estimated Season Revenue</td><td>$1,080,008</td></tr>
<tr><td>Pro Remaining Season Days</td><td>169</td></tr>
<tr><td>Pro Expenses Per Days</td><td>$455,251</td></tr>
<tr><td>Pro Estimated Expenses</td><td>$76,937,419</td></tr>
<tr><td>Farm Remaining Season Days</td><td>169</td></tr>
<tr><td>Farm Expenses Per Days</td><td>$8,212</td></tr>
<tr><td>Farm Estimated Expenses</td><td>$1,387,828</td></tr>
<tr><td>Estimated Season Expenses</td><td>$78,325,247</td></tr>
<tr><td>Estimated Season Salary Cap</td><td>$79,741,082</td></tr>
<tr><td>Estimate Under Maximum Salary Cap of $81,500,000</td><td>$1,758,918</td></tr>
<tr><td>Estimate Over Minimum Salary Cap of $58,800,000 </td><td>$20,941,082</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>$34,701,040</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>$40,130,633</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Claude Giroux</td>
<td>$8,660,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$7,868,495</td></tr>
<tr><td>Marc-Andre Fleury</td>
<td>$8,300,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$7,541,398</td></tr>
<tr><td>Shea Weber</td>
<td>$8,200,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$7,450,538</td></tr>
<tr><td>Roman Josi</td>
<td>$8,000,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$7,268,817</td></tr>
<tr><td>Mark Stone</td>
<td>$7,750,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$7,041,667</td></tr>
<tr><td>Gabriel Landeskog</td>
<td>$6,750,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$6,133,065</td></tr>
<tr><td>Artem Anisimov</td>
<td>$4,850,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$4,406,720</td></tr>
<tr><td>Nick Jensen</td>
<td>$4,500,000 (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$4,088,710</td></tr>
<tr><td>Charlie Coyle</td>
<td>$4,000,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$3,634,409</td></tr>
<tr><td>Carter Hutton</td>
<td>$3,500,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$3,180,108</td></tr>
<tr><td>Chris Tierney</td>
<td>$2,900,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$2,634,946</td></tr>
<tr><td>Ben Hutton</td>
<td>$2,800,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$2,544,086</td></tr>
<tr><td>Jesper Fast</td>
<td>$2,200,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$1,998,925</td></tr>
<tr><td>Colin White</td>
<td>$1,491,667 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$1,355,332</td></tr>
<tr><td>Matt Grzelcyk</td>
<td>$1,400,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$1,272,043</td></tr>
<tr><td>Ryan Donato</td>
<td>$1,350,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$1,226,613</td></tr>
<tr><td>Erik Gustafsson</td>
<td>$1,200,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$1,090,323</td></tr>
<tr><td>Artturi Lehkonen</td>
<td>$925,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$840,457</td></tr>
<tr><td>Reid Boucher</td>
<td>$900,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$817,742</td></tr>
<tr><td>Jesper Bratt (Out of Payroll)</td>
<td>$749,167 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$680,695</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>20</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $80,425,834</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $49,851,667</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $48,451,667</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $31,560,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $80,425,834</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $49,851,667</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $48,451,667</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $31,560,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $80,425,834</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $49,851,667</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $48,451,667</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $31,560,000</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Ian McCoshen</td>
<td>$102,500 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$93,132</td></tr>
<tr><td>Charlie Lindgren</td>
<td>$100,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$90,860</td></tr>
<tr><td>Zach Trotman</td>
<td>$97,500 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$88,589</td></tr>
<tr><td>Kevin Roy</td>
<td>$92,500 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$84,046</td></tr>
<tr><td>Robby Fabbri</td>
<td>$90,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$81,774</td></tr>
<tr><td>Kevin Porter</td>
<td>$80,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$72,688</td></tr>
<tr><td>Matt Taormina</td>
<td>$65,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$59,059</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>7</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $627,500</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $295,000</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $0</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $627,500</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $295,000</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $0</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="TeamFinancePro_DET"><a id="RedWings">Red Wings</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=11">Red Wings Page</a> ]
[ <a href="OTHL-ProTeamRoster.php#RedWings">Pro Team Roster</a> ]
[ <a href="OTHL-ProTeamScoring.php#RedWings">Pro Team Scoring</a> ]
[ <a href="OTHL-TeamFinance.php#RedWings">Team Finance</a> ]
[ <a href="OTHL-ProTeamPlayersInfo.php#RedWings">Pro Team PlayersInfo</a> ]
[ <a href="OTHL-ProTeamLines.php#RedWings">Pro Team Lines</a> ]
[ <a href="OTHL-TeamProspects.php#RedWings">Team Prospects</a> ]
[ <a href="OTHL-ProTeamSchedule.php#RedWings">Pro Team Schedule</a> ]
[ <a href="OTHL-ProTeamStats.php#RedWings">Pro Team Stats</a> ]
[ <a href="OTHL-ProTeamStatsVS.php#RedWings">Pro Team Stats VS</a> ]
[ <a href="OTHL-TeamInjurySuspension.php#RedWings">Team Injury Suspension</a> ]
[ <a href="OTHL-TeamHistory.php#RedWings">Team History</a> ]
[ <a href="OTHL-TeamRecords.php#RedWings">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_RedWings');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_RedWings" style="display: block;">
<br /><br /><table class="STHSTableFullW"><tr><td style="vertical-align: top;width:440px;">
<table class="STHSFinance_TeamTable">
<tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_AreanaCapacity">Arena Capacity - Ticket Price<br />Attendance - %</h3></td></tr>
<tr><td class="STHSW250">Arena Name</td><td class="STHSW200">Joe Louis Arena</td></tr>
<tr><td>Level 1: </td><td>6000 - $100 - 5,995 - 99.92%</td></tr>
<tr><td>Level 2: </td><td>5000 - $75 - 4,958 - 99.17%</td></tr>
<tr><td>Level 3: </td><td>4000 - $50 - 3,995 - 99.88%</td></tr>
<tr><td>Level 4: </td><td>3000 - $40 - 3,000 - 100.00%</td></tr>
<tr><td>Luxury : </td><td>1000 - $200 - 936 - 93.60%</td></tr>
<tr><td>Total Capacity :</td><td>19000</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Farm Level 1: </td><td>2000 - $40 - 1,546 - 77.30%</td></tr>
<tr><td>Farm Level 2: </td><td>1000 - $0 - 732 - 73.20%</td></tr>
<tr><td>Farm Total Capacity :</td><td>3000</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Income">Income</h3></td></tr>
<tr><td>Home Games Left</td><td>38</td></tr>
<tr><td>Average Attendance - %</td><td>18,885 - 99.39%</td></tr>
<tr><td>Average Income per Game</td><td>$1,478,342</td></tr>
<tr><td>Year to Date Revenue</td><td>$4,435,025</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Home Games Left</td><td>38</td></tr>
<tr><td>Average Attendance - %</td><td>2,278 - 75.93%</td></tr>
<tr><td>Average Income per Game</td><td>$61,840</td></tr>
<tr><td>Year to Date Revenue</td><td>$185,520</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>$71,314,166</td></tr>
<tr><td>Farm Players Total Salaries</td><td>$713,833</td></tr>
<tr><td>Coaches Total Salaries</td><td>$5,750,000</td></tr>
<tr><td>Luxury Taxe Total</td><td>$0</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>$6,819,087</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>$146,889</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>$6,362,101</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>$0</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Pro Estimated Season Revenue</td><td>$56,176,983</td></tr>
<tr><td>Farm Estimated Season Revenue</td><td>$2,349,920</td></tr>
<tr><td>Pro Remaining Season Days</td><td>169</td></tr>
<tr><td>Pro Expenses Per Days</td><td>$410,291</td></tr>
<tr><td>Pro Estimated Expenses</td><td>$69,339,179</td></tr>
<tr><td>Farm Remaining Season Days</td><td>169</td></tr>
<tr><td>Farm Expenses Per Days</td><td>$7,870</td></tr>
<tr><td>Farm Estimated Expenses</td><td>$1,330,030</td></tr>
<tr><td>Estimated Season Expenses</td><td>$70,669,209</td></tr>
<tr><td>Estimated Season Salary Cap</td><td>$71,158,222</td></tr>
<tr><td>Estimate Under Maximum Salary Cap of $81,500,000</td><td>$10,341,778</td></tr>
<tr><td>Estimate Over Minimum Salary Cap of $58,800,000 </td><td>$12,358,222</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>$33,391,289</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>$21,248,983</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Ryan Suter</td>
<td>$9,625,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$8,745,296</td></tr>
<tr><td>Sergei Bobrovsky</td>
<td>$9,150,000 (6)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$8,313,710</td></tr>
<tr><td>Matt Duchene</td>
<td>$7,700,000 (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$6,996,237</td></tr>
<tr><td>Marc Staal</td>
<td>$6,650,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$6,042,204</td></tr>
<tr><td>Ilya Kovalchuk</td>
<td>$6,250,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$5,678,763</td></tr>
<tr><td>Torey Krug</td>
<td>$5,600,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$5,088,172</td></tr>
<tr><td>Marco Scandella</td>
<td>$4,250,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$3,861,559</td></tr>
<tr><td>Connor McDavid</td>
<td>$3,775,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$3,429,973</td></tr>
<tr><td>Patrik Laine</td>
<td>$3,575,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$3,248,253</td></tr>
<tr><td>Jake McCabe</td>
<td>$2,500,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$2,271,505</td></tr>
<tr><td>Lias Andersson</td>
<td>$1,775,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$1,612,769</td></tr>
<tr><td>Jared McCann</td>
<td>$1,250,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$1,135,753</td></tr>
<tr><td>Stefan Noesen</td>
<td>$1,075,833 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$977,504</td></tr>
<tr><td>Teddy Blueger</td>
<td>$925,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$840,457</td></tr>
<tr><td>Brayden Point</td>
<td>$919,167 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$835,157</td></tr>
<tr><td>Mathieu Joseph</td>
<td>$910,833 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$827,585</td></tr>
<tr><td>Vince Dunn</td>
<td>$888,333 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$807,141</td></tr>
<tr><td>Oliver Bjorkstrand</td>
<td>$871,667 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$791,999</td></tr>
<tr><td>Ivan Barbashev</td>
<td>$863,333 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$784,426</td></tr>
<tr><td>Connor Clifton</td>
<td>$735,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$667,823</td></tr>
<tr><td>Korbinian Holzer</td>
<td>$700,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$636,022</td></tr>
<tr><td>Paul Thompson</td>
<td>$700,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$636,022</td></tr>
<tr><td>Marcus Hogberg</td>
<td>$625,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$567,876</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>23</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $71,314,166</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $45,047,499</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $43,295,833</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $22,450,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $70,689,166</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $44,422,499</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $42,670,833</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $22,450,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $71,314,166</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $45,047,499</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $43,295,833</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $22,450,000</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Aaron Dell</td>
<td>$200,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$181,720</td></tr>
<tr><td>Kevin Labanc</td>
<td>$92,500 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$84,046</td></tr>
<tr><td>Anton Lindholm</td>
<td>$92,500 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$84,046</td></tr>
<tr><td>Austin Wagner</td>
<td>$92,500 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$84,046</td></tr>
<tr><td>Martin Frk</td>
<td>$86,333 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$78,443</td></tr>
<tr><td>Andrew Mangiapane</td>
<td>$80,000 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$72,688</td></tr>
<tr><td>Colin McDonald</td>
<td>$70,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$63,602</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>7</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $713,833</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $351,333</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $172,500</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $0</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $713,833</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $351,333</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $172,500</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $0</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="TeamFinancePro_BUF"><a id="Sabres">Sabres</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=4">Sabres Page</a> ]
[ <a href="OTHL-ProTeamRoster.php#Sabres">Pro Team Roster</a> ]
[ <a href="OTHL-ProTeamScoring.php#Sabres">Pro Team Scoring</a> ]
[ <a href="OTHL-TeamFinance.php#Sabres">Team Finance</a> ]
[ <a href="OTHL-ProTeamPlayersInfo.php#Sabres">Pro Team PlayersInfo</a> ]
[ <a href="OTHL-ProTeamLines.php#Sabres">Pro Team Lines</a> ]
[ <a href="OTHL-TeamProspects.php#Sabres">Team Prospects</a> ]
[ <a href="OTHL-ProTeamSchedule.php#Sabres">Pro Team Schedule</a> ]
[ <a href="OTHL-ProTeamStats.php#Sabres">Pro Team Stats</a> ]
[ <a href="OTHL-ProTeamStatsVS.php#Sabres">Pro Team Stats VS</a> ]
[ <a href="OTHL-TeamInjurySuspension.php#Sabres">Team Injury Suspension</a> ]
[ <a href="OTHL-TeamHistory.php#Sabres">Team History</a> ]
[ <a href="OTHL-TeamRecords.php#Sabres">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Sabres');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Sabres" style="display: block;">
<h2 class="STHSTeamFinance_TeamOverUnderSalaryCap">Sabres is over or under the salary cap!</h2>
<br /><br /><table class="STHSTableFullW"><tr><td style="vertical-align: top;width:440px;">
<table class="STHSFinance_TeamTable">
<tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_AreanaCapacity">Arena Capacity - Ticket Price<br />Attendance - %</h3></td></tr>
<tr><td class="STHSW250">Arena Name</td><td class="STHSW200">HSBC Arena</td></tr>
<tr><td>Level 1: </td><td>6000 - $225 - 3,975 - 66.25%</td></tr>
<tr><td>Level 2: </td><td>5000 - $165 - 2,998 - 59.96%</td></tr>
<tr><td>Level 3: </td><td>4000 - $135 - 2,386 - 59.66%</td></tr>
<tr><td>Level 4: </td><td>3000 - $115 - 1,581 - 52.70%</td></tr>
<tr><td>Luxury : </td><td>1000 - $300 - 743 - 74.25%</td></tr>
<tr><td>Total Capacity :</td><td>19000</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Farm Level 1: </td><td>2000 - $100 - 1,422 - 71.09%</td></tr>
<tr><td>Farm Level 2: </td><td>1000 - $0 - 776 - 77.58%</td></tr>
<tr><td>Farm Total Capacity :</td><td>3000</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Income">Income</h3></td></tr>
<tr><td>Home Games Left</td><td>37</td></tr>
<tr><td>Average Attendance - %</td><td>11,683 - 61.49%</td></tr>
<tr><td>Average Income per Game</td><td>$2,115,713</td></tr>
<tr><td>Year to Date Revenue</td><td>$8,462,850</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Home Games Left</td><td>37</td></tr>
<tr><td>Average Attendance - %</td><td>2,198 - 73.25%</td></tr>
<tr><td>Average Income per Game</td><td>$142,175</td></tr>
<tr><td>Year to Date Revenue</td><td>$568,700</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>$83,245,000</td></tr>
<tr><td>Farm Players Total Salaries</td><td>$1,091,834</td></tr>
<tr><td>Coaches Total Salaries</td><td>$2,900,000</td></tr>
<tr><td>Luxury Taxe Total</td><td>$0</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>$7,407,448</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>$191,794</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>$7,224,655</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>$0</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Pro Estimated Season Revenue</td><td>$78,281,362</td></tr>
<tr><td>Farm Estimated Season Revenue</td><td>$5,260,475</td></tr>
<tr><td>Pro Remaining Season Days</td><td>169</td></tr>
<tr><td>Pro Expenses Per Days</td><td>$458,306</td></tr>
<tr><td>Pro Estimated Expenses</td><td>$77,453,714</td></tr>
<tr><td>Farm Remaining Season Days</td><td>169</td></tr>
<tr><td>Farm Expenses Per Days</td><td>$10,709</td></tr>
<tr><td>Farm Estimated Expenses</td><td>$1,809,821</td></tr>
<tr><td>Estimated Season Expenses</td><td>$79,263,535</td></tr>
<tr><td>Estimated Season Salary Cap</td><td>$82,861,281</td></tr>
<tr><td>Estimate Under Maximum Salary Cap of $81,500,000</td><td><span style="color:red">-$1,361,281</span></td></tr>
<tr><td>Estimate Over Minimum Salary Cap of $58,800,000 </td><td>$24,061,281</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>$64,940,152</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>$69,218,454</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Sidney Crosby</td>
<td>$11,000,000 (6)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$9,994,624</td></tr>
<tr><td>Brent Seabrook</td>
<td>$7,750,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$7,041,667</td></tr>
<tr><td>Anze Kopitar</td>
<td>$7,000,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$6,360,215</td></tr>
<tr><td>Matt Niskanen</td>
<td>$6,100,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$5,542,473</td></tr>
<tr><td>Rasmus Ristolainen</td>
<td>$5,700,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$5,179,032</td></tr>
<tr><td>Anders Lee</td>
<td>$5,500,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$4,997,312</td></tr>
<tr><td>Teuvo Teravainen</td>
<td>$5,400,000 (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$4,906,452</td></tr>
<tr><td>Chris Kreider</td>
<td>$5,100,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$4,633,871</td></tr>
<tr><td>Mikael Backlund</td>
<td>$5,000,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$4,543,011</td></tr>
<tr><td>Josh Manson</td>
<td>$4,500,000 (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$4,088,710</td></tr>
<tr><td>Rickard Rakell</td>
<td>$4,150,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$3,770,699</td></tr>
<tr><td>Dan Hamhuis</td>
<td>$4,000,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$3,634,409</td></tr>
<tr><td>Brenden Dillon</td>
<td>$3,270,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$2,971,129</td></tr>
<tr><td>Zemgus Girgensons</td>
<td>$1,400,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$1,272,043</td></tr>
<tr><td>J.T. Compher</td>
<td>$1,000,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$908,602</td></tr>
<tr><td>Ryan Carpenter</td>
<td>$1,000,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$908,602</td></tr>
<tr><td>Cole Schneider</td>
<td>$1,000,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$908,602</td></tr>
<tr><td>Pavel Buchnevich</td>
<td>$925,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$840,457</td></tr>
<tr><td>Linus Ullmark</td>
<td>$750,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$681,452</td></tr>
<tr><td>Derek Grant</td>
<td>$700,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$636,022</td></tr>
<tr><td>Chad Ruhwedel</td>
<td>$700,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$636,022</td></tr>
<tr><td>Thomas Greiss</td>
<td>$650,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$590,591</td></tr>
<tr><td>Mario Kempe</td>
<td>$650,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$590,591</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>23</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $83,245,000</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $60,670,000</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $47,050,000</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $32,200,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $83,245,000</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $60,670,000</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $47,050,000</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $32,200,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $83,245,000</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $60,670,000</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $47,050,000</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $32,200,000</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Ross Johnston</td>
<td>$100,000 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$90,860</td></tr>
<tr><td>Justin Bailey</td>
<td>$89,417 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$81,244</td></tr>
<tr><td>Remi Elie</td>
<td>$89,417 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$81,244</td></tr>
<tr><td>Michael Amadio</td>
<td>$71,500 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$64,965</td></tr>
<tr><td>Jacob Nilsson</td>
<td>$70,000 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$63,602</td></tr>
<tr><td>Dakota Mermis</td>
<td>$70,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$63,602</td></tr>
<tr><td>Karl Alzner</td>
<td>$70,000 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$63,602</td></tr>
<tr><td>Yannick Weber</td>
<td>$70,000 (4)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$63,602</td></tr>
<tr><td>Taylor Fedun</td>
<td>$70,000 (4)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$63,602</td></tr>
<tr><td>Tyler Lewington</td>
<td>$66,500 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$60,422</td></tr>
<tr><td>Ken Appleby</td>
<td>$65,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$59,059</td></tr>
<tr><td>Turner Elson</td>
<td>$65,000 (5)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$59,059</td></tr>
<tr><td>Trevor Smith</td>
<td>$65,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$59,059</td></tr>
<tr><td>Zac Rinaldo</td>
<td>$65,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$59,059</td></tr>
<tr><td>Kurtis MacDermid</td>
<td>$65,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$59,059</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>15</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $1,091,834</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $872,417</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $445,000</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $205,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $1,091,834</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $872,417</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $445,000</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $205,000</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="TeamFinancePro_OTT"><a id="Senators">Senators</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=21">Senators Page</a> ]
[ <a href="OTHL-ProTeamRoster.php#Senators">Pro Team Roster</a> ]
[ <a href="OTHL-ProTeamScoring.php#Senators">Pro Team Scoring</a> ]
[ <a href="OTHL-TeamFinance.php#Senators">Team Finance</a> ]
[ <a href="OTHL-ProTeamPlayersInfo.php#Senators">Pro Team PlayersInfo</a> ]
[ <a href="OTHL-ProTeamLines.php#Senators">Pro Team Lines</a> ]
[ <a href="OTHL-TeamProspects.php#Senators">Team Prospects</a> ]
[ <a href="OTHL-ProTeamSchedule.php#Senators">Pro Team Schedule</a> ]
[ <a href="OTHL-ProTeamStats.php#Senators">Pro Team Stats</a> ]
[ <a href="OTHL-ProTeamStatsVS.php#Senators">Pro Team Stats VS</a> ]
[ <a href="OTHL-TeamInjurySuspension.php#Senators">Team Injury Suspension</a> ]
[ <a href="OTHL-TeamHistory.php#Senators">Team History</a> ]
[ <a href="OTHL-TeamRecords.php#Senators">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Senators');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Senators" style="display: block;">
<br /><br /><table class="STHSTableFullW"><tr><td style="vertical-align: top;width:440px;">
<table class="STHSFinance_TeamTable">
<tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_AreanaCapacity">Arena Capacity - Ticket Price<br />Attendance - %</h3></td></tr>
<tr><td class="STHSW250">Arena Name</td><td class="STHSW200">Scotiabank Place</td></tr>
<tr><td>Level 1: </td><td>6000 - $105 - 6,000 - 100.00%</td></tr>
<tr><td>Level 2: </td><td>5000 - $75 - 4,949 - 98.98%</td></tr>
<tr><td>Level 3: </td><td>4000 - $55 - 4,000 - 100.00%</td></tr>
<tr><td>Level 4: </td><td>3000 - $45 - 2,942 - 98.06%</td></tr>
<tr><td>Luxury : </td><td>1000 - $210 - 967 - 96.73%</td></tr>
<tr><td>Total Capacity :</td><td>19000</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Farm Level 1: </td><td>2000 - $60 - 1,523 - 76.14%</td></tr>
<tr><td>Farm Level 2: </td><td>1000 - $0 - 767 - 76.68%</td></tr>
<tr><td>Farm Total Capacity :</td><td>3000</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Income">Income</h3></td></tr>
<tr><td>Home Games Left</td><td>37</td></tr>
<tr><td>Average Attendance - %</td><td>18,858 - 99.25%</td></tr>
<tr><td>Average Income per Game</td><td>$1,556,676</td></tr>
<tr><td>Year to Date Revenue</td><td>$6,226,705</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Home Games Left</td><td>37</td></tr>
<tr><td>Average Attendance - %</td><td>2,290 - 76.32%</td></tr>
<tr><td>Average Income per Game</td><td>$91,365</td></tr>
<tr><td>Year to Date Revenue</td><td>$365,460</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>$75,862,500</td></tr>
<tr><td>Farm Players Total Salaries</td><td>$379,167</td></tr>
<tr><td>Coaches Total Salaries</td><td>$5,450,000</td></tr>
<tr><td>Luxury Taxe Total</td><td>$0</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>$7,344,952</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>$121,482</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>$6,933,671</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>$0</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Pro Estimated Season Revenue</td><td>$57,597,021</td></tr>
<tr><td>Farm Estimated Season Revenue</td><td>$3,380,505</td></tr>
<tr><td>Pro Remaining Season Days</td><td>169</td></tr>
<tr><td>Pro Expenses Per Days</td><td>$432,056</td></tr>
<tr><td>Pro Estimated Expenses</td><td>$73,017,464</td></tr>
<tr><td>Farm Remaining Season Days</td><td>169</td></tr>
<tr><td>Farm Expenses Per Days</td><td>$7,146</td></tr>
<tr><td>Farm Estimated Expenses</td><td>$1,207,674</td></tr>
<tr><td>Estimated Season Expenses</td><td>$74,225,138</td></tr>
<tr><td>Estimated Season Salary Cap</td><td>$75,862,518</td></tr>
<tr><td>Estimate Under Maximum Salary Cap of $81,500,000</td><td>$5,637,482</td></tr>
<tr><td>Estimate Over Minimum Salary Cap of $58,800,000 </td><td>$17,062,518</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>$36,923,955</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>$23,676,343</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Vladimir Tarasenko</td>
<td>$8,000,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$7,268,817</td></tr>
<tr><td>Ryan McDonagh</td>
<td>$7,100,000 (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$6,451,075</td></tr>
<tr><td>Erik Johnson</td>
<td>$6,750,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$6,133,065</td></tr>
<tr><td>David Pastrnak</td>
<td>$6,750,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$6,133,065</td></tr>
<tr><td>Jaden Schwartz</td>
<td>$5,600,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$5,088,172</td></tr>
<tr><td>Nick Leddy</td>
<td>$5,500,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$4,997,312</td></tr>
<tr><td>Vincent Trocheck</td>
<td>$5,500,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$4,997,312</td></tr>
<tr><td>Dmitry Orlov</td>
<td>$5,100,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$4,633,871</td></tr>
<tr><td>Andrei Vasilevskiy</td>
<td>$4,000,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$3,634,409</td></tr>
<tr><td>Bryan Rust</td>
<td>$3,500,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$3,180,108</td></tr>
<tr><td>Drew Stafford</td>
<td>$3,350,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$3,043,817</td></tr>
<tr><td>Pierre-Edouard Bellemare</td>
<td>$2,300,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$2,089,785</td></tr>
<tr><td>Jamie Oleksiak</td>
<td>$2,137,500 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$1,942,137</td></tr>
<tr><td>Alexander Petrovic</td>
<td>$1,950,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$1,771,774</td></tr>
<tr><td>Brett Connolly</td>
<td>$1,800,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$1,635,484</td></tr>
<tr><td>Ryan Reaves</td>
<td>$1,750,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$1,590,054</td></tr>
<tr><td>Joakim Nordstrom</td>
<td>$1,000,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$908,602</td></tr>
<tr><td>Jordan Nolan</td>
<td>$850,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$772,312</td></tr>
<tr><td>Fredrik Claesson</td>
<td>$750,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$681,452</td></tr>
<tr><td>Corey Tropp</td>
<td>$750,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$681,452</td></tr>
<tr><td>Dean Kukan</td>
<td>$725,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$658,737</td></tr>
<tr><td>Max Lagace</td>
<td>$700,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$636,022</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>22</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $75,862,500</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $47,350,000</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $33,450,000</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $18,950,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $75,862,500</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $47,350,000</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $33,450,000</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $18,950,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $75,862,500</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $47,350,000</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $33,450,000</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $18,950,000</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Frank Corrado</td>
<td>$100,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$90,860</td></tr>
<tr><td>Trevor Carrick</td>
<td>$75,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$68,145</td></tr>
<tr><td>Tim Heed</td>
<td>$71,667 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$65,117</td></tr>
<tr><td>Calvin Pickard</td>
<td>$70,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$63,602</td></tr>
<tr><td>Dylan McIlrath</td>
<td>$62,500 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$56,788</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>5</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $379,167</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $0</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $379,167</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $0</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="TeamFinancePro_SJS"><a id="Sharks">Sharks</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=26">Sharks Page</a> ]
[ <a href="OTHL-ProTeamRoster.php#Sharks">Pro Team Roster</a> ]
[ <a href="OTHL-ProTeamScoring.php#Sharks">Pro Team Scoring</a> ]
[ <a href="OTHL-TeamFinance.php#Sharks">Team Finance</a> ]
[ <a href="OTHL-ProTeamPlayersInfo.php#Sharks">Pro Team PlayersInfo</a> ]
[ <a href="OTHL-ProTeamLines.php#Sharks">Pro Team Lines</a> ]
[ <a href="OTHL-TeamProspects.php#Sharks">Team Prospects</a> ]
[ <a href="OTHL-ProTeamSchedule.php#Sharks">Pro Team Schedule</a> ]
[ <a href="OTHL-ProTeamStats.php#Sharks">Pro Team Stats</a> ]
[ <a href="OTHL-ProTeamStatsVS.php#Sharks">Pro Team Stats VS</a> ]
[ <a href="OTHL-TeamInjurySuspension.php#Sharks">Team Injury Suspension</a> ]
[ <a href="OTHL-TeamHistory.php#Sharks">Team History</a> ]
[ <a href="OTHL-TeamRecords.php#Sharks">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Sharks');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Sharks" style="display: block;">
<br /><br /><table class="STHSTableFullW"><tr><td style="vertical-align: top;width:440px;">
<table class="STHSFinance_TeamTable">
<tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_AreanaCapacity">Arena Capacity - Ticket Price<br />Attendance - %</h3></td></tr>
<tr><td class="STHSW250">Arena Name</td><td class="STHSW200">HP Pavillion</td></tr>
<tr><td>Level 1: </td><td>6000 - $169 - 5,772 - 96.19%</td></tr>
<tr><td>Level 2: </td><td>5000 - $127 - 4,690 - 93.81%</td></tr>
<tr><td>Level 3: </td><td>4000 - $83 - 4,000 - 100.00%</td></tr>
<tr><td>Level 4: </td><td>3000 - $50 - 2,989 - 99.62%</td></tr>
<tr><td>Luxury : </td><td>1000 - $230 - 972 - 97.17%</td></tr>
<tr><td>Total Capacity :</td><td>19000</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Farm Level 1: </td><td>2000 - $99 - 1,454 - 72.70%</td></tr>
<tr><td>Farm Level 2: </td><td>1000 - $0 - 725 - 72.53%</td></tr>
<tr><td>Farm Total Capacity :</td><td>3000</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Income">Income</h3></td></tr>
<tr><td>Home Games Left</td><td>38</td></tr>
<tr><td>Average Attendance - %</td><td>18,422 - 96.96%</td></tr>
<tr><td>Average Income per Game</td><td>$2,276,001</td></tr>
<tr><td>Year to Date Revenue</td><td>$6,828,002</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Home Games Left</td><td>38</td></tr>
<tr><td>Average Attendance - %</td><td>2,179 - 72.64%</td></tr>
<tr><td>Average Income per Game</td><td>$143,946</td></tr>
<tr><td>Year to Date Revenue</td><td>$431,838</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>$78,373,334</td></tr>
<tr><td>Farm Players Total Salaries</td><td>$812,700</td></tr>
<tr><td>Coaches Total Salaries</td><td>$2,675,000</td></tr>
<tr><td>Luxury Taxe Total</td><td>$0</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>$7,086,410</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>$129,934</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>$6,903,612</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>$0</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Pro Estimated Season Revenue</td><td>$86,488,025</td></tr>
<tr><td>Farm Estimated Season Revenue</td><td>$5,469,948</td></tr>
<tr><td>Pro Remaining Season Days</td><td>169</td></tr>
<tr><td>Pro Expenses Per Days</td><td>$432,115</td></tr>
<tr><td>Pro Estimated Expenses</td><td>$73,027,435</td></tr>
<tr><td>Farm Remaining Season Days</td><td>169</td></tr>
<tr><td>Farm Expenses Per Days</td><td>$7,998</td></tr>
<tr><td>Farm Estimated Expenses</td><td>$1,351,662</td></tr>
<tr><td>Estimated Season Expenses</td><td>$74,379,097</td></tr>
<tr><td>Estimated Season Salary Cap</td><td>$78,113,790</td></tr>
<tr><td>Estimate Under Maximum Salary Cap of $81,500,000</td><td>$3,386,210</td></tr>
<tr><td>Estimate Over Minimum Salary Cap of $58,800,000 </td><td>$19,313,790</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>$73,826,284</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>$91,405,160</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Kris Letang</td>
<td>$8,650,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$7,859,409</td></tr>
<tr><td>Phil Kessel</td>
<td>$7,950,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$7,223,387</td></tr>
<tr><td>Evgeny Kuznetsov</td>
<td>$7,800,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$7,087,097</td></tr>
<tr><td>Filip Forsberg</td>
<td>$7,000,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$6,360,215</td></tr>
<tr><td>Aleksander Barkov</td>
<td>$5,900,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$5,360,753</td></tr>
<tr><td>Jared Spurgeon</td>
<td>$5,750,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$5,224,462</td></tr>
<tr><td>T.J. Brodie</td>
<td>$5,600,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$5,088,172</td></tr>
<tr><td>Tyler Toffoli</td>
<td>$4,800,000 (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$4,361,290</td></tr>
<tr><td>Justin Braun</td>
<td>$4,500,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$4,088,710</td></tr>
<tr><td>Derek Ryan</td>
<td>$4,050,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$3,679,839</td></tr>
<tr><td>Joel Edmundson</td>
<td>$3,500,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$3,180,108</td></tr>
<tr><td>Joel Armia</td>
<td>$1,900,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$1,726,344</td></tr>
<tr><td>Brett Kulak</td>
<td>$1,850,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$1,680,914</td></tr>
<tr><td>Darcy Kuemper</td>
<td>$1,850,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$1,680,914</td></tr>
<tr><td>Laurent Brossoit</td>
<td>$1,250,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$1,135,753</td></tr>
<tr><td>Robert Thomas</td>
<td>$1,177,500 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$1,069,879</td></tr>
<tr><td>Oskar Lindblom</td>
<td>$1,137,500 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$1,033,535</td></tr>
<tr><td>Travis Konecny</td>
<td>$1,106,667 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$1,005,520</td></tr>
<tr><td>Andrew Poturalski</td>
<td>$1,000,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$908,602</td></tr>
<tr><td>Brendan Leipsic</td>
<td>$895,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$813,199</td></tr>
<tr><td>Ondrej Kase</td>
<td>$706,667 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$642,079</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>21</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $78,373,334</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $57,366,667</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $49,277,500</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $30,550,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $78,373,334</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $57,366,667</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $49,277,500</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $30,550,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $78,373,334</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $57,366,667</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $49,277,500</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $30,550,000</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Michal Neuvirth</td>
<td>$210,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$190,806</td></tr>
<tr><td>Victor Rask</td>
<td>$100,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$90,860</td></tr>
<tr><td>Zack MacEwen</td>
<td>$99,600 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$90,497</td></tr>
<tr><td>Jimmy Schuldt</td>
<td>$92,500 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$84,046</td></tr>
<tr><td>Gustav Forsling</td>
<td>$87,500 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$79,503</td></tr>
<tr><td>Dan Renouf</td>
<td>$85,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$77,231</td></tr>
<tr><td>Robbie Russo</td>
<td>$70,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$63,602</td></tr>
<tr><td>Joseph LaBate</td>
<td>$68,100 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$61,876</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>8</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $812,700</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $557,700</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $160,600</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $0</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $812,700</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $557,700</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $160,600</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $0</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="TeamFinancePro_DAL"><a id="Stars">Stars</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=10">Stars Page</a> ]
[ <a href="OTHL-ProTeamRoster.php#Stars">Pro Team Roster</a> ]
[ <a href="OTHL-ProTeamScoring.php#Stars">Pro Team Scoring</a> ]
[ <a href="OTHL-TeamFinance.php#Stars">Team Finance</a> ]
[ <a href="OTHL-ProTeamPlayersInfo.php#Stars">Pro Team PlayersInfo</a> ]
[ <a href="OTHL-ProTeamLines.php#Stars">Pro Team Lines</a> ]
[ <a href="OTHL-TeamProspects.php#Stars">Team Prospects</a> ]
[ <a href="OTHL-ProTeamSchedule.php#Stars">Pro Team Schedule</a> ]
[ <a href="OTHL-ProTeamStats.php#Stars">Pro Team Stats</a> ]
[ <a href="OTHL-ProTeamStatsVS.php#Stars">Pro Team Stats VS</a> ]
[ <a href="OTHL-TeamInjurySuspension.php#Stars">Team Injury Suspension</a> ]
[ <a href="OTHL-TeamHistory.php#Stars">Team History</a> ]
[ <a href="OTHL-TeamRecords.php#Stars">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Stars');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Stars" style="display: block;">
<br /><br /><table class="STHSTableFullW"><tr><td style="vertical-align: top;width:440px;">
<table class="STHSFinance_TeamTable">
<tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_AreanaCapacity">Arena Capacity - Ticket Price<br />Attendance - %</h3></td></tr>
<tr><td class="STHSW250">Arena Name</td><td class="STHSW200">American Airlines Center</td></tr>
<tr><td>Level 1: </td><td>6000 - $185 - 4,502 - 75.04%</td></tr>
<tr><td>Level 2: </td><td>5000 - $115 - 4,801 - 96.02%</td></tr>
<tr><td>Level 3: </td><td>4000 - $75 - 3,860 - 96.51%</td></tr>
<tr><td>Level 4: </td><td>3000 - $64 - 2,786 - 92.86%</td></tr>
<tr><td>Luxury : </td><td>1000 - $290 - 708 - 70.83%</td></tr>
<tr><td>Total Capacity :</td><td>19000</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Farm Level 1: </td><td>2000 - $35 - 1,526 - 76.30%</td></tr>
<tr><td>Farm Level 2: </td><td>1000 - $0 - 722 - 72.20%</td></tr>
<tr><td>Farm Total Capacity :</td><td>3000</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Income">Income</h3></td></tr>
<tr><td>Home Games Left</td><td>38</td></tr>
<tr><td>Average Attendance - %</td><td>16,658 - 87.67%</td></tr>
<tr><td>Average Income per Game</td><td>$2,058,271</td></tr>
<tr><td>Year to Date Revenue</td><td>$6,174,813</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Home Games Left</td><td>38</td></tr>
<tr><td>Average Attendance - %</td><td>2,248 - 74.93%</td></tr>
<tr><td>Average Income per Game</td><td>$53,410</td></tr>
<tr><td>Year to Date Revenue</td><td>$160,230</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>$77,900,833</td></tr>
<tr><td>Farm Players Total Salaries</td><td>$442,583</td></tr>
<tr><td>Coaches Total Salaries</td><td>$2,450,000</td></tr>
<tr><td>Luxury Taxe Total</td><td>$0</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>$7,272,534</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>$104,311</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>$7,112,592</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>$0</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Pro Estimated Season Revenue</td><td>$78,214,298</td></tr>
<tr><td>Farm Estimated Season Revenue</td><td>$2,029,580</td></tr>
<tr><td>Pro Remaining Season Days</td><td>169</td></tr>
<tr><td>Pro Expenses Per Days</td><td>$428,230</td></tr>
<tr><td>Pro Estimated Expenses</td><td>$72,370,870</td></tr>
<tr><td>Farm Remaining Season Days</td><td>169</td></tr>
<tr><td>Farm Expenses Per Days</td><td>$6,143</td></tr>
<tr><td>Farm Estimated Expenses</td><td>$1,038,167</td></tr>
<tr><td>Estimated Season Expenses</td><td>$73,409,037</td></tr>
<tr><td>Estimated Season Salary Cap</td><td>$77,893,510</td></tr>
<tr><td>Estimate Under Maximum Salary Cap of $81,500,000</td><td>$3,606,490</td></tr>
<tr><td>Estimate Over Minimum Salary Cap of $58,800,000 </td><td>$19,093,510</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>$44,720,808</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>$51,555,649</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Patrice Bergeron</td>
<td>$9,500,000 (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$8,631,720</td></tr>
<tr><td>Corey Perry</td>
<td>$8,150,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$7,405,108</td></tr>
<tr><td>Duncan Keith</td>
<td>$7,500,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$6,814,516</td></tr>
<tr><td>Zach Parise</td>
<td>$6,800,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$6,178,495</td></tr>
<tr><td>Cam Talbot</td>
<td>$6,250,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$5,678,763</td></tr>
<tr><td>Jon Marchessault</td>
<td>$5,900,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$5,360,753</td></tr>
<tr><td>Frans Nielsen</td>
<td>$5,650,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$5,133,602</td></tr>
<tr><td>Max Pacioretty</td>
<td>$4,750,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$4,315,860</td></tr>
<tr><td>Thomas Hickey</td>
<td>$3,875,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$3,520,833</td></tr>
<tr><td>Paul Byron</td>
<td>$2,500,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$2,271,505</td></tr>
<tr><td>Craig Anderson</td>
<td>$2,300,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$2,089,785</td></tr>
<tr><td>Mark Letestu</td>
<td>$2,250,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$2,044,355</td></tr>
<tr><td>Greg Pateryn</td>
<td>$2,250,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$2,044,355</td></tr>
<tr><td>Jordie Benn</td>
<td>$2,000,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$1,817,204</td></tr>
<tr><td>Colton Sceviour</td>
<td>$1,750,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$1,590,054</td></tr>
<tr><td>Johan Larsson</td>
<td>$1,600,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$1,453,763</td></tr>
<tr><td>Jason Spezza</td>
<td>$1,200,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$1,090,323</td></tr>
<tr><td>Brendan Gaunce</td>
<td>$1,025,833 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$932,074</td></tr>
<tr><td>Nate Prosser</td>
<td>$950,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$863,172</td></tr>
<tr><td>Mike Reilly</td>
<td>$900,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$817,742</td></tr>
<tr><td>Brandon Davidson</td>
<td>$800,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$726,882</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>21</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $77,900,833</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $69,975,000</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $45,975,000</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $24,150,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $77,900,833</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $69,975,000</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $45,975,000</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $24,150,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $77,900,833</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $69,975,000</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $45,975,000</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $24,150,000</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Matt Puempel</td>
<td>$107,583 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$97,750</td></tr>
<tr><td>Andrew Agozzino</td>
<td>$70,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$63,602</td></tr>
<tr><td>Nicolas Deslauriers</td>
<td>$70,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$63,602</td></tr>
<tr><td>Jean-Francois Berube</td>
<td>$65,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$59,059</td></tr>
<tr><td>Phil Varone</td>
<td>$65,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$59,059</td></tr>
<tr><td>Ryan Sproul</td>
<td>$65,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$59,059</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>6</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $442,583</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $65,000</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $0</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $442,583</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $65,000</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $0</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="TeamFinancePro_MIN"><a id="Wild">Wild</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=15">Wild Page</a> ]
[ <a href="OTHL-ProTeamRoster.php#Wild">Pro Team Roster</a> ]
[ <a href="OTHL-ProTeamScoring.php#Wild">Pro Team Scoring</a> ]
[ <a href="OTHL-TeamFinance.php#Wild">Team Finance</a> ]
[ <a href="OTHL-ProTeamPlayersInfo.php#Wild">Pro Team PlayersInfo</a> ]
[ <a href="OTHL-ProTeamLines.php#Wild">Pro Team Lines</a> ]
[ <a href="OTHL-TeamProspects.php#Wild">Team Prospects</a> ]
[ <a href="OTHL-ProTeamSchedule.php#Wild">Pro Team Schedule</a> ]
[ <a href="OTHL-ProTeamStats.php#Wild">Pro Team Stats</a> ]
[ <a href="OTHL-ProTeamStatsVS.php#Wild">Pro Team Stats VS</a> ]
[ <a href="OTHL-TeamInjurySuspension.php#Wild">Team Injury Suspension</a> ]
[ <a href="OTHL-TeamHistory.php#Wild">Team History</a> ]
[ <a href="OTHL-TeamRecords.php#Wild">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Wild');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Wild" style="display: block;">
<br /><br /><table class="STHSTableFullW"><tr><td style="vertical-align: top;width:440px;">
<table class="STHSFinance_TeamTable">
<tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_AreanaCapacity">Arena Capacity - Ticket Price<br />Attendance - %</h3></td></tr>
<tr><td class="STHSW250">Arena Name</td><td class="STHSW200">Xcel Energy Center</td></tr>
<tr><td>Level 1: </td><td>6000 - $150 - 5,524 - 92.07%</td></tr>
<tr><td>Level 2: </td><td>5000 - $100 - 4,908 - 98.16%</td></tr>
<tr><td>Level 3: </td><td>4000 - $85 - 3,595 - 89.88%</td></tr>
<tr><td>Level 4: </td><td>3000 - $50 - 2,857 - 95.23%</td></tr>
<tr><td>Luxury : </td><td>1000 - $275 - 721 - 72.10%</td></tr>
<tr><td>Total Capacity :</td><td>19000</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Farm Level 1: </td><td>2000 - $35 - 1,564 - 78.20%</td></tr>
<tr><td>Farm Level 2: </td><td>1000 - $0 - 789 - 78.90%</td></tr>
<tr><td>Farm Total Capacity :</td><td>3000</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Income">Income</h3></td></tr>
<tr><td>Home Games Left</td><td>40</td></tr>
<tr><td>Average Attendance - %</td><td>17,605 - 92.66%</td></tr>
<tr><td>Average Income per Game</td><td>$1,966,100</td></tr>
<tr><td>Year to Date Revenue</td><td>$1,966,100</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Home Games Left</td><td>40</td></tr>
<tr><td>Average Attendance - %</td><td>2,353 - 78.43%</td></tr>
<tr><td>Average Income per Game</td><td>$54,740</td></tr>
<tr><td>Year to Date Revenue</td><td>$54,740</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>$61,398,999</td></tr>
<tr><td>Farm Players Total Salaries</td><td>$200,000</td></tr>
<tr><td>Coaches Total Salaries</td><td>$4,550,000</td></tr>
<tr><td>Luxury Taxe Total</td><td>$0</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>$5,606,552</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>$92,792</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>$5,263,815</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>$0</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Pro Estimated Season Revenue</td><td>$78,644,000</td></tr>
<tr><td>Farm Estimated Season Revenue</td><td>$2,189,600</td></tr>
<tr><td>Pro Remaining Season Days</td><td>169</td></tr>
<tr><td>Pro Expenses Per Days</td><td>$350,263</td></tr>
<tr><td>Pro Estimated Expenses</td><td>$59,194,447</td></tr>
<tr><td>Farm Remaining Season Days</td><td>169</td></tr>
<tr><td>Farm Expenses Per Days</td><td>$5,376</td></tr>
<tr><td>Farm Estimated Expenses</td><td>$908,544</td></tr>
<tr><td>Estimated Season Expenses</td><td>$60,102,991</td></tr>
<tr><td>Estimated Season Salary Cap</td><td>$61,051,053</td></tr>
<tr><td>Estimate Under Maximum Salary Cap of $81,500,000</td><td>$20,448,947</td></tr>
<tr><td>Estimate Over Minimum Salary Cap of $58,800,000 </td><td>$2,251,053</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>$80,822,844</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>$101,553,453</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Tyson Barrie</td>
<td>$7,000,000 (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$6,360,215</td></tr>
<tr><td>John Carlson</td>
<td>$6,500,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$5,905,914</td></tr>
<tr><td>Adam Henrique</td>
<td>$5,750,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$5,224,462</td></tr>
<tr><td>Dougie Hamilton</td>
<td>$5,750,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$5,224,462</td></tr>
<tr><td>Nino Niederreiter</td>
<td>$5,500,000 (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$4,997,312</td></tr>
<tr><td>Jakob Silfverberg</td>
<td>$5,250,000 (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$4,770,161</td></tr>
<tr><td>Trevor Daley</td>
<td>$4,250,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$3,861,559</td></tr>
<tr><td>Blake Comeau</td>
<td>$3,500,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$3,180,108</td></tr>
<tr><td>Troy Brouwer</td>
<td>$2,950,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$2,680,376</td></tr>
<tr><td>Kyle Brodziak</td>
<td>$2,500,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$2,271,505</td></tr>
<tr><td>Mikhail Sergachev</td>
<td>$1,744,166 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$1,584,753</td></tr>
<tr><td>Brandon Pirri</td>
<td>$1,250,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$1,135,753</td></tr>
<tr><td>Noah Juulsen</td>
<td>$1,063,333 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$966,147</td></tr>
<tr><td>Anthony Stolarz</td>
<td>$1,000,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$908,602</td></tr>
<tr><td>Troy Grosenick</td>
<td>$950,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$863,172</td></tr>
<tr><td>Jayce Hawryluk</td>
<td>$925,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$840,457</td></tr>
<tr><td>Jordan Binnington</td>
<td>$903,333 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$820,770</td></tr>
<tr><td>Rocco Grimaldi</td>
<td>$900,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$817,742</td></tr>
<tr><td>Conor Garland</td>
<td>$822,333 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$747,174</td></tr>
<tr><td>Casey Nelson</td>
<td>$800,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$726,882</td></tr>
<tr><td>Seth Griffith</td>
<td>$759,167 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$689,781</td></tr>
<tr><td>Tyler Graovac</td>
<td>$700,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$636,022</td></tr>
<tr><td>Sam Carrick</td>
<td>$631,667 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$573,934</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>23</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $61,398,999</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $42,795,666</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $30,532,333</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $17,750,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $61,398,999</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $42,795,666</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $30,532,333</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $17,750,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $61,398,999</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $42,795,666</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $30,532,333</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $17,750,000</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Christian Djoos</td>
<td>$125,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$113,575</td></tr>
<tr><td>Dillon Simpson</td>
<td>$75,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$68,145</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>2</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $200,000</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $75,000</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $0</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $200,000</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $75,000</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $0</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="STHSTeamFinance_SalaryCapCentrale"><a id="SalaryCapCentrale">Salary Cap Centrale</a></h1>
<table class="STHSFinance_TeamTable"><tr>
<td class="STHSCenter"><h3 class="STHSTeamFinance_Team">Team</h3></td>
<td class="STHSCenter"><h3 class="STHSTeamFinance_CurrentFund">Current Fund</h3></td>
<td class="STHSCenter"><h3 class="STHSTeamFinance_EstimatedSeasonSalaryCap">Estimated Season Salary Cap</h3></td>
<td class="STHSCenter"><h3 class="STHSTeamFinance_UnderMaximum">Under Maximum of $81,500,000 <br/> Available Cap Space</h3></td>
<td class="STHSCenter"><h3 class="STHSTeamFinance_OverMinimum">Over Minimum of<br />$58,800,000</h3></td>
<td><h3 class="STHSTeamFinance_ProPlayers">Pro Players</h3></td><td><h3 class="STHSTeamFinance_FarmPlayers">Farm Players</h3></td><td><h3 class="STHSTeamFinance_TotalPlayers">Total Players</h3></td></tr>
<tr><td>Avalanche</td>
<td>$153,028,532</td>
<td>$65,135,822</td>
<td>$16,364,178</td>
<td>$6,335,822</td>
<td>22</td><td>11</td><td>33</td></tr>
<tr><td>Blackhawks</td>
<td>$53,406,193</td>
<td>$80,148,206</td>
<td>$1,351,794</td>
<td>$21,348,206</td>
<td>22</td><td>13</td><td>35</td></tr>
<tr><td>Blue Jackets</td>
<td>$25,160,591</td>
<td>$67,963,922</td>
<td>$13,536,078</td>
<td>$9,163,922</td>
<td>22</td><td>19</td><td>41</td></tr>
<tr><td>Blues</td>
<td>$94,554,805</td>
<td>$60,382,991</td>
<td>$21,117,009</td>
<td>$1,582,991</td>
<td>25</td><td>8</td><td>33</td></tr>
<tr><td>Bruins</td>
<td>$33,999,053</td>
<td>$76,257,706</td>
<td>$5,242,294</td>
<td>$17,457,706</td>
<td>23</td><td>12</td><td>35</td></tr>
<tr><td>Canadiens</td>
<td>$74,073,385</td>
<td>$78,893,388</td>
<td>$2,606,612</td>
<td>$20,093,388</td>
<td>20</td><td>17</td><td>37</td></tr>
<tr><td>Canucks</td>
<td>$114,671,844</td>
<td>$73,588,793</td>
<td>$7,911,207</td>
<td>$14,788,793</td>
<td>23</td><td>22</td><td>45</td></tr>
<tr><td>Capitals</td>
<td>$39,296,816</td>
<td>$74,619,358</td>
<td>$6,880,642</td>
<td>$15,819,358</td>
<td>23</td><td>12</td><td>35</td></tr>
<tr><td>Coyotes</td>
<td>$56,529,351</td>
<td>$79,817,548</td>
<td>$1,682,452</td>
<td>$21,017,548</td>
<td>22</td><td>12</td><td>34</td></tr>
<tr><td>Devils</td>
<td>$73,146,162</td>
<td>$75,834,246</td>
<td>$5,665,754</td>
<td>$17,034,246</td>
<td>23</td><td>2</td><td>25</td></tr>
<tr><td>Ducks</td>
<td>$80,975,358</td>
<td>$78,060,394</td>
<td>$3,439,606</td>
<td>$19,260,394</td>
<td>22</td><td>15</td><td>37</td></tr>
<tr><td>Flames</td>
<td>$39,895,257</td>
<td>$81,329,432</td>
<td>$170,568</td>
<td>$22,529,432</td>
<td>23</td><td>13</td><td>36</td></tr>
<tr><td>Flyers</td>
<td>$11,529,950</td>
<td>$76,275,066</td>
<td>$5,224,934</td>
<td>$17,475,066</td>
<td>23</td><td>5</td><td>28</td></tr>
<tr><td>Golden Knights</td>
<td>$61,445,199</td>
<td>$79,465,480</td>
<td>$2,034,520</td>
<td>$20,665,480</td>
<td>21</td><td>9</td><td>30</td></tr>
<tr><td>Hurricanes</td>
<td>$26,659,953</td>
<td>$66,060,597</td>
<td>$15,439,403</td>
<td>$7,260,597</td>
<td>23</td><td>22</td><td>45</td></tr>
<tr><td>Islanders</td>
<td>$84,258,651</td>
<td>$81,763,214</td>
<td><span style="color:red">-$263,214</span></td>
<td>$22,963,214</td>
<td>24</td><td>6</td><td>30</td></tr>
<tr><td>Jets</td>
<td>$18,056,402</td>
<td>$75,442,048</td>
<td>$6,057,952</td>
<td>$16,642,048</td>
<td>25</td><td>6</td><td>31</td></tr>
<tr><td>Kings</td>
<td>$41,689,962</td>
<td>$79,855,752</td>
<td>$1,644,248</td>
<td>$21,055,752</td>
<td>21</td><td>5</td><td>26</td></tr>
<tr><td>Lightning</td>
<td>-$4,696,850</td>
<td>$71,845,914</td>
<td>$9,654,086</td>
<td>$13,045,914</td>
<td>22</td><td>7</td><td>29</td></tr>
<tr><td>Maple Leafs</td>
<td>$139,376,883</td>
<td>$75,165,727</td>
<td>$6,334,273</td>
<td>$16,365,727</td>
<td>22</td><td>11</td><td>33</td></tr>
<tr><td>Oilers</td>
<td>$126,829,550</td>
<td>$81,231,782</td>
<td>$268,218</td>
<td>$22,431,782</td>
<td>20</td><td>21</td><td>41</td></tr>
<tr><td>Panthers</td>
<td>$52,276,569</td>
<td>$73,972,848</td>
<td>$7,527,152</td>
<td>$15,172,848</td>
<td>22</td><td>14</td><td>36</td></tr>
<tr><td>Penguins</td>
<td>$89,924,194</td>
<td>$62,845,015</td>
<td>$18,654,985</td>
<td>$4,045,015</td>
<td>24</td><td>6</td><td>30</td></tr>
<tr><td>Predators</td>
<td>$145,107,979</td>
<td>$75,330,000</td>
<td>$6,170,000</td>
<td>$16,530,000</td>
<td>22</td><td>9</td><td>31</td></tr>
<tr><td>Rangers</td>
<td>$34,701,040</td>
<td>$79,741,082</td>
<td>$1,758,918</td>
<td>$20,941,082</td>
<td>20</td><td>7</td><td>27</td></tr>
<tr><td>Red Wings</td>
<td>$33,391,289</td>
<td>$71,158,222</td>
<td>$10,341,778</td>
<td>$12,358,222</td>
<td>23</td><td>7</td><td>30</td></tr>
<tr><td>Sabres</td>
<td>$64,940,152</td>
<td>$82,861,281</td>
<td><span style="color:red">-$1,361,281</span></td>
<td>$24,061,281</td>
<td>23</td><td>15</td><td>38</td></tr>
<tr><td>Senators</td>
<td>$36,923,955</td>
<td>$75,862,518</td>
<td>$5,637,482</td>
<td>$17,062,518</td>
<td>22</td><td>5</td><td>27</td></tr>
<tr><td>Sharks</td>
<td>$73,826,284</td>
<td>$78,113,790</td>
<td>$3,386,210</td>
<td>$19,313,790</td>
<td>21</td><td>8</td><td>29</td></tr>
<tr><td>Stars</td>
<td>$44,720,808</td>
<td>$77,893,510</td>
<td>$3,606,490</td>
<td>$19,093,510</td>
<td>21</td><td>6</td><td>27</td></tr>
<tr><td>Wild</td>
<td>$80,822,844</td>
<td>$61,051,053</td>
<td>$20,448,947</td>
<td>$2,251,053</td>
<td>23</td><td>2</td><td>25</td></tr>
</table>
<?php include "Footer.php";?>
