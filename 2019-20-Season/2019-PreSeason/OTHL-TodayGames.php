<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<title>OTHL - Today Games</title>
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
<h3 class="STHSTodayGame_Today3Star">Today 3 Star : <br />Pro : 1 - Zach Parise (Stars) / 2 - Chris Tierney (Rangers) / 3 - Brandon Davidson (Stars)<br />Farm : 1 - Max Jones (Thunderbirds) / 2 - Joshua Ho-Sang (IceHogs) / 3 - Dominik Kahun (Checkers)</h3>
<table class="STHSTodayGame_MainTable">
<tr><td class="STHSTodayGame_GameOverall">
<table class="STHSTodayGame_GameTitle"><tr><td class="STHSTodayGame_GameNumber"><h3>Pro Game 107</h3></td><td class="STHSTodayGame_Boxscore"><h3><a href="OTHL-107.html">Boxscore</a></h3></td></tr></table><table class="STHSTodayGame_GameData">
<tr><td class="STHSTodayGame_TeamName"><h3>Hurricanes</h3></td><td class="STHSTodayGame_TeamScore"><h3>1</h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">
Paul Stastny(3)<br /><br />
Jonathan Bernier (CAR), 13 saves from 17 shots - (0.765), L, 1-6-1, 29:50 minutes<br />Pavel Francouz (CAR), 10 saves from 10 shots - (1.000), 30:10 minutes<br /><br /></td></tr>
<tr><td class="STHSTodayGame_TeamName"><h3>Ducks</h3></td><td class="STHSTodayGame_TeamScore"><h3><span style="color:red">4</span></h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">Travis Zajac(6), Jake Guentzel(4), Alex Chiasson(2,3)<br /><br />
Mike Smith (ANH), 27 saves from 28 shots - (0.964), W, 4-1-2, 60:00 minutes<br /><br /></td></tr></table>

<hr class="STHSTodayGame_HR"><br /></td>
<td class="STHSTodayGame_GameOverall">
<table class="STHSTodayGame_GameTitle"><tr><td class="STHSTodayGame_GameNumber"><h3>Farm Game 107</h3></td><td class="STHSTodayGame_Boxscore"><h3><a href="OTHL-Farm-107.html">Boxscore</a></h3></td></tr></table><table class="STHSTodayGame_GameData">
<tr><td class="STHSTodayGame_TeamName"><h3>Checkers</h3></td><td class="STHSTodayGame_TeamScore"><h3><span style="color:red">5</span></h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">Dominik Kahun(7), Brett Sutter(2), Casey Mittelstadt(6,7), Michael Mersch(4)<br /><br />
Kevin Boyle (CHR), 13 saves from 16 shots - (0.813), W, 3-0-0, 60:00 minutes<br /><br /></td></tr>
<tr><td class="STHSTodayGame_TeamName"><h3>Gulls</h3></td><td class="STHSTodayGame_TeamScore"><h3>3</h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">Unknown Player(1), Morgan Klimchuk(8), Warren Foegele(4)<br /><br />
Tristan Jarry (SDG), 5 saves from 9 shots - (0.556), L, 5-3-0, 23:45 minutes<br />Unknown Goalie (SDG), 15 saves from 16 shots - (0.938), 36:15 minutes<br /><br /></td></tr></table>

<hr class="STHSTodayGame_HR"><br /></td></tr>
<tr><td class="STHSTodayGame_GameOverall">
<table class="STHSTodayGame_GameTitle"><tr><td class="STHSTodayGame_GameNumber"><h3>Pro Game 108</h3></td><td class="STHSTodayGame_Boxscore"><h3><a href="OTHL-108.html">Boxscore</a></h3></td></tr></table><table class="STHSTodayGame_GameData">
<tr><td class="STHSTodayGame_TeamName"><h3>Blue Jackets</h3></td><td class="STHSTodayGame_TeamScore"><h3><span style="color:red">4</span></h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">Elias Pettersson(4), Mats Zuccarello(3), Zach Sanford(2), Mark Pysyk(1)<br /><br />
Alex Lyon (CLB), 32 saves from 35 shots - (0.914), W, 1-0-0, 60:00 minutes<br /><br /></td></tr>
<tr><td class="STHSTodayGame_TeamName"><h3>Blackhawks</h3></td><td class="STHSTodayGame_TeamScore"><h3>3</h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">Brian Boyle(1), Sebastian Aho(1), Justin Faulk(3)<br /><br />
Jimmy Howard (CHI), 28 saves from 32 shots - (0.875), L, 1-3-0, 58:48 minutes<br /><br /></td></tr></table>

