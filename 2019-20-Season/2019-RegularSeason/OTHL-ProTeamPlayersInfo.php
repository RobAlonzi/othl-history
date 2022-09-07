﻿<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<title>OTHL - Pro Team PlayersInfo</title>
<script src="OTHL.js"></script>
<meta name="author" content="Simon Tremblay, sths.simont.info" />
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="Decription" content="Tyler Bell - STHS - Version : 3.2.0.0 - OTHL-STHS.db - OTHL-STHSCareerStat.db"/>
<link href="STHSMain.css" rel="stylesheet" type="text/css" />
<style>
@media screen and (max-width: 1200px) {
.STHSWarning {display:block;}
table.basictablesorter tbody td:nth-child(15){display:none;}
table.basictablesorter thead th:nth-child(15){display:none;}
table.basictablesorter tbody td:nth-child(16){display:none;}
table.basictablesorter thead th:nth-child(16){display:none;}
table.basictablesorter tbody td:nth-child(17){display:none;}
table.basictablesorter thead th:nth-child(17){display:none;}
}@media screen and (max-width: 960px) {
table.basictablesorter tbody td:nth-child(8){display:none;}
table.basictablesorter thead th:nth-child(8){display:none;}
table.basictablesorter tbody td:nth-child(9){display:none;}
table.basictablesorter thead th:nth-child(9){display:none;}
table.basictablesorter tbody td:nth-child(11){display:none;}
table.basictablesorter thead th:nth-child(11){display:none;}
table.basictablesorter tbody td:nth-child(12){display:none;}
table.basictablesorter thead th:nth-child(12){display:none;}
}@media screen and (max-width: 720px) {
table.basictablesorter tbody td:nth-child(2){display:none;}
table.basictablesorter thead th:nth-child(2){display:none;}
table.basictablesorter tbody td:nth-child(3){display:none;}
table.basictablesorter thead th:nth-child(3){display:none;}
}</style>
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
<script>jQuery(function($,undefined) {$.basictablesorter.addParser({id: 'thousands',is: function(s) {return false;}, format: function(s) { return s.replace('$','').replace(/,/g,'');}, type: 'numeric' }); $("table").basictablesorter({headers:{11:{sorter:'thousands'},12:{sorter:'thousands'},13:{sorter:'thousands'},14:{sorter:'thousands'},15:{sorter:'thousands'}}});});</script>
<div class="STHSTopLink"><a id="STHSRosterTop"></a> <a href="#Avalanche">Avalanche</a> | <a href="#Blackhawks">Blackhawks</a> | <a href="#BlueJackets">Blue Jackets</a> | <a href="#Blues">Blues</a> | <a href="#Bruins">Bruins</a> | <a href="#Canadiens">Canadiens</a> | <a href="#Canucks">Canucks</a> | <a href="#Capitals">Capitals</a> | <a href="#Coyotes">Coyotes</a> | <a href="#Devils">Devils</a> | <a href="#Ducks">Ducks</a> | <a href="#Flames">Flames</a> | <a href="#Flyers">Flyers</a> | <a href="#GoldenKnights">Golden Knights</a> | <a href="#Hurricanes">Hurricanes</a> | <a href="#Islanders">Islanders</a> | <a href="#Jets">Jets</a> | <a href="#Kings">Kings</a> | <a href="#Lightning">Lightning</a> | <a href="#MapleLeafs">Maple Leafs</a> | <a href="#Oilers">Oilers</a> | <a href="#Panthers">Panthers</a> | <a href="#Penguins">Penguins</a> | <a href="#Predators">Predators</a> | <a href="#Rangers">Rangers</a> | <a href="#RedWings">Red Wings</a> | <a href="#Sabres">Sabres</a> | <a href="#Senators">Senators</a> | <a href="#Sharks">Sharks</a> | <a href="#Stars">Stars</a> | <a href="#Wild">Wild</a> | <a href="javascript:STHS_JS_CloseAll('');">Close All Team View</a> | <a href="javascript:STHS_JS_OpenAll('');">Open All Team View</a>
</div>
<h1 class="TeamPlayerInfoPro_COL"><a id="Avalanche">Avalanche</a></h1>
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
<table class="basictablesorter"><thead><tr>
<th class="STHSW200">Player Name</th><th class="STHSW25">CNT</th><th class="STHSW65">PO</th><th class="STHSW25">Age</th><th class="STHSW65">Birthday</th><th class="STHSW65">Weight</th><th class="STHSW55">Height</th><th class="STHSW45">Health<br /># Loss</th><th class="STHSW45">Force<br />Waiver</th><th class="STHSW65">Contract</th><th class="STHSW100">Type</th><th class="STHSW75">One Way<br />Contract</th><th class="STHSW85">Salary #1</th><th class="STHSW85">Salary #2</th><th class="STHSW85">Salary #3</th><th class="STHSW85">Salary #4</th><th class="STHSW85">Salary #5</th></tr></thead>
<tr><td>Adam Clendening</td><td>USA</td><td>D</td><td>27</td><td>1992-10-26</td><td>196 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$900,000</td><td>$900,000</td><td></td><td></td><td></td></tr>
<tr><td>Blake Pietila</td><td>USA</td><td>C/LW/RW</td><td>27</td><td>1993-02-20</td><td>200 Lbs</td><td>5 ft11</td><td>14</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>$750,000</td><td>$750,000</td><td>$750,000</td><td></td><td></td></tr>
<tr><td>Brandon Carlo</td><td>USA</td><td>D</td><td>23</td><td>1996-11-26</td><td>208 Lbs</td><td>6 ft5</td><td>29</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$894,167</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Brandon Manning</td><td>BC</td><td>D</td><td>29</td><td>1990-06-03</td><td>205 Lbs</td><td>6 ft1</td><td>109</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$2,250,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Braydon Coburn</td><td>SKW</td><td>D</td><td>35</td><td>1985-02-27</td><td>223 Lbs</td><td>6 ft5</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$3,800,000</td><td>$3,800,000</td><td></td><td></td><td></td></tr>
<tr><td>Brett Pesce</td><td>USA</td><td>D</td><td>25</td><td>1994-11-15</td><td>200 Lbs</td><td>6 ft3</td><td>20</td><td>No</td><td>4 years</td><td>Pro &amp; Farm</td><td>No</td><td>$4,250,000</td><td>$4,250,000</td><td>$4,250,000</td><td>$4,250,000</td><td></td></tr>
<tr><td>Brock McGinn</td><td>ONT</td><td>LW/RW</td><td>26</td><td>1994-02-01</td><td>185 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$894,167</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Chris Driedger</td><td>MB</td><td>G</td><td>25</td><td>1994-05-18</td><td>205 Lbs</td><td>6 ft4</td><td>41</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$700,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Chris Mueller</td><td>USA</td><td>C/RW</td><td>34</td><td>1986-03-06</td><td>209 Lbs</td><td>5 ft11</td><td>7</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$900,000</td><td>$900,000</td><td></td><td></td><td></td></tr>
<tr><td>Hampus Lindholm</td><td>SWE</td><td>D</td><td>26</td><td>1994-01-20</td><td>208 Lbs</td><td>6 ft3</td><td>42</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>$6,000,000</td><td>$6,000,000</td><td>$6,000,000</td><td></td><td></td></tr>
<tr><td>J.T. Miller</td><td>USA</td><td>C/LW/RW</td><td>27</td><td>1993-03-13</td><td>218 Lbs</td><td>6 ft1</td><td>31</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$5,750,000</td><td>$5,750,000</td><td></td><td></td><td></td></tr>
<tr><td>Jake Allen</td><td>NB</td><td>G</td><td>29</td><td>1990-08-07</td><td>203 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$5,250,000</td><td>$5,250,000</td><td></td><td></td><td></td></tr>
<tr><td>Jonas Siegenthaler</td><td>SWI</td><td>D</td><td>22</td><td>1997-05-06</td><td>220 Lbs</td><td>6 ft3</td><td>0</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>$888,333</td><td>$888,333</td><td>$888,333</td><td></td><td></td></tr>
<tr><td>Joseph Cramarossa</td><td>ONT</td><td>LW/RW</td><td>27</td><td>1992-10-26</td><td>192 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$952,000</td><td>$952,000</td><td></td><td></td><td></td></tr>
<tr><td>Julian Melchiori</td><td>ONT</td><td>D</td><td>28</td><td>1991-12-06</td><td>214 Lbs</td><td>6 ft5</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$700,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Keegan Lowe</td><td>AB</td><td>D</td><td>27</td><td>1993-03-29</td><td>195 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$750,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Kevin Czuczman</td><td>ONT</td><td>D</td><td>29</td><td>1991-01-09</td><td>206 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$700,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Kurtis Gabriel</td><td>ONT</td><td>RW</td><td>27</td><td>1993-04-20</td><td>200 Lbs</td><td>6 ft4</td><td>0</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>$750,000</td><td>$750,000</td><td>$750,000</td><td></td><td></td></tr>
<tr><td>Lucas Wallmark</td><td>SWE</td><td>C</td><td>24</td><td>1995-09-05</td><td>176 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$683,333</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Mark Alt</td><td>USA</td><td>D</td><td>28</td><td>1991-10-17</td><td>201 Lbs</td><td>6 ft4</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$700,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Martin Ouellette</td><td>QUE</td><td>G</td><td>28</td><td>1991-12-29</td><td>160 Lbs</td><td>6 ft1</td><td>41</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>$625,000</td><td>$625,000</td><td>$625,000</td><td></td><td></td></tr>
<tr><td>Michael Frolik</td><td>CZE</td><td>LW/RW</td><td>32</td><td>1988-02-16</td><td>194 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$3,250,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Mike Sgarbossa</td><td>ONT</td><td>C</td><td>27</td><td>1992-07-24</td><td>186 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$650,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Mike Vecchione</td><td>USA</td><td>C/RW</td><td>27</td><td>1993-02-25</td><td>194 Lbs</td><td>5 ft10</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$1,000,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Mikko Koivu</td><td>FIN</td><td>C</td><td>37</td><td>1983-03-11</td><td>215 Lbs</td><td>6 ft3</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$7,750,000</td><td>$7,750,000</td><td></td><td></td><td></td></tr>
<tr><td>Patrick Kane</td><td>USA</td><td>RW</td><td>31</td><td>1988-11-19</td><td>177 Lbs</td><td>5 ft11</td><td>28</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$10,500,000</td><td>$10,500,000</td><td></td><td></td><td></td></tr>
<tr><td>Richard Panik</td><td>CZE</td><td>LW/RW</td><td>29</td><td>1991-02-07</td><td>208 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>4 years</td><td>Pro &amp; Farm</td><td>No</td><td>$2,750,000</td><td>$2,750,000</td><td>$2,750,000</td><td>$2,750,000</td><td></td></tr>
<tr><td>Tobias Rieder</td><td>GER</td><td>LW/RW</td><td>27</td><td>1993-01-09</td><td>186 Lbs</td><td>5 ft11</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$2,000,000</td><td>$2,000,000</td><td></td><td></td><td></td></tr>
<tr><td>Travis Boyd</td><td>USA</td><td>C/RW</td><td>26</td><td>1993-09-14</td><td>185 Lbs</td><td>5 ft11</td><td>11</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$925,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Will Butcher</td><td>USA</td><td>D</td><td>25</td><td>1995-01-06</td><td>190 Lbs</td><td>5 ft10</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$3,775,000</td><td>$3,775,000</td><td></td><td></td><td></td></tr>
</table><br />
<table class="basictablesorter"><tr>
<td class="STHSW100">Total Players</td><td class="STHSW100">Average Age</td><td class="STHSW120">Average Weight</td><td class="STHSW120">Average Height</td><td class="STHSW120">Average Contract</td><td class="STHSW120">Average Salary</td><td class="STHSW140">Players who can play<br />both Pro and Farm </td><td class="STHSW140">Players who can play<br />Pro Only</td><td class="STHSW140">Players who can play<br />Farm Only</td></tr>
<tr><td>30</td><td>27.8</td><td>199 Lbs</td><td>6 ft 1</td><td>1.87 years</td><td>$2,389,567</td>
<td>30</td><td>0</td><td>0</td></tr></table></div>
<h1 class="TeamPlayerInfoPro_CHI"><a id="Blackhawks">Blackhawks</a></h1>
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
<table class="basictablesorter"><thead><tr>
<th class="STHSW200">Player Name</th><th class="STHSW25">CNT</th><th class="STHSW65">PO</th><th class="STHSW25">Age</th><th class="STHSW65">Birthday</th><th class="STHSW65">Weight</th><th class="STHSW55">Height</th><th class="STHSW45">Health<br /># Loss</th><th class="STHSW45">Force<br />Waiver</th><th class="STHSW65">Contract</th><th class="STHSW100">Type</th><th class="STHSW75">One Way<br />Contract</th><th class="STHSW85">Salary #1</th><th class="STHSW85">Salary #2</th><th class="STHSW85">Salary #3</th><th class="STHSW85">Salary #4</th><th class="STHSW85">Salary #5</th></tr></thead>
<tr><td>Adam Erne</td><td>USA</td><td>LW/RW</td><td>25</td><td>1995-04-20</td><td>214 Lbs</td><td>6 ft1</td><td>12</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$874,167</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Al Montoya</td><td>USA</td><td>G</td><td>35</td><td>1985-02-12</td><td>201 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$675,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Alexander Wennberg</td><td>SWE</td><td>C</td><td>25</td><td>1994-09-22</td><td>196 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>4 years</td><td>Pro &amp; Farm</td><td>No</td><td>$5,000,000</td><td>$5,000,000</td><td>$5,000,000</td><td>$5,000,000</td><td></td></tr>
<tr><td>Andrew MacDonald</td><td>USA</td><td>D</td><td>33</td><td>1986-09-07</td><td>204 Lbs</td><td>6 ft1</td><td>74</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$5,000,000</td><td>$5,000,000</td><td></td><td></td><td></td></tr>
<tr><td>Anthony DeAngelo</td><td>USA</td><td>D</td><td>24</td><td>1995-10-24</td><td>183 Lbs</td><td>5 ft11</td><td>54</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$1,363,333</td><td>$1,363,333</td><td></td><td></td><td></td></tr>
<tr><td>Austin Czarnik</td><td>USA</td><td>C/LW/RW</td><td>27</td><td>1992-12-12</td><td>160 Lbs</td><td>5 ft9</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$975,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Brian Boyle</td><td>USA</td><td>C/LW</td><td>35</td><td>1984-12-18</td><td>245 Lbs</td><td>6 ft6</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$3,000,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Cameron Schilling</td><td>USA</td><td>D</td><td>31</td><td>1988-10-07</td><td>182 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$700,000</td><td>$700,000</td><td></td><td></td><td></td></tr>
<tr><td>Carl Hagelin</td><td>SWE</td><td>LW</td><td>31</td><td>1988-08-23</td><td>186 Lbs</td><td>5 ft11</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$4,750,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Corey Crawford</td><td>QUE</td><td>G</td><td>35</td><td>1984-12-31</td><td>216 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$6,850,000</td><td>$6,850,000</td><td></td><td></td><td></td></tr>
<tr><td>David Kampf</td><td>CZE</td><td>C/LW/RW</td><td>25</td><td>1995-01-12</td><td>191 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$925,000</td><td>$925,000</td><td></td><td></td><td></td></tr>
<tr><td>Dominik Simon</td><td>CZE</td><td>LW/RW</td><td>25</td><td>1994-08-08</td><td>190 Lbs</td><td>5 ft11</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$750,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Evgeni Malkin</td><td>RUS</td><td>C</td><td>33</td><td>1986-07-31</td><td>195 Lbs</td><td>6 ft3</td><td>0</td><td>No</td><td>5 years</td><td>Pro &amp; Farm</td><td>No</td><td>$12,000,000</td><td>$12,000,000</td><td>$12,000,000</td><td>$12,000,000</td><td>$12,000,000</td></tr>
<tr><td>Griffen Molino</td><td>USA</td><td>C/LW</td><td>26</td><td>1994-01-21</td><td>171 Lbs</td><td>5 ft11</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$1,000,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Jason Zucker</td><td>USA</td><td>LW/RW</td><td>28</td><td>1992-01-16</td><td>187 Lbs</td><td>5 ft11</td><td>12</td><td>No</td><td>4 years</td><td>Pro &amp; Farm</td><td>No</td><td>$5,500,000</td><td>$5,500,000</td><td>$5,500,000</td><td>$5,500,000</td><td></td></tr>
<tr><td>Jimmy Howard</td><td>USA</td><td>G</td><td>36</td><td>1984-03-25</td><td>218 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$4,200,000</td><td>$4,200,000</td><td></td><td></td><td></td></tr>
<tr><td>Jordan Oesterle</td><td>USA</td><td>D</td><td>27</td><td>1992-06-24</td><td>182 Lbs</td><td>6 ft0</td><td>21</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>$1,750,000</td><td>$1,750,000</td><td>$1,750,000</td><td></td><td></td></tr>
<tr><td>Joseph Blandisi</td><td>ONT</td><td>C/LW</td><td>25</td><td>1994-07-18</td><td>182 Lbs</td><td>5 ft11</td><td>0</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>$650,000</td><td>$650,000</td><td>$650,000</td><td></td><td></td></tr>
<tr><td>Justin Faulk</td><td>USA</td><td>D</td><td>28</td><td>1992-03-20</td><td>215 Lbs</td><td>6 ft0</td><td>2</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$5,000,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Justin Holl</td><td>USA</td><td>D</td><td>28</td><td>1992-01-30</td><td>170 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$925,000</td><td>$925,000</td><td></td><td></td><td></td></tr>
<tr><td>Kevin Rooney</td><td>USA</td><td>C</td><td>26</td><td>1993-05-21</td><td>190 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$850,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Kiefer Sherwood</td><td>USA</td><td>LW/RW</td><td>25</td><td>1995-03-31</td><td>180 Lbs</td><td>5 ft11</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$925,000</td><td>$925,000</td><td></td><td></td><td></td></tr>
<tr><td>Logan Brown</td><td>USA</td><td>C</td><td>22</td><td>1998-03-04</td><td>220 Lbs</td><td>6 ft6</td><td>0</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>$1,573,333</td><td>$1,573,333</td><td>$1,573,333</td><td></td><td></td></tr>
<tr><td>Matt Bartkowski</td><td>USA</td><td>D</td><td>31</td><td>1988-06-04</td><td>196 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$675,000</td><td>$675,000</td><td></td><td></td><td></td></tr>
<tr><td>Matt Benning</td><td>AB</td><td>D</td><td>25</td><td>1994-05-25</td><td>204 Lbs</td><td>6 ft1</td><td>6</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$1,075,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Matt Calvert</td><td>MB</td><td>LW/RW</td><td>30</td><td>1989-12-23</td><td>186 Lbs</td><td>5 ft11</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$3,250,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Matt Tennyson</td><td>USA</td><td>D</td><td>29</td><td>1990-04-23</td><td>205 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$750,000</td><td>$750,000</td><td></td><td></td><td></td></tr>
<tr><td>Max Veronneau</td><td>ONT</td><td>RW</td><td>24</td><td>1995-12-11</td><td>181 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$925,000</td><td>$925,000</td><td></td><td></td><td></td></tr>
<tr><td>Peter Cehlarik</td><td>SVK</td><td>LW/RW</td><td>24</td><td>1995-05-12</td><td>202 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$925,000</td><td>$925,000</td><td></td><td></td><td></td></tr>
<tr><td>Sebastian Aho</td><td>FIN</td><td>C/LW</td><td>22</td><td>1997-07-26</td><td>172 Lbs</td><td>5 ft11</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$1,775,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Shayne Gostisbehere</td><td>USA</td><td>D</td><td>27</td><td>1993-04-19</td><td>180 Lbs</td><td>5 ft11</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$4,500,000</td><td>$4,500,000</td><td></td><td></td><td></td></tr>
<tr><td>Tyler Ennis</td><td>AB</td><td>C/LW/RW</td><td>30</td><td>1989-10-06</td><td>161 Lbs</td><td>5 ft9</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$4,600,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Tyler Johnson</td><td>USA</td><td>C/LW/RW</td><td>29</td><td>1990-07-29</td><td>183 Lbs</td><td>5 ft8</td><td>29</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$6,500,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Valentin Zykov</td><td>RUS</td><td>LW/RW</td><td>24</td><td>1995-05-14</td><td>224 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$894,167</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Vladislav Namestnikov</td><td>RUS</td><td>C/LW/RW</td><td>27</td><td>1992-11-22</td><td>180 Lbs</td><td>5 ft11</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$4,000,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Zac Dalpe</td><td>ONT</td><td>C/RW</td><td>30</td><td>1989-10-31</td><td>199 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$850,000</td><td>$850,000</td><td></td><td></td><td></td></tr>
<tr><td>Zach Werenski</td><td>USA</td><td>D</td><td>22</td><td>1997-07-19</td><td>209 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$1,775,000</td><td></td><td></td><td></td><td></td></tr>
</table><br />
<table class="basictablesorter"><tr>
<td class="STHSW100">Total Players</td><td class="STHSW100">Average Age</td><td class="STHSW120">Average Weight</td><td class="STHSW120">Average Height</td><td class="STHSW120">Average Contract</td><td class="STHSW120">Average Salary</td><td class="STHSW140">Players who can play<br />both Pro and Farm </td><td class="STHSW140">Players who can play<br />Pro Only</td><td class="STHSW140">Players who can play<br />Farm Only</td></tr>
<tr><td>37</td><td>27.8</td><td>194 Lbs</td><td>6 ft 1</td><td>1.81 years</td><td>$2,641,351</td>
<td>37</td><td>0</td><td>0</td></tr></table></div>
<h1 class="TeamPlayerInfoPro_CLB"><a id="BlueJackets">Blue Jackets</a></h1>
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
<table class="basictablesorter"><thead><tr>
<th class="STHSW200">Player Name</th><th class="STHSW25">CNT</th><th class="STHSW65">PO</th><th class="STHSW25">Age</th><th class="STHSW65">Birthday</th><th class="STHSW65">Weight</th><th class="STHSW55">Height</th><th class="STHSW45">Health<br /># Loss</th><th class="STHSW45">Force<br />Waiver</th><th class="STHSW65">Contract</th><th class="STHSW100">Type</th><th class="STHSW75">One Way<br />Contract</th><th class="STHSW85">Salary #1</th><th class="STHSW85">Salary #2</th><th class="STHSW85">Salary #3</th><th class="STHSW85">Salary #4</th><th class="STHSW85">Salary #5</th></tr></thead>
<tr><td>Adam Wilcox</td><td>USA</td><td>G</td><td>25</td><td>1994-04-25</td><td>187 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$650,000</td><td>$650,000</td><td></td><td></td><td></td></tr>
<tr><td>Alex Lyon</td><td>USA</td><td>G</td><td>27</td><td>1992-12-08</td><td>201 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$750,000</td><td>$750,000</td><td></td><td></td><td></td></tr>
<tr><td>Alexander Kerfoot</td><td>CAN</td><td>C/LW</td><td>25</td><td>1994-08-11</td><td>175 Lbs</td><td>5 ft10</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$1,137,500</td><td>$1,137,500</td><td></td><td></td><td></td></tr>
<tr><td>Andreas Johnsson</td><td>SWE</td><td>LW/RW</td><td>25</td><td>1994-11-21</td><td>190 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$925,000</td><td>$925,000</td><td></td><td></td><td></td></tr>
<tr><td>Andrew Copp</td><td>USA</td><td>C/LW</td><td>25</td><td>1994-07-08</td><td>206 Lbs</td><td>6 ft1</td><td>6</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$1,650,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Anthony Duclair</td><td>QUE</td><td>LW/RW</td><td>24</td><td>1995-08-25</td><td>191 Lbs</td><td>5 ft11</td><td>11</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$1,650,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Anton Stralman</td><td>SWE</td><td>D</td><td>33</td><td>1986-08-01</td><td>190 Lbs</td><td>5 ft11</td><td>21</td><td>No</td><td>4 years</td><td>Pro &amp; Farm</td><td>No</td><td>$5,500,000</td><td>$5,500,000</td><td>$5,500,000</td><td>$5,500,000</td><td></td></tr>
<tr><td>Brad Thiessen</td><td>BC</td><td>G</td><td>34</td><td>1986-03-18</td><td>171 Lbs</td><td>5 ft11</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$700,000</td><td>$700,000</td><td></td><td></td><td></td></tr>
<tr><td>Cory Conacher</td><td>ONT</td><td>LW/RW</td><td>30</td><td>1989-12-14</td><td>180 Lbs</td><td>5 ft8</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$850,000</td><td>$850,000</td><td></td><td></td><td></td></tr>
<tr><td>Danny DeKeyser</td><td>USA</td><td>D</td><td>30</td><td>1990-03-07</td><td>192 Lbs</td><td>6 ft3</td><td>15</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>$5,000,000</td><td>$5,000,000</td><td>$5,000,000</td><td></td><td></td></tr>
<tr><td>Denis Malgin</td><td>SWI</td><td>C/RW</td><td>23</td><td>1997-01-18</td><td>177 Lbs</td><td>5 ft9</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$693,333</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Dion Phaneuf</td><td>AB</td><td>D</td><td>35</td><td>1985-04-09</td><td>225 Lbs</td><td>6 ft4</td><td>0</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>$5,500,000</td><td>$5,500,000</td><td>$5,500,000</td><td></td><td></td></tr>
<tr><td>Elias Pettersson</td><td>SWE</td><td>C</td><td>21</td><td>1998-11-12</td><td>161 Lbs</td><td>6 ft2</td><td>18</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>$3,775,000</td><td>$3,775,000</td><td>$3,775,000</td><td></td><td></td></tr>
<tr><td>Erik Burgdoerfer</td><td>USA</td><td>D</td><td>31</td><td>1988-12-11</td><td>207 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$650,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Evan McEneny</td><td>ONT</td><td>D</td><td>25</td><td>1994-05-22</td><td>203 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$800,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Filip Chlapik</td><td>CZE</td><td>C</td><td>22</td><td>1997-06-03</td><td>196 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$894,167</td><td>$894,167</td><td></td><td></td><td></td></tr>
<tr><td>Frederick Gaudreau</td><td>QUE</td><td>C/RW</td><td>26</td><td>1993-05-01</td><td>179 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$1,500,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Giovanni Fiore</td><td>QUE</td><td>LW/RW</td><td>23</td><td>1996-08-13</td><td>194 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>$900,000</td><td>$900,000</td><td>$900,000</td><td></td><td></td></tr>
<tr><td>Greg McKegg</td><td>ONT</td><td>C/LW</td><td>27</td><td>1992-06-17</td><td>191 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>$925,000</td><td>$925,000</td><td>$925,000</td><td></td><td></td></tr>
<tr><td>Hunter Shinkaruk</td><td>AB</td><td>LW</td><td>25</td><td>1994-10-13</td><td>181 Lbs</td><td>5 ft10</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$1,075,833</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Ian Cole</td><td>USA</td><td>D</td><td>31</td><td>1989-02-21</td><td>219 Lbs</td><td>6 ft1</td><td>8</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>$4,000,000</td><td>$4,000,000</td><td>$4,000,000</td><td></td><td></td></tr>
<tr><td>Jack Rodewald</td><td>AB</td><td>RW</td><td>26</td><td>1994-02-14</td><td>169 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$700,000</td><td>$700,000</td><td></td><td></td><td></td></tr>
<tr><td>Jacob Markstrom</td><td>SWE</td><td>G</td><td>30</td><td>1990-01-31</td><td>196 Lbs</td><td>6 ft6</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$4,000,000</td><td>$4,000,000</td><td></td><td></td><td></td></tr>
<tr><td>Jake Virtanen</td><td>BC</td><td>RW</td><td>23</td><td>1996-08-17</td><td>229 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$1,250,000</td><td>$1,250,000</td><td></td><td></td><td></td></tr>
<tr><td>Jason Demers</td><td>QUE</td><td>D</td><td>31</td><td>1988-06-09</td><td>195 Lbs</td><td>6 ft1</td><td>45</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>$4,500,000</td><td>$4,500,000</td><td>$4,500,000</td><td></td><td></td></tr>
<tr><td>Jason Spezza</td><td>ONT</td><td>C/RW</td><td>36</td><td>1983-06-13</td><td>214 Lbs</td><td>6 ft3</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$1,200,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Josh Brown</td><td>ONT</td><td>D</td><td>26</td><td>1994-01-21</td><td>225 Lbs</td><td>6 ft5</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$700,000</td><td>$700,000</td><td></td><td></td><td></td></tr>
<tr><td>Patrick Russell</td><td>DEN</td><td>LW/RW</td><td>27</td><td>1993-01-03</td><td>205 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$750,000</td><td>$750,000</td><td></td><td></td><td></td></tr>
<tr><td>Philippe Myers</td><td>NB</td><td>D</td><td>23</td><td>1997-01-25</td><td>196 Lbs</td><td>6 ft5</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$678,333</td><td>$678,333</td><td></td><td></td><td></td></tr>
<tr><td>Phillip Di Giuseppe</td><td>ONT</td><td>LW/RW</td><td>26</td><td>1993-10-09</td><td>201 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$700,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Robert Hagg</td><td>SWE</td><td>D</td><td>25</td><td>1995-02-07</td><td>204 Lbs</td><td>6 ft2</td><td>52</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$894,167</td><td>$894,167</td><td></td><td></td><td></td></tr>
<tr><td>Rourke Chartier</td><td>SKW</td><td>C</td><td>24</td><td>1996-04-02</td><td>190 Lbs</td><td>5 ft11</td><td>0</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>$863,333</td><td>$863,333</td><td>$863,333</td><td></td><td></td></tr>
<tr><td>Sam Steel</td><td>AB</td><td>C</td><td>22</td><td>1998-02-03</td><td>178 Lbs</td><td>5 ft11</td><td>0</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>$925,000</td><td>$925,000</td><td>$925,000</td><td></td><td></td></tr>
<tr><td>Sami Niku</td><td>FIN</td><td>D</td><td>23</td><td>1996-10-10</td><td>176 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>$916,666</td><td>$916,666</td><td>$916,666</td><td></td><td></td></tr>
<tr><td>Sonny Milano</td><td>USA</td><td>LW/RW</td><td>23</td><td>1996-05-11</td><td>195 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$1,263,333</td><td>$1,263,333</td><td></td><td></td><td></td></tr>
<tr><td>T.J. Tynan</td><td>USA</td><td>C</td><td>28</td><td>1992-02-24</td><td>165 Lbs</td><td>5 ft8</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$925,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Tommy Cross</td><td>USA</td><td>D</td><td>30</td><td>1989-09-12</td><td>205 Lbs</td><td>6 ft3</td><td>0</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>$700,000</td><td>$700,000</td><td>$700,000</td><td></td><td></td></tr>
<tr><td>Troy Stecher</td><td>BC</td><td>D</td><td>26</td><td>1994-04-07</td><td>190 Lbs</td><td>5 ft10</td><td>38</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$3,000,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Vinnie Hinostroza</td><td>USA</td><td>C/RW</td><td>26</td><td>1994-04-03</td><td>173 Lbs</td><td>5 ft9</td><td>2</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$925,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Zach Sanford</td><td>USA</td><td>C/LW/RW</td><td>25</td><td>1994-11-09</td><td>185 Lbs</td><td>6 ft3</td><td>81</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$925,000</td><td>$925,000</td><td></td><td></td><td></td></tr>
</table><br />
<table class="basictablesorter"><tr>
<td class="STHSW100">Total Players</td><td class="STHSW100">Average Age</td><td class="STHSW120">Average Weight</td><td class="STHSW120">Average Height</td><td class="STHSW120">Average Contract</td><td class="STHSW120">Average Salary</td><td class="STHSW140">Players who can play<br />both Pro and Farm </td><td class="STHSW140">Players who can play<br />Pro Only</td><td class="STHSW140">Players who can play<br />Farm Only</td></tr>
<tr><td>40</td><td>26.7</td><td>193 Lbs</td><td>6 ft 1</td><td>2.03 years</td><td>$1,633,542</td>
<td>40</td><td>0</td><td>0</td></tr></table></div>
<h1 class="TeamPlayerInfoPro_STL"><a id="Blues">Blues</a></h1>
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
<table class="basictablesorter"><thead><tr>
<th class="STHSW200">Player Name</th><th class="STHSW25">CNT</th><th class="STHSW65">PO</th><th class="STHSW25">Age</th><th class="STHSW65">Birthday</th><th class="STHSW65">Weight</th><th class="STHSW55">Height</th><th class="STHSW45">Health<br /># Loss</th><th class="STHSW45">Force<br />Waiver</th><th class="STHSW65">Contract</th><th class="STHSW100">Type</th><th class="STHSW75">One Way<br />Contract</th><th class="STHSW85">Salary #1</th><th class="STHSW85">Salary #2</th><th class="STHSW85">Salary #3</th><th class="STHSW85">Salary #4</th><th class="STHSW85">Salary #5</th></tr></thead>
<tr><td>Alex Biega</td><td>QUE</td><td>D</td><td>32</td><td>1988-04-04</td><td>193 Lbs</td><td>5 ft10</td><td>29</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$900,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Andrew Hammond</td><td>BC</td><td>G</td><td>32</td><td>1988-02-11</td><td>215 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$2,750,000</td><td>$2,750,000</td><td></td><td></td><td></td></tr>
<tr><td>Andrew Ladd</td><td>BC</td><td>LW/RW</td><td>34</td><td>1985-12-12</td><td>192 Lbs</td><td>6 ft3</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$6,000,000</td><td>$6,000,000</td><td></td><td></td><td></td></tr>
<tr><td>Anthony Beauvillier</td><td>QUE</td><td>C/LW</td><td>22</td><td>1997-06-08</td><td>182 Lbs</td><td>5 ft11</td><td>6</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$1,106,667</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Antoine Roussel</td><td>FRA</td><td>LW</td><td>30</td><td>1989-11-20</td><td>195 Lbs</td><td>6 ft0</td><td>70</td><td>No</td><td>4 years</td><td>Pro &amp; Farm</td><td>No</td><td>$3,250,000</td><td>$3,250,000</td><td>$3,250,000</td><td>$3,250,000</td><td></td></tr>
<tr><td>Ashton Sautner</td><td>MB</td><td>D</td><td>25</td><td>1994-05-27</td><td>195 Lbs</td><td>6 ft1</td><td>2</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>$900,000</td><td>$900,000</td><td>$900,000</td><td></td><td></td></tr>
<tr><td>Brendan Lemieux</td><td>USA</td><td>LW/RW</td><td>24</td><td>1996-03-14</td><td>210 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$1,039,167</td><td>$1,039,167</td><td></td><td></td><td></td></tr>
<tr><td>Brendan Smith</td><td>ONT</td><td>LW/D</td><td>31</td><td>1989-02-07</td><td>211 Lbs</td><td>6 ft2</td><td>64</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$4,250,000</td><td>$4,250,000</td><td></td><td></td><td></td></tr>
<tr><td>Carter Rowney</td><td>AB</td><td>C/RW</td><td>30</td><td>1989-05-10</td><td>200 Lbs</td><td>6 ft2</td><td>91</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>$2,000,000</td><td>$2,000,000</td><td>$2,000,000</td><td></td><td></td></tr>
<tr><td>Cedric Paquette</td><td>QUE</td><td>C/LW</td><td>26</td><td>1993-08-13</td><td>198 Lbs</td><td>6 ft1</td><td>12</td><td>No</td><td>4 years</td><td>Pro &amp; Farm</td><td>No</td><td>$1,660,000</td><td>$1,660,000</td><td>$1,660,000</td><td>$1,660,000</td><td></td></tr>
<tr><td>Dalton Prout</td><td>ONT</td><td>D</td><td>30</td><td>1990-03-13</td><td>230 Lbs</td><td>6 ft3</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$1,000,000</td><td>$1,000,000</td><td></td><td></td><td></td></tr>
<tr><td>David Savard</td><td>QUE</td><td>D</td><td>29</td><td>1990-10-22</td><td>227 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>$4,750,000</td><td>$4,750,000</td><td>$4,750,000</td><td></td><td></td></tr>
<tr><td>Duncan Siemens</td><td>AB</td><td>D</td><td>26</td><td>1993-09-07</td><td>210 Lbs</td><td>6 ft3</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$1,388,333</td><td>$1,388,333</td><td></td><td></td><td></td></tr>
<tr><td>Jakub Vrana</td><td>CZE</td><td>LW/RW</td><td>24</td><td>1996-02-28</td><td>197 Lbs</td><td>6 ft0</td><td>14</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$1,363,333</td><td>$1,363,333</td><td></td><td></td><td></td></tr>
<tr><td>Jason Pominville</td><td>QUE</td><td>RW</td><td>37</td><td>1982-11-30</td><td>180 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$6,250,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Jean-Sebastien Dea</td><td>QUE</td><td>C/RW</td><td>26</td><td>1994-02-08</td><td>175 Lbs</td><td>5 ft11</td><td>21</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$700,000</td><td>$700,000</td><td></td><td></td><td></td></tr>
<tr><td>Jonathan Drouin</td><td>QUE</td><td>C/LW</td><td>25</td><td>1995-03-28</td><td>203 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>4 years</td><td>Pro &amp; Farm</td><td>No</td><td>$5,500,000</td><td>$5,500,000</td><td>$5,500,000</td><td>$5,500,000</td><td></td></tr>
<tr><td>Jonathan Quick</td><td>USA</td><td>G</td><td>34</td><td>1986-01-20</td><td>218 Lbs</td><td>6 ft1</td><td>2</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$7,250,000</td><td>$7,250,000</td><td></td><td></td><td></td></tr>
<tr><td>Joseph Gambardella</td><td>USA</td><td>C/LW</td><td>26</td><td>1993-12-01</td><td>201 Lbs</td><td>5 ft10</td><td>0</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>$900,000</td><td>$900,000</td><td>$900,000</td><td></td><td></td></tr>
<tr><td>Josh Currie</td><td>PEI</td><td>C/RW</td><td>27</td><td>1992-10-29</td><td>190 Lbs</td><td>5 ft11</td><td>0</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>$900,000</td><td>$900,000</td><td>$900,000</td><td></td><td></td></tr>
<tr><td>Karson Kuhlman</td><td>USA</td><td>C/RW</td><td>24</td><td>1995-09-26</td><td>180 Lbs</td><td>5 ft11</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$750,000</td><td>$750,000</td><td></td><td></td><td></td></tr>
<tr><td>Loui Eriksson</td><td>SWE</td><td>LW/RW</td><td>35</td><td>1984-07-17</td><td>196 Lbs</td><td>6 ft2</td><td>10</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$1,500,000</td><td>$1,500,000</td><td></td><td></td><td></td></tr>
<tr><td>Louis Domingue</td><td>QUE</td><td>G</td><td>28</td><td>1992-03-05</td><td>210 Lbs</td><td>6 ft3</td><td>19</td><td>No</td><td>4 years</td><td>Pro &amp; Farm</td><td>No</td><td>$2,000,000</td><td>$2,000,000</td><td>$2,000,000</td><td>$2,000,000</td><td></td></tr>
<tr><td>Luke Gazdic</td><td>ONT</td><td>LW</td><td>30</td><td>1989-07-24</td><td>225 Lbs</td><td>6 ft4</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$825,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Marko Dano</td><td>AUS</td><td>LW/RW</td><td>25</td><td>1994-11-30</td><td>212 Lbs</td><td>5 ft11</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$925,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Nick Seeler</td><td>USA</td><td>D</td><td>26</td><td>1993-06-02</td><td>200 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$925,000</td><td>$925,000</td><td></td><td></td><td></td></tr>
<tr><td>Paul Ladue</td><td>USA</td><td>D</td><td>27</td><td>1992-09-06</td><td>201 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$925,000</td><td>$925,000</td><td></td><td></td><td></td></tr>
<tr><td>Ryan Callahan</td><td>USA</td><td>RW</td><td>35</td><td>1985-03-21</td><td>187 Lbs</td><td>5 ft10</td><td>10</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$4,000,000</td><td>$4,000,000</td><td></td><td></td><td></td></tr>
<tr><td>Samuel Blais</td><td>QUE</td><td>LW/RW</td><td>23</td><td>1996-06-16</td><td>205 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$725,833</td><td>$725,833</td><td></td><td></td><td></td></tr>
<tr><td>Samuel Girard</td><td>CAN</td><td>D</td><td>21</td><td>1998-05-12</td><td>162 Lbs</td><td>5 ft10</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$935,833</td><td>$935,833</td><td></td><td></td><td></td></tr>
<tr><td>Scott Darling</td><td>USA</td><td>G</td><td>31</td><td>1988-12-21</td><td>232 Lbs</td><td>6 ft6</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$1,000,000</td><td>$1,000,000</td><td></td><td></td><td></td></tr>
<tr><td>Steve Bernier</td><td>QUE</td><td>RW</td><td>35</td><td>1985-03-31</td><td>220 Lbs</td><td>6 ft3</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$1,250,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Tanner Kero</td><td>USA</td><td>C</td><td>27</td><td>1992-07-24</td><td>185 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$820,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Thomas Vanek</td><td>AUS</td><td>LW/RW</td><td>36</td><td>1984-01-18</td><td>214 Lbs</td><td>6 ft2</td><td>2</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$2,000,000</td><td>$2,000,000</td><td></td><td></td><td></td></tr>
<tr><td>Victor Mete</td><td>CAN</td><td>D</td><td>21</td><td>1998-06-07</td><td>184 Lbs</td><td>5 ft10</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$870,000</td><td>$870,000</td><td></td><td></td><td></td></tr>
</table><br />
<table class="basictablesorter"><tr>
<td class="STHSW100">Total Players</td><td class="STHSW100">Average Age</td><td class="STHSW120">Average Weight</td><td class="STHSW120">Average Height</td><td class="STHSW120">Average Contract</td><td class="STHSW120">Average Salary</td><td class="STHSW140">Players who can play<br />both Pro and Farm </td><td class="STHSW140">Players who can play<br />Pro Only</td><td class="STHSW140">Players who can play<br />Farm Only</td></tr>
<tr><td>35</td><td>28.4</td><td>201 Lbs</td><td>6 ft 1</td><td>2.17 years</td><td>$2,094,548</td>
<td>35</td><td>0</td><td>0</td></tr></table></div>
<h1 class="TeamPlayerInfoPro_BOS"><a id="Bruins">Bruins</a></h1>
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
<table class="basictablesorter"><thead><tr>
<th class="STHSW200">Player Name</th><th class="STHSW25">CNT</th><th class="STHSW65">PO</th><th class="STHSW25">Age</th><th class="STHSW65">Birthday</th><th class="STHSW65">Weight</th><th class="STHSW55">Height</th><th class="STHSW45">Health<br /># Loss</th><th class="STHSW45">Force<br />Waiver</th><th class="STHSW65">Contract</th><th class="STHSW100">Type</th><th class="STHSW75">One Way<br />Contract</th><th class="STHSW85">Salary #1</th><th class="STHSW85">Salary #2</th><th class="STHSW85">Salary #3</th><th class="STHSW85">Salary #4</th><th class="STHSW85">Salary #5</th></tr></thead>
<tr><td>Anthony Angello</td><td>USA</td><td>C</td><td>24</td><td>1996-03-06</td><td>209 Lbs</td><td>6 ft5</td><td>0</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>$833,750</td><td>$833,750</td><td>$833,750</td><td></td><td></td></tr>
<tr><td>Ben Chiarot</td><td>ONT</td><td>D</td><td>28</td><td>1991-05-08</td><td>219 Lbs</td><td>6 ft3</td><td>0</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>$3,500,000</td><td>$3,500,000</td><td>$3,500,000</td><td></td><td></td></tr>
<tr><td>Ben Harpur</td><td>ONT</td><td>D</td><td>25</td><td>1995-01-12</td><td>222 Lbs</td><td>6 ft6</td><td>64</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$773,333</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Blake Coleman</td><td>USA</td><td>C/LW/RW</td><td>28</td><td>1991-11-18</td><td>200 Lbs</td><td>5 ft11</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$925,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Boone Jenner</td><td>ONT</td><td>C/LW</td><td>26</td><td>1993-06-14</td><td>206 Lbs</td><td>6 ft2</td><td>5</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>$3,750,000</td><td>$3,750,000</td><td>$3,750,000</td><td></td><td></td></tr>
<tr><td>Brad Marchand</td><td>NS</td><td>LW</td><td>31</td><td>1988-05-11</td><td>181 Lbs</td><td>5 ft9</td><td>21</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$7,000,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Braden Holtby</td><td>SKW</td><td>G</td><td>30</td><td>1989-09-16</td><td>211 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$7,100,000</td><td>$7,100,000</td><td></td><td></td><td></td></tr>
<tr><td>Brayden McNabb</td><td>SKW</td><td>D</td><td>29</td><td>1991-01-20</td><td>212 Lbs</td><td>6 ft4</td><td>6</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>$2,800,000</td><td>$2,800,000</td><td>$2,800,000</td><td></td><td></td></tr>
<tr><td>Brendan Perlini</td><td>GBR</td><td>LW/RW</td><td>23</td><td>1996-04-27</td><td>212 Lbs</td><td>6 ft3</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$1,363,333</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Bryan Little</td><td>AB</td><td>C/RW</td><td>32</td><td>1987-11-11</td><td>191 Lbs</td><td>6 ft0</td><td>28</td><td>No</td><td>5 years</td><td>Pro &amp; Farm</td><td>No</td><td>$5,500,000</td><td>$5,500,000</td><td>$5,500,000</td><td>$5,500,000</td><td>$5,500,000</td></tr>
<tr><td>Chris Bigras</td><td>ONT</td><td>D</td><td>25</td><td>1995-02-22</td><td>190 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$900,000</td><td>$900,000</td><td></td><td></td><td></td></tr>
<tr><td>Cody Eakin</td><td>MB</td><td>C</td><td>28</td><td>1991-05-24</td><td>190 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$4,250,000</td><td>$4,250,000</td><td></td><td></td><td></td></tr>
<tr><td>Dustin Byfuglien</td><td>USA</td><td>D</td><td>35</td><td>1985-03-27</td><td>260 Lbs</td><td>6 ft5</td><td>0</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>$9,000,000</td><td>$9,000,000</td><td>$9,000,000</td><td></td><td></td></tr>
<tr><td>Eric Staal</td><td>ONT</td><td>C</td><td>35</td><td>1984-10-29</td><td>209 Lbs</td><td>6 ft4</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$9,400,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Erik Gudbranson</td><td>ONT</td><td>D</td><td>28</td><td>1992-01-07</td><td>220 Lbs</td><td>6 ft5</td><td>22</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$4,500,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Evgenii Dadonov</td><td>RUS</td><td>LW/RW</td><td>31</td><td>1989-03-12</td><td>185 Lbs</td><td>5 ft11</td><td>74</td><td>No</td><td>6 years</td><td>Pro &amp; Farm</td><td>Yes</td><td>$7,200,000</td><td>$7,200,000</td><td>$7,200,000</td><td>$7,200,000</td><td>$7,200,000</td></tr>
<tr><td>Gabriel Bourque</td><td>QUE</td><td>LW/RW</td><td>29</td><td>1990-09-23</td><td>206 Lbs</td><td>5 ft10</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$1,400,000</td><td>$1,400,000</td><td></td><td></td><td></td></tr>
<tr><td>Gustav Olofsson</td><td>SWE</td><td>D</td><td>25</td><td>1994-11-30</td><td>195 Lbs</td><td>6 ft3</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$1,200,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Jack Campbell</td><td>USA</td><td>G</td><td>28</td><td>1992-01-08</td><td>197 Lbs</td><td>6 ft3</td><td>33</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$1,340,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Jake Dotchin</td><td>ONT</td><td>D</td><td>26</td><td>1994-03-24</td><td>210 Lbs</td><td>6 ft3</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$650,000</td><td>$650,000</td><td></td><td></td><td></td></tr>
<tr><td>Jaycob Megna</td><td>USA</td><td>D</td><td>27</td><td>1992-12-10</td><td>225 Lbs</td><td>6 ft6</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$1,000,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Joonas Korpisalo</td><td>FIN</td><td>G</td><td>25</td><td>1994-04-27</td><td>182 Lbs</td><td>6 ft3</td><td>10</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$1,150,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Justin Abdelkader</td><td>USA</td><td>LW/RW</td><td>33</td><td>1987-02-25</td><td>214 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>Yes</td><td>$4,500,000</td><td>$4,500,000</td><td></td><td></td><td></td></tr>
<tr><td>Justin Auger</td><td>ONT</td><td>RW</td><td>25</td><td>1994-05-14</td><td>229 Lbs</td><td>6 ft7</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$650,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Kole Sherwood</td><td>USA</td><td>RW</td><td>23</td><td>1997-01-22</td><td>201 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$1,000,000</td><td>$1,000,000</td><td></td><td></td><td></td></tr>
<tr><td>Matt Roy</td><td>USA</td><td>D</td><td>25</td><td>1995-02-28</td><td>200 Lbs</td><td>6 ft1</td><td>16</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$833,750</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Matthew Villalta</td><td>ONT</td><td>G</td><td>20</td><td>1999-06-03</td><td>187 Lbs</td><td>6 ft4</td><td>0</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>$778,333</td><td>$778,333</td><td>$778,333</td><td></td><td></td></tr>
<tr><td>Mikkel Boedker</td><td>DEN</td><td>LW/RW</td><td>30</td><td>1989-12-15</td><td>210 Lbs</td><td>6 ft0</td><td>8</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$3,300,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Mirco Mueller</td><td>SWI</td><td>D</td><td>25</td><td>1995-03-21</td><td>210 Lbs</td><td>6 ft3</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$850,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Nathan Walker</td><td>ENG</td><td>LW</td><td>26</td><td>1994-02-06</td><td>175 Lbs</td><td>5 ft9</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$683,333</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Noah Juulsen</td><td>BC</td><td>D</td><td>23</td><td>1997-04-02</td><td>175 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$1,063,333</td><td>$1,063,333</td><td></td><td></td><td></td></tr>
<tr><td>Par Lindholm</td><td>SWE</td><td>C/LW</td><td>28</td><td>1991-10-04</td><td>187 Lbs</td><td>5 ft11</td><td>25</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$925,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Sean Couturier</td><td>USA</td><td>C</td><td>27</td><td>1992-12-06</td><td>211 Lbs</td><td>6 ft3</td><td>0</td><td>No</td><td>5 years</td><td>Pro &amp; Farm</td><td>No</td><td>$7,700,000</td><td>$7,700,000</td><td>$7,700,000</td><td>$7,700,000</td><td>$7,700,000</td></tr>
<tr><td>Tomas Tatar</td><td>SVK</td><td>LW/RW</td><td>29</td><td>1990-11-30</td><td>182 Lbs</td><td>5 ft10</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$4,500,000</td><td>$4,500,000</td><td></td><td></td><td></td></tr>
<tr><td>Vladislav Gavrikov</td><td>RUS</td><td>D</td><td>24</td><td>1995-11-21</td><td>213 Lbs</td><td>6 ft3</td><td>0</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>$1,350,000</td><td>$1,350,000</td><td>$1,350,000</td><td></td><td></td></tr>
<tr><td>Zach Hyman</td><td>ONT</td><td>LW/RW</td><td>27</td><td>1992-06-09</td><td>213 Lbs</td><td>6 ft1</td><td>1</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$3,000,000</td><td>$3,000,000</td><td></td><td></td><td></td></tr>
</table><br />
<table class="basictablesorter"><tr>
<td class="STHSW100">Total Players</td><td class="STHSW100">Average Age</td><td class="STHSW120">Average Weight</td><td class="STHSW120">Average Height</td><td class="STHSW120">Average Contract</td><td class="STHSW120">Average Salary</td><td class="STHSW140">Players who can play<br />both Pro and Farm </td><td class="STHSW140">Players who can play<br />Pro Only</td><td class="STHSW140">Players who can play<br />Farm Only</td></tr>
<tr><td>36</td><td>27.3</td><td>204 Lbs</td><td>6 ft 2</td><td>2.03 years</td><td>$2,963,032</td>
<td>36</td><td>0</td><td>0</td></tr></table></div>
<h1 class="TeamPlayerInfoPro_MTL"><a id="Canadiens">Canadiens</a></h1>
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
<table class="basictablesorter"><thead><tr>
<th class="STHSW200">Player Name</th><th class="STHSW25">CNT</th><th class="STHSW65">PO</th><th class="STHSW25">Age</th><th class="STHSW65">Birthday</th><th class="STHSW65">Weight</th><th class="STHSW55">Height</th><th class="STHSW45">Health<br /># Loss</th><th class="STHSW45">Force<br />Waiver</th><th class="STHSW65">Contract</th><th class="STHSW100">Type</th><th class="STHSW75">One Way<br />Contract</th><th class="STHSW85">Salary #1</th><th class="STHSW85">Salary #2</th><th class="STHSW85">Salary #3</th><th class="STHSW85">Salary #4</th><th class="STHSW85">Salary #5</th></tr></thead>
<tr><td>Aaron Ekblad</td><td>ONT</td><td>D</td><td>24</td><td>1996-02-07</td><td>216 Lbs</td><td>6 ft5</td><td>23</td><td>No</td><td>4 years</td><td>Pro &amp; Farm</td><td>No</td><td>$7,650,000</td><td>$7,650,000</td><td>$7,650,000</td><td>$7,650,000</td><td></td></tr>
<tr><td>Adam Tambellini</td><td>BC</td><td>C</td><td>25</td><td>1994-10-31</td><td>195 Lbs</td><td>6 ft5</td><td>0</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>$925,000</td><td>$925,000</td><td>$925,000</td><td></td><td></td></tr>
<tr><td>Alex DeBrincat</td><td>USA</td><td>LW/RW</td><td>22</td><td>1997-12-18</td><td>165 Lbs</td><td>5 ft7</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$894,167</td><td>$894,167</td><td></td><td></td><td></td></tr>
<tr><td>Alex Nedeljkovic</td><td>USA</td><td>G</td><td>24</td><td>1996-01-07</td><td>189 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$894,167</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Alex Schoenborn</td><td>USA</td><td>RW</td><td>24</td><td>1995-12-11</td><td>196 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>$925,000</td><td>$925,000</td><td>$925,000</td><td></td><td></td></tr>
<tr><td>Alexander Petrovic</td><td>AB</td><td>D</td><td>28</td><td>1992-03-03</td><td>206 Lbs</td><td>6 ft4</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$1,950,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Anthony Mantha</td><td>QUE</td><td>LW/RW</td><td>25</td><td>1994-09-15</td><td>225 Lbs</td><td>6 ft5</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$863,333</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Artemi Panarin</td><td>RUS</td><td>LW</td><td>28</td><td>1991-10-30</td><td>168 Lbs</td><td>5 ft11</td><td>16</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>$7,500,000</td><td>$7,500,000</td><td>$7,500,000</td><td></td><td></td></tr>
<tr><td>Austen Brassard</td><td>ONT</td><td>RW</td><td>27</td><td>1993-01-13</td><td>188 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>$625,000</td><td>$625,000</td><td>$625,000</td><td></td><td></td></tr>
<tr><td>Ben Bishop</td><td>USA</td><td>G</td><td>33</td><td>1986-11-21</td><td>215 Lbs</td><td>6 ft7</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$5,500,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Brandon Tanev</td><td>ONT</td><td>LW/RW</td><td>28</td><td>1991-12-31</td><td>180 Lbs</td><td>6 ft0</td><td>41</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$2,000,000</td><td>$2,000,000</td><td></td><td></td><td></td></tr>
<tr><td>Brian Lashoff</td><td>USA</td><td>D</td><td>29</td><td>1990-07-15</td><td>221 Lbs</td><td>6 ft3</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$750,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Cal O'Reilly</td><td>ONT</td><td>C</td><td>33</td><td>1986-09-30</td><td>188 Lbs</td><td>6 ft0</td><td>12</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$900,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Carter Hart</td><td>AB</td><td>G</td><td>21</td><td>1998-08-12</td><td>180 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>$863,333</td><td>$863,333</td><td>$863,333</td><td></td><td></td></tr>
<tr><td>Chad Johnson</td><td>SKW</td><td>G</td><td>33</td><td>1986-06-09</td><td>197 Lbs</td><td>6 ft3</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$750,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Clayton Keller</td><td>USA</td><td>C/LW/RW</td><td>21</td><td>1998-07-29</td><td>170 Lbs</td><td>5 ft10</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$1,673,333</td><td>$1,673,333</td><td></td><td></td><td></td></tr>
<tr><td>Connor Murphy</td><td>USA</td><td>D</td><td>27</td><td>1993-03-26</td><td>212 Lbs</td><td>6 ft4</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$3,850,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Curtis McKenzie</td><td>BC</td><td>LW</td><td>29</td><td>1991-02-22</td><td>205 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>$800,000</td><td>$800,000</td><td>$800,000</td><td></td><td></td></tr>
<tr><td>Daniel Sprong</td><td>NED</td><td>LW/RW</td><td>23</td><td>1997-03-17</td><td>180 Lbs</td><td>6 ft0</td><td>1</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$925,000</td><td>$925,000</td><td></td><td></td><td></td></tr>
<tr><td>Henrik Borgstrom</td><td>FIN</td><td>C/LW</td><td>22</td><td>1997-08-06</td><td>185 Lbs</td><td>6 ft3</td><td>0</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>$1,491,666</td><td>$1,491,666</td><td>$1,491,666</td><td></td><td></td></tr>
<tr><td>Ivan Provorov</td><td>RUS</td><td>D</td><td>23</td><td>1997-01-13</td><td>201 Lbs</td><td>6 ft1</td><td>8</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$1,774,167</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Jacob MacDonald</td><td>USA</td><td>D</td><td>27</td><td>1993-02-26</td><td>207 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>$900,000</td><td>$900,000</td><td>$900,000</td><td></td><td></td></tr>
<tr><td>Jeff Carter</td><td>ONT</td><td>C/RW</td><td>35</td><td>1984-12-31</td><td>217 Lbs</td><td>6 ft3</td><td>41</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$10,000,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>John Klingberg</td><td>SWE</td><td>D</td><td>27</td><td>1992-08-14</td><td>177 Lbs</td><td>6 ft2</td><td>30</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>$4,500,000</td><td>$4,500,000</td><td>$4,500,000</td><td></td><td></td></tr>
<tr><td>Jonny Brodzinski</td><td>USA</td><td>RW</td><td>26</td><td>1993-06-19</td><td>218 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$925,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Kalle Kossila</td><td>FIN</td><td>C/LW</td><td>27</td><td>1993-04-14</td><td>175 Lbs</td><td>5 ft11</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$1,000,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Marc-Edouard Vlasic</td><td>QUE</td><td>D</td><td>33</td><td>1987-03-30</td><td>205 Lbs</td><td>6 ft1</td><td>14</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>$8,000,000</td><td>$8,000,000</td><td>$8,000,000</td><td></td><td></td></tr>
<tr><td>Mark Scheifele</td><td>ONT</td><td>C</td><td>27</td><td>1993-03-14</td><td>207 Lbs</td><td>6 ft3</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$7,500,000</td><td>$7,500,000</td><td></td><td></td><td></td></tr>
<tr><td>Matt Luff</td><td>ONT</td><td>RW</td><td>22</td><td>1997-05-04</td><td>188 Lbs</td><td>6 ft3</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$676,666</td><td>$676,666</td><td></td><td></td><td></td></tr>
<tr><td>Melker Karlsson</td><td>SWE</td><td>C/RW</td><td>29</td><td>1990-07-18</td><td>182 Lbs</td><td>5 ft10</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$2,000,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Michael Kapla</td><td>USA</td><td>D</td><td>25</td><td>1994-09-19</td><td>200 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$1,000,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Nikita Zadorov</td><td>RUS</td><td>D</td><td>25</td><td>1995-04-15</td><td>230 Lbs</td><td>6 ft5</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$3,500,000</td><td>$3,500,000</td><td></td><td></td><td></td></tr>
<tr><td>Nikolaj Ehlers</td><td>DEN</td><td>LW/RW</td><td>24</td><td>1996-02-13</td><td>172 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>$6,000,000</td><td>$6,000,000</td><td>$6,000,000</td><td></td><td></td></tr>
<tr><td>Ryan Lomberg</td><td>ONT</td><td>LW</td><td>25</td><td>1994-12-09</td><td>190 Lbs</td><td>5 ft10</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$850,000</td><td>$850,000</td><td></td><td></td><td></td></tr>
<tr><td>Sheldon Rempal</td><td>AB</td><td>LW/RW</td><td>24</td><td>1995-08-06</td><td>154 Lbs</td><td>5 ft10</td><td>0</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>$900,000</td><td>$900,000</td><td>$900,000</td><td></td><td></td></tr>
<tr><td>T.J. Brennan</td><td>USA</td><td>D</td><td>31</td><td>1989-04-03</td><td>216 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>$900,000</td><td>$900,000</td><td>$900,000</td><td></td><td></td></tr>
<tr><td>Valtteri Filppula</td><td>FIN</td><td>C</td><td>36</td><td>1984-03-20</td><td>196 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$3,000,000</td><td>$3,000,000</td><td></td><td></td><td></td></tr>
<tr><td>Vladislav Kamenev</td><td>RUS</td><td>C/LW</td><td>23</td><td>1996-08-12</td><td>194 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$833,333</td><td></td><td></td><td></td><td></td></tr>
</table><br />
<table class="basictablesorter"><tr>
<td class="STHSW100">Total Players</td><td class="STHSW100">Average Age</td><td class="STHSW120">Average Weight</td><td class="STHSW120">Average Height</td><td class="STHSW120">Average Contract</td><td class="STHSW120">Average Salary</td><td class="STHSW140">Players who can play<br />both Pro and Farm </td><td class="STHSW140">Players who can play<br />Pro Only</td><td class="STHSW140">Players who can play<br />Farm Only</td></tr>
<tr><td>38</td><td>26.7</td><td>195 Lbs</td><td>6 ft 1</td><td>2.00 years</td><td>$2,526,031</td>
<td>38</td><td>0</td><td>0</td></tr></table></div>
<h1 class="TeamPlayerInfoPro_VAN"><a id="Canucks">Canucks</a></h1>
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
<table class="basictablesorter"><thead><tr>
<th class="STHSW200">Player Name</th><th class="STHSW25">CNT</th><th class="STHSW65">PO</th><th class="STHSW25">Age</th><th class="STHSW65">Birthday</th><th class="STHSW65">Weight</th><th class="STHSW55">Height</th><th class="STHSW45">Health<br /># Loss</th><th class="STHSW45">Force<br />Waiver</th><th class="STHSW65">Contract</th><th class="STHSW100">Type</th><th class="STHSW75">One Way<br />Contract</th><th class="STHSW85">Salary #1</th><th class="STHSW85">Salary #2</th><th class="STHSW85">Salary #3</th><th class="STHSW85">Salary #4</th><th class="STHSW85">Salary #5</th></tr></thead>
<tr><td>Alex Steen</td><td>MB</td><td>C/LW/RW</td><td>36</td><td>1984-03-01</td><td>211 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$6,500,000</td><td>$6,500,000</td><td></td><td></td><td></td></tr>
<tr><td>Alexandar Georgiev</td><td>BUL</td><td>G</td><td>24</td><td>1996-02-10</td><td>176 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$925,000</td><td>$925,000</td><td></td><td></td><td></td></tr>
<tr><td>Anton Blidh</td><td>SWE</td><td>LW/RW</td><td>25</td><td>1995-03-14</td><td>201 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$925,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Auston Matthews</td><td>USA</td><td>C</td><td>22</td><td>1997-09-17</td><td>216 Lbs</td><td>6 ft3</td><td>58</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$3,775,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Ben Gleason</td><td>USA</td><td>D</td><td>22</td><td>1998-03-25</td><td>185 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>$761,666</td><td>$761,666</td><td>$761,666</td><td></td><td></td></tr>
<tr><td>Brandon Dubinsky</td><td>USA</td><td>C/LW</td><td>33</td><td>1986-04-28</td><td>205 Lbs</td><td>6 ft2</td><td>14</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$5,750,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Brett Seney</td><td>ONT</td><td>C/LW</td><td>24</td><td>1996-02-28</td><td>156 Lbs</td><td>5 ft9</td><td>0</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>$825,000</td><td>$825,000</td><td>$825,000</td><td></td><td></td></tr>
<tr><td>Brogan Rafferty</td><td>USA</td><td>D</td><td>24</td><td>1995-05-28</td><td>195 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$700,000</td><td>$700,000</td><td></td><td></td><td></td></tr>
<tr><td>Cal Clutterbuck</td><td>ONT</td><td>RW</td><td>32</td><td>1987-11-18</td><td>216 Lbs</td><td>5 ft11</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$3,500,000</td><td>$3,500,000</td><td></td><td></td><td></td></tr>
<tr><td>Chris Terry</td><td>ONT</td><td>LW/RW</td><td>31</td><td>1989-04-07</td><td>195 Lbs</td><td>5 ft10</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$850,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Cory Schneider</td><td>USA</td><td>G</td><td>34</td><td>1986-03-18</td><td>200 Lbs</td><td>6 ft3</td><td>0</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>$4,000,000</td><td>$4,000,000</td><td>$4,000,000</td><td></td><td></td></tr>
<tr><td>Danick Martel</td><td>QUE</td><td>LW</td><td>25</td><td>1994-12-12</td><td>162 Lbs</td><td>5 ft8</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$700,000</td><td>$700,000</td><td></td><td></td><td></td></tr>
<tr><td>Devante Smith-Pelly</td><td>ONT</td><td>LW/RW</td><td>27</td><td>1992-06-14</td><td>223 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>$2,000,000</td><td>$2,000,000</td><td>$2,000,000</td><td></td><td></td></tr>
<tr><td>Dougie Hamilton</td><td>ONT</td><td>D</td><td>26</td><td>1993-06-16</td><td>210 Lbs</td><td>6 ft6</td><td>29</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$5,750,000</td><td>$5,750,000</td><td></td><td></td><td></td></tr>
<tr><td>Gabriel Dumont</td><td>QUE</td><td>C/RW</td><td>29</td><td>1990-10-06</td><td>181 Lbs</td><td>5 ft10</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$650,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Gavin Bayreuther</td><td>USA</td><td>D</td><td>25</td><td>1994-05-12</td><td>195 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$625,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Haydn Fleury</td><td>SKW</td><td>D</td><td>23</td><td>1996-07-08</td><td>221 Lbs</td><td>6 ft3</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$1,713,333</td><td>$1,713,333</td><td></td><td></td><td></td></tr>
<tr><td>Henrik Lundqvist</td><td>SWE</td><td>G</td><td>38</td><td>1982-03-01</td><td>180 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$6,250,000</td><td>$6,250,000</td><td></td><td></td><td></td></tr>
<tr><td>Hunter Miska</td><td>USA</td><td>G</td><td>24</td><td>1995-07-06</td><td>170 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$625,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>J.T. Brown</td><td>USA</td><td>C/RW</td><td>29</td><td>1990-07-02</td><td>169 Lbs</td><td>5 ft10</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$1,250,000</td><td>$1,250,000</td><td></td><td></td><td></td></tr>
<tr><td>Jacob Larsson</td><td>SWE</td><td>D</td><td>22</td><td>1997-04-29</td><td>195 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>$894,166</td><td>$894,166</td><td>$894,166</td><td></td><td></td></tr>
<tr><td>Jacob Middleton</td><td>ONT</td><td>D</td><td>24</td><td>1996-01-01</td><td>200 Lbs</td><td>6 ft3</td><td>0</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>$735,000</td><td>$735,000</td><td>$735,000</td><td></td><td></td></tr>
<tr><td>Jamie McGinn</td><td>ONT</td><td>LW</td><td>31</td><td>1988-08-05</td><td>205 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$950,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Joel L'Esperance</td><td>USA</td><td>C/RW</td><td>24</td><td>1995-08-18</td><td>201 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$722,500</td><td>$722,500</td><td></td><td></td><td></td></tr>
<tr><td>Joshua Ho-Sang</td><td>ONT</td><td>RW</td><td>24</td><td>1996-01-22</td><td>173 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$1,075,833</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Kyle Connor</td><td>USA</td><td>LW</td><td>23</td><td>1996-12-09</td><td>182 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$1,775,000</td><td>$1,775,000</td><td></td><td></td><td></td></tr>
<tr><td>Landon Bow</td><td>USA</td><td>G</td><td>24</td><td>1995-08-23</td><td>214 Lbs</td><td>6 ft4</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$625,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Logan O'Connor</td><td>AB</td><td>RW</td><td>23</td><td>1996-08-14</td><td>174 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$950,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>MacKenzie Weegar</td><td>ONT</td><td>D</td><td>26</td><td>1994-01-07</td><td>212 Lbs</td><td>6 ft2</td><td>10</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$800,000</td><td>$800,000</td><td></td><td></td><td></td></tr>
<tr><td>Matt Lorito</td><td>ONT</td><td>LW/RW</td><td>29</td><td>1990-07-03</td><td>170 Lbs</td><td>5 ft9</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$800,000</td><td>$800,000</td><td></td><td></td><td></td></tr>
<tr><td>Mikko Rantanen</td><td>FIN</td><td>RW</td><td>23</td><td>1996-10-28</td><td>211 Lbs</td><td>6 ft4</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$1,627,500</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Nic Petan</td><td>BC</td><td>C/LW/RW</td><td>25</td><td>1995-03-21</td><td>179 Lbs</td><td>5 ft9</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$863,333</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Nick Bjugstad</td><td>USA</td><td>C/RW</td><td>27</td><td>1992-07-17</td><td>218 Lbs</td><td>6 ft6</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$4,100,000</td><td>$4,100,000</td><td></td><td></td><td></td></tr>
<tr><td>Nick Bonino</td><td>USA</td><td>C</td><td>32</td><td>1988-04-20</td><td>196 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$2,500,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Nico Hischier</td><td>SUI</td><td>C</td><td>21</td><td>1999-01-04</td><td>175 Lbs</td><td>6 ft1</td><td>7</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$3,775,000</td><td>$3,775,000</td><td></td><td></td><td></td></tr>
<tr><td>Nikita Zaitsev</td><td>RUS</td><td>D</td><td>28</td><td>1991-10-29</td><td>195 Lbs</td><td>6 ft2</td><td>29</td><td>No</td><td>4 years</td><td>Pro &amp; Farm</td><td>No</td><td>$4,500,000</td><td>$4,500,000</td><td>$4,500,000</td><td>$4,500,000</td><td></td></tr>
<tr><td>Pat Maroon</td><td>USA</td><td>LW/RW</td><td>31</td><td>1988-04-22</td><td>225 Lbs</td><td>6 ft3</td><td>3</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>$3,950,000</td><td>$3,950,000</td><td>$3,950,000</td><td></td><td></td></tr>
<tr><td>Rudolfs Balcers</td><td>LAT</td><td>LW</td><td>23</td><td>1997-04-08</td><td>165 Lbs</td><td>5 ft11</td><td>0</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>$925,000</td><td>$925,000</td><td>$925,000</td><td></td><td></td></tr>
<tr><td>Ryan Carpenter</td><td>USA</td><td>C/LW/RW</td><td>29</td><td>1991-01-18</td><td>200 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>$1,000,000</td><td>$1,000,000</td><td>$1,000,000</td><td></td><td></td></tr>
<tr><td>Ryan Kesler</td><td>USA</td><td>C</td><td>35</td><td>1984-08-31</td><td>202 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$7,200,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Scott Mayfield</td><td>USA</td><td>D</td><td>27</td><td>1992-10-14</td><td>227 Lbs</td><td>6 ft4</td><td>0</td><td>No</td><td>4 years</td><td>Pro &amp; Farm</td><td>No</td><td>$2,000,000</td><td>$2,000,000</td><td>$2,000,000</td><td>$2,000,000</td><td></td></tr>
<tr><td>Stephen Johns</td><td>USA</td><td>D</td><td>28</td><td>1992-04-07</td><td>230 Lbs</td><td>6 ft4</td><td>0</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>$2,400,000</td><td>$2,400,000</td><td>$2,400,000</td><td></td><td></td></tr>
<tr><td>Steven Fogarty</td><td>USA</td><td>C/RW</td><td>27</td><td>1993-04-18</td><td>206 Lbs</td><td>6 ft3</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$750,000</td><td>$750,000</td><td></td><td></td><td></td></tr>
<tr><td>Tyler Myers</td><td>USA</td><td>D</td><td>30</td><td>1990-01-31</td><td>229 Lbs</td><td>6 ft8</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$5,650,000</td><td>$5,650,000</td><td></td><td></td><td></td></tr>
<tr><td>Valeri Nichushkin</td><td>RUS</td><td>LW/RW</td><td>25</td><td>1995-03-04</td><td>205 Lbs</td><td>6 ft4</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$2,950,000</td><td>$2,950,000</td><td></td><td></td><td></td></tr>
<tr><td>William Carrier</td><td>QUE</td><td>C/LW/RW</td><td>25</td><td>1994-12-20</td><td>212 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$700,000</td><td>$700,000</td><td></td><td></td><td></td></tr>
</table><br />
<table class="basictablesorter"><tr>
<td class="STHSW100">Total Players</td><td class="STHSW100">Average Age</td><td class="STHSW120">Average Weight</td><td class="STHSW120">Average Height</td><td class="STHSW120">Average Contract</td><td class="STHSW120">Average Salary</td><td class="STHSW140">Players who can play<br />both Pro and Farm </td><td class="STHSW140">Players who can play<br />Pro Only</td><td class="STHSW140">Players who can play<br />Farm Only</td></tr>
<tr><td>46</td><td>26.9</td><td>197 Lbs</td><td>6 ft 1</td><td>1.98 years</td><td>$2,223,768</td>
<td>46</td><td>0</td><td>0</td></tr></table></div>
<h1 class="TeamPlayerInfoPro_WSH"><a id="Capitals">Capitals</a></h1>
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
<table class="basictablesorter"><thead><tr>
<th class="STHSW200">Player Name</th><th class="STHSW25">CNT</th><th class="STHSW65">PO</th><th class="STHSW25">Age</th><th class="STHSW65">Birthday</th><th class="STHSW65">Weight</th><th class="STHSW55">Height</th><th class="STHSW45">Health<br /># Loss</th><th class="STHSW45">Force<br />Waiver</th><th class="STHSW65">Contract</th><th class="STHSW100">Type</th><th class="STHSW75">One Way<br />Contract</th><th class="STHSW85">Salary #1</th><th class="STHSW85">Salary #2</th><th class="STHSW85">Salary #3</th><th class="STHSW85">Salary #4</th><th class="STHSW85">Salary #5</th></tr></thead>
<tr><td>A.J. Greer</td><td>QUE</td><td>LW/RW</td><td>23</td><td>1996-12-14</td><td>204 Lbs</td><td>6 ft3</td><td>0</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>$825,000</td><td>$825,000</td><td>$825,000</td><td></td><td></td></tr>
<tr><td>Alec Martinez</td><td>USA</td><td>D</td><td>32</td><td>1987-07-25</td><td>208 Lbs</td><td>6 ft1</td><td>1</td><td>No</td><td>4 years</td><td>Pro &amp; Farm</td><td>No</td><td>$5,000,000</td><td>$5,000,000</td><td>$5,000,000</td><td>$5,000,000</td><td></td></tr>
<tr><td>Alex Iafallo</td><td>USA</td><td>LW</td><td>26</td><td>1993-12-21</td><td>185 Lbs</td><td>6 ft0</td><td>13</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$925,000</td><td>$925,000</td><td></td><td></td><td></td></tr>
<tr><td>Andrew Campbell</td><td>ONT</td><td>D</td><td>32</td><td>1988-02-04</td><td>205 Lbs</td><td>6 ft4</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$650,000</td><td>$650,000</td><td></td><td></td><td></td></tr>
<tr><td>Blake Lizotte</td><td>USA</td><td>C</td><td>22</td><td>1997-12-13</td><td>172 Lbs</td><td>5 ft7</td><td>0</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>$925,000</td><td>$925,000</td><td>$925,000</td><td></td><td></td></tr>
<tr><td>Carl Grundstrom</td><td>SWE</td><td>LW/RW</td><td>22</td><td>1997-12-01</td><td>194 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>$925,000</td><td>$925,000</td><td>$925,000</td><td></td><td></td></tr>
<tr><td>Chandler Stephenson</td><td>SKW</td><td>C/LW/RW</td><td>25</td><td>1994-04-22</td><td>203 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$925,000</td><td>$925,000</td><td></td><td></td><td></td></tr>
<tr><td>Chris Conner</td><td>USA</td><td>LW/RW</td><td>36</td><td>1983-12-23</td><td>181 Lbs</td><td>5 ft7</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$650,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Curtis McElhinney</td><td>ONT</td><td>G</td><td>36</td><td>1983-05-22</td><td>200 Lbs</td><td>6 ft3</td><td>37</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$1,600,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>David Schlemko</td><td>AB</td><td>D</td><td>32</td><td>1987-05-07</td><td>189 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>4 years</td><td>Pro &amp; Farm</td><td>No</td><td>$2,000,000</td><td>$2,000,000</td><td>$2,000,000</td><td>$2,000,000</td><td></td></tr>
<tr><td>Dmitry Orlov</td><td>RUS</td><td>D</td><td>28</td><td>1991-07-22</td><td>212 Lbs</td><td>5 ft11</td><td>3</td><td>No</td><td>4 years</td><td>Pro &amp; Farm</td><td>No</td><td>$5,100,000</td><td>$5,100,000</td><td>$5,100,000</td><td>$5,100,000</td><td></td></tr>
<tr><td>Drew Doughty</td><td>ONT</td><td>D</td><td>30</td><td>1989-12-07</td><td>200 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>$9,250,000</td><td>$9,250,000</td><td>$9,250,000</td><td></td><td></td></tr>
<tr><td>Greg Pateryn</td><td>USA</td><td>D</td><td>29</td><td>1990-06-20</td><td>224 Lbs</td><td>6 ft3</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$2,250,000</td><td>$2,250,000</td><td></td><td></td><td></td></tr>
<tr><td>Gustav Nyquist</td><td>SWE</td><td>C/LW/RW</td><td>30</td><td>1989-08-31</td><td>184 Lbs</td><td>5 ft11</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$4,750,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Jack Eichel</td><td>USA</td><td>C</td><td>23</td><td>1996-10-28</td><td>206 Lbs</td><td>6 ft2</td><td>49</td><td>No</td><td>4 years</td><td>Pro &amp; Farm</td><td>No</td><td>$10,000,000</td><td>$10,000,000</td><td>$10,000,000</td><td>$10,000,000</td><td></td></tr>
<tr><td>Jacob Trouba</td><td>USA</td><td>D</td><td>26</td><td>1994-02-25</td><td>202 Lbs</td><td>6 ft3</td><td>5</td><td>No</td><td>5 years</td><td>Pro &amp; Farm</td><td>No</td><td>$7,500,000</td><td>$7,500,000</td><td>$7,500,000</td><td>$7,500,000</td><td>$7,500,000</td></tr>
<tr><td>Jamie Benn</td><td>BC</td><td>C/LW</td><td>30</td><td>1989-07-18</td><td>209 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$9,300,000</td><td>$9,300,000</td><td></td><td></td><td></td></tr>
<tr><td>Jujhar Khaira</td><td>BC</td><td>C/LW</td><td>25</td><td>1994-08-13</td><td>214 Lbs</td><td>6 ft4</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$894,167</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Kevin Gravel</td><td>USA</td><td>D</td><td>28</td><td>1992-03-06</td><td>212 Lbs</td><td>6 ft4</td><td>12</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$667,500</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Kyle Palmieri</td><td>USA</td><td>RW</td><td>29</td><td>1991-02-01</td><td>185 Lbs</td><td>5 ft11</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$4,650,000</td><td>$4,650,000</td><td></td><td></td><td></td></tr>
<tr><td>Laurent Dauphin</td><td>QUE</td><td>C/LW/RW</td><td>25</td><td>1995-03-27</td><td>180 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$894,167</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Luke Witkowski</td><td>USA</td><td>RW/D</td><td>30</td><td>1990-04-14</td><td>210 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$750,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Matthew Peca</td><td>ONT</td><td>C/LW/RW</td><td>26</td><td>1993-04-27</td><td>178 Lbs</td><td>5 ft8</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$925,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Michael Chaput</td><td>QUE</td><td>C/LW</td><td>28</td><td>1992-04-08</td><td>204 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$675,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Oscar Fantenberg</td><td>SWE</td><td>D</td><td>28</td><td>1991-10-07</td><td>203 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$650,000</td><td>$650,000</td><td></td><td></td><td></td></tr>
<tr><td>Paul Byron</td><td>ONT</td><td>C/LW/RW</td><td>30</td><td>1989-04-26</td><td>162 Lbs</td><td>5 ft9</td><td>2</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$2,500,000</td><td>$2,500,000</td><td></td><td></td><td></td></tr>
<tr><td>Pavel Zacha</td><td>CZE</td><td>C/LW</td><td>23</td><td>1997-04-06</td><td>210 Lbs</td><td>6 ft3</td><td>11</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$1,744,167</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Petr Mrazek</td><td>CZE</td><td>G</td><td>28</td><td>1992-02-13</td><td>181 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$1,900,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Sean Walker</td><td>ONT</td><td>D</td><td>25</td><td>1994-11-12</td><td>196 Lbs</td><td>5 ft11</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$745,000</td><td>$745,000</td><td></td><td></td><td></td></tr>
<tr><td>Spencer Martin</td><td>ONT</td><td>G</td><td>24</td><td>1995-06-07</td><td>210 Lbs</td><td>6 ft3</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$894,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Steven Kampfer</td><td>USA</td><td>D</td><td>31</td><td>1988-09-24</td><td>195 Lbs</td><td>5 ft11</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$650,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>T.J. Oshie</td><td>USA</td><td>RW</td><td>33</td><td>1986-12-23</td><td>195 Lbs</td><td>6 ft0</td><td>14</td><td>No</td><td>5 years</td><td>Pro &amp; Farm</td><td>No</td><td>$6,850,000</td><td>$6,850,000</td><td>$6,850,000</td><td>$6,850,000</td><td>$6,850,000</td></tr>
<tr><td>Vincent Trocheck</td><td>USA</td><td>C</td><td>26</td><td>1993-07-11</td><td>182 Lbs</td><td>5 ft10</td><td>54</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>$5,500,000</td><td>$5,500,000</td><td>$5,500,000</td><td></td><td></td></tr>
</table><br />
<table class="basictablesorter"><tr>
<td class="STHSW100">Total Players</td><td class="STHSW100">Average Age</td><td class="STHSW120">Average Weight</td><td class="STHSW120">Average Height</td><td class="STHSW120">Average Contract</td><td class="STHSW120">Average Salary</td><td class="STHSW140">Players who can play<br />both Pro and Farm </td><td class="STHSW140">Players who can play<br />Pro Only</td><td class="STHSW140">Players who can play<br />Farm Only</td></tr>
<tr><td>33</td><td>27.9</td><td>197 Lbs</td><td>6 ft 1</td><td>2.18 years</td><td>$2,832,242</td>
<td>33</td><td>0</td><td>0</td></tr></table></div>
<h1 class="TeamPlayerInfoPro_ARI"><a id="Coyotes">Coyotes</a></h1>
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
<table class="basictablesorter"><thead><tr>
<th class="STHSW200">Player Name</th><th class="STHSW25">CNT</th><th class="STHSW65">PO</th><th class="STHSW25">Age</th><th class="STHSW65">Birthday</th><th class="STHSW65">Weight</th><th class="STHSW55">Height</th><th class="STHSW45">Health<br /># Loss</th><th class="STHSW45">Force<br />Waiver</th><th class="STHSW65">Contract</th><th class="STHSW100">Type</th><th class="STHSW75">One Way<br />Contract</th><th class="STHSW85">Salary #1</th><th class="STHSW85">Salary #2</th><th class="STHSW85">Salary #3</th><th class="STHSW85">Salary #4</th><th class="STHSW85">Salary #5</th></tr></thead>
<tr><td>Andrej Sekera</td><td>SVK</td><td>D</td><td>33</td><td>1986-06-08</td><td>200 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$1,500,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Antti Suomela</td><td>FIN</td><td>C</td><td>26</td><td>1994-03-17</td><td>172 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$925,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Brady Keeper</td><td>MAN</td><td>D</td><td>23</td><td>1996-06-05</td><td>194 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>$925,000</td><td>$925,000</td><td>$925,000</td><td></td><td></td></tr>
<tr><td>Carl Gunnarsson</td><td>SWE</td><td>D</td><td>33</td><td>1986-11-09</td><td>198 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$1,750,000</td><td>$1,750,000</td><td></td><td></td><td></td></tr>
<tr><td>Christian Fischer</td><td>USA</td><td>RW</td><td>23</td><td>1997-04-15</td><td>215 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$1,075,833</td><td>$1,075,833</td><td></td><td></td><td></td></tr>
<tr><td>Cody Ceci</td><td>ONT</td><td>D</td><td>26</td><td>1993-12-21</td><td>209 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$4,800,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Dale Weise</td><td>MB</td><td>RW</td><td>31</td><td>1988-08-05</td><td>206 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$750,000</td><td>$750,000</td><td></td><td></td><td></td></tr>
<tr><td>Dylan Strome</td><td>ONT</td><td>C/LW/RW</td><td>23</td><td>1997-03-07</td><td>185 Lbs</td><td>6 ft3</td><td>2</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$3,338,000</td><td>$3,338,000</td><td></td><td></td><td></td></tr>
<tr><td>Erik Condra</td><td>USA</td><td>LW/RW</td><td>33</td><td>1986-08-06</td><td>183 Lbs</td><td>5 ft11</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$700,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Filip Chytil</td><td>CZE</td><td>C/LW/RW</td><td>20</td><td>1999-09-05</td><td>178 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>$1,244,166</td><td>$1,244,166</td><td>$1,244,166</td><td></td><td></td></tr>
<tr><td>Griffin Reinhart</td><td>BC</td><td>D</td><td>26</td><td>1994-01-24</td><td>212 Lbs</td><td>6 ft4</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$3,213,333</td><td>$3,213,333</td><td></td><td></td><td></td></tr>
<tr><td>Harry Zolnierczyk</td><td>ONT</td><td>LW/RW</td><td>32</td><td>1987-09-01</td><td>180 Lbs</td><td>5 ft11</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$650,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Jay Bouwmeester</td><td>AB</td><td>D</td><td>36</td><td>1983-09-27</td><td>206 Lbs</td><td>6 ft4</td><td>51</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$4,500,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Jeff Skinner</td><td>ONT</td><td>LW</td><td>27</td><td>1992-05-16</td><td>200 Lbs</td><td>5 ft11</td><td>16</td><td>No</td><td>4 years</td><td>Pro &amp; Farm</td><td>No</td><td>$6,750,000</td><td>$6,750,000</td><td>$6,750,000</td><td>$6,750,000</td><td></td></tr>
<tr><td>Keith Kinkaid</td><td>USA</td><td>G</td><td>30</td><td>1989-07-03</td><td>195 Lbs</td><td>6 ft3</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$2,100,000</td><td>$2,100,000</td><td></td><td></td><td></td></tr>
<tr><td>Kevin Fiala</td><td>SWI</td><td>LW/RW</td><td>23</td><td>1996-07-22</td><td>193 Lbs</td><td>5 ft10</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$1,363,333</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Kevin Hayes</td><td>USA</td><td>C/LW/RW</td><td>27</td><td>1992-05-08</td><td>212 Lbs</td><td>6 ft5</td><td>0</td><td>No</td><td>4 years</td><td>Pro &amp; Farm</td><td>No</td><td>$6,200,000</td><td>$6,200,000</td><td>$6,200,000</td><td>$6,200,000</td><td></td></tr>
<tr><td>Leon Draisaitl</td><td>GER</td><td>C/LW/RW</td><td>24</td><td>1995-10-26</td><td>215 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>4 years</td><td>Pro &amp; Farm</td><td>No</td><td>$8,500,000</td><td>$8,500,000</td><td>$8,500,000</td><td>$8,500,000</td><td></td></tr>
<tr><td>Matt Hunwick</td><td>USA</td><td>D</td><td>34</td><td>1985-05-21</td><td>200 Lbs</td><td>5 ft11</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$2,250,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Michael Leighton</td><td>ONT</td><td>G</td><td>38</td><td>1981-05-19</td><td>186 Lbs</td><td>6 ft3</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$650,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Mika Zibanejad</td><td>SWE</td><td>C</td><td>27</td><td>1993-04-18</td><td>227 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$3,800,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Nate Thompson</td><td>USA</td><td>C/LW</td><td>35</td><td>1984-10-05</td><td>214 Lbs</td><td>6 ft1</td><td>19</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$1,750,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Nic Dowd</td><td>USA</td><td>C/RW</td><td>29</td><td>1990-05-26</td><td>197 Lbs</td><td>6 ft2</td><td>39</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$650,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Nico Sturm</td><td>GER</td><td>C</td><td>24</td><td>1995-05-03</td><td>207 Lbs</td><td>6 ft3</td><td>0</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>$925,000</td><td>$925,000</td><td>$925,000</td><td></td><td></td></tr>
<tr><td>Nikita Kucherov</td><td>RUS</td><td>RW</td><td>26</td><td>1993-06-17</td><td>178 Lbs</td><td>5 ft11</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$7,750,000</td><td>$7,750,000</td><td></td><td></td><td></td></tr>
<tr><td>Niklas Hjalmarsson</td><td>SWE</td><td>D</td><td>32</td><td>1987-06-06</td><td>197 Lbs</td><td>6 ft3</td><td>16</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$4,900,000</td><td>$4,900,000</td><td></td><td></td><td></td></tr>
<tr><td>Oliver Ekman-Larsson</td><td>SWE</td><td>D</td><td>28</td><td>1991-07-16</td><td>200 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>5 years</td><td>Pro &amp; Farm</td><td>No</td><td>$8,100,000</td><td>$8,100,000</td><td>$8,100,000</td><td>$8,100,000</td><td>$8,100,000</td></tr>
<tr><td>Oskar Sundqvist</td><td>SWE</td><td>LW/RW</td><td>26</td><td>1994-03-23</td><td>209 Lbs</td><td>6 ft3</td><td>5</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$925,000</td><td>$925,000</td><td></td><td></td><td></td></tr>
<tr><td>Sheldon Dries</td><td>USA</td><td>C/LW</td><td>25</td><td>1994-04-23</td><td>185 Lbs</td><td>5 ft9</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$625,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Slater Koekkoek</td><td>ONT</td><td>D</td><td>26</td><td>1994-02-18</td><td>193 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$1,444,167</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Tanner Fritz</td><td>AB</td><td>C/RW</td><td>28</td><td>1991-08-20</td><td>192 Lbs</td><td>5 ft11</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$800,000</td><td>$800,000</td><td></td><td></td><td></td></tr>
<tr><td>Thomas Chabot</td><td>QUE</td><td>D</td><td>23</td><td>1997-01-30</td><td>196 Lbs</td><td>6 ft2</td><td>12</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$1,223,333</td><td>$1,223,333</td><td></td><td></td><td></td></tr>
<tr><td>Tuukka Rask</td><td>FIN</td><td>G</td><td>33</td><td>1987-03-10</td><td>194 Lbs</td><td>6 ft3</td><td>2</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>$7,500,000</td><td>$7,500,000</td><td>$7,500,000</td><td></td><td></td></tr>
<tr><td>Tyler Gaudet</td><td>ONT</td><td>C/LW</td><td>27</td><td>1993-03-04</td><td>205 Lbs</td><td>6 ft3</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$650,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Wayne Simmonds</td><td>ONT</td><td>LW/RW</td><td>31</td><td>1988-08-25</td><td>185 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$4,750,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>William Nylander</td><td>AB</td><td>C/RW</td><td>23</td><td>1996-05-01</td><td>191 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$1,744,167</td><td></td><td></td><td></td><td></td></tr>
</table><br />
<table class="basictablesorter"><tr>
<td class="STHSW100">Total Players</td><td class="STHSW100">Average Age</td><td class="STHSW120">Average Weight</td><td class="STHSW120">Average Height</td><td class="STHSW120">Average Contract</td><td class="STHSW120">Average Salary</td><td class="STHSW140">Players who can play<br />both Pro and Farm </td><td class="STHSW140">Players who can play<br />Pro Only</td><td class="STHSW140">Players who can play<br />Farm Only</td></tr>
<tr><td>36</td><td>28.1</td><td>197 Lbs</td><td>6 ft 1</td><td>1.89 years</td><td>$2,797,815</td>
<td>36</td><td>0</td><td>0</td></tr></table></div>
<h1 class="TeamPlayerInfoPro_NJD"><a id="Devils">Devils</a></h1>
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
<table class="basictablesorter"><thead><tr>
<th class="STHSW200">Player Name</th><th class="STHSW25">CNT</th><th class="STHSW65">PO</th><th class="STHSW25">Age</th><th class="STHSW65">Birthday</th><th class="STHSW65">Weight</th><th class="STHSW55">Height</th><th class="STHSW45">Health<br /># Loss</th><th class="STHSW45">Force<br />Waiver</th><th class="STHSW65">Contract</th><th class="STHSW100">Type</th><th class="STHSW75">One Way<br />Contract</th><th class="STHSW85">Salary #1</th><th class="STHSW85">Salary #2</th><th class="STHSW85">Salary #3</th><th class="STHSW85">Salary #4</th><th class="STHSW85">Salary #5</th></tr></thead>
<tr><td>Adam Larsson</td><td>SWE</td><td>D</td><td>27</td><td>1992-11-12</td><td>210 Lbs</td><td>6 ft4</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$5,000,000</td><td>$5,000,000</td><td></td><td></td><td></td></tr>
<tr><td>Anders Bjork</td><td>USA</td><td>LW/RW</td><td>23</td><td>1996-08-05</td><td>186 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$1,066,667</td><td>$1,066,667</td><td></td><td></td><td></td></tr>
<tr><td>Chris Tanev</td><td>ONT</td><td>D</td><td>30</td><td>1989-12-20</td><td>195 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>4 years</td><td>Pro &amp; Farm</td><td>No</td><td>$6,500,000</td><td>$6,500,000</td><td>$6,500,000</td><td>$6,500,000</td><td></td></tr>
<tr><td>Christian Folin</td><td>SWE</td><td>D</td><td>29</td><td>1991-02-09</td><td>204 Lbs</td><td>6 ft3</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$1,500,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Colby Cave</td><td>SKW</td><td>C</td><td>25</td><td>1994-12-26</td><td>200 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$700,000</td><td>$700,000</td><td></td><td></td><td></td></tr>
<tr><td>Darnell Nurse</td><td>ONT</td><td>D</td><td>25</td><td>1995-02-04</td><td>221 Lbs</td><td>6 ft4</td><td>7</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$3,250,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Garret Sparks</td><td>USA</td><td>G</td><td>26</td><td>1993-06-28</td><td>210 Lbs</td><td>6 ft3</td><td>36</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$850,000</td><td>$850,000</td><td></td><td></td><td></td></tr>
<tr><td>Gemel Smith</td><td>ONT</td><td>C/LW/RW</td><td>26</td><td>1994-04-16</td><td>190 Lbs</td><td>5 ft10</td><td>15</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$700,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Jimmy Vesey</td><td>USA</td><td>LW/RW</td><td>26</td><td>1993-05-26</td><td>206 Lbs</td><td>6 ft3</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$3,775,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Kirby Dach</td><td>ALB</td><td>C/LW/RW</td><td>19</td><td>2001-01-21</td><td>197 Lbs</td><td>6 ft4</td><td>0</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>$3,425,000</td><td>$3,425,000</td><td>$3,425,000</td><td></td><td></td></tr>
<tr><td>Kyle Criscuolo</td><td>USA</td><td>C</td><td>27</td><td>1992-05-05</td><td>170 Lbs</td><td>5 ft8</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$675,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Mark Friedman</td><td>ONT</td><td>D</td><td>24</td><td>1995-12-25</td><td>185 Lbs</td><td>5 ft11</td><td>0</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>$825,000</td><td>$825,000</td><td>$825,000</td><td></td><td></td></tr>
<tr><td>Markus Nutivaara</td><td>FIN</td><td>D</td><td>25</td><td>1994-06-06</td><td>191 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$925,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Martin Hanzal</td><td>CZE</td><td>C</td><td>33</td><td>1987-02-19</td><td>230 Lbs</td><td>6 ft6</td><td>1</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$2,700,000</td><td>$2,700,000</td><td></td><td></td><td></td></tr>
<tr><td>Matt Moulson</td><td>ONT</td><td>LW/RW</td><td>36</td><td>1983-11-01</td><td>200 Lbs</td><td>6 ft1</td><td>2</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$1,850,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Maxime Lajoie</td><td>AB</td><td>D</td><td>22</td><td>1997-11-05</td><td>183 Lbs</td><td>6 ft1</td><td>11</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$790,000</td><td>$790,000</td><td></td><td></td><td></td></tr>
<tr><td>Michael Grabner</td><td>AUS</td><td>LW</td><td>32</td><td>1987-10-05</td><td>188 Lbs</td><td>6 ft1</td><td>36</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$4,850,000</td><td>$4,850,000</td><td></td><td></td><td></td></tr>
<tr><td>Michael Raffl</td><td>AUS</td><td>LW/RW</td><td>31</td><td>1988-11-30</td><td>200 Lbs</td><td>6 ft0</td><td>6</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$1,650,000</td><td>$1,650,000</td><td></td><td></td><td></td></tr>
<tr><td>Michal Kempny</td><td>CZE</td><td>D</td><td>29</td><td>1990-09-08</td><td>194 Lbs</td><td>6 ft0</td><td>2</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$1,000,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Nick Ritchie</td><td>ONT</td><td>LW</td><td>24</td><td>1995-12-05</td><td>234 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$1,675,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Patric Hornqvist</td><td>SWE</td><td>RW</td><td>33</td><td>1987-01-01</td><td>189 Lbs</td><td>5 ft11</td><td>31</td><td>No</td><td>4 years</td><td>Pro &amp; Farm</td><td>No</td><td>$7,000,000</td><td>$7,000,000</td><td>$7,000,000</td><td>$7,000,000</td><td></td></tr>
<tr><td>Patrick Brown</td><td>USA</td><td>C/RW</td><td>27</td><td>1992-05-29</td><td>210 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$675,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Riley Sheahan</td><td>ONT</td><td>C</td><td>28</td><td>1991-12-06</td><td>214 Lbs</td><td>6 ft3</td><td>0</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>$2,900,000</td><td>$2,900,000</td><td>$2,900,000</td><td></td><td></td></tr>
<tr><td>Robin Lehner</td><td>SWE</td><td>G</td><td>28</td><td>1991-07-24</td><td>245 Lbs</td><td>6 ft4</td><td>2</td><td>No</td><td>4 years</td><td>Pro &amp; Farm</td><td>No</td><td>$6,000,000</td><td>$6,000,000</td><td>$6,000,000</td><td>$6,000,000</td><td></td></tr>
<tr><td>Ryan Getzlaf</td><td>SKW</td><td>C</td><td>34</td><td>1985-05-10</td><td>223 Lbs</td><td>6 ft4</td><td>25</td><td>No</td><td>4 years</td><td>Pro &amp; Farm</td><td>No</td><td>$9,000,000</td><td>$9,000,000</td><td>$9,000,000</td><td>$9,000,000</td><td></td></tr>
<tr><td>Timo Meier</td><td>SWI</td><td>LW/RW</td><td>23</td><td>1996-10-08</td><td>215 Lbs</td><td>6 ft0</td><td>3</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$1,644,167</td><td>$1,644,167</td><td></td><td></td><td></td></tr>
<tr><td>William Karlsson</td><td>SWE</td><td>C</td><td>27</td><td>1993-01-07</td><td>189 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>5 years</td><td>Pro &amp; Farm</td><td>No</td><td>$5,850,000</td><td>$5,850,000</td><td>$5,850,000</td><td>$5,850,000</td><td>$5,850,000</td></tr>
</table><br />
<table class="basictablesorter"><tr>
<td class="STHSW100">Total Players</td><td class="STHSW100">Average Age</td><td class="STHSW120">Average Weight</td><td class="STHSW120">Average Height</td><td class="STHSW120">Average Contract</td><td class="STHSW120">Average Salary</td><td class="STHSW140">Players who can play<br />both Pro and Farm </td><td class="STHSW140">Players who can play<br />Pro Only</td><td class="STHSW140">Players who can play<br />Farm Only</td></tr>
<tr><td>27</td><td>27.4</td><td>203 Lbs</td><td>6 ft 2</td><td>2.15 years</td><td>$2,843,549</td>
<td>27</td><td>0</td><td>0</td></tr></table></div>
<h1 class="TeamPlayerInfoPro_ANH"><a id="Ducks">Ducks</a></h1>
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
<table class="basictablesorter"><thead><tr>
<th class="STHSW200">Player Name</th><th class="STHSW25">CNT</th><th class="STHSW65">PO</th><th class="STHSW25">Age</th><th class="STHSW65">Birthday</th><th class="STHSW65">Weight</th><th class="STHSW55">Height</th><th class="STHSW45">Health<br /># Loss</th><th class="STHSW45">Force<br />Waiver</th><th class="STHSW65">Contract</th><th class="STHSW100">Type</th><th class="STHSW75">One Way<br />Contract</th><th class="STHSW85">Salary #1</th><th class="STHSW85">Salary #2</th><th class="STHSW85">Salary #3</th><th class="STHSW85">Salary #4</th><th class="STHSW85">Salary #5</th></tr></thead>
<tr><td>Alex Chiasson</td><td>QUE</td><td>LW/RW</td><td>29</td><td>1990-10-01</td><td>208 Lbs</td><td>6 ft4</td><td>53</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$3,200,000</td><td>$3,200,000</td><td></td><td></td><td></td></tr>
<tr><td>Antti Raanta</td><td>FIN</td><td>G</td><td>30</td><td>1989-05-11</td><td>195 Lbs</td><td>6 ft0</td><td>36</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$3,600,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Brayden Schenn</td><td>SKW</td><td>C/LW</td><td>28</td><td>1991-08-21</td><td>200 Lbs</td><td>6 ft1</td><td>12</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$6,000,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Caleb Jones</td><td>USA</td><td>D</td><td>22</td><td>1997-06-06</td><td>192 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>$815,000</td><td>$815,000</td><td>$815,000</td><td></td><td></td></tr>
<tr><td>Charlie McAvoy</td><td>USA</td><td>D</td><td>22</td><td>1997-12-21</td><td>208 Lbs</td><td>6 ft0</td><td>41</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$1,258,333</td><td>$1,258,333</td><td></td><td></td><td></td></tr>
<tr><td>Colin Miller</td><td>ONT</td><td>D</td><td>27</td><td>1992-10-29</td><td>196 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$650,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Devin Shore</td><td>ONT</td><td>C/LW</td><td>25</td><td>1994-07-19</td><td>205 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$2,300,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Dillon Dube</td><td>AB</td><td>C/RW</td><td>21</td><td>1998-07-19</td><td>183 Lbs</td><td>5 ft11</td><td>0</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>$910,833</td><td>$910,833</td><td>$910,833</td><td></td><td></td></tr>
<tr><td>Emile Poirier</td><td>QUE</td><td>LW/RW</td><td>25</td><td>1994-12-14</td><td>196 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$863,333</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Ian Scott</td><td>ALB</td><td>G</td><td>21</td><td>1999-01-11</td><td>168 Lbs</td><td>6 ft5</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$820,000</td><td>$820,000</td><td></td><td></td><td></td></tr>
<tr><td>Jake Guentzel</td><td>USA</td><td>LW/RW</td><td>25</td><td>1994-10-06</td><td>180 Lbs</td><td>5 ft11</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$925,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Jake Muzzin</td><td>ONT</td><td>D</td><td>31</td><td>1989-02-20</td><td>213 Lbs</td><td>6 ft3</td><td>32</td><td>No</td><td>5 years</td><td>Pro &amp; Farm</td><td>No</td><td>$8,000,000</td><td>$8,000,000</td><td>$8,000,000</td><td>$8,000,000</td><td>$8,000,000</td></tr>
<tr><td>Jay Beagle</td><td>AB</td><td>C</td><td>34</td><td>1985-10-16</td><td>218 Lbs</td><td>6 ft3</td><td>0</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>$3,000,000</td><td>$3,000,000</td><td>$3,000,000</td><td></td><td></td></tr>
<tr><td>Johnny Gaudreau</td><td>USA</td><td>LW</td><td>26</td><td>1993-08-13</td><td>157 Lbs</td><td>5 ft9</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$7,250,000</td><td>$7,250,000</td><td></td><td></td><td></td></tr>
<tr><td>Josh Morrissey</td><td>AB</td><td>D</td><td>25</td><td>1995-03-28</td><td>195 Lbs</td><td>6 ft0</td><td>63</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$1,363,333</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Kenny Agostino</td><td>USA</td><td>LW</td><td>27</td><td>1992-04-30</td><td>200 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$700,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Luke Schenn</td><td>SKW</td><td>D</td><td>30</td><td>1989-11-01</td><td>229 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$2,500,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Marc Methot</td><td>ONT</td><td>D</td><td>34</td><td>1985-06-21</td><td>233 Lbs</td><td>6 ft4</td><td>86</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$4,500,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Mark Jankowski</td><td>ONT</td><td>C</td><td>25</td><td>1994-09-13</td><td>202 Lbs</td><td>6 ft4</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$1,493,750</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Martin Marincin</td><td>CZE</td><td>D</td><td>28</td><td>1992-02-18</td><td>210 Lbs</td><td>6 ft4</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$925,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Mattias Janmark</td><td>SWE</td><td>C/LW</td><td>27</td><td>1992-12-08</td><td>196 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$2,000,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Mike Smith</td><td>ONT</td><td>G</td><td>38</td><td>1982-03-21</td><td>215 Lbs</td><td>6 ft4</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$5,800,000</td><td>$5,800,000</td><td></td><td></td><td></td></tr>
<tr><td>Morgan Klimchuk</td><td>SKW</td><td>LW</td><td>25</td><td>1995-03-01</td><td>185 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$863,333</td><td>$863,333</td><td></td><td></td><td></td></tr>
<tr><td>Morgan Rielly</td><td>BC</td><td>D</td><td>26</td><td>1994-03-09</td><td>217 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>$5,500,000</td><td>$5,500,000</td><td>$5,500,000</td><td></td><td></td></tr>
<tr><td>Nazem Kadri</td><td>ONT</td><td>C/LW</td><td>29</td><td>1990-10-06</td><td>190 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>4 years</td><td>Pro &amp; Farm</td><td>No</td><td>$6,100,000</td><td>$6,100,000</td><td>$6,100,000</td><td>$6,100,000</td><td></td></tr>
<tr><td>Nicolas Kerdiles</td><td>USA</td><td>C/LW/RW</td><td>26</td><td>1994-01-11</td><td>191 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$750,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Ryan Murray</td><td>SKW</td><td>D</td><td>26</td><td>1993-09-26</td><td>205 Lbs</td><td>6 ft1</td><td>21</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$4,600,000</td><td>$4,600,000</td><td></td><td></td><td></td></tr>
<tr><td>Sean Monahan</td><td>ONT</td><td>C</td><td>25</td><td>1994-10-11</td><td>195 Lbs</td><td>6 ft3</td><td>0</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>$6,375,000</td><td>$6,375,000</td><td>$6,375,000</td><td></td><td></td></tr>
<tr><td>Travis Zajac</td><td>MB</td><td>C</td><td>34</td><td>1985-05-13</td><td>185 Lbs</td><td>6 ft2</td><td>19</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$6,000,000</td><td>$6,000,000</td><td></td><td></td><td></td></tr>
<tr><td>Trent Frederic</td><td>USA</td><td>C</td><td>22</td><td>1998-02-11</td><td>203 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>$1,137,500</td><td>$1,137,500</td><td>$1,137,500</td><td></td><td></td></tr>
<tr><td>Trevor Moore</td><td>USA</td><td>LW</td><td>25</td><td>1995-03-31</td><td>170 Lbs</td><td>5 ft9</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$650,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Tristan Jarry</td><td>BC</td><td>G</td><td>24</td><td>1995-04-25</td><td>194 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$905,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Tyler Bertuzzi</td><td>ONT</td><td>LW/RW</td><td>25</td><td>1995-02-23</td><td>190 Lbs</td><td>6 ft0</td><td>23</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$910,833</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Warren Foegele</td><td>ONT</td><td>LW/RW</td><td>24</td><td>1996-04-01</td><td>190 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$800,000</td><td>$800,000</td><td></td><td></td><td></td></tr>
<tr><td>Zach Aston-Reese</td><td>USA</td><td>LW/RW</td><td>25</td><td>1994-08-10</td><td>204 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$925,000</td><td>$925,000</td><td></td><td></td><td></td></tr>
<tr><td>Zach Senyshyn</td><td>ONT</td><td>RW</td><td>23</td><td>1997-03-30</td><td>192 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>$1,288,000</td><td>$1,288,000</td><td>$1,288,000</td><td></td><td></td></tr>
</table><br />
<table class="basictablesorter"><tr>
<td class="STHSW100">Total Players</td><td class="STHSW100">Average Age</td><td class="STHSW120">Average Weight</td><td class="STHSW120">Average Height</td><td class="STHSW120">Average Contract</td><td class="STHSW120">Average Salary</td><td class="STHSW140">Players who can play<br />both Pro and Farm </td><td class="STHSW140">Players who can play<br />Pro Only</td><td class="STHSW140">Players who can play<br />Farm Only</td></tr>
<tr><td>36</td><td>26.6</td><td>198 Lbs</td><td>6 ft 1</td><td>1.86 years</td><td>$2,657,757</td>
<td>36</td><td>0</td><td>0</td></tr></table></div>
<h1 class="TeamPlayerInfoPro_CGY"><a id="Flames">Flames</a></h1>
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
<table class="basictablesorter"><thead><tr>
<th class="STHSW200">Player Name</th><th class="STHSW25">CNT</th><th class="STHSW65">PO</th><th class="STHSW25">Age</th><th class="STHSW65">Birthday</th><th class="STHSW65">Weight</th><th class="STHSW55">Height</th><th class="STHSW45">Health<br /># Loss</th><th class="STHSW45">Force<br />Waiver</th><th class="STHSW65">Contract</th><th class="STHSW100">Type</th><th class="STHSW75">One Way<br />Contract</th><th class="STHSW85">Salary #1</th><th class="STHSW85">Salary #2</th><th class="STHSW85">Salary #3</th><th class="STHSW85">Salary #4</th><th class="STHSW85">Salary #5</th></tr></thead>
<tr><td>Adam Lowry</td><td>USA</td><td>C</td><td>27</td><td>1993-03-28</td><td>210 Lbs</td><td>6 ft6</td><td>23</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$2,900,000</td><td>$2,900,000</td><td></td><td></td><td></td></tr>
<tr><td>Alex Stalock</td><td>USA</td><td>G</td><td>32</td><td>1987-07-28</td><td>198 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$1,250,000</td><td>$1,250,000</td><td></td><td></td><td></td></tr>
<tr><td>Andre Burakovsky</td><td>AUS</td><td>LW/RW</td><td>25</td><td>1995-02-09</td><td>201 Lbs</td><td>6 ft3</td><td>12</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$800,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Austin Watson</td><td>USA</td><td>C/RW</td><td>28</td><td>1992-01-12</td><td>204 Lbs</td><td>6 ft4</td><td>0</td><td>No</td><td>4 years</td><td>Pro &amp; Farm</td><td>No</td><td>$1,650,000</td><td>$1,650,000</td><td>$1,650,000</td><td>$1,650,000</td><td></td></tr>
<tr><td>Blake Hillman</td><td>USA</td><td>D</td><td>24</td><td>1996-01-26</td><td>181 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$925,000</td><td>$925,000</td><td></td><td></td><td></td></tr>
<tr><td>Bo Horvat</td><td>ONT</td><td>C</td><td>25</td><td>1995-04-05</td><td>223 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$5,500,000</td><td>$5,500,000</td><td></td><td></td><td></td></tr>
<tr><td>Brad Malone</td><td>NB</td><td>C/LW</td><td>30</td><td>1989-05-20</td><td>207 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>$650,000</td><td>$650,000</td><td>$650,000</td><td></td><td></td></tr>
<tr><td>Brady Skjei</td><td>USA</td><td>D</td><td>26</td><td>1994-03-26</td><td>211 Lbs</td><td>6 ft3</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$925,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Casey DeSmith</td><td>USA</td><td>G</td><td>28</td><td>1991-08-12</td><td>181 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$1,150,000</td><td>$1,150,000</td><td></td><td></td><td></td></tr>
<tr><td>Christoffer Ehn</td><td>SWE</td><td>C/LW/RW</td><td>24</td><td>1996-04-05</td><td>181 Lbs</td><td>6 ft3</td><td>0</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>$925,000</td><td>$925,000</td><td>$925,000</td><td></td><td></td></tr>
<tr><td>David Perron</td><td>QUE</td><td>LW/RW</td><td>31</td><td>1988-05-28</td><td>200 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>$4,500,000</td><td>$4,500,000</td><td>$4,500,000</td><td></td><td></td></tr>
<tr><td>Devon Toews</td><td>BC</td><td>D</td><td>26</td><td>1994-02-20</td><td>181 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>$1,031,250</td><td>$1,031,250</td><td>$1,031,250</td><td></td><td></td></tr>
<tr><td>Dylan Larkin</td><td>USA</td><td>C</td><td>23</td><td>1996-07-30</td><td>198 Lbs</td><td>6 ft1</td><td>24</td><td>No</td><td>4 years</td><td>Pro &amp; Farm</td><td>No</td><td>$6,100,000</td><td>$6,100,000</td><td>$6,100,000</td><td>$6,100,000</td><td></td></tr>
<tr><td>Erik Karlsson</td><td>SWE</td><td>D</td><td>29</td><td>1990-05-31</td><td>191 Lbs</td><td>6 ft0</td><td>12</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>$9,200,000</td><td>$9,200,000</td><td>$9,200,000</td><td></td><td></td></tr>
<tr><td>Garnet Hathaway</td><td>USA</td><td>LW/RW</td><td>28</td><td>1991-11-23</td><td>208 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$925,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Jaccob Slavin</td><td>USA</td><td>D</td><td>25</td><td>1994-05-01</td><td>205 Lbs</td><td>6 ft3</td><td>0</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>$5,000,000</td><td>$5,000,000</td><td>$5,000,000</td><td></td><td></td></tr>
<tr><td>Jack Roslovic</td><td>USA</td><td>C/RW</td><td>23</td><td>1997-01-28</td><td>187 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$1,106,666</td><td>$1,106,666</td><td></td><td></td><td></td></tr>
<tr><td>Jonathon Merrill</td><td>USA</td><td>D</td><td>28</td><td>1992-02-03</td><td>205 Lbs</td><td>6 ft3</td><td>17</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$850,000</td><td>$850,000</td><td></td><td></td><td></td></tr>
<tr><td>Jordan Subban</td><td>ONT</td><td>D</td><td>25</td><td>1995-03-03</td><td>175 Lbs</td><td>5 ft9</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$755,000</td><td>$755,000</td><td></td><td></td><td></td></tr>
<tr><td>Kevin Labanc</td><td>USA</td><td>LW/RW</td><td>24</td><td>1995-12-12</td><td>185 Lbs</td><td>5 ft11</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$925,000</td><td>$925,000</td><td></td><td></td><td></td></tr>
<tr><td>Kyle Rau</td><td>USA</td><td>C/LW</td><td>27</td><td>1992-10-24</td><td>176 Lbs</td><td>5 ft8</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$700,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Markus Granlund</td><td>FIN</td><td>C/LW/RW</td><td>27</td><td>1993-04-15</td><td>183 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$1,475,000</td><td>$1,475,000</td><td></td><td></td><td></td></tr>
<tr><td>Matthew Highmore</td><td>NS</td><td>LW/RW</td><td>24</td><td>1996-02-27</td><td>181 Lbs</td><td>5 ft11</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$925,000</td><td>$925,000</td><td></td><td></td><td></td></tr>
<tr><td>Oscar Dansk</td><td>SWE</td><td>G</td><td>26</td><td>1994-02-28</td><td>195 Lbs</td><td>6 ft3</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$925,000</td><td>$925,000</td><td></td><td></td><td></td></tr>
<tr><td>Pekka Rinne</td><td>FIN</td><td>G</td><td>37</td><td>1982-11-02</td><td>217 Lbs</td><td>6 ft5</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$7,000,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Phillip Danault</td><td>QUE</td><td>C</td><td>27</td><td>1993-02-24</td><td>195 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$3,300,000</td><td>$3,300,000</td><td></td><td></td><td></td></tr>
<tr><td>Radko Gudas</td><td>CZE</td><td>D</td><td>29</td><td>1990-06-04</td><td>204 Lbs</td><td>6 ft0</td><td>15</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$3,250,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Roman Polak</td><td>CZE</td><td>D</td><td>33</td><td>1986-04-28</td><td>235 Lbs</td><td>6 ft2</td><td>26</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$4,250,000</td><td>$4,250,000</td><td></td><td></td><td></td></tr>
<tr><td>Samuel Morin</td><td>QUE</td><td>D</td><td>24</td><td>1995-07-11</td><td>202 Lbs</td><td>6 ft6</td><td>0</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>$1,363,333</td><td>$1,363,333</td><td>$1,363,333</td><td></td><td></td></tr>
<tr><td>Steven Santini</td><td>USA</td><td>D</td><td>25</td><td>1995-03-07</td><td>205 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$925,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Taro Hirose</td><td>CAN</td><td>LW</td><td>23</td><td>1996-06-30</td><td>161 Lbs</td><td>5 ft10</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$925,000</td><td>$925,000</td><td></td><td></td><td></td></tr>
<tr><td>Taylor Hall</td><td>AB</td><td>LW</td><td>28</td><td>1991-11-13</td><td>205 Lbs</td><td>6 ft1</td><td>29</td><td>No</td><td>5 years</td><td>Pro &amp; Farm</td><td>No</td><td>$8,750,000</td><td>$8,750,000</td><td>$8,750,000</td><td>$8,750,000</td><td>$8,750,000</td></tr>
<tr><td>Tom Wilson</td><td>ONT</td><td>RW</td><td>26</td><td>1994-03-29</td><td>218 Lbs</td><td>6 ft4</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$2,500,000</td><td>$2,500,000</td><td></td><td></td><td></td></tr>
<tr><td>Tyrell Goulbourne</td><td>AB</td><td>LW/RW</td><td>26</td><td>1994-01-25</td><td>195 Lbs</td><td>5 ft11</td><td>0</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>$773,333</td><td>$773,333</td><td>$773,333</td><td></td><td></td></tr>
<tr><td>Viktor Arvidsson</td><td>SWE</td><td>LW/RW</td><td>27</td><td>1993-04-07</td><td>180 Lbs</td><td>5 ft9</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$4,500,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Vinni Lettieri</td><td>USA</td><td>C/RW</td><td>25</td><td>1995-02-06</td><td>195 Lbs</td><td>5 ft11</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$925,000</td><td>$925,000</td><td></td><td></td><td></td></tr>
</table><br />
<table class="basictablesorter"><tr>
<td class="STHSW100">Total Players</td><td class="STHSW100">Average Age</td><td class="STHSW120">Average Weight</td><td class="STHSW120">Average Height</td><td class="STHSW120">Average Contract</td><td class="STHSW120">Average Salary</td><td class="STHSW140">Players who can play<br />both Pro and Farm </td><td class="STHSW140">Players who can play<br />Pro Only</td><td class="STHSW140">Players who can play<br />Farm Only</td></tr>
<tr><td>36</td><td>26.8</td><td>197 Lbs</td><td>6 ft 1</td><td>2.19 years</td><td>$2,487,627</td>
<td>36</td><td>0</td><td>0</td></tr></table></div>
<h1 class="TeamPlayerInfoPro_PHL"><a id="Flyers">Flyers</a></h1>
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
<table class="basictablesorter"><thead><tr>
<th class="STHSW200">Player Name</th><th class="STHSW25">CNT</th><th class="STHSW65">PO</th><th class="STHSW25">Age</th><th class="STHSW65">Birthday</th><th class="STHSW65">Weight</th><th class="STHSW55">Height</th><th class="STHSW45">Health<br /># Loss</th><th class="STHSW45">Force<br />Waiver</th><th class="STHSW65">Contract</th><th class="STHSW100">Type</th><th class="STHSW75">One Way<br />Contract</th><th class="STHSW85">Salary #1</th><th class="STHSW85">Salary #2</th><th class="STHSW85">Salary #3</th><th class="STHSW85">Salary #4</th><th class="STHSW85">Salary #5</th></tr></thead>
<tr><td>Alex Broadhurst</td><td>USA</td><td>C</td><td>27</td><td>1993-03-06</td><td>178 Lbs</td><td>5 ft10</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$850,000</td><td>$850,000</td><td></td><td></td><td></td></tr>
<tr><td>Alexander Edler</td><td>SWE</td><td>D</td><td>33</td><td>1986-04-21</td><td>214 Lbs</td><td>6 ft3</td><td>36</td><td>No</td><td>4 years</td><td>Pro &amp; Farm</td><td>No</td><td>$7,000,000</td><td>$7,000,000</td><td>$7,000,000</td><td>$7,000,000</td><td></td></tr>
<tr><td>Andrew Shaw</td><td>ONT</td><td>C/RW</td><td>29</td><td>1990-07-20</td><td>182 Lbs</td><td>5 ft9</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$3,700,000</td><td>$3,700,000</td><td></td><td></td><td></td></tr>
<tr><td>Brandon Saad</td><td>USA</td><td>LW/RW</td><td>27</td><td>1992-10-26</td><td>206 Lbs</td><td>6 ft1</td><td>23</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$5,500,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Brett Connolly</td><td>BC</td><td>LW/RW</td><td>27</td><td>1992-05-02</td><td>195 Lbs</td><td>6 ft3</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$1,800,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Brian Gibbons</td><td>USA</td><td>C/LW</td><td>32</td><td>1988-02-05</td><td>175 Lbs</td><td>5 ft8</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$3,000,000</td><td>$3,000,000</td><td></td><td></td><td></td></tr>
<tr><td>Brock Nelson</td><td>USA</td><td>C/LW</td><td>28</td><td>1991-10-14</td><td>212 Lbs</td><td>6 ft3</td><td>2</td><td>No</td><td>5 years</td><td>Pro &amp; Farm</td><td>No</td><td>$6,000,000</td><td>$6,000,000</td><td>$6,000,000</td><td>$6,000,000</td><td>$6,000,000</td></tr>
<tr><td>Cam Atkinson</td><td>USA</td><td>RW</td><td>30</td><td>1989-06-05</td><td>179 Lbs</td><td>5 ft8</td><td>16</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>$5,900,000</td><td>$5,900,000</td><td>$5,900,000</td><td></td><td></td></tr>
<tr><td>Cameron Gaunce</td><td>ONT</td><td>D</td><td>30</td><td>1990-03-19</td><td>204 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$845,833</td><td>$845,833</td><td></td><td></td><td></td></tr>
<tr><td>Dillon Simpson</td><td>AB</td><td>D</td><td>27</td><td>1993-02-09</td><td>194 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$750,000</td><td>$750,000</td><td></td><td></td><td></td></tr>
<tr><td>Ilya Kovalchuk</td><td>RUS</td><td>LW/RW</td><td>37</td><td>1983-04-14</td><td>230 Lbs</td><td>6 ft3</td><td>11</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>$6,250,000</td><td>$6,250,000</td><td>$6,250,000</td><td></td><td></td></tr>
<tr><td>Jake Gardiner</td><td>USA</td><td>D</td><td>29</td><td>1990-07-04</td><td>200 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$5,000,000</td><td>$5,000,000</td><td></td><td></td><td></td></tr>
<tr><td>Jaroslav Halak</td><td>SVK</td><td>G</td><td>34</td><td>1985-05-13</td><td>183 Lbs</td><td>5 ft11</td><td>2</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$4,500,000</td><td>$4,500,000</td><td></td><td></td><td></td></tr>
<tr><td>Joel Eriksson Ek</td><td>SWE</td><td>C/LW/RW</td><td>23</td><td>1997-01-29</td><td>206 Lbs</td><td>6 ft2</td><td>59</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$1,106,667</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Jonas Brodin</td><td>SWE</td><td>D</td><td>26</td><td>1993-07-12</td><td>194 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$4,200,000</td><td>$4,200,000</td><td></td><td></td><td></td></tr>
<tr><td>Jonathan Ericsson</td><td>SWE</td><td>D</td><td>36</td><td>1984-03-02</td><td>220 Lbs</td><td>6 ft4</td><td>8</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>$3,000,000</td><td>$3,000,000</td><td>$3,000,000</td><td></td><td></td></tr>
<tr><td>Joseph Morrow</td><td>AB</td><td>D</td><td>27</td><td>1992-12-09</td><td>196 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$1,000,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Josh Leivo</td><td>ONT</td><td>LW/RW</td><td>26</td><td>1993-05-26</td><td>210 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$1,500,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Justin Kloos</td><td>USA</td><td>C/RW</td><td>26</td><td>1993-11-30</td><td>180 Lbs</td><td>5 ft9</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$975,000</td><td>$975,000</td><td></td><td></td><td></td></tr>
<tr><td>Justin Williams</td><td>SKW</td><td>RW</td><td>38</td><td>1981-10-04</td><td>188 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$6,000,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Kailer Yamamoto</td><td>USA</td><td>RW</td><td>21</td><td>1998-09-29</td><td>153 Lbs</td><td>5 ft8</td><td>0</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>$1,124,166</td><td>$1,124,166</td><td>$1,124,166</td><td></td><td></td></tr>
<tr><td>Keith Yandle</td><td>USA</td><td>D</td><td>33</td><td>1986-09-09</td><td>196 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>4 years</td><td>Pro &amp; Farm</td><td>No</td><td>$6,350,000</td><td>$6,350,000</td><td>$6,350,000</td><td>$6,350,000</td><td></td></tr>
<tr><td>Marco Scandella</td><td>QUE</td><td>D</td><td>30</td><td>1990-02-22</td><td>208 Lbs</td><td>6 ft3</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$4,250,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Mark Pysyk</td><td>AB</td><td>LW/RW/D</td><td>28</td><td>1992-01-11</td><td>200 Lbs</td><td>6 ft1</td><td>14</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$2,700,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Max Domi</td><td>MB</td><td>C/LW</td><td>25</td><td>1995-03-01</td><td>195 Lbs</td><td>5 ft10</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$4,250,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Maxime Comtois</td><td>QUE</td><td>LW/RW</td><td>21</td><td>1999-01-07</td><td>200 Lbs</td><td>6 ft2</td><td>6</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>$925,000</td><td>$925,000</td><td>$925,000</td><td></td><td></td></tr>
<tr><td>Mikko Koskinen</td><td>FIN</td><td>G</td><td>31</td><td>1988-07-17</td><td>209 Lbs</td><td>6 ft7</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$2,500,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Pierre-Luc Dubois</td><td>CAN</td><td>C/LW</td><td>21</td><td>1998-06-24</td><td>207 Lbs</td><td>6 ft3</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$3,394,166</td><td>$3,394,166</td><td></td><td></td><td></td></tr>
<tr><td>Rasmus Dahlin</td><td>SWE</td><td>D</td><td>20</td><td>2000-04-12</td><td>185 Lbs</td><td>6 ft3</td><td>0</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>$3,775,000</td><td>$3,775,000</td><td>$3,775,000</td><td></td><td></td></tr>
<tr><td>Ryan Miller</td><td>USA</td><td>G</td><td>39</td><td>1980-07-17</td><td>173 Lbs</td><td>6 ft3</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$5,000,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Ryan Strome</td><td>ONT</td><td>C/LW/RW</td><td>26</td><td>1993-07-11</td><td>194 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$3,100,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Sven Baertschi</td><td>SWI</td><td>LW</td><td>27</td><td>1992-10-05</td><td>192 Lbs</td><td>5 ft11</td><td>38</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$3,400,000</td><td></td><td></td><td></td><td></td></tr>
</table><br />
<table class="basictablesorter"><tr>
<td class="STHSW100">Total Players</td><td class="STHSW100">Average Age</td><td class="STHSW120">Average Weight</td><td class="STHSW120">Average Height</td><td class="STHSW120">Average Contract</td><td class="STHSW120">Average Salary</td><td class="STHSW140">Players who can play<br />both Pro and Farm </td><td class="STHSW140">Players who can play<br />Pro Only</td><td class="STHSW140">Players who can play<br />Farm Only</td></tr>
<tr><td>32</td><td>28.6</td><td>196 Lbs</td><td>6 ft 1</td><td>2.00 years</td><td>$3,426,432</td>
<td>32</td><td>0</td><td>0</td></tr></table></div>
<h1 class="TeamPlayerInfoPro_VGK"><a id="GoldenKnights">Golden Knights</a></h1>
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
<table class="basictablesorter"><thead><tr>
<th class="STHSW200">Player Name</th><th class="STHSW25">CNT</th><th class="STHSW65">PO</th><th class="STHSW25">Age</th><th class="STHSW65">Birthday</th><th class="STHSW65">Weight</th><th class="STHSW55">Height</th><th class="STHSW45">Health<br /># Loss</th><th class="STHSW45">Force<br />Waiver</th><th class="STHSW65">Contract</th><th class="STHSW100">Type</th><th class="STHSW75">One Way<br />Contract</th><th class="STHSW85">Salary #1</th><th class="STHSW85">Salary #2</th><th class="STHSW85">Salary #3</th><th class="STHSW85">Salary #4</th><th class="STHSW85">Salary #5</th></tr></thead>
<tr><td>Adin Hill</td><td>AB</td><td>G</td><td>23</td><td>1996-05-11</td><td>202 Lbs</td><td>6 ft6</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$925,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Alex Goligoski</td><td>USA</td><td>D</td><td>34</td><td>1985-07-29</td><td>185 Lbs</td><td>5 ft11</td><td>25</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$6,500,000</td><td>$6,500,000</td><td></td><td></td><td></td></tr>
<tr><td>Andrei Svechnikov</td><td>RUS</td><td>LW/RW</td><td>20</td><td>2000-03-26</td><td>188 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>$3,575,000</td><td>$3,575,000</td><td>$3,575,000</td><td></td><td></td></tr>
<tr><td>Colton Sissons</td><td>BC</td><td>C/LW/RW</td><td>26</td><td>1993-11-05</td><td>200 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>5 years</td><td>Pro &amp; Farm</td><td>No</td><td>$2,975,000</td><td>$2,975,000</td><td>$2,975,000</td><td>$2,975,000</td><td>$2,975,000</td></tr>
<tr><td>Colton White</td><td>ONT</td><td>D</td><td>22</td><td>1997-05-03</td><td>185 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>$935,833</td><td>$935,833</td><td>$935,833</td><td></td><td></td></tr>
<tr><td>Craig Smith</td><td>USA</td><td>LW/RW</td><td>30</td><td>1989-09-05</td><td>208 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>$4,000,000</td><td>$4,000,000</td><td>$4,000,000</td><td></td><td></td></tr>
<tr><td>Daniel Brickley</td><td>USA</td><td>D</td><td>25</td><td>1995-03-30</td><td>205 Lbs</td><td>6 ft3</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$925,000</td><td>$925,000</td><td></td><td></td><td></td></tr>
<tr><td>David Warsofsky</td><td>USA</td><td>D</td><td>29</td><td>1990-05-30</td><td>170 Lbs</td><td>5 ft9</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$675,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Dominic Turgeon</td><td>QUE</td><td>C/LW</td><td>24</td><td>1996-02-24</td><td>196 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$919,167</td><td>$919,167</td><td></td><td></td><td></td></tr>
<tr><td>Drake Batherson</td><td>USA</td><td>C/RW</td><td>21</td><td>1998-04-26</td><td>187 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>$773,333</td><td>$773,333</td><td>$773,333</td><td></td><td></td></tr>
<tr><td>Dryden Hunt</td><td>BC</td><td>LW/RW</td><td>24</td><td>1995-11-24</td><td>197 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$925,000</td><td>$925,000</td><td></td><td></td><td></td></tr>
<tr><td>Henri Jokiharju</td><td>FIN</td><td>D</td><td>20</td><td>1999-06-17</td><td>180 Lbs</td><td>6 ft0</td><td>3</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>$1,279,166</td><td>$1,279,166</td><td>$1,279,166</td><td></td><td></td></tr>
<tr><td>Jacob de La Rose</td><td>SWE</td><td>C/LW</td><td>24</td><td>1995-05-19</td><td>210 Lbs</td><td>6 ft3</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$900,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Joel Hanley</td><td>ONT</td><td>D</td><td>28</td><td>1991-06-08</td><td>193 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$900,000</td><td>$900,000</td><td></td><td></td><td></td></tr>
<tr><td>John Gilmour</td><td>QUE</td><td>D</td><td>26</td><td>1993-05-17</td><td>195 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$800,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Johnny Boychuk</td><td>AB</td><td>D</td><td>36</td><td>1984-01-19</td><td>227 Lbs</td><td>6 ft2</td><td>11</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$4,000,000</td><td>$4,000,000</td><td></td><td></td><td></td></tr>
<tr><td>Jon Gillies</td><td>USA</td><td>G</td><td>26</td><td>1994-01-21</td><td>223 Lbs</td><td>6 ft6</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$925,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Jordan Eberle</td><td>SKW</td><td>RW</td><td>29</td><td>1990-05-15</td><td>187 Lbs</td><td>5 ft11</td><td>5</td><td>No</td><td>6 years</td><td>Pro &amp; Farm</td><td>No</td><td>$5,750,000</td><td>$5,750,000</td><td>$5,750,000</td><td>$5,750,000</td><td>$5,750,000</td></tr>
<tr><td>Juuso Valimaki</td><td>FIN</td><td>D</td><td>21</td><td>1998-10-06</td><td>204 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>$1,319,166</td><td>$1,319,166</td><td>$1,319,166</td><td></td><td></td></tr>
<tr><td>Lias Andersson</td><td>SWE</td><td>C/LW</td><td>21</td><td>1998-10-13</td><td>198 Lbs</td><td>5 ft11</td><td>0</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>$1,775,000</td><td>$1,775,000</td><td>$1,775,000</td><td></td><td></td></tr>
<tr><td>MacKenzie Blackwood</td><td>ONT</td><td>G</td><td>23</td><td>1996-12-08</td><td>225 Lbs</td><td>6 ft4</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$913,333</td><td>$913,333</td><td></td><td></td><td></td></tr>
<tr><td>Marcus Sorensen</td><td>SWE</td><td>LW/RW</td><td>28</td><td>1992-04-07</td><td>175 Lbs</td><td>5 ft11</td><td>7</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$1,350,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Milan Lucic</td><td>BC</td><td>LW</td><td>31</td><td>1988-06-06</td><td>236 Lbs</td><td>6 ft3</td><td>17</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$2,250,000</td><td>$2,250,000</td><td></td><td></td><td></td></tr>
<tr><td>Nicholas Baptiste</td><td>ONT</td><td>RW</td><td>24</td><td>1995-08-04</td><td>206 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$800,000</td><td>$800,000</td><td></td><td></td><td></td></tr>
<tr><td>Nicklas Backstrom</td><td>SWE</td><td>C</td><td>32</td><td>1987-11-23</td><td>210 Lbs</td><td>6 ft1</td><td>13</td><td>No</td><td>4 years</td><td>Pro &amp; Farm</td><td>No</td><td>$9,500,000</td><td>$9,500,000</td><td>$9,500,000</td><td>$9,500,000</td><td></td></tr>
<tr><td>Nolan Patrick</td><td>MB</td><td>C</td><td>21</td><td>1998-09-19</td><td>198 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$3,575,000</td><td>$3,575,000</td><td></td><td></td><td></td></tr>
<tr><td>Scott Laughton</td><td>ONT</td><td>C/LW</td><td>25</td><td>1994-05-29</td><td>190 Lbs</td><td>6 ft1</td><td>16</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$2,300,000</td><td>$2,300,000</td><td></td><td></td><td></td></tr>
<tr><td>Travis Sanheim</td><td>MB</td><td>D</td><td>24</td><td>1996-03-28</td><td>181 Lbs</td><td>6 ft3</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$1,263,333</td><td>$1,263,333</td><td></td><td></td><td></td></tr>
</table><br />
<table class="basictablesorter"><tr>
<td class="STHSW100">Total Players</td><td class="STHSW100">Average Age</td><td class="STHSW120">Average Weight</td><td class="STHSW120">Average Height</td><td class="STHSW120">Average Contract</td><td class="STHSW120">Average Salary</td><td class="STHSW140">Players who can play<br />both Pro and Farm </td><td class="STHSW140">Players who can play<br />Pro Only</td><td class="STHSW140">Players who can play<br />Farm Only</td></tr>
<tr><td>28</td><td>25.6</td><td>199 Lbs</td><td>6 ft 1</td><td>2.36 years</td><td>$2,240,298</td>
<td>28</td><td>0</td><td>0</td></tr></table></div>
<h1 class="TeamPlayerInfoPro_CAR"><a id="Hurricanes">Hurricanes</a></h1>
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
<table class="basictablesorter"><thead><tr>
<th class="STHSW200">Player Name</th><th class="STHSW25">CNT</th><th class="STHSW65">PO</th><th class="STHSW25">Age</th><th class="STHSW65">Birthday</th><th class="STHSW65">Weight</th><th class="STHSW55">Height</th><th class="STHSW45">Health<br /># Loss</th><th class="STHSW45">Force<br />Waiver</th><th class="STHSW65">Contract</th><th class="STHSW100">Type</th><th class="STHSW75">One Way<br />Contract</th><th class="STHSW85">Salary #1</th><th class="STHSW85">Salary #2</th><th class="STHSW85">Salary #3</th><th class="STHSW85">Salary #4</th><th class="STHSW85">Salary #5</th></tr></thead>
<tr><td>Aleksi Saarela</td><td>FIN</td><td>C</td><td>23</td><td>1997-01-07</td><td>198 Lbs</td><td>5 ft11</td><td>0</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>$925,000</td><td>$925,000</td><td>$925,000</td><td></td><td></td></tr>
<tr><td>Andy Andreoff</td><td>ONT</td><td>C/LW</td><td>28</td><td>1991-05-17</td><td>203 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$850,000</td><td>$850,000</td><td></td><td></td><td></td></tr>
<tr><td>Bobby Ryan</td><td>USA</td><td>RW</td><td>33</td><td>1987-03-17</td><td>209 Lbs</td><td>6 ft2</td><td>15</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>$7,000,000</td><td>$7,000,000</td><td>$7,000,000</td><td></td><td></td></tr>
<tr><td>Boo Nieves</td><td>USA</td><td>C</td><td>26</td><td>1994-01-23</td><td>212 Lbs</td><td>6 ft3</td><td>14</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$925,000</td><td>$925,000</td><td></td><td></td><td></td></tr>
<tr><td>Brett Sutter</td><td>ALB</td><td>C/LW</td><td>32</td><td>1987-06-02</td><td>200 Lbs</td><td>6 ft0</td><td>16</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$2,000,000</td><td>$2,000,000</td><td></td><td></td><td></td></tr>
<tr><td>Casey Mittelstadt</td><td>USA</td><td>C/LW</td><td>21</td><td>1998-11-22</td><td>201 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>$1,491,666</td><td>$1,491,666</td><td>$1,491,666</td><td></td><td></td></tr>
<tr><td>Christian Djoos</td><td>SWE</td><td>D</td><td>25</td><td>1994-08-06</td><td>169 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$1,250,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Christian Jaros</td><td>SVK</td><td>D</td><td>24</td><td>1996-04-02</td><td>201 Lbs</td><td>6 ft3</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$801,667</td><td>$801,667</td><td></td><td></td><td></td></tr>
<tr><td>Dominik Kahun</td><td>CZE</td><td>C/LW/RW</td><td>24</td><td>1995-07-01</td><td>175 Lbs</td><td>5 ft9</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$925,000</td><td>$925,000</td><td></td><td></td><td></td></tr>
<tr><td>Drake Caggiula</td><td>ONT</td><td>LW/RW</td><td>25</td><td>1994-06-20</td><td>185 Lbs</td><td>5 ft10</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$3,775,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Dylan Sikura</td><td>ONT</td><td>C/LW/RW</td><td>24</td><td>1995-06-01</td><td>158 Lbs</td><td>5 ft11</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$1,387,500</td><td>$1,387,500</td><td></td><td></td><td></td></tr>
<tr><td>Evander Kane</td><td>BC</td><td>LW</td><td>28</td><td>1991-08-02</td><td>212 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>5 years</td><td>Pro &amp; Farm</td><td>No</td><td>$7,000,000</td><td>$7,000,000</td><td>$7,000,000</td><td>$7,000,000</td><td>$7,000,000</td></tr>
<tr><td>Filip Hronek</td><td>CZE</td><td>D</td><td>22</td><td>1997-11-02</td><td>163 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$925,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Ilya Lyubushkin</td><td>RUS</td><td>D</td><td>26</td><td>1994-04-06</td><td>209 Lbs</td><td>6 ft2</td><td>24</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>$985,000</td><td>$985,000</td><td>$985,000</td><td></td><td></td></tr>
<tr><td>Jakob Chychrun</td><td>USA</td><td>D</td><td>22</td><td>1998-03-30</td><td>210 Lbs</td><td>6 ft3</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$1,350,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>James Neal</td><td>ONT</td><td>LW/RW</td><td>32</td><td>1987-09-03</td><td>221 Lbs</td><td>6 ft2</td><td>1</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>$6,500,000</td><td>$6,500,000</td><td>$6,500,000</td><td></td><td></td></tr>
<tr><td>Jan Rutta</td><td>CZE</td><td>D</td><td>29</td><td>1990-07-29</td><td>200 Lbs</td><td>6 ft3</td><td>25</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$2,300,000</td><td>$2,300,000</td><td></td><td></td><td></td></tr>
<tr><td>Jesse Puljujarvi</td><td>FIN</td><td>RW</td><td>21</td><td>1998-05-07</td><td>211 Lbs</td><td>6 ft4</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$1,475,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Joakim Ryan</td><td>USA</td><td>D</td><td>26</td><td>1993-06-17</td><td>185 Lbs</td><td>5 ft11</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$750,000</td><td>$750,000</td><td></td><td></td><td></td></tr>
<tr><td>Jonathan Bernier</td><td>QUE</td><td>G</td><td>31</td><td>1988-08-07</td><td>184 Lbs</td><td>6 ft0</td><td>17</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$4,200,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Jordan Schmaltz</td><td>USA</td><td>D</td><td>26</td><td>1993-10-08</td><td>190 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$1,208,333</td><td>$1,208,333</td><td></td><td></td><td></td></tr>
<tr><td>Jordan Szwarz</td><td>ONT</td><td>C/RW</td><td>28</td><td>1991-05-13</td><td>200 Lbs</td><td>5 ft11</td><td>25</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$700,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Josh Mahura</td><td>AB</td><td>D</td><td>21</td><td>1998-05-05</td><td>178 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>$910,833</td><td>$910,833</td><td>$910,833</td><td></td><td></td></tr>
<tr><td>Kevin Boyle</td><td>USA</td><td>G</td><td>27</td><td>1992-05-29</td><td>200 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>4 years</td><td>Pro &amp; Farm</td><td>No</td><td>$975,000</td><td>$975,000</td><td>$975,000</td><td>$975,000</td><td></td></tr>
<tr><td>Kyle Clifford</td><td>ONT</td><td>LW</td><td>29</td><td>1991-01-13</td><td>211 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$1,500,000</td><td>$1,500,000</td><td></td><td></td><td></td></tr>
<tr><td>Marcus Pettersson</td><td>SWE</td><td>D</td><td>23</td><td>1996-05-08</td><td>180 Lbs</td><td>6 ft4</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$894,167</td><td>$894,167</td><td></td><td></td><td></td></tr>
<tr><td>Martin Jones</td><td>BC</td><td>G</td><td>30</td><td>1990-01-10</td><td>195 Lbs</td><td>6 ft4</td><td>0</td><td>No</td><td>4 years</td><td>Pro &amp; Farm</td><td>No</td><td>$6,000,000</td><td>$6,000,000</td><td>$6,000,000</td><td>$6,000,000</td><td></td></tr>
<tr><td>Mathieu Perreault</td><td>QUE</td><td>C/LW/RW</td><td>32</td><td>1988-01-04</td><td>188 Lbs</td><td>5 ft10</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$4,500,000</td><td>$4,500,000</td><td></td><td></td><td></td></tr>
<tr><td>Michael Mersch</td><td>USA</td><td>LW</td><td>27</td><td>1992-10-02</td><td>213 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$875,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Nathan Gerbe</td><td>USA</td><td>LW/RW</td><td>32</td><td>1987-07-24</td><td>178 Lbs</td><td>5 ft5</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$800,000</td><td>$800,000</td><td></td><td></td><td></td></tr>
<tr><td>Nick Paul</td><td>ONT</td><td>C/LW</td><td>25</td><td>1995-03-20</td><td>230 Lbs</td><td>6 ft4</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$900,000</td><td>$900,000</td><td></td><td></td><td></td></tr>
<tr><td>Oliver Kylington</td><td>SWE</td><td>D</td><td>22</td><td>1997-05-19</td><td>183 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$863,333</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Paul Stastny</td><td>QUE</td><td>C</td><td>34</td><td>1985-12-27</td><td>193 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>4 years</td><td>Pro &amp; Farm</td><td>No</td><td>$6,500,000</td><td>$6,500,000</td><td>$6,500,000</td><td>$6,500,000</td><td></td></tr>
<tr><td>Pavel Francouz</td><td>CZE</td><td>G</td><td>29</td><td>1990-06-02</td><td>172 Lbs</td><td>6 ft0</td><td>5</td><td>No</td><td>4 years</td><td>Pro &amp; Farm</td><td>No</td><td>$1,100,000</td><td>$1,100,000</td><td>$1,100,000</td><td>$1,100,000</td><td></td></tr>
<tr><td>Pontus Aberg</td><td>SWE</td><td>LW/RW</td><td>26</td><td>1993-09-22</td><td>196 Lbs</td><td>5 ft11</td><td>4</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$1,000,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Rasmus Andersson</td><td>SWE</td><td>D</td><td>23</td><td>1996-10-26</td><td>214 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$863,333</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Rem Pitlick</td><td>USA</td><td>C/LW/RW</td><td>22</td><td>1997-04-21</td><td>196 Lbs</td><td>5 ft11</td><td>0</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>$925,000</td><td>$925,000</td><td>$925,000</td><td></td><td></td></tr>
<tr><td>Riley Stillman</td><td>ONT</td><td>D</td><td>22</td><td>1998-03-08</td><td>190 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$773,333</td><td>$773,333</td><td></td><td></td><td></td></tr>
<tr><td>Ryan Hartman</td><td>USA</td><td>C/RW</td><td>25</td><td>1994-09-20</td><td>181 Lbs</td><td>6 ft0</td><td>4</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$863,333</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Tucker Poolman</td><td>USA</td><td>D</td><td>26</td><td>1993-06-08</td><td>199 Lbs</td><td>6 ft2</td><td>79</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$1,775,000</td><td>$1,775,000</td><td></td><td></td><td></td></tr>
</table><br />
<table class="basictablesorter"><tr>
<td class="STHSW100">Total Players</td><td class="STHSW100">Average Age</td><td class="STHSW120">Average Weight</td><td class="STHSW120">Average Height</td><td class="STHSW120">Average Contract</td><td class="STHSW120">Average Salary</td><td class="STHSW140">Players who can play<br />both Pro and Farm </td><td class="STHSW140">Players who can play<br />Pro Only</td><td class="STHSW140">Players who can play<br />Farm Only</td></tr>
<tr><td>40</td><td>26.3</td><td>195 Lbs</td><td>6 ft 1</td><td>2.15 years</td><td>$2,018,562</td>
<td>40</td><td>0</td><td>0</td></tr></table></div>
<h1 class="TeamPlayerInfoPro_NYI"><a id="Islanders">Islanders</a></h1>
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
<table class="basictablesorter"><thead><tr>
<th class="STHSW200">Player Name</th><th class="STHSW25">CNT</th><th class="STHSW65">PO</th><th class="STHSW25">Age</th><th class="STHSW65">Birthday</th><th class="STHSW65">Weight</th><th class="STHSW55">Height</th><th class="STHSW45">Health<br /># Loss</th><th class="STHSW45">Force<br />Waiver</th><th class="STHSW65">Contract</th><th class="STHSW100">Type</th><th class="STHSW75">One Way<br />Contract</th><th class="STHSW85">Salary #1</th><th class="STHSW85">Salary #2</th><th class="STHSW85">Salary #3</th><th class="STHSW85">Salary #4</th><th class="STHSW85">Salary #5</th></tr></thead>
<tr><td>Alan Quine</td><td>ONT</td><td>C</td><td>27</td><td>1993-02-25</td><td>203 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$650,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Alexander Radulov</td><td>RUS</td><td>RW</td><td>33</td><td>1986-07-05</td><td>201 Lbs</td><td>6 ft2</td><td>16</td><td>No</td><td>4 years</td><td>Pro &amp; Farm</td><td>No</td><td>$6,250,000</td><td>$6,250,000</td><td>$6,250,000</td><td>$6,250,000</td><td></td></tr>
<tr><td>Brad Richardson</td><td>ONT</td><td>C/LW</td><td>35</td><td>1985-02-03</td><td>190 Lbs</td><td>6 ft0</td><td>14</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$2,750,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Brandon Halverson</td><td>USA</td><td>G</td><td>24</td><td>1996-03-28</td><td>209 Lbs</td><td>6 ft4</td><td>0</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>$650,000</td><td>$650,000</td><td>$650,000</td><td></td><td></td></tr>
<tr><td>Brett Lernout</td><td>MB</td><td>D</td><td>24</td><td>1995-09-23</td><td>213 Lbs</td><td>6 ft4</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$700,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Calle Jarnkrok</td><td>SWE</td><td>C/LW/RW</td><td>28</td><td>1991-09-25</td><td>186 Lbs</td><td>5 ft11</td><td>0</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>$2,250,000</td><td>$2,250,000</td><td>$2,250,000</td><td></td><td></td></tr>
<tr><td>Chase De Leo</td><td>USA</td><td>C</td><td>24</td><td>1995-10-25</td><td>185 Lbs</td><td>5 ft9</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$750,000</td><td>$750,000</td><td></td><td></td><td></td></tr>
<tr><td>Colton Parayko</td><td>AB</td><td>D</td><td>26</td><td>1993-05-12</td><td>230 Lbs</td><td>6 ft6</td><td>1</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$5,300,000</td><td>$5,300,000</td><td></td><td></td><td></td></tr>
<tr><td>Connor Brickley</td><td>USA</td><td>C/LW/RW</td><td>28</td><td>1992-02-25</td><td>203 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$700,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Connor Brown</td><td>ONT</td><td>LW/RW</td><td>26</td><td>1994-01-14</td><td>185 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$1,300,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Daniel Carr</td><td>AB</td><td>LW/RW</td><td>28</td><td>1991-11-01</td><td>193 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$1,200,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Dylan DeMelo</td><td>ONT</td><td>D</td><td>26</td><td>1993-05-01</td><td>195 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$1,000,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Jakub Voracek</td><td>CZE</td><td>LW/RW</td><td>30</td><td>1989-08-15</td><td>214 Lbs</td><td>6 ft2</td><td>8</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$7,750,000</td><td>$7,750,000</td><td></td><td></td><td></td></tr>
<tr><td>Joe Hicketts</td><td>BC</td><td>D</td><td>23</td><td>1996-05-04</td><td>175 Lbs</td><td>5 ft8</td><td>20</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$650,000</td><td>$650,000</td><td></td><td></td><td></td></tr>
<tr><td>Joe Pavelski</td><td>USA</td><td>C/RW</td><td>35</td><td>1984-07-11</td><td>195 Lbs</td><td>5 ft11</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$8,600,000</td><td>$8,600,000</td><td></td><td></td><td></td></tr>
<tr><td>Jordan Binnington</td><td>ONT</td><td>G</td><td>26</td><td>1993-07-10</td><td>167 Lbs</td><td>6 ft1</td><td>52</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>$903,333</td><td>$903,333</td><td>$903,333</td><td></td><td></td></tr>
<tr><td>Josh Anderson</td><td>ONT</td><td>RW</td><td>25</td><td>1994-05-06</td><td>221 Lbs</td><td>6 ft3</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$2,000,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Landon Ferraro</td><td>BC</td><td>C</td><td>28</td><td>1991-08-07</td><td>186 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$800,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Mark Barberio</td><td>QUE</td><td>D</td><td>30</td><td>1990-03-22</td><td>207 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$1,450,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Mathew Barzal</td><td>CAN</td><td>C</td><td>22</td><td>1997-05-26</td><td>189 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$1,263,333</td><td>$1,263,333</td><td></td><td></td><td></td></tr>
<tr><td>Matthew Nieto</td><td>USA</td><td>LW/RW</td><td>27</td><td>1992-11-05</td><td>190 Lbs</td><td>5 ft11</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$1,975,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Max McCormick</td><td>USA</td><td>LW</td><td>27</td><td>1992-05-01</td><td>188 Lbs</td><td>5 ft11</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$700,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Michael Hutchinson</td><td>ONT</td><td>G</td><td>30</td><td>1990-03-01</td><td>202 Lbs</td><td>6 ft3</td><td>33</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$700,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Nikolay Goldobin</td><td>RUS</td><td>LW/RW</td><td>24</td><td>1995-10-07</td><td>185 Lbs</td><td>5 ft11</td><td>27</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$1,075,833</td><td>$1,075,833</td><td></td><td></td><td></td></tr>
<tr><td>Philipp Grubauer</td><td>GER</td><td>G</td><td>28</td><td>1991-11-21</td><td>191 Lbs</td><td>6 ft1</td><td>12</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>$3,330,000</td><td>$3,330,000</td><td>$3,330,000</td><td></td><td></td></tr>
<tr><td>Ryan Ellis</td><td>ONT</td><td>D</td><td>29</td><td>1991-01-02</td><td>180 Lbs</td><td>5 ft10</td><td>17</td><td>No</td><td>5 years</td><td>Pro &amp; Farm</td><td>No</td><td>$6,250,000</td><td>$6,250,000</td><td>$6,250,000</td><td>$6,250,000</td><td>$6,250,000</td></tr>
<tr><td>Ryan O'Reilly</td><td>ONT</td><td>C</td><td>29</td><td>1991-02-07</td><td>216 Lbs</td><td>6 ft1</td><td>2</td><td>No</td><td>5 years</td><td>Pro &amp; Farm</td><td>No</td><td>$7,750,000</td><td>$7,750,000</td><td>$7,750,000</td><td>$7,750,000</td><td>$7,750,000</td></tr>
<tr><td>Ryan Pulock</td><td>MB</td><td>D</td><td>25</td><td>1994-10-06</td><td>214 Lbs</td><td>6 ft2</td><td>29</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$2,000,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Scott Harrington</td><td>ONT</td><td>D</td><td>27</td><td>1993-03-10</td><td>207 Lbs</td><td>6 ft2</td><td>10</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$750,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Steven Stamkos</td><td>ONT</td><td>C/RW</td><td>30</td><td>1990-02-07</td><td>194 Lbs</td><td>6 ft1</td><td>5</td><td>No</td><td>4 years</td><td>Pro &amp; Farm</td><td>No</td><td>$9,500,000</td><td>$9,500,000</td><td>$9,500,000</td><td>$9,500,000</td><td></td></tr>
<tr><td>Taylor Leier</td><td>SKW</td><td>LW</td><td>26</td><td>1994-02-14</td><td>180 Lbs</td><td>5 ft11</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$800,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Victor Hedman</td><td>SWE</td><td>D</td><td>29</td><td>1990-12-18</td><td>223 Lbs</td><td>6 ft6</td><td>35</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>$8,000,000</td><td>$8,000,000</td><td>$8,000,000</td><td></td><td></td></tr>
</table><br />
<table class="basictablesorter"><tr>
<td class="STHSW100">Total Players</td><td class="STHSW100">Average Age</td><td class="STHSW120">Average Weight</td><td class="STHSW120">Average Height</td><td class="STHSW120">Average Contract</td><td class="STHSW120">Average Salary</td><td class="STHSW140">Players who can play<br />both Pro and Farm </td><td class="STHSW140">Players who can play<br />Pro Only</td><td class="STHSW140">Players who can play<br />Farm Only</td></tr>
<tr><td>32</td><td>27.5</td><td>197 Lbs</td><td>6 ft 1</td><td>1.97 years</td><td>$2,804,609</td>
<td>32</td><td>0</td><td>0</td></tr></table></div>
<h1 class="TeamPlayerInfoPro_WPG"><a id="Jets">Jets</a></h1>
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
<table class="basictablesorter"><thead><tr>
<th class="STHSW200">Player Name</th><th class="STHSW25">CNT</th><th class="STHSW65">PO</th><th class="STHSW25">Age</th><th class="STHSW65">Birthday</th><th class="STHSW65">Weight</th><th class="STHSW55">Height</th><th class="STHSW45">Health<br /># Loss</th><th class="STHSW45">Force<br />Waiver</th><th class="STHSW65">Contract</th><th class="STHSW100">Type</th><th class="STHSW75">One Way<br />Contract</th><th class="STHSW85">Salary #1</th><th class="STHSW85">Salary #2</th><th class="STHSW85">Salary #3</th><th class="STHSW85">Salary #4</th><th class="STHSW85">Salary #5</th></tr></thead>
<tr><td>Barclay Goodrow</td><td>ONT</td><td>C/LW</td><td>27</td><td>1993-02-26</td><td>210 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$700,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Ben Street</td><td>BC</td><td>C/LW</td><td>33</td><td>1987-02-12</td><td>199 Lbs</td><td>5 ft11</td><td>32</td><td>No</td><td>1 year   </td><td>Pro Only</td><td>No</td><td>$750,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Brian Strait</td><td>USA</td><td>D</td><td>32</td><td>1988-01-03</td><td>206 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$675,000</td><td>$675,000</td><td></td><td></td><td></td></tr>
<tr><td>Casey Cizikas</td><td>ONT</td><td>C</td><td>29</td><td>1991-02-27</td><td>200 Lbs</td><td>5 ft11</td><td>16</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>$3,300,000</td><td>$3,300,000</td><td>$3,300,000</td><td></td><td></td></tr>
<tr><td>Chris Thorburn</td><td>ONT</td><td>LW/RW</td><td>36</td><td>1983-06-03</td><td>235 Lbs</td><td>6 ft3</td><td>37</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$900,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Christopher Gibson</td><td>FIN</td><td>G</td><td>27</td><td>1992-12-27</td><td>188 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$675,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Clark Bishop</td><td>NFL</td><td>C</td><td>24</td><td>1996-03-29</td><td>194 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>$713,333</td><td>$713,333</td><td>$713,333</td><td></td><td></td></tr>
<tr><td>Derek Stepan</td><td>USA</td><td>C</td><td>29</td><td>1990-06-18</td><td>196 Lbs</td><td>6 ft0</td><td>5</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$6,500,000</td><td>$6,500,000</td><td></td><td></td><td></td></tr>
<tr><td>Eeli Tolvanen</td><td>FIN</td><td>LW/RW</td><td>20</td><td>1999-04-22</td><td>191 Lbs</td><td>5 ft10</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$3,115,000</td><td>$3,115,000</td><td></td><td></td><td></td></tr>
<tr><td>Erik Haula</td><td>FIN</td><td>C/RW</td><td>29</td><td>1991-03-23</td><td>193 Lbs</td><td>6 ft0</td><td>4</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$2,750,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Guillaume Brisebois</td><td>QUE</td><td>D</td><td>22</td><td>1997-07-21</td><td>175 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>$888,333</td><td>$888,333</td><td>$888,333</td><td></td><td></td></tr>
<tr><td>Jean-Gabriel Pageau</td><td>ONT</td><td>C</td><td>27</td><td>1992-11-11</td><td>184 Lbs</td><td>5 ft10</td><td>24</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$3,100,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Jesperi Kotkaniemi</td><td>FIN</td><td>C</td><td>19</td><td>2000-07-06</td><td>188 Lbs</td><td>6 ft2</td><td>16</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>$3,425,000</td><td>$3,425,000</td><td>$3,425,000</td><td></td><td></td></tr>
<tr><td>John Quenneville</td><td>AB</td><td>C/LW/RW</td><td>24</td><td>1996-04-16</td><td>195 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>$894,167</td><td>$894,167</td><td>$894,167</td><td></td><td></td></tr>
<tr><td>Joonas Donskoi</td><td>FIN</td><td>LW/RW</td><td>28</td><td>1992-04-13</td><td>190 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>4 years</td><td>Pro &amp; Farm</td><td>No</td><td>$3,900,000</td><td>$3,900,000</td><td>$3,900,000</td><td>$3,900,000</td><td></td></tr>
<tr><td>Julius Honka</td><td>FIN</td><td>D</td><td>24</td><td>1995-12-03</td><td>186 Lbs</td><td>5 ft11</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$1,363,333</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Juuse Saros</td><td>FIN</td><td>G</td><td>25</td><td>1995-04-18</td><td>180 Lbs</td><td>5 ft11</td><td>58</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$925,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Juuso Riikola</td><td>FIN</td><td>D</td><td>26</td><td>1993-11-09</td><td>176 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$925,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Kasperi Kapanen</td><td>FIN</td><td>LW/RW</td><td>23</td><td>1996-07-23</td><td>187 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>$3,200,000</td><td>$3,200,000</td><td>$3,200,000</td><td></td><td></td></tr>
<tr><td>Kevin Shattenkirk</td><td>USA</td><td>D</td><td>31</td><td>1989-01-29</td><td>200 Lbs</td><td>6 ft0</td><td>10</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>$6,500,000</td><td>$6,500,000</td><td>$6,500,000</td><td></td><td></td></tr>
<tr><td>Leo Komarov</td><td>EST</td><td>C/LW/RW</td><td>33</td><td>1987-01-23</td><td>209 Lbs</td><td>5 ft11</td><td>1</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$3,800,000</td><td>$3,800,000</td><td></td><td></td><td></td></tr>
<tr><td>Madison Bowey</td><td>MB</td><td>D</td><td>24</td><td>1995-04-22</td><td>198 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$902,500</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Markus Hannikainen</td><td>FIN</td><td>LW/RW</td><td>27</td><td>1993-03-25</td><td>190 Lbs</td><td>6 ft2</td><td>23</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$745,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Matt Murray</td><td>AB</td><td>G</td><td>25</td><td>1994-05-24</td><td>178 Lbs</td><td>6 ft4</td><td>2</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$3,750,000</td><td>$3,750,000</td><td></td><td></td><td></td></tr>
<tr><td>Matthew Tkachuk</td><td>USA</td><td>LW/RW</td><td>22</td><td>1997-12-11</td><td>202 Lbs</td><td>6 ft2</td><td>4</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$1,775,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Mike Green</td><td>AB</td><td>D</td><td>34</td><td>1985-10-11</td><td>207 Lbs</td><td>5 ft11</td><td>53</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$5,375,000</td><td>$5,375,000</td><td></td><td></td><td></td></tr>
<tr><td>Miro Heiskanen</td><td>FIN</td><td>D</td><td>20</td><td>1999-07-18</td><td>170 Lbs</td><td>6 ft0</td><td>29</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>$3,394,166</td><td>$3,394,166</td><td>$3,394,166</td><td></td><td></td></tr>
<tr><td>Olli Maatta</td><td>FIN</td><td>D</td><td>25</td><td>1994-08-24</td><td>206 Lbs</td><td>6 ft2</td><td>25</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$4,085,000</td><td>$4,085,000</td><td></td><td></td><td></td></tr>
<tr><td>Rob O'Gara</td><td>USA</td><td>D</td><td>26</td><td>1993-07-06</td><td>215 Lbs</td><td>6 ft4</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$925,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Roope Hintz</td><td>FIN</td><td>LW</td><td>23</td><td>1996-11-17</td><td>205 Lbs</td><td>6 ft3</td><td>5</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>$925,000</td><td>$925,000</td><td>$925,000</td><td></td><td></td></tr>
<tr><td>Ryan Lindgren</td><td>USA</td><td>D</td><td>22</td><td>1998-02-10</td><td>198 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>$1,100,000</td><td>$1,100,000</td><td>$1,100,000</td><td></td><td></td></tr>
<tr><td>Sami Vatanen</td><td>FIN</td><td>D</td><td>28</td><td>1991-06-03</td><td>185 Lbs</td><td>5 ft10</td><td>14</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$4,875,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Scott Wilson</td><td>ONT</td><td>LW</td><td>27</td><td>1992-04-24</td><td>183 Lbs</td><td>5 ft11</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$1,050,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Vitek Vanecek</td><td>CZE</td><td>G</td><td>24</td><td>1996-01-08</td><td>180 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$925,000</td><td></td><td></td><td></td><td></td></tr>
</table><br />
<table class="basictablesorter"><tr>
<td class="STHSW100">Total Players</td><td class="STHSW100">Average Age</td><td class="STHSW120">Average Weight</td><td class="STHSW120">Average Height</td><td class="STHSW120">Average Contract</td><td class="STHSW120">Average Salary</td><td class="STHSW140">Players who can play<br />both Pro and Farm </td><td class="STHSW140">Players who can play<br />Pro Only</td><td class="STHSW140">Players who can play<br />Farm Only</td></tr>
<tr><td>34</td><td>26.3</td><td>194 Lbs</td><td>6 ft 1</td><td>1.88 years</td><td>$2,318,407</td>
<td>33</td><td>1</td><td>0</td></tr></table></div>
<h1 class="TeamPlayerInfoPro_LAK"><a id="Kings">Kings</a></h1>
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
<table class="basictablesorter"><thead><tr>
<th class="STHSW200">Player Name</th><th class="STHSW25">CNT</th><th class="STHSW65">PO</th><th class="STHSW25">Age</th><th class="STHSW65">Birthday</th><th class="STHSW65">Weight</th><th class="STHSW55">Height</th><th class="STHSW45">Health<br /># Loss</th><th class="STHSW45">Force<br />Waiver</th><th class="STHSW65">Contract</th><th class="STHSW100">Type</th><th class="STHSW75">One Way<br />Contract</th><th class="STHSW85">Salary #1</th><th class="STHSW85">Salary #2</th><th class="STHSW85">Salary #3</th><th class="STHSW85">Salary #4</th><th class="STHSW85">Salary #5</th></tr></thead>
<tr><td>Adam Pelech</td><td>ONT</td><td>D</td><td>25</td><td>1994-08-16</td><td>217 Lbs</td><td>6 ft4</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$925,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Alex Ovechkin</td><td>RUS</td><td>LW</td><td>34</td><td>1985-09-17</td><td>235 Lbs</td><td>6 ft3</td><td>0</td><td>No</td><td>4 years</td><td>Pro &amp; Farm</td><td>No</td><td>$12,500,000</td><td>$12,500,000</td><td>$12,500,000</td><td>$12,500,000</td><td></td></tr>
<tr><td>Andreas Borgman</td><td>SWE</td><td>D</td><td>24</td><td>1995-06-18</td><td>191 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$1,775,000</td><td>$1,775,000</td><td></td><td></td><td></td></tr>
<tr><td>Antoine Bibeau</td><td>QUE</td><td>G</td><td>25</td><td>1994-05-01</td><td>207 Lbs</td><td>6 ft3</td><td>0</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>$925,000</td><td>$925,000</td><td>$925,000</td><td></td><td></td></tr>
<tr><td>Brock Boeser</td><td>USA</td><td>RW</td><td>23</td><td>1997-02-24</td><td>191 Lbs</td><td>6 ft1</td><td>39</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$1,491,667</td><td>$1,491,667</td><td></td><td></td><td></td></tr>
<tr><td>Calle Rosen</td><td>SWE</td><td>D</td><td>26</td><td>1994-02-02</td><td>176 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$1,775,000</td><td>$1,775,000</td><td></td><td></td><td></td></tr>
<tr><td>Carter Verhaeghe</td><td>ONT</td><td>C</td><td>24</td><td>1995-08-14</td><td>181 Lbs</td><td>6 ft1</td><td>16</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>$894,167</td><td>$894,167</td><td>$894,167</td><td></td><td></td></tr>
<tr><td>Christian Wolanin</td><td>QUE</td><td>D</td><td>25</td><td>1995-03-17</td><td>185 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>$925,000</td><td>$925,000</td><td>$925,000</td><td></td><td></td></tr>
<tr><td>Devan Dubnyk</td><td>SKW</td><td>G</td><td>33</td><td>1986-05-03</td><td>218 Lbs</td><td>6 ft6</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$6,250,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Elias Lindholm</td><td>SWE</td><td>C/RW</td><td>25</td><td>1994-12-02</td><td>192 Lbs</td><td>6 ft1</td><td>15</td><td>No</td><td>4 years</td><td>Pro &amp; Farm</td><td>No</td><td>$4,850,000</td><td>$4,850,000</td><td>$4,850,000</td><td>$4,850,000</td><td></td></tr>
<tr><td>Frederik Gauthier</td><td>QUE</td><td>C</td><td>24</td><td>1995-04-26</td><td>238 Lbs</td><td>6 ft5</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$990,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Jaden Schwartz</td><td>SKW</td><td>LW</td><td>27</td><td>1992-06-25</td><td>190 Lbs</td><td>5 ft10</td><td>5</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$5,600,000</td><td>$5,600,000</td><td></td><td></td><td></td></tr>
<tr><td>Jonathan Huberdeau</td><td>QUE</td><td>LW</td><td>26</td><td>1993-06-04</td><td>188 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>4 years</td><td>Pro &amp; Farm</td><td>No</td><td>$6,000,000</td><td>$6,000,000</td><td>$6,000,000</td><td>$6,000,000</td><td></td></tr>
<tr><td>Jordan Greenway</td><td>USA</td><td>LW/RW</td><td>23</td><td>1997-02-16</td><td>226 Lbs</td><td>6 ft6</td><td>0</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>$1,255,000</td><td>$1,255,000</td><td>$1,255,000</td><td></td><td></td></tr>
<tr><td>Malcolm Subban</td><td>ONT</td><td>G</td><td>26</td><td>1993-12-21</td><td>200 Lbs</td><td>6 ft2</td><td>36</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$1,400,000</td><td>$1,400,000</td><td></td><td></td><td></td></tr>
<tr><td>Mason Appleton</td><td>USA</td><td>C/RW</td><td>24</td><td>1996-01-15</td><td>193 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$758,000</td><td>$758,000</td><td></td><td></td><td></td></tr>
<tr><td>Miles Wood</td><td>USA</td><td>LW/RW</td><td>24</td><td>1995-09-13</td><td>195 Lbs</td><td>6 ft2</td><td>10</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$925,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Mitch Marner</td><td>ONT</td><td>RW</td><td>22</td><td>1997-05-05</td><td>175 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$1,744,167</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Nate Schmidt</td><td>USA</td><td>D</td><td>28</td><td>1991-07-16</td><td>194 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>5 years</td><td>Pro &amp; Farm</td><td>No</td><td>$5,625,000</td><td>$5,625,000</td><td>$5,625,000</td><td>$5,625,000</td><td>$5,625,000</td></tr>
<tr><td>Nathan MacKinnon</td><td>NS</td><td>C</td><td>24</td><td>1995-08-31</td><td>205 Lbs</td><td>6 ft0</td><td>12</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$6,000,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Neal Pionk</td><td>USA</td><td>D</td><td>24</td><td>1995-07-29</td><td>190 Lbs</td><td>6 ft0</td><td>18</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$1,775,000</td><td>$1,775,000</td><td></td><td></td><td></td></tr>
<tr><td>P.K. Subban</td><td>ONT</td><td>D</td><td>30</td><td>1989-05-12</td><td>210 Lbs</td><td>6 ft0</td><td>39</td><td>No</td><td>6 years</td><td>Pro &amp; Farm</td><td>No</td><td>$9,500,000</td><td>$9,500,000</td><td>$9,500,000</td><td>$9,500,000</td><td>$9,500,000</td></tr>
<tr><td>Richard Bachman</td><td>USA</td><td>G</td><td>32</td><td>1987-07-25</td><td>183 Lbs</td><td>5 ft10</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$900,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Riley Nash</td><td>AB</td><td>C/RW</td><td>30</td><td>1989-05-09</td><td>190 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$700,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Seth Jones</td><td>USA</td><td>D</td><td>25</td><td>1994-10-02</td><td>210 Lbs</td><td>6 ft4</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$5,400,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Travis Hamonic</td><td>MB</td><td>D</td><td>29</td><td>1990-08-16</td><td>205 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>$4,500,000</td><td>$4,500,000</td><td>$4,500,000</td><td></td><td></td></tr>
<tr><td>Yanni Gourde</td><td>QUE</td><td>C/LW/RW</td><td>28</td><td>1991-12-15</td><td>172 Lbs</td><td>5 ft9</td><td>0</td><td>No</td><td>5 years</td><td>Pro &amp; Farm</td><td>No</td><td>$4,750,000</td><td>$4,750,000</td><td>$4,750,000</td><td>$4,750,000</td><td>$4,750,000</td></tr>
<tr><td>Zack Kassian</td><td>ONT</td><td>RW</td><td>29</td><td>1991-01-24</td><td>209 Lbs</td><td>6 ft3</td><td>16</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$1,950,000</td><td></td><td></td><td></td><td></td></tr>
</table><br />
<table class="basictablesorter"><tr>
<td class="STHSW100">Total Players</td><td class="STHSW100">Average Age</td><td class="STHSW120">Average Weight</td><td class="STHSW120">Average Height</td><td class="STHSW120">Average Contract</td><td class="STHSW120">Average Salary</td><td class="STHSW140">Players who can play<br />both Pro and Farm </td><td class="STHSW140">Players who can play<br />Pro Only</td><td class="STHSW140">Players who can play<br />Farm Only</td></tr>
<tr><td>28</td><td>26.4</td><td>199 Lbs</td><td>6 ft 2</td><td>2.39 years</td><td>$3,288,679</td>
<td>28</td><td>0</td><td>0</td></tr></table></div>
<h1 class="TeamPlayerInfoPro_TBL"><a id="Lightning">Lightning</a></h1>
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
<table class="basictablesorter"><thead><tr>
<th class="STHSW200">Player Name</th><th class="STHSW25">CNT</th><th class="STHSW65">PO</th><th class="STHSW25">Age</th><th class="STHSW65">Birthday</th><th class="STHSW65">Weight</th><th class="STHSW55">Height</th><th class="STHSW45">Health<br /># Loss</th><th class="STHSW45">Force<br />Waiver</th><th class="STHSW65">Contract</th><th class="STHSW100">Type</th><th class="STHSW75">One Way<br />Contract</th><th class="STHSW85">Salary #1</th><th class="STHSW85">Salary #2</th><th class="STHSW85">Salary #3</th><th class="STHSW85">Salary #4</th><th class="STHSW85">Salary #5</th></tr></thead>
<tr><td>Adam McQuaid</td><td>PEI</td><td>D</td><td>33</td><td>1986-10-12</td><td>212 Lbs</td><td>6 ft5</td><td>36</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$2,850,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Alexandre Grenier</td><td>QUE</td><td>RW</td><td>28</td><td>1991-09-05</td><td>200 Lbs</td><td>6 ft5</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$725,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Andrew Cogliano</td><td>ONT</td><td>LW/RW</td><td>32</td><td>1987-06-14</td><td>177 Lbs</td><td>5 ft10</td><td>9</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$3,400,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Brandon Sutter</td><td>USA</td><td>C</td><td>31</td><td>1989-02-14</td><td>191 Lbs</td><td>6 ft3</td><td>11</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$4,125,000</td><td>$4,125,000</td><td></td><td></td><td></td></tr>
<tr><td>Brendan Gallagher</td><td>AB</td><td>RW</td><td>27</td><td>1992-05-05</td><td>181 Lbs</td><td>5 ft9</td><td>12</td><td>No</td><td>5 years</td><td>Pro &amp; Farm</td><td>No</td><td>$5,100,000</td><td>$5,100,000</td><td>$5,100,000</td><td>$5,100,000</td><td>$5,100,000</td></tr>
<tr><td>Brian Elliott</td><td>ONT</td><td>G</td><td>35</td><td>1985-04-09</td><td>209 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$2,000,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Connor Hellebuyck</td><td>USA</td><td>G</td><td>26</td><td>1993-05-18</td><td>207 Lbs</td><td>6 ft4</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$925,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Derick Brassard</td><td>QUE</td><td>C/LW</td><td>32</td><td>1987-09-22</td><td>202 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$1,200,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Esa Lindell</td><td>FIN</td><td>D</td><td>25</td><td>1994-05-23</td><td>213 Lbs</td><td>6 ft3</td><td>0</td><td>No</td><td>5 years</td><td>Pro &amp; Farm</td><td>No</td><td>$5,200,000</td><td>$5,200,000</td><td>$5,200,000</td><td>$5,200,000</td><td>$5,200,000</td></tr>
<tr><td>Francois Brassard</td><td>QUE</td><td>G</td><td>26</td><td>1994-01-31</td><td>172 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$700,000</td><td>$700,000</td><td></td><td></td><td></td></tr>
<tr><td>Joe Thornton</td><td>ONT</td><td>C</td><td>40</td><td>1979-07-02</td><td>220 Lbs</td><td>6 ft4</td><td>12</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$4,500,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>John Tavares</td><td>ONT</td><td>C</td><td>29</td><td>1990-09-20</td><td>208 Lbs</td><td>6 ft1</td><td>15</td><td>No</td><td>6 years</td><td>Pro &amp; Farm</td><td>No</td><td>$11,000,000</td><td>$11,000,000</td><td>$11,000,000</td><td>$11,000,000</td><td>$11,000,000</td></tr>
<tr><td>Josh Teves</td><td>AB</td><td>D</td><td>25</td><td>1995-02-18</td><td>170 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$700,000</td><td>$700,000</td><td></td><td></td><td></td></tr>
<tr><td>Justin Falk</td><td>MB</td><td>D</td><td>31</td><td>1988-10-11</td><td>223 Lbs</td><td>6 ft5</td><td>7</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$750,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Kevin Connauton</td><td>AB</td><td>D</td><td>30</td><td>1990-02-23</td><td>205 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$1,575,000</td><td>$1,575,000</td><td></td><td></td><td></td></tr>
<tr><td>Kris Russell</td><td>AB</td><td>D</td><td>32</td><td>1987-05-02</td><td>173 Lbs</td><td>5 ft10</td><td>29</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>$5,000,000</td><td>$5,000,000</td><td>$5,000,000</td><td></td><td></td></tr>
<tr><td>Lawrence Pilut</td><td>SWE</td><td>D</td><td>24</td><td>1995-12-29</td><td>165 Lbs</td><td>5 ft11</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$925,000</td><td>$925,000</td><td></td><td></td><td></td></tr>
<tr><td>Liam O'Brien</td><td>NS</td><td>C</td><td>25</td><td>1994-07-29</td><td>215 Lbs</td><td>5 ft11</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$750,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Luca Sbisa</td><td>ITA</td><td>D</td><td>30</td><td>1990-01-30</td><td>209 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$3,600,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Matt Martin</td><td>ONT</td><td>LW/RW</td><td>30</td><td>1989-05-08</td><td>220 Lbs</td><td>6 ft3</td><td>0</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>$2,000,000</td><td>$2,000,000</td><td>$2,000,000</td><td></td><td></td></tr>
<tr><td>Matt Tomkins</td><td>AB</td><td>G</td><td>25</td><td>1994-06-19</td><td>194 Lbs</td><td>6 ft3</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$925,000</td><td>$925,000</td><td></td><td></td><td></td></tr>
<tr><td>Miikka Salomaki</td><td>FIN</td><td>LW/RW</td><td>27</td><td>1993-03-08</td><td>203 Lbs</td><td>5 ft11</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$900,000</td><td>$900,000</td><td></td><td></td><td></td></tr>
<tr><td>Mike Hoffman</td><td>ONT</td><td>LW/RW</td><td>30</td><td>1989-11-24</td><td>181 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$5,750,000</td><td>$5,750,000</td><td></td><td></td><td></td></tr>
<tr><td>Ondrej Palat</td><td>CZE</td><td>LW</td><td>29</td><td>1991-03-28</td><td>188 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>4 years</td><td>Pro &amp; Farm</td><td>No</td><td>$5,750,000</td><td>$5,750,000</td><td>$5,750,000</td><td>$5,750,000</td><td></td></tr>
<tr><td>Radim Simek</td><td>CZE</td><td>D</td><td>27</td><td>1992-09-20</td><td>205 Lbs</td><td>5 ft10</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$625,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Seth Helgeson</td><td>USA</td><td>D</td><td>29</td><td>1990-10-08</td><td>210 Lbs</td><td>6 ft4</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$900,000</td><td>$900,000</td><td></td><td></td><td></td></tr>
<tr><td>Tanner Pearson</td><td>ONT</td><td>LW</td><td>27</td><td>1992-08-09</td><td>201 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>$4,000,000</td><td>$4,000,000</td><td>$4,000,000</td><td></td><td></td></tr>
<tr><td>Tom Kuhnhackl</td><td>GER</td><td>LW/RW</td><td>28</td><td>1992-01-21</td><td>196 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$850,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Tyler Motte</td><td>USA</td><td>LW/RW</td><td>25</td><td>1995-03-10</td><td>188 Lbs</td><td>5 ft9</td><td>19</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$975,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Tyler Pitlick</td><td>USA</td><td>LW/RW</td><td>28</td><td>1991-10-31</td><td>200 Lbs</td><td>6 ft2</td><td>12</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$1,250,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Vince Dunn</td><td>ONT</td><td>D</td><td>23</td><td>1996-10-28</td><td>203 Lbs</td><td>6 ft0</td><td>6</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$888,333</td><td>$888,333</td><td></td><td></td><td></td></tr>
<tr><td>Vladimir Sobotka</td><td>CZE</td><td>C/LW</td><td>32</td><td>1987-07-02</td><td>184 Lbs</td><td>5 ft10</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$3,500,000</td><td>$3,500,000</td><td></td><td></td><td></td></tr>
<tr><td>Zach Bogosian</td><td>USA</td><td>D</td><td>29</td><td>1990-07-15</td><td>221 Lbs</td><td>6 ft3</td><td>11</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$5,060,000</td><td>$5,060,000</td><td></td><td></td><td></td></tr>
<tr><td>Zack Smith</td><td>SKW</td><td>C/LW</td><td>32</td><td>1988-04-05</td><td>208 Lbs</td><td>6 ft2</td><td>20</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$2,750,000</td><td>$2,750,000</td><td></td><td></td><td></td></tr>
</table><br />
<table class="basictablesorter"><tr>
<td class="STHSW100">Total Players</td><td class="STHSW100">Average Age</td><td class="STHSW120">Average Weight</td><td class="STHSW120">Average Height</td><td class="STHSW120">Average Contract</td><td class="STHSW120">Average Salary</td><td class="STHSW140">Players who can play<br />both Pro and Farm </td><td class="STHSW140">Players who can play<br />Pro Only</td><td class="STHSW140">Players who can play<br />Farm Only</td></tr>
<tr><td>34</td><td>28.9</td><td>199 Lbs</td><td>6 ft 1</td><td>2.03 years</td><td>$2,680,833</td>
<td>34</td><td>0</td><td>0</td></tr></table></div>
<h1 class="TeamPlayerInfoPro_TOR"><a id="MapleLeafs">Maple Leafs</a></h1>
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
<table class="basictablesorter"><thead><tr>
<th class="STHSW200">Player Name</th><th class="STHSW25">CNT</th><th class="STHSW65">PO</th><th class="STHSW25">Age</th><th class="STHSW65">Birthday</th><th class="STHSW65">Weight</th><th class="STHSW55">Height</th><th class="STHSW45">Health<br /># Loss</th><th class="STHSW45">Force<br />Waiver</th><th class="STHSW65">Contract</th><th class="STHSW100">Type</th><th class="STHSW75">One Way<br />Contract</th><th class="STHSW85">Salary #1</th><th class="STHSW85">Salary #2</th><th class="STHSW85">Salary #3</th><th class="STHSW85">Salary #4</th><th class="STHSW85">Salary #5</th></tr></thead>
<tr><td>Alex Pietrangelo</td><td>ONT</td><td>D</td><td>30</td><td>1990-01-18</td><td>210 Lbs</td><td>5 ft11</td><td>15</td><td>No</td><td>4 years</td><td>Pro &amp; Farm</td><td>No</td><td>$8,250,000</td><td>$8,250,000</td><td>$8,250,000</td><td>$8,250,000</td><td></td></tr>
<tr><td>Brenden Dillon</td><td>BC</td><td>D</td><td>29</td><td>1990-11-13</td><td>225 Lbs</td><td>6 ft4</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$3,270,000</td><td>$3,270,000</td><td></td><td></td><td></td></tr>
<tr><td>Brett Howden</td><td>AB</td><td>C/LW/RW</td><td>22</td><td>1998-03-29</td><td>193 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>$863,333</td><td>$863,333</td><td>$863,333</td><td></td><td></td></tr>
<tr><td>Christian Dvorak</td><td>USA</td><td>C/LW</td><td>24</td><td>1996-02-02</td><td>195 Lbs</td><td>6 ft0</td><td>18</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$1,106,667</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Cody Goloubef</td><td>ONT</td><td>D</td><td>30</td><td>1989-11-30</td><td>200 Lbs</td><td>6 ft1</td><td>21</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$650,000</td><td>$650,000</td><td></td><td></td><td></td></tr>
<tr><td>David Krejci</td><td>CZE</td><td>C</td><td>33</td><td>1986-04-28</td><td>188 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>$6,750,000</td><td>$6,750,000</td><td>$6,750,000</td><td></td><td></td></tr>
<tr><td>Dylan Wells</td><td>ONT</td><td>G</td><td>22</td><td>1998-01-03</td><td>185 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>$910,833</td><td>$910,833</td><td>$910,833</td><td></td><td></td></tr>
<tr><td>Frank Vatrano</td><td>USA</td><td>LW/RW</td><td>26</td><td>1994-03-14</td><td>201 Lbs</td><td>5 ft9</td><td>22</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>$2,533,000</td><td>$2,533,000</td><td>$2,533,000</td><td></td><td></td></tr>
<tr><td>Frederik Andersen</td><td>DEN</td><td>G</td><td>30</td><td>1989-10-02</td><td>230 Lbs</td><td>6 ft4</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$5,000,000</td><td>$5,000,000</td><td></td><td></td><td></td></tr>
<tr><td>Henrik Samuelsson</td><td>USA</td><td>LW/RW</td><td>26</td><td>1994-02-07</td><td>219 Lbs</td><td>6 ft3</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$1,106,667</td><td></td><td></td><td></td><td></td></tr>
<tr><td>James Reimer</td><td>MB</td><td>G</td><td>32</td><td>1988-03-15</td><td>217 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$3,500,000</td><td>$3,500,000</td><td></td><td></td><td></td></tr>
<tr><td>Jared Coreau</td><td>ONT</td><td>G</td><td>28</td><td>1991-11-04</td><td>235 Lbs</td><td>6 ft4</td><td>0</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>$700,000</td><td>$700,000</td><td>$700,000</td><td></td><td></td></tr>
<tr><td>Jeremy Bracco</td><td>USA</td><td>RW</td><td>23</td><td>1997-03-17</td><td>180 Lbs</td><td>5 ft9</td><td>0</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>$925,000</td><td>$925,000</td><td>$925,000</td><td></td><td></td></tr>
<tr><td>Jimmy Hayes</td><td>USA</td><td>RW</td><td>30</td><td>1989-11-21</td><td>215 Lbs</td><td>6 ft5</td><td>6</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$700,000</td><td>$700,000</td><td></td><td></td><td></td></tr>
<tr><td>Lukas Radil</td><td>CZE</td><td>LW/RW</td><td>29</td><td>1990-08-04</td><td>201 Lbs</td><td>6 ft4</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$750,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Mark Borowiecki</td><td>ONT</td><td>D</td><td>30</td><td>1989-07-12</td><td>207 Lbs</td><td>6 ft1</td><td>8</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$1,850,000</td><td>$1,850,000</td><td></td><td></td><td></td></tr>
<tr><td>Mike Matheson</td><td>QUE</td><td>D</td><td>26</td><td>1994-02-27</td><td>192 Lbs</td><td>6 ft2</td><td>24</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$925,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Noel Acciari</td><td>USA</td><td>C/RW</td><td>28</td><td>1992-03-31</td><td>208 Lbs</td><td>5 ft10</td><td>16</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>$1,666,667</td><td>$1,666,667</td><td>$1,666,667</td><td></td><td></td></tr>
<tr><td>Patrik Nemeth</td><td>SWE</td><td>D</td><td>28</td><td>1992-02-07</td><td>219 Lbs</td><td>6 ft3</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$3,000,000</td><td>$3,000,000</td><td></td><td></td><td></td></tr>
<tr><td>Radek Faksa</td><td>CZE</td><td>C</td><td>26</td><td>1994-01-08</td><td>216 Lbs</td><td>6 ft3</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$2,350,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Ryan Stanton</td><td>AB</td><td>D</td><td>30</td><td>1989-07-20</td><td>196 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$650,000</td><td>$650,000</td><td></td><td></td><td></td></tr>
<tr><td>Sam Bennett</td><td>ONT</td><td>C/LW/RW</td><td>23</td><td>1996-06-19</td><td>200 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$1,700,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Sean Kuraly</td><td>USA</td><td>C/LW</td><td>27</td><td>1993-01-20</td><td>213 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$925,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Shea Theodore</td><td>BC</td><td>D</td><td>24</td><td>1995-08-03</td><td>195 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>5 years</td><td>Pro &amp; Farm</td><td>No</td><td>$5,200,000</td><td>$5,200,000</td><td>$5,200,000</td><td>$5,200,000</td><td>$5,200,000</td></tr>
<tr><td>Spencer Smallman</td><td>PEI</td><td>RW</td><td>23</td><td>1996-09-08</td><td>200 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>$758,333</td><td>$758,333</td><td>$758,333</td><td></td><td></td></tr>
<tr><td>Steven Lorentz</td><td>ONT</td><td>C</td><td>24</td><td>1996-04-12</td><td>201 Lbs</td><td>6 ft4</td><td>0</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>$728,333</td><td>$728,333</td><td>$728,333</td><td></td><td></td></tr>
<tr><td>Tomas Hertl</td><td>CZE</td><td>C/LW</td><td>26</td><td>1993-11-12</td><td>215 Lbs</td><td>6 ft2</td><td>39</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$5,500,000</td><td>$5,500,000</td><td></td><td></td><td></td></tr>
<tr><td>Tomas Nosek</td><td>CZE</td><td>C/LW</td><td>27</td><td>1992-08-31</td><td>210 Lbs</td><td>6 ft3</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$1,250,000</td><td>$1,250,000</td><td></td><td></td><td></td></tr>
<tr><td>Travis Dermott</td><td>ONT</td><td>D</td><td>23</td><td>1996-12-21</td><td>215 Lbs</td><td>6 ft0</td><td>4</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$863,333</td><td>$863,333</td><td></td><td></td><td></td></tr>
<tr><td>Troy Terry</td><td>USA</td><td>C/RW</td><td>22</td><td>1997-09-10</td><td>174 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>$1,491,666</td><td>$1,491,666</td><td>$1,491,666</td><td></td><td></td></tr>
<tr><td>Zachary Fucale</td><td>QUE</td><td>G</td><td>24</td><td>1995-05-27</td><td>187 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$863,000</td><td>$863,000</td><td></td><td></td><td></td></tr>
</table><br />
<table class="basictablesorter"><tr>
<td class="STHSW100">Total Players</td><td class="STHSW100">Average Age</td><td class="STHSW120">Average Weight</td><td class="STHSW120">Average Height</td><td class="STHSW120">Average Contract</td><td class="STHSW120">Average Salary</td><td class="STHSW140">Players who can play<br />both Pro and Farm </td><td class="STHSW140">Players who can play<br />Pro Only</td><td class="STHSW140">Players who can play<br />Farm Only</td></tr>
<tr><td>31</td><td>26.6</td><td>205 Lbs</td><td>6 ft 2</td><td>2.26 years</td><td>$2,152,801</td>
<td>31</td><td>0</td><td>0</td></tr></table></div>
<h1 class="TeamPlayerInfoPro_EDM"><a id="Oilers">Oilers</a></h1>
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
<table class="basictablesorter"><thead><tr>
<th class="STHSW200">Player Name</th><th class="STHSW25">CNT</th><th class="STHSW65">PO</th><th class="STHSW25">Age</th><th class="STHSW65">Birthday</th><th class="STHSW65">Weight</th><th class="STHSW55">Height</th><th class="STHSW45">Health<br /># Loss</th><th class="STHSW45">Force<br />Waiver</th><th class="STHSW65">Contract</th><th class="STHSW100">Type</th><th class="STHSW75">One Way<br />Contract</th><th class="STHSW85">Salary #1</th><th class="STHSW85">Salary #2</th><th class="STHSW85">Salary #3</th><th class="STHSW85">Salary #4</th><th class="STHSW85">Salary #5</th></tr></thead>
<tr><td>Adam Gaudette</td><td>USA</td><td>C</td><td>23</td><td>1996-10-02</td><td>170 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>$1,491,666</td><td>$1,491,666</td><td>$1,491,666</td><td></td><td></td></tr>
<tr><td>Adam Johnson</td><td>USA</td><td>C/LW</td><td>25</td><td>1994-06-22</td><td>174 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$925,000</td><td>$925,000</td><td></td><td></td><td></td></tr>
<tr><td>Anders Nilsson</td><td>SWE</td><td>G</td><td>30</td><td>1990-03-18</td><td>232 Lbs</td><td>6 ft6</td><td>16</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$2,750,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Anthony Bitetto</td><td>USA</td><td>D</td><td>29</td><td>1990-07-14</td><td>210 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>$800,000</td><td>$800,000</td><td>$800,000</td><td></td><td></td></tr>
<tr><td>Anthony Cirelli</td><td>ONT</td><td>C</td><td>22</td><td>1997-07-15</td><td>180 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$935,833</td><td>$935,833</td><td></td><td></td><td></td></tr>
<tr><td>Blake Wheeler</td><td>USA</td><td>C/RW</td><td>33</td><td>1986-08-30</td><td>225 Lbs</td><td>6 ft5</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$7,500,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Brandon Montour</td><td>ONT</td><td>D</td><td>26</td><td>1994-04-11</td><td>192 Lbs</td><td>6 ft0</td><td>11</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$925,000</td><td>$925,000</td><td></td><td></td><td></td></tr>
<tr><td>Dennis Gilbert</td><td>USA</td><td>D</td><td>23</td><td>1996-10-30</td><td>198 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>$925,000</td><td>$925,000</td><td>$925,000</td><td></td><td></td></tr>
<tr><td>Dominic Toninato</td><td>USA</td><td>C</td><td>26</td><td>1994-03-08</td><td>200 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$925,000</td><td>$925,000</td><td></td><td></td><td></td></tr>
<tr><td>Dustin Brown</td><td>USA</td><td>LW/RW</td><td>35</td><td>1984-11-04</td><td>216 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>$6,500,000</td><td>$6,500,000</td><td>$6,500,000</td><td></td><td></td></tr>
<tr><td>Elvis Merlikins</td><td>LAT</td><td>G</td><td>26</td><td>1994-04-13</td><td>181 Lbs</td><td>6 ft3</td><td>0</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>$1,844,559</td><td>$1,844,559</td><td>$1,844,559</td><td></td><td></td></tr>
<tr><td>Eric Robinson</td><td>USA</td><td>LW/RW</td><td>24</td><td>1995-06-14</td><td>201 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$800,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Jamie Oleksiak</td><td>ONT</td><td>D</td><td>27</td><td>1992-12-21</td><td>255 Lbs</td><td>6 ft7</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$2,137,500</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Jarred Tinordi</td><td>USA</td><td>D</td><td>28</td><td>1992-02-20</td><td>230 Lbs</td><td>6 ft6</td><td>0</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>$750,000</td><td>$750,000</td><td>$750,000</td><td></td><td></td></tr>
<tr><td>Jeff Petry</td><td>USA</td><td>D</td><td>32</td><td>1987-12-09</td><td>208 Lbs</td><td>6 ft3</td><td>0</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>$6,000,000</td><td>$6,000,000</td><td>$6,000,000</td><td></td><td></td></tr>
<tr><td>Jeremy Lauzon</td><td>QUE</td><td>D</td><td>22</td><td>1997-04-28</td><td>204 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>$871,666</td><td>$871,666</td><td>$871,666</td><td></td><td></td></tr>
<tr><td>Joey Anderson</td><td>USA</td><td>RW</td><td>21</td><td>1998-06-19</td><td>190 Lbs</td><td>5 ft11</td><td>0</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>$925,000</td><td>$925,000</td><td>$925,000</td><td></td><td></td></tr>
<tr><td>John Gibson</td><td>USA</td><td>G</td><td>26</td><td>1993-07-14</td><td>223 Lbs</td><td>6 ft3</td><td>0</td><td>No</td><td>5 years</td><td>Pro &amp; Farm</td><td>No</td><td>$6,000,000</td><td>$6,000,000</td><td>$6,000,000</td><td>$6,000,000</td><td>$6,000,000</td></tr>
<tr><td>John Moore</td><td>USA</td><td>D</td><td>29</td><td>1990-11-19</td><td>210 Lbs</td><td>6 ft2</td><td>24</td><td>No</td><td>4 years</td><td>Pro &amp; Farm</td><td>No</td><td>$2,850,000</td><td>$2,850,000</td><td>$2,850,000</td><td>$2,850,000</td><td></td></tr>
<tr><td>Jonathan Toews</td><td>MB</td><td>C</td><td>31</td><td>1988-04-29</td><td>201 Lbs</td><td>6 ft2</td><td>54</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$10,250,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Josh Archibald</td><td>SKW</td><td>RW</td><td>27</td><td>1992-10-06</td><td>176 Lbs</td><td>5 ft10</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$925,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Kaden Fulcher</td><td>ONT</td><td>G</td><td>21</td><td>1998-09-23</td><td>183 Lbs</td><td>6 ft3</td><td>0</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>$716,666</td><td>$716,666</td><td>$716,666</td><td></td><td></td></tr>
<tr><td>Lars Eller</td><td>DEN</td><td>C</td><td>30</td><td>1989-05-07</td><td>207 Lbs</td><td>6 ft2</td><td>2</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$3,500,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Luke Glendening</td><td>USA</td><td>C/RW</td><td>30</td><td>1989-04-27</td><td>192 Lbs</td><td>5 ft11</td><td>14</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$1,800,000</td><td>$1,800,000</td><td></td><td></td><td></td></tr>
<tr><td>Luke Kunin</td><td>USA</td><td>C/RW</td><td>22</td><td>1997-12-04</td><td>193 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>$1,425,000</td><td>$1,425,000</td><td>$1,425,000</td><td></td><td></td></tr>
<tr><td>Marcus Foligno</td><td>USA</td><td>LW/RW</td><td>28</td><td>1991-08-10</td><td>232 Lbs</td><td>6 ft3</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$2,250,000</td><td>$2,250,000</td><td></td><td></td><td></td></tr>
<tr><td>Mattias Ekholm</td><td>SWE</td><td>D</td><td>29</td><td>1990-05-23</td><td>215 Lbs</td><td>6 ft4</td><td>0</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>$5,000,000</td><td>$5,000,000</td><td>$5,000,000</td><td></td><td></td></tr>
<tr><td>Mikael Granlund</td><td>FIN</td><td>C/LW/RW</td><td>28</td><td>1992-02-25</td><td>185 Lbs</td><td>5 ft10</td><td>42</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$5,650,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Mitch Reinke</td><td>USA</td><td>D</td><td>24</td><td>1996-02-04</td><td>181 Lbs</td><td>5 ft11</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$925,000</td><td>$925,000</td><td></td><td></td><td></td></tr>
<tr><td>Nick Foligno</td><td>USA</td><td>C/LW</td><td>32</td><td>1987-10-30</td><td>202 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$5,250,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Nick Schmaltz</td><td>USA</td><td>C/LW/RW</td><td>24</td><td>1996-02-23</td><td>177 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$1,541,667</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Noah Hanifin</td><td>USA</td><td>D</td><td>23</td><td>1997-01-25</td><td>206 Lbs</td><td>6 ft3</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$4,000,000</td><td>$4,000,000</td><td></td><td></td><td></td></tr>
<tr><td>Patrick Marleau</td><td>SKW</td><td>C/LW/RW</td><td>40</td><td>1979-09-15</td><td>215 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$3,000,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Ron Hainsey</td><td>USA</td><td>D</td><td>39</td><td>1981-03-24</td><td>205 Lbs</td><td>6 ft3</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$4,000,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Ryan Graves</td><td>NS</td><td>D</td><td>24</td><td>1995-05-20</td><td>216 Lbs</td><td>6 ft5</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$1,000,000</td><td>$1,000,000</td><td></td><td></td><td></td></tr>
<tr><td>Ryan Kuffner</td><td>ONT</td><td>LW</td><td>23</td><td>1996-06-11</td><td>194 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$925,000</td><td>$925,000</td><td></td><td></td><td></td></tr>
<tr><td>Ryan Nugent-Hopkins</td><td>BC</td><td>C/LW</td><td>27</td><td>1993-04-11</td><td>191 Lbs</td><td>6 ft0</td><td>14</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$6,300,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Scott Wedgewood</td><td>ONT</td><td>G</td><td>27</td><td>1992-08-14</td><td>195 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$700,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Zach Whitecloud</td><td>MAN</td><td>D</td><td>23</td><td>1996-11-27</td><td>209 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$1,491,666</td><td>$1,491,666</td><td></td><td></td><td></td></tr>
<tr><td>Zane McIntyre</td><td>USA</td><td>G</td><td>27</td><td>1992-08-20</td><td>206 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$925,000</td><td></td><td></td><td></td><td></td></tr>
</table><br />
<table class="basictablesorter"><tr>
<td class="STHSW100">Total Players</td><td class="STHSW100">Average Age</td><td class="STHSW120">Average Weight</td><td class="STHSW120">Average Height</td><td class="STHSW120">Average Contract</td><td class="STHSW120">Average Salary</td><td class="STHSW140">Players who can play<br />both Pro and Farm </td><td class="STHSW140">Players who can play<br />Pro Only</td><td class="STHSW140">Players who can play<br />Farm Only</td></tr>
<tr><td>40</td><td>27.2</td><td>202 Lbs</td><td>6 ft 2</td><td>2.05 years</td><td>$2,685,781</td>
<td>40</td><td>0</td><td>0</td></tr></table></div>
<h1 class="TeamPlayerInfoPro_FLA"><a id="Panthers">Panthers</a></h1>
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
<table class="basictablesorter"><thead><tr>
<th class="STHSW200">Player Name</th><th class="STHSW25">CNT</th><th class="STHSW65">PO</th><th class="STHSW25">Age</th><th class="STHSW65">Birthday</th><th class="STHSW65">Weight</th><th class="STHSW55">Height</th><th class="STHSW45">Health<br /># Loss</th><th class="STHSW45">Force<br />Waiver</th><th class="STHSW65">Contract</th><th class="STHSW100">Type</th><th class="STHSW75">One Way<br />Contract</th><th class="STHSW85">Salary #1</th><th class="STHSW85">Salary #2</th><th class="STHSW85">Salary #3</th><th class="STHSW85">Salary #4</th><th class="STHSW85">Salary #5</th></tr></thead>
<tr><td>Alexandre Carrier</td><td>QUE</td><td>D</td><td>23</td><td>1996-10-08</td><td>174 Lbs</td><td>5 ft11</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$800,000</td><td>$800,000</td><td></td><td></td><td></td></tr>
<tr><td>Andy Welinski</td><td>USA</td><td>D</td><td>26</td><td>1993-04-27</td><td>206 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$1,775,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Anton Khudobin</td><td>KAZ</td><td>G</td><td>33</td><td>1986-05-07</td><td>200 Lbs</td><td>5 ft11</td><td>49</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$3,000,000</td><td>$3,000,000</td><td></td><td></td><td></td></tr>
<tr><td>Brendan Guhle</td><td>AB</td><td>D</td><td>22</td><td>1997-07-29</td><td>186 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$888,333</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Brent Burns</td><td>ONT</td><td>D</td><td>35</td><td>1985-03-09</td><td>230 Lbs</td><td>6 ft5</td><td>0</td><td>No</td><td>4 years</td><td>Pro &amp; Farm</td><td>No</td><td>$9,000,000</td><td>$9,000,000</td><td>$9,000,000</td><td>$9,000,000</td><td></td></tr>
<tr><td>Brian Dumoulin</td><td>USA</td><td>D</td><td>28</td><td>1991-09-06</td><td>207 Lbs</td><td>6 ft4</td><td>25</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>$4,200,000</td><td>$4,200,000</td><td>$4,200,000</td><td></td><td></td></tr>
<tr><td>Buddy Robinson</td><td>USA</td><td>RW</td><td>28</td><td>1991-09-30</td><td>232 Lbs</td><td>6 ft6</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$1,500,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>C.J. Smith</td><td>USA</td><td>LW</td><td>25</td><td>1994-12-01</td><td>185 Lbs</td><td>5 ft11</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$1,000,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Carl Dahlstrom</td><td>SWE</td><td>D</td><td>25</td><td>1995-01-28</td><td>231 Lbs</td><td>6 ft4</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$925,000</td><td>$925,000</td><td></td><td></td><td></td></tr>
<tr><td>Carl Soderberg</td><td>SWE</td><td>C</td><td>34</td><td>1985-10-12</td><td>210 Lbs</td><td>6 ft3</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$4,900,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Collin Delia</td><td>USA</td><td>G</td><td>25</td><td>1994-06-19</td><td>190 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$950,000</td><td>$950,000</td><td></td><td></td><td></td></tr>
<tr><td>Cooper Marody</td><td>USA</td><td>C/RW</td><td>23</td><td>1996-12-20</td><td>173 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>$1,000,000</td><td>$1,000,000</td><td>$1,000,000</td><td></td><td></td></tr>
<tr><td>Curtis Lazar</td><td>BC</td><td>C/LW/RW</td><td>25</td><td>1995-02-02</td><td>209 Lbs</td><td>6 ft0</td><td>11</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$1,200,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Damon Severson</td><td>SKW</td><td>D</td><td>25</td><td>1994-08-07</td><td>205 Lbs</td><td>6 ft2</td><td>14</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>$4,200,000</td><td>$4,200,000</td><td>$4,200,000</td><td></td><td></td></tr>
<tr><td>Daniel O'Regan</td><td>GER</td><td>C/RW</td><td>26</td><td>1994-01-30</td><td>180 Lbs</td><td>5 ft9</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$925,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Darren Helm</td><td>MB</td><td>LW/RW</td><td>33</td><td>1987-01-21</td><td>196 Lbs</td><td>6 ft0</td><td>20</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$2,900,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>David Rittich</td><td>CZE</td><td>G</td><td>27</td><td>1992-08-18</td><td>202 Lbs</td><td>6 ft3</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$1,000,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Derrick Pouliot</td><td>SKW</td><td>D</td><td>26</td><td>1994-01-16</td><td>208 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$1,288,333</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Garrett Wilson</td><td>ONT</td><td>LW/RW</td><td>29</td><td>1991-03-16</td><td>199 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$800,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Jake Debrusk</td><td>AB</td><td>LW/RW</td><td>23</td><td>1996-10-16</td><td>188 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$1,288,333</td><td>$1,288,333</td><td></td><td></td><td></td></tr>
<tr><td>Jake Oettinger</td><td>USA</td><td>G</td><td>21</td><td>1998-12-18</td><td>212 Lbs</td><td>6 ft4</td><td>0</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>$925,000</td><td>$925,000</td><td>$925,000</td><td></td><td></td></tr>
<tr><td>Josh Bailey</td><td>ONT</td><td>LW/RW</td><td>30</td><td>1989-10-02</td><td>203 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>5 years</td><td>Pro &amp; Farm</td><td>No</td><td>$6,000,000</td><td>$6,000,000</td><td>$6,000,000</td><td>$6,000,000</td><td>$6,000,000</td></tr>
<tr><td>Justin Schultz</td><td>BC</td><td>D</td><td>29</td><td>1990-07-06</td><td>193 Lbs</td><td>6 ft2</td><td>32</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>$4,800,000</td><td>$4,800,000</td><td>$4,800,000</td><td></td><td></td></tr>
<tr><td>Lawson Crouse</td><td>ONT</td><td>LW</td><td>22</td><td>1997-06-23</td><td>220 Lbs</td><td>6 ft4</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$1,602,500</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Luke Johnson</td><td>USA</td><td>C</td><td>25</td><td>1994-09-18</td><td>198 Lbs</td><td>5 ft11</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$925,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Marcus Johansson</td><td>SWE</td><td>LW/RW</td><td>29</td><td>1990-10-06</td><td>205 Lbs</td><td>6 ft1</td><td>72</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$5,000,000</td><td>$5,000,000</td><td></td><td></td><td></td></tr>
<tr><td>Mats Zuccarello</td><td>NOR</td><td>LW/RW</td><td>32</td><td>1987-08-31</td><td>179 Lbs</td><td>5 ft8</td><td>44</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$5,000,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Max Jones</td><td>USA</td><td>LW</td><td>22</td><td>1998-02-16</td><td>203 Lbs</td><td>6 ft3</td><td>0</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>$863,333</td><td>$863,333</td><td>$863,333</td><td></td><td></td></tr>
<tr><td>Michael Dal Colle</td><td>ONT</td><td>LW/RW</td><td>23</td><td>1996-06-19</td><td>198 Lbs</td><td>6 ft3</td><td>0</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>$3,063,333</td><td>$3,063,333</td><td>$3,063,333</td><td></td><td></td></tr>
<tr><td>Michael McCarron</td><td>USA</td><td>C/RW</td><td>25</td><td>1995-03-06</td><td>231 Lbs</td><td>6 ft6</td><td>16</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$1,076,000</td><td>$1,076,000</td><td></td><td></td><td></td></tr>
<tr><td>Michael Stone</td><td>MB</td><td>D</td><td>29</td><td>1990-06-06</td><td>210 Lbs</td><td>6 ft3</td><td>6</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$3,500,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Nathan Beaulieu</td><td>ONT</td><td>D</td><td>27</td><td>1992-12-04</td><td>200 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>$2,250,000</td><td>$2,250,000</td><td>$2,250,000</td><td></td><td></td></tr>
<tr><td>Paul Carey</td><td>USA</td><td>C/LW</td><td>31</td><td>1988-09-24</td><td>200 Lbs</td><td>6 ft1</td><td>5</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$1,200,000</td><td>$1,200,000</td><td></td><td></td><td></td></tr>
<tr><td>Tyler Bozak</td><td>SKW</td><td>C</td><td>34</td><td>1986-03-19</td><td>199 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>$6,000,000</td><td>$6,000,000</td><td>$6,000,000</td><td></td><td></td></tr>
<tr><td>Tyler Seguin</td><td>ONT</td><td>C/RW</td><td>28</td><td>1992-01-30</td><td>201 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$7,500,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Tyler Wotherspoon</td><td>BC</td><td>D</td><td>27</td><td>1993-03-11</td><td>207 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$800,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Xavier Ouellet</td><td>FRA</td><td>D</td><td>26</td><td>1993-07-28</td><td>185 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$1,400,000</td><td>$1,400,000</td><td></td><td></td><td></td></tr>
</table><br />
<table class="basictablesorter"><tr>
<td class="STHSW100">Total Players</td><td class="STHSW100">Average Age</td><td class="STHSW120">Average Weight</td><td class="STHSW120">Average Height</td><td class="STHSW120">Average Contract</td><td class="STHSW120">Average Salary</td><td class="STHSW140">Players who can play<br />both Pro and Farm </td><td class="STHSW140">Players who can play<br />Pro Only</td><td class="STHSW140">Players who can play<br />Farm Only</td></tr>
<tr><td>37</td><td>27.1</td><td>201 Lbs</td><td>6 ft 2</td><td>1.92 years</td><td>$2,579,599</td>
<td>37</td><td>0</td><td>0</td></tr></table></div>
<h1 class="TeamPlayerInfoPro_PIT"><a id="Penguins">Penguins</a></h1>
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
<table class="basictablesorter"><thead><tr>
<th class="STHSW200">Player Name</th><th class="STHSW25">CNT</th><th class="STHSW65">PO</th><th class="STHSW25">Age</th><th class="STHSW65">Birthday</th><th class="STHSW65">Weight</th><th class="STHSW55">Height</th><th class="STHSW45">Health<br /># Loss</th><th class="STHSW45">Force<br />Waiver</th><th class="STHSW65">Contract</th><th class="STHSW100">Type</th><th class="STHSW75">One Way<br />Contract</th><th class="STHSW85">Salary #1</th><th class="STHSW85">Salary #2</th><th class="STHSW85">Salary #3</th><th class="STHSW85">Salary #4</th><th class="STHSW85">Salary #5</th></tr></thead>
<tr><td>Aaron Ness</td><td>USA</td><td>D</td><td>29</td><td>1990-05-18</td><td>184 Lbs</td><td>5 ft11</td><td>2</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>$750,000</td><td>$750,000</td><td>$750,000</td><td></td><td></td></tr>
<tr><td>Alexandre Fortin</td><td>QUE</td><td>LW/RW</td><td>23</td><td>1997-02-25</td><td>175 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$685,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Andy Greene</td><td>USA</td><td>D</td><td>37</td><td>1982-10-30</td><td>190 Lbs</td><td>5 ft11</td><td>9</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$5,200,000</td><td>$5,200,000</td><td></td><td></td><td></td></tr>
<tr><td>Anthony Greco</td><td>USA</td><td>LW/RW</td><td>26</td><td>1993-09-30</td><td>172 Lbs</td><td>5 ft10</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$750,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Anton Forsberg</td><td>SWE</td><td>G</td><td>27</td><td>1992-11-26</td><td>192 Lbs</td><td>6 ft3</td><td>39</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$1,000,000</td><td>$1,000,000</td><td></td><td></td><td></td></tr>
<tr><td>Brady Tkachuk</td><td>USA</td><td>LW</td><td>20</td><td>1999-09-16</td><td>196 Lbs</td><td>6 ft3</td><td>0</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>$3,425,000</td><td>$3,425,000</td><td>$3,425,000</td><td></td><td></td></tr>
<tr><td>Cam Fowler</td><td>ONT</td><td>D</td><td>28</td><td>1991-12-05</td><td>215 Lbs</td><td>6 ft1</td><td>13</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>$6,500,000</td><td>$6,500,000</td><td>$6,500,000</td><td></td><td></td></tr>
<tr><td>Chris Wagner</td><td>USA</td><td>C/LW/RW</td><td>28</td><td>1991-05-27</td><td>198 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>$1,500,000</td><td>$1,500,000</td><td>$1,500,000</td><td></td><td></td></tr>
<tr><td>Chris Wideman</td><td>USA</td><td>D</td><td>30</td><td>1990-01-07</td><td>183 Lbs</td><td>5 ft10</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$650,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Colin Wilson</td><td>USA</td><td>C/LW/RW</td><td>30</td><td>1989-10-20</td><td>221 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$4,000,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Connor Carrick</td><td>USA</td><td>D</td><td>26</td><td>1994-04-13</td><td>192 Lbs</td><td>5 ft11</td><td>12</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>$1,650,000</td><td>$1,650,000</td><td>$1,650,000</td><td></td><td></td></tr>
<tr><td>Dave Dziurzynski</td><td>AB</td><td>LW</td><td>30</td><td>1989-07-01</td><td>225 Lbs</td><td>6 ft3</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$675,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Dmitry Kulikov</td><td>RUS</td><td>D</td><td>29</td><td>1990-10-29</td><td>204 Lbs</td><td>6 ft1</td><td>69</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$4,250,000</td><td>$4,250,000</td><td></td><td></td><td></td></tr>
<tr><td>Evan Rodrigues</td><td>ONT</td><td>C/LW/RW</td><td>26</td><td>1993-07-28</td><td>182 Lbs</td><td>5 ft11</td><td>34</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$975,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>James van Riemsdyk</td><td>USA</td><td>LW</td><td>30</td><td>1989-05-04</td><td>217 Lbs</td><td>6 ft3</td><td>0</td><td>No</td><td>4 years</td><td>Pro &amp; Farm</td><td>No</td><td>$8,750,000</td><td>$8,750,000</td><td>$8,750,000</td><td>$8,750,000</td><td></td></tr>
<tr><td>Jamie Devane</td><td>ONT</td><td>LW</td><td>29</td><td>1991-02-20</td><td>232 Lbs</td><td>6 ft5</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$725,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Jordan Martinook</td><td>MB</td><td>C/LW/RW</td><td>27</td><td>1992-07-24</td><td>204 Lbs</td><td>6 ft0</td><td>40</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$2,000,000</td><td>$2,000,000</td><td></td><td></td><td></td></tr>
<tr><td>Mackenzie MacEachern</td><td>USA</td><td>LW</td><td>26</td><td>1994-03-08</td><td>190 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>$750,000</td><td>$750,000</td><td>$750,000</td><td></td><td></td></tr>
<tr><td>Matej Tomek</td><td>SVK</td><td>G</td><td>25</td><td>1995-02-10</td><td>181 Lbs</td><td>6 ft3</td><td>0</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>$700,000</td><td>$700,000</td><td>$700,000</td><td></td><td></td></tr>
<tr><td>Matt Read</td><td>ONT</td><td>LW/RW</td><td>33</td><td>1986-06-13</td><td>185 Lbs</td><td>5 ft10</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$750,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Michael Del Zotto</td><td>ONT</td><td>D</td><td>29</td><td>1990-06-23</td><td>195 Lbs</td><td>6 ft0</td><td>67</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>$1,500,000</td><td>$1,500,000</td><td>$1,500,000</td><td></td><td></td></tr>
<tr><td>Michael Rasmussen</td><td>BC</td><td>C/LW/RW</td><td>21</td><td>1999-04-17</td><td>220 Lbs</td><td>6 ft6</td><td>0</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>$1,710,833</td><td>$1,710,833</td><td>$1,710,833</td><td></td><td></td></tr>
<tr><td>Micheal Ferland</td><td>MB</td><td>LW/RW</td><td>28</td><td>1992-04-19</td><td>208 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>4 years</td><td>Pro &amp; Farm</td><td>No</td><td>$3,250,000</td><td>$3,250,000</td><td>$3,250,000</td><td>$3,250,000</td><td></td></tr>
<tr><td>Nelson Nogier</td><td>SKW</td><td>D</td><td>23</td><td>1996-05-26</td><td>191 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$771,667</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Nick Cousins</td><td>ONT</td><td>C/LW/RW</td><td>26</td><td>1993-07-19</td><td>185 Lbs</td><td>5 ft11</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$1,000,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Robert Bortuzzo</td><td>ONT</td><td>D</td><td>31</td><td>1989-03-18</td><td>216 Lbs</td><td>6 ft4</td><td>12</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>$1,750,000</td><td>$1,750,000</td><td>$1,750,000</td><td></td><td></td></tr>
<tr><td>Roland McKeown</td><td>ONT</td><td>D</td><td>24</td><td>1996-01-19</td><td>195 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>$894,167</td><td>$894,167</td><td>$894,167</td><td></td><td></td></tr>
<tr><td>Sam Gagner</td><td>ONT</td><td>C/RW</td><td>30</td><td>1989-08-09</td><td>200 Lbs</td><td>5 ft11</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$3,150,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Semyon Varlamov</td><td>RUS</td><td>G</td><td>31</td><td>1988-04-26</td><td>209 Lbs</td><td>6 ft2</td><td>3</td><td>No</td><td>4 years</td><td>Pro &amp; Farm</td><td>No</td><td>$6,000,000</td><td>$6,000,000</td><td>$6,000,000</td><td>$6,000,000</td><td></td></tr>
<tr><td>Tom McCollum</td><td>USA</td><td>G</td><td>30</td><td>1989-12-06</td><td>226 Lbs</td><td>6 ft2</td><td>12</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$700,000</td><td>$700,000</td><td></td><td></td><td></td></tr>
<tr><td>Tomas Jurco</td><td>SVK</td><td>LW/RW</td><td>27</td><td>1992-12-27</td><td>188 Lbs</td><td>6 ft2</td><td>27</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$950,000</td><td>$950,000</td><td></td><td></td><td></td></tr>
<tr><td>Trevor van Riemsdyk</td><td>USA</td><td>D</td><td>28</td><td>1991-07-24</td><td>188 Lbs</td><td>6 ft2</td><td>13</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$2,300,000</td><td>$2,300,000</td><td></td><td></td><td></td></tr>
<tr><td>Tyson Jost</td><td>CAN</td><td>C/LW</td><td>22</td><td>1998-03-14</td><td>191 Lbs</td><td>5 ft11</td><td>12</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$1,673,333</td><td>$1,673,333</td><td></td><td></td><td></td></tr>
</table><br />
<table class="basictablesorter"><tr>
<td class="STHSW100">Total Players</td><td class="STHSW100">Average Age</td><td class="STHSW120">Average Weight</td><td class="STHSW120">Average Height</td><td class="STHSW120">Average Contract</td><td class="STHSW120">Average Salary</td><td class="STHSW140">Players who can play<br />both Pro and Farm </td><td class="STHSW140">Players who can play<br />Pro Only</td><td class="STHSW140">Players who can play<br />Farm Only</td></tr>
<tr><td>33</td><td>27.5</td><td>198 Lbs</td><td>6 ft 1</td><td>2.18 years</td><td>$2,161,667</td>
<td>33</td><td>0</td><td>0</td></tr></table></div>
<h1 class="TeamPlayerInfoPro_NSH"><a id="Predators">Predators</a></h1>
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
<table class="basictablesorter"><thead><tr>
<th class="STHSW200">Player Name</th><th class="STHSW25">CNT</th><th class="STHSW65">PO</th><th class="STHSW25">Age</th><th class="STHSW65">Birthday</th><th class="STHSW65">Weight</th><th class="STHSW55">Height</th><th class="STHSW45">Health<br /># Loss</th><th class="STHSW45">Force<br />Waiver</th><th class="STHSW65">Contract</th><th class="STHSW100">Type</th><th class="STHSW75">One Way<br />Contract</th><th class="STHSW85">Salary #1</th><th class="STHSW85">Salary #2</th><th class="STHSW85">Salary #3</th><th class="STHSW85">Salary #4</th><th class="STHSW85">Salary #5</th></tr></thead>
<tr><td>Adam Henrique</td><td>ONT</td><td>C/LW</td><td>30</td><td>1990-02-06</td><td>195 Lbs</td><td>6 ft0</td><td>32</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$5,750,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Adrian Kempe</td><td>SWE</td><td>C/LW</td><td>23</td><td>1996-09-13</td><td>195 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$894,167</td><td>$894,167</td><td></td><td></td><td></td></tr>
<tr><td>Alex Killorn</td><td>NS</td><td>LW/RW</td><td>30</td><td>1989-09-14</td><td>196 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$3,950,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Alex Tuch</td><td>USA</td><td>LW/RW</td><td>23</td><td>1996-05-10</td><td>222 Lbs</td><td>6 ft4</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$1,350,000</td><td>$1,350,000</td><td></td><td></td><td></td></tr>
<tr><td>Andreas Athanasiou</td><td>ONT</td><td>C/LW/RW</td><td>25</td><td>1994-08-05</td><td>188 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$3,700,000</td><td>$3,700,000</td><td></td><td></td><td></td></tr>
<tr><td>Blake Comeau</td><td>SKW</td><td>LW/RW</td><td>34</td><td>1986-02-17</td><td>202 Lbs</td><td>6 ft1</td><td>15</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$3,500,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Carey Price</td><td>BC</td><td>G</td><td>32</td><td>1987-08-15</td><td>215 Lbs</td><td>6 ft3</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$8,000,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Charles Hudon</td><td>QUE</td><td>LW/RW</td><td>25</td><td>1994-06-23</td><td>188 Lbs</td><td>5 ft10</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$725,000</td><td>$725,000</td><td></td><td></td><td></td></tr>
<tr><td>Danton Heinen</td><td>BC</td><td>LW/RW</td><td>24</td><td>1995-07-05</td><td>185 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$995,833</td><td>$995,833</td><td></td><td></td><td></td></tr>
<tr><td>Dennis Cholowski</td><td>BC</td><td>D</td><td>22</td><td>1998-02-15</td><td>170 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>$894,166</td><td>$894,166</td><td>$894,166</td><td></td><td></td></tr>
<tr><td>Deryk Engelland</td><td>AB</td><td>D</td><td>38</td><td>1982-04-03</td><td>214 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$6,000,000</td><td>$6,000,000</td><td></td><td></td><td></td></tr>
<tr><td>Erik Cernak</td><td>SVK</td><td>D</td><td>22</td><td>1997-05-28</td><td>203 Lbs</td><td>6 ft3</td><td>6</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>$890,000</td><td>$890,000</td><td>$890,000</td><td></td><td></td></tr>
<tr><td>Greg Carey</td><td>ONT</td><td>C/LW</td><td>30</td><td>1990-04-05</td><td>195 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$700,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Jack Johnson</td><td>USA</td><td>D</td><td>33</td><td>1987-01-12</td><td>227 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$7,000,000</td><td>$7,000,000</td><td></td><td></td><td></td></tr>
<tr><td>Jayson Megna</td><td>USA</td><td>C/RW</td><td>30</td><td>1990-02-01</td><td>195 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$750,000</td><td>$750,000</td><td></td><td></td><td></td></tr>
<tr><td>Jordan Staal</td><td>ONT</td><td>C</td><td>31</td><td>1988-09-10</td><td>220 Lbs</td><td>6 ft4</td><td>63</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$6,500,000</td><td>$6,500,000</td><td></td><td></td><td></td></tr>
<tr><td>Justin Dowling</td><td>AB</td><td>C/LW/RW</td><td>29</td><td>1990-10-01</td><td>185 Lbs</td><td>5 ft10</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$750,000</td><td>$750,000</td><td></td><td></td><td></td></tr>
<tr><td>Kevan Miller</td><td>USA</td><td>D</td><td>32</td><td>1987-11-15</td><td>210 Lbs</td><td>6 ft2</td><td>8</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$2,850,000</td><td>$2,850,000</td><td></td><td></td><td></td></tr>
<tr><td>Kyle Brodziak</td><td>AB</td><td>C/LW/RW</td><td>35</td><td>1984-05-25</td><td>209 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$2,500,000</td><td>$2,500,000</td><td></td><td></td><td></td></tr>
<tr><td>Logan Couture</td><td>ONT</td><td>C</td><td>31</td><td>1989-03-28</td><td>205 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>$7,250,000</td><td>$7,250,000</td><td>$7,250,000</td><td></td><td></td></tr>
<tr><td>Logan Shaw</td><td>NS</td><td>C/RW</td><td>27</td><td>1992-10-05</td><td>208 Lbs</td><td>6 ft3</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$700,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Nick Holden</td><td>AB</td><td>D</td><td>32</td><td>1987-05-14</td><td>214 Lbs</td><td>6 ft4</td><td>12</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$4,000,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Nick Lappin</td><td>USA</td><td>LW/RW</td><td>27</td><td>1992-11-01</td><td>175 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$2,000,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Oscar Klefbom</td><td>SWE</td><td>D</td><td>26</td><td>1993-07-19</td><td>215 Lbs</td><td>6 ft3</td><td>44</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$5,000,000</td><td>$5,000,000</td><td></td><td></td><td></td></tr>
<tr><td>Pheonix Copley</td><td>USA</td><td>G</td><td>28</td><td>1992-01-18</td><td>200 Lbs</td><td>6 ft4</td><td>15</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>$1,250,000</td><td>$1,250,000</td><td>$1,250,000</td><td></td><td></td></tr>
<tr><td>Reilly Smith</td><td>ONT</td><td>LW/RW</td><td>29</td><td>1991-04-01</td><td>185 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>4 years</td><td>Pro &amp; Farm</td><td>No</td><td>$6,500,000</td><td>$6,500,000</td><td>$6,500,000</td><td>$6,500,000</td><td></td></tr>
<tr><td>Ryan Dzingel</td><td>USA</td><td>LW/RW</td><td>28</td><td>1992-03-09</td><td>190 Lbs</td><td>6 ft0</td><td>10</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$900,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Ryan Faragher</td><td>ONT</td><td>G</td><td>29</td><td>1990-07-03</td><td>202 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$650,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Sam Reinhart</td><td>BC</td><td>C/RW</td><td>24</td><td>1995-11-05</td><td>192 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>4 years</td><td>Pro &amp; Farm</td><td>No</td><td>$5,500,000</td><td>$5,500,000</td><td>$5,500,000</td><td>$5,500,000</td><td></td></tr>
<tr><td>Stefan Matteau</td><td>USA</td><td>LW</td><td>26</td><td>1994-02-23</td><td>220 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$925,000</td><td>$925,000</td><td></td><td></td><td></td></tr>
<tr><td>Stuart Percy</td><td>ONT</td><td>D</td><td>26</td><td>1993-05-18</td><td>187 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$700,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Zach Redmond</td><td>USA</td><td>D</td><td>31</td><td>1988-07-25</td><td>208 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$700,000</td><td></td><td></td><td></td><td></td></tr>
</table><br />
<table class="basictablesorter"><tr>
<td class="STHSW100">Total Players</td><td class="STHSW100">Average Age</td><td class="STHSW120">Average Weight</td><td class="STHSW120">Average Height</td><td class="STHSW120">Average Contract</td><td class="STHSW120">Average Salary</td><td class="STHSW140">Players who can play<br />both Pro and Farm </td><td class="STHSW140">Players who can play<br />Pro Only</td><td class="STHSW140">Players who can play<br />Farm Only</td></tr>
<tr><td>32</td><td>28.5</td><td>200 Lbs</td><td>6 ft 2</td><td>1.88 years</td><td>$2,930,443</td>
<td>32</td><td>0</td><td>0</td></tr></table></div>
<h1 class="TeamPlayerInfoPro_NYR"><a id="Rangers">Rangers</a></h1>
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
<table class="basictablesorter"><thead><tr>
<th class="STHSW200">Player Name</th><th class="STHSW25">CNT</th><th class="STHSW65">PO</th><th class="STHSW25">Age</th><th class="STHSW65">Birthday</th><th class="STHSW65">Weight</th><th class="STHSW55">Height</th><th class="STHSW45">Health<br /># Loss</th><th class="STHSW45">Force<br />Waiver</th><th class="STHSW65">Contract</th><th class="STHSW100">Type</th><th class="STHSW75">One Way<br />Contract</th><th class="STHSW85">Salary #1</th><th class="STHSW85">Salary #2</th><th class="STHSW85">Salary #3</th><th class="STHSW85">Salary #4</th><th class="STHSW85">Salary #5</th></tr></thead>
<tr><td>Artem Anisimov</td><td>RUS</td><td>C/LW/RW</td><td>31</td><td>1988-05-24</td><td>198 Lbs</td><td>6 ft4</td><td>7</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>$4,850,000</td><td>$4,850,000</td><td>$4,850,000</td><td></td><td></td></tr>
<tr><td>Artturi Lehkonen</td><td>FIN</td><td>LW/RW</td><td>24</td><td>1995-07-04</td><td>183 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$925,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Ben Hutton</td><td>ONT</td><td>D</td><td>27</td><td>1993-04-20</td><td>207 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$2,800,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Carter Hutton</td><td>ONT</td><td>G</td><td>34</td><td>1985-12-18</td><td>202 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$3,500,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Charlie Coyle</td><td>USA</td><td>C/LW/RW</td><td>28</td><td>1992-03-02</td><td>221 Lbs</td><td>6 ft3</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$4,000,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Charlie Lindgren</td><td>USA</td><td>G</td><td>26</td><td>1993-12-17</td><td>190 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$1,000,000</td><td>$1,000,000</td><td></td><td></td><td></td></tr>
<tr><td>Chris Tierney</td><td>ONT</td><td>C/LW</td><td>25</td><td>1994-07-01</td><td>195 Lbs</td><td>6 ft1</td><td>5</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$2,900,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Claude Giroux</td><td>ONT</td><td>C/LW/RW</td><td>32</td><td>1988-01-12</td><td>185 Lbs</td><td>5 ft11</td><td>0</td><td>No</td><td>4 years</td><td>Pro &amp; Farm</td><td>No</td><td>$8,660,000</td><td>$8,660,000</td><td>$8,660,000</td><td>$8,660,000</td><td></td></tr>
<tr><td>Colin White</td><td>USA</td><td>C/RW</td><td>23</td><td>1997-01-30</td><td>183 Lbs</td><td>6 ft0</td><td>13</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>$1,491,667</td><td>$1,491,667</td><td>$1,491,667</td><td></td><td></td></tr>
<tr><td>Erik Gustafsson</td><td>SWE</td><td>D</td><td>28</td><td>1992-03-14</td><td>176 Lbs</td><td>6 ft0</td><td>9</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$1,200,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Gabriel Landeskog</td><td>SWE</td><td>LW</td><td>27</td><td>1992-11-23</td><td>215 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$6,750,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Ian McCoshen</td><td>USA</td><td>D</td><td>24</td><td>1995-08-05</td><td>217 Lbs</td><td>6 ft3</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$1,025,000</td><td>$1,025,000</td><td></td><td></td><td></td></tr>
<tr><td>Jesper Bratt</td><td>SWE</td><td>LW/RW</td><td>21</td><td>1998-07-30</td><td>175 Lbs</td><td>5 ft10</td><td>46</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$749,167</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Jesper Fast</td><td>SWE</td><td>RW</td><td>28</td><td>1991-12-02</td><td>191 Lbs</td><td>6 ft0</td><td>12</td><td>No</td><td>4 years</td><td>Pro &amp; Farm</td><td>No</td><td>$2,200,000</td><td>$2,200,000</td><td>$2,200,000</td><td>$2,200,000</td><td></td></tr>
<tr><td>Kevin Porter</td><td>USA</td><td>C</td><td>34</td><td>1986-03-12</td><td>191 Lbs</td><td>5 ft11</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$800,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Kevin Roy</td><td>QUE</td><td>LW/RW</td><td>26</td><td>1993-05-20</td><td>174 Lbs</td><td>5 ft9</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$925,000</td><td>$925,000</td><td></td><td></td><td></td></tr>
<tr><td>Marc-Andre Fleury</td><td>QUE</td><td>G</td><td>35</td><td>1984-11-28</td><td>180 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>$8,300,000</td><td>$8,300,000</td><td>$8,300,000</td><td></td><td></td></tr>
<tr><td>Mark Stone</td><td>MB</td><td>RW</td><td>27</td><td>1992-05-13</td><td>219 Lbs</td><td>6 ft4</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$7,750,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Matt Grzelcyk</td><td>USA</td><td>D</td><td>26</td><td>1994-01-05</td><td>174 Lbs</td><td>5 ft9</td><td>27</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$1,400,000</td><td>$1,400,000</td><td></td><td></td><td></td></tr>
<tr><td>Matt Taormina</td><td>USA</td><td>D</td><td>33</td><td>1986-10-20</td><td>188 Lbs</td><td>5 ft10</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$650,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Nick Jensen</td><td>USA</td><td>D</td><td>29</td><td>1990-09-20</td><td>194 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>5 years</td><td>Pro &amp; Farm</td><td>No</td><td>$4,500,000</td><td>$4,500,000</td><td>$4,500,000</td><td>$4,500,000</td><td>$4,500,000</td></tr>
<tr><td>Reid Boucher</td><td>USA</td><td>LW/RW</td><td>26</td><td>1993-09-08</td><td>195 Lbs</td><td>5 ft10</td><td>0</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>$900,000</td><td>$900,000</td><td>$900,000</td><td></td><td></td></tr>
<tr><td>Robby Fabbri</td><td>ONT</td><td>C/LW</td><td>24</td><td>1996-01-22</td><td>190 Lbs</td><td>5 ft10</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$900,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Roman Josi</td><td>SWI</td><td>D</td><td>29</td><td>1990-05-31</td><td>201 Lbs</td><td>6 ft1</td><td>40</td><td>No</td><td>4 years</td><td>Pro &amp; Farm</td><td>No</td><td>$8,000,000</td><td>$8,000,000</td><td>$8,000,000</td><td>$8,000,000</td><td></td></tr>
<tr><td>Ryan Donato</td><td>USA</td><td>C/LW</td><td>24</td><td>1996-04-09</td><td>181 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>$1,350,000</td><td>$1,350,000</td><td>$1,350,000</td><td></td><td></td></tr>
<tr><td>Shea Weber</td><td>BC</td><td>D</td><td>34</td><td>1985-08-13</td><td>230 Lbs</td><td>6 ft4</td><td>65</td><td>No</td><td>4 years</td><td>Pro &amp; Farm</td><td>No</td><td>$8,200,000</td><td>$8,200,000</td><td>$8,200,000</td><td>$8,200,000</td><td></td></tr>
<tr><td>Zach Trotman</td><td>USA</td><td>D</td><td>29</td><td>1990-08-26</td><td>217 Lbs</td><td>6 ft3</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$975,000</td><td></td><td></td><td></td><td></td></tr>
</table><br />
<table class="basictablesorter"><tr>
<td class="STHSW100">Total Players</td><td class="STHSW100">Average Age</td><td class="STHSW120">Average Weight</td><td class="STHSW120">Average Height</td><td class="STHSW120">Average Contract</td><td class="STHSW120">Average Salary</td><td class="STHSW140">Players who can play<br />both Pro and Farm </td><td class="STHSW140">Players who can play<br />Pro Only</td><td class="STHSW140">Players who can play<br />Farm Only</td></tr>
<tr><td>27</td><td>27.9</td><td>195 Lbs</td><td>6 ft 1</td><td>2.11 years</td><td>$3,211,142</td>
<td>27</td><td>0</td><td>0</td></tr></table></div>
<h1 class="TeamPlayerInfoPro_DET"><a id="RedWings">Red Wings</a></h1>
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
<table class="basictablesorter"><thead><tr>
<th class="STHSW200">Player Name</th><th class="STHSW25">CNT</th><th class="STHSW65">PO</th><th class="STHSW25">Age</th><th class="STHSW65">Birthday</th><th class="STHSW65">Weight</th><th class="STHSW55">Height</th><th class="STHSW45">Health<br /># Loss</th><th class="STHSW45">Force<br />Waiver</th><th class="STHSW65">Contract</th><th class="STHSW100">Type</th><th class="STHSW75">One Way<br />Contract</th><th class="STHSW85">Salary #1</th><th class="STHSW85">Salary #2</th><th class="STHSW85">Salary #3</th><th class="STHSW85">Salary #4</th><th class="STHSW85">Salary #5</th></tr></thead>
<tr><td>Aaron Dell</td><td>AB</td><td>G</td><td>30</td><td>1989-05-04</td><td>200 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$2,000,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Andrew Mangiapane</td><td>ONT</td><td>LW</td><td>24</td><td>1996-04-04</td><td>184 Lbs</td><td>5 ft10</td><td>0</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>$800,000</td><td>$800,000</td><td>$800,000</td><td></td><td></td></tr>
<tr><td>Anton Lindholm</td><td>SWE</td><td>D</td><td>25</td><td>1994-11-29</td><td>191 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$925,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Austin Wagner</td><td>ALB</td><td>LW/RW</td><td>22</td><td>1997-06-23</td><td>178 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>$925,000</td><td>$925,000</td><td>$925,000</td><td></td><td></td></tr>
<tr><td>Brayden Point</td><td>AB</td><td>C/RW</td><td>24</td><td>1996-03-13</td><td>166 Lbs</td><td>5 ft10</td><td>28</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$919,167</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Calvin de Haan</td><td>ONT</td><td>D</td><td>28</td><td>1991-05-09</td><td>198 Lbs</td><td>6 ft1</td><td>3</td><td>No</td><td>4 years</td><td>Pro &amp; Farm</td><td>No</td><td>$4,550,000</td><td>$4,550,000</td><td>$4,550,000</td><td>$4,550,000</td><td></td></tr>
<tr><td>Colin McDonald</td><td>USA</td><td>RW</td><td>35</td><td>1984-09-30</td><td>219 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$700,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Connor Clifton</td><td>USA</td><td>D</td><td>24</td><td>1995-04-28</td><td>175 Lbs</td><td>5 ft11</td><td>0</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>$735,000</td><td>$735,000</td><td>$735,000</td><td></td><td></td></tr>
<tr><td>Connor McDavid</td><td>ONT</td><td>C</td><td>23</td><td>1997-01-13</td><td>192 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$3,775,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Conor Sheary</td><td>USA</td><td>LW</td><td>27</td><td>1992-06-08</td><td>175 Lbs</td><td>5 ft8</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$3,000,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Ivan Barbashev</td><td>RUS</td><td>C/LW</td><td>24</td><td>1995-12-14</td><td>187 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$863,333</td><td>$863,333</td><td></td><td></td><td></td></tr>
<tr><td>Jake McCabe</td><td>USA</td><td>D</td><td>26</td><td>1993-10-12</td><td>210 Lbs</td><td>6 ft1</td><td>75</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$2,500,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Jared McCann</td><td>ONT</td><td>C/LW</td><td>23</td><td>1996-05-31</td><td>198 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$1,250,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Korbinian Holzer</td><td>GER</td><td>D</td><td>32</td><td>1988-02-16</td><td>214 Lbs</td><td>6 ft3</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$700,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Kyle Turris</td><td>BC</td><td>C/LW/RW</td><td>30</td><td>1989-08-14</td><td>190 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$5,000,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Marc Staal</td><td>ONT</td><td>D</td><td>33</td><td>1987-01-12</td><td>209 Lbs</td><td>6 ft4</td><td>6</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$6,650,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Marcus Hogberg</td><td>SWE</td><td>G</td><td>25</td><td>1994-11-24</td><td>209 Lbs</td><td>6 ft5</td><td>0</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>$625,000</td><td>$625,000</td><td>$625,000</td><td></td><td></td></tr>
<tr><td>Mark Giordano</td><td>ONT</td><td>D</td><td>36</td><td>1983-10-02</td><td>198 Lbs</td><td>6 ft0</td><td>98</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$7,500,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Martin Frk</td><td>CZE</td><td>LW/RW</td><td>26</td><td>1993-10-04</td><td>205 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$863,333</td><td>$863,333</td><td></td><td></td><td></td></tr>
<tr><td>Mathew Dumba</td><td>SKW</td><td>D</td><td>25</td><td>1994-07-24</td><td>184 Lbs</td><td>6 ft0</td><td>82</td><td>No</td><td>4 years</td><td>Pro &amp; Farm</td><td>No</td><td>$6,000,000</td><td>$6,000,000</td><td>$6,000,000</td><td>$6,000,000</td><td></td></tr>
<tr><td>Mathieu Joseph</td><td>QUE</td><td>LW/RW</td><td>23</td><td>1997-02-09</td><td>173 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>$910,833</td><td>$910,833</td><td>$910,833</td><td></td><td></td></tr>
<tr><td>Matt Duchene</td><td>ONT</td><td>C</td><td>29</td><td>1991-01-15</td><td>195 Lbs</td><td>5 ft11</td><td>0</td><td>No</td><td>5 years</td><td>Pro &amp; Farm</td><td>No</td><td>$7,700,000</td><td>$7,700,000</td><td>$7,700,000</td><td>$7,700,000</td><td>$7,700,000</td></tr>
<tr><td>Oliver Bjorkstrand</td><td>DEN</td><td>LW/RW</td><td>25</td><td>1995-04-09</td><td>177 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$871,667</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Patrik Laine</td><td>FIN</td><td>LW/RW</td><td>22</td><td>1998-04-19</td><td>206 Lbs</td><td>6 ft5</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$3,575,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Paul Thompson</td><td>USA</td><td>RW</td><td>31</td><td>1988-11-30</td><td>200 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$700,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Ryan Suter</td><td>USA</td><td>D</td><td>35</td><td>1985-01-20</td><td>202 Lbs</td><td>6 ft2</td><td>31</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>$9,625,000</td><td>$9,625,000</td><td>$9,625,000</td><td></td><td></td></tr>
<tr><td>Sergei Bobrovsky</td><td>RUS</td><td>G</td><td>31</td><td>1988-09-19</td><td>182 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>6 years</td><td>Pro &amp; Farm</td><td>No</td><td>$9,150,000</td><td>$9,150,000</td><td>$9,150,000</td><td>$9,150,000</td><td>$9,150,000</td></tr>
<tr><td>Stefan Noesen</td><td>USA</td><td>LW/RW</td><td>27</td><td>1993-02-12</td><td>205 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$1,075,833</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Teddy Blueger</td><td>LAT</td><td>C</td><td>25</td><td>1994-08-14</td><td>185 Lbs</td><td>6 ft0</td><td>31</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>$925,000</td><td>$925,000</td><td>$925,000</td><td></td><td></td></tr>
<tr><td>Torey Krug</td><td>USA</td><td>D</td><td>29</td><td>1991-04-12</td><td>186 Lbs</td><td>5 ft9</td><td>0</td><td>No</td><td>4 years</td><td>Pro &amp; Farm</td><td>No</td><td>$5,600,000</td><td>$5,600,000</td><td>$5,600,000</td><td>$5,600,000</td><td></td></tr>
</table><br />
<table class="basictablesorter"><tr>
<td class="STHSW100">Total Players</td><td class="STHSW100">Average Age</td><td class="STHSW120">Average Weight</td><td class="STHSW120">Average Height</td><td class="STHSW120">Average Contract</td><td class="STHSW120">Average Salary</td><td class="STHSW140">Players who can play<br />both Pro and Farm </td><td class="STHSW140">Players who can play<br />Pro Only</td><td class="STHSW140">Players who can play<br />Farm Only</td></tr>
<tr><td>30</td><td>27.3</td><td>193 Lbs</td><td>6 ft 1</td><td>2.13 years</td><td>$3,013,806</td>
<td>30</td><td>0</td><td>0</td></tr></table></div>
<h1 class="TeamPlayerInfoPro_BUF"><a id="Sabres">Sabres</a></h1>
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
<table class="basictablesorter"><thead><tr>
<th class="STHSW200">Player Name</th><th class="STHSW25">CNT</th><th class="STHSW65">PO</th><th class="STHSW25">Age</th><th class="STHSW65">Birthday</th><th class="STHSW65">Weight</th><th class="STHSW55">Height</th><th class="STHSW45">Health<br /># Loss</th><th class="STHSW45">Force<br />Waiver</th><th class="STHSW65">Contract</th><th class="STHSW100">Type</th><th class="STHSW75">One Way<br />Contract</th><th class="STHSW85">Salary #1</th><th class="STHSW85">Salary #2</th><th class="STHSW85">Salary #3</th><th class="STHSW85">Salary #4</th><th class="STHSW85">Salary #5</th></tr></thead>
<tr><td>Anders Lee</td><td>USA</td><td>LW</td><td>29</td><td>1990-07-03</td><td>231 Lbs</td><td>6 ft3</td><td>0</td><td>No</td><td>4 years</td><td>Pro &amp; Farm</td><td>No</td><td>$5,500,000</td><td>$5,500,000</td><td>$5,500,000</td><td>$5,500,000</td><td></td></tr>
<tr><td>Anze Kopitar</td><td>SLO</td><td>C</td><td>32</td><td>1987-08-23</td><td>224 Lbs</td><td>6 ft3</td><td>19</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$7,000,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Brent Seabrook</td><td>BC</td><td>D</td><td>35</td><td>1985-04-20</td><td>220 Lbs</td><td>6 ft3</td><td>0</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>$7,750,000</td><td>$7,750,000</td><td>$7,750,000</td><td></td><td></td></tr>
<tr><td>Chad Ruhwedel</td><td>USA</td><td>D</td><td>29</td><td>1990-05-07</td><td>191 Lbs</td><td>5 ft11</td><td>0</td><td>No</td><td>4 years</td><td>Pro &amp; Farm</td><td>No</td><td>$700,000</td><td>$700,000</td><td>$700,000</td><td>$700,000</td><td></td></tr>
<tr><td>Chris Kreider</td><td>USA</td><td>LW</td><td>28</td><td>1991-04-30</td><td>224 Lbs</td><td>6 ft3</td><td>13</td><td>No</td><td>4 years</td><td>Pro &amp; Farm</td><td>No</td><td>$5,100,000</td><td>$5,100,000</td><td>$5,100,000</td><td>$5,100,000</td><td></td></tr>
<tr><td>Cole Schneider</td><td>USA</td><td>LW/RW</td><td>29</td><td>1990-08-26</td><td>200 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$1,000,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Dakota Mermis</td><td>USA</td><td>D</td><td>26</td><td>1994-01-05</td><td>188 Lbs</td><td>5 ft11</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$700,000</td><td>$700,000</td><td></td><td></td><td></td></tr>
<tr><td>Dan Hamhuis</td><td>BC</td><td>D</td><td>37</td><td>1982-12-13</td><td>204 Lbs</td><td>6 ft1</td><td>21</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$4,000,000</td><td>$4,000,000</td><td></td><td></td><td></td></tr>
<tr><td>Derek Grant</td><td>BC</td><td>C/LW</td><td>30</td><td>1990-04-20</td><td>215 Lbs</td><td>6 ft3</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$700,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>J.T. Compher</td><td>USA</td><td>C/RW</td><td>25</td><td>1995-04-08</td><td>193 Lbs</td><td>6 ft0</td><td>15</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$1,000,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Jacob Nilsson</td><td>SWE</td><td>C</td><td>26</td><td>1993-10-12</td><td>181 Lbs</td><td>5 ft11</td><td>0</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>$700,000</td><td>$700,000</td><td>$700,000</td><td></td><td></td></tr>
<tr><td>Josh Manson</td><td>USA</td><td>D</td><td>28</td><td>1991-10-07</td><td>213 Lbs</td><td>6 ft3</td><td>9</td><td>No</td><td>5 years</td><td>Pro &amp; Farm</td><td>No</td><td>$4,500,000</td><td>$4,500,000</td><td>$4,500,000</td><td>$4,500,000</td><td>$4,500,000</td></tr>
<tr><td>Justin Bailey</td><td>USA</td><td>RW</td><td>24</td><td>1995-07-01</td><td>214 Lbs</td><td>6 ft3</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$894,167</td><td>$894,167</td><td></td><td></td><td></td></tr>
<tr><td>Ken Appleby</td><td>ONT</td><td>G</td><td>25</td><td>1995-04-09</td><td>207 Lbs</td><td>6 ft4</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$650,000</td><td>$650,000</td><td></td><td></td><td></td></tr>
<tr><td>Kurtis MacDermid</td><td>QUE</td><td>D</td><td>26</td><td>1994-03-25</td><td>208 Lbs</td><td>6 ft5</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$650,000</td><td>$650,000</td><td></td><td></td><td></td></tr>
<tr><td>Linus Ullmark</td><td>SWE</td><td>G</td><td>26</td><td>1993-07-30</td><td>221 Lbs</td><td>6 ft4</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$750,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Magnus Paajarvi</td><td>SWE</td><td>LW/RW</td><td>29</td><td>1991-04-12</td><td>206 Lbs</td><td>6 ft3</td><td>4</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$1,900,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Mario Kempe</td><td>SWE</td><td>C/LW/RW</td><td>31</td><td>1988-09-19</td><td>185 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$650,000</td><td>$650,000</td><td></td><td></td><td></td></tr>
<tr><td>Matt Niskanen</td><td>USA</td><td>D</td><td>33</td><td>1986-12-06</td><td>203 Lbs</td><td>6 ft1</td><td>2</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>$6,100,000</td><td>$6,100,000</td><td>$6,100,000</td><td></td><td></td></tr>
<tr><td>Michael Amadio</td><td>ONT</td><td>C/RW</td><td>23</td><td>1996-05-13</td><td>190 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$715,000</td><td>$715,000</td><td></td><td></td><td></td></tr>
<tr><td>Mikael Backlund</td><td>SWE</td><td>C</td><td>31</td><td>1989-03-16</td><td>199 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$5,000,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Pavel Buchnevich</td><td>RUS</td><td>LW/RW</td><td>25</td><td>1995-04-17</td><td>191 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$925,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Rasmus Ristolainen</td><td>FIN</td><td>D</td><td>25</td><td>1994-10-27</td><td>218 Lbs</td><td>6 ft4</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$5,700,000</td><td>$5,700,000</td><td></td><td></td><td></td></tr>
<tr><td>Remi Elie</td><td>ONT</td><td>LW</td><td>25</td><td>1995-04-15</td><td>210 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$894,167</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Rickard Rakell</td><td>SWE</td><td>C/LW/RW</td><td>26</td><td>1993-05-05</td><td>198 Lbs</td><td>6 ft2</td><td>8</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$4,150,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Ross Johnston</td><td>PEI</td><td>LW</td><td>26</td><td>1994-02-18</td><td>235 Lbs</td><td>6 ft5</td><td>0</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>$1,000,000</td><td>$1,000,000</td><td>$1,000,000</td><td></td><td></td></tr>
<tr><td>Sidney Crosby</td><td>NS</td><td>C</td><td>32</td><td>1987-08-07</td><td>200 Lbs</td><td>5 ft11</td><td>28</td><td>No</td><td>6 years</td><td>Pro &amp; Farm</td><td>No</td><td>$11,000,000</td><td>$11,000,000</td><td>$11,000,000</td><td>$11,000,000</td><td>$11,000,000</td></tr>
<tr><td>Taylor Fedun</td><td>AB</td><td>D</td><td>31</td><td>1988-06-04</td><td>198 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>4 years</td><td>Pro &amp; Farm</td><td>No</td><td>$700,000</td><td>$700,000</td><td>$700,000</td><td>$700,000</td><td></td></tr>
<tr><td>Teuvo Teravainen</td><td>FIN</td><td>LW/RW</td><td>25</td><td>1994-09-11</td><td>178 Lbs</td><td>5 ft11</td><td>30</td><td>No</td><td>5 years</td><td>Pro &amp; Farm</td><td>No</td><td>$5,400,000</td><td>$5,400,000</td><td>$5,400,000</td><td>$5,400,000</td><td>$5,400,000</td></tr>
<tr><td>Thomas Greiss</td><td>GER</td><td>G</td><td>34</td><td>1986-01-29</td><td>227 Lbs</td><td>6 ft1</td><td>11</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$650,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Tim Schaller</td><td>USA</td><td>LW/RW</td><td>29</td><td>1990-11-16</td><td>210 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$1,900,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Trevor Smith</td><td>ONT</td><td>C/LW</td><td>35</td><td>1985-02-08</td><td>195 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$650,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Turner Elson</td><td>BC</td><td>LW/RW</td><td>27</td><td>1992-09-12</td><td>184 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>5 years</td><td>Pro &amp; Farm</td><td>No</td><td>$650,000</td><td>$650,000</td><td>$650,000</td><td>$650,000</td><td>$650,000</td></tr>
<tr><td>Tyler Lewington</td><td>AB</td><td>D</td><td>25</td><td>1994-12-05</td><td>189 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$665,000</td><td>$665,000</td><td></td><td></td><td></td></tr>
<tr><td>Yannick Weber</td><td>SWI</td><td>D</td><td>31</td><td>1988-09-23</td><td>200 Lbs</td><td>5 ft11</td><td>0</td><td>No</td><td>4 years</td><td>Pro &amp; Farm</td><td>No</td><td>$700,000</td><td>$700,000</td><td>$700,000</td><td>$700,000</td><td></td></tr>
<tr><td>Zac Rinaldo</td><td>ONT</td><td>LW/RW</td><td>29</td><td>1990-06-15</td><td>192 Lbs</td><td>5 ft10</td><td>9</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$650,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Zdeno Chara</td><td>SVK</td><td>D</td><td>43</td><td>1977-03-18</td><td>250 Lbs</td><td>6 ft11</td><td>21</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$7,000,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Zemgus Girgensons</td><td>LAT</td><td>C/LW/RW</td><td>26</td><td>1994-01-05</td><td>207 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$1,400,000</td><td></td><td></td><td></td><td></td></tr>
</table><br />
<table class="basictablesorter"><tr>
<td class="STHSW100">Total Players</td><td class="STHSW100">Average Age</td><td class="STHSW120">Average Weight</td><td class="STHSW120">Average Height</td><td class="STHSW120">Average Contract</td><td class="STHSW120">Average Salary</td><td class="STHSW140">Players who can play<br />both Pro and Farm </td><td class="STHSW140">Players who can play<br />Pro Only</td><td class="STHSW140">Players who can play<br />Farm Only</td></tr>
<tr><td>38</td><td>28.8</td><td>205 Lbs</td><td>6 ft 2</td><td>2.29 years</td><td>$2,631,404</td>
<td>38</td><td>0</td><td>0</td></tr></table></div>
<h1 class="TeamPlayerInfoPro_OTT"><a id="Senators">Senators</a></h1>
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
<table class="basictablesorter"><thead><tr>
<th class="STHSW200">Player Name</th><th class="STHSW25">CNT</th><th class="STHSW65">PO</th><th class="STHSW25">Age</th><th class="STHSW65">Birthday</th><th class="STHSW65">Weight</th><th class="STHSW55">Height</th><th class="STHSW45">Health<br /># Loss</th><th class="STHSW45">Force<br />Waiver</th><th class="STHSW65">Contract</th><th class="STHSW100">Type</th><th class="STHSW75">One Way<br />Contract</th><th class="STHSW85">Salary #1</th><th class="STHSW85">Salary #2</th><th class="STHSW85">Salary #3</th><th class="STHSW85">Salary #4</th><th class="STHSW85">Salary #5</th></tr></thead>
<tr><td>Alex Galchenyuk</td><td>USA</td><td>C/LW</td><td>26</td><td>1994-02-11</td><td>207 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$4,900,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Andrei Vasilevskiy</td><td>RUS</td><td>G</td><td>25</td><td>1994-07-24</td><td>207 Lbs</td><td>6 ft3</td><td>8</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$4,000,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Bryan Rust</td><td>USA</td><td>LW/RW</td><td>27</td><td>1992-05-11</td><td>192 Lbs</td><td>5 ft11</td><td>7</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>$3,500,000</td><td>$3,500,000</td><td>$3,500,000</td><td></td><td></td></tr>
<tr><td>Calvin Pickard</td><td>NB</td><td>G</td><td>28</td><td>1992-04-14</td><td>207 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$700,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Corey Tropp</td><td>USA</td><td>C/RW</td><td>30</td><td>1989-07-25</td><td>185 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$750,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>David Pastrnak</td><td>CZE</td><td>RW</td><td>23</td><td>1996-05-25</td><td>188 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>4 years</td><td>Pro &amp; Farm</td><td>No</td><td>$6,750,000</td><td>$6,750,000</td><td>$6,750,000</td><td>$6,750,000</td><td></td></tr>
<tr><td>Dean Kukan</td><td>SWI</td><td>D</td><td>26</td><td>1993-07-08</td><td>186 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$725,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Drew Stafford</td><td>USA</td><td>LW/RW</td><td>34</td><td>1985-10-30</td><td>215 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$3,350,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Dylan McIlrath</td><td>MB</td><td>D</td><td>28</td><td>1992-04-20</td><td>236 Lbs</td><td>6 ft5</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$625,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Erik Johnson</td><td>USA</td><td>D</td><td>32</td><td>1988-03-21</td><td>225 Lbs</td><td>6 ft4</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$6,750,000</td><td>$6,750,000</td><td></td><td></td><td></td></tr>
<tr><td>Frank Corrado</td><td>ONT</td><td>D</td><td>27</td><td>1993-03-26</td><td>205 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$1,000,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Fredrik Claesson</td><td>SWE</td><td>D</td><td>27</td><td>1992-11-24</td><td>200 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$750,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Jason Dickinson</td><td>ONT</td><td>C/LW/RW</td><td>24</td><td>1995-07-04</td><td>205 Lbs</td><td>6 ft2</td><td>13</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$894,167</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Joakim Nordstrom</td><td>SWE</td><td>C/LW</td><td>28</td><td>1992-02-25</td><td>189 Lbs</td><td>6 ft1</td><td>32</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$1,000,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>John Hayden</td><td>USA</td><td>LW/RW</td><td>25</td><td>1995-02-14</td><td>223 Lbs</td><td>6 ft3</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$925,000</td><td>$925,000</td><td></td><td></td><td></td></tr>
<tr><td>Jordan Nolan</td><td>ONT</td><td>LW/RW</td><td>30</td><td>1989-06-22</td><td>219 Lbs</td><td>6 ft3</td><td>14</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$850,000</td><td>$850,000</td><td></td><td></td><td></td></tr>
<tr><td>Max Lagace</td><td>QUE</td><td>G</td><td>27</td><td>1993-01-11</td><td>190 Lbs</td><td>6 ft2</td><td>2</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$700,000</td><td>$700,000</td><td></td><td></td><td></td></tr>
<tr><td>Michael Bunting</td><td>ONT</td><td>C/LW/RW</td><td>24</td><td>1995-09-17</td><td>197 Lbs</td><td>5 ft11</td><td>0</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>$925,000</td><td>$925,000</td><td>$925,000</td><td></td><td></td></tr>
<tr><td>Nick Leddy</td><td>USA</td><td>D</td><td>29</td><td>1991-03-20</td><td>204 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>$5,500,000</td><td>$5,500,000</td><td>$5,500,000</td><td></td><td></td></tr>
<tr><td>Nick Moutrey</td><td>ONT</td><td>C/LW/RW</td><td>24</td><td>1995-06-23</td><td>218 Lbs</td><td>6 ft3</td><td>0</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>$525,000</td><td>$525,000</td><td>$525,000</td><td></td><td></td></tr>
<tr><td>Pierre-Edouard Bellemare</td><td>FRA</td><td>C</td><td>35</td><td>1985-03-05</td><td>198 Lbs</td><td>6 ft0</td><td>9</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$2,300,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Ryan Johansen</td><td>BC</td><td>C</td><td>27</td><td>1992-07-30</td><td>218 Lbs</td><td>6 ft3</td><td>0</td><td>No</td><td>4 years</td><td>Pro &amp; Farm</td><td>No</td><td>$8,000,000</td><td>$8,000,000</td><td>$8,000,000</td><td>$8,000,000</td><td></td></tr>
<tr><td>Ryan McDonagh</td><td>USA</td><td>D</td><td>30</td><td>1989-06-12</td><td>215 Lbs</td><td>6 ft1</td><td>30</td><td>No</td><td>5 years</td><td>Pro &amp; Farm</td><td>No</td><td>$7,100,000</td><td>$7,100,000</td><td>$7,100,000</td><td>$7,100,000</td><td>$7,100,000</td></tr>
<tr><td>Ryan Reaves</td><td>MB</td><td>RW</td><td>33</td><td>1987-01-20</td><td>225 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$1,750,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Tim Heed</td><td>SWE</td><td>D</td><td>29</td><td>1991-01-27</td><td>185 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$716,667</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Trevor Carrick</td><td>ONT</td><td>D</td><td>25</td><td>1994-07-04</td><td>186 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$750,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Trevor Lewis</td><td>USA</td><td>C/RW</td><td>33</td><td>1987-01-07</td><td>205 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$1,500,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Vladimir Tarasenko</td><td>RUS</td><td>RW</td><td>28</td><td>1991-12-13</td><td>225 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$8,000,000</td><td></td><td></td><td></td><td></td></tr>
</table><br />
<table class="basictablesorter"><tr>
<td class="STHSW100">Total Players</td><td class="STHSW100">Average Age</td><td class="STHSW120">Average Weight</td><td class="STHSW120">Average Height</td><td class="STHSW120">Average Contract</td><td class="STHSW120">Average Salary</td><td class="STHSW140">Players who can play<br />both Pro and Farm </td><td class="STHSW140">Players who can play<br />Pro Only</td><td class="STHSW140">Players who can play<br />Farm Only</td></tr>
<tr><td>28</td><td>28.0</td><td>206 Lbs</td><td>6 ft 1</td><td>1.79 years</td><td>$2,686,994</td>
<td>28</td><td>0</td><td>0</td></tr></table></div>
<h1 class="TeamPlayerInfoPro_SJS"><a id="Sharks">Sharks</a></h1>
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
<table class="basictablesorter"><thead><tr>
<th class="STHSW200">Player Name</th><th class="STHSW25">CNT</th><th class="STHSW65">PO</th><th class="STHSW25">Age</th><th class="STHSW65">Birthday</th><th class="STHSW65">Weight</th><th class="STHSW55">Height</th><th class="STHSW45">Health<br /># Loss</th><th class="STHSW45">Force<br />Waiver</th><th class="STHSW65">Contract</th><th class="STHSW100">Type</th><th class="STHSW75">One Way<br />Contract</th><th class="STHSW85">Salary #1</th><th class="STHSW85">Salary #2</th><th class="STHSW85">Salary #3</th><th class="STHSW85">Salary #4</th><th class="STHSW85">Salary #5</th></tr></thead>
<tr><td>Aleksander Barkov</td><td>FIN</td><td>C</td><td>24</td><td>1995-09-02</td><td>213 Lbs</td><td>6 ft4</td><td>0</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>$5,900,000</td><td>$5,900,000</td><td>$5,900,000</td><td></td><td></td></tr>
<tr><td>Andrew Poturalski</td><td>USA</td><td>C</td><td>26</td><td>1994-01-14</td><td>181 Lbs</td><td>5 ft10</td><td>33</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$1,000,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Brendan Leipsic</td><td>MB</td><td>LW/RW</td><td>25</td><td>1994-05-19</td><td>180 Lbs</td><td>5 ft10</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$895,000</td><td>$895,000</td><td></td><td></td><td></td></tr>
<tr><td>Brett Kulak</td><td>AB</td><td>D</td><td>26</td><td>1994-01-05</td><td>187 Lbs</td><td>6 ft2</td><td>37</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>$1,850,000</td><td>$1,850,000</td><td>$1,850,000</td><td></td><td></td></tr>
<tr><td>Dan Renouf</td><td>ONT</td><td>D</td><td>25</td><td>1994-06-01</td><td>205 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$850,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Darcy Kuemper</td><td>SKW</td><td>G</td><td>29</td><td>1990-05-04</td><td>215 Lbs</td><td>6 ft5</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$1,850,000</td><td>$1,850,000</td><td></td><td></td><td></td></tr>
<tr><td>Derek Ryan</td><td>USA</td><td>C/LW/RW</td><td>33</td><td>1986-12-29</td><td>170 Lbs</td><td>5 ft11</td><td>0</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>$4,050,000</td><td>$4,050,000</td><td>$4,050,000</td><td></td><td></td></tr>
<tr><td>Evgeny Kuznetsov</td><td>RUS</td><td>C</td><td>27</td><td>1992-05-19</td><td>204 Lbs</td><td>6 ft2</td><td>54</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$7,800,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Filip Forsberg</td><td>SWE</td><td>LW</td><td>25</td><td>1994-08-13</td><td>205 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>4 years</td><td>Pro &amp; Farm</td><td>No</td><td>$7,000,000</td><td>$7,000,000</td><td>$7,000,000</td><td>$7,000,000</td><td></td></tr>
<tr><td>Gustav Forsling</td><td>SWE</td><td>D</td><td>23</td><td>1996-06-12</td><td>186 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$875,000</td><td>$875,000</td><td></td><td></td><td></td></tr>
<tr><td>Jared Spurgeon</td><td>AB</td><td>D</td><td>30</td><td>1989-11-28</td><td>168 Lbs</td><td>5 ft1</td><td>8</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>$5,750,000</td><td>$5,750,000</td><td>$5,750,000</td><td></td><td></td></tr>
<tr><td>Jimmy Schuldt</td><td>USA</td><td>D</td><td>24</td><td>1995-05-11</td><td>205 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>$925,000</td><td>$925,000</td><td>$925,000</td><td></td><td></td></tr>
<tr><td>Joel Armia</td><td>FIN</td><td>RW</td><td>26</td><td>1993-05-31</td><td>205 Lbs</td><td>6 ft3</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$1,900,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Joel Edmundson</td><td>MB</td><td>D</td><td>26</td><td>1993-06-28</td><td>215 Lbs</td><td>6 ft4</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$3,500,000</td><td>$3,500,000</td><td></td><td></td><td></td></tr>
<tr><td>Joseph LaBate</td><td>USA</td><td>C/LW</td><td>27</td><td>1993-04-16</td><td>210 Lbs</td><td>6 ft5</td><td>0</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>$681,000</td><td>$681,000</td><td>$681,000</td><td></td><td></td></tr>
<tr><td>Justin Braun</td><td>USA</td><td>D</td><td>33</td><td>1987-02-10</td><td>205 Lbs</td><td>6 ft2</td><td>7</td><td>No</td><td>4 years</td><td>Pro &amp; Farm</td><td>No</td><td>$4,500,000</td><td>$4,500,000</td><td>$4,500,000</td><td>$4,500,000</td><td></td></tr>
<tr><td>Kris Letang</td><td>QUE</td><td>D</td><td>32</td><td>1987-04-24</td><td>201 Lbs</td><td>6 ft0</td><td>39</td><td>No</td><td>4 years</td><td>Pro &amp; Farm</td><td>No</td><td>$8,650,000</td><td>$8,650,000</td><td>$8,650,000</td><td>$8,650,000</td><td></td></tr>
<tr><td>Laurent Brossoit</td><td>BC</td><td>G</td><td>27</td><td>1993-03-22</td><td>204 Lbs</td><td>6 ft3</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$1,250,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Michal Neuvirth</td><td>CZE</td><td>G</td><td>32</td><td>1988-03-22</td><td>209 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$2,100,000</td><td>$2,100,000</td><td></td><td></td><td></td></tr>
<tr><td>Ondrej Kase</td><td>CZE</td><td>RW</td><td>24</td><td>1995-11-08</td><td>185 Lbs</td><td>6 ft0</td><td>8</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$706,667</td><td>$706,667</td><td></td><td></td><td></td></tr>
<tr><td>Oskar Lindblom</td><td>SWE</td><td>LW</td><td>23</td><td>1996-08-15</td><td>191 Lbs</td><td>6 ft1</td><td>6</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$1,137,500</td><td>$1,137,500</td><td></td><td></td><td></td></tr>
<tr><td>Phil Kessel</td><td>USA</td><td>LW/RW</td><td>32</td><td>1987-10-02</td><td>202 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$7,950,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Robbie Russo</td><td>USA</td><td>D</td><td>27</td><td>1993-02-15</td><td>189 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$700,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Robert Thomas</td><td>ONT</td><td>C/RW</td><td>20</td><td>1999-07-02</td><td>188 Lbs</td><td>6 ft0</td><td>11</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>$1,177,500</td><td>$1,177,500</td><td>$1,177,500</td><td></td><td></td></tr>
<tr><td>T.J. Brodie</td><td>ONT</td><td>D</td><td>29</td><td>1990-06-06</td><td>182 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>4 years</td><td>Pro &amp; Farm</td><td>No</td><td>$5,600,000</td><td>$5,600,000</td><td>$5,600,000</td><td>$5,600,000</td><td></td></tr>
<tr><td>Travis Konecny</td><td>ONT</td><td>LW/RW</td><td>23</td><td>1997-03-11</td><td>175 Lbs</td><td>5 ft10</td><td>54</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$1,106,667</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Tyler Toffoli</td><td>ONT</td><td>RW</td><td>27</td><td>1992-04-23</td><td>197 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>5 years</td><td>Pro &amp; Farm</td><td>No</td><td>$4,800,000</td><td>$4,800,000</td><td>$4,800,000</td><td>$4,800,000</td><td>$4,800,000</td></tr>
<tr><td>Victor Rask</td><td>SWE</td><td>C/LW/RW</td><td>27</td><td>1993-03-01</td><td>200 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$1,000,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Zack MacEwen</td><td>NB</td><td>C/RW</td><td>23</td><td>1996-07-08</td><td>205 Lbs</td><td>6 ft3</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$996,000</td><td>$996,000</td><td></td><td></td><td></td></tr>
</table><br />
<table class="basictablesorter"><tr>
<td class="STHSW100">Total Players</td><td class="STHSW100">Average Age</td><td class="STHSW120">Average Weight</td><td class="STHSW120">Average Height</td><td class="STHSW120">Average Contract</td><td class="STHSW120">Average Salary</td><td class="STHSW140">Players who can play<br />both Pro and Farm </td><td class="STHSW140">Players who can play<br />Pro Only</td><td class="STHSW140">Players who can play<br />Farm Only</td></tr>
<tr><td>29</td><td>26.7</td><td>196 Lbs</td><td>6 ft 1</td><td>2.31 years</td><td>$2,982,770</td>
<td>29</td><td>0</td><td>0</td></tr></table></div>
<h1 class="TeamPlayerInfoPro_DAL"><a id="Stars">Stars</a></h1>
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
<table class="basictablesorter"><thead><tr>
<th class="STHSW200">Player Name</th><th class="STHSW25">CNT</th><th class="STHSW65">PO</th><th class="STHSW25">Age</th><th class="STHSW65">Birthday</th><th class="STHSW65">Weight</th><th class="STHSW55">Height</th><th class="STHSW45">Health<br /># Loss</th><th class="STHSW45">Force<br />Waiver</th><th class="STHSW65">Contract</th><th class="STHSW100">Type</th><th class="STHSW75">One Way<br />Contract</th><th class="STHSW85">Salary #1</th><th class="STHSW85">Salary #2</th><th class="STHSW85">Salary #3</th><th class="STHSW85">Salary #4</th><th class="STHSW85">Salary #5</th></tr></thead>
<tr><td>Andrew Agozzino</td><td>ONT</td><td>C/LW</td><td>29</td><td>1991-01-02</td><td>187 Lbs</td><td>5 ft10</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$700,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Anthony Stolarz</td><td>USA</td><td>G</td><td>26</td><td>1994-01-20</td><td>210 Lbs</td><td>6 ft6</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$1,000,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Brandon Davidson</td><td>AB</td><td>D</td><td>28</td><td>1991-08-20</td><td>208 Lbs</td><td>6 ft2</td><td>28</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>$800,000</td><td>$800,000</td><td>$800,000</td><td></td><td></td></tr>
<tr><td>Brendan Gaunce</td><td>ONT</td><td>C/LW</td><td>26</td><td>1994-03-25</td><td>217 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$1,025,833</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Byron Froese</td><td>MB</td><td>C/RW</td><td>29</td><td>1991-03-12</td><td>202 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$900,000</td><td>$900,000</td><td></td><td></td><td></td></tr>
<tr><td>Cam Talbot</td><td>ONT</td><td>G</td><td>32</td><td>1987-07-04</td><td>196 Lbs</td><td>6 ft4</td><td>4</td><td>No</td><td>4 years</td><td>Pro &amp; Farm</td><td>No</td><td>$6,250,000</td><td>$6,250,000</td><td>$6,250,000</td><td>$6,250,000</td><td></td></tr>
<tr><td>Colton Sceviour</td><td>AB</td><td>C/LW/RW</td><td>31</td><td>1989-04-20</td><td>195 Lbs</td><td>5 ft10</td><td>11</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>$1,750,000</td><td>$1,750,000</td><td>$1,750,000</td><td></td><td></td></tr>
<tr><td>Corey Perry</td><td>ONT</td><td>LW/RW</td><td>34</td><td>1985-05-16</td><td>213 Lbs</td><td>6 ft3</td><td>20</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$8,150,000</td><td>$8,150,000</td><td></td><td></td><td></td></tr>
<tr><td>Craig Anderson</td><td>USA</td><td>G</td><td>38</td><td>1981-05-21</td><td>185 Lbs</td><td>6 ft2</td><td>2</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$2,300,000</td><td>$2,300,000</td><td></td><td></td><td></td></tr>
<tr><td>Derek Forbort</td><td>USA</td><td>D</td><td>28</td><td>1992-03-04</td><td>215 Lbs</td><td>6 ft4</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$900,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Duncan Keith</td><td>MB</td><td>D</td><td>36</td><td>1983-07-16</td><td>192 Lbs</td><td>6 ft1</td><td>26</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>$7,500,000</td><td>$7,500,000</td><td>$7,500,000</td><td></td><td></td></tr>
<tr><td>Frans Nielsen</td><td>DEN</td><td>C</td><td>35</td><td>1984-04-23</td><td>188 Lbs</td><td>6 ft1</td><td>42</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$5,650,000</td><td>$5,650,000</td><td></td><td></td><td></td></tr>
<tr><td>Jean-Francois Berube</td><td>QUE</td><td>G</td><td>28</td><td>1991-07-13</td><td>177 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$650,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Johan Larsson</td><td>SWE</td><td>C</td><td>27</td><td>1992-07-25</td><td>198 Lbs</td><td>5 ft11</td><td>0</td><td>No</td><td>4 years</td><td>Pro &amp; Farm</td><td>No</td><td>$1,600,000</td><td>$1,600,000</td><td>$1,600,000</td><td>$1,600,000</td><td></td></tr>
<tr><td>Jon Marchessault</td><td>QUE</td><td>LW/RW</td><td>29</td><td>1990-12-27</td><td>174 Lbs</td><td>5 ft9</td><td>9</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>$5,900,000</td><td>$5,900,000</td><td>$5,900,000</td><td></td><td></td></tr>
<tr><td>Jordan Weal</td><td>BC</td><td>C/LW/RW</td><td>28</td><td>1992-04-14</td><td>179 Lbs</td><td>5 ft10</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$870,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Jordie Benn</td><td>BC</td><td>D</td><td>32</td><td>1987-07-25</td><td>198 Lbs</td><td>6 ft2</td><td>0</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>$2,000,000</td><td>$2,000,000</td><td>$2,000,000</td><td></td><td></td></tr>
<tr><td>Mark Letestu</td><td>AB</td><td>C</td><td>35</td><td>1985-02-03</td><td>195 Lbs</td><td>5 ft10</td><td>38</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$2,250,000</td><td>$2,250,000</td><td></td><td></td><td></td></tr>
<tr><td>Matt Puempel</td><td>ONT</td><td>LW/RW</td><td>27</td><td>1993-01-24</td><td>205 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$1,075,833</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Max Pacioretty</td><td>USA</td><td>LW</td><td>31</td><td>1988-11-19</td><td>206 Lbs</td><td>6 ft2</td><td>3</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$4,750,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Mike Reilly</td><td>USA</td><td>D</td><td>26</td><td>1993-07-12</td><td>195 Lbs</td><td>6 ft2</td><td>12</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$900,000</td><td>$900,000</td><td></td><td></td><td></td></tr>
<tr><td>Nate Prosser</td><td>USA</td><td>D</td><td>33</td><td>1986-05-06</td><td>206 Lbs</td><td>6 ft2</td><td>28</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$950,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Nicolas Deslauriers</td><td>QUE</td><td>LW/RW</td><td>29</td><td>1991-02-22</td><td>215 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$700,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Patrice Bergeron</td><td>QUE</td><td>C</td><td>34</td><td>1985-07-24</td><td>195 Lbs</td><td>6 ft1</td><td>28</td><td>No</td><td>5 years</td><td>Pro &amp; Farm</td><td>No</td><td>$9,500,000</td><td>$9,500,000</td><td>$9,500,000</td><td>$9,500,000</td><td>$9,500,000</td></tr>
<tr><td>Phil Varone</td><td>ONT</td><td>C/LW/RW</td><td>29</td><td>1990-12-04</td><td>193 Lbs</td><td>5 ft10</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$650,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Ryan Sproul</td><td>ONT</td><td>D</td><td>27</td><td>1993-01-12</td><td>205 Lbs</td><td>6 ft4</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$650,000</td><td>$650,000</td><td></td><td></td><td></td></tr>
<tr><td>Thomas Hickey</td><td>AB</td><td>D</td><td>31</td><td>1989-02-08</td><td>188 Lbs</td><td>6 ft0</td><td>21</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>$3,875,000</td><td>$3,875,000</td><td>$3,875,000</td><td></td><td></td></tr>
<tr><td>Zach Parise</td><td>USA</td><td>LW</td><td>35</td><td>1984-07-27</td><td>195 Lbs</td><td>5 ft11</td><td>15</td><td>No</td><td>4 years</td><td>Pro &amp; Farm</td><td>No</td><td>$6,800,000</td><td>$6,800,000</td><td>$6,800,000</td><td>$6,800,000</td><td></td></tr>
</table><br />
<table class="basictablesorter"><tr>
<td class="STHSW100">Total Players</td><td class="STHSW100">Average Age</td><td class="STHSW120">Average Weight</td><td class="STHSW120">Average Height</td><td class="STHSW120">Average Contract</td><td class="STHSW120">Average Salary</td><td class="STHSW140">Players who can play<br />both Pro and Farm </td><td class="STHSW140">Players who can play<br />Pro Only</td><td class="STHSW140">Players who can play<br />Farm Only</td></tr>
<tr><td>28</td><td>30.5</td><td>198 Lbs</td><td>6 ft 1</td><td>2.14 years</td><td>$2,858,810</td>
<td>28</td><td>0</td><td>0</td></tr></table></div>
<h1 class="TeamPlayerInfoPro_MIN"><a id="Wild">Wild</a></h1>
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
<table class="basictablesorter"><thead><tr>
<th class="STHSW200">Player Name</th><th class="STHSW25">CNT</th><th class="STHSW65">PO</th><th class="STHSW25">Age</th><th class="STHSW65">Birthday</th><th class="STHSW65">Weight</th><th class="STHSW55">Height</th><th class="STHSW45">Health<br /># Loss</th><th class="STHSW45">Force<br />Waiver</th><th class="STHSW65">Contract</th><th class="STHSW100">Type</th><th class="STHSW75">One Way<br />Contract</th><th class="STHSW85">Salary #1</th><th class="STHSW85">Salary #2</th><th class="STHSW85">Salary #3</th><th class="STHSW85">Salary #4</th><th class="STHSW85">Salary #5</th></tr></thead>
<tr><td>Brandon Pirri</td><td>ONT</td><td>C/LW/RW</td><td>29</td><td>1991-04-10</td><td>186 Lbs</td><td>6 ft0</td><td>29</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>$1,250,000</td><td>$1,250,000</td><td>$1,250,000</td><td></td><td></td></tr>
<tr><td>Brett Ritchie</td><td>ONT</td><td>RW</td><td>26</td><td>1993-07-01</td><td>217 Lbs</td><td>6 ft3</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$700,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Calvin Thurkauf</td><td>SWI</td><td>C/LW</td><td>22</td><td>1997-06-27</td><td>204 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>$738,000</td><td>$738,000</td><td>$738,000</td><td></td><td></td></tr>
<tr><td>Casey Nelson</td><td>USA</td><td>D</td><td>27</td><td>1992-07-18</td><td>190 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>$800,000</td><td>$800,000</td><td>$800,000</td><td></td><td></td></tr>
<tr><td>Conor Garland</td><td>USA</td><td>LW/RW</td><td>24</td><td>1996-03-11</td><td>165 Lbs</td><td>5 ft10</td><td>6</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>$822,333</td><td>$822,333</td><td>$822,333</td><td></td><td></td></tr>
<tr><td>David Backes</td><td>USA</td><td>C/RW</td><td>35</td><td>1984-05-01</td><td>221 Lbs</td><td>6 ft3</td><td>12</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$8,000,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Eddie Lack</td><td>SWE</td><td>G</td><td>32</td><td>1988-01-05</td><td>187 Lbs</td><td>6 ft4</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$525,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Jakob Silfverberg</td><td>SWE</td><td>RW</td><td>29</td><td>1990-10-13</td><td>202 Lbs</td><td>6 ft2</td><td>6</td><td>No</td><td>5 years</td><td>Pro &amp; Farm</td><td>No</td><td>$5,250,000</td><td>$5,250,000</td><td>$5,250,000</td><td>$5,250,000</td><td>$5,250,000</td></tr>
<tr><td>Jayce Hawryluk</td><td>SKW</td><td>C/RW</td><td>24</td><td>1996-01-01</td><td>186 Lbs</td><td>5 ft11</td><td>0</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>$925,000</td><td>$925,000</td><td>$925,000</td><td></td><td></td></tr>
<tr><td>John Carlson</td><td>USA</td><td>D</td><td>30</td><td>1990-01-10</td><td>218 Lbs</td><td>6 ft3</td><td>51</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>$6,500,000</td><td>$6,500,000</td><td>$6,500,000</td><td></td><td></td></tr>
<tr><td>Karl Alzner</td><td>BC</td><td>D</td><td>31</td><td>1988-09-24</td><td>217 Lbs</td><td>6 ft3</td><td>0</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>$700,000</td><td>$700,000</td><td>$700,000</td><td></td><td></td></tr>
<tr><td>Kyle Okposo</td><td>USA</td><td>RW</td><td>32</td><td>1988-04-16</td><td>220 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>4 years</td><td>Pro &amp; Farm</td><td>No</td><td>$7,500,000</td><td>$7,500,000</td><td>$7,500,000</td><td>$7,500,000</td><td></td></tr>
<tr><td>Matt Irwin</td><td>BC</td><td>D</td><td>32</td><td>1987-11-29</td><td>207 Lbs</td><td>6 ft1</td><td>19</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$1,200,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Mike Condon</td><td>USA</td><td>G</td><td>29</td><td>1990-04-26</td><td>195 Lbs</td><td>6 ft2</td><td>11</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$2,400,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Mikhail Sergachev</td><td>RUS</td><td>D</td><td>21</td><td>1998-06-25</td><td>215 Lbs</td><td>6 ft3</td><td>50</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$1,744,166</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Nathan Paetsch</td><td>SKW</td><td>D</td><td>37</td><td>1983-03-29</td><td>198 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$800,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Nino Niederreiter</td><td>SWI</td><td>LW/RW</td><td>27</td><td>1992-09-07</td><td>216 Lbs</td><td>6 ft2</td><td>10</td><td>No</td><td>5 years</td><td>Pro &amp; Farm</td><td>No</td><td>$5,500,000</td><td>$5,500,000</td><td>$5,500,000</td><td>$5,500,000</td><td>$5,500,000</td></tr>
<tr><td>Patrick Eaves</td><td>AB</td><td>LW/RW</td><td>35</td><td>1984-04-30</td><td>202 Lbs</td><td>6 ft0</td><td>6</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$3,250,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Riley Barber</td><td>USA</td><td>RW</td><td>26</td><td>1994-02-07</td><td>193 Lbs</td><td>6 ft0</td><td>0</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>$925,000</td><td>$925,000</td><td>$925,000</td><td></td><td></td></tr>
<tr><td>Rocco Grimaldi</td><td>USA</td><td>C/RW</td><td>27</td><td>1993-02-08</td><td>180 Lbs</td><td>5 ft6</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$900,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Sam Carrick</td><td>ONT</td><td>C/RW</td><td>28</td><td>1992-02-04</td><td>188 Lbs</td><td>6 ft0</td><td>10</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>$631,667</td><td>$631,667</td><td>$631,667</td><td></td><td></td></tr>
<tr><td>Seth Griffith</td><td>ONT</td><td>LW/RW</td><td>27</td><td>1993-01-04</td><td>191 Lbs</td><td>5 ft9</td><td>0</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$759,167</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Tage Thompson</td><td>USA</td><td>LW/RW</td><td>22</td><td>1997-10-30</td><td>205 Lbs</td><td>6 ft5</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$1,137,500</td><td>$1,137,500</td><td></td><td></td><td></td></tr>
<tr><td>Trevor Daley</td><td>ONT</td><td>D</td><td>36</td><td>1983-10-09</td><td>195 Lbs</td><td>5 ft11</td><td>111</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$4,250,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Troy Brouwer</td><td>BC</td><td>LW/RW</td><td>34</td><td>1985-08-17</td><td>215 Lbs</td><td>6 ft3</td><td>0</td><td>No</td><td>2 years</td><td>Pro &amp; Farm</td><td>No</td><td>$2,950,000</td><td>$2,950,000</td><td></td><td></td><td></td></tr>
<tr><td>Troy Grosenick</td><td>USA</td><td>G</td><td>30</td><td>1989-08-27</td><td>185 Lbs</td><td>6 ft1</td><td>0</td><td>No</td><td>3 years</td><td>Pro &amp; Farm</td><td>No</td><td>$950,000</td><td>$950,000</td><td>$950,000</td><td></td><td></td></tr>
<tr><td>Tyler Graovac</td><td>ONT</td><td>C</td><td>26</td><td>1993-04-26</td><td>212 Lbs</td><td>6 ft5</td><td>48</td><td>No</td><td>1 year   </td><td>Pro &amp; Farm</td><td>No</td><td>$700,000</td><td></td><td></td><td></td><td></td></tr>
<tr><td>Tyson Barrie</td><td>BC</td><td>D</td><td>28</td><td>1991-07-25</td><td>190 Lbs</td><td>5 ft10</td><td>0</td><td>No</td><td>5 years</td><td>Pro &amp; Farm</td><td>No</td><td>$7,000,000</td><td>$7,000,000</td><td>$7,000,000</td><td>$7,000,000</td><td>$7,000,000</td></tr>
</table><br />
<table class="basictablesorter"><tr>
<td class="STHSW100">Total Players</td><td class="STHSW100">Average Age</td><td class="STHSW120">Average Weight</td><td class="STHSW120">Average Height</td><td class="STHSW120">Average Contract</td><td class="STHSW120">Average Salary</td><td class="STHSW140">Players who can play<br />both Pro and Farm </td><td class="STHSW140">Players who can play<br />Pro Only</td><td class="STHSW140">Players who can play<br />Farm Only</td></tr>
<tr><td>28</td><td>28.8</td><td>200 Lbs</td><td>6 ft 1</td><td>2.32 years</td><td>$2,457,423</td>
<td>28</td><td>0</td><td>0</td></tr></table></div>
<?php include "Footer.php";?>
