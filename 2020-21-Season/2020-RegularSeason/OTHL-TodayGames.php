<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<title>OTHL - Today Games</title>
<script src="OTHL.js"></script>
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
<h3 class="STHSTodayGame_Today3Star">Today 3 Star : <br />Pro : 1 - Brandon Saad (Maple Leafs) / 2 - David Rittich (Panthers) / 3 - Steven Stamkos (Islanders)<br />Farm : 1 - Eetu Luostarinen (Moose) / 2 - Andrew Agozzino (Stars) / 3 - Justin Auger (Marlies)</h3>
<table class="STHSTodayGame_MainTable">
<tr><td class="STHSTodayGame_GameOverall">
<table class="STHSTodayGame_GameTitle"><tr><td class="STHSTodayGame_GameNumber"><h3>Pro Game 1257</h3></td><td class="STHSTodayGame_Boxscore"><h3><a href="OTHL-1257.html">Boxscore</a></h3></td></tr></table><table class="STHSTodayGame_GameData">
<tr><td class="STHSTodayGame_TeamName"><h3>Jets</h3></td><td class="STHSTodayGame_TeamScore"><h3>4</h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">
Kasperi Kapanen(23), Matthew Tkachuk(39), Kevin Shattenkirk(5), Casey Cizikas(19)<br /><br />
Juuse Saros (WPG), 34 saves from 35 shots - (0.971), L, 15-18-2, 42:25 minutes<br />Matt Murray (WPG), 5 saves from 9 shots - (0.556), 17:07 minutes<br /><br /></td></tr>
<tr><td class="STHSTodayGame_TeamName"><h3>Coyotes</h3></td><td class="STHSTodayGame_TeamScore"><h3><span style="color:red">5</span></h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">Leon Draisaitl(38), Oliver Ekman-Larsson(9), Jesper Fast(9), Nikita Kucherov(21), Slater Koekkoek(1)<br /><br />
Tuukka Rask (ARI), 26 saves from 30 shots - (0.867), W, 40-15-8, 60:00 minutes<br /><br /></td></tr></table>

<hr class="STHSTodayGame_HR"><br /></td>
<td class="STHSTodayGame_GameOverall">
<table class="STHSTodayGame_GameTitle"><tr><td class="STHSTodayGame_GameNumber"><h3>Farm Game 1257</h3></td><td class="STHSTodayGame_Boxscore"><h3><a href="OTHL-Farm-1257.html">Boxscore</a></h3></td></tr></table><table class="STHSTodayGame_GameData">
<tr><td class="STHSTodayGame_TeamName"><h3>Moose</h3></td><td class="STHSTodayGame_TeamScore"><h3><span style="color:red">9</span></h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">Rasmus Kupari(13), Eeli Tolvanen(37), Eetu Luostarinen(33,34,35), Taylor Raddysh(22), Julius Honka(13), Lukas Vejdemo(22), Clark Bishop(7)<br /><br />
Veini Vehvilainen (MAN), 14 saves from 16 shots - (0.875), W, 34-13-1, 60:00 minutes<br /><br /></td></tr>
<tr><td class="STHSTodayGame_TeamName"><h3>Roadrunners</h3></td><td class="STHSTodayGame_TeamScore"><h3>2</h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">Tanner Fritz(43), Unknown Player(1)<br /><br />
Unknown Goalie (TUC), 12 saves from 17 shots - (0.706), L, 0-1-0, 29:44 minutes<br />Unknown Goalie (TUC), 10 saves from 14 shots - (0.714), 30:16 minutes<br /><br /></td></tr></table>

<hr class="STHSTodayGame_HR"><br /></td></tr>
<tr><td class="STHSTodayGame_GameOverall">
<table class="STHSTodayGame_GameTitle"><tr><td class="STHSTodayGame_GameNumber"><h3>Pro Game 1258</h3></td><td class="STHSTodayGame_Boxscore"><h3><a href="OTHL-1258.html">Boxscore</a></h3></td></tr></table><table class="STHSTodayGame_GameData">
<tr><td class="STHSTodayGame_TeamName"><h3>Hurricanes</h3></td><td class="STHSTodayGame_TeamScore"><h3>2</h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">
Jakob Chychrun(10), Aleksi Saarela(3)<br /><br />
Mike Smith (CAR), 21 saves from 22 shots - (0.955), 28:04 minutes<br />Filip Gustavsson (CAR), 10 saves from 14 shots - (0.714), L, 0-8-1, 31:56 minutes<br /><br /></td></tr>
<tr><td class="STHSTodayGame_TeamName"><h3>Bruins</h3></td><td class="STHSTodayGame_TeamScore"><h3><span style="color:red">5</span></h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">Evgenii Dadonov(22), Brent Burns(12), Michael Grabner(14), Brendan Gallagher(27), Jean-Gabriel Pageau(24)<br /><br />
Pavel Francouz (BOS), 17 saves from 19 shots - (0.895), W, 43-16-2, 60:00 minutes<br /><br /></td></tr></table>

