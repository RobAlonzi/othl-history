<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<title>OTHL - Pro Team Lines</title>
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
<div class="STHSTopLink"><a id="STHSRosterTop"></a> <a href="#Avalanche">Avalanche</a> | <a href="#Blackhawks">Blackhawks</a> | <a href="#BlueJackets">Blue Jackets</a> | <a href="#Blues">Blues</a> | <a href="#Bruins">Bruins</a> | <a href="#Canadiens">Canadiens</a> | <a href="#Canucks">Canucks</a> | <a href="#Capitals">Capitals</a> | <a href="#Coyotes">Coyotes</a> | <a href="#Devils">Devils</a> | <a href="#Ducks">Ducks</a> | <a href="#Flames">Flames</a> | <a href="#Flyers">Flyers</a> | <a href="#GoldenKnights">Golden Knights</a> | <a href="#Hurricanes">Hurricanes</a> | <a href="#Islanders">Islanders</a> | <a href="#Jets">Jets</a> | <a href="#Kings">Kings</a> | <a href="#Kraken">Kraken</a> | <a href="#Lightning">Lightning</a> | <a href="#MapleLeafs">Maple Leafs</a> | <a href="#Oilers">Oilers</a> | <a href="#Panthers">Panthers</a> | <a href="#Penguins">Penguins</a> | <a href="#Predators">Predators</a> | <a href="#Rangers">Rangers</a> | <a href="#RedWings">Red Wings</a> | <a href="#Sabres">Sabres</a> | <a href="#Senators">Senators</a> | <a href="#Sharks">Sharks</a> | <a href="#Stars">Stars</a> | <a href="#Wild">Wild</a> | <a href="javascript:STHS_JS_CloseAll('');">Close All Team View</a> | <a href="javascript:STHS_JS_OpenAll('');">Open All Team View</a>
</div>
<h1 class="TeamLinesPro_COL"><a id="Avalanche">Avalanche</a></h1>
<b>Lines are Incomplete</b><br />
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
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Mike Vecchione           Richard Panik            Unknown Player           40     1   2  2  
 2 Unknown Player           Brock McGinn             Matt Martin              30     1   2  2  
 3 Lucas Wallmark           Unknown Player           Chris Mueller            20     1   2  2  
 4 Michael Sgarbossa        J.T. Miller              Travis Boyd              10     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Hampus Lindholm          Brett Pesce                                       40     1   2  2  
 2 Brandon Carlo            Unknown Player                                    30     1   2  2  
 3 John Moore               Jonas Siegenthaler                                20     1   2  2  
 4 Hampus Lindholm          John Moore                                        10     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Lucas Wallmark           Richard Panik            Michael Sgarbossa        60     1   2  2  
 2 Unknown Player           Brock McGinn             Matt Martin              40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Hampus Lindholm          John Moore                                        60     1   2  2  
 2 Brett Pesce              Unknown Player                                    40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Richard Panik            Unknown Player           60     1   2  2  
 2 Unknown Player           Lucas Wallmark           40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Hampus Lindholm          Brett Pesce              60     1   2  2  
 2 John Moore               Unknown Player           40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Unknown Player                                    60     1   2  2  
 2 Richard Panik                                     40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Hampus Lindholm          Brett Pesce              60     1   2  2  
 2 John Moore               Unknown Player           40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Richard Panik            Unknown Player           60     1   2  2  
 2 Unknown Player           Lucas Wallmark           40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Hampus Lindholm          John Moore               60     1   2  2  
 2 Brett Pesce              Unknown Player           40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Mike Vecchione           Richard Panik            Unknown Player           Hampus Lindholm          Brett Pesce              

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Mike Vecchione           Richard Panik            Unknown Player           Hampus Lindholm          Brett Pesce              

<b>Goaltenders</b>
Starting : Unknown Goalie           
Backup : Unknown Goalie           

<b>Extra Forwards</b>
Normal : Unknown Player, Michael Sgarbossa, Chris Mueller - PP : Unknown Player, Michael Sgarbossa - PK : Chris Mueller
<b>Extra Defensemen</b>
Normal : John Moore, Brett Pesce, Unknown Player - PP : John Moore - PK : John Moore, Unknown Player
<b>Penalty Shots</b>
Michael Sgarbossa, Chris Mueller, Unknown Player, Lucas Wallmark, Richard Panik
<b>Custom OT Lines Forwards</b>
Mike Vecchione, Unknown Player, Unknown Player, Lucas Wallmark, Richard Panik, Brock McGinn, Matt Martin, Unknown Player, Michael Sgarbossa, Chris Mueller
<b>Custom OT Lines Defensemen</b>
Jonas Siegenthaler, Brandon Carlo, Brett Pesce, Unknown Player, John Moore

<b>Scratches</b>
Andreas Englund (Healthy), Carson Soucy (Healthy), Aaron Dell (Healthy), Chris Driedger (Healthy)</pre></div>
<h1 class="TeamLinesPro_CHI"><a id="Blackhawks">Blackhawks</a></h1>
<b>Lines are Incomplete</b><br />
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
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Sebastian Aho            Tomas Tatar              Mark Stone               38     0   1  4  
 2 Evgeni Malkin            Carl Hagelin             Erik Haula               26     1   2  2  
 3 Tyler Johnson            Max Comtois              Vladislav Namestnikov    26     1   2  2  
 4 David Kampf              Kevin Rooney             Alex Chiasson            10     0   5  0  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Justin Faulk             Justin Holl                                       38     1   2  2  
 2 Zach Werenski            Justin Braun                                      37     1   2  2  
 3 Jordan Oesterle          Dylan DeMelo                                      15     1   2  2  
 4 Zach Werenski            Justin Faulk                                      10     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Evgeni Malkin            Sebastian Aho            Unknown Player           81     0   0  5  
 2 Unknown Player           Tyler Johnson            Unknown Player           19     0   0  5  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Zach Werenski            Justin Faulk                                      79     0   0  5  
 2 Justin Faulk             Unknown Player                                    21     0   0  5  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           60     0   5  0  
 2 David Kampf              Carl Hagelin             40     0   5  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Justin Faulk             Dylan DeMelo             60     0   5  0  
 2 Justin Holl              Unknown Player           40     0   5  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Unknown Player                                    60     0   5  0  
 2 Sebastian Aho                                     40     0   4  1  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Justin Faulk             Dylan DeMelo             60     0   5  0  
 2 Justin Holl              Unknown Player           40     0   5  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Sebastian Aho            Unknown Player           60     1   2  2  
 2 Evgeni Malkin            Unknown Player           40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Zach Werenski            Justin Faulk             60     1   2  2  
 2 Unknown Player           Dylan DeMelo             40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Evgeni Malkin            Unknown Player           Unknown Player           Zach Werenski            Justin Faulk             

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Sebastian Aho            Carl Hagelin             David Kampf              Unknown Player           Dylan DeMelo             

<b>Goaltenders</b>
Starting : Unknown Goalie           
Backup : Igor Shesterkin          

<b>Extra Forwards</b>
Normal : Vladislav Namestnikov, Tyler Johnson, David Kampf - PP : Vladislav Namestnikov, Carl Hagelin - PK : Unknown Player
<b>Extra Defensemen</b>
Normal : Dylan DeMelo, Zach Werenski, Justin Faulk - PP : Dylan DeMelo - PK : Unknown Player, Zach Werenski
<b>Penalty Shots</b>
Unknown Player, Unknown Player, Evgeni Malkin, Justin Holl, Unknown Player
<b>Custom OT Lines Forwards</b>
Evgeni Malkin, Unknown Player, Unknown Player, Unknown Player, Erik Haula, Vladislav Namestnikov, Tyler Johnson, Carl Hagelin, Unknown Player, Unknown Player
<b>Custom OT Lines Defensemen</b>
Justin Faulk, Zach Werenski, Unknown Player, Unknown Player, Dylan DeMelo

<b>Scratches</b>
Connor Mackey (Healthy), Andy Greene (Healthy)</pre></div>
<h1 class="TeamLinesPro_CLB"><a id="BlueJackets">Blue Jackets</a></h1>
<b>Lines are Complete</b><br />
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
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Joe Pavelski             Andrew Copp              Anthony Duclair          35     0   0  5  
 2 Elias Pettersson         Miles Wood               T.J. Oshie               30     0   0  5  
 3 Zach Sanford             Alexander Kerfoot        Kyle Palmieri            20     0   2  3  
 4 Frederick Gaudreau       Tomas Nosek              Vinnie Hinostroza        15     0   2  3  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Erik Johnson             Quinn Hughes                                      40     0   1  4  
 2 Jason Demers             Anton Stralman                                    30     1   2  2  
 3 Danny DeKeyser           Philippe Myers                                    20     1   2  2  
 4 Danny DeKeyser           Philippe Myers                                    10     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Joe Pavelski             Alexander Kerfoot        Anthony Duclair          60     0   0  5  
 2 Elias Pettersson         Miles Wood               Vinnie Hinostroza        40     0   0  5  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Erik Johnson             Quinn Hughes                                      60     0   1  4  
 2 Danny DeKeyser           Anton Stralman                                    40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Frederick Gaudreau       Zach Sanford             60     1   2  2  
 2 Vinnie Hinostroza        Alexander Kerfoot        40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Anton Stralman           Erik Johnson             60     1   2  2  
 2 Jason Demers             Danny DeKeyser           40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Frederick Gaudreau                                60     1   2  2  
 2 Anthony Duclair                                   40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Danny DeKeyser           Philippe Myers           60     1   2  2  
 2 Anton Stralman           Erik Johnson             40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Andrew Copp              T.J. Oshie               60     1   2  2  
 2 Elias Pettersson         Joe Pavelski             40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Quinn Hughes             Anton Stralman           60     1   2  2  
 2 Erik Johnson             Danny DeKeyser           40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Andrew Copp              Joe Pavelski             Anthony Duclair          Quinn Hughes             Erik Johnson             

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Elias Pettersson         Joe Pavelski             Anthony Duclair          Anton Stralman           Erik Johnson             

<b>Goaltenders</b>
Starting : Thatcher Demko           
Backup : Sergei Bobrovsky         

<b>Extra Forwards</b>
Normal : Anthony Duclair, Alexander Kerfoot, Zach Sanford - PP : Anthony Duclair, Alexander Kerfoot - PK : Zach Sanford
<b>Extra Defensemen</b>
Normal : Quinn Hughes, Anton Stralman, Philippe Myers - PP : Quinn Hughes - PK : Quinn Hughes, Anton Stralman
<b>Penalty Shots</b>
Anthony Duclair, T.J. Oshie, Vinnie Hinostroza, Elias Pettersson, Joe Pavelski
<b>Custom OT Lines Forwards</b>
Elias Pettersson, Joe Pavelski, Anthony Duclair, T.J. Oshie, Alexander Kerfoot, Miles Wood, Andrew Copp, Zach Sanford, Vinnie Hinostroza, Kyle Palmieri
<b>Custom OT Lines Defensemen</b>
Quinn Hughes, Philippe Myers, Danny DeKeyser, Jason Demers, Anton Stralman

