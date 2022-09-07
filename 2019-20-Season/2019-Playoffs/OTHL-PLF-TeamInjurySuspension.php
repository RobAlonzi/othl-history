<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<title>OTHL - Team Injury Suspension</title>
<script src="OTHL-PLF.js"></script>
<meta name="author" content="Simon Tremblay, sths.simont.info" />
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="Decription" content="Tyler Bell - STHS - Version : 3.2.0.0 - OTHL-STHS.db - OTHL-STHSCareerStat.db"/>
<link href="STHSMain.css" rel="stylesheet" type="text/css" />
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
<h1 class="TeamInjurySuspension_COL"><a id="Avalanche">Avalanche</a></h1>
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
<br />
No Injury or Suspension.
</div>
<h1 class="TeamInjurySuspension_CHI"><a id="Blackhawks">Blackhawks</a></h1>
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
<br />
No Injury or Suspension.
</div>
<h1 class="TeamInjurySuspension_CLB"><a id="BlueJackets">Blue Jackets</a></h1>
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
<br />
No Injury or Suspension.
</div>
<h1 class="TeamInjurySuspension_STL"><a id="Blues">Blues</a></h1>
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
<br />
No Injury or Suspension.
</div>
<h1 class="TeamInjurySuspension_BOS"><a id="Bruins">Bruins</a></h1>
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
<br />
No Injury or Suspension.
</div>
<h1 class="TeamInjurySuspension_MTL"><a id="Canadiens">Canadiens</a></h1>
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
<br />
No Injury or Suspension.
</div>
<h1 class="TeamInjurySuspension_VAN"><a id="Canucks">Canucks</a></h1>
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
<br />
No Injury or Suspension.
</div>
<h1 class="TeamInjurySuspension_WSH"><a id="Capitals">Capitals</a></h1>
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
<br />
Andrew Campbell is suspended for 1 mores games.<br />
</div>
<h1 class="TeamInjurySuspension_ARI"><a id="Coyotes">Coyotes</a></h1>
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
<br />
No Injury or Suspension.
</div>
<h1 class="TeamInjurySuspension_NJD"><a id="Devils">Devils</a></h1>
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
<br />
No Injury or Suspension.
</div>
<h1 class="TeamInjurySuspension_ANH"><a id="Ducks">Ducks</a></h1>
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
<br />
No Injury or Suspension.
</div>
<h1 class="TeamInjurySuspension_CGY"><a id="Flames">Flames</a></h1>
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
<br />
No Injury or Suspension.
</div>
<h1 class="TeamInjurySuspension_PHL"><a id="Flyers">Flyers</a></h1>
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
<br />
No Injury or Suspension.
</div>
<h1 class="TeamInjurySuspension_VGK"><a id="GoldenKnights">Golden Knights</a></h1>
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
<br />
No Injury or Suspension.
</div>
<h1 class="TeamInjurySuspension_CAR"><a id="Hurricanes">Hurricanes</a></h1>
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
<br />
No Injury or Suspension.
</div>
<h1 class="TeamInjurySuspension_NYI"><a id="Islanders">Islanders</a></h1>
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
<br />
Victor Hedman is out for 1 week because of a Bruised Left Foot Injury.<br />
</div>
<h1 class="TeamInjurySuspension_WPG"><a id="Jets">Jets</a></h1>
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
<br />
No Injury or Suspension.
</div>
<h1 class="TeamInjurySuspension_LAK"><a id="Kings">Kings</a></h1>
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
<br />
No Injury or Suspension.
</div>
<h1 class="TeamInjurySuspension_TBL"><a id="Lightning">Lightning</a></h1>
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
<br />
No Injury or Suspension.
</div>
<h1 class="TeamInjurySuspension_TOR"><a id="MapleLeafs">Maple Leafs</a></h1>
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
<br />
Frederik Andersen is suspended for 8 mores games.<br />
</div>
<h1 class="TeamInjurySuspension_EDM"><a id="Oilers">Oilers</a></h1>
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
<br />
No Injury or Suspension.
</div>
<h1 class="TeamInjurySuspension_FLA"><a id="Panthers">Panthers</a></h1>
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
<br />
No Injury or Suspension.
</div>
<h1 class="TeamInjurySuspension_PIT"><a id="Penguins">Penguins</a></h1>
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
<br />
No Injury or Suspension.
</div>
<h1 class="TeamInjurySuspension_NSH"><a id="Predators">Predators</a></h1>
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
<br />
Kevan Miller is out for 0 days because of a Bruised Left Arm Injury.<br />
</div>
<h1 class="TeamInjurySuspension_NYR"><a id="Rangers">Rangers</a></h1>
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
<br />
No Injury or Suspension.
</div>
<h1 class="TeamInjurySuspension_DET"><a id="RedWings">Red Wings</a></h1>
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
<br />
No Injury or Suspension.
</div>
<h1 class="TeamInjurySuspension_BUF"><a id="Sabres">Sabres</a></h1>
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
<br />
No Injury or Suspension.
</div>
<h1 class="TeamInjurySuspension_OTT"><a id="Senators">Senators</a></h1>
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
<br />
No Injury or Suspension.
</div>
<h1 class="TeamInjurySuspension_SJS"><a id="Sharks">Sharks</a></h1>
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
<br />
No Injury or Suspension.
</div>
<h1 class="TeamInjurySuspension_DAL"><a id="Stars">Stars</a></h1>
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
<br />
No Injury or Suspension.
</div>
<h1 class="TeamInjurySuspension_MIN"><a id="Wild">Wild</a></h1>
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
<br />
No Injury or Suspension.
</div>
<h3 class="STHSTeamInjurySuspension_RecoverySpeed">Pro Injury Recovery Rate is 1.<br />Farm Injury Recovery Rate is 1.</h3>
<?php include "Footer.php";?>