<hr class="STHSTodayGame_HR"><br /></td>
<td class="STHSTodayGame_GameOverall">
<table class="STHSTodayGame_GameTitle"><tr><td class="STHSTodayGame_GameNumber"><h3>Farm Game 1258</h3></td><td class="STHSTodayGame_Boxscore"><h3><a href="OTHL-Farm-1258.html">Boxscore</a></h3></td></tr></table><table class="STHSTodayGame_GameData">
<tr><td class="STHSTodayGame_TeamName"><h3>Checkers</h3></td><td class="STHSTodayGame_TeamScore"><h3>1</h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">
Kaapo Kakko(48)<br /><br />
Matiss Kivlenieks (CHR), 21 saves from 25 shots - (0.840), L, 15-4-1, 60:00 minutes<br /><br /></td></tr>
<tr><td class="STHSTodayGame_TeamName"><h3>Bruins</h3></td><td class="STHSTodayGame_TeamScore"><h3><span style="color:red">4</span></h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">Lawson Crouse(1,2,3), Michael Anderson(4)<br /><br />
Connor Ingram (PRO), 21 saves from 22 shots - (0.955), W, 42-8-2, 60:00 minutes<br /><br /></td></tr></table>

<hr class="STHSTodayGame_HR"><br /></td></tr>
<tr><td class="STHSTodayGame_GameOverall">
<table class="STHSTodayGame_GameTitle"><tr><td class="STHSTodayGame_GameNumber"><h3>Pro Game 1259</h3></td><td class="STHSTodayGame_Boxscore"><h3><a href="OTHL-1259.html">Boxscore</a></h3></td></tr></table><table class="STHSTodayGame_GameData">
<tr><td class="STHSTodayGame_TeamName"><h3>Flyers</h3></td><td class="STHSTodayGame_TeamScore"><h3>3</h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">
Cam Atkinson(30), Valtteri Filppula(6), Joel Eriksson Ek(8)<br /><br />
Anton Khudobin (PHL), 31 saves from 35 shots - (0.886), L, 41-16-4, 59:52 minutes<br /><br /></td></tr>
<tr><td class="STHSTodayGame_TeamName"><h3>Sabres</h3></td><td class="STHSTodayGame_TeamScore"><h3><span style="color:red">4</span></h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">Loui Eriksson(8), Anze Kopitar(17), Chris Kreider(30,31)<br /><br />
Thomas Greiss (BUF), 18 saves from 21 shots - (0.857), W, 35-10-6, 60:00 minutes<br /><br /></td></tr></table>

<hr class="STHSTodayGame_HR"><br /></td>
<td class="STHSTodayGame_GameOverall">
<table class="STHSTodayGame_GameTitle"><tr><td class="STHSTodayGame_GameNumber"><h3>Farm Game 1259</h3></td><td class="STHSTodayGame_Boxscore"><h3><a href="OTHL-Farm-1259.html">Boxscore</a></h3></td></tr></table><table class="STHSTodayGame_GameData">
<tr><td class="STHSTodayGame_TeamName"><h3>Phantoms</h3></td><td class="STHSTodayGame_TeamScore"><h3><span style="color:red">3</span></h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">Joel Hanley(15), Luke Gazdic(22), Adam Johnson(45)<br /><br />
Michael Hutchinson (LVP), 14 saves from 16 shots - (0.875), W, 23-10-1, 60:00 minutes<br /><br /></td></tr>
<tr><td class="STHSTodayGame_TeamName"><h3> Americans</h3></td><td class="STHSTodayGame_TeamScore"><h3>2</h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">Cole Schneider(44), Keegan Kolesar(23)<br /><br />
Unknown Goalie (ROC), 9 saves from 12 shots - (0.750), L, 0-1-0, 60:00 minutes<br /><br /></td></tr></table>

<hr class="STHSTodayGame_HR"><br /></td></tr>
<tr><td class="STHSTodayGame_GameOverall">
<table class="STHSTodayGame_GameTitle"><tr><td class="STHSTodayGame_GameNumber"><h3>Pro Game 1260 - End in Overtime</h3></td><td class="STHSTodayGame_Boxscore"><h3><a href="OTHL-1260.html">Boxscore</a></h3></td></tr></table><table class="STHSTodayGame_GameData">
<tr><td class="STHSTodayGame_TeamName"><h3>Oilers</h3></td><td class="STHSTodayGame_TeamScore"><h3>2</h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">
Blake Wheeler(21), Luke Kunin(18)<br /><br />
Elvis Merzlikins (EDM), 27 saves from 30 shots - (0.900), OTL, 22-11-4, 60:31 minutes<br /><br /></td></tr>
<tr><td class="STHSTodayGame_TeamName"><h3>Flames</h3></td><td class="STHSTodayGame_TeamScore"><h3><span style="color:red">3</span></h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">Andre Burakovsky(23), Bo Horvat(38), Matthew Nieto(13)<br /><br />
Ben Bishop (CGY), 32 saves from 34 shots - (0.941), W, 43-16-1, 60:31 minutes<br /><br /></td></tr></table>

