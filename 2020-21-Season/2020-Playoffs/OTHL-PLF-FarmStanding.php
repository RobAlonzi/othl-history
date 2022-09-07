<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<title>OTHL - Farm Standing</title>
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
<div class="STHSCenter"><h1>Comets (VAN) wins the playoff!</h1></div>
<table class="STHSTableFullW"><tr>
<td><b> Round : 1</b></td>
<td><b> Round : 2</b></td>
<td><b> Round : 3</b></td>
<td><b> Round : 4</b></td>
</tr>
<tr>
<td><b>
<a href="OTHL-PLF-ProTeamRoster.html#Flyers">Phantoms (PHL) - 3</a><br />
<a href="OTHL-PLF-ProTeamRoster.html#Canucks">Comets (VAN) - 4</a><br />
<br /></b></td>
<td><b>
<br /></b></td>
<td><b>
<br /></b></td>
<td><b>
<br /></b></td>
</tr>
<tr>
<td><b>
<a href="OTHL-PLF-ProTeamRoster.html#Bruins">Bruins (BOS) - 3</a><br />
<a href="OTHL-PLF-ProTeamRoster.html#Panthers">Thunderbirds (FLA) - 4</a><br />
<br /></b></td>
<td><b>
<a href="OTHL-PLF-ProTeamRoster.html#MapleLeafs">Marlies (TOR) - 0</a><br />
<a href="OTHL-PLF-ProTeamRoster.html#Canucks">Comets (VAN) - 4</a><br />
<br /></b></td>
<td><b>
<br /></b></td>
<td><b>
<br /></b></td>
</tr>
<tr>
<td><b>
<a href="OTHL-PLF-ProTeamRoster.html#Penguins">Penguins (PIT) - 3</a><br />
<a href="OTHL-PLF-ProTeamRoster.html#BlueJackets">Monsters (CLB) - 4</a><br />
<br /></b></td>
<td><b>
<br /></b></td>
<td><b>
<br /></b></td>
<td><b>
<br /></b></td>
</tr>
<tr>
<td><b>
<a href="OTHL-PLF-ProTeamRoster.html#Hurricanes">Checkers (CAR) - 3</a><br />
<a href="OTHL-PLF-ProTeamRoster.html#MapleLeafs">Marlies (TOR) - 4</a><br />
<br /></b></td>
<td><b>
<a href="OTHL-PLF-ProTeamRoster.html#BlueJackets">Monsters (CLB) - 2</a><br />
<a href="OTHL-PLF-ProTeamRoster.html#Panthers">Thunderbirds (FLA) - 4</a><br />
<br /></b></td>
<td><b>
<a href="OTHL-PLF-ProTeamRoster.html#Panthers">Thunderbirds (FLA) - 2</a><br />
<a href="OTHL-PLF-ProTeamRoster.html#Canucks">Comets (VAN) - 4</a><br />
<br /></b></td>
<td><b>
<br /></b></td>
</tr>
<tr>
<td><b>
<br /></b></td>
<td><b>
<br /></b></td>
<td><b>
<br /></b></td>
<td><b>
<a href="OTHL-PLF-ProTeamRoster.html#Oilers">Condors (EDM) - 0</a><br />
<a href="OTHL-PLF-ProTeamRoster.html#Canucks">Comets (VAN) - 4</a><br />
<br /></b></td>
</tr>
<tr>
<td><b>
<a href="OTHL-PLF-ProTeamRoster.html#GoldenKnights">Wolves (VGK) - 0</a><br />
<a href="OTHL-PLF-ProTeamRoster.html#Predators">Admirals (NSH) - 4</a><br />
<br /></b></td>
<td><b>
<a href="OTHL-PLF-ProTeamRoster.html#Sabres"> Americans (BUF) - 3</a><br />
<a href="OTHL-PLF-ProTeamRoster.html#Predators">Admirals (NSH) - 4</a><br />
<br /></b></td>
<td><b>
<a href="OTHL-PLF-ProTeamRoster.html#Oilers">Condors (EDM) - 4</a><br />
<a href="OTHL-PLF-ProTeamRoster.html#Predators">Admirals (NSH) - 1</a><br />
<br /></b></td>
<td><b>
<br /></b></td>
</tr>
<tr>
<td><b>
<a href="OTHL-PLF-ProTeamRoster.html#Flames">Heat (CGY) - 0</a><br />
<a href="OTHL-PLF-ProTeamRoster.html#Oilers">Condors (EDM) - 4</a><br />
<br /></b></td>
<td><b>
<br /></b></td>
<td><b>
<br /></b></td>
<td><b>
<br /></b></td>
</tr>
<tr>
<td><b>
<a href="OTHL-PLF-ProTeamRoster.html#Sharks">Barracudas (SJS) - 3</a><br />
<a href="OTHL-PLF-ProTeamRoster.html#Blackhawks">IceHogs (CHI) - 4</a><br />
<br /></b></td>
<td><b>
<a href="OTHL-PLF-ProTeamRoster.html#Blackhawks">IceHogs (CHI) - 0</a><br />
<a href="OTHL-PLF-ProTeamRoster.html#Oilers">Condors (EDM) - 4</a><br />
<br /></b></td>
<td><b>
<br /></b></td>
<td><b>
<br /></b></td>
</tr>
<tr>
<td><b>
<a href="OTHL-PLF-ProTeamRoster.html#Jets">Moose (WPG) - 0</a><br />
<a href="OTHL-PLF-ProTeamRoster.html#Sabres"> Americans (BUF) - 4</a><br />
<br /></b></td>
<td><b>
<br /></b></td>
<td><b>
<br /></b></td>
<td><b>
<br /></b></td>
</tr>
</table>
<?php include "Footer.php";?>
