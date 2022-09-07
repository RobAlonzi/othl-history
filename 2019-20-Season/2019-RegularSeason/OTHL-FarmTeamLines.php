<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<title>OTHL - Farm Team Lines</title>
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
<div class="STHSTopLink"><a id="STHSRosterTop"></a> <a href="#Eagles">Eagles</a> | <a href="#IceHogs">IceHogs</a> | <a href="#Monsters">Monsters</a> | <a href="#Rampage">Rampage </a> | <a href="#Bruins">Bruins</a> | <a href="#Rocket">Rocket</a> | <a href="#Comets">Comets</a> | <a href="#Bears">Bears</a> | <a href="#Roadrunners">Roadrunners</a> | <a href="#Devils">Devils</a> | <a href="#Gulls">Gulls</a> | <a href="#Heat">Heat</a> | <a href="#Phantoms">Phantoms</a> | <a href="#Wolves">Wolves</a> | <a href="#Checkers">Checkers</a> | <a href="#SoundTigers">Sound Tigers</a> | <a href="#Moose">Moose</a> | <a href="#Reign">Reign</a> | <a href="#Crunch">Crunch</a> | <a href="#Marlies">Marlies</a> | <a href="#Condors">Condors</a> | <a href="#Thunderbirds">Thunderbirds</a> | <a href="#Penguins">Penguins</a> | <a href="#Admirals">Admirals</a> | <a href="#WolfPack">Wolf Pack</a> | <a href="#Griffins">Griffins</a> | <a href="#Americans"> Americans</a> | <a href="#Senators">Senators</a> | <a href="#Barracudas">Barracudas</a> | <a href="#Stars">Stars</a> | <a href="#Wild">Wild</a> | <a href="javascript:STHS_JS_CloseAll('');">Close All Team View</a> | <a href="javascript:STHS_JS_OpenAll('');">Open All Team View</a>
</div>
<h1 class="TeamLineFarm_COL"><a id="Eagles">Eagles</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=8">Avalanche Page</a> ]
[ <a href="OTHL-ProTeamRoster.php#Avalanche">Pro Team Roster</a> ]
[ <a href="OTHL-FarmTeamScoring.php#Eagles">Farm Team Scoring</a> ]
[ <a href="OTHL-FarmTeamLines.php#Eagles">Farm Team Lines</a> ]
[ <a href="OTHL-FarmTeamSchedule.php#Eagles">Farm Team Schedule</a> ]
[ <a href="OTHL-FarmTeamStats.php#Eagles">Farm Team Stats</a> ]
[ <a href="OTHL-FarmTeamStatsVS.php#Eagles">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Eagles');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Eagles" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           Unknown Player           40     1   2  2  
 2 Unknown Player           Unknown Player           Unknown Player           30     1   2  2  
 3 Unknown Player           Unknown Player           Unknown Player           20     1   2  2  
 4 Unknown Player           Unknown Player           Unknown Player           10     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player                                    40     1   2  2  
 2 Unknown Player           Unknown Player                                    30     1   2  2  
 3 Unknown Player           Unknown Player                                    20     1   2  2  
 4 Unknown Player           Unknown Player                                    10     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           Unknown Player           60     1   2  2  
 2 Unknown Player           Unknown Player           Unknown Player           40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player                                    60     1   2  2  
 2 Unknown Player           Unknown Player                                    40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           60     1   2  2  
 2 Unknown Player           Unknown Player           40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           60     1   2  2  
 2 Unknown Player           Unknown Player           40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Unknown Player                                    60     1   2  2  
 2 Unknown Player                                    40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           60     1   2  2  
 2 Unknown Player           Unknown Player           40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           60     1   2  2  
 2 Unknown Player           Unknown Player           40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           60     1   2  2  
 2 Unknown Player           Unknown Player           40     1   2  2  

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

<b>Scratches</b>
None
</pre></div>
<h1 class="TeamLineFarm_RCK"><a id="IceHogs">IceHogs</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=7">Blackhawks Page</a> ]
[ <a href="OTHL-ProTeamRoster.php#Blackhawks">Pro Team Roster</a> ]
[ <a href="OTHL-FarmTeamScoring.php#IceHogs">Farm Team Scoring</a> ]
[ <a href="OTHL-FarmTeamLines.php#IceHogs">Farm Team Lines</a> ]
[ <a href="OTHL-FarmTeamSchedule.php#IceHogs">Farm Team Schedule</a> ]
[ <a href="OTHL-FarmTeamStats.php#IceHogs">Farm Team Stats</a> ]
[ <a href="OTHL-FarmTeamStatsVS.php#IceHogs">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_IceHogs');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_IceHogs" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Joseph Blandisi          Adam Erne                Austin Czarnik           40     1   2  2  
 2 Logan Brown              Kiefer Sherwood          Peter Cehlarik           30     1   2  2  
 3 Griffen Molino           Valentin Zykov           Max Veronneau            20     1   2  2  
 4 Adam Erne                Joseph Blandisi          Logan Brown              10     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Matt Tennyson            Cameron Schilling                                 40     1   2  2  
 2 Matt Bartkowski          Justin Holl                                       30     1   2  2  
 3 Unknown Player           Unknown Player                                    20     1   2  2  
 4 Matt Tennyson            Cameron Schilling                                 10     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Joseph Blandisi          Adam Erne                Austin Czarnik           60     1   2  2  
 2 Logan Brown              Kiefer Sherwood          Peter Cehlarik           40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Matt Tennyson            Cameron Schilling                                 60     1   2  2  
 2 Matt Bartkowski          Justin Holl                                       40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Adam Erne                Joseph Blandisi          60     1   2  2  
 2 Logan Brown              Austin Czarnik           40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Matt Tennyson            Cameron Schilling        60     1   2  2  
 2 Matt Bartkowski          Justin Holl              40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Adam Erne                                         60     1   2  2  
 2 Joseph Blandisi                                   40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Matt Tennyson            Cameron Schilling        60     1   2  2  
 2 Matt Bartkowski          Justin Holl              40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Adam Erne                Joseph Blandisi          60     1   2  2  
 2 Logan Brown              Austin Czarnik           40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Matt Tennyson            Cameron Schilling        60     1   2  2  
 2 Matt Bartkowski          Justin Holl              40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Joseph Blandisi          Adam Erne                Austin Czarnik           Matt Tennyson            Cameron Schilling        

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Joseph Blandisi          Adam Erne                Austin Czarnik           Matt Tennyson            Cameron Schilling        

<b>Goaltenders</b>
Starting : Al Montoya               
Backup : Unknown Goalie           

<b>Extra Forwards</b>
Normal : Valentin Zykov, Max Veronneau, Griffen Molino - PP : Valentin Zykov, Max Veronneau - PK : Griffen Molino
<b>Extra Defensemen</b>
Normal : Matt Bartkowski, Justin Holl, Matt Tennyson - PP : Matt Bartkowski - PK : Justin Holl, Matt Tennyson
<b>Penalty Shots</b>
Adam Erne, Joseph Blandisi, Logan Brown, Austin Czarnik, Kiefer Sherwood

<b>Scratches</b>
None
</pre></div>
<h1 class="TeamLineFarm_CLE"><a id="Monsters">Monsters</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=9">Blue Jackets Page</a> ]
[ <a href="OTHL-ProTeamRoster.php#BlueJackets">Pro Team Roster</a> ]
[ <a href="OTHL-FarmTeamScoring.php#Monsters">Farm Team Scoring</a> ]
[ <a href="OTHL-FarmTeamLines.php#Monsters">Farm Team Lines</a> ]
[ <a href="OTHL-FarmTeamSchedule.php#Monsters">Farm Team Schedule</a> ]
[ <a href="OTHL-FarmTeamStats.php#Monsters">Farm Team Stats</a> ]
[ <a href="OTHL-FarmTeamStatsVS.php#Monsters">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Monsters');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Monsters" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Unknown Player           Patrick Russell          Unknown Player           40     1   2  2  
 2 T.J. Tynan               Phillip Di Giuseppe      Jack Rodewald            30     1   2  2  
 3 Frederick Gaudreau       Giovanni Fiore           Rourke Chartier          20     1   2  2  
 4 Rourke Chartier          Hunter Shinkaruk         Unknown Player           10     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Dion Phaneuf             Josh Brown                                        40     1   2  2  
 2 Tommy Cross              Erik Burgdoerfer                                  30     1   2  2  
 3 Evan McEneny             Sami Niku                                         20     1   2  2  
 4 Dion Phaneuf             Josh Brown                                        10     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Unknown Player           Patrick Russell          Unknown Player           60     1   2  2  
 2 T.J. Tynan               Phillip Di Giuseppe      Jack Rodewald            40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Dion Phaneuf             Josh Brown                                        60     1   2  2  
 2 Tommy Cross              Erik Burgdoerfer                                  40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           60     1   2  2  
 2 T.J. Tynan               Jack Rodewald            40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Dion Phaneuf             Josh Brown               60     1   2  2  
 2 Tommy Cross              Erik Burgdoerfer         40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Unknown Player                                    60     1   2  2  
 2 Unknown Player                                    40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Dion Phaneuf             Josh Brown               60     1   2  2  
 2 Tommy Cross              Erik Burgdoerfer         40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           60     1   2  2  
 2 T.J. Tynan               Jack Rodewald            40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Dion Phaneuf             Josh Brown               60     1   2  2  
 2 Tommy Cross              Erik Burgdoerfer         40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Unknown Player           Patrick Russell          Unknown Player           Dion Phaneuf             Josh Brown               

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Unknown Player           Patrick Russell          Unknown Player           Dion Phaneuf             Josh Brown               

<b>Goaltenders</b>
Starting : Brad Thiessen            
Backup : Adam Wilcox              

<b>Extra Forwards</b>
Normal : Frederick Gaudreau, Giovanni Fiore, Hunter Shinkaruk - PP : Frederick Gaudreau, Giovanni Fiore - PK : Hunter Shinkaruk
<b>Extra Defensemen</b>
Normal : Evan McEneny, Sami Niku, Tommy Cross - PP : Evan McEneny - PK : Sami Niku, Tommy Cross
<b>Penalty Shots</b>
Unknown Player, Unknown Player, T.J. Tynan, Jack Rodewald, Patrick Russell

<b>Scratches</b>
None
</pre></div>
<h1 class="TeamLineFarm_SAR"><a id="Rampage">Rampage </a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=25">Blues Page</a> ]
[ <a href="OTHL-ProTeamRoster.php#Blues">Pro Team Roster</a> ]
[ <a href="OTHL-FarmTeamScoring.php#Rampage">Farm Team Scoring</a> ]
[ <a href="OTHL-FarmTeamLines.php#Rampage">Farm Team Lines</a> ]
[ <a href="OTHL-FarmTeamSchedule.php#Rampage">Farm Team Schedule</a> ]
[ <a href="OTHL-FarmTeamStats.php#Rampage">Farm Team Stats</a> ]
[ <a href="OTHL-FarmTeamStatsVS.php#Rampage">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Rampage');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Rampage" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           Unknown Player           40     1   2  2  
 2 Unknown Player           Unknown Player           Luke Gazdic              30     1   2  2  
 3 Unknown Player           Unknown Player           Unknown Player           20     1   2  2  
 4 Unknown Player           Unknown Player           Unknown Player           10     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player                                    40     1   2  2  
 2 Unknown Player           Unknown Player                                    30     1   2  2  
 3 Unknown Player           Unknown Player                                    20     1   2  2  
 4 Unknown Player           Unknown Player                                    10     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           Unknown Player           60     1   2  2  
 2 Unknown Player           Unknown Player           Luke Gazdic              40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player                                    60     1   2  2  
 2 Unknown Player           Unknown Player                                    40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           60     1   2  2  
 2 Unknown Player           Unknown Player           40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           60     1   2  2  
 2 Unknown Player           Unknown Player           40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Unknown Player                                    60     1   2  2  
 2 Unknown Player                                    40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           60     1   2  2  
 2 Unknown Player           Unknown Player           40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           60     1   2  2  
 2 Unknown Player           Unknown Player           40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           60     1   2  2  
 2 Unknown Player           Unknown Player           40     1   2  2  

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
Normal : Unknown Player, Luke Gazdic, Unknown Player - PP : Unknown Player, Luke Gazdic - PK : Unknown Player
<b>Extra Defensemen</b>
Normal : Unknown Player, Unknown Player, Unknown Player - PP : Unknown Player - PK : Unknown Player, Unknown Player
<b>Penalty Shots</b>
Unknown Player, Unknown Player, Unknown Player, Unknown Player, Luke Gazdic

<b>Scratches</b>
None
</pre></div>
<h1 class="TeamLineFarm_PRO"><a id="Bruins">Bruins</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=3">Bruins Page</a> ]
[ <a href="OTHL-ProTeamRoster.php#Bruins">Pro Team Roster</a> ]
[ <a href="OTHL-FarmTeamScoring.php#Bruins">Farm Team Scoring</a> ]
[ <a href="OTHL-FarmTeamLines.php#Bruins">Farm Team Lines</a> ]
[ <a href="OTHL-FarmTeamSchedule.php#Bruins">Farm Team Schedule</a> ]
[ <a href="OTHL-FarmTeamStats.php#Bruins">Farm Team Stats</a> ]
[ <a href="OTHL-FarmTeamStatsVS.php#Bruins">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Bruins');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Bruins" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Anthony Angello          Brendan Perlini          Kole Sherwood            40     1   2  2  
 2 Unknown Player           Nathan Walker            Justin Auger             30     1   2  2  
 3 Unknown Player           Unknown Player           Unknown Player           20     1   2  2  
 4 Brendan Perlini          Nathan Walker            Anthony Angello          10     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Unknown Player           Jaycob Megna                                      40     1   2  2  
 2 Gustav Olofsson          Chris Bigras                                      30     1   2  2  
 3 Jake Dotchin             Vladislav Gavrikov                                20     1   2  2  
 4 Unknown Player           Jaycob Megna                                      10     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Anthony Angello          Brendan Perlini          Kole Sherwood            60     1   2  2  
 2 Unknown Player           Nathan Walker            Justin Auger             40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Unknown Player           Jaycob Megna                                      60     1   2  2  
 2 Gustav Olofsson          Chris Bigras                                      40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Brendan Perlini          Nathan Walker            60     1   2  2  
 2 Anthony Angello          Kole Sherwood            40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Unknown Player           Jaycob Megna             60     1   2  2  
 2 Gustav Olofsson          Chris Bigras             40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Brendan Perlini                                   60     1   2  2  
 2 Nathan Walker                                     40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Unknown Player           Jaycob Megna             60     1   2  2  
 2 Gustav Olofsson          Chris Bigras             40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Brendan Perlini          Nathan Walker            60     1   2  2  
 2 Anthony Angello          Kole Sherwood            40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Unknown Player           Jaycob Megna             60     1   2  2  
 2 Gustav Olofsson          Chris Bigras             40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Anthony Angello          Brendan Perlini          Kole Sherwood            Unknown Player           Jaycob Megna             

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Anthony Angello          Brendan Perlini          Kole Sherwood            Unknown Player           Jaycob Megna             

<b>Goaltenders</b>
Starting : Unknown Goalie           
Backup : Unknown Goalie           

<b>Extra Forwards</b>
Normal : Justin Auger, Kole Sherwood, Anthony Angello - PP : Justin Auger, Kole Sherwood - PK : Anthony Angello
<b>Extra Defensemen</b>
Normal : Jake Dotchin, Vladislav Gavrikov, Gustav Olofsson - PP : Jake Dotchin - PK : Vladislav Gavrikov, Gustav Olofsson
<b>Penalty Shots</b>
Brendan Perlini, Nathan Walker, Anthony Angello, Kole Sherwood, Justin Auger

<b>Scratches</b>
None
</pre></div>
<h1 class="TeamLineFarm_LAV"><a id="Rocket">Rocket</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=16">Canadiens Page</a> ]
[ <a href="OTHL-ProTeamRoster.php#Canadiens">Pro Team Roster</a> ]
[ <a href="OTHL-FarmTeamScoring.php#Rocket">Farm Team Scoring</a> ]
[ <a href="OTHL-FarmTeamLines.php#Rocket">Farm Team Lines</a> ]
[ <a href="OTHL-FarmTeamSchedule.php#Rocket">Farm Team Schedule</a> ]
[ <a href="OTHL-FarmTeamStats.php#Rocket">Farm Team Stats</a> ]
[ <a href="OTHL-FarmTeamStatsVS.php#Rocket">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Rocket');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Rocket" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Henrik Borgstrom         Curtis McKenzie          Jonny Brodzinski         40     1   2  2  
 2 Kalle Kossila            Vladislav Kamenev        Matt Luff                30     1   2  2  
 3 Adam Tambellini          Sheldon Rempal           Austen Brassard          20     1   2  2  
 4 Curtis McKenzie          Ryan Lomberg             Alex Schoenborn          10     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Jacob MacDonald          Brian Lashoff                                     40     1   2  2  
 2 T.J. Brennan             Michael Kapla                                     30     1   2  2  
 3 Ryan Lomberg             Alex Schoenborn                                   20     1   2  2  
 4 Jacob MacDonald          Brian Lashoff                                     10     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Henrik Borgstrom         Curtis McKenzie          Jonny Brodzinski         60     1   2  2  
 2 Kalle Kossila            Vladislav Kamenev        Matt Luff                40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Jacob MacDonald          Brian Lashoff                                     60     1   2  2  
 2 T.J. Brennan             Michael Kapla                                     40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Curtis McKenzie          Henrik Borgstrom         60     1   2  2  
 2 Kalle Kossila            Adam Tambellini          40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Jacob MacDonald          Brian Lashoff            60     1   2  2  
 2 T.J. Brennan             Michael Kapla            40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Curtis McKenzie                                   60     1   2  2  
 2 Henrik Borgstrom                                  40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Jacob MacDonald          Brian Lashoff            60     1   2  2  
 2 T.J. Brennan             Michael Kapla            40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Curtis McKenzie          Henrik Borgstrom         60     1   2  2  
 2 Kalle Kossila            Adam Tambellini          40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Jacob MacDonald          Brian Lashoff            60     1   2  2  
 2 T.J. Brennan             Michael Kapla            40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Henrik Borgstrom         Curtis McKenzie          Jonny Brodzinski         Jacob MacDonald          Brian Lashoff            

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Henrik Borgstrom         Curtis McKenzie          Jonny Brodzinski         Jacob MacDonald          Brian Lashoff            

<b>Goaltenders</b>
Starting : Alex Nedeljkovic         
Backup : Chad Johnson             

<b>Extra Forwards</b>
Normal : Sheldon Rempal, Austen Brassard, Vladislav Kamenev - PP : Sheldon Rempal, Austen Brassard - PK : Vladislav Kamenev
<b>Extra Defensemen</b>
Normal : T.J. Brennan, Michael Kapla, Jacob MacDonald - PP : T.J. Brennan - PK : Michael Kapla, Jacob MacDonald
<b>Penalty Shots</b>
Curtis McKenzie, Henrik Borgstrom, Kalle Kossila, Adam Tambellini, Vladislav Kamenev

<b>Scratches</b>
None
</pre></div>
<h1 class="TeamLineFarm_UTI"><a id="Comets">Comets</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=29">Canucks Page</a> ]
[ <a href="OTHL-ProTeamRoster.php#Canucks">Pro Team Roster</a> ]
[ <a href="OTHL-FarmTeamScoring.php#Comets">Farm Team Scoring</a> ]
[ <a href="OTHL-FarmTeamLines.php#Comets">Farm Team Lines</a> ]
[ <a href="OTHL-FarmTeamSchedule.php#Comets">Farm Team Schedule</a> ]
[ <a href="OTHL-FarmTeamStats.php#Comets">Farm Team Stats</a> ]
[ <a href="OTHL-FarmTeamStatsVS.php#Comets">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Comets');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Comets" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Gabriel Dumont           Chris Terry              Joshua Ho-Sang           40     1   2  2  
 2 Unknown Player           Jamie McGinn             Valeri Nichushkin        30     1   2  2  
 3 Joel L'Esperance         Rudolfs Balcers          Logan O'Connor           20     1   2  2  
 4 Nic Petan                Matt Lorito              Chris Terry              10     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Unknown Player           Haydn Fleury                                      40     1   2  2  
 2 Ben Gleason              Jacob Middleton                                   30     1   2  2  
 3 Brogan Rafferty          Nic Petan                                         20     1   2  2  
 4 Unknown Player           Haydn Fleury                                      10     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Gabriel Dumont           Chris Terry              Joshua Ho-Sang           60     1   2  2  
 2 Unknown Player           Jamie McGinn             Valeri Nichushkin        40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Unknown Player           Haydn Fleury                                      60     1   2  2  
 2 Ben Gleason              Jacob Middleton                                   40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Chris Terry              Jamie McGinn             60     1   2  2  
 2 Joshua Ho-Sang           Valeri Nichushkin        40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Unknown Player           Haydn Fleury             60     1   2  2  
 2 Ben Gleason              Jacob Middleton          40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Chris Terry                                       60     1   2  2  
 2 Jamie McGinn                                      40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Unknown Player           Haydn Fleury             60     1   2  2  
 2 Ben Gleason              Jacob Middleton          40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Chris Terry              Jamie McGinn             60     1   2  2  
 2 Joshua Ho-Sang           Valeri Nichushkin        40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Unknown Player           Haydn Fleury             60     1   2  2  
 2 Ben Gleason              Jacob Middleton          40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Gabriel Dumont           Chris Terry              Joshua Ho-Sang           Unknown Player           Haydn Fleury             

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Gabriel Dumont           Chris Terry              Joshua Ho-Sang           Unknown Player           Haydn Fleury             

<b>Goaltenders</b>
Starting : Cory Schneider           
Backup : Landon Bow               

<b>Extra Forwards</b>
Normal : Rudolfs Balcers, Logan O'Connor, Joel L'Esperance - PP : Rudolfs Balcers, Logan O'Connor - PK : Joel L'Esperance
<b>Extra Defensemen</b>
Normal : Brogan Rafferty, Ben Gleason, Jacob Middleton - PP : Brogan Rafferty - PK : Ben Gleason, Jacob Middleton
<b>Penalty Shots</b>
Chris Terry, Jamie McGinn, Joshua Ho-Sang, Valeri Nichushkin, Gabriel Dumont

<b>Scratches</b>
Brett Seney (Healthy), Anton Blidh (Healthy), Danick Martel (Healthy), Steven Fogarty (Healthy), J.T. Brown (Healthy)
Hunter Miska (Healthy)</pre></div>
<h1 class="TeamLineFarm_HER"><a id="Bears">Bears</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=30">Capitals Page</a> ]
[ <a href="OTHL-ProTeamRoster.php#Capitals">Pro Team Roster</a> ]
[ <a href="OTHL-FarmTeamScoring.php#Bears">Farm Team Scoring</a> ]
[ <a href="OTHL-FarmTeamLines.php#Bears">Farm Team Lines</a> ]
[ <a href="OTHL-FarmTeamSchedule.php#Bears">Farm Team Schedule</a> ]
[ <a href="OTHL-FarmTeamStats.php#Bears">Farm Team Stats</a> ]
[ <a href="OTHL-FarmTeamStatsVS.php#Bears">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Bears');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Bears" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Matthew Peca             Laurent Dauphin          Unknown Player           40     1   2  2  
 2 Blake Lizotte            A.J. Greer               Unknown Player           30     1   2  2  
 3 Unknown Player           Unknown Player           Unknown Player           20     1   2  2  
 4 Matthew Peca             Laurent Dauphin          Unknown Player           10     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Unknown Player           Steven Kampfer                                    40     1   2  2  
 2 Andrew Campbell          Unknown Player                                    30     1   2  2  
 3 Unknown Player           Unknown Player                                    20     1   2  2  
 4 Unknown Player           Steven Kampfer                                    10     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Matthew Peca             Laurent Dauphin          Unknown Player           60     1   2  2  
 2 Blake Lizotte            A.J. Greer               Unknown Player           40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Unknown Player           Steven Kampfer                                    60     1   2  2  
 2 Andrew Campbell          Unknown Player                                    40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Matthew Peca             Laurent Dauphin          60     1   2  2  
 2 A.J. Greer               Blake Lizotte            40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Unknown Player           Steven Kampfer           60     1   2  2  
 2 Andrew Campbell          Unknown Player           40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Matthew Peca                                      60     1   2  2  
 2 Laurent Dauphin                                   40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Unknown Player           Steven Kampfer           60     1   2  2  
 2 Andrew Campbell          Unknown Player           40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Matthew Peca             Laurent Dauphin          60     1   2  2  
 2 A.J. Greer               Blake Lizotte            40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Unknown Player           Steven Kampfer           60     1   2  2  
 2 Andrew Campbell          Unknown Player           40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Matthew Peca             Laurent Dauphin          Unknown Player           Unknown Player           Steven Kampfer           

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Matthew Peca             Laurent Dauphin          Unknown Player           Unknown Player           Steven Kampfer           

<b>Goaltenders</b>
Starting : Spencer Martin           
Backup : Unknown Goalie           

<b>Extra Forwards</b>
Normal : A.J. Greer, Blake Lizotte, Matthew Peca - PP : A.J. Greer, Blake Lizotte - PK : Matthew Peca
<b>Extra Defensemen</b>
Normal : Andrew Campbell, Unknown Player, Steven Kampfer - PP : Andrew Campbell - PK : Unknown Player, Steven Kampfer
<b>Penalty Shots</b>
Matthew Peca, Laurent Dauphin, Unknown Player, A.J. Greer, Blake Lizotte

<b>Scratches</b>
Luke Witkowski (Healthy)</pre></div>
<h1 class="TeamLineFarm_TUC"><a id="Roadrunners">Roadrunners</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=23">Coyotes Page</a> ]
[ <a href="OTHL-ProTeamRoster.php#Coyotes">Pro Team Roster</a> ]
[ <a href="OTHL-FarmTeamScoring.php#Roadrunners">Farm Team Scoring</a> ]
[ <a href="OTHL-FarmTeamLines.php#Roadrunners">Farm Team Lines</a> ]
[ <a href="OTHL-FarmTeamSchedule.php#Roadrunners">Farm Team Schedule</a> ]
[ <a href="OTHL-FarmTeamStats.php#Roadrunners">Farm Team Stats</a> ]
[ <a href="OTHL-FarmTeamStatsVS.php#Roadrunners">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Roadrunners');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Roadrunners" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Filip Chytil             Kevin Fiala              Christian Fischer        40     1   2  2  
 2 Tanner Fritz             Harry Zolnierczyk        Erik Condra              30     1   2  2  
 3 Sheldon Dries            Antti Suomela            Nico Sturm               20     1   2  2  
 4 Antti Suomela            Kevin Fiala              Christian Fischer        10     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Matt Hunwick             Griffin Reinhart                                  40     1   2  2  
 2 Brady Keeper             Unknown Player                                    30     1   2  2  
 3 Unknown Player           Unknown Player                                    20     1   2  2  
 4 Matt Hunwick             Griffin Reinhart                                  10     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Filip Chytil             Kevin Fiala              Christian Fischer        60     1   2  2  
 2 Tanner Fritz             Harry Zolnierczyk        Erik Condra              40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Matt Hunwick             Griffin Reinhart                                  60     1   2  2  
 2 Brady Keeper             Unknown Player                                    40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Kevin Fiala              Christian Fischer        60     1   2  2  
 2 Filip Chytil             Harry Zolnierczyk        40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Matt Hunwick             Griffin Reinhart         60     1   2  2  
 2 Brady Keeper             Unknown Player           40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Kevin Fiala                                       60     1   2  2  
 2 Christian Fischer                                 40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Matt Hunwick             Griffin Reinhart         60     1   2  2  
 2 Brady Keeper             Unknown Player           40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Kevin Fiala              Christian Fischer        60     1   2  2  
 2 Filip Chytil             Harry Zolnierczyk        40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Matt Hunwick             Griffin Reinhart         60     1   2  2  
 2 Brady Keeper             Unknown Player           40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Filip Chytil             Kevin Fiala              Christian Fischer        Matt Hunwick             Griffin Reinhart         

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Filip Chytil             Kevin Fiala              Christian Fischer        Matt Hunwick             Griffin Reinhart         

<b>Goaltenders</b>
Starting : Unknown Goalie           
Backup : Unknown Goalie           

<b>Extra Forwards</b>
Normal : Sheldon Dries, Nico Sturm, Tanner Fritz - PP : Sheldon Dries, Nico Sturm - PK : Tanner Fritz
<b>Extra Defensemen</b>
Normal : Brady Keeper, Matt Hunwick, Griffin Reinhart - PP : Brady Keeper - PK : Matt Hunwick, Griffin Reinhart
<b>Penalty Shots</b>
Kevin Fiala, Christian Fischer, Filip Chytil, Harry Zolnierczyk, Tanner Fritz

<b>Scratches</b>
None
</pre></div>
<h1 class="TeamLineFarm_BNG"><a id="Devils">Devils</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=18">Devils Page</a> ]
[ <a href="OTHL-ProTeamRoster.php#Devils">Pro Team Roster</a> ]
[ <a href="OTHL-FarmTeamScoring.php#Devils">Farm Team Scoring</a> ]
[ <a href="OTHL-FarmTeamLines.php#Devils">Farm Team Lines</a> ]
[ <a href="OTHL-FarmTeamSchedule.php#Devils">Farm Team Schedule</a> ]
[ <a href="OTHL-FarmTeamStats.php#Devils">Farm Team Stats</a> ]
[ <a href="OTHL-FarmTeamStatsVS.php#Devils">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Devils');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Devils" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           Unknown Player           40     1   2  2  
 2 Unknown Player           Unknown Player           Unknown Player           30     1   2  2  
 3 Unknown Player           Unknown Player           Unknown Player           20     1   2  2  
 4 Unknown Player           Unknown Player           Unknown Player           10     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player                                    40     1   2  2  
 2 Unknown Player           Unknown Player                                    30     1   2  2  
 3 Unknown Player           Unknown Player                                    20     1   2  2  
 4 Unknown Player           Unknown Player                                    10     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           Unknown Player           60     1   2  2  
 2 Unknown Player           Unknown Player           Unknown Player           40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player                                    60     1   2  2  
 2 Unknown Player           Unknown Player                                    40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           60     1   2  2  
 2 Unknown Player           Unknown Player           40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           60     1   2  2  
 2 Unknown Player           Unknown Player           40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Unknown Player                                    60     1   2  2  
 2 Unknown Player                                    40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           60     1   2  2  
 2 Unknown Player           Unknown Player           40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           60     1   2  2  
 2 Unknown Player           Unknown Player           40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           60     1   2  2  
 2 Unknown Player           Unknown Player           40     1   2  2  

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

<b>Scratches</b>
None
</pre></div>
<h1 class="TeamLineFarm_SDG"><a id="Gulls">Gulls</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=1">Ducks Page</a> ]
[ <a href="OTHL-ProTeamRoster.php#Ducks">Pro Team Roster</a> ]
[ <a href="OTHL-FarmTeamScoring.php#Gulls">Farm Team Scoring</a> ]
[ <a href="OTHL-FarmTeamLines.php#Gulls">Farm Team Lines</a> ]
[ <a href="OTHL-FarmTeamSchedule.php#Gulls">Farm Team Schedule</a> ]
[ <a href="OTHL-FarmTeamStats.php#Gulls">Farm Team Stats</a> ]
[ <a href="OTHL-FarmTeamStatsVS.php#Gulls">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Gulls');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Gulls" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Nicolas Kerdiles         Warren Foegele           Dillon Dube              40     1   2  2  
 2 Trent Frederic           Trevor Moore             Zach Senyshyn            30     1   2  2  
 3 Unknown Player           Morgan Klimchuk          Emile Poirier            20     1   2  2  
 4 Warren Foegele           Trevor Moore             Nicolas Kerdiles         10     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player                                    40     1   2  2  
 2 Unknown Player           Unknown Player                                    30     1   2  2  
 3 Unknown Player           Unknown Player                                    20     1   2  2  
 4 Dillon Dube              Zach Senyshyn                                     10     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Nicolas Kerdiles         Warren Foegele           Dillon Dube              60     1   2  2  
 2 Trent Frederic           Trevor Moore             Zach Senyshyn            40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player                                    60     1   2  2  
 2 Unknown Player           Unknown Player                                    40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Warren Foegele           Trevor Moore             60     1   2  2  
 2 Nicolas Kerdiles         Dillon Dube              40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           60     1   2  2  
 2 Unknown Player           Unknown Player           40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Warren Foegele                                    60     1   2  2  
 2 Trevor Moore                                      40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           60     1   2  2  
 2 Unknown Player           Unknown Player           40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Warren Foegele           Trevor Moore             60     1   2  2  
 2 Nicolas Kerdiles         Dillon Dube              40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           60     1   2  2  
 2 Unknown Player           Unknown Player           40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Nicolas Kerdiles         Warren Foegele           Dillon Dube              Unknown Player           Unknown Player           

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Nicolas Kerdiles         Warren Foegele           Dillon Dube              Unknown Player           Unknown Player           

<b>Goaltenders</b>
Starting : Unknown Goalie           
Backup : Ian Scott                

<b>Extra Forwards</b>
Normal : Morgan Klimchuk, Emile Poirier, Trent Frederic - PP : Morgan Klimchuk, Emile Poirier - PK : Trent Frederic
<b>Extra Defensemen</b>
Normal : Unknown Player, Unknown Player, Unknown Player - PP : Unknown Player - PK : Unknown Player, Unknown Player
<b>Penalty Shots</b>
Warren Foegele, Trevor Moore, Nicolas Kerdiles, Dillon Dube, Zach Senyshyn

<b>Scratches</b>
Martin Marincin (Healthy), Kenny Agostino (Healthy)</pre></div>
<h1 class="TeamLineFarm_STK"><a id="Heat">Heat</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=5">Flames Page</a> ]
[ <a href="OTHL-ProTeamRoster.php#Flames">Pro Team Roster</a> ]
[ <a href="OTHL-FarmTeamScoring.php#Heat">Farm Team Scoring</a> ]
[ <a href="OTHL-FarmTeamLines.php#Heat">Farm Team Lines</a> ]
[ <a href="OTHL-FarmTeamSchedule.php#Heat">Farm Team Schedule</a> ]
[ <a href="OTHL-FarmTeamStats.php#Heat">Farm Team Stats</a> ]
[ <a href="OTHL-FarmTeamStatsVS.php#Heat">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Heat');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Heat" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Jack Roslovic            Taro Hirose              Vinni Lettieri           40     0   0  5  
 2 Matthew Highmore         Tyrell Goulbourne        Christoffer Ehn          40     0   0  5  
 3 Unknown Player           Brad Malone              Unknown Player           10     0   0  5  
 4 Jack Roslovic            Taro Hirose              Christoffer Ehn          10     0   0  5  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Steven Santini           Samuel Morin                                      40     0   2  3  
 2 Jordan Subban            Blake Hillman                                     40     0   2  3  
 3 Unknown Player           Unknown Player                                    10     1   2  2  
 4 Steven Santini           Samuel Morin                                      10     0   0  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Jack Roslovic            Taro Hirose              Christoffer Ehn          91     0   0  5  
 2 Unknown Player           Taro Hirose              Christoffer Ehn          9      0   0  5  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Steven Santini           Samuel Morin                                      60     0   0  5  
 2 Jordan Subban            Blake Hillman                                     40     0   0  5  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Christoffer Ehn          Jack Roslovic            60     0   5  0  
 2 Unknown Player           Brad Malone              40     0   5  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Steven Santini           Samuel Morin             60     0   5  0  
 2 Jordan Subban            Blake Hillman            40     0   2  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Christoffer Ehn                                   60     0   5  0  
 2 Jack Roslovic                                     40     0   5  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Steven Santini           Samuel Morin             60     0   5  0  
 2 Jordan Subban            Blake Hillman            40     0   5  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Jack Roslovic            Taro Hirose              60     1   2  2  
 2 Brad Malone              Christoffer Ehn          40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Steven Santini           Samuel Morin             60     1   2  2  
 2 Jordan Subban            Blake Hillman            40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Jack Roslovic            Taro Hirose              Christoffer Ehn          Samuel Morin             Steven Santini           

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Brad Malone              Jack Roslovic            Christoffer Ehn          Samuel Morin             Steven Santini           

<b>Goaltenders</b>
Starting : Oscar Dansk              
Backup : Unknown Goalie           

<b>Extra Forwards</b>
Normal : Matthew Highmore, Vinni Lettieri, Tyrell Goulbourne - PP : Matthew Highmore, Vinni Lettieri - PK : Tyrell Goulbourne
<b>Extra Defensemen</b>
Normal : Jordan Subban, Blake Hillman, Steven Santini - PP : Jordan Subban - PK : Blake Hillman, Unknown Player
<b>Penalty Shots</b>
Jack Roslovic, Steven Santini, Unknown Player, Brad Malone, Unknown Player

<b>Scratches</b>
None
</pre></div>
<h1 class="TeamLineFarm_LVP"><a id="Phantoms">Phantoms</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=22">Flyers Page</a> ]
[ <a href="OTHL-ProTeamRoster.php#Flyers">Pro Team Roster</a> ]
[ <a href="OTHL-FarmTeamScoring.php#Phantoms">Farm Team Scoring</a> ]
[ <a href="OTHL-FarmTeamLines.php#Phantoms">Farm Team Lines</a> ]
[ <a href="OTHL-FarmTeamSchedule.php#Phantoms">Farm Team Schedule</a> ]
[ <a href="OTHL-FarmTeamStats.php#Phantoms">Farm Team Stats</a> ]
[ <a href="OTHL-FarmTeamStatsVS.php#Phantoms">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Phantoms');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Phantoms" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Justin Kloos             Brian Gibbons            Kailer Yamamoto          40     0   0  5  
 2 Alex Broadhurst          Unknown Player           Unknown Player           30     0   0  5  
 3 Unknown Player           Unknown Player           Unknown Player           20     1   2  2  
 4 Brian Gibbons            Justin Kloos             Alex Broadhurst          10     0   0  5  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Cameron Gaunce           Joseph Morrow                                     40     0   2  3  
 2 Dillon Simpson           Unknown Player                                    30     0   2  3  
 3 Unknown Player           Unknown Player                                    20     1   2  2  
 4 Cameron Gaunce           Joseph Morrow                                     10     0   3  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Justin Kloos             Brian Gibbons            Kailer Yamamoto          60     0   0  5  
 2 Justin Kloos             Brian Gibbons            Kailer Yamamoto          40     0   0  5  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Cameron Gaunce           Joseph Morrow                                     60     0   0  5  
 2 Dillon Simpson           Unknown Player                                    40     0   0  5  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Brian Gibbons            Justin Kloos             60     0   5  0  
 2 Alex Broadhurst          Kailer Yamamoto          40     0   5  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Cameron Gaunce           Joseph Morrow            60     0   5  0  
 2 Dillon Simpson           Unknown Player           40     0   5  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Brian Gibbons                                     60     0   5  0  
 2 Justin Kloos                                      40     0   5  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Cameron Gaunce           Joseph Morrow            60     0   5  0  
 2 Dillon Simpson           Unknown Player           40     0   5  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Brian Gibbons            Justin Kloos             60     1   2  2  
 2 Alex Broadhurst          Kailer Yamamoto          40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Cameron Gaunce           Joseph Morrow            60     1   2  2  
 2 Dillon Simpson           Unknown Player           40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Justin Kloos             Brian Gibbons            Kailer Yamamoto          Cameron Gaunce           Joseph Morrow            

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Justin Kloos             Brian Gibbons            Kailer Yamamoto          Cameron Gaunce           Joseph Morrow            

<b>Goaltenders</b>
Starting : Ryan Miller              
Backup : Unknown Goalie           

<b>Extra Forwards</b>
Normal : Kailer Yamamoto, Alex Broadhurst, Brian Gibbons - PP : Kailer Yamamoto, Alex Broadhurst - PK : Brian Gibbons
<b>Extra Defensemen</b>
Normal : Dillon Simpson, Cameron Gaunce, Joseph Morrow - PP : Dillon Simpson - PK : Cameron Gaunce, Joseph Morrow
<b>Penalty Shots</b>
Brian Gibbons, Justin Kloos, Alex Broadhurst, Kailer Yamamoto, Unknown Player

<b>Scratches</b>
None
</pre></div>
<h1 class="TeamLineFarm_CHI"><a id="Wolves">Wolves</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=31">Golden Knights Page</a> ]
[ <a href="OTHL-ProTeamRoster.php#GoldenKnights">Pro Team Roster</a> ]
[ <a href="OTHL-FarmTeamScoring.php#Wolves">Farm Team Scoring</a> ]
[ <a href="OTHL-FarmTeamLines.php#Wolves">Farm Team Lines</a> ]
[ <a href="OTHL-FarmTeamSchedule.php#Wolves">Farm Team Schedule</a> ]
[ <a href="OTHL-FarmTeamStats.php#Wolves">Farm Team Stats</a> ]
[ <a href="OTHL-FarmTeamStatsVS.php#Wolves">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Wolves');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Wolves" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Lias Andersson           Dominic Turgeon          Nicholas Baptiste        40     1   2  2  
 2 Unknown Player           Unknown Player           Unknown Player           30     1   2  2  
 3 Unknown Player           Unknown Player           Unknown Player           20     1   2  2  
 4 Lias Andersson           Nicholas Baptiste        Dominic Turgeon          10     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Juuso Valimaki           David Warsofsky                                   40     1   2  2  
 2 Colton White             Daniel Brickley                                   30     1   2  2  
 3 Unknown Player           Unknown Player                                    20     1   2  2  
 4 Juuso Valimaki           David Warsofsky                                   10     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Lias Andersson           Dominic Turgeon          Nicholas Baptiste        60     1   2  2  
 2 Unknown Player           Unknown Player           Unknown Player           40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Juuso Valimaki           David Warsofsky                                   60     1   2  2  
 2 Colton White             Daniel Brickley                                   40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Lias Andersson           Nicholas Baptiste        60     1   2  2  
 2 Dominic Turgeon          Unknown Player           40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Juuso Valimaki           David Warsofsky          60     1   2  2  
 2 Colton White             Daniel Brickley          40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Lias Andersson                                    60     1   2  2  
 2 Nicholas Baptiste                                 40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Juuso Valimaki           David Warsofsky          60     1   2  2  
 2 Colton White             Daniel Brickley          40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Lias Andersson           Nicholas Baptiste        60     1   2  2  
 2 Dominic Turgeon          Unknown Player           40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Juuso Valimaki           David Warsofsky          60     1   2  2  
 2 Colton White             Daniel Brickley          40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Lias Andersson           Dominic Turgeon          Nicholas Baptiste        Juuso Valimaki           David Warsofsky          

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Lias Andersson           Dominic Turgeon          Nicholas Baptiste        Juuso Valimaki           David Warsofsky          

<b>Goaltenders</b>
Starting : Jon Gillies              
Backup : Unknown Goalie           

<b>Extra Forwards</b>
Normal : Dominic Turgeon, Lias Andersson, Nicholas Baptiste - PP : Dominic Turgeon, Lias Andersson - PK : Nicholas Baptiste
<b>Extra Defensemen</b>
Normal : Colton White, Daniel Brickley, Juuso Valimaki - PP : Colton White - PK : Daniel Brickley, Juuso Valimaki
<b>Penalty Shots</b>
Lias Andersson, Nicholas Baptiste, Dominic Turgeon, Unknown Player, Unknown Player

<b>Scratches</b>
None
</pre></div>
<h1 class="TeamLineFarm_CHR"><a id="Checkers">Checkers</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=6">Hurricanes Page</a> ]
[ <a href="OTHL-ProTeamRoster.php#Hurricanes">Pro Team Roster</a> ]
[ <a href="OTHL-FarmTeamScoring.php#Checkers">Farm Team Scoring</a> ]
[ <a href="OTHL-FarmTeamLines.php#Checkers">Farm Team Lines</a> ]
[ <a href="OTHL-FarmTeamSchedule.php#Checkers">Farm Team Schedule</a> ]
[ <a href="OTHL-FarmTeamStats.php#Checkers">Farm Team Stats</a> ]
[ <a href="OTHL-FarmTeamStatsVS.php#Checkers">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Checkers');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Checkers" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Unknown Player           Casey Mittelstadt        Jesse Puljujarvi         40     1   2  2  
 2 Andy Andreoff            Michael Mersch           Nathan Gerbe             30     1   2  2  
 3 Aleksi Saarela           Nick Paul                Dylan Sikura             20     1   2  2  
 4 Unknown Player           Unknown Player           Casey Mittelstadt        10     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player                                    40     1   2  2  
 2 Unknown Player           Christian Jaros                                   30     1   2  2  
 3 Rasmus Andersson         Oliver Kylington                                  20     1   2  2  
 4 Unknown Player           Unknown Player                                    10     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Unknown Player           Casey Mittelstadt        Jesse Puljujarvi         60     1   2  2  
 2 Andy Andreoff            Michael Mersch           Nathan Gerbe             40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player                                    60     1   2  2  
 2 Unknown Player           Christian Jaros                                   40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Unknown Player           Casey Mittelstadt        60     1   2  2  
 2 Jesse Puljujarvi         Andy Andreoff            40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           60     1   2  2  
 2 Unknown Player           Christian Jaros          40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Unknown Player                                    60     1   2  2  
 2 Casey Mittelstadt                                 40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           60     1   2  2  
 2 Unknown Player           Christian Jaros          40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Unknown Player           Casey Mittelstadt        60     1   2  2  
 2 Jesse Puljujarvi         Andy Andreoff            40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           60     1   2  2  
 2 Unknown Player           Christian Jaros          40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Unknown Player           Casey Mittelstadt        Jesse Puljujarvi         Unknown Player           Unknown Player           

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Unknown Player           Casey Mittelstadt        Jesse Puljujarvi         Unknown Player           Unknown Player           

<b>Goaltenders</b>
Starting : Kevin Boyle              
Backup : Unknown Goalie           

<b>Extra Forwards</b>
Normal : Aleksi Saarela, Nick Paul, Dylan Sikura - PP : Aleksi Saarela, Nick Paul - PK : Dylan Sikura
<b>Extra Defensemen</b>
Normal : Rasmus Andersson, Oliver Kylington, Unknown Player - PP : Rasmus Andersson - PK : Oliver Kylington, Unknown Player
<b>Penalty Shots</b>
Unknown Player, Casey Mittelstadt, Jesse Puljujarvi, Andy Andreoff, Aleksi Saarela

<b>Scratches</b>
None
</pre></div>
<h1 class="TeamLineFarm_BPT"><a id="SoundTigers">Sound Tigers</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=19">Islanders Page</a> ]
[ <a href="OTHL-ProTeamRoster.php#Islanders">Pro Team Roster</a> ]
[ <a href="OTHL-FarmTeamScoring.php#SoundTigers">Farm Team Scoring</a> ]
[ <a href="OTHL-FarmTeamLines.php#SoundTigers">Farm Team Lines</a> ]
[ <a href="OTHL-FarmTeamSchedule.php#SoundTigers">Farm Team Schedule</a> ]
[ <a href="OTHL-FarmTeamStats.php#SoundTigers">Farm Team Stats</a> ]
[ <a href="OTHL-FarmTeamStatsVS.php#SoundTigers">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_SoundTigers');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_SoundTigers" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           Unknown Player           40     1   2  2  
 2 Unknown Player           Unknown Player           Unknown Player           30     1   2  2  
 3 Unknown Player           Unknown Player           Unknown Player           20     1   2  2  
 4 Unknown Player           Unknown Player           Unknown Player           10     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player                                    40     1   2  2  
 2 Unknown Player           Unknown Player                                    30     1   2  2  
 3 Unknown Player           Unknown Player                                    20     1   2  2  
 4 Unknown Player           Unknown Player                                    10     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           Unknown Player           60     1   2  2  
 2 Unknown Player           Unknown Player           Unknown Player           40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player                                    60     1   2  2  
 2 Unknown Player           Unknown Player                                    40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           60     1   2  2  
 2 Unknown Player           Unknown Player           40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           60     1   2  2  
 2 Unknown Player           Unknown Player           40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Unknown Player                                    60     1   2  2  
 2 Unknown Player                                    40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           60     1   2  2  
 2 Unknown Player           Unknown Player           40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           60     1   2  2  
 2 Unknown Player           Unknown Player           40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           60     1   2  2  
 2 Unknown Player           Unknown Player           40     1   2  2  

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

<b>Scratches</b>
None
</pre></div>
<h1 class="TeamLineFarm_MAN"><a id="Moose">Moose</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=2">Jets Page</a> ]
[ <a href="OTHL-ProTeamRoster.php#Jets">Pro Team Roster</a> ]
[ <a href="OTHL-FarmTeamScoring.php#Moose">Farm Team Scoring</a> ]
[ <a href="OTHL-FarmTeamLines.php#Moose">Farm Team Lines</a> ]
[ <a href="OTHL-FarmTeamSchedule.php#Moose">Farm Team Schedule</a> ]
[ <a href="OTHL-FarmTeamStats.php#Moose">Farm Team Stats</a> ]
[ <a href="OTHL-FarmTeamStatsVS.php#Moose">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Moose');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Moose" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Clark Bishop             Eeli Tolvanen            John Quenneville         40     1   2  2  
 2 Unknown Player           Unknown Player           Unknown Player           30     1   2  2  
 3 Unknown Player           Unknown Player           Unknown Player           20     1   2  2  
 4 Eeli Tolvanen            Clark Bishop             John Quenneville         10     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Madison Bowey            Julius Honka                                      40     1   2  2  
 2 Guillaume Brisebois      Brian Strait                                      30     1   2  2  
 3 Ryan Lindgren            Unknown Player                                    20     1   2  2  
 4 Madison Bowey            Julius Honka                                      10     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Clark Bishop             Eeli Tolvanen            John Quenneville         60     1   2  2  
 2 Unknown Player           Unknown Player           Unknown Player           40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Madison Bowey            Julius Honka                                      60     1   2  2  
 2 Guillaume Brisebois      Brian Strait                                      40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Eeli Tolvanen            Clark Bishop             60     1   2  2  
 2 John Quenneville         Unknown Player           40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Madison Bowey            Julius Honka             60     1   2  2  
 2 Guillaume Brisebois      Brian Strait             40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Eeli Tolvanen                                     60     1   2  2  
 2 Clark Bishop                                      40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Madison Bowey            Julius Honka             60     1   2  2  
 2 Guillaume Brisebois      Brian Strait             40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Eeli Tolvanen            Clark Bishop             60     1   2  2  
 2 John Quenneville         Unknown Player           40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Madison Bowey            Julius Honka             60     1   2  2  
 2 Guillaume Brisebois      Brian Strait             40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Clark Bishop             Eeli Tolvanen            John Quenneville         Madison Bowey            Julius Honka             

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Clark Bishop             Eeli Tolvanen            John Quenneville         Madison Bowey            Julius Honka             

<b>Goaltenders</b>
Starting : Vitek Vanecek            
Backup : Unknown Goalie           

<b>Extra Forwards</b>
Normal : John Quenneville, Eeli Tolvanen, Clark Bishop - PP : John Quenneville, Eeli Tolvanen - PK : Clark Bishop
<b>Extra Defensemen</b>
Normal : Ryan Lindgren, Guillaume Brisebois, Brian Strait - PP : Ryan Lindgren - PK : Guillaume Brisebois, Brian Strait
<b>Penalty Shots</b>
Eeli Tolvanen, Clark Bishop, John Quenneville, Unknown Player, Unknown Player

<b>Scratches</b>
Markus Hannikainen (Healthy)</pre></div>
<h1 class="TeamLineFarm_ONT"><a id="Reign">Reign</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=14">Kings Page</a> ]
[ <a href="OTHL-ProTeamRoster.php#Kings">Pro Team Roster</a> ]
[ <a href="OTHL-FarmTeamScoring.php#Reign">Farm Team Scoring</a> ]
[ <a href="OTHL-FarmTeamLines.php#Reign">Farm Team Lines</a> ]
[ <a href="OTHL-FarmTeamSchedule.php#Reign">Farm Team Schedule</a> ]
[ <a href="OTHL-FarmTeamStats.php#Reign">Farm Team Stats</a> ]
[ <a href="OTHL-FarmTeamStatsVS.php#Reign">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Reign');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Reign" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           Unknown Player           40     1   2  2  
 2 Unknown Player           Unknown Player           Unknown Player           30     1   2  2  
 3 Unknown Player           Unknown Player           Unknown Player           20     1   2  2  
 4 Unknown Player           Unknown Player           Unknown Player           10     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player                                    40     1   2  2  
 2 Unknown Player           Unknown Player                                    30     1   2  2  
 3 Unknown Player           Unknown Player                                    20     1   2  2  
 4 Unknown Player           Unknown Player                                    10     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           Unknown Player           60     1   2  2  
 2 Unknown Player           Unknown Player           Unknown Player           40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player                                    60     1   2  2  
 2 Unknown Player           Unknown Player                                    40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           60     1   2  2  
 2 Unknown Player           Unknown Player           40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           60     1   2  2  
 2 Unknown Player           Unknown Player           40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Unknown Player                                    60     1   2  2  
 2 Unknown Player                                    40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           60     1   2  2  
 2 Unknown Player           Unknown Player           40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           60     1   2  2  
 2 Unknown Player           Unknown Player           40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           60     1   2  2  
 2 Unknown Player           Unknown Player           40     1   2  2  

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

<b>Scratches</b>
Antoine Bibeau (Healthy)</pre></div>
<h1 class="TeamLineFarm_SYR"><a id="Crunch">Crunch</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=27">Lightning Page</a> ]
[ <a href="OTHL-ProTeamRoster.php#Lightning">Pro Team Roster</a> ]
[ <a href="OTHL-FarmTeamScoring.php#Crunch">Farm Team Scoring</a> ]
[ <a href="OTHL-FarmTeamLines.php#Crunch">Farm Team Lines</a> ]
[ <a href="OTHL-FarmTeamSchedule.php#Crunch">Farm Team Schedule</a> ]
[ <a href="OTHL-FarmTeamStats.php#Crunch">Farm Team Stats</a> ]
[ <a href="OTHL-FarmTeamStatsVS.php#Crunch">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Crunch');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Crunch" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Liam O'Brien             Tom Kuhnhackl            Miikka Salomaki          40     1   2  2  
 2 Unknown Player           Unknown Player           Alexandre Grenier        30     1   2  2  
 3 Unknown Player           Unknown Player           Unknown Player           20     1   2  2  
 4 Tom Kuhnhackl            Miikka Salomaki          Alexandre Grenier        10     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Luca Sbisa               Justin Falk                                       40     1   2  2  
 2 Lawrence Pilut           Radim Simek                                       30     1   2  2  
 3 Seth Helgeson            Josh Teves                                        20     1   2  2  
 4 Luca Sbisa               Justin Falk                                       10     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Liam O'Brien             Tom Kuhnhackl            Miikka Salomaki          60     1   2  2  
 2 Unknown Player           Unknown Player           Alexandre Grenier        40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Luca Sbisa               Justin Falk                                       60     1   2  2  
 2 Lawrence Pilut           Radim Simek                                       40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Tom Kuhnhackl            Miikka Salomaki          60     1   2  2  
 2 Alexandre Grenier        Liam O'Brien             40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Luca Sbisa               Justin Falk              60     1   2  2  
 2 Lawrence Pilut           Radim Simek              40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Tom Kuhnhackl                                     60     1   2  2  
 2 Miikka Salomaki                                   40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Luca Sbisa               Justin Falk              60     1   2  2  
 2 Lawrence Pilut           Radim Simek              40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Tom Kuhnhackl            Miikka Salomaki          60     1   2  2  
 2 Alexandre Grenier        Liam O'Brien             40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Luca Sbisa               Justin Falk              60     1   2  2  
 2 Lawrence Pilut           Radim Simek              40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Liam O'Brien             Tom Kuhnhackl            Miikka Salomaki          Luca Sbisa               Justin Falk              

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Liam O'Brien             Tom Kuhnhackl            Miikka Salomaki          Luca Sbisa               Justin Falk              

<b>Goaltenders</b>
Starting : Matt Tomkins             
Backup : Unknown Goalie           

<b>Extra Forwards</b>
Normal : Liam O'Brien, Alexandre Grenier, Tom Kuhnhackl - PP : Liam O'Brien, Alexandre Grenier - PK : Tom Kuhnhackl
<b>Extra Defensemen</b>
Normal : Seth Helgeson, Josh Teves, Lawrence Pilut - PP : Seth Helgeson - PK : Josh Teves, Lawrence Pilut
<b>Penalty Shots</b>
Tom Kuhnhackl, Miikka Salomaki, Alexandre Grenier, Liam O'Brien, Unknown Player

<b>Scratches</b>
None
</pre></div>
<h1 class="TeamLineFarm_TOR"><a id="Marlies">Marlies</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=28">Maple Leafs Page</a> ]
[ <a href="OTHL-ProTeamRoster.php#MapleLeafs">Pro Team Roster</a> ]
[ <a href="OTHL-FarmTeamScoring.php#Marlies">Farm Team Scoring</a> ]
[ <a href="OTHL-FarmTeamLines.php#Marlies">Farm Team Lines</a> ]
[ <a href="OTHL-FarmTeamSchedule.php#Marlies">Farm Team Schedule</a> ]
[ <a href="OTHL-FarmTeamStats.php#Marlies">Farm Team Stats</a> ]
[ <a href="OTHL-FarmTeamStatsVS.php#Marlies">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Marlies');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Marlies" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Steven Lorentz           Unknown Player           Jeremy Bracco            40     1   2  2  
 2 Unknown Player           Unknown Player           Spencer Smallman         30     1   2  2  
 3 Unknown Player           Unknown Player           Unknown Player           20     1   2  2  
 4 Jeremy Bracco            Steven Lorentz           Spencer Smallman         10     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player                                    40     1   2  2  
 2 Unknown Player           Unknown Player                                    30     1   2  2  
 3 Unknown Player           Unknown Player                                    20     1   2  2  
 4 Unknown Player           Unknown Player                                    10     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Steven Lorentz           Unknown Player           Jeremy Bracco            60     1   2  2  
 2 Unknown Player           Unknown Player           Spencer Smallman         40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player                                    60     1   2  2  
 2 Unknown Player           Unknown Player                                    40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Jeremy Bracco            Steven Lorentz           60     1   2  2  
 2 Spencer Smallman         Unknown Player           40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           60     1   2  2  
 2 Unknown Player           Unknown Player           40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Jeremy Bracco                                     60     1   2  2  
 2 Steven Lorentz                                    40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           60     1   2  2  
 2 Unknown Player           Unknown Player           40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Jeremy Bracco            Steven Lorentz           60     1   2  2  
 2 Spencer Smallman         Unknown Player           40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           60     1   2  2  
 2 Unknown Player           Unknown Player           40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Steven Lorentz           Unknown Player           Jeremy Bracco            Unknown Player           Unknown Player           

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Steven Lorentz           Unknown Player           Jeremy Bracco            Unknown Player           Unknown Player           

<b>Goaltenders</b>
Starting : Dylan Wells              
Backup : Unknown Goalie           

<b>Extra Forwards</b>
Normal : Spencer Smallman, Jeremy Bracco, Steven Lorentz - PP : Spencer Smallman, Jeremy Bracco - PK : Steven Lorentz
<b>Extra Defensemen</b>
Normal : Unknown Player, Unknown Player, Unknown Player - PP : Unknown Player - PK : Unknown Player, Unknown Player
<b>Penalty Shots</b>
Jeremy Bracco, Steven Lorentz, Spencer Smallman, Unknown Player, Unknown Player

<b>Scratches</b>
None
</pre></div>
<h1 class="TeamLineFarm_BKR"><a id="Condors">Condors</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=12">Oilers Page</a> ]
[ <a href="OTHL-ProTeamRoster.php#Oilers">Pro Team Roster</a> ]
[ <a href="OTHL-FarmTeamScoring.php#Condors">Farm Team Scoring</a> ]
[ <a href="OTHL-FarmTeamLines.php#Condors">Farm Team Lines</a> ]
[ <a href="OTHL-FarmTeamSchedule.php#Condors">Farm Team Schedule</a> ]
[ <a href="OTHL-FarmTeamStats.php#Condors">Farm Team Stats</a> ]
[ <a href="OTHL-FarmTeamStatsVS.php#Condors">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Condors');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Condors" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Nick Schmaltz            Adam Johnson             Luke Kunin               40     1   2  2  
 2 Dominic Toninato         Eric Robinson            Joey Anderson            30     1   2  2  
 3 Adam Gaudette            Ryan Kuffner             Dennis Gilbert           20     1   2  2  
 4 Nick Schmaltz            Luke Kunin               Dominic Toninato         10     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Ryan Graves              Jeremy Lauzon                                     40     1   2  2  
 2 Jarred Tinordi           Anthony Bitetto                                   30     1   2  2  
 3 Mitch Reinke             Zach Whitecloud                                   20     1   2  2  
 4 Dennis Gilbert           Ryan Graves                                       10     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Nick Schmaltz            Adam Johnson             Luke Kunin               60     1   2  2  
 2 Dominic Toninato         Eric Robinson            Joey Anderson            40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Ryan Graves              Jeremy Lauzon                                     60     1   2  2  
 2 Jarred Tinordi           Anthony Bitetto                                   40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Nick Schmaltz            Luke Kunin               60     1   2  2  
 2 Dominic Toninato         Joey Anderson            40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Ryan Graves              Jeremy Lauzon            60     1   2  2  
 2 Jarred Tinordi           Anthony Bitetto          40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Nick Schmaltz                                     60     1   2  2  
 2 Luke Kunin                                        40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Ryan Graves              Jeremy Lauzon            60     1   2  2  
 2 Jarred Tinordi           Anthony Bitetto          40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Nick Schmaltz            Luke Kunin               60     1   2  2  
 2 Dominic Toninato         Joey Anderson            40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Ryan Graves              Jeremy Lauzon            60     1   2  2  
 2 Jarred Tinordi           Anthony Bitetto          40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Nick Schmaltz            Adam Johnson             Luke Kunin               Ryan Graves              Jeremy Lauzon            

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Nick Schmaltz            Adam Johnson             Luke Kunin               Ryan Graves              Jeremy Lauzon            

<b>Goaltenders</b>
Starting : Scott Wedgewood          
Backup : Zane McIntyre            

<b>Extra Forwards</b>
Normal : Adam Gaudette, Ryan Kuffner, Adam Johnson - PP : Adam Gaudette, Ryan Kuffner - PK : Adam Johnson
<b>Extra Defensemen</b>
Normal : Mitch Reinke, Zach Whitecloud, Dennis Gilbert - PP : Mitch Reinke - PK : Zach Whitecloud, Dennis Gilbert
<b>Penalty Shots</b>
Nick Schmaltz, Luke Kunin, Dominic Toninato, Joey Anderson, Adam Johnson

<b>Scratches</b>
Kaden Fulcher (Healthy)</pre></div>
<h1 class="TeamLineFarm_SPR"><a id="Thunderbirds">Thunderbirds</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=13">Panthers Page</a> ]
[ <a href="OTHL-ProTeamRoster.php#Panthers">Pro Team Roster</a> ]
[ <a href="OTHL-FarmTeamScoring.php#Thunderbirds">Farm Team Scoring</a> ]
[ <a href="OTHL-FarmTeamLines.php#Thunderbirds">Farm Team Lines</a> ]
[ <a href="OTHL-FarmTeamSchedule.php#Thunderbirds">Farm Team Schedule</a> ]
[ <a href="OTHL-FarmTeamStats.php#Thunderbirds">Farm Team Stats</a> ]
[ <a href="OTHL-FarmTeamStatsVS.php#Thunderbirds">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Thunderbirds');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Thunderbirds" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Daniel O'Regan           Garrett Wilson           Cooper Marody            40     1   2  2  
 2 Luke Johnson             C.J. Smith               Michael Dal Colle        30     1   2  2  
 3 Unknown Player           Unknown Player           Unknown Player           20     1   2  2  
 4 Unknown Player           Unknown Player           Unknown Player           10     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Derrick Pouliot          Brendan Guhle                                     40     1   2  2  
 2 Alexandre Carrier        Andy Welinski                                     30     1   2  2  
 3 Tyler Wotherspoon        Unknown Player                                    20     1   2  2  
 4 Derrick Pouliot          Brendan Guhle                                     10     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Daniel O'Regan           Garrett Wilson           Cooper Marody            60     1   2  2  
 2 Luke Johnson             C.J. Smith               Michael Dal Colle        40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Derrick Pouliot          Brendan Guhle                                     60     1   2  2  
 2 Alexandre Carrier        Andy Welinski                                     40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Daniel O'Regan           Cooper Marody            60     1   2  2  
 2 Garrett Wilson           C.J. Smith               40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Derrick Pouliot          Brendan Guhle            60     1   2  2  
 2 Alexandre Carrier        Andy Welinski            40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Daniel O'Regan                                    60     1   2  2  
 2 Cooper Marody                                     40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Derrick Pouliot          Brendan Guhle            60     1   2  2  
 2 Alexandre Carrier        Andy Welinski            40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Daniel O'Regan           Cooper Marody            60     1   2  2  
 2 Garrett Wilson           C.J. Smith               40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Derrick Pouliot          Brendan Guhle            60     1   2  2  
 2 Alexandre Carrier        Andy Welinski            40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Daniel O'Regan           Garrett Wilson           Cooper Marody            Derrick Pouliot          Brendan Guhle            

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Daniel O'Regan           Garrett Wilson           Cooper Marody            Derrick Pouliot          Brendan Guhle            

<b>Goaltenders</b>
Starting : Unknown Goalie           
Backup : Unknown Goalie           

<b>Extra Forwards</b>
Normal : Luke Johnson, Michael Dal Colle, C.J. Smith - PP : Luke Johnson, Michael Dal Colle - PK : C.J. Smith
<b>Extra Defensemen</b>
Normal : Tyler Wotherspoon, Alexandre Carrier, Andy Welinski - PP : Tyler Wotherspoon - PK : Alexandre Carrier, Andy Welinski
<b>Penalty Shots</b>
Daniel O'Regan, Cooper Marody, Garrett Wilson, C.J. Smith, Luke Johnson

<b>Scratches</b>
Michael McCarron (Suspend)</pre></div>
<h1 class="TeamLineFarm_WBS"><a id="Penguins">Penguins</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=24">Penguins Page</a> ]
[ <a href="OTHL-ProTeamRoster.php#Penguins">Pro Team Roster</a> ]
[ <a href="OTHL-FarmTeamScoring.php#Penguins">Farm Team Scoring</a> ]
[ <a href="OTHL-FarmTeamLines.php#Penguins">Farm Team Lines</a> ]
[ <a href="OTHL-FarmTeamSchedule.php#Penguins">Farm Team Schedule</a> ]
[ <a href="OTHL-FarmTeamStats.php#Penguins">Farm Team Stats</a> ]
[ <a href="OTHL-FarmTeamStatsVS.php#Penguins">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Penguins');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Penguins" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Unknown Player           Dave Dziurzynski         Unknown Player           40     1   2  2  
 2 Unknown Player           Jamie Devane             Unknown Player           30     1   2  2  
 3 Unknown Player           Unknown Player           Unknown Player           20     1   2  2  
 4 Unknown Player           Unknown Player           Unknown Player           10     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player                                    40     1   2  2  
 2 Aaron Ness               Nelson Nogier                                     30     1   2  2  
 3 Unknown Player           Unknown Player                                    20     1   2  2  
 4 Unknown Player           Unknown Player                                    10     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Unknown Player           Dave Dziurzynski         Unknown Player           60     1   2  2  
 2 Unknown Player           Jamie Devane             Unknown Player           40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Unknown Player           Aaron Ness                                        60     1   2  2  
 2 Nelson Nogier            Unknown Player                                    40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           60     1   2  2  
 2 Unknown Player           Dave Dziurzynski         40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Nelson Nogier            Unknown Player           60     1   2  2  
 2 Unknown Player           Aaron Ness               40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Dave Dziurzynski                                  60     1   2  2  
 2 Unknown Player                                    40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Unknown Player           Aaron Ness               60     1   2  2  
 2 Unknown Player           Nelson Nogier            40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Unknown Player           Dave Dziurzynski         60     1   2  2  
 2 Unknown Player           Unknown Player           40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Aaron Ness               Unknown Player           60     1   2  2  
 2 Nelson Nogier            Unknown Player           40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Unknown Player           Jamie Devane             Unknown Player           Unknown Player           Aaron Ness               

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Unknown Player           Dave Dziurzynski         Unknown Player           Unknown Player           Unknown Player           

<b>Goaltenders</b>
Starting : Tom McCollum             
Backup : Unknown Goalie           

<b>Extra Forwards</b>
Normal : Unknown Player, Unknown Player, Unknown Player - PP : Unknown Player, Unknown Player - PK : Unknown Player
<b>Extra Defensemen</b>
Normal : Unknown Player, Unknown Player, Unknown Player - PP : Unknown Player - PK : Unknown Player, Unknown Player
<b>Penalty Shots</b>
Unknown Player, Unknown Player, Unknown Player, Jamie Devane, Dave Dziurzynski

<b>Scratches</b>
Matt Read (Suspend)</pre></div>
<h1 class="TeamLineFarm_MIL"><a id="Admirals">Admirals</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=17">Predators Page</a> ]
[ <a href="OTHL-ProTeamRoster.php#Predators">Pro Team Roster</a> ]
[ <a href="OTHL-FarmTeamScoring.php#Admirals">Farm Team Scoring</a> ]
[ <a href="OTHL-FarmTeamLines.php#Admirals">Farm Team Lines</a> ]
[ <a href="OTHL-FarmTeamSchedule.php#Admirals">Farm Team Schedule</a> ]
[ <a href="OTHL-FarmTeamStats.php#Admirals">Farm Team Stats</a> ]
[ <a href="OTHL-FarmTeamStatsVS.php#Admirals">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Admirals');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Admirals" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           Unknown Player           40     1   2  2  
 2 Unknown Player           Unknown Player           Unknown Player           30     1   2  2  
 3 Unknown Player           Unknown Player           Unknown Player           20     1   2  2  
 4 Unknown Player           Unknown Player           Unknown Player           10     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player                                    40     1   2  2  
 2 Unknown Player           Unknown Player                                    30     1   2  2  
 3 Unknown Player           Unknown Player                                    20     1   2  2  
 4 Unknown Player           Unknown Player                                    10     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           Unknown Player           60     1   2  2  
 2 Unknown Player           Unknown Player           Unknown Player           40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player                                    60     1   2  2  
 2 Unknown Player           Unknown Player                                    40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           60     1   2  2  
 2 Unknown Player           Unknown Player           40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           60     1   2  2  
 2 Unknown Player           Unknown Player           40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Unknown Player                                    60     1   2  2  
 2 Unknown Player                                    40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           60     1   2  2  
 2 Unknown Player           Unknown Player           40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           60     1   2  2  
 2 Unknown Player           Unknown Player           40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           60     1   2  2  
 2 Unknown Player           Unknown Player           40     1   2  2  

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

<b>Scratches</b>
None
</pre></div>
<h1 class="TeamLineFarm_HFD"><a id="WolfPack">Wolf Pack</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=20">Rangers Page</a> ]
[ <a href="OTHL-ProTeamRoster.php#Rangers">Pro Team Roster</a> ]
[ <a href="OTHL-FarmTeamScoring.php#WolfPack">Farm Team Scoring</a> ]
[ <a href="OTHL-FarmTeamLines.php#WolfPack">Farm Team Lines</a> ]
[ <a href="OTHL-FarmTeamSchedule.php#WolfPack">Farm Team Schedule</a> ]
[ <a href="OTHL-FarmTeamStats.php#WolfPack">Farm Team Stats</a> ]
[ <a href="OTHL-FarmTeamStatsVS.php#WolfPack">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_WolfPack');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_WolfPack" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           Unknown Player           40     1   2  2  
 2 Unknown Player           Unknown Player           Unknown Player           30     1   2  2  
 3 Unknown Player           Unknown Player           Unknown Player           20     1   2  2  
 4 Unknown Player           Unknown Player           Unknown Player           10     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player                                    40     1   2  2  
 2 Unknown Player           Unknown Player                                    30     1   2  2  
 3 Unknown Player           Unknown Player                                    20     1   2  2  
 4 Unknown Player           Unknown Player                                    10     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           Unknown Player           60     1   2  2  
 2 Unknown Player           Unknown Player           Unknown Player           40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player                                    60     1   2  2  
 2 Unknown Player           Unknown Player                                    40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           60     1   2  2  
 2 Unknown Player           Unknown Player           40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           60     1   2  2  
 2 Unknown Player           Unknown Player           40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Unknown Player                                    60     1   2  2  
 2 Unknown Player                                    40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           60     1   2  2  
 2 Unknown Player           Unknown Player           40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           60     1   2  2  
 2 Unknown Player           Unknown Player           40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           60     1   2  2  
 2 Unknown Player           Unknown Player           40     1   2  2  

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

<b>Scratches</b>
None
</pre></div>
<h1 class="TeamLineFarm_GRP"><a id="Griffins">Griffins</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=11">Red Wings Page</a> ]
[ <a href="OTHL-ProTeamRoster.php#RedWings">Pro Team Roster</a> ]
[ <a href="OTHL-FarmTeamScoring.php#Griffins">Farm Team Scoring</a> ]
[ <a href="OTHL-FarmTeamLines.php#Griffins">Farm Team Lines</a> ]
[ <a href="OTHL-FarmTeamSchedule.php#Griffins">Farm Team Schedule</a> ]
[ <a href="OTHL-FarmTeamStats.php#Griffins">Farm Team Stats</a> ]
[ <a href="OTHL-FarmTeamStatsVS.php#Griffins">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Griffins');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Griffins" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Unknown Player           Austin Wagner            Unknown Player           40     1   2  2  
 2 Unknown Player           Martin Frk               Unknown Player           30     1   2  2  
 3 Unknown Player           Unknown Player           Unknown Player           20     1   2  2  
 4 Unknown Player           Austin Wagner            Martin Frk               10     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Connor Clifton           Anton Lindholm                                    40     1   2  2  
 2 Unknown Player           Unknown Player                                    30     1   2  2  
 3 Unknown Player           Unknown Player                                    20     1   2  2  
 4 Connor Clifton           Anton Lindholm                                    10     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Unknown Player           Austin Wagner            Unknown Player           60     1   2  2  
 2 Unknown Player           Martin Frk               Unknown Player           40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Connor Clifton           Anton Lindholm                                    60     1   2  2  
 2 Unknown Player           Unknown Player                                    40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Unknown Player           Austin Wagner            60     1   2  2  
 2 Martin Frk               Unknown Player           40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Connor Clifton           Anton Lindholm           60     1   2  2  
 2 Unknown Player           Unknown Player           40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Unknown Player                                    60     1   2  2  
 2 Austin Wagner                                     40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Connor Clifton           Anton Lindholm           60     1   2  2  
 2 Unknown Player           Unknown Player           40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Unknown Player           Austin Wagner            60     1   2  2  
 2 Martin Frk               Unknown Player           40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Connor Clifton           Anton Lindholm           60     1   2  2  
 2 Unknown Player           Unknown Player           40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Unknown Player           Austin Wagner            Unknown Player           Connor Clifton           Anton Lindholm           

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Unknown Player           Austin Wagner            Unknown Player           Connor Clifton           Anton Lindholm           

<b>Goaltenders</b>
Starting : Aaron Dell               
Backup : Unknown Goalie           

<b>Extra Forwards</b>
Normal : Martin Frk, Unknown Player, Austin Wagner - PP : Martin Frk, Unknown Player - PK : Austin Wagner
<b>Extra Defensemen</b>
Normal : Connor Clifton, Anton Lindholm, Unknown Player - PP : Connor Clifton - PK : Anton Lindholm, Unknown Player
<b>Penalty Shots</b>
Unknown Player, Austin Wagner, Martin Frk, Unknown Player, Unknown Player

<b>Scratches</b>
None
</pre></div>
<h1 class="TeamLineFarm_ROC"><a id="Americans"> Americans</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=4">Sabres Page</a> ]
[ <a href="OTHL-ProTeamRoster.php#Sabres">Pro Team Roster</a> ]
[ <a href="OTHL-FarmTeamScoring.php#Americans">Farm Team Scoring</a> ]
[ <a href="OTHL-FarmTeamLines.php#Americans">Farm Team Lines</a> ]
[ <a href="OTHL-FarmTeamSchedule.php#Americans">Farm Team Schedule</a> ]
[ <a href="OTHL-FarmTeamStats.php#Americans">Farm Team Stats</a> ]
[ <a href="OTHL-FarmTeamStatsVS.php#Americans">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Americans');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Americans" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Mario Kempe              Trevor Smith             Michael Amadio           40     1   2  2  
 2 Jacob Nilsson            Remi Elie                Zac Rinaldo              30     1   2  2  
 3 Turner Elson             Ross Johnston            Justin Bailey            20     1   2  2  
 4 Mario Kempe              Turner Elson             Trevor Smith             10     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Yannick Weber            Kurtis MacDermid                                  40     1   2  2  
 2 Dakota Mermis            Tyler Lewington                                   30     1   2  2  
 3 Unknown Player           Unknown Player                                    20     1   2  2  
 4 Yannick Weber            Kurtis MacDermid                                  10     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Mario Kempe              Trevor Smith             Michael Amadio           60     1   2  2  
 2 Jacob Nilsson            Remi Elie                Zac Rinaldo              40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Yannick Weber            Kurtis MacDermid                                  60     1   2  2  
 2 Dakota Mermis            Tyler Lewington                                   40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Mario Kempe              Trevor Smith             60     1   2  2  
 2 Remi Elie                Michael Amadio           40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Yannick Weber            Kurtis MacDermid         60     1   2  2  
 2 Dakota Mermis            Tyler Lewington          40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Mario Kempe                                       60     1   2  2  
 2 Trevor Smith                                      40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Yannick Weber            Kurtis MacDermid         60     1   2  2  
 2 Dakota Mermis            Tyler Lewington          40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Mario Kempe              Trevor Smith             60     1   2  2  
 2 Remi Elie                Michael Amadio           40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Yannick Weber            Kurtis MacDermid         60     1   2  2  
 2 Dakota Mermis            Tyler Lewington          40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Mario Kempe              Trevor Smith             Michael Amadio           Yannick Weber            Kurtis MacDermid         

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Mario Kempe              Trevor Smith             Michael Amadio           Yannick Weber            Kurtis MacDermid         

<b>Goaltenders</b>
Starting : Ken Appleby              
Backup : Unknown Goalie           

<b>Extra Forwards</b>
Normal : Ross Johnston, Justin Bailey, Zac Rinaldo - PP : Ross Johnston, Justin Bailey - PK : Zac Rinaldo
<b>Extra Defensemen</b>
Normal : Dakota Mermis, Tyler Lewington, Yannick Weber - PP : Dakota Mermis - PK : Tyler Lewington, Yannick Weber
<b>Penalty Shots</b>
Mario Kempe, Trevor Smith, Remi Elie, Michael Amadio, Ross Johnston

<b>Scratches</b>
None
</pre></div>
<h1 class="TeamLineFarm_BEL"><a id="Senators">Senators</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=21">Senators Page</a> ]
[ <a href="OTHL-ProTeamRoster.php#Senators">Pro Team Roster</a> ]
[ <a href="OTHL-FarmTeamScoring.php#Senators">Farm Team Scoring</a> ]
[ <a href="OTHL-FarmTeamLines.php#Senators">Farm Team Lines</a> ]
[ <a href="OTHL-FarmTeamSchedule.php#Senators">Farm Team Schedule</a> ]
[ <a href="OTHL-FarmTeamStats.php#Senators">Farm Team Stats</a> ]
[ <a href="OTHL-FarmTeamStatsVS.php#Senators">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Senators');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Senators" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Michael Bunting          Nick Moutrey             Unknown Player           40     1   2  2  
 2 Unknown Player           Unknown Player           Unknown Player           30     1   2  2  
 3 Unknown Player           Unknown Player           Unknown Player           20     1   2  2  
 4 Michael Bunting          Nick Moutrey             Unknown Player           10     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Tim Heed                 Frank Corrado                                     40     1   2  2  
 2 Unknown Player           Unknown Player                                    30     1   2  2  
 3 Unknown Player           Unknown Player                                    20     1   2  2  
 4 Tim Heed                 Frank Corrado                                     10     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Michael Bunting          Nick Moutrey             Unknown Player           60     1   2  2  
 2 Unknown Player           Unknown Player           Unknown Player           40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Tim Heed                 Frank Corrado                                     60     1   2  2  
 2 Unknown Player           Unknown Player                                    40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Michael Bunting          Nick Moutrey             60     1   2  2  
 2 Unknown Player           Unknown Player           40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Tim Heed                 Frank Corrado            60     1   2  2  
 2 Unknown Player           Unknown Player           40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Michael Bunting                                   60     1   2  2  
 2 Nick Moutrey                                      40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Tim Heed                 Frank Corrado            60     1   2  2  
 2 Unknown Player           Unknown Player           40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Michael Bunting          Nick Moutrey             60     1   2  2  
 2 Unknown Player           Unknown Player           40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Tim Heed                 Frank Corrado            60     1   2  2  
 2 Unknown Player           Unknown Player           40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Michael Bunting          Nick Moutrey             Unknown Player           Tim Heed                 Frank Corrado            

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Michael Bunting          Nick Moutrey             Unknown Player           Tim Heed                 Frank Corrado            

<b>Goaltenders</b>
Starting : Unknown Goalie           
Backup : Unknown Goalie           

<b>Extra Forwards</b>
Normal : Michael Bunting, Nick Moutrey, Unknown Player - PP : Michael Bunting, Nick Moutrey - PK : Unknown Player
<b>Extra Defensemen</b>
Normal : Tim Heed, Frank Corrado, Unknown Player - PP : Tim Heed - PK : Frank Corrado, Unknown Player
<b>Penalty Shots</b>
Michael Bunting, Nick Moutrey, Unknown Player, Unknown Player, Unknown Player

<b>Scratches</b>
None
</pre></div>
<h1 class="TeamLineFarm_SJB"><a id="Barracudas">Barracudas</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=26">Sharks Page</a> ]
[ <a href="OTHL-ProTeamRoster.php#Sharks">Pro Team Roster</a> ]
[ <a href="OTHL-FarmTeamScoring.php#Barracudas">Farm Team Scoring</a> ]
[ <a href="OTHL-FarmTeamLines.php#Barracudas">Farm Team Lines</a> ]
[ <a href="OTHL-FarmTeamSchedule.php#Barracudas">Farm Team Schedule</a> ]
[ <a href="OTHL-FarmTeamStats.php#Barracudas">Farm Team Stats</a> ]
[ <a href="OTHL-FarmTeamStatsVS.php#Barracudas">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Barracudas');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Barracudas" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Unknown Player           Joseph LaBate            Unknown Player           40     1   2  2  
 2 Unknown Player           Unknown Player           Unknown Player           30     1   2  2  
 3 Unknown Player           Unknown Player           Unknown Player           20     1   2  2  
 4 Unknown Player           Joseph LaBate            Jimmy Schuldt            10     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Robbie Russo             Dan Renouf                                        40     1   2  2  
 2 Jimmy Schuldt            Unknown Player                                    30     1   2  2  
 3 Unknown Player           Unknown Player                                    20     1   2  2  
 4 Robbie Russo             Dan Renouf                                        10     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Unknown Player           Joseph LaBate            Unknown Player           60     1   2  2  
 2 Unknown Player           Unknown Player           Unknown Player           40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Robbie Russo             Dan Renouf                                        60     1   2  2  
 2 Jimmy Schuldt            Unknown Player                                    40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Unknown Player           Joseph LaBate            60     1   2  2  
 2 Unknown Player           Unknown Player           40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Robbie Russo             Dan Renouf               60     1   2  2  
 2 Jimmy Schuldt            Unknown Player           40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Unknown Player                                    60     1   2  2  
 2 Joseph LaBate                                     40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Robbie Russo             Dan Renouf               60     1   2  2  
 2 Jimmy Schuldt            Unknown Player           40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Unknown Player           Joseph LaBate            60     1   2  2  
 2 Unknown Player           Unknown Player           40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Robbie Russo             Dan Renouf               60     1   2  2  
 2 Jimmy Schuldt            Unknown Player           40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Unknown Player           Joseph LaBate            Unknown Player           Robbie Russo             Dan Renouf               

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Unknown Player           Joseph LaBate            Unknown Player           Robbie Russo             Dan Renouf               

<b>Goaltenders</b>
Starting : Unknown Goalie           
Backup : Unknown Goalie           

<b>Extra Forwards</b>
Normal : Unknown Player, Joseph LaBate, Unknown Player - PP : Unknown Player, Joseph LaBate - PK : Unknown Player
<b>Extra Defensemen</b>
Normal : Robbie Russo, Dan Renouf, Jimmy Schuldt - PP : Robbie Russo - PK : Dan Renouf, Jimmy Schuldt
<b>Penalty Shots</b>
Unknown Player, Joseph LaBate, Unknown Player, Unknown Player, Unknown Player

<b>Scratches</b>
None
</pre></div>
<h1 class="TeamLineFarm_TEX"><a id="Stars">Stars</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=10">Stars Page</a> ]
[ <a href="OTHL-ProTeamRoster.php#Stars">Pro Team Roster</a> ]
[ <a href="OTHL-FarmTeamScoring.php#Stars">Farm Team Scoring</a> ]
[ <a href="OTHL-FarmTeamLines.php#Stars">Farm Team Lines</a> ]
[ <a href="OTHL-FarmTeamSchedule.php#Stars">Farm Team Schedule</a> ]
[ <a href="OTHL-FarmTeamStats.php#Stars">Farm Team Stats</a> ]
[ <a href="OTHL-FarmTeamStatsVS.php#Stars">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Stars');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Stars" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Unknown Player           Phil Varone              Unknown Player           40     1   2  2  
 2 Unknown Player           Unknown Player           Unknown Player           30     1   2  2  
 3 Unknown Player           Unknown Player           Unknown Player           20     1   2  2  
 4 Unknown Player           Phil Varone              Unknown Player           10     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player                                    40     1   2  2  
 2 Unknown Player           Unknown Player                                    30     1   2  2  
 3 Unknown Player           Unknown Player                                    20     1   2  2  
 4 Unknown Player           Unknown Player                                    10     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Unknown Player           Phil Varone              Unknown Player           60     1   2  2  
 2 Unknown Player           Unknown Player           Unknown Player           40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player                                    60     1   2  2  
 2 Unknown Player           Unknown Player                                    40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Unknown Player           Phil Varone              60     1   2  2  
 2 Unknown Player           Unknown Player           40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           60     1   2  2  
 2 Unknown Player           Unknown Player           40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Unknown Player                                    60     1   2  2  
 2 Phil Varone                                       40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           60     1   2  2  
 2 Unknown Player           Unknown Player           40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Unknown Player           Phil Varone              60     1   2  2  
 2 Unknown Player           Unknown Player           40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           60     1   2  2  
 2 Unknown Player           Unknown Player           40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Unknown Player           Phil Varone              Unknown Player           Unknown Player           Unknown Player           

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Unknown Player           Phil Varone              Unknown Player           Unknown Player           Unknown Player           

<b>Goaltenders</b>
Starting : Jean-Francois Berube     
Backup : Unknown Goalie           

<b>Extra Forwards</b>
Normal : Unknown Player, Phil Varone, Unknown Player - PP : Unknown Player, Phil Varone - PK : Unknown Player
<b>Extra Defensemen</b>
Normal : Unknown Player, Unknown Player, Unknown Player - PP : Unknown Player - PK : Unknown Player, Unknown Player
<b>Penalty Shots</b>
Unknown Player, Phil Varone, Unknown Player, Unknown Player, Unknown Player

<b>Scratches</b>
None
</pre></div>
<h1 class="TeamLineFarm_IOA"><a id="Wild">Wild</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=15">Wild Page</a> ]
[ <a href="OTHL-ProTeamRoster.php#Wild">Pro Team Roster</a> ]
[ <a href="OTHL-FarmTeamScoring.php#Wild">Farm Team Scoring</a> ]
[ <a href="OTHL-FarmTeamLines.php#Wild">Farm Team Lines</a> ]
[ <a href="OTHL-FarmTeamSchedule.php#Wild">Farm Team Schedule</a> ]
[ <a href="OTHL-FarmTeamStats.php#Wild">Farm Team Stats</a> ]
[ <a href="OTHL-FarmTeamStatsVS.php#Wild">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Wild');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Wild" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           Unknown Player           40     1   2  2  
 2 Unknown Player           Unknown Player           Unknown Player           30     1   2  2  
 3 Unknown Player           Unknown Player           Unknown Player           20     1   2  2  
 4 Unknown Player           Unknown Player           Unknown Player           10     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player                                    40     1   2  2  
 2 Unknown Player           Unknown Player                                    30     1   2  2  
 3 Unknown Player           Unknown Player                                    20     1   2  2  
 4 Unknown Player           Unknown Player                                    10     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           Unknown Player           60     1   2  2  
 2 Unknown Player           Unknown Player           Unknown Player           40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player                                    60     1   2  2  
 2 Unknown Player           Unknown Player                                    40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           60     1   2  2  
 2 Unknown Player           Unknown Player           40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           60     1   2  2  
 2 Unknown Player           Unknown Player           40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Unknown Player                                    60     1   2  2  
 2 Unknown Player                                    40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           60     1   2  2  
 2 Unknown Player           Unknown Player           40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           60     1   2  2  
 2 Unknown Player           Unknown Player           40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           60     1   2  2  
 2 Unknown Player           Unknown Player           40     1   2  2  

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

<b>Scratches</b>
None
</pre></div>
<?php include "Footer.php";?>