<hr class="STHSTodayGame_HR"><br /></td>
<td class="STHSTodayGame_GameOverall">
<table class="STHSTodayGame_GameTitle"><tr><td class="STHSTodayGame_GameNumber"><h3>Farm Game 1260 - End in Overtime</h3></td><td class="STHSTodayGame_Boxscore"><h3><a href="OTHL-Farm-1260.html">Boxscore</a></h3></td></tr></table><table class="STHSTodayGame_GameData">
<tr><td class="STHSTodayGame_TeamName"><h3>Condors</h3></td><td class="STHSTodayGame_TeamScore"><h3>2</h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">
Jeremy Lauzon(10), Zach Whitecloud(8)<br /><br />
Zane McIntyre (BKR), 21 saves from 24 shots - (0.875), OTL, 60-15-6, 61:51 minutes<br /><br /></td></tr>
<tr><td class="STHSTodayGame_TeamName"><h3>Heat</h3></td><td class="STHSTodayGame_TeamScore"><h3><span style="color:red">3</span></h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">David Gustafsson(23,24), Vitaly Abramov(45)<br /><br />
Casey DeSmith (STK), 24 saves from 26 shots - (0.923), W, 49-15-2, 61:51 minutes<br /><br /></td></tr></table>

<hr class="STHSTodayGame_HR"><br /></td></tr>
<tr><td class="STHSTodayGame_GameOverall">
<table class="STHSTodayGame_GameTitle"><tr><td class="STHSTodayGame_GameNumber"><h3>Pro Game 1261</h3></td><td class="STHSTodayGame_Boxscore"><h3><a href="OTHL-1261.html">Boxscore</a></h3></td></tr></table><table class="STHSTodayGame_GameData">
<tr><td class="STHSTodayGame_TeamName"><h3>Blues</h3></td><td class="STHSTodayGame_TeamScore"><h3><span style="color:red">4</span></h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">Sammy Blais(4), Janne Kuokkanen(10), Mikael Backlund(19), Pierre-Edouard Bellemare(16)<br /><br />
Vitek Vanecek (STL), 31 saves from 33 shots - (0.939), W, 6-15-0, 60:00 minutes<br /><br /></td></tr>
<tr><td class="STHSTodayGame_TeamName"><h3>Avalanche</h3></td><td class="STHSTodayGame_TeamScore"><h3>2</h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">Brandon Carlo(8), J.T. Miller(28)<br /><br />
Jake Allen (COL), 8 saves from 10 shots - (0.800), L, 19-26-6, 36:37 minutes<br />Chris Driedger (COL), 22 saves from 24 shots - (0.917), 23:23 minutes<br /><br /></td></tr></table>

<hr class="STHSTodayGame_HR"><br /></td>
<td class="STHSTodayGame_GameOverall">
<table class="STHSTodayGame_GameTitle"><tr><td class="STHSTodayGame_GameNumber"><h3>Farm Game 1261</h3></td><td class="STHSTodayGame_Boxscore"><h3><a href="OTHL-Farm-1261.html">Boxscore</a></h3></td></tr></table><table class="STHSTodayGame_GameData">
<tr><td class="STHSTodayGame_TeamName"><h3>Rampage </h3></td><td class="STHSTodayGame_TeamScore"><h3><span style="color:red">7</span></h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">Unknown Player(1,2,3,4,5,6,7)<br /><br />
Unknown Goalie (SAR), 59 saves from 64 shots - (0.922), W, 1-0-0, 60:00 minutes<br /><br /></td></tr>
<tr><td class="STHSTodayGame_TeamName"><h3>Eagles</h3></td><td class="STHSTodayGame_TeamScore"><h3>5</h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">Unknown Player(1,2,3,4,5)<br /><br />
Unknown Goalie (COL), 42 saves from 48 shots - (0.875), L, 0-1-0, 59:24 minutes<br /><br /></td></tr></table>

<hr class="STHSTodayGame_HR"><br /></td></tr>
<tr><td class="STHSTodayGame_GameOverall">
<table class="STHSTodayGame_GameTitle"><tr><td class="STHSTodayGame_GameNumber"><h3>Pro Game 1262</h3></td><td class="STHSTodayGame_Boxscore"><h3><a href="OTHL-1262.html">Boxscore</a></h3></td></tr></table><table class="STHSTodayGame_GameData">
<tr><td class="STHSTodayGame_TeamName"><h3>Lightning</h3></td><td class="STHSTodayGame_TeamScore"><h3>2</h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">
Esa Lindell(11), Kris Russell(8)<br /><br />
Connor Hellebuyck (TBL), 37 saves from 40 shots - (0.925), L, 36-20-5, 59:03 minutes<br /><br /></td></tr>
<tr><td class="STHSTodayGame_TeamName"><h3>Red Wings</h3></td><td class="STHSTodayGame_TeamScore"><h3><span style="color:red">3</span></h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">Connor McDavid(22), Matt Duchene(21), Teddy Blueger(5)<br /><br />
Evan Fitzpatrick (DET), 22 saves from 24 shots - (0.917), W, 7-16-4, 60:00 minutes<br /><br /></td></tr></table>

