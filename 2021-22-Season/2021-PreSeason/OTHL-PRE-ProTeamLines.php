<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<title>OTHL - Pro Team Lines</title>
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
<h1 class="TeamLinesPro_COL"><a id="Avalanche">Avalanche</a></h1>
<b>Lines are Complete</b><br />
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
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Bryan Little             Nathan Bastian           Marcus Johansson         40     1   2  2  
 2 Trevor Zegras            Brock McGinn             Matt Martin              30     1   2  2  
 3 Lucas Wallmark           Jordan Martinook         Mark Pysyk               20     1   2  2  
 4 Michael Sgarbossa        J.T. Miller              Richard Panik            10     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Brett Pesce              Hampus Lindholm                                   40     1   2  2  
 2 Brandon Carlo            Andrej Sekera                                     30     1   2  2  
 3 Carson Soucy             Jonas Siegenthaler                                20     1   2  2  
 4 Brandon Carlo            Brett Pesce                                       10     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Lucas Wallmark           Marcus Johansson         Michael Sgarbossa        60     1   2  2  
 2 Bryan Little             Brock McGinn             Matt Martin              40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Carson Soucy             Brandon Carlo                                     60     1   2  2  
 2 Hampus Lindholm          Andrej Sekera                                     40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Bryan Little             Michael Sgarbossa        60     1   2  2  
 2 Marcus Johansson         Lucas Wallmark           40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Andrej Sekera            Brett Pesce              60     1   2  2  
 2 Carson Soucy             Brandon Carlo            40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Lucas Wallmark                                    60     1   2  2  
 2 Michael Sgarbossa                                 40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Brett Pesce              Carson Soucy             60     1   2  2  
 2 Brandon Carlo            Andrej Sekera            40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Marcus Johansson         Michael Sgarbossa        60     1   2  2  
 2 Bryan Little             Lucas Wallmark           40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Brandon Carlo            Andrej Sekera            60     1   2  2  
 2 Brett Pesce              Carson Soucy             40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Bryan Little             Nathan Bastian           Marcus Johansson         Brett Pesce              Hampus Lindholm          

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Bryan Little             Nathan Bastian           Marcus Johansson         Brett Pesce              Hampus Lindholm          

<b>Goaltenders</b>
Starting : Chris Driedger           
Backup : Andrew Hammond           

<b>Extra Forwards</b>
Normal : Bryan Little, Michael Sgarbossa, Lucas Wallmark - PP : Lucas Wallmark, Michael Sgarbossa - PK : Lucas Wallmark
<b>Extra Defensemen</b>
Normal : Brandon Carlo, Carson Soucy, Andrej Sekera - PP : Andrej Sekera - PK : Andrej Sekera, Brandon Carlo
<b>Penalty Shots</b>
Michael Sgarbossa, Marcus Johansson, Brock McGinn, Lucas Wallmark, Bryan Little
<b>Custom OT Lines Forwards</b>
Marcus Johansson, J.T. Miller, Bryan Little, Lucas Wallmark, Nathan Bastian, Brock McGinn, Matt Martin, Jordan Martinook, Michael Sgarbossa, Trevor Zegras
<b>Custom OT Lines Defensemen</b>
Andrej Sekera, Brandon Carlo, Hampus Lindholm, Brett Pesce, Carson Soucy

<b>Scratches</b>
Andreas Englund (Healthy), Travis Boyd (Healthy), John Moore (Healthy), Aaron Dell (Healthy)</pre></div>
<h1 class="TeamLinesPro_CHI"><a id="Blackhawks">Blackhawks</a></h1>
<b>Lines are Complete</b><br />
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
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Sebastian Aho            Tomas Tatar              Mark Stone               38     0   2  3  
 2 Evgeni Malkin            Max Comtois              Vladislav Namestnikov    33     1   2  2  
 3 David Kampf              Carl Hagelin             Tyler Johnson            18     1   2  2  
 4 Otto Somppi              Alex Chiasson            Kevin Rooney             11     0   5  0  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Justin Faulk             Justin Holl                                       35     1   2  2  
 2 Zach Werenski            Justin Braun                                      35     1   2  2  
 3 Dylan DeMelo             Jordan Oesterle                                   20     1   2  2  
 4 Zach Werenski            Justin Faulk                                      10     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Evgeni Malkin            Sebastian Aho            Mark Stone               80     0   0  5  
 2 Tyler Johnson            Max Comtois              Tomas Tatar              20     0   0  5  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Zach Werenski            Justin Faulk                                      80     0   0  5  
 2 Jordan Oesterle          Justin Holl                                       20     0   0  5  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 David Kampf              Carl Hagelin             60     0   5  0  
 2 Sebastian Aho            Kevin Rooney             40     0   5  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Justin Faulk             Justin Braun             60     0   5  0  
 2 Justin Holl              Dylan DeMelo             40     0   5  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 David Kampf                                       60     0   5  0  
 2 Sebastian Aho                                     40     0   4  1  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Justin Faulk             Justin Braun             60     0   5  0  
 2 Justin Holl              Dylan DeMelo             40     0   5  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Sebastian Aho            Mark Stone               60     1   2  2  
 2 Evgeni Malkin            Tomas Tatar              40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Zach Werenski            Justin Faulk             60     1   2  2  
 2 Justin Braun             Justin Holl              40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Evgeni Malkin            Sebastian Aho            Mark Stone               Zach Werenski            Justin Faulk             

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Sebastian Aho            Carl Hagelin             David Kampf              Justin Braun             Justin Faulk             

<b>Goaltenders</b>
Starting : Igor Shesterkin          
Backup : Martin Jones             

<b>Extra Forwards</b>
Normal : Vladislav Namestnikov, Alex Chiasson, David Kampf - PP : Tyler Johnson, Vladislav Namestnikov - PK : Vladislav Namestnikov
<b>Extra Defensemen</b>
Normal : Zach Werenski, Dylan DeMelo, Justin Faulk - PP : Dylan DeMelo - PK : Jordan Oesterle, Zach Werenski
<b>Penalty Shots</b>
Max Comtois, David Kampf, Evgeni Malkin, Tomas Tatar, Sebastian Aho
<b>Custom OT Lines Forwards</b>
Sebastian Aho, Mark Stone, Evgeni Malkin, Tomas Tatar, Otto Somppi, Max Comtois, Tyler Johnson, Vladislav Namestnikov, Kevin Rooney, Carl Hagelin
<b>Custom OT Lines Defensemen</b>
Justin Faulk, Zach Werenski, Justin Braun, Justin Holl, Dylan DeMelo

<b>Scratches</b>
Andy Greene (Healthy), Erik Haula (Healthy)</pre></div>
<h1 class="TeamLinesPro_CLB"><a id="BlueJackets">Blue Jackets</a></h1>
<b>Lines are Complete</b><br />
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
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Joe Pavelski             Andrew Copp              T.J. Oshie               40     0   1  4  
 2 Elias Pettersson         Anthony Duclair          Miles Wood               30     0   0  5  
 3 Alexander Kerfoot        Zach Sanford             Kyle Palmieri            20     0   2  3  
 4 Frederick Gaudreau       Tomas Nosek              Vinnie Hinostroza        10     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Ian Cole                 Erik Johnson                                      40     1   2  2  
 2 Anton Stralman           Jason Demers                                      30     1   2  2  
 3 Quinn Hughes             Danny DeKeyser                                    20     1   2  2  
 4 Ian Cole                 Erik Johnson                                      10     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Joe Pavelski             Andrew Copp              T.J. Oshie               60     1   2  2  
 2 Elias Pettersson         Anthony Duclair          Miles Wood               40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Ian Cole                 Erik Johnson                                      60     1   2  2  
 2 Anton Stralman           Jason Demers                                      40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Joe Pavelski             Andrew Copp              60     1   2  2  
 2 T.J. Oshie               Elias Pettersson         40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Ian Cole                 Erik Johnson             60     1   2  2  
 2 Anton Stralman           Jason Demers             40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Joe Pavelski                                      60     1   2  2  
 2 Andrew Copp                                       40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Ian Cole                 Erik Johnson             60     1   2  2  
 2 Anton Stralman           Jason Demers             40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Joe Pavelski             Andrew Copp              60     1   2  2  
 2 T.J. Oshie               Elias Pettersson         40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Ian Cole                 Erik Johnson             60     1   2  2  
 2 Anton Stralman           Jason Demers             40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Joe Pavelski             Andrew Copp              T.J. Oshie               Ian Cole                 Erik Johnson             

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Joe Pavelski             Andrew Copp              T.J. Oshie               Ian Cole                 Erik Johnson             

<b>Goaltenders</b>
Starting : Sergei Bobrovsky         
Backup : Thatcher Demko           

<b>Extra Forwards</b>
Normal : Kyle Palmieri, Alexander Kerfoot, Zach Sanford - PP : Kyle Palmieri, Alexander Kerfoot - PK : Zach Sanford
<b>Extra Defensemen</b>
Normal : Quinn Hughes, Danny DeKeyser, Anton Stralman - PP : Quinn Hughes - PK : Danny DeKeyser, Anton Stralman
<b>Penalty Shots</b>
Joe Pavelski, Andrew Copp, T.J. Oshie, Elias Pettersson, Anthony Duclair
<b>Custom OT Lines Forwards</b>
Joe Pavelski, Andrew Copp, T.J. Oshie, Elias Pettersson, Anthony Duclair, Miles Wood, Kyle Palmieri, Alexander Kerfoot, Zach Sanford, Frederick Gaudreau
<b>Custom OT Lines Defensemen</b>
Ian Cole, Erik Johnson, Anton Stralman, Jason Demers, Quinn Hughes

<b>Scratches</b>
Dylan Gambrell (Healthy), Philippe Myers (Healthy)</pre></div>
<h1 class="TeamLinesPro_STL"><a id="Blues">Blues</a></h1>
<b>Lines are Complete</b><br />
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
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Mikael Backlund          Jaden Schwartz           Travis Konecny           35     0   1  4  
 2 Vladimir Tarasenko       Jonathan Drouin          Denis Gurianov           30     0   1  4  
 3 Pierre-Edouard Bellemare Antoine Roussel          Alexandre Texier         20     2   2  1  
 4 Janne Kuokkanen          Sammy Blais              Brendan Lemieux          15     3   0  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Cale Fleury              Samuel Girard                                     35     3   0  2  
 2 Nic Hague                Justin Schultz                                    35     2   3  0  
 3 Adam Boqvist             Jakub Zboril                                      20     2   3  0  
 4 Nic Hague                Samuel Girard                                     10     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Mikael Backlund          Jaden Schwartz           Travis Konecny           60     0   0  5  
 2 Pierre-Edouard Bellemare Jonathan Drouin          Denis Gurianov           40     0   0  5  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Justin Schultz           Samuel Girard                                     65     0   0  5  
 2 Nic Hague                Adam Boqvist                                      35     0   0  5  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Mikael Backlund          Jaden Schwartz           60     1   4  0  
 2 Travis Konecny           Denis Gurianov           40     1   4  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Adam Boqvist             Samuel Girard            60     1   4  0  
 2 Nic Hague                Justin Schultz           40     1   4  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Mikael Backlund                                   60     0   5  0  
 2 Jaden Schwartz                                    40     0   5  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Cale Fleury              Samuel Girard            60     1   4  0  
 2 Nic Hague                Justin Schultz           40     1   4  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Mikael Backlund          Jaden Schwartz           60     1   2  2  
 2 Travis Konecny           Denis Gurianov           40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Adam Boqvist             Samuel Girard            60     1   2  2  
 2 Nic Hague                Justin Schultz           40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Mikael Backlund          Jaden Schwartz           Travis Konecny           Cale Fleury              Samuel Girard            

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Mikael Backlund          Jaden Schwartz           Travis Konecny           Cale Fleury              Samuel Girard            

<b>Goaltenders</b>
Starting : Vitek Vanecek            
Backup : Antti Raanta             

<b>Extra Forwards</b>
Normal : Mikael Backlund, Jonathan Drouin, Pierre-Edouard Bellemare - PP : Mikael Backlund, Jonathan Drouin - PK : Mikael Backlund
<b>Extra Defensemen</b>
Normal : Justin Schultz, Adam Boqvist, Jakub Zboril - PP : Justin Schultz - PK : Justin Schultz, Adam Boqvist
<b>Penalty Shots</b>
Mikael Backlund, Jaden Schwartz, Travis Konecny, Denis Gurianov, Jonathan Drouin
<b>Custom OT Lines Forwards</b>
Mikael Backlund, Jaden Schwartz, Travis Konecny, Denis Gurianov, Vladimir Tarasenko, Jonathan Drouin, Pierre-Edouard Bellemare, Alexandre Texier, Antoine Roussel, Sammy Blais
<b>Custom OT Lines Defensemen</b>
Jakub Zboril, Samuel Girard, Nic Hague, Justin Schultz, Adam Boqvist