<b>Scratches</b>
Dylan Gambrell (Healthy), Nicolas Aube-Kubel (Healthy)</pre></div>
<h1 class="TeamLinesPro_STL"><a id="Blues">Blues</a></h1>
<b>Lines are Incomplete</b><br />
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
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Janne Kuokkanen          Denis Gurianov           Vladimir Tarasenko       35     0   0  5  
 2 Jean-Sebastien Dea       Sammy Blais              Brendan Lemieux          30     0   0  5  
 3 Alexandre Texier         Antoine Roussel          Unknown Player           20     3   2  0  
 4 Pierre-Edouard Bellemare Unknown Player           Unknown Player           15     3   2  0  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Samuel Girard            Unknown Player                                    35     3   0  2  
 2 Unknown Player           David Savard                                      35     2   3  0  
 3 Unknown Player           Unknown Player                                    20     2   3  0  
 4 Samuel Girard            Unknown Player                                    10     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Janne Kuokkanen          Denis Gurianov           Vladimir Tarasenko       60     0   0  5  
 2 Alexandre Texier         Antoine Roussel          Sammy Blais              40     0   0  5  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Samuel Girard            David Savard                                      65     0   0  5  
 2 Unknown Player           Unknown Player                                    35     0   0  5  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Pierre-Edouard Bellemare Unknown Player           60     1   4  0  
 2 Alexandre Texier         Sammy Blais              40     1   4  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Samuel Girard            Unknown Player           60     1   4  0  
 2 David Savard             Unknown Player           40     1   4  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Alexandre Texier                                  60     0   5  0  
 2 Antoine Roussel                                   40     0   5  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Samuel Girard            Unknown Player           60     1   4  0  
 2 David Savard             Unknown Player           40     1   4  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Janne Kuokkanen          Sammy Blais              60     1   2  2  
 2 Alexandre Texier         Vladimir Tarasenko       40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Samuel Girard            Unknown Player           60     1   2  2  
 2 David Savard             Unknown Player           40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Alexandre Texier         Sammy Blais              Vladimir Tarasenko       Samuel Girard            Unknown Player           

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Alexandre Texier         Sammy Blais              Vladimir Tarasenko       Samuel Girard            Unknown Player           

<b>Goaltenders</b>
Starting : Vitek Vanecek            
Backup : Antti Raanta             

<b>Extra Forwards</b>
Normal : Unknown Player, Pierre-Edouard Bellemare, Sammy Blais - PP : Unknown Player, Pierre-Edouard Bellemare - PK : Unknown Player
<b>Extra Defensemen</b>
Normal : Unknown Player, Unknown Player, Unknown Player - PP : Unknown Player - PK : Unknown Player, Unknown Player
<b>Penalty Shots</b>
Brendan Lemieux, Vladimir Tarasenko, Alexandre Texier, Denis Gurianov, Unknown Player
<b>Custom OT Lines Forwards</b>
Sammy Blais, Vladimir Tarasenko, Alexandre Texier, Unknown Player, Unknown Player, Pierre-Edouard Bellemare, Jean-Sebastien Dea, Denis Gurianov, Antoine Roussel, Janne Kuokkanen
<b>Custom OT Lines Defensemen</b>
Samuel Girard, Unknown Player, David Savard, Unknown Player, Unknown Player

<b>Scratches</b>
Adam Boqvist (Healthy), Josh Currie (Healthy), Travis Konecny (Healthy), Jonathan Drouin (Healthy), Mikael Backlund (Healthy)
Justin Schultz (Healthy)</pre></div>
<h1 class="TeamLinesPro_BOS"><a id="Bruins">Bruins</a></h1>
<b>Lines are Complete</b><br />
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
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Sean Couturier           Brad Marchand            Lawson Crouse            35     0   3  2  
 2 Jean-Gabriel Pageau      Ondrej Palat             Blake Coleman            30     0   3  2  
 3 Jay Beagle               Chris Tierney            Paul Byron               25     0   3  2  
 4 Frederik Gauthier        Matthew Highmore         Trevor Lewis             10     0   3  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Brent Burns              Brayden McNabb                                    35     0   4  1  
 2 Nate Schmidt             Ben Chiarot                                       30     0   4  1  
 3 Ben Hutton               Ben Harpur                                        25     0   4  1  
 4 Brayden McNabb           Ben Chiarot                                       10     0   4  1  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Sean Couturier           Brad Marchand            Ondrej Palat             60     0   0  5  
 2 Jean-Gabriel Pageau      Chris Tierney            Blake Coleman            40     0   0  5  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Brent Burns              Brayden McNabb                                    60     0   0  5  
 2 Ben Hutton               Nate Schmidt                                      40     0   0  5  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Jay Beagle               Trevor Lewis             60     0   5  0  
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
   Jay Beagle               Chris Tierney            Trevor Lewis             Brent Burns              Brayden McNabb           

<b>Goaltenders</b>
Starting : Pavel Francouz           
Backup : Linus Ullmark            

<b>Extra Forwards</b>
Normal : Brad Marchand, Sean Couturier, Ondrej Palat - PP : Brad Marchand, Ondrej Palat - PK : Jay Beagle
<b>Extra Defensemen</b>
Normal : Brent Burns, Brayden McNabb, Ben Chiarot - PP : Brent Burns - PK : Brent Burns, Brayden McNabb
<b>Penalty Shots</b>
Brad Marchand, Sean Couturier, Ondrej Palat, Jean-Gabriel Pageau, Blake Coleman
<b>Custom OT Lines Forwards</b>
Sean Couturier, Brad Marchand, Jean-Gabriel Pageau, Ondrej Palat, Chris Tierney, Blake Coleman, Paul Byron, Lawson Crouse, Matthew Highmore, Jay Beagle
<b>Custom OT Lines Defensemen</b>
Brent Burns, Brayden McNabb, Nate Schmidt, Ben Chiarot, Ben Hutton

<b>Scratches</b>
Drake Caggiula (Healthy), Jalen Chatfield (Healthy)</pre></div>
<h1 class="TeamLinesPro_MTL"><a id="Canadiens">Canadiens</a></h1>
<b>Lines are Incomplete</b><br />
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
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Mark Scheifele           Alex DeBrincat           Nikolaj Ehlers           29     1   1  3  
 2 Unknown Player           Clayton Keller           Brandon Tanev            29     1   1  3  
 3 Isac Lundestrom          Daniel Sprong            Dillon Dube              25     1   3  1  
 4 Henrik Borgstrom         Kyle Rau                 Unknown Player           17     1   3  1  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Ivan Provorov            Connor Murphy                                     27     1   2  2  
 2 Aaron Ekblad             Unknown Player                                    27     1   2  2  
 3 Tucker Poolman           Jacob MacDonald                                   26     1   3  1  
 4 Ivan Provorov            Aaron Ekblad                                      20     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Mark Scheifele           Alex DeBrincat           Nikolaj Ehlers           50     1   1  3  
 2 Unknown Player           Clayton Keller           Brandon Tanev            50     1   1  3  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Ivan Provorov            Aaron Ekblad                                      50     1   1  3  
 2 Unknown Player           Connor Murphy                                     50     1   1  3  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Henrik Borgstrom         Brandon Tanev            50     1   3  1  
 2 Kyle Rau                 Daniel Sprong            50     1   3  1  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Ivan Provorov            Connor Murphy            50     2   3  0  
 2 Aaron Ekblad             Unknown Player           50     2   3  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Brandon Tanev                                     50     1   3  1  
 2 Henrik Borgstrom                                  50     1   3  1  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Ivan Provorov            Connor Murphy            50     2   3  0  
 2 Aaron Ekblad             Unknown Player           50     2   3  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Mark Scheifele           Alex DeBrincat           50     1   1  3  
 2 Unknown Player           Nikolaj Ehlers           50     1   1  3  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Ivan Provorov            Connor Murphy            50     1   3  1  
 2 Aaron Ekblad             Unknown Player           50     1   3  1  

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
Mark Scheifele, Brandon Tanev, Dillon Dube, Unknown Player, Unknown Player
<b>Custom OT Lines Forwards</b>
Mark Scheifele, Alex DeBrincat, Nikolaj Ehlers, Clayton Keller, Brandon Tanev, Unknown Player, Daniel Sprong, Isac Lundestrom, Dillon Dube, Henrik Borgstrom
<b>Custom OT Lines Defensemen</b>
Ivan Provorov, Aaron Ekblad, Connor Murphy, Unknown Player, Tucker Poolman

<b>Scratches</b>
Ryan Getzlaf (Healthy), Madison Bowey (Healthy), Matt Tennyson (Healthy)</pre></div>
<h1 class="TeamLinesPro_VAN"><a id="Canucks">Canucks</a></h1>
<b>Lines are Incomplete</b><br />
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
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Auston Matthews          Kyle Connor              Nick Bonino              45     0   1  4  
 2 Nico Hischier            Unknown Player           Mikko Rantanen           35     0   1  4  
 3 Jason Dickinson          Unknown Player           Unknown Player           15     0   2  3  
 4 Unknown Player           Yanni Gourde             Ryan Carpenter           5      0   4  1  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Dougie Hamilton          Patrik Nemeth                                     48     0   3  2  
 2 Unknown Player           Nikita Zaitsev                                    35     0   3  2  
 3 Unknown Player           MacKenzie Weegar                                  17     0   4  1  
 4 Dougie Hamilton          Patrik Nemeth                                     0      0   3  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Auston Matthews          Kyle Connor              Mikko Rantanen           70     0   1  4  
 2 Nico Hischier            Unknown Player           Unknown Player           30     0   1  4  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Dougie Hamilton          Unknown Player                                    65     0   1  4  
 2 Patrik Nemeth            MacKenzie Weegar                                  35     0   1  4  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Nick Bonino              Jason Dickinson          70     0   4  1  
 2 Unknown Player           Ryan Carpenter           30     0   4  1  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Nikita Zaitsev           Patrik Nemeth            65     0   4  1  
 2 Unknown Player           MacKenzie Weegar         35     0   4  1  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Nick Bonino                                       60     0   5  0  
 2 Ryan Carpenter                                    40     0   5  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Nikita Zaitsev           Patrik Nemeth            60     0   5  0  
 2 Unknown Player           MacKenzie Weegar         40     0   5  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Auston Matthews          Kyle Connor              60     0   2  3  
 2 Nico Hischier            Mikko Rantanen           40     0   2  3  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Dougie Hamilton          Patrik Nemeth            60     0   4  1  
 2 Unknown Player           Nikita Zaitsev           40     0   4  1  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Auston Matthews          Kyle Connor              Mikko Rantanen           Unknown Player           Dougie Hamilton          

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Nick Bonino              Jason Dickinson          Ryan Carpenter           Nikita Zaitsev           Patrik Nemeth            

<b>Goaltenders</b>
Starting : Jacob Markstrom          
Backup : Unknown Goalie           

<b>Extra Forwards</b>
Normal : Nico Hischier, Unknown Player, Unknown Player - PP : Auston Matthews, Unknown Player - PK : Unknown Player
<b>Extra Defensemen</b>
Normal : Dougie Hamilton, Unknown Player, MacKenzie Weegar - PP : Unknown Player - PK : MacKenzie Weegar, Dougie Hamilton
<b>Penalty Shots</b>
Kyle Connor, Dougie Hamilton, Unknown Player, Mikko Rantanen, Nick Bonino
<b>Custom OT Lines Forwards</b>
Nick Bonino, Mikko Rantanen, Kyle Connor, Auston Matthews, Yanni Gourde, Unknown Player, Nico Hischier, Unknown Player, Unknown Player, Jason Dickinson
<b>Custom OT Lines Defensemen</b>
Dougie Hamilton, Patrik Nemeth, Unknown Player, Nikita Zaitsev, Unknown Player

<b>Scratches</b>
C.J. Suess (Healthy)</pre></div>
<h1 class="TeamLinesPro_WSH"><a id="Capitals">Capitals</a></h1>
<b>Lines are Incomplete</b><br />
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
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Jack Eichel              Alex Iafallo             Blake Lizotte            40     1   2  2  
 2 Sean Monahan             Rickard Rakell           Jake Virtanen            30     1   2  2  
 3 Pavel Zacha              Jujhar Khaira            Blake Comeau             20     1   2  2  
 4 Unknown Player           Michael Chaput           Chandler Stephenson      10     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Drew Doughty             Unknown Player                                    40     1   2  2  
 2 Dmitry Orlov             Sean Walker                                       30     1   2  2  
 3 Matt Roy                 Jacob Trouba                                      20     1   2  2  
 4 Drew Doughty             Unknown Player                                    10     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Jack Eichel              Alex Iafallo             Jujhar Khaira            60     1   2  2  
 2 Sean Monahan             Rickard Rakell           Blake Lizotte            40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Drew Doughty             Unknown Player                                    60     1   2  2  
 2 Dmitry Orlov             Sean Walker                                       40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Rickard Rakell           Blake Comeau             60     1   2  2  
 2 Jack Eichel              Jujhar Khaira            40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Drew Doughty             Unknown Player           60     1   2  2  
 2 Dmitry Orlov             Sean Walker              40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Rickard Rakell                                    60     1   2  2  
 2 Jack Eichel                                       40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Drew Doughty             Unknown Player           60     1   2  2  
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
   Jack Eichel              Rickard Rakell           Blake Lizotte            Drew Doughty             Unknown Player           

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Jack Eichel              Rickard Rakell           Blake Lizotte            Drew Doughty             Unknown Player           

