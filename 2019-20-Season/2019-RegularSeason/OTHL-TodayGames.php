<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<title>OTHL - Today Games</title>
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
$Active = 1; /* Show Webpage Top Menu */
include "Menu.php";?>
<h3 class="STHSTodayGame_Today3Star">Today 3 Star : <br />Pro : 1 - Cam Talbot (Stars) / 2 - Tyler Seguin (Panthers) / 3 - Max Pacioretty (Stars)<br />Farm : 1 - Chris Terry (Comets) / 2 - Max Veronneau (IceHogs) / 3 - Brad Malone (Heat)</h3>
<table class="STHSTodayGame_MainTable">
<tr><td class="STHSTodayGame_GameOverall">
<table class="STHSTodayGame_GameTitle"><tr><td class="STHSTodayGame_GameNumber"><h3>Pro Game 1257</h3></td><td class="STHSTodayGame_Boxscore"><h3><a href="OTHL-1257.html">Boxscore</a></h3></td></tr></table><table class="STHSTodayGame_GameData">
<tr><td class="STHSTodayGame_TeamName"><h3>Jets</h3></td><td class="STHSTodayGame_TeamScore"><h3>2</h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">
Jean-Gabriel Pageau(7), Scott Wilson(4)<br /><br />
Matt Murray (WPG), 33 saves from 36 shots - (0.917), L, 22-22-5, 60:00 minutes<br /><br /></td></tr>
<tr><td class="STHSTodayGame_TeamName"><h3>Coyotes</h3></td><td class="STHSTodayGame_TeamScore"><h3><span style="color:red">3</span></h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">Leon Draisaitl(47), Mika Zibanejad(32), Cody Ceci(7)<br /><br />
Tuukka Rask (ARI), 23 saves from 25 shots - (0.920), W, 38-19-6, 60:00 minutes<br /><br /></td></tr></table>

<hr class="STHSTodayGame_HR"><br /></td>
<td class="STHSTodayGame_GameOverall">
<table class="STHSTodayGame_GameTitle"><tr><td class="STHSTodayGame_GameNumber"><h3>Farm Game 1257</h3></td><td class="STHSTodayGame_Boxscore"><h3><a href="OTHL-Farm-1257.html">Boxscore</a></h3></td></tr></table><table class="STHSTodayGame_GameData">
<tr><td class="STHSTodayGame_TeamName"><h3>Moose</h3></td><td class="STHSTodayGame_TeamScore"><h3><span style="color:red">4</span></h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">Brian Strait(17), John Quenneville(37), Eeli Tolvanen(44,45)<br /><br />
Vitek Vanecek (MAN), 22 saves from 25 shots - (0.880), W, 40-31-2, 60:00 minutes<br /><br /></td></tr>
<tr><td class="STHSTodayGame_TeamName"><h3>Roadrunners</h3></td><td class="STHSTodayGame_TeamScore"><h3>3</h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">Griffin Reinhart(15), Matt Hunwick(5), Antti Suomela(9)<br /><br />
Unknown Goalie (TUC), 10 saves from 14 shots - (0.714), L, 0-1-0, 60:00 minutes<br /><br /></td></tr></table>

<hr class="STHSTodayGame_HR"><br /></td></tr>
<tr><td class="STHSTodayGame_GameOverall">
<table class="STHSTodayGame_GameTitle"><tr><td class="STHSTodayGame_GameNumber"><h3>Pro Game 1258</h3></td><td class="STHSTodayGame_Boxscore"><h3><a href="OTHL-1258.html">Boxscore</a></h3></td></tr></table><table class="STHSTodayGame_GameData">
<tr><td class="STHSTodayGame_TeamName"><h3>Hurricanes</h3></td><td class="STHSTodayGame_TeamScore"><h3>2</h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">
Josh Mahura(1), Pontus Aberg(15)<br /><br />
Pavel Francouz (CAR), 42 saves from 47 shots - (0.894), L, 16-31-5, 60:00 minutes<br /><br /></td></tr>
<tr><td class="STHSTodayGame_TeamName"><h3>Bruins</h3></td><td class="STHSTodayGame_TeamScore"><h3><span style="color:red">5</span></h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">Eric Staal(20,21), Bryan Little(10), Sean Couturier(49), Tomas Tatar(26)<br /><br />
Matthew Villalta (BOS), 21 saves from 23 shots - (0.913), W, 1-0-0, 60:00 minutes<br /><br /></td></tr></table>

<hr class="STHSTodayGame_HR"><br /></td>
<td class="STHSTodayGame_GameOverall">
<table class="STHSTodayGame_GameTitle"><tr><td class="STHSTodayGame_GameNumber"><h3>Farm Game 1258</h3></td><td class="STHSTodayGame_Boxscore"><h3><a href="OTHL-Farm-1258.html">Boxscore</a></h3></td></tr></table><table class="STHSTodayGame_GameData">
<tr><td class="STHSTodayGame_TeamName"><h3>Checkers</h3></td><td class="STHSTodayGame_TeamScore"><h3><span style="color:red">5</span></h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">Aleksi Saarela(15), Nick Paul(27,28), Andy Andreoff(60), Michael Mersch(50)<br /><br />
Kevin Boyle (CHR), 13 saves from 15 shots - (0.867), W, 62-10-3, 60:00 minutes<br /><br /></td></tr>
<tr><td class="STHSTodayGame_TeamName"><h3>Bruins</h3></td><td class="STHSTodayGame_TeamScore"><h3>2</h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">Jaycob Megna(3), Chris Bigras(18)<br /><br />
Unknown Goalie (PRO), 31 saves from 36 shots - (0.861), L, 0-1-0, 60:00 minutes<br /><br /></td></tr></table>