<b>Scratches</b>
Julien Gauthier (Healthy), Jean-Sebastien Dea (Healthy)</pre></div>
<h1 class="TeamLinesPro_BOS"><a id="Bruins">Bruins</a></h1>
<b>Lines are Complete</b><br />
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
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Sean Couturier           Brad Marchand            Blake Coleman            37     0   2  3  
 2 Jean-Gabriel Pageau      Chris Tierney            Ondrej Palat             33     0   3  2  
 3 Jay Beagle               Lawson Crouse            Paul Byron               25     1   2  2  
 4 Frederik Gauthier        Matthew Highmore         Trevor Lewis             5      1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Brent Burns              Brayden McNabb                                    37     0   4  1  
 2 Nate Schmidt             Ben Chiarot                                       33     0   4  1  
 3 Ben Hutton               Michael Anderson                                  25     0   5  0  
 4 Brayden McNabb           Ben Chiarot                                       5      0   4  1  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Sean Couturier           Brad Marchand            Ondrej Palat             65     0   0  5  
 2 Jean-Gabriel Pageau      Lawson Crouse            Blake Coleman            35     2   0  3  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Brent Burns              Nate Schmidt                                      60     0   0  5  
 2 Ben Hutton               Michael Anderson                                  40     0   0  5  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Jay Beagle               Lawson Crouse            60     0   5  0  
 2 Chris Tierney            Blake Coleman            40     0   5  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Brent Burns              Brayden McNabb           60     0   5  0  
 2 Nate Schmidt             Ben Hutton               40     0   5  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Jay Beagle                                        60     0   5  0  
 2 Chris Tierney                                     40     0   5  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Brent Burns              Brayden McNabb           60     0   5  0  
 2 Nate Schmidt             Ben Hutton               40     0   5  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Sean Couturier           Brad Marchand            60     0   3  2  
 2 Jean-Gabriel Pageau      Blake Coleman            40     0   3  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Brent Burns              Brayden McNabb           60     0   4  1  
 2 Nate Schmidt             Ben Chiarot              40     0   4  1  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Sean Couturier           Brad Marchand            Ondrej Palat             Brent Burns              Ben Hutton               

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Jay Beagle               Chris Tierney            Lawson Crouse            Brent Burns              Brayden McNabb           

<b>Goaltenders</b>
Starting : Pavel Francouz           
Backup : Linus Ullmark            

<b>Extra Forwards</b>
Normal : Sean Couturier, Brad Marchand, Blake Coleman - PP : Sean Couturier, Brad Marchand - PK : Jay Beagle
<b>Extra Defensemen</b>
Normal : Brent Burns, Brayden McNabb, Ben Chiarot - PP : Brent Burns - PK : Brent Burns, Brayden McNabb
<b>Penalty Shots</b>
Sean Couturier, Ondrej Palat, Blake Coleman, Jean-Gabriel Pageau, Chris Tierney
<b>Custom OT Lines Forwards</b>
Sean Couturier, Brad Marchand, Jean-Gabriel Pageau, Blake Coleman, Ondrej Palat, Chris Tierney, Paul Byron, Lawson Crouse, Matthew Highmore, Jay Beagle
<b>Custom OT Lines Defensemen</b>
Brent Burns, Brayden McNabb, Nate Schmidt, Ben Chiarot, Ben Hutton

<b>Scratches</b>
Jalen Chatfield (Healthy)</pre></div>
<h1 class="TeamLinesPro_MTL"><a id="Canadiens">Canadiens</a></h1>
<b>Lines are Complete</b><br />
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
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Mark Scheifele           Alex DeBrincat           Clayton Keller           27     1   1  3  
 2 Brayden Schenn           Daniel Sprong            Nikolaj Ehlers           27     1   1  3  
 3 Ryan Getzlaf             Brandon Tanev            Dillon Dube              24     1   2  2  
 4 Isac Lundestrom          Kyle Rau                 Jonny Brodzinski         22     2   2  1  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Ivan Provorov            Connor Murphy                                     27     1   3  1  
 2 Aaron Ekblad             Scott Mayfield                                    27     1   3  1  
 3 Tucker Poolman           Zach Bogosian                                     25     2   2  1  
 4 Connor Murphy            Scott Mayfield                                    21     1   3  1  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Mark Scheifele           Alex DeBrincat           Clayton Keller           50     0   1  4  
 2 Brayden Schenn           Daniel Sprong            Nikolaj Ehlers           50     0   1  4  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Ivan Provorov            Aaron Ekblad                                      50     0   2  3  
 2 Connor Murphy            Scott Mayfield                                    50     0   2  3  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Ryan Getzlaf             Brandon Tanev            50     1   3  1  
 2 Isac Lundestrom          Kyle Rau                 50     1   3  1  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Ivan Provorov            Connor Murphy            50     2   3  0  
 2 Aaron Ekblad             Scott Mayfield           50     2   3  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Brandon Tanev                                     50     1   3  1  
 2 Kyle Rau                                          50     1   3  1  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Ivan Provorov            Connor Murphy            50     2   3  0  
 2 Aaron Ekblad             Scott Mayfield           50     2   3  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Mark Scheifele           Alex DeBrincat           50     1   1  3  
 2 Brayden Schenn           Nikolaj Ehlers           50     1   1  3  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Ivan Provorov            Connor Murphy            50     1   3  1  
 2 Aaron Ekblad             Scott Mayfield           50     1   3  1  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Mark Scheifele           Alex DeBrincat           Nikolaj Ehlers           Ivan Provorov            Aaron Ekblad             

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Ryan Getzlaf             Brandon Tanev            Kyle Rau                 Ivan Provorov            Connor Murphy            

<b>Goaltenders</b>
Starting : Marc-Andre Fleury        
Backup : Alex Nedeljkovic         

<b>Extra Forwards</b>
Normal : Nikolaj Ehlers, Mark Scheifele, Alex DeBrincat - PP : Dillon Dube, Ryan Getzlaf - PK : Ryan Getzlaf
<b>Extra Defensemen</b>
Normal : Aaron Ekblad, Ivan Provorov, Connor Murphy - PP : Tucker Poolman - PK : Tucker Poolman, Zach Bogosian
<b>Penalty Shots</b>
Brandon Tanev, Ryan Getzlaf, Daniel Sprong, Mark Scheifele, Jonny Brodzinski
<b>Custom OT Lines Forwards</b>
Mark Scheifele, Alex DeBrincat, Brayden Schenn, Nikolaj Ehlers, Clayton Keller, Ryan Getzlaf, Brandon Tanev, Dillon Dube, Daniel Sprong, Isac Lundestrom
<b>Custom OT Lines Defensemen</b>
Ivan Provorov, Aaron Ekblad, Connor Murphy, Scott Mayfield, Tucker Poolman

<b>Scratches</b>
Jacob MacDonald (Healthy), Matt Tennyson (Healthy)</pre></div>
<h1 class="TeamLinesPro_VAN"><a id="Canucks">Canucks</a></h1>
<b>Lines are Complete</b><br />
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
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Kyle Connor              Nick Bonino              Rudolfs Balcers          45     0   1  4  
 2 Alexander True           Joel Farabee             Yanni Gourde             35     0   2  3  
 3 Michael McLeod           Arttu Ruotsalainen       Jason Dickinson          15     0   2  3  
 4 Brian Pinho              Anton Blidh              Logan O'Connor           5      0   4  1  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Dougie Hamilton          Nikita Zaitsev                                    48     0   3  2  
 2 MacKenzie Weegar         Haydn Fleury                                      35     0   3  2  
 3 Jacob Larsson            Trevor van Riemsdyk                               17     0   4  1  
 4 Dougie Hamilton          MacKenzie Weegar                                  0      0   3  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Jason Dickinson          Michael McLeod           Yanni Gourde             70     0   1  4  
 2 Logan O'Connor           Joel Farabee             Anton Blidh              30     0   1  4  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Dougie Hamilton          MacKenzie Weegar                                  65     0   1  4  
 2 Nikita Zaitsev           Trevor van Riemsdyk                               35     0   1  4  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Yanni Gourde             Jason Dickinson          70     0   4  1  
 2 Michael McLeod           Logan O'Connor           30     0   4  1  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Nikita Zaitsev           MacKenzie Weegar         65     0   4  1  
 2 Dougie Hamilton          Jacob Larsson            35     0   4  1  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Joel Farabee                                      60     0   5  0  
 2 Michael McLeod                                    40     0   5  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Nikita Zaitsev           MacKenzie Weegar         60     0   5  0  
 2 Dougie Hamilton          Jacob Larsson            40     0   5  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Kyle Connor              Yanni Gourde             60     0   2  3  
 2 Jason Dickinson          Joel Farabee             40     0   2  3  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Dougie Hamilton          Nikita Zaitsev           60     0   4  1  
 2 Trevor van Riemsdyk      MacKenzie Weegar         40     0   4  1  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Kyle Connor              Nick Bonino              Yanni Gourde             MacKenzie Weegar         Dougie Hamilton          

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Kyle Connor              Jason Dickinson          Michael McLeod           Nikita Zaitsev           MacKenzie Weegar         

<b>Goaltenders</b>
Starting : Darcy Kuemper            
Backup : Jacob Markstrom          

<b>Extra Forwards</b>
Normal : Michael McLeod, Joel Farabee, Jason Dickinson - PP : Joel Farabee, Yanni Gourde - PK : Logan O'Connor
<b>Extra Defensemen</b>
Normal : MacKenzie Weegar, Jacob Larsson, Trevor van Riemsdyk - PP : Trevor van Riemsdyk - PK : Trevor van Riemsdyk, Dougie Hamilton
<b>Penalty Shots</b>
Dougie Hamilton, Joel Farabee, Arttu Ruotsalainen, Kyle Connor, Brian Pinho
<b>Custom OT Lines Forwards</b>
Kyle Connor, Nick Bonino, Arttu Ruotsalainen, Logan O'Connor, Joel Farabee, Yanni Gourde, Anton Blidh, Michael McLeod, Jason Dickinson, Brian Pinho
<b>Custom OT Lines Defensemen</b>
Dougie Hamilton, MacKenzie Weegar, Nikita Zaitsev, Trevor van Riemsdyk, Jacob Larsson

<b>Scratches</b>
Mikko Rantanen (Healthy), Auston Matthews (Healthy), Nico Hischier (Healthy), Patrik Nemeth (Healthy), Ryan Carpenter (Healthy)</pre></div>
<h1 class="TeamLinesPro_WSH"><a id="Capitals">Capitals</a></h1>
<b>Lines are Complete</b><br />
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
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Jack Eichel              Pavel Zacha              Rickard Rakell           25     1   2  2  
 2 Sean Monahan             Alex Iafallo             Chandler Stephenson      25     1   2  2  
 3 Jujhar Khaira            Carl Grundstrom          Nicolas Aube-Kubel       25     1   2  2  
 4 Blake Lizotte            Michael Chaput           Nicolas Aube-Kubel       25     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Drew Doughty             Jacob Trouba                                      30     1   2  2  
 2 Dmitry Orlov             Jani Hakanpaa                                     30     1   2  2  
 3 Sean Walker              Matt Roy                                          30     1   2  2  
 4 Drew Doughty             Jacob Trouba                                      10     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Jack Eichel              Pavel Zacha              Rickard Rakell           60     1   2  2  
 2 Sean Monahan             Alex Iafallo             Chandler Stephenson      40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Drew Doughty             Jacob Trouba                                      60     1   2  2  
 2 Dmitry Orlov             Jani Hakanpaa                                     40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Chandler Stephenson      Alex Iafallo             60     1   2  2  
 2 Pavel Zacha              Jujhar Khaira            40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Drew Doughty             Jacob Trouba             60     1   2  2  
 2 Dmitry Orlov             Jani Hakanpaa            40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Jack Eichel                                       60     1   2  2  
 2 Pavel Zacha                                       40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Drew Doughty             Jacob Trouba             60     1   2  2  
 2 Dmitry Orlov             Jani Hakanpaa            40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Jack Eichel              Pavel Zacha              60     1   2  2  
 2 Sean Monahan             Alex Iafallo             40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Drew Doughty             Jacob Trouba             60     1   2  2  
 2 Dmitry Orlov             Jani Hakanpaa            40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Jack Eichel              Chandler Stephenson      Rickard Rakell           Drew Doughty             Jacob Trouba             

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Jack Eichel              Chandler Stephenson      Rickard Rakell           Drew Doughty             Jacob Trouba             

<b>Goaltenders</b>
Starting : Calvin Petersen          
Backup : Ville Husso              

<b>Extra Forwards</b>
Normal : Sean Monahan, Rickard Rakell, Blake Comeau - PP : Sean Monahan, Rickard Rakell - PK : Sean Monahan
<b>Extra Defensemen</b>
Normal : Jani Hakanpaa, Sean Walker, Matt Roy - PP : Jani Hakanpaa - PK : Jani Hakanpaa, Sean Walker
<b>Penalty Shots</b>
Jack Eichel, Pavel Zacha, Chandler Stephenson, Alex Iafallo, Sean Monahan
<b>Custom OT Lines Forwards</b>
Jack Eichel, Pavel Zacha, Chandler Stephenson, Alex Iafallo, Sean Monahan, Rickard Rakell, Blake Comeau, Jujhar Khaira, Blake Lizotte, Carl Grundstrom
<b>Custom OT Lines Defensemen</b>
Drew Doughty, Jacob Trouba, Dmitry Orlov, Jani Hakanpaa, Sean Walker