<b>Goaltenders</b>
Starting : Petr Mrazek              
Backup : Unknown Goalie           

<b>Extra Forwards</b>
Normal : Jujhar Khaira, Alex Iafallo, Rickard Rakell - PP : Jujhar Khaira, Alex Iafallo - PK : Jack Eichel
<b>Extra Defensemen</b>
Normal : Matt Roy, Drew Doughty, Dmitry Orlov - PP : Matt Roy - PK : Drew Doughty, Dmitry Orlov
<b>Penalty Shots</b>
Jack Eichel, Jujhar Khaira, Sean Monahan, Alex Iafallo, Rickard Rakell
<b>Custom OT Lines Forwards</b>
Jack Eichel, Blake Lizotte, Sean Monahan, Rickard Rakell, Jujhar Khaira, Alex Iafallo, Pavel Zacha, Blake Comeau, Jake Virtanen, Chandler Stephenson
<b>Custom OT Lines Defensemen</b>
Drew Doughty, Unknown Player, Dmitry Orlov, Sean Walker, Matt Roy

<b>Scratches</b>
Joakim Ryan (Healthy), Gabriel Vilardi (Healthy), Josh Brown (Healthy)</pre></div>
<h1 class="TeamLinesPro_ARI"><a id="Coyotes">Coyotes</a></h1>
<b>Lines are Incomplete</b><br />
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
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           Jesper Fast              33     1   2  2  
 2 Leon Draisaitl           Cedric Paquette          William Nylander         33     1   2  2  
 3 Kevin Hayes              Unknown Player           Unknown Player           29     1   2  2  
 4 Nate Thompson            Unknown Player           Unknown Player           5      1   3  1  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Oliver Ekman-Larsson     Unknown Player                                    40     1   2  2  
 2 Cody Ceci                Ethan Bear                                        39     1   2  2  
 3 Unknown Player           Unknown Player                                    15     1   2  2  
 4 Oliver Ekman-Larsson     Unknown Player                                    6      1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Unknown Player           Leon Draisaitl           William Nylander         50     1   2  2  
 2 Kevin Hayes              Unknown Player           Unknown Player           50     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Oliver Ekman-Larsson     Unknown Player                                    60     1   2  2  
 2 Cody Ceci                Ethan Bear                                        40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Unknown Player           Jesper Fast              60     1   2  2  
 2 Kevin Hayes              Cedric Paquette          40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Oliver Ekman-Larsson     Ethan Bear               60     1   2  2  
 2 Unknown Player           Cody Ceci                40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Unknown Player                                    60     1   2  2  
 2 Kevin Hayes                                       40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Oliver Ekman-Larsson     Ethan Bear               60     1   2  2  
 2 Unknown Player           Cody Ceci                40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Leon Draisaitl           Unknown Player           60     1   2  2  
 2 Unknown Player           William Nylander         40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Oliver Ekman-Larsson     Cody Ceci                60     1   2  2  
 2 Ethan Bear               Unknown Player           40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Unknown Player           Leon Draisaitl           Unknown Player           Oliver Ekman-Larsson     Unknown Player           

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Unknown Player           Kevin Hayes              Leon Draisaitl           Oliver Ekman-Larsson     Cody Ceci                

<b>Goaltenders</b>
Starting : Tuukka Rask              
Backup : Kaapo Kahkonen           

<b>Extra Forwards</b>
Normal : Unknown Player, Leon Draisaitl, Kevin Hayes - PP : William Nylander, Leon Draisaitl - PK : Kevin Hayes
<b>Extra Defensemen</b>
Normal : Oliver Ekman-Larsson, Unknown Player, Cody Ceci - PP : Unknown Player - PK : Ethan Bear, Cody Ceci
<b>Penalty Shots</b>
Unknown Player, Leon Draisaitl, Unknown Player, Kevin Hayes, William Nylander
<b>Custom OT Lines Forwards</b>
Leon Draisaitl, Unknown Player, William Nylander, Unknown Player, Kevin Hayes, Unknown Player, Unknown Player, Unknown Player, Jesper Fast, Cedric Paquette
<b>Custom OT Lines Defensemen</b>
Oliver Ekman-Larsson, Unknown Player, Unknown Player, Cody Ceci, Ethan Bear

<b>Scratches</b>
Oskar Sundqvist (Healthy), Pierre-Luc Dubois (Healthy), Thomas Chabot (Healthy), Wayne Simmonds (Healthy), Nikita Kucherov (Healthy)
Slater Koekkoek (Healthy)</pre></div>
<h1 class="TeamLinesPro_NJD"><a id="Devils">Devils</a></h1>
<b>Lines are Complete</b><br />
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
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Jonathan Toews           Kirby Dach               Patric Hornqvist         40     1   2  2  
 2 William Karlsson         Timo Meier               Corey Perry              30     1   2  2  
 3 Brandon Sutter           Nick Ritchie             Gemel Smith              20     1   2  2  
 4 Radim Zohorna            Jimmy Vesey              Anders Bjork             10     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Darnell Nurse            Adam Larsson                                      40     1   2  2  
 2 Chris Tanev              Mattias Ekholm                                    30     1   2  2  
 3 Matt Irwin               Niko Mikkola                                      20     1   2  2  
 4 Darnell Nurse            Adam Larsson                                      10     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Jonathan Toews           Kirby Dach               Patric Hornqvist         60     1   2  2  
 2 William Karlsson         Timo Meier               Corey Perry              40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Darnell Nurse            Adam Larsson                                      60     1   2  2  
 2 Chris Tanev              Mattias Ekholm                                    40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Jonathan Toews           William Karlsson         60     1   2  2  
 2 Patric Hornqvist         Kirby Dach               40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Darnell Nurse            Adam Larsson             60     1   2  2  
 2 Chris Tanev              Mattias Ekholm           40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Jonathan Toews                                    60     1   2  2  
 2 William Karlsson                                  40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Darnell Nurse            Adam Larsson             60     1   2  2  
 2 Chris Tanev              Mattias Ekholm           40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Jonathan Toews           William Karlsson         60     1   2  2  
 2 Patric Hornqvist         Kirby Dach               40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Darnell Nurse            Adam Larsson             60     1   2  2  
 2 Chris Tanev              Mattias Ekholm           40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Jonathan Toews           Kirby Dach               Patric Hornqvist         Darnell Nurse            Adam Larsson             

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Jonathan Toews           Kirby Dach               Patric Hornqvist         Darnell Nurse            Adam Larsson             

<b>Goaltenders</b>
Starting : Robin Lehner             
Backup : Keith Kinkaid            

<b>Extra Forwards</b>
Normal : Brandon Sutter, Nick Ritchie, Gemel Smith - PP : Brandon Sutter, Nick Ritchie - PK : Gemel Smith
<b>Extra Defensemen</b>
Normal : Matt Irwin, Niko Mikkola, Chris Tanev - PP : Matt Irwin - PK : Niko Mikkola, Chris Tanev
<b>Penalty Shots</b>
Jonathan Toews, William Karlsson, Patric Hornqvist, Kirby Dach, Timo Meier
<b>Custom OT Lines Forwards</b>
Jonathan Toews, William Karlsson, Patric Hornqvist, Kirby Dach, Timo Meier, Brandon Sutter, Nick Ritchie, Corey Perry, Gemel Smith, Jimmy Vesey
<b>Custom OT Lines Defensemen</b>
Darnell Nurse, Adam Larsson, Chris Tanev, Mattias Ekholm, Matt Irwin

<b>Scratches</b>
Michal Kempny (Healthy), Mason Marchment (Healthy)</pre></div>
<h1 class="TeamLinesPro_ANH"><a id="Ducks">Ducks</a></h1>
<b>Lines are Incomplete</b><br />
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
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Unknown Player           Artemi Panarin           Unknown Player           40     0   2  3  
 2 Nazem Kadri              Johnny Gaudreau          Zach Hyman               30     1   2  2  
 3 Unknown Player           Unknown Player           Unknown Player           24     1   2  2  
 4 Unknown Player           Unknown Player           Jordan Kyrou             6      1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Jake Muzzin              Morgan Rielly                                     40     1   2  2  
 2 Unknown Player           Alec Martinez                                     30     1   2  2  
 3 Josh Morrissey           Unknown Player                                    20     1   2  2  
 4 Jake Muzzin              Morgan Rielly                                     10     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Unknown Player           Artemi Panarin           Unknown Player           60     0   1  4  
 2 Nazem Kadri              Johnny Gaudreau          Zach Hyman               40     0   1  4  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Jake Muzzin              Morgan Rielly                                     60     0   1  4  
 2 Unknown Player           Alec Martinez                                     40     0   1  4  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           60     1   4  0  
 2 Unknown Player           Unknown Player           40     1   4  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Jake Muzzin              Morgan Rielly            60     1   4  0  
 2 Unknown Player           Alec Martinez            40     1   4  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Unknown Player                                    60     1   4  0  
 2 Unknown Player                                    40     1   4  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Jake Muzzin              Morgan Rielly            60     1   4  0  
 2 Unknown Player           Alec Martinez            40     1   4  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Unknown Player           Artemi Panarin           60     0   2  3  
 2 Nazem Kadri              Unknown Player           40     0   2  3  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Jake Muzzin              Morgan Rielly            60     1   2  2  
 2 Unknown Player           Alec Martinez            40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Unknown Player           Artemi Panarin           Unknown Player           Jake Muzzin              Morgan Rielly            

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Unknown Player           Artemi Panarin           Unknown Player           Jake Muzzin              Morgan Rielly            

<b>Goaltenders</b>
Starting : Unknown Goalie           
Backup : Tristan Jarry            

<b>Extra Forwards</b>
Normal : Unknown Player, Unknown Player, Unknown Player - PP : Unknown Player, Unknown Player - PK : Unknown Player
<b>Extra Defensemen</b>
Normal : Josh Morrissey, Unknown Player, Unknown Player - PP : Josh Morrissey - PK : Unknown Player, Unknown Player
<b>Penalty Shots</b>
Artemi Panarin, Unknown Player, Unknown Player, Nazem Kadri, Johnny Gaudreau
<b>Custom OT Lines Forwards</b>
Artemi Panarin, Unknown Player, Unknown Player, Nazem Kadri, Johnny Gaudreau, Zach Hyman, Unknown Player, Unknown Player, Unknown Player, Unknown Player
<b>Custom OT Lines Defensemen</b>
Jake Muzzin, Morgan Rielly, Unknown Player, Alec Martinez, Josh Morrissey

<b>Scratches</b>
Luke Schenn (Healthy), Matthew Peca (Healthy), Carter Hutton (Healthy)</pre></div>
<h1 class="TeamLinesPro_CGY"><a id="Flames">Flames</a></h1>
<b>Lines are Incomplete</b><br />
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
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Bo Horvat                Taylor Hall              Andre Burakovsky         38     0   3  2  
 2 Dylan Larkin             Anthony Beauvillier      Tom Wilson               37     0   3  2  
 3 Phillip Danault          Matthew Nieto            Unknown Player           15     0   2  3  
 4 Adam Lowry               Unknown Player           Rasmus Asplund           10     0   2  3  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Unknown Player           Zdeno Chara                                       40     0   4  1  
 2 Jaccob Slavin            Brady Skjei                                       40     0   4  1  
 3 Unknown Player           Devon Toews                                       10     0   5  0  
 4 Jaccob Slavin            Unknown Player                                    10     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Bo Horvat                Taylor Hall              Andre Burakovsky         70     0   0  5  
 2 Dylan Larkin             Anthony Beauvillier      Tom Wilson               30     0   0  5  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Devon Toews              Unknown Player                                    82     0   0  5  
 2 Brady Skjei              Jaccob Slavin                                     18     0   0  5  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Adam Lowry               Matthew Nieto            80     0   5  0  
 2 Phillip Danault          Rasmus Asplund           20     0   5  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Jaccob Slavin            Zdeno Chara              70     0   5  0  
 2 Unknown Player           Brady Skjei              30     0   5  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Adam Lowry                                        84     0   5  0  
 2 Phillip Danault                                   16     0   5  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Zdeno Chara              Jaccob Slavin            69     0   5  0  
 2 Brady Skjei              Unknown Player           31     0   5  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Bo Horvat                Taylor Hall              60     1   2  2  
 2 Dylan Larkin             Andre Burakovsky         40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Zdeno Chara              Unknown Player           60     1   2  2  
 2 Jaccob Slavin            Brady Skjei              40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Bo Horvat                Taylor Hall              Dylan Larkin             Jaccob Slavin            Unknown Player           

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Phillip Danault          Adam Lowry               Matthew Nieto            Jaccob Slavin            Unknown Player           