<hr class="STHSTodayGame_HR"><br /></td>
<td class="STHSTodayGame_GameOverall">
<table class="STHSTodayGame_GameTitle"><tr><td class="STHSTodayGame_GameNumber"><h3>Farm Game 108</h3></td><td class="STHSTodayGame_Boxscore"><h3><a href="OTHL-Farm-108.html">Boxscore</a></h3></td></tr></table><table class="STHSTodayGame_GameData">
<tr><td class="STHSTodayGame_TeamName"><h3>Monsters</h3></td><td class="STHSTodayGame_TeamScore"><h3>2</h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">
Patrick Russell(4), Ashton Sautner(4)<br /><br />
Brad Thiessen (CLE), 15 saves from 19 shots - (0.789), L, 3-4-0, 40:46 minutes<br />Adam Wilcox (CLE), 9 saves from 10 shots - (0.900), 19:14 minutes<br /><br /></td></tr>
<tr><td class="STHSTodayGame_TeamName"><h3>IceHogs</h3></td><td class="STHSTodayGame_TeamScore"><h3><span style="color:red">5</span></h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">Peter Cehlarik(4), Valentin Zykov(4,5), Joshua Ho-Sang(5), Logan Brown(6)<br /><br />
Al Montoya (RCK), 14 saves from 16 shots - (0.875), W, 5-0-0, 60:00 minutes<br /><br /></td></tr></table>

<hr class="STHSTodayGame_HR"><br /></td></tr>
<tr><td class="STHSTodayGame_GameOverall">
<table class="STHSTodayGame_GameTitle"><tr><td class="STHSTodayGame_GameNumber"><h3>Pro Game 109 - End in Shootout</h3></td><td class="STHSTodayGame_Boxscore"><h3><a href="OTHL-109.html">Boxscore</a></h3></td></tr></table><table class="STHSTodayGame_GameData">
<tr><td class="STHSTodayGame_TeamName"><h3>Red Wings</h3></td><td class="STHSTodayGame_TeamScore"><h3><span style="color:red">4</span></h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">Connor McDavid(3), Matt Duchene(2), Brayden Point(3)<br /><br />
Marcus Hogberg (DET), 26 saves from 29 shots - (0.897), W, 1-0-0, 65:00 minutes<br /><br /></td></tr>
<tr><td class="STHSTodayGame_TeamName"><h3>Oilers</h3></td><td class="STHSTodayGame_TeamScore"><h3>3</h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">Blake Wheeler(5), Derek Stepan(1), Mikael Granlund(3)<br /><br />
John Gibson (EDM), 25 saves from 28 shots - (0.893), OTL, 3-2-3, 65:00 minutes<br /><br /></td></tr></table>

<hr class="STHSTodayGame_HR"><br /></td>
<td class="STHSTodayGame_GameOverall">
<table class="STHSTodayGame_GameTitle"><tr><td class="STHSTodayGame_GameNumber"><h3>Farm Game 109 - End in Shootout</h3></td><td class="STHSTodayGame_Boxscore"><h3><a href="OTHL-Farm-109.html">Boxscore</a></h3></td></tr></table><table class="STHSTodayGame_GameData">
<tr><td class="STHSTodayGame_TeamName"><h3>Griffins</h3></td><td class="STHSTodayGame_TeamScore"><h3>2</h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">
Austin Wagner(3), Martin Frk(3)<br /><br />
Aaron Dell (GRP), 38 saves from 40 shots - (0.950), OTL, 0-1-1, 65:00 minutes<br /><br /></td></tr>
<tr><td class="STHSTodayGame_TeamName"><h3>Condors</h3></td><td class="STHSTodayGame_TeamScore"><h3><span style="color:red">3</span></h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">Luke Kunin(3), John Hayden(2)<br /><br />
Ryan Miller (BKR), 12 saves from 14 shots - (0.857), W, 1-0-0, 65:00 minutes<br /><br /></td></tr></table>