<b>Scratches</b>
Josh Brown (Healthy), Petr Mrazek (Healthy)</pre></div>
<h1 class="TeamLinesPro_ARI"><a id="Coyotes">Coyotes</a></h1>
<b>Lines are Complete</b><br />
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
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Leon Draisaitl           Pierre-Luc Dubois        Nikita Kucherov          33     1   2  2  
 2 Kevin Hayes              Kirill Kaprizov          William Nylander         33     1   2  2  
 3 Filip Chytil             Oskar Sundqvist          Jesper Fast              29     1   2  2  
 4 Nico Sturm               Nate Thompson            Wayne Simmonds           5      1   3  1  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Oliver Ekman-Larsson     Charlie McAvoy                                    40     1   2  2  
 2 Ethan Bear               Thomas Chabot                                     39     1   2  2  
 3 Cody Ceci                Slater Koekkoek                                   15     1   2  2  
 4 Thomas Chabot            Charlie McAvoy                                    6      1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Leon Draisaitl           Pierre-Luc Dubois        Kirill Kaprizov          50     1   2  2  
 2 Kevin Hayes              William Nylander         Nikita Kucherov          50     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Oliver Ekman-Larsson     Charlie McAvoy                                    60     1   2  2  
 2 Thomas Chabot            Cody Ceci                                         40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Leon Draisaitl           Pierre-Luc Dubois        60     1   2  2  
 2 Kevin Hayes              Wayne Simmonds           40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Thomas Chabot            Charlie McAvoy           60     1   2  2  
 2 Oliver Ekman-Larsson     Cody Ceci                40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Pierre-Luc Dubois                                 60     1   2  2  
 2 Kevin Hayes                                       40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Thomas Chabot            Charlie McAvoy           60     1   2  2  
 2 Oliver Ekman-Larsson     Cody Ceci                40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Leon Draisaitl           Kirill Kaprizov          60     1   2  2  
 2 Kevin Hayes              Pierre-Luc Dubois        40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Thomas Chabot            Charlie McAvoy           60     1   2  2  
 2 Oliver Ekman-Larsson     Cody Ceci                40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Leon Draisaitl           Kirill Kaprizov          Nikita Kucherov          Thomas Chabot            Charlie McAvoy           

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Leon Draisaitl           Kevin Hayes              Jesper Fast              Cody Ceci                Charlie McAvoy           

<b>Goaltenders</b>
Starting : Kaapo Kahkonen           
Backup : Tuukka Rask              

<b>Extra Forwards</b>
Normal : William Nylander, Pierre-Luc Dubois, Jesper Fast - PP : William Nylander, Pierre-Luc Dubois - PK : Jesper Fast
<b>Extra Defensemen</b>
Normal : Cody Ceci, Ethan Bear, Slater Koekkoek - PP : Cody Ceci - PK : Cody Ceci, Ethan Bear
<b>Penalty Shots</b>
Leon Draisaitl, Nikita Kucherov, Kirill Kaprizov, Kevin Hayes, William Nylander
<b>Custom OT Lines Forwards</b>
Leon Draisaitl, Nikita Kucherov, Kirill Kaprizov, Kevin Hayes, William Nylander, Pierre-Luc Dubois, Jesper Fast, Wayne Simmonds, Oskar Sundqvist, Nico Sturm
<b>Custom OT Lines Defensemen</b>
Thomas Chabot, Charlie McAvoy, Oliver Ekman-Larsson, Cody Ceci, Ethan Bear

<b>Scratches</b>
Christian Fischer (Healthy), Cedric Paquette (Healthy)</pre></div>
<h1 class="TeamLinesPro_NJD"><a id="Devils">Devils</a></h1>
<b>Lines are Complete</b><br />
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
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Jonathan Toews           Timo Meier               Kirby Dach               40     1   2  2  
 2 William Karlsson         Gemel Smith              Corey Perry              30     1   2  2  
 3 Brandon Sutter           Nick Ritchie             Anders Bjork             20     1   2  2  
 4 Radim Zohorna            Joel Kiviranta           Jimmy Vesey              10     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Darnell Nurse            Mattias Ekholm                                    40     1   2  2  
 2 Chris Tanev              Matt Irwin                                        30     1   2  2  
 3 Michal Kempny            Niko Mikkola                                      20     1   2  2  
 4 Darnell Nurse            Chris Tanev                                       10     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Jonathan Toews           Timo Meier               Kirby Dach               60     1   2  2  
 2 William Karlsson         Brandon Sutter           Corey Perry              40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Darnell Nurse            Mattias Ekholm                                    60     1   2  2  
 2 Chris Tanev              Michal Kempny                                     40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Brandon Sutter           William Karlsson         60     1   2  2  
 2 Timo Meier               Corey Perry              40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Darnell Nurse            Michal Kempny            60     1   2  2  
 2 Niko Mikkola             Mattias Ekholm           40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Jonathan Toews                                    60     1   2  2  
 2 William Karlsson                                  40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Darnell Nurse            Mattias Ekholm           60     1   2  2  
 2 Chris Tanev              Niko Mikkola             40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Nick Ritchie             William Karlsson         60     1   2  2  
 2 Kirby Dach               Jonathan Toews           40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Darnell Nurse            Niko Mikkola             60     1   2  2  
 2 Michal Kempny            Matt Irwin               40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Jonathan Toews           Timo Meier               Kirby Dach               Darnell Nurse            Mattias Ekholm           

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Jonathan Toews           Timo Meier               Kirby Dach               Darnell Nurse            Mattias Ekholm           

<b>Goaltenders</b>
Starting : Robin Lehner             
Backup : Keith Kinkaid            

<b>Extra Forwards</b>
Normal : William Karlsson, Brandon Sutter, Nick Ritchie - PP : William Karlsson, Brandon Sutter - PK : Nick Ritchie
<b>Extra Defensemen</b>
Normal : Michal Kempny, Niko Mikkola, Darnell Nurse - PP : Michal Kempny - PK : Niko Mikkola, Darnell Nurse
<b>Penalty Shots</b>
Nick Ritchie, William Karlsson, Timo Meier, Kirby Dach, Brandon Sutter
<b>Custom OT Lines Forwards</b>
Timo Meier, William Karlsson, Kirby Dach, Gemel Smith, Radim Zohorna, Brandon Sutter, Nick Ritchie, Corey Perry, Anders Bjork, Jimmy Vesey
<b>Custom OT Lines Defensemen</b>
Darnell Nurse, Mattias Ekholm, Chris Tanev, Matt Irwin, Michal Kempny

<b>Scratches</b>
Adam Larsson (Healthy), Patric Hornqvist (Healthy), Mason Marchment (Healthy)</pre></div>
<h1 class="TeamLinesPro_ANH"><a id="Ducks">Ducks</a></h1>
<b>Lines are Complete</b><br />
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
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Mika Zibanejad           Zach Hyman               Carter Rowney            32     0   4  1  
 2 Nick Suzuki              Artemi Panarin           Johnny Gaudreau          32     0   1  4  
 3 Jake Guentzel            Jordan Greenway          Jordan Kyrou             31     0   1  4  
 4 Kevin Stenlund           Matthew Peca             Cal Clutterbuck          5      1   3  1  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Jake Muzzin              Josh Morrissey                                    40     1   2  2  
 2 Morgan Rielly            Alec Martinez                                     25     0   1  4  
 3 Jake Gardiner            Alex Biega                                        20     0   2  3  
 4 Morgan Rielly            Alec Martinez                                     15     1   3  1  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Mika Zibanejad           Artemi Panarin           Jake Guentzel            60     0   1  4  
 2 Nick Suzuki              Johnny Gaudreau          Zach Hyman               40     0   1  4  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Morgan Rielly            Alec Martinez                                     60     0   1  4  
 2 Jake Gardiner            Josh Morrissey                                    40     0   1  4  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Carter Rowney            Cal Clutterbuck          60     1   4  0  
 2 Jordan Greenway          Zach Hyman               40     1   4  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Jake Muzzin              Alec Martinez            60     1   2  2  
 2 Alex Biega               Josh Morrissey           40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Cal Clutterbuck                                   60     1   2  2  
 2 Carter Rowney                                     40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Jake Muzzin              Alec Martinez            60     1   2  2  
 2 Alex Biega               Josh Morrissey           40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Mika Zibanejad           Zach Hyman               60     0   2  3  
 2 Nick Suzuki              Johnny Gaudreau          40     0   2  3  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Jake Muzzin              Alec Martinez            60     1   4  0  
 2 Alex Biega               Josh Morrissey           40     1   4  0  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Mika Zibanejad           Artemi Panarin           Jake Guentzel            Morgan Rielly            Alec Martinez            

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Mika Zibanejad           Zach Hyman               Cal Clutterbuck          Jake Muzzin              Alec Martinez            

<b>Goaltenders</b>
Starting : Jack Campbell            
Backup : Tristan Jarry            

<b>Extra Forwards</b>
Normal : Jordan Greenway, Carter Rowney, Cal Clutterbuck - PP : Jordan Greenway, Carter Rowney - PK : Cal Clutterbuck
<b>Extra Defensemen</b>
Normal : Jake Gardiner, Alex Biega, Morgan Rielly - PP : Jake Gardiner - PK : Alex Biega, Morgan Rielly
<b>Penalty Shots</b>
Mika Zibanejad, Artemi Panarin, Jake Guentzel, Johnny Gaudreau, Zach Hyman
<b>Custom OT Lines Forwards</b>
Mika Zibanejad, Artemi Panarin, Jake Guentzel, Johnny Gaudreau, Zach Hyman, Nick Suzuki, Jordan Greenway, Carter Rowney, Cal Clutterbuck, Jordan Kyrou
<b>Custom OT Lines Defensemen</b>
Jake Muzzin, Alec Martinez, Morgan Rielly, Josh Morrissey, Jake Gardiner

<b>Scratches</b>
None
</pre></div>
<h1 class="TeamLinesPro_CGY"><a id="Flames">Flames</a></h1>
<b>Lines are Complete</b><br />
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
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Dylan Larkin             Andre Burakovsky         David Perron             35     0   0  5  
 2 Bo Horvat                Jason Robertson          Tom Wilson               34     0   0  5  
 3 Phillip Danault          Adam Lowry               Anthony Beauvillier      21     0   0  5  
 4 Rasmus Asplund           Michael Raffl            Matthew Nieto            10     0   0  5  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Devon Toews              Zdeno Chara                                       40     0   0  5  
 2 Jaccob Slavin            Brady Skjei                                       30     0   0  5  
 3 Matt Benning             Braydon Coburn                                    20     0   0  5  
 4 Devon Toews              Jaccob Slavin                                     10     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Bo Horvat                David Perron             Andre Burakovsky         60     0   0  5  
 2 Dylan Larkin             Jason Robertson          Tom Wilson               40     0   0  5  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Devon Toews              Jaccob Slavin                                     60     0   0  5  
 2 Zdeno Chara              Brady Skjei                                       40     0   0  5  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Phillip Danault          Matthew Nieto            60     0   5  0  
 2 Adam Lowry               Michael Raffl            40     0   5  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Zdeno Chara              Braydon Coburn           60     0   5  0  
 2 Jaccob Slavin            Brady Skjei              40     0   5  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Bo Horvat                                         60     0   5  0  
 2 David Perron                                      40     0   5  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Zdeno Chara              Jaccob Slavin            60     0   5  0  
 2 Braydon Coburn           Brady Skjei              40     0   5  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Bo Horvat                David Perron             60     1   2  2  
 2 Dylan Larkin             Adam Lowry               40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Zdeno Chara              Jaccob Slavin            60     1   2  2  
 2 Devon Toews              Braydon Coburn           40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Bo Horvat                David Perron             Andre Burakovsky         Devon Toews              Jaccob Slavin            

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Adam Lowry               Phillip Danault          Matthew Nieto            Zdeno Chara              Jaccob Slavin            

<b>Goaltenders</b>
Starting : Ben Bishop               
Backup : Casey DeSmith            

<b>Extra Forwards</b>
Normal : Bo Horvat, David Perron, Andre Burakovsky - PP : Jason Robertson, Bo Horvat - PK : Adam Lowry
<b>Extra Defensemen</b>
Normal : Devon Toews, Jaccob Slavin, Zdeno Chara - PP : Zdeno Chara - PK : Braydon Coburn, Matt Benning
<b>Penalty Shots</b>
David Perron, Devon Toews, Dylan Larkin, Michael Raffl, Phillip Danault
<b>Custom OT Lines Forwards</b>
Bo Horvat, David Perron, Dylan Larkin, Jason Robertson, Andre Burakovsky, Tom Wilson, Anthony Beauvillier, Adam Lowry, Phillip Danault, Rasmus Asplund
<b>Custom OT Lines Defensemen</b>
Devon Toews, Jaccob Slavin, Zdeno Chara, Braydon Coburn, Matt Benning