<b>Goaltenders</b>
Starting : Ben Bishop               
Backup : Unknown Goalie           

<b>Extra Forwards</b>
Normal : Dylan Larkin, Bo Horvat, Taylor Hall - PP : Tom Wilson, Bo Horvat - PK : Tom Wilson
<b>Extra Defensemen</b>
Normal : Zdeno Chara, Unknown Player, Jaccob Slavin - PP : Devon Toews - PK : Brady Skjei, Zdeno Chara
<b>Penalty Shots</b>
Anthony Beauvillier, Dylan Larkin, Unknown Player, Unknown Player, Devon Toews
<b>Custom OT Lines Forwards</b>
Bo Horvat, Andre Burakovsky, Dylan Larkin, Tom Wilson, Taylor Hall, Phillip Danault, Anthony Beauvillier, Unknown Player, Adam Lowry, Matthew Nieto
<b>Custom OT Lines Defensemen</b>
Unknown Player, Zdeno Chara, Unknown Player, Devon Toews, Jaccob Slavin

<b>Scratches</b>
Matt Benning (Healthy), David Perron (Healthy), Travis Dermott (Healthy), Michael Raffl (Healthy)</pre></div>
<h1 class="TeamLinesPro_PHL"><a id="Flyers">Flyers</a></h1>
<b>Lines are Incomplete</b><br />
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
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Ryan Strome              Bryan Rust               Cam Atkinson             35     1   3  1  
 2 Brock Nelson             Mike Hoffman             Kevin Fiala              30     0   1  4  
 3 Joel Eriksson Ek         Viktor Arvidsson         Kailer Yamamoto          25     0   2  3  
 4 Unknown Player           Filip Zadina             Tyler Ennis              10     0   3  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Alexander Edler          Keith Yandle                                      35     0   2  3  
 2 Jonas Brodin             Rasmus Dahlin                                     30     0   2  3  
 3 Unknown Player           Brian Dumoulin                                    25     0   2  3  
 4 Unknown Player           Jonas Brodin                                      10     0   5  0  

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
 1 Alexander Edler          Unknown Player           60     0   5  0  
 2 Jonas Brodin             Brian Dumoulin           40     0   5  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Joel Eriksson Ek                                  60     0   5  0  
 2 Brock Nelson                                      40     0   5  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Alexander Edler          Unknown Player           60     0   5  0  
 2 Jonas Brodin             Brian Dumoulin           40     0   5  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Brock Nelson             Bryan Rust               60     0   3  2  
 2 Ryan Strome              Mike Hoffman             40     0   3  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Alexander Edler          Unknown Player           60     0   3  2  
 2 Jonas Brodin             Brian Dumoulin           40     0   3  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Ryan Strome              Bryan Rust               Kevin Fiala              Keith Yandle             Brian Dumoulin           

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Brock Nelson             Joel Eriksson Ek         Ryan Strome              Alexander Edler          Jonas Brodin             

<b>Goaltenders</b>
Starting : Unknown Goalie           
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
Alexander Edler, Jonas Brodin, Keith Yandle, Unknown Player, Rasmus Dahlin

<b>Scratches</b>
Justin Bailey (Healthy), Nathan Beaulieu (Healthy), Collin Delia (Healthy)</pre></div>
<h1 class="TeamLinesPro_VGK"><a id="GoldenKnights">Golden Knights</a></h1>
<b>Lines are Incomplete</b><br />
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
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Nicklas Backstrom        Andrei Svechnikov        Jordan Eberle            35     2   2  1  
 2 Unknown Player           Phil Kessel              Drake Batherson          30     2   2  1  
 3 Unknown Player           Lias Andersson           Andrew Cogliano          20     2   2  1  
 4 Colton Sissons           Morgan Geekie            Jake Evans               15     2   2  1  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Colton Parayko           Travis Sanheim                                    40     2   2  1  
 2 Unknown Player           Henri Jokiharju                                   30     2   2  1  
 3 Vince Dunn               Gustav Lindstrom                                  25     2   2  1  
 4 Colton Parayko           Travis Sanheim                                    5      2   2  1  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Nicklas Backstrom        Andrei Svechnikov        Jordan Eberle            60     1   2  2  
 2 Unknown Player           Phil Kessel              Drake Batherson          40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Colton Parayko           Travis Sanheim                                    60     1   2  2  
 2 Henri Jokiharju          Vince Dunn                                        40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Colton Sissons           Andrew Cogliano          60     2   2  1  
 2 Unknown Player           Lias Andersson           40     2   2  1  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Colton Parayko           Travis Sanheim           60     2   2  1  
 2 Unknown Player           Henri Jokiharju          40     2   2  1  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Colton Sissons                                    60     2   2  1  
 2 Andrew Cogliano                                   40     2   2  1  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Colton Parayko           Travis Sanheim           60     2   2  1  
 2 Unknown Player           Henri Jokiharju          40     2   2  1  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Nicklas Backstrom        Andrei Svechnikov        60     2   2  1  
 2 Unknown Player           Phil Kessel              40     2   2  1  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Colton Parayko           Travis Sanheim           60     2   2  1  
 2 Henri Jokiharju          Unknown Player           40     2   2  1  

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
Normal : Nicklas Backstrom, Andrei Svechnikov, Unknown Player - PP : Nicklas Backstrom, Andrei Svechnikov - PK : Nicklas Backstrom
<b>Extra Defensemen</b>
Normal : Colton Parayko, Travis Sanheim, Unknown Player - PP : Colton Parayko - PK : Colton Parayko, Travis Sanheim
<b>Penalty Shots</b>
Andrei Svechnikov, Unknown Player, Nicklas Backstrom, Andrew Cogliano, Jordan Eberle
<b>Custom OT Lines Forwards</b>
Nicklas Backstrom, Andrei Svechnikov, Unknown Player, Phil Kessel, Jordan Eberle, Unknown Player, Drake Batherson, Colton Sissons, Andrew Cogliano, Morgan Geekie
<b>Custom OT Lines Defensemen</b>
Colton Parayko, Travis Sanheim, Unknown Player, Henri Jokiharju, Vince Dunn

<b>Scratches</b>
Jamie Benn (Healthy), Nolan Patrick (Healthy), Milan Lucic (Healthy), Mackenzie Blackwood (Healthy)</pre></div>
<h1 class="TeamLinesPro_CAR"><a id="Hurricanes">Hurricanes</a></h1>
<b>Lines are Incomplete</b><br />
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
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Nick Paul                Unknown Player           Unknown Player           40     1   2  2  
 2 Ryan Hartman             Unknown Player           Unknown Player           30     1   2  2  
 3 Unknown Player           Unknown Player           Unknown Player           20     1   2  2  
 4 Unknown Player           Unknown Player           Stelio Mattheos          10     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Filip Hronek             P.K. Subban                                       40     1   2  2  
 2 Unknown Player           Marcus Pettersson                                 30     1   2  2  
 3 Vladislav Gavrikov       Unknown Player                                    20     1   2  2  
 4 Filip Hronek             P.K. Subban                                       10     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Nick Paul                Unknown Player           Unknown Player           60     1   2  2  
 2 Ryan Hartman             Unknown Player           Unknown Player           40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Filip Hronek             P.K. Subban                                       60     1   2  2  
 2 Unknown Player           Marcus Pettersson                                 40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Nick Paul                Unknown Player           60     1   2  2  
 2 Unknown Player           Ryan Hartman             40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Filip Hronek             P.K. Subban              60     1   2  2  
 2 Unknown Player           Marcus Pettersson        40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Nick Paul                                         60     1   2  2  
 2 Unknown Player                                    40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Filip Hronek             P.K. Subban              60     1   2  2  
 2 Unknown Player           Marcus Pettersson        40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Nick Paul                Unknown Player           60     1   2  2  
 2 Unknown Player           Ryan Hartman             40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Filip Hronek             P.K. Subban              60     1   2  2  
 2 Unknown Player           Marcus Pettersson        40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Nick Paul                Unknown Player           Unknown Player           Filip Hronek             P.K. Subban              

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Nick Paul                Unknown Player           Unknown Player           Filip Hronek             P.K. Subban              

<b>Goaltenders</b>
Starting : Filip Gustavsson         
Backup : Unknown Goalie           

<b>Extra Forwards</b>
Normal : Unknown Player, Stelio Mattheos, Unknown Player - PP : Unknown Player, Unknown Player - PK : Unknown Player
<b>Extra Defensemen</b>
Normal : Vladislav Gavrikov, Unknown Player, Unknown Player - PP : Vladislav Gavrikov - PK : Unknown Player, Unknown Player
<b>Penalty Shots</b>
Nick Paul, Unknown Player, Unknown Player, Ryan Hartman, Unknown Player
<b>Custom OT Lines Forwards</b>
Nick Paul, Unknown Player, Unknown Player, Ryan Hartman, Unknown Player, Stelio Mattheos, Unknown Player, Unknown Player, Unknown Player, Unknown Player
<b>Custom OT Lines Defensemen</b>
Filip Hronek, P.K. Subban, Unknown Player, Marcus Pettersson, Vladislav Gavrikov

<b>Scratches</b>
Jakob Chychrun (Healthy), Ryan Johansen (Healthy)</pre></div>
<h1 class="TeamLinesPro_NYI"><a id="Islanders">Islanders</a></h1>
<b>Lines are Incomplete</b><br />
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
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Mathew Barzal            Jonathan Huberdeau       Alexander Radulov        30     0   0  5  
 2 Ryan O'Reilly            Connor Brown             Scott Laughton           30     0   5  0  
 3 Steven Stamkos           Unknown Player           Calle Jarnkrok           30     0   1  4  
 4 Alan Quine               Unknown Player           Austin Watson            10     0   5  0  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Unknown Player           Ryan Pulock                                       40     0   4  1  
 2 Victor Hedman            Cale Makar                                        28     0   3  2  
 3 Mark Pysyk               Greg Pateryn                                      22     0   5  0  
 4 Victor Hedman            Unknown Player                                    10     0   3  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Mathew Barzal            Jonathan Huberdeau       Steven Stamkos           60     0   0  5  
 2 Ryan O'Reilly            Unknown Player           Alexander Radulov        40     0   0  5  

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
 1 Ryan Pulock              Unknown Player           60     0   5  0  
 2 Victor Hedman            Greg Pateryn             40     0   5  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Ryan O'Reilly                                     60     0   5  0  
 2 Connor Brown                                      40     0   5  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Ryan Pulock              Unknown Player           60     0   5  0  
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
Backup : Unknown Goalie           

<b>Extra Forwards</b>
Normal : Mathew Barzal, Ryan O'Reilly, Steven Stamkos - PP : Connor Brown, Scott Laughton - PK : Steven Stamkos
<b>Extra Defensemen</b>
Normal : Ryan Pulock, Cale Makar, Greg Pateryn - PP : Mark Pysyk - PK : Mark Pysyk, Greg Pateryn
<b>Penalty Shots</b>
Alexander Radulov, Calle Jarnkrok, Connor Brown, Steven Stamkos, Ryan O'Reilly
<b>Custom OT Lines Forwards</b>
Steven Stamkos, Ryan O'Reilly, Jonathan Huberdeau, Mathew Barzal, Alexander Radulov, Unknown Player, Connor Brown, Calle Jarnkrok, Alan Quine, Austin Watson
<b>Custom OT Lines Defensemen</b>
Victor Hedman, Ryan Pulock, Mark Pysyk, Cale Makar, Unknown Player

