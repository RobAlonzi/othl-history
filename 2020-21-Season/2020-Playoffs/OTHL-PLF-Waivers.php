<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<title>OTHL - Waivers</title>
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
<table class="STHSWaiver_Table"><thead><tr><th>
<b>Player</b></th><th>
<b>From Team</b></th><th>
<b>Picked by</b></th><th>
<b>Day Put on Waivers</b></th><th>
<b>Day Removed from Waivers</b></th></tr></thead><tbody>
<tr><td>Thomas Hickey (57)</td><td>
<a href="OTHL-PLF-ProTeamRoster.html#Stars">Stars</a></td><td>
</td><td>185</td><td>187</td></tr>
<tr><td>Brett Sutter (61)</td><td>
<a href="OTHL-PLF-ProTeamRoster.html#Avalanche">Avalanche</a></td><td>
</td><td>185</td><td>187</td></tr>
</tbody></table>
<br />
<h1 class="STHSWaivers_WaiverOrder">Waiver Order</h1>
1 - Hurricanes<br />
2 - Penguins<br />
3 - Rangers<br />
4 - Capitals<br />
5 - Blues<br />
6 - Wild<br />
7 - Avalanche<br />
8 - Senators<br />
9 - Golden Knights<br />
10 - Red Wings<br />
11 - Devils<br />
12 - Canadiens<br />
13 - Sharks<br />
14 - Islanders<br />
15 - Jets<br />
16 - Blue Jackets<br />
17 - Panthers<br />
18 - Predators<br />
19 - Maple Leafs<br />
20 - Kings<br />
21 - Ducks<br />
22 - Stars<br />
23 - Oilers<br />
24 - Lightning<br />
25 - Blackhawks<br />
26 - Sabres<br />
27 - Flyers<br />
28 - Bruins<br />
29 - Canucks<br />
30 - Coyotes<br />
31 - Flames<br />
<?php include "Footer.php";?>
