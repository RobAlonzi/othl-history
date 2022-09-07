﻿<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<title>OTHL - Pro Team Lines</title>
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
<div class="STHSTopLink"><a id="STHSRosterTop"></a> <a href="#Avalanche">Avalanche</a> | <a href="#Blackhawks">Blackhawks</a> | <a href="#BlueJackets">Blue Jackets</a> | <a href="#Blues">Blues</a> | <a href="#Bruins">Bruins</a> | <a href="#Canadiens">Canadiens</a> | <a href="#Canucks">Canucks</a> | <a href="#Capitals">Capitals</a> | <a href="#Coyotes">Coyotes</a> | <a href="#Devils">Devils</a> | <a href="#Ducks">Ducks</a> | <a href="#Flames">Flames</a> | <a href="#Flyers">Flyers</a> | <a href="#GoldenKnights">Golden Knights</a> | <a href="#Hurricanes">Hurricanes</a> | <a href="#Islanders">Islanders</a> | <a href="#Jets">Jets</a> | <a href="#Kings">Kings</a> | <a href="#Lightning">Lightning</a> | <a href="#MapleLeafs">Maple Leafs</a> | <a href="#Oilers">Oilers</a> | <a href="#Panthers">Panthers</a> | <a href="#Penguins">Penguins</a> | <a href="#Predators">Predators</a> | <a href="#Rangers">Rangers</a> | <a href="#RedWings">Red Wings</a> | <a href="#Sabres">Sabres</a> | <a href="#Senators">Senators</a> | <a href="#Sharks">Sharks</a> | <a href="#Stars">Stars</a> | <a href="#Wild">Wild</a> | <a href="javascript:STHS_JS_CloseAll('');">Close All Team View</a> | <a href="javascript:STHS_JS_OpenAll('');">Open All Team View</a>
</div>
<h1 class="TeamLinesPro_COL"><a id="Avalanche">Avalanche</a></h1>
<b>Lines are Incomplete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=8">Avalanche Page</a> ]
[ <a href="OTHL-PLF-ProTeamRoster.php#Avalanche">Pro Team Roster</a> ]
[ <a href="OTHL-PLF-ProTeamScoring.php#Avalanche">Pro Team Scoring</a> ]
[ <a href="OTHL-PLF-TeamFinance.php#Avalanche">Team Finance</a> ]
[ <a href="OTHL-PLF-ProTeamPlayersInfo.php#Avalanche">Pro Team PlayersInfo</a> ]
[ <a href="OTHL-PLF-ProTeamLines.php#Avalanche">Pro Team Lines</a> ]
[ <a href="OTHL-PLF-TeamProspects.php#Avalanche">Team Prospects</a> ]
[ <a href="OTHL-PLF-ProTeamSchedule.php#Avalanche">Pro Team Schedule</a> ]
[ <a href="OTHL-PLF-ProTeamStats.php#Avalanche">Pro Team Stats</a> ]
[ <a href="OTHL-PLF-ProTeamStatsVS.php#Avalanche">Pro Team Stats VS</a> ]
[ <a href="OTHL-PLF-TeamInjurySuspension.php#Avalanche">Team Injury Suspension</a> ]
[ <a href="OTHL-PLF-TeamHistory.php#Avalanche">Team History</a> ]
[ <a href="OTHL-PLF-TeamRecords.php#Avalanche">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Avalanche');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Avalanche" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Mike Vecchione           Richard Panik            Patrick Kane             40     1   2  2  
 2 Mikko Koivu              Brock McGinn             Matt Martin              30     1   2  2  
 3 Lucas Wallmark           Tobias Rieder            Chris Mueller            20     1   2  2  
 4 Michael Sgarbossa        J.T. Miller              Travis Boyd              10     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Hampus Lindholm          Brett Pesce                                       40     1   2  2  
 2 Brandon Carlo            Braydon Coburn                                    30     1   2  2  
 3 John Moore               Jonas Siegenthaler                                20     1   2  2  
 4 Hampus Lindholm          John Moore                                        10     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Lucas Wallmark           Richard Panik            Michael Sgarbossa        60     1   2  2  
 2 Mikko Koivu              Brock McGinn             Matt Martin              40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Hampus Lindholm          John Moore                                        60     1   2  2  
 2 Brett Pesce              Braydon Coburn                                    40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Richard Panik            Patrick Kane             60     1   2  2  
 2 Mikko Koivu              Lucas Wallmark           40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Hampus Lindholm          Brett Pesce              60     1   2  2  
 2 John Moore               Braydon Coburn           40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Mikko Koivu                                       60     1   2  2  
 2 Richard Panik                                     40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Hampus Lindholm          Brett Pesce              60     1   2  2  
 2 John Moore               Braydon Coburn           40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Richard Panik            Tobias Rieder            60     1   2  2  
 2 Mikko Koivu              Lucas Wallmark           40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Hampus Lindholm          John Moore               60     1   2  2  
 2 Brett Pesce              Braydon Coburn           40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Mike Vecchione           Richard Panik            Patrick Kane             Hampus Lindholm          Brett Pesce              

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Mike Vecchione           Richard Panik            Patrick Kane             Hampus Lindholm          Brett Pesce              

<b>Goaltenders</b>
Starting : Unknown Goalie           
Backup : Jake Allen               

<b>Extra Forwards</b>
Normal : Tobias Rieder, Michael Sgarbossa, Chris Mueller - PP : Tobias Rieder, Michael Sgarbossa - PK : Chris Mueller
<b>Extra Defensemen</b>
Normal : John Moore, Brett Pesce, Braydon Coburn - PP : John Moore - PK : John Moore, Braydon Coburn
<b>Penalty Shots</b>
Michael Sgarbossa, Chris Mueller, Mikko Koivu, Lucas Wallmark, Richard Panik
<b>Custom OT Lines Forwards</b>
Mike Vecchione, Patrick Kane, Mikko Koivu, Lucas Wallmark, Richard Panik, Brock McGinn, Matt Martin, Tobias Rieder, Michael Sgarbossa, Chris Mueller
<b>Custom OT Lines Defensemen</b>
Jonas Siegenthaler, Brandon Carlo, Brett Pesce, Braydon Coburn, John Moore

<b>Scratches</b>
Andreas Englund (Healthy), Carson Soucy (Healthy), Samuel Montembeault (Healthy), Chris Driedger (Healthy)</pre></div>
<h1 class="TeamLinesPro_CHI"><a id="Blackhawks">Blackhawks</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=7">Blackhawks Page</a> ]
[ <a href="OTHL-PLF-ProTeamRoster.php#Blackhawks">Pro Team Roster</a> ]
[ <a href="OTHL-PLF-ProTeamScoring.php#Blackhawks">Pro Team Scoring</a> ]
[ <a href="OTHL-PLF-TeamFinance.php#Blackhawks">Team Finance</a> ]
[ <a href="OTHL-PLF-ProTeamPlayersInfo.php#Blackhawks">Pro Team PlayersInfo</a> ]
[ <a href="OTHL-PLF-ProTeamLines.php#Blackhawks">Pro Team Lines</a> ]
[ <a href="OTHL-PLF-TeamProspects.php#Blackhawks">Team Prospects</a> ]
[ <a href="OTHL-PLF-ProTeamSchedule.php#Blackhawks">Pro Team Schedule</a> ]
[ <a href="OTHL-PLF-ProTeamStats.php#Blackhawks">Pro Team Stats</a> ]
[ <a href="OTHL-PLF-ProTeamStatsVS.php#Blackhawks">Pro Team Stats VS</a> ]
[ <a href="OTHL-PLF-TeamInjurySuspension.php#Blackhawks">Team Injury Suspension</a> ]
[ <a href="OTHL-PLF-TeamHistory.php#Blackhawks">Team History</a> ]
[ <a href="OTHL-PLF-TeamRecords.php#Blackhawks">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Blackhawks');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Blackhawks" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Evgeni Malkin            Sebastian Aho            Jason Zucker             38     0   1  4  
 2 Erik Haula               Tyler Johnson            Vladislav Namestnikov    26     1   2  2  
 3 Derek Stepan             Carl Hagelin             Andrew Shaw              26     1   2  2  
 4 Derek Ryan               Matt Calvert             David Kampf              10     0   5  0  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Zach Werenski            Andy Greene                                       40     1   2  2  
 2 Justin Faulk             Dylan DeMelo                                      40     1   2  2  
 3 Justin Holl              Anthony DeAngelo                                  10     1   2  2  
 4 Zach Werenski            Justin Faulk                                      10     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Evgeni Malkin            Sebastian Aho            Jason Zucker             81     0   0  5  
 2 Derek Stepan             Tyler Johnson            Andrew Shaw              19     0   0  5  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Zach Werenski            Anthony DeAngelo                                  79     0   0  5  
 2 Justin Faulk             Andy Greene                                       21     0   0  5  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Derek Ryan               Matt Calvert             60     0   5  0  
 2 David Kampf              Carl Hagelin             40     0   5  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Justin Faulk             Dylan DeMelo             60     0   5  0  
 2 Justin Holl              Andy Greene              40     0   5  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Derek Stepan                                      60     0   5  0  
 2 Sebastian Aho                                     40     0   4  1  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Justin Faulk             Dylan DeMelo             60     0   5  0  
 2 Justin Holl              Andy Greene              40     0   5  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Sebastian Aho            Jason Zucker             60     1   2  2  
 2 Evgeni Malkin            Andrew Shaw              40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Zach Werenski            Justin Faulk             60     1   2  2  
 2 Andy Greene              Dylan DeMelo             40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Evgeni Malkin            Derek Ryan               Jason Zucker             Zach Werenski            Justin Faulk             

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Sebastian Aho            Carl Hagelin             David Kampf              Andy Greene              Dylan DeMelo             

<b>Goaltenders</b>
Starting : Corey Crawford           
Backup : Igor Shesterkin          

<b>Extra Forwards</b>
Normal : Vladislav Namestnikov, Tyler Johnson, David Kampf - PP : Vladislav Namestnikov, Carl Hagelin - PK : Derek Stepan
<b>Extra Defensemen</b>
Normal : Dylan DeMelo, Zach Werenski, Justin Faulk - PP : Dylan DeMelo - PK : Anthony DeAngelo, Zach Werenski
<b>Penalty Shots</b>
Anthony DeAngelo, Derek Ryan, Evgeni Malkin, Justin Holl, Derek Stepan
<b>Custom OT Lines Forwards</b>
Evgeni Malkin, Derek Ryan, Derek Stepan, Jason Zucker, Erik Haula, Vladislav Namestnikov, Tyler Johnson, Carl Hagelin, Andrew Shaw, Matt Calvert
<b>Custom OT Lines Defensemen</b>
Justin Faulk, Zach Werenski, Anthony DeAngelo, Andy Greene, Dylan DeMelo

<b>Scratches</b>
Kevin Rooney (Healthy), Aaron Dell (Healthy)</pre></div>
<h1 class="TeamLinesPro_CLB"><a id="BlueJackets">Blue Jackets</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=9">Blue Jackets Page</a> ]
[ <a href="OTHL-PLF-ProTeamRoster.php#BlueJackets">Pro Team Roster</a> ]
[ <a href="OTHL-PLF-ProTeamScoring.php#BlueJackets">Pro Team Scoring</a> ]
[ <a href="OTHL-PLF-TeamFinance.php#BlueJackets">Team Finance</a> ]
[ <a href="OTHL-PLF-ProTeamPlayersInfo.php#BlueJackets">Pro Team PlayersInfo</a> ]
[ <a href="OTHL-PLF-ProTeamLines.php#BlueJackets">Pro Team Lines</a> ]
[ <a href="OTHL-PLF-TeamProspects.php#BlueJackets">Team Prospects</a> ]
[ <a href="OTHL-PLF-ProTeamSchedule.php#BlueJackets">Pro Team Schedule</a> ]
[ <a href="OTHL-PLF-ProTeamStats.php#BlueJackets">Pro Team Stats</a> ]
[ <a href="OTHL-PLF-ProTeamStatsVS.php#BlueJackets">Pro Team Stats VS</a> ]
[ <a href="OTHL-PLF-TeamInjurySuspension.php#BlueJackets">Team Injury Suspension</a> ]
[ <a href="OTHL-PLF-TeamHistory.php#BlueJackets">Team History</a> ]
[ <a href="OTHL-PLF-TeamRecords.php#BlueJackets">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_BlueJackets');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_BlueJackets" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Joe Pavelski             Artem Anisimov           Anthony Duclair          35     0   0  5  
 2 Elias Pettersson         Jamie Benn               Vinnie Hinostroza        30     0   0  5  
 3 Andrew Copp              Alexander Kerfoot        Zach Sanford             20     0   2  3  
 4 Paul Byron               Miles Wood               Andreas Johnsson         15     0   2  3  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Alex Goligoski           Quinn Hughes                                      40     0   1  4  
 2 Erik Johnson             Anton Stralman                                    30     1   2  2  
 3 Danny DeKeyser           Jason Demers                                      20     1   2  2  
 4 Erik Johnson             Alex Goligoski                                    10     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Joe Pavelski             Jamie Benn               Anthony Duclair          60     0   0  5  
 2 Elias Pettersson         Miles Wood               Vinnie Hinostroza        40     0   0  5  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Erik Johnson             Quinn Hughes                                      60     0   1  4  
 2 Alex Goligoski           Anton Stralman                                    40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Anthony Duclair          Andreas Johnsson         60     1   2  2  
 2 Vinnie Hinostroza        Alexander Kerfoot        40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Anton Stralman           Erik Johnson             60     1   2  2  
 2 Alex Goligoski           Quinn Hughes             40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Andreas Johnsson                                  60     1   2  2  
 2 Anthony Duclair                                   40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Quinn Hughes             Erik Johnson             60     1   2  2  
 2 Anton Stralman           Alex Goligoski           40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Alexander Kerfoot        Anthony Duclair          60     1   2  2  
 2 Andreas Johnsson         Joe Pavelski             40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Quinn Hughes             Anton Stralman           60     1   2  2  
 2 Alex Goligoski           Erik Johnson             40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Jamie Benn               Joe Pavelski             Anthony Duclair          Quinn Hughes             Alex Goligoski           

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Elias Pettersson         Joe Pavelski             Anthony Duclair          Anton Stralman           Erik Johnson             

<b>Goaltenders</b>
Starting : Henrik Lundqvist         
Backup : Thatcher Demko           

<b>Extra Forwards</b>
Normal : Andreas Johnsson, Alexander Kerfoot, Zach Sanford - PP : Andreas Johnsson, Alexander Kerfoot - PK : Zach Sanford
<b>Extra Defensemen</b>
Normal : Quinn Hughes, Erik Johnson, Alex Goligoski - PP : Alex Goligoski - PK : Quinn Hughes, Alex Goligoski
<b>Penalty Shots</b>
Anthony Duclair, Andreas Johnsson, Alexander Kerfoot, Elias Pettersson, Miles Wood
<b>Custom OT Lines Forwards</b>
Elias Pettersson, Joe Pavelski, Anthony Duclair, Artem Anisimov, Alexander Kerfoot, Miles Wood, Andreas Johnsson, Zach Sanford, Vinnie Hinostroza, Jamie Benn
<b>Custom OT Lines Defensemen</b>
Quinn Hughes, Alex Goligoski, Danny DeKeyser, Erik Johnson, Anton Stralman

<b>Scratches</b>
Nicolas Aube-Kubel (Healthy), Philippe Myers (Healthy)</pre></div>
<h1 class="TeamLinesPro_STL"><a id="Blues">Blues</a></h1>
<b>Lines are Incomplete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=25">Blues Page</a> ]
[ <a href="OTHL-PLF-ProTeamRoster.php#Blues">Pro Team Roster</a> ]
[ <a href="OTHL-PLF-ProTeamScoring.php#Blues">Pro Team Scoring</a> ]
[ <a href="OTHL-PLF-TeamFinance.php#Blues">Team Finance</a> ]
[ <a href="OTHL-PLF-ProTeamPlayersInfo.php#Blues">Pro Team PlayersInfo</a> ]
[ <a href="OTHL-PLF-ProTeamLines.php#Blues">Pro Team Lines</a> ]
[ <a href="OTHL-PLF-TeamProspects.php#Blues">Team Prospects</a> ]
[ <a href="OTHL-PLF-ProTeamSchedule.php#Blues">Pro Team Schedule</a> ]
[ <a href="OTHL-PLF-ProTeamStats.php#Blues">Pro Team Stats</a> ]
[ <a href="OTHL-PLF-ProTeamStatsVS.php#Blues">Pro Team Stats VS</a> ]
[ <a href="OTHL-PLF-TeamInjurySuspension.php#Blues">Team Injury Suspension</a> ]
[ <a href="OTHL-PLF-TeamHistory.php#Blues">Team History</a> ]
[ <a href="OTHL-PLF-TeamRecords.php#Blues">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Blues');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Blues" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Janne Kuokkanen          Denis Gurianov           Vladimir Tarasenko       35     0   0  5  
 2 Jean-Sebastien Dea       Sammy Blais              Brendan Lemieux          30     0   0  5  
 3 Alexandre Texier         Antoine Roussel          Unknown Player           20     3   2  0  
 4 Pierre-Edouard Bellemare Tyler Pitlick            Carter Rowney            15     3   2  0  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Samuel Girard            Unknown Player                                    35     3   0  2  
 2 Victor Mete              David Savard                                      35     2   3  0  
 3 Unknown Player           Unknown Player                                    20     2   3  0  
 4 Samuel Girard            Victor Mete                                       10     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Janne Kuokkanen          Denis Gurianov           Vladimir Tarasenko       60     0   0  5  
 2 Alexandre Texier         Antoine Roussel          Sammy Blais              40     0   0  5  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Samuel Girard            David Savard                                      65     0   0  5  
 2 Victor Mete              Unknown Player                                    35     0   0  5  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Pierre-Edouard Bellemare Carter Rowney            60     1   4  0  
 2 Alexandre Texier         Sammy Blais              40     1   4  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Samuel Girard            Victor Mete              60     1   4  0  
 2 David Savard             Unknown Player           40     1   4  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Alexandre Texier                                  60     0   5  0  
 2 Antoine Roussel                                   40     0   5  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Samuel Girard            Victor Mete              60     1   4  0  
 2 David Savard             Unknown Player           40     1   4  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Janne Kuokkanen          Sammy Blais              60     1   2  2  
 2 Alexandre Texier         Vladimir Tarasenko       40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Samuel Girard            Victor Mete              60     1   2  2  
 2 David Savard             Unknown Player           40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Alexandre Texier         Sammy Blais              Vladimir Tarasenko       Samuel Girard            Victor Mete              

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Alexandre Texier         Sammy Blais              Vladimir Tarasenko       Samuel Girard            Victor Mete              

<b>Goaltenders</b>
Starting : Vitek Vanecek            
Backup : Antti Raanta             

<b>Extra Forwards</b>
Normal : Carter Rowney, Pierre-Edouard Bellemare, Sammy Blais - PP : Carter Rowney, Pierre-Edouard Bellemare - PK : Carter Rowney
<b>Extra Defensemen</b>
Normal : Unknown Player, Unknown Player, Unknown Player - PP : Unknown Player - PK : Unknown Player, Unknown Player
<b>Penalty Shots</b>
Brendan Lemieux, Vladimir Tarasenko, Alexandre Texier, Denis Gurianov, Carter Rowney
<b>Custom OT Lines Forwards</b>
Sammy Blais, Vladimir Tarasenko, Alexandre Texier, Unknown Player, Carter Rowney, Pierre-Edouard Bellemare, Jean-Sebastien Dea, Denis Gurianov, Antoine Roussel, Janne Kuokkanen
<b>Custom OT Lines Defensemen</b>
Samuel Girard, Victor Mete, David Savard, Unknown Player, Unknown Player

<b>Scratches</b>
Adam Boqvist (Healthy), Josh Currie (Healthy), Travis Konecny (Healthy), Matt Benning (Healthy), Jonathan Drouin (Healthy)
Mikael Backlund (Healthy), Justin Schultz (Healthy)</pre></div>
<h1 class="TeamLinesPro_BOS"><a id="Bruins">Bruins</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=3">Bruins Page</a> ]
[ <a href="OTHL-PLF-ProTeamRoster.php#Bruins">Pro Team Roster</a> ]
[ <a href="OTHL-PLF-ProTeamScoring.php#Bruins">Pro Team Scoring</a> ]
[ <a href="OTHL-PLF-TeamFinance.php#Bruins">Team Finance</a> ]
[ <a href="OTHL-PLF-ProTeamPlayersInfo.php#Bruins">Pro Team PlayersInfo</a> ]
[ <a href="OTHL-PLF-ProTeamLines.php#Bruins">Pro Team Lines</a> ]
[ <a href="OTHL-PLF-TeamProspects.php#Bruins">Team Prospects</a> ]
[ <a href="OTHL-PLF-ProTeamSchedule.php#Bruins">Pro Team Schedule</a> ]
[ <a href="OTHL-PLF-ProTeamStats.php#Bruins">Pro Team Stats</a> ]
[ <a href="OTHL-PLF-ProTeamStatsVS.php#Bruins">Pro Team Stats VS</a> ]
[ <a href="OTHL-PLF-TeamInjurySuspension.php#Bruins">Team Injury Suspension</a> ]
[ <a href="OTHL-PLF-TeamHistory.php#Bruins">Team History</a> ]
[ <a href="OTHL-PLF-TeamRecords.php#Bruins">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Bruins');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Bruins" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Sean Couturier           Brad Marchand            Blake Coleman            35     0   3  2  
 2 Jean-Gabriel Pageau      Chris Tierney            Brendan Gallagher        30     0   3  2  
 3 Jay Beagle               Ondrej Palat             Evgenii Dadonov          25     0   3  2  
 4 Frederik Gauthier        Michael Grabner          Drake Caggiula           10     0   3  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Brent Burns              Brayden McNabb                                    35     0   4  1  
 2 Mirco Mueller            Ben Chiarot                                       30     0   4  1  
 3 Ben Hutton               Erik Gudbranson                                   25     0   4  1  
 4 Brayden McNabb           Ben Chiarot                                       10     0   4  1  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Sean Couturier           Brad Marchand            Ondrej Palat             60     0   0  5  
 2 Jean-Gabriel Pageau      Evgenii Dadonov          Brendan Gallagher        40     0   0  5  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Brent Burns              Blake Coleman                                     60     0   0  5  
 2 Ben Hutton               Chris Tierney                                     40     0   0  5  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Jay Beagle               Michael Grabner          60     0   5  0  
 2 Chris Tierney            Blake Coleman            40     0   5  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Ben Chiarot              Brayden McNabb           60     0   5  0  
 2 Mirco Mueller            Erik Gudbranson          40     0   5  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Jay Beagle                                        60     0   5  0  
 2 Chris Tierney                                     40     0   5  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Ben Chiarot              Brayden McNabb           60     0   5  0  
 2 Mirco Mueller            Erik Gudbranson          40     0   5  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Sean Couturier           Brad Marchand            60     0   3  2  
 2 Jean-Gabriel Pageau      Brendan Gallagher        40     0   3  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Brent Burns              Brayden McNabb           60     0   4  1  
 2 Ben Hutton               Ben Chiarot              40     0   4  1  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Sean Couturier           Brad Marchand            Brendan Gallagher        Brent Burns              Ben Hutton               

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Jay Beagle               Michael Grabner          Blake Coleman            Ben Chiarot              Brayden McNabb           

<b>Goaltenders</b>
Starting : Pavel Francouz           
Backup : Linus Ullmark            

<b>Extra Forwards</b>
Normal : Sean Couturier, Evgenii Dadonov, Brad Marchand - PP : Brad Marchand, Sean Couturier - PK : Blake Coleman
<b>Extra Defensemen</b>
Normal : Brayden McNabb, Ben Chiarot, Mirco Mueller - PP : Mirco Mueller - PK : Brayden McNabb, Ben Chiarot
<b>Penalty Shots</b>
Brad Marchand, Sean Couturier, Brendan Gallagher, Jean-Gabriel Pageau, Evgenii Dadonov
<b>Custom OT Lines Forwards</b>
Sean Couturier, Brad Marchand, Brendan Gallagher, Evgenii Dadonov, Jean-Gabriel Pageau, Blake Coleman, Ondrej Palat, Chris Tierney, Michael Grabner, Drake Caggiula
<b>Custom OT Lines Defensemen</b>
Brent Burns, Brayden McNabb, Ben Hutton, Ben Chiarot, Mirco Mueller

<b>Scratches</b>
Par Lindholm (Healthy), Lawson Crouse (Healthy), Derek Forbort (Healthy)</pre></div>
<h1 class="TeamLinesPro_MTL"><a id="Canadiens">Canadiens</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=16">Canadiens Page</a> ]
[ <a href="OTHL-PLF-ProTeamRoster.php#Canadiens">Pro Team Roster</a> ]
[ <a href="OTHL-PLF-ProTeamScoring.php#Canadiens">Pro Team Scoring</a> ]
[ <a href="OTHL-PLF-TeamFinance.php#Canadiens">Team Finance</a> ]
[ <a href="OTHL-PLF-ProTeamPlayersInfo.php#Canadiens">Pro Team PlayersInfo</a> ]
[ <a href="OTHL-PLF-ProTeamLines.php#Canadiens">Pro Team Lines</a> ]
[ <a href="OTHL-PLF-TeamProspects.php#Canadiens">Team Prospects</a> ]
[ <a href="OTHL-PLF-ProTeamSchedule.php#Canadiens">Pro Team Schedule</a> ]
[ <a href="OTHL-PLF-ProTeamStats.php#Canadiens">Pro Team Stats</a> ]
[ <a href="OTHL-PLF-ProTeamStatsVS.php#Canadiens">Pro Team Stats VS</a> ]
[ <a href="OTHL-PLF-TeamInjurySuspension.php#Canadiens">Team Injury Suspension</a> ]
[ <a href="OTHL-PLF-TeamHistory.php#Canadiens">Team History</a> ]
[ <a href="OTHL-PLF-TeamRecords.php#Canadiens">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Canadiens');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Canadiens" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Mark Scheifele           Alex DeBrincat           Nikolaj Ehlers           29     1   1  3  
 2 Kyle Turris              Clayton Keller           Brandon Tanev            29     1   1  3  
 3 Isac Lundestrom          Daniel Sprong            Dillon Dube              25     1   3  1  
 4 Henrik Borgstrom         Kyle Rau                 Ryan Lomberg             17     1   3  1  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Ivan Provorov            Connor Murphy                                     27     1   2  2  
 2 Aaron Ekblad             Marc-Edouard Vlasic                               27     1   2  2  
 3 Tucker Poolman           Jacob MacDonald                                   26     1   3  1  
 4 Ivan Provorov            Aaron Ekblad                                      20     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Mark Scheifele           Alex DeBrincat           Nikolaj Ehlers           50     1   1  3  
 2 Kyle Turris              Clayton Keller           Brandon Tanev            50     1   1  3  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Ivan Provorov            Aaron Ekblad                                      50     1   1  3  
 2 Marc-Edouard Vlasic      Connor Murphy                                     50     1   1  3  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Henrik Borgstrom         Brandon Tanev            50     1   3  1  
 2 Kyle Rau                 Daniel Sprong            50     1   3  1  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Ivan Provorov            Connor Murphy            50     2   3  0  
 2 Aaron Ekblad             Marc-Edouard Vlasic      50     2   3  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Brandon Tanev                                     50     1   3  1  
 2 Henrik Borgstrom                                  50     1   3  1  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Ivan Provorov            Connor Murphy            50     2   3  0  
 2 Aaron Ekblad             Marc-Edouard Vlasic      50     2   3  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Mark Scheifele           Alex DeBrincat           50     1   1  3  
 2 Kyle Turris              Nikolaj Ehlers           50     1   1  3  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Ivan Provorov            Connor Murphy            50     1   3  1  
 2 Aaron Ekblad             Marc-Edouard Vlasic      50     1   3  1  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Mark Scheifele           Alex DeBrincat           Nikolaj Ehlers           Ivan Provorov            Aaron Ekblad             

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Henrik Borgstrom         Brandon Tanev            Daniel Sprong            Ivan Provorov            Connor Murphy            

<b>Goaltenders</b>
Starting : Carter Hart              
Backup : Alex Nedeljkovic         

<b>Extra Forwards</b>
Normal : Clayton Keller, Brandon Tanev, Mark Scheifele - PP : Brandon Tanev, Daniel Sprong - PK : Daniel Sprong
<b>Extra Defensemen</b>
Normal : Aaron Ekblad, Connor Murphy, Ivan Provorov - PP : Jacob MacDonald - PK : Tucker Poolman, Jacob MacDonald
<b>Penalty Shots</b>
Mark Scheifele, Brandon Tanev, Dillon Dube, Ryan Lomberg, Kyle Turris
<b>Custom OT Lines Forwards</b>
Mark Scheifele, Alex DeBrincat, Nikolaj Ehlers, Clayton Keller, Brandon Tanev, Kyle Turris, Daniel Sprong, Isac Lundestrom, Dillon Dube, Henrik Borgstrom
<b>Custom OT Lines Defensemen</b>
Ivan Provorov, Aaron Ekblad, Connor Murphy, Marc-Edouard Vlasic, Tucker Poolman

<b>Scratches</b>
Matt Irwin (Healthy)</pre></div>
<h1 class="TeamLinesPro_VAN"><a id="Canucks">Canucks</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=29">Canucks Page</a> ]
[ <a href="OTHL-PLF-ProTeamRoster.php#Canucks">Pro Team Roster</a> ]
[ <a href="OTHL-PLF-ProTeamScoring.php#Canucks">Pro Team Scoring</a> ]
[ <a href="OTHL-PLF-TeamFinance.php#Canucks">Team Finance</a> ]
[ <a href="OTHL-PLF-ProTeamPlayersInfo.php#Canucks">Pro Team PlayersInfo</a> ]
[ <a href="OTHL-PLF-ProTeamLines.php#Canucks">Pro Team Lines</a> ]
[ <a href="OTHL-PLF-TeamProspects.php#Canucks">Team Prospects</a> ]
[ <a href="OTHL-PLF-ProTeamSchedule.php#Canucks">Pro Team Schedule</a> ]
[ <a href="OTHL-PLF-ProTeamStats.php#Canucks">Pro Team Stats</a> ]
[ <a href="OTHL-PLF-ProTeamStatsVS.php#Canucks">Pro Team Stats VS</a> ]
[ <a href="OTHL-PLF-TeamInjurySuspension.php#Canucks">Team Injury Suspension</a> ]
[ <a href="OTHL-PLF-TeamHistory.php#Canucks">Team History</a> ]
[ <a href="OTHL-PLF-TeamRecords.php#Canucks">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Canucks');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Canucks" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Auston Matthews          Kyle Connor              Nick Bonino              45     0   2  3  
 2 Jason Dickinson          Ilya Kovalchuk           Mikko Rantanen           35     0   2  3  
 3 Yanni Gourde             James Neal               Joel Armia               15     0   2  3  
 4 Brandon Dubinsky         Nikita Gusev             Ryan Carpenter           5      0   4  1  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Dougie Hamilton          Patrik Nemeth                                     48     0   3  2  
 2 Tyler Myers              Nikita Zaitsev                                    35     0   3  2  
 3 Scott Mayfield           MacKenzie Weegar                                  17     0   4  1  
 4 Dougie Hamilton          Patrik Nemeth                                     0      0   3  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Auston Matthews          Kyle Connor              Mikko Rantanen           70     0   1  4  
 2 Yanni Gourde             Ilya Kovalchuk           James Neal               30     0   1  4  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Dougie Hamilton          Tyler Myers                                       65     0   1  4  
 2 Patrik Nemeth            MacKenzie Weegar                                  35     0   1  4  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Nick Bonino              Jason Dickinson          70     0   4  1  
 2 Brandon Dubinsky         Ryan Carpenter           30     0   4  1  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Nikita Zaitsev           Patrik Nemeth            65     0   4  1  
 2 Scott Mayfield           MacKenzie Weegar         35     0   4  1  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Nick Bonino                                       60     0   5  0  
 2 Ryan Carpenter                                    40     0   5  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Nikita Zaitsev           Patrik Nemeth            60     0   5  0  
 2 Scott Mayfield           MacKenzie Weegar         40     0   5  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Auston Matthews          Kyle Connor              60     0   2  3  
 2 James Neal               Mikko Rantanen           40     0   2  3  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Dougie Hamilton          Patrik Nemeth            60     0   4  1  
 2 Tyler Myers              Nikita Zaitsev           40     0   4  1  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Auston Matthews          Kyle Connor              Mikko Rantanen           Tyler Myers              Dougie Hamilton          

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Nick Bonino              Jason Dickinson          Ryan Carpenter           Nikita Zaitsev           Patrik Nemeth            

<b>Goaltenders</b>
Starting : Jacob Markstrom          
Backup : James Reimer             

<b>Extra Forwards</b>
Normal : James Neal, Joel Armia, Ilya Kovalchuk - PP : Auston Matthews, Joel Armia - PK : Brandon Dubinsky
<b>Extra Defensemen</b>
Normal : Dougie Hamilton, Scott Mayfield, MacKenzie Weegar - PP : Scott Mayfield - PK : MacKenzie Weegar, Dougie Hamilton
<b>Penalty Shots</b>
Kyle Connor, Dougie Hamilton, Ilya Kovalchuk, Mikko Rantanen, Nick Bonino
<b>Custom OT Lines Forwards</b>
Nick Bonino, Mikko Rantanen, Kyle Connor, Auston Matthews, Yanni Gourde, James Neal, Nikita Gusev, Ilya Kovalchuk, Joel Armia, Jason Dickinson
<b>Custom OT Lines Defensemen</b>
Dougie Hamilton, Patrik Nemeth, Tyler Myers, Nikita Zaitsev, Scott Mayfield

<b>Scratches</b>
Nico Hischier (Healthy), Wayne Simmonds (Healthy), Brendan Smith (Healthy)</pre></div>
<h1 class="TeamLinesPro_WSH"><a id="Capitals">Capitals</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=30">Capitals Page</a> ]
[ <a href="OTHL-PLF-ProTeamRoster.php#Capitals">Pro Team Roster</a> ]
[ <a href="OTHL-PLF-ProTeamScoring.php#Capitals">Pro Team Scoring</a> ]
[ <a href="OTHL-PLF-TeamFinance.php#Capitals">Team Finance</a> ]
[ <a href="OTHL-PLF-ProTeamPlayersInfo.php#Capitals">Pro Team PlayersInfo</a> ]
[ <a href="OTHL-PLF-ProTeamLines.php#Capitals">Pro Team Lines</a> ]
[ <a href="OTHL-PLF-TeamProspects.php#Capitals">Team Prospects</a> ]
[ <a href="OTHL-PLF-ProTeamSchedule.php#Capitals">Pro Team Schedule</a> ]
[ <a href="OTHL-PLF-ProTeamStats.php#Capitals">Pro Team Stats</a> ]
[ <a href="OTHL-PLF-ProTeamStatsVS.php#Capitals">Pro Team Stats VS</a> ]
[ <a href="OTHL-PLF-TeamInjurySuspension.php#Capitals">Team Injury Suspension</a> ]
[ <a href="OTHL-PLF-TeamHistory.php#Capitals">Team History</a> ]
[ <a href="OTHL-PLF-TeamRecords.php#Capitals">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Capitals');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Capitals" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Jack Eichel              Alex Iafallo             Blake Lizotte            40     1   2  2  
 2 Sean Monahan             Rickard Rakell           Jake Virtanen            30     1   2  2  
 3 Pavel Zacha              Jujhar Khaira            Blake Comeau             20     1   2  2  
 4 T.J. Oshie               Michael Chaput           Chandler Stephenson      10     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Drew Doughty             Ian Cole                                          40     1   2  2  
 2 Dmitry Orlov             Sean Walker                                       30     1   2  2  
 3 Matt Roy                 Jacob Trouba                                      20     1   2  2  
 4 Drew Doughty             Ian Cole                                          10     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Jack Eichel              Alex Iafallo             Jujhar Khaira            60     1   2  2  
 2 Sean Monahan             Rickard Rakell           Blake Lizotte            40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Drew Doughty             Ian Cole                                          60     1   2  2  
 2 Dmitry Orlov             Sean Walker                                       40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Rickard Rakell           Blake Comeau             60     1   2  2  
 2 Jack Eichel              Jujhar Khaira            40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Drew Doughty             Ian Cole                 60     1   2  2  
 2 Dmitry Orlov             Sean Walker              40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Rickard Rakell                                    60     1   2  2  
 2 Jack Eichel                                       40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Drew Doughty             Ian Cole                 60     1   2  2  
 2 Dmitry Orlov             Sean Walker              40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Jack Eichel              Alex Iafallo             60     1   2  2  
 2 Sean Monahan             Rickard Rakell           40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Drew Doughty             Matt Roy                 60     1   2  2  
 2 Dmitry Orlov             Sean Walker              40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Jack Eichel              Rickard Rakell           Blake Lizotte            Drew Doughty             Ian Cole                 

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Jack Eichel              Rickard Rakell           Blake Lizotte            Drew Doughty             Ian Cole                 

<b>Goaltenders</b>
Starting : Petr Mrazek              
Backup : Cal Petersen             

<b>Extra Forwards</b>
Normal : Jujhar Khaira, Alex Iafallo, Rickard Rakell - PP : Jujhar Khaira, Alex Iafallo - PK : Jack Eichel
<b>Extra Defensemen</b>
Normal : Matt Roy, Drew Doughty, Dmitry Orlov - PP : Matt Roy - PK : Drew Doughty, Dmitry Orlov
<b>Penalty Shots</b>
Jack Eichel, Jujhar Khaira, Sean Monahan, Alex Iafallo, Rickard Rakell
<b>Custom OT Lines Forwards</b>
Jack Eichel, Blake Lizotte, Sean Monahan, Rickard Rakell, Jujhar Khaira, Alex Iafallo, Pavel Zacha, Blake Comeau, Jake Virtanen, Chandler Stephenson
<b>Custom OT Lines Defensemen</b>
Drew Doughty, Ian Cole, Dmitry Orlov, Sean Walker, Matt Roy

<b>Scratches</b>
Joakim Ryan (Healthy), Gabriel Vilardi (Healthy), Ryan Kesler (Healthy), Pekka Rinne (Suspend)</pre></div>
<h1 class="TeamLinesPro_ARI"><a id="Coyotes">Coyotes</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=23">Coyotes Page</a> ]
[ <a href="OTHL-PLF-ProTeamRoster.php#Coyotes">Pro Team Roster</a> ]
[ <a href="OTHL-PLF-ProTeamScoring.php#Coyotes">Pro Team Scoring</a> ]
[ <a href="OTHL-PLF-TeamFinance.php#Coyotes">Team Finance</a> ]
[ <a href="OTHL-PLF-ProTeamPlayersInfo.php#Coyotes">Pro Team PlayersInfo</a> ]
[ <a href="OTHL-PLF-ProTeamLines.php#Coyotes">Pro Team Lines</a> ]
[ <a href="OTHL-PLF-TeamProspects.php#Coyotes">Team Prospects</a> ]
[ <a href="OTHL-PLF-ProTeamSchedule.php#Coyotes">Pro Team Schedule</a> ]
[ <a href="OTHL-PLF-ProTeamStats.php#Coyotes">Pro Team Stats</a> ]
[ <a href="OTHL-PLF-ProTeamStatsVS.php#Coyotes">Pro Team Stats VS</a> ]
[ <a href="OTHL-PLF-TeamInjurySuspension.php#Coyotes">Team Injury Suspension</a> ]
[ <a href="OTHL-PLF-TeamHistory.php#Coyotes">Team History</a> ]
[ <a href="OTHL-PLF-TeamRecords.php#Coyotes">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Coyotes');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Coyotes" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Mika Zibanejad           Tomas Tatar              Jesper Fast              33     1   2  2  
 2 Leon Draisaitl           Cedric Paquette          William Nylander         33     1   2  2  
 3 Kevin Hayes              Pierre-Luc Dubois        Nikita Kucherov          29     1   2  2  
 4 Nate Thompson            Justin Bailey            Dylan Strome             5      1   3  1  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Oliver Ekman-Larsson     Thomas Chabot                                     40     1   2  2  
 2 Cody Ceci                Ethan Bear                                        39     1   2  2  
 3 Niklas Hjalmarsson       Carl Gunnarsson                                   15     1   2  2  
 4 Oliver Ekman-Larsson     Thomas Chabot                                     6      1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Mika Zibanejad           Leon Draisaitl           William Nylander         50     1   2  2  
 2 Kevin Hayes              Pierre-Luc Dubois        Nikita Kucherov          50     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Oliver Ekman-Larsson     Thomas Chabot                                     60     1   2  2  
 2 Cody Ceci                Ethan Bear                                        40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Mika Zibanejad           Jesper Fast              60     1   2  2  
 2 Kevin Hayes              Cedric Paquette          40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Oliver Ekman-Larsson     Ethan Bear               60     1   2  2  
 2 Niklas Hjalmarsson       Cody Ceci                40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Mika Zibanejad                                    60     1   2  2  
 2 Kevin Hayes                                       40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Oliver Ekman-Larsson     Ethan Bear               60     1   2  2  
 2 Niklas Hjalmarsson       Cody Ceci                40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Leon Draisaitl           Nikita Kucherov          60     1   2  2  
 2 Mika Zibanejad           William Nylander         40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Oliver Ekman-Larsson     Cody Ceci                60     1   2  2  
 2 Ethan Bear               Thomas Chabot            40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Mika Zibanejad           Leon Draisaitl           Nikita Kucherov          Oliver Ekman-Larsson     Thomas Chabot            

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Mika Zibanejad           Kevin Hayes              Leon Draisaitl           Oliver Ekman-Larsson     Cody Ceci                

<b>Goaltenders</b>
Starting : Tuukka Rask              
Backup : Kaapo Kahkonen           

<b>Extra Forwards</b>
Normal : Mika Zibanejad, Leon Draisaitl, Kevin Hayes - PP : William Nylander, Leon Draisaitl - PK : Kevin Hayes
<b>Extra Defensemen</b>
Normal : Oliver Ekman-Larsson, Thomas Chabot, Cody Ceci - PP : Thomas Chabot - PK : Ethan Bear, Cody Ceci
<b>Penalty Shots</b>
Pierre-Luc Dubois, Leon Draisaitl, Tomas Tatar, Kevin Hayes, William Nylander
<b>Custom OT Lines Forwards</b>
Leon Draisaitl, Nikita Kucherov, William Nylander, Mika Zibanejad, Kevin Hayes, Dylan Strome, Pierre-Luc Dubois, Tomas Tatar, Jesper Fast, Cedric Paquette
<b>Custom OT Lines Defensemen</b>
Oliver Ekman-Larsson, Thomas Chabot, Niklas Hjalmarsson, Cody Ceci, Ethan Bear

<b>Scratches</b>
Oskar Sundqvist (Healthy), Slater Koekkoek (Healthy)</pre></div>
<h1 class="TeamLinesPro_NJD"><a id="Devils">Devils</a></h1>
<b>Lines are Incomplete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=18">Devils Page</a> ]
[ <a href="OTHL-PLF-ProTeamRoster.php#Devils">Pro Team Roster</a> ]
[ <a href="OTHL-PLF-ProTeamScoring.php#Devils">Pro Team Scoring</a> ]
[ <a href="OTHL-PLF-TeamFinance.php#Devils">Team Finance</a> ]
[ <a href="OTHL-PLF-ProTeamPlayersInfo.php#Devils">Pro Team PlayersInfo</a> ]
[ <a href="OTHL-PLF-ProTeamLines.php#Devils">Pro Team Lines</a> ]
[ <a href="OTHL-PLF-TeamProspects.php#Devils">Team Prospects</a> ]
[ <a href="OTHL-PLF-ProTeamSchedule.php#Devils">Pro Team Schedule</a> ]
[ <a href="OTHL-PLF-ProTeamStats.php#Devils">Pro Team Stats</a> ]
[ <a href="OTHL-PLF-ProTeamStatsVS.php#Devils">Pro Team Stats VS</a> ]
[ <a href="OTHL-PLF-TeamInjurySuspension.php#Devils">Team Injury Suspension</a> ]
[ <a href="OTHL-PLF-TeamHistory.php#Devils">Team History</a> ]
[ <a href="OTHL-PLF-TeamRecords.php#Devils">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Devils');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Devils" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Jonathan Toews           Unknown Player           Unknown Player           37     1   2  2  
 2 William Karlsson         Kirby Dach               Jimmy Vesey              36     1   2  2  
 3 Ryan Getzlaf             Nick Ritchie             Gemel Smith              21     1   2  2  
 4 Riley Sheahan            Mason Marchment          Antti Suomela            6      1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Darnell Nurse            Chris Tanev                                       40     1   2  2  
 2 Adam Larsson             Radim Simek                                       30     1   2  2  
 3 Michal Kempny            Trevor van Riemsdyk                               20     1   2  2  
 4 Darnell Nurse            Chris Tanev                                       10     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Jonathan Toews           Unknown Player           Unknown Player           60     1   2  2  
 2 William Karlsson         Nick Ritchie             Jimmy Vesey              40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Darnell Nurse            Chris Tanev                                       60     1   2  2  
 2 Adam Larsson             Michal Kempny                                     40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Jonathan Toews           William Karlsson         60     1   2  2  
 2 Ryan Getzlaf             Gemel Smith              40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Darnell Nurse            Chris Tanev              60     1   2  2  
 2 Adam Larsson             Michal Kempny            40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Jonathan Toews                                    60     1   2  2  
 2 William Karlsson                                  40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Darnell Nurse            Chris Tanev              60     1   2  2  
 2 Adam Larsson             Radim Simek              40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Jonathan Toews           William Karlsson         60     1   2  2  
 2 Ryan Getzlaf             Unknown Player           40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Darnell Nurse            Chris Tanev              60     1   2  2  
 2 Adam Larsson             Michal Kempny            40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Jonathan Toews           Unknown Player           Unknown Player           Darnell Nurse            Chris Tanev              

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Ryan Getzlaf             Unknown Player           Jimmy Vesey              Darnell Nurse            Chris Tanev              

<b>Goaltenders</b>
Starting : Braden Holtby            
Backup : Unknown Goalie           

<b>Extra Forwards</b>
Normal : Antti Suomela, Riley Sheahan, Kirby Dach - PP : Antti Suomela, Riley Sheahan - PK : Kirby Dach
<b>Extra Defensemen</b>
Normal : Radim Simek, Trevor van Riemsdyk, Adam Larsson - PP : Radim Simek - PK : Trevor van Riemsdyk, Adam Larsson
<b>Penalty Shots</b>
Jonathan Toews, William Karlsson, Ryan Getzlaf, Unknown Player, Unknown Player
<b>Custom OT Lines Forwards</b>
Jonathan Toews, William Karlsson, Ryan Getzlaf, Unknown Player, Unknown Player, Riley Sheahan, Nick Ritchie, Jimmy Vesey, Kirby Dach, Gemel Smith
<b>Custom OT Lines Defensemen</b>
Darnell Nurse, Chris Tanev, Adam Larsson, Radim Simek, Michal Kempny

<b>Scratches</b>
Patric Hornqvist (Healthy), Anders Bjork (Healthy), Timo Meier (Healthy), Christian Folin (Healthy), Kasimir Kaskisuo (Healthy)
Robin Lehner (Healthy)</pre></div>
<h1 class="TeamLinesPro_ANH"><a id="Ducks">Ducks</a></h1>
<b>Lines are Incomplete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=1">Ducks Page</a> ]
[ <a href="OTHL-PLF-ProTeamRoster.php#Ducks">Pro Team Roster</a> ]
[ <a href="OTHL-PLF-ProTeamScoring.php#Ducks">Pro Team Scoring</a> ]
[ <a href="OTHL-PLF-TeamFinance.php#Ducks">Team Finance</a> ]
[ <a href="OTHL-PLF-ProTeamPlayersInfo.php#Ducks">Pro Team PlayersInfo</a> ]
[ <a href="OTHL-PLF-ProTeamLines.php#Ducks">Pro Team Lines</a> ]
[ <a href="OTHL-PLF-TeamProspects.php#Ducks">Team Prospects</a> ]
[ <a href="OTHL-PLF-ProTeamSchedule.php#Ducks">Pro Team Schedule</a> ]
[ <a href="OTHL-PLF-ProTeamStats.php#Ducks">Pro Team Stats</a> ]
[ <a href="OTHL-PLF-ProTeamStatsVS.php#Ducks">Pro Team Stats VS</a> ]
[ <a href="OTHL-PLF-TeamInjurySuspension.php#Ducks">Team Injury Suspension</a> ]
[ <a href="OTHL-PLF-TeamHistory.php#Ducks">Team History</a> ]
[ <a href="OTHL-PLF-TeamRecords.php#Ducks">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Ducks');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Ducks" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Brayden Schenn           Artemi Panarin           Unknown Player           40     0   2  3  
 2 Nazem Kadri              Johnny Gaudreau          Zach Hyman               30     1   2  2  
 3 Jordan Staal             Alex Steen               Jacob de La Rose         24     1   2  2  
 4 Matthew Peca             Jacob de La Rose         Jordan Kyrou             6      1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Jake Muzzin              Morgan Rielly                                     40     1   2  2  
 2 Charlie McAvoy           Alec Martinez                                     30     1   2  2  
 3 Josh Morrissey           Luke Schenn                                       20     1   2  2  
 4 Jake Muzzin              Morgan Rielly                                     10     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Brayden Schenn           Artemi Panarin           Unknown Player           60     0   1  4  
 2 Nazem Kadri              Johnny Gaudreau          Zach Hyman               40     0   1  4  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Jake Muzzin              Morgan Rielly                                     60     0   1  4  
 2 Charlie McAvoy           Alec Martinez                                     40     0   1  4  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Travis Zajac             Jacob de La Rose         60     1   4  0  
 2 Jordan Staal             Matthew Peca             40     1   4  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Jake Muzzin              Morgan Rielly            60     1   4  0  
 2 Charlie McAvoy           Alec Martinez            40     1   4  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Travis Zajac                                      60     1   4  0  
 2 Jordan Staal                                      40     1   4  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Jake Muzzin              Morgan Rielly            60     1   4  0  
 2 Charlie McAvoy           Alec Martinez            40     1   4  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Brayden Schenn           Artemi Panarin           60     0   2  3  
 2 Nazem Kadri              Unknown Player           40     0   2  3  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Jake Muzzin              Morgan Rielly            60     1   2  2  
 2 Charlie McAvoy           Alec Martinez            40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Brayden Schenn           Artemi Panarin           Unknown Player           Jake Muzzin              Morgan Rielly            

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Brayden Schenn           Artemi Panarin           Unknown Player           Jake Muzzin              Morgan Rielly            

<b>Goaltenders</b>
Starting : Ryan Miller              
Backup : Tristan Jarry            

<b>Extra Forwards</b>
Normal : Jordan Staal, Travis Zajac, Alex Steen - PP : Jordan Staal, Travis Zajac - PK : Alex Steen
<b>Extra Defensemen</b>
Normal : Josh Morrissey, Luke Schenn, Charlie McAvoy - PP : Josh Morrissey - PK : Luke Schenn, Charlie McAvoy
<b>Penalty Shots</b>
Artemi Panarin, Brayden Schenn, Unknown Player, Nazem Kadri, Johnny Gaudreau
<b>Custom OT Lines Forwards</b>
Artemi Panarin, Brayden Schenn, Unknown Player, Nazem Kadri, Johnny Gaudreau, Zach Hyman, Jordan Staal, Travis Zajac, Alex Steen, Jacob de La Rose
<b>Custom OT Lines Defensemen</b>
Jake Muzzin, Morgan Rielly, Charlie McAvoy, Alec Martinez, Josh Morrissey

<b>Scratches</b>
Madison Bowey (Healthy), Jake Guentzel (Healthy), Nathan Gerbe (Healthy), Kenny Agostino (Healthy)</pre></div>
<h1 class="TeamLinesPro_CGY"><a id="Flames">Flames</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=5">Flames Page</a> ]
[ <a href="OTHL-PLF-ProTeamRoster.php#Flames">Pro Team Roster</a> ]
[ <a href="OTHL-PLF-ProTeamScoring.php#Flames">Pro Team Scoring</a> ]
[ <a href="OTHL-PLF-TeamFinance.php#Flames">Team Finance</a> ]
[ <a href="OTHL-PLF-ProTeamPlayersInfo.php#Flames">Pro Team PlayersInfo</a> ]
[ <a href="OTHL-PLF-ProTeamLines.php#Flames">Pro Team Lines</a> ]
[ <a href="OTHL-PLF-TeamProspects.php#Flames">Team Prospects</a> ]
[ <a href="OTHL-PLF-ProTeamSchedule.php#Flames">Pro Team Schedule</a> ]
[ <a href="OTHL-PLF-ProTeamStats.php#Flames">Pro Team Stats</a> ]
[ <a href="OTHL-PLF-ProTeamStatsVS.php#Flames">Pro Team Stats VS</a> ]
[ <a href="OTHL-PLF-TeamInjurySuspension.php#Flames">Team Injury Suspension</a> ]
[ <a href="OTHL-PLF-TeamHistory.php#Flames">Team History</a> ]
[ <a href="OTHL-PLF-TeamRecords.php#Flames">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Flames');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Flames" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Bo Horvat                Taylor Hall              Andre Burakovsky         38     0   3  2  
 2 Dylan Larkin             Anthony Beauvillier      Tom Wilson               37     0   3  2  
 3 Phillip Danault          Matthew Nieto            Bryan Little             15     0   2  3  
 4 Adam Lowry               Kevin Labanc             Rasmus Asplund           10     0   2  3  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Erik Karlsson            Zdeno Chara                                       40     0   4  1  
 2 Jaccob Slavin            Brady Skjei                                       40     0   4  1  
 3 Brent Seabrook           Devon Toews                                       10     0   5  0  
 4 Jaccob Slavin            Erik Karlsson                                     10     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Bo Horvat                Taylor Hall              Andre Burakovsky         70     0   0  5  
 2 Dylan Larkin             Anthony Beauvillier      Tom Wilson               30     0   0  5  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Devon Toews              Erik Karlsson                                     82     0   0  5  
 2 Brady Skjei              Jaccob Slavin                                     18     0   0  5  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Adam Lowry               Matthew Nieto            80     0   5  0  
 2 Phillip Danault          Rasmus Asplund           20     0   5  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Jaccob Slavin            Zdeno Chara              70     0   5  0  
 2 Brent Seabrook           Brady Skjei              30     0   5  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Adam Lowry                                        84     0   5  0  
 2 Phillip Danault                                   16     0   5  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Zdeno Chara              Jaccob Slavin            69     0   5  0  
 2 Brady Skjei              Erik Karlsson            31     0   5  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Bo Horvat                Taylor Hall              60     1   2  2  
 2 Dylan Larkin             Andre Burakovsky         40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Zdeno Chara              Erik Karlsson            60     1   2  2  
 2 Jaccob Slavin            Brady Skjei              40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Bo Horvat                Taylor Hall              Dylan Larkin             Jaccob Slavin            Erik Karlsson            

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Phillip Danault          Adam Lowry               Matthew Nieto            Jaccob Slavin            Brent Seabrook           

<b>Goaltenders</b>
Starting : Ben Bishop               
Backup : Alex Stalock             

<b>Extra Forwards</b>
Normal : Dylan Larkin, Bo Horvat, Taylor Hall - PP : Tom Wilson, Bo Horvat - PK : Tom Wilson
<b>Extra Defensemen</b>
Normal : Zdeno Chara, Erik Karlsson, Jaccob Slavin - PP : Devon Toews - PK : Brady Skjei, Zdeno Chara
<b>Penalty Shots</b>
Anthony Beauvillier, Dylan Larkin, Kevin Labanc, Bryan Little, Devon Toews
<b>Custom OT Lines Forwards</b>
Bo Horvat, Andre Burakovsky, Dylan Larkin, Tom Wilson, Taylor Hall, Phillip Danault, Anthony Beauvillier, Kevin Labanc, Adam Lowry, Matthew Nieto
<b>Custom OT Lines Defensemen</b>
Erik Karlsson, Zdeno Chara, Brent Seabrook, Devon Toews, Jaccob Slavin

<b>Scratches</b>
David Perron (Healthy), Travis Dermott (Healthy), Matt Tennyson (Healthy), Jonathon Merrill (Healthy)</pre></div>
<h1 class="TeamLinesPro_PHL"><a id="Flyers">Flyers</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=22">Flyers Page</a> ]
[ <a href="OTHL-PLF-ProTeamRoster.php#Flyers">Pro Team Roster</a> ]
[ <a href="OTHL-PLF-ProTeamScoring.php#Flyers">Pro Team Scoring</a> ]
[ <a href="OTHL-PLF-TeamFinance.php#Flyers">Team Finance</a> ]
[ <a href="OTHL-PLF-ProTeamPlayersInfo.php#Flyers">Pro Team PlayersInfo</a> ]
[ <a href="OTHL-PLF-ProTeamLines.php#Flyers">Pro Team Lines</a> ]
[ <a href="OTHL-PLF-TeamProspects.php#Flyers">Team Prospects</a> ]
[ <a href="OTHL-PLF-ProTeamSchedule.php#Flyers">Pro Team Schedule</a> ]
[ <a href="OTHL-PLF-ProTeamStats.php#Flyers">Pro Team Stats</a> ]
[ <a href="OTHL-PLF-ProTeamStatsVS.php#Flyers">Pro Team Stats VS</a> ]
[ <a href="OTHL-PLF-TeamInjurySuspension.php#Flyers">Team Injury Suspension</a> ]
[ <a href="OTHL-PLF-TeamHistory.php#Flyers">Team History</a> ]
[ <a href="OTHL-PLF-TeamRecords.php#Flyers">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Flyers');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Flyers" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Ryan Strome              Bryan Rust               Cam Atkinson             35     1   3  1  
 2 Brock Nelson             Mike Hoffman             Kevin Fiala              30     0   1  4  
 3 Joel Eriksson Ek         Viktor Arvidsson         Kailer Yamamoto          25     0   2  3  
 4 Valtteri Filppula        Filip Zadina             Tyler Ennis              10     0   3  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Alexander Edler          Keith Yandle                                      35     0   2  3  
 2 Jonas Brodin             Rasmus Dahlin                                     30     0   2  3  
 3 Mark Borowiecki          Brian Dumoulin                                    25     0   2  3  
 4 Mark Borowiecki          Jonas Brodin                                      10     0   5  0  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Brock Nelson             Kevin Fiala              Bryan Rust               60     0   0  5  
 2 Ryan Strome              Viktor Arvidsson         Cam Atkinson             40     0   0  5  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Rasmus Dahlin            Mike Hoffman                                      60     0   0  5  
 2 Keith Yandle             Kailer Yamamoto                                   40     0   0  5  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Brock Nelson             Joel Eriksson Ek         60     0   5  0  
 2 Ryan Strome              Cam Atkinson             40     0   5  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Alexander Edler          Mark Borowiecki          60     0   5  0  
 2 Jonas Brodin             Brian Dumoulin           40     0   5  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Joel Eriksson Ek                                  60     0   5  0  
 2 Brock Nelson                                      40     0   5  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Alexander Edler          Mark Borowiecki          60     0   5  0  
 2 Jonas Brodin             Brian Dumoulin           40     0   5  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Brock Nelson             Bryan Rust               60     0   3  2  
 2 Ryan Strome              Mike Hoffman             40     0   3  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Alexander Edler          Mark Borowiecki          60     0   3  2  
 2 Jonas Brodin             Brian Dumoulin           40     0   3  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Ryan Strome              Bryan Rust               Kevin Fiala              Keith Yandle             Brian Dumoulin           

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Brock Nelson             Joel Eriksson Ek         Ryan Strome              Alexander Edler          Jonas Brodin             

<b>Goaltenders</b>
Starting : Anton Khudobin           
Backup : Mikko Koskinen           

<b>Extra Forwards</b>
Normal : Bryan Rust, Mike Hoffman, Kevin Fiala - PP : Bryan Rust, Mike Hoffman - PK : Joel Eriksson Ek
<b>Extra Defensemen</b>
Normal : Alexander Edler, Jonas Brodin, Keith Yandle - PP : Keith Yandle - PK : Alexander Edler, Jonas Brodin
<b>Penalty Shots</b>
Viktor Arvidsson, Bryan Rust, Ryan Strome, Mike Hoffman, Kailer Yamamoto
<b>Custom OT Lines Forwards</b>
Brock Nelson, Bryan Rust, Kevin Fiala, Mike Hoffman, Viktor Arvidsson, Filip Zadina, Kailer Yamamoto, Cam Atkinson, Joel Eriksson Ek, Tyler Ennis
<b>Custom OT Lines Defensemen</b>
Alexander Edler, Jonas Brodin, Keith Yandle, Mark Borowiecki, Rasmus Dahlin

<b>Scratches</b>
Cal Clutterbuck (Healthy), Nathan Beaulieu (Healthy), Curtis McElhinney (Healthy)</pre></div>
<h1 class="TeamLinesPro_VGK"><a id="GoldenKnights">Golden Knights</a></h1>
<b>Lines are Incomplete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=31">Golden Knights Page</a> ]
[ <a href="OTHL-PLF-ProTeamRoster.php#GoldenKnights">Pro Team Roster</a> ]
[ <a href="OTHL-PLF-ProTeamScoring.php#GoldenKnights">Pro Team Scoring</a> ]
[ <a href="OTHL-PLF-TeamFinance.php#GoldenKnights">Team Finance</a> ]
[ <a href="OTHL-PLF-ProTeamPlayersInfo.php#GoldenKnights">Pro Team PlayersInfo</a> ]
[ <a href="OTHL-PLF-ProTeamLines.php#GoldenKnights">Pro Team Lines</a> ]
[ <a href="OTHL-PLF-TeamProspects.php#GoldenKnights">Team Prospects</a> ]
[ <a href="OTHL-PLF-ProTeamSchedule.php#GoldenKnights">Pro Team Schedule</a> ]
[ <a href="OTHL-PLF-ProTeamStats.php#GoldenKnights">Pro Team Stats</a> ]
[ <a href="OTHL-PLF-ProTeamStatsVS.php#GoldenKnights">Pro Team Stats VS</a> ]
[ <a href="OTHL-PLF-TeamInjurySuspension.php#GoldenKnights">Team Injury Suspension</a> ]
[ <a href="OTHL-PLF-TeamHistory.php#GoldenKnights">Team History</a> ]
[ <a href="OTHL-PLF-TeamRecords.php#GoldenKnights">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_GoldenKnights');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_GoldenKnights" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Nicklas Backstrom        Andrei Svechnikov        Jordan Eberle            35     2   2  1  
 2 Eric Staal               Phil Kessel              Drake Batherson          30     2   2  1  
 3 Nolan Patrick            Lias Andersson           Andrew Cogliano          20     2   2  1  
 4 Colton Sissons           Morgan Geekie            Jake Evans               15     2   2  1  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Colton Parayko           Travis Sanheim                                    40     2   2  1  
 2 Nick Holden              Henri Jokiharju                                   30     2   2  1  
 3 Vince Dunn               Gustav Lindstrom                                  25     2   2  1  
 4 Colton Parayko           Travis Sanheim                                    5      2   2  1  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Nicklas Backstrom        Andrei Svechnikov        Jordan Eberle            60     1   2  2  
 2 Eric Staal               Phil Kessel              Drake Batherson          40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Colton Parayko           Travis Sanheim                                    60     1   2  2  
 2 Henri Jokiharju          Vince Dunn                                        40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Colton Sissons           Andrew Cogliano          60     2   2  1  
 2 Nolan Patrick            Lias Andersson           40     2   2  1  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Colton Parayko           Travis Sanheim           60     2   2  1  
 2 Nick Holden              Henri Jokiharju          40     2   2  1  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Colton Sissons                                    60     2   2  1  
 2 Andrew Cogliano                                   40     2   2  1  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Colton Parayko           Travis Sanheim           60     2   2  1  
 2 Nick Holden              Henri Jokiharju          40     2   2  1  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Nicklas Backstrom        Andrei Svechnikov        60     2   2  1  
 2 Eric Staal               Phil Kessel              40     2   2  1  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Colton Parayko           Travis Sanheim           60     2   2  1  
 2 Henri Jokiharju          Nick Holden              40     2   2  1  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Nicklas Backstrom        Andrei Svechnikov        Jordan Eberle            Colton Parayko           Travis Sanheim           

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Colton Sissons           Lias Andersson           Andrew Cogliano          Colton Parayko           Travis Sanheim           

<b>Goaltenders</b>
Starting : Unknown Goalie           
Backup : Adin Hill                

<b>Extra Forwards</b>
Normal : Nicklas Backstrom, Andrei Svechnikov, Eric Staal - PP : Nicklas Backstrom, Andrei Svechnikov - PK : Nicklas Backstrom
<b>Extra Defensemen</b>
Normal : Colton Parayko, Travis Sanheim, Nick Holden - PP : Colton Parayko - PK : Colton Parayko, Travis Sanheim
<b>Penalty Shots</b>
Andrei Svechnikov, Nolan Patrick, Nicklas Backstrom, Andrew Cogliano, Jordan Eberle
<b>Custom OT Lines Forwards</b>
Nicklas Backstrom, Andrei Svechnikov, Eric Staal, Phil Kessel, Jordan Eberle, Nolan Patrick, Drake Batherson, Colton Sissons, Andrew Cogliano, Morgan Geekie
<b>Custom OT Lines Defensemen</b>
Colton Parayko, Travis Sanheim, Nick Holden, Henri Jokiharju, Vince Dunn

<b>Scratches</b>
Mackenzie Blackwood (Healthy)</pre></div>
<h1 class="TeamLinesPro_CAR"><a id="Hurricanes">Hurricanes</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=6">Hurricanes Page</a> ]
[ <a href="OTHL-PLF-ProTeamRoster.php#Hurricanes">Pro Team Roster</a> ]
[ <a href="OTHL-PLF-ProTeamScoring.php#Hurricanes">Pro Team Scoring</a> ]
[ <a href="OTHL-PLF-TeamFinance.php#Hurricanes">Team Finance</a> ]
[ <a href="OTHL-PLF-ProTeamPlayersInfo.php#Hurricanes">Pro Team PlayersInfo</a> ]
[ <a href="OTHL-PLF-ProTeamLines.php#Hurricanes">Pro Team Lines</a> ]
[ <a href="OTHL-PLF-TeamProspects.php#Hurricanes">Team Prospects</a> ]
[ <a href="OTHL-PLF-ProTeamSchedule.php#Hurricanes">Pro Team Schedule</a> ]
[ <a href="OTHL-PLF-ProTeamStats.php#Hurricanes">Pro Team Stats</a> ]
[ <a href="OTHL-PLF-ProTeamStatsVS.php#Hurricanes">Pro Team Stats VS</a> ]
[ <a href="OTHL-PLF-TeamInjurySuspension.php#Hurricanes">Team Injury Suspension</a> ]
[ <a href="OTHL-PLF-TeamHistory.php#Hurricanes">Team History</a> ]
[ <a href="OTHL-PLF-TeamRecords.php#Hurricanes">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Hurricanes');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Hurricanes" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Nick Paul                Dominik Kahun            Mathieu Perreault        40     1   2  2  
 2 Ryan Hartman             Sonny Milano             Dryden Hunt              30     1   2  2  
 3 German Rubtsov           Mackenzie MacEachern     Dmitry Sokolov           20     1   2  2  
 4 Aleksi Saarela           Rem Pitlick              Stelio Mattheos          10     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Filip Hronek             P.K. Subban                                       40     1   2  2  
 2 Jakob Chychrun           Marcus Pettersson                                 30     1   2  2  
 3 Vladislav Gavrikov       Markus Nutivaara                                  20     1   2  2  
 4 Filip Hronek             P.K. Subban                                       10     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Nick Paul                Dominik Kahun            Mathieu Perreault        60     1   2  2  
 2 Ryan Hartman             Sonny Milano             Dryden Hunt              40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Filip Hronek             P.K. Subban                                       60     1   2  2  
 2 Jakob Chychrun           Marcus Pettersson                                 40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Nick Paul                Dominik Kahun            60     1   2  2  
 2 Mathieu Perreault        Ryan Hartman             40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Filip Hronek             P.K. Subban              60     1   2  2  
 2 Jakob Chychrun           Marcus Pettersson        40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Nick Paul                                         60     1   2  2  
 2 Dominik Kahun                                     40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Filip Hronek             P.K. Subban              60     1   2  2  
 2 Jakob Chychrun           Marcus Pettersson        40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Nick Paul                Dominik Kahun            60     1   2  2  
 2 Mathieu Perreault        Ryan Hartman             40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Filip Hronek             P.K. Subban              60     1   2  2  
 2 Jakob Chychrun           Marcus Pettersson        40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Nick Paul                Dominik Kahun            Mathieu Perreault        Filip Hronek             P.K. Subban              

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Nick Paul                Dominik Kahun            Mathieu Perreault        Filip Hronek             P.K. Subban              

<b>Goaltenders</b>
Starting : Filip Gustavsson         
Backup : Mike Smith               

<b>Extra Forwards</b>
Normal : German Rubtsov, Stelio Mattheos, Aleksi Saarela - PP : German Rubtsov, Dominik Kahun - PK : Aleksi Saarela
<b>Extra Defensemen</b>
Normal : Vladislav Gavrikov, Markus Nutivaara, Jakob Chychrun - PP : Vladislav Gavrikov - PK : Markus Nutivaara, Jakob Chychrun
<b>Penalty Shots</b>
Nick Paul, Dominik Kahun, Mathieu Perreault, Ryan Hartman, Sonny Milano
<b>Custom OT Lines Forwards</b>
Nick Paul, Dominik Kahun, Mathieu Perreault, Ryan Hartman, Sonny Milano, Stelio Mattheos, Aleksi Saarela, Dryden Hunt, Mackenzie MacEachern, Dmitry Sokolov
<b>Custom OT Lines Defensemen</b>
Filip Hronek, P.K. Subban, Jakob Chychrun, Marcus Pettersson, Vladislav Gavrikov

<b>Scratches</b>
Bobby Ryan (Healthy), Ryan Johansen (Healthy), Mark Jankowski (Healthy), Martin Jones (Healthy)</pre></div>
<h1 class="TeamLinesPro_NYI"><a id="Islanders">Islanders</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=19">Islanders Page</a> ]
[ <a href="OTHL-PLF-ProTeamRoster.php#Islanders">Pro Team Roster</a> ]
[ <a href="OTHL-PLF-ProTeamScoring.php#Islanders">Pro Team Scoring</a> ]
[ <a href="OTHL-PLF-TeamFinance.php#Islanders">Team Finance</a> ]
[ <a href="OTHL-PLF-ProTeamPlayersInfo.php#Islanders">Pro Team PlayersInfo</a> ]
[ <a href="OTHL-PLF-ProTeamLines.php#Islanders">Pro Team Lines</a> ]
[ <a href="OTHL-PLF-TeamProspects.php#Islanders">Team Prospects</a> ]
[ <a href="OTHL-PLF-ProTeamSchedule.php#Islanders">Pro Team Schedule</a> ]
[ <a href="OTHL-PLF-ProTeamStats.php#Islanders">Pro Team Stats</a> ]
[ <a href="OTHL-PLF-ProTeamStatsVS.php#Islanders">Pro Team Stats VS</a> ]
[ <a href="OTHL-PLF-TeamInjurySuspension.php#Islanders">Team Injury Suspension</a> ]
[ <a href="OTHL-PLF-TeamHistory.php#Islanders">Team History</a> ]
[ <a href="OTHL-PLF-TeamRecords.php#Islanders">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Islanders');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Islanders" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Mathew Barzal            Jonathan Huberdeau       Alexander Radulov        30     0   0  5  
 2 Ryan O'Reilly            Connor Brown             Scott Laughton           30     0   5  0  
 3 Steven Stamkos           Jakub Voracek            Calle Jarnkrok           30     0   1  4  
 4 Alan Quine               Zack Smith               Austin Watson            10     0   5  0  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Calvin de Haan           Ryan Pulock                                       40     0   4  1  
 2 Victor Hedman            Cale Makar                                        28     0   3  2  
 3 Mark Pysyk               Greg Pateryn                                      22     0   5  0  
 4 Victor Hedman            Calvin de Haan                                    10     0   3  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Mathew Barzal            Jonathan Huberdeau       Steven Stamkos           60     0   0  5  
 2 Ryan O'Reilly            Jakub Voracek            Alexander Radulov        40     0   0  5  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Scott Laughton           Cale Makar                                        70     0   0  5  
 2 Victor Hedman            Connor Brown                                      30     0   0  5  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Ryan O'Reilly            Connor Brown             60     0   5  0  
 2 Scott Laughton           Austin Watson            40     0   5  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Ryan Pulock              Calvin de Haan           60     0   5  0  
 2 Victor Hedman            Greg Pateryn             40     0   5  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Ryan O'Reilly                                     60     0   5  0  
 2 Connor Brown                                      40     0   5  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Ryan Pulock              Calvin de Haan           60     0   5  0  
 2 Mark Pysyk               Victor Hedman            40     0   5  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Ryan O'Reilly            Steven Stamkos           60     0   2  3  
 2 Mathew Barzal            Jonathan Huberdeau       40     0   2  3  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Cale Makar               Victor Hedman            60     0   2  3  
 2 Greg Pateryn             Ryan Pulock              40     0   3  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Ryan O'Reilly            Jonathan Huberdeau       Steven Stamkos           Mathew Barzal            Cale Makar               

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Ryan O'Reilly            Austin Watson            Connor Brown             Victor Hedman            Ryan Pulock              

<b>Goaltenders</b>
Starting : Philipp Grubauer         
Backup : Carter Hutton            

<b>Extra Forwards</b>
Normal : Mathew Barzal, Ryan O'Reilly, Steven Stamkos - PP : Connor Brown, Scott Laughton - PK : Steven Stamkos
<b>Extra Defensemen</b>
Normal : Ryan Pulock, Cale Makar, Greg Pateryn - PP : Mark Pysyk - PK : Mark Pysyk, Greg Pateryn
<b>Penalty Shots</b>
Alexander Radulov, Calle Jarnkrok, Connor Brown, Steven Stamkos, Ryan O'Reilly
<b>Custom OT Lines Forwards</b>
Steven Stamkos, Ryan O'Reilly, Jonathan Huberdeau, Mathew Barzal, Alexander Radulov, Jakub Voracek, Connor Brown, Calle Jarnkrok, Alan Quine, Austin Watson
<b>Custom OT Lines Defensemen</b>
Victor Hedman, Ryan Pulock, Mark Pysyk, Cale Makar, Calvin de Haan

<b>Scratches</b>
Boo Nieves (Healthy), Michael Stone (Healthy), Tom Kuhnhackl (Healthy)</pre></div>
<h1 class="TeamLinesPro_WPG"><a id="Jets">Jets</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=2">Jets Page</a> ]
[ <a href="OTHL-PLF-ProTeamRoster.php#Jets">Pro Team Roster</a> ]
[ <a href="OTHL-PLF-ProTeamScoring.php#Jets">Pro Team Scoring</a> ]
[ <a href="OTHL-PLF-TeamFinance.php#Jets">Team Finance</a> ]
[ <a href="OTHL-PLF-ProTeamPlayersInfo.php#Jets">Pro Team PlayersInfo</a> ]
[ <a href="OTHL-PLF-ProTeamLines.php#Jets">Pro Team Lines</a> ]
[ <a href="OTHL-PLF-TeamProspects.php#Jets">Team Prospects</a> ]
[ <a href="OTHL-PLF-ProTeamSchedule.php#Jets">Pro Team Schedule</a> ]
[ <a href="OTHL-PLF-ProTeamStats.php#Jets">Pro Team Stats</a> ]
[ <a href="OTHL-PLF-ProTeamStatsVS.php#Jets">Pro Team Stats VS</a> ]
[ <a href="OTHL-PLF-TeamInjurySuspension.php#Jets">Team Injury Suspension</a> ]
[ <a href="OTHL-PLF-TeamHistory.php#Jets">Team History</a> ]
[ <a href="OTHL-PLF-TeamRecords.php#Jets">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Jets');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Jets" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Casey Cizikas            Matthew Tkachuk          Kasperi Kapanen          40     0   1  4  
 2 Paul Stastny             Barclay Goodrow          Joonas Donskoi           30     0   2  3  
 3 Alexander Wennberg       Roope Hintz              Leo Komarov              20     0   3  2  
 4 Jesperi Kotkaniemi       Jeff Skinner             Joel L'Esperance         10     0   4  1  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Olli Maatta              Ryan Lindgren                                     40     0   1  4  
 2 Kevin Shattenkirk        Miro Heiskanen                                    30     0   2  3  
 3 Mike Reilly              Nate Schmidt                                      20     0   3  2  
 4 Olli Maatta              Ryan Lindgren                                     10     0   4  1  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Alexander Wennberg       Roope Hintz              Matthew Tkachuk          60     0   1  4  
 2 Barclay Goodrow          Kasperi Kapanen          Joonas Donskoi           40     0   2  3  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Nate Schmidt             Miro Heiskanen                                    60     0   1  4  
 2 Kevin Shattenkirk        Ryan Lindgren                                     40     0   2  3  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Casey Cizikas            Kasperi Kapanen          60     0   4  1  
 2 Barclay Goodrow          Leo Komarov              40     0   3  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Olli Maatta              Ryan Lindgren            60     0   4  1  
 2 Miro Heiskanen           Nate Schmidt             40     0   3  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Casey Cizikas                                     60     0   4  1  
 2 Barclay Goodrow                                   40     0   3  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Olli Maatta              Ryan Lindgren            60     0   4  1  
 2 Miro Heiskanen           Nate Schmidt             40     0   3  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Casey Cizikas            Roope Hintz              60     0   1  4  
 2 Barclay Goodrow          Kasperi Kapanen          40     0   2  3  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Olli Maatta              Ryan Lindgren            60     0   1  4  
 2 Miro Heiskanen           Kevin Shattenkirk        40     0   2  3  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Barclay Goodrow          Roope Hintz              Kasperi Kapanen          Ryan Lindgren            Miro Heiskanen           

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Casey Cizikas            Kasperi Kapanen          Leo Komarov              Ryan Lindgren            Olli Maatta              

<b>Goaltenders</b>
Starting : Matt Murray              
Backup : Juuse Saros              

<b>Extra Forwards</b>
Normal : Casey Cizikas, Matthew Tkachuk, Barclay Goodrow - PP : Paul Stastny, Kasperi Kapanen - PK : Leo Komarov
<b>Extra Defensemen</b>
Normal : Olli Maatta, Nate Schmidt, Miro Heiskanen - PP : Kevin Shattenkirk - PK : Ryan Lindgren, Nate Schmidt
<b>Penalty Shots</b>
Kevin Shattenkirk, Ryan Lindgren, Jesperi Kotkaniemi, Casey Cizikas, Matthew Tkachuk
<b>Custom OT Lines Forwards</b>
Roope Hintz, Kasperi Kapanen, Casey Cizikas, Barclay Goodrow, Alexander Wennberg, Jeff Skinner, Jesperi Kotkaniemi, Leo Komarov, Paul Stastny, Matthew Tkachuk
<b>Custom OT Lines Defensemen</b>
Ryan Lindgren, Miro Heiskanen, Olli Maatta, Kevin Shattenkirk, Nate Schmidt

<b>Scratches</b>
Adam Erne (Healthy), Dale Weise (Healthy), Sami Vatanen (Healthy), Joonas Korpisalo (Healthy)</pre></div>
<h1 class="TeamLinesPro_LAK"><a id="Kings">Kings</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=14">Kings Page</a> ]
[ <a href="OTHL-PLF-ProTeamRoster.php#Kings">Pro Team Roster</a> ]
[ <a href="OTHL-PLF-ProTeamScoring.php#Kings">Pro Team Scoring</a> ]
[ <a href="OTHL-PLF-TeamFinance.php#Kings">Team Finance</a> ]
[ <a href="OTHL-PLF-ProTeamPlayersInfo.php#Kings">Pro Team PlayersInfo</a> ]
[ <a href="OTHL-PLF-ProTeamLines.php#Kings">Pro Team Lines</a> ]
[ <a href="OTHL-PLF-TeamProspects.php#Kings">Team Prospects</a> ]
[ <a href="OTHL-PLF-ProTeamSchedule.php#Kings">Pro Team Schedule</a> ]
[ <a href="OTHL-PLF-ProTeamStats.php#Kings">Pro Team Stats</a> ]
[ <a href="OTHL-PLF-ProTeamStatsVS.php#Kings">Pro Team Stats VS</a> ]
[ <a href="OTHL-PLF-TeamInjurySuspension.php#Kings">Team Injury Suspension</a> ]
[ <a href="OTHL-PLF-TeamHistory.php#Kings">Team History</a> ]
[ <a href="OTHL-PLF-TeamRecords.php#Kings">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Kings');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Kings" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Nathan MacKinnon         Boone Jenner             Mitch Marner             30     1   2  2  
 2 Elias Lindholm           Alex Ovechkin            Josh Anderson            27     0   2  3  
 3 Joe Thornton             Alex Galchenyuk          Brock Boeser             25     0   2  3  
 4 Riley Nash               Nicolas Roy              Pierre Engvall           18     1   3  1  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Seth Jones               Ryan McDonagh                                     35     0   3  2  
 2 Travis Hamonic           Neal Pionk                                        32     1   3  1  
 3 Matt Hunwick             Robert Hagg                                       28     0   4  1  
 4 Seth Jones               Ryan McDonagh                                     5      0   4  1  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Nathan MacKinnon         Alex Ovechkin            Mitch Marner             70     0   0  5  
 2 Elias Lindholm           Alex Galchenyuk          Brock Boeser             30     0   0  5  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Seth Jones               Ryan McDonagh                                     60     0   2  3  
 2 Neal Pionk               Travis Hamonic                                    40     0   2  3  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Boone Jenner             Josh Anderson            60     0   4  1  
 2 Riley Nash               Pierre Engvall           40     0   4  1  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Travis Hamonic           Ryan McDonagh            60     0   5  0  
 2 Seth Jones               Robert Hagg              40     0   5  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Boone Jenner                                      60     0   5  0  
 2 Elias Lindholm                                    40     0   5  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Travis Hamonic           Ryan McDonagh            60     0   5  0  
 2 Seth Jones               Robert Hagg              40     0   5  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Nathan MacKinnon         Mitch Marner             50     0   2  3  
 2 Elias Lindholm           Alex Ovechkin            50     0   2  3  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Seth Jones               Ryan McDonagh            60     0   3  2  
 2 Neal Pionk               Travis Hamonic           40     1   3  1  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Nathan MacKinnon         Alex Ovechkin            Mitch Marner             Seth Jones               Travis Hamonic           

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Boone Jenner             Pierre Engvall           Elias Lindholm           Travis Hamonic           Ryan McDonagh            

<b>Goaltenders</b>
Starting : Devan Dubnyk             
Backup : Jordan Binnington        

<b>Extra Forwards</b>
Normal : Alex Galchenyuk, Josh Anderson, Elias Lindholm - PP : Nathan MacKinnon, Boone Jenner - PK : Elias Lindholm
<b>Extra Defensemen</b>
Normal : Travis Hamonic, Ryan McDonagh, Seth Jones - PP : Neal Pionk - PK : Seth Jones, Neal Pionk
<b>Penalty Shots</b>
Alex Ovechkin, Nathan MacKinnon, Mitch Marner, Brock Boeser, Elias Lindholm
<b>Custom OT Lines Forwards</b>
Nathan MacKinnon, Alex Ovechkin, Mitch Marner, Elias Lindholm, Brock Boeser, Boone Jenner, Joe Thornton, Alex Galchenyuk, Josh Anderson, Pierre Engvall
<b>Custom OT Lines Defensemen</b>
Seth Jones, Ryan McDonagh, Travis Hamonic, Neal Pionk, Robert Hagg

<b>Scratches</b>
Jordan Greenway (Healthy), Andreas Borgman (Healthy), Mason Appleton (Healthy), Adam Pelech (Healthy)</pre></div>
<h1 class="TeamLinesPro_TBL"><a id="Lightning">Lightning</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=27">Lightning Page</a> ]
[ <a href="OTHL-PLF-ProTeamRoster.php#Lightning">Pro Team Roster</a> ]
[ <a href="OTHL-PLF-ProTeamScoring.php#Lightning">Pro Team Scoring</a> ]
[ <a href="OTHL-PLF-TeamFinance.php#Lightning">Team Finance</a> ]
[ <a href="OTHL-PLF-ProTeamPlayersInfo.php#Lightning">Pro Team PlayersInfo</a> ]
[ <a href="OTHL-PLF-ProTeamLines.php#Lightning">Pro Team Lines</a> ]
[ <a href="OTHL-PLF-TeamProspects.php#Lightning">Team Prospects</a> ]
[ <a href="OTHL-PLF-ProTeamSchedule.php#Lightning">Pro Team Schedule</a> ]
[ <a href="OTHL-PLF-ProTeamStats.php#Lightning">Pro Team Stats</a> ]
[ <a href="OTHL-PLF-ProTeamStatsVS.php#Lightning">Pro Team Stats VS</a> ]
[ <a href="OTHL-PLF-TeamInjurySuspension.php#Lightning">Team Injury Suspension</a> ]
[ <a href="OTHL-PLF-TeamHistory.php#Lightning">Team History</a> ]
[ <a href="OTHL-PLF-TeamRecords.php#Lightning">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Lightning');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Lightning" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 John Tavares             Derick Brassard          Craig Smith              40     0   3  2  
 2 Vincent Trocheck         Oskar Lindblom           Tanner Pearson           30     0   3  2  
 3 Nic Dowd                 Josh Archibald           Marcus Foligno           20     2   2  1  
 4 Colin Blackwell          Tyler Motte              Tim Schaller             10     1   4  0  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Ryan Murray              John Klingberg                                    40     1   4  0  
 2 Kris Russell             Riley Stillman                                    30     1   4  0  
 3 Marco Scandella          Brett Kulak                                       20     1   4  0  
 4 Kris Russell             Riley Stillman                                    10     1   4  0  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 John Tavares             Tanner Pearson           Vincent Trocheck         60     0   0  5  
 2 Derick Brassard          Oskar Lindblom           Josh Archibald           40     0   0  5  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Craig Smith              John Klingberg                                    60     0   0  5  
 2 Ryan Murray              Marcus Foligno                                    40     0   0  5  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Nic Dowd                 Tim Schaller             60     0   5  0  
 2 Josh Archibald           Tyler Motte              40     0   5  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Ryan Murray              Kris Russell             60     0   5  0  
 2 Marco Scandella          Riley Stillman           40     0   5  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Nic Dowd                                          60     0   5  0  
 2 Tim Schaller                                      40     0   5  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Ryan Murray              Kris Russell             60     0   5  0  
 2 Marco Scandella          Riley Stillman           40     0   5  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 John Tavares             Tanner Pearson           60     0   3  2  
 2 Vincent Trocheck         Craig Smith              40     0   3  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Ryan Murray              John Klingberg           60     0   3  2  
 2 Kris Russell             Marco Scandella          40     0   3  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   John Tavares             Tanner Pearson           Vincent Trocheck         Ryan Murray              John Klingberg           

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Nic Dowd                 Tyler Motte              Tim Schaller             Ryan Murray              Kris Russell             

<b>Goaltenders</b>
Starting : Connor Hellebuyck        
Backup : Kevin Boyle              

<b>Extra Forwards</b>
Normal : Vincent Trocheck, Tanner Pearson, Craig Smith - PP : Derick Brassard, John Tavares - PK : Marcus Foligno
<b>Extra Defensemen</b>
Normal : Ryan Murray, Marco Scandella, Riley Stillman - PP : Ryan Murray - PK : Kris Russell, Ryan Murray
<b>Penalty Shots</b>
Derick Brassard, John Tavares, Vincent Trocheck, Tanner Pearson, Craig Smith
<b>Custom OT Lines Forwards</b>
John Tavares, Vincent Trocheck, Tanner Pearson, Craig Smith, Derick Brassard, Oskar Lindblom, Marcus Foligno, Nic Dowd, Josh Archibald, Colin Blackwell
<b>Custom OT Lines Defensemen</b>
John Klingberg, Ryan Murray, Kris Russell, Riley Stillman, Marco Scandella

<b>Scratches</b>
Evander Kane (Healthy), Esa Lindell (Healthy), Luca Sbisa (Sprained Left Ankle Injury), Brian Elliott (Healthy)</pre></div>
<h1 class="TeamLinesPro_TOR"><a id="MapleLeafs">Maple Leafs</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=28">Maple Leafs Page</a> ]
[ <a href="OTHL-PLF-ProTeamRoster.php#MapleLeafs">Pro Team Roster</a> ]
[ <a href="OTHL-PLF-ProTeamScoring.php#MapleLeafs">Pro Team Scoring</a> ]
[ <a href="OTHL-PLF-TeamFinance.php#MapleLeafs">Team Finance</a> ]
[ <a href="OTHL-PLF-ProTeamPlayersInfo.php#MapleLeafs">Pro Team PlayersInfo</a> ]
[ <a href="OTHL-PLF-ProTeamLines.php#MapleLeafs">Pro Team Lines</a> ]
[ <a href="OTHL-PLF-TeamProspects.php#MapleLeafs">Team Prospects</a> ]
[ <a href="OTHL-PLF-ProTeamSchedule.php#MapleLeafs">Pro Team Schedule</a> ]
[ <a href="OTHL-PLF-ProTeamStats.php#MapleLeafs">Pro Team Stats</a> ]
[ <a href="OTHL-PLF-ProTeamStatsVS.php#MapleLeafs">Pro Team Stats VS</a> ]
[ <a href="OTHL-PLF-TeamInjurySuspension.php#MapleLeafs">Team Injury Suspension</a> ]
[ <a href="OTHL-PLF-TeamHistory.php#MapleLeafs">Team History</a> ]
[ <a href="OTHL-PLF-TeamRecords.php#MapleLeafs">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_MapleLeafs');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_MapleLeafs" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Tomas Hertl              Brandon Saad             Tyler Toffoli            35     0   2  3  
 2 David Krejci             Jaden Schwartz           Jake Debrusk             25     0   3  2  
 3 Christian Dvorak         Frank Vatrano            Sam Bennett              25     0   3  2  
 4 Radek Faksa              Sean Kuraly              Brett Howden             15     1   3  1  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Nick Leddy               John Carlson                                      40     0   3  2  
 2 Shea Theodore            Alex Pietrangelo                                  40     0   3  2  
 3 Johnny Boychuk           Jarred Tinordi                                    20     2   3  0  
 4 Alex Pietrangelo         John Carlson                                      0      1   3  1  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Tomas Hertl              Brandon Saad             Tyler Toffoli            60     0   0  5  
 2 David Krejci             Jaden Schwartz           Christian Dvorak         40     0   0  5  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Alex Pietrangelo         John Carlson                                      60     0   0  5  
 2 Shea Theodore            Nick Leddy                                        40     0   0  5  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Radek Faksa              Sean Kuraly              60     0   5  0  
 2 Brett Howden             Sam Bennett              40     0   5  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Johnny Boychuk           Alex Pietrangelo         60     0   5  0  
 2 Jarred Tinordi           John Carlson             40     0   5  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Sean Kuraly                                       60     0   5  0  
 2 Radek Faksa                                       40     0   5  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Johnny Boychuk           Alex Pietrangelo         60     0   5  0  
 2 Jarred Tinordi           John Carlson             40     0   5  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Tomas Hertl              Brandon Saad             50     0   2  3  
 2 Christian Dvorak         Tyler Toffoli            50     0   2  3  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Nick Leddy               John Carlson             50     1   3  1  
 2 Shea Theodore            Alex Pietrangelo         50     1   3  1  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Tomas Hertl              Jaden Schwartz           Tyler Toffoli            Alex Pietrangelo         John Carlson             

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Radek Faksa              Sean Kuraly              Brett Howden             Alex Pietrangelo         John Carlson             

<b>Goaltenders</b>
Starting : Jack Campbell            
Backup : Frederik Andersen        

<b>Extra Forwards</b>
Normal : Jaden Schwartz, Radek Faksa, Sean Kuraly - PP : Jaden Schwartz, Jake Debrusk - PK : Sean Kuraly
<b>Extra Defensemen</b>
Normal : Shea Theodore, Nick Leddy, Alex Pietrangelo - PP : Shea Theodore - PK : Johnny Boychuk, Jarred Tinordi
<b>Penalty Shots</b>
Jaden Schwartz, Tyler Toffoli, Christian Dvorak, Jake Debrusk, Brandon Saad
<b>Custom OT Lines Forwards</b>
Tomas Hertl, Jaden Schwartz, Tyler Toffoli, Christian Dvorak, Jake Debrusk, Brandon Saad, Frank Vatrano, Radek Faksa, David Krejci, Sam Bennett
<b>Custom OT Lines Defensemen</b>
John Carlson, Shea Theodore, Alex Pietrangelo, Nick Leddy, Johnny Boychuk

<b>Scratches</b>
Troy Stecher (Healthy), Ryan Reaves (Healthy), Colin Miller (Healthy)</pre></div>
<h1 class="TeamLinesPro_EDM"><a id="Oilers">Oilers</a></h1>
<b>Lines are Incomplete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=12">Oilers Page</a> ]
[ <a href="OTHL-PLF-ProTeamRoster.php#Oilers">Pro Team Roster</a> ]
[ <a href="OTHL-PLF-ProTeamScoring.php#Oilers">Pro Team Scoring</a> ]
[ <a href="OTHL-PLF-TeamFinance.php#Oilers">Team Finance</a> ]
[ <a href="OTHL-PLF-ProTeamPlayersInfo.php#Oilers">Pro Team PlayersInfo</a> ]
[ <a href="OTHL-PLF-ProTeamLines.php#Oilers">Pro Team Lines</a> ]
[ <a href="OTHL-PLF-TeamProspects.php#Oilers">Team Prospects</a> ]
[ <a href="OTHL-PLF-ProTeamSchedule.php#Oilers">Pro Team Schedule</a> ]
[ <a href="OTHL-PLF-ProTeamStats.php#Oilers">Pro Team Stats</a> ]
[ <a href="OTHL-PLF-ProTeamStatsVS.php#Oilers">Pro Team Stats VS</a> ]
[ <a href="OTHL-PLF-TeamInjurySuspension.php#Oilers">Team Injury Suspension</a> ]
[ <a href="OTHL-PLF-TeamHistory.php#Oilers">Team History</a> ]
[ <a href="OTHL-PLF-TeamRecords.php#Oilers">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Oilers');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Oilers" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Unknown Player           Ryan Nugent-Hopkins      Dustin Brown             34     0   1  4  
 2 Blake Wheeler            Mikael Granlund          Tyler Bertuzzi           34     0   1  4  
 3 Unknown Player           Nick Schmaltz            Noel Acciari             25     1   2  2  
 4 Luke Glendening          Chris Wagner             Unknown Player           7      1   3  1  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Jeff Petry               Mattias Ekholm                                    40     1   2  2  
 2 Unknown Player           Shea Weber                                        30     0   2  3  
 3 Ryan Graves              Alex Biega                                        20     1   3  1  
 4 Unknown Player           Shea Weber                                        10     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Blake Wheeler            Mikael Granlund          Tyler Bertuzzi           60     1   0  4  
 2 Unknown Player           Ryan Nugent-Hopkins      Nick Schmaltz            40     1   0  4  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Unknown Player           Shea Weber                                        60     0   1  4  
 2 Jeff Petry               Mattias Ekholm                                    40     0   1  4  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Luke Glendening          Noel Acciari             60     1   4  0  
 2 Unknown Player           Unknown Player           40     1   4  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Ryan Graves              Mattias Ekholm           60     1   4  0  
 2 Shea Weber               Unknown Player           40     1   4  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Luke Glendening                                   60     0   4  1  
 2 Unknown Player                                    40     0   4  1  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Mattias Ekholm           Ryan Graves              60     0   5  0  
 2 Unknown Player           Shea Weber               40     0   5  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Unknown Player           Mikael Granlund          60     1   2  2  
 2 Unknown Player           Ryan Nugent-Hopkins      40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Jeff Petry               Mattias Ekholm           60     1   2  2  
 2 Unknown Player           Shea Weber               40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Blake Wheeler            Ryan Nugent-Hopkins      Tyler Bertuzzi           Jeff Petry               Shea Weber               

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Unknown Player           Dustin Brown             Noel Acciari             Shea Weber               Mattias Ekholm           

<b>Goaltenders</b>
Starting : Elvis Merzlikins         
Backup : John Gibson              

<b>Extra Forwards</b>
Normal : Ryan Nugent-Hopkins, Blake Wheeler, Unknown Player - PP : Unknown Player, Dustin Brown - PK : Unknown Player
<b>Extra Defensemen</b>
Normal : Jeff Petry, Shea Weber, Unknown Player - PP : Jeff Petry - PK : Shea Weber, Jeff Petry
<b>Penalty Shots</b>
Unknown Player, Nick Schmaltz, Blake Wheeler, Unknown Player, Ryan Nugent-Hopkins
<b>Custom OT Lines Forwards</b>
Ryan Nugent-Hopkins, Unknown Player, Blake Wheeler, Mikael Granlund, Unknown Player, Tyler Bertuzzi, Dustin Brown, Noel Acciari, Nick Schmaltz, Unknown Player
<b>Custom OT Lines Defensemen</b>
Jeff Petry, Shea Weber, Mattias Ekholm, Unknown Player, Ryan Graves

<b>Scratches</b>
Lars Eller (Sore Right Knee Injury)</pre></div>
<h1 class="TeamLinesPro_FLA"><a id="Panthers">Panthers</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=13">Panthers Page</a> ]
[ <a href="OTHL-PLF-ProTeamRoster.php#Panthers">Pro Team Roster</a> ]
[ <a href="OTHL-PLF-ProTeamScoring.php#Panthers">Pro Team Scoring</a> ]
[ <a href="OTHL-PLF-TeamFinance.php#Panthers">Team Finance</a> ]
[ <a href="OTHL-PLF-ProTeamPlayersInfo.php#Panthers">Pro Team PlayersInfo</a> ]
[ <a href="OTHL-PLF-ProTeamLines.php#Panthers">Pro Team Lines</a> ]
[ <a href="OTHL-PLF-TeamProspects.php#Panthers">Team Prospects</a> ]
[ <a href="OTHL-PLF-ProTeamSchedule.php#Panthers">Pro Team Schedule</a> ]
[ <a href="OTHL-PLF-ProTeamStats.php#Panthers">Pro Team Stats</a> ]
[ <a href="OTHL-PLF-ProTeamStatsVS.php#Panthers">Pro Team Stats VS</a> ]
[ <a href="OTHL-PLF-TeamInjurySuspension.php#Panthers">Team Injury Suspension</a> ]
[ <a href="OTHL-PLF-TeamHistory.php#Panthers">Team History</a> ]
[ <a href="OTHL-PLF-TeamRecords.php#Panthers">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Panthers');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Panthers" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Cody Eakin               Carl Soderberg           Tyler Seguin             32     2   2  1  
 2 Tyler Bozak              Marcus Johansson         Darren Helm              32     2   2  1  
 3 Vinni Lettieri           C.J. Smith               Josh Bailey              31     2   2  1  
 4 Danny O'Regan            Max Domi                 Josh Leivo               5      2   2  1  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Damon Severson           Rasmus Andersson                                  30     2   2  1  
 2 Martin Marincin          Derrick Pouliot                                   30     2   2  1  
 3 Scott Harrington         Brendan Guhle                                     30     2   2  1  
 4 Damon Severson           Rasmus Andersson                                  10     2   2  1  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Tyler Seguin             Max Domi                 Josh Leivo               50     0   0  5  
 2 Carl Soderberg           Josh Bailey              Marcus Johansson         50     0   0  5  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Rasmus Andersson         Damon Severson                                    50     0   0  5  
 2 Martin Marincin          Derrick Pouliot                                   50     0   0  5  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Tyler Bozak              Darren Helm              50     0   5  0  
 2 Cody Eakin               C.J. Smith               50     0   5  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Damon Severson           Martin Marincin          50     0   5  0  
 2 Scott Harrington         Brendan Guhle            50     0   5  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Tyler Bozak                                       50     0   5  0  
 2 Cody Eakin                                        50     0   5  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Damon Severson           Martin Marincin          50     0   5  0  
 2 Scott Harrington         Brendan Guhle            50     0   5  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Tyler Seguin             Max Domi                 50     0   0  5  
 2 Carl Soderberg           Josh Leivo               50     0   0  5  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Martin Marincin          Scott Harrington         50     0   2  3  
 2 Damon Severson           Brendan Guhle            50     0   2  3  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Tyler Seguin             Max Domi                 Josh Leivo               Rasmus Andersson         Damon Severson           

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Carl Soderberg           Marcus Johansson         Darren Helm              Martin Marincin          Damon Severson           

<b>Goaltenders</b>
Starting : Jaroslav Halak           
Backup : David Rittich            

<b>Extra Forwards</b>
Normal : Tyler Seguin, Max Domi, Carl Soderberg - PP : Tyler Seguin, Max Domi - PK : Josh Bailey
<b>Extra Defensemen</b>
Normal : Damon Severson, Rasmus Andersson, Martin Marincin - PP : Damon Severson - PK : Damon Severson, Martin Marincin
<b>Penalty Shots</b>
Tyler Seguin, Damon Severson, Darren Helm, Josh Leivo, Josh Bailey
<b>Custom OT Lines Forwards</b>
Tyler Seguin, Max Domi, Danny O'Regan, Carl Soderberg, Marcus Johansson, Cody Eakin, Tyler Bozak, Josh Bailey, C.J. Smith, Josh Leivo
<b>Custom OT Lines Defensemen</b>
Martin Marincin, Damon Severson, Scott Harrington, Brendan Guhle, Rasmus Andersson

<b>Scratches</b>
Jonathan Ericsson (Healthy), Carl Dahlstrom (Healthy), Victor Rask (Healthy), Xavier Ouellet (Healthy)</pre></div>
<h1 class="TeamLinesPro_PIT"><a id="Penguins">Penguins</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=24">Penguins Page</a> ]
[ <a href="OTHL-PLF-ProTeamRoster.php#Penguins">Pro Team Roster</a> ]
[ <a href="OTHL-PLF-ProTeamScoring.php#Penguins">Pro Team Scoring</a> ]
[ <a href="OTHL-PLF-TeamFinance.php#Penguins">Team Finance</a> ]
[ <a href="OTHL-PLF-ProTeamPlayersInfo.php#Penguins">Pro Team PlayersInfo</a> ]
[ <a href="OTHL-PLF-ProTeamLines.php#Penguins">Pro Team Lines</a> ]
[ <a href="OTHL-PLF-TeamProspects.php#Penguins">Team Prospects</a> ]
[ <a href="OTHL-PLF-ProTeamSchedule.php#Penguins">Pro Team Schedule</a> ]
[ <a href="OTHL-PLF-ProTeamStats.php#Penguins">Pro Team Stats</a> ]
[ <a href="OTHL-PLF-ProTeamStatsVS.php#Penguins">Pro Team Stats VS</a> ]
[ <a href="OTHL-PLF-TeamInjurySuspension.php#Penguins">Team Injury Suspension</a> ]
[ <a href="OTHL-PLF-TeamHistory.php#Penguins">Team History</a> ]
[ <a href="OTHL-PLF-TeamRecords.php#Penguins">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Penguins');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Penguins" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Nick Foligno             James van Riemsdyk       Ilya Mikheyev            40     1   1  3  
 2 Evan Rodrigues           Brady Tkachuk            Austin Czarnik           35     0   2  3  
 3 Frans Nielsen            Sven Baertschi           Pat Maroon               15     1   2  2  
 4 Sam Gagner               Jordan Martinook         Nick Cousins             10     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Cam Fowler               Dmitry Kulikov                                    40     1   2  2  
 2 Connor Carrick           Jake Gardiner                                     30     1   2  2  
 3 Robert Bortuzzo          Jordan Oesterle                                   20     1   3  1  
 4 Jake Gardiner            Dmitry Kulikov                                    10     1   1  3  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Nick Foligno             Brady Tkachuk            Nick Cousins             60     1   0  4  
 2 Evan Rodrigues           James van Riemsdyk       Ilya Mikheyev            40     1   1  3  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Cam Fowler               Jake Gardiner                                     60     0   2  3  
 2 Connor Carrick           Dmitry Kulikov                                    40     1   1  3  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Nick Foligno             Evan Rodrigues           60     1   3  1  
 2 Frans Nielsen            Sven Baertschi           40     1   4  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Cam Fowler               Dmitry Kulikov           60     0   5  0  
 2 Connor Carrick           Robert Bortuzzo          40     1   4  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Frans Nielsen                                     60     0   5  0  
 2 Nick Foligno                                      40     0   5  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Cam Fowler               Dmitry Kulikov           60     0   5  0  
 2 Connor Carrick           Robert Bortuzzo          40     1   4  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Nick Foligno             Evan Rodrigues           60     1   2  2  
 2 Frans Nielsen            Sven Baertschi           40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Cam Fowler               Dmitry Kulikov           60     1   2  2  
 2 Connor Carrick           Robert Bortuzzo          40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Nick Foligno             Brady Tkachuk            Nick Cousins             Cam Fowler               Dmitry Kulikov           

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Frans Nielsen            Nick Foligno             Nick Cousins             Cam Fowler               Dmitry Kulikov           

<b>Goaltenders</b>
Starting : Semyon Varlamov          
Backup : Anton Forsberg           

<b>Extra Forwards</b>
Normal : Sam Gagner, Nick Cousins, Pat Maroon - PP : Ilya Mikheyev, Nick Cousins - PK : Nick Cousins
<b>Extra Defensemen</b>
Normal : Jake Gardiner, Connor Carrick, Robert Bortuzzo - PP : Jake Gardiner - PK : Robert Bortuzzo, Connor Carrick
<b>Penalty Shots</b>
Nick Foligno, Brady Tkachuk, James van Riemsdyk, Frans Nielsen, Ilya Mikheyev
<b>Custom OT Lines Forwards</b>
Nick Foligno, Brady Tkachuk, James van Riemsdyk, Frans Nielsen, Ilya Mikheyev, Nick Cousins, Pat Maroon, Sven Baertschi, Evan Rodrigues, Austin Czarnik
<b>Custom OT Lines Defensemen</b>
Cam Fowler, Dmitry Kulikov, Connor Carrick, Robert Bortuzzo, Jordan Oesterle

<b>Scratches</b>
Roland McKeown (Healthy), Christopher Gibson (Healthy)</pre></div>
<h1 class="TeamLinesPro_NSH"><a id="Predators">Predators</a></h1>
<b>Lines are Incomplete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=17">Predators Page</a> ]
[ <a href="OTHL-PLF-ProTeamRoster.php#Predators">Pro Team Roster</a> ]
[ <a href="OTHL-PLF-ProTeamScoring.php#Predators">Pro Team Scoring</a> ]
[ <a href="OTHL-PLF-TeamFinance.php#Predators">Team Finance</a> ]
[ <a href="OTHL-PLF-ProTeamPlayersInfo.php#Predators">Pro Team PlayersInfo</a> ]
[ <a href="OTHL-PLF-ProTeamLines.php#Predators">Pro Team Lines</a> ]
[ <a href="OTHL-PLF-TeamProspects.php#Predators">Team Prospects</a> ]
[ <a href="OTHL-PLF-ProTeamSchedule.php#Predators">Pro Team Schedule</a> ]
[ <a href="OTHL-PLF-ProTeamStats.php#Predators">Pro Team Stats</a> ]
[ <a href="OTHL-PLF-ProTeamStatsVS.php#Predators">Pro Team Stats VS</a> ]
[ <a href="OTHL-PLF-TeamInjurySuspension.php#Predators">Team Injury Suspension</a> ]
[ <a href="OTHL-PLF-TeamHistory.php#Predators">Team History</a> ]
[ <a href="OTHL-PLF-TeamRecords.php#Predators">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Predators');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Predators" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Logan Couture            Dominik Kubalik          Alex Killorn             38     0   2  3  
 2 Adam Henrique            Reilly Smith             Sam Reinhart             32     0   2  3  
 3 Brandon Sutter           Adrian Kempe             Alex Tuch                25     0   2  3  
 4 Andreas Athanasiou       Ryan Dzingel             Danton Heinen            5      0   2  3  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Oscar Klefbom            Jack Johnson                                      40     0   3  2  
 2 Erik Cernak              Kevan Miller                                      31     0   3  2  
 3 Deryk Engelland          Zach Bogosian                                     19     0   3  2  
 4 Oscar Klefbom            Jack Johnson                                      10     0   3  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Logan Couture            Reilly Smith             Dominik Kubalik          50     0   0  5  
 2 Adrian Kempe             Alex Killorn             Sam Reinhart             50     0   0  5  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Oscar Klefbom            Jack Johnson                                      50     0   0  5  
 2 Erik Cernak              Kevan Miller                                      50     0   0  5  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Logan Couture            Alex Killorn             50     0   5  0  
 2 Brandon Sutter           Reilly Smith             50     0   5  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Oscar Klefbom            Jack Johnson             50     0   5  0  
 2 Deryk Engelland          Erik Cernak              50     0   5  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Logan Couture                                     50     0   5  0  
 2 Brandon Sutter                                    50     0   5  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Oscar Klefbom            Jack Johnson             50     0   5  0  
 2 Deryk Engelland          Erik Cernak              50     0   5  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Logan Couture            Alex Killorn             50     0   1  4  
 2 Adam Henrique            Dominik Kubalik          50     0   1  4  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Oscar Klefbom            Jack Johnson             50     0   2  3  
 2 Erik Cernak              Kevan Miller             50     0   2  3  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Logan Couture            Alex Killorn             Dominik Kubalik          Oscar Klefbom            Jack Johnson             

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Logan Couture            Alex Killorn             Reilly Smith             Oscar Klefbom            Jack Johnson             

<b>Goaltenders</b>
Starting : Unknown Goalie           
Backup : Troy Grosenick           

<b>Extra Forwards</b>
Normal : Sam Reinhart, Dominik Kubalik, Logan Couture - PP : Adrian Kempe, Alex Tuch - PK : Adrian Kempe
<b>Extra Defensemen</b>
Normal : Deryk Engelland, Jack Johnson, Erik Cernak - PP : Deryk Engelland - PK : Zach Bogosian, Jack Johnson
<b>Penalty Shots</b>
Danton Heinen, Logan Couture, Sam Reinhart, Reilly Smith, Dominik Kubalik
<b>Custom OT Lines Forwards</b>
Logan Couture, Sam Reinhart, Alex Killorn, Brandon Sutter, Reilly Smith, Dominik Kubalik, Adrian Kempe, Alex Tuch, Ryan Dzingel, Danton Heinen
<b>Custom OT Lines Defensemen</b>
Oscar Klefbom, Jack Johnson, Kevan Miller, Erik Cernak, Zach Bogosian

<b>Scratches</b>
Gage Quinney (Healthy), Jayson Megna (Healthy), Carey Price (Healthy)</pre></div>
<h1 class="TeamLinesPro_NYR"><a id="Rangers">Rangers</a></h1>
<b>Lines are Incomplete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=20">Rangers Page</a> ]
[ <a href="OTHL-PLF-ProTeamRoster.php#Rangers">Pro Team Roster</a> ]
[ <a href="OTHL-PLF-ProTeamScoring.php#Rangers">Pro Team Scoring</a> ]
[ <a href="OTHL-PLF-TeamFinance.php#Rangers">Team Finance</a> ]
[ <a href="OTHL-PLF-ProTeamPlayersInfo.php#Rangers">Pro Team PlayersInfo</a> ]
[ <a href="OTHL-PLF-ProTeamLines.php#Rangers">Pro Team Lines</a> ]
[ <a href="OTHL-PLF-TeamProspects.php#Rangers">Team Prospects</a> ]
[ <a href="OTHL-PLF-ProTeamSchedule.php#Rangers">Pro Team Schedule</a> ]
[ <a href="OTHL-PLF-ProTeamStats.php#Rangers">Pro Team Stats</a> ]
[ <a href="OTHL-PLF-ProTeamStatsVS.php#Rangers">Pro Team Stats VS</a> ]
[ <a href="OTHL-PLF-TeamInjurySuspension.php#Rangers">Team Injury Suspension</a> ]
[ <a href="OTHL-PLF-TeamHistory.php#Rangers">Team History</a> ]
[ <a href="OTHL-PLF-TeamRecords.php#Rangers">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Rangers');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Rangers" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Claude Giroux            Gabriel Landeskog        Unknown Player           40     1   2  2  
 2 Charlie Coyle            Robby Fabbri             Kyle Palmieri            30     1   2  2  
 3 Brad Richardson          Jesper Bratt             Artturi Lehkonen         20     1   2  2  
 4 Colin White              Milan Lucic              Jack Roslovic            10     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Roman Josi               Brenden Dillon                                    40     1   2  2  
 2 Erik Gustafsson          Andrej Sekera                                     30     1   2  2  
 3 John Marino              Matt Grzelcyk                                     20     1   2  2  
 4 Roman Josi               Brenden Dillon                                    10     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Claude Giroux            Gabriel Landeskog        Unknown Player           60     1   2  2  
 2 Charlie Coyle            Jesper Bratt             Artturi Lehkonen         40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Roman Josi               Brenden Dillon                                    60     1   2  2  
 2 Erik Gustafsson          Andrej Sekera                                     40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Jesper Bratt             Unknown Player           60     1   2  2  
 2 Artturi Lehkonen         Charlie Coyle            40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Roman Josi               Brenden Dillon           60     1   2  2  
 2 Erik Gustafsson          Andrej Sekera            40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Jesper Bratt                                      60     1   2  2  
 2 Unknown Player                                    40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Roman Josi               Brenden Dillon           60     1   2  2  
 2 Erik Gustafsson          Andrej Sekera            40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Charlie Coyle            Unknown Player           60     1   2  2  
 2 Claude Giroux            Jesper Bratt             40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Roman Josi               Brenden Dillon           60     1   2  2  
 2 Erik Gustafsson          Andrej Sekera            40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Claude Giroux            Gabriel Landeskog        Unknown Player           Roman Josi               Brenden Dillon           

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Claude Giroux            Gabriel Landeskog        Unknown Player           Roman Josi               Brenden Dillon           

<b>Goaltenders</b>
Starting : Marc-Andre Fleury        
Backup : Jean-Francois Berube     

<b>Extra Forwards</b>
Normal : Unknown Player, Jesper Bratt, Artturi Lehkonen - PP : Unknown Player, Jesper Bratt - PK : Artturi Lehkonen
<b>Extra Defensemen</b>
Normal : Brenden Dillon, Andrej Sekera, Erik Gustafsson - PP : Brenden Dillon - PK : Brenden Dillon, Erik Gustafsson
<b>Penalty Shots</b>
Jesper Bratt, Unknown Player, Claude Giroux, Artturi Lehkonen, Charlie Coyle
<b>Custom OT Lines Forwards</b>
Claude Giroux, Unknown Player, Gabriel Landeskog, Milan Lucic, Charlie Coyle, Robby Fabbri, Jesper Bratt, Artturi Lehkonen, Brad Richardson, Colin White
<b>Custom OT Lines Defensemen</b>
Roman Josi, Brenden Dillon, Erik Gustafsson, Andrej Sekera, Matt Grzelcyk

<b>Scratches</b>
Marcus Sorensen (Healthy), Mark Stone (Healthy), Chad Ruhwedel (Healthy), Melker Karlsson (Healthy)</pre></div>
<h1 class="TeamLinesPro_DET"><a id="RedWings">Red Wings</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=11">Red Wings Page</a> ]
[ <a href="OTHL-PLF-ProTeamRoster.php#RedWings">Pro Team Roster</a> ]
[ <a href="OTHL-PLF-ProTeamScoring.php#RedWings">Pro Team Scoring</a> ]
[ <a href="OTHL-PLF-TeamFinance.php#RedWings">Team Finance</a> ]
[ <a href="OTHL-PLF-ProTeamPlayersInfo.php#RedWings">Pro Team PlayersInfo</a> ]
[ <a href="OTHL-PLF-ProTeamLines.php#RedWings">Pro Team Lines</a> ]
[ <a href="OTHL-PLF-TeamProspects.php#RedWings">Team Prospects</a> ]
[ <a href="OTHL-PLF-ProTeamSchedule.php#RedWings">Pro Team Schedule</a> ]
[ <a href="OTHL-PLF-ProTeamStats.php#RedWings">Pro Team Stats</a> ]
[ <a href="OTHL-PLF-ProTeamStatsVS.php#RedWings">Pro Team Stats VS</a> ]
[ <a href="OTHL-PLF-TeamInjurySuspension.php#RedWings">Team Injury Suspension</a> ]
[ <a href="OTHL-PLF-TeamHistory.php#RedWings">Team History</a> ]
[ <a href="OTHL-PLF-TeamRecords.php#RedWings">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_RedWings');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_RedWings" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Connor McDavid           Patrik Laine             Brayden Point            50     0   0  5  
 2 Matt Duchene             Oliver Bjorkstrand       Jared McCann             35     0   0  5  
 3 Ivan Barbashev           Teddy Blueger            Conor Sheary             10     0   0  5  
 4 Andrew Mangiapane        Martin Frk               Brayden Point            5      0   5  0  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Jake McCabe              Mathew Dumba                                      40     0   2  3  
 2 Marc Staal               Josh Manson                                       40     0   2  3  
 3 Connor Clifton           Torey Krug                                        20     1   2  2  
 4 Connor Clifton           Mathew Dumba                                      0      0   0  5  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Connor McDavid           Patrik Laine             Brayden Point            70     0   1  4  
 2 Matt Duchene             Oliver Bjorkstrand       Jared McCann             30     0   0  5  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Josh Manson              Mathew Dumba                                      95     0   0  5  
 2 Marc Staal               Jake McCabe                                       5      0   5  0  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Matt Duchene             Ivan Barbashev           80     0   5  0  
 2 Jared McCann             Connor McDavid           20     0   5  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Marc Staal               Jake McCabe              80     1   2  2  
 2 Josh Manson              Mathew Dumba             20     0   5  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Connor McDavid                                    65     0   5  0  
 2 Ivan Barbashev                                    35     0   5  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Marc Staal               Josh Manson              80     0   5  0  
 2 Jake McCabe              Mathew Dumba             20     0   5  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Connor McDavid           Brayden Point            60     0   0  5  
 2 Matt Duchene             Patrik Laine             40     0   0  5  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Marc Staal               Mathew Dumba             80     0   0  5  
 2 Jake McCabe              Josh Manson              20     0   5  0  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Connor McDavid           Patrik Laine             Brayden Point            Mathew Dumba             Marc Staal               

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Andrew Mangiapane        Ivan Barbashev           Brayden Point            Josh Manson              Jake McCabe              

<b>Goaltenders</b>
Starting : Evan Fitzpatrick         
Backup : Marcus Hogberg           

<b>Extra Forwards</b>
Normal : Connor McDavid, Brayden Point, Ivan Barbashev - PP : Matt Duchene, Connor McDavid - PK : Connor McDavid
<b>Extra Defensemen</b>
Normal : Jake McCabe, Mathew Dumba, Marc Staal - PP : Mathew Dumba - PK : Marc Staal, Mathew Dumba
<b>Penalty Shots</b>
Patrik Laine, Jared McCann, Brayden Point, Connor McDavid, Matt Duchene
<b>Custom OT Lines Forwards</b>
Matt Duchene, Patrik Laine, Brayden Point, Andrew Mangiapane, Justin Abdelkader, Conor Sheary, Oliver Bjorkstrand, Ivan Barbashev, Connor McDavid, Jared McCann
<b>Custom OT Lines Defensemen</b>
Jake McCabe, Marc Staal, Mathew Dumba, Josh Manson, Connor Clifton

<b>Scratches</b>
Josh Mahura (Healthy), Mathieu Joseph (Healthy), Stefan Noesen (Healthy)</pre></div>
<h1 class="TeamLinesPro_BUF"><a id="Sabres">Sabres</a></h1>
<b>Lines are Incomplete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=4">Sabres Page</a> ]
[ <a href="OTHL-PLF-ProTeamRoster.php#Sabres">Pro Team Roster</a> ]
[ <a href="OTHL-PLF-ProTeamScoring.php#Sabres">Pro Team Scoring</a> ]
[ <a href="OTHL-PLF-TeamFinance.php#Sabres">Team Finance</a> ]
[ <a href="OTHL-PLF-ProTeamPlayersInfo.php#Sabres">Pro Team PlayersInfo</a> ]
[ <a href="OTHL-PLF-ProTeamLines.php#Sabres">Pro Team Lines</a> ]
[ <a href="OTHL-PLF-TeamProspects.php#Sabres">Team Prospects</a> ]
[ <a href="OTHL-PLF-ProTeamSchedule.php#Sabres">Pro Team Schedule</a> ]
[ <a href="OTHL-PLF-ProTeamStats.php#Sabres">Pro Team Stats</a> ]
[ <a href="OTHL-PLF-ProTeamStatsVS.php#Sabres">Pro Team Stats VS</a> ]
[ <a href="OTHL-PLF-TeamInjurySuspension.php#Sabres">Team Injury Suspension</a> ]
[ <a href="OTHL-PLF-TeamHistory.php#Sabres">Team History</a> ]
[ <a href="OTHL-PLF-TeamRecords.php#Sabres">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Sabres');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Sabres" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Sidney Crosby            Teuvo Teravainen         David Pastrnak           40     0   2  3  
 2 Anze Kopitar             Anders Lee               Chris Kreider            30     0   2  3  
 3 Derek Grant              Zemgus Girgensons        Valeri Nichushkin        20     0   3  2  
 4 Colin Wilson             Loui Eriksson            Zach Aston-Reese         10     0   4  1  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Ryan Suter               Michael Del Zotto                                 32     0   4  1  
 2 Rasmus Ristolainen       Jay Bouwmeester                                   32     0   4  1  
 3 Christian Djoos          Ron Hainsey                                       26     0   5  0  
 4 Ryan Suter               Rasmus Ristolainen                                10     0   4  1  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Sidney Crosby            Teuvo Teravainen         David Pastrnak           60     0   0  5  
 2 Anze Kopitar             Anders Lee               Chris Kreider            40     0   0  5  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Ryan Suter               Rasmus Ristolainen                                70     0   2  3  
 2 Christian Djoos          Michael Del Zotto                                 30     0   2  3  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Derek Grant              Zach Aston-Reese         70     0   5  0  
 2 Anze Kopitar             Zemgus Girgensons        30     0   5  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Ryan Suter               Ron Hainsey              50     0   5  0  
 2 Rasmus Ristolainen       Jay Bouwmeester          50     0   5  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Zach Aston-Reese                                  60     0   5  0  
 2 Derek Grant                                       40     0   5  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Ryan Suter               Ron Hainsey              50     0   5  0  
 2 Jay Bouwmeester          Rasmus Ristolainen       50     0   5  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Sidney Crosby            David Pastrnak           60     0   2  3  
 2 Anze Kopitar             Chris Kreider            40     0   2  3  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Ryan Suter               Rasmus Ristolainen       65     0   4  1  
 2 Michael Del Zotto        Ron Hainsey              35     0   4  1  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Sidney Crosby            Chris Kreider            David Pastrnak           Ryan Suter               Rasmus Ristolainen       

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Anze Kopitar             Derek Grant              Zach Aston-Reese         Ryan Suter               Ron Hainsey              

<b>Goaltenders</b>
Starting : Thomas Greiss            
Backup : Unknown Goalie           

<b>Extra Forwards</b>
Normal : Sidney Crosby, Anze Kopitar, David Pastrnak - PP : Anze Kopitar, David Pastrnak - PK : Anze Kopitar
<b>Extra Defensemen</b>
Normal : Ryan Suter, Ron Hainsey, Michael Del Zotto - PP : Ryan Suter - PK : Ron Hainsey, Ryan Suter
<b>Penalty Shots</b>
Chris Kreider, Anze Kopitar, Sidney Crosby, David Pastrnak, Teuvo Teravainen
<b>Custom OT Lines Forwards</b>
Sidney Crosby, Anze Kopitar, David Pastrnak, Chris Kreider, Teuvo Teravainen, Anders Lee, Derek Grant, Zemgus Girgensons, Valeri Nichushkin, Colin Wilson
<b>Custom OT Lines Defensemen</b>
Ryan Suter, Rasmus Ristolainen, Ron Hainsey, Jay Bouwmeester, Michael Del Zotto

<b>Scratches</b>
None
</pre></div>
<h1 class="TeamLinesPro_OTT"><a id="Senators">Senators</a></h1>
<b>Lines are Incomplete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=21">Senators Page</a> ]
[ <a href="OTHL-PLF-ProTeamRoster.php#Senators">Pro Team Roster</a> ]
[ <a href="OTHL-PLF-ProTeamScoring.php#Senators">Pro Team Scoring</a> ]
[ <a href="OTHL-PLF-TeamFinance.php#Senators">Team Finance</a> ]
[ <a href="OTHL-PLF-ProTeamPlayersInfo.php#Senators">Pro Team PlayersInfo</a> ]
[ <a href="OTHL-PLF-ProTeamLines.php#Senators">Pro Team Lines</a> ]
[ <a href="OTHL-PLF-TeamProspects.php#Senators">Team Prospects</a> ]
[ <a href="OTHL-PLF-ProTeamSchedule.php#Senators">Pro Team Schedule</a> ]
[ <a href="OTHL-PLF-ProTeamStats.php#Senators">Pro Team Stats</a> ]
[ <a href="OTHL-PLF-ProTeamStatsVS.php#Senators">Pro Team Stats VS</a> ]
[ <a href="OTHL-PLF-TeamInjurySuspension.php#Senators">Team Injury Suspension</a> ]
[ <a href="OTHL-PLF-TeamHistory.php#Senators">Team History</a> ]
[ <a href="OTHL-PLF-TeamRecords.php#Senators">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Senators');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Senators" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Jason Spezza             Gustav Nyquist           Pavel Buchnevich         35     0   2  3  
 2 Tomas Nosek              Patrick Marleau          J.T. Compher             35     0   2  3  
 3 Joel Kellman             Brett Connolly           Jordan Nolan             20     1   3  1  
 4 Cole Bardreau            William Carrier          Patrick Eaves            10     2   3  0  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Mark Giordano            Will Butcher                                      35     0   3  2  
 2 Shayne Gostisbehere      Yannick Weber                                     35     0   3  2  
 3 Dylan McIlrath           Unknown Player                                    20     2   3  0  
 4 Shayne Gostisbehere      Yannick Weber                                     10     1   4  0  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Jason Spezza             Gustav Nyquist           Pavel Buchnevich         60     0   1  4  
 2 Tomas Nosek              Patrick Marleau          J.T. Compher             40     0   2  3  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Mark Giordano            Will Butcher                                      60     0   2  3  
 2 Shayne Gostisbehere      Yannick Weber                                     40     0   2  3  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Tomas Nosek              Patrick Eaves            55     2   3  0  
 2 Cole Bardreau            Jordan Nolan             45     2   3  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Mark Giordano            Shayne Gostisbehere      55     1   4  0  
 2 Dylan McIlrath           Yannick Weber            45     1   4  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Tomas Nosek                                       50     1   4  0  
 2 Joel Kellman                                      50     1   4  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Mark Giordano            Shayne Gostisbehere      50     1   4  0  
 2 Will Butcher             Yannick Weber            50     1   4  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Jason Spezza             Pavel Buchnevich         50     0   2  3  
 2 J.T. Compher             Gustav Nyquist           50     0   2  3  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Mark Giordano            Will Butcher             60     1   2  2  
 2 Shayne Gostisbehere      Yannick Weber            40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Jason Spezza             Gustav Nyquist           Pavel Buchnevich         Mark Giordano            Will Butcher             

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Tomas Nosek              Patrick Eaves            Jordan Nolan             Mark Giordano            Dylan McIlrath           

<b>Goaltenders</b>
Starting : Unknown Goalie           
Backup : Andrei Vasilevskiy       

<b>Extra Forwards</b>
Normal : Gustav Nyquist, Pavel Buchnevich, Jason Spezza - PP : Gustav Nyquist, Pavel Buchnevich - PK : Jordan Nolan
<b>Extra Defensemen</b>
Normal : Mark Giordano, Will Butcher, Yannick Weber - PP : Mark Giordano - PK : Shayne Gostisbehere, Mark Giordano
<b>Penalty Shots</b>
Mark Giordano, Gustav Nyquist, Jordan Nolan, Jason Spezza, J.T. Compher
<b>Custom OT Lines Forwards</b>
Gustav Nyquist, Pavel Buchnevich, J.T. Compher, Jason Spezza, Patrick Marleau, Brett Connolly, Tomas Nosek, Jordan Nolan, William Carrier, Cole Bardreau
<b>Custom OT Lines Defensemen</b>
Mark Giordano, Shayne Gostisbehere, Dylan McIlrath, Yannick Weber, Will Butcher

<b>Scratches</b>
Gerald Mayhew (Healthy), Jordan Gross (Healthy), Fredrik Claesson (Healthy)</pre></div>
<h1 class="TeamLinesPro_SJS"><a id="Sharks">Sharks</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=26">Sharks Page</a> ]
[ <a href="OTHL-PLF-ProTeamRoster.php#Sharks">Pro Team Roster</a> ]
[ <a href="OTHL-PLF-ProTeamScoring.php#Sharks">Pro Team Scoring</a> ]
[ <a href="OTHL-PLF-TeamFinance.php#Sharks">Team Finance</a> ]
[ <a href="OTHL-PLF-ProTeamPlayersInfo.php#Sharks">Pro Team PlayersInfo</a> ]
[ <a href="OTHL-PLF-ProTeamLines.php#Sharks">Pro Team Lines</a> ]
[ <a href="OTHL-PLF-TeamProspects.php#Sharks">Team Prospects</a> ]
[ <a href="OTHL-PLF-ProTeamSchedule.php#Sharks">Pro Team Schedule</a> ]
[ <a href="OTHL-PLF-ProTeamStats.php#Sharks">Pro Team Stats</a> ]
[ <a href="OTHL-PLF-ProTeamStatsVS.php#Sharks">Pro Team Stats VS</a> ]
[ <a href="OTHL-PLF-TeamInjurySuspension.php#Sharks">Team Injury Suspension</a> ]
[ <a href="OTHL-PLF-TeamHistory.php#Sharks">Team History</a> ]
[ <a href="OTHL-PLF-TeamRecords.php#Sharks">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Sharks');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Sharks" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Aleksander Barkov        Filip Forsberg           Jakub Vrana              40     1   2  2  
 2 Evgeny Kuznetsov         Warren Foegele           Robert Thomas            30     1   2  2  
 3 Mattias Janmark          Mats Zuccarello          Garnet Hathaway          20     1   2  2  
 4 Joakim Nordstrom         Adam Helewka             Zack Kassian             10     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Kris Letang              Joel Edmundson                                    40     1   2  2  
 2 Jared Spurgeon           Mario Ferraro                                     30     1   2  2  
 3 T.J. Brodie              Justin Braun                                      20     1   2  2  
 4 Joel Edmundson           Jared Spurgeon                                    10     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Aleksander Barkov        Zack Kassian             Jakub Vrana              60     1   2  2  
 2 Evgeny Kuznetsov         Mats Zuccarello          Robert Thomas            40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Mario Ferraro            Jared Spurgeon                                    60     1   2  2  
 2 Justin Braun             T.J. Brodie                                       40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Jakub Vrana              Robert Thomas            60     1   2  2  
 2 Mats Zuccarello          Zack Kassian             40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Mario Ferraro            Jared Spurgeon           60     1   2  2  
 2 T.J. Brodie              Justin Braun             40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Jakub Vrana                                       60     1   2  2  
 2 Robert Thomas                                     40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 T.J. Brodie              Jared Spurgeon           60     1   2  2  
 2 Mario Ferraro            Justin Braun             40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Robert Thomas            Zack Kassian             60     1   2  2  
 2 Mats Zuccarello          Jakub Vrana              40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Mario Ferraro            Jared Spurgeon           60     1   2  2  
 2 T.J. Brodie              Justin Braun             40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Aleksander Barkov        Filip Forsberg           Jakub Vrana              Joel Edmundson           Jared Spurgeon           

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Evgeny Kuznetsov         Mats Zuccarello          Warren Foegele           Joel Edmundson           Jared Spurgeon           

<b>Goaltenders</b>
Starting : Darcy Kuemper            
Backup : Laurent Brossoit         

<b>Extra Forwards</b>
Normal : Zack Kassian, Robert Thomas, Jakub Vrana - PP : Zack Kassian, Robert Thomas - PK : Jakub Vrana
<b>Extra Defensemen</b>
Normal : T.J. Brodie, Mario Ferraro, Jared Spurgeon - PP : T.J. Brodie - PK : Mario Ferraro, Jared Spurgeon
<b>Penalty Shots</b>
Zack Kassian, Filip Forsberg, Robert Thomas, Jakub Vrana, Mats Zuccarello
<b>Custom OT Lines Forwards</b>
Zack Kassian, Warren Foegele, Filip Forsberg, Jakub Vrana, Mats Zuccarello, Robert Thomas, Aleksander Barkov, Mattias Janmark, Evgeny Kuznetsov, Garnet Hathaway
<b>Custom OT Lines Defensemen</b>
Joel Edmundson, Jared Spurgeon, Mario Ferraro, Justin Braun, T.J. Brodie

<b>Scratches</b>
Gustav Forsling (Healthy), Michael Frolik (Healthy), Eric Comrie (Healthy)</pre></div>
<h1 class="TeamLinesPro_DAL"><a id="Stars">Stars</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=10">Stars Page</a> ]
[ <a href="OTHL-PLF-ProTeamRoster.php#Stars">Pro Team Roster</a> ]
[ <a href="OTHL-PLF-ProTeamScoring.php#Stars">Pro Team Scoring</a> ]
[ <a href="OTHL-PLF-TeamFinance.php#Stars">Team Finance</a> ]
[ <a href="OTHL-PLF-ProTeamPlayersInfo.php#Stars">Pro Team PlayersInfo</a> ]
[ <a href="OTHL-PLF-ProTeamLines.php#Stars">Pro Team Lines</a> ]
[ <a href="OTHL-PLF-TeamProspects.php#Stars">Team Prospects</a> ]
[ <a href="OTHL-PLF-ProTeamSchedule.php#Stars">Pro Team Schedule</a> ]
[ <a href="OTHL-PLF-ProTeamStats.php#Stars">Pro Team Stats</a> ]
[ <a href="OTHL-PLF-ProTeamStatsVS.php#Stars">Pro Team Stats VS</a> ]
[ <a href="OTHL-PLF-TeamInjurySuspension.php#Stars">Team Injury Suspension</a> ]
[ <a href="OTHL-PLF-TeamHistory.php#Stars">Team History</a> ]
[ <a href="OTHL-PLF-TeamRecords.php#Stars">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Stars');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Stars" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Patrice Bergeron         Max Pacioretty           Jonathan Marchessault    37     0   2  3  
 2 Jeff Carter              Zach Parise              Anthony Mantha           28     0   1  4  
 3 Johan Larsson            Colton Sceviour          Curtis Lazar             23     0   3  2  
 4 Brian Boyle              Brendan Gaunce           Nicolas Deslauriers      12     0   4  1  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Ryan Ellis               Duncan Keith                                      40     0   3  2  
 2 Nikita Zadorov           Radko Gudas                                       38     0   4  1  
 3 Jordie Benn              Nick Jensen                                       14     1   3  1  
 4 Nikita Zadorov           Ryan Ellis                                        8      1   4  0  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Patrice Bergeron         Zach Parise              Jonathan Marchessault    65     0   0  5  
 2 Jeff Carter              Max Pacioretty           Anthony Mantha           35     0   0  5  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Ryan Ellis               Duncan Keith                                      75     0   0  5  
 2 Radko Gudas              Nikita Zadorov                                    25     0   0  5  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Curtis Lazar             Colton Sceviour          60     1   3  1  
 2 Patrice Bergeron         Johan Larsson            40     1   3  1  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Ryan Ellis               Radko Gudas              60     1   4  0  
 2 Nikita Zadorov           Nick Jensen              40     1   4  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Johan Larsson                                     60     0   3  2  
 2 Colton Sceviour                                   40     0   3  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Ryan Ellis               Radko Gudas              60     0   3  2  
 2 Nick Jensen              Duncan Keith             40     0   3  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Patrice Bergeron         Jonathan Marchessault    60     1   2  2  
 2 Johan Larsson            Zach Parise              40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Jordie Benn              Radko Gudas              52     1   2  2  
 2 Ryan Ellis               Nick Jensen              48     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Patrice Bergeron         Max Pacioretty           Anthony Mantha           Ryan Ellis               Duncan Keith             

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Patrice Bergeron         Colton Sceviour          Johan Larsson            Ryan Ellis               Radko Gudas              

<b>Goaltenders</b>
Starting : Jonathan Quick           
Backup : Cam Talbot               

<b>Extra Forwards</b>
Normal : Jonathan Marchessault, Zach Parise, Patrice Bergeron - PP : Jonathan Marchessault, Colton Sceviour - PK : Brendan Gaunce
<b>Extra Defensemen</b>
Normal : Ryan Ellis, Radko Gudas, Jordie Benn - PP : Radko Gudas - PK : Ryan Ellis, Radko Gudas
<b>Penalty Shots</b>
Jonathan Marchessault, Zach Parise, Ryan Ellis, Brian Boyle, Brendan Gaunce
<b>Custom OT Lines Forwards</b>
Patrice Bergeron, Zach Parise, Jeff Carter, Jonathan Marchessault, Max Pacioretty, Anthony Mantha, Brian Boyle, Johan Larsson, Curtis Lazar, Brendan Gaunce
<b>Custom OT Lines Defensemen</b>
Ryan Ellis, Duncan Keith, Jordie Benn, Nikita Zadorov, Nick Jensen

<b>Scratches</b>
Nate Prosser (Healthy), Mark Letestu (Healthy), Anthony Bitetto (Healthy), Michael Raffl (Healthy), Collin Delia (Healthy)</pre></div>
<h1 class="TeamLinesPro_MIN"><a id="Wild">Wild</a></h1>
<b>Lines are Incomplete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=15">Wild Page</a> ]
[ <a href="OTHL-PLF-ProTeamRoster.php#Wild">Pro Team Roster</a> ]
[ <a href="OTHL-PLF-ProTeamScoring.php#Wild">Pro Team Scoring</a> ]
[ <a href="OTHL-PLF-TeamFinance.php#Wild">Team Finance</a> ]
[ <a href="OTHL-PLF-ProTeamPlayersInfo.php#Wild">Pro Team PlayersInfo</a> ]
[ <a href="OTHL-PLF-ProTeamLines.php#Wild">Pro Team Lines</a> ]
[ <a href="OTHL-PLF-TeamProspects.php#Wild">Team Prospects</a> ]
[ <a href="OTHL-PLF-ProTeamSchedule.php#Wild">Pro Team Schedule</a> ]
[ <a href="OTHL-PLF-ProTeamStats.php#Wild">Pro Team Stats</a> ]
[ <a href="OTHL-PLF-ProTeamStatsVS.php#Wild">Pro Team Stats VS</a> ]
[ <a href="OTHL-PLF-TeamInjurySuspension.php#Wild">Team Injury Suspension</a> ]
[ <a href="OTHL-PLF-TeamHistory.php#Wild">Team History</a> ]
[ <a href="OTHL-PLF-TeamRecords.php#Wild">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Wild');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Wild" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Rocco Grimaldi           Victor Olofsson          Nino Niederreiter        30     0   2  3  
 2 Jayce Hawryluk           Conor Garland            Kyle Okposo              30     0   2  3  
 3 Sam Lafferty             Ondrej Kase              Unknown Player           20     0   4  1  
 4 Unknown Player           Seth Griffith            Unknown Player           20     1   3  1  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Tyson Barrie             Mike Matheson                                     30     1   3  1  
 2 Steven Kampfer           Mikhail Sergachev                                 30     1   3  1  
 3 Zach Redmond             Karl Alzner                                       30     1   3  1  
 4 Steven Kampfer           Mikhail Sergachev                                 10     1   3  1  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Rocco Grimaldi           Victor Olofsson          Nino Niederreiter        50     0   0  5  
 2 Unknown Player           Conor Garland            Unknown Player           50     0   0  5  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Mike Matheson            Mikhail Sergachev                                 50     0   1  4  
 2 Steven Kampfer           Tyson Barrie                                      50     0   1  4  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Sam Lafferty             Unknown Player           50     0   5  0  
 2 Unknown Player           Kyle Okposo              50     0   5  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Mike Matheson            Mikhail Sergachev        50     1   4  0  
 2 Zach Redmond             Karl Alzner              50     1   4  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Unknown Player                                    50     0   5  0  
 2 Unknown Player                                    50     0   5  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Mike Matheson            Mikhail Sergachev        50     0   5  0  
 2 Zach Redmond             Karl Alzner              50     0   5  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Unknown Player           Nino Niederreiter        50     0   2  3  
 2 Conor Garland            Kyle Okposo              50     0   2  3  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Tyson Barrie             Mike Matheson            50     0   3  2  
 2 Zach Redmond             Karl Alzner              50     0   3  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Rocco Grimaldi           Victor Olofsson          Unknown Player           Tyson Barrie             Mikhail Sergachev        

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Unknown Player           Kyle Okposo              Unknown Player           Mike Matheson            Mikhail Sergachev        

<b>Goaltenders</b>
Starting : Unknown Goalie           
Backup : Malcolm Subban           

<b>Extra Forwards</b>
Normal : Conor Garland, Unknown Player, Victor Olofsson - PP : Ondrej Kase, Jayce Hawryluk - PK : Unknown Player
<b>Extra Defensemen</b>
Normal : Tyson Barrie, Steven Kampfer, Mikhail Sergachev - PP : Zach Redmond - PK : Tyson Barrie, Steven Kampfer
<b>Penalty Shots</b>
Unknown Player, Victor Olofsson, Conor Garland, Kyle Okposo, Nino Niederreiter
<b>Custom OT Lines Forwards</b>
Rocco Grimaldi, Victor Olofsson, Jayce Hawryluk, Conor Garland, Sam Lafferty, Unknown Player, Unknown Player, Ondrej Kase, Kyle Okposo, Unknown Player
<b>Custom OT Lines Defensemen</b>
Mikhail Sergachev, Mike Matheson, Tyson Barrie, Steven Kampfer, Karl Alzner

<b>Scratches</b>
Adam Fox (Healthy), Riley Barber (Healthy), Troy Brouwer (Healthy), Jakob Silfverberg (Healthy), Sam Carrick (Healthy)
Jonathan Bernier (Healthy), Anders Nilsson (Healthy)</pre></div>
<?php include "Footer.php";?>