<hr class="STHSTodayGame_HR"><br /></td></tr>
<tr><td class="STHSTodayGame_GameOverall">
<table class="STHSTodayGame_GameTitle"><tr><td class="STHSTodayGame_GameNumber"><h3>Pro Game 110</h3></td><td class="STHSTodayGame_Boxscore"><h3><a href="OTHL-110.html">Boxscore</a></h3></td></tr></table><table class="STHSTodayGame_GameData">
<tr><td class="STHSTodayGame_TeamName"><h3>Avalanche</h3></td><td class="STHSTodayGame_TeamScore"><h3>1</h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">
Josh Archibald(1)<br /><br />
Anders Nilsson (COL), 21 saves from 23 shots - (0.913), L, 0-2-0, 59:06 minutes<br /><br /></td></tr>
<tr><td class="STHSTodayGame_TeamName"><h3>Panthers</h3></td><td class="STHSTodayGame_TeamScore"><h3><span style="color:red">2</span></h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">Carl Soderberg(3), Xavier Ouellet(1)<br /><br />
Anton Khudobin (FLA), 29 saves from 30 shots - (0.967), W, 4-1-1, 60:00 minutes<br /><br /></td></tr></table>

<hr class="STHSTodayGame_HR"><br /></td>
<td class="STHSTodayGame_GameOverall">
<table class="STHSTodayGame_GameTitle"><tr><td class="STHSTodayGame_GameNumber"><h3>Farm Game 110</h3></td><td class="STHSTodayGame_Boxscore"><h3><a href="OTHL-Farm-110.html">Boxscore</a></h3></td></tr></table><table class="STHSTodayGame_GameData">
<tr><td class="STHSTodayGame_TeamName"><h3>Eagles</h3></td><td class="STHSTodayGame_TeamScore"><h3>2</h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">
Unknown Player(1,2)<br /><br />
Unknown Goalie (COL), 7 saves from 11 shots - (0.636), L, 0-1-0, 18:36 minutes<br />Unknown Goalie (COL), 17 saves from 20 shots - (0.850), 41:24 minutes<br /><br /></td></tr>
<tr><td class="STHSTodayGame_TeamName"><h3>Thunderbirds</h3></td><td class="STHSTodayGame_TeamScore"><h3><span style="color:red">7</span></h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">Max Jones(5,6,7), Filip Chlapik(4), Luke Johnson(4), Sonny Milano(4), C.J. Smith(2)<br /><br />
Unknown Goalie (SPR), 18 saves from 20 shots - (0.900), W, 1-0-0, 60:00 minutes<br /><br /></td></tr></table>

<hr class="STHSTodayGame_HR"><br /></td></tr>
<tr><td class="STHSTodayGame_GameOverall">
<table class="STHSTodayGame_GameTitle"><tr><td class="STHSTodayGame_GameNumber"><h3>Pro Game 111</h3></td><td class="STHSTodayGame_Boxscore"><h3><a href="OTHL-111.html">Boxscore</a></h3></td></tr></table><table class="STHSTodayGame_GameData">
<tr><td class="STHSTodayGame_TeamName"><h3>Stars</h3></td><td class="STHSTodayGame_TeamScore"><h3><span style="color:red">4</span></h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">Zach Parise(4,5), Paul Byron(3), Brandon Davidson(1)<br /><br />
Cam Talbot (DAL), 27 saves from 29 shots - (0.931), W, 1-1-0, 60:00 minutes<br /><br /></td></tr>
<tr><td class="STHSTodayGame_TeamName"><h3>Penguins</h3></td><td class="STHSTodayGame_TeamScore"><h3>2</h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">Micheal Ferland(2), Andrew Shaw(2)<br /><br />
Anton Forsberg (PIT), 31 saves from 34 shots - (0.912), L, 0-2-0, 59:29 minutes<br /><br /></td></tr></table>

