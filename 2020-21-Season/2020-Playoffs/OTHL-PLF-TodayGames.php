<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<title>OTHL - Today Games</title>
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
<h3 class="STHSTodayGame_Today3Star">Today 3 Star : <br />Pro : 1 - Nick Bonino (Canucks) / 2 - Sean Couturier (Bruins) / 3 - Ondrej Palat (Bruins)<br />Farm : 1 - Michael McLeod (Comets) / 2 - Joel Farabee (Comets) / 3 - Tyler Steenbergen (Comets)</h3>
<table class="STHSTodayGame_MainTable">
<tr><td class="STHSTodayGame_GameOverall">
<table class="STHSTodayGame_GameTitle"><tr><td class="STHSTodayGame_GameNumber"><h3>Pro Game 102</h3></td><td class="STHSTodayGame_Boxscore"><h3><a href="OTHL-PLF-102.html">Boxscore</a></h3></td></tr></table><table class="STHSTodayGame_GameData">
<tr><td class="STHSTodayGame_TeamName"><h3>Canucks</h3></td><td class="STHSTodayGame_TeamScore"><h3>3</h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">
Nick Bonino(5,6), Yanni Gourde(3)<br /><br />
Jacob Markstrom (VAN), 33 saves from 37 shots - (0.892), L, 10-5-0, 58:35 minutes<br /><br /></td></tr>
<tr><td class="STHSTodayGame_TeamName"><h3>Bruins</h3></td><td class="STHSTodayGame_TeamScore"><h3><span style="color:red">4</span></h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">Blake Coleman(11), Sean Couturier(11), Ondrej Palat(4), Jean-Gabriel Pageau(8)<br /><br />
Pavel Francouz (BOS), 36 saves from 39 shots - (0.923), W, 15-6-0, 60:00 minutes<br /><br /></td></tr></table>

<hr class="STHSTodayGame_HR"><br /></td>
<td class="STHSTodayGame_GameOverall">
<table class="STHSTodayGame_GameTitle"><tr><td class="STHSTodayGame_GameNumber"><h3>Farm Game 102</h3></td><td class="STHSTodayGame_Boxscore"><h3><a href="OTHL-PLF-Farm-102.html">Boxscore</a></h3></td></tr></table><table class="STHSTodayGame_GameData">
<tr><td class="STHSTodayGame_TeamName"><h3>Comets</h3></td><td class="STHSTodayGame_TeamScore"><h3><span style="color:red">5</span></h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">Tyler Steenbergen(4), Joel Farabee(8), Michael McLeod(6), Haydn Fleury(2), Logan O'Connor(6)<br /><br />
Alexandar Georgiev (UTI), 9 saves from 11 shots - (0.818), W, 16-4-1, 60:00 minutes<br /><br /></td></tr>
<tr><td class="STHSTodayGame_TeamName"><h3>Condors</h3></td><td class="STHSTodayGame_TeamScore"><h3>2</h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">Brian Lashoff(3), Patrick Brown(5)<br /><br />
Zane McIntyre (BKR), 10 saves from 14 shots - (0.714), L, 12-4-0, 41:47 minutes<br />Kaden Fulcher (BKR), 2 saves from 3 shots - (0.667), 18:13 minutes<br /><br /></td></tr></table>

<hr class="STHSTodayGame_HR"><br /></td></tr>
</table>
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