<b>Scratches</b>
Boo Nieves (Healthy), Michael Stone (Healthy), Nick Bjugstad (Healthy), Tom Kuhnhackl (Healthy)</pre></div>
<h1 class="TeamLinesPro_WPG"><a id="Jets">Jets</a></h1>
<b>Lines are Incomplete</b><br />
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
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Casey Cizikas            Matthew Tkachuk          Kasperi Kapanen          40     0   1  4  
 2 Unknown Player           Barclay Goodrow          Joonas Donskoi           30     0   2  3  
 3 Unknown Player           Roope Hintz              Leo Komarov              20     0   3  2  
 4 Jesperi Kotkaniemi       Jeff Skinner             Joel L'Esperance         10     0   4  1  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Olli Maatta              Ryan Lindgren                                     40     0   1  4  
 2 Kevin Shattenkirk        Miro Heiskanen                                    30     0   2  3  
 3 Mike Reilly              Unknown Player                                    20     0   3  2  
 4 Olli Maatta              Ryan Lindgren                                     10     0   4  1  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Unknown Player           Roope Hintz              Matthew Tkachuk          60     0   1  4  
 2 Barclay Goodrow          Kasperi Kapanen          Joonas Donskoi           40     0   2  3  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Unknown Player           Miro Heiskanen                                    60     0   1  4  
 2 Kevin Shattenkirk        Ryan Lindgren                                     40     0   2  3  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Casey Cizikas            Kasperi Kapanen          60     0   4  1  
 2 Barclay Goodrow          Leo Komarov              40     0   3  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Olli Maatta              Ryan Lindgren            60     0   4  1  
 2 Miro Heiskanen           Unknown Player           40     0   3  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Casey Cizikas                                     60     0   4  1  
 2 Barclay Goodrow                                   40     0   3  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Olli Maatta              Ryan Lindgren            60     0   4  1  
 2 Miro Heiskanen           Unknown Player           40     0   3  2  

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
Normal : Casey Cizikas, Matthew Tkachuk, Barclay Goodrow - PP : Unknown Player, Kasperi Kapanen - PK : Leo Komarov
<b>Extra Defensemen</b>
Normal : Olli Maatta, Unknown Player, Miro Heiskanen - PP : Kevin Shattenkirk - PK : Ryan Lindgren, Unknown Player
<b>Penalty Shots</b>
Kevin Shattenkirk, Ryan Lindgren, Jesperi Kotkaniemi, Casey Cizikas, Matthew Tkachuk
<b>Custom OT Lines Forwards</b>
Roope Hintz, Kasperi Kapanen, Casey Cizikas, Barclay Goodrow, Unknown Player, Jeff Skinner, Jesperi Kotkaniemi, Leo Komarov, Unknown Player, Matthew Tkachuk
<b>Custom OT Lines Defensemen</b>
Ryan Lindgren, Miro Heiskanen, Olli Maatta, Kevin Shattenkirk, Unknown Player

<b>Scratches</b>
Adam Erne (Healthy), Joonas Korpisalo (Healthy)</pre></div>
<h1 class="TeamLinesPro_LAK"><a id="Kings">Kings</a></h1>
<b>Lines are Complete</b><br />
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
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Nathan MacKinnon         Alex Ovechkin            Mitch Marner             35     1   2  2  
 2 Elias Lindholm           Josh Anderson            Brock Boeser             35     1   2  2  
 3 Boone Jenner             Mathieu Perreault        Pierre Engvall           20     1   2  2  
 4 Riley Nash               Alex Galchenyuk          Nicolas Roy              10     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Seth Jones               Neal Pionk                                        40     1   2  2  
 2 Travis Hamonic           Anthony DeAngelo                                  30     1   2  2  
 3 Adam Pelech              Noah Dobson                                       20     1   2  2  
 4 Seth Jones               Neal Pionk                                        10     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Nathan MacKinnon         Alex Ovechkin            Mitch Marner             60     0   0  5  
 2 Elias Lindholm           Josh Anderson            Brock Boeser             40     0   0  5  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Seth Jones               Neal Pionk                                        60     0   2  3  
 2 Anthony DeAngelo         Noah Dobson                                       40     0   2  3  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Boone Jenner             Pierre Engvall           60     0   4  1  
 2 Riley Nash               Mitch Marner             40     0   4  1  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Seth Jones               Adam Pelech              60     1   4  0  
 2 Travis Hamonic           Neal Pionk               40     1   4  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Boone Jenner                                      60     0   5  0  
 2 Mitch Marner                                      40     0   5  0  

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
 2 Travis Hamonic           Adam Pelech              40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Nathan MacKinnon         Alex Ovechkin            Elias Lindholm           Seth Jones               Neal Pionk               

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Nathan MacKinnon         Alex Ovechkin            Elias Lindholm           Seth Jones               Neal Pionk               

<b>Goaltenders</b>
Starting : Jordan Binnington        
Backup : James Reimer             

<b>Extra Forwards</b>
Normal : Mathieu Perreault, Brock Boeser, Riley Nash - PP : Pierre Engvall, Brock Boeser - PK : Riley Nash
<b>Extra Defensemen</b>
Normal : Anthony DeAngelo, Noah Dobson, Travis Hamonic - PP : Anthony DeAngelo - PK : Noah Dobson, Travis Hamonic
<b>Penalty Shots</b>
Nathan MacKinnon, Alex Ovechkin, Elias Lindholm, Mitch Marner, Brock Boeser
<b>Custom OT Lines Forwards</b>
Nathan MacKinnon, Alex Ovechkin, Elias Lindholm, Mitch Marner, Brock Boeser, Boone Jenner, Josh Anderson, Riley Nash, Pierre Engvall, Alex Galchenyuk
<b>Custom OT Lines Defensemen</b>
Seth Jones, Neal Pionk, Travis Hamonic, Adam Pelech, Anthony DeAngelo