<hr class="STHSTodayGame_HR"><br /></td>
<td class="STHSTodayGame_GameOverall">
<table class="STHSTodayGame_GameTitle"><tr><td class="STHSTodayGame_GameNumber"><h3>Farm Game 111</h3></td><td class="STHSTodayGame_Boxscore"><h3><a href="OTHL-Farm-111.html">Boxscore</a></h3></td></tr></table><table class="STHSTodayGame_GameData">
<tr><td class="STHSTodayGame_TeamName"><h3>Stars</h3></td><td class="STHSTodayGame_TeamScore"><h3>2</h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">
Andrew Agozzino(3), Phil Varone(2)<br /><br />
Jean-Francois Berube (TEX), 46 saves from 49 shots - (0.939), L, 3-6-0, 60:00 minutes<br /><br /></td></tr>
<tr><td class="STHSTodayGame_TeamName"><h3>Penguins</h3></td><td class="STHSTodayGame_TeamScore"><h3><span style="color:red">3</span></h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">Unknown Player(1), Alexandre Fortin(2), Roland McKeown(1)<br /><br />
Tom McCollum (WBS), 26 saves from 28 shots - (0.929), W, 2-0-0, 60:00 minutes<br /><br /></td></tr></table>

<hr class="STHSTodayGame_HR"><br /></td></tr>
<tr><td class="STHSTodayGame_GameOverall">
<table class="STHSTodayGame_GameTitle"><tr><td class="STHSTodayGame_GameNumber"><h3>Pro Game 112</h3></td><td class="STHSTodayGame_Boxscore"><h3><a href="OTHL-112.html">Boxscore</a></h3></td></tr></table><table class="STHSTodayGame_GameData">
<tr><td class="STHSTodayGame_TeamName"><h3>Rangers</h3></td><td class="STHSTodayGame_TeamScore"><h3><span style="color:red">3</span></h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">Chris Tierney(2,3), Gabriel Landeskog(1)<br /><br />
Marc-Andre Fleury (NYR), 30 saves from 31 shots - (0.968), W, 3-2-0, 60:00 minutes<br /><br /></td></tr>
<tr><td class="STHSTodayGame_TeamName"><h3>Capitals</h3></td><td class="STHSTodayGame_TeamScore"><h3>1</h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">Alex Iafallo(3)<br /><br />
Petr Mrazek (WSH), 21 saves from 24 shots - (0.875), L, 5-3-1, 60:00 minutes<br /><br /></td></tr></table>

<hr class="STHSTodayGame_HR"><br /></td>
<td class="STHSTodayGame_GameOverall">
<table class="STHSTodayGame_GameTitle"><tr><td class="STHSTodayGame_GameNumber"><h3>Farm Game 112</h3></td><td class="STHSTodayGame_Boxscore"><h3><a href="OTHL-Farm-112.html">Boxscore</a></h3></td></tr></table><table class="STHSTodayGame_GameData">
<tr><td class="STHSTodayGame_TeamName"><h3>Wolf Pack</h3></td><td class="STHSTodayGame_TeamScore"><h3>3</h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">
Unknown Player(1,2,3)<br /><br />
Unknown Goalie (HFD), 50 saves from 56 shots - (0.893), L, 0-1-0, 60:00 minutes<br /><br /></td></tr>
<tr><td class="STHSTodayGame_TeamName"><h3>Bears</h3></td><td class="STHSTodayGame_TeamScore"><h3><span style="color:red">6</span></h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">Unknown Player(1,2,3,4,5,6)<br /><br />
Unknown Goalie (HER), 57 saves from 60 shots - (0.950), W, 1-0-0, 60:00 minutes<br /><br /></td></tr></table>

