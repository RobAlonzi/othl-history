<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<title>OTHL - Team Finance</title>
<script src="OTHL.js"></script>
<meta name="author" content="Simon Tremblay, sths.simont.info" />
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="Decription" content="Tyler Bell - STHS - Version : 3.2.0.0 - OTHL-STHS.db - OTHL-STHSCareerStat.db"/>
<link href="STHSMain.css" rel="stylesheet" type="text/css" />
<link href="OTHL.css" rel="stylesheet" type="text/css" />
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
 | <a href="#SalaryCapCentrale">Salary Cap Centrale Report</a></div>
<h1 class="TeamFinancePro_COL"><a id="Avalanche">Avalanche</a></h1>
<div class="STHSTeamLink">
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
<tr><td>Pro Players Total Salaries</td><td>$64,488,333</td></tr>
<tr><td>Farm Players Total Salaries</td><td>$260,200</td></tr>
<tr><td>Coaches Total Salaries</td><td>$600,000</td></tr>
<tr><td>Luxury Taxe Total</td><td>$0</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>$0</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>$0</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>$0</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>$0</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Estimated Season Revenue</td><td>$0</td></tr>
<tr><td>Pro Remaining Season Days</td><td>0</td></tr>
<tr><td>Pro Expenses Per Days</td><td>$0</td></tr>
<tr><td>Pro Estimated Expenses</td><td>$0</td></tr>
<tr><td>Farm Remaining Season Days</td><td>0</td></tr>
<tr><td>Farm Expenses Per Days</td><td>$0</td></tr>
<tr><td>Farm Estimated Expenses</td><td>$0</td></tr>
<tr><td>Estimated Season Expenses</td><td>$0</td></tr>
<tr><td>Estimated Season Salary Cap</td><td>$0</td></tr>
<tr><td>Estimate Under Maximum Salary Cap of $81,500,000</td><td>$0</td></tr>
<tr><td>Estimate Over Minimum Salary Cap of $58,800,000 </td><td>$0</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>$182,831,388</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>$182,831,388</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Patrick Kane</td>
<td>$10,500,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$10,500,000</td></tr>
<tr><td>Mikko Koivu</td>
<td>$7,750,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$7,750,000</td></tr>
<tr><td>Hampus Lindholm</td>
<td>$6,000,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$6,000,000</td></tr>
<tr><td>J.T. Miller</td>
<td>$5,750,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$5,750,000</td></tr>
<tr><td>Jake Allen</td>
<td>$5,250,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$5,250,000</td></tr>
<tr><td>Brett Pesce</td>
<td>$4,250,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$4,250,000</td></tr>
<tr><td>Braydon Coburn</td>
<td>$3,800,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$3,800,000</td></tr>
<tr><td>Will Butcher</td>
<td>$3,775,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$3,775,000</td></tr>
<tr><td>Richard Panik</td>
<td>$2,750,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$2,750,000</td></tr>
<tr><td>Brock McGinn</td>
<td>$2,100,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$2,100,000</td></tr>
<tr><td>Tobias Rieder</td>
<td>$2,000,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$2,000,000</td></tr>
<tr><td>Travis Boyd</td>
<td>$925,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$925,000</td></tr>
<tr><td>Chris Mueller</td>
<td>$900,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$900,000</td></tr>
<tr><td>Chris Driedger</td>
<td>$900,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$900,000</td></tr>
<tr><td>Jonas Siegenthaler</td>
<td>$888,333 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$888,333</td></tr>
<tr><td>Lucas Wallmark</td>
<td>$750,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$750,000</td></tr>
<tr><td>Keegan Lowe</td>
<td>$750,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$750,000</td></tr>
<tr><td>Blake Pietila</td>
<td>$750,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$750,000</td></tr>
<tr><td>Carson Soucy</td>
<td>$750,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$750,000</td></tr>
<tr><td>Andreas Englund</td>
<td>$700,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$700,000</td></tr>
<tr><td>Julian Melchiori</td>
<td>$700,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$700,000</td></tr>
<tr><td>Mark Alt</td>
<td>$700,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$700,000</td></tr>
<tr><td>Mike Vecchione</td>
<td>$700,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$700,000</td></tr>
<tr><td>Martin Ouellette</td>
<td>$625,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$625,000</td></tr>
<tr><td>Michael Sgarbossa</td>
<td>$525,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$525,000</td></tr>
<tr><td>Brandon Manning</td>
<td>$0 (0)</td></tr>
<tr><td>Brandon Carlo</td>
<td>$0 (0)</td></tr>
<tr><td>Michael Frolik</td>
<td>$0 (0)</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>28</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $64,488,333</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $22,138,333</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $9,350,000</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $0</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $64,488,333</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $22,138,333</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $9,350,000</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $0</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $64,488,333</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $22,138,333</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $9,350,000</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $0</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Joseph Cramarossa</td>
<td>$95,200 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$95,200</td></tr>
<tr><td>Adam Clendening</td>
<td>$90,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$90,000</td></tr>
<tr><td>Kurtis Gabriel</td>
<td>$75,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$75,000</td></tr>
<tr><td>Kevin Czuczman</td>
<td>$0 (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>4</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $260,200</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $75,000</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $0</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $260,200</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $75,000</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $0</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="TeamFinancePro_CHI"><a id="Blackhawks">Blackhawks</a></h1>
<div class="STHSTeamLink">
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
<tr><td>Level 1: </td><td>6000 - $125 - 0 - 0.00%</td></tr>
<tr><td>Level 2: </td><td>5000 - $100 - 0 - 0.00%</td></tr>
<tr><td>Level 3: </td><td>4000 - $75 - 0 - 0.00%</td></tr>
<tr><td>Level 4: </td><td>3000 - $60 - 0 - 0.00%</td></tr>
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
<tr><td>Pro Players Total Salaries</td><td>$82,958,333</td></tr>
<tr><td>Farm Players Total Salaries</td><td>$804,833</td></tr>
<tr><td>Coaches Total Salaries</td><td>$3,840,000</td></tr>
<tr><td>Luxury Taxe Total</td><td>$0</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>$0</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>$0</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>$0</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>$0</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Estimated Season Revenue</td><td>$0</td></tr>
<tr><td>Pro Remaining Season Days</td><td>0</td></tr>
<tr><td>Pro Expenses Per Days</td><td>$0</td></tr>
<tr><td>Pro Estimated Expenses</td><td>$0</td></tr>
<tr><td>Farm Remaining Season Days</td><td>0</td></tr>
<tr><td>Farm Expenses Per Days</td><td>$0</td></tr>
<tr><td>Farm Estimated Expenses</td><td>$0</td></tr>
<tr><td>Estimated Season Expenses</td><td>$0</td></tr>
<tr><td>Estimated Season Salary Cap</td><td>$0</td></tr>
<tr><td>Estimate Under Maximum Salary Cap of $81,500,000</td><td>$0</td></tr>
<tr><td>Estimate Over Minimum Salary Cap of $58,800,000 </td><td>$0</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>$47,055,937</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>$47,055,937</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Evgeni Malkin</td>
<td>$12,000,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$12,000,000</td></tr>
<tr><td>Sebastian Aho</td>
<td>$8,450,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$8,450,000</td></tr>
<tr><td>Corey Crawford</td>
<td>$6,850,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$6,850,000</td></tr>
<tr><td>Zach Werenski</td>
<td>$6,350,000 (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$6,350,000</td></tr>
<tr><td>Jason Zucker</td>
<td>$5,500,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$5,500,000</td></tr>
<tr><td>Tyler Johnson</td>
<td>$5,250,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$5,250,000</td></tr>
<tr><td>Andy Greene</td>
<td>$5,200,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$5,200,000</td></tr>
<tr><td>Alexander Wennberg</td>
<td>$5,000,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$5,000,000</td></tr>
<tr><td>Justin Faulk</td>
<td>$5,000,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$5,000,000</td></tr>
<tr><td>Shayne Gostisbehere</td>
<td>$4,500,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$4,500,000</td></tr>
<tr><td>Jimmy Howard</td>
<td>$4,200,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$4,200,000</td></tr>
<tr><td>Matt Calvert</td>
<td>$3,350,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$3,350,000</td></tr>
<tr><td>Vladislav Namestnikov</td>
<td>$3,250,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$3,250,000</td></tr>
<tr><td>Carl Hagelin</td>
<td>$3,145,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$3,145,000</td></tr>
<tr><td>Anthony DeAngelo</td>
<td>$1,363,333 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$1,363,333</td></tr>
<tr><td>Jesper Boqvist</td>
<td>$925,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$925,000</td></tr>
<tr><td>David Kampf</td>
<td>$925,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$925,000</td></tr>
<tr><td>Zac Dalpe</td>
<td>$850,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$850,000</td></tr>
<tr><td>Kevin Rooney</td>
<td>$850,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$850,000</td></tr>
<tr><td>Matt Benning</td>
<td>$0 (0)</td></tr>
<tr><td>Brian Boyle</td>
<td>$0 (0)</td></tr>
<tr><td>Dominik Simon</td>
<td>$0 (0)</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>22</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $82,958,333</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $59,070,000</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $59,070,000</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $32,050,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $82,958,334</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $59,070,001</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $59,070,001</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $32,050,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $82,958,333</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $59,070,000</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $59,070,000</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $32,050,000</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Logan Brown</td>
<td>$157,333 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$157,333</td></tr>
<tr><td>Peter Cehlarik</td>
<td>$92,500 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$92,500</td></tr>
<tr><td>Justin Holl</td>
<td>$92,500 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$92,500</td></tr>
<tr><td>Max Veronneau</td>
<td>$92,500 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$92,500</td></tr>
<tr><td>Kiefer Sherwood</td>
<td>$92,500 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$92,500</td></tr>
<tr><td>Matt Tennyson</td>
<td>$75,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$75,000</td></tr>
<tr><td>Cameron Schilling</td>
<td>$70,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$70,000</td></tr>
<tr><td>Matt Bartkowski</td>
<td>$67,500 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$67,500</td></tr>
<tr><td>Joseph Blandisi</td>
<td>$65,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$65,000</td></tr>
<tr><td>Griffen Molino</td>
<td>$0 (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Adam Erne</td>
<td>$0 (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Valentin Zykov</td>
<td>$0 (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>12</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $804,833</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $222,333</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $0</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $804,833</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $222,333</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $0</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="TeamFinancePro_CLB"><a id="BlueJackets">Blue Jackets</a></h1>
<div class="STHSTeamLink">
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
<tr><td>Level 1: </td><td>6000 - $225 - 0 - 0.00%</td></tr>
<tr><td>Level 2: </td><td>5000 - $165 - 0 - 0.00%</td></tr>
<tr><td>Level 3: </td><td>4000 - $135 - 0 - 0.00%</td></tr>
<tr><td>Level 4: </td><td>3000 - $100 - 0 - 0.00%</td></tr>
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
<tr><td>Pro Players Total Salaries</td><td>$50,052,500</td></tr>
<tr><td>Farm Players Total Salaries</td><td>$691,084</td></tr>
<tr><td>Coaches Total Salaries</td><td>$900,000</td></tr>
<tr><td>Luxury Taxe Total</td><td>$0</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>$0</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>$0</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>$0</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>$0</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Estimated Season Revenue</td><td>$0</td></tr>
<tr><td>Pro Remaining Season Days</td><td>0</td></tr>
<tr><td>Pro Expenses Per Days</td><td>$0</td></tr>
<tr><td>Pro Estimated Expenses</td><td>$0</td></tr>
<tr><td>Farm Remaining Season Days</td><td>0</td></tr>
<tr><td>Farm Expenses Per Days</td><td>$0</td></tr>
<tr><td>Farm Estimated Expenses</td><td>$0</td></tr>
<tr><td>Estimated Season Expenses</td><td>$0</td></tr>
<tr><td>Estimated Season Salary Cap</td><td>$0</td></tr>
<tr><td>Estimate Under Maximum Salary Cap of $81,500,000</td><td>$0</td></tr>
<tr><td>Estimate Over Minimum Salary Cap of $58,800,000 </td><td>$0</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>$46,869,345</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>$46,869,345</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Anton Stralman</td>
<td>$5,500,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$5,500,000</td></tr>
<tr><td>Danny DeKeyser</td>
<td>$5,000,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$5,000,000</td></tr>
<tr><td>Jason Demers</td>
<td>$4,500,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$4,500,000</td></tr>
<tr><td>Ian Cole</td>
<td>$4,000,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$4,000,000</td></tr>
<tr><td>Anthony Duclair</td>
<td>$4,000,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$4,000,000</td></tr>
<tr><td>Jacob Markstrom</td>
<td>$4,000,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$4,000,000</td></tr>
<tr><td>Elias Pettersson</td>
<td>$3,775,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$3,775,000</td></tr>
<tr><td>Andrew Copp</td>
<td>$3,000,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$3,000,000</td></tr>
<tr><td>Troy Stecher</td>
<td>$2,400,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$2,400,000</td></tr>
<tr><td>Quinn Hughes</td>
<td>$1,604,167 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$1,604,167</td></tr>
<tr><td>Sonny Milano</td>
<td>$1,263,333 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$1,263,333</td></tr>
<tr><td>Jake Virtanen</td>
<td>$1,250,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$1,250,000</td></tr>
<tr><td>Alexander Kerfoot</td>
<td>$1,137,500 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$1,137,500</td></tr>
<tr><td>Thatcher Demko</td>
<td>$1,050,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$1,050,000</td></tr>
<tr><td>Zach Sanford</td>
<td>$925,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$925,000</td></tr>
<tr><td>Sam Steel</td>
<td>$925,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$925,000</td></tr>
<tr><td>Andreas Johnsson</td>
<td>$925,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$925,000</td></tr>
<tr><td>Greg McKegg</td>
<td>$925,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$925,000</td></tr>
<tr><td>Robert Hagg</td>
<td>$894,167 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$894,167</td></tr>
<tr><td>Cory Conacher</td>
<td>$850,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$850,000</td></tr>
<tr><td>Alex Lyon</td>
<td>$750,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$750,000</td></tr>
<tr><td>Nicolas Aube-Kubel</td>
<td>$700,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$700,000</td></tr>
<tr><td>Philippe Myers</td>
<td>$678,333 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$678,333</td></tr>
<tr><td>Jason Spezza</td>
<td>$0 (0)</td></tr>
<tr><td>Vinnie Hinostroza</td>
<td>$0 (0)</td></tr>
<tr><td>Denis Malgin</td>
<td>$0 (0)</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>26</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $50,052,500</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $34,979,167</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $15,854,167</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $7,000,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $50,052,500</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $34,979,167</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $15,854,167</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $7,000,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $50,052,500</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $34,979,167</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $15,854,167</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $7,000,000</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Sami Niku</td>
<td>$91,667 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$91,667</td></tr>
<tr><td>Giovanni Fiore</td>
<td>$90,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$90,000</td></tr>
<tr><td>Filip Chlapik</td>
<td>$89,417 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$89,417</td></tr>
<tr><td>Patrick Russell</td>
<td>$75,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$75,000</td></tr>
<tr><td>Brad Thiessen</td>
<td>$70,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$70,000</td></tr>
<tr><td>Josh Brown</td>
<td>$70,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$70,000</td></tr>
<tr><td>Jack Rodewald</td>
<td>$70,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$70,000</td></tr>
<tr><td>Tommy Cross</td>
<td>$70,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$70,000</td></tr>
<tr><td>Adam Wilcox</td>
<td>$65,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$65,000</td></tr>
<tr><td>T.J. Tynan</td>
<td>$0 (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Phillip Di Giuseppe</td>
<td>$0 (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Evan McEneny</td>
<td>$0 (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Erik Burgdoerfer</td>
<td>$0 (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Frederick Gaudreau</td>
<td>$0 (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Hunter Shinkaruk</td>
<td>$0 (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>15</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $691,084</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $251,667</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $0</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $691,084</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $251,667</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $0</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="TeamFinancePro_STL"><a id="Blues">Blues</a></h1>
<div class="STHSTeamLink">
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
<tr><td>Pro Players Total Salaries</td><td>$53,425,831</td></tr>
<tr><td>Farm Players Total Salaries</td><td>$723,417</td></tr>
<tr><td>Coaches Total Salaries</td><td>$3,300,000</td></tr>
<tr><td>Luxury Taxe Total</td><td>$0</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>$0</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>$0</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>$0</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>$0</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Estimated Season Revenue</td><td>$0</td></tr>
<tr><td>Pro Remaining Season Days</td><td>0</td></tr>
<tr><td>Pro Expenses Per Days</td><td>$0</td></tr>
<tr><td>Pro Estimated Expenses</td><td>$0</td></tr>
<tr><td>Farm Remaining Season Days</td><td>0</td></tr>
<tr><td>Farm Expenses Per Days</td><td>$0</td></tr>
<tr><td>Farm Estimated Expenses</td><td>$0</td></tr>
<tr><td>Estimated Season Expenses</td><td>$0</td></tr>
<tr><td>Estimated Season Salary Cap</td><td>$0</td></tr>
<tr><td>Estimate Under Maximum Salary Cap of $81,500,000</td><td>$0</td></tr>
<tr><td>Estimate Over Minimum Salary Cap of $58,800,000 </td><td>$0</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>$119,730,004</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>$119,730,004</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Jonathan Quick</td>
<td>$7,250,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$7,250,000</td></tr>
<tr><td>Andrew Ladd</td>
<td>$6,000,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$6,000,000</td></tr>
<tr><td>Jonathan Drouin</td>
<td>$5,500,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$5,500,000</td></tr>
<tr><td>David Savard</td>
<td>$4,750,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$4,750,000</td></tr>
<tr><td>Brendan Smith</td>
<td>$4,250,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$4,250,000</td></tr>
<tr><td>Antoine Roussel</td>
<td>$3,250,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$3,250,000</td></tr>
<tr><td>Carter Rowney</td>
<td>$2,000,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$2,000,000</td></tr>
<tr><td>Louis Domingue</td>
<td>$2,000,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$2,000,000</td></tr>
<tr><td>Adam Boqvist</td>
<td>$1,744,167 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$1,744,167</td></tr>
<tr><td>Cedric Paquette</td>
<td>$1,660,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$1,660,000</td></tr>
<tr><td>Denis Gurianov</td>
<td>$1,644,166 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$1,644,166</td></tr>
<tr><td>Loui Eriksson</td>
<td>$1,500,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$1,500,000</td></tr>
<tr><td>Jakub Vrana</td>
<td>$1,363,333 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$1,363,333</td></tr>
<tr><td>Dalton Prout</td>
<td>$1,000,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$1,000,000</td></tr>
<tr><td>Samuel Girard</td>
<td>$935,833 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$935,833</td></tr>
<tr><td>Lukas Vejdemo</td>
<td>$925,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$925,000</td></tr>
<tr><td>Alexandre Texier</td>
<td>$925,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$925,000</td></tr>
<tr><td>Nick Seeler</td>
<td>$925,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$925,000</td></tr>
<tr><td>Joe Gambardella</td>
<td>$900,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$900,000</td></tr>
<tr><td>Ashton Sautner</td>
<td>$900,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$900,000</td></tr>
<tr><td>Janne Kuokkanen</td>
<td>$894,166 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$894,166</td></tr>
<tr><td>Cale Fleury</td>
<td>$883,333 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$883,333</td></tr>
<tr><td>Tanner Kero</td>
<td>$800,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$800,000</td></tr>
<tr><td>Sammy Blais</td>
<td>$725,833 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$725,833</td></tr>
<tr><td>Jean-Sebastien Dea</td>
<td>$700,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$700,000</td></tr>
<tr><td>Steve Bernier</td>
<td>$0 (0)</td></tr>
<tr><td>Anthony Beauvillier</td>
<td>$0 (0)</td></tr>
<tr><td>Alex Biega</td>
<td>$0 (0)</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>28</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $53,425,831</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $28,775,832</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $20,225,832</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $0</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $52,459,168</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $27,685,001</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $19,135,001</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $0</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $53,425,831</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $28,775,832</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $20,225,832</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $0</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Andrew Hammond</td>
<td>$275,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$275,000</td></tr>
<tr><td>Brendan Lemieux</td>
<td>$103,917 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$103,917</td></tr>
<tr><td>Paul Ladue</td>
<td>$92,500 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$92,500</td></tr>
<tr><td>Josh Currie</td>
<td>$90,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$90,000</td></tr>
<tr><td>Victor Mete</td>
<td>$87,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$87,000</td></tr>
<tr><td>Karson Kuhlman</td>
<td>$75,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$75,000</td></tr>
<tr><td>Luke Gazdic</td>
<td>$0 (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Marko Dano</td>
<td>$0 (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>8</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $723,417</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $90,000</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $0</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $723,417</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $90,000</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $0</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="TeamFinancePro_BOS"><a id="Bruins">Bruins</a></h1>
<div class="STHSTeamLink">
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
<tr><td>Level 1: </td><td>6000 - $165 - 0 - 0.00%</td></tr>
<tr><td>Level 2: </td><td>5000 - $115 - 0 - 0.00%</td></tr>
<tr><td>Level 3: </td><td>4000 - $90 - 0 - 0.00%</td></tr>
<tr><td>Level 4: </td><td>3000 - $65 - 0 - 0.00%</td></tr>
<tr><td>Luxury : </td><td>1000 - $255 - 0 - 0.00%</td></tr>
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
<tr><td>Pro Players Total Salaries</td><td>$71,200,000</td></tr>
<tr><td>Farm Players Total Salaries</td><td>$657,541</td></tr>
<tr><td>Coaches Total Salaries</td><td>$700,000</td></tr>
<tr><td>Luxury Taxe Total</td><td>$0</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>$0</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>$0</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>$0</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>$0</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Estimated Season Revenue</td><td>$0</td></tr>
<tr><td>Pro Remaining Season Days</td><td>0</td></tr>
<tr><td>Pro Expenses Per Days</td><td>$0</td></tr>
<tr><td>Pro Estimated Expenses</td><td>$0</td></tr>
<tr><td>Farm Remaining Season Days</td><td>0</td></tr>
<tr><td>Farm Expenses Per Days</td><td>$0</td></tr>
<tr><td>Farm Estimated Expenses</td><td>$0</td></tr>
<tr><td>Estimated Season Expenses</td><td>$0</td></tr>
<tr><td>Estimated Season Salary Cap</td><td>$0</td></tr>
<tr><td>Estimate Under Maximum Salary Cap of $81,500,000</td><td>$0</td></tr>
<tr><td>Estimate Over Minimum Salary Cap of $58,800,000 </td><td>$0</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>$35,540,978</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>$35,540,978</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Brad Marchand</td>
<td>$11,000,000 (6)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$11,000,000</td></tr>
<tr><td>Sean Couturier</td>
<td>$7,700,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$7,700,000</td></tr>
<tr><td>Evgenii Dadonov (1 Way Contract)</td>
<td>$7,200,000 (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$7,200,000</td></tr>
<tr><td>Braden Holtby</td>
<td>$7,100,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$7,100,000</td></tr>
<tr><td>Bryan Little</td>
<td>$5,500,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$5,500,000</td></tr>
<tr><td>Justin Abdelkader (1 Way Contract)</td>
<td>$4,500,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$4,500,000</td></tr>
<tr><td>Tomas Tatar</td>
<td>$4,500,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$4,500,000</td></tr>
<tr><td>Cody Eakin</td>
<td>$4,250,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$4,250,000</td></tr>
<tr><td>Boone Jenner</td>
<td>$3,750,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$3,750,000</td></tr>
<tr><td>Blake Coleman</td>
<td>$3,750,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$3,750,000</td></tr>
<tr><td>Ben Chiarot</td>
<td>$3,500,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$3,500,000</td></tr>
<tr><td>Zach Hyman</td>
<td>$3,000,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$3,000,000</td></tr>
<tr><td>Brayden McNabb</td>
<td>$2,800,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$2,800,000</td></tr>
<tr><td>Gabriel Bourque</td>
<td>$1,400,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$1,400,000</td></tr>
<tr><td>Par Lindholm</td>
<td>$1,250,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$1,250,000</td></tr>
<tr><td>Mikkel Boedker</td>
<td>$0 (0)</td></tr>
<tr><td>Ben Harpur</td>
<td>$0 (0)</td></tr>
<tr><td>Matt Roy</td>
<td>$0 (0)</td></tr>
<tr><td>Mirco Mueller</td>
<td>$0 (0)</td></tr>
<tr><td>Jack Campbell</td>
<td>$0 (0)</td></tr>
<tr><td>Joonas Korpisalo</td>
<td>$0 (0)</td></tr>
<tr><td>Erik Gudbranson</td>
<td>$0 (0)</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>22</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $71,200,000</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $46,450,000</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $36,400,000</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $35,150,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $71,200,000</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $46,450,000</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $36,400,000</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $35,150,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $71,200,000</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $46,450,000</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $36,400,000</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $35,150,000</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Vladislav Gavrikov</td>
<td>$135,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$135,000</td></tr>
<tr><td>Noah Juulsen</td>
<td>$106,333 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$106,333</td></tr>
<tr><td>Kole Sherwood</td>
<td>$100,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$100,000</td></tr>
<tr><td>Chris Bigras</td>
<td>$90,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$90,000</td></tr>
<tr><td>Anthony Angello</td>
<td>$83,375 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$83,375</td></tr>
<tr><td>Matthew Villalta</td>
<td>$77,833 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$77,833</td></tr>
<tr><td>Jake Dotchin</td>
<td>$65,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$65,000</td></tr>
<tr><td>Gustav Olofsson</td>
<td>$0 (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jaycob Megna</td>
<td>$0 (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Justin Auger</td>
<td>$0 (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Nathan Walker</td>
<td>$0 (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Brendan Perlini</td>
<td>$0 (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>12</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $657,541</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $296,208</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $0</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $657,541</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $296,208</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $0</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="TeamFinancePro_MTL"><a id="Canadiens">Canadiens</a></h1>
<div class="STHSTeamLink">
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
<tr><td>Level 1: </td><td>6000 - $200 - 0 - 0.00%</td></tr>
<tr><td>Level 2: </td><td>5000 - $150 - 0 - 0.00%</td></tr>
<tr><td>Level 3: </td><td>4000 - $125 - 0 - 0.00%</td></tr>
<tr><td>Level 4: </td><td>3000 - $105 - 0 - 0.00%</td></tr>
<tr><td>Luxury : </td><td>1000 - $275 - 0 - 0.00%</td></tr>
<tr><td>Total Capacity :</td><td>19000</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Farm Level 1: </td><td>2000 - $75 - 0 - 0.00%</td></tr>
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
<tr><td>Pro Players Total Salaries</td><td>$76,050,833</td></tr>
<tr><td>Farm Players Total Salaries</td><td>$651,834</td></tr>
<tr><td>Coaches Total Salaries</td><td>$2,850,000</td></tr>
<tr><td>Luxury Taxe Total</td><td>$0</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>$0</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>$0</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>$0</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>$0</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Estimated Season Revenue</td><td>$0</td></tr>
<tr><td>Pro Remaining Season Days</td><td>0</td></tr>
<tr><td>Pro Expenses Per Days</td><td>$0</td></tr>
<tr><td>Pro Estimated Expenses</td><td>$0</td></tr>
<tr><td>Farm Remaining Season Days</td><td>0</td></tr>
<tr><td>Farm Expenses Per Days</td><td>$0</td></tr>
<tr><td>Farm Estimated Expenses</td><td>$0</td></tr>
<tr><td>Estimated Season Expenses</td><td>$0</td></tr>
<tr><td>Estimated Season Salary Cap</td><td>$0</td></tr>
<tr><td>Estimate Under Maximum Salary Cap of $81,500,000</td><td>$0</td></tr>
<tr><td>Estimate Over Minimum Salary Cap of $58,800,000 </td><td>$0</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>$91,800,213</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>$91,800,213</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Marc-Edouard Vlasic</td>
<td>$8,000,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$8,000,000</td></tr>
<tr><td>Ivan Provorov</td>
<td>$7,750,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$7,750,000</td></tr>
<tr><td>Aaron Ekblad</td>
<td>$7,650,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$7,650,000</td></tr>
<tr><td>Mark Scheifele</td>
<td>$7,500,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$7,500,000</td></tr>
<tr><td>Nikolaj Ehlers</td>
<td>$6,000,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$6,000,000</td></tr>
<tr><td>Travis Zajac</td>
<td>$6,000,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$6,000,000</td></tr>
<tr><td>Anthony Mantha</td>
<td>$5,250,000 (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$5,250,000</td></tr>
<tr><td>Connor Murphy</td>
<td>$3,850,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$3,850,000</td></tr>
<tr><td>Vladimir Sobotka</td>
<td>$3,500,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$3,500,000</td></tr>
<tr><td>Valtteri Filppula</td>
<td>$3,000,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$3,000,000</td></tr>
<tr><td>Brandon Tanev</td>
<td>$2,000,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$2,000,000</td></tr>
<tr><td>Nikolai Prokhorkin</td>
<td>$1,775,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$1,775,000</td></tr>
<tr><td>Tucker Poolman</td>
<td>$1,775,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$1,775,000</td></tr>
<tr><td>Clayton Keller</td>
<td>$1,673,333 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$1,673,333</td></tr>
<tr><td>Kevin Connauton</td>
<td>$1,575,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$1,575,000</td></tr>
<tr><td>Vladislav Kamenev</td>
<td>$950,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$950,000</td></tr>
<tr><td>Chase Priskie</td>
<td>$925,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$925,000</td></tr>
<tr><td>Daniel Sprong</td>
<td>$925,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$925,000</td></tr>
<tr><td>Alex DeBrincat</td>
<td>$894,167 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$894,167</td></tr>
<tr><td>Carter Hart</td>
<td>$863,333 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$863,333</td></tr>
<tr><td>Matthew Phillips</td>
<td>$750,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$750,000</td></tr>
<tr><td>Alex Nedeljkovic</td>
<td>$745,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$745,000</td></tr>
<tr><td>Michael Kapla</td>
<td>$725,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$725,000</td></tr>
<tr><td>Kalle Kossila</td>
<td>$725,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$725,000</td></tr>
<tr><td>Jonny Brodzinski</td>
<td>$725,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$725,000</td></tr>
<tr><td>Alex Petrovic</td>
<td>$525,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$525,000</td></tr>
<tr><td>Melker Karlsson</td>
<td>$0 (0)</td></tr>
<tr><td>Cal O'Reilly</td>
<td>$0 (0)</td></tr>
<tr><td>Jeff Carter</td>
<td>$0 (0)</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>29</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $76,050,833</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $46,683,333</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $30,870,000</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $16,850,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $74,784,167</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $45,416,667</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $29,603,334</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $16,850,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $76,050,833</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $46,683,333</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $30,870,000</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $16,850,000</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Henrik Borgstrom</td>
<td>$149,167 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$149,167</td></tr>
<tr><td>Jacob MacDonald</td>
<td>$90,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$90,000</td></tr>
<tr><td>Sheldon Rempal</td>
<td>$90,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$90,000</td></tr>
<tr><td>T.J. Brennan</td>
<td>$90,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$90,000</td></tr>
<tr><td>Ryan Lomberg</td>
<td>$85,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$85,000</td></tr>
<tr><td>Curtis McKenzie</td>
<td>$80,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$80,000</td></tr>
<tr><td>Matt Luff</td>
<td>$67,667 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$67,667</td></tr>
<tr><td>Brian Lashoff</td>
<td>$0 (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>8</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $651,834</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $499,167</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $0</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $651,834</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $499,167</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $0</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="TeamFinancePro_VAN"><a id="Canucks">Canucks</a></h1>
<div class="STHSTeamLink">
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
<tr><td>Level 1: </td><td>6000 - $164 - 0 - 0.00%</td></tr>
<tr><td>Level 2: </td><td>5000 - $115 - 0 - 0.00%</td></tr>
<tr><td>Level 3: </td><td>4000 - $90 - 0 - 0.00%</td></tr>
<tr><td>Level 4: </td><td>3000 - $63 - 0 - 0.00%</td></tr>
<tr><td>Luxury : </td><td>1000 - $253 - 0 - 0.00%</td></tr>
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
<tr><td>Pro Players Total Salaries</td><td>$84,897,333</td></tr>
<tr><td>Farm Players Total Salaries</td><td>$1,772,667</td></tr>
<tr><td>Coaches Total Salaries</td><td>$2,500,000</td></tr>
<tr><td>Luxury Taxe Total</td><td>$0</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>$0</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>$0</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>$0</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>$0</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Estimated Season Revenue</td><td>$0</td></tr>
<tr><td>Pro Remaining Season Days</td><td>0</td></tr>
<tr><td>Pro Expenses Per Days</td><td>$0</td></tr>
<tr><td>Pro Estimated Expenses</td><td>$0</td></tr>
<tr><td>Farm Remaining Season Days</td><td>0</td></tr>
<tr><td>Farm Expenses Per Days</td><td>$0</td></tr>
<tr><td>Farm Estimated Expenses</td><td>$0</td></tr>
<tr><td>Estimated Season Expenses</td><td>$0</td></tr>
<tr><td>Estimated Season Salary Cap</td><td>$0</td></tr>
<tr><td>Estimate Under Maximum Salary Cap of $81,500,000</td><td>$0</td></tr>
<tr><td>Estimate Over Minimum Salary Cap of $58,800,000 </td><td>$0</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>$140,385,879</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>$140,385,879</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Auston Matthews</td>
<td>$10,534,000 (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$10,534,000</td></tr>
<tr><td>Mikko Rantanen</td>
<td>$9,250,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$9,250,000</td></tr>
<tr><td>Alex Steen</td>
<td>$6,500,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$6,500,000</td></tr>
<tr><td>Henrik Lundqvist</td>
<td>$6,250,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$6,250,000</td></tr>
<tr><td>Dougie Hamilton</td>
<td>$5,750,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$5,750,000</td></tr>
<tr><td>Tyler Myers</td>
<td>$5,650,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$5,650,000</td></tr>
<tr><td>Yanni Gourde</td>
<td>$4,750,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$4,750,000</td></tr>
<tr><td>Nikita Zaitsev</td>
<td>$4,500,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$4,500,000</td></tr>
<tr><td>Nick Bjugstad</td>
<td>$4,100,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$4,100,000</td></tr>
<tr><td>Nick Bonino</td>
<td>$4,000,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$4,000,000</td></tr>
<tr><td>Pat Maroon</td>
<td>$3,950,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$3,950,000</td></tr>
<tr><td>Nico Hischier</td>
<td>$3,775,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$3,775,000</td></tr>
<tr><td>Cal Clutterbuck</td>
<td>$3,500,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$3,500,000</td></tr>
<tr><td>Stephen Johns</td>
<td>$2,400,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$2,400,000</td></tr>
<tr><td>Scott Mayfield</td>
<td>$2,000,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$2,000,000</td></tr>
<tr><td>Kyle Connor</td>
<td>$1,775,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$1,775,000</td></tr>
<tr><td>Joel Farabee</td>
<td>$1,425,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$1,425,000</td></tr>
<tr><td>Michael McLeod</td>
<td>$1,363,333 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$1,363,333</td></tr>
<tr><td>Ryan Carpenter</td>
<td>$1,000,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$1,000,000</td></tr>
<tr><td>Alexandar Georgiev</td>
<td>$925,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$925,000</td></tr>
<tr><td>MacKenzie Weegar</td>
<td>$800,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$800,000</td></tr>
<tr><td>William Carrier</td>
<td>$700,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$700,000</td></tr>
<tr><td>Ryan Kesler</td>
<td>$0 (0)</td></tr>
<tr><td>Gavin Bayreuther</td>
<td>$0 (0)</td></tr>
<tr><td>Brandon Dubinsky</td>
<td>$0 (0)</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>25</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $84,897,333</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $45,172,333</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $33,822,333</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $15,284,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $83,909,004</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $44,184,004</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $32,834,004</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $15,284,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $84,897,333</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $45,172,333</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $33,822,333</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $15,284,000</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Cory Schneider</td>
<td>$400,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$400,000</td></tr>
<tr><td>Valeri Nichushkin</td>
<td>$295,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$295,000</td></tr>
<tr><td>Haydn Fleury</td>
<td>$171,333 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$171,333</td></tr>
<tr><td>J.T. Brown</td>
<td>$125,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$125,000</td></tr>
<tr><td>Rudolfs Balcers</td>
<td>$92,500 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$92,500</td></tr>
<tr><td>Jacob Larsson</td>
<td>$89,417 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$89,417</td></tr>
<tr><td>Brett Seney</td>
<td>$82,500 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$82,500</td></tr>
<tr><td>Matt Lorito</td>
<td>$80,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$80,000</td></tr>
<tr><td>Ben Gleason</td>
<td>$76,167 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$76,167</td></tr>
<tr><td>Steven Fogarty</td>
<td>$75,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$75,000</td></tr>
<tr><td>Jacob Middleton</td>
<td>$73,500 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$73,500</td></tr>
<tr><td>Joel L'Esperance</td>
<td>$72,250 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$72,250</td></tr>
<tr><td>Danick Martel</td>
<td>$70,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$70,000</td></tr>
<tr><td>Brogan Rafferty</td>
<td>$70,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$70,000</td></tr>
<tr><td>Landon Bow</td>
<td>$0 (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Chris Terry</td>
<td>$0 (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Hunter Miska</td>
<td>$0 (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Nic Petan</td>
<td>$0 (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Anton Blidh</td>
<td>$0 (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Logan O'Connor</td>
<td>$0 (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Joshua Ho-Sang</td>
<td>$0 (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Gabriel Dumont</td>
<td>$0 (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jamie McGinn</td>
<td>$0 (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>23</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $1,772,667</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $814,084</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $0</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $1,772,667</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $814,084</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $0</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="TeamFinancePro_WSH"><a id="Capitals">Capitals</a></h1>
<div class="STHSTeamLink">
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
<tr><td>Level 1: </td><td>6000 - $165 - 0 - 0.00%</td></tr>
<tr><td>Level 2: </td><td>5000 - $112 - 0 - 0.00%</td></tr>
<tr><td>Level 3: </td><td>4000 - $90 - 0 - 0.00%</td></tr>
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
<tr><td>Pro Players Total Salaries</td><td>$79,520,000</td></tr>
<tr><td>Farm Players Total Salaries</td><td>$240,000</td></tr>
<tr><td>Coaches Total Salaries</td><td>$6,800,000</td></tr>
<tr><td>Luxury Taxe Total</td><td>$0</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>$0</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>$0</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>$0</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>$0</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Estimated Season Revenue</td><td>$0</td></tr>
<tr><td>Pro Remaining Season Days</td><td>0</td></tr>
<tr><td>Pro Expenses Per Days</td><td>$0</td></tr>
<tr><td>Pro Estimated Expenses</td><td>$0</td></tr>
<tr><td>Farm Remaining Season Days</td><td>0</td></tr>
<tr><td>Farm Expenses Per Days</td><td>$0</td></tr>
<tr><td>Farm Estimated Expenses</td><td>$0</td></tr>
<tr><td>Estimated Season Expenses</td><td>$0</td></tr>
<tr><td>Estimated Season Salary Cap</td><td>$0</td></tr>
<tr><td>Estimate Under Maximum Salary Cap of $81,500,000</td><td>$0</td></tr>
<tr><td>Estimate Over Minimum Salary Cap of $58,800,000 </td><td>$0</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>$50,709,780</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>$50,709,780</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Jack Eichel</td>
<td>$10,000,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$10,000,000</td></tr>
<tr><td>Jamie Benn</td>
<td>$9,300,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$9,300,000</td></tr>
<tr><td>Drew Doughty</td>
<td>$9,250,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$9,250,000</td></tr>
<tr><td>Jacob Trouba</td>
<td>$7,500,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$7,500,000</td></tr>
<tr><td>T.J. Oshie</td>
<td>$6,850,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$6,850,000</td></tr>
<tr><td>Vincent Trocheck</td>
<td>$5,500,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$5,500,000</td></tr>
<tr><td>Dmitry Orlov</td>
<td>$5,100,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$5,100,000</td></tr>
<tr><td>Alec Martinez</td>
<td>$5,000,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$5,000,000</td></tr>
<tr><td>Kyle Palmieri</td>
<td>$4,650,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$4,650,000</td></tr>
<tr><td>Paul Byron</td>
<td>$2,500,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$2,500,000</td></tr>
<tr><td>Pavel Zacha</td>
<td>$2,400,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$2,400,000</td></tr>
<tr><td>Greg Pateryn</td>
<td>$2,250,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$2,250,000</td></tr>
<tr><td>Jujhar Khaira</td>
<td>$950,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$950,000</td></tr>
<tr><td>Carl Grundstrom</td>
<td>$925,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$925,000</td></tr>
<tr><td>Matthew Peca</td>
<td>$925,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$925,000</td></tr>
<tr><td>Nikita Gusev</td>
<td>$925,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$925,000</td></tr>
<tr><td>Chandler Stephenson</td>
<td>$925,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$925,000</td></tr>
<tr><td>Alex Iafallo</td>
<td>$925,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$925,000</td></tr>
<tr><td>Kevin Gravel</td>
<td>$750,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$750,000</td></tr>
<tr><td>Sean Walker</td>
<td>$745,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$745,000</td></tr>
<tr><td>Michael Chaput</td>
<td>$725,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$725,000</td></tr>
<tr><td>Spencer Martin</td>
<td>$725,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$725,000</td></tr>
<tr><td>Dylan Gambrell</td>
<td>$700,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$700,000</td></tr>
<tr><td>Petr Mrazek</td>
<td>$0 (0)</td></tr>
<tr><td>Gustav Nyquist</td>
<td>$0 (0)</td></tr>
<tr><td>Curtis McElhinney</td>
<td>$0 (0)</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>26</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $79,520,000</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $58,225,000</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $41,625,000</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $15,075,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $83,095,001</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $61,800,001</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $45,200,001</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $15,075,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $79,520,000</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $58,225,000</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $41,625,000</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $15,075,000</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Blake Lizotte</td>
<td>$92,500 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$92,500</td></tr>
<tr><td>A.J. Greer</td>
<td>$82,500 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$82,500</td></tr>
<tr><td>Oscar Fantenberg</td>
<td>$65,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$65,000</td></tr>
<tr><td>Steven Kampfer</td>
<td>$0 (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Chris Conner</td>
<td>$0 (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Luke Witkowski</td>
<td>$0 (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Laurent Dauphin</td>
<td>$0 (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>7</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $240,000</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $175,000</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $0</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $240,000</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $175,000</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $0</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="TeamFinancePro_ARI"><a id="Coyotes">Coyotes</a></h1>
<div class="STHSTeamLink">
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
<tr><td>Level 1: </td><td>6000 - $220 - 0 - 0.00%</td></tr>
<tr><td>Level 2: </td><td>5000 - $160 - 0 - 0.00%</td></tr>
<tr><td>Level 3: </td><td>4000 - $135 - 0 - 0.00%</td></tr>
<tr><td>Level 4: </td><td>3000 - $110 - 0 - 0.00%</td></tr>
<tr><td>Luxury : </td><td>1000 - $300 - 0 - 0.00%</td></tr>
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
<tr><td>Pro Players Total Salaries</td><td>$68,278,832</td></tr>
<tr><td>Farm Players Total Salaries</td><td>$497,000</td></tr>
<tr><td>Coaches Total Salaries</td><td>$5,250,000</td></tr>
<tr><td>Luxury Taxe Total</td><td>$0</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>$0</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>$0</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>$0</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>$0</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Estimated Season Revenue</td><td>$0</td></tr>
<tr><td>Pro Remaining Season Days</td><td>0</td></tr>
<tr><td>Pro Expenses Per Days</td><td>$0</td></tr>
<tr><td>Pro Estimated Expenses</td><td>$0</td></tr>
<tr><td>Farm Remaining Season Days</td><td>0</td></tr>
<tr><td>Farm Expenses Per Days</td><td>$0</td></tr>
<tr><td>Farm Estimated Expenses</td><td>$0</td></tr>
<tr><td>Estimated Season Expenses</td><td>$0</td></tr>
<tr><td>Estimated Season Salary Cap</td><td>$0</td></tr>
<tr><td>Estimate Under Maximum Salary Cap of $81,500,000</td><td>$0</td></tr>
<tr><td>Estimate Over Minimum Salary Cap of $58,800,000 </td><td>$0</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>$82,554,906</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>$82,554,906</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Leon Draisaitl</td>
<td>$8,500,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$8,500,000</td></tr>
<tr><td>Oliver Ekman-Larsson</td>
<td>$8,100,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$8,100,000</td></tr>
<tr><td>Nikita Kucherov</td>
<td>$7,750,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$7,750,000</td></tr>
<tr><td>Tuukka Rask</td>
<td>$7,500,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$7,500,000</td></tr>
<tr><td>Jeff Skinner</td>
<td>$6,750,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$6,750,000</td></tr>
<tr><td>Kevin Hayes</td>
<td>$6,200,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$6,200,000</td></tr>
<tr><td>Niklas Hjalmarsson</td>
<td>$4,900,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$4,900,000</td></tr>
<tr><td>Cody Ceci</td>
<td>$3,500,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$3,500,000</td></tr>
<tr><td>Dylan Strome</td>
<td>$3,338,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$3,338,000</td></tr>
<tr><td>Jesper Fast</td>
<td>$2,200,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$2,200,000</td></tr>
<tr><td>Keith Kinkaid</td>
<td>$2,100,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$2,100,000</td></tr>
<tr><td>Carl Gunnarsson</td>
<td>$1,750,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$1,750,000</td></tr>
<tr><td>Thomas Chabot</td>
<td>$1,223,333 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$1,223,333</td></tr>
<tr><td>Nate Thompson</td>
<td>$1,100,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$1,100,000</td></tr>
<tr><td>Oskar Sundqvist</td>
<td>$925,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$925,000</td></tr>
<tr><td>Libor Hajek</td>
<td>$894,166 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$894,166</td></tr>
<tr><td>Ethan Bear</td>
<td>$798,333 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$798,333</td></tr>
<tr><td>Dale Weise</td>
<td>$750,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$750,000</td></tr>
<tr><td>Jay Bouwmeester</td>
<td>$0 (0)</td></tr>
<tr><td>Andrej Sekera</td>
<td>$0 (0)</td></tr>
<tr><td>Mika Zibanejad</td>
<td>$0 (0)</td></tr>
<tr><td>William Nylander</td>
<td>$0 (0)</td></tr>
<tr><td>Slater Koekkoek</td>
<td>$0 (0)</td></tr>
<tr><td>Wayne Simmonds</td>
<td>$0 (0)</td></tr>
<tr><td>Nic Dowd</td>
<td>$0 (0)</td></tr>
<tr><td>Zack Kassian</td>
<td>$0 (0)</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>26</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $68,278,832</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $45,542,499</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $33,442,499</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $8,100,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $68,139,666</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $45,403,333</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $33,303,333</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $8,100,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $68,278,832</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $45,542,499</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $33,442,499</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $8,100,000</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Filip Chytil</td>
<td>$124,417 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$124,417</td></tr>
<tr><td>Christian Fischer</td>
<td>$107,583 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$107,583</td></tr>
<tr><td>Brady Keeper</td>
<td>$92,500 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$92,500</td></tr>
<tr><td>Nico Sturm</td>
<td>$92,500 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$92,500</td></tr>
<tr><td>Tanner Fritz</td>
<td>$80,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$80,000</td></tr>
<tr><td>Antti Suomela</td>
<td>$0 (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Kevin Fiala</td>
<td>$0 (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Tyler Gaudet</td>
<td>$0 (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Patrick Marleau</td>
<td>$0 (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Erik Condra</td>
<td>$0 (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Sheldon Dries</td>
<td>$0 (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Matt Hunwick</td>
<td>$0 (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>12</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $497,000</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $309,417</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $0</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $497,000</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $309,417</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $0</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="TeamFinancePro_NJD"><a id="Devils">Devils</a></h1>
<div class="STHSTeamLink">
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
<tr><td>Pro Players Total Salaries</td><td>$83,934,167</td></tr>
<tr><td>Farm Players Total Salaries</td><td>$531,667</td></tr>
<tr><td>Coaches Total Salaries</td><td>$775,000</td></tr>
<tr><td>Luxury Taxe Total</td><td>$0</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>$0</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>$0</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>$0</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>$0</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Estimated Season Revenue</td><td>$0</td></tr>
<tr><td>Pro Remaining Season Days</td><td>0</td></tr>
<tr><td>Pro Expenses Per Days</td><td>$0</td></tr>
<tr><td>Pro Estimated Expenses</td><td>$0</td></tr>
<tr><td>Farm Remaining Season Days</td><td>0</td></tr>
<tr><td>Farm Expenses Per Days</td><td>$0</td></tr>
<tr><td>Farm Estimated Expenses</td><td>$0</td></tr>
<tr><td>Estimated Season Expenses</td><td>$0</td></tr>
<tr><td>Estimated Season Salary Cap</td><td>$0</td></tr>
<tr><td>Estimate Under Maximum Salary Cap of $81,500,000</td><td>$0</td></tr>
<tr><td>Estimate Over Minimum Salary Cap of $58,800,000 </td><td>$0</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>$69,681,341</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>$69,681,341</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Jonathan Toews</td>
<td>$11,000,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$11,000,000</td></tr>
<tr><td>Ryan Getzlaf</td>
<td>$9,000,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$9,000,000</td></tr>
<tr><td>Patric Hornqvist</td>
<td>$7,000,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$7,000,000</td></tr>
<tr><td>Chris Tanev</td>
<td>$6,500,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$6,500,000</td></tr>
<tr><td>Darnell Nurse</td>
<td>$6,000,000 (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$6,000,000</td></tr>
<tr><td>Robin Lehner</td>
<td>$6,000,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$6,000,000</td></tr>
<tr><td>William Karlsson</td>
<td>$5,850,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$5,850,000</td></tr>
<tr><td>Adam Larsson</td>
<td>$5,000,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$5,000,000</td></tr>
<tr><td>Michael Grabner</td>
<td>$4,850,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$4,850,000</td></tr>
<tr><td>Michal Kempny</td>
<td>$3,500,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$3,500,000</td></tr>
<tr><td>Riley Sheahan</td>
<td>$2,900,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$2,900,000</td></tr>
<tr><td>Martin Hanzal</td>
<td>$2,700,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$2,700,000</td></tr>
<tr><td>Jimmy Vesey</td>
<td>$2,500,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$2,500,000</td></tr>
<tr><td>Christian Folin</td>
<td>$1,750,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$1,750,000</td></tr>
<tr><td>Michael Raffl</td>
<td>$1,650,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$1,650,000</td></tr>
<tr><td>Timo Meier</td>
<td>$1,644,167 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$1,644,167</td></tr>
<tr><td>Markus Nutivaara</td>
<td>$1,000,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$1,000,000</td></tr>
<tr><td>Lucas Carlsson</td>
<td>$925,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$925,000</td></tr>
<tr><td>Niko Mikkola</td>
<td>$925,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$925,000</td></tr>
<tr><td>Gemel Smith</td>
<td>$900,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$900,000</td></tr>
<tr><td>Garret Sparks</td>
<td>$850,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$850,000</td></tr>
<tr><td>Maxime Lajoie</td>
<td>$790,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$790,000</td></tr>
<tr><td>Colby Cave</td>
<td>$700,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$700,000</td></tr>
<tr><td>Matt Moulson</td>
<td>$0 (0)</td></tr>
<tr><td>Patrick Brown</td>
<td>$0 (0)</td></tr>
<tr><td>Nick Ritchie</td>
<td>$0 (0)</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>26</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $83,934,167</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $63,000,000</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $56,700,000</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $22,850,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $83,719,167</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $62,785,000</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $56,485,000</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $22,850,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $83,934,167</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $63,000,000</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $56,700,000</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $22,850,000</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Kirby Dach</td>
<td>$342,500 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$342,500</td></tr>
<tr><td>Anders Bjork</td>
<td>$106,667 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$106,667</td></tr>
<tr><td>Mark Friedman</td>
<td>$82,500 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$82,500</td></tr>
<tr><td>Kyle Criscuolo</td>
<td>$0 (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Anders Nilsson</td>
<td>$0 (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>5</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $531,667</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $425,000</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $0</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $531,667</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $425,000</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $0</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="TeamFinancePro_ANH"><a id="Ducks">Ducks</a></h1>
<div class="STHSTeamLink">
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
<tr><td>Level 1: </td><td>6000 - $148 - 0 - 0.00%</td></tr>
<tr><td>Level 2: </td><td>5000 - $116 - 0 - 0.00%</td></tr>
<tr><td>Level 3: </td><td>4000 - $97 - 0 - 0.00%</td></tr>
<tr><td>Level 4: </td><td>3000 - $64 - 0 - 0.00%</td></tr>
<tr><td>Luxury : </td><td>1000 - $240 - 0 - 0.00%</td></tr>
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
<tr><td>Pro Players Total Salaries</td><td>$81,539,167</td></tr>
<tr><td>Farm Players Total Salaries</td><td>$661,966</td></tr>
<tr><td>Coaches Total Salaries</td><td>$3,000,000</td></tr>
<tr><td>Luxury Taxe Total</td><td>$0</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>$0</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>$0</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>$0</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>$0</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Estimated Season Revenue</td><td>$0</td></tr>
<tr><td>Pro Remaining Season Days</td><td>0</td></tr>
<tr><td>Pro Expenses Per Days</td><td>$0</td></tr>
<tr><td>Pro Estimated Expenses</td><td>$0</td></tr>
<tr><td>Farm Remaining Season Days</td><td>0</td></tr>
<tr><td>Farm Expenses Per Days</td><td>$0</td></tr>
<tr><td>Farm Estimated Expenses</td><td>$0</td></tr>
<tr><td>Estimated Season Expenses</td><td>$0</td></tr>
<tr><td>Estimated Season Salary Cap</td><td>$0</td></tr>
<tr><td>Estimate Under Maximum Salary Cap of $81,500,000</td><td>$0</td></tr>
<tr><td>Estimate Over Minimum Salary Cap of $58,800,000 </td><td>$0</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>$79,760,267</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>$79,760,267</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Jake Muzzin</td>
<td>$8,000,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$8,000,000</td></tr>
<tr><td>Artemi Panarin</td>
<td>$7,500,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$7,500,000</td></tr>
<tr><td>Johnny Gaudreau</td>
<td>$7,250,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$7,250,000</td></tr>
<tr><td>Brayden Schenn</td>
<td>$7,225,000 (6)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$7,225,000</td></tr>
<tr><td>Jake Guentzel</td>
<td>$7,100,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$7,100,000</td></tr>
<tr><td>Sean Monahan</td>
<td>$6,375,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$6,375,000</td></tr>
<tr><td>Josh Morrissey</td>
<td>$6,375,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$6,375,000</td></tr>
<tr><td>Nazem Kadri</td>
<td>$6,100,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$6,100,000</td></tr>
<tr><td>Tyler Bertuzzi</td>
<td>$5,600,000 (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$5,600,000</td></tr>
<tr><td>Morgan Rielly</td>
<td>$5,500,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$5,500,000</td></tr>
<tr><td>Tristan Jarry</td>
<td>$2,900,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$2,900,000</td></tr>
<tr><td>Josh Archibald</td>
<td>$1,600,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$1,600,000</td></tr>
<tr><td>Noah Dobson</td>
<td>$1,431,667 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$1,431,667</td></tr>
<tr><td>Charlie McAvoy</td>
<td>$1,258,333 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$1,258,333</td></tr>
<tr><td>Luke Schenn</td>
<td>$1,150,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$1,150,000</td></tr>
<tr><td>Martin Marincin</td>
<td>$1,050,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$1,050,000</td></tr>
<tr><td>Zach Aston-Reese</td>
<td>$925,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$925,000</td></tr>
<tr><td>Kevin Stenlund</td>
<td>$925,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$925,000</td></tr>
<tr><td>Rasmus Sandin</td>
<td>$894,167 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$894,167</td></tr>
<tr><td>Jordan Kyrou</td>
<td>$880,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$880,000</td></tr>
<tr><td>Kenny Agostino</td>
<td>$750,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$750,000</td></tr>
<tr><td>Joakim Ryan</td>
<td>$750,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$750,000</td></tr>
<tr><td>Justin Williams</td>
<td>$0 (0)</td></tr>
<tr><td>Antti Raanta</td>
<td>$0 (0)</td></tr>
<tr><td>Colin Miller</td>
<td>$0 (0)</td></tr>
<tr><td>Devin Shore</td>
<td>$0 (0)</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>26</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $81,539,167</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $67,405,834</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $46,130,834</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $27,200,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $80,966,669</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $66,833,336</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $45,558,336</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $27,200,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $81,539,167</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $67,405,834</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $46,130,834</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $27,200,000</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Zach Senyshyn</td>
<td>$128,800 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$128,800</td></tr>
<tr><td>Trent Frederic</td>
<td>$113,750 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$113,750</td></tr>
<tr><td>Dillon Dube</td>
<td>$91,083 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$91,083</td></tr>
<tr><td>Morgan Klimchuk</td>
<td>$86,333 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$86,333</td></tr>
<tr><td>Ian Scott</td>
<td>$82,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$82,000</td></tr>
<tr><td>Nathan Gerbe</td>
<td>$80,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$80,000</td></tr>
<tr><td>Warren Foegele</td>
<td>$80,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$80,000</td></tr>
<tr><td>Trevor Moore</td>
<td>$0 (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Emile Poirier</td>
<td>$0 (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>9</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $661,966</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $333,633</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $0</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $661,966</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $333,633</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $0</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="TeamFinancePro_CGY"><a id="Flames">Flames</a></h1>
<div class="STHSTeamLink">
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
<tr><td>Level 1: </td><td>6000 - $169 - 0 - 0.00%</td></tr>
<tr><td>Level 2: </td><td>5000 - $127 - 0 - 0.00%</td></tr>
<tr><td>Level 3: </td><td>4000 - $81 - 0 - 0.00%</td></tr>
<tr><td>Level 4: </td><td>3000 - $50 - 0 - 0.00%</td></tr>
<tr><td>Luxury : </td><td>1000 - $220 - 0 - 0.00%</td></tr>
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
<tr><td>Pro Players Total Salaries</td><td>$70,256,250</td></tr>
<tr><td>Farm Players Total Salaries</td><td>$944,333</td></tr>
<tr><td>Coaches Total Salaries</td><td>$5,700,000</td></tr>
<tr><td>Luxury Taxe Total</td><td>$0</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>$0</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>$0</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>$0</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>$0</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Estimated Season Revenue</td><td>$0</td></tr>
<tr><td>Pro Remaining Season Days</td><td>0</td></tr>
<tr><td>Pro Expenses Per Days</td><td>$0</td></tr>
<tr><td>Pro Estimated Expenses</td><td>$0</td></tr>
<tr><td>Farm Remaining Season Days</td><td>0</td></tr>
<tr><td>Farm Expenses Per Days</td><td>$0</td></tr>
<tr><td>Farm Estimated Expenses</td><td>$0</td></tr>
<tr><td>Estimated Season Expenses</td><td>$0</td></tr>
<tr><td>Estimated Season Salary Cap</td><td>$0</td></tr>
<tr><td>Estimate Under Maximum Salary Cap of $81,500,000</td><td>$0</td></tr>
<tr><td>Estimate Over Minimum Salary Cap of $58,800,000 </td><td>$0</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>$53,369,923</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>$53,369,923</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Erik Karlsson</td>
<td>$9,200,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$9,200,000</td></tr>
<tr><td>Ben Bishop</td>
<td>$9,000,000 (6)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$9,000,000</td></tr>
<tr><td>Taylor Hall</td>
<td>$8,750,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$8,750,000</td></tr>
<tr><td>Dylan Larkin</td>
<td>$6,100,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$6,100,000</td></tr>
<tr><td>Bo Horvat</td>
<td>$5,500,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$5,500,000</td></tr>
<tr><td>Jaccob Slavin</td>
<td>$5,000,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$5,000,000</td></tr>
<tr><td>David Perron</td>
<td>$4,500,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$4,500,000</td></tr>
<tr><td>Roman Polak</td>
<td>$4,250,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$4,250,000</td></tr>
<tr><td>Phillip Danault</td>
<td>$3,300,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$3,300,000</td></tr>
<tr><td>Adam Lowry</td>
<td>$2,900,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$2,900,000</td></tr>
<tr><td>Tom Wilson</td>
<td>$2,500,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$2,500,000</td></tr>
<tr><td>Austin Watson</td>
<td>$1,650,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$1,650,000</td></tr>
<tr><td>Markus Granlund</td>
<td>$1,475,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$1,475,000</td></tr>
<tr><td>Alex Stalock</td>
<td>$1,250,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$1,250,000</td></tr>
<tr><td>Casey DeSmith</td>
<td>$1,150,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$1,150,000</td></tr>
<tr><td>Devon Toews</td>
<td>$1,031,250 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$1,031,250</td></tr>
<tr><td>Rasmus Asplund</td>
<td>$925,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$925,000</td></tr>
<tr><td>Kevin Labanc</td>
<td>$925,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$925,000</td></tr>
<tr><td>Jonathon Merrill</td>
<td>$850,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$850,000</td></tr>
<tr><td>Pekka Rinne</td>
<td>$0 (0)</td></tr>
<tr><td>Garnet Hathaway</td>
<td>$0 (0)</td></tr>
<tr><td>Andre Burakovsky</td>
<td>$0 (0)</td></tr>
<tr><td>Radko Gudas</td>
<td>$0 (0)</td></tr>
<tr><td>Brady Skjei</td>
<td>$0 (0)</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>24</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $70,256,250</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $46,156,250</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $26,425,000</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $17,750,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $70,176,250</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $46,076,250</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $26,345,000</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $17,750,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $70,256,250</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $46,156,250</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $26,425,000</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $17,750,000</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Samuel Morin</td>
<td>$136,333 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$136,333</td></tr>
<tr><td>Jack Roslovic</td>
<td>$110,667 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$110,667</td></tr>
<tr><td>Christoffer Ehn</td>
<td>$92,500 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$92,500</td></tr>
<tr><td>Vinni Lettieri</td>
<td>$92,500 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$92,500</td></tr>
<tr><td>Taro Hirose</td>
<td>$92,500 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$92,500</td></tr>
<tr><td>Oscar Dansk</td>
<td>$92,500 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$92,500</td></tr>
<tr><td>Blake Hillman</td>
<td>$92,500 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$92,500</td></tr>
<tr><td>Matthew Highmore</td>
<td>$92,500 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$92,500</td></tr>
<tr><td>Tyrell Goulbourne</td>
<td>$77,333 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$77,333</td></tr>
<tr><td>Brad Malone</td>
<td>$65,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$65,000</td></tr>
<tr><td>Steven Santini</td>
<td>$0 (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Kyle Rau</td>
<td>$0 (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>12</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $944,333</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $371,166</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $0</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $944,333</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $371,166</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $0</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="TeamFinancePro_PHL"><a id="Flyers">Flyers</a></h1>
<div class="STHSTeamLink">
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
<tr><td>Level 1: </td><td>6000 - $225 - 0 - 0.00%</td></tr>
<tr><td>Level 2: </td><td>5000 - $165 - 0 - 0.00%</td></tr>
<tr><td>Level 3: </td><td>4000 - $125 - 0 - 0.00%</td></tr>
<tr><td>Level 4: </td><td>3000 - $25 - 0 - 0.00%</td></tr>
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
<tr><td>Pro Players Total Salaries</td><td>$81,007,499</td></tr>
<tr><td>Farm Players Total Salaries</td><td>$754,500</td></tr>
<tr><td>Coaches Total Salaries</td><td>$3,725,000</td></tr>
<tr><td>Luxury Taxe Total</td><td>$0</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>$0</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>$0</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>$0</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>$0</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Estimated Season Revenue</td><td>$0</td></tr>
<tr><td>Pro Remaining Season Days</td><td>0</td></tr>
<tr><td>Pro Expenses Per Days</td><td>$0</td></tr>
<tr><td>Pro Estimated Expenses</td><td>$0</td></tr>
<tr><td>Farm Remaining Season Days</td><td>0</td></tr>
<tr><td>Farm Expenses Per Days</td><td>$0</td></tr>
<tr><td>Farm Estimated Expenses</td><td>$0</td></tr>
<tr><td>Estimated Season Expenses</td><td>$0</td></tr>
<tr><td>Estimated Season Salary Cap</td><td>$0</td></tr>
<tr><td>Estimate Under Maximum Salary Cap of $81,500,000</td><td>$0</td></tr>
<tr><td>Estimate Over Minimum Salary Cap of $58,800,000 </td><td>$0</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>$7,298,255</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>$7,298,255</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Ryan Strome</td>
<td>$7,000,000 (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$7,000,000</td></tr>
<tr><td>Alexander Edler</td>
<td>$7,000,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$7,000,000</td></tr>
<tr><td>Keith Yandle</td>
<td>$6,350,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$6,350,000</td></tr>
<tr><td>Brock Nelson</td>
<td>$6,000,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$6,000,000</td></tr>
<tr><td>Cam Atkinson</td>
<td>$5,900,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$5,900,000</td></tr>
<tr><td>Brandon Saad</td>
<td>$5,500,000 (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$5,500,000</td></tr>
<tr><td>Mikko Koskinen</td>
<td>$4,500,000 (6)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$4,500,000</td></tr>
<tr><td>Jaroslav Halak</td>
<td>$4,500,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$4,500,000</td></tr>
<tr><td>Jonas Brodin</td>
<td>$4,200,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$4,200,000</td></tr>
<tr><td>Brian Dumoulin</td>
<td>$4,200,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$4,200,000</td></tr>
<tr><td>Rasmus Dahlin</td>
<td>$3,775,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$3,775,000</td></tr>
<tr><td>Pierre-Luc Dubois</td>
<td>$3,394,166 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$3,394,166</td></tr>
<tr><td>Brett Connolly</td>
<td>$3,000,000 (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$3,000,000</td></tr>
<tr><td>Jonathan Ericsson</td>
<td>$3,000,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$3,000,000</td></tr>
<tr><td>Mark Pysyk</td>
<td>$3,000,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$3,000,000</td></tr>
<tr><td>Joel Eriksson Ek</td>
<td>$3,000,000 (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$3,000,000</td></tr>
<tr><td>Filip Zadina</td>
<td>$1,775,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$1,775,000</td></tr>
<tr><td>Emil Bemstrom</td>
<td>$1,633,333 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$1,633,333</td></tr>
<tr><td>Andrew Peeke</td>
<td>$1,491,667 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$1,491,667</td></tr>
<tr><td>Max Comtois</td>
<td>$925,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$925,000</td></tr>
<tr><td>Yakov Trenin</td>
<td>$863,333 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$863,333</td></tr>
<tr><td>Josh Leivo</td>
<td>$0 (0)</td></tr>
<tr><td>Viktor Arvidsson</td>
<td>$0 (0)</td></tr>
<tr><td>Tyler Ennis</td>
<td>$0 (0)</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>24</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $81,007,499</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $68,913,333</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $51,113,333</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $29,000,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $78,719,171</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $66,625,005</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $48,930,002</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $29,000,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $81,007,499</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $68,913,333</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $51,113,333</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $29,000,000</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Brian Gibbons</td>
<td>$300,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$300,000</td></tr>
<tr><td>Kailer Yamamoto</td>
<td>$112,417 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$112,417</td></tr>
<tr><td>Justin Kloos</td>
<td>$97,500 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$97,500</td></tr>
<tr><td>Alex Broadhurst</td>
<td>$85,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$85,000</td></tr>
<tr><td>Cameron Gaunce</td>
<td>$84,583 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$84,583</td></tr>
<tr><td>Dillon Simpson</td>
<td>$75,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$75,000</td></tr>
<tr><td>Ryan Miller</td>
<td>$0 (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>7</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $754,500</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $112,417</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $0</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $754,500</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $112,417</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $0</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="TeamFinancePro_VGK"><a id="GoldenKnights">Golden Knights</a></h1>
<div class="STHSTeamLink">
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
<tr><td>Level 1: </td><td>6000 - $174 - 0 - 0.00%</td></tr>
<tr><td>Level 2: </td><td>5000 - $127 - 0 - 0.00%</td></tr>
<tr><td>Level 3: </td><td>4000 - $100 - 0 - 0.00%</td></tr>
<tr><td>Level 4: </td><td>3000 - $75 - 0 - 0.00%</td></tr>
<tr><td>Luxury : </td><td>1000 - $264 - 0 - 0.00%</td></tr>
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
<tr><td>Pro Players Total Salaries</td><td>$63,654,165</td></tr>
<tr><td>Farm Players Total Salaries</td><td>$667,417</td></tr>
<tr><td>Coaches Total Salaries</td><td>$3,600,000</td></tr>
<tr><td>Luxury Taxe Total</td><td>$0</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>$0</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>$0</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>$0</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>$0</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Estimated Season Revenue</td><td>$0</td></tr>
<tr><td>Pro Remaining Season Days</td><td>0</td></tr>
<tr><td>Pro Expenses Per Days</td><td>$0</td></tr>
<tr><td>Pro Estimated Expenses</td><td>$0</td></tr>
<tr><td>Farm Remaining Season Days</td><td>0</td></tr>
<tr><td>Farm Expenses Per Days</td><td>$0</td></tr>
<tr><td>Farm Estimated Expenses</td><td>$0</td></tr>
<tr><td>Estimated Season Expenses</td><td>$0</td></tr>
<tr><td>Estimated Season Salary Cap</td><td>$0</td></tr>
<tr><td>Estimate Under Maximum Salary Cap of $81,500,000</td><td>$0</td></tr>
<tr><td>Estimate Over Minimum Salary Cap of $58,800,000 </td><td>$0</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>$74,538,035</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>$74,538,035</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Nicklas Backstrom</td>
<td>$9,500,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$9,500,000</td></tr>
<tr><td>Alex Goligoski</td>
<td>$6,500,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$6,500,000</td></tr>
<tr><td>Jordan Eberle</td>
<td>$5,750,000 (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$5,750,000</td></tr>
<tr><td>Nate Schmidt</td>
<td>$5,625,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$5,625,000</td></tr>
<tr><td>Calvin de Haan</td>
<td>$4,550,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$4,550,000</td></tr>
<tr><td>Johnny Boychuk</td>
<td>$4,000,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$4,000,000</td></tr>
<tr><td>Craig Smith</td>
<td>$4,000,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$4,000,000</td></tr>
<tr><td>Nolan Patrick</td>
<td>$3,575,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$3,575,000</td></tr>
<tr><td>Andrei Svechnikov</td>
<td>$3,575,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$3,575,000</td></tr>
<tr><td>Jay Beagle</td>
<td>$3,000,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$3,000,000</td></tr>
<tr><td>Colton Sissons</td>
<td>$2,975,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$2,975,000</td></tr>
<tr><td>Scott Laughton</td>
<td>$2,300,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$2,300,000</td></tr>
<tr><td>Milan Lucic</td>
<td>$2,250,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$2,250,000</td></tr>
<tr><td>Henri Jokiharju</td>
<td>$1,279,166 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$1,279,166</td></tr>
<tr><td>Travis Sanheim</td>
<td>$1,263,333 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$1,263,333</td></tr>
<tr><td>Dryden Hunt</td>
<td>$925,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$925,000</td></tr>
<tr><td>Mackenzie Blackwood</td>
<td>$913,333 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$913,333</td></tr>
<tr><td>Joel Hanley</td>
<td>$900,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$900,000</td></tr>
<tr><td>Drake Batherson</td>
<td>$773,333 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$773,333</td></tr>
<tr><td>Adin Hill</td>
<td>$0 (0)</td></tr>
<tr><td>Jacob de La Rose</td>
<td>$0 (0)</td></tr>
<tr><td>Marcus Sorensen</td>
<td>$0 (0)</td></tr>
<tr><td>Eric Staal</td>
<td>$0 (0)</td></tr>
<tr><td>John Gilmour</td>
<td>$0 (0)</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>24</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $63,654,165</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $41,027,499</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $28,400,000</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $14,350,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $63,654,165</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $41,027,499</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $28,400,000</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $14,350,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $63,654,165</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $41,027,499</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $28,400,000</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $14,350,000</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Lias Andersson</td>
<td>$177,500 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$177,500</td></tr>
<tr><td>Juuso Valimaki</td>
<td>$131,917 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$131,917</td></tr>
<tr><td>Colton White</td>
<td>$93,583 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$93,583</td></tr>
<tr><td>Daniel Brickley</td>
<td>$92,500 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$92,500</td></tr>
<tr><td>Dominic Turgeon</td>
<td>$91,917 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$91,917</td></tr>
<tr><td>Nicholas Baptiste</td>
<td>$80,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$80,000</td></tr>
<tr><td>Jon Gillies</td>
<td>$0 (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>David Warsofsky</td>
<td>$0 (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>8</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $667,417</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $403,000</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $0</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $667,417</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $403,000</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $0</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="TeamFinancePro_CAR"><a id="Hurricanes">Hurricanes</a></h1>
<div class="STHSTeamLink">
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
<tr><td>Level 1: </td><td>6000 - $164 - 0 - 0.00%</td></tr>
<tr><td>Level 2: </td><td>5000 - $122 - 0 - 0.00%</td></tr>
<tr><td>Level 3: </td><td>4000 - $98 - 0 - 0.00%</td></tr>
<tr><td>Level 4: </td><td>3000 - $78 - 0 - 0.00%</td></tr>
<tr><td>Luxury : </td><td>1000 - $210 - 0 - 0.00%</td></tr>
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
<tr><td>Pro Players Total Salaries</td><td>$103,045,830</td></tr>
<tr><td>Farm Players Total Salaries</td><td>$1,089,001</td></tr>
<tr><td>Coaches Total Salaries</td><td>$4,500,000</td></tr>
<tr><td>Luxury Taxe Total</td><td>$0</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>$0</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>$0</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>$0</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>$0</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Estimated Season Revenue</td><td>$0</td></tr>
<tr><td>Pro Remaining Season Days</td><td>0</td></tr>
<tr><td>Pro Expenses Per Days</td><td>$0</td></tr>
<tr><td>Pro Estimated Expenses</td><td>$0</td></tr>
<tr><td>Farm Remaining Season Days</td><td>0</td></tr>
<tr><td>Farm Expenses Per Days</td><td>$0</td></tr>
<tr><td>Farm Estimated Expenses</td><td>$0</td></tr>
<tr><td>Estimated Season Expenses</td><td>$0</td></tr>
<tr><td>Estimated Season Salary Cap</td><td>$0</td></tr>
<tr><td>Estimate Under Maximum Salary Cap of $81,500,000</td><td>$0</td></tr>
<tr><td>Estimate Over Minimum Salary Cap of $58,800,000 </td><td>$0</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>$46,070,906</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>$46,070,906</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Brent Seabrook</td>
<td>$7,750,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$7,750,000</td></tr>
<tr><td>Bobby Ryan</td>
<td>$7,000,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$7,000,000</td></tr>
<tr><td>Evander Kane</td>
<td>$7,000,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$7,000,000</td></tr>
<tr><td>Paul Stastny</td>
<td>$6,500,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$6,500,000</td></tr>
<tr><td>James Neal</td>
<td>$6,500,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$6,500,000</td></tr>
<tr><td>Martin Jones</td>
<td>$6,000,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$6,000,000</td></tr>
<tr><td>Mike Smith</td>
<td>$5,800,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$5,800,000</td></tr>
<tr><td>Ryan Murray</td>
<td>$4,600,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$4,600,000</td></tr>
<tr><td>Mathieu Perreault</td>
<td>$4,500,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$4,500,000</td></tr>
<tr><td>Jakob Chychrun</td>
<td>$3,950,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$3,950,000</td></tr>
<tr><td>Rasmus Andersson</td>
<td>$3,900,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$3,900,000</td></tr>
<tr><td>Jack Hughes</td>
<td>$3,775,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$3,775,000</td></tr>
<tr><td>Andrew Shaw</td>
<td>$3,700,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$3,700,000</td></tr>
<tr><td>Kaapo Kakko</td>
<td>$3,575,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$3,575,000</td></tr>
<tr><td>Alex Chiasson</td>
<td>$3,200,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$3,200,000</td></tr>
<tr><td>Jan Rutta</td>
<td>$2,300,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$2,300,000</td></tr>
<tr><td>Brett Sutter</td>
<td>$2,000,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$2,000,000</td></tr>
<tr><td>Michael Anderson</td>
<td>$1,775,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$1,775,000</td></tr>
<tr><td>Mark Jankowski</td>
<td>$1,700,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$1,700,000</td></tr>
<tr><td>Ryan Hartman</td>
<td>$1,575,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$1,575,000</td></tr>
<tr><td>Oliver Kylington</td>
<td>$1,350,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$1,350,000</td></tr>
<tr><td>Nick Suzuki</td>
<td>$1,325,833 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$1,325,833</td></tr>
<tr><td>Christian Djoos</td>
<td>$1,275,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$1,275,000</td></tr>
<tr><td>Drake Caggiula</td>
<td>$1,250,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$1,250,000</td></tr>
<tr><td>Jordan Schmaltz</td>
<td>$1,208,333 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$1,208,333</td></tr>
<tr><td>German Rubtsov</td>
<td>$1,106,666 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$1,106,666</td></tr>
<tr><td>Pavel Francouz</td>
<td>$1,100,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$1,100,000</td></tr>
<tr><td>Ilya Lyubushkin</td>
<td>$985,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$985,000</td></tr>
<tr><td>Cayden Primeau</td>
<td>$966,666 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$966,666</td></tr>
<tr><td>Rem Pitlick</td>
<td>$925,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$925,000</td></tr>
<tr><td>Alexander Volkov</td>
<td>$925,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$925,000</td></tr>
<tr><td>Boo Nieves</td>
<td>$925,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$925,000</td></tr>
<tr><td>Mitchell Stephens</td>
<td>$919,166 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$919,166</td></tr>
<tr><td>Josh Mahura</td>
<td>$910,833 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$910,833</td></tr>
<tr><td>Riley Stillman</td>
<td>$773,333 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$773,333</td></tr>
<tr><td>Jordan Szwarz</td>
<td>$0 (0)</td></tr>
<tr><td>Phil Kessel</td>
<td>$0 (0)</td></tr>
<tr><td>Mikael Backlund</td>
<td>$0 (0)</td></tr>
<tr><td>Jonathan Bernier</td>
<td>$0 (0)</td></tr>
<tr><td>Pontus Aberg</td>
<td>$0 (0)</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>40</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $103,045,830</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $65,789,164</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $38,868,331</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $10,900,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $95,935,003</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $58,678,337</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $31,757,504</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $10,900,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $103,045,830</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $65,789,164</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $38,868,331</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $10,900,000</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Casey Mittelstadt</td>
<td>$149,167 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$149,167</td></tr>
<tr><td>Dylan Sikura</td>
<td>$138,750 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$138,750</td></tr>
<tr><td>Kevin Boyle</td>
<td>$97,500 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$97,500</td></tr>
<tr><td>Aleksi Saarela</td>
<td>$92,500 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$92,500</td></tr>
<tr><td>Dominik Kahun</td>
<td>$92,500 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$92,500</td></tr>
<tr><td>Filip Hronek</td>
<td>$92,500 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$92,500</td></tr>
<tr><td>Nick Paul</td>
<td>$90,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$90,000</td></tr>
<tr><td>Marcus Pettersson</td>
<td>$89,417 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$89,417</td></tr>
<tr><td>Andy Andreoff</td>
<td>$85,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$85,000</td></tr>
<tr><td>Caleb Jones</td>
<td>$81,500 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$81,500</td></tr>
<tr><td>Christian Jaros</td>
<td>$80,167 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$80,167</td></tr>
<tr><td>Michael Mersch</td>
<td>$0 (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jesse Puljujarvi</td>
<td>$0 (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>13</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $1,089,001</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $420,667</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $97,500</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $0</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $1,089,001</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $420,667</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $97,500</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $0</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="TeamFinancePro_NYI"><a id="Islanders">Islanders</a></h1>
<div class="STHSTeamLink">
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
<br /><br /><table class="STHSTableFullW"><tr><td style="vertical-align: top;width:440px;">
<table class="STHSFinance_TeamTable">
<tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_AreanaCapacity">Arena Capacity - Ticket Price<br />Attendance - %</h3></td></tr>
<tr><td class="STHSW250">Arena Name</td><td class="STHSW200">Barclays Center</td></tr>
<tr><td>Level 1: </td><td>6000 - $211 - 0 - 0.00%</td></tr>
<tr><td>Level 2: </td><td>5000 - $155 - 0 - 0.00%</td></tr>
<tr><td>Level 3: </td><td>4000 - $125 - 0 - 0.00%</td></tr>
<tr><td>Level 4: </td><td>3000 - $100 - 0 - 0.00%</td></tr>
<tr><td>Luxury : </td><td>1000 - $280 - 0 - 0.00%</td></tr>
<tr><td>Total Capacity :</td><td>19000</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Farm Level 1: </td><td>2000 - $19 - 0 - 0.00%</td></tr>
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
<tr><td>Pro Players Total Salaries</td><td>$70,650,832</td></tr>
<tr><td>Farm Players Total Salaries</td><td>$247,583</td></tr>
<tr><td>Coaches Total Salaries</td><td>$900,000</td></tr>
<tr><td>Luxury Taxe Total</td><td>$0</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>$0</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>$0</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>$0</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>$0</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Estimated Season Revenue</td><td>$0</td></tr>
<tr><td>Pro Remaining Season Days</td><td>0</td></tr>
<tr><td>Pro Expenses Per Days</td><td>$0</td></tr>
<tr><td>Pro Estimated Expenses</td><td>$0</td></tr>
<tr><td>Farm Remaining Season Days</td><td>0</td></tr>
<tr><td>Farm Expenses Per Days</td><td>$0</td></tr>
<tr><td>Farm Estimated Expenses</td><td>$0</td></tr>
<tr><td>Estimated Season Expenses</td><td>$0</td></tr>
<tr><td>Estimated Season Salary Cap</td><td>$0</td></tr>
<tr><td>Estimate Under Maximum Salary Cap of $81,500,000</td><td>$0</td></tr>
<tr><td>Estimate Over Minimum Salary Cap of $58,800,000 </td><td>$0</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>$109,701,980</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>$109,701,980</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Steven Stamkos</td>
<td>$9,500,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$9,500,000</td></tr>
<tr><td>Joe Pavelski</td>
<td>$8,600,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$8,600,000</td></tr>
<tr><td>Victor Hedman</td>
<td>$8,000,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$8,000,000</td></tr>
<tr><td>Ryan O'Reilly</td>
<td>$7,750,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$7,750,000</td></tr>
<tr><td>Jakub Voracek</td>
<td>$7,750,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$7,750,000</td></tr>
<tr><td>Ryan Ellis</td>
<td>$6,250,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$6,250,000</td></tr>
<tr><td>Alexander Radulov</td>
<td>$6,250,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$6,250,000</td></tr>
<tr><td>Colton Parayko</td>
<td>$5,300,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$5,300,000</td></tr>
<tr><td>Philipp Grubauer</td>
<td>$3,330,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$3,330,000</td></tr>
<tr><td>Cale Makar</td>
<td>$2,854,166 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$2,854,166</td></tr>
<tr><td>Calle Jarnkrok</td>
<td>$2,250,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$2,250,000</td></tr>
<tr><td>Mathew Barzal</td>
<td>$1,263,333 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$1,263,333</td></tr>
<tr><td>Jordan Binnington</td>
<td>$903,333 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$903,333</td></tr>
<tr><td>Joe Hicketts</td>
<td>$650,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$650,000</td></tr>
<tr><td>Daniel Carr</td>
<td>$0 (0)</td></tr>
<tr><td>Connor Brown</td>
<td>$0 (0)</td></tr>
<tr><td>Ryan Pulock</td>
<td>$0 (0)</td></tr>
<tr><td>Mark Barberio</td>
<td>$0 (0)</td></tr>
<tr><td>Brad Richardson</td>
<td>$0 (0)</td></tr>
<tr><td>Josh Anderson</td>
<td>$0 (0)</td></tr>
<tr><td>Dylan DeMelo</td>
<td>$0 (0)</td></tr>
<tr><td>Scott Harrington</td>
<td>$0 (0)</td></tr>
<tr><td>Matthew Nieto</td>
<td>$0 (0)</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>23</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $70,650,832</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $47,087,499</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $32,604,166</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $14,000,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $68,677,500</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $45,114,167</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $30,630,834</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $14,000,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $70,650,832</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $47,087,499</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $32,604,166</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $14,000,000</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Nikolay Goldobin</td>
<td>$107,583 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$107,583</td></tr>
<tr><td>Chase De Leo</td>
<td>$75,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$75,000</td></tr>
<tr><td>Brandon Halverson</td>
<td>$65,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$65,000</td></tr>
<tr><td>Brett Lernout</td>
<td>$0 (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Alan Quine</td>
<td>$0 (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Taylor Leier</td>
<td>$0 (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Max McCormick</td>
<td>$0 (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Michael Hutchinson</td>
<td>$0 (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>8</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $247,583</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $65,000</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $0</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $247,583</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $65,000</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $0</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="TeamFinancePro_WPG"><a id="Jets">Jets</a></h1>
<div class="STHSTeamLink">
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
<tr><td>Level 1: </td><td>6000 - $130 - 0 - 0.00%</td></tr>
<tr><td>Level 2: </td><td>5000 - $80 - 0 - 0.00%</td></tr>
<tr><td>Level 3: </td><td>4000 - $60 - 0 - 0.00%</td></tr>
<tr><td>Level 4: </td><td>3000 - $50 - 0 - 0.00%</td></tr>
<tr><td>Luxury : </td><td>1000 - $275 - 0 - 0.00%</td></tr>
<tr><td>Total Capacity :</td><td>19000</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Farm Level 1: </td><td>2000 - $33 - 0 - 0.00%</td></tr>
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
<tr><td>Pro Players Total Salaries</td><td>$81,061,664</td></tr>
<tr><td>Farm Players Total Salaries</td><td>$738,583</td></tr>
<tr><td>Coaches Total Salaries</td><td>$1,650,000</td></tr>
<tr><td>Luxury Taxe Total</td><td>$0</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>$0</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>$0</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>$0</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>$0</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Estimated Season Revenue</td><td>$0</td></tr>
<tr><td>Pro Remaining Season Days</td><td>0</td></tr>
<tr><td>Pro Expenses Per Days</td><td>$0</td></tr>
<tr><td>Pro Estimated Expenses</td><td>$0</td></tr>
<tr><td>Farm Remaining Season Days</td><td>0</td></tr>
<tr><td>Farm Expenses Per Days</td><td>$0</td></tr>
<tr><td>Farm Estimated Expenses</td><td>$0</td></tr>
<tr><td>Estimated Season Expenses</td><td>$0</td></tr>
<tr><td>Estimated Season Salary Cap</td><td>$0</td></tr>
<tr><td>Estimate Under Maximum Salary Cap of $81,500,000</td><td>$0</td></tr>
<tr><td>Estimate Over Minimum Salary Cap of $58,800,000 </td><td>$0</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>$26,122,240</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>$26,122,240</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Matthew Tkachuk</td>
<td>$8,800,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$8,800,000</td></tr>
<tr><td>Kevin Shattenkirk</td>
<td>$6,500,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$6,500,000</td></tr>
<tr><td>Derek Stepan</td>
<td>$6,500,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$6,500,000</td></tr>
<tr><td>Jean-Gabriel Pageau</td>
<td>$6,200,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$6,200,000</td></tr>
<tr><td>Sami Vatanen</td>
<td>$6,000,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$6,000,000</td></tr>
<tr><td>Mike Green</td>
<td>$5,375,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$5,375,000</td></tr>
<tr><td>Olli Maatta</td>
<td>$4,085,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$4,085,000</td></tr>
<tr><td>Joonas Donskoi</td>
<td>$3,900,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$3,900,000</td></tr>
<tr><td>Leo Komarov</td>
<td>$3,800,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$3,800,000</td></tr>
<tr><td>Matt Murray</td>
<td>$3,750,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$3,750,000</td></tr>
<tr><td>Jesperi Kotkaniemi</td>
<td>$3,425,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$3,425,000</td></tr>
<tr><td>Miro Heiskanen</td>
<td>$3,394,166 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$3,394,166</td></tr>
<tr><td>Casey Cizikas</td>
<td>$3,300,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$3,300,000</td></tr>
<tr><td>Kasperi Kapanen</td>
<td>$3,200,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$3,200,000</td></tr>
<tr><td>Juuse Saros</td>
<td>$2,500,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$2,500,000</td></tr>
<tr><td>Barclay Goodrow</td>
<td>$1,500,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$1,500,000</td></tr>
<tr><td>Scott Wilson</td>
<td>$1,200,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$1,200,000</td></tr>
<tr><td>Juuso Riikola</td>
<td>$1,000,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$1,000,000</td></tr>
<tr><td>Vitek Vanecek</td>
<td>$1,000,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$1,000,000</td></tr>
<tr><td>Roope Hintz</td>
<td>$925,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$925,000</td></tr>
<tr><td>Eetu Luostarinen</td>
<td>$897,500 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$897,500</td></tr>
<tr><td>Carsen Twarynski</td>
<td>$775,833 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$775,833</td></tr>
<tr><td>David Kase</td>
<td>$768,333 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$768,333</td></tr>
<tr><td>Jansen Harkins</td>
<td>$767,500 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$767,500</td></tr>
<tr><td>Kale Clague</td>
<td>$761,666 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$761,666</td></tr>
<tr><td>Beck Malenstyn</td>
<td>$736,666 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$736,666</td></tr>
<tr><td>Erik Haula</td>
<td>$0 (0)</td></tr>
<tr><td>Markus Hannikainen</td>
<td>$0 (0)</td></tr>
<tr><td>Madison Bowey</td>
<td>$0 (0)</td></tr>
<tr><td>Ben Street</td>
<td>$0 (0)</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>30</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $81,061,664</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $55,351,664</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $32,107,498</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $13,700,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $81,061,665</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $55,351,665</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $32,107,499</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $13,700,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $81,061,664</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $55,351,664</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $32,107,498</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $13,700,000</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Eeli Tolvanen</td>
<td>$311,500 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$311,500</td></tr>
<tr><td>Ryan Lindgren</td>
<td>$110,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$110,000</td></tr>
<tr><td>John Quenneville</td>
<td>$89,417 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$89,417</td></tr>
<tr><td>Guillaume Brisebois</td>
<td>$88,833 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$88,833</td></tr>
<tr><td>Clark Bishop</td>
<td>$71,333 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$71,333</td></tr>
<tr><td>Brian Strait</td>
<td>$67,500 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$67,500</td></tr>
<tr><td>Christopher Gibson</td>
<td>$0 (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Julius Honka</td>
<td>$0 (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Rob O'Gara</td>
<td>$0 (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>9</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $738,583</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $359,583</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $0</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $738,583</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $359,583</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $0</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="TeamFinancePro_LAK"><a id="Kings">Kings</a></h1>
<div class="STHSTeamLink">
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
<tr><td>Pro Players Total Salaries</td><td>$84,855,834</td></tr>
<tr><td>Farm Players Total Salaries</td><td>$345,800</td></tr>
<tr><td>Coaches Total Salaries</td><td>$4,200,000</td></tr>
<tr><td>Luxury Taxe Total</td><td>$0</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>$0</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>$0</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>$0</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>$0</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Estimated Season Revenue</td><td>$0</td></tr>
<tr><td>Pro Remaining Season Days</td><td>0</td></tr>
<tr><td>Pro Expenses Per Days</td><td>$0</td></tr>
<tr><td>Pro Estimated Expenses</td><td>$0</td></tr>
<tr><td>Farm Remaining Season Days</td><td>0</td></tr>
<tr><td>Farm Expenses Per Days</td><td>$0</td></tr>
<tr><td>Farm Estimated Expenses</td><td>$0</td></tr>
<tr><td>Estimated Season Expenses</td><td>$0</td></tr>
<tr><td>Estimated Season Salary Cap</td><td>$0</td></tr>
<tr><td>Estimate Under Maximum Salary Cap of $81,500,000</td><td>$0</td></tr>
<tr><td>Estimate Over Minimum Salary Cap of $58,800,000 </td><td>$0</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>$40,027,231</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>$40,027,231</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Alex Ovechkin</td>
<td>$12,500,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$12,500,000</td></tr>
<tr><td>Nathan MacKinnon</td>
<td>$10,000,000 (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$10,000,000</td></tr>
<tr><td>P.K. Subban</td>
<td>$9,500,000 (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$9,500,000</td></tr>
<tr><td>Mitch Marner</td>
<td>$9,500,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$9,500,000</td></tr>
<tr><td>Seth Jones</td>
<td>$7,500,000 (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$7,500,000</td></tr>
<tr><td>Jonathan Huberdeau</td>
<td>$6,000,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$6,000,000</td></tr>
<tr><td>Devan Dubnyk</td>
<td>$5,500,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$5,500,000</td></tr>
<tr><td>Elias Lindholm</td>
<td>$4,850,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$4,850,000</td></tr>
<tr><td>Travis Hamonic</td>
<td>$4,500,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$4,500,000</td></tr>
<tr><td>Calle Rosen</td>
<td>$1,775,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$1,775,000</td></tr>
<tr><td>Neal Pionk</td>
<td>$1,775,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$1,775,000</td></tr>
<tr><td>Kyle Clifford</td>
<td>$1,500,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$1,500,000</td></tr>
<tr><td>Brock Boeser</td>
<td>$1,491,667 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$1,491,667</td></tr>
<tr><td>Malcolm Subban</td>
<td>$1,400,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$1,400,000</td></tr>
<tr><td>Jordan Greenway</td>
<td>$1,255,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$1,255,000</td></tr>
<tr><td>Miles Wood</td>
<td>$1,250,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$1,250,000</td></tr>
<tr><td>Frederik Gauthier</td>
<td>$1,000,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$1,000,000</td></tr>
<tr><td>Christian Wolanin</td>
<td>$925,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$925,000</td></tr>
<tr><td>Pierre Engvall</td>
<td>$925,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$925,000</td></tr>
<tr><td>Carter Verhaeghe</td>
<td>$894,167 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$894,167</td></tr>
<tr><td>Nicolas Roy</td>
<td>$815,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$815,000</td></tr>
<tr><td>Adam Pelech</td>
<td>$0 (0)</td></tr>
<tr><td>Riley Nash</td>
<td>$0 (0)</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>23</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $84,855,834</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $75,664,167</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $62,590,000</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $27,000,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $84,760,834</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $75,569,167</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $62,495,000</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $27,000,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $84,855,834</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $75,664,167</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $62,590,000</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $27,000,000</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Andreas Borgman</td>
<td>$177,500 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$177,500</td></tr>
<tr><td>Antoine Bibeau</td>
<td>$92,500 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$92,500</td></tr>
<tr><td>Mason Appleton</td>
<td>$75,800 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$75,800</td></tr>
<tr><td>Ron Hainsey</td>
<td>$0 (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>4</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $345,800</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $92,500</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $0</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $253,300</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $0</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="TeamFinancePro_TBL"><a id="Lightning">Lightning</a></h1>
<div class="STHSTeamLink">
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
<tr><td>Level 1: </td><td>6000 - $159 - 0 - 0.00%</td></tr>
<tr><td>Level 2: </td><td>5000 - $93 - 0 - 0.00%</td></tr>
<tr><td>Level 3: </td><td>4000 - $70 - 0 - 0.00%</td></tr>
<tr><td>Level 4: </td><td>3000 - $59 - 0 - 0.00%</td></tr>
<tr><td>Luxury : </td><td>1000 - $246 - 0 - 0.00%</td></tr>
<tr><td>Total Capacity :</td><td>19000</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Farm Level 1: </td><td>2000 - $30 - 0 - 0.00%</td></tr>
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
<tr><td>Pro Players Total Salaries</td><td>$72,873,333</td></tr>
<tr><td>Farm Players Total Salaries</td><td>$505,000</td></tr>
<tr><td>Coaches Total Salaries</td><td>$0</td></tr>
<tr><td>Luxury Taxe Total</td><td>$0</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>$0</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>$0</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>$0</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>$0</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Estimated Season Revenue</td><td>$0</td></tr>
<tr><td>Pro Remaining Season Days</td><td>0</td></tr>
<tr><td>Pro Expenses Per Days</td><td>$0</td></tr>
<tr><td>Pro Estimated Expenses</td><td>$0</td></tr>
<tr><td>Farm Remaining Season Days</td><td>0</td></tr>
<tr><td>Farm Expenses Per Days</td><td>$0</td></tr>
<tr><td>Farm Estimated Expenses</td><td>$0</td></tr>
<tr><td>Estimated Season Expenses</td><td>$0</td></tr>
<tr><td>Estimated Season Salary Cap</td><td>$0</td></tr>
<tr><td>Estimate Under Maximum Salary Cap of $81,500,000</td><td>$0</td></tr>
<tr><td>Estimate Over Minimum Salary Cap of $58,800,000 </td><td>$0</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>$9,409,783</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>$9,409,783</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>John Tavares</td>
<td>$11,000,000 (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$11,000,000</td></tr>
<tr><td>Mike Hoffman</td>
<td>$5,750,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$5,750,000</td></tr>
<tr><td>Ondrej Palat</td>
<td>$5,750,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$5,750,000</td></tr>
<tr><td>Esa Lindell</td>
<td>$5,200,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$5,200,000</td></tr>
<tr><td>Brendan Gallagher</td>
<td>$5,100,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$5,100,000</td></tr>
<tr><td>Zach Bogosian</td>
<td>$5,060,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$5,060,000</td></tr>
<tr><td>Kris Russell</td>
<td>$5,000,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$5,000,000</td></tr>
<tr><td>John Klingberg</td>
<td>$4,500,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$4,500,000</td></tr>
<tr><td>Brandon Sutter</td>
<td>$4,125,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$4,125,000</td></tr>
<tr><td>Tanner Pearson</td>
<td>$4,000,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$4,000,000</td></tr>
<tr><td>Luca Sbisa</td>
<td>$3,750,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$3,750,000</td></tr>
<tr><td>Brian Elliott</td>
<td>$3,250,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$3,250,000</td></tr>
<tr><td>Derick Brassard</td>
<td>$3,250,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$3,250,000</td></tr>
<tr><td>Zack Smith</td>
<td>$2,750,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$2,750,000</td></tr>
<tr><td>Matt Martin</td>
<td>$2,000,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$2,000,000</td></tr>
<tr><td>Tyler Motte</td>
<td>$1,500,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$1,500,000</td></tr>
<tr><td>Vince Dunn</td>
<td>$888,333 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$888,333</td></tr>
<tr><td>Tyler Pitlick</td>
<td>$0 (0)</td></tr>
<tr><td>Connor Hellebuyck</td>
<td>$0 (0)</td></tr>
<tr><td>Marco Scandella</td>
<td>$0 (0)</td></tr>
<tr><td>Andrew Cogliano</td>
<td>$0 (0)</td></tr>
<tr><td>Joe Thornton</td>
<td>$0 (0)</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>22</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $72,873,333</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $54,300,000</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $30,300,000</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $24,550,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $72,873,333</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $54,300,000</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $30,300,000</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $24,550,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $72,873,333</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $54,300,000</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $30,300,000</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $24,550,000</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Lawrence Pilut</td>
<td>$92,500 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$92,500</td></tr>
<tr><td>Matt Tomkins</td>
<td>$92,500 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$92,500</td></tr>
<tr><td>Miikka Salomaki</td>
<td>$90,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$90,000</td></tr>
<tr><td>Seth Helgeson</td>
<td>$90,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$90,000</td></tr>
<tr><td>Josh Teves</td>
<td>$70,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$70,000</td></tr>
<tr><td>Francois Brassard</td>
<td>$70,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$70,000</td></tr>
<tr><td>Liam O'Brien</td>
<td>$0 (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Tom Kuhnhackl</td>
<td>$0 (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Radim Simek</td>
<td>$0 (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>9</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $505,000</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $0</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $505,000</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $0</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="TeamFinancePro_TOR"><a id="MapleLeafs">Maple Leafs</a></h1>
<div class="STHSTeamLink">
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
<tr><td>Pro Players Total Salaries</td><td>$73,651,332</td></tr>
<tr><td>Farm Players Total Salaries</td><td>$418,582</td></tr>
<tr><td>Coaches Total Salaries</td><td>$5,750,000</td></tr>
<tr><td>Luxury Taxe Total</td><td>$0</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>$0</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>$0</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>$0</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>$0</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Estimated Season Revenue</td><td>$0</td></tr>
<tr><td>Pro Remaining Season Days</td><td>0</td></tr>
<tr><td>Pro Expenses Per Days</td><td>$0</td></tr>
<tr><td>Pro Estimated Expenses</td><td>$0</td></tr>
<tr><td>Farm Remaining Season Days</td><td>0</td></tr>
<tr><td>Farm Expenses Per Days</td><td>$0</td></tr>
<tr><td>Farm Estimated Expenses</td><td>$0</td></tr>
<tr><td>Estimated Season Expenses</td><td>$0</td></tr>
<tr><td>Estimated Season Salary Cap</td><td>$0</td></tr>
<tr><td>Estimate Under Maximum Salary Cap of $81,500,000</td><td>$0</td></tr>
<tr><td>Estimate Over Minimum Salary Cap of $58,800,000 </td><td>$0</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>$157,830,928</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>$157,830,928</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Alex Pietrangelo</td>
<td>$8,250,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$8,250,000</td></tr>
<tr><td>David Krejci</td>
<td>$6,750,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$6,750,000</td></tr>
<tr><td>Jaden Schwartz</td>
<td>$5,600,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$5,600,000</td></tr>
<tr><td>Tomas Hertl</td>
<td>$5,500,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$5,500,000</td></tr>
<tr><td>Mike Matheson</td>
<td>$5,200,000 (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$5,200,000</td></tr>
<tr><td>Shea Theodore</td>
<td>$5,200,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$5,200,000</td></tr>
<tr><td>Frederik Andersen</td>
<td>$5,000,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$5,000,000</td></tr>
<tr><td>Christian Dvorak</td>
<td>$4,000,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$4,000,000</td></tr>
<tr><td>James Reimer</td>
<td>$3,500,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$3,500,000</td></tr>
<tr><td>Brenden Dillon</td>
<td>$3,270,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$3,270,000</td></tr>
<tr><td>Patrik Nemeth</td>
<td>$3,000,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$3,000,000</td></tr>
<tr><td>Frank Vatrano</td>
<td>$2,533,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$2,533,000</td></tr>
<tr><td>Radek Faksa</td>
<td>$2,500,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$2,500,000</td></tr>
<tr><td>Mark Borowiecki</td>
<td>$1,850,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$1,850,000</td></tr>
<tr><td>Cody Glass</td>
<td>$1,713,333 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$1,713,333</td></tr>
<tr><td>Noel Acciari</td>
<td>$1,666,667 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$1,666,667</td></tr>
<tr><td>Sean Kuraly</td>
<td>$1,650,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$1,650,000</td></tr>
<tr><td>Troy Terry</td>
<td>$1,491,666 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$1,491,666</td></tr>
<tr><td>Tomas Nosek</td>
<td>$1,250,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$1,250,000</td></tr>
<tr><td>Brett Howden</td>
<td>$863,333 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$863,333</td></tr>
<tr><td>Nic Hague</td>
<td>$863,333 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$863,333</td></tr>
<tr><td>Jared Coreau</td>
<td>$700,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$700,000</td></tr>
<tr><td>Ryan Stanton</td>
<td>$650,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$650,000</td></tr>
<tr><td>Cody Goloubef</td>
<td>$650,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$650,000</td></tr>
<tr><td>Lukas Radil</td>
<td>$0 (0)</td></tr>
<tr><td>Sam Bennett</td>
<td>$0 (0)</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>26</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $73,651,332</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $43,381,332</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $25,376,666</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $14,550,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $72,760,501</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $42,490,501</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $24,485,835</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $14,550,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $73,651,332</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $43,381,332</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $25,376,666</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $14,550,000</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Jeremy Bracco</td>
<td>$92,500 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$92,500</td></tr>
<tr><td>Dylan Wells</td>
<td>$91,083 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$91,083</td></tr>
<tr><td>Travis Dermott</td>
<td>$86,333 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$86,333</td></tr>
<tr><td>Spencer Smallman</td>
<td>$75,833 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$75,833</td></tr>
<tr><td>Steven Lorentz</td>
<td>$72,833 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$72,833</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>5</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $418,582</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $332,249</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $0</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $418,582</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $332,249</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $0</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="TeamFinancePro_EDM"><a id="Oilers">Oilers</a></h1>
<div class="STHSTeamLink">
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
<tr><td>Level 1: </td><td>6000 - $172 - 0 - 0.00%</td></tr>
<tr><td>Level 2: </td><td>5000 - $130 - 0 - 0.00%</td></tr>
<tr><td>Level 3: </td><td>4000 - $105 - 0 - 0.00%</td></tr>
<tr><td>Level 4: </td><td>3000 - $79 - 0 - 0.00%</td></tr>
<tr><td>Luxury : </td><td>1000 - $267 - 0 - 0.00%</td></tr>
<tr><td>Total Capacity :</td><td>19000</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Farm Level 1: </td><td>2000 - $70 - 0 - 0.00%</td></tr>
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
<tr><td>Pro Players Total Salaries</td><td>$91,793,725</td></tr>
<tr><td>Farm Players Total Salaries</td><td>$827,168</td></tr>
<tr><td>Coaches Total Salaries</td><td>$2,000,000</td></tr>
<tr><td>Luxury Taxe Total</td><td>$0</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>$0</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>$0</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>$0</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>$0</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Estimated Season Revenue</td><td>$0</td></tr>
<tr><td>Pro Remaining Season Days</td><td>0</td></tr>
<tr><td>Pro Expenses Per Days</td><td>$0</td></tr>
<tr><td>Pro Estimated Expenses</td><td>$0</td></tr>
<tr><td>Farm Remaining Season Days</td><td>0</td></tr>
<tr><td>Farm Expenses Per Days</td><td>$0</td></tr>
<tr><td>Farm Estimated Expenses</td><td>$0</td></tr>
<tr><td>Estimated Season Expenses</td><td>$0</td></tr>
<tr><td>Estimated Season Salary Cap</td><td>$0</td></tr>
<tr><td>Estimate Under Maximum Salary Cap of $81,500,000</td><td>$0</td></tr>
<tr><td>Estimate Over Minimum Salary Cap of $58,800,000 </td><td>$0</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>$131,348,577</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>$131,348,577</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Blake Wheeler</td>
<td>$8,500,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$8,500,000</td></tr>
<tr><td>Ryan Nugent-Hopkins</td>
<td>$7,250,000 (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$7,250,000</td></tr>
<tr><td>Dustin Brown</td>
<td>$6,500,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$6,500,000</td></tr>
<tr><td>Ilya Kovalchuk</td>
<td>$6,250,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$6,250,000</td></tr>
<tr><td>Jeff Petry</td>
<td>$6,000,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$6,000,000</td></tr>
<tr><td>John Gibson</td>
<td>$6,000,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$6,000,000</td></tr>
<tr><td>Jake Gardiner</td>
<td>$5,000,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$5,000,000</td></tr>
<tr><td>Mikael Granlund</td>
<td>$5,000,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$5,000,000</td></tr>
<tr><td>Mattias Ekholm</td>
<td>$5,000,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$5,000,000</td></tr>
<tr><td>Nick Schmaltz</td>
<td>$4,250,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$4,250,000</td></tr>
<tr><td>Noah Hanifin</td>
<td>$4,000,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$4,000,000</td></tr>
<tr><td>Lars Eller</td>
<td>$4,000,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$4,000,000</td></tr>
<tr><td>John Moore</td>
<td>$2,850,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$2,850,000</td></tr>
<tr><td>Jamie Oleksiak</td>
<td>$2,500,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$2,500,000</td></tr>
<tr><td>Trevor van Riemsdyk</td>
<td>$2,300,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$2,300,000</td></tr>
<tr><td>Marcus Foligno</td>
<td>$2,250,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$2,250,000</td></tr>
<tr><td>Elvis Merzlikins</td>
<td>$1,844,559 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$1,844,559</td></tr>
<tr><td>Luke Glendening</td>
<td>$1,800,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$1,800,000</td></tr>
<tr><td>Luke Kunin</td>
<td>$1,425,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$1,425,000</td></tr>
<tr><td>Ryan Graves</td>
<td>$1,000,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$1,000,000</td></tr>
<tr><td>Eric Robinson</td>
<td>$975,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$975,000</td></tr>
<tr><td>Anthony Cirelli</td>
<td>$935,833 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$935,833</td></tr>
<tr><td>Rhett Gardner</td>
<td>$925,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$925,000</td></tr>
<tr><td>Joey Anderson</td>
<td>$925,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$925,000</td></tr>
<tr><td>Brandon Montour</td>
<td>$925,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$925,000</td></tr>
<tr><td>Dominic Toninato</td>
<td>$925,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$925,000</td></tr>
<tr><td>Givani Smith</td>
<td>$913,333 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$913,333</td></tr>
<tr><td>Anthony Bitetto</td>
<td>$800,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$800,000</td></tr>
<tr><td>Jarred Tinordi</td>
<td>$750,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$750,000</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>29</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $91,793,725</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $68,407,892</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $37,938,333</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $24,250,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $90,823,291</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $67,437,458</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $37,938,333</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $24,250,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $91,793,725</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $68,407,892</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $37,938,333</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $24,250,000</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Adam Gaudette</td>
<td>$149,167 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$149,167</td></tr>
<tr><td>Zach Whitecloud</td>
<td>$149,167 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$149,167</td></tr>
<tr><td>Adam Johnson</td>
<td>$92,500 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$92,500</td></tr>
<tr><td>Ryan Kuffner</td>
<td>$92,500 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$92,500</td></tr>
<tr><td>Dennis Gilbert</td>
<td>$92,500 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$92,500</td></tr>
<tr><td>Mitch Reinke</td>
<td>$92,500 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$92,500</td></tr>
<tr><td>Jeremy Lauzon</td>
<td>$87,167 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$87,167</td></tr>
<tr><td>Kaden Fulcher</td>
<td>$71,667 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$71,667</td></tr>
<tr><td>Scott Wedgewood</td>
<td>$0 (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Zane McIntyre</td>
<td>$0 (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>10</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $827,168</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $400,501</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $0</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $827,168</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $400,501</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $0</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="TeamFinancePro_FLA"><a id="Panthers">Panthers</a></h1>
<div class="STHSTeamLink">
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
<tr><td>Level 1: </td><td>6000 - $140 - 0 - 0.00%</td></tr>
<tr><td>Level 2: </td><td>5000 - $115 - 0 - 0.00%</td></tr>
<tr><td>Level 3: </td><td>4000 - $85 - 0 - 0.00%</td></tr>
<tr><td>Level 4: </td><td>3000 - $65 - 0 - 0.00%</td></tr>
<tr><td>Luxury : </td><td>1000 - $300 - 0 - 0.00%</td></tr>
<tr><td>Total Capacity :</td><td>19000</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Farm Level 1: </td><td>2000 - $45 - 0 - 0.00%</td></tr>
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
<tr><td>Pro Players Total Salaries</td><td>$60,988,666</td></tr>
<tr><td>Farm Players Total Salaries</td><td>$688,933</td></tr>
<tr><td>Coaches Total Salaries</td><td>$4,450,000</td></tr>
<tr><td>Luxury Taxe Total</td><td>$0</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>$0</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>$0</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>$0</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>$0</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Estimated Season Revenue</td><td>$0</td></tr>
<tr><td>Pro Remaining Season Days</td><td>0</td></tr>
<tr><td>Pro Expenses Per Days</td><td>$0</td></tr>
<tr><td>Pro Estimated Expenses</td><td>$0</td></tr>
<tr><td>Farm Remaining Season Days</td><td>0</td></tr>
<tr><td>Farm Expenses Per Days</td><td>$0</td></tr>
<tr><td>Farm Estimated Expenses</td><td>$0</td></tr>
<tr><td>Estimated Season Expenses</td><td>$0</td></tr>
<tr><td>Estimated Season Salary Cap</td><td>$0</td></tr>
<tr><td>Estimate Under Maximum Salary Cap of $81,500,000</td><td>$0</td></tr>
<tr><td>Estimate Over Minimum Salary Cap of $58,800,000 </td><td>$0</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>$60,807,201</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>$60,807,201</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Brent Burns</td>
<td>$9,000,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$9,000,000</td></tr>
<tr><td>Tyler Bozak</td>
<td>$6,000,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$6,000,000</td></tr>
<tr><td>Josh Bailey</td>
<td>$6,000,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$6,000,000</td></tr>
<tr><td>Carl Soderberg</td>
<td>$5,250,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$5,250,000</td></tr>
<tr><td>Marcus Johansson</td>
<td>$5,000,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$5,000,000</td></tr>
<tr><td>Justin Schultz</td>
<td>$4,800,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$4,800,000</td></tr>
<tr><td>Damon Severson</td>
<td>$4,200,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$4,200,000</td></tr>
<tr><td>Darren Helm</td>
<td>$3,750,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$3,750,000</td></tr>
<tr><td>Anton Khudobin</td>
<td>$3,000,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$3,000,000</td></tr>
<tr><td>Nathan Beaulieu</td>
<td>$2,250,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$2,250,000</td></tr>
<tr><td>Alexander Nylander</td>
<td>$1,775,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$1,775,000</td></tr>
<tr><td>Martin Necas</td>
<td>$1,462,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$1,462,000</td></tr>
<tr><td>Xavier Ouellet</td>
<td>$1,400,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$1,400,000</td></tr>
<tr><td>Erik Brannstrom</td>
<td>$1,375,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$1,375,000</td></tr>
<tr><td>Jake Debrusk</td>
<td>$1,288,333 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$1,288,333</td></tr>
<tr><td>Paul Carey</td>
<td>$1,200,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$1,200,000</td></tr>
<tr><td>Carl Dahlstrom</td>
<td>$925,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$925,000</td></tr>
<tr><td>Jake Oettinger</td>
<td>$925,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$925,000</td></tr>
<tr><td>Max Jones</td>
<td>$863,333 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$863,333</td></tr>
<tr><td>Danny O'Regan</td>
<td>$525,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$525,000</td></tr>
<tr><td>Buddy Robinson</td>
<td>$0 (0)</td></tr>
<tr><td>Max Domi</td>
<td>$0 (0)</td></tr>
<tr><td>David Rittich</td>
<td>$0 (0)</td></tr>
<tr><td>Michael Stone</td>
<td>$0 (0)</td></tr>
<tr><td>Lawson Crouse</td>
<td>$0 (0)</td></tr>
<tr><td>Curtis Lazar</td>
<td>$0 (0)</td></tr>
<tr><td>Tyler Seguin</td>
<td>$0 (0)</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>27</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $60,988,666</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $47,650,333</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $23,362,000</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $6,000,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $59,939,998</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $46,601,665</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $22,313,332</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $6,000,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $60,988,666</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $47,650,333</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $23,362,000</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $6,000,000</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Michael Dal Colle</td>
<td>$306,333 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$306,333</td></tr>
<tr><td>Michael McCarron</td>
<td>$107,600 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$107,600</td></tr>
<tr><td>Cooper Marody</td>
<td>$100,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$100,000</td></tr>
<tr><td>Collin Delia</td>
<td>$95,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$95,000</td></tr>
<tr><td>Alexandre Carrier</td>
<td>$80,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$80,000</td></tr>
<tr><td>Garrett Wilson</td>
<td>$0 (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Tyler Wotherspoon</td>
<td>$0 (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Brendan Guhle</td>
<td>$0 (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Luke Johnson</td>
<td>$0 (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Andy Welinski</td>
<td>$0 (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Derrick Pouliot</td>
<td>$0 (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>C.J. Smith</td>
<td>$0 (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>12</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $688,933</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $406,333</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $0</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $688,933</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $406,333</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $0</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="TeamFinancePro_PIT"><a id="Penguins">Penguins</a></h1>
<div class="STHSTeamLink">
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
<tr><td>Pro Players Total Salaries</td><td>$55,025,166</td></tr>
<tr><td>Farm Players Total Salaries</td><td>$379,417</td></tr>
<tr><td>Coaches Total Salaries</td><td>$1,700,000</td></tr>
<tr><td>Luxury Taxe Total</td><td>$0</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>$0</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>$0</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>$0</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>$0</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Estimated Season Revenue</td><td>$0</td></tr>
<tr><td>Pro Remaining Season Days</td><td>0</td></tr>
<tr><td>Pro Expenses Per Days</td><td>$0</td></tr>
<tr><td>Pro Estimated Expenses</td><td>$0</td></tr>
<tr><td>Farm Remaining Season Days</td><td>0</td></tr>
<tr><td>Farm Expenses Per Days</td><td>$0</td></tr>
<tr><td>Farm Estimated Expenses</td><td>$0</td></tr>
<tr><td>Estimated Season Expenses</td><td>$0</td></tr>
<tr><td>Estimated Season Salary Cap</td><td>$0</td></tr>
<tr><td>Estimate Under Maximum Salary Cap of $81,500,000</td><td>$0</td></tr>
<tr><td>Estimate Over Minimum Salary Cap of $58,800,000 </td><td>$0</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>$102,739,430</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>$102,739,430</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>James van Riemsdyk</td>
<td>$8,750,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$8,750,000</td></tr>
<tr><td>Cam Fowler</td>
<td>$6,500,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$6,500,000</td></tr>
<tr><td>Semyon Varlamov</td>
<td>$6,000,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$6,000,000</td></tr>
<tr><td>Dmitry Kulikov</td>
<td>$4,250,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$4,250,000</td></tr>
<tr><td>Brady Tkachuk</td>
<td>$3,425,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$3,425,000</td></tr>
<tr><td>Micheal Ferland</td>
<td>$3,250,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$3,250,000</td></tr>
<tr><td>Evan Rodrigues</td>
<td>$2,250,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$2,250,000</td></tr>
<tr><td>Sam Gagner</td>
<td>$2,200,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$2,200,000</td></tr>
<tr><td>Jordan Martinook</td>
<td>$2,000,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$2,000,000</td></tr>
<tr><td>Robert Bortuzzo</td>
<td>$1,750,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$1,750,000</td></tr>
<tr><td>Jordan Oesterle</td>
<td>$1,750,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$1,750,000</td></tr>
<tr><td>Michael Rasmussen</td>
<td>$1,710,833 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$1,710,833</td></tr>
<tr><td>Tyson Jost</td>
<td>$1,673,333 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$1,673,333</td></tr>
<tr><td>Connor Carrick</td>
<td>$1,650,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$1,650,000</td></tr>
<tr><td>Michael Del Zotto</td>
<td>$1,500,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$1,500,000</td></tr>
<tr><td>Chris Wagner</td>
<td>$1,500,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$1,500,000</td></tr>
<tr><td>Dante Fabbro</td>
<td>$1,491,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$1,491,000</td></tr>
<tr><td>Anton Forsberg</td>
<td>$1,000,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$1,000,000</td></tr>
<tr><td>Tomas Jurco</td>
<td>$950,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$950,000</td></tr>
<tr><td>Nick Cousins</td>
<td>$725,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$725,000</td></tr>
<tr><td>Alexandre Fortin</td>
<td>$700,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$700,000</td></tr>
<tr><td>Colin Wilson</td>
<td>$0 (0)</td></tr>
<tr><td>Anthony Greco</td>
<td>$0 (0)</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>23</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $55,025,166</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $44,426,833</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $21,741,000</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $0</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $54,459,167</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $43,860,834</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $21,175,001</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $0</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $55,025,166</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $44,426,833</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $21,741,000</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $0</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Roland McKeown</td>
<td>$89,417 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$89,417</td></tr>
<tr><td>Mackenzie MacEachern</td>
<td>$75,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$75,000</td></tr>
<tr><td>Aaron Ness</td>
<td>$75,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$75,000</td></tr>
<tr><td>Tom McCollum</td>
<td>$70,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$70,000</td></tr>
<tr><td>Matej Tomek</td>
<td>$70,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$70,000</td></tr>
<tr><td>Austin Czarnik</td>
<td>$0 (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Matt Read</td>
<td>$0 (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Nelson Nogier</td>
<td>$0 (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jamie Devane</td>
<td>$0 (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Nick Foligno</td>
<td>$0 (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Chris Wideman</td>
<td>$0 (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>11</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $379,417</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $309,417</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $0</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $379,417</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $309,417</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $0</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="TeamFinancePro_NSH"><a id="Predators">Predators</a></h1>
<div class="STHSTeamLink">
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
<tr><td>Level 1: </td><td>6000 - $225 - 0 - 0.00%</td></tr>
<tr><td>Level 2: </td><td>5000 - $165 - 0 - 0.00%</td></tr>
<tr><td>Level 3: </td><td>4000 - $135 - 0 - 0.00%</td></tr>
<tr><td>Level 4: </td><td>3000 - $100 - 0 - 0.00%</td></tr>
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
<tr><td>Pro Players Total Salaries</td><td>$60,806,666</td></tr>
<tr><td>Farm Players Total Salaries</td><td>$329,417</td></tr>
<tr><td>Coaches Total Salaries</td><td>$3,900,000</td></tr>
<tr><td>Luxury Taxe Total</td><td>$0</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>$0</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>$0</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>$0</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>$0</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Estimated Season Revenue</td><td>$0</td></tr>
<tr><td>Pro Remaining Season Days</td><td>0</td></tr>
<tr><td>Pro Expenses Per Days</td><td>$0</td></tr>
<tr><td>Pro Estimated Expenses</td><td>$0</td></tr>
<tr><td>Farm Remaining Season Days</td><td>0</td></tr>
<tr><td>Farm Expenses Per Days</td><td>$0</td></tr>
<tr><td>Farm Estimated Expenses</td><td>$0</td></tr>
<tr><td>Estimated Season Expenses</td><td>$0</td></tr>
<tr><td>Estimated Season Salary Cap</td><td>$0</td></tr>
<tr><td>Estimate Under Maximum Salary Cap of $81,500,000</td><td>$0</td></tr>
<tr><td>Estimate Over Minimum Salary Cap of $58,800,000 </td><td>$0</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>$190,787,814</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>$190,787,814</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Logan Couture</td>
<td>$7,250,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$7,250,000</td></tr>
<tr><td>Jack Johnson</td>
<td>$7,000,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$7,000,000</td></tr>
<tr><td>Reilly Smith</td>
<td>$6,500,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$6,500,000</td></tr>
<tr><td>Jordan Staal</td>
<td>$6,500,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$6,500,000</td></tr>
<tr><td>Deryk Engelland</td>
<td>$6,000,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$6,000,000</td></tr>
<tr><td>Sam Reinhart</td>
<td>$5,500,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$5,500,000</td></tr>
<tr><td>Oscar Klefbom</td>
<td>$5,000,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$5,000,000</td></tr>
<tr><td>Andreas Athanasiou</td>
<td>$3,700,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$3,700,000</td></tr>
<tr><td>Kevan Miller</td>
<td>$2,850,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$2,850,000</td></tr>
<tr><td>Dominik Kubalik</td>
<td>$1,775,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$1,775,000</td></tr>
<tr><td>Alex Tuch</td>
<td>$1,350,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$1,350,000</td></tr>
<tr><td>Pheonix Copley</td>
<td>$1,250,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$1,250,000</td></tr>
<tr><td>Danton Heinen</td>
<td>$995,833 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$995,833</td></tr>
<tr><td>Brandon Gignac</td>
<td>$921,666 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$921,666</td></tr>
<tr><td>Adrian Kempe</td>
<td>$894,167 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$894,167</td></tr>
<tr><td>Erik Cernak</td>
<td>$890,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$890,000</td></tr>
<tr><td>Morgan Frost</td>
<td>$863,333 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$863,333</td></tr>
<tr><td>J.C. Beaudin</td>
<td>$816,667 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$816,667</td></tr>
<tr><td>Jayson Megna</td>
<td>$750,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$750,000</td></tr>
<tr><td>Carey Price</td>
<td>$0 (0)</td></tr>
<tr><td>Blake Comeau</td>
<td>$0 (0)</td></tr>
<tr><td>Alex Killorn</td>
<td>$0 (0)</td></tr>
<tr><td>Greg Carey</td>
<td>$0 (0)</td></tr>
<tr><td>Ryan Dzingel</td>
<td>$0 (0)</td></tr>
<tr><td>Logan Shaw</td>
<td>$0 (0)</td></tr>
<tr><td>Nick Holden</td>
<td>$0 (0)</td></tr>
<tr><td>Zach Redmond</td>
<td>$0 (0)</td></tr>
<tr><td>Adam Henrique</td>
<td>$0 (0)</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>28</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $60,806,666</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $25,766,666</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $16,376,666</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $0</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $59,905,007</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $24,865,007</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $15,475,007</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $0</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $60,806,666</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $25,766,666</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $16,376,666</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $0</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Stefan Matteau</td>
<td>$92,500 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$92,500</td></tr>
<tr><td>Dennis Cholowski</td>
<td>$89,417 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$89,417</td></tr>
<tr><td>Justin Dowling</td>
<td>$75,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$75,000</td></tr>
<tr><td>Charles Hudon</td>
<td>$72,500 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$72,500</td></tr>
<tr><td>Nick Lappin</td>
<td>$0 (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Stuart Percy</td>
<td>$0 (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>6</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $329,417</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $89,417</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $0</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $329,417</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $89,417</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $0</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="TeamFinancePro_NYR"><a id="Rangers">Rangers</a></h1>
<div class="STHSTeamLink">
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
<tr><td>Level 1: </td><td>6000 - $220 - 0 - 0.00%</td></tr>
<tr><td>Level 2: </td><td>5000 - $165 - 0 - 0.00%</td></tr>
<tr><td>Level 3: </td><td>4000 - $135 - 0 - 0.00%</td></tr>
<tr><td>Level 4: </td><td>3000 - $110 - 0 - 0.00%</td></tr>
<tr><td>Luxury : </td><td>1000 - $300 - 0 - 0.00%</td></tr>
<tr><td>Total Capacity :</td><td>19000</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Farm Level 1: </td><td>2000 - $19 - 0 - 0.00%</td></tr>
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
<tr><td>Pro Players Total Salaries</td><td>$51,451,667</td></tr>
<tr><td>Farm Players Total Salaries</td><td>$92,500</td></tr>
<tr><td>Coaches Total Salaries</td><td>$5,900,000</td></tr>
<tr><td>Luxury Taxe Total</td><td>$0</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>$0</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>$0</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>$0</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>$0</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Estimated Season Revenue</td><td>$0</td></tr>
<tr><td>Pro Remaining Season Days</td><td>0</td></tr>
<tr><td>Pro Expenses Per Days</td><td>$0</td></tr>
<tr><td>Pro Estimated Expenses</td><td>$0</td></tr>
<tr><td>Farm Remaining Season Days</td><td>0</td></tr>
<tr><td>Farm Expenses Per Days</td><td>$0</td></tr>
<tr><td>Farm Estimated Expenses</td><td>$0</td></tr>
<tr><td>Estimated Season Expenses</td><td>$0</td></tr>
<tr><td>Estimated Season Salary Cap</td><td>$0</td></tr>
<tr><td>Estimate Under Maximum Salary Cap of $81,500,000</td><td>$0</td></tr>
<tr><td>Estimate Over Minimum Salary Cap of $58,800,000 </td><td>$0</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>$50,920,054</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>$50,920,054</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Claude Giroux</td>
<td>$8,660,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$8,660,000</td></tr>
<tr><td>Marc-Andre Fleury</td>
<td>$8,300,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$8,300,000</td></tr>
<tr><td>Shea Weber</td>
<td>$8,200,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$8,200,000</td></tr>
<tr><td>Roman Josi</td>
<td>$8,000,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$8,000,000</td></tr>
<tr><td>Artem Anisimov</td>
<td>$4,850,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$4,850,000</td></tr>
<tr><td>Nick Jensen</td>
<td>$4,500,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$4,500,000</td></tr>
<tr><td>John Marino</td>
<td>$1,775,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$1,775,000</td></tr>
<tr><td>Colin White</td>
<td>$1,491,667 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$1,491,667</td></tr>
<tr><td>Matt Grzelcyk</td>
<td>$1,400,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$1,400,000</td></tr>
<tr><td>Ryan Donato</td>
<td>$1,350,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$1,350,000</td></tr>
<tr><td>Ian McCoshen</td>
<td>$1,025,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$1,025,000</td></tr>
<tr><td>Charlie Lindgren</td>
<td>$1,000,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$1,000,000</td></tr>
<tr><td>Reid Boucher</td>
<td>$900,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$900,000</td></tr>
<tr><td>Jesper Bratt</td>
<td>$0 (0)</td></tr>
<tr><td>Erik Gustafsson</td>
<td>$0 (0)</td></tr>
<tr><td>Ben Hutton</td>
<td>$0 (0)</td></tr>
<tr><td>Artturi Lehkonen</td>
<td>$0 (0)</td></tr>
<tr><td>Gabriel Landeskog</td>
<td>$0 (0)</td></tr>
<tr><td>Mark Stone</td>
<td>$0 (0)</td></tr>
<tr><td>Charlie Coyle</td>
<td>$0 (0)</td></tr>
<tr><td>Chris Tierney</td>
<td>$0 (0)</td></tr>
<tr><td>Kevin Porter</td>
<td>$0 (0)</td></tr>
<tr><td>Carter Hutton</td>
<td>$0 (0)</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>23</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $51,451,667</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $48,026,667</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $31,135,000</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $4,500,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $50,601,669</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $47,176,669</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $30,285,002</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $4,500,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $51,451,667</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $48,026,667</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $31,135,000</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $4,500,000</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Kevin Roy</td>
<td>$92,500 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$92,500</td></tr>
<tr><td>Robby Fabbri</td>
<td>$0 (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Zach Trotman</td>
<td>$0 (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>3</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $92,500</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $0</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $92,500</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $0</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="TeamFinancePro_DET"><a id="RedWings">Red Wings</a></h1>
<div class="STHSTeamLink">
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
<tr><td>Pro Players Total Salaries</td><td>$67,924,166</td></tr>
<tr><td>Farm Players Total Salaries</td><td>$252,333</td></tr>
<tr><td>Coaches Total Salaries</td><td>$0</td></tr>
<tr><td>Luxury Taxe Total</td><td>$0</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>$0</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>$0</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>$0</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>$0</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Estimated Season Revenue</td><td>$0</td></tr>
<tr><td>Pro Remaining Season Days</td><td>0</td></tr>
<tr><td>Pro Expenses Per Days</td><td>$0</td></tr>
<tr><td>Pro Estimated Expenses</td><td>$0</td></tr>
<tr><td>Farm Remaining Season Days</td><td>0</td></tr>
<tr><td>Farm Expenses Per Days</td><td>$0</td></tr>
<tr><td>Farm Estimated Expenses</td><td>$0</td></tr>
<tr><td>Estimated Season Expenses</td><td>$0</td></tr>
<tr><td>Estimated Season Salary Cap</td><td>$0</td></tr>
<tr><td>Estimate Under Maximum Salary Cap of $81,500,000</td><td>$0</td></tr>
<tr><td>Estimate Over Minimum Salary Cap of $58,800,000 </td><td>$0</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>$16,982,231</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>$16,982,231</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Ryan Suter</td>
<td>$9,625,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$9,625,000</td></tr>
<tr><td>Sergei Bobrovsky</td>
<td>$9,150,000 (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$9,150,000</td></tr>
<tr><td>Brayden Point</td>
<td>$8,500,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$8,500,000</td></tr>
<tr><td>Patrik Laine</td>
<td>$8,475,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$8,475,000</td></tr>
<tr><td>Matt Duchene</td>
<td>$7,700,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$7,700,000</td></tr>
<tr><td>Mathew Dumba</td>
<td>$6,000,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$6,000,000</td></tr>
<tr><td>Marc Staal</td>
<td>$6,000,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$6,000,000</td></tr>
<tr><td>Torey Krug</td>
<td>$5,600,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$5,600,000</td></tr>
<tr><td>Jake McCabe</td>
<td>$2,750,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$2,750,000</td></tr>
<tr><td>Teddy Blueger</td>
<td>$925,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$925,000</td></tr>
<tr><td>Mathieu Joseph</td>
<td>$910,833 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$910,833</td></tr>
<tr><td>Ivan Barbashev</td>
<td>$863,333 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$863,333</td></tr>
<tr><td>Andrew Mangiapane</td>
<td>$800,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$800,000</td></tr>
<tr><td>Marcus Hogberg</td>
<td>$625,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$625,000</td></tr>
<tr><td>Mark Giordano</td>
<td>$0 (0)</td></tr>
<tr><td>Conor Sheary</td>
<td>$0 (0)</td></tr>
<tr><td>Oliver Bjorkstrand</td>
<td>$0 (0)</td></tr>
<tr><td>Jared McCann</td>
<td>$0 (0)</td></tr>
<tr><td>Connor McDavid</td>
<td>$0 (0)</td></tr>
<tr><td>Kyle Turris</td>
<td>$0 (0)</td></tr>
<tr><td>Colin McDonald</td>
<td>$0 (0)</td></tr>
<tr><td>Korbinian Holzer</td>
<td>$0 (0)</td></tr>
<tr><td>Stefan Noesen</td>
<td>$0 (0)</td></tr>
<tr><td>Paul Thompson</td>
<td>$0 (0)</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>24</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $67,924,166</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $67,060,833</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $48,175,000</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $28,100,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $67,299,166</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $66,435,833</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $48,175,000</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $28,100,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $67,924,166</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $67,060,833</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $48,175,000</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $28,100,000</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Austin Wagner</td>
<td>$92,500 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$92,500</td></tr>
<tr><td>Martin Frk</td>
<td>$86,333 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$86,333</td></tr>
<tr><td>Connor Clifton</td>
<td>$73,500 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$73,500</td></tr>
<tr><td>Anton Lindholm</td>
<td>$0 (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Aaron Dell</td>
<td>$0 (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>5</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $252,333</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $166,000</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $0</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $252,333</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $166,000</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $0</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="TeamFinancePro_BUF"><a id="Sabres">Sabres</a></h1>
<div class="STHSTeamLink">
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
<br /><br /><table class="STHSTableFullW"><tr><td style="vertical-align: top;width:440px;">
<table class="STHSFinance_TeamTable">
<tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_AreanaCapacity">Arena Capacity - Ticket Price<br />Attendance - %</h3></td></tr>
<tr><td class="STHSW250">Arena Name</td><td class="STHSW200">HSBC Arena</td></tr>
<tr><td>Level 1: </td><td>6000 - $220 - 0 - 0.00%</td></tr>
<tr><td>Level 2: </td><td>5000 - $160 - 0 - 0.00%</td></tr>
<tr><td>Level 3: </td><td>4000 - $120 - 0 - 0.00%</td></tr>
<tr><td>Level 4: </td><td>3000 - $100 - 0 - 0.00%</td></tr>
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
<tr><td>Pro Players Total Salaries</td><td>$81,150,000</td></tr>
<tr><td>Farm Players Total Salaries</td><td>$867,417</td></tr>
<tr><td>Coaches Total Salaries</td><td>$2,900,000</td></tr>
<tr><td>Luxury Taxe Total</td><td>$0</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>$0</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>$0</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>$0</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>$0</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Estimated Season Revenue</td><td>$0</td></tr>
<tr><td>Pro Remaining Season Days</td><td>0</td></tr>
<tr><td>Pro Expenses Per Days</td><td>$0</td></tr>
<tr><td>Pro Estimated Expenses</td><td>$0</td></tr>
<tr><td>Farm Remaining Season Days</td><td>0</td></tr>
<tr><td>Farm Expenses Per Days</td><td>$0</td></tr>
<tr><td>Farm Estimated Expenses</td><td>$0</td></tr>
<tr><td>Estimated Season Expenses</td><td>$0</td></tr>
<tr><td>Estimated Season Salary Cap</td><td>$0</td></tr>
<tr><td>Estimate Under Maximum Salary Cap of $81,500,000</td><td>$0</td></tr>
<tr><td>Estimate Over Minimum Salary Cap of $58,800,000 </td><td>$0</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>$88,957,237</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>$88,957,237</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Sidney Crosby</td>
<td>$11,000,000 (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$11,000,000</td></tr>
<tr><td>Anze Kopitar</td>
<td>$11,000,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$11,000,000</td></tr>
<tr><td>Matt Niskanen</td>
<td>$6,100,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$6,100,000</td></tr>
<tr><td>Rasmus Ristolainen</td>
<td>$5,700,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$5,700,000</td></tr>
<tr><td>Anders Lee</td>
<td>$5,500,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$5,500,000</td></tr>
<tr><td>Teuvo Teravainen</td>
<td>$5,400,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$5,400,000</td></tr>
<tr><td>Chris Kreider</td>
<td>$5,100,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$5,100,000</td></tr>
<tr><td>Rickard Rakell</td>
<td>$5,000,000 (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$5,000,000</td></tr>
<tr><td>Josh Manson</td>
<td>$4,500,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$4,500,000</td></tr>
<tr><td>Dan Hamhuis</td>
<td>$4,000,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$4,000,000</td></tr>
<tr><td>Thomas Greiss</td>
<td>$4,000,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$4,000,000</td></tr>
<tr><td>J.T. Compher</td>
<td>$3,500,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$3,500,000</td></tr>
<tr><td>Pavel Buchnevich</td>
<td>$3,500,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$3,500,000</td></tr>
<tr><td>Linus Ullmark</td>
<td>$1,475,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$1,475,000</td></tr>
<tr><td>Ilya Samsonov</td>
<td>$1,475,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$1,475,000</td></tr>
<tr><td>Zemgus Girgensons</td>
<td>$1,450,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$1,450,000</td></tr>
<tr><td>Derek Grant</td>
<td>$1,050,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$1,050,000</td></tr>
<tr><td>Remi Elie</td>
<td>$700,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$700,000</td></tr>
<tr><td>Chad Ruhwedel</td>
<td>$700,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$700,000</td></tr>
<tr><td>Mattias Janmark</td>
<td>$0 (0)</td></tr>
<tr><td>Tim Schaller</td>
<td>$0 (0)</td></tr>
<tr><td>Zdeno Chara</td>
<td>$0 (0)</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>22</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $81,150,000</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $68,525,000</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $54,925,000</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $40,400,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $80,600,000</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $67,975,000</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $54,375,000</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $40,400,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $81,150,000</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $68,525,000</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $54,925,000</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $40,400,000</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Ross Johnston</td>
<td>$100,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$100,000</td></tr>
<tr><td>Justin Bailey</td>
<td>$89,417 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$89,417</td></tr>
<tr><td>Michael Amadio</td>
<td>$71,500 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$71,500</td></tr>
<tr><td>Jacob Nilsson</td>
<td>$70,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$70,000</td></tr>
<tr><td>Dakota Mermis</td>
<td>$70,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$70,000</td></tr>
<tr><td>Taylor Fedun</td>
<td>$70,000 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$70,000</td></tr>
<tr><td>Yannick Weber</td>
<td>$70,000 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$70,000</td></tr>
<tr><td>Tyler Lewington</td>
<td>$66,500 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$66,500</td></tr>
<tr><td>Turner Elson</td>
<td>$65,000 (4)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$65,000</td></tr>
<tr><td>Kurtis MacDermid</td>
<td>$65,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$65,000</td></tr>
<tr><td>Ken Appleby</td>
<td>$65,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$65,000</td></tr>
<tr><td>Mario Kempe</td>
<td>$65,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$65,000</td></tr>
<tr><td>Zac Rinaldo</td>
<td>$0 (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Cole Schneider</td>
<td>$0 (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>14</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $867,417</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $375,000</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $205,000</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $65,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $867,417</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $375,000</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $205,000</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $65,000</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="TeamFinancePro_OTT"><a id="Senators">Senators</a></h1>
<div class="STHSTeamLink">
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
<tr><td>Pro Players Total Salaries</td><td>$52,450,277</td></tr>
<tr><td>Farm Players Total Salaries</td><td>$145,000</td></tr>
<tr><td>Coaches Total Salaries</td><td>$4,500,000</td></tr>
<tr><td>Luxury Taxe Total</td><td>$0</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>$0</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>$0</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>$0</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>$0</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Estimated Season Revenue</td><td>$0</td></tr>
<tr><td>Pro Remaining Season Days</td><td>0</td></tr>
<tr><td>Pro Expenses Per Days</td><td>$0</td></tr>
<tr><td>Pro Estimated Expenses</td><td>$0</td></tr>
<tr><td>Farm Remaining Season Days</td><td>0</td></tr>
<tr><td>Farm Expenses Per Days</td><td>$0</td></tr>
<tr><td>Farm Estimated Expenses</td><td>$0</td></tr>
<tr><td>Estimated Season Expenses</td><td>$0</td></tr>
<tr><td>Estimated Season Salary Cap</td><td>$0</td></tr>
<tr><td>Estimate Under Maximum Salary Cap of $81,500,000</td><td>$0</td></tr>
<tr><td>Estimate Over Minimum Salary Cap of $58,800,000 </td><td>$0</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>$26,394,475</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>$26,394,475</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Andrei Vasilevskiy</td>
<td>$10,000,000 (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$10,000,000</td></tr>
<tr><td>Ryan Johansen</td>
<td>$8,000,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$8,000,000</td></tr>
<tr><td>Ryan McDonagh</td>
<td>$7,100,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$7,100,000</td></tr>
<tr><td>Erik Johnson</td>
<td>$6,750,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$6,750,000</td></tr>
<tr><td>David Pastrnak</td>
<td>$6,750,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$6,750,000</td></tr>
<tr><td>Nick Leddy</td>
<td>$5,500,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$5,500,000</td></tr>
<tr><td>Bryan Rust</td>
<td>$3,500,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$3,500,000</td></tr>
<tr><td>John Hayden</td>
<td>$925,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$925,000</td></tr>
<tr><td>Klim Kostin</td>
<td>$863,333 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$863,333</td></tr>
<tr><td>Jordan Nolan</td>
<td>$850,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$850,000</td></tr>
<tr><td>Gilles Senn</td>
<td>$817,500 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$817,500</td></tr>
<tr><td>Max Lagace</td>
<td>$700,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$700,000</td></tr>
<tr><td>Dmytro Timashov</td>
<td>$694,444 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$694,444</td></tr>
<tr><td>Dean Kukan</td>
<td>$0 (0)</td></tr>
<tr><td>Jason Dickinson</td>
<td>$0 (0)</td></tr>
<tr><td>Vladimir Tarasenko</td>
<td>$0 (0)</td></tr>
<tr><td>Pierre-Edouard Bellemare</td>
<td>$0 (0)</td></tr>
<tr><td>Fredrik Claesson</td>
<td>$0 (0)</td></tr>
<tr><td>Joakim Nordstrom</td>
<td>$0 (0)</td></tr>
<tr><td>Calvin Pickard</td>
<td>$0 (0)</td></tr>
<tr><td>Trevor Carrick</td>
<td>$0 (0)</td></tr>
<tr><td>Trevor Lewis</td>
<td>$0 (0)</td></tr>
<tr><td>Ryan Reaves</td>
<td>$0 (0)</td></tr>
<tr><td>Corey Tropp</td>
<td>$0 (0)</td></tr>
<tr><td>Dylan McIlrath</td>
<td>$0 (0)</td></tr>
<tr><td>Alex Galchenyuk</td>
<td>$0 (0)</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>26</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $52,450,277</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $43,225,277</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $34,225,277</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $17,100,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $52,723,944</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $43,498,944</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $34,498,944</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $17,100,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $52,450,277</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $43,225,277</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $34,225,277</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $17,100,000</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Michael Bunting</td>
<td>$92,500 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$92,500</td></tr>
<tr><td>Nick Moutrey</td>
<td>$52,500 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$52,500</td></tr>
<tr><td>Frank Corrado</td>
<td>$0 (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Tim Heed</td>
<td>$0 (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>4</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $145,000</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $145,000</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $0</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $167,500</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $167,500</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $0</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="TeamFinancePro_SJS"><a id="Sharks">Sharks</a></h1>
<div class="STHSTeamLink">
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
<tr><td>Level 1: </td><td>6000 - $169 - 0 - 0.00%</td></tr>
<tr><td>Level 2: </td><td>5000 - $127 - 0 - 0.00%</td></tr>
<tr><td>Level 3: </td><td>4000 - $83 - 0 - 0.00%</td></tr>
<tr><td>Level 4: </td><td>3000 - $50 - 0 - 0.00%</td></tr>
<tr><td>Luxury : </td><td>1000 - $230 - 0 - 0.00%</td></tr>
<tr><td>Total Capacity :</td><td>19000</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Farm Level 1: </td><td>2000 - $99 - 0 - 0.00%</td></tr>
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
<tr><td>Pro Players Total Salaries</td><td>$62,237,667</td></tr>
<tr><td>Farm Players Total Salaries</td><td>$160,600</td></tr>
<tr><td>Coaches Total Salaries</td><td>$2,675,000</td></tr>
<tr><td>Luxury Taxe Total</td><td>$0</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>$0</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>$0</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>$0</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>$0</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Estimated Season Revenue</td><td>$0</td></tr>
<tr><td>Pro Remaining Season Days</td><td>0</td></tr>
<tr><td>Pro Expenses Per Days</td><td>$0</td></tr>
<tr><td>Pro Estimated Expenses</td><td>$0</td></tr>
<tr><td>Farm Remaining Season Days</td><td>0</td></tr>
<tr><td>Farm Expenses Per Days</td><td>$0</td></tr>
<tr><td>Farm Estimated Expenses</td><td>$0</td></tr>
<tr><td>Estimated Season Expenses</td><td>$0</td></tr>
<tr><td>Estimated Season Salary Cap</td><td>$0</td></tr>
<tr><td>Estimate Under Maximum Salary Cap of $81,500,000</td><td>$0</td></tr>
<tr><td>Estimate Over Minimum Salary Cap of $58,800,000 </td><td>$0</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>$96,909,238</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>$96,909,238</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Kris Letang</td>
<td>$8,650,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$8,650,000</td></tr>
<tr><td>Filip Forsberg</td>
<td>$7,000,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$7,000,000</td></tr>
<tr><td>Aleksander Barkov</td>
<td>$5,900,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$5,900,000</td></tr>
<tr><td>Jared Spurgeon</td>
<td>$5,750,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$5,750,000</td></tr>
<tr><td>T.J. Brodie</td>
<td>$5,600,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$5,600,000</td></tr>
<tr><td>Tyler Toffoli</td>
<td>$4,800,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$4,800,000</td></tr>
<tr><td>Justin Braun</td>
<td>$4,500,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$4,500,000</td></tr>
<tr><td>Derek Ryan</td>
<td>$4,050,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$4,050,000</td></tr>
<tr><td>Joel Edmundson</td>
<td>$3,500,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$3,500,000</td></tr>
<tr><td>Sven Baertschi</td>
<td>$3,000,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$3,000,000</td></tr>
<tr><td>Darcy Kuemper</td>
<td>$1,850,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$1,850,000</td></tr>
<tr><td>Brett Kulak</td>
<td>$1,850,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$1,850,000</td></tr>
<tr><td>Robert Thomas</td>
<td>$1,177,500 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$1,177,500</td></tr>
<tr><td>Oskar Lindblom</td>
<td>$1,137,500 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$1,137,500</td></tr>
<tr><td>Zack MacEwen</td>
<td>$996,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$996,000</td></tr>
<tr><td>Brendan Leipsic</td>
<td>$895,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$895,000</td></tr>
<tr><td>Gustav Forsling</td>
<td>$875,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$875,000</td></tr>
<tr><td>Ondrej Kase</td>
<td>$706,667 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$706,667</td></tr>
<tr><td>Evgeny Kuznetsov</td>
<td>$0 (0)</td></tr>
<tr><td>Joel Armia</td>
<td>$0 (0)</td></tr>
<tr><td>Laurent Brossoit</td>
<td>$0 (0)</td></tr>
<tr><td>Victor Rask</td>
<td>$0 (0)</td></tr>
<tr><td>Travis Konecny</td>
<td>$0 (0)</td></tr>
<tr><td>Andrew Poturalski</td>
<td>$0 (0)</td></tr>
<tr><td>Mats Zuccarello</td>
<td>$0 (0)</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>25</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $62,237,667</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $52,277,500</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $33,550,000</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $4,800,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $62,237,667</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $52,277,500</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $33,550,000</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $4,800,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $62,237,667</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $52,277,500</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $33,550,000</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $4,800,000</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Jimmy Schuldt</td>
<td>$92,500 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$92,500</td></tr>
<tr><td>Joseph LaBate</td>
<td>$68,100 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$68,100</td></tr>
<tr><td>Robbie Russo</td>
<td>$0 (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Dan Renouf</td>
<td>$0 (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>4</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $160,600</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $160,600</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $0</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $160,600</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $160,600</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $0</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="TeamFinancePro_DAL"><a id="Stars">Stars</a></h1>
<div class="STHSTeamLink">
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
<tr><td>Pro Players Total Salaries</td><td>$76,625,000</td></tr>
<tr><td>Farm Players Total Salaries</td><td>$0</td></tr>
<tr><td>Coaches Total Salaries</td><td>$3,950,000</td></tr>
<tr><td>Luxury Taxe Total</td><td>$0</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>$0</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>$0</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>$0</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>$0</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Estimated Season Revenue</td><td>$0</td></tr>
<tr><td>Pro Remaining Season Days</td><td>0</td></tr>
<tr><td>Pro Expenses Per Days</td><td>$0</td></tr>
<tr><td>Pro Estimated Expenses</td><td>$0</td></tr>
<tr><td>Farm Remaining Season Days</td><td>0</td></tr>
<tr><td>Farm Expenses Per Days</td><td>$0</td></tr>
<tr><td>Farm Estimated Expenses</td><td>$0</td></tr>
<tr><td>Estimated Season Expenses</td><td>$0</td></tr>
<tr><td>Estimated Season Salary Cap</td><td>$0</td></tr>
<tr><td>Estimate Under Maximum Salary Cap of $81,500,000</td><td>$0</td></tr>
<tr><td>Estimate Over Minimum Salary Cap of $58,800,000 </td><td>$0</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>$45,319,170</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>$45,319,170</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Patrice Bergeron</td>
<td>$9,500,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$9,500,000</td></tr>
<tr><td>Corey Perry</td>
<td>$8,150,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$8,150,000</td></tr>
<tr><td>Duncan Keith</td>
<td>$7,500,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$7,500,000</td></tr>
<tr><td>Max Pacioretty</td>
<td>$7,000,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$7,000,000</td></tr>
<tr><td>Zach Parise</td>
<td>$6,800,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$6,800,000</td></tr>
<tr><td>Cam Talbot</td>
<td>$6,250,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$6,250,000</td></tr>
<tr><td>Jonathan Marchessault</td>
<td>$5,900,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$5,900,000</td></tr>
<tr><td>Frans Nielsen</td>
<td>$5,650,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$5,650,000</td></tr>
<tr><td>Thomas Hickey</td>
<td>$3,875,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$3,875,000</td></tr>
<tr><td>Nikita Zadorov</td>
<td>$3,500,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$3,500,000</td></tr>
<tr><td>Craig Anderson</td>
<td>$2,300,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$2,300,000</td></tr>
<tr><td>Mark Letestu</td>
<td>$2,250,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$2,250,000</td></tr>
<tr><td>Jordie Benn</td>
<td>$2,000,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$2,000,000</td></tr>
<tr><td>Colton Sceviour</td>
<td>$1,750,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$1,750,000</td></tr>
<tr><td>Johan Larsson</td>
<td>$1,600,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$1,600,000</td></tr>
<tr><td>Mike Reilly</td>
<td>$900,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$900,000</td></tr>
<tr><td>Byron Froese</td>
<td>$900,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$900,000</td></tr>
<tr><td>Brandon Davidson</td>
<td>$800,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$800,000</td></tr>
<tr><td>Nate Prosser</td>
<td>$0 (0)</td></tr>
<tr><td>Anthony Stolarz</td>
<td>$0 (0)</td></tr>
<tr><td>Brendan Gaunce</td>
<td>$0 (0)</td></tr>
<tr><td>Andrew Agozzino</td>
<td>$0 (0)</td></tr>
<tr><td>Jordan Weal</td>
<td>$0 (0)</td></tr>
<tr><td>Matt Puempel</td>
<td>$0 (0)</td></tr>
<tr><td>Derek Forbort</td>
<td>$0 (0)</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>25</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $76,625,000</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $52,975,000</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $31,150,000</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $16,500,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $75,725,001</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $52,075,001</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $31,150,000</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $16,500,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $76,625,000</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $52,975,000</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $31,150,000</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $16,500,000</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Nicolas Deslauriers</td>
<td>$0 (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Phil Varone</td>
<td>$0 (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jean-Francois Berube</td>
<td>$0 (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>3</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $0</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $0</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="TeamFinancePro_MIN"><a id="Wild">Wild</a></h1>
<div class="STHSTeamLink">
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
<tr><td>Pro Players Total Salaries</td><td>$40,991,500</td></tr>
<tr><td>Farm Players Total Salaries</td><td>$258,800</td></tr>
<tr><td>Coaches Total Salaries</td><td>$4,550,000</td></tr>
<tr><td>Luxury Taxe Total</td><td>$0</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>$0</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>$0</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>$0</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>$0</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Estimated Season Revenue</td><td>$0</td></tr>
<tr><td>Pro Remaining Season Days</td><td>0</td></tr>
<tr><td>Pro Expenses Per Days</td><td>$0</td></tr>
<tr><td>Pro Estimated Expenses</td><td>$0</td></tr>
<tr><td>Farm Remaining Season Days</td><td>0</td></tr>
<tr><td>Farm Expenses Per Days</td><td>$0</td></tr>
<tr><td>Farm Estimated Expenses</td><td>$0</td></tr>
<tr><td>Estimated Season Expenses</td><td>$0</td></tr>
<tr><td>Estimated Season Salary Cap</td><td>$0</td></tr>
<tr><td>Estimate Under Maximum Salary Cap of $81,500,000</td><td>$0</td></tr>
<tr><td>Estimate Over Minimum Salary Cap of $58,800,000 </td><td>$0</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>$109,225,566</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>$109,225,566</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Kyle Okposo</td>
<td>$7,500,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$7,500,000</td></tr>
<tr><td>Tyson Barrie</td>
<td>$7,000,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$7,000,000</td></tr>
<tr><td>John Carlson</td>
<td>$6,500,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$6,500,000</td></tr>
<tr><td>Nino Niederreiter</td>
<td>$5,500,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$5,500,000</td></tr>
<tr><td>Jakob Silfverberg</td>
<td>$5,250,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$5,250,000</td></tr>
<tr><td>Troy Brouwer</td>
<td>$2,950,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$2,950,000</td></tr>
<tr><td>Brandon Pirri</td>
<td>$1,250,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$1,250,000</td></tr>
<tr><td>Tage Thompson</td>
<td>$1,137,500 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$1,137,500</td></tr>
<tr><td>Troy Grosenick</td>
<td>$950,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$950,000</td></tr>
<tr><td>Conor Garland</td>
<td>$822,333 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$822,333</td></tr>
<tr><td>Casey Nelson</td>
<td>$800,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$800,000</td></tr>
<tr><td>Karl Alzner</td>
<td>$700,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$700,000</td></tr>
<tr><td>Sam Carrick</td>
<td>$631,667 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$631,667</td></tr>
<tr><td>Mikhail Sergachev</td>
<td>$0 (0)</td></tr>
<tr><td>Trevor Daley</td>
<td>$0 (0)</td></tr>
<tr><td>Tyler Graovac</td>
<td>$0 (0)</td></tr>
<tr><td>Seth Griffith</td>
<td>$0 (0)</td></tr>
<tr><td>Brett Ritchie</td>
<td>$0 (0)</td></tr>
<tr><td>David Backes</td>
<td>$0 (0)</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>19</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $40,991,500</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $36,904,000</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $25,250,000</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $17,750,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $40,991,500</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $36,904,000</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $25,250,000</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $17,750,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $40,991,500</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $36,904,000</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $25,250,000</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $17,750,000</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Jayce Hawryluk</td>
<td>$92,500 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$92,500</td></tr>
<tr><td>Riley Barber</td>
<td>$92,500 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$92,500</td></tr>
<tr><td>Calvin Thurkauf</td>
<td>$73,800 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$73,800</td></tr>
<tr><td>Patrick Eaves</td>
<td>$0 (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Mike Condon</td>
<td>$0 (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Rocco Grimaldi</td>
<td>$0 (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Nathan Paetsch</td>
<td>$0 (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Matt Irwin</td>
<td>$0 (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>8</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $258,800</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $258,800</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $0</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $258,800</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $258,800</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $0</td></tr>
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
<td>$182,831,388</td>
<td>$0</td>
<td>$81,500,000</td>
<td><span style="color:red">-$58,800,000</span></td>
<td>28</td><td>4</td><td>32</td></tr>
<tr><td>Blackhawks</td>
<td>$47,055,937</td>
<td>$0</td>
<td>$81,500,000</td>
<td><span style="color:red">-$58,800,000</span></td>
<td>22</td><td>12</td><td>34</td></tr>
<tr><td>Blue Jackets</td>
<td>$46,869,345</td>
<td>$0</td>
<td>$81,500,000</td>
<td><span style="color:red">-$58,800,000</span></td>
<td>26</td><td>15</td><td>41</td></tr>
<tr><td>Blues</td>
<td>$119,730,004</td>
<td>$0</td>
<td>$81,500,000</td>
<td><span style="color:red">-$58,800,000</span></td>
<td>28</td><td>8</td><td>36</td></tr>
<tr><td>Bruins</td>
<td>$35,540,978</td>
<td>$0</td>
<td>$81,500,000</td>
<td><span style="color:red">-$58,800,000</span></td>
<td>22</td><td>12</td><td>34</td></tr>
<tr><td>Canadiens</td>
<td>$91,800,213</td>
<td>$0</td>
<td>$81,500,000</td>
<td><span style="color:red">-$58,800,000</span></td>
<td>29</td><td>8</td><td>37</td></tr>
<tr><td>Canucks</td>
<td>$140,385,879</td>
<td>$0</td>
<td>$81,500,000</td>
<td><span style="color:red">-$58,800,000</span></td>
<td>25</td><td>23</td><td>48</td></tr>
<tr><td>Capitals</td>
<td>$50,709,780</td>
<td>$0</td>
<td>$81,500,000</td>
<td><span style="color:red">-$58,800,000</span></td>
<td>26</td><td>7</td><td>33</td></tr>
<tr><td>Coyotes</td>
<td>$82,554,906</td>
<td>$0</td>
<td>$81,500,000</td>
<td><span style="color:red">-$58,800,000</span></td>
<td>26</td><td>12</td><td>38</td></tr>
<tr><td>Devils</td>
<td>$69,681,341</td>
<td>$0</td>
<td>$81,500,000</td>
<td><span style="color:red">-$58,800,000</span></td>
<td>26</td><td>5</td><td>31</td></tr>
<tr><td>Ducks</td>
<td>$79,760,267</td>
<td>$0</td>
<td>$81,500,000</td>
<td><span style="color:red">-$58,800,000</span></td>
<td>26</td><td>9</td><td>35</td></tr>
<tr><td>Flames</td>
<td>$53,369,923</td>
<td>$0</td>
<td>$81,500,000</td>
<td><span style="color:red">-$58,800,000</span></td>
<td>24</td><td>12</td><td>36</td></tr>
<tr><td>Flyers</td>
<td>$7,298,255</td>
<td>$0</td>
<td>$81,500,000</td>
<td><span style="color:red">-$58,800,000</span></td>
<td>24</td><td>7</td><td>31</td></tr>
<tr><td>Golden Knights</td>
<td>$74,538,035</td>
<td>$0</td>
<td>$81,500,000</td>
<td><span style="color:red">-$58,800,000</span></td>
<td>24</td><td>8</td><td>32</td></tr>
<tr><td>Hurricanes</td>
<td>$46,070,906</td>
<td>$0</td>
<td>$81,500,000</td>
<td><span style="color:red">-$58,800,000</span></td>
<td>40</td><td>13</td><td>53</td></tr>
<tr><td>Islanders</td>
<td>$109,701,980</td>
<td>$0</td>
<td>$81,500,000</td>
<td><span style="color:red">-$58,800,000</span></td>
<td>23</td><td>8</td><td>31</td></tr>
<tr><td>Jets</td>
<td>$26,122,240</td>
<td>$0</td>
<td>$81,500,000</td>
<td><span style="color:red">-$58,800,000</span></td>
<td>30</td><td>9</td><td>39</td></tr>
<tr><td>Kings</td>
<td>$40,027,231</td>
<td>$0</td>
<td>$81,500,000</td>
<td><span style="color:red">-$58,800,000</span></td>
<td>23</td><td>4</td><td>27</td></tr>
<tr><td>Lightning</td>
<td>$9,409,783</td>
<td>$0</td>
<td>$81,500,000</td>
<td><span style="color:red">-$58,800,000</span></td>
<td>22</td><td>9</td><td>31</td></tr>
<tr><td>Maple Leafs</td>
<td>$157,830,928</td>
<td>$0</td>
<td>$81,500,000</td>
<td><span style="color:red">-$58,800,000</span></td>
<td>26</td><td>5</td><td>31</td></tr>
<tr><td>Oilers</td>
<td>$131,348,577</td>
<td>$0</td>
<td>$81,500,000</td>
<td><span style="color:red">-$58,800,000</span></td>
<td>29</td><td>10</td><td>39</td></tr>
<tr><td>Panthers</td>
<td>$60,807,201</td>
<td>$0</td>
<td>$81,500,000</td>
<td><span style="color:red">-$58,800,000</span></td>
<td>27</td><td>12</td><td>39</td></tr>
<tr><td>Penguins</td>
<td>$102,739,430</td>
<td>$0</td>
<td>$81,500,000</td>
<td><span style="color:red">-$58,800,000</span></td>
<td>23</td><td>11</td><td>34</td></tr>
<tr><td>Predators</td>
<td>$190,787,814</td>
<td>$0</td>
<td>$81,500,000</td>
<td><span style="color:red">-$58,800,000</span></td>
<td>28</td><td>6</td><td>34</td></tr>
<tr><td>Rangers</td>
<td>$50,920,054</td>
<td>$0</td>
<td>$81,500,000</td>
<td><span style="color:red">-$58,800,000</span></td>
<td>23</td><td>3</td><td>26</td></tr>
<tr><td>Red Wings</td>
<td>$16,982,231</td>
<td>$0</td>
<td>$81,500,000</td>
<td><span style="color:red">-$58,800,000</span></td>
<td>24</td><td>5</td><td>29</td></tr>
<tr><td>Sabres</td>
<td>$88,957,237</td>
<td>$0</td>
<td>$81,500,000</td>
<td><span style="color:red">-$58,800,000</span></td>
<td>22</td><td>14</td><td>36</td></tr>
<tr><td>Senators</td>
<td>$26,394,475</td>
<td>$0</td>
<td>$81,500,000</td>
<td><span style="color:red">-$58,800,000</span></td>
<td>26</td><td>4</td><td>30</td></tr>
<tr><td>Sharks</td>
<td>$96,909,238</td>
<td>$0</td>
<td>$81,500,000</td>
<td><span style="color:red">-$58,800,000</span></td>
<td>25</td><td>4</td><td>29</td></tr>
<tr><td>Stars</td>
<td>$45,319,170</td>
<td>$0</td>
<td>$81,500,000</td>
<td><span style="color:red">-$58,800,000</span></td>
<td>25</td><td>3</td><td>28</td></tr>
<tr><td>Wild</td>
<td>$109,225,566</td>
<td>$0</td>
<td>$81,500,000</td>
<td><span style="color:red">-$58,800,000</span></td>
<td>19</td><td>8</td><td>27</td></tr>
</table>
<?php include "Footer.php";?>
