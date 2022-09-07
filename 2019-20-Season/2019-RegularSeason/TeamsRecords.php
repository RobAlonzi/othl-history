<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<title>OTHL - Team Records</title>
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
$Active = 5; /* Show Webpage Top Menu */
include "Menu.php";?>
<div class="STHSTopLink"><a id="STHSRosterTop"></a> <a href="#Avalanche">Avalanche</a> | <a href="#Blackhawks">Blackhawks</a> | <a href="#BlueJackets">Blue Jackets</a> | <a href="#Blues">Blues</a> | <a href="#Bruins">Bruins</a> | <a href="#Canadiens">Canadiens</a> | <a href="#Canucks">Canucks</a> | <a href="#Capitals">Capitals</a> | <a href="#Coyotes">Coyotes</a> | <a href="#Devils">Devils</a> | <a href="#Ducks">Ducks</a> | <a href="#Flames">Flames</a> | <a href="#Flyers">Flyers</a> | <a href="#GoldenKnights">Golden Knights</a> | <a href="#Hurricanes">Hurricanes</a> | <a href="#Islanders">Islanders</a> | <a href="#Jets">Jets</a> | <a href="#Kings">Kings</a> | <a href="#Lightning">Lightning</a> | <a href="#MapleLeafs">Maple Leafs</a> | <a href="#Oilers">Oilers</a> | <a href="#Panthers">Panthers</a> | <a href="#Penguins">Penguins</a> | <a href="#Predators">Predators</a> | <a href="#Rangers">Rangers</a> | <a href="#RedWings">Red Wings</a> | <a href="#Sabres">Sabres</a> | <a href="#Senators">Senators</a> | <a href="#Sharks">Sharks</a> | <a href="#Stars">Stars</a> | <a href="#Wild">Wild</a> | <a href="javascript:STHS_JS_CloseAll('');">Close All Team View</a> | <a href="javascript:STHS_JS_OpenAll('');">Open All Team View</a>
</div>
<h1 class="TeamRecordsPro_COL"><a id="Avalanche">Avalanche</a></h1>
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
<br /><table class="STHSRecordTable">
<tr><td colspan="5"><b>Most Goals in 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2010</td><td>127</td><td>8</td><td></td></tr><tr><td>2</td><td>2010</td><td>939</td><td>8</td><td></td></tr><tr><td>3</td><td>2008</td><td>40</td><td>7</td><td></td></tr><tr><td>4</td><td>2008</td><td>613</td><td>7</td><td></td></tr><tr><td>5</td><td>2009</td><td>962</td><td>7</td><td></td></tr><tr><td>6</td><td>2011</td><td>1139</td><td>7</td><td></td></tr><tr><td>7</td><td>2014</td><td>843</td><td>7</td><td></td></tr><tr><td>8</td><td>2016</td><td>317</td><td>7</td><td></td></tr><tr><td>9</td><td>2016</td><td>487</td><td>7</td><td></td></tr><tr><td>10</td><td>2011</td><td>123</td><td>6</td><td></td></tr>
<tr><td colspan="5"><b>Most Goals in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2008</td><td>0</td><td>286</td><td></td></tr>
<tr><td>2</td><td>2010</td><td>0</td><td>258</td><td></td></tr>
<tr><td>3</td><td>2015</td><td>0</td><td>247</td><td></td></tr>
<tr><td>4</td><td>2011</td><td>0</td><td>244</td><td></td></tr>
<tr><td>5</td><td>2016</td><td>0</td><td>241</td><td></td></tr>
<tr><td>6</td><td>2014</td><td>0</td><td>240</td><td></td></tr>
<tr><td>7</td><td>2009</td><td>0</td><td>232</td><td></td></tr>
<tr><td>8</td><td>2012</td><td>0</td><td>220</td><td></td></tr>
<tr><td>9</td><td>2019</td><td>0</td><td>206</td><td></td></tr>
<tr><td>10</td><td>2018</td><td>0</td><td>194</td><td></td></tr>

<tr><td colspan="5"><b>Less Goal in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2018</td><td>0</td><td>194</td><td></td></tr>
<tr><td>2</td><td>2019</td><td>0</td><td>206</td><td></td></tr>
<tr><td>3</td><td>2013</td><td>0</td><td>207</td><td></td></tr>
<tr><td>4</td><td>2012</td><td>0</td><td>220</td><td></td></tr>
<tr><td>5</td><td>2009</td><td>0</td><td>232</td><td></td></tr>
<tr><td>6</td><td>2017</td><td>0</td><td>237</td><td></td></tr>
<tr><td>7</td><td>2014</td><td>0</td><td>240</td><td></td></tr>
<tr><td>8</td><td>2016</td><td>0</td><td>241</td><td></td></tr>
<tr><td>9</td><td>2011</td><td>0</td><td>244</td><td></td></tr>
<tr><td>10</td><td>2010</td><td>0</td><td>258</td><td></td></tr>

<tr><td colspan="5"><b>Most Goals Against in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2018</td><td>0</td><td>275</td><td></td></tr>
<tr><td>2</td><td>2009</td><td>0</td><td>262</td><td></td></tr>
<tr><td>3</td><td>2008</td><td>0</td><td>252</td><td></td></tr>
<tr><td>4</td><td>2012</td><td>0</td><td>244</td><td></td></tr>
<tr><td>5</td><td>2011</td><td>0</td><td>240</td><td></td></tr>
<tr><td>6</td><td>2013</td><td>0</td><td>240</td><td></td></tr>
<tr><td>7</td><td>2010</td><td>0</td><td>238</td><td></td></tr>
<tr><td>8</td><td>2019</td><td>0</td><td>235</td><td></td></tr>

<tr><td colspan="5"><b>Less Goal Against in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2015</td><td>0</td><td>205</td><td></td></tr>
<tr><td>2</td><td>2016</td><td>0</td><td>213</td><td></td></tr>
<tr><td>3</td><td>2017</td><td>0</td><td>221</td><td></td></tr>
<tr><td>4</td><td>2014</td><td>0</td><td>230</td><td></td></tr>
<tr><td>5</td><td>2019</td><td>0</td><td>235</td><td></td></tr>
<tr><td>6</td><td>2010</td><td>0</td><td>238</td><td></td></tr>
<tr><td>7</td><td>2011</td><td>0</td><td>240</td><td></td></tr>
<tr><td>8</td><td>2013</td><td>0</td><td>240</td><td></td></tr>
<tr><td>9</td><td>2012</td><td>0</td><td>244</td><td></td></tr>
<tr><td>10</td><td>2008</td><td>0</td><td>252</td><td></td></tr>

<tr><td colspan="5"><b>Most Assists in 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2010</td><td>127</td><td>15</td><td></td></tr><tr><td>2</td><td>2010</td><td>939</td><td>15</td><td></td></tr><tr><td>3</td><td>2008</td><td>40</td><td>13</td><td></td></tr><tr><td>4</td><td>2008</td><td>613</td><td>13</td><td></td></tr><tr><td>5</td><td>2009</td><td>962</td><td>13</td><td></td></tr><tr><td>6</td><td>2011</td><td>1139</td><td>13</td><td></td></tr><tr><td>7</td><td>2014</td><td>843</td><td>13</td><td></td></tr><tr><td>8</td><td>2016</td><td>487</td><td>13</td><td></td></tr><tr><td>9</td><td>2011</td><td>1069</td><td>12</td><td></td></tr><tr><td>10</td><td>2014</td><td>1063</td><td>12</td><td></td></tr>
<tr><td colspan="5"><b>Most Assists in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2008</td><td>0</td><td>502</td><td></td></tr>
<tr><td>2</td><td>2010</td><td>0</td><td>456</td><td></td></tr>
<tr><td>3</td><td>2015</td><td>0</td><td>437</td><td></td></tr>
<tr><td>4</td><td>2009</td><td>0</td><td>419</td><td></td></tr>
<tr><td>5</td><td>2017</td><td>0</td><td>416</td><td></td></tr>
<tr><td>6</td><td>2014</td><td>0</td><td>414</td><td></td></tr>
<tr><td>7</td><td>2011</td><td>0</td><td>397</td><td></td></tr>
<tr><td>8</td><td>2012</td><td>0</td><td>380</td><td></td></tr>
<tr><td>9</td><td>2019</td><td>0</td><td>372</td><td></td></tr>
<tr><td>10</td><td>2018</td><td>0</td><td>340</td><td></td></tr>

<tr><td colspan="5"><b>Less Assist in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2018</td><td>0</td><td>340</td><td></td></tr>
<tr><td>2</td><td>2013</td><td>0</td><td>354</td><td></td></tr>
<tr><td>3</td><td>2019</td><td>0</td><td>372</td><td></td></tr>
<tr><td>4</td><td>2012</td><td>0</td><td>380</td><td></td></tr>
<tr><td>5</td><td>2011</td><td>0</td><td>397</td><td></td></tr>
<tr><td>6</td><td>2014</td><td>0</td><td>414</td><td></td></tr>
<tr><td>7</td><td>2016</td><td>0</td><td>414</td><td></td></tr>
<tr><td>8</td><td>2009</td><td>0</td><td>419</td><td></td></tr>
<tr><td>9</td><td>2010</td><td>0</td><td>456</td><td></td></tr>
<tr><td>10</td><td>2008</td><td>0</td><td>502</td><td></td></tr>

<tr><td colspan="5"><b>Most Game Points in 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2010</td><td>127</td><td>23</td><td></td></tr><tr><td>2</td><td>2010</td><td>939</td><td>23</td><td></td></tr><tr><td>3</td><td>2008</td><td>40</td><td>20</td><td></td></tr><tr><td>4</td><td>2008</td><td>613</td><td>20</td><td></td></tr><tr><td>5</td><td>2009</td><td>962</td><td>20</td><td></td></tr><tr><td>6</td><td>2011</td><td>1139</td><td>20</td><td></td></tr><tr><td>7</td><td>2014</td><td>843</td><td>20</td><td></td></tr><tr><td>8</td><td>2016</td><td>487</td><td>20</td><td></td></tr><tr><td>9</td><td>2016</td><td>317</td><td>19</td><td></td></tr><tr><td>10</td><td>2011</td><td>1069</td><td>18</td><td></td></tr>
<tr><td colspan="5"><b>Most Game Points in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>0</td><td>0</td><td>32000</td><td></td></tr>
<tr><td>2</td><td>0</td><td>0</td><td>32000</td><td></td></tr>

<tr><td colspan="5"><b>Less Game Point In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2018</td><td>0</td><td>534</td><td></td></tr>
<tr><td>2</td><td>2013</td><td>0</td><td>561</td><td></td></tr>
<tr><td>3</td><td>2019</td><td>0</td><td>578</td><td></td></tr>
<tr><td>4</td><td>2012</td><td>0</td><td>600</td><td></td></tr>
<tr><td>5</td><td>2011</td><td>0</td><td>641</td><td></td></tr>
<tr><td>6</td><td>2009</td><td>0</td><td>651</td><td></td></tr>
<tr><td>7</td><td>2017</td><td>0</td><td>653</td><td></td></tr>
<tr><td>8</td><td>2014</td><td>0</td><td>654</td><td></td></tr>
<tr><td>9</td><td>2010</td><td>0</td><td>714</td><td></td></tr>
<tr><td>10</td><td>2008</td><td>0</td><td>788</td><td></td></tr>

<tr><td colspan="5"><b>Most Shots In 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2017</td><td>486</td><td>50</td><td></td></tr><tr><td>2</td><td>2015</td><td>1165</td><td>49</td><td></td></tr><tr><td>3</td><td>2008</td><td>1099</td><td>48</td><td></td></tr><tr><td>4</td><td>2011</td><td>596</td><td>48</td><td></td></tr><tr><td>5</td><td>2018</td><td>102</td><td>47</td><td></td></tr><tr><td>6</td><td>2008</td><td>613</td><td>46</td><td></td></tr><tr><td>7</td><td>2008</td><td>628</td><td>46</td><td></td></tr><tr><td>8</td><td>2009</td><td>208</td><td>46</td><td></td></tr><tr><td>9</td><td>2017</td><td>505</td><td>46</td><td></td></tr><tr><td>10</td><td>2016</td><td>1066</td><td>45</td><td></td></tr>
<tr><td colspan="5"><b>Most Shots In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2017</td><td>0</td><td>2576</td><td></td></tr>
<tr><td>2</td><td>2008</td><td>0</td><td>2563</td><td></td></tr>
<tr><td>3</td><td>2011</td><td>0</td><td>2550</td><td></td></tr>
<tr><td>4</td><td>2018</td><td>0</td><td>2411</td><td></td></tr>
<tr><td>5</td><td>2015</td><td>0</td><td>2384</td><td></td></tr>
<tr><td>6</td><td>2019</td><td>0</td><td>2369</td><td></td></tr>
<tr><td>7</td><td>2016</td><td>0</td><td>2350</td><td></td></tr>
<tr><td>8</td><td>2014</td><td>0</td><td>2278</td><td></td></tr>
<tr><td>9</td><td>2010</td><td>0</td><td>2235</td><td></td></tr>
<tr><td>10</td><td>2013</td><td>0</td><td>2205</td><td></td></tr>

<tr><td colspan="5"><b>Less Shots In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2012</td><td>0</td><td>2107</td><td></td></tr>
<tr><td>2</td><td>2009</td><td>0</td><td>2195</td><td></td></tr>
<tr><td>3</td><td>2013</td><td>0</td><td>2205</td><td></td></tr>
<tr><td>4</td><td>2010</td><td>0</td><td>2235</td><td></td></tr>
<tr><td>5</td><td>2014</td><td>0</td><td>2278</td><td></td></tr>
<tr><td>6</td><td>2019</td><td>0</td><td>2369</td><td></td></tr>
<tr><td>7</td><td>2018</td><td>0</td><td>2411</td><td></td></tr>
<tr><td>8</td><td>2011</td><td>0</td><td>2550</td><td></td></tr>
<tr><td>9</td><td>2008</td><td>0</td><td>2563</td><td></td></tr>

<tr><td colspan="5"><b>Most Shots Blocked In 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2008</td><td>1172</td><td>21</td><td></td></tr><tr><td>2</td><td>2011</td><td>167</td><td>21</td><td></td></tr><tr><td>3</td><td>2010</td><td>228</td><td>19</td><td></td></tr><tr><td>4</td><td>2011</td><td>796</td><td>19</td><td></td></tr><tr><td>5</td><td>2011</td><td>1166</td><td>19</td><td></td></tr><tr><td>6</td><td>2018</td><td>513</td><td>19</td><td></td></tr><tr><td>7</td><td>2018</td><td>997</td><td>19</td><td></td></tr><tr><td>8</td><td>2010</td><td>44</td><td>18</td><td></td></tr><tr><td>9</td><td>2011</td><td>123</td><td>18</td><td></td></tr><tr><td>10</td><td>2013</td><td>792</td><td>18</td><td></td></tr>
<tr><td colspan="5"><b>Most Shots Blocked In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>0</td><td>0</td><td>32000</td><td></td></tr>
<tr><td>2</td><td>0</td><td>0</td><td>32000</td><td></td></tr>

<tr><td colspan="5"><b>Less Shots Block In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2009</td><td>0</td><td>620</td><td></td></tr>
<tr><td>2</td><td>2016</td><td>0</td><td>631</td><td></td></tr>
<tr><td>3</td><td>2012</td><td>0</td><td>641</td><td></td></tr>
<tr><td>4</td><td>2014</td><td>0</td><td>653</td><td></td></tr>
<tr><td>5</td><td>2013</td><td>0</td><td>663</td><td></td></tr>
<tr><td>6</td><td>2015</td><td>0</td><td>666</td><td></td></tr>
<tr><td>7</td><td>2008</td><td>0</td><td>668</td><td></td></tr>
<tr><td>8</td><td>2010</td><td>0</td><td>697</td><td></td></tr>
<tr><td>9</td><td>2019</td><td>0</td><td>714</td><td></td></tr>
<tr><td>10</td><td>2011</td><td>0</td><td>772</td><td></td></tr>

<tr><td colspan="5"><b>Most Shots Against In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2019</td><td>0</td><td>2649</td><td></td></tr>
<tr><td>2</td><td>2018</td><td>0</td><td>2600</td><td></td></tr>
<tr><td>3</td><td>2017</td><td>0</td><td>2417</td><td></td></tr>
<tr><td>4</td><td>2011</td><td>0</td><td>2405</td><td></td></tr>
<tr><td>5</td><td>2012</td><td>0</td><td>2344</td><td></td></tr>
<tr><td>6</td><td>2008</td><td>0</td><td>2256</td><td></td></tr>
<tr><td>7</td><td>2014</td><td>0</td><td>2250</td><td></td></tr>
<tr><td>8</td><td>2010</td><td>0</td><td>2237</td><td></td></tr>
<tr><td>9</td><td>2013</td><td>0</td><td>2193</td><td></td></tr>
<tr><td>10</td><td>2009</td><td>0</td><td>2187</td><td></td></tr>

<tr><td colspan="5"><b>Less Shots Against In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2016</td><td>0</td><td>2161</td><td></td></tr>
<tr><td>2</td><td>2009</td><td>0</td><td>2187</td><td></td></tr>
<tr><td>3</td><td>2013</td><td>0</td><td>2193</td><td></td></tr>
<tr><td>4</td><td>2015</td><td>0</td><td>2195</td><td></td></tr>
<tr><td>5</td><td>2010</td><td>0</td><td>2237</td><td></td></tr>
<tr><td>6</td><td>2014</td><td>0</td><td>2250</td><td></td></tr>
<tr><td>7</td><td>2008</td><td>0</td><td>2256</td><td></td></tr>
<tr><td>8</td><td>2012</td><td>0</td><td>2344</td><td></td></tr>
<tr><td>9</td><td>2011</td><td>0</td><td>2405</td><td></td></tr>

<tr><td colspan="5"><b>Most Pim In 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2018</td><td>1232</td><td>58</td><td></td></tr><tr><td>2</td><td>2009</td><td>543</td><td>49</td><td></td></tr><tr><td>3</td><td>2017</td><td>938</td><td>48</td><td></td></tr><tr><td>4</td><td>2008</td><td>1080</td><td>46</td><td></td></tr><tr><td>5</td><td>2013</td><td>20</td><td>45</td><td></td></tr><tr><td>6</td><td>2017</td><td>411</td><td>43</td><td></td></tr><tr><td>7</td><td>2009</td><td>731</td><td>42</td><td></td></tr><tr><td>8</td><td>2010</td><td>1004</td><td>42</td><td></td></tr><tr><td>9</td><td>2010</td><td>492</td><td>40</td><td></td></tr><tr><td>10</td><td>2012</td><td>402</td><td>38</td><td></td></tr>
<tr><td colspan="5"><b>Most Pim In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2008</td><td>0</td><td>1267</td><td></td></tr>
<tr><td>2</td><td>2009</td><td>0</td><td>1138</td><td></td></tr>
<tr><td>3</td><td>2010</td><td>0</td><td>1134</td><td></td></tr>
<tr><td>4</td><td>2016</td><td>0</td><td>904</td><td></td></tr>
<tr><td>5</td><td>2011</td><td>0</td><td>824</td><td></td></tr>
<tr><td>6</td><td>2014</td><td>0</td><td>802</td><td></td></tr>
<tr><td>7</td><td>2018</td><td>0</td><td>786</td><td></td></tr>
<tr><td>8</td><td>2013</td><td>0</td><td>753</td><td></td></tr>
<tr><td>9</td><td>2012</td><td>0</td><td>747</td><td></td></tr>
<tr><td>10</td><td>2019</td><td>0</td><td>623</td><td></td></tr>

<tr><td colspan="5"><b>Less Pim In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2019</td><td>0</td><td>623</td><td></td></tr>
<tr><td>2</td><td>2017</td><td>0</td><td>710</td><td></td></tr>
<tr><td>3</td><td>2012</td><td>0</td><td>747</td><td></td></tr>
<tr><td>4</td><td>2013</td><td>0</td><td>753</td><td></td></tr>
<tr><td>5</td><td>2015</td><td>0</td><td>758</td><td></td></tr>
<tr><td>6</td><td>2018</td><td>0</td><td>786</td><td></td></tr>
<tr><td>7</td><td>2014</td><td>0</td><td>802</td><td></td></tr>
<tr><td>8</td><td>2011</td><td>0</td><td>824</td><td></td></tr>
<tr><td>9</td><td>2010</td><td>0</td><td>1134</td><td></td></tr>
<tr><td>10</td><td>2009</td><td>0</td><td>1138</td><td></td></tr>

<tr><td colspan="5"><b>Most Hits In 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2013</td><td>540</td><td>38</td><td></td></tr><tr><td>2</td><td>2011</td><td>796</td><td>37</td><td></td></tr><tr><td>3</td><td>2018</td><td>102</td><td>37</td><td></td></tr><tr><td>4</td><td>2018</td><td>496</td><td>36</td><td></td></tr><tr><td>5</td><td>2011</td><td>328</td><td>35</td><td></td></tr><tr><td>6</td><td>2014</td><td>1100</td><td>35</td><td></td></tr><tr><td>7</td><td>2008</td><td>668</td><td>34</td><td></td></tr><tr><td>8</td><td>2008</td><td>880</td><td>34</td><td></td></tr><tr><td>9</td><td>2011</td><td>1228</td><td>34</td><td></td></tr><tr><td>10</td><td>2019</td><td>437</td><td>34</td><td><a href="OTHL-437.html">Game Direct Link</a></td></tr>
<tr><td colspan="5"><b>Most Hits In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2011</td><td>0</td><td>1894</td><td></td></tr>
<tr><td>2</td><td>2018</td><td>0</td><td>1763</td><td></td></tr>
<tr><td>3</td><td>2016</td><td>0</td><td>1728</td><td></td></tr>
<tr><td>4</td><td>2017</td><td>0</td><td>1683</td><td></td></tr>
<tr><td>5</td><td>2008</td><td>0</td><td>1665</td><td></td></tr>
<tr><td>6</td><td>2014</td><td>0</td><td>1651</td><td></td></tr>
<tr><td>7</td><td>2013</td><td>0</td><td>1635</td><td></td></tr>
<tr><td>8</td><td>2012</td><td>0</td><td>1612</td><td></td></tr>
<tr><td>9</td><td>2019</td><td>0</td><td>1612</td><td></td></tr>
<tr><td>10</td><td>2009</td><td>0</td><td>1431</td><td></td></tr>

<tr><td colspan="5"><b>Less Hit In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2010</td><td>0</td><td>1396</td><td></td></tr>
<tr><td>2</td><td>2009</td><td>0</td><td>1431</td><td></td></tr>
<tr><td>3</td><td>2015</td><td>0</td><td>1605</td><td></td></tr>
<tr><td>4</td><td>2012</td><td>0</td><td>1612</td><td></td></tr>
<tr><td>5</td><td>2019</td><td>0</td><td>1612</td><td></td></tr>
<tr><td>6</td><td>2013</td><td>0</td><td>1635</td><td></td></tr>
<tr><td>7</td><td>2014</td><td>0</td><td>1651</td><td></td></tr>
<tr><td>8</td><td>2008</td><td>0</td><td>1665</td><td></td></tr>
<tr><td>9</td><td>2018</td><td>0</td><td>1763</td><td></td></tr>
<tr><td>10</td><td>2011</td><td>0</td><td>1894</td><td></td></tr>

<tr><td colspan="5"><b>Most Empty Net Goal In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2018</td><td>0</td><td>4</td><td></td></tr>
<tr><td>2</td><td>2010</td><td>0</td><td>3</td><td></td></tr>
<tr><td>3</td><td>2011</td><td>0</td><td>3</td><td></td></tr>
<tr><td>4</td><td>2019</td><td>0</td><td>3</td><td></td></tr>
<tr><td>5</td><td>2009</td><td>0</td><td>2</td><td></td></tr>
<tr><td>6</td><td>2012</td><td>0</td><td>2</td><td></td></tr>
<tr><td>7</td><td>2013</td><td>0</td><td>2</td><td></td></tr>

<tr><td colspan="5"><b>Best PP In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2014</td><td>0</td><td>22.10%</td><td></td></tr>
<tr><td>2</td><td>2011</td><td>0</td><td>20.30%</td><td></td></tr>
<tr><td>3</td><td>2008</td><td>0</td><td>18.80%</td><td></td></tr>
<tr><td>4</td><td>2017</td><td>0</td><td>17.50%</td><td></td></tr>
<tr><td>5</td><td>2015</td><td>0</td><td>16.70%</td><td></td></tr>
<tr><td>6</td><td>2009</td><td>0</td><td>16.50%</td><td></td></tr>
<tr><td>7</td><td>2013</td><td>0</td><td>15.80%</td><td></td></tr>
<tr><td>8</td><td>2010</td><td>0</td><td>15.70%</td><td></td></tr>
<tr><td>9</td><td>2019</td><td>0</td><td>15.10%</td><td></td></tr>
<tr><td>10</td><td>2018</td><td>0</td><td>14.80%</td><td></td></tr>

<tr><td colspan="5"><b>Best PK In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2015</td><td>0</td><td>85.80%</td><td></td></tr>
<tr><td>2</td><td>2016</td><td>0</td><td>84.40%</td><td></td></tr>
<tr><td>3</td><td>2017</td><td>0</td><td>84.20%</td><td></td></tr>
<tr><td>4</td><td>2014</td><td>0</td><td>83.30%</td><td></td></tr>
<tr><td>5</td><td>2010</td><td>0</td><td>83.00%</td><td></td></tr>
<tr><td>6</td><td>2011</td><td>0</td><td>82.30%</td><td></td></tr>
<tr><td>7</td><td>2008</td><td>0</td><td>81.70%</td><td></td></tr>
<tr><td>8</td><td>2013</td><td>0</td><td>81.60%</td><td></td></tr>
<tr><td>9</td><td>2018</td><td>0</td><td>81.40%</td><td></td></tr>
<tr><td>10</td><td>2012</td><td>0</td><td>80.60%</td><td></td></tr>

<tr><td colspan="5"><b>Worse PP In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2016</td><td>0</td><td>14.40%</td><td></td></tr>
<tr><td>2</td><td>2012</td><td>0</td><td>14.70%</td><td></td></tr>
<tr><td>3</td><td>2018</td><td>0</td><td>14.80%</td><td></td></tr>
<tr><td>4</td><td>2019</td><td>0</td><td>15.10%</td><td></td></tr>
<tr><td>5</td><td>2010</td><td>0</td><td>15.70%</td><td></td></tr>
<tr><td>6</td><td>2013</td><td>0</td><td>15.80%</td><td></td></tr>
<tr><td>7</td><td>2009</td><td>0</td><td>16.50%</td><td></td></tr>
<tr><td>8</td><td>2015</td><td>0</td><td>16.70%</td><td></td></tr>
<tr><td>9</td><td>2008</td><td>0</td><td>18.80%</td><td></td></tr>
<tr><td>10</td><td>2011</td><td>0</td><td>20.30%</td><td></td></tr>

<tr><td colspan="5"><b>Worse PK In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2019</td><td>0</td><td>75.40%</td><td></td></tr>
<tr><td>2</td><td>2009</td><td>0</td><td>80.20%</td><td></td></tr>
<tr><td>3</td><td>2012</td><td>0</td><td>80.60%</td><td></td></tr>
<tr><td>4</td><td>2018</td><td>0</td><td>81.40%</td><td></td></tr>
<tr><td>5</td><td>2013</td><td>0</td><td>81.60%</td><td></td></tr>
<tr><td>6</td><td>2008</td><td>0</td><td>81.70%</td><td></td></tr>
<tr><td>7</td><td>2011</td><td>0</td><td>82.30%</td><td></td></tr>
<tr><td>8</td><td>2010</td><td>0</td><td>83.00%</td><td></td></tr>

<tr><td colspan="5"><b>Most Win In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2015</td><td>0</td><td>51</td><td></td></tr>
<tr><td>2</td><td>2016</td><td>0</td><td>49</td><td></td></tr>
<tr><td>3</td><td>2017</td><td>0</td><td>47</td><td></td></tr>
<tr><td>4</td><td>2014</td><td>0</td><td>44</td><td></td></tr>
<tr><td>5</td><td>2010</td><td>0</td><td>43</td><td></td></tr>
<tr><td>6</td><td>2011</td><td>0</td><td>40</td><td></td></tr>
<tr><td>7</td><td>2008</td><td>0</td><td>38</td><td></td></tr>
<tr><td>8</td><td>2013</td><td>0</td><td>38</td><td></td></tr>
<tr><td>9</td><td>2012</td><td>0</td><td>35</td><td></td></tr>
<tr><td>10</td><td>2009</td><td>0</td><td>34</td><td></td></tr>

<tr><td colspan="5"><b>Less Win In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2018</td><td>0</td><td>26</td><td></td></tr>
<tr><td>2</td><td>2019</td><td>0</td><td>32</td><td></td></tr>
<tr><td>3</td><td>2009</td><td>0</td><td>34</td><td></td></tr>
<tr><td>4</td><td>2012</td><td>0</td><td>35</td><td></td></tr>
<tr><td>5</td><td>2008</td><td>0</td><td>38</td><td></td></tr>
<tr><td>6</td><td>2013</td><td>0</td><td>38</td><td></td></tr>
<tr><td>7</td><td>2011</td><td>0</td><td>40</td><td></td></tr>
<tr><td>8</td><td>2010</td><td>0</td><td>43</td><td></td></tr>

<tr><td colspan="5"><b>Most Lost In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2018</td><td>0</td><td>56</td><td></td></tr>
<tr><td>2</td><td>2019</td><td>0</td><td>50</td><td></td></tr>
<tr><td>3</td><td>2009</td><td>0</td><td>48</td><td></td></tr>
<tr><td>4</td><td>2012</td><td>0</td><td>47</td><td></td></tr>
<tr><td>5</td><td>2013</td><td>0</td><td>44</td><td></td></tr>
<tr><td>6</td><td>2011</td><td>0</td><td>42</td><td></td></tr>
<tr><td>7</td><td>2010</td><td>0</td><td>39</td><td></td></tr>
<tr><td>8</td><td>2008</td><td>0</td><td>26</td><td></td></tr>

<tr><td colspan="5"><b>Less Lost In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2008</td><td>0</td><td>26</td><td></td></tr>
<tr><td>2</td><td>2015</td><td>0</td><td>31</td><td></td></tr>
<tr><td>3</td><td>2016</td><td>0</td><td>33</td><td></td></tr>
<tr><td>4</td><td>2017</td><td>0</td><td>35</td><td></td></tr>
<tr><td>5</td><td>2014</td><td>0</td><td>38</td><td></td></tr>
<tr><td>6</td><td>2010</td><td>0</td><td>39</td><td></td></tr>
<tr><td>7</td><td>2011</td><td>0</td><td>42</td><td></td></tr>
<tr><td>8</td><td>2013</td><td>0</td><td>44</td><td></td></tr>
<tr><td>9</td><td>2012</td><td>0</td><td>47</td><td></td></tr>
<tr><td>10</td><td>2009</td><td>0</td><td>48</td><td></td></tr>

<tr><td colspan="5"><b>Most Point In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2015</td><td>0</td><td>109</td><td></td></tr>
<tr><td>2</td><td>2008</td><td>0</td><td>105</td><td></td></tr>
<tr><td>3</td><td>2016</td><td>0</td><td>103</td><td></td></tr>
<tr><td>4</td><td>2017</td><td>0</td><td>101</td><td></td></tr>
<tr><td>5</td><td>2010</td><td>0</td><td>93</td><td></td></tr>
<tr><td>6</td><td>2014</td><td>0</td><td>93</td><td></td></tr>
<tr><td>7</td><td>2011</td><td>0</td><td>90</td><td></td></tr>
<tr><td>8</td><td>2013</td><td>0</td><td>82</td><td></td></tr>
<tr><td>9</td><td>2019</td><td>0</td><td>80</td><td></td></tr>
<tr><td>10</td><td>2009</td><td>0</td><td>78</td><td></td></tr>

<tr><td colspan="5"><b>Less Points In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2018</td><td>0</td><td>63</td><td></td></tr>
<tr><td>2</td><td>2012</td><td>0</td><td>76</td><td></td></tr>
<tr><td>3</td><td>2009</td><td>0</td><td>78</td><td></td></tr>
<tr><td>4</td><td>2019</td><td>0</td><td>80</td><td></td></tr>
<tr><td>5</td><td>2013</td><td>0</td><td>82</td><td></td></tr>
<tr><td>6</td><td>2011</td><td>0</td><td>90</td><td></td></tr>
<tr><td>7</td><td>2010</td><td>0</td><td>93</td><td></td></tr>
<tr><td>8</td><td>2008</td><td>0</td><td>105</td><td></td></tr>

<tr><td colspan="5"><b>Most Win Home In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>0</td><td>0</td><td>32000</td><td></td></tr>
<tr><td>2</td><td>0</td><td>0</td><td>32000</td><td></td></tr>

<tr><td colspan="5"><b>Most Win Visitor In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>0</td><td>0</td><td>32000</td><td></td></tr>
<tr><td>2</td><td>0</td><td>0</td><td>32000</td><td></td></tr>

</table></div>
<h1 class="TeamRecordsPro_CHI"><a id="Blackhawks">Blackhawks</a></h1>
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
<br /><table class="STHSRecordTable">
<tr><td colspan="5"><b>Most Goals in 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2013</td><td>927</td><td>9</td><td></td></tr><tr><td>2</td><td>2008</td><td>23</td><td>8</td><td></td></tr><tr><td>3</td><td>2008</td><td>133</td><td>8</td><td></td></tr><tr><td>4</td><td>2008</td><td>189</td><td>8</td><td></td></tr><tr><td>5</td><td>2010</td><td>398</td><td>8</td><td></td></tr><tr><td>6</td><td>2008</td><td>94</td><td>7</td><td></td></tr><tr><td>7</td><td>2011</td><td>45</td><td>7</td><td></td></tr><tr><td>8</td><td>2012</td><td>83</td><td>7</td><td></td></tr><tr><td>9</td><td>2012</td><td>445</td><td>7</td><td></td></tr><tr><td>10</td><td>2012</td><td>760</td><td>7</td><td></td></tr>
<tr><td colspan="5"><b>Most Goals in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2008</td><td>0</td><td>315</td><td></td></tr>
<tr><td>2</td><td>2012</td><td>0</td><td>287</td><td></td></tr>
<tr><td>3</td><td>2014</td><td>0</td><td>243</td><td></td></tr>
<tr><td>4</td><td>2019</td><td>0</td><td>241</td><td></td></tr>
<tr><td>5</td><td>2015</td><td>0</td><td>239</td><td></td></tr>
<tr><td>6</td><td>2011</td><td>0</td><td>228</td><td></td></tr>
<tr><td>7</td><td>2013</td><td>0</td><td>223</td><td></td></tr>
<tr><td>8</td><td>2018</td><td>0</td><td>219</td><td></td></tr>
<tr><td>9</td><td>2010</td><td>0</td><td>213</td><td></td></tr>
<tr><td>10</td><td>2009</td><td>0</td><td>202</td><td></td></tr>

<tr><td colspan="5"><b>Less Goal in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2016</td><td>0</td><td>200</td><td></td></tr>
<tr><td>2</td><td>2009</td><td>0</td><td>202</td><td></td></tr>
<tr><td>3</td><td>2017</td><td>0</td><td>203</td><td></td></tr>
<tr><td>4</td><td>2010</td><td>0</td><td>213</td><td></td></tr>
<tr><td>5</td><td>2018</td><td>0</td><td>219</td><td></td></tr>
<tr><td>6</td><td>2013</td><td>0</td><td>223</td><td></td></tr>
<tr><td>7</td><td>2011</td><td>0</td><td>228</td><td></td></tr>
<tr><td>8</td><td>2015</td><td>0</td><td>239</td><td></td></tr>
<tr><td>9</td><td>2019</td><td>0</td><td>241</td><td></td></tr>
<tr><td>10</td><td>2014</td><td>0</td><td>243</td><td></td></tr>

<tr><td colspan="5"><b>Most Goals Against in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2009</td><td>0</td><td>314</td><td></td></tr>
<tr><td>2</td><td>2010</td><td>0</td><td>286</td><td></td></tr>
<tr><td>3</td><td>2016</td><td>0</td><td>280</td><td></td></tr>
<tr><td>4</td><td>2018</td><td>0</td><td>242</td><td></td></tr>
<tr><td>5</td><td>2008</td><td>0</td><td>217</td><td></td></tr>
<tr><td>6</td><td>2017</td><td>0</td><td>216</td><td></td></tr>
<tr><td>7</td><td>2014</td><td>0</td><td>212</td><td></td></tr>
<tr><td>8</td><td>2019</td><td>0</td><td>212</td><td></td></tr>
<tr><td>9</td><td>2011</td><td>0</td><td>206</td><td></td></tr>
<tr><td>10</td><td>2012</td><td>0</td><td>200</td><td></td></tr>

<tr><td colspan="5"><b>Less Goal Against in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2013</td><td>0</td><td>197</td><td></td></tr>
<tr><td>2</td><td>2015</td><td>0</td><td>197</td><td></td></tr>
<tr><td>3</td><td>2012</td><td>0</td><td>200</td><td></td></tr>
<tr><td>4</td><td>2011</td><td>0</td><td>206</td><td></td></tr>
<tr><td>5</td><td>2014</td><td>0</td><td>212</td><td></td></tr>
<tr><td>6</td><td>2019</td><td>0</td><td>212</td><td></td></tr>
<tr><td>7</td><td>2008</td><td>0</td><td>217</td><td></td></tr>
<tr><td>8</td><td>2018</td><td>0</td><td>242</td><td></td></tr>
<tr><td>9</td><td>2010</td><td>0</td><td>286</td><td></td></tr>
<tr><td>10</td><td>2009</td><td>0</td><td>314</td><td></td></tr>

<tr><td colspan="5"><b>Most Assists in 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2013</td><td>927</td><td>17</td><td></td></tr><tr><td>2</td><td>2008</td><td>23</td><td>15</td><td></td></tr><tr><td>3</td><td>2008</td><td>189</td><td>15</td><td></td></tr><tr><td>4</td><td>2010</td><td>398</td><td>15</td><td></td></tr><tr><td>5</td><td>2008</td><td>94</td><td>13</td><td></td></tr><tr><td>6</td><td>2008</td><td>133</td><td>13</td><td></td></tr><tr><td>7</td><td>2012</td><td>445</td><td>13</td><td></td></tr><tr><td>8</td><td>2017</td><td>10</td><td>13</td><td></td></tr><tr><td>9</td><td>2012</td><td>760</td><td>12</td><td></td></tr><tr><td>10</td><td>2012</td><td>876</td><td>12</td><td></td></tr>
<tr><td colspan="5"><b>Most Assists in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2008</td><td>0</td><td>551</td><td></td></tr>
<tr><td>2</td><td>2012</td><td>0</td><td>504</td><td></td></tr>
<tr><td>3</td><td>2019</td><td>0</td><td>426</td><td></td></tr>
<tr><td>4</td><td>2014</td><td>0</td><td>419</td><td></td></tr>
<tr><td>5</td><td>2015</td><td>0</td><td>417</td><td></td></tr>
<tr><td>6</td><td>2018</td><td>0</td><td>392</td><td></td></tr>
<tr><td>7</td><td>2013</td><td>0</td><td>384</td><td></td></tr>
<tr><td>8</td><td>2010</td><td>0</td><td>375</td><td></td></tr>
<tr><td>9</td><td>2011</td><td>0</td><td>374</td><td></td></tr>
<tr><td>10</td><td>2009</td><td>0</td><td>352</td><td></td></tr>

<tr><td colspan="5"><b>Less Assist in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2016</td><td>0</td><td>349</td><td></td></tr>
<tr><td>2</td><td>2009</td><td>0</td><td>352</td><td></td></tr>
<tr><td>3</td><td>2017</td><td>0</td><td>366</td><td></td></tr>
<tr><td>4</td><td>2011</td><td>0</td><td>374</td><td></td></tr>
<tr><td>5</td><td>2010</td><td>0</td><td>375</td><td></td></tr>
<tr><td>6</td><td>2013</td><td>0</td><td>384</td><td></td></tr>
<tr><td>7</td><td>2018</td><td>0</td><td>392</td><td></td></tr>
<tr><td>8</td><td>2015</td><td>0</td><td>417</td><td></td></tr>
<tr><td>9</td><td>2014</td><td>0</td><td>419</td><td></td></tr>
<tr><td>10</td><td>2019</td><td>0</td><td>426</td><td></td></tr>

<tr><td colspan="5"><b>Most Game Points in 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2013</td><td>927</td><td>26</td><td></td></tr><tr><td>2</td><td>2008</td><td>23</td><td>23</td><td></td></tr><tr><td>3</td><td>2008</td><td>189</td><td>23</td><td></td></tr><tr><td>4</td><td>2010</td><td>398</td><td>23</td><td></td></tr><tr><td>5</td><td>2008</td><td>133</td><td>21</td><td></td></tr><tr><td>6</td><td>2008</td><td>94</td><td>20</td><td></td></tr><tr><td>7</td><td>2012</td><td>445</td><td>20</td><td></td></tr><tr><td>8</td><td>2017</td><td>10</td><td>20</td><td></td></tr><tr><td>9</td><td>2012</td><td>760</td><td>19</td><td></td></tr><tr><td>10</td><td>2015</td><td>884</td><td>19</td><td></td></tr>
<tr><td colspan="5"><b>Most Game Points in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>0</td><td>0</td><td>32000</td><td></td></tr>
<tr><td>2</td><td>0</td><td>0</td><td>32000</td><td></td></tr>

<tr><td colspan="5"><b>Less Game Point In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2016</td><td>0</td><td>549</td><td></td></tr>
<tr><td>2</td><td>2009</td><td>0</td><td>554</td><td></td></tr>
<tr><td>3</td><td>2017</td><td>0</td><td>569</td><td></td></tr>
<tr><td>4</td><td>2010</td><td>0</td><td>588</td><td></td></tr>
<tr><td>5</td><td>2011</td><td>0</td><td>602</td><td></td></tr>
<tr><td>6</td><td>2013</td><td>0</td><td>607</td><td></td></tr>
<tr><td>7</td><td>2018</td><td>0</td><td>611</td><td></td></tr>
<tr><td>8</td><td>2015</td><td>0</td><td>656</td><td></td></tr>
<tr><td>9</td><td>2014</td><td>0</td><td>662</td><td></td></tr>
<tr><td>10</td><td>2019</td><td>0</td><td>667</td><td></td></tr>

<tr><td colspan="5"><b>Most Shots In 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2018</td><td>519</td><td>54</td><td></td></tr><tr><td>2</td><td>2012</td><td>953</td><td>53</td><td></td></tr><tr><td>3</td><td>2008</td><td>94</td><td>52</td><td></td></tr><tr><td>4</td><td>2012</td><td>557</td><td>52</td><td></td></tr><tr><td>5</td><td>2018</td><td>854</td><td>52</td><td></td></tr><tr><td>6</td><td>2012</td><td>1222</td><td>50</td><td></td></tr><tr><td>7</td><td>2013</td><td>26</td><td>50</td><td></td></tr><tr><td>8</td><td>2015</td><td>597</td><td>50</td><td></td></tr><tr><td>9</td><td>2017</td><td>10</td><td>50</td><td></td></tr><tr><td>10</td><td>2012</td><td>1186</td><td>48</td><td></td></tr>
<tr><td colspan="5"><b>Most Shots In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2012</td><td>0</td><td>2750</td><td></td></tr>
<tr><td>2</td><td>2019</td><td>0</td><td>2642</td><td></td></tr>
<tr><td>3</td><td>2008</td><td>0</td><td>2514</td><td></td></tr>
<tr><td>4</td><td>2011</td><td>0</td><td>2460</td><td></td></tr>
<tr><td>5</td><td>2018</td><td>0</td><td>2447</td><td></td></tr>
<tr><td>6</td><td>2013</td><td>0</td><td>2427</td><td></td></tr>
<tr><td>7</td><td>2017</td><td>0</td><td>2399</td><td></td></tr>
<tr><td>8</td><td>2015</td><td>0</td><td>2346</td><td></td></tr>
<tr><td>9</td><td>2014</td><td>0</td><td>2267</td><td></td></tr>
<tr><td>10</td><td>2010</td><td>0</td><td>2018</td><td></td></tr>

<tr><td colspan="5"><b>Less Shots In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2009</td><td>0</td><td>1918</td><td></td></tr>
<tr><td>2</td><td>2016</td><td>0</td><td>2003</td><td></td></tr>
<tr><td>3</td><td>2010</td><td>0</td><td>2018</td><td></td></tr>
<tr><td>4</td><td>2014</td><td>0</td><td>2267</td><td></td></tr>
<tr><td>5</td><td>2015</td><td>0</td><td>2346</td><td></td></tr>
<tr><td>6</td><td>2013</td><td>0</td><td>2427</td><td></td></tr>
<tr><td>7</td><td>2018</td><td>0</td><td>2447</td><td></td></tr>
<tr><td>8</td><td>2011</td><td>0</td><td>2460</td><td></td></tr>
<tr><td>9</td><td>2008</td><td>0</td><td>2514</td><td></td></tr>
<tr><td>10</td><td>2019</td><td>0</td><td>2642</td><td></td></tr>

<tr><td colspan="5"><b>Most Shots Blocked In 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2011</td><td>495</td><td>22</td><td></td></tr><tr><td>2</td><td>2009</td><td>1145</td><td>21</td><td></td></tr><tr><td>3</td><td>2015</td><td>655</td><td>21</td><td></td></tr><tr><td>4</td><td>2016</td><td>81</td><td>20</td><td></td></tr><tr><td>5</td><td>2009</td><td>811</td><td>19</td><td></td></tr><tr><td>6</td><td>2016</td><td>1213</td><td>19</td><td></td></tr><tr><td>7</td><td>2018</td><td>957</td><td>19</td><td></td></tr><tr><td>8</td><td>2009</td><td>5</td><td>18</td><td></td></tr><tr><td>9</td><td>2011</td><td>136</td><td>18</td><td></td></tr><tr><td>10</td><td>2016</td><td>1094</td><td>18</td><td></td></tr>
<tr><td colspan="5"><b>Most Shots Blocked In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>0</td><td>0</td><td>32000</td><td></td></tr>
<tr><td>2</td><td>0</td><td>0</td><td>32000</td><td></td></tr>

<tr><td colspan="5"><b>Less Shots Block In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2012</td><td>0</td><td>595</td><td></td></tr>
<tr><td>2</td><td>2013</td><td>0</td><td>621</td><td></td></tr>
<tr><td>3</td><td>2014</td><td>0</td><td>621</td><td></td></tr>
<tr><td>4</td><td>2015</td><td>0</td><td>627</td><td></td></tr>
<tr><td>5</td><td>2008</td><td>0</td><td>659</td><td></td></tr>
<tr><td>6</td><td>2019</td><td>0</td><td>683</td><td></td></tr>
<tr><td>7</td><td>2010</td><td>0</td><td>705</td><td></td></tr>
<tr><td>8</td><td>2009</td><td>0</td><td>745</td><td></td></tr>
<tr><td>9</td><td>2011</td><td>0</td><td>764</td><td></td></tr>

<tr><td colspan="5"><b>Most Shots Against In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2018</td><td>0</td><td>2780</td><td></td></tr>
<tr><td>2</td><td>2017</td><td>0</td><td>2674</td><td></td></tr>
<tr><td>3</td><td>2009</td><td>0</td><td>2627</td><td></td></tr>
<tr><td>4</td><td>2010</td><td>0</td><td>2543</td><td></td></tr>
<tr><td>5</td><td>2016</td><td>0</td><td>2506</td><td></td></tr>
<tr><td>6</td><td>2011</td><td>0</td><td>2392</td><td></td></tr>
<tr><td>7</td><td>2019</td><td>0</td><td>2373</td><td></td></tr>
<tr><td>8</td><td>2008</td><td>0</td><td>2231</td><td></td></tr>
<tr><td>9</td><td>2013</td><td>0</td><td>2197</td><td></td></tr>
<tr><td>10</td><td>2012</td><td>0</td><td>2129</td><td></td></tr>

<tr><td colspan="5"><b>Less Shots Against In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2015</td><td>0</td><td>2120</td><td></td></tr>
<tr><td>2</td><td>2012</td><td>0</td><td>2129</td><td></td></tr>
<tr><td>3</td><td>2013</td><td>0</td><td>2197</td><td></td></tr>
<tr><td>4</td><td>2014</td><td>0</td><td>2197</td><td></td></tr>
<tr><td>5</td><td>2008</td><td>0</td><td>2231</td><td></td></tr>
<tr><td>6</td><td>2019</td><td>0</td><td>2373</td><td></td></tr>
<tr><td>7</td><td>2011</td><td>0</td><td>2392</td><td></td></tr>
<tr><td>8</td><td>2010</td><td>0</td><td>2543</td><td></td></tr>
<tr><td>9</td><td>2009</td><td>0</td><td>2627</td><td></td></tr>

<tr><td colspan="5"><b>Most Pim In 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2019</td><td>655</td><td>58</td><td><a href="OTHL-655.html">Game Direct Link</a></td></tr><tr><td>2</td><td>2010</td><td>296</td><td>52</td><td></td></tr><tr><td>3</td><td>2014</td><td>246</td><td>45</td><td></td></tr><tr><td>4</td><td>2011</td><td>106</td><td>43</td><td></td></tr><tr><td>5</td><td>2011</td><td>866</td><td>43</td><td></td></tr><tr><td>6</td><td>2008</td><td>966</td><td>42</td><td></td></tr><tr><td>7</td><td>2008</td><td>1057</td><td>41</td><td></td></tr><tr><td>8</td><td>2009</td><td>5</td><td>41</td><td></td></tr><tr><td>9</td><td>2010</td><td>420</td><td>41</td><td></td></tr><tr><td>10</td><td>2017</td><td>752</td><td>37</td><td></td></tr>
<tr><td colspan="5"><b>Most Pim In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2008</td><td>0</td><td>1557</td><td></td></tr>
<tr><td>2</td><td>2009</td><td>0</td><td>1343</td><td></td></tr>
<tr><td>3</td><td>2011</td><td>0</td><td>1340</td><td></td></tr>
<tr><td>4</td><td>2010</td><td>0</td><td>1320</td><td></td></tr>
<tr><td>5</td><td>2016</td><td>0</td><td>902</td><td></td></tr>
<tr><td>6</td><td>2013</td><td>0</td><td>854</td><td></td></tr>
<tr><td>7</td><td>2012</td><td>0</td><td>839</td><td></td></tr>
<tr><td>8</td><td>2019</td><td>0</td><td>658</td><td></td></tr>
<tr><td>9</td><td>2018</td><td>0</td><td>499</td><td></td></tr>

<tr><td colspan="5"><b>Less Pim In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2018</td><td>0</td><td>499</td><td></td></tr>
<tr><td>2</td><td>2017</td><td>0</td><td>586</td><td></td></tr>
<tr><td>3</td><td>2015</td><td>0</td><td>643</td><td></td></tr>
<tr><td>4</td><td>2019</td><td>0</td><td>658</td><td></td></tr>
<tr><td>5</td><td>2014</td><td>0</td><td>736</td><td></td></tr>
<tr><td>6</td><td>2012</td><td>0</td><td>839</td><td></td></tr>
<tr><td>7</td><td>2013</td><td>0</td><td>854</td><td></td></tr>
<tr><td>8</td><td>2016</td><td>0</td><td>902</td><td></td></tr>
<tr><td>9</td><td>2010</td><td>0</td><td>1320</td><td></td></tr>
<tr><td>10</td><td>2011</td><td>0</td><td>1340</td><td></td></tr>

<tr><td colspan="5"><b>Most Hits In 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2011</td><td>612</td><td>40</td><td></td></tr><tr><td>2</td><td>2008</td><td>270</td><td>39</td><td></td></tr><tr><td>3</td><td>2011</td><td>241</td><td>37</td><td></td></tr><tr><td>4</td><td>2016</td><td>935</td><td>37</td><td></td></tr><tr><td>5</td><td>2008</td><td>411</td><td>36</td><td></td></tr><tr><td>6</td><td>2012</td><td>900</td><td>36</td><td></td></tr><tr><td>7</td><td>2011</td><td>272</td><td>35</td><td></td></tr><tr><td>8</td><td>2011</td><td>525</td><td>35</td><td></td></tr><tr><td>9</td><td>2014</td><td>855</td><td>35</td><td></td></tr><tr><td>10</td><td>2011</td><td>173</td><td>34</td><td></td></tr>
<tr><td colspan="5"><b>Most Hits In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2011</td><td>0</td><td>2044</td><td></td></tr>
<tr><td>2</td><td>2008</td><td>0</td><td>1785</td><td></td></tr>
<tr><td>3</td><td>2017</td><td>0</td><td>1779</td><td></td></tr>
<tr><td>4</td><td>2012</td><td>0</td><td>1772</td><td></td></tr>
<tr><td>5</td><td>2016</td><td>0</td><td>1753</td><td></td></tr>
<tr><td>6</td><td>2013</td><td>0</td><td>1703</td><td></td></tr>
<tr><td>7</td><td>2018</td><td>0</td><td>1661</td><td></td></tr>
<tr><td>8</td><td>2019</td><td>0</td><td>1659</td><td></td></tr>
<tr><td>9</td><td>2014</td><td>0</td><td>1639</td><td></td></tr>
<tr><td>10</td><td>2009</td><td>0</td><td>1531</td><td></td></tr>

<tr><td colspan="5"><b>Less Hit In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2010</td><td>0</td><td>1514</td><td></td></tr>
<tr><td>2</td><td>2009</td><td>0</td><td>1531</td><td></td></tr>
<tr><td>3</td><td>2015</td><td>0</td><td>1614</td><td></td></tr>
<tr><td>4</td><td>2014</td><td>0</td><td>1639</td><td></td></tr>
<tr><td>5</td><td>2019</td><td>0</td><td>1659</td><td></td></tr>
<tr><td>6</td><td>2018</td><td>0</td><td>1661</td><td></td></tr>
<tr><td>7</td><td>2013</td><td>0</td><td>1703</td><td></td></tr>
<tr><td>8</td><td>2012</td><td>0</td><td>1772</td><td></td></tr>
<tr><td>9</td><td>2008</td><td>0</td><td>1785</td><td></td></tr>
<tr><td>10</td><td>2011</td><td>0</td><td>2044</td><td></td></tr>

<tr><td colspan="5"><b>Most Empty Net Goal In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2011</td><td>0</td><td>2</td><td></td></tr>
<tr><td>2</td><td>2018</td><td>0</td><td>2</td><td></td></tr>
<tr><td>3</td><td>2019</td><td>0</td><td>2</td><td></td></tr>
<tr><td>4</td><td>2009</td><td>0</td><td>1</td><td></td></tr>
<tr><td>5</td><td>2016</td><td>0</td><td>1</td><td></td></tr>

<tr><td colspan="5"><b>Best PP In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2019</td><td>0</td><td>21.00%</td><td></td></tr>
<tr><td>2</td><td>2011</td><td>0</td><td>20.60%</td><td></td></tr>
<tr><td>3</td><td>2012</td><td>0</td><td>20.00%</td><td></td></tr>
<tr><td>4</td><td>2018</td><td>0</td><td>18.10%</td><td></td></tr>
<tr><td>5</td><td>2008</td><td>0</td><td>17.50%</td><td></td></tr>
<tr><td>6</td><td>2017</td><td>0</td><td>17.40%</td><td></td></tr>
<tr><td>7</td><td>2016</td><td>0</td><td>16.90%</td><td></td></tr>
<tr><td>8</td><td>2009</td><td>0</td><td>16.40%</td><td></td></tr>
<tr><td>9</td><td>2015</td><td>0</td><td>16.00%</td><td></td></tr>
<tr><td>10</td><td>2013</td><td>0</td><td>15.60%</td><td></td></tr>

<tr><td colspan="5"><b>Best PK In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2008</td><td>0</td><td>87.80%</td><td></td></tr>
<tr><td>2</td><td>2014</td><td>0</td><td>86.90%</td><td></td></tr>
<tr><td>3</td><td>2015</td><td>0</td><td>85.10%</td><td></td></tr>
<tr><td>4</td><td>2012</td><td>0</td><td>83.40%</td><td></td></tr>
<tr><td>5</td><td>2013</td><td>0</td><td>83.20%</td><td></td></tr>
<tr><td>6</td><td>2019</td><td>0</td><td>82.80%</td><td></td></tr>
<tr><td>7</td><td>2018</td><td>0</td><td>82.00%</td><td></td></tr>
<tr><td>8</td><td>2011</td><td>0</td><td>81.50%</td><td></td></tr>
<tr><td>9</td><td>2010</td><td>0</td><td>80.20%</td><td></td></tr>
<tr><td>10</td><td>2009</td><td>0</td><td>78.30%</td><td></td></tr>

<tr><td colspan="5"><b>Worse PP In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2010</td><td>0</td><td>12.70%</td><td></td></tr>
<tr><td>2</td><td>2013</td><td>0</td><td>15.60%</td><td></td></tr>
<tr><td>3</td><td>2014</td><td>0</td><td>15.60%</td><td></td></tr>
<tr><td>4</td><td>2015</td><td>0</td><td>16.00%</td><td></td></tr>
<tr><td>5</td><td>2009</td><td>0</td><td>16.40%</td><td></td></tr>
<tr><td>6</td><td>2008</td><td>0</td><td>17.50%</td><td></td></tr>
<tr><td>7</td><td>2018</td><td>0</td><td>18.10%</td><td></td></tr>
<tr><td>8</td><td>2012</td><td>0</td><td>20.00%</td><td></td></tr>
<tr><td>9</td><td>2011</td><td>0</td><td>20.60%</td><td></td></tr>

<tr><td colspan="5"><b>Worse PK In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2016</td><td>0</td><td>76.50%</td><td></td></tr>
<tr><td>2</td><td>2009</td><td>0</td><td>78.30%</td><td></td></tr>
<tr><td>3</td><td>2017</td><td>0</td><td>79.10%</td><td></td></tr>
<tr><td>4</td><td>2010</td><td>0</td><td>80.20%</td><td></td></tr>
<tr><td>5</td><td>2011</td><td>0</td><td>81.50%</td><td></td></tr>
<tr><td>6</td><td>2018</td><td>0</td><td>82.00%</td><td></td></tr>
<tr><td>7</td><td>2019</td><td>0</td><td>82.80%</td><td></td></tr>
<tr><td>8</td><td>2013</td><td>0</td><td>83.20%</td><td></td></tr>
<tr><td>9</td><td>2012</td><td>0</td><td>83.40%</td><td></td></tr>
<tr><td>10</td><td>2008</td><td>0</td><td>87.80%</td><td></td></tr>

<tr><td colspan="5"><b>Most Win In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2012</td><td>0</td><td>57</td><td></td></tr>
<tr><td>2</td><td>2015</td><td>0</td><td>51</td><td></td></tr>
<tr><td>3</td><td>2008</td><td>0</td><td>47</td><td></td></tr>
<tr><td>4</td><td>2014</td><td>0</td><td>47</td><td></td></tr>
<tr><td>5</td><td>2013</td><td>0</td><td>46</td><td></td></tr>
<tr><td>6</td><td>2019</td><td>0</td><td>46</td><td></td></tr>
<tr><td>7</td><td>2011</td><td>0</td><td>45</td><td></td></tr>
<tr><td>8</td><td>2018</td><td>0</td><td>36</td><td></td></tr>
<tr><td>9</td><td>2010</td><td>0</td><td>28</td><td></td></tr>
<tr><td>10</td><td>2009</td><td>0</td><td>20</td><td></td></tr>

<tr><td colspan="5"><b>Less Win In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2009</td><td>0</td><td>20</td><td></td></tr>
<tr><td>2</td><td>2016</td><td>0</td><td>25</td><td></td></tr>
<tr><td>3</td><td>2010</td><td>0</td><td>28</td><td></td></tr>
<tr><td>4</td><td>2018</td><td>0</td><td>36</td><td></td></tr>
<tr><td>5</td><td>2017</td><td>0</td><td>39</td><td></td></tr>
<tr><td>6</td><td>2011</td><td>0</td><td>45</td><td></td></tr>
<tr><td>7</td><td>2013</td><td>0</td><td>46</td><td></td></tr>
<tr><td>8</td><td>2019</td><td>0</td><td>46</td><td></td></tr>
<tr><td>9</td><td>2008</td><td>0</td><td>47</td><td></td></tr>
<tr><td>10</td><td>2012</td><td>0</td><td>57</td><td></td></tr>

<tr><td colspan="5"><b>Most Lost In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2009</td><td>0</td><td>62</td><td></td></tr>
<tr><td>2</td><td>2016</td><td>0</td><td>57</td><td></td></tr>
<tr><td>3</td><td>2010</td><td>0</td><td>54</td><td></td></tr>
<tr><td>4</td><td>2018</td><td>0</td><td>46</td><td></td></tr>
<tr><td>5</td><td>2017</td><td>0</td><td>43</td><td></td></tr>
<tr><td>6</td><td>2011</td><td>0</td><td>37</td><td></td></tr>
<tr><td>7</td><td>2013</td><td>0</td><td>36</td><td></td></tr>
<tr><td>8</td><td>2019</td><td>0</td><td>36</td><td></td></tr>
<tr><td>9</td><td>2014</td><td>0</td><td>35</td><td></td></tr>
<tr><td>10</td><td>2012</td><td>0</td><td>25</td><td></td></tr>

<tr><td colspan="5"><b>Less Lost In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2008</td><td>0</td><td>21</td><td></td></tr>
<tr><td>2</td><td>2012</td><td>0</td><td>25</td><td></td></tr>
<tr><td>3</td><td>2015</td><td>0</td><td>31</td><td></td></tr>
<tr><td>4</td><td>2014</td><td>0</td><td>35</td><td></td></tr>
<tr><td>5</td><td>2013</td><td>0</td><td>36</td><td></td></tr>
<tr><td>6</td><td>2019</td><td>0</td><td>36</td><td></td></tr>
<tr><td>7</td><td>2011</td><td>0</td><td>37</td><td></td></tr>
<tr><td>8</td><td>2018</td><td>0</td><td>46</td><td></td></tr>
<tr><td>9</td><td>2010</td><td>0</td><td>54</td><td></td></tr>
<tr><td>10</td><td>2009</td><td>0</td><td>62</td><td></td></tr>

<tr><td colspan="5"><b>Most Point In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2012</td><td>0</td><td>120</td><td></td></tr>
<tr><td>2</td><td>2008</td><td>0</td><td>119</td><td></td></tr>
<tr><td>3</td><td>2015</td><td>0</td><td>108</td><td></td></tr>
<tr><td>4</td><td>2014</td><td>0</td><td>105</td><td></td></tr>
<tr><td>5</td><td>2013</td><td>0</td><td>104</td><td></td></tr>
<tr><td>6</td><td>2011</td><td>0</td><td>101</td><td></td></tr>
<tr><td>7</td><td>2019</td><td>0</td><td>99</td><td></td></tr>
<tr><td>8</td><td>2018</td><td>0</td><td>79</td><td></td></tr>
<tr><td>9</td><td>2010</td><td>0</td><td>64</td><td></td></tr>
<tr><td>10</td><td>2009</td><td>0</td><td>49</td><td></td></tr>

<tr><td colspan="5"><b>Less Points In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2009</td><td>0</td><td>49</td><td></td></tr>
<tr><td>2</td><td>2016</td><td>0</td><td>60</td><td></td></tr>
<tr><td>3</td><td>2010</td><td>0</td><td>64</td><td></td></tr>
<tr><td>4</td><td>2018</td><td>0</td><td>79</td><td></td></tr>
<tr><td>5</td><td>2017</td><td>0</td><td>85</td><td></td></tr>
<tr><td>6</td><td>2019</td><td>0</td><td>99</td><td></td></tr>
<tr><td>7</td><td>2011</td><td>0</td><td>101</td><td></td></tr>
<tr><td>8</td><td>2013</td><td>0</td><td>104</td><td></td></tr>
<tr><td>9</td><td>2014</td><td>0</td><td>105</td><td></td></tr>
<tr><td>10</td><td>2008</td><td>0</td><td>119</td><td></td></tr>

<tr><td colspan="5"><b>Most Win Home In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>0</td><td>0</td><td>32000</td><td></td></tr>
<tr><td>2</td><td>0</td><td>0</td><td>32000</td><td></td></tr>

<tr><td colspan="5"><b>Most Win Visitor In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>0</td><td>0</td><td>32000</td><td></td></tr>
<tr><td>2</td><td>0</td><td>0</td><td>32000</td><td></td></tr>

</table></div>
<h1 class="TeamRecordsPro_CLB"><a id="BlueJackets">Blue Jackets</a></h1>
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
<br /><table class="STHSRecordTable">
<tr><td colspan="5"><b>Most Goals in 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2013</td><td>1051</td><td>8</td><td></td></tr><tr><td>2</td><td>2008</td><td>510</td><td>7</td><td></td></tr><tr><td>3</td><td>2009</td><td>304</td><td>7</td><td></td></tr><tr><td>4</td><td>2009</td><td>659</td><td>7</td><td></td></tr><tr><td>5</td><td>2009</td><td>1102</td><td>7</td><td></td></tr><tr><td>6</td><td>2012</td><td>164</td><td>7</td><td></td></tr><tr><td>7</td><td>2019</td><td>996</td><td>7</td><td><a href="OTHL-996.html">Game Direct Link</a></td></tr><tr><td>8</td><td>2008</td><td>1032</td><td>6</td><td></td></tr><tr><td>9</td><td>2011</td><td>260</td><td>6</td><td></td></tr><tr><td>10</td><td>2011</td><td>303</td><td>6</td><td></td></tr>
<tr><td colspan="5"><b>Most Goals in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2009</td><td>0</td><td>250</td><td></td></tr>
<tr><td>2</td><td>2019</td><td>0</td><td>229</td><td></td></tr>
<tr><td>3</td><td>2011</td><td>0</td><td>226</td><td></td></tr>
<tr><td>4</td><td>2018</td><td>0</td><td>225</td><td></td></tr>
<tr><td>5</td><td>2010</td><td>0</td><td>213</td><td></td></tr>
<tr><td>6</td><td>2017</td><td>0</td><td>210</td><td></td></tr>
<tr><td>7</td><td>2014</td><td>0</td><td>209</td><td></td></tr>
<tr><td>8</td><td>2015</td><td>0</td><td>207</td><td></td></tr>
<tr><td>9</td><td>2008</td><td>0</td><td>202</td><td></td></tr>
<tr><td>10</td><td>2013</td><td>0</td><td>197</td><td></td></tr>

<tr><td colspan="5"><b>Less Goal in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2012</td><td>0</td><td>194</td><td></td></tr>
<tr><td>2</td><td>2013</td><td>0</td><td>197</td><td></td></tr>
<tr><td>3</td><td>2016</td><td>0</td><td>199</td><td></td></tr>
<tr><td>4</td><td>2008</td><td>0</td><td>202</td><td></td></tr>
<tr><td>5</td><td>2015</td><td>0</td><td>207</td><td></td></tr>
<tr><td>6</td><td>2014</td><td>0</td><td>209</td><td></td></tr>
<tr><td>7</td><td>2010</td><td>0</td><td>213</td><td></td></tr>
<tr><td>8</td><td>2018</td><td>0</td><td>225</td><td></td></tr>
<tr><td>9</td><td>2011</td><td>0</td><td>226</td><td></td></tr>
<tr><td>10</td><td>2019</td><td>0</td><td>229</td><td></td></tr>

<tr><td colspan="5"><b>Most Goals Against in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2008</td><td>0</td><td>313</td><td></td></tr>
<tr><td>2</td><td>2013</td><td>0</td><td>248</td><td></td></tr>
<tr><td>3</td><td>2019</td><td>0</td><td>246</td><td></td></tr>
<tr><td>4</td><td>2018</td><td>0</td><td>239</td><td></td></tr>
<tr><td>5</td><td>2010</td><td>0</td><td>238</td><td></td></tr>
<tr><td>6</td><td>2012</td><td>0</td><td>238</td><td></td></tr>
<tr><td>7</td><td>2015</td><td>0</td><td>238</td><td></td></tr>
<tr><td>8</td><td>2009</td><td>0</td><td>233</td><td></td></tr>
<tr><td>9</td><td>2011</td><td>0</td><td>222</td><td></td></tr>

<tr><td colspan="5"><b>Less Goal Against in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2014</td><td>0</td><td>198</td><td></td></tr>
<tr><td>2</td><td>2017</td><td>0</td><td>221</td><td></td></tr>
<tr><td>3</td><td>2011</td><td>0</td><td>222</td><td></td></tr>
<tr><td>4</td><td>2016</td><td>0</td><td>230</td><td></td></tr>
<tr><td>5</td><td>2009</td><td>0</td><td>233</td><td></td></tr>
<tr><td>6</td><td>2010</td><td>0</td><td>238</td><td></td></tr>
<tr><td>7</td><td>2012</td><td>0</td><td>238</td><td></td></tr>
<tr><td>8</td><td>2018</td><td>0</td><td>239</td><td></td></tr>
<tr><td>9</td><td>2019</td><td>0</td><td>246</td><td></td></tr>
<tr><td>10</td><td>2013</td><td>0</td><td>248</td><td></td></tr>

<tr><td colspan="5"><b>Most Assists in 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2009</td><td>659</td><td>14</td><td></td></tr><tr><td>2</td><td>2008</td><td>510</td><td>13</td><td></td></tr><tr><td>3</td><td>2012</td><td>164</td><td>13</td><td></td></tr><tr><td>4</td><td>2013</td><td>1051</td><td>13</td><td></td></tr><tr><td>5</td><td>2019</td><td>996</td><td>13</td><td><a href="OTHL-996.html">Game Direct Link</a></td></tr><tr><td>6</td><td>2009</td><td>601</td><td>12</td><td></td></tr><tr><td>7</td><td>2009</td><td>1102</td><td>12</td><td></td></tr><tr><td>8</td><td>2014</td><td>270</td><td>12</td><td></td></tr><tr><td>9</td><td>2018</td><td>602</td><td>12</td><td></td></tr><tr><td>10</td><td>2018</td><td>672</td><td>12</td><td></td></tr>
<tr><td colspan="5"><b>Most Assists in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2009</td><td>0</td><td>444</td><td></td></tr>
<tr><td>2</td><td>2019</td><td>0</td><td>400</td><td></td></tr>
<tr><td>3</td><td>2018</td><td>0</td><td>387</td><td></td></tr>
<tr><td>4</td><td>2010</td><td>0</td><td>377</td><td></td></tr>
<tr><td>5</td><td>2017</td><td>0</td><td>372</td><td></td></tr>
<tr><td>6</td><td>2008</td><td>0</td><td>361</td><td></td></tr>
<tr><td>7</td><td>2011</td><td>0</td><td>358</td><td></td></tr>
<tr><td>8</td><td>2014</td><td>0</td><td>355</td><td></td></tr>
<tr><td>9</td><td>2013</td><td>0</td><td>336</td><td></td></tr>
<tr><td>10</td><td>2012</td><td>0</td><td>324</td><td></td></tr>

<tr><td colspan="5"><b>Less Assist in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2012</td><td>0</td><td>324</td><td></td></tr>
<tr><td>2</td><td>2013</td><td>0</td><td>336</td><td></td></tr>
<tr><td>3</td><td>2016</td><td>0</td><td>344</td><td></td></tr>
<tr><td>4</td><td>2015</td><td>0</td><td>354</td><td></td></tr>
<tr><td>5</td><td>2014</td><td>0</td><td>355</td><td></td></tr>
<tr><td>6</td><td>2011</td><td>0</td><td>358</td><td></td></tr>
<tr><td>7</td><td>2008</td><td>0</td><td>361</td><td></td></tr>
<tr><td>8</td><td>2010</td><td>0</td><td>377</td><td></td></tr>
<tr><td>9</td><td>2018</td><td>0</td><td>387</td><td></td></tr>
<tr><td>10</td><td>2019</td><td>0</td><td>400</td><td></td></tr>

<tr><td colspan="5"><b>Most Game Points in 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2009</td><td>659</td><td>21</td><td></td></tr><tr><td>2</td><td>2013</td><td>1051</td><td>21</td><td></td></tr><tr><td>3</td><td>2008</td><td>510</td><td>20</td><td></td></tr><tr><td>4</td><td>2012</td><td>164</td><td>20</td><td></td></tr><tr><td>5</td><td>2019</td><td>996</td><td>20</td><td><a href="OTHL-996.html">Game Direct Link</a></td></tr><tr><td>6</td><td>2009</td><td>1102</td><td>19</td><td></td></tr><tr><td>7</td><td>2009</td><td>304</td><td>18</td><td></td></tr><tr><td>8</td><td>2009</td><td>601</td><td>18</td><td></td></tr><tr><td>9</td><td>2014</td><td>270</td><td>18</td><td></td></tr><tr><td>10</td><td>2018</td><td>602</td><td>18</td><td></td></tr>
<tr><td colspan="5"><b>Most Game Points in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>0</td><td>0</td><td>32000</td><td></td></tr>
<tr><td>2</td><td>0</td><td>0</td><td>32000</td><td></td></tr>

<tr><td colspan="5"><b>Less Game Point In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2012</td><td>0</td><td>518</td><td></td></tr>
<tr><td>2</td><td>2013</td><td>0</td><td>533</td><td></td></tr>
<tr><td>3</td><td>2016</td><td>0</td><td>543</td><td></td></tr>
<tr><td>4</td><td>2015</td><td>0</td><td>561</td><td></td></tr>
<tr><td>5</td><td>2008</td><td>0</td><td>563</td><td></td></tr>
<tr><td>6</td><td>2014</td><td>0</td><td>564</td><td></td></tr>
<tr><td>7</td><td>2011</td><td>0</td><td>584</td><td></td></tr>
<tr><td>8</td><td>2010</td><td>0</td><td>590</td><td></td></tr>
<tr><td>9</td><td>2018</td><td>0</td><td>612</td><td></td></tr>
<tr><td>10</td><td>2019</td><td>0</td><td>629</td><td></td></tr>

<tr><td colspan="5"><b>Most Shots In 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2018</td><td>434</td><td>57</td><td></td></tr><tr><td>2</td><td>2017</td><td>151</td><td>50</td><td></td></tr><tr><td>3</td><td>2009</td><td>1137</td><td>49</td><td></td></tr><tr><td>4</td><td>2017</td><td>1245</td><td>49</td><td></td></tr><tr><td>5</td><td>2019</td><td>933</td><td>48</td><td><a href="OTHL-933.html">Game Direct Link</a></td></tr><tr><td>6</td><td>2017</td><td>1160</td><td>45</td><td></td></tr><tr><td>7</td><td>2018</td><td>48</td><td>45</td><td></td></tr><tr><td>8</td><td>2018</td><td>698</td><td>45</td><td></td></tr><tr><td>9</td><td>2010</td><td>103</td><td>44</td><td></td></tr><tr><td>10</td><td>2010</td><td>648</td><td>44</td><td></td></tr>
<tr><td colspan="5"><b>Most Shots In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2011</td><td>0</td><td>2593</td><td></td></tr>
<tr><td>2</td><td>2019</td><td>0</td><td>2516</td><td></td></tr>
<tr><td>3</td><td>2018</td><td>0</td><td>2507</td><td></td></tr>
<tr><td>4</td><td>2017</td><td>0</td><td>2294</td><td></td></tr>
<tr><td>5</td><td>2009</td><td>0</td><td>2222</td><td></td></tr>
<tr><td>6</td><td>2014</td><td>0</td><td>2142</td><td></td></tr>
<tr><td>7</td><td>2010</td><td>0</td><td>2041</td><td></td></tr>
<tr><td>8</td><td>2015</td><td>0</td><td>1988</td><td></td></tr>
<tr><td>9</td><td>2013</td><td>0</td><td>1850</td><td></td></tr>
<tr><td>10</td><td>2008</td><td>0</td><td>1849</td><td></td></tr>

<tr><td colspan="5"><b>Less Shots In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2012</td><td>0</td><td>1777</td><td></td></tr>
<tr><td>2</td><td>2008</td><td>0</td><td>1849</td><td></td></tr>
<tr><td>3</td><td>2013</td><td>0</td><td>1850</td><td></td></tr>
<tr><td>4</td><td>2016</td><td>0</td><td>1908</td><td></td></tr>
<tr><td>5</td><td>2015</td><td>0</td><td>1988</td><td></td></tr>
<tr><td>6</td><td>2010</td><td>0</td><td>2041</td><td></td></tr>
<tr><td>7</td><td>2014</td><td>0</td><td>2142</td><td></td></tr>
<tr><td>8</td><td>2009</td><td>0</td><td>2222</td><td></td></tr>
<tr><td>9</td><td>2018</td><td>0</td><td>2507</td><td></td></tr>
<tr><td>10</td><td>2019</td><td>0</td><td>2516</td><td></td></tr>

<tr><td colspan="5"><b>Most Shots Blocked In 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2018</td><td>1191</td><td>25</td><td></td></tr><tr><td>2</td><td>2011</td><td>547</td><td>21</td><td></td></tr><tr><td>3</td><td>2018</td><td>698</td><td>21</td><td></td></tr><tr><td>4</td><td>2008</td><td>1020</td><td>20</td><td></td></tr><tr><td>5</td><td>2013</td><td>959</td><td>20</td><td></td></tr><tr><td>6</td><td>2017</td><td>228</td><td>20</td><td></td></tr><tr><td>7</td><td>2017</td><td>364</td><td>20</td><td></td></tr><tr><td>8</td><td>2008</td><td>189</td><td>19</td><td></td></tr><tr><td>9</td><td>2008</td><td>976</td><td>19</td><td></td></tr><tr><td>10</td><td>2019</td><td>13</td><td>19</td><td><a href="OTHL-13.html">Game Direct Link</a></td></tr>
<tr><td colspan="5"><b>Most Shots Blocked In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>0</td><td>0</td><td>32000</td><td></td></tr>
<tr><td>2</td><td>0</td><td>0</td><td>32000</td><td></td></tr>

<tr><td colspan="5"><b>Less Shots Block In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2015</td><td>0</td><td>590</td><td></td></tr>
<tr><td>2</td><td>2014</td><td>0</td><td>617</td><td></td></tr>
<tr><td>3</td><td>2009</td><td>0</td><td>626</td><td></td></tr>
<tr><td>4</td><td>2010</td><td>0</td><td>665</td><td></td></tr>
<tr><td>5</td><td>2012</td><td>0</td><td>666</td><td></td></tr>
<tr><td>6</td><td>2013</td><td>0</td><td>699</td><td></td></tr>
<tr><td>7</td><td>2008</td><td>0</td><td>707</td><td></td></tr>
<tr><td>8</td><td>2011</td><td>0</td><td>748</td><td></td></tr>

<tr><td colspan="5"><b>Most Shots Against In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2019</td><td>0</td><td>2759</td><td></td></tr>
<tr><td>2</td><td>2008</td><td>0</td><td>2681</td><td></td></tr>
<tr><td>3</td><td>2017</td><td>0</td><td>2595</td><td></td></tr>
<tr><td>4</td><td>2018</td><td>0</td><td>2536</td><td></td></tr>
<tr><td>5</td><td>2016</td><td>0</td><td>2458</td><td></td></tr>
<tr><td>6</td><td>2011</td><td>0</td><td>2388</td><td></td></tr>
<tr><td>7</td><td>2012</td><td>0</td><td>2378</td><td></td></tr>
<tr><td>8</td><td>2013</td><td>0</td><td>2242</td><td></td></tr>
<tr><td>9</td><td>2010</td><td>0</td><td>2185</td><td></td></tr>
<tr><td>10</td><td>2009</td><td>0</td><td>2183</td><td></td></tr>

<tr><td colspan="5"><b>Less Shots Against In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2014</td><td>0</td><td>2161</td><td></td></tr>
<tr><td>2</td><td>2015</td><td>0</td><td>2179</td><td></td></tr>
<tr><td>3</td><td>2009</td><td>0</td><td>2183</td><td></td></tr>
<tr><td>4</td><td>2010</td><td>0</td><td>2185</td><td></td></tr>
<tr><td>5</td><td>2013</td><td>0</td><td>2242</td><td></td></tr>
<tr><td>6</td><td>2012</td><td>0</td><td>2378</td><td></td></tr>
<tr><td>7</td><td>2011</td><td>0</td><td>2388</td><td></td></tr>
<tr><td>8</td><td>2018</td><td>0</td><td>2536</td><td></td></tr>
<tr><td>9</td><td>2008</td><td>0</td><td>2681</td><td></td></tr>

<tr><td colspan="5"><b>Most Pim In 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2009</td><td>1209</td><td>42</td><td></td></tr><tr><td>2</td><td>2008</td><td>388</td><td>36</td><td></td></tr><tr><td>3</td><td>2016</td><td>1183</td><td>36</td><td></td></tr><tr><td>4</td><td>2013</td><td>460</td><td>35</td><td></td></tr><tr><td>5</td><td>2008</td><td>225</td><td>34</td><td></td></tr><tr><td>6</td><td>2008</td><td>566</td><td>34</td><td></td></tr><tr><td>7</td><td>2011</td><td>303</td><td>33</td><td></td></tr><tr><td>8</td><td>2010</td><td>231</td><td>32</td><td></td></tr><tr><td>9</td><td>2012</td><td>996</td><td>32</td><td></td></tr><tr><td>10</td><td>2011</td><td>939</td><td>31</td><td></td></tr>
<tr><td colspan="5"><b>Most Pim In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2008</td><td>0</td><td>1221</td><td></td></tr>
<tr><td>2</td><td>2011</td><td>0</td><td>1045</td><td></td></tr>
<tr><td>3</td><td>2010</td><td>0</td><td>1031</td><td></td></tr>
<tr><td>4</td><td>2009</td><td>0</td><td>1024</td><td></td></tr>
<tr><td>5</td><td>2016</td><td>0</td><td>927</td><td></td></tr>
<tr><td>6</td><td>2012</td><td>0</td><td>806</td><td></td></tr>
<tr><td>7</td><td>2018</td><td>0</td><td>756</td><td></td></tr>
<tr><td>8</td><td>2019</td><td>0</td><td>658</td><td></td></tr>

<tr><td colspan="5"><b>Less Pim In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2017</td><td>0</td><td>644</td><td></td></tr>
<tr><td>2</td><td>2019</td><td>0</td><td>658</td><td></td></tr>
<tr><td>3</td><td>2014</td><td>0</td><td>674</td><td></td></tr>
<tr><td>4</td><td>2015</td><td>0</td><td>680</td><td></td></tr>
<tr><td>5</td><td>2013</td><td>0</td><td>693</td><td></td></tr>
<tr><td>6</td><td>2018</td><td>0</td><td>756</td><td></td></tr>
<tr><td>7</td><td>2012</td><td>0</td><td>806</td><td></td></tr>
<tr><td>8</td><td>2016</td><td>0</td><td>927</td><td></td></tr>
<tr><td>9</td><td>2009</td><td>0</td><td>1024</td><td></td></tr>
<tr><td>10</td><td>2010</td><td>0</td><td>1031</td><td></td></tr>

<tr><td colspan="5"><b>Most Hits In 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2011</td><td>70</td><td>41</td><td></td></tr><tr><td>2</td><td>2011</td><td>955</td><td>41</td><td></td></tr><tr><td>3</td><td>2011</td><td>1135</td><td>40</td><td></td></tr><tr><td>4</td><td>2011</td><td>284</td><td>37</td><td></td></tr><tr><td>5</td><td>2016</td><td>665</td><td>37</td><td></td></tr><tr><td>6</td><td>2018</td><td>572</td><td>37</td><td></td></tr><tr><td>7</td><td>2011</td><td>1050</td><td>36</td><td></td></tr><tr><td>8</td><td>2011</td><td>503</td><td>35</td><td></td></tr><tr><td>9</td><td>2011</td><td>642</td><td>34</td><td></td></tr><tr><td>10</td><td>2011</td><td>719</td><td>34</td><td></td></tr>
<tr><td colspan="5"><b>Most Hits In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2011</td><td>0</td><td>2046</td><td></td></tr>
<tr><td>2</td><td>2017</td><td>0</td><td>1788</td><td></td></tr>
<tr><td>3</td><td>2019</td><td>0</td><td>1741</td><td></td></tr>
<tr><td>4</td><td>2018</td><td>0</td><td>1728</td><td></td></tr>
<tr><td>5</td><td>2016</td><td>0</td><td>1722</td><td></td></tr>
<tr><td>6</td><td>2015</td><td>0</td><td>1638</td><td></td></tr>
<tr><td>7</td><td>2013</td><td>0</td><td>1606</td><td></td></tr>
<tr><td>8</td><td>2008</td><td>0</td><td>1590</td><td></td></tr>
<tr><td>9</td><td>2014</td><td>0</td><td>1549</td><td></td></tr>
<tr><td>10</td><td>2012</td><td>0</td><td>1532</td><td></td></tr>

<tr><td colspan="5"><b>Less Hit In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2010</td><td>0</td><td>1442</td><td></td></tr>
<tr><td>2</td><td>2009</td><td>0</td><td>1465</td><td></td></tr>
<tr><td>3</td><td>2012</td><td>0</td><td>1532</td><td></td></tr>
<tr><td>4</td><td>2014</td><td>0</td><td>1549</td><td></td></tr>
<tr><td>5</td><td>2008</td><td>0</td><td>1590</td><td></td></tr>
<tr><td>6</td><td>2013</td><td>0</td><td>1606</td><td></td></tr>
<tr><td>7</td><td>2018</td><td>0</td><td>1728</td><td></td></tr>
<tr><td>8</td><td>2019</td><td>0</td><td>1741</td><td></td></tr>
<tr><td>9</td><td>2011</td><td>0</td><td>2046</td><td></td></tr>

<tr><td colspan="5"><b>Most Empty Net Goal In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2017</td><td>0</td><td>5</td><td></td></tr>
<tr><td>2</td><td>2008</td><td>0</td><td>2</td><td></td></tr>
<tr><td>3</td><td>2009</td><td>0</td><td>2</td><td></td></tr>
<tr><td>4</td><td>2010</td><td>0</td><td>2</td><td></td></tr>
<tr><td>5</td><td>2014</td><td>0</td><td>2</td><td></td></tr>
<tr><td>6</td><td>2015</td><td>0</td><td>2</td><td></td></tr>
<tr><td>7</td><td>2011</td><td>0</td><td>1</td><td></td></tr>
<tr><td>8</td><td>2012</td><td>0</td><td>1</td><td></td></tr>
<tr><td>9</td><td>2018</td><td>0</td><td>1</td><td></td></tr>
<tr><td>10</td><td>2019</td><td>0</td><td>1</td><td></td></tr>

<tr><td colspan="5"><b>Best PP In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2011</td><td>0</td><td>19.60%</td><td></td></tr>
<tr><td>2</td><td>2010</td><td>0</td><td>18.80%</td><td></td></tr>
<tr><td>3</td><td>2017</td><td>0</td><td>18.50%</td><td></td></tr>
<tr><td>4</td><td>2016</td><td>0</td><td>17.90%</td><td></td></tr>
<tr><td>5</td><td>2019</td><td>0</td><td>17.90%</td><td></td></tr>
<tr><td>6</td><td>2009</td><td>0</td><td>17.50%</td><td></td></tr>
<tr><td>7</td><td>2015</td><td>0</td><td>16.80%</td><td></td></tr>
<tr><td>8</td><td>2013</td><td>0</td><td>15.30%</td><td></td></tr>
<tr><td>9</td><td>2018</td><td>0</td><td>15.10%</td><td></td></tr>
<tr><td>10</td><td>2014</td><td>0</td><td>14.60%</td><td></td></tr>

<tr><td colspan="5"><b>Best PK In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2014</td><td>0</td><td>88.30%</td><td></td></tr>
<tr><td>2</td><td>2015</td><td>0</td><td>84.70%</td><td></td></tr>
<tr><td>3</td><td>2012</td><td>0</td><td>83.90%</td><td></td></tr>
<tr><td>4</td><td>2016</td><td>0</td><td>82.60%</td><td></td></tr>
<tr><td>5</td><td>2017</td><td>0</td><td>82.40%</td><td></td></tr>
<tr><td>6</td><td>2013</td><td>0</td><td>82.20%</td><td></td></tr>
<tr><td>7</td><td>2010</td><td>0</td><td>81.50%</td><td></td></tr>
<tr><td>8</td><td>2011</td><td>0</td><td>81.30%</td><td></td></tr>
<tr><td>9</td><td>2008</td><td>0</td><td>81.10%</td><td></td></tr>
<tr><td>10</td><td>2009</td><td>0</td><td>80.90%</td><td></td></tr>

<tr><td colspan="5"><b>Worse PP In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2012</td><td>0</td><td>12.90%</td><td></td></tr>
<tr><td>2</td><td>2008</td><td>0</td><td>13.00%</td><td></td></tr>
<tr><td>3</td><td>2014</td><td>0</td><td>14.60%</td><td></td></tr>
<tr><td>4</td><td>2018</td><td>0</td><td>15.10%</td><td></td></tr>
<tr><td>5</td><td>2013</td><td>0</td><td>15.30%</td><td></td></tr>
<tr><td>6</td><td>2015</td><td>0</td><td>16.80%</td><td></td></tr>
<tr><td>7</td><td>2009</td><td>0</td><td>17.50%</td><td></td></tr>
<tr><td>8</td><td>2019</td><td>0</td><td>17.90%</td><td></td></tr>
<tr><td>9</td><td>2010</td><td>0</td><td>18.80%</td><td></td></tr>
<tr><td>10</td><td>2011</td><td>0</td><td>19.60%</td><td></td></tr>

<tr><td colspan="5"><b>Worse PK In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2018</td><td>0</td><td>77.10%</td><td></td></tr>
<tr><td>2</td><td>2019</td><td>0</td><td>80.50%</td><td></td></tr>
<tr><td>3</td><td>2009</td><td>0</td><td>80.90%</td><td></td></tr>
<tr><td>4</td><td>2008</td><td>0</td><td>81.10%</td><td></td></tr>
<tr><td>5</td><td>2011</td><td>0</td><td>81.30%</td><td></td></tr>
<tr><td>6</td><td>2010</td><td>0</td><td>81.50%</td><td></td></tr>
<tr><td>7</td><td>2013</td><td>0</td><td>82.20%</td><td></td></tr>
<tr><td>8</td><td>2012</td><td>0</td><td>83.90%</td><td></td></tr>

<tr><td colspan="5"><b>Most Win In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2009</td><td>0</td><td>45</td><td></td></tr>
<tr><td>2</td><td>2014</td><td>0</td><td>44</td><td></td></tr>
<tr><td>3</td><td>2011</td><td>0</td><td>41</td><td></td></tr>
<tr><td>4</td><td>2018</td><td>0</td><td>41</td><td></td></tr>
<tr><td>5</td><td>2019</td><td>0</td><td>41</td><td></td></tr>
<tr><td>6</td><td>2016</td><td>0</td><td>40</td><td></td></tr>
<tr><td>7</td><td>2017</td><td>0</td><td>39</td><td></td></tr>
<tr><td>8</td><td>2010</td><td>0</td><td>36</td><td></td></tr>
<tr><td>9</td><td>2012</td><td>0</td><td>33</td><td></td></tr>
<tr><td>10</td><td>2013</td><td>0</td><td>27</td><td></td></tr>

<tr><td colspan="5"><b>Less Win In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2008</td><td>0</td><td>18</td><td></td></tr>
<tr><td>2</td><td>2013</td><td>0</td><td>27</td><td></td></tr>
<tr><td>3</td><td>2015</td><td>0</td><td>32</td><td></td></tr>
<tr><td>4</td><td>2012</td><td>0</td><td>33</td><td></td></tr>
<tr><td>5</td><td>2010</td><td>0</td><td>36</td><td></td></tr>
<tr><td>6</td><td>2011</td><td>0</td><td>41</td><td></td></tr>
<tr><td>7</td><td>2018</td><td>0</td><td>41</td><td></td></tr>
<tr><td>8</td><td>2019</td><td>0</td><td>41</td><td></td></tr>
<tr><td>9</td><td>2009</td><td>0</td><td>45</td><td></td></tr>

<tr><td colspan="5"><b>Most Lost In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2013</td><td>0</td><td>55</td><td></td></tr>
<tr><td>2</td><td>2015</td><td>0</td><td>50</td><td></td></tr>
<tr><td>3</td><td>2012</td><td>0</td><td>49</td><td></td></tr>
<tr><td>4</td><td>2008</td><td>0</td><td>46</td><td></td></tr>
<tr><td>5</td><td>2010</td><td>0</td><td>46</td><td></td></tr>
<tr><td>6</td><td>2011</td><td>0</td><td>41</td><td></td></tr>
<tr><td>7</td><td>2018</td><td>0</td><td>41</td><td></td></tr>
<tr><td>8</td><td>2019</td><td>0</td><td>41</td><td></td></tr>
<tr><td>9</td><td>2009</td><td>0</td><td>37</td><td></td></tr>

<tr><td colspan="5"><b>Less Lost In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2009</td><td>0</td><td>37</td><td></td></tr>
<tr><td>2</td><td>2014</td><td>0</td><td>38</td><td></td></tr>
<tr><td>3</td><td>2011</td><td>0</td><td>41</td><td></td></tr>
<tr><td>4</td><td>2018</td><td>0</td><td>41</td><td></td></tr>
<tr><td>5</td><td>2019</td><td>0</td><td>41</td><td></td></tr>
<tr><td>6</td><td>2016</td><td>0</td><td>42</td><td></td></tr>
<tr><td>7</td><td>2017</td><td>0</td><td>43</td><td></td></tr>
<tr><td>8</td><td>2008</td><td>0</td><td>46</td><td></td></tr>
<tr><td>9</td><td>2010</td><td>0</td><td>46</td><td></td></tr>
<tr><td>10</td><td>2012</td><td>0</td><td>49</td><td></td></tr>

<tr><td colspan="5"><b>Most Point In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2014</td><td>0</td><td>97</td><td></td></tr>
<tr><td>2</td><td>2009</td><td>0</td><td>96</td><td></td></tr>
<tr><td>3</td><td>2011</td><td>0</td><td>96</td><td></td></tr>
<tr><td>4</td><td>2018</td><td>0</td><td>88</td><td></td></tr>
<tr><td>5</td><td>2019</td><td>0</td><td>88</td><td></td></tr>
<tr><td>6</td><td>2016</td><td>0</td><td>86</td><td></td></tr>
<tr><td>7</td><td>2017</td><td>0</td><td>86</td><td></td></tr>
<tr><td>8</td><td>2010</td><td>0</td><td>82</td><td></td></tr>
<tr><td>9</td><td>2015</td><td>0</td><td>78</td><td></td></tr>
<tr><td>10</td><td>2012</td><td>0</td><td>72</td><td></td></tr>

<tr><td colspan="5"><b>Less Points In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2008</td><td>0</td><td>61</td><td></td></tr>
<tr><td>2</td><td>2012</td><td>0</td><td>72</td><td></td></tr>
<tr><td>3</td><td>2013</td><td>0</td><td>72</td><td></td></tr>
<tr><td>4</td><td>2015</td><td>0</td><td>78</td><td></td></tr>
<tr><td>5</td><td>2010</td><td>0</td><td>82</td><td></td></tr>
<tr><td>6</td><td>2018</td><td>0</td><td>88</td><td></td></tr>
<tr><td>7</td><td>2019</td><td>0</td><td>88</td><td></td></tr>
<tr><td>8</td><td>2009</td><td>0</td><td>96</td><td></td></tr>
<tr><td>9</td><td>2011</td><td>0</td><td>96</td><td></td></tr>

<tr><td colspan="5"><b>Most Win Home In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>0</td><td>0</td><td>32000</td><td></td></tr>
<tr><td>2</td><td>0</td><td>0</td><td>32000</td><td></td></tr>

<tr><td colspan="5"><b>Most Win Visitor In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>0</td><td>0</td><td>32000</td><td></td></tr>
<tr><td>2</td><td>0</td><td>0</td><td>32000</td><td></td></tr>

</table></div>
<h1 class="TeamRecordsPro_STL"><a id="Blues">Blues</a></h1>
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
<br /><table class="STHSRecordTable">
<tr><td colspan="5"><b>Most Goals in 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2008</td><td>683</td><td>8</td><td></td></tr><tr><td>2</td><td>2008</td><td>93</td><td>7</td><td></td></tr><tr><td>3</td><td>2008</td><td>488</td><td>7</td><td></td></tr><tr><td>4</td><td>2008</td><td>609</td><td>7</td><td></td></tr><tr><td>5</td><td>2009</td><td>618</td><td>7</td><td></td></tr><tr><td>6</td><td>2012</td><td>406</td><td>7</td><td></td></tr><tr><td>7</td><td>2012</td><td>954</td><td>7</td><td></td></tr><tr><td>8</td><td>2012</td><td>988</td><td>7</td><td></td></tr><tr><td>9</td><td>2014</td><td>352</td><td>7</td><td></td></tr><tr><td>10</td><td>2014</td><td>602</td><td>7</td><td></td></tr>
<tr><td colspan="5"><b>Most Goals in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2008</td><td>0</td><td>301</td><td></td></tr>
<tr><td>2</td><td>2014</td><td>0</td><td>265</td><td></td></tr>
<tr><td>3</td><td>2010</td><td>0</td><td>256</td><td></td></tr>
<tr><td>4</td><td>2012</td><td>0</td><td>253</td><td></td></tr>
<tr><td>5</td><td>2016</td><td>0</td><td>237</td><td></td></tr>
<tr><td>6</td><td>2009</td><td>0</td><td>231</td><td></td></tr>
<tr><td>7</td><td>2011</td><td>0</td><td>228</td><td></td></tr>
<tr><td>8</td><td>2019</td><td>0</td><td>206</td><td></td></tr>
<tr><td>9</td><td>2018</td><td>0</td><td>196</td><td></td></tr>

<tr><td colspan="5"><b>Less Goal in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2017</td><td>0</td><td>190</td><td></td></tr>
<tr><td>2</td><td>2018</td><td>0</td><td>196</td><td></td></tr>
<tr><td>3</td><td>2015</td><td>0</td><td>201</td><td></td></tr>
<tr><td>4</td><td>2019</td><td>0</td><td>206</td><td></td></tr>
<tr><td>5</td><td>2013</td><td>0</td><td>210</td><td></td></tr>
<tr><td>6</td><td>2011</td><td>0</td><td>228</td><td></td></tr>
<tr><td>7</td><td>2009</td><td>0</td><td>231</td><td></td></tr>
<tr><td>8</td><td>2016</td><td>0</td><td>237</td><td></td></tr>
<tr><td>9</td><td>2012</td><td>0</td><td>253</td><td></td></tr>
<tr><td>10</td><td>2010</td><td>0</td><td>256</td><td></td></tr>

<tr><td colspan="5"><b>Most Goals Against in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2018</td><td>0</td><td>292</td><td></td></tr>
<tr><td>2</td><td>2019</td><td>0</td><td>284</td><td></td></tr>
<tr><td>3</td><td>2009</td><td>0</td><td>267</td><td></td></tr>
<tr><td>4</td><td>2017</td><td>0</td><td>236</td><td></td></tr>
<tr><td>5</td><td>2016</td><td>0</td><td>230</td><td></td></tr>
<tr><td>6</td><td>2012</td><td>0</td><td>224</td><td></td></tr>
<tr><td>7</td><td>2010</td><td>0</td><td>214</td><td></td></tr>
<tr><td>8</td><td>2011</td><td>0</td><td>210</td><td></td></tr>
<tr><td>9</td><td>2015</td><td>0</td><td>209</td><td></td></tr>
<tr><td>10</td><td>2014</td><td>0</td><td>205</td><td></td></tr>

<tr><td colspan="5"><b>Less Goal Against in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2013</td><td>0</td><td>199</td><td></td></tr>
<tr><td>2</td><td>2008</td><td>0</td><td>201</td><td></td></tr>
<tr><td>3</td><td>2014</td><td>0</td><td>205</td><td></td></tr>
<tr><td>4</td><td>2015</td><td>0</td><td>209</td><td></td></tr>
<tr><td>5</td><td>2011</td><td>0</td><td>210</td><td></td></tr>
<tr><td>6</td><td>2010</td><td>0</td><td>214</td><td></td></tr>
<tr><td>7</td><td>2012</td><td>0</td><td>224</td><td></td></tr>
<tr><td>8</td><td>2009</td><td>0</td><td>267</td><td></td></tr>

<tr><td colspan="5"><b>Most Assists in 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2008</td><td>683</td><td>14</td><td></td></tr><tr><td>2</td><td>2017</td><td>590</td><td>14</td><td></td></tr><tr><td>3</td><td>2008</td><td>609</td><td>13</td><td></td></tr><tr><td>4</td><td>2010</td><td>488</td><td>13</td><td></td></tr><tr><td>5</td><td>2010</td><td>1202</td><td>13</td><td></td></tr><tr><td>6</td><td>2012</td><td>406</td><td>13</td><td></td></tr><tr><td>7</td><td>2014</td><td>352</td><td>13</td><td></td></tr><tr><td>8</td><td>2014</td><td>602</td><td>13</td><td></td></tr><tr><td>9</td><td>2016</td><td>2</td><td>13</td><td></td></tr><tr><td>10</td><td>2008</td><td>14</td><td>12</td><td></td></tr>
<tr><td colspan="5"><b>Most Assists in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2008</td><td>0</td><td>535</td><td></td></tr>
<tr><td>2</td><td>2014</td><td>0</td><td>467</td><td></td></tr>
<tr><td>3</td><td>2010</td><td>0</td><td>445</td><td></td></tr>
<tr><td>4</td><td>2012</td><td>0</td><td>433</td><td></td></tr>
<tr><td>5</td><td>2009</td><td>0</td><td>418</td><td></td></tr>
<tr><td>6</td><td>2019</td><td>0</td><td>375</td><td></td></tr>
<tr><td>7</td><td>2011</td><td>0</td><td>374</td><td></td></tr>
<tr><td>8</td><td>2018</td><td>0</td><td>330</td><td></td></tr>

<tr><td colspan="5"><b>Less Assist in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2017</td><td>0</td><td>324</td><td></td></tr>
<tr><td>2</td><td>2018</td><td>0</td><td>330</td><td></td></tr>
<tr><td>3</td><td>2015</td><td>0</td><td>347</td><td></td></tr>
<tr><td>4</td><td>2013</td><td>0</td><td>361</td><td></td></tr>
<tr><td>5</td><td>2011</td><td>0</td><td>374</td><td></td></tr>
<tr><td>6</td><td>2019</td><td>0</td><td>375</td><td></td></tr>
<tr><td>7</td><td>2016</td><td>0</td><td>410</td><td></td></tr>
<tr><td>8</td><td>2009</td><td>0</td><td>418</td><td></td></tr>
<tr><td>9</td><td>2012</td><td>0</td><td>433</td><td></td></tr>
<tr><td>10</td><td>2010</td><td>0</td><td>445</td><td></td></tr>

<tr><td colspan="5"><b>Most Game Points in 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2008</td><td>683</td><td>22</td><td></td></tr><tr><td>2</td><td>2017</td><td>590</td><td>21</td><td></td></tr><tr><td>3</td><td>2008</td><td>609</td><td>20</td><td></td></tr><tr><td>4</td><td>2010</td><td>488</td><td>20</td><td></td></tr><tr><td>5</td><td>2010</td><td>1202</td><td>20</td><td></td></tr><tr><td>6</td><td>2012</td><td>406</td><td>20</td><td></td></tr><tr><td>7</td><td>2014</td><td>352</td><td>20</td><td></td></tr><tr><td>8</td><td>2014</td><td>602</td><td>20</td><td></td></tr><tr><td>9</td><td>2016</td><td>2</td><td>20</td><td></td></tr><tr><td>10</td><td>2008</td><td>93</td><td>19</td><td></td></tr>
<tr><td colspan="5"><b>Most Game Points in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>0</td><td>0</td><td>32000</td><td></td></tr>
<tr><td>2</td><td>0</td><td>0</td><td>32000</td><td></td></tr>

<tr><td colspan="5"><b>Less Game Point In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2017</td><td>0</td><td>514</td><td></td></tr>
<tr><td>2</td><td>2018</td><td>0</td><td>526</td><td></td></tr>
<tr><td>3</td><td>2015</td><td>0</td><td>548</td><td></td></tr>
<tr><td>4</td><td>2013</td><td>0</td><td>571</td><td></td></tr>
<tr><td>5</td><td>2019</td><td>0</td><td>581</td><td></td></tr>
<tr><td>6</td><td>2011</td><td>0</td><td>602</td><td></td></tr>
<tr><td>7</td><td>2016</td><td>0</td><td>647</td><td></td></tr>
<tr><td>8</td><td>2009</td><td>0</td><td>649</td><td></td></tr>
<tr><td>9</td><td>2012</td><td>0</td><td>686</td><td></td></tr>
<tr><td>10</td><td>2010</td><td>0</td><td>701</td><td></td></tr>

<tr><td colspan="5"><b>Most Shots In 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2008</td><td>29</td><td>64</td><td></td></tr><tr><td>2</td><td>2016</td><td>29</td><td>53</td><td></td></tr><tr><td>3</td><td>2008</td><td>769</td><td>51</td><td></td></tr><tr><td>4</td><td>2013</td><td>742</td><td>51</td><td></td></tr><tr><td>5</td><td>2008</td><td>16</td><td>50</td><td></td></tr><tr><td>6</td><td>2008</td><td>807</td><td>49</td><td></td></tr><tr><td>7</td><td>2014</td><td>914</td><td>49</td><td></td></tr><tr><td>8</td><td>2014</td><td>771</td><td>48</td><td></td></tr><tr><td>9</td><td>2010</td><td>811</td><td>47</td><td></td></tr><tr><td>10</td><td>2012</td><td>922</td><td>47</td><td></td></tr>
<tr><td colspan="5"><b>Most Shots In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2008</td><td>0</td><td>2679</td><td></td></tr>
<tr><td>2</td><td>2014</td><td>0</td><td>2581</td><td></td></tr>
<tr><td>3</td><td>2013</td><td>0</td><td>2351</td><td></td></tr>
<tr><td>4</td><td>2012</td><td>0</td><td>2337</td><td></td></tr>
<tr><td>5</td><td>2010</td><td>0</td><td>2305</td><td></td></tr>
<tr><td>6</td><td>2018</td><td>0</td><td>2305</td><td></td></tr>
<tr><td>7</td><td>2019</td><td>0</td><td>2293</td><td></td></tr>
<tr><td>8</td><td>2011</td><td>0</td><td>2283</td><td></td></tr>
<tr><td>9</td><td>2009</td><td>0</td><td>2175</td><td></td></tr>

<tr><td colspan="5"><b>Less Shots In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2016</td><td>0</td><td>2128</td><td></td></tr>
<tr><td>2</td><td>2009</td><td>0</td><td>2175</td><td></td></tr>
<tr><td>3</td><td>2015</td><td>0</td><td>2196</td><td></td></tr>
<tr><td>4</td><td>2017</td><td>0</td><td>2207</td><td></td></tr>
<tr><td>5</td><td>2011</td><td>0</td><td>2283</td><td></td></tr>
<tr><td>6</td><td>2019</td><td>0</td><td>2293</td><td></td></tr>
<tr><td>7</td><td>2010</td><td>0</td><td>2305</td><td></td></tr>
<tr><td>8</td><td>2018</td><td>0</td><td>2305</td><td></td></tr>
<tr><td>9</td><td>2012</td><td>0</td><td>2337</td><td></td></tr>
<tr><td>10</td><td>2013</td><td>0</td><td>2351</td><td></td></tr>

<tr><td colspan="5"><b>Most Shots Blocked In 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2018</td><td>1207</td><td>22</td><td></td></tr><tr><td>2</td><td>2018</td><td>1240</td><td>22</td><td></td></tr><tr><td>3</td><td>2008</td><td>455</td><td>21</td><td></td></tr><tr><td>4</td><td>2011</td><td>1101</td><td>21</td><td></td></tr><tr><td>5</td><td>2012</td><td>979</td><td>20</td><td></td></tr><tr><td>6</td><td>2017</td><td>397</td><td>20</td><td></td></tr><tr><td>7</td><td>2018</td><td>929</td><td>20</td><td></td></tr><tr><td>8</td><td>2018</td><td>1057</td><td>20</td><td></td></tr><tr><td>9</td><td>2019</td><td>1076</td><td>20</td><td><a href="OTHL-1076.html">Game Direct Link</a></td></tr><tr><td>10</td><td>2011</td><td>776</td><td>19</td><td></td></tr>
<tr><td colspan="5"><b>Most Shots Blocked In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>0</td><td>0</td><td>32000</td><td></td></tr>
<tr><td>2</td><td>0</td><td>0</td><td>32000</td><td></td></tr>

<tr><td colspan="5"><b>Less Shots Block In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2015</td><td>0</td><td>549</td><td></td></tr>
<tr><td>2</td><td>2013</td><td>0</td><td>550</td><td></td></tr>
<tr><td>3</td><td>2010</td><td>0</td><td>556</td><td></td></tr>
<tr><td>4</td><td>2016</td><td>0</td><td>588</td><td></td></tr>
<tr><td>5</td><td>2008</td><td>0</td><td>589</td><td></td></tr>
<tr><td>6</td><td>2014</td><td>0</td><td>594</td><td></td></tr>
<tr><td>7</td><td>2012</td><td>0</td><td>618</td><td></td></tr>
<tr><td>8</td><td>2009</td><td>0</td><td>656</td><td></td></tr>
<tr><td>9</td><td>2011</td><td>0</td><td>727</td><td></td></tr>

<tr><td colspan="5"><b>Most Shots Against In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2018</td><td>0</td><td>3012</td><td></td></tr>
<tr><td>2</td><td>2019</td><td>0</td><td>2820</td><td></td></tr>
<tr><td>3</td><td>2017</td><td>0</td><td>2598</td><td></td></tr>
<tr><td>4</td><td>2011</td><td>0</td><td>2468</td><td></td></tr>
<tr><td>5</td><td>2009</td><td>0</td><td>2288</td><td></td></tr>
<tr><td>6</td><td>2016</td><td>0</td><td>2113</td><td></td></tr>
<tr><td>7</td><td>2014</td><td>0</td><td>2042</td><td></td></tr>
<tr><td>8</td><td>2013</td><td>0</td><td>2036</td><td></td></tr>
<tr><td>9</td><td>2008</td><td>0</td><td>2013</td><td></td></tr>
<tr><td>10</td><td>2012</td><td>0</td><td>1998</td><td></td></tr>

<tr><td colspan="5"><b>Less Shots Against In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2010</td><td>0</td><td>1896</td><td></td></tr>
<tr><td>2</td><td>2015</td><td>0</td><td>1982</td><td></td></tr>
<tr><td>3</td><td>2012</td><td>0</td><td>1998</td><td></td></tr>
<tr><td>4</td><td>2008</td><td>0</td><td>2013</td><td></td></tr>
<tr><td>5</td><td>2013</td><td>0</td><td>2036</td><td></td></tr>
<tr><td>6</td><td>2014</td><td>0</td><td>2042</td><td></td></tr>
<tr><td>7</td><td>2009</td><td>0</td><td>2288</td><td></td></tr>
<tr><td>8</td><td>2011</td><td>0</td><td>2468</td><td></td></tr>

<tr><td colspan="5"><b>Most Pim In 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2009</td><td>11</td><td>57</td><td></td></tr><tr><td>2</td><td>2014</td><td>1059</td><td>56</td><td></td></tr><tr><td>3</td><td>2008</td><td>1057</td><td>45</td><td></td></tr><tr><td>4</td><td>2010</td><td>296</td><td>44</td><td></td></tr><tr><td>5</td><td>2016</td><td>1009</td><td>41</td><td></td></tr><tr><td>6</td><td>2009</td><td>6</td><td>38</td><td></td></tr><tr><td>7</td><td>2015</td><td>44</td><td>37</td><td></td></tr><tr><td>8</td><td>2016</td><td>368</td><td>37</td><td></td></tr><tr><td>9</td><td>2010</td><td>1052</td><td>36</td><td></td></tr><tr><td>10</td><td>2015</td><td>440</td><td>34</td><td></td></tr>
<tr><td colspan="5"><b>Most Pim In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2008</td><td>0</td><td>1146</td><td></td></tr>
<tr><td>2</td><td>2009</td><td>0</td><td>1004</td><td></td></tr>
<tr><td>3</td><td>2016</td><td>0</td><td>958</td><td></td></tr>
<tr><td>4</td><td>2010</td><td>0</td><td>945</td><td></td></tr>
<tr><td>5</td><td>2015</td><td>0</td><td>734</td><td></td></tr>
<tr><td>6</td><td>2018</td><td>0</td><td>719</td><td></td></tr>
<tr><td>7</td><td>2019</td><td>0</td><td>691</td><td></td></tr>
<tr><td>8</td><td>2012</td><td>0</td><td>585</td><td></td></tr>
<tr><td>9</td><td>2014</td><td>0</td><td>540</td><td></td></tr>
<tr><td>10</td><td>2013</td><td>0</td><td>539</td><td></td></tr>

<tr><td colspan="5"><b>Less Pim In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2011</td><td>0</td><td>516</td><td></td></tr>
<tr><td>2</td><td>2013</td><td>0</td><td>539</td><td></td></tr>
<tr><td>3</td><td>2014</td><td>0</td><td>540</td><td></td></tr>
<tr><td>4</td><td>2012</td><td>0</td><td>585</td><td></td></tr>
<tr><td>5</td><td>2017</td><td>0</td><td>654</td><td></td></tr>
<tr><td>6</td><td>2019</td><td>0</td><td>691</td><td></td></tr>
<tr><td>7</td><td>2018</td><td>0</td><td>719</td><td></td></tr>
<tr><td>8</td><td>2015</td><td>0</td><td>734</td><td></td></tr>
<tr><td>9</td><td>2010</td><td>0</td><td>945</td><td></td></tr>
<tr><td>10</td><td>2009</td><td>0</td><td>1004</td><td></td></tr>

<tr><td colspan="5"><b>Most Hits In 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2018</td><td>143</td><td>38</td><td></td></tr><tr><td>2</td><td>2011</td><td>802</td><td>34</td><td></td></tr><tr><td>3</td><td>2008</td><td>565</td><td>33</td><td></td></tr><tr><td>4</td><td>2011</td><td>669</td><td>33</td><td></td></tr><tr><td>5</td><td>2016</td><td>1054</td><td>33</td><td></td></tr><tr><td>6</td><td>2011</td><td>253</td><td>32</td><td></td></tr><tr><td>7</td><td>2013</td><td>108</td><td>32</td><td></td></tr><tr><td>8</td><td>2019</td><td>1023</td><td>32</td><td><a href="OTHL-1023.html">Game Direct Link</a></td></tr><tr><td>9</td><td>2014</td><td>145</td><td>31</td><td></td></tr><tr><td>10</td><td>2016</td><td>580</td><td>31</td><td></td></tr>
<tr><td colspan="5"><b>Most Hits In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2011</td><td>0</td><td>1903</td><td></td></tr>
<tr><td>2</td><td>2019</td><td>0</td><td>1819</td><td></td></tr>
<tr><td>3</td><td>2018</td><td>0</td><td>1746</td><td></td></tr>
<tr><td>4</td><td>2016</td><td>0</td><td>1632</td><td></td></tr>
<tr><td>5</td><td>2017</td><td>0</td><td>1625</td><td></td></tr>
<tr><td>6</td><td>2015</td><td>0</td><td>1476</td><td></td></tr>
<tr><td>7</td><td>2008</td><td>0</td><td>1451</td><td></td></tr>
<tr><td>8</td><td>2014</td><td>0</td><td>1431</td><td></td></tr>
<tr><td>9</td><td>2012</td><td>0</td><td>1390</td><td></td></tr>
<tr><td>10</td><td>2013</td><td>0</td><td>1371</td><td></td></tr>

<tr><td colspan="5"><b>Less Hit In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2009</td><td>0</td><td>1263</td><td></td></tr>
<tr><td>2</td><td>2010</td><td>0</td><td>1364</td><td></td></tr>
<tr><td>3</td><td>2013</td><td>0</td><td>1371</td><td></td></tr>
<tr><td>4</td><td>2012</td><td>0</td><td>1390</td><td></td></tr>
<tr><td>5</td><td>2014</td><td>0</td><td>1431</td><td></td></tr>
<tr><td>6</td><td>2008</td><td>0</td><td>1451</td><td></td></tr>
<tr><td>7</td><td>2018</td><td>0</td><td>1746</td><td></td></tr>
<tr><td>8</td><td>2019</td><td>0</td><td>1819</td><td></td></tr>
<tr><td>9</td><td>2011</td><td>0</td><td>1903</td><td></td></tr>

<tr><td colspan="5"><b>Most Empty Net Goal In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2018</td><td>0</td><td>4</td><td></td></tr>
<tr><td>2</td><td>2019</td><td>0</td><td>4</td><td></td></tr>
<tr><td>3</td><td>2009</td><td>0</td><td>3</td><td></td></tr>
<tr><td>4</td><td>2010</td><td>0</td><td>3</td><td></td></tr>
<tr><td>5</td><td>2011</td><td>0</td><td>2</td><td></td></tr>
<tr><td>6</td><td>2008</td><td>0</td><td>1</td><td></td></tr>
<tr><td>7</td><td>2012</td><td>0</td><td>1</td><td></td></tr>

<tr><td colspan="5"><b>Best PP In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2010</td><td>0</td><td>20.30%</td><td></td></tr>
<tr><td>2</td><td>2008</td><td>0</td><td>19.10%</td><td></td></tr>
<tr><td>3</td><td>2009</td><td>0</td><td>19.00%</td><td></td></tr>
<tr><td>4</td><td>2011</td><td>0</td><td>18.80%</td><td></td></tr>
<tr><td>5</td><td>2016</td><td>0</td><td>18.50%</td><td></td></tr>
<tr><td>6</td><td>2012</td><td>0</td><td>17.90%</td><td></td></tr>
<tr><td>7</td><td>2019</td><td>0</td><td>15.20%</td><td></td></tr>
<tr><td>8</td><td>2018</td><td>0</td><td>14.80%</td><td></td></tr>

<tr><td colspan="5"><b>Best PK In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2013</td><td>0</td><td>88.40%</td><td></td></tr>
<tr><td>2</td><td>2008</td><td>0</td><td>86.30%</td><td></td></tr>
<tr><td>3</td><td>2016</td><td>0</td><td>86.20%</td><td></td></tr>
<tr><td>4</td><td>2015</td><td>0</td><td>85.20%</td><td></td></tr>
<tr><td>5</td><td>2017</td><td>0</td><td>84.10%</td><td></td></tr>
<tr><td>6</td><td>2014</td><td>0</td><td>83.70%</td><td></td></tr>
<tr><td>7</td><td>2010</td><td>0</td><td>82.60%</td><td></td></tr>
<tr><td>8</td><td>2012</td><td>0</td><td>81.90%</td><td></td></tr>
<tr><td>9</td><td>2011</td><td>0</td><td>81.50%</td><td></td></tr>
<tr><td>10</td><td>2009</td><td>0</td><td>79.20%</td><td></td></tr>

<tr><td colspan="5"><b>Worse PP In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2017</td><td>0</td><td>8.90%</td><td></td></tr>
<tr><td>2</td><td>2013</td><td>0</td><td>11.80%</td><td></td></tr>
<tr><td>3</td><td>2014</td><td>0</td><td>14.20%</td><td></td></tr>
<tr><td>4</td><td>2018</td><td>0</td><td>14.80%</td><td></td></tr>
<tr><td>5</td><td>2019</td><td>0</td><td>15.20%</td><td></td></tr>
<tr><td>6</td><td>2015</td><td>0</td><td>16.30%</td><td></td></tr>
<tr><td>7</td><td>2012</td><td>0</td><td>17.90%</td><td></td></tr>
<tr><td>8</td><td>2016</td><td>0</td><td>18.50%</td><td></td></tr>
<tr><td>9</td><td>2011</td><td>0</td><td>18.80%</td><td></td></tr>
<tr><td>10</td><td>2009</td><td>0</td><td>19.00%</td><td></td></tr>

<tr><td colspan="5"><b>Worse PK In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2018</td><td>0</td><td>75.30%</td><td></td></tr>
<tr><td>2</td><td>2019</td><td>0</td><td>79.00%</td><td></td></tr>
<tr><td>3</td><td>2009</td><td>0</td><td>79.20%</td><td></td></tr>
<tr><td>4</td><td>2011</td><td>0</td><td>81.50%</td><td></td></tr>
<tr><td>5</td><td>2012</td><td>0</td><td>81.90%</td><td></td></tr>
<tr><td>6</td><td>2010</td><td>0</td><td>82.60%</td><td></td></tr>
<tr><td>7</td><td>2014</td><td>0</td><td>83.70%</td><td></td></tr>
<tr><td>8</td><td>2008</td><td>0</td><td>86.30%</td><td></td></tr>

<tr><td colspan="5"><b>Most Win In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2014</td><td>0</td><td>55</td><td></td></tr>
<tr><td>2</td><td>2008</td><td>0</td><td>51</td><td></td></tr>
<tr><td>3</td><td>2010</td><td>0</td><td>48</td><td></td></tr>
<tr><td>4</td><td>2012</td><td>0</td><td>48</td><td></td></tr>
<tr><td>5</td><td>2013</td><td>0</td><td>45</td><td></td></tr>
<tr><td>6</td><td>2011</td><td>0</td><td>43</td><td></td></tr>
<tr><td>7</td><td>2009</td><td>0</td><td>37</td><td></td></tr>
<tr><td>8</td><td>2018</td><td>0</td><td>25</td><td></td></tr>
<tr><td>9</td><td>2019</td><td>0</td><td>24</td><td></td></tr>

<tr><td colspan="5"><b>Less Win In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2019</td><td>0</td><td>24</td><td></td></tr>
<tr><td>2</td><td>2018</td><td>0</td><td>25</td><td></td></tr>
<tr><td>3</td><td>2009</td><td>0</td><td>37</td><td></td></tr>
<tr><td>4</td><td>2017</td><td>0</td><td>37</td><td></td></tr>
<tr><td>5</td><td>2015</td><td>0</td><td>38</td><td></td></tr>
<tr><td>6</td><td>2011</td><td>0</td><td>43</td><td></td></tr>
<tr><td>7</td><td>2016</td><td>0</td><td>43</td><td></td></tr>
<tr><td>8</td><td>2013</td><td>0</td><td>45</td><td></td></tr>
<tr><td>9</td><td>2010</td><td>0</td><td>48</td><td></td></tr>
<tr><td>10</td><td>2012</td><td>0</td><td>48</td><td></td></tr>

<tr><td colspan="5"><b>Most Lost In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2019</td><td>0</td><td>58</td><td></td></tr>
<tr><td>2</td><td>2018</td><td>0</td><td>57</td><td></td></tr>
<tr><td>3</td><td>2009</td><td>0</td><td>45</td><td></td></tr>
<tr><td>4</td><td>2017</td><td>0</td><td>45</td><td></td></tr>
<tr><td>5</td><td>2015</td><td>0</td><td>44</td><td></td></tr>
<tr><td>6</td><td>2011</td><td>0</td><td>39</td><td></td></tr>
<tr><td>7</td><td>2016</td><td>0</td><td>39</td><td></td></tr>
<tr><td>8</td><td>2013</td><td>0</td><td>37</td><td></td></tr>
<tr><td>9</td><td>2010</td><td>0</td><td>34</td><td></td></tr>
<tr><td>10</td><td>2012</td><td>0</td><td>34</td><td></td></tr>

<tr><td colspan="5"><b>Less Lost In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2008</td><td>0</td><td>21</td><td></td></tr>
<tr><td>2</td><td>2014</td><td>0</td><td>27</td><td></td></tr>
<tr><td>3</td><td>2010</td><td>0</td><td>34</td><td></td></tr>
<tr><td>4</td><td>2012</td><td>0</td><td>34</td><td></td></tr>
<tr><td>5</td><td>2013</td><td>0</td><td>37</td><td></td></tr>
<tr><td>6</td><td>2011</td><td>0</td><td>39</td><td></td></tr>
<tr><td>7</td><td>2009</td><td>0</td><td>45</td><td></td></tr>

<tr><td colspan="5"><b>Most Point In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2008</td><td>0</td><td>119</td><td></td></tr>
<tr><td>2</td><td>2014</td><td>0</td><td>117</td><td></td></tr>
<tr><td>3</td><td>2012</td><td>0</td><td>104</td><td></td></tr>
<tr><td>4</td><td>2010</td><td>0</td><td>101</td><td></td></tr>
<tr><td>5</td><td>2011</td><td>0</td><td>98</td><td></td></tr>
<tr><td>6</td><td>2013</td><td>0</td><td>97</td><td></td></tr>
<tr><td>7</td><td>2009</td><td>0</td><td>80</td><td></td></tr>
<tr><td>8</td><td>2019</td><td>0</td><td>59</td><td></td></tr>
<tr><td>9</td><td>2018</td><td>0</td><td>57</td><td></td></tr>

<tr><td colspan="5"><b>Less Points In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2018</td><td>0</td><td>57</td><td></td></tr>
<tr><td>2</td><td>2019</td><td>0</td><td>59</td><td></td></tr>
<tr><td>3</td><td>2017</td><td>0</td><td>79</td><td></td></tr>
<tr><td>4</td><td>2009</td><td>0</td><td>80</td><td></td></tr>
<tr><td>5</td><td>2015</td><td>0</td><td>86</td><td></td></tr>
<tr><td>6</td><td>2016</td><td>0</td><td>96</td><td></td></tr>
<tr><td>7</td><td>2013</td><td>0</td><td>97</td><td></td></tr>
<tr><td>8</td><td>2011</td><td>0</td><td>98</td><td></td></tr>
<tr><td>9</td><td>2010</td><td>0</td><td>101</td><td></td></tr>
<tr><td>10</td><td>2012</td><td>0</td><td>104</td><td></td></tr>

<tr><td colspan="5"><b>Most Win Home In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>0</td><td>0</td><td>32000</td><td></td></tr>
<tr><td>2</td><td>0</td><td>0</td><td>32000</td><td></td></tr>

<tr><td colspan="5"><b>Most Win Visitor In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>0</td><td>0</td><td>32000</td><td></td></tr>
<tr><td>2</td><td>0</td><td>0</td><td>32000</td><td></td></tr>

</table></div>
<h1 class="TeamRecordsPro_BOS"><a id="Bruins">Bruins</a></h1>
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
<br /><table class="STHSRecordTable">
<tr><td colspan="5"><b>Most Goals in 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2008</td><td>926</td><td>7</td><td></td></tr><tr><td>2</td><td>2009</td><td>827</td><td>7</td><td></td></tr><tr><td>3</td><td>2010</td><td>375</td><td>7</td><td></td></tr><tr><td>4</td><td>2012</td><td>48</td><td>7</td><td></td></tr><tr><td>5</td><td>2013</td><td>989</td><td>7</td><td></td></tr><tr><td>6</td><td>2014</td><td>928</td><td>7</td><td></td></tr><tr><td>7</td><td>2015</td><td>371</td><td>7</td><td></td></tr><tr><td>8</td><td>2016</td><td>549</td><td>7</td><td></td></tr><tr><td>9</td><td>2016</td><td>913</td><td>7</td><td></td></tr><tr><td>10</td><td>2016</td><td>1158</td><td>7</td><td></td></tr>
<tr><td colspan="5"><b>Most Goals in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2016</td><td>0</td><td>278</td><td></td></tr>
<tr><td>2</td><td>2019</td><td>0</td><td>259</td><td></td></tr>
<tr><td>3</td><td>2018</td><td>0</td><td>258</td><td></td></tr>
<tr><td>4</td><td>2010</td><td>0</td><td>252</td><td></td></tr>
<tr><td>5</td><td>2017</td><td>0</td><td>250</td><td></td></tr>
<tr><td>6</td><td>2015</td><td>0</td><td>247</td><td></td></tr>
<tr><td>7</td><td>2009</td><td>0</td><td>225</td><td></td></tr>
<tr><td>8</td><td>2011</td><td>0</td><td>223</td><td></td></tr>
<tr><td>9</td><td>2008</td><td>0</td><td>211</td><td></td></tr>
<tr><td>10</td><td>2012</td><td>0</td><td>205</td><td></td></tr>

<tr><td colspan="5"><b>Less Goal in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2013</td><td>0</td><td>193</td><td></td></tr>
<tr><td>2</td><td>2014</td><td>0</td><td>204</td><td></td></tr>
<tr><td>3</td><td>2012</td><td>0</td><td>205</td><td></td></tr>
<tr><td>4</td><td>2008</td><td>0</td><td>211</td><td></td></tr>
<tr><td>5</td><td>2011</td><td>0</td><td>223</td><td></td></tr>
<tr><td>6</td><td>2009</td><td>0</td><td>225</td><td></td></tr>
<tr><td>7</td><td>2010</td><td>0</td><td>252</td><td></td></tr>

<tr><td colspan="5"><b>Most Goals Against in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2009</td><td>0</td><td>298</td><td></td></tr>
<tr><td>2</td><td>2010</td><td>0</td><td>280</td><td></td></tr>
<tr><td>3</td><td>2012</td><td>0</td><td>279</td><td></td></tr>
<tr><td>4</td><td>2008</td><td>0</td><td>270</td><td></td></tr>
<tr><td>5</td><td>2014</td><td>0</td><td>241</td><td></td></tr>
<tr><td>6</td><td>2013</td><td>0</td><td>239</td><td></td></tr>
<tr><td>7</td><td>2019</td><td>0</td><td>223</td><td></td></tr>
<tr><td>8</td><td>2011</td><td>0</td><td>207</td><td></td></tr>
<tr><td>9</td><td>2018</td><td>0</td><td>184</td><td></td></tr>

<tr><td colspan="5"><b>Less Goal Against in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2018</td><td>0</td><td>184</td><td></td></tr>
<tr><td>2</td><td>2015</td><td>0</td><td>201</td><td></td></tr>
<tr><td>3</td><td>2011</td><td>0</td><td>207</td><td></td></tr>
<tr><td>4</td><td>2017</td><td>0</td><td>215</td><td></td></tr>
<tr><td>5</td><td>2019</td><td>0</td><td>223</td><td></td></tr>
<tr><td>6</td><td>2016</td><td>0</td><td>235</td><td></td></tr>
<tr><td>7</td><td>2013</td><td>0</td><td>239</td><td></td></tr>
<tr><td>8</td><td>2014</td><td>0</td><td>241</td><td></td></tr>
<tr><td>9</td><td>2008</td><td>0</td><td>270</td><td></td></tr>
<tr><td>10</td><td>2012</td><td>0</td><td>279</td><td></td></tr>

<tr><td colspan="5"><b>Most Assists in 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2010</td><td>375</td><td>14</td><td></td></tr><tr><td>2</td><td>2015</td><td>371</td><td>14</td><td></td></tr><tr><td>3</td><td>2009</td><td>827</td><td>13</td><td></td></tr><tr><td>4</td><td>2013</td><td>989</td><td>13</td><td></td></tr><tr><td>5</td><td>2014</td><td>928</td><td>13</td><td></td></tr><tr><td>6</td><td>2018</td><td>863</td><td>13</td><td></td></tr><tr><td>7</td><td>2019</td><td>297</td><td>13</td><td><a href="OTHL-297.html">Game Direct Link</a></td></tr><tr><td>8</td><td>2009</td><td>645</td><td>12</td><td></td></tr><tr><td>9</td><td>2010</td><td>320</td><td>12</td><td></td></tr><tr><td>10</td><td>2012</td><td>48</td><td>12</td><td></td></tr>
<tr><td colspan="5"><b>Most Assists in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2016</td><td>0</td><td>481</td><td></td></tr>
<tr><td>2</td><td>2010</td><td>0</td><td>456</td><td></td></tr>
<tr><td>3</td><td>2018</td><td>0</td><td>450</td><td></td></tr>
<tr><td>4</td><td>2019</td><td>0</td><td>447</td><td></td></tr>
<tr><td>5</td><td>2017</td><td>0</td><td>429</td><td></td></tr>
<tr><td>6</td><td>2015</td><td>0</td><td>428</td><td></td></tr>
<tr><td>7</td><td>2009</td><td>0</td><td>410</td><td></td></tr>
<tr><td>8</td><td>2008</td><td>0</td><td>380</td><td></td></tr>
<tr><td>9</td><td>2011</td><td>0</td><td>359</td><td></td></tr>
<tr><td>10</td><td>2012</td><td>0</td><td>352</td><td></td></tr>

<tr><td colspan="5"><b>Less Assist in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2013</td><td>0</td><td>332</td><td></td></tr>
<tr><td>2</td><td>2014</td><td>0</td><td>345</td><td></td></tr>
<tr><td>3</td><td>2012</td><td>0</td><td>352</td><td></td></tr>
<tr><td>4</td><td>2011</td><td>0</td><td>359</td><td></td></tr>
<tr><td>5</td><td>2008</td><td>0</td><td>380</td><td></td></tr>
<tr><td>6</td><td>2009</td><td>0</td><td>410</td><td></td></tr>
<tr><td>7</td><td>2019</td><td>0</td><td>447</td><td></td></tr>
<tr><td>8</td><td>2018</td><td>0</td><td>450</td><td></td></tr>
<tr><td>9</td><td>2010</td><td>0</td><td>456</td><td></td></tr>

<tr><td colspan="5"><b>Most Game Points in 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2010</td><td>375</td><td>21</td><td></td></tr><tr><td>2</td><td>2015</td><td>371</td><td>21</td><td></td></tr><tr><td>3</td><td>2009</td><td>827</td><td>20</td><td></td></tr><tr><td>4</td><td>2013</td><td>989</td><td>20</td><td></td></tr><tr><td>5</td><td>2014</td><td>928</td><td>20</td><td></td></tr><tr><td>6</td><td>2018</td><td>863</td><td>20</td><td></td></tr><tr><td>7</td><td>2019</td><td>297</td><td>20</td><td><a href="OTHL-297.html">Game Direct Link</a></td></tr><tr><td>8</td><td>2012</td><td>48</td><td>19</td><td></td></tr><tr><td>9</td><td>2016</td><td>913</td><td>19</td><td></td></tr><tr><td>10</td><td>2018</td><td>612</td><td>19</td><td></td></tr>
<tr><td colspan="5"><b>Most Game Points in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>0</td><td>0</td><td>32000</td><td></td></tr>
<tr><td>2</td><td>0</td><td>0</td><td>32000</td><td></td></tr>

<tr><td colspan="5"><b>Less Game Point In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2013</td><td>0</td><td>525</td><td></td></tr>
<tr><td>2</td><td>2014</td><td>0</td><td>549</td><td></td></tr>
<tr><td>3</td><td>2012</td><td>0</td><td>557</td><td></td></tr>
<tr><td>4</td><td>2011</td><td>0</td><td>582</td><td></td></tr>
<tr><td>5</td><td>2008</td><td>0</td><td>591</td><td></td></tr>
<tr><td>6</td><td>2009</td><td>0</td><td>635</td><td></td></tr>
<tr><td>7</td><td>2019</td><td>0</td><td>706</td><td></td></tr>
<tr><td>8</td><td>2010</td><td>0</td><td>708</td><td></td></tr>

<tr><td colspan="5"><b>Most Shots In 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2018</td><td>1020</td><td>63</td><td></td></tr><tr><td>2</td><td>2019</td><td>1228</td><td>53</td><td><a href="OTHL-1228.html">Game Direct Link</a></td></tr><tr><td>3</td><td>2017</td><td>511</td><td>52</td><td></td></tr><tr><td>4</td><td>2018</td><td>1231</td><td>50</td><td></td></tr><tr><td>5</td><td>2018</td><td>227</td><td>49</td><td></td></tr><tr><td>6</td><td>2016</td><td>347</td><td>48</td><td></td></tr><tr><td>7</td><td>2017</td><td>288</td><td>47</td><td></td></tr><tr><td>8</td><td>2017</td><td>864</td><td>47</td><td></td></tr><tr><td>9</td><td>2019</td><td>1258</td><td>47</td><td><a href="OTHL-1258.html">Game Direct Link</a></td></tr><tr><td>10</td><td>2009</td><td>923</td><td>46</td><td></td></tr>
<tr><td colspan="5"><b>Most Shots In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2019</td><td>0</td><td>2867</td><td></td></tr>
<tr><td>2</td><td>2018</td><td>0</td><td>2835</td><td></td></tr>
<tr><td>3</td><td>2017</td><td>0</td><td>2818</td><td></td></tr>
<tr><td>4</td><td>2016</td><td>0</td><td>2647</td><td></td></tr>
<tr><td>5</td><td>2011</td><td>0</td><td>2405</td><td></td></tr>
<tr><td>6</td><td>2015</td><td>0</td><td>2356</td><td></td></tr>
<tr><td>7</td><td>2010</td><td>0</td><td>2280</td><td></td></tr>
<tr><td>8</td><td>2012</td><td>0</td><td>2158</td><td></td></tr>
<tr><td>9</td><td>2014</td><td>0</td><td>2115</td><td></td></tr>
<tr><td>10</td><td>2009</td><td>0</td><td>2096</td><td></td></tr>

<tr><td colspan="5"><b>Less Shots In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2013</td><td>0</td><td>1948</td><td></td></tr>
<tr><td>2</td><td>2008</td><td>0</td><td>2056</td><td></td></tr>
<tr><td>3</td><td>2009</td><td>0</td><td>2096</td><td></td></tr>
<tr><td>4</td><td>2014</td><td>0</td><td>2115</td><td></td></tr>
<tr><td>5</td><td>2012</td><td>0</td><td>2158</td><td></td></tr>
<tr><td>6</td><td>2010</td><td>0</td><td>2280</td><td></td></tr>
<tr><td>7</td><td>2011</td><td>0</td><td>2405</td><td></td></tr>

<tr><td colspan="5"><b>Most Shots Blocked In 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2010</td><td>426</td><td>23</td><td></td></tr><tr><td>2</td><td>2011</td><td>1</td><td>21</td><td></td></tr><tr><td>3</td><td>2010</td><td>971</td><td>20</td><td></td></tr><tr><td>4</td><td>2017</td><td>5</td><td>20</td><td></td></tr><tr><td>5</td><td>2018</td><td>567</td><td>20</td><td></td></tr><tr><td>6</td><td>2009</td><td>704</td><td>19</td><td></td></tr><tr><td>7</td><td>2017</td><td>587</td><td>19</td><td></td></tr><tr><td>8</td><td>2018</td><td>289</td><td>19</td><td></td></tr><tr><td>9</td><td>2008</td><td>1060</td><td>18</td><td></td></tr><tr><td>10</td><td>2009</td><td>480</td><td>18</td><td></td></tr>
<tr><td colspan="5"><b>Most Shots Blocked In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>0</td><td>0</td><td>32000</td><td></td></tr>
<tr><td>2</td><td>0</td><td>0</td><td>32000</td><td></td></tr>

<tr><td colspan="5"><b>Less Shots Block In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2015</td><td>0</td><td>587</td><td></td></tr>
<tr><td>2</td><td>2014</td><td>0</td><td>610</td><td></td></tr>
<tr><td>3</td><td>2016</td><td>0</td><td>628</td><td></td></tr>
<tr><td>4</td><td>2013</td><td>0</td><td>635</td><td></td></tr>
<tr><td>5</td><td>2008</td><td>0</td><td>649</td><td></td></tr>
<tr><td>6</td><td>2012</td><td>0</td><td>678</td><td></td></tr>
<tr><td>7</td><td>2009</td><td>0</td><td>700</td><td></td></tr>
<tr><td>8</td><td>2018</td><td>0</td><td>713</td><td></td></tr>
<tr><td>9</td><td>2010</td><td>0</td><td>717</td><td></td></tr>
<tr><td>10</td><td>2019</td><td>0</td><td>733</td><td></td></tr>

<tr><td colspan="5"><b>Most Shots Against In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2017</td><td>0</td><td>2591</td><td></td></tr>
<tr><td>2</td><td>2019</td><td>0</td><td>2558</td><td></td></tr>
<tr><td>3</td><td>2008</td><td>0</td><td>2502</td><td></td></tr>
<tr><td>4</td><td>2012</td><td>0</td><td>2490</td><td></td></tr>
<tr><td>5</td><td>2009</td><td>0</td><td>2379</td><td></td></tr>
<tr><td>6</td><td>2011</td><td>0</td><td>2370</td><td></td></tr>
<tr><td>7</td><td>2010</td><td>0</td><td>2369</td><td></td></tr>
<tr><td>8</td><td>2018</td><td>0</td><td>2290</td><td></td></tr>

<tr><td colspan="5"><b>Less Shots Against In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2015</td><td>0</td><td>2115</td><td></td></tr>
<tr><td>2</td><td>2014</td><td>0</td><td>2128</td><td></td></tr>
<tr><td>3</td><td>2013</td><td>0</td><td>2133</td><td></td></tr>
<tr><td>4</td><td>2016</td><td>0</td><td>2153</td><td></td></tr>
<tr><td>5</td><td>2018</td><td>0</td><td>2290</td><td></td></tr>
<tr><td>6</td><td>2010</td><td>0</td><td>2369</td><td></td></tr>
<tr><td>7</td><td>2011</td><td>0</td><td>2370</td><td></td></tr>
<tr><td>8</td><td>2009</td><td>0</td><td>2379</td><td></td></tr>
<tr><td>9</td><td>2012</td><td>0</td><td>2490</td><td></td></tr>
<tr><td>10</td><td>2008</td><td>0</td><td>2502</td><td></td></tr>

<tr><td colspan="5"><b>Most Pim In 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2011</td><td>142</td><td>57</td><td></td></tr><tr><td>2</td><td>2015</td><td>686</td><td>55</td><td></td></tr><tr><td>3</td><td>2018</td><td>253</td><td>49</td><td></td></tr><tr><td>4</td><td>2016</td><td>592</td><td>48</td><td></td></tr><tr><td>5</td><td>2019</td><td>174</td><td>47</td><td><a href="OTHL-174.html">Game Direct Link</a></td></tr><tr><td>6</td><td>2013</td><td>963</td><td>45</td><td></td></tr><tr><td>7</td><td>2018</td><td>149</td><td>45</td><td></td></tr><tr><td>8</td><td>2014</td><td>173</td><td>42</td><td></td></tr><tr><td>9</td><td>2010</td><td>240</td><td>40</td><td></td></tr><tr><td>10</td><td>2010</td><td>897</td><td>39</td><td></td></tr>
<tr><td colspan="5"><b>Most Pim In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2008</td><td>0</td><td>1281</td><td></td></tr>
<tr><td>2</td><td>2010</td><td>0</td><td>1276</td><td></td></tr>
<tr><td>3</td><td>2009</td><td>0</td><td>1268</td><td></td></tr>
<tr><td>4</td><td>2011</td><td>0</td><td>1236</td><td></td></tr>
<tr><td>5</td><td>2016</td><td>0</td><td>1022</td><td></td></tr>
<tr><td>6</td><td>2014</td><td>0</td><td>852</td><td></td></tr>
<tr><td>7</td><td>2013</td><td>0</td><td>808</td><td></td></tr>
<tr><td>8</td><td>2019</td><td>0</td><td>766</td><td></td></tr>
<tr><td>9</td><td>2012</td><td>0</td><td>762</td><td></td></tr>
<tr><td>10</td><td>2018</td><td>0</td><td>754</td><td></td></tr>

<tr><td colspan="5"><b>Less Pim In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2017</td><td>0</td><td>630</td><td></td></tr>
<tr><td>2</td><td>2018</td><td>0</td><td>754</td><td></td></tr>
<tr><td>3</td><td>2012</td><td>0</td><td>762</td><td></td></tr>
<tr><td>4</td><td>2019</td><td>0</td><td>766</td><td></td></tr>
<tr><td>5</td><td>2015</td><td>0</td><td>777</td><td></td></tr>
<tr><td>6</td><td>2013</td><td>0</td><td>808</td><td></td></tr>
<tr><td>7</td><td>2014</td><td>0</td><td>852</td><td></td></tr>
<tr><td>8</td><td>2016</td><td>0</td><td>1022</td><td></td></tr>
<tr><td>9</td><td>2011</td><td>0</td><td>1236</td><td></td></tr>
<tr><td>10</td><td>2009</td><td>0</td><td>1268</td><td></td></tr>

<tr><td colspan="5"><b>Most Hits In 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2019</td><td>375</td><td>43</td><td><a href="OTHL-375.html">Game Direct Link</a></td></tr><tr><td>2</td><td>2011</td><td>1032</td><td>38</td><td></td></tr><tr><td>3</td><td>2009</td><td>180</td><td>36</td><td></td></tr><tr><td>4</td><td>2018</td><td>1034</td><td>36</td><td></td></tr><tr><td>5</td><td>2015</td><td>172</td><td>35</td><td></td></tr><tr><td>6</td><td>2016</td><td>379</td><td>35</td><td></td></tr><tr><td>7</td><td>2011</td><td>423</td><td>34</td><td></td></tr><tr><td>8</td><td>2012</td><td>569</td><td>34</td><td></td></tr><tr><td>9</td><td>2015</td><td>988</td><td>34</td><td></td></tr><tr><td>10</td><td>2018</td><td>514</td><td>34</td><td></td></tr>
<tr><td colspan="5"><b>Most Hits In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2019</td><td>0</td><td>1868</td><td></td></tr>
<tr><td>2</td><td>2011</td><td>0</td><td>1854</td><td></td></tr>
<tr><td>3</td><td>2018</td><td>0</td><td>1794</td><td></td></tr>
<tr><td>4</td><td>2017</td><td>0</td><td>1726</td><td></td></tr>
<tr><td>5</td><td>2016</td><td>0</td><td>1721</td><td></td></tr>
<tr><td>6</td><td>2010</td><td>0</td><td>1715</td><td></td></tr>
<tr><td>7</td><td>2012</td><td>0</td><td>1703</td><td></td></tr>
<tr><td>8</td><td>2015</td><td>0</td><td>1691</td><td></td></tr>
<tr><td>9</td><td>2013</td><td>0</td><td>1596</td><td></td></tr>
<tr><td>10</td><td>2009</td><td>0</td><td>1569</td><td></td></tr>

<tr><td colspan="5"><b>Less Hit In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2008</td><td>0</td><td>1542</td><td></td></tr>
<tr><td>2</td><td>2014</td><td>0</td><td>1555</td><td></td></tr>
<tr><td>3</td><td>2009</td><td>0</td><td>1569</td><td></td></tr>
<tr><td>4</td><td>2013</td><td>0</td><td>1596</td><td></td></tr>
<tr><td>5</td><td>2015</td><td>0</td><td>1691</td><td></td></tr>
<tr><td>6</td><td>2012</td><td>0</td><td>1703</td><td></td></tr>
<tr><td>7</td><td>2010</td><td>0</td><td>1715</td><td></td></tr>
<tr><td>8</td><td>2018</td><td>0</td><td>1794</td><td></td></tr>
<tr><td>9</td><td>2011</td><td>0</td><td>1854</td><td></td></tr>

<tr><td colspan="5"><b>Most Empty Net Goal In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2019</td><td>0</td><td>4</td><td></td></tr>
<tr><td>2</td><td>2008</td><td>0</td><td>3</td><td></td></tr>
<tr><td>3</td><td>2009</td><td>0</td><td>3</td><td></td></tr>
<tr><td>4</td><td>2012</td><td>0</td><td>3</td><td></td></tr>
<tr><td>5</td><td>2013</td><td>0</td><td>3</td><td></td></tr>
<tr><td>6</td><td>2016</td><td>0</td><td>3</td><td></td></tr>
<tr><td>7</td><td>2014</td><td>0</td><td>2</td><td></td></tr>
<tr><td>8</td><td>2010</td><td>0</td><td>1</td><td></td></tr>
<tr><td>9</td><td>2011</td><td>0</td><td>1</td><td></td></tr>
<tr><td>10</td><td>2018</td><td>0</td><td>1</td><td></td></tr>

<tr><td colspan="5"><b>Best PP In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2011</td><td>0</td><td>23.10%</td><td></td></tr>
<tr><td>2</td><td>2016</td><td>0</td><td>21.40%</td><td></td></tr>
<tr><td>3</td><td>2010</td><td>0</td><td>18.80%</td><td></td></tr>
<tr><td>4</td><td>2017</td><td>0</td><td>18.00%</td><td></td></tr>
<tr><td>5</td><td>2018</td><td>0</td><td>17.30%</td><td></td></tr>
<tr><td>6</td><td>2009</td><td>0</td><td>16.70%</td><td></td></tr>
<tr><td>7</td><td>2015</td><td>0</td><td>16.70%</td><td></td></tr>
<tr><td>8</td><td>2012</td><td>0</td><td>16.50%</td><td></td></tr>
<tr><td>9</td><td>2008</td><td>0</td><td>16.40%</td><td></td></tr>
<tr><td>10</td><td>2019</td><td>0</td><td>15.90%</td><td></td></tr>

<tr><td colspan="5"><b>Best PK In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2017</td><td>0</td><td>86.50%</td><td></td></tr>
<tr><td>2</td><td>2008</td><td>0</td><td>85.40%</td><td></td></tr>
<tr><td>3</td><td>2015</td><td>0</td><td>85.40%</td><td></td></tr>
<tr><td>4</td><td>2018</td><td>0</td><td>85.40%</td><td></td></tr>
<tr><td>5</td><td>2019</td><td>0</td><td>83.40%</td><td></td></tr>
<tr><td>6</td><td>2011</td><td>0</td><td>82.20%</td><td></td></tr>
<tr><td>7</td><td>2014</td><td>0</td><td>81.70%</td><td></td></tr>
<tr><td>8</td><td>2016</td><td>0</td><td>80.40%</td><td></td></tr>
<tr><td>9</td><td>2013</td><td>0</td><td>78.70%</td><td></td></tr>
<tr><td>10</td><td>2012</td><td>0</td><td>78.60%</td><td></td></tr>

<tr><td colspan="5"><b>Worse PP In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2013</td><td>0</td><td>14.20%</td><td></td></tr>
<tr><td>2</td><td>2014</td><td>0</td><td>14.80%</td><td></td></tr>
<tr><td>3</td><td>2019</td><td>0</td><td>15.90%</td><td></td></tr>
<tr><td>4</td><td>2008</td><td>0</td><td>16.40%</td><td></td></tr>
<tr><td>5</td><td>2012</td><td>0</td><td>16.50%</td><td></td></tr>
<tr><td>6</td><td>2009</td><td>0</td><td>16.70%</td><td></td></tr>
<tr><td>7</td><td>2018</td><td>0</td><td>17.30%</td><td></td></tr>
<tr><td>8</td><td>2010</td><td>0</td><td>18.80%</td><td></td></tr>
<tr><td>9</td><td>2011</td><td>0</td><td>23.10%</td><td></td></tr>

<tr><td colspan="5"><b>Worse PK In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2010</td><td>0</td><td>78.30%</td><td></td></tr>
<tr><td>2</td><td>2009</td><td>0</td><td>78.50%</td><td></td></tr>
<tr><td>3</td><td>2012</td><td>0</td><td>78.60%</td><td></td></tr>
<tr><td>4</td><td>2013</td><td>0</td><td>78.70%</td><td></td></tr>
<tr><td>5</td><td>2016</td><td>0</td><td>80.40%</td><td></td></tr>
<tr><td>6</td><td>2014</td><td>0</td><td>81.70%</td><td></td></tr>
<tr><td>7</td><td>2011</td><td>0</td><td>82.20%</td><td></td></tr>
<tr><td>8</td><td>2019</td><td>0</td><td>83.40%</td><td></td></tr>
<tr><td>9</td><td>2008</td><td>0</td><td>85.40%</td><td></td></tr>

<tr><td colspan="5"><b>Most Win In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2018</td><td>0</td><td>56</td><td></td></tr>
<tr><td>2</td><td>2019</td><td>0</td><td>50</td><td></td></tr>
<tr><td>3</td><td>2015</td><td>0</td><td>48</td><td></td></tr>
<tr><td>4</td><td>2017</td><td>0</td><td>47</td><td></td></tr>
<tr><td>5</td><td>2016</td><td>0</td><td>46</td><td></td></tr>
<tr><td>6</td><td>2011</td><td>0</td><td>45</td><td></td></tr>
<tr><td>7</td><td>2010</td><td>0</td><td>40</td><td></td></tr>
<tr><td>8</td><td>2014</td><td>0</td><td>37</td><td></td></tr>
<tr><td>9</td><td>2013</td><td>0</td><td>31</td><td></td></tr>
<tr><td>10</td><td>2009</td><td>0</td><td>30</td><td></td></tr>

<tr><td colspan="5"><b>Less Win In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2008</td><td>0</td><td>25</td><td></td></tr>
<tr><td>2</td><td>2012</td><td>0</td><td>29</td><td></td></tr>
<tr><td>3</td><td>2009</td><td>0</td><td>30</td><td></td></tr>
<tr><td>4</td><td>2013</td><td>0</td><td>31</td><td></td></tr>
<tr><td>5</td><td>2014</td><td>0</td><td>37</td><td></td></tr>
<tr><td>6</td><td>2010</td><td>0</td><td>40</td><td></td></tr>
<tr><td>7</td><td>2011</td><td>0</td><td>45</td><td></td></tr>

<tr><td colspan="5"><b>Most Lost In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2012</td><td>0</td><td>53</td><td></td></tr>
<tr><td>2</td><td>2009</td><td>0</td><td>52</td><td></td></tr>
<tr><td>3</td><td>2013</td><td>0</td><td>51</td><td></td></tr>
<tr><td>4</td><td>2014</td><td>0</td><td>45</td><td></td></tr>
<tr><td>5</td><td>2010</td><td>0</td><td>42</td><td></td></tr>
<tr><td>6</td><td>2008</td><td>0</td><td>40</td><td></td></tr>
<tr><td>7</td><td>2011</td><td>0</td><td>37</td><td></td></tr>
<tr><td>8</td><td>2019</td><td>0</td><td>32</td><td></td></tr>
<tr><td>9</td><td>2018</td><td>0</td><td>26</td><td></td></tr>

<tr><td colspan="5"><b>Less Lost In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2018</td><td>0</td><td>26</td><td></td></tr>
<tr><td>2</td><td>2019</td><td>0</td><td>32</td><td></td></tr>
<tr><td>3</td><td>2015</td><td>0</td><td>34</td><td></td></tr>
<tr><td>4</td><td>2017</td><td>0</td><td>35</td><td></td></tr>
<tr><td>5</td><td>2016</td><td>0</td><td>36</td><td></td></tr>
<tr><td>6</td><td>2011</td><td>0</td><td>37</td><td></td></tr>
<tr><td>7</td><td>2008</td><td>0</td><td>40</td><td></td></tr>
<tr><td>8</td><td>2010</td><td>0</td><td>42</td><td></td></tr>
<tr><td>9</td><td>2014</td><td>0</td><td>45</td><td></td></tr>
<tr><td>10</td><td>2013</td><td>0</td><td>51</td><td></td></tr>

<tr><td colspan="5"><b>Most Point In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2018</td><td>0</td><td>118</td><td></td></tr>
<tr><td>2</td><td>2019</td><td>0</td><td>107</td><td></td></tr>
<tr><td>3</td><td>2015</td><td>0</td><td>104</td><td></td></tr>
<tr><td>4</td><td>2017</td><td>0</td><td>102</td><td></td></tr>
<tr><td>5</td><td>2016</td><td>0</td><td>100</td><td></td></tr>
<tr><td>6</td><td>2011</td><td>0</td><td>99</td><td></td></tr>
<tr><td>7</td><td>2010</td><td>0</td><td>86</td><td></td></tr>
<tr><td>8</td><td>2014</td><td>0</td><td>82</td><td></td></tr>
<tr><td>9</td><td>2008</td><td>0</td><td>71</td><td></td></tr>
<tr><td>10</td><td>2009</td><td>0</td><td>71</td><td></td></tr>

<tr><td colspan="5"><b>Less Points In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2012</td><td>0</td><td>70</td><td></td></tr>
<tr><td>2</td><td>2013</td><td>0</td><td>70</td><td></td></tr>
<tr><td>3</td><td>2008</td><td>0</td><td>71</td><td></td></tr>
<tr><td>4</td><td>2009</td><td>0</td><td>71</td><td></td></tr>
<tr><td>5</td><td>2014</td><td>0</td><td>82</td><td></td></tr>
<tr><td>6</td><td>2010</td><td>0</td><td>86</td><td></td></tr>
<tr><td>7</td><td>2011</td><td>0</td><td>99</td><td></td></tr>

<tr><td colspan="5"><b>Most Win Home In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>0</td><td>0</td><td>32000</td><td></td></tr>
<tr><td>2</td><td>0</td><td>0</td><td>32000</td><td></td></tr>

<tr><td colspan="5"><b>Most Win Visitor In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>0</td><td>0</td><td>32000</td><td></td></tr>
<tr><td>2</td><td>0</td><td>0</td><td>32000</td><td></td></tr>

</table></div>
<h1 class="TeamRecordsPro_MTL"><a id="Canadiens">Canadiens</a></h1>
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
<br /><table class="STHSRecordTable">
<tr><td colspan="5"><b>Most Goals in 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2008</td><td>424</td><td>8</td><td></td></tr><tr><td>2</td><td>2012</td><td>42</td><td>8</td><td></td></tr><tr><td>3</td><td>2008</td><td>316</td><td>7</td><td></td></tr><tr><td>4</td><td>2008</td><td>334</td><td>7</td><td></td></tr><tr><td>5</td><td>2008</td><td>344</td><td>7</td><td></td></tr><tr><td>6</td><td>2008</td><td>882</td><td>7</td><td></td></tr><tr><td>7</td><td>2012</td><td>1137</td><td>7</td><td></td></tr><tr><td>8</td><td>2019</td><td>748</td><td>7</td><td><a href="OTHL-748.html">Game Direct Link</a></td></tr><tr><td>9</td><td>2011</td><td>245</td><td>6</td><td></td></tr><tr><td>10</td><td>2012</td><td>859</td><td>6</td><td></td></tr>
<tr><td colspan="5"><b>Most Goals in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2008</td><td>0</td><td>279</td><td></td></tr>
<tr><td>2</td><td>2010</td><td>0</td><td>256</td><td></td></tr>
<tr><td>3</td><td>2019</td><td>0</td><td>250</td><td></td></tr>
<tr><td>4</td><td>2017</td><td>0</td><td>234</td><td></td></tr>
<tr><td>5</td><td>2012</td><td>0</td><td>221</td><td></td></tr>
<tr><td>6</td><td>2018</td><td>0</td><td>217</td><td></td></tr>
<tr><td>7</td><td>2011</td><td>0</td><td>211</td><td></td></tr>
<tr><td>8</td><td>2009</td><td>0</td><td>208</td><td></td></tr>

<tr><td colspan="5"><b>Less Goal in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2015</td><td>0</td><td>156</td><td></td></tr>
<tr><td>2</td><td>2014</td><td>0</td><td>179</td><td></td></tr>
<tr><td>3</td><td>2013</td><td>0</td><td>181</td><td></td></tr>
<tr><td>4</td><td>2016</td><td>0</td><td>182</td><td></td></tr>
<tr><td>5</td><td>2009</td><td>0</td><td>208</td><td></td></tr>
<tr><td>6</td><td>2011</td><td>0</td><td>211</td><td></td></tr>
<tr><td>7</td><td>2018</td><td>0</td><td>217</td><td></td></tr>
<tr><td>8</td><td>2012</td><td>0</td><td>221</td><td></td></tr>
<tr><td>9</td><td>2019</td><td>0</td><td>250</td><td></td></tr>
<tr><td>10</td><td>2010</td><td>0</td><td>256</td><td></td></tr>

<tr><td colspan="5"><b>Most Goals Against in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2016</td><td>0</td><td>285</td><td></td></tr>
<tr><td>2</td><td>2015</td><td>0</td><td>281</td><td></td></tr>
<tr><td>3</td><td>2009</td><td>0</td><td>272</td><td></td></tr>
<tr><td>4</td><td>2013</td><td>0</td><td>269</td><td></td></tr>
<tr><td>5</td><td>2012</td><td>0</td><td>266</td><td></td></tr>
<tr><td>6</td><td>2018</td><td>0</td><td>248</td><td></td></tr>
<tr><td>7</td><td>2010</td><td>0</td><td>244</td><td></td></tr>
<tr><td>8</td><td>2011</td><td>0</td><td>243</td><td></td></tr>
<tr><td>9</td><td>2008</td><td>0</td><td>230</td><td></td></tr>
<tr><td>10</td><td>2019</td><td>0</td><td>196</td><td></td></tr>

<tr><td colspan="5"><b>Less Goal Against in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2019</td><td>0</td><td>196</td><td></td></tr>
<tr><td>2</td><td>2017</td><td>0</td><td>214</td><td></td></tr>
<tr><td>3</td><td>2008</td><td>0</td><td>230</td><td></td></tr>
<tr><td>4</td><td>2014</td><td>0</td><td>234</td><td></td></tr>
<tr><td>5</td><td>2011</td><td>0</td><td>243</td><td></td></tr>
<tr><td>6</td><td>2010</td><td>0</td><td>244</td><td></td></tr>
<tr><td>7</td><td>2018</td><td>0</td><td>248</td><td></td></tr>
<tr><td>8</td><td>2012</td><td>0</td><td>266</td><td></td></tr>
<tr><td>9</td><td>2013</td><td>0</td><td>269</td><td></td></tr>
<tr><td>10</td><td>2009</td><td>0</td><td>272</td><td></td></tr>

<tr><td colspan="5"><b>Most Assists in 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2008</td><td>424</td><td>14</td><td></td></tr><tr><td>2</td><td>2012</td><td>42</td><td>14</td><td></td></tr><tr><td>3</td><td>2008</td><td>316</td><td>13</td><td></td></tr><tr><td>4</td><td>2008</td><td>344</td><td>13</td><td></td></tr><tr><td>5</td><td>2012</td><td>1137</td><td>13</td><td></td></tr><tr><td>6</td><td>2008</td><td>209</td><td>12</td><td></td></tr><tr><td>7</td><td>2009</td><td>1008</td><td>12</td><td></td></tr><tr><td>8</td><td>2017</td><td>1132</td><td>12</td><td></td></tr><tr><td>9</td><td>2019</td><td>126</td><td>12</td><td><a href="OTHL-126.html">Game Direct Link</a></td></tr><tr><td>10</td><td>2019</td><td>748</td><td>12</td><td><a href="OTHL-748.html">Game Direct Link</a></td></tr>
<tr><td colspan="5"><b>Most Assists in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2008</td><td>0</td><td>494</td><td></td></tr>
<tr><td>2</td><td>2010</td><td>0</td><td>461</td><td></td></tr>
<tr><td>3</td><td>2019</td><td>0</td><td>438</td><td></td></tr>
<tr><td>4</td><td>2017</td><td>0</td><td>409</td><td></td></tr>
<tr><td>5</td><td>2018</td><td>0</td><td>389</td><td></td></tr>
<tr><td>6</td><td>2012</td><td>0</td><td>387</td><td></td></tr>
<tr><td>7</td><td>2009</td><td>0</td><td>374</td><td></td></tr>
<tr><td>8</td><td>2011</td><td>0</td><td>334</td><td></td></tr>

<tr><td colspan="5"><b>Less Assist in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2015</td><td>0</td><td>274</td><td></td></tr>
<tr><td>2</td><td>2014</td><td>0</td><td>306</td><td></td></tr>
<tr><td>3</td><td>2013</td><td>0</td><td>310</td><td></td></tr>
<tr><td>4</td><td>2016</td><td>0</td><td>320</td><td></td></tr>
<tr><td>5</td><td>2011</td><td>0</td><td>334</td><td></td></tr>
<tr><td>6</td><td>2009</td><td>0</td><td>374</td><td></td></tr>
<tr><td>7</td><td>2012</td><td>0</td><td>387</td><td></td></tr>
<tr><td>8</td><td>2018</td><td>0</td><td>389</td><td></td></tr>
<tr><td>9</td><td>2019</td><td>0</td><td>438</td><td></td></tr>
<tr><td>10</td><td>2010</td><td>0</td><td>461</td><td></td></tr>

<tr><td colspan="5"><b>Most Game Points in 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2008</td><td>424</td><td>22</td><td></td></tr><tr><td>2</td><td>2012</td><td>42</td><td>22</td><td></td></tr><tr><td>3</td><td>2008</td><td>316</td><td>20</td><td></td></tr><tr><td>4</td><td>2008</td><td>344</td><td>20</td><td></td></tr><tr><td>5</td><td>2012</td><td>1137</td><td>20</td><td></td></tr><tr><td>6</td><td>2019</td><td>748</td><td>19</td><td><a href="OTHL-748.html">Game Direct Link</a></td></tr><tr><td>7</td><td>2008</td><td>209</td><td>18</td><td></td></tr><tr><td>8</td><td>2008</td><td>882</td><td>18</td><td></td></tr><tr><td>9</td><td>2017</td><td>1132</td><td>18</td><td></td></tr><tr><td>10</td><td>2019</td><td>126</td><td>18</td><td><a href="OTHL-126.html">Game Direct Link</a></td></tr>
<tr><td colspan="5"><b>Most Game Points in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>0</td><td>0</td><td>32000</td><td></td></tr>
<tr><td>2</td><td>0</td><td>0</td><td>32000</td><td></td></tr>

<tr><td colspan="5"><b>Less Game Point In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2015</td><td>0</td><td>430</td><td></td></tr>
<tr><td>2</td><td>2014</td><td>0</td><td>485</td><td></td></tr>
<tr><td>3</td><td>2013</td><td>0</td><td>491</td><td></td></tr>
<tr><td>4</td><td>2016</td><td>0</td><td>502</td><td></td></tr>
<tr><td>5</td><td>2011</td><td>0</td><td>545</td><td></td></tr>
<tr><td>6</td><td>2009</td><td>0</td><td>582</td><td></td></tr>
<tr><td>7</td><td>2018</td><td>0</td><td>606</td><td></td></tr>
<tr><td>8</td><td>2012</td><td>0</td><td>608</td><td></td></tr>
<tr><td>9</td><td>2019</td><td>0</td><td>688</td><td></td></tr>
<tr><td>10</td><td>2010</td><td>0</td><td>717</td><td></td></tr>

<tr><td colspan="5"><b>Most Shots In 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2019</td><td>660</td><td>57</td><td><a href="OTHL-660.html">Game Direct Link</a></td></tr><tr><td>2</td><td>2012</td><td>1137</td><td>56</td><td></td></tr><tr><td>3</td><td>2018</td><td>400</td><td>52</td><td></td></tr><tr><td>4</td><td>2018</td><td>639</td><td>52</td><td></td></tr><tr><td>5</td><td>2018</td><td>1191</td><td>52</td><td></td></tr><tr><td>6</td><td>2019</td><td>557</td><td>51</td><td><a href="OTHL-557.html">Game Direct Link</a></td></tr><tr><td>7</td><td>2019</td><td>953</td><td>50</td><td><a href="OTHL-953.html">Game Direct Link</a></td></tr><tr><td>8</td><td>2018</td><td>659</td><td>49</td><td></td></tr><tr><td>9</td><td>2019</td><td>6</td><td>49</td><td><a href="OTHL-6.html">Game Direct Link</a></td></tr><tr><td>10</td><td>2017</td><td>237</td><td>48</td><td></td></tr>
<tr><td colspan="5"><b>Most Shots In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2019</td><td>0</td><td>2868</td><td></td></tr>
<tr><td>2</td><td>2017</td><td>0</td><td>2688</td><td></td></tr>
<tr><td>3</td><td>2018</td><td>0</td><td>2568</td><td></td></tr>
<tr><td>4</td><td>2008</td><td>0</td><td>2493</td><td></td></tr>
<tr><td>5</td><td>2011</td><td>0</td><td>2318</td><td></td></tr>
<tr><td>6</td><td>2010</td><td>0</td><td>2220</td><td></td></tr>
<tr><td>7</td><td>2012</td><td>0</td><td>2134</td><td></td></tr>
<tr><td>8</td><td>2009</td><td>0</td><td>2017</td><td></td></tr>

<tr><td colspan="5"><b>Less Shots In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2013</td><td>0</td><td>1688</td><td></td></tr>
<tr><td>2</td><td>2015</td><td>0</td><td>1726</td><td></td></tr>
<tr><td>3</td><td>2014</td><td>0</td><td>1783</td><td></td></tr>
<tr><td>4</td><td>2016</td><td>0</td><td>1934</td><td></td></tr>
<tr><td>5</td><td>2009</td><td>0</td><td>2017</td><td></td></tr>
<tr><td>6</td><td>2012</td><td>0</td><td>2134</td><td></td></tr>
<tr><td>7</td><td>2010</td><td>0</td><td>2220</td><td></td></tr>
<tr><td>8</td><td>2011</td><td>0</td><td>2318</td><td></td></tr>
<tr><td>9</td><td>2008</td><td>0</td><td>2493</td><td></td></tr>

<tr><td colspan="5"><b>Most Shots Blocked In 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2008</td><td>1111</td><td>22</td><td></td></tr><tr><td>2</td><td>2015</td><td>1156</td><td>22</td><td></td></tr><tr><td>3</td><td>2012</td><td>487</td><td>20</td><td></td></tr><tr><td>4</td><td>2017</td><td>1260</td><td>20</td><td></td></tr><tr><td>5</td><td>2018</td><td>624</td><td>20</td><td></td></tr><tr><td>6</td><td>2011</td><td>421</td><td>19</td><td></td></tr><tr><td>7</td><td>2012</td><td>782</td><td>19</td><td></td></tr><tr><td>8</td><td>2009</td><td>485</td><td>18</td><td></td></tr><tr><td>9</td><td>2011</td><td>878</td><td>18</td><td></td></tr><tr><td>10</td><td>2014</td><td>1006</td><td>18</td><td></td></tr>
<tr><td colspan="5"><b>Most Shots Blocked In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>0</td><td>0</td><td>32000</td><td></td></tr>
<tr><td>2</td><td>0</td><td>0</td><td>32000</td><td></td></tr>

<tr><td colspan="5"><b>Less Shots Block In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2008</td><td>0</td><td>587</td><td></td></tr>
<tr><td>2</td><td>2014</td><td>0</td><td>609</td><td></td></tr>
<tr><td>3</td><td>2010</td><td>0</td><td>661</td><td></td></tr>
<tr><td>4</td><td>2009</td><td>0</td><td>693</td><td></td></tr>
<tr><td>5</td><td>2013</td><td>0</td><td>697</td><td></td></tr>
<tr><td>6</td><td>2012</td><td>0</td><td>703</td><td></td></tr>
<tr><td>7</td><td>2018</td><td>0</td><td>714</td><td></td></tr>
<tr><td>8</td><td>2019</td><td>0</td><td>770</td><td></td></tr>
<tr><td>9</td><td>2011</td><td>0</td><td>780</td><td></td></tr>

<tr><td colspan="5"><b>Most Shots Against In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2019</td><td>0</td><td>2635</td><td></td></tr>
<tr><td>2</td><td>2013</td><td>0</td><td>2486</td><td></td></tr>
<tr><td>3</td><td>2018</td><td>0</td><td>2486</td><td></td></tr>
<tr><td>4</td><td>2015</td><td>0</td><td>2475</td><td></td></tr>
<tr><td>5</td><td>2012</td><td>0</td><td>2466</td><td></td></tr>
<tr><td>6</td><td>2016</td><td>0</td><td>2455</td><td></td></tr>
<tr><td>7</td><td>2017</td><td>0</td><td>2400</td><td></td></tr>
<tr><td>8</td><td>2009</td><td>0</td><td>2348</td><td></td></tr>
<tr><td>9</td><td>2011</td><td>0</td><td>2343</td><td></td></tr>
<tr><td>10</td><td>2010</td><td>0</td><td>2302</td><td></td></tr>

<tr><td colspan="5"><b>Less Shots Against In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2008</td><td>0</td><td>2195</td><td></td></tr>
<tr><td>2</td><td>2014</td><td>0</td><td>2283</td><td></td></tr>
<tr><td>3</td><td>2010</td><td>0</td><td>2302</td><td></td></tr>
<tr><td>4</td><td>2011</td><td>0</td><td>2343</td><td></td></tr>
<tr><td>5</td><td>2009</td><td>0</td><td>2348</td><td></td></tr>
<tr><td>6</td><td>2012</td><td>0</td><td>2466</td><td></td></tr>

<tr><td colspan="5"><b>Most Pim In 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2011</td><td>1115</td><td>74</td><td></td></tr><tr><td>2</td><td>2009</td><td>184</td><td>65</td><td></td></tr><tr><td>3</td><td>2019</td><td>331</td><td>65</td><td><a href="OTHL-331.html">Game Direct Link</a></td></tr><tr><td>4</td><td>2012</td><td>945</td><td>64</td><td></td></tr><tr><td>5</td><td>2011</td><td>822</td><td>63</td><td></td></tr><tr><td>6</td><td>2011</td><td>295</td><td>57</td><td></td></tr><tr><td>7</td><td>2012</td><td>877</td><td>55</td><td></td></tr><tr><td>8</td><td>2013</td><td>1</td><td>53</td><td></td></tr><tr><td>9</td><td>2017</td><td>64</td><td>51</td><td></td></tr><tr><td>10</td><td>2010</td><td>641</td><td>50</td><td></td></tr>
<tr><td colspan="5"><b>Most Pim In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2011</td><td>0</td><td>1512</td><td></td></tr>
<tr><td>2</td><td>2009</td><td>0</td><td>1498</td><td></td></tr>
<tr><td>3</td><td>2010</td><td>0</td><td>1453</td><td></td></tr>
<tr><td>4</td><td>2012</td><td>0</td><td>1227</td><td></td></tr>
<tr><td>5</td><td>2016</td><td>0</td><td>1177</td><td></td></tr>
<tr><td>6</td><td>2008</td><td>0</td><td>1112</td><td></td></tr>
<tr><td>7</td><td>2019</td><td>0</td><td>781</td><td></td></tr>
<tr><td>8</td><td>2018</td><td>0</td><td>638</td><td></td></tr>

<tr><td colspan="5"><b>Less Pim In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2018</td><td>0</td><td>638</td><td></td></tr>
<tr><td>2</td><td>2017</td><td>0</td><td>692</td><td></td></tr>
<tr><td>3</td><td>2019</td><td>0</td><td>781</td><td></td></tr>
<tr><td>4</td><td>2015</td><td>0</td><td>855</td><td></td></tr>
<tr><td>5</td><td>2013</td><td>0</td><td>889</td><td></td></tr>
<tr><td>6</td><td>2014</td><td>0</td><td>890</td><td></td></tr>
<tr><td>7</td><td>2008</td><td>0</td><td>1112</td><td></td></tr>
<tr><td>8</td><td>2016</td><td>0</td><td>1177</td><td></td></tr>
<tr><td>9</td><td>2012</td><td>0</td><td>1227</td><td></td></tr>
<tr><td>10</td><td>2010</td><td>0</td><td>1453</td><td></td></tr>

<tr><td colspan="5"><b>Most Hits In 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2011</td><td>142</td><td>45</td><td></td></tr><tr><td>2</td><td>2011</td><td>878</td><td>41</td><td></td></tr><tr><td>3</td><td>2010</td><td>1172</td><td>37</td><td></td></tr><tr><td>4</td><td>2012</td><td>727</td><td>37</td><td></td></tr><tr><td>5</td><td>2011</td><td>82</td><td>36</td><td></td></tr><tr><td>6</td><td>2012</td><td>272</td><td>36</td><td></td></tr><tr><td>7</td><td>2019</td><td>1240</td><td>36</td><td><a href="OTHL-1240.html">Game Direct Link</a></td></tr><tr><td>8</td><td>2011</td><td>187</td><td>35</td><td></td></tr><tr><td>9</td><td>2011</td><td>412</td><td>35</td><td></td></tr><tr><td>10</td><td>2012</td><td>1012</td><td>35</td><td></td></tr>
<tr><td colspan="5"><b>Most Hits In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2011</td><td>0</td><td>2033</td><td></td></tr>
<tr><td>2</td><td>2012</td><td>0</td><td>1801</td><td></td></tr>
<tr><td>3</td><td>2016</td><td>0</td><td>1779</td><td></td></tr>
<tr><td>4</td><td>2010</td><td>0</td><td>1751</td><td></td></tr>
<tr><td>5</td><td>2019</td><td>0</td><td>1739</td><td></td></tr>
<tr><td>6</td><td>2015</td><td>0</td><td>1722</td><td></td></tr>
<tr><td>7</td><td>2018</td><td>0</td><td>1633</td><td></td></tr>
<tr><td>8</td><td>2014</td><td>0</td><td>1632</td><td></td></tr>
<tr><td>9</td><td>2009</td><td>0</td><td>1620</td><td></td></tr>
<tr><td>10</td><td>2013</td><td>0</td><td>1577</td><td></td></tr>

<tr><td colspan="5"><b>Less Hit In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2008</td><td>0</td><td>1497</td><td></td></tr>
<tr><td>2</td><td>2017</td><td>0</td><td>1571</td><td></td></tr>
<tr><td>3</td><td>2013</td><td>0</td><td>1577</td><td></td></tr>
<tr><td>4</td><td>2009</td><td>0</td><td>1620</td><td></td></tr>
<tr><td>5</td><td>2014</td><td>0</td><td>1632</td><td></td></tr>
<tr><td>6</td><td>2018</td><td>0</td><td>1633</td><td></td></tr>
<tr><td>7</td><td>2015</td><td>0</td><td>1722</td><td></td></tr>
<tr><td>8</td><td>2019</td><td>0</td><td>1739</td><td></td></tr>
<tr><td>9</td><td>2010</td><td>0</td><td>1751</td><td></td></tr>
<tr><td>10</td><td>2012</td><td>0</td><td>1801</td><td></td></tr>

<tr><td colspan="5"><b>Most Empty Net Goal In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2013</td><td>0</td><td>4</td><td></td></tr>
<tr><td>2</td><td>2011</td><td>0</td><td>3</td><td></td></tr>
<tr><td>3</td><td>2015</td><td>0</td><td>3</td><td></td></tr>
<tr><td>4</td><td>2018</td><td>0</td><td>3</td><td></td></tr>
<tr><td>5</td><td>2010</td><td>0</td><td>2</td><td></td></tr>
<tr><td>6</td><td>2017</td><td>0</td><td>2</td><td></td></tr>
<tr><td>7</td><td>2019</td><td>0</td><td>2</td><td></td></tr>
<tr><td>8</td><td>2008</td><td>0</td><td>1</td><td></td></tr>
<tr><td>9</td><td>2012</td><td>0</td><td>1</td><td></td></tr>

<tr><td colspan="5"><b>Best PP In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2019</td><td>0</td><td>20.50%</td><td></td></tr>
<tr><td>2</td><td>2018</td><td>0</td><td>19.20%</td><td></td></tr>
<tr><td>3</td><td>2017</td><td>0</td><td>17.80%</td><td></td></tr>
<tr><td>4</td><td>2010</td><td>0</td><td>17.30%</td><td></td></tr>
<tr><td>5</td><td>2008</td><td>0</td><td>16.90%</td><td></td></tr>
<tr><td>6</td><td>2011</td><td>0</td><td>16.60%</td><td></td></tr>
<tr><td>7</td><td>2009</td><td>0</td><td>15.00%</td><td></td></tr>
<tr><td>8</td><td>2012</td><td>0</td><td>14.60%</td><td></td></tr>

<tr><td colspan="5"><b>Best PK In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2019</td><td>0</td><td>89.60%</td><td></td></tr>
<tr><td>2</td><td>2008</td><td>0</td><td>87.10%</td><td></td></tr>
<tr><td>3</td><td>2014</td><td>0</td><td>84.60%</td><td></td></tr>
<tr><td>4</td><td>2013</td><td>0</td><td>84.00%</td><td></td></tr>
<tr><td>5</td><td>2009</td><td>0</td><td>83.70%</td><td></td></tr>
<tr><td>6</td><td>2010</td><td>0</td><td>82.10%</td><td></td></tr>
<tr><td>7</td><td>2012</td><td>0</td><td>81.60%</td><td></td></tr>
<tr><td>8</td><td>2018</td><td>0</td><td>80.40%</td><td></td></tr>
<tr><td>9</td><td>2011</td><td>0</td><td>78.60%</td><td></td></tr>

<tr><td colspan="5"><b>Worse PP In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2015</td><td>0</td><td>10.50%</td><td></td></tr>
<tr><td>2</td><td>2013</td><td>0</td><td>12.80%</td><td></td></tr>
<tr><td>3</td><td>2014</td><td>0</td><td>13.80%</td><td></td></tr>
<tr><td>4</td><td>2016</td><td>0</td><td>13.90%</td><td></td></tr>
<tr><td>5</td><td>2012</td><td>0</td><td>14.60%</td><td></td></tr>
<tr><td>6</td><td>2009</td><td>0</td><td>15.00%</td><td></td></tr>
<tr><td>7</td><td>2011</td><td>0</td><td>16.60%</td><td></td></tr>
<tr><td>8</td><td>2008</td><td>0</td><td>16.90%</td><td></td></tr>
<tr><td>9</td><td>2010</td><td>0</td><td>17.30%</td><td></td></tr>

<tr><td colspan="5"><b>Worse PK In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2016</td><td>0</td><td>76.70%</td><td></td></tr>
<tr><td>2</td><td>2011</td><td>0</td><td>78.60%</td><td></td></tr>
<tr><td>3</td><td>2015</td><td>0</td><td>79.50%</td><td></td></tr>
<tr><td>4</td><td>2018</td><td>0</td><td>80.40%</td><td></td></tr>
<tr><td>5</td><td>2012</td><td>0</td><td>81.60%</td><td></td></tr>
<tr><td>6</td><td>2017</td><td>0</td><td>81.80%</td><td></td></tr>
<tr><td>7</td><td>2010</td><td>0</td><td>82.10%</td><td></td></tr>
<tr><td>8</td><td>2009</td><td>0</td><td>83.70%</td><td></td></tr>
<tr><td>9</td><td>2013</td><td>0</td><td>84.00%</td><td></td></tr>
<tr><td>10</td><td>2008</td><td>0</td><td>87.10%</td><td></td></tr>

<tr><td colspan="5"><b>Most Win In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2019</td><td>0</td><td>50</td><td></td></tr>
<tr><td>2</td><td>2017</td><td>0</td><td>47</td><td></td></tr>
<tr><td>3</td><td>2008</td><td>0</td><td>41</td><td></td></tr>
<tr><td>4</td><td>2010</td><td>0</td><td>41</td><td></td></tr>
<tr><td>5</td><td>2011</td><td>0</td><td>36</td><td></td></tr>
<tr><td>6</td><td>2018</td><td>0</td><td>36</td><td></td></tr>
<tr><td>7</td><td>2009</td><td>0</td><td>34</td><td></td></tr>
<tr><td>8</td><td>2012</td><td>0</td><td>32</td><td></td></tr>

<tr><td colspan="5"><b>Less Win In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2015</td><td>0</td><td>16</td><td></td></tr>
<tr><td>2</td><td>2016</td><td>0</td><td>26</td><td></td></tr>
<tr><td>3</td><td>2013</td><td>0</td><td>27</td><td></td></tr>
<tr><td>4</td><td>2014</td><td>0</td><td>28</td><td></td></tr>
<tr><td>5</td><td>2012</td><td>0</td><td>32</td><td></td></tr>
<tr><td>6</td><td>2009</td><td>0</td><td>34</td><td></td></tr>
<tr><td>7</td><td>2011</td><td>0</td><td>36</td><td></td></tr>
<tr><td>8</td><td>2018</td><td>0</td><td>36</td><td></td></tr>
<tr><td>9</td><td>2008</td><td>0</td><td>41</td><td></td></tr>
<tr><td>10</td><td>2010</td><td>0</td><td>41</td><td></td></tr>

<tr><td colspan="5"><b>Most Lost In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2015</td><td>0</td><td>66</td><td></td></tr>
<tr><td>2</td><td>2016</td><td>0</td><td>56</td><td></td></tr>
<tr><td>3</td><td>2013</td><td>0</td><td>55</td><td></td></tr>
<tr><td>4</td><td>2014</td><td>0</td><td>54</td><td></td></tr>
<tr><td>5</td><td>2012</td><td>0</td><td>50</td><td></td></tr>
<tr><td>6</td><td>2009</td><td>0</td><td>48</td><td></td></tr>
<tr><td>7</td><td>2011</td><td>0</td><td>46</td><td></td></tr>
<tr><td>8</td><td>2018</td><td>0</td><td>46</td><td></td></tr>
<tr><td>9</td><td>2010</td><td>0</td><td>41</td><td></td></tr>
<tr><td>10</td><td>2019</td><td>0</td><td>32</td><td></td></tr>

<tr><td colspan="5"><b>Less Lost In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2008</td><td>0</td><td>25</td><td></td></tr>
<tr><td>2</td><td>2019</td><td>0</td><td>32</td><td></td></tr>
<tr><td>3</td><td>2017</td><td>0</td><td>35</td><td></td></tr>
<tr><td>4</td><td>2010</td><td>0</td><td>41</td><td></td></tr>
<tr><td>5</td><td>2011</td><td>0</td><td>46</td><td></td></tr>
<tr><td>6</td><td>2018</td><td>0</td><td>46</td><td></td></tr>
<tr><td>7</td><td>2009</td><td>0</td><td>48</td><td></td></tr>
<tr><td>8</td><td>2012</td><td>0</td><td>50</td><td></td></tr>

<tr><td colspan="5"><b>Most Point In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2019</td><td>0</td><td>107</td><td></td></tr>
<tr><td>2</td><td>2008</td><td>0</td><td>105</td><td></td></tr>
<tr><td>3</td><td>2017</td><td>0</td><td>102</td><td></td></tr>
<tr><td>4</td><td>2010</td><td>0</td><td>91</td><td></td></tr>
<tr><td>5</td><td>2011</td><td>0</td><td>79</td><td></td></tr>
<tr><td>6</td><td>2018</td><td>0</td><td>78</td><td></td></tr>
<tr><td>7</td><td>2012</td><td>0</td><td>72</td><td></td></tr>
<tr><td>8</td><td>2009</td><td>0</td><td>69</td><td></td></tr>

<tr><td colspan="5"><b>Less Points In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2015</td><td>0</td><td>39</td><td></td></tr>
<tr><td>2</td><td>2016</td><td>0</td><td>56</td><td></td></tr>
<tr><td>3</td><td>2013</td><td>0</td><td>60</td><td></td></tr>
<tr><td>4</td><td>2014</td><td>0</td><td>66</td><td></td></tr>
<tr><td>5</td><td>2009</td><td>0</td><td>69</td><td></td></tr>
<tr><td>6</td><td>2012</td><td>0</td><td>72</td><td></td></tr>
<tr><td>7</td><td>2018</td><td>0</td><td>78</td><td></td></tr>
<tr><td>8</td><td>2011</td><td>0</td><td>79</td><td></td></tr>
<tr><td>9</td><td>2010</td><td>0</td><td>91</td><td></td></tr>
<tr><td>10</td><td>2008</td><td>0</td><td>105</td><td></td></tr>

<tr><td colspan="5"><b>Most Win Home In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>0</td><td>0</td><td>32000</td><td></td></tr>
<tr><td>2</td><td>0</td><td>0</td><td>32000</td><td></td></tr>

<tr><td colspan="5"><b>Most Win Visitor In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>0</td><td>0</td><td>32000</td><td></td></tr>
<tr><td>2</td><td>0</td><td>0</td><td>32000</td><td></td></tr>

</table></div>
<h1 class="TeamRecordsPro_VAN"><a id="Canucks">Canucks</a></h1>
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
<br /><table class="STHSRecordTable">
<tr><td colspan="5"><b>Most Goals in 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2011</td><td>310</td><td>9</td><td></td></tr><tr><td>2</td><td>2012</td><td>279</td><td>9</td><td></td></tr><tr><td>3</td><td>2010</td><td>835</td><td>8</td><td></td></tr><tr><td>4</td><td>2012</td><td>891</td><td>8</td><td></td></tr><tr><td>5</td><td>2017</td><td>1047</td><td>8</td><td></td></tr><tr><td>6</td><td>2019</td><td>498</td><td>8</td><td><a href="OTHL-498.html">Game Direct Link</a></td></tr><tr><td>7</td><td>2009</td><td>279</td><td>7</td><td></td></tr><tr><td>8</td><td>2009</td><td>1038</td><td>7</td><td></td></tr><tr><td>9</td><td>2011</td><td>258</td><td>7</td><td></td></tr><tr><td>10</td><td>2012</td><td>582</td><td>7</td><td></td></tr>
<tr><td colspan="5"><b>Most Goals in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2019</td><td>0</td><td>269</td><td></td></tr>
<tr><td>2</td><td>2010</td><td>0</td><td>266</td><td></td></tr>
<tr><td>3</td><td>2009</td><td>0</td><td>253</td><td></td></tr>
<tr><td>4</td><td>2018</td><td>0</td><td>220</td><td></td></tr>
<tr><td>5</td><td>2011</td><td>0</td><td>218</td><td></td></tr>
<tr><td>6</td><td>2012</td><td>0</td><td>218</td><td></td></tr>
<tr><td>7</td><td>2008</td><td>0</td><td>212</td><td></td></tr>

<tr><td colspan="5"><b>Less Goal in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2015</td><td>0</td><td>163</td><td></td></tr>
<tr><td>2</td><td>2016</td><td>0</td><td>181</td><td></td></tr>
<tr><td>3</td><td>2014</td><td>0</td><td>192</td><td></td></tr>
<tr><td>4</td><td>2013</td><td>0</td><td>196</td><td></td></tr>
<tr><td>5</td><td>2017</td><td>0</td><td>206</td><td></td></tr>
<tr><td>6</td><td>2008</td><td>0</td><td>212</td><td></td></tr>
<tr><td>7</td><td>2011</td><td>0</td><td>218</td><td></td></tr>
<tr><td>8</td><td>2012</td><td>0</td><td>218</td><td></td></tr>
<tr><td>9</td><td>2018</td><td>0</td><td>220</td><td></td></tr>
<tr><td>10</td><td>2009</td><td>0</td><td>253</td><td></td></tr>

<tr><td colspan="5"><b>Most Goals Against in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2016</td><td>0</td><td>293</td><td></td></tr>
<tr><td>2</td><td>2015</td><td>0</td><td>280</td><td></td></tr>
<tr><td>3</td><td>2008</td><td>0</td><td>270</td><td></td></tr>
<tr><td>4</td><td>2012</td><td>0</td><td>257</td><td></td></tr>
<tr><td>5</td><td>2009</td><td>0</td><td>239</td><td></td></tr>
<tr><td>6</td><td>2013</td><td>0</td><td>239</td><td></td></tr>
<tr><td>7</td><td>2014</td><td>0</td><td>235</td><td></td></tr>
<tr><td>8</td><td>2018</td><td>0</td><td>235</td><td></td></tr>
<tr><td>9</td><td>2019</td><td>0</td><td>229</td><td></td></tr>
<tr><td>10</td><td>2010</td><td>0</td><td>213</td><td></td></tr>

<tr><td colspan="5"><b>Less Goal Against in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2011</td><td>0</td><td>210</td><td></td></tr>
<tr><td>2</td><td>2010</td><td>0</td><td>213</td><td></td></tr>
<tr><td>3</td><td>2019</td><td>0</td><td>229</td><td></td></tr>
<tr><td>4</td><td>2014</td><td>0</td><td>235</td><td></td></tr>
<tr><td>5</td><td>2017</td><td>0</td><td>235</td><td></td></tr>
<tr><td>6</td><td>2018</td><td>0</td><td>235</td><td></td></tr>
<tr><td>7</td><td>2009</td><td>0</td><td>239</td><td></td></tr>
<tr><td>8</td><td>2013</td><td>0</td><td>239</td><td></td></tr>
<tr><td>9</td><td>2012</td><td>0</td><td>257</td><td></td></tr>
<tr><td>10</td><td>2008</td><td>0</td><td>270</td><td></td></tr>

<tr><td colspan="5"><b>Most Assists in 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2011</td><td>310</td><td>16</td><td></td></tr><tr><td>2</td><td>2012</td><td>279</td><td>16</td><td></td></tr><tr><td>3</td><td>2019</td><td>498</td><td>15</td><td><a href="OTHL-498.html">Game Direct Link</a></td></tr><tr><td>4</td><td>2009</td><td>1038</td><td>14</td><td></td></tr><tr><td>5</td><td>2010</td><td>835</td><td>14</td><td></td></tr><tr><td>6</td><td>2012</td><td>891</td><td>14</td><td></td></tr><tr><td>7</td><td>2017</td><td>1047</td><td>14</td><td></td></tr><tr><td>8</td><td>2009</td><td>279</td><td>13</td><td></td></tr><tr><td>9</td><td>2012</td><td>582</td><td>13</td><td></td></tr><tr><td>10</td><td>2013</td><td>30</td><td>13</td><td></td></tr>
<tr><td colspan="5"><b>Most Assists in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2019</td><td>0</td><td>475</td><td></td></tr>
<tr><td>2</td><td>2010</td><td>0</td><td>471</td><td></td></tr>
<tr><td>3</td><td>2009</td><td>0</td><td>462</td><td></td></tr>
<tr><td>4</td><td>2018</td><td>0</td><td>386</td><td></td></tr>
<tr><td>5</td><td>2012</td><td>0</td><td>382</td><td></td></tr>
<tr><td>6</td><td>2008</td><td>0</td><td>373</td><td></td></tr>
<tr><td>7</td><td>2017</td><td>0</td><td>362</td><td></td></tr>
<tr><td>8</td><td>2013</td><td>0</td><td>346</td><td></td></tr>
<tr><td>9</td><td>2011</td><td>0</td><td>342</td><td></td></tr>

<tr><td colspan="5"><b>Less Assist in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2015</td><td>0</td><td>267</td><td></td></tr>
<tr><td>2</td><td>2016</td><td>0</td><td>319</td><td></td></tr>
<tr><td>3</td><td>2014</td><td>0</td><td>338</td><td></td></tr>
<tr><td>4</td><td>2011</td><td>0</td><td>342</td><td></td></tr>
<tr><td>5</td><td>2013</td><td>0</td><td>346</td><td></td></tr>
<tr><td>6</td><td>2008</td><td>0</td><td>373</td><td></td></tr>
<tr><td>7</td><td>2012</td><td>0</td><td>382</td><td></td></tr>
<tr><td>8</td><td>2018</td><td>0</td><td>386</td><td></td></tr>
<tr><td>9</td><td>2009</td><td>0</td><td>462</td><td></td></tr>
<tr><td>10</td><td>2010</td><td>0</td><td>471</td><td></td></tr>

<tr><td colspan="5"><b>Most Game Points in 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2011</td><td>310</td><td>25</td><td></td></tr><tr><td>2</td><td>2012</td><td>279</td><td>25</td><td></td></tr><tr><td>3</td><td>2019</td><td>498</td><td>23</td><td><a href="OTHL-498.html">Game Direct Link</a></td></tr><tr><td>4</td><td>2010</td><td>835</td><td>22</td><td></td></tr><tr><td>5</td><td>2012</td><td>891</td><td>22</td><td></td></tr><tr><td>6</td><td>2017</td><td>1047</td><td>22</td><td></td></tr><tr><td>7</td><td>2009</td><td>1038</td><td>21</td><td></td></tr><tr><td>8</td><td>2009</td><td>279</td><td>20</td><td></td></tr><tr><td>9</td><td>2012</td><td>582</td><td>20</td><td></td></tr><tr><td>10</td><td>2013</td><td>30</td><td>20</td><td></td></tr>
<tr><td colspan="5"><b>Most Game Points in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>0</td><td>0</td><td>32000</td><td></td></tr>
<tr><td>2</td><td>0</td><td>0</td><td>32000</td><td></td></tr>

<tr><td colspan="5"><b>Less Game Point In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2015</td><td>0</td><td>430</td><td></td></tr>
<tr><td>2</td><td>2016</td><td>0</td><td>500</td><td></td></tr>
<tr><td>3</td><td>2014</td><td>0</td><td>530</td><td></td></tr>
<tr><td>4</td><td>2013</td><td>0</td><td>542</td><td></td></tr>
<tr><td>5</td><td>2011</td><td>0</td><td>560</td><td></td></tr>
<tr><td>6</td><td>2008</td><td>0</td><td>585</td><td></td></tr>
<tr><td>7</td><td>2012</td><td>0</td><td>600</td><td></td></tr>
<tr><td>8</td><td>2018</td><td>0</td><td>606</td><td></td></tr>
<tr><td>9</td><td>2009</td><td>0</td><td>715</td><td></td></tr>
<tr><td>10</td><td>2010</td><td>0</td><td>737</td><td></td></tr>

<tr><td colspan="5"><b>Most Shots In 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2019</td><td>498</td><td>69</td><td><a href="OTHL-498.html">Game Direct Link</a></td></tr><tr><td>2</td><td>2019</td><td>1012</td><td>57</td><td><a href="OTHL-1012.html">Game Direct Link</a></td></tr><tr><td>3</td><td>2019</td><td>1146</td><td>53</td><td><a href="OTHL-1146.html">Game Direct Link</a></td></tr><tr><td>4</td><td>2016</td><td>504</td><td>52</td><td></td></tr><tr><td>5</td><td>2019</td><td>313</td><td>52</td><td><a href="OTHL-313.html">Game Direct Link</a></td></tr><tr><td>6</td><td>2010</td><td>142</td><td>50</td><td></td></tr><tr><td>7</td><td>2018</td><td>807</td><td>49</td><td></td></tr><tr><td>8</td><td>2019</td><td>1065</td><td>47</td><td><a href="OTHL-1065.html">Game Direct Link</a></td></tr><tr><td>9</td><td>2009</td><td>1221</td><td>46</td><td></td></tr><tr><td>10</td><td>2017</td><td>85</td><td>46</td><td></td></tr>
<tr><td colspan="5"><b>Most Shots In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2019</td><td>0</td><td>2848</td><td></td></tr>
<tr><td>2</td><td>2018</td><td>0</td><td>2637</td><td></td></tr>
<tr><td>3</td><td>2010</td><td>0</td><td>2391</td><td></td></tr>
<tr><td>4</td><td>2017</td><td>0</td><td>2356</td><td></td></tr>
<tr><td>5</td><td>2011</td><td>0</td><td>2306</td><td></td></tr>
<tr><td>6</td><td>2009</td><td>0</td><td>2228</td><td></td></tr>
<tr><td>7</td><td>2012</td><td>0</td><td>2151</td><td></td></tr>
<tr><td>8</td><td>2008</td><td>0</td><td>2145</td><td></td></tr>

<tr><td colspan="5"><b>Less Shots In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2016</td><td>0</td><td>1891</td><td></td></tr>
<tr><td>2</td><td>2015</td><td>0</td><td>1969</td><td></td></tr>
<tr><td>3</td><td>2014</td><td>0</td><td>2104</td><td></td></tr>
<tr><td>4</td><td>2013</td><td>0</td><td>2135</td><td></td></tr>
<tr><td>5</td><td>2008</td><td>0</td><td>2145</td><td></td></tr>
<tr><td>6</td><td>2012</td><td>0</td><td>2151</td><td></td></tr>
<tr><td>7</td><td>2009</td><td>0</td><td>2228</td><td></td></tr>
<tr><td>8</td><td>2011</td><td>0</td><td>2306</td><td></td></tr>
<tr><td>9</td><td>2010</td><td>0</td><td>2391</td><td></td></tr>

<tr><td colspan="5"><b>Most Shots Blocked In 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2016</td><td>829</td><td>23</td><td></td></tr><tr><td>2</td><td>2008</td><td>657</td><td>22</td><td></td></tr><tr><td>3</td><td>2014</td><td>895</td><td>21</td><td></td></tr><tr><td>4</td><td>2018</td><td>1195</td><td>21</td><td></td></tr><tr><td>5</td><td>2011</td><td>850</td><td>20</td><td></td></tr><tr><td>6</td><td>2017</td><td>383</td><td>20</td><td></td></tr><tr><td>7</td><td>2018</td><td>849</td><td>20</td><td></td></tr><tr><td>8</td><td>2008</td><td>1186</td><td>19</td><td></td></tr><tr><td>9</td><td>2015</td><td>1131</td><td>19</td><td></td></tr><tr><td>10</td><td>2008</td><td>1047</td><td>18</td><td></td></tr>
<tr><td colspan="5"><b>Most Shots Blocked In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>0</td><td>0</td><td>32000</td><td></td></tr>
<tr><td>2</td><td>0</td><td>0</td><td>32000</td><td></td></tr>

<tr><td colspan="5"><b>Less Shots Block In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2012</td><td>0</td><td>627</td><td></td></tr>
<tr><td>2</td><td>2009</td><td>0</td><td>635</td><td></td></tr>
<tr><td>3</td><td>2014</td><td>0</td><td>663</td><td></td></tr>
<tr><td>4</td><td>2010</td><td>0</td><td>670</td><td></td></tr>
<tr><td>5</td><td>2013</td><td>0</td><td>673</td><td></td></tr>
<tr><td>6</td><td>2019</td><td>0</td><td>700</td><td></td></tr>
<tr><td>7</td><td>2008</td><td>0</td><td>738</td><td></td></tr>
<tr><td>8</td><td>2018</td><td>0</td><td>814</td><td></td></tr>
<tr><td>9</td><td>2011</td><td>0</td><td>855</td><td></td></tr>

<tr><td colspan="5"><b>Most Shots Against In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2017</td><td>0</td><td>2741</td><td></td></tr>
<tr><td>2</td><td>2018</td><td>0</td><td>2682</td><td></td></tr>
<tr><td>3</td><td>2016</td><td>0</td><td>2607</td><td></td></tr>
<tr><td>4</td><td>2019</td><td>0</td><td>2578</td><td></td></tr>
<tr><td>5</td><td>2015</td><td>0</td><td>2526</td><td></td></tr>
<tr><td>6</td><td>2008</td><td>0</td><td>2483</td><td></td></tr>
<tr><td>7</td><td>2011</td><td>0</td><td>2436</td><td></td></tr>
<tr><td>8</td><td>2013</td><td>0</td><td>2373</td><td></td></tr>
<tr><td>9</td><td>2014</td><td>0</td><td>2365</td><td></td></tr>
<tr><td>10</td><td>2009</td><td>0</td><td>2288</td><td></td></tr>

<tr><td colspan="5"><b>Less Shots Against In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2012</td><td>0</td><td>2217</td><td></td></tr>
<tr><td>2</td><td>2010</td><td>0</td><td>2267</td><td></td></tr>
<tr><td>3</td><td>2009</td><td>0</td><td>2288</td><td></td></tr>
<tr><td>4</td><td>2014</td><td>0</td><td>2365</td><td></td></tr>
<tr><td>5</td><td>2013</td><td>0</td><td>2373</td><td></td></tr>
<tr><td>6</td><td>2011</td><td>0</td><td>2436</td><td></td></tr>
<tr><td>7</td><td>2008</td><td>0</td><td>2483</td><td></td></tr>

<tr><td colspan="5"><b>Most Pim In 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2015</td><td>873</td><td>77</td><td></td></tr><tr><td>2</td><td>2011</td><td>1168</td><td>57</td><td></td></tr><tr><td>3</td><td>2010</td><td>260</td><td>54</td><td></td></tr><tr><td>4</td><td>2015</td><td>28</td><td>49</td><td></td></tr><tr><td>5</td><td>2013</td><td>1228</td><td>45</td><td></td></tr><tr><td>6</td><td>2015</td><td>1212</td><td>41</td><td></td></tr><tr><td>7</td><td>2011</td><td>412</td><td>40</td><td></td></tr><tr><td>8</td><td>2010</td><td>780</td><td>39</td><td></td></tr><tr><td>9</td><td>2012</td><td>1091</td><td>39</td><td></td></tr><tr><td>10</td><td>2009</td><td>223</td><td>38</td><td></td></tr>
<tr><td colspan="5"><b>Most Pim In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2010</td><td>0</td><td>1249</td><td></td></tr>
<tr><td>2</td><td>2008</td><td>0</td><td>1187</td><td></td></tr>
<tr><td>3</td><td>2011</td><td>0</td><td>1125</td><td></td></tr>
<tr><td>4</td><td>2009</td><td>0</td><td>1086</td><td></td></tr>
<tr><td>5</td><td>2015</td><td>0</td><td>985</td><td></td></tr>
<tr><td>6</td><td>2013</td><td>0</td><td>874</td><td></td></tr>
<tr><td>7</td><td>2012</td><td>0</td><td>776</td><td></td></tr>
<tr><td>8</td><td>2018</td><td>0</td><td>686</td><td></td></tr>
<tr><td>9</td><td>2019</td><td>0</td><td>675</td><td></td></tr>

<tr><td colspan="5"><b>Less Pim In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2017</td><td>0</td><td>577</td><td></td></tr>
<tr><td>2</td><td>2019</td><td>0</td><td>675</td><td></td></tr>
<tr><td>3</td><td>2018</td><td>0</td><td>686</td><td></td></tr>
<tr><td>4</td><td>2012</td><td>0</td><td>776</td><td></td></tr>
<tr><td>5</td><td>2014</td><td>0</td><td>851</td><td></td></tr>
<tr><td>6</td><td>2013</td><td>0</td><td>874</td><td></td></tr>
<tr><td>7</td><td>2016</td><td>0</td><td>908</td><td></td></tr>
<tr><td>8</td><td>2015</td><td>0</td><td>985</td><td></td></tr>
<tr><td>9</td><td>2009</td><td>0</td><td>1086</td><td></td></tr>
<tr><td>10</td><td>2011</td><td>0</td><td>1125</td><td></td></tr>

<tr><td colspan="5"><b>Most Hits In 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2011</td><td>36</td><td>39</td><td></td></tr><tr><td>2</td><td>2011</td><td>325</td><td>35</td><td></td></tr><tr><td>3</td><td>2014</td><td>622</td><td>35</td><td></td></tr><tr><td>4</td><td>2019</td><td>159</td><td>34</td><td><a href="OTHL-159.html">Game Direct Link</a></td></tr><tr><td>5</td><td>2011</td><td>400</td><td>33</td><td></td></tr><tr><td>6</td><td>2013</td><td>437</td><td>33</td><td></td></tr><tr><td>7</td><td>2013</td><td>350</td><td>32</td><td></td></tr><tr><td>8</td><td>2013</td><td>961</td><td>32</td><td></td></tr><tr><td>9</td><td>2014</td><td>31</td><td>32</td><td></td></tr><tr><td>10</td><td>2016</td><td>340</td><td>32</td><td></td></tr>
<tr><td colspan="5"><b>Most Hits In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2011</td><td>0</td><td>1825</td><td></td></tr>
<tr><td>2</td><td>2016</td><td>0</td><td>1795</td><td></td></tr>
<tr><td>3</td><td>2015</td><td>0</td><td>1760</td><td></td></tr>
<tr><td>4</td><td>2018</td><td>0</td><td>1690</td><td></td></tr>
<tr><td>5</td><td>2019</td><td>0</td><td>1682</td><td></td></tr>
<tr><td>6</td><td>2013</td><td>0</td><td>1671</td><td></td></tr>
<tr><td>7</td><td>2012</td><td>0</td><td>1639</td><td></td></tr>
<tr><td>8</td><td>2014</td><td>0</td><td>1637</td><td></td></tr>
<tr><td>9</td><td>2008</td><td>0</td><td>1529</td><td></td></tr>
<tr><td>10</td><td>2010</td><td>0</td><td>1493</td><td></td></tr>

<tr><td colspan="5"><b>Less Hit In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2009</td><td>0</td><td>1445</td><td></td></tr>
<tr><td>2</td><td>2010</td><td>0</td><td>1493</td><td></td></tr>
<tr><td>3</td><td>2008</td><td>0</td><td>1529</td><td></td></tr>
<tr><td>4</td><td>2017</td><td>0</td><td>1572</td><td></td></tr>
<tr><td>5</td><td>2014</td><td>0</td><td>1637</td><td></td></tr>
<tr><td>6</td><td>2012</td><td>0</td><td>1639</td><td></td></tr>
<tr><td>7</td><td>2013</td><td>0</td><td>1671</td><td></td></tr>
<tr><td>8</td><td>2019</td><td>0</td><td>1682</td><td></td></tr>
<tr><td>9</td><td>2018</td><td>0</td><td>1690</td><td></td></tr>
<tr><td>10</td><td>2011</td><td>0</td><td>1825</td><td></td></tr>

<tr><td colspan="5"><b>Most Empty Net Goal In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2019</td><td>0</td><td>6</td><td></td></tr>
<tr><td>2</td><td>2013</td><td>0</td><td>5</td><td></td></tr>
<tr><td>3</td><td>2008</td><td>0</td><td>3</td><td></td></tr>
<tr><td>4</td><td>2011</td><td>0</td><td>3</td><td></td></tr>
<tr><td>5</td><td>2016</td><td>0</td><td>3</td><td></td></tr>
<tr><td>6</td><td>2014</td><td>0</td><td>2</td><td></td></tr>
<tr><td>7</td><td>2015</td><td>0</td><td>2</td><td></td></tr>
<tr><td>8</td><td>2009</td><td>0</td><td>1</td><td></td></tr>

<tr><td colspan="5"><b>Best PP In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2019</td><td>0</td><td>21.30%</td><td></td></tr>
<tr><td>2</td><td>2010</td><td>0</td><td>18.70%</td><td></td></tr>
<tr><td>3</td><td>2009</td><td>0</td><td>18.00%</td><td></td></tr>
<tr><td>4</td><td>2017</td><td>0</td><td>17.90%</td><td></td></tr>
<tr><td>5</td><td>2011</td><td>0</td><td>16.80%</td><td></td></tr>
<tr><td>6</td><td>2018</td><td>0</td><td>15.80%</td><td></td></tr>
<tr><td>7</td><td>2008</td><td>0</td><td>15.10%</td><td></td></tr>
<tr><td>8</td><td>2016</td><td>0</td><td>15.00%</td><td></td></tr>
<tr><td>9</td><td>2014</td><td>0</td><td>14.00%</td><td></td></tr>
<tr><td>10</td><td>2012</td><td>0</td><td>13.50%</td><td></td></tr>

<tr><td colspan="5"><b>Best PK In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2017</td><td>0</td><td>88.10%</td><td></td></tr>
<tr><td>2</td><td>2010</td><td>0</td><td>84.00%</td><td></td></tr>
<tr><td>3</td><td>2013</td><td>0</td><td>83.80%</td><td></td></tr>
<tr><td>4</td><td>2018</td><td>0</td><td>83.80%</td><td></td></tr>
<tr><td>5</td><td>2009</td><td>0</td><td>83.10%</td><td></td></tr>
<tr><td>6</td><td>2008</td><td>0</td><td>82.30%</td><td></td></tr>
<tr><td>7</td><td>2014</td><td>0</td><td>81.40%</td><td></td></tr>
<tr><td>8</td><td>2012</td><td>0</td><td>80.40%</td><td></td></tr>
<tr><td>9</td><td>2019</td><td>0</td><td>79.40%</td><td></td></tr>
<tr><td>10</td><td>2011</td><td>0</td><td>78.90%</td><td></td></tr>

<tr><td colspan="5"><b>Worse PP In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2015</td><td>0</td><td>11.50%</td><td></td></tr>
<tr><td>2</td><td>2013</td><td>0</td><td>12.90%</td><td></td></tr>
<tr><td>3</td><td>2012</td><td>0</td><td>13.50%</td><td></td></tr>
<tr><td>4</td><td>2014</td><td>0</td><td>14.00%</td><td></td></tr>
<tr><td>5</td><td>2016</td><td>0</td><td>15.00%</td><td></td></tr>
<tr><td>6</td><td>2008</td><td>0</td><td>15.10%</td><td></td></tr>
<tr><td>7</td><td>2018</td><td>0</td><td>15.80%</td><td></td></tr>
<tr><td>8</td><td>2011</td><td>0</td><td>16.80%</td><td></td></tr>
<tr><td>9</td><td>2009</td><td>0</td><td>18.00%</td><td></td></tr>
<tr><td>10</td><td>2010</td><td>0</td><td>18.70%</td><td></td></tr>

<tr><td colspan="5"><b>Worse PK In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2015</td><td>0</td><td>77.20%</td><td></td></tr>
<tr><td>2</td><td>2011</td><td>0</td><td>78.90%</td><td></td></tr>
<tr><td>3</td><td>2019</td><td>0</td><td>79.40%</td><td></td></tr>
<tr><td>4</td><td>2016</td><td>0</td><td>80.10%</td><td></td></tr>
<tr><td>5</td><td>2012</td><td>0</td><td>80.40%</td><td></td></tr>
<tr><td>6</td><td>2014</td><td>0</td><td>81.40%</td><td></td></tr>
<tr><td>7</td><td>2008</td><td>0</td><td>82.30%</td><td></td></tr>
<tr><td>8</td><td>2009</td><td>0</td><td>83.10%</td><td></td></tr>
<tr><td>9</td><td>2013</td><td>0</td><td>83.80%</td><td></td></tr>
<tr><td>10</td><td>2018</td><td>0</td><td>83.80%</td><td></td></tr>

<tr><td colspan="5"><b>Most Win In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2010</td><td>0</td><td>55</td><td></td></tr>
<tr><td>2</td><td>2009</td><td>0</td><td>46</td><td></td></tr>
<tr><td>3</td><td>2019</td><td>0</td><td>46</td><td></td></tr>
<tr><td>4</td><td>2018</td><td>0</td><td>40</td><td></td></tr>
<tr><td>5</td><td>2011</td><td>0</td><td>39</td><td></td></tr>
<tr><td>6</td><td>2012</td><td>0</td><td>35</td><td></td></tr>
<tr><td>7</td><td>2017</td><td>0</td><td>34</td><td></td></tr>
<tr><td>8</td><td>2014</td><td>0</td><td>32</td><td></td></tr>
<tr><td>9</td><td>2013</td><td>0</td><td>28</td><td></td></tr>
<tr><td>10</td><td>2008</td><td>0</td><td>26</td><td></td></tr>

<tr><td colspan="5"><b>Less Win In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2016</td><td>0</td><td>22</td><td></td></tr>
<tr><td>2</td><td>2015</td><td>0</td><td>23</td><td></td></tr>
<tr><td>3</td><td>2008</td><td>0</td><td>26</td><td></td></tr>
<tr><td>4</td><td>2013</td><td>0</td><td>28</td><td></td></tr>
<tr><td>5</td><td>2014</td><td>0</td><td>32</td><td></td></tr>
<tr><td>6</td><td>2012</td><td>0</td><td>35</td><td></td></tr>
<tr><td>7</td><td>2011</td><td>0</td><td>39</td><td></td></tr>
<tr><td>8</td><td>2018</td><td>0</td><td>40</td><td></td></tr>
<tr><td>9</td><td>2009</td><td>0</td><td>46</td><td></td></tr>
<tr><td>10</td><td>2019</td><td>0</td><td>46</td><td></td></tr>

<tr><td colspan="5"><b>Most Lost In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2016</td><td>0</td><td>60</td><td></td></tr>
<tr><td>2</td><td>2015</td><td>0</td><td>59</td><td></td></tr>
<tr><td>3</td><td>2013</td><td>0</td><td>54</td><td></td></tr>
<tr><td>4</td><td>2014</td><td>0</td><td>50</td><td></td></tr>
<tr><td>5</td><td>2017</td><td>0</td><td>48</td><td></td></tr>
<tr><td>6</td><td>2012</td><td>0</td><td>47</td><td></td></tr>
<tr><td>7</td><td>2011</td><td>0</td><td>43</td><td></td></tr>
<tr><td>8</td><td>2018</td><td>0</td><td>42</td><td></td></tr>
<tr><td>9</td><td>2008</td><td>0</td><td>41</td><td></td></tr>
<tr><td>10</td><td>2009</td><td>0</td><td>36</td><td></td></tr>

<tr><td colspan="5"><b>Less Lost In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2010</td><td>0</td><td>27</td><td></td></tr>
<tr><td>2</td><td>2009</td><td>0</td><td>36</td><td></td></tr>
<tr><td>3</td><td>2019</td><td>0</td><td>36</td><td></td></tr>
<tr><td>4</td><td>2008</td><td>0</td><td>41</td><td></td></tr>
<tr><td>5</td><td>2018</td><td>0</td><td>42</td><td></td></tr>
<tr><td>6</td><td>2011</td><td>0</td><td>43</td><td></td></tr>
<tr><td>7</td><td>2012</td><td>0</td><td>47</td><td></td></tr>

<tr><td colspan="5"><b>Most Point In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2010</td><td>0</td><td>115</td><td></td></tr>
<tr><td>2</td><td>2009</td><td>0</td><td>98</td><td></td></tr>
<tr><td>3</td><td>2019</td><td>0</td><td>96</td><td></td></tr>
<tr><td>4</td><td>2011</td><td>0</td><td>88</td><td></td></tr>
<tr><td>5</td><td>2018</td><td>0</td><td>85</td><td></td></tr>
<tr><td>6</td><td>2017</td><td>0</td><td>78</td><td></td></tr>
<tr><td>7</td><td>2012</td><td>0</td><td>76</td><td></td></tr>
<tr><td>8</td><td>2008</td><td>0</td><td>71</td><td></td></tr>

<tr><td colspan="5"><b>Less Points In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2016</td><td>0</td><td>48</td><td></td></tr>
<tr><td>2</td><td>2015</td><td>0</td><td>52</td><td></td></tr>
<tr><td>3</td><td>2013</td><td>0</td><td>67</td><td></td></tr>
<tr><td>4</td><td>2014</td><td>0</td><td>69</td><td></td></tr>
<tr><td>5</td><td>2008</td><td>0</td><td>71</td><td></td></tr>
<tr><td>6</td><td>2012</td><td>0</td><td>76</td><td></td></tr>
<tr><td>7</td><td>2018</td><td>0</td><td>85</td><td></td></tr>
<tr><td>8</td><td>2011</td><td>0</td><td>88</td><td></td></tr>
<tr><td>9</td><td>2019</td><td>0</td><td>96</td><td></td></tr>
<tr><td>10</td><td>2009</td><td>0</td><td>98</td><td></td></tr>

<tr><td colspan="5"><b>Most Win Home In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>0</td><td>0</td><td>32000</td><td></td></tr>
<tr><td>2</td><td>0</td><td>0</td><td>32000</td><td></td></tr>

<tr><td colspan="5"><b>Most Win Visitor In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>0</td><td>0</td><td>32000</td><td></td></tr>
<tr><td>2</td><td>0</td><td>0</td><td>32000</td><td></td></tr>

</table></div>
<h1 class="TeamRecordsPro_WSH"><a id="Capitals">Capitals</a></h1>
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
<br /><table class="STHSRecordTable">
<tr><td colspan="5"><b>Most Goals in 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2008</td><td>218</td><td>9</td><td></td></tr><tr><td>2</td><td>2016</td><td>1079</td><td>9</td><td></td></tr><tr><td>3</td><td>2019</td><td>1038</td><td>9</td><td><a href="OTHL-1038.html">Game Direct Link</a></td></tr><tr><td>4</td><td>2008</td><td>239</td><td>7</td><td></td></tr><tr><td>5</td><td>2008</td><td>1170</td><td>7</td><td></td></tr><tr><td>6</td><td>2010</td><td>757</td><td>7</td><td></td></tr><tr><td>7</td><td>2010</td><td>817</td><td>7</td><td></td></tr><tr><td>8</td><td>2011</td><td>458</td><td>7</td><td></td></tr><tr><td>9</td><td>2012</td><td>149</td><td>7</td><td></td></tr><tr><td>10</td><td>2016</td><td>28</td><td>7</td><td></td></tr>
<tr><td colspan="5"><b>Most Goals in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2010</td><td>0</td><td>256</td><td></td></tr>
<tr><td>2</td><td>2016</td><td>0</td><td>253</td><td></td></tr>
<tr><td>3</td><td>2009</td><td>0</td><td>247</td><td></td></tr>
<tr><td>4</td><td>2017</td><td>0</td><td>240</td><td></td></tr>
<tr><td>5</td><td>2019</td><td>0</td><td>237</td><td></td></tr>
<tr><td>6</td><td>2018</td><td>0</td><td>234</td><td></td></tr>
<tr><td>7</td><td>2008</td><td>0</td><td>232</td><td></td></tr>
<tr><td>8</td><td>2015</td><td>0</td><td>232</td><td></td></tr>
<tr><td>9</td><td>2011</td><td>0</td><td>212</td><td></td></tr>
<tr><td>10</td><td>2012</td><td>0</td><td>212</td><td></td></tr>

<tr><td colspan="5"><b>Less Goal in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2014</td><td>0</td><td>140</td><td></td></tr>
<tr><td>2</td><td>2013</td><td>0</td><td>198</td><td></td></tr>
<tr><td>3</td><td>2011</td><td>0</td><td>212</td><td></td></tr>
<tr><td>4</td><td>2012</td><td>0</td><td>212</td><td></td></tr>
<tr><td>5</td><td>2008</td><td>0</td><td>232</td><td></td></tr>
<tr><td>6</td><td>2018</td><td>0</td><td>234</td><td></td></tr>
<tr><td>7</td><td>2019</td><td>0</td><td>237</td><td></td></tr>
<tr><td>8</td><td>2009</td><td>0</td><td>247</td><td></td></tr>
<tr><td>9</td><td>2010</td><td>0</td><td>256</td><td></td></tr>

<tr><td colspan="5"><b>Most Goals Against in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2009</td><td>0</td><td>270</td><td></td></tr>
<tr><td>2</td><td>2008</td><td>0</td><td>267</td><td></td></tr>
<tr><td>3</td><td>2012</td><td>0</td><td>258</td><td></td></tr>
<tr><td>4</td><td>2014</td><td>0</td><td>253</td><td></td></tr>
<tr><td>5</td><td>2010</td><td>0</td><td>238</td><td></td></tr>
<tr><td>6</td><td>2011</td><td>0</td><td>227</td><td></td></tr>
<tr><td>7</td><td>2018</td><td>0</td><td>218</td><td></td></tr>
<tr><td>8</td><td>2019</td><td>0</td><td>202</td><td></td></tr>

<tr><td colspan="5"><b>Less Goal Against in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2015</td><td>0</td><td>186</td><td></td></tr>
<tr><td>2</td><td>2017</td><td>0</td><td>202</td><td></td></tr>
<tr><td>3</td><td>2019</td><td>0</td><td>202</td><td></td></tr>
<tr><td>4</td><td>2018</td><td>0</td><td>218</td><td></td></tr>
<tr><td>5</td><td>2013</td><td>0</td><td>220</td><td></td></tr>
<tr><td>6</td><td>2011</td><td>0</td><td>227</td><td></td></tr>
<tr><td>7</td><td>2016</td><td>0</td><td>235</td><td></td></tr>
<tr><td>8</td><td>2010</td><td>0</td><td>238</td><td></td></tr>
<tr><td>9</td><td>2014</td><td>0</td><td>253</td><td></td></tr>
<tr><td>10</td><td>2012</td><td>0</td><td>258</td><td></td></tr>

<tr><td colspan="5"><b>Most Assists in 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2016</td><td>1079</td><td>17</td><td></td></tr><tr><td>2</td><td>2019</td><td>1038</td><td>17</td><td><a href="OTHL-1038.html">Game Direct Link</a></td></tr><tr><td>3</td><td>2008</td><td>218</td><td>15</td><td></td></tr><tr><td>4</td><td>2008</td><td>239</td><td>14</td><td></td></tr><tr><td>5</td><td>2008</td><td>1170</td><td>14</td><td></td></tr><tr><td>6</td><td>2016</td><td>28</td><td>14</td><td></td></tr><tr><td>7</td><td>2010</td><td>817</td><td>13</td><td></td></tr><tr><td>8</td><td>2012</td><td>149</td><td>13</td><td></td></tr><tr><td>9</td><td>2010</td><td>757</td><td>12</td><td></td></tr><tr><td>10</td><td>2011</td><td>742</td><td>12</td><td></td></tr>
<tr><td colspan="5"><b>Most Assists in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2010</td><td>0</td><td>455</td><td></td></tr>
<tr><td>2</td><td>2016</td><td>0</td><td>454</td><td></td></tr>
<tr><td>3</td><td>2009</td><td>0</td><td>433</td><td></td></tr>
<tr><td>4</td><td>2017</td><td>0</td><td>428</td><td></td></tr>
<tr><td>5</td><td>2019</td><td>0</td><td>415</td><td></td></tr>
<tr><td>6</td><td>2015</td><td>0</td><td>405</td><td></td></tr>
<tr><td>7</td><td>2018</td><td>0</td><td>402</td><td></td></tr>
<tr><td>8</td><td>2008</td><td>0</td><td>398</td><td></td></tr>
<tr><td>9</td><td>2012</td><td>0</td><td>375</td><td></td></tr>
<tr><td>10</td><td>2011</td><td>0</td><td>344</td><td></td></tr>

<tr><td colspan="5"><b>Less Assist in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2014</td><td>0</td><td>231</td><td></td></tr>
<tr><td>2</td><td>2013</td><td>0</td><td>343</td><td></td></tr>
<tr><td>3</td><td>2011</td><td>0</td><td>344</td><td></td></tr>
<tr><td>4</td><td>2012</td><td>0</td><td>375</td><td></td></tr>
<tr><td>5</td><td>2008</td><td>0</td><td>398</td><td></td></tr>
<tr><td>6</td><td>2018</td><td>0</td><td>402</td><td></td></tr>
<tr><td>7</td><td>2019</td><td>0</td><td>415</td><td></td></tr>
<tr><td>8</td><td>2009</td><td>0</td><td>433</td><td></td></tr>
<tr><td>9</td><td>2010</td><td>0</td><td>455</td><td></td></tr>

<tr><td colspan="5"><b>Most Game Points in 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2016</td><td>1079</td><td>26</td><td></td></tr><tr><td>2</td><td>2019</td><td>1038</td><td>26</td><td><a href="OTHL-1038.html">Game Direct Link</a></td></tr><tr><td>3</td><td>2008</td><td>218</td><td>24</td><td></td></tr><tr><td>4</td><td>2008</td><td>239</td><td>21</td><td></td></tr><tr><td>5</td><td>2008</td><td>1170</td><td>21</td><td></td></tr><tr><td>6</td><td>2016</td><td>28</td><td>21</td><td></td></tr><tr><td>7</td><td>2010</td><td>817</td><td>20</td><td></td></tr><tr><td>8</td><td>2012</td><td>149</td><td>20</td><td></td></tr><tr><td>9</td><td>2010</td><td>757</td><td>19</td><td></td></tr><tr><td>10</td><td>2016</td><td>96</td><td>19</td><td></td></tr>
<tr><td colspan="5"><b>Most Game Points in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>0</td><td>0</td><td>32000</td><td></td></tr>
<tr><td>2</td><td>0</td><td>0</td><td>32000</td><td></td></tr>

<tr><td colspan="5"><b>Less Game Point In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2014</td><td>0</td><td>371</td><td></td></tr>
<tr><td>2</td><td>2013</td><td>0</td><td>541</td><td></td></tr>
<tr><td>3</td><td>2011</td><td>0</td><td>556</td><td></td></tr>
<tr><td>4</td><td>2012</td><td>0</td><td>587</td><td></td></tr>
<tr><td>5</td><td>2008</td><td>0</td><td>630</td><td></td></tr>
<tr><td>6</td><td>2018</td><td>0</td><td>636</td><td></td></tr>
<tr><td>7</td><td>2019</td><td>0</td><td>652</td><td></td></tr>
<tr><td>8</td><td>2009</td><td>0</td><td>680</td><td></td></tr>
<tr><td>9</td><td>2010</td><td>0</td><td>711</td><td></td></tr>

<tr><td colspan="5"><b>Most Shots In 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2017</td><td>402</td><td>57</td><td></td></tr><tr><td>2</td><td>2017</td><td>460</td><td>54</td><td></td></tr><tr><td>3</td><td>2018</td><td>206</td><td>52</td><td></td></tr><tr><td>4</td><td>2016</td><td>792</td><td>48</td><td></td></tr><tr><td>5</td><td>2017</td><td>479</td><td>48</td><td></td></tr><tr><td>6</td><td>2017</td><td>1006</td><td>47</td><td></td></tr><tr><td>7</td><td>2018</td><td>862</td><td>47</td><td></td></tr><tr><td>8</td><td>2019</td><td>592</td><td>47</td><td><a href="OTHL-592.html">Game Direct Link</a></td></tr><tr><td>9</td><td>2019</td><td>1152</td><td>47</td><td><a href="OTHL-1152.html">Game Direct Link</a></td></tr><tr><td>10</td><td>2009</td><td>735</td><td>46</td><td></td></tr>
<tr><td colspan="5"><b>Most Shots In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2017</td><td>0</td><td>2771</td><td></td></tr>
<tr><td>2</td><td>2019</td><td>0</td><td>2642</td><td></td></tr>
<tr><td>3</td><td>2018</td><td>0</td><td>2555</td><td></td></tr>
<tr><td>4</td><td>2011</td><td>0</td><td>2375</td><td></td></tr>
<tr><td>5</td><td>2008</td><td>0</td><td>2295</td><td></td></tr>
<tr><td>6</td><td>2016</td><td>0</td><td>2290</td><td></td></tr>
<tr><td>7</td><td>2010</td><td>0</td><td>2206</td><td></td></tr>
<tr><td>8</td><td>2015</td><td>0</td><td>2173</td><td></td></tr>
<tr><td>9</td><td>2009</td><td>0</td><td>2091</td><td></td></tr>
<tr><td>10</td><td>2012</td><td>0</td><td>2009</td><td></td></tr>

<tr><td colspan="5"><b>Less Shots In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2014</td><td>0</td><td>1668</td><td></td></tr>
<tr><td>2</td><td>2013</td><td>0</td><td>1897</td><td></td></tr>
<tr><td>3</td><td>2012</td><td>0</td><td>2009</td><td></td></tr>
<tr><td>4</td><td>2009</td><td>0</td><td>2091</td><td></td></tr>
<tr><td>5</td><td>2015</td><td>0</td><td>2173</td><td></td></tr>
<tr><td>6</td><td>2010</td><td>0</td><td>2206</td><td></td></tr>
<tr><td>7</td><td>2008</td><td>0</td><td>2295</td><td></td></tr>
<tr><td>8</td><td>2011</td><td>0</td><td>2375</td><td></td></tr>

<tr><td colspan="5"><b>Most Shots Blocked In 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2012</td><td>1193</td><td>24</td><td></td></tr><tr><td>2</td><td>2010</td><td>495</td><td>22</td><td></td></tr><tr><td>3</td><td>2014</td><td>1105</td><td>20</td><td></td></tr><tr><td>4</td><td>2009</td><td>1186</td><td>19</td><td></td></tr><tr><td>5</td><td>2015</td><td>588</td><td>19</td><td></td></tr><tr><td>6</td><td>2008</td><td>30</td><td>18</td><td></td></tr><tr><td>7</td><td>2008</td><td>805</td><td>18</td><td></td></tr><tr><td>8</td><td>2012</td><td>405</td><td>18</td><td></td></tr><tr><td>9</td><td>2019</td><td>514</td><td>18</td><td><a href="OTHL-514.html">Game Direct Link</a></td></tr><tr><td>10</td><td>2008</td><td>1065</td><td>17</td><td></td></tr>
<tr><td colspan="5"><b>Most Shots Blocked In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>0</td><td>0</td><td>32000</td><td></td></tr>
<tr><td>2</td><td>0</td><td>0</td><td>32000</td><td></td></tr>

<tr><td colspan="5"><b>Less Shots Block In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2016</td><td>0</td><td>589</td><td></td></tr>
<tr><td>2</td><td>2010</td><td>0</td><td>596</td><td></td></tr>
<tr><td>3</td><td>2015</td><td>0</td><td>604</td><td></td></tr>
<tr><td>4</td><td>2009</td><td>0</td><td>654</td><td></td></tr>
<tr><td>5</td><td>2008</td><td>0</td><td>675</td><td></td></tr>
<tr><td>6</td><td>2013</td><td>0</td><td>679</td><td></td></tr>
<tr><td>7</td><td>2012</td><td>0</td><td>698</td><td></td></tr>
<tr><td>8</td><td>2018</td><td>0</td><td>698</td><td></td></tr>
<tr><td>9</td><td>2019</td><td>0</td><td>718</td><td></td></tr>
<tr><td>10</td><td>2011</td><td>0</td><td>760</td><td></td></tr>

<tr><td colspan="5"><b>Most Shots Against In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2014</td><td>0</td><td>2487</td><td></td></tr>
<tr><td>2</td><td>2018</td><td>0</td><td>2472</td><td></td></tr>
<tr><td>3</td><td>2019</td><td>0</td><td>2441</td><td></td></tr>
<tr><td>4</td><td>2012</td><td>0</td><td>2430</td><td></td></tr>
<tr><td>5</td><td>2011</td><td>0</td><td>2400</td><td></td></tr>
<tr><td>6</td><td>2009</td><td>0</td><td>2394</td><td></td></tr>
<tr><td>7</td><td>2008</td><td>0</td><td>2314</td><td></td></tr>
<tr><td>8</td><td>2013</td><td>0</td><td>2172</td><td></td></tr>
<tr><td>9</td><td>2010</td><td>0</td><td>2067</td><td></td></tr>

<tr><td colspan="5"><b>Less Shots Against In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2016</td><td>0</td><td>2032</td><td></td></tr>
<tr><td>2</td><td>2010</td><td>0</td><td>2067</td><td></td></tr>
<tr><td>3</td><td>2015</td><td>0</td><td>2130</td><td></td></tr>
<tr><td>4</td><td>2013</td><td>0</td><td>2172</td><td></td></tr>
<tr><td>5</td><td>2017</td><td>0</td><td>2312</td><td></td></tr>
<tr><td>6</td><td>2008</td><td>0</td><td>2314</td><td></td></tr>
<tr><td>7</td><td>2009</td><td>0</td><td>2394</td><td></td></tr>
<tr><td>8</td><td>2011</td><td>0</td><td>2400</td><td></td></tr>
<tr><td>9</td><td>2012</td><td>0</td><td>2430</td><td></td></tr>

<tr><td colspan="5"><b>Most Pim In 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2010</td><td>495</td><td>56</td><td></td></tr><tr><td>2</td><td>2011</td><td>306</td><td>51</td><td></td></tr><tr><td>3</td><td>2010</td><td>996</td><td>38</td><td></td></tr><tr><td>4</td><td>2008</td><td>47</td><td>36</td><td></td></tr><tr><td>5</td><td>2010</td><td>236</td><td>34</td><td></td></tr><tr><td>6</td><td>2011</td><td>1154</td><td>34</td><td></td></tr><tr><td>7</td><td>2018</td><td>1168</td><td>34</td><td></td></tr><tr><td>8</td><td>2009</td><td>827</td><td>33</td><td></td></tr><tr><td>9</td><td>2011</td><td>1014</td><td>33</td><td></td></tr><tr><td>10</td><td>2011</td><td>714</td><td>32</td><td></td></tr>
<tr><td colspan="5"><b>Most Pim In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2008</td><td>0</td><td>1183</td><td></td></tr>
<tr><td>2</td><td>2010</td><td>0</td><td>1151</td><td></td></tr>
<tr><td>3</td><td>2011</td><td>0</td><td>1139</td><td></td></tr>
<tr><td>4</td><td>2009</td><td>0</td><td>1115</td><td></td></tr>
<tr><td>5</td><td>2012</td><td>0</td><td>829</td><td></td></tr>
<tr><td>6</td><td>2018</td><td>0</td><td>693</td><td></td></tr>
<tr><td>7</td><td>2019</td><td>0</td><td>588</td><td></td></tr>

<tr><td colspan="5"><b>Less Pim In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2017</td><td>0</td><td>582</td><td></td></tr>
<tr><td>2</td><td>2019</td><td>0</td><td>588</td><td></td></tr>
<tr><td>3</td><td>2015</td><td>0</td><td>663</td><td></td></tr>
<tr><td>4</td><td>2014</td><td>0</td><td>666</td><td></td></tr>
<tr><td>5</td><td>2018</td><td>0</td><td>693</td><td></td></tr>
<tr><td>6</td><td>2013</td><td>0</td><td>765</td><td></td></tr>
<tr><td>7</td><td>2016</td><td>0</td><td>787</td><td></td></tr>
<tr><td>8</td><td>2012</td><td>0</td><td>829</td><td></td></tr>
<tr><td>9</td><td>2009</td><td>0</td><td>1115</td><td></td></tr>
<tr><td>10</td><td>2011</td><td>0</td><td>1139</td><td></td></tr>

<tr><td colspan="5"><b>Most Hits In 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2011</td><td>252</td><td>40</td><td></td></tr><tr><td>2</td><td>2018</td><td>579</td><td>40</td><td></td></tr><tr><td>3</td><td>2011</td><td>402</td><td>35</td><td></td></tr><tr><td>4</td><td>2011</td><td>769</td><td>35</td><td></td></tr><tr><td>5</td><td>2011</td><td>1113</td><td>34</td><td></td></tr><tr><td>6</td><td>2011</td><td>1218</td><td>34</td><td></td></tr><tr><td>7</td><td>2012</td><td>739</td><td>33</td><td></td></tr><tr><td>8</td><td>2013</td><td>443</td><td>33</td><td></td></tr><tr><td>9</td><td>2019</td><td>1238</td><td>32</td><td><a href="OTHL-1238.html">Game Direct Link</a></td></tr><tr><td>10</td><td>2009</td><td>384</td><td>31</td><td></td></tr>
<tr><td colspan="5"><b>Most Hits In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2011</td><td>0</td><td>1961</td><td></td></tr>
<tr><td>2</td><td>2019</td><td>0</td><td>1718</td><td></td></tr>
<tr><td>3</td><td>2018</td><td>0</td><td>1708</td><td></td></tr>
<tr><td>4</td><td>2016</td><td>0</td><td>1699</td><td></td></tr>
<tr><td>5</td><td>2012</td><td>0</td><td>1692</td><td></td></tr>
<tr><td>6</td><td>2017</td><td>0</td><td>1649</td><td></td></tr>
<tr><td>7</td><td>2015</td><td>0</td><td>1613</td><td></td></tr>
<tr><td>8</td><td>2014</td><td>0</td><td>1597</td><td></td></tr>
<tr><td>9</td><td>2013</td><td>0</td><td>1574</td><td></td></tr>
<tr><td>10</td><td>2008</td><td>0</td><td>1573</td><td></td></tr>

<tr><td colspan="5"><b>Less Hit In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2010</td><td>0</td><td>1454</td><td></td></tr>
<tr><td>2</td><td>2009</td><td>0</td><td>1510</td><td></td></tr>
<tr><td>3</td><td>2008</td><td>0</td><td>1573</td><td></td></tr>
<tr><td>4</td><td>2013</td><td>0</td><td>1574</td><td></td></tr>
<tr><td>5</td><td>2014</td><td>0</td><td>1597</td><td></td></tr>
<tr><td>6</td><td>2012</td><td>0</td><td>1692</td><td></td></tr>
<tr><td>7</td><td>2018</td><td>0</td><td>1708</td><td></td></tr>
<tr><td>8</td><td>2019</td><td>0</td><td>1718</td><td></td></tr>
<tr><td>9</td><td>2011</td><td>0</td><td>1961</td><td></td></tr>

<tr><td colspan="5"><b>Most Empty Net Goal In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2009</td><td>0</td><td>4</td><td></td></tr>
<tr><td>2</td><td>2011</td><td>0</td><td>3</td><td></td></tr>
<tr><td>3</td><td>2014</td><td>0</td><td>3</td><td></td></tr>
<tr><td>4</td><td>2017</td><td>0</td><td>3</td><td></td></tr>
<tr><td>5</td><td>2008</td><td>0</td><td>2</td><td></td></tr>
<tr><td>6</td><td>2012</td><td>0</td><td>2</td><td></td></tr>
<tr><td>7</td><td>2018</td><td>0</td><td>2</td><td></td></tr>
<tr><td>8</td><td>2013</td><td>0</td><td>1</td><td></td></tr>
<tr><td>9</td><td>2019</td><td>0</td><td>1</td><td></td></tr>

<tr><td colspan="5"><b>Best PP In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2013</td><td>0</td><td>20.30%</td><td></td></tr>
<tr><td>2</td><td>2016</td><td>0</td><td>19.40%</td><td></td></tr>
<tr><td>3</td><td>2009</td><td>0</td><td>19.10%</td><td></td></tr>
<tr><td>4</td><td>2010</td><td>0</td><td>17.90%</td><td></td></tr>
<tr><td>5</td><td>2019</td><td>0</td><td>17.60%</td><td></td></tr>
<tr><td>6</td><td>2017</td><td>0</td><td>17.50%</td><td></td></tr>
<tr><td>7</td><td>2015</td><td>0</td><td>17.40%</td><td></td></tr>
<tr><td>8</td><td>2018</td><td>0</td><td>17.40%</td><td></td></tr>
<tr><td>9</td><td>2012</td><td>0</td><td>16.80%</td><td></td></tr>
<tr><td>10</td><td>2011</td><td>0</td><td>16.70%</td><td></td></tr>

<tr><td colspan="5"><b>Best PK In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2015</td><td>0</td><td>87.30%</td><td></td></tr>
<tr><td>2</td><td>2017</td><td>0</td><td>86.50%</td><td></td></tr>
<tr><td>3</td><td>2013</td><td>0</td><td>85.20%</td><td></td></tr>
<tr><td>4</td><td>2019</td><td>0</td><td>84.90%</td><td></td></tr>
<tr><td>5</td><td>2008</td><td>0</td><td>84.00%</td><td></td></tr>
<tr><td>6</td><td>2014</td><td>0</td><td>84.00%</td><td></td></tr>
<tr><td>7</td><td>2018</td><td>0</td><td>83.00%</td><td></td></tr>
<tr><td>8</td><td>2012</td><td>0</td><td>82.90%</td><td></td></tr>
<tr><td>9</td><td>2009</td><td>0</td><td>82.80%</td><td></td></tr>
<tr><td>10</td><td>2010</td><td>0</td><td>81.40%</td><td></td></tr>

<tr><td colspan="5"><b>Worse PP In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2014</td><td>0</td><td>8.30%</td><td></td></tr>
<tr><td>2</td><td>2008</td><td>0</td><td>14.90%</td><td></td></tr>
<tr><td>3</td><td>2011</td><td>0</td><td>16.70%</td><td></td></tr>
<tr><td>4</td><td>2012</td><td>0</td><td>16.80%</td><td></td></tr>
<tr><td>5</td><td>2015</td><td>0</td><td>17.40%</td><td></td></tr>
<tr><td>6</td><td>2018</td><td>0</td><td>17.40%</td><td></td></tr>
<tr><td>7</td><td>2019</td><td>0</td><td>17.60%</td><td></td></tr>
<tr><td>8</td><td>2010</td><td>0</td><td>17.90%</td><td></td></tr>
<tr><td>9</td><td>2009</td><td>0</td><td>19.10%</td><td></td></tr>

<tr><td colspan="5"><b>Worse PK In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2016</td><td>0</td><td>80.60%</td><td></td></tr>
<tr><td>2</td><td>2011</td><td>0</td><td>81.10%</td><td></td></tr>
<tr><td>3</td><td>2010</td><td>0</td><td>81.40%</td><td></td></tr>
<tr><td>4</td><td>2009</td><td>0</td><td>82.80%</td><td></td></tr>
<tr><td>5</td><td>2012</td><td>0</td><td>82.90%</td><td></td></tr>
<tr><td>6</td><td>2018</td><td>0</td><td>83.00%</td><td></td></tr>
<tr><td>7</td><td>2008</td><td>0</td><td>84.00%</td><td></td></tr>

<tr><td colspan="5"><b>Most Win In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2015</td><td>0</td><td>52</td><td></td></tr>
<tr><td>2</td><td>2017</td><td>0</td><td>51</td><td></td></tr>
<tr><td>3</td><td>2019</td><td>0</td><td>49</td><td></td></tr>
<tr><td>4</td><td>2010</td><td>0</td><td>45</td><td></td></tr>
<tr><td>5</td><td>2018</td><td>0</td><td>44</td><td></td></tr>
<tr><td>6</td><td>2016</td><td>0</td><td>41</td><td></td></tr>
<tr><td>7</td><td>2009</td><td>0</td><td>40</td><td></td></tr>
<tr><td>8</td><td>2011</td><td>0</td><td>36</td><td></td></tr>
<tr><td>9</td><td>2013</td><td>0</td><td>34</td><td></td></tr>
<tr><td>10</td><td>2012</td><td>0</td><td>29</td><td></td></tr>

<tr><td colspan="5"><b>Less Win In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2014</td><td>0</td><td>23</td><td></td></tr>
<tr><td>2</td><td>2008</td><td>0</td><td>25</td><td></td></tr>
<tr><td>3</td><td>2012</td><td>0</td><td>29</td><td></td></tr>
<tr><td>4</td><td>2013</td><td>0</td><td>34</td><td></td></tr>
<tr><td>5</td><td>2011</td><td>0</td><td>36</td><td></td></tr>
<tr><td>6</td><td>2009</td><td>0</td><td>40</td><td></td></tr>
<tr><td>7</td><td>2018</td><td>0</td><td>44</td><td></td></tr>
<tr><td>8</td><td>2010</td><td>0</td><td>45</td><td></td></tr>

<tr><td colspan="5"><b>Most Lost In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2014</td><td>0</td><td>59</td><td></td></tr>
<tr><td>2</td><td>2012</td><td>0</td><td>53</td><td></td></tr>
<tr><td>3</td><td>2013</td><td>0</td><td>48</td><td></td></tr>
<tr><td>4</td><td>2011</td><td>0</td><td>46</td><td></td></tr>
<tr><td>5</td><td>2009</td><td>0</td><td>42</td><td></td></tr>
<tr><td>6</td><td>2008</td><td>0</td><td>41</td><td></td></tr>
<tr><td>7</td><td>2018</td><td>0</td><td>38</td><td></td></tr>
<tr><td>8</td><td>2010</td><td>0</td><td>37</td><td></td></tr>
<tr><td>9</td><td>2019</td><td>0</td><td>33</td><td></td></tr>

<tr><td colspan="5"><b>Less Lost In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2015</td><td>0</td><td>30</td><td></td></tr>
<tr><td>2</td><td>2017</td><td>0</td><td>31</td><td></td></tr>
<tr><td>3</td><td>2019</td><td>0</td><td>33</td><td></td></tr>
<tr><td>4</td><td>2010</td><td>0</td><td>37</td><td></td></tr>
<tr><td>5</td><td>2018</td><td>0</td><td>38</td><td></td></tr>
<tr><td>6</td><td>2008</td><td>0</td><td>41</td><td></td></tr>
<tr><td>7</td><td>2016</td><td>0</td><td>41</td><td></td></tr>
<tr><td>8</td><td>2009</td><td>0</td><td>42</td><td></td></tr>
<tr><td>9</td><td>2011</td><td>0</td><td>46</td><td></td></tr>
<tr><td>10</td><td>2013</td><td>0</td><td>48</td><td></td></tr>

<tr><td colspan="5"><b>Most Point In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2019</td><td>0</td><td>107</td><td></td></tr>
<tr><td>2</td><td>2017</td><td>0</td><td>106</td><td></td></tr>
<tr><td>3</td><td>2015</td><td>0</td><td>105</td><td></td></tr>
<tr><td>4</td><td>2010</td><td>0</td><td>97</td><td></td></tr>
<tr><td>5</td><td>2018</td><td>0</td><td>96</td><td></td></tr>
<tr><td>6</td><td>2016</td><td>0</td><td>90</td><td></td></tr>
<tr><td>7</td><td>2009</td><td>0</td><td>87</td><td></td></tr>
<tr><td>8</td><td>2011</td><td>0</td><td>83</td><td></td></tr>
<tr><td>9</td><td>2008</td><td>0</td><td>76</td><td></td></tr>
<tr><td>10</td><td>2013</td><td>0</td><td>75</td><td></td></tr>

<tr><td colspan="5"><b>Less Points In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2014</td><td>0</td><td>50</td><td></td></tr>
<tr><td>2</td><td>2012</td><td>0</td><td>68</td><td></td></tr>
<tr><td>3</td><td>2013</td><td>0</td><td>75</td><td></td></tr>
<tr><td>4</td><td>2008</td><td>0</td><td>76</td><td></td></tr>
<tr><td>5</td><td>2011</td><td>0</td><td>83</td><td></td></tr>
<tr><td>6</td><td>2009</td><td>0</td><td>87</td><td></td></tr>
<tr><td>7</td><td>2018</td><td>0</td><td>96</td><td></td></tr>
<tr><td>8</td><td>2010</td><td>0</td><td>97</td><td></td></tr>

<tr><td colspan="5"><b>Most Win Home In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>0</td><td>0</td><td>32000</td><td></td></tr>
<tr><td>2</td><td>0</td><td>0</td><td>32000</td><td></td></tr>

<tr><td colspan="5"><b>Most Win Visitor In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>0</td><td>0</td><td>32000</td><td></td></tr>
<tr><td>2</td><td>0</td><td>0</td><td>32000</td><td></td></tr>

</table></div>
<h1 class="TeamRecordsPro_ARI"><a id="Coyotes">Coyotes</a></h1>
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
<br /><table class="STHSRecordTable">
<tr><td colspan="5"><b>Most Goals in 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2009</td><td>555</td><td>8</td><td></td></tr><tr><td>2</td><td>2017</td><td>678</td><td>8</td><td></td></tr><tr><td>3</td><td>2009</td><td>475</td><td>7</td><td></td></tr><tr><td>4</td><td>2009</td><td>497</td><td>7</td><td></td></tr><tr><td>5</td><td>2009</td><td>1065</td><td>7</td><td></td></tr><tr><td>6</td><td>2010</td><td>221</td><td>7</td><td></td></tr><tr><td>7</td><td>2015</td><td>808</td><td>7</td><td></td></tr><tr><td>8</td><td>2016</td><td>816</td><td>7</td><td></td></tr><tr><td>9</td><td>2017</td><td>887</td><td>7</td><td></td></tr><tr><td>10</td><td>2018</td><td>506</td><td>7</td><td></td></tr>
<tr><td colspan="5"><b>Most Goals in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2017</td><td>0</td><td>272</td><td></td></tr>
<tr><td>2</td><td>2019</td><td>0</td><td>264</td><td></td></tr>
<tr><td>3</td><td>2018</td><td>0</td><td>263</td><td></td></tr>
<tr><td>4</td><td>2016</td><td>0</td><td>259</td><td></td></tr>
<tr><td>5</td><td>2010</td><td>0</td><td>250</td><td></td></tr>
<tr><td>6</td><td>2009</td><td>0</td><td>236</td><td></td></tr>
<tr><td>7</td><td>2011</td><td>0</td><td>227</td><td></td></tr>
<tr><td>8</td><td>2015</td><td>0</td><td>226</td><td></td></tr>
<tr><td>9</td><td>2012</td><td>0</td><td>214</td><td></td></tr>
<tr><td>10</td><td>2014</td><td>0</td><td>210</td><td></td></tr>

<tr><td colspan="5"><b>Less Goal in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2013</td><td>0</td><td>145</td><td></td></tr>
<tr><td>2</td><td>2008</td><td>0</td><td>173</td><td></td></tr>
<tr><td>3</td><td>2014</td><td>0</td><td>210</td><td></td></tr>
<tr><td>4</td><td>2012</td><td>0</td><td>214</td><td></td></tr>
<tr><td>5</td><td>2015</td><td>0</td><td>226</td><td></td></tr>
<tr><td>6</td><td>2011</td><td>0</td><td>227</td><td></td></tr>
<tr><td>7</td><td>2009</td><td>0</td><td>236</td><td></td></tr>
<tr><td>8</td><td>2010</td><td>0</td><td>250</td><td></td></tr>

<tr><td colspan="5"><b>Most Goals Against in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2014</td><td>0</td><td>299</td><td></td></tr>
<tr><td>2</td><td>2010</td><td>0</td><td>292</td><td></td></tr>
<tr><td>3</td><td>2008</td><td>0</td><td>290</td><td></td></tr>
<tr><td>4</td><td>2012</td><td>0</td><td>272</td><td></td></tr>
<tr><td>5</td><td>2009</td><td>0</td><td>248</td><td></td></tr>
<tr><td>6</td><td>2018</td><td>0</td><td>243</td><td></td></tr>
<tr><td>7</td><td>2019</td><td>0</td><td>237</td><td></td></tr>
<tr><td>8</td><td>2011</td><td>0</td><td>230</td><td></td></tr>

<tr><td colspan="5"><b>Less Goal Against in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2015</td><td>0</td><td>218</td><td></td></tr>
<tr><td>2</td><td>2016</td><td>0</td><td>220</td><td></td></tr>
<tr><td>3</td><td>2011</td><td>0</td><td>230</td><td></td></tr>
<tr><td>4</td><td>2013</td><td>0</td><td>230</td><td></td></tr>
<tr><td>5</td><td>2017</td><td>0</td><td>233</td><td></td></tr>
<tr><td>6</td><td>2019</td><td>0</td><td>237</td><td></td></tr>
<tr><td>7</td><td>2018</td><td>0</td><td>243</td><td></td></tr>
<tr><td>8</td><td>2009</td><td>0</td><td>248</td><td></td></tr>
<tr><td>9</td><td>2012</td><td>0</td><td>272</td><td></td></tr>
<tr><td>10</td><td>2008</td><td>0</td><td>290</td><td></td></tr>

<tr><td colspan="5"><b>Most Assists in 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2009</td><td>555</td><td>16</td><td></td></tr><tr><td>2</td><td>2017</td><td>678</td><td>16</td><td></td></tr><tr><td>3</td><td>2009</td><td>475</td><td>14</td><td></td></tr><tr><td>4</td><td>2010</td><td>347</td><td>14</td><td></td></tr><tr><td>5</td><td>2016</td><td>816</td><td>14</td><td></td></tr><tr><td>6</td><td>2018</td><td>506</td><td>14</td><td></td></tr><tr><td>7</td><td>2009</td><td>497</td><td>13</td><td></td></tr><tr><td>8</td><td>2009</td><td>1065</td><td>13</td><td></td></tr><tr><td>9</td><td>2017</td><td>887</td><td>13</td><td></td></tr><tr><td>10</td><td>2018</td><td>805</td><td>13</td><td></td></tr>
<tr><td colspan="5"><b>Most Assists in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2017</td><td>0</td><td>480</td><td></td></tr>
<tr><td>2</td><td>2019</td><td>0</td><td>468</td><td></td></tr>
<tr><td>3</td><td>2018</td><td>0</td><td>456</td><td></td></tr>
<tr><td>4</td><td>2010</td><td>0</td><td>453</td><td></td></tr>
<tr><td>5</td><td>2016</td><td>0</td><td>451</td><td></td></tr>
<tr><td>6</td><td>2009</td><td>0</td><td>410</td><td></td></tr>
<tr><td>7</td><td>2015</td><td>0</td><td>395</td><td></td></tr>
<tr><td>8</td><td>2012</td><td>0</td><td>363</td><td></td></tr>
<tr><td>9</td><td>2011</td><td>0</td><td>359</td><td></td></tr>
<tr><td>10</td><td>2014</td><td>0</td><td>351</td><td></td></tr>

<tr><td colspan="5"><b>Less Assist in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2013</td><td>0</td><td>238</td><td></td></tr>
<tr><td>2</td><td>2008</td><td>0</td><td>306</td><td></td></tr>
<tr><td>3</td><td>2014</td><td>0</td><td>351</td><td></td></tr>
<tr><td>4</td><td>2011</td><td>0</td><td>359</td><td></td></tr>
<tr><td>5</td><td>2012</td><td>0</td><td>363</td><td></td></tr>
<tr><td>6</td><td>2009</td><td>0</td><td>410</td><td></td></tr>
<tr><td>7</td><td>2010</td><td>0</td><td>453</td><td></td></tr>

<tr><td colspan="5"><b>Most Game Points in 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2009</td><td>555</td><td>24</td><td></td></tr><tr><td>2</td><td>2017</td><td>678</td><td>24</td><td></td></tr><tr><td>3</td><td>2009</td><td>475</td><td>21</td><td></td></tr><tr><td>4</td><td>2010</td><td>347</td><td>21</td><td></td></tr><tr><td>5</td><td>2016</td><td>816</td><td>21</td><td></td></tr><tr><td>6</td><td>2018</td><td>506</td><td>21</td><td></td></tr><tr><td>7</td><td>2009</td><td>497</td><td>20</td><td></td></tr><tr><td>8</td><td>2009</td><td>1065</td><td>20</td><td></td></tr><tr><td>9</td><td>2017</td><td>887</td><td>20</td><td></td></tr><tr><td>10</td><td>2018</td><td>805</td><td>20</td><td></td></tr>
<tr><td colspan="5"><b>Most Game Points in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>0</td><td>0</td><td>32000</td><td></td></tr>
<tr><td>2</td><td>0</td><td>0</td><td>32000</td><td></td></tr>

<tr><td colspan="5"><b>Less Game Point In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2013</td><td>0</td><td>383</td><td></td></tr>
<tr><td>2</td><td>2008</td><td>0</td><td>479</td><td></td></tr>
<tr><td>3</td><td>2014</td><td>0</td><td>561</td><td></td></tr>
<tr><td>4</td><td>2012</td><td>0</td><td>577</td><td></td></tr>
<tr><td>5</td><td>2011</td><td>0</td><td>586</td><td></td></tr>
<tr><td>6</td><td>2009</td><td>0</td><td>646</td><td></td></tr>
<tr><td>7</td><td>2010</td><td>0</td><td>703</td><td></td></tr>

<tr><td colspan="5"><b>Most Shots In 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2018</td><td>444</td><td>62</td><td></td></tr><tr><td>2</td><td>2018</td><td>1065</td><td>56</td><td></td></tr><tr><td>3</td><td>2017</td><td>988</td><td>54</td><td></td></tr><tr><td>4</td><td>2019</td><td>5</td><td>52</td><td><a href="OTHL-5.html">Game Direct Link</a></td></tr><tr><td>5</td><td>2018</td><td>1252</td><td>51</td><td></td></tr><tr><td>6</td><td>2019</td><td>98</td><td>51</td><td><a href="OTHL-98.html">Game Direct Link</a></td></tr><tr><td>7</td><td>2017</td><td>456</td><td>50</td><td></td></tr><tr><td>8</td><td>2019</td><td>948</td><td>50</td><td><a href="OTHL-948.html">Game Direct Link</a></td></tr><tr><td>9</td><td>2017</td><td>875</td><td>49</td><td></td></tr><tr><td>10</td><td>2018</td><td>1141</td><td>49</td><td></td></tr>
<tr><td colspan="5"><b>Most Shots In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2018</td><td>0</td><td>2946</td><td></td></tr>
<tr><td>2</td><td>2019</td><td>0</td><td>2873</td><td></td></tr>
<tr><td>3</td><td>2017</td><td>0</td><td>2769</td><td></td></tr>
<tr><td>4</td><td>2011</td><td>0</td><td>2362</td><td></td></tr>
<tr><td>5</td><td>2016</td><td>0</td><td>2360</td><td></td></tr>
<tr><td>6</td><td>2015</td><td>0</td><td>2327</td><td></td></tr>
<tr><td>7</td><td>2009</td><td>0</td><td>2136</td><td></td></tr>
<tr><td>8</td><td>2012</td><td>0</td><td>2117</td><td></td></tr>
<tr><td>9</td><td>2010</td><td>0</td><td>2037</td><td></td></tr>
<tr><td>10</td><td>2014</td><td>0</td><td>2017</td><td></td></tr>

<tr><td colspan="5"><b>Less Shots In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2013</td><td>0</td><td>1676</td><td></td></tr>
<tr><td>2</td><td>2008</td><td>0</td><td>1841</td><td></td></tr>
<tr><td>3</td><td>2014</td><td>0</td><td>2017</td><td></td></tr>
<tr><td>4</td><td>2010</td><td>0</td><td>2037</td><td></td></tr>
<tr><td>5</td><td>2012</td><td>0</td><td>2117</td><td></td></tr>
<tr><td>6</td><td>2009</td><td>0</td><td>2136</td><td></td></tr>
<tr><td>7</td><td>2011</td><td>0</td><td>2362</td><td></td></tr>

<tr><td colspan="5"><b>Most Shots Blocked In 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2012</td><td>127</td><td>21</td><td></td></tr><tr><td>2</td><td>2010</td><td>715</td><td>20</td><td></td></tr><tr><td>3</td><td>2011</td><td>31</td><td>20</td><td></td></tr><tr><td>4</td><td>2012</td><td>155</td><td>20</td><td></td></tr><tr><td>5</td><td>2011</td><td>984</td><td>19</td><td></td></tr><tr><td>6</td><td>2012</td><td>764</td><td>19</td><td></td></tr><tr><td>7</td><td>2018</td><td>259</td><td>19</td><td></td></tr><tr><td>8</td><td>2019</td><td>937</td><td>19</td><td><a href="OTHL-937.html">Game Direct Link</a></td></tr><tr><td>9</td><td>2008</td><td>1066</td><td>18</td><td></td></tr><tr><td>10</td><td>2011</td><td>1126</td><td>18</td><td></td></tr>
<tr><td colspan="5"><b>Most Shots Blocked In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>0</td><td>0</td><td>32000</td><td></td></tr>
<tr><td>2</td><td>0</td><td>0</td><td>32000</td><td></td></tr>

<tr><td colspan="5"><b>Less Shots Block In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2016</td><td>0</td><td>622</td><td></td></tr>
<tr><td>2</td><td>2013</td><td>0</td><td>639</td><td></td></tr>
<tr><td>3</td><td>2015</td><td>0</td><td>672</td><td></td></tr>
<tr><td>4</td><td>2009</td><td>0</td><td>685</td><td></td></tr>
<tr><td>5</td><td>2018</td><td>0</td><td>687</td><td></td></tr>
<tr><td>6</td><td>2008</td><td>0</td><td>694</td><td></td></tr>
<tr><td>7</td><td>2010</td><td>0</td><td>715</td><td></td></tr>
<tr><td>8</td><td>2014</td><td>0</td><td>715</td><td></td></tr>
<tr><td>9</td><td>2012</td><td>0</td><td>759</td><td></td></tr>
<tr><td>10</td><td>2019</td><td>0</td><td>768</td><td></td></tr>

<tr><td colspan="5"><b>Most Shots Against In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2018</td><td>0</td><td>2626</td><td></td></tr>
<tr><td>2</td><td>2019</td><td>0</td><td>2606</td><td></td></tr>
<tr><td>3</td><td>2014</td><td>0</td><td>2601</td><td></td></tr>
<tr><td>4</td><td>2017</td><td>0</td><td>2565</td><td></td></tr>
<tr><td>5</td><td>2012</td><td>0</td><td>2555</td><td></td></tr>
<tr><td>6</td><td>2008</td><td>0</td><td>2480</td><td></td></tr>
<tr><td>7</td><td>2010</td><td>0</td><td>2470</td><td></td></tr>
<tr><td>8</td><td>2011</td><td>0</td><td>2470</td><td></td></tr>
<tr><td>9</td><td>2013</td><td>0</td><td>2412</td><td></td></tr>
<tr><td>10</td><td>2009</td><td>0</td><td>2301</td><td></td></tr>

<tr><td colspan="5"><b>Less Shots Against In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2016</td><td>0</td><td>2158</td><td></td></tr>
<tr><td>2</td><td>2015</td><td>0</td><td>2205</td><td></td></tr>
<tr><td>3</td><td>2009</td><td>0</td><td>2301</td><td></td></tr>
<tr><td>4</td><td>2013</td><td>0</td><td>2412</td><td></td></tr>
<tr><td>5</td><td>2010</td><td>0</td><td>2470</td><td></td></tr>
<tr><td>6</td><td>2011</td><td>0</td><td>2470</td><td></td></tr>
<tr><td>7</td><td>2008</td><td>0</td><td>2480</td><td></td></tr>
<tr><td>8</td><td>2012</td><td>0</td><td>2555</td><td></td></tr>

<tr><td colspan="5"><b>Most Pim In 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2017</td><td>786</td><td>62</td><td></td></tr><tr><td>2</td><td>2011</td><td>450</td><td>47</td><td></td></tr><tr><td>3</td><td>2011</td><td>895</td><td>47</td><td></td></tr><tr><td>4</td><td>2008</td><td>333</td><td>46</td><td></td></tr><tr><td>5</td><td>2011</td><td>1036</td><td>45</td><td></td></tr><tr><td>6</td><td>2008</td><td>652</td><td>44</td><td></td></tr><tr><td>7</td><td>2010</td><td>9</td><td>43</td><td></td></tr><tr><td>8</td><td>2008</td><td>296</td><td>41</td><td></td></tr><tr><td>9</td><td>2008</td><td>684</td><td>40</td><td></td></tr><tr><td>10</td><td>2012</td><td>537</td><td>38</td><td></td></tr>
<tr><td colspan="5"><b>Most Pim In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2011</td><td>0</td><td>1470</td><td></td></tr>
<tr><td>2</td><td>2008</td><td>0</td><td>1383</td><td></td></tr>
<tr><td>3</td><td>2010</td><td>0</td><td>1264</td><td></td></tr>
<tr><td>4</td><td>2009</td><td>0</td><td>1105</td><td></td></tr>
<tr><td>5</td><td>2014</td><td>0</td><td>922</td><td></td></tr>
<tr><td>6</td><td>2012</td><td>0</td><td>845</td><td></td></tr>
<tr><td>7</td><td>2019</td><td>0</td><td>573</td><td></td></tr>
<tr><td>8</td><td>2018</td><td>0</td><td>474</td><td></td></tr>

<tr><td colspan="5"><b>Less Pim In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2018</td><td>0</td><td>474</td><td></td></tr>
<tr><td>2</td><td>2019</td><td>0</td><td>573</td><td></td></tr>
<tr><td>3</td><td>2017</td><td>0</td><td>590</td><td></td></tr>
<tr><td>4</td><td>2013</td><td>0</td><td>713</td><td></td></tr>
<tr><td>5</td><td>2016</td><td>0</td><td>809</td><td></td></tr>
<tr><td>6</td><td>2015</td><td>0</td><td>816</td><td></td></tr>
<tr><td>7</td><td>2012</td><td>0</td><td>845</td><td></td></tr>
<tr><td>8</td><td>2014</td><td>0</td><td>922</td><td></td></tr>
<tr><td>9</td><td>2009</td><td>0</td><td>1105</td><td></td></tr>
<tr><td>10</td><td>2010</td><td>0</td><td>1264</td><td></td></tr>

<tr><td colspan="5"><b>Most Hits In 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2011</td><td>871</td><td>37</td><td></td></tr><tr><td>2</td><td>2013</td><td>681</td><td>37</td><td></td></tr><tr><td>3</td><td>2014</td><td>1142</td><td>36</td><td></td></tr><tr><td>4</td><td>2011</td><td>31</td><td>35</td><td></td></tr><tr><td>5</td><td>2014</td><td>822</td><td>35</td><td></td></tr><tr><td>6</td><td>2013</td><td>190</td><td>34</td><td></td></tr><tr><td>7</td><td>2014</td><td>512</td><td>34</td><td></td></tr><tr><td>8</td><td>2008</td><td>741</td><td>32</td><td></td></tr><tr><td>9</td><td>2011</td><td>733</td><td>32</td><td></td></tr><tr><td>10</td><td>2012</td><td>281</td><td>32</td><td></td></tr>
<tr><td colspan="5"><b>Most Hits In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2011</td><td>0</td><td>1818</td><td></td></tr>
<tr><td>2</td><td>2014</td><td>0</td><td>1728</td><td></td></tr>
<tr><td>3</td><td>2013</td><td>0</td><td>1677</td><td></td></tr>
<tr><td>4</td><td>2012</td><td>0</td><td>1658</td><td></td></tr>
<tr><td>5</td><td>2019</td><td>0</td><td>1625</td><td></td></tr>
<tr><td>6</td><td>2015</td><td>0</td><td>1601</td><td></td></tr>
<tr><td>7</td><td>2018</td><td>0</td><td>1576</td><td></td></tr>
<tr><td>8</td><td>2008</td><td>0</td><td>1494</td><td></td></tr>
<tr><td>9</td><td>2010</td><td>0</td><td>1467</td><td></td></tr>
<tr><td>10</td><td>2009</td><td>0</td><td>1406</td><td></td></tr>

<tr><td colspan="5"><b>Less Hit In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2009</td><td>0</td><td>1406</td><td></td></tr>
<tr><td>2</td><td>2017</td><td>0</td><td>1462</td><td></td></tr>
<tr><td>3</td><td>2010</td><td>0</td><td>1467</td><td></td></tr>
<tr><td>4</td><td>2008</td><td>0</td><td>1494</td><td></td></tr>
<tr><td>5</td><td>2016</td><td>0</td><td>1529</td><td></td></tr>
<tr><td>6</td><td>2018</td><td>0</td><td>1576</td><td></td></tr>
<tr><td>7</td><td>2015</td><td>0</td><td>1601</td><td></td></tr>
<tr><td>8</td><td>2019</td><td>0</td><td>1625</td><td></td></tr>
<tr><td>9</td><td>2012</td><td>0</td><td>1658</td><td></td></tr>
<tr><td>10</td><td>2013</td><td>0</td><td>1677</td><td></td></tr>

<tr><td colspan="5"><b>Most Empty Net Goal In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2013</td><td>0</td><td>4</td><td></td></tr>
<tr><td>2</td><td>2016</td><td>0</td><td>4</td><td></td></tr>
<tr><td>3</td><td>2018</td><td>0</td><td>4</td><td></td></tr>
<tr><td>4</td><td>2017</td><td>0</td><td>3</td><td></td></tr>
<tr><td>5</td><td>2014</td><td>0</td><td>2</td><td></td></tr>
<tr><td>6</td><td>2019</td><td>0</td><td>2</td><td></td></tr>
<tr><td>7</td><td>2009</td><td>0</td><td>1</td><td></td></tr>
<tr><td>8</td><td>2015</td><td>0</td><td>1</td><td></td></tr>

<tr><td colspan="5"><b>Best PP In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2019</td><td>0</td><td>26.30%</td><td></td></tr>
<tr><td>2</td><td>2017</td><td>0</td><td>23.50%</td><td></td></tr>
<tr><td>3</td><td>2018</td><td>0</td><td>21.50%</td><td></td></tr>
<tr><td>4</td><td>2011</td><td>0</td><td>18.90%</td><td></td></tr>
<tr><td>5</td><td>2016</td><td>0</td><td>18.70%</td><td></td></tr>
<tr><td>6</td><td>2010</td><td>0</td><td>18.10%</td><td></td></tr>
<tr><td>7</td><td>2009</td><td>0</td><td>17.10%</td><td></td></tr>
<tr><td>8</td><td>2015</td><td>0</td><td>16.30%</td><td></td></tr>
<tr><td>9</td><td>2008</td><td>0</td><td>13.20%</td><td></td></tr>
<tr><td>10</td><td>2012</td><td>0</td><td>12.80%</td><td></td></tr>

<tr><td colspan="5"><b>Best PK In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2009</td><td>0</td><td>85.60%</td><td></td></tr>
<tr><td>2</td><td>2013</td><td>0</td><td>85.00%</td><td></td></tr>
<tr><td>3</td><td>2019</td><td>0</td><td>83.70%</td><td></td></tr>
<tr><td>4</td><td>2017</td><td>0</td><td>82.30%</td><td></td></tr>
<tr><td>5</td><td>2010</td><td>0</td><td>82.00%</td><td></td></tr>
<tr><td>6</td><td>2015</td><td>0</td><td>81.50%</td><td></td></tr>
<tr><td>7</td><td>2018</td><td>0</td><td>81.40%</td><td></td></tr>
<tr><td>8</td><td>2014</td><td>0</td><td>80.10%</td><td></td></tr>
<tr><td>9</td><td>2008</td><td>0</td><td>79.60%</td><td></td></tr>
<tr><td>10</td><td>2012</td><td>0</td><td>79.10%</td><td></td></tr>

<tr><td colspan="5"><b>Worse PP In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2014</td><td>0</td><td>11.10%</td><td></td></tr>
<tr><td>2</td><td>2013</td><td>0</td><td>12.10%</td><td></td></tr>
<tr><td>3</td><td>2012</td><td>0</td><td>12.80%</td><td></td></tr>
<tr><td>4</td><td>2008</td><td>0</td><td>13.20%</td><td></td></tr>
<tr><td>5</td><td>2015</td><td>0</td><td>16.30%</td><td></td></tr>
<tr><td>6</td><td>2009</td><td>0</td><td>17.10%</td><td></td></tr>
<tr><td>7</td><td>2010</td><td>0</td><td>18.10%</td><td></td></tr>
<tr><td>8</td><td>2011</td><td>0</td><td>18.90%</td><td></td></tr>

<tr><td colspan="5"><b>Worse PK In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2011</td><td>0</td><td>78.00%</td><td></td></tr>
<tr><td>2</td><td>2016</td><td>0</td><td>78.80%</td><td></td></tr>
<tr><td>3</td><td>2012</td><td>0</td><td>79.10%</td><td></td></tr>
<tr><td>4</td><td>2008</td><td>0</td><td>79.60%</td><td></td></tr>
<tr><td>5</td><td>2014</td><td>0</td><td>80.10%</td><td></td></tr>
<tr><td>6</td><td>2018</td><td>0</td><td>81.40%</td><td></td></tr>
<tr><td>7</td><td>2015</td><td>0</td><td>81.50%</td><td></td></tr>
<tr><td>8</td><td>2010</td><td>0</td><td>82.00%</td><td></td></tr>
<tr><td>9</td><td>2019</td><td>0</td><td>83.70%</td><td></td></tr>
<tr><td>10</td><td>2013</td><td>0</td><td>85.00%</td><td></td></tr>

<tr><td colspan="5"><b>Most Win In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2019</td><td>0</td><td>49</td><td></td></tr>
<tr><td>2</td><td>2017</td><td>0</td><td>47</td><td></td></tr>
<tr><td>3</td><td>2016</td><td>0</td><td>46</td><td></td></tr>
<tr><td>4</td><td>2018</td><td>0</td><td>44</td><td></td></tr>
<tr><td>5</td><td>2015</td><td>0</td><td>40</td><td></td></tr>
<tr><td>6</td><td>2009</td><td>0</td><td>39</td><td></td></tr>
<tr><td>7</td><td>2011</td><td>0</td><td>39</td><td></td></tr>
<tr><td>8</td><td>2010</td><td>0</td><td>36</td><td></td></tr>
<tr><td>9</td><td>2012</td><td>0</td><td>33</td><td></td></tr>
<tr><td>10</td><td>2013</td><td>0</td><td>26</td><td></td></tr>

<tr><td colspan="5"><b>Less Win In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2008</td><td>0</td><td>18</td><td></td></tr>
<tr><td>2</td><td>2014</td><td>0</td><td>25</td><td></td></tr>
<tr><td>3</td><td>2013</td><td>0</td><td>26</td><td></td></tr>
<tr><td>4</td><td>2012</td><td>0</td><td>33</td><td></td></tr>
<tr><td>5</td><td>2010</td><td>0</td><td>36</td><td></td></tr>
<tr><td>6</td><td>2009</td><td>0</td><td>39</td><td></td></tr>
<tr><td>7</td><td>2011</td><td>0</td><td>39</td><td></td></tr>

<tr><td colspan="5"><b>Most Lost In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2014</td><td>0</td><td>57</td><td></td></tr>
<tr><td>2</td><td>2013</td><td>0</td><td>56</td><td></td></tr>
<tr><td>3</td><td>2008</td><td>0</td><td>51</td><td></td></tr>
<tr><td>4</td><td>2012</td><td>0</td><td>49</td><td></td></tr>
<tr><td>5</td><td>2010</td><td>0</td><td>46</td><td></td></tr>
<tr><td>6</td><td>2009</td><td>0</td><td>43</td><td></td></tr>
<tr><td>7</td><td>2011</td><td>0</td><td>43</td><td></td></tr>
<tr><td>8</td><td>2018</td><td>0</td><td>38</td><td></td></tr>
<tr><td>9</td><td>2019</td><td>0</td><td>33</td><td></td></tr>

<tr><td colspan="5"><b>Less Lost In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2019</td><td>0</td><td>33</td><td></td></tr>
<tr><td>2</td><td>2017</td><td>0</td><td>35</td><td></td></tr>
<tr><td>3</td><td>2016</td><td>0</td><td>36</td><td></td></tr>
<tr><td>4</td><td>2018</td><td>0</td><td>38</td><td></td></tr>
<tr><td>5</td><td>2015</td><td>0</td><td>42</td><td></td></tr>
<tr><td>6</td><td>2009</td><td>0</td><td>43</td><td></td></tr>
<tr><td>7</td><td>2011</td><td>0</td><td>43</td><td></td></tr>
<tr><td>8</td><td>2010</td><td>0</td><td>46</td><td></td></tr>
<tr><td>9</td><td>2012</td><td>0</td><td>49</td><td></td></tr>
<tr><td>10</td><td>2008</td><td>0</td><td>51</td><td></td></tr>

<tr><td colspan="5"><b>Most Point In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2019</td><td>0</td><td>104</td><td></td></tr>
<tr><td>2</td><td>2017</td><td>0</td><td>99</td><td></td></tr>
<tr><td>3</td><td>2018</td><td>0</td><td>97</td><td></td></tr>
<tr><td>4</td><td>2016</td><td>0</td><td>96</td><td></td></tr>
<tr><td>5</td><td>2011</td><td>0</td><td>93</td><td></td></tr>
<tr><td>6</td><td>2015</td><td>0</td><td>88</td><td></td></tr>
<tr><td>7</td><td>2009</td><td>0</td><td>87</td><td></td></tr>
<tr><td>8</td><td>2010</td><td>0</td><td>81</td><td></td></tr>
<tr><td>9</td><td>2012</td><td>0</td><td>74</td><td></td></tr>
<tr><td>10</td><td>2013</td><td>0</td><td>60</td><td></td></tr>

<tr><td colspan="5"><b>Less Points In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2008</td><td>0</td><td>55</td><td></td></tr>
<tr><td>2</td><td>2014</td><td>0</td><td>58</td><td></td></tr>
<tr><td>3</td><td>2013</td><td>0</td><td>60</td><td></td></tr>
<tr><td>4</td><td>2012</td><td>0</td><td>74</td><td></td></tr>
<tr><td>5</td><td>2010</td><td>0</td><td>81</td><td></td></tr>
<tr><td>6</td><td>2009</td><td>0</td><td>87</td><td></td></tr>
<tr><td>7</td><td>2011</td><td>0</td><td>93</td><td></td></tr>

<tr><td colspan="5"><b>Most Win Home In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>0</td><td>0</td><td>32000</td><td></td></tr>
<tr><td>2</td><td>0</td><td>0</td><td>32000</td><td></td></tr>

<tr><td colspan="5"><b>Most Win Visitor In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>0</td><td>0</td><td>32000</td><td></td></tr>
<tr><td>2</td><td>0</td><td>0</td><td>32000</td><td></td></tr>

</table></div>
<h1 class="TeamRecordsPro_NJD"><a id="Devils">Devils</a></h1>
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
<br /><table class="STHSRecordTable">
<tr><td colspan="5"><b>Most Goals in 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2008</td><td>3</td><td>8</td><td></td></tr><tr><td>2</td><td>2011</td><td>121</td><td>8</td><td></td></tr><tr><td>3</td><td>2015</td><td>847</td><td>8</td><td></td></tr><tr><td>4</td><td>2008</td><td>465</td><td>7</td><td></td></tr><tr><td>5</td><td>2008</td><td>1139</td><td>7</td><td></td></tr><tr><td>6</td><td>2009</td><td>155</td><td>7</td><td></td></tr><tr><td>7</td><td>2011</td><td>367</td><td>7</td><td></td></tr><tr><td>8</td><td>2012</td><td>815</td><td>7</td><td></td></tr><tr><td>9</td><td>2014</td><td>893</td><td>7</td><td></td></tr><tr><td>10</td><td>2014</td><td>918</td><td>7</td><td></td></tr>
<tr><td colspan="5"><b>Most Goals in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2008</td><td>0</td><td>260</td><td></td></tr>
<tr><td>2</td><td>2016</td><td>0</td><td>247</td><td></td></tr>
<tr><td>3</td><td>2015</td><td>0</td><td>243</td><td></td></tr>
<tr><td>4</td><td>2018</td><td>0</td><td>233</td><td></td></tr>
<tr><td>5</td><td>2009</td><td>0</td><td>228</td><td></td></tr>
<tr><td>6</td><td>2011</td><td>0</td><td>226</td><td></td></tr>
<tr><td>7</td><td>2019</td><td>0</td><td>224</td><td></td></tr>
<tr><td>8</td><td>2014</td><td>0</td><td>221</td><td></td></tr>
<tr><td>9</td><td>2012</td><td>0</td><td>220</td><td></td></tr>
<tr><td>10</td><td>2010</td><td>0</td><td>210</td><td></td></tr>

<tr><td colspan="5"><b>Less Goal in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2017</td><td>0</td><td>203</td><td></td></tr>
<tr><td>2</td><td>2013</td><td>0</td><td>206</td><td></td></tr>
<tr><td>3</td><td>2010</td><td>0</td><td>210</td><td></td></tr>
<tr><td>4</td><td>2012</td><td>0</td><td>220</td><td></td></tr>
<tr><td>5</td><td>2014</td><td>0</td><td>221</td><td></td></tr>
<tr><td>6</td><td>2019</td><td>0</td><td>224</td><td></td></tr>
<tr><td>7</td><td>2011</td><td>0</td><td>226</td><td></td></tr>
<tr><td>8</td><td>2009</td><td>0</td><td>228</td><td></td></tr>
<tr><td>9</td><td>2018</td><td>0</td><td>233</td><td></td></tr>
<tr><td>10</td><td>2008</td><td>0</td><td>260</td><td></td></tr>

<tr><td colspan="5"><b>Most Goals Against in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2010</td><td>0</td><td>288</td><td></td></tr>
<tr><td>2</td><td>2009</td><td>0</td><td>273</td><td></td></tr>
<tr><td>3</td><td>2008</td><td>0</td><td>249</td><td></td></tr>
<tr><td>4</td><td>2013</td><td>0</td><td>246</td><td></td></tr>
<tr><td>5</td><td>2019</td><td>0</td><td>236</td><td></td></tr>
<tr><td>6</td><td>2012</td><td>0</td><td>230</td><td></td></tr>
<tr><td>7</td><td>2011</td><td>0</td><td>227</td><td></td></tr>
<tr><td>8</td><td>2018</td><td>0</td><td>225</td><td></td></tr>

<tr><td colspan="5"><b>Less Goal Against in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2016</td><td>0</td><td>201</td><td></td></tr>
<tr><td>2</td><td>2014</td><td>0</td><td>208</td><td></td></tr>
<tr><td>3</td><td>2015</td><td>0</td><td>218</td><td></td></tr>
<tr><td>4</td><td>2018</td><td>0</td><td>225</td><td></td></tr>
<tr><td>5</td><td>2017</td><td>0</td><td>226</td><td></td></tr>
<tr><td>6</td><td>2011</td><td>0</td><td>227</td><td></td></tr>
<tr><td>7</td><td>2012</td><td>0</td><td>230</td><td></td></tr>
<tr><td>8</td><td>2019</td><td>0</td><td>236</td><td></td></tr>
<tr><td>9</td><td>2013</td><td>0</td><td>246</td><td></td></tr>
<tr><td>10</td><td>2008</td><td>0</td><td>249</td><td></td></tr>

<tr><td colspan="5"><b>Most Assists in 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2008</td><td>3</td><td>15</td><td></td></tr><tr><td>2</td><td>2015</td><td>847</td><td>15</td><td></td></tr><tr><td>3</td><td>2011</td><td>121</td><td>14</td><td></td></tr><tr><td>4</td><td>2014</td><td>893</td><td>14</td><td></td></tr><tr><td>5</td><td>2014</td><td>918</td><td>14</td><td></td></tr><tr><td>6</td><td>2018</td><td>1207</td><td>14</td><td></td></tr><tr><td>7</td><td>2012</td><td>815</td><td>13</td><td></td></tr><tr><td>8</td><td>2015</td><td>715</td><td>13</td><td></td></tr><tr><td>9</td><td>2008</td><td>465</td><td>12</td><td></td></tr><tr><td>10</td><td>2008</td><td>680</td><td>12</td><td></td></tr>
<tr><td colspan="5"><b>Most Assists in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2008</td><td>0</td><td>462</td><td></td></tr>
<tr><td>2</td><td>2016</td><td>0</td><td>443</td><td></td></tr>
<tr><td>3</td><td>2015</td><td>0</td><td>427</td><td></td></tr>
<tr><td>4</td><td>2018</td><td>0</td><td>411</td><td></td></tr>
<tr><td>5</td><td>2009</td><td>0</td><td>399</td><td></td></tr>
<tr><td>6</td><td>2014</td><td>0</td><td>393</td><td></td></tr>
<tr><td>7</td><td>2019</td><td>0</td><td>391</td><td></td></tr>
<tr><td>8</td><td>2010</td><td>0</td><td>382</td><td></td></tr>
<tr><td>9</td><td>2012</td><td>0</td><td>371</td><td></td></tr>
<tr><td>10</td><td>2013</td><td>0</td><td>361</td><td></td></tr>

<tr><td colspan="5"><b>Less Assist in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2017</td><td>0</td><td>353</td><td></td></tr>
<tr><td>2</td><td>2011</td><td>0</td><td>355</td><td></td></tr>
<tr><td>3</td><td>2013</td><td>0</td><td>361</td><td></td></tr>
<tr><td>4</td><td>2012</td><td>0</td><td>371</td><td></td></tr>
<tr><td>5</td><td>2010</td><td>0</td><td>382</td><td></td></tr>
<tr><td>6</td><td>2019</td><td>0</td><td>391</td><td></td></tr>
<tr><td>7</td><td>2014</td><td>0</td><td>393</td><td></td></tr>
<tr><td>8</td><td>2009</td><td>0</td><td>399</td><td></td></tr>
<tr><td>9</td><td>2018</td><td>0</td><td>411</td><td></td></tr>
<tr><td>10</td><td>2008</td><td>0</td><td>462</td><td></td></tr>

<tr><td colspan="5"><b>Most Game Points in 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2008</td><td>3</td><td>23</td><td></td></tr><tr><td>2</td><td>2015</td><td>847</td><td>23</td><td></td></tr><tr><td>3</td><td>2011</td><td>121</td><td>22</td><td></td></tr><tr><td>4</td><td>2014</td><td>893</td><td>21</td><td></td></tr><tr><td>5</td><td>2014</td><td>918</td><td>21</td><td></td></tr><tr><td>6</td><td>2018</td><td>1207</td><td>21</td><td></td></tr><tr><td>7</td><td>2012</td><td>815</td><td>20</td><td></td></tr><tr><td>8</td><td>2015</td><td>715</td><td>20</td><td></td></tr><tr><td>9</td><td>2008</td><td>465</td><td>19</td><td></td></tr><tr><td>10</td><td>2016</td><td>839</td><td>19</td><td></td></tr>
<tr><td colspan="5"><b>Most Game Points in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>0</td><td>0</td><td>32000</td><td></td></tr>
<tr><td>2</td><td>0</td><td>0</td><td>32000</td><td></td></tr>

<tr><td colspan="5"><b>Less Game Point In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2017</td><td>0</td><td>556</td><td></td></tr>
<tr><td>2</td><td>2013</td><td>0</td><td>567</td><td></td></tr>
<tr><td>3</td><td>2011</td><td>0</td><td>581</td><td></td></tr>
<tr><td>4</td><td>2012</td><td>0</td><td>591</td><td></td></tr>
<tr><td>5</td><td>2010</td><td>0</td><td>592</td><td></td></tr>
<tr><td>6</td><td>2014</td><td>0</td><td>614</td><td></td></tr>
<tr><td>7</td><td>2019</td><td>0</td><td>615</td><td></td></tr>
<tr><td>8</td><td>2009</td><td>0</td><td>627</td><td></td></tr>
<tr><td>9</td><td>2018</td><td>0</td><td>644</td><td></td></tr>
<tr><td>10</td><td>2008</td><td>0</td><td>722</td><td></td></tr>

<tr><td colspan="5"><b>Most Shots In 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2019</td><td>199</td><td>55</td><td><a href="OTHL-199.html">Game Direct Link</a></td></tr><tr><td>2</td><td>2018</td><td>269</td><td>51</td><td></td></tr><tr><td>3</td><td>2017</td><td>530</td><td>50</td><td></td></tr><tr><td>4</td><td>2011</td><td>13</td><td>49</td><td></td></tr><tr><td>5</td><td>2019</td><td>891</td><td>49</td><td><a href="OTHL-891.html">Game Direct Link</a></td></tr><tr><td>6</td><td>2014</td><td>927</td><td>48</td><td></td></tr><tr><td>7</td><td>2019</td><td>156</td><td>48</td><td><a href="OTHL-156.html">Game Direct Link</a></td></tr><tr><td>8</td><td>2012</td><td>761</td><td>47</td><td></td></tr><tr><td>9</td><td>2015</td><td>1171</td><td>47</td><td></td></tr><tr><td>10</td><td>2017</td><td>674</td><td>47</td><td></td></tr>
<tr><td colspan="5"><b>Most Shots In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2019</td><td>0</td><td>2667</td><td></td></tr>
<tr><td>2</td><td>2018</td><td>0</td><td>2602</td><td></td></tr>
<tr><td>3</td><td>2017</td><td>0</td><td>2502</td><td></td></tr>
<tr><td>4</td><td>2011</td><td>0</td><td>2477</td><td></td></tr>
<tr><td>5</td><td>2008</td><td>0</td><td>2323</td><td></td></tr>
<tr><td>6</td><td>2015</td><td>0</td><td>2298</td><td></td></tr>
<tr><td>7</td><td>2014</td><td>0</td><td>2238</td><td></td></tr>
<tr><td>8</td><td>2016</td><td>0</td><td>2233</td><td></td></tr>
<tr><td>9</td><td>2012</td><td>0</td><td>2081</td><td></td></tr>
<tr><td>10</td><td>2013</td><td>0</td><td>2022</td><td></td></tr>

<tr><td colspan="5"><b>Less Shots In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2010</td><td>0</td><td>1916</td><td></td></tr>
<tr><td>2</td><td>2009</td><td>0</td><td>1992</td><td></td></tr>
<tr><td>3</td><td>2013</td><td>0</td><td>2022</td><td></td></tr>
<tr><td>4</td><td>2012</td><td>0</td><td>2081</td><td></td></tr>
<tr><td>5</td><td>2016</td><td>0</td><td>2233</td><td></td></tr>
<tr><td>6</td><td>2014</td><td>0</td><td>2238</td><td></td></tr>
<tr><td>7</td><td>2008</td><td>0</td><td>2323</td><td></td></tr>
<tr><td>8</td><td>2011</td><td>0</td><td>2477</td><td></td></tr>

<tr><td colspan="5"><b>Most Shots Blocked In 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2010</td><td>799</td><td>26</td><td></td></tr><tr><td>2</td><td>2019</td><td>633</td><td>25</td><td><a href="OTHL-633.html">Game Direct Link</a></td></tr><tr><td>3</td><td>2010</td><td>956</td><td>20</td><td></td></tr><tr><td>4</td><td>2019</td><td>587</td><td>20</td><td><a href="OTHL-587.html">Game Direct Link</a></td></tr><tr><td>5</td><td>2009</td><td>367</td><td>19</td><td></td></tr><tr><td>6</td><td>2010</td><td>98</td><td>19</td><td></td></tr><tr><td>7</td><td>2010</td><td>139</td><td>19</td><td></td></tr><tr><td>8</td><td>2012</td><td>1065</td><td>19</td><td></td></tr><tr><td>9</td><td>2011</td><td>1092</td><td>18</td><td></td></tr><tr><td>10</td><td>2019</td><td>935</td><td>18</td><td><a href="OTHL-935.html">Game Direct Link</a></td></tr>
<tr><td colspan="5"><b>Most Shots Blocked In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>0</td><td>0</td><td>32000</td><td></td></tr>
<tr><td>2</td><td>0</td><td>0</td><td>32000</td><td></td></tr>

<tr><td colspan="5"><b>Less Shots Block In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2014</td><td>0</td><td>561</td><td></td></tr>
<tr><td>2</td><td>2015</td><td>0</td><td>596</td><td></td></tr>
<tr><td>3</td><td>2016</td><td>0</td><td>611</td><td></td></tr>
<tr><td>4</td><td>2013</td><td>0</td><td>649</td><td></td></tr>
<tr><td>5</td><td>2008</td><td>0</td><td>656</td><td></td></tr>
<tr><td>6</td><td>2012</td><td>0</td><td>696</td><td></td></tr>
<tr><td>7</td><td>2018</td><td>0</td><td>714</td><td></td></tr>
<tr><td>8</td><td>2009</td><td>0</td><td>729</td><td></td></tr>
<tr><td>9</td><td>2019</td><td>0</td><td>742</td><td></td></tr>
<tr><td>10</td><td>2011</td><td>0</td><td>795</td><td></td></tr>

<tr><td colspan="5"><b>Most Shots Against In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2017</td><td>0</td><td>2643</td><td></td></tr>
<tr><td>2</td><td>2019</td><td>0</td><td>2546</td><td></td></tr>
<tr><td>3</td><td>2018</td><td>0</td><td>2534</td><td></td></tr>
<tr><td>4</td><td>2011</td><td>0</td><td>2456</td><td></td></tr>
<tr><td>5</td><td>2009</td><td>0</td><td>2448</td><td></td></tr>
<tr><td>6</td><td>2010</td><td>0</td><td>2448</td><td></td></tr>
<tr><td>7</td><td>2012</td><td>0</td><td>2421</td><td></td></tr>
<tr><td>8</td><td>2008</td><td>0</td><td>2254</td><td></td></tr>

<tr><td colspan="5"><b>Less Shots Against In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2014</td><td>0</td><td>1949</td><td></td></tr>
<tr><td>2</td><td>2015</td><td>0</td><td>2136</td><td></td></tr>
<tr><td>3</td><td>2013</td><td>0</td><td>2143</td><td></td></tr>
<tr><td>4</td><td>2016</td><td>0</td><td>2195</td><td></td></tr>
<tr><td>5</td><td>2008</td><td>0</td><td>2254</td><td></td></tr>
<tr><td>6</td><td>2012</td><td>0</td><td>2421</td><td></td></tr>
<tr><td>7</td><td>2009</td><td>0</td><td>2448</td><td></td></tr>
<tr><td>8</td><td>2010</td><td>0</td><td>2448</td><td></td></tr>
<tr><td>9</td><td>2011</td><td>0</td><td>2456</td><td></td></tr>

<tr><td colspan="5"><b>Most Pim In 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2009</td><td>709</td><td>61</td><td></td></tr><tr><td>2</td><td>2011</td><td>888</td><td>49</td><td></td></tr><tr><td>3</td><td>2009</td><td>1157</td><td>47</td><td></td></tr><tr><td>4</td><td>2009</td><td>14</td><td>45</td><td></td></tr><tr><td>5</td><td>2008</td><td>374</td><td>44</td><td></td></tr><tr><td>6</td><td>2011</td><td>135</td><td>42</td><td></td></tr><tr><td>7</td><td>2011</td><td>1066</td><td>41</td><td></td></tr><tr><td>8</td><td>2009</td><td>87</td><td>39</td><td></td></tr><tr><td>9</td><td>2011</td><td>686</td><td>37</td><td></td></tr><tr><td>10</td><td>2011</td><td>303</td><td>36</td><td></td></tr>
<tr><td colspan="5"><b>Most Pim In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2010</td><td>0</td><td>1522</td><td></td></tr>
<tr><td>2</td><td>2009</td><td>0</td><td>1480</td><td></td></tr>
<tr><td>3</td><td>2008</td><td>0</td><td>1310</td><td></td></tr>
<tr><td>4</td><td>2011</td><td>0</td><td>1283</td><td></td></tr>
<tr><td>5</td><td>2012</td><td>0</td><td>974</td><td></td></tr>
<tr><td>6</td><td>2019</td><td>0</td><td>783</td><td></td></tr>
<tr><td>7</td><td>2018</td><td>0</td><td>756</td><td></td></tr>

<tr><td colspan="5"><b>Less Pim In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2014</td><td>0</td><td>734</td><td></td></tr>
<tr><td>2</td><td>2018</td><td>0</td><td>756</td><td></td></tr>
<tr><td>3</td><td>2015</td><td>0</td><td>760</td><td></td></tr>
<tr><td>4</td><td>2017</td><td>0</td><td>773</td><td></td></tr>
<tr><td>5</td><td>2019</td><td>0</td><td>783</td><td></td></tr>
<tr><td>6</td><td>2013</td><td>0</td><td>851</td><td></td></tr>
<tr><td>7</td><td>2016</td><td>0</td><td>964</td><td></td></tr>
<tr><td>8</td><td>2012</td><td>0</td><td>974</td><td></td></tr>
<tr><td>9</td><td>2011</td><td>0</td><td>1283</td><td></td></tr>
<tr><td>10</td><td>2008</td><td>0</td><td>1310</td><td></td></tr>

<tr><td colspan="5"><b>Most Hits In 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2019</td><td>555</td><td>37</td><td><a href="OTHL-555.html">Game Direct Link</a></td></tr><tr><td>2</td><td>2019</td><td>376</td><td>36</td><td><a href="OTHL-376.html">Game Direct Link</a></td></tr><tr><td>3</td><td>2010</td><td>521</td><td>35</td><td></td></tr><tr><td>4</td><td>2013</td><td>63</td><td>35</td><td></td></tr><tr><td>5</td><td>2011</td><td>279</td><td>34</td><td></td></tr><tr><td>6</td><td>2019</td><td>390</td><td>34</td><td><a href="OTHL-390.html">Game Direct Link</a></td></tr><tr><td>7</td><td>2011</td><td>303</td><td>33</td><td></td></tr><tr><td>8</td><td>2011</td><td>461</td><td>33</td><td></td></tr><tr><td>9</td><td>2011</td><td>1083</td><td>33</td><td></td></tr><tr><td>10</td><td>2012</td><td>591</td><td>33</td><td></td></tr>
<tr><td colspan="5"><b>Most Hits In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2011</td><td>0</td><td>1983</td><td></td></tr>
<tr><td>2</td><td>2019</td><td>0</td><td>1837</td><td></td></tr>
<tr><td>3</td><td>2017</td><td>0</td><td>1794</td><td></td></tr>
<tr><td>4</td><td>2010</td><td>0</td><td>1758</td><td></td></tr>
<tr><td>5</td><td>2016</td><td>0</td><td>1742</td><td></td></tr>
<tr><td>6</td><td>2012</td><td>0</td><td>1737</td><td></td></tr>
<tr><td>7</td><td>2018</td><td>0</td><td>1690</td><td></td></tr>
<tr><td>8</td><td>2013</td><td>0</td><td>1687</td><td></td></tr>
<tr><td>9</td><td>2014</td><td>0</td><td>1602</td><td></td></tr>
<tr><td>10</td><td>2009</td><td>0</td><td>1577</td><td></td></tr>

<tr><td colspan="5"><b>Less Hit In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2008</td><td>0</td><td>1481</td><td></td></tr>
<tr><td>2</td><td>2009</td><td>0</td><td>1577</td><td></td></tr>
<tr><td>3</td><td>2015</td><td>0</td><td>1600</td><td></td></tr>
<tr><td>4</td><td>2014</td><td>0</td><td>1602</td><td></td></tr>
<tr><td>5</td><td>2013</td><td>0</td><td>1687</td><td></td></tr>
<tr><td>6</td><td>2018</td><td>0</td><td>1690</td><td></td></tr>
<tr><td>7</td><td>2012</td><td>0</td><td>1737</td><td></td></tr>
<tr><td>8</td><td>2010</td><td>0</td><td>1758</td><td></td></tr>
<tr><td>9</td><td>2019</td><td>0</td><td>1837</td><td></td></tr>
<tr><td>10</td><td>2011</td><td>0</td><td>1983</td><td></td></tr>

<tr><td colspan="5"><b>Most Empty Net Goal In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2013</td><td>0</td><td>5</td><td></td></tr>
<tr><td>2</td><td>2015</td><td>0</td><td>3</td><td></td></tr>
<tr><td>3</td><td>2016</td><td>0</td><td>3</td><td></td></tr>
<tr><td>4</td><td>2019</td><td>0</td><td>3</td><td></td></tr>
<tr><td>5</td><td>2010</td><td>0</td><td>2</td><td></td></tr>
<tr><td>6</td><td>2011</td><td>0</td><td>2</td><td></td></tr>
<tr><td>7</td><td>2012</td><td>0</td><td>2</td><td></td></tr>
<tr><td>8</td><td>2018</td><td>0</td><td>2</td><td></td></tr>
<tr><td>9</td><td>2008</td><td>0</td><td>1</td><td></td></tr>

<tr><td colspan="5"><b>Best PP In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2011</td><td>0</td><td>21.10%</td><td></td></tr>
<tr><td>2</td><td>2016</td><td>0</td><td>21.10%</td><td></td></tr>
<tr><td>3</td><td>2009</td><td>0</td><td>20.60%</td><td></td></tr>
<tr><td>4</td><td>2018</td><td>0</td><td>20.50%</td><td></td></tr>
<tr><td>5</td><td>2012</td><td>0</td><td>20.00%</td><td></td></tr>
<tr><td>6</td><td>2008</td><td>0</td><td>17.70%</td><td></td></tr>
<tr><td>7</td><td>2014</td><td>0</td><td>17.50%</td><td></td></tr>
<tr><td>8</td><td>2019</td><td>0</td><td>16.60%</td><td></td></tr>
<tr><td>9</td><td>2013</td><td>0</td><td>16.40%</td><td></td></tr>
<tr><td>10</td><td>2010</td><td>0</td><td>16.20%</td><td></td></tr>

<tr><td colspan="5"><b>Best PK In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2012</td><td>0</td><td>89.70%</td><td></td></tr>
<tr><td>2</td><td>2016</td><td>0</td><td>86.80%</td><td></td></tr>
<tr><td>3</td><td>2015</td><td>0</td><td>84.60%</td><td></td></tr>
<tr><td>4</td><td>2008</td><td>0</td><td>84.10%</td><td></td></tr>
<tr><td>5</td><td>2013</td><td>0</td><td>83.20%</td><td></td></tr>
<tr><td>6</td><td>2019</td><td>0</td><td>82.40%</td><td></td></tr>
<tr><td>7</td><td>2014</td><td>0</td><td>82.10%</td><td></td></tr>
<tr><td>8</td><td>2010</td><td>0</td><td>81.10%</td><td></td></tr>
<tr><td>9</td><td>2018</td><td>0</td><td>79.40%</td><td></td></tr>
<tr><td>10</td><td>2009</td><td>0</td><td>78.70%</td><td></td></tr>

<tr><td colspan="5"><b>Worse PP In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2017</td><td>0</td><td>13.70%</td><td></td></tr>
<tr><td>2</td><td>2015</td><td>0</td><td>15.10%</td><td></td></tr>
<tr><td>3</td><td>2010</td><td>0</td><td>16.20%</td><td></td></tr>
<tr><td>4</td><td>2013</td><td>0</td><td>16.40%</td><td></td></tr>
<tr><td>5</td><td>2019</td><td>0</td><td>16.60%</td><td></td></tr>
<tr><td>6</td><td>2014</td><td>0</td><td>17.50%</td><td></td></tr>
<tr><td>7</td><td>2008</td><td>0</td><td>17.70%</td><td></td></tr>
<tr><td>8</td><td>2012</td><td>0</td><td>20.00%</td><td></td></tr>
<tr><td>9</td><td>2018</td><td>0</td><td>20.50%</td><td></td></tr>
<tr><td>10</td><td>2009</td><td>0</td><td>20.60%</td><td></td></tr>

<tr><td colspan="5"><b>Worse PK In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2011</td><td>0</td><td>78.40%</td><td></td></tr>
<tr><td>2</td><td>2009</td><td>0</td><td>78.70%</td><td></td></tr>
<tr><td>3</td><td>2018</td><td>0</td><td>79.40%</td><td></td></tr>
<tr><td>4</td><td>2017</td><td>0</td><td>80.80%</td><td></td></tr>
<tr><td>5</td><td>2010</td><td>0</td><td>81.10%</td><td></td></tr>
<tr><td>6</td><td>2014</td><td>0</td><td>82.10%</td><td></td></tr>
<tr><td>7</td><td>2019</td><td>0</td><td>82.40%</td><td></td></tr>
<tr><td>8</td><td>2013</td><td>0</td><td>83.20%</td><td></td></tr>
<tr><td>9</td><td>2008</td><td>0</td><td>84.10%</td><td></td></tr>
<tr><td>10</td><td>2012</td><td>0</td><td>89.70%</td><td></td></tr>

<tr><td colspan="5"><b>Most Win In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2015</td><td>0</td><td>47</td><td></td></tr>
<tr><td>2</td><td>2016</td><td>0</td><td>46</td><td></td></tr>
<tr><td>3</td><td>2011</td><td>0</td><td>42</td><td></td></tr>
<tr><td>4</td><td>2018</td><td>0</td><td>42</td><td></td></tr>
<tr><td>5</td><td>2017</td><td>0</td><td>40</td><td></td></tr>
<tr><td>6</td><td>2014</td><td>0</td><td>37</td><td></td></tr>
<tr><td>7</td><td>2019</td><td>0</td><td>37</td><td></td></tr>
<tr><td>8</td><td>2012</td><td>0</td><td>36</td><td></td></tr>
<tr><td>9</td><td>2013</td><td>0</td><td>35</td><td></td></tr>
<tr><td>10</td><td>2008</td><td>0</td><td>33</td><td></td></tr>

<tr><td colspan="5"><b>Less Win In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2010</td><td>0</td><td>28</td><td></td></tr>
<tr><td>2</td><td>2009</td><td>0</td><td>30</td><td></td></tr>
<tr><td>3</td><td>2008</td><td>0</td><td>33</td><td></td></tr>
<tr><td>4</td><td>2013</td><td>0</td><td>35</td><td></td></tr>
<tr><td>5</td><td>2012</td><td>0</td><td>36</td><td></td></tr>
<tr><td>6</td><td>2019</td><td>0</td><td>37</td><td></td></tr>
<tr><td>7</td><td>2011</td><td>0</td><td>42</td><td></td></tr>

<tr><td colspan="5"><b>Most Lost In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2010</td><td>0</td><td>54</td><td></td></tr>
<tr><td>2</td><td>2009</td><td>0</td><td>52</td><td></td></tr>
<tr><td>3</td><td>2013</td><td>0</td><td>47</td><td></td></tr>
<tr><td>4</td><td>2012</td><td>0</td><td>46</td><td></td></tr>
<tr><td>5</td><td>2014</td><td>0</td><td>45</td><td></td></tr>
<tr><td>6</td><td>2019</td><td>0</td><td>45</td><td></td></tr>
<tr><td>7</td><td>2011</td><td>0</td><td>40</td><td></td></tr>
<tr><td>8</td><td>2018</td><td>0</td><td>40</td><td></td></tr>
<tr><td>9</td><td>2008</td><td>0</td><td>25</td><td></td></tr>

<tr><td colspan="5"><b>Less Lost In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2008</td><td>0</td><td>25</td><td></td></tr>
<tr><td>2</td><td>2015</td><td>0</td><td>35</td><td></td></tr>
<tr><td>3</td><td>2016</td><td>0</td><td>36</td><td></td></tr>
<tr><td>4</td><td>2011</td><td>0</td><td>40</td><td></td></tr>
<tr><td>5</td><td>2018</td><td>0</td><td>40</td><td></td></tr>
<tr><td>6</td><td>2017</td><td>0</td><td>42</td><td></td></tr>
<tr><td>7</td><td>2014</td><td>0</td><td>45</td><td></td></tr>
<tr><td>8</td><td>2019</td><td>0</td><td>45</td><td></td></tr>
<tr><td>9</td><td>2012</td><td>0</td><td>46</td><td></td></tr>
<tr><td>10</td><td>2013</td><td>0</td><td>47</td><td></td></tr>

<tr><td colspan="5"><b>Most Point In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2008</td><td>0</td><td>103</td><td></td></tr>
<tr><td>2</td><td>2015</td><td>0</td><td>101</td><td></td></tr>
<tr><td>3</td><td>2016</td><td>0</td><td>98</td><td></td></tr>
<tr><td>4</td><td>2011</td><td>0</td><td>95</td><td></td></tr>
<tr><td>5</td><td>2018</td><td>0</td><td>94</td><td></td></tr>
<tr><td>6</td><td>2017</td><td>0</td><td>89</td><td></td></tr>
<tr><td>7</td><td>2019</td><td>0</td><td>86</td><td></td></tr>
<tr><td>8</td><td>2014</td><td>0</td><td>84</td><td></td></tr>
<tr><td>9</td><td>2012</td><td>0</td><td>83</td><td></td></tr>
<tr><td>10</td><td>2013</td><td>0</td><td>72</td><td></td></tr>

<tr><td colspan="5"><b>Less Points In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2010</td><td>0</td><td>63</td><td></td></tr>
<tr><td>2</td><td>2009</td><td>0</td><td>69</td><td></td></tr>
<tr><td>3</td><td>2013</td><td>0</td><td>72</td><td></td></tr>
<tr><td>4</td><td>2012</td><td>0</td><td>83</td><td></td></tr>
<tr><td>5</td><td>2014</td><td>0</td><td>84</td><td></td></tr>
<tr><td>6</td><td>2019</td><td>0</td><td>86</td><td></td></tr>
<tr><td>7</td><td>2018</td><td>0</td><td>94</td><td></td></tr>
<tr><td>8</td><td>2011</td><td>0</td><td>95</td><td></td></tr>
<tr><td>9</td><td>2008</td><td>0</td><td>103</td><td></td></tr>

<tr><td colspan="5"><b>Most Win Home In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>0</td><td>0</td><td>32000</td><td></td></tr>
<tr><td>2</td><td>0</td><td>0</td><td>32000</td><td></td></tr>

<tr><td colspan="5"><b>Most Win Visitor In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>0</td><td>0</td><td>32000</td><td></td></tr>
<tr><td>2</td><td>0</td><td>0</td><td>32000</td><td></td></tr>

</table></div>
<h1 class="TeamRecordsPro_ANH"><a id="Ducks">Ducks</a></h1>
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
<br /><table class="STHSRecordTable">
<tr><td colspan="5"><b>Most Goals in 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2009</td><td>984</td><td>8</td><td></td></tr><tr><td>2</td><td>2010</td><td>968</td><td>8</td><td></td></tr><tr><td>3</td><td>2011</td><td>384</td><td>8</td><td></td></tr><tr><td>4</td><td>2013</td><td>664</td><td>8</td><td></td></tr><tr><td>5</td><td>2014</td><td>311</td><td>8</td><td></td></tr><tr><td>6</td><td>2014</td><td>529</td><td>8</td><td></td></tr><tr><td>7</td><td>2015</td><td>1166</td><td>8</td><td></td></tr><tr><td>8</td><td>2009</td><td>306</td><td>7</td><td></td></tr><tr><td>9</td><td>2009</td><td>1005</td><td>7</td><td></td></tr><tr><td>10</td><td>2009</td><td>1174</td><td>7</td><td></td></tr>
<tr><td colspan="5"><b>Most Goals in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2016</td><td>0</td><td>281</td><td></td></tr>
<tr><td>2</td><td>2009</td><td>0</td><td>264</td><td></td></tr>
<tr><td>3</td><td>2015</td><td>0</td><td>263</td><td></td></tr>
<tr><td>4</td><td>2008</td><td>0</td><td>257</td><td></td></tr>
<tr><td>5</td><td>2014</td><td>0</td><td>249</td><td></td></tr>
<tr><td>6</td><td>2011</td><td>0</td><td>237</td><td></td></tr>
<tr><td>7</td><td>2010</td><td>0</td><td>236</td><td></td></tr>
<tr><td>8</td><td>2013</td><td>0</td><td>235</td><td></td></tr>
<tr><td>9</td><td>2018</td><td>0</td><td>226</td><td></td></tr>
<tr><td>10</td><td>2019</td><td>0</td><td>215</td><td></td></tr>

<tr><td colspan="5"><b>Less Goal in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2012</td><td>0</td><td>209</td><td></td></tr>
<tr><td>2</td><td>2019</td><td>0</td><td>215</td><td></td></tr>
<tr><td>3</td><td>2018</td><td>0</td><td>226</td><td></td></tr>
<tr><td>4</td><td>2013</td><td>0</td><td>235</td><td></td></tr>
<tr><td>5</td><td>2017</td><td>0</td><td>235</td><td></td></tr>
<tr><td>6</td><td>2010</td><td>0</td><td>236</td><td></td></tr>
<tr><td>7</td><td>2011</td><td>0</td><td>237</td><td></td></tr>
<tr><td>8</td><td>2014</td><td>0</td><td>249</td><td></td></tr>
<tr><td>9</td><td>2008</td><td>0</td><td>257</td><td></td></tr>
<tr><td>10</td><td>2009</td><td>0</td><td>264</td><td></td></tr>

<tr><td colspan="5"><b>Most Goals Against in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2010</td><td>0</td><td>264</td><td></td></tr>
<tr><td>2</td><td>2012</td><td>0</td><td>262</td><td></td></tr>
<tr><td>3</td><td>2009</td><td>0</td><td>254</td><td></td></tr>
<tr><td>4</td><td>2016</td><td>0</td><td>240</td><td></td></tr>
<tr><td>5</td><td>2011</td><td>0</td><td>235</td><td></td></tr>
<tr><td>6</td><td>2008</td><td>0</td><td>232</td><td></td></tr>
<tr><td>7</td><td>2019</td><td>0</td><td>230</td><td></td></tr>
<tr><td>8</td><td>2018</td><td>0</td><td>213</td><td></td></tr>

<tr><td colspan="5"><b>Less Goal Against in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2014</td><td>0</td><td>196</td><td></td></tr>
<tr><td>2</td><td>2013</td><td>0</td><td>197</td><td></td></tr>
<tr><td>3</td><td>2018</td><td>0</td><td>213</td><td></td></tr>
<tr><td>4</td><td>2017</td><td>0</td><td>216</td><td></td></tr>
<tr><td>5</td><td>2015</td><td>0</td><td>219</td><td></td></tr>
<tr><td>6</td><td>2019</td><td>0</td><td>230</td><td></td></tr>
<tr><td>7</td><td>2008</td><td>0</td><td>232</td><td></td></tr>
<tr><td>8</td><td>2011</td><td>0</td><td>235</td><td></td></tr>
<tr><td>9</td><td>2009</td><td>0</td><td>254</td><td></td></tr>
<tr><td>10</td><td>2012</td><td>0</td><td>262</td><td></td></tr>

<tr><td colspan="5"><b>Most Assists in 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2010</td><td>968</td><td>16</td><td></td></tr><tr><td>2</td><td>2011</td><td>384</td><td>15</td><td></td></tr><tr><td>3</td><td>2013</td><td>664</td><td>15</td><td></td></tr><tr><td>4</td><td>2014</td><td>529</td><td>15</td><td></td></tr><tr><td>5</td><td>2015</td><td>1166</td><td>15</td><td></td></tr><tr><td>6</td><td>2016</td><td>962</td><td>14</td><td></td></tr><tr><td>7</td><td>2018</td><td>179</td><td>14</td><td></td></tr><tr><td>8</td><td>2019</td><td>559</td><td>14</td><td><a href="OTHL-559.html">Game Direct Link</a></td></tr><tr><td>9</td><td>2009</td><td>984</td><td>13</td><td></td></tr><tr><td>10</td><td>2009</td><td>1174</td><td>13</td><td></td></tr>
<tr><td colspan="5"><b>Most Assists in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2016</td><td>0</td><td>502</td><td></td></tr>
<tr><td>2</td><td>2009</td><td>0</td><td>477</td><td></td></tr>
<tr><td>3</td><td>2015</td><td>0</td><td>467</td><td></td></tr>
<tr><td>4</td><td>2008</td><td>0</td><td>454</td><td></td></tr>
<tr><td>5</td><td>2014</td><td>0</td><td>441</td><td></td></tr>
<tr><td>6</td><td>2010</td><td>0</td><td>418</td><td></td></tr>
<tr><td>7</td><td>2013</td><td>0</td><td>406</td><td></td></tr>
<tr><td>8</td><td>2018</td><td>0</td><td>404</td><td></td></tr>
<tr><td>9</td><td>2011</td><td>0</td><td>388</td><td></td></tr>
<tr><td>10</td><td>2019</td><td>0</td><td>381</td><td></td></tr>

<tr><td colspan="5"><b>Less Assist in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2012</td><td>0</td><td>367</td><td></td></tr>
<tr><td>2</td><td>2019</td><td>0</td><td>381</td><td></td></tr>
<tr><td>3</td><td>2011</td><td>0</td><td>388</td><td></td></tr>
<tr><td>4</td><td>2017</td><td>0</td><td>399</td><td></td></tr>
<tr><td>5</td><td>2018</td><td>0</td><td>404</td><td></td></tr>
<tr><td>6</td><td>2013</td><td>0</td><td>406</td><td></td></tr>
<tr><td>7</td><td>2010</td><td>0</td><td>418</td><td></td></tr>
<tr><td>8</td><td>2014</td><td>0</td><td>441</td><td></td></tr>
<tr><td>9</td><td>2008</td><td>0</td><td>454</td><td></td></tr>
<tr><td>10</td><td>2009</td><td>0</td><td>477</td><td></td></tr>

<tr><td colspan="5"><b>Most Game Points in 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2010</td><td>968</td><td>24</td><td></td></tr><tr><td>2</td><td>2011</td><td>384</td><td>23</td><td></td></tr><tr><td>3</td><td>2013</td><td>664</td><td>23</td><td></td></tr><tr><td>4</td><td>2014</td><td>529</td><td>23</td><td></td></tr><tr><td>5</td><td>2015</td><td>1166</td><td>23</td><td></td></tr><tr><td>6</td><td>2009</td><td>984</td><td>21</td><td></td></tr><tr><td>7</td><td>2014</td><td>311</td><td>21</td><td></td></tr><tr><td>8</td><td>2016</td><td>962</td><td>21</td><td></td></tr><tr><td>9</td><td>2018</td><td>179</td><td>21</td><td></td></tr><tr><td>10</td><td>2019</td><td>559</td><td>21</td><td><a href="OTHL-559.html">Game Direct Link</a></td></tr>
<tr><td colspan="5"><b>Most Game Points in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>0</td><td>0</td><td>32000</td><td></td></tr>
<tr><td>2</td><td>0</td><td>0</td><td>32000</td><td></td></tr>

<tr><td colspan="5"><b>Less Game Point In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2012</td><td>0</td><td>576</td><td></td></tr>
<tr><td>2</td><td>2019</td><td>0</td><td>596</td><td></td></tr>
<tr><td>3</td><td>2011</td><td>0</td><td>625</td><td></td></tr>
<tr><td>4</td><td>2018</td><td>0</td><td>630</td><td></td></tr>
<tr><td>5</td><td>2017</td><td>0</td><td>634</td><td></td></tr>
<tr><td>6</td><td>2013</td><td>0</td><td>641</td><td></td></tr>
<tr><td>7</td><td>2010</td><td>0</td><td>654</td><td></td></tr>
<tr><td>8</td><td>2014</td><td>0</td><td>690</td><td></td></tr>
<tr><td>9</td><td>2008</td><td>0</td><td>711</td><td></td></tr>
<tr><td>10</td><td>2009</td><td>0</td><td>741</td><td></td></tr>

<tr><td colspan="5"><b>Most Shots In 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2018</td><td>1029</td><td>53</td><td></td></tr><tr><td>2</td><td>2019</td><td>37</td><td>53</td><td><a href="OTHL-37.html">Game Direct Link</a></td></tr><tr><td>3</td><td>2017</td><td>895</td><td>50</td><td></td></tr><tr><td>4</td><td>2013</td><td>125</td><td>49</td><td></td></tr><tr><td>5</td><td>2008</td><td>1122</td><td>48</td><td></td></tr><tr><td>6</td><td>2018</td><td>495</td><td>48</td><td></td></tr><tr><td>7</td><td>2018</td><td>1072</td><td>48</td><td></td></tr><tr><td>8</td><td>2008</td><td>667</td><td>47</td><td></td></tr><tr><td>9</td><td>2014</td><td>837</td><td>47</td><td></td></tr><tr><td>10</td><td>2017</td><td>332</td><td>47</td><td></td></tr>
<tr><td colspan="5"><b>Most Shots In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2011</td><td>0</td><td>2628</td><td></td></tr>
<tr><td>2</td><td>2018</td><td>0</td><td>2611</td><td></td></tr>
<tr><td>3</td><td>2019</td><td>0</td><td>2572</td><td></td></tr>
<tr><td>4</td><td>2016</td><td>0</td><td>2554</td><td></td></tr>
<tr><td>5</td><td>2017</td><td>0</td><td>2552</td><td></td></tr>
<tr><td>6</td><td>2015</td><td>0</td><td>2453</td><td></td></tr>
<tr><td>7</td><td>2014</td><td>0</td><td>2405</td><td></td></tr>
<tr><td>8</td><td>2008</td><td>0</td><td>2373</td><td></td></tr>
<tr><td>9</td><td>2013</td><td>0</td><td>2333</td><td></td></tr>
<tr><td>10</td><td>2009</td><td>0</td><td>2271</td><td></td></tr>

<tr><td colspan="5"><b>Less Shots In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2010</td><td>0</td><td>2068</td><td></td></tr>
<tr><td>2</td><td>2012</td><td>0</td><td>2254</td><td></td></tr>
<tr><td>3</td><td>2009</td><td>0</td><td>2271</td><td></td></tr>
<tr><td>4</td><td>2013</td><td>0</td><td>2333</td><td></td></tr>
<tr><td>5</td><td>2008</td><td>0</td><td>2373</td><td></td></tr>
<tr><td>6</td><td>2019</td><td>0</td><td>2572</td><td></td></tr>
<tr><td>7</td><td>2018</td><td>0</td><td>2611</td><td></td></tr>
<tr><td>8</td><td>2011</td><td>0</td><td>2628</td><td></td></tr>

<tr><td colspan="5"><b>Most Shots Blocked In 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2017</td><td>240</td><td>24</td><td></td></tr><tr><td>2</td><td>2009</td><td>1076</td><td>22</td><td></td></tr><tr><td>3</td><td>2011</td><td>170</td><td>20</td><td></td></tr><tr><td>4</td><td>2018</td><td>940</td><td>20</td><td></td></tr><tr><td>5</td><td>2010</td><td>336</td><td>19</td><td></td></tr><tr><td>6</td><td>2011</td><td>228</td><td>19</td><td></td></tr><tr><td>7</td><td>2012</td><td>273</td><td>19</td><td></td></tr><tr><td>8</td><td>2008</td><td>444</td><td>18</td><td></td></tr><tr><td>9</td><td>2008</td><td>1006</td><td>18</td><td></td></tr><tr><td>10</td><td>2009</td><td>510</td><td>18</td><td></td></tr>
<tr><td colspan="5"><b>Most Shots Blocked In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>0</td><td>0</td><td>32000</td><td></td></tr>
<tr><td>2</td><td>0</td><td>0</td><td>32000</td><td></td></tr>

<tr><td colspan="5"><b>Less Shots Block In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2013</td><td>0</td><td>548</td><td></td></tr>
<tr><td>2</td><td>2014</td><td>0</td><td>570</td><td></td></tr>
<tr><td>3</td><td>2015</td><td>0</td><td>582</td><td></td></tr>
<tr><td>4</td><td>2008</td><td>0</td><td>587</td><td></td></tr>
<tr><td>5</td><td>2016</td><td>0</td><td>593</td><td></td></tr>
<tr><td>6</td><td>2009</td><td>0</td><td>626</td><td></td></tr>
<tr><td>7</td><td>2010</td><td>0</td><td>668</td><td></td></tr>
<tr><td>8</td><td>2018</td><td>0</td><td>677</td><td></td></tr>
<tr><td>9</td><td>2012</td><td>0</td><td>712</td><td></td></tr>
<tr><td>10</td><td>2019</td><td>0</td><td>723</td><td></td></tr>

<tr><td colspan="5"><b>Most Shots Against In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2019</td><td>0</td><td>2593</td><td></td></tr>
<tr><td>2</td><td>2018</td><td>0</td><td>2533</td><td></td></tr>
<tr><td>3</td><td>2017</td><td>0</td><td>2395</td><td></td></tr>
<tr><td>4</td><td>2011</td><td>0</td><td>2372</td><td></td></tr>
<tr><td>5</td><td>2012</td><td>0</td><td>2363</td><td></td></tr>
<tr><td>6</td><td>2010</td><td>0</td><td>2224</td><td></td></tr>
<tr><td>7</td><td>2016</td><td>0</td><td>2166</td><td></td></tr>
<tr><td>8</td><td>2009</td><td>0</td><td>2164</td><td></td></tr>
<tr><td>9</td><td>2008</td><td>0</td><td>2082</td><td></td></tr>

<tr><td colspan="5"><b>Less Shots Against In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2013</td><td>0</td><td>2003</td><td></td></tr>
<tr><td>2</td><td>2014</td><td>0</td><td>2016</td><td></td></tr>
<tr><td>3</td><td>2015</td><td>0</td><td>2038</td><td></td></tr>
<tr><td>4</td><td>2008</td><td>0</td><td>2082</td><td></td></tr>
<tr><td>5</td><td>2009</td><td>0</td><td>2164</td><td></td></tr>
<tr><td>6</td><td>2010</td><td>0</td><td>2224</td><td></td></tr>
<tr><td>7</td><td>2012</td><td>0</td><td>2363</td><td></td></tr>
<tr><td>8</td><td>2011</td><td>0</td><td>2372</td><td></td></tr>

<tr><td colspan="5"><b>Most Pim In 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2009</td><td>756</td><td>57</td><td></td></tr><tr><td>2</td><td>2010</td><td>36</td><td>57</td><td></td></tr><tr><td>3</td><td>2011</td><td>663</td><td>53</td><td></td></tr><tr><td>4</td><td>2008</td><td>918</td><td>49</td><td></td></tr><tr><td>5</td><td>2010</td><td>1230</td><td>47</td><td></td></tr><tr><td>6</td><td>2008</td><td>125</td><td>46</td><td></td></tr><tr><td>7</td><td>2011</td><td>357</td><td>44</td><td></td></tr><tr><td>8</td><td>2011</td><td>131</td><td>40</td><td></td></tr><tr><td>9</td><td>2012</td><td>829</td><td>36</td><td></td></tr><tr><td>10</td><td>2011</td><td>949</td><td>34</td><td></td></tr>
<tr><td colspan="5"><b>Most Pim In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2008</td><td>0</td><td>1377</td><td></td></tr>
<tr><td>2</td><td>2010</td><td>0</td><td>1332</td><td></td></tr>
<tr><td>3</td><td>2009</td><td>0</td><td>1281</td><td></td></tr>
<tr><td>4</td><td>2011</td><td>0</td><td>1209</td><td></td></tr>
<tr><td>5</td><td>2016</td><td>0</td><td>905</td><td></td></tr>
<tr><td>6</td><td>2012</td><td>0</td><td>801</td><td></td></tr>
<tr><td>7</td><td>2019</td><td>0</td><td>636</td><td></td></tr>
<tr><td>8</td><td>2018</td><td>0</td><td>531</td><td></td></tr>

<tr><td colspan="5"><b>Less Pim In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2018</td><td>0</td><td>531</td><td></td></tr>
<tr><td>2</td><td>2017</td><td>0</td><td>551</td><td></td></tr>
<tr><td>3</td><td>2015</td><td>0</td><td>572</td><td></td></tr>
<tr><td>4</td><td>2019</td><td>0</td><td>636</td><td></td></tr>
<tr><td>5</td><td>2014</td><td>0</td><td>707</td><td></td></tr>
<tr><td>6</td><td>2013</td><td>0</td><td>747</td><td></td></tr>
<tr><td>7</td><td>2012</td><td>0</td><td>801</td><td></td></tr>
<tr><td>8</td><td>2016</td><td>0</td><td>905</td><td></td></tr>
<tr><td>9</td><td>2011</td><td>0</td><td>1209</td><td></td></tr>
<tr><td>10</td><td>2009</td><td>0</td><td>1281</td><td></td></tr>

<tr><td colspan="5"><b>Most Hits In 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2018</td><td>713</td><td>37</td><td></td></tr><tr><td>2</td><td>2011</td><td>830</td><td>36</td><td></td></tr><tr><td>3</td><td>2014</td><td>435</td><td>36</td><td></td></tr><tr><td>4</td><td>2012</td><td>27</td><td>35</td><td></td></tr><tr><td>5</td><td>2019</td><td>176</td><td>35</td><td><a href="OTHL-176.html">Game Direct Link</a></td></tr><tr><td>6</td><td>2011</td><td>628</td><td>34</td><td></td></tr><tr><td>7</td><td>2009</td><td>756</td><td>33</td><td></td></tr><tr><td>8</td><td>2010</td><td>284</td><td>33</td><td></td></tr><tr><td>9</td><td>2010</td><td>303</td><td>33</td><td></td></tr><tr><td>10</td><td>2010</td><td>1205</td><td>33</td><td></td></tr>
<tr><td colspan="5"><b>Most Hits In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2011</td><td>0</td><td>2004</td><td></td></tr>
<tr><td>2</td><td>2016</td><td>0</td><td>1721</td><td></td></tr>
<tr><td>3</td><td>2012</td><td>0</td><td>1708</td><td></td></tr>
<tr><td>4</td><td>2019</td><td>0</td><td>1644</td><td></td></tr>
<tr><td>5</td><td>2014</td><td>0</td><td>1619</td><td></td></tr>
<tr><td>6</td><td>2018</td><td>0</td><td>1611</td><td></td></tr>
<tr><td>7</td><td>2013</td><td>0</td><td>1607</td><td></td></tr>
<tr><td>8</td><td>2010</td><td>0</td><td>1602</td><td></td></tr>
<tr><td>9</td><td>2008</td><td>0</td><td>1550</td><td></td></tr>
<tr><td>10</td><td>2009</td><td>0</td><td>1494</td><td></td></tr>

<tr><td colspan="5"><b>Less Hit In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2015</td><td>0</td><td>1391</td><td></td></tr>
<tr><td>2</td><td>2009</td><td>0</td><td>1494</td><td></td></tr>
<tr><td>3</td><td>2017</td><td>0</td><td>1544</td><td></td></tr>
<tr><td>4</td><td>2008</td><td>0</td><td>1550</td><td></td></tr>
<tr><td>5</td><td>2010</td><td>0</td><td>1602</td><td></td></tr>
<tr><td>6</td><td>2013</td><td>0</td><td>1607</td><td></td></tr>
<tr><td>7</td><td>2018</td><td>0</td><td>1611</td><td></td></tr>
<tr><td>8</td><td>2014</td><td>0</td><td>1619</td><td></td></tr>
<tr><td>9</td><td>2019</td><td>0</td><td>1644</td><td></td></tr>
<tr><td>10</td><td>2012</td><td>0</td><td>1708</td><td></td></tr>

<tr><td colspan="5"><b>Most Empty Net Goal In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2018</td><td>0</td><td>3</td><td></td></tr>
<tr><td>2</td><td>2010</td><td>0</td><td>2</td><td></td></tr>
<tr><td>3</td><td>2012</td><td>0</td><td>2</td><td></td></tr>
<tr><td>4</td><td>2013</td><td>0</td><td>2</td><td></td></tr>
<tr><td>5</td><td>2014</td><td>0</td><td>2</td><td></td></tr>
<tr><td>6</td><td>2009</td><td>0</td><td>1</td><td></td></tr>
<tr><td>7</td><td>2011</td><td>0</td><td>1</td><td></td></tr>
<tr><td>8</td><td>2019</td><td>0</td><td>1</td><td></td></tr>

<tr><td colspan="5"><b>Best PP In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2016</td><td>0</td><td>22.80%</td><td></td></tr>
<tr><td>2</td><td>2015</td><td>0</td><td>22.50%</td><td></td></tr>
<tr><td>3</td><td>2009</td><td>0</td><td>20.30%</td><td></td></tr>
<tr><td>4</td><td>2011</td><td>0</td><td>19.90%</td><td></td></tr>
<tr><td>5</td><td>2010</td><td>0</td><td>18.10%</td><td></td></tr>
<tr><td>6</td><td>2019</td><td>0</td><td>16.90%</td><td></td></tr>
<tr><td>7</td><td>2008</td><td>0</td><td>16.70%</td><td></td></tr>
<tr><td>8</td><td>2012</td><td>0</td><td>16.60%</td><td></td></tr>
<tr><td>9</td><td>2018</td><td>0</td><td>16.50%</td><td></td></tr>

<tr><td colspan="5"><b>Best PK In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2015</td><td>0</td><td>85.80%</td><td></td></tr>
<tr><td>2</td><td>2014</td><td>0</td><td>84.30%</td><td></td></tr>
<tr><td>3</td><td>2008</td><td>0</td><td>83.20%</td><td></td></tr>
<tr><td>4</td><td>2013</td><td>0</td><td>83.00%</td><td></td></tr>
<tr><td>5</td><td>2018</td><td>0</td><td>82.50%</td><td></td></tr>
<tr><td>6</td><td>2019</td><td>0</td><td>81.90%</td><td></td></tr>
<tr><td>7</td><td>2016</td><td>0</td><td>81.80%</td><td></td></tr>
<tr><td>8</td><td>2009</td><td>0</td><td>81.20%</td><td></td></tr>
<tr><td>9</td><td>2012</td><td>0</td><td>81.10%</td><td></td></tr>
<tr><td>10</td><td>2010</td><td>0</td><td>80.10%</td><td></td></tr>

<tr><td colspan="5"><b>Worse PP In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2014</td><td>0</td><td>13.70%</td><td></td></tr>
<tr><td>2</td><td>2013</td><td>0</td><td>14.80%</td><td></td></tr>
<tr><td>3</td><td>2017</td><td>0</td><td>15.40%</td><td></td></tr>
<tr><td>4</td><td>2018</td><td>0</td><td>16.50%</td><td></td></tr>
<tr><td>5</td><td>2012</td><td>0</td><td>16.60%</td><td></td></tr>
<tr><td>6</td><td>2008</td><td>0</td><td>16.70%</td><td></td></tr>
<tr><td>7</td><td>2019</td><td>0</td><td>16.90%</td><td></td></tr>
<tr><td>8</td><td>2010</td><td>0</td><td>18.10%</td><td></td></tr>
<tr><td>9</td><td>2011</td><td>0</td><td>19.90%</td><td></td></tr>
<tr><td>10</td><td>2009</td><td>0</td><td>20.30%</td><td></td></tr>

<tr><td colspan="5"><b>Worse PK In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2011</td><td>0</td><td>77.20%</td><td></td></tr>
<tr><td>2</td><td>2010</td><td>0</td><td>80.10%</td><td></td></tr>
<tr><td>3</td><td>2012</td><td>0</td><td>81.10%</td><td></td></tr>
<tr><td>4</td><td>2009</td><td>0</td><td>81.20%</td><td></td></tr>
<tr><td>5</td><td>2017</td><td>0</td><td>81.20%</td><td></td></tr>
<tr><td>6</td><td>2016</td><td>0</td><td>81.80%</td><td></td></tr>
<tr><td>7</td><td>2019</td><td>0</td><td>81.90%</td><td></td></tr>
<tr><td>8</td><td>2018</td><td>0</td><td>82.50%</td><td></td></tr>
<tr><td>9</td><td>2013</td><td>0</td><td>83.00%</td><td></td></tr>
<tr><td>10</td><td>2008</td><td>0</td><td>83.20%</td><td></td></tr>

<tr><td colspan="5"><b>Most Win In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2014</td><td>0</td><td>51</td><td></td></tr>
<tr><td>2</td><td>2016</td><td>0</td><td>50</td><td></td></tr>
<tr><td>3</td><td>2013</td><td>0</td><td>49</td><td></td></tr>
<tr><td>4</td><td>2009</td><td>0</td><td>48</td><td></td></tr>
<tr><td>5</td><td>2015</td><td>0</td><td>47</td><td></td></tr>
<tr><td>6</td><td>2011</td><td>0</td><td>44</td><td></td></tr>
<tr><td>7</td><td>2018</td><td>0</td><td>43</td><td></td></tr>
<tr><td>8</td><td>2008</td><td>0</td><td>40</td><td></td></tr>
<tr><td>9</td><td>2019</td><td>0</td><td>40</td><td></td></tr>
<tr><td>10</td><td>2010</td><td>0</td><td>33</td><td></td></tr>

<tr><td colspan="5"><b>Less Win In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2012</td><td>0</td><td>32</td><td></td></tr>
<tr><td>2</td><td>2010</td><td>0</td><td>33</td><td></td></tr>
<tr><td>3</td><td>2008</td><td>0</td><td>40</td><td></td></tr>
<tr><td>4</td><td>2019</td><td>0</td><td>40</td><td></td></tr>
<tr><td>5</td><td>2018</td><td>0</td><td>43</td><td></td></tr>
<tr><td>6</td><td>2011</td><td>0</td><td>44</td><td></td></tr>
<tr><td>7</td><td>2017</td><td>0</td><td>46</td><td></td></tr>
<tr><td>8</td><td>2015</td><td>0</td><td>47</td><td></td></tr>
<tr><td>9</td><td>2009</td><td>0</td><td>48</td><td></td></tr>

<tr><td colspan="5"><b>Most Lost In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2012</td><td>0</td><td>50</td><td></td></tr>
<tr><td>2</td><td>2010</td><td>0</td><td>49</td><td></td></tr>
<tr><td>3</td><td>2019</td><td>0</td><td>42</td><td></td></tr>
<tr><td>4</td><td>2018</td><td>0</td><td>39</td><td></td></tr>
<tr><td>5</td><td>2011</td><td>0</td><td>38</td><td></td></tr>
<tr><td>6</td><td>2017</td><td>0</td><td>36</td><td></td></tr>
<tr><td>7</td><td>2015</td><td>0</td><td>35</td><td></td></tr>
<tr><td>8</td><td>2009</td><td>0</td><td>34</td><td></td></tr>
<tr><td>9</td><td>2013</td><td>0</td><td>33</td><td></td></tr>
<tr><td>10</td><td>2008</td><td>0</td><td>26</td><td></td></tr>

<tr><td colspan="5"><b>Less Lost In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2008</td><td>0</td><td>26</td><td></td></tr>
<tr><td>2</td><td>2014</td><td>0</td><td>31</td><td></td></tr>
<tr><td>3</td><td>2016</td><td>0</td><td>32</td><td></td></tr>
<tr><td>4</td><td>2013</td><td>0</td><td>33</td><td></td></tr>
<tr><td>5</td><td>2009</td><td>0</td><td>34</td><td></td></tr>
<tr><td>6</td><td>2015</td><td>0</td><td>35</td><td></td></tr>
<tr><td>7</td><td>2011</td><td>0</td><td>38</td><td></td></tr>
<tr><td>8</td><td>2018</td><td>0</td><td>39</td><td></td></tr>
<tr><td>9</td><td>2019</td><td>0</td><td>42</td><td></td></tr>
<tr><td>10</td><td>2010</td><td>0</td><td>49</td><td></td></tr>

<tr><td colspan="5"><b>Most Point In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2014</td><td>0</td><td>111</td><td></td></tr>
<tr><td>2</td><td>2016</td><td>0</td><td>108</td><td></td></tr>
<tr><td>3</td><td>2008</td><td>0</td><td>104</td><td></td></tr>
<tr><td>4</td><td>2013</td><td>0</td><td>104</td><td></td></tr>
<tr><td>5</td><td>2015</td><td>0</td><td>101</td><td></td></tr>
<tr><td>6</td><td>2009</td><td>0</td><td>98</td><td></td></tr>
<tr><td>7</td><td>2011</td><td>0</td><td>96</td><td></td></tr>
<tr><td>8</td><td>2018</td><td>0</td><td>94</td><td></td></tr>
<tr><td>9</td><td>2019</td><td>0</td><td>92</td><td></td></tr>
<tr><td>10</td><td>2012</td><td>0</td><td>73</td><td></td></tr>

<tr><td colspan="5"><b>Less Points In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2010</td><td>0</td><td>72</td><td></td></tr>
<tr><td>2</td><td>2012</td><td>0</td><td>73</td><td></td></tr>
<tr><td>3</td><td>2019</td><td>0</td><td>92</td><td></td></tr>
<tr><td>4</td><td>2018</td><td>0</td><td>94</td><td></td></tr>
<tr><td>5</td><td>2011</td><td>0</td><td>96</td><td></td></tr>
<tr><td>6</td><td>2009</td><td>0</td><td>98</td><td></td></tr>
<tr><td>7</td><td>2017</td><td>0</td><td>98</td><td></td></tr>
<tr><td>8</td><td>2015</td><td>0</td><td>101</td><td></td></tr>
<tr><td>9</td><td>2008</td><td>0</td><td>104</td><td></td></tr>

<tr><td colspan="5"><b>Most Win Home In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>0</td><td>0</td><td>32000</td><td></td></tr>
<tr><td>2</td><td>0</td><td>0</td><td>32000</td><td></td></tr>

<tr><td colspan="5"><b>Most Win Visitor In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>0</td><td>0</td><td>32000</td><td></td></tr>
<tr><td>2</td><td>0</td><td>0</td><td>32000</td><td></td></tr>

</table></div>
<h1 class="TeamRecordsPro_CGY"><a id="Flames">Flames</a></h1>
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
<br /><table class="STHSRecordTable">
<tr><td colspan="5"><b>Most Goals in 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2011</td><td>553</td><td>9</td><td></td></tr><tr><td>2</td><td>2009</td><td>30</td><td>8</td><td></td></tr><tr><td>3</td><td>2016</td><td>21</td><td>8</td><td></td></tr><tr><td>4</td><td>2009</td><td>464</td><td>7</td><td></td></tr><tr><td>5</td><td>2011</td><td>21</td><td>7</td><td></td></tr><tr><td>6</td><td>2011</td><td>493</td><td>7</td><td></td></tr><tr><td>7</td><td>2012</td><td>633</td><td>7</td><td></td></tr><tr><td>8</td><td>2013</td><td>608</td><td>7</td><td></td></tr><tr><td>9</td><td>2014</td><td>135</td><td>7</td><td></td></tr><tr><td>10</td><td>2015</td><td>496</td><td>7</td><td></td></tr>
<tr><td colspan="5"><b>Most Goals in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2012</td><td>0</td><td>258</td><td></td></tr>
<tr><td>2</td><td>2011</td><td>0</td><td>247</td><td></td></tr>
<tr><td>3</td><td>2019</td><td>0</td><td>245</td><td></td></tr>
<tr><td>4</td><td>2014</td><td>0</td><td>244</td><td></td></tr>
<tr><td>5</td><td>2016</td><td>0</td><td>239</td><td></td></tr>
<tr><td>6</td><td>2008</td><td>0</td><td>237</td><td></td></tr>
<tr><td>7</td><td>2010</td><td>0</td><td>232</td><td></td></tr>
<tr><td>8</td><td>2009</td><td>0</td><td>224</td><td></td></tr>
<tr><td>9</td><td>2018</td><td>0</td><td>196</td><td></td></tr>

<tr><td colspan="5"><b>Less Goal in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2018</td><td>0</td><td>196</td><td></td></tr>
<tr><td>2</td><td>2015</td><td>0</td><td>214</td><td></td></tr>
<tr><td>3</td><td>2013</td><td>0</td><td>223</td><td></td></tr>
<tr><td>4</td><td>2009</td><td>0</td><td>224</td><td></td></tr>
<tr><td>5</td><td>2010</td><td>0</td><td>232</td><td></td></tr>
<tr><td>6</td><td>2008</td><td>0</td><td>237</td><td></td></tr>
<tr><td>7</td><td>2014</td><td>0</td><td>244</td><td></td></tr>
<tr><td>8</td><td>2019</td><td>0</td><td>245</td><td></td></tr>
<tr><td>9</td><td>2011</td><td>0</td><td>247</td><td></td></tr>
<tr><td>10</td><td>2012</td><td>0</td><td>258</td><td></td></tr>

<tr><td colspan="5"><b>Most Goals Against in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2009</td><td>0</td><td>263</td><td></td></tr>
<tr><td>2</td><td>2016</td><td>0</td><td>243</td><td></td></tr>
<tr><td>3</td><td>2011</td><td>0</td><td>239</td><td></td></tr>
<tr><td>4</td><td>2010</td><td>0</td><td>237</td><td></td></tr>
<tr><td>5</td><td>2014</td><td>0</td><td>236</td><td></td></tr>
<tr><td>6</td><td>2008</td><td>0</td><td>235</td><td></td></tr>
<tr><td>7</td><td>2013</td><td>0</td><td>221</td><td></td></tr>
<tr><td>8</td><td>2012</td><td>0</td><td>219</td><td></td></tr>
<tr><td>9</td><td>2019</td><td>0</td><td>203</td><td></td></tr>
<tr><td>10</td><td>2018</td><td>0</td><td>192</td><td></td></tr>

<tr><td colspan="5"><b>Less Goal Against in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2017</td><td>0</td><td>191</td><td></td></tr>
<tr><td>2</td><td>2018</td><td>0</td><td>192</td><td></td></tr>
<tr><td>3</td><td>2019</td><td>0</td><td>203</td><td></td></tr>
<tr><td>4</td><td>2015</td><td>0</td><td>209</td><td></td></tr>
<tr><td>5</td><td>2012</td><td>0</td><td>219</td><td></td></tr>
<tr><td>6</td><td>2013</td><td>0</td><td>221</td><td></td></tr>
<tr><td>7</td><td>2008</td><td>0</td><td>235</td><td></td></tr>
<tr><td>8</td><td>2014</td><td>0</td><td>236</td><td></td></tr>
<tr><td>9</td><td>2010</td><td>0</td><td>237</td><td></td></tr>
<tr><td>10</td><td>2011</td><td>0</td><td>239</td><td></td></tr>

<tr><td colspan="5"><b>Most Assists in 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2016</td><td>21</td><td>15</td><td></td></tr><tr><td>2</td><td>2009</td><td>30</td><td>14</td><td></td></tr><tr><td>3</td><td>2011</td><td>553</td><td>14</td><td></td></tr><tr><td>4</td><td>2015</td><td>496</td><td>14</td><td></td></tr><tr><td>5</td><td>2012</td><td>633</td><td>13</td><td></td></tr><tr><td>6</td><td>2013</td><td>608</td><td>13</td><td></td></tr><tr><td>7</td><td>2014</td><td>135</td><td>13</td><td></td></tr><tr><td>8</td><td>2016</td><td>1138</td><td>13</td><td></td></tr><tr><td>9</td><td>2009</td><td>71</td><td>12</td><td></td></tr><tr><td>10</td><td>2009</td><td>464</td><td>12</td><td></td></tr>
<tr><td colspan="5"><b>Most Assists in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2012</td><td>0</td><td>448</td><td></td></tr>
<tr><td>2</td><td>2019</td><td>0</td><td>442</td><td></td></tr>
<tr><td>3</td><td>2014</td><td>0</td><td>433</td><td></td></tr>
<tr><td>4</td><td>2016</td><td>0</td><td>433</td><td></td></tr>
<tr><td>5</td><td>2017</td><td>0</td><td>419</td><td></td></tr>
<tr><td>6</td><td>2010</td><td>0</td><td>416</td><td></td></tr>
<tr><td>7</td><td>2008</td><td>0</td><td>414</td><td></td></tr>
<tr><td>8</td><td>2011</td><td>0</td><td>408</td><td></td></tr>
<tr><td>9</td><td>2009</td><td>0</td><td>401</td><td></td></tr>
<tr><td>10</td><td>2018</td><td>0</td><td>347</td><td></td></tr>

<tr><td colspan="5"><b>Less Assist in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2018</td><td>0</td><td>347</td><td></td></tr>
<tr><td>2</td><td>2015</td><td>0</td><td>360</td><td></td></tr>
<tr><td>3</td><td>2013</td><td>0</td><td>395</td><td></td></tr>
<tr><td>4</td><td>2009</td><td>0</td><td>401</td><td></td></tr>
<tr><td>5</td><td>2011</td><td>0</td><td>408</td><td></td></tr>
<tr><td>6</td><td>2008</td><td>0</td><td>414</td><td></td></tr>
<tr><td>7</td><td>2010</td><td>0</td><td>416</td><td></td></tr>
<tr><td>8</td><td>2019</td><td>0</td><td>442</td><td></td></tr>
<tr><td>9</td><td>2012</td><td>0</td><td>448</td><td></td></tr>

<tr><td colspan="5"><b>Most Game Points in 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2011</td><td>553</td><td>23</td><td></td></tr><tr><td>2</td><td>2016</td><td>21</td><td>23</td><td></td></tr><tr><td>3</td><td>2009</td><td>30</td><td>22</td><td></td></tr><tr><td>4</td><td>2015</td><td>496</td><td>21</td><td></td></tr><tr><td>5</td><td>2012</td><td>633</td><td>20</td><td></td></tr><tr><td>6</td><td>2013</td><td>608</td><td>20</td><td></td></tr><tr><td>7</td><td>2014</td><td>135</td><td>20</td><td></td></tr><tr><td>8</td><td>2016</td><td>1138</td><td>20</td><td></td></tr><tr><td>9</td><td>2009</td><td>464</td><td>19</td><td></td></tr><tr><td>10</td><td>2011</td><td>21</td><td>19</td><td></td></tr>
<tr><td colspan="5"><b>Most Game Points in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>0</td><td>0</td><td>32000</td><td></td></tr>
<tr><td>2</td><td>0</td><td>0</td><td>32000</td><td></td></tr>

<tr><td colspan="5"><b>Less Game Point In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2018</td><td>0</td><td>543</td><td></td></tr>
<tr><td>2</td><td>2015</td><td>0</td><td>574</td><td></td></tr>
<tr><td>3</td><td>2013</td><td>0</td><td>618</td><td></td></tr>
<tr><td>4</td><td>2009</td><td>0</td><td>625</td><td></td></tr>
<tr><td>5</td><td>2010</td><td>0</td><td>648</td><td></td></tr>
<tr><td>6</td><td>2008</td><td>0</td><td>651</td><td></td></tr>
<tr><td>7</td><td>2011</td><td>0</td><td>655</td><td></td></tr>
<tr><td>8</td><td>2019</td><td>0</td><td>687</td><td></td></tr>
<tr><td>9</td><td>2012</td><td>0</td><td>706</td><td></td></tr>

<tr><td colspan="5"><b>Most Shots In 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2019</td><td>281</td><td>57</td><td><a href="OTHL-281.html">Game Direct Link</a></td></tr><tr><td>2</td><td>2017</td><td>415</td><td>55</td><td></td></tr><tr><td>3</td><td>2019</td><td>816</td><td>52</td><td><a href="OTHL-816.html">Game Direct Link</a></td></tr><tr><td>4</td><td>2017</td><td>239</td><td>49</td><td></td></tr><tr><td>5</td><td>2019</td><td>943</td><td>48</td><td><a href="OTHL-943.html">Game Direct Link</a></td></tr><tr><td>6</td><td>2008</td><td>739</td><td>47</td><td></td></tr><tr><td>7</td><td>2009</td><td>71</td><td>47</td><td></td></tr><tr><td>8</td><td>2014</td><td>354</td><td>47</td><td></td></tr><tr><td>9</td><td>2017</td><td>120</td><td>47</td><td></td></tr><tr><td>10</td><td>2019</td><td>169</td><td>47</td><td><a href="OTHL-169.html">Game Direct Link</a></td></tr>
<tr><td colspan="5"><b>Most Shots In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2019</td><td>0</td><td>2780</td><td></td></tr>
<tr><td>2</td><td>2017</td><td>0</td><td>2608</td><td></td></tr>
<tr><td>3</td><td>2018</td><td>0</td><td>2441</td><td></td></tr>
<tr><td>4</td><td>2011</td><td>0</td><td>2415</td><td></td></tr>
<tr><td>5</td><td>2012</td><td>0</td><td>2314</td><td></td></tr>
<tr><td>6</td><td>2014</td><td>0</td><td>2308</td><td></td></tr>
<tr><td>7</td><td>2016</td><td>0</td><td>2269</td><td></td></tr>
<tr><td>8</td><td>2008</td><td>0</td><td>2260</td><td></td></tr>
<tr><td>9</td><td>2015</td><td>0</td><td>2241</td><td></td></tr>
<tr><td>10</td><td>2009</td><td>0</td><td>2132</td><td></td></tr>

<tr><td colspan="5"><b>Less Shots In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2013</td><td>0</td><td>2041</td><td></td></tr>
<tr><td>2</td><td>2010</td><td>0</td><td>2075</td><td></td></tr>
<tr><td>3</td><td>2009</td><td>0</td><td>2132</td><td></td></tr>
<tr><td>4</td><td>2015</td><td>0</td><td>2241</td><td></td></tr>
<tr><td>5</td><td>2008</td><td>0</td><td>2260</td><td></td></tr>
<tr><td>6</td><td>2014</td><td>0</td><td>2308</td><td></td></tr>
<tr><td>7</td><td>2012</td><td>0</td><td>2314</td><td></td></tr>
<tr><td>8</td><td>2011</td><td>0</td><td>2415</td><td></td></tr>

<tr><td colspan="5"><b>Most Shots Blocked In 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2009</td><td>732</td><td>21</td><td></td></tr><tr><td>2</td><td>2011</td><td>445</td><td>18</td><td></td></tr><tr><td>3</td><td>2010</td><td>621</td><td>17</td><td></td></tr><tr><td>4</td><td>2010</td><td>776</td><td>17</td><td></td></tr><tr><td>5</td><td>2011</td><td>455</td><td>17</td><td></td></tr><tr><td>6</td><td>2017</td><td>755</td><td>17</td><td></td></tr><tr><td>7</td><td>2018</td><td>358</td><td>17</td><td></td></tr><tr><td>8</td><td>2019</td><td>962</td><td>17</td><td><a href="OTHL-962.html">Game Direct Link</a></td></tr><tr><td>9</td><td>2008</td><td>115</td><td>16</td><td></td></tr><tr><td>10</td><td>2008</td><td>817</td><td>16</td><td></td></tr>
<tr><td colspan="5"><b>Most Shots Blocked In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>0</td><td>0</td><td>32000</td><td></td></tr>
<tr><td>2</td><td>0</td><td>0</td><td>32000</td><td></td></tr>

<tr><td colspan="5"><b>Less Shots Block In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2014</td><td>0</td><td>582</td><td></td></tr>
<tr><td>2</td><td>2013</td><td>0</td><td>596</td><td></td></tr>
<tr><td>3</td><td>2010</td><td>0</td><td>611</td><td></td></tr>
<tr><td>4</td><td>2009</td><td>0</td><td>623</td><td></td></tr>
<tr><td>5</td><td>2016</td><td>0</td><td>646</td><td></td></tr>
<tr><td>6</td><td>2015</td><td>0</td><td>659</td><td></td></tr>
<tr><td>7</td><td>2012</td><td>0</td><td>668</td><td></td></tr>
<tr><td>8</td><td>2018</td><td>0</td><td>681</td><td></td></tr>
<tr><td>9</td><td>2008</td><td>0</td><td>741</td><td></td></tr>
<tr><td>10</td><td>2019</td><td>0</td><td>750</td><td></td></tr>

<tr><td colspan="5"><b>Most Shots Against In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2019</td><td>0</td><td>2474</td><td></td></tr>
<tr><td>2</td><td>2011</td><td>0</td><td>2382</td><td></td></tr>
<tr><td>3</td><td>2008</td><td>0</td><td>2365</td><td></td></tr>
<tr><td>4</td><td>2018</td><td>0</td><td>2353</td><td></td></tr>
<tr><td>5</td><td>2017</td><td>0</td><td>2324</td><td></td></tr>
<tr><td>6</td><td>2009</td><td>0</td><td>2285</td><td></td></tr>
<tr><td>7</td><td>2016</td><td>0</td><td>2181</td><td></td></tr>
<tr><td>8</td><td>2012</td><td>0</td><td>2179</td><td></td></tr>
<tr><td>9</td><td>2015</td><td>0</td><td>2175</td><td></td></tr>
<tr><td>10</td><td>2010</td><td>0</td><td>2137</td><td></td></tr>

<tr><td colspan="5"><b>Less Shots Against In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2013</td><td>0</td><td>2048</td><td></td></tr>
<tr><td>2</td><td>2014</td><td>0</td><td>2126</td><td></td></tr>
<tr><td>3</td><td>2010</td><td>0</td><td>2137</td><td></td></tr>
<tr><td>4</td><td>2015</td><td>0</td><td>2175</td><td></td></tr>
<tr><td>5</td><td>2012</td><td>0</td><td>2179</td><td></td></tr>
<tr><td>6</td><td>2009</td><td>0</td><td>2285</td><td></td></tr>
<tr><td>7</td><td>2018</td><td>0</td><td>2353</td><td></td></tr>
<tr><td>8</td><td>2008</td><td>0</td><td>2365</td><td></td></tr>
<tr><td>9</td><td>2011</td><td>0</td><td>2382</td><td></td></tr>

<tr><td colspan="5"><b>Most Pim In 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2013</td><td>832</td><td>58</td><td></td></tr><tr><td>2</td><td>2009</td><td>48</td><td>55</td><td></td></tr><tr><td>3</td><td>2018</td><td>430</td><td>55</td><td></td></tr><tr><td>4</td><td>2010</td><td>260</td><td>52</td><td></td></tr><tr><td>5</td><td>2011</td><td>386</td><td>49</td><td></td></tr><tr><td>6</td><td>2011</td><td>339</td><td>47</td><td></td></tr><tr><td>7</td><td>2017</td><td>711</td><td>47</td><td></td></tr><tr><td>8</td><td>2011</td><td>956</td><td>45</td><td></td></tr><tr><td>9</td><td>2011</td><td>517</td><td>44</td><td></td></tr><tr><td>10</td><td>2016</td><td>14</td><td>43</td><td></td></tr>
<tr><td colspan="5"><b>Most Pim In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2011</td><td>0</td><td>1503</td><td></td></tr>
<tr><td>2</td><td>2010</td><td>0</td><td>1470</td><td></td></tr>
<tr><td>3</td><td>2009</td><td>0</td><td>1399</td><td></td></tr>
<tr><td>4</td><td>2008</td><td>0</td><td>1151</td><td></td></tr>
<tr><td>5</td><td>2013</td><td>0</td><td>1055</td><td></td></tr>
<tr><td>6</td><td>2012</td><td>0</td><td>1018</td><td></td></tr>
<tr><td>7</td><td>2019</td><td>0</td><td>868</td><td></td></tr>
<tr><td>8</td><td>2018</td><td>0</td><td>799</td><td></td></tr>

<tr><td colspan="5"><b>Less Pim In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2017</td><td>0</td><td>774</td><td></td></tr>
<tr><td>2</td><td>2018</td><td>0</td><td>799</td><td></td></tr>
<tr><td>3</td><td>2019</td><td>0</td><td>868</td><td></td></tr>
<tr><td>4</td><td>2015</td><td>0</td><td>916</td><td></td></tr>
<tr><td>5</td><td>2014</td><td>0</td><td>938</td><td></td></tr>
<tr><td>6</td><td>2016</td><td>0</td><td>1008</td><td></td></tr>
<tr><td>7</td><td>2012</td><td>0</td><td>1018</td><td></td></tr>
<tr><td>8</td><td>2013</td><td>0</td><td>1055</td><td></td></tr>
<tr><td>9</td><td>2008</td><td>0</td><td>1151</td><td></td></tr>
<tr><td>10</td><td>2009</td><td>0</td><td>1399</td><td></td></tr>

<tr><td colspan="5"><b>Most Hits In 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2014</td><td>15</td><td>50</td><td></td></tr><tr><td>2</td><td>2018</td><td>19</td><td>41</td><td></td></tr><tr><td>3</td><td>2012</td><td>1152</td><td>37</td><td></td></tr><tr><td>4</td><td>2011</td><td>894</td><td>36</td><td></td></tr><tr><td>5</td><td>2010</td><td>102</td><td>35</td><td></td></tr><tr><td>6</td><td>2015</td><td>274</td><td>35</td><td></td></tr><tr><td>7</td><td>2019</td><td>586</td><td>35</td><td><a href="OTHL-586.html">Game Direct Link</a></td></tr><tr><td>8</td><td>2012</td><td>335</td><td>34</td><td></td></tr><tr><td>9</td><td>2012</td><td>935</td><td>34</td><td></td></tr><tr><td>10</td><td>2015</td><td>209</td><td>34</td><td></td></tr>
<tr><td colspan="5"><b>Most Hits In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2011</td><td>0</td><td>1965</td><td></td></tr>
<tr><td>2</td><td>2012</td><td>0</td><td>1801</td><td></td></tr>
<tr><td>3</td><td>2015</td><td>0</td><td>1786</td><td></td></tr>
<tr><td>4</td><td>2014</td><td>0</td><td>1773</td><td></td></tr>
<tr><td>5</td><td>2013</td><td>0</td><td>1755</td><td></td></tr>
<tr><td>6</td><td>2019</td><td>0</td><td>1748</td><td></td></tr>
<tr><td>7</td><td>2010</td><td>0</td><td>1709</td><td></td></tr>
<tr><td>8</td><td>2018</td><td>0</td><td>1706</td><td></td></tr>
<tr><td>9</td><td>2009</td><td>0</td><td>1539</td><td></td></tr>
<tr><td>10</td><td>2008</td><td>0</td><td>1398</td><td></td></tr>

<tr><td colspan="5"><b>Less Hit In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2008</td><td>0</td><td>1398</td><td></td></tr>
<tr><td>2</td><td>2009</td><td>0</td><td>1539</td><td></td></tr>
<tr><td>3</td><td>2016</td><td>0</td><td>1692</td><td></td></tr>
<tr><td>4</td><td>2018</td><td>0</td><td>1706</td><td></td></tr>
<tr><td>5</td><td>2010</td><td>0</td><td>1709</td><td></td></tr>
<tr><td>6</td><td>2017</td><td>0</td><td>1730</td><td></td></tr>
<tr><td>7</td><td>2019</td><td>0</td><td>1748</td><td></td></tr>
<tr><td>8</td><td>2013</td><td>0</td><td>1755</td><td></td></tr>
<tr><td>9</td><td>2014</td><td>0</td><td>1773</td><td></td></tr>
<tr><td>10</td><td>2012</td><td>0</td><td>1801</td><td></td></tr>

<tr><td colspan="5"><b>Most Empty Net Goal In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2009</td><td>0</td><td>2</td><td></td></tr>
<tr><td>2</td><td>2017</td><td>0</td><td>2</td><td></td></tr>
<tr><td>3</td><td>2018</td><td>0</td><td>2</td><td></td></tr>
<tr><td>4</td><td>2010</td><td>0</td><td>1</td><td></td></tr>
<tr><td>5</td><td>2014</td><td>0</td><td>1</td><td></td></tr>
<tr><td>6</td><td>2015</td><td>0</td><td>1</td><td></td></tr>
<tr><td>7</td><td>2019</td><td>0</td><td>1</td><td></td></tr>

<tr><td colspan="5"><b>Best PP In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2011</td><td>0</td><td>21.90%</td><td></td></tr>
<tr><td>2</td><td>2019</td><td>0</td><td>19.80%</td><td></td></tr>
<tr><td>3</td><td>2017</td><td>0</td><td>19.60%</td><td></td></tr>
<tr><td>4</td><td>2010</td><td>0</td><td>18.50%</td><td></td></tr>
<tr><td>5</td><td>2015</td><td>0</td><td>18.50%</td><td></td></tr>
<tr><td>6</td><td>2009</td><td>0</td><td>18.40%</td><td></td></tr>
<tr><td>7</td><td>2008</td><td>0</td><td>17.90%</td><td></td></tr>
<tr><td>8</td><td>2018</td><td>0</td><td>17.10%</td><td></td></tr>
<tr><td>9</td><td>2014</td><td>0</td><td>16.80%</td><td></td></tr>
<tr><td>10</td><td>2013</td><td>0</td><td>14.60%</td><td></td></tr>

<tr><td colspan="5"><b>Best PK In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2018</td><td>0</td><td>88.40%</td><td></td></tr>
<tr><td>2</td><td>2015</td><td>0</td><td>86.40%</td><td></td></tr>
<tr><td>3</td><td>2014</td><td>0</td><td>86.30%</td><td></td></tr>
<tr><td>4</td><td>2017</td><td>0</td><td>85.60%</td><td></td></tr>
<tr><td>5</td><td>2012</td><td>0</td><td>85.00%</td><td></td></tr>
<tr><td>6</td><td>2016</td><td>0</td><td>84.80%</td><td></td></tr>
<tr><td>7</td><td>2019</td><td>0</td><td>84.10%</td><td></td></tr>
<tr><td>8</td><td>2008</td><td>0</td><td>84.00%</td><td></td></tr>
<tr><td>9</td><td>2011</td><td>0</td><td>83.50%</td><td></td></tr>
<tr><td>10</td><td>2013</td><td>0</td><td>83.40%</td><td></td></tr>

<tr><td colspan="5"><b>Worse PP In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2012</td><td>0</td><td>13.90%</td><td></td></tr>
<tr><td>2</td><td>2013</td><td>0</td><td>14.60%</td><td></td></tr>
<tr><td>3</td><td>2014</td><td>0</td><td>16.80%</td><td></td></tr>
<tr><td>4</td><td>2018</td><td>0</td><td>17.10%</td><td></td></tr>
<tr><td>5</td><td>2008</td><td>0</td><td>17.90%</td><td></td></tr>
<tr><td>6</td><td>2016</td><td>0</td><td>17.90%</td><td></td></tr>
<tr><td>7</td><td>2009</td><td>0</td><td>18.40%</td><td></td></tr>
<tr><td>8</td><td>2010</td><td>0</td><td>18.50%</td><td></td></tr>
<tr><td>9</td><td>2019</td><td>0</td><td>19.80%</td><td></td></tr>
<tr><td>10</td><td>2011</td><td>0</td><td>21.90%</td><td></td></tr>

<tr><td colspan="5"><b>Worse PK In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2009</td><td>0</td><td>80.50%</td><td></td></tr>
<tr><td>2</td><td>2010</td><td>0</td><td>82.90%</td><td></td></tr>
<tr><td>3</td><td>2013</td><td>0</td><td>83.40%</td><td></td></tr>
<tr><td>4</td><td>2011</td><td>0</td><td>83.50%</td><td></td></tr>
<tr><td>5</td><td>2008</td><td>0</td><td>84.00%</td><td></td></tr>
<tr><td>6</td><td>2019</td><td>0</td><td>84.10%</td><td></td></tr>
<tr><td>7</td><td>2012</td><td>0</td><td>85.00%</td><td></td></tr>

<tr><td colspan="5"><b>Most Win In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2017</td><td>0</td><td>51</td><td></td></tr>
<tr><td>2</td><td>2019</td><td>0</td><td>51</td><td></td></tr>
<tr><td>3</td><td>2012</td><td>0</td><td>49</td><td></td></tr>
<tr><td>4</td><td>2013</td><td>0</td><td>44</td><td></td></tr>
<tr><td>5</td><td>2015</td><td>0</td><td>43</td><td></td></tr>
<tr><td>6</td><td>2011</td><td>0</td><td>41</td><td></td></tr>
<tr><td>7</td><td>2010</td><td>0</td><td>40</td><td></td></tr>
<tr><td>8</td><td>2014</td><td>0</td><td>40</td><td></td></tr>
<tr><td>9</td><td>2018</td><td>0</td><td>40</td><td></td></tr>
<tr><td>10</td><td>2008</td><td>0</td><td>35</td><td></td></tr>

<tr><td colspan="5"><b>Less Win In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2009</td><td>0</td><td>34</td><td></td></tr>
<tr><td>2</td><td>2008</td><td>0</td><td>35</td><td></td></tr>
<tr><td>3</td><td>2016</td><td>0</td><td>35</td><td></td></tr>
<tr><td>4</td><td>2010</td><td>0</td><td>40</td><td></td></tr>
<tr><td>5</td><td>2014</td><td>0</td><td>40</td><td></td></tr>
<tr><td>6</td><td>2018</td><td>0</td><td>40</td><td></td></tr>
<tr><td>7</td><td>2011</td><td>0</td><td>41</td><td></td></tr>
<tr><td>8</td><td>2013</td><td>0</td><td>44</td><td></td></tr>
<tr><td>9</td><td>2012</td><td>0</td><td>49</td><td></td></tr>

<tr><td colspan="5"><b>Most Lost In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2009</td><td>0</td><td>48</td><td></td></tr>
<tr><td>2</td><td>2016</td><td>0</td><td>47</td><td></td></tr>
<tr><td>3</td><td>2010</td><td>0</td><td>42</td><td></td></tr>
<tr><td>4</td><td>2014</td><td>0</td><td>42</td><td></td></tr>
<tr><td>5</td><td>2018</td><td>0</td><td>42</td><td></td></tr>
<tr><td>6</td><td>2011</td><td>0</td><td>41</td><td></td></tr>
<tr><td>7</td><td>2015</td><td>0</td><td>39</td><td></td></tr>
<tr><td>8</td><td>2013</td><td>0</td><td>38</td><td></td></tr>
<tr><td>9</td><td>2012</td><td>0</td><td>33</td><td></td></tr>
<tr><td>10</td><td>2008</td><td>0</td><td>31</td><td></td></tr>

<tr><td colspan="5"><b>Less Lost In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2008</td><td>0</td><td>31</td><td></td></tr>
<tr><td>2</td><td>2017</td><td>0</td><td>31</td><td></td></tr>
<tr><td>3</td><td>2019</td><td>0</td><td>31</td><td></td></tr>
<tr><td>4</td><td>2012</td><td>0</td><td>33</td><td></td></tr>
<tr><td>5</td><td>2013</td><td>0</td><td>38</td><td></td></tr>
<tr><td>6</td><td>2015</td><td>0</td><td>39</td><td></td></tr>
<tr><td>7</td><td>2011</td><td>0</td><td>41</td><td></td></tr>
<tr><td>8</td><td>2010</td><td>0</td><td>42</td><td></td></tr>
<tr><td>9</td><td>2018</td><td>0</td><td>42</td><td></td></tr>
<tr><td>10</td><td>2009</td><td>0</td><td>48</td><td></td></tr>

<tr><td colspan="5"><b>Most Point In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2019</td><td>0</td><td>110</td><td></td></tr>
<tr><td>2</td><td>2017</td><td>0</td><td>107</td><td></td></tr>
<tr><td>3</td><td>2012</td><td>0</td><td>101</td><td></td></tr>
<tr><td>4</td><td>2011</td><td>0</td><td>94</td><td></td></tr>
<tr><td>5</td><td>2013</td><td>0</td><td>94</td><td></td></tr>
<tr><td>6</td><td>2015</td><td>0</td><td>92</td><td></td></tr>
<tr><td>7</td><td>2008</td><td>0</td><td>91</td><td></td></tr>
<tr><td>8</td><td>2010</td><td>0</td><td>90</td><td></td></tr>
<tr><td>9</td><td>2018</td><td>0</td><td>83</td><td></td></tr>
<tr><td>10</td><td>2009</td><td>0</td><td>72</td><td></td></tr>

<tr><td colspan="5"><b>Less Points In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2009</td><td>0</td><td>72</td><td></td></tr>
<tr><td>2</td><td>2016</td><td>0</td><td>79</td><td></td></tr>
<tr><td>3</td><td>2018</td><td>0</td><td>83</td><td></td></tr>
<tr><td>4</td><td>2010</td><td>0</td><td>90</td><td></td></tr>
<tr><td>5</td><td>2014</td><td>0</td><td>90</td><td></td></tr>
<tr><td>6</td><td>2008</td><td>0</td><td>91</td><td></td></tr>
<tr><td>7</td><td>2015</td><td>0</td><td>92</td><td></td></tr>
<tr><td>8</td><td>2011</td><td>0</td><td>94</td><td></td></tr>
<tr><td>9</td><td>2013</td><td>0</td><td>94</td><td></td></tr>
<tr><td>10</td><td>2012</td><td>0</td><td>101</td><td></td></tr>

<tr><td colspan="5"><b>Most Win Home In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>0</td><td>0</td><td>32000</td><td></td></tr>
<tr><td>2</td><td>0</td><td>0</td><td>32000</td><td></td></tr>

<tr><td colspan="5"><b>Most Win Visitor In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>0</td><td>0</td><td>32000</td><td></td></tr>
<tr><td>2</td><td>0</td><td>0</td><td>32000</td><td></td></tr>

</table></div>
<h1 class="TeamRecordsPro_PHL"><a id="Flyers">Flyers</a></h1>
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
<br /><table class="STHSRecordTable">
<tr><td colspan="5"><b>Most Goals in 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2010</td><td>1183</td><td>10</td><td></td></tr><tr><td>2</td><td>2008</td><td>3</td><td>9</td><td></td></tr><tr><td>3</td><td>2009</td><td>1175</td><td>9</td><td></td></tr><tr><td>4</td><td>2008</td><td>1187</td><td>8</td><td></td></tr><tr><td>5</td><td>2010</td><td>1155</td><td>8</td><td></td></tr><tr><td>6</td><td>2013</td><td>1074</td><td>8</td><td></td></tr><tr><td>7</td><td>2016</td><td>82</td><td>8</td><td></td></tr><tr><td>8</td><td>2016</td><td>387</td><td>8</td><td></td></tr><tr><td>9</td><td>2011</td><td>1102</td><td>7</td><td></td></tr><tr><td>10</td><td>2012</td><td>946</td><td>7</td><td></td></tr>
<tr><td colspan="5"><b>Most Goals in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2012</td><td>0</td><td>278</td><td></td></tr>
<tr><td>2</td><td>2008</td><td>0</td><td>268</td><td></td></tr>
<tr><td>3</td><td>2010</td><td>0</td><td>268</td><td></td></tr>
<tr><td>4</td><td>2009</td><td>0</td><td>263</td><td></td></tr>
<tr><td>5</td><td>2016</td><td>0</td><td>251</td><td></td></tr>
<tr><td>6</td><td>2013</td><td>0</td><td>244</td><td></td></tr>
<tr><td>7</td><td>2019</td><td>0</td><td>226</td><td></td></tr>
<tr><td>8</td><td>2011</td><td>0</td><td>221</td><td></td></tr>
<tr><td>9</td><td>2018</td><td>0</td><td>174</td><td></td></tr>

<tr><td colspan="5"><b>Less Goal in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2017</td><td>0</td><td>168</td><td></td></tr>
<tr><td>2</td><td>2018</td><td>0</td><td>174</td><td></td></tr>
<tr><td>3</td><td>2014</td><td>0</td><td>190</td><td></td></tr>
<tr><td>4</td><td>2015</td><td>0</td><td>199</td><td></td></tr>
<tr><td>5</td><td>2011</td><td>0</td><td>221</td><td></td></tr>
<tr><td>6</td><td>2019</td><td>0</td><td>226</td><td></td></tr>
<tr><td>7</td><td>2013</td><td>0</td><td>244</td><td></td></tr>
<tr><td>8</td><td>2016</td><td>0</td><td>251</td><td></td></tr>
<tr><td>9</td><td>2009</td><td>0</td><td>263</td><td></td></tr>
<tr><td>10</td><td>2008</td><td>0</td><td>268</td><td></td></tr>

<tr><td colspan="5"><b>Most Goals Against in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2017</td><td>0</td><td>291</td><td></td></tr>
<tr><td>2</td><td>2008</td><td>0</td><td>257</td><td></td></tr>
<tr><td>3</td><td>2018</td><td>0</td><td>243</td><td></td></tr>
<tr><td>4</td><td>2015</td><td>0</td><td>240</td><td></td></tr>
<tr><td>5</td><td>2011</td><td>0</td><td>228</td><td></td></tr>
<tr><td>6</td><td>2016</td><td>0</td><td>224</td><td></td></tr>
<tr><td>7</td><td>2019</td><td>0</td><td>224</td><td></td></tr>
<tr><td>8</td><td>2010</td><td>0</td><td>217</td><td></td></tr>
<tr><td>9</td><td>2009</td><td>0</td><td>214</td><td></td></tr>
<tr><td>10</td><td>2012</td><td>0</td><td>214</td><td></td></tr>

<tr><td colspan="5"><b>Less Goal Against in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2013</td><td>0</td><td>194</td><td></td></tr>
<tr><td>2</td><td>2014</td><td>0</td><td>201</td><td></td></tr>
<tr><td>3</td><td>2009</td><td>0</td><td>214</td><td></td></tr>
<tr><td>4</td><td>2012</td><td>0</td><td>214</td><td></td></tr>
<tr><td>5</td><td>2010</td><td>0</td><td>217</td><td></td></tr>
<tr><td>6</td><td>2019</td><td>0</td><td>224</td><td></td></tr>
<tr><td>7</td><td>2011</td><td>0</td><td>228</td><td></td></tr>
<tr><td>8</td><td>2018</td><td>0</td><td>243</td><td></td></tr>
<tr><td>9</td><td>2008</td><td>0</td><td>257</td><td></td></tr>

<tr><td colspan="5"><b>Most Assists in 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2010</td><td>1183</td><td>19</td><td></td></tr><tr><td>2</td><td>2009</td><td>1175</td><td>17</td><td></td></tr><tr><td>3</td><td>2008</td><td>3</td><td>15</td><td></td></tr><tr><td>4</td><td>2008</td><td>1187</td><td>15</td><td></td></tr><tr><td>5</td><td>2013</td><td>1074</td><td>15</td><td></td></tr><tr><td>6</td><td>2016</td><td>387</td><td>15</td><td></td></tr><tr><td>7</td><td>2010</td><td>1155</td><td>14</td><td></td></tr><tr><td>8</td><td>2013</td><td>935</td><td>13</td><td></td></tr><tr><td>9</td><td>2016</td><td>82</td><td>13</td><td></td></tr><tr><td>10</td><td>2019</td><td>1040</td><td>13</td><td><a href="OTHL-1040.html">Game Direct Link</a></td></tr>
<tr><td colspan="5"><b>Most Assists in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2010</td><td>0</td><td>495</td><td></td></tr>
<tr><td>2</td><td>2012</td><td>0</td><td>488</td><td></td></tr>
<tr><td>3</td><td>2008</td><td>0</td><td>472</td><td></td></tr>
<tr><td>4</td><td>2009</td><td>0</td><td>469</td><td></td></tr>
<tr><td>5</td><td>2016</td><td>0</td><td>443</td><td></td></tr>
<tr><td>6</td><td>2013</td><td>0</td><td>425</td><td></td></tr>
<tr><td>7</td><td>2019</td><td>0</td><td>390</td><td></td></tr>
<tr><td>8</td><td>2011</td><td>0</td><td>356</td><td></td></tr>
<tr><td>9</td><td>2018</td><td>0</td><td>297</td><td></td></tr>

<tr><td colspan="5"><b>Less Assist in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2018</td><td>0</td><td>297</td><td></td></tr>
<tr><td>2</td><td>2017</td><td>0</td><td>303</td><td></td></tr>
<tr><td>3</td><td>2014</td><td>0</td><td>326</td><td></td></tr>
<tr><td>4</td><td>2015</td><td>0</td><td>341</td><td></td></tr>
<tr><td>5</td><td>2011</td><td>0</td><td>356</td><td></td></tr>
<tr><td>6</td><td>2019</td><td>0</td><td>390</td><td></td></tr>
<tr><td>7</td><td>2013</td><td>0</td><td>425</td><td></td></tr>
<tr><td>8</td><td>2016</td><td>0</td><td>443</td><td></td></tr>
<tr><td>9</td><td>2009</td><td>0</td><td>469</td><td></td></tr>
<tr><td>10</td><td>2008</td><td>0</td><td>472</td><td></td></tr>

<tr><td colspan="5"><b>Most Game Points in 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2010</td><td>1183</td><td>29</td><td></td></tr><tr><td>2</td><td>2009</td><td>1175</td><td>26</td><td></td></tr><tr><td>3</td><td>2008</td><td>3</td><td>24</td><td></td></tr><tr><td>4</td><td>2008</td><td>1187</td><td>23</td><td></td></tr><tr><td>5</td><td>2013</td><td>1074</td><td>23</td><td></td></tr><tr><td>6</td><td>2016</td><td>387</td><td>23</td><td></td></tr><tr><td>7</td><td>2010</td><td>1155</td><td>22</td><td></td></tr><tr><td>8</td><td>2016</td><td>82</td><td>21</td><td></td></tr><tr><td>9</td><td>2013</td><td>935</td><td>20</td><td></td></tr><tr><td>10</td><td>2019</td><td>1040</td><td>20</td><td><a href="OTHL-1040.html">Game Direct Link</a></td></tr>
<tr><td colspan="5"><b>Most Game Points in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>0</td><td>0</td><td>32000</td><td></td></tr>
<tr><td>2</td><td>0</td><td>0</td><td>32000</td><td></td></tr>

<tr><td colspan="5"><b>Less Game Point In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2017</td><td>0</td><td>471</td><td></td></tr>
<tr><td>2</td><td>2018</td><td>0</td><td>471</td><td></td></tr>
<tr><td>3</td><td>2014</td><td>0</td><td>516</td><td></td></tr>
<tr><td>4</td><td>2015</td><td>0</td><td>540</td><td></td></tr>
<tr><td>5</td><td>2011</td><td>0</td><td>577</td><td></td></tr>
<tr><td>6</td><td>2019</td><td>0</td><td>616</td><td></td></tr>
<tr><td>7</td><td>2013</td><td>0</td><td>669</td><td></td></tr>
<tr><td>8</td><td>2016</td><td>0</td><td>694</td><td></td></tr>
<tr><td>9</td><td>2009</td><td>0</td><td>732</td><td></td></tr>
<tr><td>10</td><td>2008</td><td>0</td><td>740</td><td></td></tr>

<tr><td colspan="5"><b>Most Shots In 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2019</td><td>1040</td><td>65</td><td><a href="OTHL-1040.html">Game Direct Link</a></td></tr><tr><td>2</td><td>2010</td><td>715</td><td>53</td><td></td></tr><tr><td>3</td><td>2019</td><td>1220</td><td>51</td><td><a href="OTHL-1220.html">Game Direct Link</a></td></tr><tr><td>4</td><td>2016</td><td>1211</td><td>49</td><td></td></tr><tr><td>5</td><td>2019</td><td>430</td><td>49</td><td><a href="OTHL-430.html">Game Direct Link</a></td></tr><tr><td>6</td><td>2010</td><td>359</td><td>47</td><td></td></tr><tr><td>7</td><td>2009</td><td>1158</td><td>46</td><td></td></tr><tr><td>8</td><td>2010</td><td>1032</td><td>46</td><td></td></tr><tr><td>9</td><td>2012</td><td>344</td><td>46</td><td></td></tr><tr><td>10</td><td>2012</td><td>566</td><td>46</td><td></td></tr>
<tr><td colspan="5"><b>Most Shots In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2019</td><td>0</td><td>2527</td><td></td></tr>
<tr><td>2</td><td>2012</td><td>0</td><td>2504</td><td></td></tr>
<tr><td>3</td><td>2009</td><td>0</td><td>2472</td><td></td></tr>
<tr><td>4</td><td>2010</td><td>0</td><td>2456</td><td></td></tr>
<tr><td>5</td><td>2011</td><td>0</td><td>2446</td><td></td></tr>
<tr><td>6</td><td>2008</td><td>0</td><td>2328</td><td></td></tr>
<tr><td>7</td><td>2018</td><td>0</td><td>2001</td><td></td></tr>

<tr><td colspan="5"><b>Less Shots In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2017</td><td>0</td><td>1995</td><td></td></tr>
<tr><td>2</td><td>2018</td><td>0</td><td>2001</td><td></td></tr>
<tr><td>3</td><td>2015</td><td>0</td><td>2018</td><td></td></tr>
<tr><td>4</td><td>2014</td><td>0</td><td>2023</td><td></td></tr>
<tr><td>5</td><td>2013</td><td>0</td><td>2213</td><td></td></tr>
<tr><td>6</td><td>2016</td><td>0</td><td>2293</td><td></td></tr>
<tr><td>7</td><td>2008</td><td>0</td><td>2328</td><td></td></tr>
<tr><td>8</td><td>2011</td><td>0</td><td>2446</td><td></td></tr>
<tr><td>9</td><td>2010</td><td>0</td><td>2456</td><td></td></tr>
<tr><td>10</td><td>2009</td><td>0</td><td>2472</td><td></td></tr>

<tr><td colspan="5"><b>Most Shots Blocked In 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2016</td><td>1120</td><td>22</td><td></td></tr><tr><td>2</td><td>2019</td><td>698</td><td>22</td><td><a href="OTHL-698.html">Game Direct Link</a></td></tr><tr><td>3</td><td>2011</td><td>829</td><td>20</td><td></td></tr><tr><td>4</td><td>2017</td><td>905</td><td>20</td><td></td></tr><tr><td>5</td><td>2019</td><td>904</td><td>20</td><td><a href="OTHL-904.html">Game Direct Link</a></td></tr><tr><td>6</td><td>2009</td><td>1207</td><td>19</td><td></td></tr><tr><td>7</td><td>2017</td><td>920</td><td>19</td><td></td></tr><tr><td>8</td><td>2017</td><td>323</td><td>18</td><td></td></tr><tr><td>9</td><td>2017</td><td>1257</td><td>18</td><td></td></tr><tr><td>10</td><td>2018</td><td>798</td><td>18</td><td></td></tr>
<tr><td colspan="5"><b>Most Shots Blocked In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>0</td><td>0</td><td>32000</td><td></td></tr>
<tr><td>2</td><td>0</td><td>0</td><td>32000</td><td></td></tr>

<tr><td colspan="5"><b>Less Shots Block In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2014</td><td>0</td><td>576</td><td></td></tr>
<tr><td>2</td><td>2010</td><td>0</td><td>588</td><td></td></tr>
<tr><td>3</td><td>2015</td><td>0</td><td>612</td><td></td></tr>
<tr><td>4</td><td>2009</td><td>0</td><td>615</td><td></td></tr>
<tr><td>5</td><td>2008</td><td>0</td><td>617</td><td></td></tr>
<tr><td>6</td><td>2013</td><td>0</td><td>623</td><td></td></tr>
<tr><td>7</td><td>2012</td><td>0</td><td>665</td><td></td></tr>
<tr><td>8</td><td>2011</td><td>0</td><td>774</td><td></td></tr>

<tr><td colspan="5"><b>Most Shots Against In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2017</td><td>0</td><td>3008</td><td></td></tr>
<tr><td>2</td><td>2019</td><td>0</td><td>2735</td><td></td></tr>
<tr><td>3</td><td>2018</td><td>0</td><td>2609</td><td></td></tr>
<tr><td>4</td><td>2016</td><td>0</td><td>2363</td><td></td></tr>
<tr><td>5</td><td>2011</td><td>0</td><td>2311</td><td></td></tr>
<tr><td>6</td><td>2012</td><td>0</td><td>2231</td><td></td></tr>
<tr><td>7</td><td>2015</td><td>0</td><td>2166</td><td></td></tr>
<tr><td>8</td><td>2008</td><td>0</td><td>2149</td><td></td></tr>
<tr><td>9</td><td>2014</td><td>0</td><td>2126</td><td></td></tr>
<tr><td>10</td><td>2009</td><td>0</td><td>2074</td><td></td></tr>

<tr><td colspan="5"><b>Less Shots Against In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2013</td><td>0</td><td>2034</td><td></td></tr>
<tr><td>2</td><td>2010</td><td>0</td><td>2067</td><td></td></tr>
<tr><td>3</td><td>2009</td><td>0</td><td>2074</td><td></td></tr>
<tr><td>4</td><td>2014</td><td>0</td><td>2126</td><td></td></tr>
<tr><td>5</td><td>2008</td><td>0</td><td>2149</td><td></td></tr>
<tr><td>6</td><td>2012</td><td>0</td><td>2231</td><td></td></tr>
<tr><td>7</td><td>2011</td><td>0</td><td>2311</td><td></td></tr>

<tr><td colspan="5"><b>Most Pim In 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2009</td><td>453</td><td>58</td><td></td></tr><tr><td>2</td><td>2008</td><td>60</td><td>44</td><td></td></tr><tr><td>3</td><td>2008</td><td>804</td><td>43</td><td></td></tr><tr><td>4</td><td>2010</td><td>60</td><td>40</td><td></td></tr><tr><td>5</td><td>2010</td><td>204</td><td>36</td><td></td></tr><tr><td>6</td><td>2011</td><td>171</td><td>34</td><td></td></tr><tr><td>7</td><td>2019</td><td>118</td><td>33</td><td><a href="OTHL-118.html">Game Direct Link</a></td></tr><tr><td>8</td><td>2011</td><td>688</td><td>32</td><td></td></tr><tr><td>9</td><td>2014</td><td>345</td><td>32</td><td></td></tr><tr><td>10</td><td>2016</td><td>170</td><td>31</td><td></td></tr>
<tr><td colspan="5"><b>Most Pim In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2008</td><td>0</td><td>1381</td><td></td></tr>
<tr><td>2</td><td>2009</td><td>0</td><td>1025</td><td></td></tr>
<tr><td>3</td><td>2010</td><td>0</td><td>1006</td><td></td></tr>
<tr><td>4</td><td>2011</td><td>0</td><td>998</td><td></td></tr>
<tr><td>5</td><td>2016</td><td>0</td><td>963</td><td></td></tr>
<tr><td>6</td><td>2014</td><td>0</td><td>807</td><td></td></tr>
<tr><td>7</td><td>2013</td><td>0</td><td>735</td><td></td></tr>
<tr><td>8</td><td>2019</td><td>0</td><td>711</td><td></td></tr>
<tr><td>9</td><td>2012</td><td>0</td><td>710</td><td></td></tr>
<tr><td>10</td><td>2018</td><td>0</td><td>670</td><td></td></tr>

<tr><td colspan="5"><b>Less Pim In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2018</td><td>0</td><td>670</td><td></td></tr>
<tr><td>2</td><td>2012</td><td>0</td><td>710</td><td></td></tr>
<tr><td>3</td><td>2019</td><td>0</td><td>711</td><td></td></tr>
<tr><td>4</td><td>2013</td><td>0</td><td>735</td><td></td></tr>
<tr><td>5</td><td>2017</td><td>0</td><td>764</td><td></td></tr>
<tr><td>6</td><td>2015</td><td>0</td><td>792</td><td></td></tr>
<tr><td>7</td><td>2014</td><td>0</td><td>807</td><td></td></tr>
<tr><td>8</td><td>2016</td><td>0</td><td>963</td><td></td></tr>
<tr><td>9</td><td>2011</td><td>0</td><td>998</td><td></td></tr>
<tr><td>10</td><td>2010</td><td>0</td><td>1006</td><td></td></tr>

<tr><td colspan="5"><b>Most Hits In 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2011</td><td>51</td><td>39</td><td></td></tr><tr><td>2</td><td>2016</td><td>399</td><td>37</td><td></td></tr><tr><td>3</td><td>2011</td><td>100</td><td>36</td><td></td></tr><tr><td>4</td><td>2011</td><td>262</td><td>35</td><td></td></tr><tr><td>5</td><td>2011</td><td>291</td><td>35</td><td></td></tr><tr><td>6</td><td>2011</td><td>442</td><td>35</td><td></td></tr><tr><td>7</td><td>2017</td><td>82</td><td>35</td><td></td></tr><tr><td>8</td><td>2017</td><td>337</td><td>35</td><td></td></tr><tr><td>9</td><td>2017</td><td>674</td><td>35</td><td></td></tr><tr><td>10</td><td>2010</td><td>1047</td><td>34</td><td></td></tr>
<tr><td colspan="5"><b>Most Hits In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2011</td><td>0</td><td>2048</td><td></td></tr>
<tr><td>2</td><td>2017</td><td>0</td><td>1961</td><td></td></tr>
<tr><td>3</td><td>2019</td><td>0</td><td>1705</td><td></td></tr>
<tr><td>4</td><td>2014</td><td>0</td><td>1679</td><td></td></tr>
<tr><td>5</td><td>2015</td><td>0</td><td>1679</td><td></td></tr>
<tr><td>6</td><td>2016</td><td>0</td><td>1668</td><td></td></tr>
<tr><td>7</td><td>2018</td><td>0</td><td>1650</td><td></td></tr>
<tr><td>8</td><td>2012</td><td>0</td><td>1602</td><td></td></tr>
<tr><td>9</td><td>2008</td><td>0</td><td>1597</td><td></td></tr>
<tr><td>10</td><td>2013</td><td>0</td><td>1579</td><td></td></tr>

<tr><td colspan="5"><b>Less Hit In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2010</td><td>0</td><td>1430</td><td></td></tr>
<tr><td>2</td><td>2009</td><td>0</td><td>1438</td><td></td></tr>
<tr><td>3</td><td>2013</td><td>0</td><td>1579</td><td></td></tr>
<tr><td>4</td><td>2008</td><td>0</td><td>1597</td><td></td></tr>
<tr><td>5</td><td>2012</td><td>0</td><td>1602</td><td></td></tr>
<tr><td>6</td><td>2018</td><td>0</td><td>1650</td><td></td></tr>
<tr><td>7</td><td>2019</td><td>0</td><td>1705</td><td></td></tr>
<tr><td>8</td><td>2011</td><td>0</td><td>2048</td><td></td></tr>

<tr><td colspan="5"><b>Most Empty Net Goal In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2018</td><td>0</td><td>4</td><td></td></tr>
<tr><td>2</td><td>2009</td><td>0</td><td>3</td><td></td></tr>
<tr><td>3</td><td>2011</td><td>0</td><td>3</td><td></td></tr>
<tr><td>4</td><td>2017</td><td>0</td><td>3</td><td></td></tr>
<tr><td>5</td><td>2008</td><td>0</td><td>2</td><td></td></tr>
<tr><td>6</td><td>2012</td><td>0</td><td>2</td><td></td></tr>
<tr><td>7</td><td>2013</td><td>0</td><td>2</td><td></td></tr>
<tr><td>8</td><td>2010</td><td>0</td><td>1</td><td></td></tr>

<tr><td colspan="5"><b>Best PP In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2012</td><td>0</td><td>19.20%</td><td></td></tr>
<tr><td>2</td><td>2011</td><td>0</td><td>19.10%</td><td></td></tr>
<tr><td>3</td><td>2019</td><td>0</td><td>19.00%</td><td></td></tr>
<tr><td>4</td><td>2016</td><td>0</td><td>17.90%</td><td></td></tr>
<tr><td>5</td><td>2010</td><td>0</td><td>17.70%</td><td></td></tr>
<tr><td>6</td><td>2013</td><td>0</td><td>17.40%</td><td></td></tr>
<tr><td>7</td><td>2009</td><td>0</td><td>15.60%</td><td></td></tr>
<tr><td>8</td><td>2018</td><td>0</td><td>14.90%</td><td></td></tr>
<tr><td>9</td><td>2008</td><td>0</td><td>14.60%</td><td></td></tr>

<tr><td colspan="5"><b>Best PK In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2019</td><td>0</td><td>84.00%</td><td></td></tr>
<tr><td>2</td><td>2014</td><td>0</td><td>83.90%</td><td></td></tr>
<tr><td>3</td><td>2012</td><td>0</td><td>83.80%</td><td></td></tr>
<tr><td>4</td><td>2013</td><td>0</td><td>83.70%</td><td></td></tr>
<tr><td>5</td><td>2008</td><td>0</td><td>83.20%</td><td></td></tr>
<tr><td>6</td><td>2015</td><td>0</td><td>82.80%</td><td></td></tr>
<tr><td>7</td><td>2018</td><td>0</td><td>82.80%</td><td></td></tr>
<tr><td>8</td><td>2010</td><td>0</td><td>82.70%</td><td></td></tr>
<tr><td>9</td><td>2009</td><td>0</td><td>82.30%</td><td></td></tr>
<tr><td>10</td><td>2011</td><td>0</td><td>80.10%</td><td></td></tr>

<tr><td colspan="5"><b>Worse PP In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2015</td><td>0</td><td>10.40%</td><td></td></tr>
<tr><td>2</td><td>2017</td><td>0</td><td>11.20%</td><td></td></tr>
<tr><td>3</td><td>2008</td><td>0</td><td>14.60%</td><td></td></tr>
<tr><td>4</td><td>2014</td><td>0</td><td>14.70%</td><td></td></tr>
<tr><td>5</td><td>2018</td><td>0</td><td>14.90%</td><td></td></tr>
<tr><td>6</td><td>2009</td><td>0</td><td>15.60%</td><td></td></tr>
<tr><td>7</td><td>2013</td><td>0</td><td>17.40%</td><td></td></tr>
<tr><td>8</td><td>2010</td><td>0</td><td>17.70%</td><td></td></tr>
<tr><td>9</td><td>2019</td><td>0</td><td>19.00%</td><td></td></tr>
<tr><td>10</td><td>2011</td><td>0</td><td>19.10%</td><td></td></tr>

<tr><td colspan="5"><b>Worse PK In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2011</td><td>0</td><td>80.10%</td><td></td></tr>
<tr><td>2</td><td>2016</td><td>0</td><td>81.10%</td><td></td></tr>
<tr><td>3</td><td>2017</td><td>0</td><td>81.80%</td><td></td></tr>
<tr><td>4</td><td>2009</td><td>0</td><td>82.30%</td><td></td></tr>
<tr><td>5</td><td>2010</td><td>0</td><td>82.70%</td><td></td></tr>
<tr><td>6</td><td>2015</td><td>0</td><td>82.80%</td><td></td></tr>
<tr><td>7</td><td>2018</td><td>0</td><td>82.80%</td><td></td></tr>
<tr><td>8</td><td>2008</td><td>0</td><td>83.20%</td><td></td></tr>
<tr><td>9</td><td>2013</td><td>0</td><td>83.70%</td><td></td></tr>
<tr><td>10</td><td>2012</td><td>0</td><td>83.80%</td><td></td></tr>

<tr><td colspan="5"><b>Most Win In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2012</td><td>0</td><td>54</td><td></td></tr>
<tr><td>2</td><td>2013</td><td>0</td><td>51</td><td></td></tr>
<tr><td>3</td><td>2009</td><td>0</td><td>49</td><td></td></tr>
<tr><td>4</td><td>2010</td><td>0</td><td>49</td><td></td></tr>
<tr><td>5</td><td>2016</td><td>0</td><td>43</td><td></td></tr>
<tr><td>6</td><td>2019</td><td>0</td><td>41</td><td></td></tr>
<tr><td>7</td><td>2014</td><td>0</td><td>39</td><td></td></tr>
<tr><td>8</td><td>2011</td><td>0</td><td>37</td><td></td></tr>
<tr><td>9</td><td>2008</td><td>0</td><td>36</td><td></td></tr>
<tr><td>10</td><td>2018</td><td>0</td><td>27</td><td></td></tr>

<tr><td colspan="5"><b>Less Win In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2017</td><td>0</td><td>13</td><td></td></tr>
<tr><td>2</td><td>2018</td><td>0</td><td>27</td><td></td></tr>
<tr><td>3</td><td>2015</td><td>0</td><td>33</td><td></td></tr>
<tr><td>4</td><td>2008</td><td>0</td><td>36</td><td></td></tr>
<tr><td>5</td><td>2011</td><td>0</td><td>37</td><td></td></tr>
<tr><td>6</td><td>2014</td><td>0</td><td>39</td><td></td></tr>
<tr><td>7</td><td>2019</td><td>0</td><td>41</td><td></td></tr>
<tr><td>8</td><td>2016</td><td>0</td><td>43</td><td></td></tr>
<tr><td>9</td><td>2009</td><td>0</td><td>49</td><td></td></tr>
<tr><td>10</td><td>2010</td><td>0</td><td>49</td><td></td></tr>

<tr><td colspan="5"><b>Most Lost In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2017</td><td>0</td><td>69</td><td></td></tr>
<tr><td>2</td><td>2018</td><td>0</td><td>55</td><td></td></tr>
<tr><td>3</td><td>2015</td><td>0</td><td>49</td><td></td></tr>
<tr><td>4</td><td>2011</td><td>0</td><td>45</td><td></td></tr>
<tr><td>5</td><td>2014</td><td>0</td><td>43</td><td></td></tr>
<tr><td>6</td><td>2019</td><td>0</td><td>41</td><td></td></tr>
<tr><td>7</td><td>2016</td><td>0</td><td>39</td><td></td></tr>
<tr><td>8</td><td>2008</td><td>0</td><td>36</td><td></td></tr>
<tr><td>9</td><td>2009</td><td>0</td><td>33</td><td></td></tr>
<tr><td>10</td><td>2010</td><td>0</td><td>33</td><td></td></tr>

<tr><td colspan="5"><b>Less Lost In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2012</td><td>0</td><td>28</td><td></td></tr>
<tr><td>2</td><td>2013</td><td>0</td><td>31</td><td></td></tr>
<tr><td>3</td><td>2009</td><td>0</td><td>33</td><td></td></tr>
<tr><td>4</td><td>2010</td><td>0</td><td>33</td><td></td></tr>
<tr><td>5</td><td>2008</td><td>0</td><td>36</td><td></td></tr>
<tr><td>6</td><td>2019</td><td>0</td><td>41</td><td></td></tr>
<tr><td>7</td><td>2011</td><td>0</td><td>45</td><td></td></tr>

<tr><td colspan="5"><b>Most Point In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2012</td><td>0</td><td>115</td><td></td></tr>
<tr><td>2</td><td>2009</td><td>0</td><td>107</td><td></td></tr>
<tr><td>3</td><td>2013</td><td>0</td><td>107</td><td></td></tr>
<tr><td>4</td><td>2010</td><td>0</td><td>105</td><td></td></tr>
<tr><td>5</td><td>2011</td><td>0</td><td>90</td><td></td></tr>
<tr><td>6</td><td>2008</td><td>0</td><td>88</td><td></td></tr>
<tr><td>7</td><td>2019</td><td>0</td><td>88</td><td></td></tr>
<tr><td>8</td><td>2018</td><td>0</td><td>66</td><td></td></tr>

<tr><td colspan="5"><b>Less Points In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2017</td><td>0</td><td>38</td><td></td></tr>
<tr><td>2</td><td>2018</td><td>0</td><td>66</td><td></td></tr>
<tr><td>3</td><td>2015</td><td>0</td><td>79</td><td></td></tr>
<tr><td>4</td><td>2014</td><td>0</td><td>85</td><td></td></tr>
<tr><td>5</td><td>2008</td><td>0</td><td>88</td><td></td></tr>
<tr><td>6</td><td>2019</td><td>0</td><td>88</td><td></td></tr>
<tr><td>7</td><td>2011</td><td>0</td><td>90</td><td></td></tr>
<tr><td>8</td><td>2016</td><td>0</td><td>90</td><td></td></tr>
<tr><td>9</td><td>2010</td><td>0</td><td>105</td><td></td></tr>
<tr><td>10</td><td>2009</td><td>0</td><td>107</td><td></td></tr>

<tr><td colspan="5"><b>Most Win Home In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>0</td><td>0</td><td>32000</td><td></td></tr>
<tr><td>2</td><td>0</td><td>0</td><td>32000</td><td></td></tr>

<tr><td colspan="5"><b>Most Win Visitor In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>0</td><td>0</td><td>32000</td><td></td></tr>
<tr><td>2</td><td>0</td><td>0</td><td>32000</td><td></td></tr>

</table></div>
<h1 class="TeamRecordsPro_VGK"><a id="GoldenKnights">Golden Knights</a></h1>
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
<br /><table class="STHSRecordTable">
<tr><td colspan="5"><b>Most Goals in 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2017</td><td>26</td><td>6</td><td></td></tr><tr><td>2</td><td>2017</td><td>1130</td><td>6</td><td></td></tr><tr><td>3</td><td>2018</td><td>34</td><td>6</td><td></td></tr><tr><td>4</td><td>2018</td><td>388</td><td>6</td><td></td></tr><tr><td>5</td><td>2018</td><td>944</td><td>6</td><td></td></tr><tr><td>6</td><td>2019</td><td>304</td><td>6</td><td><a href="OTHL-304.html">Game Direct Link</a></td></tr><tr><td>7</td><td>2017</td><td>568</td><td>5</td><td></td></tr><tr><td>8</td><td>2017</td><td>1151</td><td>5</td><td></td></tr><tr><td>9</td><td>2017</td><td>1188</td><td>5</td><td></td></tr><tr><td>10</td><td>2017</td><td>1217</td><td>5</td><td></td></tr>
<tr><td colspan="5"><b>Most Goals in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2017</td><td>0</td><td>202</td><td></td></tr>
<tr><td>2</td><td>2018</td><td>0</td><td>202</td><td></td></tr>
<tr><td>3</td><td>2019</td><td>0</td><td>200</td><td></td></tr>

<tr><td colspan="5"><b>Less Goal in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2019</td><td>0</td><td>200</td><td></td></tr>
<tr><td>2</td><td>2017</td><td>0</td><td>202</td><td></td></tr>
<tr><td>3</td><td>2018</td><td>0</td><td>202</td><td></td></tr>

<tr><td colspan="5"><b>Most Goals Against in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2019</td><td>0</td><td>235</td><td></td></tr>
<tr><td>2</td><td>2017</td><td>0</td><td>229</td><td></td></tr>
<tr><td>3</td><td>2018</td><td>0</td><td>202</td><td></td></tr>

<tr><td colspan="5"><b>Less Goal Against in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2018</td><td>0</td><td>202</td><td></td></tr>
<tr><td>2</td><td>2017</td><td>0</td><td>229</td><td></td></tr>
<tr><td>3</td><td>2019</td><td>0</td><td>235</td><td></td></tr>

<tr><td colspan="5"><b>Most Assists in 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2017</td><td>1130</td><td>12</td><td></td></tr><tr><td>2</td><td>2018</td><td>388</td><td>11</td><td></td></tr><tr><td>3</td><td>2019</td><td>304</td><td>11</td><td><a href="OTHL-304.html">Game Direct Link</a></td></tr><tr><td>4</td><td>2017</td><td>26</td><td>10</td><td></td></tr><tr><td>5</td><td>2017</td><td>1151</td><td>10</td><td></td></tr><tr><td>6</td><td>2018</td><td>22</td><td>10</td><td></td></tr><tr><td>7</td><td>2018</td><td>665</td><td>10</td><td></td></tr><tr><td>8</td><td>2018</td><td>944</td><td>10</td><td></td></tr><tr><td>9</td><td>2018</td><td>1061</td><td>10</td><td></td></tr><tr><td>10</td><td>2019</td><td>130</td><td>10</td><td><a href="OTHL-130.html">Game Direct Link</a></td></tr>
<tr><td colspan="5"><b>Most Assists in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2017</td><td>0</td><td>353</td><td></td></tr>
<tr><td>2</td><td>2019</td><td>0</td><td>352</td><td></td></tr>
<tr><td>3</td><td>2018</td><td>0</td><td>350</td><td></td></tr>

<tr><td colspan="5"><b>Less Assist in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2018</td><td>0</td><td>350</td><td></td></tr>
<tr><td>2</td><td>2019</td><td>0</td><td>352</td><td></td></tr>
<tr><td>3</td><td>2017</td><td>0</td><td>353</td><td></td></tr>

<tr><td colspan="5"><b>Most Game Points in 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2017</td><td>1130</td><td>18</td><td></td></tr><tr><td>2</td><td>2018</td><td>388</td><td>17</td><td></td></tr><tr><td>3</td><td>2019</td><td>304</td><td>17</td><td><a href="OTHL-304.html">Game Direct Link</a></td></tr><tr><td>4</td><td>2017</td><td>26</td><td>16</td><td></td></tr><tr><td>5</td><td>2018</td><td>944</td><td>16</td><td></td></tr><tr><td>6</td><td>2017</td><td>1151</td><td>15</td><td></td></tr><tr><td>7</td><td>2018</td><td>22</td><td>15</td><td></td></tr><tr><td>8</td><td>2018</td><td>34</td><td>15</td><td></td></tr><tr><td>9</td><td>2018</td><td>665</td><td>15</td><td></td></tr><tr><td>10</td><td>2018</td><td>1061</td><td>15</td><td></td></tr>
<tr><td colspan="5"><b>Most Game Points in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2017</td><td>0</td><td>555</td><td></td></tr>
<tr><td>2</td><td>2018</td><td>0</td><td>552</td><td></td></tr>
<tr><td>3</td><td>2019</td><td>0</td><td>552</td><td></td></tr>

<tr><td colspan="5"><b>Less Game Point In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2018</td><td>0</td><td>552</td><td></td></tr>
<tr><td>2</td><td>2019</td><td>0</td><td>552</td><td></td></tr>
<tr><td>3</td><td>2017</td><td>0</td><td>555</td><td></td></tr>

<tr><td colspan="5"><b>Most Shots In 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2018</td><td>459</td><td>47</td><td></td></tr><tr><td>2</td><td>2018</td><td>205</td><td>45</td><td></td></tr><tr><td>3</td><td>2017</td><td>593</td><td>44</td><td></td></tr><tr><td>4</td><td>2017</td><td>1249</td><td>42</td><td></td></tr><tr><td>5</td><td>2018</td><td>14</td><td>42</td><td></td></tr><tr><td>6</td><td>2018</td><td>147</td><td>41</td><td></td></tr><tr><td>7</td><td>2018</td><td>491</td><td>41</td><td></td></tr><tr><td>8</td><td>2019</td><td>1016</td><td>41</td><td><a href="OTHL-1016.html">Game Direct Link</a></td></tr><tr><td>9</td><td>2017</td><td>722</td><td>40</td><td></td></tr><tr><td>10</td><td>2017</td><td>813</td><td>40</td><td></td></tr>
<tr><td colspan="5"><b>Most Shots In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2018</td><td>0</td><td>2443</td><td></td></tr>
<tr><td>2</td><td>2019</td><td>0</td><td>2364</td><td></td></tr>
<tr><td>3</td><td>2017</td><td>0</td><td>2274</td><td></td></tr>

<tr><td colspan="5"><b>Less Shots In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2017</td><td>0</td><td>2274</td><td></td></tr>
<tr><td>2</td><td>2019</td><td>0</td><td>2364</td><td></td></tr>
<tr><td>3</td><td>2018</td><td>0</td><td>2443</td><td></td></tr>

<tr><td colspan="5"><b>Most Shots Blocked In 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2019</td><td>17</td><td>21</td><td><a href="OTHL-17.html">Game Direct Link</a></td></tr><tr><td>2</td><td>2017</td><td>452</td><td>20</td><td></td></tr><tr><td>3</td><td>2019</td><td>500</td><td>20</td><td><a href="OTHL-500.html">Game Direct Link</a></td></tr><tr><td>4</td><td>2019</td><td>852</td><td>20</td><td><a href="OTHL-852.html">Game Direct Link</a></td></tr><tr><td>5</td><td>2019</td><td>1060</td><td>20</td><td><a href="OTHL-1060.html">Game Direct Link</a></td></tr><tr><td>6</td><td>2019</td><td>939</td><td>19</td><td><a href="OTHL-939.html">Game Direct Link</a></td></tr><tr><td>7</td><td>2017</td><td>976</td><td>17</td><td></td></tr><tr><td>8</td><td>2018</td><td>306</td><td>17</td><td></td></tr><tr><td>9</td><td>2018</td><td>665</td><td>17</td><td></td></tr><tr><td>10</td><td>2019</td><td>75</td><td>17</td><td><a href="OTHL-75.html">Game Direct Link</a></td></tr>
<tr><td colspan="5"><b>Most Shots Blocked In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2019</td><td>0</td><td>779</td><td></td></tr>
<tr><td>2</td><td>2018</td><td>0</td><td>707</td><td></td></tr>
<tr><td>3</td><td>2017</td><td>0</td><td>704</td><td></td></tr>

<tr><td colspan="5"><b>Less Shots Block In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2017</td><td>0</td><td>704</td><td></td></tr>
<tr><td>2</td><td>2018</td><td>0</td><td>707</td><td></td></tr>
<tr><td>3</td><td>2019</td><td>0</td><td>779</td><td></td></tr>

<tr><td colspan="5"><b>Most Shots Against In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2019</td><td>0</td><td>2624</td><td></td></tr>
<tr><td>2</td><td>2017</td><td>0</td><td>2537</td><td></td></tr>
<tr><td>3</td><td>2018</td><td>0</td><td>2494</td><td></td></tr>

<tr><td colspan="5"><b>Less Shots Against In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2018</td><td>0</td><td>2494</td><td></td></tr>
<tr><td>2</td><td>2017</td><td>0</td><td>2537</td><td></td></tr>
<tr><td>3</td><td>2019</td><td>0</td><td>2624</td><td></td></tr>

<tr><td colspan="5"><b>Most Pim In 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2018</td><td>425</td><td>38</td><td></td></tr><tr><td>2</td><td>2018</td><td>253</td><td>37</td><td></td></tr><tr><td>3</td><td>2017</td><td>441</td><td>35</td><td></td></tr><tr><td>4</td><td>2017</td><td>90</td><td>32</td><td></td></tr><tr><td>5</td><td>2019</td><td>637</td><td>30</td><td><a href="OTHL-637.html">Game Direct Link</a></td></tr><tr><td>6</td><td>2019</td><td>958</td><td>29</td><td><a href="OTHL-958.html">Game Direct Link</a></td></tr><tr><td>7</td><td>2019</td><td>983</td><td>29</td><td><a href="OTHL-983.html">Game Direct Link</a></td></tr><tr><td>8</td><td>2018</td><td>558</td><td>25</td><td></td></tr><tr><td>9</td><td>2018</td><td>650</td><td>25</td><td></td></tr><tr><td>10</td><td>2018</td><td>1059</td><td>25</td><td></td></tr>
<tr><td colspan="5"><b>Most Pim In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2018</td><td>0</td><td>872</td><td></td></tr>
<tr><td>2</td><td>2017</td><td>0</td><td>759</td><td></td></tr>
<tr><td>3</td><td>2019</td><td>0</td><td>715</td><td></td></tr>

<tr><td colspan="5"><b>Less Pim In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2019</td><td>0</td><td>715</td><td></td></tr>
<tr><td>2</td><td>2017</td><td>0</td><td>759</td><td></td></tr>
<tr><td>3</td><td>2018</td><td>0</td><td>872</td><td></td></tr>

<tr><td colspan="5"><b>Most Hits In 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2017</td><td>332</td><td>37</td><td></td></tr><tr><td>2</td><td>2018</td><td>873</td><td>37</td><td></td></tr><tr><td>3</td><td>2018</td><td>750</td><td>35</td><td></td></tr><tr><td>4</td><td>2017</td><td>691</td><td>34</td><td></td></tr><tr><td>5</td><td>2018</td><td>132</td><td>34</td><td></td></tr><tr><td>6</td><td>2017</td><td>308</td><td>33</td><td></td></tr><tr><td>7</td><td>2017</td><td>722</td><td>32</td><td></td></tr><tr><td>8</td><td>2018</td><td>770</td><td>31</td><td></td></tr><tr><td>9</td><td>2017</td><td>121</td><td>30</td><td></td></tr><tr><td>10</td><td>2018</td><td>368</td><td>30</td><td></td></tr>
<tr><td colspan="5"><b>Most Hits In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2017</td><td>0</td><td>1821</td><td></td></tr>
<tr><td>2</td><td>2018</td><td>0</td><td>1757</td><td></td></tr>
<tr><td>3</td><td>2019</td><td>0</td><td>1715</td><td></td></tr>

<tr><td colspan="5"><b>Less Hit In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2019</td><td>0</td><td>1715</td><td></td></tr>
<tr><td>2</td><td>2018</td><td>0</td><td>1757</td><td></td></tr>
<tr><td>3</td><td>2017</td><td>0</td><td>1821</td><td></td></tr>

<tr><td colspan="5"><b>Most Empty Net Goal In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2019</td><td>0</td><td>2</td><td></td></tr>
<tr><td>2</td><td>2018</td><td>0</td><td>1</td><td></td></tr>

<tr><td colspan="5"><b>Best PP In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2018</td><td>0</td><td>18.90%</td><td></td></tr>
<tr><td>2</td><td>2019</td><td>0</td><td>18.60%</td><td></td></tr>
<tr><td>3</td><td>2017</td><td>0</td><td>15.00%</td><td></td></tr>

<tr><td colspan="5"><b>Best PK In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2017</td><td>0</td><td>84.50%</td><td></td></tr>
<tr><td>2</td><td>2018</td><td>0</td><td>82.40%</td><td></td></tr>
<tr><td>3</td><td>2019</td><td>0</td><td>81.70%</td><td></td></tr>

<tr><td colspan="5"><b>Worse PP In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2017</td><td>0</td><td>15.00%</td><td></td></tr>
<tr><td>2</td><td>2019</td><td>0</td><td>18.60%</td><td></td></tr>
<tr><td>3</td><td>2018</td><td>0</td><td>18.90%</td><td></td></tr>

<tr><td colspan="5"><b>Worse PK In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2019</td><td>0</td><td>81.70%</td><td></td></tr>
<tr><td>2</td><td>2018</td><td>0</td><td>82.40%</td><td></td></tr>
<tr><td>3</td><td>2017</td><td>0</td><td>84.50%</td><td></td></tr>

<tr><td colspan="5"><b>Most Win In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2018</td><td>0</td><td>44</td><td></td></tr>
<tr><td>2</td><td>2017</td><td>0</td><td>37</td><td></td></tr>
<tr><td>3</td><td>2019</td><td>0</td><td>33</td><td></td></tr>

<tr><td colspan="5"><b>Less Win In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2019</td><td>0</td><td>33</td><td></td></tr>
<tr><td>2</td><td>2017</td><td>0</td><td>37</td><td></td></tr>
<tr><td>3</td><td>2018</td><td>0</td><td>44</td><td></td></tr>

<tr><td colspan="5"><b>Most Lost In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2019</td><td>0</td><td>49</td><td></td></tr>
<tr><td>2</td><td>2017</td><td>0</td><td>45</td><td></td></tr>
<tr><td>3</td><td>2018</td><td>0</td><td>38</td><td></td></tr>

<tr><td colspan="5"><b>Less Lost In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2018</td><td>0</td><td>38</td><td></td></tr>
<tr><td>2</td><td>2017</td><td>0</td><td>45</td><td></td></tr>
<tr><td>3</td><td>2019</td><td>0</td><td>49</td><td></td></tr>

<tr><td colspan="5"><b>Most Point In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2018</td><td>0</td><td>94</td><td></td></tr>
<tr><td>2</td><td>2017</td><td>0</td><td>83</td><td></td></tr>
<tr><td>3</td><td>2019</td><td>0</td><td>77</td><td></td></tr>

<tr><td colspan="5"><b>Less Points In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2019</td><td>0</td><td>77</td><td></td></tr>
<tr><td>2</td><td>2017</td><td>0</td><td>83</td><td></td></tr>
<tr><td>3</td><td>2018</td><td>0</td><td>94</td><td></td></tr>

<tr><td colspan="5"><b>Most Win Home In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2018</td><td>0</td><td>19</td><td></td></tr>
<tr><td>2</td><td>2017</td><td>0</td><td>15</td><td></td></tr>
<tr><td>3</td><td>2019</td><td>0</td><td>13</td><td></td></tr>

<tr><td colspan="5"><b>Most Win Visitor In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2017</td><td>0</td><td>14</td><td></td></tr>
<tr><td>2</td><td>2018</td><td>0</td><td>13</td><td></td></tr>
<tr><td>3</td><td>2019</td><td>0</td><td>13</td><td></td></tr>

</table></div>
<h1 class="TeamRecordsPro_CAR"><a id="Hurricanes">Hurricanes</a></h1>
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
<br /><table class="STHSRecordTable">
<tr><td colspan="5"><b>Most Goals in 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2014</td><td>849</td><td>10</td><td></td></tr><tr><td>2</td><td>2012</td><td>1005</td><td>9</td><td></td></tr><tr><td>3</td><td>2016</td><td>1026</td><td>8</td><td></td></tr><tr><td>4</td><td>2019</td><td>1256</td><td>8</td><td><a href="OTHL-1256.html">Game Direct Link</a></td></tr><tr><td>5</td><td>2008</td><td>56</td><td>7</td><td></td></tr><tr><td>6</td><td>2008</td><td>119</td><td>7</td><td></td></tr><tr><td>7</td><td>2008</td><td>208</td><td>7</td><td></td></tr><tr><td>8</td><td>2008</td><td>322</td><td>7</td><td></td></tr><tr><td>9</td><td>2008</td><td>447</td><td>7</td><td></td></tr><tr><td>10</td><td>2011</td><td>337</td><td>7</td><td></td></tr>
<tr><td colspan="5"><b>Most Goals in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2008</td><td>0</td><td>288</td><td></td></tr>
<tr><td>2</td><td>2014</td><td>0</td><td>263</td><td></td></tr>
<tr><td>3</td><td>2010</td><td>0</td><td>257</td><td></td></tr>
<tr><td>4</td><td>2012</td><td>0</td><td>256</td><td></td></tr>
<tr><td>5</td><td>2009</td><td>0</td><td>243</td><td></td></tr>
<tr><td>6</td><td>2013</td><td>0</td><td>224</td><td></td></tr>
<tr><td>7</td><td>2019</td><td>0</td><td>224</td><td></td></tr>
<tr><td>8</td><td>2011</td><td>0</td><td>201</td><td></td></tr>
<tr><td>9</td><td>2018</td><td>0</td><td>182</td><td></td></tr>

<tr><td colspan="5"><b>Less Goal in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2017</td><td>0</td><td>168</td><td></td></tr>
<tr><td>2</td><td>2018</td><td>0</td><td>182</td><td></td></tr>
<tr><td>3</td><td>2011</td><td>0</td><td>201</td><td></td></tr>
<tr><td>4</td><td>2016</td><td>0</td><td>209</td><td></td></tr>
<tr><td>5</td><td>2015</td><td>0</td><td>211</td><td></td></tr>
<tr><td>6</td><td>2013</td><td>0</td><td>224</td><td></td></tr>
<tr><td>7</td><td>2019</td><td>0</td><td>224</td><td></td></tr>
<tr><td>8</td><td>2009</td><td>0</td><td>243</td><td></td></tr>
<tr><td>9</td><td>2012</td><td>0</td><td>256</td><td></td></tr>
<tr><td>10</td><td>2010</td><td>0</td><td>257</td><td></td></tr>

<tr><td colspan="5"><b>Most Goals Against in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2019</td><td>0</td><td>309</td><td></td></tr>
<tr><td>2</td><td>2008</td><td>0</td><td>280</td><td></td></tr>
<tr><td>3</td><td>2018</td><td>0</td><td>266</td><td></td></tr>
<tr><td>4</td><td>2016</td><td>0</td><td>255</td><td></td></tr>
<tr><td>5</td><td>2017</td><td>0</td><td>243</td><td></td></tr>
<tr><td>6</td><td>2014</td><td>0</td><td>227</td><td></td></tr>
<tr><td>7</td><td>2015</td><td>0</td><td>220</td><td></td></tr>
<tr><td>8</td><td>2012</td><td>0</td><td>218</td><td></td></tr>
<tr><td>9</td><td>2010</td><td>0</td><td>212</td><td></td></tr>
<tr><td>10</td><td>2011</td><td>0</td><td>192</td><td></td></tr>

<tr><td colspan="5"><b>Less Goal Against in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2013</td><td>0</td><td>181</td><td></td></tr>
<tr><td>2</td><td>2009</td><td>0</td><td>191</td><td></td></tr>
<tr><td>3</td><td>2011</td><td>0</td><td>192</td><td></td></tr>
<tr><td>4</td><td>2010</td><td>0</td><td>212</td><td></td></tr>
<tr><td>5</td><td>2012</td><td>0</td><td>218</td><td></td></tr>
<tr><td>6</td><td>2018</td><td>0</td><td>266</td><td></td></tr>
<tr><td>7</td><td>2008</td><td>0</td><td>280</td><td></td></tr>

<tr><td colspan="5"><b>Most Assists in 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2014</td><td>849</td><td>16</td><td></td></tr><tr><td>2</td><td>2012</td><td>1005</td><td>15</td><td></td></tr><tr><td>3</td><td>2008</td><td>119</td><td>14</td><td></td></tr><tr><td>4</td><td>2016</td><td>1026</td><td>14</td><td></td></tr><tr><td>5</td><td>2008</td><td>322</td><td>13</td><td></td></tr><tr><td>6</td><td>2008</td><td>1129</td><td>13</td><td></td></tr><tr><td>7</td><td>2010</td><td>93</td><td>13</td><td></td></tr><tr><td>8</td><td>2012</td><td>1122</td><td>13</td><td></td></tr><tr><td>9</td><td>2018</td><td>993</td><td>13</td><td></td></tr><tr><td>10</td><td>2019</td><td>1256</td><td>13</td><td><a href="OTHL-1256.html">Game Direct Link</a></td></tr>
<tr><td colspan="5"><b>Most Assists in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2008</td><td>0</td><td>507</td><td></td></tr>
<tr><td>2</td><td>2014</td><td>0</td><td>452</td><td></td></tr>
<tr><td>3</td><td>2012</td><td>0</td><td>451</td><td></td></tr>
<tr><td>4</td><td>2010</td><td>0</td><td>443</td><td></td></tr>
<tr><td>5</td><td>2009</td><td>0</td><td>432</td><td></td></tr>
<tr><td>6</td><td>2019</td><td>0</td><td>396</td><td></td></tr>
<tr><td>7</td><td>2013</td><td>0</td><td>372</td><td></td></tr>
<tr><td>8</td><td>2018</td><td>0</td><td>320</td><td></td></tr>
<tr><td>9</td><td>2011</td><td>0</td><td>311</td><td></td></tr>

<tr><td colspan="5"><b>Less Assist in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2017</td><td>0</td><td>281</td><td></td></tr>
<tr><td>2</td><td>2011</td><td>0</td><td>311</td><td></td></tr>
<tr><td>3</td><td>2018</td><td>0</td><td>320</td><td></td></tr>
<tr><td>4</td><td>2016</td><td>0</td><td>349</td><td></td></tr>
<tr><td>5</td><td>2015</td><td>0</td><td>363</td><td></td></tr>
<tr><td>6</td><td>2013</td><td>0</td><td>372</td><td></td></tr>
<tr><td>7</td><td>2019</td><td>0</td><td>396</td><td></td></tr>
<tr><td>8</td><td>2009</td><td>0</td><td>432</td><td></td></tr>
<tr><td>9</td><td>2010</td><td>0</td><td>443</td><td></td></tr>
<tr><td>10</td><td>2012</td><td>0</td><td>451</td><td></td></tr>

<tr><td colspan="5"><b>Most Game Points in 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2014</td><td>849</td><td>26</td><td></td></tr><tr><td>2</td><td>2012</td><td>1005</td><td>24</td><td></td></tr><tr><td>3</td><td>2016</td><td>1026</td><td>22</td><td></td></tr><tr><td>4</td><td>2008</td><td>119</td><td>21</td><td></td></tr><tr><td>5</td><td>2019</td><td>1256</td><td>21</td><td><a href="OTHL-1256.html">Game Direct Link</a></td></tr><tr><td>6</td><td>2008</td><td>322</td><td>20</td><td></td></tr><tr><td>7</td><td>2008</td><td>1129</td><td>20</td><td></td></tr><tr><td>8</td><td>2010</td><td>93</td><td>20</td><td></td></tr><tr><td>9</td><td>2012</td><td>1122</td><td>20</td><td></td></tr><tr><td>10</td><td>2018</td><td>993</td><td>20</td><td></td></tr>
<tr><td colspan="5"><b>Most Game Points in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>0</td><td>0</td><td>32000</td><td></td></tr>
<tr><td>2</td><td>0</td><td>0</td><td>32000</td><td></td></tr>

<tr><td colspan="5"><b>Less Game Point In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2017</td><td>0</td><td>449</td><td></td></tr>
<tr><td>2</td><td>2018</td><td>0</td><td>502</td><td></td></tr>
<tr><td>3</td><td>2011</td><td>0</td><td>512</td><td></td></tr>
<tr><td>4</td><td>2016</td><td>0</td><td>558</td><td></td></tr>
<tr><td>5</td><td>2015</td><td>0</td><td>574</td><td></td></tr>
<tr><td>6</td><td>2013</td><td>0</td><td>596</td><td></td></tr>
<tr><td>7</td><td>2019</td><td>0</td><td>620</td><td></td></tr>
<tr><td>8</td><td>2009</td><td>0</td><td>675</td><td></td></tr>
<tr><td>9</td><td>2010</td><td>0</td><td>700</td><td></td></tr>
<tr><td>10</td><td>2012</td><td>0</td><td>707</td><td></td></tr>

<tr><td colspan="5"><b>Most Shots In 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2008</td><td>367</td><td>59</td><td></td></tr><tr><td>2</td><td>2013</td><td>32</td><td>53</td><td></td></tr><tr><td>3</td><td>2019</td><td>971</td><td>53</td><td><a href="OTHL-971.html">Game Direct Link</a></td></tr><tr><td>4</td><td>2017</td><td>40</td><td>50</td><td></td></tr><tr><td>5</td><td>2019</td><td>1100</td><td>48</td><td><a href="OTHL-1100.html">Game Direct Link</a></td></tr><tr><td>6</td><td>2019</td><td>1207</td><td>48</td><td><a href="OTHL-1207.html">Game Direct Link</a></td></tr><tr><td>7</td><td>2014</td><td>920</td><td>47</td><td></td></tr><tr><td>8</td><td>2014</td><td>1025</td><td>47</td><td></td></tr><tr><td>9</td><td>2016</td><td>1026</td><td>47</td><td></td></tr><tr><td>10</td><td>2012</td><td>1005</td><td>46</td><td></td></tr>
<tr><td colspan="5"><b>Most Shots In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2019</td><td>0</td><td>2460</td><td></td></tr>
<tr><td>2</td><td>2014</td><td>0</td><td>2422</td><td></td></tr>
<tr><td>3</td><td>2008</td><td>0</td><td>2420</td><td></td></tr>
<tr><td>4</td><td>2011</td><td>0</td><td>2380</td><td></td></tr>
<tr><td>5</td><td>2012</td><td>0</td><td>2367</td><td></td></tr>
<tr><td>6</td><td>2010</td><td>0</td><td>2349</td><td></td></tr>
<tr><td>7</td><td>2009</td><td>0</td><td>2345</td><td></td></tr>
<tr><td>8</td><td>2018</td><td>0</td><td>2157</td><td></td></tr>

<tr><td colspan="5"><b>Less Shots In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2018</td><td>0</td><td>2157</td><td></td></tr>
<tr><td>2</td><td>2016</td><td>0</td><td>2195</td><td></td></tr>
<tr><td>3</td><td>2013</td><td>0</td><td>2208</td><td></td></tr>
<tr><td>4</td><td>2015</td><td>0</td><td>2299</td><td></td></tr>
<tr><td>5</td><td>2009</td><td>0</td><td>2345</td><td></td></tr>
<tr><td>6</td><td>2017</td><td>0</td><td>2347</td><td></td></tr>
<tr><td>7</td><td>2010</td><td>0</td><td>2349</td><td></td></tr>
<tr><td>8</td><td>2012</td><td>0</td><td>2367</td><td></td></tr>
<tr><td>9</td><td>2011</td><td>0</td><td>2380</td><td></td></tr>
<tr><td>10</td><td>2008</td><td>0</td><td>2420</td><td></td></tr>

<tr><td colspan="5"><b>Most Shots Blocked In 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2012</td><td>656</td><td>23</td><td></td></tr><tr><td>2</td><td>2019</td><td>1100</td><td>22</td><td><a href="OTHL-1100.html">Game Direct Link</a></td></tr><tr><td>3</td><td>2010</td><td>1007</td><td>21</td><td></td></tr><tr><td>4</td><td>2019</td><td>534</td><td>21</td><td><a href="OTHL-534.html">Game Direct Link</a></td></tr><tr><td>5</td><td>2011</td><td>1194</td><td>20</td><td></td></tr><tr><td>6</td><td>2016</td><td>1078</td><td>20</td><td></td></tr><tr><td>7</td><td>2011</td><td>195</td><td>19</td><td></td></tr><tr><td>8</td><td>2010</td><td>1066</td><td>18</td><td></td></tr><tr><td>9</td><td>2011</td><td>291</td><td>18</td><td></td></tr><tr><td>10</td><td>2011</td><td>358</td><td>18</td><td></td></tr>
<tr><td colspan="5"><b>Most Shots Blocked In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>0</td><td>0</td><td>32000</td><td></td></tr>
<tr><td>2</td><td>0</td><td>0</td><td>32000</td><td></td></tr>

<tr><td colspan="5"><b>Less Shots Block In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2009</td><td>0</td><td>542</td><td></td></tr>
<tr><td>2</td><td>2013</td><td>0</td><td>565</td><td></td></tr>
<tr><td>3</td><td>2008</td><td>0</td><td>600</td><td></td></tr>
<tr><td>4</td><td>2014</td><td>0</td><td>628</td><td></td></tr>
<tr><td>5</td><td>2015</td><td>0</td><td>628</td><td></td></tr>
<tr><td>6</td><td>2010</td><td>0</td><td>631</td><td></td></tr>
<tr><td>7</td><td>2012</td><td>0</td><td>646</td><td></td></tr>
<tr><td>8</td><td>2018</td><td>0</td><td>785</td><td></td></tr>
<tr><td>9</td><td>2011</td><td>0</td><td>821</td><td></td></tr>

<tr><td colspan="5"><b>Most Shots Against In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2019</td><td>0</td><td>3087</td><td></td></tr>
<tr><td>2</td><td>2018</td><td>0</td><td>2836</td><td></td></tr>
<tr><td>3</td><td>2017</td><td>0</td><td>2747</td><td></td></tr>
<tr><td>4</td><td>2016</td><td>0</td><td>2549</td><td></td></tr>
<tr><td>5</td><td>2011</td><td>0</td><td>2374</td><td></td></tr>
<tr><td>6</td><td>2008</td><td>0</td><td>2287</td><td></td></tr>
<tr><td>7</td><td>2014</td><td>0</td><td>2175</td><td></td></tr>
<tr><td>8</td><td>2012</td><td>0</td><td>2151</td><td></td></tr>
<tr><td>9</td><td>2015</td><td>0</td><td>2146</td><td></td></tr>
<tr><td>10</td><td>2010</td><td>0</td><td>2010</td><td></td></tr>

<tr><td colspan="5"><b>Less Shots Against In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2009</td><td>0</td><td>1822</td><td></td></tr>
<tr><td>2</td><td>2013</td><td>0</td><td>1923</td><td></td></tr>
<tr><td>3</td><td>2010</td><td>0</td><td>2010</td><td></td></tr>
<tr><td>4</td><td>2015</td><td>0</td><td>2146</td><td></td></tr>
<tr><td>5</td><td>2012</td><td>0</td><td>2151</td><td></td></tr>
<tr><td>6</td><td>2014</td><td>0</td><td>2175</td><td></td></tr>
<tr><td>7</td><td>2008</td><td>0</td><td>2287</td><td></td></tr>
<tr><td>8</td><td>2011</td><td>0</td><td>2374</td><td></td></tr>

<tr><td colspan="5"><b>Most Pim In 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2012</td><td>945</td><td>60</td><td></td></tr><tr><td>2</td><td>2008</td><td>367</td><td>45</td><td></td></tr><tr><td>3</td><td>2009</td><td>878</td><td>43</td><td></td></tr><tr><td>4</td><td>2011</td><td>1038</td><td>42</td><td></td></tr><tr><td>5</td><td>2008</td><td>1002</td><td>39</td><td></td></tr><tr><td>6</td><td>2012</td><td>608</td><td>34</td><td></td></tr><tr><td>7</td><td>2008</td><td>92</td><td>33</td><td></td></tr><tr><td>8</td><td>2010</td><td>880</td><td>33</td><td></td></tr><tr><td>9</td><td>2016</td><td>687</td><td>32</td><td></td></tr><tr><td>10</td><td>2011</td><td>558</td><td>31</td><td></td></tr>
<tr><td colspan="5"><b>Most Pim In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2008</td><td>0</td><td>1191</td><td></td></tr>
<tr><td>2</td><td>2010</td><td>0</td><td>963</td><td></td></tr>
<tr><td>3</td><td>2016</td><td>0</td><td>940</td><td></td></tr>
<tr><td>4</td><td>2009</td><td>0</td><td>897</td><td></td></tr>
<tr><td>5</td><td>2011</td><td>0</td><td>844</td><td></td></tr>
<tr><td>6</td><td>2014</td><td>0</td><td>809</td><td></td></tr>
<tr><td>7</td><td>2012</td><td>0</td><td>724</td><td></td></tr>
<tr><td>8</td><td>2019</td><td>0</td><td>710</td><td></td></tr>
<tr><td>9</td><td>2018</td><td>0</td><td>684</td><td></td></tr>

<tr><td colspan="5"><b>Less Pim In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2015</td><td>0</td><td>604</td><td></td></tr>
<tr><td>2</td><td>2017</td><td>0</td><td>633</td><td></td></tr>
<tr><td>3</td><td>2013</td><td>0</td><td>641</td><td></td></tr>
<tr><td>4</td><td>2018</td><td>0</td><td>684</td><td></td></tr>
<tr><td>5</td><td>2019</td><td>0</td><td>710</td><td></td></tr>
<tr><td>6</td><td>2012</td><td>0</td><td>724</td><td></td></tr>
<tr><td>7</td><td>2014</td><td>0</td><td>809</td><td></td></tr>
<tr><td>8</td><td>2011</td><td>0</td><td>844</td><td></td></tr>
<tr><td>9</td><td>2009</td><td>0</td><td>897</td><td></td></tr>
<tr><td>10</td><td>2010</td><td>0</td><td>963</td><td></td></tr>

<tr><td colspan="5"><b>Most Hits In 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2011</td><td>938</td><td>41</td><td></td></tr><tr><td>2</td><td>2018</td><td>916</td><td>40</td><td></td></tr><tr><td>3</td><td>2011</td><td>771</td><td>35</td><td></td></tr><tr><td>4</td><td>2016</td><td>792</td><td>35</td><td></td></tr><tr><td>5</td><td>2018</td><td>837</td><td>35</td><td></td></tr><tr><td>6</td><td>2016</td><td>478</td><td>34</td><td></td></tr><tr><td>7</td><td>2018</td><td>769</td><td>34</td><td></td></tr><tr><td>8</td><td>2018</td><td>993</td><td>34</td><td></td></tr><tr><td>9</td><td>2011</td><td>26</td><td>33</td><td></td></tr><tr><td>10</td><td>2017</td><td>1225</td><td>33</td><td></td></tr>
<tr><td colspan="5"><b>Most Hits In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2019</td><td>0</td><td>1818</td><td></td></tr>
<tr><td>2</td><td>2018</td><td>0</td><td>1816</td><td></td></tr>
<tr><td>3</td><td>2011</td><td>0</td><td>1792</td><td></td></tr>
<tr><td>4</td><td>2017</td><td>0</td><td>1708</td><td></td></tr>
<tr><td>5</td><td>2016</td><td>0</td><td>1700</td><td></td></tr>
<tr><td>6</td><td>2014</td><td>0</td><td>1611</td><td></td></tr>
<tr><td>7</td><td>2013</td><td>0</td><td>1566</td><td></td></tr>
<tr><td>8</td><td>2008</td><td>0</td><td>1518</td><td></td></tr>
<tr><td>9</td><td>2012</td><td>0</td><td>1511</td><td></td></tr>
<tr><td>10</td><td>2010</td><td>0</td><td>1336</td><td></td></tr>

<tr><td colspan="5"><b>Less Hit In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2009</td><td>0</td><td>1316</td><td></td></tr>
<tr><td>2</td><td>2010</td><td>0</td><td>1336</td><td></td></tr>
<tr><td>3</td><td>2015</td><td>0</td><td>1507</td><td></td></tr>
<tr><td>4</td><td>2012</td><td>0</td><td>1511</td><td></td></tr>
<tr><td>5</td><td>2008</td><td>0</td><td>1518</td><td></td></tr>
<tr><td>6</td><td>2013</td><td>0</td><td>1566</td><td></td></tr>
<tr><td>7</td><td>2011</td><td>0</td><td>1792</td><td></td></tr>

<tr><td colspan="5"><b>Most Empty Net Goal In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2011</td><td>0</td><td>4</td><td></td></tr>
<tr><td>2</td><td>2017</td><td>0</td><td>3</td><td></td></tr>
<tr><td>3</td><td>2019</td><td>0</td><td>3</td><td></td></tr>
<tr><td>4</td><td>2012</td><td>0</td><td>2</td><td></td></tr>
<tr><td>5</td><td>2013</td><td>0</td><td>2</td><td></td></tr>
<tr><td>6</td><td>2016</td><td>0</td><td>2</td><td></td></tr>
<tr><td>7</td><td>2018</td><td>0</td><td>2</td><td></td></tr>
<tr><td>8</td><td>2009</td><td>0</td><td>1</td><td></td></tr>
<tr><td>9</td><td>2014</td><td>0</td><td>1</td><td></td></tr>

<tr><td colspan="5"><b>Best PP In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2012</td><td>0</td><td>21.10%</td><td></td></tr>
<tr><td>2</td><td>2008</td><td>0</td><td>18.50%</td><td></td></tr>
<tr><td>3</td><td>2011</td><td>0</td><td>17.60%</td><td></td></tr>
<tr><td>4</td><td>2013</td><td>0</td><td>17.00%</td><td></td></tr>
<tr><td>5</td><td>2015</td><td>0</td><td>16.80%</td><td></td></tr>
<tr><td>6</td><td>2010</td><td>0</td><td>16.60%</td><td></td></tr>
<tr><td>7</td><td>2009</td><td>0</td><td>14.50%</td><td></td></tr>
<tr><td>8</td><td>2018</td><td>0</td><td>13.70%</td><td></td></tr>
<tr><td>9</td><td>2019</td><td>0</td><td>12.00%</td><td></td></tr>

<tr><td colspan="5"><b>Best PK In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2009</td><td>0</td><td>86.60%</td><td></td></tr>
<tr><td>2</td><td>2013</td><td>0</td><td>86.50%</td><td></td></tr>
<tr><td>3</td><td>2014</td><td>0</td><td>84.20%</td><td></td></tr>
<tr><td>4</td><td>2016</td><td>0</td><td>84.20%</td><td></td></tr>
<tr><td>5</td><td>2010</td><td>0</td><td>83.10%</td><td></td></tr>
<tr><td>6</td><td>2008</td><td>0</td><td>83.00%</td><td></td></tr>
<tr><td>7</td><td>2011</td><td>0</td><td>82.90%</td><td></td></tr>
<tr><td>8</td><td>2012</td><td>0</td><td>81.90%</td><td></td></tr>
<tr><td>9</td><td>2018</td><td>0</td><td>78.40%</td><td></td></tr>
<tr><td>10</td><td>2019</td><td>0</td><td>72.30%</td><td></td></tr>

<tr><td colspan="5"><b>Worse PP In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2016</td><td>0</td><td>11.30%</td><td></td></tr>
<tr><td>2</td><td>2019</td><td>0</td><td>12.00%</td><td></td></tr>
<tr><td>3</td><td>2017</td><td>0</td><td>12.80%</td><td></td></tr>
<tr><td>4</td><td>2018</td><td>0</td><td>13.70%</td><td></td></tr>
<tr><td>5</td><td>2009</td><td>0</td><td>14.50%</td><td></td></tr>
<tr><td>6</td><td>2014</td><td>0</td><td>15.90%</td><td></td></tr>
<tr><td>7</td><td>2010</td><td>0</td><td>16.60%</td><td></td></tr>
<tr><td>8</td><td>2015</td><td>0</td><td>16.80%</td><td></td></tr>
<tr><td>9</td><td>2013</td><td>0</td><td>17.00%</td><td></td></tr>
<tr><td>10</td><td>2011</td><td>0</td><td>17.60%</td><td></td></tr>

<tr><td colspan="5"><b>Worse PK In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2019</td><td>0</td><td>72.30%</td><td></td></tr>
<tr><td>2</td><td>2017</td><td>0</td><td>77.40%</td><td></td></tr>
<tr><td>3</td><td>2018</td><td>0</td><td>78.40%</td><td></td></tr>
<tr><td>4</td><td>2012</td><td>0</td><td>81.90%</td><td></td></tr>
<tr><td>5</td><td>2015</td><td>0</td><td>82.00%</td><td></td></tr>
<tr><td>6</td><td>2011</td><td>0</td><td>82.90%</td><td></td></tr>
<tr><td>7</td><td>2008</td><td>0</td><td>83.00%</td><td></td></tr>
<tr><td>8</td><td>2010</td><td>0</td><td>83.10%</td><td></td></tr>
<tr><td>9</td><td>2014</td><td>0</td><td>84.20%</td><td></td></tr>
<tr><td>10</td><td>2013</td><td>0</td><td>86.50%</td><td></td></tr>

<tr><td colspan="5"><b>Most Win In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2009</td><td>0</td><td>53</td><td></td></tr>
<tr><td>2</td><td>2013</td><td>0</td><td>50</td><td></td></tr>
<tr><td>3</td><td>2012</td><td>0</td><td>49</td><td></td></tr>
<tr><td>4</td><td>2010</td><td>0</td><td>48</td><td></td></tr>
<tr><td>5</td><td>2014</td><td>0</td><td>48</td><td></td></tr>
<tr><td>6</td><td>2011</td><td>0</td><td>44</td><td></td></tr>
<tr><td>7</td><td>2008</td><td>0</td><td>33</td><td></td></tr>
<tr><td>8</td><td>2018</td><td>0</td><td>27</td><td></td></tr>
<tr><td>9</td><td>2019</td><td>0</td><td>24</td><td></td></tr>

<tr><td colspan="5"><b>Less Win In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2019</td><td>0</td><td>24</td><td></td></tr>
<tr><td>2</td><td>2017</td><td>0</td><td>25</td><td></td></tr>
<tr><td>3</td><td>2018</td><td>0</td><td>27</td><td></td></tr>
<tr><td>4</td><td>2016</td><td>0</td><td>30</td><td></td></tr>
<tr><td>5</td><td>2008</td><td>0</td><td>33</td><td></td></tr>
<tr><td>6</td><td>2015</td><td>0</td><td>43</td><td></td></tr>
<tr><td>7</td><td>2011</td><td>0</td><td>44</td><td></td></tr>
<tr><td>8</td><td>2010</td><td>0</td><td>48</td><td></td></tr>
<tr><td>9</td><td>2014</td><td>0</td><td>48</td><td></td></tr>
<tr><td>10</td><td>2012</td><td>0</td><td>49</td><td></td></tr>

<tr><td colspan="5"><b>Most Lost In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2019</td><td>0</td><td>58</td><td></td></tr>
<tr><td>2</td><td>2017</td><td>0</td><td>57</td><td></td></tr>
<tr><td>3</td><td>2018</td><td>0</td><td>55</td><td></td></tr>
<tr><td>4</td><td>2016</td><td>0</td><td>52</td><td></td></tr>
<tr><td>5</td><td>2015</td><td>0</td><td>39</td><td></td></tr>
<tr><td>6</td><td>2011</td><td>0</td><td>38</td><td></td></tr>
<tr><td>7</td><td>2010</td><td>0</td><td>34</td><td></td></tr>
<tr><td>8</td><td>2014</td><td>0</td><td>34</td><td></td></tr>
<tr><td>9</td><td>2012</td><td>0</td><td>33</td><td></td></tr>
<tr><td>10</td><td>2008</td><td>0</td><td>32</td><td></td></tr>

<tr><td colspan="5"><b>Less Lost In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2009</td><td>0</td><td>29</td><td></td></tr>
<tr><td>2</td><td>2008</td><td>0</td><td>32</td><td></td></tr>
<tr><td>3</td><td>2013</td><td>0</td><td>32</td><td></td></tr>
<tr><td>4</td><td>2012</td><td>0</td><td>33</td><td></td></tr>
<tr><td>5</td><td>2010</td><td>0</td><td>34</td><td></td></tr>
<tr><td>6</td><td>2011</td><td>0</td><td>38</td><td></td></tr>

<tr><td colspan="5"><b>Most Point In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2009</td><td>0</td><td>111</td><td></td></tr>
<tr><td>2</td><td>2014</td><td>0</td><td>108</td><td></td></tr>
<tr><td>3</td><td>2013</td><td>0</td><td>107</td><td></td></tr>
<tr><td>4</td><td>2010</td><td>0</td><td>103</td><td></td></tr>
<tr><td>5</td><td>2012</td><td>0</td><td>102</td><td></td></tr>
<tr><td>6</td><td>2011</td><td>0</td><td>96</td><td></td></tr>
<tr><td>7</td><td>2008</td><td>0</td><td>94</td><td></td></tr>
<tr><td>8</td><td>2018</td><td>0</td><td>59</td><td></td></tr>
<tr><td>9</td><td>2019</td><td>0</td><td>57</td><td></td></tr>

<tr><td colspan="5"><b>Less Points In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2019</td><td>0</td><td>57</td><td></td></tr>
<tr><td>2</td><td>2018</td><td>0</td><td>59</td><td></td></tr>
<tr><td>3</td><td>2017</td><td>0</td><td>60</td><td></td></tr>
<tr><td>4</td><td>2016</td><td>0</td><td>69</td><td></td></tr>
<tr><td>5</td><td>2015</td><td>0</td><td>91</td><td></td></tr>
<tr><td>6</td><td>2008</td><td>0</td><td>94</td><td></td></tr>
<tr><td>7</td><td>2011</td><td>0</td><td>96</td><td></td></tr>
<tr><td>8</td><td>2012</td><td>0</td><td>102</td><td></td></tr>
<tr><td>9</td><td>2010</td><td>0</td><td>103</td><td></td></tr>
<tr><td>10</td><td>2013</td><td>0</td><td>107</td><td></td></tr>

<tr><td colspan="5"><b>Most Win Home In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>0</td><td>0</td><td>32000</td><td></td></tr>
<tr><td>2</td><td>0</td><td>0</td><td>32000</td><td></td></tr>

<tr><td colspan="5"><b>Most Win Visitor In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>0</td><td>0</td><td>32000</td><td></td></tr>
<tr><td>2</td><td>0</td><td>0</td><td>32000</td><td></td></tr>

</table></div>
<h1 class="TeamRecordsPro_NYI"><a id="Islanders">Islanders</a></h1>
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
<br /><table class="STHSRecordTable">
<tr><td colspan="5"><b>Most Goals in 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2009</td><td>877</td><td>8</td><td></td></tr><tr><td>2</td><td>2013</td><td>1131</td><td>8</td><td></td></tr><tr><td>3</td><td>2008</td><td>103</td><td>7</td><td></td></tr><tr><td>4</td><td>2008</td><td>287</td><td>7</td><td></td></tr><tr><td>5</td><td>2008</td><td>494</td><td>7</td><td></td></tr><tr><td>6</td><td>2008</td><td>690</td><td>7</td><td></td></tr><tr><td>7</td><td>2013</td><td>544</td><td>7</td><td></td></tr><tr><td>8</td><td>2013</td><td>1113</td><td>7</td><td></td></tr><tr><td>9</td><td>2014</td><td>440</td><td>7</td><td></td></tr><tr><td>10</td><td>2011</td><td>941</td><td>6</td><td></td></tr>
<tr><td colspan="5"><b>Most Goals in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2008</td><td>0</td><td>279</td><td></td></tr>
<tr><td>2</td><td>2010</td><td>0</td><td>255</td><td></td></tr>
<tr><td>3</td><td>2019</td><td>0</td><td>254</td><td></td></tr>
<tr><td>4</td><td>2013</td><td>0</td><td>249</td><td></td></tr>
<tr><td>5</td><td>2012</td><td>0</td><td>239</td><td></td></tr>
<tr><td>6</td><td>2018</td><td>0</td><td>239</td><td></td></tr>
<tr><td>7</td><td>2017</td><td>0</td><td>233</td><td></td></tr>
<tr><td>8</td><td>2009</td><td>0</td><td>229</td><td></td></tr>
<tr><td>9</td><td>2011</td><td>0</td><td>213</td><td></td></tr>

<tr><td colspan="5"><b>Less Goal in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2016</td><td>0</td><td>182</td><td></td></tr>
<tr><td>2</td><td>2015</td><td>0</td><td>185</td><td></td></tr>
<tr><td>3</td><td>2014</td><td>0</td><td>201</td><td></td></tr>
<tr><td>4</td><td>2011</td><td>0</td><td>213</td><td></td></tr>
<tr><td>5</td><td>2009</td><td>0</td><td>229</td><td></td></tr>
<tr><td>6</td><td>2012</td><td>0</td><td>239</td><td></td></tr>
<tr><td>7</td><td>2018</td><td>0</td><td>239</td><td></td></tr>
<tr><td>8</td><td>2013</td><td>0</td><td>249</td><td></td></tr>
<tr><td>9</td><td>2019</td><td>0</td><td>254</td><td></td></tr>
<tr><td>10</td><td>2010</td><td>0</td><td>255</td><td></td></tr>

<tr><td colspan="5"><b>Most Goals Against in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2016</td><td>0</td><td>290</td><td></td></tr>
<tr><td>2</td><td>2012</td><td>0</td><td>279</td><td></td></tr>
<tr><td>3</td><td>2009</td><td>0</td><td>278</td><td></td></tr>
<tr><td>4</td><td>2015</td><td>0</td><td>256</td><td></td></tr>
<tr><td>5</td><td>2014</td><td>0</td><td>245</td><td></td></tr>
<tr><td>6</td><td>2008</td><td>0</td><td>234</td><td></td></tr>
<tr><td>7</td><td>2010</td><td>0</td><td>234</td><td></td></tr>
<tr><td>8</td><td>2013</td><td>0</td><td>216</td><td></td></tr>
<tr><td>9</td><td>2011</td><td>0</td><td>213</td><td></td></tr>
<tr><td>10</td><td>2019</td><td>0</td><td>213</td><td></td></tr>

<tr><td colspan="5"><b>Less Goal Against in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2018</td><td>0</td><td>179</td><td></td></tr>
<tr><td>2</td><td>2011</td><td>0</td><td>213</td><td></td></tr>
<tr><td>3</td><td>2019</td><td>0</td><td>213</td><td></td></tr>
<tr><td>4</td><td>2013</td><td>0</td><td>216</td><td></td></tr>
<tr><td>5</td><td>2017</td><td>0</td><td>222</td><td></td></tr>
<tr><td>6</td><td>2008</td><td>0</td><td>234</td><td></td></tr>
<tr><td>7</td><td>2010</td><td>0</td><td>234</td><td></td></tr>
<tr><td>8</td><td>2014</td><td>0</td><td>245</td><td></td></tr>
<tr><td>9</td><td>2009</td><td>0</td><td>278</td><td></td></tr>
<tr><td>10</td><td>2012</td><td>0</td><td>279</td><td></td></tr>

<tr><td colspan="5"><b>Most Assists in 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2009</td><td>877</td><td>15</td><td></td></tr><tr><td>2</td><td>2008</td><td>690</td><td>14</td><td></td></tr><tr><td>3</td><td>2009</td><td>195</td><td>13</td><td></td></tr><tr><td>4</td><td>2010</td><td>52</td><td>13</td><td></td></tr><tr><td>5</td><td>2010</td><td>890</td><td>13</td><td></td></tr><tr><td>6</td><td>2013</td><td>544</td><td>12</td><td></td></tr><tr><td>7</td><td>2013</td><td>775</td><td>12</td><td></td></tr><tr><td>8</td><td>2013</td><td>1113</td><td>12</td><td></td></tr><tr><td>9</td><td>2014</td><td>363</td><td>12</td><td></td></tr><tr><td>10</td><td>2014</td><td>440</td><td>12</td><td></td></tr>
<tr><td colspan="5"><b>Most Assists in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2008</td><td>0</td><td>506</td><td></td></tr>
<tr><td>2</td><td>2010</td><td>0</td><td>452</td><td></td></tr>
<tr><td>3</td><td>2013</td><td>0</td><td>437</td><td></td></tr>
<tr><td>4</td><td>2019</td><td>0</td><td>432</td><td></td></tr>
<tr><td>5</td><td>2018</td><td>0</td><td>430</td><td></td></tr>
<tr><td>6</td><td>2017</td><td>0</td><td>422</td><td></td></tr>
<tr><td>7</td><td>2012</td><td>0</td><td>411</td><td></td></tr>
<tr><td>8</td><td>2009</td><td>0</td><td>398</td><td></td></tr>
<tr><td>9</td><td>2011</td><td>0</td><td>335</td><td></td></tr>

<tr><td colspan="5"><b>Less Assist in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2016</td><td>0</td><td>317</td><td></td></tr>
<tr><td>2</td><td>2015</td><td>0</td><td>334</td><td></td></tr>
<tr><td>3</td><td>2011</td><td>0</td><td>335</td><td></td></tr>
<tr><td>4</td><td>2014</td><td>0</td><td>349</td><td></td></tr>
<tr><td>5</td><td>2009</td><td>0</td><td>398</td><td></td></tr>
<tr><td>6</td><td>2012</td><td>0</td><td>411</td><td></td></tr>
<tr><td>7</td><td>2018</td><td>0</td><td>430</td><td></td></tr>
<tr><td>8</td><td>2019</td><td>0</td><td>432</td><td></td></tr>
<tr><td>9</td><td>2013</td><td>0</td><td>437</td><td></td></tr>
<tr><td>10</td><td>2010</td><td>0</td><td>452</td><td></td></tr>

<tr><td colspan="5"><b>Most Game Points in 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2009</td><td>877</td><td>23</td><td></td></tr><tr><td>2</td><td>2008</td><td>690</td><td>21</td><td></td></tr><tr><td>3</td><td>2009</td><td>195</td><td>20</td><td></td></tr><tr><td>4</td><td>2010</td><td>52</td><td>20</td><td></td></tr><tr><td>5</td><td>2010</td><td>890</td><td>20</td><td></td></tr><tr><td>6</td><td>2013</td><td>544</td><td>19</td><td></td></tr><tr><td>7</td><td>2013</td><td>1113</td><td>19</td><td></td></tr><tr><td>8</td><td>2014</td><td>440</td><td>19</td><td></td></tr><tr><td>9</td><td>2013</td><td>775</td><td>18</td><td></td></tr><tr><td>10</td><td>2013</td><td>1131</td><td>18</td><td></td></tr>
<tr><td colspan="5"><b>Most Game Points in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>0</td><td>0</td><td>32000</td><td></td></tr>
<tr><td>2</td><td>0</td><td>0</td><td>32000</td><td></td></tr>

<tr><td colspan="5"><b>Less Game Point In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2016</td><td>0</td><td>499</td><td></td></tr>
<tr><td>2</td><td>2015</td><td>0</td><td>519</td><td></td></tr>
<tr><td>3</td><td>2011</td><td>0</td><td>548</td><td></td></tr>
<tr><td>4</td><td>2014</td><td>0</td><td>550</td><td></td></tr>
<tr><td>5</td><td>2009</td><td>0</td><td>627</td><td></td></tr>
<tr><td>6</td><td>2012</td><td>0</td><td>650</td><td></td></tr>
<tr><td>7</td><td>2018</td><td>0</td><td>669</td><td></td></tr>
<tr><td>8</td><td>2013</td><td>0</td><td>686</td><td></td></tr>
<tr><td>9</td><td>2019</td><td>0</td><td>686</td><td></td></tr>
<tr><td>10</td><td>2010</td><td>0</td><td>707</td><td></td></tr>

<tr><td colspan="5"><b>Most Shots In 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2018</td><td>561</td><td>50</td><td></td></tr><tr><td>2</td><td>2019</td><td>343</td><td>50</td><td><a href="OTHL-343.html">Game Direct Link</a></td></tr><tr><td>3</td><td>2019</td><td>608</td><td>50</td><td><a href="OTHL-608.html">Game Direct Link</a></td></tr><tr><td>4</td><td>2008</td><td>35</td><td>49</td><td></td></tr><tr><td>5</td><td>2018</td><td>1026</td><td>49</td><td></td></tr><tr><td>6</td><td>2019</td><td>947</td><td>49</td><td><a href="OTHL-947.html">Game Direct Link</a></td></tr><tr><td>7</td><td>2019</td><td>1197</td><td>48</td><td><a href="OTHL-1197.html">Game Direct Link</a></td></tr><tr><td>8</td><td>2012</td><td>386</td><td>47</td><td></td></tr><tr><td>9</td><td>2013</td><td>1131</td><td>47</td><td></td></tr><tr><td>10</td><td>2019</td><td>661</td><td>47</td><td><a href="OTHL-661.html">Game Direct Link</a></td></tr>
<tr><td colspan="5"><b>Most Shots In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2019</td><td>0</td><td>2782</td><td></td></tr>
<tr><td>2</td><td>2008</td><td>0</td><td>2524</td><td></td></tr>
<tr><td>3</td><td>2011</td><td>0</td><td>2523</td><td></td></tr>
<tr><td>4</td><td>2018</td><td>0</td><td>2513</td><td></td></tr>
<tr><td>5</td><td>2017</td><td>0</td><td>2418</td><td></td></tr>
<tr><td>6</td><td>2012</td><td>0</td><td>2404</td><td></td></tr>
<tr><td>7</td><td>2013</td><td>0</td><td>2300</td><td></td></tr>
<tr><td>8</td><td>2010</td><td>0</td><td>2295</td><td></td></tr>
<tr><td>9</td><td>2009</td><td>0</td><td>2152</td><td></td></tr>

<tr><td colspan="5"><b>Less Shots In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2016</td><td>0</td><td>1728</td><td></td></tr>
<tr><td>2</td><td>2014</td><td>0</td><td>1973</td><td></td></tr>
<tr><td>3</td><td>2015</td><td>0</td><td>2021</td><td></td></tr>
<tr><td>4</td><td>2009</td><td>0</td><td>2152</td><td></td></tr>
<tr><td>5</td><td>2010</td><td>0</td><td>2295</td><td></td></tr>
<tr><td>6</td><td>2013</td><td>0</td><td>2300</td><td></td></tr>
<tr><td>7</td><td>2012</td><td>0</td><td>2404</td><td></td></tr>
<tr><td>8</td><td>2018</td><td>0</td><td>2513</td><td></td></tr>
<tr><td>9</td><td>2011</td><td>0</td><td>2523</td><td></td></tr>
<tr><td>10</td><td>2008</td><td>0</td><td>2524</td><td></td></tr>

<tr><td colspan="5"><b>Most Shots Blocked In 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2017</td><td>460</td><td>22</td><td></td></tr><tr><td>2</td><td>2009</td><td>272</td><td>19</td><td></td></tr><tr><td>3</td><td>2016</td><td>1046</td><td>19</td><td></td></tr><tr><td>4</td><td>2014</td><td>164</td><td>18</td><td></td></tr><tr><td>5</td><td>2016</td><td>1088</td><td>18</td><td></td></tr><tr><td>6</td><td>2017</td><td>350</td><td>18</td><td></td></tr><tr><td>7</td><td>2011</td><td>473</td><td>17</td><td></td></tr><tr><td>8</td><td>2011</td><td>772</td><td>17</td><td></td></tr><tr><td>9</td><td>2013</td><td>996</td><td>17</td><td></td></tr><tr><td>10</td><td>2015</td><td>778</td><td>17</td><td></td></tr>
<tr><td colspan="5"><b>Most Shots Blocked In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>0</td><td>0</td><td>32000</td><td></td></tr>
<tr><td>2</td><td>0</td><td>0</td><td>32000</td><td></td></tr>

<tr><td colspan="5"><b>Less Shots Block In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2008</td><td>0</td><td>572</td><td></td></tr>
<tr><td>2</td><td>2010</td><td>0</td><td>604</td><td></td></tr>
<tr><td>3</td><td>2013</td><td>0</td><td>617</td><td></td></tr>
<tr><td>4</td><td>2012</td><td>0</td><td>645</td><td></td></tr>
<tr><td>5</td><td>2014</td><td>0</td><td>654</td><td></td></tr>
<tr><td>6</td><td>2018</td><td>0</td><td>677</td><td></td></tr>
<tr><td>7</td><td>2009</td><td>0</td><td>684</td><td></td></tr>
<tr><td>8</td><td>2019</td><td>0</td><td>710</td><td></td></tr>
<tr><td>9</td><td>2011</td><td>0</td><td>735</td><td></td></tr>

<tr><td colspan="5"><b>Most Shots Against In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2017</td><td>0</td><td>2560</td><td></td></tr>
<tr><td>2</td><td>2018</td><td>0</td><td>2449</td><td></td></tr>
<tr><td>3</td><td>2016</td><td>0</td><td>2390</td><td></td></tr>
<tr><td>4</td><td>2014</td><td>0</td><td>2379</td><td></td></tr>
<tr><td>5</td><td>2009</td><td>0</td><td>2378</td><td></td></tr>
<tr><td>6</td><td>2019</td><td>0</td><td>2347</td><td></td></tr>
<tr><td>7</td><td>2015</td><td>0</td><td>2324</td><td></td></tr>
<tr><td>8</td><td>2011</td><td>0</td><td>2279</td><td></td></tr>
<tr><td>9</td><td>2012</td><td>0</td><td>2227</td><td></td></tr>
<tr><td>10</td><td>2013</td><td>0</td><td>2205</td><td></td></tr>

<tr><td colspan="5"><b>Less Shots Against In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2010</td><td>0</td><td>2041</td><td></td></tr>
<tr><td>2</td><td>2008</td><td>0</td><td>2095</td><td></td></tr>
<tr><td>3</td><td>2013</td><td>0</td><td>2205</td><td></td></tr>
<tr><td>4</td><td>2012</td><td>0</td><td>2227</td><td></td></tr>
<tr><td>5</td><td>2011</td><td>0</td><td>2279</td><td></td></tr>
<tr><td>6</td><td>2019</td><td>0</td><td>2347</td><td></td></tr>
<tr><td>7</td><td>2009</td><td>0</td><td>2378</td><td></td></tr>

<tr><td colspan="5"><b>Most Pim In 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2018</td><td>328</td><td>60</td><td></td></tr><tr><td>2</td><td>2012</td><td>916</td><td>59</td><td></td></tr><tr><td>3</td><td>2009</td><td>738</td><td>54</td><td></td></tr><tr><td>4</td><td>2010</td><td>890</td><td>54</td><td></td></tr><tr><td>5</td><td>2009</td><td>272</td><td>52</td><td></td></tr><tr><td>6</td><td>2013</td><td>914</td><td>51</td><td></td></tr><tr><td>7</td><td>2010</td><td>717</td><td>47</td><td></td></tr><tr><td>8</td><td>2013</td><td>701</td><td>47</td><td></td></tr><tr><td>9</td><td>2010</td><td>998</td><td>46</td><td></td></tr><tr><td>10</td><td>2013</td><td>176</td><td>38</td><td></td></tr>
<tr><td colspan="5"><b>Most Pim In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2009</td><td>0</td><td>1398</td><td></td></tr>
<tr><td>2</td><td>2010</td><td>0</td><td>1329</td><td></td></tr>
<tr><td>3</td><td>2008</td><td>0</td><td>1103</td><td></td></tr>
<tr><td>4</td><td>2011</td><td>0</td><td>1079</td><td></td></tr>
<tr><td>5</td><td>2016</td><td>0</td><td>1002</td><td></td></tr>
<tr><td>6</td><td>2012</td><td>0</td><td>926</td><td></td></tr>
<tr><td>7</td><td>2019</td><td>0</td><td>648</td><td></td></tr>
<tr><td>8</td><td>2018</td><td>0</td><td>605</td><td></td></tr>

<tr><td colspan="5"><b>Less Pim In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2017</td><td>0</td><td>569</td><td></td></tr>
<tr><td>2</td><td>2018</td><td>0</td><td>605</td><td></td></tr>
<tr><td>3</td><td>2019</td><td>0</td><td>648</td><td></td></tr>
<tr><td>4</td><td>2014</td><td>0</td><td>700</td><td></td></tr>
<tr><td>5</td><td>2015</td><td>0</td><td>734</td><td></td></tr>
<tr><td>6</td><td>2013</td><td>0</td><td>889</td><td></td></tr>
<tr><td>7</td><td>2012</td><td>0</td><td>926</td><td></td></tr>
<tr><td>8</td><td>2016</td><td>0</td><td>1002</td><td></td></tr>
<tr><td>9</td><td>2011</td><td>0</td><td>1079</td><td></td></tr>
<tr><td>10</td><td>2008</td><td>0</td><td>1103</td><td></td></tr>

<tr><td colspan="5"><b>Most Hits In 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2011</td><td>129</td><td>42</td><td></td></tr><tr><td>2</td><td>2011</td><td>868</td><td>38</td><td></td></tr><tr><td>3</td><td>2011</td><td>827</td><td>37</td><td></td></tr><tr><td>4</td><td>2017</td><td>618</td><td>37</td><td></td></tr><tr><td>5</td><td>2011</td><td>169</td><td>35</td><td></td></tr><tr><td>6</td><td>2011</td><td>444</td><td>34</td><td></td></tr><tr><td>7</td><td>2016</td><td>1197</td><td>34</td><td></td></tr><tr><td>8</td><td>2019</td><td>509</td><td>34</td><td><a href="OTHL-509.html">Game Direct Link</a></td></tr><tr><td>9</td><td>2011</td><td>1037</td><td>33</td><td></td></tr><tr><td>10</td><td>2019</td><td>152</td><td>33</td><td><a href="OTHL-152.html">Game Direct Link</a></td></tr>
<tr><td colspan="5"><b>Most Hits In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2011</td><td>0</td><td>2070</td><td></td></tr>
<tr><td>2</td><td>2016</td><td>0</td><td>1801</td><td></td></tr>
<tr><td>3</td><td>2019</td><td>0</td><td>1655</td><td></td></tr>
<tr><td>4</td><td>2017</td><td>0</td><td>1646</td><td></td></tr>
<tr><td>5</td><td>2015</td><td>0</td><td>1613</td><td></td></tr>
<tr><td>6</td><td>2012</td><td>0</td><td>1604</td><td></td></tr>
<tr><td>7</td><td>2018</td><td>0</td><td>1583</td><td></td></tr>
<tr><td>8</td><td>2013</td><td>0</td><td>1578</td><td></td></tr>
<tr><td>9</td><td>2014</td><td>0</td><td>1574</td><td></td></tr>
<tr><td>10</td><td>2009</td><td>0</td><td>1536</td><td></td></tr>

<tr><td colspan="5"><b>Less Hit In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2008</td><td>0</td><td>1472</td><td></td></tr>
<tr><td>2</td><td>2010</td><td>0</td><td>1498</td><td></td></tr>
<tr><td>3</td><td>2009</td><td>0</td><td>1536</td><td></td></tr>
<tr><td>4</td><td>2014</td><td>0</td><td>1574</td><td></td></tr>
<tr><td>5</td><td>2013</td><td>0</td><td>1578</td><td></td></tr>
<tr><td>6</td><td>2018</td><td>0</td><td>1583</td><td></td></tr>
<tr><td>7</td><td>2012</td><td>0</td><td>1604</td><td></td></tr>
<tr><td>8</td><td>2019</td><td>0</td><td>1655</td><td></td></tr>
<tr><td>9</td><td>2011</td><td>0</td><td>2070</td><td></td></tr>

<tr><td colspan="5"><b>Most Empty Net Goal In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2011</td><td>0</td><td>3</td><td></td></tr>
<tr><td>2</td><td>2017</td><td>0</td><td>3</td><td></td></tr>
<tr><td>3</td><td>2008</td><td>0</td><td>2</td><td></td></tr>
<tr><td>4</td><td>2009</td><td>0</td><td>2</td><td></td></tr>
<tr><td>5</td><td>2010</td><td>0</td><td>2</td><td></td></tr>
<tr><td>6</td><td>2018</td><td>0</td><td>2</td><td></td></tr>
<tr><td>7</td><td>2019</td><td>0</td><td>2</td><td></td></tr>
<tr><td>8</td><td>2012</td><td>0</td><td>1</td><td></td></tr>

<tr><td colspan="5"><b>Best PP In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2018</td><td>0</td><td>21.80%</td><td></td></tr>
<tr><td>2</td><td>2009</td><td>0</td><td>19.40%</td><td></td></tr>
<tr><td>3</td><td>2017</td><td>0</td><td>19.10%</td><td></td></tr>
<tr><td>4</td><td>2010</td><td>0</td><td>17.60%</td><td></td></tr>
<tr><td>5</td><td>2019</td><td>0</td><td>16.80%</td><td></td></tr>
<tr><td>6</td><td>2015</td><td>0</td><td>16.70%</td><td></td></tr>
<tr><td>7</td><td>2011</td><td>0</td><td>16.00%</td><td></td></tr>
<tr><td>8</td><td>2016</td><td>0</td><td>15.40%</td><td></td></tr>
<tr><td>9</td><td>2013</td><td>0</td><td>15.20%</td><td></td></tr>
<tr><td>10</td><td>2012</td><td>0</td><td>15.00%</td><td></td></tr>

<tr><td colspan="5"><b>Best PK In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2008</td><td>0</td><td>87.50%</td><td></td></tr>
<tr><td>2</td><td>2018</td><td>0</td><td>86.10%</td><td></td></tr>
<tr><td>3</td><td>2017</td><td>0</td><td>83.80%</td><td></td></tr>
<tr><td>4</td><td>2013</td><td>0</td><td>82.70%</td><td></td></tr>
<tr><td>5</td><td>2014</td><td>0</td><td>82.50%</td><td></td></tr>
<tr><td>6</td><td>2019</td><td>0</td><td>82.30%</td><td></td></tr>
<tr><td>7</td><td>2011</td><td>0</td><td>81.70%</td><td></td></tr>
<tr><td>8</td><td>2015</td><td>0</td><td>81.50%</td><td></td></tr>
<tr><td>9</td><td>2010</td><td>0</td><td>81.30%</td><td></td></tr>
<tr><td>10</td><td>2009</td><td>0</td><td>80.50%</td><td></td></tr>

<tr><td colspan="5"><b>Worse PP In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2008</td><td>0</td><td>13.80%</td><td></td></tr>
<tr><td>2</td><td>2012</td><td>0</td><td>15.00%</td><td></td></tr>
<tr><td>3</td><td>2014</td><td>0</td><td>15.00%</td><td></td></tr>
<tr><td>4</td><td>2013</td><td>0</td><td>15.20%</td><td></td></tr>
<tr><td>5</td><td>2016</td><td>0</td><td>15.40%</td><td></td></tr>
<tr><td>6</td><td>2011</td><td>0</td><td>16.00%</td><td></td></tr>
<tr><td>7</td><td>2019</td><td>0</td><td>16.80%</td><td></td></tr>
<tr><td>8</td><td>2010</td><td>0</td><td>17.60%</td><td></td></tr>
<tr><td>9</td><td>2009</td><td>0</td><td>19.40%</td><td></td></tr>

<tr><td colspan="5"><b>Worse PK In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2016</td><td>0</td><td>76.80%</td><td></td></tr>
<tr><td>2</td><td>2012</td><td>0</td><td>79.10%</td><td></td></tr>
<tr><td>3</td><td>2009</td><td>0</td><td>80.50%</td><td></td></tr>
<tr><td>4</td><td>2010</td><td>0</td><td>81.30%</td><td></td></tr>
<tr><td>5</td><td>2015</td><td>0</td><td>81.50%</td><td></td></tr>
<tr><td>6</td><td>2011</td><td>0</td><td>81.70%</td><td></td></tr>
<tr><td>7</td><td>2019</td><td>0</td><td>82.30%</td><td></td></tr>
<tr><td>8</td><td>2014</td><td>0</td><td>82.50%</td><td></td></tr>
<tr><td>9</td><td>2013</td><td>0</td><td>82.70%</td><td></td></tr>
<tr><td>10</td><td>2018</td><td>0</td><td>86.10%</td><td></td></tr>

<tr><td colspan="5"><b>Most Win In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2018</td><td>0</td><td>53</td><td></td></tr>
<tr><td>2</td><td>2019</td><td>0</td><td>52</td><td></td></tr>
<tr><td>3</td><td>2013</td><td>0</td><td>50</td><td></td></tr>
<tr><td>4</td><td>2010</td><td>0</td><td>47</td><td></td></tr>
<tr><td>5</td><td>2017</td><td>0</td><td>45</td><td></td></tr>
<tr><td>6</td><td>2011</td><td>0</td><td>42</td><td></td></tr>
<tr><td>7</td><td>2008</td><td>0</td><td>40</td><td></td></tr>
<tr><td>8</td><td>2012</td><td>0</td><td>39</td><td></td></tr>
<tr><td>9</td><td>2009</td><td>0</td><td>31</td><td></td></tr>

<tr><td colspan="5"><b>Less Win In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2016</td><td>0</td><td>23</td><td></td></tr>
<tr><td>2</td><td>2015</td><td>0</td><td>29</td><td></td></tr>
<tr><td>3</td><td>2009</td><td>0</td><td>31</td><td></td></tr>
<tr><td>4</td><td>2014</td><td>0</td><td>33</td><td></td></tr>
<tr><td>5</td><td>2012</td><td>0</td><td>39</td><td></td></tr>
<tr><td>6</td><td>2008</td><td>0</td><td>40</td><td></td></tr>
<tr><td>7</td><td>2011</td><td>0</td><td>42</td><td></td></tr>
<tr><td>8</td><td>2010</td><td>0</td><td>47</td><td></td></tr>

<tr><td colspan="5"><b>Most Lost In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2016</td><td>0</td><td>59</td><td></td></tr>
<tr><td>2</td><td>2015</td><td>0</td><td>53</td><td></td></tr>
<tr><td>3</td><td>2009</td><td>0</td><td>51</td><td></td></tr>
<tr><td>4</td><td>2014</td><td>0</td><td>49</td><td></td></tr>
<tr><td>5</td><td>2012</td><td>0</td><td>43</td><td></td></tr>
<tr><td>6</td><td>2011</td><td>0</td><td>40</td><td></td></tr>
<tr><td>7</td><td>2010</td><td>0</td><td>35</td><td></td></tr>
<tr><td>8</td><td>2013</td><td>0</td><td>32</td><td></td></tr>
<tr><td>9</td><td>2019</td><td>0</td><td>30</td><td></td></tr>
<tr><td>10</td><td>2018</td><td>0</td><td>29</td><td></td></tr>

<tr><td colspan="5"><b>Less Lost In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2008</td><td>0</td><td>23</td><td></td></tr>
<tr><td>2</td><td>2018</td><td>0</td><td>29</td><td></td></tr>
<tr><td>3</td><td>2019</td><td>0</td><td>30</td><td></td></tr>
<tr><td>4</td><td>2013</td><td>0</td><td>32</td><td></td></tr>
<tr><td>5</td><td>2010</td><td>0</td><td>35</td><td></td></tr>
<tr><td>6</td><td>2017</td><td>0</td><td>37</td><td></td></tr>
<tr><td>7</td><td>2011</td><td>0</td><td>40</td><td></td></tr>
<tr><td>8</td><td>2012</td><td>0</td><td>43</td><td></td></tr>
<tr><td>9</td><td>2009</td><td>0</td><td>51</td><td></td></tr>

<tr><td colspan="5"><b>Most Point In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2018</td><td>0</td><td>113</td><td></td></tr>
<tr><td>2</td><td>2013</td><td>0</td><td>109</td><td></td></tr>
<tr><td>3</td><td>2008</td><td>0</td><td>108</td><td></td></tr>
<tr><td>4</td><td>2019</td><td>0</td><td>108</td><td></td></tr>
<tr><td>5</td><td>2017</td><td>0</td><td>99</td><td></td></tr>
<tr><td>6</td><td>2010</td><td>0</td><td>96</td><td></td></tr>
<tr><td>7</td><td>2011</td><td>0</td><td>90</td><td></td></tr>
<tr><td>8</td><td>2012</td><td>0</td><td>83</td><td></td></tr>
<tr><td>9</td><td>2009</td><td>0</td><td>67</td><td></td></tr>

<tr><td colspan="5"><b>Less Points In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2016</td><td>0</td><td>54</td><td></td></tr>
<tr><td>2</td><td>2015</td><td>0</td><td>65</td><td></td></tr>
<tr><td>3</td><td>2009</td><td>0</td><td>67</td><td></td></tr>
<tr><td>4</td><td>2014</td><td>0</td><td>73</td><td></td></tr>
<tr><td>5</td><td>2012</td><td>0</td><td>83</td><td></td></tr>
<tr><td>6</td><td>2011</td><td>0</td><td>90</td><td></td></tr>
<tr><td>7</td><td>2010</td><td>0</td><td>96</td><td></td></tr>
<tr><td>8</td><td>2008</td><td>0</td><td>108</td><td></td></tr>

<tr><td colspan="5"><b>Most Win Home In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>0</td><td>0</td><td>32000</td><td></td></tr>
<tr><td>2</td><td>0</td><td>0</td><td>32000</td><td></td></tr>

<tr><td colspan="5"><b>Most Win Visitor In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>0</td><td>0</td><td>32000</td><td></td></tr>
<tr><td>2</td><td>0</td><td>0</td><td>32000</td><td></td></tr>

</table></div>
<h1 class="TeamRecordsPro_WPG"><a id="Jets">Jets</a></h1>
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
<br /><table class="STHSRecordTable">
<tr><td colspan="5"><b>Most Goals in 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2011</td><td>306</td><td>8</td><td></td></tr><tr><td>2</td><td>2012</td><td>514</td><td>8</td><td></td></tr><tr><td>3</td><td>2008</td><td>1092</td><td>7</td><td></td></tr><tr><td>4</td><td>2009</td><td>254</td><td>7</td><td></td></tr><tr><td>5</td><td>2009</td><td>978</td><td>7</td><td></td></tr><tr><td>6</td><td>2012</td><td>1163</td><td>7</td><td></td></tr><tr><td>7</td><td>2017</td><td>108</td><td>7</td><td></td></tr><tr><td>8</td><td>2018</td><td>389</td><td>7</td><td></td></tr><tr><td>9</td><td>2019</td><td>77</td><td>7</td><td><a href="OTHL-77.html">Game Direct Link</a></td></tr><tr><td>10</td><td>2008</td><td>32</td><td>6</td><td></td></tr>
<tr><td colspan="5"><b>Most Goals in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2008</td><td>0</td><td>287</td><td></td></tr>
<tr><td>2</td><td>2009</td><td>0</td><td>254</td><td></td></tr>
<tr><td>3</td><td>2012</td><td>0</td><td>228</td><td></td></tr>
<tr><td>4</td><td>2019</td><td>0</td><td>222</td><td></td></tr>
<tr><td>5</td><td>2011</td><td>0</td><td>221</td><td></td></tr>
<tr><td>6</td><td>2018</td><td>0</td><td>220</td><td></td></tr>
<tr><td>7</td><td>2013</td><td>0</td><td>218</td><td></td></tr>
<tr><td>8</td><td>2010</td><td>0</td><td>215</td><td></td></tr>

<tr><td colspan="5"><b>Less Goal in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2016</td><td>0</td><td>177</td><td></td></tr>
<tr><td>2</td><td>2017</td><td>0</td><td>190</td><td></td></tr>
<tr><td>3</td><td>2015</td><td>0</td><td>192</td><td></td></tr>
<tr><td>4</td><td>2014</td><td>0</td><td>201</td><td></td></tr>
<tr><td>5</td><td>2010</td><td>0</td><td>215</td><td></td></tr>
<tr><td>6</td><td>2013</td><td>0</td><td>218</td><td></td></tr>
<tr><td>7</td><td>2018</td><td>0</td><td>220</td><td></td></tr>
<tr><td>8</td><td>2011</td><td>0</td><td>221</td><td></td></tr>
<tr><td>9</td><td>2019</td><td>0</td><td>222</td><td></td></tr>
<tr><td>10</td><td>2012</td><td>0</td><td>228</td><td></td></tr>

<tr><td colspan="5"><b>Most Goals Against in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2014</td><td>0</td><td>271</td><td></td></tr>
<tr><td>2</td><td>2015</td><td>0</td><td>270</td><td></td></tr>
<tr><td>3</td><td>2016</td><td>0</td><td>265</td><td></td></tr>
<tr><td>4</td><td>2018</td><td>0</td><td>261</td><td></td></tr>
<tr><td>5</td><td>2010</td><td>0</td><td>248</td><td></td></tr>
<tr><td>6</td><td>2019</td><td>0</td><td>241</td><td></td></tr>
<tr><td>7</td><td>2009</td><td>0</td><td>238</td><td></td></tr>
<tr><td>8</td><td>2012</td><td>0</td><td>238</td><td></td></tr>
<tr><td>9</td><td>2013</td><td>0</td><td>229</td><td></td></tr>
<tr><td>10</td><td>2008</td><td>0</td><td>222</td><td></td></tr>

<tr><td colspan="5"><b>Less Goal Against in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2017</td><td>0</td><td>219</td><td></td></tr>
<tr><td>2</td><td>2008</td><td>0</td><td>222</td><td></td></tr>
<tr><td>3</td><td>2011</td><td>0</td><td>222</td><td></td></tr>
<tr><td>4</td><td>2013</td><td>0</td><td>229</td><td></td></tr>
<tr><td>5</td><td>2009</td><td>0</td><td>238</td><td></td></tr>
<tr><td>6</td><td>2012</td><td>0</td><td>238</td><td></td></tr>
<tr><td>7</td><td>2019</td><td>0</td><td>241</td><td></td></tr>
<tr><td>8</td><td>2010</td><td>0</td><td>248</td><td></td></tr>

<tr><td colspan="5"><b>Most Assists in 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2011</td><td>306</td><td>15</td><td></td></tr><tr><td>2</td><td>2009</td><td>254</td><td>14</td><td></td></tr><tr><td>3</td><td>2012</td><td>514</td><td>14</td><td></td></tr><tr><td>4</td><td>2012</td><td>1163</td><td>14</td><td></td></tr><tr><td>5</td><td>2008</td><td>1092</td><td>13</td><td></td></tr><tr><td>6</td><td>2009</td><td>978</td><td>13</td><td></td></tr><tr><td>7</td><td>2017</td><td>108</td><td>13</td><td></td></tr><tr><td>8</td><td>2016</td><td>373</td><td>12</td><td></td></tr><tr><td>9</td><td>2016</td><td>734</td><td>12</td><td></td></tr><tr><td>10</td><td>2017</td><td>1234</td><td>12</td><td></td></tr>
<tr><td colspan="5"><b>Most Assists in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2008</td><td>0</td><td>492</td><td></td></tr>
<tr><td>2</td><td>2009</td><td>0</td><td>446</td><td></td></tr>
<tr><td>3</td><td>2012</td><td>0</td><td>396</td><td></td></tr>
<tr><td>4</td><td>2013</td><td>0</td><td>391</td><td></td></tr>
<tr><td>5</td><td>2010</td><td>0</td><td>387</td><td></td></tr>
<tr><td>6</td><td>2019</td><td>0</td><td>385</td><td></td></tr>
<tr><td>7</td><td>2018</td><td>0</td><td>380</td><td></td></tr>
<tr><td>8</td><td>2011</td><td>0</td><td>343</td><td></td></tr>

<tr><td colspan="5"><b>Less Assist in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2016</td><td>0</td><td>317</td><td></td></tr>
<tr><td>2</td><td>2015</td><td>0</td><td>338</td><td></td></tr>
<tr><td>3</td><td>2017</td><td>0</td><td>338</td><td></td></tr>
<tr><td>4</td><td>2011</td><td>0</td><td>343</td><td></td></tr>
<tr><td>5</td><td>2014</td><td>0</td><td>343</td><td></td></tr>
<tr><td>6</td><td>2018</td><td>0</td><td>380</td><td></td></tr>
<tr><td>7</td><td>2019</td><td>0</td><td>385</td><td></td></tr>
<tr><td>8</td><td>2010</td><td>0</td><td>387</td><td></td></tr>
<tr><td>9</td><td>2013</td><td>0</td><td>391</td><td></td></tr>
<tr><td>10</td><td>2012</td><td>0</td><td>396</td><td></td></tr>

<tr><td colspan="5"><b>Most Game Points in 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2011</td><td>306</td><td>23</td><td></td></tr><tr><td>2</td><td>2012</td><td>514</td><td>22</td><td></td></tr><tr><td>3</td><td>2009</td><td>254</td><td>21</td><td></td></tr><tr><td>4</td><td>2012</td><td>1163</td><td>21</td><td></td></tr><tr><td>5</td><td>2008</td><td>1092</td><td>20</td><td></td></tr><tr><td>6</td><td>2009</td><td>978</td><td>20</td><td></td></tr><tr><td>7</td><td>2017</td><td>108</td><td>20</td><td></td></tr><tr><td>8</td><td>2018</td><td>389</td><td>19</td><td></td></tr><tr><td>9</td><td>2019</td><td>77</td><td>19</td><td><a href="OTHL-77.html">Game Direct Link</a></td></tr><tr><td>10</td><td>2016</td><td>373</td><td>18</td><td></td></tr>
<tr><td colspan="5"><b>Most Game Points in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>0</td><td>0</td><td>32000</td><td></td></tr>
<tr><td>2</td><td>0</td><td>0</td><td>32000</td><td></td></tr>

<tr><td colspan="5"><b>Less Game Point In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2016</td><td>0</td><td>494</td><td></td></tr>
<tr><td>2</td><td>2017</td><td>0</td><td>528</td><td></td></tr>
<tr><td>3</td><td>2015</td><td>0</td><td>530</td><td></td></tr>
<tr><td>4</td><td>2014</td><td>0</td><td>544</td><td></td></tr>
<tr><td>5</td><td>2011</td><td>0</td><td>564</td><td></td></tr>
<tr><td>6</td><td>2018</td><td>0</td><td>600</td><td></td></tr>
<tr><td>7</td><td>2010</td><td>0</td><td>602</td><td></td></tr>
<tr><td>8</td><td>2019</td><td>0</td><td>607</td><td></td></tr>
<tr><td>9</td><td>2013</td><td>0</td><td>609</td><td></td></tr>
<tr><td>10</td><td>2012</td><td>0</td><td>624</td><td></td></tr>

<tr><td colspan="5"><b>Most Shots In 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2008</td><td>1119</td><td>51</td><td></td></tr><tr><td>2</td><td>2017</td><td>284</td><td>51</td><td></td></tr><tr><td>3</td><td>2008</td><td>235</td><td>49</td><td></td></tr><tr><td>4</td><td>2018</td><td>52</td><td>49</td><td></td></tr><tr><td>5</td><td>2019</td><td>708</td><td>49</td><td><a href="OTHL-708.html">Game Direct Link</a></td></tr><tr><td>6</td><td>2008</td><td>28</td><td>47</td><td></td></tr><tr><td>7</td><td>2008</td><td>32</td><td>46</td><td></td></tr><tr><td>8</td><td>2008</td><td>450</td><td>46</td><td></td></tr><tr><td>9</td><td>2014</td><td>675</td><td>46</td><td></td></tr><tr><td>10</td><td>2019</td><td>534</td><td>46</td><td><a href="OTHL-534.html">Game Direct Link</a></td></tr>
<tr><td colspan="5"><b>Most Shots In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2008</td><td>0</td><td>2670</td><td></td></tr>
<tr><td>2</td><td>2018</td><td>0</td><td>2423</td><td></td></tr>
<tr><td>3</td><td>2019</td><td>0</td><td>2383</td><td></td></tr>
<tr><td>4</td><td>2011</td><td>0</td><td>2356</td><td></td></tr>
<tr><td>5</td><td>2017</td><td>0</td><td>2287</td><td></td></tr>
<tr><td>6</td><td>2009</td><td>0</td><td>2213</td><td></td></tr>
<tr><td>7</td><td>2012</td><td>0</td><td>2164</td><td></td></tr>
<tr><td>8</td><td>2010</td><td>0</td><td>2103</td><td></td></tr>

<tr><td colspan="5"><b>Less Shots In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2015</td><td>0</td><td>1921</td><td></td></tr>
<tr><td>2</td><td>2014</td><td>0</td><td>2013</td><td></td></tr>
<tr><td>3</td><td>2013</td><td>0</td><td>2062</td><td></td></tr>
<tr><td>4</td><td>2016</td><td>0</td><td>2095</td><td></td></tr>
<tr><td>5</td><td>2010</td><td>0</td><td>2103</td><td></td></tr>
<tr><td>6</td><td>2012</td><td>0</td><td>2164</td><td></td></tr>
<tr><td>7</td><td>2009</td><td>0</td><td>2213</td><td></td></tr>
<tr><td>8</td><td>2011</td><td>0</td><td>2356</td><td></td></tr>
<tr><td>9</td><td>2019</td><td>0</td><td>2383</td><td></td></tr>
<tr><td>10</td><td>2018</td><td>0</td><td>2423</td><td></td></tr>

<tr><td colspan="5"><b>Most Shots Blocked In 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2019</td><td>128</td><td>24</td><td><a href="OTHL-128.html">Game Direct Link</a></td></tr><tr><td>2</td><td>2011</td><td>1009</td><td>22</td><td></td></tr><tr><td>3</td><td>2015</td><td>239</td><td>22</td><td></td></tr><tr><td>4</td><td>2014</td><td>652</td><td>21</td><td></td></tr><tr><td>5</td><td>2011</td><td>671</td><td>20</td><td></td></tr><tr><td>6</td><td>2019</td><td>660</td><td>20</td><td><a href="OTHL-660.html">Game Direct Link</a></td></tr><tr><td>7</td><td>2014</td><td>103</td><td>19</td><td></td></tr><tr><td>8</td><td>2015</td><td>751</td><td>19</td><td></td></tr><tr><td>9</td><td>2016</td><td>25</td><td>19</td><td></td></tr><tr><td>10</td><td>2017</td><td>108</td><td>19</td><td></td></tr>
<tr><td colspan="5"><b>Most Shots Blocked In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>0</td><td>0</td><td>32000</td><td></td></tr>
<tr><td>2</td><td>0</td><td>0</td><td>32000</td><td></td></tr>

<tr><td colspan="5"><b>Less Shots Block In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2013</td><td>0</td><td>609</td><td></td></tr>
<tr><td>2</td><td>2008</td><td>0</td><td>636</td><td></td></tr>
<tr><td>3</td><td>2012</td><td>0</td><td>650</td><td></td></tr>
<tr><td>4</td><td>2010</td><td>0</td><td>658</td><td></td></tr>
<tr><td>5</td><td>2014</td><td>0</td><td>684</td><td></td></tr>
<tr><td>6</td><td>2009</td><td>0</td><td>696</td><td></td></tr>
<tr><td>7</td><td>2018</td><td>0</td><td>748</td><td></td></tr>
<tr><td>8</td><td>2019</td><td>0</td><td>802</td><td></td></tr>
<tr><td>9</td><td>2011</td><td>0</td><td>820</td><td></td></tr>

<tr><td colspan="5"><b>Most Shots Against In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2017</td><td>0</td><td>2760</td><td></td></tr>
<tr><td>2</td><td>2019</td><td>0</td><td>2674</td><td></td></tr>
<tr><td>3</td><td>2018</td><td>0</td><td>2602</td><td></td></tr>
<tr><td>4</td><td>2015</td><td>0</td><td>2562</td><td></td></tr>
<tr><td>5</td><td>2016</td><td>0</td><td>2397</td><td></td></tr>
<tr><td>6</td><td>2011</td><td>0</td><td>2372</td><td></td></tr>
<tr><td>7</td><td>2014</td><td>0</td><td>2307</td><td></td></tr>
<tr><td>8</td><td>2010</td><td>0</td><td>2295</td><td></td></tr>
<tr><td>9</td><td>2013</td><td>0</td><td>2292</td><td></td></tr>
<tr><td>10</td><td>2009</td><td>0</td><td>2250</td><td></td></tr>

<tr><td colspan="5"><b>Less Shots Against In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2008</td><td>0</td><td>2202</td><td></td></tr>
<tr><td>2</td><td>2009</td><td>0</td><td>2250</td><td></td></tr>
<tr><td>3</td><td>2012</td><td>0</td><td>2250</td><td></td></tr>
<tr><td>4</td><td>2013</td><td>0</td><td>2292</td><td></td></tr>
<tr><td>5</td><td>2010</td><td>0</td><td>2295</td><td></td></tr>
<tr><td>6</td><td>2011</td><td>0</td><td>2372</td><td></td></tr>

<tr><td colspan="5"><b>Most Pim In 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2009</td><td>862</td><td>61</td><td></td></tr><tr><td>2</td><td>2011</td><td>306</td><td>49</td><td></td></tr><tr><td>3</td><td>2014</td><td>1059</td><td>48</td><td></td></tr><tr><td>4</td><td>2009</td><td>319</td><td>46</td><td></td></tr><tr><td>5</td><td>2008</td><td>469</td><td>45</td><td></td></tr><tr><td>6</td><td>2011</td><td>158</td><td>45</td><td></td></tr><tr><td>7</td><td>2009</td><td>1061</td><td>44</td><td></td></tr><tr><td>8</td><td>2008</td><td>324</td><td>43</td><td></td></tr><tr><td>9</td><td>2012</td><td>608</td><td>42</td><td></td></tr><tr><td>10</td><td>2011</td><td>198</td><td>41</td><td></td></tr>
<tr><td colspan="5"><b>Most Pim In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2009</td><td>0</td><td>1429</td><td></td></tr>
<tr><td>2</td><td>2008</td><td>0</td><td>1374</td><td></td></tr>
<tr><td>3</td><td>2010</td><td>0</td><td>1230</td><td></td></tr>
<tr><td>4</td><td>2011</td><td>0</td><td>1210</td><td></td></tr>
<tr><td>5</td><td>2016</td><td>0</td><td>958</td><td></td></tr>
<tr><td>6</td><td>2012</td><td>0</td><td>913</td><td></td></tr>
<tr><td>7</td><td>2018</td><td>0</td><td>696</td><td></td></tr>
<tr><td>8</td><td>2019</td><td>0</td><td>653</td><td></td></tr>

<tr><td colspan="5"><b>Less Pim In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2013</td><td>0</td><td>646</td><td></td></tr>
<tr><td>2</td><td>2017</td><td>0</td><td>651</td><td></td></tr>
<tr><td>3</td><td>2019</td><td>0</td><td>653</td><td></td></tr>
<tr><td>4</td><td>2018</td><td>0</td><td>696</td><td></td></tr>
<tr><td>5</td><td>2014</td><td>0</td><td>716</td><td></td></tr>
<tr><td>6</td><td>2015</td><td>0</td><td>801</td><td></td></tr>
<tr><td>7</td><td>2012</td><td>0</td><td>913</td><td></td></tr>
<tr><td>8</td><td>2016</td><td>0</td><td>958</td><td></td></tr>
<tr><td>9</td><td>2011</td><td>0</td><td>1210</td><td></td></tr>
<tr><td>10</td><td>2010</td><td>0</td><td>1230</td><td></td></tr>

<tr><td colspan="5"><b>Most Hits In 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2019</td><td>467</td><td>42</td><td><a href="OTHL-467.html">Game Direct Link</a></td></tr><tr><td>2</td><td>2010</td><td>84</td><td>39</td><td></td></tr><tr><td>3</td><td>2010</td><td>1106</td><td>36</td><td></td></tr><tr><td>4</td><td>2017</td><td>1248</td><td>36</td><td></td></tr><tr><td>5</td><td>2008</td><td>1178</td><td>35</td><td></td></tr><tr><td>6</td><td>2011</td><td>782</td><td>35</td><td></td></tr><tr><td>7</td><td>2012</td><td>556</td><td>35</td><td></td></tr><tr><td>8</td><td>2016</td><td>609</td><td>35</td><td></td></tr><tr><td>9</td><td>2017</td><td>180</td><td>35</td><td></td></tr><tr><td>10</td><td>2017</td><td>911</td><td>35</td><td></td></tr>
<tr><td colspan="5"><b>Most Hits In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2011</td><td>0</td><td>1824</td><td></td></tr>
<tr><td>2</td><td>2016</td><td>0</td><td>1795</td><td></td></tr>
<tr><td>3</td><td>2017</td><td>0</td><td>1754</td><td></td></tr>
<tr><td>4</td><td>2008</td><td>0</td><td>1715</td><td></td></tr>
<tr><td>5</td><td>2012</td><td>0</td><td>1693</td><td></td></tr>
<tr><td>6</td><td>2019</td><td>0</td><td>1692</td><td></td></tr>
<tr><td>7</td><td>2018</td><td>0</td><td>1681</td><td></td></tr>
<tr><td>8</td><td>2015</td><td>0</td><td>1670</td><td></td></tr>
<tr><td>9</td><td>2014</td><td>0</td><td>1609</td><td></td></tr>
<tr><td>10</td><td>2010</td><td>0</td><td>1582</td><td></td></tr>

<tr><td colspan="5"><b>Less Hit In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2013</td><td>0</td><td>1448</td><td></td></tr>
<tr><td>2</td><td>2009</td><td>0</td><td>1470</td><td></td></tr>
<tr><td>3</td><td>2010</td><td>0</td><td>1582</td><td></td></tr>
<tr><td>4</td><td>2014</td><td>0</td><td>1609</td><td></td></tr>
<tr><td>5</td><td>2015</td><td>0</td><td>1670</td><td></td></tr>
<tr><td>6</td><td>2018</td><td>0</td><td>1681</td><td></td></tr>
<tr><td>7</td><td>2019</td><td>0</td><td>1692</td><td></td></tr>
<tr><td>8</td><td>2012</td><td>0</td><td>1693</td><td></td></tr>
<tr><td>9</td><td>2008</td><td>0</td><td>1715</td><td></td></tr>
<tr><td>10</td><td>2011</td><td>0</td><td>1824</td><td></td></tr>

<tr><td colspan="5"><b>Most Empty Net Goal In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2008</td><td>0</td><td>4</td><td></td></tr>
<tr><td>2</td><td>2017</td><td>0</td><td>4</td><td></td></tr>
<tr><td>3</td><td>2019</td><td>0</td><td>4</td><td></td></tr>
<tr><td>4</td><td>2012</td><td>0</td><td>3</td><td></td></tr>
<tr><td>5</td><td>2014</td><td>0</td><td>3</td><td></td></tr>
<tr><td>6</td><td>2013</td><td>0</td><td>2</td><td></td></tr>
<tr><td>7</td><td>2015</td><td>0</td><td>2</td><td></td></tr>
<tr><td>8</td><td>2018</td><td>0</td><td>1</td><td></td></tr>

<tr><td colspan="5"><b>Best PP In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2009</td><td>0</td><td>18.90%</td><td></td></tr>
<tr><td>2</td><td>2019</td><td>0</td><td>18.80%</td><td></td></tr>
<tr><td>3</td><td>2011</td><td>0</td><td>18.60%</td><td></td></tr>
<tr><td>4</td><td>2018</td><td>0</td><td>18.20%</td><td></td></tr>
<tr><td>5</td><td>2015</td><td>0</td><td>16.90%</td><td></td></tr>
<tr><td>6</td><td>2013</td><td>0</td><td>16.80%</td><td></td></tr>
<tr><td>7</td><td>2010</td><td>0</td><td>16.40%</td><td></td></tr>
<tr><td>8</td><td>2012</td><td>0</td><td>14.70%</td><td></td></tr>
<tr><td>9</td><td>2008</td><td>0</td><td>13.90%</td><td></td></tr>

<tr><td colspan="5"><b>Best PK In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2017</td><td>0</td><td>87.40%</td><td></td></tr>
<tr><td>2</td><td>2008</td><td>0</td><td>86.30%</td><td></td></tr>
<tr><td>3</td><td>2010</td><td>0</td><td>85.60%</td><td></td></tr>
<tr><td>4</td><td>2009</td><td>0</td><td>83.30%</td><td></td></tr>
<tr><td>5</td><td>2014</td><td>0</td><td>83.10%</td><td></td></tr>
<tr><td>6</td><td>2013</td><td>0</td><td>82.00%</td><td></td></tr>
<tr><td>7</td><td>2018</td><td>0</td><td>81.70%</td><td></td></tr>
<tr><td>8</td><td>2019</td><td>0</td><td>79.80%</td><td></td></tr>
<tr><td>9</td><td>2012</td><td>0</td><td>79.50%</td><td></td></tr>
<tr><td>10</td><td>2011</td><td>0</td><td>77.30%</td><td></td></tr>

<tr><td colspan="5"><b>Worse PP In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2016</td><td>0</td><td>12.50%</td><td></td></tr>
<tr><td>2</td><td>2014</td><td>0</td><td>13.80%</td><td></td></tr>
<tr><td>3</td><td>2008</td><td>0</td><td>13.90%</td><td></td></tr>
<tr><td>4</td><td>2012</td><td>0</td><td>14.70%</td><td></td></tr>
<tr><td>5</td><td>2017</td><td>0</td><td>15.00%</td><td></td></tr>
<tr><td>6</td><td>2010</td><td>0</td><td>16.40%</td><td></td></tr>
<tr><td>7</td><td>2013</td><td>0</td><td>16.80%</td><td></td></tr>
<tr><td>8</td><td>2018</td><td>0</td><td>18.20%</td><td></td></tr>
<tr><td>9</td><td>2011</td><td>0</td><td>18.60%</td><td></td></tr>
<tr><td>10</td><td>2019</td><td>0</td><td>18.80%</td><td></td></tr>

<tr><td colspan="5"><b>Worse PK In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2011</td><td>0</td><td>77.30%</td><td></td></tr>
<tr><td>2</td><td>2012</td><td>0</td><td>79.50%</td><td></td></tr>
<tr><td>3</td><td>2016</td><td>0</td><td>79.50%</td><td></td></tr>
<tr><td>4</td><td>2019</td><td>0</td><td>79.80%</td><td></td></tr>
<tr><td>5</td><td>2015</td><td>0</td><td>81.70%</td><td></td></tr>
<tr><td>6</td><td>2018</td><td>0</td><td>81.70%</td><td></td></tr>
<tr><td>7</td><td>2013</td><td>0</td><td>82.00%</td><td></td></tr>
<tr><td>8</td><td>2014</td><td>0</td><td>83.10%</td><td></td></tr>
<tr><td>9</td><td>2009</td><td>0</td><td>83.30%</td><td></td></tr>
<tr><td>10</td><td>2010</td><td>0</td><td>85.60%</td><td></td></tr>

<tr><td colspan="5"><b>Most Win In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2008</td><td>0</td><td>50</td><td></td></tr>
<tr><td>2</td><td>2011</td><td>0</td><td>45</td><td></td></tr>
<tr><td>3</td><td>2009</td><td>0</td><td>42</td><td></td></tr>
<tr><td>4</td><td>2019</td><td>0</td><td>38</td><td></td></tr>
<tr><td>5</td><td>2012</td><td>0</td><td>37</td><td></td></tr>
<tr><td>6</td><td>2013</td><td>0</td><td>35</td><td></td></tr>
<tr><td>7</td><td>2018</td><td>0</td><td>35</td><td></td></tr>
<tr><td>8</td><td>2010</td><td>0</td><td>32</td><td></td></tr>

<tr><td colspan="5"><b>Less Win In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2016</td><td>0</td><td>25</td><td></td></tr>
<tr><td>2</td><td>2014</td><td>0</td><td>27</td><td></td></tr>
<tr><td>3</td><td>2015</td><td>0</td><td>27</td><td></td></tr>
<tr><td>4</td><td>2017</td><td>0</td><td>31</td><td></td></tr>
<tr><td>5</td><td>2010</td><td>0</td><td>32</td><td></td></tr>
<tr><td>6</td><td>2013</td><td>0</td><td>35</td><td></td></tr>
<tr><td>7</td><td>2018</td><td>0</td><td>35</td><td></td></tr>
<tr><td>8</td><td>2012</td><td>0</td><td>37</td><td></td></tr>
<tr><td>9</td><td>2019</td><td>0</td><td>38</td><td></td></tr>
<tr><td>10</td><td>2009</td><td>0</td><td>42</td><td></td></tr>

<tr><td colspan="5"><b>Most Lost In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2016</td><td>0</td><td>57</td><td></td></tr>
<tr><td>2</td><td>2014</td><td>0</td><td>55</td><td></td></tr>
<tr><td>3</td><td>2015</td><td>0</td><td>55</td><td></td></tr>
<tr><td>4</td><td>2017</td><td>0</td><td>51</td><td></td></tr>
<tr><td>5</td><td>2010</td><td>0</td><td>50</td><td></td></tr>
<tr><td>6</td><td>2013</td><td>0</td><td>47</td><td></td></tr>
<tr><td>7</td><td>2018</td><td>0</td><td>47</td><td></td></tr>
<tr><td>8</td><td>2012</td><td>0</td><td>45</td><td></td></tr>
<tr><td>9</td><td>2019</td><td>0</td><td>44</td><td></td></tr>
<tr><td>10</td><td>2009</td><td>0</td><td>40</td><td></td></tr>

<tr><td colspan="5"><b>Less Lost In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2008</td><td>0</td><td>23</td><td></td></tr>
<tr><td>2</td><td>2011</td><td>0</td><td>37</td><td></td></tr>
<tr><td>3</td><td>2009</td><td>0</td><td>40</td><td></td></tr>
<tr><td>4</td><td>2019</td><td>0</td><td>44</td><td></td></tr>
<tr><td>5</td><td>2012</td><td>0</td><td>45</td><td></td></tr>
<tr><td>6</td><td>2013</td><td>0</td><td>47</td><td></td></tr>
<tr><td>7</td><td>2018</td><td>0</td><td>47</td><td></td></tr>
<tr><td>8</td><td>2010</td><td>0</td><td>50</td><td></td></tr>

<tr><td colspan="5"><b>Most Point In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2008</td><td>0</td><td>115</td><td></td></tr>
<tr><td>2</td><td>2011</td><td>0</td><td>100</td><td></td></tr>
<tr><td>3</td><td>2009</td><td>0</td><td>90</td><td></td></tr>
<tr><td>4</td><td>2012</td><td>0</td><td>81</td><td></td></tr>
<tr><td>5</td><td>2019</td><td>0</td><td>81</td><td></td></tr>
<tr><td>6</td><td>2013</td><td>0</td><td>80</td><td></td></tr>
<tr><td>7</td><td>2018</td><td>0</td><td>78</td><td></td></tr>
<tr><td>8</td><td>2010</td><td>0</td><td>70</td><td></td></tr>

<tr><td colspan="5"><b>Less Points In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2016</td><td>0</td><td>53</td><td></td></tr>
<tr><td>2</td><td>2015</td><td>0</td><td>60</td><td></td></tr>
<tr><td>3</td><td>2014</td><td>0</td><td>68</td><td></td></tr>
<tr><td>4</td><td>2010</td><td>0</td><td>70</td><td></td></tr>
<tr><td>5</td><td>2017</td><td>0</td><td>78</td><td></td></tr>
<tr><td>6</td><td>2018</td><td>0</td><td>78</td><td></td></tr>
<tr><td>7</td><td>2013</td><td>0</td><td>80</td><td></td></tr>
<tr><td>8</td><td>2012</td><td>0</td><td>81</td><td></td></tr>
<tr><td>9</td><td>2019</td><td>0</td><td>81</td><td></td></tr>
<tr><td>10</td><td>2009</td><td>0</td><td>90</td><td></td></tr>

<tr><td colspan="5"><b>Most Win Home In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>0</td><td>0</td><td>32000</td><td></td></tr>
<tr><td>2</td><td>0</td><td>0</td><td>32000</td><td></td></tr>

<tr><td colspan="5"><b>Most Win Visitor In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>0</td><td>0</td><td>32000</td><td></td></tr>
<tr><td>2</td><td>0</td><td>0</td><td>32000</td><td></td></tr>

</table></div>
<h1 class="TeamRecordsPro_LAK"><a id="Kings">Kings</a></h1>
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
<br /><table class="STHSRecordTable">
<tr><td colspan="5"><b>Most Goals in 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2008</td><td>37</td><td>8</td><td></td></tr><tr><td>2</td><td>2009</td><td>1131</td><td>8</td><td></td></tr><tr><td>3</td><td>2019</td><td>621</td><td>8</td><td><a href="OTHL-621.html">Game Direct Link</a></td></tr><tr><td>4</td><td>2008</td><td>1081</td><td>7</td><td></td></tr><tr><td>5</td><td>2008</td><td>1114</td><td>7</td><td></td></tr><tr><td>6</td><td>2009</td><td>23</td><td>7</td><td></td></tr><tr><td>7</td><td>2012</td><td>820</td><td>7</td><td></td></tr><tr><td>8</td><td>2013</td><td>448</td><td>7</td><td></td></tr><tr><td>9</td><td>2013</td><td>582</td><td>7</td><td></td></tr><tr><td>10</td><td>2015</td><td>569</td><td>7</td><td></td></tr>
<tr><td colspan="5"><b>Most Goals in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2009</td><td>0</td><td>285</td><td></td></tr>
<tr><td>2</td><td>2008</td><td>0</td><td>254</td><td></td></tr>
<tr><td>3</td><td>2018</td><td>0</td><td>249</td><td></td></tr>
<tr><td>4</td><td>2019</td><td>0</td><td>241</td><td></td></tr>
<tr><td>5</td><td>2017</td><td>0</td><td>237</td><td></td></tr>
<tr><td>6</td><td>2016</td><td>0</td><td>233</td><td></td></tr>
<tr><td>7</td><td>2011</td><td>0</td><td>214</td><td></td></tr>
<tr><td>8</td><td>2010</td><td>0</td><td>210</td><td></td></tr>
<tr><td>9</td><td>2015</td><td>0</td><td>195</td><td></td></tr>
<tr><td>10</td><td>2012</td><td>0</td><td>177</td><td></td></tr>

<tr><td colspan="5"><b>Less Goal in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2013</td><td>0</td><td>152</td><td></td></tr>
<tr><td>2</td><td>2014</td><td>0</td><td>168</td><td></td></tr>
<tr><td>3</td><td>2012</td><td>0</td><td>177</td><td></td></tr>
<tr><td>4</td><td>2015</td><td>0</td><td>195</td><td></td></tr>
<tr><td>5</td><td>2010</td><td>0</td><td>210</td><td></td></tr>
<tr><td>6</td><td>2011</td><td>0</td><td>214</td><td></td></tr>
<tr><td>7</td><td>2019</td><td>0</td><td>241</td><td></td></tr>
<tr><td>8</td><td>2018</td><td>0</td><td>249</td><td></td></tr>
<tr><td>9</td><td>2008</td><td>0</td><td>254</td><td></td></tr>
<tr><td>10</td><td>2009</td><td>0</td><td>285</td><td></td></tr>

<tr><td colspan="5"><b>Most Goals Against in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2010</td><td>0</td><td>264</td><td></td></tr>
<tr><td>2</td><td>2014</td><td>0</td><td>262</td><td></td></tr>
<tr><td>3</td><td>2016</td><td>0</td><td>258</td><td></td></tr>
<tr><td>4</td><td>2013</td><td>0</td><td>255</td><td></td></tr>
<tr><td>5</td><td>2012</td><td>0</td><td>253</td><td></td></tr>
<tr><td>6</td><td>2008</td><td>0</td><td>245</td><td></td></tr>
<tr><td>7</td><td>2009</td><td>0</td><td>245</td><td></td></tr>
<tr><td>8</td><td>2019</td><td>0</td><td>231</td><td></td></tr>
<tr><td>9</td><td>2011</td><td>0</td><td>229</td><td></td></tr>
<tr><td>10</td><td>2018</td><td>0</td><td>206</td><td></td></tr>

<tr><td colspan="5"><b>Less Goal Against in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2018</td><td>0</td><td>206</td><td></td></tr>
<tr><td>2</td><td>2017</td><td>0</td><td>218</td><td></td></tr>
<tr><td>3</td><td>2015</td><td>0</td><td>224</td><td></td></tr>
<tr><td>4</td><td>2011</td><td>0</td><td>229</td><td></td></tr>
<tr><td>5</td><td>2019</td><td>0</td><td>231</td><td></td></tr>
<tr><td>6</td><td>2008</td><td>0</td><td>245</td><td></td></tr>
<tr><td>7</td><td>2009</td><td>0</td><td>245</td><td></td></tr>
<tr><td>8</td><td>2012</td><td>0</td><td>253</td><td></td></tr>
<tr><td>9</td><td>2013</td><td>0</td><td>255</td><td></td></tr>
<tr><td>10</td><td>2010</td><td>0</td><td>264</td><td></td></tr>

<tr><td colspan="5"><b>Most Assists in 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2008</td><td>37</td><td>15</td><td></td></tr><tr><td>2</td><td>2009</td><td>23</td><td>14</td><td></td></tr><tr><td>3</td><td>2009</td><td>1131</td><td>14</td><td></td></tr><tr><td>4</td><td>2015</td><td>569</td><td>14</td><td></td></tr><tr><td>5</td><td>2008</td><td>1081</td><td>13</td><td></td></tr><tr><td>6</td><td>2008</td><td>1114</td><td>13</td><td></td></tr><tr><td>7</td><td>2012</td><td>820</td><td>13</td><td></td></tr><tr><td>8</td><td>2013</td><td>448</td><td>13</td><td></td></tr><tr><td>9</td><td>2019</td><td>621</td><td>13</td><td><a href="OTHL-621.html">Game Direct Link</a></td></tr><tr><td>10</td><td>2015</td><td>367</td><td>12</td><td></td></tr>
<tr><td colspan="5"><b>Most Assists in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2009</td><td>0</td><td>505</td><td></td></tr>
<tr><td>2</td><td>2008</td><td>0</td><td>448</td><td></td></tr>
<tr><td>3</td><td>2018</td><td>0</td><td>439</td><td></td></tr>
<tr><td>4</td><td>2017</td><td>0</td><td>421</td><td></td></tr>
<tr><td>5</td><td>2016</td><td>0</td><td>414</td><td></td></tr>
<tr><td>6</td><td>2019</td><td>0</td><td>406</td><td></td></tr>
<tr><td>7</td><td>2010</td><td>0</td><td>377</td><td></td></tr>
<tr><td>8</td><td>2015</td><td>0</td><td>336</td><td></td></tr>
<tr><td>9</td><td>2011</td><td>0</td><td>330</td><td></td></tr>
<tr><td>10</td><td>2012</td><td>0</td><td>314</td><td></td></tr>

<tr><td colspan="5"><b>Less Assist in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2013</td><td>0</td><td>258</td><td></td></tr>
<tr><td>2</td><td>2014</td><td>0</td><td>294</td><td></td></tr>
<tr><td>3</td><td>2012</td><td>0</td><td>314</td><td></td></tr>
<tr><td>4</td><td>2011</td><td>0</td><td>330</td><td></td></tr>
<tr><td>5</td><td>2015</td><td>0</td><td>336</td><td></td></tr>
<tr><td>6</td><td>2010</td><td>0</td><td>377</td><td></td></tr>
<tr><td>7</td><td>2019</td><td>0</td><td>406</td><td></td></tr>
<tr><td>8</td><td>2018</td><td>0</td><td>439</td><td></td></tr>
<tr><td>9</td><td>2008</td><td>0</td><td>448</td><td></td></tr>
<tr><td>10</td><td>2009</td><td>0</td><td>505</td><td></td></tr>

<tr><td colspan="5"><b>Most Game Points in 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2008</td><td>37</td><td>23</td><td></td></tr><tr><td>2</td><td>2009</td><td>1131</td><td>22</td><td></td></tr><tr><td>3</td><td>2009</td><td>23</td><td>21</td><td></td></tr><tr><td>4</td><td>2015</td><td>569</td><td>21</td><td></td></tr><tr><td>5</td><td>2019</td><td>621</td><td>21</td><td><a href="OTHL-621.html">Game Direct Link</a></td></tr><tr><td>6</td><td>2008</td><td>1081</td><td>20</td><td></td></tr><tr><td>7</td><td>2008</td><td>1114</td><td>20</td><td></td></tr><tr><td>8</td><td>2012</td><td>820</td><td>20</td><td></td></tr><tr><td>9</td><td>2013</td><td>448</td><td>20</td><td></td></tr><tr><td>10</td><td>2016</td><td>457</td><td>19</td><td></td></tr>
<tr><td colspan="5"><b>Most Game Points in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>0</td><td>0</td><td>32000</td><td></td></tr>
<tr><td>2</td><td>0</td><td>0</td><td>32000</td><td></td></tr>

<tr><td colspan="5"><b>Less Game Point In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2013</td><td>0</td><td>410</td><td></td></tr>
<tr><td>2</td><td>2014</td><td>0</td><td>462</td><td></td></tr>
<tr><td>3</td><td>2012</td><td>0</td><td>491</td><td></td></tr>
<tr><td>4</td><td>2015</td><td>0</td><td>531</td><td></td></tr>
<tr><td>5</td><td>2011</td><td>0</td><td>544</td><td></td></tr>
<tr><td>6</td><td>2010</td><td>0</td><td>587</td><td></td></tr>
<tr><td>7</td><td>2019</td><td>0</td><td>647</td><td></td></tr>
<tr><td>8</td><td>2018</td><td>0</td><td>688</td><td></td></tr>
<tr><td>9</td><td>2008</td><td>0</td><td>702</td><td></td></tr>
<tr><td>10</td><td>2009</td><td>0</td><td>790</td><td></td></tr>

<tr><td colspan="5"><b>Most Shots In 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2008</td><td>37</td><td>57</td><td></td></tr><tr><td>2</td><td>2018</td><td>67</td><td>56</td><td></td></tr><tr><td>3</td><td>2018</td><td>987</td><td>56</td><td></td></tr><tr><td>4</td><td>2019</td><td>621</td><td>56</td><td><a href="OTHL-621.html">Game Direct Link</a></td></tr><tr><td>5</td><td>2017</td><td>12</td><td>54</td><td></td></tr><tr><td>6</td><td>2017</td><td>976</td><td>54</td><td></td></tr><tr><td>7</td><td>2018</td><td>287</td><td>52</td><td></td></tr><tr><td>8</td><td>2018</td><td>1086</td><td>50</td><td></td></tr><tr><td>9</td><td>2017</td><td>1251</td><td>49</td><td></td></tr><tr><td>10</td><td>2018</td><td>461</td><td>49</td><td></td></tr>
<tr><td colspan="5"><b>Most Shots In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2019</td><td>0</td><td>2833</td><td></td></tr>
<tr><td>2</td><td>2018</td><td>0</td><td>2707</td><td></td></tr>
<tr><td>3</td><td>2017</td><td>0</td><td>2667</td><td></td></tr>
<tr><td>4</td><td>2011</td><td>0</td><td>2401</td><td></td></tr>
<tr><td>5</td><td>2009</td><td>0</td><td>2267</td><td></td></tr>
<tr><td>6</td><td>2008</td><td>0</td><td>2187</td><td></td></tr>
<tr><td>7</td><td>2016</td><td>0</td><td>2139</td><td></td></tr>
<tr><td>8</td><td>2012</td><td>0</td><td>1959</td><td></td></tr>
<tr><td>9</td><td>2010</td><td>0</td><td>1891</td><td></td></tr>

<tr><td colspan="5"><b>Less Shots In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2014</td><td>0</td><td>1761</td><td></td></tr>
<tr><td>2</td><td>2015</td><td>0</td><td>1804</td><td></td></tr>
<tr><td>3</td><td>2013</td><td>0</td><td>1808</td><td></td></tr>
<tr><td>4</td><td>2010</td><td>0</td><td>1891</td><td></td></tr>
<tr><td>5</td><td>2012</td><td>0</td><td>1959</td><td></td></tr>
<tr><td>6</td><td>2008</td><td>0</td><td>2187</td><td></td></tr>
<tr><td>7</td><td>2009</td><td>0</td><td>2267</td><td></td></tr>
<tr><td>8</td><td>2011</td><td>0</td><td>2401</td><td></td></tr>

<tr><td colspan="5"><b>Most Shots Blocked In 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2019</td><td>590</td><td>24</td><td><a href="OTHL-590.html">Game Direct Link</a></td></tr><tr><td>2</td><td>2014</td><td>330</td><td>21</td><td></td></tr><tr><td>3</td><td>2008</td><td>964</td><td>20</td><td></td></tr><tr><td>4</td><td>2011</td><td>193</td><td>20</td><td></td></tr><tr><td>5</td><td>2017</td><td>211</td><td>20</td><td></td></tr><tr><td>6</td><td>2008</td><td>408</td><td>19</td><td></td></tr><tr><td>7</td><td>2013</td><td>200</td><td>19</td><td></td></tr><tr><td>8</td><td>2014</td><td>304</td><td>19</td><td></td></tr><tr><td>9</td><td>2009</td><td>1140</td><td>18</td><td></td></tr><tr><td>10</td><td>2010</td><td>242</td><td>18</td><td></td></tr>
<tr><td colspan="5"><b>Most Shots Blocked In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>0</td><td>0</td><td>32000</td><td></td></tr>
<tr><td>2</td><td>0</td><td>0</td><td>32000</td><td></td></tr>

<tr><td colspan="5"><b>Less Shots Block In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2016</td><td>0</td><td>630</td><td></td></tr>
<tr><td>2</td><td>2008</td><td>0</td><td>633</td><td></td></tr>
<tr><td>3</td><td>2009</td><td>0</td><td>635</td><td></td></tr>
<tr><td>4</td><td>2010</td><td>0</td><td>678</td><td></td></tr>
<tr><td>5</td><td>2013</td><td>0</td><td>682</td><td></td></tr>
<tr><td>6</td><td>2015</td><td>0</td><td>687</td><td></td></tr>
<tr><td>7</td><td>2018</td><td>0</td><td>710</td><td></td></tr>
<tr><td>8</td><td>2014</td><td>0</td><td>711</td><td></td></tr>
<tr><td>9</td><td>2012</td><td>0</td><td>732</td><td></td></tr>
<tr><td>10</td><td>2019</td><td>0</td><td>786</td><td></td></tr>

<tr><td colspan="5"><b>Most Shots Against In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2012</td><td>0</td><td>2579</td><td></td></tr>
<tr><td>2</td><td>2019</td><td>0</td><td>2543</td><td></td></tr>
<tr><td>3</td><td>2014</td><td>0</td><td>2474</td><td></td></tr>
<tr><td>4</td><td>2018</td><td>0</td><td>2472</td><td></td></tr>
<tr><td>5</td><td>2011</td><td>0</td><td>2434</td><td></td></tr>
<tr><td>6</td><td>2013</td><td>0</td><td>2428</td><td></td></tr>
<tr><td>7</td><td>2017</td><td>0</td><td>2425</td><td></td></tr>
<tr><td>8</td><td>2015</td><td>0</td><td>2364</td><td></td></tr>
<tr><td>9</td><td>2008</td><td>0</td><td>2240</td><td></td></tr>
<tr><td>10</td><td>2010</td><td>0</td><td>2220</td><td></td></tr>

<tr><td colspan="5"><b>Less Shots Against In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2009</td><td>0</td><td>2203</td><td></td></tr>
<tr><td>2</td><td>2010</td><td>0</td><td>2220</td><td></td></tr>
<tr><td>3</td><td>2008</td><td>0</td><td>2240</td><td></td></tr>
<tr><td>4</td><td>2016</td><td>0</td><td>2251</td><td></td></tr>
<tr><td>5</td><td>2015</td><td>0</td><td>2364</td><td></td></tr>
<tr><td>6</td><td>2013</td><td>0</td><td>2428</td><td></td></tr>
<tr><td>7</td><td>2011</td><td>0</td><td>2434</td><td></td></tr>
<tr><td>8</td><td>2018</td><td>0</td><td>2472</td><td></td></tr>
<tr><td>9</td><td>2019</td><td>0</td><td>2543</td><td></td></tr>
<tr><td>10</td><td>2012</td><td>0</td><td>2579</td><td></td></tr>

<tr><td colspan="5"><b>Most Pim In 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2016</td><td>919</td><td>70</td><td></td></tr><tr><td>2</td><td>2017</td><td>425</td><td>62</td><td></td></tr><tr><td>3</td><td>2013</td><td>1128</td><td>53</td><td></td></tr><tr><td>4</td><td>2010</td><td>783</td><td>50</td><td></td></tr><tr><td>5</td><td>2011</td><td>151</td><td>41</td><td></td></tr><tr><td>6</td><td>2014</td><td>75</td><td>41</td><td></td></tr><tr><td>7</td><td>2011</td><td>539</td><td>39</td><td></td></tr><tr><td>8</td><td>2014</td><td>1219</td><td>39</td><td></td></tr><tr><td>9</td><td>2011</td><td>37</td><td>37</td><td></td></tr><tr><td>10</td><td>2012</td><td>535</td><td>37</td><td></td></tr>
<tr><td colspan="5"><b>Most Pim In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2010</td><td>0</td><td>1165</td><td></td></tr>
<tr><td>2</td><td>2011</td><td>0</td><td>1130</td><td></td></tr>
<tr><td>3</td><td>2009</td><td>0</td><td>1064</td><td></td></tr>
<tr><td>4</td><td>2008</td><td>0</td><td>1051</td><td></td></tr>
<tr><td>5</td><td>2016</td><td>0</td><td>977</td><td></td></tr>
<tr><td>6</td><td>2012</td><td>0</td><td>930</td><td></td></tr>
<tr><td>7</td><td>2019</td><td>0</td><td>718</td><td></td></tr>
<tr><td>8</td><td>2018</td><td>0</td><td>697</td><td></td></tr>

<tr><td colspan="5"><b>Less Pim In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2017</td><td>0</td><td>596</td><td></td></tr>
<tr><td>2</td><td>2018</td><td>0</td><td>697</td><td></td></tr>
<tr><td>3</td><td>2019</td><td>0</td><td>718</td><td></td></tr>
<tr><td>4</td><td>2015</td><td>0</td><td>745</td><td></td></tr>
<tr><td>5</td><td>2013</td><td>0</td><td>790</td><td></td></tr>
<tr><td>6</td><td>2014</td><td>0</td><td>888</td><td></td></tr>
<tr><td>7</td><td>2012</td><td>0</td><td>930</td><td></td></tr>
<tr><td>8</td><td>2016</td><td>0</td><td>977</td><td></td></tr>
<tr><td>9</td><td>2008</td><td>0</td><td>1051</td><td></td></tr>
<tr><td>10</td><td>2009</td><td>0</td><td>1064</td><td></td></tr>

<tr><td colspan="5"><b>Most Hits In 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2018</td><td>198</td><td>39</td><td></td></tr><tr><td>2</td><td>2013</td><td>200</td><td>38</td><td></td></tr><tr><td>3</td><td>2016</td><td>3</td><td>38</td><td></td></tr><tr><td>4</td><td>2019</td><td>1233</td><td>37</td><td><a href="OTHL-1233.html">Game Direct Link</a></td></tr><tr><td>5</td><td>2013</td><td>1152</td><td>36</td><td></td></tr><tr><td>6</td><td>2017</td><td>940</td><td>35</td><td></td></tr><tr><td>7</td><td>2012</td><td>1157</td><td>34</td><td></td></tr><tr><td>8</td><td>2013</td><td>973</td><td>34</td><td></td></tr><tr><td>9</td><td>2013</td><td>656</td><td>33</td><td></td></tr><tr><td>10</td><td>2015</td><td>724</td><td>33</td><td></td></tr>
<tr><td colspan="5"><b>Most Hits In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2011</td><td>0</td><td>1847</td><td></td></tr>
<tr><td>2</td><td>2019</td><td>0</td><td>1769</td><td></td></tr>
<tr><td>3</td><td>2013</td><td>0</td><td>1747</td><td></td></tr>
<tr><td>4</td><td>2015</td><td>0</td><td>1743</td><td></td></tr>
<tr><td>5</td><td>2018</td><td>0</td><td>1730</td><td></td></tr>
<tr><td>6</td><td>2016</td><td>0</td><td>1727</td><td></td></tr>
<tr><td>7</td><td>2017</td><td>0</td><td>1659</td><td></td></tr>
<tr><td>8</td><td>2014</td><td>0</td><td>1625</td><td></td></tr>
<tr><td>9</td><td>2012</td><td>0</td><td>1571</td><td></td></tr>
<tr><td>10</td><td>2010</td><td>0</td><td>1550</td><td></td></tr>

<tr><td colspan="5"><b>Less Hit In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2009</td><td>0</td><td>1435</td><td></td></tr>
<tr><td>2</td><td>2008</td><td>0</td><td>1490</td><td></td></tr>
<tr><td>3</td><td>2010</td><td>0</td><td>1550</td><td></td></tr>
<tr><td>4</td><td>2012</td><td>0</td><td>1571</td><td></td></tr>
<tr><td>5</td><td>2014</td><td>0</td><td>1625</td><td></td></tr>
<tr><td>6</td><td>2018</td><td>0</td><td>1730</td><td></td></tr>
<tr><td>7</td><td>2013</td><td>0</td><td>1747</td><td></td></tr>
<tr><td>8</td><td>2019</td><td>0</td><td>1769</td><td></td></tr>
<tr><td>9</td><td>2011</td><td>0</td><td>1847</td><td></td></tr>

<tr><td colspan="5"><b>Most Empty Net Goal In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2018</td><td>0</td><td>3</td><td></td></tr>
<tr><td>2</td><td>2008</td><td>0</td><td>2</td><td></td></tr>
<tr><td>3</td><td>2009</td><td>0</td><td>2</td><td></td></tr>
<tr><td>4</td><td>2010</td><td>0</td><td>2</td><td></td></tr>
<tr><td>5</td><td>2013</td><td>0</td><td>2</td><td></td></tr>
<tr><td>6</td><td>2015</td><td>0</td><td>2</td><td></td></tr>
<tr><td>7</td><td>2011</td><td>0</td><td>1</td><td></td></tr>
<tr><td>8</td><td>2012</td><td>0</td><td>1</td><td></td></tr>
<tr><td>9</td><td>2019</td><td>0</td><td>1</td><td></td></tr>

<tr><td colspan="5"><b>Best PP In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2018</td><td>0</td><td>22.70%</td><td></td></tr>
<tr><td>2</td><td>2019</td><td>0</td><td>19.60%</td><td></td></tr>
<tr><td>3</td><td>2017</td><td>0</td><td>19.20%</td><td></td></tr>
<tr><td>4</td><td>2009</td><td>0</td><td>17.50%</td><td></td></tr>
<tr><td>5</td><td>2015</td><td>0</td><td>17.40%</td><td></td></tr>
<tr><td>6</td><td>2011</td><td>0</td><td>16.70%</td><td></td></tr>
<tr><td>7</td><td>2008</td><td>0</td><td>16.50%</td><td></td></tr>
<tr><td>8</td><td>2010</td><td>0</td><td>15.10%</td><td></td></tr>
<tr><td>9</td><td>2013</td><td>0</td><td>12.30%</td><td></td></tr>
<tr><td>10</td><td>2012</td><td>0</td><td>12.00%</td><td></td></tr>

<tr><td colspan="5"><b>Best PK In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2013</td><td>0</td><td>86.60%</td><td></td></tr>
<tr><td>2</td><td>2018</td><td>0</td><td>84.10%</td><td></td></tr>
<tr><td>3</td><td>2017</td><td>0</td><td>83.80%</td><td></td></tr>
<tr><td>4</td><td>2015</td><td>0</td><td>83.00%</td><td></td></tr>
<tr><td>5</td><td>2011</td><td>0</td><td>82.80%</td><td></td></tr>
<tr><td>6</td><td>2010</td><td>0</td><td>82.60%</td><td></td></tr>
<tr><td>7</td><td>2008</td><td>0</td><td>82.20%</td><td></td></tr>
<tr><td>8</td><td>2009</td><td>0</td><td>81.40%</td><td></td></tr>
<tr><td>9</td><td>2012</td><td>0</td><td>81.40%</td><td></td></tr>
<tr><td>10</td><td>2019</td><td>0</td><td>80.00%</td><td></td></tr>

<tr><td colspan="5"><b>Worse PP In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2012</td><td>0</td><td>12.00%</td><td></td></tr>
<tr><td>2</td><td>2014</td><td>0</td><td>12.20%</td><td></td></tr>
<tr><td>3</td><td>2013</td><td>0</td><td>12.30%</td><td></td></tr>
<tr><td>4</td><td>2016</td><td>0</td><td>13.10%</td><td></td></tr>
<tr><td>5</td><td>2010</td><td>0</td><td>15.10%</td><td></td></tr>
<tr><td>6</td><td>2008</td><td>0</td><td>16.50%</td><td></td></tr>
<tr><td>7</td><td>2011</td><td>0</td><td>16.70%</td><td></td></tr>
<tr><td>8</td><td>2009</td><td>0</td><td>17.50%</td><td></td></tr>

<tr><td colspan="5"><b>Worse PK In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2019</td><td>0</td><td>80.00%</td><td></td></tr>
<tr><td>2</td><td>2014</td><td>0</td><td>80.40%</td><td></td></tr>
<tr><td>3</td><td>2009</td><td>0</td><td>81.40%</td><td></td></tr>
<tr><td>4</td><td>2012</td><td>0</td><td>81.40%</td><td></td></tr>
<tr><td>5</td><td>2016</td><td>0</td><td>81.70%</td><td></td></tr>
<tr><td>6</td><td>2008</td><td>0</td><td>82.20%</td><td></td></tr>
<tr><td>7</td><td>2010</td><td>0</td><td>82.60%</td><td></td></tr>
<tr><td>8</td><td>2011</td><td>0</td><td>82.80%</td><td></td></tr>

<tr><td colspan="5"><b>Most Win In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2018</td><td>0</td><td>50</td><td></td></tr>
<tr><td>2</td><td>2009</td><td>0</td><td>48</td><td></td></tr>
<tr><td>3</td><td>2017</td><td>0</td><td>45</td><td></td></tr>
<tr><td>4</td><td>2019</td><td>0</td><td>45</td><td></td></tr>
<tr><td>5</td><td>2016</td><td>0</td><td>38</td><td></td></tr>
<tr><td>6</td><td>2008</td><td>0</td><td>37</td><td></td></tr>
<tr><td>7</td><td>2011</td><td>0</td><td>36</td><td></td></tr>
<tr><td>8</td><td>2015</td><td>0</td><td>34</td><td></td></tr>
<tr><td>9</td><td>2010</td><td>0</td><td>31</td><td></td></tr>
<tr><td>10</td><td>2012</td><td>0</td><td>27</td><td></td></tr>

<tr><td colspan="5"><b>Less Win In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2014</td><td>0</td><td>18</td><td></td></tr>
<tr><td>2</td><td>2013</td><td>0</td><td>21</td><td></td></tr>
<tr><td>3</td><td>2012</td><td>0</td><td>27</td><td></td></tr>
<tr><td>4</td><td>2010</td><td>0</td><td>31</td><td></td></tr>
<tr><td>5</td><td>2015</td><td>0</td><td>34</td><td></td></tr>
<tr><td>6</td><td>2011</td><td>0</td><td>36</td><td></td></tr>
<tr><td>7</td><td>2008</td><td>0</td><td>37</td><td></td></tr>
<tr><td>8</td><td>2019</td><td>0</td><td>45</td><td></td></tr>
<tr><td>9</td><td>2009</td><td>0</td><td>48</td><td></td></tr>

<tr><td colspan="5"><b>Most Lost In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2014</td><td>0</td><td>64</td><td></td></tr>
<tr><td>2</td><td>2013</td><td>0</td><td>61</td><td></td></tr>
<tr><td>3</td><td>2012</td><td>0</td><td>55</td><td></td></tr>
<tr><td>4</td><td>2010</td><td>0</td><td>51</td><td></td></tr>
<tr><td>5</td><td>2015</td><td>0</td><td>48</td><td></td></tr>
<tr><td>6</td><td>2011</td><td>0</td><td>46</td><td></td></tr>
<tr><td>7</td><td>2019</td><td>0</td><td>37</td><td></td></tr>
<tr><td>8</td><td>2008</td><td>0</td><td>35</td><td></td></tr>
<tr><td>9</td><td>2009</td><td>0</td><td>34</td><td></td></tr>
<tr><td>10</td><td>2018</td><td>0</td><td>32</td><td></td></tr>

<tr><td colspan="5"><b>Less Lost In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2018</td><td>0</td><td>32</td><td></td></tr>
<tr><td>2</td><td>2009</td><td>0</td><td>34</td><td></td></tr>
<tr><td>3</td><td>2008</td><td>0</td><td>35</td><td></td></tr>
<tr><td>4</td><td>2017</td><td>0</td><td>37</td><td></td></tr>
<tr><td>5</td><td>2019</td><td>0</td><td>37</td><td></td></tr>
<tr><td>6</td><td>2016</td><td>0</td><td>44</td><td></td></tr>
<tr><td>7</td><td>2011</td><td>0</td><td>46</td><td></td></tr>
<tr><td>8</td><td>2015</td><td>0</td><td>48</td><td></td></tr>
<tr><td>9</td><td>2010</td><td>0</td><td>51</td><td></td></tr>
<tr><td>10</td><td>2012</td><td>0</td><td>55</td><td></td></tr>

<tr><td colspan="5"><b>Most Point In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2009</td><td>0</td><td>104</td><td></td></tr>
<tr><td>2</td><td>2018</td><td>0</td><td>104</td><td></td></tr>
<tr><td>3</td><td>2019</td><td>0</td><td>96</td><td></td></tr>
<tr><td>4</td><td>2017</td><td>0</td><td>94</td><td></td></tr>
<tr><td>5</td><td>2008</td><td>0</td><td>89</td><td></td></tr>
<tr><td>6</td><td>2016</td><td>0</td><td>86</td><td></td></tr>
<tr><td>7</td><td>2011</td><td>0</td><td>84</td><td></td></tr>
<tr><td>8</td><td>2015</td><td>0</td><td>81</td><td></td></tr>
<tr><td>9</td><td>2010</td><td>0</td><td>68</td><td></td></tr>
<tr><td>10</td><td>2012</td><td>0</td><td>63</td><td></td></tr>

<tr><td colspan="5"><b>Less Points In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2014</td><td>0</td><td>50</td><td></td></tr>
<tr><td>2</td><td>2013</td><td>0</td><td>54</td><td></td></tr>
<tr><td>3</td><td>2012</td><td>0</td><td>63</td><td></td></tr>
<tr><td>4</td><td>2010</td><td>0</td><td>68</td><td></td></tr>
<tr><td>5</td><td>2015</td><td>0</td><td>81</td><td></td></tr>
<tr><td>6</td><td>2011</td><td>0</td><td>84</td><td></td></tr>
<tr><td>7</td><td>2008</td><td>0</td><td>89</td><td></td></tr>
<tr><td>8</td><td>2019</td><td>0</td><td>96</td><td></td></tr>
<tr><td>9</td><td>2009</td><td>0</td><td>104</td><td></td></tr>

<tr><td colspan="5"><b>Most Win Home In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>0</td><td>0</td><td>32000</td><td></td></tr>
<tr><td>2</td><td>0</td><td>0</td><td>32000</td><td></td></tr>

<tr><td colspan="5"><b>Most Win Visitor In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>0</td><td>0</td><td>32000</td><td></td></tr>
<tr><td>2</td><td>0</td><td>0</td><td>32000</td><td></td></tr>

</table></div>
<h1 class="TeamRecordsPro_TBL"><a id="Lightning">Lightning</a></h1>
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
<br /><table class="STHSRecordTable">
<tr><td colspan="5"><b>Most Goals in 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2014</td><td>453</td><td>8</td><td></td></tr><tr><td>2</td><td>2015</td><td>1156</td><td>8</td><td></td></tr><tr><td>3</td><td>2016</td><td>1162</td><td>8</td><td></td></tr><tr><td>4</td><td>2009</td><td>930</td><td>7</td><td></td></tr><tr><td>5</td><td>2009</td><td>1218</td><td>7</td><td></td></tr><tr><td>6</td><td>2010</td><td>1063</td><td>7</td><td></td></tr><tr><td>7</td><td>2012</td><td>13</td><td>7</td><td></td></tr><tr><td>8</td><td>2012</td><td>569</td><td>7</td><td></td></tr><tr><td>9</td><td>2013</td><td>796</td><td>7</td><td></td></tr><tr><td>10</td><td>2013</td><td>1023</td><td>7</td><td></td></tr>
<tr><td colspan="5"><b>Most Goals in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2015</td><td>0</td><td>321</td><td></td></tr>
<tr><td>2</td><td>2016</td><td>0</td><td>296</td><td></td></tr>
<tr><td>3</td><td>2014</td><td>0</td><td>280</td><td></td></tr>
<tr><td>4</td><td>2010</td><td>0</td><td>279</td><td></td></tr>
<tr><td>5</td><td>2012</td><td>0</td><td>261</td><td></td></tr>
<tr><td>6</td><td>2019</td><td>0</td><td>259</td><td></td></tr>
<tr><td>7</td><td>2013</td><td>0</td><td>248</td><td></td></tr>
<tr><td>8</td><td>2009</td><td>0</td><td>240</td><td></td></tr>
<tr><td>9</td><td>2011</td><td>0</td><td>232</td><td></td></tr>
<tr><td>10</td><td>2008</td><td>0</td><td>215</td><td></td></tr>

<tr><td colspan="5"><b>Less Goal in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2018</td><td>0</td><td>201</td><td></td></tr>
<tr><td>2</td><td>2008</td><td>0</td><td>215</td><td></td></tr>
<tr><td>3</td><td>2017</td><td>0</td><td>227</td><td></td></tr>
<tr><td>4</td><td>2011</td><td>0</td><td>232</td><td></td></tr>
<tr><td>5</td><td>2009</td><td>0</td><td>240</td><td></td></tr>
<tr><td>6</td><td>2013</td><td>0</td><td>248</td><td></td></tr>
<tr><td>7</td><td>2019</td><td>0</td><td>259</td><td></td></tr>
<tr><td>8</td><td>2012</td><td>0</td><td>261</td><td></td></tr>
<tr><td>9</td><td>2010</td><td>0</td><td>279</td><td></td></tr>

<tr><td colspan="5"><b>Most Goals Against in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2008</td><td>0</td><td>273</td><td></td></tr>
<tr><td>2</td><td>2018</td><td>0</td><td>247</td><td></td></tr>
<tr><td>3</td><td>2010</td><td>0</td><td>246</td><td></td></tr>
<tr><td>4</td><td>2009</td><td>0</td><td>235</td><td></td></tr>
<tr><td>5</td><td>2019</td><td>0</td><td>232</td><td></td></tr>
<tr><td>6</td><td>2012</td><td>0</td><td>230</td><td></td></tr>
<tr><td>7</td><td>2015</td><td>0</td><td>227</td><td></td></tr>
<tr><td>8</td><td>2011</td><td>0</td><td>215</td><td></td></tr>

<tr><td colspan="5"><b>Less Goal Against in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2014</td><td>0</td><td>210</td><td></td></tr>
<tr><td>2</td><td>2011</td><td>0</td><td>215</td><td></td></tr>
<tr><td>3</td><td>2013</td><td>0</td><td>215</td><td></td></tr>
<tr><td>4</td><td>2016</td><td>0</td><td>217</td><td></td></tr>
<tr><td>5</td><td>2017</td><td>0</td><td>219</td><td></td></tr>
<tr><td>6</td><td>2015</td><td>0</td><td>227</td><td></td></tr>
<tr><td>7</td><td>2012</td><td>0</td><td>230</td><td></td></tr>
<tr><td>8</td><td>2019</td><td>0</td><td>232</td><td></td></tr>
<tr><td>9</td><td>2009</td><td>0</td><td>235</td><td></td></tr>
<tr><td>10</td><td>2010</td><td>0</td><td>246</td><td></td></tr>

<tr><td colspan="5"><b>Most Assists in 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2015</td><td>1156</td><td>15</td><td></td></tr><tr><td>2</td><td>2012</td><td>13</td><td>14</td><td></td></tr><tr><td>3</td><td>2016</td><td>1125</td><td>14</td><td></td></tr><tr><td>4</td><td>2016</td><td>1162</td><td>14</td><td></td></tr><tr><td>5</td><td>2009</td><td>930</td><td>13</td><td></td></tr><tr><td>6</td><td>2010</td><td>1063</td><td>13</td><td></td></tr><tr><td>7</td><td>2012</td><td>569</td><td>13</td><td></td></tr><tr><td>8</td><td>2013</td><td>796</td><td>13</td><td></td></tr><tr><td>9</td><td>2014</td><td>267</td><td>13</td><td></td></tr><tr><td>10</td><td>2016</td><td>862</td><td>13</td><td></td></tr>
<tr><td colspan="5"><b>Most Assists in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2015</td><td>0</td><td>557</td><td></td></tr>
<tr><td>2</td><td>2016</td><td>0</td><td>526</td><td></td></tr>
<tr><td>3</td><td>2010</td><td>0</td><td>490</td><td></td></tr>
<tr><td>4</td><td>2014</td><td>0</td><td>481</td><td></td></tr>
<tr><td>5</td><td>2012</td><td>0</td><td>457</td><td></td></tr>
<tr><td>6</td><td>2013</td><td>0</td><td>445</td><td></td></tr>
<tr><td>7</td><td>2019</td><td>0</td><td>436</td><td></td></tr>
<tr><td>8</td><td>2009</td><td>0</td><td>426</td><td></td></tr>
<tr><td>9</td><td>2008</td><td>0</td><td>384</td><td></td></tr>
<tr><td>10</td><td>2011</td><td>0</td><td>373</td><td></td></tr>

<tr><td colspan="5"><b>Less Assist in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2018</td><td>0</td><td>353</td><td></td></tr>
<tr><td>2</td><td>2011</td><td>0</td><td>373</td><td></td></tr>
<tr><td>3</td><td>2008</td><td>0</td><td>384</td><td></td></tr>
<tr><td>4</td><td>2017</td><td>0</td><td>395</td><td></td></tr>
<tr><td>5</td><td>2009</td><td>0</td><td>426</td><td></td></tr>
<tr><td>6</td><td>2019</td><td>0</td><td>436</td><td></td></tr>
<tr><td>7</td><td>2013</td><td>0</td><td>445</td><td></td></tr>
<tr><td>8</td><td>2012</td><td>0</td><td>457</td><td></td></tr>
<tr><td>9</td><td>2010</td><td>0</td><td>490</td><td></td></tr>

<tr><td colspan="5"><b>Most Game Points in 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2015</td><td>1156</td><td>23</td><td></td></tr><tr><td>2</td><td>2016</td><td>1162</td><td>22</td><td></td></tr><tr><td>3</td><td>2012</td><td>13</td><td>21</td><td></td></tr><tr><td>4</td><td>2016</td><td>1125</td><td>21</td><td></td></tr><tr><td>5</td><td>2009</td><td>930</td><td>20</td><td></td></tr><tr><td>6</td><td>2010</td><td>1063</td><td>20</td><td></td></tr><tr><td>7</td><td>2012</td><td>569</td><td>20</td><td></td></tr><tr><td>8</td><td>2013</td><td>796</td><td>20</td><td></td></tr><tr><td>9</td><td>2014</td><td>267</td><td>20</td><td></td></tr><tr><td>10</td><td>2016</td><td>862</td><td>20</td><td></td></tr>
<tr><td colspan="5"><b>Most Game Points in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>0</td><td>0</td><td>32000</td><td></td></tr>
<tr><td>2</td><td>0</td><td>0</td><td>32000</td><td></td></tr>

<tr><td colspan="5"><b>Less Game Point In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2018</td><td>0</td><td>554</td><td></td></tr>
<tr><td>2</td><td>2008</td><td>0</td><td>599</td><td></td></tr>
<tr><td>3</td><td>2011</td><td>0</td><td>605</td><td></td></tr>
<tr><td>4</td><td>2017</td><td>0</td><td>622</td><td></td></tr>
<tr><td>5</td><td>2009</td><td>0</td><td>666</td><td></td></tr>
<tr><td>6</td><td>2013</td><td>0</td><td>693</td><td></td></tr>
<tr><td>7</td><td>2019</td><td>0</td><td>695</td><td></td></tr>
<tr><td>8</td><td>2012</td><td>0</td><td>718</td><td></td></tr>
<tr><td>9</td><td>2010</td><td>0</td><td>769</td><td></td></tr>

<tr><td colspan="5"><b>Most Shots In 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2019</td><td>904</td><td>68</td><td><a href="OTHL-904.html">Game Direct Link</a></td></tr><tr><td>2</td><td>2015</td><td>159</td><td>59</td><td></td></tr><tr><td>3</td><td>2015</td><td>1156</td><td>57</td><td></td></tr><tr><td>4</td><td>2012</td><td>1089</td><td>52</td><td></td></tr><tr><td>5</td><td>2013</td><td>41</td><td>52</td><td></td></tr><tr><td>6</td><td>2019</td><td>874</td><td>52</td><td><a href="OTHL-874.html">Game Direct Link</a></td></tr><tr><td>7</td><td>2013</td><td>1110</td><td>51</td><td></td></tr><tr><td>8</td><td>2015</td><td>757</td><td>51</td><td></td></tr><tr><td>9</td><td>2019</td><td>742</td><td>51</td><td><a href="OTHL-742.html">Game Direct Link</a></td></tr><tr><td>10</td><td>2012</td><td>858</td><td>50</td><td></td></tr>
<tr><td colspan="5"><b>Most Shots In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2019</td><td>0</td><td>2921</td><td></td></tr>
<tr><td>2</td><td>2015</td><td>0</td><td>2801</td><td></td></tr>
<tr><td>3</td><td>2014</td><td>0</td><td>2559</td><td></td></tr>
<tr><td>4</td><td>2012</td><td>0</td><td>2555</td><td></td></tr>
<tr><td>5</td><td>2013</td><td>0</td><td>2545</td><td></td></tr>
<tr><td>6</td><td>2016</td><td>0</td><td>2525</td><td></td></tr>
<tr><td>7</td><td>2011</td><td>0</td><td>2423</td><td></td></tr>
<tr><td>8</td><td>2018</td><td>0</td><td>2417</td><td></td></tr>
<tr><td>9</td><td>2010</td><td>0</td><td>2344</td><td></td></tr>
<tr><td>10</td><td>2009</td><td>0</td><td>2127</td><td></td></tr>

<tr><td colspan="5"><b>Less Shots In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2008</td><td>0</td><td>2054</td><td></td></tr>
<tr><td>2</td><td>2009</td><td>0</td><td>2127</td><td></td></tr>
<tr><td>3</td><td>2010</td><td>0</td><td>2344</td><td></td></tr>
<tr><td>4</td><td>2018</td><td>0</td><td>2417</td><td></td></tr>
<tr><td>5</td><td>2011</td><td>0</td><td>2423</td><td></td></tr>
<tr><td>6</td><td>2017</td><td>0</td><td>2492</td><td></td></tr>
<tr><td>7</td><td>2016</td><td>0</td><td>2525</td><td></td></tr>
<tr><td>8</td><td>2013</td><td>0</td><td>2545</td><td></td></tr>
<tr><td>9</td><td>2012</td><td>0</td><td>2555</td><td></td></tr>

<tr><td colspan="5"><b>Most Shots Blocked In 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2018</td><td>148</td><td>21</td><td></td></tr><tr><td>2</td><td>2008</td><td>494</td><td>20</td><td></td></tr><tr><td>3</td><td>2018</td><td>222</td><td>20</td><td></td></tr><tr><td>4</td><td>2012</td><td>217</td><td>19</td><td></td></tr><tr><td>5</td><td>2019</td><td>12</td><td>19</td><td><a href="OTHL-12.html">Game Direct Link</a></td></tr><tr><td>6</td><td>2008</td><td>367</td><td>18</td><td></td></tr><tr><td>7</td><td>2009</td><td>655</td><td>18</td><td></td></tr><tr><td>8</td><td>2011</td><td>576</td><td>18</td><td></td></tr><tr><td>9</td><td>2011</td><td>623</td><td>18</td><td></td></tr><tr><td>10</td><td>2017</td><td>1202</td><td>18</td><td></td></tr>
<tr><td colspan="5"><b>Most Shots Blocked In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>0</td><td>0</td><td>32000</td><td></td></tr>
<tr><td>2</td><td>0</td><td>0</td><td>32000</td><td></td></tr>

<tr><td colspan="5"><b>Less Shots Block In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2013</td><td>0</td><td>602</td><td></td></tr>
<tr><td>2</td><td>2010</td><td>0</td><td>608</td><td></td></tr>
<tr><td>3</td><td>2014</td><td>0</td><td>623</td><td></td></tr>
<tr><td>4</td><td>2015</td><td>0</td><td>651</td><td></td></tr>
<tr><td>5</td><td>2017</td><td>0</td><td>662</td><td></td></tr>
<tr><td>6</td><td>2012</td><td>0</td><td>667</td><td></td></tr>
<tr><td>7</td><td>2009</td><td>0</td><td>670</td><td></td></tr>
<tr><td>8</td><td>2008</td><td>0</td><td>728</td><td></td></tr>
<tr><td>9</td><td>2019</td><td>0</td><td>746</td><td></td></tr>
<tr><td>10</td><td>2018</td><td>0</td><td>747</td><td></td></tr>

<tr><td colspan="5"><b>Most Shots Against In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2019</td><td>0</td><td>2622</td><td></td></tr>
<tr><td>2</td><td>2017</td><td>0</td><td>2527</td><td></td></tr>
<tr><td>3</td><td>2008</td><td>0</td><td>2493</td><td></td></tr>
<tr><td>4</td><td>2018</td><td>0</td><td>2477</td><td></td></tr>
<tr><td>5</td><td>2011</td><td>0</td><td>2335</td><td></td></tr>
<tr><td>6</td><td>2009</td><td>0</td><td>2256</td><td></td></tr>
<tr><td>7</td><td>2012</td><td>0</td><td>2220</td><td></td></tr>
<tr><td>8</td><td>2015</td><td>0</td><td>2216</td><td></td></tr>
<tr><td>9</td><td>2010</td><td>0</td><td>2172</td><td></td></tr>

<tr><td colspan="5"><b>Less Shots Against In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2014</td><td>0</td><td>2105</td><td></td></tr>
<tr><td>2</td><td>2013</td><td>0</td><td>2132</td><td></td></tr>
<tr><td>3</td><td>2010</td><td>0</td><td>2172</td><td></td></tr>
<tr><td>4</td><td>2016</td><td>0</td><td>2207</td><td></td></tr>
<tr><td>5</td><td>2015</td><td>0</td><td>2216</td><td></td></tr>
<tr><td>6</td><td>2012</td><td>0</td><td>2220</td><td></td></tr>
<tr><td>7</td><td>2009</td><td>0</td><td>2256</td><td></td></tr>
<tr><td>8</td><td>2011</td><td>0</td><td>2335</td><td></td></tr>
<tr><td>9</td><td>2018</td><td>0</td><td>2477</td><td></td></tr>
<tr><td>10</td><td>2008</td><td>0</td><td>2493</td><td></td></tr>

<tr><td colspan="5"><b>Most Pim In 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2008</td><td>367</td><td>73</td><td></td></tr><tr><td>2</td><td>2011</td><td>558</td><td>67</td><td></td></tr><tr><td>3</td><td>2008</td><td>47</td><td>44</td><td></td></tr><tr><td>4</td><td>2008</td><td>811</td><td>43</td><td></td></tr><tr><td>5</td><td>2009</td><td>697</td><td>37</td><td></td></tr><tr><td>6</td><td>2009</td><td>446</td><td>36</td><td></td></tr><tr><td>7</td><td>2014</td><td>74</td><td>35</td><td></td></tr><tr><td>8</td><td>2016</td><td>543</td><td>35</td><td></td></tr><tr><td>9</td><td>2011</td><td>832</td><td>34</td><td></td></tr><tr><td>10</td><td>2016</td><td>635</td><td>31</td><td></td></tr>
<tr><td colspan="5"><b>Most Pim In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2008</td><td>0</td><td>1437</td><td></td></tr>
<tr><td>2</td><td>2009</td><td>0</td><td>1278</td><td></td></tr>
<tr><td>3</td><td>2010</td><td>0</td><td>1173</td><td></td></tr>
<tr><td>4</td><td>2011</td><td>0</td><td>1084</td><td></td></tr>
<tr><td>5</td><td>2016</td><td>0</td><td>894</td><td></td></tr>
<tr><td>6</td><td>2015</td><td>0</td><td>783</td><td></td></tr>
<tr><td>7</td><td>2012</td><td>0</td><td>775</td><td></td></tr>
<tr><td>8</td><td>2019</td><td>0</td><td>713</td><td></td></tr>
<tr><td>9</td><td>2018</td><td>0</td><td>618</td><td></td></tr>

<tr><td colspan="5"><b>Less Pim In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2017</td><td>0</td><td>520</td><td></td></tr>
<tr><td>2</td><td>2018</td><td>0</td><td>618</td><td></td></tr>
<tr><td>3</td><td>2013</td><td>0</td><td>668</td><td></td></tr>
<tr><td>4</td><td>2014</td><td>0</td><td>680</td><td></td></tr>
<tr><td>5</td><td>2019</td><td>0</td><td>713</td><td></td></tr>
<tr><td>6</td><td>2012</td><td>0</td><td>775</td><td></td></tr>
<tr><td>7</td><td>2015</td><td>0</td><td>783</td><td></td></tr>
<tr><td>8</td><td>2016</td><td>0</td><td>894</td><td></td></tr>
<tr><td>9</td><td>2011</td><td>0</td><td>1084</td><td></td></tr>
<tr><td>10</td><td>2010</td><td>0</td><td>1173</td><td></td></tr>

<tr><td colspan="5"><b>Most Hits In 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2008</td><td>1031</td><td>44</td><td></td></tr><tr><td>2</td><td>2011</td><td>455</td><td>37</td><td></td></tr><tr><td>3</td><td>2011</td><td>246</td><td>35</td><td></td></tr><tr><td>4</td><td>2011</td><td>1018</td><td>35</td><td></td></tr><tr><td>5</td><td>2013</td><td>26</td><td>35</td><td></td></tr><tr><td>6</td><td>2011</td><td>643</td><td>34</td><td></td></tr><tr><td>7</td><td>2011</td><td>1199</td><td>34</td><td></td></tr><tr><td>8</td><td>2013</td><td>877</td><td>34</td><td></td></tr><tr><td>9</td><td>2015</td><td>714</td><td>34</td><td></td></tr><tr><td>10</td><td>2011</td><td>942</td><td>33</td><td></td></tr>
<tr><td colspan="5"><b>Most Hits In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2011</td><td>0</td><td>1931</td><td></td></tr>
<tr><td>2</td><td>2018</td><td>0</td><td>1722</td><td></td></tr>
<tr><td>3</td><td>2014</td><td>0</td><td>1664</td><td></td></tr>
<tr><td>4</td><td>2008</td><td>0</td><td>1631</td><td></td></tr>
<tr><td>5</td><td>2015</td><td>0</td><td>1625</td><td></td></tr>
<tr><td>6</td><td>2017</td><td>0</td><td>1615</td><td></td></tr>
<tr><td>7</td><td>2019</td><td>0</td><td>1604</td><td></td></tr>
<tr><td>8</td><td>2013</td><td>0</td><td>1602</td><td></td></tr>
<tr><td>9</td><td>2012</td><td>0</td><td>1595</td><td></td></tr>
<tr><td>10</td><td>2009</td><td>0</td><td>1489</td><td></td></tr>

<tr><td colspan="5"><b>Less Hit In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2010</td><td>0</td><td>1460</td><td></td></tr>
<tr><td>2</td><td>2009</td><td>0</td><td>1489</td><td></td></tr>
<tr><td>3</td><td>2016</td><td>0</td><td>1570</td><td></td></tr>
<tr><td>4</td><td>2012</td><td>0</td><td>1595</td><td></td></tr>
<tr><td>5</td><td>2013</td><td>0</td><td>1602</td><td></td></tr>
<tr><td>6</td><td>2019</td><td>0</td><td>1604</td><td></td></tr>
<tr><td>7</td><td>2015</td><td>0</td><td>1625</td><td></td></tr>
<tr><td>8</td><td>2008</td><td>0</td><td>1631</td><td></td></tr>
<tr><td>9</td><td>2018</td><td>0</td><td>1722</td><td></td></tr>
<tr><td>10</td><td>2011</td><td>0</td><td>1931</td><td></td></tr>

<tr><td colspan="5"><b>Most Empty Net Goal In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2008</td><td>0</td><td>3</td><td></td></tr>
<tr><td>2</td><td>2012</td><td>0</td><td>3</td><td></td></tr>
<tr><td>3</td><td>2017</td><td>0</td><td>3</td><td></td></tr>
<tr><td>4</td><td>2009</td><td>0</td><td>2</td><td></td></tr>
<tr><td>5</td><td>2018</td><td>0</td><td>2</td><td></td></tr>
<tr><td>6</td><td>2010</td><td>0</td><td>1</td><td></td></tr>
<tr><td>7</td><td>2011</td><td>0</td><td>1</td><td></td></tr>
<tr><td>8</td><td>2019</td><td>0</td><td>1</td><td></td></tr>

<tr><td colspan="5"><b>Best PP In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2019</td><td>0</td><td>22.60%</td><td></td></tr>
<tr><td>2</td><td>2016</td><td>0</td><td>22.30%</td><td></td></tr>
<tr><td>3</td><td>2010</td><td>0</td><td>20.60%</td><td></td></tr>
<tr><td>4</td><td>2012</td><td>0</td><td>20.10%</td><td></td></tr>
<tr><td>5</td><td>2014</td><td>0</td><td>19.40%</td><td></td></tr>
<tr><td>6</td><td>2015</td><td>0</td><td>19.20%</td><td></td></tr>
<tr><td>7</td><td>2011</td><td>0</td><td>17.50%</td><td></td></tr>
<tr><td>8</td><td>2009</td><td>0</td><td>17.00%</td><td></td></tr>
<tr><td>9</td><td>2013</td><td>0</td><td>15.60%</td><td></td></tr>
<tr><td>10</td><td>2008</td><td>0</td><td>13.00%</td><td></td></tr>

<tr><td colspan="5"><b>Best PK In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2013</td><td>0</td><td>86.80%</td><td></td></tr>
<tr><td>2</td><td>2017</td><td>0</td><td>86.30%</td><td></td></tr>
<tr><td>3</td><td>2015</td><td>0</td><td>85.70%</td><td></td></tr>
<tr><td>4</td><td>2019</td><td>0</td><td>85.10%</td><td></td></tr>
<tr><td>5</td><td>2009</td><td>0</td><td>84.90%</td><td></td></tr>
<tr><td>6</td><td>2014</td><td>0</td><td>84.70%</td><td></td></tr>
<tr><td>7</td><td>2008</td><td>0</td><td>84.60%</td><td></td></tr>
<tr><td>8</td><td>2010</td><td>0</td><td>83.70%</td><td></td></tr>
<tr><td>9</td><td>2012</td><td>0</td><td>83.40%</td><td></td></tr>
<tr><td>10</td><td>2011</td><td>0</td><td>82.90%</td><td></td></tr>

<tr><td colspan="5"><b>Worse PP In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2018</td><td>0</td><td>12.70%</td><td></td></tr>
<tr><td>2</td><td>2008</td><td>0</td><td>13.00%</td><td></td></tr>
<tr><td>3</td><td>2017</td><td>0</td><td>15.30%</td><td></td></tr>
<tr><td>4</td><td>2013</td><td>0</td><td>15.60%</td><td></td></tr>
<tr><td>5</td><td>2009</td><td>0</td><td>17.00%</td><td></td></tr>
<tr><td>6</td><td>2011</td><td>0</td><td>17.50%</td><td></td></tr>
<tr><td>7</td><td>2015</td><td>0</td><td>19.20%</td><td></td></tr>
<tr><td>8</td><td>2014</td><td>0</td><td>19.40%</td><td></td></tr>
<tr><td>9</td><td>2012</td><td>0</td><td>20.10%</td><td></td></tr>
<tr><td>10</td><td>2010</td><td>0</td><td>20.60%</td><td></td></tr>

<tr><td colspan="5"><b>Worse PK In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2018</td><td>0</td><td>78.10%</td><td></td></tr>
<tr><td>2</td><td>2016</td><td>0</td><td>80.00%</td><td></td></tr>
<tr><td>3</td><td>2011</td><td>0</td><td>82.90%</td><td></td></tr>
<tr><td>4</td><td>2012</td><td>0</td><td>83.40%</td><td></td></tr>
<tr><td>5</td><td>2010</td><td>0</td><td>83.70%</td><td></td></tr>
<tr><td>6</td><td>2008</td><td>0</td><td>84.60%</td><td></td></tr>
<tr><td>7</td><td>2014</td><td>0</td><td>84.70%</td><td></td></tr>
<tr><td>8</td><td>2009</td><td>0</td><td>84.90%</td><td></td></tr>

<tr><td colspan="5"><b>Most Win In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2015</td><td>0</td><td>58</td><td></td></tr>
<tr><td>2</td><td>2014</td><td>0</td><td>56</td><td></td></tr>
<tr><td>3</td><td>2012</td><td>0</td><td>50</td><td></td></tr>
<tr><td>4</td><td>2016</td><td>0</td><td>50</td><td></td></tr>
<tr><td>5</td><td>2010</td><td>0</td><td>48</td><td></td></tr>
<tr><td>6</td><td>2019</td><td>0</td><td>45</td><td></td></tr>
<tr><td>7</td><td>2011</td><td>0</td><td>44</td><td></td></tr>
<tr><td>8</td><td>2013</td><td>0</td><td>44</td><td></td></tr>
<tr><td>9</td><td>2009</td><td>0</td><td>42</td><td></td></tr>
<tr><td>10</td><td>2018</td><td>0</td><td>27</td><td></td></tr>

<tr><td colspan="5"><b>Less Win In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2008</td><td>0</td><td>26</td><td></td></tr>
<tr><td>2</td><td>2018</td><td>0</td><td>27</td><td></td></tr>
<tr><td>3</td><td>2017</td><td>0</td><td>39</td><td></td></tr>
<tr><td>4</td><td>2009</td><td>0</td><td>42</td><td></td></tr>
<tr><td>5</td><td>2011</td><td>0</td><td>44</td><td></td></tr>
<tr><td>6</td><td>2013</td><td>0</td><td>44</td><td></td></tr>
<tr><td>7</td><td>2019</td><td>0</td><td>45</td><td></td></tr>
<tr><td>8</td><td>2010</td><td>0</td><td>48</td><td></td></tr>
<tr><td>9</td><td>2012</td><td>0</td><td>50</td><td></td></tr>

<tr><td colspan="5"><b>Most Lost In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2018</td><td>0</td><td>55</td><td></td></tr>
<tr><td>2</td><td>2017</td><td>0</td><td>43</td><td></td></tr>
<tr><td>3</td><td>2008</td><td>0</td><td>42</td><td></td></tr>
<tr><td>4</td><td>2009</td><td>0</td><td>40</td><td></td></tr>
<tr><td>5</td><td>2011</td><td>0</td><td>38</td><td></td></tr>
<tr><td>6</td><td>2013</td><td>0</td><td>38</td><td></td></tr>
<tr><td>7</td><td>2019</td><td>0</td><td>37</td><td></td></tr>
<tr><td>8</td><td>2010</td><td>0</td><td>34</td><td></td></tr>
<tr><td>9</td><td>2012</td><td>0</td><td>32</td><td></td></tr>

<tr><td colspan="5"><b>Less Lost In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2015</td><td>0</td><td>24</td><td></td></tr>
<tr><td>2</td><td>2014</td><td>0</td><td>26</td><td></td></tr>
<tr><td>3</td><td>2012</td><td>0</td><td>32</td><td></td></tr>
<tr><td>4</td><td>2016</td><td>0</td><td>32</td><td></td></tr>
<tr><td>5</td><td>2010</td><td>0</td><td>34</td><td></td></tr>
<tr><td>6</td><td>2019</td><td>0</td><td>37</td><td></td></tr>
<tr><td>7</td><td>2011</td><td>0</td><td>38</td><td></td></tr>
<tr><td>8</td><td>2013</td><td>0</td><td>38</td><td></td></tr>
<tr><td>9</td><td>2009</td><td>0</td><td>40</td><td></td></tr>
<tr><td>10</td><td>2008</td><td>0</td><td>42</td><td></td></tr>

<tr><td colspan="5"><b>Most Point In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2015</td><td>0</td><td>124</td><td></td></tr>
<tr><td>2</td><td>2014</td><td>0</td><td>117</td><td></td></tr>
<tr><td>3</td><td>2016</td><td>0</td><td>111</td><td></td></tr>
<tr><td>4</td><td>2012</td><td>0</td><td>105</td><td></td></tr>
<tr><td>5</td><td>2010</td><td>0</td><td>101</td><td></td></tr>
<tr><td>6</td><td>2019</td><td>0</td><td>96</td><td></td></tr>
<tr><td>7</td><td>2011</td><td>0</td><td>95</td><td></td></tr>
<tr><td>8</td><td>2013</td><td>0</td><td>95</td><td></td></tr>
<tr><td>9</td><td>2009</td><td>0</td><td>90</td><td></td></tr>
<tr><td>10</td><td>2008</td><td>0</td><td>71</td><td></td></tr>

<tr><td colspan="5"><b>Less Points In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2018</td><td>0</td><td>67</td><td></td></tr>
<tr><td>2</td><td>2008</td><td>0</td><td>71</td><td></td></tr>
<tr><td>3</td><td>2017</td><td>0</td><td>87</td><td></td></tr>
<tr><td>4</td><td>2009</td><td>0</td><td>90</td><td></td></tr>
<tr><td>5</td><td>2011</td><td>0</td><td>95</td><td></td></tr>
<tr><td>6</td><td>2013</td><td>0</td><td>95</td><td></td></tr>
<tr><td>7</td><td>2019</td><td>0</td><td>96</td><td></td></tr>
<tr><td>8</td><td>2010</td><td>0</td><td>101</td><td></td></tr>
<tr><td>9</td><td>2012</td><td>0</td><td>105</td><td></td></tr>

<tr><td colspan="5"><b>Most Win Home In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>0</td><td>0</td><td>32000</td><td></td></tr>
<tr><td>2</td><td>0</td><td>0</td><td>32000</td><td></td></tr>

<tr><td colspan="5"><b>Most Win Visitor In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>0</td><td>0</td><td>32000</td><td></td></tr>
<tr><td>2</td><td>0</td><td>0</td><td>32000</td><td></td></tr>

</table></div>
<h1 class="TeamRecordsPro_TOR"><a id="MapleLeafs">Maple Leafs</a></h1>
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
<br /><table class="STHSRecordTable">
<tr><td colspan="5"><b>Most Goals in 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2010</td><td>1203</td><td>9</td><td></td></tr><tr><td>2</td><td>2009</td><td>26</td><td>8</td><td></td></tr><tr><td>3</td><td>2010</td><td>105</td><td>8</td><td></td></tr><tr><td>4</td><td>2011</td><td>1223</td><td>8</td><td></td></tr><tr><td>5</td><td>2012</td><td>1210</td><td>8</td><td></td></tr><tr><td>6</td><td>2016</td><td>1224</td><td>8</td><td></td></tr><tr><td>7</td><td>2010</td><td>210</td><td>7</td><td></td></tr><tr><td>8</td><td>2010</td><td>1056</td><td>7</td><td></td></tr><tr><td>9</td><td>2011</td><td>1157</td><td>7</td><td></td></tr><tr><td>10</td><td>2012</td><td>1108</td><td>7</td><td></td></tr>
<tr><td colspan="5"><b>Most Goals in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2016</td><td>0</td><td>263</td><td></td></tr>
<tr><td>2</td><td>2012</td><td>0</td><td>261</td><td></td></tr>
<tr><td>3</td><td>2015</td><td>0</td><td>251</td><td></td></tr>
<tr><td>4</td><td>2018</td><td>0</td><td>249</td><td></td></tr>
<tr><td>5</td><td>2009</td><td>0</td><td>245</td><td></td></tr>
<tr><td>6</td><td>2017</td><td>0</td><td>240</td><td></td></tr>
<tr><td>7</td><td>2011</td><td>0</td><td>232</td><td></td></tr>
<tr><td>8</td><td>2014</td><td>0</td><td>230</td><td></td></tr>
<tr><td>9</td><td>2013</td><td>0</td><td>228</td><td></td></tr>
<tr><td>10</td><td>2010</td><td>0</td><td>214</td><td></td></tr>

<tr><td colspan="5"><b>Less Goal in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2008</td><td>0</td><td>184</td><td></td></tr>
<tr><td>2</td><td>2019</td><td>0</td><td>186</td><td></td></tr>
<tr><td>3</td><td>2010</td><td>0</td><td>214</td><td></td></tr>
<tr><td>4</td><td>2013</td><td>0</td><td>228</td><td></td></tr>
<tr><td>5</td><td>2014</td><td>0</td><td>230</td><td></td></tr>
<tr><td>6</td><td>2011</td><td>0</td><td>232</td><td></td></tr>
<tr><td>7</td><td>2009</td><td>0</td><td>245</td><td></td></tr>
<tr><td>8</td><td>2018</td><td>0</td><td>249</td><td></td></tr>
<tr><td>9</td><td>2012</td><td>0</td><td>261</td><td></td></tr>

<tr><td colspan="5"><b>Most Goals Against in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2008</td><td>0</td><td>297</td><td></td></tr>
<tr><td>2</td><td>2010</td><td>0</td><td>274</td><td></td></tr>
<tr><td>3</td><td>2009</td><td>0</td><td>251</td><td></td></tr>
<tr><td>4</td><td>2016</td><td>0</td><td>239</td><td></td></tr>
<tr><td>5</td><td>2019</td><td>0</td><td>229</td><td></td></tr>
<tr><td>6</td><td>2018</td><td>0</td><td>223</td><td></td></tr>
<tr><td>7</td><td>2014</td><td>0</td><td>215</td><td></td></tr>
<tr><td>8</td><td>2013</td><td>0</td><td>213</td><td></td></tr>
<tr><td>9</td><td>2012</td><td>0</td><td>208</td><td></td></tr>
<tr><td>10</td><td>2011</td><td>0</td><td>202</td><td></td></tr>

<tr><td colspan="5"><b>Less Goal Against in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2011</td><td>0</td><td>202</td><td></td></tr>
<tr><td>2</td><td>2017</td><td>0</td><td>202</td><td></td></tr>
<tr><td>3</td><td>2012</td><td>0</td><td>208</td><td></td></tr>
<tr><td>4</td><td>2015</td><td>0</td><td>211</td><td></td></tr>
<tr><td>5</td><td>2013</td><td>0</td><td>213</td><td></td></tr>
<tr><td>6</td><td>2014</td><td>0</td><td>215</td><td></td></tr>
<tr><td>7</td><td>2018</td><td>0</td><td>223</td><td></td></tr>
<tr><td>8</td><td>2019</td><td>0</td><td>229</td><td></td></tr>
<tr><td>9</td><td>2009</td><td>0</td><td>251</td><td></td></tr>
<tr><td>10</td><td>2010</td><td>0</td><td>274</td><td></td></tr>

<tr><td colspan="5"><b>Most Assists in 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2010</td><td>1203</td><td>17</td><td></td></tr><tr><td>2</td><td>2010</td><td>105</td><td>15</td><td></td></tr><tr><td>3</td><td>2009</td><td>26</td><td>14</td><td></td></tr><tr><td>4</td><td>2011</td><td>1223</td><td>14</td><td></td></tr><tr><td>5</td><td>2012</td><td>1210</td><td>14</td><td></td></tr><tr><td>6</td><td>2014</td><td>1</td><td>14</td><td></td></tr><tr><td>7</td><td>2010</td><td>210</td><td>13</td><td></td></tr><tr><td>8</td><td>2010</td><td>1056</td><td>13</td><td></td></tr><tr><td>9</td><td>2012</td><td>1108</td><td>13</td><td></td></tr><tr><td>10</td><td>2015</td><td>606</td><td>13</td><td></td></tr>
<tr><td colspan="5"><b>Most Assists in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2016</td><td>0</td><td>461</td><td></td></tr>
<tr><td>2</td><td>2018</td><td>0</td><td>452</td><td></td></tr>
<tr><td>3</td><td>2012</td><td>0</td><td>450</td><td></td></tr>
<tr><td>4</td><td>2015</td><td>0</td><td>436</td><td></td></tr>
<tr><td>5</td><td>2009</td><td>0</td><td>435</td><td></td></tr>
<tr><td>6</td><td>2017</td><td>0</td><td>424</td><td></td></tr>
<tr><td>7</td><td>2014</td><td>0</td><td>406</td><td></td></tr>
<tr><td>8</td><td>2013</td><td>0</td><td>400</td><td></td></tr>
<tr><td>9</td><td>2010</td><td>0</td><td>382</td><td></td></tr>
<tr><td>10</td><td>2011</td><td>0</td><td>375</td><td></td></tr>

<tr><td colspan="5"><b>Less Assist in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2019</td><td>0</td><td>321</td><td></td></tr>
<tr><td>2</td><td>2008</td><td>0</td><td>329</td><td></td></tr>
<tr><td>3</td><td>2011</td><td>0</td><td>375</td><td></td></tr>
<tr><td>4</td><td>2010</td><td>0</td><td>382</td><td></td></tr>
<tr><td>5</td><td>2013</td><td>0</td><td>400</td><td></td></tr>
<tr><td>6</td><td>2014</td><td>0</td><td>406</td><td></td></tr>
<tr><td>7</td><td>2009</td><td>0</td><td>435</td><td></td></tr>
<tr><td>8</td><td>2012</td><td>0</td><td>450</td><td></td></tr>

<tr><td colspan="5"><b>Most Game Points in 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2010</td><td>1203</td><td>26</td><td></td></tr><tr><td>2</td><td>2010</td><td>105</td><td>23</td><td></td></tr><tr><td>3</td><td>2009</td><td>26</td><td>22</td><td></td></tr><tr><td>4</td><td>2011</td><td>1223</td><td>22</td><td></td></tr><tr><td>5</td><td>2012</td><td>1210</td><td>22</td><td></td></tr><tr><td>6</td><td>2014</td><td>1</td><td>21</td><td></td></tr><tr><td>7</td><td>2016</td><td>1224</td><td>21</td><td></td></tr><tr><td>8</td><td>2010</td><td>210</td><td>20</td><td></td></tr><tr><td>9</td><td>2010</td><td>1056</td><td>20</td><td></td></tr><tr><td>10</td><td>2012</td><td>1108</td><td>20</td><td></td></tr>
<tr><td colspan="5"><b>Most Game Points in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>0</td><td>0</td><td>32000</td><td></td></tr>
<tr><td>2</td><td>0</td><td>0</td><td>32000</td><td></td></tr>

<tr><td colspan="5"><b>Less Game Point In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2019</td><td>0</td><td>507</td><td></td></tr>
<tr><td>2</td><td>2008</td><td>0</td><td>513</td><td></td></tr>
<tr><td>3</td><td>2010</td><td>0</td><td>596</td><td></td></tr>
<tr><td>4</td><td>2011</td><td>0</td><td>607</td><td></td></tr>
<tr><td>5</td><td>2013</td><td>0</td><td>628</td><td></td></tr>
<tr><td>6</td><td>2014</td><td>0</td><td>636</td><td></td></tr>
<tr><td>7</td><td>2009</td><td>0</td><td>680</td><td></td></tr>
<tr><td>8</td><td>2018</td><td>0</td><td>701</td><td></td></tr>
<tr><td>9</td><td>2012</td><td>0</td><td>711</td><td></td></tr>

<tr><td colspan="5"><b>Most Shots In 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2018</td><td>437</td><td>63</td><td></td></tr><tr><td>2</td><td>2016</td><td>1220</td><td>56</td><td></td></tr><tr><td>3</td><td>2017</td><td>1153</td><td>54</td><td></td></tr><tr><td>4</td><td>2017</td><td>450</td><td>53</td><td></td></tr><tr><td>5</td><td>2015</td><td>457</td><td>52</td><td></td></tr><tr><td>6</td><td>2017</td><td>1260</td><td>51</td><td></td></tr><tr><td>7</td><td>2017</td><td>1</td><td>50</td><td></td></tr><tr><td>8</td><td>2008</td><td>54</td><td>49</td><td></td></tr><tr><td>9</td><td>2017</td><td>298</td><td>49</td><td></td></tr><tr><td>10</td><td>2017</td><td>909</td><td>49</td><td></td></tr>
<tr><td colspan="5"><b>Most Shots In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2018</td><td>0</td><td>2812</td><td></td></tr>
<tr><td>2</td><td>2017</td><td>0</td><td>2798</td><td></td></tr>
<tr><td>3</td><td>2012</td><td>0</td><td>2474</td><td></td></tr>
<tr><td>4</td><td>2019</td><td>0</td><td>2473</td><td></td></tr>
<tr><td>5</td><td>2016</td><td>0</td><td>2442</td><td></td></tr>
<tr><td>6</td><td>2013</td><td>0</td><td>2359</td><td></td></tr>
<tr><td>7</td><td>2014</td><td>0</td><td>2324</td><td></td></tr>
<tr><td>8</td><td>2015</td><td>0</td><td>2283</td><td></td></tr>
<tr><td>9</td><td>2011</td><td>0</td><td>2261</td><td></td></tr>
<tr><td>10</td><td>2009</td><td>0</td><td>2208</td><td></td></tr>

<tr><td colspan="5"><b>Less Shots In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2008</td><td>0</td><td>1870</td><td></td></tr>
<tr><td>2</td><td>2010</td><td>0</td><td>1963</td><td></td></tr>
<tr><td>3</td><td>2009</td><td>0</td><td>2208</td><td></td></tr>
<tr><td>4</td><td>2011</td><td>0</td><td>2261</td><td></td></tr>
<tr><td>5</td><td>2015</td><td>0</td><td>2283</td><td></td></tr>
<tr><td>6</td><td>2014</td><td>0</td><td>2324</td><td></td></tr>
<tr><td>7</td><td>2013</td><td>0</td><td>2359</td><td></td></tr>
<tr><td>8</td><td>2019</td><td>0</td><td>2473</td><td></td></tr>
<tr><td>9</td><td>2012</td><td>0</td><td>2474</td><td></td></tr>

<tr><td colspan="5"><b>Most Shots Blocked In 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2017</td><td>754</td><td>23</td><td></td></tr><tr><td>2</td><td>2010</td><td>283</td><td>19</td><td></td></tr><tr><td>3</td><td>2010</td><td>665</td><td>19</td><td></td></tr><tr><td>4</td><td>2017</td><td>458</td><td>19</td><td></td></tr><tr><td>5</td><td>2015</td><td>600</td><td>18</td><td></td></tr><tr><td>6</td><td>2016</td><td>796</td><td>18</td><td></td></tr><tr><td>7</td><td>2017</td><td>584</td><td>18</td><td></td></tr><tr><td>8</td><td>2018</td><td>315</td><td>18</td><td></td></tr><tr><td>9</td><td>2010</td><td>76</td><td>17</td><td></td></tr><tr><td>10</td><td>2013</td><td>119</td><td>17</td><td></td></tr>
<tr><td colspan="5"><b>Most Shots Blocked In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>0</td><td>0</td><td>32000</td><td></td></tr>
<tr><td>2</td><td>0</td><td>0</td><td>32000</td><td></td></tr>

<tr><td colspan="5"><b>Less Shots Block In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2014</td><td>0</td><td>585</td><td></td></tr>
<tr><td>2</td><td>2009</td><td>0</td><td>609</td><td></td></tr>
<tr><td>3</td><td>2013</td><td>0</td><td>614</td><td></td></tr>
<tr><td>4</td><td>2015</td><td>0</td><td>640</td><td></td></tr>
<tr><td>5</td><td>2012</td><td>0</td><td>654</td><td></td></tr>
<tr><td>6</td><td>2019</td><td>0</td><td>678</td><td></td></tr>
<tr><td>7</td><td>2010</td><td>0</td><td>720</td><td></td></tr>
<tr><td>8</td><td>2011</td><td>0</td><td>734</td><td></td></tr>
<tr><td>9</td><td>2008</td><td>0</td><td>749</td><td></td></tr>

<tr><td colspan="5"><b>Most Shots Against In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2008</td><td>0</td><td>2583</td><td></td></tr>
<tr><td>2</td><td>2010</td><td>0</td><td>2537</td><td></td></tr>
<tr><td>3</td><td>2018</td><td>0</td><td>2535</td><td></td></tr>
<tr><td>4</td><td>2019</td><td>0</td><td>2534</td><td></td></tr>
<tr><td>5</td><td>2017</td><td>0</td><td>2461</td><td></td></tr>
<tr><td>6</td><td>2011</td><td>0</td><td>2385</td><td></td></tr>
<tr><td>7</td><td>2015</td><td>0</td><td>2293</td><td></td></tr>
<tr><td>8</td><td>2016</td><td>0</td><td>2206</td><td></td></tr>
<tr><td>9</td><td>2014</td><td>0</td><td>2183</td><td></td></tr>
<tr><td>10</td><td>2013</td><td>0</td><td>2142</td><td></td></tr>

<tr><td colspan="5"><b>Less Shots Against In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2009</td><td>0</td><td>2102</td><td></td></tr>
<tr><td>2</td><td>2012</td><td>0</td><td>2125</td><td></td></tr>
<tr><td>3</td><td>2013</td><td>0</td><td>2142</td><td></td></tr>
<tr><td>4</td><td>2014</td><td>0</td><td>2183</td><td></td></tr>
<tr><td>5</td><td>2016</td><td>0</td><td>2206</td><td></td></tr>
<tr><td>6</td><td>2015</td><td>0</td><td>2293</td><td></td></tr>
<tr><td>7</td><td>2011</td><td>0</td><td>2385</td><td></td></tr>
<tr><td>8</td><td>2019</td><td>0</td><td>2534</td><td></td></tr>
<tr><td>9</td><td>2018</td><td>0</td><td>2535</td><td></td></tr>
<tr><td>10</td><td>2010</td><td>0</td><td>2537</td><td></td></tr>

<tr><td colspan="5"><b>Most Pim In 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2009</td><td>382</td><td>97</td><td></td></tr><tr><td>2</td><td>2016</td><td>650</td><td>74</td><td></td></tr><tr><td>3</td><td>2010</td><td>641</td><td>62</td><td></td></tr><tr><td>4</td><td>2009</td><td>184</td><td>61</td><td></td></tr><tr><td>5</td><td>2011</td><td>822</td><td>59</td><td></td></tr><tr><td>6</td><td>2013</td><td>22</td><td>59</td><td></td></tr><tr><td>7</td><td>2009</td><td>390</td><td>58</td><td></td></tr><tr><td>8</td><td>2010</td><td>15</td><td>57</td><td></td></tr><tr><td>9</td><td>2017</td><td>64</td><td>55</td><td></td></tr><tr><td>10</td><td>2015</td><td>157</td><td>52</td><td></td></tr>
<tr><td colspan="5"><b>Most Pim In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2009</td><td>0</td><td>1628</td><td></td></tr>
<tr><td>2</td><td>2010</td><td>0</td><td>1602</td><td></td></tr>
<tr><td>3</td><td>2008</td><td>0</td><td>1522</td><td></td></tr>
<tr><td>4</td><td>2011</td><td>0</td><td>1286</td><td></td></tr>
<tr><td>5</td><td>2016</td><td>0</td><td>1174</td><td></td></tr>
<tr><td>6</td><td>2015</td><td>0</td><td>974</td><td></td></tr>
<tr><td>7</td><td>2014</td><td>0</td><td>961</td><td></td></tr>
<tr><td>8</td><td>2013</td><td>0</td><td>939</td><td></td></tr>
<tr><td>9</td><td>2012</td><td>0</td><td>904</td><td></td></tr>
<tr><td>10</td><td>2018</td><td>0</td><td>881</td><td></td></tr>

<tr><td colspan="5"><b>Less Pim In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2017</td><td>0</td><td>700</td><td></td></tr>
<tr><td>2</td><td>2019</td><td>0</td><td>804</td><td></td></tr>
<tr><td>3</td><td>2018</td><td>0</td><td>881</td><td></td></tr>
<tr><td>4</td><td>2012</td><td>0</td><td>904</td><td></td></tr>
<tr><td>5</td><td>2013</td><td>0</td><td>939</td><td></td></tr>
<tr><td>6</td><td>2014</td><td>0</td><td>961</td><td></td></tr>
<tr><td>7</td><td>2015</td><td>0</td><td>974</td><td></td></tr>
<tr><td>8</td><td>2016</td><td>0</td><td>1174</td><td></td></tr>
<tr><td>9</td><td>2011</td><td>0</td><td>1286</td><td></td></tr>
<tr><td>10</td><td>2008</td><td>0</td><td>1522</td><td></td></tr>

<tr><td colspan="5"><b>Most Hits In 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2010</td><td>105</td><td>43</td><td></td></tr><tr><td>2</td><td>2019</td><td>902</td><td>43</td><td><a href="OTHL-902.html">Game Direct Link</a></td></tr><tr><td>3</td><td>2015</td><td>736</td><td>41</td><td></td></tr><tr><td>4</td><td>2019</td><td>29</td><td>40</td><td><a href="OTHL-29.html">Game Direct Link</a></td></tr><tr><td>5</td><td>2008</td><td>334</td><td>37</td><td></td></tr><tr><td>6</td><td>2016</td><td>4</td><td>37</td><td></td></tr><tr><td>7</td><td>2012</td><td>78</td><td>36</td><td></td></tr><tr><td>8</td><td>2012</td><td>778</td><td>36</td><td></td></tr><tr><td>9</td><td>2015</td><td>1070</td><td>36</td><td></td></tr><tr><td>10</td><td>2016</td><td>211</td><td>36</td><td></td></tr>
<tr><td colspan="5"><b>Most Hits In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2016</td><td>0</td><td>1833</td><td></td></tr>
<tr><td>2</td><td>2018</td><td>0</td><td>1833</td><td></td></tr>
<tr><td>3</td><td>2012</td><td>0</td><td>1799</td><td></td></tr>
<tr><td>4</td><td>2011</td><td>0</td><td>1797</td><td></td></tr>
<tr><td>5</td><td>2013</td><td>0</td><td>1792</td><td></td></tr>
<tr><td>6</td><td>2014</td><td>0</td><td>1792</td><td></td></tr>
<tr><td>7</td><td>2019</td><td>0</td><td>1768</td><td></td></tr>
<tr><td>8</td><td>2015</td><td>0</td><td>1755</td><td></td></tr>
<tr><td>9</td><td>2010</td><td>0</td><td>1703</td><td></td></tr>
<tr><td>10</td><td>2008</td><td>0</td><td>1689</td><td></td></tr>

<tr><td colspan="5"><b>Less Hit In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2009</td><td>0</td><td>1635</td><td></td></tr>
<tr><td>2</td><td>2008</td><td>0</td><td>1689</td><td></td></tr>
<tr><td>3</td><td>2010</td><td>0</td><td>1703</td><td></td></tr>
<tr><td>4</td><td>2017</td><td>0</td><td>1754</td><td></td></tr>
<tr><td>5</td><td>2015</td><td>0</td><td>1755</td><td></td></tr>
<tr><td>6</td><td>2019</td><td>0</td><td>1768</td><td></td></tr>
<tr><td>7</td><td>2013</td><td>0</td><td>1792</td><td></td></tr>
<tr><td>8</td><td>2014</td><td>0</td><td>1792</td><td></td></tr>
<tr><td>9</td><td>2011</td><td>0</td><td>1797</td><td></td></tr>
<tr><td>10</td><td>2012</td><td>0</td><td>1799</td><td></td></tr>

<tr><td colspan="5"><b>Most Empty Net Goal In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2008</td><td>0</td><td>3</td><td></td></tr>
<tr><td>2</td><td>2011</td><td>0</td><td>3</td><td></td></tr>
<tr><td>3</td><td>2013</td><td>0</td><td>3</td><td></td></tr>
<tr><td>4</td><td>2018</td><td>0</td><td>3</td><td></td></tr>
<tr><td>5</td><td>2014</td><td>0</td><td>2</td><td></td></tr>
<tr><td>6</td><td>2016</td><td>0</td><td>2</td><td></td></tr>
<tr><td>7</td><td>2019</td><td>0</td><td>2</td><td></td></tr>
<tr><td>8</td><td>2009</td><td>0</td><td>1</td><td></td></tr>
<tr><td>9</td><td>2010</td><td>0</td><td>1</td><td></td></tr>
<tr><td>10</td><td>2012</td><td>0</td><td>1</td><td></td></tr>

<tr><td colspan="5"><b>Best PP In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2015</td><td>0</td><td>25.10%</td><td></td></tr>
<tr><td>2</td><td>2011</td><td>0</td><td>23.80%</td><td></td></tr>
<tr><td>3</td><td>2017</td><td>0</td><td>21.30%</td><td></td></tr>
<tr><td>4</td><td>2018</td><td>0</td><td>19.30%</td><td></td></tr>
<tr><td>5</td><td>2016</td><td>0</td><td>18.50%</td><td></td></tr>
<tr><td>6</td><td>2010</td><td>0</td><td>18.20%</td><td></td></tr>
<tr><td>7</td><td>2013</td><td>0</td><td>18.20%</td><td></td></tr>
<tr><td>8</td><td>2009</td><td>0</td><td>17.20%</td><td></td></tr>
<tr><td>9</td><td>2012</td><td>0</td><td>17.10%</td><td></td></tr>
<tr><td>10</td><td>2019</td><td>0</td><td>16.30%</td><td></td></tr>

<tr><td colspan="5"><b>Best PK In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2015</td><td>0</td><td>88.00%</td><td></td></tr>
<tr><td>2</td><td>2014</td><td>0</td><td>86.80%</td><td></td></tr>
<tr><td>3</td><td>2013</td><td>0</td><td>85.00%</td><td></td></tr>
<tr><td>4</td><td>2018</td><td>0</td><td>84.40%</td><td></td></tr>
<tr><td>5</td><td>2012</td><td>0</td><td>84.20%</td><td></td></tr>
<tr><td>6</td><td>2016</td><td>0</td><td>83.90%</td><td></td></tr>
<tr><td>7</td><td>2009</td><td>0</td><td>83.10%</td><td></td></tr>
<tr><td>8</td><td>2008</td><td>0</td><td>82.60%</td><td></td></tr>
<tr><td>9</td><td>2011</td><td>0</td><td>82.60%</td><td></td></tr>
<tr><td>10</td><td>2019</td><td>0</td><td>82.00%</td><td></td></tr>

<tr><td colspan="5"><b>Worse PP In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2008</td><td>0</td><td>11.10%</td><td></td></tr>
<tr><td>2</td><td>2019</td><td>0</td><td>16.30%</td><td></td></tr>
<tr><td>3</td><td>2014</td><td>0</td><td>17.00%</td><td></td></tr>
<tr><td>4</td><td>2012</td><td>0</td><td>17.10%</td><td></td></tr>
<tr><td>5</td><td>2009</td><td>0</td><td>17.20%</td><td></td></tr>
<tr><td>6</td><td>2010</td><td>0</td><td>18.20%</td><td></td></tr>
<tr><td>7</td><td>2013</td><td>0</td><td>18.20%</td><td></td></tr>
<tr><td>8</td><td>2018</td><td>0</td><td>19.30%</td><td></td></tr>
<tr><td>9</td><td>2011</td><td>0</td><td>23.80%</td><td></td></tr>

<tr><td colspan="5"><b>Worse PK In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2010</td><td>0</td><td>81.80%</td><td></td></tr>
<tr><td>2</td><td>2019</td><td>0</td><td>82.00%</td><td></td></tr>
<tr><td>3</td><td>2017</td><td>0</td><td>82.20%</td><td></td></tr>
<tr><td>4</td><td>2008</td><td>0</td><td>82.60%</td><td></td></tr>
<tr><td>5</td><td>2011</td><td>0</td><td>82.60%</td><td></td></tr>
<tr><td>6</td><td>2009</td><td>0</td><td>83.10%</td><td></td></tr>
<tr><td>7</td><td>2016</td><td>0</td><td>83.90%</td><td></td></tr>
<tr><td>8</td><td>2012</td><td>0</td><td>84.20%</td><td></td></tr>

<tr><td colspan="5"><b>Most Win In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2011</td><td>0</td><td>51</td><td></td></tr>
<tr><td>2</td><td>2012</td><td>0</td><td>50</td><td></td></tr>
<tr><td>3</td><td>2017</td><td>0</td><td>48</td><td></td></tr>
<tr><td>4</td><td>2013</td><td>0</td><td>46</td><td></td></tr>
<tr><td>5</td><td>2015</td><td>0</td><td>46</td><td></td></tr>
<tr><td>6</td><td>2016</td><td>0</td><td>46</td><td></td></tr>
<tr><td>7</td><td>2014</td><td>0</td><td>45</td><td></td></tr>
<tr><td>8</td><td>2018</td><td>0</td><td>43</td><td></td></tr>
<tr><td>9</td><td>2009</td><td>0</td><td>40</td><td></td></tr>
<tr><td>10</td><td>2019</td><td>0</td><td>33</td><td></td></tr>

<tr><td colspan="5"><b>Less Win In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2008</td><td>0</td><td>16</td><td></td></tr>
<tr><td>2</td><td>2010</td><td>0</td><td>26</td><td></td></tr>
<tr><td>3</td><td>2019</td><td>0</td><td>33</td><td></td></tr>
<tr><td>4</td><td>2009</td><td>0</td><td>40</td><td></td></tr>
<tr><td>5</td><td>2018</td><td>0</td><td>43</td><td></td></tr>
<tr><td>6</td><td>2014</td><td>0</td><td>45</td><td></td></tr>
<tr><td>7</td><td>2013</td><td>0</td><td>46</td><td></td></tr>
<tr><td>8</td><td>2012</td><td>0</td><td>50</td><td></td></tr>
<tr><td>9</td><td>2011</td><td>0</td><td>51</td><td></td></tr>

<tr><td colspan="5"><b>Most Lost In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2008</td><td>0</td><td>57</td><td></td></tr>
<tr><td>2</td><td>2010</td><td>0</td><td>56</td><td></td></tr>
<tr><td>3</td><td>2019</td><td>0</td><td>49</td><td></td></tr>
<tr><td>4</td><td>2009</td><td>0</td><td>42</td><td></td></tr>
<tr><td>5</td><td>2018</td><td>0</td><td>39</td><td></td></tr>
<tr><td>6</td><td>2014</td><td>0</td><td>37</td><td></td></tr>
<tr><td>7</td><td>2013</td><td>0</td><td>36</td><td></td></tr>
<tr><td>8</td><td>2012</td><td>0</td><td>32</td><td></td></tr>
<tr><td>9</td><td>2011</td><td>0</td><td>31</td><td></td></tr>

<tr><td colspan="5"><b>Less Lost In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2011</td><td>0</td><td>31</td><td></td></tr>
<tr><td>2</td><td>2012</td><td>0</td><td>32</td><td></td></tr>
<tr><td>3</td><td>2017</td><td>0</td><td>34</td><td></td></tr>
<tr><td>4</td><td>2013</td><td>0</td><td>36</td><td></td></tr>
<tr><td>5</td><td>2015</td><td>0</td><td>36</td><td></td></tr>
<tr><td>6</td><td>2016</td><td>0</td><td>36</td><td></td></tr>
<tr><td>7</td><td>2014</td><td>0</td><td>37</td><td></td></tr>
<tr><td>8</td><td>2018</td><td>0</td><td>39</td><td></td></tr>
<tr><td>9</td><td>2009</td><td>0</td><td>42</td><td></td></tr>
<tr><td>10</td><td>2019</td><td>0</td><td>49</td><td></td></tr>

<tr><td colspan="5"><b>Most Point In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2011</td><td>0</td><td>108</td><td></td></tr>
<tr><td>2</td><td>2012</td><td>0</td><td>108</td><td></td></tr>
<tr><td>3</td><td>2013</td><td>0</td><td>101</td><td></td></tr>
<tr><td>4</td><td>2017</td><td>0</td><td>100</td><td></td></tr>
<tr><td>5</td><td>2015</td><td>0</td><td>97</td><td></td></tr>
<tr><td>6</td><td>2018</td><td>0</td><td>97</td><td></td></tr>
<tr><td>7</td><td>2016</td><td>0</td><td>96</td><td></td></tr>
<tr><td>8</td><td>2014</td><td>0</td><td>95</td><td></td></tr>
<tr><td>9</td><td>2009</td><td>0</td><td>85</td><td></td></tr>
<tr><td>10</td><td>2019</td><td>0</td><td>72</td><td></td></tr>

<tr><td colspan="5"><b>Less Points In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2008</td><td>0</td><td>46</td><td></td></tr>
<tr><td>2</td><td>2010</td><td>0</td><td>61</td><td></td></tr>
<tr><td>3</td><td>2019</td><td>0</td><td>72</td><td></td></tr>
<tr><td>4</td><td>2009</td><td>0</td><td>85</td><td></td></tr>
<tr><td>5</td><td>2014</td><td>0</td><td>95</td><td></td></tr>
<tr><td>6</td><td>2016</td><td>0</td><td>96</td><td></td></tr>
<tr><td>7</td><td>2015</td><td>0</td><td>97</td><td></td></tr>
<tr><td>8</td><td>2018</td><td>0</td><td>97</td><td></td></tr>
<tr><td>9</td><td>2013</td><td>0</td><td>101</td><td></td></tr>
<tr><td>10</td><td>2011</td><td>0</td><td>108</td><td></td></tr>

<tr><td colspan="5"><b>Most Win Home In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>0</td><td>0</td><td>32000</td><td></td></tr>
<tr><td>2</td><td>0</td><td>0</td><td>32000</td><td></td></tr>

<tr><td colspan="5"><b>Most Win Visitor In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>0</td><td>0</td><td>32000</td><td></td></tr>
<tr><td>2</td><td>0</td><td>0</td><td>32000</td><td></td></tr>

</table></div>
<h1 class="TeamRecordsPro_EDM"><a id="Oilers">Oilers</a></h1>
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
<br /><table class="STHSRecordTable">
<tr><td colspan="5"><b>Most Goals in 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2008</td><td>376</td><td>8</td><td></td></tr><tr><td>2</td><td>2008</td><td>1154</td><td>8</td><td></td></tr><tr><td>3</td><td>2012</td><td>522</td><td>8</td><td></td></tr><tr><td>4</td><td>2014</td><td>295</td><td>8</td><td></td></tr><tr><td>5</td><td>2014</td><td>1141</td><td>8</td><td></td></tr><tr><td>6</td><td>2015</td><td>90</td><td>8</td><td></td></tr><tr><td>7</td><td>2015</td><td>525</td><td>8</td><td></td></tr><tr><td>8</td><td>2016</td><td>998</td><td>8</td><td></td></tr><tr><td>9</td><td>2009</td><td>509</td><td>7</td><td></td></tr><tr><td>10</td><td>2009</td><td>1124</td><td>7</td><td></td></tr>
<tr><td colspan="5"><b>Most Goals in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2008</td><td>0</td><td>281</td><td></td></tr>
<tr><td>2</td><td>2012</td><td>0</td><td>272</td><td></td></tr>
<tr><td>3</td><td>2014</td><td>0</td><td>268</td><td></td></tr>
<tr><td>4</td><td>2009</td><td>0</td><td>267</td><td></td></tr>
<tr><td>5</td><td>2019</td><td>0</td><td>260</td><td></td></tr>
<tr><td>6</td><td>2015</td><td>0</td><td>259</td><td></td></tr>
<tr><td>7</td><td>2010</td><td>0</td><td>245</td><td></td></tr>
<tr><td>8</td><td>2013</td><td>0</td><td>230</td><td></td></tr>
<tr><td>9</td><td>2018</td><td>0</td><td>230</td><td></td></tr>
<tr><td>10</td><td>2011</td><td>0</td><td>228</td><td></td></tr>

<tr><td colspan="5"><b>Less Goal in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2017</td><td>0</td><td>202</td><td></td></tr>
<tr><td>2</td><td>2011</td><td>0</td><td>228</td><td></td></tr>
<tr><td>3</td><td>2013</td><td>0</td><td>230</td><td></td></tr>
<tr><td>4</td><td>2018</td><td>0</td><td>230</td><td></td></tr>
<tr><td>5</td><td>2010</td><td>0</td><td>245</td><td></td></tr>
<tr><td>6</td><td>2015</td><td>0</td><td>259</td><td></td></tr>
<tr><td>7</td><td>2016</td><td>0</td><td>259</td><td></td></tr>
<tr><td>8</td><td>2019</td><td>0</td><td>260</td><td></td></tr>
<tr><td>9</td><td>2009</td><td>0</td><td>267</td><td></td></tr>
<tr><td>10</td><td>2014</td><td>0</td><td>268</td><td></td></tr>

<tr><td colspan="5"><b>Most Goals Against in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2008</td><td>0</td><td>255</td><td></td></tr>
<tr><td>2</td><td>2009</td><td>0</td><td>244</td><td></td></tr>
<tr><td>3</td><td>2015</td><td>0</td><td>224</td><td></td></tr>
<tr><td>4</td><td>2014</td><td>0</td><td>221</td><td></td></tr>
<tr><td>5</td><td>2019</td><td>0</td><td>221</td><td></td></tr>
<tr><td>6</td><td>2010</td><td>0</td><td>216</td><td></td></tr>
<tr><td>7</td><td>2012</td><td>0</td><td>198</td><td></td></tr>
<tr><td>8</td><td>2013</td><td>0</td><td>195</td><td></td></tr>
<tr><td>9</td><td>2011</td><td>0</td><td>188</td><td></td></tr>
<tr><td>10</td><td>2018</td><td>0</td><td>183</td><td></td></tr>

<tr><td colspan="5"><b>Less Goal Against in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2018</td><td>0</td><td>183</td><td></td></tr>
<tr><td>2</td><td>2011</td><td>0</td><td>188</td><td></td></tr>
<tr><td>3</td><td>2013</td><td>0</td><td>195</td><td></td></tr>
<tr><td>4</td><td>2012</td><td>0</td><td>198</td><td></td></tr>
<tr><td>5</td><td>2017</td><td>0</td><td>202</td><td></td></tr>
<tr><td>6</td><td>2016</td><td>0</td><td>207</td><td></td></tr>
<tr><td>7</td><td>2010</td><td>0</td><td>216</td><td></td></tr>
<tr><td>8</td><td>2014</td><td>0</td><td>221</td><td></td></tr>
<tr><td>9</td><td>2019</td><td>0</td><td>221</td><td></td></tr>
<tr><td>10</td><td>2009</td><td>0</td><td>244</td><td></td></tr>

<tr><td colspan="5"><b>Most Assists in 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2014</td><td>1141</td><td>16</td><td></td></tr><tr><td>2</td><td>2008</td><td>1154</td><td>15</td><td></td></tr><tr><td>3</td><td>2014</td><td>295</td><td>15</td><td></td></tr><tr><td>4</td><td>2008</td><td>376</td><td>14</td><td></td></tr><tr><td>5</td><td>2009</td><td>1124</td><td>14</td><td></td></tr><tr><td>6</td><td>2010</td><td>69</td><td>14</td><td></td></tr><tr><td>7</td><td>2010</td><td>480</td><td>14</td><td></td></tr><tr><td>8</td><td>2012</td><td>522</td><td>14</td><td></td></tr><tr><td>9</td><td>2012</td><td>637</td><td>14</td><td></td></tr><tr><td>10</td><td>2012</td><td>753</td><td>14</td><td></td></tr>
<tr><td colspan="5"><b>Most Assists in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2008</td><td>0</td><td>485</td><td></td></tr>
<tr><td>2</td><td>2009</td><td>0</td><td>472</td><td></td></tr>
<tr><td>3</td><td>2012</td><td>0</td><td>472</td><td></td></tr>
<tr><td>4</td><td>2014</td><td>0</td><td>466</td><td></td></tr>
<tr><td>5</td><td>2019</td><td>0</td><td>459</td><td></td></tr>
<tr><td>6</td><td>2015</td><td>0</td><td>458</td><td></td></tr>
<tr><td>7</td><td>2010</td><td>0</td><td>446</td><td></td></tr>
<tr><td>8</td><td>2018</td><td>0</td><td>414</td><td></td></tr>
<tr><td>9</td><td>2013</td><td>0</td><td>396</td><td></td></tr>
<tr><td>10</td><td>2011</td><td>0</td><td>371</td><td></td></tr>

<tr><td colspan="5"><b>Less Assist in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2017</td><td>0</td><td>354</td><td></td></tr>
<tr><td>2</td><td>2011</td><td>0</td><td>371</td><td></td></tr>
<tr><td>3</td><td>2013</td><td>0</td><td>396</td><td></td></tr>
<tr><td>4</td><td>2018</td><td>0</td><td>414</td><td></td></tr>
<tr><td>5</td><td>2010</td><td>0</td><td>446</td><td></td></tr>
<tr><td>6</td><td>2016</td><td>0</td><td>457</td><td></td></tr>
<tr><td>7</td><td>2015</td><td>0</td><td>458</td><td></td></tr>
<tr><td>8</td><td>2019</td><td>0</td><td>459</td><td></td></tr>
<tr><td>9</td><td>2014</td><td>0</td><td>466</td><td></td></tr>
<tr><td>10</td><td>2009</td><td>0</td><td>472</td><td></td></tr>

<tr><td colspan="5"><b>Most Game Points in 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2014</td><td>1141</td><td>24</td><td></td></tr><tr><td>2</td><td>2008</td><td>1154</td><td>23</td><td></td></tr><tr><td>3</td><td>2014</td><td>295</td><td>23</td><td></td></tr><tr><td>4</td><td>2008</td><td>376</td><td>22</td><td></td></tr><tr><td>5</td><td>2012</td><td>522</td><td>22</td><td></td></tr><tr><td>6</td><td>2015</td><td>525</td><td>22</td><td></td></tr><tr><td>7</td><td>2009</td><td>1124</td><td>21</td><td></td></tr><tr><td>8</td><td>2010</td><td>69</td><td>21</td><td></td></tr><tr><td>9</td><td>2010</td><td>480</td><td>21</td><td></td></tr><tr><td>10</td><td>2012</td><td>637</td><td>21</td><td></td></tr>
<tr><td colspan="5"><b>Most Game Points in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>0</td><td>0</td><td>32000</td><td></td></tr>
<tr><td>2</td><td>0</td><td>0</td><td>32000</td><td></td></tr>

<tr><td colspan="5"><b>Less Game Point In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2017</td><td>0</td><td>556</td><td></td></tr>
<tr><td>2</td><td>2011</td><td>0</td><td>599</td><td></td></tr>
<tr><td>3</td><td>2013</td><td>0</td><td>626</td><td></td></tr>
<tr><td>4</td><td>2018</td><td>0</td><td>644</td><td></td></tr>
<tr><td>5</td><td>2010</td><td>0</td><td>691</td><td></td></tr>
<tr><td>6</td><td>2016</td><td>0</td><td>716</td><td></td></tr>
<tr><td>7</td><td>2015</td><td>0</td><td>717</td><td></td></tr>
<tr><td>8</td><td>2019</td><td>0</td><td>719</td><td></td></tr>
<tr><td>9</td><td>2014</td><td>0</td><td>734</td><td></td></tr>
<tr><td>10</td><td>2009</td><td>0</td><td>739</td><td></td></tr>

<tr><td colspan="5"><b>Most Shots In 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2008</td><td>402</td><td>55</td><td></td></tr><tr><td>2</td><td>2008</td><td>869</td><td>52</td><td></td></tr><tr><td>3</td><td>2015</td><td>1228</td><td>52</td><td></td></tr><tr><td>4</td><td>2017</td><td>37</td><td>51</td><td></td></tr><tr><td>5</td><td>2012</td><td>637</td><td>49</td><td></td></tr><tr><td>6</td><td>2017</td><td>785</td><td>49</td><td></td></tr><tr><td>7</td><td>2019</td><td>128</td><td>49</td><td><a href="OTHL-128.html">Game Direct Link</a></td></tr><tr><td>8</td><td>2008</td><td>737</td><td>47</td><td></td></tr><tr><td>9</td><td>2009</td><td>874</td><td>47</td><td></td></tr><tr><td>10</td><td>2010</td><td>974</td><td>47</td><td></td></tr>
<tr><td colspan="5"><b>Most Shots In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2019</td><td>0</td><td>2721</td><td></td></tr>
<tr><td>2</td><td>2017</td><td>0</td><td>2685</td><td></td></tr>
<tr><td>3</td><td>2018</td><td>0</td><td>2520</td><td></td></tr>
<tr><td>4</td><td>2012</td><td>0</td><td>2455</td><td></td></tr>
<tr><td>5</td><td>2009</td><td>0</td><td>2422</td><td></td></tr>
<tr><td>6</td><td>2014</td><td>0</td><td>2392</td><td></td></tr>
<tr><td>7</td><td>2008</td><td>0</td><td>2374</td><td></td></tr>
<tr><td>8</td><td>2015</td><td>0</td><td>2368</td><td></td></tr>
<tr><td>9</td><td>2010</td><td>0</td><td>2313</td><td></td></tr>
<tr><td>10</td><td>2011</td><td>0</td><td>2294</td><td></td></tr>

<tr><td colspan="5"><b>Less Shots In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2013</td><td>0</td><td>2256</td><td></td></tr>
<tr><td>2</td><td>2011</td><td>0</td><td>2294</td><td></td></tr>
<tr><td>3</td><td>2010</td><td>0</td><td>2313</td><td></td></tr>
<tr><td>4</td><td>2016</td><td>0</td><td>2364</td><td></td></tr>
<tr><td>5</td><td>2015</td><td>0</td><td>2368</td><td></td></tr>
<tr><td>6</td><td>2008</td><td>0</td><td>2374</td><td></td></tr>
<tr><td>7</td><td>2014</td><td>0</td><td>2392</td><td></td></tr>
<tr><td>8</td><td>2009</td><td>0</td><td>2422</td><td></td></tr>
<tr><td>9</td><td>2012</td><td>0</td><td>2455</td><td></td></tr>

<tr><td colspan="5"><b>Most Shots Blocked In 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2017</td><td>213</td><td>23</td><td></td></tr><tr><td>2</td><td>2017</td><td>545</td><td>22</td><td></td></tr><tr><td>3</td><td>2011</td><td>983</td><td>20</td><td></td></tr><tr><td>4</td><td>2014</td><td>343</td><td>19</td><td></td></tr><tr><td>5</td><td>2014</td><td>493</td><td>19</td><td></td></tr><tr><td>6</td><td>2008</td><td>290</td><td>18</td><td></td></tr><tr><td>7</td><td>2016</td><td>1145</td><td>18</td><td></td></tr><tr><td>8</td><td>2018</td><td>588</td><td>18</td><td></td></tr><tr><td>9</td><td>2018</td><td>615</td><td>18</td><td></td></tr><tr><td>10</td><td>2018</td><td>918</td><td>18</td><td></td></tr>
<tr><td colspan="5"><b>Most Shots Blocked In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>0</td><td>0</td><td>32000</td><td></td></tr>
<tr><td>2</td><td>0</td><td>0</td><td>32000</td><td></td></tr>

<tr><td colspan="5"><b>Less Shots Block In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2013</td><td>0</td><td>581</td><td></td></tr>
<tr><td>2</td><td>2009</td><td>0</td><td>582</td><td></td></tr>
<tr><td>3</td><td>2010</td><td>0</td><td>601</td><td></td></tr>
<tr><td>4</td><td>2008</td><td>0</td><td>604</td><td></td></tr>
<tr><td>5</td><td>2012</td><td>0</td><td>606</td><td></td></tr>
<tr><td>6</td><td>2019</td><td>0</td><td>663</td><td></td></tr>
<tr><td>7</td><td>2018</td><td>0</td><td>707</td><td></td></tr>
<tr><td>8</td><td>2011</td><td>0</td><td>790</td><td></td></tr>

<tr><td colspan="5"><b>Most Shots Against In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2011</td><td>0</td><td>2397</td><td></td></tr>
<tr><td>2</td><td>2017</td><td>0</td><td>2303</td><td></td></tr>
<tr><td>3</td><td>2019</td><td>0</td><td>2291</td><td></td></tr>
<tr><td>4</td><td>2018</td><td>0</td><td>2240</td><td></td></tr>
<tr><td>5</td><td>2012</td><td>0</td><td>2171</td><td></td></tr>
<tr><td>6</td><td>2008</td><td>0</td><td>2164</td><td></td></tr>
<tr><td>7</td><td>2009</td><td>0</td><td>2153</td><td></td></tr>
<tr><td>8</td><td>2016</td><td>0</td><td>2150</td><td></td></tr>
<tr><td>9</td><td>2010</td><td>0</td><td>2112</td><td></td></tr>

<tr><td colspan="5"><b>Less Shots Against In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2015</td><td>0</td><td>2046</td><td></td></tr>
<tr><td>2</td><td>2013</td><td>0</td><td>2048</td><td></td></tr>
<tr><td>3</td><td>2014</td><td>0</td><td>2104</td><td></td></tr>
<tr><td>4</td><td>2010</td><td>0</td><td>2112</td><td></td></tr>
<tr><td>5</td><td>2016</td><td>0</td><td>2150</td><td></td></tr>
<tr><td>6</td><td>2009</td><td>0</td><td>2153</td><td></td></tr>
<tr><td>7</td><td>2008</td><td>0</td><td>2164</td><td></td></tr>
<tr><td>8</td><td>2012</td><td>0</td><td>2171</td><td></td></tr>
<tr><td>9</td><td>2018</td><td>0</td><td>2240</td><td></td></tr>
<tr><td>10</td><td>2019</td><td>0</td><td>2291</td><td></td></tr>

<tr><td colspan="5"><b>Most Pim In 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2009</td><td>731</td><td>66</td><td></td></tr><tr><td>2</td><td>2010</td><td>1004</td><td>64</td><td></td></tr><tr><td>3</td><td>2010</td><td>589</td><td>51</td><td></td></tr><tr><td>4</td><td>2010</td><td>331</td><td>50</td><td></td></tr><tr><td>5</td><td>2018</td><td>1259</td><td>41</td><td></td></tr><tr><td>6</td><td>2008</td><td>938</td><td>37</td><td></td></tr><tr><td>7</td><td>2012</td><td>800</td><td>37</td><td></td></tr><tr><td>8</td><td>2016</td><td>14</td><td>37</td><td></td></tr><tr><td>9</td><td>2011</td><td>431</td><td>36</td><td></td></tr><tr><td>10</td><td>2015</td><td>73</td><td>35</td><td></td></tr>
<tr><td colspan="5"><b>Most Pim In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2010</td><td>0</td><td>1294</td><td></td></tr>
<tr><td>2</td><td>2008</td><td>0</td><td>1219</td><td></td></tr>
<tr><td>3</td><td>2009</td><td>0</td><td>1185</td><td></td></tr>
<tr><td>4</td><td>2011</td><td>0</td><td>1047</td><td></td></tr>
<tr><td>5</td><td>2016</td><td>0</td><td>844</td><td></td></tr>
<tr><td>6</td><td>2014</td><td>0</td><td>831</td><td></td></tr>
<tr><td>7</td><td>2013</td><td>0</td><td>782</td><td></td></tr>
<tr><td>8</td><td>2012</td><td>0</td><td>755</td><td></td></tr>
<tr><td>9</td><td>2018</td><td>0</td><td>739</td><td></td></tr>
<tr><td>10</td><td>2019</td><td>0</td><td>688</td><td></td></tr>

<tr><td colspan="5"><b>Less Pim In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2017</td><td>0</td><td>643</td><td></td></tr>
<tr><td>2</td><td>2019</td><td>0</td><td>688</td><td></td></tr>
<tr><td>3</td><td>2018</td><td>0</td><td>739</td><td></td></tr>
<tr><td>4</td><td>2012</td><td>0</td><td>755</td><td></td></tr>
<tr><td>5</td><td>2015</td><td>0</td><td>771</td><td></td></tr>
<tr><td>6</td><td>2013</td><td>0</td><td>782</td><td></td></tr>
<tr><td>7</td><td>2014</td><td>0</td><td>831</td><td></td></tr>
<tr><td>8</td><td>2016</td><td>0</td><td>844</td><td></td></tr>
<tr><td>9</td><td>2011</td><td>0</td><td>1047</td><td></td></tr>
<tr><td>10</td><td>2009</td><td>0</td><td>1185</td><td></td></tr>

<tr><td colspan="5"><b>Most Hits In 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2011</td><td>711</td><td>39</td><td></td></tr><tr><td>2</td><td>2015</td><td>1083</td><td>39</td><td></td></tr><tr><td>3</td><td>2019</td><td>189</td><td>38</td><td><a href="OTHL-189.html">Game Direct Link</a></td></tr><tr><td>4</td><td>2013</td><td>911</td><td>36</td><td></td></tr><tr><td>5</td><td>2014</td><td>320</td><td>36</td><td></td></tr><tr><td>6</td><td>2018</td><td>1053</td><td>36</td><td></td></tr><tr><td>7</td><td>2011</td><td>226</td><td>35</td><td></td></tr><tr><td>8</td><td>2011</td><td>963</td><td>35</td><td></td></tr><tr><td>9</td><td>2015</td><td>753</td><td>35</td><td></td></tr><tr><td>10</td><td>2019</td><td>139</td><td>35</td><td><a href="OTHL-139.html">Game Direct Link</a></td></tr>
<tr><td colspan="5"><b>Most Hits In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2011</td><td>0</td><td>1896</td><td></td></tr>
<tr><td>2</td><td>2019</td><td>0</td><td>1705</td><td></td></tr>
<tr><td>3</td><td>2018</td><td>0</td><td>1702</td><td></td></tr>
<tr><td>4</td><td>2017</td><td>0</td><td>1674</td><td></td></tr>
<tr><td>5</td><td>2012</td><td>0</td><td>1673</td><td></td></tr>
<tr><td>6</td><td>2008</td><td>0</td><td>1665</td><td></td></tr>
<tr><td>7</td><td>2015</td><td>0</td><td>1626</td><td></td></tr>
<tr><td>8</td><td>2014</td><td>0</td><td>1607</td><td></td></tr>
<tr><td>9</td><td>2013</td><td>0</td><td>1602</td><td></td></tr>
<tr><td>10</td><td>2010</td><td>0</td><td>1528</td><td></td></tr>

<tr><td colspan="5"><b>Less Hit In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2009</td><td>0</td><td>1439</td><td></td></tr>
<tr><td>2</td><td>2010</td><td>0</td><td>1528</td><td></td></tr>
<tr><td>3</td><td>2013</td><td>0</td><td>1602</td><td></td></tr>
<tr><td>4</td><td>2016</td><td>0</td><td>1603</td><td></td></tr>
<tr><td>5</td><td>2014</td><td>0</td><td>1607</td><td></td></tr>
<tr><td>6</td><td>2015</td><td>0</td><td>1626</td><td></td></tr>
<tr><td>7</td><td>2008</td><td>0</td><td>1665</td><td></td></tr>
<tr><td>8</td><td>2012</td><td>0</td><td>1673</td><td></td></tr>
<tr><td>9</td><td>2018</td><td>0</td><td>1702</td><td></td></tr>
<tr><td>10</td><td>2019</td><td>0</td><td>1705</td><td></td></tr>

<tr><td colspan="5"><b>Most Empty Net Goal In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2014</td><td>0</td><td>3</td><td></td></tr>
<tr><td>2</td><td>2008</td><td>0</td><td>2</td><td></td></tr>
<tr><td>3</td><td>2011</td><td>0</td><td>2</td><td></td></tr>
<tr><td>4</td><td>2019</td><td>0</td><td>2</td><td></td></tr>
<tr><td>5</td><td>2010</td><td>0</td><td>1</td><td></td></tr>
<tr><td>6</td><td>2012</td><td>0</td><td>1</td><td></td></tr>
<tr><td>7</td><td>2013</td><td>0</td><td>1</td><td></td></tr>
<tr><td>8</td><td>2018</td><td>0</td><td>1</td><td></td></tr>

<tr><td colspan="5"><b>Best PP In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2014</td><td>0</td><td>22.20%</td><td></td></tr>
<tr><td>2</td><td>2016</td><td>0</td><td>19.90%</td><td></td></tr>
<tr><td>3</td><td>2011</td><td>0</td><td>19.60%</td><td></td></tr>
<tr><td>4</td><td>2019</td><td>0</td><td>19.40%</td><td></td></tr>
<tr><td>5</td><td>2008</td><td>0</td><td>19.30%</td><td></td></tr>
<tr><td>6</td><td>2009</td><td>0</td><td>18.40%</td><td></td></tr>
<tr><td>7</td><td>2012</td><td>0</td><td>18.00%</td><td></td></tr>
<tr><td>8</td><td>2013</td><td>0</td><td>17.20%</td><td></td></tr>
<tr><td>9</td><td>2018</td><td>0</td><td>17.00%</td><td></td></tr>
<tr><td>10</td><td>2010</td><td>0</td><td>16.60%</td><td></td></tr>

<tr><td colspan="5"><b>Best PK In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2012</td><td>0</td><td>88.40%</td><td></td></tr>
<tr><td>2</td><td>2013</td><td>0</td><td>87.30%</td><td></td></tr>
<tr><td>3</td><td>2014</td><td>0</td><td>86.60%</td><td></td></tr>
<tr><td>4</td><td>2018</td><td>0</td><td>85.90%</td><td></td></tr>
<tr><td>5</td><td>2010</td><td>0</td><td>84.30%</td><td></td></tr>
<tr><td>6</td><td>2011</td><td>0</td><td>83.90%</td><td></td></tr>
<tr><td>7</td><td>2019</td><td>0</td><td>83.70%</td><td></td></tr>
<tr><td>8</td><td>2009</td><td>0</td><td>83.30%</td><td></td></tr>
<tr><td>9</td><td>2008</td><td>0</td><td>82.70%</td><td></td></tr>

<tr><td colspan="5"><b>Worse PP In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2017</td><td>0</td><td>11.70%</td><td></td></tr>
<tr><td>2</td><td>2010</td><td>0</td><td>16.60%</td><td></td></tr>
<tr><td>3</td><td>2015</td><td>0</td><td>16.70%</td><td></td></tr>
<tr><td>4</td><td>2018</td><td>0</td><td>17.00%</td><td></td></tr>
<tr><td>5</td><td>2013</td><td>0</td><td>17.20%</td><td></td></tr>
<tr><td>6</td><td>2012</td><td>0</td><td>18.00%</td><td></td></tr>
<tr><td>7</td><td>2009</td><td>0</td><td>18.40%</td><td></td></tr>
<tr><td>8</td><td>2008</td><td>0</td><td>19.30%</td><td></td></tr>
<tr><td>9</td><td>2019</td><td>0</td><td>19.40%</td><td></td></tr>
<tr><td>10</td><td>2011</td><td>0</td><td>19.60%</td><td></td></tr>

<tr><td colspan="5"><b>Worse PK In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2015</td><td>0</td><td>79.90%</td><td></td></tr>
<tr><td>2</td><td>2017</td><td>0</td><td>80.10%</td><td></td></tr>
<tr><td>3</td><td>2008</td><td>0</td><td>82.70%</td><td></td></tr>
<tr><td>4</td><td>2009</td><td>0</td><td>83.30%</td><td></td></tr>
<tr><td>5</td><td>2016</td><td>0</td><td>83.40%</td><td></td></tr>
<tr><td>6</td><td>2019</td><td>0</td><td>83.70%</td><td></td></tr>
<tr><td>7</td><td>2011</td><td>0</td><td>83.90%</td><td></td></tr>
<tr><td>8</td><td>2010</td><td>0</td><td>84.30%</td><td></td></tr>
<tr><td>9</td><td>2018</td><td>0</td><td>85.90%</td><td></td></tr>
<tr><td>10</td><td>2014</td><td>0</td><td>86.60%</td><td></td></tr>

<tr><td colspan="5"><b>Most Win In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2012</td><td>0</td><td>54</td><td></td></tr>
<tr><td>2</td><td>2016</td><td>0</td><td>52</td><td></td></tr>
<tr><td>3</td><td>2018</td><td>0</td><td>52</td><td></td></tr>
<tr><td>4</td><td>2014</td><td>0</td><td>51</td><td></td></tr>
<tr><td>5</td><td>2013</td><td>0</td><td>50</td><td></td></tr>
<tr><td>6</td><td>2011</td><td>0</td><td>46</td><td></td></tr>
<tr><td>7</td><td>2009</td><td>0</td><td>45</td><td></td></tr>
<tr><td>8</td><td>2010</td><td>0</td><td>45</td><td></td></tr>
<tr><td>9</td><td>2019</td><td>0</td><td>45</td><td></td></tr>
<tr><td>10</td><td>2008</td><td>0</td><td>37</td><td></td></tr>

<tr><td colspan="5"><b>Less Win In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2008</td><td>0</td><td>37</td><td></td></tr>
<tr><td>2</td><td>2017</td><td>0</td><td>42</td><td></td></tr>
<tr><td>3</td><td>2015</td><td>0</td><td>44</td><td></td></tr>
<tr><td>4</td><td>2009</td><td>0</td><td>45</td><td></td></tr>
<tr><td>5</td><td>2010</td><td>0</td><td>45</td><td></td></tr>
<tr><td>6</td><td>2019</td><td>0</td><td>45</td><td></td></tr>
<tr><td>7</td><td>2011</td><td>0</td><td>46</td><td></td></tr>
<tr><td>8</td><td>2013</td><td>0</td><td>50</td><td></td></tr>
<tr><td>9</td><td>2018</td><td>0</td><td>52</td><td></td></tr>
<tr><td>10</td><td>2012</td><td>0</td><td>54</td><td></td></tr>

<tr><td colspan="5"><b>Most Lost In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2017</td><td>0</td><td>40</td><td></td></tr>
<tr><td>2</td><td>2015</td><td>0</td><td>38</td><td></td></tr>
<tr><td>3</td><td>2009</td><td>0</td><td>37</td><td></td></tr>
<tr><td>4</td><td>2010</td><td>0</td><td>37</td><td></td></tr>
<tr><td>5</td><td>2019</td><td>0</td><td>37</td><td></td></tr>
<tr><td>6</td><td>2011</td><td>0</td><td>36</td><td></td></tr>
<tr><td>7</td><td>2008</td><td>0</td><td>34</td><td></td></tr>
<tr><td>8</td><td>2013</td><td>0</td><td>32</td><td></td></tr>
<tr><td>9</td><td>2018</td><td>0</td><td>30</td><td></td></tr>
<tr><td>10</td><td>2012</td><td>0</td><td>28</td><td></td></tr>

<tr><td colspan="5"><b>Less Lost In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2012</td><td>0</td><td>28</td><td></td></tr>
<tr><td>2</td><td>2016</td><td>0</td><td>30</td><td></td></tr>
<tr><td>3</td><td>2018</td><td>0</td><td>30</td><td></td></tr>
<tr><td>4</td><td>2014</td><td>0</td><td>31</td><td></td></tr>
<tr><td>5</td><td>2013</td><td>0</td><td>32</td><td></td></tr>
<tr><td>6</td><td>2008</td><td>0</td><td>34</td><td></td></tr>
<tr><td>7</td><td>2011</td><td>0</td><td>36</td><td></td></tr>
<tr><td>8</td><td>2009</td><td>0</td><td>37</td><td></td></tr>
<tr><td>9</td><td>2010</td><td>0</td><td>37</td><td></td></tr>

<tr><td colspan="5"><b>Most Point In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2012</td><td>0</td><td>116</td><td></td></tr>
<tr><td>2</td><td>2016</td><td>0</td><td>113</td><td></td></tr>
<tr><td>3</td><td>2018</td><td>0</td><td>113</td><td></td></tr>
<tr><td>4</td><td>2014</td><td>0</td><td>111</td><td></td></tr>
<tr><td>5</td><td>2013</td><td>0</td><td>105</td><td></td></tr>
<tr><td>6</td><td>2011</td><td>0</td><td>103</td><td></td></tr>
<tr><td>7</td><td>2019</td><td>0</td><td>100</td><td></td></tr>
<tr><td>8</td><td>2015</td><td>0</td><td>98</td><td></td></tr>
<tr><td>9</td><td>2010</td><td>0</td><td>97</td><td></td></tr>
<tr><td>10</td><td>2009</td><td>0</td><td>96</td><td></td></tr>

<tr><td colspan="5"><b>Less Points In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2008</td><td>0</td><td>93</td><td></td></tr>
<tr><td>2</td><td>2017</td><td>0</td><td>93</td><td></td></tr>
<tr><td>3</td><td>2009</td><td>0</td><td>96</td><td></td></tr>
<tr><td>4</td><td>2010</td><td>0</td><td>97</td><td></td></tr>
<tr><td>5</td><td>2015</td><td>0</td><td>98</td><td></td></tr>
<tr><td>6</td><td>2019</td><td>0</td><td>100</td><td></td></tr>
<tr><td>7</td><td>2011</td><td>0</td><td>103</td><td></td></tr>
<tr><td>8</td><td>2013</td><td>0</td><td>105</td><td></td></tr>
<tr><td>9</td><td>2018</td><td>0</td><td>113</td><td></td></tr>
<tr><td>10</td><td>2012</td><td>0</td><td>116</td><td></td></tr>

<tr><td colspan="5"><b>Most Win Home In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>0</td><td>0</td><td>32000</td><td></td></tr>
<tr><td>2</td><td>0</td><td>0</td><td>32000</td><td></td></tr>

<tr><td colspan="5"><b>Most Win Visitor In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>0</td><td>0</td><td>32000</td><td></td></tr>
<tr><td>2</td><td>0</td><td>0</td><td>32000</td><td></td></tr>

</table></div>
<h1 class="TeamRecordsPro_FLA"><a id="Panthers">Panthers</a></h1>
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
<br /><table class="STHSRecordTable">
<tr><td colspan="5"><b>Most Goals in 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2009</td><td>1033</td><td>9</td><td></td></tr><tr><td>2</td><td>2012</td><td>583</td><td>9</td><td></td></tr><tr><td>3</td><td>2017</td><td>362</td><td>9</td><td></td></tr><tr><td>4</td><td>2009</td><td>5</td><td>8</td><td></td></tr><tr><td>5</td><td>2009</td><td>272</td><td>8</td><td></td></tr><tr><td>6</td><td>2012</td><td>1193</td><td>8</td><td></td></tr><tr><td>7</td><td>2015</td><td>1010</td><td>8</td><td></td></tr><tr><td>8</td><td>2019</td><td>918</td><td>8</td><td><a href="OTHL-918.html">Game Direct Link</a></td></tr><tr><td>9</td><td>2008</td><td>30</td><td>7</td><td></td></tr><tr><td>10</td><td>2008</td><td>286</td><td>7</td><td></td></tr>
<tr><td colspan="5"><b>Most Goals in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2012</td><td>0</td><td>299</td><td></td></tr>
<tr><td>2</td><td>2016</td><td>0</td><td>270</td><td></td></tr>
<tr><td>3</td><td>2015</td><td>0</td><td>268</td><td></td></tr>
<tr><td>4</td><td>2009</td><td>0</td><td>262</td><td></td></tr>
<tr><td>5</td><td>2010</td><td>0</td><td>252</td><td></td></tr>
<tr><td>6</td><td>2013</td><td>0</td><td>248</td><td></td></tr>
<tr><td>7</td><td>2018</td><td>0</td><td>247</td><td></td></tr>
<tr><td>8</td><td>2014</td><td>0</td><td>242</td><td></td></tr>
<tr><td>9</td><td>2008</td><td>0</td><td>239</td><td></td></tr>
<tr><td>10</td><td>2019</td><td>0</td><td>235</td><td></td></tr>

<tr><td colspan="5"><b>Less Goal in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2017</td><td>0</td><td>227</td><td></td></tr>
<tr><td>2</td><td>2011</td><td>0</td><td>229</td><td></td></tr>
<tr><td>3</td><td>2019</td><td>0</td><td>235</td><td></td></tr>
<tr><td>4</td><td>2008</td><td>0</td><td>239</td><td></td></tr>
<tr><td>5</td><td>2014</td><td>0</td><td>242</td><td></td></tr>
<tr><td>6</td><td>2018</td><td>0</td><td>247</td><td></td></tr>
<tr><td>7</td><td>2013</td><td>0</td><td>248</td><td></td></tr>
<tr><td>8</td><td>2010</td><td>0</td><td>252</td><td></td></tr>
<tr><td>9</td><td>2009</td><td>0</td><td>262</td><td></td></tr>
<tr><td>10</td><td>2012</td><td>0</td><td>299</td><td></td></tr>

<tr><td colspan="5"><b>Most Goals Against in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2016</td><td>0</td><td>268</td><td></td></tr>
<tr><td>2</td><td>2008</td><td>0</td><td>260</td><td></td></tr>
<tr><td>3</td><td>2010</td><td>0</td><td>253</td><td></td></tr>
<tr><td>4</td><td>2009</td><td>0</td><td>233</td><td></td></tr>
<tr><td>5</td><td>2018</td><td>0</td><td>229</td><td></td></tr>
<tr><td>6</td><td>2011</td><td>0</td><td>227</td><td></td></tr>
<tr><td>7</td><td>2012</td><td>0</td><td>223</td><td></td></tr>
<tr><td>8</td><td>2019</td><td>0</td><td>210</td><td></td></tr>

<tr><td colspan="5"><b>Less Goal Against in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2014</td><td>0</td><td>203</td><td></td></tr>
<tr><td>2</td><td>2013</td><td>0</td><td>206</td><td></td></tr>
<tr><td>3</td><td>2019</td><td>0</td><td>210</td><td></td></tr>
<tr><td>4</td><td>2017</td><td>0</td><td>212</td><td></td></tr>
<tr><td>5</td><td>2015</td><td>0</td><td>215</td><td></td></tr>
<tr><td>6</td><td>2012</td><td>0</td><td>223</td><td></td></tr>
<tr><td>7</td><td>2011</td><td>0</td><td>227</td><td></td></tr>
<tr><td>8</td><td>2018</td><td>0</td><td>229</td><td></td></tr>
<tr><td>9</td><td>2009</td><td>0</td><td>233</td><td></td></tr>
<tr><td>10</td><td>2010</td><td>0</td><td>253</td><td></td></tr>

<tr><td colspan="5"><b>Most Assists in 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2012</td><td>583</td><td>18</td><td></td></tr><tr><td>2</td><td>2009</td><td>272</td><td>16</td><td></td></tr><tr><td>3</td><td>2019</td><td>918</td><td>16</td><td><a href="OTHL-918.html">Game Direct Link</a></td></tr><tr><td>4</td><td>2017</td><td>362</td><td>15</td><td></td></tr><tr><td>5</td><td>2009</td><td>1033</td><td>14</td><td></td></tr><tr><td>6</td><td>2010</td><td>227</td><td>14</td><td></td></tr><tr><td>7</td><td>2012</td><td>1193</td><td>14</td><td></td></tr><tr><td>8</td><td>2019</td><td>1263</td><td>14</td><td><a href="OTHL-1263.html">Game Direct Link</a></td></tr><tr><td>9</td><td>2008</td><td>30</td><td>13</td><td></td></tr><tr><td>10</td><td>2012</td><td>385</td><td>13</td><td></td></tr>
<tr><td colspan="5"><b>Most Assists in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2012</td><td>0</td><td>519</td><td></td></tr>
<tr><td>2</td><td>2016</td><td>0</td><td>469</td><td></td></tr>
<tr><td>3</td><td>2009</td><td>0</td><td>462</td><td></td></tr>
<tr><td>4</td><td>2010</td><td>0</td><td>462</td><td></td></tr>
<tr><td>5</td><td>2018</td><td>0</td><td>437</td><td></td></tr>
<tr><td>6</td><td>2015</td><td>0</td><td>436</td><td></td></tr>
<tr><td>7</td><td>2008</td><td>0</td><td>429</td><td></td></tr>
<tr><td>8</td><td>2013</td><td>0</td><td>427</td><td></td></tr>
<tr><td>9</td><td>2019</td><td>0</td><td>421</td><td></td></tr>
<tr><td>10</td><td>2011</td><td>0</td><td>344</td><td></td></tr>

<tr><td colspan="5"><b>Less Assist in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2011</td><td>0</td><td>344</td><td></td></tr>
<tr><td>2</td><td>2017</td><td>0</td><td>392</td><td></td></tr>
<tr><td>3</td><td>2014</td><td>0</td><td>417</td><td></td></tr>
<tr><td>4</td><td>2019</td><td>0</td><td>421</td><td></td></tr>
<tr><td>5</td><td>2013</td><td>0</td><td>427</td><td></td></tr>
<tr><td>6</td><td>2008</td><td>0</td><td>429</td><td></td></tr>
<tr><td>7</td><td>2015</td><td>0</td><td>436</td><td></td></tr>
<tr><td>8</td><td>2018</td><td>0</td><td>437</td><td></td></tr>
<tr><td>9</td><td>2009</td><td>0</td><td>462</td><td></td></tr>
<tr><td>10</td><td>2010</td><td>0</td><td>462</td><td></td></tr>

<tr><td colspan="5"><b>Most Game Points in 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2012</td><td>583</td><td>27</td><td></td></tr><tr><td>2</td><td>2009</td><td>272</td><td>24</td><td></td></tr><tr><td>3</td><td>2017</td><td>362</td><td>24</td><td></td></tr><tr><td>4</td><td>2019</td><td>918</td><td>24</td><td><a href="OTHL-918.html">Game Direct Link</a></td></tr><tr><td>5</td><td>2009</td><td>1033</td><td>23</td><td></td></tr><tr><td>6</td><td>2012</td><td>1193</td><td>22</td><td></td></tr><tr><td>7</td><td>2010</td><td>227</td><td>21</td><td></td></tr><tr><td>8</td><td>2019</td><td>1263</td><td>21</td><td><a href="OTHL-1263.html">Game Direct Link</a></td></tr><tr><td>9</td><td>2008</td><td>30</td><td>20</td><td></td></tr><tr><td>10</td><td>2009</td><td>5</td><td>20</td><td></td></tr>
<tr><td colspan="5"><b>Most Game Points in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>0</td><td>0</td><td>32000</td><td></td></tr>
<tr><td>2</td><td>0</td><td>0</td><td>32000</td><td></td></tr>

<tr><td colspan="5"><b>Less Game Point In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2011</td><td>0</td><td>573</td><td></td></tr>
<tr><td>2</td><td>2017</td><td>0</td><td>619</td><td></td></tr>
<tr><td>3</td><td>2019</td><td>0</td><td>656</td><td></td></tr>
<tr><td>4</td><td>2014</td><td>0</td><td>659</td><td></td></tr>
<tr><td>5</td><td>2008</td><td>0</td><td>668</td><td></td></tr>
<tr><td>6</td><td>2013</td><td>0</td><td>675</td><td></td></tr>
<tr><td>7</td><td>2018</td><td>0</td><td>684</td><td></td></tr>
<tr><td>8</td><td>2015</td><td>0</td><td>704</td><td></td></tr>
<tr><td>9</td><td>2010</td><td>0</td><td>714</td><td></td></tr>
<tr><td>10</td><td>2009</td><td>0</td><td>724</td><td></td></tr>

<tr><td colspan="5"><b>Most Shots In 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2012</td><td>1193</td><td>57</td><td></td></tr><tr><td>2</td><td>2019</td><td>634</td><td>56</td><td><a href="OTHL-634.html">Game Direct Link</a></td></tr><tr><td>3</td><td>2016</td><td>1111</td><td>52</td><td></td></tr><tr><td>4</td><td>2016</td><td>621</td><td>51</td><td></td></tr><tr><td>5</td><td>2017</td><td>878</td><td>51</td><td></td></tr><tr><td>6</td><td>2012</td><td>36</td><td>50</td><td></td></tr><tr><td>7</td><td>2018</td><td>1027</td><td>50</td><td></td></tr><tr><td>8</td><td>2008</td><td>1009</td><td>49</td><td></td></tr><tr><td>9</td><td>2014</td><td>1031</td><td>48</td><td></td></tr><tr><td>10</td><td>2018</td><td>349</td><td>48</td><td></td></tr>
<tr><td colspan="5"><b>Most Shots In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2018</td><td>0</td><td>2585</td><td></td></tr>
<tr><td>2</td><td>2012</td><td>0</td><td>2569</td><td></td></tr>
<tr><td>3</td><td>2017</td><td>0</td><td>2567</td><td></td></tr>
<tr><td>4</td><td>2019</td><td>0</td><td>2464</td><td></td></tr>
<tr><td>5</td><td>2016</td><td>0</td><td>2399</td><td></td></tr>
<tr><td>6</td><td>2013</td><td>0</td><td>2363</td><td></td></tr>
<tr><td>7</td><td>2015</td><td>0</td><td>2354</td><td></td></tr>
<tr><td>8</td><td>2008</td><td>0</td><td>2352</td><td></td></tr>
<tr><td>9</td><td>2011</td><td>0</td><td>2282</td><td></td></tr>
<tr><td>10</td><td>2010</td><td>0</td><td>2260</td><td></td></tr>

<tr><td colspan="5"><b>Less Shots In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2009</td><td>0</td><td>2215</td><td></td></tr>
<tr><td>2</td><td>2014</td><td>0</td><td>2256</td><td></td></tr>
<tr><td>3</td><td>2010</td><td>0</td><td>2260</td><td></td></tr>
<tr><td>4</td><td>2011</td><td>0</td><td>2282</td><td></td></tr>
<tr><td>5</td><td>2008</td><td>0</td><td>2352</td><td></td></tr>
<tr><td>6</td><td>2013</td><td>0</td><td>2363</td><td></td></tr>
<tr><td>7</td><td>2019</td><td>0</td><td>2464</td><td></td></tr>
<tr><td>8</td><td>2012</td><td>0</td><td>2569</td><td></td></tr>

<tr><td colspan="5"><b>Most Shots Blocked In 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2008</td><td>429</td><td>21</td><td></td></tr><tr><td>2</td><td>2014</td><td>1025</td><td>21</td><td></td></tr><tr><td>3</td><td>2017</td><td>547</td><td>21</td><td></td></tr><tr><td>4</td><td>2018</td><td>1124</td><td>20</td><td></td></tr><tr><td>5</td><td>2011</td><td>307</td><td>19</td><td></td></tr><tr><td>6</td><td>2017</td><td>1099</td><td>19</td><td></td></tr><tr><td>7</td><td>2017</td><td>1139</td><td>19</td><td></td></tr><tr><td>8</td><td>2018</td><td>757</td><td>18</td><td></td></tr><tr><td>9</td><td>2019</td><td>667</td><td>18</td><td><a href="OTHL-667.html">Game Direct Link</a></td></tr><tr><td>10</td><td>2019</td><td>883</td><td>18</td><td><a href="OTHL-883.html">Game Direct Link</a></td></tr>
<tr><td colspan="5"><b>Most Shots Blocked In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>0</td><td>0</td><td>32000</td><td></td></tr>
<tr><td>2</td><td>0</td><td>0</td><td>32000</td><td></td></tr>

<tr><td colspan="5"><b>Less Shots Block In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2013</td><td>0</td><td>608</td><td></td></tr>
<tr><td>2</td><td>2012</td><td>0</td><td>613</td><td></td></tr>
<tr><td>3</td><td>2014</td><td>0</td><td>635</td><td></td></tr>
<tr><td>4</td><td>2009</td><td>0</td><td>648</td><td></td></tr>
<tr><td>5</td><td>2015</td><td>0</td><td>657</td><td></td></tr>
<tr><td>6</td><td>2008</td><td>0</td><td>664</td><td></td></tr>
<tr><td>7</td><td>2010</td><td>0</td><td>671</td><td></td></tr>
<tr><td>8</td><td>2011</td><td>0</td><td>751</td><td></td></tr>

<tr><td colspan="5"><b>Most Shots Against In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2018</td><td>0</td><td>2658</td><td></td></tr>
<tr><td>2</td><td>2017</td><td>0</td><td>2583</td><td></td></tr>
<tr><td>3</td><td>2019</td><td>0</td><td>2545</td><td></td></tr>
<tr><td>4</td><td>2016</td><td>0</td><td>2406</td><td></td></tr>
<tr><td>5</td><td>2011</td><td>0</td><td>2370</td><td></td></tr>
<tr><td>6</td><td>2008</td><td>0</td><td>2271</td><td></td></tr>
<tr><td>7</td><td>2012</td><td>0</td><td>2230</td><td></td></tr>
<tr><td>8</td><td>2015</td><td>0</td><td>2207</td><td></td></tr>
<tr><td>9</td><td>2009</td><td>0</td><td>2175</td><td></td></tr>
<tr><td>10</td><td>2014</td><td>0</td><td>2172</td><td></td></tr>

<tr><td colspan="5"><b>Less Shots Against In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2013</td><td>0</td><td>1921</td><td></td></tr>
<tr><td>2</td><td>2010</td><td>0</td><td>2141</td><td></td></tr>
<tr><td>3</td><td>2014</td><td>0</td><td>2172</td><td></td></tr>
<tr><td>4</td><td>2009</td><td>0</td><td>2175</td><td></td></tr>
<tr><td>5</td><td>2015</td><td>0</td><td>2207</td><td></td></tr>
<tr><td>6</td><td>2012</td><td>0</td><td>2230</td><td></td></tr>
<tr><td>7</td><td>2008</td><td>0</td><td>2271</td><td></td></tr>
<tr><td>8</td><td>2011</td><td>0</td><td>2370</td><td></td></tr>

<tr><td colspan="5"><b>Most Pim In 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2016</td><td>592</td><td>74</td><td></td></tr><tr><td>2</td><td>2010</td><td>806</td><td>65</td><td></td></tr><tr><td>3</td><td>2009</td><td>862</td><td>63</td><td></td></tr><tr><td>4</td><td>2009</td><td>878</td><td>59</td><td></td></tr><tr><td>5</td><td>2010</td><td>227</td><td>52</td><td></td></tr><tr><td>6</td><td>2014</td><td>1072</td><td>52</td><td></td></tr><tr><td>7</td><td>2009</td><td>317</td><td>51</td><td></td></tr><tr><td>8</td><td>2011</td><td>1193</td><td>47</td><td></td></tr><tr><td>9</td><td>2014</td><td>173</td><td>45</td><td></td></tr><tr><td>10</td><td>2011</td><td>709</td><td>42</td><td></td></tr>
<tr><td colspan="5"><b>Most Pim In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2010</td><td>0</td><td>1470</td><td></td></tr>
<tr><td>2</td><td>2009</td><td>0</td><td>1344</td><td></td></tr>
<tr><td>3</td><td>2011</td><td>0</td><td>1183</td><td></td></tr>
<tr><td>4</td><td>2008</td><td>0</td><td>1175</td><td></td></tr>
<tr><td>5</td><td>2016</td><td>0</td><td>989</td><td></td></tr>
<tr><td>6</td><td>2012</td><td>0</td><td>932</td><td></td></tr>
<tr><td>7</td><td>2018</td><td>0</td><td>771</td><td></td></tr>
<tr><td>8</td><td>2019</td><td>0</td><td>707</td><td></td></tr>

<tr><td colspan="5"><b>Less Pim In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2017</td><td>0</td><td>631</td><td></td></tr>
<tr><td>2</td><td>2019</td><td>0</td><td>707</td><td></td></tr>
<tr><td>3</td><td>2015</td><td>0</td><td>757</td><td></td></tr>
<tr><td>4</td><td>2018</td><td>0</td><td>771</td><td></td></tr>
<tr><td>5</td><td>2014</td><td>0</td><td>860</td><td></td></tr>
<tr><td>6</td><td>2013</td><td>0</td><td>869</td><td></td></tr>
<tr><td>7</td><td>2012</td><td>0</td><td>932</td><td></td></tr>
<tr><td>8</td><td>2016</td><td>0</td><td>989</td><td></td></tr>
<tr><td>9</td><td>2008</td><td>0</td><td>1175</td><td></td></tr>
<tr><td>10</td><td>2011</td><td>0</td><td>1183</td><td></td></tr>

<tr><td colspan="5"><b>Most Hits In 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2019</td><td>289</td><td>40</td><td><a href="OTHL-289.html">Game Direct Link</a></td></tr><tr><td>2</td><td>2018</td><td>1246</td><td>39</td><td></td></tr><tr><td>3</td><td>2017</td><td>862</td><td>37</td><td></td></tr><tr><td>4</td><td>2016</td><td>133</td><td>36</td><td></td></tr><tr><td>5</td><td>2017</td><td>1206</td><td>36</td><td></td></tr><tr><td>6</td><td>2018</td><td>183</td><td>36</td><td></td></tr><tr><td>7</td><td>2018</td><td>1034</td><td>36</td><td></td></tr><tr><td>8</td><td>2019</td><td>476</td><td>36</td><td><a href="OTHL-476.html">Game Direct Link</a></td></tr><tr><td>9</td><td>2011</td><td>1114</td><td>35</td><td></td></tr><tr><td>10</td><td>2009</td><td>385</td><td>34</td><td></td></tr>
<tr><td colspan="5"><b>Most Hits In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2018</td><td>0</td><td>1824</td><td></td></tr>
<tr><td>2</td><td>2016</td><td>0</td><td>1789</td><td></td></tr>
<tr><td>3</td><td>2011</td><td>0</td><td>1776</td><td></td></tr>
<tr><td>4</td><td>2019</td><td>0</td><td>1750</td><td></td></tr>
<tr><td>5</td><td>2012</td><td>0</td><td>1709</td><td></td></tr>
<tr><td>6</td><td>2017</td><td>0</td><td>1704</td><td></td></tr>
<tr><td>7</td><td>2013</td><td>0</td><td>1668</td><td></td></tr>
<tr><td>8</td><td>2010</td><td>0</td><td>1660</td><td></td></tr>
<tr><td>9</td><td>2015</td><td>0</td><td>1650</td><td></td></tr>
<tr><td>10</td><td>2008</td><td>0</td><td>1630</td><td></td></tr>

<tr><td colspan="5"><b>Less Hit In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2009</td><td>0</td><td>1506</td><td></td></tr>
<tr><td>2</td><td>2014</td><td>0</td><td>1580</td><td></td></tr>
<tr><td>3</td><td>2008</td><td>0</td><td>1630</td><td></td></tr>
<tr><td>4</td><td>2015</td><td>0</td><td>1650</td><td></td></tr>
<tr><td>5</td><td>2010</td><td>0</td><td>1660</td><td></td></tr>
<tr><td>6</td><td>2013</td><td>0</td><td>1668</td><td></td></tr>
<tr><td>7</td><td>2012</td><td>0</td><td>1709</td><td></td></tr>
<tr><td>8</td><td>2019</td><td>0</td><td>1750</td><td></td></tr>
<tr><td>9</td><td>2011</td><td>0</td><td>1776</td><td></td></tr>

<tr><td colspan="5"><b>Most Empty Net Goal In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2013</td><td>0</td><td>3</td><td></td></tr>
<tr><td>2</td><td>2015</td><td>0</td><td>2</td><td></td></tr>
<tr><td>3</td><td>2017</td><td>0</td><td>2</td><td></td></tr>
<tr><td>4</td><td>2018</td><td>0</td><td>2</td><td></td></tr>
<tr><td>5</td><td>2011</td><td>0</td><td>1</td><td></td></tr>
<tr><td>6</td><td>2014</td><td>0</td><td>1</td><td></td></tr>
<tr><td>7</td><td>2016</td><td>0</td><td>1</td><td></td></tr>

<tr><td colspan="5"><b>Best PP In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2012</td><td>0</td><td>25.20%</td><td></td></tr>
<tr><td>2</td><td>2018</td><td>0</td><td>24.50%</td><td></td></tr>
<tr><td>3</td><td>2016</td><td>0</td><td>21.90%</td><td></td></tr>
<tr><td>4</td><td>2011</td><td>0</td><td>21.60%</td><td></td></tr>
<tr><td>5</td><td>2015</td><td>0</td><td>19.00%</td><td></td></tr>
<tr><td>6</td><td>2009</td><td>0</td><td>17.80%</td><td></td></tr>
<tr><td>7</td><td>2014</td><td>0</td><td>17.40%</td><td></td></tr>
<tr><td>8</td><td>2010</td><td>0</td><td>16.90%</td><td></td></tr>
<tr><td>9</td><td>2013</td><td>0</td><td>16.50%</td><td></td></tr>
<tr><td>10</td><td>2019</td><td>0</td><td>13.00%</td><td></td></tr>

<tr><td colspan="5"><b>Best PK In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2015</td><td>0</td><td>86.90%</td><td></td></tr>
<tr><td>2</td><td>2012</td><td>0</td><td>85.70%</td><td></td></tr>
<tr><td>3</td><td>2008</td><td>0</td><td>85.60%</td><td></td></tr>
<tr><td>4</td><td>2014</td><td>0</td><td>85.10%</td><td></td></tr>
<tr><td>5</td><td>2013</td><td>0</td><td>84.50%</td><td></td></tr>
<tr><td>6</td><td>2009</td><td>0</td><td>83.20%</td><td></td></tr>
<tr><td>7</td><td>2011</td><td>0</td><td>82.90%</td><td></td></tr>
<tr><td>8</td><td>2019</td><td>0</td><td>82.50%</td><td></td></tr>
<tr><td>9</td><td>2010</td><td>0</td><td>81.30%</td><td></td></tr>
<tr><td>10</td><td>2018</td><td>0</td><td>81.10%</td><td></td></tr>

<tr><td colspan="5"><b>Worse PP In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2008</td><td>0</td><td>12.20%</td><td></td></tr>
<tr><td>2</td><td>2019</td><td>0</td><td>13.00%</td><td></td></tr>
<tr><td>3</td><td>2013</td><td>0</td><td>16.50%</td><td></td></tr>
<tr><td>4</td><td>2010</td><td>0</td><td>16.90%</td><td></td></tr>
<tr><td>5</td><td>2014</td><td>0</td><td>17.40%</td><td></td></tr>
<tr><td>6</td><td>2009</td><td>0</td><td>17.80%</td><td></td></tr>
<tr><td>7</td><td>2011</td><td>0</td><td>21.60%</td><td></td></tr>
<tr><td>8</td><td>2018</td><td>0</td><td>24.50%</td><td></td></tr>
<tr><td>9</td><td>2012</td><td>0</td><td>25.20%</td><td></td></tr>

<tr><td colspan="5"><b>Worse PK In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2016</td><td>0</td><td>80.80%</td><td></td></tr>
<tr><td>2</td><td>2018</td><td>0</td><td>81.10%</td><td></td></tr>
<tr><td>3</td><td>2010</td><td>0</td><td>81.30%</td><td></td></tr>
<tr><td>4</td><td>2019</td><td>0</td><td>82.50%</td><td></td></tr>
<tr><td>5</td><td>2011</td><td>0</td><td>82.90%</td><td></td></tr>
<tr><td>6</td><td>2009</td><td>0</td><td>83.20%</td><td></td></tr>
<tr><td>7</td><td>2017</td><td>0</td><td>83.50%</td><td></td></tr>
<tr><td>8</td><td>2013</td><td>0</td><td>84.50%</td><td></td></tr>
<tr><td>9</td><td>2014</td><td>0</td><td>85.10%</td><td></td></tr>
<tr><td>10</td><td>2008</td><td>0</td><td>85.60%</td><td></td></tr>

<tr><td colspan="5"><b>Most Win In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2012</td><td>0</td><td>55</td><td></td></tr>
<tr><td>2</td><td>2014</td><td>0</td><td>54</td><td></td></tr>
<tr><td>3</td><td>2015</td><td>0</td><td>53</td><td></td></tr>
<tr><td>4</td><td>2013</td><td>0</td><td>50</td><td></td></tr>
<tr><td>5</td><td>2019</td><td>0</td><td>47</td><td></td></tr>
<tr><td>6</td><td>2009</td><td>0</td><td>46</td><td></td></tr>
<tr><td>7</td><td>2010</td><td>0</td><td>42</td><td></td></tr>
<tr><td>8</td><td>2011</td><td>0</td><td>41</td><td></td></tr>
<tr><td>9</td><td>2018</td><td>0</td><td>41</td><td></td></tr>
<tr><td>10</td><td>2008</td><td>0</td><td>32</td><td></td></tr>

<tr><td colspan="5"><b>Less Win In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2008</td><td>0</td><td>32</td><td></td></tr>
<tr><td>2</td><td>2017</td><td>0</td><td>39</td><td></td></tr>
<tr><td>3</td><td>2011</td><td>0</td><td>41</td><td></td></tr>
<tr><td>4</td><td>2018</td><td>0</td><td>41</td><td></td></tr>
<tr><td>5</td><td>2010</td><td>0</td><td>42</td><td></td></tr>
<tr><td>6</td><td>2016</td><td>0</td><td>43</td><td></td></tr>
<tr><td>7</td><td>2009</td><td>0</td><td>46</td><td></td></tr>
<tr><td>8</td><td>2019</td><td>0</td><td>47</td><td></td></tr>
<tr><td>9</td><td>2013</td><td>0</td><td>50</td><td></td></tr>
<tr><td>10</td><td>2012</td><td>0</td><td>55</td><td></td></tr>

<tr><td colspan="5"><b>Most Lost In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2017</td><td>0</td><td>43</td><td></td></tr>
<tr><td>2</td><td>2011</td><td>0</td><td>41</td><td></td></tr>
<tr><td>3</td><td>2018</td><td>0</td><td>41</td><td></td></tr>
<tr><td>4</td><td>2010</td><td>0</td><td>40</td><td></td></tr>
<tr><td>5</td><td>2008</td><td>0</td><td>39</td><td></td></tr>
<tr><td>6</td><td>2016</td><td>0</td><td>39</td><td></td></tr>
<tr><td>7</td><td>2009</td><td>0</td><td>36</td><td></td></tr>
<tr><td>8</td><td>2019</td><td>0</td><td>35</td><td></td></tr>
<tr><td>9</td><td>2013</td><td>0</td><td>32</td><td></td></tr>
<tr><td>10</td><td>2012</td><td>0</td><td>27</td><td></td></tr>

<tr><td colspan="5"><b>Less Lost In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2012</td><td>0</td><td>27</td><td></td></tr>
<tr><td>2</td><td>2014</td><td>0</td><td>28</td><td></td></tr>
<tr><td>3</td><td>2015</td><td>0</td><td>29</td><td></td></tr>
<tr><td>4</td><td>2013</td><td>0</td><td>32</td><td></td></tr>
<tr><td>5</td><td>2019</td><td>0</td><td>35</td><td></td></tr>
<tr><td>6</td><td>2009</td><td>0</td><td>36</td><td></td></tr>
<tr><td>7</td><td>2008</td><td>0</td><td>39</td><td></td></tr>
<tr><td>8</td><td>2010</td><td>0</td><td>40</td><td></td></tr>
<tr><td>9</td><td>2011</td><td>0</td><td>41</td><td></td></tr>

<tr><td colspan="5"><b>Most Point In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2012</td><td>0</td><td>116</td><td></td></tr>
<tr><td>2</td><td>2015</td><td>0</td><td>115</td><td></td></tr>
<tr><td>3</td><td>2014</td><td>0</td><td>113</td><td></td></tr>
<tr><td>4</td><td>2013</td><td>0</td><td>107</td><td></td></tr>
<tr><td>5</td><td>2019</td><td>0</td><td>106</td><td></td></tr>
<tr><td>6</td><td>2009</td><td>0</td><td>96</td><td></td></tr>
<tr><td>7</td><td>2010</td><td>0</td><td>95</td><td></td></tr>
<tr><td>8</td><td>2018</td><td>0</td><td>92</td><td></td></tr>
<tr><td>9</td><td>2011</td><td>0</td><td>91</td><td></td></tr>
<tr><td>10</td><td>2008</td><td>0</td><td>77</td><td></td></tr>

<tr><td colspan="5"><b>Less Points In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2008</td><td>0</td><td>77</td><td></td></tr>
<tr><td>2</td><td>2017</td><td>0</td><td>88</td><td></td></tr>
<tr><td>3</td><td>2011</td><td>0</td><td>91</td><td></td></tr>
<tr><td>4</td><td>2018</td><td>0</td><td>92</td><td></td></tr>
<tr><td>5</td><td>2010</td><td>0</td><td>95</td><td></td></tr>
<tr><td>6</td><td>2009</td><td>0</td><td>96</td><td></td></tr>
<tr><td>7</td><td>2016</td><td>0</td><td>96</td><td></td></tr>
<tr><td>8</td><td>2019</td><td>0</td><td>106</td><td></td></tr>
<tr><td>9</td><td>2013</td><td>0</td><td>107</td><td></td></tr>
<tr><td>10</td><td>2012</td><td>0</td><td>116</td><td></td></tr>

<tr><td colspan="5"><b>Most Win Home In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>0</td><td>0</td><td>32000</td><td></td></tr>
<tr><td>2</td><td>0</td><td>0</td><td>32000</td><td></td></tr>

<tr><td colspan="5"><b>Most Win Visitor In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>0</td><td>0</td><td>32000</td><td></td></tr>
<tr><td>2</td><td>0</td><td>0</td><td>32000</td><td></td></tr>

</table></div>
<h1 class="TeamRecordsPro_PIT"><a id="Penguins">Penguins</a></h1>
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
<br /><table class="STHSRecordTable">
<tr><td colspan="5"><b>Most Goals in 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2010</td><td>890</td><td>9</td><td></td></tr><tr><td>2</td><td>2008</td><td>804</td><td>8</td><td></td></tr><tr><td>3</td><td>2009</td><td>33</td><td>8</td><td></td></tr><tr><td>4</td><td>2009</td><td>159</td><td>8</td><td></td></tr><tr><td>5</td><td>2009</td><td>383</td><td>8</td><td></td></tr><tr><td>6</td><td>2012</td><td>854</td><td>8</td><td></td></tr><tr><td>7</td><td>2013</td><td>599</td><td>7</td><td></td></tr><tr><td>8</td><td>2014</td><td>95</td><td>7</td><td></td></tr><tr><td>9</td><td>2015</td><td>635</td><td>7</td><td></td></tr><tr><td>10</td><td>2016</td><td>17</td><td>7</td><td></td></tr>
<tr><td colspan="5"><b>Most Goals in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2009</td><td>0</td><td>318</td><td></td></tr>
<tr><td>2</td><td>2008</td><td>0</td><td>290</td><td></td></tr>
<tr><td>3</td><td>2015</td><td>0</td><td>239</td><td></td></tr>
<tr><td>4</td><td>2010</td><td>0</td><td>238</td><td></td></tr>
<tr><td>5</td><td>2012</td><td>0</td><td>225</td><td></td></tr>
<tr><td>6</td><td>2018</td><td>0</td><td>223</td><td></td></tr>
<tr><td>7</td><td>2019</td><td>0</td><td>213</td><td></td></tr>
<tr><td>8</td><td>2011</td><td>0</td><td>199</td><td></td></tr>

<tr><td colspan="5"><b>Less Goal in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2017</td><td>0</td><td>156</td><td></td></tr>
<tr><td>2</td><td>2013</td><td>0</td><td>173</td><td></td></tr>
<tr><td>3</td><td>2014</td><td>0</td><td>185</td><td></td></tr>
<tr><td>4</td><td>2011</td><td>0</td><td>199</td><td></td></tr>
<tr><td>5</td><td>2019</td><td>0</td><td>213</td><td></td></tr>
<tr><td>6</td><td>2018</td><td>0</td><td>223</td><td></td></tr>
<tr><td>7</td><td>2012</td><td>0</td><td>225</td><td></td></tr>
<tr><td>8</td><td>2016</td><td>0</td><td>225</td><td></td></tr>
<tr><td>9</td><td>2010</td><td>0</td><td>238</td><td></td></tr>
<tr><td>10</td><td>2008</td><td>0</td><td>290</td><td></td></tr>

<tr><td colspan="5"><b>Most Goals Against in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2012</td><td>0</td><td>305</td><td></td></tr>
<tr><td>2</td><td>2019</td><td>0</td><td>283</td><td></td></tr>
<tr><td>3</td><td>2010</td><td>0</td><td>276</td><td></td></tr>
<tr><td>4</td><td>2016</td><td>0</td><td>267</td><td></td></tr>
<tr><td>5</td><td>2017</td><td>0</td><td>262</td><td></td></tr>
<tr><td>6</td><td>2013</td><td>0</td><td>255</td><td></td></tr>
<tr><td>7</td><td>2018</td><td>0</td><td>248</td><td></td></tr>
<tr><td>8</td><td>2009</td><td>0</td><td>235</td><td></td></tr>
<tr><td>9</td><td>2014</td><td>0</td><td>226</td><td></td></tr>
<tr><td>10</td><td>2008</td><td>0</td><td>221</td><td></td></tr>

<tr><td colspan="5"><b>Less Goal Against in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2011</td><td>0</td><td>211</td><td></td></tr>
<tr><td>2</td><td>2008</td><td>0</td><td>221</td><td></td></tr>
<tr><td>3</td><td>2015</td><td>0</td><td>224</td><td></td></tr>
<tr><td>4</td><td>2014</td><td>0</td><td>226</td><td></td></tr>
<tr><td>5</td><td>2009</td><td>0</td><td>235</td><td></td></tr>
<tr><td>6</td><td>2018</td><td>0</td><td>248</td><td></td></tr>
<tr><td>7</td><td>2013</td><td>0</td><td>255</td><td></td></tr>
<tr><td>8</td><td>2010</td><td>0</td><td>276</td><td></td></tr>
<tr><td>9</td><td>2019</td><td>0</td><td>283</td><td></td></tr>
<tr><td>10</td><td>2012</td><td>0</td><td>305</td><td></td></tr>

<tr><td colspan="5"><b>Most Assists in 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2010</td><td>890</td><td>18</td><td></td></tr><tr><td>2</td><td>2009</td><td>548</td><td>16</td><td></td></tr><tr><td>3</td><td>2009</td><td>33</td><td>15</td><td></td></tr><tr><td>4</td><td>2009</td><td>159</td><td>15</td><td></td></tr><tr><td>5</td><td>2009</td><td>422</td><td>15</td><td></td></tr><tr><td>6</td><td>2014</td><td>95</td><td>14</td><td></td></tr><tr><td>7</td><td>2016</td><td>154</td><td>14</td><td></td></tr><tr><td>8</td><td>2018</td><td>64</td><td>14</td><td></td></tr><tr><td>9</td><td>2012</td><td>854</td><td>13</td><td></td></tr><tr><td>10</td><td>2012</td><td>974</td><td>12</td><td></td></tr>
<tr><td colspan="5"><b>Most Assists in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2009</td><td>0</td><td>568</td><td></td></tr>
<tr><td>2</td><td>2008</td><td>0</td><td>529</td><td></td></tr>
<tr><td>3</td><td>2010</td><td>0</td><td>418</td><td></td></tr>
<tr><td>4</td><td>2012</td><td>0</td><td>390</td><td></td></tr>
<tr><td>5</td><td>2018</td><td>0</td><td>389</td><td></td></tr>
<tr><td>6</td><td>2015</td><td>0</td><td>388</td><td></td></tr>
<tr><td>7</td><td>2019</td><td>0</td><td>380</td><td></td></tr>
<tr><td>8</td><td>2014</td><td>0</td><td>320</td><td></td></tr>
<tr><td>9</td><td>2011</td><td>0</td><td>319</td><td></td></tr>

<tr><td colspan="5"><b>Less Assist in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2017</td><td>0</td><td>279</td><td></td></tr>
<tr><td>2</td><td>2013</td><td>0</td><td>299</td><td></td></tr>
<tr><td>3</td><td>2011</td><td>0</td><td>319</td><td></td></tr>
<tr><td>4</td><td>2014</td><td>0</td><td>320</td><td></td></tr>
<tr><td>5</td><td>2016</td><td>0</td><td>377</td><td></td></tr>
<tr><td>6</td><td>2019</td><td>0</td><td>380</td><td></td></tr>
<tr><td>7</td><td>2015</td><td>0</td><td>388</td><td></td></tr>
<tr><td>8</td><td>2018</td><td>0</td><td>389</td><td></td></tr>
<tr><td>9</td><td>2012</td><td>0</td><td>390</td><td></td></tr>
<tr><td>10</td><td>2010</td><td>0</td><td>418</td><td></td></tr>

<tr><td colspan="5"><b>Most Game Points in 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2010</td><td>890</td><td>27</td><td></td></tr><tr><td>2</td><td>2009</td><td>548</td><td>24</td><td></td></tr><tr><td>3</td><td>2009</td><td>33</td><td>23</td><td></td></tr><tr><td>4</td><td>2009</td><td>159</td><td>23</td><td></td></tr><tr><td>5</td><td>2009</td><td>422</td><td>23</td><td></td></tr><tr><td>6</td><td>2012</td><td>854</td><td>21</td><td></td></tr><tr><td>7</td><td>2014</td><td>95</td><td>21</td><td></td></tr><tr><td>8</td><td>2016</td><td>154</td><td>21</td><td></td></tr><tr><td>9</td><td>2018</td><td>64</td><td>21</td><td></td></tr><tr><td>10</td><td>2019</td><td>1100</td><td>19</td><td><a href="OTHL-1100.html">Game Direct Link</a></td></tr>
<tr><td colspan="5"><b>Most Game Points in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>0</td><td>0</td><td>32000</td><td></td></tr>
<tr><td>2</td><td>0</td><td>0</td><td>32000</td><td></td></tr>

<tr><td colspan="5"><b>Less Game Point In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2017</td><td>0</td><td>435</td><td></td></tr>
<tr><td>2</td><td>2013</td><td>0</td><td>472</td><td></td></tr>
<tr><td>3</td><td>2014</td><td>0</td><td>505</td><td></td></tr>
<tr><td>4</td><td>2011</td><td>0</td><td>518</td><td></td></tr>
<tr><td>5</td><td>2019</td><td>0</td><td>593</td><td></td></tr>
<tr><td>6</td><td>2016</td><td>0</td><td>602</td><td></td></tr>
<tr><td>7</td><td>2018</td><td>0</td><td>612</td><td></td></tr>
<tr><td>8</td><td>2012</td><td>0</td><td>615</td><td></td></tr>
<tr><td>9</td><td>2015</td><td>0</td><td>627</td><td></td></tr>
<tr><td>10</td><td>2010</td><td>0</td><td>656</td><td></td></tr>

<tr><td colspan="5"><b>Most Shots In 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2009</td><td>422</td><td>56</td><td></td></tr><tr><td>2</td><td>2008</td><td>9</td><td>55</td><td></td></tr><tr><td>3</td><td>2019</td><td>436</td><td>54</td><td><a href="OTHL-436.html">Game Direct Link</a></td></tr><tr><td>4</td><td>2019</td><td>27</td><td>53</td><td><a href="OTHL-27.html">Game Direct Link</a></td></tr><tr><td>5</td><td>2010</td><td>543</td><td>52</td><td></td></tr><tr><td>6</td><td>2009</td><td>1186</td><td>50</td><td></td></tr><tr><td>7</td><td>2009</td><td>127</td><td>48</td><td></td></tr><tr><td>8</td><td>2018</td><td>952</td><td>47</td><td></td></tr><tr><td>9</td><td>2011</td><td>21</td><td>44</td><td></td></tr><tr><td>10</td><td>2018</td><td>649</td><td>44</td><td></td></tr>
<tr><td colspan="5"><b>Most Shots In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2009</td><td>0</td><td>2611</td><td></td></tr>
<tr><td>2</td><td>2011</td><td>0</td><td>2545</td><td></td></tr>
<tr><td>3</td><td>2008</td><td>0</td><td>2463</td><td></td></tr>
<tr><td>4</td><td>2018</td><td>0</td><td>2445</td><td></td></tr>
<tr><td>5</td><td>2019</td><td>0</td><td>2352</td><td></td></tr>
<tr><td>6</td><td>2010</td><td>0</td><td>2305</td><td></td></tr>
<tr><td>7</td><td>2016</td><td>0</td><td>2122</td><td></td></tr>
<tr><td>8</td><td>2012</td><td>0</td><td>2100</td><td></td></tr>

<tr><td colspan="5"><b>Less Shots In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2013</td><td>0</td><td>1945</td><td></td></tr>
<tr><td>2</td><td>2017</td><td>0</td><td>1957</td><td></td></tr>
<tr><td>3</td><td>2015</td><td>0</td><td>2054</td><td></td></tr>
<tr><td>4</td><td>2014</td><td>0</td><td>2057</td><td></td></tr>
<tr><td>5</td><td>2012</td><td>0</td><td>2100</td><td></td></tr>
<tr><td>6</td><td>2016</td><td>0</td><td>2122</td><td></td></tr>
<tr><td>7</td><td>2010</td><td>0</td><td>2305</td><td></td></tr>
<tr><td>8</td><td>2019</td><td>0</td><td>2352</td><td></td></tr>
<tr><td>9</td><td>2018</td><td>0</td><td>2445</td><td></td></tr>
<tr><td>10</td><td>2008</td><td>0</td><td>2463</td><td></td></tr>

<tr><td colspan="5"><b>Most Shots Blocked In 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2019</td><td>1100</td><td>24</td><td><a href="OTHL-1100.html">Game Direct Link</a></td></tr><tr><td>2</td><td>2017</td><td>462</td><td>22</td><td></td></tr><tr><td>3</td><td>2017</td><td>650</td><td>22</td><td></td></tr><tr><td>4</td><td>2016</td><td>1052</td><td>21</td><td></td></tr><tr><td>5</td><td>2017</td><td>68</td><td>21</td><td></td></tr><tr><td>6</td><td>2010</td><td>1084</td><td>20</td><td></td></tr><tr><td>7</td><td>2016</td><td>17</td><td>20</td><td></td></tr><tr><td>8</td><td>2019</td><td>1169</td><td>20</td><td><a href="OTHL-1169.html">Game Direct Link</a></td></tr><tr><td>9</td><td>2019</td><td>1220</td><td>20</td><td><a href="OTHL-1220.html">Game Direct Link</a></td></tr><tr><td>10</td><td>2010</td><td>922</td><td>19</td><td></td></tr>
<tr><td colspan="5"><b>Most Shots Blocked In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>0</td><td>0</td><td>32000</td><td></td></tr>
<tr><td>2</td><td>0</td><td>0</td><td>32000</td><td></td></tr>

<tr><td colspan="5"><b>Less Shots Block In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2014</td><td>0</td><td>620</td><td></td></tr>
<tr><td>2</td><td>2015</td><td>0</td><td>631</td><td></td></tr>
<tr><td>3</td><td>2008</td><td>0</td><td>642</td><td></td></tr>
<tr><td>4</td><td>2013</td><td>0</td><td>654</td><td></td></tr>
<tr><td>5</td><td>2009</td><td>0</td><td>658</td><td></td></tr>
<tr><td>6</td><td>2010</td><td>0</td><td>703</td><td></td></tr>
<tr><td>7</td><td>2012</td><td>0</td><td>744</td><td></td></tr>
<tr><td>8</td><td>2018</td><td>0</td><td>756</td><td></td></tr>
<tr><td>9</td><td>2011</td><td>0</td><td>794</td><td></td></tr>

<tr><td colspan="5"><b>Most Shots Against In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2019</td><td>0</td><td>2936</td><td></td></tr>
<tr><td>2</td><td>2018</td><td>0</td><td>2709</td><td></td></tr>
<tr><td>3</td><td>2017</td><td>0</td><td>2665</td><td></td></tr>
<tr><td>4</td><td>2012</td><td>0</td><td>2504</td><td></td></tr>
<tr><td>5</td><td>2011</td><td>0</td><td>2350</td><td></td></tr>
<tr><td>6</td><td>2016</td><td>0</td><td>2334</td><td></td></tr>
<tr><td>7</td><td>2015</td><td>0</td><td>2332</td><td></td></tr>
<tr><td>8</td><td>2010</td><td>0</td><td>2329</td><td></td></tr>
<tr><td>9</td><td>2013</td><td>0</td><td>2287</td><td></td></tr>
<tr><td>10</td><td>2008</td><td>0</td><td>2274</td><td></td></tr>

<tr><td colspan="5"><b>Less Shots Against In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2014</td><td>0</td><td>2185</td><td></td></tr>
<tr><td>2</td><td>2009</td><td>0</td><td>2188</td><td></td></tr>
<tr><td>3</td><td>2008</td><td>0</td><td>2274</td><td></td></tr>
<tr><td>4</td><td>2013</td><td>0</td><td>2287</td><td></td></tr>
<tr><td>5</td><td>2010</td><td>0</td><td>2329</td><td></td></tr>
<tr><td>6</td><td>2011</td><td>0</td><td>2350</td><td></td></tr>
<tr><td>7</td><td>2012</td><td>0</td><td>2504</td><td></td></tr>

<tr><td colspan="5"><b>Most Pim In 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2009</td><td>738</td><td>76</td><td></td></tr><tr><td>2</td><td>2011</td><td>1142</td><td>60</td><td></td></tr><tr><td>3</td><td>2010</td><td>52</td><td>55</td><td></td></tr><tr><td>4</td><td>2008</td><td>804</td><td>47</td><td></td></tr><tr><td>5</td><td>2011</td><td>425</td><td>45</td><td></td></tr><tr><td>6</td><td>2010</td><td>890</td><td>44</td><td></td></tr><tr><td>7</td><td>2016</td><td>106</td><td>42</td><td></td></tr><tr><td>8</td><td>2012</td><td>170</td><td>36</td><td></td></tr><tr><td>9</td><td>2016</td><td>1067</td><td>36</td><td></td></tr><tr><td>10</td><td>2019</td><td>1235</td><td>36</td><td><a href="OTHL-1235.html">Game Direct Link</a></td></tr>
<tr><td colspan="5"><b>Most Pim In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2009</td><td>0</td><td>1352</td><td></td></tr>
<tr><td>2</td><td>2008</td><td>0</td><td>1248</td><td></td></tr>
<tr><td>3</td><td>2010</td><td>0</td><td>1218</td><td></td></tr>
<tr><td>4</td><td>2011</td><td>0</td><td>1088</td><td></td></tr>
<tr><td>5</td><td>2016</td><td>0</td><td>1009</td><td></td></tr>
<tr><td>6</td><td>2012</td><td>0</td><td>888</td><td></td></tr>
<tr><td>7</td><td>2019</td><td>0</td><td>794</td><td></td></tr>
<tr><td>8</td><td>2018</td><td>0</td><td>552</td><td></td></tr>

<tr><td colspan="5"><b>Less Pim In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2018</td><td>0</td><td>552</td><td></td></tr>
<tr><td>2</td><td>2017</td><td>0</td><td>627</td><td></td></tr>
<tr><td>3</td><td>2015</td><td>0</td><td>671</td><td></td></tr>
<tr><td>4</td><td>2014</td><td>0</td><td>681</td><td></td></tr>
<tr><td>5</td><td>2019</td><td>0</td><td>794</td><td></td></tr>
<tr><td>6</td><td>2013</td><td>0</td><td>805</td><td></td></tr>
<tr><td>7</td><td>2012</td><td>0</td><td>888</td><td></td></tr>
<tr><td>8</td><td>2016</td><td>0</td><td>1009</td><td></td></tr>
<tr><td>9</td><td>2011</td><td>0</td><td>1088</td><td></td></tr>
<tr><td>10</td><td>2010</td><td>0</td><td>1218</td><td></td></tr>

<tr><td colspan="5"><b>Most Hits In 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2011</td><td>832</td><td>45</td><td></td></tr><tr><td>2</td><td>2012</td><td>812</td><td>36</td><td></td></tr><tr><td>3</td><td>2016</td><td>984</td><td>36</td><td></td></tr><tr><td>4</td><td>2018</td><td>213</td><td>36</td><td></td></tr><tr><td>5</td><td>2019</td><td>144</td><td>36</td><td><a href="OTHL-144.html">Game Direct Link</a></td></tr><tr><td>6</td><td>2008</td><td>948</td><td>35</td><td></td></tr><tr><td>7</td><td>2012</td><td>1020</td><td>34</td><td></td></tr><tr><td>8</td><td>2018</td><td>619</td><td>34</td><td></td></tr><tr><td>9</td><td>2009</td><td>159</td><td>33</td><td></td></tr><tr><td>10</td><td>2013</td><td>411</td><td>33</td><td></td></tr>
<tr><td colspan="5"><b>Most Hits In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2011</td><td>0</td><td>1912</td><td></td></tr>
<tr><td>2</td><td>2016</td><td>0</td><td>1764</td><td></td></tr>
<tr><td>3</td><td>2019</td><td>0</td><td>1760</td><td></td></tr>
<tr><td>4</td><td>2012</td><td>0</td><td>1731</td><td></td></tr>
<tr><td>5</td><td>2018</td><td>0</td><td>1694</td><td></td></tr>
<tr><td>6</td><td>2017</td><td>0</td><td>1656</td><td></td></tr>
<tr><td>7</td><td>2013</td><td>0</td><td>1590</td><td></td></tr>
<tr><td>8</td><td>2008</td><td>0</td><td>1577</td><td></td></tr>
<tr><td>9</td><td>2015</td><td>0</td><td>1548</td><td></td></tr>
<tr><td>10</td><td>2010</td><td>0</td><td>1545</td><td></td></tr>

<tr><td colspan="5"><b>Less Hit In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2014</td><td>0</td><td>1501</td><td></td></tr>
<tr><td>2</td><td>2009</td><td>0</td><td>1532</td><td></td></tr>
<tr><td>3</td><td>2010</td><td>0</td><td>1545</td><td></td></tr>
<tr><td>4</td><td>2015</td><td>0</td><td>1548</td><td></td></tr>
<tr><td>5</td><td>2008</td><td>0</td><td>1577</td><td></td></tr>
<tr><td>6</td><td>2013</td><td>0</td><td>1590</td><td></td></tr>
<tr><td>7</td><td>2018</td><td>0</td><td>1694</td><td></td></tr>
<tr><td>8</td><td>2012</td><td>0</td><td>1731</td><td></td></tr>
<tr><td>9</td><td>2019</td><td>0</td><td>1760</td><td></td></tr>
<tr><td>10</td><td>2011</td><td>0</td><td>1912</td><td></td></tr>

<tr><td colspan="5"><b>Most Empty Net Goal In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2009</td><td>0</td><td>3</td><td></td></tr>
<tr><td>2</td><td>2019</td><td>0</td><td>3</td><td></td></tr>
<tr><td>3</td><td>2010</td><td>0</td><td>2</td><td></td></tr>
<tr><td>4</td><td>2013</td><td>0</td><td>2</td><td></td></tr>
<tr><td>5</td><td>2008</td><td>0</td><td>1</td><td></td></tr>
<tr><td>6</td><td>2011</td><td>0</td><td>1</td><td></td></tr>
<tr><td>7</td><td>2012</td><td>0</td><td>1</td><td></td></tr>

<tr><td colspan="5"><b>Best PP In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2018</td><td>0</td><td>19.50%</td><td></td></tr>
<tr><td>2</td><td>2009</td><td>0</td><td>19.40%</td><td></td></tr>
<tr><td>3</td><td>2008</td><td>0</td><td>17.50%</td><td></td></tr>
<tr><td>4</td><td>2011</td><td>0</td><td>17.40%</td><td></td></tr>
<tr><td>5</td><td>2010</td><td>0</td><td>17.30%</td><td></td></tr>
<tr><td>6</td><td>2016</td><td>0</td><td>17.00%</td><td></td></tr>
<tr><td>7</td><td>2015</td><td>0</td><td>15.90%</td><td></td></tr>
<tr><td>8</td><td>2013</td><td>0</td><td>15.60%</td><td></td></tr>
<tr><td>9</td><td>2019</td><td>0</td><td>15.10%</td><td></td></tr>
<tr><td>10</td><td>2012</td><td>0</td><td>14.90%</td><td></td></tr>

<tr><td colspan="5"><b>Best PK In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2008</td><td>0</td><td>86.10%</td><td></td></tr>
<tr><td>2</td><td>2017</td><td>0</td><td>83.80%</td><td></td></tr>
<tr><td>3</td><td>2015</td><td>0</td><td>83.00%</td><td></td></tr>
<tr><td>4</td><td>2010</td><td>0</td><td>82.90%</td><td></td></tr>
<tr><td>5</td><td>2013</td><td>0</td><td>81.90%</td><td></td></tr>
<tr><td>6</td><td>2009</td><td>0</td><td>81.70%</td><td></td></tr>
<tr><td>7</td><td>2011</td><td>0</td><td>81.30%</td><td></td></tr>
<tr><td>8</td><td>2019</td><td>0</td><td>81.00%</td><td></td></tr>
<tr><td>9</td><td>2012</td><td>0</td><td>79.80%</td><td></td></tr>
<tr><td>10</td><td>2018</td><td>0</td><td>76.90%</td><td></td></tr>

<tr><td colspan="5"><b>Worse PP In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2017</td><td>0</td><td>10.00%</td><td></td></tr>
<tr><td>2</td><td>2014</td><td>0</td><td>11.40%</td><td></td></tr>
<tr><td>3</td><td>2012</td><td>0</td><td>14.90%</td><td></td></tr>
<tr><td>4</td><td>2019</td><td>0</td><td>15.10%</td><td></td></tr>
<tr><td>5</td><td>2013</td><td>0</td><td>15.60%</td><td></td></tr>
<tr><td>6</td><td>2015</td><td>0</td><td>15.90%</td><td></td></tr>
<tr><td>7</td><td>2016</td><td>0</td><td>17.00%</td><td></td></tr>
<tr><td>8</td><td>2010</td><td>0</td><td>17.30%</td><td></td></tr>
<tr><td>9</td><td>2011</td><td>0</td><td>17.40%</td><td></td></tr>
<tr><td>10</td><td>2008</td><td>0</td><td>17.50%</td><td></td></tr>

<tr><td colspan="5"><b>Worse PK In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2018</td><td>0</td><td>76.90%</td><td></td></tr>
<tr><td>2</td><td>2016</td><td>0</td><td>77.80%</td><td></td></tr>
<tr><td>3</td><td>2012</td><td>0</td><td>79.80%</td><td></td></tr>
<tr><td>4</td><td>2014</td><td>0</td><td>80.90%</td><td></td></tr>
<tr><td>5</td><td>2019</td><td>0</td><td>81.00%</td><td></td></tr>
<tr><td>6</td><td>2011</td><td>0</td><td>81.30%</td><td></td></tr>
<tr><td>7</td><td>2009</td><td>0</td><td>81.70%</td><td></td></tr>
<tr><td>8</td><td>2013</td><td>0</td><td>81.90%</td><td></td></tr>
<tr><td>9</td><td>2010</td><td>0</td><td>82.90%</td><td></td></tr>
<tr><td>10</td><td>2008</td><td>0</td><td>86.10%</td><td></td></tr>

<tr><td colspan="5"><b>Most Win In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2009</td><td>0</td><td>56</td><td></td></tr>
<tr><td>2</td><td>2015</td><td>0</td><td>44</td><td></td></tr>
<tr><td>3</td><td>2008</td><td>0</td><td>43</td><td></td></tr>
<tr><td>4</td><td>2018</td><td>0</td><td>38</td><td></td></tr>
<tr><td>5</td><td>2010</td><td>0</td><td>37</td><td></td></tr>
<tr><td>6</td><td>2011</td><td>0</td><td>37</td><td></td></tr>
<tr><td>7</td><td>2014</td><td>0</td><td>35</td><td></td></tr>
<tr><td>8</td><td>2019</td><td>0</td><td>27</td><td></td></tr>
<tr><td>9</td><td>2012</td><td>0</td><td>26</td><td></td></tr>

<tr><td colspan="5"><b>Less Win In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2017</td><td>0</td><td>20</td><td></td></tr>
<tr><td>2</td><td>2013</td><td>0</td><td>23</td><td></td></tr>
<tr><td>3</td><td>2012</td><td>0</td><td>26</td><td></td></tr>
<tr><td>4</td><td>2019</td><td>0</td><td>27</td><td></td></tr>
<tr><td>5</td><td>2014</td><td>0</td><td>35</td><td></td></tr>
<tr><td>6</td><td>2016</td><td>0</td><td>36</td><td></td></tr>
<tr><td>7</td><td>2010</td><td>0</td><td>37</td><td></td></tr>
<tr><td>8</td><td>2011</td><td>0</td><td>37</td><td></td></tr>
<tr><td>9</td><td>2018</td><td>0</td><td>38</td><td></td></tr>
<tr><td>10</td><td>2008</td><td>0</td><td>43</td><td></td></tr>

<tr><td colspan="5"><b>Most Lost In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2017</td><td>0</td><td>62</td><td></td></tr>
<tr><td>2</td><td>2013</td><td>0</td><td>59</td><td></td></tr>
<tr><td>3</td><td>2012</td><td>0</td><td>56</td><td></td></tr>
<tr><td>4</td><td>2019</td><td>0</td><td>55</td><td></td></tr>
<tr><td>5</td><td>2014</td><td>0</td><td>47</td><td></td></tr>
<tr><td>6</td><td>2010</td><td>0</td><td>46</td><td></td></tr>
<tr><td>7</td><td>2016</td><td>0</td><td>46</td><td></td></tr>
<tr><td>8</td><td>2011</td><td>0</td><td>45</td><td></td></tr>
<tr><td>9</td><td>2018</td><td>0</td><td>44</td><td></td></tr>
<tr><td>10</td><td>2009</td><td>0</td><td>26</td><td></td></tr>

<tr><td colspan="5"><b>Less Lost In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2008</td><td>0</td><td>24</td><td></td></tr>
<tr><td>2</td><td>2009</td><td>0</td><td>26</td><td></td></tr>
<tr><td>3</td><td>2015</td><td>0</td><td>38</td><td></td></tr>
<tr><td>4</td><td>2018</td><td>0</td><td>44</td><td></td></tr>
<tr><td>5</td><td>2011</td><td>0</td><td>45</td><td></td></tr>
<tr><td>6</td><td>2010</td><td>0</td><td>46</td><td></td></tr>
<tr><td>7</td><td>2014</td><td>0</td><td>47</td><td></td></tr>
<tr><td>8</td><td>2019</td><td>0</td><td>55</td><td></td></tr>
<tr><td>9</td><td>2012</td><td>0</td><td>56</td><td></td></tr>

<tr><td colspan="5"><b>Most Point In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2009</td><td>0</td><td>115</td><td></td></tr>
<tr><td>2</td><td>2008</td><td>0</td><td>107</td><td></td></tr>
<tr><td>3</td><td>2015</td><td>0</td><td>94</td><td></td></tr>
<tr><td>4</td><td>2011</td><td>0</td><td>85</td><td></td></tr>
<tr><td>5</td><td>2010</td><td>0</td><td>82</td><td></td></tr>
<tr><td>6</td><td>2018</td><td>0</td><td>81</td><td></td></tr>
<tr><td>7</td><td>2014</td><td>0</td><td>74</td><td></td></tr>
<tr><td>8</td><td>2012</td><td>0</td><td>61</td><td></td></tr>
<tr><td>9</td><td>2019</td><td>0</td><td>55</td><td></td></tr>

<tr><td colspan="5"><b>Less Points In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2017</td><td>0</td><td>52</td><td></td></tr>
<tr><td>2</td><td>2013</td><td>0</td><td>55</td><td></td></tr>
<tr><td>3</td><td>2019</td><td>0</td><td>55</td><td></td></tr>
<tr><td>4</td><td>2012</td><td>0</td><td>61</td><td></td></tr>
<tr><td>5</td><td>2014</td><td>0</td><td>74</td><td></td></tr>
<tr><td>6</td><td>2018</td><td>0</td><td>81</td><td></td></tr>
<tr><td>7</td><td>2010</td><td>0</td><td>82</td><td></td></tr>
<tr><td>8</td><td>2016</td><td>0</td><td>82</td><td></td></tr>
<tr><td>9</td><td>2011</td><td>0</td><td>85</td><td></td></tr>
<tr><td>10</td><td>2008</td><td>0</td><td>107</td><td></td></tr>

<tr><td colspan="5"><b>Most Win Home In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>0</td><td>0</td><td>32000</td><td></td></tr>
<tr><td>2</td><td>0</td><td>0</td><td>32000</td><td></td></tr>

<tr><td colspan="5"><b>Most Win Visitor In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>0</td><td>0</td><td>32000</td><td></td></tr>
<tr><td>2</td><td>0</td><td>0</td><td>32000</td><td></td></tr>

</table></div>
<h1 class="TeamRecordsPro_NSH"><a id="Predators">Predators</a></h1>
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
<br /><table class="STHSRecordTable">
<tr><td colspan="5"><b>Most Goals in 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2012</td><td>98</td><td>8</td><td></td></tr><tr><td>2</td><td>2013</td><td>264</td><td>8</td><td></td></tr><tr><td>3</td><td>2008</td><td>33</td><td>7</td><td></td></tr><tr><td>4</td><td>2008</td><td>269</td><td>7</td><td></td></tr><tr><td>5</td><td>2010</td><td>547</td><td>7</td><td></td></tr><tr><td>6</td><td>2013</td><td>53</td><td>7</td><td></td></tr><tr><td>7</td><td>2013</td><td>463</td><td>7</td><td></td></tr><tr><td>8</td><td>2013</td><td>631</td><td>7</td><td></td></tr><tr><td>9</td><td>2015</td><td>594</td><td>7</td><td></td></tr><tr><td>10</td><td>2015</td><td>621</td><td>7</td><td></td></tr>
<tr><td colspan="5"><b>Most Goals in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2013</td><td>0</td><td>262</td><td></td></tr>
<tr><td>2</td><td>2014</td><td>0</td><td>248</td><td></td></tr>
<tr><td>3</td><td>2018</td><td>0</td><td>248</td><td></td></tr>
<tr><td>4</td><td>2019</td><td>0</td><td>248</td><td></td></tr>
<tr><td>5</td><td>2010</td><td>0</td><td>245</td><td></td></tr>
<tr><td>6</td><td>2016</td><td>0</td><td>245</td><td></td></tr>
<tr><td>7</td><td>2017</td><td>0</td><td>233</td><td></td></tr>
<tr><td>8</td><td>2015</td><td>0</td><td>230</td><td></td></tr>
<tr><td>9</td><td>2009</td><td>0</td><td>227</td><td></td></tr>
<tr><td>10</td><td>2008</td><td>0</td><td>224</td><td></td></tr>

<tr><td colspan="5"><b>Less Goal in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2011</td><td>0</td><td>198</td><td></td></tr>
<tr><td>2</td><td>2012</td><td>0</td><td>212</td><td></td></tr>
<tr><td>3</td><td>2008</td><td>0</td><td>224</td><td></td></tr>
<tr><td>4</td><td>2009</td><td>0</td><td>227</td><td></td></tr>
<tr><td>5</td><td>2015</td><td>0</td><td>230</td><td></td></tr>
<tr><td>6</td><td>2010</td><td>0</td><td>245</td><td></td></tr>

<tr><td colspan="5"><b>Most Goals Against in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2009</td><td>0</td><td>284</td><td></td></tr>
<tr><td>2</td><td>2008</td><td>0</td><td>261</td><td></td></tr>
<tr><td>3</td><td>2010</td><td>0</td><td>254</td><td></td></tr>
<tr><td>4</td><td>2018</td><td>0</td><td>252</td><td></td></tr>
<tr><td>5</td><td>2011</td><td>0</td><td>232</td><td></td></tr>
<tr><td>6</td><td>2014</td><td>0</td><td>231</td><td></td></tr>
<tr><td>7</td><td>2012</td><td>0</td><td>228</td><td></td></tr>
<tr><td>8</td><td>2019</td><td>0</td><td>218</td><td></td></tr>

<tr><td colspan="5"><b>Less Goal Against in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2017</td><td>0</td><td>172</td><td></td></tr>
<tr><td>2</td><td>2015</td><td>0</td><td>187</td><td></td></tr>
<tr><td>3</td><td>2013</td><td>0</td><td>199</td><td></td></tr>
<tr><td>4</td><td>2016</td><td>0</td><td>207</td><td></td></tr>
<tr><td>5</td><td>2019</td><td>0</td><td>218</td><td></td></tr>
<tr><td>6</td><td>2012</td><td>0</td><td>228</td><td></td></tr>
<tr><td>7</td><td>2014</td><td>0</td><td>231</td><td></td></tr>
<tr><td>8</td><td>2011</td><td>0</td><td>232</td><td></td></tr>
<tr><td>9</td><td>2018</td><td>0</td><td>252</td><td></td></tr>
<tr><td>10</td><td>2010</td><td>0</td><td>254</td><td></td></tr>

<tr><td colspan="5"><b>Most Assists in 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2012</td><td>98</td><td>15</td><td></td></tr><tr><td>2</td><td>2013</td><td>264</td><td>15</td><td></td></tr><tr><td>3</td><td>2008</td><td>33</td><td>14</td><td></td></tr><tr><td>4</td><td>2010</td><td>547</td><td>14</td><td></td></tr><tr><td>5</td><td>2015</td><td>594</td><td>14</td><td></td></tr><tr><td>6</td><td>2018</td><td>1265</td><td>14</td><td></td></tr><tr><td>7</td><td>2008</td><td>269</td><td>13</td><td></td></tr><tr><td>8</td><td>2013</td><td>53</td><td>13</td><td></td></tr><tr><td>9</td><td>2017</td><td>591</td><td>13</td><td></td></tr><tr><td>10</td><td>2018</td><td>729</td><td>13</td><td></td></tr>
<tr><td colspan="5"><b>Most Assists in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2013</td><td>0</td><td>451</td><td></td></tr>
<tr><td>2</td><td>2014</td><td>0</td><td>442</td><td></td></tr>
<tr><td>3</td><td>2010</td><td>0</td><td>437</td><td></td></tr>
<tr><td>4</td><td>2018</td><td>0</td><td>434</td><td></td></tr>
<tr><td>5</td><td>2016</td><td>0</td><td>429</td><td></td></tr>
<tr><td>6</td><td>2019</td><td>0</td><td>422</td><td></td></tr>
<tr><td>7</td><td>2017</td><td>0</td><td>415</td><td></td></tr>
<tr><td>8</td><td>2009</td><td>0</td><td>408</td><td></td></tr>
<tr><td>9</td><td>2015</td><td>0</td><td>398</td><td></td></tr>
<tr><td>10</td><td>2008</td><td>0</td><td>390</td><td></td></tr>

<tr><td colspan="5"><b>Less Assist in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2011</td><td>0</td><td>316</td><td></td></tr>
<tr><td>2</td><td>2012</td><td>0</td><td>366</td><td></td></tr>
<tr><td>3</td><td>2008</td><td>0</td><td>390</td><td></td></tr>
<tr><td>4</td><td>2015</td><td>0</td><td>398</td><td></td></tr>
<tr><td>5</td><td>2009</td><td>0</td><td>408</td><td></td></tr>
<tr><td>6</td><td>2019</td><td>0</td><td>422</td><td></td></tr>
<tr><td>7</td><td>2018</td><td>0</td><td>434</td><td></td></tr>
<tr><td>8</td><td>2010</td><td>0</td><td>437</td><td></td></tr>

<tr><td colspan="5"><b>Most Game Points in 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2012</td><td>98</td><td>23</td><td></td></tr><tr><td>2</td><td>2013</td><td>264</td><td>23</td><td></td></tr><tr><td>3</td><td>2008</td><td>33</td><td>21</td><td></td></tr><tr><td>4</td><td>2010</td><td>547</td><td>21</td><td></td></tr><tr><td>5</td><td>2015</td><td>594</td><td>21</td><td></td></tr><tr><td>6</td><td>2018</td><td>1265</td><td>21</td><td></td></tr><tr><td>7</td><td>2008</td><td>269</td><td>20</td><td></td></tr><tr><td>8</td><td>2013</td><td>53</td><td>20</td><td></td></tr><tr><td>9</td><td>2017</td><td>591</td><td>20</td><td></td></tr><tr><td>10</td><td>2018</td><td>729</td><td>20</td><td></td></tr>
<tr><td colspan="5"><b>Most Game Points in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>0</td><td>0</td><td>32000</td><td></td></tr>
<tr><td>2</td><td>0</td><td>0</td><td>32000</td><td></td></tr>

<tr><td colspan="5"><b>Less Game Point In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2011</td><td>0</td><td>514</td><td></td></tr>
<tr><td>2</td><td>2012</td><td>0</td><td>578</td><td></td></tr>
<tr><td>3</td><td>2008</td><td>0</td><td>614</td><td></td></tr>
<tr><td>4</td><td>2015</td><td>0</td><td>628</td><td></td></tr>
<tr><td>5</td><td>2009</td><td>0</td><td>635</td><td></td></tr>
<tr><td>6</td><td>2019</td><td>0</td><td>670</td><td></td></tr>
<tr><td>7</td><td>2010</td><td>0</td><td>682</td><td></td></tr>

<tr><td colspan="5"><b>Most Shots In 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2018</td><td>975</td><td>58</td><td></td></tr><tr><td>2</td><td>2018</td><td>438</td><td>57</td><td></td></tr><tr><td>3</td><td>2019</td><td>357</td><td>56</td><td><a href="OTHL-357.html">Game Direct Link</a></td></tr><tr><td>4</td><td>2018</td><td>1265</td><td>53</td><td></td></tr><tr><td>5</td><td>2018</td><td>670</td><td>52</td><td></td></tr><tr><td>6</td><td>2008</td><td>23</td><td>51</td><td></td></tr><tr><td>7</td><td>2018</td><td>869</td><td>51</td><td></td></tr><tr><td>8</td><td>2008</td><td>298</td><td>50</td><td></td></tr><tr><td>9</td><td>2017</td><td>591</td><td>50</td><td></td></tr><tr><td>10</td><td>2017</td><td>922</td><td>50</td><td></td></tr>
<tr><td colspan="5"><b>Most Shots In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2018</td><td>0</td><td>2961</td><td></td></tr>
<tr><td>2</td><td>2019</td><td>0</td><td>2942</td><td></td></tr>
<tr><td>3</td><td>2017</td><td>0</td><td>2687</td><td></td></tr>
<tr><td>4</td><td>2013</td><td>0</td><td>2548</td><td></td></tr>
<tr><td>5</td><td>2014</td><td>0</td><td>2351</td><td></td></tr>
<tr><td>6</td><td>2016</td><td>0</td><td>2267</td><td></td></tr>
<tr><td>7</td><td>2015</td><td>0</td><td>2261</td><td></td></tr>
<tr><td>8</td><td>2011</td><td>0</td><td>2232</td><td></td></tr>
<tr><td>9</td><td>2008</td><td>0</td><td>2205</td><td></td></tr>
<tr><td>10</td><td>2010</td><td>0</td><td>2172</td><td></td></tr>

<tr><td colspan="5"><b>Less Shots In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2009</td><td>0</td><td>2049</td><td></td></tr>
<tr><td>2</td><td>2012</td><td>0</td><td>2059</td><td></td></tr>
<tr><td>3</td><td>2010</td><td>0</td><td>2172</td><td></td></tr>
<tr><td>4</td><td>2008</td><td>0</td><td>2205</td><td></td></tr>
<tr><td>5</td><td>2011</td><td>0</td><td>2232</td><td></td></tr>

<tr><td colspan="5"><b>Most Shots Blocked In 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2011</td><td>7</td><td>26</td><td></td></tr><tr><td>2</td><td>2018</td><td>246</td><td>23</td><td></td></tr><tr><td>3</td><td>2011</td><td>284</td><td>20</td><td></td></tr><tr><td>4</td><td>2011</td><td>843</td><td>19</td><td></td></tr><tr><td>5</td><td>2012</td><td>4</td><td>19</td><td></td></tr><tr><td>6</td><td>2018</td><td>1170</td><td>19</td><td></td></tr><tr><td>7</td><td>2019</td><td>429</td><td>19</td><td><a href="OTHL-429.html">Game Direct Link</a></td></tr><tr><td>8</td><td>2019</td><td>508</td><td>19</td><td><a href="OTHL-508.html">Game Direct Link</a></td></tr><tr><td>9</td><td>2011</td><td>503</td><td>18</td><td></td></tr><tr><td>10</td><td>2018</td><td>546</td><td>18</td><td></td></tr>
<tr><td colspan="5"><b>Most Shots Blocked In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>0</td><td>0</td><td>32000</td><td></td></tr>
<tr><td>2</td><td>0</td><td>0</td><td>32000</td><td></td></tr>

<tr><td colspan="5"><b>Less Shots Block In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2015</td><td>0</td><td>577</td><td></td></tr>
<tr><td>2</td><td>2013</td><td>0</td><td>598</td><td></td></tr>
<tr><td>3</td><td>2014</td><td>0</td><td>604</td><td></td></tr>
<tr><td>4</td><td>2016</td><td>0</td><td>610</td><td></td></tr>
<tr><td>5</td><td>2009</td><td>0</td><td>644</td><td></td></tr>
<tr><td>6</td><td>2010</td><td>0</td><td>645</td><td></td></tr>
<tr><td>7</td><td>2012</td><td>0</td><td>686</td><td></td></tr>
<tr><td>8</td><td>2008</td><td>0</td><td>708</td><td></td></tr>
<tr><td>9</td><td>2019</td><td>0</td><td>760</td><td></td></tr>
<tr><td>10</td><td>2018</td><td>0</td><td>813</td><td></td></tr>

<tr><td colspan="5"><b>Most Shots Against In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2018</td><td>0</td><td>2800</td><td></td></tr>
<tr><td>2</td><td>2019</td><td>0</td><td>2716</td><td></td></tr>
<tr><td>3</td><td>2008</td><td>0</td><td>2462</td><td></td></tr>
<tr><td>4</td><td>2011</td><td>0</td><td>2387</td><td></td></tr>
<tr><td>5</td><td>2017</td><td>0</td><td>2330</td><td></td></tr>
<tr><td>6</td><td>2010</td><td>0</td><td>2292</td><td></td></tr>
<tr><td>7</td><td>2012</td><td>0</td><td>2262</td><td></td></tr>
<tr><td>8</td><td>2009</td><td>0</td><td>2230</td><td></td></tr>

<tr><td colspan="5"><b>Less Shots Against In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2015</td><td>0</td><td>1989</td><td></td></tr>
<tr><td>2</td><td>2013</td><td>0</td><td>2036</td><td></td></tr>
<tr><td>3</td><td>2016</td><td>0</td><td>2050</td><td></td></tr>
<tr><td>4</td><td>2014</td><td>0</td><td>2053</td><td></td></tr>
<tr><td>5</td><td>2009</td><td>0</td><td>2230</td><td></td></tr>
<tr><td>6</td><td>2012</td><td>0</td><td>2262</td><td></td></tr>
<tr><td>7</td><td>2010</td><td>0</td><td>2292</td><td></td></tr>
<tr><td>8</td><td>2011</td><td>0</td><td>2387</td><td></td></tr>
<tr><td>9</td><td>2008</td><td>0</td><td>2462</td><td></td></tr>

<tr><td colspan="5"><b>Most Pim In 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2008</td><td>241</td><td>45</td><td></td></tr><tr><td>2</td><td>2011</td><td>706</td><td>41</td><td></td></tr><tr><td>3</td><td>2019</td><td>357</td><td>39</td><td><a href="OTHL-357.html">Game Direct Link</a></td></tr><tr><td>4</td><td>2011</td><td>843</td><td>38</td><td></td></tr><tr><td>5</td><td>2016</td><td>451</td><td>38</td><td></td></tr><tr><td>6</td><td>2010</td><td>1038</td><td>37</td><td></td></tr><tr><td>7</td><td>2011</td><td>1036</td><td>37</td><td></td></tr><tr><td>8</td><td>2009</td><td>1197</td><td>35</td><td></td></tr><tr><td>9</td><td>2011</td><td>523</td><td>34</td><td></td></tr><tr><td>10</td><td>2014</td><td>303</td><td>34</td><td></td></tr>
<tr><td colspan="5"><b>Most Pim In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2008</td><td>0</td><td>1304</td><td></td></tr>
<tr><td>2</td><td>2011</td><td>0</td><td>1186</td><td></td></tr>
<tr><td>3</td><td>2009</td><td>0</td><td>1151</td><td></td></tr>
<tr><td>4</td><td>2010</td><td>0</td><td>1150</td><td></td></tr>
<tr><td>5</td><td>2016</td><td>0</td><td>841</td><td></td></tr>
<tr><td>6</td><td>2012</td><td>0</td><td>771</td><td></td></tr>
<tr><td>7</td><td>2018</td><td>0</td><td>722</td><td></td></tr>
<tr><td>8</td><td>2019</td><td>0</td><td>713</td><td></td></tr>

<tr><td colspan="5"><b>Less Pim In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2014</td><td>0</td><td>598</td><td></td></tr>
<tr><td>2</td><td>2013</td><td>0</td><td>601</td><td></td></tr>
<tr><td>3</td><td>2017</td><td>0</td><td>603</td><td></td></tr>
<tr><td>4</td><td>2015</td><td>0</td><td>621</td><td></td></tr>
<tr><td>5</td><td>2019</td><td>0</td><td>713</td><td></td></tr>
<tr><td>6</td><td>2018</td><td>0</td><td>722</td><td></td></tr>
<tr><td>7</td><td>2012</td><td>0</td><td>771</td><td></td></tr>
<tr><td>8</td><td>2016</td><td>0</td><td>841</td><td></td></tr>
<tr><td>9</td><td>2010</td><td>0</td><td>1150</td><td></td></tr>
<tr><td>10</td><td>2009</td><td>0</td><td>1151</td><td></td></tr>

<tr><td colspan="5"><b>Most Hits In 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2018</td><td>327</td><td>40</td><td></td></tr><tr><td>2</td><td>2014</td><td>962</td><td>38</td><td></td></tr><tr><td>3</td><td>2018</td><td>385</td><td>36</td><td></td></tr><tr><td>4</td><td>2013</td><td>865</td><td>35</td><td></td></tr><tr><td>5</td><td>2018</td><td>225</td><td>35</td><td></td></tr><tr><td>6</td><td>2019</td><td>909</td><td>35</td><td><a href="OTHL-909.html">Game Direct Link</a></td></tr><tr><td>7</td><td>2011</td><td>513</td><td>34</td><td></td></tr><tr><td>8</td><td>2013</td><td>429</td><td>34</td><td></td></tr><tr><td>9</td><td>2019</td><td>903</td><td>34</td><td><a href="OTHL-903.html">Game Direct Link</a></td></tr><tr><td>10</td><td>2012</td><td>763</td><td>33</td><td></td></tr>
<tr><td colspan="5"><b>Most Hits In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2018</td><td>0</td><td>1904</td><td></td></tr>
<tr><td>2</td><td>2019</td><td>0</td><td>1776</td><td></td></tr>
<tr><td>3</td><td>2011</td><td>0</td><td>1724</td><td></td></tr>
<tr><td>4</td><td>2012</td><td>0</td><td>1653</td><td></td></tr>
<tr><td>5</td><td>2016</td><td>0</td><td>1600</td><td></td></tr>
<tr><td>6</td><td>2015</td><td>0</td><td>1589</td><td></td></tr>
<tr><td>7</td><td>2010</td><td>0</td><td>1584</td><td></td></tr>
<tr><td>8</td><td>2013</td><td>0</td><td>1531</td><td></td></tr>
<tr><td>9</td><td>2014</td><td>0</td><td>1529</td><td></td></tr>
<tr><td>10</td><td>2008</td><td>0</td><td>1453</td><td></td></tr>

<tr><td colspan="5"><b>Less Hit In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2009</td><td>0</td><td>1451</td><td></td></tr>
<tr><td>2</td><td>2008</td><td>0</td><td>1453</td><td></td></tr>
<tr><td>3</td><td>2014</td><td>0</td><td>1529</td><td></td></tr>
<tr><td>4</td><td>2013</td><td>0</td><td>1531</td><td></td></tr>
<tr><td>5</td><td>2017</td><td>0</td><td>1550</td><td></td></tr>
<tr><td>6</td><td>2010</td><td>0</td><td>1584</td><td></td></tr>
<tr><td>7</td><td>2012</td><td>0</td><td>1653</td><td></td></tr>
<tr><td>8</td><td>2011</td><td>0</td><td>1724</td><td></td></tr>

<tr><td colspan="5"><b>Most Empty Net Goal In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2018</td><td>0</td><td>3</td><td></td></tr>
<tr><td>2</td><td>2008</td><td>0</td><td>2</td><td></td></tr>
<tr><td>3</td><td>2011</td><td>0</td><td>2</td><td></td></tr>
<tr><td>4</td><td>2012</td><td>0</td><td>2</td><td></td></tr>
<tr><td>5</td><td>2013</td><td>0</td><td>2</td><td></td></tr>
<tr><td>6</td><td>2010</td><td>0</td><td>1</td><td></td></tr>
<tr><td>7</td><td>2019</td><td>0</td><td>1</td><td></td></tr>

<tr><td colspan="5"><b>Best PP In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2010</td><td>0</td><td>19.20%</td><td></td></tr>
<tr><td>2</td><td>2011</td><td>0</td><td>19.20%</td><td></td></tr>
<tr><td>3</td><td>2013</td><td>0</td><td>18.30%</td><td></td></tr>
<tr><td>4</td><td>2017</td><td>0</td><td>18.20%</td><td></td></tr>
<tr><td>5</td><td>2016</td><td>0</td><td>17.90%</td><td></td></tr>
<tr><td>6</td><td>2015</td><td>0</td><td>16.80%</td><td></td></tr>
<tr><td>7</td><td>2009</td><td>0</td><td>16.30%</td><td></td></tr>
<tr><td>8</td><td>2019</td><td>0</td><td>16.30%</td><td></td></tr>
<tr><td>9</td><td>2014</td><td>0</td><td>16.10%</td><td></td></tr>
<tr><td>10</td><td>2012</td><td>0</td><td>15.00%</td><td></td></tr>

<tr><td colspan="5"><b>Best PK In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2015</td><td>0</td><td>88.40%</td><td></td></tr>
<tr><td>2</td><td>2013</td><td>0</td><td>86.00%</td><td></td></tr>
<tr><td>3</td><td>2019</td><td>0</td><td>85.70%</td><td></td></tr>
<tr><td>4</td><td>2016</td><td>0</td><td>85.30%</td><td></td></tr>
<tr><td>5</td><td>2014</td><td>0</td><td>85.20%</td><td></td></tr>
<tr><td>6</td><td>2017</td><td>0</td><td>85.20%</td><td></td></tr>
<tr><td>7</td><td>2010</td><td>0</td><td>83.30%</td><td></td></tr>
<tr><td>8</td><td>2008</td><td>0</td><td>83.00%</td><td></td></tr>
<tr><td>9</td><td>2012</td><td>0</td><td>81.00%</td><td></td></tr>
<tr><td>10</td><td>2011</td><td>0</td><td>79.70%</td><td></td></tr>

<tr><td colspan="5"><b>Worse PP In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2008</td><td>0</td><td>13.90%</td><td></td></tr>
<tr><td>2</td><td>2018</td><td>0</td><td>14.50%</td><td></td></tr>
<tr><td>3</td><td>2012</td><td>0</td><td>15.00%</td><td></td></tr>
<tr><td>4</td><td>2014</td><td>0</td><td>16.10%</td><td></td></tr>
<tr><td>5</td><td>2009</td><td>0</td><td>16.30%</td><td></td></tr>
<tr><td>6</td><td>2019</td><td>0</td><td>16.30%</td><td></td></tr>
<tr><td>7</td><td>2015</td><td>0</td><td>16.80%</td><td></td></tr>
<tr><td>8</td><td>2013</td><td>0</td><td>18.30%</td><td></td></tr>
<tr><td>9</td><td>2010</td><td>0</td><td>19.20%</td><td></td></tr>
<tr><td>10</td><td>2011</td><td>0</td><td>19.20%</td><td></td></tr>

<tr><td colspan="5"><b>Worse PK In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2018</td><td>0</td><td>76.80%</td><td></td></tr>
<tr><td>2</td><td>2009</td><td>0</td><td>78.70%</td><td></td></tr>
<tr><td>3</td><td>2011</td><td>0</td><td>79.70%</td><td></td></tr>
<tr><td>4</td><td>2012</td><td>0</td><td>81.00%</td><td></td></tr>
<tr><td>5</td><td>2008</td><td>0</td><td>83.00%</td><td></td></tr>
<tr><td>6</td><td>2010</td><td>0</td><td>83.30%</td><td></td></tr>

<tr><td colspan="5"><b>Most Win In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2017</td><td>0</td><td>53</td><td></td></tr>
<tr><td>2</td><td>2013</td><td>0</td><td>52</td><td></td></tr>
<tr><td>3</td><td>2015</td><td>0</td><td>50</td><td></td></tr>
<tr><td>4</td><td>2016</td><td>0</td><td>50</td><td></td></tr>
<tr><td>5</td><td>2019</td><td>0</td><td>49</td><td></td></tr>
<tr><td>6</td><td>2014</td><td>0</td><td>47</td><td></td></tr>
<tr><td>7</td><td>2010</td><td>0</td><td>41</td><td></td></tr>
<tr><td>8</td><td>2012</td><td>0</td><td>39</td><td></td></tr>
<tr><td>9</td><td>2018</td><td>0</td><td>35</td><td></td></tr>
<tr><td>10</td><td>2011</td><td>0</td><td>34</td><td></td></tr>

<tr><td colspan="5"><b>Less Win In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2008</td><td>0</td><td>28</td><td></td></tr>
<tr><td>2</td><td>2009</td><td>0</td><td>29</td><td></td></tr>
<tr><td>3</td><td>2011</td><td>0</td><td>34</td><td></td></tr>
<tr><td>4</td><td>2018</td><td>0</td><td>35</td><td></td></tr>
<tr><td>5</td><td>2012</td><td>0</td><td>39</td><td></td></tr>
<tr><td>6</td><td>2010</td><td>0</td><td>41</td><td></td></tr>

<tr><td colspan="5"><b>Most Lost In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2009</td><td>0</td><td>53</td><td></td></tr>
<tr><td>2</td><td>2011</td><td>0</td><td>48</td><td></td></tr>
<tr><td>3</td><td>2018</td><td>0</td><td>47</td><td></td></tr>
<tr><td>4</td><td>2012</td><td>0</td><td>43</td><td></td></tr>
<tr><td>5</td><td>2010</td><td>0</td><td>41</td><td></td></tr>
<tr><td>6</td><td>2008</td><td>0</td><td>38</td><td></td></tr>
<tr><td>7</td><td>2019</td><td>0</td><td>33</td><td></td></tr>

<tr><td colspan="5"><b>Less Lost In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2017</td><td>0</td><td>29</td><td></td></tr>
<tr><td>2</td><td>2013</td><td>0</td><td>30</td><td></td></tr>
<tr><td>3</td><td>2015</td><td>0</td><td>32</td><td></td></tr>
<tr><td>4</td><td>2016</td><td>0</td><td>32</td><td></td></tr>
<tr><td>5</td><td>2019</td><td>0</td><td>33</td><td></td></tr>
<tr><td>6</td><td>2014</td><td>0</td><td>35</td><td></td></tr>
<tr><td>7</td><td>2008</td><td>0</td><td>38</td><td></td></tr>
<tr><td>8</td><td>2010</td><td>0</td><td>41</td><td></td></tr>
<tr><td>9</td><td>2012</td><td>0</td><td>43</td><td></td></tr>
<tr><td>10</td><td>2018</td><td>0</td><td>47</td><td></td></tr>

<tr><td colspan="5"><b>Most Point In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2013</td><td>0</td><td>111</td><td></td></tr>
<tr><td>2</td><td>2016</td><td>0</td><td>110</td><td></td></tr>
<tr><td>3</td><td>2015</td><td>0</td><td>109</td><td></td></tr>
<tr><td>4</td><td>2017</td><td>0</td><td>108</td><td></td></tr>
<tr><td>5</td><td>2019</td><td>0</td><td>106</td><td></td></tr>
<tr><td>6</td><td>2014</td><td>0</td><td>101</td><td></td></tr>
<tr><td>7</td><td>2010</td><td>0</td><td>90</td><td></td></tr>
<tr><td>8</td><td>2018</td><td>0</td><td>82</td><td></td></tr>
<tr><td>9</td><td>2012</td><td>0</td><td>81</td><td></td></tr>
<tr><td>10</td><td>2011</td><td>0</td><td>80</td><td></td></tr>

<tr><td colspan="5"><b>Less Points In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2009</td><td>0</td><td>66</td><td></td></tr>
<tr><td>2</td><td>2008</td><td>0</td><td>78</td><td></td></tr>
<tr><td>3</td><td>2011</td><td>0</td><td>80</td><td></td></tr>
<tr><td>4</td><td>2012</td><td>0</td><td>81</td><td></td></tr>
<tr><td>5</td><td>2018</td><td>0</td><td>82</td><td></td></tr>
<tr><td>6</td><td>2010</td><td>0</td><td>90</td><td></td></tr>

<tr><td colspan="5"><b>Most Win Home In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>0</td><td>0</td><td>32000</td><td></td></tr>
<tr><td>2</td><td>0</td><td>0</td><td>32000</td><td></td></tr>

<tr><td colspan="5"><b>Most Win Visitor In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>0</td><td>0</td><td>32000</td><td></td></tr>
<tr><td>2</td><td>0</td><td>0</td><td>32000</td><td></td></tr>

</table></div>
<h1 class="TeamRecordsPro_NYR"><a id="Rangers">Rangers</a></h1>
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
<br /><table class="STHSRecordTable">
<tr><td colspan="5"><b>Most Goals in 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2010</td><td>786</td><td>9</td><td></td></tr><tr><td>2</td><td>2008</td><td>794</td><td>8</td><td></td></tr><tr><td>3</td><td>2010</td><td>104</td><td>8</td><td></td></tr><tr><td>4</td><td>2012</td><td>25</td><td>8</td><td></td></tr><tr><td>5</td><td>2016</td><td>852</td><td>8</td><td></td></tr><tr><td>6</td><td>2008</td><td>594</td><td>7</td><td></td></tr><tr><td>7</td><td>2008</td><td>746</td><td>7</td><td></td></tr><tr><td>8</td><td>2012</td><td>221</td><td>7</td><td></td></tr><tr><td>9</td><td>2013</td><td>1051</td><td>7</td><td></td></tr><tr><td>10</td><td>2016</td><td>362</td><td>7</td><td></td></tr>
<tr><td colspan="5"><b>Most Goals in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2016</td><td>0</td><td>271</td><td></td></tr>
<tr><td>2</td><td>2010</td><td>0</td><td>265</td><td></td></tr>
<tr><td>3</td><td>2008</td><td>0</td><td>264</td><td></td></tr>
<tr><td>4</td><td>2009</td><td>0</td><td>254</td><td></td></tr>
<tr><td>5</td><td>2012</td><td>0</td><td>252</td><td></td></tr>
<tr><td>6</td><td>2018</td><td>0</td><td>234</td><td></td></tr>
<tr><td>7</td><td>2019</td><td>0</td><td>227</td><td></td></tr>
<tr><td>8</td><td>2013</td><td>0</td><td>221</td><td></td></tr>
<tr><td>9</td><td>2011</td><td>0</td><td>207</td><td></td></tr>

<tr><td colspan="5"><b>Less Goal in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2015</td><td>0</td><td>165</td><td></td></tr>
<tr><td>2</td><td>2014</td><td>0</td><td>189</td><td></td></tr>
<tr><td>3</td><td>2011</td><td>0</td><td>207</td><td></td></tr>
<tr><td>4</td><td>2013</td><td>0</td><td>221</td><td></td></tr>
<tr><td>5</td><td>2017</td><td>0</td><td>221</td><td></td></tr>
<tr><td>6</td><td>2019</td><td>0</td><td>227</td><td></td></tr>
<tr><td>7</td><td>2018</td><td>0</td><td>234</td><td></td></tr>
<tr><td>8</td><td>2012</td><td>0</td><td>252</td><td></td></tr>
<tr><td>9</td><td>2009</td><td>0</td><td>254</td><td></td></tr>
<tr><td>10</td><td>2008</td><td>0</td><td>264</td><td></td></tr>

<tr><td colspan="5"><b>Most Goals Against in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2010</td><td>0</td><td>276</td><td></td></tr>
<tr><td>2</td><td>2009</td><td>0</td><td>271</td><td></td></tr>
<tr><td>3</td><td>2013</td><td>0</td><td>250</td><td></td></tr>
<tr><td>4</td><td>2008</td><td>0</td><td>245</td><td></td></tr>
<tr><td>5</td><td>2011</td><td>0</td><td>240</td><td></td></tr>
<tr><td>6</td><td>2019</td><td>0</td><td>225</td><td></td></tr>
<tr><td>7</td><td>2012</td><td>0</td><td>215</td><td></td></tr>
<tr><td>8</td><td>2018</td><td>0</td><td>210</td><td></td></tr>

<tr><td colspan="5"><b>Less Goal Against in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2016</td><td>0</td><td>200</td><td></td></tr>
<tr><td>2</td><td>2018</td><td>0</td><td>210</td><td></td></tr>
<tr><td>3</td><td>2012</td><td>0</td><td>215</td><td></td></tr>
<tr><td>4</td><td>2017</td><td>0</td><td>217</td><td></td></tr>
<tr><td>5</td><td>2019</td><td>0</td><td>225</td><td></td></tr>
<tr><td>6</td><td>2015</td><td>0</td><td>232</td><td></td></tr>
<tr><td>7</td><td>2011</td><td>0</td><td>240</td><td></td></tr>
<tr><td>8</td><td>2014</td><td>0</td><td>240</td><td></td></tr>
<tr><td>9</td><td>2008</td><td>0</td><td>245</td><td></td></tr>
<tr><td>10</td><td>2013</td><td>0</td><td>250</td><td></td></tr>

<tr><td colspan="5"><b>Most Assists in 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2010</td><td>786</td><td>18</td><td></td></tr><tr><td>2</td><td>2008</td><td>794</td><td>16</td><td></td></tr><tr><td>3</td><td>2010</td><td>104</td><td>16</td><td></td></tr><tr><td>4</td><td>2016</td><td>852</td><td>16</td><td></td></tr><tr><td>5</td><td>2008</td><td>746</td><td>14</td><td></td></tr><tr><td>6</td><td>2009</td><td>62</td><td>14</td><td></td></tr><tr><td>7</td><td>2016</td><td>565</td><td>14</td><td></td></tr><tr><td>8</td><td>2018</td><td>909</td><td>14</td><td></td></tr><tr><td>9</td><td>2012</td><td>25</td><td>13</td><td></td></tr><tr><td>10</td><td>2012</td><td>221</td><td>13</td><td></td></tr>
<tr><td colspan="5"><b>Most Assists in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2016</td><td>0</td><td>488</td><td></td></tr>
<tr><td>2</td><td>2010</td><td>0</td><td>477</td><td></td></tr>
<tr><td>3</td><td>2008</td><td>0</td><td>462</td><td></td></tr>
<tr><td>4</td><td>2009</td><td>0</td><td>460</td><td></td></tr>
<tr><td>5</td><td>2012</td><td>0</td><td>433</td><td></td></tr>
<tr><td>6</td><td>2018</td><td>0</td><td>416</td><td></td></tr>
<tr><td>7</td><td>2019</td><td>0</td><td>397</td><td></td></tr>
<tr><td>8</td><td>2013</td><td>0</td><td>389</td><td></td></tr>
<tr><td>9</td><td>2011</td><td>0</td><td>318</td><td></td></tr>

<tr><td colspan="5"><b>Less Assist in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2015</td><td>0</td><td>285</td><td></td></tr>
<tr><td>2</td><td>2014</td><td>0</td><td>309</td><td></td></tr>
<tr><td>3</td><td>2011</td><td>0</td><td>318</td><td></td></tr>
<tr><td>4</td><td>2013</td><td>0</td><td>389</td><td></td></tr>
<tr><td>5</td><td>2017</td><td>0</td><td>393</td><td></td></tr>
<tr><td>6</td><td>2019</td><td>0</td><td>397</td><td></td></tr>
<tr><td>7</td><td>2018</td><td>0</td><td>416</td><td></td></tr>
<tr><td>8</td><td>2012</td><td>0</td><td>433</td><td></td></tr>
<tr><td>9</td><td>2009</td><td>0</td><td>460</td><td></td></tr>
<tr><td>10</td><td>2008</td><td>0</td><td>462</td><td></td></tr>

<tr><td colspan="5"><b>Most Game Points in 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2010</td><td>786</td><td>27</td><td></td></tr><tr><td>2</td><td>2008</td><td>794</td><td>24</td><td></td></tr><tr><td>3</td><td>2010</td><td>104</td><td>24</td><td></td></tr><tr><td>4</td><td>2016</td><td>852</td><td>24</td><td></td></tr><tr><td>5</td><td>2008</td><td>746</td><td>21</td><td></td></tr><tr><td>6</td><td>2009</td><td>62</td><td>21</td><td></td></tr><tr><td>7</td><td>2012</td><td>25</td><td>21</td><td></td></tr><tr><td>8</td><td>2016</td><td>565</td><td>21</td><td></td></tr><tr><td>9</td><td>2018</td><td>909</td><td>21</td><td></td></tr><tr><td>10</td><td>2012</td><td>221</td><td>20</td><td></td></tr>
<tr><td colspan="5"><b>Most Game Points in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>0</td><td>0</td><td>32000</td><td></td></tr>
<tr><td>2</td><td>0</td><td>0</td><td>32000</td><td></td></tr>

<tr><td colspan="5"><b>Less Game Point In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2015</td><td>0</td><td>450</td><td></td></tr>
<tr><td>2</td><td>2014</td><td>0</td><td>498</td><td></td></tr>
<tr><td>3</td><td>2011</td><td>0</td><td>525</td><td></td></tr>
<tr><td>4</td><td>2013</td><td>0</td><td>610</td><td></td></tr>
<tr><td>5</td><td>2017</td><td>0</td><td>614</td><td></td></tr>
<tr><td>6</td><td>2019</td><td>0</td><td>624</td><td></td></tr>
<tr><td>7</td><td>2018</td><td>0</td><td>650</td><td></td></tr>
<tr><td>8</td><td>2012</td><td>0</td><td>685</td><td></td></tr>
<tr><td>9</td><td>2009</td><td>0</td><td>714</td><td></td></tr>
<tr><td>10</td><td>2008</td><td>0</td><td>726</td><td></td></tr>

<tr><td colspan="5"><b>Most Shots In 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2017</td><td>1035</td><td>51</td><td></td></tr><tr><td>2</td><td>2017</td><td>1229</td><td>51</td><td></td></tr><tr><td>3</td><td>2010</td><td>929</td><td>50</td><td></td></tr><tr><td>4</td><td>2017</td><td>7</td><td>50</td><td></td></tr><tr><td>5</td><td>2016</td><td>852</td><td>49</td><td></td></tr><tr><td>6</td><td>2018</td><td>80</td><td>49</td><td></td></tr><tr><td>7</td><td>2019</td><td>267</td><td>49</td><td><a href="OTHL-267.html">Game Direct Link</a></td></tr><tr><td>8</td><td>2017</td><td>982</td><td>48</td><td></td></tr><tr><td>9</td><td>2010</td><td>104</td><td>47</td><td></td></tr><tr><td>10</td><td>2010</td><td>148</td><td>47</td><td></td></tr>
<tr><td colspan="5"><b>Most Shots In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2018</td><td>0</td><td>2708</td><td></td></tr>
<tr><td>2</td><td>2017</td><td>0</td><td>2624</td><td></td></tr>
<tr><td>3</td><td>2019</td><td>0</td><td>2567</td><td></td></tr>
<tr><td>4</td><td>2011</td><td>0</td><td>2485</td><td></td></tr>
<tr><td>5</td><td>2016</td><td>0</td><td>2388</td><td></td></tr>
<tr><td>6</td><td>2008</td><td>0</td><td>2367</td><td></td></tr>
<tr><td>7</td><td>2012</td><td>0</td><td>2334</td><td></td></tr>
<tr><td>8</td><td>2010</td><td>0</td><td>2307</td><td></td></tr>
<tr><td>9</td><td>2009</td><td>0</td><td>2155</td><td></td></tr>

<tr><td colspan="5"><b>Less Shots In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2015</td><td>0</td><td>1863</td><td></td></tr>
<tr><td>2</td><td>2014</td><td>0</td><td>1870</td><td></td></tr>
<tr><td>3</td><td>2013</td><td>0</td><td>2011</td><td></td></tr>
<tr><td>4</td><td>2009</td><td>0</td><td>2155</td><td></td></tr>
<tr><td>5</td><td>2010</td><td>0</td><td>2307</td><td></td></tr>
<tr><td>6</td><td>2012</td><td>0</td><td>2334</td><td></td></tr>
<tr><td>7</td><td>2008</td><td>0</td><td>2367</td><td></td></tr>
<tr><td>8</td><td>2011</td><td>0</td><td>2485</td><td></td></tr>

<tr><td colspan="5"><b>Most Shots Blocked In 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2009</td><td>373</td><td>22</td><td></td></tr><tr><td>2</td><td>2009</td><td>901</td><td>20</td><td></td></tr><tr><td>3</td><td>2008</td><td>9</td><td>19</td><td></td></tr><tr><td>4</td><td>2017</td><td>1242</td><td>19</td><td></td></tr><tr><td>5</td><td>2018</td><td>1022</td><td>19</td><td></td></tr><tr><td>6</td><td>2013</td><td>551</td><td>18</td><td></td></tr><tr><td>7</td><td>2015</td><td>370</td><td>18</td><td></td></tr><tr><td>8</td><td>2015</td><td>1190</td><td>18</td><td></td></tr><tr><td>9</td><td>2008</td><td>481</td><td>17</td><td></td></tr><tr><td>10</td><td>2008</td><td>515</td><td>17</td><td></td></tr>
<tr><td colspan="5"><b>Most Shots Blocked In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>0</td><td>0</td><td>32000</td><td></td></tr>
<tr><td>2</td><td>0</td><td>0</td><td>32000</td><td></td></tr>

<tr><td colspan="5"><b>Less Shots Block In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2012</td><td>0</td><td>632</td><td></td></tr>
<tr><td>2</td><td>2016</td><td>0</td><td>643</td><td></td></tr>
<tr><td>3</td><td>2008</td><td>0</td><td>649</td><td></td></tr>
<tr><td>4</td><td>2009</td><td>0</td><td>659</td><td></td></tr>
<tr><td>5</td><td>2010</td><td>0</td><td>663</td><td></td></tr>
<tr><td>6</td><td>2013</td><td>0</td><td>664</td><td></td></tr>
<tr><td>7</td><td>2018</td><td>0</td><td>666</td><td></td></tr>
<tr><td>8</td><td>2019</td><td>0</td><td>681</td><td></td></tr>
<tr><td>9</td><td>2011</td><td>0</td><td>780</td><td></td></tr>

<tr><td colspan="5"><b>Most Shots Against In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2014</td><td>0</td><td>2476</td><td></td></tr>
<tr><td>2</td><td>2011</td><td>0</td><td>2427</td><td></td></tr>
<tr><td>3</td><td>2018</td><td>0</td><td>2405</td><td></td></tr>
<tr><td>4</td><td>2019</td><td>0</td><td>2397</td><td></td></tr>
<tr><td>5</td><td>2017</td><td>0</td><td>2356</td><td></td></tr>
<tr><td>6</td><td>2008</td><td>0</td><td>2291</td><td></td></tr>
<tr><td>7</td><td>2015</td><td>0</td><td>2260</td><td></td></tr>
<tr><td>8</td><td>2012</td><td>0</td><td>2224</td><td></td></tr>
<tr><td>9</td><td>2010</td><td>0</td><td>2218</td><td></td></tr>
<tr><td>10</td><td>2013</td><td>0</td><td>2201</td><td></td></tr>

<tr><td colspan="5"><b>Less Shots Against In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2016</td><td>0</td><td>2126</td><td></td></tr>
<tr><td>2</td><td>2009</td><td>0</td><td>2146</td><td></td></tr>
<tr><td>3</td><td>2013</td><td>0</td><td>2201</td><td></td></tr>
<tr><td>4</td><td>2010</td><td>0</td><td>2218</td><td></td></tr>
<tr><td>5</td><td>2012</td><td>0</td><td>2224</td><td></td></tr>
<tr><td>6</td><td>2015</td><td>0</td><td>2260</td><td></td></tr>
<tr><td>7</td><td>2008</td><td>0</td><td>2291</td><td></td></tr>
<tr><td>8</td><td>2019</td><td>0</td><td>2397</td><td></td></tr>
<tr><td>9</td><td>2018</td><td>0</td><td>2405</td><td></td></tr>
<tr><td>10</td><td>2011</td><td>0</td><td>2427</td><td></td></tr>

<tr><td colspan="5"><b>Most Pim In 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2012</td><td>916</td><td>51</td><td></td></tr><tr><td>2</td><td>2016</td><td>390</td><td>51</td><td></td></tr><tr><td>3</td><td>2018</td><td>328</td><td>50</td><td></td></tr><tr><td>4</td><td>2010</td><td>222</td><td>49</td><td></td></tr><tr><td>5</td><td>2016</td><td>29</td><td>49</td><td></td></tr><tr><td>6</td><td>2010</td><td>345</td><td>46</td><td></td></tr><tr><td>7</td><td>2011</td><td>249</td><td>40</td><td></td></tr><tr><td>8</td><td>2011</td><td>327</td><td>37</td><td></td></tr><tr><td>9</td><td>2009</td><td>317</td><td>36</td><td></td></tr><tr><td>10</td><td>2010</td><td>1135</td><td>36</td><td></td></tr>
<tr><td colspan="5"><b>Most Pim In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2011</td><td>0</td><td>1289</td><td></td></tr>
<tr><td>2</td><td>2010</td><td>0</td><td>1238</td><td></td></tr>
<tr><td>3</td><td>2008</td><td>0</td><td>1227</td><td></td></tr>
<tr><td>4</td><td>2009</td><td>0</td><td>1004</td><td></td></tr>
<tr><td>5</td><td>2016</td><td>0</td><td>931</td><td></td></tr>
<tr><td>6</td><td>2012</td><td>0</td><td>872</td><td></td></tr>
<tr><td>7</td><td>2018</td><td>0</td><td>567</td><td></td></tr>
<tr><td>8</td><td>2019</td><td>0</td><td>548</td><td></td></tr>

<tr><td colspan="5"><b>Less Pim In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2019</td><td>0</td><td>548</td><td></td></tr>
<tr><td>2</td><td>2018</td><td>0</td><td>567</td><td></td></tr>
<tr><td>3</td><td>2015</td><td>0</td><td>630</td><td></td></tr>
<tr><td>4</td><td>2017</td><td>0</td><td>643</td><td></td></tr>
<tr><td>5</td><td>2014</td><td>0</td><td>823</td><td></td></tr>
<tr><td>6</td><td>2013</td><td>0</td><td>828</td><td></td></tr>
<tr><td>7</td><td>2012</td><td>0</td><td>872</td><td></td></tr>
<tr><td>8</td><td>2016</td><td>0</td><td>931</td><td></td></tr>
<tr><td>9</td><td>2009</td><td>0</td><td>1004</td><td></td></tr>
<tr><td>10</td><td>2008</td><td>0</td><td>1227</td><td></td></tr>

<tr><td colspan="5"><b>Most Hits In 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2012</td><td>881</td><td>40</td><td></td></tr><tr><td>2</td><td>2012</td><td>684</td><td>37</td><td></td></tr><tr><td>3</td><td>2012</td><td>1075</td><td>37</td><td></td></tr><tr><td>4</td><td>2010</td><td>1044</td><td>35</td><td></td></tr><tr><td>5</td><td>2011</td><td>887</td><td>35</td><td></td></tr><tr><td>6</td><td>2016</td><td>1113</td><td>35</td><td></td></tr><tr><td>7</td><td>2011</td><td>375</td><td>34</td><td></td></tr><tr><td>8</td><td>2011</td><td>585</td><td>34</td><td></td></tr><tr><td>9</td><td>2011</td><td>699</td><td>34</td><td></td></tr><tr><td>10</td><td>2012</td><td>809</td><td>34</td><td></td></tr>
<tr><td colspan="5"><b>Most Hits In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2011</td><td>0</td><td>1933</td><td></td></tr>
<tr><td>2</td><td>2012</td><td>0</td><td>1796</td><td></td></tr>
<tr><td>3</td><td>2013</td><td>0</td><td>1752</td><td></td></tr>
<tr><td>4</td><td>2014</td><td>0</td><td>1703</td><td></td></tr>
<tr><td>5</td><td>2010</td><td>0</td><td>1683</td><td></td></tr>
<tr><td>6</td><td>2018</td><td>0</td><td>1577</td><td></td></tr>
<tr><td>7</td><td>2019</td><td>0</td><td>1573</td><td></td></tr>
<tr><td>8</td><td>2008</td><td>0</td><td>1541</td><td></td></tr>
<tr><td>9</td><td>2009</td><td>0</td><td>1412</td><td></td></tr>

<tr><td colspan="5"><b>Less Hit In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2009</td><td>0</td><td>1412</td><td></td></tr>
<tr><td>2</td><td>2008</td><td>0</td><td>1541</td><td></td></tr>
<tr><td>3</td><td>2019</td><td>0</td><td>1573</td><td></td></tr>
<tr><td>4</td><td>2018</td><td>0</td><td>1577</td><td></td></tr>
<tr><td>5</td><td>2015</td><td>0</td><td>1601</td><td></td></tr>
<tr><td>6</td><td>2016</td><td>0</td><td>1656</td><td></td></tr>
<tr><td>7</td><td>2017</td><td>0</td><td>1664</td><td></td></tr>
<tr><td>8</td><td>2010</td><td>0</td><td>1683</td><td></td></tr>
<tr><td>9</td><td>2014</td><td>0</td><td>1703</td><td></td></tr>
<tr><td>10</td><td>2013</td><td>0</td><td>1752</td><td></td></tr>

<tr><td colspan="5"><b>Most Empty Net Goal In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2011</td><td>0</td><td>6</td><td></td></tr>
<tr><td>2</td><td>2008</td><td>0</td><td>4</td><td></td></tr>
<tr><td>3</td><td>2009</td><td>0</td><td>4</td><td></td></tr>
<tr><td>4</td><td>2019</td><td>0</td><td>4</td><td></td></tr>
<tr><td>5</td><td>2010</td><td>0</td><td>2</td><td></td></tr>
<tr><td>6</td><td>2012</td><td>0</td><td>2</td><td></td></tr>
<tr><td>7</td><td>2018</td><td>0</td><td>1</td><td></td></tr>

<tr><td colspan="5"><b>Best PP In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2009</td><td>0</td><td>21.90%</td><td></td></tr>
<tr><td>2</td><td>2018</td><td>0</td><td>20.10%</td><td></td></tr>
<tr><td>3</td><td>2012</td><td>0</td><td>19.60%</td><td></td></tr>
<tr><td>4</td><td>2010</td><td>0</td><td>19.40%</td><td></td></tr>
<tr><td>5</td><td>2016</td><td>0</td><td>18.90%</td><td></td></tr>
<tr><td>6</td><td>2017</td><td>0</td><td>17.50%</td><td></td></tr>
<tr><td>7</td><td>2008</td><td>0</td><td>17.30%</td><td></td></tr>
<tr><td>8</td><td>2014</td><td>0</td><td>16.90%</td><td></td></tr>
<tr><td>9</td><td>2011</td><td>0</td><td>16.60%</td><td></td></tr>
<tr><td>10</td><td>2019</td><td>0</td><td>14.70%</td><td></td></tr>

<tr><td colspan="5"><b>Best PK In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2015</td><td>0</td><td>86.20%</td><td></td></tr>
<tr><td>2</td><td>2016</td><td>0</td><td>86.20%</td><td></td></tr>
<tr><td>3</td><td>2008</td><td>0</td><td>86.00%</td><td></td></tr>
<tr><td>4</td><td>2012</td><td>0</td><td>86.00%</td><td></td></tr>
<tr><td>5</td><td>2011</td><td>0</td><td>83.90%</td><td></td></tr>
<tr><td>6</td><td>2018</td><td>0</td><td>82.90%</td><td></td></tr>
<tr><td>7</td><td>2013</td><td>0</td><td>82.30%</td><td></td></tr>
<tr><td>8</td><td>2009</td><td>0</td><td>81.90%</td><td></td></tr>
<tr><td>9</td><td>2019</td><td>0</td><td>81.80%</td><td></td></tr>
<tr><td>10</td><td>2010</td><td>0</td><td>80.80%</td><td></td></tr>

<tr><td colspan="5"><b>Worse PP In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2015</td><td>0</td><td>10.60%</td><td></td></tr>
<tr><td>2</td><td>2013</td><td>0</td><td>13.80%</td><td></td></tr>
<tr><td>3</td><td>2019</td><td>0</td><td>14.70%</td><td></td></tr>
<tr><td>4</td><td>2011</td><td>0</td><td>16.60%</td><td></td></tr>
<tr><td>5</td><td>2014</td><td>0</td><td>16.90%</td><td></td></tr>
<tr><td>6</td><td>2008</td><td>0</td><td>17.30%</td><td></td></tr>
<tr><td>7</td><td>2010</td><td>0</td><td>19.40%</td><td></td></tr>
<tr><td>8</td><td>2012</td><td>0</td><td>19.60%</td><td></td></tr>
<tr><td>9</td><td>2018</td><td>0</td><td>20.10%</td><td></td></tr>
<tr><td>10</td><td>2009</td><td>0</td><td>21.90%</td><td></td></tr>

<tr><td colspan="5"><b>Worse PK In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2014</td><td>0</td><td>80.10%</td><td></td></tr>
<tr><td>2</td><td>2010</td><td>0</td><td>80.80%</td><td></td></tr>
<tr><td>3</td><td>2019</td><td>0</td><td>81.80%</td><td></td></tr>
<tr><td>4</td><td>2009</td><td>0</td><td>81.90%</td><td></td></tr>
<tr><td>5</td><td>2013</td><td>0</td><td>82.30%</td><td></td></tr>
<tr><td>6</td><td>2017</td><td>0</td><td>82.30%</td><td></td></tr>
<tr><td>7</td><td>2018</td><td>0</td><td>82.90%</td><td></td></tr>
<tr><td>8</td><td>2011</td><td>0</td><td>83.90%</td><td></td></tr>
<tr><td>9</td><td>2008</td><td>0</td><td>86.00%</td><td></td></tr>
<tr><td>10</td><td>2012</td><td>0</td><td>86.00%</td><td></td></tr>

<tr><td colspan="5"><b>Most Win In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2016</td><td>0</td><td>51</td><td></td></tr>
<tr><td>2</td><td>2018</td><td>0</td><td>49</td><td></td></tr>
<tr><td>3</td><td>2012</td><td>0</td><td>48</td><td></td></tr>
<tr><td>4</td><td>2019</td><td>0</td><td>42</td><td></td></tr>
<tr><td>5</td><td>2017</td><td>0</td><td>41</td><td></td></tr>
<tr><td>6</td><td>2010</td><td>0</td><td>40</td><td></td></tr>
<tr><td>7</td><td>2011</td><td>0</td><td>36</td><td></td></tr>
<tr><td>8</td><td>2008</td><td>0</td><td>34</td><td></td></tr>
<tr><td>9</td><td>2009</td><td>0</td><td>34</td><td></td></tr>

<tr><td colspan="5"><b>Less Win In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2015</td><td>0</td><td>28</td><td></td></tr>
<tr><td>2</td><td>2014</td><td>0</td><td>29</td><td></td></tr>
<tr><td>3</td><td>2013</td><td>0</td><td>32</td><td></td></tr>
<tr><td>4</td><td>2008</td><td>0</td><td>34</td><td></td></tr>
<tr><td>5</td><td>2009</td><td>0</td><td>34</td><td></td></tr>
<tr><td>6</td><td>2011</td><td>0</td><td>36</td><td></td></tr>
<tr><td>7</td><td>2010</td><td>0</td><td>40</td><td></td></tr>
<tr><td>8</td><td>2019</td><td>0</td><td>42</td><td></td></tr>
<tr><td>9</td><td>2012</td><td>0</td><td>48</td><td></td></tr>

<tr><td colspan="5"><b>Most Lost In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2015</td><td>0</td><td>54</td><td></td></tr>
<tr><td>2</td><td>2014</td><td>0</td><td>53</td><td></td></tr>
<tr><td>3</td><td>2013</td><td>0</td><td>50</td><td></td></tr>
<tr><td>4</td><td>2009</td><td>0</td><td>48</td><td></td></tr>
<tr><td>5</td><td>2011</td><td>0</td><td>46</td><td></td></tr>
<tr><td>6</td><td>2010</td><td>0</td><td>42</td><td></td></tr>
<tr><td>7</td><td>2019</td><td>0</td><td>40</td><td></td></tr>
<tr><td>8</td><td>2008</td><td>0</td><td>35</td><td></td></tr>
<tr><td>9</td><td>2012</td><td>0</td><td>34</td><td></td></tr>
<tr><td>10</td><td>2018</td><td>0</td><td>33</td><td></td></tr>

<tr><td colspan="5"><b>Less Lost In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2016</td><td>0</td><td>31</td><td></td></tr>
<tr><td>2</td><td>2018</td><td>0</td><td>33</td><td></td></tr>
<tr><td>3</td><td>2012</td><td>0</td><td>34</td><td></td></tr>
<tr><td>4</td><td>2008</td><td>0</td><td>35</td><td></td></tr>
<tr><td>5</td><td>2019</td><td>0</td><td>40</td><td></td></tr>
<tr><td>6</td><td>2017</td><td>0</td><td>41</td><td></td></tr>
<tr><td>7</td><td>2010</td><td>0</td><td>42</td><td></td></tr>
<tr><td>8</td><td>2011</td><td>0</td><td>46</td><td></td></tr>
<tr><td>9</td><td>2009</td><td>0</td><td>48</td><td></td></tr>

<tr><td colspan="5"><b>Most Point In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2016</td><td>0</td><td>112</td><td></td></tr>
<tr><td>2</td><td>2018</td><td>0</td><td>109</td><td></td></tr>
<tr><td>3</td><td>2012</td><td>0</td><td>104</td><td></td></tr>
<tr><td>4</td><td>2017</td><td>0</td><td>92</td><td></td></tr>
<tr><td>5</td><td>2019</td><td>0</td><td>92</td><td></td></tr>
<tr><td>6</td><td>2008</td><td>0</td><td>88</td><td></td></tr>
<tr><td>7</td><td>2010</td><td>0</td><td>83</td><td></td></tr>
<tr><td>8</td><td>2011</td><td>0</td><td>81</td><td></td></tr>
<tr><td>9</td><td>2009</td><td>0</td><td>79</td><td></td></tr>

<tr><td colspan="5"><b>Less Points In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2015</td><td>0</td><td>65</td><td></td></tr>
<tr><td>2</td><td>2014</td><td>0</td><td>66</td><td></td></tr>
<tr><td>3</td><td>2013</td><td>0</td><td>73</td><td></td></tr>
<tr><td>4</td><td>2009</td><td>0</td><td>79</td><td></td></tr>
<tr><td>5</td><td>2011</td><td>0</td><td>81</td><td></td></tr>
<tr><td>6</td><td>2010</td><td>0</td><td>83</td><td></td></tr>
<tr><td>7</td><td>2008</td><td>0</td><td>88</td><td></td></tr>
<tr><td>8</td><td>2019</td><td>0</td><td>92</td><td></td></tr>
<tr><td>9</td><td>2012</td><td>0</td><td>104</td><td></td></tr>

<tr><td colspan="5"><b>Most Win Home In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>0</td><td>0</td><td>32000</td><td></td></tr>
<tr><td>2</td><td>0</td><td>0</td><td>32000</td><td></td></tr>

<tr><td colspan="5"><b>Most Win Visitor In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>0</td><td>0</td><td>32000</td><td></td></tr>
<tr><td>2</td><td>0</td><td>0</td><td>32000</td><td></td></tr>

</table></div>
<h1 class="TeamRecordsPro_DET"><a id="RedWings">Red Wings</a></h1>
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
<br /><table class="STHSRecordTable">
<tr><td colspan="5"><b>Most Goals in 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2008</td><td>62</td><td>8</td><td></td></tr><tr><td>2</td><td>2010</td><td>483</td><td>8</td><td></td></tr><tr><td>3</td><td>2010</td><td>861</td><td>8</td><td></td></tr><tr><td>4</td><td>2008</td><td>225</td><td>7</td><td></td></tr><tr><td>5</td><td>2009</td><td>41</td><td>7</td><td></td></tr><tr><td>6</td><td>2011</td><td>58</td><td>7</td><td></td></tr><tr><td>7</td><td>2013</td><td>821</td><td>7</td><td></td></tr><tr><td>8</td><td>2017</td><td>671</td><td>7</td><td></td></tr><tr><td>9</td><td>2017</td><td>935</td><td>7</td><td></td></tr><tr><td>10</td><td>2018</td><td>237</td><td>7</td><td></td></tr>
<tr><td colspan="5"><b>Most Goals in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2010</td><td>0</td><td>284</td><td></td></tr>
<tr><td>2</td><td>2018</td><td>0</td><td>254</td><td></td></tr>
<tr><td>3</td><td>2017</td><td>0</td><td>252</td><td></td></tr>
<tr><td>4</td><td>2013</td><td>0</td><td>248</td><td></td></tr>
<tr><td>5</td><td>2012</td><td>0</td><td>243</td><td></td></tr>
<tr><td>6</td><td>2009</td><td>0</td><td>233</td><td></td></tr>
<tr><td>7</td><td>2011</td><td>0</td><td>226</td><td></td></tr>
<tr><td>8</td><td>2019</td><td>0</td><td>218</td><td></td></tr>
<tr><td>9</td><td>2008</td><td>0</td><td>196</td><td></td></tr>

<tr><td colspan="5"><b>Less Goal in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2015</td><td>0</td><td>153</td><td></td></tr>
<tr><td>2</td><td>2016</td><td>0</td><td>195</td><td></td></tr>
<tr><td>3</td><td>2008</td><td>0</td><td>196</td><td></td></tr>
<tr><td>4</td><td>2014</td><td>0</td><td>206</td><td></td></tr>
<tr><td>5</td><td>2019</td><td>0</td><td>218</td><td></td></tr>
<tr><td>6</td><td>2011</td><td>0</td><td>226</td><td></td></tr>
<tr><td>7</td><td>2009</td><td>0</td><td>233</td><td></td></tr>
<tr><td>8</td><td>2012</td><td>0</td><td>243</td><td></td></tr>
<tr><td>9</td><td>2013</td><td>0</td><td>248</td><td></td></tr>
<tr><td>10</td><td>2018</td><td>0</td><td>254</td><td></td></tr>

<tr><td colspan="5"><b>Most Goals Against in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2008</td><td>0</td><td>278</td><td></td></tr>
<tr><td>2</td><td>2016</td><td>0</td><td>276</td><td></td></tr>
<tr><td>3</td><td>2017</td><td>0</td><td>254</td><td></td></tr>
<tr><td>4</td><td>2012</td><td>0</td><td>248</td><td></td></tr>
<tr><td>5</td><td>2018</td><td>0</td><td>238</td><td></td></tr>
<tr><td>6</td><td>2009</td><td>0</td><td>235</td><td></td></tr>
<tr><td>7</td><td>2015</td><td>0</td><td>230</td><td></td></tr>
<tr><td>8</td><td>2010</td><td>0</td><td>224</td><td></td></tr>
<tr><td>9</td><td>2011</td><td>0</td><td>220</td><td></td></tr>
<tr><td>10</td><td>2019</td><td>0</td><td>220</td><td></td></tr>

<tr><td colspan="5"><b>Less Goal Against in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2014</td><td>0</td><td>196</td><td></td></tr>
<tr><td>2</td><td>2013</td><td>0</td><td>209</td><td></td></tr>
<tr><td>3</td><td>2011</td><td>0</td><td>220</td><td></td></tr>
<tr><td>4</td><td>2019</td><td>0</td><td>220</td><td></td></tr>
<tr><td>5</td><td>2010</td><td>0</td><td>224</td><td></td></tr>
<tr><td>6</td><td>2015</td><td>0</td><td>230</td><td></td></tr>
<tr><td>7</td><td>2009</td><td>0</td><td>235</td><td></td></tr>
<tr><td>8</td><td>2018</td><td>0</td><td>238</td><td></td></tr>
<tr><td>9</td><td>2012</td><td>0</td><td>248</td><td></td></tr>
<tr><td>10</td><td>2008</td><td>0</td><td>278</td><td></td></tr>

<tr><td colspan="5"><b>Most Assists in 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2008</td><td>62</td><td>16</td><td></td></tr><tr><td>2</td><td>2010</td><td>483</td><td>15</td><td></td></tr><tr><td>3</td><td>2010</td><td>861</td><td>15</td><td></td></tr><tr><td>4</td><td>2009</td><td>315</td><td>14</td><td></td></tr><tr><td>5</td><td>2010</td><td>765</td><td>14</td><td></td></tr><tr><td>6</td><td>2013</td><td>821</td><td>13</td><td></td></tr><tr><td>7</td><td>2012</td><td>44</td><td>12</td><td></td></tr><tr><td>8</td><td>2014</td><td>841</td><td>12</td><td></td></tr><tr><td>9</td><td>2017</td><td>671</td><td>12</td><td></td></tr><tr><td>10</td><td>2018</td><td>587</td><td>12</td><td></td></tr>
<tr><td colspan="5"><b>Most Assists in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2010</td><td>0</td><td>501</td><td></td></tr>
<tr><td>2</td><td>2018</td><td>0</td><td>437</td><td></td></tr>
<tr><td>3</td><td>2013</td><td>0</td><td>431</td><td></td></tr>
<tr><td>4</td><td>2017</td><td>0</td><td>428</td><td></td></tr>
<tr><td>5</td><td>2012</td><td>0</td><td>424</td><td></td></tr>
<tr><td>6</td><td>2009</td><td>0</td><td>418</td><td></td></tr>
<tr><td>7</td><td>2019</td><td>0</td><td>379</td><td></td></tr>
<tr><td>8</td><td>2014</td><td>0</td><td>370</td><td></td></tr>
<tr><td>9</td><td>2011</td><td>0</td><td>362</td><td></td></tr>
<tr><td>10</td><td>2008</td><td>0</td><td>352</td><td></td></tr>

<tr><td colspan="5"><b>Less Assist in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2015</td><td>0</td><td>258</td><td></td></tr>
<tr><td>2</td><td>2016</td><td>0</td><td>336</td><td></td></tr>
<tr><td>3</td><td>2008</td><td>0</td><td>352</td><td></td></tr>
<tr><td>4</td><td>2011</td><td>0</td><td>362</td><td></td></tr>
<tr><td>5</td><td>2014</td><td>0</td><td>370</td><td></td></tr>
<tr><td>6</td><td>2019</td><td>0</td><td>379</td><td></td></tr>
<tr><td>7</td><td>2009</td><td>0</td><td>418</td><td></td></tr>
<tr><td>8</td><td>2012</td><td>0</td><td>424</td><td></td></tr>
<tr><td>9</td><td>2013</td><td>0</td><td>431</td><td></td></tr>
<tr><td>10</td><td>2018</td><td>0</td><td>437</td><td></td></tr>

<tr><td colspan="5"><b>Most Game Points in 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2008</td><td>62</td><td>24</td><td></td></tr><tr><td>2</td><td>2010</td><td>483</td><td>23</td><td></td></tr><tr><td>3</td><td>2010</td><td>861</td><td>23</td><td></td></tr><tr><td>4</td><td>2009</td><td>315</td><td>21</td><td></td></tr><tr><td>5</td><td>2010</td><td>765</td><td>21</td><td></td></tr><tr><td>6</td><td>2013</td><td>821</td><td>20</td><td></td></tr><tr><td>7</td><td>2017</td><td>671</td><td>19</td><td></td></tr><tr><td>8</td><td>2018</td><td>606</td><td>19</td><td></td></tr><tr><td>9</td><td>2012</td><td>44</td><td>18</td><td></td></tr><tr><td>10</td><td>2014</td><td>841</td><td>18</td><td></td></tr>
<tr><td colspan="5"><b>Most Game Points in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>0</td><td>0</td><td>32000</td><td></td></tr>
<tr><td>2</td><td>0</td><td>0</td><td>32000</td><td></td></tr>

<tr><td colspan="5"><b>Less Game Point In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2015</td><td>0</td><td>411</td><td></td></tr>
<tr><td>2</td><td>2016</td><td>0</td><td>531</td><td></td></tr>
<tr><td>3</td><td>2008</td><td>0</td><td>548</td><td></td></tr>
<tr><td>4</td><td>2014</td><td>0</td><td>576</td><td></td></tr>
<tr><td>5</td><td>2011</td><td>0</td><td>588</td><td></td></tr>
<tr><td>6</td><td>2019</td><td>0</td><td>597</td><td></td></tr>
<tr><td>7</td><td>2009</td><td>0</td><td>651</td><td></td></tr>
<tr><td>8</td><td>2012</td><td>0</td><td>667</td><td></td></tr>
<tr><td>9</td><td>2013</td><td>0</td><td>679</td><td></td></tr>
<tr><td>10</td><td>2018</td><td>0</td><td>691</td><td></td></tr>

<tr><td colspan="5"><b>Most Shots In 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2017</td><td>351</td><td>56</td><td></td></tr><tr><td>2</td><td>2019</td><td>456</td><td>52</td><td><a href="OTHL-456.html">Game Direct Link</a></td></tr><tr><td>3</td><td>2019</td><td>310</td><td>51</td><td><a href="OTHL-310.html">Game Direct Link</a></td></tr><tr><td>4</td><td>2009</td><td>971</td><td>48</td><td></td></tr><tr><td>5</td><td>2016</td><td>24</td><td>48</td><td></td></tr><tr><td>6</td><td>2010</td><td>195</td><td>47</td><td></td></tr><tr><td>7</td><td>2017</td><td>671</td><td>47</td><td></td></tr><tr><td>8</td><td>2013</td><td>683</td><td>46</td><td></td></tr><tr><td>9</td><td>2017</td><td>527</td><td>46</td><td></td></tr><tr><td>10</td><td>2017</td><td>1069</td><td>45</td><td></td></tr>
<tr><td colspan="5"><b>Most Shots In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2017</td><td>0</td><td>2705</td><td></td></tr>
<tr><td>2</td><td>2019</td><td>0</td><td>2557</td><td></td></tr>
<tr><td>3</td><td>2018</td><td>0</td><td>2528</td><td></td></tr>
<tr><td>4</td><td>2010</td><td>0</td><td>2357</td><td></td></tr>
<tr><td>5</td><td>2011</td><td>0</td><td>2315</td><td></td></tr>
<tr><td>6</td><td>2013</td><td>0</td><td>2250</td><td></td></tr>
<tr><td>7</td><td>2012</td><td>0</td><td>2208</td><td></td></tr>
<tr><td>8</td><td>2009</td><td>0</td><td>2156</td><td></td></tr>
<tr><td>9</td><td>2008</td><td>0</td><td>2059</td><td></td></tr>

<tr><td colspan="5"><b>Less Shots In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2015</td><td>0</td><td>1841</td><td></td></tr>
<tr><td>2</td><td>2016</td><td>0</td><td>1957</td><td></td></tr>
<tr><td>3</td><td>2008</td><td>0</td><td>2059</td><td></td></tr>
<tr><td>4</td><td>2014</td><td>0</td><td>2095</td><td></td></tr>
<tr><td>5</td><td>2009</td><td>0</td><td>2156</td><td></td></tr>
<tr><td>6</td><td>2012</td><td>0</td><td>2208</td><td></td></tr>
<tr><td>7</td><td>2013</td><td>0</td><td>2250</td><td></td></tr>
<tr><td>8</td><td>2011</td><td>0</td><td>2315</td><td></td></tr>
<tr><td>9</td><td>2010</td><td>0</td><td>2357</td><td></td></tr>

<tr><td colspan="5"><b>Most Shots Blocked In 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2011</td><td>313</td><td>26</td><td></td></tr><tr><td>2</td><td>2012</td><td>686</td><td>20</td><td></td></tr><tr><td>3</td><td>2019</td><td>1120</td><td>20</td><td><a href="OTHL-1120.html">Game Direct Link</a></td></tr><tr><td>4</td><td>2011</td><td>618</td><td>19</td><td></td></tr><tr><td>5</td><td>2009</td><td>751</td><td>18</td><td></td></tr><tr><td>6</td><td>2011</td><td>411</td><td>18</td><td></td></tr><tr><td>7</td><td>2011</td><td>1183</td><td>18</td><td></td></tr><tr><td>8</td><td>2016</td><td>1119</td><td>18</td><td></td></tr><tr><td>9</td><td>2019</td><td>640</td><td>18</td><td><a href="OTHL-640.html">Game Direct Link</a></td></tr><tr><td>10</td><td>2008</td><td>256</td><td>17</td><td></td></tr>
<tr><td colspan="5"><b>Most Shots Blocked In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>0</td><td>0</td><td>32000</td><td></td></tr>
<tr><td>2</td><td>0</td><td>0</td><td>32000</td><td></td></tr>

<tr><td colspan="5"><b>Less Shots Block In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2013</td><td>0</td><td>558</td><td></td></tr>
<tr><td>2</td><td>2010</td><td>0</td><td>628</td><td></td></tr>
<tr><td>3</td><td>2014</td><td>0</td><td>633</td><td></td></tr>
<tr><td>4</td><td>2009</td><td>0</td><td>638</td><td></td></tr>
<tr><td>5</td><td>2012</td><td>0</td><td>690</td><td></td></tr>
<tr><td>6</td><td>2008</td><td>0</td><td>729</td><td></td></tr>
<tr><td>7</td><td>2018</td><td>0</td><td>754</td><td></td></tr>
<tr><td>8</td><td>2019</td><td>0</td><td>803</td><td></td></tr>
<tr><td>9</td><td>2011</td><td>0</td><td>813</td><td></td></tr>

<tr><td colspan="5"><b>Most Shots Against In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2017</td><td>0</td><td>2759</td><td></td></tr>
<tr><td>2</td><td>2018</td><td>0</td><td>2752</td><td></td></tr>
<tr><td>3</td><td>2019</td><td>0</td><td>2662</td><td></td></tr>
<tr><td>4</td><td>2016</td><td>0</td><td>2573</td><td></td></tr>
<tr><td>5</td><td>2008</td><td>0</td><td>2506</td><td></td></tr>
<tr><td>6</td><td>2011</td><td>0</td><td>2441</td><td></td></tr>
<tr><td>7</td><td>2015</td><td>0</td><td>2359</td><td></td></tr>
<tr><td>8</td><td>2012</td><td>0</td><td>2339</td><td></td></tr>
<tr><td>9</td><td>2009</td><td>0</td><td>2280</td><td></td></tr>
<tr><td>10</td><td>2010</td><td>0</td><td>2252</td><td></td></tr>

<tr><td colspan="5"><b>Less Shots Against In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2014</td><td>0</td><td>2104</td><td></td></tr>
<tr><td>2</td><td>2013</td><td>0</td><td>2105</td><td></td></tr>
<tr><td>3</td><td>2010</td><td>0</td><td>2252</td><td></td></tr>
<tr><td>4</td><td>2009</td><td>0</td><td>2280</td><td></td></tr>
<tr><td>5</td><td>2012</td><td>0</td><td>2339</td><td></td></tr>
<tr><td>6</td><td>2011</td><td>0</td><td>2441</td><td></td></tr>
<tr><td>7</td><td>2008</td><td>0</td><td>2506</td><td></td></tr>

<tr><td colspan="5"><b>Most Pim In 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2009</td><td>6</td><td>64</td><td></td></tr><tr><td>2</td><td>2009</td><td>553</td><td>52</td><td></td></tr><tr><td>3</td><td>2019</td><td>655</td><td>46</td><td><a href="OTHL-655.html">Game Direct Link</a></td></tr><tr><td>4</td><td>2009</td><td>11</td><td>45</td><td></td></tr><tr><td>5</td><td>2009</td><td>805</td><td>45</td><td></td></tr><tr><td>6</td><td>2009</td><td>654</td><td>44</td><td></td></tr><tr><td>7</td><td>2016</td><td>407</td><td>41</td><td></td></tr><tr><td>8</td><td>2017</td><td>752</td><td>39</td><td></td></tr><tr><td>9</td><td>2011</td><td>1165</td><td>34</td><td></td></tr><tr><td>10</td><td>2018</td><td>1085</td><td>33</td><td></td></tr>
<tr><td colspan="5"><b>Most Pim In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2009</td><td>0</td><td>1496</td><td></td></tr>
<tr><td>2</td><td>2008</td><td>0</td><td>1338</td><td></td></tr>
<tr><td>3</td><td>2010</td><td>0</td><td>1204</td><td></td></tr>
<tr><td>4</td><td>2011</td><td>0</td><td>1111</td><td></td></tr>
<tr><td>5</td><td>2016</td><td>0</td><td>1033</td><td></td></tr>
<tr><td>6</td><td>2015</td><td>0</td><td>869</td><td></td></tr>
<tr><td>7</td><td>2014</td><td>0</td><td>734</td><td></td></tr>
<tr><td>8</td><td>2012</td><td>0</td><td>700</td><td></td></tr>
<tr><td>9</td><td>2019</td><td>0</td><td>672</td><td></td></tr>
<tr><td>10</td><td>2018</td><td>0</td><td>608</td><td></td></tr>

<tr><td colspan="5"><b>Less Pim In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2017</td><td>0</td><td>528</td><td></td></tr>
<tr><td>2</td><td>2018</td><td>0</td><td>608</td><td></td></tr>
<tr><td>3</td><td>2019</td><td>0</td><td>672</td><td></td></tr>
<tr><td>4</td><td>2013</td><td>0</td><td>691</td><td></td></tr>
<tr><td>5</td><td>2012</td><td>0</td><td>700</td><td></td></tr>
<tr><td>6</td><td>2014</td><td>0</td><td>734</td><td></td></tr>
<tr><td>7</td><td>2015</td><td>0</td><td>869</td><td></td></tr>
<tr><td>8</td><td>2016</td><td>0</td><td>1033</td><td></td></tr>
<tr><td>9</td><td>2011</td><td>0</td><td>1111</td><td></td></tr>
<tr><td>10</td><td>2010</td><td>0</td><td>1204</td><td></td></tr>

<tr><td colspan="5"><b>Most Hits In 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2018</td><td>408</td><td>40</td><td></td></tr><tr><td>2</td><td>2016</td><td>820</td><td>39</td><td></td></tr><tr><td>3</td><td>2011</td><td>760</td><td>37</td><td></td></tr><tr><td>4</td><td>2015</td><td>896</td><td>37</td><td></td></tr><tr><td>5</td><td>2012</td><td>400</td><td>36</td><td></td></tr><tr><td>6</td><td>2010</td><td>346</td><td>35</td><td></td></tr><tr><td>7</td><td>2011</td><td>634</td><td>35</td><td></td></tr><tr><td>8</td><td>2016</td><td>1119</td><td>34</td><td></td></tr><tr><td>9</td><td>2019</td><td>566</td><td>34</td><td><a href="OTHL-566.html">Game Direct Link</a></td></tr><tr><td>10</td><td>2010</td><td>483</td><td>33</td><td></td></tr>
<tr><td colspan="5"><b>Most Hits In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2011</td><td>0</td><td>1991</td><td></td></tr>
<tr><td>2</td><td>2016</td><td>0</td><td>1789</td><td></td></tr>
<tr><td>3</td><td>2019</td><td>0</td><td>1746</td><td></td></tr>
<tr><td>4</td><td>2018</td><td>0</td><td>1736</td><td></td></tr>
<tr><td>5</td><td>2015</td><td>0</td><td>1689</td><td></td></tr>
<tr><td>6</td><td>2012</td><td>0</td><td>1599</td><td></td></tr>
<tr><td>7</td><td>2017</td><td>0</td><td>1591</td><td></td></tr>
<tr><td>8</td><td>2008</td><td>0</td><td>1552</td><td></td></tr>
<tr><td>9</td><td>2010</td><td>0</td><td>1507</td><td></td></tr>
<tr><td>10</td><td>2013</td><td>0</td><td>1500</td><td></td></tr>

<tr><td colspan="5"><b>Less Hit In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2009</td><td>0</td><td>1483</td><td></td></tr>
<tr><td>2</td><td>2014</td><td>0</td><td>1491</td><td></td></tr>
<tr><td>3</td><td>2013</td><td>0</td><td>1500</td><td></td></tr>
<tr><td>4</td><td>2010</td><td>0</td><td>1507</td><td></td></tr>
<tr><td>5</td><td>2008</td><td>0</td><td>1552</td><td></td></tr>
<tr><td>6</td><td>2012</td><td>0</td><td>1599</td><td></td></tr>
<tr><td>7</td><td>2018</td><td>0</td><td>1736</td><td></td></tr>
<tr><td>8</td><td>2019</td><td>0</td><td>1746</td><td></td></tr>
<tr><td>9</td><td>2011</td><td>0</td><td>1991</td><td></td></tr>

<tr><td colspan="5"><b>Most Empty Net Goal In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2011</td><td>0</td><td>4</td><td></td></tr>
<tr><td>2</td><td>2015</td><td>0</td><td>3</td><td></td></tr>
<tr><td>3</td><td>2016</td><td>0</td><td>3</td><td></td></tr>
<tr><td>4</td><td>2008</td><td>0</td><td>2</td><td></td></tr>
<tr><td>5</td><td>2010</td><td>0</td><td>2</td><td></td></tr>
<tr><td>6</td><td>2013</td><td>0</td><td>2</td><td></td></tr>
<tr><td>7</td><td>2014</td><td>0</td><td>2</td><td></td></tr>
<tr><td>8</td><td>2009</td><td>0</td><td>1</td><td></td></tr>
<tr><td>9</td><td>2012</td><td>0</td><td>1</td><td></td></tr>
<tr><td>10</td><td>2018</td><td>0</td><td>1</td><td></td></tr>

<tr><td colspan="5"><b>Best PP In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2017</td><td>0</td><td>21.60%</td><td></td></tr>
<tr><td>2</td><td>2010</td><td>0</td><td>21.30%</td><td></td></tr>
<tr><td>3</td><td>2011</td><td>0</td><td>20.60%</td><td></td></tr>
<tr><td>4</td><td>2012</td><td>0</td><td>20.10%</td><td></td></tr>
<tr><td>5</td><td>2009</td><td>0</td><td>19.80%</td><td></td></tr>
<tr><td>6</td><td>2018</td><td>0</td><td>19.20%</td><td></td></tr>
<tr><td>7</td><td>2016</td><td>0</td><td>16.90%</td><td></td></tr>
<tr><td>8</td><td>2013</td><td>0</td><td>15.70%</td><td></td></tr>
<tr><td>9</td><td>2008</td><td>0</td><td>14.30%</td><td></td></tr>
<tr><td>10</td><td>2019</td><td>0</td><td>13.70%</td><td></td></tr>

<tr><td colspan="5"><b>Best PK In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2014</td><td>0</td><td>89.60%</td><td></td></tr>
<tr><td>2</td><td>2010</td><td>0</td><td>87.00%</td><td></td></tr>
<tr><td>3</td><td>2013</td><td>0</td><td>86.10%</td><td></td></tr>
<tr><td>4</td><td>2017</td><td>0</td><td>85.20%</td><td></td></tr>
<tr><td>5</td><td>2009</td><td>0</td><td>84.00%</td><td></td></tr>
<tr><td>6</td><td>2015</td><td>0</td><td>83.80%</td><td></td></tr>
<tr><td>7</td><td>2008</td><td>0</td><td>82.40%</td><td></td></tr>
<tr><td>8</td><td>2019</td><td>0</td><td>82.00%</td><td></td></tr>
<tr><td>9</td><td>2018</td><td>0</td><td>81.90%</td><td></td></tr>
<tr><td>10</td><td>2012</td><td>0</td><td>81.70%</td><td></td></tr>

<tr><td colspan="5"><b>Worse PP In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2015</td><td>0</td><td>10.30%</td><td></td></tr>
<tr><td>2</td><td>2014</td><td>0</td><td>13.70%</td><td></td></tr>
<tr><td>3</td><td>2019</td><td>0</td><td>13.70%</td><td></td></tr>
<tr><td>4</td><td>2008</td><td>0</td><td>14.30%</td><td></td></tr>
<tr><td>5</td><td>2013</td><td>0</td><td>15.70%</td><td></td></tr>
<tr><td>6</td><td>2016</td><td>0</td><td>16.90%</td><td></td></tr>
<tr><td>7</td><td>2018</td><td>0</td><td>19.20%</td><td></td></tr>
<tr><td>8</td><td>2009</td><td>0</td><td>19.80%</td><td></td></tr>
<tr><td>9</td><td>2012</td><td>0</td><td>20.10%</td><td></td></tr>
<tr><td>10</td><td>2011</td><td>0</td><td>20.60%</td><td></td></tr>

<tr><td colspan="5"><b>Worse PK In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2011</td><td>0</td><td>78.90%</td><td></td></tr>
<tr><td>2</td><td>2012</td><td>0</td><td>81.70%</td><td></td></tr>
<tr><td>3</td><td>2018</td><td>0</td><td>81.90%</td><td></td></tr>
<tr><td>4</td><td>2019</td><td>0</td><td>82.00%</td><td></td></tr>
<tr><td>5</td><td>2008</td><td>0</td><td>82.40%</td><td></td></tr>
<tr><td>6</td><td>2016</td><td>0</td><td>82.70%</td><td></td></tr>
<tr><td>7</td><td>2015</td><td>0</td><td>83.80%</td><td></td></tr>
<tr><td>8</td><td>2009</td><td>0</td><td>84.00%</td><td></td></tr>
<tr><td>9</td><td>2013</td><td>0</td><td>86.10%</td><td></td></tr>
<tr><td>10</td><td>2010</td><td>0</td><td>87.00%</td><td></td></tr>

<tr><td colspan="5"><b>Most Win In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2010</td><td>0</td><td>54</td><td></td></tr>
<tr><td>2</td><td>2013</td><td>0</td><td>51</td><td></td></tr>
<tr><td>3</td><td>2018</td><td>0</td><td>45</td><td></td></tr>
<tr><td>4</td><td>2014</td><td>0</td><td>44</td><td></td></tr>
<tr><td>5</td><td>2011</td><td>0</td><td>42</td><td></td></tr>
<tr><td>6</td><td>2012</td><td>0</td><td>41</td><td></td></tr>
<tr><td>7</td><td>2019</td><td>0</td><td>40</td><td></td></tr>
<tr><td>8</td><td>2009</td><td>0</td><td>38</td><td></td></tr>
<tr><td>9</td><td>2008</td><td>0</td><td>18</td><td></td></tr>

<tr><td colspan="5"><b>Less Win In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2008</td><td>0</td><td>18</td><td></td></tr>
<tr><td>2</td><td>2015</td><td>0</td><td>26</td><td></td></tr>
<tr><td>3</td><td>2016</td><td>0</td><td>29</td><td></td></tr>
<tr><td>4</td><td>2009</td><td>0</td><td>38</td><td></td></tr>
<tr><td>5</td><td>2017</td><td>0</td><td>39</td><td></td></tr>
<tr><td>6</td><td>2019</td><td>0</td><td>40</td><td></td></tr>
<tr><td>7</td><td>2012</td><td>0</td><td>41</td><td></td></tr>
<tr><td>8</td><td>2011</td><td>0</td><td>42</td><td></td></tr>
<tr><td>9</td><td>2014</td><td>0</td><td>44</td><td></td></tr>
<tr><td>10</td><td>2018</td><td>0</td><td>45</td><td></td></tr>

<tr><td colspan="5"><b>Most Lost In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2015</td><td>0</td><td>56</td><td></td></tr>
<tr><td>2</td><td>2016</td><td>0</td><td>53</td><td></td></tr>
<tr><td>3</td><td>2008</td><td>0</td><td>45</td><td></td></tr>
<tr><td>4</td><td>2009</td><td>0</td><td>44</td><td></td></tr>
<tr><td>5</td><td>2017</td><td>0</td><td>43</td><td></td></tr>
<tr><td>6</td><td>2019</td><td>0</td><td>42</td><td></td></tr>
<tr><td>7</td><td>2012</td><td>0</td><td>41</td><td></td></tr>
<tr><td>8</td><td>2011</td><td>0</td><td>40</td><td></td></tr>
<tr><td>9</td><td>2014</td><td>0</td><td>38</td><td></td></tr>
<tr><td>10</td><td>2018</td><td>0</td><td>37</td><td></td></tr>

<tr><td colspan="5"><b>Less Lost In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2010</td><td>0</td><td>29</td><td></td></tr>
<tr><td>2</td><td>2013</td><td>0</td><td>31</td><td></td></tr>
<tr><td>3</td><td>2018</td><td>0</td><td>37</td><td></td></tr>
<tr><td>4</td><td>2014</td><td>0</td><td>38</td><td></td></tr>
<tr><td>5</td><td>2011</td><td>0</td><td>40</td><td></td></tr>
<tr><td>6</td><td>2012</td><td>0</td><td>41</td><td></td></tr>
<tr><td>7</td><td>2019</td><td>0</td><td>42</td><td></td></tr>
<tr><td>8</td><td>2009</td><td>0</td><td>44</td><td></td></tr>
<tr><td>9</td><td>2008</td><td>0</td><td>45</td><td></td></tr>

<tr><td colspan="5"><b>Most Point In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2010</td><td>0</td><td>114</td><td></td></tr>
<tr><td>2</td><td>2013</td><td>0</td><td>107</td><td></td></tr>
<tr><td>3</td><td>2018</td><td>0</td><td>96</td><td></td></tr>
<tr><td>4</td><td>2011</td><td>0</td><td>93</td><td></td></tr>
<tr><td>5</td><td>2014</td><td>0</td><td>92</td><td></td></tr>
<tr><td>6</td><td>2019</td><td>0</td><td>92</td><td></td></tr>
<tr><td>7</td><td>2012</td><td>0</td><td>90</td><td></td></tr>
<tr><td>8</td><td>2009</td><td>0</td><td>84</td><td></td></tr>
<tr><td>9</td><td>2008</td><td>0</td><td>64</td><td></td></tr>

<tr><td colspan="5"><b>Less Points In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2015</td><td>0</td><td>61</td><td></td></tr>
<tr><td>2</td><td>2016</td><td>0</td><td>63</td><td></td></tr>
<tr><td>3</td><td>2008</td><td>0</td><td>64</td><td></td></tr>
<tr><td>4</td><td>2009</td><td>0</td><td>84</td><td></td></tr>
<tr><td>5</td><td>2017</td><td>0</td><td>88</td><td></td></tr>
<tr><td>6</td><td>2012</td><td>0</td><td>90</td><td></td></tr>
<tr><td>7</td><td>2014</td><td>0</td><td>92</td><td></td></tr>
<tr><td>8</td><td>2019</td><td>0</td><td>92</td><td></td></tr>
<tr><td>9</td><td>2011</td><td>0</td><td>93</td><td></td></tr>
<tr><td>10</td><td>2018</td><td>0</td><td>96</td><td></td></tr>

<tr><td colspan="5"><b>Most Win Home In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>0</td><td>0</td><td>32000</td><td></td></tr>
<tr><td>2</td><td>0</td><td>0</td><td>32000</td><td></td></tr>

<tr><td colspan="5"><b>Most Win Visitor In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>0</td><td>0</td><td>32000</td><td></td></tr>
<tr><td>2</td><td>0</td><td>0</td><td>32000</td><td></td></tr>

</table></div>
<h1 class="TeamRecordsPro_BUF"><a id="Sabres">Sabres</a></h1>
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
<br /><table class="STHSRecordTable">
<tr><td colspan="5"><b>Most Goals in 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2008</td><td>535</td><td>8</td><td></td></tr><tr><td>2</td><td>2008</td><td>654</td><td>8</td><td></td></tr><tr><td>3</td><td>2008</td><td>1123</td><td>8</td><td></td></tr><tr><td>4</td><td>2016</td><td>123</td><td>8</td><td></td></tr><tr><td>5</td><td>2018</td><td>1084</td><td>8</td><td></td></tr><tr><td>6</td><td>2008</td><td>46</td><td>7</td><td></td></tr><tr><td>7</td><td>2008</td><td>101</td><td>7</td><td></td></tr><tr><td>8</td><td>2011</td><td>102</td><td>7</td><td></td></tr><tr><td>9</td><td>2012</td><td>224</td><td>7</td><td></td></tr><tr><td>10</td><td>2014</td><td>1103</td><td>7</td><td></td></tr>
<tr><td colspan="5"><b>Most Goals in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2008</td><td>0</td><td>321</td><td></td></tr>
<tr><td>2</td><td>2009</td><td>0</td><td>299</td><td></td></tr>
<tr><td>3</td><td>2016</td><td>0</td><td>269</td><td></td></tr>
<tr><td>4</td><td>2010</td><td>0</td><td>267</td><td></td></tr>
<tr><td>5</td><td>2018</td><td>0</td><td>258</td><td></td></tr>
<tr><td>6</td><td>2017</td><td>0</td><td>246</td><td></td></tr>
<tr><td>7</td><td>2015</td><td>0</td><td>243</td><td></td></tr>
<tr><td>8</td><td>2019</td><td>0</td><td>242</td><td></td></tr>
<tr><td>9</td><td>2012</td><td>0</td><td>234</td><td></td></tr>
<tr><td>10</td><td>2011</td><td>0</td><td>232</td><td></td></tr>

<tr><td colspan="5"><b>Less Goal in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2014</td><td>0</td><td>229</td><td></td></tr>
<tr><td>2</td><td>2013</td><td>0</td><td>231</td><td></td></tr>
<tr><td>3</td><td>2011</td><td>0</td><td>232</td><td></td></tr>
<tr><td>4</td><td>2012</td><td>0</td><td>234</td><td></td></tr>
<tr><td>5</td><td>2019</td><td>0</td><td>242</td><td></td></tr>
<tr><td>6</td><td>2015</td><td>0</td><td>243</td><td></td></tr>
<tr><td>7</td><td>2018</td><td>0</td><td>258</td><td></td></tr>
<tr><td>8</td><td>2010</td><td>0</td><td>267</td><td></td></tr>
<tr><td>9</td><td>2009</td><td>0</td><td>299</td><td></td></tr>
<tr><td>10</td><td>2008</td><td>0</td><td>321</td><td></td></tr>

<tr><td colspan="5"><b>Most Goals Against in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2012</td><td>0</td><td>238</td><td></td></tr>
<tr><td>2</td><td>2010</td><td>0</td><td>220</td><td></td></tr>
<tr><td>3</td><td>2018</td><td>0</td><td>220</td><td></td></tr>
<tr><td>4</td><td>2015</td><td>0</td><td>218</td><td></td></tr>
<tr><td>5</td><td>2017</td><td>0</td><td>217</td><td></td></tr>
<tr><td>6</td><td>2009</td><td>0</td><td>215</td><td></td></tr>
<tr><td>7</td><td>2014</td><td>0</td><td>213</td><td></td></tr>
<tr><td>8</td><td>2011</td><td>0</td><td>211</td><td></td></tr>
<tr><td>9</td><td>2013</td><td>0</td><td>211</td><td></td></tr>
<tr><td>10</td><td>2008</td><td>0</td><td>208</td><td></td></tr>

<tr><td colspan="5"><b>Less Goal Against in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2019</td><td>0</td><td>192</td><td></td></tr>
<tr><td>2</td><td>2008</td><td>0</td><td>208</td><td></td></tr>
<tr><td>3</td><td>2016</td><td>0</td><td>209</td><td></td></tr>
<tr><td>4</td><td>2011</td><td>0</td><td>211</td><td></td></tr>
<tr><td>5</td><td>2013</td><td>0</td><td>211</td><td></td></tr>
<tr><td>6</td><td>2014</td><td>0</td><td>213</td><td></td></tr>
<tr><td>7</td><td>2009</td><td>0</td><td>215</td><td></td></tr>
<tr><td>8</td><td>2010</td><td>0</td><td>220</td><td></td></tr>
<tr><td>9</td><td>2018</td><td>0</td><td>220</td><td></td></tr>
<tr><td>10</td><td>2012</td><td>0</td><td>238</td><td></td></tr>

<tr><td colspan="5"><b>Most Assists in 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2008</td><td>535</td><td>16</td><td></td></tr><tr><td>2</td><td>2018</td><td>1084</td><td>16</td><td></td></tr><tr><td>3</td><td>2008</td><td>222</td><td>14</td><td></td></tr><tr><td>4</td><td>2008</td><td>654</td><td>14</td><td></td></tr><tr><td>5</td><td>2008</td><td>984</td><td>14</td><td></td></tr><tr><td>6</td><td>2009</td><td>1198</td><td>14</td><td></td></tr><tr><td>7</td><td>2016</td><td>289</td><td>14</td><td></td></tr><tr><td>8</td><td>2017</td><td>761</td><td>14</td><td></td></tr><tr><td>9</td><td>2011</td><td>102</td><td>13</td><td></td></tr><tr><td>10</td><td>2015</td><td>200</td><td>13</td><td></td></tr>
<tr><td colspan="5"><b>Most Assists in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2008</td><td>0</td><td>570</td><td></td></tr>
<tr><td>2</td><td>2009</td><td>0</td><td>525</td><td></td></tr>
<tr><td>3</td><td>2016</td><td>0</td><td>485</td><td></td></tr>
<tr><td>4</td><td>2010</td><td>0</td><td>478</td><td></td></tr>
<tr><td>5</td><td>2018</td><td>0</td><td>442</td><td></td></tr>
<tr><td>6</td><td>2017</td><td>0</td><td>429</td><td></td></tr>
<tr><td>7</td><td>2019</td><td>0</td><td>421</td><td></td></tr>
<tr><td>8</td><td>2015</td><td>0</td><td>420</td><td></td></tr>
<tr><td>9</td><td>2012</td><td>0</td><td>403</td><td></td></tr>
<tr><td>10</td><td>2013</td><td>0</td><td>402</td><td></td></tr>

<tr><td colspan="5"><b>Less Assist in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2011</td><td>0</td><td>375</td><td></td></tr>
<tr><td>2</td><td>2014</td><td>0</td><td>389</td><td></td></tr>
<tr><td>3</td><td>2013</td><td>0</td><td>402</td><td></td></tr>
<tr><td>4</td><td>2012</td><td>0</td><td>403</td><td></td></tr>
<tr><td>5</td><td>2015</td><td>0</td><td>420</td><td></td></tr>
<tr><td>6</td><td>2019</td><td>0</td><td>421</td><td></td></tr>
<tr><td>7</td><td>2018</td><td>0</td><td>442</td><td></td></tr>
<tr><td>8</td><td>2010</td><td>0</td><td>478</td><td></td></tr>
<tr><td>9</td><td>2009</td><td>0</td><td>525</td><td></td></tr>
<tr><td>10</td><td>2008</td><td>0</td><td>570</td><td></td></tr>

<tr><td colspan="5"><b>Most Game Points in 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2008</td><td>535</td><td>24</td><td></td></tr><tr><td>2</td><td>2018</td><td>1084</td><td>24</td><td></td></tr><tr><td>3</td><td>2008</td><td>654</td><td>22</td><td></td></tr><tr><td>4</td><td>2008</td><td>222</td><td>21</td><td></td></tr><tr><td>5</td><td>2008</td><td>984</td><td>21</td><td></td></tr><tr><td>6</td><td>2009</td><td>1198</td><td>21</td><td></td></tr><tr><td>7</td><td>2016</td><td>123</td><td>21</td><td></td></tr><tr><td>8</td><td>2016</td><td>289</td><td>21</td><td></td></tr><tr><td>9</td><td>2017</td><td>761</td><td>21</td><td></td></tr><tr><td>10</td><td>2011</td><td>102</td><td>20</td><td></td></tr>
<tr><td colspan="5"><b>Most Game Points in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>0</td><td>0</td><td>32000</td><td></td></tr>
<tr><td>2</td><td>0</td><td>0</td><td>32000</td><td></td></tr>

<tr><td colspan="5"><b>Less Game Point In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2011</td><td>0</td><td>607</td><td></td></tr>
<tr><td>2</td><td>2014</td><td>0</td><td>618</td><td></td></tr>
<tr><td>3</td><td>2013</td><td>0</td><td>633</td><td></td></tr>
<tr><td>4</td><td>2012</td><td>0</td><td>637</td><td></td></tr>
<tr><td>5</td><td>2015</td><td>0</td><td>663</td><td></td></tr>
<tr><td>6</td><td>2019</td><td>0</td><td>663</td><td></td></tr>
<tr><td>7</td><td>2018</td><td>0</td><td>700</td><td></td></tr>
<tr><td>8</td><td>2010</td><td>0</td><td>745</td><td></td></tr>
<tr><td>9</td><td>2009</td><td>0</td><td>824</td><td></td></tr>
<tr><td>10</td><td>2008</td><td>0</td><td>891</td><td></td></tr>

<tr><td colspan="5"><b>Most Shots In 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2015</td><td>955</td><td>54</td><td></td></tr><tr><td>2</td><td>2008</td><td>26</td><td>53</td><td></td></tr><tr><td>3</td><td>2017</td><td>297</td><td>53</td><td></td></tr><tr><td>4</td><td>2019</td><td>287</td><td>53</td><td><a href="OTHL-287.html">Game Direct Link</a></td></tr><tr><td>5</td><td>2010</td><td>1076</td><td>52</td><td></td></tr><tr><td>6</td><td>2009</td><td>460</td><td>51</td><td></td></tr><tr><td>7</td><td>2018</td><td>992</td><td>51</td><td></td></tr><tr><td>8</td><td>2018</td><td>1112</td><td>51</td><td></td></tr><tr><td>9</td><td>2017</td><td>551</td><td>50</td><td></td></tr><tr><td>10</td><td>2008</td><td>101</td><td>49</td><td></td></tr>
<tr><td colspan="5"><b>Most Shots In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2008</td><td>0</td><td>2764</td><td></td></tr>
<tr><td>2</td><td>2019</td><td>0</td><td>2692</td><td></td></tr>
<tr><td>3</td><td>2017</td><td>0</td><td>2688</td><td></td></tr>
<tr><td>4</td><td>2018</td><td>0</td><td>2634</td><td></td></tr>
<tr><td>5</td><td>2016</td><td>0</td><td>2577</td><td></td></tr>
<tr><td>6</td><td>2009</td><td>0</td><td>2459</td><td></td></tr>
<tr><td>7</td><td>2010</td><td>0</td><td>2363</td><td></td></tr>
<tr><td>8</td><td>2011</td><td>0</td><td>2338</td><td></td></tr>
<tr><td>9</td><td>2014</td><td>0</td><td>2293</td><td></td></tr>
<tr><td>10</td><td>2012</td><td>0</td><td>2284</td><td></td></tr>

<tr><td colspan="5"><b>Less Shots In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2013</td><td>0</td><td>2189</td><td></td></tr>
<tr><td>2</td><td>2015</td><td>0</td><td>2276</td><td></td></tr>
<tr><td>3</td><td>2012</td><td>0</td><td>2284</td><td></td></tr>
<tr><td>4</td><td>2014</td><td>0</td><td>2293</td><td></td></tr>
<tr><td>5</td><td>2011</td><td>0</td><td>2338</td><td></td></tr>
<tr><td>6</td><td>2010</td><td>0</td><td>2363</td><td></td></tr>
<tr><td>7</td><td>2009</td><td>0</td><td>2459</td><td></td></tr>
<tr><td>8</td><td>2018</td><td>0</td><td>2634</td><td></td></tr>
<tr><td>9</td><td>2019</td><td>0</td><td>2692</td><td></td></tr>
<tr><td>10</td><td>2008</td><td>0</td><td>2764</td><td></td></tr>

<tr><td colspan="5"><b>Most Shots Blocked In 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2013</td><td>41</td><td>21</td><td></td></tr><tr><td>2</td><td>2015</td><td>268</td><td>20</td><td></td></tr><tr><td>3</td><td>2017</td><td>137</td><td>20</td><td></td></tr><tr><td>4</td><td>2014</td><td>887</td><td>19</td><td></td></tr><tr><td>5</td><td>2015</td><td>221</td><td>19</td><td></td></tr><tr><td>6</td><td>2014</td><td>1088</td><td>18</td><td></td></tr><tr><td>7</td><td>2015</td><td>871</td><td>18</td><td></td></tr><tr><td>8</td><td>2018</td><td>1073</td><td>18</td><td></td></tr><tr><td>9</td><td>2008</td><td>36</td><td>17</td><td></td></tr><tr><td>10</td><td>2011</td><td>202</td><td>17</td><td></td></tr>
<tr><td colspan="5"><b>Most Shots Blocked In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>0</td><td>0</td><td>32000</td><td></td></tr>
<tr><td>2</td><td>0</td><td>0</td><td>32000</td><td></td></tr>

<tr><td colspan="5"><b>Less Shots Block In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2008</td><td>0</td><td>569</td><td></td></tr>
<tr><td>2</td><td>2016</td><td>0</td><td>602</td><td></td></tr>
<tr><td>3</td><td>2014</td><td>0</td><td>615</td><td></td></tr>
<tr><td>4</td><td>2009</td><td>0</td><td>623</td><td></td></tr>
<tr><td>5</td><td>2015</td><td>0</td><td>632</td><td></td></tr>
<tr><td>6</td><td>2013</td><td>0</td><td>638</td><td></td></tr>
<tr><td>7</td><td>2018</td><td>0</td><td>667</td><td></td></tr>
<tr><td>8</td><td>2010</td><td>0</td><td>672</td><td></td></tr>
<tr><td>9</td><td>2012</td><td>0</td><td>695</td><td></td></tr>
<tr><td>10</td><td>2019</td><td>0</td><td>730</td><td></td></tr>

<tr><td colspan="5"><b>Most Shots Against In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2018</td><td>0</td><td>2445</td><td></td></tr>
<tr><td>2</td><td>2019</td><td>0</td><td>2420</td><td></td></tr>
<tr><td>3</td><td>2017</td><td>0</td><td>2381</td><td></td></tr>
<tr><td>4</td><td>2011</td><td>0</td><td>2339</td><td></td></tr>
<tr><td>5</td><td>2012</td><td>0</td><td>2319</td><td></td></tr>
<tr><td>6</td><td>2013</td><td>0</td><td>2227</td><td></td></tr>
<tr><td>7</td><td>2009</td><td>0</td><td>2189</td><td></td></tr>
<tr><td>8</td><td>2015</td><td>0</td><td>2150</td><td></td></tr>
<tr><td>9</td><td>2014</td><td>0</td><td>2069</td><td></td></tr>
<tr><td>10</td><td>2010</td><td>0</td><td>2042</td><td></td></tr>

<tr><td colspan="5"><b>Less Shots Against In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2008</td><td>0</td><td>1995</td><td></td></tr>
<tr><td>2</td><td>2010</td><td>0</td><td>2042</td><td></td></tr>
<tr><td>3</td><td>2016</td><td>0</td><td>2063</td><td></td></tr>
<tr><td>4</td><td>2014</td><td>0</td><td>2069</td><td></td></tr>
<tr><td>5</td><td>2015</td><td>0</td><td>2150</td><td></td></tr>
<tr><td>6</td><td>2009</td><td>0</td><td>2189</td><td></td></tr>
<tr><td>7</td><td>2013</td><td>0</td><td>2227</td><td></td></tr>
<tr><td>8</td><td>2012</td><td>0</td><td>2319</td><td></td></tr>
<tr><td>9</td><td>2011</td><td>0</td><td>2339</td><td></td></tr>

<tr><td colspan="5"><b>Most Pim In 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2009</td><td>382</td><td>69</td><td></td></tr><tr><td>2</td><td>2013</td><td>390</td><td>68</td><td></td></tr><tr><td>3</td><td>2012</td><td>998</td><td>61</td><td></td></tr><tr><td>4</td><td>2009</td><td>836</td><td>60</td><td></td></tr><tr><td>5</td><td>2010</td><td>559</td><td>57</td><td></td></tr><tr><td>6</td><td>2008</td><td>249</td><td>54</td><td></td></tr><tr><td>7</td><td>2010</td><td>302</td><td>51</td><td></td></tr><tr><td>8</td><td>2015</td><td>268</td><td>49</td><td></td></tr><tr><td>9</td><td>2015</td><td>810</td><td>47</td><td></td></tr><tr><td>10</td><td>2011</td><td>102</td><td>40</td><td></td></tr>
<tr><td colspan="5"><b>Most Pim In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2009</td><td>0</td><td>1427</td><td></td></tr>
<tr><td>2</td><td>2010</td><td>0</td><td>1374</td><td></td></tr>
<tr><td>3</td><td>2008</td><td>0</td><td>1320</td><td></td></tr>
<tr><td>4</td><td>2011</td><td>0</td><td>1165</td><td></td></tr>
<tr><td>5</td><td>2012</td><td>0</td><td>1060</td><td></td></tr>
<tr><td>6</td><td>2019</td><td>0</td><td>755</td><td></td></tr>
<tr><td>7</td><td>2018</td><td>0</td><td>664</td><td></td></tr>

<tr><td colspan="5"><b>Less Pim In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2017</td><td>0</td><td>588</td><td></td></tr>
<tr><td>2</td><td>2018</td><td>0</td><td>664</td><td></td></tr>
<tr><td>3</td><td>2019</td><td>0</td><td>755</td><td></td></tr>
<tr><td>4</td><td>2015</td><td>0</td><td>807</td><td></td></tr>
<tr><td>5</td><td>2014</td><td>0</td><td>844</td><td></td></tr>
<tr><td>6</td><td>2013</td><td>0</td><td>949</td><td></td></tr>
<tr><td>7</td><td>2016</td><td>0</td><td>1037</td><td></td></tr>
<tr><td>8</td><td>2012</td><td>0</td><td>1060</td><td></td></tr>
<tr><td>9</td><td>2011</td><td>0</td><td>1165</td><td></td></tr>
<tr><td>10</td><td>2008</td><td>0</td><td>1320</td><td></td></tr>

<tr><td colspan="5"><b>Most Hits In 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2012</td><td>726</td><td>39</td><td></td></tr><tr><td>2</td><td>2011</td><td>681</td><td>37</td><td></td></tr><tr><td>3</td><td>2011</td><td>418</td><td>36</td><td></td></tr><tr><td>4</td><td>2012</td><td>1116</td><td>35</td><td></td></tr><tr><td>5</td><td>2016</td><td>759</td><td>35</td><td></td></tr><tr><td>6</td><td>2009</td><td>852</td><td>34</td><td></td></tr><tr><td>7</td><td>2009</td><td>1150</td><td>34</td><td></td></tr><tr><td>8</td><td>2015</td><td>167</td><td>34</td><td></td></tr><tr><td>9</td><td>2010</td><td>16</td><td>33</td><td></td></tr><tr><td>10</td><td>2011</td><td>912</td><td>33</td><td></td></tr>
<tr><td colspan="5"><b>Most Hits In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2011</td><td>0</td><td>1998</td><td></td></tr>
<tr><td>2</td><td>2012</td><td>0</td><td>1722</td><td></td></tr>
<tr><td>3</td><td>2016</td><td>0</td><td>1701</td><td></td></tr>
<tr><td>4</td><td>2018</td><td>0</td><td>1690</td><td></td></tr>
<tr><td>5</td><td>2019</td><td>0</td><td>1674</td><td></td></tr>
<tr><td>6</td><td>2017</td><td>0</td><td>1658</td><td></td></tr>
<tr><td>7</td><td>2013</td><td>0</td><td>1634</td><td></td></tr>
<tr><td>8</td><td>2009</td><td>0</td><td>1609</td><td></td></tr>
<tr><td>9</td><td>2015</td><td>0</td><td>1579</td><td></td></tr>
<tr><td>10</td><td>2010</td><td>0</td><td>1566</td><td></td></tr>

<tr><td colspan="5"><b>Less Hit In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2008</td><td>0</td><td>1515</td><td></td></tr>
<tr><td>2</td><td>2014</td><td>0</td><td>1563</td><td></td></tr>
<tr><td>3</td><td>2010</td><td>0</td><td>1566</td><td></td></tr>
<tr><td>4</td><td>2015</td><td>0</td><td>1579</td><td></td></tr>
<tr><td>5</td><td>2009</td><td>0</td><td>1609</td><td></td></tr>
<tr><td>6</td><td>2013</td><td>0</td><td>1634</td><td></td></tr>
<tr><td>7</td><td>2019</td><td>0</td><td>1674</td><td></td></tr>
<tr><td>8</td><td>2018</td><td>0</td><td>1690</td><td></td></tr>
<tr><td>9</td><td>2012</td><td>0</td><td>1722</td><td></td></tr>
<tr><td>10</td><td>2011</td><td>0</td><td>1998</td><td></td></tr>

<tr><td colspan="5"><b>Most Empty Net Goal In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2018</td><td>0</td><td>7</td><td></td></tr>
<tr><td>2</td><td>2011</td><td>0</td><td>3</td><td></td></tr>
<tr><td>3</td><td>2017</td><td>0</td><td>3</td><td></td></tr>
<tr><td>4</td><td>2013</td><td>0</td><td>2</td><td></td></tr>
<tr><td>5</td><td>2015</td><td>0</td><td>2</td><td></td></tr>
<tr><td>6</td><td>2008</td><td>0</td><td>1</td><td></td></tr>
<tr><td>7</td><td>2009</td><td>0</td><td>1</td><td></td></tr>
<tr><td>8</td><td>2012</td><td>0</td><td>1</td><td></td></tr>
<tr><td>9</td><td>2019</td><td>0</td><td>1</td><td></td></tr>

<tr><td colspan="5"><b>Best PP In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2016</td><td>0</td><td>19.70%</td><td></td></tr>
<tr><td>2</td><td>2008</td><td>0</td><td>19.40%</td><td></td></tr>
<tr><td>3</td><td>2013</td><td>0</td><td>19.40%</td><td></td></tr>
<tr><td>4</td><td>2018</td><td>0</td><td>19.40%</td><td></td></tr>
<tr><td>5</td><td>2014</td><td>0</td><td>19.00%</td><td></td></tr>
<tr><td>6</td><td>2017</td><td>0</td><td>18.60%</td><td></td></tr>
<tr><td>7</td><td>2011</td><td>0</td><td>18.50%</td><td></td></tr>
<tr><td>8</td><td>2010</td><td>0</td><td>17.00%</td><td></td></tr>
<tr><td>9</td><td>2019</td><td>0</td><td>16.60%</td><td></td></tr>
<tr><td>10</td><td>2009</td><td>0</td><td>16.40%</td><td></td></tr>

<tr><td colspan="5"><b>Best PK In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2019</td><td>0</td><td>86.40%</td><td></td></tr>
<tr><td>2</td><td>2015</td><td>0</td><td>85.90%</td><td></td></tr>
<tr><td>3</td><td>2009</td><td>0</td><td>85.70%</td><td></td></tr>
<tr><td>4</td><td>2014</td><td>0</td><td>85.00%</td><td></td></tr>
<tr><td>5</td><td>2016</td><td>0</td><td>84.70%</td><td></td></tr>
<tr><td>6</td><td>2013</td><td>0</td><td>84.50%</td><td></td></tr>
<tr><td>7</td><td>2008</td><td>0</td><td>84.10%</td><td></td></tr>
<tr><td>8</td><td>2010</td><td>0</td><td>83.00%</td><td></td></tr>
<tr><td>9</td><td>2018</td><td>0</td><td>82.60%</td><td></td></tr>
<tr><td>10</td><td>2011</td><td>0</td><td>80.10%</td><td></td></tr>

<tr><td colspan="5"><b>Worse PP In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2015</td><td>0</td><td>14.30%</td><td></td></tr>
<tr><td>2</td><td>2012</td><td>0</td><td>16.00%</td><td></td></tr>
<tr><td>3</td><td>2009</td><td>0</td><td>16.40%</td><td></td></tr>
<tr><td>4</td><td>2019</td><td>0</td><td>16.60%</td><td></td></tr>
<tr><td>5</td><td>2010</td><td>0</td><td>17.00%</td><td></td></tr>
<tr><td>6</td><td>2011</td><td>0</td><td>18.50%</td><td></td></tr>
<tr><td>7</td><td>2014</td><td>0</td><td>19.00%</td><td></td></tr>
<tr><td>8</td><td>2008</td><td>0</td><td>19.40%</td><td></td></tr>

<tr><td colspan="5"><b>Worse PK In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2012</td><td>0</td><td>79.50%</td><td></td></tr>
<tr><td>2</td><td>2011</td><td>0</td><td>80.10%</td><td></td></tr>
<tr><td>3</td><td>2017</td><td>0</td><td>81.20%</td><td></td></tr>
<tr><td>4</td><td>2018</td><td>0</td><td>82.60%</td><td></td></tr>
<tr><td>5</td><td>2010</td><td>0</td><td>83.00%</td><td></td></tr>
<tr><td>6</td><td>2008</td><td>0</td><td>84.10%</td><td></td></tr>
<tr><td>7</td><td>2013</td><td>0</td><td>84.50%</td><td></td></tr>
<tr><td>8</td><td>2009</td><td>0</td><td>85.70%</td><td></td></tr>

<tr><td colspan="5"><b>Most Win In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2009</td><td>0</td><td>56</td><td></td></tr>
<tr><td>2</td><td>2016</td><td>0</td><td>54</td><td></td></tr>
<tr><td>3</td><td>2008</td><td>0</td><td>49</td><td></td></tr>
<tr><td>4</td><td>2017</td><td>0</td><td>48</td><td></td></tr>
<tr><td>5</td><td>2018</td><td>0</td><td>48</td><td></td></tr>
<tr><td>6</td><td>2019</td><td>0</td><td>48</td><td></td></tr>
<tr><td>7</td><td>2010</td><td>0</td><td>47</td><td></td></tr>
<tr><td>8</td><td>2015</td><td>0</td><td>45</td><td></td></tr>
<tr><td>9</td><td>2011</td><td>0</td><td>44</td><td></td></tr>
<tr><td>10</td><td>2012</td><td>0</td><td>44</td><td></td></tr>

<tr><td colspan="5"><b>Less Win In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2013</td><td>0</td><td>43</td><td></td></tr>
<tr><td>2</td><td>2011</td><td>0</td><td>44</td><td></td></tr>
<tr><td>3</td><td>2012</td><td>0</td><td>44</td><td></td></tr>
<tr><td>4</td><td>2014</td><td>0</td><td>44</td><td></td></tr>
<tr><td>5</td><td>2015</td><td>0</td><td>45</td><td></td></tr>
<tr><td>6</td><td>2010</td><td>0</td><td>47</td><td></td></tr>
<tr><td>7</td><td>2018</td><td>0</td><td>48</td><td></td></tr>
<tr><td>8</td><td>2019</td><td>0</td><td>48</td><td></td></tr>
<tr><td>9</td><td>2008</td><td>0</td><td>49</td><td></td></tr>
<tr><td>10</td><td>2009</td><td>0</td><td>56</td><td></td></tr>

<tr><td colspan="5"><b>Most Lost In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2013</td><td>0</td><td>39</td><td></td></tr>
<tr><td>2</td><td>2011</td><td>0</td><td>38</td><td></td></tr>
<tr><td>3</td><td>2012</td><td>0</td><td>38</td><td></td></tr>
<tr><td>4</td><td>2014</td><td>0</td><td>38</td><td></td></tr>
<tr><td>5</td><td>2015</td><td>0</td><td>37</td><td></td></tr>
<tr><td>6</td><td>2010</td><td>0</td><td>35</td><td></td></tr>
<tr><td>7</td><td>2018</td><td>0</td><td>34</td><td></td></tr>
<tr><td>8</td><td>2019</td><td>0</td><td>34</td><td></td></tr>
<tr><td>9</td><td>2009</td><td>0</td><td>26</td><td></td></tr>
<tr><td>10</td><td>2008</td><td>0</td><td>22</td><td></td></tr>

<tr><td colspan="5"><b>Less Lost In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2008</td><td>0</td><td>22</td><td></td></tr>
<tr><td>2</td><td>2009</td><td>0</td><td>26</td><td></td></tr>
<tr><td>3</td><td>2016</td><td>0</td><td>28</td><td></td></tr>
<tr><td>4</td><td>2017</td><td>0</td><td>34</td><td></td></tr>
<tr><td>5</td><td>2018</td><td>0</td><td>34</td><td></td></tr>
<tr><td>6</td><td>2019</td><td>0</td><td>34</td><td></td></tr>
<tr><td>7</td><td>2010</td><td>0</td><td>35</td><td></td></tr>
<tr><td>8</td><td>2015</td><td>0</td><td>37</td><td></td></tr>
<tr><td>9</td><td>2011</td><td>0</td><td>38</td><td></td></tr>
<tr><td>10</td><td>2012</td><td>0</td><td>38</td><td></td></tr>

<tr><td colspan="5"><b>Most Point In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2009</td><td>0</td><td>120</td><td></td></tr>
<tr><td>2</td><td>2008</td><td>0</td><td>117</td><td></td></tr>
<tr><td>3</td><td>2016</td><td>0</td><td>116</td><td></td></tr>
<tr><td>4</td><td>2019</td><td>0</td><td>108</td><td></td></tr>
<tr><td>5</td><td>2010</td><td>0</td><td>106</td><td></td></tr>
<tr><td>6</td><td>2017</td><td>0</td><td>104</td><td></td></tr>
<tr><td>7</td><td>2015</td><td>0</td><td>101</td><td></td></tr>
<tr><td>8</td><td>2011</td><td>0</td><td>98</td><td></td></tr>
<tr><td>9</td><td>2018</td><td>0</td><td>98</td><td></td></tr>
<tr><td>10</td><td>2012</td><td>0</td><td>95</td><td></td></tr>

<tr><td colspan="5"><b>Less Points In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2014</td><td>0</td><td>93</td><td></td></tr>
<tr><td>2</td><td>2012</td><td>0</td><td>95</td><td></td></tr>
<tr><td>3</td><td>2013</td><td>0</td><td>95</td><td></td></tr>
<tr><td>4</td><td>2011</td><td>0</td><td>98</td><td></td></tr>
<tr><td>5</td><td>2018</td><td>0</td><td>98</td><td></td></tr>
<tr><td>6</td><td>2015</td><td>0</td><td>101</td><td></td></tr>
<tr><td>7</td><td>2010</td><td>0</td><td>106</td><td></td></tr>
<tr><td>8</td><td>2019</td><td>0</td><td>108</td><td></td></tr>
<tr><td>9</td><td>2008</td><td>0</td><td>117</td><td></td></tr>
<tr><td>10</td><td>2009</td><td>0</td><td>120</td><td></td></tr>

<tr><td colspan="5"><b>Most Win Home In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>0</td><td>0</td><td>32000</td><td></td></tr>
<tr><td>2</td><td>0</td><td>0</td><td>32000</td><td></td></tr>

<tr><td colspan="5"><b>Most Win Visitor In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>0</td><td>0</td><td>32000</td><td></td></tr>
<tr><td>2</td><td>0</td><td>0</td><td>32000</td><td></td></tr>

</table></div>
<h1 class="TeamRecordsPro_OTT"><a id="Senators">Senators</a></h1>
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
<br /><table class="STHSRecordTable">
<tr><td colspan="5"><b>Most Goals in 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2008</td><td>54</td><td>8</td><td></td></tr><tr><td>2</td><td>2009</td><td>745</td><td>8</td><td></td></tr><tr><td>3</td><td>2009</td><td>844</td><td>8</td><td></td></tr><tr><td>4</td><td>2010</td><td>224</td><td>8</td><td></td></tr><tr><td>5</td><td>2008</td><td>716</td><td>7</td><td></td></tr><tr><td>6</td><td>2012</td><td>847</td><td>7</td><td></td></tr><tr><td>7</td><td>2012</td><td>1029</td><td>7</td><td></td></tr><tr><td>8</td><td>2013</td><td>712</td><td>7</td><td></td></tr><tr><td>9</td><td>2013</td><td>1031</td><td>7</td><td></td></tr><tr><td>10</td><td>2013</td><td>1045</td><td>7</td><td></td></tr>
<tr><td colspan="5"><b>Most Goals in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2009</td><td>0</td><td>300</td><td></td></tr>
<tr><td>2</td><td>2016</td><td>0</td><td>286</td><td></td></tr>
<tr><td>3</td><td>2010</td><td>0</td><td>262</td><td></td></tr>
<tr><td>4</td><td>2008</td><td>0</td><td>253</td><td></td></tr>
<tr><td>5</td><td>2013</td><td>0</td><td>253</td><td></td></tr>
<tr><td>6</td><td>2012</td><td>0</td><td>247</td><td></td></tr>
<tr><td>7</td><td>2018</td><td>0</td><td>244</td><td></td></tr>
<tr><td>8</td><td>2011</td><td>0</td><td>227</td><td></td></tr>
<tr><td>9</td><td>2019</td><td>0</td><td>202</td><td></td></tr>

<tr><td colspan="5"><b>Less Goal in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2019</td><td>0</td><td>202</td><td></td></tr>
<tr><td>2</td><td>2015</td><td>0</td><td>209</td><td></td></tr>
<tr><td>3</td><td>2011</td><td>0</td><td>227</td><td></td></tr>
<tr><td>4</td><td>2017</td><td>0</td><td>228</td><td></td></tr>
<tr><td>5</td><td>2014</td><td>0</td><td>235</td><td></td></tr>
<tr><td>6</td><td>2018</td><td>0</td><td>244</td><td></td></tr>
<tr><td>7</td><td>2012</td><td>0</td><td>247</td><td></td></tr>
<tr><td>8</td><td>2008</td><td>0</td><td>253</td><td></td></tr>
<tr><td>9</td><td>2013</td><td>0</td><td>253</td><td></td></tr>
<tr><td>10</td><td>2010</td><td>0</td><td>262</td><td></td></tr>

<tr><td colspan="5"><b>Most Goals Against in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2010</td><td>0</td><td>256</td><td></td></tr>
<tr><td>2</td><td>2008</td><td>0</td><td>252</td><td></td></tr>
<tr><td>3</td><td>2009</td><td>0</td><td>247</td><td></td></tr>
<tr><td>4</td><td>2019</td><td>0</td><td>244</td><td></td></tr>
<tr><td>5</td><td>2012</td><td>0</td><td>239</td><td></td></tr>
<tr><td>6</td><td>2011</td><td>0</td><td>237</td><td></td></tr>
<tr><td>7</td><td>2018</td><td>0</td><td>206</td><td></td></tr>

<tr><td colspan="5"><b>Less Goal Against in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2014</td><td>0</td><td>192</td><td></td></tr>
<tr><td>2</td><td>2017</td><td>0</td><td>200</td><td></td></tr>
<tr><td>3</td><td>2013</td><td>0</td><td>206</td><td></td></tr>
<tr><td>4</td><td>2018</td><td>0</td><td>206</td><td></td></tr>
<tr><td>5</td><td>2016</td><td>0</td><td>213</td><td></td></tr>
<tr><td>6</td><td>2015</td><td>0</td><td>221</td><td></td></tr>
<tr><td>7</td><td>2011</td><td>0</td><td>237</td><td></td></tr>
<tr><td>8</td><td>2012</td><td>0</td><td>239</td><td></td></tr>
<tr><td>9</td><td>2019</td><td>0</td><td>244</td><td></td></tr>
<tr><td>10</td><td>2009</td><td>0</td><td>247</td><td></td></tr>

<tr><td colspan="5"><b>Most Assists in 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2010</td><td>224</td><td>16</td><td></td></tr><tr><td>2</td><td>2009</td><td>745</td><td>15</td><td></td></tr><tr><td>3</td><td>2008</td><td>54</td><td>14</td><td></td></tr><tr><td>4</td><td>2008</td><td>716</td><td>14</td><td></td></tr><tr><td>5</td><td>2009</td><td>536</td><td>14</td><td></td></tr><tr><td>6</td><td>2012</td><td>1029</td><td>14</td><td></td></tr><tr><td>7</td><td>2016</td><td>109</td><td>14</td><td></td></tr><tr><td>8</td><td>2016</td><td>495</td><td>14</td><td></td></tr><tr><td>9</td><td>2013</td><td>1031</td><td>13</td><td></td></tr><tr><td>10</td><td>2013</td><td>1045</td><td>13</td><td></td></tr>
<tr><td colspan="5"><b>Most Assists in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2009</td><td>0</td><td>537</td><td></td></tr>
<tr><td>2</td><td>2016</td><td>0</td><td>510</td><td></td></tr>
<tr><td>3</td><td>2010</td><td>0</td><td>467</td><td></td></tr>
<tr><td>4</td><td>2013</td><td>0</td><td>441</td><td></td></tr>
<tr><td>5</td><td>2018</td><td>0</td><td>437</td><td></td></tr>
<tr><td>6</td><td>2008</td><td>0</td><td>435</td><td></td></tr>
<tr><td>7</td><td>2012</td><td>0</td><td>424</td><td></td></tr>
<tr><td>8</td><td>2011</td><td>0</td><td>364</td><td></td></tr>
<tr><td>9</td><td>2019</td><td>0</td><td>352</td><td></td></tr>

<tr><td colspan="5"><b>Less Assist in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2019</td><td>0</td><td>352</td><td></td></tr>
<tr><td>2</td><td>2011</td><td>0</td><td>364</td><td></td></tr>
<tr><td>3</td><td>2015</td><td>0</td><td>366</td><td></td></tr>
<tr><td>4</td><td>2014</td><td>0</td><td>392</td><td></td></tr>
<tr><td>5</td><td>2017</td><td>0</td><td>407</td><td></td></tr>
<tr><td>6</td><td>2012</td><td>0</td><td>424</td><td></td></tr>
<tr><td>7</td><td>2008</td><td>0</td><td>435</td><td></td></tr>
<tr><td>8</td><td>2018</td><td>0</td><td>437</td><td></td></tr>
<tr><td>9</td><td>2013</td><td>0</td><td>441</td><td></td></tr>
<tr><td>10</td><td>2010</td><td>0</td><td>467</td><td></td></tr>

<tr><td colspan="5"><b>Most Game Points in 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2010</td><td>224</td><td>24</td><td></td></tr><tr><td>2</td><td>2009</td><td>745</td><td>23</td><td></td></tr><tr><td>3</td><td>2008</td><td>54</td><td>22</td><td></td></tr><tr><td>4</td><td>2008</td><td>716</td><td>21</td><td></td></tr><tr><td>5</td><td>2009</td><td>536</td><td>21</td><td></td></tr><tr><td>6</td><td>2012</td><td>1029</td><td>21</td><td></td></tr><tr><td>7</td><td>2016</td><td>109</td><td>21</td><td></td></tr><tr><td>8</td><td>2016</td><td>495</td><td>21</td><td></td></tr><tr><td>9</td><td>2013</td><td>1031</td><td>20</td><td></td></tr><tr><td>10</td><td>2013</td><td>1045</td><td>20</td><td></td></tr>
<tr><td colspan="5"><b>Most Game Points in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>0</td><td>0</td><td>32000</td><td></td></tr>
<tr><td>2</td><td>0</td><td>0</td><td>32000</td><td></td></tr>

<tr><td colspan="5"><b>Less Game Point In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2019</td><td>0</td><td>554</td><td></td></tr>
<tr><td>2</td><td>2015</td><td>0</td><td>575</td><td></td></tr>
<tr><td>3</td><td>2011</td><td>0</td><td>591</td><td></td></tr>
<tr><td>4</td><td>2014</td><td>0</td><td>627</td><td></td></tr>
<tr><td>5</td><td>2017</td><td>0</td><td>635</td><td></td></tr>
<tr><td>6</td><td>2012</td><td>0</td><td>671</td><td></td></tr>
<tr><td>7</td><td>2018</td><td>0</td><td>681</td><td></td></tr>
<tr><td>8</td><td>2008</td><td>0</td><td>688</td><td></td></tr>
<tr><td>9</td><td>2013</td><td>0</td><td>694</td><td></td></tr>
<tr><td>10</td><td>2010</td><td>0</td><td>729</td><td></td></tr>

<tr><td colspan="5"><b>Most Shots In 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2019</td><td>1024</td><td>54</td><td><a href="OTHL-1024.html">Game Direct Link</a></td></tr><tr><td>2</td><td>2009</td><td>745</td><td>53</td><td></td></tr><tr><td>3</td><td>2012</td><td>1128</td><td>52</td><td></td></tr><tr><td>4</td><td>2018</td><td>553</td><td>51</td><td></td></tr><tr><td>5</td><td>2009</td><td>836</td><td>50</td><td></td></tr><tr><td>6</td><td>2012</td><td>1197</td><td>50</td><td></td></tr><tr><td>7</td><td>2017</td><td>350</td><td>50</td><td></td></tr><tr><td>8</td><td>2017</td><td>700</td><td>50</td><td></td></tr><tr><td>9</td><td>2019</td><td>697</td><td>49</td><td><a href="OTHL-697.html">Game Direct Link</a></td></tr><tr><td>10</td><td>2008</td><td>655</td><td>48</td><td></td></tr>
<tr><td colspan="5"><b>Most Shots In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2012</td><td>0</td><td>2684</td><td></td></tr>
<tr><td>2</td><td>2017</td><td>0</td><td>2643</td><td></td></tr>
<tr><td>3</td><td>2018</td><td>0</td><td>2629</td><td></td></tr>
<tr><td>4</td><td>2016</td><td>0</td><td>2515</td><td></td></tr>
<tr><td>5</td><td>2009</td><td>0</td><td>2465</td><td></td></tr>
<tr><td>6</td><td>2013</td><td>0</td><td>2391</td><td></td></tr>
<tr><td>7</td><td>2008</td><td>0</td><td>2319</td><td></td></tr>
<tr><td>8</td><td>2011</td><td>0</td><td>2242</td><td></td></tr>
<tr><td>9</td><td>2019</td><td>0</td><td>2197</td><td></td></tr>
<tr><td>10</td><td>2010</td><td>0</td><td>2169</td><td></td></tr>

<tr><td colspan="5"><b>Less Shots In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2010</td><td>0</td><td>2169</td><td></td></tr>
<tr><td>2</td><td>2015</td><td>0</td><td>2169</td><td></td></tr>
<tr><td>3</td><td>2014</td><td>0</td><td>2189</td><td></td></tr>
<tr><td>4</td><td>2019</td><td>0</td><td>2197</td><td></td></tr>
<tr><td>5</td><td>2011</td><td>0</td><td>2242</td><td></td></tr>
<tr><td>6</td><td>2008</td><td>0</td><td>2319</td><td></td></tr>
<tr><td>7</td><td>2013</td><td>0</td><td>2391</td><td></td></tr>
<tr><td>8</td><td>2009</td><td>0</td><td>2465</td><td></td></tr>
<tr><td>9</td><td>2018</td><td>0</td><td>2629</td><td></td></tr>
<tr><td>10</td><td>2012</td><td>0</td><td>2684</td><td></td></tr>

<tr><td colspan="5"><b>Most Shots Blocked In 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2018</td><td>67</td><td>22</td><td></td></tr><tr><td>2</td><td>2016</td><td>763</td><td>21</td><td></td></tr><tr><td>3</td><td>2012</td><td>235</td><td>19</td><td></td></tr><tr><td>4</td><td>2009</td><td>548</td><td>18</td><td></td></tr><tr><td>5</td><td>2017</td><td>409</td><td>18</td><td></td></tr><tr><td>6</td><td>2019</td><td>469</td><td>18</td><td><a href="OTHL-469.html">Game Direct Link</a></td></tr><tr><td>7</td><td>2008</td><td>175</td><td>17</td><td></td></tr><tr><td>8</td><td>2010</td><td>1063</td><td>17</td><td></td></tr><tr><td>9</td><td>2012</td><td>1139</td><td>17</td><td></td></tr><tr><td>10</td><td>2013</td><td>78</td><td>17</td><td></td></tr>
<tr><td colspan="5"><b>Most Shots Blocked In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>0</td><td>0</td><td>32000</td><td></td></tr>
<tr><td>2</td><td>0</td><td>0</td><td>32000</td><td></td></tr>

<tr><td colspan="5"><b>Less Shots Block In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2014</td><td>0</td><td>546</td><td></td></tr>
<tr><td>2</td><td>2009</td><td>0</td><td>556</td><td></td></tr>
<tr><td>3</td><td>2015</td><td>0</td><td>584</td><td></td></tr>
<tr><td>4</td><td>2013</td><td>0</td><td>597</td><td></td></tr>
<tr><td>5</td><td>2010</td><td>0</td><td>628</td><td></td></tr>
<tr><td>6</td><td>2008</td><td>0</td><td>654</td><td></td></tr>
<tr><td>7</td><td>2012</td><td>0</td><td>724</td><td></td></tr>
<tr><td>8</td><td>2018</td><td>0</td><td>737</td><td></td></tr>
<tr><td>9</td><td>2019</td><td>0</td><td>744</td><td></td></tr>
<tr><td>10</td><td>2011</td><td>0</td><td>807</td><td></td></tr>

<tr><td colspan="5"><b>Most Shots Against In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2019</td><td>0</td><td>2812</td><td></td></tr>
<tr><td>2</td><td>2018</td><td>0</td><td>2556</td><td></td></tr>
<tr><td>3</td><td>2012</td><td>0</td><td>2399</td><td></td></tr>
<tr><td>4</td><td>2011</td><td>0</td><td>2389</td><td></td></tr>
<tr><td>5</td><td>2017</td><td>0</td><td>2333</td><td></td></tr>
<tr><td>6</td><td>2008</td><td>0</td><td>2288</td><td></td></tr>
<tr><td>7</td><td>2010</td><td>0</td><td>2222</td><td></td></tr>
<tr><td>8</td><td>2016</td><td>0</td><td>2177</td><td></td></tr>
<tr><td>9</td><td>2015</td><td>0</td><td>2168</td><td></td></tr>
<tr><td>10</td><td>2013</td><td>0</td><td>2045</td><td></td></tr>

<tr><td colspan="5"><b>Less Shots Against In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2014</td><td>0</td><td>1983</td><td></td></tr>
<tr><td>2</td><td>2009</td><td>0</td><td>2020</td><td></td></tr>
<tr><td>3</td><td>2013</td><td>0</td><td>2045</td><td></td></tr>
<tr><td>4</td><td>2015</td><td>0</td><td>2168</td><td></td></tr>
<tr><td>5</td><td>2016</td><td>0</td><td>2177</td><td></td></tr>
<tr><td>6</td><td>2010</td><td>0</td><td>2222</td><td></td></tr>
<tr><td>7</td><td>2008</td><td>0</td><td>2288</td><td></td></tr>
<tr><td>8</td><td>2011</td><td>0</td><td>2389</td><td></td></tr>
<tr><td>9</td><td>2012</td><td>0</td><td>2399</td><td></td></tr>

<tr><td colspan="5"><b>Most Pim In 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2008</td><td>827</td><td>54</td><td></td></tr><tr><td>2</td><td>2018</td><td>433</td><td>54</td><td></td></tr><tr><td>3</td><td>2019</td><td>1213</td><td>51</td><td><a href="OTHL-1213.html">Game Direct Link</a></td></tr><tr><td>4</td><td>2009</td><td>836</td><td>49</td><td></td></tr><tr><td>5</td><td>2012</td><td>998</td><td>49</td><td></td></tr><tr><td>6</td><td>2016</td><td>650</td><td>46</td><td></td></tr><tr><td>7</td><td>2017</td><td>453</td><td>46</td><td></td></tr><tr><td>8</td><td>2010</td><td>105</td><td>44</td><td></td></tr><tr><td>9</td><td>2011</td><td>160</td><td>44</td><td></td></tr><tr><td>10</td><td>2010</td><td>288</td><td>43</td><td></td></tr>
<tr><td colspan="5"><b>Most Pim In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2011</td><td>0</td><td>1250</td><td></td></tr>
<tr><td>2</td><td>2010</td><td>0</td><td>1247</td><td></td></tr>
<tr><td>3</td><td>2008</td><td>0</td><td>1231</td><td></td></tr>
<tr><td>4</td><td>2009</td><td>0</td><td>1150</td><td></td></tr>
<tr><td>5</td><td>2012</td><td>0</td><td>905</td><td></td></tr>
<tr><td>6</td><td>2019</td><td>0</td><td>858</td><td></td></tr>
<tr><td>7</td><td>2018</td><td>0</td><td>716</td><td></td></tr>

<tr><td colspan="5"><b>Less Pim In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2017</td><td>0</td><td>587</td><td></td></tr>
<tr><td>2</td><td>2014</td><td>0</td><td>663</td><td></td></tr>
<tr><td>3</td><td>2013</td><td>0</td><td>678</td><td></td></tr>
<tr><td>4</td><td>2018</td><td>0</td><td>716</td><td></td></tr>
<tr><td>5</td><td>2015</td><td>0</td><td>788</td><td></td></tr>
<tr><td>6</td><td>2016</td><td>0</td><td>844</td><td></td></tr>
<tr><td>7</td><td>2019</td><td>0</td><td>858</td><td></td></tr>
<tr><td>8</td><td>2012</td><td>0</td><td>905</td><td></td></tr>
<tr><td>9</td><td>2009</td><td>0</td><td>1150</td><td></td></tr>
<tr><td>10</td><td>2008</td><td>0</td><td>1231</td><td></td></tr>

<tr><td colspan="5"><b>Most Hits In 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2019</td><td>953</td><td>39</td><td><a href="OTHL-953.html">Game Direct Link</a></td></tr><tr><td>2</td><td>2019</td><td>3</td><td>38</td><td><a href="OTHL-3.html">Game Direct Link</a></td></tr><tr><td>3</td><td>2015</td><td>1071</td><td>37</td><td></td></tr><tr><td>4</td><td>2017</td><td>844</td><td>37</td><td></td></tr><tr><td>5</td><td>2013</td><td>630</td><td>36</td><td></td></tr><tr><td>6</td><td>2012</td><td>107</td><td>35</td><td></td></tr><tr><td>7</td><td>2019</td><td>1213</td><td>35</td><td><a href="OTHL-1213.html">Game Direct Link</a></td></tr><tr><td>8</td><td>2016</td><td>287</td><td>34</td><td></td></tr><tr><td>9</td><td>2019</td><td>634</td><td>34</td><td><a href="OTHL-634.html">Game Direct Link</a></td></tr><tr><td>10</td><td>2010</td><td>332</td><td>33</td><td></td></tr>
<tr><td colspan="5"><b>Most Hits In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2019</td><td>0</td><td>1794</td><td></td></tr>
<tr><td>2</td><td>2012</td><td>0</td><td>1748</td><td></td></tr>
<tr><td>3</td><td>2018</td><td>0</td><td>1735</td><td></td></tr>
<tr><td>4</td><td>2011</td><td>0</td><td>1716</td><td></td></tr>
<tr><td>5</td><td>2016</td><td>0</td><td>1630</td><td></td></tr>
<tr><td>6</td><td>2010</td><td>0</td><td>1623</td><td></td></tr>
<tr><td>7</td><td>2015</td><td>0</td><td>1586</td><td></td></tr>
<tr><td>8</td><td>2008</td><td>0</td><td>1556</td><td></td></tr>
<tr><td>9</td><td>2013</td><td>0</td><td>1544</td><td></td></tr>
<tr><td>10</td><td>2009</td><td>0</td><td>1371</td><td></td></tr>

<tr><td colspan="5"><b>Less Hit In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2009</td><td>0</td><td>1371</td><td></td></tr>
<tr><td>2</td><td>2014</td><td>0</td><td>1491</td><td></td></tr>
<tr><td>3</td><td>2013</td><td>0</td><td>1544</td><td></td></tr>
<tr><td>4</td><td>2008</td><td>0</td><td>1556</td><td></td></tr>
<tr><td>5</td><td>2017</td><td>0</td><td>1581</td><td></td></tr>
<tr><td>6</td><td>2015</td><td>0</td><td>1586</td><td></td></tr>
<tr><td>7</td><td>2010</td><td>0</td><td>1623</td><td></td></tr>
<tr><td>8</td><td>2011</td><td>0</td><td>1716</td><td></td></tr>
<tr><td>9</td><td>2018</td><td>0</td><td>1735</td><td></td></tr>
<tr><td>10</td><td>2012</td><td>0</td><td>1748</td><td></td></tr>

<tr><td colspan="5"><b>Most Empty Net Goal In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2017</td><td>0</td><td>5</td><td></td></tr>
<tr><td>2</td><td>2018</td><td>0</td><td>5</td><td></td></tr>
<tr><td>3</td><td>2010</td><td>0</td><td>3</td><td></td></tr>
<tr><td>4</td><td>2011</td><td>0</td><td>2</td><td></td></tr>
<tr><td>5</td><td>2013</td><td>0</td><td>2</td><td></td></tr>
<tr><td>6</td><td>2008</td><td>0</td><td>1</td><td></td></tr>
<tr><td>7</td><td>2014</td><td>0</td><td>1</td><td></td></tr>
<tr><td>8</td><td>2019</td><td>0</td><td>1</td><td></td></tr>

<tr><td colspan="5"><b>Best PP In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2016</td><td>0</td><td>19.90%</td><td></td></tr>
<tr><td>2</td><td>2009</td><td>0</td><td>19.40%</td><td></td></tr>
<tr><td>3</td><td>2018</td><td>0</td><td>19.30%</td><td></td></tr>
<tr><td>4</td><td>2011</td><td>0</td><td>19.10%</td><td></td></tr>
<tr><td>5</td><td>2008</td><td>0</td><td>18.40%</td><td></td></tr>
<tr><td>6</td><td>2019</td><td>0</td><td>17.30%</td><td></td></tr>
<tr><td>7</td><td>2017</td><td>0</td><td>17.20%</td><td></td></tr>
<tr><td>8</td><td>2010</td><td>0</td><td>16.80%</td><td></td></tr>
<tr><td>9</td><td>2012</td><td>0</td><td>16.60%</td><td></td></tr>

<tr><td colspan="5"><b>Best PK In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2014</td><td>0</td><td>86.60%</td><td></td></tr>
<tr><td>2</td><td>2019</td><td>0</td><td>83.20%</td><td></td></tr>
<tr><td>3</td><td>2016</td><td>0</td><td>82.60%</td><td></td></tr>
<tr><td>4</td><td>2017</td><td>0</td><td>82.60%</td><td></td></tr>
<tr><td>5</td><td>2008</td><td>0</td><td>82.50%</td><td></td></tr>
<tr><td>6</td><td>2018</td><td>0</td><td>82.20%</td><td></td></tr>
<tr><td>7</td><td>2011</td><td>0</td><td>82.00%</td><td></td></tr>
<tr><td>8</td><td>2009</td><td>0</td><td>81.10%</td><td></td></tr>
<tr><td>9</td><td>2013</td><td>0</td><td>81.00%</td><td></td></tr>
<tr><td>10</td><td>2012</td><td>0</td><td>80.50%</td><td></td></tr>

<tr><td colspan="5"><b>Worse PP In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2013</td><td>0</td><td>14.30%</td><td></td></tr>
<tr><td>2</td><td>2014</td><td>0</td><td>14.40%</td><td></td></tr>
<tr><td>3</td><td>2015</td><td>0</td><td>15.60%</td><td></td></tr>
<tr><td>4</td><td>2012</td><td>0</td><td>16.60%</td><td></td></tr>
<tr><td>5</td><td>2010</td><td>0</td><td>16.80%</td><td></td></tr>
<tr><td>6</td><td>2019</td><td>0</td><td>17.30%</td><td></td></tr>
<tr><td>7</td><td>2008</td><td>0</td><td>18.40%</td><td></td></tr>
<tr><td>8</td><td>2011</td><td>0</td><td>19.10%</td><td></td></tr>
<tr><td>9</td><td>2018</td><td>0</td><td>19.30%</td><td></td></tr>
<tr><td>10</td><td>2009</td><td>0</td><td>19.40%</td><td></td></tr>

<tr><td colspan="5"><b>Worse PK In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2010</td><td>0</td><td>77.60%</td><td></td></tr>
<tr><td>2</td><td>2015</td><td>0</td><td>79.10%</td><td></td></tr>
<tr><td>3</td><td>2012</td><td>0</td><td>80.50%</td><td></td></tr>
<tr><td>4</td><td>2013</td><td>0</td><td>81.00%</td><td></td></tr>
<tr><td>5</td><td>2009</td><td>0</td><td>81.10%</td><td></td></tr>
<tr><td>6</td><td>2011</td><td>0</td><td>82.00%</td><td></td></tr>
<tr><td>7</td><td>2018</td><td>0</td><td>82.20%</td><td></td></tr>
<tr><td>8</td><td>2008</td><td>0</td><td>82.50%</td><td></td></tr>

<tr><td colspan="5"><b>Most Win In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2016</td><td>0</td><td>55</td><td></td></tr>
<tr><td>2</td><td>2013</td><td>0</td><td>52</td><td></td></tr>
<tr><td>3</td><td>2014</td><td>0</td><td>50</td><td></td></tr>
<tr><td>4</td><td>2017</td><td>0</td><td>46</td><td></td></tr>
<tr><td>5</td><td>2018</td><td>0</td><td>46</td><td></td></tr>
<tr><td>6</td><td>2009</td><td>0</td><td>45</td><td></td></tr>
<tr><td>7</td><td>2015</td><td>0</td><td>42</td><td></td></tr>
<tr><td>8</td><td>2010</td><td>0</td><td>41</td><td></td></tr>
<tr><td>9</td><td>2011</td><td>0</td><td>40</td><td></td></tr>
<tr><td>10</td><td>2012</td><td>0</td><td>40</td><td></td></tr>

<tr><td colspan="5"><b>Less Win In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2008</td><td>0</td><td>32</td><td></td></tr>
<tr><td>2</td><td>2019</td><td>0</td><td>37</td><td></td></tr>
<tr><td>3</td><td>2011</td><td>0</td><td>40</td><td></td></tr>
<tr><td>4</td><td>2012</td><td>0</td><td>40</td><td></td></tr>
<tr><td>5</td><td>2010</td><td>0</td><td>41</td><td></td></tr>
<tr><td>6</td><td>2015</td><td>0</td><td>42</td><td></td></tr>
<tr><td>7</td><td>2009</td><td>0</td><td>45</td><td></td></tr>

<tr><td colspan="5"><b>Most Lost In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2019</td><td>0</td><td>45</td><td></td></tr>
<tr><td>2</td><td>2011</td><td>0</td><td>42</td><td></td></tr>
<tr><td>3</td><td>2012</td><td>0</td><td>42</td><td></td></tr>
<tr><td>4</td><td>2010</td><td>0</td><td>41</td><td></td></tr>
<tr><td>5</td><td>2015</td><td>0</td><td>40</td><td></td></tr>
<tr><td>6</td><td>2009</td><td>0</td><td>37</td><td></td></tr>
<tr><td>7</td><td>2018</td><td>0</td><td>36</td><td></td></tr>
<tr><td>8</td><td>2008</td><td>0</td><td>33</td><td></td></tr>

<tr><td colspan="5"><b>Less Lost In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2016</td><td>0</td><td>27</td><td></td></tr>
<tr><td>2</td><td>2013</td><td>0</td><td>30</td><td></td></tr>
<tr><td>3</td><td>2014</td><td>0</td><td>32</td><td></td></tr>
<tr><td>4</td><td>2008</td><td>0</td><td>33</td><td></td></tr>
<tr><td>5</td><td>2017</td><td>0</td><td>36</td><td></td></tr>
<tr><td>6</td><td>2018</td><td>0</td><td>36</td><td></td></tr>
<tr><td>7</td><td>2009</td><td>0</td><td>37</td><td></td></tr>
<tr><td>8</td><td>2015</td><td>0</td><td>40</td><td></td></tr>
<tr><td>9</td><td>2010</td><td>0</td><td>41</td><td></td></tr>
<tr><td>10</td><td>2011</td><td>0</td><td>42</td><td></td></tr>

<tr><td colspan="5"><b>Most Point In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2016</td><td>0</td><td>114</td><td></td></tr>
<tr><td>2</td><td>2013</td><td>0</td><td>109</td><td></td></tr>
<tr><td>3</td><td>2014</td><td>0</td><td>105</td><td></td></tr>
<tr><td>4</td><td>2017</td><td>0</td><td>104</td><td></td></tr>
<tr><td>5</td><td>2018</td><td>0</td><td>104</td><td></td></tr>
<tr><td>6</td><td>2009</td><td>0</td><td>96</td><td></td></tr>
<tr><td>7</td><td>2008</td><td>0</td><td>92</td><td></td></tr>
<tr><td>8</td><td>2012</td><td>0</td><td>91</td><td></td></tr>
<tr><td>9</td><td>2010</td><td>0</td><td>90</td><td></td></tr>
<tr><td>10</td><td>2011</td><td>0</td><td>86</td><td></td></tr>

<tr><td colspan="5"><b>Less Points In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2019</td><td>0</td><td>81</td><td></td></tr>
<tr><td>2</td><td>2011</td><td>0</td><td>86</td><td></td></tr>
<tr><td>3</td><td>2015</td><td>0</td><td>88</td><td></td></tr>
<tr><td>4</td><td>2010</td><td>0</td><td>90</td><td></td></tr>
<tr><td>5</td><td>2012</td><td>0</td><td>91</td><td></td></tr>
<tr><td>6</td><td>2008</td><td>0</td><td>92</td><td></td></tr>
<tr><td>7</td><td>2009</td><td>0</td><td>96</td><td></td></tr>

<tr><td colspan="5"><b>Most Win Home In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>0</td><td>0</td><td>32000</td><td></td></tr>
<tr><td>2</td><td>0</td><td>0</td><td>32000</td><td></td></tr>

<tr><td colspan="5"><b>Most Win Visitor In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>0</td><td>0</td><td>32000</td><td></td></tr>
<tr><td>2</td><td>0</td><td>0</td><td>32000</td><td></td></tr>

</table></div>
<h1 class="TeamRecordsPro_SJS"><a id="Sharks">Sharks</a></h1>
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
<br /><table class="STHSRecordTable">
<tr><td colspan="5"><b>Most Goals in 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2016</td><td>945</td><td>9</td><td></td></tr><tr><td>2</td><td>2009</td><td>906</td><td>8</td><td></td></tr><tr><td>3</td><td>2010</td><td>494</td><td>8</td><td></td></tr><tr><td>4</td><td>2013</td><td>533</td><td>8</td><td></td></tr><tr><td>5</td><td>2014</td><td>745</td><td>8</td><td></td></tr><tr><td>6</td><td>2008</td><td>141</td><td>7</td><td></td></tr><tr><td>7</td><td>2008</td><td>617</td><td>7</td><td></td></tr><tr><td>8</td><td>2008</td><td>752</td><td>7</td><td></td></tr><tr><td>9</td><td>2013</td><td>745</td><td>7</td><td></td></tr><tr><td>10</td><td>2015</td><td>30</td><td>7</td><td></td></tr>
<tr><td colspan="5"><b>Most Goals in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2008</td><td>0</td><td>291</td><td></td></tr>
<tr><td>2</td><td>2016</td><td>0</td><td>287</td><td></td></tr>
<tr><td>3</td><td>2009</td><td>0</td><td>283</td><td></td></tr>
<tr><td>4</td><td>2010</td><td>0</td><td>274</td><td></td></tr>
<tr><td>5</td><td>2013</td><td>0</td><td>256</td><td></td></tr>
<tr><td>6</td><td>2014</td><td>0</td><td>252</td><td></td></tr>
<tr><td>7</td><td>2019</td><td>0</td><td>244</td><td></td></tr>
<tr><td>8</td><td>2011</td><td>0</td><td>232</td><td></td></tr>
<tr><td>9</td><td>2012</td><td>0</td><td>225</td><td></td></tr>
<tr><td>10</td><td>2018</td><td>0</td><td>219</td><td></td></tr>

<tr><td colspan="5"><b>Less Goal in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2017</td><td>0</td><td>202</td><td></td></tr>
<tr><td>2</td><td>2018</td><td>0</td><td>219</td><td></td></tr>
<tr><td>3</td><td>2012</td><td>0</td><td>225</td><td></td></tr>
<tr><td>4</td><td>2011</td><td>0</td><td>232</td><td></td></tr>
<tr><td>5</td><td>2015</td><td>0</td><td>244</td><td></td></tr>
<tr><td>6</td><td>2019</td><td>0</td><td>244</td><td></td></tr>
<tr><td>7</td><td>2014</td><td>0</td><td>252</td><td></td></tr>
<tr><td>8</td><td>2013</td><td>0</td><td>256</td><td></td></tr>
<tr><td>9</td><td>2010</td><td>0</td><td>274</td><td></td></tr>
<tr><td>10</td><td>2009</td><td>0</td><td>283</td><td></td></tr>

<tr><td colspan="5"><b>Most Goals Against in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2011</td><td>0</td><td>243</td><td></td></tr>
<tr><td>2</td><td>2017</td><td>0</td><td>237</td><td></td></tr>
<tr><td>3</td><td>2018</td><td>0</td><td>231</td><td></td></tr>
<tr><td>4</td><td>2012</td><td>0</td><td>222</td><td></td></tr>
<tr><td>5</td><td>2010</td><td>0</td><td>221</td><td></td></tr>
<tr><td>6</td><td>2019</td><td>0</td><td>221</td><td></td></tr>
<tr><td>7</td><td>2016</td><td>0</td><td>214</td><td></td></tr>
<tr><td>8</td><td>2009</td><td>0</td><td>212</td><td></td></tr>
<tr><td>9</td><td>2015</td><td>0</td><td>206</td><td></td></tr>
<tr><td>10</td><td>2013</td><td>0</td><td>202</td><td></td></tr>

<tr><td colspan="5"><b>Less Goal Against in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2014</td><td>0</td><td>193</td><td></td></tr>
<tr><td>2</td><td>2008</td><td>0</td><td>199</td><td></td></tr>
<tr><td>3</td><td>2013</td><td>0</td><td>202</td><td></td></tr>
<tr><td>4</td><td>2015</td><td>0</td><td>206</td><td></td></tr>
<tr><td>5</td><td>2009</td><td>0</td><td>212</td><td></td></tr>
<tr><td>6</td><td>2010</td><td>0</td><td>221</td><td></td></tr>
<tr><td>7</td><td>2019</td><td>0</td><td>221</td><td></td></tr>
<tr><td>8</td><td>2012</td><td>0</td><td>222</td><td></td></tr>
<tr><td>9</td><td>2018</td><td>0</td><td>231</td><td></td></tr>
<tr><td>10</td><td>2011</td><td>0</td><td>243</td><td></td></tr>

<tr><td colspan="5"><b>Most Assists in 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2013</td><td>533</td><td>15</td><td></td></tr><tr><td>2</td><td>2016</td><td>945</td><td>15</td><td></td></tr><tr><td>3</td><td>2009</td><td>704</td><td>14</td><td></td></tr><tr><td>4</td><td>2009</td><td>906</td><td>14</td><td></td></tr><tr><td>5</td><td>2010</td><td>141</td><td>14</td><td></td></tr><tr><td>6</td><td>2010</td><td>494</td><td>14</td><td></td></tr><tr><td>7</td><td>2013</td><td>745</td><td>14</td><td></td></tr><tr><td>8</td><td>2015</td><td>498</td><td>14</td><td></td></tr><tr><td>9</td><td>2016</td><td>458</td><td>14</td><td></td></tr><tr><td>10</td><td>2008</td><td>141</td><td>13</td><td></td></tr>
<tr><td colspan="5"><b>Most Assists in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2008</td><td>0</td><td>523</td><td></td></tr>
<tr><td>2</td><td>2009</td><td>0</td><td>499</td><td></td></tr>
<tr><td>3</td><td>2016</td><td>0</td><td>497</td><td></td></tr>
<tr><td>4</td><td>2010</td><td>0</td><td>487</td><td></td></tr>
<tr><td>5</td><td>2013</td><td>0</td><td>452</td><td></td></tr>
<tr><td>6</td><td>2014</td><td>0</td><td>450</td><td></td></tr>
<tr><td>7</td><td>2019</td><td>0</td><td>417</td><td></td></tr>
<tr><td>8</td><td>2012</td><td>0</td><td>384</td><td></td></tr>
<tr><td>9</td><td>2018</td><td>0</td><td>383</td><td></td></tr>
<tr><td>10</td><td>2011</td><td>0</td><td>375</td><td></td></tr>

<tr><td colspan="5"><b>Less Assist in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2017</td><td>0</td><td>356</td><td></td></tr>
<tr><td>2</td><td>2011</td><td>0</td><td>375</td><td></td></tr>
<tr><td>3</td><td>2018</td><td>0</td><td>383</td><td></td></tr>
<tr><td>4</td><td>2012</td><td>0</td><td>384</td><td></td></tr>
<tr><td>5</td><td>2019</td><td>0</td><td>417</td><td></td></tr>
<tr><td>6</td><td>2015</td><td>0</td><td>446</td><td></td></tr>
<tr><td>7</td><td>2014</td><td>0</td><td>450</td><td></td></tr>
<tr><td>8</td><td>2013</td><td>0</td><td>452</td><td></td></tr>
<tr><td>9</td><td>2010</td><td>0</td><td>487</td><td></td></tr>
<tr><td>10</td><td>2009</td><td>0</td><td>499</td><td></td></tr>

<tr><td colspan="5"><b>Most Game Points in 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2016</td><td>945</td><td>24</td><td></td></tr><tr><td>2</td><td>2013</td><td>533</td><td>23</td><td></td></tr><tr><td>3</td><td>2009</td><td>906</td><td>22</td><td></td></tr><tr><td>4</td><td>2010</td><td>494</td><td>22</td><td></td></tr><tr><td>5</td><td>2009</td><td>704</td><td>21</td><td></td></tr><tr><td>6</td><td>2010</td><td>141</td><td>21</td><td></td></tr><tr><td>7</td><td>2013</td><td>745</td><td>21</td><td></td></tr><tr><td>8</td><td>2014</td><td>745</td><td>21</td><td></td></tr><tr><td>9</td><td>2015</td><td>498</td><td>21</td><td></td></tr><tr><td>10</td><td>2016</td><td>458</td><td>21</td><td></td></tr>
<tr><td colspan="5"><b>Most Game Points in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>0</td><td>0</td><td>32000</td><td></td></tr>
<tr><td>2</td><td>0</td><td>0</td><td>32000</td><td></td></tr>

<tr><td colspan="5"><b>Less Game Point In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2017</td><td>0</td><td>558</td><td></td></tr>
<tr><td>2</td><td>2018</td><td>0</td><td>602</td><td></td></tr>
<tr><td>3</td><td>2011</td><td>0</td><td>607</td><td></td></tr>
<tr><td>4</td><td>2012</td><td>0</td><td>609</td><td></td></tr>
<tr><td>5</td><td>2019</td><td>0</td><td>661</td><td></td></tr>
<tr><td>6</td><td>2015</td><td>0</td><td>690</td><td></td></tr>
<tr><td>7</td><td>2014</td><td>0</td><td>702</td><td></td></tr>
<tr><td>8</td><td>2013</td><td>0</td><td>708</td><td></td></tr>
<tr><td>9</td><td>2010</td><td>0</td><td>761</td><td></td></tr>
<tr><td>10</td><td>2009</td><td>0</td><td>782</td><td></td></tr>

<tr><td colspan="5"><b>Most Shots In 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2018</td><td>1057</td><td>61</td><td></td></tr><tr><td>2</td><td>2019</td><td>96</td><td>59</td><td><a href="OTHL-96.html">Game Direct Link</a></td></tr><tr><td>3</td><td>2018</td><td>507</td><td>55</td><td></td></tr><tr><td>4</td><td>2019</td><td>1058</td><td>53</td><td><a href="OTHL-1058.html">Game Direct Link</a></td></tr><tr><td>5</td><td>2019</td><td>935</td><td>52</td><td><a href="OTHL-935.html">Game Direct Link</a></td></tr><tr><td>6</td><td>2012</td><td>339</td><td>50</td><td></td></tr><tr><td>7</td><td>2009</td><td>282</td><td>49</td><td></td></tr><tr><td>8</td><td>2009</td><td>352</td><td>48</td><td></td></tr><tr><td>9</td><td>2009</td><td>906</td><td>48</td><td></td></tr><tr><td>10</td><td>2010</td><td>494</td><td>48</td><td></td></tr>
<tr><td colspan="5"><b>Most Shots In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2019</td><td>0</td><td>2744</td><td></td></tr>
<tr><td>2</td><td>2018</td><td>0</td><td>2569</td><td></td></tr>
<tr><td>3</td><td>2009</td><td>0</td><td>2535</td><td></td></tr>
<tr><td>4</td><td>2008</td><td>0</td><td>2527</td><td></td></tr>
<tr><td>5</td><td>2011</td><td>0</td><td>2482</td><td></td></tr>
<tr><td>6</td><td>2016</td><td>0</td><td>2475</td><td></td></tr>
<tr><td>7</td><td>2014</td><td>0</td><td>2427</td><td></td></tr>
<tr><td>8</td><td>2010</td><td>0</td><td>2403</td><td></td></tr>
<tr><td>9</td><td>2013</td><td>0</td><td>2332</td><td></td></tr>
<tr><td>10</td><td>2012</td><td>0</td><td>2292</td><td></td></tr>

<tr><td colspan="5"><b>Less Shots In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2015</td><td>0</td><td>2279</td><td></td></tr>
<tr><td>2</td><td>2012</td><td>0</td><td>2292</td><td></td></tr>
<tr><td>3</td><td>2013</td><td>0</td><td>2332</td><td></td></tr>
<tr><td>4</td><td>2017</td><td>0</td><td>2370</td><td></td></tr>
<tr><td>5</td><td>2010</td><td>0</td><td>2403</td><td></td></tr>
<tr><td>6</td><td>2014</td><td>0</td><td>2427</td><td></td></tr>
<tr><td>7</td><td>2011</td><td>0</td><td>2482</td><td></td></tr>
<tr><td>8</td><td>2008</td><td>0</td><td>2527</td><td></td></tr>
<tr><td>9</td><td>2009</td><td>0</td><td>2535</td><td></td></tr>

<tr><td colspan="5"><b>Most Shots Blocked In 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2019</td><td>619</td><td>20</td><td><a href="OTHL-619.html">Game Direct Link</a></td></tr><tr><td>2</td><td>2008</td><td>7</td><td>19</td><td></td></tr><tr><td>3</td><td>2013</td><td>106</td><td>19</td><td></td></tr><tr><td>4</td><td>2013</td><td>650</td><td>19</td><td></td></tr><tr><td>5</td><td>2018</td><td>367</td><td>19</td><td></td></tr><tr><td>6</td><td>2009</td><td>895</td><td>18</td><td></td></tr><tr><td>7</td><td>2012</td><td>1039</td><td>18</td><td></td></tr><tr><td>8</td><td>2013</td><td>668</td><td>18</td><td></td></tr><tr><td>9</td><td>2014</td><td>107</td><td>18</td><td></td></tr><tr><td>10</td><td>2017</td><td>1271</td><td>18</td><td></td></tr>
<tr><td colspan="5"><b>Most Shots Blocked In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>0</td><td>0</td><td>32000</td><td></td></tr>
<tr><td>2</td><td>0</td><td>0</td><td>32000</td><td></td></tr>

<tr><td colspan="5"><b>Less Shots Block In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2012</td><td>0</td><td>551</td><td></td></tr>
<tr><td>2</td><td>2016</td><td>0</td><td>574</td><td></td></tr>
<tr><td>3</td><td>2015</td><td>0</td><td>591</td><td></td></tr>
<tr><td>4</td><td>2009</td><td>0</td><td>600</td><td></td></tr>
<tr><td>5</td><td>2008</td><td>0</td><td>607</td><td></td></tr>
<tr><td>6</td><td>2013</td><td>0</td><td>614</td><td></td></tr>
<tr><td>7</td><td>2010</td><td>0</td><td>637</td><td></td></tr>
<tr><td>8</td><td>2019</td><td>0</td><td>736</td><td></td></tr>
<tr><td>9</td><td>2018</td><td>0</td><td>739</td><td></td></tr>
<tr><td>10</td><td>2011</td><td>0</td><td>780</td><td></td></tr>

<tr><td colspan="5"><b>Most Shots Against In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2017</td><td>0</td><td>2569</td><td></td></tr>
<tr><td>2</td><td>2019</td><td>0</td><td>2523</td><td></td></tr>
<tr><td>3</td><td>2018</td><td>0</td><td>2515</td><td></td></tr>
<tr><td>4</td><td>2011</td><td>0</td><td>2492</td><td></td></tr>
<tr><td>5</td><td>2014</td><td>0</td><td>2217</td><td></td></tr>
<tr><td>6</td><td>2012</td><td>0</td><td>2185</td><td></td></tr>
<tr><td>7</td><td>2015</td><td>0</td><td>2067</td><td></td></tr>
<tr><td>8</td><td>2008</td><td>0</td><td>2021</td><td></td></tr>
<tr><td>9</td><td>2009</td><td>0</td><td>2005</td><td></td></tr>
<tr><td>10</td><td>2013</td><td>0</td><td>1977</td><td></td></tr>

<tr><td colspan="5"><b>Less Shots Against In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2010</td><td>0</td><td>1960</td><td></td></tr>
<tr><td>2</td><td>2013</td><td>0</td><td>1977</td><td></td></tr>
<tr><td>3</td><td>2009</td><td>0</td><td>2005</td><td></td></tr>
<tr><td>4</td><td>2016</td><td>0</td><td>2008</td><td></td></tr>
<tr><td>5</td><td>2008</td><td>0</td><td>2021</td><td></td></tr>
<tr><td>6</td><td>2015</td><td>0</td><td>2067</td><td></td></tr>
<tr><td>7</td><td>2012</td><td>0</td><td>2185</td><td></td></tr>
<tr><td>8</td><td>2011</td><td>0</td><td>2492</td><td></td></tr>

<tr><td colspan="5"><b>Most Pim In 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2008</td><td>1006</td><td>74</td><td></td></tr><tr><td>2</td><td>2008</td><td>374</td><td>61</td><td></td></tr><tr><td>3</td><td>2009</td><td>569</td><td>53</td><td></td></tr><tr><td>4</td><td>2010</td><td>1230</td><td>52</td><td></td></tr><tr><td>5</td><td>2009</td><td>756</td><td>49</td><td></td></tr><tr><td>6</td><td>2013</td><td>402</td><td>44</td><td></td></tr><tr><td>7</td><td>2014</td><td>884</td><td>39</td><td></td></tr><tr><td>8</td><td>2016</td><td>662</td><td>36</td><td></td></tr><tr><td>9</td><td>2019</td><td>368</td><td>34</td><td><a href="OTHL-368.html">Game Direct Link</a></td></tr><tr><td>10</td><td>2012</td><td>902</td><td>33</td><td></td></tr>
<tr><td colspan="5"><b>Most Pim In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2010</td><td>0</td><td>1367</td><td></td></tr>
<tr><td>2</td><td>2008</td><td>0</td><td>1285</td><td></td></tr>
<tr><td>3</td><td>2009</td><td>0</td><td>1167</td><td></td></tr>
<tr><td>4</td><td>2016</td><td>0</td><td>806</td><td></td></tr>
<tr><td>5</td><td>2011</td><td>0</td><td>780</td><td></td></tr>
<tr><td>6</td><td>2014</td><td>0</td><td>780</td><td></td></tr>
<tr><td>7</td><td>2012</td><td>0</td><td>716</td><td></td></tr>
<tr><td>8</td><td>2018</td><td>0</td><td>621</td><td></td></tr>
<tr><td>9</td><td>2019</td><td>0</td><td>557</td><td></td></tr>

<tr><td colspan="5"><b>Less Pim In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2019</td><td>0</td><td>557</td><td></td></tr>
<tr><td>2</td><td>2017</td><td>0</td><td>618</td><td></td></tr>
<tr><td>3</td><td>2018</td><td>0</td><td>621</td><td></td></tr>
<tr><td>4</td><td>2015</td><td>0</td><td>632</td><td></td></tr>
<tr><td>5</td><td>2013</td><td>0</td><td>701</td><td></td></tr>
<tr><td>6</td><td>2012</td><td>0</td><td>716</td><td></td></tr>
<tr><td>7</td><td>2011</td><td>0</td><td>780</td><td></td></tr>
<tr><td>8</td><td>2014</td><td>0</td><td>780</td><td></td></tr>
<tr><td>9</td><td>2009</td><td>0</td><td>1167</td><td></td></tr>
<tr><td>10</td><td>2008</td><td>0</td><td>1285</td><td></td></tr>

<tr><td colspan="5"><b>Most Hits In 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2016</td><td>555</td><td>35</td><td></td></tr><tr><td>2</td><td>2018</td><td>523</td><td>35</td><td></td></tr><tr><td>3</td><td>2011</td><td>592</td><td>34</td><td></td></tr><tr><td>4</td><td>2018</td><td>238</td><td>34</td><td></td></tr><tr><td>5</td><td>2008</td><td>1006</td><td>33</td><td></td></tr><tr><td>6</td><td>2011</td><td>282</td><td>33</td><td></td></tr><tr><td>7</td><td>2011</td><td>973</td><td>32</td><td></td></tr><tr><td>8</td><td>2011</td><td>995</td><td>32</td><td></td></tr><tr><td>9</td><td>2013</td><td>889</td><td>32</td><td></td></tr><tr><td>10</td><td>2016</td><td>83</td><td>32</td><td></td></tr>
<tr><td colspan="5"><b>Most Hits In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2011</td><td>0</td><td>1976</td><td></td></tr>
<tr><td>2</td><td>2017</td><td>0</td><td>1627</td><td></td></tr>
<tr><td>3</td><td>2018</td><td>0</td><td>1605</td><td></td></tr>
<tr><td>4</td><td>2016</td><td>0</td><td>1596</td><td></td></tr>
<tr><td>5</td><td>2019</td><td>0</td><td>1594</td><td></td></tr>
<tr><td>6</td><td>2012</td><td>0</td><td>1580</td><td></td></tr>
<tr><td>7</td><td>2010</td><td>0</td><td>1576</td><td></td></tr>
<tr><td>8</td><td>2013</td><td>0</td><td>1561</td><td></td></tr>
<tr><td>9</td><td>2008</td><td>0</td><td>1554</td><td></td></tr>
<tr><td>10</td><td>2009</td><td>0</td><td>1400</td><td></td></tr>

<tr><td colspan="5"><b>Less Hit In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2009</td><td>0</td><td>1400</td><td></td></tr>
<tr><td>2</td><td>2015</td><td>0</td><td>1460</td><td></td></tr>
<tr><td>3</td><td>2014</td><td>0</td><td>1545</td><td></td></tr>
<tr><td>4</td><td>2008</td><td>0</td><td>1554</td><td></td></tr>
<tr><td>5</td><td>2013</td><td>0</td><td>1561</td><td></td></tr>
<tr><td>6</td><td>2010</td><td>0</td><td>1576</td><td></td></tr>
<tr><td>7</td><td>2012</td><td>0</td><td>1580</td><td></td></tr>
<tr><td>8</td><td>2019</td><td>0</td><td>1594</td><td></td></tr>
<tr><td>9</td><td>2018</td><td>0</td><td>1605</td><td></td></tr>
<tr><td>10</td><td>2011</td><td>0</td><td>1976</td><td></td></tr>

<tr><td colspan="5"><b>Most Empty Net Goal In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2018</td><td>0</td><td>5</td><td></td></tr>
<tr><td>2</td><td>2011</td><td>0</td><td>3</td><td></td></tr>
<tr><td>3</td><td>2015</td><td>0</td><td>3</td><td></td></tr>
<tr><td>4</td><td>2009</td><td>0</td><td>2</td><td></td></tr>
<tr><td>5</td><td>2013</td><td>0</td><td>2</td><td></td></tr>
<tr><td>6</td><td>2016</td><td>0</td><td>2</td><td></td></tr>
<tr><td>7</td><td>2019</td><td>0</td><td>2</td><td></td></tr>
<tr><td>8</td><td>2008</td><td>0</td><td>1</td><td></td></tr>

<tr><td colspan="5"><b>Best PP In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2011</td><td>0</td><td>21.60%</td><td></td></tr>
<tr><td>2</td><td>2016</td><td>0</td><td>21.60%</td><td></td></tr>
<tr><td>3</td><td>2010</td><td>0</td><td>20.10%</td><td></td></tr>
<tr><td>4</td><td>2014</td><td>0</td><td>20.10%</td><td></td></tr>
<tr><td>5</td><td>2019</td><td>0</td><td>19.70%</td><td></td></tr>
<tr><td>6</td><td>2008</td><td>0</td><td>19.50%</td><td></td></tr>
<tr><td>7</td><td>2013</td><td>0</td><td>19.40%</td><td></td></tr>
<tr><td>8</td><td>2018</td><td>0</td><td>18.90%</td><td></td></tr>
<tr><td>9</td><td>2009</td><td>0</td><td>17.50%</td><td></td></tr>
<tr><td>10</td><td>2012</td><td>0</td><td>15.30%</td><td></td></tr>

<tr><td colspan="5"><b>Best PK In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2014</td><td>0</td><td>86.90%</td><td></td></tr>
<tr><td>2</td><td>2015</td><td>0</td><td>86.40%</td><td></td></tr>
<tr><td>3</td><td>2013</td><td>0</td><td>86.30%</td><td></td></tr>
<tr><td>4</td><td>2008</td><td>0</td><td>85.10%</td><td></td></tr>
<tr><td>5</td><td>2012</td><td>0</td><td>84.80%</td><td></td></tr>
<tr><td>6</td><td>2010</td><td>0</td><td>84.50%</td><td></td></tr>
<tr><td>7</td><td>2018</td><td>0</td><td>83.70%</td><td></td></tr>
<tr><td>8</td><td>2009</td><td>0</td><td>82.00%</td><td></td></tr>
<tr><td>9</td><td>2019</td><td>0</td><td>79.60%</td><td></td></tr>
<tr><td>10</td><td>2011</td><td>0</td><td>79.40%</td><td></td></tr>

<tr><td colspan="5"><b>Worse PP In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2012</td><td>0</td><td>15.30%</td><td></td></tr>
<tr><td>2</td><td>2015</td><td>0</td><td>16.70%</td><td></td></tr>
<tr><td>3</td><td>2017</td><td>0</td><td>16.90%</td><td></td></tr>
<tr><td>4</td><td>2009</td><td>0</td><td>17.50%</td><td></td></tr>
<tr><td>5</td><td>2018</td><td>0</td><td>18.90%</td><td></td></tr>
<tr><td>6</td><td>2013</td><td>0</td><td>19.40%</td><td></td></tr>
<tr><td>7</td><td>2008</td><td>0</td><td>19.50%</td><td></td></tr>
<tr><td>8</td><td>2019</td><td>0</td><td>19.70%</td><td></td></tr>
<tr><td>9</td><td>2010</td><td>0</td><td>20.10%</td><td></td></tr>
<tr><td>10</td><td>2011</td><td>0</td><td>21.60%</td><td></td></tr>

<tr><td colspan="5"><b>Worse PK In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2011</td><td>0</td><td>79.40%</td><td></td></tr>
<tr><td>2</td><td>2019</td><td>0</td><td>79.60%</td><td></td></tr>
<tr><td>3</td><td>2009</td><td>0</td><td>82.00%</td><td></td></tr>
<tr><td>4</td><td>2017</td><td>0</td><td>82.70%</td><td></td></tr>
<tr><td>5</td><td>2016</td><td>0</td><td>83.30%</td><td></td></tr>
<tr><td>6</td><td>2018</td><td>0</td><td>83.70%</td><td></td></tr>
<tr><td>7</td><td>2010</td><td>0</td><td>84.50%</td><td></td></tr>
<tr><td>8</td><td>2012</td><td>0</td><td>84.80%</td><td></td></tr>
<tr><td>9</td><td>2008</td><td>0</td><td>85.10%</td><td></td></tr>

<tr><td colspan="5"><b>Most Win In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2008</td><td>0</td><td>53</td><td></td></tr>
<tr><td>2</td><td>2009</td><td>0</td><td>52</td><td></td></tr>
<tr><td>3</td><td>2010</td><td>0</td><td>51</td><td></td></tr>
<tr><td>4</td><td>2013</td><td>0</td><td>51</td><td></td></tr>
<tr><td>5</td><td>2016</td><td>0</td><td>50</td><td></td></tr>
<tr><td>6</td><td>2014</td><td>0</td><td>48</td><td></td></tr>
<tr><td>7</td><td>2019</td><td>0</td><td>45</td><td></td></tr>
<tr><td>8</td><td>2012</td><td>0</td><td>41</td><td></td></tr>
<tr><td>9</td><td>2018</td><td>0</td><td>39</td><td></td></tr>
<tr><td>10</td><td>2011</td><td>0</td><td>38</td><td></td></tr>

<tr><td colspan="5"><b>Less Win In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2017</td><td>0</td><td>36</td><td></td></tr>
<tr><td>2</td><td>2011</td><td>0</td><td>38</td><td></td></tr>
<tr><td>3</td><td>2018</td><td>0</td><td>39</td><td></td></tr>
<tr><td>4</td><td>2012</td><td>0</td><td>41</td><td></td></tr>
<tr><td>5</td><td>2019</td><td>0</td><td>45</td><td></td></tr>
<tr><td>6</td><td>2015</td><td>0</td><td>47</td><td></td></tr>
<tr><td>7</td><td>2014</td><td>0</td><td>48</td><td></td></tr>
<tr><td>8</td><td>2016</td><td>0</td><td>50</td><td></td></tr>
<tr><td>9</td><td>2010</td><td>0</td><td>51</td><td></td></tr>
<tr><td>10</td><td>2013</td><td>0</td><td>51</td><td></td></tr>

<tr><td colspan="5"><b>Most Lost In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2017</td><td>0</td><td>46</td><td></td></tr>
<tr><td>2</td><td>2011</td><td>0</td><td>44</td><td></td></tr>
<tr><td>3</td><td>2018</td><td>0</td><td>43</td><td></td></tr>
<tr><td>4</td><td>2012</td><td>0</td><td>41</td><td></td></tr>
<tr><td>5</td><td>2019</td><td>0</td><td>37</td><td></td></tr>
<tr><td>6</td><td>2015</td><td>0</td><td>35</td><td></td></tr>
<tr><td>7</td><td>2014</td><td>0</td><td>34</td><td></td></tr>
<tr><td>8</td><td>2016</td><td>0</td><td>32</td><td></td></tr>
<tr><td>9</td><td>2010</td><td>0</td><td>31</td><td></td></tr>
<tr><td>10</td><td>2013</td><td>0</td><td>31</td><td></td></tr>

<tr><td colspan="5"><b>Less Lost In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2008</td><td>0</td><td>18</td><td></td></tr>
<tr><td>2</td><td>2009</td><td>0</td><td>30</td><td></td></tr>
<tr><td>3</td><td>2010</td><td>0</td><td>31</td><td></td></tr>
<tr><td>4</td><td>2013</td><td>0</td><td>31</td><td></td></tr>
<tr><td>5</td><td>2016</td><td>0</td><td>32</td><td></td></tr>
<tr><td>6</td><td>2014</td><td>0</td><td>34</td><td></td></tr>
<tr><td>7</td><td>2019</td><td>0</td><td>37</td><td></td></tr>
<tr><td>8</td><td>2012</td><td>0</td><td>41</td><td></td></tr>
<tr><td>9</td><td>2018</td><td>0</td><td>43</td><td></td></tr>
<tr><td>10</td><td>2011</td><td>0</td><td>44</td><td></td></tr>

<tr><td colspan="5"><b>Most Point In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2008</td><td>0</td><td>122</td><td></td></tr>
<tr><td>2</td><td>2009</td><td>0</td><td>109</td><td></td></tr>
<tr><td>3</td><td>2010</td><td>0</td><td>108</td><td></td></tr>
<tr><td>4</td><td>2013</td><td>0</td><td>107</td><td></td></tr>
<tr><td>5</td><td>2016</td><td>0</td><td>107</td><td></td></tr>
<tr><td>6</td><td>2014</td><td>0</td><td>101</td><td></td></tr>
<tr><td>7</td><td>2019</td><td>0</td><td>99</td><td></td></tr>
<tr><td>8</td><td>2012</td><td>0</td><td>91</td><td></td></tr>
<tr><td>9</td><td>2018</td><td>0</td><td>87</td><td></td></tr>
<tr><td>10</td><td>2011</td><td>0</td><td>82</td><td></td></tr>

<tr><td colspan="5"><b>Less Points In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2017</td><td>0</td><td>79</td><td></td></tr>
<tr><td>2</td><td>2011</td><td>0</td><td>82</td><td></td></tr>
<tr><td>3</td><td>2018</td><td>0</td><td>87</td><td></td></tr>
<tr><td>4</td><td>2012</td><td>0</td><td>91</td><td></td></tr>
<tr><td>5</td><td>2019</td><td>0</td><td>99</td><td></td></tr>
<tr><td>6</td><td>2015</td><td>0</td><td>100</td><td></td></tr>
<tr><td>7</td><td>2014</td><td>0</td><td>101</td><td></td></tr>
<tr><td>8</td><td>2013</td><td>0</td><td>107</td><td></td></tr>
<tr><td>9</td><td>2010</td><td>0</td><td>108</td><td></td></tr>
<tr><td>10</td><td>2009</td><td>0</td><td>109</td><td></td></tr>

<tr><td colspan="5"><b>Most Win Home In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>0</td><td>0</td><td>32000</td><td></td></tr>
<tr><td>2</td><td>0</td><td>0</td><td>32000</td><td></td></tr>

<tr><td colspan="5"><b>Most Win Visitor In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>0</td><td>0</td><td>32000</td><td></td></tr>
<tr><td>2</td><td>0</td><td>0</td><td>32000</td><td></td></tr>

</table></div>
<h1 class="TeamRecordsPro_DAL"><a id="Stars">Stars</a></h1>
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
<br /><table class="STHSRecordTable">
<tr><td colspan="5"><b>Most Goals in 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2012</td><td>1145</td><td>10</td><td></td></tr><tr><td>2</td><td>2014</td><td>1227</td><td>10</td><td></td></tr><tr><td>3</td><td>2012</td><td>1024</td><td>9</td><td></td></tr><tr><td>4</td><td>2015</td><td>521</td><td>9</td><td></td></tr><tr><td>5</td><td>2009</td><td>858</td><td>8</td><td></td></tr><tr><td>6</td><td>2010</td><td>298</td><td>8</td><td></td></tr><tr><td>7</td><td>2011</td><td>628</td><td>8</td><td></td></tr><tr><td>8</td><td>2012</td><td>1043</td><td>8</td><td></td></tr><tr><td>9</td><td>2015</td><td>573</td><td>8</td><td></td></tr><tr><td>10</td><td>2016</td><td>760</td><td>8</td><td></td></tr>
<tr><td colspan="5"><b>Most Goals in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2012</td><td>0</td><td>297</td><td></td></tr>
<tr><td>2</td><td>2014</td><td>0</td><td>297</td><td></td></tr>
<tr><td>3</td><td>2016</td><td>0</td><td>275</td><td></td></tr>
<tr><td>4</td><td>2009</td><td>0</td><td>270</td><td></td></tr>
<tr><td>5</td><td>2017</td><td>0</td><td>266</td><td></td></tr>
<tr><td>6</td><td>2015</td><td>0</td><td>252</td><td></td></tr>
<tr><td>7</td><td>2019</td><td>0</td><td>251</td><td></td></tr>
<tr><td>8</td><td>2018</td><td>0</td><td>250</td><td></td></tr>
<tr><td>9</td><td>2010</td><td>0</td><td>248</td><td></td></tr>
<tr><td>10</td><td>2013</td><td>0</td><td>238</td><td></td></tr>

<tr><td colspan="5"><b>Less Goal in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2008</td><td>0</td><td>222</td><td></td></tr>
<tr><td>2</td><td>2011</td><td>0</td><td>235</td><td></td></tr>
<tr><td>3</td><td>2013</td><td>0</td><td>238</td><td></td></tr>
<tr><td>4</td><td>2010</td><td>0</td><td>248</td><td></td></tr>
<tr><td>5</td><td>2018</td><td>0</td><td>250</td><td></td></tr>
<tr><td>6</td><td>2019</td><td>0</td><td>251</td><td></td></tr>
<tr><td>7</td><td>2015</td><td>0</td><td>252</td><td></td></tr>
<tr><td>8</td><td>2009</td><td>0</td><td>270</td><td></td></tr>
<tr><td>9</td><td>2012</td><td>0</td><td>297</td><td></td></tr>

<tr><td colspan="5"><b>Most Goals Against in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2019</td><td>0</td><td>285</td><td></td></tr>
<tr><td>2</td><td>2009</td><td>0</td><td>251</td><td></td></tr>
<tr><td>3</td><td>2016</td><td>0</td><td>241</td><td></td></tr>
<tr><td>4</td><td>2008</td><td>0</td><td>236</td><td></td></tr>
<tr><td>5</td><td>2010</td><td>0</td><td>230</td><td></td></tr>
<tr><td>6</td><td>2012</td><td>0</td><td>225</td><td></td></tr>
<tr><td>7</td><td>2015</td><td>0</td><td>225</td><td></td></tr>
<tr><td>8</td><td>2018</td><td>0</td><td>216</td><td></td></tr>
<tr><td>9</td><td>2014</td><td>0</td><td>213</td><td></td></tr>
<tr><td>10</td><td>2011</td><td>0</td><td>207</td><td></td></tr>

<tr><td colspan="5"><b>Less Goal Against in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2013</td><td>0</td><td>192</td><td></td></tr>
<tr><td>2</td><td>2011</td><td>0</td><td>207</td><td></td></tr>
<tr><td>3</td><td>2017</td><td>0</td><td>208</td><td></td></tr>
<tr><td>4</td><td>2014</td><td>0</td><td>213</td><td></td></tr>
<tr><td>5</td><td>2018</td><td>0</td><td>216</td><td></td></tr>
<tr><td>6</td><td>2012</td><td>0</td><td>225</td><td></td></tr>
<tr><td>7</td><td>2015</td><td>0</td><td>225</td><td></td></tr>
<tr><td>8</td><td>2010</td><td>0</td><td>230</td><td></td></tr>
<tr><td>9</td><td>2008</td><td>0</td><td>236</td><td></td></tr>
<tr><td>10</td><td>2009</td><td>0</td><td>251</td><td></td></tr>

<tr><td colspan="5"><b>Most Assists in 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2014</td><td>1227</td><td>18</td><td></td></tr><tr><td>2</td><td>2015</td><td>521</td><td>16</td><td></td></tr><tr><td>3</td><td>2009</td><td>858</td><td>15</td><td></td></tr><tr><td>4</td><td>2012</td><td>1024</td><td>15</td><td></td></tr><tr><td>5</td><td>2012</td><td>1145</td><td>15</td><td></td></tr><tr><td>6</td><td>2009</td><td>1172</td><td>14</td><td></td></tr><tr><td>7</td><td>2010</td><td>1097</td><td>14</td><td></td></tr><tr><td>8</td><td>2011</td><td>628</td><td>14</td><td></td></tr><tr><td>9</td><td>2012</td><td>1043</td><td>14</td><td></td></tr><tr><td>10</td><td>2014</td><td>230</td><td>14</td><td></td></tr>
<tr><td colspan="5"><b>Most Assists in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2014</td><td>0</td><td>526</td><td></td></tr>
<tr><td>2</td><td>2012</td><td>0</td><td>518</td><td></td></tr>
<tr><td>3</td><td>2009</td><td>0</td><td>489</td><td></td></tr>
<tr><td>4</td><td>2016</td><td>0</td><td>479</td><td></td></tr>
<tr><td>5</td><td>2017</td><td>0</td><td>471</td><td></td></tr>
<tr><td>6</td><td>2010</td><td>0</td><td>451</td><td></td></tr>
<tr><td>7</td><td>2015</td><td>0</td><td>443</td><td></td></tr>
<tr><td>8</td><td>2019</td><td>0</td><td>442</td><td></td></tr>
<tr><td>9</td><td>2018</td><td>0</td><td>439</td><td></td></tr>
<tr><td>10</td><td>2013</td><td>0</td><td>413</td><td></td></tr>

<tr><td colspan="5"><b>Less Assist in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2011</td><td>0</td><td>371</td><td></td></tr>
<tr><td>2</td><td>2008</td><td>0</td><td>395</td><td></td></tr>
<tr><td>3</td><td>2013</td><td>0</td><td>413</td><td></td></tr>
<tr><td>4</td><td>2018</td><td>0</td><td>439</td><td></td></tr>
<tr><td>5</td><td>2019</td><td>0</td><td>442</td><td></td></tr>
<tr><td>6</td><td>2015</td><td>0</td><td>443</td><td></td></tr>
<tr><td>7</td><td>2010</td><td>0</td><td>451</td><td></td></tr>
<tr><td>8</td><td>2009</td><td>0</td><td>489</td><td></td></tr>
<tr><td>9</td><td>2012</td><td>0</td><td>518</td><td></td></tr>

<tr><td colspan="5"><b>Most Game Points in 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2014</td><td>1227</td><td>28</td><td></td></tr><tr><td>2</td><td>2012</td><td>1145</td><td>25</td><td></td></tr><tr><td>3</td><td>2015</td><td>521</td><td>25</td><td></td></tr><tr><td>4</td><td>2012</td><td>1024</td><td>24</td><td></td></tr><tr><td>5</td><td>2009</td><td>858</td><td>23</td><td></td></tr><tr><td>6</td><td>2011</td><td>628</td><td>22</td><td></td></tr><tr><td>7</td><td>2012</td><td>1043</td><td>22</td><td></td></tr><tr><td>8</td><td>2009</td><td>1172</td><td>21</td><td></td></tr><tr><td>9</td><td>2010</td><td>298</td><td>21</td><td></td></tr><tr><td>10</td><td>2010</td><td>1097</td><td>21</td><td></td></tr>
<tr><td colspan="5"><b>Most Game Points in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>0</td><td>0</td><td>32000</td><td></td></tr>
<tr><td>2</td><td>0</td><td>0</td><td>32000</td><td></td></tr>

<tr><td colspan="5"><b>Less Game Point In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2011</td><td>0</td><td>606</td><td></td></tr>
<tr><td>2</td><td>2008</td><td>0</td><td>617</td><td></td></tr>
<tr><td>3</td><td>2013</td><td>0</td><td>651</td><td></td></tr>
<tr><td>4</td><td>2018</td><td>0</td><td>689</td><td></td></tr>
<tr><td>5</td><td>2019</td><td>0</td><td>693</td><td></td></tr>
<tr><td>6</td><td>2015</td><td>0</td><td>695</td><td></td></tr>
<tr><td>7</td><td>2010</td><td>0</td><td>699</td><td></td></tr>
<tr><td>8</td><td>2009</td><td>0</td><td>759</td><td></td></tr>
<tr><td>9</td><td>2012</td><td>0</td><td>815</td><td></td></tr>

<tr><td colspan="5"><b>Most Shots In 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2012</td><td>741</td><td>58</td><td></td></tr><tr><td>2</td><td>2017</td><td>535</td><td>58</td><td></td></tr><tr><td>3</td><td>2019</td><td>8</td><td>58</td><td><a href="OTHL-8.html">Game Direct Link</a></td></tr><tr><td>4</td><td>2018</td><td>1124</td><td>56</td><td></td></tr><tr><td>5</td><td>2017</td><td>452</td><td>54</td><td></td></tr><tr><td>6</td><td>2012</td><td>1204</td><td>53</td><td></td></tr><tr><td>7</td><td>2014</td><td>1227</td><td>53</td><td></td></tr><tr><td>8</td><td>2015</td><td>211</td><td>52</td><td></td></tr><tr><td>9</td><td>2015</td><td>544</td><td>52</td><td></td></tr><tr><td>10</td><td>2018</td><td>929</td><td>52</td><td></td></tr>
<tr><td colspan="5"><b>Most Shots In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2017</td><td>0</td><td>2952</td><td></td></tr>
<tr><td>2</td><td>2018</td><td>0</td><td>2916</td><td></td></tr>
<tr><td>3</td><td>2012</td><td>0</td><td>2742</td><td></td></tr>
<tr><td>4</td><td>2019</td><td>0</td><td>2740</td><td></td></tr>
<tr><td>5</td><td>2015</td><td>0</td><td>2719</td><td></td></tr>
<tr><td>6</td><td>2014</td><td>0</td><td>2666</td><td></td></tr>
<tr><td>7</td><td>2016</td><td>0</td><td>2485</td><td></td></tr>
<tr><td>8</td><td>2011</td><td>0</td><td>2390</td><td></td></tr>
<tr><td>9</td><td>2010</td><td>0</td><td>2257</td><td></td></tr>
<tr><td>10</td><td>2013</td><td>0</td><td>2251</td><td></td></tr>

<tr><td colspan="5"><b>Less Shots In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2008</td><td>0</td><td>2019</td><td></td></tr>
<tr><td>2</td><td>2009</td><td>0</td><td>2227</td><td></td></tr>
<tr><td>3</td><td>2013</td><td>0</td><td>2251</td><td></td></tr>
<tr><td>4</td><td>2010</td><td>0</td><td>2257</td><td></td></tr>
<tr><td>5</td><td>2011</td><td>0</td><td>2390</td><td></td></tr>
<tr><td>6</td><td>2019</td><td>0</td><td>2740</td><td></td></tr>
<tr><td>7</td><td>2012</td><td>0</td><td>2742</td><td></td></tr>

<tr><td colspan="5"><b>Most Shots Blocked In 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2019</td><td>474</td><td>24</td><td><a href="OTHL-474.html">Game Direct Link</a></td></tr><tr><td>2</td><td>2011</td><td>566</td><td>23</td><td></td></tr><tr><td>3</td><td>2017</td><td>1150</td><td>21</td><td></td></tr><tr><td>4</td><td>2011</td><td>761</td><td>19</td><td></td></tr><tr><td>5</td><td>2018</td><td>347</td><td>19</td><td></td></tr><tr><td>6</td><td>2015</td><td>132</td><td>18</td><td></td></tr><tr><td>7</td><td>2019</td><td>984</td><td>18</td><td><a href="OTHL-984.html">Game Direct Link</a></td></tr><tr><td>8</td><td>2008</td><td>117</td><td>17</td><td></td></tr><tr><td>9</td><td>2009</td><td>505</td><td>17</td><td></td></tr><tr><td>10</td><td>2011</td><td>496</td><td>17</td><td></td></tr>
<tr><td colspan="5"><b>Most Shots Blocked In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>0</td><td>0</td><td>32000</td><td></td></tr>
<tr><td>2</td><td>0</td><td>0</td><td>32000</td><td></td></tr>

<tr><td colspan="5"><b>Less Shots Block In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2013</td><td>0</td><td>573</td><td></td></tr>
<tr><td>2</td><td>2012</td><td>0</td><td>574</td><td></td></tr>
<tr><td>3</td><td>2010</td><td>0</td><td>577</td><td></td></tr>
<tr><td>4</td><td>2009</td><td>0</td><td>607</td><td></td></tr>
<tr><td>5</td><td>2016</td><td>0</td><td>621</td><td></td></tr>
<tr><td>6</td><td>2015</td><td>0</td><td>630</td><td></td></tr>
<tr><td>7</td><td>2014</td><td>0</td><td>634</td><td></td></tr>
<tr><td>8</td><td>2008</td><td>0</td><td>636</td><td></td></tr>
<tr><td>9</td><td>2018</td><td>0</td><td>768</td><td></td></tr>
<tr><td>10</td><td>2019</td><td>0</td><td>800</td><td></td></tr>

<tr><td colspan="5"><b>Most Shots Against In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2019</td><td>0</td><td>2724</td><td></td></tr>
<tr><td>2</td><td>2018</td><td>0</td><td>2669</td><td></td></tr>
<tr><td>3</td><td>2011</td><td>0</td><td>2396</td><td></td></tr>
<tr><td>4</td><td>2017</td><td>0</td><td>2312</td><td></td></tr>
<tr><td>5</td><td>2008</td><td>0</td><td>2263</td><td></td></tr>
<tr><td>6</td><td>2009</td><td>0</td><td>2175</td><td></td></tr>
<tr><td>7</td><td>2016</td><td>0</td><td>2173</td><td></td></tr>
<tr><td>8</td><td>2012</td><td>0</td><td>2143</td><td></td></tr>
<tr><td>9</td><td>2015</td><td>0</td><td>2130</td><td></td></tr>
<tr><td>10</td><td>2014</td><td>0</td><td>2066</td><td></td></tr>

<tr><td colspan="5"><b>Less Shots Against In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2010</td><td>0</td><td>1973</td><td></td></tr>
<tr><td>2</td><td>2013</td><td>0</td><td>2057</td><td></td></tr>
<tr><td>3</td><td>2014</td><td>0</td><td>2066</td><td></td></tr>
<tr><td>4</td><td>2015</td><td>0</td><td>2130</td><td></td></tr>
<tr><td>5</td><td>2012</td><td>0</td><td>2143</td><td></td></tr>
<tr><td>6</td><td>2009</td><td>0</td><td>2175</td><td></td></tr>
<tr><td>7</td><td>2008</td><td>0</td><td>2263</td><td></td></tr>
<tr><td>8</td><td>2011</td><td>0</td><td>2396</td><td></td></tr>

<tr><td colspan="5"><b>Most Pim In 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2009</td><td>63</td><td>40</td><td></td></tr><tr><td>2</td><td>2010</td><td>9</td><td>39</td><td></td></tr><tr><td>3</td><td>2010</td><td>272</td><td>39</td><td></td></tr><tr><td>4</td><td>2010</td><td>534</td><td>39</td><td></td></tr><tr><td>5</td><td>2011</td><td>628</td><td>37</td><td></td></tr><tr><td>6</td><td>2012</td><td>537</td><td>34</td><td></td></tr><tr><td>7</td><td>2008</td><td>296</td><td>33</td><td></td></tr><tr><td>8</td><td>2018</td><td>987</td><td>33</td><td></td></tr><tr><td>9</td><td>2014</td><td>230</td><td>32</td><td></td></tr><tr><td>10</td><td>2011</td><td>794</td><td>31</td><td></td></tr>
<tr><td colspan="5"><b>Most Pim In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2010</td><td>0</td><td>1132</td><td></td></tr>
<tr><td>2</td><td>2008</td><td>0</td><td>1101</td><td></td></tr>
<tr><td>3</td><td>2009</td><td>0</td><td>1098</td><td></td></tr>
<tr><td>4</td><td>2011</td><td>0</td><td>977</td><td></td></tr>
<tr><td>5</td><td>2016</td><td>0</td><td>781</td><td></td></tr>
<tr><td>6</td><td>2019</td><td>0</td><td>764</td><td></td></tr>
<tr><td>7</td><td>2015</td><td>0</td><td>698</td><td></td></tr>
<tr><td>8</td><td>2012</td><td>0</td><td>687</td><td></td></tr>
<tr><td>9</td><td>2018</td><td>0</td><td>635</td><td></td></tr>

<tr><td colspan="5"><b>Less Pim In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2017</td><td>0</td><td>545</td><td></td></tr>
<tr><td>2</td><td>2013</td><td>0</td><td>626</td><td></td></tr>
<tr><td>3</td><td>2018</td><td>0</td><td>635</td><td></td></tr>
<tr><td>4</td><td>2014</td><td>0</td><td>641</td><td></td></tr>
<tr><td>5</td><td>2012</td><td>0</td><td>687</td><td></td></tr>
<tr><td>6</td><td>2015</td><td>0</td><td>698</td><td></td></tr>
<tr><td>7</td><td>2019</td><td>0</td><td>764</td><td></td></tr>
<tr><td>8</td><td>2016</td><td>0</td><td>781</td><td></td></tr>
<tr><td>9</td><td>2011</td><td>0</td><td>977</td><td></td></tr>
<tr><td>10</td><td>2009</td><td>0</td><td>1098</td><td></td></tr>

<tr><td colspan="5"><b>Most Hits In 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2011</td><td>309</td><td>41</td><td></td></tr><tr><td>2</td><td>2013</td><td>308</td><td>37</td><td></td></tr><tr><td>3</td><td>2016</td><td>225</td><td>36</td><td></td></tr><tr><td>4</td><td>2016</td><td>293</td><td>36</td><td></td></tr><tr><td>5</td><td>2011</td><td>628</td><td>33</td><td></td></tr><tr><td>6</td><td>2013</td><td>743</td><td>33</td><td></td></tr><tr><td>7</td><td>2016</td><td>43</td><td>33</td><td></td></tr><tr><td>8</td><td>2011</td><td>133</td><td>32</td><td></td></tr><tr><td>9</td><td>2011</td><td>296</td><td>32</td><td></td></tr><tr><td>10</td><td>2011</td><td>1210</td><td>32</td><td></td></tr>
<tr><td colspan="5"><b>Most Hits In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2011</td><td>0</td><td>1793</td><td></td></tr>
<tr><td>2</td><td>2018</td><td>0</td><td>1753</td><td></td></tr>
<tr><td>3</td><td>2019</td><td>0</td><td>1683</td><td></td></tr>
<tr><td>4</td><td>2016</td><td>0</td><td>1664</td><td></td></tr>
<tr><td>5</td><td>2012</td><td>0</td><td>1600</td><td></td></tr>
<tr><td>6</td><td>2017</td><td>0</td><td>1594</td><td></td></tr>
<tr><td>7</td><td>2010</td><td>0</td><td>1552</td><td></td></tr>
<tr><td>8</td><td>2014</td><td>0</td><td>1551</td><td></td></tr>
<tr><td>9</td><td>2015</td><td>0</td><td>1533</td><td></td></tr>
<tr><td>10</td><td>2013</td><td>0</td><td>1520</td><td></td></tr>

<tr><td colspan="5"><b>Less Hit In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2009</td><td>0</td><td>1445</td><td></td></tr>
<tr><td>2</td><td>2008</td><td>0</td><td>1458</td><td></td></tr>
<tr><td>3</td><td>2013</td><td>0</td><td>1520</td><td></td></tr>
<tr><td>4</td><td>2015</td><td>0</td><td>1533</td><td></td></tr>
<tr><td>5</td><td>2014</td><td>0</td><td>1551</td><td></td></tr>
<tr><td>6</td><td>2010</td><td>0</td><td>1552</td><td></td></tr>
<tr><td>7</td><td>2012</td><td>0</td><td>1600</td><td></td></tr>
<tr><td>8</td><td>2019</td><td>0</td><td>1683</td><td></td></tr>
<tr><td>9</td><td>2018</td><td>0</td><td>1753</td><td></td></tr>
<tr><td>10</td><td>2011</td><td>0</td><td>1793</td><td></td></tr>

<tr><td colspan="5"><b>Most Empty Net Goal In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2017</td><td>0</td><td>5</td><td></td></tr>
<tr><td>2</td><td>2019</td><td>0</td><td>5</td><td></td></tr>
<tr><td>3</td><td>2008</td><td>0</td><td>4</td><td></td></tr>
<tr><td>4</td><td>2018</td><td>0</td><td>4</td><td></td></tr>
<tr><td>5</td><td>2013</td><td>0</td><td>3</td><td></td></tr>
<tr><td>6</td><td>2009</td><td>0</td><td>2</td><td></td></tr>
<tr><td>7</td><td>2011</td><td>0</td><td>2</td><td></td></tr>
<tr><td>8</td><td>2015</td><td>0</td><td>2</td><td></td></tr>
<tr><td>9</td><td>2010</td><td>0</td><td>1</td><td></td></tr>
<tr><td>10</td><td>2012</td><td>0</td><td>1</td><td></td></tr>

<tr><td colspan="5"><b>Best PP In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2012</td><td>0</td><td>25.90%</td><td></td></tr>
<tr><td>2</td><td>2009</td><td>0</td><td>22.50%</td><td></td></tr>
<tr><td>3</td><td>2014</td><td>0</td><td>21.10%</td><td></td></tr>
<tr><td>4</td><td>2019</td><td>0</td><td>20.80%</td><td></td></tr>
<tr><td>5</td><td>2017</td><td>0</td><td>19.90%</td><td></td></tr>
<tr><td>6</td><td>2011</td><td>0</td><td>18.80%</td><td></td></tr>
<tr><td>7</td><td>2013</td><td>0</td><td>18.60%</td><td></td></tr>
<tr><td>8</td><td>2010</td><td>0</td><td>17.90%</td><td></td></tr>
<tr><td>9</td><td>2018</td><td>0</td><td>17.40%</td><td></td></tr>
<tr><td>10</td><td>2008</td><td>0</td><td>15.10%</td><td></td></tr>

<tr><td colspan="5"><b>Best PK In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2012</td><td>0</td><td>87.20%</td><td></td></tr>
<tr><td>2</td><td>2014</td><td>0</td><td>85.10%</td><td></td></tr>
<tr><td>3</td><td>2008</td><td>0</td><td>84.20%</td><td></td></tr>
<tr><td>4</td><td>2013</td><td>0</td><td>84.20%</td><td></td></tr>
<tr><td>5</td><td>2011</td><td>0</td><td>84.00%</td><td></td></tr>
<tr><td>6</td><td>2009</td><td>0</td><td>83.30%</td><td></td></tr>
<tr><td>7</td><td>2010</td><td>0</td><td>83.00%</td><td></td></tr>
<tr><td>8</td><td>2018</td><td>0</td><td>81.90%</td><td></td></tr>
<tr><td>9</td><td>2019</td><td>0</td><td>76.40%</td><td></td></tr>

<tr><td colspan="5"><b>Worse PP In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2008</td><td>0</td><td>15.10%</td><td></td></tr>
<tr><td>2</td><td>2015</td><td>0</td><td>17.40%</td><td></td></tr>
<tr><td>3</td><td>2018</td><td>0</td><td>17.40%</td><td></td></tr>
<tr><td>4</td><td>2010</td><td>0</td><td>17.90%</td><td></td></tr>
<tr><td>5</td><td>2016</td><td>0</td><td>18.00%</td><td></td></tr>
<tr><td>6</td><td>2013</td><td>0</td><td>18.60%</td><td></td></tr>
<tr><td>7</td><td>2011</td><td>0</td><td>18.80%</td><td></td></tr>
<tr><td>8</td><td>2019</td><td>0</td><td>20.80%</td><td></td></tr>
<tr><td>9</td><td>2014</td><td>0</td><td>21.10%</td><td></td></tr>
<tr><td>10</td><td>2009</td><td>0</td><td>22.50%</td><td></td></tr>

<tr><td colspan="5"><b>Worse PK In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2019</td><td>0</td><td>76.40%</td><td></td></tr>
<tr><td>2</td><td>2016</td><td>0</td><td>79.30%</td><td></td></tr>
<tr><td>3</td><td>2017</td><td>0</td><td>81.80%</td><td></td></tr>
<tr><td>4</td><td>2018</td><td>0</td><td>81.90%</td><td></td></tr>
<tr><td>5</td><td>2015</td><td>0</td><td>82.00%</td><td></td></tr>
<tr><td>6</td><td>2010</td><td>0</td><td>83.00%</td><td></td></tr>
<tr><td>7</td><td>2009</td><td>0</td><td>83.30%</td><td></td></tr>
<tr><td>8</td><td>2011</td><td>0</td><td>84.00%</td><td></td></tr>
<tr><td>9</td><td>2008</td><td>0</td><td>84.20%</td><td></td></tr>
<tr><td>10</td><td>2013</td><td>0</td><td>84.20%</td><td></td></tr>

<tr><td colspan="5"><b>Most Win In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2014</td><td>0</td><td>54</td><td></td></tr>
<tr><td>2</td><td>2017</td><td>0</td><td>53</td><td></td></tr>
<tr><td>3</td><td>2012</td><td>0</td><td>52</td><td></td></tr>
<tr><td>4</td><td>2013</td><td>0</td><td>52</td><td></td></tr>
<tr><td>5</td><td>2011</td><td>0</td><td>51</td><td></td></tr>
<tr><td>6</td><td>2016</td><td>0</td><td>49</td><td></td></tr>
<tr><td>7</td><td>2009</td><td>0</td><td>46</td><td></td></tr>
<tr><td>8</td><td>2018</td><td>0</td><td>46</td><td></td></tr>
<tr><td>9</td><td>2010</td><td>0</td><td>41</td><td></td></tr>
<tr><td>10</td><td>2019</td><td>0</td><td>33</td><td></td></tr>

<tr><td colspan="5"><b>Less Win In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2008</td><td>0</td><td>25</td><td></td></tr>
<tr><td>2</td><td>2019</td><td>0</td><td>33</td><td></td></tr>
<tr><td>3</td><td>2010</td><td>0</td><td>41</td><td></td></tr>
<tr><td>4</td><td>2015</td><td>0</td><td>45</td><td></td></tr>
<tr><td>5</td><td>2009</td><td>0</td><td>46</td><td></td></tr>
<tr><td>6</td><td>2018</td><td>0</td><td>46</td><td></td></tr>
<tr><td>7</td><td>2016</td><td>0</td><td>49</td><td></td></tr>
<tr><td>8</td><td>2011</td><td>0</td><td>51</td><td></td></tr>
<tr><td>9</td><td>2012</td><td>0</td><td>52</td><td></td></tr>

<tr><td colspan="5"><b>Most Lost In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2019</td><td>0</td><td>49</td><td></td></tr>
<tr><td>2</td><td>2010</td><td>0</td><td>41</td><td></td></tr>
<tr><td>3</td><td>2008</td><td>0</td><td>37</td><td></td></tr>
<tr><td>4</td><td>2015</td><td>0</td><td>37</td><td></td></tr>
<tr><td>5</td><td>2009</td><td>0</td><td>36</td><td></td></tr>
<tr><td>6</td><td>2018</td><td>0</td><td>36</td><td></td></tr>
<tr><td>7</td><td>2016</td><td>0</td><td>33</td><td></td></tr>
<tr><td>8</td><td>2011</td><td>0</td><td>31</td><td></td></tr>
<tr><td>9</td><td>2012</td><td>0</td><td>30</td><td></td></tr>

<tr><td colspan="5"><b>Less Lost In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2014</td><td>0</td><td>28</td><td></td></tr>
<tr><td>2</td><td>2017</td><td>0</td><td>29</td><td></td></tr>
<tr><td>3</td><td>2012</td><td>0</td><td>30</td><td></td></tr>
<tr><td>4</td><td>2013</td><td>0</td><td>30</td><td></td></tr>
<tr><td>5</td><td>2011</td><td>0</td><td>31</td><td></td></tr>
<tr><td>6</td><td>2016</td><td>0</td><td>33</td><td></td></tr>
<tr><td>7</td><td>2009</td><td>0</td><td>36</td><td></td></tr>
<tr><td>8</td><td>2018</td><td>0</td><td>36</td><td></td></tr>
<tr><td>9</td><td>2008</td><td>0</td><td>37</td><td></td></tr>
<tr><td>10</td><td>2010</td><td>0</td><td>41</td><td></td></tr>

<tr><td colspan="5"><b>Most Point In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2014</td><td>0</td><td>116</td><td></td></tr>
<tr><td>2</td><td>2012</td><td>0</td><td>111</td><td></td></tr>
<tr><td>3</td><td>2017</td><td>0</td><td>111</td><td></td></tr>
<tr><td>4</td><td>2013</td><td>0</td><td>110</td><td></td></tr>
<tr><td>5</td><td>2011</td><td>0</td><td>105</td><td></td></tr>
<tr><td>6</td><td>2016</td><td>0</td><td>104</td><td></td></tr>
<tr><td>7</td><td>2009</td><td>0</td><td>101</td><td></td></tr>
<tr><td>8</td><td>2018</td><td>0</td><td>101</td><td></td></tr>
<tr><td>9</td><td>2010</td><td>0</td><td>89</td><td></td></tr>
<tr><td>10</td><td>2008</td><td>0</td><td>80</td><td></td></tr>

<tr><td colspan="5"><b>Less Points In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2019</td><td>0</td><td>72</td><td></td></tr>
<tr><td>2</td><td>2008</td><td>0</td><td>80</td><td></td></tr>
<tr><td>3</td><td>2010</td><td>0</td><td>89</td><td></td></tr>
<tr><td>4</td><td>2015</td><td>0</td><td>100</td><td></td></tr>
<tr><td>5</td><td>2009</td><td>0</td><td>101</td><td></td></tr>
<tr><td>6</td><td>2018</td><td>0</td><td>101</td><td></td></tr>
<tr><td>7</td><td>2016</td><td>0</td><td>104</td><td></td></tr>
<tr><td>8</td><td>2011</td><td>0</td><td>105</td><td></td></tr>
<tr><td>9</td><td>2013</td><td>0</td><td>110</td><td></td></tr>
<tr><td>10</td><td>2012</td><td>0</td><td>111</td><td></td></tr>

<tr><td colspan="5"><b>Most Win Home In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>0</td><td>0</td><td>32000</td><td></td></tr>
<tr><td>2</td><td>0</td><td>0</td><td>32000</td><td></td></tr>

<tr><td colspan="5"><b>Most Win Visitor In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>0</td><td>0</td><td>32000</td><td></td></tr>
<tr><td>2</td><td>0</td><td>0</td><td>32000</td><td></td></tr>

</table></div>
<h1 class="TeamRecordsPro_MIN"><a id="Wild">Wild</a></h1>
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
<br /><table class="STHSRecordTable">
<tr><td colspan="5"><b>Most Goals in 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2012</td><td>298</td><td>8</td><td></td></tr><tr><td>2</td><td>2015</td><td>395</td><td>8</td><td></td></tr><tr><td>3</td><td>2015</td><td>1180</td><td>8</td><td></td></tr><tr><td>4</td><td>2017</td><td>472</td><td>8</td><td></td></tr><tr><td>5</td><td>2009</td><td>115</td><td>7</td><td></td></tr><tr><td>6</td><td>2009</td><td>981</td><td>7</td><td></td></tr><tr><td>7</td><td>2010</td><td>254</td><td>7</td><td></td></tr><tr><td>8</td><td>2010</td><td>509</td><td>7</td><td></td></tr><tr><td>9</td><td>2010</td><td>1169</td><td>7</td><td></td></tr><tr><td>10</td><td>2013</td><td>1178</td><td>7</td><td></td></tr>
<tr><td colspan="5"><b>Most Goals in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2015</td><td>0</td><td>278</td><td></td></tr>
<tr><td>2</td><td>2018</td><td>0</td><td>272</td><td></td></tr>
<tr><td>3</td><td>2009</td><td>0</td><td>263</td><td></td></tr>
<tr><td>4</td><td>2014</td><td>0</td><td>248</td><td></td></tr>
<tr><td>5</td><td>2017</td><td>0</td><td>248</td><td></td></tr>
<tr><td>6</td><td>2010</td><td>0</td><td>243</td><td></td></tr>
<tr><td>7</td><td>2012</td><td>0</td><td>237</td><td></td></tr>
<tr><td>8</td><td>2013</td><td>0</td><td>221</td><td></td></tr>
<tr><td>9</td><td>2019</td><td>0</td><td>215</td><td></td></tr>
<tr><td>10</td><td>2011</td><td>0</td><td>211</td><td></td></tr>

<tr><td colspan="5"><b>Less Goal in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2008</td><td>0</td><td>203</td><td></td></tr>
<tr><td>2</td><td>2016</td><td>0</td><td>205</td><td></td></tr>
<tr><td>3</td><td>2011</td><td>0</td><td>211</td><td></td></tr>
<tr><td>4</td><td>2019</td><td>0</td><td>215</td><td></td></tr>
<tr><td>5</td><td>2013</td><td>0</td><td>221</td><td></td></tr>
<tr><td>6</td><td>2012</td><td>0</td><td>237</td><td></td></tr>
<tr><td>7</td><td>2010</td><td>0</td><td>243</td><td></td></tr>
<tr><td>8</td><td>2009</td><td>0</td><td>263</td><td></td></tr>

<tr><td colspan="5"><b>Most Goals Against in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2008</td><td>0</td><td>275</td><td></td></tr>
<tr><td>2</td><td>2011</td><td>0</td><td>272</td><td></td></tr>
<tr><td>3</td><td>2010</td><td>0</td><td>266</td><td></td></tr>
<tr><td>4</td><td>2009</td><td>0</td><td>263</td><td></td></tr>
<tr><td>5</td><td>2019</td><td>0</td><td>246</td><td></td></tr>
<tr><td>6</td><td>2015</td><td>0</td><td>241</td><td></td></tr>
<tr><td>7</td><td>2012</td><td>0</td><td>224</td><td></td></tr>
<tr><td>8</td><td>2018</td><td>0</td><td>210</td><td></td></tr>

<tr><td colspan="5"><b>Less Goal Against in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2013</td><td>0</td><td>185</td><td></td></tr>
<tr><td>2</td><td>2018</td><td>0</td><td>210</td><td></td></tr>
<tr><td>3</td><td>2017</td><td>0</td><td>213</td><td></td></tr>
<tr><td>4</td><td>2014</td><td>0</td><td>222</td><td></td></tr>
<tr><td>5</td><td>2012</td><td>0</td><td>224</td><td></td></tr>
<tr><td>6</td><td>2016</td><td>0</td><td>240</td><td></td></tr>
<tr><td>7</td><td>2015</td><td>0</td><td>241</td><td></td></tr>
<tr><td>8</td><td>2019</td><td>0</td><td>246</td><td></td></tr>
<tr><td>9</td><td>2009</td><td>0</td><td>263</td><td></td></tr>
<tr><td>10</td><td>2010</td><td>0</td><td>266</td><td></td></tr>

<tr><td colspan="5"><b>Most Assists in 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2009</td><td>981</td><td>14</td><td></td></tr><tr><td>2</td><td>2015</td><td>1180</td><td>14</td><td></td></tr><tr><td>3</td><td>2017</td><td>472</td><td>14</td><td></td></tr><tr><td>4</td><td>2017</td><td>682</td><td>14</td><td></td></tr><tr><td>5</td><td>2018</td><td>1125</td><td>14</td><td></td></tr><tr><td>6</td><td>2009</td><td>115</td><td>13</td><td></td></tr><tr><td>7</td><td>2013</td><td>1178</td><td>13</td><td></td></tr><tr><td>8</td><td>2013</td><td>1187</td><td>13</td><td></td></tr><tr><td>9</td><td>2015</td><td>395</td><td>13</td><td></td></tr><tr><td>10</td><td>2015</td><td>1053</td><td>13</td><td></td></tr>
<tr><td colspan="5"><b>Most Assists in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2015</td><td>0</td><td>481</td><td></td></tr>
<tr><td>2</td><td>2009</td><td>0</td><td>470</td><td></td></tr>
<tr><td>3</td><td>2018</td><td>0</td><td>469</td><td></td></tr>
<tr><td>4</td><td>2017</td><td>0</td><td>430</td><td></td></tr>
<tr><td>5</td><td>2014</td><td>0</td><td>428</td><td></td></tr>
<tr><td>6</td><td>2010</td><td>0</td><td>414</td><td></td></tr>
<tr><td>7</td><td>2012</td><td>0</td><td>411</td><td></td></tr>
<tr><td>8</td><td>2019</td><td>0</td><td>375</td><td></td></tr>
<tr><td>9</td><td>2013</td><td>0</td><td>373</td><td></td></tr>
<tr><td>10</td><td>2008</td><td>0</td><td>344</td><td></td></tr>

<tr><td colspan="5"><b>Less Assist in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2011</td><td>0</td><td>340</td><td></td></tr>
<tr><td>2</td><td>2008</td><td>0</td><td>344</td><td></td></tr>
<tr><td>3</td><td>2016</td><td>0</td><td>350</td><td></td></tr>
<tr><td>4</td><td>2013</td><td>0</td><td>373</td><td></td></tr>
<tr><td>5</td><td>2019</td><td>0</td><td>375</td><td></td></tr>
<tr><td>6</td><td>2012</td><td>0</td><td>411</td><td></td></tr>
<tr><td>7</td><td>2010</td><td>0</td><td>414</td><td></td></tr>
<tr><td>8</td><td>2018</td><td>0</td><td>469</td><td></td></tr>
<tr><td>9</td><td>2009</td><td>0</td><td>470</td><td></td></tr>

<tr><td colspan="5"><b>Most Game Points in 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2015</td><td>1180</td><td>22</td><td></td></tr><tr><td>2</td><td>2017</td><td>472</td><td>22</td><td></td></tr><tr><td>3</td><td>2009</td><td>981</td><td>21</td><td></td></tr><tr><td>4</td><td>2015</td><td>395</td><td>21</td><td></td></tr><tr><td>5</td><td>2017</td><td>682</td><td>21</td><td></td></tr><tr><td>6</td><td>2018</td><td>1125</td><td>21</td><td></td></tr><tr><td>7</td><td>2009</td><td>115</td><td>20</td><td></td></tr><tr><td>8</td><td>2012</td><td>298</td><td>20</td><td></td></tr><tr><td>9</td><td>2013</td><td>1178</td><td>20</td><td></td></tr><tr><td>10</td><td>2013</td><td>1187</td><td>20</td><td></td></tr>
<tr><td colspan="5"><b>Most Game Points in 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>0</td><td>0</td><td>32000</td><td></td></tr>
<tr><td>2</td><td>0</td><td>0</td><td>32000</td><td></td></tr>

<tr><td colspan="5"><b>Less Game Point In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2008</td><td>0</td><td>547</td><td></td></tr>
<tr><td>2</td><td>2011</td><td>0</td><td>551</td><td></td></tr>
<tr><td>3</td><td>2016</td><td>0</td><td>555</td><td></td></tr>
<tr><td>4</td><td>2019</td><td>0</td><td>590</td><td></td></tr>
<tr><td>5</td><td>2013</td><td>0</td><td>594</td><td></td></tr>
<tr><td>6</td><td>2012</td><td>0</td><td>648</td><td></td></tr>
<tr><td>7</td><td>2010</td><td>0</td><td>657</td><td></td></tr>
<tr><td>8</td><td>2009</td><td>0</td><td>733</td><td></td></tr>

<tr><td colspan="5"><b>Most Shots In 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2010</td><td>509</td><td>58</td><td></td></tr><tr><td>2</td><td>2017</td><td>973</td><td>55</td><td></td></tr><tr><td>3</td><td>2019</td><td>1151</td><td>55</td><td><a href="OTHL-1151.html">Game Direct Link</a></td></tr><tr><td>4</td><td>2018</td><td>1202</td><td>54</td><td></td></tr><tr><td>5</td><td>2015</td><td>906</td><td>52</td><td></td></tr><tr><td>6</td><td>2018</td><td>959</td><td>52</td><td></td></tr><tr><td>7</td><td>2018</td><td>692</td><td>50</td><td></td></tr><tr><td>8</td><td>2019</td><td>706</td><td>50</td><td><a href="OTHL-706.html">Game Direct Link</a></td></tr><tr><td>9</td><td>2015</td><td>1094</td><td>49</td><td></td></tr><tr><td>10</td><td>2018</td><td>907</td><td>49</td><td></td></tr>
<tr><td colspan="5"><b>Most Shots In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2018</td><td>0</td><td>2750</td><td></td></tr>
<tr><td>2</td><td>2017</td><td>0</td><td>2655</td><td></td></tr>
<tr><td>3</td><td>2015</td><td>0</td><td>2485</td><td></td></tr>
<tr><td>4</td><td>2014</td><td>0</td><td>2434</td><td></td></tr>
<tr><td>5</td><td>2019</td><td>0</td><td>2428</td><td></td></tr>
<tr><td>6</td><td>2012</td><td>0</td><td>2331</td><td></td></tr>
<tr><td>7</td><td>2016</td><td>0</td><td>2275</td><td></td></tr>
<tr><td>8</td><td>2009</td><td>0</td><td>2271</td><td></td></tr>
<tr><td>9</td><td>2011</td><td>0</td><td>2219</td><td></td></tr>
<tr><td>10</td><td>2010</td><td>0</td><td>2197</td><td></td></tr>

<tr><td colspan="5"><b>Less Shots In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2008</td><td>0</td><td>1985</td><td></td></tr>
<tr><td>2</td><td>2013</td><td>0</td><td>2133</td><td></td></tr>
<tr><td>3</td><td>2010</td><td>0</td><td>2197</td><td></td></tr>
<tr><td>4</td><td>2011</td><td>0</td><td>2219</td><td></td></tr>
<tr><td>5</td><td>2009</td><td>0</td><td>2271</td><td></td></tr>
<tr><td>6</td><td>2012</td><td>0</td><td>2331</td><td></td></tr>

<tr><td colspan="5"><b>Most Shots Blocked In 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2010</td><td>561</td><td>21</td><td></td></tr><tr><td>2</td><td>2008</td><td>628</td><td>19</td><td></td></tr><tr><td>3</td><td>2010</td><td>465</td><td>19</td><td></td></tr><tr><td>4</td><td>2017</td><td>237</td><td>19</td><td></td></tr><tr><td>5</td><td>2019</td><td>558</td><td>19</td><td><a href="OTHL-558.html">Game Direct Link</a></td></tr><tr><td>6</td><td>2016</td><td>11</td><td>18</td><td></td></tr><tr><td>7</td><td>2017</td><td>728</td><td>18</td><td></td></tr><tr><td>8</td><td>2017</td><td>1251</td><td>18</td><td></td></tr><tr><td>9</td><td>2018</td><td>537</td><td>18</td><td></td></tr><tr><td>10</td><td>2019</td><td>608</td><td>18</td><td><a href="OTHL-608.html">Game Direct Link</a></td></tr>
<tr><td colspan="5"><b>Most Shots Blocked In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>0</td><td>0</td><td>32000</td><td></td></tr>
<tr><td>2</td><td>0</td><td>0</td><td>32000</td><td></td></tr>

<tr><td colspan="5"><b>Less Shots Block In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2012</td><td>0</td><td>588</td><td></td></tr>
<tr><td>2</td><td>2013</td><td>0</td><td>621</td><td></td></tr>
<tr><td>3</td><td>2009</td><td>0</td><td>638</td><td></td></tr>
<tr><td>4</td><td>2016</td><td>0</td><td>654</td><td></td></tr>
<tr><td>5</td><td>2010</td><td>0</td><td>657</td><td></td></tr>
<tr><td>6</td><td>2015</td><td>0</td><td>679</td><td></td></tr>
<tr><td>7</td><td>2014</td><td>0</td><td>694</td><td></td></tr>
<tr><td>8</td><td>2008</td><td>0</td><td>698</td><td></td></tr>
<tr><td>9</td><td>2018</td><td>0</td><td>704</td><td></td></tr>
<tr><td>10</td><td>2011</td><td>0</td><td>766</td><td></td></tr>

<tr><td colspan="5"><b>Most Shots Against In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2019</td><td>0</td><td>2860</td><td></td></tr>
<tr><td>2</td><td>2017</td><td>0</td><td>2480</td><td></td></tr>
<tr><td>3</td><td>2018</td><td>0</td><td>2456</td><td></td></tr>
<tr><td>4</td><td>2008</td><td>0</td><td>2438</td><td></td></tr>
<tr><td>5</td><td>2011</td><td>0</td><td>2426</td><td></td></tr>
<tr><td>6</td><td>2009</td><td>0</td><td>2284</td><td></td></tr>
<tr><td>7</td><td>2010</td><td>0</td><td>2268</td><td></td></tr>
<tr><td>8</td><td>2013</td><td>0</td><td>2239</td><td></td></tr>
<tr><td>9</td><td>2012</td><td>0</td><td>2145</td><td></td></tr>

<tr><td colspan="5"><b>Less Shots Against In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2012</td><td>0</td><td>2145</td><td></td></tr>
<tr><td>2</td><td>2016</td><td>0</td><td>2200</td><td></td></tr>
<tr><td>3</td><td>2015</td><td>0</td><td>2218</td><td></td></tr>
<tr><td>4</td><td>2014</td><td>0</td><td>2228</td><td></td></tr>
<tr><td>5</td><td>2013</td><td>0</td><td>2239</td><td></td></tr>
<tr><td>6</td><td>2010</td><td>0</td><td>2268</td><td></td></tr>
<tr><td>7</td><td>2009</td><td>0</td><td>2284</td><td></td></tr>
<tr><td>8</td><td>2011</td><td>0</td><td>2426</td><td></td></tr>
<tr><td>9</td><td>2008</td><td>0</td><td>2438</td><td></td></tr>

<tr><td colspan="5"><b>Most Pim In 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2013</td><td>832</td><td>72</td><td></td></tr><tr><td>2</td><td>2017</td><td>425</td><td>70</td><td></td></tr><tr><td>3</td><td>2016</td><td>919</td><td>68</td><td></td></tr><tr><td>4</td><td>2011</td><td>209</td><td>64</td><td></td></tr><tr><td>5</td><td>2011</td><td>493</td><td>54</td><td></td></tr><tr><td>6</td><td>2011</td><td>339</td><td>51</td><td></td></tr><tr><td>7</td><td>2011</td><td>384</td><td>49</td><td></td></tr><tr><td>8</td><td>2018</td><td>430</td><td>47</td><td></td></tr><tr><td>9</td><td>2008</td><td>205</td><td>44</td><td></td></tr><tr><td>10</td><td>2011</td><td>1105</td><td>43</td><td></td></tr>
<tr><td colspan="5"><b>Most Pim In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2011</td><td>0</td><td>1374</td><td></td></tr>
<tr><td>2</td><td>2010</td><td>0</td><td>1225</td><td></td></tr>
<tr><td>3</td><td>2009</td><td>0</td><td>1187</td><td></td></tr>
<tr><td>4</td><td>2008</td><td>0</td><td>1164</td><td></td></tr>
<tr><td>5</td><td>2016</td><td>0</td><td>1128</td><td></td></tr>
<tr><td>6</td><td>2012</td><td>0</td><td>950</td><td></td></tr>
<tr><td>7</td><td>2019</td><td>0</td><td>700</td><td></td></tr>
<tr><td>8</td><td>2018</td><td>0</td><td>634</td><td></td></tr>

<tr><td colspan="5"><b>Less Pim In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2018</td><td>0</td><td>634</td><td></td></tr>
<tr><td>2</td><td>2019</td><td>0</td><td>700</td><td></td></tr>
<tr><td>3</td><td>2017</td><td>0</td><td>705</td><td></td></tr>
<tr><td>4</td><td>2015</td><td>0</td><td>706</td><td></td></tr>
<tr><td>5</td><td>2014</td><td>0</td><td>866</td><td></td></tr>
<tr><td>6</td><td>2013</td><td>0</td><td>935</td><td></td></tr>
<tr><td>7</td><td>2012</td><td>0</td><td>950</td><td></td></tr>
<tr><td>8</td><td>2016</td><td>0</td><td>1128</td><td></td></tr>
<tr><td>9</td><td>2008</td><td>0</td><td>1164</td><td></td></tr>
<tr><td>10</td><td>2009</td><td>0</td><td>1187</td><td></td></tr>

<tr><td colspan="5"><b>Most Hits In 1 Game</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2011</td><td>538</td><td>39</td><td></td></tr><tr><td>2</td><td>2018</td><td>759</td><td>38</td><td></td></tr><tr><td>3</td><td>2013</td><td>865</td><td>37</td><td></td></tr><tr><td>4</td><td>2011</td><td>583</td><td>35</td><td></td></tr><tr><td>5</td><td>2014</td><td>816</td><td>35</td><td></td></tr><tr><td>6</td><td>2014</td><td>856</td><td>35</td><td></td></tr><tr><td>7</td><td>2019</td><td>900</td><td>35</td><td><a href="OTHL-900.html">Game Direct Link</a></td></tr><tr><td>8</td><td>2011</td><td>131</td><td>34</td><td></td></tr><tr><td>9</td><td>2011</td><td>493</td><td>34</td><td></td></tr><tr><td>10</td><td>2016</td><td>523</td><td>34</td><td></td></tr>
<tr><td colspan="5"><b>Most Hits In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2011</td><td>0</td><td>1906</td><td></td></tr>
<tr><td>2</td><td>2016</td><td>0</td><td>1811</td><td></td></tr>
<tr><td>3</td><td>2013</td><td>0</td><td>1746</td><td></td></tr>
<tr><td>4</td><td>2014</td><td>0</td><td>1737</td><td></td></tr>
<tr><td>5</td><td>2019</td><td>0</td><td>1693</td><td></td></tr>
<tr><td>6</td><td>2012</td><td>0</td><td>1686</td><td></td></tr>
<tr><td>7</td><td>2015</td><td>0</td><td>1643</td><td></td></tr>
<tr><td>8</td><td>2018</td><td>0</td><td>1643</td><td></td></tr>
<tr><td>9</td><td>2009</td><td>0</td><td>1624</td><td></td></tr>
<tr><td>10</td><td>2010</td><td>0</td><td>1559</td><td></td></tr>

<tr><td colspan="5"><b>Less Hit In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2008</td><td>0</td><td>1492</td><td></td></tr>
<tr><td>2</td><td>2010</td><td>0</td><td>1559</td><td></td></tr>
<tr><td>3</td><td>2009</td><td>0</td><td>1624</td><td></td></tr>
<tr><td>4</td><td>2017</td><td>0</td><td>1638</td><td></td></tr>
<tr><td>5</td><td>2015</td><td>0</td><td>1643</td><td></td></tr>
<tr><td>6</td><td>2018</td><td>0</td><td>1643</td><td></td></tr>
<tr><td>7</td><td>2012</td><td>0</td><td>1686</td><td></td></tr>
<tr><td>8</td><td>2019</td><td>0</td><td>1693</td><td></td></tr>
<tr><td>9</td><td>2014</td><td>0</td><td>1737</td><td></td></tr>
<tr><td>10</td><td>2013</td><td>0</td><td>1746</td><td></td></tr>

<tr><td colspan="5"><b>Most Empty Net Goal In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2018</td><td>0</td><td>6</td><td></td></tr>
<tr><td>2</td><td>2019</td><td>0</td><td>3</td><td></td></tr>
<tr><td>3</td><td>2011</td><td>0</td><td>2</td><td></td></tr>
<tr><td>4</td><td>2013</td><td>0</td><td>2</td><td></td></tr>
<tr><td>5</td><td>2016</td><td>0</td><td>2</td><td></td></tr>
<tr><td>6</td><td>2017</td><td>0</td><td>2</td><td></td></tr>
<tr><td>7</td><td>2008</td><td>0</td><td>1</td><td></td></tr>
<tr><td>8</td><td>2012</td><td>0</td><td>1</td><td></td></tr>
<tr><td>9</td><td>2014</td><td>0</td><td>1</td><td></td></tr>

<tr><td colspan="5"><b>Best PP In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2018</td><td>0</td><td>22.10%</td><td></td></tr>
<tr><td>2</td><td>2013</td><td>0</td><td>20.90%</td><td></td></tr>
<tr><td>3</td><td>2019</td><td>0</td><td>20.60%</td><td></td></tr>
<tr><td>4</td><td>2016</td><td>0</td><td>19.10%</td><td></td></tr>
<tr><td>5</td><td>2012</td><td>0</td><td>18.90%</td><td></td></tr>
<tr><td>6</td><td>2011</td><td>0</td><td>17.60%</td><td></td></tr>
<tr><td>7</td><td>2009</td><td>0</td><td>17.50%</td><td></td></tr>
<tr><td>8</td><td>2014</td><td>0</td><td>16.90%</td><td></td></tr>
<tr><td>9</td><td>2010</td><td>0</td><td>16.60%</td><td></td></tr>
<tr><td>10</td><td>2008</td><td>0</td><td>13.50%</td><td></td></tr>

<tr><td colspan="5"><b>Best PK In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2012</td><td>0</td><td>86.00%</td><td></td></tr>
<tr><td>2</td><td>2019</td><td>0</td><td>85.80%</td><td></td></tr>
<tr><td>3</td><td>2016</td><td>0</td><td>84.80%</td><td></td></tr>
<tr><td>4</td><td>2013</td><td>0</td><td>84.40%</td><td></td></tr>
<tr><td>5</td><td>2008</td><td>0</td><td>83.70%</td><td></td></tr>
<tr><td>6</td><td>2014</td><td>0</td><td>83.10%</td><td></td></tr>
<tr><td>7</td><td>2010</td><td>0</td><td>82.00%</td><td></td></tr>
<tr><td>8</td><td>2018</td><td>0</td><td>80.30%</td><td></td></tr>
<tr><td>9</td><td>2009</td><td>0</td><td>79.90%</td><td></td></tr>
<tr><td>10</td><td>2011</td><td>0</td><td>74.50%</td><td></td></tr>

<tr><td colspan="5"><b>Worse PP In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2008</td><td>0</td><td>13.50%</td><td></td></tr>
<tr><td>2</td><td>2017</td><td>0</td><td>15.70%</td><td></td></tr>
<tr><td>3</td><td>2015</td><td>0</td><td>15.80%</td><td></td></tr>
<tr><td>4</td><td>2010</td><td>0</td><td>16.60%</td><td></td></tr>
<tr><td>5</td><td>2014</td><td>0</td><td>16.90%</td><td></td></tr>
<tr><td>6</td><td>2009</td><td>0</td><td>17.50%</td><td></td></tr>
<tr><td>7</td><td>2011</td><td>0</td><td>17.60%</td><td></td></tr>
<tr><td>8</td><td>2012</td><td>0</td><td>18.90%</td><td></td></tr>

<tr><td colspan="5"><b>Worse PK In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2011</td><td>0</td><td>74.50%</td><td></td></tr>
<tr><td>2</td><td>2009</td><td>0</td><td>79.90%</td><td></td></tr>
<tr><td>3</td><td>2018</td><td>0</td><td>80.30%</td><td></td></tr>
<tr><td>4</td><td>2015</td><td>0</td><td>81.30%</td><td></td></tr>
<tr><td>5</td><td>2017</td><td>0</td><td>81.60%</td><td></td></tr>
<tr><td>6</td><td>2010</td><td>0</td><td>82.00%</td><td></td></tr>
<tr><td>7</td><td>2014</td><td>0</td><td>83.10%</td><td></td></tr>
<tr><td>8</td><td>2008</td><td>0</td><td>83.70%</td><td></td></tr>
<tr><td>9</td><td>2013</td><td>0</td><td>84.40%</td><td></td></tr>
<tr><td>10</td><td>2019</td><td>0</td><td>85.80%</td><td></td></tr>

<tr><td colspan="5"><b>Most Win In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2018</td><td>0</td><td>53</td><td></td></tr>
<tr><td>2</td><td>2015</td><td>0</td><td>48</td><td></td></tr>
<tr><td>3</td><td>2013</td><td>0</td><td>47</td><td></td></tr>
<tr><td>4</td><td>2017</td><td>0</td><td>46</td><td></td></tr>
<tr><td>5</td><td>2014</td><td>0</td><td>45</td><td></td></tr>
<tr><td>6</td><td>2009</td><td>0</td><td>41</td><td></td></tr>
<tr><td>7</td><td>2010</td><td>0</td><td>38</td><td></td></tr>
<tr><td>8</td><td>2012</td><td>0</td><td>36</td><td></td></tr>
<tr><td>9</td><td>2019</td><td>0</td><td>32</td><td></td></tr>
<tr><td>10</td><td>2011</td><td>0</td><td>31</td><td></td></tr>

<tr><td colspan="5"><b>Less Win In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2008</td><td>0</td><td>24</td><td></td></tr>
<tr><td>2</td><td>2011</td><td>0</td><td>31</td><td></td></tr>
<tr><td>3</td><td>2019</td><td>0</td><td>32</td><td></td></tr>
<tr><td>4</td><td>2012</td><td>0</td><td>36</td><td></td></tr>
<tr><td>5</td><td>2016</td><td>0</td><td>37</td><td></td></tr>
<tr><td>6</td><td>2010</td><td>0</td><td>38</td><td></td></tr>
<tr><td>7</td><td>2009</td><td>0</td><td>41</td><td></td></tr>

<tr><td colspan="5"><b>Most Lost In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2011</td><td>0</td><td>51</td><td></td></tr>
<tr><td>2</td><td>2019</td><td>0</td><td>50</td><td></td></tr>
<tr><td>3</td><td>2012</td><td>0</td><td>46</td><td></td></tr>
<tr><td>4</td><td>2016</td><td>0</td><td>45</td><td></td></tr>
<tr><td>5</td><td>2010</td><td>0</td><td>44</td><td></td></tr>
<tr><td>6</td><td>2008</td><td>0</td><td>43</td><td></td></tr>
<tr><td>7</td><td>2009</td><td>0</td><td>41</td><td></td></tr>
<tr><td>8</td><td>2018</td><td>0</td><td>29</td><td></td></tr>

<tr><td colspan="5"><b>Less Lost In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2018</td><td>0</td><td>29</td><td></td></tr>
<tr><td>2</td><td>2015</td><td>0</td><td>34</td><td></td></tr>
<tr><td>3</td><td>2013</td><td>0</td><td>35</td><td></td></tr>
<tr><td>4</td><td>2017</td><td>0</td><td>36</td><td></td></tr>
<tr><td>5</td><td>2014</td><td>0</td><td>37</td><td></td></tr>
<tr><td>6</td><td>2009</td><td>0</td><td>41</td><td></td></tr>
<tr><td>7</td><td>2008</td><td>0</td><td>43</td><td></td></tr>
<tr><td>8</td><td>2010</td><td>0</td><td>44</td><td></td></tr>
<tr><td>9</td><td>2012</td><td>0</td><td>46</td><td></td></tr>
<tr><td>10</td><td>2019</td><td>0</td><td>50</td><td></td></tr>

<tr><td colspan="5"><b>Most Point In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2018</td><td>0</td><td>111</td><td></td></tr>
<tr><td>2</td><td>2015</td><td>0</td><td>102</td><td></td></tr>
<tr><td>3</td><td>2017</td><td>0</td><td>102</td><td></td></tr>
<tr><td>4</td><td>2013</td><td>0</td><td>100</td><td></td></tr>
<tr><td>5</td><td>2014</td><td>0</td><td>94</td><td></td></tr>
<tr><td>6</td><td>2009</td><td>0</td><td>91</td><td></td></tr>
<tr><td>7</td><td>2010</td><td>0</td><td>87</td><td></td></tr>
<tr><td>8</td><td>2012</td><td>0</td><td>85</td><td></td></tr>
<tr><td>9</td><td>2019</td><td>0</td><td>76</td><td></td></tr>
<tr><td>10</td><td>2008</td><td>0</td><td>71</td><td></td></tr>

<tr><td colspan="5"><b>Less Points In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>2011</td><td>0</td><td>69</td><td></td></tr>
<tr><td>2</td><td>2008</td><td>0</td><td>71</td><td></td></tr>
<tr><td>3</td><td>2019</td><td>0</td><td>76</td><td></td></tr>
<tr><td>4</td><td>2016</td><td>0</td><td>79</td><td></td></tr>
<tr><td>5</td><td>2012</td><td>0</td><td>85</td><td></td></tr>
<tr><td>6</td><td>2010</td><td>0</td><td>87</td><td></td></tr>
<tr><td>7</td><td>2009</td><td>0</td><td>91</td><td></td></tr>

<tr><td colspan="5"><b>Most Win Home In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>0</td><td>0</td><td>32000</td><td></td></tr>
<tr><td>2</td><td>0</td><td>0</td><td>32000</td><td></td></tr>

<tr><td colspan="5"><b>Most Win Visitor In 1 Year</b></td></tr>
<tr><td class="STHSW30">#</td><td class="STHSW50">Year</td><td class="STHSW50">Game</td><td class="STHSW75">Value</td><td class="STHSW250">Link</td></tr>
<tr><td>1</td><td>0</td><td>0</td><td>32000</td><td></td></tr>
<tr><td>2</td><td>0</td><td>0</td><td>32000</td><td></td></tr>

</table></div>
<?php include "Footer.php";?>