<b>Scratches</b>
Taylor Hall (Healthy)</pre></div>
<h1 class="TeamLinesPro_PHL"><a id="Flyers">Flyers</a></h1>
<b>Lines are Complete</b><br />
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
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Justin Bailey            Jordan Weal              Brock Nelson             35     1   3  1  
 2 Bryan Rust               Mike Hoffman             Kevin Fiala              30     0   1  4  
 3 Joel Eriksson Ek         Viktor Arvidsson         Kailer Yamamoto          25     0   2  3  
 4 Cam Atkinson             Filip Zadina             Tyler Ennis              10     0   3  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Alexander Edler          Keith Yandle                                      35     0   2  3  
 2 Jonas Brodin             Rasmus Dahlin                                     30     0   2  3  
 3 Nathan Beaulieu          Brian Dumoulin                                    25     0   2  3  
 4 Alexander Edler          Jonas Brodin                                      10     0   5  0  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Joel Eriksson Ek         Kevin Fiala              Jordan Weal              60     0   0  5  
 2 Justin Bailey            Viktor Arvidsson         Brock Nelson             40     0   0  5  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Rasmus Dahlin            Mike Hoffman                                      60     0   0  5  
 2 Keith Yandle             Kailer Yamamoto                                   40     0   0  5  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Justin Bailey            Joel Eriksson Ek         60     0   5  0  
 2 Mike Hoffman             Kevin Fiala              40     0   5  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Alexander Edler          Keith Yandle             60     0   5  0  
 2 Jonas Brodin             Brian Dumoulin           40     0   5  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Joel Eriksson Ek                                  60     0   5  0  
 2 Mike Hoffman                                      40     0   5  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Alexander Edler          Keith Yandle             60     0   5  0  
 2 Jonas Brodin             Brian Dumoulin           40     0   5  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Kevin Fiala              Viktor Arvidsson         60     0   3  2  
 2 Joel Eriksson Ek         Mike Hoffman             40     0   3  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Alexander Edler          Keith Yandle             60     0   3  2  
 2 Jonas Brodin             Brian Dumoulin           40     0   3  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Justin Bailey            Jordan Weal              Kevin Fiala              Keith Yandle             Brian Dumoulin           

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Justin Bailey            Joel Eriksson Ek         Jordan Weal              Alexander Edler          Jonas Brodin             

<b>Goaltenders</b>
Starting : Collin Delia             
Backup : Mikko Koskinen           

<b>Extra Forwards</b>
Normal : Joel Eriksson Ek, Mike Hoffman, Kevin Fiala - PP : Joel Eriksson Ek, Mike Hoffman - PK : Joel Eriksson Ek
<b>Extra Defensemen</b>
Normal : Alexander Edler, Jonas Brodin, Keith Yandle - PP : Keith Yandle - PK : Alexander Edler, Jonas Brodin
<b>Penalty Shots</b>
Viktor Arvidsson, Kevin Fiala, Joel Eriksson Ek, Mike Hoffman, Kailer Yamamoto
<b>Custom OT Lines Forwards</b>
Justin Bailey, Brock Nelson, Kevin Fiala, Mike Hoffman, Viktor Arvidsson, Filip Zadina, Kailer Yamamoto, Bryan Rust, Joel Eriksson Ek, Tyler Ennis
<b>Custom OT Lines Defensemen</b>
Alexander Edler, Jonas Brodin, Keith Yandle, Brian Dumoulin, Rasmus Dahlin

<b>Scratches</b>
Nolan Stevens (Healthy), Trey Fix-Wolansky (Healthy), Ryan Strome (Healthy)</pre></div>
<h1 class="TeamLinesPro_VGK"><a id="GoldenKnights">Golden Knights</a></h1>
<b>Lines are Complete</b><br />
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
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Andrei Svechnikov        Jake Evans               Jordan Eberle            35     2   2  1  
 2 Jamie Benn               Phil Kessel              Drake Batherson          30     2   2  1  
 3 Colton Sissons           Joel Armia               Andrew Cogliano          20     2   2  1  
 4 Nicklas Backstrom        Milan Lucic              Paul Stastny             15     2   2  1  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Colton Parayko           Ryan McDonagh                                     40     2   2  1  
 2 Travis Sanheim           K'Andre Miller                                    30     2   2  1  
 3 Vince Dunn               Henri Jokiharju                                   25     2   2  1  
 4 Colton Parayko           Ryan McDonagh                                     5      2   2  1  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Colton Sissons           Andrew Cogliano          Jordan Eberle            60     1   2  2  
 2 Jamie Benn               Phil Kessel              Drake Batherson          40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Colton Parayko           Vince Dunn                                        60     1   2  2  
 2 Travis Sanheim           K'Andre Miller                                    40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Colton Sissons           Andrew Cogliano          60     2   2  1  
 2 Jamie Benn               Joel Armia               40     2   2  1  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Colton Parayko           Ryan McDonagh            60     2   2  1  
 2 Travis Sanheim           K'Andre Miller           40     2   2  1  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Colton Sissons                                    60     2   2  1  
 2 Andrew Cogliano                                   40     2   2  1  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Colton Parayko           Ryan McDonagh            60     2   2  1  
 2 Travis Sanheim           K'Andre Miller           40     2   2  1  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Andrew Cogliano          Colton Sissons           60     2   2  1  
 2 Jamie Benn               Phil Kessel              40     2   2  1  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Colton Parayko           Ryan McDonagh            60     2   2  1  
 2 Travis Sanheim           K'Andre Miller           40     2   2  1  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Jamie Benn               Phil Kessel              Jake Evans               Colton Parayko           Vince Dunn               

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Colton Sissons           Andrew Cogliano          Nicklas Backstrom        Colton Parayko           Ryan McDonagh            

<b>Goaltenders</b>
Starting : Mackenzie Blackwood      
Backup : Adin Hill                

<b>Extra Forwards</b>
Normal : Jamie Benn, Colton Sissons, Phil Kessel - PP : Jamie Benn, Phil Kessel - PK : Colton Sissons
<b>Extra Defensemen</b>
Normal : Colton Parayko, Ryan McDonagh, Travis Sanheim - PP : Colton Parayko - PK : Colton Parayko, Ryan McDonagh
<b>Penalty Shots</b>
Andrew Cogliano, Jordan Eberle, Jamie Benn, Phil Kessel, Joel Armia
<b>Custom OT Lines Forwards</b>
Nicklas Backstrom, Jamie Benn, Phil Kessel, Drake Batherson, Jordan Eberle, Jake Evans, Joel Armia, Colton Sissons, Andrew Cogliano, Milan Lucic
<b>Custom OT Lines Defensemen</b>
Colton Parayko, Ryan McDonagh, Travis Sanheim, K'Andre Miller, Vince Dunn

<b>Scratches</b>
Lias Andersson (Healthy)</pre></div>
<h1 class="TeamLinesPro_CAR"><a id="Hurricanes">Hurricanes</a></h1>
<b>Lines are Complete</b><br />
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
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Gabriel Landeskog        Troy Terry               Nazem Kadri              40     1   2  2  
 2 Casey Mittelstadt        Jack Hughes              Jesse Puljujarvi         30     1   2  2  
 3 Ryan Johansen            Jason Zucker             Pius Suter               20     1   2  2  
 4 Nick Paul                Tanner Jeannot           Ryan Hartman             10     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Jakob Chychrun           Filip Hronek                                      40     1   2  2  
 2 P.K. Subban              Artem Zub                                         30     1   2  2  
 3 Vladislav Gavrikov       Nick Jensen                                       20     1   2  2  
 4 Jakob Chychrun           Filip Hronek                                      10     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Ryan Hartman             Ryan Johansen            Tanner Jeannot           60     1   2  2  
 2 Jack Hughes              Casey Mittelstadt        Gabriel Landeskog        40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Jakob Chychrun           P.K. Subban                                       60     1   2  2  
 2 Filip Hronek             Artem Zub                                         40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Nick Paul                Ryan Hartman             60     0   4  1  
 2 Ryan Johansen            Tanner Jeannot           40     0   4  1  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 P.K. Subban              Vladislav Gavrikov       60     0   4  1  
 2 Filip Hronek             Artem Zub                40     0   4  1  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Nick Paul                                         60     0   5  0  
 2 Ryan Hartman                                      40     0   5  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Vladislav Gavrikov       Artem Zub                60     0   5  0  
 2 Nick Jensen              P.K. Subban              40     0   5  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Gabriel Landeskog        Ryan Hartman             60     1   2  2  
 2 Ryan Johansen            Jack Hughes              40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Jakob Chychrun           P.K. Subban              60     1   2  2  
 2 Vladislav Gavrikov       Filip Hronek             40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Troy Terry               Ryan Johansen            Gabriel Landeskog        P.K. Subban              Vladislav Gavrikov       

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Troy Terry               Ryan Johansen            Gabriel Landeskog        P.K. Subban              Vladislav Gavrikov       

<b>Goaltenders</b>
Starting : Anton Khudobin           
Backup : Alex Stalock             

<b>Extra Forwards</b>
Normal : Jack Hughes, Ryan Hartman, Ryan Johansen - PP : Jack Hughes, Ryan Johansen - PK : Ryan Johansen
<b>Extra Defensemen</b>
Normal : P.K. Subban, Nick Jensen, Artem Zub - PP : P.K. Subban - PK : Filip Hronek, Jakob Chychrun
<b>Penalty Shots</b>
Nick Paul, Gabriel Landeskog, Ryan Hartman, Ryan Johansen, Jack Hughes
<b>Custom OT Lines Forwards</b>
Troy Terry, Gabriel Landeskog, Nazem Kadri, Ryan Johansen, Jack Hughes, Casey Mittelstadt, Tanner Jeannot, Ryan Hartman, Nick Paul, Jason Zucker
<b>Custom OT Lines Defensemen</b>
P.K. Subban, Nick Jensen, Artem Zub, Jakob Chychrun, Filip Hronek

<b>Scratches</b>
Marcus Pettersson (Healthy), Egor Sharangovich (Healthy), Zachary Fucale (Healthy)</pre></div>
<h1 class="TeamLinesPro_NYI"><a id="Islanders">Islanders</a></h1>
<b>Lines are Complete</b><br />
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
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Ryan O'Reilly            Connor Brown             Alexander Radulov        30     0   3  2  
 2 Mathew Barzal            Jonathan Huberdeau       Steven Stamkos           30     0   0  5  
 3 Scott Laughton           Tyler Motte              Calle Jarnkrok           30     1   2  2  
 4 Nick Bjugstad            Tyler Pitlick            Austin Watson            10     1   3  1  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Cale Makar               Victor Hedman                                     40     0   2  3  
 2 Ryan Pulock              Calvin de Haan                                    30     1   3  1  
 3 Michael Stone            Greg Pateryn                                      20     0   5  0  
 4 Cale Makar               Ryan Pulock                                       10     0   3  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Tyler Motte              Jonathan Huberdeau       Steven Stamkos           60     0   0  5  
 2 Austin Watson            Calle Jarnkrok           Alexander Radulov        40     0   0  5  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Greg Pateryn             Cale Makar                                        70     0   0  5  
 2 Ryan Pulock              Calvin de Haan                                    30     0   0  5  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Jonathan Huberdeau       Tyler Motte              60     0   5  0  
 2 Austin Watson            Steven Stamkos           40     0   5  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Greg Pateryn             Calvin de Haan           60     0   5  0  
 2 Cale Makar               Ryan Pulock              40     0   5  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Tyler Motte                                       60     0   5  0  
 2 Steven Stamkos                                    40     0   5  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Ryan Pulock              Greg Pateryn             60     0   5  0  
 2 Calvin de Haan           Cale Makar               40     0   5  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Calle Jarnkrok           Steven Stamkos           60     0   2  3  
 2 Mathew Barzal            Jonathan Huberdeau       40     0   2  3  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Cale Makar               Greg Pateryn             60     0   2  3  
 2 Calvin de Haan           Ryan Pulock              40     0   3  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Ryan O'Reilly            Jonathan Huberdeau       Steven Stamkos           Calvin de Haan           Cale Makar               

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Austin Watson            Tyler Motte              Connor Brown             Calvin de Haan           Greg Pateryn             

<b>Goaltenders</b>
Starting : Philipp Grubauer         
Backup : Charles Williams         

<b>Extra Forwards</b>
Normal : Steven Stamkos, Alexander Radulov, Jonathan Huberdeau - PP : Steven Stamkos, Calle Jarnkrok - PK : Steven Stamkos
<b>Extra Defensemen</b>
Normal : Ryan Pulock, Cale Makar, Greg Pateryn - PP : Michael Stone - PK : Michael Stone, Greg Pateryn
<b>Penalty Shots</b>
Alexander Radulov, Calle Jarnkrok, Jonathan Huberdeau, Steven Stamkos, Tyler Motte
<b>Custom OT Lines Forwards</b>
Steven Stamkos, Ryan O'Reilly, Jonathan Huberdeau, Mathew Barzal, Connor Brown, Alexander Radulov, Calle Jarnkrok, Tyler Motte, Tyler Pitlick, Austin Watson
<b>Custom OT Lines Defensemen</b>
Michael Stone, Ryan Pulock, Calvin de Haan, Cale Makar, Greg Pateryn

