<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<title>OTHL - Team Prospects</title>
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
<div class="STHSTopLink"><a id="STHSRosterTop"></a> <a href="#Avalanche">Avalanche</a> | <a href="#Blackhawks">Blackhawks</a> | <a href="#BlueJackets">Blue Jackets</a> | <a href="#Blues">Blues</a> | <a href="#Bruins">Bruins</a> | <a href="#Canadiens">Canadiens</a> | <a href="#Canucks">Canucks</a> | <a href="#Capitals">Capitals</a> | <a href="#Coyotes">Coyotes</a> | <a href="#Devils">Devils</a> | <a href="#Ducks">Ducks</a> | <a href="#Flames">Flames</a> | <a href="#Flyers">Flyers</a> | <a href="#GoldenKnights">Golden Knights</a> | <a href="#Hurricanes">Hurricanes</a> | <a href="#Islanders">Islanders</a> | <a href="#Jets">Jets</a> | <a href="#Kings">Kings</a> | <a href="#Lightning">Lightning</a> | <a href="#MapleLeafs">Maple Leafs</a> | <a href="#Oilers">Oilers</a> | <a href="#Panthers">Panthers</a> | <a href="#Penguins">Penguins</a> | <a href="#Predators">Predators</a> | <a href="#Rangers">Rangers</a> | <a href="#RedWings">Red Wings</a> | <a href="#Sabres">Sabres</a> | <a href="#Senators">Senators</a> | <a href="#Sharks">Sharks</a> | <a href="#Stars">Stars</a> | <a href="#Wild">Wild</a> | <a href="javascript:STHS_JS_CloseAll('');">Close All Team View</a> | <a href="javascript:STHS_JS_OpenAll('');">Open All Team View</a>
</div>
<h1 class="TeamProspects_COL"><a id="Avalanche">Avalanche</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=8">Avalanche Page</a> ]
[ <a href="OTHL-ProTeamRoster.php#Avalanche">Pro Team Roster</a> ]
[ <a href="OTHL-ProTeamScoring.php#Avalanche">Pro Team Scoring</a> ]
[ <a href="OTHL-TeamFinance.php#Avalanche">Team Finance</a> ]
[ <a href="OTHL-ProTeamPlayersInfo.php#Avalanche">Pro Team PlayersInfo</a> ]
[ <a href="OTHL-ProTeamLines.php#Avalanche">Pro Team Lines</a> ]
[ <a href="OTHL-TeamProspects.php#Avalanche">Team Prospects</a> ]
[ <a href="OTHL-ProTeamSchedule.php#Avalanche">Pro Team Schedule</a> ]
[ <a href="OTHL-ProTeamStats.php#Avalanche">Pro Team Stats</a> ]
[ <a href="OTHL-ProTeamStatsVS.php#Avalanche">Pro Team Stats VS</a> ]
[ <a href="OTHL-TeamInjurySuspension.php#Avalanche">Team Injury Suspension</a> ]
[ <a href="OTHL-TeamHistory.php#Avalanche">Team History</a> ]
[ <a href="OTHL-TeamRecords.php#Avalanche">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Avalanche');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Avalanche" style="display: block;">
<h3 class="STHSTeamProspect_Prospect">Prospects - 47</h3>
Alban Eriksson(Y:2018-O:50), Alfons Malmstrom(Y:2016-O:143), Ben Thomas(Y:2014-O:98), Brendan Woods(Y:2012-O:145), Brett Berard(Y:2020-O:101), Brett Davis(Y:2017-O:176), Brett Stapley(Y:2018-O:202), Cade Webber(Y:2019-O:127), Damien Riat(Y:2016-O:173), Daniel Altshuller(Y:2012-O:102), Daniel Ljungman(Y:2020-O:141), David Tendeck(Y:2018-O:182), Dmitri Semykin(Y:2018-O:112), Dominik Lakatos(Y:2017-O:171), Dylan Holloway(Y:2020-O:17), Iaroslav Askarov(Y:2020-O:8), Jack Lafontaine(Y:2016-O:88), Jake Kucharski(Y:2018-O:213), Jakob Ragnarsson(Y:2018-O:90), James Greenway(Y:2016-O:85), Jayden Struble(Y:2019-O:65), Joshua Jacobs(Y:2014-O:59), Liam Hawel(Y:2017-O:145), Logan Stanley(Y:2016-O:14), Luke Loheit(Y:2018-O:205), Luke Reid(Y:2020-O:163), MacKenzie Entwistle(Y:2017-O:83), Marco Roy(Y:2013-O:50), Maxim Letunov(Y:2014-O:68), Merrick Madsen(Y:2013-O:174), Michael Vukojevic(Y:2019-O:84), Miska Kukkonen(Y:2018-O:174), Nate Schnarr(Y:2017-O:91), Nathan Bastian(Y:2016-O:53), Nick Abruzzese(Y:2019-O:153), Oskar Back(Y:2018-O:81), Pavel Dorofeyev(Y:2019-O:51), Reid Duke(Y:2014-O:142), Ryan Johnson(Y:2019-O:41), Ryan Zuhlsdorf(Y:2015-O:167), Santeri Virtanen(Y:2017-O:98), Thomas Bordeleau(Y:2020-O:39), Trevor Zegras(Y:2019-O:5), Tyler Benson(Y:2016-O:33), Vincent Desharnais(Y:2016-O:203), Will Borgen(Y:2015-O:134), Yevgeni Oksentyuk(Y:2020-O:132)<br />
<h3 class="STHSTeamProspect_DraftPick">Draft Picks</h3>
<b>Year 2021: </b>COL 1, COL 2, COL 3, COL 4, COL 5, COL 6, LAK 7, COL 7<br />
<b>Year 2022: </b>COL 1, COL 2, COL 3, COL 4, COL 5, COL 7<br />
<b>Year 2023: </b>COL 1, COL 2, COL 3, COL 4, COL 5, COL 6, COL 7<br />
<b>Year 2024: </b>COL 1, COL 2, COL 3, COL 4, COL 5, COL 6, COL 7<br />
<b>Year 2025: </b>COL 1, COL 2, COL 3, COL 4, COL 5, COL 6, COL 7<br />
</div>
<h1 class="TeamProspects_CHI"><a id="Blackhawks">Blackhawks</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=7">Blackhawks Page</a> ]
[ <a href="OTHL-ProTeamRoster.php#Blackhawks">Pro Team Roster</a> ]
[ <a href="OTHL-ProTeamScoring.php#Blackhawks">Pro Team Scoring</a> ]
[ <a href="OTHL-TeamFinance.php#Blackhawks">Team Finance</a> ]
[ <a href="OTHL-ProTeamPlayersInfo.php#Blackhawks">Pro Team PlayersInfo</a> ]
[ <a href="OTHL-ProTeamLines.php#Blackhawks">Pro Team Lines</a> ]
[ <a href="OTHL-TeamProspects.php#Blackhawks">Team Prospects</a> ]
[ <a href="OTHL-ProTeamSchedule.php#Blackhawks">Pro Team Schedule</a> ]
[ <a href="OTHL-ProTeamStats.php#Blackhawks">Pro Team Stats</a> ]
[ <a href="OTHL-ProTeamStatsVS.php#Blackhawks">Pro Team Stats VS</a> ]
[ <a href="OTHL-TeamInjurySuspension.php#Blackhawks">Team Injury Suspension</a> ]
[ <a href="OTHL-TeamHistory.php#Blackhawks">Team History</a> ]
[ <a href="OTHL-TeamRecords.php#Blackhawks">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Blackhawks');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Blackhawks" style="display: block;">
<h3 class="STHSTeamProspect_Prospect">Prospects - 34</h3>
Adam Edstrom(Y:2019-O:178), Aku Raty(Y:2019-O:137), Aleksi Makela(Y:2013-O:206), Alex Kannok-Leipert(Y:2018-O:169), Andrei Popov, Artur Kayumov(Y:2016-O:57), Brett McKenzie(Y:2016-O:179), Cole Coskey(Y:2019-O:215), Cristiano Digiacinto(Y:2014-O:187), Dillon Hamaliuk(Y:2019-O:58), Dustyn McFaul(Y:2018-O:170), Fredrik Olofsson(Y:2014-O:117), Gustav Olhaver(Y:2015-O:184), Hugh McGing(Y:2018-O:165), Ilya Solovyov(Y:2020-O:203), Isak Walther(Y:2019-O:201), Jack Drury(Y:2018-O:44), Jake Leschyshyn(Y:2017-O:57), Jett Woo(Y:2018-O:32), Kalle Loponen(Y:2019-O:193), Keean Washkurak(Y:2019-O:174), Logan Neaton(Y:2019-O:180), Marc Del Gaizo(Y:2019-O:126), Massimo Rizzo(Y:2019-O:214), Matthew Strome(Y:2017-O:71), Nikita Filatov, Ole Julian Bjorgvik-Holm(Y:2020-O:157), Otto Somppi(Y:2016-O:108), Riley Hughes(Y:2018-O:208), Samuel Kurker(Y:2012-O:62), Semyon Der-Arguchintsev(Y:2018-O:83), Timur Ibragimov(Y:2019-O:194), Wyatt Kalynuk(Y:2017-O:213), Wyatte Wylie(Y:2018-O:153)<br />
<h3 class="STHSTeamProspect_DraftPick">Draft Picks</h3>
<b>Year 2021: </b>CHI 1, OTT 3, CHI 3, CHI 4, STL 6, CHI 6, MTL 6<br />
<b>Year 2022: </b>CHI 1, CHI 2, WPG 2, CHI 3, CHI 4, CHI 5, BUF 5, SJS 6, CHI 6, CHI 7<br />
<b>Year 2023: </b>CHI 1, CHI 2, CHI 3, CHI 4, CHI 5, CHI 6, BOS 7<br />
<b>Year 2024: </b>CHI 1, CHI 2, CHI 3, CHI 4, CHI 5, CHI 6, CHI 7<br />
<b>Year 2025: </b>CHI 1, CHI 2, CHI 3, CHI 4, CHI 5, CHI 6, CHI 7<br />
</div>
<h1 class="TeamProspects_CLB"><a id="BlueJackets">Blue Jackets</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=9">Blue Jackets Page</a> ]
[ <a href="OTHL-ProTeamRoster.php#BlueJackets">Pro Team Roster</a> ]
[ <a href="OTHL-ProTeamScoring.php#BlueJackets">Pro Team Scoring</a> ]
[ <a href="OTHL-TeamFinance.php#BlueJackets">Team Finance</a> ]
[ <a href="OTHL-ProTeamPlayersInfo.php#BlueJackets">Pro Team PlayersInfo</a> ]
[ <a href="OTHL-ProTeamLines.php#BlueJackets">Pro Team Lines</a> ]
[ <a href="OTHL-TeamProspects.php#BlueJackets">Team Prospects</a> ]
[ <a href="OTHL-ProTeamSchedule.php#BlueJackets">Pro Team Schedule</a> ]
[ <a href="OTHL-ProTeamStats.php#BlueJackets">Pro Team Stats</a> ]
[ <a href="OTHL-ProTeamStatsVS.php#BlueJackets">Pro Team Stats VS</a> ]
[ <a href="OTHL-TeamInjurySuspension.php#BlueJackets">Team Injury Suspension</a> ]
[ <a href="OTHL-TeamHistory.php#BlueJackets">Team History</a> ]
[ <a href="OTHL-TeamRecords.php#BlueJackets">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_BlueJackets');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_BlueJackets" style="display: block;">
<h3 class="STHSTeamProspect_Prospect">Prospects - 43</h3>
Aaron Irving(Y:2014-O:127), Adam Wilsby(Y:2020-O:104), Aidan Mcdonough(Y:2019-O:168), Aliaksei Protas(Y:2019-O:76), Amir Miftakhov(Y:2020-O:149), Artyom Galimov(Y:2020-O:126), Artyom Manukyan(Y:2018-O:179), Blake Biondi(Y:2020-O:89), Bode Wilde(Y:2018-O:36), Braden Schneider(Y:2020-O:27), Carter Savoie(Y:2020-O:79), Daniil Tarasov(Y:2017-O:58), Drew Commesso(Y:2020-O:42), Dylan Garand(Y:2020-O:87), Elliot Ekefjard(Y:2020-O:211), Eric Engstrand(Y:2020-O:176), Ethan Edwards(Y:2020-O:151), Filip Lindberg(Y:2019-O:135), Giovanni Vallati(Y:2018-O:123), Jack Finley(Y:2020-O:50), Jake Neighbours(Y:2020-O:37), Jeremie Poirier(Y:2020-O:51), Jonah Gadjovich(Y:2017-O:44), Joni Jurmo(Y:2020-O:65), Kale Howarth(Y:2017-O:103), Lars Volden(Y:2011-O:129), Lauri Pajuniemi(Y:2018-O:137), Linus Oberg(Y:2020-O:155), Luka Burzan(Y:2019-O:166), Lukas Svejkovsky(Y:2020-O:105), Marat Khusnutdinov(Y:2020-O:30), Michael Prapavessis(Y:2014-O:119), Mikhail Shalagin(Y:2019-O:177), Parker Foo(Y:2017-O:107), Radel Fazleev(Y:2014-O:175), Sampo Ranta(Y:2018-O:73), Samuel Johannesson(Y:2020-O:134), Seth Barton(Y:2018-O:72), Valtteri Puustinen(Y:2019-O:182), Viktor Persson(Y:2020-O:166), Wiley Sherman(Y:2013-O:179), William Lockwood(Y:2016-O:70), Yan Kuznetsov(Y:2020-O:53)<br />
<h3 class="STHSTeamProspect_DraftPick">Draft Picks</h3>
<b>Year 2021: </b>NYR 1, VAN 1, CLB 1, OTT 1, STL 2, CAR 2, WSH 3, CLB 4, WSH 5, CLB 5, TBL 6, CLB 6, PHL 6<br />
<b>Year 2022: </b>CLB 1, CLB 3, CLB 4, CLB 5, TBL 6, CLB 6, EDM 7, CLB 7<br />
<b>Year 2023: </b>CLB 1, CLB 2, CLB 3, CLB 4, CLB 5, CLB 6, PHL 6, CLB 7<br />
<b>Year 2024: </b>CLB 1, CLB 2, CLB 3, CLB 4, CLB 5, CLB 6, CLB 7<br />
<b>Year 2025: </b>CLB 1, CLB 2, CLB 3, CLB 4, CLB 5, CLB 6, CLB 7<br />
</div>
<h1 class="TeamProspects_STL"><a id="Blues">Blues</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=25">Blues Page</a> ]
[ <a href="OTHL-ProTeamRoster.php#Blues">Pro Team Roster</a> ]
[ <a href="OTHL-ProTeamScoring.php#Blues">Pro Team Scoring</a> ]
[ <a href="OTHL-TeamFinance.php#Blues">Team Finance</a> ]
[ <a href="OTHL-ProTeamPlayersInfo.php#Blues">Pro Team PlayersInfo</a> ]
[ <a href="OTHL-ProTeamLines.php#Blues">Pro Team Lines</a> ]
[ <a href="OTHL-TeamProspects.php#Blues">Team Prospects</a> ]
[ <a href="OTHL-ProTeamSchedule.php#Blues">Pro Team Schedule</a> ]
[ <a href="OTHL-ProTeamStats.php#Blues">Pro Team Stats</a> ]
[ <a href="OTHL-ProTeamStatsVS.php#Blues">Pro Team Stats VS</a> ]
[ <a href="OTHL-TeamInjurySuspension.php#Blues">Team Injury Suspension</a> ]
[ <a href="OTHL-TeamHistory.php#Blues">Team History</a> ]
[ <a href="OTHL-TeamRecords.php#Blues">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Blues');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Blues" style="display: block;">
<h3 class="STHSTeamProspect_Prospect">Prospects - 27</h3>
Anttoni Honka(Y:2019-O:68), Daniel Bukac(Y:2017-O:202), Dominic Basse(Y:2019-O:198), Emil Heineman(Y:2020-O:43), Garin Bjorklund(Y:2020-O:175), Hendrix Lapierre(Y:2020-O:19), Henri Nikkanen(Y:2019-O:90), Hunter Skinner(Y:2019-O:157), Jack Ramsey(Y:2014-O:195), Jacob Bernard-Docker(Y:2018-O:38), Jacob Leguerrier(Y:2019-O:161), Jakub Zboril(Y:2015-O:20), Jesper Eliasson(Y:2018-O:106), Julien Gauthier(Y:2016-O:23), Justin Barron(Y:2020-O:34), Lucas Raymond(Y:2020-O:4), Mathias Laferriere(Y:2018-O:146), McKade Webster(Y:2019-O:216), Milan Kloucek(Y:2018-O:215), Nicolas Beaudin(Y:2018-O:21), Nikita Alexandrov(Y:2019-O:44), Peter Thome(Y:2016-O:163), Petteri Lindbohm(Y:2012-O:183), Peyton Krebs(Y:2019-O:12), Seth Jarvis(Y:2020-O:11), Vasili Podkolzin(Y:2019-O:6), Vasiliy Ponomarev(Y:2020-O:45)<br />
<h3 class="STHSTeamProspect_DraftPick">Draft Picks</h3>
<b>Year 2021: </b>ARI 2, STL 3, CAR 4, NYI 4, NYR 5, CAR 5, ARI 6, MIN 7, FLA 7, STL 7<br />
<b>Year 2022: </b>STL 1, STL 2, BOS 3, STL 3, BOS 4, STL 4, STL 5, STL 6<br />
<b>Year 2023: </b>STL 1, STL 2, STL 3, STL 4, STL 5, STL 6, STL 7, NJD 7<br />
<b>Year 2024: </b>STL 1, STL 2, STL 3, STL 4, STL 5, STL 6<br />
<b>Year 2025: </b>STL 1, STL 2, STL 3, STL 4, STL 5, STL 6, STL 7<br />
</div>
<h1 class="TeamProspects_BOS"><a id="Bruins">Bruins</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=3">Bruins Page</a> ]
[ <a href="OTHL-ProTeamRoster.php#Bruins">Pro Team Roster</a> ]
[ <a href="OTHL-ProTeamScoring.php#Bruins">Pro Team Scoring</a> ]
[ <a href="OTHL-TeamFinance.php#Bruins">Team Finance</a> ]
[ <a href="OTHL-ProTeamPlayersInfo.php#Bruins">Pro Team PlayersInfo</a> ]
[ <a href="OTHL-ProTeamLines.php#Bruins">Pro Team Lines</a> ]
[ <a href="OTHL-TeamProspects.php#Bruins">Team Prospects</a> ]
[ <a href="OTHL-ProTeamSchedule.php#Bruins">Pro Team Schedule</a> ]
[ <a href="OTHL-ProTeamStats.php#Bruins">Pro Team Stats</a> ]
[ <a href="OTHL-ProTeamStatsVS.php#Bruins">Pro Team Stats VS</a> ]
[ <a href="OTHL-TeamInjurySuspension.php#Bruins">Team Injury Suspension</a> ]
[ <a href="OTHL-TeamHistory.php#Bruins">Team History</a> ]
[ <a href="OTHL-TeamRecords.php#Bruins">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Bruins');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Bruins" style="display: block;">
<h3 class="STHSTeamProspect_Prospect">Prospects - 18</h3>
Brandon Saigeon(Y:2018-O:128), Daniil Chechelev(Y:2020-O:91), Dmitriy Zaitsev(Y:2016-O:202), Egor Serdyuk(Y:2019-O:159), Erik Walli-Walterholm(Y:2017-O:181), Ivan Nalimov(Y:2014-O:150), Jacob Golden(Y:2017-O:177), Jared Moe(Y:2018-O:187), Markus Phillips(Y:2017-O:96), Matthew Cairns(Y:2016-O:95), Matthew Thiessen(Y:2018-O:194), Nikolaj Krag Christensen(Y:2016-O:201), Riley Sutter(Y:2018-O:99), Robbie Stucker(Y:2017-O:200), Ryan McGregor(Y:2017-O:201), Shawn Boudrias(Y:2018-O:168), William Worge-Kreu(Y:2018-O:177), Yegor Rykov(Y:2016-O:172)<br />
<h3 class="STHSTeamProspect_DraftPick">Draft Picks</h3>
<b>Year 2021: </b>MTL 4, WPG 4, DAL 5, FLA 6, TBL 7, PHL 7<br />
<b>Year 2022: </b>COL 6, SJS 7, STL 7, PHL 7, BOS 7<br />
<b>Year 2023: </b>BOS 3<br />
<b>Year 2024: </b>BOS 1, BOS 2, BOS 3, BOS 4, BOS 5, BOS 6, BOS 7<br />
<b>Year 2025: </b>BOS 1, BOS 2, BOS 3, BOS 4, BOS 5, BOS 6, BOS 7<br />
</div>
<h1 class="TeamProspects_MTL"><a id="Canadiens">Canadiens</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=16">Canadiens Page</a> ]
[ <a href="OTHL-ProTeamRoster.php#Canadiens">Pro Team Roster</a> ]
[ <a href="OTHL-ProTeamScoring.php#Canadiens">Pro Team Scoring</a> ]
[ <a href="OTHL-TeamFinance.php#Canadiens">Team Finance</a> ]
[ <a href="OTHL-ProTeamPlayersInfo.php#Canadiens">Pro Team PlayersInfo</a> ]
[ <a href="OTHL-ProTeamLines.php#Canadiens">Pro Team Lines</a> ]
[ <a href="OTHL-TeamProspects.php#Canadiens">Team Prospects</a> ]
[ <a href="OTHL-ProTeamSchedule.php#Canadiens">Pro Team Schedule</a> ]
[ <a href="OTHL-ProTeamStats.php#Canadiens">Pro Team Stats</a> ]
[ <a href="OTHL-ProTeamStatsVS.php#Canadiens">Pro Team Stats VS</a> ]
[ <a href="OTHL-TeamInjurySuspension.php#Canadiens">Team Injury Suspension</a> ]
[ <a href="OTHL-TeamHistory.php#Canadiens">Team History</a> ]
[ <a href="OTHL-TeamRecords.php#Canadiens">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Canadiens');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Canadiens" style="display: block;">
<h3 class="STHSTeamProspect_Prospect">Prospects - 11</h3>
Cameron Crotty(Y:2017-O:101), Chase McLane(Y:2020-O:215), Eric Roy(Y:2013-O:102), Felix Sandstrom(Y:2015-O:40), Grigori Denisenko(Y:2018-O:17), Jake Sanderson(Y:2020-O:9), Moritz Seider(Y:2019-O:13), Patrick Harper(Y:2016-O:126), Tristen Robins(Y:2020-O:40), Tyler Soy(Y:2016-O:127), Xavier Bernard(Y:2018-O:100)<br />
<h3 class="STHSTeamProspect_DraftPick">Draft Picks</h3>
<b>Year 2021: </b>MTL 1, DAL 1, TBL 1, ANH 1, MTL 2<br />
<b>Year 2022: </b>MTL 1, MTL 2, MTL 5, MTL 6, PHL 6, MTL 7<br />
<b>Year 2023: </b>MTL 1, MTL 2, MTL 3, MTL 4, MTL 5, MTL 6, MTL 7<br />
<b>Year 2024: </b>MTL 1, MTL 2, MTL 3, MTL 4, MTL 5, MTL 6, MTL 7<br />
<b>Year 2025: </b>MTL 1, MTL 2, MTL 3, MTL 4, MTL 5, MTL 6, MTL 7<br />
</div>
<h1 class="TeamProspects_VAN"><a id="Canucks">Canucks</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=29">Canucks Page</a> ]
[ <a href="OTHL-ProTeamRoster.php#Canucks">Pro Team Roster</a> ]
[ <a href="OTHL-ProTeamScoring.php#Canucks">Pro Team Scoring</a> ]
[ <a href="OTHL-TeamFinance.php#Canucks">Team Finance</a> ]
[ <a href="OTHL-ProTeamPlayersInfo.php#Canucks">Pro Team PlayersInfo</a> ]
[ <a href="OTHL-ProTeamLines.php#Canucks">Pro Team Lines</a> ]
[ <a href="OTHL-TeamProspects.php#Canucks">Team Prospects</a> ]
[ <a href="OTHL-ProTeamSchedule.php#Canucks">Pro Team Schedule</a> ]
[ <a href="OTHL-ProTeamStats.php#Canucks">Pro Team Stats</a> ]
[ <a href="OTHL-ProTeamStatsVS.php#Canucks">Pro Team Stats VS</a> ]
[ <a href="OTHL-TeamInjurySuspension.php#Canucks">Team Injury Suspension</a> ]
[ <a href="OTHL-TeamHistory.php#Canucks">Team History</a> ]
[ <a href="OTHL-TeamRecords.php#Canucks">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Canucks');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Canucks" style="display: block;">
<h3 class="STHSTeamProspect_Prospect">Prospects - 37</h3>
Arsen Khisamutdinov(Y:2019-O:184), Benjamin Baumgartner(Y:2020-O:172), C.J. Suess(Y:2014-O:155), Clayton Phillips(Y:2017-O:125), Declan Chisholm(Y:2018-O:156), Emil Galimov(Y:2013-O:204), Harrison Blaisdell(Y:2019-O:91), Igor Bobkov(Y:2009-O:63), Jacob McGrew(Y:2017-O:184), Jakub Lauko(Y:2018-O:63), Jesper Lindgren(Y:2015-O:87), Joel Daccord(Y:2015-O:182), John Dahlstrom(Y:2015-O:204), Jonathan Kovacevic(Y:2017-O:70), Linus Nassen(Y:2016-O:98), Magnus Chrona(Y:2018-O:172), Matteo Costantini(Y:2020-O:161), Mattias Norlinder(Y:2019-O:77), Max Gortz(Y:2012-O:170), Maxim Shalunov(Y:2011-O:122), Michael Karow(Y:2017-O:156), Michael Pezzetta(Y:2016-O:192), Mitchell Hoelscher(Y:2018-O:178), Nathan Smith(Y:2018-O:109), Nick Pastujov(Y:2016-O:174), Oliver Tarnstrom(Y:2020-O:121), Owen Lindmark(Y:2019-O:136), Pavel Kraskovsky(Y:2014-O:128), Riley Tufte(Y:2016-O:26), Roddy Ross(Y:2019-O:156), Ryder Rolston(Y:2020-O:162), Spencer Stastney(Y:2018-O:136), Troy Josephs(Y:2013-O:209), Tuukka Tieksola(Y:2019-O:106), Tyler Nanne(Y:2014-O:185), Victor Soderstrom(Y:2019-O:18), Zachary Emond(Y:2018-O:186)<br />
<h3 class="STHSTeamProspect_DraftPick">Draft Picks</h3>
<b>Year 2021: </b>FLA 4, ANH 5, CAR 6<br />
<b>Year 2022: </b>VAN 1, VAN 2, BUF 4, WPG 4, VAN 4, FLA 5, VAN 6, VAN 7<br />
<b>Year 2023: </b>VAN 1, VAN 2, VAN 3, VAN 4, VAN 5, VAN 6, VAN 7<br />
<b>Year 2024: </b>VAN 1, VAN 2, VAN 3, VAN 4, VAN 5, VAN 6, VAN 7<br />
<b>Year 2025: </b>VAN 1, VAN 2, VAN 3, VAN 4, VAN 5, VAN 6, VAN 7<br />
</div>
<h1 class="TeamProspects_WSH"><a id="Capitals">Capitals</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=30">Capitals Page</a> ]
[ <a href="OTHL-ProTeamRoster.php#Capitals">Pro Team Roster</a> ]
[ <a href="OTHL-ProTeamScoring.php#Capitals">Pro Team Scoring</a> ]
[ <a href="OTHL-TeamFinance.php#Capitals">Team Finance</a> ]
[ <a href="OTHL-ProTeamPlayersInfo.php#Capitals">Pro Team PlayersInfo</a> ]
[ <a href="OTHL-ProTeamLines.php#Capitals">Pro Team Lines</a> ]
[ <a href="OTHL-TeamProspects.php#Capitals">Team Prospects</a> ]
[ <a href="OTHL-ProTeamSchedule.php#Capitals">Pro Team Schedule</a> ]
[ <a href="OTHL-ProTeamStats.php#Capitals">Pro Team Stats</a> ]
[ <a href="OTHL-ProTeamStatsVS.php#Capitals">Pro Team Stats VS</a> ]
[ <a href="OTHL-TeamInjurySuspension.php#Capitals">Team Injury Suspension</a> ]
[ <a href="OTHL-TeamHistory.php#Capitals">Team History</a> ]
[ <a href="OTHL-TeamRecords.php#Capitals">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Capitals');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Capitals" style="display: block;">
<h3 class="STHSTeamProspect_Prospect">Prospects - 25</h3>
Alex Newhook(Y:2019-O:14), Alexander Dergachyov(Y:2015-O:55), Andrei Mironov(Y:2015-O:92), Arthur Kaliyev(Y:2019-O:25), Blade Jenkins(Y:2018-O:114), Carter Berger(Y:2019-O:128), Dmitri Kugryshev, Drake Rymsha(Y:2017-O:92), Filip Cederqvist(Y:2019-O:115), Frederik Tiffels(Y:2015-O:171), Helge Grans(Y:2020-O:25), Henry Thrun(Y:2019-O:105), Jacob Moverare(Y:2016-O:90), Jakob Pelletier(Y:2019-O:28), Jamieson Rees(Y:2019-O:47), Jaret Anderson-Dolan(Y:2017-O:39), Mattias Lindstrom(Y:2009-O:91), Noah Cates(Y:2017-O:118), Reilly Webb(Y:2017-O:190), Riley Damiani(Y:2018-O:118), Ronnie Attard(Y:2019-O:72), Samuel Fagemo(Y:2019-O:36), Tyce Thompson(Y:2019-O:116), Tyler Madden(Y:2018-O:66), Viktor Lodin(Y:2019-O:121)<br />
<h3 class="STHSTeamProspect_DraftPick">Draft Picks</h3>
<b>Year 2021: </b>ARI 1, WSH 2, ANH 4, TBL 5, CGY 6<br />
<b>Year 2022: </b>WSH 1, WSH 2, WSH 4, ANH 4, WSH 6<br />
<b>Year 2023: </b>WSH 1, WSH 2, WSH 3, WSH 4, WSH 5, WSH 6, CHI 7, WSH 7<br />
<b>Year 2024: </b>WSH 1, WSH 2, WSH 3, WSH 4, WSH 5, WSH 6, WSH 7<br />
<b>Year 2025: </b>WSH 1, WSH 2, WSH 3, WSH 4, WSH 5, WSH 6, WSH 7<br />
</div>
<h1 class="TeamProspects_ARI"><a id="Coyotes">Coyotes</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=23">Coyotes Page</a> ]
[ <a href="OTHL-ProTeamRoster.php#Coyotes">Pro Team Roster</a> ]
[ <a href="OTHL-ProTeamScoring.php#Coyotes">Pro Team Scoring</a> ]
[ <a href="OTHL-TeamFinance.php#Coyotes">Team Finance</a> ]
[ <a href="OTHL-ProTeamPlayersInfo.php#Coyotes">Pro Team PlayersInfo</a> ]
[ <a href="OTHL-ProTeamLines.php#Coyotes">Pro Team Lines</a> ]
[ <a href="OTHL-TeamProspects.php#Coyotes">Team Prospects</a> ]
[ <a href="OTHL-ProTeamSchedule.php#Coyotes">Pro Team Schedule</a> ]
[ <a href="OTHL-ProTeamStats.php#Coyotes">Pro Team Stats</a> ]
[ <a href="OTHL-ProTeamStatsVS.php#Coyotes">Pro Team Stats VS</a> ]
[ <a href="OTHL-TeamInjurySuspension.php#Coyotes">Team Injury Suspension</a> ]
[ <a href="OTHL-TeamHistory.php#Coyotes">Team History</a> ]
[ <a href="OTHL-TeamRecords.php#Coyotes">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Coyotes');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Coyotes" style="display: block;">
<h3 class="STHSTeamProspect_Prospect">Prospects - 30</h3>
Alexandr Darin(Y:2019-O:112), Cam York(Y:2019-O:19), Colby Ambrosio(Y:2020-O:114), Dean Stewart(Y:2016-O:198), Eamon McAdam(Y:2013-O:83), Elmer Soderblom(Y:2019-O:155), Erik Kallgren(Y:2015-O:163), Filip Larsson(Y:2016-O:191), Filip Westerlund(Y:2017-O:49), Ivan Prosvetov(Y:2018-O:154), Jacob Peterson(Y:2017-O:149), Joey Keane(Y:2018-O:107), Jonathan Dugan(Y:2017-O:152), Kirill Kaprizov(Y:2015-O:121), Leevi Merilainen(Y:2020-O:61), Linus Soderstrom(Y:2014-O:107), Lukas Rousek(Y:2019-O:183), Maksim Sushko(Y:2017-O:140), Matthew Hellickson(Y:2017-O:216), Mikael Pyyhtia(Y:2020-O:111), Nico Gross(Y:2018-O:92), Patrik Siikanen(Y:2018-O:207), Peter Diliberatore(Y:2018-O:191), Philippe Desrosiers(Y:2013-O:68), Roope Laavainen(Y:2017-O:142), Ruslan Iskhakov(Y:2018-O:49), Samuel Sjolund(Y:2019-O:143), Sean Durzi(Y:2018-O:61), Trenton Bourque(Y:2017-O:204), Zachary Uens(Y:2020-O:148)<br />
<h3 class="STHSTeamProspect_DraftPick">Draft Picks</h3>
<b>Year 2021: </b>VGK 5, STL 5, BUF 6, MTL 7, VGK 7<br />
<b>Year 2022: </b>ARI 1, ARI 2, ARI 3, ARI 4, ARI 5, ARI 6, ARI 7<br />
<b>Year 2023: </b>ARI 1, ARI 2, ARI 3, ARI 4, ARI 5, ARI 6, ARI 7<br />
<b>Year 2024: </b>ARI 1, ARI 2, ARI 3, ARI 4, ARI 5, ARI 6, ARI 7<br />
<b>Year 2025: </b>ARI 1, ARI 2, ARI 3, ARI 4, ARI 5, ARI 6, ARI 7<br />
</div>
<h1 class="TeamProspects_NJD"><a id="Devils">Devils</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=18">Devils Page</a> ]
[ <a href="OTHL-ProTeamRoster.php#Devils">Pro Team Roster</a> ]
[ <a href="OTHL-ProTeamScoring.php#Devils">Pro Team Scoring</a> ]
[ <a href="OTHL-TeamFinance.php#Devils">Team Finance</a> ]
[ <a href="OTHL-ProTeamPlayersInfo.php#Devils">Pro Team PlayersInfo</a> ]
[ <a href="OTHL-ProTeamLines.php#Devils">Pro Team Lines</a> ]
[ <a href="OTHL-TeamProspects.php#Devils">Team Prospects</a> ]
[ <a href="OTHL-ProTeamSchedule.php#Devils">Pro Team Schedule</a> ]
[ <a href="OTHL-ProTeamStats.php#Devils">Pro Team Stats</a> ]
[ <a href="OTHL-ProTeamStatsVS.php#Devils">Pro Team Stats VS</a> ]
[ <a href="OTHL-TeamInjurySuspension.php#Devils">Team Injury Suspension</a> ]
[ <a href="OTHL-TeamHistory.php#Devils">Team History</a> ]
[ <a href="OTHL-TeamRecords.php#Devils">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Devils');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Devils" style="display: block;">
<h3 class="STHSTeamProspect_Prospect">Prospects - 27</h3>
Adam Ginning(Y:2018-O:45), Albin Sundsvik(Y:2020-O:196), Alexander Holtz(Y:2020-O:10), Alexander Ljungkrantz(Y:2020-O:120), Cole Schwindt(Y:2019-O:122), Connor Hall(Y:2016-O:75), Domenick Fensore(Y:2019-O:107), Filip Sveningsson(Y:2017-O:174), Gianni Fairbrother(Y:2019-O:86), Jan Jenik(Y:2018-O:67), Jay O'Brien(Y:2018-O:30), Jesper Sellgren(Y:2018-O:176), Kirill Marchenko(Y:2018-O:55), Linus Lindstrand Kronholm(Y:2018-O:138), Mads Sogaard(Y:2019-O:46), Mark Kastelic(Y:2019-O:139), Mason Lohrei(Y:2020-O:72), Matthew Boldy(Y:2019-O:15), Nikita Okhotyuk(Y:2019-O:79), Quinn Schmiemann(Y:2019-O:186), Ryan Lohin(Y:2016-O:200), Ryan O'Reilly(Y:2018-O:116), Ryan Shea(Y:2015-O:154), Sam Colangelo(Y:2020-O:41), Tom Nilsson(Y:2011-O:92), Tomas Vomacka(Y:2017-O:154), Victor Berglund(Y:2017-O:182)<br />
<h3 class="STHSTeamProspect_DraftPick">Draft Picks</h3>
<b>Year 2021: </b>NJD 1, NJD 3, NJD 4, NJD 5, DAL 6, NJD 7<br />
<b>Year 2022: </b>NJD 1, NJD 2, NJD 3, NJD 4, WSH 5, NJD 6, NJD 7<br />
<b>Year 2023: </b>NJD 1, NJD 2, NJD 3, NJD 4, NJD 5, NJD 6<br />
<b>Year 2024: </b>NJD 1, NJD 2, NJD 3, NJD 4, NJD 5, NJD 6, NJD 7<br />
<b>Year 2025: </b>NJD 1, NJD 2, NJD 3, NJD 4, NJD 5, NJD 6, NJD 7<br />
</div>
<h1 class="TeamProspects_ANH"><a id="Ducks">Ducks</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=1">Ducks Page</a> ]
[ <a href="OTHL-ProTeamRoster.php#Ducks">Pro Team Roster</a> ]
[ <a href="OTHL-ProTeamScoring.php#Ducks">Pro Team Scoring</a> ]
[ <a href="OTHL-TeamFinance.php#Ducks">Team Finance</a> ]
[ <a href="OTHL-ProTeamPlayersInfo.php#Ducks">Pro Team PlayersInfo</a> ]
[ <a href="OTHL-ProTeamLines.php#Ducks">Pro Team Lines</a> ]
[ <a href="OTHL-TeamProspects.php#Ducks">Team Prospects</a> ]
[ <a href="OTHL-ProTeamSchedule.php#Ducks">Pro Team Schedule</a> ]
[ <a href="OTHL-ProTeamStats.php#Ducks">Pro Team Stats</a> ]
[ <a href="OTHL-ProTeamStatsVS.php#Ducks">Pro Team Stats VS</a> ]
[ <a href="OTHL-TeamInjurySuspension.php#Ducks">Team Injury Suspension</a> ]
[ <a href="OTHL-TeamHistory.php#Ducks">Team History</a> ]
[ <a href="OTHL-TeamRecords.php#Ducks">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Ducks');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Ducks" style="display: block;">
<h3 class="STHSTeamProspect_Prospect">Prospects - 31</h3>
Adam Ruzicka(Y:2017-O:93), Aidan Dudas(Y:2018-O:98), Alexei Lipanov(Y:2017-O:62), Anthony Salinitri(Y:2016-O:189), Brandon Hickey(Y:2014-O:58), Cliff Pu(Y:2016-O:68), Eetu Tuulola(Y:2016-O:99), Emil Andrae(Y:2020-O:64), Filip Kral(Y:2018-O:110), Jacob Perreault(Y:2020-O:23), Jesse Gabrielle(Y:2015-O:106), Josh Wesley(Y:2014-O:103), Julius Nattinen(Y:2015-O:71), Lane Zablocki(Y:2017-O:81), Luke Green(Y:2016-O:69), Martin Pospisil(Y:2018-O:108), Mason McDonald(Y:2014-O:35), Mattias Emilio Pettersen(Y:2018-O:145), Matvey Guskov(Y:2019-O:109), Mavrik Bourque(Y:2020-O:22), Mikko Kokkonen(Y:2019-O:73), Milos Roman(Y:2018-O:96), Noel Gunler(Y:2020-O:35), Olle Lycksell(Y:2017-O:159), Robin Salo(Y:2017-O:61), Samuel Poulin(Y:2019-O:24), Scott Perunovich(Y:2018-O:43), Shamil Shmakov(Y:2018-O:197), Vasily Glotov(Y:2016-O:178), Veeti Miettinen(Y:2020-O:106), William Dufour(Y:2020-O:146)<br />
<h3 class="STHSTeamProspect_DraftPick">Draft Picks</h3>
<b>Year 2021: </b>WSH 1, DAL 2, VAN 4, BUF 7, ANH 7<br />
<b>Year 2022: </b>ANH 1, BOS 2, BOS 5, TBL 5, ANH 5, DAL 6, BOS 6, ANH 6, WSH 7<br />
<b>Year 2023: </b>ANH 1, ANH 2, ANH 3, ANH 4, ANH 5, ANH 6, ANH 7<br />
<b>Year 2024: </b>ANH 1, ANH 2, ANH 3, ANH 4, ANH 5, ANH 6, ANH 7<br />
<b>Year 2025: </b>ANH 1, ANH 2, ANH 3, ANH 4, ANH 5, ANH 6, ANH 7<br />
</div>
<h1 class="TeamProspects_CGY"><a id="Flames">Flames</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=5">Flames Page</a> ]
[ <a href="OTHL-ProTeamRoster.php#Flames">Pro Team Roster</a> ]
[ <a href="OTHL-ProTeamScoring.php#Flames">Pro Team Scoring</a> ]
[ <a href="OTHL-TeamFinance.php#Flames">Team Finance</a> ]
[ <a href="OTHL-ProTeamPlayersInfo.php#Flames">Pro Team PlayersInfo</a> ]
[ <a href="OTHL-ProTeamLines.php#Flames">Pro Team Lines</a> ]
[ <a href="OTHL-TeamProspects.php#Flames">Team Prospects</a> ]
[ <a href="OTHL-ProTeamSchedule.php#Flames">Pro Team Schedule</a> ]
[ <a href="OTHL-ProTeamStats.php#Flames">Pro Team Stats</a> ]
[ <a href="OTHL-ProTeamStatsVS.php#Flames">Pro Team Stats VS</a> ]
[ <a href="OTHL-TeamInjurySuspension.php#Flames">Team Injury Suspension</a> ]
[ <a href="OTHL-TeamHistory.php#Flames">Team History</a> ]
[ <a href="OTHL-TeamRecords.php#Flames">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Flames');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Flames" style="display: block;">
<h3 class="STHSTeamProspect_Prospect">Prospects - 35</h3>
Alex Dostie(Y:2016-O:146), Alex Green(Y:2018-O:150), Arseny Gritsyuk(Y:2019-O:131), Artemi Kniazev(Y:2019-O:59), Benjamin Gallacher(Y:2010-O:127), Benton Maass(Y:2017-O:191), Cole Moberg(Y:2019-O:170), Damian Giroux(Y:2018-O:149), Eetu Makiniemi(Y:2017-O:134), Evan Cormier(Y:2016-O:142), Jack Badini(Y:2017-O:119), Jacob Cederholm(Y:2016-O:134), Jake Pivonka(Y:2018-O:119), Jason Robertson(Y:2017-O:37), Jordan Harris(Y:2018-O:101), Kevin Bahl(Y:2018-O:57), Kody Clark(Y:2018-O:48), Liam Coughlin(Y:2014-O:159), Linus Karlsson(Y:2018-O:84), Lukas Dostal(Y:2018-O:80), Martins Dzierkals(Y:2015-O:100), Nick Robertson(Y:2019-O:39), Oskari Laaksonen(Y:2017-O:121), Otto Kivenmaki(Y:2018-O:203), Patrick Kudla(Y:2016-O:194), Raphael Lavoie(Y:2019-O:32), Ryan Francis(Y:2020-O:128), Ryan Jones(Y:2016-O:186), Ryan Merkley(Y:2018-O:26), Shane Eiserman(Y:2014-O:123), Tomas Mazura(Y:2019-O:167), Trent Miner(Y:2019-O:130), Ukko-Pekka Luukkonen(Y:2017-O:45), Vladimir Bobylev(Y:2016-O:116), Wyatt Kaiser(Y:2020-O:102)<br />
<h3 class="STHSTeamProspect_DraftPick">Draft Picks</h3>
<b>Year 2021: </b>CGY 1, STL 1, NYR 2, CGY 2, NYR 6, BOS 6, BOS 7, CHI 7, CGY 7<br />
<b>Year 2022: </b>CGY 1, CGY 2, CGY 4, CGY 5, CGY 6, CGY 7<br />
<b>Year 2023: </b>CGY 1, CGY 2, CGY 3, CGY 4, CAR 5, CGY 5, CGY 6, CGY 7<br />
<b>Year 2024: </b>CGY 1, CGY 2, CGY 3, CGY 4, CGY 5, CGY 6, CGY 7<br />
<b>Year 2025: </b>CGY 1, CGY 2, CGY 3, CGY 4, CGY 5, CGY 6, CGY 7<br />
</div>
<h1 class="TeamProspects_PHL"><a id="Flyers">Flyers</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=22">Flyers Page</a> ]
[ <a href="OTHL-ProTeamRoster.php#Flyers">Pro Team Roster</a> ]
[ <a href="OTHL-ProTeamScoring.php#Flyers">Pro Team Scoring</a> ]
[ <a href="OTHL-TeamFinance.php#Flyers">Team Finance</a> ]
[ <a href="OTHL-ProTeamPlayersInfo.php#Flyers">Pro Team PlayersInfo</a> ]
[ <a href="OTHL-ProTeamLines.php#Flyers">Pro Team Lines</a> ]
[ <a href="OTHL-TeamProspects.php#Flyers">Team Prospects</a> ]
[ <a href="OTHL-ProTeamSchedule.php#Flyers">Pro Team Schedule</a> ]
[ <a href="OTHL-ProTeamStats.php#Flyers">Pro Team Stats</a> ]
[ <a href="OTHL-ProTeamStatsVS.php#Flyers">Pro Team Stats VS</a> ]
[ <a href="OTHL-TeamInjurySuspension.php#Flyers">Team Injury Suspension</a> ]
[ <a href="OTHL-TeamHistory.php#Flyers">Team History</a> ]
[ <a href="OTHL-TeamRecords.php#Flyers">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Flyers');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Flyers" style="display: block;">
<h3 class="STHSTeamProspect_Prospect">Prospects - 36</h3>
Andrei Svetlakov(Y:2017-O:146), Arvid Costmar(Y:2019-O:208), Axel Bergkvist(Y:2019-O:203), Ben Brinkman(Y:2019-O:196), Carson Meyer(Y:2017-O:194), Chad Yetman(Y:2020-O:191), Cole Reinhardt(Y:2020-O:192), Danil Savunov(Y:2019-O:210), Denis Smirnov(Y:2017-O:120), Greg Meireles(Y:2019-O:205), Ivan Lodnia(Y:2017-O:82), Jakub Konecny(Y:2020-O:200), Jeremy Michel(Y:2019-O:209), John Fusco(Y:2020-O:214), Juuso Parssinen(Y:2019-O:190), Kevin Wall(Y:2019-O:191), Kristian Roykas-Marthinsen(Y:2017-O:195), Liam Kirk(Y:2018-O:76), Marco Rossi(Y:2020-O:5), Matthew Kessel(Y:2020-O:193), Maxence Guenette(Y:2019-O:195), Maxim Denezhkin(Y:2019-O:200), Maxim Marushev(Y:2020-O:206), Nick Capone(Y:2020-O:195), Nick Swaney(Y:2017-O:172), Nikita Nesterenko(Y:2019-O:192), Olle Eriksson-Ek(Y:2017-O:130), Radim Salda(Y:2018-O:190), Ryan Tverberg(Y:2020-O:216), Sam Hentges(Y:2018-O:198), Tim Berni(Y:2018-O:175), Ty Taylor(Y:2018-O:212), Tyler Angle(Y:2019-O:204), Tyler Wall(Y:2016-O:164), Tyrel Bauer(Y:2020-O:197), Vadim Zherenko(Y:2019-O:199)<br />
<h3 class="STHSTeamProspect_DraftPick">Draft Picks</h3>
<b>Year 2021: </b><br />
<b>Year 2022: </b>PHL 1<br />
<b>Year 2023: </b>PHL 1, PHL 2, TBL 7, PHL 7, EDM 7, FLA 7, OTT 7<br />
<b>Year 2024: </b>PHL 1, PHL 2, PHL 3, PHL 4, PHL 5, PHL 6, STL 7, PHL 7, SJS 7<br />
<b>Year 2025: </b>PHL 1, PHL 2, PHL 3, PHL 4, PHL 5, PHL 6, PHL 7<br />
</div>
<h1 class="TeamProspects_VGK"><a id="GoldenKnights">Golden Knights</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=31">Golden Knights Page</a> ]
[ <a href="OTHL-ProTeamRoster.php#GoldenKnights">Pro Team Roster</a> ]
[ <a href="OTHL-ProTeamScoring.php#GoldenKnights">Pro Team Scoring</a> ]
[ <a href="OTHL-TeamFinance.php#GoldenKnights">Team Finance</a> ]
[ <a href="OTHL-ProTeamPlayersInfo.php#GoldenKnights">Pro Team PlayersInfo</a> ]
[ <a href="OTHL-ProTeamLines.php#GoldenKnights">Pro Team Lines</a> ]
[ <a href="OTHL-TeamProspects.php#GoldenKnights">Team Prospects</a> ]
[ <a href="OTHL-ProTeamSchedule.php#GoldenKnights">Pro Team Schedule</a> ]
[ <a href="OTHL-ProTeamStats.php#GoldenKnights">Pro Team Stats</a> ]
[ <a href="OTHL-ProTeamStatsVS.php#GoldenKnights">Pro Team Stats VS</a> ]
[ <a href="OTHL-TeamInjurySuspension.php#GoldenKnights">Team Injury Suspension</a> ]
[ <a href="OTHL-TeamHistory.php#GoldenKnights">Team History</a> ]
[ <a href="OTHL-TeamRecords.php#GoldenKnights">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_GoldenKnights');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_GoldenKnights" style="display: block;">
<h3 class="STHSTeamProspect_Prospect">Prospects - 50</h3>
Adam Beckman(Y:2019-O:78), Aleksi Heponiemi(Y:2017-O:43), Anton Lundell(Y:2020-O:13), Arnaud Durandeau(Y:2017-O:164), Axel Andersson(Y:2018-O:64), Brandon Kruse(Y:2018-O:155), Brayden Tracey(Y:2019-O:30), Calen Addison(Y:2018-O:47), Cam Hillis(Y:2018-O:70), Cole Guttman(Y:2017-O:178), Cole Hults(Y:2017-O:188), Connor Zary(Y:2020-O:20), David Noel(Y:2017-O:139), Dawson Barteaux(Y:2018-O:163), Dawson Mercer(Y:2020-O:15), Demetrios Koumontzis(Y:2018-O:117), Ethan Phillips(Y:2019-O:95), Filip Johansson(Y:2018-O:39), Gavin Hain(Y:2018-O:183), Graeme Clarke(Y:2019-O:81), Jamie Drysdale(Y:2020-O:7), Jordan Spence(Y:2019-O:88), Josh Brook(Y:2017-O:64), Justin Almeida(Y:2018-O:124), Justin Schutz(Y:2018-O:180), K'Andre Miller(Y:2018-O:24), Kyle Olson(Y:2017-O:115), Logan Hutsko(Y:2018-O:102), Luke Henman(Y:2018-O:105), Luke Prokop(Y:2020-O:97), Mason Millman(Y:2019-O:102), Mikhail Abramov(Y:2019-O:104), Nicholas Porco(Y:2019-O:123), Nick Henry(Y:2017-O:95), Nicklaus Perbix(Y:2017-O:198), Nils Lundkvist(Y:2018-O:28), Pierre-Olivier Joseph(Y:2017-O:31), Quinn Olson(Y:2019-O:92), Reece Newkirk(Y:2019-O:124), Riley Stotts(Y:2018-O:95), Ryan O'Rourke(Y:2020-O:38), Samuel Bolduc(Y:2019-O:61), Samuel Houde(Y:2018-O:160), Sasha Mutala(Y:2019-O:119), Shane Bowers(Y:2017-O:35), Tobias Geisser(Y:2017-O:157), Tyler Parsons(Y:2016-O:46), Tyler Tucker(Y:2018-O:200), Vitali Kravtsov(Y:2018-O:11), Zachary Gallant(Y:2017-O:89)<br />
<h3 class="STHSTeamProspect_DraftPick">Draft Picks</h3>
<b>Year 2021: </b>SJS 1, VGK 1, CLB 2, LAK 3, VGK 3, CLB 3, VGK 4, NYI 7<br />
<b>Year 2022: </b>VGK 1, VGK 2, CLB 2, VGK 3, ANH 3, DET 3, VGK 4<br />
<b>Year 2023: </b>VGK 1, VGK 2, VGK 3, VGK 4, VGK 5, VGK 6, VGK 7<br />
<b>Year 2024: </b>VGK 1, VGK 2, VGK 3, VGK 4, VGK 5, VGK 6, VGK 7<br />
<b>Year 2025: </b>VGK 1, VGK 2, VGK 3, VGK 4, VGK 5, VGK 6, VGK 7<br />
</div>
<h1 class="TeamProspects_CAR"><a id="Hurricanes">Hurricanes</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=6">Hurricanes Page</a> ]
[ <a href="OTHL-ProTeamRoster.php#Hurricanes">Pro Team Roster</a> ]
[ <a href="OTHL-ProTeamScoring.php#Hurricanes">Pro Team Scoring</a> ]
[ <a href="OTHL-TeamFinance.php#Hurricanes">Team Finance</a> ]
[ <a href="OTHL-ProTeamPlayersInfo.php#Hurricanes">Pro Team PlayersInfo</a> ]
[ <a href="OTHL-ProTeamLines.php#Hurricanes">Pro Team Lines</a> ]
[ <a href="OTHL-TeamProspects.php#Hurricanes">Team Prospects</a> ]
[ <a href="OTHL-ProTeamSchedule.php#Hurricanes">Pro Team Schedule</a> ]
[ <a href="OTHL-ProTeamStats.php#Hurricanes">Pro Team Stats</a> ]
[ <a href="OTHL-ProTeamStatsVS.php#Hurricanes">Pro Team Stats VS</a> ]
[ <a href="OTHL-TeamInjurySuspension.php#Hurricanes">Team Injury Suspension</a> ]
[ <a href="OTHL-TeamHistory.php#Hurricanes">Team History</a> ]
[ <a href="OTHL-TeamRecords.php#Hurricanes">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Hurricanes');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Hurricanes" style="display: block;">
<h3 class="STHSTeamProspect_Prospect">Prospects - 52</h3>
Albert Johansson(Y:2019-O:69), Alec Regula(Y:2018-O:75), Alex Beaucage(Y:2019-O:67), Alexander Alexeyev(Y:2018-O:37), Alexander Khovanov(Y:2018-O:68), Alexander Pashin(Y:2020-O:109), Andrei Altybarmakyan(Y:2017-O:75), Angus Crookshank(Y:2018-O:134), Anton Johannesson(Y:2020-O:116), Antonio Stranges(Y:2020-O:96), Blake Murray(Y:2019-O:150), Calle Clang(Y:2020-O:82), Cole Koepke(Y:2018-O:166), Daemon Hunt(Y:2020-O:75), Daniil Misyul(Y:2019-O:74), Danil Gushchin(Y:2020-O:63), Danila Zhuravlyov(Y:2018-O:122), Devon Levi(Y:2020-O:127), Dominik Bokk(Y:2018-O:23), Donovan Sebrango(Y:2020-O:85), Eamon Powell(Y:2020-O:110), Eemil Viro(Y:2020-O:68), Egor Afanasyev(Y:2019-O:42), Hugo Alnefelt(Y:2019-O:98), Jake Wise(Y:2018-O:54), Jakub Galvas(Y:2017-O:179), Jan Bednar(Y:2020-O:83), Jesse Ylonen(Y:2018-O:41), Jonatan Berggren(Y:2018-O:22), Jonny Tychonick(Y:2018-O:53), Kaedan Korczak(Y:2019-O:53), Kasper Simontaival(Y:2020-O:58), Matej Pekar(Y:2018-O:82), Mattias Samuelsson(Y:2018-O:40), Maxim Cajkovic(Y:2019-O:66), Michal Teply(Y:2019-O:97), Nikolai Kovalenko(Y:2018-O:139), Patrik Puistola(Y:2019-O:56), Philipp Kurashev(Y:2018-O:79), Quinton Byfield(Y:2020-O:2), Robert Mastrosimone(Y:2019-O:50), Roni Hirvonen(Y:2020-O:54), Sean Farrell(Y:2020-O:88), Semyon Chystyakov(Y:2019-O:132), Ty Emberson(Y:2018-O:91), Ty Smilanic(Y:2020-O:69), Ty Smith(Y:2018-O:20), Tyler Tullio(Y:2020-O:95), Vladislav Firstov(Y:2019-O:45), Wade Allison(Y:2016-O:55), Yegor Chinakhov(Y:2020-O:21), Yegor Spiridonov(Y:2019-O:99)<br />
<h3 class="STHSTeamProspect_DraftPick">Draft Picks</h3>
<b>Year 2021: </b>CAR 1, LAK 2, BOS 4, DET 4, CGY 4, CGY 5, CHI 5, ARI 5<br />
<b>Year 2022: </b>CAR 1, CAR 2, DAL 2, PHL 2, TBL 2, PHL 3, MTL 3, VAN 3, CGY 3, TBL 4, NJD 5, VGK 5, WPG 5, VAN 5, EDM 6, VGK 7, ANH 7<br />
<b>Year 2023: </b>CAR 1, BOS 1, DAL 1, TBL 1, CAR 2, BOS 2, TBL 2, CAR 3, TBL 3, PHL 3, CAR 4, TBL 4, BOS 4, TBL 5, CAR 6, TBL 6, BOS 6, PIT 6, CAR 7<br />
<b>Year 2024: </b>CAR 1, CAR 2, CAR 3, CAR 4, TBL 4, CAR 5, CAR 6, CAR 7<br />
<b>Year 2025: </b>CAR 1, CAR 2, CAR 3, CAR 4, CAR 5, CAR 6, CAR 7<br />
</div>
<h1 class="TeamProspects_NYI"><a id="Islanders">Islanders</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=19">Islanders Page</a> ]
[ <a href="OTHL-ProTeamRoster.php#Islanders">Pro Team Roster</a> ]
[ <a href="OTHL-ProTeamScoring.php#Islanders">Pro Team Scoring</a> ]
[ <a href="OTHL-TeamFinance.php#Islanders">Team Finance</a> ]
[ <a href="OTHL-ProTeamPlayersInfo.php#Islanders">Pro Team PlayersInfo</a> ]
[ <a href="OTHL-ProTeamLines.php#Islanders">Pro Team Lines</a> ]
[ <a href="OTHL-TeamProspects.php#Islanders">Team Prospects</a> ]
[ <a href="OTHL-ProTeamSchedule.php#Islanders">Pro Team Schedule</a> ]
[ <a href="OTHL-ProTeamStats.php#Islanders">Pro Team Stats</a> ]
[ <a href="OTHL-ProTeamStatsVS.php#Islanders">Pro Team Stats VS</a> ]
[ <a href="OTHL-TeamInjurySuspension.php#Islanders">Team Injury Suspension</a> ]
[ <a href="OTHL-TeamHistory.php#Islanders">Team History</a> ]
[ <a href="OTHL-TeamRecords.php#Islanders">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Islanders');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Islanders" style="display: block;">
<h3 class="STHSTeamProspect_Prospect">Prospects - 35</h3>
Alex Cotton(Y:2020-O:118), Anatoli Golyshev(Y:2016-O:66), Anthony Louis(Y:2013-O:200), Benoit-Olivier Groulx(Y:2018-O:46), Brandon Coe(Y:2020-O:103), David Westlund(Y:2014-O:192), Dmitry Ovchinnikov(Y:2020-O:107), Dmitry Voronkov(Y:2019-O:120), Elliot Ekmark(Y:2020-O:182), Hudson Elynuik(Y:2016-O:87), Ivan Morozov(Y:2018-O:60), Jackson Perbix(Y:2018-O:142), Jacob Bryson(Y:2017-O:133), Jake Schmaltz(Y:2019-O:213), Jared McIsaac(Y:2018-O:35), Jasper Weatherby(Y:2018-O:120), Joe Miller(Y:2020-O:201), Keaton Thompson(Y:2013-O:98), Kirill Ustimenko(Y:2017-O:113), Kris Oldham(Y:2015-O:178), Louis Belpedio(Y:2014-O:111), Mac Hollowell(Y:2018-O:125), Martin Fehervary(Y:2018-O:65), Martin Has(Y:2019-O:165), Michael Kesselring(Y:2018-O:173), Paul Bittner(Y:2015-O:27), Rinat Valiev(Y:2014-O:74), Rory Kerins(Y:2020-O:145), Rushan Rafikov(Y:2013-O:145), Tyson Foerster(Y:2020-O:26), Veeti Vainio(Y:2015-O:111), Vladislav Kara(Y:2017-O:160), Will Cranley(Y:2020-O:180), William Bitten(Y:2016-O:48), Zach Nastasiuk(Y:2013-O:49)<br />
<h3 class="STHSTeamProspect_DraftPick">Draft Picks</h3>
<b>Year 2021: </b>NYI 1, NYI 2, CHI 2, ARI 3, NYI 3, SJS 3, BOS 3, VAN 5, NYI 5<br />
<b>Year 2022: </b>NYI 1, DAL 1, NYI 2, NYR 3, NYI 3, NYR 4, NYI 4, NYI 5, NYI 6, NYI 7<br />
<b>Year 2023: </b>NYI 1, NYI 2, NYI 3, NYI 4, PHL 5, NYI 5, NYI 6, NYI 7<br />
<b>Year 2024: </b>NYI 1, NYI 2, NYI 3, NYI 4, NYI 5, NYI 6, NYI 7<br />
<b>Year 2025: </b>NYI 1, NYI 2, NYI 3, NYI 4, NYI 5, NYI 6, NYI 7<br />
</div>
<h1 class="TeamProspects_WPG"><a id="Jets">Jets</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=2">Jets Page</a> ]
[ <a href="OTHL-ProTeamRoster.php#Jets">Pro Team Roster</a> ]
[ <a href="OTHL-ProTeamScoring.php#Jets">Pro Team Scoring</a> ]
[ <a href="OTHL-TeamFinance.php#Jets">Team Finance</a> ]
[ <a href="OTHL-ProTeamPlayersInfo.php#Jets">Pro Team PlayersInfo</a> ]
[ <a href="OTHL-ProTeamLines.php#Jets">Pro Team Lines</a> ]
[ <a href="OTHL-TeamProspects.php#Jets">Team Prospects</a> ]
[ <a href="OTHL-ProTeamSchedule.php#Jets">Pro Team Schedule</a> ]
[ <a href="OTHL-ProTeamStats.php#Jets">Pro Team Stats</a> ]
[ <a href="OTHL-ProTeamStatsVS.php#Jets">Pro Team Stats VS</a> ]
[ <a href="OTHL-TeamInjurySuspension.php#Jets">Team Injury Suspension</a> ]
[ <a href="OTHL-TeamHistory.php#Jets">Team History</a> ]
[ <a href="OTHL-TeamRecords.php#Jets">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Jets');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Jets" style="display: block;">
<h3 class="STHSTeamProspect_Prospect">Prospects - 41</h3>
Adam Smith(Y:2016-O:206), Akil Thomas(Y:2018-O:29), Ales Stezka(Y:2015-O:117), Eetu Pakkila(Y:2018-O:199), Filip Barklund(Y:2020-O:213), Fredrik Karlstrom(Y:2016-O:107), Grant Mismash(Y:2017-O:56), Joel Blomqvist(Y:2020-O:47), Joona Koppanen(Y:2016-O:167), Joonas Lyytinen(Y:2014-O:140), Judd Caulfield(Y:2019-O:129), Juho Markkanen(Y:2020-O:140), Kasper Bjorkqvist(Y:2016-O:72), Kienan Draper(Y:2020-O:179), Kieran Ruscheinski(Y:2019-O:217), Kyle Aucoin(Y:2020-O:202), Leevi Aaltonen(Y:2019-O:108), Lenni Killinen(Y:2018-O:132), Linus Lindstrom(Y:2016-O:82), Marcus Kallionkieli(Y:2019-O:125), Markus Niemelainen(Y:2016-O:63), Markus Nurmi(Y:2016-O:161), Markus Ruusu(Y:2015-O:156), Matias Maccelli(Y:2019-O:94), Matt Filipe(Y:2016-O:76), Max Zimmer(Y:2016-O:123), Nick Boka(Y:2015-O:186), Niklas Nordgren(Y:2018-O:62), Noah Beck(Y:2020-O:181), Patrik Virta(Y:2017-O:189), Petrus Palmu(Y:2017-O:147), Roby Jarventie(Y:2020-O:16), Roman Durny(Y:2018-O:94), Santeri Airola(Y:2019-O:202), Santeri Hatakka(Y:2019-O:212), Simon Johansson(Y:2018-O:121), Toni Utunen(Y:2018-O:111), Tyler Kleven(Y:2020-O:56), Victor Brattstrom(Y:2018-O:159), Ville Rasanen(Y:2017-O:205), Yegor Korshkov(Y:2016-O:40)<br />
<h3 class="STHSTeamProspect_DraftPick">Draft Picks</h3>
<b>Year 2021: </b>WPG 1, WPG 6, WPG 7<br />
<b>Year 2022: </b>WPG 1, TBL 3, WPG 3, WPG 6, WPG 7<br />
<b>Year 2023: </b>WPG 1, WPG 2, WPG 3, WPG 4, WPG 5, WPG 6, WPG 7<br />
<b>Year 2024: </b>WPG 1, WPG 2, WPG 3, WPG 4, WPG 5, WPG 6, WPG 7<br />
<b>Year 2025: </b>WPG 1, WPG 2, WPG 3, WPG 4, WPG 5, WPG 6, WPG 7<br />
</div>
<h1 class="TeamProspects_LAK"><a id="Kings">Kings</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=14">Kings Page</a> ]
[ <a href="OTHL-ProTeamRoster.php#Kings">Pro Team Roster</a> ]
[ <a href="OTHL-ProTeamScoring.php#Kings">Pro Team Scoring</a> ]
[ <a href="OTHL-TeamFinance.php#Kings">Team Finance</a> ]
[ <a href="OTHL-ProTeamPlayersInfo.php#Kings">Pro Team PlayersInfo</a> ]
[ <a href="OTHL-ProTeamLines.php#Kings">Pro Team Lines</a> ]
[ <a href="OTHL-TeamProspects.php#Kings">Team Prospects</a> ]
[ <a href="OTHL-ProTeamSchedule.php#Kings">Pro Team Schedule</a> ]
[ <a href="OTHL-ProTeamStats.php#Kings">Pro Team Stats</a> ]
[ <a href="OTHL-ProTeamStatsVS.php#Kings">Pro Team Stats VS</a> ]
[ <a href="OTHL-TeamInjurySuspension.php#Kings">Team Injury Suspension</a> ]
[ <a href="OTHL-TeamHistory.php#Kings">Team History</a> ]
[ <a href="OTHL-TeamRecords.php#Kings">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Kings');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Kings" style="display: block;">
<h3 class="STHSTeamProspect_Prospect">Prospects - 39</h3>
Adam Gilmour(Y:2012-O:92), Alexander Nikishin(Y:2020-O:100), Artem Shlaine(Y:2020-O:152), Artur Akhtyamov(Y:2020-O:90), Arvid Holm(Y:2017-O:170), Benjamin Marshall(Y:2010-O:143), Bryce Brodzinski(Y:2019-O:179), Colten Ellis(Y:2019-O:89), Connor McMichael(Y:2019-O:27), Eemeli Rasanen(Y:2017-O:59), Evan Smith(Y:2015-O:198), Fabrice Herzog(Y:2013-O:122), Fedor Gordeev(Y:2017-O:163), Gabriel Beaupre(Y:2011-O:158), Jack Gorniak(Y:2018-O:148), Jackson Hallum(Y:2020-O:108), Jackson Kunz(Y:2020-O:125), Jackson LaCombe(Y:2019-O:54), Jake Boltmann(Y:2020-O:131), Jake Kupsky(Y:2015-O:205), John Nyberg(Y:2014-O:164), Joonas Lehtivuori, Jordan Hollett(Y:2017-O:167), Josiah Slavin(Y:2018-O:201), Landon Slaggert(Y:2020-O:73), Mason Primeau(Y:2019-O:114), Maxim Groshev(Y:2020-O:78), Mikhail Maltsev(Y:2016-O:112), Nikolai Chebykin(Y:2016-O:159), Noah Carroll(Y:2016-O:196), Peter Ceresnak(Y:2011-O:184), Philip Tomasino(Y:2019-O:22), Rodion Amirov(Y:2020-O:14), Ryan Mantha(Y:2014-O:115), Ryan O'Connell(Y:2017-O:173), Sam Stange(Y:2020-O:113), Tobias Bjornfot(Y:2019-O:23), Tyler Bird(Y:2014-O:121), William Wallinder(Y:2020-O:33)<br />
<h3 class="STHSTeamProspect_DraftPick">Draft Picks</h3>
<b>Year 2021: </b>LAK 1, EDM 3, LAK 5, FLA 5, SJS 5, WSH 6, LAK 6, ANH 6<br />
<b>Year 2022: </b>LAK 1, LAK 2, LAK 3, LAK 4, LAK 5, LAK 6, VGK 6, LAK 7<br />
<b>Year 2023: </b>LAK 1, LAK 2, LAK 3, LAK 4, LAK 5, LAK 6, LAK 7<br />
<b>Year 2024: </b>LAK 1, LAK 2, LAK 3, LAK 4, LAK 5, LAK 6, LAK 7<br />
<b>Year 2025: </b>LAK 1, LAK 2, LAK 3, LAK 4, LAK 5, LAK 6, LAK 7<br />
</div>
<h1 class="TeamProspects_TBL"><a id="Lightning">Lightning</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=27">Lightning Page</a> ]
[ <a href="OTHL-ProTeamRoster.php#Lightning">Pro Team Roster</a> ]
[ <a href="OTHL-ProTeamScoring.php#Lightning">Pro Team Scoring</a> ]
[ <a href="OTHL-TeamFinance.php#Lightning">Team Finance</a> ]
[ <a href="OTHL-ProTeamPlayersInfo.php#Lightning">Pro Team PlayersInfo</a> ]
[ <a href="OTHL-ProTeamLines.php#Lightning">Pro Team Lines</a> ]
[ <a href="OTHL-TeamProspects.php#Lightning">Team Prospects</a> ]
[ <a href="OTHL-ProTeamSchedule.php#Lightning">Pro Team Schedule</a> ]
[ <a href="OTHL-ProTeamStats.php#Lightning">Pro Team Stats</a> ]
[ <a href="OTHL-ProTeamStatsVS.php#Lightning">Pro Team Stats VS</a> ]
[ <a href="OTHL-TeamInjurySuspension.php#Lightning">Team Injury Suspension</a> ]
[ <a href="OTHL-TeamHistory.php#Lightning">Team History</a> ]
[ <a href="OTHL-TeamRecords.php#Lightning">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Lightning');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Lightning" style="display: block;">
<h3 class="STHSTeamProspect_Prospect">Prospects - 28</h3>
Ben Jones(Y:2017-O:214), Carson Focht(Y:2019-O:188), David Bernhardt(Y:2016-O:150), Ethan Keppen(Y:2019-O:87), Gustav Bouramman(Y:2015-O:147), Jack Adams(Y:2017-O:165), Jack Malone(Y:2019-O:163), Jack Rathbone(Y:2017-O:132), Josh Ess(Y:2017-O:210), Karel Plasek(Y:2019-O:185), Karel Vejmelka(Y:2015-O:158), Linus Olund(Y:2017-O:150), Marcus Karlberg(Y:2018-O:104), Marcus Westfalt(Y:2018-O:161), Matias Rajaniemi(Y:2020-O:173), Mikael Hakkarainen(Y:2018-O:135), Nick Ebert(Y:2012-O:84), Nikita Korostelev(Y:2015-O:78), Nikita Pavlychev(Y:2015-O:180), Olof Lindbom(Y:2018-O:52), Pavel Koltygin(Y:2017-O:124), Petr Kvaca(Y:2017-O:136), Philippe Daoust(Y:2020-O:187), Rafael Harvey-Pinard(Y:2019-O:207), Sebastian Repo(Y:2017-O:122), William Lagesson(Y:2014-O:90), Wouter Peeters(Y:2016-O:74), Yegor Zaitsev(Y:2017-O:209)<br />
<h3 class="STHSTeamProspect_DraftPick">Draft Picks</h3>
<b>Year 2021: </b>NYI 6, VAN 7<br />
<b>Year 2022: </b>NYR 6, TBL 7<br />
<b>Year 2023: </b><br />
<b>Year 2024: </b>TBL 1, TBL 2, TBL 3, TBL 5, TBL 6, TBL 7<br />
<b>Year 2025: </b>TBL 1, TBL 2, TBL 3, TBL 4, TBL 5, TBL 6, TBL 7<br />
</div>
<h1 class="TeamProspects_TOR"><a id="MapleLeafs">Maple Leafs</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=28">Maple Leafs Page</a> ]
[ <a href="OTHL-ProTeamRoster.php#MapleLeafs">Pro Team Roster</a> ]
[ <a href="OTHL-ProTeamScoring.php#MapleLeafs">Pro Team Scoring</a> ]
[ <a href="OTHL-TeamFinance.php#MapleLeafs">Team Finance</a> ]
[ <a href="OTHL-ProTeamPlayersInfo.php#MapleLeafs">Pro Team PlayersInfo</a> ]
[ <a href="OTHL-ProTeamLines.php#MapleLeafs">Pro Team Lines</a> ]
[ <a href="OTHL-TeamProspects.php#MapleLeafs">Team Prospects</a> ]
[ <a href="OTHL-ProTeamSchedule.php#MapleLeafs">Pro Team Schedule</a> ]
[ <a href="OTHL-ProTeamStats.php#MapleLeafs">Pro Team Stats</a> ]
[ <a href="OTHL-ProTeamStatsVS.php#MapleLeafs">Pro Team Stats VS</a> ]
[ <a href="OTHL-TeamInjurySuspension.php#MapleLeafs">Team Injury Suspension</a> ]
[ <a href="OTHL-TeamHistory.php#MapleLeafs">Team History</a> ]
[ <a href="OTHL-TeamRecords.php#MapleLeafs">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_MapleLeafs');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_MapleLeafs" style="display: block;">
<h3 class="STHSTeamProspect_Prospect">Prospects - 41</h3>
Adam Raska(Y:2020-O:167), Akira Schmid(Y:2018-O:133), Alex Vlasic(Y:2019-O:52), Bowen Byram(Y:2019-O:3), Brendan Warren(Y:2015-O:126), Carter Gylander(Y:2019-O:206), Cedric Pare(Y:2017-O:203), Curtis Douglas(Y:2018-O:115), Gunnarwolfe Fontaine(Y:2020-O:168), Gustav Berglund(Y:2019-O:211), Ilya Nikolaev(Y:2019-O:63), Jack McBain(Y:2018-O:59), Jack Smith(Y:2020-O:147), Jack Studnicka(Y:2017-O:67), Jaromir Pytlik(Y:2020-O:93), Jeremy Swayman(Y:2017-O:138), Jesper Vikman(Y:2020-O:159), Jiri Patera(Y:2017-O:183), Joel Hofer(Y:2018-O:88), John Ludvig(Y:2019-O:100), Josh Nodler(Y:2019-O:175), Konstantin Volkov(Y:2016-O:176), Layton Ahac(Y:2019-O:82), Liam Gorman(Y:2018-O:192), Luke Evangelista(Y:2020-O:46), Marcus Davidsson(Y:2017-O:47), Martin Chromiak(Y:2020-O:77), Michael Benning(Y:2020-O:92), Mike Koster(Y:2019-O:169), Nick Campoli(Y:2017-O:186), Nick Leivermann(Y:2017-O:207), Olivier Rodrigue(Y:2018-O:71), Ryder Donovan(Y:2019-O:103), Samuel Walker(Y:2017-O:212), Santtu Kinnunen(Y:2018-O:209), Sebastian Walfridsson(Y:2017-O:180), Simon Holmstrom(Y:2019-O:31), Simon Kjellberg(Y:2018-O:185), Tanner Dickinson(Y:2020-O:156), Vladislav Kolyachonok(Y:2019-O:48), Zayde Wisdom(Y:2020-O:80)<br />
<h3 class="STHSTeamProspect_DraftPick">Draft Picks</h3>
<b>Year 2021: </b>TOR 2, VAN 2, EDM 2, LAK 4, TBL 4, TOR 4, PHL 4, ARI 4, TOR 6, ARI 7, CAR 7<br />
<b>Year 2022: </b>TOR 1, TOR 2, ANH 2, TOR 3, TOR 4, NSH 5, TOR 5, PHL 5, TOR 6, TOR 7<br />
<b>Year 2023: </b>TOR 1, TOR 2, TOR 3, TOR 4, TOR 5, TOR 6, TOR 7<br />
<b>Year 2024: </b>TOR 1, TOR 2, TOR 3, TOR 4, TOR 5, TOR 6, TOR 7<br />
<b>Year 2025: </b>TOR 1, TOR 2, TOR 3, TOR 4, TOR 5, TOR 6, TOR 7<br />
</div>
<h1 class="TeamProspects_EDM"><a id="Oilers">Oilers</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=12">Oilers Page</a> ]
[ <a href="OTHL-ProTeamRoster.php#Oilers">Pro Team Roster</a> ]
[ <a href="OTHL-ProTeamScoring.php#Oilers">Pro Team Scoring</a> ]
[ <a href="OTHL-TeamFinance.php#Oilers">Team Finance</a> ]
[ <a href="OTHL-ProTeamPlayersInfo.php#Oilers">Pro Team PlayersInfo</a> ]
[ <a href="OTHL-ProTeamLines.php#Oilers">Pro Team Lines</a> ]
[ <a href="OTHL-TeamProspects.php#Oilers">Team Prospects</a> ]
[ <a href="OTHL-ProTeamSchedule.php#Oilers">Pro Team Schedule</a> ]
[ <a href="OTHL-ProTeamStats.php#Oilers">Pro Team Stats</a> ]
[ <a href="OTHL-ProTeamStatsVS.php#Oilers">Pro Team Stats VS</a> ]
[ <a href="OTHL-TeamInjurySuspension.php#Oilers">Team Injury Suspension</a> ]
[ <a href="OTHL-TeamHistory.php#Oilers">Team History</a> ]
[ <a href="OTHL-TeamRecords.php#Oilers">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Oilers');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Oilers" style="display: block;">
<h3 class="STHSTeamProspect_Prospect">Prospects - 36</h3>
Aatu Jamsen(Y:2020-O:198), Adam Huska(Y:2015-O:128), Alex Turcotte(Y:2019-O:4), Antti Tuomisto(Y:2019-O:34), Bear Hughes(Y:2020-O:137), Ben Meehan(Y:2020-O:142), Cooper Moore(Y:2019-O:164), Cross Hanas(Y:2020-O:55), Dylan Samberg(Y:2017-O:41), Elliot Desnoyers(Y:2020-O:160), Eric Hjorth(Y:2019-O:141), Ian Moore(Y:2020-O:98), Johan Sodergran(Y:2018-O:158), John Beecher(Y:2019-O:33), John Farinacci(Y:2019-O:75), Josh Norris(Y:2017-O:21), Kasper Kotkansalo(Y:2017-O:84), Keith Petruzzelli(Y:2017-O:74), Linus Hogberg(Y:2016-O:133), Lucas Mercuri(Y:2020-O:171), Lukas Parik(Y:2019-O:71), Maxwell Crozier(Y:2019-O:158), Michael DiPietro(Y:2017-O:52), Michael Krutil(Y:2020-O:136), Mike Callahan(Y:2018-O:164), Oskar Steen(Y:2016-O:166), Paul Cotter(Y:2018-O:127), Pavel Shen(Y:2018-O:214), Reilly Walsh(Y:2017-O:94), Remi Poirier(Y:2020-O:177), Samuel Ersson(Y:2018-O:141), Samuel Knazko(Y:2020-O:99), Shane Pinto(Y:2019-O:35), Theodor Niederbach(Y:2020-O:49), Ty Dellandrea(Y:2018-O:16), Will Francis(Y:2019-O:172)<br />
<h3 class="STHSTeamProspect_DraftPick">Draft Picks</h3>
<b>Year 2021: </b>EDM 1, NJD 2, ANH 2, PIT 3, DAL 4, PHL 5, TOR 5, WPG 5, EDM 5, PIT 6, MIN 6, VGK 6, NJD 6, SJS 7, CLB 7<br />
<b>Year 2022: </b>EDM 1, EDM 2, EDM 3, EDM 4, EDM 5, CAR 7, OTT 7<br />
<b>Year 2023: </b>EDM 1, EDM 2, EDM 3, EDM 4, PHL 4, EDM 5, EDM 6<br />
<b>Year 2024: </b>EDM 1, EDM 2, EDM 3, EDM 4, EDM 5, EDM 6, EDM 7<br />
<b>Year 2025: </b>EDM 1, EDM 2, EDM 3, EDM 4, EDM 5, EDM 6, EDM 7<br />
</div>
<h1 class="TeamProspects_FLA"><a id="Panthers">Panthers</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=13">Panthers Page</a> ]
[ <a href="OTHL-ProTeamRoster.php#Panthers">Pro Team Roster</a> ]
[ <a href="OTHL-ProTeamScoring.php#Panthers">Pro Team Scoring</a> ]
[ <a href="OTHL-TeamFinance.php#Panthers">Team Finance</a> ]
[ <a href="OTHL-ProTeamPlayersInfo.php#Panthers">Pro Team PlayersInfo</a> ]
[ <a href="OTHL-ProTeamLines.php#Panthers">Pro Team Lines</a> ]
[ <a href="OTHL-TeamProspects.php#Panthers">Team Prospects</a> ]
[ <a href="OTHL-ProTeamSchedule.php#Panthers">Pro Team Schedule</a> ]
[ <a href="OTHL-ProTeamStats.php#Panthers">Pro Team Stats</a> ]
[ <a href="OTHL-ProTeamStatsVS.php#Panthers">Pro Team Stats VS</a> ]
[ <a href="OTHL-TeamInjurySuspension.php#Panthers">Team Injury Suspension</a> ]
[ <a href="OTHL-TeamHistory.php#Panthers">Team History</a> ]
[ <a href="OTHL-TeamRecords.php#Panthers">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Panthers');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Panthers" style="display: block;">
<h3 class="STHSTeamProspect_Prospect">Prospects - 24</h3>
Alexander Delnov(Y:2012-O:93), Casey Fitzgerald(Y:2016-O:104), Chris Wilkie(Y:2015-O:138), Christopher Clapperton(Y:2013-O:115), David Pope(Y:2013-O:121), Egor Sokolov(Y:2020-O:59), Fabian Zetterlund(Y:2017-O:63), Filip Helt(Y:2016-O:204), Garrett Meurs(Y:2011-O:139), Hardy Haman-Aktell(Y:2016-O:144), Jakob Stenqvist(Y:2016-O:187), Joren van Pottelberghe(Y:2015-O:105), Josh Anderson(Y:2016-O:84), Karch Bachman(Y:2015-O:169), Linus Weissbach(Y:2017-O:162), Miguel Fidler(Y:2014-O:156), Mike Williamson(Y:2013-O:205), Sergei Boikov(Y:2015-O:174), Stephen Desrocher(Y:2015-O:123), Thimo Nickl(Y:2020-O:123), Thomas Harley(Y:2019-O:21), Trevor Kuntar(Y:2020-O:76), William Villeneuve(Y:2020-O:94), Ziyat Paygin(Y:2015-O:144)<br />
<h3 class="STHSTeamProspect_DraftPick">Draft Picks</h3>
<b>Year 2021: </b>FLA 1, FLA 2<br />
<b>Year 2022: </b>FLA 1, FLA 2, FLA 3, FLA 4, FLA 6, FLA 7<br />
<b>Year 2023: </b>FLA 1, FLA 2, FLA 3, FLA 4, BOS 5, FLA 5, FLA 6<br />
<b>Year 2024: </b>FLA 1, FLA 2, FLA 3, FLA 4, FLA 5, FLA 6, FLA 7<br />
<b>Year 2025: </b>FLA 1, FLA 2, FLA 3, FLA 4, FLA 5, FLA 6, FLA 7<br />
</div>
<h1 class="TeamProspects_PIT"><a id="Penguins">Penguins</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=24">Penguins Page</a> ]
[ <a href="OTHL-ProTeamRoster.php#Penguins">Pro Team Roster</a> ]
[ <a href="OTHL-ProTeamScoring.php#Penguins">Pro Team Scoring</a> ]
[ <a href="OTHL-TeamFinance.php#Penguins">Team Finance</a> ]
[ <a href="OTHL-ProTeamPlayersInfo.php#Penguins">Pro Team PlayersInfo</a> ]
[ <a href="OTHL-ProTeamLines.php#Penguins">Pro Team Lines</a> ]
[ <a href="OTHL-TeamProspects.php#Penguins">Team Prospects</a> ]
[ <a href="OTHL-ProTeamSchedule.php#Penguins">Pro Team Schedule</a> ]
[ <a href="OTHL-ProTeamStats.php#Penguins">Pro Team Stats</a> ]
[ <a href="OTHL-ProTeamStatsVS.php#Penguins">Pro Team Stats VS</a> ]
[ <a href="OTHL-TeamInjurySuspension.php#Penguins">Team Injury Suspension</a> ]
[ <a href="OTHL-TeamHistory.php#Penguins">Team History</a> ]
[ <a href="OTHL-TeamRecords.php#Penguins">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Penguins');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Penguins" style="display: block;">
<h3 class="STHSTeamProspect_Prospect">Prospects - 37</h3>
Aarne Talvitte(Y:2017-O:166), Alex Laferriere(Y:2020-O:70), Alexander Campbell(Y:2019-O:80), Alexis Lafreniere(Y:2020-O:1), Bogdan Trineyev(Y:2020-O:115), Brady Gilmour(Y:2017-O:197), Brett Leason(Y:2019-O:37), Calle Sjalin(Y:2017-O:175), Cameron Morrison(Y:2016-O:37), Chris Leblanc(Y:2013-O:199), Cole Caufield(Y:2019-O:9), Cole Fonstad(Y:2018-O:89), Cole Fraser(Y:2017-O:135), Croix Evingson(Y:2017-O:215), Dakota Joshua(Y:2014-O:154), Daniel Torgersson(Y:2020-O:48), David Hrenak(Y:2018-O:143), Ian Mitchell(Y:2017-O:54), Jacob Jackson(Y:2013-O:197), Joe Veleno(Y:2018-O:15), Kaiden Guhle(Y:2020-O:24), Kevin Elgestal(Y:2014-O:205), Kirill Tyutyayev(Y:2019-O:181), Luke Martin(Y:2017-O:42), Luke Tuch(Y:2020-O:52), Maksim Berezkin(Y:2020-O:129), Malte Setkov(Y:2017-O:129), Morgan Barron(Y:2017-O:185), Nikita Popugaev(Y:2017-O:73), Pontus Holmberg(Y:2018-O:157), Pyotr Kochetkov(Y:2019-O:40), Ridly Greig(Y:2020-O:32), Scott Reedy(Y:2017-O:88), Skyler Brind'Amour(Y:2017-O:169), Thomas Novak(Y:2015-O:34), Topi Niemela(Y:2020-O:67), Tyler Inamoto(Y:2017-O:104)<br />
<h3 class="STHSTeamProspect_DraftPick">Draft Picks</h3>
<b>Year 2021: </b>PIT 1, PIT 2, PHL 2, MTL 3, PHL 3, PIT 4, PIT 5, VAN 6, PIT 7<br />
<b>Year 2022: </b>PIT 1, PIT 2, PIT 3, PIT 4, PIT 5, PIT 6, PIT 7<br />
<b>Year 2023: </b>PIT 1, PIT 2, PIT 3, PIT 4, PIT 5, PIT 7<br />
<b>Year 2024: </b>PIT 1, PIT 2, PIT 3, PIT 4, PIT 5, PIT 6, PIT 7<br />
<b>Year 2025: </b>PIT 1, PIT 2, PIT 3, PIT 4, PIT 5, PIT 6, PIT 7<br />
</div>
<h1 class="TeamProspects_NSH"><a id="Predators">Predators</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=17">Predators Page</a> ]
[ <a href="OTHL-ProTeamRoster.php#Predators">Pro Team Roster</a> ]
[ <a href="OTHL-ProTeamScoring.php#Predators">Pro Team Scoring</a> ]
[ <a href="OTHL-TeamFinance.php#Predators">Team Finance</a> ]
[ <a href="OTHL-ProTeamPlayersInfo.php#Predators">Pro Team PlayersInfo</a> ]
[ <a href="OTHL-ProTeamLines.php#Predators">Pro Team Lines</a> ]
[ <a href="OTHL-TeamProspects.php#Predators">Team Prospects</a> ]
[ <a href="OTHL-ProTeamSchedule.php#Predators">Pro Team Schedule</a> ]
[ <a href="OTHL-ProTeamStats.php#Predators">Pro Team Stats</a> ]
[ <a href="OTHL-ProTeamStatsVS.php#Predators">Pro Team Stats VS</a> ]
[ <a href="OTHL-TeamInjurySuspension.php#Predators">Team Injury Suspension</a> ]
[ <a href="OTHL-TeamHistory.php#Predators">Team History</a> ]
[ <a href="OTHL-TeamRecords.php#Predators">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Predators');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Predators" style="display: block;">
<h3 class="STHSTeamProspect_Prospect">Prospects - 30</h3>
Anton Andersson(Y:2017-O:208), Ben McCartney(Y:2020-O:210), Blake Heinrich(Y:2013-O:185), Brandon Hagel(Y:2016-O:149), Brayden Chizen(Y:2016-O:209), Brock Faber(Y:2020-O:66), Chris Martenet(Y:2015-O:99), David Drake(Y:2013-O:192), Dustin Wolf(Y:2019-O:117), Dylan Cozens(Y:2019-O:10), Felix Bibeau(Y:2019-O:162), Gage Goncalves(Y:2020-O:62), Hayden Hawkey(Y:2014-O:174), Jakub Dobes(Y:2020-O:186), Jason Kasdorf(Y:2011-O:166), Jeremiah Addison(Y:2015-O:165), Jesper Pettersson(Y:2014-O:204), Lassi Thomson(Y:2019-O:17), Matthew Wedman(Y:2019-O:171), Nathan Legare(Y:2019-O:62), Nils Hoglander(Y:2019-O:20), Noel Hoefenmayer(Y:2017-O:110), Ozzy Wiesblatt(Y:2020-O:31), Spencer Knight(Y:2019-O:8), Terrance Amorosa(Y:2013-O:159), Tyler Vesel(Y:2014-O:178), Tyler Weiss(Y:2018-O:126), Ville Heinola(Y:2019-O:16), Zachary Bouthillier(Y:2018-O:210), Zachary Pochiro(Y:2013-O:132)<br />
<h3 class="STHSTeamProspect_DraftPick">Draft Picks</h3>
<b>Year 2021: </b>NSH 1, NSH 2, WPG 3, NSH 3, WSH 4, NSH 4, NSH 5, NSH 6, NSH 7<br />
<b>Year 2022: </b>NSH 1, NSH 2, NSH 3, NSH 6, NSH 7<br />
<b>Year 2023: </b>NSH 1, NSH 2, NSH 3, NSH 4, NSH 5, NSH 6, NSH 7<br />
<b>Year 2024: </b>NSH 1, NSH 2, NSH 3, NSH 4, NSH 5, NSH 6, NSH 7<br />
<b>Year 2025: </b>NSH 1, NSH 2, NSH 3, NSH 4, NSH 5, NSH 6, NSH 7<br />
</div>
<h1 class="TeamProspects_NYR"><a id="Rangers">Rangers</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=20">Rangers Page</a> ]
[ <a href="OTHL-ProTeamRoster.php#Rangers">Pro Team Roster</a> ]
[ <a href="OTHL-ProTeamScoring.php#Rangers">Pro Team Scoring</a> ]
[ <a href="OTHL-TeamFinance.php#Rangers">Team Finance</a> ]
[ <a href="OTHL-ProTeamPlayersInfo.php#Rangers">Pro Team PlayersInfo</a> ]
[ <a href="OTHL-ProTeamLines.php#Rangers">Pro Team Lines</a> ]
[ <a href="OTHL-TeamProspects.php#Rangers">Team Prospects</a> ]
[ <a href="OTHL-ProTeamSchedule.php#Rangers">Pro Team Schedule</a> ]
[ <a href="OTHL-ProTeamStats.php#Rangers">Pro Team Stats</a> ]
[ <a href="OTHL-ProTeamStatsVS.php#Rangers">Pro Team Stats VS</a> ]
[ <a href="OTHL-TeamInjurySuspension.php#Rangers">Team Injury Suspension</a> ]
[ <a href="OTHL-TeamHistory.php#Rangers">Team History</a> ]
[ <a href="OTHL-TeamRecords.php#Rangers">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Rangers');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Rangers" style="display: block;">
<h3 class="STHSTeamProspect_Prospect">Prospects - 33</h3>
Aapeli Rasanen(Y:2016-O:115), Anthony Brodeur(Y:2013-O:193), Anthony Camara(Y:2011-O:98), Ben Sexton(Y:2009-O:203), Bokondji Imama(Y:2015-O:197), Bradley Ross(Y:2010-O:33), Brendan Brisson(Y:2020-O:28), Connor Corcoran(Y:2018-O:151), Dennis Busby(Y:2018-O:152), Dillon Heatherington(Y:2013-O:58), Francis Perron(Y:2014-O:131), Garret Ross(Y:2012-O:169), Garrett Metcalf(Y:2015-O:175), Henry Rybinski(Y:2019-O:110), Joachim Blichfeld(Y:2016-O:188), Joey Dudek(Y:2014-O:168), Joshua Brown(Y:2013-O:167), Louis-Marc Aubry(Y:2010-O:84), Lukas Reichel(Y:2020-O:18), Luke Stevens(Y:2015-O:151), Matt Schmalz(Y:2015-O:185), Mattias Elfstrom(Y:2016-O:155), Max Gildon(Y:2017-O:76), Nicholas Caamano(Y:2016-O:125), Patrick Sanvido(Y:2014-O:209), Robin Norell(Y:2013-O:152), Ryan McLeod(Y:2018-O:33), Sondre Olden(Y:2010-O:59), Steven Spinner(Y:2014-O:189), Tanner Laczynski(Y:2016-O:139), Vaclav Karabacek(Y:2014-O:56), Vladislav Yeryomenko(Y:2018-O:144), William Cuylle(Y:2020-O:60)<br />
<h3 class="STHSTeamProspect_DraftPick">Draft Picks</h3>
<b>Year 2021: </b>OTT 7<br />
<b>Year 2022: </b>NYR 1, NYR 2, DAL 4, NYR 5, CAR 5, NYR 7<br />
<b>Year 2023: </b>NYR 1, NYR 2, NYR 3, NYR 4, NYR 5, NYR 6, NYR 7<br />
<b>Year 2024: </b>NYR 1, NYR 2, NYR 3, NYR 4, NYR 5, NYR 6, NYR 7<br />
<b>Year 2025: </b>NYR 1, NYR 2, NYR 3, NYR 4, NYR 5, NYR 6, NYR 7<br />
</div>
<h1 class="TeamProspects_DET"><a id="RedWings">Red Wings</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=11">Red Wings Page</a> ]
[ <a href="OTHL-ProTeamRoster.php#RedWings">Pro Team Roster</a> ]
[ <a href="OTHL-ProTeamScoring.php#RedWings">Pro Team Scoring</a> ]
[ <a href="OTHL-TeamFinance.php#RedWings">Team Finance</a> ]
[ <a href="OTHL-ProTeamPlayersInfo.php#RedWings">Pro Team PlayersInfo</a> ]
[ <a href="OTHL-ProTeamLines.php#RedWings">Pro Team Lines</a> ]
[ <a href="OTHL-TeamProspects.php#RedWings">Team Prospects</a> ]
[ <a href="OTHL-ProTeamSchedule.php#RedWings">Pro Team Schedule</a> ]
[ <a href="OTHL-ProTeamStats.php#RedWings">Pro Team Stats</a> ]
[ <a href="OTHL-ProTeamStatsVS.php#RedWings">Pro Team Stats VS</a> ]
[ <a href="OTHL-TeamInjurySuspension.php#RedWings">Team Injury Suspension</a> ]
[ <a href="OTHL-TeamHistory.php#RedWings">Team History</a> ]
[ <a href="OTHL-TeamRecords.php#RedWings">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_RedWings');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_RedWings" style="display: block;">
<h3 class="STHSTeamProspect_Prospect">Prospects - 46</h3>
Allan McShane(Y:2018-O:78), Ben Mirageas(Y:2017-O:114), Brad Morrison(Y:2015-O:89), Brett Murray(Y:2016-O:124), Bulat Shafigullin(Y:2018-O:74), Chase Bradley(Y:2020-O:204), Chase Yoder(Y:2020-O:190), Chaz Reddekopp(Y:2015-O:168), Christian Krygier(Y:2018-O:204), Cole Brady(Y:2019-O:176), Cole Krygier(Y:2018-O:206), Collin Adams(Y:2016-O:183), David Cotton(Y:2015-O:135), Dylan Ferguson(Y:2017-O:131), Dylan Peterson(Y:2020-O:84), Erik Foley(Y:2015-O:65), Evan Barratt(Y:2017-O:100), Filip Ahl(Y:2015-O:88), Graham McPhee(Y:2016-O:131), Isaac Ratcliffe(Y:2017-O:32), Jack Sadek(Y:2015-O:187), Jacob Paquette(Y:2017-O:151), Jan Kostalek(Y:2013-O:103), Jan Mysak(Y:2020-O:44), Janne Juvonen(Y:2013-O:194), Jean-Luc Foudy(Y:2020-O:57), Joni Ikonen(Y:2017-O:46), Jordan Kooy(Y:2018-O:211), Jordan Sambrook(Y:2016-O:94), Jordan Stallard(Y:2016-O:117), Kristoffer Gunnarsson(Y:2017-O:193), Louis Crevier(Y:2020-O:158), Mathew Hill(Y:2019-O:173), Miroslav Svoboda(Y:2015-O:207), Nicolas Mattinen(Y:2016-O:132), Nikola Pasic(Y:2019-O:142), Owen Tippett(Y:2017-O:7), Philip Broberg(Y:2019-O:11), Raivis Ansons(Y:2020-O:154), Robin Kovacs(Y:2015-O:51), Ronan Seeley(Y:2020-O:150), Roy Radke(Y:2015-O:162), Sam Brittain(Y:2010-O:123), Travis Barron(Y:2016-O:152), Ty Ronning(Y:2016-O:154), Wyatt Schingoethe(Y:2020-O:199)<br />
<h3 class="STHSTeamProspect_DraftPick">Draft Picks</h3>
<b>Year 2021: </b>DET 1, DET 2, TBL 3, DET 3, DET 5, BOS 5, DET 6, DET 7<br />
<b>Year 2022: </b>DET 1, DET 2, PHL 4, DET 4, DET 5, DET 6, DET 7<br />
<b>Year 2023: </b>DET 1, DET 2, DET 3, DET 4, DET 5, DET 6, DET 7<br />
<b>Year 2024: </b>DET 1, DET 2, DET 3, DET 4, DET 5, DET 6, DET 7<br />
<b>Year 2025: </b>DET 1, DET 2, DET 3, DET 4, DET 5, DET 6, DET 7<br />
</div>
<h1 class="TeamProspects_BUF"><a id="Sabres">Sabres</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=4">Sabres Page</a> ]
[ <a href="OTHL-ProTeamRoster.php#Sabres">Pro Team Roster</a> ]
[ <a href="OTHL-ProTeamScoring.php#Sabres">Pro Team Scoring</a> ]
[ <a href="OTHL-TeamFinance.php#Sabres">Team Finance</a> ]
[ <a href="OTHL-ProTeamPlayersInfo.php#Sabres">Pro Team PlayersInfo</a> ]
[ <a href="OTHL-ProTeamLines.php#Sabres">Pro Team Lines</a> ]
[ <a href="OTHL-TeamProspects.php#Sabres">Team Prospects</a> ]
[ <a href="OTHL-ProTeamSchedule.php#Sabres">Pro Team Schedule</a> ]
[ <a href="OTHL-ProTeamStats.php#Sabres">Pro Team Stats</a> ]
[ <a href="OTHL-ProTeamStatsVS.php#Sabres">Pro Team Stats VS</a> ]
[ <a href="OTHL-TeamInjurySuspension.php#Sabres">Team Injury Suspension</a> ]
[ <a href="OTHL-TeamHistory.php#Sabres">Team History</a> ]
[ <a href="OTHL-TeamRecords.php#Sabres">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Sabres');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Sabres" style="display: block;">
<h3 class="STHSTeamProspect_Prospect">Prospects - 25</h3>
Albert Lyckasen(Y:2020-O:188), Anthony Florentino(Y:2013-O:105), Arturs Silovs(Y:2019-O:152), Case McCarthy(Y:2019-O:149), Eric Florchuk(Y:2018-O:184), Erik Portillo(Y:2019-O:93), Ethan Bowen(Y:2020-O:205), Ethan Haider(Y:2019-O:147), Frederik Nissen(Y:2019-O:146), Ilya Konovalov(Y:2019-O:83), Isaiah Saville(Y:2019-O:138), Ivan Chekhovich(Y:2017-O:108), Justin Sourdif(Y:2020-O:81), Justus Annunen(Y:2018-O:85), Kirill Slepets(Y:2019-O:145), Leo Loof(Y:2020-O:119), Marshall Warren(Y:2019-O:111), Matias Mantykivi(Y:2019-O:148), Matthew Robertson(Y:2019-O:43), Mitchell Gibson(Y:2018-O:171), Nick Sorensen(Y:2013-O:47), Rhett Pitlick(Y:2019-O:134), Tim Soderlund(Y:2017-O:137), Trevor Janicke(Y:2019-O:144), Valentin Nussbaumer(Y:2019-O:151)<br />
<h3 class="STHSTeamProspect_DraftPick">Draft Picks</h3>
<b>Year 2021: </b>BUF 1, BUF 2, CAR 3, BUF 3, BUF 4, BUF 5, MTL 5, SJS 6, NYR 7<br />
<b>Year 2022: </b>BUF 1, BUF 2, CAR 3, BUF 3, CAR 6, BUF 6, BUF 7<br />
<b>Year 2023: </b>BUF 1, BUF 2, BUF 3, BUF 4, BUF 5, BUF 6, BUF 7<br />
<b>Year 2024: </b>BUF 1, BUF 2, BUF 3, BUF 4, BUF 5, BUF 6, BUF 7<br />
<b>Year 2025: </b>BUF 1, BUF 2, BUF 3, BUF 4, BUF 5, BUF 6, BUF 7<br />
</div>
<h1 class="TeamProspects_OTT"><a id="Senators">Senators</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=21">Senators Page</a> ]
[ <a href="OTHL-ProTeamRoster.php#Senators">Pro Team Roster</a> ]
[ <a href="OTHL-ProTeamScoring.php#Senators">Pro Team Scoring</a> ]
[ <a href="OTHL-TeamFinance.php#Senators">Team Finance</a> ]
[ <a href="OTHL-ProTeamPlayersInfo.php#Senators">Pro Team PlayersInfo</a> ]
[ <a href="OTHL-ProTeamLines.php#Senators">Pro Team Lines</a> ]
[ <a href="OTHL-TeamProspects.php#Senators">Team Prospects</a> ]
[ <a href="OTHL-ProTeamSchedule.php#Senators">Pro Team Schedule</a> ]
[ <a href="OTHL-ProTeamStats.php#Senators">Pro Team Stats</a> ]
[ <a href="OTHL-ProTeamStatsVS.php#Senators">Pro Team Stats VS</a> ]
[ <a href="OTHL-TeamInjurySuspension.php#Senators">Team Injury Suspension</a> ]
[ <a href="OTHL-TeamHistory.php#Senators">Team History</a> ]
[ <a href="OTHL-TeamRecords.php#Senators">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Senators');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Senators" style="display: block;">
<h3 class="STHSTeamProspect_Prospect">Prospects - 31</h3>
Andre Lee(Y:2019-O:189), Benjamin Finkelstein(Y:2016-O:208), Blaine Byron(Y:2013-O:196), Blake Siebenaler(Y:2014-O:93), Cam Dineen(Y:2016-O:67), Cole Candella(Y:2016-O:102), Daniel Audette(Y:2014-O:108), Daniel Walcott(Y:2014-O:184), D'Artagnan Joly(Y:2017-O:128), David Quenneville(Y:2016-O:121), Drew Helleson(Y:2019-O:49), Dysin Mayo(Y:2014-O:99), Graham Knott(Y:2015-O:68), Jack Kopacka(Y:2016-O:91), Jakov Novak(Y:2018-O:196), John St. Ivany(Y:2018-O:131), Jonas Rondbjerg(Y:2017-O:72), Logan Cockerill(Y:2017-O:153), Mason Langenbrunner(Y:2020-O:194), Matt Spencer(Y:2015-O:58), Matthew Stienburg(Y:2019-O:55), Miles Gendron(Y:2014-O:92), Pascal Laberge(Y:2016-O:30), Patrick Holway(Y:2015-O:172), Patrick Moynihan(Y:2019-O:140), Scott Walford(Y:2017-O:79), Serron Noel(Y:2018-O:18), Simon Lundmark(Y:2019-O:70), Spencer Watson(Y:2014-O:101), Vojtech Budik(Y:2016-O:162), Will Reilly(Y:2017-O:217)<br />
<h3 class="STHSTeamProspect_DraftPick">Draft Picks</h3>
<b>Year 2021: </b>BOS 1, PHL 1, WPG 2, ANH 3, FLA 3, OTT 4, NYR 4, MIN 4, EDM 4, OTT 5, EDM 6, OTT 6, TOR 7<br />
<b>Year 2022: </b>OTT 1, BOS 1, OTT 2, OTT 3, WSH 3, OTT 4, OTT 5, OTT 6<br />
<b>Year 2023: </b>OTT 1, OTT 2, OTT 3, OTT 4, OTT 5, OTT 6, SJS 7<br />
<b>Year 2024: </b>OTT 1, OTT 2, OTT 3, OTT 4, OTT 5, OTT 6, OTT 7<br />
<b>Year 2025: </b>OTT 1, OTT 2, OTT 3, OTT 4, OTT 5, OTT 6, OTT 7<br />
</div>
<h1 class="TeamProspects_SJS"><a id="Sharks">Sharks</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=26">Sharks Page</a> ]
[ <a href="OTHL-ProTeamRoster.php#Sharks">Pro Team Roster</a> ]
[ <a href="OTHL-ProTeamScoring.php#Sharks">Pro Team Scoring</a> ]
[ <a href="OTHL-TeamFinance.php#Sharks">Team Finance</a> ]
[ <a href="OTHL-ProTeamPlayersInfo.php#Sharks">Pro Team PlayersInfo</a> ]
[ <a href="OTHL-ProTeamLines.php#Sharks">Pro Team Lines</a> ]
[ <a href="OTHL-TeamProspects.php#Sharks">Team Prospects</a> ]
[ <a href="OTHL-ProTeamSchedule.php#Sharks">Pro Team Schedule</a> ]
[ <a href="OTHL-ProTeamStats.php#Sharks">Pro Team Stats</a> ]
[ <a href="OTHL-ProTeamStatsVS.php#Sharks">Pro Team Stats VS</a> ]
[ <a href="OTHL-TeamInjurySuspension.php#Sharks">Team Injury Suspension</a> ]
[ <a href="OTHL-TeamHistory.php#Sharks">Team History</a> ]
[ <a href="OTHL-TeamRecords.php#Sharks">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Sharks');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Sharks" style="display: block;">
<h3 class="STHSTeamProspect_Prospect">Prospects - 47</h3>
Alex Jefferies(Y:2020-O:133), Alex Young(Y:2020-O:212), Alexander Gordin(Y:2020-O:165), Arvid Henrikson(Y:2016-O:205), Austin Osmanski(Y:2016-O:207), Austin Wong(Y:2018-O:193), Axel Rindell(Y:2020-O:164), Blake McLaughlin(Y:2018-O:69), Bobby Brink(Y:2019-O:38), Braden Doyle(Y:2019-O:187), Bryce Misley(Y:2017-O:141), Chase Pearson(Y:2015-O:120), Colby Williams(Y:2015-O:196), Connor Hurley(Y:2013-O:43), David Farrance(Y:2017-O:80), Declan McDonnell(Y:2020-O:169), Dmitry Zlodeyev(Y:2020-O:144), Eric Cornel(Y:2014-O:44), Filip Berglund(Y:2016-O:120), Filip Engaras(Y:2020-O:183), Henrik Tikkanen(Y:2020-O:185), Hugo Ollas(Y:2020-O:184), Isaak Phillips(Y:2020-O:170), Jacob Truscott(Y:2020-O:143), Jaydon Dureau(Y:2020-O:139), Jeremias Lindewall(Y:2020-O:207), Joey LaLeggia(Y:2012-O:120), John Leonard(Y:2018-O:181), Jonathan Dahlen(Y:2016-O:56), Karlis Cukste(Y:2015-O:166), Kevin Mandolese(Y:2018-O:162), Kristian Vesalainen(Y:2017-O:24), Lucas Feuk(Y:2019-O:101), Maksim Zhukov(Y:2017-O:90), Matej Blumel(Y:2019-O:96), Mike Robinson(Y:2015-O:129), Mitchell Mattson(Y:2016-O:118), Noah Ellis(Y:2020-O:174), Oliver Wahlstrom(Y:2018-O:8), Patrick Shea(Y:2015-O:203), Pavel Novak(Y:2020-O:138), Philip Kemp(Y:2017-O:199), Riley Duran(Y:2020-O:208), Stuart Skinner(Y:2017-O:87), Tarmo Reunanen(Y:2016-O:110), Timofey Spitserov(Y:2020-O:209), Timothy Gettinger(Y:2016-O:137)<br />
<h3 class="STHSTeamProspect_DraftPick">Draft Picks</h3>
<b>Year 2021: </b>TBL 2, OTT 2, SJS 2, VGK 2, VAN 3, STL 4, SJS 4<br />
<b>Year 2022: </b>SJS 1, TBL 1, SJS 2, SJS 3, SJS 4, CAR 4, SJS 5<br />
<b>Year 2023: </b>SJS 1, SJS 2, SJS 3, SJS 4, SJS 5, SJS 6<br />
<b>Year 2024: </b>SJS 1, SJS 2, SJS 3, SJS 4, SJS 5, SJS 6<br />
<b>Year 2025: </b>SJS 1, SJS 2, SJS 3, SJS 4, SJS 5, SJS 6, SJS 7<br />
</div>
<h1 class="TeamProspects_DAL"><a id="Stars">Stars</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=10">Stars Page</a> ]
[ <a href="OTHL-ProTeamRoster.php#Stars">Pro Team Roster</a> ]
[ <a href="OTHL-ProTeamScoring.php#Stars">Pro Team Scoring</a> ]
[ <a href="OTHL-TeamFinance.php#Stars">Team Finance</a> ]
[ <a href="OTHL-ProTeamPlayersInfo.php#Stars">Pro Team PlayersInfo</a> ]
[ <a href="OTHL-ProTeamLines.php#Stars">Pro Team Lines</a> ]
[ <a href="OTHL-TeamProspects.php#Stars">Team Prospects</a> ]
[ <a href="OTHL-ProTeamSchedule.php#Stars">Pro Team Schedule</a> ]
[ <a href="OTHL-ProTeamStats.php#Stars">Pro Team Stats</a> ]
[ <a href="OTHL-ProTeamStatsVS.php#Stars">Pro Team Stats VS</a> ]
[ <a href="OTHL-TeamInjurySuspension.php#Stars">Team Injury Suspension</a> ]
[ <a href="OTHL-TeamHistory.php#Stars">Team History</a> ]
[ <a href="OTHL-TeamRecords.php#Stars">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Stars');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Stars" style="display: block;">
<h3 class="STHSTeamProspect_Prospect">Prospects - 20</h3>
Alexis Gravel(Y:2018-O:130), Anthony Romano(Y:2019-O:197), Brent Pedersen(Y:2013-O:113), Cal Foote(Y:2017-O:22), Cole Perfetti(Y:2020-O:6), Gabriel Fortier(Y:2018-O:58), Hunter Jones(Y:2019-O:60), Jack Becker(Y:2015-O:209), Jamie Phillips(Y:2012-O:205), Jase Weslosky, Jerome Gauthier-Leduc(Y:2010-O:97), Kyle Burroughs(Y:2013-O:207), Mac Bennett(Y:2009-O:84), Mark Shoemaker(Y:2016-O:197), Matt Bradley(Y:2015-O:159), Matt Mahalak(Y:2011-O:160), Matt Rempe(Y:2020-O:189), Nils Aman(Y:2020-O:178), Nolan Foote(Y:2019-O:29), Shakir Mukhamadullin(Y:2020-O:36)<br />
<h3 class="STHSTeamProspect_DraftPick">Draft Picks</h3>
<b>Year 2021: </b>DAL 3, NYR 3, TOR 3, DAL 7, EDM 7<br />
<b>Year 2022: </b>DAL 3, MTL 4, DAL 5, DAL 7<br />
<b>Year 2023: </b>DAL 2, DAL 3, DAL 4, DAL 5, DAL 6, DAL 7<br />
<b>Year 2024: </b>DAL 1, DAL 2, DAL 3, DAL 4, DAL 5, DAL 6, DAL 7<br />
<b>Year 2025: </b>DAL 1, DAL 2, DAL 3, DAL 4, DAL 5, DAL 6, DAL 7<br />
</div>
<h1 class="TeamProspects_MIN"><a id="Wild">Wild</a></h1>
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=15">Wild Page</a> ]
[ <a href="OTHL-ProTeamRoster.php#Wild">Pro Team Roster</a> ]
[ <a href="OTHL-ProTeamScoring.php#Wild">Pro Team Scoring</a> ]
[ <a href="OTHL-TeamFinance.php#Wild">Team Finance</a> ]
[ <a href="OTHL-ProTeamPlayersInfo.php#Wild">Pro Team PlayersInfo</a> ]
[ <a href="OTHL-ProTeamLines.php#Wild">Pro Team Lines</a> ]
[ <a href="OTHL-TeamProspects.php#Wild">Team Prospects</a> ]
[ <a href="OTHL-ProTeamSchedule.php#Wild">Pro Team Schedule</a> ]
[ <a href="OTHL-ProTeamStats.php#Wild">Pro Team Stats</a> ]
[ <a href="OTHL-ProTeamStatsVS.php#Wild">Pro Team Stats VS</a> ]
[ <a href="OTHL-TeamInjurySuspension.php#Wild">Team Injury Suspension</a> ]
[ <a href="OTHL-TeamHistory.php#Wild">Team History</a> ]
[ <a href="OTHL-TeamRecords.php#Wild">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Wild');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Wild" style="display: block;">
<h3 class="STHSTeamProspect_Prospect">Prospects - 50</h3>
Aaron Huglen(Y:2019-O:118), Adam Brooks(Y:2016-O:83), Albin Grewe(Y:2019-O:57), Alex Formenton(Y:2017-O:55), Alexander Romanov(Y:2018-O:42), Antti Saarela(Y:2019-O:113), Beau Starrett(Y:2014-O:100), Brycen Martin(Y:2014-O:76), Carson Bantle(Y:2020-O:130), Casey Staum(Y:2016-O:181), Connor Dewar(Y:2018-O:113), Connor McClennon(Y:2020-O:124), Conor Timmins(Y:2017-O:34), Curtis Hall(Y:2018-O:103), Dmitri Samorukov(Y:2017-O:99), Dmitry Zavgorodniy(Y:2018-O:93), Eric Ciccolini(Y:2019-O:133), Evan Bouchard(Y:2018-O:10), Evan Vierling(Y:2020-O:112), Filip Hallander(Y:2018-O:51), Jachym Kondelik(Y:2018-O:129), Jack Quinn(Y:2020-O:12), Jack Thompson(Y:2020-O:117), Jacob Ingham(Y:2018-O:167), Jacob Olofsson(Y:2018-O:34), Jake Ryczek(Y:2016-O:158), Jake Walman(Y:2014-O:83), John-Jason Peterka(Y:2020-O:29), Jonathan Gruden(Y:2018-O:87), Julien Nantel(Y:2014-O:166), Karl Henriksson(Y:2019-O:64), Kasper Puutio(Y:2020-O:153), Kim Nousiainen(Y:2019-O:160), Kyle Wood(Y:2014-O:91), Lukas Cormier(Y:2020-O:71), Lukas Elvenes(Y:2017-O:97), Mathias From(Y:2016-O:135), Nicolas Daws(Y:2020-O:74), Oskar Magnusson(Y:2020-O:135), Ostap Safin(Y:2017-O:85), Roman Bychkov(Y:2019-O:154), Ryan Suzuki(Y:2019-O:26), Shane Gersich(Y:2014-O:148), Slava Demin(Y:2018-O:86), Teemu Kivihalme(Y:2013-O:135), Thomas di Pauli(Y:2012-O:136), Tim Stuetzle(Y:2020-O:3), Xavier Bouchard(Y:2018-O:147), Zac Jones(Y:2019-O:85), Zion Nybeck(Y:2020-O:86)<br />
<h3 class="STHSTeamProspect_DraftPick">Draft Picks</h3>
<b>Year 2021: </b>MIN 1, TOR 1, MIN 2, BOS 2, MIN 3, CGY 3, MIN 5, WSH 7<br />
<b>Year 2022: </b>MIN 1, MIN 2, MIN 3, MIN 4, NSH 4, MIN 5, MIN 6, MIN 7<br />
<b>Year 2023: </b>MIN 1, MIN 2, MIN 3, MIN 4, MIN 5, MIN 6, MIN 7<br />
<b>Year 2024: </b>MIN 1, MIN 2, MIN 3, MIN 4, MIN 5, MIN 6, MIN 7<br />
<b>Year 2025: </b>MIN 1, MIN 2, MIN 3, MIN 4, MIN 5, MIN 6, MIN 7<br />
</div>
<?php include "Footer.php";?>