<hr class="STHSTodayGame_HR"><br /></td></tr>
<tr><td class="STHSTodayGame_GameOverall">
<table class="STHSTodayGame_GameTitle"><tr><td class="STHSTodayGame_GameNumber"><h3>Pro Game 1259</h3></td><td class="STHSTodayGame_Boxscore"><h3><a href="OTHL-1259.html">Boxscore</a></h3></td></tr></table><table class="STHSTodayGame_GameData">
<tr><td class="STHSTodayGame_TeamName"><h3>Flyers</h3></td><td class="STHSTodayGame_TeamScore"><h3><span style="color:red">4</span></h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">Brett Connolly(13), Brock Nelson(26), Josh Leivo(11,12)<br /><br />
Jaroslav Halak (PHL), 30 saves from 31 shots - (0.968), W, 28-28-6, 60:00 minutes<br /><br /></td></tr>
<tr><td class="STHSTodayGame_TeamName"><h3>Sabres</h3></td><td class="STHSTodayGame_TeamScore"><h3>1</h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">Pavel Buchnevich(18)<br /><br />
Linus Ullmark (BUF), 36 saves from 40 shots - (0.900), L, 9-8-4, 60:00 minutes<br /><br /></td></tr></table>

<hr class="STHSTodayGame_HR"><br /></td>
<td class="STHSTodayGame_GameOverall">
<table class="STHSTodayGame_GameTitle"><tr><td class="STHSTodayGame_GameNumber"><h3>Farm Game 1259</h3></td><td class="STHSTodayGame_Boxscore"><h3><a href="OTHL-Farm-1259.html">Boxscore</a></h3></td></tr></table><table class="STHSTodayGame_GameData">
<tr><td class="STHSTodayGame_TeamName"><h3>Phantoms</h3></td><td class="STHSTodayGame_TeamScore"><h3><span style="color:red">2</span></h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">Brian Gibbons(65), Alex Broadhurst(85)<br /><br />
Ryan Miller (LVP), 23 saves from 24 shots - (0.958), W, 58-14-1, 60:00 minutes<br /><br /></td></tr>
<tr><td class="STHSTodayGame_TeamName"><h3> Americans</h3></td><td class="STHSTodayGame_TeamScore"><h3>1</h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">Turner Elson(44)<br /><br />
Ken Appleby (ROC), 15 saves from 17 shots - (0.882), L, 61-9-7, 59:00 minutes<br /><br /></td></tr></table>

<hr class="STHSTodayGame_HR"><br /></td></tr>
<tr><td class="STHSTodayGame_GameOverall">
<table class="STHSTodayGame_GameTitle"><tr><td class="STHSTodayGame_GameNumber"><h3>Pro Game 1260</h3></td><td class="STHSTodayGame_Boxscore"><h3><a href="OTHL-1260.html">Boxscore</a></h3></td></tr></table><table class="STHSTodayGame_GameData">
<tr><td class="STHSTodayGame_TeamName"><h3>Oilers</h3></td><td class="STHSTodayGame_TeamScore"><h3>2</h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">
Jonathan Toews(28), Mattias Ekholm(8)<br /><br />
Anders Nilsson (EDM), 29 saves from 32 shots - (0.906), L, 10-11-3, 59:16 minutes<br /><br /></td></tr>
<tr><td class="STHSTodayGame_TeamName"><h3>Flames</h3></td><td class="STHSTodayGame_TeamScore"><h3><span style="color:red">3</span></h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">Dylan Larkin(39,40), Taylor Hall(28)<br /><br />
Pekka Rinne (CGY), 30 saves from 32 shots - (0.938), W, 32-16-6, 60:00 minutes<br /><br /></td></tr></table>

<hr class="STHSTodayGame_HR"><br /></td>
<td class="STHSTodayGame_GameOverall">
<table class="STHSTodayGame_GameTitle"><tr><td class="STHSTodayGame_GameNumber"><h3>Farm Game 1260</h3></td><td class="STHSTodayGame_Boxscore"><h3><a href="OTHL-Farm-1260.html">Boxscore</a></h3></td></tr></table><table class="STHSTodayGame_GameData">
<tr><td class="STHSTodayGame_TeamName"><h3>Condors</h3></td><td class="STHSTodayGame_TeamScore"><h3>5</h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">
Nick Schmaltz(47), Ryan Kuffner(23), Dominic Toninato(54), Eric Robinson(35,36)<br /><br />
Scott Wedgewood (BKR), 7 saves from 11 shots - (0.636), 18:12 minutes<br />Zane McIntyre (BKR), 11 saves from 14 shots - (0.786), L, 4-1-0, 41:48 minutes<br /><br /></td></tr>
<tr><td class="STHSTodayGame_TeamName"><h3>Heat</h3></td><td class="STHSTodayGame_TeamScore"><h3><span style="color:red">7</span></h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">Tyrell Goulbourne(27), Blake Hillman(7), Brad Malone(62,63,64), Taro Hirose(41), Samuel Morin(11)<br /><br />
Oscar Dansk (STK), 21 saves from 26 shots - (0.808), W, 72-7-2, 60:00 minutes<br /><br /></td></tr></table>