<b>Scratches</b>
Matt Moulson (Healthy), Jacob Bryson (Healthy)</pre></div>
<h1 class="TeamLinesPro_WPG"><a id="Jets">Jets</a></h1>
<b>Lines are Complete</b><br />
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
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Roope Hintz              Jakub Voracek            Matthew Tkachuk          40     0   2  3  
 2 Jesperi Kotkaniemi       Kasperi Kapanen          Brendan Gallagher        30     0   2  3  
 3 Barclay Goodrow          Jeff Skinner             Joonas Donskoi           20     0   3  2  
 4 Casey Cizikas            Adam Erne                Leo Komarov              10     0   4  1  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Miro Heiskanen           Kevin Shattenkirk                                 40     0   1  4  
 2 Mike Reilly              Ryan Lindgren                                     30     0   2  3  
 3 Olli Maatta              Erik Gudbranson                                   20     0   3  2  
 4 Olli Maatta              Ryan Lindgren                                     10     0   4  1  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Casey Cizikas            Roope Hintz              Leo Komarov              60     0   1  4  
 2 Barclay Goodrow          Kasperi Kapanen          Joonas Donskoi           40     0   2  3  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Olli Maatta              Miro Heiskanen                                    60     0   1  4  
 2 Kevin Shattenkirk        Ryan Lindgren                                     40     0   2  3  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Casey Cizikas            Kasperi Kapanen          60     0   4  1  
 2 Barclay Goodrow          Leo Komarov              40     0   3  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Olli Maatta              Ryan Lindgren            60     0   4  1  
 2 Miro Heiskanen           Kevin Shattenkirk        40     0   3  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Casey Cizikas                                     60     0   4  1  
 2 Barclay Goodrow                                   40     0   3  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Olli Maatta              Ryan Lindgren            60     0   4  1  
 2 Miro Heiskanen           Kevin Shattenkirk        40     0   3  2  

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
Starting : Juuse Saros              
Backup : Joonas Korpisalo         

<b>Extra Forwards</b>
Normal : Casey Cizikas, Kasperi Kapanen, Barclay Goodrow - PP : Barclay Goodrow, Kasperi Kapanen - PK : Leo Komarov
<b>Extra Defensemen</b>
Normal : Olli Maatta, Ryan Lindgren, Miro Heiskanen - PP : Kevin Shattenkirk - PK : Ryan Lindgren, Miro Heiskanen
<b>Penalty Shots</b>
Kevin Shattenkirk, Ryan Lindgren, Jesperi Kotkaniemi, Casey Cizikas, Barclay Goodrow
<b>Custom OT Lines Forwards</b>
Roope Hintz, Kasperi Kapanen, Casey Cizikas, Barclay Goodrow, Joonas Donskoi, Jeff Skinner, Jesperi Kotkaniemi, Leo Komarov, Jakub Voracek, Brendan Gallagher
<b>Custom OT Lines Defensemen</b>
Ryan Lindgren, Miro Heiskanen, Olli Maatta, Kevin Shattenkirk, Erik Gudbranson

<b>Scratches</b>
Joel L'Esperance (Healthy), Matt Murray (Healthy)</pre></div>
<h1 class="TeamLinesPro_LAK"><a id="Kings">Kings</a></h1>
<b>Lines are Complete</b><br />
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
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Nathan MacKinnon         Alex Ovechkin            Mitch Marner             35     1   1  3  
 2 Elias Lindholm           Josh Anderson            Brock Boeser             35     1   1  3  
 3 Boone Jenner             Pierre Engvall           Mathieu Perreault        20     1   2  2  
 4 Riley Nash               Alex Galchenyuk          Nicolas Roy              10     1   3  1  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Seth Jones               Neal Pionk                                        40     1   2  2  
 2 Adam Pelech              Anthony DeAngelo                                  30     1   2  2  
 3 Travis Hamonic           Noah Dobson                                       20     1   2  2  
 4 Seth Jones               Neal Pionk                                        10     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Nathan MacKinnon         Alex Ovechkin            Mitch Marner             60     0   0  5  
 2 Elias Lindholm           Josh Anderson            Brock Boeser             40     0   0  5  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Seth Jones               Neal Pionk                                        60     0   2  3  
 2 Anthony DeAngelo         Travis Hamonic                                    40     0   2  3  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Boone Jenner             Pierre Engvall           60     0   4  1  
 2 Elias Lindholm           Mitch Marner             40     0   4  1  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Seth Jones               Adam Pelech              60     1   4  0  
 2 Travis Hamonic           Neal Pionk               40     1   4  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Boone Jenner                                      60     0   5  0  
 2 Elias Lindholm                                    40     0   5  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Seth Jones               Adam Pelech              60     0   5  0  
 2 Travis Hamonic           Neal Pionk               40     0   5  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Nathan MacKinnon         Alex Ovechkin            60     0   2  3  
 2 Elias Lindholm           Mitch Marner             40     0   2  3  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Seth Jones               Neal Pionk               60     1   2  2  
 2 Anthony DeAngelo         Adam Pelech              40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Nathan MacKinnon         Alex Ovechkin            Mitch Marner             Seth Jones               Neal Pionk               

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Elias Lindholm           Boone Jenner             Pierre Engvall           Seth Jones               Neal Pionk               

<b>Goaltenders</b>
Starting : Jordan Binnington        
Backup : James Reimer             

<b>Extra Forwards</b>
Normal : Mathieu Perreault, Brock Boeser, Elias Lindholm - PP : Boone Jenner, Brock Boeser - PK : Alex Ovechkin
<b>Extra Defensemen</b>
Normal : Anthony DeAngelo, Noah Dobson, Adam Pelech - PP : Anthony DeAngelo - PK : Noah Dobson, Anthony DeAngelo
<b>Penalty Shots</b>
Nathan MacKinnon, Alex Ovechkin, Elias Lindholm, Boone Jenner, Brock Boeser
<b>Custom OT Lines Forwards</b>
Nathan MacKinnon, Alex Ovechkin, Elias Lindholm, Mitch Marner, Brock Boeser, Boone Jenner, Josh Anderson, Mathieu Perreault, Nicolas Roy, Alex Galchenyuk
<b>Custom OT Lines Defensemen</b>
Seth Jones, Neal Pionk, Adam Pelech, Anthony DeAngelo, Noah Dobson

<b>Scratches</b>
Kyle Clifford (Healthy)</pre></div>
<h1 class="TeamLinesPro_SEA"><a id="Kraken">Kraken</a></h1>
<b>Lines are Incomplete</b><br />
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
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           Unknown Player           40     0   0  5  
 2 Dylan Strome             Unknown Player           Frank Vatrano            30     0   0  5  
 3 Mason Appleton           Valeri Nichushkin        Andreas Athanasiou       20     0   0  5  
 4 Victor Rask              Unknown Player           Ross Colton              10     0   0  5  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Brenden Dillon           Marc-Edouard Vlasic                               40     1   2  2  
 2 Mike Matheson            Unknown Player                                    30     1   2  2  
 3 Shayne Gostisbehere      Victor Mete                                       20     1   2  2  
 4 Brenden Dillon           Marc-Edouard Vlasic                               10     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           Unknown Player           60     0   0  5  
 2 Andreas Athanasiou       Unknown Player           Frank Vatrano            40     0   0  5  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Marc-Edouard Vlasic      Valeri Nichushkin                                 60     0   0  5  
 2 Brenden Dillon           Ross Colton                                       40     0   0  5  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           60     0   5  0  
 2 Unknown Player           Unknown Player           40     0   5  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Brenden Dillon           Marc-Edouard Vlasic      60     0   5  0  
 2 Mike Matheson            Unknown Player           40     0   5  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Unknown Player                                    60     0   5  0  
 2 Unknown Player                                    40     0   5  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Brenden Dillon           Marc-Edouard Vlasic      60     0   5  0  
 2 Mike Matheson            Unknown Player           40     0   5  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           60     1   2  2  
 2 Unknown Player           Unknown Player           40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Brenden Dillon           Marc-Edouard Vlasic      60     1   2  2  
 2 Mike Matheson            Unknown Player           40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Unknown Player           Unknown Player           Unknown Player           Brenden Dillon           Marc-Edouard Vlasic      

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Unknown Player           Unknown Player           Unknown Player           Brenden Dillon           Marc-Edouard Vlasic      

<b>Goaltenders</b>
Starting : Unknown Goalie           
Backup : Carey Price              

<b>Extra Forwards</b>
Normal : Ross Colton, Valeri Nichushkin, Dylan Strome - PP : Ross Colton, Valeri Nichushkin - PK : Dylan Strome
<b>Extra Defensemen</b>
Normal : Shayne Gostisbehere, Victor Mete, Mike Matheson - PP : Shayne Gostisbehere - PK : Victor Mete, Mike Matheson
<b>Penalty Shots</b>
Unknown Player, Unknown Player, Unknown Player, Unknown Player, Andreas Athanasiou
<b>Custom OT Lines Forwards</b>
Unknown Player, Unknown Player, Unknown Player, Unknown Player, Andreas Athanasiou, Frank Vatrano, Valeri Nichushkin, Dylan Strome, Mason Appleton, Unknown Player
<b>Custom OT Lines Defensemen</b>
Brenden Dillon, Marc-Edouard Vlasic, Mike Matheson, Unknown Player, Shayne Gostisbehere

<b>Scratches</b>
Evgenii Dadonov (Healthy), Alexander Wennberg (Healthy), Derek Ryan (Healthy), Kevin Labanc (Healthy), Zach Parise (Healthy)
Andreas Johnsson (Healthy), Nathan Gerbe (Healthy), Brendan Smith (Healthy), Jonathon Merrill (Healthy), Conor Sheary (Healthy)
Kevin Lankinen (Healthy)</pre></div>
<h1 class="TeamLinesPro_TBL"><a id="Lightning">Lightning</a></h1>
<b>Lines are Incomplete</b><br />
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
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Unknown Player           Evander Kane             Unknown Player           40     0   2  3  
 2 Derick Brassard          Tanner Pearson           Nick Schmaltz            30     0   3  2  
 3 Colin Blackwell          Oskar Lindblom           Nic Dowd                 20     2   2  1  
 4 Alex Belzile             Alexander Barabanov      Tim Schaller             10     1   4  0  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Shea Weber               Marco Scandella                                   40     1   4  0  
 2 Ryan Murray              John Klingberg                                    30     1   4  0  
 3 Kris Russell             William Lagesson                                  20     1   4  0  
 4 Ryan Murray              John Klingberg                                    10     1   4  0  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Unknown Player           Nick Schmaltz            Evander Kane             60     0   0  5  
 2 Derick Brassard          Tanner Pearson           Oskar Lindblom           40     0   0  5  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Unknown Player           John Klingberg                                    60     0   0  5  
 2 Shea Weber               Colin Blackwell                                   40     0   0  5  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Nic Dowd                 Tim Schaller             60     0   5  0  
 2 Derick Brassard          Alexander Barabanov      40     0   5  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Marco Scandella          Kris Russell             60     0   5  0  
 2 Ryan Murray              William Lagesson         40     0   5  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Nic Dowd                                          60     0   5  0  
 2 Tim Schaller                                      40     0   5  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Marco Scandella          Kris Russell             60     0   5  0  
 2 Ryan Murray              William Lagesson         40     0   5  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Unknown Player           Evander Kane             60     0   3  2  
 2 Nick Schmaltz            Unknown Player           40     0   3  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Shea Weber               John Klingberg           60     0   3  2  
 2 Ryan Murray              Marco Scandella          40     0   3  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Unknown Player           Evander Kane             Nick Schmaltz            Shea Weber               John Klingberg           

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Nic Dowd                 Tanner Pearson           Tim Schaller             Shea Weber               Kris Russell             

<b>Goaltenders</b>
Starting : Connor Hellebuyck        
Backup : Brian Elliott            

<b>Extra Forwards</b>
Normal : Unknown Player, Evander Kane, Nick Schmaltz - PP : Derick Brassard, Unknown Player - PK : Tanner Pearson
<b>Extra Defensemen</b>
Normal : John Klingberg, Shea Weber, Marco Scandella - PP : Ryan Murray - PK : Kris Russell, William Lagesson
<b>Penalty Shots</b>
Nick Schmaltz, Derick Brassard, Unknown Player, Evander Kane, Unknown Player
<b>Custom OT Lines Forwards</b>
Unknown Player, Evander Kane, Nick Schmaltz, Unknown Player, Derick Brassard, Oskar Lindblom, Colin Blackwell, Nic Dowd, Alexander Barabanov, Tim Schaller
<b>Custom OT Lines Defensemen</b>
John Klingberg, Shea Weber, Ryan Murray, Marco Scandella, William Lagesson

