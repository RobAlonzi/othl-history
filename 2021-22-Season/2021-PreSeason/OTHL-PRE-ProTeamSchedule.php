<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<title>OTHL - Pro Team Schedule</title>
<script src="OTHL-PRE.js"></script>
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
<script>$(function(){$("table").basictablesorter()});</script>
<div class="STHSTopLink"><a id="STHSRosterTop"></a> <a href="#Avalanche">Avalanche</a> | <a href="#Blackhawks">Blackhawks</a> | <a href="#BlueJackets">Blue Jackets</a> | <a href="#Blues">Blues</a> | <a href="#Bruins">Bruins</a> | <a href="#Canadiens">Canadiens</a> | <a href="#Canucks">Canucks</a> | <a href="#Capitals">Capitals</a> | <a href="#Coyotes">Coyotes</a> | <a href="#Devils">Devils</a> | <a href="#Ducks">Ducks</a> | <a href="#Flames">Flames</a> | <a href="#Flyers">Flyers</a> | <a href="#GoldenKnights">Golden Knights</a> | <a href="#Hurricanes">Hurricanes</a> | <a href="#Islanders">Islanders</a> | <a href="#Jets">Jets</a> | <a href="#Kings">Kings</a> | <a href="#Kraken">Kraken</a> | <a href="#Lightning">Lightning</a> | <a href="#MapleLeafs">Maple Leafs</a> | <a href="#Oilers">Oilers</a> | <a href="#Panthers">Panthers</a> | <a href="#Penguins">Penguins</a> | <a href="#Predators">Predators</a> | <a href="#Rangers">Rangers</a> | <a href="#RedWings">Red Wings</a> | <a href="#Sabres">Sabres</a> | <a href="#Senators">Senators</a> | <a href="#Sharks">Sharks</a> | <a href="#Stars">Stars</a> | <a href="#Wild">Wild</a> | <a href="javascript:STHS_JS_CloseAll('');">Close All Team View</a> | <a href="javascript:STHS_JS_OpenAll('');">Open All Team View</a>
</div>
<h1 class="TeamSchedulePro_COL"><a id="Avalanche">Avalanche</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=8">Avalanche Page</a> ]
[ <a href="OTHL-PRE-ProTeamRoster.php#Avalanche">Pro Team Roster</a> ]
[ <a href="OTHL-PRE-ProTeamScoring.php#Avalanche">Pro Team Scoring</a> ]
[ <a href="OTHL-PRE-TeamFinance.php#Avalanche">Team Finance</a> ]
[ <a href="OTHL-PRE-ProTeamPlayersInfo.php#Avalanche">Pro Team PlayersInfo</a> ]
[ <a href="OTHL-PRE-ProTeamLines.php#Avalanche">Pro Team Lines</a> ]
[ <a href="OTHL-PRE-TeamProspects.php#Avalanche">Team Prospects</a> ]
[ <a href="OTHL-PRE-ProTeamSchedule.php#Avalanche">Pro Team Schedule</a> ]
[ <a href="OTHL-PRE-ProTeamStats.php#Avalanche">Pro Team Stats</a> ]
[ <a href="OTHL-PRE-ProTeamStatsVS.php#Avalanche">Pro Team Stats VS</a> ]
[ <a href="OTHL-PRE-TeamInjurySuspension.php#Avalanche">Team Injury Suspension</a> ]
[ <a href="OTHL-PRE-TeamHistory.php#Avalanche">Team History</a> ]
[ <a href="OTHL-PRE-TeamRecords.php#Avalanche">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Avalanche');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Avalanche" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW35">Day</th><th class="STHSW35">Game</th><th class="STHSW200">Visitor Team</th><th class="STHSW35">Score</th><th class="STHSW200">Home Team</th><th class="STHSW35">Score</th><th class="STHSW35">ST</th><th class="STHSW35">OT</th><th class="STHSW35">SO</th><th class="STHSW35">RI</th><th class="STHSW200">Link</th></tr></thead>
<tr><td>1</td><td>6</td><td><a href="OTHL-PRE-ProTeamRoster.php#Avalanche">Avalanche</a></td><td>3</td><td><a href="OTHL-PRE-ProTeamRoster.php#Stars">Stars</a></td><td>0</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-6.html">Game Direct Link</a></td></tr>
<tr><td>2</td><td>22</td><td><a href="OTHL-PRE-ProTeamRoster.php#Predators">Predators</a></td><td>3</td><td><a href="OTHL-PRE-ProTeamRoster.php#Avalanche">Avalanche</a></td><td>1</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-22.html">Game Direct Link</a></td></tr>
<tr><td>4</td><td>36</td><td><a href="OTHL-PRE-ProTeamRoster.php#Avalanche">Avalanche</a></td><td>2</td><td><a href="OTHL-PRE-ProTeamRoster.php#Predators">Predators</a></td><td>3</td><td>L</td><td></td><td>*</td><td></td><td><a href="OTHL-PRE-36.html">Game Direct Link</a></td></tr>
<tr><td>5</td><td>56</td><td><a href="OTHL-PRE-ProTeamRoster.php#Blackhawks">Blackhawks</a></td><td>2</td><td><a href="OTHL-PRE-ProTeamRoster.php#Avalanche">Avalanche</a></td><td>1</td><td>L</td><td>*</td><td></td><td></td><td><a href="OTHL-PRE-56.html">Game Direct Link</a></td></tr>
<tr><td>6</td><td>69</td><td><a href="OTHL-PRE-ProTeamRoster.php#Avalanche">Avalanche</a></td><td>1</td><td><a href="OTHL-PRE-ProTeamRoster.php#Jets">Jets</a></td><td>5</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-69.html">Game Direct Link</a></td></tr>
<tr><td>7</td><td>85</td><td><a href="OTHL-PRE-ProTeamRoster.php#Avalanche">Avalanche</a></td><td>0</td><td><a href="OTHL-PRE-ProTeamRoster.php#Blackhawks">Blackhawks</a></td><td>2</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-85.html">Game Direct Link</a></td></tr>
<tr><td>8</td><td>96</td><td><a href="OTHL-PRE-ProTeamRoster.php#Coyotes">Coyotes</a></td><td>2</td><td><a href="OTHL-PRE-ProTeamRoster.php#Avalanche">Avalanche</a></td><td>1</td><td>L</td><td></td><td>*</td><td></td><td><a href="OTHL-PRE-96.html">Game Direct Link</a></td></tr>
<tr><td>9</td><td>120</td><td><a href="OTHL-PRE-ProTeamRoster.php#Avalanche">Avalanche</a></td><td>2</td><td><a href="OTHL-PRE-ProTeamRoster.php#Wild">Wild</a></td><td>4</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-120.html">Game Direct Link</a></td></tr>
<tr><td>10</td><td>125</td><td><a href="OTHL-PRE-ProTeamRoster.php#Jets">Jets</a></td><td>0</td><td><a href="OTHL-PRE-ProTeamRoster.php#Avalanche">Avalanche</a></td><td>3</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-125.html">Game Direct Link</a></td></tr>
<tr><td>12</td><td>153</td><td><a href="OTHL-PRE-ProTeamRoster.php#Stars">Stars</a></td><td>2</td><td><a href="OTHL-PRE-ProTeamRoster.php#Avalanche">Avalanche</a></td><td>1</td><td>L</td><td></td><td>*</td><td></td><td><a href="OTHL-PRE-153.html">Game Direct Link</a></td></tr>
<tr><td>14</td><td>170</td><td><a href="OTHL-PRE-ProTeamRoster.php#Avalanche">Avalanche</a></td><td>4</td><td><a href="OTHL-PRE-ProTeamRoster.php#Coyotes">Coyotes</a></td><td>3</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-170.html">Game Direct Link</a></td></tr>
<tr><td>15</td><td>185</td><td><a href="OTHL-PRE-ProTeamRoster.php#Wild">Wild</a></td><td>3</td><td><a href="OTHL-PRE-ProTeamRoster.php#Avalanche">Avalanche</a></td><td>4</td><td>W</td><td>*</td><td></td><td></td><td><a href="OTHL-PRE-185.html">Game Direct Link</a></td></tr>
<tr><td>16</td><td>193</td><td><a href="OTHL-PRE-ProTeamRoster.php#Avalanche">Avalanche</a></td><td>2</td><td><a href="OTHL-PRE-ProTeamRoster.php#Blues">Blues</a></td><td>1</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-193.html">Game Direct Link</a></td></tr>
<tr><td>18</td><td>214</td><td><a href="OTHL-PRE-ProTeamRoster.php#Blues">Blues</a></td><td>5</td><td><a href="OTHL-PRE-ProTeamRoster.php#Avalanche">Avalanche</a></td><td>3</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-214.html">Game Direct Link</a></td></tr>
</table></div>
<h1 class="TeamSchedulePro_CHI"><a id="Blackhawks">Blackhawks</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=7">Blackhawks Page</a> ]
[ <a href="OTHL-PRE-ProTeamRoster.php#Blackhawks">Pro Team Roster</a> ]
[ <a href="OTHL-PRE-ProTeamScoring.php#Blackhawks">Pro Team Scoring</a> ]
[ <a href="OTHL-PRE-TeamFinance.php#Blackhawks">Team Finance</a> ]
[ <a href="OTHL-PRE-ProTeamPlayersInfo.php#Blackhawks">Pro Team PlayersInfo</a> ]
[ <a href="OTHL-PRE-ProTeamLines.php#Blackhawks">Pro Team Lines</a> ]
[ <a href="OTHL-PRE-TeamProspects.php#Blackhawks">Team Prospects</a> ]
[ <a href="OTHL-PRE-ProTeamSchedule.php#Blackhawks">Pro Team Schedule</a> ]
[ <a href="OTHL-PRE-ProTeamStats.php#Blackhawks">Pro Team Stats</a> ]
[ <a href="OTHL-PRE-ProTeamStatsVS.php#Blackhawks">Pro Team Stats VS</a> ]
[ <a href="OTHL-PRE-TeamInjurySuspension.php#Blackhawks">Team Injury Suspension</a> ]
[ <a href="OTHL-PRE-TeamHistory.php#Blackhawks">Team History</a> ]
[ <a href="OTHL-PRE-TeamRecords.php#Blackhawks">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Blackhawks');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Blackhawks" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW35">Day</th><th class="STHSW35">Game</th><th class="STHSW200">Visitor Team</th><th class="STHSW35">Score</th><th class="STHSW200">Home Team</th><th class="STHSW35">Score</th><th class="STHSW35">ST</th><th class="STHSW35">OT</th><th class="STHSW35">SO</th><th class="STHSW35">RI</th><th class="STHSW200">Link</th></tr></thead>
<tr><td>1</td><td>13</td><td><a href="OTHL-PRE-ProTeamRoster.php#Blues">Blues</a></td><td>3</td><td><a href="OTHL-PRE-ProTeamRoster.php#Blackhawks">Blackhawks</a></td><td>4</td><td>W</td><td></td><td>*</td><td></td><td><a href="OTHL-PRE-13.html">Game Direct Link</a></td></tr>
<tr><td>2</td><td>24</td><td><a href="OTHL-PRE-ProTeamRoster.php#Blackhawks">Blackhawks</a></td><td>2</td><td><a href="OTHL-PRE-ProTeamRoster.php#Wild">Wild</a></td><td>0</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-24.html">Game Direct Link</a></td></tr>
<tr><td>4</td><td>37</td><td><a href="OTHL-PRE-ProTeamRoster.php#Wild">Wild</a></td><td>1</td><td><a href="OTHL-PRE-ProTeamRoster.php#Blackhawks">Blackhawks</a></td><td>3</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-37.html">Game Direct Link</a></td></tr>
<tr><td>5</td><td>56</td><td><a href="OTHL-PRE-ProTeamRoster.php#Blackhawks">Blackhawks</a></td><td>2</td><td><a href="OTHL-PRE-ProTeamRoster.php#Avalanche">Avalanche</a></td><td>1</td><td>W</td><td>*</td><td></td><td></td><td><a href="OTHL-PRE-56.html">Game Direct Link</a></td></tr>
<tr><td>6</td><td>65</td><td><a href="OTHL-PRE-ProTeamRoster.php#Blackhawks">Blackhawks</a></td><td>3</td><td><a href="OTHL-PRE-ProTeamRoster.php#Coyotes">Coyotes</a></td><td>1</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-65.html">Game Direct Link</a></td></tr>
<tr><td>7</td><td>85</td><td><a href="OTHL-PRE-ProTeamRoster.php#Avalanche">Avalanche</a></td><td>0</td><td><a href="OTHL-PRE-ProTeamRoster.php#Blackhawks">Blackhawks</a></td><td>2</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-85.html">Game Direct Link</a></td></tr>
<tr><td>8</td><td>100</td><td><a href="OTHL-PRE-ProTeamRoster.php#Blackhawks">Blackhawks</a></td><td>3</td><td><a href="OTHL-PRE-ProTeamRoster.php#Predators">Predators</a></td><td>4</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-100.html">Game Direct Link</a></td></tr>
<tr><td>9</td><td>116</td><td><a href="OTHL-PRE-ProTeamRoster.php#Stars">Stars</a></td><td>1</td><td><a href="OTHL-PRE-ProTeamRoster.php#Blackhawks">Blackhawks</a></td><td>2</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-116.html">Game Direct Link</a></td></tr>
<tr><td>11</td><td>138</td><td><a href="OTHL-PRE-ProTeamRoster.php#Blackhawks">Blackhawks</a></td><td>2</td><td><a href="OTHL-PRE-ProTeamRoster.php#Jets">Jets</a></td><td>1</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-138.html">Game Direct Link</a></td></tr>
<tr><td>12</td><td>152</td><td><a href="OTHL-PRE-ProTeamRoster.php#Predators">Predators</a></td><td>4</td><td><a href="OTHL-PRE-ProTeamRoster.php#Blackhawks">Blackhawks</a></td><td>2</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-152.html">Game Direct Link</a></td></tr>
<tr><td>13</td><td>161</td><td><a href="OTHL-PRE-ProTeamRoster.php#Blackhawks">Blackhawks</a></td><td>2</td><td><a href="OTHL-PRE-ProTeamRoster.php#Blues">Blues</a></td><td>0</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-161.html">Game Direct Link</a></td></tr>
<tr><td>15</td><td>184</td><td><a href="OTHL-PRE-ProTeamRoster.php#Coyotes">Coyotes</a></td><td>2</td><td><a href="OTHL-PRE-ProTeamRoster.php#Blackhawks">Blackhawks</a></td><td>1</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-184.html">Game Direct Link</a></td></tr>
<tr><td>16</td><td>202</td><td><a href="OTHL-PRE-ProTeamRoster.php#Jets">Jets</a></td><td>4</td><td><a href="OTHL-PRE-ProTeamRoster.php#Blackhawks">Blackhawks</a></td><td>5</td><td>W</td><td>*</td><td></td><td></td><td><a href="OTHL-PRE-202.html">Game Direct Link</a></td></tr>
<tr><td>17</td><td>208</td><td><a href="OTHL-PRE-ProTeamRoster.php#Blackhawks">Blackhawks</a></td><td>4</td><td><a href="OTHL-PRE-ProTeamRoster.php#Stars">Stars</a></td><td>2</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-208.html">Game Direct Link</a></td></tr>
</table></div>
<h1 class="TeamSchedulePro_CLB"><a id="BlueJackets">Blue Jackets</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=9">Blue Jackets Page</a> ]
[ <a href="OTHL-PRE-ProTeamRoster.php#BlueJackets">Pro Team Roster</a> ]
[ <a href="OTHL-PRE-ProTeamScoring.php#BlueJackets">Pro Team Scoring</a> ]
[ <a href="OTHL-PRE-TeamFinance.php#BlueJackets">Team Finance</a> ]
[ <a href="OTHL-PRE-ProTeamPlayersInfo.php#BlueJackets">Pro Team PlayersInfo</a> ]
[ <a href="OTHL-PRE-ProTeamLines.php#BlueJackets">Pro Team Lines</a> ]
[ <a href="OTHL-PRE-TeamProspects.php#BlueJackets">Team Prospects</a> ]
[ <a href="OTHL-PRE-ProTeamSchedule.php#BlueJackets">Pro Team Schedule</a> ]
[ <a href="OTHL-PRE-ProTeamStats.php#BlueJackets">Pro Team Stats</a> ]
[ <a href="OTHL-PRE-ProTeamStatsVS.php#BlueJackets">Pro Team Stats VS</a> ]
[ <a href="OTHL-PRE-TeamInjurySuspension.php#BlueJackets">Team Injury Suspension</a> ]
[ <a href="OTHL-PRE-TeamHistory.php#BlueJackets">Team History</a> ]
[ <a href="OTHL-PRE-TeamRecords.php#BlueJackets">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_BlueJackets');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_BlueJackets" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW35">Day</th><th class="STHSW35">Game</th><th class="STHSW200">Visitor Team</th><th class="STHSW35">Score</th><th class="STHSW200">Home Team</th><th class="STHSW35">Score</th><th class="STHSW35">ST</th><th class="STHSW35">OT</th><th class="STHSW35">SO</th><th class="STHSW35">RI</th><th class="STHSW200">Link</th></tr></thead>
<tr><td>1</td><td>14</td><td><a href="OTHL-PRE-ProTeamRoster.php#Rangers">Rangers</a></td><td>3</td><td><a href="OTHL-PRE-ProTeamRoster.php#BlueJackets">Blue Jackets</a></td><td>2</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-14.html">Game Direct Link</a></td></tr>
<tr><td>2</td><td>30</td><td><a href="OTHL-PRE-ProTeamRoster.php#Penguins">Penguins</a></td><td>3</td><td><a href="OTHL-PRE-ProTeamRoster.php#BlueJackets">Blue Jackets</a></td><td>4</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-30.html">Game Direct Link</a></td></tr>
<tr><td>4</td><td>38</td><td><a href="OTHL-PRE-ProTeamRoster.php#BlueJackets">Blue Jackets</a></td><td>1</td><td><a href="OTHL-PRE-ProTeamRoster.php#Flyers">Flyers</a></td><td>2</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-38.html">Game Direct Link</a></td></tr>
<tr><td>6</td><td>64</td><td><a href="OTHL-PRE-ProTeamRoster.php#BlueJackets">Blue Jackets</a></td><td>3</td><td><a href="OTHL-PRE-ProTeamRoster.php#Hurricanes">Hurricanes</a></td><td>4</td><td>L</td><td></td><td>*</td><td></td><td><a href="OTHL-PRE-64.html">Game Direct Link</a></td></tr>
<tr><td>7</td><td>79</td><td><a href="OTHL-PRE-ProTeamRoster.php#Flyers">Flyers</a></td><td>6</td><td><a href="OTHL-PRE-ProTeamRoster.php#BlueJackets">Blue Jackets</a></td><td>5</td><td>L</td><td></td><td>*</td><td></td><td><a href="OTHL-PRE-79.html">Game Direct Link</a></td></tr>
<tr><td>8</td><td>99</td><td><a href="OTHL-PRE-ProTeamRoster.php#Islanders">Islanders</a></td><td>3</td><td><a href="OTHL-PRE-ProTeamRoster.php#BlueJackets">Blue Jackets</a></td><td>5</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-99.html">Game Direct Link</a></td></tr>
<tr><td>9</td><td>121</td><td><a href="OTHL-PRE-ProTeamRoster.php#BlueJackets">Blue Jackets</a></td><td>2</td><td><a href="OTHL-PRE-ProTeamRoster.php#Islanders">Islanders</a></td><td>4</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-121.html">Game Direct Link</a></td></tr>
<tr><td>10</td><td>130</td><td><a href="OTHL-PRE-ProTeamRoster.php#Hurricanes">Hurricanes</a></td><td>1</td><td><a href="OTHL-PRE-ProTeamRoster.php#BlueJackets">Blue Jackets</a></td><td>3</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-130.html">Game Direct Link</a></td></tr>
<tr><td>11</td><td>135</td><td><a href="OTHL-PRE-ProTeamRoster.php#BlueJackets">Blue Jackets</a></td><td>3</td><td><a href="OTHL-PRE-ProTeamRoster.php#Penguins">Penguins</a></td><td>1</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-135.html">Game Direct Link</a></td></tr>
<tr><td>13</td><td>162</td><td><a href="OTHL-PRE-ProTeamRoster.php#Capitals">Capitals</a></td><td>4</td><td><a href="OTHL-PRE-ProTeamRoster.php#BlueJackets">Blue Jackets</a></td><td>3</td><td>L</td><td></td><td>*</td><td></td><td><a href="OTHL-PRE-162.html">Game Direct Link</a></td></tr>
<tr><td>15</td><td>186</td><td><a href="OTHL-PRE-ProTeamRoster.php#BlueJackets">Blue Jackets</a></td><td>3</td><td><a href="OTHL-PRE-ProTeamRoster.php#Rangers">Rangers</a></td><td>1</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-186.html">Game Direct Link</a></td></tr>
<tr><td>16</td><td>196</td><td><a href="OTHL-PRE-ProTeamRoster.php#Devils">Devils</a></td><td>3</td><td><a href="OTHL-PRE-ProTeamRoster.php#BlueJackets">Blue Jackets</a></td><td>5</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-196.html">Game Direct Link</a></td></tr>
<tr><td>18</td><td>210</td><td><a href="OTHL-PRE-ProTeamRoster.php#BlueJackets">Blue Jackets</a></td><td>2</td><td><a href="OTHL-PRE-ProTeamRoster.php#Capitals">Capitals</a></td><td>4</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-210.html">Game Direct Link</a></td></tr>
<tr><td>19</td><td>224</td><td><a href="OTHL-PRE-ProTeamRoster.php#BlueJackets">Blue Jackets</a></td><td>1</td><td><a href="OTHL-PRE-ProTeamRoster.php#Devils">Devils</a></td><td>2</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-224.html">Game Direct Link</a></td></tr>
</table></div>
<h1 class="TeamSchedulePro_STL"><a id="Blues">Blues</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=25">Blues Page</a> ]
[ <a href="OTHL-PRE-ProTeamRoster.php#Blues">Pro Team Roster</a> ]
[ <a href="OTHL-PRE-ProTeamScoring.php#Blues">Pro Team Scoring</a> ]
[ <a href="OTHL-PRE-TeamFinance.php#Blues">Team Finance</a> ]
[ <a href="OTHL-PRE-ProTeamPlayersInfo.php#Blues">Pro Team PlayersInfo</a> ]
[ <a href="OTHL-PRE-ProTeamLines.php#Blues">Pro Team Lines</a> ]
[ <a href="OTHL-PRE-TeamProspects.php#Blues">Team Prospects</a> ]
[ <a href="OTHL-PRE-ProTeamSchedule.php#Blues">Pro Team Schedule</a> ]
[ <a href="OTHL-PRE-ProTeamStats.php#Blues">Pro Team Stats</a> ]
[ <a href="OTHL-PRE-ProTeamStatsVS.php#Blues">Pro Team Stats VS</a> ]
[ <a href="OTHL-PRE-TeamInjurySuspension.php#Blues">Team Injury Suspension</a> ]
[ <a href="OTHL-PRE-TeamHistory.php#Blues">Team History</a> ]
[ <a href="OTHL-PRE-TeamRecords.php#Blues">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Blues');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Blues" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW35">Day</th><th class="STHSW35">Game</th><th class="STHSW200">Visitor Team</th><th class="STHSW35">Score</th><th class="STHSW200">Home Team</th><th class="STHSW35">Score</th><th class="STHSW35">ST</th><th class="STHSW35">OT</th><th class="STHSW35">SO</th><th class="STHSW35">RI</th><th class="STHSW200">Link</th></tr></thead>
<tr><td>1</td><td>13</td><td><a href="OTHL-PRE-ProTeamRoster.php#Blues">Blues</a></td><td>3</td><td><a href="OTHL-PRE-ProTeamRoster.php#Blackhawks">Blackhawks</a></td><td>4</td><td>L</td><td></td><td>*</td><td></td><td><a href="OTHL-PRE-13.html">Game Direct Link</a></td></tr>
<tr><td>2</td><td>27</td><td><a href="OTHL-PRE-ProTeamRoster.php#Stars">Stars</a></td><td>1</td><td><a href="OTHL-PRE-ProTeamRoster.php#Blues">Blues</a></td><td>3</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-27.html">Game Direct Link</a></td></tr>
<tr><td>4</td><td>40</td><td><a href="OTHL-PRE-ProTeamRoster.php#Jets">Jets</a></td><td>1</td><td><a href="OTHL-PRE-ProTeamRoster.php#Blues">Blues</a></td><td>2</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-40.html">Game Direct Link</a></td></tr>
<tr><td>5</td><td>52</td><td><a href="OTHL-PRE-ProTeamRoster.php#Blues">Blues</a></td><td>2</td><td><a href="OTHL-PRE-ProTeamRoster.php#Jets">Jets</a></td><td>3</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-52.html">Game Direct Link</a></td></tr>
<tr><td>6</td><td>75</td><td><a href="OTHL-PRE-ProTeamRoster.php#Blues">Blues</a></td><td>2</td><td><a href="OTHL-PRE-ProTeamRoster.php#Wild">Wild</a></td><td>3</td><td>L</td><td>*</td><td></td><td></td><td><a href="OTHL-PRE-75.html">Game Direct Link</a></td></tr>
<tr><td>7</td><td>83</td><td><a href="OTHL-PRE-ProTeamRoster.php#Coyotes">Coyotes</a></td><td>2</td><td><a href="OTHL-PRE-ProTeamRoster.php#Blues">Blues</a></td><td>1</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-83.html">Game Direct Link</a></td></tr>
<tr><td>9</td><td>109</td><td><a href="OTHL-PRE-ProTeamRoster.php#Predators">Predators</a></td><td>5</td><td><a href="OTHL-PRE-ProTeamRoster.php#Blues">Blues</a></td><td>3</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-109.html">Game Direct Link</a></td></tr>
<tr><td>10</td><td>123</td><td><a href="OTHL-PRE-ProTeamRoster.php#Blues">Blues</a></td><td>2</td><td><a href="OTHL-PRE-ProTeamRoster.php#Coyotes">Coyotes</a></td><td>1</td><td>W</td><td></td><td>*</td><td></td><td><a href="OTHL-PRE-123.html">Game Direct Link</a></td></tr>
<tr><td>11</td><td>142</td><td><a href="OTHL-PRE-ProTeamRoster.php#Wild">Wild</a></td><td>0</td><td><a href="OTHL-PRE-ProTeamRoster.php#Blues">Blues</a></td><td>1</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-142.html">Game Direct Link</a></td></tr>
<tr><td>13</td><td>161</td><td><a href="OTHL-PRE-ProTeamRoster.php#Blackhawks">Blackhawks</a></td><td>2</td><td><a href="OTHL-PRE-ProTeamRoster.php#Blues">Blues</a></td><td>0</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-161.html">Game Direct Link</a></td></tr>
<tr><td>15</td><td>190</td><td><a href="OTHL-PRE-ProTeamRoster.php#Blues">Blues</a></td><td>2</td><td><a href="OTHL-PRE-ProTeamRoster.php#Stars">Stars</a></td><td>3</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-190.html">Game Direct Link</a></td></tr>
<tr><td>16</td><td>193</td><td><a href="OTHL-PRE-ProTeamRoster.php#Avalanche">Avalanche</a></td><td>2</td><td><a href="OTHL-PRE-ProTeamRoster.php#Blues">Blues</a></td><td>1</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-193.html">Game Direct Link</a></td></tr>
<tr><td>17</td><td>207</td><td><a href="OTHL-PRE-ProTeamRoster.php#Blues">Blues</a></td><td>5</td><td><a href="OTHL-PRE-ProTeamRoster.php#Predators">Predators</a></td><td>6</td><td>L</td><td>*</td><td></td><td></td><td><a href="OTHL-PRE-207.html">Game Direct Link</a></td></tr>
<tr><td>18</td><td>214</td><td><a href="OTHL-PRE-ProTeamRoster.php#Blues">Blues</a></td><td>5</td><td><a href="OTHL-PRE-ProTeamRoster.php#Avalanche">Avalanche</a></td><td>3</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-214.html">Game Direct Link</a></td></tr>
</table></div>
<h1 class="TeamSchedulePro_BOS"><a id="Bruins">Bruins</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=3">Bruins Page</a> ]
[ <a href="OTHL-PRE-ProTeamRoster.php#Bruins">Pro Team Roster</a> ]
[ <a href="OTHL-PRE-ProTeamScoring.php#Bruins">Pro Team Scoring</a> ]
[ <a href="OTHL-PRE-TeamFinance.php#Bruins">Team Finance</a> ]
[ <a href="OTHL-PRE-ProTeamPlayersInfo.php#Bruins">Pro Team PlayersInfo</a> ]
[ <a href="OTHL-PRE-ProTeamLines.php#Bruins">Pro Team Lines</a> ]
[ <a href="OTHL-PRE-TeamProspects.php#Bruins">Team Prospects</a> ]
[ <a href="OTHL-PRE-ProTeamSchedule.php#Bruins">Pro Team Schedule</a> ]
[ <a href="OTHL-PRE-ProTeamStats.php#Bruins">Pro Team Stats</a> ]
[ <a href="OTHL-PRE-ProTeamStatsVS.php#Bruins">Pro Team Stats VS</a> ]
[ <a href="OTHL-PRE-TeamInjurySuspension.php#Bruins">Team Injury Suspension</a> ]
[ <a href="OTHL-PRE-TeamHistory.php#Bruins">Team History</a> ]
[ <a href="OTHL-PRE-TeamRecords.php#Bruins">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Bruins');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Bruins" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW35">Day</th><th class="STHSW35">Game</th><th class="STHSW200">Visitor Team</th><th class="STHSW35">Score</th><th class="STHSW200">Home Team</th><th class="STHSW35">Score</th><th class="STHSW35">ST</th><th class="STHSW35">OT</th><th class="STHSW35">SO</th><th class="STHSW35">RI</th><th class="STHSW200">Link</th></tr></thead>
<tr><td>1</td><td>11</td><td><a href="OTHL-PRE-ProTeamRoster.php#RedWings">Red Wings</a></td><td>2</td><td><a href="OTHL-PRE-ProTeamRoster.php#Bruins">Bruins</a></td><td>4</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-11.html">Game Direct Link</a></td></tr>
<tr><td>2</td><td>29</td><td><a href="OTHL-PRE-ProTeamRoster.php#Senators">Senators</a></td><td>0</td><td><a href="OTHL-PRE-ProTeamRoster.php#Bruins">Bruins</a></td><td>4</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-29.html">Game Direct Link</a></td></tr>
<tr><td>4</td><td>44</td><td><a href="OTHL-PRE-ProTeamRoster.php#Bruins">Bruins</a></td><td>4</td><td><a href="OTHL-PRE-ProTeamRoster.php#RedWings">Red Wings</a></td><td>1</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-44.html">Game Direct Link</a></td></tr>
<tr><td>5</td><td>53</td><td><a href="OTHL-PRE-ProTeamRoster.php#Bruins">Bruins</a></td><td>1</td><td><a href="OTHL-PRE-ProTeamRoster.php#Sabres">Sabres</a></td><td>2</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-53.html">Game Direct Link</a></td></tr>
<tr><td>6</td><td>73</td><td><a href="OTHL-PRE-ProTeamRoster.php#Bruins">Bruins</a></td><td>3</td><td><a href="OTHL-PRE-ProTeamRoster.php#Senators">Senators</a></td><td>1</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-73.html">Game Direct Link</a></td></tr>
<tr><td>7</td><td>88</td><td><a href="OTHL-PRE-ProTeamRoster.php#Sabres">Sabres</a></td><td>3</td><td><a href="OTHL-PRE-ProTeamRoster.php#Bruins">Bruins</a></td><td>2</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-88.html">Game Direct Link</a></td></tr>
<tr><td>8</td><td>108</td><td><a href="OTHL-PRE-ProTeamRoster.php#Canadiens">Canadiens</a></td><td>1</td><td><a href="OTHL-PRE-ProTeamRoster.php#Bruins">Bruins</a></td><td>4</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-108.html">Game Direct Link</a></td></tr>
<tr><td>10</td><td>128</td><td><a href="OTHL-PRE-ProTeamRoster.php#Panthers">Panthers</a></td><td>1</td><td><a href="OTHL-PRE-ProTeamRoster.php#Bruins">Bruins</a></td><td>3</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-128.html">Game Direct Link</a></td></tr>
<tr><td>11</td><td>136</td><td><a href="OTHL-PRE-ProTeamRoster.php#Bruins">Bruins</a></td><td>2</td><td><a href="OTHL-PRE-ProTeamRoster.php#MapleLeafs">Maple Leafs</a></td><td>1</td><td>W</td><td>*</td><td></td><td></td><td><a href="OTHL-PRE-136.html">Game Direct Link</a></td></tr>
<tr><td>12</td><td>154</td><td><a href="OTHL-PRE-ProTeamRoster.php#Bruins">Bruins</a></td><td>1</td><td><a href="OTHL-PRE-ProTeamRoster.php#Panthers">Panthers</a></td><td>2</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-154.html">Game Direct Link</a></td></tr>
<tr><td>13</td><td>163</td><td><a href="OTHL-PRE-ProTeamRoster.php#Bruins">Bruins</a></td><td>0</td><td><a href="OTHL-PRE-ProTeamRoster.php#Lightning">Lightning</a></td><td>4</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-163.html">Game Direct Link</a></td></tr>
<tr><td>15</td><td>179</td><td><a href="OTHL-PRE-ProTeamRoster.php#MapleLeafs">Maple Leafs</a></td><td>1</td><td><a href="OTHL-PRE-ProTeamRoster.php#Bruins">Bruins</a></td><td>4</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-179.html">Game Direct Link</a></td></tr>
<tr><td>17</td><td>204</td><td><a href="OTHL-PRE-ProTeamRoster.php#Lightning">Lightning</a></td><td>2</td><td><a href="OTHL-PRE-ProTeamRoster.php#Bruins">Bruins</a></td><td>3</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-204.html">Game Direct Link</a></td></tr>
<tr><td>18</td><td>218</td><td><a href="OTHL-PRE-ProTeamRoster.php#Bruins">Bruins</a></td><td>1</td><td><a href="OTHL-PRE-ProTeamRoster.php#Canadiens">Canadiens</a></td><td>5</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-218.html">Game Direct Link</a></td></tr>
</table></div>
<h1 class="TeamSchedulePro_MTL"><a id="Canadiens">Canadiens</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=16">Canadiens Page</a> ]
[ <a href="OTHL-PRE-ProTeamRoster.php#Canadiens">Pro Team Roster</a> ]
[ <a href="OTHL-PRE-ProTeamScoring.php#Canadiens">Pro Team Scoring</a> ]
[ <a href="OTHL-PRE-TeamFinance.php#Canadiens">Team Finance</a> ]
[ <a href="OTHL-PRE-ProTeamPlayersInfo.php#Canadiens">Pro Team PlayersInfo</a> ]
[ <a href="OTHL-PRE-ProTeamLines.php#Canadiens">Pro Team Lines</a> ]
[ <a href="OTHL-PRE-TeamProspects.php#Canadiens">Team Prospects</a> ]
[ <a href="OTHL-PRE-ProTeamSchedule.php#Canadiens">Pro Team Schedule</a> ]
[ <a href="OTHL-PRE-ProTeamStats.php#Canadiens">Pro Team Stats</a> ]
[ <a href="OTHL-PRE-ProTeamStatsVS.php#Canadiens">Pro Team Stats VS</a> ]
[ <a href="OTHL-PRE-TeamInjurySuspension.php#Canadiens">Team Injury Suspension</a> ]
[ <a href="OTHL-PRE-TeamHistory.php#Canadiens">Team History</a> ]
[ <a href="OTHL-PRE-TeamRecords.php#Canadiens">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Canadiens');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Canadiens" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW35">Day</th><th class="STHSW35">Game</th><th class="STHSW200">Visitor Team</th><th class="STHSW35">Score</th><th class="STHSW200">Home Team</th><th class="STHSW35">Score</th><th class="STHSW35">ST</th><th class="STHSW35">OT</th><th class="STHSW35">SO</th><th class="STHSW35">RI</th><th class="STHSW200">Link</th></tr></thead>
<tr><td>1</td><td>1</td><td><a href="OTHL-PRE-ProTeamRoster.php#Canadiens">Canadiens</a></td><td>4</td><td><a href="OTHL-PRE-ProTeamRoster.php#Senators">Senators</a></td><td>2</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-1.html">Game Direct Link</a></td></tr>
<tr><td>2</td><td>25</td><td><a href="OTHL-PRE-ProTeamRoster.php#Canadiens">Canadiens</a></td><td>2</td><td><a href="OTHL-PRE-ProTeamRoster.php#RedWings">Red Wings</a></td><td>3</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-25.html">Game Direct Link</a></td></tr>
<tr><td>3</td><td>32</td><td><a href="OTHL-PRE-ProTeamRoster.php#Panthers">Panthers</a></td><td>3</td><td><a href="OTHL-PRE-ProTeamRoster.php#Canadiens">Canadiens</a></td><td>2</td><td>L</td><td></td><td>*</td><td></td><td><a href="OTHL-PRE-32.html">Game Direct Link</a></td></tr>
<tr><td>5</td><td>51</td><td><a href="OTHL-PRE-ProTeamRoster.php#Senators">Senators</a></td><td>1</td><td><a href="OTHL-PRE-ProTeamRoster.php#Canadiens">Canadiens</a></td><td>2</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-51.html">Game Direct Link</a></td></tr>
<tr><td>6</td><td>74</td><td><a href="OTHL-PRE-ProTeamRoster.php#Lightning">Lightning</a></td><td>0</td><td><a href="OTHL-PRE-ProTeamRoster.php#Canadiens">Canadiens</a></td><td>3</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-74.html">Game Direct Link</a></td></tr>
<tr><td>7</td><td>92</td><td><a href="OTHL-PRE-ProTeamRoster.php#Canadiens">Canadiens</a></td><td>3</td><td><a href="OTHL-PRE-ProTeamRoster.php#Panthers">Panthers</a></td><td>1</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-92.html">Game Direct Link</a></td></tr>
<tr><td>8</td><td>108</td><td><a href="OTHL-PRE-ProTeamRoster.php#Canadiens">Canadiens</a></td><td>1</td><td><a href="OTHL-PRE-ProTeamRoster.php#Bruins">Bruins</a></td><td>4</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-108.html">Game Direct Link</a></td></tr>
<tr><td>9</td><td>113</td><td><a href="OTHL-PRE-ProTeamRoster.php#RedWings">Red Wings</a></td><td>1</td><td><a href="OTHL-PRE-ProTeamRoster.php#Canadiens">Canadiens</a></td><td>3</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-113.html">Game Direct Link</a></td></tr>
<tr><td>11</td><td>137</td><td><a href="OTHL-PRE-ProTeamRoster.php#Canadiens">Canadiens</a></td><td>1</td><td><a href="OTHL-PRE-ProTeamRoster.php#Lightning">Lightning</a></td><td>5</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-137.html">Game Direct Link</a></td></tr>
<tr><td>12</td><td>146</td><td><a href="OTHL-PRE-ProTeamRoster.php#Canadiens">Canadiens</a></td><td>3</td><td><a href="OTHL-PRE-ProTeamRoster.php#Sabres">Sabres</a></td><td>1</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-146.html">Game Direct Link</a></td></tr>
<tr><td>13</td><td>160</td><td><a href="OTHL-PRE-ProTeamRoster.php#MapleLeafs">Maple Leafs</a></td><td>1</td><td><a href="OTHL-PRE-ProTeamRoster.php#Canadiens">Canadiens</a></td><td>2</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-160.html">Game Direct Link</a></td></tr>
<tr><td>14</td><td>175</td><td><a href="OTHL-PRE-ProTeamRoster.php#Canadiens">Canadiens</a></td><td>3</td><td><a href="OTHL-PRE-ProTeamRoster.php#MapleLeafs">Maple Leafs</a></td><td>1</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-175.html">Game Direct Link</a></td></tr>
<tr><td>15</td><td>191</td><td><a href="OTHL-PRE-ProTeamRoster.php#Sabres">Sabres</a></td><td>1</td><td><a href="OTHL-PRE-ProTeamRoster.php#Canadiens">Canadiens</a></td><td>3</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-191.html">Game Direct Link</a></td></tr>
<tr><td>18</td><td>218</td><td><a href="OTHL-PRE-ProTeamRoster.php#Bruins">Bruins</a></td><td>1</td><td><a href="OTHL-PRE-ProTeamRoster.php#Canadiens">Canadiens</a></td><td>5</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-218.html">Game Direct Link</a></td></tr>
</table></div>
<h1 class="TeamSchedulePro_VAN"><a id="Canucks">Canucks</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=29">Canucks Page</a> ]
[ <a href="OTHL-PRE-ProTeamRoster.php#Canucks">Pro Team Roster</a> ]
[ <a href="OTHL-PRE-ProTeamScoring.php#Canucks">Pro Team Scoring</a> ]
[ <a href="OTHL-PRE-TeamFinance.php#Canucks">Team Finance</a> ]
[ <a href="OTHL-PRE-ProTeamPlayersInfo.php#Canucks">Pro Team PlayersInfo</a> ]
[ <a href="OTHL-PRE-ProTeamLines.php#Canucks">Pro Team Lines</a> ]
[ <a href="OTHL-PRE-TeamProspects.php#Canucks">Team Prospects</a> ]
[ <a href="OTHL-PRE-ProTeamSchedule.php#Canucks">Pro Team Schedule</a> ]
[ <a href="OTHL-PRE-ProTeamStats.php#Canucks">Pro Team Stats</a> ]
[ <a href="OTHL-PRE-ProTeamStatsVS.php#Canucks">Pro Team Stats VS</a> ]
[ <a href="OTHL-PRE-TeamInjurySuspension.php#Canucks">Team Injury Suspension</a> ]
[ <a href="OTHL-PRE-TeamHistory.php#Canucks">Team History</a> ]
[ <a href="OTHL-PRE-TeamRecords.php#Canucks">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Canucks');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Canucks" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW35">Day</th><th class="STHSW35">Game</th><th class="STHSW200">Visitor Team</th><th class="STHSW35">Score</th><th class="STHSW200">Home Team</th><th class="STHSW35">Score</th><th class="STHSW35">ST</th><th class="STHSW35">OT</th><th class="STHSW35">SO</th><th class="STHSW35">RI</th><th class="STHSW200">Link</th></tr></thead>
<tr><td>1</td><td>7</td><td><a href="OTHL-PRE-ProTeamRoster.php#Oilers">Oilers</a></td><td>5</td><td><a href="OTHL-PRE-ProTeamRoster.php#Canucks">Canucks</a></td><td>3</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-7.html">Game Direct Link</a></td></tr>
<tr><td>2</td><td>28</td><td><a href="OTHL-PRE-ProTeamRoster.php#Canucks">Canucks</a></td><td>2</td><td><a href="OTHL-PRE-ProTeamRoster.php#Kings">Kings</a></td><td>3</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-28.html">Game Direct Link</a></td></tr>
<tr><td>4</td><td>41</td><td><a href="OTHL-PRE-ProTeamRoster.php#Kraken">Kraken</a></td><td>3</td><td><a href="OTHL-PRE-ProTeamRoster.php#Canucks">Canucks</a></td><td>4</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-41.html">Game Direct Link</a></td></tr>
<tr><td>5</td><td>58</td><td><a href="OTHL-PRE-ProTeamRoster.php#Canucks">Canucks</a></td><td>1</td><td><a href="OTHL-PRE-ProTeamRoster.php#Oilers">Oilers</a></td><td>4</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-58.html">Game Direct Link</a></td></tr>
<tr><td>6</td><td>67</td><td><a href="OTHL-PRE-ProTeamRoster.php#Canucks">Canucks</a></td><td>1</td><td><a href="OTHL-PRE-ProTeamRoster.php#GoldenKnights">Golden Knights</a></td><td>3</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-67.html">Game Direct Link</a></td></tr>
<tr><td>7</td><td>86</td><td><a href="OTHL-PRE-ProTeamRoster.php#GoldenKnights">Golden Knights</a></td><td>1</td><td><a href="OTHL-PRE-ProTeamRoster.php#Canucks">Canucks</a></td><td>3</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-86.html">Game Direct Link</a></td></tr>
<tr><td>8</td><td>101</td><td><a href="OTHL-PRE-ProTeamRoster.php#Canucks">Canucks</a></td><td>3</td><td><a href="OTHL-PRE-ProTeamRoster.php#Flames">Flames</a></td><td>2</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-101.html">Game Direct Link</a></td></tr>
<tr><td>9</td><td>114</td><td><a href="OTHL-PRE-ProTeamRoster.php#Canucks">Canucks</a></td><td>3</td><td><a href="OTHL-PRE-ProTeamRoster.php#Sharks">Sharks</a></td><td>2</td><td>W</td><td></td><td>*</td><td></td><td><a href="OTHL-PRE-114.html">Game Direct Link</a></td></tr>
<tr><td>10</td><td>122</td><td><a href="OTHL-PRE-ProTeamRoster.php#Canucks">Canucks</a></td><td>2</td><td><a href="OTHL-PRE-ProTeamRoster.php#Kraken">Kraken</a></td><td>4</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-122.html">Game Direct Link</a></td></tr>
<tr><td>11</td><td>134</td><td><a href="OTHL-PRE-ProTeamRoster.php#Kings">Kings</a></td><td>0</td><td><a href="OTHL-PRE-ProTeamRoster.php#Canucks">Canucks</a></td><td>1</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-134.html">Game Direct Link</a></td></tr>
<tr><td>13</td><td>159</td><td><a href="OTHL-PRE-ProTeamRoster.php#Sharks">Sharks</a></td><td>1</td><td><a href="OTHL-PRE-ProTeamRoster.php#Canucks">Canucks</a></td><td>2</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-159.html">Game Direct Link</a></td></tr>
<tr><td>15</td><td>177</td><td><a href="OTHL-PRE-ProTeamRoster.php#Canucks">Canucks</a></td><td>1</td><td><a href="OTHL-PRE-ProTeamRoster.php#Ducks">Ducks</a></td><td>2</td><td>L</td><td>*</td><td></td><td></td><td><a href="OTHL-PRE-177.html">Game Direct Link</a></td></tr>
<tr><td>16</td><td>192</td><td><a href="OTHL-PRE-ProTeamRoster.php#Ducks">Ducks</a></td><td>2</td><td><a href="OTHL-PRE-ProTeamRoster.php#Canucks">Canucks</a></td><td>4</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-192.html">Game Direct Link</a></td></tr>
<tr><td>18</td><td>212</td><td><a href="OTHL-PRE-ProTeamRoster.php#Flames">Flames</a></td><td>3</td><td><a href="OTHL-PRE-ProTeamRoster.php#Canucks">Canucks</a></td><td>4</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-212.html">Game Direct Link</a></td></tr>
</table></div>
<h1 class="TeamSchedulePro_WSH"><a id="Capitals">Capitals</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=30">Capitals Page</a> ]
[ <a href="OTHL-PRE-ProTeamRoster.php#Capitals">Pro Team Roster</a> ]
[ <a href="OTHL-PRE-ProTeamScoring.php#Capitals">Pro Team Scoring</a> ]
[ <a href="OTHL-PRE-TeamFinance.php#Capitals">Team Finance</a> ]
[ <a href="OTHL-PRE-ProTeamPlayersInfo.php#Capitals">Pro Team PlayersInfo</a> ]
[ <a href="OTHL-PRE-ProTeamLines.php#Capitals">Pro Team Lines</a> ]
[ <a href="OTHL-PRE-TeamProspects.php#Capitals">Team Prospects</a> ]
[ <a href="OTHL-PRE-ProTeamSchedule.php#Capitals">Pro Team Schedule</a> ]
[ <a href="OTHL-PRE-ProTeamStats.php#Capitals">Pro Team Stats</a> ]
[ <a href="OTHL-PRE-ProTeamStatsVS.php#Capitals">Pro Team Stats VS</a> ]
[ <a href="OTHL-PRE-TeamInjurySuspension.php#Capitals">Team Injury Suspension</a> ]
[ <a href="OTHL-PRE-TeamHistory.php#Capitals">Team History</a> ]
[ <a href="OTHL-PRE-TeamRecords.php#Capitals">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Capitals');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Capitals" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW35">Day</th><th class="STHSW35">Game</th><th class="STHSW200">Visitor Team</th><th class="STHSW35">Score</th><th class="STHSW200">Home Team</th><th class="STHSW35">Score</th><th class="STHSW35">ST</th><th class="STHSW35">OT</th><th class="STHSW35">SO</th><th class="STHSW35">RI</th><th class="STHSW200">Link</th></tr></thead>
<tr><td>1</td><td>9</td><td><a href="OTHL-PRE-ProTeamRoster.php#Hurricanes">Hurricanes</a></td><td>5</td><td><a href="OTHL-PRE-ProTeamRoster.php#Capitals">Capitals</a></td><td>4</td><td>L</td><td>*</td><td></td><td></td><td><a href="OTHL-PRE-9.html">Game Direct Link</a></td></tr>
<tr><td>3</td><td>34</td><td><a href="OTHL-PRE-ProTeamRoster.php#Capitals">Capitals</a></td><td>0</td><td><a href="OTHL-PRE-ProTeamRoster.php#Rangers">Rangers</a></td><td>2</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-34.html">Game Direct Link</a></td></tr>
<tr><td>4</td><td>47</td><td><a href="OTHL-PRE-ProTeamRoster.php#Capitals">Capitals</a></td><td>1</td><td><a href="OTHL-PRE-ProTeamRoster.php#Islanders">Islanders</a></td><td>3</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-47.html">Game Direct Link</a></td></tr>
<tr><td>5</td><td>60</td><td><a href="OTHL-PRE-ProTeamRoster.php#Devils">Devils</a></td><td>0</td><td><a href="OTHL-PRE-ProTeamRoster.php#Capitals">Capitals</a></td><td>1</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-60.html">Game Direct Link</a></td></tr>
<tr><td>6</td><td>77</td><td><a href="OTHL-PRE-ProTeamRoster.php#Islanders">Islanders</a></td><td>7</td><td><a href="OTHL-PRE-ProTeamRoster.php#Capitals">Capitals</a></td><td>1</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-77.html">Game Direct Link</a></td></tr>
<tr><td>7</td><td>89</td><td><a href="OTHL-PRE-ProTeamRoster.php#Capitals">Capitals</a></td><td>1</td><td><a href="OTHL-PRE-ProTeamRoster.php#Penguins">Penguins</a></td><td>2</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-89.html">Game Direct Link</a></td></tr>
<tr><td>8</td><td>107</td><td><a href="OTHL-PRE-ProTeamRoster.php#Rangers">Rangers</a></td><td>3</td><td><a href="OTHL-PRE-ProTeamRoster.php#Capitals">Capitals</a></td><td>2</td><td>L</td><td>*</td><td></td><td></td><td><a href="OTHL-PRE-107.html">Game Direct Link</a></td></tr>
<tr><td>10</td><td>127</td><td><a href="OTHL-PRE-ProTeamRoster.php#Capitals">Capitals</a></td><td>2</td><td><a href="OTHL-PRE-ProTeamRoster.php#Devils">Devils</a></td><td>0</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-127.html">Game Direct Link</a></td></tr>
<tr><td>11</td><td>141</td><td><a href="OTHL-PRE-ProTeamRoster.php#Flyers">Flyers</a></td><td>3</td><td><a href="OTHL-PRE-ProTeamRoster.php#Capitals">Capitals</a></td><td>1</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-141.html">Game Direct Link</a></td></tr>
<tr><td>12</td><td>151</td><td><a href="OTHL-PRE-ProTeamRoster.php#Capitals">Capitals</a></td><td>3</td><td><a href="OTHL-PRE-ProTeamRoster.php#Hurricanes">Hurricanes</a></td><td>2</td><td>W</td><td>*</td><td></td><td></td><td><a href="OTHL-PRE-151.html">Game Direct Link</a></td></tr>
<tr><td>13</td><td>162</td><td><a href="OTHL-PRE-ProTeamRoster.php#Capitals">Capitals</a></td><td>4</td><td><a href="OTHL-PRE-ProTeamRoster.php#BlueJackets">Blue Jackets</a></td><td>3</td><td>W</td><td></td><td>*</td><td></td><td><a href="OTHL-PRE-162.html">Game Direct Link</a></td></tr>
<tr><td>15</td><td>187</td><td><a href="OTHL-PRE-ProTeamRoster.php#Penguins">Penguins</a></td><td>3</td><td><a href="OTHL-PRE-ProTeamRoster.php#Capitals">Capitals</a></td><td>2</td><td>L</td><td></td><td>*</td><td></td><td><a href="OTHL-PRE-187.html">Game Direct Link</a></td></tr>
<tr><td>16</td><td>201</td><td><a href="OTHL-PRE-ProTeamRoster.php#Capitals">Capitals</a></td><td>4</td><td><a href="OTHL-PRE-ProTeamRoster.php#Flyers">Flyers</a></td><td>1</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-201.html">Game Direct Link</a></td></tr>
<tr><td>18</td><td>210</td><td><a href="OTHL-PRE-ProTeamRoster.php#BlueJackets">Blue Jackets</a></td><td>2</td><td><a href="OTHL-PRE-ProTeamRoster.php#Capitals">Capitals</a></td><td>4</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-210.html">Game Direct Link</a></td></tr>
</table></div>
<h1 class="TeamSchedulePro_ARI"><a id="Coyotes">Coyotes</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=23">Coyotes Page</a> ]
[ <a href="OTHL-PRE-ProTeamRoster.php#Coyotes">Pro Team Roster</a> ]
[ <a href="OTHL-PRE-ProTeamScoring.php#Coyotes">Pro Team Scoring</a> ]
[ <a href="OTHL-PRE-TeamFinance.php#Coyotes">Team Finance</a> ]
[ <a href="OTHL-PRE-ProTeamPlayersInfo.php#Coyotes">Pro Team PlayersInfo</a> ]
[ <a href="OTHL-PRE-ProTeamLines.php#Coyotes">Pro Team Lines</a> ]
[ <a href="OTHL-PRE-TeamProspects.php#Coyotes">Team Prospects</a> ]
[ <a href="OTHL-PRE-ProTeamSchedule.php#Coyotes">Pro Team Schedule</a> ]
[ <a href="OTHL-PRE-ProTeamStats.php#Coyotes">Pro Team Stats</a> ]
[ <a href="OTHL-PRE-ProTeamStatsVS.php#Coyotes">Pro Team Stats VS</a> ]
[ <a href="OTHL-PRE-TeamInjurySuspension.php#Coyotes">Team Injury Suspension</a> ]
[ <a href="OTHL-PRE-TeamHistory.php#Coyotes">Team History</a> ]
[ <a href="OTHL-PRE-TeamRecords.php#Coyotes">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Coyotes');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Coyotes" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW35">Day</th><th class="STHSW35">Game</th><th class="STHSW200">Visitor Team</th><th class="STHSW35">Score</th><th class="STHSW200">Home Team</th><th class="STHSW35">Score</th><th class="STHSW35">ST</th><th class="STHSW35">OT</th><th class="STHSW35">SO</th><th class="STHSW35">RI</th><th class="STHSW200">Link</th></tr></thead>
<tr><td>1</td><td>3</td><td><a href="OTHL-PRE-ProTeamRoster.php#Coyotes">Coyotes</a></td><td>6</td><td><a href="OTHL-PRE-ProTeamRoster.php#Predators">Predators</a></td><td>5</td><td>W</td><td>*</td><td></td><td></td><td><a href="OTHL-PRE-3.html">Game Direct Link</a></td></tr>
<tr><td>2</td><td>19</td><td><a href="OTHL-PRE-ProTeamRoster.php#Jets">Jets</a></td><td>1</td><td><a href="OTHL-PRE-ProTeamRoster.php#Coyotes">Coyotes</a></td><td>2</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-19.html">Game Direct Link</a></td></tr>
<tr><td>4</td><td>39</td><td><a href="OTHL-PRE-ProTeamRoster.php#Stars">Stars</a></td><td>3</td><td><a href="OTHL-PRE-ProTeamRoster.php#Coyotes">Coyotes</a></td><td>2</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-39.html">Game Direct Link</a></td></tr>
<tr><td>6</td><td>65</td><td><a href="OTHL-PRE-ProTeamRoster.php#Blackhawks">Blackhawks</a></td><td>3</td><td><a href="OTHL-PRE-ProTeamRoster.php#Coyotes">Coyotes</a></td><td>1</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-65.html">Game Direct Link</a></td></tr>
<tr><td>7</td><td>83</td><td><a href="OTHL-PRE-ProTeamRoster.php#Coyotes">Coyotes</a></td><td>2</td><td><a href="OTHL-PRE-ProTeamRoster.php#Blues">Blues</a></td><td>1</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-83.html">Game Direct Link</a></td></tr>
<tr><td>8</td><td>96</td><td><a href="OTHL-PRE-ProTeamRoster.php#Coyotes">Coyotes</a></td><td>2</td><td><a href="OTHL-PRE-ProTeamRoster.php#Avalanche">Avalanche</a></td><td>1</td><td>W</td><td></td><td>*</td><td></td><td><a href="OTHL-PRE-96.html">Game Direct Link</a></td></tr>
<tr><td>9</td><td>110</td><td><a href="OTHL-PRE-ProTeamRoster.php#Coyotes">Coyotes</a></td><td>1</td><td><a href="OTHL-PRE-ProTeamRoster.php#Jets">Jets</a></td><td>4</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-110.html">Game Direct Link</a></td></tr>
<tr><td>10</td><td>123</td><td><a href="OTHL-PRE-ProTeamRoster.php#Blues">Blues</a></td><td>2</td><td><a href="OTHL-PRE-ProTeamRoster.php#Coyotes">Coyotes</a></td><td>1</td><td>L</td><td></td><td>*</td><td></td><td><a href="OTHL-PRE-123.html">Game Direct Link</a></td></tr>
<tr><td>11</td><td>144</td><td><a href="OTHL-PRE-ProTeamRoster.php#Predators">Predators</a></td><td>4</td><td><a href="OTHL-PRE-ProTeamRoster.php#Coyotes">Coyotes</a></td><td>5</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-144.html">Game Direct Link</a></td></tr>
<tr><td>13</td><td>158</td><td><a href="OTHL-PRE-ProTeamRoster.php#Coyotes">Coyotes</a></td><td>1</td><td><a href="OTHL-PRE-ProTeamRoster.php#Stars">Stars</a></td><td>3</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-158.html">Game Direct Link</a></td></tr>
<tr><td>14</td><td>170</td><td><a href="OTHL-PRE-ProTeamRoster.php#Avalanche">Avalanche</a></td><td>4</td><td><a href="OTHL-PRE-ProTeamRoster.php#Coyotes">Coyotes</a></td><td>3</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-170.html">Game Direct Link</a></td></tr>
<tr><td>15</td><td>184</td><td><a href="OTHL-PRE-ProTeamRoster.php#Coyotes">Coyotes</a></td><td>2</td><td><a href="OTHL-PRE-ProTeamRoster.php#Blackhawks">Blackhawks</a></td><td>1</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-184.html">Game Direct Link</a></td></tr>
<tr><td>16</td><td>198</td><td><a href="OTHL-PRE-ProTeamRoster.php#Coyotes">Coyotes</a></td><td>3</td><td><a href="OTHL-PRE-ProTeamRoster.php#Wild">Wild</a></td><td>2</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-198.html">Game Direct Link</a></td></tr>
<tr><td>18</td><td>221</td><td><a href="OTHL-PRE-ProTeamRoster.php#Wild">Wild</a></td><td>0</td><td><a href="OTHL-PRE-ProTeamRoster.php#Coyotes">Coyotes</a></td><td>3</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-221.html">Game Direct Link</a></td></tr>
</table></div>
<h1 class="TeamSchedulePro_NJD"><a id="Devils">Devils</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=18">Devils Page</a> ]
[ <a href="OTHL-PRE-ProTeamRoster.php#Devils">Pro Team Roster</a> ]
[ <a href="OTHL-PRE-ProTeamScoring.php#Devils">Pro Team Scoring</a> ]
[ <a href="OTHL-PRE-TeamFinance.php#Devils">Team Finance</a> ]
[ <a href="OTHL-PRE-ProTeamPlayersInfo.php#Devils">Pro Team PlayersInfo</a> ]
[ <a href="OTHL-PRE-ProTeamLines.php#Devils">Pro Team Lines</a> ]
[ <a href="OTHL-PRE-TeamProspects.php#Devils">Team Prospects</a> ]
[ <a href="OTHL-PRE-ProTeamSchedule.php#Devils">Pro Team Schedule</a> ]
[ <a href="OTHL-PRE-ProTeamStats.php#Devils">Pro Team Stats</a> ]
[ <a href="OTHL-PRE-ProTeamStatsVS.php#Devils">Pro Team Stats VS</a> ]
[ <a href="OTHL-PRE-TeamInjurySuspension.php#Devils">Team Injury Suspension</a> ]
[ <a href="OTHL-PRE-TeamHistory.php#Devils">Team History</a> ]
[ <a href="OTHL-PRE-TeamRecords.php#Devils">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Devils');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Devils" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW35">Day</th><th class="STHSW35">Game</th><th class="STHSW200">Visitor Team</th><th class="STHSW35">Score</th><th class="STHSW200">Home Team</th><th class="STHSW35">Score</th><th class="STHSW35">ST</th><th class="STHSW35">OT</th><th class="STHSW35">SO</th><th class="STHSW35">RI</th><th class="STHSW200">Link</th></tr></thead>
<tr><td>1</td><td>4</td><td><a href="OTHL-PRE-ProTeamRoster.php#Islanders">Islanders</a></td><td>4</td><td><a href="OTHL-PRE-ProTeamRoster.php#Devils">Devils</a></td><td>3</td><td>L</td><td></td><td>*</td><td></td><td><a href="OTHL-PRE-4.html">Game Direct Link</a></td></tr>
<tr><td>3</td><td>33</td><td><a href="OTHL-PRE-ProTeamRoster.php#Devils">Devils</a></td><td>1</td><td><a href="OTHL-PRE-ProTeamRoster.php#Hurricanes">Hurricanes</a></td><td>2</td><td>L</td><td></td><td>*</td><td></td><td><a href="OTHL-PRE-33.html">Game Direct Link</a></td></tr>
<tr><td>4</td><td>42</td><td><a href="OTHL-PRE-ProTeamRoster.php#Penguins">Penguins</a></td><td>0</td><td><a href="OTHL-PRE-ProTeamRoster.php#Devils">Devils</a></td><td>1</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-42.html">Game Direct Link</a></td></tr>
<tr><td>5</td><td>60</td><td><a href="OTHL-PRE-ProTeamRoster.php#Devils">Devils</a></td><td>0</td><td><a href="OTHL-PRE-ProTeamRoster.php#Capitals">Capitals</a></td><td>1</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-60.html">Game Direct Link</a></td></tr>
<tr><td>6</td><td>71</td><td><a href="OTHL-PRE-ProTeamRoster.php#Devils">Devils</a></td><td>1</td><td><a href="OTHL-PRE-ProTeamRoster.php#Rangers">Rangers</a></td><td>0</td><td>W</td><td></td><td>*</td><td></td><td><a href="OTHL-PRE-71.html">Game Direct Link</a></td></tr>
<tr><td>7</td><td>82</td><td><a href="OTHL-PRE-ProTeamRoster.php#Hurricanes">Hurricanes</a></td><td>1</td><td><a href="OTHL-PRE-ProTeamRoster.php#Devils">Devils</a></td><td>6</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-82.html">Game Direct Link</a></td></tr>
<tr><td>8</td><td>102</td><td><a href="OTHL-PRE-ProTeamRoster.php#Devils">Devils</a></td><td>2</td><td><a href="OTHL-PRE-ProTeamRoster.php#Penguins">Penguins</a></td><td>3</td><td>L</td><td>*</td><td></td><td></td><td><a href="OTHL-PRE-102.html">Game Direct Link</a></td></tr>
<tr><td>9</td><td>111</td><td><a href="OTHL-PRE-ProTeamRoster.php#Devils">Devils</a></td><td>4</td><td><a href="OTHL-PRE-ProTeamRoster.php#Flyers">Flyers</a></td><td>3</td><td>W</td><td>*</td><td></td><td></td><td><a href="OTHL-PRE-111.html">Game Direct Link</a></td></tr>
<tr><td>10</td><td>127</td><td><a href="OTHL-PRE-ProTeamRoster.php#Capitals">Capitals</a></td><td>2</td><td><a href="OTHL-PRE-ProTeamRoster.php#Devils">Devils</a></td><td>0</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-127.html">Game Direct Link</a></td></tr>
<tr><td>12</td><td>150</td><td><a href="OTHL-PRE-ProTeamRoster.php#Rangers">Rangers</a></td><td>3</td><td><a href="OTHL-PRE-ProTeamRoster.php#Devils">Devils</a></td><td>4</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-150.html">Game Direct Link</a></td></tr>
<tr><td>14</td><td>174</td><td><a href="OTHL-PRE-ProTeamRoster.php#Flyers">Flyers</a></td><td>2</td><td><a href="OTHL-PRE-ProTeamRoster.php#Devils">Devils</a></td><td>3</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-174.html">Game Direct Link</a></td></tr>
<tr><td>15</td><td>189</td><td><a href="OTHL-PRE-ProTeamRoster.php#Devils">Devils</a></td><td>0</td><td><a href="OTHL-PRE-ProTeamRoster.php#Islanders">Islanders</a></td><td>3</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-189.html">Game Direct Link</a></td></tr>
<tr><td>16</td><td>196</td><td><a href="OTHL-PRE-ProTeamRoster.php#Devils">Devils</a></td><td>3</td><td><a href="OTHL-PRE-ProTeamRoster.php#BlueJackets">Blue Jackets</a></td><td>5</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-196.html">Game Direct Link</a></td></tr>
<tr><td>19</td><td>224</td><td><a href="OTHL-PRE-ProTeamRoster.php#BlueJackets">Blue Jackets</a></td><td>1</td><td><a href="OTHL-PRE-ProTeamRoster.php#Devils">Devils</a></td><td>2</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-224.html">Game Direct Link</a></td></tr>
</table></div>
<h1 class="TeamSchedulePro_ANH"><a id="Ducks">Ducks</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=1">Ducks Page</a> ]
[ <a href="OTHL-PRE-ProTeamRoster.php#Ducks">Pro Team Roster</a> ]
[ <a href="OTHL-PRE-ProTeamScoring.php#Ducks">Pro Team Scoring</a> ]
[ <a href="OTHL-PRE-TeamFinance.php#Ducks">Team Finance</a> ]
[ <a href="OTHL-PRE-ProTeamPlayersInfo.php#Ducks">Pro Team PlayersInfo</a> ]
[ <a href="OTHL-PRE-ProTeamLines.php#Ducks">Pro Team Lines</a> ]
[ <a href="OTHL-PRE-TeamProspects.php#Ducks">Team Prospects</a> ]
[ <a href="OTHL-PRE-ProTeamSchedule.php#Ducks">Pro Team Schedule</a> ]
[ <a href="OTHL-PRE-ProTeamStats.php#Ducks">Pro Team Stats</a> ]
[ <a href="OTHL-PRE-ProTeamStatsVS.php#Ducks">Pro Team Stats VS</a> ]
[ <a href="OTHL-PRE-TeamInjurySuspension.php#Ducks">Team Injury Suspension</a> ]
[ <a href="OTHL-PRE-TeamHistory.php#Ducks">Team History</a> ]
[ <a href="OTHL-PRE-TeamRecords.php#Ducks">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Ducks');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Ducks" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW35">Day</th><th class="STHSW35">Game</th><th class="STHSW200">Visitor Team</th><th class="STHSW35">Score</th><th class="STHSW200">Home Team</th><th class="STHSW35">Score</th><th class="STHSW35">ST</th><th class="STHSW35">OT</th><th class="STHSW35">SO</th><th class="STHSW35">RI</th><th class="STHSW200">Link</th></tr></thead>
<tr><td>1</td><td>10</td><td><a href="OTHL-PRE-ProTeamRoster.php#Kings">Kings</a></td><td>3</td><td><a href="OTHL-PRE-ProTeamRoster.php#Ducks">Ducks</a></td><td>2</td><td>L</td><td>*</td><td></td><td></td><td><a href="OTHL-PRE-10.html">Game Direct Link</a></td></tr>
<tr><td>2</td><td>26</td><td><a href="OTHL-PRE-ProTeamRoster.php#Ducks">Ducks</a></td><td>2</td><td><a href="OTHL-PRE-ProTeamRoster.php#Sharks">Sharks</a></td><td>3</td><td>L</td><td>*</td><td></td><td></td><td><a href="OTHL-PRE-26.html">Game Direct Link</a></td></tr>
<tr><td>4</td><td>43</td><td><a href="OTHL-PRE-ProTeamRoster.php#Oilers">Oilers</a></td><td>2</td><td><a href="OTHL-PRE-ProTeamRoster.php#Ducks">Ducks</a></td><td>1</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-43.html">Game Direct Link</a></td></tr>
<tr><td>5</td><td>49</td><td><a href="OTHL-PRE-ProTeamRoster.php#Ducks">Ducks</a></td><td>4</td><td><a href="OTHL-PRE-ProTeamRoster.php#Flames">Flames</a></td><td>2</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-49.html">Game Direct Link</a></td></tr>
<tr><td>6</td><td>72</td><td><a href="OTHL-PRE-ProTeamRoster.php#Kraken">Kraken</a></td><td>3</td><td><a href="OTHL-PRE-ProTeamRoster.php#Ducks">Ducks</a></td><td>2</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-72.html">Game Direct Link</a></td></tr>
<tr><td>7</td><td>93</td><td><a href="OTHL-PRE-ProTeamRoster.php#Ducks">Ducks</a></td><td>3</td><td><a href="OTHL-PRE-ProTeamRoster.php#Oilers">Oilers</a></td><td>1</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-93.html">Game Direct Link</a></td></tr>
<tr><td>8</td><td>104</td><td><a href="OTHL-PRE-ProTeamRoster.php#Ducks">Ducks</a></td><td>0</td><td><a href="OTHL-PRE-ProTeamRoster.php#Kings">Kings</a></td><td>2</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-104.html">Game Direct Link</a></td></tr>
<tr><td>9</td><td>118</td><td><a href="OTHL-PRE-ProTeamRoster.php#Flames">Flames</a></td><td>1</td><td><a href="OTHL-PRE-ProTeamRoster.php#Ducks">Ducks</a></td><td>2</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-118.html">Game Direct Link</a></td></tr>
<tr><td>10</td><td>133</td><td><a href="OTHL-PRE-ProTeamRoster.php#Ducks">Ducks</a></td><td>0</td><td><a href="OTHL-PRE-ProTeamRoster.php#GoldenKnights">Golden Knights</a></td><td>1</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-133.html">Game Direct Link</a></td></tr>
<tr><td>11</td><td>143</td><td><a href="OTHL-PRE-ProTeamRoster.php#Ducks">Ducks</a></td><td>4</td><td><a href="OTHL-PRE-ProTeamRoster.php#Kraken">Kraken</a></td><td>3</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-143.html">Game Direct Link</a></td></tr>
<tr><td>13</td><td>157</td><td><a href="OTHL-PRE-ProTeamRoster.php#GoldenKnights">Golden Knights</a></td><td>3</td><td><a href="OTHL-PRE-ProTeamRoster.php#Ducks">Ducks</a></td><td>2</td><td>L</td><td>*</td><td></td><td></td><td><a href="OTHL-PRE-157.html">Game Direct Link</a></td></tr>
<tr><td>15</td><td>177</td><td><a href="OTHL-PRE-ProTeamRoster.php#Canucks">Canucks</a></td><td>1</td><td><a href="OTHL-PRE-ProTeamRoster.php#Ducks">Ducks</a></td><td>2</td><td>W</td><td>*</td><td></td><td></td><td><a href="OTHL-PRE-177.html">Game Direct Link</a></td></tr>
<tr><td>16</td><td>192</td><td><a href="OTHL-PRE-ProTeamRoster.php#Ducks">Ducks</a></td><td>2</td><td><a href="OTHL-PRE-ProTeamRoster.php#Canucks">Canucks</a></td><td>4</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-192.html">Game Direct Link</a></td></tr>
<tr><td>19</td><td>222</td><td><a href="OTHL-PRE-ProTeamRoster.php#Sharks">Sharks</a></td><td>5</td><td><a href="OTHL-PRE-ProTeamRoster.php#Ducks">Ducks</a></td><td>0</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-222.html">Game Direct Link</a></td></tr>
</table></div>
<h1 class="TeamSchedulePro_CGY"><a id="Flames">Flames</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=5">Flames Page</a> ]
[ <a href="OTHL-PRE-ProTeamRoster.php#Flames">Pro Team Roster</a> ]
[ <a href="OTHL-PRE-ProTeamScoring.php#Flames">Pro Team Scoring</a> ]
[ <a href="OTHL-PRE-TeamFinance.php#Flames">Team Finance</a> ]
[ <a href="OTHL-PRE-ProTeamPlayersInfo.php#Flames">Pro Team PlayersInfo</a> ]
[ <a href="OTHL-PRE-ProTeamLines.php#Flames">Pro Team Lines</a> ]
[ <a href="OTHL-PRE-TeamProspects.php#Flames">Team Prospects</a> ]
[ <a href="OTHL-PRE-ProTeamSchedule.php#Flames">Pro Team Schedule</a> ]
[ <a href="OTHL-PRE-ProTeamStats.php#Flames">Pro Team Stats</a> ]
[ <a href="OTHL-PRE-ProTeamStatsVS.php#Flames">Pro Team Stats VS</a> ]
[ <a href="OTHL-PRE-TeamInjurySuspension.php#Flames">Team Injury Suspension</a> ]
[ <a href="OTHL-PRE-TeamHistory.php#Flames">Team History</a> ]
[ <a href="OTHL-PRE-TeamRecords.php#Flames">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Flames');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Flames" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW35">Day</th><th class="STHSW35">Game</th><th class="STHSW200">Visitor Team</th><th class="STHSW35">Score</th><th class="STHSW200">Home Team</th><th class="STHSW35">Score</th><th class="STHSW35">ST</th><th class="STHSW35">OT</th><th class="STHSW35">SO</th><th class="STHSW35">RI</th><th class="STHSW200">Link</th></tr></thead>
<tr><td>2</td><td>16</td><td><a href="OTHL-PRE-ProTeamRoster.php#GoldenKnights">Golden Knights</a></td><td>5</td><td><a href="OTHL-PRE-ProTeamRoster.php#Flames">Flames</a></td><td>3</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-16.html">Game Direct Link</a></td></tr>
<tr><td>3</td><td>31</td><td><a href="OTHL-PRE-ProTeamRoster.php#Flames">Flames</a></td><td>1</td><td><a href="OTHL-PRE-ProTeamRoster.php#GoldenKnights">Golden Knights</a></td><td>0</td><td>W</td><td>*</td><td></td><td></td><td><a href="OTHL-PRE-31.html">Game Direct Link</a></td></tr>
<tr><td>5</td><td>49</td><td><a href="OTHL-PRE-ProTeamRoster.php#Ducks">Ducks</a></td><td>4</td><td><a href="OTHL-PRE-ProTeamRoster.php#Flames">Flames</a></td><td>2</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-49.html">Game Direct Link</a></td></tr>
<tr><td>6</td><td>63</td><td><a href="OTHL-PRE-ProTeamRoster.php#Flames">Flames</a></td><td>4</td><td><a href="OTHL-PRE-ProTeamRoster.php#Sharks">Sharks</a></td><td>0</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-63.html">Game Direct Link</a></td></tr>
<tr><td>7</td><td>80</td><td><a href="OTHL-PRE-ProTeamRoster.php#Sharks">Sharks</a></td><td>2</td><td><a href="OTHL-PRE-ProTeamRoster.php#Flames">Flames</a></td><td>4</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-80.html">Game Direct Link</a></td></tr>
<tr><td>8</td><td>101</td><td><a href="OTHL-PRE-ProTeamRoster.php#Canucks">Canucks</a></td><td>3</td><td><a href="OTHL-PRE-ProTeamRoster.php#Flames">Flames</a></td><td>2</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-101.html">Game Direct Link</a></td></tr>
<tr><td>9</td><td>118</td><td><a href="OTHL-PRE-ProTeamRoster.php#Flames">Flames</a></td><td>1</td><td><a href="OTHL-PRE-ProTeamRoster.php#Ducks">Ducks</a></td><td>2</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-118.html">Game Direct Link</a></td></tr>
<tr><td>10</td><td>129</td><td><a href="OTHL-PRE-ProTeamRoster.php#Flames">Flames</a></td><td>1</td><td><a href="OTHL-PRE-ProTeamRoster.php#Oilers">Oilers</a></td><td>4</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-129.html">Game Direct Link</a></td></tr>
<tr><td>12</td><td>145</td><td><a href="OTHL-PRE-ProTeamRoster.php#Kraken">Kraken</a></td><td>0</td><td><a href="OTHL-PRE-ProTeamRoster.php#Flames">Flames</a></td><td>3</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-145.html">Game Direct Link</a></td></tr>
<tr><td>13</td><td>164</td><td><a href="OTHL-PRE-ProTeamRoster.php#Oilers">Oilers</a></td><td>1</td><td><a href="OTHL-PRE-ProTeamRoster.php#Flames">Flames</a></td><td>2</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-164.html">Game Direct Link</a></td></tr>
<tr><td>14</td><td>172</td><td><a href="OTHL-PRE-ProTeamRoster.php#Flames">Flames</a></td><td>3</td><td><a href="OTHL-PRE-ProTeamRoster.php#Kings">Kings</a></td><td>2</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-172.html">Game Direct Link</a></td></tr>
<tr><td>15</td><td>188</td><td><a href="OTHL-PRE-ProTeamRoster.php#Flames">Flames</a></td><td>0</td><td><a href="OTHL-PRE-ProTeamRoster.php#Kraken">Kraken</a></td><td>2</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-188.html">Game Direct Link</a></td></tr>
<tr><td>17</td><td>205</td><td><a href="OTHL-PRE-ProTeamRoster.php#Kings">Kings</a></td><td>4</td><td><a href="OTHL-PRE-ProTeamRoster.php#Flames">Flames</a></td><td>3</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-205.html">Game Direct Link</a></td></tr>
<tr><td>18</td><td>212</td><td><a href="OTHL-PRE-ProTeamRoster.php#Flames">Flames</a></td><td>3</td><td><a href="OTHL-PRE-ProTeamRoster.php#Canucks">Canucks</a></td><td>4</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-212.html">Game Direct Link</a></td></tr>
</table></div>
<h1 class="TeamSchedulePro_PHL"><a id="Flyers">Flyers</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=22">Flyers Page</a> ]
[ <a href="OTHL-PRE-ProTeamRoster.php#Flyers">Pro Team Roster</a> ]
[ <a href="OTHL-PRE-ProTeamScoring.php#Flyers">Pro Team Scoring</a> ]
[ <a href="OTHL-PRE-TeamFinance.php#Flyers">Team Finance</a> ]
[ <a href="OTHL-PRE-ProTeamPlayersInfo.php#Flyers">Pro Team PlayersInfo</a> ]
[ <a href="OTHL-PRE-ProTeamLines.php#Flyers">Pro Team Lines</a> ]
[ <a href="OTHL-PRE-TeamProspects.php#Flyers">Team Prospects</a> ]
[ <a href="OTHL-PRE-ProTeamSchedule.php#Flyers">Pro Team Schedule</a> ]
[ <a href="OTHL-PRE-ProTeamStats.php#Flyers">Pro Team Stats</a> ]
[ <a href="OTHL-PRE-ProTeamStatsVS.php#Flyers">Pro Team Stats VS</a> ]
[ <a href="OTHL-PRE-TeamInjurySuspension.php#Flyers">Team Injury Suspension</a> ]
[ <a href="OTHL-PRE-TeamHistory.php#Flyers">Team History</a> ]
[ <a href="OTHL-PRE-TeamRecords.php#Flyers">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Flyers');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Flyers" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW35">Day</th><th class="STHSW35">Game</th><th class="STHSW200">Visitor Team</th><th class="STHSW35">Score</th><th class="STHSW200">Home Team</th><th class="STHSW35">Score</th><th class="STHSW35">ST</th><th class="STHSW35">OT</th><th class="STHSW35">SO</th><th class="STHSW35">RI</th><th class="STHSW200">Link</th></tr></thead>
<tr><td>1</td><td>5</td><td><a href="OTHL-PRE-ProTeamRoster.php#Flyers">Flyers</a></td><td>5</td><td><a href="OTHL-PRE-ProTeamRoster.php#Penguins">Penguins</a></td><td>2</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-5.html">Game Direct Link</a></td></tr>
<tr><td>2</td><td>23</td><td><a href="OTHL-PRE-ProTeamRoster.php#Rangers">Rangers</a></td><td>3</td><td><a href="OTHL-PRE-ProTeamRoster.php#Flyers">Flyers</a></td><td>2</td><td>L</td><td>*</td><td></td><td></td><td><a href="OTHL-PRE-23.html">Game Direct Link</a></td></tr>
<tr><td>4</td><td>38</td><td><a href="OTHL-PRE-ProTeamRoster.php#BlueJackets">Blue Jackets</a></td><td>1</td><td><a href="OTHL-PRE-ProTeamRoster.php#Flyers">Flyers</a></td><td>2</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-38.html">Game Direct Link</a></td></tr>
<tr><td>6</td><td>66</td><td><a href="OTHL-PRE-ProTeamRoster.php#Penguins">Penguins</a></td><td>3</td><td><a href="OTHL-PRE-ProTeamRoster.php#Flyers">Flyers</a></td><td>4</td><td>W</td><td></td><td>*</td><td></td><td><a href="OTHL-PRE-66.html">Game Direct Link</a></td></tr>
<tr><td>7</td><td>79</td><td><a href="OTHL-PRE-ProTeamRoster.php#Flyers">Flyers</a></td><td>6</td><td><a href="OTHL-PRE-ProTeamRoster.php#BlueJackets">Blue Jackets</a></td><td>5</td><td>W</td><td></td><td>*</td><td></td><td><a href="OTHL-PRE-79.html">Game Direct Link</a></td></tr>
<tr><td>8</td><td>95</td><td><a href="OTHL-PRE-ProTeamRoster.php#Flyers">Flyers</a></td><td>3</td><td><a href="OTHL-PRE-ProTeamRoster.php#Hurricanes">Hurricanes</a></td><td>2</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-95.html">Game Direct Link</a></td></tr>
<tr><td>9</td><td>111</td><td><a href="OTHL-PRE-ProTeamRoster.php#Devils">Devils</a></td><td>4</td><td><a href="OTHL-PRE-ProTeamRoster.php#Flyers">Flyers</a></td><td>3</td><td>L</td><td>*</td><td></td><td></td><td><a href="OTHL-PRE-111.html">Game Direct Link</a></td></tr>
<tr><td>10</td><td>131</td><td><a href="OTHL-PRE-ProTeamRoster.php#Islanders">Islanders</a></td><td>4</td><td><a href="OTHL-PRE-ProTeamRoster.php#Flyers">Flyers</a></td><td>6</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-131.html">Game Direct Link</a></td></tr>
<tr><td>11</td><td>141</td><td><a href="OTHL-PRE-ProTeamRoster.php#Flyers">Flyers</a></td><td>3</td><td><a href="OTHL-PRE-ProTeamRoster.php#Capitals">Capitals</a></td><td>1</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-141.html">Game Direct Link</a></td></tr>
<tr><td>13</td><td>156</td><td><a href="OTHL-PRE-ProTeamRoster.php#Flyers">Flyers</a></td><td>3</td><td><a href="OTHL-PRE-ProTeamRoster.php#Rangers">Rangers</a></td><td>4</td><td>L</td><td></td><td>*</td><td></td><td><a href="OTHL-PRE-156.html">Game Direct Link</a></td></tr>
<tr><td>14</td><td>174</td><td><a href="OTHL-PRE-ProTeamRoster.php#Flyers">Flyers</a></td><td>2</td><td><a href="OTHL-PRE-ProTeamRoster.php#Devils">Devils</a></td><td>3</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-174.html">Game Direct Link</a></td></tr>
<tr><td>15</td><td>183</td><td><a href="OTHL-PRE-ProTeamRoster.php#Hurricanes">Hurricanes</a></td><td>1</td><td><a href="OTHL-PRE-ProTeamRoster.php#Flyers">Flyers</a></td><td>2</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-183.html">Game Direct Link</a></td></tr>
<tr><td>16</td><td>201</td><td><a href="OTHL-PRE-ProTeamRoster.php#Capitals">Capitals</a></td><td>4</td><td><a href="OTHL-PRE-ProTeamRoster.php#Flyers">Flyers</a></td><td>1</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-201.html">Game Direct Link</a></td></tr>
<tr><td>17</td><td>209</td><td><a href="OTHL-PRE-ProTeamRoster.php#Flyers">Flyers</a></td><td>3</td><td><a href="OTHL-PRE-ProTeamRoster.php#Islanders">Islanders</a></td><td>6</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-209.html">Game Direct Link</a></td></tr>
</table></div>
<h1 class="TeamSchedulePro_VGK"><a id="GoldenKnights">Golden Knights</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=31">Golden Knights Page</a> ]
[ <a href="OTHL-PRE-ProTeamRoster.php#GoldenKnights">Pro Team Roster</a> ]
[ <a href="OTHL-PRE-ProTeamScoring.php#GoldenKnights">Pro Team Scoring</a> ]
[ <a href="OTHL-PRE-TeamFinance.php#GoldenKnights">Team Finance</a> ]
[ <a href="OTHL-PRE-ProTeamPlayersInfo.php#GoldenKnights">Pro Team PlayersInfo</a> ]
[ <a href="OTHL-PRE-ProTeamLines.php#GoldenKnights">Pro Team Lines</a> ]
[ <a href="OTHL-PRE-TeamProspects.php#GoldenKnights">Team Prospects</a> ]
[ <a href="OTHL-PRE-ProTeamSchedule.php#GoldenKnights">Pro Team Schedule</a> ]
[ <a href="OTHL-PRE-ProTeamStats.php#GoldenKnights">Pro Team Stats</a> ]
[ <a href="OTHL-PRE-ProTeamStatsVS.php#GoldenKnights">Pro Team Stats VS</a> ]
[ <a href="OTHL-PRE-TeamInjurySuspension.php#GoldenKnights">Team Injury Suspension</a> ]
[ <a href="OTHL-PRE-TeamHistory.php#GoldenKnights">Team History</a> ]
[ <a href="OTHL-PRE-TeamRecords.php#GoldenKnights">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_GoldenKnights');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_GoldenKnights" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW35">Day</th><th class="STHSW35">Game</th><th class="STHSW200">Visitor Team</th><th class="STHSW35">Score</th><th class="STHSW200">Home Team</th><th class="STHSW35">Score</th><th class="STHSW35">ST</th><th class="STHSW35">OT</th><th class="STHSW35">SO</th><th class="STHSW35">RI</th><th class="STHSW200">Link</th></tr></thead>
<tr><td>2</td><td>16</td><td><a href="OTHL-PRE-ProTeamRoster.php#GoldenKnights">Golden Knights</a></td><td>5</td><td><a href="OTHL-PRE-ProTeamRoster.php#Flames">Flames</a></td><td>3</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-16.html">Game Direct Link</a></td></tr>
<tr><td>3</td><td>31</td><td><a href="OTHL-PRE-ProTeamRoster.php#Flames">Flames</a></td><td>1</td><td><a href="OTHL-PRE-ProTeamRoster.php#GoldenKnights">Golden Knights</a></td><td>0</td><td>L</td><td>*</td><td></td><td></td><td><a href="OTHL-PRE-31.html">Game Direct Link</a></td></tr>
<tr><td>5</td><td>48</td><td><a href="OTHL-PRE-ProTeamRoster.php#Sharks">Sharks</a></td><td>2</td><td><a href="OTHL-PRE-ProTeamRoster.php#GoldenKnights">Golden Knights</a></td><td>3</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-48.html">Game Direct Link</a></td></tr>
<tr><td>6</td><td>67</td><td><a href="OTHL-PRE-ProTeamRoster.php#Canucks">Canucks</a></td><td>1</td><td><a href="OTHL-PRE-ProTeamRoster.php#GoldenKnights">Golden Knights</a></td><td>3</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-67.html">Game Direct Link</a></td></tr>
<tr><td>7</td><td>86</td><td><a href="OTHL-PRE-ProTeamRoster.php#GoldenKnights">Golden Knights</a></td><td>1</td><td><a href="OTHL-PRE-ProTeamRoster.php#Canucks">Canucks</a></td><td>3</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-86.html">Game Direct Link</a></td></tr>
<tr><td>8</td><td>97</td><td><a href="OTHL-PRE-ProTeamRoster.php#GoldenKnights">Golden Knights</a></td><td>2</td><td><a href="OTHL-PRE-ProTeamRoster.php#Sharks">Sharks</a></td><td>1</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-97.html">Game Direct Link</a></td></tr>
<tr><td>9</td><td>112</td><td><a href="OTHL-PRE-ProTeamRoster.php#Kings">Kings</a></td><td>3</td><td><a href="OTHL-PRE-ProTeamRoster.php#GoldenKnights">Golden Knights</a></td><td>2</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-112.html">Game Direct Link</a></td></tr>
<tr><td>10</td><td>133</td><td><a href="OTHL-PRE-ProTeamRoster.php#Ducks">Ducks</a></td><td>0</td><td><a href="OTHL-PRE-ProTeamRoster.php#GoldenKnights">Golden Knights</a></td><td>1</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-133.html">Game Direct Link</a></td></tr>
<tr><td>13</td><td>157</td><td><a href="OTHL-PRE-ProTeamRoster.php#GoldenKnights">Golden Knights</a></td><td>3</td><td><a href="OTHL-PRE-ProTeamRoster.php#Ducks">Ducks</a></td><td>2</td><td>W</td><td>*</td><td></td><td></td><td><a href="OTHL-PRE-157.html">Game Direct Link</a></td></tr>
<tr><td>14</td><td>169</td><td><a href="OTHL-PRE-ProTeamRoster.php#Kraken">Kraken</a></td><td>2</td><td><a href="OTHL-PRE-ProTeamRoster.php#GoldenKnights">Golden Knights</a></td><td>3</td><td>W</td><td></td><td>*</td><td></td><td><a href="OTHL-PRE-169.html">Game Direct Link</a></td></tr>
<tr><td>15</td><td>178</td><td><a href="OTHL-PRE-ProTeamRoster.php#GoldenKnights">Golden Knights</a></td><td>2</td><td><a href="OTHL-PRE-ProTeamRoster.php#Oilers">Oilers</a></td><td>5</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-178.html">Game Direct Link</a></td></tr>
<tr><td>16</td><td>197</td><td><a href="OTHL-PRE-ProTeamRoster.php#Oilers">Oilers</a></td><td>3</td><td><a href="OTHL-PRE-ProTeamRoster.php#GoldenKnights">Golden Knights</a></td><td>1</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-197.html">Game Direct Link</a></td></tr>
<tr><td>18</td><td>213</td><td><a href="OTHL-PRE-ProTeamRoster.php#GoldenKnights">Golden Knights</a></td><td>5</td><td><a href="OTHL-PRE-ProTeamRoster.php#Kraken">Kraken</a></td><td>3</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-213.html">Game Direct Link</a></td></tr>
<tr><td>19</td><td>223</td><td><a href="OTHL-PRE-ProTeamRoster.php#GoldenKnights">Golden Knights</a></td><td>4</td><td><a href="OTHL-PRE-ProTeamRoster.php#Kings">Kings</a></td><td>3</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-223.html">Game Direct Link</a></td></tr>
</table></div>
<h1 class="TeamSchedulePro_CAR"><a id="Hurricanes">Hurricanes</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=6">Hurricanes Page</a> ]
[ <a href="OTHL-PRE-ProTeamRoster.php#Hurricanes">Pro Team Roster</a> ]
[ <a href="OTHL-PRE-ProTeamScoring.php#Hurricanes">Pro Team Scoring</a> ]
[ <a href="OTHL-PRE-TeamFinance.php#Hurricanes">Team Finance</a> ]
[ <a href="OTHL-PRE-ProTeamPlayersInfo.php#Hurricanes">Pro Team PlayersInfo</a> ]
[ <a href="OTHL-PRE-ProTeamLines.php#Hurricanes">Pro Team Lines</a> ]
[ <a href="OTHL-PRE-TeamProspects.php#Hurricanes">Team Prospects</a> ]
[ <a href="OTHL-PRE-ProTeamSchedule.php#Hurricanes">Pro Team Schedule</a> ]
[ <a href="OTHL-PRE-ProTeamStats.php#Hurricanes">Pro Team Stats</a> ]
[ <a href="OTHL-PRE-ProTeamStatsVS.php#Hurricanes">Pro Team Stats VS</a> ]
[ <a href="OTHL-PRE-TeamInjurySuspension.php#Hurricanes">Team Injury Suspension</a> ]
[ <a href="OTHL-PRE-TeamHistory.php#Hurricanes">Team History</a> ]
[ <a href="OTHL-PRE-TeamRecords.php#Hurricanes">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Hurricanes');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Hurricanes" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW35">Day</th><th class="STHSW35">Game</th><th class="STHSW200">Visitor Team</th><th class="STHSW35">Score</th><th class="STHSW200">Home Team</th><th class="STHSW35">Score</th><th class="STHSW35">ST</th><th class="STHSW35">OT</th><th class="STHSW35">SO</th><th class="STHSW35">RI</th><th class="STHSW200">Link</th></tr></thead>
<tr><td>1</td><td>9</td><td><a href="OTHL-PRE-ProTeamRoster.php#Hurricanes">Hurricanes</a></td><td>5</td><td><a href="OTHL-PRE-ProTeamRoster.php#Capitals">Capitals</a></td><td>4</td><td>W</td><td>*</td><td></td><td></td><td><a href="OTHL-PRE-9.html">Game Direct Link</a></td></tr>
<tr><td>2</td><td>21</td><td><a href="OTHL-PRE-ProTeamRoster.php#Hurricanes">Hurricanes</a></td><td>2</td><td><a href="OTHL-PRE-ProTeamRoster.php#Islanders">Islanders</a></td><td>3</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-21.html">Game Direct Link</a></td></tr>
<tr><td>3</td><td>33</td><td><a href="OTHL-PRE-ProTeamRoster.php#Devils">Devils</a></td><td>1</td><td><a href="OTHL-PRE-ProTeamRoster.php#Hurricanes">Hurricanes</a></td><td>2</td><td>W</td><td></td><td>*</td><td></td><td><a href="OTHL-PRE-33.html">Game Direct Link</a></td></tr>
<tr><td>5</td><td>50</td><td><a href="OTHL-PRE-ProTeamRoster.php#Hurricanes">Hurricanes</a></td><td>4</td><td><a href="OTHL-PRE-ProTeamRoster.php#Penguins">Penguins</a></td><td>0</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-50.html">Game Direct Link</a></td></tr>
<tr><td>6</td><td>64</td><td><a href="OTHL-PRE-ProTeamRoster.php#BlueJackets">Blue Jackets</a></td><td>3</td><td><a href="OTHL-PRE-ProTeamRoster.php#Hurricanes">Hurricanes</a></td><td>4</td><td>W</td><td></td><td>*</td><td></td><td><a href="OTHL-PRE-64.html">Game Direct Link</a></td></tr>
<tr><td>7</td><td>82</td><td><a href="OTHL-PRE-ProTeamRoster.php#Hurricanes">Hurricanes</a></td><td>1</td><td><a href="OTHL-PRE-ProTeamRoster.php#Devils">Devils</a></td><td>6</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-82.html">Game Direct Link</a></td></tr>
<tr><td>8</td><td>95</td><td><a href="OTHL-PRE-ProTeamRoster.php#Flyers">Flyers</a></td><td>3</td><td><a href="OTHL-PRE-ProTeamRoster.php#Hurricanes">Hurricanes</a></td><td>2</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-95.html">Game Direct Link</a></td></tr>
<tr><td>9</td><td>115</td><td><a href="OTHL-PRE-ProTeamRoster.php#Rangers">Rangers</a></td><td>1</td><td><a href="OTHL-PRE-ProTeamRoster.php#Hurricanes">Hurricanes</a></td><td>0</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-115.html">Game Direct Link</a></td></tr>
<tr><td>10</td><td>130</td><td><a href="OTHL-PRE-ProTeamRoster.php#Hurricanes">Hurricanes</a></td><td>1</td><td><a href="OTHL-PRE-ProTeamRoster.php#BlueJackets">Blue Jackets</a></td><td>3</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-130.html">Game Direct Link</a></td></tr>
<tr><td>12</td><td>151</td><td><a href="OTHL-PRE-ProTeamRoster.php#Capitals">Capitals</a></td><td>3</td><td><a href="OTHL-PRE-ProTeamRoster.php#Hurricanes">Hurricanes</a></td><td>2</td><td>L</td><td>*</td><td></td><td></td><td><a href="OTHL-PRE-151.html">Game Direct Link</a></td></tr>
<tr><td>13</td><td>165</td><td><a href="OTHL-PRE-ProTeamRoster.php#Islanders">Islanders</a></td><td>3</td><td><a href="OTHL-PRE-ProTeamRoster.php#Hurricanes">Hurricanes</a></td><td>2</td><td>L</td><td>*</td><td></td><td></td><td><a href="OTHL-PRE-165.html">Game Direct Link</a></td></tr>
<tr><td>15</td><td>183</td><td><a href="OTHL-PRE-ProTeamRoster.php#Hurricanes">Hurricanes</a></td><td>1</td><td><a href="OTHL-PRE-ProTeamRoster.php#Flyers">Flyers</a></td><td>2</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-183.html">Game Direct Link</a></td></tr>
<tr><td>17</td><td>206</td><td><a href="OTHL-PRE-ProTeamRoster.php#Penguins">Penguins</a></td><td>1</td><td><a href="OTHL-PRE-ProTeamRoster.php#Hurricanes">Hurricanes</a></td><td>5</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-206.html">Game Direct Link</a></td></tr>
<tr><td>18</td><td>216</td><td><a href="OTHL-PRE-ProTeamRoster.php#Hurricanes">Hurricanes</a></td><td>5</td><td><a href="OTHL-PRE-ProTeamRoster.php#Rangers">Rangers</a></td><td>1</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-216.html">Game Direct Link</a></td></tr>
</table></div>
<h1 class="TeamSchedulePro_NYI"><a id="Islanders">Islanders</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=19">Islanders Page</a> ]
[ <a href="OTHL-PRE-ProTeamRoster.php#Islanders">Pro Team Roster</a> ]
[ <a href="OTHL-PRE-ProTeamScoring.php#Islanders">Pro Team Scoring</a> ]
[ <a href="OTHL-PRE-TeamFinance.php#Islanders">Team Finance</a> ]
[ <a href="OTHL-PRE-ProTeamPlayersInfo.php#Islanders">Pro Team PlayersInfo</a> ]
[ <a href="OTHL-PRE-ProTeamLines.php#Islanders">Pro Team Lines</a> ]
[ <a href="OTHL-PRE-TeamProspects.php#Islanders">Team Prospects</a> ]
[ <a href="OTHL-PRE-ProTeamSchedule.php#Islanders">Pro Team Schedule</a> ]
[ <a href="OTHL-PRE-ProTeamStats.php#Islanders">Pro Team Stats</a> ]
[ <a href="OTHL-PRE-ProTeamStatsVS.php#Islanders">Pro Team Stats VS</a> ]
[ <a href="OTHL-PRE-TeamInjurySuspension.php#Islanders">Team Injury Suspension</a> ]
[ <a href="OTHL-PRE-TeamHistory.php#Islanders">Team History</a> ]
[ <a href="OTHL-PRE-TeamRecords.php#Islanders">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Islanders');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Islanders" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW35">Day</th><th class="STHSW35">Game</th><th class="STHSW200">Visitor Team</th><th class="STHSW35">Score</th><th class="STHSW200">Home Team</th><th class="STHSW35">Score</th><th class="STHSW35">ST</th><th class="STHSW35">OT</th><th class="STHSW35">SO</th><th class="STHSW35">RI</th><th class="STHSW200">Link</th></tr></thead>
<tr><td>1</td><td>4</td><td><a href="OTHL-PRE-ProTeamRoster.php#Islanders">Islanders</a></td><td>4</td><td><a href="OTHL-PRE-ProTeamRoster.php#Devils">Devils</a></td><td>3</td><td>W</td><td></td><td>*</td><td></td><td><a href="OTHL-PRE-4.html">Game Direct Link</a></td></tr>
<tr><td>2</td><td>21</td><td><a href="OTHL-PRE-ProTeamRoster.php#Hurricanes">Hurricanes</a></td><td>2</td><td><a href="OTHL-PRE-ProTeamRoster.php#Islanders">Islanders</a></td><td>3</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-21.html">Game Direct Link</a></td></tr>
<tr><td>4</td><td>47</td><td><a href="OTHL-PRE-ProTeamRoster.php#Capitals">Capitals</a></td><td>1</td><td><a href="OTHL-PRE-ProTeamRoster.php#Islanders">Islanders</a></td><td>3</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-47.html">Game Direct Link</a></td></tr>
<tr><td>5</td><td>54</td><td><a href="OTHL-PRE-ProTeamRoster.php#Islanders">Islanders</a></td><td>4</td><td><a href="OTHL-PRE-ProTeamRoster.php#Rangers">Rangers</a></td><td>2</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-54.html">Game Direct Link</a></td></tr>
<tr><td>6</td><td>77</td><td><a href="OTHL-PRE-ProTeamRoster.php#Islanders">Islanders</a></td><td>7</td><td><a href="OTHL-PRE-ProTeamRoster.php#Capitals">Capitals</a></td><td>1</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-77.html">Game Direct Link</a></td></tr>
<tr><td>7</td><td>84</td><td><a href="OTHL-PRE-ProTeamRoster.php#Rangers">Rangers</a></td><td>1</td><td><a href="OTHL-PRE-ProTeamRoster.php#Islanders">Islanders</a></td><td>4</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-84.html">Game Direct Link</a></td></tr>
<tr><td>8</td><td>99</td><td><a href="OTHL-PRE-ProTeamRoster.php#Islanders">Islanders</a></td><td>3</td><td><a href="OTHL-PRE-ProTeamRoster.php#BlueJackets">Blue Jackets</a></td><td>5</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-99.html">Game Direct Link</a></td></tr>
<tr><td>9</td><td>121</td><td><a href="OTHL-PRE-ProTeamRoster.php#BlueJackets">Blue Jackets</a></td><td>2</td><td><a href="OTHL-PRE-ProTeamRoster.php#Islanders">Islanders</a></td><td>4</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-121.html">Game Direct Link</a></td></tr>
<tr><td>10</td><td>131</td><td><a href="OTHL-PRE-ProTeamRoster.php#Islanders">Islanders</a></td><td>4</td><td><a href="OTHL-PRE-ProTeamRoster.php#Flyers">Flyers</a></td><td>6</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-131.html">Game Direct Link</a></td></tr>
<tr><td>12</td><td>147</td><td><a href="OTHL-PRE-ProTeamRoster.php#Penguins">Penguins</a></td><td>2</td><td><a href="OTHL-PRE-ProTeamRoster.php#Islanders">Islanders</a></td><td>3</td><td>W</td><td>*</td><td></td><td></td><td><a href="OTHL-PRE-147.html">Game Direct Link</a></td></tr>
<tr><td>13</td><td>165</td><td><a href="OTHL-PRE-ProTeamRoster.php#Islanders">Islanders</a></td><td>3</td><td><a href="OTHL-PRE-ProTeamRoster.php#Hurricanes">Hurricanes</a></td><td>2</td><td>W</td><td>*</td><td></td><td></td><td><a href="OTHL-PRE-165.html">Game Direct Link</a></td></tr>
<tr><td>14</td><td>171</td><td><a href="OTHL-PRE-ProTeamRoster.php#Islanders">Islanders</a></td><td>2</td><td><a href="OTHL-PRE-ProTeamRoster.php#Penguins">Penguins</a></td><td>1</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-171.html">Game Direct Link</a></td></tr>
<tr><td>15</td><td>189</td><td><a href="OTHL-PRE-ProTeamRoster.php#Devils">Devils</a></td><td>0</td><td><a href="OTHL-PRE-ProTeamRoster.php#Islanders">Islanders</a></td><td>3</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-189.html">Game Direct Link</a></td></tr>
<tr><td>17</td><td>209</td><td><a href="OTHL-PRE-ProTeamRoster.php#Flyers">Flyers</a></td><td>3</td><td><a href="OTHL-PRE-ProTeamRoster.php#Islanders">Islanders</a></td><td>6</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-209.html">Game Direct Link</a></td></tr>
</table></div>
<h1 class="TeamSchedulePro_WPG"><a id="Jets">Jets</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=2">Jets Page</a> ]
[ <a href="OTHL-PRE-ProTeamRoster.php#Jets">Pro Team Roster</a> ]
[ <a href="OTHL-PRE-ProTeamScoring.php#Jets">Pro Team Scoring</a> ]
[ <a href="OTHL-PRE-TeamFinance.php#Jets">Team Finance</a> ]
[ <a href="OTHL-PRE-ProTeamPlayersInfo.php#Jets">Pro Team PlayersInfo</a> ]
[ <a href="OTHL-PRE-ProTeamLines.php#Jets">Pro Team Lines</a> ]
[ <a href="OTHL-PRE-TeamProspects.php#Jets">Team Prospects</a> ]
[ <a href="OTHL-PRE-ProTeamSchedule.php#Jets">Pro Team Schedule</a> ]
[ <a href="OTHL-PRE-ProTeamStats.php#Jets">Pro Team Stats</a> ]
[ <a href="OTHL-PRE-ProTeamStatsVS.php#Jets">Pro Team Stats VS</a> ]
[ <a href="OTHL-PRE-TeamInjurySuspension.php#Jets">Team Injury Suspension</a> ]
[ <a href="OTHL-PRE-TeamHistory.php#Jets">Team History</a> ]
[ <a href="OTHL-PRE-TeamRecords.php#Jets">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Jets');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Jets" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW35">Day</th><th class="STHSW35">Game</th><th class="STHSW200">Visitor Team</th><th class="STHSW35">Score</th><th class="STHSW200">Home Team</th><th class="STHSW35">Score</th><th class="STHSW35">ST</th><th class="STHSW35">OT</th><th class="STHSW35">SO</th><th class="STHSW35">RI</th><th class="STHSW200">Link</th></tr></thead>
<tr><td>1</td><td>2</td><td><a href="OTHL-PRE-ProTeamRoster.php#Wild">Wild</a></td><td>3</td><td><a href="OTHL-PRE-ProTeamRoster.php#Jets">Jets</a></td><td>4</td><td>W</td><td>*</td><td></td><td></td><td><a href="OTHL-PRE-2.html">Game Direct Link</a></td></tr>
<tr><td>2</td><td>19</td><td><a href="OTHL-PRE-ProTeamRoster.php#Jets">Jets</a></td><td>1</td><td><a href="OTHL-PRE-ProTeamRoster.php#Coyotes">Coyotes</a></td><td>2</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-19.html">Game Direct Link</a></td></tr>
<tr><td>4</td><td>40</td><td><a href="OTHL-PRE-ProTeamRoster.php#Jets">Jets</a></td><td>1</td><td><a href="OTHL-PRE-ProTeamRoster.php#Blues">Blues</a></td><td>2</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-40.html">Game Direct Link</a></td></tr>
<tr><td>5</td><td>52</td><td><a href="OTHL-PRE-ProTeamRoster.php#Blues">Blues</a></td><td>2</td><td><a href="OTHL-PRE-ProTeamRoster.php#Jets">Jets</a></td><td>3</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-52.html">Game Direct Link</a></td></tr>
<tr><td>6</td><td>69</td><td><a href="OTHL-PRE-ProTeamRoster.php#Avalanche">Avalanche</a></td><td>1</td><td><a href="OTHL-PRE-ProTeamRoster.php#Jets">Jets</a></td><td>5</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-69.html">Game Direct Link</a></td></tr>
<tr><td>7</td><td>90</td><td><a href="OTHL-PRE-ProTeamRoster.php#Jets">Jets</a></td><td>1</td><td><a href="OTHL-PRE-ProTeamRoster.php#Stars">Stars</a></td><td>3</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-90.html">Game Direct Link</a></td></tr>
<tr><td>9</td><td>110</td><td><a href="OTHL-PRE-ProTeamRoster.php#Coyotes">Coyotes</a></td><td>1</td><td><a href="OTHL-PRE-ProTeamRoster.php#Jets">Jets</a></td><td>4</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-110.html">Game Direct Link</a></td></tr>
<tr><td>10</td><td>125</td><td><a href="OTHL-PRE-ProTeamRoster.php#Jets">Jets</a></td><td>0</td><td><a href="OTHL-PRE-ProTeamRoster.php#Avalanche">Avalanche</a></td><td>3</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-125.html">Game Direct Link</a></td></tr>
<tr><td>11</td><td>138</td><td><a href="OTHL-PRE-ProTeamRoster.php#Blackhawks">Blackhawks</a></td><td>2</td><td><a href="OTHL-PRE-ProTeamRoster.php#Jets">Jets</a></td><td>1</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-138.html">Game Direct Link</a></td></tr>
<tr><td>12</td><td>149</td><td><a href="OTHL-PRE-ProTeamRoster.php#Jets">Jets</a></td><td>3</td><td><a href="OTHL-PRE-ProTeamRoster.php#Wild">Wild</a></td><td>2</td><td>W</td><td>*</td><td></td><td></td><td><a href="OTHL-PRE-149.html">Game Direct Link</a></td></tr>
<tr><td>14</td><td>173</td><td><a href="OTHL-PRE-ProTeamRoster.php#Stars">Stars</a></td><td>3</td><td><a href="OTHL-PRE-ProTeamRoster.php#Jets">Jets</a></td><td>5</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-173.html">Game Direct Link</a></td></tr>
<tr><td>15</td><td>181</td><td><a href="OTHL-PRE-ProTeamRoster.php#Jets">Jets</a></td><td>3</td><td><a href="OTHL-PRE-ProTeamRoster.php#Predators">Predators</a></td><td>4</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-181.html">Game Direct Link</a></td></tr>
<tr><td>16</td><td>202</td><td><a href="OTHL-PRE-ProTeamRoster.php#Jets">Jets</a></td><td>4</td><td><a href="OTHL-PRE-ProTeamRoster.php#Blackhawks">Blackhawks</a></td><td>5</td><td>L</td><td>*</td><td></td><td></td><td><a href="OTHL-PRE-202.html">Game Direct Link</a></td></tr>
<tr><td>18</td><td>217</td><td><a href="OTHL-PRE-ProTeamRoster.php#Predators">Predators</a></td><td>0</td><td><a href="OTHL-PRE-ProTeamRoster.php#Jets">Jets</a></td><td>1</td><td>W</td><td>*</td><td></td><td></td><td><a href="OTHL-PRE-217.html">Game Direct Link</a></td></tr>
</table></div>
<h1 class="TeamSchedulePro_LAK"><a id="Kings">Kings</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=14">Kings Page</a> ]
[ <a href="OTHL-PRE-ProTeamRoster.php#Kings">Pro Team Roster</a> ]
[ <a href="OTHL-PRE-ProTeamScoring.php#Kings">Pro Team Scoring</a> ]
[ <a href="OTHL-PRE-TeamFinance.php#Kings">Team Finance</a> ]
[ <a href="OTHL-PRE-ProTeamPlayersInfo.php#Kings">Pro Team PlayersInfo</a> ]
[ <a href="OTHL-PRE-ProTeamLines.php#Kings">Pro Team Lines</a> ]
[ <a href="OTHL-PRE-TeamProspects.php#Kings">Team Prospects</a> ]
[ <a href="OTHL-PRE-ProTeamSchedule.php#Kings">Pro Team Schedule</a> ]
[ <a href="OTHL-PRE-ProTeamStats.php#Kings">Pro Team Stats</a> ]
[ <a href="OTHL-PRE-ProTeamStatsVS.php#Kings">Pro Team Stats VS</a> ]
[ <a href="OTHL-PRE-TeamInjurySuspension.php#Kings">Team Injury Suspension</a> ]
[ <a href="OTHL-PRE-TeamHistory.php#Kings">Team History</a> ]
[ <a href="OTHL-PRE-TeamRecords.php#Kings">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Kings');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Kings" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW35">Day</th><th class="STHSW35">Game</th><th class="STHSW200">Visitor Team</th><th class="STHSW35">Score</th><th class="STHSW200">Home Team</th><th class="STHSW35">Score</th><th class="STHSW35">ST</th><th class="STHSW35">OT</th><th class="STHSW35">SO</th><th class="STHSW35">RI</th><th class="STHSW200">Link</th></tr></thead>
<tr><td>1</td><td>10</td><td><a href="OTHL-PRE-ProTeamRoster.php#Kings">Kings</a></td><td>3</td><td><a href="OTHL-PRE-ProTeamRoster.php#Ducks">Ducks</a></td><td>2</td><td>W</td><td>*</td><td></td><td></td><td><a href="OTHL-PRE-10.html">Game Direct Link</a></td></tr>
<tr><td>2</td><td>28</td><td><a href="OTHL-PRE-ProTeamRoster.php#Canucks">Canucks</a></td><td>2</td><td><a href="OTHL-PRE-ProTeamRoster.php#Kings">Kings</a></td><td>3</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-28.html">Game Direct Link</a></td></tr>
<tr><td>4</td><td>46</td><td><a href="OTHL-PRE-ProTeamRoster.php#Sharks">Sharks</a></td><td>4</td><td><a href="OTHL-PRE-ProTeamRoster.php#Kings">Kings</a></td><td>3</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-46.html">Game Direct Link</a></td></tr>
<tr><td>5</td><td>59</td><td><a href="OTHL-PRE-ProTeamRoster.php#Kings">Kings</a></td><td>3</td><td><a href="OTHL-PRE-ProTeamRoster.php#Kraken">Kraken</a></td><td>4</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-59.html">Game Direct Link</a></td></tr>
<tr><td>6</td><td>70</td><td><a href="OTHL-PRE-ProTeamRoster.php#Kings">Kings</a></td><td>0</td><td><a href="OTHL-PRE-ProTeamRoster.php#Oilers">Oilers</a></td><td>2</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-70.html">Game Direct Link</a></td></tr>
<tr><td>7</td><td>87</td><td><a href="OTHL-PRE-ProTeamRoster.php#Kraken">Kraken</a></td><td>2</td><td><a href="OTHL-PRE-ProTeamRoster.php#Kings">Kings</a></td><td>4</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-87.html">Game Direct Link</a></td></tr>
<tr><td>8</td><td>104</td><td><a href="OTHL-PRE-ProTeamRoster.php#Ducks">Ducks</a></td><td>0</td><td><a href="OTHL-PRE-ProTeamRoster.php#Kings">Kings</a></td><td>2</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-104.html">Game Direct Link</a></td></tr>
<tr><td>9</td><td>112</td><td><a href="OTHL-PRE-ProTeamRoster.php#Kings">Kings</a></td><td>3</td><td><a href="OTHL-PRE-ProTeamRoster.php#GoldenKnights">Golden Knights</a></td><td>2</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-112.html">Game Direct Link</a></td></tr>
<tr><td>11</td><td>134</td><td><a href="OTHL-PRE-ProTeamRoster.php#Kings">Kings</a></td><td>0</td><td><a href="OTHL-PRE-ProTeamRoster.php#Canucks">Canucks</a></td><td>1</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-134.html">Game Direct Link</a></td></tr>
<tr><td>12</td><td>155</td><td><a href="OTHL-PRE-ProTeamRoster.php#Oilers">Oilers</a></td><td>5</td><td><a href="OTHL-PRE-ProTeamRoster.php#Kings">Kings</a></td><td>3</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-155.html">Game Direct Link</a></td></tr>
<tr><td>14</td><td>172</td><td><a href="OTHL-PRE-ProTeamRoster.php#Flames">Flames</a></td><td>3</td><td><a href="OTHL-PRE-ProTeamRoster.php#Kings">Kings</a></td><td>2</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-172.html">Game Direct Link</a></td></tr>
<tr><td>15</td><td>176</td><td><a href="OTHL-PRE-ProTeamRoster.php#Kings">Kings</a></td><td>4</td><td><a href="OTHL-PRE-ProTeamRoster.php#Sharks">Sharks</a></td><td>1</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-176.html">Game Direct Link</a></td></tr>
<tr><td>17</td><td>205</td><td><a href="OTHL-PRE-ProTeamRoster.php#Kings">Kings</a></td><td>4</td><td><a href="OTHL-PRE-ProTeamRoster.php#Flames">Flames</a></td><td>3</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-205.html">Game Direct Link</a></td></tr>
<tr><td>19</td><td>223</td><td><a href="OTHL-PRE-ProTeamRoster.php#GoldenKnights">Golden Knights</a></td><td>4</td><td><a href="OTHL-PRE-ProTeamRoster.php#Kings">Kings</a></td><td>3</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-223.html">Game Direct Link</a></td></tr>
</table></div>
<h1 class="TeamSchedulePro_SEA"><a id="Kraken">Kraken</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=32">Kraken Page</a> ]
[ <a href="OTHL-PRE-ProTeamRoster.php#Kraken">Pro Team Roster</a> ]
[ <a href="OTHL-PRE-ProTeamScoring.php#Kraken">Pro Team Scoring</a> ]
[ <a href="OTHL-PRE-TeamFinance.php#Kraken">Team Finance</a> ]
[ <a href="OTHL-PRE-ProTeamPlayersInfo.php#Kraken">Pro Team PlayersInfo</a> ]
[ <a href="OTHL-PRE-ProTeamLines.php#Kraken">Pro Team Lines</a> ]
[ <a href="OTHL-PRE-TeamProspects.php#Kraken">Team Prospects</a> ]
[ <a href="OTHL-PRE-ProTeamSchedule.php#Kraken">Pro Team Schedule</a> ]
[ <a href="OTHL-PRE-ProTeamStats.php#Kraken">Pro Team Stats</a> ]
[ <a href="OTHL-PRE-ProTeamStatsVS.php#Kraken">Pro Team Stats VS</a> ]
[ <a href="OTHL-PRE-TeamInjurySuspension.php#Kraken">Team Injury Suspension</a> ]
[ <a href="OTHL-PRE-TeamHistory.php#Kraken">Team History</a> ]
[ <a href="OTHL-PRE-TeamRecords.php#Kraken">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Kraken');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Kraken" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW35">Day</th><th class="STHSW35">Game</th><th class="STHSW200">Visitor Team</th><th class="STHSW35">Score</th><th class="STHSW200">Home Team</th><th class="STHSW35">Score</th><th class="STHSW35">ST</th><th class="STHSW35">OT</th><th class="STHSW35">SO</th><th class="STHSW35">RI</th><th class="STHSW200">Link</th></tr></thead>
<tr><td>1</td><td>12</td><td><a href="OTHL-PRE-ProTeamRoster.php#Sharks">Sharks</a></td><td>4</td><td><a href="OTHL-PRE-ProTeamRoster.php#Kraken">Kraken</a></td><td>2</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-12.html">Game Direct Link</a></td></tr>
<tr><td>2</td><td>18</td><td><a href="OTHL-PRE-ProTeamRoster.php#Kraken">Kraken</a></td><td>3</td><td><a href="OTHL-PRE-ProTeamRoster.php#Oilers">Oilers</a></td><td>4</td><td>L</td><td>*</td><td></td><td></td><td><a href="OTHL-PRE-18.html">Game Direct Link</a></td></tr>
<tr><td>4</td><td>41</td><td><a href="OTHL-PRE-ProTeamRoster.php#Kraken">Kraken</a></td><td>3</td><td><a href="OTHL-PRE-ProTeamRoster.php#Canucks">Canucks</a></td><td>4</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-41.html">Game Direct Link</a></td></tr>
<tr><td>5</td><td>59</td><td><a href="OTHL-PRE-ProTeamRoster.php#Kings">Kings</a></td><td>3</td><td><a href="OTHL-PRE-ProTeamRoster.php#Kraken">Kraken</a></td><td>4</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-59.html">Game Direct Link</a></td></tr>
<tr><td>6</td><td>72</td><td><a href="OTHL-PRE-ProTeamRoster.php#Kraken">Kraken</a></td><td>3</td><td><a href="OTHL-PRE-ProTeamRoster.php#Ducks">Ducks</a></td><td>2</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-72.html">Game Direct Link</a></td></tr>
<tr><td>7</td><td>87</td><td><a href="OTHL-PRE-ProTeamRoster.php#Kraken">Kraken</a></td><td>2</td><td><a href="OTHL-PRE-ProTeamRoster.php#Kings">Kings</a></td><td>4</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-87.html">Game Direct Link</a></td></tr>
<tr><td>8</td><td>98</td><td><a href="OTHL-PRE-ProTeamRoster.php#Oilers">Oilers</a></td><td>6</td><td><a href="OTHL-PRE-ProTeamRoster.php#Kraken">Kraken</a></td><td>2</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-98.html">Game Direct Link</a></td></tr>
<tr><td>10</td><td>122</td><td><a href="OTHL-PRE-ProTeamRoster.php#Canucks">Canucks</a></td><td>2</td><td><a href="OTHL-PRE-ProTeamRoster.php#Kraken">Kraken</a></td><td>4</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-122.html">Game Direct Link</a></td></tr>
<tr><td>11</td><td>143</td><td><a href="OTHL-PRE-ProTeamRoster.php#Ducks">Ducks</a></td><td>4</td><td><a href="OTHL-PRE-ProTeamRoster.php#Kraken">Kraken</a></td><td>3</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-143.html">Game Direct Link</a></td></tr>
<tr><td>12</td><td>145</td><td><a href="OTHL-PRE-ProTeamRoster.php#Kraken">Kraken</a></td><td>0</td><td><a href="OTHL-PRE-ProTeamRoster.php#Flames">Flames</a></td><td>3</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-145.html">Game Direct Link</a></td></tr>
<tr><td>14</td><td>169</td><td><a href="OTHL-PRE-ProTeamRoster.php#Kraken">Kraken</a></td><td>2</td><td><a href="OTHL-PRE-ProTeamRoster.php#GoldenKnights">Golden Knights</a></td><td>3</td><td>L</td><td></td><td>*</td><td></td><td><a href="OTHL-PRE-169.html">Game Direct Link</a></td></tr>
<tr><td>15</td><td>188</td><td><a href="OTHL-PRE-ProTeamRoster.php#Flames">Flames</a></td><td>0</td><td><a href="OTHL-PRE-ProTeamRoster.php#Kraken">Kraken</a></td><td>2</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-188.html">Game Direct Link</a></td></tr>
<tr><td>16</td><td>194</td><td><a href="OTHL-PRE-ProTeamRoster.php#Kraken">Kraken</a></td><td>4</td><td><a href="OTHL-PRE-ProTeamRoster.php#Sharks">Sharks</a></td><td>3</td><td>W</td><td>*</td><td></td><td></td><td><a href="OTHL-PRE-194.html">Game Direct Link</a></td></tr>
<tr><td>18</td><td>213</td><td><a href="OTHL-PRE-ProTeamRoster.php#GoldenKnights">Golden Knights</a></td><td>5</td><td><a href="OTHL-PRE-ProTeamRoster.php#Kraken">Kraken</a></td><td>3</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-213.html">Game Direct Link</a></td></tr>
</table></div>
<h1 class="TeamSchedulePro_TBL"><a id="Lightning">Lightning</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=27">Lightning Page</a> ]
[ <a href="OTHL-PRE-ProTeamRoster.php#Lightning">Pro Team Roster</a> ]
[ <a href="OTHL-PRE-ProTeamScoring.php#Lightning">Pro Team Scoring</a> ]
[ <a href="OTHL-PRE-TeamFinance.php#Lightning">Team Finance</a> ]
[ <a href="OTHL-PRE-ProTeamPlayersInfo.php#Lightning">Pro Team PlayersInfo</a> ]
[ <a href="OTHL-PRE-ProTeamLines.php#Lightning">Pro Team Lines</a> ]
[ <a href="OTHL-PRE-TeamProspects.php#Lightning">Team Prospects</a> ]
[ <a href="OTHL-PRE-ProTeamSchedule.php#Lightning">Pro Team Schedule</a> ]
[ <a href="OTHL-PRE-ProTeamStats.php#Lightning">Pro Team Stats</a> ]
[ <a href="OTHL-PRE-ProTeamStatsVS.php#Lightning">Pro Team Stats VS</a> ]
[ <a href="OTHL-PRE-TeamInjurySuspension.php#Lightning">Team Injury Suspension</a> ]
[ <a href="OTHL-PRE-TeamHistory.php#Lightning">Team History</a> ]
[ <a href="OTHL-PRE-TeamRecords.php#Lightning">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Lightning');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Lightning" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW35">Day</th><th class="STHSW35">Game</th><th class="STHSW200">Visitor Team</th><th class="STHSW35">Score</th><th class="STHSW200">Home Team</th><th class="STHSW35">Score</th><th class="STHSW35">ST</th><th class="STHSW35">OT</th><th class="STHSW35">SO</th><th class="STHSW35">RI</th><th class="STHSW200">Link</th></tr></thead>
<tr><td>1</td><td>15</td><td><a href="OTHL-PRE-ProTeamRoster.php#MapleLeafs">Maple Leafs</a></td><td>1</td><td><a href="OTHL-PRE-ProTeamRoster.php#Lightning">Lightning</a></td><td>2</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-15.html">Game Direct Link</a></td></tr>
<tr><td>2</td><td>20</td><td><a href="OTHL-PRE-ProTeamRoster.php#Lightning">Lightning</a></td><td>1</td><td><a href="OTHL-PRE-ProTeamRoster.php#Sabres">Sabres</a></td><td>5</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-20.html">Game Direct Link</a></td></tr>
<tr><td>4</td><td>35</td><td><a href="OTHL-PRE-ProTeamRoster.php#Sabres">Sabres</a></td><td>3</td><td><a href="OTHL-PRE-ProTeamRoster.php#Lightning">Lightning</a></td><td>2</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-35.html">Game Direct Link</a></td></tr>
<tr><td>5</td><td>55</td><td><a href="OTHL-PRE-ProTeamRoster.php#Lightning">Lightning</a></td><td>3</td><td><a href="OTHL-PRE-ProTeamRoster.php#Panthers">Panthers</a></td><td>1</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-55.html">Game Direct Link</a></td></tr>
<tr><td>6</td><td>74</td><td><a href="OTHL-PRE-ProTeamRoster.php#Lightning">Lightning</a></td><td>0</td><td><a href="OTHL-PRE-ProTeamRoster.php#Canadiens">Canadiens</a></td><td>3</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-74.html">Game Direct Link</a></td></tr>
<tr><td>7</td><td>91</td><td><a href="OTHL-PRE-ProTeamRoster.php#RedWings">Red Wings</a></td><td>2</td><td><a href="OTHL-PRE-ProTeamRoster.php#Lightning">Lightning</a></td><td>5</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-91.html">Game Direct Link</a></td></tr>
<tr><td>8</td><td>103</td><td><a href="OTHL-PRE-ProTeamRoster.php#Lightning">Lightning</a></td><td>2</td><td><a href="OTHL-PRE-ProTeamRoster.php#MapleLeafs">Maple Leafs</a></td><td>1</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-103.html">Game Direct Link</a></td></tr>
<tr><td>9</td><td>119</td><td><a href="OTHL-PRE-ProTeamRoster.php#Senators">Senators</a></td><td>5</td><td><a href="OTHL-PRE-ProTeamRoster.php#Lightning">Lightning</a></td><td>1</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-119.html">Game Direct Link</a></td></tr>
<tr><td>11</td><td>137</td><td><a href="OTHL-PRE-ProTeamRoster.php#Canadiens">Canadiens</a></td><td>1</td><td><a href="OTHL-PRE-ProTeamRoster.php#Lightning">Lightning</a></td><td>5</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-137.html">Game Direct Link</a></td></tr>
<tr><td>13</td><td>163</td><td><a href="OTHL-PRE-ProTeamRoster.php#Bruins">Bruins</a></td><td>0</td><td><a href="OTHL-PRE-ProTeamRoster.php#Lightning">Lightning</a></td><td>4</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-163.html">Game Direct Link</a></td></tr>
<tr><td>15</td><td>180</td><td><a href="OTHL-PRE-ProTeamRoster.php#Lightning">Lightning</a></td><td>1</td><td><a href="OTHL-PRE-ProTeamRoster.php#Senators">Senators</a></td><td>0</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-180.html">Game Direct Link</a></td></tr>
<tr><td>16</td><td>195</td><td><a href="OTHL-PRE-ProTeamRoster.php#Panthers">Panthers</a></td><td>4</td><td><a href="OTHL-PRE-ProTeamRoster.php#Lightning">Lightning</a></td><td>3</td><td>L</td><td>*</td><td></td><td></td><td><a href="OTHL-PRE-195.html">Game Direct Link</a></td></tr>
<tr><td>17</td><td>204</td><td><a href="OTHL-PRE-ProTeamRoster.php#Lightning">Lightning</a></td><td>2</td><td><a href="OTHL-PRE-ProTeamRoster.php#Bruins">Bruins</a></td><td>3</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-204.html">Game Direct Link</a></td></tr>
<tr><td>18</td><td>219</td><td><a href="OTHL-PRE-ProTeamRoster.php#Lightning">Lightning</a></td><td>2</td><td><a href="OTHL-PRE-ProTeamRoster.php#RedWings">Red Wings</a></td><td>1</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-219.html">Game Direct Link</a></td></tr>
</table></div>
<h1 class="TeamSchedulePro_TOR"><a id="MapleLeafs">Maple Leafs</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=28">Maple Leafs Page</a> ]
[ <a href="OTHL-PRE-ProTeamRoster.php#MapleLeafs">Pro Team Roster</a> ]
[ <a href="OTHL-PRE-ProTeamScoring.php#MapleLeafs">Pro Team Scoring</a> ]
[ <a href="OTHL-PRE-TeamFinance.php#MapleLeafs">Team Finance</a> ]
[ <a href="OTHL-PRE-ProTeamPlayersInfo.php#MapleLeafs">Pro Team PlayersInfo</a> ]
[ <a href="OTHL-PRE-ProTeamLines.php#MapleLeafs">Pro Team Lines</a> ]
[ <a href="OTHL-PRE-TeamProspects.php#MapleLeafs">Team Prospects</a> ]
[ <a href="OTHL-PRE-ProTeamSchedule.php#MapleLeafs">Pro Team Schedule</a> ]
[ <a href="OTHL-PRE-ProTeamStats.php#MapleLeafs">Pro Team Stats</a> ]
[ <a href="OTHL-PRE-ProTeamStatsVS.php#MapleLeafs">Pro Team Stats VS</a> ]
[ <a href="OTHL-PRE-TeamInjurySuspension.php#MapleLeafs">Team Injury Suspension</a> ]
[ <a href="OTHL-PRE-TeamHistory.php#MapleLeafs">Team History</a> ]
[ <a href="OTHL-PRE-TeamRecords.php#MapleLeafs">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_MapleLeafs');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_MapleLeafs" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW35">Day</th><th class="STHSW35">Game</th><th class="STHSW200">Visitor Team</th><th class="STHSW35">Score</th><th class="STHSW200">Home Team</th><th class="STHSW35">Score</th><th class="STHSW35">ST</th><th class="STHSW35">OT</th><th class="STHSW35">SO</th><th class="STHSW35">RI</th><th class="STHSW200">Link</th></tr></thead>
<tr><td>1</td><td>15</td><td><a href="OTHL-PRE-ProTeamRoster.php#MapleLeafs">Maple Leafs</a></td><td>1</td><td><a href="OTHL-PRE-ProTeamRoster.php#Lightning">Lightning</a></td><td>2</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-15.html">Game Direct Link</a></td></tr>
<tr><td>2</td><td>17</td><td><a href="OTHL-PRE-ProTeamRoster.php#Panthers">Panthers</a></td><td>3</td><td><a href="OTHL-PRE-ProTeamRoster.php#MapleLeafs">Maple Leafs</a></td><td>2</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-17.html">Game Direct Link</a></td></tr>
<tr><td>4</td><td>45</td><td><a href="OTHL-PRE-ProTeamRoster.php#MapleLeafs">Maple Leafs</a></td><td>2</td><td><a href="OTHL-PRE-ProTeamRoster.php#Senators">Senators</a></td><td>0</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-45.html">Game Direct Link</a></td></tr>
<tr><td>5</td><td>61</td><td><a href="OTHL-PRE-ProTeamRoster.php#RedWings">Red Wings</a></td><td>2</td><td><a href="OTHL-PRE-ProTeamRoster.php#MapleLeafs">Maple Leafs</a></td><td>5</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-61.html">Game Direct Link</a></td></tr>
<tr><td>6</td><td>76</td><td><a href="OTHL-PRE-ProTeamRoster.php#MapleLeafs">Maple Leafs</a></td><td>5</td><td><a href="OTHL-PRE-ProTeamRoster.php#Panthers">Panthers</a></td><td>2</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-76.html">Game Direct Link</a></td></tr>
<tr><td>7</td><td>81</td><td><a href="OTHL-PRE-ProTeamRoster.php#Senators">Senators</a></td><td>1</td><td><a href="OTHL-PRE-ProTeamRoster.php#MapleLeafs">Maple Leafs</a></td><td>5</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-81.html">Game Direct Link</a></td></tr>
<tr><td>8</td><td>103</td><td><a href="OTHL-PRE-ProTeamRoster.php#Lightning">Lightning</a></td><td>2</td><td><a href="OTHL-PRE-ProTeamRoster.php#MapleLeafs">Maple Leafs</a></td><td>1</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-103.html">Game Direct Link</a></td></tr>
<tr><td>10</td><td>126</td><td><a href="OTHL-PRE-ProTeamRoster.php#MapleLeafs">Maple Leafs</a></td><td>1</td><td><a href="OTHL-PRE-ProTeamRoster.php#RedWings">Red Wings</a></td><td>2</td><td>L</td><td>*</td><td></td><td></td><td><a href="OTHL-PRE-126.html">Game Direct Link</a></td></tr>
<tr><td>11</td><td>136</td><td><a href="OTHL-PRE-ProTeamRoster.php#Bruins">Bruins</a></td><td>2</td><td><a href="OTHL-PRE-ProTeamRoster.php#MapleLeafs">Maple Leafs</a></td><td>1</td><td>L</td><td>*</td><td></td><td></td><td><a href="OTHL-PRE-136.html">Game Direct Link</a></td></tr>
<tr><td>13</td><td>160</td><td><a href="OTHL-PRE-ProTeamRoster.php#MapleLeafs">Maple Leafs</a></td><td>1</td><td><a href="OTHL-PRE-ProTeamRoster.php#Canadiens">Canadiens</a></td><td>2</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-160.html">Game Direct Link</a></td></tr>
<tr><td>14</td><td>175</td><td><a href="OTHL-PRE-ProTeamRoster.php#Canadiens">Canadiens</a></td><td>3</td><td><a href="OTHL-PRE-ProTeamRoster.php#MapleLeafs">Maple Leafs</a></td><td>1</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-175.html">Game Direct Link</a></td></tr>
<tr><td>15</td><td>179</td><td><a href="OTHL-PRE-ProTeamRoster.php#MapleLeafs">Maple Leafs</a></td><td>1</td><td><a href="OTHL-PRE-ProTeamRoster.php#Bruins">Bruins</a></td><td>4</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-179.html">Game Direct Link</a></td></tr>
<tr><td>16</td><td>200</td><td><a href="OTHL-PRE-ProTeamRoster.php#MapleLeafs">Maple Leafs</a></td><td>1</td><td><a href="OTHL-PRE-ProTeamRoster.php#Sabres">Sabres</a></td><td>3</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-200.html">Game Direct Link</a></td></tr>
<tr><td>18</td><td>215</td><td><a href="OTHL-PRE-ProTeamRoster.php#Sabres">Sabres</a></td><td>3</td><td><a href="OTHL-PRE-ProTeamRoster.php#MapleLeafs">Maple Leafs</a></td><td>2</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-215.html">Game Direct Link</a></td></tr>
</table></div>
<h1 class="TeamSchedulePro_EDM"><a id="Oilers">Oilers</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=12">Oilers Page</a> ]
[ <a href="OTHL-PRE-ProTeamRoster.php#Oilers">Pro Team Roster</a> ]
[ <a href="OTHL-PRE-ProTeamScoring.php#Oilers">Pro Team Scoring</a> ]
[ <a href="OTHL-PRE-TeamFinance.php#Oilers">Team Finance</a> ]
[ <a href="OTHL-PRE-ProTeamPlayersInfo.php#Oilers">Pro Team PlayersInfo</a> ]
[ <a href="OTHL-PRE-ProTeamLines.php#Oilers">Pro Team Lines</a> ]
[ <a href="OTHL-PRE-TeamProspects.php#Oilers">Team Prospects</a> ]
[ <a href="OTHL-PRE-ProTeamSchedule.php#Oilers">Pro Team Schedule</a> ]
[ <a href="OTHL-PRE-ProTeamStats.php#Oilers">Pro Team Stats</a> ]
[ <a href="OTHL-PRE-ProTeamStatsVS.php#Oilers">Pro Team Stats VS</a> ]
[ <a href="OTHL-PRE-TeamInjurySuspension.php#Oilers">Team Injury Suspension</a> ]
[ <a href="OTHL-PRE-TeamHistory.php#Oilers">Team History</a> ]
[ <a href="OTHL-PRE-TeamRecords.php#Oilers">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Oilers');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Oilers" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW35">Day</th><th class="STHSW35">Game</th><th class="STHSW200">Visitor Team</th><th class="STHSW35">Score</th><th class="STHSW200">Home Team</th><th class="STHSW35">Score</th><th class="STHSW35">ST</th><th class="STHSW35">OT</th><th class="STHSW35">SO</th><th class="STHSW35">RI</th><th class="STHSW200">Link</th></tr></thead>
<tr><td>1</td><td>7</td><td><a href="OTHL-PRE-ProTeamRoster.php#Oilers">Oilers</a></td><td>5</td><td><a href="OTHL-PRE-ProTeamRoster.php#Canucks">Canucks</a></td><td>3</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-7.html">Game Direct Link</a></td></tr>
<tr><td>2</td><td>18</td><td><a href="OTHL-PRE-ProTeamRoster.php#Kraken">Kraken</a></td><td>3</td><td><a href="OTHL-PRE-ProTeamRoster.php#Oilers">Oilers</a></td><td>4</td><td>W</td><td>*</td><td></td><td></td><td><a href="OTHL-PRE-18.html">Game Direct Link</a></td></tr>
<tr><td>4</td><td>43</td><td><a href="OTHL-PRE-ProTeamRoster.php#Oilers">Oilers</a></td><td>2</td><td><a href="OTHL-PRE-ProTeamRoster.php#Ducks">Ducks</a></td><td>1</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-43.html">Game Direct Link</a></td></tr>
<tr><td>5</td><td>58</td><td><a href="OTHL-PRE-ProTeamRoster.php#Canucks">Canucks</a></td><td>1</td><td><a href="OTHL-PRE-ProTeamRoster.php#Oilers">Oilers</a></td><td>4</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-58.html">Game Direct Link</a></td></tr>
<tr><td>6</td><td>70</td><td><a href="OTHL-PRE-ProTeamRoster.php#Kings">Kings</a></td><td>0</td><td><a href="OTHL-PRE-ProTeamRoster.php#Oilers">Oilers</a></td><td>2</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-70.html">Game Direct Link</a></td></tr>
<tr><td>7</td><td>93</td><td><a href="OTHL-PRE-ProTeamRoster.php#Ducks">Ducks</a></td><td>3</td><td><a href="OTHL-PRE-ProTeamRoster.php#Oilers">Oilers</a></td><td>1</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-93.html">Game Direct Link</a></td></tr>
<tr><td>8</td><td>98</td><td><a href="OTHL-PRE-ProTeamRoster.php#Oilers">Oilers</a></td><td>6</td><td><a href="OTHL-PRE-ProTeamRoster.php#Kraken">Kraken</a></td><td>2</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-98.html">Game Direct Link</a></td></tr>
<tr><td>10</td><td>129</td><td><a href="OTHL-PRE-ProTeamRoster.php#Flames">Flames</a></td><td>1</td><td><a href="OTHL-PRE-ProTeamRoster.php#Oilers">Oilers</a></td><td>4</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-129.html">Game Direct Link</a></td></tr>
<tr><td>11</td><td>139</td><td><a href="OTHL-PRE-ProTeamRoster.php#Oilers">Oilers</a></td><td>2</td><td><a href="OTHL-PRE-ProTeamRoster.php#Sharks">Sharks</a></td><td>0</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-139.html">Game Direct Link</a></td></tr>
<tr><td>12</td><td>155</td><td><a href="OTHL-PRE-ProTeamRoster.php#Oilers">Oilers</a></td><td>5</td><td><a href="OTHL-PRE-ProTeamRoster.php#Kings">Kings</a></td><td>3</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-155.html">Game Direct Link</a></td></tr>
<tr><td>13</td><td>164</td><td><a href="OTHL-PRE-ProTeamRoster.php#Oilers">Oilers</a></td><td>1</td><td><a href="OTHL-PRE-ProTeamRoster.php#Flames">Flames</a></td><td>2</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-164.html">Game Direct Link</a></td></tr>
<tr><td>15</td><td>178</td><td><a href="OTHL-PRE-ProTeamRoster.php#GoldenKnights">Golden Knights</a></td><td>2</td><td><a href="OTHL-PRE-ProTeamRoster.php#Oilers">Oilers</a></td><td>5</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-178.html">Game Direct Link</a></td></tr>
<tr><td>16</td><td>197</td><td><a href="OTHL-PRE-ProTeamRoster.php#Oilers">Oilers</a></td><td>3</td><td><a href="OTHL-PRE-ProTeamRoster.php#GoldenKnights">Golden Knights</a></td><td>1</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-197.html">Game Direct Link</a></td></tr>
<tr><td>18</td><td>211</td><td><a href="OTHL-PRE-ProTeamRoster.php#Sharks">Sharks</a></td><td>5</td><td><a href="OTHL-PRE-ProTeamRoster.php#Oilers">Oilers</a></td><td>4</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-211.html">Game Direct Link</a></td></tr>
</table></div>
<h1 class="TeamSchedulePro_FLA"><a id="Panthers">Panthers</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=13">Panthers Page</a> ]
[ <a href="OTHL-PRE-ProTeamRoster.php#Panthers">Pro Team Roster</a> ]
[ <a href="OTHL-PRE-ProTeamScoring.php#Panthers">Pro Team Scoring</a> ]
[ <a href="OTHL-PRE-TeamFinance.php#Panthers">Team Finance</a> ]
[ <a href="OTHL-PRE-ProTeamPlayersInfo.php#Panthers">Pro Team PlayersInfo</a> ]
[ <a href="OTHL-PRE-ProTeamLines.php#Panthers">Pro Team Lines</a> ]
[ <a href="OTHL-PRE-TeamProspects.php#Panthers">Team Prospects</a> ]
[ <a href="OTHL-PRE-ProTeamSchedule.php#Panthers">Pro Team Schedule</a> ]
[ <a href="OTHL-PRE-ProTeamStats.php#Panthers">Pro Team Stats</a> ]
[ <a href="OTHL-PRE-ProTeamStatsVS.php#Panthers">Pro Team Stats VS</a> ]
[ <a href="OTHL-PRE-TeamInjurySuspension.php#Panthers">Team Injury Suspension</a> ]
[ <a href="OTHL-PRE-TeamHistory.php#Panthers">Team History</a> ]
[ <a href="OTHL-PRE-TeamRecords.php#Panthers">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Panthers');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Panthers" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW35">Day</th><th class="STHSW35">Game</th><th class="STHSW200">Visitor Team</th><th class="STHSW35">Score</th><th class="STHSW200">Home Team</th><th class="STHSW35">Score</th><th class="STHSW35">ST</th><th class="STHSW35">OT</th><th class="STHSW35">SO</th><th class="STHSW35">RI</th><th class="STHSW200">Link</th></tr></thead>
<tr><td>1</td><td>8</td><td><a href="OTHL-PRE-ProTeamRoster.php#Sabres">Sabres</a></td><td>5</td><td><a href="OTHL-PRE-ProTeamRoster.php#Panthers">Panthers</a></td><td>3</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-8.html">Game Direct Link</a></td></tr>
<tr><td>2</td><td>17</td><td><a href="OTHL-PRE-ProTeamRoster.php#Panthers">Panthers</a></td><td>3</td><td><a href="OTHL-PRE-ProTeamRoster.php#MapleLeafs">Maple Leafs</a></td><td>2</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-17.html">Game Direct Link</a></td></tr>
<tr><td>3</td><td>32</td><td><a href="OTHL-PRE-ProTeamRoster.php#Panthers">Panthers</a></td><td>3</td><td><a href="OTHL-PRE-ProTeamRoster.php#Canadiens">Canadiens</a></td><td>2</td><td>W</td><td></td><td>*</td><td></td><td><a href="OTHL-PRE-32.html">Game Direct Link</a></td></tr>
<tr><td>5</td><td>55</td><td><a href="OTHL-PRE-ProTeamRoster.php#Lightning">Lightning</a></td><td>3</td><td><a href="OTHL-PRE-ProTeamRoster.php#Panthers">Panthers</a></td><td>1</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-55.html">Game Direct Link</a></td></tr>
<tr><td>6</td><td>76</td><td><a href="OTHL-PRE-ProTeamRoster.php#MapleLeafs">Maple Leafs</a></td><td>5</td><td><a href="OTHL-PRE-ProTeamRoster.php#Panthers">Panthers</a></td><td>2</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-76.html">Game Direct Link</a></td></tr>
<tr><td>7</td><td>92</td><td><a href="OTHL-PRE-ProTeamRoster.php#Canadiens">Canadiens</a></td><td>3</td><td><a href="OTHL-PRE-ProTeamRoster.php#Panthers">Panthers</a></td><td>1</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-92.html">Game Direct Link</a></td></tr>
<tr><td>8</td><td>106</td><td><a href="OTHL-PRE-ProTeamRoster.php#Panthers">Panthers</a></td><td>1</td><td><a href="OTHL-PRE-ProTeamRoster.php#Senators">Senators</a></td><td>2</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-106.html">Game Direct Link</a></td></tr>
<tr><td>9</td><td>117</td><td><a href="OTHL-PRE-ProTeamRoster.php#Panthers">Panthers</a></td><td>4</td><td><a href="OTHL-PRE-ProTeamRoster.php#Sabres">Sabres</a></td><td>5</td><td>L</td><td></td><td>*</td><td></td><td><a href="OTHL-PRE-117.html">Game Direct Link</a></td></tr>
<tr><td>10</td><td>128</td><td><a href="OTHL-PRE-ProTeamRoster.php#Panthers">Panthers</a></td><td>1</td><td><a href="OTHL-PRE-ProTeamRoster.php#Bruins">Bruins</a></td><td>3</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-128.html">Game Direct Link</a></td></tr>
<tr><td>12</td><td>154</td><td><a href="OTHL-PRE-ProTeamRoster.php#Bruins">Bruins</a></td><td>1</td><td><a href="OTHL-PRE-ProTeamRoster.php#Panthers">Panthers</a></td><td>2</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-154.html">Game Direct Link</a></td></tr>
<tr><td>13</td><td>166</td><td><a href="OTHL-PRE-ProTeamRoster.php#RedWings">Red Wings</a></td><td>2</td><td><a href="OTHL-PRE-ProTeamRoster.php#Panthers">Panthers</a></td><td>0</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-166.html">Game Direct Link</a></td></tr>
<tr><td>15</td><td>182</td><td><a href="OTHL-PRE-ProTeamRoster.php#Panthers">Panthers</a></td><td>4</td><td><a href="OTHL-PRE-ProTeamRoster.php#RedWings">Red Wings</a></td><td>2</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-182.html">Game Direct Link</a></td></tr>
<tr><td>16</td><td>195</td><td><a href="OTHL-PRE-ProTeamRoster.php#Panthers">Panthers</a></td><td>4</td><td><a href="OTHL-PRE-ProTeamRoster.php#Lightning">Lightning</a></td><td>3</td><td>W</td><td>*</td><td></td><td></td><td><a href="OTHL-PRE-195.html">Game Direct Link</a></td></tr>
<tr><td>18</td><td>220</td><td><a href="OTHL-PRE-ProTeamRoster.php#Senators">Senators</a></td><td>4</td><td><a href="OTHL-PRE-ProTeamRoster.php#Panthers">Panthers</a></td><td>2</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-220.html">Game Direct Link</a></td></tr>
</table></div>
<h1 class="TeamSchedulePro_PIT"><a id="Penguins">Penguins</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=24">Penguins Page</a> ]
[ <a href="OTHL-PRE-ProTeamRoster.php#Penguins">Pro Team Roster</a> ]
[ <a href="OTHL-PRE-ProTeamScoring.php#Penguins">Pro Team Scoring</a> ]
[ <a href="OTHL-PRE-TeamFinance.php#Penguins">Team Finance</a> ]
[ <a href="OTHL-PRE-ProTeamPlayersInfo.php#Penguins">Pro Team PlayersInfo</a> ]
[ <a href="OTHL-PRE-ProTeamLines.php#Penguins">Pro Team Lines</a> ]
[ <a href="OTHL-PRE-TeamProspects.php#Penguins">Team Prospects</a> ]
[ <a href="OTHL-PRE-ProTeamSchedule.php#Penguins">Pro Team Schedule</a> ]
[ <a href="OTHL-PRE-ProTeamStats.php#Penguins">Pro Team Stats</a> ]
[ <a href="OTHL-PRE-ProTeamStatsVS.php#Penguins">Pro Team Stats VS</a> ]
[ <a href="OTHL-PRE-TeamInjurySuspension.php#Penguins">Team Injury Suspension</a> ]
[ <a href="OTHL-PRE-TeamHistory.php#Penguins">Team History</a> ]
[ <a href="OTHL-PRE-TeamRecords.php#Penguins">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Penguins');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Penguins" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW35">Day</th><th class="STHSW35">Game</th><th class="STHSW200">Visitor Team</th><th class="STHSW35">Score</th><th class="STHSW200">Home Team</th><th class="STHSW35">Score</th><th class="STHSW35">ST</th><th class="STHSW35">OT</th><th class="STHSW35">SO</th><th class="STHSW35">RI</th><th class="STHSW200">Link</th></tr></thead>
<tr><td>1</td><td>5</td><td><a href="OTHL-PRE-ProTeamRoster.php#Flyers">Flyers</a></td><td>5</td><td><a href="OTHL-PRE-ProTeamRoster.php#Penguins">Penguins</a></td><td>2</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-5.html">Game Direct Link</a></td></tr>
<tr><td>2</td><td>30</td><td><a href="OTHL-PRE-ProTeamRoster.php#Penguins">Penguins</a></td><td>3</td><td><a href="OTHL-PRE-ProTeamRoster.php#BlueJackets">Blue Jackets</a></td><td>4</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-30.html">Game Direct Link</a></td></tr>
<tr><td>4</td><td>42</td><td><a href="OTHL-PRE-ProTeamRoster.php#Penguins">Penguins</a></td><td>0</td><td><a href="OTHL-PRE-ProTeamRoster.php#Devils">Devils</a></td><td>1</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-42.html">Game Direct Link</a></td></tr>
<tr><td>5</td><td>50</td><td><a href="OTHL-PRE-ProTeamRoster.php#Hurricanes">Hurricanes</a></td><td>4</td><td><a href="OTHL-PRE-ProTeamRoster.php#Penguins">Penguins</a></td><td>0</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-50.html">Game Direct Link</a></td></tr>
<tr><td>6</td><td>66</td><td><a href="OTHL-PRE-ProTeamRoster.php#Penguins">Penguins</a></td><td>3</td><td><a href="OTHL-PRE-ProTeamRoster.php#Flyers">Flyers</a></td><td>4</td><td>L</td><td></td><td>*</td><td></td><td><a href="OTHL-PRE-66.html">Game Direct Link</a></td></tr>
<tr><td>7</td><td>89</td><td><a href="OTHL-PRE-ProTeamRoster.php#Capitals">Capitals</a></td><td>1</td><td><a href="OTHL-PRE-ProTeamRoster.php#Penguins">Penguins</a></td><td>2</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-89.html">Game Direct Link</a></td></tr>
<tr><td>8</td><td>102</td><td><a href="OTHL-PRE-ProTeamRoster.php#Devils">Devils</a></td><td>2</td><td><a href="OTHL-PRE-ProTeamRoster.php#Penguins">Penguins</a></td><td>3</td><td>W</td><td>*</td><td></td><td></td><td><a href="OTHL-PRE-102.html">Game Direct Link</a></td></tr>
<tr><td>10</td><td>124</td><td><a href="OTHL-PRE-ProTeamRoster.php#Penguins">Penguins</a></td><td>4</td><td><a href="OTHL-PRE-ProTeamRoster.php#Rangers">Rangers</a></td><td>3</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-124.html">Game Direct Link</a></td></tr>
<tr><td>11</td><td>135</td><td><a href="OTHL-PRE-ProTeamRoster.php#BlueJackets">Blue Jackets</a></td><td>3</td><td><a href="OTHL-PRE-ProTeamRoster.php#Penguins">Penguins</a></td><td>1</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-135.html">Game Direct Link</a></td></tr>
<tr><td>12</td><td>147</td><td><a href="OTHL-PRE-ProTeamRoster.php#Penguins">Penguins</a></td><td>2</td><td><a href="OTHL-PRE-ProTeamRoster.php#Islanders">Islanders</a></td><td>3</td><td>L</td><td>*</td><td></td><td></td><td><a href="OTHL-PRE-147.html">Game Direct Link</a></td></tr>
<tr><td>14</td><td>171</td><td><a href="OTHL-PRE-ProTeamRoster.php#Islanders">Islanders</a></td><td>2</td><td><a href="OTHL-PRE-ProTeamRoster.php#Penguins">Penguins</a></td><td>1</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-171.html">Game Direct Link</a></td></tr>
<tr><td>15</td><td>187</td><td><a href="OTHL-PRE-ProTeamRoster.php#Penguins">Penguins</a></td><td>3</td><td><a href="OTHL-PRE-ProTeamRoster.php#Capitals">Capitals</a></td><td>2</td><td>W</td><td></td><td>*</td><td></td><td><a href="OTHL-PRE-187.html">Game Direct Link</a></td></tr>
<tr><td>16</td><td>199</td><td><a href="OTHL-PRE-ProTeamRoster.php#Rangers">Rangers</a></td><td>1</td><td><a href="OTHL-PRE-ProTeamRoster.php#Penguins">Penguins</a></td><td>4</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-199.html">Game Direct Link</a></td></tr>
<tr><td>17</td><td>206</td><td><a href="OTHL-PRE-ProTeamRoster.php#Penguins">Penguins</a></td><td>1</td><td><a href="OTHL-PRE-ProTeamRoster.php#Hurricanes">Hurricanes</a></td><td>5</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-206.html">Game Direct Link</a></td></tr>
</table></div>
<h1 class="TeamSchedulePro_NSH"><a id="Predators">Predators</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=17">Predators Page</a> ]
[ <a href="OTHL-PRE-ProTeamRoster.php#Predators">Pro Team Roster</a> ]
[ <a href="OTHL-PRE-ProTeamScoring.php#Predators">Pro Team Scoring</a> ]
[ <a href="OTHL-PRE-TeamFinance.php#Predators">Team Finance</a> ]
[ <a href="OTHL-PRE-ProTeamPlayersInfo.php#Predators">Pro Team PlayersInfo</a> ]
[ <a href="OTHL-PRE-ProTeamLines.php#Predators">Pro Team Lines</a> ]
[ <a href="OTHL-PRE-TeamProspects.php#Predators">Team Prospects</a> ]
[ <a href="OTHL-PRE-ProTeamSchedule.php#Predators">Pro Team Schedule</a> ]
[ <a href="OTHL-PRE-ProTeamStats.php#Predators">Pro Team Stats</a> ]
[ <a href="OTHL-PRE-ProTeamStatsVS.php#Predators">Pro Team Stats VS</a> ]
[ <a href="OTHL-PRE-TeamInjurySuspension.php#Predators">Team Injury Suspension</a> ]
[ <a href="OTHL-PRE-TeamHistory.php#Predators">Team History</a> ]
[ <a href="OTHL-PRE-TeamRecords.php#Predators">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Predators');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Predators" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW35">Day</th><th class="STHSW35">Game</th><th class="STHSW200">Visitor Team</th><th class="STHSW35">Score</th><th class="STHSW200">Home Team</th><th class="STHSW35">Score</th><th class="STHSW35">ST</th><th class="STHSW35">OT</th><th class="STHSW35">SO</th><th class="STHSW35">RI</th><th class="STHSW200">Link</th></tr></thead>
<tr><td>1</td><td>3</td><td><a href="OTHL-PRE-ProTeamRoster.php#Coyotes">Coyotes</a></td><td>6</td><td><a href="OTHL-PRE-ProTeamRoster.php#Predators">Predators</a></td><td>5</td><td>L</td><td>*</td><td></td><td></td><td><a href="OTHL-PRE-3.html">Game Direct Link</a></td></tr>
<tr><td>2</td><td>22</td><td><a href="OTHL-PRE-ProTeamRoster.php#Predators">Predators</a></td><td>3</td><td><a href="OTHL-PRE-ProTeamRoster.php#Avalanche">Avalanche</a></td><td>1</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-22.html">Game Direct Link</a></td></tr>
<tr><td>4</td><td>36</td><td><a href="OTHL-PRE-ProTeamRoster.php#Avalanche">Avalanche</a></td><td>2</td><td><a href="OTHL-PRE-ProTeamRoster.php#Predators">Predators</a></td><td>3</td><td>W</td><td></td><td>*</td><td></td><td><a href="OTHL-PRE-36.html">Game Direct Link</a></td></tr>
<tr><td>6</td><td>62</td><td><a href="OTHL-PRE-ProTeamRoster.php#Predators">Predators</a></td><td>2</td><td><a href="OTHL-PRE-ProTeamRoster.php#Stars">Stars</a></td><td>3</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-62.html">Game Direct Link</a></td></tr>
<tr><td>7</td><td>78</td><td><a href="OTHL-PRE-ProTeamRoster.php#Wild">Wild</a></td><td>2</td><td><a href="OTHL-PRE-ProTeamRoster.php#Predators">Predators</a></td><td>4</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-78.html">Game Direct Link</a></td></tr>
<tr><td>8</td><td>100</td><td><a href="OTHL-PRE-ProTeamRoster.php#Blackhawks">Blackhawks</a></td><td>3</td><td><a href="OTHL-PRE-ProTeamRoster.php#Predators">Predators</a></td><td>4</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-100.html">Game Direct Link</a></td></tr>
<tr><td>9</td><td>109</td><td><a href="OTHL-PRE-ProTeamRoster.php#Predators">Predators</a></td><td>5</td><td><a href="OTHL-PRE-ProTeamRoster.php#Blues">Blues</a></td><td>3</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-109.html">Game Direct Link</a></td></tr>
<tr><td>10</td><td>132</td><td><a href="OTHL-PRE-ProTeamRoster.php#Stars">Stars</a></td><td>2</td><td><a href="OTHL-PRE-ProTeamRoster.php#Predators">Predators</a></td><td>1</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-132.html">Game Direct Link</a></td></tr>
<tr><td>11</td><td>144</td><td><a href="OTHL-PRE-ProTeamRoster.php#Predators">Predators</a></td><td>4</td><td><a href="OTHL-PRE-ProTeamRoster.php#Coyotes">Coyotes</a></td><td>5</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-144.html">Game Direct Link</a></td></tr>
<tr><td>12</td><td>152</td><td><a href="OTHL-PRE-ProTeamRoster.php#Predators">Predators</a></td><td>4</td><td><a href="OTHL-PRE-ProTeamRoster.php#Blackhawks">Blackhawks</a></td><td>2</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-152.html">Game Direct Link</a></td></tr>
<tr><td>13</td><td>167</td><td><a href="OTHL-PRE-ProTeamRoster.php#Predators">Predators</a></td><td>1</td><td><a href="OTHL-PRE-ProTeamRoster.php#Wild">Wild</a></td><td>4</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-167.html">Game Direct Link</a></td></tr>
<tr><td>15</td><td>181</td><td><a href="OTHL-PRE-ProTeamRoster.php#Jets">Jets</a></td><td>3</td><td><a href="OTHL-PRE-ProTeamRoster.php#Predators">Predators</a></td><td>4</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-181.html">Game Direct Link</a></td></tr>
<tr><td>17</td><td>207</td><td><a href="OTHL-PRE-ProTeamRoster.php#Blues">Blues</a></td><td>5</td><td><a href="OTHL-PRE-ProTeamRoster.php#Predators">Predators</a></td><td>6</td><td>W</td><td>*</td><td></td><td></td><td><a href="OTHL-PRE-207.html">Game Direct Link</a></td></tr>
<tr><td>18</td><td>217</td><td><a href="OTHL-PRE-ProTeamRoster.php#Predators">Predators</a></td><td>0</td><td><a href="OTHL-PRE-ProTeamRoster.php#Jets">Jets</a></td><td>1</td><td>L</td><td>*</td><td></td><td></td><td><a href="OTHL-PRE-217.html">Game Direct Link</a></td></tr>
</table></div>
<h1 class="TeamSchedulePro_NYR"><a id="Rangers">Rangers</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=20">Rangers Page</a> ]
[ <a href="OTHL-PRE-ProTeamRoster.php#Rangers">Pro Team Roster</a> ]
[ <a href="OTHL-PRE-ProTeamScoring.php#Rangers">Pro Team Scoring</a> ]
[ <a href="OTHL-PRE-TeamFinance.php#Rangers">Team Finance</a> ]
[ <a href="OTHL-PRE-ProTeamPlayersInfo.php#Rangers">Pro Team PlayersInfo</a> ]
[ <a href="OTHL-PRE-ProTeamLines.php#Rangers">Pro Team Lines</a> ]
[ <a href="OTHL-PRE-TeamProspects.php#Rangers">Team Prospects</a> ]
[ <a href="OTHL-PRE-ProTeamSchedule.php#Rangers">Pro Team Schedule</a> ]
[ <a href="OTHL-PRE-ProTeamStats.php#Rangers">Pro Team Stats</a> ]
[ <a href="OTHL-PRE-ProTeamStatsVS.php#Rangers">Pro Team Stats VS</a> ]
[ <a href="OTHL-PRE-TeamInjurySuspension.php#Rangers">Team Injury Suspension</a> ]
[ <a href="OTHL-PRE-TeamHistory.php#Rangers">Team History</a> ]
[ <a href="OTHL-PRE-TeamRecords.php#Rangers">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Rangers');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Rangers" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW35">Day</th><th class="STHSW35">Game</th><th class="STHSW200">Visitor Team</th><th class="STHSW35">Score</th><th class="STHSW200">Home Team</th><th class="STHSW35">Score</th><th class="STHSW35">ST</th><th class="STHSW35">OT</th><th class="STHSW35">SO</th><th class="STHSW35">RI</th><th class="STHSW200">Link</th></tr></thead>
<tr><td>1</td><td>14</td><td><a href="OTHL-PRE-ProTeamRoster.php#Rangers">Rangers</a></td><td>3</td><td><a href="OTHL-PRE-ProTeamRoster.php#BlueJackets">Blue Jackets</a></td><td>2</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-14.html">Game Direct Link</a></td></tr>
<tr><td>2</td><td>23</td><td><a href="OTHL-PRE-ProTeamRoster.php#Rangers">Rangers</a></td><td>3</td><td><a href="OTHL-PRE-ProTeamRoster.php#Flyers">Flyers</a></td><td>2</td><td>W</td><td>*</td><td></td><td></td><td><a href="OTHL-PRE-23.html">Game Direct Link</a></td></tr>
<tr><td>3</td><td>34</td><td><a href="OTHL-PRE-ProTeamRoster.php#Capitals">Capitals</a></td><td>0</td><td><a href="OTHL-PRE-ProTeamRoster.php#Rangers">Rangers</a></td><td>2</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-34.html">Game Direct Link</a></td></tr>
<tr><td>5</td><td>54</td><td><a href="OTHL-PRE-ProTeamRoster.php#Islanders">Islanders</a></td><td>4</td><td><a href="OTHL-PRE-ProTeamRoster.php#Rangers">Rangers</a></td><td>2</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-54.html">Game Direct Link</a></td></tr>
<tr><td>6</td><td>71</td><td><a href="OTHL-PRE-ProTeamRoster.php#Devils">Devils</a></td><td>1</td><td><a href="OTHL-PRE-ProTeamRoster.php#Rangers">Rangers</a></td><td>0</td><td>L</td><td></td><td>*</td><td></td><td><a href="OTHL-PRE-71.html">Game Direct Link</a></td></tr>
<tr><td>7</td><td>84</td><td><a href="OTHL-PRE-ProTeamRoster.php#Rangers">Rangers</a></td><td>1</td><td><a href="OTHL-PRE-ProTeamRoster.php#Islanders">Islanders</a></td><td>4</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-84.html">Game Direct Link</a></td></tr>
<tr><td>8</td><td>107</td><td><a href="OTHL-PRE-ProTeamRoster.php#Rangers">Rangers</a></td><td>3</td><td><a href="OTHL-PRE-ProTeamRoster.php#Capitals">Capitals</a></td><td>2</td><td>W</td><td>*</td><td></td><td></td><td><a href="OTHL-PRE-107.html">Game Direct Link</a></td></tr>
<tr><td>9</td><td>115</td><td><a href="OTHL-PRE-ProTeamRoster.php#Rangers">Rangers</a></td><td>1</td><td><a href="OTHL-PRE-ProTeamRoster.php#Hurricanes">Hurricanes</a></td><td>0</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-115.html">Game Direct Link</a></td></tr>
<tr><td>10</td><td>124</td><td><a href="OTHL-PRE-ProTeamRoster.php#Penguins">Penguins</a></td><td>4</td><td><a href="OTHL-PRE-ProTeamRoster.php#Rangers">Rangers</a></td><td>3</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-124.html">Game Direct Link</a></td></tr>
<tr><td>12</td><td>150</td><td><a href="OTHL-PRE-ProTeamRoster.php#Rangers">Rangers</a></td><td>3</td><td><a href="OTHL-PRE-ProTeamRoster.php#Devils">Devils</a></td><td>4</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-150.html">Game Direct Link</a></td></tr>
<tr><td>13</td><td>156</td><td><a href="OTHL-PRE-ProTeamRoster.php#Flyers">Flyers</a></td><td>3</td><td><a href="OTHL-PRE-ProTeamRoster.php#Rangers">Rangers</a></td><td>4</td><td>W</td><td></td><td>*</td><td></td><td><a href="OTHL-PRE-156.html">Game Direct Link</a></td></tr>
<tr><td>15</td><td>186</td><td><a href="OTHL-PRE-ProTeamRoster.php#BlueJackets">Blue Jackets</a></td><td>3</td><td><a href="OTHL-PRE-ProTeamRoster.php#Rangers">Rangers</a></td><td>1</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-186.html">Game Direct Link</a></td></tr>
<tr><td>16</td><td>199</td><td><a href="OTHL-PRE-ProTeamRoster.php#Rangers">Rangers</a></td><td>1</td><td><a href="OTHL-PRE-ProTeamRoster.php#Penguins">Penguins</a></td><td>4</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-199.html">Game Direct Link</a></td></tr>
<tr><td>18</td><td>216</td><td><a href="OTHL-PRE-ProTeamRoster.php#Hurricanes">Hurricanes</a></td><td>5</td><td><a href="OTHL-PRE-ProTeamRoster.php#Rangers">Rangers</a></td><td>1</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-216.html">Game Direct Link</a></td></tr>
</table></div>
<h1 class="TeamSchedulePro_DET"><a id="RedWings">Red Wings</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=11">Red Wings Page</a> ]
[ <a href="OTHL-PRE-ProTeamRoster.php#RedWings">Pro Team Roster</a> ]
[ <a href="OTHL-PRE-ProTeamScoring.php#RedWings">Pro Team Scoring</a> ]
[ <a href="OTHL-PRE-TeamFinance.php#RedWings">Team Finance</a> ]
[ <a href="OTHL-PRE-ProTeamPlayersInfo.php#RedWings">Pro Team PlayersInfo</a> ]
[ <a href="OTHL-PRE-ProTeamLines.php#RedWings">Pro Team Lines</a> ]
[ <a href="OTHL-PRE-TeamProspects.php#RedWings">Team Prospects</a> ]
[ <a href="OTHL-PRE-ProTeamSchedule.php#RedWings">Pro Team Schedule</a> ]
[ <a href="OTHL-PRE-ProTeamStats.php#RedWings">Pro Team Stats</a> ]
[ <a href="OTHL-PRE-ProTeamStatsVS.php#RedWings">Pro Team Stats VS</a> ]
[ <a href="OTHL-PRE-TeamInjurySuspension.php#RedWings">Team Injury Suspension</a> ]
[ <a href="OTHL-PRE-TeamHistory.php#RedWings">Team History</a> ]
[ <a href="OTHL-PRE-TeamRecords.php#RedWings">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_RedWings');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_RedWings" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW35">Day</th><th class="STHSW35">Game</th><th class="STHSW200">Visitor Team</th><th class="STHSW35">Score</th><th class="STHSW200">Home Team</th><th class="STHSW35">Score</th><th class="STHSW35">ST</th><th class="STHSW35">OT</th><th class="STHSW35">SO</th><th class="STHSW35">RI</th><th class="STHSW200">Link</th></tr></thead>
<tr><td>1</td><td>11</td><td><a href="OTHL-PRE-ProTeamRoster.php#RedWings">Red Wings</a></td><td>2</td><td><a href="OTHL-PRE-ProTeamRoster.php#Bruins">Bruins</a></td><td>4</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-11.html">Game Direct Link</a></td></tr>
<tr><td>2</td><td>25</td><td><a href="OTHL-PRE-ProTeamRoster.php#Canadiens">Canadiens</a></td><td>2</td><td><a href="OTHL-PRE-ProTeamRoster.php#RedWings">Red Wings</a></td><td>3</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-25.html">Game Direct Link</a></td></tr>
<tr><td>4</td><td>44</td><td><a href="OTHL-PRE-ProTeamRoster.php#Bruins">Bruins</a></td><td>4</td><td><a href="OTHL-PRE-ProTeamRoster.php#RedWings">Red Wings</a></td><td>1</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-44.html">Game Direct Link</a></td></tr>
<tr><td>5</td><td>61</td><td><a href="OTHL-PRE-ProTeamRoster.php#RedWings">Red Wings</a></td><td>2</td><td><a href="OTHL-PRE-ProTeamRoster.php#MapleLeafs">Maple Leafs</a></td><td>5</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-61.html">Game Direct Link</a></td></tr>
<tr><td>6</td><td>68</td><td><a href="OTHL-PRE-ProTeamRoster.php#Sabres">Sabres</a></td><td>1</td><td><a href="OTHL-PRE-ProTeamRoster.php#RedWings">Red Wings</a></td><td>4</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-68.html">Game Direct Link</a></td></tr>
<tr><td>7</td><td>91</td><td><a href="OTHL-PRE-ProTeamRoster.php#RedWings">Red Wings</a></td><td>2</td><td><a href="OTHL-PRE-ProTeamRoster.php#Lightning">Lightning</a></td><td>5</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-91.html">Game Direct Link</a></td></tr>
<tr><td>8</td><td>94</td><td><a href="OTHL-PRE-ProTeamRoster.php#RedWings">Red Wings</a></td><td>1</td><td><a href="OTHL-PRE-ProTeamRoster.php#Sabres">Sabres</a></td><td>5</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-94.html">Game Direct Link</a></td></tr>
<tr><td>9</td><td>113</td><td><a href="OTHL-PRE-ProTeamRoster.php#RedWings">Red Wings</a></td><td>1</td><td><a href="OTHL-PRE-ProTeamRoster.php#Canadiens">Canadiens</a></td><td>3</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-113.html">Game Direct Link</a></td></tr>
<tr><td>10</td><td>126</td><td><a href="OTHL-PRE-ProTeamRoster.php#MapleLeafs">Maple Leafs</a></td><td>1</td><td><a href="OTHL-PRE-ProTeamRoster.php#RedWings">Red Wings</a></td><td>2</td><td>W</td><td>*</td><td></td><td></td><td><a href="OTHL-PRE-126.html">Game Direct Link</a></td></tr>
<tr><td>12</td><td>148</td><td><a href="OTHL-PRE-ProTeamRoster.php#Senators">Senators</a></td><td>3</td><td><a href="OTHL-PRE-ProTeamRoster.php#RedWings">Red Wings</a></td><td>4</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-148.html">Game Direct Link</a></td></tr>
<tr><td>13</td><td>166</td><td><a href="OTHL-PRE-ProTeamRoster.php#RedWings">Red Wings</a></td><td>2</td><td><a href="OTHL-PRE-ProTeamRoster.php#Panthers">Panthers</a></td><td>0</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-166.html">Game Direct Link</a></td></tr>
<tr><td>15</td><td>182</td><td><a href="OTHL-PRE-ProTeamRoster.php#Panthers">Panthers</a></td><td>4</td><td><a href="OTHL-PRE-ProTeamRoster.php#RedWings">Red Wings</a></td><td>2</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-182.html">Game Direct Link</a></td></tr>
<tr><td>16</td><td>203</td><td><a href="OTHL-PRE-ProTeamRoster.php#RedWings">Red Wings</a></td><td>4</td><td><a href="OTHL-PRE-ProTeamRoster.php#Senators">Senators</a></td><td>1</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-203.html">Game Direct Link</a></td></tr>
<tr><td>18</td><td>219</td><td><a href="OTHL-PRE-ProTeamRoster.php#Lightning">Lightning</a></td><td>2</td><td><a href="OTHL-PRE-ProTeamRoster.php#RedWings">Red Wings</a></td><td>1</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-219.html">Game Direct Link</a></td></tr>
</table></div>
<h1 class="TeamSchedulePro_BUF"><a id="Sabres">Sabres</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=4">Sabres Page</a> ]
[ <a href="OTHL-PRE-ProTeamRoster.php#Sabres">Pro Team Roster</a> ]
[ <a href="OTHL-PRE-ProTeamScoring.php#Sabres">Pro Team Scoring</a> ]
[ <a href="OTHL-PRE-TeamFinance.php#Sabres">Team Finance</a> ]
[ <a href="OTHL-PRE-ProTeamPlayersInfo.php#Sabres">Pro Team PlayersInfo</a> ]
[ <a href="OTHL-PRE-ProTeamLines.php#Sabres">Pro Team Lines</a> ]
[ <a href="OTHL-PRE-TeamProspects.php#Sabres">Team Prospects</a> ]
[ <a href="OTHL-PRE-ProTeamSchedule.php#Sabres">Pro Team Schedule</a> ]
[ <a href="OTHL-PRE-ProTeamStats.php#Sabres">Pro Team Stats</a> ]
[ <a href="OTHL-PRE-ProTeamStatsVS.php#Sabres">Pro Team Stats VS</a> ]
[ <a href="OTHL-PRE-TeamInjurySuspension.php#Sabres">Team Injury Suspension</a> ]
[ <a href="OTHL-PRE-TeamHistory.php#Sabres">Team History</a> ]
[ <a href="OTHL-PRE-TeamRecords.php#Sabres">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Sabres');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Sabres" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW35">Day</th><th class="STHSW35">Game</th><th class="STHSW200">Visitor Team</th><th class="STHSW35">Score</th><th class="STHSW200">Home Team</th><th class="STHSW35">Score</th><th class="STHSW35">ST</th><th class="STHSW35">OT</th><th class="STHSW35">SO</th><th class="STHSW35">RI</th><th class="STHSW200">Link</th></tr></thead>
<tr><td>1</td><td>8</td><td><a href="OTHL-PRE-ProTeamRoster.php#Sabres">Sabres</a></td><td>5</td><td><a href="OTHL-PRE-ProTeamRoster.php#Panthers">Panthers</a></td><td>3</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-8.html">Game Direct Link</a></td></tr>
<tr><td>2</td><td>20</td><td><a href="OTHL-PRE-ProTeamRoster.php#Lightning">Lightning</a></td><td>1</td><td><a href="OTHL-PRE-ProTeamRoster.php#Sabres">Sabres</a></td><td>5</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-20.html">Game Direct Link</a></td></tr>
<tr><td>4</td><td>35</td><td><a href="OTHL-PRE-ProTeamRoster.php#Sabres">Sabres</a></td><td>3</td><td><a href="OTHL-PRE-ProTeamRoster.php#Lightning">Lightning</a></td><td>2</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-35.html">Game Direct Link</a></td></tr>
<tr><td>5</td><td>53</td><td><a href="OTHL-PRE-ProTeamRoster.php#Bruins">Bruins</a></td><td>1</td><td><a href="OTHL-PRE-ProTeamRoster.php#Sabres">Sabres</a></td><td>2</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-53.html">Game Direct Link</a></td></tr>
<tr><td>6</td><td>68</td><td><a href="OTHL-PRE-ProTeamRoster.php#Sabres">Sabres</a></td><td>1</td><td><a href="OTHL-PRE-ProTeamRoster.php#RedWings">Red Wings</a></td><td>4</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-68.html">Game Direct Link</a></td></tr>
<tr><td>7</td><td>88</td><td><a href="OTHL-PRE-ProTeamRoster.php#Sabres">Sabres</a></td><td>3</td><td><a href="OTHL-PRE-ProTeamRoster.php#Bruins">Bruins</a></td><td>2</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-88.html">Game Direct Link</a></td></tr>
<tr><td>8</td><td>94</td><td><a href="OTHL-PRE-ProTeamRoster.php#RedWings">Red Wings</a></td><td>1</td><td><a href="OTHL-PRE-ProTeamRoster.php#Sabres">Sabres</a></td><td>5</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-94.html">Game Direct Link</a></td></tr>
<tr><td>9</td><td>117</td><td><a href="OTHL-PRE-ProTeamRoster.php#Panthers">Panthers</a></td><td>4</td><td><a href="OTHL-PRE-ProTeamRoster.php#Sabres">Sabres</a></td><td>5</td><td>W</td><td></td><td>*</td><td></td><td><a href="OTHL-PRE-117.html">Game Direct Link</a></td></tr>
<tr><td>11</td><td>140</td><td><a href="OTHL-PRE-ProTeamRoster.php#Sabres">Sabres</a></td><td>4</td><td><a href="OTHL-PRE-ProTeamRoster.php#Senators">Senators</a></td><td>1</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-140.html">Game Direct Link</a></td></tr>
<tr><td>12</td><td>146</td><td><a href="OTHL-PRE-ProTeamRoster.php#Canadiens">Canadiens</a></td><td>3</td><td><a href="OTHL-PRE-ProTeamRoster.php#Sabres">Sabres</a></td><td>1</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-146.html">Game Direct Link</a></td></tr>
<tr><td>13</td><td>168</td><td><a href="OTHL-PRE-ProTeamRoster.php#Senators">Senators</a></td><td>2</td><td><a href="OTHL-PRE-ProTeamRoster.php#Sabres">Sabres</a></td><td>4</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-168.html">Game Direct Link</a></td></tr>
<tr><td>15</td><td>191</td><td><a href="OTHL-PRE-ProTeamRoster.php#Sabres">Sabres</a></td><td>1</td><td><a href="OTHL-PRE-ProTeamRoster.php#Canadiens">Canadiens</a></td><td>3</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-191.html">Game Direct Link</a></td></tr>
<tr><td>16</td><td>200</td><td><a href="OTHL-PRE-ProTeamRoster.php#MapleLeafs">Maple Leafs</a></td><td>1</td><td><a href="OTHL-PRE-ProTeamRoster.php#Sabres">Sabres</a></td><td>3</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-200.html">Game Direct Link</a></td></tr>
<tr><td>18</td><td>215</td><td><a href="OTHL-PRE-ProTeamRoster.php#Sabres">Sabres</a></td><td>3</td><td><a href="OTHL-PRE-ProTeamRoster.php#MapleLeafs">Maple Leafs</a></td><td>2</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-215.html">Game Direct Link</a></td></tr>
</table></div>
<h1 class="TeamSchedulePro_OTT"><a id="Senators">Senators</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=21">Senators Page</a> ]
[ <a href="OTHL-PRE-ProTeamRoster.php#Senators">Pro Team Roster</a> ]
[ <a href="OTHL-PRE-ProTeamScoring.php#Senators">Pro Team Scoring</a> ]
[ <a href="OTHL-PRE-TeamFinance.php#Senators">Team Finance</a> ]
[ <a href="OTHL-PRE-ProTeamPlayersInfo.php#Senators">Pro Team PlayersInfo</a> ]
[ <a href="OTHL-PRE-ProTeamLines.php#Senators">Pro Team Lines</a> ]
[ <a href="OTHL-PRE-TeamProspects.php#Senators">Team Prospects</a> ]
[ <a href="OTHL-PRE-ProTeamSchedule.php#Senators">Pro Team Schedule</a> ]
[ <a href="OTHL-PRE-ProTeamStats.php#Senators">Pro Team Stats</a> ]
[ <a href="OTHL-PRE-ProTeamStatsVS.php#Senators">Pro Team Stats VS</a> ]
[ <a href="OTHL-PRE-TeamInjurySuspension.php#Senators">Team Injury Suspension</a> ]
[ <a href="OTHL-PRE-TeamHistory.php#Senators">Team History</a> ]
[ <a href="OTHL-PRE-TeamRecords.php#Senators">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Senators');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Senators" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW35">Day</th><th class="STHSW35">Game</th><th class="STHSW200">Visitor Team</th><th class="STHSW35">Score</th><th class="STHSW200">Home Team</th><th class="STHSW35">Score</th><th class="STHSW35">ST</th><th class="STHSW35">OT</th><th class="STHSW35">SO</th><th class="STHSW35">RI</th><th class="STHSW200">Link</th></tr></thead>
<tr><td>1</td><td>1</td><td><a href="OTHL-PRE-ProTeamRoster.php#Canadiens">Canadiens</a></td><td>4</td><td><a href="OTHL-PRE-ProTeamRoster.php#Senators">Senators</a></td><td>2</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-1.html">Game Direct Link</a></td></tr>
<tr><td>2</td><td>29</td><td><a href="OTHL-PRE-ProTeamRoster.php#Senators">Senators</a></td><td>0</td><td><a href="OTHL-PRE-ProTeamRoster.php#Bruins">Bruins</a></td><td>4</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-29.html">Game Direct Link</a></td></tr>
<tr><td>4</td><td>45</td><td><a href="OTHL-PRE-ProTeamRoster.php#MapleLeafs">Maple Leafs</a></td><td>2</td><td><a href="OTHL-PRE-ProTeamRoster.php#Senators">Senators</a></td><td>0</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-45.html">Game Direct Link</a></td></tr>
<tr><td>5</td><td>51</td><td><a href="OTHL-PRE-ProTeamRoster.php#Senators">Senators</a></td><td>1</td><td><a href="OTHL-PRE-ProTeamRoster.php#Canadiens">Canadiens</a></td><td>2</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-51.html">Game Direct Link</a></td></tr>
<tr><td>6</td><td>73</td><td><a href="OTHL-PRE-ProTeamRoster.php#Bruins">Bruins</a></td><td>3</td><td><a href="OTHL-PRE-ProTeamRoster.php#Senators">Senators</a></td><td>1</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-73.html">Game Direct Link</a></td></tr>
<tr><td>7</td><td>81</td><td><a href="OTHL-PRE-ProTeamRoster.php#Senators">Senators</a></td><td>1</td><td><a href="OTHL-PRE-ProTeamRoster.php#MapleLeafs">Maple Leafs</a></td><td>5</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-81.html">Game Direct Link</a></td></tr>
<tr><td>8</td><td>106</td><td><a href="OTHL-PRE-ProTeamRoster.php#Panthers">Panthers</a></td><td>1</td><td><a href="OTHL-PRE-ProTeamRoster.php#Senators">Senators</a></td><td>2</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-106.html">Game Direct Link</a></td></tr>
<tr><td>9</td><td>119</td><td><a href="OTHL-PRE-ProTeamRoster.php#Senators">Senators</a></td><td>5</td><td><a href="OTHL-PRE-ProTeamRoster.php#Lightning">Lightning</a></td><td>1</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-119.html">Game Direct Link</a></td></tr>
<tr><td>11</td><td>140</td><td><a href="OTHL-PRE-ProTeamRoster.php#Sabres">Sabres</a></td><td>4</td><td><a href="OTHL-PRE-ProTeamRoster.php#Senators">Senators</a></td><td>1</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-140.html">Game Direct Link</a></td></tr>
<tr><td>12</td><td>148</td><td><a href="OTHL-PRE-ProTeamRoster.php#Senators">Senators</a></td><td>3</td><td><a href="OTHL-PRE-ProTeamRoster.php#RedWings">Red Wings</a></td><td>4</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-148.html">Game Direct Link</a></td></tr>
<tr><td>13</td><td>168</td><td><a href="OTHL-PRE-ProTeamRoster.php#Senators">Senators</a></td><td>2</td><td><a href="OTHL-PRE-ProTeamRoster.php#Sabres">Sabres</a></td><td>4</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-168.html">Game Direct Link</a></td></tr>
<tr><td>15</td><td>180</td><td><a href="OTHL-PRE-ProTeamRoster.php#Lightning">Lightning</a></td><td>1</td><td><a href="OTHL-PRE-ProTeamRoster.php#Senators">Senators</a></td><td>0</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-180.html">Game Direct Link</a></td></tr>
<tr><td>16</td><td>203</td><td><a href="OTHL-PRE-ProTeamRoster.php#RedWings">Red Wings</a></td><td>4</td><td><a href="OTHL-PRE-ProTeamRoster.php#Senators">Senators</a></td><td>1</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-203.html">Game Direct Link</a></td></tr>
<tr><td>18</td><td>220</td><td><a href="OTHL-PRE-ProTeamRoster.php#Senators">Senators</a></td><td>4</td><td><a href="OTHL-PRE-ProTeamRoster.php#Panthers">Panthers</a></td><td>2</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-220.html">Game Direct Link</a></td></tr>
</table></div>
<h1 class="TeamSchedulePro_SJS"><a id="Sharks">Sharks</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=26">Sharks Page</a> ]
[ <a href="OTHL-PRE-ProTeamRoster.php#Sharks">Pro Team Roster</a> ]
[ <a href="OTHL-PRE-ProTeamScoring.php#Sharks">Pro Team Scoring</a> ]
[ <a href="OTHL-PRE-TeamFinance.php#Sharks">Team Finance</a> ]
[ <a href="OTHL-PRE-ProTeamPlayersInfo.php#Sharks">Pro Team PlayersInfo</a> ]
[ <a href="OTHL-PRE-ProTeamLines.php#Sharks">Pro Team Lines</a> ]
[ <a href="OTHL-PRE-TeamProspects.php#Sharks">Team Prospects</a> ]
[ <a href="OTHL-PRE-ProTeamSchedule.php#Sharks">Pro Team Schedule</a> ]
[ <a href="OTHL-PRE-ProTeamStats.php#Sharks">Pro Team Stats</a> ]
[ <a href="OTHL-PRE-ProTeamStatsVS.php#Sharks">Pro Team Stats VS</a> ]
[ <a href="OTHL-PRE-TeamInjurySuspension.php#Sharks">Team Injury Suspension</a> ]
[ <a href="OTHL-PRE-TeamHistory.php#Sharks">Team History</a> ]
[ <a href="OTHL-PRE-TeamRecords.php#Sharks">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Sharks');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Sharks" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW35">Day</th><th class="STHSW35">Game</th><th class="STHSW200">Visitor Team</th><th class="STHSW35">Score</th><th class="STHSW200">Home Team</th><th class="STHSW35">Score</th><th class="STHSW35">ST</th><th class="STHSW35">OT</th><th class="STHSW35">SO</th><th class="STHSW35">RI</th><th class="STHSW200">Link</th></tr></thead>
<tr><td>1</td><td>12</td><td><a href="OTHL-PRE-ProTeamRoster.php#Sharks">Sharks</a></td><td>4</td><td><a href="OTHL-PRE-ProTeamRoster.php#Kraken">Kraken</a></td><td>2</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-12.html">Game Direct Link</a></td></tr>
<tr><td>2</td><td>26</td><td><a href="OTHL-PRE-ProTeamRoster.php#Ducks">Ducks</a></td><td>2</td><td><a href="OTHL-PRE-ProTeamRoster.php#Sharks">Sharks</a></td><td>3</td><td>W</td><td>*</td><td></td><td></td><td><a href="OTHL-PRE-26.html">Game Direct Link</a></td></tr>
<tr><td>4</td><td>46</td><td><a href="OTHL-PRE-ProTeamRoster.php#Sharks">Sharks</a></td><td>4</td><td><a href="OTHL-PRE-ProTeamRoster.php#Kings">Kings</a></td><td>3</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-46.html">Game Direct Link</a></td></tr>
<tr><td>5</td><td>48</td><td><a href="OTHL-PRE-ProTeamRoster.php#Sharks">Sharks</a></td><td>2</td><td><a href="OTHL-PRE-ProTeamRoster.php#GoldenKnights">Golden Knights</a></td><td>3</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-48.html">Game Direct Link</a></td></tr>
<tr><td>6</td><td>63</td><td><a href="OTHL-PRE-ProTeamRoster.php#Flames">Flames</a></td><td>4</td><td><a href="OTHL-PRE-ProTeamRoster.php#Sharks">Sharks</a></td><td>0</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-63.html">Game Direct Link</a></td></tr>
<tr><td>7</td><td>80</td><td><a href="OTHL-PRE-ProTeamRoster.php#Sharks">Sharks</a></td><td>2</td><td><a href="OTHL-PRE-ProTeamRoster.php#Flames">Flames</a></td><td>4</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-80.html">Game Direct Link</a></td></tr>
<tr><td>8</td><td>97</td><td><a href="OTHL-PRE-ProTeamRoster.php#GoldenKnights">Golden Knights</a></td><td>2</td><td><a href="OTHL-PRE-ProTeamRoster.php#Sharks">Sharks</a></td><td>1</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-97.html">Game Direct Link</a></td></tr>
<tr><td>9</td><td>114</td><td><a href="OTHL-PRE-ProTeamRoster.php#Canucks">Canucks</a></td><td>3</td><td><a href="OTHL-PRE-ProTeamRoster.php#Sharks">Sharks</a></td><td>2</td><td>L</td><td></td><td>*</td><td></td><td><a href="OTHL-PRE-114.html">Game Direct Link</a></td></tr>
<tr><td>11</td><td>139</td><td><a href="OTHL-PRE-ProTeamRoster.php#Oilers">Oilers</a></td><td>2</td><td><a href="OTHL-PRE-ProTeamRoster.php#Sharks">Sharks</a></td><td>0</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-139.html">Game Direct Link</a></td></tr>
<tr><td>13</td><td>159</td><td><a href="OTHL-PRE-ProTeamRoster.php#Sharks">Sharks</a></td><td>1</td><td><a href="OTHL-PRE-ProTeamRoster.php#Canucks">Canucks</a></td><td>2</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-159.html">Game Direct Link</a></td></tr>
<tr><td>15</td><td>176</td><td><a href="OTHL-PRE-ProTeamRoster.php#Kings">Kings</a></td><td>4</td><td><a href="OTHL-PRE-ProTeamRoster.php#Sharks">Sharks</a></td><td>1</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-176.html">Game Direct Link</a></td></tr>
<tr><td>16</td><td>194</td><td><a href="OTHL-PRE-ProTeamRoster.php#Kraken">Kraken</a></td><td>4</td><td><a href="OTHL-PRE-ProTeamRoster.php#Sharks">Sharks</a></td><td>3</td><td>L</td><td>*</td><td></td><td></td><td><a href="OTHL-PRE-194.html">Game Direct Link</a></td></tr>
<tr><td>18</td><td>211</td><td><a href="OTHL-PRE-ProTeamRoster.php#Sharks">Sharks</a></td><td>5</td><td><a href="OTHL-PRE-ProTeamRoster.php#Oilers">Oilers</a></td><td>4</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-211.html">Game Direct Link</a></td></tr>
<tr><td>19</td><td>222</td><td><a href="OTHL-PRE-ProTeamRoster.php#Sharks">Sharks</a></td><td>5</td><td><a href="OTHL-PRE-ProTeamRoster.php#Ducks">Ducks</a></td><td>0</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-222.html">Game Direct Link</a></td></tr>
</table></div>
<h1 class="TeamSchedulePro_DAL"><a id="Stars">Stars</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=10">Stars Page</a> ]
[ <a href="OTHL-PRE-ProTeamRoster.php#Stars">Pro Team Roster</a> ]
[ <a href="OTHL-PRE-ProTeamScoring.php#Stars">Pro Team Scoring</a> ]
[ <a href="OTHL-PRE-TeamFinance.php#Stars">Team Finance</a> ]
[ <a href="OTHL-PRE-ProTeamPlayersInfo.php#Stars">Pro Team PlayersInfo</a> ]
[ <a href="OTHL-PRE-ProTeamLines.php#Stars">Pro Team Lines</a> ]
[ <a href="OTHL-PRE-TeamProspects.php#Stars">Team Prospects</a> ]
[ <a href="OTHL-PRE-ProTeamSchedule.php#Stars">Pro Team Schedule</a> ]
[ <a href="OTHL-PRE-ProTeamStats.php#Stars">Pro Team Stats</a> ]
[ <a href="OTHL-PRE-ProTeamStatsVS.php#Stars">Pro Team Stats VS</a> ]
[ <a href="OTHL-PRE-TeamInjurySuspension.php#Stars">Team Injury Suspension</a> ]
[ <a href="OTHL-PRE-TeamHistory.php#Stars">Team History</a> ]
[ <a href="OTHL-PRE-TeamRecords.php#Stars">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Stars');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Stars" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW35">Day</th><th class="STHSW35">Game</th><th class="STHSW200">Visitor Team</th><th class="STHSW35">Score</th><th class="STHSW200">Home Team</th><th class="STHSW35">Score</th><th class="STHSW35">ST</th><th class="STHSW35">OT</th><th class="STHSW35">SO</th><th class="STHSW35">RI</th><th class="STHSW200">Link</th></tr></thead>
<tr><td>1</td><td>6</td><td><a href="OTHL-PRE-ProTeamRoster.php#Avalanche">Avalanche</a></td><td>3</td><td><a href="OTHL-PRE-ProTeamRoster.php#Stars">Stars</a></td><td>0</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-6.html">Game Direct Link</a></td></tr>
<tr><td>2</td><td>27</td><td><a href="OTHL-PRE-ProTeamRoster.php#Stars">Stars</a></td><td>1</td><td><a href="OTHL-PRE-ProTeamRoster.php#Blues">Blues</a></td><td>3</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-27.html">Game Direct Link</a></td></tr>
<tr><td>4</td><td>39</td><td><a href="OTHL-PRE-ProTeamRoster.php#Stars">Stars</a></td><td>3</td><td><a href="OTHL-PRE-ProTeamRoster.php#Coyotes">Coyotes</a></td><td>2</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-39.html">Game Direct Link</a></td></tr>
<tr><td>5</td><td>57</td><td><a href="OTHL-PRE-ProTeamRoster.php#Stars">Stars</a></td><td>1</td><td><a href="OTHL-PRE-ProTeamRoster.php#Wild">Wild</a></td><td>3</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-57.html">Game Direct Link</a></td></tr>
<tr><td>6</td><td>62</td><td><a href="OTHL-PRE-ProTeamRoster.php#Predators">Predators</a></td><td>2</td><td><a href="OTHL-PRE-ProTeamRoster.php#Stars">Stars</a></td><td>3</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-62.html">Game Direct Link</a></td></tr>
<tr><td>7</td><td>90</td><td><a href="OTHL-PRE-ProTeamRoster.php#Jets">Jets</a></td><td>1</td><td><a href="OTHL-PRE-ProTeamRoster.php#Stars">Stars</a></td><td>3</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-90.html">Game Direct Link</a></td></tr>
<tr><td>8</td><td>105</td><td><a href="OTHL-PRE-ProTeamRoster.php#Wild">Wild</a></td><td>0</td><td><a href="OTHL-PRE-ProTeamRoster.php#Stars">Stars</a></td><td>3</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-105.html">Game Direct Link</a></td></tr>
<tr><td>9</td><td>116</td><td><a href="OTHL-PRE-ProTeamRoster.php#Stars">Stars</a></td><td>1</td><td><a href="OTHL-PRE-ProTeamRoster.php#Blackhawks">Blackhawks</a></td><td>2</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-116.html">Game Direct Link</a></td></tr>
<tr><td>10</td><td>132</td><td><a href="OTHL-PRE-ProTeamRoster.php#Stars">Stars</a></td><td>2</td><td><a href="OTHL-PRE-ProTeamRoster.php#Predators">Predators</a></td><td>1</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-132.html">Game Direct Link</a></td></tr>
<tr><td>12</td><td>153</td><td><a href="OTHL-PRE-ProTeamRoster.php#Stars">Stars</a></td><td>2</td><td><a href="OTHL-PRE-ProTeamRoster.php#Avalanche">Avalanche</a></td><td>1</td><td>W</td><td></td><td>*</td><td></td><td><a href="OTHL-PRE-153.html">Game Direct Link</a></td></tr>
<tr><td>13</td><td>158</td><td><a href="OTHL-PRE-ProTeamRoster.php#Coyotes">Coyotes</a></td><td>1</td><td><a href="OTHL-PRE-ProTeamRoster.php#Stars">Stars</a></td><td>3</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-158.html">Game Direct Link</a></td></tr>
<tr><td>14</td><td>173</td><td><a href="OTHL-PRE-ProTeamRoster.php#Stars">Stars</a></td><td>3</td><td><a href="OTHL-PRE-ProTeamRoster.php#Jets">Jets</a></td><td>5</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-173.html">Game Direct Link</a></td></tr>
<tr><td>15</td><td>190</td><td><a href="OTHL-PRE-ProTeamRoster.php#Blues">Blues</a></td><td>2</td><td><a href="OTHL-PRE-ProTeamRoster.php#Stars">Stars</a></td><td>3</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-190.html">Game Direct Link</a></td></tr>
<tr><td>17</td><td>208</td><td><a href="OTHL-PRE-ProTeamRoster.php#Blackhawks">Blackhawks</a></td><td>4</td><td><a href="OTHL-PRE-ProTeamRoster.php#Stars">Stars</a></td><td>2</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-208.html">Game Direct Link</a></td></tr>
</table></div>
<h1 class="TeamSchedulePro_MIN"><a id="Wild">Wild</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=15">Wild Page</a> ]
[ <a href="OTHL-PRE-ProTeamRoster.php#Wild">Pro Team Roster</a> ]
[ <a href="OTHL-PRE-ProTeamScoring.php#Wild">Pro Team Scoring</a> ]
[ <a href="OTHL-PRE-TeamFinance.php#Wild">Team Finance</a> ]
[ <a href="OTHL-PRE-ProTeamPlayersInfo.php#Wild">Pro Team PlayersInfo</a> ]
[ <a href="OTHL-PRE-ProTeamLines.php#Wild">Pro Team Lines</a> ]
[ <a href="OTHL-PRE-TeamProspects.php#Wild">Team Prospects</a> ]
[ <a href="OTHL-PRE-ProTeamSchedule.php#Wild">Pro Team Schedule</a> ]
[ <a href="OTHL-PRE-ProTeamStats.php#Wild">Pro Team Stats</a> ]
[ <a href="OTHL-PRE-ProTeamStatsVS.php#Wild">Pro Team Stats VS</a> ]
[ <a href="OTHL-PRE-TeamInjurySuspension.php#Wild">Team Injury Suspension</a> ]
[ <a href="OTHL-PRE-TeamHistory.php#Wild">Team History</a> ]
[ <a href="OTHL-PRE-TeamRecords.php#Wild">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Wild');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Wild" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW35">Day</th><th class="STHSW35">Game</th><th class="STHSW200">Visitor Team</th><th class="STHSW35">Score</th><th class="STHSW200">Home Team</th><th class="STHSW35">Score</th><th class="STHSW35">ST</th><th class="STHSW35">OT</th><th class="STHSW35">SO</th><th class="STHSW35">RI</th><th class="STHSW200">Link</th></tr></thead>
<tr><td>1</td><td>2</td><td><a href="OTHL-PRE-ProTeamRoster.php#Wild">Wild</a></td><td>3</td><td><a href="OTHL-PRE-ProTeamRoster.php#Jets">Jets</a></td><td>4</td><td>L</td><td>*</td><td></td><td></td><td><a href="OTHL-PRE-2.html">Game Direct Link</a></td></tr>
<tr><td>2</td><td>24</td><td><a href="OTHL-PRE-ProTeamRoster.php#Blackhawks">Blackhawks</a></td><td>2</td><td><a href="OTHL-PRE-ProTeamRoster.php#Wild">Wild</a></td><td>0</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-24.html">Game Direct Link</a></td></tr>
<tr><td>4</td><td>37</td><td><a href="OTHL-PRE-ProTeamRoster.php#Wild">Wild</a></td><td>1</td><td><a href="OTHL-PRE-ProTeamRoster.php#Blackhawks">Blackhawks</a></td><td>3</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-37.html">Game Direct Link</a></td></tr>
<tr><td>5</td><td>57</td><td><a href="OTHL-PRE-ProTeamRoster.php#Stars">Stars</a></td><td>1</td><td><a href="OTHL-PRE-ProTeamRoster.php#Wild">Wild</a></td><td>3</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-57.html">Game Direct Link</a></td></tr>
<tr><td>6</td><td>75</td><td><a href="OTHL-PRE-ProTeamRoster.php#Blues">Blues</a></td><td>2</td><td><a href="OTHL-PRE-ProTeamRoster.php#Wild">Wild</a></td><td>3</td><td>W</td><td>*</td><td></td><td></td><td><a href="OTHL-PRE-75.html">Game Direct Link</a></td></tr>
<tr><td>7</td><td>78</td><td><a href="OTHL-PRE-ProTeamRoster.php#Wild">Wild</a></td><td>2</td><td><a href="OTHL-PRE-ProTeamRoster.php#Predators">Predators</a></td><td>4</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-78.html">Game Direct Link</a></td></tr>
<tr><td>8</td><td>105</td><td><a href="OTHL-PRE-ProTeamRoster.php#Wild">Wild</a></td><td>0</td><td><a href="OTHL-PRE-ProTeamRoster.php#Stars">Stars</a></td><td>3</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-105.html">Game Direct Link</a></td></tr>
<tr><td>9</td><td>120</td><td><a href="OTHL-PRE-ProTeamRoster.php#Avalanche">Avalanche</a></td><td>2</td><td><a href="OTHL-PRE-ProTeamRoster.php#Wild">Wild</a></td><td>4</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-120.html">Game Direct Link</a></td></tr>
<tr><td>11</td><td>142</td><td><a href="OTHL-PRE-ProTeamRoster.php#Wild">Wild</a></td><td>0</td><td><a href="OTHL-PRE-ProTeamRoster.php#Blues">Blues</a></td><td>1</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-142.html">Game Direct Link</a></td></tr>
<tr><td>12</td><td>149</td><td><a href="OTHL-PRE-ProTeamRoster.php#Jets">Jets</a></td><td>3</td><td><a href="OTHL-PRE-ProTeamRoster.php#Wild">Wild</a></td><td>2</td><td>L</td><td>*</td><td></td><td></td><td><a href="OTHL-PRE-149.html">Game Direct Link</a></td></tr>
<tr><td>13</td><td>167</td><td><a href="OTHL-PRE-ProTeamRoster.php#Predators">Predators</a></td><td>1</td><td><a href="OTHL-PRE-ProTeamRoster.php#Wild">Wild</a></td><td>4</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-167.html">Game Direct Link</a></td></tr>
<tr><td>15</td><td>185</td><td><a href="OTHL-PRE-ProTeamRoster.php#Wild">Wild</a></td><td>3</td><td><a href="OTHL-PRE-ProTeamRoster.php#Avalanche">Avalanche</a></td><td>4</td><td>L</td><td>*</td><td></td><td></td><td><a href="OTHL-PRE-185.html">Game Direct Link</a></td></tr>
<tr><td>16</td><td>198</td><td><a href="OTHL-PRE-ProTeamRoster.php#Coyotes">Coyotes</a></td><td>3</td><td><a href="OTHL-PRE-ProTeamRoster.php#Wild">Wild</a></td><td>2</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-198.html">Game Direct Link</a></td></tr>
<tr><td>18</td><td>221</td><td><a href="OTHL-PRE-ProTeamRoster.php#Wild">Wild</a></td><td>0</td><td><a href="OTHL-PRE-ProTeamRoster.php#Coyotes">Coyotes</a></td><td>3</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-221.html">Game Direct Link</a></td></tr>
</table></div>
<?php include "Footer.php";?>
