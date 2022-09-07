<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<title>OTHL - Today Games</title>
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
<h3 class="STHSTodayGame_Today3Star">Today 3 Star : <br />Pro : 1 - Carey Price (Predators) / 2 - Logan Couture (Predators) / 3 - Oscar Klefbom (Predators)<br />Farm : 1 - Joseph Blandisi (IceHogs) / 2 - Austin Czarnik (IceHogs) / 3 - Adam Erne (IceHogs)</h3>
<table class="STHSTodayGame_MainTable">
<tr><td class="STHSTodayGame_GameOverall">
<table class="STHSTodayGame_GameTitle"><tr><td class="STHSTodayGame_GameNumber"><h3>Pro Game 105</h3></td><td class="STHSTodayGame_Boxscore"><h3><a href="OTHL-PLF-105.html">Boxscore</a></h3></td></tr></table><table class="STHSTodayGame_GameData">
<tr><td class="STHSTodayGame_TeamName"><h3>Predators</h3></td><td class="STHSTodayGame_TeamScore"><h3><span style="color:red">3</span></h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">Logan Couture(8), Reilly Smith(11), Oscar Klefbom(4)<br /><br />
Carey Price (NSH), 34 saves from 35 shots - (0.971), W, 16-9-2, 60:00 minutes<br /><br /></td></tr>
<tr><td class="STHSTodayGame_TeamName"><h3>Sabres</h3></td><td class="STHSTodayGame_TeamScore"><h3>1</h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">Anze Kopitar(10)<br /><br />
Linus Ullmark (BUF), 1 saves from 1 shots - (1.000), 2:19 minutes<br />Thomas Greiss (BUF), 28 saves from 31 shots - (0.903), L, 15-5-2, 57:41 minutes<br /><br /></td></tr></table>

<hr class="STHSTodayGame_HR"><br /></td>
<td></td></tr></table>
<h1 class="STHSTomorrowGame_TomorrowGame">Tomorrow's Games</h1>
End of Season
<table class="STHSSchedule_MainTable"><tr><td class="STHSSchedule_TitleGameNumber"><b>Game #</b></td><td class="STHSSchedule_TitleProSchedule"><b>Pro Schedule</b></td>
<td class="STHSSchedule_TitleGameNumber"><b>Game #</b></td><td class="STHSSchedule_TitleFarmSchedule"><b>Farm Schedule</b></td>
</tr>
<tr><td colspan="4" class="STHSTomorrowGame_GameDay"><b>Day 50</b></td></tr>
<tr><td colspan="2" class="STHSAlignTop">
<table class="STHSTomorrowGame_SubTable">
</table>
</td><td colspan="2" class="STHSAlignTop">
<table class="STHSTomorrowGame_SubTable">
</table>
</td></tr>
</table>
<?php include "Footer.php";?>