<b>Scratches</b>
Riley Stillman (Healthy), John Tavares (Healthy), Craig Smith (Healthy)</pre></div>
<h1 class="TeamLinesPro_TOR"><a id="MapleLeafs">Maple Leafs</a></h1>
<b>Lines are Complete</b><br />
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
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Jordan Staal             Tomas Hertl              Tyler Toffoli            35     0   1  4  
 2 Christian Dvorak         Sam Bennett              Brandon Saad             30     0   2  3  
 3 Radek Faksa              Sean Kuraly              Jake Debrusk             25     0   3  2  
 4 Eric Staal               Brett Howden             Ryan Reaves              10     1   4  0  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 John Carlson             Alex Pietrangelo                                  35     0   4  1  
 2 David Savard             Shea Theodore                                     35     0   4  1  
 3 Jarred Tinordi           Nick Leddy                                        20     0   4  1  
 4 John Carlson             Shea Theodore                                     10     0   4  1  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Jordan Staal             Tomas Hertl              Tyler Toffoli            60     0   0  5  
 2 Christian Dvorak         Sam Bennett              Brandon Saad             40     0   0  5  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 John Carlson             Alex Pietrangelo                                  60     0   0  5  
 2 Shea Theodore            Nick Leddy                                        40     0   0  5  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Radek Faksa              Sean Kuraly              60     0   5  0  
 2 Christian Dvorak         Brett Howden             40     0   5  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Jarred Tinordi           David Savard             55     0   5  0  
 2 John Carlson             Alex Pietrangelo         45     0   5  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Sean Kuraly                                       60     0   5  0  
 2 Brett Howden                                      40     0   5  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Jarred Tinordi           David Savard             60     0   5  0  
 2 John Carlson             Alex Pietrangelo         40     0   5  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Jordan Staal             Tomas Hertl              50     0   2  3  
 2 Christian Dvorak         Tyler Toffoli            50     0   2  3  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 John Carlson             Alex Pietrangelo         50     0   4  1  
 2 David Savard             Shea Theodore            50     0   4  1  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Jordan Staal             Tomas Hertl              Sam Bennett              John Carlson             Alex Pietrangelo         

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Jordan Staal             Tomas Hertl              Sam Bennett              John Carlson             Alex Pietrangelo         

<b>Goaltenders</b>
Starting : Frederik Andersen        
Backup : Jeremy Swayman           

<b>Extra Forwards</b>
Normal : Radek Faksa, Sam Bennett, Brandon Saad - PP : Radek Faksa, Sam Bennett - PK : Radek Faksa
<b>Extra Defensemen</b>
Normal : Shea Theodore, John Carlson, Alex Pietrangelo - PP : Shea Theodore - PK : Alex Pietrangelo, David Savard
<b>Penalty Shots</b>
Tomas Hertl, Jordan Staal, Christian Dvorak, Tyler Toffoli, Radek Faksa
<b>Custom OT Lines Forwards</b>
Tomas Hertl, Jordan Staal, Christian Dvorak, Tyler Toffoli, Radek Faksa, Sam Bennett, Brandon Saad, Jake Debrusk, Eric Staal, Sean Kuraly
<b>Custom OT Lines Defensemen</b>
John Carlson, Shea Theodore, Alex Pietrangelo, David Savard, Nick Leddy

<b>Scratches</b>
Cody Glass (Healthy), Troy Stecher (Healthy), Colin Miller (Healthy)</pre></div>
<h1 class="TeamLinesPro_EDM"><a id="Oilers">Oilers</a></h1>
<b>Lines are Complete</b><br />
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
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Vincent Trocheck         Ryan Nugent-Hopkins      Tyler Bertuzzi           34     1   3  1  
 2 Anthony Cirelli          Mikael Granlund          Blake Wheeler            34     0   1  4  
 3 Lars Eller               Eric Robinson            Noel Acciari             25     1   3  1  
 4 Luke Glendening          Sonny Milano             Chris Wagner             7      1   3  1  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Jeff Petry               Esa Lindell                                       40     1   2  2  
 2 Ryan Graves              Jamie Oleksiak                                    30     1   3  1  
 3 Jeremy Lauzon            Derek Forbort                                     20     1   3  1  
 4 Jeff Petry               Esa Lindell                                       10     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Vincent Trocheck         Ryan Nugent-Hopkins      Tyler Bertuzzi           60     1   0  4  
 2 Anthony Cirelli          Mikael Granlund          Blake Wheeler            40     1   0  4  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Jeff Petry               Esa Lindell                                       60     0   1  4  
 2 Ryan Graves              Jamie Oleksiak                                    40     0   1  4  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Lars Eller               Luke Glendening          60     1   3  1  
 2 Anthony Cirelli          Noel Acciari             40     1   3  1  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Derek Forbort            Esa Lindell              60     1   3  1  
 2 Jeremy Lauzon            Derek Forbort            40     1   3  1  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Vincent Trocheck                                  60     0   4  1  
 2 Luke Glendening                                   40     0   4  1  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Derek Forbort            Esa Lindell              60     0   5  0  
 2 Jeremy Lauzon            Derek Forbort            40     0   5  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Vincent Trocheck         Ryan Nugent-Hopkins      60     1   2  2  
 2 Anthony Cirelli          Mikael Granlund          40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Jeff Petry               Esa Lindell              60     1   2  2  
 2 Ryan Graves              Jamie Oleksiak           40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Vincent Trocheck         Ryan Nugent-Hopkins      Tyler Bertuzzi           Jeff Petry               Esa Lindell              

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Vincent Trocheck         Mikael Granlund          Luke Glendening          Jeff Petry               Esa Lindell              

<b>Goaltenders</b>
Starting : Semyon Varlamov          
Backup : Elvis Merzlikins         

<b>Extra Forwards</b>
Normal : Anthony Cirelli, Mikael Granlund, Blake Wheeler - PP : Blake Wheeler, Tyler Bertuzzi - PK : Ryan Nugent-Hopkins
<b>Extra Defensemen</b>
Normal : Esa Lindell, Jeff Petry, Ryan Graves - PP : Jamie Oleksiak - PK : Ryan Graves, Jeremy Lauzon
<b>Penalty Shots</b>
Vincent Trocheck, Ryan Nugent-Hopkins, Blake Wheeler, Mikael Granlund, Anthony Cirelli
<b>Custom OT Lines Forwards</b>
Vincent Trocheck, Ryan Nugent-Hopkins, Blake Wheeler, Mikael Granlund, Anthony Cirelli, Tyler Bertuzzi, Lars Eller, Luke Glendening, Noel Acciari, Eric Robinson
<b>Custom OT Lines Defensemen</b>
Jeff Petry, Esa Lindell, Ryan Graves, Jeremy Lauzon, Derek Forbort

<b>Scratches</b>
John Gibson (Healthy)</pre></div>
<h1 class="TeamLinesPro_FLA"><a id="Panthers">Panthers</a></h1>
<b>Lines are Complete</b><br />
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
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Tyler Seguin             Max Domi                 Jakob Silfverberg        25     1   2  2  
 2 C.J. Smith               Josh Bailey              Martin Necas             25     1   2  2  
 3 Derek Stepan             Michael Dal Colle        Danny O'Regan            25     1   2  2  
 4 Vinni Lettieri           Darren Helm              Cooper Marody            25     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Duncan Keith             Damon Severson                                    30     1   3  1  
 2 Erik Karlsson            Rasmus Andersson                                  30     1   3  1  
 3 Scott Harrington         Alexandre Carrier                                 25     1   3  1  
 4 Damon Severson           Erik Karlsson                                     15     1   3  1  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Tyler Seguin             Max Domi                 Jakob Silfverberg        50     0   0  5  
 2 Vinni Lettieri           Martin Necas             Josh Bailey              50     0   0  5  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Erik Karlsson            Rasmus Andersson                                  50     0   0  5  
 2 Alexandre Carrier        Damon Severson                                    50     0   0  5  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Erik Karlsson            Darren Helm              50     0   5  0  
 2 Derek Stepan             Jakob Silfverberg        50     0   5  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Scott Harrington         Damon Severson           50     0   5  0  
 2 Erik Karlsson            Rasmus Andersson         50     0   5  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Erik Karlsson                                     50     0   5  0  
 2 Derek Stepan                                      50     0   5  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Duncan Keith             Damon Severson           50     0   5  0  
 2 Erik Karlsson            Rasmus Andersson         50     0   5  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Vinni Lettieri           Tyler Seguin             50     1   2  2  
 2 Danny O'Regan            Darren Helm              50     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Damon Severson           Scott Harrington         50     1   2  2  
 2 Rasmus Andersson         Erik Karlsson            50     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Tyler Seguin             Max Domi                 Jakob Silfverberg        Rasmus Andersson         Erik Karlsson            

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Derek Stepan             Darren Helm              Jakob Silfverberg        Damon Severson           Erik Karlsson            

<b>Goaltenders</b>
Starting : Ilya Sorokin             
Backup : David Rittich            

<b>Extra Forwards</b>
Normal : Tyler Seguin, Max Domi, Jakob Silfverberg - PP : Tyler Seguin, Jakob Silfverberg - PK : Tyler Seguin
<b>Extra Defensemen</b>
Normal : Damon Severson, Erik Karlsson, Rasmus Andersson - PP : Damon Severson - PK : Damon Severson, Erik Karlsson
<b>Penalty Shots</b>
Jakob Silfverberg, Tyler Seguin, Cooper Marody, Erik Karlsson, Vinni Lettieri
<b>Custom OT Lines Forwards</b>
Tyler Seguin, Max Domi, Jakob Silfverberg, Josh Bailey, Darren Helm, Derek Stepan, Martin Necas, Danny O'Regan, Vinni Lettieri, Cooper Marody
<b>Custom OT Lines Defensemen</b>
Damon Severson, Erik Karlsson, Scott Harrington, Rasmus Andersson, Duncan Keith

<b>Scratches</b>
Derrick Pouliot (Healthy)</pre></div>
<h1 class="TeamLinesPro_PIT"><a id="Penguins">Penguins</a></h1>
<b>Lines are Complete</b><br />
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
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Tyson Jost               Brady Tkachuk            Dustin Brown             40     1   1  3  
 2 Nick Foligno             Michael Rasmussen        Ilya Mikheyev            30     1   2  2  
 3 Nick Cousins             James van Riemsdyk       Sam Gagner               20     1   1  3  
 4 Evan Rodrigues           Sven Baertschi           Pat Maroon               10     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Cam Fowler               Dmitry Kulikov                                    40     1   2  2  
 2 Dante Fabbro             Robert Bortuzzo                                   30     1   2  2  
 3 Roland McKeown           Kurtis MacDermid                                  20     1   3  1  
 4 Dante Fabbro             Dmitry Kulikov                                    10     1   1  3  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Tyson Jost               James van Riemsdyk       Sam Gagner               60     1   0  4  
 2 Evan Rodrigues           Brady Tkachuk            Dustin Brown             40     1   1  3  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Cam Fowler               Kurtis MacDermid                                  60     0   2  3  
 2 Dmitry Kulikov           Dante Fabbro                                      40     1   1  3  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Tyson Jost               Ilya Mikheyev            60     1   3  1  
 2 Nick Foligno             Sven Baertschi           40     1   4  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Dmitry Kulikov           Dante Fabbro             60     0   5  0  
 2 Robert Bortuzzo          Cam Fowler               40     1   4  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Evan Rodrigues                                    60     0   5  0  
 2 Nick Foligno                                      40     0   5  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Dante Fabbro             Robert Bortuzzo          60     0   5  0  
 2 Cam Fowler               Dmitry Kulikov           40     1   4  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Evan Rodrigues           Nick Foligno             60     1   2  2  
 2 Sam Gagner               Dustin Brown             40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Dmitry Kulikov           Robert Bortuzzo          60     1   2  2  
 2 Cam Fowler               Roland McKeown           40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Sam Gagner               Brady Tkachuk            Dustin Brown             Cam Fowler               Dmitry Kulikov           

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Sam Gagner               Evan Rodrigues           Nick Cousins             Robert Bortuzzo          Dmitry Kulikov           

<b>Goaltenders</b>
Starting : Logan Thompson           
Backup : Anton Forsberg           

<b>Extra Forwards</b>
Normal : Sam Gagner, James van Riemsdyk, Evan Rodrigues - PP : Dustin Brown, Michael Rasmussen - PK : Dustin Brown
<b>Extra Defensemen</b>
Normal : Dmitry Kulikov, Robert Bortuzzo, Roland McKeown - PP : Dmitry Kulikov - PK : Roland McKeown, Robert Bortuzzo
<b>Penalty Shots</b>
Brady Tkachuk, James van Riemsdyk, Dustin Brown, Nick Foligno, Cam Fowler
<b>Custom OT Lines Forwards</b>
Brady Tkachuk, Nick Foligno, James van Riemsdyk, Tyson Jost, Dustin Brown, Evan Rodrigues, Ilya Mikheyev, Michael Rasmussen, Sven Baertschi, Sam Gagner
<b>Custom OT Lines Defensemen</b>
Dmitry Kulikov, Cam Fowler, Dante Fabbro, Robert Bortuzzo, Kurtis MacDermid