<hr class="STHSTodayGame_HR"><br /></td></tr>
</table>
<h1 class="STHSTomorrowGame_TomorrowGame">Tomorrow's Games</h1>
<table class="STHSSchedule_MainTable"><tr><td class="STHSSchedule_TitleGameNumber"><b>Game #</b></td><td class="STHSSchedule_TitleProSchedule"><b>Pro Schedule</b></td>
<td class="STHSSchedule_TitleGameNumber"><b>Game #</b></td><td class="STHSSchedule_TitleFarmSchedule"><b>Farm Schedule</b></td>
</tr>
<tr><td colspan="4" class="STHSTomorrowGame_GameDay"><b>Day 18</b></td></tr>
<tr><td colspan="2" class="STHSAlignTop">
<table class="STHSTomorrowGame_SubTable">
<tr><td class="STHSTomorrowGame_GameNumber">113</td><td class="STHSTomorrowGame_TeamInfo">
Senators (4-2-0) -- Last 10 Game : 4-2-0 - L1<br />Leaders - P: David Pastrnak - 5 | G: David Pastrnak - 3 | A: Ryan McDonagh - 3<br />Projected Goalies: Andrei Vasilevskiy<br /><strong>VS</strong><br />Coyotes (3-2-1) -- Last 10 Game : 3-2-1 - W1<br />Leaders - P: Mika Zibanejad - 9 | G: Oskar Sundqvist - 4 | A: Mika Zibanejad - 6<br />Projected Goalies: Tuukka Rask<hr class="STHSTodayGame_HR"></td></tr>
<tr><td class="STHSTomorrowGame_GameNumber">114</td><td class="STHSTomorrowGame_TeamInfo">
Islanders (7-0-0) -- Last 10 Game : 7-0-0 - W2<br />Leaders - P: Ryan O'Reilly - 8 | G: Alexander Radulov - 4 | A: Ryan O'Reilly - 4<br />Projected Goalies: Michael Hutchinson<br /><strong>VS</strong><br />Blue Jackets (3-3-1) -- Last 10 Game : 3-3-1 - W2<br />Leaders - P: Mats Zuccarello - 8 | G: Elias Pettersson - 4 | A: Mats Zuccarello - 5<br />Projected Goalies: Alex Lyon<hr class="STHSTodayGame_HR"></td></tr>
<tr><td class="STHSTomorrowGame_GameNumber">115</td><td class="STHSTomorrowGame_TeamInfo">
Flames (7-1-0) -- Last 10 Game : 7-1-0 - W2<br />Leaders - P: Taylor Hall - 10 | G: Viktor Arvidsson - 5 | A: Erik Karlsson - 8<br />Projected Goalies: Pekka Rinne<br /><strong>VS</strong><br />Kings (2-5-0) -- Last 10 Game : 2-5-0 - L1<br />Leaders - P: Jonathan Huberdeau - 5 | G: Jonathan Huberdeau - 3 | A: P.K. Subban - 4<br />Projected Goalies: Devan Dubnyk<hr class="STHSTodayGame_HR"></td></tr>
<tr><td class="STHSTomorrowGame_GameNumber">116</td><td class="STHSTomorrowGame_TeamInfo">
Canucks (6-0-0) -- Last 10 Game : 6-0-0 - W1<br />Leaders - P: Tyler Myers - 8 | G: Auston Matthews - 3 | A: Tyler Myers - 8<br />Projected Goalies: Henrik Lundqvist<br /><strong>VS</strong><br />Devils (4-3-0) -- Last 10 Game : 4-3-0 - L1<br />Leaders - P: William Karlsson - 6 | G: William Karlsson - 4 | A: Chris Tanev - 4<br />Projected Goalies: Robin Lehner<hr class="STHSTodayGame_HR"></td></tr>
<tr><td class="STHSTomorrowGame_GameNumber">117</td><td class="STHSTomorrowGame_TeamInfo">
Panthers (5-1-1) -- Last 10 Game : 5-1-1 - W1<br />Leaders - P: Tyler Bozak - 7 | G: Tyler Bozak - 4 | A: Brent Burns - 5<br />Projected Goalies: Anton Khudobin<br /><strong>VS</strong><br />Predators (5-2-0) -- Last 10 Game : 5-2-0 - L1<br />Leaders - P: Andreas Athanasiou - 5 | G: Alex Tuch - 3 | A: Jordan Staal - 4<br />Projected Goalies: Carey Price<hr class="STHSTodayGame_HR"></td></tr>
<tr><td class="STHSTomorrowGame_GameNumber">118</td><td class="STHSTomorrowGame_TeamInfo">
Stars (3-6-0) -- Last 10 Game : 3-6-0 - W1<br />Leaders - P: Patrice Bergeron - 9 | G: Zach Parise - 5 | A: Patrice Bergeron - 6<br />Projected Goalies: Cam Talbot<br /><strong>VS</strong><br />Flyers (1-4-0) -- Last 10 Game : 1-4-0 - L3<br />Leaders - P: Brock Nelson - 3 | G: Brock Nelson - 3 | A: Alexander Edler - 2<br />Projected Goalies: Jaroslav Halak<hr class="STHSTodayGame_HR"></td></tr>
<tr><td class="STHSTomorrowGame_GameNumber">119</td><td class="STHSTomorrowGame_TeamInfo">
Golden Knights (3-4-1) -- Last 10 Game : 3-4-1 - W1<br />Leaders - P: Craig Smith - 6 | G: Craig Smith - 4 | A: Nolan Patrick - 4<br />Projected Goalies: Jack Campbell<br /><strong>VS</strong><br />Penguins (1-7-0) -- Last 10 Game : 1-7-0 - L1<br />Leaders - P: Cam Fowler - 7 | G: Evan Rodrigues - 3 | A: Cam Fowler - 5<br />Projected Goalies: Anton Forsberg<hr class="STHSTodayGame_HR"></td></tr>
<tr><td class="STHSTomorrowGame_GameNumber">120</td><td class="STHSTomorrowGame_TeamInfo">
Sabres (4-2-2) -- Last 10 Game : 4-2-2 - W1<br />Leaders - P: Sidney Crosby - 7 | G: Anze Kopitar - 4 | A: Sidney Crosby - 5<br />Projected Goalies: Thomas Greiss<br /><strong>VS</strong><br />Sharks (5-1-1) -- Last 10 Game : 5-1-1 - W1<br />Leaders - P: Evgeny Kuznetsov - 12 | G: Filip Forsberg - 5 | A: Evgeny Kuznetsov - 8<br />Projected Goalies: Darcy Kuemper<hr class="STHSTodayGame_HR"></td></tr>
<tr><td class="STHSTomorrowGame_GameNumber">121</td><td class="STHSTomorrowGame_TeamInfo">
Canadiens (5-0-2) -- Last 10 Game : 5-0-2 - W1<br />Leaders - P: Jeff Carter - 8 | G: Jeff Carter - 5 | A: Alex DeBrincat - 5<br />Projected Goalies: Ben Bishop<br /><strong>VS</strong><br />Blues (2-3-2) -- Last 10 Game : 2-3-2 - L2<br />Leaders - P: Tyler Ennis - 8 | G: Anthony Beauvillier - 4 | A: Tyler Ennis - 8<br />Projected Goalies: Louis Domingue<hr class="STHSTodayGame_HR"></td></tr>
<tr><td class="STHSTomorrowGame_GameNumber">122</td><td class="STHSTomorrowGame_TeamInfo">
Avalanche (2-5-0) -- Last 10 Game : 2-5-0 - L2<br />Leaders - P: Mikko Koivu - 7 | G: Mikko Koivu - 3 | A: Patrick Kane - 5<br />Projected Goalies: Jake Allen<br /><strong>VS</strong><br />Lightning (3-4-0) -- Last 10 Game : 3-4-0 - L1<br />Leaders - P: Esa Lindell - 6 | G: Derick Brassard - 3 | A: Esa Lindell - 4<br />Projected Goalies: Brian Elliott<hr class="STHSTodayGame_HR"></td></tr>
<tr><td class="STHSTomorrowGame_GameNumber">123</td><td class="STHSTomorrowGame_TeamInfo">
Bruins (4-2-1) -- Last 10 Game : 4-2-1 - W1<br />Leaders - P: Sean Couturier - 6 | G: Sean Couturier - 4 | A: Ben Harpur - 5<br />Projected Goalies: Braden Holtby<br /><strong>VS</strong><br />Maple Leafs (2-6-0) -- Last 10 Game : 2-6-0 - L6<br />Leaders - P: Casey Cizikas - 8 | G: Casey Cizikas - 4 | A: Casey Cizikas - 4<br />Projected Goalies: Frederik Andersen<hr class="STHSTodayGame_HR"></td></tr>
</table>
</td><td colspan="2" class="STHSAlignTop">
<table class="STHSTomorrowGame_SubTable">
<tr><td class="STHSTomorrowGame_GameNumber">113</td><td class="STHSTomorrowGame_TeamInfo">
Senators (1-4-1) -- Last 10 Game : 1-4-1 - L1<br />Leaders - P: Frank Corrado - 7 | G: Frank Corrado - 3 | A: Frank Corrado - 4<br /><strong>VS</strong><br />Roadrunners (0-5-1) -- Last 10 Game : 0-5-1 - OTL1<br />Leaders - P: Nate Thompson - 0 | G: Nate Thompson - 0 | A: Nate Thompson - 0<hr class="STHSTodayGame_HR"></td></tr>
<tr><td class="STHSTomorrowGame_GameNumber">114</td><td class="STHSTomorrowGame_TeamInfo">
Sound Tigers (2-5-0) -- Last 10 Game : 2-5-0 - L1<br />Leaders - P: Alan Quine - 9 | G: Alan Quine - 8 | A: Alan Quine - 1<br /><strong>VS</strong><br />Monsters (3-4-0) -- Last 10 Game : 3-4-0 - L1<br />Leaders - P: Ashton Sautner - 15 | G: Jack Rodewald - 6 | A: Ashton Sautner - 11<br />Projected Goalies: Brad Thiessen<hr class="STHSTodayGame_HR"></td></tr>
<tr><td class="STHSTomorrowGame_GameNumber">115</td><td class="STHSTomorrowGame_TeamInfo">
Heat (8-0-0) -- Last 10 Game : 8-0-0 - W8<br />Leaders - P: Anthony Duclair - 26 | G: Anthony Duclair - 12 | A: Taro Hirose - 17<br />Projected Goalies: Oscar Dansk<br /><strong>VS</strong><br />Reign (1-5-1) -- Last 10 Game : 1-5-1 - L1<br />Leaders - P: Jordan Greenway - 0 | G: Jordan Greenway - 0 | A: Jordan Greenway - 0<hr class="STHSTodayGame_HR"></td></tr>
<tr><td class="STHSTomorrowGame_GameNumber">116</td><td class="STHSTomorrowGame_TeamInfo">
Comets (4-2-0) -- Last 10 Game : 4-2-0 - W4<br />Leaders - P: Rudolfs Balcers - 12 | G: Rudolfs Balcers - 9 | A: Valeri Nichushkin - 8<br />Projected Goalies: Landon Bow<br /><strong>VS</strong><br />Devils (0-7-0) -- Last 10 Game : 0-7-0 - L7<br />Leaders - P: Ryan Getzlaf - 0 | G: Ryan Getzlaf - 0 | A: Ryan Getzlaf - 0<hr class="STHSTodayGame_HR"></td></tr>
<tr><td class="STHSTomorrowGame_GameNumber">117</td><td class="STHSTomorrowGame_TeamInfo">
Thunderbirds (3-4-0) -- Last 10 Game : 3-4-0 - W3<br />Leaders - P: Brendan Guhle - 12 | G: Max Jones - 7 | A: Brendan Guhle - 10<br /><strong>VS</strong><br />Admirals (3-3-1) -- Last 10 Game : 3-3-1 - OTW1<br />Leaders - P: Jordan Staal - 0 | G: Jordan Staal - 0 | A: Jordan Staal - 0<hr class="STHSTodayGame_HR"></td></tr>
<tr><td class="STHSTomorrowGame_GameNumber">118</td><td class="STHSTomorrowGame_TeamInfo">
Stars (3-6-0) -- Last 10 Game : 3-6-0 - L3<br />Leaders - P: Andrew Agozzino - 6 | G: Andrew Agozzino - 3 | A: Nicolas Deslauriers - 4<br />Projected Goalies: Jean-Francois Berube<br /><strong>VS</strong><br />Phantoms (1-4-0) -- Last 10 Game : 1-4-0 - L3<br />Leaders - P: Alex Broadhurst - 8 | G: Alex Broadhurst - 7 | A: Alex Broadhurst - 1<hr class="STHSTodayGame_HR"></td></tr>
<tr><td class="STHSTomorrowGame_GameNumber">119</td><td class="STHSTomorrowGame_TeamInfo">
Wolves (7-1-0) -- Last 10 Game : 7-1-0 - W3<br />Leaders - P: Andrei Svechnikov - 18 | G: Andrei Svechnikov - 11 | A: Drake Batherson - 12<br />Projected Goalies: MacKenzie Blackwood<br /><strong>VS</strong><br />Penguins (3-5-0) -- Last 10 Game : 3-5-0 - W2<br />Leaders - P: Roland McKeown - 4 | G: Alexandre Fortin - 2 | A: Roland McKeown - 3<br />Projected Goalies: Tom McCollum<hr class="STHSTodayGame_HR"></td></tr>
<tr><td class="STHSTomorrowGame_GameNumber">120</td><td class="STHSTomorrowGame_TeamInfo">
 Americans (8-0-0) -- Last 10 Game : 8-0-0 - W4<br />Leaders - P: Trevor Smith - 15 | G: Trevor Smith - 8 | A: Ross Johnston - 9<br />Projected Goalies: Ken Appleby<br /><strong>VS</strong><br />Barracudas (1-5-1) -- Last 10 Game : 1-5-1 - L3<br />Leaders - P: Joseph LaBate - 2 | G: Jimmy Schuldt - 1 | A: Joseph LaBate - 2<br />Projected Goalies: Michal Neuvirth<hr class="STHSTodayGame_HR"></td></tr>
