<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<title>OTHL - Awards</title>
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
<table class="STHSAward_Table"><thead><tr><th>Awards</th><th>Winner</th></tr></thead>
<tbody><tr><td><b>Stanley Cup</b> : Playoff Champion</td><td>
<b>Predators</b>
</td></tr>
<tr><td><b>Presidents' Trophy</b> : Best Overall Record</td><td>
<b>Flames</b>
</td></tr>
<tr><td><b>Prince of Wales Trophy</b> : Eastern Conference Champion</td><td>
<b>Sabres</b>
</td></tr>
<tr><td><b>Clarence S. Campbell Bowl</b>  : Western Conference Champion</td><td>
<b>Predators</b>
</td></tr>
<tr><td><b>Art Ross Trophy</b> : Top Point Scorer in the NHL</td><td>
<b>Aleksander Barkov</b> from <b>Sharks</b> with 109 points.
</td></tr>
<tr><td><b>Maurice Richard Trophy</b> : Top Goal Scorer in the NHL</td><td>
<b>Sean Couturier</b> from <b>Bruins</b> with 49 goals.
</td></tr>
<tr><td><b>Hart Memorial Trophy </b> :  NHL Most Valuable Player</td><td>
<b>Aleksander Barkov</b> from <b>Sharks</b>.
</td></tr>
<tr><td><b>Calder Memorial Trophy :</b> Rookie of the Year</td><td>
<b>Brady Tkachuk</b> from <b>Penguins</b>.
</td></tr>
<tr><td><b>Frank J. Selke Trophy</b> : Top Defensive Forward in the NHL</td><td>
<b>Carl Soderberg</b> from <b>Panthers</b>.
</td></tr>
<tr><td><b>James Norris Memorial Trophy</b> : Top Defenseman in the NHL</td><td>
<b>Rasmus Ristolainen</b> from <b>Sabres</b>.
</td></tr>
<tr><td><b>Vezina Trophy</b> :  Top Goalie in the NHL</td><td>
<b>Ben Bishop</b> from <b>Canadiens</b>.
</td></tr>
<tr><td><b>Lester B. Pearson Award</b> : Most Outstanding Player</td><td>
<b>Sean Couturier</b> from <b>Bruins</b>.
</td></tr>
<tr><td><b>Lady Byng Memorial Trophy</b> : Player who Displays Gentlemanly Conduct</td><td>
<b>David Krejci</b> from <b>Maple Leafs</b>.
</td></tr>
<tr><td><b>Conn Smythe Trophy</b> : Most Valuable Player in the Stanley Cup Playoffs</td><td>
<b>Carey Price</b> from <b>Predators</b>.
</td></tr>
<tr><td><b>William M. Jennings Trophy</b> : Goalie(s) With the Fewest Goals Scored Against</td><td>
<b>Unknown - Fill Manually</b>
</td></tr>
<tr><td><b>Jack Adams Award</b> : Coach of the Year</td><td>
<b>Unknown - Fill Manually</b>
</td></tr>
<tr><td><b>Bill Masterton Memorial Trophy</b> : Qualities of Perseverance and Sportsmanship</td><td>
<b>Unknown - Fill Manually</b>
</td></tr>
<tr><td><b>King Clancy Memorial Trophy</b> : Leadership and Humanitarian Contribution</td><td>
<b>Unknown - Fill Manually</b>
</td></tr>
</tbody></table>
<?php include "Footer.php";?>