<b>Scratches</b>
Austin Czarnik (Healthy), Dakota Joshua (Healthy)</pre></div>
<h1 class="TeamLinesPro_NSH"><a id="Predators">Predators</a></h1>
<b>Lines are Complete</b><br />
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
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Alex Tuch                Dominik Kubalik          Brandon Hagel            38     0   2  3  
 2 Logan Shaw               Reilly Smith             Sam Reinhart             32     0   2  3  
 3 Dylan Cozens             Adrian Kempe             Alex Killorn             25     0   2  3  
 4 Nils Hoglander           Ryan Dzingel             Danton Heinen            5      0   2  3  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Oscar Klefbom            Alex Goligoski                                    40     0   3  2  
 2 Erik Cernak              Nick Holden                                       31     0   3  2  
 3 Dennis Cholowski         Ville Heinola                                     19     0   3  2  
 4 Oscar Klefbom            Alex Goligoski                                    10     0   3  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Alex Tuch                Reilly Smith             Dominik Kubalik          50     0   0  5  
 2 Adrian Kempe             Brandon Hagel            Sam Reinhart             50     0   0  5  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Oscar Klefbom            Alex Goligoski                                    50     0   0  5  
 2 Erik Cernak              Ville Heinola                                     50     0   0  5  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Alex Tuch                Sam Reinhart             50     0   5  0  
 2 Adrian Kempe             Reilly Smith             50     0   5  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Oscar Klefbom            Alex Goligoski           50     0   5  0  
 2 Nick Holden              Erik Cernak              50     0   5  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Adrian Kempe                                      50     0   5  0  
 2 Reilly Smith                                      50     0   5  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Oscar Klefbom            Alex Goligoski           50     0   5  0  
 2 Dennis Cholowski         Erik Cernak              50     0   5  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Reilly Smith             Adrian Kempe             50     0   1  4  
 2 Alex Tuch                Sam Reinhart             50     0   1  4  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Oscar Klefbom            Alex Goligoski           50     0   2  3  
 2 Erik Cernak              Nick Holden              50     0   2  3  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Alex Tuch                Brandon Hagel            Dominik Kubalik          Oscar Klefbom            Alex Goligoski           

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Alex Tuch                Brandon Hagel            Reilly Smith             Oscar Klefbom            Alex Goligoski           

<b>Goaltenders</b>
Starting : Troy Grosenick           
Backup : Andrei Vasilevskiy       

<b>Extra Forwards</b>
Normal : Sam Reinhart, Adrian Kempe, Reilly Smith - PP : Adrian Kempe, Reilly Smith - PK : Adrian Kempe
<b>Extra Defensemen</b>
Normal : Oscar Klefbom, Alex Goligoski, Erik Cernak - PP : Oscar Klefbom - PK : Erik Cernak, Oscar Klefbom
<b>Penalty Shots</b>
Danton Heinen, Adrian Kempe, Sam Reinhart, Reilly Smith, Brandon Hagel
<b>Custom OT Lines Forwards</b>
Alex Tuch, Sam Reinhart, Dominik Kubalik, Brandon Hagel, Reilly Smith, Nils Hoglander, Adrian Kempe, Alex Killorn, Ryan Dzingel, Danton Heinen
<b>Custom OT Lines Defensemen</b>
Oscar Klefbom, Alex Goligoski, Dennis Cholowski, Erik Cernak, Ville Heinola

<b>Scratches</b>
Gage Quinney (Healthy), Logan Couture (Healthy), Adam Henrique (Healthy)</pre></div>
<h1 class="TeamLinesPro_NYR"><a id="Rangers">Rangers</a></h1>
<b>Lines are Complete</b><br />
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
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Claude Giroux            Jack Roslovic            Robby Fabbri             35     1   2  2  
 2 Colin White              Artturi Lehkonen         Bobby Ryan               35     1   2  2  
 3 Mark Jankowski           Brad Richardson          Jesper Bratt             17     1   2  2  
 4 Charlie Coyle            Kyle Turris              Kyle Okposo              13     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Roman Josi               Brent Seabrook                                    40     1   2  2  
 2 John Marino              Matt Grzelcyk                                     30     1   2  2  
 3 Erik Gustafsson          Chad Ruhwedel                                     20     1   2  2  
 4 Roman Josi               Brent Seabrook                                    10     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Brad Richardson          Claude Giroux            Jack Roslovic            60     1   2  2  
 2 Colin White              Jesper Bratt             Kyle Okposo              40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Roman Josi               Brent Seabrook                                    60     1   2  2  
 2 John Marino              Matt Grzelcyk                                     40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Colin White              Robby Fabbri             60     1   2  2  
 2 Brad Richardson          Kyle Okposo              40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Roman Josi               Brent Seabrook           60     1   2  2  
 2 John Marino              Matt Grzelcyk            40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Colin White                                       60     1   2  2  
 2 Kyle Okposo                                       40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Roman Josi               Brent Seabrook           60     1   2  2  
 2 John Marino              Matt Grzelcyk            40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Kyle Okposo              Colin White              60     1   2  2  
 2 Jesper Bratt             Brad Richardson          40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Roman Josi               Brent Seabrook           60     1   2  2  
 2 John Marino              Matt Grzelcyk            40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Claude Giroux            Robby Fabbri             Jack Roslovic            Roman Josi               Brent Seabrook           

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Claude Giroux            Robby Fabbri             Jack Roslovic            Roman Josi               Brent Seabrook           

<b>Goaltenders</b>
Starting : Jaroslav Halak           
Backup : Jean-Francois Berube     

<b>Extra Forwards</b>
Normal : Brad Richardson, Colin White, Kyle Okposo - PP : Kyle Okposo, Colin White - PK : Colin White
<b>Extra Defensemen</b>
Normal : Matt Grzelcyk, Erik Gustafsson, Chad Ruhwedel - PP : Matt Grzelcyk - PK : Matt Grzelcyk, Erik Gustafsson
<b>Penalty Shots</b>
Colin White, Brad Richardson, Jesper Bratt, Claude Giroux, Kyle Okposo
<b>Custom OT Lines Forwards</b>
Claude Giroux, Robby Fabbri, Jesper Bratt, Jack Roslovic, Artturi Lehkonen, Colin White, Kyle Okposo, Mark Jankowski, Bobby Ryan, Brad Richardson
<b>Custom OT Lines Defensemen</b>
Roman Josi, Brent Seabrook, John Marino, Matt Grzelcyk, Erik Gustafsson

<b>Scratches</b>
Luca Sbisa (Healthy), Brendan Perlini (Healthy), Frans Nielsen (Healthy), Melker Karlsson (Healthy)</pre></div>
<h1 class="TeamLinesPro_DET"><a id="RedWings">Red Wings</a></h1>
<b>Lines are Complete</b><br />
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
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Connor McDavid           Patrik Laine             Nino Niederreiter        40     0   0  5  
 2 Brayden Point            Jared McCann             Oliver Bjorkstrand       40     0   0  5  
 3 Teddy Blueger            Andrew Mangiapane        Martin Frk               10     0   0  5  
 4 Ivan Barbashev           Mackenzie MacEachern     Zac Dalpe                10     0   5  0  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Mathew Dumba             Josh Manson                                       50     0   3  2  
 2 Jake McCabe              Torey Krug                                        30     0   3  2  
 3 Connor Clifton           Connor Carrick                                    20     0   5  0  
 4 Jake McCabe              Connor Clifton                                    0      0   5  0  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Connor McDavid           Andrew Mangiapane        Brayden Point            75     0   0  5  
 2 Teddy Blueger            Jared McCann             Oliver Bjorkstrand       25     0   0  5  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Mathew Dumba             Nino Niederreiter                                 75     0   0  5  
 2 Torey Krug               Patrik Laine                                      25     0   0  5  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Teddy Blueger            Ivan Barbashev           75     0   5  0  
 2 Zac Dalpe                Mackenzie MacEachern     25     0   5  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Josh Manson              Jake McCabe              65     0   5  0  
 2 Mathew Dumba             Connor Clifton           35     0   5  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Teddy Blueger                                     60     0   5  0  
 2 Ivan Barbashev                                    40     0   5  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Josh Manson              Jake McCabe              60     0   5  0  
 2 Mathew Dumba             Connor Clifton           40     0   5  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Connor McDavid           Brayden Point            75     0   0  5  
 2 Jared McCann             Patrik Laine             25     0   5  0  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Mathew Dumba             Torey Krug               70     0   0  5  
 2 Josh Manson              Jake McCabe              30     0   3  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Connor McDavid           Oliver Bjorkstrand       Brayden Point            Nino Niederreiter        Patrik Laine             

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Teddy Blueger            Ivan Barbashev           Zac Dalpe                Josh Manson              Jake McCabe              

<b>Goaltenders</b>
Starting : Mike Smith               
Backup : Evan Fitzpatrick         

<b>Extra Forwards</b>
Normal : Brayden Point, Andrew Mangiapane, Connor McDavid - PP : Patrik Laine, Martin Frk - PK : Andrew Mangiapane
<b>Extra Defensemen</b>
Normal : Jake McCabe, Mathew Dumba, Connor Clifton - PP : Josh Manson - PK : Connor Carrick, Josh Manson
<b>Penalty Shots</b>
Patrik Laine, Jared McCann, Connor McDavid, Martin Frk, Brayden Point
<b>Custom OT Lines Forwards</b>
Connor McDavid, Patrik Laine, Brayden Point, Nino Niederreiter, Oliver Bjorkstrand, Andrew Mangiapane, Jared McCann, Teddy Blueger, Ivan Barbashev, Martin Frk
<b>Custom OT Lines Defensemen</b>
Mathew Dumba, Josh Manson, Jake McCabe, Connor Clifton, Connor Carrick

<b>Scratches</b>
Markus Nutivaara (Healthy), Dryden Hunt (Healthy)</pre></div>
<h1 class="TeamLinesPro_BUF"><a id="Sabres">Sabres</a></h1>
<b>Lines are Complete</b><br />
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
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Anze Kopitar             Teuvo Teravainen         Sidney Crosby            40     0   2  3  
 2 Carter Verhaeghe         Anders Lee               Chris Kreider            30     0   2  3  
 3 Derek Grant              Zemgus Girgensons        Cody Eakin               20     0   3  2  
 4 Trevor Moore             David Pastrnak           Zach Aston-Reese         10     0   4  1  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Ryan Suter               Michael Del Zotto                                 32     0   4  1  
 2 Rasmus Ristolainen       Jack Johnson                                      32     0   4  1  
 3 Mark Borowiecki          Robert Hagg                                       26     0   5  0  
 4 Ryan Suter               Rasmus Ristolainen                                10     0   4  1  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Derek Grant              Teuvo Teravainen         Zemgus Girgensons        60     0   0  5  
 2 Anze Kopitar             Anders Lee               Chris Kreider            40     0   0  5  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Ryan Suter               Rasmus Ristolainen                                70     0   2  3  
 2 Mark Borowiecki          Michael Del Zotto                                 30     0   2  3  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Derek Grant              Chris Kreider            70     0   5  0  
 2 Teuvo Teravainen         Zemgus Girgensons        30     0   5  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Ryan Suter               Michael Del Zotto        50     0   5  0  
 2 Rasmus Ristolainen       Jack Johnson             50     0   5  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Chris Kreider                                     60     0   5  0  
 2 Derek Grant                                       40     0   5  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Ryan Suter               Michael Del Zotto        50     0   5  0  
 2 Mark Borowiecki          Rasmus Ristolainen       50     0   5  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Zemgus Girgensons        Teuvo Teravainen         60     0   2  3  
 2 Derek Grant              Chris Kreider            40     0   2  3  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Ryan Suter               Rasmus Ristolainen       65     0   4  1  
 2 Michael Del Zotto        Mark Borowiecki          35     0   4  1  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Anze Kopitar             Chris Kreider            Sidney Crosby            Ryan Suter               Rasmus Ristolainen       

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Anze Kopitar             Derek Grant              Sidney Crosby            Ryan Suter               Mark Borowiecki          

<b>Goaltenders</b>
Starting : Thomas Greiss            
Backup : Ken Appleby              

<b>Extra Forwards</b>
Normal : Chris Kreider, Teuvo Teravainen, Anders Lee - PP : Zemgus Girgensons, Derek Grant - PK : Chris Kreider
<b>Extra Defensemen</b>
Normal : Ryan Suter, Rasmus Ristolainen, Michael Del Zotto - PP : Ryan Suter - PK : Rasmus Ristolainen, Ryan Suter
<b>Penalty Shots</b>
Chris Kreider, Anders Lee, Zemgus Girgensons, Derek Grant, Teuvo Teravainen
<b>Custom OT Lines Forwards</b>
Sidney Crosby, Anze Kopitar, Carter Verhaeghe, Chris Kreider, Teuvo Teravainen, Anders Lee, Derek Grant, Zemgus Girgensons, Cody Eakin, Trevor Moore
<b>Custom OT Lines Defensemen</b>
Ryan Suter, Rasmus Ristolainen, Jack Johnson, Mark Borowiecki, Michael Del Zotto