<hr class="STHSTodayGame_HR"><br /></td></tr>
<tr><td class="STHSTodayGame_GameOverall">
<table class="STHSTodayGame_GameTitle"><tr><td class="STHSTodayGame_GameNumber"><h3>Pro Game 1261</h3></td><td class="STHSTodayGame_Boxscore"><h3><a href="OTHL-1261.html">Boxscore</a></h3></td></tr></table><table class="STHSTodayGame_GameData">
<tr><td class="STHSTodayGame_TeamName"><h3>Blues</h3></td><td class="STHSTodayGame_TeamScore"><h3><span style="color:red">4</span></h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">Jason Pominville(14), Nick Seeler(3,4), Brendan Smith(5)<br /><br />
Jonathan Quick (STL), 24 saves from 26 shots - (0.923), W, 15-31-8, 60:00 minutes<br /><br /></td></tr>
<tr><td class="STHSTodayGame_TeamName"><h3>Avalanche</h3></td><td class="STHSTodayGame_TeamScore"><h3>2</h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">Blake Pietila(9), Travis Boyd(8)<br /><br />
Jake Allen (COL), 27 saves from 31 shots - (0.871), L, 23-25-8, 60:00 minutes<br /><br /></td></tr></table>

<hr class="STHSTodayGame_HR"><br /></td>
<td class="STHSTodayGame_GameOverall">
<table class="STHSTodayGame_GameTitle"><tr><td class="STHSTodayGame_GameNumber"><h3>Farm Game 1261</h3></td><td class="STHSTodayGame_Boxscore"><h3><a href="OTHL-Farm-1261.html">Boxscore</a></h3></td></tr></table><table class="STHSTodayGame_GameData">
<tr><td class="STHSTodayGame_TeamName"><h3>Rampage </h3></td><td class="STHSTodayGame_TeamScore"><h3><span style="color:red">6</span></h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">Unknown Player(1,2,3), Luke Gazdic(89,90,91)<br /><br />
Unknown Goalie (SAR), 58 saves from 61 shots - (0.951), W, 1-0-0, 60:00 minutes<br /><br /></td></tr>
<tr><td class="STHSTodayGame_TeamName"><h3>Eagles</h3></td><td class="STHSTodayGame_TeamScore"><h3>3</h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">Unknown Player(1,2,3)<br /><br />
Unknown Goalie (COL), 17 saves from 22 shots - (0.773), L, 0-1-0, 34:01 minutes<br />Unknown Goalie (COL), 25 saves from 26 shots - (0.962), 25:59 minutes<br /><br /></td></tr></table>

<hr class="STHSTodayGame_HR"><br /></td></tr>
<tr><td class="STHSTodayGame_GameOverall">
<table class="STHSTodayGame_GameTitle"><tr><td class="STHSTodayGame_GameNumber"><h3>Pro Game 1262</h3></td><td class="STHSTodayGame_Boxscore"><h3><a href="OTHL-1262.html">Boxscore</a></h3></td></tr></table><table class="STHSTodayGame_GameData">
<tr><td class="STHSTodayGame_TeamName"><h3>Lightning</h3></td><td class="STHSTodayGame_TeamScore"><h3>2</h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">
Joe Thornton(17), Mike Hoffman(31)<br /><br />
Brian Elliott (TBL), 38 saves from 41 shots - (0.927), L, 10-8-0, 60:00 minutes<br /><br /></td></tr>
<tr><td class="STHSTodayGame_TeamName"><h3>Red Wings</h3></td><td class="STHSTodayGame_TeamScore"><h3><span style="color:red">3</span></h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">Marc Staal(11), Mathieu Joseph(9), Kyle Turris(10)<br /><br />
Sergei Bobrovsky (DET), 30 saves from 32 shots - (0.938), W, 31-23-10, 60:00 minutes<br /><br /></td></tr></table>

<hr class="STHSTodayGame_HR"><br /></td>
<td class="STHSTodayGame_GameOverall">
<table class="STHSTodayGame_GameTitle"><tr><td class="STHSTodayGame_GameNumber"><h3>Farm Game 1262</h3></td><td class="STHSTodayGame_Boxscore"><h3><a href="OTHL-Farm-1262.html">Boxscore</a></h3></td></tr></table><table class="STHSTodayGame_GameData">
<tr><td class="STHSTodayGame_TeamName"><h3>Crunch</h3></td><td class="STHSTodayGame_TeamScore"><h3>0</h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">
<br /><br />
Matt Tomkins (SYR), 14 saves from 16 shots - (0.875), L, 5-2-0, 60:00 minutes<br /><br /></td></tr>
<tr><td class="STHSTodayGame_TeamName"><h3>Griffins</h3></td><td class="STHSTodayGame_TeamScore"><h3><span style="color:red">2</span></h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">Austin Wagner(51,52)<br /><br />
Aaron Dell (GRP), 20 saves from 20 shots - (1.000), W, 42-25-7, 60:00 minutes<br /><br /></td></tr></table>

