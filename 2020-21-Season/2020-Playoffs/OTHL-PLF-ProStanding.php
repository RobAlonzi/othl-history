<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<title>OTHL - Pro Standing</title>
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
<div class="STHSCenter"><h1>Bruins wins the playoff!</h1></div>
<table class="STHSTableFullW"><tr>
<td><b> Round : 1</b></td>
<td><b> Round : 2</b></td>
<td><b> Round : 3</b></td>
<td><b> Round : 4</b></td>
</tr>
<tr>
<td><b>
<a href="OTHL-PLF-ProTeamRoster.html#Panthers">Panthers - 0</a><br />
<a href="OTHL-PLF-ProTeamRoster.html#Bruins">Bruins - 4</a><br />
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
<a href="OTHL-PLF-ProTeamRoster.html#Lightning">Lightning - 4</a><br />
<a href="OTHL-PLF-ProTeamRoster.html#Sabres">Sabres - 3</a><br />
<br /></b></td>
<td><b>
<a href="OTHL-PLF-ProTeamRoster.html#Lightning">Lightning - 3</a><br />
<a href="OTHL-PLF-ProTeamRoster.html#Bruins">Bruins - 4</a><br />
<br /></b></td>
<td><b>
<br /></b></td>
<td><b>
<br /></b></td>
</tr>
<tr>
<td><b>
<a href="OTHL-PLF-ProTeamRoster.html#MapleLeafs">Maple Leafs - 0</a><br />
<a href="OTHL-PLF-ProTeamRoster.html#Flyers">Flyers - 4</a><br />
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
<a href="OTHL-PLF-ProTeamRoster.html#Islanders">Islanders - 4</a><br />
<a href="OTHL-PLF-ProTeamRoster.html#BlueJackets">Blue Jackets - 2</a><br />
<br /></b></td>
<td><b>
<a href="OTHL-PLF-ProTeamRoster.html#Islanders">Islanders - 1</a><br />
<a href="OTHL-PLF-ProTeamRoster.html#Flyers">Flyers - 4</a><br />
<br /></b></td>
<td><b>
<a href="OTHL-PLF-ProTeamRoster.html#Flyers">Flyers - 3</a><br />
<a href="OTHL-PLF-ProTeamRoster.html#Bruins">Bruins - 4</a><br />
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
<a href="OTHL-PLF-ProTeamRoster.html#Bruins">Bruins - 4</a><br />
<a href="OTHL-PLF-ProTeamRoster.html#Canucks">Canucks - 0</a><br />
<br /></b></td>
</tr>
<tr>
<td><b>
<a href="OTHL-PLF-ProTeamRoster.html#Oilers">Oilers - 4</a><br />
<a href="OTHL-PLF-ProTeamRoster.html#Blackhawks">Blackhawks - 0</a><br />
<br /></b></td>
<td><b>
<a href="OTHL-PLF-ProTeamRoster.html#Oilers">Oilers - 3</a><br />
<a href="OTHL-PLF-ProTeamRoster.html#Predators">Predators - 4</a><br />
<br /></b></td>
<td><b>
<a href="OTHL-PLF-ProTeamRoster.html#Predators">Predators - 0</a><br />
<a href="OTHL-PLF-ProTeamRoster.html#Canucks">Canucks - 4</a><br />
<br /></b></td>
<td><b>
<br /></b></td>
</tr>
<tr>
<td><b>
<a href="OTHL-PLF-ProTeamRoster.html#Predators">Predators - 4</a><br />
<a href="OTHL-PLF-ProTeamRoster.html#Stars">Stars - 3</a><br />
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
<a href="OTHL-PLF-ProTeamRoster.html#Ducks">Ducks - 4</a><br />
<a href="OTHL-PLF-ProTeamRoster.html#Flames">Flames - 3</a><br />
<br /></b></td>
<td><b>
<a href="OTHL-PLF-ProTeamRoster.html#Ducks">Ducks - 0</a><br />
<a href="OTHL-PLF-ProTeamRoster.html#Canucks">Canucks - 4</a><br />
<br /></b></td>
<td><b>
<br /></b></td>
<td><b>
<br /></b></td>
</tr>
<tr>
<td><b>
<a href="OTHL-PLF-ProTeamRoster.html#Canucks">Canucks - 4</a><br />
<a href="OTHL-PLF-ProTeamRoster.html#Coyotes">Coyotes - 1</a><br />
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