<hr class="STHSTodayGame_HR"><br /></td>
<td class="STHSTodayGame_GameOverall">
<table class="STHSTodayGame_GameTitle"><tr><td class="STHSTodayGame_GameNumber"><h3>Farm Game 1262</h3></td><td class="STHSTodayGame_Boxscore"><h3><a href="OTHL-Farm-1262.html">Boxscore</a></h3></td></tr></table><table class="STHSTodayGame_GameData">
<tr><td class="STHSTodayGame_TeamName"><h3>Crunch</h3></td><td class="STHSTodayGame_TeamScore"><h3>0</h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">
<br /><br />
Matt Tomkins (SYR), 31 saves from 35 shots - (0.886), L, 44-29-3, 60:00 minutes<br /><br /></td></tr>
<tr><td class="STHSTodayGame_TeamName"><h3>Griffins</h3></td><td class="STHSTodayGame_TeamScore"><h3><span style="color:red">4</span></h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">Unknown Player(1,2), Noah Gregor(75), Anthony Richard(88)<br /><br />
Sergei Bobrovsky (GRP), 27 saves from 27 shots - (1.000), W, 35-40-4, 60:00 minutes<br /><br /></td></tr></table>

<hr class="STHSTodayGame_HR"><br /></td></tr>
<tr><td class="STHSTodayGame_GameOverall">
<table class="STHSTodayGame_GameTitle"><tr><td class="STHSTodayGame_GameNumber"><h3>Pro Game 1263</h3></td><td class="STHSTodayGame_Boxscore"><h3><a href="OTHL-1263.html">Boxscore</a></h3></td></tr></table><table class="STHSTodayGame_GameData">
<tr><td class="STHSTodayGame_TeamName"><h3>Capitals</h3></td><td class="STHSTodayGame_TeamScore"><h3>0</h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">
<br /><br />
Petr Mrazek (WSH), 28 saves from 30 shots - (0.933), L, 4-12-1, 60:00 minutes<br /><br /></td></tr>
<tr><td class="STHSTodayGame_TeamName"><h3>Panthers</h3></td><td class="STHSTodayGame_TeamScore"><h3><span style="color:red">2</span></h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">Max Domi(20), Marcus Johansson(19)<br /><br />
David Rittich (FLA), 29 saves from 29 shots - (1.000), W, 19-13-5, 60:00 minutes<br /><br /></td></tr></table>

<hr class="STHSTodayGame_HR"><br /></td>
<td class="STHSTodayGame_GameOverall">
<table class="STHSTodayGame_GameTitle"><tr><td class="STHSTodayGame_GameNumber"><h3>Farm Game 1263</h3></td><td class="STHSTodayGame_Boxscore"><h3><a href="OTHL-Farm-1263.html">Boxscore</a></h3></td></tr></table><table class="STHSTodayGame_GameData">
<tr><td class="STHSTodayGame_TeamName"><h3>Bears</h3></td><td class="STHSTodayGame_TeamScore"><h3>1</h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">
Unknown Player(1)<br /><br />
Unknown Goalie (HER), 12 saves from 16 shots - (0.750), L, 0-1-0, 29:33 minutes<br />Unknown Goalie (HER), 21 saves from 24 shots - (0.875), 30:27 minutes<br /><br /></td></tr>
<tr><td class="STHSTodayGame_TeamName"><h3>Thunderbirds</h3></td><td class="STHSTodayGame_TeamScore"><h3><span style="color:red">7</span></h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">Matthew Highmore(14), Alexander Nylander(57,58,59), Max Jones(46,47), Emil Bemstrom(24)<br /><br />
Dan Vladar (SPR), 8 saves from 9 shots - (0.889), W, 20-7-1, 60:00 minutes<br /><br /></td></tr></table>

<hr class="STHSTodayGame_HR"><br /></td></tr>
<tr><td class="STHSTodayGame_GameOverall">
<table class="STHSTodayGame_GameTitle"><tr><td class="STHSTodayGame_GameNumber"><h3>Pro Game 1264</h3></td><td class="STHSTodayGame_Boxscore"><h3><a href="OTHL-1264.html">Boxscore</a></h3></td></tr></table><table class="STHSTodayGame_GameData">
<tr><td class="STHSTodayGame_TeamName"><h3>Stars</h3></td><td class="STHSTodayGame_TeamScore"><h3><span style="color:red">4</span></h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">Patrice Bergeron(41), Zach Parise(33), Max Pacioretty(22), Nikita Zadorov(4)<br /><br />
Cam Talbot (DAL), 28 saves from 31 shots - (0.903), W, 31-16-6, 60:00 minutes<br /><br /></td></tr>
<tr><td class="STHSTodayGame_TeamName"><h3>Kings</h3></td><td class="STHSTodayGame_TeamScore"><h3>3</h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">Pierre Engvall(8), Nicolas Roy(4), Nathan MacKinnon(39)<br /><br />
Devan Dubnyk (LAK), 31 saves from 35 shots - (0.886), L, 13-7-0, 59:00 minutes<br /><br /></td></tr></table>