<hr class="STHSTodayGame_HR"><br /></td></tr>
<tr><td class="STHSTodayGame_GameOverall">
<table class="STHSTodayGame_GameTitle"><tr><td class="STHSTodayGame_GameNumber"><h3>Pro Game 1263</h3></td><td class="STHSTodayGame_Boxscore"><h3><a href="OTHL-1263.html">Boxscore</a></h3></td></tr></table><table class="STHSTodayGame_GameData">
<tr><td class="STHSTodayGame_TeamName"><h3>Capitals</h3></td><td class="STHSTodayGame_TeamScore"><h3>4</h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">
Kyle Palmieri(20,21), Gustav Nyquist(16), Jacob Trouba(14)<br /><br />
Petr Mrazek (WSH), 30 saves from 37 shots - (0.811), L, 23-16-6, 60:00 minutes<br /><br /></td></tr>
<tr><td class="STHSTodayGame_TeamName"><h3>Panthers</h3></td><td class="STHSTodayGame_TeamScore"><h3><span style="color:red">7</span></h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">Lawson Crouse(9), Curtis Lazar(8), Jake Debrusk(14), Tyler Seguin(32,33,34), Carl Soderberg(30)<br /><br />
David Rittich (FLA), 4 saves from 7 shots - (0.571), 13:49 minutes<br />Jake Oettinger (FLA), 24 saves from 25 shots - (0.960), W, 2-2-0, 46:11 minutes<br /><br /></td></tr></table>

<hr class="STHSTodayGame_HR"><br /></td>
<td class="STHSTodayGame_GameOverall">
<table class="STHSTodayGame_GameTitle"><tr><td class="STHSTodayGame_GameNumber"><h3>Farm Game 1263</h3></td><td class="STHSTodayGame_Boxscore"><h3><a href="OTHL-Farm-1263.html">Boxscore</a></h3></td></tr></table><table class="STHSTodayGame_GameData">
<tr><td class="STHSTodayGame_TeamName"><h3>Bears</h3></td><td class="STHSTodayGame_TeamScore"><h3><span style="color:red">7</span></h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">Matthew Peca(35,36,37), Unknown Player(1,2,3), Laurent Dauphin(32)<br /><br />
Spencer Martin (HER), 22 saves from 27 shots - (0.815), W, 44-15-1, 60:00 minutes<br /><br /></td></tr>
<tr><td class="STHSTodayGame_TeamName"><h3>Thunderbirds</h3></td><td class="STHSTodayGame_TeamScore"><h3>5</h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">Luke Johnson(40), Daniel O'Regan(27), Michael Dal Colle(28,29), Cooper Marody(16)<br /><br />
Unknown Goalie (SPR), 9 saves from 13 shots - (0.692), 34:16 minutes<br />Unknown Goalie (SPR), 12 saves from 15 shots - (0.800), L, 0-1-0, 25:44 minutes<br /><br /></td></tr></table>

<hr class="STHSTodayGame_HR"><br /></td></tr>
<tr><td class="STHSTodayGame_GameOverall">
<table class="STHSTodayGame_GameTitle"><tr><td class="STHSTodayGame_GameNumber"><h3>Pro Game 1264</h3></td><td class="STHSTodayGame_Boxscore"><h3><a href="OTHL-1264.html">Boxscore</a></h3></td></tr></table><table class="STHSTodayGame_GameData">
<tr><td class="STHSTodayGame_TeamName"><h3>Stars</h3></td><td class="STHSTodayGame_TeamScore"><h3><span style="color:red">6</span></h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">Max Pacioretty(22,23,24), Brandon Davidson(2), Derek Forbort(12), Matt Puempel(3)<br /><br />
Cam Talbot (DAL), 45 saves from 45 shots - (1.000), W, 25-24-4, 60:00 minutes<br /><br /></td></tr>
<tr><td class="STHSTodayGame_TeamName"><h3>Kings</h3></td><td class="STHSTodayGame_TeamScore"><h3>0</h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote"><br /><br />
Malcolm Subban (LAK), 13 saves from 19 shots - (0.684), L, 8-8-0, 60:00 minutes<br /><br /></td></tr></table>

