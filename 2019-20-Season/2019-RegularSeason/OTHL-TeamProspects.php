<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<title>OTHL - Team Prospects</title>
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
<h3 class="STHSTeamProspect_Prospect">Prospects - 46</h3>
Alban Eriksson(Y:2018-O:50), Alfons Malmstrom(Y:2016-O:143), Andreas Englund(Y:2014-O:42), Ben Thomas(Y:2014-O:98), Brendan Woods(Y:2012-O:145), Brett Davis(Y:2017-O:176), Brett Stapley(Y:2018-O:202), Cade Webber(Y:2019-O:127), Carson Soucy(Y:2013-O:164), Connor Chatham(Y:2014-O:72), Damien Riat(Y:2016-O:173), Daniel Altshuller(Y:2012-O:102), David Tendeck(Y:2018-O:182), Dmitri Semykin(Y:2018-O:112), Dominik Lakatos(Y:2017-O:171), Evgeny Svechnikov(Y:2015-O:14), Jack Lafontaine(Y:2016-O:88), Jake Kucharski(Y:2018-O:213), Jakob Ragnarsson(Y:2018-O:90), James Greenway(Y:2016-O:85), Jayden Struble(Y:2019-O:65), Joshua Jacobs(Y:2014-O:59), Liam Hawel(Y:2017-O:145), Logan Stanley(Y:2016-O:14), Luke Loheit(Y:2018-O:205), MacKenzie Entwistle(Y:2017-O:83), Marco Roy(Y:2013-O:50), Maxim Letunov(Y:2014-O:68), Merrick Madsen(Y:2013-O:174), Michael Vukojevic(Y:2019-O:84), Miska Kukkonen(Y:2018-O:174), Nate Schnarr(Y:2017-O:91), Nathan Bastian(Y:2016-O:53), Nick Abruzzese(Y:2019-O:153), Oskar Back(Y:2018-O:81), Pavel Dorofeyev(Y:2019-O:51), Reid Duke(Y:2014-O:142), Ryan Johnson(Y:2019-O:41), Ryan Zuhlsdorf(Y:2015-O:167), Samuel Montembeault(Y:2015-O:41), Santeri Virtanen(Y:2017-O:98), Sergey Zborovskiy(Y:2015-O:114), Trevor Zegras(Y:2019-O:5), Tyler Benson(Y:2016-O:33), Vincent Desharnais(Y:2016-O:203), Will Borgen(Y:2015-O:134)<br />
<h3 class="STHSTeamProspect_DraftPick">Draft Picks</h3>
<b>Year 2020: </b>COL 1, NYR 1, COL 2, COL 3, COL 4, NYR 5, COL 5, COL 6, COL 7<br />
<b>Year 2021: </b>COL 1, COL 2, COL 3, COL 4, COL 5, COL 6, COL 7<br />
<b>Year 2022: </b>COL 1, COL 2, COL 3, COL 4, COL 5, COL 6, COL 7<br />
<b>Year 2023: </b>COL 1, COL 2, COL 3, COL 4, COL 5, COL 6, COL 7<br />
<b>Year 2024: </b>COL 1, COL 2, COL 3, COL 4, COL 5, COL 6, COL 7<br />
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
<h3 class="STHSTeamProspect_Prospect">Prospects - 39</h3>
Adam Edstrom(Y:2019-O:178), Aku Raty(Y:2019-O:137), Aleksi Makela(Y:2013-O:206), Alex Kannok-Leipert(Y:2018-O:169), Andrei Popov, Artur Kayumov(Y:2016-O:57), Brett McKenzie(Y:2016-O:179), Cole Coskey(Y:2019-O:215), Colton Point(Y:2016-O:103), Cristiano Digiacinto(Y:2014-O:187), Dillon Hamaliuk(Y:2019-O:58), Dustyn McFaul(Y:2018-O:170), Fredrik Olofsson(Y:2014-O:117), Glenn Gawdin(Y:2015-O:84), Gus Young(Y:2009-O:194), Gustav Olhaver(Y:2015-O:184), Hugh McGing(Y:2018-O:165), Igor Shesterkin(Y:2014-O:105), Isak Walther(Y:2019-O:201), Jack Drury(Y:2018-O:44), Jake Leschyshyn(Y:2017-O:57), Jesper Boqvist(Y:2017-O:40), Kalle Loponen(Y:2019-O:193), Keean Washkurak(Y:2019-O:174), Logan Neaton(Y:2019-O:180), Massimo Rizzo(Y:2019-O:214), Matthew Strome(Y:2017-O:71), Mitch Vande Sompel(Y:2015-O:64), Nikita Filatov, Otto Somppi(Y:2016-O:108), Riley Hughes(Y:2018-O:208), Samuel Kurker(Y:2012-O:62), Semyon Der-Arguchintsev(Y:2018-O:83), Skyler McKenzie(Y:2017-O:192), Steven Shipley(Y:2010-O:100), Timur Ibragimov(Y:2019-O:194), Ville Pokka(Y:2012-O:42), Wyatt Kalynuk(Y:2017-O:213), Wyatte Wylie(Y:2018-O:153)<br />
<h3 class="STHSTeamProspect_DraftPick">Draft Picks</h3>
<b>Year 2020: </b>CHI 1, CHI 2, ANH 4, CAR 6, CHI 7, CAR 7<br />
<b>Year 2021: </b>CHI 1, CHI 2, OTT 3, CHI 3, CHI 4, CHI 5, CHI 6, CHI 7<br />
<b>Year 2022: </b>CHI 1, CHI 2, CHI 3, CHI 4, CHI 5, CHI 6, CHI 7<br />
<b>Year 2023: </b>CHI 1, CHI 2, CHI 3, CHI 4, CHI 5, CHI 6, BOS 7<br />
<b>Year 2024: </b>CHI 1, CHI 2, CHI 3, CHI 4, CHI 5, CHI 6, CHI 7<br />
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
<h3 class="STHSTeamProspect_Prospect">Prospects - 30</h3>
Aaron Irving(Y:2014-O:127), Aidan Mcdonough(Y:2019-O:168), Artyom Manukyan(Y:2018-O:179), Bode Wilde(Y:2018-O:36), Brandon Baddock(Y:2014-O:165), Daniil Tarasov(Y:2017-O:58), Filip Lindberg(Y:2019-O:135), Giovanni Vallati(Y:2018-O:123), Jonah Gadjovich(Y:2017-O:44), Justin Kirkland(Y:2014-O:61), Kale Howarth(Y:2017-O:103), Kole Lind(Y:2017-O:30), Lars Volden(Y:2011-O:129), Lauri Pajuniemi(Y:2018-O:137), Luka Burzan(Y:2019-O:166), Lukas Jasek(Y:2015-O:139), Mason Geertsen(Y:2013-O:77), Michael Prapavessis(Y:2014-O:119), Mikhail Shalagin(Y:2019-O:177), Nicolas Aube-Kubel(Y:2014-O:47), Parker Foo(Y:2017-O:107), Quinn Hughes(Y:2018-O:6), Radel Fazleev(Y:2014-O:175), Sampo Ranta(Y:2018-O:73), Seth Barton(Y:2018-O:72), Thatcher Demko(Y:2014-O:29), Tyler Madden(Y:2018-O:66), Valtteri Puustinen(Y:2019-O:182), Wiley Sherman(Y:2013-O:179), William Lockwood(Y:2016-O:70)<br />
<h3 class="STHSTeamProspect_DraftPick">Draft Picks</h3>
<b>Year 2020: </b>CLB 1, BUF 1, CLB 2, EDM 2, MIN 3, WSH 3, NYR 3, CGY 3, CLB 4, PHL 4, WSH 5, CGY 5, CLB 6<br />
<b>Year 2021: </b>NYR 1, CLB 1, OTT 1, STL 2, CLB 2, CAR 2, EDM 3, CLB 3, WSH 4, CLB 4, WSH 5, CLB 5, CLB 6, WSH 6, PHL 6, WSH 7, MIN 7<br />
<b>Year 2022: </b>CLB 1, CLB 2, CLB 3, CLB 4, CLB 5, CLB 6, EDM 7, CLB 7<br />
<b>Year 2023: </b>CLB 1, CLB 2, CLB 3, CLB 4, CLB 5, CLB 6, PHL 6, CLB 7<br />
<b>Year 2024: </b>CLB 1, CLB 2, CLB 3, CLB 4, CLB 5, CLB 6, CLB 7<br />
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
<h3 class="STHSTeamProspect_Prospect">Prospects - 30</h3>
Adam Boqvist(Y:2018-O:7), Alexandre Texier(Y:2017-O:53), Anttoni Honka(Y:2019-O:68), Bobby Brink(Y:2019-O:38), Cale Fleury(Y:2017-O:69), Chad Krys(Y:2016-O:65), Daniel Bukac(Y:2017-O:202), Denis Guryanov(Y:2015-O:17), Dominic Basse(Y:2019-O:198), Henri Nikkanen(Y:2019-O:90), Hunter Skinner(Y:2019-O:157), Jack Ramsey(Y:2014-O:195), Jacob Bernard-Docker(Y:2018-O:38), Jacob Leguerrier(Y:2019-O:161), Jakub Zboril(Y:2015-O:20), Janne Kuokkanen(Y:2016-O:60), Jesper Eliasson(Y:2018-O:106), Julien Gauthier(Y:2016-O:23), Lukas Vejdemo(Y:2015-O:86), Mathias Laferriere(Y:2018-O:146), Matteo Gennaro(Y:2015-O:206), McKade Webster(Y:2019-O:216), Milan Kloucek(Y:2018-O:215), Niclas Almari(Y:2016-O:190), Nicolas Beaudin(Y:2018-O:21), Nikita Alexandrov(Y:2019-O:44), Peter Thome(Y:2016-O:163), Petteri Lindbohm(Y:2012-O:183), Peyton Krebs(Y:2019-O:12), Vasili Podkolzin(Y:2019-O:6)<br />
<h3 class="STHSTeamProspect_DraftPick">Draft Picks</h3>
<b>Year 2020: </b>STL 1, CGY 1, STL 2, PHL 2, ANH 3, STL 3, STL 7<br />
<b>Year 2021: </b>STL 3, CAR 4, NYR 5, CAR 5, STL 5, STL 7<br />
<b>Year 2022: </b>STL 1, STL 2, STL 3, STL 4, STL 5, STL 6, STL 7<br />
<b>Year 2023: </b>STL 1, STL 2, STL 3, STL 4, STL 5, STL 6, STL 7<br />
<b>Year 2024: </b>STL 1, STL 2, STL 3, STL 4, STL 5, STL 6, STL 7<br />
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
<h3 class="STHSTeamProspect_Prospect">Prospects - 37</h3>
Alexei Toropchenko(Y:2017-O:106), Antti Palojarvi(Y:2017-O:206), Brandon Saigeon(Y:2018-O:128), Cameron Clarke(Y:2016-O:175), Devante Stephens(Y:2015-O:132), Dmitriy Zaitsev(Y:2016-O:202), Egor Serdyuk(Y:2019-O:159), Erik Portillo(Y:2019-O:93), Erik Walli-Walterholm(Y:2017-O:181), Ethan Keppen(Y:2019-O:87), Gabriel Fontaine(Y:2016-O:193), Giorgio Estephan(Y:2015-O:141), Ivan Nalimov(Y:2014-O:150), Jacob Golden(Y:2017-O:177), Jan Drozg(Y:2017-O:148), Jared Moe(Y:2018-O:187), Jens Looke(Y:2015-O:85), Jesper Sellgren(Y:2018-O:176), Lucas Feuk(Y:2019-O:101), Manuel Wiederer(Y:2016-O:151), Markus Phillips(Y:2017-O:96), Matej Blumel(Y:2019-O:96), Matthew Cairns(Y:2016-O:95), Matthew Thiessen(Y:2018-O:194), Michal Teply(Y:2019-O:97), Nikolaj Krag Christensen(Y:2016-O:201), Philip Nyberg(Y:2016-O:171), Robbie Stucker(Y:2017-O:200), Ryan Collins(Y:2014-O:64), Ryan McGregor(Y:2017-O:201), Semyon Kizimov(Y:2018-O:216), Shawn Boudrias(Y:2018-O:168), Todd Burgess(Y:2016-O:129), Tyler Moy(Y:2015-O:193), Victor Berglund(Y:2017-O:182), William Worge-Kreu(Y:2018-O:177), Yegor Sharangovich(Y:2018-O:140)<br />
<h3 class="STHSTeamProspect_DraftPick">Draft Picks</h3>
<b>Year 2020: </b>STL 5, CHI 5, NJD 5, VAN 5, NYR 6, OTT 6, BUF 6<br />
<b>Year 2021: </b>STL 6, BOS 7<br />
<b>Year 2022: </b>BOS 1, BOS 2, BOS 3, BOS 5, BOS 6, BOS 7<br />
<b>Year 2023: </b>BOS 1, BOS 2, BOS 3, BOS 4, BOS 5, BOS 6<br />
<b>Year 2024: </b>BOS 1, BOS 2, BOS 3, BOS 4, BOS 5, BOS 6, BOS 7<br />
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
<h3 class="STHSTeamProspect_Prospect">Prospects - 8</h3>
Cameron Crotty(Y:2017-O:101), Chase Priskie(Y:2016-O:128), Eric Roy(Y:2013-O:102), Felix Sandstrom(Y:2015-O:40), Matthew Phillips(Y:2016-O:97), Patrick Harper(Y:2016-O:126), Tyler Soy(Y:2016-O:127), Xavier Bernard(Y:2018-O:100)<br />
<h3 class="STHSTeamProspect_DraftPick">Draft Picks</h3>
<b>Year 2020: </b><br />
<b>Year 2021: </b>MTL 1, MTL 2, MTL 3, MTL 4, MTL 6, PHL 7<br />
<b>Year 2022: </b>MTL 1, MTL 2, MTL 3, MTL 4, MTL 5, MTL 6, PHL 6, PHL 7, MTL 7<br />
<b>Year 2023: </b>MTL 1, MTL 2, MTL 3, MTL 4, MTL 5, MTL 6, MTL 7<br />
<b>Year 2024: </b>MTL 1, MTL 2, MTL 3, MTL 4, MTL 5, MTL 6, MTL 7<br />
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
<h3 class="STHSTeamProspect_Prospect">Prospects - 49</h3>
Arsen Khisamutdinov(Y:2019-O:184), Boris Katchouk(Y:2016-O:51), Brian Pinho(Y:2013-O:181), C.J. Suess(Y:2014-O:155), Clayton Phillips(Y:2017-O:125), Cole Ully(Y:2013-O:127), Declan Chisholm(Y:2018-O:156), Dennis Yan(Y:2015-O:60), Drew Helleson(Y:2019-O:49), Emil Galimov(Y:2013-O:204), Frederic Allard(Y:2016-O:77), Gabriel Carlsson(Y:2015-O:38), Garrett Pilon(Y:2016-O:114), Harrison Blaisdell(Y:2019-O:91), Igor Bobkov(Y:2009-O:63), Jacob McGrew(Y:2017-O:184), Jakub Lauko(Y:2018-O:63), Jesper Lindgren(Y:2015-O:87), Joel Daccord(Y:2015-O:182), Joel Farabee(Y:2018-O:14), John Dahlstrom(Y:2015-O:204), Jonathan Ang(Y:2016-O:96), Jonathan Kovacevic(Y:2017-O:70), Linus Nassen(Y:2016-O:98), Magnus Chrona(Y:2018-O:172), Mattias Norlinder(Y:2019-O:77), Max Gortz(Y:2012-O:170), Maxim Shalunov(Y:2011-O:122), Michael Downing(Y:2013-O:96), Michael Karow(Y:2017-O:156), Michael McLeod(Y:2016-O:12), Michael Pezzetta(Y:2016-O:192), Mikhail Vorobyov(Y:2015-O:116), Mitchell Hoelscher(Y:2018-O:178), Nathan Smith(Y:2018-O:109), Nick Pastujov(Y:2016-O:174), Owen Lindmark(Y:2019-O:136), Pavel Kraskovsky(Y:2014-O:128), Riley Tufte(Y:2016-O:26), Roddy Ross(Y:2019-O:156), Spencer Stastney(Y:2018-O:136), Tanner Kaspick(Y:2016-O:147), Troy Josephs(Y:2013-O:209), Tuukka Tieksola(Y:2019-O:106), Tyler Nanne(Y:2014-O:185), Tyler Steenbergen(Y:2017-O:105), Victor Soderstrom(Y:2019-O:18), Zachary Emond(Y:2018-O:186), Zachary Leslie(Y:2013-O:190)<br />
<h3 class="STHSTeamProspect_DraftPick">Draft Picks</h3>
<b>Year 2020: </b>NYI 3, ARI 3, NYI 4, VGK 6, ANH 6<br />
<b>Year 2021: </b>VAN 1, VAN 2, VAN 3, WSH 3, VAN 6, VAN 7<br />
<b>Year 2022: </b>VAN 1, VAN 2, VAN 3, VAN 4, VAN 5, VAN 6, VAN 7<br />
<b>Year 2023: </b>VAN 1, VAN 2, VAN 3, VAN 4, VAN 5, VAN 6, VAN 7<br />
<b>Year 2024: </b>VAN 1, VAN 2, VAN 3, VAN 4, VAN 5, VAN 6, VAN 7<br />
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
<h3 class="STHSTeamProspect_Prospect">Prospects - 31</h3>
Aidan Dudas(Y:2018-O:98), Alex Newhook(Y:2019-O:14), Alexander Dergachyov(Y:2015-O:55), Andrei Mironov(Y:2015-O:92), Arthur Kaliyev(Y:2019-O:25), Blade Jenkins(Y:2018-O:114), Calvin Petersen(Y:2013-O:134), Cameron Darcy(Y:2014-O:179), Carter Berger(Y:2019-O:128), Dmitri Kugryshev, Drake Rymsha(Y:2017-O:92), Dylan Gambrell(Y:2016-O:50), Filip Cederqvist(Y:2019-O:115), Frederik Tiffels(Y:2015-O:171), Gabriel Vilardi(Y:2017-O:6), Henry Thrun(Y:2019-O:105), Jacob Moverare(Y:2016-O:90), Jakob Pelletier(Y:2019-O:28), Jamieson Rees(Y:2019-O:47), Jaret Anderson-Dolan(Y:2017-O:39), Kyle Capobianco(Y:2015-O:69), Mattias Lindstrom(Y:2009-O:91), Nicolas Meloche(Y:2015-O:49), Nikita Gusev(Y:2012-O:109), Reilly Webb(Y:2017-O:190), Riley Damiani(Y:2018-O:118), Ronnie Attard(Y:2019-O:72), Samuel Fagemo(Y:2019-O:36), Tyce Thompson(Y:2019-O:116), Viktor Lodin(Y:2019-O:121), Ville Husso(Y:2014-O:79)<br />
<h3 class="STHSTeamProspect_DraftPick">Draft Picks</h3>
<b>Year 2020: </b>WSH 1, NYI 2, BOS 2<br />
<b>Year 2021: </b>WSH 1, WSH 2<br />
<b>Year 2022: </b>WSH 1, WSH 2, WSH 4, WSH 6, WSH 7<br />
<b>Year 2023: </b>WSH 1, WSH 2, WSH 3, WSH 4, WSH 5, WSH 6, CHI 7, WSH 7<br />
<b>Year 2024: </b>WSH 1, WSH 2, WSH 3, WSH 4, WSH 5, WSH 6, WSH 7<br />
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
<h3 class="STHSTeamProspect_Prospect">Prospects - 33</h3>
Alexandr Darin(Y:2019-O:112), Cam York(Y:2019-O:19), Dean Stewart(Y:2016-O:198), Dominik Masin(Y:2014-O:46), Eamon McAdam(Y:2013-O:83), Elmer Soderblom(Y:2019-O:155), Erik Kallgren(Y:2015-O:163), Ethan Bear(Y:2015-O:113), Filip Larsson(Y:2016-O:191), Filip Westerlund(Y:2017-O:49), Ivan Prosvetov(Y:2018-O:154), Jacob Peterson(Y:2017-O:149), Joey Keane(Y:2018-O:107), Jonathan Dugan(Y:2017-O:152), Kaapo Kahkonen(Y:2014-O:80), Kirill Kaprizov(Y:2015-O:121), Libor Hajek(Y:2016-O:34), Linus Soderstrom(Y:2014-O:107), Lukas Rousek(Y:2019-O:183), Maksim Sushko(Y:2017-O:140), Matthew Hellickson(Y:2017-O:216), Nico Gross(Y:2018-O:92), Patrik Siikanen(Y:2018-O:207), Peter Diliberatore(Y:2018-O:191), Philippe Desrosiers(Y:2013-O:68), Roope Laavainen(Y:2017-O:142), Samuel Sjolund(Y:2019-O:143), Scott Kosmachuk(Y:2012-O:44), Sean Durzi(Y:2018-O:61), Tanner Richard(Y:2012-O:99), Trenton Bourque(Y:2017-O:204), Urho Vaakanainen(Y:2017-O:20), Yaroslav Kosov(Y:2011-O:143)<br />
<h3 class="STHSTeamProspect_DraftPick">Draft Picks</h3>
<b>Year 2020: </b>ARI 1, ARI 2, TBL 4, MTL 5, ARI 6<br />
<b>Year 2021: </b>ARI 1, ARI 2, TBL 5, ARI 5, ARI 6, ARI 7, MTL 7, VGK 7<br />
<b>Year 2022: </b>ARI 1, ARI 2, ARI 3, ARI 4, ARI 5, ARI 6, ARI 7<br />
<b>Year 2023: </b>ARI 1, ARI 2, ARI 3, ARI 4, ARI 5, ARI 6, ARI 7<br />
<b>Year 2024: </b>ARI 1, ARI 2, ARI 3, ARI 4, ARI 5, ARI 6, ARI 7<br />
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
<h3 class="STHSTeamProspect_Prospect">Prospects - 32</h3>
Adam Ginning(Y:2018-O:45), Antoine Morand(Y:2017-O:65), Blake Speers(Y:2015-O:74), Brent Gates(Y:2015-O:124), Cole Schwindt(Y:2019-O:122), Connor Hall(Y:2016-O:75), Domenick Fensore(Y:2019-O:107), Filip Sveningsson(Y:2017-O:174), Gianni Fairbrother(Y:2019-O:86), Hunter Drew(Y:2018-O:188), Igor Shvyrev(Y:2017-O:112), Jake Massie(Y:2015-O:191), Jakob Stukel(Y:2016-O:170), Jan Jenik(Y:2018-O:67), Jay O'Brien(Y:2018-O:30), Kirill Marchenko(Y:2018-O:55), Leon Gawanke(Y:2017-O:144), Linus Lindstrand Kronholm(Y:2018-O:138), Lucas Carlsson(Y:2016-O:140), Mads Sogaard(Y:2019-O:46), Mark Kastelic(Y:2019-O:139), Matthew Boldy(Y:2019-O:15), Nathan Noel(Y:2016-O:80), Nikita Okhotyuk(Y:2019-O:79), Niko Mikkola(Y:2015-O:155), Quinn Schmiemann(Y:2019-O:186), Ryan Lohin(Y:2016-O:200), Ryan O'Reilly(Y:2018-O:116), Ryan Shea(Y:2015-O:154), Thomas Schemitsch(Y:2015-O:77), Tom Nilsson(Y:2011-O:92), Tomas Vomacka(Y:2017-O:154)<br />
<h3 class="STHSTeamProspect_DraftPick">Draft Picks</h3>
<b>Year 2020: </b>NJD 1, NJD 2, NJD 3, NJD 4, CGY 4, NJD 7<br />
<b>Year 2021: </b>NJD 1, NJD 2, NJD 3, NJD 4, NJD 5, NJD 6, NJD 7<br />
<b>Year 2022: </b>NJD 1, NJD 2, NJD 3, NJD 4, NJD 5, NJD 6, NJD 7<br />
<b>Year 2023: </b>NJD 1, NJD 2, NJD 3, NJD 4, NJD 5, NJD 6, NJD 7<br />
<b>Year 2024: </b>NJD 1, NJD 2, NJD 3, NJD 4, NJD 5, NJD 6, NJD 7<br />
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
<h3 class="STHSTeamProspect_Prospect">Prospects - 40</h3>
Adam Ruzicka(Y:2017-O:93), Alexander Volkov(Y:2017-O:48), Alexei Lipanov(Y:2017-O:62), Andrew Nielsen(Y:2015-O:95), Angus Crookshank(Y:2018-O:134), Anthony Salinitri(Y:2016-O:189), Brandon Hickey(Y:2014-O:58), Callum Booth(Y:2015-O:75), Cameron Hughes(Y:2015-O:170), Cliff Pu(Y:2016-O:68), Dylan Samberg(Y:2017-O:41), Eetu Tuulola(Y:2016-O:99), Filip Kral(Y:2018-O:110), German Rubtsov(Y:2016-O:21), Grigori Denisenko(Y:2018-O:17), Jesse Gabrielle(Y:2015-O:106), Jordan Kyrou(Y:2016-O:45), Josh Wesley(Y:2014-O:103), Julius Nattinen(Y:2015-O:71), Kevin Stenlund(Y:2015-O:94), Kieffer Bellows(Y:2016-O:20), Lane Zablocki(Y:2017-O:81), Luke Green(Y:2016-O:69), Martin Pospisil(Y:2018-O:108), Mason McDonald(Y:2014-O:35), Mattias Emilio Pettersen(Y:2018-O:145), Matvey Guskov(Y:2019-O:109), Mikko Kokkonen(Y:2019-O:73), Milos Roman(Y:2018-O:96), Mitchell Stephens(Y:2015-O:42), Moritz Seider(Y:2019-O:13), Noah Cates(Y:2017-O:118), Noah Dobson(Y:2018-O:12), Rasmus Sandin(Y:2018-O:31), Ryan MacInnis(Y:2014-O:45), Samuel Poulin(Y:2019-O:24), Scott Perunovich(Y:2018-O:43), Simon Holmstrom(Y:2019-O:31), Vasily Glotov(Y:2016-O:178), Yegor Korshkov(Y:2016-O:40)<br />
<h3 class="STHSTeamProspect_DraftPick">Draft Picks</h3>
<b>Year 2020: </b>OTT 1, FLA 2, BUF 2, EDM 4, CHI 4, OTT 5, VGK 5, NSH 5, ARI 5, VGK 7, BUF 7, ANH 7<br />
<b>Year 2021: </b>ANH 1, ANH 2, OTT 2, CAR 3, DET 4, ANH 4, ANH 5, ANH 7<br />
<b>Year 2022: </b>ANH 1, ANH 2, ANH 3, ANH 4, ANH 5, ANH 6, ANH 7<br />
<b>Year 2023: </b>ANH 1, ANH 2, ANH 3, ANH 4, ANH 5, ANH 6, ANH 7<br />
<b>Year 2024: </b>ANH 1, ANH 2, ANH 3, ANH 4, ANH 5, ANH 6, ANH 7<br />
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
<h3 class="STHSTeamProspect_Prospect">Prospects - 39</h3>
Alex Dostie(Y:2016-O:146), Alex Green(Y:2018-O:150), Arseny Gritsyuk(Y:2019-O:131), Artemi Kniazev(Y:2019-O:59), Benjamin Gallacher(Y:2010-O:127), Benton Maass(Y:2017-O:191), Cole Moberg(Y:2019-O:170), Colin Blackwell(Y:2011-O:195), Damian Giroux(Y:2018-O:149), David Gustafsson(Y:2018-O:56), Eetu Makiniemi(Y:2017-O:134), Evan Cormier(Y:2016-O:142), Jack Badini(Y:2017-O:119), Jacob Cederholm(Y:2016-O:134), Jake Bean(Y:2016-O:17), Jake Pivonka(Y:2018-O:119), Jason Robertson(Y:2017-O:37), Jordan Harris(Y:2018-O:101), Kevin Bahl(Y:2018-O:57), Kody Clark(Y:2018-O:48), Liam Coughlin(Y:2014-O:159), Linus Karlsson(Y:2018-O:84), Lukas Dostal(Y:2018-O:80), Martins Dzierkals(Y:2015-O:100), Nick Merkley(Y:2015-O:18), Nick Robertson(Y:2019-O:39), Oskari Laaksonen(Y:2017-O:121), Otto Kivenmaki(Y:2018-O:203), Patrick Kudla(Y:2016-O:194), Raphael Lavoie(Y:2019-O:32), Rasmus Asplund(Y:2016-O:36), Ryan Jones(Y:2016-O:186), Ryan Merkley(Y:2018-O:26), Shane Eiserman(Y:2014-O:123), Tomas Mazura(Y:2019-O:167), Trent Miner(Y:2019-O:130), Ukko-Pekka Luukkonen(Y:2017-O:45), Vitaly Abramov(Y:2016-O:44), Vladimir Bobylev(Y:2016-O:116)<br />
<h3 class="STHSTeamProspect_DraftPick">Draft Picks</h3>
<b>Year 2020: </b>NYR 2, CGY 2, SJS 2, BOS 3, OTT 4, TOR 5, NJD 6, VAN 6, CGY 6, EDM 7, BOS 7, ARI 7<br />
<b>Year 2021: </b>CGY 1, STL 1, NYR 2, CGY 2, CGY 4, CGY 5, NYR 6, BOS 6, CGY 7<br />
<b>Year 2022: </b>CGY 1, CGY 2, CGY 3, CGY 4, CGY 5, CGY 6, CGY 7<br />
<b>Year 2023: </b>CGY 1, CGY 2, CGY 3, CGY 4, CGY 5, CGY 6, CGY 7<br />
<b>Year 2024: </b>CGY 1, CGY 2, CGY 3, CGY 4, CGY 5, CGY 6, CGY 7<br />
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
<h3 class="STHSTeamProspect_Prospect">Prospects - 46</h3>
Alexis Gravel(Y:2018-O:130), Andre Lee(Y:2019-O:189), Andrew Peeke(Y:2016-O:28), Anthony Romano(Y:2019-O:197), Arvid Costmar(Y:2019-O:208), Axel Bergkvist(Y:2019-O:203), Ben Brinkman(Y:2019-O:196), Bowen Byram(Y:2019-O:3), Braden Doyle(Y:2019-O:187), Brandon Duhaime(Y:2016-O:122), Carson Meyer(Y:2017-O:194), Danil Savunov(Y:2019-O:210), Denis Smirnov(Y:2017-O:120), Emil Bemstrom(Y:2017-O:109), Filip Zadina(Y:2018-O:5), Greg Meireles(Y:2019-O:205), Jeremy Michel(Y:2019-O:209), Jermaine Loewen(Y:2018-O:195), Jett Woo(Y:2018-O:32), Juuso Parssinen(Y:2019-O:190), Kevin Wall(Y:2019-O:191), Kristian Roykas-Marthinsen(Y:2017-O:195), Liam Kirk(Y:2018-O:76), Linus Weissbach(Y:2017-O:162), Marc Del Gaizo(Y:2019-O:126), Mason Shaw(Y:2017-O:77), Maxence Guenette(Y:2019-O:195), Maxim Denezhkin(Y:2019-O:200), Nick Swaney(Y:2017-O:172), Nikita Nesterenko(Y:2019-O:192), Nolan Stevens(Y:2016-O:130), Olle Eriksson-Ek(Y:2017-O:130), Olle Lycksell(Y:2017-O:159), Radim Salda(Y:2018-O:190), Rafael Harvey-Pinard(Y:2019-O:207), Ross Colton(Y:2016-O:106), Sam Hentges(Y:2018-O:198), Santeri Airola(Y:2019-O:202), Santeri Hatakka(Y:2019-O:212), Tim Berni(Y:2018-O:175), Trey Fix-Wolansky(Y:2018-O:189), Ty Taylor(Y:2018-O:212), Tyler Angle(Y:2019-O:204), Tyler Wall(Y:2016-O:164), Vadim Zherenko(Y:2019-O:199), Zach Fischer(Y:2017-O:168)<br />
<h3 class="STHSTeamProspect_DraftPick">Draft Picks</h3>
<b>Year 2020: </b>PHL 1, NYI 6, CLB 7, OTT 7, FLA 7<br />
<b>Year 2021: </b>PHL 1, TOR 7, CAR 7, FLA 7<br />
<b>Year 2022: </b>PHL 1, PHL 5<br />
<b>Year 2023: </b>PHL 1, PHL 2, PHL 3, PHL 4, PHL 5, PHL 7, FLA 7<br />
<b>Year 2024: </b>PHL 1, PHL 2, PHL 3, PHL 4, PHL 5, PHL 6, PHL 7<br />
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
Adam Beckman(Y:2019-O:78), Adam Werner(Y:2016-O:177), Aleksi Heponiemi(Y:2017-O:43), Arnaud Durandeau(Y:2017-O:164), Axel Andersson(Y:2018-O:64), Brandon Kruse(Y:2018-O:155), Brayden Tracey(Y:2019-O:30), Calen Addison(Y:2018-O:47), Cam Hillis(Y:2018-O:70), Cole Guttman(Y:2017-O:178), Cole Hults(Y:2017-O:188), David Noel(Y:2017-O:139), Dawson Barteaux(Y:2018-O:163), Demetrios Koumontzis(Y:2018-O:117), Ethan Phillips(Y:2019-O:95), Filip Johansson(Y:2018-O:39), Gavin Hain(Y:2018-O:183), Graeme Clarke(Y:2019-O:81), Gustav Lindstrom(Y:2017-O:51), Jake Evans(Y:2014-O:176), Jordan Spence(Y:2019-O:88), Josh Brook(Y:2017-O:64), Justin Almeida(Y:2018-O:124), Justin Schutz(Y:2018-O:180), K'Andre Miller(Y:2018-O:24), Kyle Olson(Y:2017-O:115), Lenni Killinen(Y:2018-O:132), Liam Foudy(Y:2018-O:25), Logan Hutsko(Y:2018-O:102), Luke Henman(Y:2018-O:105), Mason Millman(Y:2019-O:102), Mikhail Abramov(Y:2019-O:104), Morgan Geekie(Y:2017-O:66), Nicholas Porco(Y:2019-O:123), Nick Henry(Y:2017-O:95), Nicklaus Perbix(Y:2017-O:198), Philip Kemp(Y:2017-O:199), Pierre-Olivier Joseph(Y:2017-O:31), Quinn Olson(Y:2019-O:92), Reece Newkirk(Y:2019-O:124), Riley Stotts(Y:2018-O:95), Samuel Bolduc(Y:2019-O:61), Samuel Houde(Y:2018-O:160), Sasha Mutala(Y:2019-O:119), Shane Bowers(Y:2017-O:35), Tobias Geisser(Y:2017-O:157), Tyler Parsons(Y:2016-O:46), Tyler Tucker(Y:2018-O:200), Vitali Kravtsov(Y:2018-O:11), Zachary Gallant(Y:2017-O:89)<br />
<h3 class="STHSTeamProspect_DraftPick">Draft Picks</h3>
<b>Year 2020: </b>DET 1, VGK 1, LAK 1, VGK 2, ANH 2, DET 3, VAN 3, VGK 3, CLB 3, EDM 3, WPG 4, FLA 4<br />
<b>Year 2021: </b>VGK 1, VGK 2, LAK 2, VGK 3, ARI 3, VAN 4, VGK 4, ARI 4, BOS 4, PHL 4, BOS 5<br />
<b>Year 2022: </b>VGK 1, VGK 2, VGK 3, DET 3, VGK 4, BOS 4, VGK 5, VGK 6<br />
<b>Year 2023: </b>VGK 1, VGK 2, VGK 3, VGK 4, VGK 5, VGK 6, VGK 7<br />
<b>Year 2024: </b>VGK 1, VGK 2, VGK 3, VGK 4, VGK 5, VGK 6, VGK 7<br />
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
<h3 class="STHSTeamProspect_Prospect">Prospects - 51</h3>
Albert Johansson(Y:2019-O:69), Alec Regula(Y:2018-O:75), Aleksi Saarela(Y:2015-O:83), Alex Beaucage(Y:2019-O:67), Alexander Alexeyev(Y:2018-O:37), Alexander Khovanov(Y:2018-O:68), Andrei Altybarmakyan(Y:2017-O:75), Axel Jonsson-Fjallby(Y:2016-O:160), Ben Jones(Y:2017-O:214), Cayden Primeau(Y:2017-O:127), Daniil Misyul(Y:2019-O:74), Danila Zhuravlyov(Y:2018-O:122), Dmitry Sokolov(Y:2016-O:86), Dominik Bokk(Y:2018-O:23), Egor Afanasyev(Y:2019-O:42), Filip Gustavsson(Y:2016-O:43), Jack Hughes(Y:2019-O:2), Jake Wise(Y:2018-O:54), Jakub Skarek(Y:2018-O:77), Jeremy Roy(Y:2015-O:33), Jesse Ylonen(Y:2018-O:41), Jonatan Berggren(Y:2018-O:22), Jonathan Dahlen(Y:2016-O:56), Jonny Tychonick(Y:2018-O:53), Kaapo Kakko(Y:2019-O:1), Kaedan Korczak(Y:2019-O:53), Kirill Maksimov(Y:2017-O:123), Lucas Johansen(Y:2016-O:27), Matej Pekar(Y:2018-O:82), Mattias Samuelsson(Y:2018-O:40), Maxim Cajkovic(Y:2019-O:66), Michael Anderson(Y:2017-O:116), Mikhail Berdin(Y:2016-O:113), Nick Suzuki(Y:2017-O:14), Nikolai Kovalenko(Y:2018-O:139), Olof Lindbom(Y:2018-O:52), Patrik Puistola(Y:2019-O:56), Philipp Kurashev(Y:2018-O:79), Riley Sutter(Y:2018-O:99), Robert Mastrosimone(Y:2019-O:50), Robin Salo(Y:2017-O:61), Ruslan Iskhakov(Y:2018-O:49), Ryan McLeod(Y:2018-O:33), Sasha Chmelevski(Y:2017-O:117), Semyon Chystyakov(Y:2019-O:132), Shamil Shmakov(Y:2018-O:197), Stelio Mattheos(Y:2017-O:78), Ty Emberson(Y:2018-O:91), Vladislav Firstov(Y:2019-O:45), Yegor Rykov(Y:2016-O:172), Yegor Spiridonov(Y:2019-O:99)<br />
<h3 class="STHSTeamProspect_DraftPick">Draft Picks</h3>
<b>Year 2020: </b>CAR 1, TBL 1, VAN 2, PIT 3, CAR 4, PIT 5, NYR 7<br />
<b>Year 2021: </b>CAR 1, TBL 3, ANH 3, PIT 4, ANH 6, CAR 6, SJS 6, CGY 6, BUF 6<br />
<b>Year 2022: </b>CAR 1, CAR 2, CAR 3, TBL 3, CAR 4, CAR 5, TBL 5, CAR 6, TBL 6, VGK 7, CAR 7<br />
<b>Year 2023: </b>CAR 1, CAR 2, CAR 3, CAR 4, CAR 5, CAR 6, CAR 7<br />
<b>Year 2024: </b>CAR 1, CAR 2, CAR 3, CAR 4, CAR 5, CAR 6, CAR 7<br />
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
<h3 class="STHSTeamProspect_Prospect">Prospects - 43</h3>
Alexandre Mallet(Y:2012-O:77), Anatoli Golyshev(Y:2016-O:66), Anthony Louis(Y:2013-O:200), Austin Levi(Y:2010-O:107), Austin Wuthrich(Y:2012-O:128), Brian Ferlin(Y:2011-O:135), Cale Makar(Y:2017-O:5), Colin Smith(Y:2012-O:181), Daniel Bernhardt(Y:2015-O:98), David Westlund(Y:2014-O:192), Dmitry Voronkov(Y:2019-O:120), Evan Cowley(Y:2013-O:112), Hudson Elynuik(Y:2016-O:87), Ivan Morozov(Y:2018-O:60), Jackson Perbix(Y:2018-O:142), Jacob Bryson(Y:2017-O:133), Jake Schmaltz(Y:2019-O:213), Jared McIsaac(Y:2018-O:35), Jasper Weatherby(Y:2018-O:120), Keaton Thompson(Y:2013-O:98), Kirill Ustimenko(Y:2017-O:113), Kris Oldham(Y:2015-O:178), Louis Belpedio(Y:2014-O:111), Ludvig Rensfeldt(Y:2010-O:42), Ludwig Bystrom(Y:2012-O:36), Mac Hollowell(Y:2018-O:125), Martin Fehervary(Y:2018-O:65), Martin Has(Y:2019-O:165), Matthew Stienburg(Y:2019-O:55), Michael Kesselring(Y:2018-O:173), Michael Paliotta(Y:2011-O:73), Nikolas Koberstein(Y:2014-O:145), Paul Bittner(Y:2015-O:27), Rasmus Bengtsson(Y:2011-O:56), Rinat Valiev(Y:2014-O:74), Rushan Rafikov(Y:2013-O:145), Ryan Pilon(Y:2015-O:108), Tyler Ganly(Y:2013-O:139), Veeti Vainio(Y:2015-O:111), Vladislav Kara(Y:2017-O:160), William Bitten(Y:2016-O:48), Yan Pavel Laplante(Y:2013-O:74), Zach Nastasiuk(Y:2013-O:49)<br />
<h3 class="STHSTeamProspect_DraftPick">Draft Picks</h3>
<b>Year 2020: </b>BOS 1, CAR 2, BUF 4, MIN 4, ANH 5, WSH 6, NYI 7<br />
<b>Year 2021: </b>NYI 1, NYI 2, NYI 3, NYR 3, BOS 3, NYI 4, VAN 5, NYI 5, NYI 6, NYI 7<br />
<b>Year 2022: </b>NYI 1, NYI 2, NYR 3, NYI 3, NYR 4, NYI 4, NYI 5, NYI 6, NYI 7<br />
<b>Year 2023: </b>NYI 1, NYI 2, NYI 3, NYI 4, NYI 5, NYI 6, NYI 7<br />
<b>Year 2024: </b>NYI 1, NYI 2, NYI 3, NYI 4, NYI 5, NYI 6, NYI 7<br />
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
<h3 class="STHSTeamProspect_Prospect">Prospects - 50</h3>
Adam Smith(Y:2016-O:206), Akil Thomas(Y:2018-O:29), Ales Stezka(Y:2015-O:117), Alex Lintuniemi(Y:2014-O:71), Beck Malenstyn(Y:2016-O:185), Brett Pollock(Y:2014-O:50), Carsen Twarynski(Y:2016-O:93), Connor Ingram(Y:2016-O:101), David Kase(Y:2015-O:133), Eetu Luostarinen(Y:2017-O:36), Eetu Pakkila(Y:2018-O:199), Fredrik Karlstrom(Y:2016-O:107), Grant Mismash(Y:2017-O:56), Hugo Alnefelt(Y:2019-O:98), Jansen Harkins(Y:2015-O:36), Jeremy Helvig(Y:2016-O:153), Joni Tuulola(Y:2015-O:164), Joona Koppanen(Y:2016-O:167), Joonas Lyytinen(Y:2014-O:140), Judd Caulfield(Y:2019-O:129), Kale Clague(Y:2016-O:38), Kasper Bjorkqvist(Y:2016-O:72), Kieran Ruscheinski(Y:2019-O:217), Leevi Aaltonen(Y:2019-O:108), Linus Lindstrom(Y:2016-O:82), Marcus Kallionkieli(Y:2019-O:125), Markus Niemelainen(Y:2016-O:63), Markus Nurmi(Y:2016-O:161), Markus Ruusu(Y:2015-O:156), Matheson Iacopelli(Y:2014-O:97), Matias Maccelli(Y:2019-O:94), Matt Filipe(Y:2016-O:76), Max Zimmer(Y:2016-O:123), Nick Boka(Y:2015-O:186), Niklas Nordgren(Y:2018-O:62), Nils Lundkvist(Y:2018-O:28), Olli Juolevi(Y:2016-O:9), Patrik Virta(Y:2017-O:189), Petrus Palmu(Y:2017-O:147), Rasmus Kupari(Y:2018-O:13), Roman Durny(Y:2018-O:94), Ryan Gropp(Y:2015-O:53), Simon Johansson(Y:2018-O:121), Taylor Raddysh(Y:2016-O:54), Toni Utunen(Y:2018-O:111), Ty Smith(Y:2018-O:20), Veini Vehvilainen(Y:2018-O:97), Victor Brattstrom(Y:2018-O:159), Vili Saarijarvi(Y:2015-O:76), Ville Rasanen(Y:2017-O:205)<br />
<h3 class="STHSTeamProspect_DraftPick">Draft Picks</h3>
<b>Year 2020: </b>WPG 1, WSH 2, WPG 2, WPG 5, BOS 6, MTL 6, WPG 7, CGY 7<br />
<b>Year 2021: </b>WPG 1, WPG 2, WPG 4, WPG 5, WPG 6, WPG 7<br />
<b>Year 2022: </b>WPG 1, WPG 2, WPG 3, WPG 4, WPG 5, WPG 6, WPG 7<br />
<b>Year 2023: </b>WPG 1, WPG 2, WPG 3, WPG 4, WPG 5, WPG 6, WPG 7<br />
<b>Year 2024: </b>WPG 1, WPG 2, WPG 3, WPG 4, WPG 5, WPG 6, WPG 7<br />
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
<h3 class="STHSTeamProspect_Prospect">Prospects - 44</h3>
Adam Comrie, Adam Gilmour(Y:2012-O:92), Adam Janosik(Y:2010-O:101), Alexis Pepin(Y:2014-O:88), Aliaksei Protas(Y:2019-O:76), Antoine Bibeau(Y:2013-O:126), Arvid Holm(Y:2017-O:170), Benjamin Marshall(Y:2010-O:143), Bryce Brodzinski(Y:2019-O:179), Colten Ellis(Y:2019-O:89), Connor McMichael(Y:2019-O:27), Daniel Catenacci(Y:2011-O:68), Eemeli Rasanen(Y:2017-O:59), Evan Smith(Y:2015-O:198), Fabrice Herzog(Y:2013-O:122), Fedor Gordeev(Y:2017-O:163), Gabriel Beaupre(Y:2011-O:158), J.C. Lipon(Y:2013-O:93), Jack Gorniak(Y:2018-O:148), Jackson LaCombe(Y:2019-O:54), Jake Kupsky(Y:2015-O:205), John Nyberg(Y:2014-O:164), John Persson(Y:2011-O:144), Joonas Lehtivuori, Jordan Hollett(Y:2017-O:167), Josiah Slavin(Y:2018-O:201), Kenny Ryan(Y:2009-O:58), Marc McNulty(Y:2013-O:138), Mason Primeau(Y:2019-O:114), Mikhail Maltsev(Y:2016-O:112), Nicolas Roy(Y:2015-O:91), Nikolai Chebykin(Y:2016-O:159), Noah Carroll(Y:2016-O:196), Nolan Vesey(Y:2014-O:146), Peter Ceresnak(Y:2011-O:184), Philip Tomasino(Y:2019-O:22), Pierre Engvall(Y:2014-O:151), Ryan Kujawinski(Y:2013-O:66), Ryan Mantha(Y:2014-O:115), Ryan O'Connell(Y:2017-O:173), Timothy Liljegren(Y:2017-O:8), Tobias Bjornfot(Y:2019-O:23), Tyler Biggs(Y:2011-O:23), Tyler Bird(Y:2014-O:121)<br />
<h3 class="STHSTeamProspect_DraftPick">Draft Picks</h3>
<b>Year 2020: </b>LAK 2, LAK 4, SJS 4, BOS 4, VGK 4, LAK 5, LAK 6, LAK 7<br />
<b>Year 2021: </b>LAK 1, LAK 3, LAK 4, LAK 5, FLA 5, LAK 6, LAK 7<br />
<b>Year 2022: </b>LAK 1, LAK 2, LAK 3, LAK 4, LAK 5, LAK 6, LAK 7<br />
<b>Year 2023: </b>LAK 1, LAK 2, LAK 3, LAK 4, LAK 5, LAK 6, LAK 7<br />
<b>Year 2024: </b>LAK 1, LAK 2, LAK 3, LAK 4, LAK 5, LAK 6, LAK 7<br />
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
<h3 class="STHSTeamProspect_Prospect">Prospects - 27</h3>
Austin Poganski(Y:2014-O:73), Carson Focht(Y:2019-O:188), Chase Pearson(Y:2015-O:120), Cole Koepke(Y:2018-O:166), David Bernhardt(Y:2016-O:150), Gustav Bouramman(Y:2015-O:147), Jack Adams(Y:2017-O:165), Jack Malone(Y:2019-O:163), Jakub Galvas(Y:2017-O:179), Josh Ess(Y:2017-O:210), Karel Plasek(Y:2019-O:185), Karel Vejmelka(Y:2015-O:158), Linus Olund(Y:2017-O:150), Marcus Karlberg(Y:2018-O:104), Marcus Westfalt(Y:2018-O:161), Mikael Hakkarainen(Y:2018-O:135), Nick Ebert(Y:2012-O:84), Nikita Korostelev(Y:2015-O:78), Nikita Pavlychev(Y:2015-O:180), Otto Koivula(Y:2016-O:105), Pavel Koltygin(Y:2017-O:124), Petr Kvaca(Y:2017-O:136), Sebastian Repo(Y:2017-O:122), Wade Allison(Y:2016-O:55), William Lagesson(Y:2014-O:90), Wouter Peeters(Y:2016-O:74), Yegor Zaitsev(Y:2017-O:209)<br />
<h3 class="STHSTeamProspect_DraftPick">Draft Picks</h3>
<b>Year 2020: </b>TBL 6<br />
<b>Year 2021: </b>TBL 1, TBL 2, VGK 6, TBL 6, TBL 7<br />
<b>Year 2022: </b>TBL 1, PHL 2, TBL 2, TBL 4, TBL 7<br />
<b>Year 2023: </b>TBL 1, TBL 2, TBL 3, TBL 4, TBL 5, TBL 6, TBL 7<br />
<b>Year 2024: </b>TBL 1, TBL 2, TBL 3, TBL 4, TBL 5, TBL 6, TBL 7<br />
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
<h3 class="STHSTeamProspect_Prospect">Prospects - 48</h3>
Adam Mascherin(Y:2016-O:24), Akira Schmid(Y:2018-O:133), Alex Vlasic(Y:2019-O:52), Barrett Hayton(Y:2018-O:9), Brandon Crawley(Y:2017-O:158), Brendan De Jong(Y:2017-O:187), Brendan Warren(Y:2015-O:126), Carter Gylander(Y:2019-O:206), Cedric Pare(Y:2017-O:203), Cody Glass(Y:2017-O:4), Conor Timmins(Y:2017-O:34), Curtis Douglas(Y:2018-O:115), Gustav Berglund(Y:2019-O:211), Ilya Nikolaev(Y:2019-O:63), Jack McBain(Y:2018-O:59), Jack Rathbone(Y:2017-O:132), Jack Studnicka(Y:2017-O:67), Jeremy Davies(Y:2016-O:168), Jeremy Swayman(Y:2017-O:138), Jiri Patera(Y:2017-O:183), Joe Cecconi(Y:2015-O:177), Joel Hofer(Y:2018-O:88), John Ludvig(Y:2019-O:100), Jonathan Davidsson(Y:2017-O:196), Jonathan Walker(Y:2016-O:157), Josh Nodler(Y:2019-O:175), Keaton Middleton(Y:2016-O:138), Konstantin Volkov(Y:2016-O:176), Layton Ahac(Y:2019-O:82), Liam Gorman(Y:2018-O:192), Marcus Davidsson(Y:2017-O:47), Martin Kaut(Y:2018-O:19), Matt Brassard(Y:2017-O:211), Mike Koster(Y:2019-O:169), Nick Campoli(Y:2017-O:186), Nick Leivermann(Y:2017-O:207), Nicolas Hague(Y:2017-O:29), Oleg Sosunov(Y:2016-O:165), Olivier Rodrigue(Y:2018-O:71), Ryder Donovan(Y:2019-O:103), Samuel Walker(Y:2017-O:212), Santtu Kinnunen(Y:2018-O:209), Sean Day(Y:2016-O:73), Sebastian Walfridsson(Y:2017-O:180), Simon Kjellberg(Y:2018-O:185), Stepan Falkovsky(Y:2016-O:169), Thomas Harley(Y:2019-O:21), Vladislav Kolyachonok(Y:2019-O:48)<br />
<h3 class="STHSTeamProspect_DraftPick">Draft Picks</h3>
<b>Year 2020: </b>TOR 1, FLA 1, ANH 1, TOR 2, TOR 3, WPG 3, FLA 5, PHL 6, DET 6, TOR 6, PHL 7<br />
<b>Year 2021: </b>TOR 1, TOR 2, WPG 3, TOR 4, TOR 5, TOR 6, OTT 7<br />
<b>Year 2022: </b>TOR 1, TOR 2, TOR 3, TOR 4, TOR 5, TOR 6, TOR 7<br />
<b>Year 2023: </b>TOR 1, TOR 2, TOR 3, TOR 4, TOR 5, TOR 6, TOR 7<br />
<b>Year 2024: </b>TOR 1, TOR 2, TOR 3, TOR 4, TOR 5, TOR 6, TOR 7<br />
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
<h3 class="STHSTeamProspect_Prospect">Prospects - 31</h3>
Adam Huska(Y:2015-O:128), Alex Turcotte(Y:2019-O:4), Antti Tuomisto(Y:2019-O:34), Christopher Brown(Y:2014-O:169), David Hrenak(Y:2018-O:143), Eric Hjorth(Y:2019-O:141), Givani Smith(Y:2016-O:71), Johan Sodergran(Y:2018-O:158), John Beecher(Y:2019-O:33), John Farinacci(Y:2019-O:75), John St. Ivany(Y:2018-O:131), Josh Norris(Y:2017-O:21), Kasper Kotkansalo(Y:2017-O:84), Keith Petruzzelli(Y:2017-O:74), Linus Hogberg(Y:2016-O:133), Lukas Parik(Y:2019-O:71), Marian Studenic(Y:2017-O:143), Maxwell Crozier(Y:2019-O:158), Maxwell Willman(Y:2014-O:139), Michael DiPietro(Y:2017-O:52), Mike Callahan(Y:2018-O:164), Oskar Steen(Y:2016-O:166), Paul Cotter(Y:2018-O:127), Pavel Shen(Y:2018-O:214), Reilly Walsh(Y:2017-O:94), Rhett Gardner(Y:2016-O:136), Samuel Ersson(Y:2018-O:141), Scott Reedy(Y:2017-O:88), Shane Pinto(Y:2019-O:35), Ty Dellandrea(Y:2018-O:16), Will Francis(Y:2019-O:172)<br />
<h3 class="STHSTeamProspect_DraftPick">Draft Picks</h3>
<b>Year 2020: </b>EDM 1, TBL 2, NYR 4, DET 4, DAL 4, TBL 5, EDM 5, DAL 5, PHL 5, DET 5, EDM 6, DAL 6, WPG 6, MIN 7, VAN 7, PIT 7, DAL 7<br />
<b>Year 2021: </b>EDM 1, EDM 2, EDM 4, PHL 5, EDM 5, EDM 6, CLB 7<br />
<b>Year 2022: </b>EDM 1, EDM 2, EDM 3, EDM 4, EDM 5, EDM 6, OTT 7<br />
<b>Year 2023: </b>EDM 1, EDM 2, EDM 3, EDM 4, EDM 5, EDM 6, EDM 7<br />
<b>Year 2024: </b>EDM 1, EDM 2, EDM 3, EDM 4, EDM 5, EDM 6, EDM 7<br />
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
<h3 class="STHSTeamProspect_Prospect">Prospects - 28</h3>
A.J. Jenks, Alexander Delnov(Y:2012-O:93), Alexander Nylander(Y:2016-O:6), Casey Fitzgerald(Y:2016-O:104), Chris Wilkie(Y:2015-O:138), Christopher Clapperton(Y:2013-O:115), Daniel Vladar(Y:2015-O:72), David Pope(Y:2013-O:121), Erik Brannstrom(Y:2017-O:16), Fabian Zetterlund(Y:2017-O:63), Filip Helt(Y:2016-O:204), Garrett Meurs(Y:2011-O:139), Hardy Haman-Aktell(Y:2016-O:144), Ilya Sorokin(Y:2014-O:63), Ivan Lodnia(Y:2017-O:82), Jakob Stenqvist(Y:2016-O:187), Joren van Pottelberghe(Y:2015-O:105), Josh Anderson(Y:2016-O:84), Karch Bachman(Y:2015-O:169), Martin Necas(Y:2017-O:17), Miguel Fidler(Y:2014-O:156), Mike Williamson(Y:2013-O:205), Parker Wotherspoon(Y:2015-O:93), Sergei Boikov(Y:2015-O:174), Stephen Desrocher(Y:2015-O:123), Vladimir Ruzicka, Yakov Trenin(Y:2015-O:56), Ziyat Paygin(Y:2015-O:144)<br />
<h3 class="STHSTeamProspect_DraftPick">Draft Picks</h3>
<b>Year 2020: </b>MTL 4<br />
<b>Year 2021: </b>FLA 1, FLA 2, FLA 3, FLA 4<br />
<b>Year 2022: </b>FLA 1, FLA 2, FLA 3, FLA 4, FLA 5, FLA 6, FLA 7<br />
<b>Year 2023: </b>FLA 1, FLA 2, FLA 3, FLA 4, FLA 5, FLA 6<br />
<b>Year 2024: </b>FLA 1, FLA 2, FLA 3, FLA 4, FLA 5, FLA 6, FLA 7<br />
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
<h3 class="STHSTeamProspect_Prospect">Prospects - 31</h3>
Aarne Talvitte(Y:2017-O:166), Alexander Campbell(Y:2019-O:80), Brady Gilmour(Y:2017-O:197), Brett Leason(Y:2019-O:37), Calle Sjalin(Y:2017-O:175), Cameron Morrison(Y:2016-O:37), Chris Leblanc(Y:2013-O:199), Cole Caufield(Y:2019-O:9), Cole Fonstad(Y:2018-O:89), Cole Fraser(Y:2017-O:135), Cooper Moore(Y:2019-O:164), Croix Evingson(Y:2017-O:215), Dakota Joshua(Y:2014-O:154), Dante Fabbro(Y:2016-O:19), Gabriel Gagne(Y:2015-O:54), Ian Mitchell(Y:2017-O:54), Jacob Jackson(Y:2013-O:197), Jared Fiegl(Y:2014-O:201), Joe Veleno(Y:2018-O:15), Kevin Elgestal(Y:2014-O:205), Kirill Tyutyayev(Y:2019-O:181), Luke Martin(Y:2017-O:42), Malte Setkov(Y:2017-O:129), Mitchell Dempsey(Y:2013-O:202), Morgan Barron(Y:2017-O:185), Nikita Popugaev(Y:2017-O:73), Pontus Holmberg(Y:2018-O:157), Pyotr Kochetkov(Y:2019-O:40), Skyler Brind'Amour(Y:2017-O:169), Thomas Novak(Y:2015-O:34), Tyler Inamoto(Y:2017-O:104)<br />
<h3 class="STHSTeamProspect_DraftPick">Draft Picks</h3>
<b>Year 2020: </b>PIT 1, MTL 1, PIT 2, OTT 2, MTL 2, FLA 3, PIT 4, TOR 4, PIT 6<br />
<b>Year 2021: </b>PIT 1, PIT 2, PHL 2, PHL 3, PIT 3, PIT 5, PIT 6, PIT 7<br />
<b>Year 2022: </b>PIT 1, PIT 2, PIT 3, PHL 3, PIT 4, PIT 5, PIT 6, PIT 7<br />
<b>Year 2023: </b>PIT 1, PIT 2, PIT 3, PIT 4, PIT 5, PIT 6, PIT 7<br />
<b>Year 2024: </b>PIT 1, PIT 2, PIT 3, PIT 4, PIT 5, PIT 6, PIT 7<br />
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
<h3 class="STHSTeamProspect_Prospect">Prospects - 35</h3>
Aaron Harstad(Y:2011-O:209), Adam Musil(Y:2015-O:102), Anton Andersson(Y:2017-O:208), Blake Heinrich(Y:2013-O:185), Brandon Gignac(Y:2016-O:89), Brandon Hagel(Y:2016-O:149), Brayden Chizen(Y:2016-O:209), Chris Martenet(Y:2015-O:99), David Drake(Y:2013-O:192), Dennis Robertson(Y:2011-O:185), Deven Sideroff(Y:2015-O:80), Dominik Kubalik(Y:2013-O:189), Dustin Wolf(Y:2019-O:117), Dylan Cozens(Y:2019-O:10), Felix Bibeau(Y:2019-O:162), Hayden Hawkey(Y:2014-O:174), Jason Kasdorf(Y:2011-O:166), Jean-Christophe Beaudin(Y:2015-O:90), Jeremiah Addison(Y:2015-O:165), Jesper Pettersson(Y:2014-O:204), Joseph Woll(Y:2016-O:59), Julius Bergman(Y:2014-O:43), Lassi Thomson(Y:2019-O:17), Matthew Wedman(Y:2019-O:171), Morgan Frost(Y:2017-O:28), Nathan Legare(Y:2019-O:62), Nils Hoglander(Y:2019-O:20), Noel Hoefenmayer(Y:2017-O:110), Spencer Knight(Y:2019-O:8), Terrance Amorosa(Y:2013-O:159), Tyler Vesel(Y:2014-O:178), Tyler Weiss(Y:2018-O:126), Ville Heinola(Y:2019-O:16), Zachary Bouthillier(Y:2018-O:210), Zachary Pochiro(Y:2013-O:132)<br />
<h3 class="STHSTeamProspect_DraftPick">Draft Picks</h3>
<b>Year 2020: </b>NSH 1, NSH 2, NSH 3, BUF 3, TBL 3, CAR 5, NSH 6, WSH 7, NSH 7, MTL 7<br />
<b>Year 2021: </b>NSH 1, NSH 2, NSH 3, NSH 4, NSH 5, NSH 6, NSH 7<br />
<b>Year 2022: </b>NSH 1, NSH 2, NSH 3, NSH 4, NSH 5, NSH 6, NSH 7<br />
<b>Year 2023: </b>NSH 1, NSH 2, NSH 3, NSH 4, NSH 5, NSH 6, NSH 7<br />
<b>Year 2024: </b>NSH 1, NSH 2, NSH 3, NSH 4, NSH 5, NSH 6, NSH 7<br />
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
<h3 class="STHSTeamProspect_Prospect">Prospects - 30</h3>
Aapeli Rasanen(Y:2016-O:115), Anthony Brodeur(Y:2013-O:193), Anthony Camara(Y:2011-O:98), Ben Sexton(Y:2009-O:203), Bokondji Imama(Y:2015-O:197), Bradley Ross(Y:2010-O:33), Connor Corcoran(Y:2018-O:151), Dennis Busby(Y:2018-O:152), Dillon Heatherington(Y:2013-O:58), Francis Perron(Y:2014-O:131), Garret Ross(Y:2012-O:169), Garrett Metcalf(Y:2015-O:175), Henry Rybinski(Y:2019-O:110), Joachim Blichfeld(Y:2016-O:188), Joey Dudek(Y:2014-O:168), John Marino(Y:2015-O:153), Joshua Brown(Y:2013-O:167), Louis-Marc Aubry(Y:2010-O:84), Luke Stevens(Y:2015-O:151), Matt Schmalz(Y:2015-O:185), Mattias Elfstrom(Y:2016-O:155), Max Gildon(Y:2017-O:76), Nicholas Caamano(Y:2016-O:125), Patrick Sanvido(Y:2014-O:209), Robin Norell(Y:2013-O:152), Sondre Olden(Y:2010-O:59), Steven Spinner(Y:2014-O:189), Tanner Laczynski(Y:2016-O:139), Vaclav Karabacek(Y:2014-O:56), Vladislav Yeryomenko(Y:2018-O:144)<br />
<h3 class="STHSTeamProspect_DraftPick">Draft Picks</h3>
<b>Year 2020: </b><br />
<b>Year 2021: </b>VGK 5, NYR 7<br />
<b>Year 2022: </b>NYR 1, NYR 2, NYR 5, NYR 6, NYR 7<br />
<b>Year 2023: </b>NYR 1, NYR 2, NYR 3, NYR 4, NYR 5, NYR 6, NYR 7<br />
<b>Year 2024: </b>NYR 1, NYR 2, NYR 3, NYR 4, NYR 5, NYR 6, NYR 7<br />
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
<h3 class="STHSTeamProspect_Prospect">Prospects - 44</h3>
Allan McShane(Y:2018-O:78), Anthony Richard(Y:2015-O:110), Ben Mirageas(Y:2017-O:114), Brad Morrison(Y:2015-O:89), Brett Murray(Y:2016-O:124), Bulat Shafigullin(Y:2018-O:74), Chaz Reddekopp(Y:2015-O:168), Christian Krygier(Y:2018-O:204), Cole Brady(Y:2019-O:176), Cole Krygier(Y:2018-O:206), Collin Adams(Y:2016-O:183), David Cotton(Y:2015-O:135), Dylan Ferguson(Y:2017-O:131), Erik Foley(Y:2015-O:65), Evan Barratt(Y:2017-O:100), Evan Fitzpatrick(Y:2016-O:64), Filip Ahl(Y:2015-O:88), Graham McPhee(Y:2016-O:131), Isaac Ratcliffe(Y:2017-O:32), Jack Dougherty(Y:2014-O:38), Jack Sadek(Y:2015-O:187), Jacob Paquette(Y:2017-O:151), Jake Bischoff(Y:2012-O:196), Jake Paterson(Y:2012-O:122), Jan Kostalek(Y:2013-O:103), Janne Juvonen(Y:2013-O:194), Joni Ikonen(Y:2017-O:46), Jordan Kooy(Y:2018-O:211), Jordan Sambrook(Y:2016-O:94), Jordan Stallard(Y:2016-O:117), Kristoffer Gunnarsson(Y:2017-O:193), Mathew Hill(Y:2019-O:173), Miroslav Svoboda(Y:2015-O:207), Nicolas Mattinen(Y:2016-O:132), Nikola Pasic(Y:2019-O:142), Noah Gregor(Y:2016-O:81), Owen Tippett(Y:2017-O:7), Philip Broberg(Y:2019-O:11), Reece Willcox(Y:2012-O:166), Robin Kovacs(Y:2015-O:51), Roy Radke(Y:2015-O:162), Sam Brittain(Y:2010-O:123), Travis Barron(Y:2016-O:152), Ty Ronning(Y:2016-O:154)<br />
<h3 class="STHSTeamProspect_DraftPick">Draft Picks</h3>
<b>Year 2020: </b>DET 2, BUF 5, BOS 5, STL 6, CHI 6, TBL 7, TOR 7, DET 7<br />
<b>Year 2021: </b>DET 1, DET 2, DET 3, TBL 4, DET 5, DET 6, DET 7<br />
<b>Year 2022: </b>DET 1, DET 2, PHL 4, DET 4, DET 5, DET 6, DET 7<br />
<b>Year 2023: </b>DET 1, DET 2, DET 3, DET 4, DET 5, DET 6, DET 7<br />
<b>Year 2024: </b>DET 1, DET 2, DET 3, DET 4, DET 5, DET 6, DET 7<br />
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
<h3 class="STHSTeamProspect_Prospect">Prospects - 34</h3>
Anthony Florentino(Y:2013-O:105), Arturs Silovs(Y:2019-O:152), Blake Murray(Y:2019-O:150), Case McCarthy(Y:2019-O:149), Eric Florchuk(Y:2018-O:184), Ethan Haider(Y:2019-O:147), Frederik Nissen(Y:2019-O:146), Ilya Konovalov(Y:2019-O:83), Ilya Samsonov(Y:2015-O:16), Isaiah Saville(Y:2019-O:138), Ivan Chekhovich(Y:2017-O:108), Jocktan Chainey(Y:2017-O:155), Jonas Johansson(Y:2014-O:49), Josiah Didier(Y:2011-O:107), Justus Annunen(Y:2018-O:85), Keegan Kolesar(Y:2015-O:109), Kirill Slepets(Y:2019-O:145), Logan Cockerill(Y:2017-O:153), Marshall Warren(Y:2019-O:111), Matias Mantykivi(Y:2019-O:148), Matthew Robertson(Y:2019-O:43), Michael Eyssimont(Y:2016-O:141), Michael Spacek(Y:2015-O:131), Mitchell Gibson(Y:2018-O:171), Nick Sorensen(Y:2013-O:47), Nikolay Prokhorkin(Y:2012-O:78), Patrick Moynihan(Y:2019-O:140), Rhett Pitlick(Y:2019-O:134), Ryan Fitzgerald(Y:2013-O:87), Sean Malone(Y:2013-O:156), Tim Soderlund(Y:2017-O:137), Trevor Janicke(Y:2019-O:144), Valentin Nussbaumer(Y:2019-O:151), Will Reilly(Y:2017-O:217)<br />
<h3 class="STHSTeamProspect_DraftPick">Draft Picks</h3>
<b>Year 2020: </b>CAR 3<br />
<b>Year 2021: </b>BUF 1, BOS 1, BUF 2, TOR 3, BUF 3, BUF 4, BUF 5, MTL 5, BUF 7<br />
<b>Year 2022: </b>BUF 1, BUF 2, BUF 3, BUF 4, BUF 5, BUF 6, BUF 7<br />
<b>Year 2023: </b>BUF 1, BUF 2, BUF 3, BUF 4, BUF 5, BUF 6, BUF 7<br />
<b>Year 2024: </b>BUF 1, BUF 2, BUF 3, BUF 4, BUF 5, BUF 6, BUF 7<br />
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
<h3 class="STHSTeamProspect_Prospect">Prospects - 36</h3>
Alexander Kadeikin(Y:2014-O:124), Benjamin Finkelstein(Y:2016-O:208), Blaine Byron(Y:2013-O:196), Blake Siebenaler(Y:2014-O:93), Brandon Gormley(Y:2010-O:16), Cam Dineen(Y:2016-O:67), Cole Candella(Y:2016-O:102), Connor Hobbs(Y:2015-O:183), Daniel Audette(Y:2014-O:108), Daniel Walcott(Y:2014-O:184), D'Artagnan Joly(Y:2017-O:128), David Quenneville(Y:2016-O:121), Dmytro Timashov(Y:2015-O:81), Dysin Mayo(Y:2014-O:99), Gilles Senn(Y:2017-O:161), Graham Knott(Y:2015-O:68), Grant Besse(Y:2013-O:118), Henri Ikonen(Y:2013-O:120), Jack Kopacka(Y:2016-O:91), Jakov Novak(Y:2018-O:196), Jeremy Gregoire(Y:2013-O:136), Jonas Rondbjerg(Y:2017-O:72), Keegan Iverson(Y:2014-O:69), Klim Kostin(Y:2017-O:26), Martin Reway(Y:2013-O:109), Matt Spencer(Y:2015-O:58), Miles Gendron(Y:2014-O:92), Niklas Hansson(Y:2013-O:82), Pascal Laberge(Y:2016-O:30), Patrick Holway(Y:2015-O:172), Reece Scarlett(Y:2011-O:173), Scott Walford(Y:2017-O:79), Serron Noel(Y:2018-O:18), Simon Lundmark(Y:2019-O:70), Spencer Watson(Y:2014-O:101), Vojtech Budik(Y:2016-O:162)<br />
<h3 class="STHSTeamProspect_DraftPick">Draft Picks</h3>
<b>Year 2020: </b>LAK 3, WSH 4<br />
<b>Year 2021: </b>OTT 4, NYR 4, OTT 5, OTT 6, FLA 6<br />
<b>Year 2022: </b>OTT 1, OTT 2, OTT 3, WSH 3, OTT 4, OTT 5, OTT 6<br />
<b>Year 2023: </b>OTT 1, OTT 2, OTT 3, OTT 4, OTT 5, OTT 6, OTT 7<br />
<b>Year 2024: </b>OTT 1, OTT 2, OTT 3, OTT 4, OTT 5, OTT 6, OTT 7<br />
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
<h3 class="STHSTeamProspect_Prospect">Prospects - 33</h3>
Adam Helewka(Y:2015-O:143), Andrei Svetlakov(Y:2017-O:146), Arvid Henrikson(Y:2016-O:205), Austin Osmanski(Y:2016-O:207), Austin Wong(Y:2018-O:193), Blake McLaughlin(Y:2018-O:69), Bryce Misley(Y:2017-O:141), Colby Williams(Y:2015-O:196), Connor Hurley(Y:2013-O:43), David Farrance(Y:2017-O:80), Edgars Kulda(Y:2014-O:136), Eric Comrie(Y:2013-O:48), Eric Cornel(Y:2014-O:44), Filip Berglund(Y:2016-O:120), Ivan Chukarov(Y:2015-O:200), Jack Glover(Y:2014-O:57), Joey LaLeggia(Y:2012-O:120), John Leonard(Y:2018-O:181), Karlis Cukste(Y:2015-O:166), Kevin Mandolese(Y:2018-O:162), Kristian Vesalainen(Y:2017-O:24), Luc Snuggerud(Y:2014-O:122), Maksim Zhukov(Y:2017-O:90), Mario Ferraro(Y:2017-O:60), Mike Robinson(Y:2015-O:129), Mitchell Mattson(Y:2016-O:118), Oliver Wahlstrom(Y:2018-O:8), Patrick Shea(Y:2015-O:203), Patrik Westerholm(Y:2011-O:170), Sam Dove-McFalls(Y:2015-O:142), Stuart Skinner(Y:2017-O:87), Tarmo Reunanen(Y:2016-O:110), Timothy Gettinger(Y:2016-O:137)<br />
<h3 class="STHSTeamProspect_DraftPick">Draft Picks</h3>
<b>Year 2020: </b>SJS 1, CHI 3, SJS 3, STL 4, SJS 5, SJS 6, SJS 7<br />
<b>Year 2021: </b>SJS 1, SJS 2, SJS 3, STL 4, SJS 4, SJS 5, SJS 7<br />
<b>Year 2022: </b>SJS 1, SJS 2, SJS 3, SJS 4, SJS 5, SJS 6, SJS 7<br />
<b>Year 2023: </b>SJS 1, SJS 2, SJS 3, SJS 4, SJS 5, SJS 6, SJS 7<br />
<b>Year 2024: </b>SJS 1, SJS 2, SJS 3, SJS 4, SJS 5, SJS 6, SJS 7<br />
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
<h3 class="STHSTeamProspect_Prospect">Prospects - 33</h3>
Alex Lepkowski(Y:2011-O:149), Anton Zlobin(Y:2012-O:91), Benoit-Olivier Groulx(Y:2018-O:46), Brent Pedersen(Y:2013-O:113), Cal Foote(Y:2017-O:22), Corey Cowick(Y:2009-O:192), Danny Biega(Y:2010-O:86), Gabriel Fortier(Y:2018-O:58), Gleason Fournier(Y:2009-O:92), Hunter Jones(Y:2019-O:60), Isac Lundestrom(Y:2018-O:27), Jack Becker(Y:2015-O:209), Jamie Phillips(Y:2012-O:205), Jase Weslosky, Jerome Gauthier-Leduc(Y:2010-O:97), Jonathan Racine(Y:2011-O:103), Kelsey Tessier, Kyle Burroughs(Y:2013-O:207), Mac Bennett(Y:2009-O:84), Magnus Nygren(Y:2011-O:133), Mark Shoemaker(Y:2016-O:197), Matia Marcantuoni(Y:2012-O:73), Matt Bradley(Y:2015-O:159), Matt Mahalak(Y:2011-O:160), Nick Petersen(Y:2009-O:143), Nicolas Deschamps, Nolan Foote(Y:2019-O:29), Olivier Archambault(Y:2011-O:100), Olivier Roy(Y:2009-O:65), Rob Flick(Y:2010-O:150), Ryan Poehling(Y:2017-O:27), Teemu Eronen(Y:2011-O:193), Thomas Larkin(Y:2009-O:153)<br />
<h3 class="STHSTeamProspect_DraftPick">Draft Picks</h3>
<b>Year 2020: </b>DAL 1, DAL 2, DAL 3, FLA 6<br />
<b>Year 2021: </b>DAL 1, DAL 2, DAL 3, DAL 4, DAL 5, DAL 6, DAL 7, EDM 7<br />
<b>Year 2022: </b>DAL 1, DAL 2, DAL 3, DAL 4, DAL 5, WSH 5, DAL 6, DAL 7<br />
<b>Year 2023: </b>DAL 1, DAL 2, DAL 3, DAL 4, DAL 5, DAL 6, DAL 7<br />
<b>Year 2024: </b>DAL 1, DAL 2, DAL 3, DAL 4, DAL 5, DAL 6, DAL 7<br />
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
<h3 class="STHSTeamProspect_Prospect">Prospects - 43</h3>
Aaron Huglen(Y:2019-O:118), Adam Brooks(Y:2016-O:83), Adam Fox(Y:2016-O:58), Albin Grewe(Y:2019-O:57), Alex Formenton(Y:2017-O:55), Alexander Romanov(Y:2018-O:42), Antti Saarela(Y:2019-O:113), Beau Starrett(Y:2014-O:100), Brycen Martin(Y:2014-O:76), Casey Staum(Y:2016-O:181), Connor Bunnaman(Y:2016-O:109), Connor Dewar(Y:2018-O:113), Curtis Hall(Y:2018-O:103), Dmitri Samorukov(Y:2017-O:99), Dmitry Zavgorodniy(Y:2018-O:93), Eric Ciccolini(Y:2019-O:133), Evan Bouchard(Y:2018-O:10), Filip Hallander(Y:2018-O:51), Hudson Fasching(Y:2013-O:86), Jachym Kondelik(Y:2018-O:129), Jacob Ingham(Y:2018-O:167), Jacob Olofsson(Y:2018-O:34), Jake Ryczek(Y:2016-O:158), Jake Walman(Y:2014-O:83), Jonathan Gruden(Y:2018-O:87), Julien Nantel(Y:2014-O:166), Karl Henriksson(Y:2019-O:64), Kim Nousiainen(Y:2019-O:160), Kyle Wood(Y:2014-O:91), Lukas Elvenes(Y:2017-O:97), Mathias From(Y:2016-O:135), Ostap Safin(Y:2017-O:85), Roman Bychkov(Y:2019-O:154), Ryan Suzuki(Y:2019-O:26), Sam Lafferty(Y:2014-O:137), Sebastian Aho(Y:2017-O:68), Shane Gersich(Y:2014-O:148), Slava Demin(Y:2018-O:86), Teemu Kivihalme(Y:2013-O:135), Thomas di Pauli(Y:2012-O:136), Victor Olofsson(Y:2014-O:161), Xavier Bouchard(Y:2018-O:147), Zac Jones(Y:2019-O:85)<br />
<h3 class="STHSTeamProspect_DraftPick">Draft Picks</h3>
<b>Year 2020: </b>MIN 1, VAN 1, NYI 1, MIN 2, MTL 3, PHL 3, OTT 3, ARI 4, VAN 4, NSH 4, NYI 5, MIN 5, CLB 5, MIN 6<br />
<b>Year 2021: </b>MIN 1, MIN 2, BOS 2, MIN 3, CGY 3, MIN 4, MIN 5, MIN 6<br />
<b>Year 2022: </b>MIN 1, MIN 2, MIN 3, MIN 4, MIN 5, MIN 6, MIN 7<br />
<b>Year 2023: </b>MIN 1, MIN 2, MIN 3, MIN 4, MIN 5, MIN 6, MIN 7<br />
<b>Year 2024: </b>MIN 1, MIN 2, MIN 3, MIN 4, MIN 5, MIN 6, MIN 7<br />
</div>
<?php include "Footer.php";?>