<b>Scratches</b>
Ilya Lyubushkin (Healthy), Dakota Mermis (Healthy), Tage Thompson (Healthy), Chris Terry (Healthy), Cole Schneider (Healthy)</pre></div>
<h1 class="TeamLinesPro_OTT"><a id="Senators">Senators</a></h1>
<b>Lines are Complete</b><br />
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
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Jason Spezza             Pavel Buchnevich         Gustav Nyquist           35     0   2  3  
 2 J.T. Compher             Patrick Marleau          Brett Connolly           35     0   2  3  
 3 Joel Kellman             Artem Anisimov           Michael Bunting          20     1   3  1  
 4 Blaine Byron             Patrick Marleau          Jordan Nolan             10     2   3  0  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Mark Giordano            Will Butcher                                      35     0   3  2  
 2 Jan Rutta                Radim Simek                                       35     0   3  2  
 3 Dylan McIlrath           Jordan Gross                                      20     2   3  0  
 4 Mark Giordano            Will Butcher                                      10     1   4  0  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Jason Spezza             Pavel Buchnevich         Gustav Nyquist           60     0   1  4  
 2 J.T. Compher             James Neal               Michael Bunting          40     0   2  3  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Mark Giordano            Will Butcher                                      60     0   2  3  
 2 Jan Rutta                Radim Simek                                       40     0   3  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Gustav Nyquist           Pavel Buchnevich         55     2   3  0  
 2 Jason Spezza             Patrick Marleau          45     2   3  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Mark Giordano            Will Butcher             55     1   4  0  
 2 Jan Rutta                Radim Simek              45     1   4  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Gustav Nyquist                                    50     1   4  0  
 2 Jason Spezza                                      50     1   4  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Mark Giordano            Will Butcher             50     1   4  0  
 2 Jan Rutta                Radim Simek              50     1   4  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Gustav Nyquist           Pavel Buchnevich         50     1   2  2  
 2 Jason Spezza             Patrick Marleau          50     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Mark Giordano            Will Butcher             60     1   2  2  
 2 Jan Rutta                Radim Simek              40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Jason Spezza             Pavel Buchnevich         Gustav Nyquist           Mark Giordano            Will Butcher             

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Blaine Byron             Jordan Nolan             J.T. Compher             Mark Giordano            Will Butcher             

<b>Goaltenders</b>
Starting : Max Lagace               
Backup : Jake Allen               

<b>Extra Forwards</b>
Normal : Patrick Marleau, Artem Anisimov, James Neal - PP : Patrick Marleau, Artem Anisimov - PK : Patrick Marleau
<b>Extra Defensemen</b>
Normal : Radim Simek, Dylan McIlrath, Jordan Gross - PP : Radim Simek - PK : Radim Simek, Dylan McIlrath
<b>Penalty Shots</b>
Pavel Buchnevich, Gustav Nyquist, Jason Spezza, J.T. Compher, Patrick Marleau
<b>Custom OT Lines Forwards</b>
Pavel Buchnevich, Gustav Nyquist, Jason Spezza, J.T. Compher, Patrick Marleau, Artem Anisimov, James Neal, Michael Bunting, Brett Connolly, Joel Kellman
<b>Custom OT Lines Defensemen</b>
Mark Giordano, Will Butcher, Jan Rutta, Radim Simek, Dylan McIlrath

<b>Scratches</b>
Devin Shore (Healthy)</pre></div>
<h1 class="TeamLinesPro_SJS"><a id="Sharks">Sharks</a></h1>
<b>Lines are Complete</b><br />
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
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Aleksander Barkov        Filip Forsberg           Oliver Wahlstrom         40     1   2  2  
 2 Evgeny Kuznetsov         Warren Foegele           Nic Petan                30     1   2  2  
 3 Mattias Janmark          Jakub Vrana              Garnet Hathaway          20     1   2  2  
 4 Joe Thornton             Robert Thomas            Mats Zuccarello          10     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Kris Letang              Joel Edmundson                                    40     1   2  2  
 2 Jared Spurgeon           Mario Ferraro                                     30     1   2  2  
 3 T.J. Brodie              Gustav Forsling                                   20     1   2  2  
 4 Joel Edmundson           Jared Spurgeon                                    10     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Aleksander Barkov        Jakub Vrana              Filip Forsberg           60     1   2  2  
 2 Evgeny Kuznetsov         Oliver Wahlstrom         Warren Foegele           40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Mario Ferraro            Jared Spurgeon                                    60     1   2  2  
 2 Joel Edmundson           T.J. Brodie                                       40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Aleksander Barkov        Filip Forsberg           60     1   2  2  
 2 Evgeny Kuznetsov         Oliver Wahlstrom         40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Mario Ferraro            Jared Spurgeon           60     1   2  2  
 2 Kris Letang              Joel Edmundson           40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Evgeny Kuznetsov                                  60     1   2  2  
 2 Aleksander Barkov                                 40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Joel Edmundson           Jared Spurgeon           60     1   2  2  
 2 Mario Ferraro            Kris Letang              40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Evgeny Kuznetsov         Oliver Wahlstrom         60     1   2  2  
 2 Filip Forsberg           Aleksander Barkov        40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Mario Ferraro            Jared Spurgeon           60     1   2  2  
 2 Kris Letang              Joel Edmundson           40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Aleksander Barkov        Filip Forsberg           Oliver Wahlstrom         Joel Edmundson           Jared Spurgeon           

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Evgeny Kuznetsov         Jakub Vrana              Warren Foegele           Joel Edmundson           Jared Spurgeon           

<b>Goaltenders</b>
Starting : Laurent Brossoit         
Backup : Eric Comrie              

<b>Extra Forwards</b>
Normal : Filip Forsberg, Aleksander Barkov, Evgeny Kuznetsov - PP : Aleksander Barkov, Evgeny Kuznetsov - PK : Aleksander Barkov
<b>Extra Defensemen</b>
Normal : Joel Edmundson, Mario Ferraro, Jared Spurgeon - PP : Jared Spurgeon - PK : Mario Ferraro, Jared Spurgeon
<b>Penalty Shots</b>
Warren Foegele, Filip Forsberg, Evgeny Kuznetsov, Oliver Wahlstrom, Aleksander Barkov
<b>Custom OT Lines Forwards</b>
Mats Zuccarello, Warren Foegele, Filip Forsberg, Oliver Wahlstrom, Jakub Vrana, Joe Thornton, Aleksander Barkov, Mattias Janmark, Evgeny Kuznetsov, Garnet Hathaway
<b>Custom OT Lines Defensemen</b>
Joel Edmundson, Jared Spurgeon, Mario Ferraro, Gustav Forsling, Kris Letang

<b>Scratches</b>
Adam Helewka (Healthy), Zack Kassian (Healthy), Stuart Skinner (Healthy)</pre></div>
<h1 class="TeamLinesPro_DAL"><a id="Stars">Stars</a></h1>
<b>Lines are Complete</b><br />
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
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Patrice Bergeron         Max Pacioretty           Patrick Kane             34     0   1  4  
 2 Jeff Carter              Jonathan Marchessault    Anthony Mantha           29     0   1  4  
 3 Johan Larsson            Colton Sceviour          Josh Archibald           25     0   3  2  
 4 Curtis Lazar             Nicolas Deslauriers      Jayson Megna             12     1   3  1  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Ryan Ellis               Brandon Montour                                   40     0   2  3  
 2 Nikita Zadorov           Radko Gudas                                       38     0   4  1  
 3 Jordie Benn              Ben Harpur                                        14     1   3  1  
 4 Nikita Zadorov           Ryan Ellis                                        8      1   4  0  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Patrice Bergeron         Max Pacioretty           Patrick Kane             65     0   0  5  
 2 Jeff Carter              Josh Archibald           Anthony Mantha           35     0   0  5  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Ryan Ellis               Jonathan Marchessault                             75     0   0  5  
 2 Radko Gudas              Nikita Zadorov                                    25     0   0  5  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Johan Larsson            Colton Sceviour          60     1   4  0  
 2 Curtis Lazar             Josh Archibald           40     1   4  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Ryan Ellis               Radko Gudas              60     1   4  0  
 2 Nikita Zadorov           Brandon Montour          40     1   4  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Johan Larsson                                     60     1   4  0  
 2 Curtis Lazar                                      40     1   4  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Nikita Zadorov           Brandon Montour          60     1   4  0  
 2 Jordie Benn              Ben Harpur               40     1   4  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Patrice Bergeron         Patrick Kane             60     1   2  2  
 2 Johan Larsson            Anthony Mantha           40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Jordie Benn              Ben Harpur               52     1   2  2  
 2 Ryan Ellis               Brandon Montour          48     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Patrice Bergeron         Max Pacioretty           Patrick Kane             Ryan Ellis               Nikita Zadorov           

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Johan Larsson            Colton Sceviour          Josh Archibald           Ryan Ellis               Radko Gudas              

<b>Goaltenders</b>
Starting : Jonathan Quick           
Backup : Cam Talbot               

<b>Extra Forwards</b>
Normal : Anthony Mantha, Jonathan Marchessault, Patrick Kane - PP : Josh Archibald, Colton Sceviour - PK : Patrice Bergeron
<b>Extra Defensemen</b>
Normal : Ryan Ellis, Radko Gudas, Jordie Benn - PP : Radko Gudas - PK : Ryan Ellis, Radko Gudas
<b>Penalty Shots</b>
Patrick Kane, Anthony Mantha, Jeff Carter, Brandon Montour, Jayson Megna
<b>Custom OT Lines Forwards</b>
Patrice Bergeron, Patrick Kane, Jeff Carter, Jonathan Marchessault, Max Pacioretty, Anthony Mantha, Colton Sceviour, Johan Larsson, Curtis Lazar, Josh Archibald
<b>Custom OT Lines Defensemen</b>
Ryan Ellis, Brandon Montour, Jordie Benn, Nikita Zadorov, Radko Gudas

<b>Scratches</b>
None
</pre></div>
<h1 class="TeamLinesPro_MIN"><a id="Wild">Wild</a></h1>
<b>Lines are Complete</b><br />
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
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Sam Carrick              Conor Garland            Victor Olofsson          27     0   2  3  
 2 Brandon Pirri            Tim Stutzle              Marcus Foligno           27     0   2  3  
 3 Connor Bunnaman          Alex Formenton           Sam Lafferty             27     0   3  2  
 4 Adam Brooks              Rocco Grimaldi           Ondrej Kase              19     0   3  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Adam Fox                 Tyler Myers                                       30     0   4  1  
 2 Mikhail Sergachev        Tyson Barrie                                      30     0   4  1  
 3 Marc Staal               Conor Timmins                                     30     0   4  1  
 4 Adam Fox                 Tyler Myers                                       10     0   4  1  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Sam Carrick              Conor Garland            Victor Olofsson          50     0   0  5  
 2 Brandon Pirri            Tim Stutzle              Marcus Foligno           50     0   0  5  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Adam Fox                 Tyson Barrie                                      50     0   1  4  
 2 Mikhail Sergachev        Tyler Myers                                       50     0   1  4  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Connor Bunnaman          Alex Formenton           50     0   5  0  
 2 Sam Lafferty             Marcus Foligno           50     0   5  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Adam Fox                 Tyler Myers              50     0   5  0  
 2 Marc Staal               Conor Timmins            50     0   5  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Alex Formenton                                    50     0   5  0  
 2 Marcus Foligno                                    50     0   5  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Adam Fox                 Tyler Myers              50     0   5  0  
 2 Marc Staal               Conor Timmins            50     0   5  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Marcus Foligno           Conor Garland            50     0   2  3  
 2 Tim Stutzle              Victor Olofsson          50     0   2  3  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Adam Fox                 Tyler Myers              50     0   4  1  
 2 Mikhail Sergachev        Tyson Barrie             50     0   4  1  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Brandon Pirri            Conor Garland            Victor Olofsson          Adam Fox                 Tyson Barrie             

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Connor Bunnaman          Alex Formenton           Marcus Foligno           Adam Fox                 Tyler Myers              

<b>Goaltenders</b>
Starting : Jonathan Bernier         
Backup : Malcolm Subban           

<b>Extra Forwards</b>
Normal : Tim Stutzle, Alex Formenton, Victor Olofsson - PP : Rocco Grimaldi, Alex Formenton - PK : Brandon Pirri
<b>Extra Defensemen</b>
Normal : Tyson Barrie, Marc Staal, Adam Fox - PP : Marc Staal - PK : Mikhail Sergachev, Tyson Barrie
<b>Penalty Shots</b>
Conor Garland, Marcus Foligno, Brandon Pirri, Victor Olofsson, Tim Stutzle
<b>Custom OT Lines Forwards</b>
Conor Garland, Marcus Foligno, Adam Brooks, Victor Olofsson, Tim Stutzle, Alex Formenton, Sam Carrick, Rocco Grimaldi, Brandon Pirri, Ondrej Kase
<b>Custom OT Lines Defensemen</b>
Adam Fox, Tyler Myers, Mikhail Sergachev, Tyson Barrie, Marc Staal

<b>Scratches</b>
Steven Kampfer (Healthy), Matt Duchene (Healthy)</pre></div>
<?php include "Footer.php";?>
