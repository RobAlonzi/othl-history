<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<title>OTHL - Team Finance</title>
<script src="OTHL-PLF.js"></script>
<meta name="author" content="Simon Tremblay, sths.simont.info" />
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="Decription" content="Tyler Bell - STHS - Version : 3.2.7.8 - OTHL-STHS.db - OTHL-STHSCareerStat.db"/>
<link href="STHSMain.css" rel="stylesheet" type="text/css" />
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
<tr><td>Level 1: </td><td>6000 - $154 - 0 - 0.00%</td></tr>
<tr><td>Level 2: </td><td>5000 - $129 - 0 - 0.00%</td></tr>
<tr><td>Level 3: </td><td>4000 - $89 - 0 - 0.00%</td></tr>
<tr><td>Level 4: </td><td>3000 - $64 - 0 - 0.00%</td></tr>
<tr><td>Luxury : </td><td>1000 - $239 - 0 - 0.00%</td></tr>
<tr><td>Total Capacity :</td><td>19000</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Farm Level 1: </td><td>2000 - $59 - 0 - 0.00%</td></tr>
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
<tr><td>Pro Players Total Salaries</td><td>$65,647,083</td></tr>
<tr><td>Farm Players Total Salaries</td><td>$847,612</td></tr>
<tr><td>Coaches Total Salaries</td><td>$2,100,000</td></tr>
<tr><td>Luxury Taxe Total</td><td>$0</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>$0</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>$0</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>$0</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>$0</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>$210,743,306</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>$210,743,306</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Patrick Kane</td>
<td>$10,500,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Mikko Koivu</td>
<td>$7,750,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Hampus Lindholm</td>
<td>$6,000,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>J.T. Miller</td>
<td>$5,750,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jake Allen</td>
<td>$5,250,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Brett Pesce</td>
<td>$4,250,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Braydon Coburn</td>
<td>$3,800,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Brandon Carlo</td>
<td>$2,900,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>John Moore</td>
<td>$2,850,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Richard Panik</td>
<td>$2,750,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Brock McGinn</td>
<td>$2,100,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Tobias Rieder</td>
<td>$2,000,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Matt Martin</td>
<td>$2,000,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Travis Boyd</td>
<td>$925,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Chris Driedger</td>
<td>$900,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Chris Mueller</td>
<td>$900,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jonas Siegenthaler</td>
<td>$888,333 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Lucas Wallmark</td>
<td>$750,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Carson Soucy</td>
<td>$750,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Samuel Montembeault</td>
<td>$708,750 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Andreas Englund</td>
<td>$700,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Mike Vecchione</td>
<td>$700,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Michael Sgarbossa</td>
<td>$525,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>23</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $65,647,083</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $28,472,083</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $12,908,750</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $0</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $65,647,083</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $28,472,083</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $12,908,750</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $0</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $65,647,083</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $28,472,083</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $12,908,750</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $0</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Brett Sutter</td>
<td>$200,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Joseph Cramarossa</td>
<td>$95,200 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Adam Clendening</td>
<td>$90,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Evgeny Svechnikov</td>
<td>$87,413 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Dean Kukan</td>
<td>$80,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Kurtis Gabriel</td>
<td>$75,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Keegan Lowe</td>
<td>$75,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Blake Pietila</td>
<td>$75,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Mark Alt</td>
<td>$70,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>9</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $847,612</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $312,412</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $87,412</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $0</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $847,612</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $312,412</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $87,412</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $0</td></tr>
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
<tr><td>Level 1: </td><td>6000 - $169 - 6,000 - 100.00%</td></tr>
<tr><td>Level 2: </td><td>5000 - $127 - 4,238 - 84.76%</td></tr>
<tr><td>Level 3: </td><td>4000 - $81 - 3,999 - 99.96%</td></tr>
<tr><td>Level 4: </td><td>3000 - $50 - 3,000 - 100.00%</td></tr>
<tr><td>Luxury : </td><td>1000 - $220 - 1,000 - 100.00%</td></tr>
<tr><td>Total Capacity :</td><td>19000</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Farm Level 1: </td><td>2000 - $50 - 2,000 - 100.00%</td></tr>
<tr><td>Farm Level 2: </td><td>1000 - $0 - 996 - 99.62%</td></tr>
<tr><td>Farm Total Capacity :</td><td>3000</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Income">Income</h3></td></tr>
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>18,237 - 95.98%</td></tr>
<tr><td>Average Income per Game</td><td>$2,246,105</td></tr>
<tr><td>Year to Date Revenue</td><td>$4,492,209</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>2,996 - 99.87%</td></tr>
<tr><td>Average Income per Game</td><td>$100,000</td></tr>
<tr><td>Year to Date Revenue</td><td>$600,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>$92,983,333</td></tr>
<tr><td>Farm Players Total Salaries</td><td>$1,567,166</td></tr>
<tr><td>Coaches Total Salaries</td><td>$3,840,000</td></tr>
<tr><td>Luxury Taxe Total</td><td>$0</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>$0</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>$0</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>$0</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>$0</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>$56,088,257</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>$56,088,257</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Evgeni Malkin</td>
<td>$12,000,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Sebastian Aho</td>
<td>$8,450,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Corey Crawford</td>
<td>$6,850,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Derek Stepan</td>
<td>$6,500,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Zach Werenski</td>
<td>$6,350,000 (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jason Zucker</td>
<td>$5,500,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Tyler Johnson</td>
<td>$5,250,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Andy Greene</td>
<td>$5,200,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Justin Faulk</td>
<td>$5,000,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Derek Ryan</td>
<td>$4,050,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Igor Shesterkin</td>
<td>$3,775,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Andrew Shaw</td>
<td>$3,700,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Matt Calvert</td>
<td>$3,350,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Vladislav Namestnikov</td>
<td>$3,250,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Carl Hagelin</td>
<td>$3,145,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Erik Haula</td>
<td>$3,050,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Dylan DeMelo</td>
<td>$2,200,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Anthony DeAngelo</td>
<td>$1,363,333 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Aaron Dell</td>
<td>$1,300,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>David Kampf</td>
<td>$925,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Justin Holl</td>
<td>$925,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Kevin Rooney</td>
<td>$850,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>22</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $92,983,333</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $67,520,000</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $63,470,000</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $34,250,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $92,983,333</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $67,520,000</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $63,470,000</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $34,250,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $92,983,333</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $67,520,000</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $63,470,000</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $34,250,000</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Logan Brown</td>
<td>$157,333 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Mitch Vande Sompel</td>
<td>$93,583 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Colton Point</td>
<td>$92,500 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jesper Boqvist</td>
<td>$92,500 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Kiefer Sherwood</td>
<td>$92,500 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Max Comtois</td>
<td>$92,500 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Max Veronneau</td>
<td>$92,500 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Glenn Gawdin</td>
<td>$92,500 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Dominik Simon</td>
<td>$89,500 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Zac Dalpe</td>
<td>$85,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Griffen Molino</td>
<td>$80,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Carsen Twarynski</td>
<td>$77,583 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Valentin Zykov</td>
<td>$77,500 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Ville Pokka</td>
<td>$75,000 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Skyler McKenzie</td>
<td>$74,167 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Cameron Schilling</td>
<td>$70,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Matt Bartkowski</td>
<td>$67,500 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Joseph Blandisi</td>
<td>$65,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>18</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $1,567,166</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $1,002,166</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $687,333</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $0</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $1,556,666</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $991,666</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $687,333</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $0</td></tr>
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
<tr><td>Level 1: </td><td>6000 - $225 - 4,446 - 74.09%</td></tr>
<tr><td>Level 2: </td><td>5000 - $165 - 3,677 - 73.55%</td></tr>
<tr><td>Level 3: </td><td>4000 - $135 - 2,890 - 72.25%</td></tr>
<tr><td>Level 4: </td><td>3000 - $100 - 1,938 - 64.59%</td></tr>
<tr><td>Luxury : </td><td>1000 - $300 - 766 - 76.63%</td></tr>
<tr><td>Total Capacity :</td><td>19000</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Farm Level 1: </td><td>2000 - $100 - 1,192 - 59.61%</td></tr>
<tr><td>Farm Level 2: </td><td>1000 - $0 - 1,000 - 100.00%</td></tr>
<tr><td>Farm Total Capacity :</td><td>3000</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Income">Income</h3></td></tr>
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>13,717 - 72.19%</td></tr>
<tr><td>Average Income per Game</td><td>$2,420,852</td></tr>
<tr><td>Year to Date Revenue</td><td>$7,262,555</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>2,192 - 73.08%</td></tr>
<tr><td>Average Income per Game</td><td>$119,229</td></tr>
<tr><td>Year to Date Revenue</td><td>$834,600</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>$81,295,000</td></tr>
<tr><td>Farm Players Total Salaries</td><td>$2,362,383</td></tr>
<tr><td>Coaches Total Salaries</td><td>$2,400,000</td></tr>
<tr><td>Luxury Taxe Total</td><td>$0</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>$0</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>$0</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>$0</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>$0</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>$63,350,212</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>$63,350,212</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Jamie Benn</td>
<td>$9,300,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Joe Pavelski</td>
<td>$8,600,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Erik Johnson</td>
<td>$6,750,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Alex Goligoski</td>
<td>$6,500,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Henrik Lundqvist</td>
<td>$6,250,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Anton Stralman</td>
<td>$5,500,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Danny DeKeyser</td>
<td>$5,000,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Artem Anisimov</td>
<td>$4,850,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jason Demers</td>
<td>$4,500,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Anthony Duclair</td>
<td>$4,000,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Elias Pettersson</td>
<td>$3,775,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Andrew Copp</td>
<td>$3,000,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Paul Byron</td>
<td>$2,500,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Vinnie Hinostroza</td>
<td>$2,500,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Quinn Hughes</td>
<td>$1,604,167 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Miles Wood</td>
<td>$1,250,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Alexander Kerfoot</td>
<td>$1,137,500 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Thatcher Demko</td>
<td>$1,050,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Andreas Johnsson</td>
<td>$925,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Zach Sanford</td>
<td>$925,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Nicolas Aube-Kubel</td>
<td>$700,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Philippe Myers</td>
<td>$678,333 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>22</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $81,295,000</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $36,479,167</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $15,854,167</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $7,000,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $81,295,000</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $36,479,167</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $15,854,167</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $7,000,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $81,295,000</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $36,479,167</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $15,854,167</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $7,000,000</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Andrew Ladd</td>
<td>$600,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Greg McKegg</td>
<td>$92,500 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Giovanni Fiore</td>
<td>$90,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Filip Chlapik</td>
<td>$89,417 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Kole Lind</td>
<td>$89,133 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Lukas Jasek</td>
<td>$85,333 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Nikolai Knyzhov</td>
<td>$81,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>T.J. Tynan</td>
<td>$80,000 (4)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Alex Lyon</td>
<td>$75,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Phillip Di Giuseppe</td>
<td>$75,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Mason Geertsen</td>
<td>$75,000 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Denis Malgin</td>
<td>$75,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Patrick Russell</td>
<td>$75,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Scott Wedgewood</td>
<td>$75,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Brandon Baddock</td>
<td>$75,000 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Frederick Gaudreau</td>
<td>$75,000 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jack Rodewald</td>
<td>$70,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Brad Thiessen</td>
<td>$70,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Evan McEneny</td>
<td>$70,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Josh Brown</td>
<td>$70,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Dylan Gambrell</td>
<td>$70,000 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Tommy Cross</td>
<td>$70,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Justin Kirkland</td>
<td>$70,000 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Adam Wilcox</td>
<td>$65,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>24</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $2,362,383</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $946,966</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $619,466</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $80,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $2,361,050</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $946,966</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $619,466</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $80,000</td></tr>
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
<tr><td>Level 2: </td><td>5000 - $129 - 0 - 0.00%</td></tr>
<tr><td>Level 3: </td><td>4000 - $105 - 0 - 0.00%</td></tr>
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
<tr><td>Pro Players Total Salaries</td><td>$71,003,332</td></tr>
<tr><td>Farm Players Total Salaries</td><td>$1,440,833</td></tr>
<tr><td>Coaches Total Salaries</td><td>$3,300,000</td></tr>
<tr><td>Luxury Taxe Total</td><td>$0</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>$0</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>$0</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>$0</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>$0</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>$86,788,743</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>$86,788,743</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Vladimir Tarasenko</td>
<td>$11,500,000 (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Travis Konecny</td>
<td>$7,500,000 (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Mikael Backlund</td>
<td>$6,500,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jonathan Drouin</td>
<td>$5,500,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Antti Raanta</td>
<td>$5,500,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Justin Schultz</td>
<td>$4,800,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>David Savard</td>
<td>$4,750,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Pierre-Edouard Bellemare</td>
<td>$3,800,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Antoine Roussel</td>
<td>$3,250,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Tyler Pitlick</td>
<td>$2,750,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Carter Rowney</td>
<td>$2,000,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Adam Boqvist</td>
<td>$1,744,167 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Denis Gurianov</td>
<td>$1,644,166 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Brendan Lemieux</td>
<td>$1,039,167 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Vitek Vanecek</td>
<td>$1,000,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Samuel Girard</td>
<td>$935,833 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Paul Ladue</td>
<td>$925,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Alexandre Texier</td>
<td>$925,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Josh Currie</td>
<td>$900,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Janne Kuokkanen</td>
<td>$894,166 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Victor Mete</td>
<td>$870,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Matt Benning</td>
<td>$850,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Sammy Blais</td>
<td>$725,833 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jean-Sebastien Dea</td>
<td>$700,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>24</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $71,003,332</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $65,807,499</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $52,507,499</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $25,500,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $70,280,836</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $64,960,835</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $51,660,835</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $25,500,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $71,003,332</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $65,807,499</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $52,507,499</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $25,500,000</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Andrew Hammond</td>
<td>$275,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Louis Domingue</td>
<td>$200,000 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Dalton Prout</td>
<td>$100,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Niclas Almari</td>
<td>$92,500 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Chad Krys</td>
<td>$92,500 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Nick Seeler</td>
<td>$92,500 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Marko Dano</td>
<td>$90,000 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Joe Gambardella</td>
<td>$90,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Ashton Sautner</td>
<td>$90,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Cale Fleury</td>
<td>$88,333 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Tanner Kero</td>
<td>$80,000 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Matteo Gennaro</td>
<td>$75,000 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Karson Kuhlman</td>
<td>$75,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>13</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $1,440,833</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $898,333</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $718,333</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $0</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $1,429,667</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $887,167</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $707,167</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $0</td></tr>
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
<tr><td>Level 2: </td><td>5000 - $115 - 4,995 - 99.90%</td></tr>
<tr><td>Level 3: </td><td>4000 - $90 - 4,000 - 100.00%</td></tr>
<tr><td>Level 4: </td><td>3000 - $65 - 3,000 - 100.00%</td></tr>
<tr><td>Luxury : </td><td>1000 - $255 - 1,000 - 100.00%</td></tr>
<tr><td>Total Capacity :</td><td>19000</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Farm Level 1: </td><td>2000 - $100 - 1,114 - 55.72%</td></tr>
<tr><td>Farm Level 2: </td><td>1000 - $0 - 1,000 - 100.00%</td></tr>
<tr><td>Farm Total Capacity :</td><td>3000</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Income">Income</h3></td></tr>
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>18,995 - 99.97%</td></tr>
<tr><td>Average Income per Game</td><td>$2,374,444</td></tr>
<tr><td>Year to Date Revenue</td><td>$28,493,330</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>2,114 - 70.48%</td></tr>
<tr><td>Average Income per Game</td><td>$111,433</td></tr>
<tr><td>Year to Date Revenue</td><td>$334,300</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>$94,400,000</td></tr>
<tr><td>Farm Players Total Salaries</td><td>$1,590,958</td></tr>
<tr><td>Coaches Total Salaries</td><td>$4,700,000</td></tr>
<tr><td>Luxury Taxe Total</td><td>$0</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>$0</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>$0</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>$0</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>$0</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>$64,444,347</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>$64,444,347</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Brad Marchand</td>
<td>$11,000,000 (6)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Brent Burns</td>
<td>$9,000,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Sean Couturier</td>
<td>$7,700,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Evgenii Dadonov (1 Way Contract)</td>
<td>$7,200,000 (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jean-Gabriel Pageau</td>
<td>$6,200,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Ondrej Palat</td>
<td>$5,750,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Brendan Gallagher</td>
<td>$5,100,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Erik Gudbranson</td>
<td>$5,000,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Michael Grabner</td>
<td>$4,850,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Blake Coleman</td>
<td>$3,750,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Chris Tierney</td>
<td>$3,625,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Ben Chiarot</td>
<td>$3,500,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Ben Hutton</td>
<td>$3,200,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jay Beagle</td>
<td>$3,000,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Derek Forbort</td>
<td>$2,950,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Brayden McNabb</td>
<td>$2,800,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Mirco Mueller</td>
<td>$2,000,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Lawson Crouse</td>
<td>$1,700,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Linus Ullmark</td>
<td>$1,475,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Drake Caggiula</td>
<td>$1,250,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Par Lindholm</td>
<td>$1,250,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Pavel Francouz</td>
<td>$1,100,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Frederik Gauthier</td>
<td>$1,000,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>23</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $94,400,000</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $86,825,000</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $73,825,000</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $40,950,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $94,400,000</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $86,825,000</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $73,825,000</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $40,950,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $94,400,000</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $86,825,000</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $73,825,000</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $40,950,000</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Michael Anderson</td>
<td>$177,500 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Gabriel Bourque</td>
<td>$140,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Kole Sherwood</td>
<td>$100,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Connor Ingram</td>
<td>$92,500 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Chris Bigras</td>
<td>$90,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Ryan Collins</td>
<td>$88,083 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Anthony Angello</td>
<td>$83,375 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jaycob Megna</td>
<td>$80,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Gustav Olofsson</td>
<td>$80,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Ben Harpur</td>
<td>$80,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Matthew Villalta</td>
<td>$77,833 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jens Looke</td>
<td>$75,000 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Devante Stephens</td>
<td>$74,333 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Manuel Wiederer</td>
<td>$73,667 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Gabriel Fontaine</td>
<td>$73,667 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Nathan Walker</td>
<td>$70,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Giorgio Estephan</td>
<td>$70,000 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jake Dotchin</td>
<td>$65,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>18</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $1,590,958</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $1,195,958</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $724,750</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $0</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $1,505,958</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $1,110,958</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $639,750</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $0</td></tr>
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
<tr><td>Level 1: </td><td>6000 - $145 - 0 - 0.00%</td></tr>
<tr><td>Level 2: </td><td>5000 - $75 - 0 - 0.00%</td></tr>
<tr><td>Level 3: </td><td>4000 - $65 - 0 - 0.00%</td></tr>
<tr><td>Level 4: </td><td>3000 - $40 - 0 - 0.00%</td></tr>
<tr><td>Luxury : </td><td>1000 - $200 - 0 - 0.00%</td></tr>
<tr><td>Total Capacity :</td><td>19000</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Farm Level 1: </td><td>2000 - $55 - 0 - 0.00%</td></tr>
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
<tr><td>Pro Players Total Salaries</td><td>$59,903,332</td></tr>
<tr><td>Farm Players Total Salaries</td><td>$1,048,666</td></tr>
<tr><td>Coaches Total Salaries</td><td>$2,850,000</td></tr>
<tr><td>Luxury Taxe Total</td><td>$0</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>$0</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>$0</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>$0</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>$0</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>$93,682,649</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>$93,682,649</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Marc-Edouard Vlasic</td>
<td>$8,000,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Ivan Provorov</td>
<td>$7,750,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Aaron Ekblad</td>
<td>$7,650,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Mark Scheifele</td>
<td>$7,500,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Nikolaj Ehlers</td>
<td>$6,000,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Connor Murphy</td>
<td>$3,850,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Kyle Turris</td>
<td>$2,500,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Brandon Tanev</td>
<td>$2,000,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Matt Irwin</td>
<td>$2,000,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Tucker Poolman</td>
<td>$1,775,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Clayton Keller</td>
<td>$1,673,333 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Henrik Borgstrom</td>
<td>$1,491,666 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Daniel Sprong</td>
<td>$925,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Isac Lundestrom</td>
<td>$925,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Dillon Dube</td>
<td>$910,833 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jacob MacDonald</td>
<td>$900,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Alex DeBrincat</td>
<td>$894,167 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Carter Hart</td>
<td>$863,333 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Ryan Lomberg</td>
<td>$850,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Alex Nedeljkovic</td>
<td>$745,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Kyle Rau</td>
<td>$700,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>21</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $59,903,332</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $42,285,832</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $24,120,000</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $11,600,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $59,903,332</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $42,285,832</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $24,120,000</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $11,600,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $59,903,332</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $42,285,832</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $24,120,000</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $11,600,000</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Noah Juulsen</td>
<td>$106,333 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Chase Priskie</td>
<td>$92,500 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Otto Leskinen</td>
<td>$92,500 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>T.J. Brennan</td>
<td>$90,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Sheldon Rempal</td>
<td>$90,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Yakov Trenin</td>
<td>$86,333 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Mikhail Berdin</td>
<td>$75,833 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>David Ayres</td>
<td>$75,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Matthew Phillips</td>
<td>$75,000 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Kalle Kossila</td>
<td>$72,500 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jonny Brodzinski</td>
<td>$72,500 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Matt Luff</td>
<td>$67,667 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Alex Petrovic</td>
<td>$52,500 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>13</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $1,048,666</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $654,666</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $474,666</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $0</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $1,046,999</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $652,999</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $472,999</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $0</td></tr>
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
<tr><td>Level 1: </td><td>6000 - $164 - 6,000 - 100.00%</td></tr>
<tr><td>Level 2: </td><td>5000 - $115 - 5,000 - 100.00%</td></tr>
<tr><td>Level 3: </td><td>4000 - $90 - 4,000 - 99.99%</td></tr>
<tr><td>Level 4: </td><td>3000 - $63 - 3,000 - 100.00%</td></tr>
<tr><td>Luxury : </td><td>1000 - $253 - 996 - 99.60%</td></tr>
<tr><td>Total Capacity :</td><td>19000</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Farm Level 1: </td><td>2000 - $100 - 1,358 - 67.90%</td></tr>
<tr><td>Farm Level 2: </td><td>1000 - $0 - 997 - 99.70%</td></tr>
<tr><td>Farm Total Capacity :</td><td>3000</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Income">Income</h3></td></tr>
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>18,996 - 99.98%</td></tr>
<tr><td>Average Income per Game</td><td>$2,359,966</td></tr>
<tr><td>Year to Date Revenue</td><td>$18,879,724</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>2,355 - 78.50%</td></tr>
<tr><td>Average Income per Game</td><td>$135,800</td></tr>
<tr><td>Year to Date Revenue</td><td>$1,493,800</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>$91,509,000</td></tr>
<tr><td>Farm Players Total Salaries</td><td>$2,312,056</td></tr>
<tr><td>Coaches Total Salaries</td><td>$2,500,000</td></tr>
<tr><td>Luxury Taxe Total</td><td>$0</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>$0</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>$0</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>$0</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>$0</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>$148,140,058</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>$148,140,058</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Auston Matthews</td>
<td>$10,534,000 (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Mikko Rantanen</td>
<td>$9,250,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>James Neal</td>
<td>$6,500,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Ilya Kovalchuk</td>
<td>$6,250,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Dougie Hamilton</td>
<td>$5,750,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Tyler Myers</td>
<td>$5,650,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Yanni Gourde</td>
<td>$4,750,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Nikita Zaitsev</td>
<td>$4,500,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Brendan Smith</td>
<td>$4,250,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Nick Bonino</td>
<td>$4,000,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jacob Markstrom</td>
<td>$4,000,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Nico Hischier</td>
<td>$3,775,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>James Reimer</td>
<td>$3,500,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Patrik Nemeth</td>
<td>$3,000,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Joel Armia</td>
<td>$2,800,000 (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Brandon Dubinsky</td>
<td>$2,750,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jason Dickinson</td>
<td>$2,250,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Scott Mayfield</td>
<td>$2,000,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Kyle Connor</td>
<td>$1,775,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Wayne Simmonds</td>
<td>$1,500,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Ryan Carpenter</td>
<td>$1,000,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Nikita Gusev</td>
<td>$925,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>MacKenzie Weegar</td>
<td>$800,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>23</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $91,509,000</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $57,509,000</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $39,759,000</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $20,334,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $95,084,001</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $61,084,001</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $43,334,001</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $20,334,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $91,509,000</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $57,509,000</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $39,759,000</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $20,334,000</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Haydn Fleury</td>
<td>$171,333 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Joel Farabee</td>
<td>$142,500 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Michael McLeod</td>
<td>$136,333 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Gavin Bayreuther</td>
<td>$95,500 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Dennis Yan</td>
<td>$93,583 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Logan O'Connor</td>
<td>$92,500 (4)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Rudolfs Balcers</td>
<td>$92,500 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Alexandar Georgiev</td>
<td>$92,500 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Frederic Allard</td>
<td>$92,167 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jonathan Ang</td>
<td>$91,083 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Gabriel Carlsson</td>
<td>$89,417 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jacob Larsson</td>
<td>$89,417 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Garrett Pilon</td>
<td>$89,417 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Boris Katchouk</td>
<td>$89,417 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Joshua Ho-Sang</td>
<td>$87,500 (4)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Tyler Steenbergen</td>
<td>$87,500 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Brett Seney</td>
<td>$82,500 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Tanner Kaspick</td>
<td>$82,222 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Alexander True</td>
<td>$80,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Ben Gleason</td>
<td>$76,167 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Anton Blidh</td>
<td>$75,000 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jacob Middleton</td>
<td>$73,500 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Hunter Miska</td>
<td>$70,000 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Landon Bow</td>
<td>$70,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Brian Pinho</td>
<td>$70,000 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>25</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $2,312,056</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $1,898,223</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $1,388,639</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $180,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $2,185,723</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $1,799,390</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $1,289,806</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $180,000</td></tr>
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
<tr><td>Pro Players Total Salaries</td><td>$80,055,833</td></tr>
<tr><td>Farm Players Total Salaries</td><td>$684,833</td></tr>
<tr><td>Coaches Total Salaries</td><td>$6,800,000</td></tr>
<tr><td>Luxury Taxe Total</td><td>$0</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>$0</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>$0</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>$0</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>$0</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>$42,865,942</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>$42,865,942</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Jack Eichel</td>
<td>$10,000,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Drew Doughty</td>
<td>$9,250,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jacob Trouba</td>
<td>$7,500,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>T.J. Oshie</td>
<td>$6,850,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Sean Monahan</td>
<td>$6,375,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Pekka Rinne</td>
<td>$5,500,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Dmitry Orlov</td>
<td>$5,100,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Rickard Rakell</td>
<td>$5,000,000 (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Ian Cole</td>
<td>$4,000,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Petr Mrazek</td>
<td>$3,000,000 (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Pavel Zacha</td>
<td>$2,400,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Blake Comeau</td>
<td>$2,400,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Ryan Kesler</td>
<td>$2,000,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Gabriel Vilardi</td>
<td>$1,627,500 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jake Virtanen</td>
<td>$1,250,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Matt Roy</td>
<td>$1,000,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jujhar Khaira</td>
<td>$950,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Chandler Stephenson</td>
<td>$925,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Alex Iafallo</td>
<td>$925,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Blake Lizotte</td>
<td>$925,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Cal Petersen</td>
<td>$858,333 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Joakim Ryan</td>
<td>$750,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Sean Walker</td>
<td>$745,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Michael Chaput</td>
<td>$725,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>24</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $80,055,833</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $75,460,833</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $46,010,833</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $22,350,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $80,055,833</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $75,460,833</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $46,010,833</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $22,350,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $80,055,833</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $75,460,833</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $46,010,833</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $22,350,000</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Carl Grundstrom</td>
<td>$92,500 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Nicolas Meloche</td>
<td>$85,333 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>A.J. Greer</td>
<td>$82,500 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Ville Husso</td>
<td>$75,000 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Kevin Gravel</td>
<td>$75,000 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Cameron Darcy</td>
<td>$75,000 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Kyle Capobianco</td>
<td>$74,500 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Spencer Martin</td>
<td>$72,500 (4)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jani Hakanpaa</td>
<td>$52,500 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>9</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $684,833</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $632,333</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $457,333</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $72,500</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $684,833</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $632,333</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $457,333</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $72,500</td></tr>
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
<tr><td>Level 1: </td><td>6000 - $220 - 4,204 - 70.06%</td></tr>
<tr><td>Level 2: </td><td>5000 - $160 - 3,671 - 73.42%</td></tr>
<tr><td>Level 3: </td><td>4000 - $135 - 2,756 - 68.89%</td></tr>
<tr><td>Level 4: </td><td>3000 - $110 - 1,842 - 61.41%</td></tr>
<tr><td>Luxury : </td><td>1000 - $300 - 762 - 76.20%</td></tr>
<tr><td>Total Capacity :</td><td>19000</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Farm Level 1: </td><td>2000 - $35 - 0 - 0.00%</td></tr>
<tr><td>Farm Level 2: </td><td>1000 - $0 - 0 - 0.00%</td></tr>
<tr><td>Farm Total Capacity :</td><td>3000</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Income">Income</h3></td></tr>
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>13,235 - 69.66%</td></tr>
<tr><td>Average Income per Game</td><td>$2,315,438</td></tr>
<tr><td>Year to Date Revenue</td><td>$6,946,315</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>0 - 0.00%</td></tr>
<tr><td>Average Income per Game</td><td>$0</td></tr>
<tr><td>Year to Date Revenue</td><td>$0</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>$86,122,999</td></tr>
<tr><td>Farm Players Total Salaries</td><td>$1,045,834</td></tr>
<tr><td>Coaches Total Salaries</td><td>$5,250,000</td></tr>
<tr><td>Luxury Taxe Total</td><td>$0</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>$0</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>$0</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>$0</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>$0</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>$81,514,700</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>$81,514,700</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Mika Zibanejad</td>
<td>$9,200,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Leon Draisaitl</td>
<td>$8,500,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Oliver Ekman-Larsson</td>
<td>$8,100,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Nikita Kucherov</td>
<td>$7,750,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Tuukka Rask</td>
<td>$7,500,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>William Nylander</td>
<td>$6,815,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Kevin Hayes</td>
<td>$6,200,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Niklas Hjalmarsson</td>
<td>$4,900,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Tomas Tatar</td>
<td>$4,500,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Cody Ceci</td>
<td>$3,500,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Pierre-Luc Dubois</td>
<td>$3,394,166 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Dylan Strome</td>
<td>$3,338,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jesper Fast</td>
<td>$2,200,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Carl Gunnarsson</td>
<td>$1,750,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Cedric Paquette</td>
<td>$1,660,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Thomas Chabot</td>
<td>$1,223,333 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Nate Thompson</td>
<td>$1,100,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Slater Koekkoek</td>
<td>$950,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Kaapo Kahkonen</td>
<td>$925,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Oskar Sundqvist</td>
<td>$925,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Justin Bailey</td>
<td>$894,167 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Ethan Bear</td>
<td>$798,333 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>22</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $86,122,999</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $47,298,333</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $35,198,333</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $14,915,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $86,044,666</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $47,220,000</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $35,120,000</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $14,915,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $86,122,999</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $47,298,333</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $35,198,333</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $14,915,000</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Keith Kinkaid</td>
<td>$210,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Filip Chytil</td>
<td>$124,417 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Christian Fischer</td>
<td>$107,583 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Nico Sturm</td>
<td>$92,500 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Brady Keeper</td>
<td>$92,500 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Urho Vaakanainen</td>
<td>$89,417 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Libor Hajek</td>
<td>$89,417 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>David Backes</td>
<td>$85,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Tanner Fritz</td>
<td>$80,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Matt Read</td>
<td>$75,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Sheldon Dries</td>
<td>$0 (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>11</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $1,045,834</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $573,251</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $178,834</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $0</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $1,039,750</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $567,167</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $172,750</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $0</td></tr>
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
<tr><td>Level 1: </td><td>6000 - $172 - 0 - 0.00%</td></tr>
<tr><td>Level 2: </td><td>5000 - $122 - 0 - 0.00%</td></tr>
<tr><td>Level 3: </td><td>4000 - $96 - 0 - 0.00%</td></tr>
<tr><td>Level 4: </td><td>3000 - $70 - 0 - 0.00%</td></tr>
<tr><td>Luxury : </td><td>1000 - $254 - 0 - 0.00%</td></tr>
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
<tr><td>Pro Players Total Salaries</td><td>$88,210,834</td></tr>
<tr><td>Farm Players Total Salaries</td><td>$1,399,116</td></tr>
<tr><td>Coaches Total Salaries</td><td>$3,775,000</td></tr>
<tr><td>Luxury Taxe Total</td><td>$0</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>$0</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>$0</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>$0</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>$0</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>$64,460,006</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>$64,460,006</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Jonathan Toews</td>
<td>$11,000,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Ryan Getzlaf</td>
<td>$9,000,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Braden Holtby</td>
<td>$7,100,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Patric Hornqvist</td>
<td>$7,000,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Chris Tanev</td>
<td>$6,500,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Darnell Nurse</td>
<td>$6,000,000 (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Robin Lehner</td>
<td>$6,000,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>William Karlsson</td>
<td>$5,850,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Adam Larsson</td>
<td>$5,000,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Michal Kempny</td>
<td>$3,500,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Kirby Dach</td>
<td>$3,425,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Riley Sheahan</td>
<td>$2,900,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jimmy Vesey</td>
<td>$2,500,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Trevor van Riemsdyk</td>
<td>$2,300,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Christian Folin</td>
<td>$1,750,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Timo Meier</td>
<td>$1,644,167 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Nick Ritchie</td>
<td>$1,500,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Anders Bjork</td>
<td>$1,066,667 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Antti Suomela</td>
<td>$950,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Mason Marchment</td>
<td>$925,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Gemel Smith</td>
<td>$900,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Radim Simek</td>
<td>$725,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Kasimir Kaskisuo</td>
<td>$675,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>23</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $88,210,834</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $67,025,000</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $55,800,000</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $22,850,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $87,660,834</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $67,025,000</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $55,800,000</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $22,850,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $88,210,834</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $67,025,000</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $55,800,000</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $22,850,000</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Blake Speers</td>
<td>$93,583 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Antoine Morand</td>
<td>$92,700 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Joel Kiviranta</td>
<td>$92,500 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Nathan Noel</td>
<td>$92,500 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Niko Mikkola</td>
<td>$92,500 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Joakim Nygard</td>
<td>$87,500 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Garret Sparks</td>
<td>$85,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Mark Friedman</td>
<td>$82,500 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Leon Gawanke</td>
<td>$81,000 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Hunter Drew</td>
<td>$79,333 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Maxime Lajoie</td>
<td>$79,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jake Massie</td>
<td>$77,000 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jakob Stukel</td>
<td>$75,000 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Brent Gates</td>
<td>$75,000 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Kyle Criscuolo</td>
<td>$72,500 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Thomas Schemitsch</td>
<td>$71,500 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Scott Sabourin</td>
<td>$70,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>17</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $1,399,116</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $985,116</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $830,116</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $0</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $1,373,366</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $976,866</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $821,866</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $0</td></tr>
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
<tr><td>Level 1: </td><td>6000 - $150 - 5,990 - 99.84%</td></tr>
<tr><td>Level 2: </td><td>5000 - $112 - 5,000 - 100.00%</td></tr>
<tr><td>Level 3: </td><td>4000 - $93 - 3,995 - 99.87%</td></tr>
<tr><td>Level 4: </td><td>3000 - $62 - 2,996 - 99.87%</td></tr>
<tr><td>Luxury : </td><td>1000 - $265 - 955 - 95.52%</td></tr>
<tr><td>Total Capacity :</td><td>19000</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Farm Level 1: </td><td>2000 - $35 - 0 - 0.00%</td></tr>
<tr><td>Farm Level 2: </td><td>1000 - $0 - 0 - 0.00%</td></tr>
<tr><td>Farm Total Capacity :</td><td>3000</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Income">Income</h3></td></tr>
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>18,936 - 99.67%</td></tr>
<tr><td>Average Income per Game</td><td>$2,222,636</td></tr>
<tr><td>Year to Date Revenue</td><td>$11,113,181</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>0 - 0.00%</td></tr>
<tr><td>Average Income per Game</td><td>$0</td></tr>
<tr><td>Year to Date Revenue</td><td>$0</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>$95,113,333</td></tr>
<tr><td>Farm Players Total Salaries</td><td>$1,158,380</td></tr>
<tr><td>Coaches Total Salaries</td><td>$4,650,000</td></tr>
<tr><td>Luxury Taxe Total</td><td>$0</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>$0</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>$0</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>$0</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>$0</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>$95,094,854</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>$95,094,854</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Jake Muzzin</td>
<td>$8,000,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Artemi Panarin</td>
<td>$7,500,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Johnny Gaudreau</td>
<td>$7,250,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Brayden Schenn</td>
<td>$7,225,000 (6)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jake Guentzel</td>
<td>$7,100,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jordan Staal</td>
<td>$6,500,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Alex Steen</td>
<td>$6,500,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Josh Morrissey</td>
<td>$6,375,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Nazem Kadri</td>
<td>$6,100,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Travis Zajac</td>
<td>$6,000,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Morgan Rielly</td>
<td>$5,500,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Alec Martinez</td>
<td>$5,000,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Zach Hyman</td>
<td>$3,000,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Tristan Jarry</td>
<td>$2,900,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Ryan Miller</td>
<td>$2,500,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Charlie McAvoy</td>
<td>$1,258,333 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Luke Schenn</td>
<td>$1,150,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Madison Bowey</td>
<td>$1,000,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Matthew Peca</td>
<td>$925,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jacob de La Rose</td>
<td>$900,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jordan Kyrou</td>
<td>$880,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Nathan Gerbe</td>
<td>$800,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Kenny Agostino</td>
<td>$750,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>23</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $95,113,333</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $56,505,000</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $40,680,000</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $21,600,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $95,108,333</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $56,500,000</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $40,675,000</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $21,600,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $95,113,333</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $56,505,000</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $40,680,000</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $21,600,000</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Noah Dobson</td>
<td>$143,167 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Zach Senyshyn</td>
<td>$128,800 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Trent Frederic</td>
<td>$113,750 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Cameron Hughes</td>
<td>$92,500 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Lucas Johansen</td>
<td>$92,500 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Kevin Stenlund</td>
<td>$92,500 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Rasmus Sandin</td>
<td>$89,417 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Ryan MacInnis</td>
<td>$87,413 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jeremy Roy</td>
<td>$86,333 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Ian Scott</td>
<td>$82,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Charles Williams</td>
<td>$80,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Callum Booth</td>
<td>$70,000 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>12</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $1,158,379</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $1,076,379</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $753,829</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $0</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $1,101,629</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $1,019,629</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $697,079</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $0</td></tr>
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
<tr><td>Level 1: </td><td>6000 - $164 - 5,979 - 99.64%</td></tr>
<tr><td>Level 2: </td><td>5000 - $119 - 4,962 - 99.24%</td></tr>
<tr><td>Level 3: </td><td>4000 - $89 - 4,000 - 100.00%</td></tr>
<tr><td>Level 4: </td><td>3000 - $64 - 2,989 - 99.64%</td></tr>
<tr><td>Luxury : </td><td>1000 - $249 - 1,000 - 100.00%</td></tr>
<tr><td>Total Capacity :</td><td>19000</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Farm Level 1: </td><td>2000 - $100 - 1,059 - 52.93%</td></tr>
<tr><td>Farm Level 2: </td><td>1000 - $0 - 1,000 - 100.00%</td></tr>
<tr><td>Farm Total Capacity :</td><td>3000</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Income">Income</h3></td></tr>
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>18,930 - 99.63%</td></tr>
<tr><td>Average Income per Game</td><td>$2,367,264</td></tr>
<tr><td>Year to Date Revenue</td><td>$9,469,056</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>2,059 - 68.62%</td></tr>
<tr><td>Average Income per Game</td><td>$105,850</td></tr>
<tr><td>Year to Date Revenue</td><td>$211,700</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>$95,294,583</td></tr>
<tr><td>Farm Players Total Salaries</td><td>$1,861,082</td></tr>
<tr><td>Coaches Total Salaries</td><td>$5,700,000</td></tr>
<tr><td>Luxury Taxe Total</td><td>$0</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>$0</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>$0</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>$0</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>$0</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>$50,301,666</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>$50,301,666</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Erik Karlsson</td>
<td>$9,200,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Ben Bishop</td>
<td>$9,000,000 (6)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Taylor Hall</td>
<td>$8,750,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Brent Seabrook</td>
<td>$7,750,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Dylan Larkin</td>
<td>$6,100,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Zdeno Chara</td>
<td>$6,000,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Bo Horvat</td>
<td>$5,500,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Bryan Little</td>
<td>$5,500,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jaccob Slavin</td>
<td>$5,000,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Brady Skjei</td>
<td>$4,850,000 (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>David Perron</td>
<td>$4,500,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Andre Burakovsky</td>
<td>$3,350,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Phillip Danault</td>
<td>$3,300,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Anthony Beauvillier</td>
<td>$3,000,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Adam Lowry</td>
<td>$2,900,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Tom Wilson</td>
<td>$2,500,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Matthew Nieto</td>
<td>$1,500,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Alex Stalock</td>
<td>$1,250,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Devon Toews</td>
<td>$1,031,250 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Kevin Labanc</td>
<td>$925,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Rasmus Asplund</td>
<td>$925,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Travis Dermott</td>
<td>$863,333 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jonathon Merrill</td>
<td>$850,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Matt Tennyson</td>
<td>$750,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>24</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $95,294,583</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $73,106,250</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $36,625,000</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $28,100,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $95,214,583</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $73,026,250</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $36,545,000</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $28,100,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $95,294,583</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $73,106,250</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $36,625,000</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $28,100,000</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Stephen Johns</td>
<td>$240,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Samuel Morin</td>
<td>$136,333 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jake Bean</td>
<td>$136,333 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Paul Carey</td>
<td>$120,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Casey DeSmith</td>
<td>$115,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Nick Merkley</td>
<td>$107,583 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Taro Hirose</td>
<td>$92,500 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>David Gustafsson</td>
<td>$92,500 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Oscar Dansk</td>
<td>$92,500 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Blake Hillman</td>
<td>$92,500 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Danil Yurtaykin</td>
<td>$92,500 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Steven Santini</td>
<td>$90,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Vitaly Abramov</td>
<td>$88,000 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Tyrell Goulbourne</td>
<td>$77,333 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Rob O'Gara</td>
<td>$75,000 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Zach Trotman</td>
<td>$75,000 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Mathieu Olivier</td>
<td>$73,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Brad Malone</td>
<td>$65,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>18</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $1,861,082</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $1,183,082</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $574,416</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $0</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $1,840,582</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $1,183,082</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $574,416</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $0</td></tr>
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
<tr><td>Level 1: </td><td>6000 - $167 - 6,000 - 100.00%</td></tr>
<tr><td>Level 2: </td><td>5000 - $115 - 5,000 - 100.00%</td></tr>
<tr><td>Level 3: </td><td>4000 - $90 - 3,997 - 99.92%</td></tr>
<tr><td>Level 4: </td><td>3000 - $55 - 3,000 - 100.00%</td></tr>
<tr><td>Luxury : </td><td>1000 - $230 - 1,000 - 100.00%</td></tr>
<tr><td>Total Capacity :</td><td>19000</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Farm Level 1: </td><td>2000 - $45 - 2,000 - 100.00%</td></tr>
<tr><td>Farm Level 2: </td><td>1000 - $0 - 1,000 - 100.00%</td></tr>
<tr><td>Farm Total Capacity :</td><td>3000</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Income">Income</h3></td></tr>
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>18,997 - 99.98%</td></tr>
<tr><td>Average Income per Game</td><td>$2,331,708</td></tr>
<tr><td>Year to Date Revenue</td><td>$18,653,660</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>3,000 - 100.00%</td></tr>
<tr><td>Average Income per Game</td><td>$90,000</td></tr>
<tr><td>Year to Date Revenue</td><td>$270,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>$89,424,166</td></tr>
<tr><td>Farm Players Total Salaries</td><td>$1,607,083</td></tr>
<tr><td>Coaches Total Salaries</td><td>$3,725,000</td></tr>
<tr><td>Luxury Taxe Total</td><td>$0</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>$0</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>$0</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>$0</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>$0</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>$31,613,131</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>$31,613,131</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Alexander Edler</td>
<td>$7,000,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Ryan Strome</td>
<td>$7,000,000 (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Keith Yandle</td>
<td>$6,350,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Brock Nelson</td>
<td>$6,000,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Cam Atkinson</td>
<td>$5,900,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Mike Hoffman</td>
<td>$5,750,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Mikko Koskinen</td>
<td>$4,500,000 (6)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jonas Brodin</td>
<td>$4,200,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Brian Dumoulin</td>
<td>$4,200,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Rasmus Dahlin</td>
<td>$3,775,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Viktor Arvidsson</td>
<td>$3,750,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Bryan Rust</td>
<td>$3,500,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Cal Clutterbuck</td>
<td>$3,500,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Anton Khudobin</td>
<td>$3,000,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Joel Eriksson Ek</td>
<td>$3,000,000 (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Valtteri Filppula</td>
<td>$3,000,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Tyler Ennis</td>
<td>$3,000,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Kevin Fiala</td>
<td>$3,000,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Nathan Beaulieu</td>
<td>$2,250,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Curtis McElhinney</td>
<td>$2,000,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Mark Borowiecki</td>
<td>$1,850,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Filip Zadina</td>
<td>$1,775,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Kailer Yamamoto</td>
<td>$1,124,166 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>23</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $89,424,166</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $59,374,166</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $38,625,000</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $20,500,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $88,524,166</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $58,474,166</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $37,725,000</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $20,500,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $89,424,166</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $59,374,166</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $38,625,000</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $20,500,000</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Jan Rutta</td>
<td>$230,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jordan Weal</td>
<td>$125,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Trey Fix-Wolansky</td>
<td>$92,500 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Brandon Duhaime</td>
<td>$92,500 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Adam Johnson</td>
<td>$92,500 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Mason Shaw</td>
<td>$92,500 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Ross Colton</td>
<td>$92,500 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Joel Hanley</td>
<td>$90,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Byron Froese</td>
<td>$90,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Cameron Gaunce</td>
<td>$84,583 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Michael Hutchinson</td>
<td>$80,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Erik Burgdoerfer</td>
<td>$75,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Brandon Manning</td>
<td>$75,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Luke Gazdic</td>
<td>$75,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Josiah Didier</td>
<td>$75,000 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Dillon Simpson</td>
<td>$75,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Nolan Stevens</td>
<td>$70,000 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>17</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $1,607,083</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $795,000</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $515,000</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $0</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $1,607,083</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $795,000</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $515,000</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $0</td></tr>
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
<tr><td>Level 1: </td><td>6000 - $172 - 0 - 0.00%</td></tr>
<tr><td>Level 2: </td><td>5000 - $124 - 0 - 0.00%</td></tr>
<tr><td>Level 3: </td><td>4000 - $100 - 0 - 0.00%</td></tr>
<tr><td>Level 4: </td><td>3000 - $75 - 0 - 0.00%</td></tr>
<tr><td>Luxury : </td><td>1000 - $260 - 0 - 0.00%</td></tr>
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
<tr><td>Pro Players Total Salaries</td><td>$57,067,498</td></tr>
<tr><td>Farm Players Total Salaries</td><td>$863,585</td></tr>
<tr><td>Coaches Total Salaries</td><td>$3,600,000</td></tr>
<tr><td>Luxury Taxe Total</td><td>$0</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>$0</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>$0</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>$0</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>$0</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>$87,824,603</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>$87,824,603</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Nicklas Backstrom</td>
<td>$9,500,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Phil Kessel</td>
<td>$6,000,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Eric Staal</td>
<td>$6,000,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jordan Eberle</td>
<td>$5,750,000 (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Colton Parayko</td>
<td>$5,300,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Nolan Patrick</td>
<td>$3,575,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Andrei Svechnikov</td>
<td>$3,575,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Colton Sissons</td>
<td>$2,975,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Nick Holden</td>
<td>$2,000,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Lias Andersson</td>
<td>$1,775,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Andrew Cogliano</td>
<td>$1,500,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jake Evans</td>
<td>$1,350,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Henri Jokiharju</td>
<td>$1,279,166 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Travis Sanheim</td>
<td>$1,263,333 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Gustav Lindstrom</td>
<td>$925,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Adin Hill</td>
<td>$925,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Mackenzie Blackwood</td>
<td>$913,333 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Vince Dunn</td>
<td>$888,333 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Morgan Geekie</td>
<td>$800,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Drake Batherson</td>
<td>$773,333 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>20</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $57,067,498</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $44,202,499</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $22,800,000</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $8,725,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $57,067,498</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $44,202,499</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $22,800,000</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $8,725,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $57,067,498</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $44,202,499</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $22,800,000</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $8,725,000</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Juuso Valimaki</td>
<td>$131,917 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Liam Foudy</td>
<td>$126,917 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Adam Werner</td>
<td>$92,500 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Daniel Brickley</td>
<td>$92,500 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Dominic Turgeon</td>
<td>$91,917 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Sami Niku</td>
<td>$91,667 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>John Gilmour</td>
<td>$80,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Nicholas Baptiste</td>
<td>$80,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Kale Clague</td>
<td>$76,167 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>9</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $863,585</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $599,168</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $295,584</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $0</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $863,585</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $599,168</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $295,584</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $0</td></tr>
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
<tr><td>Level 1: </td><td>6000 - $160 - 0 - 0.00%</td></tr>
<tr><td>Level 2: </td><td>5000 - $120 - 0 - 0.00%</td></tr>
<tr><td>Level 3: </td><td>4000 - $95 - 0 - 0.00%</td></tr>
<tr><td>Level 4: </td><td>3000 - $70 - 0 - 0.00%</td></tr>
<tr><td>Luxury : </td><td>1000 - $208 - 0 - 0.00%</td></tr>
<tr><td>Total Capacity :</td><td>19000</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Farm Level 1: </td><td>2000 - $50 - 2,000 - 100.00%</td></tr>
<tr><td>Farm Level 2: </td><td>1000 - $0 - 989 - 98.90%</td></tr>
<tr><td>Farm Total Capacity :</td><td>3000</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Income">Income</h3></td></tr>
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>0 - 0.00%</td></tr>
<tr><td>Average Income per Game</td><td>$0</td></tr>
<tr><td>Year to Date Revenue</td><td>$0</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>2,989 - 99.63%</td></tr>
<tr><td>Average Income per Game</td><td>$100,000</td></tr>
<tr><td>Year to Date Revenue</td><td>$300,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>$62,579,999</td></tr>
<tr><td>Farm Players Total Salaries</td><td>$2,612,668</td></tr>
<tr><td>Coaches Total Salaries</td><td>$5,100,000</td></tr>
<tr><td>Luxury Taxe Total</td><td>$0</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>$0</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>$0</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>$0</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>$0</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>$50,314,826</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>$50,314,826</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>P.K. Subban</td>
<td>$9,500,000 (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Ryan Johansen</td>
<td>$8,000,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Bobby Ryan</td>
<td>$7,000,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Martin Jones</td>
<td>$6,000,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Mike Smith</td>
<td>$5,800,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Mathieu Perreault</td>
<td>$4,500,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jakob Chychrun</td>
<td>$3,950,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Mark Jankowski</td>
<td>$1,700,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Ryan Hartman</td>
<td>$1,575,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Vladislav Gavrikov</td>
<td>$1,350,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Sonny Milano</td>
<td>$1,263,333 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>German Rubtsov</td>
<td>$1,106,666 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Markus Nutivaara</td>
<td>$1,000,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Filip Hronek</td>
<td>$925,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Aleksi Saarela</td>
<td>$925,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Dryden Hunt</td>
<td>$925,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Stelio Mattheos</td>
<td>$925,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Rem Pitlick</td>
<td>$925,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Dominik Kahun</td>
<td>$925,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Filip Gustavsson</td>
<td>$910,833 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Nick Paul</td>
<td>$900,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Marcus Pettersson</td>
<td>$894,167 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Dmitry Sokolov</td>
<td>$830,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Mackenzie MacEachern</td>
<td>$750,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>24</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $62,579,999</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $39,797,499</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $27,272,499</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $9,500,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $62,302,499</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $39,519,999</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $26,994,999</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $9,500,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $62,579,999</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $39,797,499</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $27,272,499</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $9,500,000</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Jack Hughes</td>
<td>$377,500 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Kaapo Kakko</td>
<td>$357,500 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Casey Mittelstadt</td>
<td>$149,167 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Troy Terry</td>
<td>$149,167 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Ryan Donato</td>
<td>$135,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Oliver Kylington</td>
<td>$135,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Nick Suzuki</td>
<td>$132,583 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Matiss Kivlenieks</td>
<td>$106,667 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Nelson Nogier</td>
<td>$97,500 (4)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Sasha Chmelevski</td>
<td>$92,750 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Egor Sharangovich</td>
<td>$92,500 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Alexander Volkov</td>
<td>$92,500 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Philipp Kurashev</td>
<td>$92,500 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Mitchell Stephens</td>
<td>$91,917 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jakub Skarek</td>
<td>$91,333 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Kirill Maksimov</td>
<td>$87,917 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Alex Alexeyev</td>
<td>$86,333 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Axel Jonsson-Fjallby</td>
<td>$86,000 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Christian Jaros</td>
<td>$80,167 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Otto Koivula</td>
<td>$78,667 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jesse Puljujarvi</td>
<td>$0 (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Michael Mersch</td>
<td>$0 (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>22</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $2,612,668</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $2,290,834</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $1,857,500</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $97,500</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $1,942,170</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $1,674,503</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $1,241,169</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $97,500</td></tr>
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
<tr><td>Level 1: </td><td>6000 - $211 - 4,703 - 78.39%</td></tr>
<tr><td>Level 2: </td><td>5000 - $155 - 3,710 - 74.20%</td></tr>
<tr><td>Level 3: </td><td>4000 - $125 - 3,179 - 79.47%</td></tr>
<tr><td>Level 4: </td><td>3000 - $100 - 2,169 - 72.30%</td></tr>
<tr><td>Luxury : </td><td>1000 - $280 - 878 - 87.78%</td></tr>
<tr><td>Total Capacity :</td><td>19000</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Farm Level 1: </td><td>2000 - $19 - 0 - 0.00%</td></tr>
<tr><td>Farm Level 2: </td><td>1000 - $0 - 0 - 0.00%</td></tr>
<tr><td>Farm Total Capacity :</td><td>3000</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Income">Income</h3></td></tr>
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>14,639 - 77.05%</td></tr>
<tr><td>Average Income per Game</td><td>$2,427,434</td></tr>
<tr><td>Year to Date Revenue</td><td>$12,137,171</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>0 - 0.00%</td></tr>
<tr><td>Average Income per Game</td><td>$0</td></tr>
<tr><td>Year to Date Revenue</td><td>$0</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>$83,422,499</td></tr>
<tr><td>Farm Players Total Salaries</td><td>$812,500</td></tr>
<tr><td>Coaches Total Salaries</td><td>$2,150,000</td></tr>
<tr><td>Luxury Taxe Total</td><td>$0</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>$0</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>$0</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>$0</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>$0</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>$123,110,342</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>$123,110,342</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Steven Stamkos</td>
<td>$9,500,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Victor Hedman</td>
<td>$8,000,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Ryan O'Reilly</td>
<td>$7,750,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jakub Voracek</td>
<td>$7,750,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Alexander Radulov</td>
<td>$6,250,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jonathan Huberdeau</td>
<td>$6,000,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Ryan Pulock</td>
<td>$5,150,000 (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Calvin de Haan</td>
<td>$4,550,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Philipp Grubauer</td>
<td>$3,330,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Mark Pysyk</td>
<td>$3,000,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Cale Makar</td>
<td>$2,854,166 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Zack Smith</td>
<td>$2,750,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Scott Laughton</td>
<td>$2,300,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Greg Pateryn</td>
<td>$2,250,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Calle Jarnkrok</td>
<td>$2,250,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Connor Brown</td>
<td>$2,100,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Austin Watson</td>
<td>$1,650,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Mathew Barzal</td>
<td>$1,263,333 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Carter Hutton</td>
<td>$1,250,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Boo Nieves</td>
<td>$925,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Tom Kuhnhackl</td>
<td>$900,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Alan Quine</td>
<td>$850,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Michael Stone</td>
<td>$800,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>23</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $83,422,499</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $64,084,166</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $48,754,166</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $12,900,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $81,449,167</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $62,110,834</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $46,780,834</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $12,900,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $83,422,499</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $64,084,166</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $48,754,166</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $12,900,000</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Taylor Leier</td>
<td>$80,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Max McCormick</td>
<td>$80,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Curtis McKenzie</td>
<td>$80,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Matt Moulson</td>
<td>$80,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Daniel Carr</td>
<td>$75,000 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Brett Lernout</td>
<td>$75,000 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Chase De Leo</td>
<td>$75,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Luke Witkowski</td>
<td>$70,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Kevin Czuczman</td>
<td>$70,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Joe Hicketts</td>
<td>$65,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Martin Ouellette</td>
<td>$62,500 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>11</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $812,500</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $592,500</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $150,000</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $0</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $812,500</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $592,500</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $150,000</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $0</td></tr>
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
<tr><td>Level 1: </td><td>6000 - $130 - 0 - 0.00%</td></tr>
<tr><td>Level 2: </td><td>5000 - $80 - 0 - 0.00%</td></tr>
<tr><td>Level 3: </td><td>4000 - $60 - 0 - 0.00%</td></tr>
<tr><td>Level 4: </td><td>3000 - $50 - 0 - 0.00%</td></tr>
<tr><td>Luxury : </td><td>1000 - $275 - 0 - 0.00%</td></tr>
<tr><td>Total Capacity :</td><td>19000</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Farm Level 1: </td><td>2000 - $33 - 2,000 - 100.00%</td></tr>
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
<tr><td>Average Income per Game</td><td>$66,000</td></tr>
<tr><td>Year to Date Revenue</td><td>$132,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>$86,776,666</td></tr>
<tr><td>Farm Players Total Salaries</td><td>$2,674,833</td></tr>
<tr><td>Coaches Total Salaries</td><td>$1,650,000</td></tr>
<tr><td>Luxury Taxe Total</td><td>$0</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>$0</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>$0</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>$0</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>$0</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>$13,545,590</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>$13,545,590</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Matthew Tkachuk</td>
<td>$8,800,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jeff Skinner</td>
<td>$6,750,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Kevin Shattenkirk</td>
<td>$6,500,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Paul Stastny</td>
<td>$6,500,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Sami Vatanen</td>
<td>$6,000,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Nate Schmidt</td>
<td>$5,625,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Alexander Wennberg</td>
<td>$5,000,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Olli Maatta</td>
<td>$4,085,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Joonas Donskoi</td>
<td>$3,900,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Leo Komarov</td>
<td>$3,800,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Matt Murray</td>
<td>$3,750,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Joonas Korpisalo</td>
<td>$3,500,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jesperi Kotkaniemi</td>
<td>$3,425,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Miro Heiskanen</td>
<td>$3,394,166 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Casey Cizikas</td>
<td>$3,300,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Kasperi Kapanen</td>
<td>$3,200,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Juuse Saros</td>
<td>$2,500,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Barclay Goodrow</td>
<td>$1,500,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Ryan Lindgren</td>
<td>$1,100,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Roope Hintz</td>
<td>$925,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Mike Reilly</td>
<td>$900,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Adam Erne</td>
<td>$850,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Dale Weise</td>
<td>$750,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Joel L'Esperance</td>
<td>$722,500 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>24</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $86,776,666</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $71,919,166</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $47,575,000</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $13,125,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $86,776,666</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $71,919,166</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $47,575,000</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $13,125,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $86,776,666</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $71,919,166</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $47,575,000</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $13,125,000</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Alex Chiasson</td>
<td>$320,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Eeli Tolvanen</td>
<td>$311,500 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Olli Juolevi</td>
<td>$191,333 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Scott Wilson</td>
<td>$120,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Rasmus Kupari</td>
<td>$108,167 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Juuso Riikola</td>
<td>$100,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Veini Vehvilainen</td>
<td>$92,500 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Lukas Vejdemo</td>
<td>$92,500 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Matheson Iacopelli</td>
<td>$92,500 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Julius Honka</td>
<td>$92,500 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Joona Koppanen</td>
<td>$91,083 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Eetu Luostarinen</td>
<td>$89,750 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Brett Pollock</td>
<td>$89,417 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>John Quenneville</td>
<td>$89,417 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Taylor Raddysh</td>
<td>$89,417 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Ryan Gropp</td>
<td>$88,833 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Guillaume Brisebois</td>
<td>$88,833 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Markus Hannikainen</td>
<td>$82,500 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jeremy Helvig</td>
<td>$78,500 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>David Kase</td>
<td>$76,833 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jansen Harkins</td>
<td>$76,750 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Beck Malenstyn</td>
<td>$73,667 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Clark Bishop</td>
<td>$71,333 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Brian Strait</td>
<td>$67,500 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>24</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $2,674,833</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $1,580,833</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $1,331,250</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $0</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $2,661,583</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $1,567,583</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $1,318,000</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $0</td></tr>
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
<tr><td>Level 1: </td><td>6000 - $150 - 0 - 0.00%</td></tr>
<tr><td>Level 2: </td><td>5000 - $120 - 0 - 0.00%</td></tr>
<tr><td>Level 3: </td><td>4000 - $90 - 0 - 0.00%</td></tr>
<tr><td>Level 4: </td><td>3000 - $65 - 0 - 0.00%</td></tr>
<tr><td>Luxury : </td><td>1000 - $250 - 0 - 0.00%</td></tr>
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
<tr><td>Pro Players Total Salaries</td><td>$86,192,167</td></tr>
<tr><td>Farm Players Total Salaries</td><td>$713,833</td></tr>
<tr><td>Coaches Total Salaries</td><td>$4,200,000</td></tr>
<tr><td>Luxury Taxe Total</td><td>$0</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>$0</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>$0</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>$0</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>$0</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>$30,023,779</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>$30,023,779</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Alex Ovechkin</td>
<td>$12,500,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Nathan MacKinnon</td>
<td>$10,000,000 (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Mitch Marner</td>
<td>$9,500,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Seth Jones</td>
<td>$7,500,000 (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Ryan McDonagh</td>
<td>$7,100,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Devan Dubnyk</td>
<td>$5,500,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Elias Lindholm</td>
<td>$4,850,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Travis Hamonic</td>
<td>$4,500,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Boone Jenner</td>
<td>$3,750,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Josh Anderson</td>
<td>$3,000,000 (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Adam Pelech</td>
<td>$2,850,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Alex Galchenyuk</td>
<td>$1,850,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Andreas Borgman</td>
<td>$1,775,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Neal Pionk</td>
<td>$1,775,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Brock Boeser</td>
<td>$1,491,667 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jordan Greenway</td>
<td>$1,255,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Joe Thornton</td>
<td>$1,000,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Pierre Engvall</td>
<td>$925,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jordan Binnington</td>
<td>$903,333 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Riley Nash</td>
<td>$900,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Robert Hagg</td>
<td>$894,167 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Nicolas Roy</td>
<td>$815,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Matt Hunwick</td>
<td>$800,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Mason Appleton</td>
<td>$758,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>24</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $86,192,167</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $75,848,333</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $59,040,000</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $27,600,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $86,097,167</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $75,753,333</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $58,945,000</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $27,600,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $86,192,167</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $75,848,333</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $59,040,000</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $27,600,000</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Calle Rosen</td>
<td>$177,500 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Kyle Clifford</td>
<td>$150,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Timothy Liljegren</td>
<td>$126,333 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Antoine Bibeau</td>
<td>$92,500 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Christian Wolanin</td>
<td>$92,500 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Ryan Kujawinski</td>
<td>$75,000 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>6</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $713,833</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $386,333</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $201,333</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $0</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $621,333</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $293,833</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $201,333</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $0</td></tr>
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
<tr><td>Level 1: </td><td>6000 - $154 - 6,000 - 100.00%</td></tr>
<tr><td>Level 2: </td><td>5000 - $100 - 4,996 - 99.92%</td></tr>
<tr><td>Level 3: </td><td>4000 - $78 - 4,000 - 100.00%</td></tr>
<tr><td>Level 4: </td><td>3000 - $63 - 2,994 - 99.78%</td></tr>
<tr><td>Luxury : </td><td>1000 - $244 - 995 - 99.47%</td></tr>
<tr><td>Total Capacity :</td><td>19000</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Farm Level 1: </td><td>2000 - $30 - 0 - 0.00%</td></tr>
<tr><td>Farm Level 2: </td><td>1000 - $0 - 0 - 0.00%</td></tr>
<tr><td>Farm Total Capacity :</td><td>3000</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Income">Income</h3></td></tr>
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>18,984 - 99.92%</td></tr>
<tr><td>Average Income per Game</td><td>$2,166,873</td></tr>
<tr><td>Year to Date Revenue</td><td>$13,001,235</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>0 - 0.00%</td></tr>
<tr><td>Average Income per Game</td><td>$0</td></tr>
<tr><td>Year to Date Revenue</td><td>$0</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>$83,660,833</td></tr>
<tr><td>Farm Players Total Salaries</td><td>$684,916</td></tr>
<tr><td>Coaches Total Salaries</td><td>$2,200,000</td></tr>
<tr><td>Luxury Taxe Total</td><td>$0</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>$0</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>$0</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>$0</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>$0</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>$27,441,784</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>$27,441,784</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>John Tavares</td>
<td>$11,000,000 (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Connor Hellebuyck</td>
<td>$7,000,000 (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Evander Kane</td>
<td>$7,000,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Vincent Trocheck</td>
<td>$5,500,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Esa Lindell</td>
<td>$5,200,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Kris Russell</td>
<td>$5,000,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Ryan Murray</td>
<td>$4,600,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>John Klingberg</td>
<td>$4,500,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Craig Smith</td>
<td>$4,000,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Marco Scandella</td>
<td>$4,000,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Tanner Pearson</td>
<td>$4,000,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Luca Sbisa (Out of Payroll)</td>
<td>$3,750,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Derick Brassard</td>
<td>$3,250,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Brian Elliott</td>
<td>$3,250,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Nic Dowd</td>
<td>$2,750,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Marcus Foligno</td>
<td>$2,250,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Tim Schaller</td>
<td>$1,850,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Brett Kulak</td>
<td>$1,850,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Josh Archibald</td>
<td>$1,600,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Tyler Motte</td>
<td>$1,500,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Oskar Lindblom</td>
<td>$1,137,500 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Kevin Boyle</td>
<td>$975,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Riley Stillman</td>
<td>$773,333 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Colin Blackwell</td>
<td>$675,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>24</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $87,410,833</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $78,650,000</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $43,450,000</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $33,450,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $87,410,833</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $78,650,000</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $43,450,000</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $33,450,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $87,410,833</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $78,650,000</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $43,450,000</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $33,450,000</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Colton White</td>
<td>$93,583 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Matt Tomkins</td>
<td>$92,500 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jan Drozg</td>
<td>$92,500 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Seth Helgeson</td>
<td>$90,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Miikka Salomaki</td>
<td>$90,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Morgan Klimchuk</td>
<td>$86,333 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Francois Brassard</td>
<td>$70,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Josh Teves</td>
<td>$70,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>8</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $684,916</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $186,083</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $92,500</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $0</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $684,916</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $186,083</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $92,500</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $0</td></tr>
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
<tr><td>Level 1: </td><td>6000 - $166 - 6,000 - 100.00%</td></tr>
<tr><td>Level 2: </td><td>5000 - $136 - 4,294 - 85.87%</td></tr>
<tr><td>Level 3: </td><td>4000 - $116 - 2,981 - 74.51%</td></tr>
<tr><td>Level 4: </td><td>3000 - $65 - 2,994 - 99.80%</td></tr>
<tr><td>Luxury : </td><td>1000 - $250 - 993 - 99.25%</td></tr>
<tr><td>Total Capacity :</td><td>19000</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Farm Level 1: </td><td>2000 - $35 - 2,000 - 100.00%</td></tr>
<tr><td>Farm Level 2: </td><td>1000 - $0 - 988 - 98.80%</td></tr>
<tr><td>Farm Total Capacity :</td><td>3000</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Income">Income</h3></td></tr>
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>17,261 - 90.84%</td></tr>
<tr><td>Average Income per Game</td><td>$2,368,389</td></tr>
<tr><td>Year to Date Revenue</td><td>$4,736,778</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>2,988 - 99.60%</td></tr>
<tr><td>Average Income per Game</td><td>$70,000</td></tr>
<tr><td>Year to Date Revenue</td><td>$420,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>$84,534,666</td></tr>
<tr><td>Farm Players Total Salaries</td><td>$2,344,784</td></tr>
<tr><td>Coaches Total Salaries</td><td>$5,750,000</td></tr>
<tr><td>Luxury Taxe Total</td><td>$0</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>$0</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>$0</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>$0</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>$0</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>$150,089,521</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>$150,089,521</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Alex Pietrangelo</td>
<td>$8,250,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>David Krejci</td>
<td>$6,750,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>John Carlson</td>
<td>$6,500,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jaden Schwartz</td>
<td>$5,600,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Tomas Hertl</td>
<td>$5,500,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Nick Leddy</td>
<td>$5,500,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Brandon Saad</td>
<td>$5,500,000 (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Shea Theodore</td>
<td>$5,200,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Frederik Andersen</td>
<td>$5,000,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Tyler Toffoli</td>
<td>$4,800,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Johnny Boychuk</td>
<td>$4,000,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Christian Dvorak</td>
<td>$4,000,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Frank Vatrano</td>
<td>$2,533,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Radek Faksa</td>
<td>$2,500,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Troy Stecher</td>
<td>$2,400,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jack Campbell</td>
<td>$2,000,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Sam Bennett</td>
<td>$2,000,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Sean Kuraly</td>
<td>$1,650,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jake Debrusk</td>
<td>$1,288,333 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Colin Miller</td>
<td>$1,100,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Brett Howden</td>
<td>$863,333 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Ryan Reaves</td>
<td>$850,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jarred Tinordi</td>
<td>$750,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>23</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $84,534,666</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $60,746,333</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $29,900,000</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $21,650,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $84,534,666</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $60,746,333</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $29,900,000</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $21,650,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $84,534,666</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $60,746,333</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $29,900,000</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $21,650,000</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Barrett Hayton</td>
<td>$264,417 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Cody Glass</td>
<td>$171,333 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jeremy Davies</td>
<td>$132,500 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Martin Kaut</td>
<td>$131,917 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Joseph Cecconi</td>
<td>$129,375 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jeremy Bracco</td>
<td>$92,500 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Dylan Wells</td>
<td>$91,083 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Adam Mascherin</td>
<td>$88,000 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Brandon Crawley</td>
<td>$86,667 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Nic Hague</td>
<td>$86,333 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jonathan Davidsson</td>
<td>$85,000 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Spencer Smallman</td>
<td>$75,833 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Keaton Middleton</td>
<td>$75,000 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Steven Lorentz</td>
<td>$72,833 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Oleg Sosunov</td>
<td>$72,160 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Sean Day</td>
<td>$70,000 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Calvin Pickard</td>
<td>$70,000 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Liam O'Brien</td>
<td>$70,000 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Emile Poirier</td>
<td>$70,000 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Tyler Gaudet</td>
<td>$70,000 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Justin Auger</td>
<td>$70,000 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jared Coreau</td>
<td>$70,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Stepan Falkovsky</td>
<td>$69,833 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Cody Goloubef</td>
<td>$65,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Ryan Stanton</td>
<td>$65,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>25</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $2,344,784</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $2,214,784</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $1,812,535</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $0</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $2,255,701</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $2,125,701</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $1,723,452</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $0</td></tr>
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
<tr><td>Level 1: </td><td>6000 - $180 - 5,414 - 90.24%</td></tr>
<tr><td>Level 2: </td><td>5000 - $135 - 4,261 - 85.23%</td></tr>
<tr><td>Level 3: </td><td>4000 - $105 - 3,621 - 90.53%</td></tr>
<tr><td>Level 4: </td><td>3000 - $80 - 2,618 - 87.27%</td></tr>
<tr><td>Luxury : </td><td>1000 - $265 - 944 - 94.40%</td></tr>
<tr><td>Total Capacity :</td><td>19000</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Farm Level 1: </td><td>2000 - $70 - 1,754 - 87.71%</td></tr>
<tr><td>Farm Level 2: </td><td>1000 - $0 - 997 - 99.69%</td></tr>
<tr><td>Farm Total Capacity :</td><td>3000</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Income">Income</h3></td></tr>
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>16,859 - 88.73%</td></tr>
<tr><td>Average Income per Game</td><td>$2,389,702</td></tr>
<tr><td>Year to Date Revenue</td><td>$11,948,510</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>2,751 - 91.70%</td></tr>
<tr><td>Average Income per Game</td><td>$122,798</td></tr>
<tr><td>Year to Date Revenue</td><td>$982,380</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>$76,286,226</td></tr>
<tr><td>Farm Players Total Salaries</td><td>$3,082,917</td></tr>
<tr><td>Coaches Total Salaries</td><td>$5,600,000</td></tr>
<tr><td>Luxury Taxe Total</td><td>$0</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>$0</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>$0</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>$0</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>$0</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>$144,856,370</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>$144,856,370</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Blake Wheeler</td>
<td>$8,500,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Shea Weber</td>
<td>$8,200,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Ryan Nugent-Hopkins</td>
<td>$7,250,000 (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Dustin Brown</td>
<td>$6,500,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>John Gibson</td>
<td>$6,000,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jeff Petry</td>
<td>$6,000,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Tyler Bertuzzi</td>
<td>$5,600,000 (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Mikael Granlund</td>
<td>$5,000,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Mattias Ekholm</td>
<td>$5,000,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Nick Schmaltz</td>
<td>$4,250,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Lars Eller (Out of Payroll)</td>
<td>$4,000,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jamie Oleksiak</td>
<td>$2,500,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Elvis Merzlikins</td>
<td>$1,844,559 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Luke Glendening</td>
<td>$1,800,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Noel Acciari</td>
<td>$1,666,667 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Chris Wagner</td>
<td>$1,500,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Ryan Graves</td>
<td>$1,000,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Marian Studenic</td>
<td>$925,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Brandon Montour</td>
<td>$925,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Rhett Gardner</td>
<td>$925,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Alex Biega</td>
<td>$900,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>21</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $80,286,226</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $72,311,226</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $49,800,000</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $29,850,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $79,315,792</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $71,340,792</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $49,800,000</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $29,850,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $80,286,226</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $72,311,226</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $49,800,000</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $29,850,000</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Corey Perry</td>
<td>$815,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Noah Hanifin</td>
<td>$400,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Zach Whitecloud</td>
<td>$149,167 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Adam Gaudette</td>
<td>$149,167 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Luke Kunin</td>
<td>$142,500 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jordan Schmaltz</td>
<td>$120,833 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Buddy Robinson</td>
<td>$100,000 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Eric Robinson</td>
<td>$97,500 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Anthony Cirelli</td>
<td>$93,583 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Dennis Gilbert</td>
<td>$92,500 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>John Hayden</td>
<td>$92,500 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Dominic Toninato</td>
<td>$92,500 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Joey Anderson</td>
<td>$92,500 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Givani Smith</td>
<td>$91,333 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Zane McIntyre</td>
<td>$90,000 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jeremy Lauzon</td>
<td>$87,167 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Brian Lashoff</td>
<td>$82,500 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Christopher Brown</td>
<td>$75,000 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Max Willman</td>
<td>$75,000 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Patrick Brown</td>
<td>$72,500 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Kaden Fulcher</td>
<td>$71,667 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>21</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $3,082,917</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $1,319,334</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $513,833</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $0</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $3,082,917</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $1,319,334</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $513,833</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $0</td></tr>
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
<tr><td>Level 1: </td><td>6000 - $164 - 6,000 - 100.00%</td></tr>
<tr><td>Level 2: </td><td>5000 - $119 - 5,000 - 100.00%</td></tr>
<tr><td>Level 3: </td><td>4000 - $89 - 3,941 - 98.53%</td></tr>
<tr><td>Level 4: </td><td>3000 - $64 - 3,000 - 100.00%</td></tr>
<tr><td>Luxury : </td><td>1000 - $249 - 1,000 - 100.00%</td></tr>
<tr><td>Total Capacity :</td><td>19000</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Farm Level 1: </td><td>2000 - $55 - 2,000 - 100.00%</td></tr>
<tr><td>Farm Level 2: </td><td>1000 - $0 - 1,000 - 100.00%</td></tr>
<tr><td>Farm Total Capacity :</td><td>3000</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Income">Income</h3></td></tr>
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>18,941 - 99.69%</td></tr>
<tr><td>Average Income per Game</td><td>$2,370,749</td></tr>
<tr><td>Year to Date Revenue</td><td>$4,741,498</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>3,000 - 100.00%</td></tr>
<tr><td>Average Income per Game</td><td>$97,200</td></tr>
<tr><td>Year to Date Revenue</td><td>$972,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>$76,250,000</td></tr>
<tr><td>Farm Players Total Salaries</td><td>$2,357,771</td></tr>
<tr><td>Coaches Total Salaries</td><td>$4,450,000</td></tr>
<tr><td>Luxury Taxe Total</td><td>$0</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>$0</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>$0</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>$0</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>$0</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>$78,652,715</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>$78,652,715</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Tyler Seguin</td>
<td>$9,000,000 (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Max Domi</td>
<td>$6,000,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Tyler Bozak</td>
<td>$6,000,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Josh Bailey</td>
<td>$6,000,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Carl Soderberg</td>
<td>$5,250,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Marcus Johansson</td>
<td>$5,000,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jaroslav Halak</td>
<td>$4,500,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Cody Eakin</td>
<td>$4,250,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Damon Severson</td>
<td>$4,200,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Rasmus Andersson</td>
<td>$3,900,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Darren Helm</td>
<td>$3,750,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jonathan Ericsson</td>
<td>$3,000,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>David Rittich</td>
<td>$3,000,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Josh Leivo</td>
<td>$2,000,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Xavier Ouellet</td>
<td>$1,400,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Derrick Pouliot</td>
<td>$1,300,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Martin Marincin</td>
<td>$1,050,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>C.J. Smith</td>
<td>$1,000,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Scott Harrington</td>
<td>$1,000,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Danny O'Regan</td>
<td>$1,000,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Brendan Guhle</td>
<td>$1,000,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Vinni Lettieri</td>
<td>$925,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Carl Dahlstrom</td>
<td>$925,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Victor Rask</td>
<td>$800,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>24</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $76,250,000</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $51,200,000</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $27,650,000</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $18,900,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $75,775,000</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $50,725,000</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $27,650,000</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $18,900,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $76,250,000</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $51,200,000</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $27,650,000</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $18,900,000</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Michael Dal Colle</td>
<td>$306,333 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Ilya Sorokin</td>
<td>$200,000 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Alexander Nylander</td>
<td>$177,500 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Emil Bemstrom</td>
<td>$163,333 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Martin Necas</td>
<td>$146,200 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Erik Brannstrom</td>
<td>$137,500 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Michael McCarron</td>
<td>$107,600 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Cooper Marody</td>
<td>$100,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jake Oettinger</td>
<td>$92,500 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Lucas Carlsson</td>
<td>$92,500 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Matthew Highmore</td>
<td>$92,500 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Luke Johnson</td>
<td>$92,500 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Sam Steel</td>
<td>$92,500 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Max Jones</td>
<td>$86,333 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Parker Wotherspoon</td>
<td>$85,472 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Alexandre Carrier</td>
<td>$80,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Trevor Lewis</td>
<td>$80,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Tyler Wotherspoon</td>
<td>$80,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Dan Vladar</td>
<td>$75,000 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Dan Renouf</td>
<td>$70,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>20</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $2,357,771</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $1,997,671</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $1,077,505</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $0</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $2,168,822</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $1,808,722</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $888,556</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $0</td></tr>
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
<tr><td>Level 1: </td><td>6000 - $210 - 0 - 0.00%</td></tr>
<tr><td>Level 2: </td><td>5000 - $155 - 0 - 0.00%</td></tr>
<tr><td>Level 3: </td><td>4000 - $125 - 0 - 0.00%</td></tr>
<tr><td>Level 4: </td><td>3000 - $100 - 0 - 0.00%</td></tr>
<tr><td>Luxury : </td><td>1000 - $300 - 0 - 0.00%</td></tr>
<tr><td>Total Capacity :</td><td>19000</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Farm Level 1: </td><td>2000 - $85 - 1,331 - 66.55%</td></tr>
<tr><td>Farm Level 2: </td><td>1000 - $0 - 997 - 99.70%</td></tr>
<tr><td>Farm Total Capacity :</td><td>3000</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Income">Income</h3></td></tr>
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>0 - 0.00%</td></tr>
<tr><td>Average Income per Game</td><td>$0</td></tr>
<tr><td>Year to Date Revenue</td><td>$0</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>2,328 - 77.60%</td></tr>
<tr><td>Average Income per Game</td><td>$113,135</td></tr>
<tr><td>Year to Date Revenue</td><td>$339,405</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>$72,069,167</td></tr>
<tr><td>Farm Players Total Salaries</td><td>$1,415,016</td></tr>
<tr><td>Coaches Total Salaries</td><td>$1,700,000</td></tr>
<tr><td>Luxury Taxe Total</td><td>$0</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>$0</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>$0</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>$0</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>$0</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>$91,771,824</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>$91,771,824</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>James van Riemsdyk</td>
<td>$8,750,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Nick Foligno</td>
<td>$6,750,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Cam Fowler</td>
<td>$6,500,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Semyon Varlamov</td>
<td>$6,000,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Frans Nielsen</td>
<td>$5,650,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jake Gardiner</td>
<td>$5,000,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Dmitry Kulikov</td>
<td>$4,250,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Pat Maroon</td>
<td>$3,950,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Brady Tkachuk</td>
<td>$3,425,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Sven Baertschi</td>
<td>$3,000,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Evan Rodrigues</td>
<td>$2,250,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Sam Gagner</td>
<td>$2,200,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jordan Martinook</td>
<td>$2,000,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Austin Czarnik</td>
<td>$2,000,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Robert Bortuzzo</td>
<td>$1,750,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jordan Oesterle</td>
<td>$1,750,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Connor Carrick</td>
<td>$1,650,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Nick Cousins</td>
<td>$1,650,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Anton Forsberg</td>
<td>$1,000,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Ilya Mikheyev</td>
<td>$925,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Roland McKeown</td>
<td>$894,167 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Christopher Gibson</td>
<td>$725,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>22</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $72,069,167</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $53,244,167</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $30,400,000</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $8,750,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $70,744,167</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $52,319,167</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $29,475,000</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $8,750,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $72,069,167</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $53,244,167</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $30,400,000</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $8,750,000</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Micheal Ferland</td>
<td>$325,000 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Michael Rasmussen</td>
<td>$171,083 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Tyson Jost</td>
<td>$167,333 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Dante Fabbro</td>
<td>$149,100 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Tomas Jurco</td>
<td>$95,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Gabriel Gagne</td>
<td>$75,000 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Steven Fogarty</td>
<td>$75,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Aaron Ness</td>
<td>$75,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Anthony Greco</td>
<td>$72,500 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Tom McCollum</td>
<td>$70,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Matej Tomek</td>
<td>$70,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Alexandre Fortin</td>
<td>$70,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>12</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $1,415,016</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $935,183</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $549,100</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $0</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $1,358,416</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $878,583</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $492,500</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $0</td></tr>
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
<tr><td>Level 1: </td><td>6000 - $225 - 4,692 - 78.20%</td></tr>
<tr><td>Level 2: </td><td>5000 - $165 - 3,988 - 79.75%</td></tr>
<tr><td>Level 3: </td><td>4000 - $135 - 3,009 - 75.23%</td></tr>
<tr><td>Level 4: </td><td>3000 - $100 - 2,257 - 75.23%</td></tr>
<tr><td>Luxury : </td><td>1000 - $300 - 885 - 88.50%</td></tr>
<tr><td>Total Capacity :</td><td>19000</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Farm Level 1: </td><td>2000 - $100 - 1,341 - 67.06%</td></tr>
<tr><td>Farm Level 2: </td><td>1000 - $0 - 996 - 99.64%</td></tr>
<tr><td>Farm Total Capacity :</td><td>3000</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Income">Income</h3></td></tr>
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>14,831 - 78.06%</td></tr>
<tr><td>Average Income per Game</td><td>$2,611,094</td></tr>
<tr><td>Year to Date Revenue</td><td>$23,499,850</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>2,338 - 77.92%</td></tr>
<tr><td>Average Income per Game</td><td>$134,122</td></tr>
<tr><td>Year to Date Revenue</td><td>$1,207,100</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>$86,630,000</td></tr>
<tr><td>Farm Players Total Salaries</td><td>$1,800,784</td></tr>
<tr><td>Coaches Total Salaries</td><td>$3,900,000</td></tr>
<tr><td>Luxury Taxe Total</td><td>$0</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>$0</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>$0</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>$0</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>$0</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>$175,224,701</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>$175,224,701</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Carey Price</td>
<td>$10,000,000 (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Logan Couture</td>
<td>$7,250,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Alex Killorn</td>
<td>$7,125,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jack Johnson</td>
<td>$7,000,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Reilly Smith</td>
<td>$6,500,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Adam Henrique</td>
<td>$6,500,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Deryk Engelland</td>
<td>$6,000,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Sam Reinhart</td>
<td>$5,500,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Zach Bogosian</td>
<td>$5,060,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Oscar Klefbom</td>
<td>$5,000,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Brandon Sutter</td>
<td>$4,125,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Andreas Athanasiou</td>
<td>$3,700,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Kevan Miller</td>
<td>$2,850,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Dominik Kubalik</td>
<td>$1,775,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Ryan Dzingel</td>
<td>$1,700,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Alex Tuch</td>
<td>$1,350,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Danton Heinen</td>
<td>$995,833 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Troy Grosenick</td>
<td>$950,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Adrian Kempe</td>
<td>$894,167 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Erik Cernak</td>
<td>$890,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jayson Megna</td>
<td>$750,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Gage Quinney</td>
<td>$715,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>22</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $86,630,000</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $48,190,000</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $37,400,000</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $23,625,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $85,590,005</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $47,340,005</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $36,550,005</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $23,625,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $86,630,000</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $48,190,000</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $37,400,000</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $23,625,000</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Kevin Connauton</td>
<td>$157,500 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Gaetan Haas</td>
<td>$156,200 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Pheonix Copley</td>
<td>$125,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Lean Bergmann</td>
<td>$92,500 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Stefan Matteau</td>
<td>$92,500 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Brandon Gignac</td>
<td>$92,167 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Dennis Cholowski</td>
<td>$89,417 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Morgan Frost</td>
<td>$86,333 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>J.C. Beaudin</td>
<td>$81,667 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Greg Carey</td>
<td>$80,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Joseph Woll</td>
<td>$80,000 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Justin Dowling</td>
<td>$75,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Austin Poganski</td>
<td>$75,000 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Aaron Harstad</td>
<td>$75,000 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Dennis Robertson</td>
<td>$75,000 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Julius Bergman</td>
<td>$75,000 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Adam Musil</td>
<td>$75,000 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Logan Shaw</td>
<td>$72,500 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Nick Lappin</td>
<td>$72,500 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Stuart Percy</td>
<td>$72,500 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>20</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $1,800,784</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $1,319,584</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $715,167</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $0</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $1,683,084</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $1,305,584</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $710,000</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $0</td></tr>
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
<tr><td>Pro Players Total Salaries</td><td>$76,203,333</td></tr>
<tr><td>Farm Players Total Salaries</td><td>$616,500</td></tr>
<tr><td>Coaches Total Salaries</td><td>$5,900,000</td></tr>
<tr><td>Luxury Taxe Total</td><td>$0</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>$0</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>$0</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>$0</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>$0</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>$42,144,744</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>$42,144,744</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Claude Giroux</td>
<td>$8,660,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Marc-Andre Fleury</td>
<td>$8,300,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Mark Stone</td>
<td>$8,000,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Roman Josi</td>
<td>$8,000,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Gabriel Landeskog</td>
<td>$6,750,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Kyle Palmieri</td>
<td>$4,650,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Charlie Coyle</td>
<td>$4,500,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Brenden Dillon</td>
<td>$3,270,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Robby Fabbri</td>
<td>$2,950,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jesper Bratt</td>
<td>$2,850,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Milan Lucic</td>
<td>$2,250,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Andrej Sekera</td>
<td>$2,000,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Erik Gustafsson</td>
<td>$2,000,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>John Marino</td>
<td>$1,775,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Brad Richardson</td>
<td>$1,500,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Colin White</td>
<td>$1,491,667 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Matt Grzelcyk</td>
<td>$1,400,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Artturi Lehkonen</td>
<td>$1,350,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jack Roslovic</td>
<td>$1,106,666 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Melker Karlsson</td>
<td>$1,100,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Marcus Sorensen</td>
<td>$900,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Chad Ruhwedel</td>
<td>$700,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jean-Francois Berube</td>
<td>$700,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>23</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $76,203,333</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $62,176,667</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $41,235,000</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $12,500,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $75,353,335</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $61,326,669</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $40,385,002</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $12,500,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $76,203,333</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $62,176,667</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $41,235,000</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $12,500,000</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Brendan Perlini</td>
<td>$150,000 (4)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Ian McCoshen</td>
<td>$102,500 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Charlie Lindgren</td>
<td>$100,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Kevin Roy</td>
<td>$92,500 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Cory Schneider</td>
<td>$90,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Caleb Jones</td>
<td>$81,500 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>6</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $616,500</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $321,500</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $150,000</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $150,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $616,500</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $321,500</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $150,000</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $150,000</td></tr>
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
<tr><td class="STHSW250">Arena Name</td><td class="STHSW200">Little Caesars Arena</td></tr>
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
<tr><td>Pro Players Total Salaries</td><td>$80,408,332</td></tr>
<tr><td>Farm Players Total Salaries</td><td>$1,445,167</td></tr>
<tr><td>Coaches Total Salaries</td><td>$2,275,000</td></tr>
<tr><td>Luxury Taxe Total</td><td>$0</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>$0</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>$0</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>$0</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>$0</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>$41,081</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>$41,081</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Connor McDavid</td>
<td>$12,750,000 (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Brayden Point</td>
<td>$8,500,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Patrik Laine</td>
<td>$8,475,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Matt Duchene</td>
<td>$7,700,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Mathew Dumba</td>
<td>$6,000,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Marc Staal</td>
<td>$6,000,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Torey Krug</td>
<td>$5,600,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Josh Manson</td>
<td>$4,500,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Justin Abdelkader (1 Way Contract)</td>
<td>$4,500,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Oliver Bjorkstrand</td>
<td>$3,000,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jake McCabe</td>
<td>$2,750,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jared McCann</td>
<td>$1,950,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Conor Sheary</td>
<td>$1,350,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Teddy Blueger</td>
<td>$925,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Josh Mahura</td>
<td>$910,833 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Mathieu Joseph</td>
<td>$910,833 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Ivan Barbashev</td>
<td>$863,333 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Martin Frk</td>
<td>$863,333 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Andrew Mangiapane</td>
<td>$800,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Connor Clifton</td>
<td>$735,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Evan Fitzpatrick</td>
<td>$700,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Marcus Hogberg</td>
<td>$625,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Stefan Noesen</td>
<td>$0 (0)</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>23</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $80,408,332</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $70,881,666</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $56,975,000</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $36,200,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $79,783,332</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $70,256,666</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $56,975,000</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $36,200,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $80,408,332</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $70,881,666</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $56,975,000</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $36,200,000</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Sergei Bobrovsky</td>
<td>$915,000 (5)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Austin Wagner</td>
<td>$92,500 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Noah Gregor</td>
<td>$85,000 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Anthony Richard</td>
<td>$73,500 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jake Bischoff</td>
<td>$71,667 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jake Paterson</td>
<td>$70,000 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jack Dougherty</td>
<td>$70,000 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Reece Willcox</td>
<td>$67,500 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Anton Lindholm</td>
<td>$0 (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>9</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $1,445,167</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $1,445,167</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $1,352,667</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $915,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $1,445,167</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $1,445,167</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $1,352,667</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $915,000</td></tr>
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
<tr><td>Level 1: </td><td>6000 - $220 - 4,506 - 75.10%</td></tr>
<tr><td>Level 2: </td><td>5000 - $160 - 3,574 - 71.48%</td></tr>
<tr><td>Level 3: </td><td>4000 - $120 - 2,990 - 74.74%</td></tr>
<tr><td>Level 4: </td><td>3000 - $100 - 1,959 - 65.31%</td></tr>
<tr><td>Luxury : </td><td>1000 - $300 - 777 - 77.70%</td></tr>
<tr><td>Total Capacity :</td><td>19000</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Farm Level 1: </td><td>2000 - $100 - 1,236 - 61.80%</td></tr>
<tr><td>Farm Level 2: </td><td>1000 - $0 - 1,000 - 100.00%</td></tr>
<tr><td>Farm Total Capacity :</td><td>3000</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Income">Income</h3></td></tr>
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>13,806 - 72.66%</td></tr>
<tr><td>Average Income per Game</td><td>$2,350,915</td></tr>
<tr><td>Year to Date Revenue</td><td>$9,403,660</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>2,236 - 74.53%</td></tr>
<tr><td>Average Income per Game</td><td>$123,600</td></tr>
<tr><td>Year to Date Revenue</td><td>$618,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>$84,305,000</td></tr>
<tr><td>Farm Players Total Salaries</td><td>$2,259,524</td></tr>
<tr><td>Coaches Total Salaries</td><td>$2,900,000</td></tr>
<tr><td>Luxury Taxe Total</td><td>$0</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>$0</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>$0</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>$0</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>$0</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>$78,155,319</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>$78,155,319</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Sidney Crosby</td>
<td>$11,000,000 (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Anze Kopitar</td>
<td>$11,000,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Ryan Suter</td>
<td>$9,625,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>David Pastrnak</td>
<td>$6,750,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Rasmus Ristolainen</td>
<td>$5,700,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Anders Lee</td>
<td>$5,500,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Teuvo Teravainen</td>
<td>$5,400,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Chris Kreider</td>
<td>$5,100,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jay Bouwmeester</td>
<td>$4,000,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Ron Hainsey</td>
<td>$4,000,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Thomas Greiss</td>
<td>$4,000,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Valeri Nichushkin</td>
<td>$2,950,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Michael Del Zotto</td>
<td>$1,500,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Loui Eriksson</td>
<td>$1,500,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Zemgus Girgensons</td>
<td>$1,450,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Christian Djoos</td>
<td>$1,275,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Derek Grant</td>
<td>$1,050,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Colin Wilson</td>
<td>$930,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Zach Aston-Reese</td>
<td>$925,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Ken Appleby</td>
<td>$650,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>20</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $84,305,000</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $71,130,000</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $46,730,000</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $27,400,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $84,305,000</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $71,130,000</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $46,730,000</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $27,400,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $84,305,000</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $71,130,000</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $46,730,000</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $27,400,000</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Andy Welinski</td>
<td>$177,500 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Ilya Samsonov</td>
<td>$147,500 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Alexander Yelesin</td>
<td>$135,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Tage Thompson</td>
<td>$113,750 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Ross Johnston</td>
<td>$100,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Ilya Lyubushkin</td>
<td>$98,500 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jon Gillies</td>
<td>$92,500 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Mikey Eyssimont</td>
<td>$92,500 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Keegan Kolesar</td>
<td>$90,500 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Carter Verhaeghe</td>
<td>$89,417 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Trevor Moore</td>
<td>$80,000 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Joona Luoto</td>
<td>$75,833 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Sean Malone</td>
<td>$75,000 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Michael Amadio</td>
<td>$71,500 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Ryan Fitzgerald</td>
<td>$70,000 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Chris Terry</td>
<td>$70,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Cole Schneider</td>
<td>$70,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Dalton Smith</td>
<td>$70,000 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Taylor Fedun</td>
<td>$70,000 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Dakota Mermis</td>
<td>$70,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Remi Elie</td>
<td>$70,000 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Laurent Dauphin</td>
<td>$70,000 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Tyler Lewington</td>
<td>$66,500 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Andrew Poturalski</td>
<td>$65,000 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Turner Elson</td>
<td>$65,000 (4)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jonas Johansson</td>
<td>$63,524 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>26</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $2,259,524</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $1,532,774</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $1,029,024</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $65,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $2,160,358</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $1,476,108</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $974,024</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $65,000</td></tr>
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
<tr><td>Level 1: </td><td>6000 - $200 - 0 - 0.00%</td></tr>
<tr><td>Level 2: </td><td>5000 - $140 - 0 - 0.00%</td></tr>
<tr><td>Level 3: </td><td>4000 - $122 - 0 - 0.00%</td></tr>
<tr><td>Level 4: </td><td>3000 - $81 - 0 - 0.00%</td></tr>
<tr><td>Luxury : </td><td>1000 - $265 - 0 - 0.00%</td></tr>
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
<tr><td>Pro Players Total Salaries</td><td>$60,625,000</td></tr>
<tr><td>Farm Players Total Salaries</td><td>$1,281,694</td></tr>
<tr><td>Coaches Total Salaries</td><td>$5,000,000</td></tr>
<tr><td>Luxury Taxe Total</td><td>$0</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>$0</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>$0</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>$0</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>$0</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>$17,286,241</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>$17,286,241</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Andrei Vasilevskiy</td>
<td>$10,000,000 (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Mark Giordano</td>
<td>$8,500,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Gustav Nyquist</td>
<td>$7,500,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Shayne Gostisbehere</td>
<td>$4,500,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Will Butcher</td>
<td>$3,775,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Pavel Buchnevich</td>
<td>$3,500,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>J.T. Compher</td>
<td>$3,500,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Brett Connolly</td>
<td>$3,000,000 (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jason Spezza</td>
<td>$2,250,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Patrick Marleau</td>
<td>$2,250,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jordan Gross</td>
<td>$1,775,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Tomas Nosek</td>
<td>$1,250,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Dylan McIlrath</td>
<td>$1,100,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Fredrik Claesson</td>
<td>$1,000,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Joel Kellman</td>
<td>$925,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jordan Nolan</td>
<td>$850,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Patrick Eaves</td>
<td>$800,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Yannick Weber</td>
<td>$700,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Gerald Mayhew</td>
<td>$700,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Cole Bardreau</td>
<td>$700,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>William Carrier</td>
<td>$700,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Max Lagace</td>
<td>$700,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Kurtis MacDermid</td>
<td>$650,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>23</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $60,625,000</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $42,300,000</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $24,700,000</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $16,500,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $59,025,000</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $42,300,000</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $24,700,000</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $16,500,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $60,625,000</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $42,300,000</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $24,700,000</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $16,500,000</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Jimmy Howard</td>
<td>$420,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Andrew Peeke</td>
<td>$149,167 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Ryan Kuffner</td>
<td>$92,500 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Michael Bunting</td>
<td>$92,500 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Mitch Reinke</td>
<td>$92,500 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Klim Kostin</td>
<td>$86,333 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Gilles Senn</td>
<td>$81,750 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Trevor Carrick</td>
<td>$80,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Dmytro Timashov</td>
<td>$69,444 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Brandon Halverson</td>
<td>$65,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Nick Moutrey</td>
<td>$52,500 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>11</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $1,281,694</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $596,694</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $386,694</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $0</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $1,274,061</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $589,061</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $356,561</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $0</td></tr>
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
<tr><td>Level 1: </td><td>6000 - $169 - 0 - 0.00%</td></tr>
<tr><td>Level 2: </td><td>5000 - $127 - 0 - 0.00%</td></tr>
<tr><td>Level 3: </td><td>4000 - $83 - 0 - 0.00%</td></tr>
<tr><td>Level 4: </td><td>3000 - $50 - 0 - 0.00%</td></tr>
<tr><td>Luxury : </td><td>1000 - $230 - 0 - 0.00%</td></tr>
<tr><td>Total Capacity :</td><td>19000</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Farm Level 1: </td><td>2000 - $99 - 1,111 - 55.55%</td></tr>
<tr><td>Farm Level 2: </td><td>1000 - $0 - 1,000 - 100.00%</td></tr>
<tr><td>Farm Total Capacity :</td><td>3000</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Income">Income</h3></td></tr>
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>0 - 0.00%</td></tr>
<tr><td>Average Income per Game</td><td>$0</td></tr>
<tr><td>Year to Date Revenue</td><td>$0</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>2,111 - 70.37%</td></tr>
<tr><td>Average Income per Game</td><td>$109,989</td></tr>
<tr><td>Year to Date Revenue</td><td>$329,967</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>$71,425,833</td></tr>
<tr><td>Farm Players Total Salaries</td><td>$1,228,368</td></tr>
<tr><td>Coaches Total Salaries</td><td>$2,675,000</td></tr>
<tr><td>Luxury Taxe Total</td><td>$0</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>$0</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>$0</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>$0</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>$0</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>$104,765,369</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>$104,765,369</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Kris Letang</td>
<td>$8,650,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Evgeny Kuznetsov</td>
<td>$8,150,000 (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Filip Forsberg</td>
<td>$7,000,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Aleksander Barkov</td>
<td>$5,900,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jared Spurgeon</td>
<td>$5,750,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>T.J. Brodie</td>
<td>$5,600,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Mats Zuccarello</td>
<td>$5,000,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Justin Braun</td>
<td>$4,500,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Joel Edmundson</td>
<td>$3,500,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Zack Kassian</td>
<td>$2,800,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Laurent Brossoit</td>
<td>$2,300,000 (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Darcy Kuemper</td>
<td>$1,850,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jakub Vrana</td>
<td>$1,363,333 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Robert Thomas</td>
<td>$1,177,500 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Joakim Nordstrom</td>
<td>$1,100,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Michael Frolik</td>
<td>$1,000,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Mattias Janmark</td>
<td>$930,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Mario Ferraro</td>
<td>$925,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Gustav Forsling</td>
<td>$875,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Garnet Hathaway</td>
<td>$850,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Warren Foegele</td>
<td>$800,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Adam Helewka</td>
<td>$705,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Eric Comrie</td>
<td>$700,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>23</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $71,425,833</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $61,007,500</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $46,330,000</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $15,450,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $71,425,833</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $61,007,500</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $46,330,000</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $15,450,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $71,425,833</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $61,007,500</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $46,330,000</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $15,450,000</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Dylan Sikura</td>
<td>$138,750 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>J.T. Brown</td>
<td>$125,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Kieffer Bellows</td>
<td>$110,667 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Zack MacEwen</td>
<td>$99,600 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jimmy Schuldt</td>
<td>$92,500 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Alexey Toropchenko</td>
<td>$87,917 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Michael Downing</td>
<td>$82,000 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Matt Lorito</td>
<td>$80,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Nic Petan</td>
<td>$77,500 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Danick Martel</td>
<td>$70,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Brogan Raferty</td>
<td>$70,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Joseph LaBate</td>
<td>$68,100 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Cole Ully</td>
<td>$64,667 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Zac Leslie</td>
<td>$61,667 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Robbie Russo</td>
<td>$0 (0)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>15</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $1,228,368</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $645,018</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $484,418</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $0</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $1,228,368</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $645,018</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $484,418</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $0</td></tr>
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
<tr><td>Level 1: </td><td>6000 - $160 - 5,967 - 99.44%</td></tr>
<tr><td>Level 2: </td><td>5000 - $112 - 5,000 - 100.00%</td></tr>
<tr><td>Level 3: </td><td>4000 - $74 - 4,000 - 100.00%</td></tr>
<tr><td>Level 4: </td><td>3000 - $62 - 2,978 - 99.27%</td></tr>
<tr><td>Luxury : </td><td>1000 - $235 - 995 - 99.45%</td></tr>
<tr><td>Total Capacity :</td><td>19000</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Farm Level 1: </td><td>2000 - $35 - 0 - 0.00%</td></tr>
<tr><td>Farm Level 2: </td><td>1000 - $0 - 0 - 0.00%</td></tr>
<tr><td>Farm Total Capacity :</td><td>3000</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Income">Income</h3></td></tr>
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>18,939 - 99.68%</td></tr>
<tr><td>Average Income per Game</td><td>$2,228,984</td></tr>
<tr><td>Year to Date Revenue</td><td>$8,915,934</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>0 - 0.00%</td></tr>
<tr><td>Average Income per Game</td><td>$0</td></tr>
<tr><td>Year to Date Revenue</td><td>$0</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>$94,725,000</td></tr>
<tr><td>Farm Players Total Salaries</td><td>$1,111,667</td></tr>
<tr><td>Coaches Total Salaries</td><td>$3,950,000</td></tr>
<tr><td>Luxury Taxe Total</td><td>$0</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>$0</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>$0</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>$0</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>$0</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>$50,845,290</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>$50,845,290</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Patrice Bergeron</td>
<td>$9,500,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Duncan Keith</td>
<td>$7,500,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jonathan Quick</td>
<td>$7,250,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Max Pacioretty</td>
<td>$7,000,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Zach Parise</td>
<td>$6,800,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Ryan Ellis</td>
<td>$6,250,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Cam Talbot</td>
<td>$6,250,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jonathan Marchessault</td>
<td>$5,900,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Anthony Mantha</td>
<td>$5,250,000 (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jeff Carter</td>
<td>$5,000,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Nick Jensen</td>
<td>$4,500,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Nikita Zadorov</td>
<td>$3,500,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Radko Gudas</td>
<td>$3,500,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Mark Letestu</td>
<td>$2,250,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jordie Benn</td>
<td>$2,000,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Brian Boyle</td>
<td>$2,000,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Colton Sceviour</td>
<td>$1,750,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Michael Raffl</td>
<td>$1,650,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Johan Larsson</td>
<td>$1,600,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Curtis Lazar</td>
<td>$1,200,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Collin Delia</td>
<td>$950,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Nicolas Deslauriers</td>
<td>$850,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Anthony Bitetto</td>
<td>$800,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Brendan Gaunce</td>
<td>$775,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Nate Prosser</td>
<td>$700,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>25</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $94,725,000</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $78,425,000</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $53,850,000</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $36,000,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $93,825,001</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $77,525,001</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $53,850,000</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $36,000,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $94,725,000</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $78,425,000</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $53,850,000</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $36,000,000</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Thomas Hickey</td>
<td>$387,500 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Craig Anderson</td>
<td>$230,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Cayden Primeau</td>
<td>$96,667 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Ryan Poehling</td>
<td>$92,500 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Andy Andreoff</td>
<td>$85,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Brandon Davidson</td>
<td>$80,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Matt Puempel</td>
<td>$70,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Andrew Agozzino</td>
<td>$70,000 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>8</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $1,111,667</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $726,667</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $259,167</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $0</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $1,103,083</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $718,083</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $250,583</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $0</td></tr>
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
<tr><td>Pro Players Total Salaries</td><td>$59,950,668</td></tr>
<tr><td>Farm Players Total Salaries</td><td>$924,900</td></tr>
<tr><td>Coaches Total Salaries</td><td>$4,550,000</td></tr>
<tr><td>Luxury Taxe Total</td><td>$0</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>$0</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>$0</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>$0</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>$0</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>$119,117,208</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>$119,117,208</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Kyle Okposo</td>
<td>$7,500,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Tyson Barrie</td>
<td>$7,000,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Nino Niederreiter</td>
<td>$5,500,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Mikhail Sergachev</td>
<td>$5,250,000 (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jakob Silfverberg</td>
<td>$5,250,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Mike Matheson</td>
<td>$5,200,000 (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jonathan Bernier</td>
<td>$4,500,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Anders Nilsson</td>
<td>$3,680,000 (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Troy Brouwer</td>
<td>$2,950,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Rocco Grimaldi</td>
<td>$2,250,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Malcolm Subban</td>
<td>$1,400,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Adam Fox</td>
<td>$925,001 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jayce Hawryluk</td>
<td>$925,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Riley Barber</td>
<td>$925,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Conor Garland</td>
<td>$822,333 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Seth Griffith</td>
<td>$800,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Victor Olofsson</td>
<td>$767,500 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Sam Lafferty</td>
<td>$767,500 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Zach Redmond</td>
<td>$750,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Steven Kampfer</td>
<td>$750,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Ondrej Kase</td>
<td>$706,667 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Karl Alzner</td>
<td>$700,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Sam Carrick</td>
<td>$631,667 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>23</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $59,950,668</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $54,894,001</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $49,390,001</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $34,130,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $59,950,668</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $54,894,001</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $49,390,001</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $34,130,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $59,950,668</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $54,894,001</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $49,390,001</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $34,130,000</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Brandon Pirri</td>
<td>$125,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Hudson Fasching</td>
<td>$95,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Sebastian AhoD</td>
<td>$92,500 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Tyler Graovac</td>
<td>$80,000 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Brett Ritchie</td>
<td>$80,000 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Casey Nelson</td>
<td>$80,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Mike Condon</td>
<td>$75,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>David Warsofsky</td>
<td>$75,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Nathan Paetsch</td>
<td>$75,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Calvin Thurkauf</td>
<td>$73,800 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Connor Bunnaman</td>
<td>$73,600 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>11</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $924,900</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $924,900</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $326,100</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $0</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2020 :</b> $924,900</td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $924,900</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $326,100</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $0</td></tr>
</table>
</td></tr></table>
</div>
<?php include "Footer.php";?>