<hr class="STHSTodayGame_HR"><br /></td>
<td class="STHSTodayGame_GameOverall">
<table class="STHSTodayGame_GameTitle"><tr><td class="STHSTodayGame_GameNumber"><h3>Farm Game 1264</h3></td><td class="STHSTodayGame_Boxscore"><h3><a href="OTHL-Farm-1264.html">Boxscore</a></h3></td></tr></table><table class="STHSTodayGame_GameData">
<tr><td class="STHSTodayGame_TeamName"><h3>Stars</h3></td><td class="STHSTodayGame_TeamScore"><h3><span style="color:red">9</span></h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">Unknown Player(1,2,3,4,5), Phil Varone(78,79,80,81)<br /><br />
Jean-Francois Berube (TEX), 45 saves from 50 shots - (0.900), W, 36-45-1, 60:00 minutes<br /><br /></td></tr>
<tr><td class="STHSTodayGame_TeamName"><h3>Reign</h3></td><td class="STHSTodayGame_TeamScore"><h3>5</h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">Unknown Player(1,2,3,4,5)<br /><br />
Unknown Goalie (ONT), 4 saves from 8 shots - (0.500), 3:41 minutes<br />Unknown Goalie (ONT), 63 saves from 68 shots - (0.926), L, 0-1-0, 56:19 minutes<br /><br /></td></tr></table>

<hr class="STHSTodayGame_HR"><br /></td></tr>
<tr><td class="STHSTodayGame_GameOverall">
<table class="STHSTodayGame_GameTitle"><tr><td class="STHSTodayGame_GameNumber"><h3>Pro Game 1265</h3></td><td class="STHSTodayGame_Boxscore"><h3><a href="OTHL-1265.html">Boxscore</a></h3></td></tr></table><table class="STHSTodayGame_GameData">
<tr><td class="STHSTodayGame_TeamName"><h3>Wild</h3></td><td class="STHSTodayGame_TeamScore"><h3>4</h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">
John Carlson(13), Tage Thompson(1), Sam Carrick(16), Rocco Grimaldi(7)<br /><br />
Troy Grosenick (MIN), 33 saves from 40 shots - (0.825), L, 14-16-7, 60:00 minutes<br /><br /></td></tr>
<tr><td class="STHSTodayGame_TeamName"><h3>Predators</h3></td><td class="STHSTodayGame_TeamScore"><h3><span style="color:red">7</span></h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">Kyle Brodziak(10,11), Adrian Kempe(12), Reilly Smith(23), Logan Shaw(4), Andreas Athanasiou(25), Ryan Dzingel(17)<br /><br />
Pheonix Copley (NSH), 20 saves from 24 shots - (0.833), W, 11-5-5, 60:00 minutes<br /><br /></td></tr></table>

<hr class="STHSTodayGame_HR"><br /></td>
<td class="STHSTodayGame_GameOverall">
<table class="STHSTodayGame_GameTitle"><tr><td class="STHSTodayGame_GameNumber"><h3>Farm Game 1265</h3></td><td class="STHSTodayGame_Boxscore"><h3><a href="OTHL-Farm-1265.html">Boxscore</a></h3></td></tr></table><table class="STHSTodayGame_GameData">
<tr><td class="STHSTodayGame_TeamName"><h3>Wild</h3></td><td class="STHSTodayGame_TeamScore"><h3><span style="color:red">5</span></h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">Unknown Player(1,2,3,4,5)<br /><br />
Unknown Goalie (IOA), 39 saves from 43 shots - (0.907), W, 1-0-0, 60:00 minutes<br /><br /></td></tr>
<tr><td class="STHSTodayGame_TeamName"><h3>Admirals</h3></td><td class="STHSTodayGame_TeamScore"><h3>4</h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">Unknown Player(1,2,3,4)<br /><br />
Unknown Goalie (MIL), 32 saves from 37 shots - (0.865), L, 0-1-0, 59:43 minutes<br /><br /></td></tr></table>

<hr class="STHSTodayGame_HR"><br /></td></tr>
<tr><td class="STHSTodayGame_GameOverall">
<table class="STHSTodayGame_GameTitle"><tr><td class="STHSTodayGame_GameNumber"><h3>Pro Game 1266</h3></td><td class="STHSTodayGame_Boxscore"><h3><a href="OTHL-1266.html">Boxscore</a></h3></td></tr></table><table class="STHSTodayGame_GameData">
<tr><td class="STHSTodayGame_TeamName"><h3>Devils</h3></td><td class="STHSTodayGame_TeamScore"><h3><span style="color:red">3</span></h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">Ryan Getzlaf(18), Chris Tanev(12), Darnell Nurse(10)<br /><br />
Robin Lehner (NJD), 6 saves from 6 shots - (1.000), 29:56 minutes<br />Garret Sparks (NJD), 29 saves from 31 shots - (0.935), W, 7-10-2, 30:04 minutes<br /><br /></td></tr>
<tr><td class="STHSTodayGame_TeamName"><h3>Islanders</h3></td><td class="STHSTodayGame_TeamScore"><h3>2</h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">Alexander Radulov(22), Colton Parayko(11)<br /><br />
Jordan Binnington (NYI), 21 saves from 24 shots - (0.875), L, 23-19-6, 59:46 minutes<br /><br /></td></tr></table>