<b>Scratches</b>
Mikhail Maltsev (Healthy)</pre></div>
<h1 class="TeamLinesPro_SEA"><a id="Kraken">Kraken</a></h1>
<b>Lines are Incomplete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=32">Kraken Page</a> ]
[ <a href="OTHL-ProTeamRoster.php#Kraken">Pro Team Roster</a> ]
[ <a href="OTHL-ProTeamScoring.php#Kraken">Pro Team Scoring</a> ]
[ <a href="OTHL-TeamFinance.php#Kraken">Team Finance</a> ]
[ <a href="OTHL-ProTeamPlayersInfo.php#Kraken">Pro Team PlayersInfo</a> ]
[ <a href="OTHL-ProTeamLines.php#Kraken">Pro Team Lines</a> ]
[ <a href="OTHL-TeamProspects.php#Kraken">Team Prospects</a> ]
[ <a href="OTHL-ProTeamSchedule.php#Kraken">Pro Team Schedule</a> ]
[ <a href="OTHL-ProTeamStats.php#Kraken">Pro Team Stats</a> ]
[ <a href="OTHL-ProTeamStatsVS.php#Kraken">Pro Team Stats VS</a> ]
[ <a href="OTHL-TeamInjurySuspension.php#Kraken">Team Injury Suspension</a> ]
[ <a href="OTHL-TeamHistory.php#Kraken">Team History</a> ]
[ <a href="OTHL-TeamRecords.php#Kraken">Team Records</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Kraken');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Kraken" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           Unknown Player           0      0   0  0  
 2 Unknown Player           Unknown Player           Unknown Player           0      0   0  0  
 3 Unknown Player           Unknown Player           Unknown Player           0      0   0  0  
 4 Unknown Player           Unknown Player           Unknown Player           0      0   0  0  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player                                    0      0   0  0  
 2 Unknown Player           Unknown Player                                    0      0   0  0  
 3 Unknown Player           Unknown Player                                    0      0   0  0  
 4 Unknown Player           Unknown Player                                    0      0   0  0  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           Unknown Player           0      0   0  0  
 2 Unknown Player           Unknown Player           Unknown Player           0      0   0  0  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player                                    0      0   0  0  
 2 Unknown Player           Unknown Player                                    0      0   0  0  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           0      0   0  0  
 2 Unknown Player           Unknown Player           0      0   0  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           0      0   0  0  
 2 Unknown Player           Unknown Player           0      0   0  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Unknown Player                                    0      0   0  0  
 2 Unknown Player                                    0      0   0  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           0      0   0  0  
 2 Unknown Player           Unknown Player           0      0   0  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           0      0   0  0  
 2 Unknown Player           Unknown Player           0      0   0  0  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           0      0   0  0  
 2 Unknown Player           Unknown Player           0      0   0  0  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Unknown Player           Unknown Player           Unknown Player           Unknown Player           Unknown Player           

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Unknown Player           Unknown Player           Unknown Player           Unknown Player           Unknown Player           

<b>Goaltenders</b>
Starting : Unknown Goalie           
Backup : Unknown Goalie           

<b>Extra Forwards</b>
Normal : Unknown Player, Unknown Player, Unknown Player - PP : Unknown Player, Unknown Player - PK : Unknown Player
<b>Extra Defensemen</b>
Normal : Unknown Player, Unknown Player, Unknown Player - PP : Unknown Player - PK : Unknown Player, Unknown Player
<b>Penalty Shots</b>
Unknown Player, Unknown Player, Unknown Player, Unknown Player, Unknown Player
<b>Custom OT Lines Forwards</b>
Unknown Player, Unknown Player, Unknown Player, Unknown Player, Unknown Player, Unknown Player, Unknown Player, Unknown Player, Unknown Player, Unknown Player
<b>Custom OT Lines Defensemen</b>
Unknown Player, Unknown Player, Unknown Player, Unknown Player, Unknown Player

<b>Scratches</b>
Derek Ryan (Healthy), Andreas Johnsson (Healthy), Nathan Gerbe (Healthy), Jonathon Merrill (Healthy)</pre></div>
<h1 class="TeamLinesPro_TBL"><a id="Lightning">Lightning</a></h1>
<b>Lines are Incomplete</b><br />
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
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 John Tavares             Derick Brassard          Craig Smith              40     0   3  2  
 2 Unknown Player           Oskar Lindblom           Tanner Pearson           30     0   3  2  
 3 Nic Dowd                 Unknown Player           Unknown Player           20     2   2  1  
 4 Colin Blackwell          Unknown Player           Tim Schaller             10     1   4  0  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Ryan Murray              John Klingberg                                    40     1   4  0  
 2 Kris Russell             Riley Stillman                                    30     1   4  0  
 3 Marco Scandella          Brett Kulak                                       20     1   4  0  
 4 Kris Russell             Riley Stillman                                    10     1   4  0  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 John Tavares             Tanner Pearson           Unknown Player           60     0   0  5  
 2 Derick Brassard          Oskar Lindblom           Unknown Player           40     0   0  5  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Craig Smith              John Klingberg                                    60     0   0  5  
 2 Ryan Murray              Unknown Player                                    40     0   0  5  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Nic Dowd                 Tim Schaller             60     0   5  0  
 2 Unknown Player           Unknown Player           40     0   5  0  

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
 2 Unknown Player           Craig Smith              40     0   3  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Ryan Murray              John Klingberg           60     0   3  2  
 2 Kris Russell             Marco Scandella          40     0   3  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   John Tavares             Tanner Pearson           Unknown Player           Ryan Murray              John Klingberg           

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Nic Dowd                 Unknown Player           Tim Schaller             Ryan Murray              Kris Russell             

<b>Goaltenders</b>
Starting : Connor Hellebuyck        
Backup : Kevin Boyle              

<b>Extra Forwards</b>
Normal : Unknown Player, Tanner Pearson, Craig Smith - PP : Derick Brassard, John Tavares - PK : Unknown Player
<b>Extra Defensemen</b>
Normal : Ryan Murray, Marco Scandella, Riley Stillman - PP : Ryan Murray - PK : Kris Russell, Ryan Murray
<b>Penalty Shots</b>
Derick Brassard, John Tavares, Unknown Player, Tanner Pearson, Craig Smith
<b>Custom OT Lines Forwards</b>
John Tavares, Unknown Player, Tanner Pearson, Craig Smith, Derick Brassard, Oskar Lindblom, Unknown Player, Nic Dowd, Unknown Player, Colin Blackwell
<b>Custom OT Lines Defensemen</b>
John Klingberg, Ryan Murray, Kris Russell, Riley Stillman, Marco Scandella

<b>Scratches</b>
Evander Kane (Healthy), Brian Elliott (Healthy)</pre></div>
<h1 class="TeamLinesPro_TOR"><a id="MapleLeafs">Maple Leafs</a></h1>
<b>Lines are Incomplete</b><br />
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
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Tomas Hertl              Brandon Saad             Tyler Toffoli            35     0   2  3  
 2 Unknown Player           Unknown Player           Jake Debrusk             25     0   3  2  
 3 Christian Dvorak         Unknown Player           Sam Bennett              25     0   3  2  
 4 Radek Faksa              Sean Kuraly              Brett Howden             15     1   3  1  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Nick Leddy               John Carlson                                      40     0   3  2  
 2 Shea Theodore            Alex Pietrangelo                                  40     0   3  2  
 3 Unknown Player           Jarred Tinordi                                    20     2   3  0  
 4 Alex Pietrangelo         John Carlson                                      0      1   3  1  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Tomas Hertl              Brandon Saad             Tyler Toffoli            60     0   0  5  
 2 Unknown Player           Unknown Player           Christian Dvorak         40     0   0  5  

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
 1 Unknown Player           Alex Pietrangelo         60     0   5  0  
 2 Jarred Tinordi           John Carlson             40     0   5  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Sean Kuraly                                       60     0   5  0  
 2 Radek Faksa                                       40     0   5  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Unknown Player           Alex Pietrangelo         60     0   5  0  
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
   Tomas Hertl              Unknown Player           Tyler Toffoli            Alex Pietrangelo         John Carlson             

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Radek Faksa              Sean Kuraly              Brett Howden             Alex Pietrangelo         John Carlson             

<b>Goaltenders</b>
Starting : Unknown Goalie           
Backup : Frederik Andersen        

<b>Extra Forwards</b>
Normal : Unknown Player, Radek Faksa, Sean Kuraly - PP : Unknown Player, Jake Debrusk - PK : Sean Kuraly
<b>Extra Defensemen</b>
Normal : Shea Theodore, Nick Leddy, Alex Pietrangelo - PP : Shea Theodore - PK : Unknown Player, Jarred Tinordi
<b>Penalty Shots</b>
Unknown Player, Tyler Toffoli, Christian Dvorak, Jake Debrusk, Brandon Saad
<b>Custom OT Lines Forwards</b>
Tomas Hertl, Unknown Player, Tyler Toffoli, Christian Dvorak, Jake Debrusk, Brandon Saad, Unknown Player, Radek Faksa, Unknown Player, Sam Bennett
<b>Custom OT Lines Defensemen</b>
John Carlson, Shea Theodore, Alex Pietrangelo, Nick Leddy, Unknown Player

<b>Scratches</b>
Ryan Reaves (Healthy), Colin Miller (Healthy)</pre></div>
<h1 class="TeamLinesPro_EDM"><a id="Oilers">Oilers</a></h1>
<b>Lines are Incomplete</b><br />
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
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Unknown Player           Ryan Nugent-Hopkins      Unknown Player           34     0   1  4  
 2 Blake Wheeler            Mikael Granlund          Tyler Bertuzzi           34     0   1  4  
 3 Unknown Player           Unknown Player           Noel Acciari             25     1   2  2  
 4 Luke Glendening          Chris Wagner             Unknown Player           7      1   3  1  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Jeff Petry               Unknown Player                                    40     1   2  2  
 2 Unknown Player           Unknown Player                                    30     0   2  3  
 3 Ryan Graves              Unknown Player                                    20     1   3  1  
 4 Unknown Player           Unknown Player                                    10     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Blake Wheeler            Mikael Granlund          Tyler Bertuzzi           60     1   0  4  
 2 Unknown Player           Ryan Nugent-Hopkins      Unknown Player           40     1   0  4  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player                                    60     0   1  4  
 2 Jeff Petry               Unknown Player                                    40     0   1  4  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Luke Glendening          Noel Acciari             60     1   4  0  
 2 Unknown Player           Unknown Player           40     1   4  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Ryan Graves              Unknown Player           60     1   4  0  
 2 Unknown Player           Unknown Player           40     1   4  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Luke Glendening                                   60     0   4  1  
 2 Unknown Player                                    40     0   4  1  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Unknown Player           Ryan Graves              60     0   5  0  
 2 Unknown Player           Unknown Player           40     0   5  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Unknown Player           Mikael Granlund          60     1   2  2  
 2 Unknown Player           Ryan Nugent-Hopkins      40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Jeff Petry               Unknown Player           60     1   2  2  
 2 Unknown Player           Unknown Player           40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Blake Wheeler            Ryan Nugent-Hopkins      Tyler Bertuzzi           Jeff Petry               Unknown Player           

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Unknown Player           Unknown Player           Noel Acciari             Unknown Player           Unknown Player           

<b>Goaltenders</b>
Starting : Elvis Merzlikins         
Backup : John Gibson              

<b>Extra Forwards</b>
Normal : Ryan Nugent-Hopkins, Blake Wheeler, Unknown Player - PP : Unknown Player, Unknown Player - PK : Unknown Player
<b>Extra Defensemen</b>
Normal : Jeff Petry, Unknown Player, Unknown Player - PP : Jeff Petry - PK : Unknown Player, Jeff Petry
<b>Penalty Shots</b>
Unknown Player, Unknown Player, Blake Wheeler, Unknown Player, Ryan Nugent-Hopkins
<b>Custom OT Lines Forwards</b>
Ryan Nugent-Hopkins, Unknown Player, Blake Wheeler, Mikael Granlund, Unknown Player, Tyler Bertuzzi, Unknown Player, Noel Acciari, Unknown Player, Unknown Player
<b>Custom OT Lines Defensemen</b>
Jeff Petry, Unknown Player, Unknown Player, Unknown Player, Ryan Graves

<b>Scratches</b>
Esa Lindell (Healthy), Lars Eller (Healthy), Derek Forbort (Healthy)</pre></div>
<h1 class="TeamLinesPro_FLA"><a id="Panthers">Panthers</a></h1>
<b>Lines are Incomplete</b><br />
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
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           Tyler Seguin             32     2   2  1  
 2 Tyler Bozak              Unknown Player           Darren Helm              32     2   2  1  
 3 Vinni Lettieri           C.J. Smith               Josh Bailey              31     2   2  1  
 4 Danny O'Regan            Max Domi                 Josh Leivo               5      2   2  1  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Damon Severson           Rasmus Andersson                                  30     2   2  1  
 2 Unknown Player           Derrick Pouliot                                   30     2   2  1  
 3 Scott Harrington         Brendan Guhle                                     30     2   2  1  
 4 Damon Severson           Rasmus Andersson                                  10     2   2  1  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Tyler Seguin             Max Domi                 Josh Leivo               50     0   0  5  
 2 Unknown Player           Josh Bailey              Unknown Player           50     0   0  5  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Rasmus Andersson         Damon Severson                                    50     0   0  5  
 2 Unknown Player           Derrick Pouliot                                   50     0   0  5  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Tyler Bozak              Darren Helm              50     0   5  0  
 2 Unknown Player           C.J. Smith               50     0   5  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Damon Severson           Unknown Player           50     0   5  0  
 2 Scott Harrington         Brendan Guhle            50     0   5  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Tyler Bozak                                       50     0   5  0  
 2 Unknown Player                                    50     0   5  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Damon Severson           Unknown Player           50     0   5  0  
 2 Scott Harrington         Brendan Guhle            50     0   5  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Tyler Seguin             Max Domi                 50     0   0  5  
 2 Unknown Player           Josh Leivo               50     0   0  5  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Unknown Player           Scott Harrington         50     0   2  3  
 2 Damon Severson           Brendan Guhle            50     0   2  3  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Tyler Seguin             Max Domi                 Josh Leivo               Rasmus Andersson         Damon Severson           

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Unknown Player           Unknown Player           Darren Helm              Unknown Player           Damon Severson           

<b>Goaltenders</b>
Starting : Unknown Goalie           
Backup : David Rittich            

<b>Extra Forwards</b>
Normal : Tyler Seguin, Max Domi, Unknown Player - PP : Tyler Seguin, Max Domi - PK : Josh Bailey
<b>Extra Defensemen</b>
Normal : Damon Severson, Rasmus Andersson, Unknown Player - PP : Damon Severson - PK : Damon Severson, Unknown Player
<b>Penalty Shots</b>
Tyler Seguin, Damon Severson, Darren Helm, Josh Leivo, Josh Bailey
<b>Custom OT Lines Forwards</b>
Tyler Seguin, Max Domi, Danny O'Regan, Unknown Player, Unknown Player, Unknown Player, Tyler Bozak, Josh Bailey, C.J. Smith, Josh Leivo
<b>Custom OT Lines Defensemen</b>
Unknown Player, Damon Severson, Scott Harrington, Brendan Guhle, Rasmus Andersson

<b>Scratches</b>
Carl Dahlstrom (Healthy), Derek Stepan (Healthy), Jakob Silfverberg (Healthy)</pre></div>
<h1 class="TeamLinesPro_PIT"><a id="Penguins">Penguins</a></h1>
<b>Lines are Incomplete</b><br />
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
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Nick Foligno             James van Riemsdyk       Ilya Mikheyev            40     1   1  3  
 2 Evan Rodrigues           Brady Tkachuk            Unknown Player           35     0   2  3  
 3 Unknown Player           Unknown Player           Pat Maroon               15     1   2  2  
 4 Sam Gagner               Unknown Player           Nick Cousins             10     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Cam Fowler               Dmitry Kulikov                                    40     1   2  2  
 2 Unknown Player           Unknown Player                                    30     1   2  2  
 3 Robert Bortuzzo          Unknown Player                                    20     1   3  1  
 4 Unknown Player           Dmitry Kulikov                                    10     1   1  3  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Nick Foligno             Brady Tkachuk            Nick Cousins             60     1   0  4  
 2 Evan Rodrigues           James van Riemsdyk       Ilya Mikheyev            40     1   1  3  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Cam Fowler               Unknown Player                                    60     0   2  3  
 2 Unknown Player           Dmitry Kulikov                                    40     1   1  3  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Nick Foligno             Evan Rodrigues           60     1   3  1  
 2 Unknown Player           Unknown Player           40     1   4  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Cam Fowler               Dmitry Kulikov           60     0   5  0  
 2 Unknown Player           Robert Bortuzzo          40     1   4  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Unknown Player                                    60     0   5  0  
 2 Nick Foligno                                      40     0   5  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Cam Fowler               Dmitry Kulikov           60     0   5  0  
 2 Unknown Player           Robert Bortuzzo          40     1   4  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Nick Foligno             Evan Rodrigues           60     1   2  2  
 2 Unknown Player           Unknown Player           40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Cam Fowler               Dmitry Kulikov           60     1   2  2  
 2 Unknown Player           Robert Bortuzzo          40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Nick Foligno             Brady Tkachuk            Nick Cousins             Cam Fowler               Dmitry Kulikov           

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Unknown Player           Nick Foligno             Nick Cousins             Cam Fowler               Dmitry Kulikov           

<b>Goaltenders</b>
Starting : Unknown Goalie           
Backup : Anton Forsberg           

<b>Extra Forwards</b>
Normal : Sam Gagner, Nick Cousins, Pat Maroon - PP : Ilya Mikheyev, Nick Cousins - PK : Nick Cousins
<b>Extra Defensemen</b>
Normal : Unknown Player, Unknown Player, Robert Bortuzzo - PP : Unknown Player - PK : Robert Bortuzzo, Unknown Player
<b>Penalty Shots</b>
Nick Foligno, Brady Tkachuk, James van Riemsdyk, Unknown Player, Ilya Mikheyev
<b>Custom OT Lines Forwards</b>
Nick Foligno, Brady Tkachuk, James van Riemsdyk, Unknown Player, Ilya Mikheyev, Nick Cousins, Pat Maroon, Unknown Player, Evan Rodrigues, Unknown Player
<b>Custom OT Lines Defensemen</b>
Cam Fowler, Dmitry Kulikov, Unknown Player, Robert Bortuzzo, Unknown Player

<b>Scratches</b>
Austin Czarnik (Healthy), Sven Baertschi (Healthy)</pre></div>
<h1 class="TeamLinesPro_NSH"><a id="Predators">Predators</a></h1>
<b>Lines are Incomplete</b><br />
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
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Logan Couture            Dominik Kubalik          Alex Killorn             38     0   2  3  
 2 Adam Henrique            Reilly Smith             Sam Reinhart             32     0   2  3  
 3 Unknown Player           Adrian Kempe             Alex Tuch                25     0   2  3  
 4 Unknown Player           Ryan Dzingel             Danton Heinen            5      0   2  3  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Oscar Klefbom            Unknown Player                                    40     0   3  2  
 2 Erik Cernak              Unknown Player                                    31     0   3  2  
 3 Unknown Player           Unknown Player                                    19     0   3  2  
 4 Oscar Klefbom            Unknown Player                                    10     0   3  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Logan Couture            Reilly Smith             Dominik Kubalik          50     0   0  5  
 2 Adrian Kempe             Alex Killorn             Sam Reinhart             50     0   0  5  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Oscar Klefbom            Unknown Player                                    50     0   0  5  
 2 Erik Cernak              Unknown Player                                    50     0   0  5  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Logan Couture            Alex Killorn             50     0   5  0  
 2 Unknown Player           Reilly Smith             50     0   5  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Oscar Klefbom            Unknown Player           50     0   5  0  
 2 Unknown Player           Erik Cernak              50     0   5  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Logan Couture                                     50     0   5  0  
 2 Unknown Player                                    50     0   5  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Oscar Klefbom            Unknown Player           50     0   5  0  
 2 Unknown Player           Erik Cernak              50     0   5  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Logan Couture            Alex Killorn             50     0   1  4  
 2 Adam Henrique            Dominik Kubalik          50     0   1  4  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Oscar Klefbom            Unknown Player           50     0   2  3  
 2 Erik Cernak              Unknown Player           50     0   2  3  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Logan Couture            Alex Killorn             Dominik Kubalik          Oscar Klefbom            Unknown Player           

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Logan Couture            Alex Killorn             Reilly Smith             Oscar Klefbom            Unknown Player           

<b>Goaltenders</b>
Starting : Unknown Goalie           
Backup : Troy Grosenick           

<b>Extra Forwards</b>
Normal : Sam Reinhart, Dominik Kubalik, Logan Couture - PP : Adrian Kempe, Alex Tuch - PK : Adrian Kempe
<b>Extra Defensemen</b>
Normal : Unknown Player, Unknown Player, Erik Cernak - PP : Unknown Player - PK : Unknown Player, Unknown Player
<b>Penalty Shots</b>
Danton Heinen, Logan Couture, Sam Reinhart, Reilly Smith, Dominik Kubalik
<b>Custom OT Lines Forwards</b>
Logan Couture, Sam Reinhart, Alex Killorn, Unknown Player, Reilly Smith, Dominik Kubalik, Adrian Kempe, Alex Tuch, Ryan Dzingel, Danton Heinen
<b>Custom OT Lines Defensemen</b>
Oscar Klefbom, Unknown Player, Unknown Player, Erik Cernak, Unknown Player

<b>Scratches</b>
Alex Goligoski (Healthy), Gage Quinney (Healthy)</pre></div>
<h1 class="TeamLinesPro_NYR"><a id="Rangers">Rangers</a></h1>
<b>Lines are Complete</b><br />
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
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Claude Giroux            Charlie Coyle            Jack Roslovic            35     1   2  2  
 2 Colin White              Artturi Lehkonen         Bobby Ryan               35     1   2  2  
 3 Robby Fabbri             Brad Richardson          Jesper Bratt             17     1   2  2  
 4 Frans Nielsen            Kyle Turris              Kyle Okposo              13     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Roman Josi               Brent Seabrook                                    40     1   2  2  
 2 John Marino              Matt Grzelcyk                                     30     1   2  2  
 3 Erik Gustafsson          Chad Ruhwedel                                     20     1   2  2  
 4 Roman Josi               Brent Seabrook                                    10     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Claude Giroux            Artturi Lehkonen         Jack Roslovic            60     1   2  2  
 2 Colin White              Charlie Coyle            Kyle Okposo              40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Roman Josi               Brent Seabrook                                    60     1   2  2  
 2 John Marino              Matt Grzelcyk                                     40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Charlie Coyle            Robby Fabbri             60     1   2  2  
 2 Brad Richardson          Artturi Lehkonen         40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Roman Josi               Brent Seabrook           60     1   2  2  
 2 John Marino              Matt Grzelcyk            40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Charlie Coyle                                     60     1   2  2  
 2 Jack Roslovic                                     40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Roman Josi               Brent Seabrook           60     1   2  2  
 2 John Marino              Matt Grzelcyk            40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Claude Giroux            Colin White              60     1   2  2  
 2 Jack Roslovic            Charlie Coyle            40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Roman Josi               Brent Seabrook           60     1   2  2  
 2 John Marino              Matt Grzelcyk            40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Claude Giroux            Charlie Coyle            Jack Roslovic            Roman Josi               Brent Seabrook           

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Claude Giroux            Charlie Coyle            Jack Roslovic            Roman Josi               Brent Seabrook           

<b>Goaltenders</b>
Starting : Jaroslav Halak           
Backup : Jean-Francois Berube     

<b>Extra Forwards</b>
Normal : Robby Fabbri, Colin White, Kyle Okposo - PP : Robby Fabbri, Colin White - PK : Robby Fabbri
<b>Extra Defensemen</b>
Normal : Matt Grzelcyk, Erik Gustafsson, Chad Ruhwedel - PP : Matt Grzelcyk - PK : Matt Grzelcyk, Erik Gustafsson
<b>Penalty Shots</b>
Claude Giroux, Charlie Coyle, Jesper Bratt, Jack Roslovic, Robby Fabbri
<b>Custom OT Lines Forwards</b>
Claude Giroux, Charlie Coyle, Jesper Bratt, Jack Roslovic, Robby Fabbri, Colin White, Kyle Okposo, Artturi Lehkonen, Bobby Ryan, Brad Richardson
<b>Custom OT Lines Defensemen</b>
Roman Josi, Brent Seabrook, John Marino, Matt Grzelcyk, Erik Gustafsson

<b>Scratches</b>
Luca Sbisa (Healthy), Mark Jankowski (Healthy), Melker Karlsson (Healthy)</pre></div>
<h1 class="TeamLinesPro_DET"><a id="RedWings">Red Wings</a></h1>
<b>Lines are Complete</b><br />
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
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Connor McDavid           Patrik Laine             Oliver Bjorkstrand       40     0   0  5  
 2 Brayden Point            Jared McCann             Nino Niederreiter        37     0   0  5  
 3 Teddy Blueger            Andrew Mangiapane        Owen Tippett             18     0   0  5  
 4 Zac Dalpe                Mackenzie MacEachern     Mathieu Joseph           5      0   5  0  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Mathew Dumba             Josh Manson                                       40     1   2  2  
 2 Jake McCabe              Torey Krug                                        40     1   2  2  
 3 Connor Clifton           Connor Carrick                                    20     1   4  0  
 4 Josh Manson              Connor Clifton                                    0      5   0  0  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Connor McDavid           Patrik Laine             Oliver Bjorkstrand       60     0   0  5  
 2 Brayden Point            Jared McCann             Nino Niederreiter        40     0   0  5  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Andrew Mangiapane        Torey Krug                                        65     0   0  5  
 2 Owen Tippett             Mathew Dumba                                      35     0   0  5  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Teddy Blueger            Mackenzie MacEachern     55     0   5  0  
 2 Zac Dalpe                Andrew Mangiapane        45     0   5  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Josh Manson              Connor Clifton           55     4   1  0  
 2 Mathew Dumba             Jake McCabe              45     0   5  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Teddy Blueger                                     75     0   5  0  
 2 Zac Dalpe                                         25     0   5  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Josh Manson              Connor Clifton           55     4   1  0  
 2 Mathew Dumba             Jake McCabe              45     0   5  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Connor McDavid           Nino Niederreiter        60     0   0  5  
 2 Brayden Point            Patrik Laine             40     0   0  5  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Josh Manson              Jake McCabe              60     0   5  0  
 2 Mathew Dumba             Torey Krug               40     0   2  3  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Connor McDavid           Nino Niederreiter        Brayden Point            Patrik Laine             Torey Krug               

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Teddy Blueger            Mackenzie MacEachern     Zac Dalpe                Josh Manson              Jake McCabe              

<b>Goaltenders</b>
Starting : Mike Smith               
Backup : Evan Fitzpatrick         

<b>Extra Forwards</b>
Normal : Nino Niederreiter, Connor McDavid, Andrew Mangiapane - PP : Nino Niederreiter, Andrew Mangiapane - PK : Jared McCann
<b>Extra Defensemen</b>
Normal : Jake McCabe, Mathew Dumba, Josh Manson - PP : Josh Manson - PK : Connor Carrick, Jake McCabe
<b>Penalty Shots</b>
Patrik Laine, Jared McCann, Connor McDavid, Brayden Point, Torey Krug
<b>Custom OT Lines Forwards</b>
Connor McDavid, Brayden Point, Patrik Laine, Nino Niederreiter, Oliver Bjorkstrand, Jared McCann, Andrew Mangiapane, Teddy Blueger, Owen Tippett, Mathieu Joseph
<b>Custom OT Lines Defensemen</b>
Mathew Dumba, Josh Manson, Jake McCabe, Connor Clifton, Connor Carrick

<b>Scratches</b>
Markus Nutivaara (Healthy)</pre></div>
<h1 class="TeamLinesPro_BUF"><a id="Sabres">Sabres</a></h1>
<b>Lines are Incomplete</b><br />
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
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Sidney Crosby            Teuvo Teravainen         David Pastrnak           40     0   2  3  
 2 Anze Kopitar             Anders Lee               Chris Kreider            30     0   2  3  
 3 Derek Grant              Zemgus Girgensons        Unknown Player           20     0   3  2  
 4 Unknown Player           Unknown Player           Zach Aston-Reese         10     0   4  1  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Ryan Suter               Michael Del Zotto                                 32     0   4  1  
 2 Rasmus Ristolainen       Unknown Player                                    32     0   4  1  
 3 Unknown Player           Unknown Player                                    26     0   5  0  
 4 Ryan Suter               Rasmus Ristolainen                                10     0   4  1  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Sidney Crosby            Teuvo Teravainen         David Pastrnak           60     0   0  5  
 2 Anze Kopitar             Anders Lee               Chris Kreider            40     0   0  5  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Ryan Suter               Rasmus Ristolainen                                70     0   2  3  
 2 Unknown Player           Michael Del Zotto                                 30     0   2  3  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Derek Grant              Zach Aston-Reese         70     0   5  0  
 2 Anze Kopitar             Zemgus Girgensons        30     0   5  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Ryan Suter               Unknown Player           50     0   5  0  
 2 Rasmus Ristolainen       Unknown Player           50     0   5  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Zach Aston-Reese                                  60     0   5  0  
 2 Derek Grant                                       40     0   5  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Ryan Suter               Unknown Player           50     0   5  0  
 2 Unknown Player           Rasmus Ristolainen       50     0   5  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Sidney Crosby            David Pastrnak           60     0   2  3  
 2 Anze Kopitar             Chris Kreider            40     0   2  3  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Ryan Suter               Rasmus Ristolainen       65     0   4  1  
 2 Michael Del Zotto        Unknown Player           35     0   4  1  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Sidney Crosby            Chris Kreider            David Pastrnak           Ryan Suter               Rasmus Ristolainen       

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Anze Kopitar             Derek Grant              Zach Aston-Reese         Ryan Suter               Unknown Player           

<b>Goaltenders</b>
Starting : Thomas Greiss            
Backup : Unknown Goalie           

<b>Extra Forwards</b>
Normal : Sidney Crosby, Anze Kopitar, David Pastrnak - PP : Anze Kopitar, David Pastrnak - PK : Anze Kopitar
<b>Extra Defensemen</b>
Normal : Ryan Suter, Unknown Player, Michael Del Zotto - PP : Ryan Suter - PK : Unknown Player, Ryan Suter
<b>Penalty Shots</b>
Chris Kreider, Anze Kopitar, Sidney Crosby, David Pastrnak, Teuvo Teravainen
<b>Custom OT Lines Forwards</b>
Sidney Crosby, Anze Kopitar, David Pastrnak, Chris Kreider, Teuvo Teravainen, Anders Lee, Derek Grant, Zemgus Girgensons, Unknown Player, Unknown Player
<b>Custom OT Lines Defensemen</b>
Ryan Suter, Rasmus Ristolainen, Unknown Player, Unknown Player, Michael Del Zotto

<b>Scratches</b>
Dakota Mermis (Healthy), Trevor Moore (Healthy), Robert Hagg (Healthy)</pre></div>
<h1 class="TeamLinesPro_OTT"><a id="Senators">Senators</a></h1>
<b>Lines are Complete</b><br />
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
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Jason Spezza             Gustav Nyquist           Pavel Buchnevich         35     0   2  3  
 2 J.T. Compher             Artem Anisimov           Michael Bunting          35     0   2  3  
 3 Joel Kellman             Brett Connolly           Patrick Marleau          20     1   3  1  
 4 Blaine Byron             James Neal               William Carrier          10     2   3  0  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Mark Giordano            Will Butcher                                      35     0   3  2  
 2 Jan Rutta                Radim Simek                                       35     0   3  2  
 3 Dylan McIlrath           Jordan Gross                                      20     2   3  0  
 4 Radim Simek              Mark Giordano                                     10     1   4  0  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Jason Spezza             Gustav Nyquist           Pavel Buchnevich         60     0   1  4  
 2 J.T. Compher             Artem Anisimov           Michael Bunting          40     0   2  3  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Mark Giordano            Will Butcher                                      60     0   2  3  
 2 Radim Simek              Jan Rutta                                         40     0   3  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Joel Kellman             Patrick Marleau          55     2   3  0  
 2 Blaine Byron             Artem Anisimov           45     2   3  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Radim Simek              Jan Rutta                55     1   4  0  
 2 Dylan McIlrath           Jordan Gross             45     1   4  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Blaine Byron                                      50     1   4  0  
 2 Joel Kellman                                      50     1   4  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Jan Rutta                Radim Simek              50     1   4  0  
 2 Mark Giordano            Dylan McIlrath           50     1   4  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Jason Spezza             Pavel Buchnevich         50     1   2  2  
 2 J.T. Compher             Gustav Nyquist           50     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Mark Giordano            Will Butcher             60     1   2  2  
 2 Radim Simek              Jan Rutta                40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Jason Spezza             Gustav Nyquist           Pavel Buchnevich         Mark Giordano            Will Butcher             

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   J.T. Compher             Pavel Buchnevich         Gustav Nyquist           Mark Giordano            Dylan McIlrath           

<b>Goaltenders</b>
Starting : Jake Allen               
Backup : Max Lagace               

<b>Extra Forwards</b>
Normal : Gustav Nyquist, Pavel Buchnevich, Jason Spezza - PP : Gustav Nyquist, Pavel Buchnevich - PK : J.T. Compher
<b>Extra Defensemen</b>
Normal : Mark Giordano, Will Butcher, Radim Simek - PP : Mark Giordano - PK : Radim Simek, Mark Giordano
<b>Penalty Shots</b>
Mark Giordano, Jason Spezza, Joel Kellman, Gustav Nyquist, James Neal
<b>Custom OT Lines Forwards</b>
Gustav Nyquist, Pavel Buchnevich, J.T. Compher, Jason Spezza, Michael Bunting, Brett Connolly, James Neal, Patrick Marleau, Artem Anisimov, Joel Kellman
<b>Custom OT Lines Defensemen</b>
Mark Giordano, Will Butcher, Radim Simek, Jan Rutta, Jordan Gross

<b>Scratches</b>
Devin Shore (Healthy)</pre></div>
<h1 class="TeamLinesPro_SJS"><a id="Sharks">Sharks</a></h1>
<b>Lines are Incomplete</b><br />
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
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Aleksander Barkov        Filip Forsberg           Jakub Vrana              40     1   2  2  
 2 Evgeny Kuznetsov         Warren Foegele           Robert Thomas            30     1   2  2  
 3 Mattias Janmark          Mats Zuccarello          Garnet Hathaway          20     1   2  2  
 4 Unknown Player           Adam Helewka             Zack Kassian             10     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Kris Letang              Joel Edmundson                                    40     1   2  2  
 2 Jared Spurgeon           Mario Ferraro                                     30     1   2  2  
 3 T.J. Brodie              Unknown Player                                    20     1   2  2  
 4 Joel Edmundson           Jared Spurgeon                                    10     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Aleksander Barkov        Zack Kassian             Jakub Vrana              60     1   2  2  
 2 Evgeny Kuznetsov         Mats Zuccarello          Robert Thomas            40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Mario Ferraro            Jared Spurgeon                                    60     1   2  2  
 2 Unknown Player           T.J. Brodie                                       40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Jakub Vrana              Robert Thomas            60     1   2  2  
 2 Mats Zuccarello          Zack Kassian             40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Mario Ferraro            Jared Spurgeon           60     1   2  2  
 2 T.J. Brodie              Unknown Player           40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Jakub Vrana                                       60     1   2  2  
 2 Robert Thomas                                     40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 T.J. Brodie              Jared Spurgeon           60     1   2  2  
 2 Mario Ferraro            Unknown Player           40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Robert Thomas            Zack Kassian             60     1   2  2  
 2 Mats Zuccarello          Jakub Vrana              40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Mario Ferraro            Jared Spurgeon           60     1   2  2  
 2 T.J. Brodie              Unknown Player           40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Aleksander Barkov        Filip Forsberg           Jakub Vrana              Joel Edmundson           Jared Spurgeon           

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Evgeny Kuznetsov         Mats Zuccarello          Warren Foegele           Joel Edmundson           Jared Spurgeon           

<b>Goaltenders</b>
Starting : Unknown Goalie           
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
Joel Edmundson, Jared Spurgeon, Mario Ferraro, Unknown Player, T.J. Brodie

<b>Scratches</b>
Gustav Forsling (Healthy), Joe Thornton (Healthy), Eric Comrie (Healthy)</pre></div>
<h1 class="TeamLinesPro_DAL"><a id="Stars">Stars</a></h1>
<b>Lines are Complete</b><br />
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
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Patrice Bergeron         Max Pacioretty           Patrick Kane             37     0   2  3  
 2 Jeff Carter              Jonathan Marchessault    Anthony Mantha           28     0   1  4  
 3 Johan Larsson            Colton Sceviour          Josh Archibald           23     0   3  2  
 4 Curtis Lazar             Jayson Megna             Nicolas Deslauriers      12     0   4  1  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Ryan Ellis               Brandon Montour                                   40     0   3  2  
 2 Nikita Zadorov           Radko Gudas                                       38     0   4  1  
 3 Jordie Benn              Brandon Davidson                                  14     1   3  1  
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
 1 Curtis Lazar             Colton Sceviour          60     1   3  1  
 2 Johan Larsson            Josh Archibald           40     1   3  1  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Ryan Ellis               Radko Gudas              60     1   4  0  
 2 Nikita Zadorov           Brandon Montour          40     1   4  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Johan Larsson                                     60     0   3  2  
 2 Colton Sceviour                                   40     0   3  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Nikita Zadorov           Brandon Montour          60     0   3  2  
 2 Jordie Benn              Brandon Davidson         40     0   3  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Patrice Bergeron         Patrick Kane             60     1   2  2  
 2 Johan Larsson            Anthony Mantha           40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Jordie Benn              Brandon Davidson         52     1   2  2  
 2 Ryan Ellis               Brandon Montour          48     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Patrice Bergeron         Max Pacioretty           Patrick Kane             Ryan Ellis               Nikita Zadorov           

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Johan Larsson            Colton Sceviour          Josh Archibald           Ryan Ellis               Radko Gudas              

<b>Goaltenders</b>
Starting : Cam Talbot               
Backup : Jonathan Quick           

<b>Extra Forwards</b>
Normal : Anthony Mantha, Jonathan Marchessault, Patrick Kane - PP : Josh Archibald, Colton Sceviour - PK : Patrice Bergeron
<b>Extra Defensemen</b>
Normal : Ryan Ellis, Radko Gudas, Jordie Benn - PP : Radko Gudas - PK : Ryan Ellis, Radko Gudas
<b>Penalty Shots</b>
Patrick Kane, Anthony Mantha, Jayson Megna, Ryan Ellis, Brandon Montour
<b>Custom OT Lines Forwards</b>
Patrice Bergeron, Patrick Kane, Jeff Carter, Jonathan Marchessault, Max Pacioretty, Anthony Mantha, Colton Sceviour, Johan Larsson, Curtis Lazar, Josh Archibald
<b>Custom OT Lines Defensemen</b>
Ryan Ellis, Brandon Montour, Jordie Benn, Nikita Zadorov, Radko Gudas

<b>Scratches</b>
Mark Letestu (Healthy)</pre></div>
<h1 class="TeamLinesPro_MIN"><a id="Wild">Wild</a></h1>
<b>Lines are Complete</b><br />
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
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Matt Duchene             Conor Garland            Victor Olofsson          27     0   2  3  
 2 Sam Carrick              Tim Stutzle              Marcus Foligno           27     0   2  3  
 3 Connor Bunnaman          Alex Formenton           Sam Lafferty             27     0   3  2  
 4 Brandon Pirri            Rocco Grimaldi           Ondrej Kase              19     0   3  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Adam Fox                 Tyler Myers                                       30     0   4  1  
 2 Mikhail Sergachev        Tyson Barrie                                      30     0   4  1  
 3 Marc Staal               Steven Kampfer                                    30     0   4  1  
 4 Adam Fox                 Tyler Myers                                       10     0   4  1  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Matt Duchene             Conor Garland            Victor Olofsson          50     0   0  5  
 2 Sam Carrick              Tim Stutzle              Marcus Foligno           50     0   0  5  

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
 2 Marc Staal               Steven Kampfer           50     0   5  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Alex Formenton                                    50     0   5  0  
 2 Marcus Foligno                                    50     0   5  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Adam Fox                 Tyler Myers              50     0   5  0  
 2 Marc Staal               Steven Kampfer           50     0   5  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Matt Duchene             Conor Garland            50     0   2  3  
 2 Tim Stutzle              Victor Olofsson          50     0   2  3  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Adam Fox                 Tyler Myers              50     0   4  1  
 2 Mikhail Sergachev        Tyson Barrie             50     0   4  1  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Matt Duchene             Conor Garland            Victor Olofsson          Adam Fox                 Tyson Barrie             

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
Conor Garland, Marcus Foligno, Matt Duchene, Victor Olofsson, Tim Stutzle
<b>Custom OT Lines Forwards</b>
Conor Garland, Marcus Foligno, Matt Duchene, Victor Olofsson, Tim Stutzle, Alex Formenton, Sam Carrick, Rocco Grimaldi, Brandon Pirri, Ondrej Kase
<b>Custom OT Lines Defensemen</b>
Adam Fox, Tyler Myers, Mikhail Sergachev, Tyson Barrie, Marc Staal

<b>Scratches</b>
Troy Brouwer (Healthy)</pre></div>
<?php include "Footer.php";?>
