<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<title>OTHL - Farm Team Schedule</title>
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
<div class="STHSTopLink"><a id="STHSRosterTop"></a> <a href="#Eagles">Eagles</a> | <a href="#IceHogs">IceHogs</a> | <a href="#Monsters">Monsters</a> | <a href="#Rampage">Rampage </a> | <a href="#Bruins">Bruins</a> | <a href="#Rocket">Rocket</a> | <a href="#Comets">Comets</a> | <a href="#Bears">Bears</a> | <a href="#Roadrunners">Roadrunners</a> | <a href="#Devils">Devils</a> | <a href="#Gulls">Gulls</a> | <a href="#Heat">Heat</a> | <a href="#Phantoms">Phantoms</a> | <a href="#Wolves">Wolves</a> | <a href="#Checkers">Checkers</a> | <a href="#SoundTigers">Sound Tigers</a> | <a href="#Moose">Moose</a> | <a href="#Reign">Reign</a> | <a href="#Crunch">Crunch</a> | <a href="#Marlies">Marlies</a> | <a href="#Condors">Condors</a> | <a href="#Thunderbirds">Thunderbirds</a> | <a href="#Penguins">Penguins</a> | <a href="#Admirals">Admirals</a> | <a href="#WolfPack">Wolf Pack</a> | <a href="#Griffins">Griffins</a> | <a href="#Americans"> Americans</a> | <a href="#Senators">Senators</a> | <a href="#Barracudas">Barracudas</a> | <a href="#Stars">Stars</a> | <a href="#Wild">Wild</a> | <a href="javascript:STHS_JS_CloseAll('');">Close All Team View</a> | <a href="javascript:STHS_JS_OpenAll('');">Open All Team View</a>
</div>
<script>$(function(){$("table").basictablesorter()});</script>
<h1 class="TeamScheduleFarm_COL"><a id="Eagles">Eagles</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=8">Avalanche Page</a> ]
[ <a href="OTHL-PLF-ProTeamRoster.php#Avalanche">Pro Team Roster</a> ]
[ <a href="OTHL-PLF-FarmTeamScoring.php#Eagles">Farm Team Scoring</a> ]
[ <a href="OTHL-PLF-FarmTeamLines.php#Eagles">Farm Team Lines</a> ]
[ <a href="OTHL-PLF-FarmTeamSchedule.php#Eagles">Farm Team Schedule</a> ]
[ <a href="OTHL-PLF-FarmTeamStats.php#Eagles">Farm Team Stats</a> ]
[ <a href="OTHL-PLF-FarmTeamStatsVS.php#Eagles">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Eagles');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Eagles" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW35">Day</th><th class="STHSW35">Game</th><th class="STHSW200">Visitor Team</th><th class="STHSW35">Score</th><th class="STHSW200">Home Team</th><th class="STHSW35">Score</th><th class="STHSW35">ST</th><th class="STHSW35">OT</th><th class="STHSW35">SO</th><th class="STHSW35">RI</th><th class="STHSW200">Link</th></tr></thead>
</table></div>
<h1 class="TeamScheduleFarm_RCK"><a id="IceHogs">IceHogs</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=7">Blackhawks Page</a> ]
[ <a href="OTHL-PLF-ProTeamRoster.php#Blackhawks">Pro Team Roster</a> ]
[ <a href="OTHL-PLF-FarmTeamScoring.php#IceHogs">Farm Team Scoring</a> ]
[ <a href="OTHL-PLF-FarmTeamLines.php#IceHogs">Farm Team Lines</a> ]
[ <a href="OTHL-PLF-FarmTeamSchedule.php#IceHogs">Farm Team Schedule</a> ]
[ <a href="OTHL-PLF-FarmTeamStats.php#IceHogs">Farm Team Stats</a> ]
[ <a href="OTHL-PLF-FarmTeamStatsVS.php#IceHogs">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_IceHogs');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_IceHogs" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW35">Day</th><th class="STHSW35">Game</th><th class="STHSW200">Visitor Team</th><th class="STHSW35">Score</th><th class="STHSW200">Home Team</th><th class="STHSW35">Score</th><th class="STHSW35">ST</th><th class="STHSW35">OT</th><th class="STHSW35">SO</th><th class="STHSW35">RI</th><th class="STHSW200">Link</th></tr></thead>
<tr><td>2</td><td>7</td><td><a href="OTHL-PLF-ProTeamRoster.php#Sharks">Barracudas</a></td><td>5</td><td><a href="OTHL-PLF-ProTeamRoster.php#Blackhawks">IceHogs</a></td><td>4</td><td>L</td><td>*</td><td></td><td></td><td><a href="OTHL-PLF-Farm-7.html">Game Direct Link</a></td></tr>
<tr><td>4</td><td>15</td><td><a href="OTHL-PLF-ProTeamRoster.php#Sharks">Barracudas</a></td><td>4</td><td><a href="OTHL-PLF-ProTeamRoster.php#Blackhawks">IceHogs</a></td><td>7</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PLF-Farm-15.html">Game Direct Link</a></td></tr>
<tr><td>6</td><td>23</td><td><a href="OTHL-PLF-ProTeamRoster.php#Blackhawks">IceHogs</a></td><td>2</td><td><a href="OTHL-PLF-ProTeamRoster.php#Sharks">Barracudas</a></td><td>4</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PLF-Farm-23.html">Game Direct Link</a></td></tr>
<tr><td>8</td><td>31</td><td><a href="OTHL-PLF-ProTeamRoster.php#Blackhawks">IceHogs</a></td><td>8</td><td><a href="OTHL-PLF-ProTeamRoster.php#Sharks">Barracudas</a></td><td>6</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PLF-Farm-31.html">Game Direct Link</a></td></tr>
<tr><td>10</td><td>39</td><td><a href="OTHL-PLF-ProTeamRoster.php#Sharks">Barracudas</a></td><td>3</td><td><a href="OTHL-PLF-ProTeamRoster.php#Blackhawks">IceHogs</a></td><td>5</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PLF-Farm-39.html">Game Direct Link</a></td></tr>
<tr><td>12</td><td>47</td><td><a href="OTHL-PLF-ProTeamRoster.php#Blackhawks">IceHogs</a></td><td>6</td><td><a href="OTHL-PLF-ProTeamRoster.php#Sharks">Barracudas</a></td><td>7</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PLF-Farm-47.html">Game Direct Link</a></td></tr>
<tr><td>14</td><td>55</td><td><a href="OTHL-PLF-ProTeamRoster.php#Sharks">Barracudas</a></td><td>4</td><td><a href="OTHL-PLF-ProTeamRoster.php#Blackhawks">IceHogs</a></td><td>12</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PLF-Farm-55.html">Game Direct Link</a></td></tr>
<tr><td>16</td><td>60</td><td><a href="OTHL-PLF-ProTeamRoster.php#Blackhawks">IceHogs</a></td><td>2</td><td><a href="OTHL-PLF-ProTeamRoster.php#Oilers">Condors</a></td><td>4</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PLF-Farm-60.html">Game Direct Link</a></td></tr>
<tr><td>18</td><td>64</td><td><a href="OTHL-PLF-ProTeamRoster.php#Blackhawks">IceHogs</a></td><td>2</td><td><a href="OTHL-PLF-ProTeamRoster.php#Oilers">Condors</a></td><td>3</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PLF-Farm-64.html">Game Direct Link</a></td></tr>
<tr><td>20</td><td>68</td><td><a href="OTHL-PLF-ProTeamRoster.php#Oilers">Condors</a></td><td>4</td><td><a href="OTHL-PLF-ProTeamRoster.php#Blackhawks">IceHogs</a></td><td>3</td><td>L</td><td>*</td><td></td><td></td><td><a href="OTHL-PLF-Farm-68.html">Game Direct Link</a></td></tr>
<tr><td>22</td><td>72</td><td><a href="OTHL-PLF-ProTeamRoster.php#Oilers">Condors</a></td><td>4</td><td><a href="OTHL-PLF-ProTeamRoster.php#Blackhawks">IceHogs</a></td><td>1</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PLF-Farm-72.html">Game Direct Link</a></td></tr>
</table></div>
<h1 class="TeamScheduleFarm_CLE"><a id="Monsters">Monsters</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=9">Blue Jackets Page</a> ]
[ <a href="OTHL-PLF-ProTeamRoster.php#BlueJackets">Pro Team Roster</a> ]
[ <a href="OTHL-PLF-FarmTeamScoring.php#Monsters">Farm Team Scoring</a> ]
[ <a href="OTHL-PLF-FarmTeamLines.php#Monsters">Farm Team Lines</a> ]
[ <a href="OTHL-PLF-FarmTeamSchedule.php#Monsters">Farm Team Schedule</a> ]
[ <a href="OTHL-PLF-FarmTeamStats.php#Monsters">Farm Team Stats</a> ]
[ <a href="OTHL-PLF-FarmTeamStatsVS.php#Monsters">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Monsters');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Monsters" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW35">Day</th><th class="STHSW35">Game</th><th class="STHSW200">Visitor Team</th><th class="STHSW35">Score</th><th class="STHSW200">Home Team</th><th class="STHSW35">Score</th><th class="STHSW35">ST</th><th class="STHSW35">OT</th><th class="STHSW35">SO</th><th class="STHSW35">RI</th><th class="STHSW200">Link</th></tr></thead>
<tr><td>1</td><td>3</td><td><a href="OTHL-PLF-ProTeamRoster.php#Penguins">Penguins</a></td><td>4</td><td><a href="OTHL-PLF-ProTeamRoster.php#BlueJackets">Monsters</a></td><td>3</td><td>L</td><td>*</td><td></td><td></td><td><a href="OTHL-PLF-Farm-3.html">Game Direct Link</a></td></tr>
<tr><td>3</td><td>11</td><td><a href="OTHL-PLF-ProTeamRoster.php#Penguins">Penguins</a></td><td>5</td><td><a href="OTHL-PLF-ProTeamRoster.php#BlueJackets">Monsters</a></td><td>1</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PLF-Farm-11.html">Game Direct Link</a></td></tr>
<tr><td>5</td><td>19</td><td><a href="OTHL-PLF-ProTeamRoster.php#BlueJackets">Monsters</a></td><td>3</td><td><a href="OTHL-PLF-ProTeamRoster.php#Penguins">Penguins</a></td><td>2</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PLF-Farm-19.html">Game Direct Link</a></td></tr>
<tr><td>7</td><td>27</td><td><a href="OTHL-PLF-ProTeamRoster.php#BlueJackets">Monsters</a></td><td>6</td><td><a href="OTHL-PLF-ProTeamRoster.php#Penguins">Penguins</a></td><td>2</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PLF-Farm-27.html">Game Direct Link</a></td></tr>
<tr><td>9</td><td>35</td><td><a href="OTHL-PLF-ProTeamRoster.php#Penguins">Penguins</a></td><td>3</td><td><a href="OTHL-PLF-ProTeamRoster.php#BlueJackets">Monsters</a></td><td>2</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PLF-Farm-35.html">Game Direct Link</a></td></tr>
<tr><td>11</td><td>43</td><td><a href="OTHL-PLF-ProTeamRoster.php#BlueJackets">Monsters</a></td><td>3</td><td><a href="OTHL-PLF-ProTeamRoster.php#Penguins">Penguins</a></td><td>1</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PLF-Farm-43.html">Game Direct Link</a></td></tr>
<tr><td>13</td><td>51</td><td><a href="OTHL-PLF-ProTeamRoster.php#Penguins">Penguins</a></td><td>2</td><td><a href="OTHL-PLF-ProTeamRoster.php#BlueJackets">Monsters</a></td><td>3</td><td>W</td><td>*</td><td></td><td></td><td><a href="OTHL-PLF-Farm-51.html">Game Direct Link</a></td></tr>
<tr><td>15</td><td>58</td><td><a href="OTHL-PLF-ProTeamRoster.php#BlueJackets">Monsters</a></td><td>2</td><td><a href="OTHL-PLF-ProTeamRoster.php#Panthers">Thunderbirds</a></td><td>6</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PLF-Farm-58.html">Game Direct Link</a></td></tr>
<tr><td>17</td><td>62</td><td><a href="OTHL-PLF-ProTeamRoster.php#BlueJackets">Monsters</a></td><td>0</td><td><a href="OTHL-PLF-ProTeamRoster.php#Panthers">Thunderbirds</a></td><td>4</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PLF-Farm-62.html">Game Direct Link</a></td></tr>
<tr><td>19</td><td>66</td><td><a href="OTHL-PLF-ProTeamRoster.php#Panthers">Thunderbirds</a></td><td>1</td><td><a href="OTHL-PLF-ProTeamRoster.php#BlueJackets">Monsters</a></td><td>2</td><td>W</td><td>*</td><td></td><td></td><td><a href="OTHL-PLF-Farm-66.html">Game Direct Link</a></td></tr>
<tr><td>21</td><td>70</td><td><a href="OTHL-PLF-ProTeamRoster.php#Panthers">Thunderbirds</a></td><td>2</td><td><a href="OTHL-PLF-ProTeamRoster.php#BlueJackets">Monsters</a></td><td>1</td><td>L</td><td>*</td><td></td><td></td><td><a href="OTHL-PLF-Farm-70.html">Game Direct Link</a></td></tr>
<tr><td>23</td><td>74</td><td><a href="OTHL-PLF-ProTeamRoster.php#BlueJackets">Monsters</a></td><td>3</td><td><a href="OTHL-PLF-ProTeamRoster.php#Panthers">Thunderbirds</a></td><td>0</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PLF-Farm-74.html">Game Direct Link</a></td></tr>
<tr><td>25</td><td>78</td><td><a href="OTHL-PLF-ProTeamRoster.php#Panthers">Thunderbirds</a></td><td>2</td><td><a href="OTHL-PLF-ProTeamRoster.php#BlueJackets">Monsters</a></td><td>0</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PLF-Farm-78.html">Game Direct Link</a></td></tr>
</table></div>
<h1 class="TeamScheduleFarm_SAR"><a id="Rampage">Rampage </a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=25">Blues Page</a> ]
[ <a href="OTHL-PLF-ProTeamRoster.php#Blues">Pro Team Roster</a> ]
[ <a href="OTHL-PLF-FarmTeamScoring.php#Rampage">Farm Team Scoring</a> ]
[ <a href="OTHL-PLF-FarmTeamLines.php#Rampage">Farm Team Lines</a> ]
[ <a href="OTHL-PLF-FarmTeamSchedule.php#Rampage">Farm Team Schedule</a> ]
[ <a href="OTHL-PLF-FarmTeamStats.php#Rampage">Farm Team Stats</a> ]
[ <a href="OTHL-PLF-FarmTeamStatsVS.php#Rampage">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Rampage');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Rampage" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW35">Day</th><th class="STHSW35">Game</th><th class="STHSW200">Visitor Team</th><th class="STHSW35">Score</th><th class="STHSW200">Home Team</th><th class="STHSW35">Score</th><th class="STHSW35">ST</th><th class="STHSW35">OT</th><th class="STHSW35">SO</th><th class="STHSW35">RI</th><th class="STHSW200">Link</th></tr></thead>
</table></div>
<h1 class="TeamScheduleFarm_PRO"><a id="Bruins">Bruins</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=3">Bruins Page</a> ]
[ <a href="OTHL-PLF-ProTeamRoster.php#Bruins">Pro Team Roster</a> ]
[ <a href="OTHL-PLF-FarmTeamScoring.php#Bruins">Farm Team Scoring</a> ]
[ <a href="OTHL-PLF-FarmTeamLines.php#Bruins">Farm Team Lines</a> ]
[ <a href="OTHL-PLF-FarmTeamSchedule.php#Bruins">Farm Team Schedule</a> ]
[ <a href="OTHL-PLF-FarmTeamStats.php#Bruins">Farm Team Stats</a> ]
[ <a href="OTHL-PLF-FarmTeamStatsVS.php#Bruins">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Bruins');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Bruins" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW35">Day</th><th class="STHSW35">Game</th><th class="STHSW200">Visitor Team</th><th class="STHSW35">Score</th><th class="STHSW200">Home Team</th><th class="STHSW35">Score</th><th class="STHSW35">ST</th><th class="STHSW35">OT</th><th class="STHSW35">SO</th><th class="STHSW35">RI</th><th class="STHSW200">Link</th></tr></thead>
<tr><td>1</td><td>2</td><td><a href="OTHL-PLF-ProTeamRoster.php#Bruins">Bruins</a></td><td>1</td><td><a href="OTHL-PLF-ProTeamRoster.php#Panthers">Thunderbirds</a></td><td>2</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PLF-Farm-2.html">Game Direct Link</a></td></tr>
<tr><td>3</td><td>10</td><td><a href="OTHL-PLF-ProTeamRoster.php#Bruins">Bruins</a></td><td>1</td><td><a href="OTHL-PLF-ProTeamRoster.php#Panthers">Thunderbirds</a></td><td>2</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PLF-Farm-10.html">Game Direct Link</a></td></tr>
<tr><td>5</td><td>18</td><td><a href="OTHL-PLF-ProTeamRoster.php#Panthers">Thunderbirds</a></td><td>0</td><td><a href="OTHL-PLF-ProTeamRoster.php#Bruins">Bruins</a></td><td>2</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PLF-Farm-18.html">Game Direct Link</a></td></tr>
<tr><td>7</td><td>26</td><td><a href="OTHL-PLF-ProTeamRoster.php#Panthers">Thunderbirds</a></td><td>1</td><td><a href="OTHL-PLF-ProTeamRoster.php#Bruins">Bruins</a></td><td>2</td><td>W</td><td>*</td><td></td><td></td><td><a href="OTHL-PLF-Farm-26.html">Game Direct Link</a></td></tr>
<tr><td>9</td><td>34</td><td><a href="OTHL-PLF-ProTeamRoster.php#Bruins">Bruins</a></td><td>2</td><td><a href="OTHL-PLF-ProTeamRoster.php#Panthers">Thunderbirds</a></td><td>4</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PLF-Farm-34.html">Game Direct Link</a></td></tr>
<tr><td>11</td><td>42</td><td><a href="OTHL-PLF-ProTeamRoster.php#Panthers">Thunderbirds</a></td><td>3</td><td><a href="OTHL-PLF-ProTeamRoster.php#Bruins">Bruins</a></td><td>4</td><td>W</td><td>*</td><td></td><td></td><td><a href="OTHL-PLF-Farm-42.html">Game Direct Link</a></td></tr>
<tr><td>13</td><td>50</td><td><a href="OTHL-PLF-ProTeamRoster.php#Bruins">Bruins</a></td><td>0</td><td><a href="OTHL-PLF-ProTeamRoster.php#Panthers">Thunderbirds</a></td><td>2</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PLF-Farm-50.html">Game Direct Link</a></td></tr>
</table></div>
<h1 class="TeamScheduleFarm_LAV"><a id="Rocket">Rocket</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=16">Canadiens Page</a> ]
[ <a href="OTHL-PLF-ProTeamRoster.php#Canadiens">Pro Team Roster</a> ]
[ <a href="OTHL-PLF-FarmTeamScoring.php#Rocket">Farm Team Scoring</a> ]
[ <a href="OTHL-PLF-FarmTeamLines.php#Rocket">Farm Team Lines</a> ]
[ <a href="OTHL-PLF-FarmTeamSchedule.php#Rocket">Farm Team Schedule</a> ]
[ <a href="OTHL-PLF-FarmTeamStats.php#Rocket">Farm Team Stats</a> ]
[ <a href="OTHL-PLF-FarmTeamStatsVS.php#Rocket">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Rocket');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Rocket" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW35">Day</th><th class="STHSW35">Game</th><th class="STHSW200">Visitor Team</th><th class="STHSW35">Score</th><th class="STHSW200">Home Team</th><th class="STHSW35">Score</th><th class="STHSW35">ST</th><th class="STHSW35">OT</th><th class="STHSW35">SO</th><th class="STHSW35">RI</th><th class="STHSW200">Link</th></tr></thead>
</table></div>
<h1 class="TeamScheduleFarm_UTI"><a id="Comets">Comets</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=29">Canucks Page</a> ]
[ <a href="OTHL-PLF-ProTeamRoster.php#Canucks">Pro Team Roster</a> ]
[ <a href="OTHL-PLF-FarmTeamScoring.php#Comets">Farm Team Scoring</a> ]
[ <a href="OTHL-PLF-FarmTeamLines.php#Comets">Farm Team Lines</a> ]
[ <a href="OTHL-PLF-FarmTeamSchedule.php#Comets">Farm Team Schedule</a> ]
[ <a href="OTHL-PLF-FarmTeamStats.php#Comets">Farm Team Stats</a> ]
[ <a href="OTHL-PLF-FarmTeamStatsVS.php#Comets">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Comets');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Comets" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW35">Day</th><th class="STHSW35">Game</th><th class="STHSW200">Visitor Team</th><th class="STHSW35">Score</th><th class="STHSW200">Home Team</th><th class="STHSW35">Score</th><th class="STHSW35">ST</th><th class="STHSW35">OT</th><th class="STHSW35">SO</th><th class="STHSW35">RI</th><th class="STHSW200">Link</th></tr></thead>
<tr><td>1</td><td>1</td><td><a href="OTHL-PLF-ProTeamRoster.php#Flyers">Phantoms</a></td><td>2</td><td><a href="OTHL-PLF-ProTeamRoster.php#Canucks">Comets</a></td><td>1</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PLF-Farm-1.html">Game Direct Link</a></td></tr>
<tr><td>3</td><td>9</td><td><a href="OTHL-PLF-ProTeamRoster.php#Flyers">Phantoms</a></td><td>1</td><td><a href="OTHL-PLF-ProTeamRoster.php#Canucks">Comets</a></td><td>2</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PLF-Farm-9.html">Game Direct Link</a></td></tr>
<tr><td>5</td><td>17</td><td><a href="OTHL-PLF-ProTeamRoster.php#Canucks">Comets</a></td><td>4</td><td><a href="OTHL-PLF-ProTeamRoster.php#Flyers">Phantoms</a></td><td>3</td><td>W</td><td>*</td><td></td><td></td><td><a href="OTHL-PLF-Farm-17.html">Game Direct Link</a></td></tr>
<tr><td>7</td><td>25</td><td><a href="OTHL-PLF-ProTeamRoster.php#Canucks">Comets</a></td><td>2</td><td><a href="OTHL-PLF-ProTeamRoster.php#Flyers">Phantoms</a></td><td>3</td><td>L</td><td>*</td><td></td><td></td><td><a href="OTHL-PLF-Farm-25.html">Game Direct Link</a></td></tr>
<tr><td>9</td><td>33</td><td><a href="OTHL-PLF-ProTeamRoster.php#Flyers">Phantoms</a></td><td>2</td><td><a href="OTHL-PLF-ProTeamRoster.php#Canucks">Comets</a></td><td>6</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PLF-Farm-33.html">Game Direct Link</a></td></tr>
<tr><td>11</td><td>41</td><td><a href="OTHL-PLF-ProTeamRoster.php#Canucks">Comets</a></td><td>0</td><td><a href="OTHL-PLF-ProTeamRoster.php#Flyers">Phantoms</a></td><td>5</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PLF-Farm-41.html">Game Direct Link</a></td></tr>
<tr><td>13</td><td>49</td><td><a href="OTHL-PLF-ProTeamRoster.php#Flyers">Phantoms</a></td><td>0</td><td><a href="OTHL-PLF-ProTeamRoster.php#Canucks">Comets</a></td><td>1</td><td>W</td><td>*</td><td></td><td></td><td><a href="OTHL-PLF-Farm-49.html">Game Direct Link</a></td></tr>
<tr><td>15</td><td>57</td><td><a href="OTHL-PLF-ProTeamRoster.php#MapleLeafs">Marlies</a></td><td>0</td><td><a href="OTHL-PLF-ProTeamRoster.php#Canucks">Comets</a></td><td>3</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PLF-Farm-57.html">Game Direct Link</a></td></tr>
<tr><td>17</td><td>61</td><td><a href="OTHL-PLF-ProTeamRoster.php#MapleLeafs">Marlies</a></td><td>1</td><td><a href="OTHL-PLF-ProTeamRoster.php#Canucks">Comets</a></td><td>2</td><td>W</td><td>*</td><td></td><td></td><td><a href="OTHL-PLF-Farm-61.html">Game Direct Link</a></td></tr>
<tr><td>19</td><td>65</td><td><a href="OTHL-PLF-ProTeamRoster.php#Canucks">Comets</a></td><td>2</td><td><a href="OTHL-PLF-ProTeamRoster.php#MapleLeafs">Marlies</a></td><td>0</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PLF-Farm-65.html">Game Direct Link</a></td></tr>
<tr><td>21</td><td>69</td><td><a href="OTHL-PLF-ProTeamRoster.php#Canucks">Comets</a></td><td>4</td><td><a href="OTHL-PLF-ProTeamRoster.php#MapleLeafs">Marlies</a></td><td>3</td><td>W</td><td>*</td><td></td><td></td><td><a href="OTHL-PLF-Farm-69.html">Game Direct Link</a></td></tr>
<tr><td>29</td><td>85</td><td><a href="OTHL-PLF-ProTeamRoster.php#Panthers">Thunderbirds</a></td><td>0</td><td><a href="OTHL-PLF-ProTeamRoster.php#Canucks">Comets</a></td><td>2</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PLF-Farm-85.html">Game Direct Link</a></td></tr>
<tr><td>31</td><td>87</td><td><a href="OTHL-PLF-ProTeamRoster.php#Panthers">Thunderbirds</a></td><td>5</td><td><a href="OTHL-PLF-ProTeamRoster.php#Canucks">Comets</a></td><td>1</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PLF-Farm-87.html">Game Direct Link</a></td></tr>
<tr><td>33</td><td>89</td><td><a href="OTHL-PLF-ProTeamRoster.php#Canucks">Comets</a></td><td>2</td><td><a href="OTHL-PLF-ProTeamRoster.php#Panthers">Thunderbirds</a></td><td>0</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PLF-Farm-89.html">Game Direct Link</a></td></tr>
<tr><td>35</td><td>91</td><td><a href="OTHL-PLF-ProTeamRoster.php#Canucks">Comets</a></td><td>1</td><td><a href="OTHL-PLF-ProTeamRoster.php#Panthers">Thunderbirds</a></td><td>2</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PLF-Farm-91.html">Game Direct Link</a></td></tr>
<tr><td>37</td><td>93</td><td><a href="OTHL-PLF-ProTeamRoster.php#Panthers">Thunderbirds</a></td><td>2</td><td><a href="OTHL-PLF-ProTeamRoster.php#Canucks">Comets</a></td><td>4</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PLF-Farm-93.html">Game Direct Link</a></td></tr>
<tr><td>39</td><td>95</td><td><a href="OTHL-PLF-ProTeamRoster.php#Canucks">Comets</a></td><td>2</td><td><a href="OTHL-PLF-ProTeamRoster.php#Panthers">Thunderbirds</a></td><td>1</td><td>W</td><td>*</td><td></td><td></td><td><a href="OTHL-PLF-Farm-95.html">Game Direct Link</a></td></tr>
<tr><td>43</td><td>99</td><td><a href="OTHL-PLF-ProTeamRoster.php#Oilers">Condors</a></td><td>1</td><td><a href="OTHL-PLF-ProTeamRoster.php#Canucks">Comets</a></td><td>2</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PLF-Farm-99.html">Game Direct Link</a></td></tr>
<tr><td>44</td><td>100</td><td><a href="OTHL-PLF-ProTeamRoster.php#Oilers">Condors</a></td><td>2</td><td><a href="OTHL-PLF-ProTeamRoster.php#Canucks">Comets</a></td><td>4</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PLF-Farm-100.html">Game Direct Link</a></td></tr>
<tr><td>45</td><td>101</td><td><a href="OTHL-PLF-ProTeamRoster.php#Canucks">Comets</a></td><td>5</td><td><a href="OTHL-PLF-ProTeamRoster.php#Oilers">Condors</a></td><td>3</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PLF-Farm-101.html">Game Direct Link</a></td></tr>
<tr><td>46</td><td>102</td><td><a href="OTHL-PLF-ProTeamRoster.php#Canucks">Comets</a></td><td>5</td><td><a href="OTHL-PLF-ProTeamRoster.php#Oilers">Condors</a></td><td>2</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PLF-Farm-102.html">Game Direct Link</a></td></tr>
</table></div>
<h1 class="TeamScheduleFarm_HER"><a id="Bears">Bears</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=30">Capitals Page</a> ]
[ <a href="OTHL-PLF-ProTeamRoster.php#Capitals">Pro Team Roster</a> ]
[ <a href="OTHL-PLF-FarmTeamScoring.php#Bears">Farm Team Scoring</a> ]
[ <a href="OTHL-PLF-FarmTeamLines.php#Bears">Farm Team Lines</a> ]
[ <a href="OTHL-PLF-FarmTeamSchedule.php#Bears">Farm Team Schedule</a> ]
[ <a href="OTHL-PLF-FarmTeamStats.php#Bears">Farm Team Stats</a> ]
[ <a href="OTHL-PLF-FarmTeamStatsVS.php#Bears">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Bears');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Bears" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW35">Day</th><th class="STHSW35">Game</th><th class="STHSW200">Visitor Team</th><th class="STHSW35">Score</th><th class="STHSW200">Home Team</th><th class="STHSW35">Score</th><th class="STHSW35">ST</th><th class="STHSW35">OT</th><th class="STHSW35">SO</th><th class="STHSW35">RI</th><th class="STHSW200">Link</th></tr></thead>
</table></div>
<h1 class="TeamScheduleFarm_TUC"><a id="Roadrunners">Roadrunners</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=23">Coyotes Page</a> ]
[ <a href="OTHL-PLF-ProTeamRoster.php#Coyotes">Pro Team Roster</a> ]
[ <a href="OTHL-PLF-FarmTeamScoring.php#Roadrunners">Farm Team Scoring</a> ]
[ <a href="OTHL-PLF-FarmTeamLines.php#Roadrunners">Farm Team Lines</a> ]
[ <a href="OTHL-PLF-FarmTeamSchedule.php#Roadrunners">Farm Team Schedule</a> ]
[ <a href="OTHL-PLF-FarmTeamStats.php#Roadrunners">Farm Team Stats</a> ]
[ <a href="OTHL-PLF-FarmTeamStatsVS.php#Roadrunners">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Roadrunners');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Roadrunners" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW35">Day</th><th class="STHSW35">Game</th><th class="STHSW200">Visitor Team</th><th class="STHSW35">Score</th><th class="STHSW200">Home Team</th><th class="STHSW35">Score</th><th class="STHSW35">ST</th><th class="STHSW35">OT</th><th class="STHSW35">SO</th><th class="STHSW35">RI</th><th class="STHSW200">Link</th></tr></thead>
</table></div>
<h1 class="TeamScheduleFarm_BNG"><a id="Devils">Devils</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=18">Devils Page</a> ]
[ <a href="OTHL-PLF-ProTeamRoster.php#Devils">Pro Team Roster</a> ]
[ <a href="OTHL-PLF-FarmTeamScoring.php#Devils">Farm Team Scoring</a> ]
[ <a href="OTHL-PLF-FarmTeamLines.php#Devils">Farm Team Lines</a> ]
[ <a href="OTHL-PLF-FarmTeamSchedule.php#Devils">Farm Team Schedule</a> ]
[ <a href="OTHL-PLF-FarmTeamStats.php#Devils">Farm Team Stats</a> ]
[ <a href="OTHL-PLF-FarmTeamStatsVS.php#Devils">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Devils');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Devils" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW35">Day</th><th class="STHSW35">Game</th><th class="STHSW200">Visitor Team</th><th class="STHSW35">Score</th><th class="STHSW200">Home Team</th><th class="STHSW35">Score</th><th class="STHSW35">ST</th><th class="STHSW35">OT</th><th class="STHSW35">SO</th><th class="STHSW35">RI</th><th class="STHSW200">Link</th></tr></thead>
</table></div>
<h1 class="TeamScheduleFarm_SDG"><a id="Gulls">Gulls</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=1">Ducks Page</a> ]
[ <a href="OTHL-PLF-ProTeamRoster.php#Ducks">Pro Team Roster</a> ]
[ <a href="OTHL-PLF-FarmTeamScoring.php#Gulls">Farm Team Scoring</a> ]
[ <a href="OTHL-PLF-FarmTeamLines.php#Gulls">Farm Team Lines</a> ]
[ <a href="OTHL-PLF-FarmTeamSchedule.php#Gulls">Farm Team Schedule</a> ]
[ <a href="OTHL-PLF-FarmTeamStats.php#Gulls">Farm Team Stats</a> ]
[ <a href="OTHL-PLF-FarmTeamStatsVS.php#Gulls">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Gulls');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Gulls" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW35">Day</th><th class="STHSW35">Game</th><th class="STHSW200">Visitor Team</th><th class="STHSW35">Score</th><th class="STHSW200">Home Team</th><th class="STHSW35">Score</th><th class="STHSW35">ST</th><th class="STHSW35">OT</th><th class="STHSW35">SO</th><th class="STHSW35">RI</th><th class="STHSW200">Link</th></tr></thead>
</table></div>
<h1 class="TeamScheduleFarm_STK"><a id="Heat">Heat</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=5">Flames Page</a> ]
[ <a href="OTHL-PLF-ProTeamRoster.php#Flames">Pro Team Roster</a> ]
[ <a href="OTHL-PLF-FarmTeamScoring.php#Heat">Farm Team Scoring</a> ]
[ <a href="OTHL-PLF-FarmTeamLines.php#Heat">Farm Team Lines</a> ]
[ <a href="OTHL-PLF-FarmTeamSchedule.php#Heat">Farm Team Schedule</a> ]
[ <a href="OTHL-PLF-FarmTeamStats.php#Heat">Farm Team Stats</a> ]
[ <a href="OTHL-PLF-FarmTeamStatsVS.php#Heat">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Heat');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Heat" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW35">Day</th><th class="STHSW35">Game</th><th class="STHSW200">Visitor Team</th><th class="STHSW35">Score</th><th class="STHSW200">Home Team</th><th class="STHSW35">Score</th><th class="STHSW35">ST</th><th class="STHSW35">OT</th><th class="STHSW35">SO</th><th class="STHSW35">RI</th><th class="STHSW200">Link</th></tr></thead>
<tr><td>2</td><td>6</td><td><a href="OTHL-PLF-ProTeamRoster.php#Flames">Heat</a></td><td>3</td><td><a href="OTHL-PLF-ProTeamRoster.php#Oilers">Condors</a></td><td>5</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PLF-Farm-6.html">Game Direct Link</a></td></tr>
<tr><td>4</td><td>14</td><td><a href="OTHL-PLF-ProTeamRoster.php#Flames">Heat</a></td><td>1</td><td><a href="OTHL-PLF-ProTeamRoster.php#Oilers">Condors</a></td><td>5</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PLF-Farm-14.html">Game Direct Link</a></td></tr>
<tr><td>6</td><td>22</td><td><a href="OTHL-PLF-ProTeamRoster.php#Oilers">Condors</a></td><td>2</td><td><a href="OTHL-PLF-ProTeamRoster.php#Flames">Heat</a></td><td>1</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PLF-Farm-22.html">Game Direct Link</a></td></tr>
<tr><td>8</td><td>30</td><td><a href="OTHL-PLF-ProTeamRoster.php#Oilers">Condors</a></td><td>3</td><td><a href="OTHL-PLF-ProTeamRoster.php#Flames">Heat</a></td><td>1</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PLF-Farm-30.html">Game Direct Link</a></td></tr>
</table></div>
<h1 class="TeamScheduleFarm_LVP"><a id="Phantoms">Phantoms</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=22">Flyers Page</a> ]
[ <a href="OTHL-PLF-ProTeamRoster.php#Flyers">Pro Team Roster</a> ]
[ <a href="OTHL-PLF-FarmTeamScoring.php#Phantoms">Farm Team Scoring</a> ]
[ <a href="OTHL-PLF-FarmTeamLines.php#Phantoms">Farm Team Lines</a> ]
[ <a href="OTHL-PLF-FarmTeamSchedule.php#Phantoms">Farm Team Schedule</a> ]
[ <a href="OTHL-PLF-FarmTeamStats.php#Phantoms">Farm Team Stats</a> ]
[ <a href="OTHL-PLF-FarmTeamStatsVS.php#Phantoms">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Phantoms');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Phantoms" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW35">Day</th><th class="STHSW35">Game</th><th class="STHSW200">Visitor Team</th><th class="STHSW35">Score</th><th class="STHSW200">Home Team</th><th class="STHSW35">Score</th><th class="STHSW35">ST</th><th class="STHSW35">OT</th><th class="STHSW35">SO</th><th class="STHSW35">RI</th><th class="STHSW200">Link</th></tr></thead>
<tr><td>1</td><td>1</td><td><a href="OTHL-PLF-ProTeamRoster.php#Flyers">Phantoms</a></td><td>2</td><td><a href="OTHL-PLF-ProTeamRoster.php#Canucks">Comets</a></td><td>1</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PLF-Farm-1.html">Game Direct Link</a></td></tr>
<tr><td>3</td><td>9</td><td><a href="OTHL-PLF-ProTeamRoster.php#Flyers">Phantoms</a></td><td>1</td><td><a href="OTHL-PLF-ProTeamRoster.php#Canucks">Comets</a></td><td>2</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PLF-Farm-9.html">Game Direct Link</a></td></tr>
<tr><td>5</td><td>17</td><td><a href="OTHL-PLF-ProTeamRoster.php#Canucks">Comets</a></td><td>4</td><td><a href="OTHL-PLF-ProTeamRoster.php#Flyers">Phantoms</a></td><td>3</td><td>L</td><td>*</td><td></td><td></td><td><a href="OTHL-PLF-Farm-17.html">Game Direct Link</a></td></tr>
<tr><td>7</td><td>25</td><td><a href="OTHL-PLF-ProTeamRoster.php#Canucks">Comets</a></td><td>2</td><td><a href="OTHL-PLF-ProTeamRoster.php#Flyers">Phantoms</a></td><td>3</td><td>W</td><td>*</td><td></td><td></td><td><a href="OTHL-PLF-Farm-25.html">Game Direct Link</a></td></tr>
<tr><td>9</td><td>33</td><td><a href="OTHL-PLF-ProTeamRoster.php#Flyers">Phantoms</a></td><td>2</td><td><a href="OTHL-PLF-ProTeamRoster.php#Canucks">Comets</a></td><td>6</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PLF-Farm-33.html">Game Direct Link</a></td></tr>
<tr><td>11</td><td>41</td><td><a href="OTHL-PLF-ProTeamRoster.php#Canucks">Comets</a></td><td>0</td><td><a href="OTHL-PLF-ProTeamRoster.php#Flyers">Phantoms</a></td><td>5</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PLF-Farm-41.html">Game Direct Link</a></td></tr>
<tr><td>13</td><td>49</td><td><a href="OTHL-PLF-ProTeamRoster.php#Flyers">Phantoms</a></td><td>0</td><td><a href="OTHL-PLF-ProTeamRoster.php#Canucks">Comets</a></td><td>1</td><td>L</td><td>*</td><td></td><td></td><td><a href="OTHL-PLF-Farm-49.html">Game Direct Link</a></td></tr>
</table></div>
<h1 class="TeamScheduleFarm_CHI"><a id="Wolves">Wolves</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=31">Golden Knights Page</a> ]
[ <a href="OTHL-PLF-ProTeamRoster.php#GoldenKnights">Pro Team Roster</a> ]
[ <a href="OTHL-PLF-FarmTeamScoring.php#Wolves">Farm Team Scoring</a> ]
[ <a href="OTHL-PLF-FarmTeamLines.php#Wolves">Farm Team Lines</a> ]
[ <a href="OTHL-PLF-FarmTeamSchedule.php#Wolves">Farm Team Schedule</a> ]
[ <a href="OTHL-PLF-FarmTeamStats.php#Wolves">Farm Team Stats</a> ]
[ <a href="OTHL-PLF-FarmTeamStatsVS.php#Wolves">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Wolves');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Wolves" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW35">Day</th><th class="STHSW35">Game</th><th class="STHSW200">Visitor Team</th><th class="STHSW35">Score</th><th class="STHSW200">Home Team</th><th class="STHSW35">Score</th><th class="STHSW35">ST</th><th class="STHSW35">OT</th><th class="STHSW35">SO</th><th class="STHSW35">RI</th><th class="STHSW200">Link</th></tr></thead>
<tr><td>2</td><td>5</td><td><a href="OTHL-PLF-ProTeamRoster.php#GoldenKnights">Wolves</a></td><td>1</td><td><a href="OTHL-PLF-ProTeamRoster.php#Predators">Admirals</a></td><td>2</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PLF-Farm-5.html">Game Direct Link</a></td></tr>
<tr><td>4</td><td>13</td><td><a href="OTHL-PLF-ProTeamRoster.php#GoldenKnights">Wolves</a></td><td>1</td><td><a href="OTHL-PLF-ProTeamRoster.php#Predators">Admirals</a></td><td>6</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PLF-Farm-13.html">Game Direct Link</a></td></tr>
<tr><td>6</td><td>21</td><td><a href="OTHL-PLF-ProTeamRoster.php#Predators">Admirals</a></td><td>5</td><td><a href="OTHL-PLF-ProTeamRoster.php#GoldenKnights">Wolves</a></td><td>0</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PLF-Farm-21.html">Game Direct Link</a></td></tr>
<tr><td>8</td><td>29</td><td><a href="OTHL-PLF-ProTeamRoster.php#Predators">Admirals</a></td><td>3</td><td><a href="OTHL-PLF-ProTeamRoster.php#GoldenKnights">Wolves</a></td><td>2</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PLF-Farm-29.html">Game Direct Link</a></td></tr>
</table></div>
<h1 class="TeamScheduleFarm_CHR"><a id="Checkers">Checkers</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=6">Hurricanes Page</a> ]
[ <a href="OTHL-PLF-ProTeamRoster.php#Hurricanes">Pro Team Roster</a> ]
[ <a href="OTHL-PLF-FarmTeamScoring.php#Checkers">Farm Team Scoring</a> ]
[ <a href="OTHL-PLF-FarmTeamLines.php#Checkers">Farm Team Lines</a> ]
[ <a href="OTHL-PLF-FarmTeamSchedule.php#Checkers">Farm Team Schedule</a> ]
[ <a href="OTHL-PLF-FarmTeamStats.php#Checkers">Farm Team Stats</a> ]
[ <a href="OTHL-PLF-FarmTeamStatsVS.php#Checkers">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Checkers');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Checkers" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW35">Day</th><th class="STHSW35">Game</th><th class="STHSW200">Visitor Team</th><th class="STHSW35">Score</th><th class="STHSW200">Home Team</th><th class="STHSW35">Score</th><th class="STHSW35">ST</th><th class="STHSW35">OT</th><th class="STHSW35">SO</th><th class="STHSW35">RI</th><th class="STHSW200">Link</th></tr></thead>
<tr><td>1</td><td>4</td><td><a href="OTHL-PLF-ProTeamRoster.php#Hurricanes">Checkers</a></td><td>2</td><td><a href="OTHL-PLF-ProTeamRoster.php#MapleLeafs">Marlies</a></td><td>1</td><td>W</td><td>*</td><td></td><td></td><td><a href="OTHL-PLF-Farm-4.html">Game Direct Link</a></td></tr>
<tr><td>3</td><td>12</td><td><a href="OTHL-PLF-ProTeamRoster.php#Hurricanes">Checkers</a></td><td>2</td><td><a href="OTHL-PLF-ProTeamRoster.php#MapleLeafs">Marlies</a></td><td>5</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PLF-Farm-12.html">Game Direct Link</a></td></tr>
<tr><td>5</td><td>20</td><td><a href="OTHL-PLF-ProTeamRoster.php#MapleLeafs">Marlies</a></td><td>3</td><td><a href="OTHL-PLF-ProTeamRoster.php#Hurricanes">Checkers</a></td><td>4</td><td>W</td><td>*</td><td></td><td></td><td><a href="OTHL-PLF-Farm-20.html">Game Direct Link</a></td></tr>
<tr><td>7</td><td>28</td><td><a href="OTHL-PLF-ProTeamRoster.php#MapleLeafs">Marlies</a></td><td>1</td><td><a href="OTHL-PLF-ProTeamRoster.php#Hurricanes">Checkers</a></td><td>0</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PLF-Farm-28.html">Game Direct Link</a></td></tr>
<tr><td>9</td><td>36</td><td><a href="OTHL-PLF-ProTeamRoster.php#Hurricanes">Checkers</a></td><td>2</td><td><a href="OTHL-PLF-ProTeamRoster.php#MapleLeafs">Marlies</a></td><td>3</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PLF-Farm-36.html">Game Direct Link</a></td></tr>
<tr><td>11</td><td>44</td><td><a href="OTHL-PLF-ProTeamRoster.php#MapleLeafs">Marlies</a></td><td>1</td><td><a href="OTHL-PLF-ProTeamRoster.php#Hurricanes">Checkers</a></td><td>4</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PLF-Farm-44.html">Game Direct Link</a></td></tr>
<tr><td>13</td><td>52</td><td><a href="OTHL-PLF-ProTeamRoster.php#Hurricanes">Checkers</a></td><td>3</td><td><a href="OTHL-PLF-ProTeamRoster.php#MapleLeafs">Marlies</a></td><td>4</td><td>L</td><td>*</td><td></td><td></td><td><a href="OTHL-PLF-Farm-52.html">Game Direct Link</a></td></tr>
</table></div>
<h1 class="TeamScheduleFarm_BPT"><a id="SoundTigers">Sound Tigers</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=19">Islanders Page</a> ]
[ <a href="OTHL-PLF-ProTeamRoster.php#Islanders">Pro Team Roster</a> ]
[ <a href="OTHL-PLF-FarmTeamScoring.php#SoundTigers">Farm Team Scoring</a> ]
[ <a href="OTHL-PLF-FarmTeamLines.php#SoundTigers">Farm Team Lines</a> ]
[ <a href="OTHL-PLF-FarmTeamSchedule.php#SoundTigers">Farm Team Schedule</a> ]
[ <a href="OTHL-PLF-FarmTeamStats.php#SoundTigers">Farm Team Stats</a> ]
[ <a href="OTHL-PLF-FarmTeamStatsVS.php#SoundTigers">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_SoundTigers');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_SoundTigers" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW35">Day</th><th class="STHSW35">Game</th><th class="STHSW200">Visitor Team</th><th class="STHSW35">Score</th><th class="STHSW200">Home Team</th><th class="STHSW35">Score</th><th class="STHSW35">ST</th><th class="STHSW35">OT</th><th class="STHSW35">SO</th><th class="STHSW35">RI</th><th class="STHSW200">Link</th></tr></thead>
</table></div>
<h1 class="TeamScheduleFarm_MAN"><a id="Moose">Moose</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=2">Jets Page</a> ]
[ <a href="OTHL-PLF-ProTeamRoster.php#Jets">Pro Team Roster</a> ]
[ <a href="OTHL-PLF-FarmTeamScoring.php#Moose">Farm Team Scoring</a> ]
[ <a href="OTHL-PLF-FarmTeamLines.php#Moose">Farm Team Lines</a> ]
[ <a href="OTHL-PLF-FarmTeamSchedule.php#Moose">Farm Team Schedule</a> ]
[ <a href="OTHL-PLF-FarmTeamStats.php#Moose">Farm Team Stats</a> ]
[ <a href="OTHL-PLF-FarmTeamStatsVS.php#Moose">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Moose');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Moose" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW35">Day</th><th class="STHSW35">Game</th><th class="STHSW200">Visitor Team</th><th class="STHSW35">Score</th><th class="STHSW200">Home Team</th><th class="STHSW35">Score</th><th class="STHSW35">ST</th><th class="STHSW35">OT</th><th class="STHSW35">SO</th><th class="STHSW35">RI</th><th class="STHSW200">Link</th></tr></thead>
<tr><td>2</td><td>8</td><td><a href="OTHL-PLF-ProTeamRoster.php#Jets">Moose</a></td><td>0</td><td><a href="OTHL-PLF-ProTeamRoster.php#Sabres"> Americans</a></td><td>1</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PLF-Farm-8.html">Game Direct Link</a></td></tr>
<tr><td>4</td><td>16</td><td><a href="OTHL-PLF-ProTeamRoster.php#Jets">Moose</a></td><td>3</td><td><a href="OTHL-PLF-ProTeamRoster.php#Sabres"> Americans</a></td><td>4</td><td>L</td><td>*</td><td></td><td></td><td><a href="OTHL-PLF-Farm-16.html">Game Direct Link</a></td></tr>
<tr><td>6</td><td>24</td><td><a href="OTHL-PLF-ProTeamRoster.php#Sabres"> Americans</a></td><td>3</td><td><a href="OTHL-PLF-ProTeamRoster.php#Jets">Moose</a></td><td>2</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PLF-Farm-24.html">Game Direct Link</a></td></tr>
<tr><td>8</td><td>32</td><td><a href="OTHL-PLF-ProTeamRoster.php#Sabres"> Americans</a></td><td>5</td><td><a href="OTHL-PLF-ProTeamRoster.php#Jets">Moose</a></td><td>2</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PLF-Farm-32.html">Game Direct Link</a></td></tr>
</table></div>
<h1 class="TeamScheduleFarm_ONT"><a id="Reign">Reign</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=14">Kings Page</a> ]
[ <a href="OTHL-PLF-ProTeamRoster.php#Kings">Pro Team Roster</a> ]
[ <a href="OTHL-PLF-FarmTeamScoring.php#Reign">Farm Team Scoring</a> ]
[ <a href="OTHL-PLF-FarmTeamLines.php#Reign">Farm Team Lines</a> ]
[ <a href="OTHL-PLF-FarmTeamSchedule.php#Reign">Farm Team Schedule</a> ]
[ <a href="OTHL-PLF-FarmTeamStats.php#Reign">Farm Team Stats</a> ]
[ <a href="OTHL-PLF-FarmTeamStatsVS.php#Reign">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Reign');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Reign" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW35">Day</th><th class="STHSW35">Game</th><th class="STHSW200">Visitor Team</th><th class="STHSW35">Score</th><th class="STHSW200">Home Team</th><th class="STHSW35">Score</th><th class="STHSW35">ST</th><th class="STHSW35">OT</th><th class="STHSW35">SO</th><th class="STHSW35">RI</th><th class="STHSW200">Link</th></tr></thead>
</table></div>
<h1 class="TeamScheduleFarm_SYR"><a id="Crunch">Crunch</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=27">Lightning Page</a> ]
[ <a href="OTHL-PLF-ProTeamRoster.php#Lightning">Pro Team Roster</a> ]
[ <a href="OTHL-PLF-FarmTeamScoring.php#Crunch">Farm Team Scoring</a> ]
[ <a href="OTHL-PLF-FarmTeamLines.php#Crunch">Farm Team Lines</a> ]
[ <a href="OTHL-PLF-FarmTeamSchedule.php#Crunch">Farm Team Schedule</a> ]
[ <a href="OTHL-PLF-FarmTeamStats.php#Crunch">Farm Team Stats</a> ]
[ <a href="OTHL-PLF-FarmTeamStatsVS.php#Crunch">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Crunch');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Crunch" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW35">Day</th><th class="STHSW35">Game</th><th class="STHSW200">Visitor Team</th><th class="STHSW35">Score</th><th class="STHSW200">Home Team</th><th class="STHSW35">Score</th><th class="STHSW35">ST</th><th class="STHSW35">OT</th><th class="STHSW35">SO</th><th class="STHSW35">RI</th><th class="STHSW200">Link</th></tr></thead>
</table></div>
<h1 class="TeamScheduleFarm_TOR"><a id="Marlies">Marlies</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=28">Maple Leafs Page</a> ]
[ <a href="OTHL-PLF-ProTeamRoster.php#MapleLeafs">Pro Team Roster</a> ]
[ <a href="OTHL-PLF-FarmTeamScoring.php#Marlies">Farm Team Scoring</a> ]
[ <a href="OTHL-PLF-FarmTeamLines.php#Marlies">Farm Team Lines</a> ]
[ <a href="OTHL-PLF-FarmTeamSchedule.php#Marlies">Farm Team Schedule</a> ]
[ <a href="OTHL-PLF-FarmTeamStats.php#Marlies">Farm Team Stats</a> ]
[ <a href="OTHL-PLF-FarmTeamStatsVS.php#Marlies">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Marlies');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Marlies" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW35">Day</th><th class="STHSW35">Game</th><th class="STHSW200">Visitor Team</th><th class="STHSW35">Score</th><th class="STHSW200">Home Team</th><th class="STHSW35">Score</th><th class="STHSW35">ST</th><th class="STHSW35">OT</th><th class="STHSW35">SO</th><th class="STHSW35">RI</th><th class="STHSW200">Link</th></tr></thead>
<tr><td>1</td><td>4</td><td><a href="OTHL-PLF-ProTeamRoster.php#Hurricanes">Checkers</a></td><td>2</td><td><a href="OTHL-PLF-ProTeamRoster.php#MapleLeafs">Marlies</a></td><td>1</td><td>L</td><td>*</td><td></td><td></td><td><a href="OTHL-PLF-Farm-4.html">Game Direct Link</a></td></tr>
<tr><td>3</td><td>12</td><td><a href="OTHL-PLF-ProTeamRoster.php#Hurricanes">Checkers</a></td><td>2</td><td><a href="OTHL-PLF-ProTeamRoster.php#MapleLeafs">Marlies</a></td><td>5</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PLF-Farm-12.html">Game Direct Link</a></td></tr>
<tr><td>5</td><td>20</td><td><a href="OTHL-PLF-ProTeamRoster.php#MapleLeafs">Marlies</a></td><td>3</td><td><a href="OTHL-PLF-ProTeamRoster.php#Hurricanes">Checkers</a></td><td>4</td><td>L</td><td>*</td><td></td><td></td><td><a href="OTHL-PLF-Farm-20.html">Game Direct Link</a></td></tr>
<tr><td>7</td><td>28</td><td><a href="OTHL-PLF-ProTeamRoster.php#MapleLeafs">Marlies</a></td><td>1</td><td><a href="OTHL-PLF-ProTeamRoster.php#Hurricanes">Checkers</a></td><td>0</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PLF-Farm-28.html">Game Direct Link</a></td></tr>
<tr><td>9</td><td>36</td><td><a href="OTHL-PLF-ProTeamRoster.php#Hurricanes">Checkers</a></td><td>2</td><td><a href="OTHL-PLF-ProTeamRoster.php#MapleLeafs">Marlies</a></td><td>3</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PLF-Farm-36.html">Game Direct Link</a></td></tr>
<tr><td>11</td><td>44</td><td><a href="OTHL-PLF-ProTeamRoster.php#MapleLeafs">Marlies</a></td><td>1</td><td><a href="OTHL-PLF-ProTeamRoster.php#Hurricanes">Checkers</a></td><td>4</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PLF-Farm-44.html">Game Direct Link</a></td></tr>
<tr><td>13</td><td>52</td><td><a href="OTHL-PLF-ProTeamRoster.php#Hurricanes">Checkers</a></td><td>3</td><td><a href="OTHL-PLF-ProTeamRoster.php#MapleLeafs">Marlies</a></td><td>4</td><td>W</td><td>*</td><td></td><td></td><td><a href="OTHL-PLF-Farm-52.html">Game Direct Link</a></td></tr>
<tr><td>15</td><td>57</td><td><a href="OTHL-PLF-ProTeamRoster.php#MapleLeafs">Marlies</a></td><td>0</td><td><a href="OTHL-PLF-ProTeamRoster.php#Canucks">Comets</a></td><td>3</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PLF-Farm-57.html">Game Direct Link</a></td></tr>
<tr><td>17</td><td>61</td><td><a href="OTHL-PLF-ProTeamRoster.php#MapleLeafs">Marlies</a></td><td>1</td><td><a href="OTHL-PLF-ProTeamRoster.php#Canucks">Comets</a></td><td>2</td><td>L</td><td>*</td><td></td><td></td><td><a href="OTHL-PLF-Farm-61.html">Game Direct Link</a></td></tr>
<tr><td>19</td><td>65</td><td><a href="OTHL-PLF-ProTeamRoster.php#Canucks">Comets</a></td><td>2</td><td><a href="OTHL-PLF-ProTeamRoster.php#MapleLeafs">Marlies</a></td><td>0</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PLF-Farm-65.html">Game Direct Link</a></td></tr>
<tr><td>21</td><td>69</td><td><a href="OTHL-PLF-ProTeamRoster.php#Canucks">Comets</a></td><td>4</td><td><a href="OTHL-PLF-ProTeamRoster.php#MapleLeafs">Marlies</a></td><td>3</td><td>L</td><td>*</td><td></td><td></td><td><a href="OTHL-PLF-Farm-69.html">Game Direct Link</a></td></tr>
</table></div>
<h1 class="TeamScheduleFarm_BKR"><a id="Condors">Condors</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=12">Oilers Page</a> ]
[ <a href="OTHL-PLF-ProTeamRoster.php#Oilers">Pro Team Roster</a> ]
[ <a href="OTHL-PLF-FarmTeamScoring.php#Condors">Farm Team Scoring</a> ]
[ <a href="OTHL-PLF-FarmTeamLines.php#Condors">Farm Team Lines</a> ]
[ <a href="OTHL-PLF-FarmTeamSchedule.php#Condors">Farm Team Schedule</a> ]
[ <a href="OTHL-PLF-FarmTeamStats.php#Condors">Farm Team Stats</a> ]
[ <a href="OTHL-PLF-FarmTeamStatsVS.php#Condors">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Condors');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Condors" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW35">Day</th><th class="STHSW35">Game</th><th class="STHSW200">Visitor Team</th><th class="STHSW35">Score</th><th class="STHSW200">Home Team</th><th class="STHSW35">Score</th><th class="STHSW35">ST</th><th class="STHSW35">OT</th><th class="STHSW35">SO</th><th class="STHSW35">RI</th><th class="STHSW200">Link</th></tr></thead>
<tr><td>2</td><td>6</td><td><a href="OTHL-PLF-ProTeamRoster.php#Flames">Heat</a></td><td>3</td><td><a href="OTHL-PLF-ProTeamRoster.php#Oilers">Condors</a></td><td>5</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PLF-Farm-6.html">Game Direct Link</a></td></tr>
<tr><td>4</td><td>14</td><td><a href="OTHL-PLF-ProTeamRoster.php#Flames">Heat</a></td><td>1</td><td><a href="OTHL-PLF-ProTeamRoster.php#Oilers">Condors</a></td><td>5</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PLF-Farm-14.html">Game Direct Link</a></td></tr>
<tr><td>6</td><td>22</td><td><a href="OTHL-PLF-ProTeamRoster.php#Oilers">Condors</a></td><td>2</td><td><a href="OTHL-PLF-ProTeamRoster.php#Flames">Heat</a></td><td>1</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PLF-Farm-22.html">Game Direct Link</a></td></tr>
<tr><td>8</td><td>30</td><td><a href="OTHL-PLF-ProTeamRoster.php#Oilers">Condors</a></td><td>3</td><td><a href="OTHL-PLF-ProTeamRoster.php#Flames">Heat</a></td><td>1</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PLF-Farm-30.html">Game Direct Link</a></td></tr>
<tr><td>16</td><td>60</td><td><a href="OTHL-PLF-ProTeamRoster.php#Blackhawks">IceHogs</a></td><td>2</td><td><a href="OTHL-PLF-ProTeamRoster.php#Oilers">Condors</a></td><td>4</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PLF-Farm-60.html">Game Direct Link</a></td></tr>
<tr><td>18</td><td>64</td><td><a href="OTHL-PLF-ProTeamRoster.php#Blackhawks">IceHogs</a></td><td>2</td><td><a href="OTHL-PLF-ProTeamRoster.php#Oilers">Condors</a></td><td>3</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PLF-Farm-64.html">Game Direct Link</a></td></tr>
<tr><td>20</td><td>68</td><td><a href="OTHL-PLF-ProTeamRoster.php#Oilers">Condors</a></td><td>4</td><td><a href="OTHL-PLF-ProTeamRoster.php#Blackhawks">IceHogs</a></td><td>3</td><td>W</td><td>*</td><td></td><td></td><td><a href="OTHL-PLF-Farm-68.html">Game Direct Link</a></td></tr>
<tr><td>22</td><td>72</td><td><a href="OTHL-PLF-ProTeamRoster.php#Oilers">Condors</a></td><td>4</td><td><a href="OTHL-PLF-ProTeamRoster.php#Blackhawks">IceHogs</a></td><td>1</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PLF-Farm-72.html">Game Direct Link</a></td></tr>
<tr><td>30</td><td>86</td><td><a href="OTHL-PLF-ProTeamRoster.php#Oilers">Condors</a></td><td>4</td><td><a href="OTHL-PLF-ProTeamRoster.php#Predators">Admirals</a></td><td>5</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PLF-Farm-86.html">Game Direct Link</a></td></tr>
<tr><td>32</td><td>88</td><td><a href="OTHL-PLF-ProTeamRoster.php#Oilers">Condors</a></td><td>2</td><td><a href="OTHL-PLF-ProTeamRoster.php#Predators">Admirals</a></td><td>1</td><td>W</td><td>*</td><td></td><td></td><td><a href="OTHL-PLF-Farm-88.html">Game Direct Link</a></td></tr>
<tr><td>34</td><td>90</td><td><a href="OTHL-PLF-ProTeamRoster.php#Predators">Admirals</a></td><td>4</td><td><a href="OTHL-PLF-ProTeamRoster.php#Oilers">Condors</a></td><td>5</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PLF-Farm-90.html">Game Direct Link</a></td></tr>
<tr><td>36</td><td>92</td><td><a href="OTHL-PLF-ProTeamRoster.php#Predators">Admirals</a></td><td>5</td><td><a href="OTHL-PLF-ProTeamRoster.php#Oilers">Condors</a></td><td>6</td><td>W</td><td>*</td><td></td><td></td><td><a href="OTHL-PLF-Farm-92.html">Game Direct Link</a></td></tr>
<tr><td>38</td><td>94</td><td><a href="OTHL-PLF-ProTeamRoster.php#Oilers">Condors</a></td><td>3</td><td><a href="OTHL-PLF-ProTeamRoster.php#Predators">Admirals</a></td><td>2</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PLF-Farm-94.html">Game Direct Link</a></td></tr>
<tr><td>43</td><td>99</td><td><a href="OTHL-PLF-ProTeamRoster.php#Oilers">Condors</a></td><td>1</td><td><a href="OTHL-PLF-ProTeamRoster.php#Canucks">Comets</a></td><td>2</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PLF-Farm-99.html">Game Direct Link</a></td></tr>
<tr><td>44</td><td>100</td><td><a href="OTHL-PLF-ProTeamRoster.php#Oilers">Condors</a></td><td>2</td><td><a href="OTHL-PLF-ProTeamRoster.php#Canucks">Comets</a></td><td>4</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PLF-Farm-100.html">Game Direct Link</a></td></tr>
<tr><td>45</td><td>101</td><td><a href="OTHL-PLF-ProTeamRoster.php#Canucks">Comets</a></td><td>5</td><td><a href="OTHL-PLF-ProTeamRoster.php#Oilers">Condors</a></td><td>3</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PLF-Farm-101.html">Game Direct Link</a></td></tr>
<tr><td>46</td><td>102</td><td><a href="OTHL-PLF-ProTeamRoster.php#Canucks">Comets</a></td><td>5</td><td><a href="OTHL-PLF-ProTeamRoster.php#Oilers">Condors</a></td><td>2</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PLF-Farm-102.html">Game Direct Link</a></td></tr>
</table></div>
<h1 class="TeamScheduleFarm_SPR"><a id="Thunderbirds">Thunderbirds</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=13">Panthers Page</a> ]
[ <a href="OTHL-PLF-ProTeamRoster.php#Panthers">Pro Team Roster</a> ]
[ <a href="OTHL-PLF-FarmTeamScoring.php#Thunderbirds">Farm Team Scoring</a> ]
[ <a href="OTHL-PLF-FarmTeamLines.php#Thunderbirds">Farm Team Lines</a> ]
[ <a href="OTHL-PLF-FarmTeamSchedule.php#Thunderbirds">Farm Team Schedule</a> ]
[ <a href="OTHL-PLF-FarmTeamStats.php#Thunderbirds">Farm Team Stats</a> ]
[ <a href="OTHL-PLF-FarmTeamStatsVS.php#Thunderbirds">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Thunderbirds');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Thunderbirds" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW35">Day</th><th class="STHSW35">Game</th><th class="STHSW200">Visitor Team</th><th class="STHSW35">Score</th><th class="STHSW200">Home Team</th><th class="STHSW35">Score</th><th class="STHSW35">ST</th><th class="STHSW35">OT</th><th class="STHSW35">SO</th><th class="STHSW35">RI</th><th class="STHSW200">Link</th></tr></thead>
<tr><td>1</td><td>2</td><td><a href="OTHL-PLF-ProTeamRoster.php#Bruins">Bruins</a></td><td>1</td><td><a href="OTHL-PLF-ProTeamRoster.php#Panthers">Thunderbirds</a></td><td>2</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PLF-Farm-2.html">Game Direct Link</a></td></tr>
<tr><td>3</td><td>10</td><td><a href="OTHL-PLF-ProTeamRoster.php#Bruins">Bruins</a></td><td>1</td><td><a href="OTHL-PLF-ProTeamRoster.php#Panthers">Thunderbirds</a></td><td>2</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PLF-Farm-10.html">Game Direct Link</a></td></tr>
<tr><td>5</td><td>18</td><td><a href="OTHL-PLF-ProTeamRoster.php#Panthers">Thunderbirds</a></td><td>0</td><td><a href="OTHL-PLF-ProTeamRoster.php#Bruins">Bruins</a></td><td>2</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PLF-Farm-18.html">Game Direct Link</a></td></tr>
<tr><td>7</td><td>26</td><td><a href="OTHL-PLF-ProTeamRoster.php#Panthers">Thunderbirds</a></td><td>1</td><td><a href="OTHL-PLF-ProTeamRoster.php#Bruins">Bruins</a></td><td>2</td><td>L</td><td>*</td><td></td><td></td><td><a href="OTHL-PLF-Farm-26.html">Game Direct Link</a></td></tr>
<tr><td>9</td><td>34</td><td><a href="OTHL-PLF-ProTeamRoster.php#Bruins">Bruins</a></td><td>2</td><td><a href="OTHL-PLF-ProTeamRoster.php#Panthers">Thunderbirds</a></td><td>4</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PLF-Farm-34.html">Game Direct Link</a></td></tr>
<tr><td>11</td><td>42</td><td><a href="OTHL-PLF-ProTeamRoster.php#Panthers">Thunderbirds</a></td><td>3</td><td><a href="OTHL-PLF-ProTeamRoster.php#Bruins">Bruins</a></td><td>4</td><td>L</td><td>*</td><td></td><td></td><td><a href="OTHL-PLF-Farm-42.html">Game Direct Link</a></td></tr>
<tr><td>13</td><td>50</td><td><a href="OTHL-PLF-ProTeamRoster.php#Bruins">Bruins</a></td><td>0</td><td><a href="OTHL-PLF-ProTeamRoster.php#Panthers">Thunderbirds</a></td><td>2</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PLF-Farm-50.html">Game Direct Link</a></td></tr>
<tr><td>15</td><td>58</td><td><a href="OTHL-PLF-ProTeamRoster.php#BlueJackets">Monsters</a></td><td>2</td><td><a href="OTHL-PLF-ProTeamRoster.php#Panthers">Thunderbirds</a></td><td>6</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PLF-Farm-58.html">Game Direct Link</a></td></tr>
<tr><td>17</td><td>62</td><td><a href="OTHL-PLF-ProTeamRoster.php#BlueJackets">Monsters</a></td><td>0</td><td><a href="OTHL-PLF-ProTeamRoster.php#Panthers">Thunderbirds</a></td><td>4</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PLF-Farm-62.html">Game Direct Link</a></td></tr>
<tr><td>19</td><td>66</td><td><a href="OTHL-PLF-ProTeamRoster.php#Panthers">Thunderbirds</a></td><td>1</td><td><a href="OTHL-PLF-ProTeamRoster.php#BlueJackets">Monsters</a></td><td>2</td><td>L</td><td>*</td><td></td><td></td><td><a href="OTHL-PLF-Farm-66.html">Game Direct Link</a></td></tr>
<tr><td>21</td><td>70</td><td><a href="OTHL-PLF-ProTeamRoster.php#Panthers">Thunderbirds</a></td><td>2</td><td><a href="OTHL-PLF-ProTeamRoster.php#BlueJackets">Monsters</a></td><td>1</td><td>W</td><td>*</td><td></td><td></td><td><a href="OTHL-PLF-Farm-70.html">Game Direct Link</a></td></tr>
<tr><td>23</td><td>74</td><td><a href="OTHL-PLF-ProTeamRoster.php#BlueJackets">Monsters</a></td><td>3</td><td><a href="OTHL-PLF-ProTeamRoster.php#Panthers">Thunderbirds</a></td><td>0</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PLF-Farm-74.html">Game Direct Link</a></td></tr>
<tr><td>25</td><td>78</td><td><a href="OTHL-PLF-ProTeamRoster.php#Panthers">Thunderbirds</a></td><td>2</td><td><a href="OTHL-PLF-ProTeamRoster.php#BlueJackets">Monsters</a></td><td>0</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PLF-Farm-78.html">Game Direct Link</a></td></tr>
<tr><td>29</td><td>85</td><td><a href="OTHL-PLF-ProTeamRoster.php#Panthers">Thunderbirds</a></td><td>0</td><td><a href="OTHL-PLF-ProTeamRoster.php#Canucks">Comets</a></td><td>2</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PLF-Farm-85.html">Game Direct Link</a></td></tr>
<tr><td>31</td><td>87</td><td><a href="OTHL-PLF-ProTeamRoster.php#Panthers">Thunderbirds</a></td><td>5</td><td><a href="OTHL-PLF-ProTeamRoster.php#Canucks">Comets</a></td><td>1</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PLF-Farm-87.html">Game Direct Link</a></td></tr>
<tr><td>33</td><td>89</td><td><a href="OTHL-PLF-ProTeamRoster.php#Canucks">Comets</a></td><td>2</td><td><a href="OTHL-PLF-ProTeamRoster.php#Panthers">Thunderbirds</a></td><td>0</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PLF-Farm-89.html">Game Direct Link</a></td></tr>
<tr><td>35</td><td>91</td><td><a href="OTHL-PLF-ProTeamRoster.php#Canucks">Comets</a></td><td>1</td><td><a href="OTHL-PLF-ProTeamRoster.php#Panthers">Thunderbirds</a></td><td>2</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PLF-Farm-91.html">Game Direct Link</a></td></tr>
<tr><td>37</td><td>93</td><td><a href="OTHL-PLF-ProTeamRoster.php#Panthers">Thunderbirds</a></td><td>2</td><td><a href="OTHL-PLF-ProTeamRoster.php#Canucks">Comets</a></td><td>4</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PLF-Farm-93.html">Game Direct Link</a></td></tr>
<tr><td>39</td><td>95</td><td><a href="OTHL-PLF-ProTeamRoster.php#Canucks">Comets</a></td><td>2</td><td><a href="OTHL-PLF-ProTeamRoster.php#Panthers">Thunderbirds</a></td><td>1</td><td>L</td><td>*</td><td></td><td></td><td><a href="OTHL-PLF-Farm-95.html">Game Direct Link</a></td></tr>
</table></div>
<h1 class="TeamScheduleFarm_WBS"><a id="Penguins">Penguins</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=24">Penguins Page</a> ]
[ <a href="OTHL-PLF-ProTeamRoster.php#Penguins">Pro Team Roster</a> ]
[ <a href="OTHL-PLF-FarmTeamScoring.php#Penguins">Farm Team Scoring</a> ]
[ <a href="OTHL-PLF-FarmTeamLines.php#Penguins">Farm Team Lines</a> ]
[ <a href="OTHL-PLF-FarmTeamSchedule.php#Penguins">Farm Team Schedule</a> ]
[ <a href="OTHL-PLF-FarmTeamStats.php#Penguins">Farm Team Stats</a> ]
[ <a href="OTHL-PLF-FarmTeamStatsVS.php#Penguins">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Penguins');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Penguins" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW35">Day</th><th class="STHSW35">Game</th><th class="STHSW200">Visitor Team</th><th class="STHSW35">Score</th><th class="STHSW200">Home Team</th><th class="STHSW35">Score</th><th class="STHSW35">ST</th><th class="STHSW35">OT</th><th class="STHSW35">SO</th><th class="STHSW35">RI</th><th class="STHSW200">Link</th></tr></thead>
<tr><td>1</td><td>3</td><td><a href="OTHL-PLF-ProTeamRoster.php#Penguins">Penguins</a></td><td>4</td><td><a href="OTHL-PLF-ProTeamRoster.php#BlueJackets">Monsters</a></td><td>3</td><td>W</td><td>*</td><td></td><td></td><td><a href="OTHL-PLF-Farm-3.html">Game Direct Link</a></td></tr>
<tr><td>3</td><td>11</td><td><a href="OTHL-PLF-ProTeamRoster.php#Penguins">Penguins</a></td><td>5</td><td><a href="OTHL-PLF-ProTeamRoster.php#BlueJackets">Monsters</a></td><td>1</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PLF-Farm-11.html">Game Direct Link</a></td></tr>
<tr><td>5</td><td>19</td><td><a href="OTHL-PLF-ProTeamRoster.php#BlueJackets">Monsters</a></td><td>3</td><td><a href="OTHL-PLF-ProTeamRoster.php#Penguins">Penguins</a></td><td>2</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PLF-Farm-19.html">Game Direct Link</a></td></tr>
<tr><td>7</td><td>27</td><td><a href="OTHL-PLF-ProTeamRoster.php#BlueJackets">Monsters</a></td><td>6</td><td><a href="OTHL-PLF-ProTeamRoster.php#Penguins">Penguins</a></td><td>2</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PLF-Farm-27.html">Game Direct Link</a></td></tr>
<tr><td>9</td><td>35</td><td><a href="OTHL-PLF-ProTeamRoster.php#Penguins">Penguins</a></td><td>3</td><td><a href="OTHL-PLF-ProTeamRoster.php#BlueJackets">Monsters</a></td><td>2</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PLF-Farm-35.html">Game Direct Link</a></td></tr>
<tr><td>11</td><td>43</td><td><a href="OTHL-PLF-ProTeamRoster.php#BlueJackets">Monsters</a></td><td>3</td><td><a href="OTHL-PLF-ProTeamRoster.php#Penguins">Penguins</a></td><td>1</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PLF-Farm-43.html">Game Direct Link</a></td></tr>
<tr><td>13</td><td>51</td><td><a href="OTHL-PLF-ProTeamRoster.php#Penguins">Penguins</a></td><td>2</td><td><a href="OTHL-PLF-ProTeamRoster.php#BlueJackets">Monsters</a></td><td>3</td><td>L</td><td>*</td><td></td><td></td><td><a href="OTHL-PLF-Farm-51.html">Game Direct Link</a></td></tr>
</table></div>
<h1 class="TeamScheduleFarm_MIL"><a id="Admirals">Admirals</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=17">Predators Page</a> ]
[ <a href="OTHL-PLF-ProTeamRoster.php#Predators">Pro Team Roster</a> ]
[ <a href="OTHL-PLF-FarmTeamScoring.php#Admirals">Farm Team Scoring</a> ]
[ <a href="OTHL-PLF-FarmTeamLines.php#Admirals">Farm Team Lines</a> ]
[ <a href="OTHL-PLF-FarmTeamSchedule.php#Admirals">Farm Team Schedule</a> ]
[ <a href="OTHL-PLF-FarmTeamStats.php#Admirals">Farm Team Stats</a> ]
[ <a href="OTHL-PLF-FarmTeamStatsVS.php#Admirals">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Admirals');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Admirals" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW35">Day</th><th class="STHSW35">Game</th><th class="STHSW200">Visitor Team</th><th class="STHSW35">Score</th><th class="STHSW200">Home Team</th><th class="STHSW35">Score</th><th class="STHSW35">ST</th><th class="STHSW35">OT</th><th class="STHSW35">SO</th><th class="STHSW35">RI</th><th class="STHSW200">Link</th></tr></thead>
<tr><td>2</td><td>5</td><td><a href="OTHL-PLF-ProTeamRoster.php#GoldenKnights">Wolves</a></td><td>1</td><td><a href="OTHL-PLF-ProTeamRoster.php#Predators">Admirals</a></td><td>2</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PLF-Farm-5.html">Game Direct Link</a></td></tr>
<tr><td>4</td><td>13</td><td><a href="OTHL-PLF-ProTeamRoster.php#GoldenKnights">Wolves</a></td><td>1</td><td><a href="OTHL-PLF-ProTeamRoster.php#Predators">Admirals</a></td><td>6</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PLF-Farm-13.html">Game Direct Link</a></td></tr>
<tr><td>6</td><td>21</td><td><a href="OTHL-PLF-ProTeamRoster.php#Predators">Admirals</a></td><td>5</td><td><a href="OTHL-PLF-ProTeamRoster.php#GoldenKnights">Wolves</a></td><td>0</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PLF-Farm-21.html">Game Direct Link</a></td></tr>
<tr><td>8</td><td>29</td><td><a href="OTHL-PLF-ProTeamRoster.php#Predators">Admirals</a></td><td>3</td><td><a href="OTHL-PLF-ProTeamRoster.php#GoldenKnights">Wolves</a></td><td>2</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PLF-Farm-29.html">Game Direct Link</a></td></tr>
<tr><td>16</td><td>59</td><td><a href="OTHL-PLF-ProTeamRoster.php#Sabres"> Americans</a></td><td>2</td><td><a href="OTHL-PLF-ProTeamRoster.php#Predators">Admirals</a></td><td>3</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PLF-Farm-59.html">Game Direct Link</a></td></tr>
<tr><td>18</td><td>63</td><td><a href="OTHL-PLF-ProTeamRoster.php#Sabres"> Americans</a></td><td>4</td><td><a href="OTHL-PLF-ProTeamRoster.php#Predators">Admirals</a></td><td>3</td><td>L</td><td>*</td><td></td><td></td><td><a href="OTHL-PLF-Farm-63.html">Game Direct Link</a></td></tr>
<tr><td>20</td><td>67</td><td><a href="OTHL-PLF-ProTeamRoster.php#Predators">Admirals</a></td><td>1</td><td><a href="OTHL-PLF-ProTeamRoster.php#Sabres"> Americans</a></td><td>2</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PLF-Farm-67.html">Game Direct Link</a></td></tr>
<tr><td>22</td><td>71</td><td><a href="OTHL-PLF-ProTeamRoster.php#Predators">Admirals</a></td><td>4</td><td><a href="OTHL-PLF-ProTeamRoster.php#Sabres"> Americans</a></td><td>2</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PLF-Farm-71.html">Game Direct Link</a></td></tr>
<tr><td>24</td><td>75</td><td><a href="OTHL-PLF-ProTeamRoster.php#Sabres"> Americans</a></td><td>3</td><td><a href="OTHL-PLF-ProTeamRoster.php#Predators">Admirals</a></td><td>5</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PLF-Farm-75.html">Game Direct Link</a></td></tr>
<tr><td>26</td><td>79</td><td><a href="OTHL-PLF-ProTeamRoster.php#Predators">Admirals</a></td><td>1</td><td><a href="OTHL-PLF-ProTeamRoster.php#Sabres"> Americans</a></td><td>2</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PLF-Farm-79.html">Game Direct Link</a></td></tr>
<tr><td>28</td><td>83</td><td><a href="OTHL-PLF-ProTeamRoster.php#Sabres"> Americans</a></td><td>1</td><td><a href="OTHL-PLF-ProTeamRoster.php#Predators">Admirals</a></td><td>2</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PLF-Farm-83.html">Game Direct Link</a></td></tr>
<tr><td>30</td><td>86</td><td><a href="OTHL-PLF-ProTeamRoster.php#Oilers">Condors</a></td><td>4</td><td><a href="OTHL-PLF-ProTeamRoster.php#Predators">Admirals</a></td><td>5</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PLF-Farm-86.html">Game Direct Link</a></td></tr>
<tr><td>32</td><td>88</td><td><a href="OTHL-PLF-ProTeamRoster.php#Oilers">Condors</a></td><td>2</td><td><a href="OTHL-PLF-ProTeamRoster.php#Predators">Admirals</a></td><td>1</td><td>L</td><td>*</td><td></td><td></td><td><a href="OTHL-PLF-Farm-88.html">Game Direct Link</a></td></tr>
<tr><td>34</td><td>90</td><td><a href="OTHL-PLF-ProTeamRoster.php#Predators">Admirals</a></td><td>4</td><td><a href="OTHL-PLF-ProTeamRoster.php#Oilers">Condors</a></td><td>5</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PLF-Farm-90.html">Game Direct Link</a></td></tr>
<tr><td>36</td><td>92</td><td><a href="OTHL-PLF-ProTeamRoster.php#Predators">Admirals</a></td><td>5</td><td><a href="OTHL-PLF-ProTeamRoster.php#Oilers">Condors</a></td><td>6</td><td>L</td><td>*</td><td></td><td></td><td><a href="OTHL-PLF-Farm-92.html">Game Direct Link</a></td></tr>
<tr><td>38</td><td>94</td><td><a href="OTHL-PLF-ProTeamRoster.php#Oilers">Condors</a></td><td>3</td><td><a href="OTHL-PLF-ProTeamRoster.php#Predators">Admirals</a></td><td>2</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PLF-Farm-94.html">Game Direct Link</a></td></tr>
</table></div>
<h1 class="TeamScheduleFarm_HFD"><a id="WolfPack">Wolf Pack</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=20">Rangers Page</a> ]
[ <a href="OTHL-PLF-ProTeamRoster.php#Rangers">Pro Team Roster</a> ]
[ <a href="OTHL-PLF-FarmTeamScoring.php#WolfPack">Farm Team Scoring</a> ]
[ <a href="OTHL-PLF-FarmTeamLines.php#WolfPack">Farm Team Lines</a> ]
[ <a href="OTHL-PLF-FarmTeamSchedule.php#WolfPack">Farm Team Schedule</a> ]
[ <a href="OTHL-PLF-FarmTeamStats.php#WolfPack">Farm Team Stats</a> ]
[ <a href="OTHL-PLF-FarmTeamStatsVS.php#WolfPack">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_WolfPack');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_WolfPack" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW35">Day</th><th class="STHSW35">Game</th><th class="STHSW200">Visitor Team</th><th class="STHSW35">Score</th><th class="STHSW200">Home Team</th><th class="STHSW35">Score</th><th class="STHSW35">ST</th><th class="STHSW35">OT</th><th class="STHSW35">SO</th><th class="STHSW35">RI</th><th class="STHSW200">Link</th></tr></thead>
</table></div>
<h1 class="TeamScheduleFarm_GRP"><a id="Griffins">Griffins</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=11">Red Wings Page</a> ]
[ <a href="OTHL-PLF-ProTeamRoster.php#RedWings">Pro Team Roster</a> ]
[ <a href="OTHL-PLF-FarmTeamScoring.php#Griffins">Farm Team Scoring</a> ]
[ <a href="OTHL-PLF-FarmTeamLines.php#Griffins">Farm Team Lines</a> ]
[ <a href="OTHL-PLF-FarmTeamSchedule.php#Griffins">Farm Team Schedule</a> ]
[ <a href="OTHL-PLF-FarmTeamStats.php#Griffins">Farm Team Stats</a> ]
[ <a href="OTHL-PLF-FarmTeamStatsVS.php#Griffins">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Griffins');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Griffins" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW35">Day</th><th class="STHSW35">Game</th><th class="STHSW200">Visitor Team</th><th class="STHSW35">Score</th><th class="STHSW200">Home Team</th><th class="STHSW35">Score</th><th class="STHSW35">ST</th><th class="STHSW35">OT</th><th class="STHSW35">SO</th><th class="STHSW35">RI</th><th class="STHSW200">Link</th></tr></thead>
</table></div>
<h1 class="TeamScheduleFarm_ROC"><a id="Americans"> Americans</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=4">Sabres Page</a> ]
[ <a href="OTHL-PLF-ProTeamRoster.php#Sabres">Pro Team Roster</a> ]
[ <a href="OTHL-PLF-FarmTeamScoring.php#Americans">Farm Team Scoring</a> ]
[ <a href="OTHL-PLF-FarmTeamLines.php#Americans">Farm Team Lines</a> ]
[ <a href="OTHL-PLF-FarmTeamSchedule.php#Americans">Farm Team Schedule</a> ]
[ <a href="OTHL-PLF-FarmTeamStats.php#Americans">Farm Team Stats</a> ]
[ <a href="OTHL-PLF-FarmTeamStatsVS.php#Americans">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Americans');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Americans" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW35">Day</th><th class="STHSW35">Game</th><th class="STHSW200">Visitor Team</th><th class="STHSW35">Score</th><th class="STHSW200">Home Team</th><th class="STHSW35">Score</th><th class="STHSW35">ST</th><th class="STHSW35">OT</th><th class="STHSW35">SO</th><th class="STHSW35">RI</th><th class="STHSW200">Link</th></tr></thead>
<tr><td>2</td><td>8</td><td><a href="OTHL-PLF-ProTeamRoster.php#Jets">Moose</a></td><td>0</td><td><a href="OTHL-PLF-ProTeamRoster.php#Sabres"> Americans</a></td><td>1</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PLF-Farm-8.html">Game Direct Link</a></td></tr>
<tr><td>4</td><td>16</td><td><a href="OTHL-PLF-ProTeamRoster.php#Jets">Moose</a></td><td>3</td><td><a href="OTHL-PLF-ProTeamRoster.php#Sabres"> Americans</a></td><td>4</td><td>W</td><td>*</td><td></td><td></td><td><a href="OTHL-PLF-Farm-16.html">Game Direct Link</a></td></tr>
<tr><td>6</td><td>24</td><td><a href="OTHL-PLF-ProTeamRoster.php#Sabres"> Americans</a></td><td>3</td><td><a href="OTHL-PLF-ProTeamRoster.php#Jets">Moose</a></td><td>2</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PLF-Farm-24.html">Game Direct Link</a></td></tr>
<tr><td>8</td><td>32</td><td><a href="OTHL-PLF-ProTeamRoster.php#Sabres"> Americans</a></td><td>5</td><td><a href="OTHL-PLF-ProTeamRoster.php#Jets">Moose</a></td><td>2</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PLF-Farm-32.html">Game Direct Link</a></td></tr>
<tr><td>16</td><td>59</td><td><a href="OTHL-PLF-ProTeamRoster.php#Sabres"> Americans</a></td><td>2</td><td><a href="OTHL-PLF-ProTeamRoster.php#Predators">Admirals</a></td><td>3</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PLF-Farm-59.html">Game Direct Link</a></td></tr>
<tr><td>18</td><td>63</td><td><a href="OTHL-PLF-ProTeamRoster.php#Sabres"> Americans</a></td><td>4</td><td><a href="OTHL-PLF-ProTeamRoster.php#Predators">Admirals</a></td><td>3</td><td>W</td><td>*</td><td></td><td></td><td><a href="OTHL-PLF-Farm-63.html">Game Direct Link</a></td></tr>
<tr><td>20</td><td>67</td><td><a href="OTHL-PLF-ProTeamRoster.php#Predators">Admirals</a></td><td>1</td><td><a href="OTHL-PLF-ProTeamRoster.php#Sabres"> Americans</a></td><td>2</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PLF-Farm-67.html">Game Direct Link</a></td></tr>
<tr><td>22</td><td>71</td><td><a href="OTHL-PLF-ProTeamRoster.php#Predators">Admirals</a></td><td>4</td><td><a href="OTHL-PLF-ProTeamRoster.php#Sabres"> Americans</a></td><td>2</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PLF-Farm-71.html">Game Direct Link</a></td></tr>
<tr><td>24</td><td>75</td><td><a href="OTHL-PLF-ProTeamRoster.php#Sabres"> Americans</a></td><td>3</td><td><a href="OTHL-PLF-ProTeamRoster.php#Predators">Admirals</a></td><td>5</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PLF-Farm-75.html">Game Direct Link</a></td></tr>
<tr><td>26</td><td>79</td><td><a href="OTHL-PLF-ProTeamRoster.php#Predators">Admirals</a></td><td>1</td><td><a href="OTHL-PLF-ProTeamRoster.php#Sabres"> Americans</a></td><td>2</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PLF-Farm-79.html">Game Direct Link</a></td></tr>
<tr><td>28</td><td>83</td><td><a href="OTHL-PLF-ProTeamRoster.php#Sabres"> Americans</a></td><td>1</td><td><a href="OTHL-PLF-ProTeamRoster.php#Predators">Admirals</a></td><td>2</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PLF-Farm-83.html">Game Direct Link</a></td></tr>
</table></div>
<h1 class="TeamScheduleFarm_BEL"><a id="Senators">Senators</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=21">Senators Page</a> ]
[ <a href="OTHL-PLF-ProTeamRoster.php#Senators">Pro Team Roster</a> ]
[ <a href="OTHL-PLF-FarmTeamScoring.php#Senators">Farm Team Scoring</a> ]
[ <a href="OTHL-PLF-FarmTeamLines.php#Senators">Farm Team Lines</a> ]
[ <a href="OTHL-PLF-FarmTeamSchedule.php#Senators">Farm Team Schedule</a> ]
[ <a href="OTHL-PLF-FarmTeamStats.php#Senators">Farm Team Stats</a> ]
[ <a href="OTHL-PLF-FarmTeamStatsVS.php#Senators">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Senators');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Senators" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW35">Day</th><th class="STHSW35">Game</th><th class="STHSW200">Visitor Team</th><th class="STHSW35">Score</th><th class="STHSW200">Home Team</th><th class="STHSW35">Score</th><th class="STHSW35">ST</th><th class="STHSW35">OT</th><th class="STHSW35">SO</th><th class="STHSW35">RI</th><th class="STHSW200">Link</th></tr></thead>
</table></div>
<h1 class="TeamScheduleFarm_SJB"><a id="Barracudas">Barracudas</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=26">Sharks Page</a> ]
[ <a href="OTHL-PLF-ProTeamRoster.php#Sharks">Pro Team Roster</a> ]
[ <a href="OTHL-PLF-FarmTeamScoring.php#Barracudas">Farm Team Scoring</a> ]
[ <a href="OTHL-PLF-FarmTeamLines.php#Barracudas">Farm Team Lines</a> ]
[ <a href="OTHL-PLF-FarmTeamSchedule.php#Barracudas">Farm Team Schedule</a> ]
[ <a href="OTHL-PLF-FarmTeamStats.php#Barracudas">Farm Team Stats</a> ]
[ <a href="OTHL-PLF-FarmTeamStatsVS.php#Barracudas">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Barracudas');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Barracudas" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW35">Day</th><th class="STHSW35">Game</th><th class="STHSW200">Visitor Team</th><th class="STHSW35">Score</th><th class="STHSW200">Home Team</th><th class="STHSW35">Score</th><th class="STHSW35">ST</th><th class="STHSW35">OT</th><th class="STHSW35">SO</th><th class="STHSW35">RI</th><th class="STHSW200">Link</th></tr></thead>
<tr><td>2</td><td>7</td><td><a href="OTHL-PLF-ProTeamRoster.php#Sharks">Barracudas</a></td><td>5</td><td><a href="OTHL-PLF-ProTeamRoster.php#Blackhawks">IceHogs</a></td><td>4</td><td>W</td><td>*</td><td></td><td></td><td><a href="OTHL-PLF-Farm-7.html">Game Direct Link</a></td></tr>
<tr><td>4</td><td>15</td><td><a href="OTHL-PLF-ProTeamRoster.php#Sharks">Barracudas</a></td><td>4</td><td><a href="OTHL-PLF-ProTeamRoster.php#Blackhawks">IceHogs</a></td><td>7</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PLF-Farm-15.html">Game Direct Link</a></td></tr>
<tr><td>6</td><td>23</td><td><a href="OTHL-PLF-ProTeamRoster.php#Blackhawks">IceHogs</a></td><td>2</td><td><a href="OTHL-PLF-ProTeamRoster.php#Sharks">Barracudas</a></td><td>4</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PLF-Farm-23.html">Game Direct Link</a></td></tr>
<tr><td>8</td><td>31</td><td><a href="OTHL-PLF-ProTeamRoster.php#Blackhawks">IceHogs</a></td><td>8</td><td><a href="OTHL-PLF-ProTeamRoster.php#Sharks">Barracudas</a></td><td>6</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PLF-Farm-31.html">Game Direct Link</a></td></tr>
<tr><td>10</td><td>39</td><td><a href="OTHL-PLF-ProTeamRoster.php#Sharks">Barracudas</a></td><td>3</td><td><a href="OTHL-PLF-ProTeamRoster.php#Blackhawks">IceHogs</a></td><td>5</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PLF-Farm-39.html">Game Direct Link</a></td></tr>
<tr><td>12</td><td>47</td><td><a href="OTHL-PLF-ProTeamRoster.php#Blackhawks">IceHogs</a></td><td>6</td><td><a href="OTHL-PLF-ProTeamRoster.php#Sharks">Barracudas</a></td><td>7</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PLF-Farm-47.html">Game Direct Link</a></td></tr>
<tr><td>14</td><td>55</td><td><a href="OTHL-PLF-ProTeamRoster.php#Sharks">Barracudas</a></td><td>4</td><td><a href="OTHL-PLF-ProTeamRoster.php#Blackhawks">IceHogs</a></td><td>12</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PLF-Farm-55.html">Game Direct Link</a></td></tr>
</table></div>
<h1 class="TeamScheduleFarm_TEX"><a id="Stars">Stars</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=10">Stars Page</a> ]
[ <a href="OTHL-PLF-ProTeamRoster.php#Stars">Pro Team Roster</a> ]
[ <a href="OTHL-PLF-FarmTeamScoring.php#Stars">Farm Team Scoring</a> ]
[ <a href="OTHL-PLF-FarmTeamLines.php#Stars">Farm Team Lines</a> ]
[ <a href="OTHL-PLF-FarmTeamSchedule.php#Stars">Farm Team Schedule</a> ]
[ <a href="OTHL-PLF-FarmTeamStats.php#Stars">Farm Team Stats</a> ]
[ <a href="OTHL-PLF-FarmTeamStatsVS.php#Stars">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Stars');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Stars" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW35">Day</th><th class="STHSW35">Game</th><th class="STHSW200">Visitor Team</th><th class="STHSW35">Score</th><th class="STHSW200">Home Team</th><th class="STHSW35">Score</th><th class="STHSW35">ST</th><th class="STHSW35">OT</th><th class="STHSW35">SO</th><th class="STHSW35">RI</th><th class="STHSW200">Link</th></tr></thead>
</table></div>
<h1 class="TeamScheduleFarm_IOA"><a id="Wild">Wild</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=15">Wild Page</a> ]
[ <a href="OTHL-PLF-ProTeamRoster.php#Wild">Pro Team Roster</a> ]
[ <a href="OTHL-PLF-FarmTeamScoring.php#Wild">Farm Team Scoring</a> ]
[ <a href="OTHL-PLF-FarmTeamLines.php#Wild">Farm Team Lines</a> ]
[ <a href="OTHL-PLF-FarmTeamSchedule.php#Wild">Farm Team Schedule</a> ]
[ <a href="OTHL-PLF-FarmTeamStats.php#Wild">Farm Team Stats</a> ]
[ <a href="OTHL-PLF-FarmTeamStatsVS.php#Wild">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Wild');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Wild" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW35">Day</th><th class="STHSW35">Game</th><th class="STHSW200">Visitor Team</th><th class="STHSW35">Score</th><th class="STHSW200">Home Team</th><th class="STHSW35">Score</th><th class="STHSW35">ST</th><th class="STHSW35">OT</th><th class="STHSW35">SO</th><th class="STHSW35">RI</th><th class="STHSW200">Link</th></tr></thead>
</table></div>
<?php include "Footer.php";?>