<hr class="STHSTodayGame_HR"><br /></td>
<td class="STHSTodayGame_GameOverall">
<table class="STHSTodayGame_GameTitle"><tr><td class="STHSTodayGame_GameNumber"><h3>Farm Game 1264</h3></td><td class="STHSTodayGame_Boxscore"><h3><a href="OTHL-Farm-1264.html">Boxscore</a></h3></td></tr></table><table class="STHSTodayGame_GameData">
<tr><td class="STHSTodayGame_TeamName"><h3>Stars</h3></td><td class="STHSTodayGame_TeamScore"><h3><span style="color:red">8</span></h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">Matt Puempel(82), Unknown Player(1,2), Andy Andreoff(45,46), Andrew Agozzino(43,44,45)<br /><br />
Unknown Goalie (TEX), 26 saves from 30 shots - (0.867), W, 1-0-0, 60:00 minutes<br /><br /></td></tr>
<tr><td class="STHSTodayGame_TeamName"><h3>Reign</h3></td><td class="STHSTodayGame_TeamScore"><h3>4</h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">Kyle Clifford(45,46), Unknown Player(1), Christian Wolanin(24)<br /><br />
Antoine Bibeau (ONT), 11 saves from 15 shots - (0.733), 14:46 minutes<br />Unknown Goalie (ONT), 39 saves from 43 shots - (0.907), L, 0-1-0, 45:14 minutes<br /><br /></td></tr></table>

<hr class="STHSTodayGame_HR"><br /></td></tr>
<tr><td class="STHSTodayGame_GameOverall">
<table class="STHSTodayGame_GameTitle"><tr><td class="STHSTodayGame_GameNumber"><h3>Pro Game 1265</h3></td><td class="STHSTodayGame_Boxscore"><h3><a href="OTHL-1265.html">Boxscore</a></h3></td></tr></table><table class="STHSTodayGame_GameData">
<tr><td class="STHSTodayGame_TeamName"><h3>Wild</h3></td><td class="STHSTodayGame_TeamScore"><h3>4</h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">
Victor Olofsson(23,24), Tyson Barrie(8), Rocco Grimaldi(12)<br /><br />
Jonathan Bernier (MIN), 58 saves from 63 shots - (0.921), L, 25-27-7, 59:57 minutes<br /><br /></td></tr>
<tr><td class="STHSTodayGame_TeamName"><h3>Predators</h3></td><td class="STHSTodayGame_TeamScore"><h3><span style="color:red">5</span></h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">Dominik Kubalik(25), Adrian Kempe(17), Deryk Engelland(12), Adam Henrique(19), Sam Reinhart(33)<br /><br />
Troy Grosenick (NSH), 26 saves from 30 shots - (0.867), W, 8-10-1, 60:00 minutes<br /><br /></td></tr></table>

<hr class="STHSTodayGame_HR"><br /></td>
<td class="STHSTodayGame_GameOverall">
<table class="STHSTodayGame_GameTitle"><tr><td class="STHSTodayGame_GameNumber"><h3>Farm Game 1265</h3></td><td class="STHSTodayGame_Boxscore"><h3><a href="OTHL-Farm-1265.html">Boxscore</a></h3></td></tr></table><table class="STHSTodayGame_GameData">
<tr><td class="STHSTodayGame_TeamName"><h3>Wild</h3></td><td class="STHSTodayGame_TeamScore"><h3>1</h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">
Unknown Player(1)<br /><br />
Unknown Goalie (IOA), 10 saves from 14 shots - (0.714), L, 0-1-0, 14:30 minutes<br />Unknown Goalie (IOA), 37 saves from 39 shots - (0.949), 45:30 minutes<br /><br /></td></tr>
<tr><td class="STHSTodayGame_TeamName"><h3>Admirals</h3></td><td class="STHSTodayGame_TeamScore"><h3><span style="color:red">6</span></h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">Alex Tuch(36), Gaetan Haas(41,42), Morgan Frost(4,5), Greg Carey(65)<br /><br />
Pheonix Copley (MIL), 5 saves from 6 shots - (0.833), W, 64-12-6, 60:00 minutes<br /><br /></td></tr></table>

<hr class="STHSTodayGame_HR"><br /></td></tr>
<tr><td class="STHSTodayGame_GameOverall">
<table class="STHSTodayGame_GameTitle"><tr><td class="STHSTodayGame_GameNumber"><h3>Pro Game 1266</h3></td><td class="STHSTodayGame_Boxscore"><h3><a href="OTHL-1266.html">Boxscore</a></h3></td></tr></table><table class="STHSTodayGame_GameData">
<tr><td class="STHSTodayGame_TeamName"><h3>Devils</h3></td><td class="STHSTodayGame_TeamScore"><h3>3</h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">
Jimmy Vesey(6), Patric Hornqvist(25), Timo Meier(27)<br /><br />
Braden Holtby (NJD), 29 saves from 34 shots - (0.853), L, 12-17-4, 60:00 minutes<br /><br /></td></tr>
<tr><td class="STHSTodayGame_TeamName"><h3>Islanders</h3></td><td class="STHSTodayGame_TeamScore"><h3><span style="color:red">5</span></h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">Steven Stamkos(30,31), Alexander Radulov(16), Ryan O'Reilly(30), Connor Brown(22)<br /><br />
Philipp Grubauer (NYI), 33 saves from 36 shots - (0.917), W, 27-21-5, 60:00 minutes<br /><br /></td></tr></table>

