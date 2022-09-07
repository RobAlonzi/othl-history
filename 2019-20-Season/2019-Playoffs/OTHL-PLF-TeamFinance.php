<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<title>OTHL - Team Finance</title>
<script src="OTHL-PLF.js"></script>
<meta name="author" content="Simon Tremblay, sths.simont.info" />
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="Decription" content="Tyler Bell - STHS - Version : 3.2.0.0 - OTHL-STHS.db - OTHL-STHSCareerStat.db"/>
<link href="STHSMain.css" rel="stylesheet" type="text/css" />
<style>
@media screen and (max-width: 960px) {.STHSWarning {display:block;}
.STHSFinance_FarmSalaryTable {display:none;}
.STHSFinance_TeamTable tr > td:nth-child(6){display:none;}
.STHSFinance_TeamTable tr > td:nth-child(7){display:none;}
.STHSFinance_TeamTable tr > td:nth-child(8){display:none;}}
@media screen and (max-width: 720px) {.STHSFinance_ProSalaryTable{display:none}}
</style>
<link href="OTHL-PLF.css" rel="stylesheet" type="text/css" />
<?php If (file_exists("STHSMain-CSSOverwrite.css") == True){echo "<link href=\"STHSMain-CSSOverwrite.css\" rel=\"stylesheet\" type=\"text/css\" />";}?>
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
</div>
<h1 class="TeamFinancePro_COL"><a id="Avalanche">Avalanche</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=8">Avalanche Page</a> ]
[ <a href="OTHL-PLF-ProTeamRoster.php#Avalanche">Pro Team Roster</a> ]
[ <a href="OTHL-PLF-ProTeamScoring.php#Avalanche">Pro Team Scoring</a> ]
[ <a href="OTHL-PLF-TeamFinance.php#Avalanche">Team Finance</a> ]
[ <a href="OTHL-PLF-ProTeamPlayersInfo.php#Avalanche">Pro Team PlayersInfo</a> ]
[ <a href="OTHL-PLF-ProTeamLines.php#Avalanche">Pro Team Lines</a> ]
[ <a href="OTHL-PLF-TeamProspects.php#Avalanche">Team Prospects</a> ]
[ <a href="OTHL-PLF-ProTeamSchedule.php#Avalanche">Pro Team Schedule</a> ]
[ <a href="OTHL-PLF-ProTeamStats.php#Avalanche">Pro Team Stats</a> ]
[ <a href="OTHL-PLF-ProTeamStatsVS.php#Avalanche">Pro Team Stats VS</a> ]
[ <a href="OTHL-PLF-TeamInjurySuspension.php#Avalanche">Team Injury Suspension</a> ]
[ <a href="OTHL-PLF-TeamHistory.php#Avalanche">Team History</a> ]
[ <a href="OTHL-PLF-TeamRecords.php#Avalanche">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Avalanche');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Avalanche" style="display: block;">
<br /><br /><table class="STHSTableFullW"><tr><td style="vertical-align: top;width:440px;">
<table class="STHSFinance_TeamTable">
<tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_AreanaCapacity">Arena Capacity - Ticket Price<br />Attendance - %</h3></td></tr>
<tr><td class="STHSW250">Arena Name</td><td class="STHSW200">Pepsi Center</td></tr>
<tr><td>Level 1: </td><td>6000 - $150 - 0 - 0.00%</td></tr>
<tr><td>Level 2: </td><td>5000 - $121 - 0 - 0.00%</td></tr>
<tr><td>Level 3: </td><td>4000 - $89 - 0 - 0.00%</td></tr>
<tr><td>Level 4: </td><td>3000 - $60 - 0 - 0.00%</td></tr>
<tr><td>Luxury : </td><td>1000 - $249 - 0 - 0.00%</td></tr>
<tr><td>Total Capacity :</td><td>19000</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Farm Level 1: </td><td>2000 - $50 - 0 - 0.00%</td></tr>
<tr><td>Farm Level 2: </td><td>1000 - $0 - 0 - 0.00%</td></tr>
<tr><td>Farm Total Capacity :</td><td>3000</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Income">Income</h3></td></tr>
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>0 - 0.00%</td></tr>
<tr><td>Average Income per Game</td><td>$0</td></tr>
<tr><td>Year to Date Revenue</td><td>$0</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>0 - 0.00%</td></tr>
<tr><td>Average Income per Game</td><td>$0</td></tr>
<tr><td>Year to Date Revenue</td><td>$0</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>$65,235,000</td></tr>
<tr><td>Farm Players Total Salaries</td><td>$645,200</td></tr>
<tr><td>Coaches Total Salaries</td><td>$2,100,000</td></tr>
<tr><td>Luxury Taxe Total</td><td>$0</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>$0</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>$0</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>$0</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>$0</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>$182,831,388</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>$182,831,388</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Patrick Kane</td>
<td>$10,500,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Mikko Koivu</td>
<td>$7,750,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Hampus Lindholm</td>
<td>$6,000,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>J.T. Miller</td>
<td>$5,750,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jake Allen</td>
<td>$5,250,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Brett Pesce</td>
<td>$4,250,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Braydon Coburn</td>
<td>$3,800,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Will Butcher</td>
<td>$3,775,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Michael Frolik</td>
<td>$3,250,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Richard Panik</td>
<td>$2,750,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Brandon Manning</td>
<td>$2,250,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Tobias Rieder</td>
<td>$2,000,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Travis Boyd</td>
<td>$925,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Chris Mueller</td>
<td>$900,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Brandon Carlo</td>
<td>$894,167 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Brock McGinn</td>
<td>$894,167 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jonas Siegenthaler</td>
<td>$888,333 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Blake Pietila</td>
<td>$750,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Julian Melchiori</td>
<td>$700,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Lucas Wallmark</td>
<td>$683,333 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Mike Sgarbossa</td>
<td>$650,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Martin Ouellette</td>
<td>$625,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>22</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $65,235,000</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $54,988,333</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $15,263,333</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $7,000,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $65,235,000</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $54,988,333</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $15,263,333</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $7,000,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $65,235,000</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $54,988,333</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $15,263,333</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $7,000,000</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Mike Vecchione</td>
<td>$100,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Joseph Cramarossa</td>
<td>$95,200 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Adam Clendening</td>
<td>$90,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Kurtis Gabriel</td>
<td>$75,000 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Keegan Lowe</td>
<td>$75,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Chris Driedger</td>
<td>$70,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Mark Alt</td>
<td>$70,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Kevin Czuczman</td>
<td>$70,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>8</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $645,200</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $260,200</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $75,000</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $0</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $645,200</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $260,200</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $75,000</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $0</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="TeamFinancePro_CHI"><a id="Blackhawks">Blackhawks</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=7">Blackhawks Page</a> ]
[ <a href="OTHL-PLF-ProTeamRoster.php#Blackhawks">Pro Team Roster</a> ]
[ <a href="OTHL-PLF-ProTeamScoring.php#Blackhawks">Pro Team Scoring</a> ]
[ <a href="OTHL-PLF-TeamFinance.php#Blackhawks">Team Finance</a> ]
[ <a href="OTHL-PLF-ProTeamPlayersInfo.php#Blackhawks">Pro Team PlayersInfo</a> ]
[ <a href="OTHL-PLF-ProTeamLines.php#Blackhawks">Pro Team Lines</a> ]
[ <a href="OTHL-PLF-TeamProspects.php#Blackhawks">Team Prospects</a> ]
[ <a href="OTHL-PLF-ProTeamSchedule.php#Blackhawks">Pro Team Schedule</a> ]
[ <a href="OTHL-PLF-ProTeamStats.php#Blackhawks">Pro Team Stats</a> ]
[ <a href="OTHL-PLF-ProTeamStatsVS.php#Blackhawks">Pro Team Stats VS</a> ]
[ <a href="OTHL-PLF-TeamInjurySuspension.php#Blackhawks">Team Injury Suspension</a> ]
[ <a href="OTHL-PLF-TeamHistory.php#Blackhawks">Team History</a> ]
[ <a href="OTHL-PLF-TeamRecords.php#Blackhawks">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Blackhawks');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Blackhawks" style="display: block;">
<br /><br /><table class="STHSTableFullW"><tr><td style="vertical-align: top;width:440px;">
<table class="STHSFinance_TeamTable">
<tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_AreanaCapacity">Arena Capacity - Ticket Price<br />Attendance - %</h3></td></tr>
<tr><td class="STHSW250">Arena Name</td><td class="STHSW200">United Center</td></tr>
<tr><td>Level 1: </td><td>6000 - $125 - 6,000 - 100.00%</td></tr>
<tr><td>Level 2: </td><td>5000 - $100 - 4,993 - 99.85%</td></tr>
<tr><td>Level 3: </td><td>4000 - $75 - 4,000 - 100.00%</td></tr>
<tr><td>Level 4: </td><td>3000 - $60 - 3,000 - 100.00%</td></tr>
<tr><td>Luxury : </td><td>1000 - $250 - 1,000 - 100.00%</td></tr>
<tr><td>Total Capacity :</td><td>19000</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Farm Level 1: </td><td>2000 - $35 - 2,000 - 100.00%</td></tr>
<tr><td>Farm Level 2: </td><td>1000 - $0 - 997 - 99.68%</td></tr>
<tr><td>Farm Total Capacity :</td><td>3000</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Income">Income</h3></td></tr>
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>18,993 - 99.96%</td></tr>
<tr><td>Average Income per Game</td><td>$1,979,267</td></tr>
<tr><td>Year to Date Revenue</td><td>$5,937,800</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>2,997 - 99.89%</td></tr>
<tr><td>Average Income per Game</td><td>$70,000</td></tr>
<tr><td>Year to Date Revenue</td><td>$840,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>$85,263,333</td></tr>
<tr><td>Farm Players Total Salaries</td><td>$1,246,667</td></tr>
<tr><td>Coaches Total Salaries</td><td>$3,840,000</td></tr>
<tr><td>Luxury Taxe Total</td><td>$0</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>$0</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>$0</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>$0</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>$0</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>$57,185,687</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>$57,185,687</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Evgeni Malkin</td>
<td>$12,000,000 (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Corey Crawford</td>
<td>$6,850,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Tyler Johnson</td>
<td>$6,500,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jason Zucker</td>
<td>$5,500,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Alexander Wennberg</td>
<td>$5,000,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Justin Faulk</td>
<td>$5,000,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Andrew MacDonald</td>
<td>$5,000,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Carl Hagelin</td>
<td>$4,750,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Tyler Ennis</td>
<td>$4,600,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Shayne Gostisbehere</td>
<td>$4,500,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jimmy Howard</td>
<td>$4,200,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Vladislav Namestnikov</td>
<td>$4,000,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Matt Calvert</td>
<td>$3,250,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Brian Boyle</td>
<td>$3,000,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Zach Werenski</td>
<td>$1,775,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Sebastian Aho</td>
<td>$1,775,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jordan Oesterle</td>
<td>$1,750,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Anthony DeAngelo</td>
<td>$1,363,333 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Matt Benning</td>
<td>$1,075,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>David Kampf</td>
<td>$925,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Zac Dalpe</td>
<td>$850,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Kevin Rooney</td>
<td>$850,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Dominik Simon</td>
<td>$750,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>23</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $85,263,333</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $47,938,333</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $24,250,000</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $22,500,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $85,263,333</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $47,938,333</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $24,250,000</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $22,500,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $85,263,333</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $47,938,333</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $24,250,000</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $22,500,000</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Logan Brown</td>
<td>$157,333 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Griffen Molino</td>
<td>$100,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Austin Czarnik</td>
<td>$97,500 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Max Veronneau</td>
<td>$92,500 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Justin Holl</td>
<td>$92,500 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Kiefer Sherwood</td>
<td>$92,500 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Peter Cehlarik</td>
<td>$92,500 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Valentin Zykov</td>
<td>$89,417 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Adam Erne</td>
<td>$87,417 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Matt Tennyson</td>
<td>$75,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Cameron Schilling</td>
<td>$70,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Al Montoya</td>
<td>$67,500 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Matt Bartkowski</td>
<td>$67,500 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Joseph Blandisi</td>
<td>$65,000 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>14</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $1,246,667</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $804,833</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $222,333</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $0</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $1,246,667</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $804,833</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $222,333</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $0</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="TeamFinancePro_CLB"><a id="BlueJackets">Blue Jackets</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=9">Blue Jackets Page</a> ]
[ <a href="OTHL-PLF-ProTeamRoster.php#BlueJackets">Pro Team Roster</a> ]
[ <a href="OTHL-PLF-ProTeamScoring.php#BlueJackets">Pro Team Scoring</a> ]
[ <a href="OTHL-PLF-TeamFinance.php#BlueJackets">Team Finance</a> ]
[ <a href="OTHL-PLF-ProTeamPlayersInfo.php#BlueJackets">Pro Team PlayersInfo</a> ]
[ <a href="OTHL-PLF-ProTeamLines.php#BlueJackets">Pro Team Lines</a> ]
[ <a href="OTHL-PLF-TeamProspects.php#BlueJackets">Team Prospects</a> ]
[ <a href="OTHL-PLF-ProTeamSchedule.php#BlueJackets">Pro Team Schedule</a> ]
[ <a href="OTHL-PLF-ProTeamStats.php#BlueJackets">Pro Team Stats</a> ]
[ <a href="OTHL-PLF-ProTeamStatsVS.php#BlueJackets">Pro Team Stats VS</a> ]
[ <a href="OTHL-PLF-TeamInjurySuspension.php#BlueJackets">Team Injury Suspension</a> ]
[ <a href="OTHL-PLF-TeamHistory.php#BlueJackets">Team History</a> ]
[ <a href="OTHL-PLF-TeamRecords.php#BlueJackets">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_BlueJackets');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_BlueJackets" style="display: block;">
<br /><br /><table class="STHSTableFullW"><tr><td style="vertical-align: top;width:440px;">
<table class="STHSFinance_TeamTable">
<tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_AreanaCapacity">Arena Capacity - Ticket Price<br />Attendance - %</h3></td></tr>
<tr><td class="STHSW250">Arena Name</td><td class="STHSW200">Nationwide Arena</td></tr>
<tr><td>Level 1: </td><td>6000 - $225 - 0 - 0.00%</td></tr>
<tr><td>Level 2: </td><td>5000 - $165 - 0 - 0.00%</td></tr>
<tr><td>Level 3: </td><td>4000 - $135 - 0 - 0.00%</td></tr>
<tr><td>Level 4: </td><td>3000 - $100 - 0 - 0.00%</td></tr>
<tr><td>Luxury : </td><td>1000 - $300 - 0 - 0.00%</td></tr>
<tr><td>Total Capacity :</td><td>19000</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Farm Level 1: </td><td>2000 - $100 - 1,070 - 53.52%</td></tr>
<tr><td>Farm Level 2: </td><td>1000 - $0 - 989 - 98.93%</td></tr>
<tr><td>Farm Total Capacity :</td><td>3000</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Income">Income</h3></td></tr>
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>0 - 0.00%</td></tr>
<tr><td>Average Income per Game</td><td>$0</td></tr>
<tr><td>Year to Date Revenue</td><td>$0</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>2,060 - 68.66%</td></tr>
<tr><td>Average Income per Game</td><td>$107,033</td></tr>
<tr><td>Year to Date Revenue</td><td>$321,100</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>$46,416,666</td></tr>
<tr><td>Farm Players Total Salaries</td><td>$1,892,500</td></tr>
<tr><td>Coaches Total Salaries</td><td>$2,900,000</td></tr>
<tr><td>Luxury Taxe Total</td><td>$0</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>$0</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>$0</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>$0</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>$0</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>$46,869,345</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>$46,869,345</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Anton Stralman</td>
<td>$5,500,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Danny DeKeyser</td>
<td>$5,000,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jason Demers</td>
<td>$4,500,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jacob Markstrom</td>
<td>$4,000,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Ian Cole</td>
<td>$4,000,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Elias Pettersson</td>
<td>$3,775,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Troy Stecher</td>
<td>$3,000,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Andrew Copp</td>
<td>$1,650,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Anthony Duclair</td>
<td>$1,650,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Sonny Milano</td>
<td>$1,263,333 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jake Virtanen</td>
<td>$1,250,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jason Spezza</td>
<td>$1,200,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Alexander Kerfoot</td>
<td>$1,137,500 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Zach Sanford</td>
<td>$925,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Vinnie Hinostroza</td>
<td>$925,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Andreas Johnsson</td>
<td>$925,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Greg McKegg</td>
<td>$925,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Sam Steel</td>
<td>$925,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Robert Hagg</td>
<td>$894,167 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Cory Conacher</td>
<td>$850,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Alex Lyon</td>
<td>$750,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Denis Malgin</td>
<td>$693,333 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Philippe Myers</td>
<td>$678,333 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>23</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $46,416,666</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $37,298,333</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $24,625,000</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $5,500,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $46,416,666</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $37,298,333</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $24,625,000</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $5,500,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $46,416,666</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $37,298,333</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $24,625,000</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $5,500,000</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Dion Phaneuf</td>
<td>$550,000 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Frederick Gaudreau</td>
<td>$150,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Hunter Shinkaruk</td>
<td>$107,583 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>T.J. Tynan</td>
<td>$92,500 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Sami Niku</td>
<td>$91,667 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Giovanni Fiore</td>
<td>$90,000 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Filip Chlapik</td>
<td>$89,417 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Rourke Chartier</td>
<td>$86,333 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Evan McEneny</td>
<td>$80,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Patrick Russell</td>
<td>$75,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Josh Brown</td>
<td>$70,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Phillip Di Giuseppe</td>
<td>$70,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Tommy Cross</td>
<td>$70,000 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jack Rodewald</td>
<td>$70,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Brad Thiessen</td>
<td>$70,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Erik Burgdoerfer</td>
<td>$65,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Adam Wilcox</td>
<td>$65,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>17</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $1,892,500</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $1,327,417</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $888,000</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $0</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $1,892,500</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $1,327,417</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $888,000</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $0</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="TeamFinancePro_STL"><a id="Blues">Blues</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=25">Blues Page</a> ]
[ <a href="OTHL-PLF-ProTeamRoster.php#Blues">Pro Team Roster</a> ]
[ <a href="OTHL-PLF-ProTeamScoring.php#Blues">Pro Team Scoring</a> ]
[ <a href="OTHL-PLF-TeamFinance.php#Blues">Team Finance</a> ]
[ <a href="OTHL-PLF-ProTeamPlayersInfo.php#Blues">Pro Team PlayersInfo</a> ]
[ <a href="OTHL-PLF-ProTeamLines.php#Blues">Pro Team Lines</a> ]
[ <a href="OTHL-PLF-TeamProspects.php#Blues">Team Prospects</a> ]
[ <a href="OTHL-PLF-ProTeamSchedule.php#Blues">Pro Team Schedule</a> ]
[ <a href="OTHL-PLF-ProTeamStats.php#Blues">Pro Team Stats</a> ]
[ <a href="OTHL-PLF-ProTeamStatsVS.php#Blues">Pro Team Stats VS</a> ]
[ <a href="OTHL-PLF-TeamInjurySuspension.php#Blues">Team Injury Suspension</a> ]
[ <a href="OTHL-PLF-TeamHistory.php#Blues">Team History</a> ]
[ <a href="OTHL-PLF-TeamRecords.php#Blues">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Blues');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Blues" style="display: block;">
<br /><br /><table class="STHSTableFullW"><tr><td style="vertical-align: top;width:440px;">
<table class="STHSFinance_TeamTable">
<tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_AreanaCapacity">Arena Capacity - Ticket Price<br />Attendance - %</h3></td></tr>
<tr><td class="STHSW250">Arena Name</td><td class="STHSW200">Scottrade Center</td></tr>
<tr><td>Level 1: </td><td>6000 - $175 - 0 - 0.00%</td></tr>
<tr><td>Level 2: </td><td>5000 - $125 - 0 - 0.00%</td></tr>
<tr><td>Level 3: </td><td>4000 - $111 - 0 - 0.00%</td></tr>
<tr><td>Level 4: </td><td>3000 - $80 - 0 - 0.00%</td></tr>
<tr><td>Luxury : </td><td>1000 - $300 - 0 - 0.00%</td></tr>
<tr><td>Total Capacity :</td><td>19000</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Farm Level 1: </td><td>2000 - $100 - 0 - 0.00%</td></tr>
<tr><td>Farm Level 2: </td><td>1000 - $0 - 0 - 0.00%</td></tr>
<tr><td>Farm Total Capacity :</td><td>3000</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Income">Income</h3></td></tr>
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>0 - 0.00%</td></tr>
<tr><td>Average Income per Game</td><td>$0</td></tr>
<tr><td>Year to Date Revenue</td><td>$0</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>0 - 0.00%</td></tr>
<tr><td>Average Income per Game</td><td>$0</td></tr>
<tr><td>Year to Date Revenue</td><td>$0</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>$61,699,166</td></tr>
<tr><td>Farm Players Total Salaries</td><td>$1,161,000</td></tr>
<tr><td>Coaches Total Salaries</td><td>$3,300,000</td></tr>
<tr><td>Luxury Taxe Total</td><td>$0</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>$0</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>$0</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>$0</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>$0</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>$119,730,004</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>$119,730,004</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Jonathan Quick</td>
<td>$7,250,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jason Pominville</td>
<td>$6,250,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Andrew Ladd</td>
<td>$6,000,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jonathan Drouin</td>
<td>$5,500,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>David Savard</td>
<td>$4,750,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Brendan Smith</td>
<td>$4,250,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Ryan Callahan</td>
<td>$4,000,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Antoine Roussel</td>
<td>$3,250,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Carter Rowney</td>
<td>$2,000,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Thomas Vanek</td>
<td>$2,000,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Louis Domingue</td>
<td>$2,000,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Cedric Paquette</td>
<td>$1,660,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Loui Eriksson</td>
<td>$1,500,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Duncan Siemens</td>
<td>$1,388,333 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jakub Vrana</td>
<td>$1,363,333 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Steve Bernier</td>
<td>$1,250,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Anthony Beauvillier</td>
<td>$1,106,667 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Dalton Prout</td>
<td>$1,000,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Samuel Girard</td>
<td>$935,833 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Nick Seeler</td>
<td>$925,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Alex Biega</td>
<td>$900,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Ashton Sautner</td>
<td>$900,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Tanner Kero</td>
<td>$820,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jean-Sebastien Dea</td>
<td>$700,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>24</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $61,699,166</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $51,372,499</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $20,060,000</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $12,410,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $61,699,166</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $51,372,499</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $20,060,000</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $12,410,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $61,699,166</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $51,372,499</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $20,060,000</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $12,410,000</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Andrew Hammond</td>
<td>$275,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Brendan Lemieux</td>
<td>$103,917 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Scott Darling</td>
<td>$100,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Paul Ladue</td>
<td>$92,500 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Marko Dano</td>
<td>$92,500 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Joseph Gambardella</td>
<td>$90,000 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Josh Currie</td>
<td>$90,000 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Victor Mete</td>
<td>$87,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Luke Gazdic</td>
<td>$82,500 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Karson Kuhlman</td>
<td>$75,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Samuel Blais</td>
<td>$72,583 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>11</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $1,161,000</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $986,000</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $180,000</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $0</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $1,161,000</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $986,000</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $180,000</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $0</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="TeamFinancePro_BOS"><a id="Bruins">Bruins</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=3">Bruins Page</a> ]
[ <a href="OTHL-PLF-ProTeamRoster.php#Bruins">Pro Team Roster</a> ]
[ <a href="OTHL-PLF-ProTeamScoring.php#Bruins">Pro Team Scoring</a> ]
[ <a href="OTHL-PLF-TeamFinance.php#Bruins">Team Finance</a> ]
[ <a href="OTHL-PLF-ProTeamPlayersInfo.php#Bruins">Pro Team PlayersInfo</a> ]
[ <a href="OTHL-PLF-ProTeamLines.php#Bruins">Pro Team Lines</a> ]
[ <a href="OTHL-PLF-TeamProspects.php#Bruins">Team Prospects</a> ]
[ <a href="OTHL-PLF-ProTeamSchedule.php#Bruins">Pro Team Schedule</a> ]
[ <a href="OTHL-PLF-ProTeamStats.php#Bruins">Pro Team Stats</a> ]
[ <a href="OTHL-PLF-ProTeamStatsVS.php#Bruins">Pro Team Stats VS</a> ]
[ <a href="OTHL-PLF-TeamInjurySuspension.php#Bruins">Team Injury Suspension</a> ]
[ <a href="OTHL-PLF-TeamHistory.php#Bruins">Team History</a> ]
[ <a href="OTHL-PLF-TeamRecords.php#Bruins">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Bruins');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Bruins" style="display: block;">
<br /><br /><table class="STHSTableFullW"><tr><td style="vertical-align: top;width:440px;">
<table class="STHSFinance_TeamTable">
<tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_AreanaCapacity">Arena Capacity - Ticket Price<br />Attendance - %</h3></td></tr>
<tr><td class="STHSW250">Arena Name</td><td class="STHSW200">TD Banknorth Garden</td></tr>
<tr><td>Level 1: </td><td>6000 - $165 - 6,000 - 100.00%</td></tr>
<tr><td>Level 2: </td><td>5000 - $115 - 5,000 - 100.00%</td></tr>
<tr><td>Level 3: </td><td>4000 - $90 - 4,000 - 100.00%</td></tr>
<tr><td>Level 4: </td><td>3000 - $65 - 3,000 - 100.00%</td></tr>
<tr><td>Luxury : </td><td>1000 - $255 - 1,000 - 100.00%</td></tr>
<tr><td>Total Capacity :</td><td>19000</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Farm Level 1: </td><td>2000 - $100 - 1,166 - 58.29%</td></tr>
<tr><td>Farm Level 2: </td><td>1000 - $0 - 1,000 - 100.00%</td></tr>
<tr><td>Farm Total Capacity :</td><td>3000</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Income">Income</h3></td></tr>
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>19,000 - 100.00%</td></tr>
<tr><td>Average Income per Game</td><td>$2,375,000</td></tr>
<tr><td>Year to Date Revenue</td><td>$9,500,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>2,166 - 72.19%</td></tr>
<tr><td>Average Income per Game</td><td>$116,575</td></tr>
<tr><td>Year to Date Revenue</td><td>$466,300</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>$95,197,083</td></tr>
<tr><td>Farm Players Total Salaries</td><td>$1,147,207</td></tr>
<tr><td>Coaches Total Salaries</td><td>$3,900,000</td></tr>
<tr><td>Luxury Taxe Total</td><td>$0</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>$0</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>$0</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>$0</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>$0</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>$56,540,978</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>$56,540,978</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Eric Staal</td>
<td>$9,400,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Dustin Byfuglien</td>
<td>$9,000,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Sean Couturier</td>
<td>$7,700,000 (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Evgenii Dadonov (1 Way Contract)</td>
<td>$7,200,000 (6)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Braden Holtby</td>
<td>$7,100,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Brad Marchand</td>
<td>$7,000,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Bryan Little</td>
<td>$5,500,000 (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Justin Abdelkader (1 Way Contract)</td>
<td>$4,500,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Tomas Tatar</td>
<td>$4,500,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Erik Gudbranson</td>
<td>$4,500,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Cody Eakin</td>
<td>$4,250,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Boone Jenner</td>
<td>$3,750,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Ben Chiarot</td>
<td>$3,500,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Mikkel Boedker</td>
<td>$3,300,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Zach Hyman</td>
<td>$3,000,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Brayden McNabb</td>
<td>$2,800,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Gabriel Bourque</td>
<td>$1,400,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jack Campbell</td>
<td>$1,340,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Joonas Korpisalo</td>
<td>$1,150,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Par Lindholm</td>
<td>$925,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Blake Coleman</td>
<td>$925,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Mirco Mueller</td>
<td>$850,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Matt Roy</td>
<td>$833,750 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Ben Harpur</td>
<td>$773,333 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>24</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $95,197,083</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $64,200,000</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $39,450,000</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $20,400,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $95,197,083</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $64,200,000</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $39,450,000</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $20,400,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $95,197,083</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $64,200,000</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $39,450,000</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $20,400,000</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Brendan Perlini</td>
<td>$136,333 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Vladislav Gavrikov</td>
<td>$135,000 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Gustav Olofsson</td>
<td>$120,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Noah Juulsen</td>
<td>$106,333 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Kole Sherwood</td>
<td>$100,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jaycob Megna</td>
<td>$100,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Chris Bigras</td>
<td>$90,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Anthony Angello</td>
<td>$83,375 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Matthew Villalta</td>
<td>$77,833 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Nathan Walker</td>
<td>$68,333 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jake Dotchin</td>
<td>$65,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Justin Auger</td>
<td>$65,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>12</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $1,147,207</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $657,541</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $296,208</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $0</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $1,147,207</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $657,541</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $296,208</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $0</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="TeamFinancePro_MTL"><a id="Canadiens">Canadiens</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=16">Canadiens Page</a> ]
[ <a href="OTHL-PLF-ProTeamRoster.php#Canadiens">Pro Team Roster</a> ]
[ <a href="OTHL-PLF-ProTeamScoring.php#Canadiens">Pro Team Scoring</a> ]
[ <a href="OTHL-PLF-TeamFinance.php#Canadiens">Team Finance</a> ]
[ <a href="OTHL-PLF-ProTeamPlayersInfo.php#Canadiens">Pro Team PlayersInfo</a> ]
[ <a href="OTHL-PLF-ProTeamLines.php#Canadiens">Pro Team Lines</a> ]
[ <a href="OTHL-PLF-TeamProspects.php#Canadiens">Team Prospects</a> ]
[ <a href="OTHL-PLF-ProTeamSchedule.php#Canadiens">Pro Team Schedule</a> ]
[ <a href="OTHL-PLF-ProTeamStats.php#Canadiens">Pro Team Stats</a> ]
[ <a href="OTHL-PLF-ProTeamStatsVS.php#Canadiens">Pro Team Stats VS</a> ]
[ <a href="OTHL-PLF-TeamInjurySuspension.php#Canadiens">Team Injury Suspension</a> ]
[ <a href="OTHL-PLF-TeamHistory.php#Canadiens">Team History</a> ]
[ <a href="OTHL-PLF-TeamRecords.php#Canadiens">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Canadiens');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Canadiens" style="display: block;">
<br /><br /><table class="STHSTableFullW"><tr><td style="vertical-align: top;width:440px;">
<table class="STHSFinance_TeamTable">
<tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_AreanaCapacity">Arena Capacity - Ticket Price<br />Attendance - %</h3></td></tr>
<tr><td class="STHSW250">Arena Name</td><td class="STHSW200">Bell Centre</td></tr>
<tr><td>Level 1: </td><td>6000 - $200 - 4,899 - 81.64%</td></tr>
<tr><td>Level 2: </td><td>5000 - $150 - 3,914 - 78.29%</td></tr>
<tr><td>Level 3: </td><td>4000 - $125 - 3,048 - 76.21%</td></tr>
<tr><td>Level 4: </td><td>3000 - $105 - 2,053 - 68.43%</td></tr>
<tr><td>Luxury : </td><td>1000 - $275 - 908 - 90.76%</td></tr>
<tr><td>Total Capacity :</td><td>19000</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Farm Level 1: </td><td>2000 - $75 - 1,622 - 81.12%</td></tr>
<tr><td>Farm Level 2: </td><td>1000 - $0 - 1,000 - 100.00%</td></tr>
<tr><td>Farm Total Capacity :</td><td>3000</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Income">Income</h3></td></tr>
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>14,822 - 78.01%</td></tr>
<tr><td>Average Income per Game</td><td>$2,413,039</td></tr>
<tr><td>Year to Date Revenue</td><td>$12,065,195</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>2,622 - 87.41%</td></tr>
<tr><td>Average Income per Game</td><td>$121,682</td></tr>
<tr><td>Year to Date Revenue</td><td>$851,775</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>$78,893,333</td></tr>
<tr><td>Farm Players Total Salaries</td><td>$1,709,584</td></tr>
<tr><td>Coaches Total Salaries</td><td>$2,850,000</td></tr>
<tr><td>Luxury Taxe Total</td><td>$0</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>$0</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>$0</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>$0</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>$0</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>$91,800,213</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>$91,800,213</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Jeff Carter</td>
<td>$10,000,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Marc-Edouard Vlasic</td>
<td>$8,000,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Aaron Ekblad</td>
<td>$7,650,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Mark Scheifele</td>
<td>$7,500,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Artemi Panarin</td>
<td>$7,500,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Nikolaj Ehlers</td>
<td>$6,000,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Ben Bishop</td>
<td>$5,500,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>John Klingberg</td>
<td>$4,500,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Connor Murphy</td>
<td>$3,850,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Nikita Zadorov</td>
<td>$3,500,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Valtteri Filppula</td>
<td>$3,000,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Brandon Tanev</td>
<td>$2,000,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Melker Karlsson</td>
<td>$2,000,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Ivan Provorov</td>
<td>$1,774,167 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Clayton Keller</td>
<td>$1,673,333 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Daniel Sprong</td>
<td>$925,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Cal O'Reilly</td>
<td>$900,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Alex DeBrincat</td>
<td>$894,167 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Carter Hart</td>
<td>$863,333 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Anthony Mantha</td>
<td>$863,333 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
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
<tr><td>Alexander Petrovic</td>
<td>$195,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Henrik Borgstrom</td>
<td>$149,167 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Kalle Kossila</td>
<td>$100,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Michael Kapla</td>
<td>$100,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Adam Tambellini</td>
<td>$92,500 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jonny Brodzinski</td>
<td>$92,500 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Alex Schoenborn</td>
<td>$92,500 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Sheldon Rempal</td>
<td>$90,000 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jacob MacDonald</td>
<td>$90,000 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>T.J. Brennan</td>
<td>$90,000 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Alex Nedeljkovic</td>
<td>$89,417 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Ryan Lomberg</td>
<td>$85,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Vladislav Kamenev</td>
<td>$83,333 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Curtis McKenzie</td>
<td>$80,000 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Chad Johnson</td>
<td>$75,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Brian Lashoff</td>
<td>$75,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Matt Luff</td>
<td>$67,667 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Austen Brassard</td>
<td>$62,500 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>18</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $1,709,584</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $899,334</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $746,667</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $0</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $1,709,084</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $898,834</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $746,167</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $0</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="TeamFinancePro_VAN"><a id="Canucks">Canucks</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=29">Canucks Page</a> ]
[ <a href="OTHL-PLF-ProTeamRoster.php#Canucks">Pro Team Roster</a> ]
[ <a href="OTHL-PLF-ProTeamScoring.php#Canucks">Pro Team Scoring</a> ]
[ <a href="OTHL-PLF-TeamFinance.php#Canucks">Team Finance</a> ]
[ <a href="OTHL-PLF-ProTeamPlayersInfo.php#Canucks">Pro Team PlayersInfo</a> ]
[ <a href="OTHL-PLF-ProTeamLines.php#Canucks">Pro Team Lines</a> ]
[ <a href="OTHL-PLF-TeamProspects.php#Canucks">Team Prospects</a> ]
[ <a href="OTHL-PLF-ProTeamSchedule.php#Canucks">Pro Team Schedule</a> ]
[ <a href="OTHL-PLF-ProTeamStats.php#Canucks">Pro Team Stats</a> ]
[ <a href="OTHL-PLF-ProTeamStatsVS.php#Canucks">Pro Team Stats VS</a> ]
[ <a href="OTHL-PLF-TeamInjurySuspension.php#Canucks">Team Injury Suspension</a> ]
[ <a href="OTHL-PLF-TeamHistory.php#Canucks">Team History</a> ]
[ <a href="OTHL-PLF-TeamRecords.php#Canucks">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Canucks');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Canucks" style="display: block;">
<br /><br /><table class="STHSTableFullW"><tr><td style="vertical-align: top;width:440px;">
<table class="STHSFinance_TeamTable">
<tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_AreanaCapacity">Arena Capacity - Ticket Price<br />Attendance - %</h3></td></tr>
<tr><td class="STHSW250">Arena Name</td><td class="STHSW200">GM Place</td></tr>
<tr><td>Level 1: </td><td>6000 - $164 - 5,951 - 99.18%</td></tr>
<tr><td>Level 2: </td><td>5000 - $115 - 4,951 - 99.02%</td></tr>
<tr><td>Level 3: </td><td>4000 - $90 - 4,000 - 100.00%</td></tr>
<tr><td>Level 4: </td><td>3000 - $63 - 3,000 - 100.00%</td></tr>
<tr><td>Luxury : </td><td>1000 - $253 - 998 - 99.77%</td></tr>
<tr><td>Total Capacity :</td><td>19000</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Farm Level 1: </td><td>2000 - $100 - 1,200 - 59.98%</td></tr>
<tr><td>Farm Level 2: </td><td>1000 - $0 - 995 - 99.48%</td></tr>
<tr><td>Farm Total Capacity :</td><td>3000</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Income">Income</h3></td></tr>
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>18,900 - 99.47%</td></tr>
<tr><td>Average Income per Game</td><td>$2,346,739</td></tr>
<tr><td>Year to Date Revenue</td><td>$7,040,216</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>2,194 - 73.15%</td></tr>
<tr><td>Average Income per Game</td><td>$119,960</td></tr>
<tr><td>Year to Date Revenue</td><td>$599,800</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>$77,052,500</td></tr>
<tr><td>Farm Players Total Salaries</td><td>$2,524,083</td></tr>
<tr><td>Coaches Total Salaries</td><td>$2,500,000</td></tr>
<tr><td>Luxury Taxe Total</td><td>$0</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>$0</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>$0</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>$0</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>$0</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>$142,385,879</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>$142,385,879</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Ryan Kesler</td>
<td>$7,200,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Alex Steen</td>
<td>$6,500,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Henrik Lundqvist</td>
<td>$6,250,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Brandon Dubinsky</td>
<td>$5,750,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Dougie Hamilton</td>
<td>$5,750,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Tyler Myers</td>
<td>$5,650,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Nikita Zaitsev</td>
<td>$4,500,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Nick Bjugstad</td>
<td>$4,100,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Pat Maroon</td>
<td>$3,950,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Auston Matthews</td>
<td>$3,775,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Nico Hischier</td>
<td>$3,775,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Cal Clutterbuck</td>
<td>$3,500,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Nick Bonino</td>
<td>$2,500,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Stephen Johns</td>
<td>$2,400,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Devante Smith-Pelly</td>
<td>$2,000,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Scott Mayfield</td>
<td>$2,000,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Kyle Connor</td>
<td>$1,775,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Mikko Rantanen</td>
<td>$1,627,500 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Ryan Carpenter</td>
<td>$1,000,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Alexandar Georgiev</td>
<td>$925,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>MacKenzie Weegar</td>
<td>$800,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>William Carrier</td>
<td>$700,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Gavin Bayreuther</td>
<td>$625,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>23</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $77,052,500</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $55,575,000</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $15,850,000</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $6,500,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $77,052,500</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $55,575,000</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $15,850,000</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $6,500,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $77,052,500</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $55,575,000</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $15,850,000</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $6,500,000</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Cory Schneider</td>
<td>$400,000 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Valeri Nichushkin</td>
<td>$295,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Haydn Fleury</td>
<td>$171,333 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>J.T. Brown</td>
<td>$125,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Joshua Ho-Sang</td>
<td>$107,583 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Logan O'Connor</td>
<td>$95,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jamie McGinn</td>
<td>$95,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Rudolfs Balcers</td>
<td>$92,500 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Anton Blidh</td>
<td>$92,500 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jacob Larsson</td>
<td>$89,417 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Nic Petan</td>
<td>$86,333 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Chris Terry</td>
<td>$85,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Brett Seney</td>
<td>$82,500 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Matt Lorito</td>
<td>$80,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Ben Gleason</td>
<td>$76,167 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Steven Fogarty</td>
<td>$75,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jacob Middleton</td>
<td>$73,500 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Joel L'Esperance</td>
<td>$72,250 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Brogan Rafferty</td>
<td>$70,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Danick Martel</td>
<td>$70,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Gabriel Dumont</td>
<td>$65,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Hunter Miska</td>
<td>$62,500 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Landon Bow</td>
<td>$62,500 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>23</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $2,524,083</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $1,772,667</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $814,084</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $0</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $2,511,583</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $1,772,667</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $814,084</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $0</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="TeamFinancePro_WSH"><a id="Capitals">Capitals</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=30">Capitals Page</a> ]
[ <a href="OTHL-PLF-ProTeamRoster.php#Capitals">Pro Team Roster</a> ]
[ <a href="OTHL-PLF-ProTeamScoring.php#Capitals">Pro Team Scoring</a> ]
[ <a href="OTHL-PLF-TeamFinance.php#Capitals">Team Finance</a> ]
[ <a href="OTHL-PLF-ProTeamPlayersInfo.php#Capitals">Pro Team PlayersInfo</a> ]
[ <a href="OTHL-PLF-ProTeamLines.php#Capitals">Pro Team Lines</a> ]
[ <a href="OTHL-PLF-TeamProspects.php#Capitals">Team Prospects</a> ]
[ <a href="OTHL-PLF-ProTeamSchedule.php#Capitals">Pro Team Schedule</a> ]
[ <a href="OTHL-PLF-ProTeamStats.php#Capitals">Pro Team Stats</a> ]
[ <a href="OTHL-PLF-ProTeamStatsVS.php#Capitals">Pro Team Stats VS</a> ]
[ <a href="OTHL-PLF-TeamInjurySuspension.php#Capitals">Team Injury Suspension</a> ]
[ <a href="OTHL-PLF-TeamHistory.php#Capitals">Team History</a> ]
[ <a href="OTHL-PLF-TeamRecords.php#Capitals">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Capitals');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Capitals" style="display: block;">
<br /><br /><table class="STHSTableFullW"><tr><td style="vertical-align: top;width:440px;">
<table class="STHSFinance_TeamTable">
<tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_AreanaCapacity">Arena Capacity - Ticket Price<br />Attendance - %</h3></td></tr>
<tr><td class="STHSW250">Arena Name</td><td class="STHSW200">Verizon Center</td></tr>
<tr><td>Level 1: </td><td>6000 - $165 - 6,000 - 100.00%</td></tr>
<tr><td>Level 2: </td><td>5000 - $112 - 4,958 - 99.15%</td></tr>
<tr><td>Level 3: </td><td>4000 - $90 - 3,968 - 99.21%</td></tr>
<tr><td>Level 4: </td><td>3000 - $65 - 3,000 - 100.00%</td></tr>
<tr><td>Luxury : </td><td>1000 - $250 - 1,000 - 100.00%</td></tr>
<tr><td>Total Capacity :</td><td>19000</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Farm Level 1: </td><td>2000 - $35 - 2,000 - 100.00%</td></tr>
<tr><td>Farm Level 2: </td><td>1000 - $0 - 1,000 - 100.00%</td></tr>
<tr><td>Farm Total Capacity :</td><td>3000</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Income">Income</h3></td></tr>
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>18,926 - 99.61%</td></tr>
<tr><td>Average Income per Game</td><td>$2,347,409</td></tr>
<tr><td>Year to Date Revenue</td><td>$7,042,226</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>3,000 - 100.00%</td></tr>
<tr><td>Average Income per Game</td><td>$70,000</td></tr>
<tr><td>Year to Date Revenue</td><td>$140,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>$87,469,834</td></tr>
<tr><td>Farm Players Total Salaries</td><td>$599,417</td></tr>
<tr><td>Coaches Total Salaries</td><td>$6,800,000</td></tr>
<tr><td>Luxury Taxe Total</td><td>$0</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>$0</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>$0</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>$0</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>$0</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>$50,709,780</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>$50,709,780</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Jack Eichel</td>
<td>$10,000,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jamie Benn</td>
<td>$9,300,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Drew Doughty</td>
<td>$9,250,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jacob Trouba</td>
<td>$7,500,000 (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>T.J. Oshie</td>
<td>$6,850,000 (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Vincent Trocheck</td>
<td>$5,500,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Dmitry Orlov</td>
<td>$5,100,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Alec Martinez</td>
<td>$5,000,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Gustav Nyquist</td>
<td>$4,750,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Kyle Palmieri</td>
<td>$4,650,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Paul Byron</td>
<td>$2,500,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Greg Pateryn</td>
<td>$2,250,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>David Schlemko</td>
<td>$2,000,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Petr Mrazek</td>
<td>$1,900,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Pavel Zacha</td>
<td>$1,744,167 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Curtis McElhinney</td>
<td>$1,600,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Alex Iafallo</td>
<td>$925,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Carl Grundstrom</td>
<td>$925,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Matthew Peca</td>
<td>$925,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Chandler Stephenson</td>
<td>$925,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jujhar Khaira</td>
<td>$894,167 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Spencer Martin</td>
<td>$894,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Sean Walker</td>
<td>$745,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Michael Chaput</td>
<td>$675,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Kevin Gravel</td>
<td>$667,500 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>25</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $87,469,834</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $73,420,000</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $52,125,000</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $36,450,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $87,469,834</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $73,420,000</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $52,125,000</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $36,450,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $87,469,834</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $73,420,000</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $52,125,000</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $36,450,000</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Blake Lizotte</td>
<td>$92,500 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Laurent Dauphin</td>
<td>$89,417 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>A.J. Greer</td>
<td>$82,500 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Luke Witkowski</td>
<td>$75,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Steven Kampfer</td>
<td>$65,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Chris Conner</td>
<td>$65,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Oscar Fantenberg</td>
<td>$65,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Andrew Campbell</td>
<td>$65,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>8</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $599,417</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $305,000</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $175,000</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $0</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $599,417</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $305,000</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $175,000</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $0</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="TeamFinancePro_ARI"><a id="Coyotes">Coyotes</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=23">Coyotes Page</a> ]
[ <a href="OTHL-PLF-ProTeamRoster.php#Coyotes">Pro Team Roster</a> ]
[ <a href="OTHL-PLF-ProTeamScoring.php#Coyotes">Pro Team Scoring</a> ]
[ <a href="OTHL-PLF-TeamFinance.php#Coyotes">Team Finance</a> ]
[ <a href="OTHL-PLF-ProTeamPlayersInfo.php#Coyotes">Pro Team PlayersInfo</a> ]
[ <a href="OTHL-PLF-ProTeamLines.php#Coyotes">Pro Team Lines</a> ]
[ <a href="OTHL-PLF-TeamProspects.php#Coyotes">Team Prospects</a> ]
[ <a href="OTHL-PLF-ProTeamSchedule.php#Coyotes">Pro Team Schedule</a> ]
[ <a href="OTHL-PLF-ProTeamStats.php#Coyotes">Pro Team Stats</a> ]
[ <a href="OTHL-PLF-ProTeamStatsVS.php#Coyotes">Pro Team Stats VS</a> ]
[ <a href="OTHL-PLF-TeamInjurySuspension.php#Coyotes">Team Injury Suspension</a> ]
[ <a href="OTHL-PLF-TeamHistory.php#Coyotes">Team History</a> ]
[ <a href="OTHL-PLF-TeamRecords.php#Coyotes">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Coyotes');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Coyotes" style="display: block;">
<br /><br /><table class="STHSTableFullW"><tr><td style="vertical-align: top;width:440px;">
<table class="STHSFinance_TeamTable">
<tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_AreanaCapacity">Arena Capacity - Ticket Price<br />Attendance - %</h3></td></tr>
<tr><td class="STHSW250">Arena Name</td><td class="STHSW200">Jobing.com Arena</td></tr>
<tr><td>Level 1: </td><td>6000 - $220 - 4,777 - 79.62%</td></tr>
<tr><td>Level 2: </td><td>5000 - $160 - 4,080 - 81.59%</td></tr>
<tr><td>Level 3: </td><td>4000 - $135 - 3,092 - 77.30%</td></tr>
<tr><td>Level 4: </td><td>3000 - $110 - 2,099 - 69.96%</td></tr>
<tr><td>Luxury : </td><td>1000 - $300 - 883 - 88.29%</td></tr>
<tr><td>Total Capacity :</td><td>19000</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Farm Level 1: </td><td>2000 - $35 - 0 - 0.00%</td></tr>
<tr><td>Farm Level 2: </td><td>1000 - $0 - 0 - 0.00%</td></tr>
<tr><td>Farm Total Capacity :</td><td>3000</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Income">Income</h3></td></tr>
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>14,930 - 78.58%</td></tr>
<tr><td>Average Income per Game</td><td>$2,635,840</td></tr>
<tr><td>Year to Date Revenue</td><td>$26,358,400</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>0 - 0.00%</td></tr>
<tr><td>Average Income per Game</td><td>$0</td></tr>
<tr><td>Year to Date Revenue</td><td>$0</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>$84,724,667</td></tr>
<tr><td>Farm Players Total Salaries</td><td>$1,599,666</td></tr>
<tr><td>Coaches Total Salaries</td><td>$5,250,000</td></tr>
<tr><td>Luxury Taxe Total</td><td>$0</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>$0</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>$0</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>$0</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>$0</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>$83,104,906</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>$83,104,906</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Leon Draisaitl</td>
<td>$8,500,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Oliver Ekman-Larsson</td>
<td>$8,100,000 (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Nikita Kucherov</td>
<td>$7,750,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Tuukka Rask</td>
<td>$7,500,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jeff Skinner</td>
<td>$6,750,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Kevin Hayes</td>
<td>$6,200,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Niklas Hjalmarsson</td>
<td>$4,900,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Cody Ceci</td>
<td>$4,800,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Wayne Simmonds</td>
<td>$4,750,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jay Bouwmeester</td>
<td>$4,500,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Mika Zibanejad</td>
<td>$3,800,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Dylan Strome</td>
<td>$3,338,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Keith Kinkaid</td>
<td>$2,100,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Carl Gunnarsson</td>
<td>$1,750,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Nate Thompson</td>
<td>$1,750,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>William Nylander</td>
<td>$1,744,167 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Andrej Sekera</td>
<td>$1,500,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Slater Koekkoek</td>
<td>$1,444,167 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Thomas Chabot</td>
<td>$1,223,333 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Oskar Sundqvist</td>
<td>$925,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Dale Weise</td>
<td>$750,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Nic Dowd</td>
<td>$650,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>22</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $84,724,667</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $59,786,333</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $37,050,000</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $29,550,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $84,724,667</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $59,786,333</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $37,050,000</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $29,550,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $84,724,667</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $59,786,333</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $37,050,000</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $29,550,000</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Griffin Reinhart</td>
<td>$321,333 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Matt Hunwick</td>
<td>$225,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Kevin Fiala</td>
<td>$136,333 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Filip Chytil</td>
<td>$124,417 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Christian Fischer</td>
<td>$107,583 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Antti Suomela</td>
<td>$92,500 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Nico Sturm</td>
<td>$92,500 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Brady Keeper</td>
<td>$92,500 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Tanner Fritz</td>
<td>$80,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Erik Condra</td>
<td>$70,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Tyler Gaudet</td>
<td>$65,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Michael Leighton</td>
<td>$65,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Harry Zolnierczyk</td>
<td>$65,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Sheldon Dries</td>
<td>$62,500 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>14</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $1,599,666</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $818,333</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $309,417</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $0</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $1,589,666</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $818,333</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $309,417</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $0</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="TeamFinancePro_NJD"><a id="Devils">Devils</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=18">Devils Page</a> ]
[ <a href="OTHL-PLF-ProTeamRoster.php#Devils">Pro Team Roster</a> ]
[ <a href="OTHL-PLF-ProTeamScoring.php#Devils">Pro Team Scoring</a> ]
[ <a href="OTHL-PLF-TeamFinance.php#Devils">Team Finance</a> ]
[ <a href="OTHL-PLF-ProTeamPlayersInfo.php#Devils">Pro Team PlayersInfo</a> ]
[ <a href="OTHL-PLF-ProTeamLines.php#Devils">Pro Team Lines</a> ]
[ <a href="OTHL-PLF-TeamProspects.php#Devils">Team Prospects</a> ]
[ <a href="OTHL-PLF-ProTeamSchedule.php#Devils">Pro Team Schedule</a> ]
[ <a href="OTHL-PLF-ProTeamStats.php#Devils">Pro Team Stats</a> ]
[ <a href="OTHL-PLF-ProTeamStatsVS.php#Devils">Pro Team Stats VS</a> ]
[ <a href="OTHL-PLF-TeamInjurySuspension.php#Devils">Team Injury Suspension</a> ]
[ <a href="OTHL-PLF-TeamHistory.php#Devils">Team History</a> ]
[ <a href="OTHL-PLF-TeamRecords.php#Devils">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Devils');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Devils" style="display: block;">
<br /><br /><table class="STHSTableFullW"><tr><td style="vertical-align: top;width:440px;">
<table class="STHSFinance_TeamTable">
<tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_AreanaCapacity">Arena Capacity - Ticket Price<br />Attendance - %</h3></td></tr>
<tr><td class="STHSW250">Arena Name</td><td class="STHSW200">Prudential Center</td></tr>
<tr><td>Level 1: </td><td>6000 - $155 - 0 - 0.00%</td></tr>
<tr><td>Level 2: </td><td>5000 - $105 - 0 - 0.00%</td></tr>
<tr><td>Level 3: </td><td>4000 - $65 - 0 - 0.00%</td></tr>
<tr><td>Level 4: </td><td>3000 - $50 - 0 - 0.00%</td></tr>
<tr><td>Luxury : </td><td>1000 - $170 - 0 - 0.00%</td></tr>
<tr><td>Total Capacity :</td><td>19000</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Farm Level 1: </td><td>2000 - $40 - 0 - 0.00%</td></tr>
<tr><td>Farm Level 2: </td><td>1000 - $0 - 0 - 0.00%</td></tr>
<tr><td>Farm Total Capacity :</td><td>3000</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Income">Income</h3></td></tr>
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>0 - 0.00%</td></tr>
<tr><td>Average Income per Game</td><td>$0</td></tr>
<tr><td>Year to Date Revenue</td><td>$0</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>0 - 0.00%</td></tr>
<tr><td>Average Income per Game</td><td>$0</td></tr>
<tr><td>Year to Date Revenue</td><td>$0</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>$70,784,167</td></tr>
<tr><td>Farm Players Total Salaries</td><td>$599,167</td></tr>
<tr><td>Coaches Total Salaries</td><td>$2,275,000</td></tr>
<tr><td>Luxury Taxe Total</td><td>$0</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>$0</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>$0</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>$0</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>$0</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>$82,831,341</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>$82,831,341</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Ryan Getzlaf</td>
<td>$9,000,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Patric Hornqvist</td>
<td>$7,000,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Chris Tanev</td>
<td>$6,500,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Robin Lehner</td>
<td>$6,000,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>William Karlsson</td>
<td>$5,850,000 (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Adam Larsson</td>
<td>$5,000,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Michael Grabner</td>
<td>$4,850,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jimmy Vesey</td>
<td>$3,775,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Darnell Nurse</td>
<td>$3,250,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Riley Sheahan</td>
<td>$2,900,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Martin Hanzal</td>
<td>$2,700,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Matt Moulson</td>
<td>$1,850,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Nick Ritchie</td>
<td>$1,675,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Michael Raffl</td>
<td>$1,650,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Timo Meier</td>
<td>$1,644,167 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Christian Folin</td>
<td>$1,500,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Michal Kempny</td>
<td>$1,000,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Markus Nutivaara</td>
<td>$925,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Garret Sparks</td>
<td>$850,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Maxime Lajoie</td>
<td>$790,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Gemel Smith</td>
<td>$700,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Colby Cave</td>
<td>$700,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Patrick Brown</td>
<td>$675,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>23</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $70,784,167</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $55,434,167</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $37,250,000</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $34,350,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $70,784,167</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $55,434,167</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $37,250,000</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $34,350,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $70,784,167</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $55,434,167</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $37,250,000</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $34,350,000</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Kirby Dach</td>
<td>$342,500 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Anders Bjork</td>
<td>$106,667 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Mark Friedman</td>
<td>$82,500 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Kyle Criscuolo</td>
<td>$67,500 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>4</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $599,167</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $531,667</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $425,000</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $0</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $599,167</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $531,667</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $425,000</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $0</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="TeamFinancePro_ANH"><a id="Ducks">Ducks</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=1">Ducks Page</a> ]
[ <a href="OTHL-PLF-ProTeamRoster.php#Ducks">Pro Team Roster</a> ]
[ <a href="OTHL-PLF-ProTeamScoring.php#Ducks">Pro Team Scoring</a> ]
[ <a href="OTHL-PLF-TeamFinance.php#Ducks">Team Finance</a> ]
[ <a href="OTHL-PLF-ProTeamPlayersInfo.php#Ducks">Pro Team PlayersInfo</a> ]
[ <a href="OTHL-PLF-ProTeamLines.php#Ducks">Pro Team Lines</a> ]
[ <a href="OTHL-PLF-TeamProspects.php#Ducks">Team Prospects</a> ]
[ <a href="OTHL-PLF-ProTeamSchedule.php#Ducks">Pro Team Schedule</a> ]
[ <a href="OTHL-PLF-ProTeamStats.php#Ducks">Pro Team Stats</a> ]
[ <a href="OTHL-PLF-ProTeamStatsVS.php#Ducks">Pro Team Stats VS</a> ]
[ <a href="OTHL-PLF-TeamInjurySuspension.php#Ducks">Team Injury Suspension</a> ]
[ <a href="OTHL-PLF-TeamHistory.php#Ducks">Team History</a> ]
[ <a href="OTHL-PLF-TeamRecords.php#Ducks">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Ducks');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Ducks" style="display: block;">
<br /><br /><table class="STHSTableFullW"><tr><td style="vertical-align: top;width:440px;">
<table class="STHSFinance_TeamTable">
<tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_AreanaCapacity">Arena Capacity - Ticket Price<br />Attendance - %</h3></td></tr>
<tr><td class="STHSW250">Arena Name</td><td class="STHSW200">Honda Center</td></tr>
<tr><td>Level 1: </td><td>6000 - $148 - 0 - 0.00%</td></tr>
<tr><td>Level 2: </td><td>5000 - $116 - 0 - 0.00%</td></tr>
<tr><td>Level 3: </td><td>4000 - $97 - 0 - 0.00%</td></tr>
<tr><td>Level 4: </td><td>3000 - $64 - 0 - 0.00%</td></tr>
<tr><td>Luxury : </td><td>1000 - $240 - 0 - 0.00%</td></tr>
<tr><td>Total Capacity :</td><td>19000</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Farm Level 1: </td><td>2000 - $35 - 2,000 - 100.00%</td></tr>
<tr><td>Farm Level 2: </td><td>1000 - $0 - 980 - 98.00%</td></tr>
<tr><td>Farm Total Capacity :</td><td>3000</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Income">Income</h3></td></tr>
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>0 - 0.00%</td></tr>
<tr><td>Average Income per Game</td><td>$0</td></tr>
<tr><td>Year to Date Revenue</td><td>$0</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>2,980 - 99.33%</td></tr>
<tr><td>Average Income per Game</td><td>$70,000</td></tr>
<tr><td>Year to Date Revenue</td><td>$140,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>$84,251,249</td></tr>
<tr><td>Farm Players Total Salaries</td><td>$1,142,799</td></tr>
<tr><td>Coaches Total Salaries</td><td>$3,750,000</td></tr>
<tr><td>Luxury Taxe Total</td><td>$0</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>$0</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>$0</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>$0</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>$0</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>$91,135,267</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>$91,135,267</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Jake Muzzin</td>
<td>$8,000,000 (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Johnny Gaudreau</td>
<td>$7,250,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Sean Monahan</td>
<td>$6,375,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Nazem Kadri</td>
<td>$6,100,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Travis Zajac</td>
<td>$6,000,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Brayden Schenn</td>
<td>$6,000,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Mike Smith</td>
<td>$5,800,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Morgan Rielly</td>
<td>$5,500,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Ryan Murray</td>
<td>$4,600,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Marc Methot</td>
<td>$4,500,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Antti Raanta</td>
<td>$3,600,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Alex Chiasson</td>
<td>$3,200,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jay Beagle</td>
<td>$3,000,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Luke Schenn</td>
<td>$2,500,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Devin Shore</td>
<td>$2,300,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Mattias Janmark</td>
<td>$2,000,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Mark Jankowski</td>
<td>$1,493,750 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Josh Morrissey</td>
<td>$1,363,333 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Charlie McAvoy</td>
<td>$1,258,333 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Zach Aston-Reese</td>
<td>$925,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jake Guentzel</td>
<td>$925,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Tyler Bertuzzi</td>
<td>$910,833 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Colin Miller</td>
<td>$650,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>23</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $84,251,249</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $58,008,333</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $28,975,000</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $14,100,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $84,251,249</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $58,008,333</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $28,975,000</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $14,100,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $84,251,249</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $58,008,333</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $28,975,000</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $14,100,000</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Zach Senyshyn</td>
<td>$128,800 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Trent Frederic</td>
<td>$113,750 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Martin Marincin</td>
<td>$92,500 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Dillon Dube</td>
<td>$91,083 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Tristan Jarry</td>
<td>$90,500 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Emile Poirier</td>
<td>$86,333 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Morgan Klimchuk</td>
<td>$86,333 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Ian Scott</td>
<td>$82,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Caleb Jones</td>
<td>$81,500 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Warren Foegele</td>
<td>$80,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Nicolas Kerdiles</td>
<td>$75,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Kenny Agostino</td>
<td>$70,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Trevor Moore</td>
<td>$65,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>13</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $1,142,799</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $663,466</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $415,133</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $0</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $1,142,799</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $663,466</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $415,133</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $0</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="TeamFinancePro_CGY"><a id="Flames">Flames</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=5">Flames Page</a> ]
[ <a href="OTHL-PLF-ProTeamRoster.php#Flames">Pro Team Roster</a> ]
[ <a href="OTHL-PLF-ProTeamScoring.php#Flames">Pro Team Scoring</a> ]
[ <a href="OTHL-PLF-TeamFinance.php#Flames">Team Finance</a> ]
[ <a href="OTHL-PLF-ProTeamPlayersInfo.php#Flames">Pro Team PlayersInfo</a> ]
[ <a href="OTHL-PLF-ProTeamLines.php#Flames">Pro Team Lines</a> ]
[ <a href="OTHL-PLF-TeamProspects.php#Flames">Team Prospects</a> ]
[ <a href="OTHL-PLF-ProTeamSchedule.php#Flames">Pro Team Schedule</a> ]
[ <a href="OTHL-PLF-ProTeamStats.php#Flames">Pro Team Stats</a> ]
[ <a href="OTHL-PLF-ProTeamStatsVS.php#Flames">Pro Team Stats VS</a> ]
[ <a href="OTHL-PLF-TeamInjurySuspension.php#Flames">Team Injury Suspension</a> ]
[ <a href="OTHL-PLF-TeamHistory.php#Flames">Team History</a> ]
[ <a href="OTHL-PLF-TeamRecords.php#Flames">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Flames');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Flames" style="display: block;">
<br /><br /><table class="STHSTableFullW"><tr><td style="vertical-align: top;width:440px;">
<table class="STHSFinance_TeamTable">
<tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_AreanaCapacity">Arena Capacity - Ticket Price<br />Attendance - %</h3></td></tr>
<tr><td class="STHSW250">Arena Name</td><td class="STHSW200">Pengrowth Saddledome</td></tr>
<tr><td>Level 1: </td><td>6000 - $169 - 5,971 - 99.52%</td></tr>
<tr><td>Level 2: </td><td>5000 - $127 - 4,976 - 99.51%</td></tr>
<tr><td>Level 3: </td><td>4000 - $81 - 4,000 - 100.00%</td></tr>
<tr><td>Level 4: </td><td>3000 - $50 - 3,000 - 100.00%</td></tr>
<tr><td>Luxury : </td><td>1000 - $220 - 1,000 - 100.00%</td></tr>
<tr><td>Total Capacity :</td><td>19000</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Farm Level 1: </td><td>2000 - $50 - 1,992 - 99.61%</td></tr>
<tr><td>Farm Level 2: </td><td>1000 - $0 - 1,000 - 100.00%</td></tr>
<tr><td>Farm Total Capacity :</td><td>3000</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Income">Income</h3></td></tr>
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>18,947 - 99.72%</td></tr>
<tr><td>Average Income per Game</td><td>$2,334,997</td></tr>
<tr><td>Year to Date Revenue</td><td>$16,344,976</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>2,992 - 99.74%</td></tr>
<tr><td>Average Income per Game</td><td>$99,606</td></tr>
<tr><td>Year to Date Revenue</td><td>$796,850</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>$77,731,250</td></tr>
<tr><td>Farm Players Total Salaries</td><td>$1,182,333</td></tr>
<tr><td>Coaches Total Salaries</td><td>$5,700,000</td></tr>
<tr><td>Luxury Taxe Total</td><td>$0</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>$0</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>$0</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>$0</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>$0</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>$66,869,923</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>$66,869,923</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Erik Karlsson</td>
<td>$9,200,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Taylor Hall</td>
<td>$8,750,000 (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Pekka Rinne</td>
<td>$7,000,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Dylan Larkin</td>
<td>$6,100,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Bo Horvat</td>
<td>$5,500,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jaccob Slavin</td>
<td>$5,000,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>David Perron</td>
<td>$4,500,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Viktor Arvidsson</td>
<td>$4,500,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Roman Polak</td>
<td>$4,250,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Phillip Danault</td>
<td>$3,300,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Radko Gudas</td>
<td>$3,250,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Adam Lowry</td>
<td>$2,900,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Tom Wilson</td>
<td>$2,500,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Austin Watson</td>
<td>$1,650,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Markus Granlund</td>
<td>$1,475,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Alex Stalock</td>
<td>$1,250,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Casey DeSmith</td>
<td>$1,150,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Devon Toews</td>
<td>$1,031,250 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Garnet Hathaway</td>
<td>$925,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Brady Skjei</td>
<td>$925,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Kevin Labanc</td>
<td>$925,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jonathon Merrill</td>
<td>$850,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Andre Burakovsky</td>
<td>$800,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>23</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $77,731,250</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $60,331,250</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $36,231,250</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $16,500,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $77,731,250</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $60,331,250</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $36,231,250</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $16,500,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $77,731,250</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $60,331,250</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $36,231,250</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $16,500,000</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Samuel Morin</td>
<td>$136,333 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jack Roslovic</td>
<td>$110,667 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Taro Hirose</td>
<td>$92,500 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Steven Santini</td>
<td>$92,500 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Christoffer Ehn</td>
<td>$92,500 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Vinni Lettieri</td>
<td>$92,500 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Oscar Dansk</td>
<td>$92,500 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Blake Hillman</td>
<td>$92,500 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Matthew Highmore</td>
<td>$92,500 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Tyrell Goulbourne</td>
<td>$77,333 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jordan Subban</td>
<td>$75,500 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Kyle Rau</td>
<td>$70,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Brad Malone</td>
<td>$65,000 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>13</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $1,182,333</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $1,019,833</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $371,166</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $0</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $1,182,333</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $1,019,833</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $371,166</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $0</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="TeamFinancePro_PHL"><a id="Flyers">Flyers</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=22">Flyers Page</a> ]
[ <a href="OTHL-PLF-ProTeamRoster.php#Flyers">Pro Team Roster</a> ]
[ <a href="OTHL-PLF-ProTeamScoring.php#Flyers">Pro Team Scoring</a> ]
[ <a href="OTHL-PLF-TeamFinance.php#Flyers">Team Finance</a> ]
[ <a href="OTHL-PLF-ProTeamPlayersInfo.php#Flyers">Pro Team PlayersInfo</a> ]
[ <a href="OTHL-PLF-ProTeamLines.php#Flyers">Pro Team Lines</a> ]
[ <a href="OTHL-PLF-TeamProspects.php#Flyers">Team Prospects</a> ]
[ <a href="OTHL-PLF-ProTeamSchedule.php#Flyers">Pro Team Schedule</a> ]
[ <a href="OTHL-PLF-ProTeamStats.php#Flyers">Pro Team Stats</a> ]
[ <a href="OTHL-PLF-ProTeamStatsVS.php#Flyers">Pro Team Stats VS</a> ]
[ <a href="OTHL-PLF-TeamInjurySuspension.php#Flyers">Team Injury Suspension</a> ]
[ <a href="OTHL-PLF-TeamHistory.php#Flyers">Team History</a> ]
[ <a href="OTHL-PLF-TeamRecords.php#Flyers">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Flyers');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Flyers" style="display: block;">
<br /><br /><table class="STHSTableFullW"><tr><td style="vertical-align: top;width:440px;">
<table class="STHSFinance_TeamTable">
<tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_AreanaCapacity">Arena Capacity - Ticket Price<br />Attendance - %</h3></td></tr>
<tr><td class="STHSW250">Arena Name</td><td class="STHSW200">Wachovia Center</td></tr>
<tr><td>Level 1: </td><td>6000 - $225 - 0 - 0.00%</td></tr>
<tr><td>Level 2: </td><td>5000 - $165 - 0 - 0.00%</td></tr>
<tr><td>Level 3: </td><td>4000 - $125 - 0 - 0.00%</td></tr>
<tr><td>Level 4: </td><td>3000 - $25 - 0 - 0.00%</td></tr>
<tr><td>Luxury : </td><td>1000 - $300 - 0 - 0.00%</td></tr>
<tr><td>Total Capacity :</td><td>19000</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Farm Level 1: </td><td>2000 - $40 - 2,000 - 100.00%</td></tr>
<tr><td>Farm Level 2: </td><td>1000 - $0 - 1,000 - 100.00%</td></tr>
<tr><td>Farm Total Capacity :</td><td>3000</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Income">Income</h3></td></tr>
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>0 - 0.00%</td></tr>
<tr><td>Average Income per Game</td><td>$0</td></tr>
<tr><td>Year to Date Revenue</td><td>$0</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>3,000 - 100.00%</td></tr>
<tr><td>Average Income per Game</td><td>$80,000</td></tr>
<tr><td>Year to Date Revenue</td><td>$160,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>$94,994,166</td></tr>
<tr><td>Farm Players Total Salaries</td><td>$1,465,167</td></tr>
<tr><td>Coaches Total Salaries</td><td>$3,600,000</td></tr>
<tr><td>Luxury Taxe Total</td><td>$0</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>$0</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>$0</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>$0</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>$0</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>$14,048,255</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>$14,048,255</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Alexander Edler</td>
<td>$7,000,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Keith Yandle</td>
<td>$6,350,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Ilya Kovalchuk</td>
<td>$6,250,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Brock Nelson</td>
<td>$6,000,000 (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Justin Williams</td>
<td>$6,000,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Cam Atkinson</td>
<td>$5,900,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Brandon Saad</td>
<td>$5,500,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jake Gardiner</td>
<td>$5,000,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jaroslav Halak</td>
<td>$4,500,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Marco Scandella</td>
<td>$4,250,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Max Domi</td>
<td>$4,250,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jonas Brodin</td>
<td>$4,200,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Rasmus Dahlin</td>
<td>$3,775,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Andrew Shaw</td>
<td>$3,700,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Sven Baertschi</td>
<td>$3,400,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Pierre-Luc Dubois</td>
<td>$3,394,166 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Ryan Strome</td>
<td>$3,100,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jonathan Ericsson</td>
<td>$3,000,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Mark Pysyk</td>
<td>$2,700,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Mikko Koskinen</td>
<td>$2,500,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Brett Connolly</td>
<td>$1,800,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Josh Leivo</td>
<td>$1,500,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Maxime Comtois</td>
<td>$925,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>23</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $94,994,166</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $59,994,166</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $39,200,000</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $19,350,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $94,994,166</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $59,994,166</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $39,200,000</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $19,350,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $94,994,166</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $59,994,166</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $39,200,000</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $19,350,000</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Ryan Miller</td>
<td>$500,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Brian Gibbons</td>
<td>$300,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Kailer Yamamoto</td>
<td>$112,417 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Joel Eriksson Ek</td>
<td>$110,667 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Joseph Morrow</td>
<td>$100,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Justin Kloos</td>
<td>$97,500 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Alex Broadhurst</td>
<td>$85,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Cameron Gaunce</td>
<td>$84,583 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Dillon Simpson</td>
<td>$75,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>9</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $1,465,167</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $754,500</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $112,417</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $0</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $1,465,167</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $754,500</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $112,417</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $0</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="TeamFinancePro_VGK"><a id="GoldenKnights">Golden Knights</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=31">Golden Knights Page</a> ]
[ <a href="OTHL-PLF-ProTeamRoster.php#GoldenKnights">Pro Team Roster</a> ]
[ <a href="OTHL-PLF-ProTeamScoring.php#GoldenKnights">Pro Team Scoring</a> ]
[ <a href="OTHL-PLF-TeamFinance.php#GoldenKnights">Team Finance</a> ]
[ <a href="OTHL-PLF-ProTeamPlayersInfo.php#GoldenKnights">Pro Team PlayersInfo</a> ]
[ <a href="OTHL-PLF-ProTeamLines.php#GoldenKnights">Pro Team Lines</a> ]
[ <a href="OTHL-PLF-TeamProspects.php#GoldenKnights">Team Prospects</a> ]
[ <a href="OTHL-PLF-ProTeamSchedule.php#GoldenKnights">Pro Team Schedule</a> ]
[ <a href="OTHL-PLF-ProTeamStats.php#GoldenKnights">Pro Team Stats</a> ]
[ <a href="OTHL-PLF-ProTeamStatsVS.php#GoldenKnights">Pro Team Stats VS</a> ]
[ <a href="OTHL-PLF-TeamInjurySuspension.php#GoldenKnights">Team Injury Suspension</a> ]
[ <a href="OTHL-PLF-TeamHistory.php#GoldenKnights">Team History</a> ]
[ <a href="OTHL-PLF-TeamRecords.php#GoldenKnights">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_GoldenKnights');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_GoldenKnights" style="display: block;">
<br /><br /><table class="STHSTableFullW"><tr><td style="vertical-align: top;width:440px;">
<table class="STHSFinance_TeamTable">
<tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_AreanaCapacity">Arena Capacity - Ticket Price<br />Attendance - %</h3></td></tr>
<tr><td class="STHSW250">Arena Name</td><td class="STHSW200">T-Mobile Arena</td></tr>
<tr><td>Level 1: </td><td>6000 - $174 - 0 - 0.00%</td></tr>
<tr><td>Level 2: </td><td>5000 - $127 - 0 - 0.00%</td></tr>
<tr><td>Level 3: </td><td>4000 - $100 - 0 - 0.00%</td></tr>
<tr><td>Level 4: </td><td>3000 - $75 - 0 - 0.00%</td></tr>
<tr><td>Luxury : </td><td>1000 - $264 - 0 - 0.00%</td></tr>
<tr><td>Total Capacity :</td><td>19000</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Farm Level 1: </td><td>2000 - $40 - 2,000 - 100.00%</td></tr>
<tr><td>Farm Level 2: </td><td>1000 - $0 - 980 - 98.00%</td></tr>
<tr><td>Farm Total Capacity :</td><td>3000</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Income">Income</h3></td></tr>
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>0 - 0.00%</td></tr>
<tr><td>Average Income per Game</td><td>$0</td></tr>
<tr><td>Year to Date Revenue</td><td>$0</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>2,980 - 99.33%</td></tr>
<tr><td>Average Income per Game</td><td>$80,000</td></tr>
<tr><td>Year to Date Revenue</td><td>$240,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>$54,454,165</td></tr>
<tr><td>Farm Players Total Salaries</td><td>$827,417</td></tr>
<tr><td>Coaches Total Salaries</td><td>$3,600,000</td></tr>
<tr><td>Luxury Taxe Total</td><td>$0</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>$0</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>$0</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>$0</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>$0</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>$74,538,035</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>$74,538,035</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Nicklas Backstrom</td>
<td>$9,500,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Alex Goligoski</td>
<td>$6,500,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jordan Eberle</td>
<td>$5,750,000 (6)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Craig Smith</td>
<td>$4,000,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Johnny Boychuk</td>
<td>$4,000,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Nolan Patrick</td>
<td>$3,575,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Andrei Svechnikov</td>
<td>$3,575,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Colton Sissons</td>
<td>$2,975,000 (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Scott Laughton</td>
<td>$2,300,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Milan Lucic</td>
<td>$2,250,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Marcus Sorensen</td>
<td>$1,350,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Henri Jokiharju</td>
<td>$1,279,166 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Travis Sanheim</td>
<td>$1,263,333 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Dryden Hunt</td>
<td>$925,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Adin Hill</td>
<td>$925,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>MacKenzie Blackwood</td>
<td>$913,333 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Joel Hanley</td>
<td>$900,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jacob de La Rose</td>
<td>$900,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>John Gilmour</td>
<td>$800,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Drake Batherson</td>
<td>$773,333 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>20</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $54,454,165</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $50,479,165</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $27,852,499</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $18,225,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $54,454,165</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $50,479,165</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $27,852,499</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $18,225,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $54,454,165</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $50,479,165</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $27,852,499</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $18,225,000</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Lias Andersson</td>
<td>$177,500 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Juuso Valimaki</td>
<td>$131,917 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Colton White</td>
<td>$93,583 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Daniel Brickley</td>
<td>$92,500 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jon Gillies</td>
<td>$92,500 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Dominic Turgeon</td>
<td>$91,917 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Nicholas Baptiste</td>
<td>$80,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>David Warsofsky</td>
<td>$67,500 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>8</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $827,417</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $667,417</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $403,000</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $0</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $827,417</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $667,417</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $403,000</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $0</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="TeamFinancePro_CAR"><a id="Hurricanes">Hurricanes</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=6">Hurricanes Page</a> ]
[ <a href="OTHL-PLF-ProTeamRoster.php#Hurricanes">Pro Team Roster</a> ]
[ <a href="OTHL-PLF-ProTeamScoring.php#Hurricanes">Pro Team Scoring</a> ]
[ <a href="OTHL-PLF-TeamFinance.php#Hurricanes">Team Finance</a> ]
[ <a href="OTHL-PLF-ProTeamPlayersInfo.php#Hurricanes">Pro Team PlayersInfo</a> ]
[ <a href="OTHL-PLF-ProTeamLines.php#Hurricanes">Pro Team Lines</a> ]
[ <a href="OTHL-PLF-TeamProspects.php#Hurricanes">Team Prospects</a> ]
[ <a href="OTHL-PLF-ProTeamSchedule.php#Hurricanes">Pro Team Schedule</a> ]
[ <a href="OTHL-PLF-ProTeamStats.php#Hurricanes">Pro Team Stats</a> ]
[ <a href="OTHL-PLF-ProTeamStatsVS.php#Hurricanes">Pro Team Stats VS</a> ]
[ <a href="OTHL-PLF-TeamInjurySuspension.php#Hurricanes">Team Injury Suspension</a> ]
[ <a href="OTHL-PLF-TeamHistory.php#Hurricanes">Team History</a> ]
[ <a href="OTHL-PLF-TeamRecords.php#Hurricanes">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Hurricanes');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Hurricanes" style="display: block;">
<br /><br /><table class="STHSTableFullW"><tr><td style="vertical-align: top;width:440px;">
<table class="STHSFinance_TeamTable">
<tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_AreanaCapacity">Arena Capacity - Ticket Price<br />Attendance - %</h3></td></tr>
<tr><td class="STHSW250">Arena Name</td><td class="STHSW200">RBC Center</td></tr>
<tr><td>Level 1: </td><td>6000 - $164 - 0 - 0.00%</td></tr>
<tr><td>Level 2: </td><td>5000 - $122 - 0 - 0.00%</td></tr>
<tr><td>Level 3: </td><td>4000 - $98 - 0 - 0.00%</td></tr>
<tr><td>Level 4: </td><td>3000 - $78 - 0 - 0.00%</td></tr>
<tr><td>Luxury : </td><td>1000 - $210 - 0 - 0.00%</td></tr>
<tr><td>Total Capacity :</td><td>19000</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Farm Level 1: </td><td>2000 - $50 - 1,998 - 99.90%</td></tr>
<tr><td>Farm Level 2: </td><td>1000 - $0 - 997 - 99.74%</td></tr>
<tr><td>Farm Total Capacity :</td><td>3000</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Income">Income</h3></td></tr>
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>0 - 0.00%</td></tr>
<tr><td>Average Income per Game</td><td>$0</td></tr>
<tr><td>Year to Date Revenue</td><td>$0</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>2,995 - 99.85%</td></tr>
<tr><td>Average Income per Game</td><td>$99,905</td></tr>
<tr><td>Year to Date Revenue</td><td>$1,098,950</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>$64,440,832</td></tr>
<tr><td>Farm Players Total Salaries</td><td>$1,630,167</td></tr>
<tr><td>Coaches Total Salaries</td><td>$5,000,000</td></tr>
<tr><td>Luxury Taxe Total</td><td>$0</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>$0</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>$0</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>$0</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>$0</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>$46,070,906</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>$46,070,906</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Evander Kane</td>
<td>$7,000,000 (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Bobby Ryan</td>
<td>$7,000,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>James Neal</td>
<td>$6,500,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Paul Stastny</td>
<td>$6,500,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Martin Jones</td>
<td>$6,000,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Mathieu Perreault</td>
<td>$4,500,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jonathan Bernier</td>
<td>$4,200,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Drake Caggiula</td>
<td>$3,775,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jan Rutta</td>
<td>$2,300,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Brett Sutter</td>
<td>$2,000,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Tucker Poolman</td>
<td>$1,775,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Kyle Clifford</td>
<td>$1,500,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Christian Djoos</td>
<td>$1,250,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jordan Schmaltz</td>
<td>$1,208,333 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Pavel Francouz</td>
<td>$1,100,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Pontus Aberg</td>
<td>$1,000,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Ilya Lyubushkin</td>
<td>$985,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Boo Nieves</td>
<td>$925,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Rem Pitlick</td>
<td>$925,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Josh Mahura</td>
<td>$910,833 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Ryan Hartman</td>
<td>$863,333 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Riley Stillman</td>
<td>$773,333 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Joakim Ryan</td>
<td>$750,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jordan Szwarz</td>
<td>$700,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>24</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $64,440,832</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $52,652,499</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $36,920,833</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $20,600,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $64,502,499</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $52,652,499</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $36,920,833</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $20,600,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $64,440,832</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $52,652,499</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $36,920,833</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $20,600,000</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Casey Mittelstadt</td>
<td>$149,167 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jesse Puljujarvi</td>
<td>$147,500 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Dylan Sikura</td>
<td>$138,750 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jakob Chychrun</td>
<td>$135,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Kevin Boyle</td>
<td>$97,500 (4)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Dominik Kahun</td>
<td>$92,500 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Filip Hronek</td>
<td>$92,500 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Aleksi Saarela</td>
<td>$92,500 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Nick Paul</td>
<td>$90,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Marcus Pettersson</td>
<td>$89,417 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Michael Mersch</td>
<td>$87,500 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Oliver Kylington</td>
<td>$86,333 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Rasmus Andersson</td>
<td>$86,333 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Andy Andreoff</td>
<td>$85,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Christian Jaros</td>
<td>$80,167 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Nathan Gerbe</td>
<td>$80,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>16</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $1,630,167</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $995,001</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $339,167</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $97,500</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $1,630,167</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $995,001</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $339,167</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $97,500</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="TeamFinancePro_NYI"><a id="Islanders">Islanders</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=19">Islanders Page</a> ]
[ <a href="OTHL-PLF-ProTeamRoster.php#Islanders">Pro Team Roster</a> ]
[ <a href="OTHL-PLF-ProTeamScoring.php#Islanders">Pro Team Scoring</a> ]
[ <a href="OTHL-PLF-TeamFinance.php#Islanders">Team Finance</a> ]
[ <a href="OTHL-PLF-ProTeamPlayersInfo.php#Islanders">Pro Team PlayersInfo</a> ]
[ <a href="OTHL-PLF-ProTeamLines.php#Islanders">Pro Team Lines</a> ]
[ <a href="OTHL-PLF-TeamProspects.php#Islanders">Team Prospects</a> ]
[ <a href="OTHL-PLF-ProTeamSchedule.php#Islanders">Pro Team Schedule</a> ]
[ <a href="OTHL-PLF-ProTeamStats.php#Islanders">Pro Team Stats</a> ]
[ <a href="OTHL-PLF-ProTeamStatsVS.php#Islanders">Pro Team Stats VS</a> ]
[ <a href="OTHL-PLF-TeamInjurySuspension.php#Islanders">Team Injury Suspension</a> ]
[ <a href="OTHL-PLF-TeamHistory.php#Islanders">Team History</a> ]
[ <a href="OTHL-PLF-TeamRecords.php#Islanders">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Islanders');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Islanders" style="display: block;">
<br /><br /><table class="STHSTableFullW"><tr><td style="vertical-align: top;width:440px;">
<table class="STHSFinance_TeamTable">
<tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_AreanaCapacity">Arena Capacity - Ticket Price<br />Attendance - %</h3></td></tr>
<tr><td class="STHSW250">Arena Name</td><td class="STHSW200">Barclays Center</td></tr>
<tr><td>Level 1: </td><td>6000 - $211 - 5,008 - 83.47%</td></tr>
<tr><td>Level 2: </td><td>5000 - $155 - 4,116 - 82.31%</td></tr>
<tr><td>Level 3: </td><td>4000 - $125 - 3,254 - 81.34%</td></tr>
<tr><td>Level 4: </td><td>3000 - $100 - 2,286 - 76.20%</td></tr>
<tr><td>Luxury : </td><td>1000 - $280 - 902 - 90.21%</td></tr>
<tr><td>Total Capacity :</td><td>19000</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Farm Level 1: </td><td>2000 - $19 - 0 - 0.00%</td></tr>
<tr><td>Farm Level 2: </td><td>1000 - $0 - 0 - 0.00%</td></tr>
<tr><td>Farm Total Capacity :</td><td>3000</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Income">Income</h3></td></tr>
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>15,565 - 81.92%</td></tr>
<tr><td>Average Income per Game</td><td>$2,660,052</td></tr>
<tr><td>Year to Date Revenue</td><td>$26,600,524</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>0 - 0.00%</td></tr>
<tr><td>Average Income per Game</td><td>$0</td></tr>
<tr><td>Year to Date Revenue</td><td>$0</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>$74,221,666</td></tr>
<tr><td>Farm Players Total Salaries</td><td>$752,583</td></tr>
<tr><td>Coaches Total Salaries</td><td>$1,900,000</td></tr>
<tr><td>Luxury Taxe Total</td><td>$0</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>$0</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>$0</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>$0</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>$0</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>$109,701,980</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>$109,701,980</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Steven Stamkos</td>
<td>$9,500,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Joe Pavelski</td>
<td>$8,600,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Victor Hedman (Out of Payroll)</td>
<td>$8,000,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Ryan O'Reilly</td>
<td>$7,750,000 (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jakub Voracek</td>
<td>$7,750,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Ryan Ellis</td>
<td>$6,250,000 (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Alexander Radulov</td>
<td>$6,250,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Colton Parayko</td>
<td>$5,300,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Philipp Grubauer</td>
<td>$3,330,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Brad Richardson</td>
<td>$2,750,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Calle Jarnkrok</td>
<td>$2,250,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Josh Anderson</td>
<td>$2,000,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Ryan Pulock</td>
<td>$2,000,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Matthew Nieto</td>
<td>$1,975,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Mark Barberio</td>
<td>$1,450,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Connor Brown</td>
<td>$1,300,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Mathew Barzal</td>
<td>$1,263,333 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Daniel Carr</td>
<td>$1,200,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Dylan DeMelo</td>
<td>$1,000,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jordan Binnington</td>
<td>$903,333 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Scott Harrington</td>
<td>$750,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Joe Hicketts</td>
<td>$650,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>22</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $82,221,666</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $67,796,666</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $44,233,333</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $29,750,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $82,221,666</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $67,796,666</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $44,233,333</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $29,750,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $82,221,666</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $67,796,666</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $44,233,333</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $29,750,000</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Nikolay Goldobin</td>
<td>$107,583 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Landon Ferraro</td>
<td>$80,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Taylor Leier</td>
<td>$80,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Chase De Leo</td>
<td>$75,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Brett Lernout</td>
<td>$70,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Michael Hutchinson</td>
<td>$70,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Max McCormick</td>
<td>$70,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Connor Brickley</td>
<td>$70,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Alan Quine</td>
<td>$65,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Brandon Halverson</td>
<td>$65,000 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>10</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $752,583</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $247,583</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $65,000</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $0</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $752,583</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $247,583</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $65,000</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $0</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="TeamFinancePro_WPG"><a id="Jets">Jets</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=2">Jets Page</a> ]
[ <a href="OTHL-PLF-ProTeamRoster.php#Jets">Pro Team Roster</a> ]
[ <a href="OTHL-PLF-ProTeamScoring.php#Jets">Pro Team Scoring</a> ]
[ <a href="OTHL-PLF-TeamFinance.php#Jets">Team Finance</a> ]
[ <a href="OTHL-PLF-ProTeamPlayersInfo.php#Jets">Pro Team PlayersInfo</a> ]
[ <a href="OTHL-PLF-ProTeamLines.php#Jets">Pro Team Lines</a> ]
[ <a href="OTHL-PLF-TeamProspects.php#Jets">Team Prospects</a> ]
[ <a href="OTHL-PLF-ProTeamSchedule.php#Jets">Pro Team Schedule</a> ]
[ <a href="OTHL-PLF-ProTeamStats.php#Jets">Pro Team Stats</a> ]
[ <a href="OTHL-PLF-ProTeamStatsVS.php#Jets">Pro Team Stats VS</a> ]
[ <a href="OTHL-PLF-TeamInjurySuspension.php#Jets">Team Injury Suspension</a> ]
[ <a href="OTHL-PLF-TeamHistory.php#Jets">Team History</a> ]
[ <a href="OTHL-PLF-TeamRecords.php#Jets">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Jets');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Jets" style="display: block;">
<br /><br /><table class="STHSTableFullW"><tr><td style="vertical-align: top;width:440px;">
<table class="STHSFinance_TeamTable">
<tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_AreanaCapacity">Arena Capacity - Ticket Price<br />Attendance - %</h3></td></tr>
<tr><td class="STHSW250">Arena Name</td><td class="STHSW200">MTS Center</td></tr>
<tr><td>Level 1: </td><td>6000 - $130 - 6,000 - 100.00%</td></tr>
<tr><td>Level 2: </td><td>5000 - $80 - 5,000 - 100.00%</td></tr>
<tr><td>Level 3: </td><td>4000 - $60 - 4,000 - 100.00%</td></tr>
<tr><td>Level 4: </td><td>3000 - $50 - 3,000 - 100.00%</td></tr>
<tr><td>Luxury : </td><td>1000 - $275 - 874 - 87.38%</td></tr>
<tr><td>Total Capacity :</td><td>19000</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Farm Level 1: </td><td>2000 - $33 - 2,000 - 100.00%</td></tr>
<tr><td>Farm Level 2: </td><td>1000 - $0 - 1,000 - 100.00%</td></tr>
<tr><td>Farm Total Capacity :</td><td>3000</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Income">Income</h3></td></tr>
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>18,874 - 99.34%</td></tr>
<tr><td>Average Income per Game</td><td>$1,810,304</td></tr>
<tr><td>Year to Date Revenue</td><td>$10,861,825</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>3,000 - 100.00%</td></tr>
<tr><td>Average Income per Game</td><td>$66,000</td></tr>
<tr><td>Year to Date Revenue</td><td>$132,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>$67,551,666</td></tr>
<tr><td>Farm Players Total Salaries</td><td>$1,127,416</td></tr>
<tr><td>Coaches Total Salaries</td><td>$1,650,000</td></tr>
<tr><td>Luxury Taxe Total</td><td>$0</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>$0</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>$0</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>$0</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>$0</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>$32,122,240</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>$32,122,240</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Kevin Shattenkirk</td>
<td>$6,500,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Derek Stepan</td>
<td>$6,500,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Mike Green</td>
<td>$5,375,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Sami Vatanen</td>
<td>$4,875,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Olli Maatta</td>
<td>$4,085,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Joonas Donskoi</td>
<td>$3,900,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Leo Komarov</td>
<td>$3,800,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Matt Murray</td>
<td>$3,750,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jesperi Kotkaniemi</td>
<td>$3,425,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Miro Heiskanen</td>
<td>$3,394,166 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Casey Cizikas</td>
<td>$3,300,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Kasperi Kapanen</td>
<td>$3,200,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jean-Gabriel Pageau</td>
<td>$3,100,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Erik Haula</td>
<td>$2,750,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Matthew Tkachuk</td>
<td>$1,775,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Scott Wilson</td>
<td>$1,050,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Juuse Saros</td>
<td>$925,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Juuso Riikola</td>
<td>$925,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Roope Hintz</td>
<td>$925,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Madison Bowey</td>
<td>$902,500 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Chris Thorburn</td>
<td>$900,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Ben Street</td>
<td>$750,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Markus Hannikainen</td>
<td>$745,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Barclay Goodrow</td>
<td>$700,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>24</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $67,551,666</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $48,154,166</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $24,644,166</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $3,900,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $67,551,666</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $48,154,166</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $24,644,166</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $3,900,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $67,551,666</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $48,154,166</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $24,644,166</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $3,900,000</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Eeli Tolvanen</td>
<td>$311,500 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Julius Honka</td>
<td>$136,333 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Ryan Lindgren</td>
<td>$110,000 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Vitek Vanecek</td>
<td>$92,500 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Rob O'Gara</td>
<td>$92,500 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>John Quenneville</td>
<td>$89,417 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Guillaume Brisebois</td>
<td>$88,833 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Clark Bishop</td>
<td>$71,333 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Brian Strait</td>
<td>$67,500 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Christopher Gibson</td>
<td>$67,500 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>10</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $1,127,416</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $738,583</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $359,583</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $0</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $1,127,416</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $738,583</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $359,583</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $0</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="TeamFinancePro_LAK"><a id="Kings">Kings</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=14">Kings Page</a> ]
[ <a href="OTHL-PLF-ProTeamRoster.php#Kings">Pro Team Roster</a> ]
[ <a href="OTHL-PLF-ProTeamScoring.php#Kings">Pro Team Scoring</a> ]
[ <a href="OTHL-PLF-TeamFinance.php#Kings">Team Finance</a> ]
[ <a href="OTHL-PLF-ProTeamPlayersInfo.php#Kings">Pro Team PlayersInfo</a> ]
[ <a href="OTHL-PLF-ProTeamLines.php#Kings">Pro Team Lines</a> ]
[ <a href="OTHL-PLF-TeamProspects.php#Kings">Team Prospects</a> ]
[ <a href="OTHL-PLF-ProTeamSchedule.php#Kings">Pro Team Schedule</a> ]
[ <a href="OTHL-PLF-ProTeamStats.php#Kings">Pro Team Stats</a> ]
[ <a href="OTHL-PLF-ProTeamStatsVS.php#Kings">Pro Team Stats VS</a> ]
[ <a href="OTHL-PLF-TeamInjurySuspension.php#Kings">Team Injury Suspension</a> ]
[ <a href="OTHL-PLF-TeamHistory.php#Kings">Team History</a> ]
[ <a href="OTHL-PLF-TeamRecords.php#Kings">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Kings');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Kings" style="display: block;">
<br /><br /><table class="STHSTableFullW"><tr><td style="vertical-align: top;width:440px;">
<table class="STHSFinance_TeamTable">
<tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_AreanaCapacity">Arena Capacity - Ticket Price<br />Attendance - %</h3></td></tr>
<tr><td class="STHSW250">Arena Name</td><td class="STHSW200">Staples Center</td></tr>
<tr><td>Level 1: </td><td>6000 - $225 - 0 - 0.00%</td></tr>
<tr><td>Level 2: </td><td>5000 - $165 - 0 - 0.00%</td></tr>
<tr><td>Level 3: </td><td>4000 - $135 - 0 - 0.00%</td></tr>
<tr><td>Level 4: </td><td>3000 - $115 - 0 - 0.00%</td></tr>
<tr><td>Luxury : </td><td>1000 - $300 - 0 - 0.00%</td></tr>
<tr><td>Total Capacity :</td><td>19000</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Farm Level 1: </td><td>2000 - $40 - 0 - 0.00%</td></tr>
<tr><td>Farm Level 2: </td><td>1000 - $0 - 0 - 0.00%</td></tr>
<tr><td>Farm Total Capacity :</td><td>3000</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Income">Income</h3></td></tr>
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>0 - 0.00%</td></tr>
<tr><td>Average Income per Game</td><td>$0</td></tr>
<tr><td>Year to Date Revenue</td><td>$0</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>0 - 0.00%</td></tr>
<tr><td>Average Income per Game</td><td>$0</td></tr>
<tr><td>Year to Date Revenue</td><td>$0</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>$86,735,001</td></tr>
<tr><td>Farm Players Total Salaries</td><td>$534,800</td></tr>
<tr><td>Coaches Total Salaries</td><td>$4,200,000</td></tr>
<tr><td>Luxury Taxe Total</td><td>$0</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>$0</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>$0</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>$0</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>$0</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>$43,277,231</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>$43,277,231</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Alex Ovechkin</td>
<td>$12,500,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>P.K. Subban</td>
<td>$9,500,000 (6)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Devan Dubnyk</td>
<td>$6,250,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Nathan MacKinnon</td>
<td>$6,000,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jonathan Huberdeau</td>
<td>$6,000,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Nate Schmidt</td>
<td>$5,625,000 (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jaden Schwartz</td>
<td>$5,600,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Seth Jones</td>
<td>$5,400,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Elias Lindholm</td>
<td>$4,850,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Yanni Gourde</td>
<td>$4,750,000 (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Travis Hamonic</td>
<td>$4,500,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Zack Kassian</td>
<td>$1,950,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Neal Pionk</td>
<td>$1,775,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Calle Rosen</td>
<td>$1,775,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Mitch Marner</td>
<td>$1,744,167 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Brock Boeser</td>
<td>$1,491,667 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Malcolm Subban</td>
<td>$1,400,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jordan Greenway</td>
<td>$1,255,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Miles Wood</td>
<td>$925,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Adam Pelech</td>
<td>$925,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Christian Wolanin</td>
<td>$925,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Carter Verhaeghe</td>
<td>$894,167 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Riley Nash</td>
<td>$700,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>23</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $86,735,001</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $62,840,834</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $50,799,167</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $43,225,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $86,735,001</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $62,840,834</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $50,799,167</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $43,225,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $86,735,001</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $62,840,834</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $50,799,167</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $43,225,000</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Andreas Borgman</td>
<td>$177,500 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Frederik Gauthier</td>
<td>$99,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Antoine Bibeau</td>
<td>$92,500 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Richard Bachman</td>
<td>$90,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Mason Appleton</td>
<td>$75,800 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>5</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $534,800</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $345,800</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $92,500</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $0</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $442,300</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $253,300</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $0</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="TeamFinancePro_TBL"><a id="Lightning">Lightning</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=27">Lightning Page</a> ]
[ <a href="OTHL-PLF-ProTeamRoster.php#Lightning">Pro Team Roster</a> ]
[ <a href="OTHL-PLF-ProTeamScoring.php#Lightning">Pro Team Scoring</a> ]
[ <a href="OTHL-PLF-TeamFinance.php#Lightning">Team Finance</a> ]
[ <a href="OTHL-PLF-ProTeamPlayersInfo.php#Lightning">Pro Team PlayersInfo</a> ]
[ <a href="OTHL-PLF-ProTeamLines.php#Lightning">Pro Team Lines</a> ]
[ <a href="OTHL-PLF-TeamProspects.php#Lightning">Team Prospects</a> ]
[ <a href="OTHL-PLF-ProTeamSchedule.php#Lightning">Pro Team Schedule</a> ]
[ <a href="OTHL-PLF-ProTeamStats.php#Lightning">Pro Team Stats</a> ]
[ <a href="OTHL-PLF-ProTeamStatsVS.php#Lightning">Pro Team Stats VS</a> ]
[ <a href="OTHL-PLF-TeamInjurySuspension.php#Lightning">Team Injury Suspension</a> ]
[ <a href="OTHL-PLF-TeamHistory.php#Lightning">Team History</a> ]
[ <a href="OTHL-PLF-TeamRecords.php#Lightning">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Lightning');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Lightning" style="display: block;">
<br /><br /><table class="STHSTableFullW"><tr><td style="vertical-align: top;width:440px;">
<table class="STHSFinance_TeamTable">
<tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_AreanaCapacity">Arena Capacity - Ticket Price<br />Attendance - %</h3></td></tr>
<tr><td class="STHSW250">Arena Name</td><td class="STHSW200">St.Pete Times Forum</td></tr>
<tr><td>Level 1: </td><td>6000 - $159 - 6,000 - 100.00%</td></tr>
<tr><td>Level 2: </td><td>5000 - $93 - 5,000 - 100.00%</td></tr>
<tr><td>Level 3: </td><td>4000 - $70 - 4,000 - 100.00%</td></tr>
<tr><td>Level 4: </td><td>3000 - $59 - 3,000 - 100.00%</td></tr>
<tr><td>Luxury : </td><td>1000 - $246 - 1,000 - 100.00%</td></tr>
<tr><td>Total Capacity :</td><td>19000</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Farm Level 1: </td><td>2000 - $30 - 0 - 0.00%</td></tr>
<tr><td>Farm Level 2: </td><td>1000 - $0 - 0 - 0.00%</td></tr>
<tr><td>Farm Total Capacity :</td><td>3000</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Income">Income</h3></td></tr>
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>19,000 - 100.00%</td></tr>
<tr><td>Average Income per Game</td><td>$2,122,000</td></tr>
<tr><td>Year to Date Revenue</td><td>$6,366,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>0 - 0.00%</td></tr>
<tr><td>Average Income per Game</td><td>$0</td></tr>
<tr><td>Year to Date Revenue</td><td>$0</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>$82,398,333</td></tr>
<tr><td>Farm Players Total Salaries</td><td>$875,000</td></tr>
<tr><td>Coaches Total Salaries</td><td>$5,850,000</td></tr>
<tr><td>Luxury Taxe Total</td><td>$0</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>$0</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>$0</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>$0</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>$0</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>$14,409,783</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>$14,409,783</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>John Tavares</td>
<td>$11,000,000 (6)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Mike Hoffman</td>
<td>$5,750,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Ondrej Palat</td>
<td>$5,750,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Esa Lindell</td>
<td>$5,200,000 (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Brendan Gallagher</td>
<td>$5,100,000 (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Zach Bogosian</td>
<td>$5,060,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Kris Russell</td>
<td>$5,000,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Joe Thornton</td>
<td>$4,500,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Brandon Sutter</td>
<td>$4,125,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Tanner Pearson</td>
<td>$4,000,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Luca Sbisa</td>
<td>$3,600,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Vladimir Sobotka</td>
<td>$3,500,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Andrew Cogliano</td>
<td>$3,400,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Adam McQuaid</td>
<td>$2,850,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Zack Smith</td>
<td>$2,750,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Matt Martin</td>
<td>$2,000,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Brian Elliott</td>
<td>$2,000,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Kevin Connauton</td>
<td>$1,575,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Tyler Pitlick</td>
<td>$1,250,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Derick Brassard</td>
<td>$1,200,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Tyler Motte</td>
<td>$975,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Connor Hellebuyck</td>
<td>$925,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Vince Dunn</td>
<td>$888,333 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>23</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $82,398,333</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $61,698,333</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $38,050,000</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $27,050,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $82,398,333</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $61,698,333</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $38,050,000</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $27,050,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $82,398,333</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $61,698,333</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $38,050,000</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $27,050,000</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Lawrence Pilut</td>
<td>$92,500 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Matt Tomkins</td>
<td>$92,500 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Miikka Salomaki</td>
<td>$90,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Seth Helgeson</td>
<td>$90,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Tom Kuhnhackl</td>
<td>$85,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Justin Falk</td>
<td>$75,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Liam O'Brien</td>
<td>$75,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Alexandre Grenier</td>
<td>$72,500 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Francois Brassard</td>
<td>$70,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Josh Teves</td>
<td>$70,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Radim Simek</td>
<td>$62,500 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>11</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $875,000</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $505,000</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $0</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $865,000</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $505,000</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $0</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="TeamFinancePro_TOR"><a id="MapleLeafs">Maple Leafs</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=28">Maple Leafs Page</a> ]
[ <a href="OTHL-PLF-ProTeamRoster.php#MapleLeafs">Pro Team Roster</a> ]
[ <a href="OTHL-PLF-ProTeamScoring.php#MapleLeafs">Pro Team Scoring</a> ]
[ <a href="OTHL-PLF-TeamFinance.php#MapleLeafs">Team Finance</a> ]
[ <a href="OTHL-PLF-ProTeamPlayersInfo.php#MapleLeafs">Pro Team PlayersInfo</a> ]
[ <a href="OTHL-PLF-ProTeamLines.php#MapleLeafs">Pro Team Lines</a> ]
[ <a href="OTHL-PLF-TeamProspects.php#MapleLeafs">Team Prospects</a> ]
[ <a href="OTHL-PLF-ProTeamSchedule.php#MapleLeafs">Pro Team Schedule</a> ]
[ <a href="OTHL-PLF-ProTeamStats.php#MapleLeafs">Pro Team Stats</a> ]
[ <a href="OTHL-PLF-ProTeamStatsVS.php#MapleLeafs">Pro Team Stats VS</a> ]
[ <a href="OTHL-PLF-TeamInjurySuspension.php#MapleLeafs">Team Injury Suspension</a> ]
[ <a href="OTHL-PLF-TeamHistory.php#MapleLeafs">Team History</a> ]
[ <a href="OTHL-PLF-TeamRecords.php#MapleLeafs">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_MapleLeafs');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_MapleLeafs" style="display: block;">
<br /><br /><table class="STHSTableFullW"><tr><td style="vertical-align: top;width:440px;">
<table class="STHSFinance_TeamTable">
<tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_AreanaCapacity">Arena Capacity - Ticket Price<br />Attendance - %</h3></td></tr>
<tr><td class="STHSW250">Arena Name</td><td class="STHSW200">Air Canada Centre</td></tr>
<tr><td>Level 1: </td><td>6000 - $166 - 0 - 0.00%</td></tr>
<tr><td>Level 2: </td><td>5000 - $136 - 0 - 0.00%</td></tr>
<tr><td>Level 3: </td><td>4000 - $116 - 0 - 0.00%</td></tr>
<tr><td>Level 4: </td><td>3000 - $65 - 0 - 0.00%</td></tr>
<tr><td>Luxury : </td><td>1000 - $250 - 0 - 0.00%</td></tr>
<tr><td>Total Capacity :</td><td>19000</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Farm Level 1: </td><td>2000 - $35 - 0 - 0.00%</td></tr>
<tr><td>Farm Level 2: </td><td>1000 - $0 - 0 - 0.00%</td></tr>
<tr><td>Farm Total Capacity :</td><td>3000</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Income">Income</h3></td></tr>
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>0 - 0.00%</td></tr>
<tr><td>Average Income per Game</td><td>$0</td></tr>
<tr><td>Year to Date Revenue</td><td>$0</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>0 - 0.00%</td></tr>
<tr><td>Average Income per Game</td><td>$0</td></tr>
<tr><td>Year to Date Revenue</td><td>$0</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>$61,688,000</td></tr>
<tr><td>Farm Players Total Salaries</td><td>$504,882</td></tr>
<tr><td>Coaches Total Salaries</td><td>$3,750,000</td></tr>
<tr><td>Luxury Taxe Total</td><td>$0</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>$0</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>$0</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>$0</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>$0</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>$157,830,928</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>$157,830,928</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Alex Pietrangelo</td>
<td>$8,250,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>David Krejci</td>
<td>$6,750,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Tomas Hertl</td>
<td>$5,500,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Shea Theodore</td>
<td>$5,200,000 (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Frederik Andersen</td>
<td>$5,000,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>James Reimer</td>
<td>$3,500,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Brenden Dillon</td>
<td>$3,270,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Patrik Nemeth</td>
<td>$3,000,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Frank Vatrano</td>
<td>$2,533,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Radek Faksa</td>
<td>$2,350,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Mark Borowiecki</td>
<td>$1,850,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Sam Bennett</td>
<td>$1,700,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Noel Acciari</td>
<td>$1,666,667 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Troy Terry</td>
<td>$1,491,666 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Tomas Nosek</td>
<td>$1,250,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Christian Dvorak</td>
<td>$1,106,667 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Henrik Samuelsson</td>
<td>$1,106,667 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Mike Matheson</td>
<td>$925,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Sean Kuraly</td>
<td>$925,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Brett Howden</td>
<td>$863,333 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Lukas Radil</td>
<td>$750,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jimmy Hayes</td>
<td>$700,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jared Coreau</td>
<td>$700,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Cody Goloubef</td>
<td>$650,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Ryan Stanton</td>
<td>$650,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>25</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $61,688,000</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $52,824,666</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $27,454,666</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $13,450,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $61,688,000</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $52,824,666</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $27,454,666</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $13,450,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $61,688,000</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $52,824,666</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $27,454,666</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $13,450,000</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Jeremy Bracco</td>
<td>$92,500 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Dylan Wells</td>
<td>$91,083 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Travis Dermott</td>
<td>$86,333 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Zachary Fucale</td>
<td>$86,300 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Spencer Smallman</td>
<td>$75,833 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Steven Lorentz</td>
<td>$72,833 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>6</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $504,882</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $504,882</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $332,249</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $0</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $504,882</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $504,882</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $332,249</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $0</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="TeamFinancePro_EDM"><a id="Oilers">Oilers</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=12">Oilers Page</a> ]
[ <a href="OTHL-PLF-ProTeamRoster.php#Oilers">Pro Team Roster</a> ]
[ <a href="OTHL-PLF-ProTeamScoring.php#Oilers">Pro Team Scoring</a> ]
[ <a href="OTHL-PLF-TeamFinance.php#Oilers">Team Finance</a> ]
[ <a href="OTHL-PLF-ProTeamPlayersInfo.php#Oilers">Pro Team PlayersInfo</a> ]
[ <a href="OTHL-PLF-ProTeamLines.php#Oilers">Pro Team Lines</a> ]
[ <a href="OTHL-PLF-TeamProspects.php#Oilers">Team Prospects</a> ]
[ <a href="OTHL-PLF-ProTeamSchedule.php#Oilers">Pro Team Schedule</a> ]
[ <a href="OTHL-PLF-ProTeamStats.php#Oilers">Pro Team Stats</a> ]
[ <a href="OTHL-PLF-ProTeamStatsVS.php#Oilers">Pro Team Stats VS</a> ]
[ <a href="OTHL-PLF-TeamInjurySuspension.php#Oilers">Team Injury Suspension</a> ]
[ <a href="OTHL-PLF-TeamHistory.php#Oilers">Team History</a> ]
[ <a href="OTHL-PLF-TeamRecords.php#Oilers">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Oilers');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Oilers" style="display: block;">
<br /><br /><table class="STHSTableFullW"><tr><td style="vertical-align: top;width:440px;">
<table class="STHSFinance_TeamTable">
<tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_AreanaCapacity">Arena Capacity - Ticket Price<br />Attendance - %</h3></td></tr>
<tr><td class="STHSW250">Arena Name</td><td class="STHSW200">Rexall Place</td></tr>
<tr><td>Level 1: </td><td>6000 - $172 - 6,000 - 100.00%</td></tr>
<tr><td>Level 2: </td><td>5000 - $130 - 4,373 - 87.45%</td></tr>
<tr><td>Level 3: </td><td>4000 - $105 - 3,466 - 86.65%</td></tr>
<tr><td>Level 4: </td><td>3000 - $79 - 2,483 - 82.76%</td></tr>
<tr><td>Luxury : </td><td>1000 - $267 - 900 - 89.97%</td></tr>
<tr><td>Total Capacity :</td><td>19000</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Farm Level 1: </td><td>2000 - $70 - 1,548 - 77.38%</td></tr>
<tr><td>Farm Level 2: </td><td>1000 - $0 - 994 - 99.35%</td></tr>
<tr><td>Farm Total Capacity :</td><td>3000</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Income">Income</h3></td></tr>
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>17,221 - 90.64%</td></tr>
<tr><td>Average Income per Game</td><td>$2,382,840</td></tr>
<tr><td>Year to Date Revenue</td><td>$7,148,519</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>2,541 - 84.71%</td></tr>
<tr><td>Average Income per Game</td><td>$108,337</td></tr>
<tr><td>Year to Date Revenue</td><td>$650,020</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>$81,734,559</td></tr>
<tr><td>Farm Players Total Salaries</td><td>$2,569,668</td></tr>
<tr><td>Coaches Total Salaries</td><td>$2,700,000</td></tr>
<tr><td>Luxury Taxe Total</td><td>$0</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>$0</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>$0</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>$0</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>$0</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>$142,348,577</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>$142,348,577</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Jonathan Toews</td>
<td>$10,250,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Blake Wheeler</td>
<td>$7,500,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Dustin Brown</td>
<td>$6,500,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Ryan Nugent-Hopkins</td>
<td>$6,300,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jeff Petry</td>
<td>$6,000,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>John Gibson</td>
<td>$6,000,000 (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Mikael Granlund</td>
<td>$5,650,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Mattias Ekholm</td>
<td>$5,000,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Noah Hanifin</td>
<td>$4,000,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Lars Eller</td>
<td>$3,500,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>John Moore</td>
<td>$2,850,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Marcus Foligno</td>
<td>$2,250,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jamie Oleksiak</td>
<td>$2,137,500 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Elvis Merlikins</td>
<td>$1,844,559 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Luke Glendening</td>
<td>$1,800,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Nick Schmaltz</td>
<td>$1,541,667 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Luke Kunin</td>
<td>$1,425,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Ryan Graves</td>
<td>$1,000,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Anthony Cirelli</td>
<td>$935,833 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Joey Anderson</td>
<td>$925,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Dominic Toninato</td>
<td>$925,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Brandon Montour</td>
<td>$925,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Josh Archibald</td>
<td>$925,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Anthony Bitetto</td>
<td>$800,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jarred Tinordi</td>
<td>$750,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>25</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $81,734,559</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $43,930,392</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $32,094,559</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $8,850,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $81,734,559</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $43,930,392</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $32,094,559</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $8,850,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $81,734,559</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $43,930,392</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $32,094,559</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $8,850,000</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Nick Foligno</td>
<td>$525,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Ron Hainsey</td>
<td>$400,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Patrick Marleau</td>
<td>$300,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Anders Nilsson</td>
<td>$275,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Zach Whitecloud</td>
<td>$149,167 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Adam Gaudette</td>
<td>$149,167 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Ryan Kuffner</td>
<td>$92,500 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Adam Johnson</td>
<td>$92,500 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Zane McIntyre</td>
<td>$92,500 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Dennis Gilbert</td>
<td>$92,500 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Mitch Reinke</td>
<td>$92,500 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jeremy Lauzon</td>
<td>$87,167 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Eric Robinson</td>
<td>$80,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Kaden Fulcher</td>
<td>$71,667 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Scott Wedgewood</td>
<td>$70,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>15</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $2,569,668</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $827,168</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $400,501</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $0</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $2,569,668</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $827,168</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $400,501</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $0</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="TeamFinancePro_FLA"><a id="Panthers">Panthers</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=13">Panthers Page</a> ]
[ <a href="OTHL-PLF-ProTeamRoster.php#Panthers">Pro Team Roster</a> ]
[ <a href="OTHL-PLF-ProTeamScoring.php#Panthers">Pro Team Scoring</a> ]
[ <a href="OTHL-PLF-TeamFinance.php#Panthers">Team Finance</a> ]
[ <a href="OTHL-PLF-ProTeamPlayersInfo.php#Panthers">Pro Team PlayersInfo</a> ]
[ <a href="OTHL-PLF-ProTeamLines.php#Panthers">Pro Team Lines</a> ]
[ <a href="OTHL-PLF-TeamProspects.php#Panthers">Team Prospects</a> ]
[ <a href="OTHL-PLF-ProTeamSchedule.php#Panthers">Pro Team Schedule</a> ]
[ <a href="OTHL-PLF-ProTeamStats.php#Panthers">Pro Team Stats</a> ]
[ <a href="OTHL-PLF-ProTeamStatsVS.php#Panthers">Pro Team Stats VS</a> ]
[ <a href="OTHL-PLF-TeamInjurySuspension.php#Panthers">Team Injury Suspension</a> ]
[ <a href="OTHL-PLF-TeamHistory.php#Panthers">Team History</a> ]
[ <a href="OTHL-PLF-TeamRecords.php#Panthers">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Panthers');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Panthers" style="display: block;">
<br /><br /><table class="STHSTableFullW"><tr><td style="vertical-align: top;width:440px;">
<table class="STHSFinance_TeamTable">
<tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_AreanaCapacity">Arena Capacity - Ticket Price<br />Attendance - %</h3></td></tr>
<tr><td class="STHSW250">Arena Name</td><td class="STHSW200">Bank Atlantic Center</td></tr>
<tr><td>Level 1: </td><td>6000 - $140 - 5,981 - 99.68%</td></tr>
<tr><td>Level 2: </td><td>5000 - $115 - 5,000 - 100.00%</td></tr>
<tr><td>Level 3: </td><td>4000 - $85 - 4,000 - 100.00%</td></tr>
<tr><td>Level 4: </td><td>3000 - $65 - 3,000 - 100.00%</td></tr>
<tr><td>Luxury : </td><td>1000 - $300 - 757 - 75.65%</td></tr>
<tr><td>Total Capacity :</td><td>19000</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Farm Level 1: </td><td>2000 - $45 - 2,000 - 100.00%</td></tr>
<tr><td>Farm Level 2: </td><td>1000 - $0 - 997 - 99.65%</td></tr>
<tr><td>Farm Total Capacity :</td><td>3000</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Income">Income</h3></td></tr>
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>18,738 - 98.62%</td></tr>
<tr><td>Average Income per Game</td><td>$2,174,290</td></tr>
<tr><td>Year to Date Revenue</td><td>$4,348,580</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>2,997 - 99.88%</td></tr>
<tr><td>Average Income per Game</td><td>$90,000</td></tr>
<tr><td>Year to Date Revenue</td><td>$180,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>$80,154,166</td></tr>
<tr><td>Farm Players Total Salaries</td><td>$1,529,099</td></tr>
<tr><td>Coaches Total Salaries</td><td>$4,250,000</td></tr>
<tr><td>Luxury Taxe Total</td><td>$0</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>$0</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>$0</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>$0</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>$0</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>$66,244,701</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>$66,244,701</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Brent Burns</td>
<td>$9,000,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Tyler Seguin</td>
<td>$7,500,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Josh Bailey</td>
<td>$6,000,000 (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Tyler Bozak</td>
<td>$6,000,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Mats Zuccarello</td>
<td>$5,000,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Marcus Johansson</td>
<td>$5,000,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Carl Soderberg</td>
<td>$4,900,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Justin Schultz</td>
<td>$4,800,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Brian Dumoulin</td>
<td>$4,200,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Damon Severson</td>
<td>$4,200,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Michael Stone</td>
<td>$3,500,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Anton Khudobin</td>
<td>$3,000,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Darren Helm</td>
<td>$2,900,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Nathan Beaulieu</td>
<td>$2,250,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Lawson Crouse</td>
<td>$1,602,500 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Buddy Robinson</td>
<td>$1,500,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Xavier Ouellet</td>
<td>$1,400,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jake Debrusk</td>
<td>$1,288,333 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Paul Carey</td>
<td>$1,200,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Curtis Lazar</td>
<td>$1,200,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>David Rittich</td>
<td>$1,000,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jake Oettinger</td>
<td>$925,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Carl Dahlstrom</td>
<td>$925,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Max Jones</td>
<td>$863,333 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>24</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $80,154,166</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $51,051,666</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $38,238,333</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $15,000,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $80,154,166</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $51,051,666</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $38,238,333</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $15,000,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $80,154,166</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $51,051,666</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $38,238,333</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $15,000,000</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Michael Dal Colle</td>
<td>$306,333 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Andy Welinski</td>
<td>$177,500 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Derrick Pouliot</td>
<td>$128,833 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Michael McCarron</td>
<td>$107,600 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>C.J. Smith</td>
<td>$100,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Cooper Marody</td>
<td>$100,000 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Collin Delia</td>
<td>$95,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Daniel O'Regan</td>
<td>$92,500 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Luke Johnson</td>
<td>$92,500 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Brendan Guhle</td>
<td>$88,833 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Tyler Wotherspoon</td>
<td>$80,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Alexandre Carrier</td>
<td>$80,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Garrett Wilson</td>
<td>$80,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>13</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $1,529,099</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $688,933</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $406,333</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $0</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $1,529,099</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $688,933</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $406,333</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $0</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="TeamFinancePro_PIT"><a id="Penguins">Penguins</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=24">Penguins Page</a> ]
[ <a href="OTHL-PLF-ProTeamRoster.php#Penguins">Pro Team Roster</a> ]
[ <a href="OTHL-PLF-ProTeamScoring.php#Penguins">Pro Team Scoring</a> ]
[ <a href="OTHL-PLF-TeamFinance.php#Penguins">Team Finance</a> ]
[ <a href="OTHL-PLF-ProTeamPlayersInfo.php#Penguins">Pro Team PlayersInfo</a> ]
[ <a href="OTHL-PLF-ProTeamLines.php#Penguins">Pro Team Lines</a> ]
[ <a href="OTHL-PLF-TeamProspects.php#Penguins">Team Prospects</a> ]
[ <a href="OTHL-PLF-ProTeamSchedule.php#Penguins">Pro Team Schedule</a> ]
[ <a href="OTHL-PLF-ProTeamStats.php#Penguins">Pro Team Stats</a> ]
[ <a href="OTHL-PLF-ProTeamStatsVS.php#Penguins">Pro Team Stats VS</a> ]
[ <a href="OTHL-PLF-TeamInjurySuspension.php#Penguins">Team Injury Suspension</a> ]
[ <a href="OTHL-PLF-TeamHistory.php#Penguins">Team History</a> ]
[ <a href="OTHL-PLF-TeamRecords.php#Penguins">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Penguins');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Penguins" style="display: block;">
<br /><br /><table class="STHSTableFullW"><tr><td style="vertical-align: top;width:440px;">
<table class="STHSFinance_TeamTable">
<tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_AreanaCapacity">Arena Capacity - Ticket Price<br />Attendance - %</h3></td></tr>
<tr><td class="STHSW250">Arena Name</td><td class="STHSW200">Consol Energy Center</td></tr>
<tr><td>Level 1: </td><td>6000 - $225 - 0 - 0.00%</td></tr>
<tr><td>Level 2: </td><td>5000 - $165 - 0 - 0.00%</td></tr>
<tr><td>Level 3: </td><td>4000 - $135 - 0 - 0.00%</td></tr>
<tr><td>Level 4: </td><td>3000 - $115 - 0 - 0.00%</td></tr>
<tr><td>Luxury : </td><td>1000 - $300 - 0 - 0.00%</td></tr>
<tr><td>Total Capacity :</td><td>19000</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Farm Level 1: </td><td>2000 - $100 - 0 - 0.00%</td></tr>
<tr><td>Farm Level 2: </td><td>1000 - $0 - 0 - 0.00%</td></tr>
<tr><td>Farm Total Capacity :</td><td>3000</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Income">Income</h3></td></tr>
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>0 - 0.00%</td></tr>
<tr><td>Average Income per Game</td><td>$0</td></tr>
<tr><td>Year to Date Revenue</td><td>$0</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>0 - 0.00%</td></tr>
<tr><td>Average Income per Game</td><td>$0</td></tr>
<tr><td>Year to Date Revenue</td><td>$0</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>$63,284,166</td></tr>
<tr><td>Farm Players Total Salaries</td><td>$805,084</td></tr>
<tr><td>Coaches Total Salaries</td><td>$1,700,000</td></tr>
<tr><td>Luxury Taxe Total</td><td>$0</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>$0</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>$0</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>$0</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>$0</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>$103,739,430</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>$103,739,430</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>James van Riemsdyk</td>
<td>$8,750,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Cam Fowler</td>
<td>$6,500,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Semyon Varlamov</td>
<td>$6,000,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Andy Greene</td>
<td>$5,200,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Dmitry Kulikov</td>
<td>$4,250,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Colin Wilson</td>
<td>$4,000,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Brady Tkachuk</td>
<td>$3,425,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Micheal Ferland</td>
<td>$3,250,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Sam Gagner</td>
<td>$3,150,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Trevor van Riemsdyk</td>
<td>$2,300,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jordan Martinook</td>
<td>$2,000,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Robert Bortuzzo</td>
<td>$1,750,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Michael Rasmussen</td>
<td>$1,710,833 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Tyson Jost</td>
<td>$1,673,333 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Connor Carrick</td>
<td>$1,650,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Michael Del Zotto</td>
<td>$1,500,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Chris Wagner</td>
<td>$1,500,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Anton Forsberg</td>
<td>$1,000,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Nick Cousins</td>
<td>$1,000,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Evan Rodrigues</td>
<td>$975,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Tomas Jurco</td>
<td>$950,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Anthony Greco</td>
<td>$750,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>22</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $63,284,166</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $53,409,166</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $36,035,833</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $18,000,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $63,284,166</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $53,409,166</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $36,035,833</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $18,000,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $63,284,166</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $53,409,166</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $36,035,833</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $18,000,000</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Roland McKeown</td>
<td>$89,417 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Nelson Nogier</td>
<td>$77,167 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Mackenzie MacEachern</td>
<td>$75,000 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Matt Read</td>
<td>$75,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Aaron Ness</td>
<td>$75,000 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jamie Devane</td>
<td>$72,500 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Matej Tomek</td>
<td>$70,000 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Tom McCollum</td>
<td>$70,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Alexandre Fortin</td>
<td>$68,500 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Dave Dziurzynski</td>
<td>$67,500 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Chris Wideman</td>
<td>$65,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>11</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $805,084</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $379,417</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $309,417</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $0</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $805,084</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $379,417</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $309,417</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $0</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="TeamFinancePro_NSH"><a id="Predators">Predators</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=17">Predators Page</a> ]
[ <a href="OTHL-PLF-ProTeamRoster.php#Predators">Pro Team Roster</a> ]
[ <a href="OTHL-PLF-ProTeamScoring.php#Predators">Pro Team Scoring</a> ]
[ <a href="OTHL-PLF-TeamFinance.php#Predators">Team Finance</a> ]
[ <a href="OTHL-PLF-ProTeamPlayersInfo.php#Predators">Pro Team PlayersInfo</a> ]
[ <a href="OTHL-PLF-ProTeamLines.php#Predators">Pro Team Lines</a> ]
[ <a href="OTHL-PLF-TeamProspects.php#Predators">Team Prospects</a> ]
[ <a href="OTHL-PLF-ProTeamSchedule.php#Predators">Pro Team Schedule</a> ]
[ <a href="OTHL-PLF-ProTeamStats.php#Predators">Pro Team Stats</a> ]
[ <a href="OTHL-PLF-ProTeamStatsVS.php#Predators">Pro Team Stats VS</a> ]
[ <a href="OTHL-PLF-TeamInjurySuspension.php#Predators">Team Injury Suspension</a> ]
[ <a href="OTHL-PLF-TeamHistory.php#Predators">Team History</a> ]
[ <a href="OTHL-PLF-TeamRecords.php#Predators">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Predators');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Predators" style="display: block;">
<br /><br /><table class="STHSTableFullW"><tr><td style="vertical-align: top;width:440px;">
<table class="STHSFinance_TeamTable">
<tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_AreanaCapacity">Arena Capacity - Ticket Price<br />Attendance - %</h3></td></tr>
<tr><td class="STHSW250">Arena Name</td><td class="STHSW200">Sommet Center</td></tr>
<tr><td>Level 1: </td><td>6000 - $225 - 5,187 - 86.45%</td></tr>
<tr><td>Level 2: </td><td>5000 - $165 - 4,312 - 86.25%</td></tr>
<tr><td>Level 3: </td><td>4000 - $135 - 3,275 - 81.88%</td></tr>
<tr><td>Level 4: </td><td>3000 - $100 - 2,458 - 81.94%</td></tr>
<tr><td>Luxury : </td><td>1000 - $300 - 920 - 92.04%</td></tr>
<tr><td>Total Capacity :</td><td>19000</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Farm Level 1: </td><td>2000 - $100 - 0 - 0.00%</td></tr>
<tr><td>Farm Level 2: </td><td>1000 - $0 - 0 - 0.00%</td></tr>
<tr><td>Farm Total Capacity :</td><td>3000</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Income">Income</h3></td></tr>
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>16,153 - 85.02%</td></tr>
<tr><td>Average Income per Game</td><td>$2,842,693</td></tr>
<tr><td>Year to Date Revenue</td><td>$39,797,705</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>0 - 0.00%</td></tr>
<tr><td>Average Income per Game</td><td>$0</td></tr>
<tr><td>Year to Date Revenue</td><td>$0</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>$84,280,000</td></tr>
<tr><td>Farm Players Total Salaries</td><td>$664,417</td></tr>
<tr><td>Coaches Total Salaries</td><td>$3,900,000</td></tr>
<tr><td>Luxury Taxe Total</td><td>$0</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>$0</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>$0</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>$0</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>$0</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>$190,787,814</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>$190,787,814</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Carey Price</td>
<td>$8,000,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Logan Couture</td>
<td>$7,250,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jack Johnson</td>
<td>$7,000,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Reilly Smith</td>
<td>$6,500,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jordan Staal</td>
<td>$6,500,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Deryk Engelland</td>
<td>$6,000,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Adam Henrique</td>
<td>$5,750,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Sam Reinhart</td>
<td>$5,500,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Oscar Klefbom</td>
<td>$5,000,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Nick Holden</td>
<td>$4,000,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Alex Killorn</td>
<td>$3,950,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Andreas Athanasiou</td>
<td>$3,700,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Blake Comeau</td>
<td>$3,500,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Kevan Miller (Out of Payroll)</td>
<td>$2,850,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Kyle Brodziak</td>
<td>$2,500,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Alex Tuch</td>
<td>$1,350,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Pheonix Copley</td>
<td>$1,250,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Danton Heinen</td>
<td>$995,833 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Ryan Dzingel</td>
<td>$900,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Adrian Kempe</td>
<td>$894,167 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Erik Cernak</td>
<td>$890,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jayson Megna</td>
<td>$750,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Greg Carey</td>
<td>$700,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Logan Shaw</td>
<td>$700,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Zach Redmond</td>
<td>$700,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>25</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $87,130,000</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $58,930,000</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $21,390,000</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $12,000,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $87,130,000</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $58,930,000</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $21,390,000</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $12,000,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $87,130,000</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $58,930,000</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $21,390,000</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $12,000,000</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Nick Lappin</td>
<td>$200,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Stefan Matteau</td>
<td>$92,500 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Dennis Cholowski</td>
<td>$89,417 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Justin Dowling</td>
<td>$75,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Charles Hudon</td>
<td>$72,500 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Stuart Percy</td>
<td>$70,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Ryan Faragher</td>
<td>$65,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>7</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $664,417</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $329,417</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $89,417</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $0</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $664,417</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $329,417</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $89,417</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $0</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="TeamFinancePro_NYR"><a id="Rangers">Rangers</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=20">Rangers Page</a> ]
[ <a href="OTHL-PLF-ProTeamRoster.php#Rangers">Pro Team Roster</a> ]
[ <a href="OTHL-PLF-ProTeamScoring.php#Rangers">Pro Team Scoring</a> ]
[ <a href="OTHL-PLF-TeamFinance.php#Rangers">Team Finance</a> ]
[ <a href="OTHL-PLF-ProTeamPlayersInfo.php#Rangers">Pro Team PlayersInfo</a> ]
[ <a href="OTHL-PLF-ProTeamLines.php#Rangers">Pro Team Lines</a> ]
[ <a href="OTHL-PLF-TeamProspects.php#Rangers">Team Prospects</a> ]
[ <a href="OTHL-PLF-ProTeamSchedule.php#Rangers">Pro Team Schedule</a> ]
[ <a href="OTHL-PLF-ProTeamStats.php#Rangers">Pro Team Stats</a> ]
[ <a href="OTHL-PLF-ProTeamStatsVS.php#Rangers">Pro Team Stats VS</a> ]
[ <a href="OTHL-PLF-TeamInjurySuspension.php#Rangers">Team Injury Suspension</a> ]
[ <a href="OTHL-PLF-TeamHistory.php#Rangers">Team History</a> ]
[ <a href="OTHL-PLF-TeamRecords.php#Rangers">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Rangers');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Rangers" style="display: block;">
<br /><br /><table class="STHSTableFullW"><tr><td style="vertical-align: top;width:440px;">
<table class="STHSFinance_TeamTable">
<tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_AreanaCapacity">Arena Capacity - Ticket Price<br />Attendance - %</h3></td></tr>
<tr><td class="STHSW250">Arena Name</td><td class="STHSW200">Madison Square Gardens</td></tr>
<tr><td>Level 1: </td><td>6000 - $220 - 4,638 - 77.31%</td></tr>
<tr><td>Level 2: </td><td>5000 - $165 - 3,715 - 74.30%</td></tr>
<tr><td>Level 3: </td><td>4000 - $135 - 2,885 - 72.13%</td></tr>
<tr><td>Level 4: </td><td>3000 - $110 - 1,969 - 65.65%</td></tr>
<tr><td>Luxury : </td><td>1000 - $300 - 834 - 83.44%</td></tr>
<tr><td>Total Capacity :</td><td>19000</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Farm Level 1: </td><td>2000 - $19 - 0 - 0.00%</td></tr>
<tr><td>Farm Level 2: </td><td>1000 - $0 - 0 - 0.00%</td></tr>
<tr><td>Farm Total Capacity :</td><td>3000</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Income">Income</h3></td></tr>
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>14,043 - 73.91%</td></tr>
<tr><td>Average Income per Game</td><td>$2,489,912</td></tr>
<tr><td>Year to Date Revenue</td><td>$12,449,560</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>0 - 0.00%</td></tr>
<tr><td>Average Income per Game</td><td>$0</td></tr>
<tr><td>Year to Date Revenue</td><td>$0</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>$83,900,834</td></tr>
<tr><td>Farm Players Total Salaries</td><td>$280,000</td></tr>
<tr><td>Coaches Total Salaries</td><td>$5,900,000</td></tr>
<tr><td>Luxury Taxe Total</td><td>$0</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>$0</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>$0</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>$0</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>$0</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>$50,920,054</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>$50,920,054</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Claude Giroux</td>
<td>$8,660,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Marc-Andre Fleury</td>
<td>$8,300,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Shea Weber</td>
<td>$8,200,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Roman Josi</td>
<td>$8,000,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Mark Stone</td>
<td>$7,750,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Gabriel Landeskog</td>
<td>$6,750,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Artem Anisimov</td>
<td>$4,850,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Nick Jensen</td>
<td>$4,500,000 (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Charlie Coyle</td>
<td>$4,000,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Carter Hutton</td>
<td>$3,500,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Chris Tierney</td>
<td>$2,900,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Ben Hutton</td>
<td>$2,800,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jesper Fast</td>
<td>$2,200,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Colin White</td>
<td>$1,491,667 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Matt Grzelcyk</td>
<td>$1,400,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Ryan Donato</td>
<td>$1,350,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Erik Gustafsson</td>
<td>$1,200,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Ian McCoshen</td>
<td>$1,025,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Charlie Lindgren</td>
<td>$1,000,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Artturi Lehkonen</td>
<td>$925,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Reid Boucher</td>
<td>$900,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Kevin Porter</td>
<td>$800,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jesper Bratt</td>
<td>$749,167 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Matt Taormina</td>
<td>$650,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>24</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $83,900,834</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $51,876,667</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $48,451,667</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $31,560,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $83,900,834</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $51,876,667</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $48,451,667</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $31,560,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $83,900,834</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $51,876,667</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $48,451,667</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $31,560,000</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Zach Trotman</td>
<td>$97,500 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Kevin Roy</td>
<td>$92,500 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Robby Fabbri</td>
<td>$90,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>3</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $280,000</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $92,500</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $0</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $280,000</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $92,500</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $0</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="TeamFinancePro_DET"><a id="RedWings">Red Wings</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=11">Red Wings Page</a> ]
[ <a href="OTHL-PLF-ProTeamRoster.php#RedWings">Pro Team Roster</a> ]
[ <a href="OTHL-PLF-ProTeamScoring.php#RedWings">Pro Team Scoring</a> ]
[ <a href="OTHL-PLF-TeamFinance.php#RedWings">Team Finance</a> ]
[ <a href="OTHL-PLF-ProTeamPlayersInfo.php#RedWings">Pro Team PlayersInfo</a> ]
[ <a href="OTHL-PLF-ProTeamLines.php#RedWings">Pro Team Lines</a> ]
[ <a href="OTHL-PLF-TeamProspects.php#RedWings">Team Prospects</a> ]
[ <a href="OTHL-PLF-ProTeamSchedule.php#RedWings">Pro Team Schedule</a> ]
[ <a href="OTHL-PLF-ProTeamStats.php#RedWings">Pro Team Stats</a> ]
[ <a href="OTHL-PLF-ProTeamStatsVS.php#RedWings">Pro Team Stats VS</a> ]
[ <a href="OTHL-PLF-TeamInjurySuspension.php#RedWings">Team Injury Suspension</a> ]
[ <a href="OTHL-PLF-TeamHistory.php#RedWings">Team History</a> ]
[ <a href="OTHL-PLF-TeamRecords.php#RedWings">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_RedWings');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_RedWings" style="display: block;">
<br /><br /><table class="STHSTableFullW"><tr><td style="vertical-align: top;width:440px;">
<table class="STHSFinance_TeamTable">
<tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_AreanaCapacity">Arena Capacity - Ticket Price<br />Attendance - %</h3></td></tr>
<tr><td class="STHSW250">Arena Name</td><td class="STHSW200">Joe Louis Arena</td></tr>
<tr><td>Level 1: </td><td>6000 - $100 - 0 - 0.00%</td></tr>
<tr><td>Level 2: </td><td>5000 - $75 - 0 - 0.00%</td></tr>
<tr><td>Level 3: </td><td>4000 - $50 - 0 - 0.00%</td></tr>
<tr><td>Level 4: </td><td>3000 - $40 - 0 - 0.00%</td></tr>
<tr><td>Luxury : </td><td>1000 - $200 - 0 - 0.00%</td></tr>
<tr><td>Total Capacity :</td><td>19000</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Farm Level 1: </td><td>2000 - $40 - 0 - 0.00%</td></tr>
<tr><td>Farm Level 2: </td><td>1000 - $0 - 0 - 0.00%</td></tr>
<tr><td>Farm Total Capacity :</td><td>3000</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Income">Income</h3></td></tr>
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>0 - 0.00%</td></tr>
<tr><td>Average Income per Game</td><td>$0</td></tr>
<tr><td>Year to Date Revenue</td><td>$0</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>0 - 0.00%</td></tr>
<tr><td>Average Income per Game</td><td>$0</td></tr>
<tr><td>Year to Date Revenue</td><td>$0</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>$84,965,833</td></tr>
<tr><td>Farm Players Total Salaries</td><td>$544,833</td></tr>
<tr><td>Coaches Total Salaries</td><td>$5,750,000</td></tr>
<tr><td>Luxury Taxe Total</td><td>$0</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>$0</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>$0</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>$0</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>$0</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>$19,232,231</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>$19,232,231</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Ryan Suter</td>
<td>$9,625,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Sergei Bobrovsky</td>
<td>$9,150,000 (6)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Matt Duchene</td>
<td>$7,700,000 (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Mark Giordano</td>
<td>$7,500,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Marc Staal</td>
<td>$6,650,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Mathew Dumba</td>
<td>$6,000,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Torey Krug</td>
<td>$5,600,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Kyle Turris</td>
<td>$5,000,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Calvin de Haan</td>
<td>$4,550,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Connor McDavid</td>
<td>$3,775,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Patrik Laine</td>
<td>$3,575,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Conor Sheary</td>
<td>$3,000,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jake McCabe</td>
<td>$2,500,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jared McCann</td>
<td>$1,250,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Stefan Noesen</td>
<td>$1,075,833 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Teddy Blueger</td>
<td>$925,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Brayden Point</td>
<td>$919,167 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Mathieu Joseph</td>
<td>$910,833 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Oliver Bjorkstrand</td>
<td>$871,667 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Ivan Barbashev</td>
<td>$863,333 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Andrew Mangiapane</td>
<td>$800,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Paul Thompson</td>
<td>$700,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Colin McDonald</td>
<td>$700,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Korbinian Holzer</td>
<td>$700,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Marcus Hogberg</td>
<td>$625,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>25</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $84,965,833</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $46,749,166</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $45,885,833</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $33,000,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $84,340,833</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $46,124,166</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $45,260,833</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $33,000,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $84,965,833</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $46,749,166</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $45,885,833</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $33,000,000</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Aaron Dell</td>
<td>$200,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Anton Lindholm</td>
<td>$92,500 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Austin Wagner</td>
<td>$92,500 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Martin Frk</td>
<td>$86,333 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Connor Clifton</td>
<td>$73,500 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>5</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $544,833</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $252,333</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $166,000</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $0</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $544,833</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $252,333</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $166,000</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $0</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="TeamFinancePro_BUF"><a id="Sabres">Sabres</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=4">Sabres Page</a> ]
[ <a href="OTHL-PLF-ProTeamRoster.php#Sabres">Pro Team Roster</a> ]
[ <a href="OTHL-PLF-ProTeamScoring.php#Sabres">Pro Team Scoring</a> ]
[ <a href="OTHL-PLF-TeamFinance.php#Sabres">Team Finance</a> ]
[ <a href="OTHL-PLF-ProTeamPlayersInfo.php#Sabres">Pro Team PlayersInfo</a> ]
[ <a href="OTHL-PLF-ProTeamLines.php#Sabres">Pro Team Lines</a> ]
[ <a href="OTHL-PLF-TeamProspects.php#Sabres">Team Prospects</a> ]
[ <a href="OTHL-PLF-ProTeamSchedule.php#Sabres">Pro Team Schedule</a> ]
[ <a href="OTHL-PLF-ProTeamStats.php#Sabres">Pro Team Stats</a> ]
[ <a href="OTHL-PLF-ProTeamStatsVS.php#Sabres">Pro Team Stats VS</a> ]
[ <a href="OTHL-PLF-TeamInjurySuspension.php#Sabres">Team Injury Suspension</a> ]
[ <a href="OTHL-PLF-TeamHistory.php#Sabres">Team History</a> ]
[ <a href="OTHL-PLF-TeamRecords.php#Sabres">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Sabres');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Sabres" style="display: block;">
<br /><br /><table class="STHSTableFullW"><tr><td style="vertical-align: top;width:440px;">
<table class="STHSFinance_TeamTable">
<tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_AreanaCapacity">Arena Capacity - Ticket Price<br />Attendance - %</h3></td></tr>
<tr><td class="STHSW250">Arena Name</td><td class="STHSW200">HSBC Arena</td></tr>
<tr><td>Level 1: </td><td>6000 - $220 - 5,650 - 94.16%</td></tr>
<tr><td>Level 2: </td><td>5000 - $160 - 4,661 - 93.22%</td></tr>
<tr><td>Level 3: </td><td>4000 - $120 - 3,784 - 94.59%</td></tr>
<tr><td>Level 4: </td><td>3000 - $100 - 2,783 - 92.77%</td></tr>
<tr><td>Luxury : </td><td>1000 - $300 - 960 - 95.98%</td></tr>
<tr><td>Total Capacity :</td><td>19000</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Farm Level 1: </td><td>2000 - $100 - 1,153 - 57.67%</td></tr>
<tr><td>Farm Level 2: </td><td>1000 - $0 - 1,000 - 100.00%</td></tr>
<tr><td>Farm Total Capacity :</td><td>3000</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Income">Income</h3></td></tr>
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>17,837 - 93.88%</td></tr>
<tr><td>Average Income per Game</td><td>$2,769,630</td></tr>
<tr><td>Year to Date Revenue</td><td>$33,235,564</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>2,153 - 71.78%</td></tr>
<tr><td>Average Income per Game</td><td>$115,340</td></tr>
<tr><td>Year to Date Revenue</td><td>$576,700</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>$88,125,000</td></tr>
<tr><td>Farm Players Total Salaries</td><td>$1,186,834</td></tr>
<tr><td>Coaches Total Salaries</td><td>$2,900,000</td></tr>
<tr><td>Luxury Taxe Total</td><td>$0</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>$0</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>$0</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>$0</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>$0</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>$102,744,737</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>$102,744,737</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Sidney Crosby</td>
<td>$11,000,000 (6)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Brent Seabrook</td>
<td>$7,750,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Zdeno Chara</td>
<td>$7,000,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Anze Kopitar</td>
<td>$7,000,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Matt Niskanen</td>
<td>$6,100,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Rasmus Ristolainen</td>
<td>$5,700,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Anders Lee</td>
<td>$5,500,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Teuvo Teravainen</td>
<td>$5,400,000 (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Chris Kreider</td>
<td>$5,100,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Mikael Backlund</td>
<td>$5,000,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Josh Manson</td>
<td>$4,500,000 (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Rickard Rakell</td>
<td>$4,150,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Dan Hamhuis</td>
<td>$4,000,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Tim Schaller</td>
<td>$1,900,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Magnus Paajarvi</td>
<td>$1,900,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Zemgus Girgensons</td>
<td>$1,400,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>J.T. Compher</td>
<td>$1,000,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Pavel Buchnevich</td>
<td>$925,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Linus Ullmark</td>
<td>$750,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Chad Ruhwedel</td>
<td>$700,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Derek Grant</td>
<td>$700,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Thomas Greiss</td>
<td>$650,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>22</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $88,125,000</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $55,750,000</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $46,050,000</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $32,200,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $88,125,000</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $55,750,000</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $46,050,000</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $32,200,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $88,125,000</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $55,750,000</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $46,050,000</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $32,200,000</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Ross Johnston</td>
<td>$100,000 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Cole Schneider</td>
<td>$100,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Justin Bailey</td>
<td>$89,417 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Remi Elie</td>
<td>$89,417 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Michael Amadio</td>
<td>$71,500 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jacob Nilsson</td>
<td>$70,000 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Dakota Mermis</td>
<td>$70,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Yannick Weber</td>
<td>$70,000 (4)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Taylor Fedun</td>
<td>$70,000 (4)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Tyler Lewington</td>
<td>$66,500 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Ken Appleby</td>
<td>$65,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Turner Elson</td>
<td>$65,000 (5)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Kurtis MacDermid</td>
<td>$65,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Trevor Smith</td>
<td>$65,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Mario Kempe</td>
<td>$65,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Zac Rinaldo</td>
<td>$65,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>16</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $1,186,834</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $867,417</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $375,000</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $205,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $1,186,834</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $867,417</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $375,000</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $205,000</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="TeamFinancePro_OTT"><a id="Senators">Senators</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=21">Senators Page</a> ]
[ <a href="OTHL-PLF-ProTeamRoster.php#Senators">Pro Team Roster</a> ]
[ <a href="OTHL-PLF-ProTeamScoring.php#Senators">Pro Team Scoring</a> ]
[ <a href="OTHL-PLF-TeamFinance.php#Senators">Team Finance</a> ]
[ <a href="OTHL-PLF-ProTeamPlayersInfo.php#Senators">Pro Team PlayersInfo</a> ]
[ <a href="OTHL-PLF-ProTeamLines.php#Senators">Pro Team Lines</a> ]
[ <a href="OTHL-PLF-TeamProspects.php#Senators">Team Prospects</a> ]
[ <a href="OTHL-PLF-ProTeamSchedule.php#Senators">Pro Team Schedule</a> ]
[ <a href="OTHL-PLF-ProTeamStats.php#Senators">Pro Team Stats</a> ]
[ <a href="OTHL-PLF-ProTeamStatsVS.php#Senators">Pro Team Stats VS</a> ]
[ <a href="OTHL-PLF-TeamInjurySuspension.php#Senators">Team Injury Suspension</a> ]
[ <a href="OTHL-PLF-TeamHistory.php#Senators">Team History</a> ]
[ <a href="OTHL-PLF-TeamRecords.php#Senators">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Senators');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Senators" style="display: block;">
<br /><br /><table class="STHSTableFullW"><tr><td style="vertical-align: top;width:440px;">
<table class="STHSFinance_TeamTable">
<tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_AreanaCapacity">Arena Capacity - Ticket Price<br />Attendance - %</h3></td></tr>
<tr><td class="STHSW250">Arena Name</td><td class="STHSW200">Scotiabank Place</td></tr>
<tr><td>Level 1: </td><td>6000 - $105 - 0 - 0.00%</td></tr>
<tr><td>Level 2: </td><td>5000 - $75 - 0 - 0.00%</td></tr>
<tr><td>Level 3: </td><td>4000 - $55 - 0 - 0.00%</td></tr>
<tr><td>Level 4: </td><td>3000 - $45 - 0 - 0.00%</td></tr>
<tr><td>Luxury : </td><td>1000 - $210 - 0 - 0.00%</td></tr>
<tr><td>Total Capacity :</td><td>19000</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Farm Level 1: </td><td>2000 - $60 - 0 - 0.00%</td></tr>
<tr><td>Farm Level 2: </td><td>1000 - $0 - 0 - 0.00%</td></tr>
<tr><td>Farm Total Capacity :</td><td>3000</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Income">Income</h3></td></tr>
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>0 - 0.00%</td></tr>
<tr><td>Average Income per Game</td><td>$0</td></tr>
<tr><td>Year to Date Revenue</td><td>$0</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>0 - 0.00%</td></tr>
<tr><td>Average Income per Game</td><td>$0</td></tr>
<tr><td>Year to Date Revenue</td><td>$0</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>$72,069,167</td></tr>
<tr><td>Farm Players Total Salaries</td><td>$316,667</td></tr>
<tr><td>Coaches Total Salaries</td><td>$5,450,000</td></tr>
<tr><td>Luxury Taxe Total</td><td>$0</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>$0</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>$0</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>$0</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>$0</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>$26,394,475</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>$26,394,475</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Ryan Johansen</td>
<td>$8,000,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Vladimir Tarasenko</td>
<td>$8,000,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Ryan McDonagh</td>
<td>$7,100,000 (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Erik Johnson</td>
<td>$6,750,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>David Pastrnak</td>
<td>$6,750,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Nick Leddy</td>
<td>$5,500,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Alex Galchenyuk</td>
<td>$4,900,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Andrei Vasilevskiy</td>
<td>$4,000,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Bryan Rust</td>
<td>$3,500,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Drew Stafford</td>
<td>$3,350,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Pierre-Edouard Bellemare</td>
<td>$2,300,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Ryan Reaves</td>
<td>$1,750,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Trevor Lewis</td>
<td>$1,500,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Joakim Nordstrom</td>
<td>$1,000,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>John Hayden</td>
<td>$925,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jason Dickinson</td>
<td>$894,167 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jordan Nolan</td>
<td>$850,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Trevor Carrick</td>
<td>$750,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Corey Tropp</td>
<td>$750,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Fredrik Claesson</td>
<td>$750,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Dean Kukan</td>
<td>$725,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Calvin Pickard</td>
<td>$700,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Max Lagace</td>
<td>$700,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Dylan McIlrath</td>
<td>$625,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>24</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $72,069,167</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $40,075,000</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $30,850,000</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $21,850,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $72,069,167</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $40,075,000</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $30,850,000</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $21,850,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $72,069,167</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $40,075,000</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $30,850,000</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $21,850,000</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Frank Corrado</td>
<td>$100,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Michael Bunting</td>
<td>$92,500 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Tim Heed</td>
<td>$71,667 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Nick Moutrey</td>
<td>$52,500 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>4</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $316,667</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $145,000</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $145,000</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $0</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $339,167</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $167,500</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $167,500</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $0</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="TeamFinancePro_SJS"><a id="Sharks">Sharks</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=26">Sharks Page</a> ]
[ <a href="OTHL-PLF-ProTeamRoster.php#Sharks">Pro Team Roster</a> ]
[ <a href="OTHL-PLF-ProTeamScoring.php#Sharks">Pro Team Scoring</a> ]
[ <a href="OTHL-PLF-TeamFinance.php#Sharks">Team Finance</a> ]
[ <a href="OTHL-PLF-ProTeamPlayersInfo.php#Sharks">Pro Team PlayersInfo</a> ]
[ <a href="OTHL-PLF-ProTeamLines.php#Sharks">Pro Team Lines</a> ]
[ <a href="OTHL-PLF-TeamProspects.php#Sharks">Team Prospects</a> ]
[ <a href="OTHL-PLF-ProTeamSchedule.php#Sharks">Pro Team Schedule</a> ]
[ <a href="OTHL-PLF-ProTeamStats.php#Sharks">Pro Team Stats</a> ]
[ <a href="OTHL-PLF-ProTeamStatsVS.php#Sharks">Pro Team Stats VS</a> ]
[ <a href="OTHL-PLF-TeamInjurySuspension.php#Sharks">Team Injury Suspension</a> ]
[ <a href="OTHL-PLF-TeamHistory.php#Sharks">Team History</a> ]
[ <a href="OTHL-PLF-TeamRecords.php#Sharks">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Sharks');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Sharks" style="display: block;">
<br /><br /><table class="STHSTableFullW"><tr><td style="vertical-align: top;width:440px;">
<table class="STHSFinance_TeamTable">
<tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_AreanaCapacity">Arena Capacity - Ticket Price<br />Attendance - %</h3></td></tr>
<tr><td class="STHSW250">Arena Name</td><td class="STHSW200">HP Pavillion</td></tr>
<tr><td>Level 1: </td><td>6000 - $169 - 5,934 - 98.89%</td></tr>
<tr><td>Level 2: </td><td>5000 - $127 - 4,928 - 98.56%</td></tr>
<tr><td>Level 3: </td><td>4000 - $83 - 3,986 - 99.66%</td></tr>
<tr><td>Level 4: </td><td>3000 - $50 - 3,000 - 100.00%</td></tr>
<tr><td>Luxury : </td><td>1000 - $230 - 999 - 99.90%</td></tr>
<tr><td>Total Capacity :</td><td>19000</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Farm Level 1: </td><td>2000 - $99 - 1,081 - 54.05%</td></tr>
<tr><td>Farm Level 2: </td><td>1000 - $0 - 1,000 - 100.00%</td></tr>
<tr><td>Farm Total Capacity :</td><td>3000</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Income">Income</h3></td></tr>
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>18,847 - 99.19%</td></tr>
<tr><td>Average Income per Game</td><td>$2,339,281</td></tr>
<tr><td>Year to Date Revenue</td><td>$7,017,844</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>2,081 - 69.37%</td></tr>
<tr><td>Average Income per Game</td><td>$107,019</td></tr>
<tr><td>Year to Date Revenue</td><td>$214,038</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>$83,344,334</td></tr>
<tr><td>Farm Players Total Salaries</td><td>$315,600</td></tr>
<tr><td>Coaches Total Salaries</td><td>$2,675,000</td></tr>
<tr><td>Luxury Taxe Total</td><td>$0</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>$0</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>$0</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>$0</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>$0</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>$96,909,238</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>$96,909,238</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Kris Letang</td>
<td>$8,650,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Phil Kessel</td>
<td>$7,950,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Evgeny Kuznetsov</td>
<td>$7,800,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Filip Forsberg</td>
<td>$7,000,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Aleksander Barkov</td>
<td>$5,900,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jared Spurgeon</td>
<td>$5,750,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>T.J. Brodie</td>
<td>$5,600,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Tyler Toffoli</td>
<td>$4,800,000 (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Justin Braun</td>
<td>$4,500,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Derek Ryan</td>
<td>$4,050,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Joel Edmundson</td>
<td>$3,500,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Michal Neuvirth</td>
<td>$2,100,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Joel Armia</td>
<td>$1,900,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Brett Kulak</td>
<td>$1,850,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Darcy Kuemper</td>
<td>$1,850,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Laurent Brossoit</td>
<td>$1,250,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Robert Thomas</td>
<td>$1,177,500 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Oskar Lindblom</td>
<td>$1,137,500 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Travis Konecny</td>
<td>$1,106,667 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Victor Rask</td>
<td>$1,000,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Andrew Poturalski</td>
<td>$1,000,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Zack MacEwen</td>
<td>$996,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Brendan Leipsic</td>
<td>$895,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Gustav Forsling</td>
<td>$875,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Ondrej Kase</td>
<td>$706,667 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>25</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $83,344,334</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $61,337,667</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $49,277,500</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $30,550,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $83,344,334</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $61,337,667</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $49,277,500</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $30,550,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $83,344,334</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $61,337,667</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $49,277,500</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $30,550,000</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Jimmy Schuldt</td>
<td>$92,500 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Dan Renouf</td>
<td>$85,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Robbie Russo</td>
<td>$70,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Joseph LaBate</td>
<td>$68,100 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>4</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $315,600</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $160,600</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $160,600</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $0</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $315,600</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $160,600</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $160,600</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $0</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="TeamFinancePro_DAL"><a id="Stars">Stars</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=10">Stars Page</a> ]
[ <a href="OTHL-PLF-ProTeamRoster.php#Stars">Pro Team Roster</a> ]
[ <a href="OTHL-PLF-ProTeamScoring.php#Stars">Pro Team Scoring</a> ]
[ <a href="OTHL-PLF-TeamFinance.php#Stars">Team Finance</a> ]
[ <a href="OTHL-PLF-ProTeamPlayersInfo.php#Stars">Pro Team PlayersInfo</a> ]
[ <a href="OTHL-PLF-ProTeamLines.php#Stars">Pro Team Lines</a> ]
[ <a href="OTHL-PLF-TeamProspects.php#Stars">Team Prospects</a> ]
[ <a href="OTHL-PLF-ProTeamSchedule.php#Stars">Pro Team Schedule</a> ]
[ <a href="OTHL-PLF-ProTeamStats.php#Stars">Pro Team Stats</a> ]
[ <a href="OTHL-PLF-ProTeamStatsVS.php#Stars">Pro Team Stats VS</a> ]
[ <a href="OTHL-PLF-TeamInjurySuspension.php#Stars">Team Injury Suspension</a> ]
[ <a href="OTHL-PLF-TeamHistory.php#Stars">Team History</a> ]
[ <a href="OTHL-PLF-TeamRecords.php#Stars">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Stars');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Stars" style="display: block;">
<br /><br /><table class="STHSTableFullW"><tr><td style="vertical-align: top;width:440px;">
<table class="STHSFinance_TeamTable">
<tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_AreanaCapacity">Arena Capacity - Ticket Price<br />Attendance - %</h3></td></tr>
<tr><td class="STHSW250">Arena Name</td><td class="STHSW200">American Airlines Center</td></tr>
<tr><td>Level 1: </td><td>6000 - $185 - 0 - 0.00%</td></tr>
<tr><td>Level 2: </td><td>5000 - $115 - 0 - 0.00%</td></tr>
<tr><td>Level 3: </td><td>4000 - $75 - 0 - 0.00%</td></tr>
<tr><td>Level 4: </td><td>3000 - $64 - 0 - 0.00%</td></tr>
<tr><td>Luxury : </td><td>1000 - $290 - 0 - 0.00%</td></tr>
<tr><td>Total Capacity :</td><td>19000</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Farm Level 1: </td><td>2000 - $35 - 0 - 0.00%</td></tr>
<tr><td>Farm Level 2: </td><td>1000 - $0 - 0 - 0.00%</td></tr>
<tr><td>Farm Total Capacity :</td><td>3000</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Income">Income</h3></td></tr>
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>0 - 0.00%</td></tr>
<tr><td>Average Income per Game</td><td>$0</td></tr>
<tr><td>Year to Date Revenue</td><td>$0</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>0 - 0.00%</td></tr>
<tr><td>Average Income per Game</td><td>$0</td></tr>
<tr><td>Year to Date Revenue</td><td>$0</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>$78,046,666</td></tr>
<tr><td>Farm Players Total Salaries</td><td>$200,000</td></tr>
<tr><td>Coaches Total Salaries</td><td>$2,450,000</td></tr>
<tr><td>Luxury Taxe Total</td><td>$0</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>$0</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>$0</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>$0</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>$0</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>$52,319,170</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>$52,319,170</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Patrice Bergeron</td>
<td>$9,500,000 (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Corey Perry</td>
<td>$8,150,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Duncan Keith</td>
<td>$7,500,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Zach Parise</td>
<td>$6,800,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Cam Talbot</td>
<td>$6,250,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jon Marchessault</td>
<td>$5,900,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Frans Nielsen</td>
<td>$5,650,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Max Pacioretty</td>
<td>$4,750,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Thomas Hickey</td>
<td>$3,875,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Craig Anderson</td>
<td>$2,300,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Mark Letestu</td>
<td>$2,250,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jordie Benn</td>
<td>$2,000,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Colton Sceviour</td>
<td>$1,750,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Johan Larsson</td>
<td>$1,600,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Matt Puempel</td>
<td>$1,075,833 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Brendan Gaunce</td>
<td>$1,025,833 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Anthony Stolarz</td>
<td>$1,000,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Nate Prosser</td>
<td>$950,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Byron Froese</td>
<td>$900,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Derek Forbort</td>
<td>$900,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Mike Reilly</td>
<td>$900,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jordan Weal</td>
<td>$870,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Brandon Davidson</td>
<td>$800,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Andrew Agozzino</td>
<td>$700,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Ryan Sproul</td>
<td>$650,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>25</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $78,046,666</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $66,775,000</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $45,975,000</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $24,150,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $78,046,666</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $66,775,000</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $45,975,000</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $24,150,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $78,046,666</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $66,775,000</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $45,975,000</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $24,150,000</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Nicolas Deslauriers</td>
<td>$70,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Phil Varone</td>
<td>$65,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jean-Francois Berube</td>
<td>$65,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>3</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $200,000</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $0</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $200,000</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $0</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="TeamFinancePro_MIN"><a id="Wild">Wild</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=15">Wild Page</a> ]
[ <a href="OTHL-PLF-ProTeamRoster.php#Wild">Pro Team Roster</a> ]
[ <a href="OTHL-PLF-ProTeamScoring.php#Wild">Pro Team Scoring</a> ]
[ <a href="OTHL-PLF-TeamFinance.php#Wild">Team Finance</a> ]
[ <a href="OTHL-PLF-ProTeamPlayersInfo.php#Wild">Pro Team PlayersInfo</a> ]
[ <a href="OTHL-PLF-ProTeamLines.php#Wild">Pro Team Lines</a> ]
[ <a href="OTHL-PLF-TeamProspects.php#Wild">Team Prospects</a> ]
[ <a href="OTHL-PLF-ProTeamSchedule.php#Wild">Pro Team Schedule</a> ]
[ <a href="OTHL-PLF-ProTeamStats.php#Wild">Pro Team Stats</a> ]
[ <a href="OTHL-PLF-ProTeamStatsVS.php#Wild">Pro Team Stats VS</a> ]
[ <a href="OTHL-PLF-TeamInjurySuspension.php#Wild">Team Injury Suspension</a> ]
[ <a href="OTHL-PLF-TeamHistory.php#Wild">Team History</a> ]
[ <a href="OTHL-PLF-TeamRecords.php#Wild">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Wild');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Wild" style="display: block;">
<br /><br /><table class="STHSTableFullW"><tr><td style="vertical-align: top;width:440px;">
<table class="STHSFinance_TeamTable">
<tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_AreanaCapacity">Arena Capacity - Ticket Price<br />Attendance - %</h3></td></tr>
<tr><td class="STHSW250">Arena Name</td><td class="STHSW200">Xcel Energy Center</td></tr>
<tr><td>Level 1: </td><td>6000 - $150 - 0 - 0.00%</td></tr>
<tr><td>Level 2: </td><td>5000 - $100 - 0 - 0.00%</td></tr>
<tr><td>Level 3: </td><td>4000 - $85 - 0 - 0.00%</td></tr>
<tr><td>Level 4: </td><td>3000 - $50 - 0 - 0.00%</td></tr>
<tr><td>Luxury : </td><td>1000 - $275 - 0 - 0.00%</td></tr>
<tr><td>Total Capacity :</td><td>19000</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Farm Level 1: </td><td>2000 - $35 - 0 - 0.00%</td></tr>
<tr><td>Farm Level 2: </td><td>1000 - $0 - 0 - 0.00%</td></tr>
<tr><td>Farm Total Capacity :</td><td>3000</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Income">Income</h3></td></tr>
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>0 - 0.00%</td></tr>
<tr><td>Average Income per Game</td><td>$0</td></tr>
<tr><td>Year to Date Revenue</td><td>$0</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>0 - 0.00%</td></tr>
<tr><td>Average Income per Game</td><td>$0</td></tr>
<tr><td>Year to Date Revenue</td><td>$0</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>$57,669,833</td></tr>
<tr><td>Farm Players Total Salaries</td><td>$1,113,800</td></tr>
<tr><td>Coaches Total Salaries</td><td>$4,550,000</td></tr>
<tr><td>Luxury Taxe Total</td><td>$0</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>$0</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>$0</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>$0</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>$0</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>$109,225,566</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>$109,225,566</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>David Backes</td>
<td>$8,000,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Kyle Okposo</td>
<td>$7,500,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Tyson Barrie</td>
<td>$7,000,000 (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>John Carlson</td>
<td>$6,500,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Nino Niederreiter</td>
<td>$5,500,000 (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jakob Silfverberg</td>
<td>$5,250,000 (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Trevor Daley</td>
<td>$4,250,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Troy Brouwer</td>
<td>$2,950,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Mikhail Sergachev</td>
<td>$1,744,166 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Brandon Pirri</td>
<td>$1,250,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Tage Thompson</td>
<td>$1,137,500 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Troy Grosenick</td>
<td>$950,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Conor Garland</td>
<td>$822,333 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Casey Nelson</td>
<td>$800,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Seth Griffith</td>
<td>$759,167 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Tyler Graovac</td>
<td>$700,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Brett Ritchie</td>
<td>$700,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Karl Alzner</td>
<td>$700,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Sam Carrick</td>
<td>$631,667 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Eddie Lack</td>
<td>$525,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>20</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $57,669,833</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $40,991,500</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $36,904,000</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $25,250,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $58,144,833</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $40,991,500</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $36,904,000</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $25,250,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $57,669,833</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $40,991,500</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $36,904,000</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $25,250,000</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Patrick Eaves</td>
<td>$325,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Mike Condon</td>
<td>$240,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Matt Irwin</td>
<td>$120,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jayce Hawryluk</td>
<td>$92,500 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Riley Barber</td>
<td>$92,500 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Rocco Grimaldi</td>
<td>$90,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Nathan Paetsch</td>
<td>$80,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Calvin Thurkauf</td>
<td>$73,800 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>8</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $1,113,800</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $258,800</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $258,800</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $0</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2019 :</b> $1,113,800</td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $258,800</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $258,800</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $0</td></tr>
</table>
</td></tr></table>
</div>
<?php include "Footer.php";?>