<hr class="STHSTodayGame_HR"><br /></td>
<td class="STHSTodayGame_GameOverall">
<table class="STHSTodayGame_GameTitle"><tr><td class="STHSTodayGame_GameNumber"><h3>Farm Game 1266 - End in Shootout</h3></td><td class="STHSTodayGame_Boxscore"><h3><a href="OTHL-Farm-1266.html">Boxscore</a></h3></td></tr></table><table class="STHSTodayGame_GameData">
<tr><td class="STHSTodayGame_TeamName"><h3>Devils</h3></td><td class="STHSTodayGame_TeamScore"><h3><span style="color:red">4</span></h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">Unknown Player(1,2,3)<br /><br />
Unknown Goalie (BNG), 47 saves from 50 shots - (0.940), W, 1-0-0, 65:00 minutes<br /><br /></td></tr>
<tr><td class="STHSTodayGame_TeamName"><h3>Sound Tigers</h3></td><td class="STHSTodayGame_TeamScore"><h3>3</h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">Unknown Player(1,2,3)<br /><br />
Unknown Goalie (BPT), 60 saves from 63 shots - (0.952), OTL, 0-0-1, 65:00 minutes<br /><br /></td></tr></table>

<hr class="STHSTodayGame_HR"><br /></td></tr>
<tr><td class="STHSTodayGame_GameOverall">
<table class="STHSTodayGame_GameTitle"><tr><td class="STHSTodayGame_GameNumber"><h3>Pro Game 1267</h3></td><td class="STHSTodayGame_Boxscore"><h3><a href="OTHL-1267.html">Boxscore</a></h3></td></tr></table><table class="STHSTodayGame_GameData">
<tr><td class="STHSTodayGame_TeamName"><h3>Blackhawks</h3></td><td class="STHSTodayGame_TeamScore"><h3><span style="color:red">4</span></h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">Matt Calvert(3,4), Zach Werenski(15), Vladislav Namestnikov(12)<br /><br />
Corey Crawford (CHI), 16 saves from 18 shots - (0.889), W, 12-6-2, 60:00 minutes<br /><br /></td></tr>
<tr><td class="STHSTodayGame_TeamName"><h3>Rangers</h3></td><td class="STHSTodayGame_TeamScore"><h3>2</h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">Roman Josi(12,13)<br /><br />
Carter Hutton (NYR), 27 saves from 31 shots - (0.871), L, 6-7-3, 60:00 minutes<br /><br /></td></tr></table>

<hr class="STHSTodayGame_HR"><br /></td>
<td class="STHSTodayGame_GameOverall">
<table class="STHSTodayGame_GameTitle"><tr><td class="STHSTodayGame_GameNumber"><h3>Farm Game 1267</h3></td><td class="STHSTodayGame_Boxscore"><h3><a href="OTHL-Farm-1267.html">Boxscore</a></h3></td></tr></table><table class="STHSTodayGame_GameData">
<tr><td class="STHSTodayGame_TeamName"><h3>IceHogs</h3></td><td class="STHSTodayGame_TeamScore"><h3><span style="color:red">8</span></h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">Valentin Zykov(60), Max Veronneau(76,77,78), Joseph Blandisi(50), Kiefer Sherwood(73,74,75)<br /><br />
Al Montoya (RCK), 4 saves from 4 shots - (1.000), W, 71-9-2, 60:00 minutes<br /><br /></td></tr>
<tr><td class="STHSTodayGame_TeamName"><h3>Wolf Pack</h3></td><td class="STHSTodayGame_TeamScore"><h3>0</h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote"><br /><br />
Unknown Goalie (HFD), 44 saves from 48 shots - (0.917), L, 0-1-0, 47:19 minutes<br />Unknown Goalie (HFD), 7 saves from 11 shots - (0.636), 12:41 minutes<br /><br /></td></tr></table>

<hr class="STHSTodayGame_HR"><br /></td></tr>
<tr><td class="STHSTodayGame_GameOverall">
<table class="STHSTodayGame_GameTitle"><tr><td class="STHSTodayGame_GameNumber"><h3>Pro Game 1268</h3></td><td class="STHSTodayGame_Boxscore"><h3><a href="OTHL-1268.html">Boxscore</a></h3></td></tr></table><table class="STHSTodayGame_GameData">
<tr><td class="STHSTodayGame_TeamName"><h3>Penguins</h3></td><td class="STHSTodayGame_TeamScore"><h3>1</h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">
Tyson Jost(14)<br /><br />
Semyon Varlamov (PIT), 30 saves from 32 shots - (0.938), L, 21-40-0, 59:08 minutes<br /><br /></td></tr>
<tr><td class="STHSTodayGame_TeamName"><h3>Senators</h3></td><td class="STHSTodayGame_TeamScore"><h3><span style="color:red">2</span></h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">Drew Stafford(10), John Hayden(2)<br /><br />
Andrei Vasilevskiy (OTT), 36 saves from 37 shots - (0.973), W, 27-21-3, 60:00 minutes<br /><br /></td></tr></table>