<hr class="STHSTodayGame_HR"><br /></td>
<td class="STHSTodayGame_GameOverall">
<table class="STHSTodayGame_GameTitle"><tr><td class="STHSTodayGame_GameNumber"><h3>Farm Game 1266</h3></td><td class="STHSTodayGame_Boxscore"><h3><a href="OTHL-Farm-1266.html">Boxscore</a></h3></td></tr></table><table class="STHSTodayGame_GameData">
<tr><td class="STHSTodayGame_TeamName"><h3>Devils</h3></td><td class="STHSTodayGame_TeamScore"><h3><span style="color:red">6</span></h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">Brent Gates(30), Kyle Criscuolo(36,37), Unknown Player(1), Scott Sabourin(58), Joel Kiviranta(43)<br /><br />
Unknown Goalie (BNG), 17 saves from 20 shots - (0.850), W, 1-0-0, 60:00 minutes<br /><br /></td></tr>
<tr><td class="STHSTodayGame_TeamName"><h3>Sound Tigers</h3></td><td class="STHSTodayGame_TeamScore"><h3>3</h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">Unknown Player(1,2,3)<br /><br />
Unknown Goalie (BPT), 50 saves from 56 shots - (0.893), L, 0-1-0, 60:00 minutes<br /><br /></td></tr></table>

<hr class="STHSTodayGame_HR"><br /></td></tr>
<tr><td class="STHSTodayGame_GameOverall">
<table class="STHSTodayGame_GameTitle"><tr><td class="STHSTodayGame_GameNumber"><h3>Pro Game 1267 - End in Shootout</h3></td><td class="STHSTodayGame_Boxscore"><h3><a href="OTHL-1267.html">Boxscore</a></h3></td></tr></table><table class="STHSTodayGame_GameData">
<tr><td class="STHSTodayGame_TeamName"><h3>Blackhawks</h3></td><td class="STHSTodayGame_TeamScore"><h3>3</h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">
Evgeni Malkin(28,29), Jason Zucker(18)<br /><br />
Corey Crawford (CHI), 25 saves from 28 shots - (0.893), OTL, 39-20-3, 65:00 minutes<br /><br /></td></tr>
<tr><td class="STHSTodayGame_TeamName"><h3>Rangers</h3></td><td class="STHSTodayGame_TeamScore"><h3><span style="color:red">4</span></h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">Colin White(4), Gabriel Landeskog(28), Mark Stone(26)<br /><br />
Marc-Andre Fleury (NYR), 32 saves from 35 shots - (0.914), W, 24-27-4, 65:00 minutes<br /><br /></td></tr></table>

<hr class="STHSTodayGame_HR"><br /></td>
<td class="STHSTodayGame_GameOverall">
<table class="STHSTodayGame_GameTitle"><tr><td class="STHSTodayGame_GameNumber"><h3>Farm Game 1267</h3></td><td class="STHSTodayGame_Boxscore"><h3><a href="OTHL-Farm-1267.html">Boxscore</a></h3></td></tr></table><table class="STHSTodayGame_GameData">
<tr><td class="STHSTodayGame_TeamName"><h3>IceHogs</h3></td><td class="STHSTodayGame_TeamScore"><h3><span style="color:red">7</span></h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">Logan Brown(32), Mitch Vande Sompel(6), Max Comtois(15), Dominik Simon(32), Glenn Gawdin(16), Joseph Blandisi(32), Kiefer Sherwood(41)<br /><br />
Unknown Goalie (RCK), 7 saves from 8 shots - (0.875), W, 1-0-0, 60:00 minutes<br /><br /></td></tr>
<tr><td class="STHSTodayGame_TeamName"><h3>Wolf Pack</h3></td><td class="STHSTodayGame_TeamScore"><h3>1</h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">Unknown Player(1)<br /><br />
Unknown Goalie (HFD), 55 saves from 62 shots - (0.887), L, 0-1-0, 60:00 minutes<br /><br /></td></tr></table>

