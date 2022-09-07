<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<title>OTHL - Team Finance</title>
<script src="OTHL.js"></script>
<meta name="author" content="Simon Tremblay, sths.simont.info" />
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="Decription" content="Tyler Bell - STHS - Version : 3.3.1.4 - OTHL-STHS.db - OTHL-STHSCareerStat.db"/>
<link href="STHSMain.css" rel="stylesheet" type="text/css" />
</head><body>
<?php If (file_exists("STHSMain-CSSOverwrite.css") == True){echo "<link href=\"STHSMain-CSSOverwrite.css\" rel=\"stylesheet\" type=\"text/css\" />";}?>
<?php If (file_exists("STHSSetting.php") == true){
require_once "STHSSetting.php";
$db = new SQLite3($DatabaseFile);
include "Menu.php";}?>
<div class="STHSTopLink"><a id="STHSRosterTop"></a> <a href="#Avalanche">Avalanche</a> | <a href="#Blackhawks">Blackhawks</a> | <a href="#BlueJackets">Blue Jackets</a> | <a href="#Blues">Blues</a> | <a href="#Bruins">Bruins</a> | <a href="#Canadiens">Canadiens</a> | <a href="#Canucks">Canucks</a> | <a href="#Capitals">Capitals</a> | <a href="#Coyotes">Coyotes</a> | <a href="#Devils">Devils</a> | <a href="#Ducks">Ducks</a> | <a href="#Flames">Flames</a> | <a href="#Flyers">Flyers</a> | <a href="#GoldenKnights">Golden Knights</a> | <a href="#Hurricanes">Hurricanes</a> | <a href="#Islanders">Islanders</a> | <a href="#Jets">Jets</a> | <a href="#Kings">Kings</a> | <a href="#Kraken">Kraken</a> | <a href="#Lightning">Lightning</a> | <a href="#MapleLeafs">Maple Leafs</a> | <a href="#Oilers">Oilers</a> | <a href="#Panthers">Panthers</a> | <a href="#Penguins">Penguins</a> | <a href="#Predators">Predators</a> | <a href="#Rangers">Rangers</a> | <a href="#RedWings">Red Wings</a> | <a href="#Sabres">Sabres</a> | <a href="#Senators">Senators</a> | <a href="#Sharks">Sharks</a> | <a href="#Stars">Stars</a> | <a href="#Wild">Wild</a> | <a href="javascript:STHS_JS_CloseAll('');">Close All Team View</a> | <a href="javascript:STHS_JS_OpenAll('');">Open All Team View</a>
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
<h2 class="STHSTeamFinance_TeamOverUnderSalaryCap">Avalanche is over or under the salary cap!</h2>
<br /><br /><table class="STHSTableFullW"><tr><td style="vertical-align: top;width:440px;">
<table class="STHSFinance_TeamTable">
<tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_AreanaCapacity">Arena Capacity - Ticket Price<br />Attendance - %</h3></td></tr>
<tr><td class="STHSW250">Arena Name</td><td class="STHSW200">Pepsi Center</td></tr>
<tr><td>Level 1: </td><td>6000 - $154 - 5,727 - 95.45%</td></tr>
<tr><td>Level 2: </td><td>5000 - $109 - 4,743 - 94.86%</td></tr>
<tr><td>Level 3: </td><td>4000 - $89 - 3,889 - 97.22%</td></tr>
<tr><td>Level 4: </td><td>3000 - $64 - 2,900 - 96.68%</td></tr>
<tr><td>Luxury : </td><td>1000 - $239 - 947 - 94.73%</td></tr>
<tr><td>Total Capacity :</td><td>19000</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Farm Level 1: </td><td>2000 - $59 - 1,537 - 76.83%</td></tr>
<tr><td>Farm Level 2: </td><td>1000 - $0 - 936 - 93.55%</td></tr>
<tr><td>Farm Total Capacity :</td><td>3000</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Income">Income</h3></td></tr>
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>18,206 - 95.82%</td></tr>
<tr><td>Average Income per Game</td><td>$2,164,369</td></tr>
<tr><td>Year to Date Revenue</td><td>$88,739,113</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>2,472 - 82.40%</td></tr>
<tr><td>Average Income per Game</td><td>$90,656</td></tr>
<tr><td>Year to Date Revenue</td><td>$3,716,882</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>$59,357,500</td></tr>
<tr><td>Farm Players Total Salaries</td><td>$760,000</td></tr>
<tr><td>Coaches Total Salaries</td><td>$2,100,000</td></tr>
<tr><td>Luxury Taxe Total</td><td>$0</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>$58,977,148</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>$1,436,743</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>$57,477,160</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>$0</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Pro Estimated Season Revenue</td><td>$0</td></tr>
<tr><td>Farm Estimated Season Revenue</td><td>$0</td></tr>
<tr><td>Pro Remaining Season Days</td><td>0</td></tr>
<tr><td>Pro Expenses Per Days</td><td>$345,781</td></tr>
<tr><td>Pro Estimated Expenses</td><td>$0</td></tr>
<tr><td>Farm Remaining Season Days</td><td>0</td></tr>
<tr><td>Farm Expenses Per Days</td><td>$9,189</td></tr>
<tr><td>Farm Estimated Expenses</td><td>$0</td></tr>
<tr><td>Estimated Season Expenses</td><td>$0</td></tr>
<tr><td>Estimated Season Salary Cap</td><td>$57,477,160</td></tr>
<tr><td>Estimate Under Maximum Salary Cap of $81,500,000</td><td>$24,022,840</td></tr>
<tr><td>Estimate Over Minimum Salary Cap of $60,200,000 </td><td><span style="color:red">-$2,722,840</span></td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>$243,735,410</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>$243,735,410</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>J.T. Miller</td>
<td>$6,250,000 (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Hampus Lindholm</td>
<td>$6,000,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Anton Stralman</td>
<td>$5,500,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Bryan Little</td>
<td>$5,500,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Brett Pesce</td>
<td>$4,250,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Micheal Ferland</td>
<td>$3,250,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Mark Pysyk</td>
<td>$3,000,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Brandon Carlo</td>
<td>$2,900,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>John Moore</td>
<td>$2,850,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Richard Panik</td>
<td>$2,750,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Brock McGinn</td>
<td>$2,100,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Matt Martin</td>
<td>$2,000,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Marcus Johansson</td>
<td>$2,000,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Andrej Sekera</td>
<td>$2,000,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jordan Martinook (Out of Payroll)</td>
<td>$1,800,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Trevor Zegras</td>
<td>$1,775,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Aaron Dell</td>
<td>$1,300,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Andrew Hammond</td>
<td>$975,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Travis Boyd</td>
<td>$925,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Chris Driedger (Out of Payroll)</td>
<td>$900,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Mackenzie Entwistle</td>
<td>$894,167 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jonas Siegenthaler</td>
<td>$888,333 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Lucas Wallmark</td>
<td>$750,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Colin Blackwell</td>
<td>$750,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Blake Pietila</td>
<td>$750,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>25</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $62,057,500</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $43,744,167</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $16,219,167</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> $6,250,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $62,057,500</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $43,744,167</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $16,219,167</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> $6,250,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $62,057,500</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $43,744,167</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $16,219,167</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> $6,250,000</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Nathan Bastian</td>
<td>$82,500 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Michael Sgarbossa</td>
<td>$77,500 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Merrick Madsen</td>
<td>$75,000 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Kurtis Gabriel</td>
<td>$75,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Keegan Lowe</td>
<td>$75,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Maxim Letunov</td>
<td>$75,000 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Tyler Benson</td>
<td>$75,000 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Taro Hirose</td>
<td>$75,000 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Brett Lernout</td>
<td>$75,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Andreas Englund</td>
<td>$75,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>10</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $760,000</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $610,000</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $382,500</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> $0</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $760,000</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $610,000</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $382,500</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> $0</td></tr>
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
<tr><td>Level 1: </td><td>6000 - $169 - 5,675 - 94.59%</td></tr>
<tr><td>Level 2: </td><td>5000 - $127 - 3,954 - 79.08%</td></tr>
<tr><td>Level 3: </td><td>4000 - $81 - 3,894 - 97.35%</td></tr>
<tr><td>Level 4: </td><td>3000 - $50 - 2,948 - 98.25%</td></tr>
<tr><td>Luxury : </td><td>1000 - $220 - 957 - 95.67%</td></tr>
<tr><td>Total Capacity :</td><td>19000</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Farm Level 1: </td><td>2000 - $50 - 1,922 - 96.08%</td></tr>
<tr><td>Farm Level 2: </td><td>1000 - $0 - 946 - 94.56%</td></tr>
<tr><td>Farm Total Capacity :</td><td>3000</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Income">Income</h3></td></tr>
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>17,428 - 91.72%</td></tr>
<tr><td>Average Income per Game</td><td>$2,134,550</td></tr>
<tr><td>Year to Date Revenue</td><td>$87,516,533</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>2,867 - 95.57%</td></tr>
<tr><td>Average Income per Game</td><td>$96,079</td></tr>
<tr><td>Year to Date Revenue</td><td>$3,939,250</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>$74,470,000</td></tr>
<tr><td>Farm Players Total Salaries</td><td>$1,325,666</td></tr>
<tr><td>Coaches Total Salaries</td><td>$4,000,000</td></tr>
<tr><td>Luxury Taxe Total</td><td>$0</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>$82,549,358</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>$2,859,055</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>$80,049,341</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>$0</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Pro Estimated Season Revenue</td><td>$0</td></tr>
<tr><td>Farm Estimated Season Revenue</td><td>$0</td></tr>
<tr><td>Pro Remaining Season Days</td><td>0</td></tr>
<tr><td>Pro Expenses Per Days</td><td>$437,330</td></tr>
<tr><td>Pro Estimated Expenses</td><td>$0</td></tr>
<tr><td>Farm Remaining Season Days</td><td>0</td></tr>
<tr><td>Farm Expenses Per Days</td><td>$19,092</td></tr>
<tr><td>Farm Estimated Expenses</td><td>$0</td></tr>
<tr><td>Estimated Season Expenses</td><td>$0</td></tr>
<tr><td>Estimated Season Salary Cap</td><td>$80,049,341</td></tr>
<tr><td>Estimate Under Maximum Salary Cap of $81,500,000</td><td>$1,450,659</td></tr>
<tr><td>Estimate Over Minimum Salary Cap of $60,200,000 </td><td>$19,849,341</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>$50,673,124</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>$50,673,124</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Evgeni Malkin (Out of Payroll)</td>
<td>$12,000,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Brent Burns</td>
<td>$9,000,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Sebastian Aho</td>
<td>$8,450,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Mark Stone</td>
<td>$8,000,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Zach Werenski</td>
<td>$6,350,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Tyler Bozak</td>
<td>$6,000,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Justin Faulk</td>
<td>$5,000,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Justin Braun</td>
<td>$4,500,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Tomas Tatar</td>
<td>$4,250,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Igor Shesterkin</td>
<td>$3,775,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Vladislav Namestnikov</td>
<td>$3,250,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Carl Hagelin</td>
<td>$3,145,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Erik Haula</td>
<td>$3,050,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Justin Holl (1 Way Contract)</td>
<td>$2,250,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jordan Oesterle</td>
<td>$1,750,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Andy Greene</td>
<td>$1,250,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Max Comtois</td>
<td>$925,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>David Kampf</td>
<td>$925,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Martin Jones</td>
<td>$900,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Kevin Rooney</td>
<td>$850,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Alex Chiasson</td>
<td>$850,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>21</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $86,470,000</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $76,545,000</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $35,725,000</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> $6,350,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $86,365,003</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $76,545,000</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $35,725,000</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> $6,350,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $86,470,000</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $76,545,000</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $35,725,000</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> $6,350,000</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Wyatt Kalynuk</td>
<td>$177,500 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Mitch Vande Sompel</td>
<td>$93,583 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Colton Point</td>
<td>$92,500 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Glenn Gawdin</td>
<td>$92,500 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Simon Benoit</td>
<td>$92,500 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Dominik Simon</td>
<td>$89,500 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Kiefer Sherwood</td>
<td>$80,000 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Dylan Sikura</td>
<td>$80,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Carsen Twarynski</td>
<td>$77,583 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Kaden Fulcher</td>
<td>$75,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Otto Somppi</td>
<td>$75,000 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Skyler McKenzie</td>
<td>$75,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Dylan Coghlan</td>
<td>$75,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Joseph Blandisi</td>
<td>$75,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Ville Pokka</td>
<td>$75,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>15</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $1,325,666</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $1,008,166</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $332,500</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> $0</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $1,315,666</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $1,008,166</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $332,500</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> $0</td></tr>
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
<tr><td>Level 1: </td><td>6000 - $225 - 3,713 - 61.88%</td></tr>
<tr><td>Level 2: </td><td>5000 - $165 - 3,013 - 60.27%</td></tr>
<tr><td>Level 3: </td><td>4000 - $135 - 2,288 - 57.20%</td></tr>
<tr><td>Level 4: </td><td>3000 - $100 - 1,708 - 56.92%</td></tr>
<tr><td>Luxury : </td><td>1000 - $300 - 685 - 68.45%</td></tr>
<tr><td>Total Capacity :</td><td>19000</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Farm Level 1: </td><td>2000 - $100 - 906 - 45.29%</td></tr>
<tr><td>Farm Level 2: </td><td>1000 - $0 - 939 - 93.90%</td></tr>
<tr><td>Farm Total Capacity :</td><td>3000</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Income">Income</h3></td></tr>
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>11,406 - 60.03%</td></tr>
<tr><td>Average Income per Game</td><td>$2,017,584</td></tr>
<tr><td>Year to Date Revenue</td><td>$82,720,935</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>1,845 - 61.49%</td></tr>
<tr><td>Average Income per Game</td><td>$90,573</td></tr>
<tr><td>Year to Date Revenue</td><td>$3,713,500</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>$82,779,167</td></tr>
<tr><td>Farm Players Total Salaries</td><td>$872,833</td></tr>
<tr><td>Coaches Total Salaries</td><td>$3,700,000</td></tr>
<tr><td>Luxury Taxe Total</td><td>$0</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>$79,586,308</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>$1,661,719</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>$76,586,256</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>$0</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Pro Estimated Season Revenue</td><td>$0</td></tr>
<tr><td>Farm Estimated Season Revenue</td><td>$0</td></tr>
<tr><td>Pro Remaining Season Days</td><td>0</td></tr>
<tr><td>Pro Expenses Per Days</td><td>$487,382</td></tr>
<tr><td>Pro Estimated Expenses</td><td>$0</td></tr>
<tr><td>Farm Remaining Season Days</td><td>0</td></tr>
<tr><td>Farm Expenses Per Days</td><td>$10,627</td></tr>
<tr><td>Farm Estimated Expenses</td><td>$0</td></tr>
<tr><td>Estimated Season Expenses</td><td>$0</td></tr>
<tr><td>Estimated Season Salary Cap</td><td>$76,586,256</td></tr>
<tr><td>Estimate Under Maximum Salary Cap of $81,500,000</td><td>$4,913,744</td></tr>
<tr><td>Estimate Over Minimum Salary Cap of $60,200,000 </td><td>$16,386,256</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>$30,986,620</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>$30,986,620</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Joe Pavelski (1 Way Contract)</td>
<td>$10,000,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>T.J. Oshie</td>
<td>$6,850,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Marc Staal (Out of Payroll)</td>
<td>$6,000,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Sergei Bobrovsky</td>
<td>$5,500,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Danny DeKeyser</td>
<td>$5,000,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Erik Johnson (1 Way Contract)</td>
<td>$5,000,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Kyle Palmieri (1 Way Contract)</td>
<td>$5,000,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>John Klingberg</td>
<td>$4,500,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jason Demers</td>
<td>$4,500,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Ian Cole</td>
<td>$4,000,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Anthony Duclair</td>
<td>$4,000,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Elias Pettersson</td>
<td>$3,775,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Joel Edmundson</td>
<td>$3,600,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Miles Wood</td>
<td>$3,000,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Alexander Kerfoot</td>
<td>$3,000,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Andrew Copp</td>
<td>$3,000,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Joel Armia</td>
<td>$2,800,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Nic Dowd</td>
<td>$2,750,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Zach Sanford</td>
<td>$2,000,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Quinn Hughes</td>
<td>$1,604,167 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Tomas Nosek</td>
<td>$1,100,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Thatcher Demko</td>
<td>$1,050,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Frederick Gaudreau</td>
<td>$750,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>23</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $88,779,167</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $56,004,167</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $36,850,000</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> $16,900,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $88,779,167</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $56,004,167</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $36,850,000</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> $16,900,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $88,779,167</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $56,004,167</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $36,850,000</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> $16,900,000</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Greg McKegg</td>
<td>$92,500 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Lukas Jasek</td>
<td>$85,333 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jeff Glass</td>
<td>$80,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>T.J. Tynan</td>
<td>$80,000 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Nikolai Knyzhov</td>
<td>$80,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Phillip Di Giuseppe</td>
<td>$80,000 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Brent Pedersen</td>
<td>$75,000 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Brandon Baddock</td>
<td>$75,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Justin Kirkland</td>
<td>$75,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Evan McEneny</td>
<td>$75,000 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Mason Geertsen</td>
<td>$75,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>11</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $872,833</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $700,333</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $310,000</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> $0</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $872,833</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $700,333</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $310,000</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> $0</td></tr>
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
<tr><td class="STHSW250">Arena Name</td><td class="STHSW200">Enterprise Center</td></tr>
<tr><td>Level 1: </td><td>6000 - $175 - 5,456 - 90.93%</td></tr>
<tr><td>Level 2: </td><td>5000 - $129 - 3,918 - 78.36%</td></tr>
<tr><td>Level 3: </td><td>4000 - $105 - 2,983 - 74.57%</td></tr>
<tr><td>Level 4: </td><td>3000 - $80 - 2,113 - 70.43%</td></tr>
<tr><td>Luxury : </td><td>1000 - $300 - 683 - 68.34%</td></tr>
<tr><td>Total Capacity :</td><td>19000</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Farm Level 1: </td><td>2000 - $100 - 920 - 45.99%</td></tr>
<tr><td>Farm Level 2: </td><td>1000 - $0 - 951 - 95.07%</td></tr>
<tr><td>Farm Total Capacity :</td><td>3000</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Income">Income</h3></td></tr>
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>15,153 - 79.75%</td></tr>
<tr><td>Average Income per Game</td><td>$2,147,453</td></tr>
<tr><td>Year to Date Revenue</td><td>$88,045,556</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>1,871 - 62.35%</td></tr>
<tr><td>Average Income per Game</td><td>$91,988</td></tr>
<tr><td>Year to Date Revenue</td><td>$3,771,500</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>$70,444,999</td></tr>
<tr><td>Farm Players Total Salaries</td><td>$1,217,166</td></tr>
<tr><td>Coaches Total Salaries</td><td>$4,500,000</td></tr>
<tr><td>Luxury Taxe Total</td><td>$0</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>$74,548,316</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>$2,488,888</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>$71,548,310</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>$0</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Pro Estimated Season Revenue</td><td>$0</td></tr>
<tr><td>Farm Estimated Season Revenue</td><td>$0</td></tr>
<tr><td>Pro Remaining Season Days</td><td>0</td></tr>
<tr><td>Pro Expenses Per Days</td><td>$417,301</td></tr>
<tr><td>Pro Estimated Expenses</td><td>$0</td></tr>
<tr><td>Farm Remaining Season Days</td><td>0</td></tr>
<tr><td>Farm Expenses Per Days</td><td>$18,359</td></tr>
<tr><td>Farm Estimated Expenses</td><td>$0</td></tr>
<tr><td>Estimated Season Expenses</td><td>$0</td></tr>
<tr><td>Estimated Season Salary Cap</td><td>$71,548,310</td></tr>
<tr><td>Estimate Under Maximum Salary Cap of $81,500,000</td><td>$9,951,690</td></tr>
<tr><td>Estimate Over Minimum Salary Cap of $60,200,000 </td><td>$11,348,310</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>$73,508,595</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>$73,508,595</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Vladimir Tarasenko</td>
<td>$11,500,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Travis Konecny</td>
<td>$7,500,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jaden Schwartz (1 Way Contract)</td>
<td>$6,660,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Mikael Backlund</td>
<td>$6,500,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Antti Raanta</td>
<td>$5,500,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jonathan Drouin</td>
<td>$5,500,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Samuel Girard</td>
<td>$4,250,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Pierre-Edouard Bellemare</td>
<td>$3,800,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Antoine Roussel</td>
<td>$3,250,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Louis Domingue</td>
<td>$2,000,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Adam Boqvist</td>
<td>$1,744,167 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Travis Dermott</td>
<td>$1,500,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Sammy Blais (1 Way Contract)</td>
<td>$1,500,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Brendan Lemieux (1 Way Contract)</td>
<td>$1,500,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jakub Zboril (Out of Payroll)</td>
<td>$1,288,333 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Julien Gauthier</td>
<td>$1,163,333 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Nicolas Beaudin</td>
<td>$1,105,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Vitek Vanecek</td>
<td>$1,000,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Oliver Kylington</td>
<td>$1,000,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Mason Marchment</td>
<td>$950,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Janne Kuokkanen</td>
<td>$894,166 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Markus Nutivaara</td>
<td>$870,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Alex Barre-Boulet</td>
<td>$758,333 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>23</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $71,733,332</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $69,104,999</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $44,466,666</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> $30,160,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $70,914,167</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $68,285,834</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $44,466,666</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> $30,160,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $71,733,332</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $69,104,999</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $44,466,666</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> $30,160,000</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Niclas Almari</td>
<td>$92,500 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Chad Krys</td>
<td>$92,500 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Karson Kuhlman</td>
<td>$92,500 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Alexandre Texier</td>
<td>$92,500 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Marko Dano</td>
<td>$90,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Joe Gambardella</td>
<td>$90,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Ashton Sautner</td>
<td>$90,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Josh Currie</td>
<td>$90,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Cale Fleury</td>
<td>$88,333 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Nic Hague</td>
<td>$86,333 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jean-Sebastien Dea</td>
<td>$82,500 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Tanner Kero</td>
<td>$80,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Matteo Gennaro</td>
<td>$75,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Mackenzie MacEachern</td>
<td>$75,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>14</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $1,217,166</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $872,166</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $175,000</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> $0</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $1,203,250</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $858,250</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $175,000</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> $0</td></tr>
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
<tr><td>Level 1: </td><td>6000 - $165 - 5,684 - 94.74%</td></tr>
<tr><td>Level 2: </td><td>5000 - $115 - 4,799 - 95.98%</td></tr>
<tr><td>Level 3: </td><td>4000 - $90 - 3,829 - 95.71%</td></tr>
<tr><td>Level 4: </td><td>3000 - $65 - 2,892 - 96.40%</td></tr>
<tr><td>Luxury : </td><td>1000 - $255 - 945 - 94.54%</td></tr>
<tr><td>Total Capacity :</td><td>19000</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Farm Level 1: </td><td>2000 - $100 - 927 - 46.35%</td></tr>
<tr><td>Farm Level 2: </td><td>1000 - $0 - 947 - 94.69%</td></tr>
<tr><td>Farm Total Capacity :</td><td>3000</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Income">Income</h3></td></tr>
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>18,150 - 95.52%</td></tr>
<tr><td>Average Income per Game</td><td>$2,263,459</td></tr>
<tr><td>Year to Date Revenue</td><td>$92,801,820</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>1,874 - 62.46%</td></tr>
<tr><td>Average Income per Game</td><td>$92,695</td></tr>
<tr><td>Year to Date Revenue</td><td>$3,800,500</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>$74,318,332</td></tr>
<tr><td>Farm Players Total Salaries</td><td>$1,654,541</td></tr>
<tr><td>Coaches Total Salaries</td><td>$4,700,000</td></tr>
<tr><td>Luxury Taxe Total</td><td>$0</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>$79,175,541</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>$2,359,193</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>$75,175,541</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>$0</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Pro Estimated Season Revenue</td><td>$0</td></tr>
<tr><td>Farm Estimated Season Revenue</td><td>$0</td></tr>
<tr><td>Pro Remaining Season Days</td><td>0</td></tr>
<tr><td>Pro Expenses Per Days</td><td>$444,991</td></tr>
<tr><td>Pro Estimated Expenses</td><td>$0</td></tr>
<tr><td>Farm Remaining Season Days</td><td>0</td></tr>
<tr><td>Farm Expenses Per Days</td><td>$15,909</td></tr>
<tr><td>Farm Estimated Expenses</td><td>$0</td></tr>
<tr><td>Estimated Season Expenses</td><td>$0</td></tr>
<tr><td>Estimated Season Salary Cap</td><td>$75,175,541</td></tr>
<tr><td>Estimate Under Maximum Salary Cap of $81,500,000</td><td>$6,324,459</td></tr>
<tr><td>Estimate Over Minimum Salary Cap of $60,200,000 </td><td>$14,975,541</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>$64,261,933</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>$64,261,933</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Brad Marchand</td>
<td>$11,000,000 (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Sean Couturier</td>
<td>$7,700,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Paul Stastny</td>
<td>$6,500,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Linus Ullmark (1 Way Contract)</td>
<td>$5,000,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Justin Schultz</td>
<td>$4,800,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Nick Jensen</td>
<td>$4,500,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Marco Scandella</td>
<td>$4,000,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Joonas Donskoi</td>
<td>$3,900,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Chris Tierney</td>
<td>$3,625,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Pius Suter</td>
<td>$3,250,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Ben Hutton</td>
<td>$3,200,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jay Beagle</td>
<td>$3,000,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Dylan DeMelo</td>
<td>$2,200,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Michael Anderson</td>
<td>$1,775,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Lawson Crouse</td>
<td>$1,700,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Denis Gurianov</td>
<td>$1,644,166 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jordan Greenway</td>
<td>$1,255,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Pavel Francouz (Out of Payroll)</td>
<td>$1,100,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Matthew Highmore</td>
<td>$1,000,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Josh Dunne</td>
<td>$925,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>William Borgen</td>
<td>$900,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Taylor Raddysh</td>
<td>$894,166 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Trevor Lewis</td>
<td>$800,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>William Lagesson</td>
<td>$750,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>24</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $75,418,332</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $62,938,332</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $32,050,000</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> $16,000,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $74,568,333</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $62,088,333</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $32,050,000</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> $16,000,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $75,418,332</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $62,938,332</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $32,050,000</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> $16,000,000</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Drew O'Connor</td>
<td>$177,500 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jake Leschyshyn</td>
<td>$92,750 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Alexei Melnichuk</td>
<td>$92,500 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Marian Studenic</td>
<td>$92,500 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Oskar Steen</td>
<td>$92,500 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Stelio Mattheos</td>
<td>$92,500 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Ryan Collins</td>
<td>$88,083 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Anthony Angello</td>
<td>$83,375 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Kole Sherwood</td>
<td>$80,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jaycob Megna</td>
<td>$80,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Gustav Olofsson</td>
<td>$80,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Matthew Villalta</td>
<td>$77,833 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jeffrey Viel</td>
<td>$75,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Giorgio Estephan</td>
<td>$75,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Devante Stephens</td>
<td>$75,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Nathan Walker</td>
<td>$75,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jalen Chatfield</td>
<td>$75,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Lane Pederson</td>
<td>$75,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Gabriel Fontaine</td>
<td>$75,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>19</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $1,654,541</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $913,333</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $185,250</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> $0</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $1,654,541</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $913,333</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $185,250</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> $0</td></tr>
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
<tr><td>Level 1: </td><td>6000 - $163 - 5,753 - 95.88%</td></tr>
<tr><td>Level 2: </td><td>5000 - $108 - 4,872 - 97.45%</td></tr>
<tr><td>Level 3: </td><td>4000 - $88 - 3,865 - 96.64%</td></tr>
<tr><td>Level 4: </td><td>3000 - $63 - 2,928 - 97.62%</td></tr>
<tr><td>Luxury : </td><td>1000 - $228 - 973 - 97.34%</td></tr>
<tr><td>Total Capacity :</td><td>19000</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Farm Level 1: </td><td>2000 - $58 - 1,838 - 91.90%</td></tr>
<tr><td>Farm Level 2: </td><td>1000 - $0 - 942 - 94.16%</td></tr>
<tr><td>Farm Total Capacity :</td><td>3000</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Income">Income</h3></td></tr>
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>18,393 - 96.80%</td></tr>
<tr><td>Average Income per Game</td><td>$2,034,659</td></tr>
<tr><td>Year to Date Revenue</td><td>$83,421,019</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>2,780 - 92.66%</td></tr>
<tr><td>Average Income per Game</td><td>$104,615</td></tr>
<tr><td>Year to Date Revenue</td><td>$4,289,201</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>$83,010,833</td></tr>
<tr><td>Farm Players Total Salaries</td><td>$1,217,500</td></tr>
<tr><td>Coaches Total Salaries</td><td>$4,000,000</td></tr>
<tr><td>Luxury Taxe Total</td><td>$0</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>$82,469,388</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>$2,226,199</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>$79,469,315</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>$0</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Pro Estimated Season Revenue</td><td>$0</td></tr>
<tr><td>Farm Estimated Season Revenue</td><td>$0</td></tr>
<tr><td>Pro Remaining Season Days</td><td>0</td></tr>
<tr><td>Pro Expenses Per Days</td><td>$488,698</td></tr>
<tr><td>Pro Estimated Expenses</td><td>$0</td></tr>
<tr><td>Farm Remaining Season Days</td><td>0</td></tr>
<tr><td>Farm Expenses Per Days</td><td>$14,983</td></tr>
<tr><td>Farm Estimated Expenses</td><td>$0</td></tr>
<tr><td>Estimated Season Expenses</td><td>$0</td></tr>
<tr><td>Estimated Season Salary Cap</td><td>$79,469,315</td></tr>
<tr><td>Estimate Under Maximum Salary Cap of $81,500,000</td><td>$2,030,685</td></tr>
<tr><td>Estimate Over Minimum Salary Cap of $60,200,000 </td><td>$19,269,315</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>$80,572,282</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>$80,572,282</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Mark Scheifele (1 Way Contract)</td>
<td>$9,500,000 (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Marc-Andre Fleury</td>
<td>$8,300,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Ivan Provorov</td>
<td>$7,750,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Aaron Ekblad</td>
<td>$7,650,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Brayden Schenn</td>
<td>$7,225,000 (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Nazem Kadri</td>
<td>$6,100,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Nikolaj Ehlers</td>
<td>$6,000,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Alex DeBrincat (1 Way Contract)</td>
<td>$5,250,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Clayton Keller (1 Way Contract)</td>
<td>$5,250,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Connor Murphy</td>
<td>$3,850,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Brandon Tanev (1 Way Contract)</td>
<td>$3,250,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Ryan Getzlaf</td>
<td>$2,500,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Scott Mayfield</td>
<td>$2,000,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Vladislav Gavrikov</td>
<td>$1,350,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Daniel Sprong</td>
<td>$1,000,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Zach Bogosian</td>
<td>$1,000,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Tucker Poolman</td>
<td>$950,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Isac Lundestrom</td>
<td>$925,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Dillon Dube</td>
<td>$910,833 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Alex Nedeljkovic</td>
<td>$750,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Kyle Rau</td>
<td>$750,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jonny Brodzinski</td>
<td>$750,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>22</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $83,010,833</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $66,450,000</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $43,075,000</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> $19,975,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $82,955,833</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $66,395,000</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $43,075,000</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> $19,975,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $83,010,833</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $66,450,000</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $43,075,000</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> $19,975,000</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Henrik Borgstrom</td>
<td>$149,167 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Otto Leskinen</td>
<td>$95,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Chase Priskie</td>
<td>$92,500 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Sheldon Rempal</td>
<td>$90,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Carter Hart</td>
<td>$86,333 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Madison Bowey</td>
<td>$85,000 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Chris Bigras</td>
<td>$85,000 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Noah Juulsen</td>
<td>$80,000 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Matt Luff</td>
<td>$80,000 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Yegor Zamula</td>
<td>$78,667 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Mikhail Berdin</td>
<td>$75,833 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Matthew Phillips</td>
<td>$75,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Kalle Kossila</td>
<td>$75,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Nikita Nesterov</td>
<td>$70,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>14</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $1,217,500</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $822,000</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $330,000</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> $0</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $1,215,833</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $820,333</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $330,000</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> $0</td></tr>
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
<tr><td>Level 1: </td><td>6000 - $164 - 5,767 - 96.12%</td></tr>
<tr><td>Level 2: </td><td>5000 - $115 - 4,791 - 95.82%</td></tr>
<tr><td>Level 3: </td><td>4000 - $90 - 3,748 - 93.71%</td></tr>
<tr><td>Level 4: </td><td>3000 - $63 - 2,889 - 96.29%</td></tr>
<tr><td>Luxury : </td><td>1000 - $253 - 947 - 94.68%</td></tr>
<tr><td>Total Capacity :</td><td>19000</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Farm Level 1: </td><td>2000 - $100 - 930 - 46.51%</td></tr>
<tr><td>Farm Level 2: </td><td>1000 - $0 - 946 - 94.61%</td></tr>
<tr><td>Farm Total Capacity :</td><td>3000</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Income">Income</h3></td></tr>
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>18,142 - 95.48%</td></tr>
<tr><td>Average Income per Game</td><td>$2,255,656</td></tr>
<tr><td>Year to Date Revenue</td><td>$92,481,886</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>1,876 - 62.55%</td></tr>
<tr><td>Average Income per Game</td><td>$93,022</td></tr>
<tr><td>Year to Date Revenue</td><td>$3,813,900</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>$85,441,499</td></tr>
<tr><td>Farm Players Total Salaries</td><td>$1,705,474</td></tr>
<tr><td>Coaches Total Salaries</td><td>$2,500,000</td></tr>
<tr><td>Luxury Taxe Total</td><td>$0</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>$82,337,365</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>$2,519,856</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>$80,587,356</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>$0</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Pro Estimated Season Revenue</td><td>$0</td></tr>
<tr><td>Farm Estimated Season Revenue</td><td>$0</td></tr>
<tr><td>Pro Remaining Season Days</td><td>0</td></tr>
<tr><td>Pro Expenses Per Days</td><td>$495,406</td></tr>
<tr><td>Pro Estimated Expenses</td><td>$0</td></tr>
<tr><td>Farm Remaining Season Days</td><td>0</td></tr>
<tr><td>Farm Expenses Per Days</td><td>$16,591</td></tr>
<tr><td>Farm Estimated Expenses</td><td>$0</td></tr>
<tr><td>Estimated Season Expenses</td><td>$0</td></tr>
<tr><td>Estimated Season Salary Cap</td><td>$80,587,356</td></tr>
<tr><td>Estimate Under Maximum Salary Cap of $81,500,000</td><td>$912,644</td></tr>
<tr><td>Estimate Over Minimum Salary Cap of $60,200,000 </td><td>$20,387,356</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>$137,141,123</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>$137,141,123</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Auston Matthews</td>
<td>$10,534,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Mikko Rantanen</td>
<td>$9,250,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Dougie Hamilton (1 Way Contract)</td>
<td>$7,250,000 (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Nico Hischier</td>
<td>$7,000,000 (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Kyle Connor (1 Way Contract)</td>
<td>$7,000,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Nick Leddy</td>
<td>$5,500,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Teuvo Teravainen (Out of Payroll)</td>
<td>$5,400,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Yanni Gourde</td>
<td>$4,750,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Nikita Zaitsev</td>
<td>$4,500,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jacob Markstrom</td>
<td>$4,100,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Nick Bonino</td>
<td>$4,000,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Darcy Kuemper</td>
<td>$4,000,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>MacKenzie Weegar (1 Way Contract)</td>
<td>$3,500,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Patrik Nemeth</td>
<td>$2,500,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jason Dickinson</td>
<td>$2,250,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Carter Rowney</td>
<td>$2,000,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Joel Farabee</td>
<td>$1,425,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Michael McLeod</td>
<td>$1,363,333 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Ryan Carpenter</td>
<td>$1,000,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Trevor van Riemsdyk</td>
<td>$950,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Logan O'Connor</td>
<td>$925,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jacob Larsson</td>
<td>$894,166 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Brian Pinho</td>
<td>$750,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>23</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $90,841,499</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $77,447,333</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $55,209,000</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> $28,284,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $89,853,170</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $76,459,004</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $55,209,000</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> $28,284,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $90,841,499</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $77,447,333</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $55,209,000</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> $28,284,000</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Matt Kiersted</td>
<td>$135,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Gavin Bayreuther</td>
<td>$95,500 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Rudolfs Balcers</td>
<td>$92,500 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Frederic Allard</td>
<td>$92,167 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Mikko Lehtonen</td>
<td>$90,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Gabriel Carlsson</td>
<td>$89,417 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Boris Katchouk</td>
<td>$89,417 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Garrett Pilon</td>
<td>$89,417 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Tyler Steenbergen</td>
<td>$87,500 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Brett Seney</td>
<td>$82,500 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Tanner Kaspick</td>
<td>$82,222 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Alexander True</td>
<td>$77,500 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Kale Clague</td>
<td>$76,167 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Ben Gleason</td>
<td>$76,167 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Ken Appleby</td>
<td>$75,000 (4)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jacob Middleton</td>
<td>$75,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Michael Pezzetta</td>
<td>$75,000 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>C.J. Suess</td>
<td>$75,000 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Parker Kelly</td>
<td>$75,000 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Hunter Miska</td>
<td>$75,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>20</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $1,705,474</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $1,148,807</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $377,500</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> $75,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $1,704,807</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $1,148,140</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $376,833</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> $75,000</td></tr>
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
<tr><td>Level 1: </td><td>6000 - $165 - 5,645 - 94.09%</td></tr>
<tr><td>Level 2: </td><td>5000 - $112 - 4,805 - 96.10%</td></tr>
<tr><td>Level 3: </td><td>4000 - $90 - 3,797 - 94.91%</td></tr>
<tr><td>Level 4: </td><td>3000 - $65 - 2,853 - 95.10%</td></tr>
<tr><td>Luxury : </td><td>1000 - $250 - 950 - 95.04%</td></tr>
<tr><td>Total Capacity :</td><td>19000</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Farm Level 1: </td><td>2000 - $35 - 1,985 - 99.23%</td></tr>
<tr><td>Farm Level 2: </td><td>1000 - $0 - 949 - 94.86%</td></tr>
<tr><td>Farm Total Capacity :</td><td>3000</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Income">Income</h3></td></tr>
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>18,051 - 95.00%</td></tr>
<tr><td>Average Income per Game</td><td>$2,234,429</td></tr>
<tr><td>Year to Date Revenue</td><td>$91,611,590</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>2,933 - 97.77%</td></tr>
<tr><td>Average Income per Game</td><td>$69,461</td></tr>
<tr><td>Year to Date Revenue</td><td>$2,847,915</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>$83,114,166</td></tr>
<tr><td>Farm Players Total Salaries</td><td>$446,333</td></tr>
<tr><td>Coaches Total Salaries</td><td>$6,800,000</td></tr>
<tr><td>Luxury Taxe Total</td><td>$0</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>$77,310,487</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>$1,222,859</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>$71,310,492</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>$0</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Pro Estimated Season Revenue</td><td>$0</td></tr>
<tr><td>Farm Estimated Season Revenue</td><td>$0</td></tr>
<tr><td>Pro Remaining Season Days</td><td>0</td></tr>
<tr><td>Pro Expenses Per Days</td><td>$506,330</td></tr>
<tr><td>Pro Estimated Expenses</td><td>$0</td></tr>
<tr><td>Farm Remaining Season Days</td><td>0</td></tr>
<tr><td>Farm Expenses Per Days</td><td>$8,421</td></tr>
<tr><td>Farm Estimated Expenses</td><td>$0</td></tr>
<tr><td>Estimated Season Expenses</td><td>$0</td></tr>
<tr><td>Estimated Season Salary Cap</td><td>$71,310,492</td></tr>
<tr><td>Estimate Under Maximum Salary Cap of $81,500,000</td><td>$10,189,508</td></tr>
<tr><td>Estimate Over Minimum Salary Cap of $60,200,000 </td><td>$11,110,492</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>$47,792,101</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>$47,792,101</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Jack Eichel</td>
<td>$10,000,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Drew Doughty</td>
<td>$9,250,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Erik Karlsson</td>
<td>$9,200,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jacob Trouba</td>
<td>$7,500,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Connor Hellebuyck</td>
<td>$7,000,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Sean Monahan</td>
<td>$6,375,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Dmitry Orlov</td>
<td>$5,100,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Rickard Rakell</td>
<td>$5,000,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Alex Iafallo (1 Way Contract)</td>
<td>$4,000,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Chandler Stephenson (1 Way Contract)</td>
<td>$3,000,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jesper Bratt (Out of Payroll)</td>
<td>$2,850,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Blake Comeau</td>
<td>$2,400,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Pavel Zacha</td>
<td>$2,400,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jani Hakanpaa</td>
<td>$1,750,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Gabriel Vilardi</td>
<td>$1,627,500 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Sean Walker</td>
<td>$1,500,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Matt Roy</td>
<td>$1,000,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jujhar Khaira</td>
<td>$950,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Carl Grundstrom</td>
<td>$925,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Blake Lizotte</td>
<td>$925,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Calvin Petersen</td>
<td>$858,333 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Nicolas Meloche</td>
<td>$853,333 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Ville Husso</td>
<td>$750,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Michael Chaput</td>
<td>$750,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>24</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $85,964,166</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $54,389,166</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $26,500,000</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> $19,000,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $85,964,166</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $54,389,166</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $26,500,000</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> $19,000,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $85,964,166</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $54,389,166</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $26,500,000</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> $19,000,000</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Derrick Pouliot</td>
<td>$130,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jaret Anderson-Dolan</td>
<td>$91,333 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Kevin Gravel</td>
<td>$75,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Dan Renouf</td>
<td>$75,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Cameron Darcy</td>
<td>$75,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>5</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $446,333</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $241,333</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $91,333</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> $0</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $446,333</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $241,333</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $91,333</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> $0</td></tr>
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
<tr><td>Level 1: </td><td>6000 - $220 - 3,753 - 62.55%</td></tr>
<tr><td>Level 2: </td><td>5000 - $160 - 3,060 - 61.21%</td></tr>
<tr><td>Level 3: </td><td>4000 - $135 - 2,326 - 58.14%</td></tr>
<tr><td>Level 4: </td><td>3000 - $110 - 1,552 - 51.72%</td></tr>
<tr><td>Luxury : </td><td>1000 - $300 - 686 - 68.56%</td></tr>
<tr><td>Total Capacity :</td><td>19000</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Farm Level 1: </td><td>2000 - $35 - 1,984 - 99.18%</td></tr>
<tr><td>Farm Level 2: </td><td>1000 - $0 - 956 - 95.60%</td></tr>
<tr><td>Farm Total Capacity :</td><td>3000</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Income">Income</h3></td></tr>
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>11,376 - 59.88%</td></tr>
<tr><td>Average Income per Game</td><td>$2,005,651</td></tr>
<tr><td>Year to Date Revenue</td><td>$82,231,695</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>2,940 - 97.99%</td></tr>
<tr><td>Average Income per Game</td><td>$69,425</td></tr>
<tr><td>Year to Date Revenue</td><td>$2,846,410</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>$83,299,166</td></tr>
<tr><td>Farm Players Total Salaries</td><td>$331,917</td></tr>
<tr><td>Coaches Total Salaries</td><td>$5,750,000</td></tr>
<tr><td>Luxury Taxe Total</td><td>$0</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>$84,910,996</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>$1,283,871</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>$79,911,012</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>$0</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Pro Estimated Season Revenue</td><td>$0</td></tr>
<tr><td>Farm Estimated Season Revenue</td><td>$0</td></tr>
<tr><td>Pro Remaining Season Days</td><td>0</td></tr>
<tr><td>Pro Expenses Per Days</td><td>$501,700</td></tr>
<tr><td>Pro Estimated Expenses</td><td>$0</td></tr>
<tr><td>Farm Remaining Season Days</td><td>0</td></tr>
<tr><td>Farm Expenses Per Days</td><td>$7,310</td></tr>
<tr><td>Farm Estimated Expenses</td><td>$0</td></tr>
<tr><td>Estimated Season Expenses</td><td>$0</td></tr>
<tr><td>Estimated Season Salary Cap</td><td>$79,911,012</td></tr>
<tr><td>Estimate Under Maximum Salary Cap of $81,500,000</td><td>$1,588,988</td></tr>
<tr><td>Estimate Over Minimum Salary Cap of $60,200,000 </td><td>$19,711,012</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>$80,397,938</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>$80,397,938</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Nikita Kucherov (1 Way Contract)</td>
<td>$9,500,000 (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Leon Draisaitl</td>
<td>$8,500,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Oliver Ekman-Larsson</td>
<td>$8,100,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Tuukka Rask</td>
<td>$7,500,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>William Nylander</td>
<td>$6,815,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Thomas Chabot</td>
<td>$6,500,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Kevin Hayes</td>
<td>$6,200,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Pierre-Luc Dubois (1 Way Contract)</td>
<td>$6,000,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Charlie McAvoy (1 Way Contract)</td>
<td>$4,900,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Cody Ceci</td>
<td>$3,500,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jesper Fast</td>
<td>$2,200,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Oskar Sundqvist (1 Way Contract)</td>
<td>$2,000,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Cedric Paquette</td>
<td>$1,660,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Kirill Kaprizov</td>
<td>$1,387,500 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Filip Chytil</td>
<td>$1,244,166 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Nate Thompson</td>
<td>$1,100,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Christian Fischer</td>
<td>$1,000,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Kaapo Kahkonen</td>
<td>$925,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Nico Sturm</td>
<td>$925,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Craig Anderson</td>
<td>$900,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Urho Vaakanainen</td>
<td>$894,167 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Slater Koekkoek (Out of Payroll)</td>
<td>$800,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Ethan Bear</td>
<td>$798,333 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Wayne Simmonds</td>
<td>$750,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>24</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $84,099,166</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $68,930,000</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $31,802,500</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> $15,500,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $84,020,833</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $68,851,667</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $31,802,500</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> $15,500,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $84,099,166</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $68,930,000</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $31,802,500</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> $15,500,000</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Brady Keeper</td>
<td>$92,500 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Libor Hajek</td>
<td>$89,417 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Gabriel Dumont</td>
<td>$75,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Zack MacEwen</td>
<td>$75,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>4</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $331,917</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $239,417</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> $0</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $325,833</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $233,333</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> $0</td></tr>
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
<tr><td>Level 1: </td><td>6000 - $170 - 5,655 - 94.24%</td></tr>
<tr><td>Level 2: </td><td>5000 - $121 - 4,718 - 94.36%</td></tr>
<tr><td>Level 3: </td><td>4000 - $95 - 3,770 - 94.25%</td></tr>
<tr><td>Level 4: </td><td>3000 - $71 - 2,836 - 94.53%</td></tr>
<tr><td>Luxury : </td><td>1000 - $255 - 944 - 94.44%</td></tr>
<tr><td>Total Capacity :</td><td>19000</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Farm Level 1: </td><td>2000 - $55 - 1,891 - 94.56%</td></tr>
<tr><td>Farm Level 2: </td><td>1000 - $0 - 949 - 94.90%</td></tr>
<tr><td>Farm Total Capacity :</td><td>3000</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Income">Income</h3></td></tr>
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>17,923 - 94.33%</td></tr>
<tr><td>Average Income per Game</td><td>$2,338,942</td></tr>
<tr><td>Year to Date Revenue</td><td>$95,896,627</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>2,840 - 94.67%</td></tr>
<tr><td>Average Income per Game</td><td>$101,841</td></tr>
<tr><td>Year to Date Revenue</td><td>$4,175,485</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>$78,675,000</td></tr>
<tr><td>Farm Players Total Salaries</td><td>$1,573,866</td></tr>
<tr><td>Coaches Total Salaries</td><td>$3,800,000</td></tr>
<tr><td>Luxury Taxe Total</td><td>$0</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>$82,659,812</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>$2,143,888</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>$79,659,770</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>$0</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Pro Estimated Season Revenue</td><td>$0</td></tr>
<tr><td>Farm Estimated Season Revenue</td><td>$0</td></tr>
<tr><td>Pro Remaining Season Days</td><td>0</td></tr>
<tr><td>Pro Expenses Per Days</td><td>$464,062</td></tr>
<tr><td>Pro Estimated Expenses</td><td>$0</td></tr>
<tr><td>Farm Remaining Season Days</td><td>0</td></tr>
<tr><td>Farm Expenses Per Days</td><td>$16,040</td></tr>
<tr><td>Farm Estimated Expenses</td><td>$0</td></tr>
<tr><td>Estimated Season Expenses</td><td>$0</td></tr>
<tr><td>Estimated Season Salary Cap</td><td>$79,659,770</td></tr>
<tr><td>Estimate Under Maximum Salary Cap of $81,500,000</td><td>$1,840,230</td></tr>
<tr><td>Estimate Over Minimum Salary Cap of $60,200,000 </td><td>$19,459,770</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>$72,253,418</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>$72,253,418</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Jonathan Toews</td>
<td>$11,000,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Duncan Keith</td>
<td>$7,500,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Patric Hornqvist</td>
<td>$7,000,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Chris Tanev</td>
<td>$6,500,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Timo Meier (1 Way Contract)</td>
<td>$6,000,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Darnell Nurse</td>
<td>$6,000,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Robin Lehner</td>
<td>$6,000,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>William Karlsson</td>
<td>$5,850,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Adam Larsson (1 Way Contract)</td>
<td>$5,500,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Mattias Ekholm (Out of Payroll)</td>
<td>$5,000,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Kirby Dach</td>
<td>$3,425,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Sam Gagner</td>
<td>$2,200,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Brandon Sutter</td>
<td>$2,000,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Anders Bjork (1 Way Contract)</td>
<td>$1,650,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Corey Perry (Out of Payroll)</td>
<td>$1,500,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Nick Ritchie</td>
<td>$1,500,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Matt Irwin</td>
<td>$1,350,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Matthew Boldy</td>
<td>$1,325,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Keith Kinkaid</td>
<td>$1,250,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Joel Kiviranta</td>
<td>$950,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Niko Mikkola</td>
<td>$925,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Gemel Smith (Out of Payroll)</td>
<td>$900,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Radim Zohorna</td>
<td>$750,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>23</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $86,075,000</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $61,100,000</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $35,675,000</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> $6,000,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $85,992,500</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $61,017,500</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $35,675,000</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> $6,000,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $86,075,000</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $61,100,000</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $35,675,000</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> $6,000,000</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Jimmy Vesey</td>
<td>$250,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Antti Suomela</td>
<td>$95,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Blake Speers</td>
<td>$93,583 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Antoine Morand</td>
<td>$92,700 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Nathan Noel</td>
<td>$92,500 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jan Jenik</td>
<td>$90,250 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Mark Friedman</td>
<td>$82,500 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Leon Gawanke</td>
<td>$81,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Garret Sparks</td>
<td>$80,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Alex Lyon</td>
<td>$80,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Maxime Lajoie</td>
<td>$80,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Hunter Drew</td>
<td>$79,333 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jake Massie</td>
<td>$77,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jakob Stukel</td>
<td>$75,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Brent Gates</td>
<td>$75,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Thomas Schemitsch</td>
<td>$75,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Kyle Criscuolo</td>
<td>$75,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>17</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $1,573,866</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $1,006,366</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $90,250</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> $0</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $1,570,366</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $1,002,866</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $90,250</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> $0</td></tr>
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
<tr><td>Level 1: </td><td>6000 - $145 - 5,802 - 96.70%</td></tr>
<tr><td>Level 2: </td><td>5000 - $115 - 4,790 - 95.80%</td></tr>
<tr><td>Level 3: </td><td>4000 - $90 - 3,812 - 95.31%</td></tr>
<tr><td>Level 4: </td><td>3000 - $62 - 2,908 - 96.93%</td></tr>
<tr><td>Luxury : </td><td>1000 - $230 - 898 - 89.77%</td></tr>
<tr><td>Total Capacity :</td><td>19000</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Farm Level 1: </td><td>2000 - $35 - 1,983 - 99.17%</td></tr>
<tr><td>Farm Level 2: </td><td>1000 - $0 - 960 - 96.01%</td></tr>
<tr><td>Farm Total Capacity :</td><td>3000</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Income">Income</h3></td></tr>
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>18,210 - 95.84%</td></tr>
<tr><td>Average Income per Game</td><td>$2,136,854</td></tr>
<tr><td>Year to Date Revenue</td><td>$87,611,001</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>2,943 - 98.12%</td></tr>
<tr><td>Average Income per Game</td><td>$69,419</td></tr>
<tr><td>Year to Date Revenue</td><td>$2,846,165</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>$79,850,000</td></tr>
<tr><td>Farm Players Total Salaries</td><td>$1,387,963</td></tr>
<tr><td>Coaches Total Salaries</td><td>$3,150,000</td></tr>
<tr><td>Luxury Taxe Total</td><td>$0</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>$82,251,917</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>$2,168,960</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>$79,061,572</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>$0</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Pro Estimated Season Revenue</td><td>$0</td></tr>
<tr><td>Farm Estimated Season Revenue</td><td>$0</td></tr>
<tr><td>Pro Remaining Season Days</td><td>0</td></tr>
<tr><td>Pro Expenses Per Days</td><td>$467,898</td></tr>
<tr><td>Pro Estimated Expenses</td><td>$0</td></tr>
<tr><td>Farm Remaining Season Days</td><td>0</td></tr>
<tr><td>Farm Expenses Per Days</td><td>$13,770</td></tr>
<tr><td>Farm Estimated Expenses</td><td>$0</td></tr>
<tr><td>Estimated Season Expenses</td><td>$0</td></tr>
<tr><td>Estimated Season Salary Cap</td><td>$79,061,572</td></tr>
<tr><td>Estimate Under Maximum Salary Cap of $81,500,000</td><td>$2,438,428</td></tr>
<tr><td>Estimate Over Minimum Salary Cap of $60,200,000 </td><td>$18,861,572</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>$88,731,143</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>$88,731,143</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Mika Zibanejad</td>
<td>$9,000,000 (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Johnny Gaudreau</td>
<td>$8,500,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Marc-Edouard Vlasic</td>
<td>$8,000,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Artemi Panarin</td>
<td>$7,500,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jake Guentzel</td>
<td>$7,100,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Josh Morrissey</td>
<td>$6,375,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Nate Schmidt</td>
<td>$5,625,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Morgan Rielly</td>
<td>$5,500,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Zach Hyman (1 Way Contract)</td>
<td>$5,250,000 (6)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Alec Martinez (Out of Payroll)</td>
<td>$5,000,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Tristan Jarry</td>
<td>$3,250,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jack Campbell</td>
<td>$2,000,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Mason Appleton</td>
<td>$2,000,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jake Gardiner</td>
<td>$1,500,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Cal Clutterbuck</td>
<td>$1,350,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Nick Suzuki</td>
<td>$1,325,833 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Carter Hutton</td>
<td>$1,250,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Kevin Stenlund</td>
<td>$925,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Rasmus Sandin</td>
<td>$894,167 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jordan Kyrou</td>
<td>$880,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Nathan Gerbe</td>
<td>$875,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Andrew Ladd</td>
<td>$750,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>22</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $84,850,000</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $63,850,000</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $31,600,000</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> $15,600,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $84,352,501</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $63,352,501</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $31,600,000</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> $15,600,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $84,850,000</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $63,850,000</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $31,600,000</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> $15,600,000</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Zach Senyshyn</td>
<td>$128,800 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Trent Frederic</td>
<td>$113,750 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Eetu Tuulola</td>
<td>$92,500 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Cameron Hughes</td>
<td>$92,500 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Lucas Johansen</td>
<td>$92,500 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Matthew Peca</td>
<td>$92,500 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Dominic Turgeon</td>
<td>$91,917 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Ian Scott</td>
<td>$90,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Mason McDonald</td>
<td>$89,417 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Ryan MacInnis</td>
<td>$87,413 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Alex Alexeyev</td>
<td>$86,333 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jeremy Roy</td>
<td>$86,333 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Luke Green</td>
<td>$83,833 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Martin Pospisil</td>
<td>$81,000 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Aidan Dudas</td>
<td>$79,167 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>15</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $1,387,962</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $960,996</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $425,917</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> $0</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $1,391,046</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $964,080</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $425,917</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> $0</td></tr>
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
<tr><td>Level 1: </td><td>6000 - $172 - 5,629 - 93.82%</td></tr>
<tr><td>Level 2: </td><td>5000 - $122 - 4,680 - 93.61%</td></tr>
<tr><td>Level 3: </td><td>4000 - $95 - 3,737 - 93.42%</td></tr>
<tr><td>Level 4: </td><td>3000 - $71 - 2,882 - 96.06%</td></tr>
<tr><td>Luxury : </td><td>1000 - $255 - 940 - 93.99%</td></tr>
<tr><td>Total Capacity :</td><td>19000</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Farm Level 1: </td><td>2000 - $100 - 911 - 45.54%</td></tr>
<tr><td>Farm Level 2: </td><td>1000 - $0 - 940 - 94.03%</td></tr>
<tr><td>Farm Total Capacity :</td><td>3000</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Income">Income</h3></td></tr>
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>17,868 - 94.04%</td></tr>
<tr><td>Average Income per Game</td><td>$2,336,004</td></tr>
<tr><td>Year to Date Revenue</td><td>$95,776,156</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>1,851 - 61.71%</td></tr>
<tr><td>Average Income per Game</td><td>$91,088</td></tr>
<tr><td>Year to Date Revenue</td><td>$3,734,600</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>$86,585,417</td></tr>
<tr><td>Farm Players Total Salaries</td><td>$1,555,582</td></tr>
<tr><td>Coaches Total Salaries</td><td>$5,700,000</td></tr>
<tr><td>Luxury Taxe Total</td><td>$0</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>$85,050,127</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>$2,245,507</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>$80,050,129</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>$0</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Pro Estimated Season Revenue</td><td>$0</td></tr>
<tr><td>Farm Estimated Season Revenue</td><td>$0</td></tr>
<tr><td>Pro Remaining Season Days</td><td>0</td></tr>
<tr><td>Pro Expenses Per Days</td><td>$520,372</td></tr>
<tr><td>Pro Estimated Expenses</td><td>$0</td></tr>
<tr><td>Farm Remaining Season Days</td><td>0</td></tr>
<tr><td>Farm Expenses Per Days</td><td>$15,240</td></tr>
<tr><td>Farm Estimated Expenses</td><td>$0</td></tr>
<tr><td>Estimated Season Expenses</td><td>$0</td></tr>
<tr><td>Estimated Season Salary Cap</td><td>$80,050,129</td></tr>
<tr><td>Estimate Under Maximum Salary Cap of $81,500,000</td><td>$1,449,871</td></tr>
<tr><td>Estimate Over Minimum Salary Cap of $60,200,000 </td><td>$19,850,129</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>$53,996,771</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>$53,996,771</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Ben Bishop</td>
<td>$9,000,000 (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Claude Giroux</td>
<td>$8,660,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Bo Horvat</td>
<td>$6,250,000 (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Dylan Larkin</td>
<td>$6,100,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Zdeno Chara</td>
<td>$6,000,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Tom Wilson</td>
<td>$5,000,000 (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jaccob Slavin</td>
<td>$5,000,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Andre Burakovsky</td>
<td>$4,900,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Brady Skjei</td>
<td>$4,850,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Phillip Danault</td>
<td>$4,750,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>David Perron</td>
<td>$4,500,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Tanner Pearson</td>
<td>$4,000,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Braydon Coburn (1 Way Contract)</td>
<td>$4,000,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Pavel Buchnevich</td>
<td>$3,500,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Adam Lowry</td>
<td>$2,850,000 (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Matthew Nieto</td>
<td>$1,500,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Casey DeSmith</td>
<td>$1,250,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Devon Toews</td>
<td>$1,031,250 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Logan Stanley</td>
<td>$900,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jason Robertson</td>
<td>$894,167 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Matt Benning</td>
<td>$850,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Michael Raffl</td>
<td>$800,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>22</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $86,585,417</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $57,704,167</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $40,644,167</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> $37,600,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $86,585,417</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $57,704,167</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $40,644,167</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> $37,600,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $86,585,417</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $57,704,167</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $40,644,167</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> $37,600,000</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Samuel Morin</td>
<td>$136,333 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jake Bean</td>
<td>$136,333 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Nick Merkley</td>
<td>$107,583 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Joel Kellman</td>
<td>$100,000 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Rasmus Asplund</td>
<td>$92,500 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Mike Hardman</td>
<td>$92,500 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>David Gustafsson</td>
<td>$92,500 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Reese Johnson</td>
<td>$92,500 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Steven Santini</td>
<td>$90,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Vitaly Abramov</td>
<td>$88,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Tyrell Goulbourne</td>
<td>$77,333 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Blake Hillman</td>
<td>$75,000 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Zach Trotman</td>
<td>$75,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Rob O'Gara</td>
<td>$75,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Mathieu Olivier</td>
<td>$75,000 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Brad Malone</td>
<td>$75,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Evan Cormier</td>
<td>$75,000 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>17</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $1,555,582</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $991,916</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $325,000</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> $0</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $1,547,582</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $983,916</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $325,000</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> $0</td></tr>
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
<tr><td>Level 1: </td><td>6000 - $167 - 5,705 - 95.09%</td></tr>
<tr><td>Level 2: </td><td>5000 - $115 - 4,776 - 95.52%</td></tr>
<tr><td>Level 3: </td><td>4000 - $90 - 3,827 - 95.68%</td></tr>
<tr><td>Level 4: </td><td>3000 - $55 - 2,948 - 98.27%</td></tr>
<tr><td>Luxury : </td><td>1000 - $230 - 949 - 94.94%</td></tr>
<tr><td>Total Capacity :</td><td>19000</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Farm Level 1: </td><td>2000 - $45 - 1,926 - 96.31%</td></tr>
<tr><td>Farm Level 2: </td><td>1000 - $0 - 952 - 95.20%</td></tr>
<tr><td>Farm Total Capacity :</td><td>3000</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Income">Income</h3></td></tr>
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>18,206 - 95.82%</td></tr>
<tr><td>Average Income per Game</td><td>$2,227,022</td></tr>
<tr><td>Year to Date Revenue</td><td>$91,307,920</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>2,878 - 95.94%</td></tr>
<tr><td>Average Income per Game</td><td>$86,683</td></tr>
<tr><td>Year to Date Revenue</td><td>$3,554,010</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>$82,474,166</td></tr>
<tr><td>Farm Players Total Salaries</td><td>$620,000</td></tr>
<tr><td>Coaches Total Salaries</td><td>$3,875,000</td></tr>
<tr><td>Luxury Taxe Total</td><td>$0</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>$83,272,038</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>$1,381,556</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>$80,122,028</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>$0</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Pro Estimated Season Revenue</td><td>$0</td></tr>
<tr><td>Farm Estimated Season Revenue</td><td>$0</td></tr>
<tr><td>Pro Remaining Season Days</td><td>0</td></tr>
<tr><td>Pro Expenses Per Days</td><td>$486,501</td></tr>
<tr><td>Pro Estimated Expenses</td><td>$0</td></tr>
<tr><td>Farm Remaining Season Days</td><td>0</td></tr>
<tr><td>Farm Expenses Per Days</td><td>$9,088</td></tr>
<tr><td>Farm Estimated Expenses</td><td>$0</td></tr>
<tr><td>Estimated Season Expenses</td><td>$0</td></tr>
<tr><td>Estimated Season Salary Cap</td><td>$80,122,028</td></tr>
<tr><td>Estimate Under Maximum Salary Cap of $81,500,000</td><td>$1,377,972</td></tr>
<tr><td>Estimate Over Minimum Salary Cap of $60,200,000 </td><td>$19,922,028</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>$42,821,467</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>$42,821,467</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Ryan Strome</td>
<td>$7,000,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Alexander Edler</td>
<td>$7,000,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Keith Yandle</td>
<td>$6,350,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Brock Nelson</td>
<td>$6,000,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Cam Atkinson</td>
<td>$5,900,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jonas Brodin (1 Way Contract)</td>
<td>$5,250,000 (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Kevin Fiala</td>
<td>$5,100,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Mikko Koskinen</td>
<td>$4,500,000 (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Mike Hoffman</td>
<td>$4,500,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Brian Dumoulin</td>
<td>$4,200,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Viktor Arvidsson (1 Way Contract)</td>
<td>$3,950,000 (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Rasmus Dahlin</td>
<td>$3,775,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Bryan Rust</td>
<td>$3,500,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Joel Eriksson Ek</td>
<td>$3,000,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Tyler Ennis</td>
<td>$3,000,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Nathan Beaulieu</td>
<td>$2,250,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Filip Zadina</td>
<td>$1,775,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jordan Weal</td>
<td>$1,250,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Kailer Yamamoto</td>
<td>$1,124,166 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Michael Hutchinson</td>
<td>$800,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Justin Bailey</td>
<td>$750,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Cameron Gaunce</td>
<td>$750,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Brandon Manning</td>
<td>$750,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>23</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $82,474,166</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $54,425,000</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $35,550,000</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> $23,700,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $81,574,166</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $53,525,000</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $35,550,000</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> $23,700,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $82,474,166</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $54,425,000</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $35,550,000</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> $23,700,000</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Collin Delia</td>
<td>$100,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Tyler Wall</td>
<td>$92,500 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Trey Fix-Wolansky</td>
<td>$92,500 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Brandon Duhaime</td>
<td>$92,500 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Mason Shaw</td>
<td>$92,500 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Nolan Stevens</td>
<td>$75,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Josiah Didier</td>
<td>$75,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>7</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $620,000</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $620,000</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $92,500</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> $0</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $615,000</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $615,000</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $92,500</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> $0</td></tr>
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
<tr><td>Level 1: </td><td>6000 - $172 - 5,654 - 94.24%</td></tr>
<tr><td>Level 2: </td><td>5000 - $125 - 4,753 - 95.07%</td></tr>
<tr><td>Level 3: </td><td>4000 - $98 - 3,334 - 83.35%</td></tr>
<tr><td>Level 4: </td><td>3000 - $73 - 2,307 - 76.91%</td></tr>
<tr><td>Luxury : </td><td>1000 - $255 - 839 - 83.88%</td></tr>
<tr><td>Total Capacity :</td><td>19000</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Farm Level 1: </td><td>2000 - $40 - 1,962 - 98.12%</td></tr>
<tr><td>Farm Level 2: </td><td>1000 - $0 - 947 - 94.68%</td></tr>
<tr><td>Farm Total Capacity :</td><td>3000</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Income">Income</h3></td></tr>
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>16,888 - 88.88%</td></tr>
<tr><td>Average Income per Game</td><td>$2,282,651</td></tr>
<tr><td>Year to Date Revenue</td><td>$93,588,685</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>2,909 - 96.97%</td></tr>
<tr><td>Average Income per Game</td><td>$78,499</td></tr>
<tr><td>Year to Date Revenue</td><td>$3,218,440</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>$50,565,833</td></tr>
<tr><td>Farm Players Total Salaries</td><td>$950,583</td></tr>
<tr><td>Coaches Total Salaries</td><td>$4,800,000</td></tr>
<tr><td>Luxury Taxe Total</td><td>$0</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>$76,931,057</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>$2,142,969</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>$72,931,024</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>$0</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Pro Estimated Season Revenue</td><td>$0</td></tr>
<tr><td>Farm Estimated Season Revenue</td><td>$0</td></tr>
<tr><td>Pro Remaining Season Days</td><td>0</td></tr>
<tr><td>Pro Expenses Per Days</td><td>$310,033</td></tr>
<tr><td>Pro Estimated Expenses</td><td>$0</td></tr>
<tr><td>Farm Remaining Season Days</td><td>0</td></tr>
<tr><td>Farm Expenses Per Days</td><td>$11,828</td></tr>
<tr><td>Farm Estimated Expenses</td><td>$0</td></tr>
<tr><td>Estimated Season Expenses</td><td>$0</td></tr>
<tr><td>Estimated Season Salary Cap</td><td>$72,931,024</td></tr>
<tr><td>Estimate Under Maximum Salary Cap of $81,500,000</td><td>$8,568,976</td></tr>
<tr><td>Estimate Over Minimum Salary Cap of $60,200,000 </td><td>$12,731,024</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>$98,157,701</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>$98,157,701</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Ryan McDonagh</td>
<td>$7,100,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Colton Parayko</td>
<td>$6,500,000 (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jean-Gabriel Pageau (Out of Payroll)</td>
<td>$6,200,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jamie Benn</td>
<td>$6,000,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jordan Eberle</td>
<td>$5,750,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Andrei Svechnikov</td>
<td>$3,575,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Travis Sanheim (1 Way Contract)</td>
<td>$3,250,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Colton Sissons</td>
<td>$2,975,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Mackenzie Blackwood (1 Way Contract)</td>
<td>$2,500,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Lias Andersson</td>
<td>$1,775,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jake Evans</td>
<td>$1,350,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Martin Kaut</td>
<td>$1,319,167 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Haydn Fleury</td>
<td>$1,300,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Henri Jokiharju</td>
<td>$1,279,166 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>K'Andre Miller</td>
<td>$1,275,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Liam Foudy</td>
<td>$1,269,167 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Nolan Patrick (Out of Payroll)</td>
<td>$1,000,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Adin Hill</td>
<td>$975,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Milan Lucic</td>
<td>$800,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Morgan Geekie</td>
<td>$800,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Drake Batherson</td>
<td>$773,333 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>21</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $57,765,833</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $45,138,334</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $35,800,000</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> $12,250,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $57,765,833</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $45,138,334</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $35,800,000</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> $12,250,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $57,765,833</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $45,138,334</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $35,800,000</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> $12,250,000</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Vitaly Kravtsov</td>
<td>$177,500 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jamie Drysdale</td>
<td>$177,500 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Juuso Valimaki</td>
<td>$131,917 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Pierre-Olivier Joseph</td>
<td>$107,583 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Adam Werner</td>
<td>$92,500 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Gustav Lindstrom</td>
<td>$92,500 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Josh Brook</td>
<td>$91,083 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Nick Baptiste</td>
<td>$80,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>8</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $950,583</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $738,666</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $553,666</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> $0</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $950,583</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $738,666</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $553,666</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> $0</td></tr>
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
<tr><td>Level 1: </td><td>6000 - $160 - 5,707 - 95.12%</td></tr>
<tr><td>Level 2: </td><td>5000 - $120 - 4,793 - 95.86%</td></tr>
<tr><td>Level 3: </td><td>4000 - $95 - 3,749 - 93.73%</td></tr>
<tr><td>Level 4: </td><td>3000 - $70 - 2,850 - 95.01%</td></tr>
<tr><td>Luxury : </td><td>1000 - $208 - 965 - 96.51%</td></tr>
<tr><td>Total Capacity :</td><td>19000</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Farm Level 1: </td><td>2000 - $50 - 1,914 - 95.71%</td></tr>
<tr><td>Farm Level 2: </td><td>1000 - $0 - 951 - 95.12%</td></tr>
<tr><td>Farm Total Capacity :</td><td>3000</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Income">Income</h3></td></tr>
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>18,065 - 95.08%</td></tr>
<tr><td>Average Income per Game</td><td>$2,244,733</td></tr>
<tr><td>Year to Date Revenue</td><td>$92,034,048</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>2,865 - 95.51%</td></tr>
<tr><td>Average Income per Game</td><td>$95,710</td></tr>
<tr><td>Year to Date Revenue</td><td>$3,924,100</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>$39,529,956</td></tr>
<tr><td>Farm Players Total Salaries</td><td>$2,650,916</td></tr>
<tr><td>Coaches Total Salaries</td><td>$5,100,000</td></tr>
<tr><td>Luxury Taxe Total</td><td>$0</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>$69,108,994</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>$3,448,400</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>$64,551,484</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>$0</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Pro Estimated Season Revenue</td><td>$0</td></tr>
<tr><td>Farm Estimated Season Revenue</td><td>$0</td></tr>
<tr><td>Pro Remaining Season Days</td><td>0</td></tr>
<tr><td>Pro Expenses Per Days</td><td>$250,170</td></tr>
<tr><td>Pro Estimated Expenses</td><td>$0</td></tr>
<tr><td>Farm Remaining Season Days</td><td>0</td></tr>
<tr><td>Farm Expenses Per Days</td><td>$21,966</td></tr>
<tr><td>Farm Estimated Expenses</td><td>$0</td></tr>
<tr><td>Estimated Season Expenses</td><td>$0</td></tr>
<tr><td>Estimated Season Salary Cap</td><td>$64,551,484</td></tr>
<tr><td>Estimate Under Maximum Salary Cap of $81,500,000</td><td>$16,948,516</td></tr>
<tr><td>Estimate Over Minimum Salary Cap of $60,200,000 </td><td>$4,351,484</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>$34,240,580</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>$34,240,580</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Ryan Johansen (Out of Payroll)</td>
<td>$8,000,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Anton Khudobin (Out of Payroll)</td>
<td>$6,250,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Mikhail Sergachev</td>
<td>$5,250,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jakob Chychrun</td>
<td>$4,900,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Filip Hronek (1 Way Contract)</td>
<td>$3,950,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Marcus Pettersson (1 Way Contract)</td>
<td>$3,900,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jack Hughes</td>
<td>$3,775,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Artem Zub (Out of Payroll)</td>
<td>$2,500,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Vinnie Hinostroza</td>
<td>$2,500,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Brett Kulak</td>
<td>$1,850,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Ryan Hartman</td>
<td>$1,575,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Troy Terry</td>
<td>$1,491,666 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Casey Mittelstadt</td>
<td>$1,491,666 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Alexander Barabanov</td>
<td>$1,000,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Mattias Samuelsson</td>
<td>$925,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Alexander Volkov</td>
<td>$925,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Philipp Kurashev</td>
<td>$925,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Hugo Alnefelt</td>
<td>$925,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Filip Gustavsson</td>
<td>$910,833 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Evgeny Svechnikov</td>
<td>$874,125 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>A.J. Greer</td>
<td>$825,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Otto Koivula</td>
<td>$786,666 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Zachary Fucale (Out of Payroll)</td>
<td>$750,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Sheldon Dries</td>
<td>$750,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>24</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $57,029,956</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $37,696,624</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $13,350,000</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> $5,250,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $54,047,458</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $34,764,126</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $13,350,000</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> $5,250,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $57,029,956</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $37,696,624</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $13,350,000</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> $5,250,000</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Kaapo Kakko</td>
<td>$357,500 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Quinton Byfield</td>
<td>$357,500 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>William Eklund</td>
<td>$177,500 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Grigori Denisenko</td>
<td>$177,500 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>William Carrier</td>
<td>$140,000 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Sasha Chmelevski</td>
<td>$92,750 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Connor Ingram</td>
<td>$92,500 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Alec Regula</td>
<td>$92,500 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Michal Teply</td>
<td>$92,500 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Cole Koepke</td>
<td>$92,500 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Will Cuylle</td>
<td>$92,500 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Donovan Sebrango</td>
<td>$92,500 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Kaedan Korczak</td>
<td>$92,500 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Ty Emberson</td>
<td>$92,500 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Mitchell Stephens</td>
<td>$91,917 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Matej Pekar</td>
<td>$91,333 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jacob MacDonald</td>
<td>$90,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Antonio Stranges</td>
<td>$89,333 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Angus Crookshank</td>
<td>$83,833 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Andrei Altybarmakyan</td>
<td>$81,750 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Drake Caggiula</td>
<td>$80,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>21</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $2,650,916</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $2,560,916</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $1,846,249</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> $0</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $2,371,000</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $2,281,000</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $1,846,249</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> $0</td></tr>
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
<br /><br /><table class="STHSTableFullW"><tr><td style="vertical-align: top;width:440px;">
<table class="STHSFinance_TeamTable">
<tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_AreanaCapacity">Arena Capacity - Ticket Price<br />Attendance - %</h3></td></tr>
<tr><td class="STHSW250">Arena Name</td><td class="STHSW200">Barclays Center</td></tr>
<tr><td>Level 1: </td><td>6000 - $211 - 3,955 - 65.92%</td></tr>
<tr><td>Level 2: </td><td>5000 - $155 - 3,205 - 64.10%</td></tr>
<tr><td>Level 3: </td><td>4000 - $125 - 2,502 - 62.54%</td></tr>
<tr><td>Level 4: </td><td>3000 - $100 - 1,717 - 57.24%</td></tr>
<tr><td>Luxury : </td><td>1000 - $280 - 719 - 71.88%</td></tr>
<tr><td>Total Capacity :</td><td>19000</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Farm Level 1: </td><td>2000 - $19 - 1,999 - 99.97%</td></tr>
<tr><td>Farm Level 2: </td><td>1000 - $0 - 940 - 93.97%</td></tr>
<tr><td>Farm Total Capacity :</td><td>3000</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Income">Income</h3></td></tr>
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>12,098 - 63.68%</td></tr>
<tr><td>Average Income per Game</td><td>$2,017,088</td></tr>
<tr><td>Year to Date Revenue</td><td>$82,700,614</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>2,939 - 97.97%</td></tr>
<tr><td>Average Income per Game</td><td>$37,989</td></tr>
<tr><td>Year to Date Revenue</td><td>$1,557,563</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>$84,880,000</td></tr>
<tr><td>Farm Players Total Salaries</td><td>$1,480,417</td></tr>
<tr><td>Coaches Total Salaries</td><td>$6,300,000</td></tr>
<tr><td>Luxury Taxe Total</td><td>$0</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>$86,507,760</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>$1,907,200</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>$80,899,096</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>$0</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Pro Estimated Season Revenue</td><td>$0</td></tr>
<tr><td>Farm Estimated Season Revenue</td><td>$0</td></tr>
<tr><td>Pro Remaining Season Days</td><td>0</td></tr>
<tr><td>Pro Expenses Per Days</td><td>$513,523</td></tr>
<tr><td>Pro Estimated Expenses</td><td>$0</td></tr>
<tr><td>Farm Remaining Season Days</td><td>0</td></tr>
<tr><td>Farm Expenses Per Days</td><td>$15,408</td></tr>
<tr><td>Farm Estimated Expenses</td><td>$0</td></tr>
<tr><td>Estimated Season Expenses</td><td>$0</td></tr>
<tr><td>Estimated Season Salary Cap</td><td>$80,899,096</td></tr>
<tr><td>Estimate Under Maximum Salary Cap of $81,500,000</td><td>$600,904</td></tr>
<tr><td>Estimate Over Minimum Salary Cap of $60,200,000 </td><td>$20,699,096</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>$113,103,559</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>$113,103,559</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Steven Stamkos</td>
<td>$9,500,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Shea Weber</td>
<td>$8,200,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Victor Hedman</td>
<td>$8,000,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Ryan O'Reilly</td>
<td>$7,750,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Mathew Barzal (1 Way Contract)</td>
<td>$7,000,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Alexander Radulov</td>
<td>$6,250,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jonathan Huberdeau</td>
<td>$6,000,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Ryan Pulock</td>
<td>$5,150,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Mats Zuccarello</td>
<td>$5,000,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Connor Brown (Out of Payroll)</td>
<td>$3,500,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Radko Gudas</td>
<td>$3,500,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Philipp Grubauer</td>
<td>$3,330,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Scott Laughton</td>
<td>$3,000,000 (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Tyler Pitlick</td>
<td>$2,750,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Calle Jarnkrok</td>
<td>$2,250,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Austin Watson</td>
<td>$1,650,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Tyler Motte (Out of Payroll)</td>
<td>$1,500,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Greg Pateryn</td>
<td>$1,500,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Nick Bjugstad</td>
<td>$900,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Matt Moulson</td>
<td>$800,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Michael Stone</td>
<td>$800,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Charles Williams</td>
<td>$800,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Martin Ouellette</td>
<td>$750,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>23</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $89,880,000</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $71,550,000</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $36,400,000</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> $11,650,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $89,880,000</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $71,550,000</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $36,400,000</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> $11,650,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $89,880,000</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $71,550,000</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $36,400,000</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> $11,650,000</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Matt Murray</td>
<td>$300,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Cale Makar</td>
<td>$285,417 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jacob Bryson</td>
<td>$92,500 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Egor Sharangovich</td>
<td>$92,500 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Tom Kuhnhackl</td>
<td>$90,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Alan Quine</td>
<td>$85,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Max McCormick</td>
<td>$80,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Curtis McKenzie</td>
<td>$80,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Daniel Carr</td>
<td>$75,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Luke Witkowski</td>
<td>$75,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Kevin Czuczman</td>
<td>$75,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Joe Hicketts</td>
<td>$75,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Chase De Leo</td>
<td>$75,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>13</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $1,480,417</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $695,417</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $92,500</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> $0</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $1,278,083</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $498,083</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $92,500</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> $0</td></tr>
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
<tr><td>Level 1: </td><td>6000 - $150 - 5,847 - 97.45%</td></tr>
<tr><td>Level 2: </td><td>5000 - $104 - 4,848 - 96.96%</td></tr>
<tr><td>Level 3: </td><td>4000 - $71 - 3,890 - 97.26%</td></tr>
<tr><td>Level 4: </td><td>3000 - $50 - 2,966 - 98.88%</td></tr>
<tr><td>Luxury : </td><td>1000 - $248 - 909 - 90.94%</td></tr>
<tr><td>Total Capacity :</td><td>19000</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Farm Level 1: </td><td>2000 - $33 - 1,989 - 99.44%</td></tr>
<tr><td>Farm Level 2: </td><td>1000 - $0 - 930 - 93.00%</td></tr>
<tr><td>Farm Total Capacity :</td><td>3000</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Income">Income</h3></td></tr>
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>18,461 - 97.16%</td></tr>
<tr><td>Average Income per Game</td><td>$1,987,107</td></tr>
<tr><td>Year to Date Revenue</td><td>$81,471,402</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>2,919 - 97.29%</td></tr>
<tr><td>Average Income per Game</td><td>$65,628</td></tr>
<tr><td>Year to Date Revenue</td><td>$2,690,754</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>$67,908,082</td></tr>
<tr><td>Farm Players Total Salaries</td><td>$1,038,917</td></tr>
<tr><td>Coaches Total Salaries</td><td>$1,800,000</td></tr>
<tr><td>Luxury Taxe Total</td><td>$0</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>$74,898,282</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>$2,071,292</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>$73,948,311</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>$0</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Pro Estimated Season Revenue</td><td>$0</td></tr>
<tr><td>Farm Estimated Season Revenue</td><td>$0</td></tr>
<tr><td>Pro Remaining Season Days</td><td>0</td></tr>
<tr><td>Pro Expenses Per Days</td><td>$391,239</td></tr>
<tr><td>Pro Estimated Expenses</td><td>$0</td></tr>
<tr><td>Farm Remaining Season Days</td><td>0</td></tr>
<tr><td>Farm Expenses Per Days</td><td>$12,763</td></tr>
<tr><td>Farm Estimated Expenses</td><td>$0</td></tr>
<tr><td>Estimated Season Expenses</td><td>$0</td></tr>
<tr><td>Estimated Season Salary Cap</td><td>$73,948,311</td></tr>
<tr><td>Estimate Under Maximum Salary Cap of $81,500,000</td><td>$7,551,689</td></tr>
<tr><td>Estimate Over Minimum Salary Cap of $60,200,000 </td><td>$13,748,311</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>$14,238,172</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>$14,238,172</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Matthew Tkachuk</td>
<td>$8,800,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jeff Skinner</td>
<td>$6,750,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jakub Voracek (1 Way Contract)</td>
<td>$6,500,000 (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Kevin Shattenkirk</td>
<td>$6,500,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Erik Gudbranson</td>
<td>$5,000,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Olli Maatta</td>
<td>$4,493,500 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Christian Dvorak (Out of Payroll)</td>
<td>$4,000,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Joonas Korpisalo</td>
<td>$3,500,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Eeli Tolvanen</td>
<td>$3,426,500 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jesperi Kotkaniemi</td>
<td>$3,425,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Miro Heiskanen</td>
<td>$3,394,166 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Casey Cizikas</td>
<td>$3,300,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Kasperi Kapanen (Out of Payroll)</td>
<td>$3,200,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Juuse Saros</td>
<td>$2,500,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Olli Juolevi</td>
<td>$1,913,333 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Barclay Goodrow</td>
<td>$1,500,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Victor Mete (1 Way Contract)</td>
<td>$1,250,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Ryan Lindgren</td>
<td>$1,100,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Leo Komarov</td>
<td>$1,000,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Lukas Vejdemo</td>
<td>$925,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Roope Hintz</td>
<td>$925,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Joona Koppanen</td>
<td>$910,833 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Joel L'Esperance</td>
<td>$794,750 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>23</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $75,108,082</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $45,969,166</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $17,170,000</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> $14,420,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $74,975,582</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $45,836,666</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $17,170,000</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> $14,420,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $75,108,082</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $45,969,166</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $17,170,000</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> $14,420,000</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Juuso Riikola</td>
<td>$115,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Rasmus Kupari</td>
<td>$108,167 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Matheson Iacopelli</td>
<td>$92,500 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Eetu Luostarinen</td>
<td>$89,750 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>John Quenneville</td>
<td>$89,417 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Guillaume Brisebois</td>
<td>$88,833 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jeremy Helvig</td>
<td>$78,500 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jansen Harkins</td>
<td>$76,750 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Callum Booth</td>
<td>$75,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Max Willman</td>
<td>$75,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Clark Bishop</td>
<td>$75,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Beck Malenstyn</td>
<td>$75,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>12</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $1,038,917</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $785,667</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> $0</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $1,038,917</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $785,667</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> $0</td></tr>
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
<tr><td>Level 1: </td><td>6000 - $150 - 5,672 - 94.54%</td></tr>
<tr><td>Level 2: </td><td>5000 - $120 - 4,798 - 95.96%</td></tr>
<tr><td>Level 3: </td><td>4000 - $90 - 3,779 - 94.48%</td></tr>
<tr><td>Level 4: </td><td>3000 - $65 - 2,882 - 96.08%</td></tr>
<tr><td>Luxury : </td><td>1000 - $250 - 955 - 95.46%</td></tr>
<tr><td>Total Capacity :</td><td>19000</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Farm Level 1: </td><td>2000 - $40 - 1,954 - 97.70%</td></tr>
<tr><td>Farm Level 2: </td><td>1000 - $0 - 937 - 93.72%</td></tr>
<tr><td>Farm Total Capacity :</td><td>3000</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Income">Income</h3></td></tr>
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>18,087 - 95.19%</td></tr>
<tr><td>Average Income per Game</td><td>$2,192,746</td></tr>
<tr><td>Year to Date Revenue</td><td>$89,902,570</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>2,891 - 96.37%</td></tr>
<tr><td>Average Income per Game</td><td>$78,162</td></tr>
<tr><td>Year to Date Revenue</td><td>$3,204,640</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>$74,700,000</td></tr>
<tr><td>Farm Players Total Salaries</td><td>$1,137,591</td></tr>
<tr><td>Coaches Total Salaries</td><td>$4,200,000</td></tr>
<tr><td>Luxury Taxe Total</td><td>$0</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>$83,758,212</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>$1,738,250</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>$80,258,244</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>$0</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Pro Estimated Season Revenue</td><td>$0</td></tr>
<tr><td>Farm Estimated Season Revenue</td><td>$0</td></tr>
<tr><td>Pro Remaining Season Days</td><td>0</td></tr>
<tr><td>Pro Expenses Per Days</td><td>$444,318</td></tr>
<tr><td>Pro Estimated Expenses</td><td>$0</td></tr>
<tr><td>Farm Remaining Season Days</td><td>0</td></tr>
<tr><td>Farm Expenses Per Days</td><td>$12,416</td></tr>
<tr><td>Farm Estimated Expenses</td><td>$0</td></tr>
<tr><td>Estimated Season Expenses</td><td>$0</td></tr>
<tr><td>Estimated Season Salary Cap</td><td>$80,258,244</td></tr>
<tr><td>Estimate Under Maximum Salary Cap of $81,500,000</td><td>$1,241,756</td></tr>
<tr><td>Estimate Over Minimum Salary Cap of $60,200,000 </td><td>$20,058,244</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>$20,109,527</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>$20,109,527</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Alex Ovechkin</td>
<td>$12,500,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Nathan MacKinnon</td>
<td>$10,000,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Mitch Marner (Out of Payroll)</td>
<td>$9,500,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Seth Jones</td>
<td>$7,500,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Phil Kessel (Out of Payroll)</td>
<td>$6,000,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Brock Boeser (1 Way Contract)</td>
<td>$5,875,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Neal Pionk (1 Way Contract)</td>
<td>$5,000,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Elias Lindholm</td>
<td>$4,850,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Travis Hamonic</td>
<td>$4,500,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Boone Jenner</td>
<td>$3,750,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Ben Chiarot</td>
<td>$3,500,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jake Debrusk (1 Way Contract)</td>
<td>$3,500,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Josh Anderson</td>
<td>$3,000,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Adam Pelech</td>
<td>$2,850,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>James Reimer</td>
<td>$2,800,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Anthony DeAngelo (Out of Payroll)</td>
<td>$1,500,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Noah Dobson</td>
<td>$1,431,667 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Mathieu Perreault</td>
<td>$1,000,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Pierre Engvall</td>
<td>$925,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jordan Binnington</td>
<td>$903,333 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Riley Nash (Out of Payroll)</td>
<td>$900,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Nicolas Roy</td>
<td>$815,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>22</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $92,600,000</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $73,046,667</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $35,175,000</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> $20,500,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $91,967,503</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $72,414,170</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $35,175,000</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> $20,500,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $92,600,000</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $73,046,667</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $35,175,000</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> $20,500,000</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Timothy Liljegren</td>
<td>$126,333 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Tobias Bjornfot</td>
<td>$105,250 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Antoine Bibeau</td>
<td>$92,500 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Mikhail Maltsev</td>
<td>$92,500 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Christian Wolanin</td>
<td>$92,500 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Andreas Borgman</td>
<td>$90,000 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jonah Gadjovich</td>
<td>$86,333 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Austin Strand</td>
<td>$77,175 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Josef Korenar</td>
<td>$75,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Tomas Jurco</td>
<td>$75,000 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Calle Rosen</td>
<td>$75,000 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Morgan Klimchuk</td>
<td>$75,000 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Ryan Kujawinski</td>
<td>$75,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>13</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $1,137,591</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $800,416</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $599,083</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> $0</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $1,045,091</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $800,416</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $599,083</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> $0</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="TeamFinancePro_SEA"><a id="Kraken">Kraken</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=32">Kraken Page</a> ]
[ <a href="OTHL-ProTeamRoster.php#Kraken">Pro Team Roster</a> ]
[ <a href="OTHL-ProTeamScoring.php#Kraken">Pro Team Scoring</a> ]
[ <a href="OTHL-TeamFinance.php#Kraken">Team Finance</a> ]
[ <a href="OTHL-ProTeamPlayersInfo.php#Kraken">Pro Team PlayersInfo</a> ]
[ <a href="OTHL-ProTeamLines.php#Kraken">Pro Team Lines</a> ]
[ <a href="OTHL-TeamProspects.php#Kraken">Team Prospects</a> ]
[ <a href="OTHL-ProTeamSchedule.php#Kraken">Pro Team Schedule</a> ]
[ <a href="OTHL-ProTeamStats.php#Kraken">Pro Team Stats</a> ]
[ <a href="OTHL-ProTeamStatsVS.php#Kraken">Pro Team Stats VS</a> ]
[ <a href="OTHL-TeamInjurySuspension.php#Kraken">Team Injury Suspension</a> ]
[ <a href="OTHL-TeamHistory.php#Kraken">Team History</a> ]
[ <a href="OTHL-TeamRecords.php#Kraken">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Kraken');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Kraken" style="display: block;">
<br /><br /><table class="STHSTableFullW"><tr><td style="vertical-align: top;width:440px;">
<table class="STHSFinance_TeamTable">
<tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_AreanaCapacity">Arena Capacity - Ticket Price<br />Attendance - %</h3></td></tr>
<tr><td class="STHSW250">Arena Name</td><td class="STHSW200">Climate Pledge Arena</td></tr>
<tr><td>Level 1: </td><td>6000 - $168 - 5,716 - 95.27%</td></tr>
<tr><td>Level 2: </td><td>5000 - $118 - 4,782 - 95.63%</td></tr>
<tr><td>Level 3: </td><td>4000 - $93 - 3,289 - 82.22%</td></tr>
<tr><td>Level 4: </td><td>3000 - $66 - 2,918 - 97.28%</td></tr>
<tr><td>Luxury : </td><td>1000 - $252 - 962 - 96.17%</td></tr>
<tr><td>Total Capacity :</td><td>19000</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Farm Level 1: </td><td>2000 - $53 - 1,903 - 95.16%</td></tr>
<tr><td>Farm Level 2: </td><td>1000 - $0 - 831 - 83.09%</td></tr>
<tr><td>Farm Total Capacity :</td><td>3000</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Income">Income</h3></td></tr>
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>17,667 - 92.98%</td></tr>
<tr><td>Average Income per Game</td><td>$2,206,641</td></tr>
<tr><td>Year to Date Revenue</td><td>$90,472,290</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>2,734 - 91.14%</td></tr>
<tr><td>Average Income per Game</td><td>$97,557</td></tr>
<tr><td>Year to Date Revenue</td><td>$3,999,834</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>$73,850,000</td></tr>
<tr><td>Farm Players Total Salaries</td><td>$691,333</td></tr>
<tr><td>Coaches Total Salaries</td><td>$4,000,000</td></tr>
<tr><td>Luxury Taxe Total</td><td>$0</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>$81,228,997</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>$3,010,342</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>$79,228,982</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>$0</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Pro Estimated Season Revenue</td><td>$0</td></tr>
<tr><td>Farm Estimated Season Revenue</td><td>$0</td></tr>
<tr><td>Pro Remaining Season Days</td><td>0</td></tr>
<tr><td>Pro Expenses Per Days</td><td>$430,966</td></tr>
<tr><td>Pro Estimated Expenses</td><td>$0</td></tr>
<tr><td>Farm Remaining Season Days</td><td>0</td></tr>
<tr><td>Farm Expenses Per Days</td><td>$18,185</td></tr>
<tr><td>Farm Estimated Expenses</td><td>$0</td></tr>
<tr><td>Estimated Season Expenses</td><td>$0</td></tr>
<tr><td>Estimated Season Salary Cap</td><td>$79,228,982</td></tr>
<tr><td>Estimate Under Maximum Salary Cap of $81,500,000</td><td>$2,271,018</td></tr>
<tr><td>Estimate Over Minimum Salary Cap of $60,200,000 </td><td>$19,028,982</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>$18,732,785</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>$18,732,785</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>John Tavares</td>
<td>$11,000,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Carey Price</td>
<td>$10,000,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Evgenii Dadonov (Out of Payroll)</td>
<td>$7,200,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Dustin Brown</td>
<td>$6,500,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Ondrej Palat</td>
<td>$5,750,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jared Spurgeon</td>
<td>$5,750,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Alexander Wennberg</td>
<td>$5,000,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Nick Schmaltz (Out of Payroll)</td>
<td>$4,500,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Brenden Dillon (1 Way Contract)</td>
<td>$4,000,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Lars Eller</td>
<td>$4,000,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Shayne Gostisbehere</td>
<td>$3,250,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Derek Forbort</td>
<td>$2,950,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Brayden McNabb</td>
<td>$2,800,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Dylan Strome (Out of Payroll)</td>
<td>$2,500,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Valeri Nichushkin</td>
<td>$2,250,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Evan Rodrigues</td>
<td>$2,250,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Braden Holtby</td>
<td>$2,000,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Mike Reilly</td>
<td>$1,200,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jesse Puljujarvi</td>
<td>$1,175,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Brendan Smith</td>
<td>$1,150,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Ryan Lomberg</td>
<td>$1,100,000 (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Ross Colton</td>
<td>$925,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Derek Ryan</td>
<td>$800,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Kevin Lankinen (Out of Payroll)</td>
<td>$800,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>24</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $88,850,000</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $69,825,000</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $33,700,000</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> $32,550,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $88,850,000</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $69,825,000</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $33,700,000</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> $32,550,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $88,850,000</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $69,825,000</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $33,700,000</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> $32,550,000</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Ty Smith</td>
<td>$126,333 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Christian Jaros</td>
<td>$90,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Dean Kukan</td>
<td>$90,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Matt Bartkowski</td>
<td>$85,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Samuel Montembeault</td>
<td>$75,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Spencer Martin</td>
<td>$75,000 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Joseph Cramarossa</td>
<td>$75,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Nate Prosser</td>
<td>$75,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>8</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $691,333</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $616,333</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $201,333</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> $0</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $691,333</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $616,333</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $201,333</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> $0</td></tr>
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
<tr><td class="STHSW250">Arena Name</td><td class="STHSW200">Amalie Arena</td></tr>
<tr><td>Level 1: </td><td>6000 - $154 - 5,828 - 97.13%</td></tr>
<tr><td>Level 2: </td><td>5000 - $100 - 4,857 - 97.14%</td></tr>
<tr><td>Level 3: </td><td>4000 - $78 - 3,894 - 97.36%</td></tr>
<tr><td>Level 4: </td><td>3000 - $63 - 2,861 - 95.36%</td></tr>
<tr><td>Luxury : </td><td>1000 - $244 - 963 - 96.29%</td></tr>
<tr><td>Total Capacity :</td><td>19000</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Farm Level 1: </td><td>2000 - $30 - 1,999 - 99.93%</td></tr>
<tr><td>Farm Level 2: </td><td>1000 - $0 - 934 - 93.42%</td></tr>
<tr><td>Farm Total Capacity :</td><td>3000</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Income">Income</h3></td></tr>
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>18,403 - 96.86%</td></tr>
<tr><td>Average Income per Game</td><td>$2,102,083</td></tr>
<tr><td>Year to Date Revenue</td><td>$86,185,383</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>2,933 - 97.76%</td></tr>
<tr><td>Average Income per Game</td><td>$59,958</td></tr>
<tr><td>Year to Date Revenue</td><td>$2,458,260</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>$54,042,499</td></tr>
<tr><td>Farm Players Total Salaries</td><td>$1,353,882</td></tr>
<tr><td>Coaches Total Salaries</td><td>$2,500,000</td></tr>
<tr><td>Luxury Taxe Total</td><td>$0</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>$67,435,889</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>$1,873,425</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>$65,295,988</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>$0</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Pro Estimated Season Revenue</td><td>$0</td></tr>
<tr><td>Farm Estimated Season Revenue</td><td>$0</td></tr>
<tr><td>Pro Remaining Season Days</td><td>0</td></tr>
<tr><td>Pro Expenses Per Days</td><td>$317,003</td></tr>
<tr><td>Pro Estimated Expenses</td><td>$0</td></tr>
<tr><td>Farm Remaining Season Days</td><td>0</td></tr>
<tr><td>Farm Expenses Per Days</td><td>$14,215</td></tr>
<tr><td>Farm Estimated Expenses</td><td>$0</td></tr>
<tr><td>Estimated Season Expenses</td><td>$0</td></tr>
<tr><td>Estimated Season Salary Cap</td><td>$65,295,988</td></tr>
<tr><td>Estimate Under Maximum Salary Cap of $81,500,000</td><td>$16,204,012</td></tr>
<tr><td>Estimate Over Minimum Salary Cap of $60,200,000 </td><td>$5,095,988</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>$36,326,113</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>$36,326,113</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>P.K. Subban</td>
<td>$9,500,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Zach Parise</td>
<td>$6,800,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Craig Smith</td>
<td>$4,000,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Ryan Murray (1 Way Contract)</td>
<td>$3,700,000 (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Derick Brassard</td>
<td>$3,250,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Brian Elliott</td>
<td>$3,250,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Petr Mrazek (Out of Payroll)</td>
<td>$3,000,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Conor Sheary</td>
<td>$3,000,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Paul Byron</td>
<td>$2,800,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Oskar Lindblom (1 Way Contract)</td>
<td>$2,750,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Philippe Myers</td>
<td>$2,600,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Riley Stillman (1 Way Contract)</td>
<td>$1,850,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Andreas Johnsson</td>
<td>$1,500,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Ryan Donato</td>
<td>$1,350,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Colin Miller (Out of Payroll)</td>
<td>$1,100,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Frederik Gauthier</td>
<td>$1,000,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Sami Niku</td>
<td>$916,666 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Connor Mackey</td>
<td>$912,500 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Yakov Trenin</td>
<td>$863,333 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Ryan Reaves</td>
<td>$850,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Nicolas Deslauriers</td>
<td>$850,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Tanner Jeannot</td>
<td>$800,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Nicolas Aube-Kubel</td>
<td>$750,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Sonny Milano</td>
<td>$750,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>24</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $58,142,499</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $39,863,333</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $27,050,000</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> $16,200,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $58,142,499</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $39,863,333</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $27,050,000</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> $16,200,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $58,142,499</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $39,863,333</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $27,050,000</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> $16,200,000</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Logan Brown</td>
<td>$157,333 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jack Ahcan</td>
<td>$113,750 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Wade Allison</td>
<td>$113,750 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Kevin Boyle</td>
<td>$97,500 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Colton White</td>
<td>$93,583 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jan Drozg</td>
<td>$92,500 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Carl Dahlstrom</td>
<td>$92,500 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jesper Boqvist</td>
<td>$92,500 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Givani Smith</td>
<td>$91,333 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Kole Lind</td>
<td>$89,133 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Tanner Fritz</td>
<td>$85,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Alex Belzile</td>
<td>$85,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Francois Brassard</td>
<td>$75,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jordan Schmaltz</td>
<td>$75,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>14</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $1,353,882</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $989,216</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $113,750</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> $0</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $1,353,882</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $989,216</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $113,750</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> $0</td></tr>
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
<tr><td>Level 1: </td><td>6000 - $166 - 5,674 - 94.57%</td></tr>
<tr><td>Level 2: </td><td>5000 - $136 - 3,716 - 74.32%</td></tr>
<tr><td>Level 3: </td><td>4000 - $116 - 2,694 - 67.36%</td></tr>
<tr><td>Level 4: </td><td>3000 - $65 - 2,893 - 96.43%</td></tr>
<tr><td>Luxury : </td><td>1000 - $250 - 961 - 96.12%</td></tr>
<tr><td>Total Capacity :</td><td>19000</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Farm Level 1: </td><td>2000 - $35 - 1,987 - 99.33%</td></tr>
<tr><td>Farm Level 2: </td><td>1000 - $0 - 955 - 95.49%</td></tr>
<tr><td>Farm Total Capacity :</td><td>3000</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Income">Income</h3></td></tr>
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>15,939 - 83.89%</td></tr>
<tr><td>Average Income per Game</td><td>$2,188,237</td></tr>
<tr><td>Year to Date Revenue</td><td>$89,717,724</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>2,941 - 98.05%</td></tr>
<tr><td>Average Income per Game</td><td>$69,530</td></tr>
<tr><td>Year to Date Revenue</td><td>$2,850,750</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>$80,711,666</td></tr>
<tr><td>Farm Players Total Salaries</td><td>$2,838,791</td></tr>
<tr><td>Coaches Total Salaries</td><td>$5,750,000</td></tr>
<tr><td>Luxury Taxe Total</td><td>$0</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>$86,336,469</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>$3,482,839</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>$81,336,474</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>$0</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Pro Estimated Season Revenue</td><td>$0</td></tr>
<tr><td>Farm Estimated Season Revenue</td><td>$0</td></tr>
<tr><td>Pro Remaining Season Days</td><td>0</td></tr>
<tr><td>Pro Expenses Per Days</td><td>$486,998</td></tr>
<tr><td>Pro Estimated Expenses</td><td>$0</td></tr>
<tr><td>Farm Remaining Season Days</td><td>0</td></tr>
<tr><td>Farm Expenses Per Days</td><td>$24,249</td></tr>
<tr><td>Farm Estimated Expenses</td><td>$0</td></tr>
<tr><td>Estimated Season Expenses</td><td>$0</td></tr>
<tr><td>Estimated Season Salary Cap</td><td>$81,336,474</td></tr>
<tr><td>Estimate Under Maximum Salary Cap of $81,500,000</td><td>$163,526</td></tr>
<tr><td>Estimate Over Minimum Salary Cap of $60,200,000 </td><td>$21,136,474</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>$134,838,687</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>$134,838,687</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Nicklas Backstrom</td>
<td>$9,500,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Alex Pietrangelo</td>
<td>$8,250,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Gabriel Landeskog</td>
<td>$6,750,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>John Carlson</td>
<td>$6,500,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jordan Staal</td>
<td>$6,000,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Tomas Hertl (1 Way Contract)</td>
<td>$6,000,000 (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Brandon Saad</td>
<td>$5,500,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Frederik Andersen (1 Way Contract)</td>
<td>$5,500,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Shea Theodore</td>
<td>$5,200,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Brendan Gallagher</td>
<td>$5,100,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Tyler Toffoli</td>
<td>$4,800,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>David Savard (Out of Payroll)</td>
<td>$4,750,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Radek Faksa</td>
<td>$2,500,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Sam Bennett (Out of Payroll)</td>
<td>$2,000,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Sean Kuraly</td>
<td>$1,650,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Andrew Cogliano</td>
<td>$1,500,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jeremy Swayman</td>
<td>$1,050,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Josh Brown</td>
<td>$1,000,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Brett Howden</td>
<td>$863,333 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Dysin Mayo</td>
<td>$798,333 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Dylan Gambrell</td>
<td>$750,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jarred Tinordi</td>
<td>$750,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Eric Staal</td>
<td>$750,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>23</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $87,461,666</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $70,848,333</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $44,098,333</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> $17,000,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $87,461,666</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $70,848,333</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $44,098,333</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> $17,000,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $87,461,666</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $70,848,333</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $44,098,333</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> $17,000,000</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Bowen Byram</td>
<td>$339,417 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Barrett Hayton</td>
<td>$264,417 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Brinson Pasichnuk</td>
<td>$177,500 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Cody Glass</td>
<td>$171,333 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jeremy Davies</td>
<td>$132,500 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Joseph Cecconi</td>
<td>$129,375 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Luke Schenn</td>
<td>$115,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Dylan Wells</td>
<td>$91,083 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Adam Mascherin</td>
<td>$88,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Brandon Crawley</td>
<td>$86,667 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Simon Holmstrom</td>
<td>$86,333 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jack Studnicka</td>
<td>$86,333 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jonathan Davidsson</td>
<td>$85,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Gabriel Bourque</td>
<td>$85,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Spencer Smallman</td>
<td>$75,833 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Kyle Clifford</td>
<td>$75,000 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Calvin Pickard</td>
<td>$75,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Stepan Falkovsky</td>
<td>$75,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Keaton Middleton</td>
<td>$75,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Sean Day</td>
<td>$75,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Oleg Sosunov</td>
<td>$75,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Justin Dowling</td>
<td>$75,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Andy Andreoff</td>
<td>$75,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Liam O'Brien</td>
<td>$75,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Tyler Gaudet</td>
<td>$75,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Steven Lorentz</td>
<td>$75,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>26</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $2,838,791</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $2,304,375</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $587,083</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> $0</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $2,741,458</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $2,209,209</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $587,083</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> $0</td></tr>
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
<tr><td>Level 1: </td><td>6000 - $165 - 5,698 - 94.97%</td></tr>
<tr><td>Level 2: </td><td>5000 - $120 - 4,595 - 91.90%</td></tr>
<tr><td>Level 3: </td><td>4000 - $99 - 3,600 - 90.00%</td></tr>
<tr><td>Level 4: </td><td>3000 - $70 - 2,769 - 92.30%</td></tr>
<tr><td>Luxury : </td><td>1000 - $255 - 927 - 92.72%</td></tr>
<tr><td>Total Capacity :</td><td>19000</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Farm Level 1: </td><td>2000 - $65 - 1,381 - 69.06%</td></tr>
<tr><td>Farm Level 2: </td><td>1000 - $0 - 939 - 93.92%</td></tr>
<tr><td>Farm Total Capacity :</td><td>3000</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Income">Income</h3></td></tr>
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>17,589 - 92.57%</td></tr>
<tr><td>Average Income per Game</td><td>$2,290,485</td></tr>
<tr><td>Year to Date Revenue</td><td>$93,909,871</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>2,320 - 77.35%</td></tr>
<tr><td>Average Income per Game</td><td>$90,097</td></tr>
<tr><td>Year to Date Revenue</td><td>$3,693,995</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>$88,333,726</td></tr>
<tr><td>Farm Players Total Salaries</td><td>$2,296,666</td></tr>
<tr><td>Coaches Total Salaries</td><td>$5,600,000</td></tr>
<tr><td>Luxury Taxe Total</td><td>$0</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>$85,632,626</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>$2,887,192</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>$80,632,602</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>$0</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Pro Estimated Season Revenue</td><td>$0</td></tr>
<tr><td>Farm Estimated Season Revenue</td><td>$0</td></tr>
<tr><td>Pro Remaining Season Days</td><td>0</td></tr>
<tr><td>Pro Expenses Per Days</td><td>$530,305</td></tr>
<tr><td>Pro Estimated Expenses</td><td>$0</td></tr>
<tr><td>Farm Remaining Season Days</td><td>0</td></tr>
<tr><td>Farm Expenses Per Days</td><td>$19,572</td></tr>
<tr><td>Farm Estimated Expenses</td><td>$0</td></tr>
<tr><td>Estimated Season Expenses</td><td>$0</td></tr>
<tr><td>Estimated Season Salary Cap</td><td>$80,632,602</td></tr>
<tr><td>Estimate Under Maximum Salary Cap of $81,500,000</td><td>$867,398</td></tr>
<tr><td>Estimate Over Minimum Salary Cap of $60,200,000 </td><td>$20,432,602</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>$154,690,418</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>$154,690,418</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Blake Wheeler</td>
<td>$8,500,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jake Muzzin</td>
<td>$8,000,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Ryan Nugent-Hopkins</td>
<td>$7,250,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Evander Kane</td>
<td>$7,000,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jeff Petry</td>
<td>$6,000,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Semyon Varlamov</td>
<td>$6,000,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Tyler Bertuzzi</td>
<td>$5,600,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Vincent Trocheck</td>
<td>$5,500,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Esa Lindell</td>
<td>$5,200,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Mikael Granlund</td>
<td>$5,000,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Anthony Cirelli</td>
<td>$4,500,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Blake Coleman</td>
<td>$3,750,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Ryan Graves</td>
<td>$3,000,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jamie Oleksiak</td>
<td>$2,500,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Elvis Merzlikins</td>
<td>$1,844,559 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Luke Glendening</td>
<td>$1,750,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Noel Acciari</td>
<td>$1,666,667 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Zach Whitecloud</td>
<td>$1,500,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Nick Paul</td>
<td>$1,050,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Adam Erne</td>
<td>$997,500 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Eric Robinson</td>
<td>$975,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Carson Soucy</td>
<td>$750,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>22</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $88,333,726</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $71,350,000</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $51,050,000</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> $12,850,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $87,363,292</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $71,350,000</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $51,050,000</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> $12,850,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $88,333,726</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $71,350,000</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $51,050,000</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> $12,850,000</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Noah Hanifin</td>
<td>$300,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Michael Rasmussen</td>
<td>$171,083 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Joshua Norris</td>
<td>$163,333 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Luke Kunin</td>
<td>$142,500 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Ty Dellandrea</td>
<td>$140,083 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Shane Pinto</td>
<td>$132,500 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Buddy Robinson</td>
<td>$100,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Rhett Gardner</td>
<td>$92,500 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Dennis Gilbert</td>
<td>$92,500 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Joey Anderson</td>
<td>$92,500 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Zane McIntyre</td>
<td>$90,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jeremy Lauzon</td>
<td>$87,167 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Dominic Toninato</td>
<td>$85,000 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Brian Lashoff</td>
<td>$82,500 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Alex Petrovic</td>
<td>$75,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Patrick Brown</td>
<td>$75,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Cole Coskey</td>
<td>$75,000 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>John Hayden</td>
<td>$75,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Christopher Brown</td>
<td>$75,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Dillon Simpson</td>
<td>$75,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Adam Huska</td>
<td>$75,000 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>21</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $2,296,666</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $1,185,916</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $670,916</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> $0</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $2,294,166</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $1,185,916</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $670,916</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> $0</td></tr>
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
<tr><td>Level 1: </td><td>6000 - $164 - 5,635 - 93.92%</td></tr>
<tr><td>Level 2: </td><td>5000 - $119 - 4,847 - 96.93%</td></tr>
<tr><td>Level 3: </td><td>4000 - $89 - 3,843 - 96.07%</td></tr>
<tr><td>Level 4: </td><td>3000 - $64 - 2,899 - 96.65%</td></tr>
<tr><td>Luxury : </td><td>1000 - $249 - 949 - 94.87%</td></tr>
<tr><td>Total Capacity :</td><td>19000</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Farm Level 1: </td><td>2000 - $55 - 1,888 - 94.42%</td></tr>
<tr><td>Farm Level 2: </td><td>1000 - $0 - 940 - 94.03%</td></tr>
<tr><td>Farm Total Capacity :</td><td>3000</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Income">Income</h3></td></tr>
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>18,172 - 95.64%</td></tr>
<tr><td>Average Income per Game</td><td>$2,264,658</td></tr>
<tr><td>Year to Date Revenue</td><td>$92,850,982</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>2,829 - 94.29%</td></tr>
<tr><td>Average Income per Game</td><td>$103,861</td></tr>
<tr><td>Year to Date Revenue</td><td>$4,258,320</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>$56,996,999</td></tr>
<tr><td>Farm Players Total Salaries</td><td>$1,372,972</td></tr>
<tr><td>Coaches Total Salaries</td><td>$4,700,000</td></tr>
<tr><td>Luxury Taxe Total</td><td>$0</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>$65,584,052</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>$2,361,808</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>$61,584,040</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>$0</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Pro Estimated Season Revenue</td><td>$0</td></tr>
<tr><td>Farm Estimated Season Revenue</td><td>$0</td></tr>
<tr><td>Pro Remaining Season Days</td><td>0</td></tr>
<tr><td>Pro Expenses Per Days</td><td>$346,574</td></tr>
<tr><td>Pro Estimated Expenses</td><td>$0</td></tr>
<tr><td>Farm Remaining Season Days</td><td>0</td></tr>
<tr><td>Farm Expenses Per Days</td><td>$14,007</td></tr>
<tr><td>Farm Estimated Expenses</td><td>$0</td></tr>
<tr><td>Estimated Season Expenses</td><td>$0</td></tr>
<tr><td>Estimated Season Salary Cap</td><td>$61,584,040</td></tr>
<tr><td>Estimate Under Maximum Salary Cap of $81,500,000</td><td>$19,915,960</td></tr>
<tr><td>Estimate Over Minimum Salary Cap of $60,200,000 </td><td>$1,384,040</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>$106,116,157</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>$106,116,157</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Tyler Seguin</td>
<td>$9,000,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Josh Bailey</td>
<td>$6,000,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jason Zucker</td>
<td>$5,500,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jakob Silfverberg</td>
<td>$5,250,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Kyle Okposo (Out of Payroll)</td>
<td>$4,500,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Damon Severson</td>
<td>$4,200,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Rasmus Andersson</td>
<td>$3,900,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Darren Helm (Out of Payroll)</td>
<td>$3,750,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Michael Dal Colle</td>
<td>$3,063,333 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Vince Dunn</td>
<td>$2,750,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Ilya Sorokin</td>
<td>$2,000,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Alexander Nylander</td>
<td>$1,775,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Emil Bemstrom</td>
<td>$1,633,333 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Scott Harrington</td>
<td>$1,500,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Martin Necas</td>
<td>$1,462,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Derek Stepan</td>
<td>$1,400,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Erik Brannstrom (Out of Payroll)</td>
<td>$1,375,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Alex Galchenyuk</td>
<td>$1,000,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Danny O'Regan</td>
<td>$1,000,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Cooper Marody</td>
<td>$1,000,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Sam Steel</td>
<td>$925,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Lucas Carlsson</td>
<td>$925,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Vinni Lettieri</td>
<td>$925,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jake Oettinger</td>
<td>$925,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Max Jones</td>
<td>$863,333 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Alexandre Carrier (Out of Payroll)</td>
<td>$833,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>26</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $67,454,999</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $47,228,333</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $25,550,000</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> $9,000,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $65,090,499</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $45,338,833</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $25,550,000</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> $9,000,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $67,454,999</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $47,228,333</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $25,550,000</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> $9,000,000</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Josh Leivo</td>
<td>$200,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Tim Schaller</td>
<td>$185,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Justin Richards</td>
<td>$150,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Max Lagace</td>
<td>$125,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>C.J. Smith</td>
<td>$100,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Brendan Guhle</td>
<td>$100,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jackson Cates</td>
<td>$100,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Luke Johnson</td>
<td>$92,500 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Parker Wotherspoon</td>
<td>$85,472 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Tyler Wotherspoon</td>
<td>$80,000 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Michael McCarron</td>
<td>$80,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Dan Vladar</td>
<td>$75,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>12</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $1,372,972</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $895,472</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $80,000</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> $0</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $1,372,972</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $895,472</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $80,000</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> $0</td></tr>
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
<tr><td>Level 1: </td><td>6000 - $210 - 3,909 - 65.14%</td></tr>
<tr><td>Level 2: </td><td>5000 - $155 - 3,245 - 64.90%</td></tr>
<tr><td>Level 3: </td><td>4000 - $125 - 2,511 - 62.77%</td></tr>
<tr><td>Level 4: </td><td>3000 - $100 - 1,693 - 56.44%</td></tr>
<tr><td>Luxury : </td><td>1000 - $300 - 675 - 67.48%</td></tr>
<tr><td>Total Capacity :</td><td>19000</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Farm Level 1: </td><td>2000 - $85 - 1,076 - 53.80%</td></tr>
<tr><td>Farm Level 2: </td><td>1000 - $0 - 957 - 95.66%</td></tr>
<tr><td>Farm Total Capacity :</td><td>3000</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Income">Income</h3></td></tr>
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>12,033 - 63.33%</td></tr>
<tr><td>Average Income per Game</td><td>$2,009,426</td></tr>
<tr><td>Year to Date Revenue</td><td>$82,386,455</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>2,033 - 67.75%</td></tr>
<tr><td>Average Income per Game</td><td>$91,456</td></tr>
<tr><td>Year to Date Revenue</td><td>$3,749,690</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>$69,585,167</td></tr>
<tr><td>Farm Players Total Salaries</td><td>$1,158,333</td></tr>
<tr><td>Coaches Total Salaries</td><td>$1,750,000</td></tr>
<tr><td>Luxury Taxe Total</td><td>$0</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>$65,810,435</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>$1,883,667</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>$64,860,420</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>$0</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Pro Estimated Season Revenue</td><td>$0</td></tr>
<tr><td>Farm Estimated Season Revenue</td><td>$0</td></tr>
<tr><td>Pro Remaining Season Days</td><td>0</td></tr>
<tr><td>Pro Expenses Per Days</td><td>$400,768</td></tr>
<tr><td>Pro Estimated Expenses</td><td>$0</td></tr>
<tr><td>Farm Remaining Season Days</td><td>0</td></tr>
<tr><td>Farm Expenses Per Days</td><td>$13,232</td></tr>
<tr><td>Farm Estimated Expenses</td><td>$0</td></tr>
<tr><td>Estimated Season Expenses</td><td>$0</td></tr>
<tr><td>Estimated Season Salary Cap</td><td>$64,860,420</td></tr>
<tr><td>Estimate Under Maximum Salary Cap of $81,500,000</td><td>$16,639,580</td></tr>
<tr><td>Estimate Over Minimum Salary Cap of $60,200,000 </td><td>$4,660,420</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>$91,013,867</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>$91,013,867</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>James van Riemsdyk</td>
<td>$8,750,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Nick Foligno</td>
<td>$6,750,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Cam Fowler</td>
<td>$6,500,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>John Gibson</td>
<td>$6,000,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Dmitry Kulikov (1 Way Contract)</td>
<td>$4,500,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Pat Maroon</td>
<td>$3,950,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Kevin Labanc (1 Way Contract)</td>
<td>$3,875,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Ilya Mikheyev</td>
<td>$3,500,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Brady Tkachuk</td>
<td>$3,425,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Sven Baertschi</td>
<td>$3,000,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Andreas Athanasiou</td>
<td>$3,000,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Riley Sheahan</td>
<td>$2,900,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Austin Czarnik</td>
<td>$2,000,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Tyson Jost (1 Way Contract)</td>
<td>$1,950,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Robert Bortuzzo</td>
<td>$1,750,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Nick Cousins</td>
<td>$1,650,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Dante Fabbro</td>
<td>$1,491,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Anton Forsberg</td>
<td>$1,000,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Kurtis MacDermid</td>
<td>$975,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Dakota Joshua</td>
<td>$925,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Roland McKeown</td>
<td>$894,167 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Logan Thompson</td>
<td>$800,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>22</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $69,585,167</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $49,366,000</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $22,175,000</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> $3,000,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $68,094,168</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $47,875,001</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $22,175,000</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> $3,000,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $69,585,167</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $49,366,000</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $22,175,000</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> $3,000,000</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Alexis Lafreniere</td>
<td>$377,500 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Ian Mitchell</td>
<td>$177,500 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Cole Caufield</td>
<td>$130,833 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Nelson Nogier</td>
<td>$97,500 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Christopher Gibson</td>
<td>$75,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Matej Tomek</td>
<td>$75,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Alexandre Fortin</td>
<td>$75,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Gabriel Gagne</td>
<td>$75,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Aaron Ness</td>
<td>$75,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>9</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $1,158,333</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $858,333</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $783,333</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> $0</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $1,153,333</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $858,333</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $783,333</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> $0</td></tr>
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
<tr><td>Level 1: </td><td>6000 - $225 - 3,638 - 60.64%</td></tr>
<tr><td>Level 2: </td><td>5000 - $165 - 3,062 - 61.24%</td></tr>
<tr><td>Level 3: </td><td>4000 - $135 - 2,301 - 57.53%</td></tr>
<tr><td>Level 4: </td><td>3000 - $100 - 1,702 - 56.73%</td></tr>
<tr><td>Luxury : </td><td>1000 - $300 - 677 - 67.68%</td></tr>
<tr><td>Total Capacity :</td><td>19000</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Farm Level 1: </td><td>2000 - $100 - 919 - 45.96%</td></tr>
<tr><td>Farm Level 2: </td><td>1000 - $0 - 935 - 93.50%</td></tr>
<tr><td>Farm Total Capacity :</td><td>3000</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Income">Income</h3></td></tr>
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>11,380 - 59.90%</td></tr>
<tr><td>Average Income per Game</td><td>$2,007,758</td></tr>
<tr><td>Year to Date Revenue</td><td>$82,318,070</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>1,854 - 61.81%</td></tr>
<tr><td>Average Income per Game</td><td>$91,927</td></tr>
<tr><td>Year to Date Revenue</td><td>$3,769,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>$76,154,166</td></tr>
<tr><td>Farm Players Total Salaries</td><td>$1,057,667</td></tr>
<tr><td>Coaches Total Salaries</td><td>$9,600,000</td></tr>
<tr><td>Luxury Taxe Total</td><td>$0</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>$85,211,468</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>$2,810,074</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>$77,211,480</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>$0</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Pro Estimated Season Revenue</td><td>$0</td></tr>
<tr><td>Farm Estimated Season Revenue</td><td>$0</td></tr>
<tr><td>Pro Remaining Season Days</td><td>0</td></tr>
<tr><td>Pro Expenses Per Days</td><td>$478,149</td></tr>
<tr><td>Pro Estimated Expenses</td><td>$0</td></tr>
<tr><td>Farm Remaining Season Days</td><td>0</td></tr>
<tr><td>Farm Expenses Per Days</td><td>$17,957</td></tr>
<tr><td>Farm Estimated Expenses</td><td>$0</td></tr>
<tr><td>Estimated Season Expenses</td><td>$0</td></tr>
<tr><td>Estimated Season Salary Cap</td><td>$77,211,480</td></tr>
<tr><td>Estimate Under Maximum Salary Cap of $81,500,000</td><td>$4,288,520</td></tr>
<tr><td>Estimate Over Minimum Salary Cap of $60,200,000 </td><td>$17,011,480</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>$170,290,229</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>$170,290,229</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Andrei Vasilevskiy</td>
<td>$10,000,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Logan Couture (Out of Payroll)</td>
<td>$7,250,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Alex Killorn</td>
<td>$7,125,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Adam Henrique</td>
<td>$6,500,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Reilly Smith</td>
<td>$6,500,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Alex Goligoski (1 Way Contract)</td>
<td>$6,000,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Sam Reinhart</td>
<td>$5,500,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Oscar Klefbom</td>
<td>$5,000,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Kris Russell</td>
<td>$5,000,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Alex Tuch</td>
<td>$3,100,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Adrian Kempe</td>
<td>$3,100,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Nick Holden</td>
<td>$2,000,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Dominik Kubalik</td>
<td>$1,775,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Dylan Cozens</td>
<td>$1,744,167 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Danton Heinen</td>
<td>$1,700,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Ryan Dzingel</td>
<td>$1,700,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Pheonix Copley</td>
<td>$1,250,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Nils Hoglander</td>
<td>$1,125,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Ville Heinola</td>
<td>$1,075,833 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Troy Grosenick</td>
<td>$950,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Brandon Hagel</td>
<td>$925,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Dennis Cholowski</td>
<td>$894,166 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Erik Cernak</td>
<td>$890,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Gage Quinney</td>
<td>$800,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Julius Bergman</td>
<td>$750,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Logan Shaw</td>
<td>$750,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>26</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $83,404,166</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $56,920,000</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $34,695,000</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> $10,000,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $82,554,171</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $56,070,005</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $34,695,000</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> $10,000,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $83,404,166</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $56,920,000</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $34,695,000</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> $10,000,000</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Stefan Matteau</td>
<td>$95,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Lean Bergmann</td>
<td>$92,500 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Brandon Gignac</td>
<td>$92,167 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Morgan Frost</td>
<td>$86,333 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>J.C. Beaudin</td>
<td>$81,667 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Joseph Woll</td>
<td>$80,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Greg Carey</td>
<td>$80,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Dennis Robertson</td>
<td>$75,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Stuart Percy</td>
<td>$75,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Austin Poganski</td>
<td>$75,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Adam Musil</td>
<td>$75,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Nick Lappin</td>
<td>$75,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Aaron Harstad</td>
<td>$75,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>13</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $1,057,667</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $640,167</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> $0</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $1,043,667</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $635,000</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $0</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> $0</td></tr>
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
<tr><td>Level 1: </td><td>6000 - $220 - 3,810 - 63.50%</td></tr>
<tr><td>Level 2: </td><td>5000 - $165 - 2,986 - 59.71%</td></tr>
<tr><td>Level 3: </td><td>4000 - $135 - 2,332 - 58.31%</td></tr>
<tr><td>Level 4: </td><td>3000 - $110 - 1,539 - 51.30%</td></tr>
<tr><td>Luxury : </td><td>1000 - $300 - 676 - 67.63%</td></tr>
<tr><td>Total Capacity :</td><td>19000</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Farm Level 1: </td><td>2000 - $19 - 2,000 - 100.00%</td></tr>
<tr><td>Farm Level 2: </td><td>1000 - $0 - 939 - 93.91%</td></tr>
<tr><td>Farm Total Capacity :</td><td>3000</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Income">Income</h3></td></tr>
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>11,343 - 59.70%</td></tr>
<tr><td>Average Income per Game</td><td>$2,017,897</td></tr>
<tr><td>Year to Date Revenue</td><td>$82,733,785</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>2,939 - 97.97%</td></tr>
<tr><td>Average Income per Game</td><td>$38,000</td></tr>
<tr><td>Year to Date Revenue</td><td>$1,558,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>$78,856,667</td></tr>
<tr><td>Farm Players Total Salaries</td><td>$872,500</td></tr>
<tr><td>Coaches Total Salaries</td><td>$5,900,000</td></tr>
<tr><td>Luxury Taxe Total</td><td>$0</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>$79,499,386</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>$1,718,795</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>$74,499,365</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>$0</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Pro Estimated Season Revenue</td><td>$0</td></tr>
<tr><td>Farm Estimated Season Revenue</td><td>$0</td></tr>
<tr><td>Pro Remaining Season Days</td><td>0</td></tr>
<tr><td>Pro Expenses Per Days</td><td>$476,458</td></tr>
<tr><td>Pro Estimated Expenses</td><td>$0</td></tr>
<tr><td>Farm Remaining Season Days</td><td>0</td></tr>
<tr><td>Farm Expenses Per Days</td><td>$11,976</td></tr>
<tr><td>Farm Estimated Expenses</td><td>$0</td></tr>
<tr><td>Estimated Season Expenses</td><td>$0</td></tr>
<tr><td>Estimated Season Salary Cap</td><td>$74,499,365</td></tr>
<tr><td>Estimate Under Maximum Salary Cap of $81,500,000</td><td>$7,000,635</td></tr>
<tr><td>Estimate Over Minimum Salary Cap of $60,200,000 </td><td>$14,299,365</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>$30,218,348</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>$30,218,348</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Taylor Hall</td>
<td>$8,750,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Roman Josi</td>
<td>$8,000,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Brent Seabrook</td>
<td>$7,750,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Bobby Ryan (1 Way Contract)</td>
<td>$5,000,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Max Domi (1 Way Contract)</td>
<td>$4,800,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Charlie Coyle</td>
<td>$4,500,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jaroslav Halak (1 Way Contract)</td>
<td>$4,000,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jack Roslovic</td>
<td>$3,837,500 (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Luca Sbisa</td>
<td>$3,750,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Matt Grzelcyk</td>
<td>$3,687,500 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Frans Nielsen</td>
<td>$3,500,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Robby Fabbri</td>
<td>$2,950,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Kyle Turris</td>
<td>$2,500,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Artturi Lehkonen</td>
<td>$2,300,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Erik Gustafsson</td>
<td>$2,000,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>John Marino</td>
<td>$1,775,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Brad Richardson</td>
<td>$1,500,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Brendan Perlini</td>
<td>$1,500,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Colin White</td>
<td>$1,491,667 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Mark Jankowski</td>
<td>$1,100,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Melker Karlsson</td>
<td>$1,100,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Caleb Jones</td>
<td>$815,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Felix Sandstrom</td>
<td>$750,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Chad Ruhwedel</td>
<td>$750,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jean-Francois Berube</td>
<td>$750,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>25</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $78,856,667</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $41,162,500</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $19,337,500</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> $3,837,500</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $77,956,669</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $40,312,502</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $19,337,500</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> $3,837,500</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $78,856,667</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $41,162,500</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $19,337,500</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> $3,837,500</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Dominik Bokk</td>
<td>$113,750 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jesse Ylonen</td>
<td>$92,500 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Rem Pitlick</td>
<td>$92,500 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Cory Schneider</td>
<td>$90,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Linus Hogberg</td>
<td>$90,000 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Max Gildon</td>
<td>$85,333 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Ryan McLeod</td>
<td>$83,417 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Kyle Capobianco</td>
<td>$75,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Nicholas Caamano</td>
<td>$75,000 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Ian McCoshen</td>
<td>$75,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>10</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $872,500</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $615,000</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $540,000</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> $0</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $872,500</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $615,000</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $540,000</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> $0</td></tr>
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
<tr><td class="STHSW250">Arena Name</td><td class="STHSW200">Little Caesars Arena</td></tr>
<tr><td>Level 1: </td><td>6000 - $170 - 5,506 - 91.76%</td></tr>
<tr><td>Level 2: </td><td>5000 - $124 - 4,696 - 93.92%</td></tr>
<tr><td>Level 3: </td><td>4000 - $97 - 3,713 - 92.84%</td></tr>
<tr><td>Level 4: </td><td>3000 - $69 - 2,777 - 92.58%</td></tr>
<tr><td>Luxury : </td><td>1000 - $254 - 944 - 94.40%</td></tr>
<tr><td>Total Capacity :</td><td>19000</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Farm Level 1: </td><td>2000 - $55 - 1,866 - 93.28%</td></tr>
<tr><td>Farm Level 2: </td><td>1000 - $0 - 958 - 95.78%</td></tr>
<tr><td>Farm Total Capacity :</td><td>3000</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Income">Income</h3></td></tr>
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>17,636 - 92.82%</td></tr>
<tr><td>Average Income per Game</td><td>$2,328,748</td></tr>
<tr><td>Year to Date Revenue</td><td>$95,478,673</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>2,823 - 94.11%</td></tr>
<tr><td>Average Income per Game</td><td>$106,244</td></tr>
<tr><td>Year to Date Revenue</td><td>$4,355,999</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>$68,135,833</td></tr>
<tr><td>Farm Players Total Salaries</td><td>$1,507,083</td></tr>
<tr><td>Coaches Total Salaries</td><td>$3,525,000</td></tr>
<tr><td>Luxury Taxe Total</td><td>$0</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>$80,130,368</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>$2,206,998</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>$77,685,770</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>$0</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Pro Estimated Season Revenue</td><td>$0</td></tr>
<tr><td>Farm Estimated Season Revenue</td><td>$0</td></tr>
<tr><td>Pro Remaining Season Days</td><td>0</td></tr>
<tr><td>Pro Expenses Per Days</td><td>$402,760</td></tr>
<tr><td>Pro Estimated Expenses</td><td>$0</td></tr>
<tr><td>Farm Remaining Season Days</td><td>0</td></tr>
<tr><td>Farm Expenses Per Days</td><td>$15,419</td></tr>
<tr><td>Farm Estimated Expenses</td><td>$0</td></tr>
<tr><td>Estimated Season Expenses</td><td>$0</td></tr>
<tr><td>Estimated Season Salary Cap</td><td>$77,685,770</td></tr>
<tr><td>Estimate Under Maximum Salary Cap of $81,500,000</td><td>$3,814,230</td></tr>
<tr><td>Estimate Over Minimum Salary Cap of $60,200,000 </td><td>$17,485,770</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>$15,038,387</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>$15,038,387</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Connor McDavid (Out of Payroll)</td>
<td>$12,750,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Brayden Point</td>
<td>$8,500,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Patrik Laine</td>
<td>$8,475,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Mike Smith</td>
<td>$7,750,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Mathew Dumba</td>
<td>$6,000,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Torey Krug</td>
<td>$5,600,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Nino Niederreiter</td>
<td>$5,500,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Josh Manson</td>
<td>$4,500,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jared McCann</td>
<td>$4,000,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Oliver Bjorkstrand</td>
<td>$3,000,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jake McCabe</td>
<td>$2,750,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Connor Carrick</td>
<td>$1,650,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Chris Wagner</td>
<td>$1,500,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Ivan Barbashev</td>
<td>$1,250,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Troy Stecher</td>
<td>$1,100,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Teddy Blueger</td>
<td>$925,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Stefan Noesen</td>
<td>$925,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Mathieu Joseph</td>
<td>$910,833 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Andrew Mangiapane</td>
<td>$800,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Anton Blidh</td>
<td>$750,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Boo Nieves</td>
<td>$750,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Connor Clifton</td>
<td>$750,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Evan Fitzpatrick</td>
<td>$750,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>23</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $80,885,833</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $66,100,000</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $35,100,000</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> $12,750,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $80,885,833</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $66,100,000</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $35,100,000</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> $12,750,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $80,885,833</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $66,100,000</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $35,100,000</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> $12,750,000</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Owen Tippett</td>
<td>$159,667 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Zac Dalpe</td>
<td>$120,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Dryden Hunt</td>
<td>$96,500 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Austin Wagner</td>
<td>$92,500 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Josh Mahura</td>
<td>$91,083 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Alex Biega</td>
<td>$90,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Martin Frk</td>
<td>$86,333 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Axel Jonsson-Fjallby</td>
<td>$86,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Noah Gregor</td>
<td>$85,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Anton Lindholm</td>
<td>$75,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Joel Hanley</td>
<td>$75,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Marcus Hogberg</td>
<td>$75,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jack Dougherty</td>
<td>$75,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Anthony Richard</td>
<td>$75,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jake Paterson</td>
<td>$75,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jake Bischoff</td>
<td>$75,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Reece Willcox</td>
<td>$75,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>17</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $1,507,083</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $870,667</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $159,667</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> $0</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $1,507,083</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $870,667</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $159,667</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> $0</td></tr>
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
<br /><br /><table class="STHSTableFullW"><tr><td style="vertical-align: top;width:440px;">
<table class="STHSFinance_TeamTable">
<tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_AreanaCapacity">Arena Capacity - Ticket Price<br />Attendance - %</h3></td></tr>
<tr><td class="STHSW250">Arena Name</td><td class="STHSW200">HSBC Arena</td></tr>
<tr><td>Level 1: </td><td>6000 - $220 - 3,842 - 64.04%</td></tr>
<tr><td>Level 2: </td><td>5000 - $160 - 3,088 - 61.76%</td></tr>
<tr><td>Level 3: </td><td>4000 - $120 - 2,557 - 63.91%</td></tr>
<tr><td>Level 4: </td><td>3000 - $100 - 1,717 - 57.23%</td></tr>
<tr><td>Luxury : </td><td>1000 - $300 - 681 - 68.10%</td></tr>
<tr><td>Total Capacity :</td><td>19000</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Farm Level 1: </td><td>2000 - $100 - 919 - 45.96%</td></tr>
<tr><td>Farm Level 2: </td><td>1000 - $0 - 955 - 95.50%</td></tr>
<tr><td>Farm Total Capacity :</td><td>3000</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Income">Income</h3></td></tr>
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>11,884 - 62.55%</td></tr>
<tr><td>Average Income per Game</td><td>$2,022,126</td></tr>
<tr><td>Year to Date Revenue</td><td>$82,907,160</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>1,874 - 62.47%</td></tr>
<tr><td>Average Income per Game</td><td>$91,927</td></tr>
<tr><td>Year to Date Revenue</td><td>$3,769,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>$77,604,167</td></tr>
<tr><td>Farm Players Total Salaries</td><td>$1,628,833</td></tr>
<tr><td>Coaches Total Salaries</td><td>$1,900,000</td></tr>
<tr><td>Luxury Taxe Total</td><td>$0</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>$80,841,195</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>$2,588,572</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>$79,841,173</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>$0</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Pro Estimated Season Revenue</td><td>$0</td></tr>
<tr><td>Farm Estimated Season Revenue</td><td>$0</td></tr>
<tr><td>Pro Remaining Season Days</td><td>0</td></tr>
<tr><td>Pro Expenses Per Days</td><td>$446,615</td></tr>
<tr><td>Pro Estimated Expenses</td><td>$0</td></tr>
<tr><td>Farm Remaining Season Days</td><td>0</td></tr>
<tr><td>Farm Expenses Per Days</td><td>$17,087</td></tr>
<tr><td>Farm Estimated Expenses</td><td>$0</td></tr>
<tr><td>Estimated Season Expenses</td><td>$0</td></tr>
<tr><td>Estimated Season Salary Cap</td><td>$79,841,173</td></tr>
<tr><td>Estimate Under Maximum Salary Cap of $81,500,000</td><td>$1,658,827</td></tr>
<tr><td>Estimate Over Minimum Salary Cap of $60,200,000 </td><td>$19,641,173</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>$80,376,712</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>$80,376,712</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Sidney Crosby</td>
<td>$11,000,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Anze Kopitar</td>
<td>$11,000,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Ryan Suter (Out of Payroll)</td>
<td>$9,625,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Mark Giordano</td>
<td>$8,500,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>David Pastrnak</td>
<td>$6,750,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Rasmus Ristolainen</td>
<td>$5,750,000 (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Anders Lee</td>
<td>$5,500,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Chris Kreider</td>
<td>$5,100,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Thomas Greiss</td>
<td>$4,000,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Mark Borowiecki</td>
<td>$2,500,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jack Johnson</td>
<td>$2,000,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Zemgus Girgensons</td>
<td>$1,725,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Zach Aston-Reese</td>
<td>$1,725,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Michael Del Zotto</td>
<td>$1,500,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Alexandar Georgiev</td>
<td>$1,500,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Ilya Samsonov</td>
<td>$1,475,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Robert Hagg</td>
<td>$1,450,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Tage Thompson</td>
<td>$1,400,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Derek Grant</td>
<td>$1,050,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Cody Eakin</td>
<td>$1,000,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Ilya Lyubushkin</td>
<td>$985,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Carter Verhaeghe</td>
<td>$894,167 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Trevor Moore</td>
<td>$800,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>23</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $87,229,167</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $60,225,000</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $32,600,000</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> $20,200,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $86,679,167</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $59,675,000</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $32,600,000</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> $20,200,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $87,229,167</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $60,225,000</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $32,600,000</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> $20,200,000</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Christian Djoos</td>
<td>$127,500 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Ross Johnston</td>
<td>$100,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Arttu Ruotsalainen</td>
<td>$92,500 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Mikey Eyssimont</td>
<td>$92,500 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Keegan Kolesar</td>
<td>$90,500 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Joona Luoto</td>
<td>$75,833 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Andy Welinski</td>
<td>$75,000 (4)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Remi Elie</td>
<td>$75,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Tyler Lewington</td>
<td>$75,000 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Andrew Poturalski</td>
<td>$75,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Michael Amadio</td>
<td>$75,000 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jonas Johansson</td>
<td>$75,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Sean Malone</td>
<td>$75,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jon Gillies</td>
<td>$75,000 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Chris Terry</td>
<td>$75,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Cole Schneider</td>
<td>$75,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Dalton Smith</td>
<td>$75,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Taylor Fedun</td>
<td>$75,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Turner Elson</td>
<td>$75,000 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Ryan Fitzgerald</td>
<td>$75,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>20</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $1,628,833</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $1,083,000</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $375,000</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> $75,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $1,622,167</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $1,083,000</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $375,000</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> $75,000</td></tr>
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
<h2 class="STHSTeamFinance_TeamOverUnderSalaryCap">Senators is over or under the salary cap!</h2>
<br /><br /><table class="STHSTableFullW"><tr><td style="vertical-align: top;width:440px;">
<table class="STHSFinance_TeamTable">
<tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_AreanaCapacity">Arena Capacity - Ticket Price<br />Attendance - %</h3></td></tr>
<tr><td class="STHSW250">Arena Name</td><td class="STHSW200">Scotiabank Place</td></tr>
<tr><td>Level 1: </td><td>6000 - $175 - 5,164 - 86.06%</td></tr>
<tr><td>Level 2: </td><td>5000 - $123 - 4,391 - 87.83%</td></tr>
<tr><td>Level 3: </td><td>4000 - $95 - 3,395 - 84.88%</td></tr>
<tr><td>Level 4: </td><td>3000 - $70 - 2,615 - 87.16%</td></tr>
<tr><td>Luxury : </td><td>1000 - $250 - 903 - 90.27%</td></tr>
<tr><td>Total Capacity :</td><td>19000</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Farm Level 1: </td><td>2000 - $40 - 1,961 - 98.07%</td></tr>
<tr><td>Farm Level 2: </td><td>1000 - $0 - 946 - 94.63%</td></tr>
<tr><td>Farm Total Capacity :</td><td>3000</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Income">Income</h3></td></tr>
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>16,468 - 86.67%</td></tr>
<tr><td>Average Income per Game</td><td>$2,252,155</td></tr>
<tr><td>Year to Date Revenue</td><td>$92,338,364</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>2,908 - 96.92%</td></tr>
<tr><td>Average Income per Game</td><td>$78,457</td></tr>
<tr><td>Year to Date Revenue</td><td>$3,216,720</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>$61,916,667</td></tr>
<tr><td>Farm Players Total Salaries</td><td>$1,312,749</td></tr>
<tr><td>Coaches Total Salaries</td><td>$2,200,000</td></tr>
<tr><td>Luxury Taxe Total</td><td>$0</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>$59,809,532</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>$2,026,271</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>$57,644,755</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>$0</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Pro Estimated Season Revenue</td><td>$0</td></tr>
<tr><td>Farm Estimated Season Revenue</td><td>$0</td></tr>
<tr><td>Pro Remaining Season Days</td><td>0</td></tr>
<tr><td>Pro Expenses Per Days</td><td>$360,322</td></tr>
<tr><td>Pro Estimated Expenses</td><td>$0</td></tr>
<tr><td>Farm Remaining Season Days</td><td>0</td></tr>
<tr><td>Farm Expenses Per Days</td><td>$13,600</td></tr>
<tr><td>Farm Estimated Expenses</td><td>$0</td></tr>
<tr><td>Estimated Season Expenses</td><td>$0</td></tr>
<tr><td>Estimated Season Salary Cap</td><td>$57,644,755</td></tr>
<tr><td>Estimate Under Maximum Salary Cap of $81,500,000</td><td>$23,855,245</td></tr>
<tr><td>Estimate Over Minimum Salary Cap of $60,200,000 </td><td><span style="color:red">-$2,555,245</span></td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>$46,155,522</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>$46,155,522</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Gustav Nyquist</td>
<td>$7,500,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>James Neal (1 Way Contract)</td>
<td>$6,500,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jake Allen (Out of Payroll)</td>
<td>$5,000,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Artem Anisimov (1 Way Contract)</td>
<td>$4,850,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Michal Kempny</td>
<td>$3,500,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Radim Simek</td>
<td>$3,500,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>J.T. Compher</td>
<td>$3,500,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>David Rittich</td>
<td>$3,000,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Anthony Beauvillier</td>
<td>$3,000,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Brett Connolly</td>
<td>$3,000,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jan Rutta</td>
<td>$3,000,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Will Butcher (1 Way Contract)</td>
<td>$3,000,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Patrick Marleau</td>
<td>$2,250,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jason Spezza</td>
<td>$2,250,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Devan Dubnyk</td>
<td>$2,000,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Andrew Peeke</td>
<td>$1,491,667 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Devin Shore</td>
<td>$1,350,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Dylan McIlrath (Out of Payroll)</td>
<td>$1,100,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Michael Bunting</td>
<td>$925,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Brogan Rafferty</td>
<td>$800,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jordan Nolan</td>
<td>$750,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Blaine Byron</td>
<td>$750,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>22</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $63,016,667</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $38,391,667</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $12,900,000</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> $6,500,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $62,441,668</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $37,816,668</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $12,900,000</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> $6,500,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $63,016,667</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $38,391,667</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $12,900,000</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> $6,500,000</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Graham Knott</td>
<td>$93,583 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Cam Dineen</td>
<td>$91,083 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Cole Bardreau</td>
<td>$90,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Kevin Connauton</td>
<td>$90,000 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Klim Kostin</td>
<td>$86,333 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Fredrik Claesson</td>
<td>$85,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jordan Gross</td>
<td>$85,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Gerald Mayhew</td>
<td>$85,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Gilles Senn</td>
<td>$81,750 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Yannick Weber</td>
<td>$75,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Dmytro Timashov</td>
<td>$75,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Daniel Audette</td>
<td>$75,000 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Nick Moutrey</td>
<td>$75,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Daniel Walcott</td>
<td>$75,000 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Dakota Mermis</td>
<td>$75,000 (4)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Mitch Reinke</td>
<td>$75,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>16</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $1,312,749</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $992,749</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $499,666</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> $75,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $1,340,116</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $1,020,116</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $499,666</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> $75,000</td></tr>
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
<tr><td>Level 1: </td><td>6000 - $169 - 5,695 - 94.91%</td></tr>
<tr><td>Level 2: </td><td>5000 - $127 - 3,884 - 77.69%</td></tr>
<tr><td>Level 3: </td><td>4000 - $83 - 3,840 - 95.99%</td></tr>
<tr><td>Level 4: </td><td>3000 - $50 - 2,956 - 98.52%</td></tr>
<tr><td>Luxury : </td><td>1000 - $230 - 958 - 95.84%</td></tr>
<tr><td>Total Capacity :</td><td>19000</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Farm Level 1: </td><td>2000 - $99 - 930 - 46.48%</td></tr>
<tr><td>Farm Level 2: </td><td>1000 - $0 - 943 - 94.25%</td></tr>
<tr><td>Farm Total Capacity :</td><td>3000</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Income">Income</h3></td></tr>
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>17,333 - 91.23%</td></tr>
<tr><td>Average Income per Game</td><td>$2,142,625</td></tr>
<tr><td>Year to Date Revenue</td><td>$87,847,609</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>1,872 - 62.40%</td></tr>
<tr><td>Average Income per Game</td><td>$92,031</td></tr>
<tr><td>Year to Date Revenue</td><td>$3,773,286</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>$65,584,167</td></tr>
<tr><td>Farm Players Total Salaries</td><td>$773,917</td></tr>
<tr><td>Coaches Total Salaries</td><td>$3,000,000</td></tr>
<tr><td>Luxury Taxe Total</td><td>$0</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>$72,219,251</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>$1,951,425</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>$70,219,250</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>$0</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Pro Estimated Season Revenue</td><td>$0</td></tr>
<tr><td>Farm Estimated Season Revenue</td><td>$0</td></tr>
<tr><td>Pro Remaining Season Days</td><td>0</td></tr>
<tr><td>Pro Expenses Per Days</td><td>$384,001</td></tr>
<tr><td>Pro Estimated Expenses</td><td>$0</td></tr>
<tr><td>Farm Remaining Season Days</td><td>0</td></tr>
<tr><td>Farm Expenses Per Days</td><td>$11,986</td></tr>
<tr><td>Farm Estimated Expenses</td><td>$0</td></tr>
<tr><td>Estimated Season Expenses</td><td>$0</td></tr>
<tr><td>Estimated Season Salary Cap</td><td>$70,219,250</td></tr>
<tr><td>Estimate Under Maximum Salary Cap of $81,500,000</td><td>$11,280,750</td></tr>
<tr><td>Estimate Over Minimum Salary Cap of $60,200,000 </td><td>$10,019,250</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>$120,815,588</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>$120,815,588</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Kris Letang</td>
<td>$8,650,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Evgeny Kuznetsov (Out of Payroll)</td>
<td>$8,150,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Filip Forsberg (Out of Payroll)</td>
<td>$7,000,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Aleksander Barkov</td>
<td>$5,900,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jakub Vrana (1 Way Contract)</td>
<td>$5,800,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>T.J. Brodie</td>
<td>$5,600,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Mike Matheson</td>
<td>$5,200,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Alex Stalock</td>
<td>$4,000,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Zack Kassian</td>
<td>$2,800,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Warren Foegele</td>
<td>$2,675,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Gustav Forsling</td>
<td>$2,375,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Laurent Brossoit</td>
<td>$2,300,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Mattias Janmark</td>
<td>$2,000,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Joe Thornton</td>
<td>$1,450,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Oliver Wahlstrom (Out of Payroll)</td>
<td>$1,431,667 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Robert Thomas</td>
<td>$1,177,500 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Mario Ferraro</td>
<td>$925,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jimmy Schuldt</td>
<td>$925,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Garnet Hathaway</td>
<td>$850,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Nic Petan</td>
<td>$775,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Adam Helewka</td>
<td>$750,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Eric Comrie</td>
<td>$750,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Zac Leslie</td>
<td>$750,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Tommy Cross</td>
<td>$750,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Stuart Skinner (Out of Payroll)</td>
<td>$750,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Timothy Gettinger</td>
<td>$750,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>26</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $74,484,167</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $63,431,667</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $29,431,667</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> $24,125,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $74,434,167</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $63,431,667</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $29,431,667</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> $24,125,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $74,484,167</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $63,431,667</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $29,431,667</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> $24,125,000</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Kristian Vesalainen</td>
<td>$146,083 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>John Leonard</td>
<td>$113,750 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Kieffer Bellows</td>
<td>$110,667 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Alexey Toropchenko</td>
<td>$87,917 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Kevin Mandolese</td>
<td>$83,500 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Michael Downing</td>
<td>$82,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Cole Ully</td>
<td>$75,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Joseph LaBate</td>
<td>$75,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>8</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $773,917</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $698,917</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $343,333</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> $0</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $773,917</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $698,917</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $343,333</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> $0</td></tr>
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
<tr><td>Level 1: </td><td>6000 - $160 - 5,716 - 95.26%</td></tr>
<tr><td>Level 2: </td><td>5000 - $119 - 4,779 - 95.57%</td></tr>
<tr><td>Level 3: </td><td>4000 - $77 - 3,877 - 96.91%</td></tr>
<tr><td>Level 4: </td><td>3000 - $65 - 2,909 - 96.95%</td></tr>
<tr><td>Luxury : </td><td>1000 - $230 - 962 - 96.21%</td></tr>
<tr><td>Total Capacity :</td><td>19000</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Farm Level 1: </td><td>2000 - $35 - 1,981 - 99.06%</td></tr>
<tr><td>Farm Level 2: </td><td>1000 - $0 - 943 - 94.28%</td></tr>
<tr><td>Farm Total Capacity :</td><td>3000</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Income">Income</h3></td></tr>
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>18,242 - 96.01%</td></tr>
<tr><td>Average Income per Game</td><td>$2,103,970</td></tr>
<tr><td>Year to Date Revenue</td><td>$86,262,755</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>2,924 - 97.47%</td></tr>
<tr><td>Average Income per Game</td><td>$69,344</td></tr>
<tr><td>Year to Date Revenue</td><td>$2,843,120</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>$84,883,000</td></tr>
<tr><td>Farm Players Total Salaries</td><td>$1,510,834</td></tr>
<tr><td>Coaches Total Salaries</td><td>$3,950,000</td></tr>
<tr><td>Luxury Taxe Total</td><td>$0</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>$83,042,287</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>$2,126,017</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>$79,792,287</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>$0</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Pro Estimated Season Revenue</td><td>$0</td></tr>
<tr><td>Farm Estimated Season Revenue</td><td>$0</td></tr>
<tr><td>Pro Remaining Season Days</td><td>0</td></tr>
<tr><td>Pro Expenses Per Days</td><td>$500,756</td></tr>
<tr><td>Pro Estimated Expenses</td><td>$0</td></tr>
<tr><td>Farm Remaining Season Days</td><td>0</td></tr>
<tr><td>Farm Expenses Per Days</td><td>$14,938</td></tr>
<tr><td>Farm Estimated Expenses</td><td>$0</td></tr>
<tr><td>Estimated Season Expenses</td><td>$0</td></tr>
<tr><td>Estimated Season Salary Cap</td><td>$79,792,287</td></tr>
<tr><td>Estimate Under Maximum Salary Cap of $81,500,000</td><td>$1,707,713</td></tr>
<tr><td>Estimate Over Minimum Salary Cap of $60,200,000 </td><td>$19,592,287</td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>$19,170,373</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>$19,170,373</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Patrick Kane (1 Way Contract)</td>
<td>$11,250,000 (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Patrice Bergeron</td>
<td>$9,500,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Max Pacioretty</td>
<td>$7,000,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Ryan Ellis</td>
<td>$6,250,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Cam Talbot</td>
<td>$6,250,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jonathan Marchessault</td>
<td>$5,900,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Anthony Mantha</td>
<td>$5,250,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jeff Carter</td>
<td>$5,000,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Calvin de Haan</td>
<td>$4,550,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Nikita Zadorov</td>
<td>$3,750,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Brandon Montour</td>
<td>$3,000,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Frank Vatrano</td>
<td>$2,533,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jonathan Quick</td>
<td>$2,400,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jordie Benn</td>
<td>$2,000,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Colton Sceviour</td>
<td>$1,750,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Johan Larsson</td>
<td>$1,600,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Josh Archibald</td>
<td>$1,600,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Curtis Lazar</td>
<td>$1,200,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Matt Tennyson</td>
<td>$1,000,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Victor Rask</td>
<td>$800,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Ben Harpur</td>
<td>$800,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jayson Megna</td>
<td>$750,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Brian Boyle</td>
<td>$750,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>23</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $84,883,000</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $65,350,000</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $50,150,000</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> $20,250,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $83,983,001</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $65,350,000</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $50,150,000</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> $20,250,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $84,883,000</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $65,350,000</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $50,150,000</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> $20,250,000</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Thomas Hickey</td>
<td>$387,500 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Xavier Ouellet</td>
<td>$150,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Adam Gaudette</td>
<td>$149,167 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Cayden Primeau</td>
<td>$96,667 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Ryan Poehling</td>
<td>$92,500 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Loui Eriksson</td>
<td>$87,500 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Cal Foote</td>
<td>$85,000 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Brandon Davidson</td>
<td>$80,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Anthony Bitetto</td>
<td>$80,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Brendan Gaunce</td>
<td>$77,500 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Andrew Agozzino</td>
<td>$75,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Kyle Burroughs</td>
<td>$75,000 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Laurent Dauphin</td>
<td>$75,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>13</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $1,510,834</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $736,667</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $160,000</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> $0</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $1,502,250</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $728,083</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $160,000</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> $0</td></tr>
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
<h2 class="STHSTeamFinance_TeamOverUnderSalaryCap">Wild is over or under the salary cap!</h2>
<br /><br /><table class="STHSTableFullW"><tr><td style="vertical-align: top;width:440px;">
<table class="STHSFinance_TeamTable">
<tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_AreanaCapacity">Arena Capacity - Ticket Price<br />Attendance - %</h3></td></tr>
<tr><td class="STHSW250">Arena Name</td><td class="STHSW200">Xcel Energy Center</td></tr>
<tr><td>Level 1: </td><td>6000 - $150 - 5,817 - 96.95%</td></tr>
<tr><td>Level 2: </td><td>5000 - $100 - 4,846 - 96.91%</td></tr>
<tr><td>Level 3: </td><td>4000 - $85 - 3,845 - 96.12%</td></tr>
<tr><td>Level 4: </td><td>3000 - $50 - 2,960 - 98.66%</td></tr>
<tr><td>Luxury : </td><td>1000 - $275 - 732 - 73.19%</td></tr>
<tr><td>Total Capacity :</td><td>19000</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Farm Level 1: </td><td>2000 - $35 - 1,986 - 99.32%</td></tr>
<tr><td>Farm Level 2: </td><td>1000 - $0 - 934 - 93.37%</td></tr>
<tr><td>Farm Total Capacity :</td><td>3000</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Income">Income</h3></td></tr>
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>18,199 - 95.79%</td></tr>
<tr><td>Average Income per Game</td><td>$2,033,203</td></tr>
<tr><td>Year to Date Revenue</td><td>$83,361,335</td></tr>
<tr><td colspan="2" class="STHSCenter"><strong>Farm</strong></td></tr>
<tr><td>Home Games Left</td><td>0</td></tr>
<tr><td>Average Attendance - %</td><td>2,920 - 97.34%</td></tr>
<tr><td>Average Income per Game</td><td>$69,525</td></tr>
<tr><td>Year to Date Revenue</td><td>$2,850,540</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Expense">Expense</h3></td></tr>
<tr><td>Pro Players Total Salaries</td><td>$51,423,167</td></tr>
<tr><td>Farm Players Total Salaries</td><td>$1,669,667</td></tr>
<tr><td>Coaches Total Salaries</td><td>$4,550,000</td></tr>
<tr><td>Luxury Taxe Total</td><td>$0</td></tr>
<tr><td>Pro Year To Date Expenses</td><td>$59,761,443</td></tr>
<tr><td>Farm Year To Date Expenses</td><td>$2,430,726</td></tr>
<tr><td>Pro Salary Cap To Date</td><td>$56,011,426</td></tr>
<tr><td>Farm Salary Cap To Date</td><td>$0</td></tr>
<tr><td colspan="2" class="STHSCenter"><br /><h3 class="STHSTeamFinance_Estimate">Estimate</h3></td></tr>
<tr><td>Pro Estimated Season Revenue</td><td>$0</td></tr>
<tr><td>Farm Estimated Season Revenue</td><td>$0</td></tr>
<tr><td>Pro Remaining Season Days</td><td>0</td></tr>
<tr><td>Pro Expenses Per Days</td><td>$313,484</td></tr>
<tr><td>Pro Estimated Expenses</td><td>$0</td></tr>
<tr><td>Farm Remaining Season Days</td><td>0</td></tr>
<tr><td>Farm Expenses Per Days</td><td>$16,687</td></tr>
<tr><td>Farm Estimated Expenses</td><td>$0</td></tr>
<tr><td>Estimated Season Expenses</td><td>$0</td></tr>
<tr><td>Estimated Season Salary Cap</td><td>$56,011,426</td></tr>
<tr><td>Estimate Under Maximum Salary Cap of $81,500,000</td><td>$25,488,574</td></tr>
<tr><td>Estimate Over Minimum Salary Cap of $60,200,000 </td><td><span style="color:red">-$4,188,574</span></td></tr>
<tr><td class="STHSCenter"><b>Current Bank Account</b></td><td>$106,886,914</td></tr>
<tr><td class="STHSCenter"><b>Projected Bank Account</b></td><td>$106,886,914</td></tr></table>
</td><td class="STHSFinance_ProSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_ProPlayerSalaries">Pro Players Salaries</h3></td></tr>
<tr><td>Matt Duchene</td>
<td>$7,700,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Tyson Barrie</td>
<td>$7,000,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Marcus Foligno</td>
<td>$6,000,000 (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Tyler Myers (Out of Payroll)</td>
<td>$5,600,000 (5)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Tyler Johnson</td>
<td>$5,250,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jonathan Bernier</td>
<td>$4,500,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Tim Stutzle</td>
<td>$3,425,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Rocco Grimaldi</td>
<td>$2,250,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Malcolm Subban</td>
<td>$1,700,000 (4)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Ondrej Kase</td>
<td>$1,250,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Brandon Pirri</td>
<td>$1,250,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jonathon Merrill</td>
<td>$1,250,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Alexander Romanov</td>
<td>$1,177,500 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Adam Fox</td>
<td>$925,001 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Alex Formenton</td>
<td>$888,333 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Conor Garland</td>
<td>$822,333 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Sam Lafferty</td>
<td>$767,500 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Victor Olofsson</td>
<td>$767,500 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Connor Bunnaman</td>
<td>$750,000 (2)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Adam Brooks</td>
<td>$750,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Scott Wedgewood</td>
<td>$750,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Sam Carrick</td>
<td>$750,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Steven Kampfer</td>
<td>$750,000 (1)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jake Walman</td>
<td>$750,000 (3)</td></tr>
<tr><td align="right">-Salary Remaining : </td>
<td>$0</td></tr>
<tr><td><b>Total Pro Players</b></td><td><b>24</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $57,023,167</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $52,700,834</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $42,490,833</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> $13,300,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $56,904,834</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $52,700,834</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $42,490,833</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> $13,300,000</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Cap with 1 Way Contract</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $57,023,167</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $52,700,834</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $42,490,833</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> $13,300,000</td></tr>
</table>
</td><td class="STHSFinance_FarmSalaryTable">
<table class="STHSFinance_TeamTable"><tr><td colspan="2" class="STHSCenter"><h3 class="STHSTeamFinance_FarmPlayerSalaries">Farm Players Salaries</h3></td></tr>
<tr><td>Evan Bouchard</td>
<td>$159,667 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Yegor Chinakhov</td>
<td>$132,500 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Hudson Fasching</td>
<td>$95,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Jayce Hawryluk</td>
<td>$92,500 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Riley Barber</td>
<td>$92,500 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Sebastian AhoD</td>
<td>$92,500 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Conor Timmins</td>
<td>$85,000 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Casey Nelson</td>
<td>$80,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Seth Griffith</td>
<td>$80,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Brett Ritchie</td>
<td>$80,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Tyler Graovac</td>
<td>$80,000 (2)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Kyle Wood</td>
<td>$75,000 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Mike Condon</td>
<td>$75,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Calvin Thurkauf</td>
<td>$75,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Julien Nantel</td>
<td>$75,000 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Shane Gersich</td>
<td>$75,000 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Thomas Di Pauli</td>
<td>$75,000 (3)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>David Warsofsky</td>
<td>$75,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td>Nathan Paetsch</td>
<td>$75,000 (1)</td></tr>
<tr><td align="right">Salary Remaining : </td>
<td>$0</td></tr>
<tr><td><b>Total Farm Players</b></td><td><b>19</b></td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $1,669,667</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $1,009,667</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $677,167</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> $0</td></tr>
<tr><td colspan="2" class="STHSCenter"><b>Salary Average Commitment</b></td></tr>
<tr><td colspan="2"><b>Year 2021 :</b> $1,669,667</td></tr>
<tr><td colspan="2"><b>Year 2022 :</b> $1,009,667</td></tr>
<tr><td colspan="2"><b>Year 2023 :</b> $677,167</td></tr>
<tr><td colspan="2"><b>Year 2024 :</b> $0</td></tr>
</table>
</td></tr></table>
</div>
<h1 class="STHSTeamFinance_SalaryCapCentrale"><a id="SalaryCapCentrale">Salary Cap Centrale</a></h1>
<table class="STHSFinance_TeamTable"><tr>
<td class="STHSCenter"><h3 class="STHSTeamFinance_Team">Team</h3></td>
<td class="STHSCenter"><h3 class="STHSTeamFinance_CurrentFund">Current Fund</h3></td>
<td class="STHSCenter"><h3 class="STHSTeamFinance_EstimatedSeasonSalaryCap">Estimated Season Salary Cap</h3></td>
<td class="STHSCenter"><h3 class="STHSTeamFinance_UnderMaximum">Under Maximum of $81,500,000 <br/> Available Cap Space</h3></td>
<td class="STHSCenter"><h3 class="STHSTeamFinance_OverMinimum">Over Minimum of<br />$60,200,000</h3></td>
<td><h3 class="STHSTeamFinance_ProPlayers">Pro Players</h3></td><td><h3 class="STHSTeamFinance_FarmPlayers">Farm Players</h3></td><td><h3 class="STHSTeamFinance_TotalPlayers">Total Players</h3></td></tr>
<tr><td>Avalanche</td>
<td>$243,735,410</td>
<td>$57,477,160</td>
<td>$24,022,840</td>
<td><span style="color:red">-$2,722,840</span></td>
<td>25</td><td>10</td><td>35</td></tr>
<tr><td>Blackhawks</td>
<td>$50,673,124</td>
<td>$80,049,341</td>
<td>$1,450,659</td>
<td>$19,849,341</td>
<td>21</td><td>15</td><td>36</td></tr>
<tr><td>Blue Jackets</td>
<td>$30,986,620</td>
<td>$76,586,256</td>
<td>$4,913,744</td>
<td>$16,386,256</td>
<td>23</td><td>11</td><td>34</td></tr>
<tr><td>Blues</td>
<td>$73,508,595</td>
<td>$71,548,310</td>
<td>$9,951,690</td>
<td>$11,348,310</td>
<td>23</td><td>14</td><td>37</td></tr>
<tr><td>Bruins</td>
<td>$64,261,933</td>
<td>$75,175,541</td>
<td>$6,324,459</td>
<td>$14,975,541</td>
<td>24</td><td>19</td><td>43</td></tr>
<tr><td>Canadiens</td>
<td>$80,572,282</td>
<td>$79,469,315</td>
<td>$2,030,685</td>
<td>$19,269,315</td>
<td>22</td><td>14</td><td>36</td></tr>
<tr><td>Canucks</td>
<td>$137,141,123</td>
<td>$80,587,356</td>
<td>$912,644</td>
<td>$20,387,356</td>
<td>23</td><td>20</td><td>43</td></tr>
<tr><td>Capitals</td>
<td>$47,792,101</td>
<td>$71,310,492</td>
<td>$10,189,508</td>
<td>$11,110,492</td>
<td>24</td><td>5</td><td>29</td></tr>
<tr><td>Coyotes</td>
<td>$80,397,938</td>
<td>$79,911,012</td>
<td>$1,588,988</td>
<td>$19,711,012</td>
<td>24</td><td>4</td><td>28</td></tr>
<tr><td>Devils</td>
<td>$72,253,418</td>
<td>$79,659,770</td>
<td>$1,840,230</td>
<td>$19,459,770</td>
<td>23</td><td>17</td><td>40</td></tr>
<tr><td>Ducks</td>
<td>$88,731,143</td>
<td>$79,061,572</td>
<td>$2,438,428</td>
<td>$18,861,572</td>
<td>22</td><td>15</td><td>37</td></tr>
<tr><td>Flames</td>
<td>$53,996,771</td>
<td>$80,050,129</td>
<td>$1,449,871</td>
<td>$19,850,129</td>
<td>22</td><td>17</td><td>39</td></tr>
<tr><td>Flyers</td>
<td>$42,821,467</td>
<td>$80,122,028</td>
<td>$1,377,972</td>
<td>$19,922,028</td>
<td>23</td><td>7</td><td>30</td></tr>
<tr><td>Golden Knights</td>
<td>$98,157,701</td>
<td>$72,931,024</td>
<td>$8,568,976</td>
<td>$12,731,024</td>
<td>21</td><td>8</td><td>29</td></tr>
<tr><td>Hurricanes</td>
<td>$34,240,580</td>
<td>$64,551,484</td>
<td>$16,948,516</td>
<td>$4,351,484</td>
<td>24</td><td>21</td><td>45</td></tr>
<tr><td>Islanders</td>
<td>$113,103,559</td>
<td>$80,899,096</td>
<td>$600,904</td>
<td>$20,699,096</td>
<td>23</td><td>13</td><td>36</td></tr>
<tr><td>Jets</td>
<td>$14,238,172</td>
<td>$73,948,311</td>
<td>$7,551,689</td>
<td>$13,748,311</td>
<td>23</td><td>12</td><td>35</td></tr>
<tr><td>Kings</td>
<td>$20,109,527</td>
<td>$80,258,244</td>
<td>$1,241,756</td>
<td>$20,058,244</td>
<td>22</td><td>13</td><td>35</td></tr>
<tr><td>Kraken</td>
<td>$18,732,785</td>
<td>$79,228,982</td>
<td>$2,271,018</td>
<td>$19,028,982</td>
<td>24</td><td>8</td><td>32</td></tr>
<tr><td>Lightning</td>
<td>$36,326,113</td>
<td>$65,295,988</td>
<td>$16,204,012</td>
<td>$5,095,988</td>
<td>24</td><td>14</td><td>38</td></tr>
<tr><td>Maple Leafs</td>
<td>$134,838,687</td>
<td>$81,336,474</td>
<td>$163,526</td>
<td>$21,136,474</td>
<td>23</td><td>26</td><td>49</td></tr>
<tr><td>Oilers</td>
<td>$154,690,418</td>
<td>$80,632,602</td>
<td>$867,398</td>
<td>$20,432,602</td>
<td>22</td><td>21</td><td>43</td></tr>
<tr><td>Panthers</td>
<td>$106,116,157</td>
<td>$61,584,040</td>
<td>$19,915,960</td>
<td>$1,384,040</td>
<td>26</td><td>12</td><td>38</td></tr>
<tr><td>Penguins</td>
<td>$91,013,867</td>
<td>$64,860,420</td>
<td>$16,639,580</td>
<td>$4,660,420</td>
<td>22</td><td>9</td><td>31</td></tr>
<tr><td>Predators</td>
<td>$170,290,229</td>
<td>$77,211,480</td>
<td>$4,288,520</td>
<td>$17,011,480</td>
<td>26</td><td>13</td><td>39</td></tr>
<tr><td>Rangers</td>
<td>$30,218,348</td>
<td>$74,499,365</td>
<td>$7,000,635</td>
<td>$14,299,365</td>
<td>25</td><td>10</td><td>35</td></tr>
<tr><td>Red Wings</td>
<td>$15,038,387</td>
<td>$77,685,770</td>
<td>$3,814,230</td>
<td>$17,485,770</td>
<td>23</td><td>17</td><td>40</td></tr>
<tr><td>Sabres</td>
<td>$80,376,712</td>
<td>$79,841,173</td>
<td>$1,658,827</td>
<td>$19,641,173</td>
<td>23</td><td>20</td><td>43</td></tr>
<tr><td>Senators</td>
<td>$46,155,522</td>
<td>$57,644,755</td>
<td>$23,855,245</td>
<td><span style="color:red">-$2,555,245</span></td>
<td>22</td><td>16</td><td>38</td></tr>
<tr><td>Sharks</td>
<td>$120,815,588</td>
<td>$70,219,250</td>
<td>$11,280,750</td>
<td>$10,019,250</td>
<td>26</td><td>8</td><td>34</td></tr>
<tr><td>Stars</td>
<td>$19,170,373</td>
<td>$79,792,287</td>
<td>$1,707,713</td>
<td>$19,592,287</td>
<td>23</td><td>13</td><td>36</td></tr>
<tr><td>Wild</td>
<td>$106,886,914</td>
<td>$56,011,426</td>
<td>$25,488,574</td>
<td><span style="color:red">-$4,188,574</span></td>
<td>24</td><td>19</td><td>43</td></tr>
</table>
<?php include "Footer.php";?>