<hr class="STHSTodayGame_HR"><br /></td>
<td class="STHSTodayGame_GameOverall">
<table class="STHSTodayGame_GameTitle"><tr><td class="STHSTodayGame_GameNumber"><h3>Farm Game 1268</h3></td><td class="STHSTodayGame_Boxscore"><h3><a href="OTHL-Farm-1268.html">Boxscore</a></h3></td></tr></table><table class="STHSTodayGame_GameData">
<tr><td class="STHSTodayGame_TeamName"><h3>Penguins</h3></td><td class="STHSTodayGame_TeamScore"><h3><span style="color:red">6</span></h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">Jamie Devane(30,31,32,33), Dave Dziurzynski(62,63)<br /><br />
Tom McCollum (WBS), 18 saves from 22 shots - (0.818), W, 36-26-1, 60:00 minutes<br /><br /></td></tr>
<tr><td class="STHSTodayGame_TeamName"><h3>Senators</h3></td><td class="STHSTodayGame_TeamScore"><h3>4</h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">Unknown Player(1,2,3), Michael Bunting(7)<br /><br />
Unknown Goalie (BEL), 12 saves from 16 shots - (0.750), 24:36 minutes<br />Unknown Goalie (BEL), 17 saves from 19 shots - (0.895), L, 0-1-0, 35:24 minutes<br /><br /></td></tr></table>

<hr class="STHSTodayGame_HR"><br /></td></tr>
<tr><td class="STHSTodayGame_GameOverall">
<table class="STHSTodayGame_GameTitle"><tr><td class="STHSTodayGame_GameNumber"><h3>Pro Game 1269 - End in Shootout</h3></td><td class="STHSTodayGame_Boxscore"><h3><a href="OTHL-1269.html">Boxscore</a></h3></td></tr></table><table class="STHSTodayGame_GameData">
<tr><td class="STHSTodayGame_TeamName"><h3>Ducks</h3></td><td class="STHSTodayGame_TeamScore"><h3><span style="color:red">5</span></h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">Zach Aston-Reese(7), Tyler Bertuzzi(12), Johnny Gaudreau(23,24)<br /><br />
Antti Raanta (ANH), 41 saves from 45 shots - (0.911), W, 20-14-9, 65:00 minutes<br /><br /></td></tr>
<tr><td class="STHSTodayGame_TeamName"><h3>Sharks</h3></td><td class="STHSTodayGame_TeamScore"><h3>4</h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">Derek Ryan(9), Ondrej Kase(17), Filip Forsberg(30), Aleksander Barkov(47)<br /><br />
Laurent Brossoit (SJS), 29 saves from 33 shots - (0.879), OTL, 7-8-1, 65:00 minutes<br /><br /></td></tr></table>

<hr class="STHSTodayGame_HR"><br /></td>
<td class="STHSTodayGame_GameOverall">
<table class="STHSTodayGame_GameTitle"><tr><td class="STHSTodayGame_GameNumber"><h3>Farm Game 1269</h3></td><td class="STHSTodayGame_Boxscore"><h3><a href="OTHL-Farm-1269.html">Boxscore</a></h3></td></tr></table><table class="STHSTodayGame_GameData">
<tr><td class="STHSTodayGame_TeamName"><h3>Gulls</h3></td><td class="STHSTodayGame_TeamScore"><h3><span style="color:red">7</span></h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">Trent Frederic(30), Warren Foegele(102), Emile Poirier(60,61), Trevor Moore(50), Nicolas Kerdiles(30), Zach Senyshyn(29)<br /><br />
Ian Scott (SDG), 9 saves from 11 shots - (0.818), W, 10-2-0, 60:00 minutes<br /><br /></td></tr>
<tr><td class="STHSTodayGame_TeamName"><h3>Barracudas</h3></td><td class="STHSTodayGame_TeamScore"><h3>2</h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">Unknown Player(1,2)<br /><br />
Unknown Goalie (SJB), 8 saves from 12 shots - (0.667), L, 0-1-0, 9:11 minutes<br />Unknown Goalie (SJB), 26 saves from 29 shots - (0.897), 50:49 minutes<br /><br /></td></tr></table>

<hr class="STHSTodayGame_HR"><br /></td></tr>
<tr><td class="STHSTodayGame_GameOverall">
<table class="STHSTodayGame_GameTitle"><tr><td class="STHSTodayGame_GameNumber"><h3>Pro Game 1270</h3></td><td class="STHSTodayGame_Boxscore"><h3><a href="OTHL-1270.html">Boxscore</a></h3></td></tr></table><table class="STHSTodayGame_GameData">
<tr><td class="STHSTodayGame_TeamName"><h3>Canadiens</h3></td><td class="STHSTodayGame_TeamScore"><h3><span style="color:red">4</span></h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">Artemi Panarin(17), Alex DeBrincat(30), Marc-Edouard Vlasic(13), Anthony Mantha(14)<br /><br />
Ben Bishop (MTL), 27 saves from 29 shots - (0.931), W, 40-20-4, 60:00 minutes<br /><br /></td></tr>
<tr><td class="STHSTodayGame_TeamName"><h3>Maple Leafs</h3></td><td class="STHSTodayGame_TeamScore"><h3>2</h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">Frank Vatrano(17), Troy Terry(2)<br /><br />
James Reimer (TOR), 28 saves from 31 shots - (0.903), L, 5-10-3, 59:12 minutes<br /><br /></td></tr></table>

