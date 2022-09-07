<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<title>OTHL - Waivers</title>
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
<table class="STHSWaiver_Table"><thead><tr><th>
<b>Player</b></th><th>
<b>From Team</b></th><th>
<b>Picked by</b></th><th>
<b>Day Put on Waivers</b></th><th>
<b>Day Removed from Waivers</b></th></tr></thead><tbody>
<tr><td>Noah Hanifin (69)</td><td>
<a href="OTHL-ProTeamRoster.html#Oilers">Oilers</a></td><td>
</td><td>175</td><td>177</td></tr>
</tbody></table>
<br />
<h1 class="STHSWaivers_WaiverOrder">Waiver Order</h1>
1 - Hurricanes<br />
2 - Avalanche<br />
3 - Rangers<br />
4 - Sharks<br />
5 - Wild<br />
6 - Lightning<br />
7 - Flyers<br />
8 - Penguins<br />
9 - Blues<br />
10 - Senators<br />
11 - Golden Knights<br />
12 - Ducks<br />
13 - Red Wings<br />
14 - Capitals<br />
15 - Jets<br />
16 - Panthers<br />
17 - Coyotes<br />
18 - Devils<br />
19 - Bruins<br />
20 - Stars<br />
21 - Sabres<br />
22 - Kraken<br />
23 - Predators<br />
24 - Maple Leafs<br />
25 - Canucks<br />
26 - Canadiens<br />
27 - Kings<br />
28 - Blue Jackets<br />
29 - Blackhawks<br />
30 - Flames<br />
31 - Islanders<br />
32 - Oilers<br />
<?php include "Footer.php";?>
