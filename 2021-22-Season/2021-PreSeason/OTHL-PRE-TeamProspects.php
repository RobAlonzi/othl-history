<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<title>OTHL - Team Prospects</title>
<script src="OTHL-PRE.js"></script>
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
<div class="STHSTopLink"><a id="STHSRosterTop"></a> <a href="#Avalanche">Avalanche</a> | <a href="#Blackhawks">Blackhawks</a> | <a href="#BlueJackets">Blue Jackets</a> | <a href="#Blues">Blues</a> | <a href="#Bruins">Bruins</a> | <a href="#Canadiens">Canadiens</a> | <a href="#Canucks">Canucks</a> | <a href="#Capitals">Capitals</a> | <a href="#Coyotes">Coyotes</a> | <a href="#Devils">Devils</a> | <a href="#Ducks">Ducks</a> | <a href="#Flames">Flames</a> | <a href="#Flyers">Flyers</a> | <a href="#GoldenKnights">Golden Knights</a> | <a href="#Hurricanes">Hurricanes</a> | <a href="#Islanders">Islanders</a> | <a href="#Jets">Jets</a> | <a href="#Kings">Kings</a> | <a href="#Kraken">Kraken</a> | <a href="#Lightning">Lightning</a> | <a href="#MapleLeafs">Maple Leafs</a> | <a href="#Oilers">Oilers</a> | <a href="#Panthers">Panthers</a> | <a href="#Penguins">Penguins</a> | <a href="#Predators">Predators</a> | <a href="#Rangers">Rangers</a> | <a href="#RedWings">Red Wings</a> | <a href="#Sabres">Sabres</a> | <a href="#Senators">Senators</a> | <a href="#Sharks">Sharks</a> | <a href="#Stars">Stars</a> | <a href="#Wild">Wild</a> | <a href="javascript:STHS_JS_CloseAll('');">Close All Team View</a> | <a href="javascript:STHS_JS_OpenAll('');">Open All Team View</a>
</div>
<h1 class="TeamProspects_COL"><a id="Avalanche">Avalanche</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=8">Avalanche Page</a> ]
[ <a href="OTHL-PRE-ProTeamRoster.php#Avalanche">Pro Team Roster</a> ]
[ <a href="OTHL-PRE-ProTeamScoring.php#Avalanche">Pro Team Scoring</a> ]
[ <a href="OTHL-PRE-TeamFinance.php#Avalanche">Team Finance</a> ]
[ <a href="OTHL-PRE-ProTeamPlayersInfo.php#Avalanche">Pro Team PlayersInfo</a> ]
[ <a href="OTHL-PRE-ProTeamLines.php#Avalanche">Pro Team Lines</a> ]
[ <a href="OTHL-PRE-TeamProspects.php#Avalanche">Team Prospects</a> ]
[ <a href="OTHL-PRE-ProTeamSchedule.php#Avalanche">Pro Team Schedule</a> ]
[ <a href="OTHL-PRE-ProTeamStats.php#Avalanche">Pro Team Stats</a> ]
[ <a href="OTHL-PRE-ProTeamStatsVS.php#Avalanche">Pro Team Stats VS</a> ]
[ <a href="OTHL-PRE-TeamInjurySuspension.php#Avalanche">Team Injury Suspension</a> ]
[ <a href="OTHL-PRE-TeamHistory.php#Avalanche">Team History</a> ]
[ <a href="OTHL-PRE-TeamRecords.php#Avalanche">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Avalanche');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Avalanche" style="display: block;">
<h3 class="STHSTeamProspect_Prospect">Prospects - 46</h3>
Alban Eriksson(Y:2018-O:50), Aleksi Malinen(Y:2021-O:136), Alfons Malmstrom(Y:2016-O:143), Ben Thomas(Y:2014-O:98), Brendan Woods(Y:2012-O:145), Brett Berard(Y:2020-O:101), Brett Davis(Y:2017-O:176), Brett Harrison(Y:2021-O:72), Brett Stapley(Y:2018-O:202), Cade Webber(Y:2019-O:127), Damien Riat(Y:2016-O:173), Daniel Ljungman(Y:2020-O:141), Daniil Pylenkov(Y:2021-O:193), David Tendeck(Y:2018-O:182), Dmitri Semykin(Y:2018-O:112), Dylan Guenther(Y:2021-O:8), Dylan Holloway(Y:2020-O:17), Hugo Gabrielson(Y:2021-O:168), Iaroslav Askarov(Y:2020-O:8), Jack Lafontaine(Y:2016-O:88), Jake Kucharski(Y:2018-O:213), Jakob Ragnarsson(Y:2018-O:90), James Greenway(Y:2016-O:85), Jayden Struble(Y:2019-O:65), Joshua Jacobs(Y:2014-O:59), Liam Hawel(Y:2017-O:145), Luke Loheit(Y:2018-O:205), Luke Reid(Y:2020-O:163), Marco Roy(Y:2013-O:50), Merrick Madsen(Y:2013-O:174), Michael Vukojevic(Y:2019-O:84), Miska Kukkonen(Y:2018-O:174), Nate Schnarr(Y:2017-O:91), Nick Abruzzese(Y:2019-O:153), Oskar Back(Y:2018-O:81), Pavel Dorofeyev(Y:2019-O:51), Reid Duke(Y:2014-O:142), Ryan Johnson(Y:2019-O:41), Ryan Zuhlsdorf(Y:2015-O:167), Santeri Virtanen(Y:2017-O:98), Sasha Pastujov(Y:2021-O:40), Thomas Bordeleau(Y:2020-O:39), Vincent Desharnais(Y:2016-O:203), William von Barnekow-Lofberg(Y:2021-O:200), Yevgeni Oksentyuk(Y:2020-O:132), Zakhar Bardakov(Y:2021-O:208)<br />
<h3 class="STHSTeamProspect_DraftPick">Draft Picks</h3>
<b>Year 2022: </b>COL 1, COL 2, PHL 3, COL 3<br />
<b>Year 2023: </b>COL 1, COL 2, COL 3, COL 4, COL 5, COL 6, COL 7<br />
<b>Year 2024: </b>COL 1, COL 2, COL 3, COL 4, COL 5, COL 6, COL 7<br />
<b>Year 2025: </b>COL 1, COL 2, COL 3, COL 4, COL 5, COL 6, COL 7<br />
<b>Year 2026: </b>COL 1, COL 2, COL 3, COL 4, COL 5, COL 6, COL 7<br />
</div>
<h1 class="TeamProspects_CHI"><a id="Blackhawks">Blackhawks</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=7">Blackhawks Page</a> ]
[ <a href="OTHL-PRE-ProTeamRoster.php#Blackhawks">Pro Team Roster</a> ]
[ <a href="OTHL-PRE-ProTeamScoring.php#Blackhawks">Pro Team Scoring</a> ]
[ <a href="OTHL-PRE-TeamFinance.php#Blackhawks">Team Finance</a> ]
[ <a href="OTHL-PRE-ProTeamPlayersInfo.php#Blackhawks">Pro Team PlayersInfo</a> ]
[ <a href="OTHL-PRE-ProTeamLines.php#Blackhawks">Pro Team Lines</a> ]
[ <a href="OTHL-PRE-TeamProspects.php#Blackhawks">Team Prospects</a> ]
[ <a href="OTHL-PRE-ProTeamSchedule.php#Blackhawks">Pro Team Schedule</a> ]
[ <a href="OTHL-PRE-ProTeamStats.php#Blackhawks">Pro Team Stats</a> ]
[ <a href="OTHL-PRE-ProTeamStatsVS.php#Blackhawks">Pro Team Stats VS</a> ]
[ <a href="OTHL-PRE-TeamInjurySuspension.php#Blackhawks">Team Injury Suspension</a> ]
[ <a href="OTHL-PRE-TeamHistory.php#Blackhawks">Team History</a> ]
[ <a href="OTHL-PRE-TeamRecords.php#Blackhawks">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Blackhawks');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Blackhawks" style="display: block;">
<h3 class="STHSTeamProspect_Prospect">Prospects - 37</h3>
Adam Edstrom(Y:2019-O:178), Aku Raty(Y:2019-O:137), Aleksi Makela(Y:2013-O:206), Alex Kannok-Leipert(Y:2018-O:169), Andrei Popov, Artur Kayumov(Y:2016-O:57), Brett McKenzie(Y:2016-O:179), Cristiano Digiacinto(Y:2014-O:187), Dillon Hamaliuk(Y:2019-O:58), Dustyn McFaul(Y:2018-O:170), Eetu Liukas(Y:2021-O:178), Fredrik Olofsson(Y:2014-O:117), Gustav Olhaver(Y:2015-O:184), Hugh McGing(Y:2018-O:165), Ilya Solovyov(Y:2020-O:203), Isak Walther(Y:2019-O:201), Jacob Holmes(Y:2021-O:166), Jake Boltmann(Y:2020-O:131), Jayden Grubbe(Y:2021-O:97), Kalle Loponen(Y:2019-O:193), Kalle Vaisanen(Y:2021-O:132), Keean Washkurak(Y:2019-O:174), Logan Neaton(Y:2019-O:180), Marc Del Gaizo(Y:2019-O:126), Massimo Rizzo(Y:2019-O:214), Matthew Strome(Y:2017-O:71), Nikita Filatov, Nikita Novikov(Y:2021-O:190), Ole Julian Bjorgvik-Holm(Y:2020-O:157), Oskar Jellvik(Y:2021-O:185), Pavel Shen(Y:2018-O:214), Riley Hughes(Y:2018-O:208), Samuel Kurker(Y:2012-O:62), Semyon Der-Arguchintsev(Y:2018-O:83), Timur Ibragimov(Y:2019-O:194), Wyatte Wylie(Y:2018-O:153), Yegor Naumov(Y:2021-O:184)<br />
<h3 class="STHSTeamProspect_DraftPick">Draft Picks</h3>
<b>Year 2022: </b>CHI 1, CHI 2, CHI 3, CHI 4, CLB 5, CHI 5, BUF 5, SJS 6, CHI 6, COL 7, CHI 7<br />
<b>Year 2023: </b>CHI 1, CHI 2, CHI 3, CHI 4, CHI 5, CHI 6, BOS 7<br />
<b>Year 2024: </b>CHI 1, CHI 2, CHI 3, CHI 4, CHI 5, CHI 6, CHI 7<br />
<b>Year 2025: </b>CHI 1, CHI 2, CHI 3, CHI 4, CHI 5, CHI 6, CHI 7<br />
<b>Year 2026: </b>CHI 1, CHI 2, CHI 3, CHI 4, CHI 5, CHI 6, CHI 7<br />
</div>
<h1 class="TeamProspects_CLB"><a id="BlueJackets">Blue Jackets</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=9">Blue Jackets Page</a> ]
[ <a href="OTHL-PRE-ProTeamRoster.php#BlueJackets">Pro Team Roster</a> ]
[ <a href="OTHL-PRE-ProTeamScoring.php#BlueJackets">Pro Team Scoring</a> ]
[ <a href="OTHL-PRE-TeamFinance.php#BlueJackets">Team Finance</a> ]
[ <a href="OTHL-PRE-ProTeamPlayersInfo.php#BlueJackets">Pro Team PlayersInfo</a> ]
[ <a href="OTHL-PRE-ProTeamLines.php#BlueJackets">Pro Team Lines</a> ]
[ <a href="OTHL-PRE-TeamProspects.php#BlueJackets">Team Prospects</a> ]
[ <a href="OTHL-PRE-ProTeamSchedule.php#BlueJackets">Pro Team Schedule</a> ]
[ <a href="OTHL-PRE-ProTeamStats.php#BlueJackets">Pro Team Stats</a> ]
[ <a href="OTHL-PRE-ProTeamStatsVS.php#BlueJackets">Pro Team Stats VS</a> ]
[ <a href="OTHL-PRE-TeamInjurySuspension.php#BlueJackets">Team Injury Suspension</a> ]
[ <a href="OTHL-PRE-TeamHistory.php#BlueJackets">Team History</a> ]
[ <a href="OTHL-PRE-TeamRecords.php#BlueJackets">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_BlueJackets');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_BlueJackets" style="display: block;">
<h3 class="STHSTeamProspect_Prospect">Prospects - 49</h3>
Aaron Irving(Y:2014-O:127), Adam Wilsby(Y:2020-O:104), Aidan Mcdonough(Y:2019-O:168), Aku Koskenvuo(Y:2021-O:114), Amir Miftakhov(Y:2020-O:149), Artyom Galimov(Y:2020-O:126), Artyom Manukyan(Y:2018-O:179), Blake Biondi(Y:2020-O:89), Bode Wilde(Y:2018-O:36), Braden Schneider(Y:2020-O:27), Carter Savoie(Y:2020-O:79), Connor Lockhart(Y:2021-O:121), Danila Klimovich(Y:2021-O:38), Drew Commesso(Y:2020-O:42), Dylan Garand(Y:2020-O:87), Elliot Ekefjard(Y:2020-O:211), Eric Engstrand(Y:2020-O:176), Ethan Edwards(Y:2020-O:151), Filip Lindberg(Y:2019-O:135), Giovanni Vallati(Y:2018-O:123), Haakon Hanelt (F/D)(Y:2021-O:146), Jack Finley(Y:2020-O:50), Jake Neighbours(Y:2020-O:37), Jeremie Poirier(Y:2020-O:51), Jonathan Myrenberg(Y:2021-O:138), Joni Jurmo(Y:2020-O:65), Kale Howarth(Y:2017-O:103), Kent Johnson(Y:2021-O:4), Lars Volden(Y:2011-O:129), Lauri Pajuniemi(Y:2018-O:137), Linus Oberg(Y:2020-O:155), Luca Munzenberger(Y:2021-O:133), Luka Burzan(Y:2019-O:166), Lukas Svejkovsky(Y:2020-O:105), Mackie Samoskevich(Y:2021-O:31), Marat Khusnutdinov(Y:2020-O:30), Mikhail Shalagin(Y:2019-O:177), Nikita Guslistov(Y:2021-O:164), Nolan Allan(Y:2021-O:37), Parker Foo(Y:2017-O:107), Samuel Johannesson(Y:2020-O:134), Seth Barton(Y:2018-O:72), Simon Edvinsson(Y:2021-O:9), Tyler Boucher(Y:2021-O:18), Valtteri Puustinen(Y:2019-O:182), Viktor Persson(Y:2020-O:166), Wiley Sherman(Y:2013-O:179), William Lockwood(Y:2016-O:70), Yan Kuznetsov(Y:2020-O:53)<br />
<h3 class="STHSTeamProspect_DraftPick">Draft Picks</h3>
<b>Year 2022: </b>CLB 1, CLB 3, ANH 4, CLB 4, STL 5, TBL 6, CLB 6, EDM 7<br />
<b>Year 2023: </b>CLB 1, CLB 2, CLB 3, CLB 4, CLB 5, CLB 6, PHL 6, CHI 7, CLB 7<br />
<b>Year 2024: </b>CLB 1, CLB 2, CLB 3, CLB 4, CLB 5, CLB 6, CLB 7<br />
<b>Year 2025: </b>CLB 1, CLB 2, CLB 3, CLB 4, CLB 5, CLB 6, CLB 7<br />
<b>Year 2026: </b>CLB 1, CLB 2, CLB 3, CLB 4, CLB 5, CLB 6, CLB 7<br />
</div>
<h1 class="TeamProspects_STL"><a id="Blues">Blues</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=25">Blues Page</a> ]
[ <a href="OTHL-PRE-ProTeamRoster.php#Blues">Pro Team Roster</a> ]
[ <a href="OTHL-PRE-ProTeamScoring.php#Blues">Pro Team Scoring</a> ]
[ <a href="OTHL-PRE-TeamFinance.php#Blues">Team Finance</a> ]
[ <a href="OTHL-PRE-ProTeamPlayersInfo.php#Blues">Pro Team PlayersInfo</a> ]
[ <a href="OTHL-PRE-ProTeamLines.php#Blues">Pro Team Lines</a> ]
[ <a href="OTHL-PRE-TeamProspects.php#Blues">Team Prospects</a> ]
[ <a href="OTHL-PRE-ProTeamSchedule.php#Blues">Pro Team Schedule</a> ]
[ <a href="OTHL-PRE-ProTeamStats.php#Blues">Pro Team Stats</a> ]
[ <a href="OTHL-PRE-ProTeamStatsVS.php#Blues">Pro Team Stats VS</a> ]
[ <a href="OTHL-PRE-TeamInjurySuspension.php#Blues">Team Injury Suspension</a> ]
[ <a href="OTHL-PRE-TeamHistory.php#Blues">Team History</a> ]
[ <a href="OTHL-PRE-TeamRecords.php#Blues">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Blues');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Blues" style="display: block;">
<h3 class="STHSTeamProspect_Prospect">Prospects - 29</h3>
Adam Ruzicka(Y:2017-O:93), Aidan Hreschuk(Y:2021-O:84), Anttoni Honka(Y:2019-O:68), Ayrton Martino(Y:2021-O:59), Brent Johnson(Y:2021-O:70), Dominic Basse(Y:2019-O:198), Emil Heineman(Y:2020-O:43), Garin Bjorklund(Y:2020-O:175), Hendrix Lapierre(Y:2020-O:19), Henri Nikkanen(Y:2019-O:90), Hunter Skinner(Y:2019-O:157), Jacob Leguerrier(Y:2019-O:161), Jesper Eliasson(Y:2018-O:106), Justin Barron(Y:2020-O:34), Kirill Gerasimyuk(Y:2021-O:129), Lucas Raymond(Y:2020-O:4), Mathias Laferriere(Y:2018-O:146), McKade Webster(Y:2019-O:216), Milan Kloucek(Y:2018-O:215), Nikita Alexandrov(Y:2019-O:44), Patrik Hamrla(Y:2021-O:73), Peter Thome(Y:2016-O:163), Peyton Krebs(Y:2019-O:12), Robin Salo(Y:2017-O:61), Seth Jarvis(Y:2020-O:11), Simon Robertsson(Y:2021-O:55), Vasili Podkolzin(Y:2019-O:6), Vasiliy Ponomarev(Y:2020-O:45), Ville Koivunen(Y:2021-O:49)<br />
<h3 class="STHSTeamProspect_DraftPick">Draft Picks</h3>
<b>Year 2022: </b>STL 1, TOR 2, STL 2, BOS 3, STL 3, STL 4, TBL 5, STL 6<br />
<b>Year 2023: </b>STL 1, STL 2, STL 4, STL 5, STL 6, STL 7, NJD 7<br />
<b>Year 2024: </b>STL 1, STL 2, STL 3, STL 4, STL 5, STL 6<br />
<b>Year 2025: </b>STL 1, STL 2, STL 3, STL 4, STL 5, STL 6, STL 7<br />
<b>Year 2026: </b>STL 1, STL 2, STL 3, STL 4, STL 5, STL 6, STL 7<br />
</div>
<h1 class="TeamProspects_BOS"><a id="Bruins">Bruins</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=3">Bruins Page</a> ]
[ <a href="OTHL-PRE-ProTeamRoster.php#Bruins">Pro Team Roster</a> ]
[ <a href="OTHL-PRE-ProTeamScoring.php#Bruins">Pro Team Scoring</a> ]
[ <a href="OTHL-PRE-TeamFinance.php#Bruins">Team Finance</a> ]
[ <a href="OTHL-PRE-ProTeamPlayersInfo.php#Bruins">Pro Team PlayersInfo</a> ]
[ <a href="OTHL-PRE-ProTeamLines.php#Bruins">Pro Team Lines</a> ]
[ <a href="OTHL-PRE-TeamProspects.php#Bruins">Team Prospects</a> ]
[ <a href="OTHL-PRE-ProTeamSchedule.php#Bruins">Pro Team Schedule</a> ]
[ <a href="OTHL-PRE-ProTeamStats.php#Bruins">Pro Team Stats</a> ]
[ <a href="OTHL-PRE-ProTeamStatsVS.php#Bruins">Pro Team Stats VS</a> ]
[ <a href="OTHL-PRE-TeamInjurySuspension.php#Bruins">Team Injury Suspension</a> ]
[ <a href="OTHL-PRE-TeamHistory.php#Bruins">Team History</a> ]
[ <a href="OTHL-PRE-TeamRecords.php#Bruins">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Bruins');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Bruins" style="display: block;">
<h3 class="STHSTeamProspect_Prospect">Prospects - 31</h3>
Albert Sjoberg(Y:2021-O:204), Alex Gagne(Y:2021-O:153), Andrei Buyalsky(Y:2021-O:64), Arsenii Sergeev(Y:2021-O:179), Artur Cholach(Y:2021-O:141), Benjamin Roger(Y:2021-O:66), Braden Hache(Y:2021-O:216), Brandon Saigeon(Y:2018-O:128), Brian Zanetti(Y:2021-O:155), Dmitri Kuzmin(Y:2021-O:99), Egor Serdyuk(Y:2019-O:159), Erik Walli-Walterholm(Y:2017-O:181), Ethan Cardwell(Y:2021-O:106), Ethan Samson(Y:2021-O:207), Gage Alexander(Y:2021-O:111), Hank Kempf(Y:2021-O:222), Ivan Vorobyov(Y:2021-O:195), Jakub Demek(Y:2021-O:135), Joaquim Lemay(Y:2021-O:194), Kirill Tankov(Y:2021-O:197), Lucas Ciona(Y:2021-O:211), Matthew Cairns(Y:2016-O:95), Niko Huuhtanen(Y:2021-O:175), Robbie Stucker(Y:2017-O:200), Robert Flinton(Y:2021-O:205), Robert Orr(Y:2021-O:109), Samu Salminen(Y:2021-O:50), Ty Gallagher(Y:2021-O:196), Ty Voit (C/LW)(Y:2021-O:117), Tyson Kozak(Y:2021-O:213), Viljami Marjala(Y:2021-O:134)<br />
<h3 class="STHSTeamProspect_DraftPick">Draft Picks</h3>
<b>Year 2022: </b>MTL 4, DAL 7<br />
<b>Year 2023: </b><br />
<b>Year 2024: </b>BOS 1, BOS 2, BOS 3, BOS 4, BOS 5, BOS 6<br />
<b>Year 2025: </b>BOS 1, BOS 2, BOS 3, BOS 4, BOS 5, BOS 6, BOS 7<br />
<b>Year 2026: </b>BOS 1, BOS 2, BOS 3, BOS 4, BOS 5, BOS 6, BOS 7<br />
</div>
<h1 class="TeamProspects_MTL"><a id="Canadiens">Canadiens</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=16">Canadiens Page</a> ]
[ <a href="OTHL-PRE-ProTeamRoster.php#Canadiens">Pro Team Roster</a> ]
[ <a href="OTHL-PRE-ProTeamScoring.php#Canadiens">Pro Team Scoring</a> ]
[ <a href="OTHL-PRE-TeamFinance.php#Canadiens">Team Finance</a> ]
[ <a href="OTHL-PRE-ProTeamPlayersInfo.php#Canadiens">Pro Team PlayersInfo</a> ]
[ <a href="OTHL-PRE-ProTeamLines.php#Canadiens">Pro Team Lines</a> ]
[ <a href="OTHL-PRE-TeamProspects.php#Canadiens">Team Prospects</a> ]
[ <a href="OTHL-PRE-ProTeamSchedule.php#Canadiens">Pro Team Schedule</a> ]
[ <a href="OTHL-PRE-ProTeamStats.php#Canadiens">Pro Team Stats</a> ]
[ <a href="OTHL-PRE-ProTeamStatsVS.php#Canadiens">Pro Team Stats VS</a> ]
[ <a href="OTHL-PRE-TeamInjurySuspension.php#Canadiens">Team Injury Suspension</a> ]
[ <a href="OTHL-PRE-TeamHistory.php#Canadiens">Team History</a> ]
[ <a href="OTHL-PRE-TeamRecords.php#Canadiens">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Canadiens');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Canadiens" style="display: block;">
<h3 class="STHSTeamProspect_Prospect">Prospects - 10</h3>
Chase McLane(Y:2020-O:215), Chaz Lucius(Y:2021-O:13), Eric Roy(Y:2013-O:102), Grigori Denisenko(Y:2018-O:17), Jake Sanderson(Y:2020-O:9), Moritz Seider(Y:2019-O:13), Patrick Harper(Y:2016-O:126), Tristen Robins(Y:2020-O:40), Tyler Soy(Y:2016-O:127), Xavier Bernard(Y:2018-O:100)<br />
<h3 class="STHSTeamProspect_DraftPick">Draft Picks</h3>
<b>Year 2022: </b><br />
<b>Year 2023: </b>MTL 1, MTL 2, MTL 3, MTL 5, MTL 6, MTL 7<br />
<b>Year 2024: </b>MTL 1, MTL 2, MTL 3, MTL 4, MTL 5, MTL 6, MTL 7<br />
<b>Year 2025: </b>MTL 1, MTL 2, MTL 3, MTL 4, MTL 5, MTL 6, MTL 7<br />
<b>Year 2026: </b>MTL 1, MTL 2, MTL 3, MTL 4, MTL 5, MTL 6, MTL 7<br />
</div>
<h1 class="TeamProspects_VAN"><a id="Canucks">Canucks</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=29">Canucks Page</a> ]
[ <a href="OTHL-PRE-ProTeamRoster.php#Canucks">Pro Team Roster</a> ]
[ <a href="OTHL-PRE-ProTeamScoring.php#Canucks">Pro Team Scoring</a> ]
[ <a href="OTHL-PRE-TeamFinance.php#Canucks">Team Finance</a> ]
[ <a href="OTHL-PRE-ProTeamPlayersInfo.php#Canucks">Pro Team PlayersInfo</a> ]
[ <a href="OTHL-PRE-ProTeamLines.php#Canucks">Pro Team Lines</a> ]
[ <a href="OTHL-PRE-TeamProspects.php#Canucks">Team Prospects</a> ]
[ <a href="OTHL-PRE-ProTeamSchedule.php#Canucks">Pro Team Schedule</a> ]
[ <a href="OTHL-PRE-ProTeamStats.php#Canucks">Pro Team Stats</a> ]
[ <a href="OTHL-PRE-ProTeamStatsVS.php#Canucks">Pro Team Stats VS</a> ]
[ <a href="OTHL-PRE-TeamInjurySuspension.php#Canucks">Team Injury Suspension</a> ]
[ <a href="OTHL-PRE-TeamHistory.php#Canucks">Team History</a> ]
[ <a href="OTHL-PRE-TeamRecords.php#Canucks">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Canucks');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Canucks" style="display: block;">
<h3 class="STHSTeamProspect_Prospect">Prospects - 37</h3>
Arsen Khisamutdinov(Y:2019-O:184), Benjamin Baumgartner(Y:2020-O:172), Brody Lamb(Y:2021-O:115), Cameron MacDonald(Y:2021-O:161), Clayton Phillips(Y:2017-O:125), Declan Chisholm(Y:2018-O:156), Emil Galimov(Y:2013-O:204), Harrison Blaisdell(Y:2019-O:91), Igor Bobkov(Y:2009-O:63), Jacob McGrew(Y:2017-O:184), Jakub Lauko(Y:2018-O:63), Jesper Lindgren(Y:2015-O:87), Joel Daccord(Y:2015-O:182), John Dahlstrom(Y:2015-O:204), Jonathan Kovacevic(Y:2017-O:70), Linus Nassen(Y:2016-O:98), Magnus Chrona(Y:2018-O:172), Matteo Costantini(Y:2020-O:161), Mattias Norlinder(Y:2019-O:77), Max McCue(Y:2021-O:149), Maxim Shalunov(Y:2011-O:122), Michael Karow(Y:2017-O:156), Mitchell Hoelscher(Y:2018-O:178), Nathan Smith(Y:2018-O:109), Nick Pastujov(Y:2016-O:174), Oliver Tarnstrom(Y:2020-O:121), Owen Lindmark(Y:2019-O:136), Pavel Kraskovsky(Y:2014-O:128), Riley Tufte(Y:2016-O:26), Roddy Ross(Y:2019-O:156), Ryder Rolston(Y:2020-O:162), Spencer Stastney(Y:2018-O:136), Troy Josephs(Y:2013-O:209), Tuukka Tieksola(Y:2019-O:106), Tyler Nanne(Y:2014-O:185), Victor Soderstrom(Y:2019-O:18), Zachary Emond(Y:2018-O:186)<br />
<h3 class="STHSTeamProspect_DraftPick">Draft Picks</h3>
<b>Year 2022: </b>VAN 1, VAN 2, BUF 4, WPG 4, VAN 4, FLA 5, VAN 6, VAN 7<br />
<b>Year 2023: </b>VAN 1, VAN 2, VAN 3, VAN 4, VAN 5, VAN 6, VAN 7<br />
<b>Year 2024: </b>VAN 1, VAN 2, VAN 3, VAN 4, VAN 5, VAN 6, VAN 7<br />
<b>Year 2025: </b>VAN 1, VAN 2, VAN 3, VAN 4, VAN 5, VAN 6, VAN 7<br />
<b>Year 2026: </b>VAN 1, VAN 2, VAN 3, VAN 4, VAN 5, VAN 6, VAN 7<br />
</div>
<h1 class="TeamProspects_WSH"><a id="Capitals">Capitals</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=30">Capitals Page</a> ]
[ <a href="OTHL-PRE-ProTeamRoster.php#Capitals">Pro Team Roster</a> ]
[ <a href="OTHL-PRE-ProTeamScoring.php#Capitals">Pro Team Scoring</a> ]
[ <a href="OTHL-PRE-TeamFinance.php#Capitals">Team Finance</a> ]
[ <a href="OTHL-PRE-ProTeamPlayersInfo.php#Capitals">Pro Team PlayersInfo</a> ]
[ <a href="OTHL-PRE-ProTeamLines.php#Capitals">Pro Team Lines</a> ]
[ <a href="OTHL-PRE-TeamProspects.php#Capitals">Team Prospects</a> ]
[ <a href="OTHL-PRE-ProTeamSchedule.php#Capitals">Pro Team Schedule</a> ]
[ <a href="OTHL-PRE-ProTeamStats.php#Capitals">Pro Team Stats</a> ]
[ <a href="OTHL-PRE-ProTeamStatsVS.php#Capitals">Pro Team Stats VS</a> ]
[ <a href="OTHL-PRE-TeamInjurySuspension.php#Capitals">Team Injury Suspension</a> ]
[ <a href="OTHL-PRE-TeamHistory.php#Capitals">Team History</a> ]
[ <a href="OTHL-PRE-TeamRecords.php#Capitals">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Capitals');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Capitals" style="display: block;">
<h3 class="STHSTeamProspect_Prospect">Prospects - 30</h3>
Alex Newhook(Y:2019-O:14), Alexander Dergachyov(Y:2015-O:55), Aliaksei Protas(Y:2019-O:76), Andrei Mironov(Y:2015-O:92), Arthur Kaliyev(Y:2019-O:25), Blade Jenkins(Y:2018-O:114), Carter Berger(Y:2019-O:128), Daniil Tarasov(Y:2017-O:58), Dmitri Kugryshev, Drake Rymsha(Y:2017-O:92), Filip Cederqvist(Y:2019-O:115), Francesco Pinelli(Y:2021-O:33), Frederik Tiffels(Y:2015-O:171), Helge Grans(Y:2020-O:25), Henry Thrun(Y:2019-O:105), Jacob Moverare(Y:2016-O:90), Jakob Pelletier(Y:2019-O:28), Jamieson Rees(Y:2019-O:47), Kirill Kirsanov(Y:2021-O:69), Mattias Lindstrom(Y:2009-O:91), Noah Cates(Y:2017-O:118), Oskar Olausson(Y:2021-O:27), Reilly Webb(Y:2017-O:190), Riley Damiani(Y:2018-O:118), Ronnie Attard(Y:2019-O:72), Sampo Ranta(Y:2018-O:73), Samuel Fagemo(Y:2019-O:36), Tyce Thompson(Y:2019-O:116), Tyler Madden(Y:2018-O:66), Viktor Lodin(Y:2019-O:121)<br />
<h3 class="STHSTeamProspect_DraftPick">Draft Picks</h3>
<b>Year 2022: </b>WSH 1, WSH 2, TBL 4, WSH 4, WSH 6<br />
<b>Year 2023: </b>WSH 1, WSH 2, WSH 3, WSH 4, WSH 5, WSH 6, WSH 7<br />
<b>Year 2024: </b>WSH 1, WSH 2, WSH 3, WSH 4, WSH 5, WSH 6, WSH 7<br />
<b>Year 2025: </b>WSH 1, WSH 2, WSH 3, WSH 4, WSH 5, WSH 6, WSH 7<br />
<b>Year 2026: </b>WSH 1, WSH 2, WSH 3, WSH 4, WSH 5, WSH 6, WSH 7<br />
</div>
<h1 class="TeamProspects_ARI"><a id="Coyotes">Coyotes</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=23">Coyotes Page</a> ]
[ <a href="OTHL-PRE-ProTeamRoster.php#Coyotes">Pro Team Roster</a> ]
[ <a href="OTHL-PRE-ProTeamScoring.php#Coyotes">Pro Team Scoring</a> ]
[ <a href="OTHL-PRE-TeamFinance.php#Coyotes">Team Finance</a> ]
[ <a href="OTHL-PRE-ProTeamPlayersInfo.php#Coyotes">Pro Team PlayersInfo</a> ]
[ <a href="OTHL-PRE-ProTeamLines.php#Coyotes">Pro Team Lines</a> ]
[ <a href="OTHL-PRE-TeamProspects.php#Coyotes">Team Prospects</a> ]
[ <a href="OTHL-PRE-ProTeamSchedule.php#Coyotes">Pro Team Schedule</a> ]
[ <a href="OTHL-PRE-ProTeamStats.php#Coyotes">Pro Team Stats</a> ]
[ <a href="OTHL-PRE-ProTeamStatsVS.php#Coyotes">Pro Team Stats VS</a> ]
[ <a href="OTHL-PRE-TeamInjurySuspension.php#Coyotes">Team Injury Suspension</a> ]
[ <a href="OTHL-PRE-TeamHistory.php#Coyotes">Team History</a> ]
[ <a href="OTHL-PRE-TeamRecords.php#Coyotes">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Coyotes');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Coyotes" style="display: block;">
<h3 class="STHSTeamProspect_Prospect">Prospects - 31</h3>
Alexandr Darin(Y:2019-O:112), Cam York(Y:2019-O:19), Colby Ambrosio(Y:2020-O:114), Dean Stewart(Y:2016-O:198), Eamon McAdam(Y:2013-O:83), Elmer Soderblom(Y:2019-O:155), Erik Kallgren(Y:2015-O:163), Filip Larsson(Y:2016-O:191), Filip Westerlund(Y:2017-O:49), Ivan Prosvetov(Y:2018-O:154), Jacob Perreault(Y:2020-O:23), Jacob Peterson(Y:2017-O:149), Joey Keane(Y:2018-O:107), Jonathan Dugan(Y:2017-O:152), Leevi Merilainen(Y:2020-O:61), Linus Soderstrom(Y:2014-O:107), Lukas Rousek(Y:2019-O:183), Maksim Sushko(Y:2017-O:140), Matthew Hellickson(Y:2017-O:216), Mavrik Bourque(Y:2020-O:22), Mikael Pyyhtia(Y:2020-O:111), Nico Gross(Y:2018-O:92), Patrik Siikanen(Y:2018-O:207), Peter Diliberatore(Y:2018-O:191), Philippe Desrosiers(Y:2013-O:68), Roope Laavainen(Y:2017-O:142), Ruslan Iskhakov(Y:2018-O:49), Samuel Sjolund(Y:2019-O:143), Sean Durzi(Y:2018-O:61), Trenton Bourque(Y:2017-O:204), Zachary Uens(Y:2020-O:148)<br />
<h3 class="STHSTeamProspect_DraftPick">Draft Picks</h3>
<b>Year 2022: </b>ARI 1, ARI 3, FLA 4, ARI 4, ARI 5, ARI 7<br />
<b>Year 2023: </b>ARI 1, ARI 2, BOS 3, ARI 3, ARI 4, DAL 5, TBL 5, ARI 5, ARI 6, ARI 7<br />
<b>Year 2024: </b>ARI 1, ARI 2, ARI 3, ARI 4, ARI 5, ARI 6, ARI 7<br />
<b>Year 2025: </b>ARI 1, ARI 2, ARI 3, ARI 4, ARI 5, ARI 6, ARI 7<br />
<b>Year 2026: </b>ARI 1, ARI 2, ARI 3, ARI 4, ARI 5, ARI 6, ARI 7<br />
</div>
<h1 class="TeamProspects_NJD"><a id="Devils">Devils</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=18">Devils Page</a> ]
[ <a href="OTHL-PRE-ProTeamRoster.php#Devils">Pro Team Roster</a> ]
[ <a href="OTHL-PRE-ProTeamScoring.php#Devils">Pro Team Scoring</a> ]
[ <a href="OTHL-PRE-TeamFinance.php#Devils">Team Finance</a> ]
[ <a href="OTHL-PRE-ProTeamPlayersInfo.php#Devils">Pro Team PlayersInfo</a> ]
[ <a href="OTHL-PRE-ProTeamLines.php#Devils">Pro Team Lines</a> ]
[ <a href="OTHL-PRE-TeamProspects.php#Devils">Team Prospects</a> ]
[ <a href="OTHL-PRE-ProTeamSchedule.php#Devils">Pro Team Schedule</a> ]
[ <a href="OTHL-PRE-ProTeamStats.php#Devils">Pro Team Stats</a> ]
[ <a href="OTHL-PRE-ProTeamStatsVS.php#Devils">Pro Team Stats VS</a> ]
[ <a href="OTHL-PRE-TeamInjurySuspension.php#Devils">Team Injury Suspension</a> ]
[ <a href="OTHL-PRE-TeamHistory.php#Devils">Team History</a> ]
[ <a href="OTHL-PRE-TeamRecords.php#Devils">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Devils');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Devils" style="display: block;">
<h3 class="STHSTeamProspect_Prospect">Prospects - 31</h3>
Adam Ginning(Y:2018-O:45), Albin Sundsvik(Y:2020-O:196), Alexander Holtz(Y:2020-O:10), Alexander Ljungkrantz(Y:2020-O:120), Anton Olsson(Y:2021-O:76), Cole Schwindt(Y:2019-O:122), Connor Hall(Y:2016-O:75), Domenick Fensore(Y:2019-O:107), Filip Sveningsson(Y:2017-O:174), Gianni Fairbrother(Y:2019-O:86), Ilya Fedotov(Y:2021-O:53), Ilya Safonov(Y:2021-O:182), Jay O'Brien(Y:2018-O:30), Jesper Sellgren(Y:2018-O:176), Kasper Kotkansalo(Y:2017-O:84), Linus Lindstrand Kronholm(Y:2018-O:138), Mads Sogaard(Y:2019-O:46), Mark Kastelic(Y:2019-O:139), Mason Lohrei(Y:2020-O:72), Matthew Boldy(Y:2019-O:15), Michael Krutil(Y:2020-O:136), Nikita Okhotyuk(Y:2019-O:79), Quinn Schmiemann(Y:2019-O:186), Ryan Lohin(Y:2016-O:200), Ryan O'Reilly(Y:2018-O:116), Ryan Shea(Y:2015-O:154), Sam Colangelo(Y:2020-O:41), Tom Nilsson(Y:2011-O:92), Tomas Vomacka(Y:2017-O:154), Topias Vilen(Y:2021-O:108), Victor Berglund(Y:2017-O:182)<br />
<h3 class="STHSTeamProspect_DraftPick">Draft Picks</h3>
<b>Year 2022: </b>NJD 1, NJD 2, NJD 3, NJD 4, WSH 5, NJD 7<br />
<b>Year 2023: </b>NJD 1, NJD 2, NJD 3, NJD 4, NJD 5, NJD 6<br />
<b>Year 2024: </b>NJD 1, NJD 2, NJD 3, NJD 4, NJD 5, NJD 6, NJD 7<br />
<b>Year 2025: </b>NJD 1, NJD 2, NJD 3, NJD 4, NJD 5, NJD 6, NJD 7<br />
<b>Year 2026: </b>NJD 1, NJD 2, NJD 3, NJD 4, NJD 5, NJD 6, NJD 7<br />
</div>
<h1 class="TeamProspects_ANH"><a id="Ducks">Ducks</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=1">Ducks Page</a> ]
[ <a href="OTHL-PRE-ProTeamRoster.php#Ducks">Pro Team Roster</a> ]
[ <a href="OTHL-PRE-ProTeamScoring.php#Ducks">Pro Team Scoring</a> ]
[ <a href="OTHL-PRE-TeamFinance.php#Ducks">Team Finance</a> ]
[ <a href="OTHL-PRE-ProTeamPlayersInfo.php#Ducks">Pro Team PlayersInfo</a> ]
[ <a href="OTHL-PRE-ProTeamLines.php#Ducks">Pro Team Lines</a> ]
[ <a href="OTHL-PRE-TeamProspects.php#Ducks">Team Prospects</a> ]
[ <a href="OTHL-PRE-ProTeamSchedule.php#Ducks">Pro Team Schedule</a> ]
[ <a href="OTHL-PRE-ProTeamStats.php#Ducks">Pro Team Stats</a> ]
[ <a href="OTHL-PRE-ProTeamStatsVS.php#Ducks">Pro Team Stats VS</a> ]
[ <a href="OTHL-PRE-TeamInjurySuspension.php#Ducks">Team Injury Suspension</a> ]
[ <a href="OTHL-PRE-TeamHistory.php#Ducks">Team History</a> ]
[ <a href="OTHL-PRE-TeamRecords.php#Ducks">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Ducks');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Ducks" style="display: block;">
<h3 class="STHSTeamProspect_Prospect">Prospects - 22</h3>
Alexei Lipanov(Y:2017-O:62), Brandon Hickey(Y:2014-O:58), Cliff Pu(Y:2016-O:68), Emil Andrae(Y:2020-O:64), Filip Kral(Y:2018-O:110), Jackson Blake(Y:2021-O:127), Jesse Gabrielle(Y:2015-O:106), Josh Wesley(Y:2014-O:103), Julius Nattinen(Y:2015-O:71), Mattias Emilio Pettersen(Y:2018-O:145), Matvey Guskov(Y:2019-O:109), Mikko Kokkonen(Y:2019-O:73), Milos Roman(Y:2018-O:96), Noel Gunler(Y:2020-O:35), Olle Lycksell(Y:2017-O:159), Samuel Poulin(Y:2019-O:24), Scott Perunovich(Y:2018-O:43), Shamil Shmakov(Y:2018-O:197), Vasily Glotov(Y:2016-O:178), Veeti Miettinen(Y:2020-O:106), William Dufour(Y:2020-O:146), Yegor Spiridonov(Y:2019-O:99)<br />
<h3 class="STHSTeamProspect_DraftPick">Draft Picks</h3>
<b>Year 2022: </b>ARI 2, BOS 5, DAL 6, BOS 6, BOS 7, PHL 7, WSH 7<br />
<b>Year 2023: </b>ANH 1, ANH 2, ANH 3, ANH 4, ANH 6, ANH 7<br />
<b>Year 2024: </b>ANH 1, ANH 2, ANH 3, ANH 4, ANH 5, ANH 6, BOS 7, ANH 7<br />
<b>Year 2025: </b>ANH 1, ANH 2, ANH 3, ANH 4, ANH 5, ANH 6, ANH 7<br />
<b>Year 2026: </b>ANH 1, ANH 2, ANH 3, ANH 4, ANH 5, ANH 6, ANH 7<br />
</div>
<h1 class="TeamProspects_CGY"><a id="Flames">Flames</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=5">Flames Page</a> ]
[ <a href="OTHL-PRE-ProTeamRoster.php#Flames">Pro Team Roster</a> ]
[ <a href="OTHL-PRE-ProTeamScoring.php#Flames">Pro Team Scoring</a> ]
[ <a href="OTHL-PRE-TeamFinance.php#Flames">Team Finance</a> ]
[ <a href="OTHL-PRE-ProTeamPlayersInfo.php#Flames">Pro Team PlayersInfo</a> ]
[ <a href="OTHL-PRE-ProTeamLines.php#Flames">Pro Team Lines</a> ]
[ <a href="OTHL-PRE-TeamProspects.php#Flames">Team Prospects</a> ]
[ <a href="OTHL-PRE-ProTeamSchedule.php#Flames">Pro Team Schedule</a> ]
[ <a href="OTHL-PRE-ProTeamStats.php#Flames">Pro Team Stats</a> ]
[ <a href="OTHL-PRE-ProTeamStatsVS.php#Flames">Pro Team Stats VS</a> ]
[ <a href="OTHL-PRE-TeamInjurySuspension.php#Flames">Team Injury Suspension</a> ]
[ <a href="OTHL-PRE-TeamHistory.php#Flames">Team History</a> ]
[ <a href="OTHL-PRE-TeamRecords.php#Flames">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Flames');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Flames" style="display: block;">
<h3 class="STHSTeamProspect_Prospect">Prospects - 38</h3>
Alex Dostie(Y:2016-O:146), Alex Green(Y:2018-O:150), Arseny Gritsyuk(Y:2019-O:131), Artemi Kniazev(Y:2019-O:59), Benjamin Gallacher(Y:2010-O:127), Benton Maass(Y:2017-O:191), Cole Moberg(Y:2019-O:170), Damian Giroux(Y:2018-O:149), Eetu Makiniemi(Y:2017-O:134), Jack Badini(Y:2017-O:119), Jacob Cederholm(Y:2016-O:134), Jake Pivonka(Y:2018-O:119), Jalen Luypen(Y:2021-O:217), Jordan Harris(Y:2018-O:101), Kevin Bahl(Y:2018-O:57), Kody Clark(Y:2018-O:48), Liam Coughlin(Y:2014-O:159), Linus Karlsson(Y:2018-O:84), Lukas Dostal(Y:2018-O:80), Martins Dzierkals(Y:2015-O:100), Nick Robertson(Y:2019-O:39), Oskari Laaksonen(Y:2017-O:121), Otto Kivenmaki(Y:2018-O:203), Owen Power(Y:2021-O:1), Patrick Kudla(Y:2016-O:194), Raphael Lavoie(Y:2019-O:32), Ryan Francis(Y:2020-O:128), Ryan Jones(Y:2016-O:186), Ryan Merkley(Y:2018-O:26), Shane Eiserman(Y:2014-O:123), Theo Jacobsson(Y:2021-O:192), Tomas Machu(Y:2021-O:220), Tomas Mazura(Y:2019-O:167), Trent Miner(Y:2019-O:130), Ukko-Pekka Luukkonen(Y:2017-O:45), Vladimir Bobylev(Y:2016-O:116), Wyatt Kaiser(Y:2020-O:102), Zachary Bolduc(Y:2021-O:28)<br />
<h3 class="STHSTeamProspect_DraftPick">Draft Picks</h3>
<b>Year 2022: </b>CGY 1, CGY 2, COL 4, CGY 4, CGY 5, SEA 6, CGY 6, CGY 7<br />
<b>Year 2023: </b>CGY 1, CGY 2, CGY 4, CAR 5, CGY 5, CGY 6, CGY 7<br />
<b>Year 2024: </b>CGY 1, CGY 2, CGY 3, CGY 4, CGY 5, CGY 6, CGY 7<br />
<b>Year 2025: </b>CGY 1, CGY 2, CGY 3, CGY 4, CGY 5, CGY 6, CGY 7<br />
<b>Year 2026: </b>CGY 1, CGY 2, CGY 3, CGY 4, CGY 5, CGY 6, CGY 7<br />
</div>
<h1 class="TeamProspects_PHL"><a id="Flyers">Flyers</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=22">Flyers Page</a> ]
[ <a href="OTHL-PRE-ProTeamRoster.php#Flyers">Pro Team Roster</a> ]
[ <a href="OTHL-PRE-ProTeamScoring.php#Flyers">Pro Team Scoring</a> ]
[ <a href="OTHL-PRE-TeamFinance.php#Flyers">Team Finance</a> ]
[ <a href="OTHL-PRE-ProTeamPlayersInfo.php#Flyers">Pro Team PlayersInfo</a> ]
[ <a href="OTHL-PRE-ProTeamLines.php#Flyers">Pro Team Lines</a> ]
[ <a href="OTHL-PRE-TeamProspects.php#Flyers">Team Prospects</a> ]
[ <a href="OTHL-PRE-ProTeamSchedule.php#Flyers">Pro Team Schedule</a> ]
[ <a href="OTHL-PRE-ProTeamStats.php#Flyers">Pro Team Stats</a> ]
[ <a href="OTHL-PRE-ProTeamStatsVS.php#Flyers">Pro Team Stats VS</a> ]
[ <a href="OTHL-PRE-TeamInjurySuspension.php#Flyers">Team Injury Suspension</a> ]
[ <a href="OTHL-PRE-TeamHistory.php#Flyers">Team History</a> ]
[ <a href="OTHL-PRE-TeamRecords.php#Flyers">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Flyers');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Flyers" style="display: block;">
<h3 class="STHSTeamProspect_Prospect">Prospects - 36</h3>
Andrei Svetlakov(Y:2017-O:146), Arvid Costmar(Y:2019-O:208), Axel Bergkvist(Y:2019-O:203), Ben Brinkman(Y:2019-O:196), Carson Meyer(Y:2017-O:194), Chad Yetman(Y:2020-O:191), Cole Reinhardt(Y:2020-O:192), Danil Savunov(Y:2019-O:210), Denis Smirnov(Y:2017-O:120), Greg Meireles(Y:2019-O:205), Ivan Lodnia(Y:2017-O:82), Jakub Konecny(Y:2020-O:200), Jeremy Michel(Y:2019-O:209), John Fusco(Y:2020-O:214), Juuso Parssinen(Y:2019-O:190), Kevin Wall(Y:2019-O:191), Kristian Roykas-Marthinsen(Y:2017-O:195), Liam Kirk(Y:2018-O:76), Marco Rossi(Y:2020-O:5), Matthew Kessel(Y:2020-O:193), Maxence Guenette(Y:2019-O:195), Maxim Denezhkin(Y:2019-O:200), Maxim Marushev(Y:2020-O:206), Nick Capone(Y:2020-O:195), Nick Swaney(Y:2017-O:172), Nikita Nesterenko(Y:2019-O:192), Olle Eriksson-Ek(Y:2017-O:130), Radim Salda(Y:2018-O:190), Ryan Tverberg(Y:2020-O:216), Sam Hentges(Y:2018-O:198), Tim Berni(Y:2018-O:175), Ty Taylor(Y:2018-O:212), Tyler Angle(Y:2019-O:204), Tyler Wall(Y:2016-O:164), Tyrel Bauer(Y:2020-O:197), Vadim Zherenko(Y:2019-O:199)<br />
<h3 class="STHSTeamProspect_DraftPick">Draft Picks</h3>
<b>Year 2022: </b>PHL 1<br />
<b>Year 2023: </b>PHL 1, PHL 2, TBL 7, PHL 7, EDM 7, FLA 7, OTT 7<br />
<b>Year 2024: </b>PHL 1, PHL 2, PHL 3, PHL 4, PHL 5, PHL 6, STL 7, PHL 7, SJS 7<br />
<b>Year 2025: </b>PHL 1, PHL 2, PHL 3, PHL 4, PHL 5, PHL 6, PHL 7<br />
<b>Year 2026: </b>PHL 1, PHL 2, PHL 3, PHL 4, PHL 5, PHL 6, PHL 7<br />
</div>
<h1 class="TeamProspects_VGK"><a id="GoldenKnights">Golden Knights</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=31">Golden Knights Page</a> ]
[ <a href="OTHL-PRE-ProTeamRoster.php#GoldenKnights">Pro Team Roster</a> ]
[ <a href="OTHL-PRE-ProTeamScoring.php#GoldenKnights">Pro Team Scoring</a> ]
[ <a href="OTHL-PRE-TeamFinance.php#GoldenKnights">Team Finance</a> ]
[ <a href="OTHL-PRE-ProTeamPlayersInfo.php#GoldenKnights">Pro Team PlayersInfo</a> ]
[ <a href="OTHL-PRE-ProTeamLines.php#GoldenKnights">Pro Team Lines</a> ]
[ <a href="OTHL-PRE-TeamProspects.php#GoldenKnights">Team Prospects</a> ]
[ <a href="OTHL-PRE-ProTeamSchedule.php#GoldenKnights">Pro Team Schedule</a> ]
[ <a href="OTHL-PRE-ProTeamStats.php#GoldenKnights">Pro Team Stats</a> ]
[ <a href="OTHL-PRE-ProTeamStatsVS.php#GoldenKnights">Pro Team Stats VS</a> ]
[ <a href="OTHL-PRE-TeamInjurySuspension.php#GoldenKnights">Team Injury Suspension</a> ]
[ <a href="OTHL-PRE-TeamHistory.php#GoldenKnights">Team History</a> ]
[ <a href="OTHL-PRE-TeamRecords.php#GoldenKnights">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_GoldenKnights');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_GoldenKnights" style="display: block;">
<h3 class="STHSTeamProspect_Prospect">Prospects - 48</h3>
Adam Beckman(Y:2019-O:78), Aleksi Heponiemi(Y:2017-O:43), Anton Lundell(Y:2020-O:13), Arnaud Durandeau(Y:2017-O:164), Axel Andersson(Y:2018-O:64), Brandon Kruse(Y:2018-O:155), Brandt Clarke(Y:2021-O:10), Brayden Tracey(Y:2019-O:30), Calen Addison(Y:2018-O:47), Cam Hillis(Y:2018-O:70), Cole Guttman(Y:2017-O:178), Cole Hults(Y:2017-O:188), Connor Zary(Y:2020-O:20), David Noel(Y:2017-O:139), Dawson Barteaux(Y:2018-O:163), Dawson Mercer(Y:2020-O:15), Demetrios Koumontzis(Y:2018-O:117), Ethan Phillips(Y:2019-O:95), Filip Johansson(Y:2018-O:39), Gavin Hain(Y:2018-O:183), Graeme Clarke(Y:2019-O:81), Isak Rosen(Y:2021-O:15), Jordan Spence(Y:2019-O:88), Justin Almeida(Y:2018-O:124), Justin Schutz(Y:2018-O:180), Kyle Olson(Y:2017-O:115), Logan Hutsko(Y:2018-O:102), Luke Henman(Y:2018-O:105), Luke Prokop(Y:2020-O:97), Mason Millman(Y:2019-O:102), Matthew Coronato(Y:2021-O:14), Mikhail Abramov(Y:2019-O:104), Nicholas Porco(Y:2019-O:123), Nick Henry(Y:2017-O:95), Nicklaus Perbix(Y:2017-O:198), Nils Lundkvist(Y:2018-O:28), Quinn Olson(Y:2019-O:92), Reece Newkirk(Y:2019-O:124), Riley Stotts(Y:2018-O:95), Ryan O'Rourke(Y:2020-O:38), Samuel Bolduc(Y:2019-O:61), Samuel Houde(Y:2018-O:160), Sasha Mutala(Y:2019-O:119), Shane Bowers(Y:2017-O:35), Tobias Geisser(Y:2017-O:157), Tyler Parsons(Y:2016-O:46), Tyler Tucker(Y:2018-O:200), Zachary Gallant(Y:2017-O:89)<br />
<h3 class="STHSTeamProspect_DraftPick">Draft Picks</h3>
<b>Year 2022: </b>VGK 1, VGK 2, CLB 2<br />
<b>Year 2023: </b>VGK 1, VGK 2, VGK 3, VGK 4, VGK 5, VGK 6, VGK 7<br />
<b>Year 2024: </b>VGK 1, VGK 2, VGK 3, VGK 4, VGK 5, VGK 6, VGK 7<br />
<b>Year 2025: </b>VGK 1, VGK 2, VGK 3, VGK 4, VGK 5, VGK 6, VGK 7<br />
<b>Year 2026: </b>VGK 1, VGK 2, VGK 3, VGK 4, VGK 5, VGK 6, VGK 7<br />
</div>
<h1 class="TeamProspects_CAR"><a id="Hurricanes">Hurricanes</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=6">Hurricanes Page</a> ]
[ <a href="OTHL-PRE-ProTeamRoster.php#Hurricanes">Pro Team Roster</a> ]
[ <a href="OTHL-PRE-ProTeamScoring.php#Hurricanes">Pro Team Scoring</a> ]
[ <a href="OTHL-PRE-TeamFinance.php#Hurricanes">Team Finance</a> ]
[ <a href="OTHL-PRE-ProTeamPlayersInfo.php#Hurricanes">Pro Team PlayersInfo</a> ]
[ <a href="OTHL-PRE-ProTeamLines.php#Hurricanes">Pro Team Lines</a> ]
[ <a href="OTHL-PRE-TeamProspects.php#Hurricanes">Team Prospects</a> ]
[ <a href="OTHL-PRE-ProTeamSchedule.php#Hurricanes">Pro Team Schedule</a> ]
[ <a href="OTHL-PRE-ProTeamStats.php#Hurricanes">Pro Team Stats</a> ]
[ <a href="OTHL-PRE-ProTeamStatsVS.php#Hurricanes">Pro Team Stats VS</a> ]
[ <a href="OTHL-PRE-TeamInjurySuspension.php#Hurricanes">Team Injury Suspension</a> ]
[ <a href="OTHL-PRE-TeamHistory.php#Hurricanes">Team History</a> ]
[ <a href="OTHL-PRE-TeamRecords.php#Hurricanes">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Hurricanes');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Hurricanes" style="display: block;">
<h3 class="STHSTeamProspect_Prospect">Prospects - 51</h3>
Albert Johansson(Y:2019-O:69), Alex Beaucage(Y:2019-O:67), Alexander Alexeyev(Y:2018-O:37), Alexander Khovanov(Y:2018-O:68), Alexander Pashin(Y:2020-O:109), Anton Johannesson(Y:2020-O:116), Antonio Stranges(Y:2020-O:96), Calle Clang(Y:2020-O:82), Cole Jordan(Y:2021-O:120), Daemon Hunt(Y:2020-O:75), Daniil Misyul(Y:2019-O:74), Danil Gushchin(Y:2020-O:63), Danila Zhuravlyov(Y:2018-O:122), Devon Levi(Y:2020-O:127), Dmitri Rashevsky(Y:2021-O:96), Dylan Duke(Y:2021-O:78), Eamon Powell(Y:2020-O:110), Eemil Viro(Y:2020-O:68), Egor Afanasyev(Y:2019-O:42), Ethan Del Mastro(Y:2021-O:92), Evan Nause(Y:2021-O:57), Hugo Alnefelt(Y:2019-O:98), Jack Bar(Y:2021-O:118), James Malatesta(Y:2021-O:107), Jan Bednar(Y:2020-O:83), Jonatan Berggren(Y:2018-O:22), Kasper Simontaival(Y:2020-O:58), Liam Dower Nilsson(Y:2021-O:104), Liam Gilmartin(Y:2021-O:128), Logan Stankoven(Y:2021-O:36), Nikolai Kovalenko(Y:2018-O:139), Oscar Plandowski(Y:2021-O:124), Patrik Puistola(Y:2019-O:56), Philipp Kurashev(Y:2018-O:79), Robert Mastrosimone(Y:2019-O:50), Roni Hirvonen(Y:2020-O:54), Ryan Ufko(Y:2021-O:91), Ryder Korczak(Y:2021-O:75), Samu Tuomaala(Y:2021-O:39), Samuel Helenius(Y:2021-O:71), Sean Farrell(Y:2020-O:88), Sean Tschigerl(Y:2021-O:101), Semyon Chystyakov(Y:2019-O:132), Stanislav Svozil(Y:2021-O:60), Ty Smilanic(Y:2020-O:69), Tyler Tullio(Y:2020-O:95), Vladislav Firstov(Y:2019-O:45), Vladislav Lukashevich(Y:2021-O:119), William Eklund(Y:2021-O:5), William Stromgren(Y:2021-O:48), Yegor Chinakhov(Y:2020-O:21)<br />
<h3 class="STHSTeamProspect_DraftPick">Draft Picks</h3>
<b>Year 2022: </b><br />
<b>Year 2023: </b>CAR 1, BOS 1, DAL 1, TBL 1, BOS 2, TBL 2, CAR 3, TBL 3, PHL 3, TBL 4, BOS 4, ANH 5, DET 6, CAR 6, TBL 6, BOS 6, PIT 6<br />
<b>Year 2024: </b>CAR 1, CAR 2, CAR 3, CAR 4, TBL 4, TBL 5, CAR 5, CAR 6, CAR 7<br />
<b>Year 2025: </b>CAR 1, CAR 2, CAR 3, CAR 4, CAR 5, CAR 6, CAR 7<br />
<b>Year 2026: </b>CAR 1, CAR 2, CAR 3, CAR 4, CAR 5, CAR 6, CAR 7<br />
</div>
<h1 class="TeamProspects_NYI"><a id="Islanders">Islanders</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=19">Islanders Page</a> ]
[ <a href="OTHL-PRE-ProTeamRoster.php#Islanders">Pro Team Roster</a> ]
[ <a href="OTHL-PRE-ProTeamScoring.php#Islanders">Pro Team Scoring</a> ]
[ <a href="OTHL-PRE-TeamFinance.php#Islanders">Team Finance</a> ]
[ <a href="OTHL-PRE-ProTeamPlayersInfo.php#Islanders">Pro Team PlayersInfo</a> ]
[ <a href="OTHL-PRE-ProTeamLines.php#Islanders">Pro Team Lines</a> ]
[ <a href="OTHL-PRE-TeamProspects.php#Islanders">Team Prospects</a> ]
[ <a href="OTHL-PRE-ProTeamSchedule.php#Islanders">Pro Team Schedule</a> ]
[ <a href="OTHL-PRE-ProTeamStats.php#Islanders">Pro Team Stats</a> ]
[ <a href="OTHL-PRE-ProTeamStatsVS.php#Islanders">Pro Team Stats VS</a> ]
[ <a href="OTHL-PRE-TeamInjurySuspension.php#Islanders">Team Injury Suspension</a> ]
[ <a href="OTHL-PRE-TeamHistory.php#Islanders">Team History</a> ]
[ <a href="OTHL-PRE-TeamRecords.php#Islanders">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Islanders');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Islanders" style="display: block;">
<h3 class="STHSTeamProspect_Prospect">Prospects - 36</h3>
Alex Cotton(Y:2020-O:118), Anatoli Golyshev(Y:2016-O:66), Anthony Louis(Y:2013-O:200), Benoit-Olivier Groulx(Y:2018-O:46), Brandon Coe(Y:2020-O:103), Cole Sillinger(Y:2021-O:12), David Westlund(Y:2014-O:192), Dmitry Ovchinnikov(Y:2020-O:107), Dmitry Voronkov(Y:2019-O:120), Elliot Ekmark(Y:2020-O:182), Hudson Elynuik(Y:2016-O:87), Ivan Morozov(Y:2018-O:60), Jackson Perbix(Y:2018-O:142), Jake Schmaltz(Y:2019-O:213), Jared McIsaac(Y:2018-O:35), Jasper Weatherby(Y:2018-O:120), Joe Miller(Y:2020-O:201), Justin Robidas(Y:2021-O:81), Keaton Thompson(Y:2013-O:98), Kirill Ustimenko(Y:2017-O:113), Kris Oldham(Y:2015-O:178), Louis Belpedio(Y:2014-O:111), Mac Hollowell(Y:2018-O:125), Martin Fehervary(Y:2018-O:65), Martin Has(Y:2019-O:165), Michael Kesselring(Y:2018-O:173), Paul Bittner(Y:2015-O:27), Rinat Valiev(Y:2014-O:74), Rory Kerins(Y:2020-O:145), Rushan Rafikov(Y:2013-O:145), Tyson Foerster(Y:2020-O:26), Veeti Vainio(Y:2015-O:111), Vladislav Kara(Y:2017-O:160), Will Cranley(Y:2020-O:180), William Bitten(Y:2016-O:48), Zach Nastasiuk(Y:2013-O:49)<br />
<h3 class="STHSTeamProspect_DraftPick">Draft Picks</h3>
<b>Year 2022: </b>NYI 1, DAL 1, NYI 2, NYR 3, NYI 3, NYR 4, BOS 4, NYI 4, NYI 5, NJD 5, COL 5, NYI 6, NYI 7<br />
<b>Year 2023: </b>NYI 1, NYI 2, NYI 3, NYI 4, PHL 5, NYI 5, NYI 6, NYI 7<br />
<b>Year 2024: </b>NYI 1, NYI 2, NYI 3, NYI 4, NYI 5, NYI 6, NYI 7<br />
<b>Year 2025: </b>NYI 1, NYI 2, NYI 3, NYI 4, NYI 5, NYI 6, NYI 7<br />
<b>Year 2026: </b>NYI 1, NYI 2, NYI 3, NYI 4, NYI 5, NYI 6, NYI 7<br />
</div>
<h1 class="TeamProspects_WPG"><a id="Jets">Jets</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=2">Jets Page</a> ]
[ <a href="OTHL-PRE-ProTeamRoster.php#Jets">Pro Team Roster</a> ]
[ <a href="OTHL-PRE-ProTeamScoring.php#Jets">Pro Team Scoring</a> ]
[ <a href="OTHL-PRE-TeamFinance.php#Jets">Team Finance</a> ]
[ <a href="OTHL-PRE-ProTeamPlayersInfo.php#Jets">Pro Team PlayersInfo</a> ]
[ <a href="OTHL-PRE-ProTeamLines.php#Jets">Pro Team Lines</a> ]
[ <a href="OTHL-PRE-TeamProspects.php#Jets">Team Prospects</a> ]
[ <a href="OTHL-PRE-ProTeamSchedule.php#Jets">Pro Team Schedule</a> ]
[ <a href="OTHL-PRE-ProTeamStats.php#Jets">Pro Team Stats</a> ]
[ <a href="OTHL-PRE-ProTeamStatsVS.php#Jets">Pro Team Stats VS</a> ]
[ <a href="OTHL-PRE-TeamInjurySuspension.php#Jets">Team Injury Suspension</a> ]
[ <a href="OTHL-PRE-TeamHistory.php#Jets">Team History</a> ]
[ <a href="OTHL-PRE-TeamRecords.php#Jets">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Jets');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Jets" style="display: block;">
<h3 class="STHSTeamProspect_Prospect">Prospects - 37</h3>
Adam Smith(Y:2016-O:206), Akil Thomas(Y:2018-O:29), Eetu Pakkila(Y:2018-O:199), Filip Barklund(Y:2020-O:213), Fredrik Karlstrom(Y:2016-O:107), Grant Mismash(Y:2017-O:56), Joel Blomqvist(Y:2020-O:47), Judd Caulfield(Y:2019-O:129), Juho Markkanen(Y:2020-O:140), Kasper Bjorkqvist(Y:2016-O:72), Kienan Draper(Y:2020-O:179), Kieran Ruscheinski(Y:2019-O:217), Kyle Aucoin(Y:2020-O:202), Leevi Aaltonen(Y:2019-O:108), Lenni Killinen(Y:2018-O:132), Linus Lindstrom(Y:2016-O:82), Marcus Kallionkieli(Y:2019-O:125), Markus Niemelainen(Y:2016-O:63), Markus Nurmi(Y:2016-O:161), Matias Maccelli(Y:2019-O:94), Matt Filipe(Y:2016-O:76), Max Zimmer(Y:2016-O:123), Niklas Nordgren(Y:2018-O:62), Noah Beck(Y:2020-O:181), Patrik Virta(Y:2017-O:189), Petrus Palmu(Y:2017-O:147), Roby Jarventie(Y:2020-O:16), Roman Durny(Y:2018-O:94), Santeri Airola(Y:2019-O:202), Santeri Hatakka(Y:2019-O:212), Simon Johansson(Y:2018-O:121), Toni Utunen(Y:2018-O:111), Tyler Kleven(Y:2020-O:56), Victor Brattstrom(Y:2018-O:159), Ville Rasanen(Y:2017-O:205), Yegor Korshkov(Y:2016-O:40), Zion Nybeck(Y:2020-O:86)<br />
<h3 class="STHSTeamProspect_DraftPick">Draft Picks</h3>
<b>Year 2022: </b>WPG 1, WPG 3, WPG 6, SJS 7, WPG 7<br />
<b>Year 2023: </b>WPG 1, WPG 2, WPG 3, WPG 4, WPG 5, WPG 6, WPG 7<br />
<b>Year 2024: </b>WPG 1, WPG 2, WPG 3, WPG 4, WPG 5, WPG 6, WPG 7<br />
<b>Year 2025: </b>WPG 1, WPG 2, WPG 3, WPG 4, WPG 5, WPG 6, WPG 7<br />
<b>Year 2026: </b>WPG 1, WPG 2, WPG 3, WPG 4, WPG 5, WPG 6, WPG 7<br />
</div>
<h1 class="TeamProspects_LAK"><a id="Kings">Kings</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=14">Kings Page</a> ]
[ <a href="OTHL-PRE-ProTeamRoster.php#Kings">Pro Team Roster</a> ]
[ <a href="OTHL-PRE-ProTeamScoring.php#Kings">Pro Team Scoring</a> ]
[ <a href="OTHL-PRE-TeamFinance.php#Kings">Team Finance</a> ]
[ <a href="OTHL-PRE-ProTeamPlayersInfo.php#Kings">Pro Team PlayersInfo</a> ]
[ <a href="OTHL-PRE-ProTeamLines.php#Kings">Pro Team Lines</a> ]
[ <a href="OTHL-PRE-TeamProspects.php#Kings">Team Prospects</a> ]
[ <a href="OTHL-PRE-ProTeamSchedule.php#Kings">Pro Team Schedule</a> ]
[ <a href="OTHL-PRE-ProTeamStats.php#Kings">Pro Team Stats</a> ]
[ <a href="OTHL-PRE-ProTeamStatsVS.php#Kings">Pro Team Stats VS</a> ]
[ <a href="OTHL-PRE-TeamInjurySuspension.php#Kings">Team Injury Suspension</a> ]
[ <a href="OTHL-PRE-TeamHistory.php#Kings">Team History</a> ]
[ <a href="OTHL-PRE-TeamRecords.php#Kings">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Kings');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Kings" style="display: block;">
<h3 class="STHSTeamProspect_Prospect">Prospects - 46</h3>
Aatu Raty(Y:2021-O:16), Adam Gilmour(Y:2012-O:92), Alexander Nikishin(Y:2020-O:100), Artem Guryev(Y:2021-O:176), Artem Shlaine(Y:2020-O:152), Artur Akhtyamov(Y:2020-O:90), Arvid Holm(Y:2017-O:170), Benjamin Marshall(Y:2010-O:143), Bryce Brodzinski(Y:2019-O:179), Colten Ellis(Y:2019-O:89), Connor McMichael(Y:2019-O:27), Daniil Sobolev(Y:2021-O:165), Eemeli Rasanen(Y:2017-O:59), Evan Smith(Y:2015-O:198), Fabrice Herzog(Y:2013-O:122), Fedor Gordeev(Y:2017-O:163), Gabriel Beaupre(Y:2011-O:158), Jack Beck(Y:2021-O:189), Jack Gorniak(Y:2018-O:148), Jack Matier(Y:2021-O:144), Jackson Hallum(Y:2020-O:108), Jackson Kunz(Y:2020-O:125), Jackson LaCombe(Y:2019-O:54), Jake Kupsky(Y:2015-O:205), John Nyberg(Y:2014-O:164), Joonas Lehtivuori, Jordan Hollett(Y:2017-O:167), Josiah Slavin(Y:2018-O:201), Landon Slaggert(Y:2020-O:73), Mason Primeau(Y:2019-O:114), Maxim Groshev(Y:2020-O:78), Nikolai Chebykin(Y:2016-O:159), Noah Carroll(Y:2016-O:196), Peter Ceresnak(Y:2011-O:184), Philip Tomasino(Y:2019-O:22), Rasmus Korhonen(Y:2021-O:147), Rodion Amirov(Y:2020-O:14), Ryan Mantha(Y:2014-O:115), Ryan O'Connell(Y:2017-O:173), Ryan Winterton(Y:2021-O:87), Sam Stange(Y:2020-O:113), Samuel Lipkin(Y:2021-O:223), Tyler Bird(Y:2014-O:121), Tyson Galloway(Y:2021-O:181), Ville Ottavainen(Y:2021-O:142), William Wallinder(Y:2020-O:33)<br />
<h3 class="STHSTeamProspect_DraftPick">Draft Picks</h3>
<b>Year 2022: </b>LAK 1, LAK 2, BUF 3, DET 3, LAK 3, LAK 4, LAK 5, COL 6, VGK 6, NYR 6, BUF 7<br />
<b>Year 2023: </b>LAK 1, LAK 2, LAK 3, LAK 4, LAK 5, LAK 6, LAK 7<br />
<b>Year 2024: </b>LAK 1, LAK 2, LAK 3, LAK 4, LAK 5, LAK 6, LAK 7<br />
<b>Year 2025: </b>LAK 1, LAK 2, LAK 3, LAK 4, LAK 5, LAK 6, LAK 7<br />
<b>Year 2026: </b>LAK 1, LAK 2, LAK 3, LAK 4, LAK 5, LAK 6, LAK 7<br />
</div>
<h1 class="TeamProspects_SEA"><a id="Kraken">Kraken</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=32">Kraken Page</a> ]
[ <a href="OTHL-PRE-ProTeamRoster.php#Kraken">Pro Team Roster</a> ]
[ <a href="OTHL-PRE-ProTeamScoring.php#Kraken">Pro Team Scoring</a> ]
[ <a href="OTHL-PRE-TeamFinance.php#Kraken">Team Finance</a> ]
[ <a href="OTHL-PRE-ProTeamPlayersInfo.php#Kraken">Pro Team PlayersInfo</a> ]
[ <a href="OTHL-PRE-ProTeamLines.php#Kraken">Pro Team Lines</a> ]
[ <a href="OTHL-PRE-TeamProspects.php#Kraken">Team Prospects</a> ]
[ <a href="OTHL-PRE-ProTeamSchedule.php#Kraken">Pro Team Schedule</a> ]
[ <a href="OTHL-PRE-ProTeamStats.php#Kraken">Pro Team Stats</a> ]
[ <a href="OTHL-PRE-ProTeamStatsVS.php#Kraken">Pro Team Stats VS</a> ]
[ <a href="OTHL-PRE-TeamInjurySuspension.php#Kraken">Team Injury Suspension</a> ]
[ <a href="OTHL-PRE-TeamHistory.php#Kraken">Team History</a> ]
[ <a href="OTHL-PRE-TeamRecords.php#Kraken">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Kraken');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Kraken" style="display: block;">
<h3 class="STHSTeamProspect_Prospect">Prospects - 36</h3>
Alexei Kolosov(Y:2021-O:68), Ben Boyd(Y:2021-O:188), Benjamin Gaudreau(Y:2021-O:67), Caedan Bankier(Y:2021-O:86), Carson Lambos(Y:2021-O:21), Colton Dach(Y:2021-O:54), Connor Kelley(Y:2021-O:218), Corson Ceulemans(Y:2021-O:23), Daniil Chechelev(Y:2020-O:91), Dru Krebs(Y:2021-O:199), Evgenii Kashnikov(Y:2021-O:198), Fedor Svechkov(Y:2021-O:22), Gabriel Fortier(Y:2018-O:58), Jack Drury(Y:2018-O:44), Jack Peart(Y:2021-O:43), Jakub Kos(Y:2021-O:202), Jakub Malek(Y:2021-O:89), Jett Woo(Y:2018-O:32), Josh Doan(Y:2021-O:24), Josh Pillar(Y:2021-O:152), Joshua Roy(Y:2021-O:113), Luke Hughes(Y:2021-O:3), Martin Rysavy(Y:2021-O:187), Nate Benoit(Y:2021-O:163), Nikita Quapp(Y:2021-O:186), Olof Lindbom(Y:2018-O:52), Redmond Savage(Y:2021-O:95), Riley Sutter(Y:2018-O:99), Ryan McGregor(Y:2017-O:201), Ryker Evans(Y:2021-O:45), Semyon Vyazovoi(Y:2021-O:154), Taige Harding(Y:2021-O:140), Taylor Makar(Y:2021-O:174), Tristan Broz(Y:2021-O:51), Vyacheslav Peksa(Y:2021-O:159), Xavier Simoneau(Y:2021-O:172)<br />
<h3 class="STHSTeamProspect_DraftPick">Draft Picks</h3>
<b>Year 2022: </b>SEA 1, FLA 2, SEA 2, BOS 2, CAR 2, WPG 2, FLA 3, SEA 3, MTL 3, SEA 4, SEA 5, DAL 5, MTL 5, MTL 6, SEA 7, CLB 7, FLA 7, MTL 7<br />
<b>Year 2023: </b>SEA 1, SEA 2, SEA 3, SEA 4, CAR 4, MTL 4, SEA 5, SEA 6, SEA 7, CAR 7<br />
<b>Year 2024: </b>SEA 1, TBL 1, SEA 2, SEA 3, SEA 4, SEA 5, SEA 6, SEA 7<br />
<b>Year 2025: </b>SEA 1, SEA 2, SEA 3, SEA 4, SEA 5, SEA 6, SEA 7<br />
<b>Year 2026: </b>SEA 1, SEA 2, SEA 3, SEA 4, SEA 5, SEA 6, SEA 7<br />
</div>
<h1 class="TeamProspects_TBL"><a id="Lightning">Lightning</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=27">Lightning Page</a> ]
[ <a href="OTHL-PRE-ProTeamRoster.php#Lightning">Pro Team Roster</a> ]
[ <a href="OTHL-PRE-ProTeamScoring.php#Lightning">Pro Team Scoring</a> ]
[ <a href="OTHL-PRE-TeamFinance.php#Lightning">Team Finance</a> ]
[ <a href="OTHL-PRE-ProTeamPlayersInfo.php#Lightning">Pro Team PlayersInfo</a> ]
[ <a href="OTHL-PRE-ProTeamLines.php#Lightning">Pro Team Lines</a> ]
[ <a href="OTHL-PRE-TeamProspects.php#Lightning">Team Prospects</a> ]
[ <a href="OTHL-PRE-ProTeamSchedule.php#Lightning">Pro Team Schedule</a> ]
[ <a href="OTHL-PRE-ProTeamStats.php#Lightning">Pro Team Stats</a> ]
[ <a href="OTHL-PRE-ProTeamStatsVS.php#Lightning">Pro Team Stats VS</a> ]
[ <a href="OTHL-PRE-TeamInjurySuspension.php#Lightning">Team Injury Suspension</a> ]
[ <a href="OTHL-PRE-TeamHistory.php#Lightning">Team History</a> ]
[ <a href="OTHL-PRE-TeamRecords.php#Lightning">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Lightning');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Lightning" style="display: block;">
<h3 class="STHSTeamProspect_Prospect">Prospects - 30</h3>
Ben Jones(Y:2017-O:214), Bryce Montgomery(Y:2021-O:145), Carson Focht(Y:2019-O:188), Chase Clark(Y:2021-O:177), David Bernhardt(Y:2016-O:150), Dylan Samberg(Y:2017-O:41), Ethan Keppen(Y:2019-O:87), Gustav Bouramman(Y:2015-O:147), Jack Adams(Y:2017-O:165), Jack Malone(Y:2019-O:163), Jack Rathbone(Y:2017-O:132), Janis Jerome Moser(Y:2021-O:88), Josh Ess(Y:2017-O:210), Karel Plasek(Y:2019-O:185), Karel Vejmelka(Y:2015-O:158), Linus Olund(Y:2017-O:150), Marcus Karlberg(Y:2018-O:104), Marcus Westfalt(Y:2018-O:161), Matias Rajaniemi(Y:2020-O:173), Mikael Hakkarainen(Y:2018-O:135), Nick Ebert(Y:2012-O:84), Nikita Korostelev(Y:2015-O:78), Nikita Pavlychev(Y:2015-O:180), Pavel Koltygin(Y:2017-O:124), Petr Kvaca(Y:2017-O:136), Philippe Daoust(Y:2020-O:187), Rafael Harvey-Pinard(Y:2019-O:207), Sebastian Repo(Y:2017-O:122), Wouter Peeters(Y:2016-O:74), Yegor Zaitsev(Y:2017-O:209)<br />
<h3 class="STHSTeamProspect_DraftPick">Draft Picks</h3>
<b>Year 2022: </b>EDM 2, PHL 6, TBL 7<br />
<b>Year 2023: </b><br />
<b>Year 2024: </b>TBL 2, TBL 3, TBL 6, TBL 7<br />
<b>Year 2025: </b>TBL 1, TBL 2, TBL 3, TBL 4, TBL 5, TBL 6, TBL 7<br />
<b>Year 2026: </b>TBL 1, TBL 2, TBL 3, TBL 4, TBL 5, TBL 6, TBL 7<br />
</div>
<h1 class="TeamProspects_TOR"><a id="MapleLeafs">Maple Leafs</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=28">Maple Leafs Page</a> ]
[ <a href="OTHL-PRE-ProTeamRoster.php#MapleLeafs">Pro Team Roster</a> ]
[ <a href="OTHL-PRE-ProTeamScoring.php#MapleLeafs">Pro Team Scoring</a> ]
[ <a href="OTHL-PRE-TeamFinance.php#MapleLeafs">Team Finance</a> ]
[ <a href="OTHL-PRE-ProTeamPlayersInfo.php#MapleLeafs">Pro Team PlayersInfo</a> ]
[ <a href="OTHL-PRE-ProTeamLines.php#MapleLeafs">Pro Team Lines</a> ]
[ <a href="OTHL-PRE-TeamProspects.php#MapleLeafs">Team Prospects</a> ]
[ <a href="OTHL-PRE-ProTeamSchedule.php#MapleLeafs">Pro Team Schedule</a> ]
[ <a href="OTHL-PRE-ProTeamStats.php#MapleLeafs">Pro Team Stats</a> ]
[ <a href="OTHL-PRE-ProTeamStatsVS.php#MapleLeafs">Pro Team Stats VS</a> ]
[ <a href="OTHL-PRE-TeamInjurySuspension.php#MapleLeafs">Team Injury Suspension</a> ]
[ <a href="OTHL-PRE-TeamHistory.php#MapleLeafs">Team History</a> ]
[ <a href="OTHL-PRE-TeamRecords.php#MapleLeafs">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_MapleLeafs');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_MapleLeafs" style="display: block;">
<h3 class="STHSTeamProspect_Prospect">Prospects - 46</h3>
Adam Raska(Y:2020-O:167), Akira Schmid(Y:2018-O:133), Alex Vlasic(Y:2019-O:52), Brendan Warren(Y:2015-O:126), Carter Gylander(Y:2019-O:206), Cedric Pare(Y:2017-O:203), Curtis Douglas(Y:2018-O:115), Guillaume Richard(Y:2021-O:112), Gunnarwolfe Fontaine(Y:2020-O:168), Gustav Berglund(Y:2019-O:211), Ilya Nikolaev(Y:2019-O:63), Jack McBain(Y:2018-O:59), Jack Smith(Y:2020-O:147), Jacob Bernard-Docker(Y:2018-O:38), Jakub Brabenec(Y:2021-O:100), Jaromir Pytlik(Y:2020-O:93), Jesper Vikman(Y:2020-O:159), Jiri Patera(Y:2017-O:183), Joel Hofer(Y:2018-O:88), John Ludvig(Y:2019-O:100), Josh Nodler(Y:2019-O:175), Konstantin Volkov(Y:2016-O:176), Layton Ahac(Y:2019-O:82), Liam Gorman(Y:2018-O:192), Logan Mailloux(Y:2021-O:63), Luke Evangelista(Y:2020-O:46), Marcus Davidsson(Y:2017-O:47), Martin Chromiak(Y:2020-O:77), Matvey Petrov(Y:2021-O:126), Maxim Cajkovic(Y:2019-O:66), Michael Benning(Y:2020-O:92), Mike Koster(Y:2019-O:169), Nick Campoli(Y:2017-O:186), Nick Leivermann(Y:2017-O:207), Olivier Rodrigue(Y:2018-O:71), Ryder Donovan(Y:2019-O:103), Samuel Walker(Y:2017-O:212), Santtu Kinnunen(Y:2018-O:209), Scott Morrow(Y:2021-O:52), Sebastian Walfridsson(Y:2017-O:180), Simon Kjellberg(Y:2018-O:185), Talyn Boyko(Y:2021-O:116), Tanner Dickinson(Y:2020-O:156), Vladislav Kolyachonok(Y:2019-O:48), William Trudeau(Y:2021-O:123), Zayde Wisdom(Y:2020-O:80)<br />
<h3 class="STHSTeamProspect_DraftPick">Draft Picks</h3>
<b>Year 2022: </b>TOR 1, ANH 1, ANH 2, TOR 3, VAN 3, TOR 4, NSH 5, TOR 5, PHL 5, TOR 6, TOR 7<br />
<b>Year 2023: </b>TOR 1, TOR 2, TOR 3, STL 3, TOR 4, TOR 5, TOR 6, TOR 7<br />
<b>Year 2024: </b>TOR 1, TOR 2, TOR 3, TOR 4, TOR 5, TOR 6, TOR 7<br />
<b>Year 2025: </b>TOR 1, TOR 2, TOR 3, TOR 4, TOR 5, TOR 6, TOR 7<br />
<b>Year 2026: </b>TOR 1, TOR 2, TOR 3, TOR 4, TOR 5, TOR 6, TOR 7<br />
</div>
<h1 class="TeamProspects_EDM"><a id="Oilers">Oilers</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=12">Oilers Page</a> ]
[ <a href="OTHL-PRE-ProTeamRoster.php#Oilers">Pro Team Roster</a> ]
[ <a href="OTHL-PRE-ProTeamScoring.php#Oilers">Pro Team Scoring</a> ]
[ <a href="OTHL-PRE-TeamFinance.php#Oilers">Team Finance</a> ]
[ <a href="OTHL-PRE-ProTeamPlayersInfo.php#Oilers">Pro Team PlayersInfo</a> ]
[ <a href="OTHL-PRE-ProTeamLines.php#Oilers">Pro Team Lines</a> ]
[ <a href="OTHL-PRE-TeamProspects.php#Oilers">Team Prospects</a> ]
[ <a href="OTHL-PRE-ProTeamSchedule.php#Oilers">Pro Team Schedule</a> ]
[ <a href="OTHL-PRE-ProTeamStats.php#Oilers">Pro Team Stats</a> ]
[ <a href="OTHL-PRE-ProTeamStatsVS.php#Oilers">Pro Team Stats VS</a> ]
[ <a href="OTHL-PRE-TeamInjurySuspension.php#Oilers">Team Injury Suspension</a> ]
[ <a href="OTHL-PRE-TeamHistory.php#Oilers">Team History</a> ]
[ <a href="OTHL-PRE-TeamRecords.php#Oilers">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Oilers');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Oilers" style="display: block;">
<h3 class="STHSTeamProspect_Prospect">Prospects - 39</h3>
Aatu Jamsen(Y:2020-O:198), Alex Turcotte(Y:2019-O:4), Andre Gasseau(Y:2021-O:206), Antti Tuomisto(Y:2019-O:34), Bear Hughes(Y:2020-O:137), Ben Meehan(Y:2020-O:142), Cameron Berg(Y:2021-O:148), Carson Latimer(Y:2021-O:131), Chandler Romeo(Y:2021-O:210), Cole Coskey(Y:2019-O:215), Cooper Moore(Y:2019-O:164), Cross Hanas(Y:2020-O:55), Elliot Desnoyers(Y:2020-O:160), Emil Martinsen Lilleberg(Y:2021-O:170), Eric Hjorth(Y:2019-O:141), Ian Moore(Y:2020-O:98), Johan Sodergran(Y:2018-O:158), John Farinacci(Y:2019-O:75), Kirill Marchenko(Y:2018-O:55), Lucas Mercuri(Y:2020-O:171), Lukas Parik(Y:2019-O:71), Manix Landry(Y:2021-O:143), Matthew Knies(Y:2021-O:44), Michael DiPietro(Y:2017-O:52), Mike Callahan(Y:2018-O:164), Nikolai Makarov(Y:2021-O:151), Oskar Steen(Y:2016-O:166), Pasquale Zito(Y:2021-O:167), Paul Cotter(Y:2018-O:127), Reilly Walsh(Y:2017-O:94), Remi Poirier(Y:2020-O:177), Ryan Mast(Y:2021-O:162), Samuel Ersson(Y:2018-O:141), Samuel Knazko(Y:2020-O:99), Sebastian Cossa(Y:2021-O:11), Theodor Niederbach(Y:2020-O:49), Viktor Hurtig(Y:2021-O:173), Will Francis(Y:2019-O:172), Wyatt Johnston(Y:2021-O:25)<br />
<h3 class="STHSTeamProspect_DraftPick">Draft Picks</h3>
<b>Year 2022: </b>EDM 1, EDM 4, ANH 5, MIN 5, ANH 6, NJD 6, CAR 7, OTT 7, MIN 7, ANH 7<br />
<b>Year 2023: </b>EDM 1, EDM 2, EDM 3, EDM 4, PHL 4, EDM 5, EDM 6<br />
<b>Year 2024: </b>EDM 1, EDM 2, EDM 3, EDM 4, EDM 5, EDM 6, EDM 7<br />
<b>Year 2025: </b>EDM 1, EDM 2, EDM 3, EDM 4, EDM 5, EDM 6, EDM 7<br />
<b>Year 2026: </b>EDM 1, EDM 2, EDM 3, EDM 4, EDM 5, EDM 6, EDM 7<br />
</div>
<h1 class="TeamProspects_FLA"><a id="Panthers">Panthers</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=13">Panthers Page</a> ]
[ <a href="OTHL-PRE-ProTeamRoster.php#Panthers">Pro Team Roster</a> ]
[ <a href="OTHL-PRE-ProTeamScoring.php#Panthers">Pro Team Scoring</a> ]
[ <a href="OTHL-PRE-TeamFinance.php#Panthers">Team Finance</a> ]
[ <a href="OTHL-PRE-ProTeamPlayersInfo.php#Panthers">Pro Team PlayersInfo</a> ]
[ <a href="OTHL-PRE-ProTeamLines.php#Panthers">Pro Team Lines</a> ]
[ <a href="OTHL-PRE-TeamProspects.php#Panthers">Team Prospects</a> ]
[ <a href="OTHL-PRE-ProTeamSchedule.php#Panthers">Pro Team Schedule</a> ]
[ <a href="OTHL-PRE-ProTeamStats.php#Panthers">Pro Team Stats</a> ]
[ <a href="OTHL-PRE-ProTeamStatsVS.php#Panthers">Pro Team Stats VS</a> ]
[ <a href="OTHL-PRE-TeamInjurySuspension.php#Panthers">Team Injury Suspension</a> ]
[ <a href="OTHL-PRE-TeamHistory.php#Panthers">Team History</a> ]
[ <a href="OTHL-PRE-TeamRecords.php#Panthers">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Panthers');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Panthers" style="display: block;">
<h3 class="STHSTeamProspect_Prospect">Prospects - 27</h3>
Aleksi Heimosalmi(Y:2021-O:35), Alexander Delnov(Y:2012-O:93), Brennan Othmann(Y:2021-O:19), Casey Fitzgerald(Y:2016-O:104), Chris Wilkie(Y:2015-O:138), Christopher Clapperton(Y:2013-O:115), David Pope(Y:2013-O:121), Filip Helt(Y:2016-O:204), Garrett Meurs(Y:2011-O:139), Hardy Haman-Aktell(Y:2016-O:144), Jakob Stenqvist(Y:2016-O:187), Jakub Galvas(Y:2017-O:179), Jared Moe(Y:2018-O:187), Joren van Pottelberghe(Y:2015-O:105), Josh Anderson(Y:2016-O:84), Karch Bachman(Y:2015-O:169), Linus Weissbach(Y:2017-O:162), Miguel Fidler(Y:2014-O:156), Mike Williamson(Y:2013-O:205), Sergei Boikov(Y:2015-O:174), Stephen Desrocher(Y:2015-O:123), Thimo Nickl(Y:2020-O:123), Thomas Harley(Y:2019-O:21), Trevor Kuntar(Y:2020-O:76), William Villeneuve(Y:2020-O:94), William Worge-Kreu(Y:2018-O:177), Ziyat Paygin(Y:2015-O:144)<br />
<h3 class="STHSTeamProspect_DraftPick">Draft Picks</h3>
<b>Year 2022: </b>FLA 1, VGK 3, FLA 6<br />
<b>Year 2023: </b>FLA 1, FLA 3, FLA 4, BOS 5, FLA 5, FLA 6<br />
<b>Year 2024: </b>FLA 1, FLA 2, FLA 3, FLA 4, FLA 5, FLA 6, FLA 7<br />
<b>Year 2025: </b>FLA 1, FLA 2, FLA 3, FLA 4, FLA 5, FLA 6, FLA 7<br />
<b>Year 2026: </b>FLA 1, FLA 2, FLA 3, FLA 4, FLA 5, FLA 6, FLA 7<br />
</div>
<h1 class="TeamProspects_PIT"><a id="Penguins">Penguins</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=24">Penguins Page</a> ]
[ <a href="OTHL-PRE-ProTeamRoster.php#Penguins">Pro Team Roster</a> ]
[ <a href="OTHL-PRE-ProTeamScoring.php#Penguins">Pro Team Scoring</a> ]
[ <a href="OTHL-PRE-TeamFinance.php#Penguins">Team Finance</a> ]
[ <a href="OTHL-PRE-ProTeamPlayersInfo.php#Penguins">Pro Team PlayersInfo</a> ]
[ <a href="OTHL-PRE-ProTeamLines.php#Penguins">Pro Team Lines</a> ]
[ <a href="OTHL-PRE-TeamProspects.php#Penguins">Team Prospects</a> ]
[ <a href="OTHL-PRE-ProTeamSchedule.php#Penguins">Pro Team Schedule</a> ]
[ <a href="OTHL-PRE-ProTeamStats.php#Penguins">Pro Team Stats</a> ]
[ <a href="OTHL-PRE-ProTeamStatsVS.php#Penguins">Pro Team Stats VS</a> ]
[ <a href="OTHL-PRE-TeamInjurySuspension.php#Penguins">Team Injury Suspension</a> ]
[ <a href="OTHL-PRE-TeamHistory.php#Penguins">Team History</a> ]
[ <a href="OTHL-PRE-TeamRecords.php#Penguins">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Penguins');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Penguins" style="display: block;">
<h3 class="STHSTeamProspect_Prospect">Prospects - 42</h3>
Aarne Talvitte(Y:2017-O:166), Alex Laferriere(Y:2020-O:70), Alexander Campbell(Y:2019-O:80), Bogdan Trineyev(Y:2020-O:115), Brady Gilmour(Y:2017-O:197), Brett Leason(Y:2019-O:37), Calle Sjalin(Y:2017-O:175), Cameron Morrison(Y:2016-O:37), Cole Fonstad(Y:2018-O:89), Cole Fraser(Y:2017-O:135), Croix Evingson(Y:2017-O:215), Daniel Torgersson(Y:2020-O:48), David Hrenak(Y:2018-O:143), Jacob Melanson(Y:2021-O:130), Jake Chiasson(Y:2021-O:98), Joe Veleno(Y:2018-O:15), John Beecher(Y:2019-O:33), Justin Ertel(Y:2021-O:94), Kaiden Guhle(Y:2020-O:24), Keith Petruzzelli(Y:2017-O:74), Kevin Elgestal(Y:2014-O:205), Kirill Tyutyayev(Y:2019-O:181), Luke Martin(Y:2017-O:42), Luke Tuch(Y:2020-O:52), Maksim Berezkin(Y:2020-O:129), Malte Setkov(Y:2017-O:129), Matty Beniers(Y:2021-O:2), Maxwell Crozier(Y:2019-O:158), Morgan Barron(Y:2017-O:185), Nikita Popugaev(Y:2017-O:73), Olen Zellweger(Y:2021-O:34), Pontus Holmberg(Y:2018-O:157), Pyotr Kochetkov(Y:2019-O:40), Ridly Greig(Y:2020-O:32), Riley Kidney(Y:2021-O:77), Scott Reedy(Y:2017-O:88), Skyler Brind'Amour(Y:2017-O:169), Thomas Novak(Y:2015-O:34), Topi Niemela(Y:2020-O:67), Tyler Inamoto(Y:2017-O:104), Vincent Iorio(Y:2021-O:62), Yegor Rykov(Y:2016-O:172)<br />
<h3 class="STHSTeamProspect_DraftPick">Draft Picks</h3>
<b>Year 2022: </b>PIT 1, PIT 2, PIT 3, EDM 3, PIT 4, NSH 4, PIT 5, PIT 6, PIT 7<br />
<b>Year 2023: </b>PIT 1, PIT 2, PIT 3, PIT 4, PIT 5, PIT 7<br />
<b>Year 2024: </b>PIT 1, PIT 2, PIT 3, PIT 4, PIT 5, PIT 6, PIT 7<br />
<b>Year 2025: </b>PIT 1, PIT 2, PIT 3, PIT 4, PIT 5, PIT 6, PIT 7<br />
<b>Year 2026: </b>PIT 1, PIT 2, PIT 3, PIT 4, PIT 5, PIT 6, PIT 7<br />
</div>
<h1 class="TeamProspects_NSH"><a id="Predators">Predators</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=17">Predators Page</a> ]
[ <a href="OTHL-PRE-ProTeamRoster.php#Predators">Pro Team Roster</a> ]
[ <a href="OTHL-PRE-ProTeamScoring.php#Predators">Pro Team Scoring</a> ]
[ <a href="OTHL-PRE-TeamFinance.php#Predators">Team Finance</a> ]
[ <a href="OTHL-PRE-ProTeamPlayersInfo.php#Predators">Pro Team PlayersInfo</a> ]
[ <a href="OTHL-PRE-ProTeamLines.php#Predators">Pro Team Lines</a> ]
[ <a href="OTHL-PRE-TeamProspects.php#Predators">Team Prospects</a> ]
[ <a href="OTHL-PRE-ProTeamSchedule.php#Predators">Pro Team Schedule</a> ]
[ <a href="OTHL-PRE-ProTeamStats.php#Predators">Pro Team Stats</a> ]
[ <a href="OTHL-PRE-ProTeamStatsVS.php#Predators">Pro Team Stats VS</a> ]
[ <a href="OTHL-PRE-TeamInjurySuspension.php#Predators">Team Injury Suspension</a> ]
[ <a href="OTHL-PRE-TeamHistory.php#Predators">Team History</a> ]
[ <a href="OTHL-PRE-TeamRecords.php#Predators">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Predators');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Predators" style="display: block;">
<h3 class="STHSTeamProspect_Prospect">Prospects - 29</h3>
Anton Andersson(Y:2017-O:208), Ben McCartney(Y:2020-O:210), Blake Heinrich(Y:2013-O:185), Brayden Chizen(Y:2016-O:209), Brock Faber(Y:2020-O:66), Chris Martenet(Y:2015-O:99), Daniel Laatsch(Y:2021-O:221), David Drake(Y:2013-O:192), Felix Bibeau(Y:2019-O:162), Gage Goncalves(Y:2020-O:62), Hayden Hawkey(Y:2014-O:174), Jakub Dobes(Y:2020-O:186), Jason Kasdorf(Y:2011-O:166), Jeremiah Addison(Y:2015-O:165), Jesper Pettersson(Y:2014-O:204), Kyle Masters(Y:2021-O:139), Matthew Wedman(Y:2019-O:171), Nathan Legare(Y:2019-O:62), Noel Hoefenmayer(Y:2017-O:110), Ozzy Wiesblatt(Y:2020-O:31), Simon Knak(Y:2021-O:157), Spencer Knight(Y:2019-O:8), Terrance Amorosa(Y:2013-O:159), Ty Murchison(Y:2021-O:150), Tyler Vesel(Y:2014-O:178), Tyler Weiss(Y:2018-O:126), Tyson Hinds(Y:2021-O:125), Zachary Bouthillier(Y:2018-O:210), Zachary Pochiro(Y:2013-O:132)<br />
<h3 class="STHSTeamProspect_DraftPick">Draft Picks</h3>
<b>Year 2022: </b>ANH 3, TBL 3, NSH 3, ARI 6, NSH 6, NSH 7<br />
<b>Year 2023: </b>NSH 1, NSH 2, NSH 3, NSH 4, NSH 5, NSH 6, NSH 7<br />
<b>Year 2024: </b>NSH 1, NSH 2, NSH 3, NSH 4, NSH 5, NSH 6, NSH 7<br />
<b>Year 2025: </b>NSH 1, NSH 2, NSH 3, NSH 4, NSH 5, NSH 6, NSH 7<br />
<b>Year 2026: </b>NSH 1, NSH 2, NSH 3, NSH 4, NSH 5, NSH 6, NSH 7<br />
</div>
<h1 class="TeamProspects_NYR"><a id="Rangers">Rangers</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=20">Rangers Page</a> ]
[ <a href="OTHL-PRE-ProTeamRoster.php#Rangers">Pro Team Roster</a> ]
[ <a href="OTHL-PRE-ProTeamScoring.php#Rangers">Pro Team Scoring</a> ]
[ <a href="OTHL-PRE-TeamFinance.php#Rangers">Team Finance</a> ]
[ <a href="OTHL-PRE-ProTeamPlayersInfo.php#Rangers">Pro Team PlayersInfo</a> ]
[ <a href="OTHL-PRE-ProTeamLines.php#Rangers">Pro Team Lines</a> ]
[ <a href="OTHL-PRE-TeamProspects.php#Rangers">Team Prospects</a> ]
[ <a href="OTHL-PRE-ProTeamSchedule.php#Rangers">Pro Team Schedule</a> ]
[ <a href="OTHL-PRE-ProTeamStats.php#Rangers">Pro Team Stats</a> ]
[ <a href="OTHL-PRE-ProTeamStatsVS.php#Rangers">Pro Team Stats VS</a> ]
[ <a href="OTHL-PRE-TeamInjurySuspension.php#Rangers">Team Injury Suspension</a> ]
[ <a href="OTHL-PRE-TeamHistory.php#Rangers">Team History</a> ]
[ <a href="OTHL-PRE-TeamRecords.php#Rangers">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Rangers');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Rangers" style="display: block;">
<h3 class="STHSTeamProspect_Prospect">Prospects - 35</h3>
Aapeli Rasanen(Y:2016-O:115), Anthony Brodeur(Y:2013-O:193), Anthony Camara(Y:2011-O:98), Ben Sexton(Y:2009-O:203), Bokondji Imama(Y:2015-O:197), Bradley Ross(Y:2010-O:33), Brendan Brisson(Y:2020-O:28), Cameron Crotty(Y:2017-O:101), Connor Corcoran(Y:2018-O:151), Dennis Busby(Y:2018-O:152), Dillon Heatherington(Y:2013-O:58), Felix Sandstrom(Y:2015-O:40), Francis Perron(Y:2014-O:131), Gannon Laroque(Y:2021-O:156), Garret Ross(Y:2012-O:169), Garrett Metcalf(Y:2015-O:175), Henry Rybinski(Y:2019-O:110), Jaroslav Chmelar(Y:2021-O:201), Joachim Blichfeld(Y:2016-O:188), Joey Dudek(Y:2014-O:168), Joshua Brown(Y:2013-O:167), Louis-Marc Aubry(Y:2010-O:84), Lukas Reichel(Y:2020-O:18), Luke Stevens(Y:2015-O:151), Matt Schmalz(Y:2015-O:185), Mattias Elfstrom(Y:2016-O:155), Nicholas Caamano(Y:2016-O:125), Patrick Sanvido(Y:2014-O:209), Robin Norell(Y:2013-O:152), Ryan McLeod(Y:2018-O:33), Sondre Olden(Y:2010-O:59), Steven Spinner(Y:2014-O:189), Tanner Laczynski(Y:2016-O:139), Vaclav Karabacek(Y:2014-O:56), Vladislav Yeryomenko(Y:2018-O:144)<br />
<h3 class="STHSTeamProspect_DraftPick">Draft Picks</h3>
<b>Year 2022: </b>NYR 1, MTL 1, CAR 1, NYR 2, TBL 2, MTL 2, PHL 2, CGY 3, DAL 4, NYR 5, CAR 5, VGK 5, NYR 7<br />
<b>Year 2023: </b>NYR 1, NYR 2, CAR 2, NYR 3, NYR 4, NYR 5, NYR 6, NYR 7<br />
<b>Year 2024: </b>NYR 1, NYR 2, NYR 3, NYR 4, NYR 5, NYR 6, NYR 7<br />
<b>Year 2025: </b>NYR 1, NYR 2, NYR 3, NYR 4, NYR 5, NYR 6, NYR 7<br />
<b>Year 2026: </b>NYR 1, NYR 2, NYR 3, NYR 4, NYR 5, NYR 6, NYR 7<br />
</div>
<h1 class="TeamProspects_DET"><a id="RedWings">Red Wings</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=11">Red Wings Page</a> ]
[ <a href="OTHL-PRE-ProTeamRoster.php#RedWings">Pro Team Roster</a> ]
[ <a href="OTHL-PRE-ProTeamScoring.php#RedWings">Pro Team Scoring</a> ]
[ <a href="OTHL-PRE-TeamFinance.php#RedWings">Team Finance</a> ]
[ <a href="OTHL-PRE-ProTeamPlayersInfo.php#RedWings">Pro Team PlayersInfo</a> ]
[ <a href="OTHL-PRE-ProTeamLines.php#RedWings">Pro Team Lines</a> ]
[ <a href="OTHL-PRE-TeamProspects.php#RedWings">Team Prospects</a> ]
[ <a href="OTHL-PRE-ProTeamSchedule.php#RedWings">Pro Team Schedule</a> ]
[ <a href="OTHL-PRE-ProTeamStats.php#RedWings">Pro Team Stats</a> ]
[ <a href="OTHL-PRE-ProTeamStatsVS.php#RedWings">Pro Team Stats VS</a> ]
[ <a href="OTHL-PRE-TeamInjurySuspension.php#RedWings">Team Injury Suspension</a> ]
[ <a href="OTHL-PRE-TeamHistory.php#RedWings">Team History</a> ]
[ <a href="OTHL-PRE-TeamRecords.php#RedWings">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_RedWings');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_RedWings" style="display: block;">
<h3 class="STHSTeamProspect_Prospect">Prospects - 49</h3>
Allan McShane(Y:2018-O:78), Ben Mirageas(Y:2017-O:114), Brad Morrison(Y:2015-O:89), Brett Murray(Y:2016-O:124), Bulat Shafigullin(Y:2018-O:74), Cal Thomas(Y:2021-O:203), Chase Bradley(Y:2020-O:204), Chase Yoder(Y:2020-O:190), Chaz Reddekopp(Y:2015-O:168), Christian Krygier(Y:2018-O:204), Cole Brady(Y:2019-O:176), Cole Krygier(Y:2018-O:206), Collin Adams(Y:2016-O:183), David Cotton(Y:2015-O:135), Dylan Ferguson(Y:2017-O:131), Dylan Peterson(Y:2020-O:84), Erik Foley(Y:2015-O:65), Evan Barratt(Y:2017-O:100), Fabian Lysell(Y:2021-O:17), Filip Ahl(Y:2015-O:88), Francesco Arcuri(Y:2021-O:160), Graham McPhee(Y:2016-O:131), Isaac Ratcliffe(Y:2017-O:32), Jack Sadek(Y:2015-O:187), Jacob Paquette(Y:2017-O:151), Jan Kostalek(Y:2013-O:103), Jan Mysak(Y:2020-O:44), Janne Juvonen(Y:2013-O:194), Jean-Luc Foudy(Y:2020-O:57), Joel Nystrom(Y:2021-O:171), Joni Ikonen(Y:2017-O:46), Jordan Kooy(Y:2018-O:211), Jordan Sambrook(Y:2016-O:94), Jordan Stallard(Y:2016-O:117), Kristoffer Gunnarsson(Y:2017-O:193), Louis Crevier(Y:2020-O:158), Mathew Hill(Y:2019-O:173), Miroslav Svoboda(Y:2015-O:207), Nicolas Mattinen(Y:2016-O:132), Nikola Pasic(Y:2019-O:142), Raivis Ansons(Y:2020-O:154), Robin Kovacs(Y:2015-O:51), Ronan Seeley(Y:2020-O:150), Roy Radke(Y:2015-O:162), Sam Brittain(Y:2010-O:123), Travis Barron(Y:2016-O:152), Ty Ronning(Y:2016-O:154), Wyatt Schingoethe(Y:2020-O:199), Xavier Bourgault(Y:2021-O:20)<br />
<h3 class="STHSTeamProspect_DraftPick">Draft Picks</h3>
<b>Year 2022: </b>DET 1, DET 2, PHL 4, DET 4, DET 5, EDM 5, DET 6, DET 7<br />
<b>Year 2023: </b>DET 1, DET 2, DET 3, DET 4, DET 5, DET 7, MIN 7<br />
<b>Year 2024: </b>DET 1, DET 2, DET 3, DET 4, DET 5, DET 6, DET 7<br />
<b>Year 2025: </b>DET 1, DET 2, DET 3, DET 4, DET 5, DET 6, DET 7<br />
<b>Year 2026: </b>DET 1, DET 2, DET 3, DET 4, DET 5, DET 6, DET 7<br />
</div>
<h1 class="TeamProspects_BUF"><a id="Sabres">Sabres</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=4">Sabres Page</a> ]
[ <a href="OTHL-PRE-ProTeamRoster.php#Sabres">Pro Team Roster</a> ]
[ <a href="OTHL-PRE-ProTeamScoring.php#Sabres">Pro Team Scoring</a> ]
[ <a href="OTHL-PRE-TeamFinance.php#Sabres">Team Finance</a> ]
[ <a href="OTHL-PRE-ProTeamPlayersInfo.php#Sabres">Pro Team PlayersInfo</a> ]
[ <a href="OTHL-PRE-ProTeamLines.php#Sabres">Pro Team Lines</a> ]
[ <a href="OTHL-PRE-TeamProspects.php#Sabres">Team Prospects</a> ]
[ <a href="OTHL-PRE-ProTeamSchedule.php#Sabres">Pro Team Schedule</a> ]
[ <a href="OTHL-PRE-ProTeamStats.php#Sabres">Pro Team Stats</a> ]
[ <a href="OTHL-PRE-ProTeamStatsVS.php#Sabres">Pro Team Stats VS</a> ]
[ <a href="OTHL-PRE-TeamInjurySuspension.php#Sabres">Team Injury Suspension</a> ]
[ <a href="OTHL-PRE-TeamHistory.php#Sabres">Team History</a> ]
[ <a href="OTHL-PRE-TeamRecords.php#Sabres">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Sabres');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Sabres" style="display: block;">
<h3 class="STHSTeamProspect_Prospect">Prospects - 30</h3>
Albert Lyckasen(Y:2020-O:188), Aleksandr Kisakov(Y:2021-O:58), Anthony Florentino(Y:2013-O:105), Arturs Silovs(Y:2019-O:152), Artyom Grushnikov(Y:2021-O:65), Case McCarthy(Y:2019-O:149), Eric Florchuk(Y:2018-O:184), Erik Portillo(Y:2019-O:93), Ethan Bowen(Y:2020-O:205), Ethan Haider(Y:2019-O:147), Frederik Nissen(Y:2019-O:146), Ilya Konovalov(Y:2019-O:83), Isaiah Saville(Y:2019-O:138), Ivan Chekhovich(Y:2017-O:108), Joshua Bloom(Y:2021-O:122), Justin Sourdif(Y:2020-O:81), Justus Annunen(Y:2018-O:85), Kirill Slepets(Y:2019-O:145), Leo Loof(Y:2020-O:119), Marshall Warren(Y:2019-O:111), Matias Mantykivi(Y:2019-O:148), Matthew Robertson(Y:2019-O:43), Mitchell Gibson(Y:2018-O:171), Nick Sorensen(Y:2013-O:47), Prokhor Poltapov(Y:2021-O:26), Rhett Pitlick(Y:2019-O:134), Stiven Sardarian(Y:2021-O:90), Tim Soderlund(Y:2017-O:137), Trevor Janicke(Y:2019-O:144), Valentin Nussbaumer(Y:2019-O:151)<br />
<h3 class="STHSTeamProspect_DraftPick">Draft Picks</h3>
<b>Year 2022: </b>BUF 1, BUF 2, CAR 3, VGK 4, VAN 5, CAR 6, LAK 6, BUF 6<br />
<b>Year 2023: </b>BUF 1, BUF 2, BUF 3, BUF 4, BUF 5, BUF 6, BUF 7<br />
<b>Year 2024: </b>BUF 1, BUF 2, BUF 3, BUF 4, BUF 5, BUF 6, BUF 7<br />
<b>Year 2025: </b>BUF 1, BUF 2, BUF 3, BUF 4, BUF 5, BUF 6, BUF 7<br />
<b>Year 2026: </b>BUF 1, BUF 2, BUF 3, BUF 4, BUF 5, BUF 6, BUF 7<br />
</div>
<h1 class="TeamProspects_OTT"><a id="Senators">Senators</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=21">Senators Page</a> ]
[ <a href="OTHL-PRE-ProTeamRoster.php#Senators">Pro Team Roster</a> ]
[ <a href="OTHL-PRE-ProTeamScoring.php#Senators">Pro Team Scoring</a> ]
[ <a href="OTHL-PRE-TeamFinance.php#Senators">Team Finance</a> ]
[ <a href="OTHL-PRE-ProTeamPlayersInfo.php#Senators">Pro Team PlayersInfo</a> ]
[ <a href="OTHL-PRE-ProTeamLines.php#Senators">Pro Team Lines</a> ]
[ <a href="OTHL-PRE-TeamProspects.php#Senators">Team Prospects</a> ]
[ <a href="OTHL-PRE-ProTeamSchedule.php#Senators">Pro Team Schedule</a> ]
[ <a href="OTHL-PRE-ProTeamStats.php#Senators">Pro Team Stats</a> ]
[ <a href="OTHL-PRE-ProTeamStatsVS.php#Senators">Pro Team Stats VS</a> ]
[ <a href="OTHL-PRE-TeamInjurySuspension.php#Senators">Team Injury Suspension</a> ]
[ <a href="OTHL-PRE-TeamHistory.php#Senators">Team History</a> ]
[ <a href="OTHL-PRE-TeamRecords.php#Senators">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Senators');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Senators" style="display: block;">
<h3 class="STHSTeamProspect_Prospect">Prospects - 50</h3>
Andre Lee(Y:2019-O:189), Benjamin Finkelstein(Y:2016-O:208), Blake Siebenaler(Y:2014-O:93), Cameron Whynot(Y:2021-O:85), Carl Lindbom(Y:2021-O:180), Carter Mazur(Y:2021-O:93), Cole Candella(Y:2016-O:102), Cole Huckins(Y:2021-O:80), Conner Roulette(Y:2021-O:79), D'Artagnan Joly(Y:2017-O:128), David Quenneville(Y:2016-O:121), Drew Helleson(Y:2019-O:49), Dustin Wolf(Y:2019-O:117), Jack Kopacka(Y:2016-O:91), Jake Wise(Y:2018-O:54), Jakov Novak(Y:2018-O:196), Joe Vrbetic(Y:2021-O:169), John St. Ivany(Y:2018-O:131), Jonas Rondbjerg(Y:2017-O:72), Jonny Tychonick(Y:2018-O:53), Joshua Lopina(Y:2021-O:105), Justin Janicke(Y:2021-O:209), Kyle Kukkonen(Y:2021-O:183), Lassi Thomson(Y:2019-O:17), Logan Cockerill(Y:2017-O:153), Lucas Forsell(Y:2021-O:212), Mason Langenbrunner(Y:2020-O:194), Matt Spencer(Y:2015-O:58), Matthew Stienburg(Y:2019-O:55), Maximus Wanner(Y:2021-O:219), Miles Gendron(Y:2014-O:92), Oliver Johansson(Y:2021-O:82), Oliver Kapanen(Y:2021-O:61), Pascal Laberge(Y:2016-O:30), Patrick Holway(Y:2015-O:172), Patrick Moynihan(Y:2019-O:140), Philip Svedeback(Y:2021-O:137), Roman Schmidt(Y:2021-O:83), Scott Walford(Y:2017-O:79), Sean Behrens(Y:2021-O:47), Serron Noel(Y:2018-O:18), Shane Lachance(Y:2021-O:191), Simon Lundmark(Y:2019-O:70), Spencer Watson(Y:2014-O:101), Tristan Lennox(Y:2021-O:74), Victor Stjernborg(Y:2021-O:103), Vojtech Budik(Y:2016-O:162), Will Reilly(Y:2017-O:217), Zach Dean(Y:2021-O:32), Zachary L'Heureux(Y:2021-O:29)<br />
<h3 class="STHSTeamProspect_DraftPick">Draft Picks</h3>
<b>Year 2022: </b>OTT 1, BOS 1, NSH 1, OTT 2, NSH 2, OTT 3, WSH 3, OTT 4, WPG 5, OTT 5, OTT 6, EDM 6, VGK 7<br />
<b>Year 2023: </b>OTT 1, OTT 2, OTT 3, CGY 3, OTT 4, OTT 5, OTT 6, SJS 7<br />
<b>Year 2024: </b>OTT 1, OTT 2, OTT 3, OTT 4, OTT 5, OTT 6, OTT 7<br />
<b>Year 2025: </b>OTT 1, OTT 2, OTT 3, OTT 4, OTT 5, OTT 6, OTT 7<br />
<b>Year 2026: </b>OTT 1, OTT 2, OTT 3, OTT 4, OTT 5, OTT 6, OTT 7<br />
</div>
<h1 class="TeamProspects_SJS"><a id="Sharks">Sharks</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=26">Sharks Page</a> ]
[ <a href="OTHL-PRE-ProTeamRoster.php#Sharks">Pro Team Roster</a> ]
[ <a href="OTHL-PRE-ProTeamScoring.php#Sharks">Pro Team Scoring</a> ]
[ <a href="OTHL-PRE-TeamFinance.php#Sharks">Team Finance</a> ]
[ <a href="OTHL-PRE-ProTeamPlayersInfo.php#Sharks">Pro Team PlayersInfo</a> ]
[ <a href="OTHL-PRE-ProTeamLines.php#Sharks">Pro Team Lines</a> ]
[ <a href="OTHL-PRE-TeamProspects.php#Sharks">Team Prospects</a> ]
[ <a href="OTHL-PRE-ProTeamSchedule.php#Sharks">Pro Team Schedule</a> ]
[ <a href="OTHL-PRE-ProTeamStats.php#Sharks">Pro Team Stats</a> ]
[ <a href="OTHL-PRE-ProTeamStatsVS.php#Sharks">Pro Team Stats VS</a> ]
[ <a href="OTHL-PRE-TeamInjurySuspension.php#Sharks">Team Injury Suspension</a> ]
[ <a href="OTHL-PRE-TeamHistory.php#Sharks">Team History</a> ]
[ <a href="OTHL-PRE-TeamRecords.php#Sharks">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Sharks');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Sharks" style="display: block;">
<h3 class="STHSTeamProspect_Prospect">Prospects - 48</h3>
Alex Jefferies(Y:2020-O:133), Alex Young(Y:2020-O:212), Alexander Gordin(Y:2020-O:165), Arvid Henrikson(Y:2016-O:205), Austin Osmanski(Y:2016-O:207), Austin Wong(Y:2018-O:193), Axel Rindell(Y:2020-O:164), Blake McLaughlin(Y:2018-O:69), Bobby Brink(Y:2019-O:38), Braden Doyle(Y:2019-O:187), Bryce Misley(Y:2017-O:141), Chase Pearson(Y:2015-O:120), Chase Stillman(Y:2021-O:46), Colby Williams(Y:2015-O:196), Connor Hurley(Y:2013-O:43), Daniil Chayka(Y:2021-O:41), David Farrance(Y:2017-O:80), Declan McDonnell(Y:2020-O:169), Dmitri Kostenko(Y:2021-O:102), Dmitry Zlodeyev(Y:2020-O:144), Eric Cornel(Y:2014-O:44), Filip Berglund(Y:2016-O:120), Filip Engaras(Y:2020-O:183), Henrik Tikkanen(Y:2020-O:185), Hugo Ollas(Y:2020-O:184), Isaak Phillips(Y:2020-O:170), Jacob Truscott(Y:2020-O:143), Jaydon Dureau(Y:2020-O:139), Jeremias Lindewall(Y:2020-O:207), Joey LaLeggia(Y:2012-O:120), Jonathan Dahlen(Y:2016-O:56), Karlis Cukste(Y:2015-O:166), Kevin Mandolese(Y:2018-O:162), Lucas Feuk(Y:2019-O:101), Maksim Zhukov(Y:2017-O:90), Matej Blumel(Y:2019-O:96), Mike Robinson(Y:2015-O:129), Mitchell Mattson(Y:2016-O:118), Noah Ellis(Y:2020-O:174), Olivier Nadeau(Y:2021-O:110), Patrick Shea(Y:2015-O:203), Pavel Novak(Y:2020-O:138), Philip Kemp(Y:2017-O:199), Riley Duran(Y:2020-O:208), Shai Buium(Y:2021-O:56), Tarmo Reunanen(Y:2016-O:110), Timofey Spitserov(Y:2020-O:209), Zach Ostapchuk(Y:2021-O:42)<br />
<h3 class="STHSTeamProspect_DraftPick">Draft Picks</h3>
<b>Year 2022: </b>SJS 1, TBL 1, SJS 2, SJS 3, SJS 4, CAR 4, SJS 5, LAK 7<br />
<b>Year 2023: </b>SJS 1, SJS 2, SJS 3, SJS 4, SJS 5, SJS 6<br />
<b>Year 2024: </b>SJS 1, SJS 2, SJS 3, SJS 4, SJS 5, SJS 6<br />
<b>Year 2025: </b>SJS 1, SJS 2, SJS 3, SJS 4, SJS 5, SJS 6, SJS 7<br />
<b>Year 2026: </b>SJS 1, SJS 2, SJS 3, SJS 4, SJS 5, SJS 6, SJS 7<br />
</div>
<h1 class="TeamProspects_DAL"><a id="Stars">Stars</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=10">Stars Page</a> ]
[ <a href="OTHL-PRE-ProTeamRoster.php#Stars">Pro Team Roster</a> ]
[ <a href="OTHL-PRE-ProTeamScoring.php#Stars">Pro Team Scoring</a> ]
[ <a href="OTHL-PRE-TeamFinance.php#Stars">Team Finance</a> ]
[ <a href="OTHL-PRE-ProTeamPlayersInfo.php#Stars">Pro Team PlayersInfo</a> ]
[ <a href="OTHL-PRE-ProTeamLines.php#Stars">Pro Team Lines</a> ]
[ <a href="OTHL-PRE-TeamProspects.php#Stars">Team Prospects</a> ]
[ <a href="OTHL-PRE-ProTeamSchedule.php#Stars">Pro Team Schedule</a> ]
[ <a href="OTHL-PRE-ProTeamStats.php#Stars">Pro Team Stats</a> ]
[ <a href="OTHL-PRE-ProTeamStatsVS.php#Stars">Pro Team Stats VS</a> ]
[ <a href="OTHL-PRE-TeamInjurySuspension.php#Stars">Team Injury Suspension</a> ]
[ <a href="OTHL-PRE-TeamHistory.php#Stars">Team History</a> ]
[ <a href="OTHL-PRE-TeamRecords.php#Stars">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Stars');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Stars" style="display: block;">
<h3 class="STHSTeamProspect_Prospect">Prospects - 11</h3>
Alexis Gravel(Y:2018-O:130), Anthony Romano(Y:2019-O:197), Cole Perfetti(Y:2020-O:6), Hunter Jones(Y:2019-O:60), Jack Becker(Y:2015-O:209), Matt Rempe(Y:2020-O:189), Nils Aman(Y:2020-O:178), Nolan Foote(Y:2019-O:29), Owen McLaughlin(Y:2021-O:215), Ryan McCleary(Y:2021-O:214), Shakir Mukhamadullin(Y:2020-O:36)<br />
<h3 class="STHSTeamProspect_DraftPick">Draft Picks</h3>
<b>Year 2022: </b>DAL 2, DAL 3<br />
<b>Year 2023: </b>FLA 2, DAL 2, DAL 3, DAL 4, DAL 6, DAL 7<br />
<b>Year 2024: </b>DAL 1, DAL 2, DAL 3, DAL 4, DAL 5, DAL 6, DAL 7<br />
<b>Year 2025: </b>DAL 1, DAL 2, DAL 3, DAL 4, DAL 5, DAL 6, DAL 7<br />
<b>Year 2026: </b>DAL 1, DAL 2, DAL 3, DAL 4, DAL 5, DAL 6, DAL 7<br />
</div>
<h1 class="TeamProspects_MIN"><a id="Wild">Wild</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=15">Wild Page</a> ]
[ <a href="OTHL-PRE-ProTeamRoster.php#Wild">Pro Team Roster</a> ]
[ <a href="OTHL-PRE-ProTeamScoring.php#Wild">Pro Team Scoring</a> ]
[ <a href="OTHL-PRE-TeamFinance.php#Wild">Team Finance</a> ]
[ <a href="OTHL-PRE-ProTeamPlayersInfo.php#Wild">Pro Team PlayersInfo</a> ]
[ <a href="OTHL-PRE-ProTeamLines.php#Wild">Pro Team Lines</a> ]
[ <a href="OTHL-PRE-TeamProspects.php#Wild">Team Prospects</a> ]
[ <a href="OTHL-PRE-ProTeamSchedule.php#Wild">Pro Team Schedule</a> ]
[ <a href="OTHL-PRE-ProTeamStats.php#Wild">Pro Team Stats</a> ]
[ <a href="OTHL-PRE-ProTeamStatsVS.php#Wild">Pro Team Stats VS</a> ]
[ <a href="OTHL-PRE-TeamInjurySuspension.php#Wild">Team Injury Suspension</a> ]
[ <a href="OTHL-PRE-TeamHistory.php#Wild">Team History</a> ]
[ <a href="OTHL-PRE-TeamRecords.php#Wild">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Wild');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Wild" style="display: block;">
<h3 class="STHSTeamProspect_Prospect">Prospects - 47</h3>
Aaron Huglen(Y:2019-O:118), Albin Grewe(Y:2019-O:57), Antti Saarela(Y:2019-O:113), Beau Starrett(Y:2014-O:100), Blake Murray(Y:2019-O:150), Brycen Martin(Y:2014-O:76), Carson Bantle(Y:2020-O:130), Casey Staum(Y:2016-O:181), Connor Dewar(Y:2018-O:113), Connor McClennon(Y:2020-O:124), Curtis Hall(Y:2018-O:103), Dmitri Samorukov(Y:2017-O:99), Dmitry Zavgorodniy(Y:2018-O:93), Egor Sokolov(Y:2020-O:59), Eric Ciccolini(Y:2019-O:133), Evan Vierling(Y:2020-O:112), Fabian Zetterlund(Y:2017-O:63), Filip Hallander(Y:2018-O:51), Isaac Belliveau(Y:2021-O:158), Jachym Kondelik(Y:2018-O:129), Jack Quinn(Y:2020-O:12), Jack Thompson(Y:2020-O:117), Jacob Ingham(Y:2018-O:167), Jacob Olofsson(Y:2018-O:34), Jake Ryczek(Y:2016-O:158), Jesper Wallstedt(Y:2021-O:7), John-Jason Peterka(Y:2020-O:29), Jonathan Gruden(Y:2018-O:87), Karl Henriksson(Y:2019-O:64), Kasper Puutio(Y:2020-O:153), Kim Nousiainen(Y:2019-O:160), Lukas Cormier(Y:2020-O:71), Lukas Elvenes(Y:2017-O:97), Markus Phillips(Y:2017-O:96), Mason McTavish(Y:2021-O:6), Mathias From(Y:2016-O:135), Nicolas Daws(Y:2020-O:74), Nikita Chibrikov(Y:2021-O:30), Oskar Magnusson(Y:2020-O:135), Ostap Safin(Y:2017-O:85), Philip Broberg(Y:2019-O:11), Roman Bychkov(Y:2019-O:154), Ryan Suzuki(Y:2019-O:26), Slava Demin(Y:2018-O:86), Teemu Kivihalme(Y:2013-O:135), Xavier Bouchard(Y:2018-O:147), Zac Jones(Y:2019-O:85)<br />
<h3 class="STHSTeamProspect_DraftPick">Draft Picks</h3>
<b>Year 2022: </b>MIN 1, MIN 2, MIN 3, MIN 4, MIN 6, STL 7<br />
<b>Year 2023: </b>MIN 1, MIN 2, MIN 3, MIN 4, MIN 5, MIN 6<br />
<b>Year 2024: </b>MIN 1, MIN 2, MIN 3, MIN 4, MIN 5, MIN 6, MIN 7<br />
<b>Year 2025: </b>MIN 1, MIN 2, MIN 3, MIN 4, MIN 5, MIN 6, MIN 7<br />
<b>Year 2026: </b>MIN 1, MIN 2, MIN 3, MIN 4, MIN 5, MIN 6, MIN 7<br />
</div>
<?php include "Footer.php";?>
