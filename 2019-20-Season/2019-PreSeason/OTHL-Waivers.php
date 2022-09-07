<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<title>OTHL - Waivers</title>
<script src="OTHL.js"></script>
<meta name="author" content="Simon Tremblay, sths.simont.info" />
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="Decription" content="Tyler Bell - STHS - Version : 3.1.6.6" />
<link href="STHSMain.css" rel="stylesheet" type="text/css" />
<link href="OTHL.css" rel="stylesheet" type="text/css" />
<?php If (file_exists("STHSMain-CSSOverwrite.css") == true){echo "<link href=\"STHSMain-CSSOverwrite.css\" rel=\"stylesheet\" type=\"text/css\" />";}?>
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
<tr><td>Michael Del Zotto (68)</td><td>
<a href="OTHL-ProTeamRoster.html#Penguins">Penguins</a></td><td>
</td><td>16</td><td>18</td></tr>
<tr><td>Matt Read (61)</td><td>
<a href="OTHL-ProTeamRoster.html#Penguins">Penguins</a></td><td>
</td><td>16</td><td>18</td></tr>
</tbody></table>
<br />
<h1 class="STHSWaivers_WaiverOrder">Waiver Order</h1>
1 - Penguins<br />
2 - Flyers<br />
3 - Hurricanes<br />
4 - Maple Leafs<br />
5 - Avalanche<br />
6 - Kings<br />
7 - Blackhawks<br />
8 - Wild<br />
9 - Stars<br />
10 - Blues<br />
11 - Lightning<br />
12 - Rangers<br />
13 - Golden Knights<br />
14 - Blue Jackets<br />
15 - Coyotes<br />
16 - Devils<br />
17 - Senators<br />
18 - Oilers<br />
19 - Bruins<br />
20 - Red Wings<br />
21 - Sabres<br />
22 - Predators<br />
23 - Capitals<br />
24 - Panthers<br />
25 - Sharks<br />
26 - Jets<br />
27 - Ducks<br />
28 - Canadiens<br />
29 - Canucks<br />
30 - Flames<br />
31 - Islanders<br />
<?php include "Footer.php";?>