<hr class="STHSTodayGame_HR"><br /></td>
<td class="STHSTodayGame_GameOverall">
<table class="STHSTodayGame_GameTitle"><tr><td class="STHSTodayGame_GameNumber"><h3>Farm Game 1270</h3></td><td class="STHSTodayGame_Boxscore"><h3><a href="OTHL-Farm-1270.html">Boxscore</a></h3></td></tr></table><table class="STHSTodayGame_GameData">
<tr><td class="STHSTodayGame_TeamName"><h3>Rocket</h3></td><td class="STHSTodayGame_TeamScore"><h3><span style="color:red">5</span></h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">Vladislav Kamenev(36), Sheldon Rempal(53), Henrik Borgstrom(32), Adam Tambellini(44), Alex Schoenborn(7)<br /><br />
Alex Nedeljkovic (LAV), 8 saves from 8 shots - (1.000), W, 70-9-3, 60:00 minutes<br /><br /></td></tr>
<tr><td class="STHSTodayGame_TeamName"><h3>Marlies</h3></td><td class="STHSTodayGame_TeamScore"><h3>0</h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote"><br /><br />
Dylan Wells (TOR), 38 saves from 43 shots - (0.884), L, 3-7-0, 60:00 minutes<br /><br /></td></tr></table>

<hr class="STHSTodayGame_HR"><br /></td></tr>
<tr><td class="STHSTodayGame_GameOverall">
<table class="STHSTodayGame_GameTitle"><tr><td class="STHSTodayGame_GameNumber"><h3>Pro Game 1271 - End in Shootout</h3></td><td class="STHSTodayGame_Boxscore"><h3><a href="OTHL-1271.html">Boxscore</a></h3></td></tr></table><table class="STHSTodayGame_GameData">
<tr><td class="STHSTodayGame_TeamName"><h3>Golden Knights</h3></td><td class="STHSTodayGame_TeamScore"><h3>3</h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">
Travis Sanheim(3), Scott Laughton(9), Colton Sissons(18)<br /><br />
MacKenzie Blackwood (VGK), 30 saves from 33 shots - (0.909), OTL, 12-16-3, 65:00 minutes<br /><br /></td></tr>
<tr><td class="STHSTodayGame_TeamName"><h3>Canucks</h3></td><td class="STHSTodayGame_TeamScore"><h3><span style="color:red">4</span></h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">Mikko Rantanen(39), Alex Steen(20), Nico Hischier(24)<br /><br />
Alexandar Georgiev (VAN), 25 saves from 28 shots - (0.893), W, 8-4-1, 65:00 minutes<br /><br /></td></tr></table>

<hr class="STHSTodayGame_HR"><br /></td>
<td class="STHSTodayGame_GameOverall">
<table class="STHSTodayGame_GameTitle"><tr><td class="STHSTodayGame_GameNumber"><h3>Farm Game 1271</h3></td><td class="STHSTodayGame_Boxscore"><h3><a href="OTHL-Farm-1271.html">Boxscore</a></h3></td></tr></table><table class="STHSTodayGame_GameData">
<tr><td class="STHSTodayGame_TeamName"><h3>Wolves</h3></td><td class="STHSTodayGame_TeamScore"><h3>1</h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">
Lias Andersson(11)<br /><br />
Jon Gillies (CHI), 8 saves from 12 shots - (0.667), L, 24-15-5, 15:48 minutes<br />Unknown Goalie (CHI), 15 saves from 18 shots - (0.833), 44:12 minutes<br /><br /></td></tr>
<tr><td class="STHSTodayGame_TeamName"><h3>Comets</h3></td><td class="STHSTodayGame_TeamScore"><h3><span style="color:red">7</span></h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">Joel L'Esperance(47,48), Chris Terry(35,36,37), Joshua Ho-Sang(54), Nic Petan(2)<br /><br />
Cory Schneider (UTI), 16 saves from 17 shots - (0.941), W, 13-3-0, 60:00 minutes<br /><br /></td></tr></table>

<hr class="STHSTodayGame_HR"><br /></td></tr>
</table>
<h1 class="STHSTomorrowGame_TomorrowGame">Tomorrow's Games</h1>
End of Season
<table class="STHSSchedule_MainTable"><tr><td class="STHSSchedule_TitleGameNumber"><b>Game #</b></td><td class="STHSSchedule_TitleProSchedule"><b>Pro Schedule</b></td>
<td class="STHSSchedule_TitleGameNumber"><b>Game #</b></td><td class="STHSSchedule_TitleFarmSchedule"><b>Farm Schedule</b></td>
</tr>
<tr><td colspan="4" class="STHSTomorrowGame_GameDay"><b>Day 187</b></td></tr>
<tr><td colspan="2" class="STHSAlignTop">
<table class="STHSTomorrowGame_SubTable">
</table>
</td><td colspan="2" class="STHSAlignTop">
<table class="STHSTomorrowGame_SubTable">
</table>
</td></tr>
</table>
<?php include "Footer.php";?>