<tr><td class="STHSTomorrowGame_GameNumber">121</td><td class="STHSTomorrowGame_TeamInfo">
Rocket (5-1-1) -- Last 10 Game : 5-1-1 - W4<br />Leaders - P: Curtis McKenzie - 16 | G: Curtis McKenzie - 8 | A: Curtis McKenzie - 8<br />Projected Goalies: Alex Nedeljkovic<br /><strong>VS</strong><br />Rampage  (3-4-0) -- Last 10 Game : 3-4-0 - L3<br />Leaders - P: Luke Gazdic - 11 | G: Luke Gazdic - 8 | A: Luke Gazdic - 3<hr class="STHSTodayGame_HR"></td></tr>
<tr><td class="STHSTomorrowGame_GameNumber">122</td><td class="STHSTomorrowGame_TeamInfo">
Eagles (2-5-0) -- Last 10 Game : 2-5-0 - L3<br />Leaders - P: Mike Vecchione - 0 | G: Mike Vecchione - 0 | A: Mike Vecchione - 0<br /><strong>VS</strong><br />Crunch (4-2-1) -- Last 10 Game : 4-2-1 - SOL1<br />Leaders - P: Lawrence Pilut - 11 | G: Liam O'Brien - 5 | A: Lawrence Pilut - 8<br />Projected Goalies: Francois Brassard<hr class="STHSTodayGame_HR"></td></tr>
<tr><td class="STHSTomorrowGame_GameNumber">123</td><td class="STHSTomorrowGame_TeamInfo">
Bruins (5-2-0) -- Last 10 Game : 5-2-0 - SOW1<br />Leaders - P: Trevor Moore - 16 | G: Trevor Moore - 9 | A: Karson Kuhlman - 12<br />Projected Goalies: Adin Hill<br /><strong>VS</strong><br />Marlies (5-3-0) -- Last 10 Game : 5-3-0 - W3<br />Leaders - P: Jeremy Bracco - 18 | G: Spencer Smallman - 11 | A: Jeremy Bracco - 11<hr class="STHSTodayGame_HR"></td></tr>
</table>
</td></tr>
</table>
<?php include "Footer.php";?>
