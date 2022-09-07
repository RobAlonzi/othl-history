<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<title>OTHL - Farm Team Schedule</title>
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
<div class="STHSTopLink"><a id="STHSRosterTop"></a> <a href="#Eagles">Eagles</a> | <a href="#IceHogs">IceHogs</a> | <a href="#Monsters">Monsters</a> | <a href="#Rampage">Rampage </a> | <a href="#Bruins">Bruins</a> | <a href="#Rocket">Rocket</a> | <a href="#Canucks">Canucks</a> | <a href="#Bears">Bears</a> | <a href="#Roadrunners">Roadrunners</a> | <a href="#Comets">Comets</a> | <a href="#Gulls">Gulls</a> | <a href="#Heat">Heat</a> | <a href="#Phantoms">Phantoms</a> | <a href="#Wolves">Wolves</a> | <a href="#Checkers">Checkers</a> | <a href="#SoundTigers">Sound Tigers</a> | <a href="#Moose">Moose</a> | <a href="#Reign">Reign</a> | <a href="#Mariners">Mariners</a> | <a href="#Crunch">Crunch</a> | <a href="#Marlies">Marlies</a> | <a href="#Condors">Condors</a> | <a href="#Thunderbirds">Thunderbirds</a> | <a href="#Penguins">Penguins</a> | <a href="#Admirals">Admirals</a> | <a href="#WolfPack">Wolf Pack</a> | <a href="#Griffins">Griffins</a> | <a href="#Americans"> Americans</a> | <a href="#Senators">Senators</a> | <a href="#Barracudas">Barracudas</a> | <a href="#Stars">Stars</a> | <a href="#Wild">Wild</a> | <a href="javascript:STHS_JS_CloseAll('');">Close All Team View</a> | <a href="javascript:STHS_JS_OpenAll('');">Open All Team View</a>
</div>
<script>$(function(){$("table").basictablesorter()});</script>
<h1 class="TeamScheduleFarm_COL"><a id="Eagles">Eagles</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=8">Avalanche Page</a> ]
[ <a href="OTHL-PRE-ProTeamRoster.php#Avalanche">Pro Team Roster</a> ]
[ <a href="OTHL-PRE-FarmTeamScoring.php#Eagles">Farm Team Scoring</a> ]
[ <a href="OTHL-PRE-FarmTeamLines.php#Eagles">Farm Team Lines</a> ]
[ <a href="OTHL-PRE-FarmTeamSchedule.php#Eagles">Farm Team Schedule</a> ]
[ <a href="OTHL-PRE-FarmTeamStats.php#Eagles">Farm Team Stats</a> ]
[ <a href="OTHL-PRE-FarmTeamStatsVS.php#Eagles">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Eagles');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Eagles" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW35">Day</th><th class="STHSW35">Game</th><th class="STHSW200">Visitor Team</th><th class="STHSW35">Score</th><th class="STHSW200">Home Team</th><th class="STHSW35">Score</th><th class="STHSW35">ST</th><th class="STHSW35">OT</th><th class="STHSW35">SO</th><th class="STHSW35">RI</th><th class="STHSW200">Link</th></tr></thead>
<tr><td>1</td><td>11</td><td><a href="OTHL-PRE-ProTeamRoster.php#Ducks">Gulls</a></td><td>6</td><td><a href="OTHL-PRE-ProTeamRoster.php#Avalanche">Eagles</a></td><td>3</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-11.html">Game Direct Link</a></td></tr>
<tr><td>2</td><td>22</td><td><a href="OTHL-PRE-ProTeamRoster.php#Avalanche">Eagles</a></td><td>5</td><td><a href="OTHL-PRE-ProTeamRoster.php#Coyotes">Roadrunners</a></td><td>6</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-22.html">Game Direct Link</a></td></tr>
<tr><td>4</td><td>39</td><td><a href="OTHL-PRE-ProTeamRoster.php#Sharks">Barracudas</a></td><td>5</td><td><a href="OTHL-PRE-ProTeamRoster.php#Avalanche">Eagles</a></td><td>4</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-39.html">Game Direct Link</a></td></tr>
<tr><td>5</td><td>51</td><td><a href="OTHL-PRE-ProTeamRoster.php#Avalanche">Eagles</a></td><td>0</td><td><a href="OTHL-PRE-ProTeamRoster.php#Ducks">Gulls</a></td><td>6</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-51.html">Game Direct Link</a></td></tr>
<tr><td>7</td><td>75</td><td><a href="OTHL-PRE-ProTeamRoster.php#Ducks">Gulls</a></td><td>7</td><td><a href="OTHL-PRE-ProTeamRoster.php#Avalanche">Eagles</a></td><td>2</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-75.html">Game Direct Link</a></td></tr>
<tr><td>8</td><td>92</td><td><a href="OTHL-PRE-ProTeamRoster.php#Avalanche">Eagles</a></td><td>2</td><td><a href="OTHL-PRE-ProTeamRoster.php#Ducks">Gulls</a></td><td>7</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-92.html">Game Direct Link</a></td></tr>
<tr><td>9</td><td>106</td><td><a href="OTHL-PRE-ProTeamRoster.php#Coyotes">Roadrunners</a></td><td>5</td><td><a href="OTHL-PRE-ProTeamRoster.php#Avalanche">Eagles</a></td><td>4</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-106.html">Game Direct Link</a></td></tr>
<tr><td>10</td><td>129</td><td><a href="OTHL-PRE-ProTeamRoster.php#Oilers">Condors</a></td><td>11</td><td><a href="OTHL-PRE-ProTeamRoster.php#Avalanche">Eagles</a></td><td>0</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-129.html">Game Direct Link</a></td></tr>
<tr><td>11</td><td>131</td><td><a href="OTHL-PRE-ProTeamRoster.php#Avalanche">Eagles</a></td><td>1</td><td><a href="OTHL-PRE-ProTeamRoster.php#Flames">Heat</a></td><td>9</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-131.html">Game Direct Link</a></td></tr>
<tr><td>13</td><td>161</td><td><a href="OTHL-PRE-ProTeamRoster.php#Avalanche">Eagles</a></td><td>2</td><td><a href="OTHL-PRE-ProTeamRoster.php#Coyotes">Roadrunners</a></td><td>6</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-161.html">Game Direct Link</a></td></tr>
<tr><td>14</td><td>167</td><td><a href="OTHL-PRE-ProTeamRoster.php#Avalanche">Eagles</a></td><td>3</td><td><a href="OTHL-PRE-ProTeamRoster.php#Sharks">Barracudas</a></td><td>5</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-167.html">Game Direct Link</a></td></tr>
<tr><td>15</td><td>184</td><td><a href="OTHL-PRE-ProTeamRoster.php#Kings">Reign</a></td><td>6</td><td><a href="OTHL-PRE-ProTeamRoster.php#Avalanche">Eagles</a></td><td>1</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-184.html">Game Direct Link</a></td></tr>
<tr><td>17</td><td>202</td><td><a href="OTHL-PRE-ProTeamRoster.php#Avalanche">Eagles</a></td><td>2</td><td><a href="OTHL-PRE-ProTeamRoster.php#Kings">Reign</a></td><td>5</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-202.html">Game Direct Link</a></td></tr>
<tr><td>18</td><td>212</td><td><a href="OTHL-PRE-ProTeamRoster.php#Avalanche">Eagles</a></td><td>1</td><td><a href="OTHL-PRE-ProTeamRoster.php#Oilers">Condors</a></td><td>7</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-212.html">Game Direct Link</a></td></tr>
<tr><td>19</td><td>220</td><td><a href="OTHL-PRE-ProTeamRoster.php#Sharks">Barracudas</a></td><td>4</td><td><a href="OTHL-PRE-ProTeamRoster.php#Avalanche">Eagles</a></td><td>6</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-220.html">Game Direct Link</a></td></tr>
<tr><td>21</td><td>242</td><td><a href="OTHL-PRE-ProTeamRoster.php#Flames">Heat</a></td><td>5</td><td><a href="OTHL-PRE-ProTeamRoster.php#Avalanche">Eagles</a></td><td>0</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-242.html">Game Direct Link</a></td></tr>
</table></div>
<h1 class="TeamScheduleFarm_RCK"><a id="IceHogs">IceHogs</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=7">Blackhawks Page</a> ]
[ <a href="OTHL-PRE-ProTeamRoster.php#Blackhawks">Pro Team Roster</a> ]
[ <a href="OTHL-PRE-FarmTeamScoring.php#IceHogs">Farm Team Scoring</a> ]
[ <a href="OTHL-PRE-FarmTeamLines.php#IceHogs">Farm Team Lines</a> ]
[ <a href="OTHL-PRE-FarmTeamSchedule.php#IceHogs">Farm Team Schedule</a> ]
[ <a href="OTHL-PRE-FarmTeamStats.php#IceHogs">Farm Team Stats</a> ]
[ <a href="OTHL-PRE-FarmTeamStatsVS.php#IceHogs">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_IceHogs');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_IceHogs" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW35">Day</th><th class="STHSW35">Game</th><th class="STHSW200">Visitor Team</th><th class="STHSW35">Score</th><th class="STHSW200">Home Team</th><th class="STHSW35">Score</th><th class="STHSW35">ST</th><th class="STHSW35">OT</th><th class="STHSW35">SO</th><th class="STHSW35">RI</th><th class="STHSW200">Link</th></tr></thead>
<tr><td>2</td><td>16</td><td><a href="OTHL-PRE-ProTeamRoster.php#Wild">Wild</a></td><td>1</td><td><a href="OTHL-PRE-ProTeamRoster.php#Blackhawks">IceHogs</a></td><td>6</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-16.html">Game Direct Link</a></td></tr>
<tr><td>3</td><td>34</td><td><a href="OTHL-PRE-ProTeamRoster.php#Blackhawks">IceHogs</a></td><td>2</td><td><a href="OTHL-PRE-ProTeamRoster.php#Wild">Wild</a></td><td>4</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-34.html">Game Direct Link</a></td></tr>
<tr><td>4</td><td>48</td><td><a href="OTHL-PRE-ProTeamRoster.php#Sabres"> Americans</a></td><td>3</td><td><a href="OTHL-PRE-ProTeamRoster.php#Blackhawks">IceHogs</a></td><td>1</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-48.html">Game Direct Link</a></td></tr>
<tr><td>6</td><td>70</td><td><a href="OTHL-PRE-ProTeamRoster.php#GoldenKnights">Wolves</a></td><td>1</td><td><a href="OTHL-PRE-ProTeamRoster.php#Blackhawks">IceHogs</a></td><td>0</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-70.html">Game Direct Link</a></td></tr>
<tr><td>8</td><td>90</td><td><a href="OTHL-PRE-ProTeamRoster.php#Blackhawks">IceHogs</a></td><td>1</td><td><a href="OTHL-PRE-ProTeamRoster.php#Sabres"> Americans</a></td><td>3</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-90.html">Game Direct Link</a></td></tr>
<tr><td>9</td><td>105</td><td><a href="OTHL-PRE-ProTeamRoster.php#Stars">Stars</a></td><td>3</td><td><a href="OTHL-PRE-ProTeamRoster.php#Blackhawks">IceHogs</a></td><td>6</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-105.html">Game Direct Link</a></td></tr>
<tr><td>10</td><td>119</td><td><a href="OTHL-PRE-ProTeamRoster.php#Blackhawks">IceHogs</a></td><td>10</td><td><a href="OTHL-PRE-ProTeamRoster.php#Stars">Stars</a></td><td>4</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-119.html">Game Direct Link</a></td></tr>
<tr><td>11</td><td>136</td><td><a href="OTHL-PRE-ProTeamRoster.php#Predators">Admirals</a></td><td>0</td><td><a href="OTHL-PRE-ProTeamRoster.php#Blackhawks">IceHogs</a></td><td>5</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-136.html">Game Direct Link</a></td></tr>
<tr><td>12</td><td>146</td><td><a href="OTHL-PRE-ProTeamRoster.php#Blackhawks">IceHogs</a></td><td>1</td><td><a href="OTHL-PRE-ProTeamRoster.php#Jets">Moose</a></td><td>0</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-146.html">Game Direct Link</a></td></tr>
<tr><td>14</td><td>166</td><td><a href="OTHL-PRE-ProTeamRoster.php#Jets">Moose</a></td><td>2</td><td><a href="OTHL-PRE-ProTeamRoster.php#Blackhawks">IceHogs</a></td><td>5</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-166.html">Game Direct Link</a></td></tr>
<tr><td>15</td><td>178</td><td><a href="OTHL-PRE-ProTeamRoster.php#Blackhawks">IceHogs</a></td><td>3</td><td><a href="OTHL-PRE-ProTeamRoster.php#Kraken">Mariners</a></td><td>1</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-178.html">Game Direct Link</a></td></tr>
<tr><td>16</td><td>197</td><td><a href="OTHL-PRE-ProTeamRoster.php#Kraken">Mariners</a></td><td>6</td><td><a href="OTHL-PRE-ProTeamRoster.php#Blackhawks">IceHogs</a></td><td>4</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-197.html">Game Direct Link</a></td></tr>
<tr><td>18</td><td>214</td><td><a href="OTHL-PRE-ProTeamRoster.php#Blackhawks">IceHogs</a></td><td>3</td><td><a href="OTHL-PRE-ProTeamRoster.php#Predators">Admirals</a></td><td>2</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-214.html">Game Direct Link</a></td></tr>
<tr><td>19</td><td>224</td><td><a href="OTHL-PRE-ProTeamRoster.php#Blackhawks">IceHogs</a></td><td>2</td><td><a href="OTHL-PRE-ProTeamRoster.php#GoldenKnights">Wolves</a></td><td>1</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-224.html">Game Direct Link</a></td></tr>
<tr><td>20</td><td>232</td><td><a href="OTHL-PRE-ProTeamRoster.php#Blackhawks">IceHogs</a></td><td>8</td><td><a href="OTHL-PRE-ProTeamRoster.php#Blues">Rampage </a></td><td>1</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-232.html">Game Direct Link</a></td></tr>
<tr><td>22</td><td>252</td><td><a href="OTHL-PRE-ProTeamRoster.php#Blues">Rampage </a></td><td>0</td><td><a href="OTHL-PRE-ProTeamRoster.php#Blackhawks">IceHogs</a></td><td>6</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-252.html">Game Direct Link</a></td></tr>
</table></div>
<h1 class="TeamScheduleFarm_CLE"><a id="Monsters">Monsters</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=9">Blue Jackets Page</a> ]
[ <a href="OTHL-PRE-ProTeamRoster.php#BlueJackets">Pro Team Roster</a> ]
[ <a href="OTHL-PRE-FarmTeamScoring.php#Monsters">Farm Team Scoring</a> ]
[ <a href="OTHL-PRE-FarmTeamLines.php#Monsters">Farm Team Lines</a> ]
[ <a href="OTHL-PRE-FarmTeamSchedule.php#Monsters">Farm Team Schedule</a> ]
[ <a href="OTHL-PRE-FarmTeamStats.php#Monsters">Farm Team Stats</a> ]
[ <a href="OTHL-PRE-FarmTeamStatsVS.php#Monsters">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Monsters');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Monsters" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW35">Day</th><th class="STHSW35">Game</th><th class="STHSW200">Visitor Team</th><th class="STHSW35">Score</th><th class="STHSW200">Home Team</th><th class="STHSW35">Score</th><th class="STHSW35">ST</th><th class="STHSW35">OT</th><th class="STHSW35">SO</th><th class="STHSW35">RI</th><th class="STHSW200">Link</th></tr></thead>
<tr><td>1</td><td>7</td><td><a href="OTHL-PRE-ProTeamRoster.php#Canucks">Canucks</a></td><td>4</td><td><a href="OTHL-PRE-ProTeamRoster.php#BlueJackets">Monsters</a></td><td>2</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-7.html">Game Direct Link</a></td></tr>
<tr><td>2</td><td>29</td><td><a href="OTHL-PRE-ProTeamRoster.php#BlueJackets">Monsters</a></td><td>4</td><td><a href="OTHL-PRE-ProTeamRoster.php#RedWings">Griffins</a></td><td>1</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-29.html">Game Direct Link</a></td></tr>
<tr><td>4</td><td>44</td><td><a href="OTHL-PRE-ProTeamRoster.php#Canadiens">Rocket</a></td><td>1</td><td><a href="OTHL-PRE-ProTeamRoster.php#BlueJackets">Monsters</a></td><td>0</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-44.html">Game Direct Link</a></td></tr>
<tr><td>6</td><td>65</td><td><a href="OTHL-PRE-ProTeamRoster.php#MapleLeafs">Marlies</a></td><td>3</td><td><a href="OTHL-PRE-ProTeamRoster.php#BlueJackets">Monsters</a></td><td>1</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-65.html">Game Direct Link</a></td></tr>
<tr><td>7</td><td>79</td><td><a href="OTHL-PRE-ProTeamRoster.php#BlueJackets">Monsters</a></td><td>0</td><td><a href="OTHL-PRE-ProTeamRoster.php#MapleLeafs">Marlies</a></td><td>7</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-79.html">Game Direct Link</a></td></tr>
<tr><td>8</td><td>100</td><td><a href="OTHL-PRE-ProTeamRoster.php#Devils">Comets</a></td><td>1</td><td><a href="OTHL-PRE-ProTeamRoster.php#BlueJackets">Monsters</a></td><td>6</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-100.html">Game Direct Link</a></td></tr>
<tr><td>9</td><td>108</td><td><a href="OTHL-PRE-ProTeamRoster.php#BlueJackets">Monsters</a></td><td>7</td><td><a href="OTHL-PRE-ProTeamRoster.php#Lightning">Crunch</a></td><td>1</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-108.html">Game Direct Link</a></td></tr>
<tr><td>11</td><td>132</td><td><a href="OTHL-PRE-ProTeamRoster.php#Senators">Senators</a></td><td>3</td><td><a href="OTHL-PRE-ProTeamRoster.php#BlueJackets">Monsters</a></td><td>9</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-132.html">Game Direct Link</a></td></tr>
<tr><td>12</td><td>148</td><td><a href="OTHL-PRE-ProTeamRoster.php#BlueJackets">Monsters</a></td><td>5</td><td><a href="OTHL-PRE-ProTeamRoster.php#Devils">Comets</a></td><td>1</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-148.html">Game Direct Link</a></td></tr>
<tr><td>13</td><td>152</td><td><a href="OTHL-PRE-ProTeamRoster.php#BlueJackets">Monsters</a></td><td>3</td><td><a href="OTHL-PRE-ProTeamRoster.php#Canadiens">Rocket</a></td><td>4</td><td>L</td><td>*</td><td></td><td></td><td><a href="OTHL-PRE-Farm-152.html">Game Direct Link</a></td></tr>
<tr><td>14</td><td>171</td><td><a href="OTHL-PRE-ProTeamRoster.php#RedWings">Griffins</a></td><td>4</td><td><a href="OTHL-PRE-ProTeamRoster.php#BlueJackets">Monsters</a></td><td>5</td><td>W</td><td></td><td>*</td><td></td><td><a href="OTHL-PRE-Farm-171.html">Game Direct Link</a></td></tr>
<tr><td>15</td><td>179</td><td><a href="OTHL-PRE-ProTeamRoster.php#BlueJackets">Monsters</a></td><td>8</td><td><a href="OTHL-PRE-ProTeamRoster.php#Penguins">Penguins</a></td><td>5</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-179.html">Game Direct Link</a></td></tr>
<tr><td>16</td><td>190</td><td><a href="OTHL-PRE-ProTeamRoster.php#BlueJackets">Monsters</a></td><td>6</td><td><a href="OTHL-PRE-ProTeamRoster.php#Canucks">Canucks</a></td><td>2</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-190.html">Game Direct Link</a></td></tr>
<tr><td>18</td><td>217</td><td><a href="OTHL-PRE-ProTeamRoster.php#Coyotes">Roadrunners</a></td><td>1</td><td><a href="OTHL-PRE-ProTeamRoster.php#BlueJackets">Monsters</a></td><td>4</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-217.html">Game Direct Link</a></td></tr>
<tr><td>21</td><td>237</td><td><a href="OTHL-PRE-ProTeamRoster.php#Lightning">Crunch</a></td><td>0</td><td><a href="OTHL-PRE-ProTeamRoster.php#BlueJackets">Monsters</a></td><td>8</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-237.html">Game Direct Link</a></td></tr>
<tr><td>22</td><td>249</td><td><a href="OTHL-PRE-ProTeamRoster.php#BlueJackets">Monsters</a></td><td>6</td><td><a href="OTHL-PRE-ProTeamRoster.php#Senators">Senators</a></td><td>2</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-249.html">Game Direct Link</a></td></tr>
</table></div>
<h1 class="TeamScheduleFarm_SAR"><a id="Rampage">Rampage </a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=25">Blues Page</a> ]
[ <a href="OTHL-PRE-ProTeamRoster.php#Blues">Pro Team Roster</a> ]
[ <a href="OTHL-PRE-FarmTeamScoring.php#Rampage">Farm Team Scoring</a> ]
[ <a href="OTHL-PRE-FarmTeamLines.php#Rampage">Farm Team Lines</a> ]
[ <a href="OTHL-PRE-FarmTeamSchedule.php#Rampage">Farm Team Schedule</a> ]
[ <a href="OTHL-PRE-FarmTeamStats.php#Rampage">Farm Team Stats</a> ]
[ <a href="OTHL-PRE-FarmTeamStatsVS.php#Rampage">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Rampage');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Rampage" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW35">Day</th><th class="STHSW35">Game</th><th class="STHSW200">Visitor Team</th><th class="STHSW35">Score</th><th class="STHSW200">Home Team</th><th class="STHSW35">Score</th><th class="STHSW35">ST</th><th class="STHSW35">OT</th><th class="STHSW35">SO</th><th class="STHSW35">RI</th><th class="STHSW200">Link</th></tr></thead>
<tr><td>1</td><td>9</td><td><a href="OTHL-PRE-ProTeamRoster.php#Blues">Rampage </a></td><td>1</td><td><a href="OTHL-PRE-ProTeamRoster.php#Predators">Admirals</a></td><td>11</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-9.html">Game Direct Link</a></td></tr>
<tr><td>2</td><td>27</td><td><a href="OTHL-PRE-ProTeamRoster.php#Sabres"> Americans</a></td><td>7</td><td><a href="OTHL-PRE-ProTeamRoster.php#Blues">Rampage </a></td><td>1</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-27.html">Game Direct Link</a></td></tr>
<tr><td>4</td><td>42</td><td><a href="OTHL-PRE-ProTeamRoster.php#Stars">Stars</a></td><td>8</td><td><a href="OTHL-PRE-ProTeamRoster.php#Blues">Rampage </a></td><td>3</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-42.html">Game Direct Link</a></td></tr>
<tr><td>6</td><td>64</td><td><a href="OTHL-PRE-ProTeamRoster.php#Jets">Moose</a></td><td>7</td><td><a href="OTHL-PRE-ProTeamRoster.php#Blues">Rampage </a></td><td>1</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-64.html">Game Direct Link</a></td></tr>
<tr><td>7</td><td>85</td><td><a href="OTHL-PRE-ProTeamRoster.php#Blues">Rampage </a></td><td>4</td><td><a href="OTHL-PRE-ProTeamRoster.php#Wild">Wild</a></td><td>5</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-85.html">Game Direct Link</a></td></tr>
<tr><td>8</td><td>96</td><td><a href="OTHL-PRE-ProTeamRoster.php#Blues">Rampage </a></td><td>3</td><td><a href="OTHL-PRE-ProTeamRoster.php#Kraken">Mariners</a></td><td>7</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-96.html">Game Direct Link</a></td></tr>
<tr><td>9</td><td>109</td><td><a href="OTHL-PRE-ProTeamRoster.php#Kraken">Mariners</a></td><td>8</td><td><a href="OTHL-PRE-ProTeamRoster.php#Blues">Rampage </a></td><td>2</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-109.html">Game Direct Link</a></td></tr>
<tr><td>10</td><td>125</td><td><a href="OTHL-PRE-ProTeamRoster.php#Blues">Rampage </a></td><td>1</td><td><a href="OTHL-PRE-ProTeamRoster.php#GoldenKnights">Wolves</a></td><td>4</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-125.html">Game Direct Link</a></td></tr>
<tr><td>12</td><td>142</td><td><a href="OTHL-PRE-ProTeamRoster.php#Predators">Admirals</a></td><td>4</td><td><a href="OTHL-PRE-ProTeamRoster.php#Blues">Rampage </a></td><td>1</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-142.html">Game Direct Link</a></td></tr>
<tr><td>13</td><td>157</td><td><a href="OTHL-PRE-ProTeamRoster.php#Blues">Rampage </a></td><td>0</td><td><a href="OTHL-PRE-ProTeamRoster.php#Sabres"> Americans</a></td><td>9</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-157.html">Game Direct Link</a></td></tr>
<tr><td>14</td><td>173</td><td><a href="OTHL-PRE-ProTeamRoster.php#Wild">Wild</a></td><td>4</td><td><a href="OTHL-PRE-ProTeamRoster.php#Blues">Rampage </a></td><td>6</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-173.html">Game Direct Link</a></td></tr>
<tr><td>17</td><td>198</td><td><a href="OTHL-PRE-ProTeamRoster.php#GoldenKnights">Wolves</a></td><td>3</td><td><a href="OTHL-PRE-ProTeamRoster.php#Blues">Rampage </a></td><td>0</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-198.html">Game Direct Link</a></td></tr>
<tr><td>18</td><td>211</td><td><a href="OTHL-PRE-ProTeamRoster.php#Blues">Rampage </a></td><td>1</td><td><a href="OTHL-PRE-ProTeamRoster.php#Jets">Moose</a></td><td>10</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-211.html">Game Direct Link</a></td></tr>
<tr><td>20</td><td>232</td><td><a href="OTHL-PRE-ProTeamRoster.php#Blackhawks">IceHogs</a></td><td>8</td><td><a href="OTHL-PRE-ProTeamRoster.php#Blues">Rampage </a></td><td>1</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-232.html">Game Direct Link</a></td></tr>
<tr><td>21</td><td>236</td><td><a href="OTHL-PRE-ProTeamRoster.php#Blues">Rampage </a></td><td>3</td><td><a href="OTHL-PRE-ProTeamRoster.php#Stars">Stars</a></td><td>4</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-236.html">Game Direct Link</a></td></tr>
<tr><td>22</td><td>252</td><td><a href="OTHL-PRE-ProTeamRoster.php#Blues">Rampage </a></td><td>0</td><td><a href="OTHL-PRE-ProTeamRoster.php#Blackhawks">IceHogs</a></td><td>6</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-252.html">Game Direct Link</a></td></tr>
</table></div>
<h1 class="TeamScheduleFarm_PRO"><a id="Bruins">Bruins</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=3">Bruins Page</a> ]
[ <a href="OTHL-PRE-ProTeamRoster.php#Bruins">Pro Team Roster</a> ]
[ <a href="OTHL-PRE-FarmTeamScoring.php#Bruins">Farm Team Scoring</a> ]
[ <a href="OTHL-PRE-FarmTeamLines.php#Bruins">Farm Team Lines</a> ]
[ <a href="OTHL-PRE-FarmTeamSchedule.php#Bruins">Farm Team Schedule</a> ]
[ <a href="OTHL-PRE-FarmTeamStats.php#Bruins">Farm Team Stats</a> ]
[ <a href="OTHL-PRE-FarmTeamStatsVS.php#Bruins">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Bruins');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Bruins" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW35">Day</th><th class="STHSW35">Game</th><th class="STHSW200">Visitor Team</th><th class="STHSW35">Score</th><th class="STHSW200">Home Team</th><th class="STHSW35">Score</th><th class="STHSW35">ST</th><th class="STHSW35">OT</th><th class="STHSW35">SO</th><th class="STHSW35">RI</th><th class="STHSW200">Link</th></tr></thead>
<tr><td>1</td><td>6</td><td><a href="OTHL-PRE-ProTeamRoster.php#Hurricanes">Checkers</a></td><td>1</td><td><a href="OTHL-PRE-ProTeamRoster.php#Bruins">Bruins</a></td><td>5</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-6.html">Game Direct Link</a></td></tr>
<tr><td>2</td><td>26</td><td><a href="OTHL-PRE-ProTeamRoster.php#Bruins">Bruins</a></td><td>7</td><td><a href="OTHL-PRE-ProTeamRoster.php#Hurricanes">Checkers</a></td><td>6</td><td>W</td><td>*</td><td></td><td></td><td><a href="OTHL-PRE-Farm-26.html">Game Direct Link</a></td></tr>
<tr><td>4</td><td>38</td><td><a href="OTHL-PRE-ProTeamRoster.php#Penguins">Penguins</a></td><td>1</td><td><a href="OTHL-PRE-ProTeamRoster.php#Bruins">Bruins</a></td><td>7</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-38.html">Game Direct Link</a></td></tr>
<tr><td>6</td><td>66</td><td><a href="OTHL-PRE-ProTeamRoster.php#RedWings">Griffins</a></td><td>3</td><td><a href="OTHL-PRE-ProTeamRoster.php#Bruins">Bruins</a></td><td>5</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-66.html">Game Direct Link</a></td></tr>
<tr><td>7</td><td>78</td><td><a href="OTHL-PRE-ProTeamRoster.php#Bruins">Bruins</a></td><td>9</td><td><a href="OTHL-PRE-ProTeamRoster.php#Rangers">Wolf Pack</a></td><td>1</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-78.html">Game Direct Link</a></td></tr>
<tr><td>8</td><td>98</td><td><a href="OTHL-PRE-ProTeamRoster.php#Bruins">Bruins</a></td><td>8</td><td><a href="OTHL-PRE-ProTeamRoster.php#Islanders">Sound Tigers</a></td><td>0</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-98.html">Game Direct Link</a></td></tr>
<tr><td>9</td><td>104</td><td><a href="OTHL-PRE-ProTeamRoster.php#Bruins">Bruins</a></td><td>4</td><td><a href="OTHL-PRE-ProTeamRoster.php#Flyers">Phantoms</a></td><td>7</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-104.html">Game Direct Link</a></td></tr>
<tr><td>10</td><td>121</td><td><a href="OTHL-PRE-ProTeamRoster.php#Islanders">Sound Tigers</a></td><td>0</td><td><a href="OTHL-PRE-ProTeamRoster.php#Bruins">Bruins</a></td><td>6</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-121.html">Game Direct Link</a></td></tr>
<tr><td>11</td><td>141</td><td><a href="OTHL-PRE-ProTeamRoster.php#Bruins">Bruins</a></td><td>10</td><td><a href="OTHL-PRE-ProTeamRoster.php#Capitals">Bears</a></td><td>2</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-141.html">Game Direct Link</a></td></tr>
<tr><td>13</td><td>153</td><td><a href="OTHL-PRE-ProTeamRoster.php#Panthers">Thunderbirds</a></td><td>2</td><td><a href="OTHL-PRE-ProTeamRoster.php#Bruins">Bruins</a></td><td>7</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-153.html">Game Direct Link</a></td></tr>
<tr><td>14</td><td>170</td><td><a href="OTHL-PRE-ProTeamRoster.php#Bruins">Bruins</a></td><td>4</td><td><a href="OTHL-PRE-ProTeamRoster.php#Oilers">Condors</a></td><td>2</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-170.html">Game Direct Link</a></td></tr>
<tr><td>15</td><td>183</td><td><a href="OTHL-PRE-ProTeamRoster.php#Rangers">Wolf Pack</a></td><td>3</td><td><a href="OTHL-PRE-ProTeamRoster.php#Bruins">Bruins</a></td><td>7</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-183.html">Game Direct Link</a></td></tr>
<tr><td>16</td><td>188</td><td><a href="OTHL-PRE-ProTeamRoster.php#Bruins">Bruins</a></td><td>4</td><td><a href="OTHL-PRE-ProTeamRoster.php#Panthers">Thunderbirds</a></td><td>3</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-188.html">Game Direct Link</a></td></tr>
<tr><td>17</td><td>199</td><td><a href="OTHL-PRE-ProTeamRoster.php#Bruins">Bruins</a></td><td>12</td><td><a href="OTHL-PRE-ProTeamRoster.php#Penguins">Penguins</a></td><td>0</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-199.html">Game Direct Link</a></td></tr>
<tr><td>18</td><td>218</td><td><a href="OTHL-PRE-ProTeamRoster.php#Capitals">Bears</a></td><td>1</td><td><a href="OTHL-PRE-ProTeamRoster.php#Bruins">Bruins</a></td><td>7</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-218.html">Game Direct Link</a></td></tr>
<tr><td>22</td><td>253</td><td><a href="OTHL-PRE-ProTeamRoster.php#Flyers">Phantoms</a></td><td>2</td><td><a href="OTHL-PRE-ProTeamRoster.php#Bruins">Bruins</a></td><td>1</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-253.html">Game Direct Link</a></td></tr>
</table></div>
<h1 class="TeamScheduleFarm_LAV"><a id="Rocket">Rocket</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=16">Canadiens Page</a> ]
[ <a href="OTHL-PRE-ProTeamRoster.php#Canadiens">Pro Team Roster</a> ]
[ <a href="OTHL-PRE-FarmTeamScoring.php#Rocket">Farm Team Scoring</a> ]
[ <a href="OTHL-PRE-FarmTeamLines.php#Rocket">Farm Team Lines</a> ]
[ <a href="OTHL-PRE-FarmTeamSchedule.php#Rocket">Farm Team Schedule</a> ]
[ <a href="OTHL-PRE-FarmTeamStats.php#Rocket">Farm Team Stats</a> ]
[ <a href="OTHL-PRE-FarmTeamStatsVS.php#Rocket">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Rocket');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Rocket" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW35">Day</th><th class="STHSW35">Game</th><th class="STHSW200">Visitor Team</th><th class="STHSW35">Score</th><th class="STHSW200">Home Team</th><th class="STHSW35">Score</th><th class="STHSW35">ST</th><th class="STHSW35">OT</th><th class="STHSW35">SO</th><th class="STHSW35">RI</th><th class="STHSW200">Link</th></tr></thead>
<tr><td>1</td><td>2</td><td><a href="OTHL-PRE-ProTeamRoster.php#Canadiens">Rocket</a></td><td>6</td><td><a href="OTHL-PRE-ProTeamRoster.php#Lightning">Crunch</a></td><td>2</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-2.html">Game Direct Link</a></td></tr>
<tr><td>2</td><td>24</td><td><a href="OTHL-PRE-ProTeamRoster.php#MapleLeafs">Marlies</a></td><td>1</td><td><a href="OTHL-PRE-ProTeamRoster.php#Canadiens">Rocket</a></td><td>2</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-24.html">Game Direct Link</a></td></tr>
<tr><td>4</td><td>44</td><td><a href="OTHL-PRE-ProTeamRoster.php#Canadiens">Rocket</a></td><td>1</td><td><a href="OTHL-PRE-ProTeamRoster.php#BlueJackets">Monsters</a></td><td>0</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-44.html">Game Direct Link</a></td></tr>
<tr><td>5</td><td>58</td><td><a href="OTHL-PRE-ProTeamRoster.php#RedWings">Griffins</a></td><td>2</td><td><a href="OTHL-PRE-ProTeamRoster.php#Canadiens">Rocket</a></td><td>3</td><td>W</td><td>*</td><td></td><td></td><td><a href="OTHL-PRE-Farm-58.html">Game Direct Link</a></td></tr>
<tr><td>6</td><td>73</td><td><a href="OTHL-PRE-ProTeamRoster.php#Canadiens">Rocket</a></td><td>3</td><td><a href="OTHL-PRE-ProTeamRoster.php#Canucks">Canucks</a></td><td>1</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-73.html">Game Direct Link</a></td></tr>
<tr><td>7</td><td>76</td><td><a href="OTHL-PRE-ProTeamRoster.php#Canadiens">Rocket</a></td><td>8</td><td><a href="OTHL-PRE-ProTeamRoster.php#Senators">Senators</a></td><td>1</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-76.html">Game Direct Link</a></td></tr>
<tr><td>8</td><td>91</td><td><a href="OTHL-PRE-ProTeamRoster.php#Senators">Senators</a></td><td>0</td><td><a href="OTHL-PRE-ProTeamRoster.php#Canadiens">Rocket</a></td><td>7</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-91.html">Game Direct Link</a></td></tr>
<tr><td>10</td><td>118</td><td><a href="OTHL-PRE-ProTeamRoster.php#Lightning">Crunch</a></td><td>1</td><td><a href="OTHL-PRE-ProTeamRoster.php#Canadiens">Rocket</a></td><td>4</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-118.html">Game Direct Link</a></td></tr>
<tr><td>11</td><td>133</td><td><a href="OTHL-PRE-ProTeamRoster.php#Canadiens">Rocket</a></td><td>1</td><td><a href="OTHL-PRE-ProTeamRoster.php#MapleLeafs">Marlies</a></td><td>2</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-133.html">Game Direct Link</a></td></tr>
<tr><td>13</td><td>152</td><td><a href="OTHL-PRE-ProTeamRoster.php#BlueJackets">Monsters</a></td><td>3</td><td><a href="OTHL-PRE-ProTeamRoster.php#Canadiens">Rocket</a></td><td>4</td><td>W</td><td>*</td><td></td><td></td><td><a href="OTHL-PRE-Farm-152.html">Game Direct Link</a></td></tr>
<tr><td>14</td><td>168</td><td><a href="OTHL-PRE-ProTeamRoster.php#Canucks">Canucks</a></td><td>1</td><td><a href="OTHL-PRE-ProTeamRoster.php#Canadiens">Rocket</a></td><td>2</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-168.html">Game Direct Link</a></td></tr>
<tr><td>15</td><td>182</td><td><a href="OTHL-PRE-ProTeamRoster.php#Canadiens">Rocket</a></td><td>6</td><td><a href="OTHL-PRE-ProTeamRoster.php#Devils">Comets</a></td><td>2</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-182.html">Game Direct Link</a></td></tr>
<tr><td>16</td><td>196</td><td><a href="OTHL-PRE-ProTeamRoster.php#Canadiens">Rocket</a></td><td>4</td><td><a href="OTHL-PRE-ProTeamRoster.php#Lightning">Crunch</a></td><td>1</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-196.html">Game Direct Link</a></td></tr>
<tr><td>18</td><td>215</td><td><a href="OTHL-PRE-ProTeamRoster.php#MapleLeafs">Marlies</a></td><td>7</td><td><a href="OTHL-PRE-ProTeamRoster.php#Canadiens">Rocket</a></td><td>0</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-215.html">Game Direct Link</a></td></tr>
<tr><td>20</td><td>235</td><td><a href="OTHL-PRE-ProTeamRoster.php#Devils">Comets</a></td><td>0</td><td><a href="OTHL-PRE-ProTeamRoster.php#Canadiens">Rocket</a></td><td>5</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-235.html">Game Direct Link</a></td></tr>
<tr><td>21</td><td>239</td><td><a href="OTHL-PRE-ProTeamRoster.php#Canadiens">Rocket</a></td><td>6</td><td><a href="OTHL-PRE-ProTeamRoster.php#RedWings">Griffins</a></td><td>2</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-239.html">Game Direct Link</a></td></tr>
</table></div>
<h1 class="TeamScheduleFarm_ABB"><a id="Canucks">Canucks</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=29">Canucks Page</a> ]
[ <a href="OTHL-PRE-ProTeamRoster.php#Canucks">Pro Team Roster</a> ]
[ <a href="OTHL-PRE-FarmTeamScoring.php#Canucks">Farm Team Scoring</a> ]
[ <a href="OTHL-PRE-FarmTeamLines.php#Canucks">Farm Team Lines</a> ]
[ <a href="OTHL-PRE-FarmTeamSchedule.php#Canucks">Farm Team Schedule</a> ]
[ <a href="OTHL-PRE-FarmTeamStats.php#Canucks">Farm Team Stats</a> ]
[ <a href="OTHL-PRE-FarmTeamStatsVS.php#Canucks">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Canucks');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Canucks" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW35">Day</th><th class="STHSW35">Game</th><th class="STHSW200">Visitor Team</th><th class="STHSW35">Score</th><th class="STHSW200">Home Team</th><th class="STHSW35">Score</th><th class="STHSW35">ST</th><th class="STHSW35">OT</th><th class="STHSW35">SO</th><th class="STHSW35">RI</th><th class="STHSW200">Link</th></tr></thead>
<tr><td>1</td><td>7</td><td><a href="OTHL-PRE-ProTeamRoster.php#Canucks">Canucks</a></td><td>4</td><td><a href="OTHL-PRE-ProTeamRoster.php#BlueJackets">Monsters</a></td><td>2</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-7.html">Game Direct Link</a></td></tr>
<tr><td>2</td><td>18</td><td><a href="OTHL-PRE-ProTeamRoster.php#Senators">Senators</a></td><td>2</td><td><a href="OTHL-PRE-ProTeamRoster.php#Canucks">Canucks</a></td><td>12</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-18.html">Game Direct Link</a></td></tr>
<tr><td>4</td><td>45</td><td><a href="OTHL-PRE-ProTeamRoster.php#Canucks">Canucks</a></td><td>3</td><td><a href="OTHL-PRE-ProTeamRoster.php#MapleLeafs">Marlies</a></td><td>2</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-45.html">Game Direct Link</a></td></tr>
<tr><td>5</td><td>56</td><td><a href="OTHL-PRE-ProTeamRoster.php#Lightning">Crunch</a></td><td>2</td><td><a href="OTHL-PRE-ProTeamRoster.php#Canucks">Canucks</a></td><td>3</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-56.html">Game Direct Link</a></td></tr>
<tr><td>6</td><td>73</td><td><a href="OTHL-PRE-ProTeamRoster.php#Canadiens">Rocket</a></td><td>3</td><td><a href="OTHL-PRE-ProTeamRoster.php#Canucks">Canucks</a></td><td>1</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-73.html">Game Direct Link</a></td></tr>
<tr><td>7</td><td>88</td><td><a href="OTHL-PRE-ProTeamRoster.php#Canucks">Canucks</a></td><td>5</td><td><a href="OTHL-PRE-ProTeamRoster.php#Devils">Comets</a></td><td>4</td><td>W</td><td></td><td>*</td><td></td><td><a href="OTHL-PRE-Farm-88.html">Game Direct Link</a></td></tr>
<tr><td>8</td><td>97</td><td><a href="OTHL-PRE-ProTeamRoster.php#Canucks">Canucks</a></td><td>5</td><td><a href="OTHL-PRE-ProTeamRoster.php#Rangers">Wolf Pack</a></td><td>1</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-97.html">Game Direct Link</a></td></tr>
<tr><td>9</td><td>114</td><td><a href="OTHL-PRE-ProTeamRoster.php#Devils">Comets</a></td><td>3</td><td><a href="OTHL-PRE-ProTeamRoster.php#Canucks">Canucks</a></td><td>5</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-114.html">Game Direct Link</a></td></tr>
<tr><td>11</td><td>137</td><td><a href="OTHL-PRE-ProTeamRoster.php#RedWings">Griffins</a></td><td>3</td><td><a href="OTHL-PRE-ProTeamRoster.php#Canucks">Canucks</a></td><td>5</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-137.html">Game Direct Link</a></td></tr>
<tr><td>12</td><td>150</td><td><a href="OTHL-PRE-ProTeamRoster.php#Canucks">Canucks</a></td><td>6</td><td><a href="OTHL-PRE-ProTeamRoster.php#Senators">Senators</a></td><td>0</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-150.html">Game Direct Link</a></td></tr>
<tr><td>14</td><td>168</td><td><a href="OTHL-PRE-ProTeamRoster.php#Canucks">Canucks</a></td><td>1</td><td><a href="OTHL-PRE-ProTeamRoster.php#Canadiens">Rocket</a></td><td>2</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-168.html">Game Direct Link</a></td></tr>
<tr><td>15</td><td>176</td><td><a href="OTHL-PRE-ProTeamRoster.php#Canucks">Canucks</a></td><td>8</td><td><a href="OTHL-PRE-ProTeamRoster.php#Lightning">Crunch</a></td><td>1</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-176.html">Game Direct Link</a></td></tr>
<tr><td>16</td><td>190</td><td><a href="OTHL-PRE-ProTeamRoster.php#BlueJackets">Monsters</a></td><td>6</td><td><a href="OTHL-PRE-ProTeamRoster.php#Canucks">Canucks</a></td><td>2</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-190.html">Game Direct Link</a></td></tr>
<tr><td>18</td><td>216</td><td><a href="OTHL-PRE-ProTeamRoster.php#Islanders">Sound Tigers</a></td><td>1</td><td><a href="OTHL-PRE-ProTeamRoster.php#Canucks">Canucks</a></td><td>7</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-216.html">Game Direct Link</a></td></tr>
<tr><td>19</td><td>222</td><td><a href="OTHL-PRE-ProTeamRoster.php#Canucks">Canucks</a></td><td>6</td><td><a href="OTHL-PRE-ProTeamRoster.php#RedWings">Griffins</a></td><td>0</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-222.html">Game Direct Link</a></td></tr>
<tr><td>22</td><td>254</td><td><a href="OTHL-PRE-ProTeamRoster.php#MapleLeafs">Marlies</a></td><td>0</td><td><a href="OTHL-PRE-ProTeamRoster.php#Canucks">Canucks</a></td><td>1</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-254.html">Game Direct Link</a></td></tr>
</table></div>
<h1 class="TeamScheduleFarm_HER"><a id="Bears">Bears</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=30">Capitals Page</a> ]
[ <a href="OTHL-PRE-ProTeamRoster.php#Capitals">Pro Team Roster</a> ]
[ <a href="OTHL-PRE-FarmTeamScoring.php#Bears">Farm Team Scoring</a> ]
[ <a href="OTHL-PRE-FarmTeamLines.php#Bears">Farm Team Lines</a> ]
[ <a href="OTHL-PRE-FarmTeamSchedule.php#Bears">Farm Team Schedule</a> ]
[ <a href="OTHL-PRE-FarmTeamStats.php#Bears">Farm Team Stats</a> ]
[ <a href="OTHL-PRE-FarmTeamStatsVS.php#Bears">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Bears');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Bears" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW35">Day</th><th class="STHSW35">Game</th><th class="STHSW200">Visitor Team</th><th class="STHSW35">Score</th><th class="STHSW200">Home Team</th><th class="STHSW35">Score</th><th class="STHSW35">ST</th><th class="STHSW35">OT</th><th class="STHSW35">SO</th><th class="STHSW35">RI</th><th class="STHSW200">Link</th></tr></thead>
<tr><td>1</td><td>5</td><td><a href="OTHL-PRE-ProTeamRoster.php#Rangers">Wolf Pack</a></td><td>5</td><td><a href="OTHL-PRE-ProTeamRoster.php#Capitals">Bears</a></td><td>3</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-5.html">Game Direct Link</a></td></tr>
<tr><td>2</td><td>28</td><td><a href="OTHL-PRE-ProTeamRoster.php#Capitals">Bears</a></td><td>7</td><td><a href="OTHL-PRE-ProTeamRoster.php#Rangers">Wolf Pack</a></td><td>5</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-28.html">Game Direct Link</a></td></tr>
<tr><td>4</td><td>41</td><td><a href="OTHL-PRE-ProTeamRoster.php#Capitals">Bears</a></td><td>3</td><td><a href="OTHL-PRE-ProTeamRoster.php#Hurricanes">Checkers</a></td><td>5</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-41.html">Game Direct Link</a></td></tr>
<tr><td>5</td><td>57</td><td><a href="OTHL-PRE-ProTeamRoster.php#Panthers">Thunderbirds</a></td><td>8</td><td><a href="OTHL-PRE-ProTeamRoster.php#Capitals">Bears</a></td><td>1</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-57.html">Game Direct Link</a></td></tr>
<tr><td>7</td><td>74</td><td><a href="OTHL-PRE-ProTeamRoster.php#Capitals">Bears</a></td><td>1</td><td><a href="OTHL-PRE-ProTeamRoster.php#Flyers">Phantoms</a></td><td>7</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-74.html">Game Direct Link</a></td></tr>
<tr><td>8</td><td>89</td><td><a href="OTHL-PRE-ProTeamRoster.php#Flyers">Phantoms</a></td><td>11</td><td><a href="OTHL-PRE-ProTeamRoster.php#Capitals">Bears</a></td><td>1</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-89.html">Game Direct Link</a></td></tr>
<tr><td>9</td><td>107</td><td><a href="OTHL-PRE-ProTeamRoster.php#Capitals">Bears</a></td><td>2</td><td><a href="OTHL-PRE-ProTeamRoster.php#Senators">Senators</a></td><td>9</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-107.html">Game Direct Link</a></td></tr>
<tr><td>10</td><td>120</td><td><a href="OTHL-PRE-ProTeamRoster.php#Hurricanes">Checkers</a></td><td>8</td><td><a href="OTHL-PRE-ProTeamRoster.php#Capitals">Bears</a></td><td>5</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-120.html">Game Direct Link</a></td></tr>
<tr><td>11</td><td>141</td><td><a href="OTHL-PRE-ProTeamRoster.php#Bruins">Bruins</a></td><td>10</td><td><a href="OTHL-PRE-ProTeamRoster.php#Capitals">Bears</a></td><td>2</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-141.html">Game Direct Link</a></td></tr>
<tr><td>12</td><td>149</td><td><a href="OTHL-PRE-ProTeamRoster.php#Capitals">Bears</a></td><td>5</td><td><a href="OTHL-PRE-ProTeamRoster.php#Penguins">Penguins</a></td><td>7</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-149.html">Game Direct Link</a></td></tr>
<tr><td>14</td><td>165</td><td><a href="OTHL-PRE-ProTeamRoster.php#Capitals">Bears</a></td><td>6</td><td><a href="OTHL-PRE-ProTeamRoster.php#Islanders">Sound Tigers</a></td><td>3</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-165.html">Game Direct Link</a></td></tr>
<tr><td>16</td><td>185</td><td><a href="OTHL-PRE-ProTeamRoster.php#Islanders">Sound Tigers</a></td><td>5</td><td><a href="OTHL-PRE-ProTeamRoster.php#Capitals">Bears</a></td><td>4</td><td>L</td><td>*</td><td></td><td></td><td><a href="OTHL-PRE-Farm-185.html">Game Direct Link</a></td></tr>
<tr><td>17</td><td>201</td><td><a href="OTHL-PRE-ProTeamRoster.php#Rangers">Wolf Pack</a></td><td>5</td><td><a href="OTHL-PRE-ProTeamRoster.php#Capitals">Bears</a></td><td>6</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-201.html">Game Direct Link</a></td></tr>
<tr><td>18</td><td>218</td><td><a href="OTHL-PRE-ProTeamRoster.php#Capitals">Bears</a></td><td>1</td><td><a href="OTHL-PRE-ProTeamRoster.php#Bruins">Bruins</a></td><td>7</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-218.html">Game Direct Link</a></td></tr>
<tr><td>19</td><td>223</td><td><a href="OTHL-PRE-ProTeamRoster.php#Capitals">Bears</a></td><td>2</td><td><a href="OTHL-PRE-ProTeamRoster.php#Panthers">Thunderbirds</a></td><td>3</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-223.html">Game Direct Link</a></td></tr>
<tr><td>21</td><td>246</td><td><a href="OTHL-PRE-ProTeamRoster.php#Penguins">Penguins</a></td><td>5</td><td><a href="OTHL-PRE-ProTeamRoster.php#Capitals">Bears</a></td><td>4</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-246.html">Game Direct Link</a></td></tr>
</table></div>
<h1 class="TeamScheduleFarm_TUC"><a id="Roadrunners">Roadrunners</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=23">Coyotes Page</a> ]
[ <a href="OTHL-PRE-ProTeamRoster.php#Coyotes">Pro Team Roster</a> ]
[ <a href="OTHL-PRE-FarmTeamScoring.php#Roadrunners">Farm Team Scoring</a> ]
[ <a href="OTHL-PRE-FarmTeamLines.php#Roadrunners">Farm Team Lines</a> ]
[ <a href="OTHL-PRE-FarmTeamSchedule.php#Roadrunners">Farm Team Schedule</a> ]
[ <a href="OTHL-PRE-FarmTeamStats.php#Roadrunners">Farm Team Stats</a> ]
[ <a href="OTHL-PRE-FarmTeamStatsVS.php#Roadrunners">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Roadrunners');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Roadrunners" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW35">Day</th><th class="STHSW35">Game</th><th class="STHSW200">Visitor Team</th><th class="STHSW35">Score</th><th class="STHSW200">Home Team</th><th class="STHSW35">Score</th><th class="STHSW35">ST</th><th class="STHSW35">OT</th><th class="STHSW35">SO</th><th class="STHSW35">RI</th><th class="STHSW200">Link</th></tr></thead>
<tr><td>1</td><td>10</td><td><a href="OTHL-PRE-ProTeamRoster.php#Coyotes">Roadrunners</a></td><td>2</td><td><a href="OTHL-PRE-ProTeamRoster.php#Oilers">Condors</a></td><td>9</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-10.html">Game Direct Link</a></td></tr>
<tr><td>2</td><td>22</td><td><a href="OTHL-PRE-ProTeamRoster.php#Avalanche">Eagles</a></td><td>5</td><td><a href="OTHL-PRE-ProTeamRoster.php#Coyotes">Roadrunners</a></td><td>6</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-22.html">Game Direct Link</a></td></tr>
<tr><td>3</td><td>32</td><td><a href="OTHL-PRE-ProTeamRoster.php#Coyotes">Roadrunners</a></td><td>0</td><td><a href="OTHL-PRE-ProTeamRoster.php#Flames">Heat</a></td><td>7</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-32.html">Game Direct Link</a></td></tr>
<tr><td>5</td><td>55</td><td><a href="OTHL-PRE-ProTeamRoster.php#Kings">Reign</a></td><td>5</td><td><a href="OTHL-PRE-ProTeamRoster.php#Coyotes">Roadrunners</a></td><td>1</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-55.html">Game Direct Link</a></td></tr>
<tr><td>6</td><td>71</td><td><a href="OTHL-PRE-ProTeamRoster.php#Ducks">Gulls</a></td><td>4</td><td><a href="OTHL-PRE-ProTeamRoster.php#Coyotes">Roadrunners</a></td><td>6</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-71.html">Game Direct Link</a></td></tr>
<tr><td>8</td><td>95</td><td><a href="OTHL-PRE-ProTeamRoster.php#Coyotes">Roadrunners</a></td><td>3</td><td><a href="OTHL-PRE-ProTeamRoster.php#Flames">Heat</a></td><td>9</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-95.html">Game Direct Link</a></td></tr>
<tr><td>9</td><td>106</td><td><a href="OTHL-PRE-ProTeamRoster.php#Coyotes">Roadrunners</a></td><td>5</td><td><a href="OTHL-PRE-ProTeamRoster.php#Avalanche">Eagles</a></td><td>4</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-106.html">Game Direct Link</a></td></tr>
<tr><td>10</td><td>117</td><td><a href="OTHL-PRE-ProTeamRoster.php#Flames">Heat</a></td><td>6</td><td><a href="OTHL-PRE-ProTeamRoster.php#Coyotes">Roadrunners</a></td><td>2</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-117.html">Game Direct Link</a></td></tr>
<tr><td>11</td><td>140</td><td><a href="OTHL-PRE-ProTeamRoster.php#Oilers">Condors</a></td><td>5</td><td><a href="OTHL-PRE-ProTeamRoster.php#Coyotes">Roadrunners</a></td><td>0</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-140.html">Game Direct Link</a></td></tr>
<tr><td>13</td><td>161</td><td><a href="OTHL-PRE-ProTeamRoster.php#Avalanche">Eagles</a></td><td>2</td><td><a href="OTHL-PRE-ProTeamRoster.php#Coyotes">Roadrunners</a></td><td>6</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-161.html">Game Direct Link</a></td></tr>
<tr><td>14</td><td>169</td><td><a href="OTHL-PRE-ProTeamRoster.php#Coyotes">Roadrunners</a></td><td>2</td><td><a href="OTHL-PRE-ProTeamRoster.php#Kings">Reign</a></td><td>5</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-169.html">Game Direct Link</a></td></tr>
<tr><td>16</td><td>194</td><td><a href="OTHL-PRE-ProTeamRoster.php#Coyotes">Roadrunners</a></td><td>4</td><td><a href="OTHL-PRE-ProTeamRoster.php#Sharks">Barracudas</a></td><td>5</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-194.html">Game Direct Link</a></td></tr>
<tr><td>17</td><td>200</td><td><a href="OTHL-PRE-ProTeamRoster.php#Sharks">Barracudas</a></td><td>5</td><td><a href="OTHL-PRE-ProTeamRoster.php#Coyotes">Roadrunners</a></td><td>3</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-200.html">Game Direct Link</a></td></tr>
<tr><td>18</td><td>217</td><td><a href="OTHL-PRE-ProTeamRoster.php#Coyotes">Roadrunners</a></td><td>1</td><td><a href="OTHL-PRE-ProTeamRoster.php#BlueJackets">Monsters</a></td><td>4</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-217.html">Game Direct Link</a></td></tr>
<tr><td>21</td><td>238</td><td><a href="OTHL-PRE-ProTeamRoster.php#Sharks">Barracudas</a></td><td>3</td><td><a href="OTHL-PRE-ProTeamRoster.php#Coyotes">Roadrunners</a></td><td>8</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-238.html">Game Direct Link</a></td></tr>
<tr><td>22</td><td>256</td><td><a href="OTHL-PRE-ProTeamRoster.php#Coyotes">Roadrunners</a></td><td>4</td><td><a href="OTHL-PRE-ProTeamRoster.php#Ducks">Gulls</a></td><td>7</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-256.html">Game Direct Link</a></td></tr>
</table></div>
<h1 class="TeamScheduleFarm_UTI"><a id="Comets">Comets</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=18">Devils Page</a> ]
[ <a href="OTHL-PRE-ProTeamRoster.php#Devils">Pro Team Roster</a> ]
[ <a href="OTHL-PRE-FarmTeamScoring.php#Comets">Farm Team Scoring</a> ]
[ <a href="OTHL-PRE-FarmTeamLines.php#Comets">Farm Team Lines</a> ]
[ <a href="OTHL-PRE-FarmTeamSchedule.php#Comets">Farm Team Schedule</a> ]
[ <a href="OTHL-PRE-FarmTeamStats.php#Comets">Farm Team Stats</a> ]
[ <a href="OTHL-PRE-FarmTeamStatsVS.php#Comets">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Comets');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Comets" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW35">Day</th><th class="STHSW35">Game</th><th class="STHSW200">Visitor Team</th><th class="STHSW35">Score</th><th class="STHSW200">Home Team</th><th class="STHSW35">Score</th><th class="STHSW35">ST</th><th class="STHSW35">OT</th><th class="STHSW35">SO</th><th class="STHSW35">RI</th><th class="STHSW200">Link</th></tr></thead>
<tr><td>1</td><td>1</td><td><a href="OTHL-PRE-ProTeamRoster.php#Devils">Comets</a></td><td>1</td><td><a href="OTHL-PRE-ProTeamRoster.php#MapleLeafs">Marlies</a></td><td>11</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-1.html">Game Direct Link</a></td></tr>
<tr><td>2</td><td>19</td><td><a href="OTHL-PRE-ProTeamRoster.php#Lightning">Crunch</a></td><td>2</td><td><a href="OTHL-PRE-ProTeamRoster.php#Devils">Comets</a></td><td>4</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-19.html">Game Direct Link</a></td></tr>
<tr><td>4</td><td>47</td><td><a href="OTHL-PRE-ProTeamRoster.php#RedWings">Griffins</a></td><td>5</td><td><a href="OTHL-PRE-ProTeamRoster.php#Devils">Comets</a></td><td>4</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-47.html">Game Direct Link</a></td></tr>
<tr><td>5</td><td>53</td><td><a href="OTHL-PRE-ProTeamRoster.php#Devils">Comets</a></td><td>7</td><td><a href="OTHL-PRE-ProTeamRoster.php#Senators">Senators</a></td><td>5</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-53.html">Game Direct Link</a></td></tr>
<tr><td>6</td><td>63</td><td><a href="OTHL-PRE-ProTeamRoster.php#Devils">Comets</a></td><td>9</td><td><a href="OTHL-PRE-ProTeamRoster.php#Lightning">Crunch</a></td><td>5</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-63.html">Game Direct Link</a></td></tr>
<tr><td>7</td><td>88</td><td><a href="OTHL-PRE-ProTeamRoster.php#Canucks">Canucks</a></td><td>5</td><td><a href="OTHL-PRE-ProTeamRoster.php#Devils">Comets</a></td><td>4</td><td>L</td><td></td><td>*</td><td></td><td><a href="OTHL-PRE-Farm-88.html">Game Direct Link</a></td></tr>
<tr><td>8</td><td>100</td><td><a href="OTHL-PRE-ProTeamRoster.php#Devils">Comets</a></td><td>1</td><td><a href="OTHL-PRE-ProTeamRoster.php#BlueJackets">Monsters</a></td><td>6</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-100.html">Game Direct Link</a></td></tr>
<tr><td>9</td><td>114</td><td><a href="OTHL-PRE-ProTeamRoster.php#Devils">Comets</a></td><td>3</td><td><a href="OTHL-PRE-ProTeamRoster.php#Canucks">Canucks</a></td><td>5</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-114.html">Game Direct Link</a></td></tr>
<tr><td>10</td><td>126</td><td><a href="OTHL-PRE-ProTeamRoster.php#Senators">Senators</a></td><td>6</td><td><a href="OTHL-PRE-ProTeamRoster.php#Devils">Comets</a></td><td>5</td><td>L</td><td>*</td><td></td><td></td><td><a href="OTHL-PRE-Farm-126.html">Game Direct Link</a></td></tr>
<tr><td>12</td><td>148</td><td><a href="OTHL-PRE-ProTeamRoster.php#BlueJackets">Monsters</a></td><td>5</td><td><a href="OTHL-PRE-ProTeamRoster.php#Devils">Comets</a></td><td>1</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-148.html">Game Direct Link</a></td></tr>
<tr><td>13</td><td>162</td><td><a href="OTHL-PRE-ProTeamRoster.php#Devils">Comets</a></td><td>0</td><td><a href="OTHL-PRE-ProTeamRoster.php#MapleLeafs">Marlies</a></td><td>10</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-162.html">Game Direct Link</a></td></tr>
<tr><td>15</td><td>182</td><td><a href="OTHL-PRE-ProTeamRoster.php#Canadiens">Rocket</a></td><td>6</td><td><a href="OTHL-PRE-ProTeamRoster.php#Devils">Comets</a></td><td>2</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-182.html">Game Direct Link</a></td></tr>
<tr><td>16</td><td>189</td><td><a href="OTHL-PRE-ProTeamRoster.php#Devils">Comets</a></td><td>4</td><td><a href="OTHL-PRE-ProTeamRoster.php#RedWings">Griffins</a></td><td>3</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-189.html">Game Direct Link</a></td></tr>
<tr><td>18</td><td>213</td><td><a href="OTHL-PRE-ProTeamRoster.php#Lightning">Crunch</a></td><td>6</td><td><a href="OTHL-PRE-ProTeamRoster.php#Devils">Comets</a></td><td>5</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-213.html">Game Direct Link</a></td></tr>
<tr><td>20</td><td>235</td><td><a href="OTHL-PRE-ProTeamRoster.php#Devils">Comets</a></td><td>0</td><td><a href="OTHL-PRE-ProTeamRoster.php#Canadiens">Rocket</a></td><td>5</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-235.html">Game Direct Link</a></td></tr>
<tr><td>21</td><td>244</td><td><a href="OTHL-PRE-ProTeamRoster.php#MapleLeafs">Marlies</a></td><td>10</td><td><a href="OTHL-PRE-ProTeamRoster.php#Devils">Comets</a></td><td>2</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-244.html">Game Direct Link</a></td></tr>
</table></div>
<h1 class="TeamScheduleFarm_SDG"><a id="Gulls">Gulls</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=1">Ducks Page</a> ]
[ <a href="OTHL-PRE-ProTeamRoster.php#Ducks">Pro Team Roster</a> ]
[ <a href="OTHL-PRE-FarmTeamScoring.php#Gulls">Farm Team Scoring</a> ]
[ <a href="OTHL-PRE-FarmTeamLines.php#Gulls">Farm Team Lines</a> ]
[ <a href="OTHL-PRE-FarmTeamSchedule.php#Gulls">Farm Team Schedule</a> ]
[ <a href="OTHL-PRE-FarmTeamStats.php#Gulls">Farm Team Stats</a> ]
[ <a href="OTHL-PRE-FarmTeamStatsVS.php#Gulls">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Gulls');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Gulls" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW35">Day</th><th class="STHSW35">Game</th><th class="STHSW200">Visitor Team</th><th class="STHSW35">Score</th><th class="STHSW200">Home Team</th><th class="STHSW35">Score</th><th class="STHSW35">ST</th><th class="STHSW35">OT</th><th class="STHSW35">SO</th><th class="STHSW35">RI</th><th class="STHSW200">Link</th></tr></thead>
<tr><td>1</td><td>11</td><td><a href="OTHL-PRE-ProTeamRoster.php#Ducks">Gulls</a></td><td>6</td><td><a href="OTHL-PRE-ProTeamRoster.php#Avalanche">Eagles</a></td><td>3</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-11.html">Game Direct Link</a></td></tr>
<tr><td>2</td><td>23</td><td><a href="OTHL-PRE-ProTeamRoster.php#Kings">Reign</a></td><td>2</td><td><a href="OTHL-PRE-ProTeamRoster.php#Ducks">Gulls</a></td><td>8</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-23.html">Game Direct Link</a></td></tr>
<tr><td>3</td><td>36</td><td><a href="OTHL-PRE-ProTeamRoster.php#Ducks">Gulls</a></td><td>3</td><td><a href="OTHL-PRE-ProTeamRoster.php#Sharks">Barracudas</a></td><td>4</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-36.html">Game Direct Link</a></td></tr>
<tr><td>5</td><td>51</td><td><a href="OTHL-PRE-ProTeamRoster.php#Avalanche">Eagles</a></td><td>0</td><td><a href="OTHL-PRE-ProTeamRoster.php#Ducks">Gulls</a></td><td>6</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-51.html">Game Direct Link</a></td></tr>
<tr><td>6</td><td>71</td><td><a href="OTHL-PRE-ProTeamRoster.php#Ducks">Gulls</a></td><td>4</td><td><a href="OTHL-PRE-ProTeamRoster.php#Coyotes">Roadrunners</a></td><td>6</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-71.html">Game Direct Link</a></td></tr>
<tr><td>7</td><td>75</td><td><a href="OTHL-PRE-ProTeamRoster.php#Ducks">Gulls</a></td><td>7</td><td><a href="OTHL-PRE-ProTeamRoster.php#Avalanche">Eagles</a></td><td>2</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-75.html">Game Direct Link</a></td></tr>
<tr><td>8</td><td>92</td><td><a href="OTHL-PRE-ProTeamRoster.php#Avalanche">Eagles</a></td><td>2</td><td><a href="OTHL-PRE-ProTeamRoster.php#Ducks">Gulls</a></td><td>7</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-92.html">Game Direct Link</a></td></tr>
<tr><td>9</td><td>112</td><td><a href="OTHL-PRE-ProTeamRoster.php#Sharks">Barracudas</a></td><td>4</td><td><a href="OTHL-PRE-ProTeamRoster.php#Ducks">Gulls</a></td><td>1</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-112.html">Game Direct Link</a></td></tr>
<tr><td>10</td><td>127</td><td><a href="OTHL-PRE-ProTeamRoster.php#Ducks">Gulls</a></td><td>5</td><td><a href="OTHL-PRE-ProTeamRoster.php#RedWings">Griffins</a></td><td>2</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-127.html">Game Direct Link</a></td></tr>
<tr><td>12</td><td>145</td><td><a href="OTHL-PRE-ProTeamRoster.php#Ducks">Gulls</a></td><td>2</td><td><a href="OTHL-PRE-ProTeamRoster.php#Kings">Reign</a></td><td>7</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-145.html">Game Direct Link</a></td></tr>
<tr><td>13</td><td>154</td><td><a href="OTHL-PRE-ProTeamRoster.php#Ducks">Gulls</a></td><td>2</td><td><a href="OTHL-PRE-ProTeamRoster.php#Oilers">Condors</a></td><td>4</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-154.html">Game Direct Link</a></td></tr>
<tr><td>14</td><td>163</td><td><a href="OTHL-PRE-ProTeamRoster.php#Flames">Heat</a></td><td>9</td><td><a href="OTHL-PRE-ProTeamRoster.php#Ducks">Gulls</a></td><td>2</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-163.html">Game Direct Link</a></td></tr>
<tr><td>15</td><td>180</td><td><a href="OTHL-PRE-ProTeamRoster.php#Ducks">Gulls</a></td><td>3</td><td><a href="OTHL-PRE-ProTeamRoster.php#Flames">Heat</a></td><td>8</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-180.html">Game Direct Link</a></td></tr>
<tr><td>16</td><td>192</td><td><a href="OTHL-PRE-ProTeamRoster.php#Oilers">Condors</a></td><td>4</td><td><a href="OTHL-PRE-ProTeamRoster.php#Ducks">Gulls</a></td><td>3</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-192.html">Game Direct Link</a></td></tr>
<tr><td>18</td><td>219</td><td><a href="OTHL-PRE-ProTeamRoster.php#Senators">Senators</a></td><td>7</td><td><a href="OTHL-PRE-ProTeamRoster.php#Ducks">Gulls</a></td><td>5</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-219.html">Game Direct Link</a></td></tr>
<tr><td>22</td><td>256</td><td><a href="OTHL-PRE-ProTeamRoster.php#Coyotes">Roadrunners</a></td><td>4</td><td><a href="OTHL-PRE-ProTeamRoster.php#Ducks">Gulls</a></td><td>7</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-256.html">Game Direct Link</a></td></tr>
</table></div>
<h1 class="TeamScheduleFarm_STK"><a id="Heat">Heat</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=5">Flames Page</a> ]
[ <a href="OTHL-PRE-ProTeamRoster.php#Flames">Pro Team Roster</a> ]
[ <a href="OTHL-PRE-FarmTeamScoring.php#Heat">Farm Team Scoring</a> ]
[ <a href="OTHL-PRE-FarmTeamLines.php#Heat">Farm Team Lines</a> ]
[ <a href="OTHL-PRE-FarmTeamSchedule.php#Heat">Farm Team Schedule</a> ]
[ <a href="OTHL-PRE-FarmTeamStats.php#Heat">Farm Team Stats</a> ]
[ <a href="OTHL-PRE-FarmTeamStatsVS.php#Heat">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Heat');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Heat" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW35">Day</th><th class="STHSW35">Game</th><th class="STHSW200">Visitor Team</th><th class="STHSW35">Score</th><th class="STHSW200">Home Team</th><th class="STHSW35">Score</th><th class="STHSW35">ST</th><th class="STHSW35">OT</th><th class="STHSW35">SO</th><th class="STHSW35">RI</th><th class="STHSW200">Link</th></tr></thead>
<tr><td>1</td><td>3</td><td><a href="OTHL-PRE-ProTeamRoster.php#Flames">Heat</a></td><td>4</td><td><a href="OTHL-PRE-ProTeamRoster.php#Kings">Reign</a></td><td>1</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-3.html">Game Direct Link</a></td></tr>
<tr><td>2</td><td>17</td><td><a href="OTHL-PRE-ProTeamRoster.php#Flames">Heat</a></td><td>11</td><td><a href="OTHL-PRE-ProTeamRoster.php#Sharks">Barracudas</a></td><td>1</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-17.html">Game Direct Link</a></td></tr>
<tr><td>3</td><td>32</td><td><a href="OTHL-PRE-ProTeamRoster.php#Coyotes">Roadrunners</a></td><td>0</td><td><a href="OTHL-PRE-ProTeamRoster.php#Flames">Heat</a></td><td>7</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-32.html">Game Direct Link</a></td></tr>
<tr><td>5</td><td>54</td><td><a href="OTHL-PRE-ProTeamRoster.php#Oilers">Condors</a></td><td>3</td><td><a href="OTHL-PRE-ProTeamRoster.php#Flames">Heat</a></td><td>1</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-54.html">Game Direct Link</a></td></tr>
<tr><td>6</td><td>62</td><td><a href="OTHL-PRE-ProTeamRoster.php#Flames">Heat</a></td><td>1</td><td><a href="OTHL-PRE-ProTeamRoster.php#Kings">Reign</a></td><td>3</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-62.html">Game Direct Link</a></td></tr>
<tr><td>7</td><td>80</td><td><a href="OTHL-PRE-ProTeamRoster.php#Flames">Heat</a></td><td>9</td><td><a href="OTHL-PRE-ProTeamRoster.php#Sharks">Barracudas</a></td><td>2</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-80.html">Game Direct Link</a></td></tr>
<tr><td>8</td><td>95</td><td><a href="OTHL-PRE-ProTeamRoster.php#Coyotes">Roadrunners</a></td><td>3</td><td><a href="OTHL-PRE-ProTeamRoster.php#Flames">Heat</a></td><td>9</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-95.html">Game Direct Link</a></td></tr>
<tr><td>10</td><td>117</td><td><a href="OTHL-PRE-ProTeamRoster.php#Flames">Heat</a></td><td>6</td><td><a href="OTHL-PRE-ProTeamRoster.php#Coyotes">Roadrunners</a></td><td>2</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-117.html">Game Direct Link</a></td></tr>
<tr><td>11</td><td>131</td><td><a href="OTHL-PRE-ProTeamRoster.php#Avalanche">Eagles</a></td><td>1</td><td><a href="OTHL-PRE-ProTeamRoster.php#Flames">Heat</a></td><td>9</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-131.html">Game Direct Link</a></td></tr>
<tr><td>12</td><td>151</td><td><a href="OTHL-PRE-ProTeamRoster.php#Sharks">Barracudas</a></td><td>2</td><td><a href="OTHL-PRE-ProTeamRoster.php#Flames">Heat</a></td><td>5</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-151.html">Game Direct Link</a></td></tr>
<tr><td>14</td><td>163</td><td><a href="OTHL-PRE-ProTeamRoster.php#Flames">Heat</a></td><td>9</td><td><a href="OTHL-PRE-ProTeamRoster.php#Ducks">Gulls</a></td><td>2</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-163.html">Game Direct Link</a></td></tr>
<tr><td>15</td><td>180</td><td><a href="OTHL-PRE-ProTeamRoster.php#Ducks">Gulls</a></td><td>3</td><td><a href="OTHL-PRE-ProTeamRoster.php#Flames">Heat</a></td><td>8</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-180.html">Game Direct Link</a></td></tr>
<tr><td>18</td><td>207</td><td><a href="OTHL-PRE-ProTeamRoster.php#Kings">Reign</a></td><td>6</td><td><a href="OTHL-PRE-ProTeamRoster.php#Flames">Heat</a></td><td>2</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-207.html">Game Direct Link</a></td></tr>
<tr><td>19</td><td>227</td><td><a href="OTHL-PRE-ProTeamRoster.php#Kings">Reign</a></td><td>2</td><td><a href="OTHL-PRE-ProTeamRoster.php#Flames">Heat</a></td><td>3</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-227.html">Game Direct Link</a></td></tr>
<tr><td>21</td><td>242</td><td><a href="OTHL-PRE-ProTeamRoster.php#Flames">Heat</a></td><td>5</td><td><a href="OTHL-PRE-ProTeamRoster.php#Avalanche">Eagles</a></td><td>0</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-242.html">Game Direct Link</a></td></tr>
<tr><td>22</td><td>248</td><td><a href="OTHL-PRE-ProTeamRoster.php#Flames">Heat</a></td><td>8</td><td><a href="OTHL-PRE-ProTeamRoster.php#Oilers">Condors</a></td><td>1</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-248.html">Game Direct Link</a></td></tr>
</table></div>
<h1 class="TeamScheduleFarm_LVP"><a id="Phantoms">Phantoms</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=22">Flyers Page</a> ]
[ <a href="OTHL-PRE-ProTeamRoster.php#Flyers">Pro Team Roster</a> ]
[ <a href="OTHL-PRE-FarmTeamScoring.php#Phantoms">Farm Team Scoring</a> ]
[ <a href="OTHL-PRE-FarmTeamLines.php#Phantoms">Farm Team Lines</a> ]
[ <a href="OTHL-PRE-FarmTeamSchedule.php#Phantoms">Farm Team Schedule</a> ]
[ <a href="OTHL-PRE-FarmTeamStats.php#Phantoms">Farm Team Stats</a> ]
[ <a href="OTHL-PRE-FarmTeamStatsVS.php#Phantoms">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Phantoms');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Phantoms" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW35">Day</th><th class="STHSW35">Game</th><th class="STHSW200">Visitor Team</th><th class="STHSW35">Score</th><th class="STHSW200">Home Team</th><th class="STHSW35">Score</th><th class="STHSW35">ST</th><th class="STHSW35">OT</th><th class="STHSW35">SO</th><th class="STHSW35">RI</th><th class="STHSW200">Link</th></tr></thead>
<tr><td>1</td><td>8</td><td><a href="OTHL-PRE-ProTeamRoster.php#Panthers">Thunderbirds</a></td><td>2</td><td><a href="OTHL-PRE-ProTeamRoster.php#Flyers">Phantoms</a></td><td>1</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-8.html">Game Direct Link</a></td></tr>
<tr><td>2</td><td>21</td><td><a href="OTHL-PRE-ProTeamRoster.php#Flyers">Phantoms</a></td><td>4</td><td><a href="OTHL-PRE-ProTeamRoster.php#Panthers">Thunderbirds</a></td><td>3</td><td>W</td><td></td><td>*</td><td></td><td><a href="OTHL-PRE-Farm-21.html">Game Direct Link</a></td></tr>
<tr><td>4</td><td>40</td><td><a href="OTHL-PRE-ProTeamRoster.php#Flyers">Phantoms</a></td><td>9</td><td><a href="OTHL-PRE-ProTeamRoster.php#Islanders">Sound Tigers</a></td><td>1</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-40.html">Game Direct Link</a></td></tr>
<tr><td>5</td><td>49</td><td><a href="OTHL-PRE-ProTeamRoster.php#Flyers">Phantoms</a></td><td>9</td><td><a href="OTHL-PRE-ProTeamRoster.php#Penguins">Penguins</a></td><td>0</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-49.html">Game Direct Link</a></td></tr>
<tr><td>6</td><td>61</td><td><a href="OTHL-PRE-ProTeamRoster.php#Flyers">Phantoms</a></td><td>3</td><td><a href="OTHL-PRE-ProTeamRoster.php#Panthers">Thunderbirds</a></td><td>0</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-61.html">Game Direct Link</a></td></tr>
<tr><td>7</td><td>74</td><td><a href="OTHL-PRE-ProTeamRoster.php#Capitals">Bears</a></td><td>1</td><td><a href="OTHL-PRE-ProTeamRoster.php#Flyers">Phantoms</a></td><td>7</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-74.html">Game Direct Link</a></td></tr>
<tr><td>8</td><td>89</td><td><a href="OTHL-PRE-ProTeamRoster.php#Flyers">Phantoms</a></td><td>11</td><td><a href="OTHL-PRE-ProTeamRoster.php#Capitals">Bears</a></td><td>1</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-89.html">Game Direct Link</a></td></tr>
<tr><td>9</td><td>104</td><td><a href="OTHL-PRE-ProTeamRoster.php#Bruins">Bruins</a></td><td>4</td><td><a href="OTHL-PRE-ProTeamRoster.php#Flyers">Phantoms</a></td><td>7</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-104.html">Game Direct Link</a></td></tr>
<tr><td>10</td><td>122</td><td><a href="OTHL-PRE-ProTeamRoster.php#Rangers">Wolf Pack</a></td><td>1</td><td><a href="OTHL-PRE-ProTeamRoster.php#Flyers">Phantoms</a></td><td>11</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-122.html">Game Direct Link</a></td></tr>
<tr><td>11</td><td>135</td><td><a href="OTHL-PRE-ProTeamRoster.php#Flyers">Phantoms</a></td><td>4</td><td><a href="OTHL-PRE-ProTeamRoster.php#Rangers">Wolf Pack</a></td><td>1</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-135.html">Game Direct Link</a></td></tr>
<tr><td>13</td><td>158</td><td><a href="OTHL-PRE-ProTeamRoster.php#Hurricanes">Checkers</a></td><td>5</td><td><a href="OTHL-PRE-ProTeamRoster.php#Flyers">Phantoms</a></td><td>4</td><td>L</td><td>*</td><td></td><td></td><td><a href="OTHL-PRE-Farm-158.html">Game Direct Link</a></td></tr>
<tr><td>15</td><td>181</td><td><a href="OTHL-PRE-ProTeamRoster.php#Islanders">Sound Tigers</a></td><td>1</td><td><a href="OTHL-PRE-ProTeamRoster.php#Flyers">Phantoms</a></td><td>4</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-181.html">Game Direct Link</a></td></tr>
<tr><td>18</td><td>208</td><td><a href="OTHL-PRE-ProTeamRoster.php#Penguins">Penguins</a></td><td>3</td><td><a href="OTHL-PRE-ProTeamRoster.php#Flyers">Phantoms</a></td><td>5</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-208.html">Game Direct Link</a></td></tr>
<tr><td>19</td><td>226</td><td><a href="OTHL-PRE-ProTeamRoster.php#Hurricanes">Checkers</a></td><td>1</td><td><a href="OTHL-PRE-ProTeamRoster.php#Flyers">Phantoms</a></td><td>7</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-226.html">Game Direct Link</a></td></tr>
<tr><td>21</td><td>240</td><td><a href="OTHL-PRE-ProTeamRoster.php#Flyers">Phantoms</a></td><td>2</td><td><a href="OTHL-PRE-ProTeamRoster.php#Hurricanes">Checkers</a></td><td>6</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-240.html">Game Direct Link</a></td></tr>
<tr><td>22</td><td>253</td><td><a href="OTHL-PRE-ProTeamRoster.php#Flyers">Phantoms</a></td><td>2</td><td><a href="OTHL-PRE-ProTeamRoster.php#Bruins">Bruins</a></td><td>1</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-253.html">Game Direct Link</a></td></tr>
</table></div>
<h1 class="TeamScheduleFarm_CHI"><a id="Wolves">Wolves</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=31">Golden Knights Page</a> ]
[ <a href="OTHL-PRE-ProTeamRoster.php#GoldenKnights">Pro Team Roster</a> ]
[ <a href="OTHL-PRE-FarmTeamScoring.php#Wolves">Farm Team Scoring</a> ]
[ <a href="OTHL-PRE-FarmTeamLines.php#Wolves">Farm Team Lines</a> ]
[ <a href="OTHL-PRE-FarmTeamSchedule.php#Wolves">Farm Team Schedule</a> ]
[ <a href="OTHL-PRE-FarmTeamStats.php#Wolves">Farm Team Stats</a> ]
[ <a href="OTHL-PRE-FarmTeamStatsVS.php#Wolves">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Wolves');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Wolves" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW35">Day</th><th class="STHSW35">Game</th><th class="STHSW200">Visitor Team</th><th class="STHSW35">Score</th><th class="STHSW200">Home Team</th><th class="STHSW35">Score</th><th class="STHSW35">ST</th><th class="STHSW35">OT</th><th class="STHSW35">SO</th><th class="STHSW35">RI</th><th class="STHSW200">Link</th></tr></thead>
<tr><td>1</td><td>13</td><td><a href="OTHL-PRE-ProTeamRoster.php#GoldenKnights">Wolves</a></td><td>3</td><td><a href="OTHL-PRE-ProTeamRoster.php#Kraken">Mariners</a></td><td>6</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-13.html">Game Direct Link</a></td></tr>
<tr><td>2</td><td>25</td><td><a href="OTHL-PRE-ProTeamRoster.php#Jets">Moose</a></td><td>3</td><td><a href="OTHL-PRE-ProTeamRoster.php#GoldenKnights">Wolves</a></td><td>1</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-25.html">Game Direct Link</a></td></tr>
<tr><td>4</td><td>46</td><td><a href="OTHL-PRE-ProTeamRoster.php#Kraken">Mariners</a></td><td>2</td><td><a href="OTHL-PRE-ProTeamRoster.php#GoldenKnights">Wolves</a></td><td>4</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-46.html">Game Direct Link</a></td></tr>
<tr><td>5</td><td>50</td><td><a href="OTHL-PRE-ProTeamRoster.php#GoldenKnights">Wolves</a></td><td>7</td><td><a href="OTHL-PRE-ProTeamRoster.php#Wild">Wild</a></td><td>1</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-50.html">Game Direct Link</a></td></tr>
<tr><td>6</td><td>70</td><td><a href="OTHL-PRE-ProTeamRoster.php#GoldenKnights">Wolves</a></td><td>1</td><td><a href="OTHL-PRE-ProTeamRoster.php#Blackhawks">IceHogs</a></td><td>0</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-70.html">Game Direct Link</a></td></tr>
<tr><td>7</td><td>86</td><td><a href="OTHL-PRE-ProTeamRoster.php#GoldenKnights">Wolves</a></td><td>3</td><td><a href="OTHL-PRE-ProTeamRoster.php#Predators">Admirals</a></td><td>2</td><td>W</td><td></td><td>*</td><td></td><td><a href="OTHL-PRE-Farm-86.html">Game Direct Link</a></td></tr>
<tr><td>8</td><td>94</td><td><a href="OTHL-PRE-ProTeamRoster.php#Predators">Admirals</a></td><td>2</td><td><a href="OTHL-PRE-ProTeamRoster.php#GoldenKnights">Wolves</a></td><td>1</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-94.html">Game Direct Link</a></td></tr>
<tr><td>9</td><td>116</td><td><a href="OTHL-PRE-ProTeamRoster.php#GoldenKnights">Wolves</a></td><td>1</td><td><a href="OTHL-PRE-ProTeamRoster.php#Jets">Moose</a></td><td>6</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-116.html">Game Direct Link</a></td></tr>
<tr><td>10</td><td>125</td><td><a href="OTHL-PRE-ProTeamRoster.php#Blues">Rampage </a></td><td>1</td><td><a href="OTHL-PRE-ProTeamRoster.php#GoldenKnights">Wolves</a></td><td>4</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-125.html">Game Direct Link</a></td></tr>
<tr><td>12</td><td>147</td><td><a href="OTHL-PRE-ProTeamRoster.php#Stars">Stars</a></td><td>1</td><td><a href="OTHL-PRE-ProTeamRoster.php#GoldenKnights">Wolves</a></td><td>4</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-147.html">Game Direct Link</a></td></tr>
<tr><td>14</td><td>172</td><td><a href="OTHL-PRE-ProTeamRoster.php#Sabres"> Americans</a></td><td>3</td><td><a href="OTHL-PRE-ProTeamRoster.php#GoldenKnights">Wolves</a></td><td>0</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-172.html">Game Direct Link</a></td></tr>
<tr><td>16</td><td>191</td><td><a href="OTHL-PRE-ProTeamRoster.php#GoldenKnights">Wolves</a></td><td>0</td><td><a href="OTHL-PRE-ProTeamRoster.php#Sabres"> Americans</a></td><td>3</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-191.html">Game Direct Link</a></td></tr>
<tr><td>17</td><td>198</td><td><a href="OTHL-PRE-ProTeamRoster.php#GoldenKnights">Wolves</a></td><td>3</td><td><a href="OTHL-PRE-ProTeamRoster.php#Blues">Rampage </a></td><td>0</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-198.html">Game Direct Link</a></td></tr>
<tr><td>18</td><td>210</td><td><a href="OTHL-PRE-ProTeamRoster.php#GoldenKnights">Wolves</a></td><td>7</td><td><a href="OTHL-PRE-ProTeamRoster.php#Stars">Stars</a></td><td>0</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-210.html">Game Direct Link</a></td></tr>
<tr><td>19</td><td>224</td><td><a href="OTHL-PRE-ProTeamRoster.php#Blackhawks">IceHogs</a></td><td>2</td><td><a href="OTHL-PRE-ProTeamRoster.php#GoldenKnights">Wolves</a></td><td>1</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-224.html">Game Direct Link</a></td></tr>
<tr><td>21</td><td>245</td><td><a href="OTHL-PRE-ProTeamRoster.php#Wild">Wild</a></td><td>0</td><td><a href="OTHL-PRE-ProTeamRoster.php#GoldenKnights">Wolves</a></td><td>6</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-245.html">Game Direct Link</a></td></tr>
</table></div>
<h1 class="TeamScheduleFarm_CHR"><a id="Checkers">Checkers</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=6">Hurricanes Page</a> ]
[ <a href="OTHL-PRE-ProTeamRoster.php#Hurricanes">Pro Team Roster</a> ]
[ <a href="OTHL-PRE-FarmTeamScoring.php#Checkers">Farm Team Scoring</a> ]
[ <a href="OTHL-PRE-FarmTeamLines.php#Checkers">Farm Team Lines</a> ]
[ <a href="OTHL-PRE-FarmTeamSchedule.php#Checkers">Farm Team Schedule</a> ]
[ <a href="OTHL-PRE-FarmTeamStats.php#Checkers">Farm Team Stats</a> ]
[ <a href="OTHL-PRE-FarmTeamStatsVS.php#Checkers">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Checkers');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Checkers" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW35">Day</th><th class="STHSW35">Game</th><th class="STHSW200">Visitor Team</th><th class="STHSW35">Score</th><th class="STHSW200">Home Team</th><th class="STHSW35">Score</th><th class="STHSW35">ST</th><th class="STHSW35">OT</th><th class="STHSW35">SO</th><th class="STHSW35">RI</th><th class="STHSW200">Link</th></tr></thead>
<tr><td>1</td><td>6</td><td><a href="OTHL-PRE-ProTeamRoster.php#Hurricanes">Checkers</a></td><td>1</td><td><a href="OTHL-PRE-ProTeamRoster.php#Bruins">Bruins</a></td><td>5</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-6.html">Game Direct Link</a></td></tr>
<tr><td>2</td><td>26</td><td><a href="OTHL-PRE-ProTeamRoster.php#Bruins">Bruins</a></td><td>7</td><td><a href="OTHL-PRE-ProTeamRoster.php#Hurricanes">Checkers</a></td><td>6</td><td>L</td><td>*</td><td></td><td></td><td><a href="OTHL-PRE-Farm-26.html">Game Direct Link</a></td></tr>
<tr><td>4</td><td>41</td><td><a href="OTHL-PRE-ProTeamRoster.php#Capitals">Bears</a></td><td>3</td><td><a href="OTHL-PRE-ProTeamRoster.php#Hurricanes">Checkers</a></td><td>5</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-41.html">Game Direct Link</a></td></tr>
<tr><td>6</td><td>69</td><td><a href="OTHL-PRE-ProTeamRoster.php#Rangers">Wolf Pack</a></td><td>4</td><td><a href="OTHL-PRE-ProTeamRoster.php#Hurricanes">Checkers</a></td><td>13</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-69.html">Game Direct Link</a></td></tr>
<tr><td>7</td><td>87</td><td><a href="OTHL-PRE-ProTeamRoster.php#Hurricanes">Checkers</a></td><td>9</td><td><a href="OTHL-PRE-ProTeamRoster.php#Penguins">Penguins</a></td><td>3</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-87.html">Game Direct Link</a></td></tr>
<tr><td>8</td><td>101</td><td><a href="OTHL-PRE-ProTeamRoster.php#Penguins">Penguins</a></td><td>3</td><td><a href="OTHL-PRE-ProTeamRoster.php#Hurricanes">Checkers</a></td><td>9</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-101.html">Game Direct Link</a></td></tr>
<tr><td>10</td><td>120</td><td><a href="OTHL-PRE-ProTeamRoster.php#Hurricanes">Checkers</a></td><td>8</td><td><a href="OTHL-PRE-ProTeamRoster.php#Capitals">Bears</a></td><td>5</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-120.html">Game Direct Link</a></td></tr>
<tr><td>11</td><td>134</td><td><a href="OTHL-PRE-ProTeamRoster.php#Islanders">Sound Tigers</a></td><td>4</td><td><a href="OTHL-PRE-ProTeamRoster.php#Hurricanes">Checkers</a></td><td>7</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-134.html">Game Direct Link</a></td></tr>
<tr><td>13</td><td>158</td><td><a href="OTHL-PRE-ProTeamRoster.php#Hurricanes">Checkers</a></td><td>5</td><td><a href="OTHL-PRE-ProTeamRoster.php#Flyers">Phantoms</a></td><td>4</td><td>W</td><td>*</td><td></td><td></td><td><a href="OTHL-PRE-Farm-158.html">Game Direct Link</a></td></tr>
<tr><td>14</td><td>164</td><td><a href="OTHL-PRE-ProTeamRoster.php#Hurricanes">Checkers</a></td><td>4</td><td><a href="OTHL-PRE-ProTeamRoster.php#Panthers">Thunderbirds</a></td><td>7</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-164.html">Game Direct Link</a></td></tr>
<tr><td>15</td><td>177</td><td><a href="OTHL-PRE-ProTeamRoster.php#Oilers">Condors</a></td><td>7</td><td><a href="OTHL-PRE-ProTeamRoster.php#Hurricanes">Checkers</a></td><td>0</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-177.html">Game Direct Link</a></td></tr>
<tr><td>16</td><td>193</td><td><a href="OTHL-PRE-ProTeamRoster.php#Hurricanes">Checkers</a></td><td>7</td><td><a href="OTHL-PRE-ProTeamRoster.php#Rangers">Wolf Pack</a></td><td>6</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-193.html">Game Direct Link</a></td></tr>
<tr><td>17</td><td>204</td><td><a href="OTHL-PRE-ProTeamRoster.php#Hurricanes">Checkers</a></td><td>7</td><td><a href="OTHL-PRE-ProTeamRoster.php#Islanders">Sound Tigers</a></td><td>3</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-204.html">Game Direct Link</a></td></tr>
<tr><td>18</td><td>209</td><td><a href="OTHL-PRE-ProTeamRoster.php#Panthers">Thunderbirds</a></td><td>4</td><td><a href="OTHL-PRE-ProTeamRoster.php#Hurricanes">Checkers</a></td><td>5</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-209.html">Game Direct Link</a></td></tr>
<tr><td>19</td><td>226</td><td><a href="OTHL-PRE-ProTeamRoster.php#Hurricanes">Checkers</a></td><td>1</td><td><a href="OTHL-PRE-ProTeamRoster.php#Flyers">Phantoms</a></td><td>7</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-226.html">Game Direct Link</a></td></tr>
<tr><td>21</td><td>240</td><td><a href="OTHL-PRE-ProTeamRoster.php#Flyers">Phantoms</a></td><td>2</td><td><a href="OTHL-PRE-ProTeamRoster.php#Hurricanes">Checkers</a></td><td>6</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-240.html">Game Direct Link</a></td></tr>
</table></div>
<h1 class="TeamScheduleFarm_BPT"><a id="SoundTigers">Sound Tigers</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=19">Islanders Page</a> ]
[ <a href="OTHL-PRE-ProTeamRoster.php#Islanders">Pro Team Roster</a> ]
[ <a href="OTHL-PRE-FarmTeamScoring.php#SoundTigers">Farm Team Scoring</a> ]
[ <a href="OTHL-PRE-FarmTeamLines.php#SoundTigers">Farm Team Lines</a> ]
[ <a href="OTHL-PRE-FarmTeamSchedule.php#SoundTigers">Farm Team Schedule</a> ]
[ <a href="OTHL-PRE-FarmTeamStats.php#SoundTigers">Farm Team Stats</a> ]
[ <a href="OTHL-PRE-FarmTeamStatsVS.php#SoundTigers">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_SoundTigers');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_SoundTigers" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW35">Day</th><th class="STHSW35">Game</th><th class="STHSW200">Visitor Team</th><th class="STHSW35">Score</th><th class="STHSW200">Home Team</th><th class="STHSW35">Score</th><th class="STHSW35">ST</th><th class="STHSW35">OT</th><th class="STHSW35">SO</th><th class="STHSW35">RI</th><th class="STHSW200">Link</th></tr></thead>
<tr><td>1</td><td>4</td><td><a href="OTHL-PRE-ProTeamRoster.php#Penguins">Penguins</a></td><td>5</td><td><a href="OTHL-PRE-ProTeamRoster.php#Islanders">Sound Tigers</a></td><td>2</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-4.html">Game Direct Link</a></td></tr>
<tr><td>2</td><td>20</td><td><a href="OTHL-PRE-ProTeamRoster.php#Islanders">Sound Tigers</a></td><td>5</td><td><a href="OTHL-PRE-ProTeamRoster.php#Penguins">Penguins</a></td><td>10</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-20.html">Game Direct Link</a></td></tr>
<tr><td>4</td><td>40</td><td><a href="OTHL-PRE-ProTeamRoster.php#Flyers">Phantoms</a></td><td>9</td><td><a href="OTHL-PRE-ProTeamRoster.php#Islanders">Sound Tigers</a></td><td>1</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-40.html">Game Direct Link</a></td></tr>
<tr><td>6</td><td>67</td><td><a href="OTHL-PRE-ProTeamRoster.php#Penguins">Penguins</a></td><td>7</td><td><a href="OTHL-PRE-ProTeamRoster.php#Islanders">Sound Tigers</a></td><td>4</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-67.html">Game Direct Link</a></td></tr>
<tr><td>7</td><td>81</td><td><a href="OTHL-PRE-ProTeamRoster.php#Islanders">Sound Tigers</a></td><td>0</td><td><a href="OTHL-PRE-ProTeamRoster.php#Panthers">Thunderbirds</a></td><td>7</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-81.html">Game Direct Link</a></td></tr>
<tr><td>8</td><td>98</td><td><a href="OTHL-PRE-ProTeamRoster.php#Bruins">Bruins</a></td><td>8</td><td><a href="OTHL-PRE-ProTeamRoster.php#Islanders">Sound Tigers</a></td><td>0</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-98.html">Game Direct Link</a></td></tr>
<tr><td>10</td><td>121</td><td><a href="OTHL-PRE-ProTeamRoster.php#Islanders">Sound Tigers</a></td><td>0</td><td><a href="OTHL-PRE-ProTeamRoster.php#Bruins">Bruins</a></td><td>6</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-121.html">Game Direct Link</a></td></tr>
<tr><td>11</td><td>134</td><td><a href="OTHL-PRE-ProTeamRoster.php#Islanders">Sound Tigers</a></td><td>4</td><td><a href="OTHL-PRE-ProTeamRoster.php#Hurricanes">Checkers</a></td><td>7</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-134.html">Game Direct Link</a></td></tr>
<tr><td>12</td><td>144</td><td><a href="OTHL-PRE-ProTeamRoster.php#Panthers">Thunderbirds</a></td><td>7</td><td><a href="OTHL-PRE-ProTeamRoster.php#Islanders">Sound Tigers</a></td><td>1</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-144.html">Game Direct Link</a></td></tr>
<tr><td>14</td><td>165</td><td><a href="OTHL-PRE-ProTeamRoster.php#Capitals">Bears</a></td><td>6</td><td><a href="OTHL-PRE-ProTeamRoster.php#Islanders">Sound Tigers</a></td><td>3</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-165.html">Game Direct Link</a></td></tr>
<tr><td>15</td><td>181</td><td><a href="OTHL-PRE-ProTeamRoster.php#Islanders">Sound Tigers</a></td><td>1</td><td><a href="OTHL-PRE-ProTeamRoster.php#Flyers">Phantoms</a></td><td>4</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-181.html">Game Direct Link</a></td></tr>
<tr><td>16</td><td>185</td><td><a href="OTHL-PRE-ProTeamRoster.php#Islanders">Sound Tigers</a></td><td>5</td><td><a href="OTHL-PRE-ProTeamRoster.php#Capitals">Bears</a></td><td>4</td><td>W</td><td>*</td><td></td><td></td><td><a href="OTHL-PRE-Farm-185.html">Game Direct Link</a></td></tr>
<tr><td>17</td><td>204</td><td><a href="OTHL-PRE-ProTeamRoster.php#Hurricanes">Checkers</a></td><td>7</td><td><a href="OTHL-PRE-ProTeamRoster.php#Islanders">Sound Tigers</a></td><td>3</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-204.html">Game Direct Link</a></td></tr>
<tr><td>18</td><td>216</td><td><a href="OTHL-PRE-ProTeamRoster.php#Islanders">Sound Tigers</a></td><td>1</td><td><a href="OTHL-PRE-ProTeamRoster.php#Canucks">Canucks</a></td><td>7</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-216.html">Game Direct Link</a></td></tr>
<tr><td>19</td><td>225</td><td><a href="OTHL-PRE-ProTeamRoster.php#Islanders">Sound Tigers</a></td><td>8</td><td><a href="OTHL-PRE-ProTeamRoster.php#Rangers">Wolf Pack</a></td><td>3</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-225.html">Game Direct Link</a></td></tr>
<tr><td>21</td><td>241</td><td><a href="OTHL-PRE-ProTeamRoster.php#Rangers">Wolf Pack</a></td><td>2</td><td><a href="OTHL-PRE-ProTeamRoster.php#Islanders">Sound Tigers</a></td><td>6</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-241.html">Game Direct Link</a></td></tr>
</table></div>
<h1 class="TeamScheduleFarm_MAN"><a id="Moose">Moose</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=2">Jets Page</a> ]
[ <a href="OTHL-PRE-ProTeamRoster.php#Jets">Pro Team Roster</a> ]
[ <a href="OTHL-PRE-FarmTeamScoring.php#Moose">Farm Team Scoring</a> ]
[ <a href="OTHL-PRE-FarmTeamLines.php#Moose">Farm Team Lines</a> ]
[ <a href="OTHL-PRE-FarmTeamSchedule.php#Moose">Farm Team Schedule</a> ]
[ <a href="OTHL-PRE-FarmTeamStats.php#Moose">Farm Team Stats</a> ]
[ <a href="OTHL-PRE-FarmTeamStatsVS.php#Moose">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Moose');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Moose" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW35">Day</th><th class="STHSW35">Game</th><th class="STHSW200">Visitor Team</th><th class="STHSW35">Score</th><th class="STHSW200">Home Team</th><th class="STHSW35">Score</th><th class="STHSW35">ST</th><th class="STHSW35">OT</th><th class="STHSW35">SO</th><th class="STHSW35">RI</th><th class="STHSW200">Link</th></tr></thead>
<tr><td>1</td><td>12</td><td><a href="OTHL-PRE-ProTeamRoster.php#Wild">Wild</a></td><td>1</td><td><a href="OTHL-PRE-ProTeamRoster.php#Jets">Moose</a></td><td>6</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-12.html">Game Direct Link</a></td></tr>
<tr><td>2</td><td>25</td><td><a href="OTHL-PRE-ProTeamRoster.php#Jets">Moose</a></td><td>3</td><td><a href="OTHL-PRE-ProTeamRoster.php#GoldenKnights">Wolves</a></td><td>1</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-25.html">Game Direct Link</a></td></tr>
<tr><td>4</td><td>37</td><td><a href="OTHL-PRE-ProTeamRoster.php#Predators">Admirals</a></td><td>4</td><td><a href="OTHL-PRE-ProTeamRoster.php#Jets">Moose</a></td><td>3</td><td>L</td><td></td><td>*</td><td></td><td><a href="OTHL-PRE-Farm-37.html">Game Direct Link</a></td></tr>
<tr><td>5</td><td>52</td><td><a href="OTHL-PRE-ProTeamRoster.php#Jets">Moose</a></td><td>11</td><td><a href="OTHL-PRE-ProTeamRoster.php#Stars">Stars</a></td><td>0</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-52.html">Game Direct Link</a></td></tr>
<tr><td>6</td><td>64</td><td><a href="OTHL-PRE-ProTeamRoster.php#Jets">Moose</a></td><td>7</td><td><a href="OTHL-PRE-ProTeamRoster.php#Blues">Rampage </a></td><td>1</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-64.html">Game Direct Link</a></td></tr>
<tr><td>7</td><td>83</td><td><a href="OTHL-PRE-ProTeamRoster.php#Sabres"> Americans</a></td><td>0</td><td><a href="OTHL-PRE-ProTeamRoster.php#Jets">Moose</a></td><td>3</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-83.html">Game Direct Link</a></td></tr>
<tr><td>8</td><td>103</td><td><a href="OTHL-PRE-ProTeamRoster.php#Jets">Moose</a></td><td>7</td><td><a href="OTHL-PRE-ProTeamRoster.php#Wild">Wild</a></td><td>2</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-103.html">Game Direct Link</a></td></tr>
<tr><td>9</td><td>116</td><td><a href="OTHL-PRE-ProTeamRoster.php#GoldenKnights">Wolves</a></td><td>1</td><td><a href="OTHL-PRE-ProTeamRoster.php#Jets">Moose</a></td><td>6</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-116.html">Game Direct Link</a></td></tr>
<tr><td>10</td><td>128</td><td><a href="OTHL-PRE-ProTeamRoster.php#Jets">Moose</a></td><td>8</td><td><a href="OTHL-PRE-ProTeamRoster.php#Kraken">Mariners</a></td><td>2</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-128.html">Game Direct Link</a></td></tr>
<tr><td>12</td><td>146</td><td><a href="OTHL-PRE-ProTeamRoster.php#Blackhawks">IceHogs</a></td><td>1</td><td><a href="OTHL-PRE-ProTeamRoster.php#Jets">Moose</a></td><td>0</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-146.html">Game Direct Link</a></td></tr>
<tr><td>13</td><td>156</td><td><a href="OTHL-PRE-ProTeamRoster.php#Jets">Moose</a></td><td>2</td><td><a href="OTHL-PRE-ProTeamRoster.php#Predators">Admirals</a></td><td>6</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-156.html">Game Direct Link</a></td></tr>
<tr><td>14</td><td>166</td><td><a href="OTHL-PRE-ProTeamRoster.php#Jets">Moose</a></td><td>2</td><td><a href="OTHL-PRE-ProTeamRoster.php#Blackhawks">IceHogs</a></td><td>5</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-166.html">Game Direct Link</a></td></tr>
<tr><td>16</td><td>187</td><td><a href="OTHL-PRE-ProTeamRoster.php#Stars">Stars</a></td><td>1</td><td><a href="OTHL-PRE-ProTeamRoster.php#Jets">Moose</a></td><td>12</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-187.html">Game Direct Link</a></td></tr>
<tr><td>18</td><td>211</td><td><a href="OTHL-PRE-ProTeamRoster.php#Blues">Rampage </a></td><td>1</td><td><a href="OTHL-PRE-ProTeamRoster.php#Jets">Moose</a></td><td>10</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-211.html">Game Direct Link</a></td></tr>
<tr><td>19</td><td>221</td><td><a href="OTHL-PRE-ProTeamRoster.php#Jets">Moose</a></td><td>2</td><td><a href="OTHL-PRE-ProTeamRoster.php#Sabres"> Americans</a></td><td>4</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-221.html">Game Direct Link</a></td></tr>
<tr><td>22</td><td>251</td><td><a href="OTHL-PRE-ProTeamRoster.php#Kraken">Mariners</a></td><td>3</td><td><a href="OTHL-PRE-ProTeamRoster.php#Jets">Moose</a></td><td>7</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-251.html">Game Direct Link</a></td></tr>
</table></div>
<h1 class="TeamScheduleFarm_ONT"><a id="Reign">Reign</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=14">Kings Page</a> ]
[ <a href="OTHL-PRE-ProTeamRoster.php#Kings">Pro Team Roster</a> ]
[ <a href="OTHL-PRE-FarmTeamScoring.php#Reign">Farm Team Scoring</a> ]
[ <a href="OTHL-PRE-FarmTeamLines.php#Reign">Farm Team Lines</a> ]
[ <a href="OTHL-PRE-FarmTeamSchedule.php#Reign">Farm Team Schedule</a> ]
[ <a href="OTHL-PRE-FarmTeamStats.php#Reign">Farm Team Stats</a> ]
[ <a href="OTHL-PRE-FarmTeamStatsVS.php#Reign">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Reign');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Reign" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW35">Day</th><th class="STHSW35">Game</th><th class="STHSW200">Visitor Team</th><th class="STHSW35">Score</th><th class="STHSW200">Home Team</th><th class="STHSW35">Score</th><th class="STHSW35">ST</th><th class="STHSW35">OT</th><th class="STHSW35">SO</th><th class="STHSW35">RI</th><th class="STHSW200">Link</th></tr></thead>
<tr><td>1</td><td>3</td><td><a href="OTHL-PRE-ProTeamRoster.php#Flames">Heat</a></td><td>4</td><td><a href="OTHL-PRE-ProTeamRoster.php#Kings">Reign</a></td><td>1</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-3.html">Game Direct Link</a></td></tr>
<tr><td>2</td><td>23</td><td><a href="OTHL-PRE-ProTeamRoster.php#Kings">Reign</a></td><td>2</td><td><a href="OTHL-PRE-ProTeamRoster.php#Ducks">Gulls</a></td><td>8</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-23.html">Game Direct Link</a></td></tr>
<tr><td>3</td><td>35</td><td><a href="OTHL-PRE-ProTeamRoster.php#Kings">Reign</a></td><td>0</td><td><a href="OTHL-PRE-ProTeamRoster.php#Oilers">Condors</a></td><td>7</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-35.html">Game Direct Link</a></td></tr>
<tr><td>5</td><td>55</td><td><a href="OTHL-PRE-ProTeamRoster.php#Kings">Reign</a></td><td>5</td><td><a href="OTHL-PRE-ProTeamRoster.php#Coyotes">Roadrunners</a></td><td>1</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-55.html">Game Direct Link</a></td></tr>
<tr><td>6</td><td>62</td><td><a href="OTHL-PRE-ProTeamRoster.php#Flames">Heat</a></td><td>1</td><td><a href="OTHL-PRE-ProTeamRoster.php#Kings">Reign</a></td><td>3</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-62.html">Game Direct Link</a></td></tr>
<tr><td>7</td><td>84</td><td><a href="OTHL-PRE-ProTeamRoster.php#Oilers">Condors</a></td><td>3</td><td><a href="OTHL-PRE-ProTeamRoster.php#Kings">Reign</a></td><td>4</td><td>W</td><td>*</td><td></td><td></td><td><a href="OTHL-PRE-Farm-84.html">Game Direct Link</a></td></tr>
<tr><td>8</td><td>99</td><td><a href="OTHL-PRE-ProTeamRoster.php#Kings">Reign</a></td><td>4</td><td><a href="OTHL-PRE-ProTeamRoster.php#Oilers">Condors</a></td><td>3</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-99.html">Game Direct Link</a></td></tr>
<tr><td>9</td><td>115</td><td><a href="OTHL-PRE-ProTeamRoster.php#Oilers">Condors</a></td><td>1</td><td><a href="OTHL-PRE-ProTeamRoster.php#Kings">Reign</a></td><td>0</td><td>L</td><td></td><td>*</td><td></td><td><a href="OTHL-PRE-Farm-115.html">Game Direct Link</a></td></tr>
<tr><td>10</td><td>130</td><td><a href="OTHL-PRE-ProTeamRoster.php#Kings">Reign</a></td><td>5</td><td><a href="OTHL-PRE-ProTeamRoster.php#Sharks">Barracudas</a></td><td>1</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-130.html">Game Direct Link</a></td></tr>
<tr><td>12</td><td>145</td><td><a href="OTHL-PRE-ProTeamRoster.php#Ducks">Gulls</a></td><td>2</td><td><a href="OTHL-PRE-ProTeamRoster.php#Kings">Reign</a></td><td>7</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-145.html">Game Direct Link</a></td></tr>
<tr><td>14</td><td>169</td><td><a href="OTHL-PRE-ProTeamRoster.php#Coyotes">Roadrunners</a></td><td>2</td><td><a href="OTHL-PRE-ProTeamRoster.php#Kings">Reign</a></td><td>5</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-169.html">Game Direct Link</a></td></tr>
<tr><td>15</td><td>184</td><td><a href="OTHL-PRE-ProTeamRoster.php#Kings">Reign</a></td><td>6</td><td><a href="OTHL-PRE-ProTeamRoster.php#Avalanche">Eagles</a></td><td>1</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-184.html">Game Direct Link</a></td></tr>
<tr><td>17</td><td>202</td><td><a href="OTHL-PRE-ProTeamRoster.php#Avalanche">Eagles</a></td><td>2</td><td><a href="OTHL-PRE-ProTeamRoster.php#Kings">Reign</a></td><td>5</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-202.html">Game Direct Link</a></td></tr>
<tr><td>18</td><td>207</td><td><a href="OTHL-PRE-ProTeamRoster.php#Kings">Reign</a></td><td>6</td><td><a href="OTHL-PRE-ProTeamRoster.php#Flames">Heat</a></td><td>2</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-207.html">Game Direct Link</a></td></tr>
<tr><td>19</td><td>227</td><td><a href="OTHL-PRE-ProTeamRoster.php#Kings">Reign</a></td><td>2</td><td><a href="OTHL-PRE-ProTeamRoster.php#Flames">Heat</a></td><td>3</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-227.html">Game Direct Link</a></td></tr>
<tr><td>22</td><td>247</td><td><a href="OTHL-PRE-ProTeamRoster.php#Sharks">Barracudas</a></td><td>0</td><td><a href="OTHL-PRE-ProTeamRoster.php#Kings">Reign</a></td><td>8</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-247.html">Game Direct Link</a></td></tr>
</table></div>
<h1 class="TeamScheduleFarm_PSM"><a id="Mariners">Mariners</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=32">Kraken Page</a> ]
[ <a href="OTHL-PRE-ProTeamRoster.php#Kraken">Pro Team Roster</a> ]
[ <a href="OTHL-PRE-FarmTeamScoring.php#Mariners">Farm Team Scoring</a> ]
[ <a href="OTHL-PRE-FarmTeamLines.php#Mariners">Farm Team Lines</a> ]
[ <a href="OTHL-PRE-FarmTeamSchedule.php#Mariners">Farm Team Schedule</a> ]
[ <a href="OTHL-PRE-FarmTeamStats.php#Mariners">Farm Team Stats</a> ]
[ <a href="OTHL-PRE-FarmTeamStatsVS.php#Mariners">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Mariners');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Mariners" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW35">Day</th><th class="STHSW35">Game</th><th class="STHSW200">Visitor Team</th><th class="STHSW35">Score</th><th class="STHSW200">Home Team</th><th class="STHSW35">Score</th><th class="STHSW35">ST</th><th class="STHSW35">OT</th><th class="STHSW35">SO</th><th class="STHSW35">RI</th><th class="STHSW200">Link</th></tr></thead>
<tr><td>1</td><td>13</td><td><a href="OTHL-PRE-ProTeamRoster.php#GoldenKnights">Wolves</a></td><td>3</td><td><a href="OTHL-PRE-ProTeamRoster.php#Kraken">Mariners</a></td><td>6</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-13.html">Game Direct Link</a></td></tr>
<tr><td>3</td><td>33</td><td><a href="OTHL-PRE-ProTeamRoster.php#Kraken">Mariners</a></td><td>1</td><td><a href="OTHL-PRE-ProTeamRoster.php#Sabres"> Americans</a></td><td>5</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-33.html">Game Direct Link</a></td></tr>
<tr><td>4</td><td>46</td><td><a href="OTHL-PRE-ProTeamRoster.php#Kraken">Mariners</a></td><td>2</td><td><a href="OTHL-PRE-ProTeamRoster.php#GoldenKnights">Wolves</a></td><td>4</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-46.html">Game Direct Link</a></td></tr>
<tr><td>5</td><td>59</td><td><a href="OTHL-PRE-ProTeamRoster.php#Predators">Admirals</a></td><td>6</td><td><a href="OTHL-PRE-ProTeamRoster.php#Kraken">Mariners</a></td><td>4</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-59.html">Game Direct Link</a></td></tr>
<tr><td>7</td><td>77</td><td><a href="OTHL-PRE-ProTeamRoster.php#Stars">Stars</a></td><td>4</td><td><a href="OTHL-PRE-ProTeamRoster.php#Kraken">Mariners</a></td><td>9</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-77.html">Game Direct Link</a></td></tr>
<tr><td>8</td><td>96</td><td><a href="OTHL-PRE-ProTeamRoster.php#Blues">Rampage </a></td><td>3</td><td><a href="OTHL-PRE-ProTeamRoster.php#Kraken">Mariners</a></td><td>7</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-96.html">Game Direct Link</a></td></tr>
<tr><td>9</td><td>109</td><td><a href="OTHL-PRE-ProTeamRoster.php#Kraken">Mariners</a></td><td>8</td><td><a href="OTHL-PRE-ProTeamRoster.php#Blues">Rampage </a></td><td>2</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-109.html">Game Direct Link</a></td></tr>
<tr><td>10</td><td>128</td><td><a href="OTHL-PRE-ProTeamRoster.php#Jets">Moose</a></td><td>8</td><td><a href="OTHL-PRE-ProTeamRoster.php#Kraken">Mariners</a></td><td>2</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-128.html">Game Direct Link</a></td></tr>
<tr><td>11</td><td>138</td><td><a href="OTHL-PRE-ProTeamRoster.php#Kraken">Mariners</a></td><td>8</td><td><a href="OTHL-PRE-ProTeamRoster.php#Stars">Stars</a></td><td>4</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-138.html">Game Direct Link</a></td></tr>
<tr><td>13</td><td>160</td><td><a href="OTHL-PRE-ProTeamRoster.php#Kraken">Mariners</a></td><td>6</td><td><a href="OTHL-PRE-ProTeamRoster.php#Wild">Wild</a></td><td>4</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-160.html">Game Direct Link</a></td></tr>
<tr><td>15</td><td>178</td><td><a href="OTHL-PRE-ProTeamRoster.php#Blackhawks">IceHogs</a></td><td>3</td><td><a href="OTHL-PRE-ProTeamRoster.php#Kraken">Mariners</a></td><td>1</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-178.html">Game Direct Link</a></td></tr>
<tr><td>16</td><td>197</td><td><a href="OTHL-PRE-ProTeamRoster.php#Kraken">Mariners</a></td><td>6</td><td><a href="OTHL-PRE-ProTeamRoster.php#Blackhawks">IceHogs</a></td><td>4</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-197.html">Game Direct Link</a></td></tr>
<tr><td>17</td><td>206</td><td><a href="OTHL-PRE-ProTeamRoster.php#Sabres"> Americans</a></td><td>5</td><td><a href="OTHL-PRE-ProTeamRoster.php#Kraken">Mariners</a></td><td>4</td><td>L</td><td></td><td>*</td><td></td><td><a href="OTHL-PRE-Farm-206.html">Game Direct Link</a></td></tr>
<tr><td>20</td><td>231</td><td><a href="OTHL-PRE-ProTeamRoster.php#Wild">Wild</a></td><td>3</td><td><a href="OTHL-PRE-ProTeamRoster.php#Kraken">Mariners</a></td><td>8</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-231.html">Game Direct Link</a></td></tr>
<tr><td>21</td><td>243</td><td><a href="OTHL-PRE-ProTeamRoster.php#Kraken">Mariners</a></td><td>2</td><td><a href="OTHL-PRE-ProTeamRoster.php#Predators">Admirals</a></td><td>3</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-243.html">Game Direct Link</a></td></tr>
<tr><td>22</td><td>251</td><td><a href="OTHL-PRE-ProTeamRoster.php#Kraken">Mariners</a></td><td>3</td><td><a href="OTHL-PRE-ProTeamRoster.php#Jets">Moose</a></td><td>7</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-251.html">Game Direct Link</a></td></tr>
</table></div>
<h1 class="TeamScheduleFarm_SYR"><a id="Crunch">Crunch</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=27">Lightning Page</a> ]
[ <a href="OTHL-PRE-ProTeamRoster.php#Lightning">Pro Team Roster</a> ]
[ <a href="OTHL-PRE-FarmTeamScoring.php#Crunch">Farm Team Scoring</a> ]
[ <a href="OTHL-PRE-FarmTeamLines.php#Crunch">Farm Team Lines</a> ]
[ <a href="OTHL-PRE-FarmTeamSchedule.php#Crunch">Farm Team Schedule</a> ]
[ <a href="OTHL-PRE-FarmTeamStats.php#Crunch">Farm Team Stats</a> ]
[ <a href="OTHL-PRE-FarmTeamStatsVS.php#Crunch">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Crunch');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Crunch" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW35">Day</th><th class="STHSW35">Game</th><th class="STHSW200">Visitor Team</th><th class="STHSW35">Score</th><th class="STHSW200">Home Team</th><th class="STHSW35">Score</th><th class="STHSW35">ST</th><th class="STHSW35">OT</th><th class="STHSW35">SO</th><th class="STHSW35">RI</th><th class="STHSW200">Link</th></tr></thead>
<tr><td>1</td><td>2</td><td><a href="OTHL-PRE-ProTeamRoster.php#Canadiens">Rocket</a></td><td>6</td><td><a href="OTHL-PRE-ProTeamRoster.php#Lightning">Crunch</a></td><td>2</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-2.html">Game Direct Link</a></td></tr>
<tr><td>2</td><td>19</td><td><a href="OTHL-PRE-ProTeamRoster.php#Lightning">Crunch</a></td><td>2</td><td><a href="OTHL-PRE-ProTeamRoster.php#Devils">Comets</a></td><td>4</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-19.html">Game Direct Link</a></td></tr>
<tr><td>3</td><td>31</td><td><a href="OTHL-PRE-ProTeamRoster.php#Lightning">Crunch</a></td><td>3</td><td><a href="OTHL-PRE-ProTeamRoster.php#Senators">Senators</a></td><td>6</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-31.html">Game Direct Link</a></td></tr>
<tr><td>5</td><td>56</td><td><a href="OTHL-PRE-ProTeamRoster.php#Lightning">Crunch</a></td><td>2</td><td><a href="OTHL-PRE-ProTeamRoster.php#Canucks">Canucks</a></td><td>3</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-56.html">Game Direct Link</a></td></tr>
<tr><td>6</td><td>63</td><td><a href="OTHL-PRE-ProTeamRoster.php#Devils">Comets</a></td><td>9</td><td><a href="OTHL-PRE-ProTeamRoster.php#Lightning">Crunch</a></td><td>5</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-63.html">Game Direct Link</a></td></tr>
<tr><td>7</td><td>82</td><td><a href="OTHL-PRE-ProTeamRoster.php#RedWings">Griffins</a></td><td>2</td><td><a href="OTHL-PRE-ProTeamRoster.php#Lightning">Crunch</a></td><td>3</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-82.html">Game Direct Link</a></td></tr>
<tr><td>9</td><td>108</td><td><a href="OTHL-PRE-ProTeamRoster.php#BlueJackets">Monsters</a></td><td>7</td><td><a href="OTHL-PRE-ProTeamRoster.php#Lightning">Crunch</a></td><td>1</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-108.html">Game Direct Link</a></td></tr>
<tr><td>10</td><td>118</td><td><a href="OTHL-PRE-ProTeamRoster.php#Lightning">Crunch</a></td><td>1</td><td><a href="OTHL-PRE-ProTeamRoster.php#Canadiens">Rocket</a></td><td>4</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-118.html">Game Direct Link</a></td></tr>
<tr><td>12</td><td>143</td><td><a href="OTHL-PRE-ProTeamRoster.php#MapleLeafs">Marlies</a></td><td>10</td><td><a href="OTHL-PRE-ProTeamRoster.php#Lightning">Crunch</a></td><td>2</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-143.html">Game Direct Link</a></td></tr>
<tr><td>13</td><td>155</td><td><a href="OTHL-PRE-ProTeamRoster.php#Lightning">Crunch</a></td><td>3</td><td><a href="OTHL-PRE-ProTeamRoster.php#RedWings">Griffins</a></td><td>5</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-155.html">Game Direct Link</a></td></tr>
<tr><td>15</td><td>176</td><td><a href="OTHL-PRE-ProTeamRoster.php#Canucks">Canucks</a></td><td>8</td><td><a href="OTHL-PRE-ProTeamRoster.php#Lightning">Crunch</a></td><td>1</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-176.html">Game Direct Link</a></td></tr>
<tr><td>16</td><td>196</td><td><a href="OTHL-PRE-ProTeamRoster.php#Canadiens">Rocket</a></td><td>4</td><td><a href="OTHL-PRE-ProTeamRoster.php#Lightning">Crunch</a></td><td>1</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-196.html">Game Direct Link</a></td></tr>
<tr><td>18</td><td>213</td><td><a href="OTHL-PRE-ProTeamRoster.php#Lightning">Crunch</a></td><td>6</td><td><a href="OTHL-PRE-ProTeamRoster.php#Devils">Comets</a></td><td>5</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-213.html">Game Direct Link</a></td></tr>
<tr><td>19</td><td>228</td><td><a href="OTHL-PRE-ProTeamRoster.php#Lightning">Crunch</a></td><td>2</td><td><a href="OTHL-PRE-ProTeamRoster.php#MapleLeafs">Marlies</a></td><td>8</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-228.html">Game Direct Link</a></td></tr>
<tr><td>20</td><td>234</td><td><a href="OTHL-PRE-ProTeamRoster.php#Senators">Senators</a></td><td>6</td><td><a href="OTHL-PRE-ProTeamRoster.php#Lightning">Crunch</a></td><td>4</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-234.html">Game Direct Link</a></td></tr>
<tr><td>21</td><td>237</td><td><a href="OTHL-PRE-ProTeamRoster.php#Lightning">Crunch</a></td><td>0</td><td><a href="OTHL-PRE-ProTeamRoster.php#BlueJackets">Monsters</a></td><td>8</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-237.html">Game Direct Link</a></td></tr>
</table></div>
<h1 class="TeamScheduleFarm_TOR"><a id="Marlies">Marlies</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=28">Maple Leafs Page</a> ]
[ <a href="OTHL-PRE-ProTeamRoster.php#MapleLeafs">Pro Team Roster</a> ]
[ <a href="OTHL-PRE-FarmTeamScoring.php#Marlies">Farm Team Scoring</a> ]
[ <a href="OTHL-PRE-FarmTeamLines.php#Marlies">Farm Team Lines</a> ]
[ <a href="OTHL-PRE-FarmTeamSchedule.php#Marlies">Farm Team Schedule</a> ]
[ <a href="OTHL-PRE-FarmTeamStats.php#Marlies">Farm Team Stats</a> ]
[ <a href="OTHL-PRE-FarmTeamStatsVS.php#Marlies">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Marlies');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Marlies" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW35">Day</th><th class="STHSW35">Game</th><th class="STHSW200">Visitor Team</th><th class="STHSW35">Score</th><th class="STHSW200">Home Team</th><th class="STHSW35">Score</th><th class="STHSW35">ST</th><th class="STHSW35">OT</th><th class="STHSW35">SO</th><th class="STHSW35">RI</th><th class="STHSW200">Link</th></tr></thead>
<tr><td>1</td><td>1</td><td><a href="OTHL-PRE-ProTeamRoster.php#Devils">Comets</a></td><td>1</td><td><a href="OTHL-PRE-ProTeamRoster.php#MapleLeafs">Marlies</a></td><td>11</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-1.html">Game Direct Link</a></td></tr>
<tr><td>2</td><td>24</td><td><a href="OTHL-PRE-ProTeamRoster.php#MapleLeafs">Marlies</a></td><td>1</td><td><a href="OTHL-PRE-ProTeamRoster.php#Canadiens">Rocket</a></td><td>2</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-24.html">Game Direct Link</a></td></tr>
<tr><td>4</td><td>45</td><td><a href="OTHL-PRE-ProTeamRoster.php#Canucks">Canucks</a></td><td>3</td><td><a href="OTHL-PRE-ProTeamRoster.php#MapleLeafs">Marlies</a></td><td>2</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-45.html">Game Direct Link</a></td></tr>
<tr><td>6</td><td>65</td><td><a href="OTHL-PRE-ProTeamRoster.php#MapleLeafs">Marlies</a></td><td>3</td><td><a href="OTHL-PRE-ProTeamRoster.php#BlueJackets">Monsters</a></td><td>1</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-65.html">Game Direct Link</a></td></tr>
<tr><td>7</td><td>79</td><td><a href="OTHL-PRE-ProTeamRoster.php#BlueJackets">Monsters</a></td><td>0</td><td><a href="OTHL-PRE-ProTeamRoster.php#MapleLeafs">Marlies</a></td><td>7</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-79.html">Game Direct Link</a></td></tr>
<tr><td>8</td><td>93</td><td><a href="OTHL-PRE-ProTeamRoster.php#MapleLeafs">Marlies</a></td><td>7</td><td><a href="OTHL-PRE-ProTeamRoster.php#RedWings">Griffins</a></td><td>2</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-93.html">Game Direct Link</a></td></tr>
<tr><td>9</td><td>110</td><td><a href="OTHL-PRE-ProTeamRoster.php#RedWings">Griffins</a></td><td>1</td><td><a href="OTHL-PRE-ProTeamRoster.php#MapleLeafs">Marlies</a></td><td>7</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-110.html">Game Direct Link</a></td></tr>
<tr><td>11</td><td>133</td><td><a href="OTHL-PRE-ProTeamRoster.php#Canadiens">Rocket</a></td><td>1</td><td><a href="OTHL-PRE-ProTeamRoster.php#MapleLeafs">Marlies</a></td><td>2</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-133.html">Game Direct Link</a></td></tr>
<tr><td>12</td><td>143</td><td><a href="OTHL-PRE-ProTeamRoster.php#MapleLeafs">Marlies</a></td><td>10</td><td><a href="OTHL-PRE-ProTeamRoster.php#Lightning">Crunch</a></td><td>2</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-143.html">Game Direct Link</a></td></tr>
<tr><td>13</td><td>162</td><td><a href="OTHL-PRE-ProTeamRoster.php#Devils">Comets</a></td><td>0</td><td><a href="OTHL-PRE-ProTeamRoster.php#MapleLeafs">Marlies</a></td><td>10</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-162.html">Game Direct Link</a></td></tr>
<tr><td>14</td><td>174</td><td><a href="OTHL-PRE-ProTeamRoster.php#MapleLeafs">Marlies</a></td><td>7</td><td><a href="OTHL-PRE-ProTeamRoster.php#Senators">Senators</a></td><td>0</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-174.html">Game Direct Link</a></td></tr>
<tr><td>16</td><td>195</td><td><a href="OTHL-PRE-ProTeamRoster.php#Senators">Senators</a></td><td>1</td><td><a href="OTHL-PRE-ProTeamRoster.php#MapleLeafs">Marlies</a></td><td>8</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-195.html">Game Direct Link</a></td></tr>
<tr><td>18</td><td>215</td><td><a href="OTHL-PRE-ProTeamRoster.php#MapleLeafs">Marlies</a></td><td>7</td><td><a href="OTHL-PRE-ProTeamRoster.php#Canadiens">Rocket</a></td><td>0</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-215.html">Game Direct Link</a></td></tr>
<tr><td>19</td><td>228</td><td><a href="OTHL-PRE-ProTeamRoster.php#Lightning">Crunch</a></td><td>2</td><td><a href="OTHL-PRE-ProTeamRoster.php#MapleLeafs">Marlies</a></td><td>8</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-228.html">Game Direct Link</a></td></tr>
<tr><td>21</td><td>244</td><td><a href="OTHL-PRE-ProTeamRoster.php#MapleLeafs">Marlies</a></td><td>10</td><td><a href="OTHL-PRE-ProTeamRoster.php#Devils">Comets</a></td><td>2</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-244.html">Game Direct Link</a></td></tr>
<tr><td>22</td><td>254</td><td><a href="OTHL-PRE-ProTeamRoster.php#MapleLeafs">Marlies</a></td><td>0</td><td><a href="OTHL-PRE-ProTeamRoster.php#Canucks">Canucks</a></td><td>1</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-254.html">Game Direct Link</a></td></tr>
</table></div>
<h1 class="TeamScheduleFarm_BKR"><a id="Condors">Condors</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=12">Oilers Page</a> ]
[ <a href="OTHL-PRE-ProTeamRoster.php#Oilers">Pro Team Roster</a> ]
[ <a href="OTHL-PRE-FarmTeamScoring.php#Condors">Farm Team Scoring</a> ]
[ <a href="OTHL-PRE-FarmTeamLines.php#Condors">Farm Team Lines</a> ]
[ <a href="OTHL-PRE-FarmTeamSchedule.php#Condors">Farm Team Schedule</a> ]
[ <a href="OTHL-PRE-FarmTeamStats.php#Condors">Farm Team Stats</a> ]
[ <a href="OTHL-PRE-FarmTeamStatsVS.php#Condors">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Condors');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Condors" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW35">Day</th><th class="STHSW35">Game</th><th class="STHSW200">Visitor Team</th><th class="STHSW35">Score</th><th class="STHSW200">Home Team</th><th class="STHSW35">Score</th><th class="STHSW35">ST</th><th class="STHSW35">OT</th><th class="STHSW35">SO</th><th class="STHSW35">RI</th><th class="STHSW200">Link</th></tr></thead>
<tr><td>1</td><td>10</td><td><a href="OTHL-PRE-ProTeamRoster.php#Coyotes">Roadrunners</a></td><td>2</td><td><a href="OTHL-PRE-ProTeamRoster.php#Oilers">Condors</a></td><td>9</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-10.html">Game Direct Link</a></td></tr>
<tr><td>3</td><td>35</td><td><a href="OTHL-PRE-ProTeamRoster.php#Kings">Reign</a></td><td>0</td><td><a href="OTHL-PRE-ProTeamRoster.php#Oilers">Condors</a></td><td>7</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-35.html">Game Direct Link</a></td></tr>
<tr><td>5</td><td>54</td><td><a href="OTHL-PRE-ProTeamRoster.php#Oilers">Condors</a></td><td>3</td><td><a href="OTHL-PRE-ProTeamRoster.php#Flames">Heat</a></td><td>1</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-54.html">Game Direct Link</a></td></tr>
<tr><td>6</td><td>68</td><td><a href="OTHL-PRE-ProTeamRoster.php#Sharks">Barracudas</a></td><td>2</td><td><a href="OTHL-PRE-ProTeamRoster.php#Oilers">Condors</a></td><td>8</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-68.html">Game Direct Link</a></td></tr>
<tr><td>7</td><td>84</td><td><a href="OTHL-PRE-ProTeamRoster.php#Oilers">Condors</a></td><td>3</td><td><a href="OTHL-PRE-ProTeamRoster.php#Kings">Reign</a></td><td>4</td><td>L</td><td>*</td><td></td><td></td><td><a href="OTHL-PRE-Farm-84.html">Game Direct Link</a></td></tr>
<tr><td>8</td><td>99</td><td><a href="OTHL-PRE-ProTeamRoster.php#Kings">Reign</a></td><td>4</td><td><a href="OTHL-PRE-ProTeamRoster.php#Oilers">Condors</a></td><td>3</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-99.html">Game Direct Link</a></td></tr>
<tr><td>9</td><td>115</td><td><a href="OTHL-PRE-ProTeamRoster.php#Oilers">Condors</a></td><td>1</td><td><a href="OTHL-PRE-ProTeamRoster.php#Kings">Reign</a></td><td>0</td><td>W</td><td></td><td>*</td><td></td><td><a href="OTHL-PRE-Farm-115.html">Game Direct Link</a></td></tr>
<tr><td>10</td><td>129</td><td><a href="OTHL-PRE-ProTeamRoster.php#Oilers">Condors</a></td><td>11</td><td><a href="OTHL-PRE-ProTeamRoster.php#Avalanche">Eagles</a></td><td>0</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-129.html">Game Direct Link</a></td></tr>
<tr><td>11</td><td>140</td><td><a href="OTHL-PRE-ProTeamRoster.php#Oilers">Condors</a></td><td>5</td><td><a href="OTHL-PRE-ProTeamRoster.php#Coyotes">Roadrunners</a></td><td>0</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-140.html">Game Direct Link</a></td></tr>
<tr><td>13</td><td>154</td><td><a href="OTHL-PRE-ProTeamRoster.php#Ducks">Gulls</a></td><td>2</td><td><a href="OTHL-PRE-ProTeamRoster.php#Oilers">Condors</a></td><td>4</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-154.html">Game Direct Link</a></td></tr>
<tr><td>14</td><td>170</td><td><a href="OTHL-PRE-ProTeamRoster.php#Bruins">Bruins</a></td><td>4</td><td><a href="OTHL-PRE-ProTeamRoster.php#Oilers">Condors</a></td><td>2</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-170.html">Game Direct Link</a></td></tr>
<tr><td>15</td><td>177</td><td><a href="OTHL-PRE-ProTeamRoster.php#Oilers">Condors</a></td><td>7</td><td><a href="OTHL-PRE-ProTeamRoster.php#Hurricanes">Checkers</a></td><td>0</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-177.html">Game Direct Link</a></td></tr>
<tr><td>16</td><td>192</td><td><a href="OTHL-PRE-ProTeamRoster.php#Oilers">Condors</a></td><td>4</td><td><a href="OTHL-PRE-ProTeamRoster.php#Ducks">Gulls</a></td><td>3</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-192.html">Game Direct Link</a></td></tr>
<tr><td>18</td><td>212</td><td><a href="OTHL-PRE-ProTeamRoster.php#Avalanche">Eagles</a></td><td>1</td><td><a href="OTHL-PRE-ProTeamRoster.php#Oilers">Condors</a></td><td>7</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-212.html">Game Direct Link</a></td></tr>
<tr><td>20</td><td>230</td><td><a href="OTHL-PRE-ProTeamRoster.php#Oilers">Condors</a></td><td>4</td><td><a href="OTHL-PRE-ProTeamRoster.php#Sharks">Barracudas</a></td><td>2</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-230.html">Game Direct Link</a></td></tr>
<tr><td>22</td><td>248</td><td><a href="OTHL-PRE-ProTeamRoster.php#Flames">Heat</a></td><td>8</td><td><a href="OTHL-PRE-ProTeamRoster.php#Oilers">Condors</a></td><td>1</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-248.html">Game Direct Link</a></td></tr>
</table></div>
<h1 class="TeamScheduleFarm_SPR"><a id="Thunderbirds">Thunderbirds</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=13">Panthers Page</a> ]
[ <a href="OTHL-PRE-ProTeamRoster.php#Panthers">Pro Team Roster</a> ]
[ <a href="OTHL-PRE-FarmTeamScoring.php#Thunderbirds">Farm Team Scoring</a> ]
[ <a href="OTHL-PRE-FarmTeamLines.php#Thunderbirds">Farm Team Lines</a> ]
[ <a href="OTHL-PRE-FarmTeamSchedule.php#Thunderbirds">Farm Team Schedule</a> ]
[ <a href="OTHL-PRE-FarmTeamStats.php#Thunderbirds">Farm Team Stats</a> ]
[ <a href="OTHL-PRE-FarmTeamStatsVS.php#Thunderbirds">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Thunderbirds');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Thunderbirds" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW35">Day</th><th class="STHSW35">Game</th><th class="STHSW200">Visitor Team</th><th class="STHSW35">Score</th><th class="STHSW200">Home Team</th><th class="STHSW35">Score</th><th class="STHSW35">ST</th><th class="STHSW35">OT</th><th class="STHSW35">SO</th><th class="STHSW35">RI</th><th class="STHSW200">Link</th></tr></thead>
<tr><td>1</td><td>8</td><td><a href="OTHL-PRE-ProTeamRoster.php#Panthers">Thunderbirds</a></td><td>2</td><td><a href="OTHL-PRE-ProTeamRoster.php#Flyers">Phantoms</a></td><td>1</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-8.html">Game Direct Link</a></td></tr>
<tr><td>2</td><td>21</td><td><a href="OTHL-PRE-ProTeamRoster.php#Flyers">Phantoms</a></td><td>4</td><td><a href="OTHL-PRE-ProTeamRoster.php#Panthers">Thunderbirds</a></td><td>3</td><td>L</td><td></td><td>*</td><td></td><td><a href="OTHL-PRE-Farm-21.html">Game Direct Link</a></td></tr>
<tr><td>4</td><td>43</td><td><a href="OTHL-PRE-ProTeamRoster.php#Panthers">Thunderbirds</a></td><td>8</td><td><a href="OTHL-PRE-ProTeamRoster.php#Rangers">Wolf Pack</a></td><td>2</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-43.html">Game Direct Link</a></td></tr>
<tr><td>5</td><td>57</td><td><a href="OTHL-PRE-ProTeamRoster.php#Panthers">Thunderbirds</a></td><td>8</td><td><a href="OTHL-PRE-ProTeamRoster.php#Capitals">Bears</a></td><td>1</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-57.html">Game Direct Link</a></td></tr>
<tr><td>6</td><td>61</td><td><a href="OTHL-PRE-ProTeamRoster.php#Flyers">Phantoms</a></td><td>3</td><td><a href="OTHL-PRE-ProTeamRoster.php#Panthers">Thunderbirds</a></td><td>0</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-61.html">Game Direct Link</a></td></tr>
<tr><td>7</td><td>81</td><td><a href="OTHL-PRE-ProTeamRoster.php#Islanders">Sound Tigers</a></td><td>0</td><td><a href="OTHL-PRE-ProTeamRoster.php#Panthers">Thunderbirds</a></td><td>7</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-81.html">Game Direct Link</a></td></tr>
<tr><td>8</td><td>102</td><td><a href="OTHL-PRE-ProTeamRoster.php#Panthers">Thunderbirds</a></td><td>6</td><td><a href="OTHL-PRE-ProTeamRoster.php#Sharks">Barracudas</a></td><td>4</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-102.html">Game Direct Link</a></td></tr>
<tr><td>9</td><td>111</td><td><a href="OTHL-PRE-ProTeamRoster.php#Panthers">Thunderbirds</a></td><td>8</td><td><a href="OTHL-PRE-ProTeamRoster.php#Penguins">Penguins</a></td><td>2</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-111.html">Game Direct Link</a></td></tr>
<tr><td>10</td><td>123</td><td><a href="OTHL-PRE-ProTeamRoster.php#Penguins">Penguins</a></td><td>0</td><td><a href="OTHL-PRE-ProTeamRoster.php#Panthers">Thunderbirds</a></td><td>8</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-123.html">Game Direct Link</a></td></tr>
<tr><td>12</td><td>144</td><td><a href="OTHL-PRE-ProTeamRoster.php#Panthers">Thunderbirds</a></td><td>7</td><td><a href="OTHL-PRE-ProTeamRoster.php#Islanders">Sound Tigers</a></td><td>1</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-144.html">Game Direct Link</a></td></tr>
<tr><td>13</td><td>153</td><td><a href="OTHL-PRE-ProTeamRoster.php#Panthers">Thunderbirds</a></td><td>2</td><td><a href="OTHL-PRE-ProTeamRoster.php#Bruins">Bruins</a></td><td>7</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-153.html">Game Direct Link</a></td></tr>
<tr><td>14</td><td>164</td><td><a href="OTHL-PRE-ProTeamRoster.php#Hurricanes">Checkers</a></td><td>4</td><td><a href="OTHL-PRE-ProTeamRoster.php#Panthers">Thunderbirds</a></td><td>7</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-164.html">Game Direct Link</a></td></tr>
<tr><td>16</td><td>188</td><td><a href="OTHL-PRE-ProTeamRoster.php#Bruins">Bruins</a></td><td>4</td><td><a href="OTHL-PRE-ProTeamRoster.php#Panthers">Thunderbirds</a></td><td>3</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-188.html">Game Direct Link</a></td></tr>
<tr><td>18</td><td>209</td><td><a href="OTHL-PRE-ProTeamRoster.php#Panthers">Thunderbirds</a></td><td>4</td><td><a href="OTHL-PRE-ProTeamRoster.php#Hurricanes">Checkers</a></td><td>5</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-209.html">Game Direct Link</a></td></tr>
<tr><td>19</td><td>223</td><td><a href="OTHL-PRE-ProTeamRoster.php#Capitals">Bears</a></td><td>2</td><td><a href="OTHL-PRE-ProTeamRoster.php#Panthers">Thunderbirds</a></td><td>3</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-223.html">Game Direct Link</a></td></tr>
<tr><td>22</td><td>255</td><td><a href="OTHL-PRE-ProTeamRoster.php#Rangers">Wolf Pack</a></td><td>2</td><td><a href="OTHL-PRE-ProTeamRoster.php#Panthers">Thunderbirds</a></td><td>4</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-255.html">Game Direct Link</a></td></tr>
</table></div>
<h1 class="TeamScheduleFarm_WBS"><a id="Penguins">Penguins</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=24">Penguins Page</a> ]
[ <a href="OTHL-PRE-ProTeamRoster.php#Penguins">Pro Team Roster</a> ]
[ <a href="OTHL-PRE-FarmTeamScoring.php#Penguins">Farm Team Scoring</a> ]
[ <a href="OTHL-PRE-FarmTeamLines.php#Penguins">Farm Team Lines</a> ]
[ <a href="OTHL-PRE-FarmTeamSchedule.php#Penguins">Farm Team Schedule</a> ]
[ <a href="OTHL-PRE-FarmTeamStats.php#Penguins">Farm Team Stats</a> ]
[ <a href="OTHL-PRE-FarmTeamStatsVS.php#Penguins">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Penguins');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Penguins" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW35">Day</th><th class="STHSW35">Game</th><th class="STHSW200">Visitor Team</th><th class="STHSW35">Score</th><th class="STHSW200">Home Team</th><th class="STHSW35">Score</th><th class="STHSW35">ST</th><th class="STHSW35">OT</th><th class="STHSW35">SO</th><th class="STHSW35">RI</th><th class="STHSW200">Link</th></tr></thead>
<tr><td>1</td><td>4</td><td><a href="OTHL-PRE-ProTeamRoster.php#Penguins">Penguins</a></td><td>5</td><td><a href="OTHL-PRE-ProTeamRoster.php#Islanders">Sound Tigers</a></td><td>2</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-4.html">Game Direct Link</a></td></tr>
<tr><td>2</td><td>20</td><td><a href="OTHL-PRE-ProTeamRoster.php#Islanders">Sound Tigers</a></td><td>5</td><td><a href="OTHL-PRE-ProTeamRoster.php#Penguins">Penguins</a></td><td>10</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-20.html">Game Direct Link</a></td></tr>
<tr><td>4</td><td>38</td><td><a href="OTHL-PRE-ProTeamRoster.php#Penguins">Penguins</a></td><td>1</td><td><a href="OTHL-PRE-ProTeamRoster.php#Bruins">Bruins</a></td><td>7</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-38.html">Game Direct Link</a></td></tr>
<tr><td>5</td><td>49</td><td><a href="OTHL-PRE-ProTeamRoster.php#Flyers">Phantoms</a></td><td>9</td><td><a href="OTHL-PRE-ProTeamRoster.php#Penguins">Penguins</a></td><td>0</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-49.html">Game Direct Link</a></td></tr>
<tr><td>6</td><td>67</td><td><a href="OTHL-PRE-ProTeamRoster.php#Penguins">Penguins</a></td><td>7</td><td><a href="OTHL-PRE-ProTeamRoster.php#Islanders">Sound Tigers</a></td><td>4</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-67.html">Game Direct Link</a></td></tr>
<tr><td>7</td><td>87</td><td><a href="OTHL-PRE-ProTeamRoster.php#Hurricanes">Checkers</a></td><td>9</td><td><a href="OTHL-PRE-ProTeamRoster.php#Penguins">Penguins</a></td><td>3</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-87.html">Game Direct Link</a></td></tr>
<tr><td>8</td><td>101</td><td><a href="OTHL-PRE-ProTeamRoster.php#Penguins">Penguins</a></td><td>3</td><td><a href="OTHL-PRE-ProTeamRoster.php#Hurricanes">Checkers</a></td><td>9</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-101.html">Game Direct Link</a></td></tr>
<tr><td>9</td><td>111</td><td><a href="OTHL-PRE-ProTeamRoster.php#Panthers">Thunderbirds</a></td><td>8</td><td><a href="OTHL-PRE-ProTeamRoster.php#Penguins">Penguins</a></td><td>2</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-111.html">Game Direct Link</a></td></tr>
<tr><td>10</td><td>123</td><td><a href="OTHL-PRE-ProTeamRoster.php#Penguins">Penguins</a></td><td>0</td><td><a href="OTHL-PRE-ProTeamRoster.php#Panthers">Thunderbirds</a></td><td>8</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-123.html">Game Direct Link</a></td></tr>
<tr><td>12</td><td>149</td><td><a href="OTHL-PRE-ProTeamRoster.php#Capitals">Bears</a></td><td>5</td><td><a href="OTHL-PRE-ProTeamRoster.php#Penguins">Penguins</a></td><td>7</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-149.html">Game Direct Link</a></td></tr>
<tr><td>13</td><td>159</td><td><a href="OTHL-PRE-ProTeamRoster.php#Penguins">Penguins</a></td><td>4</td><td><a href="OTHL-PRE-ProTeamRoster.php#Rangers">Wolf Pack</a></td><td>6</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-159.html">Game Direct Link</a></td></tr>
<tr><td>15</td><td>179</td><td><a href="OTHL-PRE-ProTeamRoster.php#BlueJackets">Monsters</a></td><td>8</td><td><a href="OTHL-PRE-ProTeamRoster.php#Penguins">Penguins</a></td><td>5</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-179.html">Game Direct Link</a></td></tr>
<tr><td>17</td><td>199</td><td><a href="OTHL-PRE-ProTeamRoster.php#Bruins">Bruins</a></td><td>12</td><td><a href="OTHL-PRE-ProTeamRoster.php#Penguins">Penguins</a></td><td>0</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-199.html">Game Direct Link</a></td></tr>
<tr><td>18</td><td>208</td><td><a href="OTHL-PRE-ProTeamRoster.php#Penguins">Penguins</a></td><td>3</td><td><a href="OTHL-PRE-ProTeamRoster.php#Flyers">Phantoms</a></td><td>5</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-208.html">Game Direct Link</a></td></tr>
<tr><td>20</td><td>233</td><td><a href="OTHL-PRE-ProTeamRoster.php#Rangers">Wolf Pack</a></td><td>5</td><td><a href="OTHL-PRE-ProTeamRoster.php#Penguins">Penguins</a></td><td>6</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-233.html">Game Direct Link</a></td></tr>
<tr><td>21</td><td>246</td><td><a href="OTHL-PRE-ProTeamRoster.php#Penguins">Penguins</a></td><td>5</td><td><a href="OTHL-PRE-ProTeamRoster.php#Capitals">Bears</a></td><td>4</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-246.html">Game Direct Link</a></td></tr>
</table></div>
<h1 class="TeamScheduleFarm_MIL"><a id="Admirals">Admirals</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=17">Predators Page</a> ]
[ <a href="OTHL-PRE-ProTeamRoster.php#Predators">Pro Team Roster</a> ]
[ <a href="OTHL-PRE-FarmTeamScoring.php#Admirals">Farm Team Scoring</a> ]
[ <a href="OTHL-PRE-FarmTeamLines.php#Admirals">Farm Team Lines</a> ]
[ <a href="OTHL-PRE-FarmTeamSchedule.php#Admirals">Farm Team Schedule</a> ]
[ <a href="OTHL-PRE-FarmTeamStats.php#Admirals">Farm Team Stats</a> ]
[ <a href="OTHL-PRE-FarmTeamStatsVS.php#Admirals">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Admirals');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Admirals" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW35">Day</th><th class="STHSW35">Game</th><th class="STHSW200">Visitor Team</th><th class="STHSW35">Score</th><th class="STHSW200">Home Team</th><th class="STHSW35">Score</th><th class="STHSW35">ST</th><th class="STHSW35">OT</th><th class="STHSW35">SO</th><th class="STHSW35">RI</th><th class="STHSW200">Link</th></tr></thead>
<tr><td>1</td><td>9</td><td><a href="OTHL-PRE-ProTeamRoster.php#Blues">Rampage </a></td><td>1</td><td><a href="OTHL-PRE-ProTeamRoster.php#Predators">Admirals</a></td><td>11</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-9.html">Game Direct Link</a></td></tr>
<tr><td>2</td><td>30</td><td><a href="OTHL-PRE-ProTeamRoster.php#Stars">Stars</a></td><td>3</td><td><a href="OTHL-PRE-ProTeamRoster.php#Predators">Admirals</a></td><td>5</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-30.html">Game Direct Link</a></td></tr>
<tr><td>4</td><td>37</td><td><a href="OTHL-PRE-ProTeamRoster.php#Predators">Admirals</a></td><td>4</td><td><a href="OTHL-PRE-ProTeamRoster.php#Jets">Moose</a></td><td>3</td><td>W</td><td></td><td>*</td><td></td><td><a href="OTHL-PRE-Farm-37.html">Game Direct Link</a></td></tr>
<tr><td>5</td><td>59</td><td><a href="OTHL-PRE-ProTeamRoster.php#Predators">Admirals</a></td><td>6</td><td><a href="OTHL-PRE-ProTeamRoster.php#Kraken">Mariners</a></td><td>4</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-59.html">Game Direct Link</a></td></tr>
<tr><td>6</td><td>60</td><td><a href="OTHL-PRE-ProTeamRoster.php#Predators">Admirals</a></td><td>4</td><td><a href="OTHL-PRE-ProTeamRoster.php#Sabres"> Americans</a></td><td>3</td><td>W</td><td>*</td><td></td><td></td><td><a href="OTHL-PRE-Farm-60.html">Game Direct Link</a></td></tr>
<tr><td>7</td><td>86</td><td><a href="OTHL-PRE-ProTeamRoster.php#GoldenKnights">Wolves</a></td><td>3</td><td><a href="OTHL-PRE-ProTeamRoster.php#Predators">Admirals</a></td><td>2</td><td>L</td><td></td><td>*</td><td></td><td><a href="OTHL-PRE-Farm-86.html">Game Direct Link</a></td></tr>
<tr><td>8</td><td>94</td><td><a href="OTHL-PRE-ProTeamRoster.php#Predators">Admirals</a></td><td>2</td><td><a href="OTHL-PRE-ProTeamRoster.php#GoldenKnights">Wolves</a></td><td>1</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-94.html">Game Direct Link</a></td></tr>
<tr><td>9</td><td>113</td><td><a href="OTHL-PRE-ProTeamRoster.php#Sabres"> Americans</a></td><td>3</td><td><a href="OTHL-PRE-ProTeamRoster.php#Predators">Admirals</a></td><td>4</td><td>W</td><td></td><td>*</td><td></td><td><a href="OTHL-PRE-Farm-113.html">Game Direct Link</a></td></tr>
<tr><td>11</td><td>136</td><td><a href="OTHL-PRE-ProTeamRoster.php#Predators">Admirals</a></td><td>0</td><td><a href="OTHL-PRE-ProTeamRoster.php#Blackhawks">IceHogs</a></td><td>5</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-136.html">Game Direct Link</a></td></tr>
<tr><td>12</td><td>142</td><td><a href="OTHL-PRE-ProTeamRoster.php#Predators">Admirals</a></td><td>4</td><td><a href="OTHL-PRE-ProTeamRoster.php#Blues">Rampage </a></td><td>1</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-142.html">Game Direct Link</a></td></tr>
<tr><td>13</td><td>156</td><td><a href="OTHL-PRE-ProTeamRoster.php#Jets">Moose</a></td><td>2</td><td><a href="OTHL-PRE-ProTeamRoster.php#Predators">Admirals</a></td><td>6</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-156.html">Game Direct Link</a></td></tr>
<tr><td>14</td><td>175</td><td><a href="OTHL-PRE-ProTeamRoster.php#Predators">Admirals</a></td><td>6</td><td><a href="OTHL-PRE-ProTeamRoster.php#Stars">Stars</a></td><td>2</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-175.html">Game Direct Link</a></td></tr>
<tr><td>16</td><td>186</td><td><a href="OTHL-PRE-ProTeamRoster.php#Wild">Wild</a></td><td>1</td><td><a href="OTHL-PRE-ProTeamRoster.php#Predators">Admirals</a></td><td>5</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-186.html">Game Direct Link</a></td></tr>
<tr><td>18</td><td>214</td><td><a href="OTHL-PRE-ProTeamRoster.php#Blackhawks">IceHogs</a></td><td>3</td><td><a href="OTHL-PRE-ProTeamRoster.php#Predators">Admirals</a></td><td>2</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-214.html">Game Direct Link</a></td></tr>
<tr><td>19</td><td>229</td><td><a href="OTHL-PRE-ProTeamRoster.php#Predators">Admirals</a></td><td>8</td><td><a href="OTHL-PRE-ProTeamRoster.php#Wild">Wild</a></td><td>2</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-229.html">Game Direct Link</a></td></tr>
<tr><td>21</td><td>243</td><td><a href="OTHL-PRE-ProTeamRoster.php#Kraken">Mariners</a></td><td>2</td><td><a href="OTHL-PRE-ProTeamRoster.php#Predators">Admirals</a></td><td>3</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-243.html">Game Direct Link</a></td></tr>
</table></div>
<h1 class="TeamScheduleFarm_HFD"><a id="WolfPack">Wolf Pack</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=20">Rangers Page</a> ]
[ <a href="OTHL-PRE-ProTeamRoster.php#Rangers">Pro Team Roster</a> ]
[ <a href="OTHL-PRE-FarmTeamScoring.php#WolfPack">Farm Team Scoring</a> ]
[ <a href="OTHL-PRE-FarmTeamLines.php#WolfPack">Farm Team Lines</a> ]
[ <a href="OTHL-PRE-FarmTeamSchedule.php#WolfPack">Farm Team Schedule</a> ]
[ <a href="OTHL-PRE-FarmTeamStats.php#WolfPack">Farm Team Stats</a> ]
[ <a href="OTHL-PRE-FarmTeamStatsVS.php#WolfPack">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_WolfPack');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_WolfPack" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW35">Day</th><th class="STHSW35">Game</th><th class="STHSW200">Visitor Team</th><th class="STHSW35">Score</th><th class="STHSW200">Home Team</th><th class="STHSW35">Score</th><th class="STHSW35">ST</th><th class="STHSW35">OT</th><th class="STHSW35">SO</th><th class="STHSW35">RI</th><th class="STHSW200">Link</th></tr></thead>
<tr><td>1</td><td>5</td><td><a href="OTHL-PRE-ProTeamRoster.php#Rangers">Wolf Pack</a></td><td>5</td><td><a href="OTHL-PRE-ProTeamRoster.php#Capitals">Bears</a></td><td>3</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-5.html">Game Direct Link</a></td></tr>
<tr><td>2</td><td>28</td><td><a href="OTHL-PRE-ProTeamRoster.php#Capitals">Bears</a></td><td>7</td><td><a href="OTHL-PRE-ProTeamRoster.php#Rangers">Wolf Pack</a></td><td>5</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-28.html">Game Direct Link</a></td></tr>
<tr><td>4</td><td>43</td><td><a href="OTHL-PRE-ProTeamRoster.php#Panthers">Thunderbirds</a></td><td>8</td><td><a href="OTHL-PRE-ProTeamRoster.php#Rangers">Wolf Pack</a></td><td>2</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-43.html">Game Direct Link</a></td></tr>
<tr><td>6</td><td>69</td><td><a href="OTHL-PRE-ProTeamRoster.php#Rangers">Wolf Pack</a></td><td>4</td><td><a href="OTHL-PRE-ProTeamRoster.php#Hurricanes">Checkers</a></td><td>13</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-69.html">Game Direct Link</a></td></tr>
<tr><td>7</td><td>78</td><td><a href="OTHL-PRE-ProTeamRoster.php#Bruins">Bruins</a></td><td>9</td><td><a href="OTHL-PRE-ProTeamRoster.php#Rangers">Wolf Pack</a></td><td>1</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-78.html">Game Direct Link</a></td></tr>
<tr><td>8</td><td>97</td><td><a href="OTHL-PRE-ProTeamRoster.php#Canucks">Canucks</a></td><td>5</td><td><a href="OTHL-PRE-ProTeamRoster.php#Rangers">Wolf Pack</a></td><td>1</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-97.html">Game Direct Link</a></td></tr>
<tr><td>10</td><td>122</td><td><a href="OTHL-PRE-ProTeamRoster.php#Rangers">Wolf Pack</a></td><td>1</td><td><a href="OTHL-PRE-ProTeamRoster.php#Flyers">Phantoms</a></td><td>11</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-122.html">Game Direct Link</a></td></tr>
<tr><td>11</td><td>135</td><td><a href="OTHL-PRE-ProTeamRoster.php#Flyers">Phantoms</a></td><td>4</td><td><a href="OTHL-PRE-ProTeamRoster.php#Rangers">Wolf Pack</a></td><td>1</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-135.html">Game Direct Link</a></td></tr>
<tr><td>13</td><td>159</td><td><a href="OTHL-PRE-ProTeamRoster.php#Penguins">Penguins</a></td><td>4</td><td><a href="OTHL-PRE-ProTeamRoster.php#Rangers">Wolf Pack</a></td><td>6</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-159.html">Game Direct Link</a></td></tr>
<tr><td>15</td><td>183</td><td><a href="OTHL-PRE-ProTeamRoster.php#Rangers">Wolf Pack</a></td><td>3</td><td><a href="OTHL-PRE-ProTeamRoster.php#Bruins">Bruins</a></td><td>7</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-183.html">Game Direct Link</a></td></tr>
<tr><td>16</td><td>193</td><td><a href="OTHL-PRE-ProTeamRoster.php#Hurricanes">Checkers</a></td><td>7</td><td><a href="OTHL-PRE-ProTeamRoster.php#Rangers">Wolf Pack</a></td><td>6</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-193.html">Game Direct Link</a></td></tr>
<tr><td>17</td><td>201</td><td><a href="OTHL-PRE-ProTeamRoster.php#Rangers">Wolf Pack</a></td><td>5</td><td><a href="OTHL-PRE-ProTeamRoster.php#Capitals">Bears</a></td><td>6</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-201.html">Game Direct Link</a></td></tr>
<tr><td>19</td><td>225</td><td><a href="OTHL-PRE-ProTeamRoster.php#Islanders">Sound Tigers</a></td><td>8</td><td><a href="OTHL-PRE-ProTeamRoster.php#Rangers">Wolf Pack</a></td><td>3</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-225.html">Game Direct Link</a></td></tr>
<tr><td>20</td><td>233</td><td><a href="OTHL-PRE-ProTeamRoster.php#Rangers">Wolf Pack</a></td><td>5</td><td><a href="OTHL-PRE-ProTeamRoster.php#Penguins">Penguins</a></td><td>6</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-233.html">Game Direct Link</a></td></tr>
<tr><td>21</td><td>241</td><td><a href="OTHL-PRE-ProTeamRoster.php#Rangers">Wolf Pack</a></td><td>2</td><td><a href="OTHL-PRE-ProTeamRoster.php#Islanders">Sound Tigers</a></td><td>6</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-241.html">Game Direct Link</a></td></tr>
<tr><td>22</td><td>255</td><td><a href="OTHL-PRE-ProTeamRoster.php#Rangers">Wolf Pack</a></td><td>2</td><td><a href="OTHL-PRE-ProTeamRoster.php#Panthers">Thunderbirds</a></td><td>4</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-255.html">Game Direct Link</a></td></tr>
</table></div>
<h1 class="TeamScheduleFarm_GRP"><a id="Griffins">Griffins</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=11">Red Wings Page</a> ]
[ <a href="OTHL-PRE-ProTeamRoster.php#RedWings">Pro Team Roster</a> ]
[ <a href="OTHL-PRE-FarmTeamScoring.php#Griffins">Farm Team Scoring</a> ]
[ <a href="OTHL-PRE-FarmTeamLines.php#Griffins">Farm Team Lines</a> ]
[ <a href="OTHL-PRE-FarmTeamSchedule.php#Griffins">Farm Team Schedule</a> ]
[ <a href="OTHL-PRE-FarmTeamStats.php#Griffins">Farm Team Stats</a> ]
[ <a href="OTHL-PRE-FarmTeamStatsVS.php#Griffins">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Griffins');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Griffins" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW35">Day</th><th class="STHSW35">Game</th><th class="STHSW200">Visitor Team</th><th class="STHSW35">Score</th><th class="STHSW200">Home Team</th><th class="STHSW35">Score</th><th class="STHSW35">ST</th><th class="STHSW35">OT</th><th class="STHSW35">SO</th><th class="STHSW35">RI</th><th class="STHSW200">Link</th></tr></thead>
<tr><td>1</td><td>15</td><td><a href="OTHL-PRE-ProTeamRoster.php#Senators">Senators</a></td><td>4</td><td><a href="OTHL-PRE-ProTeamRoster.php#RedWings">Griffins</a></td><td>6</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-15.html">Game Direct Link</a></td></tr>
<tr><td>2</td><td>29</td><td><a href="OTHL-PRE-ProTeamRoster.php#BlueJackets">Monsters</a></td><td>4</td><td><a href="OTHL-PRE-ProTeamRoster.php#RedWings">Griffins</a></td><td>1</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-29.html">Game Direct Link</a></td></tr>
<tr><td>4</td><td>47</td><td><a href="OTHL-PRE-ProTeamRoster.php#RedWings">Griffins</a></td><td>5</td><td><a href="OTHL-PRE-ProTeamRoster.php#Devils">Comets</a></td><td>4</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-47.html">Game Direct Link</a></td></tr>
<tr><td>5</td><td>58</td><td><a href="OTHL-PRE-ProTeamRoster.php#RedWings">Griffins</a></td><td>2</td><td><a href="OTHL-PRE-ProTeamRoster.php#Canadiens">Rocket</a></td><td>3</td><td>L</td><td>*</td><td></td><td></td><td><a href="OTHL-PRE-Farm-58.html">Game Direct Link</a></td></tr>
<tr><td>6</td><td>66</td><td><a href="OTHL-PRE-ProTeamRoster.php#RedWings">Griffins</a></td><td>3</td><td><a href="OTHL-PRE-ProTeamRoster.php#Bruins">Bruins</a></td><td>5</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-66.html">Game Direct Link</a></td></tr>
<tr><td>7</td><td>82</td><td><a href="OTHL-PRE-ProTeamRoster.php#RedWings">Griffins</a></td><td>2</td><td><a href="OTHL-PRE-ProTeamRoster.php#Lightning">Crunch</a></td><td>3</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-82.html">Game Direct Link</a></td></tr>
<tr><td>8</td><td>93</td><td><a href="OTHL-PRE-ProTeamRoster.php#MapleLeafs">Marlies</a></td><td>7</td><td><a href="OTHL-PRE-ProTeamRoster.php#RedWings">Griffins</a></td><td>2</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-93.html">Game Direct Link</a></td></tr>
<tr><td>9</td><td>110</td><td><a href="OTHL-PRE-ProTeamRoster.php#RedWings">Griffins</a></td><td>1</td><td><a href="OTHL-PRE-ProTeamRoster.php#MapleLeafs">Marlies</a></td><td>7</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-110.html">Game Direct Link</a></td></tr>
<tr><td>10</td><td>127</td><td><a href="OTHL-PRE-ProTeamRoster.php#Ducks">Gulls</a></td><td>5</td><td><a href="OTHL-PRE-ProTeamRoster.php#RedWings">Griffins</a></td><td>2</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-127.html">Game Direct Link</a></td></tr>
<tr><td>11</td><td>137</td><td><a href="OTHL-PRE-ProTeamRoster.php#RedWings">Griffins</a></td><td>3</td><td><a href="OTHL-PRE-ProTeamRoster.php#Canucks">Canucks</a></td><td>5</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-137.html">Game Direct Link</a></td></tr>
<tr><td>13</td><td>155</td><td><a href="OTHL-PRE-ProTeamRoster.php#Lightning">Crunch</a></td><td>3</td><td><a href="OTHL-PRE-ProTeamRoster.php#RedWings">Griffins</a></td><td>5</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-155.html">Game Direct Link</a></td></tr>
<tr><td>14</td><td>171</td><td><a href="OTHL-PRE-ProTeamRoster.php#RedWings">Griffins</a></td><td>4</td><td><a href="OTHL-PRE-ProTeamRoster.php#BlueJackets">Monsters</a></td><td>5</td><td>L</td><td></td><td>*</td><td></td><td><a href="OTHL-PRE-Farm-171.html">Game Direct Link</a></td></tr>
<tr><td>16</td><td>189</td><td><a href="OTHL-PRE-ProTeamRoster.php#Devils">Comets</a></td><td>4</td><td><a href="OTHL-PRE-ProTeamRoster.php#RedWings">Griffins</a></td><td>3</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-189.html">Game Direct Link</a></td></tr>
<tr><td>17</td><td>203</td><td><a href="OTHL-PRE-ProTeamRoster.php#RedWings">Griffins</a></td><td>7</td><td><a href="OTHL-PRE-ProTeamRoster.php#Senators">Senators</a></td><td>3</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-203.html">Game Direct Link</a></td></tr>
<tr><td>19</td><td>222</td><td><a href="OTHL-PRE-ProTeamRoster.php#Canucks">Canucks</a></td><td>6</td><td><a href="OTHL-PRE-ProTeamRoster.php#RedWings">Griffins</a></td><td>0</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-222.html">Game Direct Link</a></td></tr>
<tr><td>21</td><td>239</td><td><a href="OTHL-PRE-ProTeamRoster.php#Canadiens">Rocket</a></td><td>6</td><td><a href="OTHL-PRE-ProTeamRoster.php#RedWings">Griffins</a></td><td>2</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-239.html">Game Direct Link</a></td></tr>
</table></div>
<h1 class="TeamScheduleFarm_ROC"><a id="Americans"> Americans</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=4">Sabres Page</a> ]
[ <a href="OTHL-PRE-ProTeamRoster.php#Sabres">Pro Team Roster</a> ]
[ <a href="OTHL-PRE-FarmTeamScoring.php#Americans">Farm Team Scoring</a> ]
[ <a href="OTHL-PRE-FarmTeamLines.php#Americans">Farm Team Lines</a> ]
[ <a href="OTHL-PRE-FarmTeamSchedule.php#Americans">Farm Team Schedule</a> ]
[ <a href="OTHL-PRE-FarmTeamStats.php#Americans">Farm Team Stats</a> ]
[ <a href="OTHL-PRE-FarmTeamStatsVS.php#Americans">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Americans');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Americans" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW35">Day</th><th class="STHSW35">Game</th><th class="STHSW200">Visitor Team</th><th class="STHSW35">Score</th><th class="STHSW200">Home Team</th><th class="STHSW35">Score</th><th class="STHSW35">ST</th><th class="STHSW35">OT</th><th class="STHSW35">SO</th><th class="STHSW35">RI</th><th class="STHSW200">Link</th></tr></thead>
<tr><td>1</td><td>14</td><td><a href="OTHL-PRE-ProTeamRoster.php#Sabres"> Americans</a></td><td>7</td><td><a href="OTHL-PRE-ProTeamRoster.php#Stars">Stars</a></td><td>2</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-14.html">Game Direct Link</a></td></tr>
<tr><td>2</td><td>27</td><td><a href="OTHL-PRE-ProTeamRoster.php#Sabres"> Americans</a></td><td>7</td><td><a href="OTHL-PRE-ProTeamRoster.php#Blues">Rampage </a></td><td>1</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-27.html">Game Direct Link</a></td></tr>
<tr><td>3</td><td>33</td><td><a href="OTHL-PRE-ProTeamRoster.php#Kraken">Mariners</a></td><td>1</td><td><a href="OTHL-PRE-ProTeamRoster.php#Sabres"> Americans</a></td><td>5</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-33.html">Game Direct Link</a></td></tr>
<tr><td>4</td><td>48</td><td><a href="OTHL-PRE-ProTeamRoster.php#Sabres"> Americans</a></td><td>3</td><td><a href="OTHL-PRE-ProTeamRoster.php#Blackhawks">IceHogs</a></td><td>1</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-48.html">Game Direct Link</a></td></tr>
<tr><td>6</td><td>60</td><td><a href="OTHL-PRE-ProTeamRoster.php#Predators">Admirals</a></td><td>4</td><td><a href="OTHL-PRE-ProTeamRoster.php#Sabres"> Americans</a></td><td>3</td><td>L</td><td>*</td><td></td><td></td><td><a href="OTHL-PRE-Farm-60.html">Game Direct Link</a></td></tr>
<tr><td>7</td><td>83</td><td><a href="OTHL-PRE-ProTeamRoster.php#Sabres"> Americans</a></td><td>0</td><td><a href="OTHL-PRE-ProTeamRoster.php#Jets">Moose</a></td><td>3</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-83.html">Game Direct Link</a></td></tr>
<tr><td>8</td><td>90</td><td><a href="OTHL-PRE-ProTeamRoster.php#Blackhawks">IceHogs</a></td><td>1</td><td><a href="OTHL-PRE-ProTeamRoster.php#Sabres"> Americans</a></td><td>3</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-90.html">Game Direct Link</a></td></tr>
<tr><td>9</td><td>113</td><td><a href="OTHL-PRE-ProTeamRoster.php#Sabres"> Americans</a></td><td>3</td><td><a href="OTHL-PRE-ProTeamRoster.php#Predators">Admirals</a></td><td>4</td><td>L</td><td></td><td>*</td><td></td><td><a href="OTHL-PRE-Farm-113.html">Game Direct Link</a></td></tr>
<tr><td>10</td><td>124</td><td><a href="OTHL-PRE-ProTeamRoster.php#Wild">Wild</a></td><td>0</td><td><a href="OTHL-PRE-ProTeamRoster.php#Sabres"> Americans</a></td><td>4</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-124.html">Game Direct Link</a></td></tr>
<tr><td>11</td><td>139</td><td><a href="OTHL-PRE-ProTeamRoster.php#Sabres"> Americans</a></td><td>6</td><td><a href="OTHL-PRE-ProTeamRoster.php#Wild">Wild</a></td><td>0</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-139.html">Game Direct Link</a></td></tr>
<tr><td>13</td><td>157</td><td><a href="OTHL-PRE-ProTeamRoster.php#Blues">Rampage </a></td><td>0</td><td><a href="OTHL-PRE-ProTeamRoster.php#Sabres"> Americans</a></td><td>9</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-157.html">Game Direct Link</a></td></tr>
<tr><td>14</td><td>172</td><td><a href="OTHL-PRE-ProTeamRoster.php#Sabres"> Americans</a></td><td>3</td><td><a href="OTHL-PRE-ProTeamRoster.php#GoldenKnights">Wolves</a></td><td>0</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-172.html">Game Direct Link</a></td></tr>
<tr><td>16</td><td>191</td><td><a href="OTHL-PRE-ProTeamRoster.php#GoldenKnights">Wolves</a></td><td>0</td><td><a href="OTHL-PRE-ProTeamRoster.php#Sabres"> Americans</a></td><td>3</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-191.html">Game Direct Link</a></td></tr>
<tr><td>17</td><td>206</td><td><a href="OTHL-PRE-ProTeamRoster.php#Sabres"> Americans</a></td><td>5</td><td><a href="OTHL-PRE-ProTeamRoster.php#Kraken">Mariners</a></td><td>4</td><td>W</td><td></td><td>*</td><td></td><td><a href="OTHL-PRE-Farm-206.html">Game Direct Link</a></td></tr>
<tr><td>19</td><td>221</td><td><a href="OTHL-PRE-ProTeamRoster.php#Jets">Moose</a></td><td>2</td><td><a href="OTHL-PRE-ProTeamRoster.php#Sabres"> Americans</a></td><td>4</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-221.html">Game Direct Link</a></td></tr>
<tr><td>22</td><td>250</td><td><a href="OTHL-PRE-ProTeamRoster.php#Stars">Stars</a></td><td>2</td><td><a href="OTHL-PRE-ProTeamRoster.php#Sabres"> Americans</a></td><td>11</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-250.html">Game Direct Link</a></td></tr>
</table></div>
<h1 class="TeamScheduleFarm_BEL"><a id="Senators">Senators</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=21">Senators Page</a> ]
[ <a href="OTHL-PRE-ProTeamRoster.php#Senators">Pro Team Roster</a> ]
[ <a href="OTHL-PRE-FarmTeamScoring.php#Senators">Farm Team Scoring</a> ]
[ <a href="OTHL-PRE-FarmTeamLines.php#Senators">Farm Team Lines</a> ]
[ <a href="OTHL-PRE-FarmTeamSchedule.php#Senators">Farm Team Schedule</a> ]
[ <a href="OTHL-PRE-FarmTeamStats.php#Senators">Farm Team Stats</a> ]
[ <a href="OTHL-PRE-FarmTeamStatsVS.php#Senators">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Senators');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Senators" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW35">Day</th><th class="STHSW35">Game</th><th class="STHSW200">Visitor Team</th><th class="STHSW35">Score</th><th class="STHSW200">Home Team</th><th class="STHSW35">Score</th><th class="STHSW35">ST</th><th class="STHSW35">OT</th><th class="STHSW35">SO</th><th class="STHSW35">RI</th><th class="STHSW200">Link</th></tr></thead>
<tr><td>1</td><td>15</td><td><a href="OTHL-PRE-ProTeamRoster.php#Senators">Senators</a></td><td>4</td><td><a href="OTHL-PRE-ProTeamRoster.php#RedWings">Griffins</a></td><td>6</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-15.html">Game Direct Link</a></td></tr>
<tr><td>2</td><td>18</td><td><a href="OTHL-PRE-ProTeamRoster.php#Senators">Senators</a></td><td>2</td><td><a href="OTHL-PRE-ProTeamRoster.php#Canucks">Canucks</a></td><td>12</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-18.html">Game Direct Link</a></td></tr>
<tr><td>3</td><td>31</td><td><a href="OTHL-PRE-ProTeamRoster.php#Lightning">Crunch</a></td><td>3</td><td><a href="OTHL-PRE-ProTeamRoster.php#Senators">Senators</a></td><td>6</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-31.html">Game Direct Link</a></td></tr>
<tr><td>5</td><td>53</td><td><a href="OTHL-PRE-ProTeamRoster.php#Devils">Comets</a></td><td>7</td><td><a href="OTHL-PRE-ProTeamRoster.php#Senators">Senators</a></td><td>5</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-53.html">Game Direct Link</a></td></tr>
<tr><td>7</td><td>76</td><td><a href="OTHL-PRE-ProTeamRoster.php#Canadiens">Rocket</a></td><td>8</td><td><a href="OTHL-PRE-ProTeamRoster.php#Senators">Senators</a></td><td>1</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-76.html">Game Direct Link</a></td></tr>
<tr><td>8</td><td>91</td><td><a href="OTHL-PRE-ProTeamRoster.php#Senators">Senators</a></td><td>0</td><td><a href="OTHL-PRE-ProTeamRoster.php#Canadiens">Rocket</a></td><td>7</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-91.html">Game Direct Link</a></td></tr>
<tr><td>9</td><td>107</td><td><a href="OTHL-PRE-ProTeamRoster.php#Capitals">Bears</a></td><td>2</td><td><a href="OTHL-PRE-ProTeamRoster.php#Senators">Senators</a></td><td>9</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-107.html">Game Direct Link</a></td></tr>
<tr><td>10</td><td>126</td><td><a href="OTHL-PRE-ProTeamRoster.php#Senators">Senators</a></td><td>6</td><td><a href="OTHL-PRE-ProTeamRoster.php#Devils">Comets</a></td><td>5</td><td>W</td><td>*</td><td></td><td></td><td><a href="OTHL-PRE-Farm-126.html">Game Direct Link</a></td></tr>
<tr><td>11</td><td>132</td><td><a href="OTHL-PRE-ProTeamRoster.php#Senators">Senators</a></td><td>3</td><td><a href="OTHL-PRE-ProTeamRoster.php#BlueJackets">Monsters</a></td><td>9</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-132.html">Game Direct Link</a></td></tr>
<tr><td>12</td><td>150</td><td><a href="OTHL-PRE-ProTeamRoster.php#Canucks">Canucks</a></td><td>6</td><td><a href="OTHL-PRE-ProTeamRoster.php#Senators">Senators</a></td><td>0</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-150.html">Game Direct Link</a></td></tr>
<tr><td>14</td><td>174</td><td><a href="OTHL-PRE-ProTeamRoster.php#MapleLeafs">Marlies</a></td><td>7</td><td><a href="OTHL-PRE-ProTeamRoster.php#Senators">Senators</a></td><td>0</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-174.html">Game Direct Link</a></td></tr>
<tr><td>16</td><td>195</td><td><a href="OTHL-PRE-ProTeamRoster.php#Senators">Senators</a></td><td>1</td><td><a href="OTHL-PRE-ProTeamRoster.php#MapleLeafs">Marlies</a></td><td>8</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-195.html">Game Direct Link</a></td></tr>
<tr><td>17</td><td>203</td><td><a href="OTHL-PRE-ProTeamRoster.php#RedWings">Griffins</a></td><td>7</td><td><a href="OTHL-PRE-ProTeamRoster.php#Senators">Senators</a></td><td>3</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-203.html">Game Direct Link</a></td></tr>
<tr><td>18</td><td>219</td><td><a href="OTHL-PRE-ProTeamRoster.php#Senators">Senators</a></td><td>7</td><td><a href="OTHL-PRE-ProTeamRoster.php#Ducks">Gulls</a></td><td>5</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-219.html">Game Direct Link</a></td></tr>
<tr><td>20</td><td>234</td><td><a href="OTHL-PRE-ProTeamRoster.php#Senators">Senators</a></td><td>6</td><td><a href="OTHL-PRE-ProTeamRoster.php#Lightning">Crunch</a></td><td>4</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-234.html">Game Direct Link</a></td></tr>
<tr><td>22</td><td>249</td><td><a href="OTHL-PRE-ProTeamRoster.php#BlueJackets">Monsters</a></td><td>6</td><td><a href="OTHL-PRE-ProTeamRoster.php#Senators">Senators</a></td><td>2</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-249.html">Game Direct Link</a></td></tr>
</table></div>
<h1 class="TeamScheduleFarm_SJB"><a id="Barracudas">Barracudas</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=26">Sharks Page</a> ]
[ <a href="OTHL-PRE-ProTeamRoster.php#Sharks">Pro Team Roster</a> ]
[ <a href="OTHL-PRE-FarmTeamScoring.php#Barracudas">Farm Team Scoring</a> ]
[ <a href="OTHL-PRE-FarmTeamLines.php#Barracudas">Farm Team Lines</a> ]
[ <a href="OTHL-PRE-FarmTeamSchedule.php#Barracudas">Farm Team Schedule</a> ]
[ <a href="OTHL-PRE-FarmTeamStats.php#Barracudas">Farm Team Stats</a> ]
[ <a href="OTHL-PRE-FarmTeamStatsVS.php#Barracudas">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Barracudas');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Barracudas" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW35">Day</th><th class="STHSW35">Game</th><th class="STHSW200">Visitor Team</th><th class="STHSW35">Score</th><th class="STHSW200">Home Team</th><th class="STHSW35">Score</th><th class="STHSW35">ST</th><th class="STHSW35">OT</th><th class="STHSW35">SO</th><th class="STHSW35">RI</th><th class="STHSW200">Link</th></tr></thead>
<tr><td>2</td><td>17</td><td><a href="OTHL-PRE-ProTeamRoster.php#Flames">Heat</a></td><td>11</td><td><a href="OTHL-PRE-ProTeamRoster.php#Sharks">Barracudas</a></td><td>1</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-17.html">Game Direct Link</a></td></tr>
<tr><td>3</td><td>36</td><td><a href="OTHL-PRE-ProTeamRoster.php#Ducks">Gulls</a></td><td>3</td><td><a href="OTHL-PRE-ProTeamRoster.php#Sharks">Barracudas</a></td><td>4</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-36.html">Game Direct Link</a></td></tr>
<tr><td>4</td><td>39</td><td><a href="OTHL-PRE-ProTeamRoster.php#Sharks">Barracudas</a></td><td>5</td><td><a href="OTHL-PRE-ProTeamRoster.php#Avalanche">Eagles</a></td><td>4</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-39.html">Game Direct Link</a></td></tr>
<tr><td>6</td><td>68</td><td><a href="OTHL-PRE-ProTeamRoster.php#Sharks">Barracudas</a></td><td>2</td><td><a href="OTHL-PRE-ProTeamRoster.php#Oilers">Condors</a></td><td>8</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-68.html">Game Direct Link</a></td></tr>
<tr><td>7</td><td>80</td><td><a href="OTHL-PRE-ProTeamRoster.php#Flames">Heat</a></td><td>9</td><td><a href="OTHL-PRE-ProTeamRoster.php#Sharks">Barracudas</a></td><td>2</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-80.html">Game Direct Link</a></td></tr>
<tr><td>8</td><td>102</td><td><a href="OTHL-PRE-ProTeamRoster.php#Panthers">Thunderbirds</a></td><td>6</td><td><a href="OTHL-PRE-ProTeamRoster.php#Sharks">Barracudas</a></td><td>4</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-102.html">Game Direct Link</a></td></tr>
<tr><td>9</td><td>112</td><td><a href="OTHL-PRE-ProTeamRoster.php#Sharks">Barracudas</a></td><td>4</td><td><a href="OTHL-PRE-ProTeamRoster.php#Ducks">Gulls</a></td><td>1</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-112.html">Game Direct Link</a></td></tr>
<tr><td>10</td><td>130</td><td><a href="OTHL-PRE-ProTeamRoster.php#Kings">Reign</a></td><td>5</td><td><a href="OTHL-PRE-ProTeamRoster.php#Sharks">Barracudas</a></td><td>1</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-130.html">Game Direct Link</a></td></tr>
<tr><td>12</td><td>151</td><td><a href="OTHL-PRE-ProTeamRoster.php#Sharks">Barracudas</a></td><td>2</td><td><a href="OTHL-PRE-ProTeamRoster.php#Flames">Heat</a></td><td>5</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-151.html">Game Direct Link</a></td></tr>
<tr><td>14</td><td>167</td><td><a href="OTHL-PRE-ProTeamRoster.php#Avalanche">Eagles</a></td><td>3</td><td><a href="OTHL-PRE-ProTeamRoster.php#Sharks">Barracudas</a></td><td>5</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-167.html">Game Direct Link</a></td></tr>
<tr><td>16</td><td>194</td><td><a href="OTHL-PRE-ProTeamRoster.php#Coyotes">Roadrunners</a></td><td>4</td><td><a href="OTHL-PRE-ProTeamRoster.php#Sharks">Barracudas</a></td><td>5</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-194.html">Game Direct Link</a></td></tr>
<tr><td>17</td><td>200</td><td><a href="OTHL-PRE-ProTeamRoster.php#Sharks">Barracudas</a></td><td>5</td><td><a href="OTHL-PRE-ProTeamRoster.php#Coyotes">Roadrunners</a></td><td>3</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-200.html">Game Direct Link</a></td></tr>
<tr><td>19</td><td>220</td><td><a href="OTHL-PRE-ProTeamRoster.php#Sharks">Barracudas</a></td><td>4</td><td><a href="OTHL-PRE-ProTeamRoster.php#Avalanche">Eagles</a></td><td>6</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-220.html">Game Direct Link</a></td></tr>
<tr><td>20</td><td>230</td><td><a href="OTHL-PRE-ProTeamRoster.php#Oilers">Condors</a></td><td>4</td><td><a href="OTHL-PRE-ProTeamRoster.php#Sharks">Barracudas</a></td><td>2</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-230.html">Game Direct Link</a></td></tr>
<tr><td>21</td><td>238</td><td><a href="OTHL-PRE-ProTeamRoster.php#Sharks">Barracudas</a></td><td>3</td><td><a href="OTHL-PRE-ProTeamRoster.php#Coyotes">Roadrunners</a></td><td>8</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-238.html">Game Direct Link</a></td></tr>
<tr><td>22</td><td>247</td><td><a href="OTHL-PRE-ProTeamRoster.php#Sharks">Barracudas</a></td><td>0</td><td><a href="OTHL-PRE-ProTeamRoster.php#Kings">Reign</a></td><td>8</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-247.html">Game Direct Link</a></td></tr>
</table></div>
<h1 class="TeamScheduleFarm_TEX"><a id="Stars">Stars</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=10">Stars Page</a> ]
[ <a href="OTHL-PRE-ProTeamRoster.php#Stars">Pro Team Roster</a> ]
[ <a href="OTHL-PRE-FarmTeamScoring.php#Stars">Farm Team Scoring</a> ]
[ <a href="OTHL-PRE-FarmTeamLines.php#Stars">Farm Team Lines</a> ]
[ <a href="OTHL-PRE-FarmTeamSchedule.php#Stars">Farm Team Schedule</a> ]
[ <a href="OTHL-PRE-FarmTeamStats.php#Stars">Farm Team Stats</a> ]
[ <a href="OTHL-PRE-FarmTeamStatsVS.php#Stars">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Stars');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Stars" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW35">Day</th><th class="STHSW35">Game</th><th class="STHSW200">Visitor Team</th><th class="STHSW35">Score</th><th class="STHSW200">Home Team</th><th class="STHSW35">Score</th><th class="STHSW35">ST</th><th class="STHSW35">OT</th><th class="STHSW35">SO</th><th class="STHSW35">RI</th><th class="STHSW200">Link</th></tr></thead>
<tr><td>1</td><td>14</td><td><a href="OTHL-PRE-ProTeamRoster.php#Sabres"> Americans</a></td><td>7</td><td><a href="OTHL-PRE-ProTeamRoster.php#Stars">Stars</a></td><td>2</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-14.html">Game Direct Link</a></td></tr>
<tr><td>2</td><td>30</td><td><a href="OTHL-PRE-ProTeamRoster.php#Stars">Stars</a></td><td>3</td><td><a href="OTHL-PRE-ProTeamRoster.php#Predators">Admirals</a></td><td>5</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-30.html">Game Direct Link</a></td></tr>
<tr><td>4</td><td>42</td><td><a href="OTHL-PRE-ProTeamRoster.php#Stars">Stars</a></td><td>8</td><td><a href="OTHL-PRE-ProTeamRoster.php#Blues">Rampage </a></td><td>3</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-42.html">Game Direct Link</a></td></tr>
<tr><td>5</td><td>52</td><td><a href="OTHL-PRE-ProTeamRoster.php#Jets">Moose</a></td><td>11</td><td><a href="OTHL-PRE-ProTeamRoster.php#Stars">Stars</a></td><td>0</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-52.html">Game Direct Link</a></td></tr>
<tr><td>6</td><td>72</td><td><a href="OTHL-PRE-ProTeamRoster.php#Wild">Wild</a></td><td>5</td><td><a href="OTHL-PRE-ProTeamRoster.php#Stars">Stars</a></td><td>6</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-72.html">Game Direct Link</a></td></tr>
<tr><td>7</td><td>77</td><td><a href="OTHL-PRE-ProTeamRoster.php#Stars">Stars</a></td><td>4</td><td><a href="OTHL-PRE-ProTeamRoster.php#Kraken">Mariners</a></td><td>9</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-77.html">Game Direct Link</a></td></tr>
<tr><td>9</td><td>105</td><td><a href="OTHL-PRE-ProTeamRoster.php#Stars">Stars</a></td><td>3</td><td><a href="OTHL-PRE-ProTeamRoster.php#Blackhawks">IceHogs</a></td><td>6</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-105.html">Game Direct Link</a></td></tr>
<tr><td>10</td><td>119</td><td><a href="OTHL-PRE-ProTeamRoster.php#Blackhawks">IceHogs</a></td><td>10</td><td><a href="OTHL-PRE-ProTeamRoster.php#Stars">Stars</a></td><td>4</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-119.html">Game Direct Link</a></td></tr>
<tr><td>11</td><td>138</td><td><a href="OTHL-PRE-ProTeamRoster.php#Kraken">Mariners</a></td><td>8</td><td><a href="OTHL-PRE-ProTeamRoster.php#Stars">Stars</a></td><td>4</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-138.html">Game Direct Link</a></td></tr>
<tr><td>12</td><td>147</td><td><a href="OTHL-PRE-ProTeamRoster.php#Stars">Stars</a></td><td>1</td><td><a href="OTHL-PRE-ProTeamRoster.php#GoldenKnights">Wolves</a></td><td>4</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-147.html">Game Direct Link</a></td></tr>
<tr><td>14</td><td>175</td><td><a href="OTHL-PRE-ProTeamRoster.php#Predators">Admirals</a></td><td>6</td><td><a href="OTHL-PRE-ProTeamRoster.php#Stars">Stars</a></td><td>2</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-175.html">Game Direct Link</a></td></tr>
<tr><td>16</td><td>187</td><td><a href="OTHL-PRE-ProTeamRoster.php#Stars">Stars</a></td><td>1</td><td><a href="OTHL-PRE-ProTeamRoster.php#Jets">Moose</a></td><td>12</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-187.html">Game Direct Link</a></td></tr>
<tr><td>17</td><td>205</td><td><a href="OTHL-PRE-ProTeamRoster.php#Stars">Stars</a></td><td>6</td><td><a href="OTHL-PRE-ProTeamRoster.php#Wild">Wild</a></td><td>5</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-205.html">Game Direct Link</a></td></tr>
<tr><td>18</td><td>210</td><td><a href="OTHL-PRE-ProTeamRoster.php#GoldenKnights">Wolves</a></td><td>7</td><td><a href="OTHL-PRE-ProTeamRoster.php#Stars">Stars</a></td><td>0</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-210.html">Game Direct Link</a></td></tr>
<tr><td>21</td><td>236</td><td><a href="OTHL-PRE-ProTeamRoster.php#Blues">Rampage </a></td><td>3</td><td><a href="OTHL-PRE-ProTeamRoster.php#Stars">Stars</a></td><td>4</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-236.html">Game Direct Link</a></td></tr>
<tr><td>22</td><td>250</td><td><a href="OTHL-PRE-ProTeamRoster.php#Stars">Stars</a></td><td>2</td><td><a href="OTHL-PRE-ProTeamRoster.php#Sabres"> Americans</a></td><td>11</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-250.html">Game Direct Link</a></td></tr>
</table></div>
<h1 class="TeamScheduleFarm_IOA"><a id="Wild">Wild</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=15">Wild Page</a> ]
[ <a href="OTHL-PRE-ProTeamRoster.php#Wild">Pro Team Roster</a> ]
[ <a href="OTHL-PRE-FarmTeamScoring.php#Wild">Farm Team Scoring</a> ]
[ <a href="OTHL-PRE-FarmTeamLines.php#Wild">Farm Team Lines</a> ]
[ <a href="OTHL-PRE-FarmTeamSchedule.php#Wild">Farm Team Schedule</a> ]
[ <a href="OTHL-PRE-FarmTeamStats.php#Wild">Farm Team Stats</a> ]
[ <a href="OTHL-PRE-FarmTeamStatsVS.php#Wild">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Wild');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Wild" style="display: block;">
<table class="basictablesorter"><thead><tr>
<th class="STHSW35">Day</th><th class="STHSW35">Game</th><th class="STHSW200">Visitor Team</th><th class="STHSW35">Score</th><th class="STHSW200">Home Team</th><th class="STHSW35">Score</th><th class="STHSW35">ST</th><th class="STHSW35">OT</th><th class="STHSW35">SO</th><th class="STHSW35">RI</th><th class="STHSW200">Link</th></tr></thead>
<tr><td>1</td><td>12</td><td><a href="OTHL-PRE-ProTeamRoster.php#Wild">Wild</a></td><td>1</td><td><a href="OTHL-PRE-ProTeamRoster.php#Jets">Moose</a></td><td>6</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-12.html">Game Direct Link</a></td></tr>
<tr><td>2</td><td>16</td><td><a href="OTHL-PRE-ProTeamRoster.php#Wild">Wild</a></td><td>1</td><td><a href="OTHL-PRE-ProTeamRoster.php#Blackhawks">IceHogs</a></td><td>6</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-16.html">Game Direct Link</a></td></tr>
<tr><td>3</td><td>34</td><td><a href="OTHL-PRE-ProTeamRoster.php#Blackhawks">IceHogs</a></td><td>2</td><td><a href="OTHL-PRE-ProTeamRoster.php#Wild">Wild</a></td><td>4</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-34.html">Game Direct Link</a></td></tr>
<tr><td>5</td><td>50</td><td><a href="OTHL-PRE-ProTeamRoster.php#GoldenKnights">Wolves</a></td><td>7</td><td><a href="OTHL-PRE-ProTeamRoster.php#Wild">Wild</a></td><td>1</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-50.html">Game Direct Link</a></td></tr>
<tr><td>6</td><td>72</td><td><a href="OTHL-PRE-ProTeamRoster.php#Wild">Wild</a></td><td>5</td><td><a href="OTHL-PRE-ProTeamRoster.php#Stars">Stars</a></td><td>6</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-72.html">Game Direct Link</a></td></tr>
<tr><td>7</td><td>85</td><td><a href="OTHL-PRE-ProTeamRoster.php#Blues">Rampage </a></td><td>4</td><td><a href="OTHL-PRE-ProTeamRoster.php#Wild">Wild</a></td><td>5</td><td>W</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-85.html">Game Direct Link</a></td></tr>
<tr><td>8</td><td>103</td><td><a href="OTHL-PRE-ProTeamRoster.php#Jets">Moose</a></td><td>7</td><td><a href="OTHL-PRE-ProTeamRoster.php#Wild">Wild</a></td><td>2</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-103.html">Game Direct Link</a></td></tr>
<tr><td>10</td><td>124</td><td><a href="OTHL-PRE-ProTeamRoster.php#Wild">Wild</a></td><td>0</td><td><a href="OTHL-PRE-ProTeamRoster.php#Sabres"> Americans</a></td><td>4</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-124.html">Game Direct Link</a></td></tr>
<tr><td>11</td><td>139</td><td><a href="OTHL-PRE-ProTeamRoster.php#Sabres"> Americans</a></td><td>6</td><td><a href="OTHL-PRE-ProTeamRoster.php#Wild">Wild</a></td><td>0</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-139.html">Game Direct Link</a></td></tr>
<tr><td>13</td><td>160</td><td><a href="OTHL-PRE-ProTeamRoster.php#Kraken">Mariners</a></td><td>6</td><td><a href="OTHL-PRE-ProTeamRoster.php#Wild">Wild</a></td><td>4</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-160.html">Game Direct Link</a></td></tr>
<tr><td>14</td><td>173</td><td><a href="OTHL-PRE-ProTeamRoster.php#Wild">Wild</a></td><td>4</td><td><a href="OTHL-PRE-ProTeamRoster.php#Blues">Rampage </a></td><td>6</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-173.html">Game Direct Link</a></td></tr>
<tr><td>16</td><td>186</td><td><a href="OTHL-PRE-ProTeamRoster.php#Wild">Wild</a></td><td>1</td><td><a href="OTHL-PRE-ProTeamRoster.php#Predators">Admirals</a></td><td>5</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-186.html">Game Direct Link</a></td></tr>
<tr><td>17</td><td>205</td><td><a href="OTHL-PRE-ProTeamRoster.php#Stars">Stars</a></td><td>6</td><td><a href="OTHL-PRE-ProTeamRoster.php#Wild">Wild</a></td><td>5</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-205.html">Game Direct Link</a></td></tr>
<tr><td>19</td><td>229</td><td><a href="OTHL-PRE-ProTeamRoster.php#Predators">Admirals</a></td><td>8</td><td><a href="OTHL-PRE-ProTeamRoster.php#Wild">Wild</a></td><td>2</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-229.html">Game Direct Link</a></td></tr>
<tr><td>20</td><td>231</td><td><a href="OTHL-PRE-ProTeamRoster.php#Wild">Wild</a></td><td>3</td><td><a href="OTHL-PRE-ProTeamRoster.php#Kraken">Mariners</a></td><td>8</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-231.html">Game Direct Link</a></td></tr>
<tr><td>21</td><td>245</td><td><a href="OTHL-PRE-ProTeamRoster.php#Wild">Wild</a></td><td>0</td><td><a href="OTHL-PRE-ProTeamRoster.php#GoldenKnights">Wolves</a></td><td>6</td><td>L</td><td></td><td></td><td></td><td><a href="OTHL-PRE-Farm-245.html">Game Direct Link</a></td></tr>
</table></div>
<?php include "Footer.php";?>