<hr class="STHSTodayGame_HR"><br /></td></tr>
<tr><td class="STHSTodayGame_GameOverall">
<table class="STHSTodayGame_GameTitle"><tr><td class="STHSTodayGame_GameNumber"><h3>Pro Game 1268</h3></td><td class="STHSTodayGame_Boxscore"><h3><a href="OTHL-1268.html">Boxscore</a></h3></td></tr></table><table class="STHSTodayGame_GameData">
<tr><td class="STHSTodayGame_TeamName"><h3>Penguins</h3></td><td class="STHSTodayGame_TeamScore"><h3>3</h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">
Brady Tkachuk(28), Jordan Oesterle(14), Jake Gardiner(3)<br /><br />
Semyon Varlamov (PIT), 15 saves from 19 shots - (0.789), L, 20-31-7, 32:56 minutes<br />Anton Forsberg (PIT), 8 saves from 9 shots - (0.889), 27:04 minutes<br /><br /></td></tr>
<tr><td class="STHSTodayGame_TeamName"><h3>Senators</h3></td><td class="STHSTodayGame_TeamScore"><h3><span style="color:red">5</span></h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">Jason Spezza(14), Patrick Marleau(16,17), J.T. Compher(23), Gustav Nyquist(29)<br /><br />
Max Lagace (OTT), 35 saves from 38 shots - (0.921), W, 8-17-2, 60:00 minutes<br /><br /></td></tr></table>

<hr class="STHSTodayGame_HR"><br /></td>
<td class="STHSTodayGame_GameOverall">
<table class="STHSTodayGame_GameTitle"><tr><td class="STHSTodayGame_GameNumber"><h3>Farm Game 1268</h3></td><td class="STHSTodayGame_Boxscore"><h3><a href="OTHL-Farm-1268.html">Boxscore</a></h3></td></tr></table><table class="STHSTodayGame_GameData">
<tr><td class="STHSTodayGame_TeamName"><h3>Penguins</h3></td><td class="STHSTodayGame_TeamScore"><h3><span style="color:red">4</span></h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">Anthony Greco(59), Gabriel Gagne(57), Tyson Jost(39,40)<br /><br />
Tom McCollum (WBS), 21 saves from 22 shots - (0.955), W, 49-27-5, 60:00 minutes<br /><br /></td></tr>
<tr><td class="STHSTodayGame_TeamName"><h3>Senators</h3></td><td class="STHSTodayGame_TeamScore"><h3>1</h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">Dmytro Timashov(39)<br /><br />
Jimmy Howard (BEL), 24 saves from 28 shots - (0.857), L, 17-26-1, 60:00 minutes<br /><br /></td></tr></table>

<hr class="STHSTodayGame_HR"><br /></td></tr>
<tr><td class="STHSTodayGame_GameOverall">
<table class="STHSTodayGame_GameTitle"><tr><td class="STHSTodayGame_GameNumber"><h3>Pro Game 1269</h3></td><td class="STHSTodayGame_Boxscore"><h3><a href="OTHL-1269.html">Boxscore</a></h3></td></tr></table><table class="STHSTodayGame_GameData">
<tr><td class="STHSTodayGame_TeamName"><h3>Ducks</h3></td><td class="STHSTodayGame_TeamScore"><h3><span style="color:red">3</span></h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">Jordan Staal(6), Artemi Panarin(37), Nazem Kadri(29)<br /><br />
Ryan Miller (ANH), 22 saves from 24 shots - (0.917), W, 9-6-1, 60:00 minutes<br /><br /></td></tr>
<tr><td class="STHSTodayGame_TeamName"><h3>Sharks</h3></td><td class="STHSTodayGame_TeamScore"><h3>2</h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">Kris Letang(16), Garnet Hathaway(3)<br /><br />
Darcy Kuemper (SJS), 25 saves from 28 shots - (0.893), L, 26-22-8, 58:53 minutes<br /><br /></td></tr></table>

<hr class="STHSTodayGame_HR"><br /></td>
<td class="STHSTodayGame_GameOverall">
<table class="STHSTodayGame_GameTitle"><tr><td class="STHSTodayGame_GameNumber"><h3>Farm Game 1269</h3></td><td class="STHSTodayGame_Boxscore"><h3><a href="OTHL-Farm-1269.html">Boxscore</a></h3></td></tr></table><table class="STHSTodayGame_GameData">
<tr><td class="STHSTodayGame_TeamName"><h3>Gulls</h3></td><td class="STHSTodayGame_TeamScore"><h3><span style="color:red">9</span></h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">Ryan MacInnis(46), Lucas Johansen(9), Alex Steen(49,50), Trent Frederic(56), Kevin Stenlund(33), Matthew Peca(3), Zach Senyshyn(43,44)<br /><br />
Ian Scott (SDG), 24 saves from 29 shots - (0.828), W, 40-23-7, 60:00 minutes<br /><br /></td></tr>
<tr><td class="STHSTodayGame_TeamName"><h3>Barracudas</h3></td><td class="STHSTodayGame_TeamScore"><h3>5</h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">Matt Lorito(47), Unknown Player(1), Nic Petan(35,36), Cole Ully(19)<br /><br />
Unknown Goalie (SJB), 18 saves from 24 shots - (0.750), L, 0-1-0, 35:17 minutes<br />Unknown Goalie (SJB), 25 saves from 28 shots - (0.893), 24:43 minutes<br /><br /></td></tr></table>

<hr class="STHSTodayGame_HR"><br /></td></tr>
<tr><td class="STHSTodayGame_GameOverall">
<table class="STHSTodayGame_GameTitle"><tr><td class="STHSTodayGame_GameNumber"><h3>Pro Game 1270</h3></td><td class="STHSTodayGame_Boxscore"><h3><a href="OTHL-1270.html">Boxscore</a></h3></td></tr></table><table class="STHSTodayGame_GameData">
<tr><td class="STHSTodayGame_TeamName"><h3>Canadiens</h3></td><td class="STHSTodayGame_TeamScore"><h3>2</h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">
Brandon Tanev(22), Kyle Turris(13)<br /><br />
Carter Hart (MTL), 27 saves from 32 shots - (0.844), L, 25-25-5, 60:00 minutes<br /><br /></td></tr>
<tr><td class="STHSTodayGame_TeamName"><h3>Maple Leafs</h3></td><td class="STHSTodayGame_TeamScore"><h3><span style="color:red">5</span></h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">Nick Leddy(7), Brandon Saad(22,23,24), Tomas Hertl(33)<br /><br />
Frederik Andersen (TOR), 30 saves from 32 shots - (0.938), W, 31-22-3, 60:00 minutes<br /><br /></td></tr></table>

<hr class="STHSTodayGame_HR"><br /></td>
<td class="STHSTodayGame_GameOverall">
<table class="STHSTodayGame_GameTitle"><tr><td class="STHSTodayGame_GameNumber"><h3>Farm Game 1270</h3></td><td class="STHSTodayGame_Boxscore"><h3><a href="OTHL-Farm-1270.html">Boxscore</a></h3></td></tr></table><table class="STHSTodayGame_GameData">
<tr><td class="STHSTodayGame_TeamName"><h3>Rocket</h3></td><td class="STHSTodayGame_TeamScore"><h3>1</h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">
Jonny Brodzinski(53)<br /><br />
Mikhail Berdin (LAV), 9 saves from 13 shots - (0.692), L, 37-32-6, 22:14 minutes<br />David Ayres (LAV), 15 saves from 18 shots - (0.833), 37:46 minutes<br /><br /></td></tr>
<tr><td class="STHSTodayGame_TeamName"><h3>Marlies</h3></td><td class="STHSTodayGame_TeamScore"><h3><span style="color:red">7</span></h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">Ryan Stanton(10,11), Cody Glass(29), Steven Lorentz(42), Justin Auger(22,23,24)<br /><br />
Jared Coreau (TOR), 6 saves from 7 shots - (0.857), W, 56-22-4, 60:00 minutes<br /><br /></td></tr></table>

<hr class="STHSTodayGame_HR"><br /></td></tr>
<tr><td class="STHSTodayGame_GameOverall">
<table class="STHSTodayGame_GameTitle"><tr><td class="STHSTodayGame_GameNumber"><h3>Pro Game 1271</h3></td><td class="STHSTodayGame_Boxscore"><h3><a href="OTHL-1271.html">Boxscore</a></h3></td></tr></table><table class="STHSTodayGame_GameData">
<tr><td class="STHSTodayGame_TeamName"><h3>Golden Knights</h3></td><td class="STHSTodayGame_TeamScore"><h3>2</h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">
Eric Staal(22), Jordan Eberle(15)<br /><br />
Mackenzie Blackwood (VGK), 51 saves from 54 shots - (0.944), L, 29-30-4, 59:17 minutes<br /><br /></td></tr>
<tr><td class="STHSTodayGame_TeamName"><h3>Canucks</h3></td><td class="STHSTodayGame_TeamScore"><h3><span style="color:red">3</span></h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">Auston Matthews(31,32), Yanni Gourde(15)<br /><br />
Jacob Markstrom (VAN), 15 saves from 17 shots - (0.882), W, 33-24-3, 60:00 minutes<br /><br /></td></tr></table>

<hr class="STHSTodayGame_HR"><br /></td>
<td class="STHSTodayGame_GameOverall">
<table class="STHSTodayGame_GameTitle"><tr><td class="STHSTodayGame_GameNumber"><h3>Farm Game 1271</h3></td><td class="STHSTodayGame_Boxscore"><h3><a href="OTHL-Farm-1271.html">Boxscore</a></h3></td></tr></table><table class="STHSTodayGame_GameData">
<tr><td class="STHSTodayGame_TeamName"><h3>Wolves</h3></td><td class="STHSTodayGame_TeamScore"><h3>0</h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">
<br /><br />
Adam Werner (CHI), 19 saves from 22 shots - (0.864), L, 55-21-5, 60:00 minutes<br /><br /></td></tr>
<tr><td class="STHSTodayGame_TeamName"><h3>Comets</h3></td><td class="STHSTodayGame_TeamScore"><h3><span style="color:red">3</span></h3></td></tr><tr><td colspan="2" class="STHSTodayGame_TeamNote">Gavin Bayreuther(8), Frederic Allard(2), Garrett Pilon(14)<br /><br />
Alexandar Georgiev (UTI), 11 saves from 11 shots - (1.000), W, 54-15-4, 60:00 minutes<br /><br /></td></tr></table>

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
