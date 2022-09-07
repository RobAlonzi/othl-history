<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<title>OTHL - Farm Team Lines</title>
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
<b>Custom OT Lines Forwards</b>
Unknown Player, Unknown Player, Unknown Player, Unknown Player, Unknown Player, Unknown Player, Unknown Player, Unknown Player, Unknown Player, Unknown Player
<b>Custom OT Lines Defensemen</b>
Unknown Player, Unknown Player, Unknown Player, Unknown Player, Unknown Player

<b>Scratches</b>
Brett Sutter (Suspend)</pre></div>
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
 1 Sebastian Aho            Max Comtois              Dominik Simon            40     1   2  2  
 2 Glenn Gawdin             Joseph Blandisi          Kiefer Sherwood          30     1   2  2  
 3 Logan Brown              Jesper Boqvist           Valentin Zykov           20     1   2  2  
 4 Zac Dalpe                Carsen Twarynski         Sebastian Aho            10     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Cameron Schilling        Matt Bartkowski                                   40     1   2  2  
 2 Ville Pokka              Mitch Vande Sompel                                30     1   2  2  
 3 Zac Dalpe                Carsen Twarynski                                  20     1   2  2  
 4 Cameron Schilling        Matt Bartkowski                                   10     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Sebastian Aho            Max Comtois              Dominik Simon            60     1   2  2  
 2 Glenn Gawdin             Joseph Blandisi          Kiefer Sherwood          40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Cameron Schilling        Matt Bartkowski                                   60     1   2  2  
 2 Ville Pokka              Mitch Vande Sompel                                40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Sebastian Aho            Max Comtois              60     1   2  2  
 2 Dominik Simon            Glenn Gawdin             40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Cameron Schilling        Matt Bartkowski          60     1   2  2  
 2 Ville Pokka              Mitch Vande Sompel       40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Sebastian Aho                                     60     1   2  2  
 2 Max Comtois                                       40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Cameron Schilling        Matt Bartkowski          60     1   2  2  
 2 Ville Pokka              Mitch Vande Sompel       40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Sebastian Aho            Max Comtois              60     1   2  2  
 2 Dominik Simon            Glenn Gawdin             40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Cameron Schilling        Matt Bartkowski          60     1   2  2  
 2 Ville Pokka              Mitch Vande Sompel       40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Sebastian Aho            Max Comtois              Dominik Simon            Cameron Schilling        Matt Bartkowski          

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Sebastian Aho            Max Comtois              Dominik Simon            Cameron Schilling        Matt Bartkowski          

<b>Goaltenders</b>
Starting : Unknown Goalie           
Backup : Unknown Goalie           

<b>Extra Forwards</b>
Normal : Skyler McKenzie, Griffen Molino, Logan Brown - PP : Skyler McKenzie, Griffen Molino - PK : Logan Brown
<b>Extra Defensemen</b>
Normal : Ville Pokka, Mitch Vande Sompel, Cameron Schilling - PP : Ville Pokka - PK : Mitch Vande Sompel, Cameron Schilling
<b>Penalty Shots</b>
Sebastian Aho, Max Comtois, Dominik Simon, Glenn Gawdin, Joseph Blandisi
<b>Custom OT Lines Forwards</b>
Sebastian Aho, Max Comtois, Dominik Simon, Glenn Gawdin, Joseph Blandisi, Logan Brown, Kiefer Sherwood, Jesper Boqvist, Valentin Zykov, Zac Dalpe
<b>Custom OT Lines Defensemen</b>
Cameron Schilling, Matt Bartkowski, Ville Pokka, Mitch Vande Sompel, Unknown Player

<b>Scratches</b>
Max Veronneau (Healthy), Igor Shesterkin (Healthy)</pre></div>
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
 1 Denis Malgin             Phillip Di Giuseppe      Frederick Gaudreau       40     1   2  2  
 2 Filip Chlapik            Greg McKegg              Patrick Russell          30     1   2  2  
 3 T.J. Tynan               Justin Kirkland          Kole Lind                20     1   2  2  
 4 Phillip Di Giuseppe      Denis Malgin             Lukas Jasek              10     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Unknown Player           Tommy Cross                                       40     1   2  2  
 2 Unknown Player           Unknown Player                                    30     1   2  2  
 3 Evan McEneny             Lukas Jasek                                       20     1   2  2  
 4 Unknown Player           Tommy Cross                                       10     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Denis Malgin             Phillip Di Giuseppe      Frederick Gaudreau       60     1   2  2  
 2 Filip Chlapik            Greg McKegg              Patrick Russell          40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Unknown Player           Tommy Cross                                       60     1   2  2  
 2 Unknown Player           Unknown Player                                    40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Phillip Di Giuseppe      Denis Malgin             60     1   2  2  
 2 Filip Chlapik            Frederick Gaudreau       40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Unknown Player           Tommy Cross              60     1   2  2  
 2 Unknown Player           Unknown Player           40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Phillip Di Giuseppe                               60     1   2  2  
 2 Denis Malgin                                      40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Unknown Player           Tommy Cross              60     1   2  2  
 2 Unknown Player           Unknown Player           40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Phillip Di Giuseppe      Denis Malgin             60     1   2  2  
 2 Filip Chlapik            Frederick Gaudreau       40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Unknown Player           Tommy Cross              60     1   2  2  
 2 Unknown Player           Unknown Player           40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Denis Malgin             Phillip Di Giuseppe      Frederick Gaudreau       Unknown Player           Tommy Cross              

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Denis Malgin             Phillip Di Giuseppe      Frederick Gaudreau       Unknown Player           Tommy Cross              

<b>Goaltenders</b>
Starting : Alex Lyon                
Backup : Unknown Goalie           

<b>Extra Forwards</b>
Normal : Kole Lind, Justin Kirkland, T.J. Tynan - PP : Kole Lind, Justin Kirkland - PK : T.J. Tynan
<b>Extra Defensemen</b>
Normal : Evan McEneny, Unknown Player, Unknown Player - PP : Evan McEneny - PK : Unknown Player, Unknown Player
<b>Penalty Shots</b>
Phillip Di Giuseppe, Denis Malgin, Filip Chlapik, Frederick Gaudreau, Greg McKegg
<b>Custom OT Lines Forwards</b>
Unknown Player, Unknown Player, Unknown Player, Unknown Player, Unknown Player, Unknown Player, Unknown Player, Unknown Player, Unknown Player, Unknown Player
<b>Custom OT Lines Defensemen</b>
Unknown Player, Unknown Player, Unknown Player, Unknown Player, Unknown Player

<b>Scratches</b>
Jack Rodewald (Healthy), Giovanni Fiore (Healthy), Brandon Baddock (Healthy), Adam Wilcox (Healthy), Brad Thiessen (Healthy)</pre></div>
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
<b>Custom OT Lines Forwards</b>
Unknown Player, Unknown Player, Unknown Player, Unknown Player, Unknown Player, Unknown Player, Unknown Player, Unknown Player, Unknown Player, Unknown Player
<b>Custom OT Lines Defensemen</b>
Unknown Player, Unknown Player, Unknown Player, Unknown Player, Unknown Player

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
 1 Anthony Angello          Lawson Crouse            Gabriel Bourque          40     1   2  2  
 2 Manuel Wiederer          Nathan Walker            Jens Looke               30     1   2  2  
 3 Gabriel Fontaine         Giorgio Estephan         Kole Sherwood            20     1   2  2  
 4 Giorgio Estephan         Lawson Crouse            Gabriel Bourque          10     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Jaycob Megna             Ben Harpur                                        40     1   2  2  
 2 Chris Bigras             Michael Anderson                                  30     1   2  2  
 3 Devante Stephens         Gustav Olofsson                                   20     1   2  2  
 4 Jake Dotchin             Ryan Collins                                      10     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Anthony Angello          Lawson Crouse            Gabriel Bourque          60     1   2  2  
 2 Manuel Wiederer          Nathan Walker            Jens Looke               40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Jaycob Megna             Ben Harpur                                        60     1   2  2  
 2 Chris Bigras             Michael Anderson                                  40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Lawson Crouse            Gabriel Bourque          60     1   2  2  
 2 Anthony Angello          Nathan Walker            40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Jaycob Megna             Ben Harpur               60     1   2  2  
 2 Chris Bigras             Michael Anderson         40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Lawson Crouse                                     60     1   2  2  
 2 Gabriel Bourque                                   40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Jaycob Megna             Ben Harpur               60     1   2  2  
 2 Chris Bigras             Michael Anderson         40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Lawson Crouse            Gabriel Bourque          60     1   2  2  
 2 Anthony Angello          Nathan Walker            40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Jaycob Megna             Ben Harpur               60     1   2  2  
 2 Chris Bigras             Michael Anderson         40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Anthony Angello          Lawson Crouse            Gabriel Bourque          Jaycob Megna             Ben Harpur               

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Anthony Angello          Lawson Crouse            Gabriel Bourque          Jaycob Megna             Ben Harpur               

<b>Goaltenders</b>
Starting : Connor Ingram            
Backup : Matthew Villalta         

<b>Extra Forwards</b>
Normal : Kole Sherwood, Gabriel Fontaine, Jens Looke - PP : Kole Sherwood, Gabriel Fontaine - PK : Jens Looke
<b>Extra Defensemen</b>
Normal : Devante Stephens, Gustav Olofsson, Jake Dotchin - PP : Devante Stephens - PK : Gustav Olofsson, Jake Dotchin
<b>Penalty Shots</b>
Lawson Crouse, Gabriel Bourque, Anthony Angello, Nathan Walker, Jens Looke
<b>Custom OT Lines Forwards</b>
Lawson Crouse, Gabriel Bourque, Anthony Angello, Nathan Walker, Jens Looke, Kole Sherwood, Manuel Wiederer, Gabriel Fontaine, Giorgio Estephan, Unknown Player
<b>Custom OT Lines Defensemen</b>
Jaycob Megna, Ben Harpur, Chris Bigras, Michael Anderson, Devante Stephens

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
 1 Yakov Trenin             Kalle Kossila            Jonny Brodzinski         40     1   2  2  
 2 Matthew Phillips         Sheldon Rempal           Matt Luff                30     1   2  2  
 3 Unknown Player           Unknown Player           Unknown Player           20     1   2  2  
 4 Jonny Brodzinski         Yakov Trenin             Matthew Phillips         10     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Chase Priskie            Alex Petrovic                                     40     1   2  2  
 2 T.J. Brennan             Otto Leskinen                                     30     1   2  2  
 3 Noah Juulsen             Unknown Player                                    20     1   2  2  
 4 Chase Priskie            Alex Petrovic                                     10     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Yakov Trenin             Kalle Kossila            Jonny Brodzinski         60     1   2  2  
 2 Matthew Phillips         Sheldon Rempal           Matt Luff                40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Chase Priskie            Alex Petrovic                                     60     1   2  2  
 2 T.J. Brennan             Otto Leskinen                                     40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Jonny Brodzinski         Yakov Trenin             60     1   2  2  
 2 Matthew Phillips         Matt Luff                40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Chase Priskie            Alex Petrovic            60     1   2  2  
 2 T.J. Brennan             Otto Leskinen            40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Jonny Brodzinski                                  60     1   2  2  
 2 Yakov Trenin                                      40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Chase Priskie            Alex Petrovic            60     1   2  2  
 2 T.J. Brennan             Otto Leskinen            40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Jonny Brodzinski         Yakov Trenin             60     1   2  2  
 2 Matthew Phillips         Matt Luff                40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Chase Priskie            Alex Petrovic            60     1   2  2  
 2 T.J. Brennan             Otto Leskinen            40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Yakov Trenin             Kalle Kossila            Jonny Brodzinski         Chase Priskie            Alex Petrovic            

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Yakov Trenin             Kalle Kossila            Jonny Brodzinski         Chase Priskie            Alex Petrovic            

<b>Goaltenders</b>
Starting : Mikhail Berdin           
Backup : David Ayres              

<b>Extra Forwards</b>
Normal : Kalle Kossila, Sheldon Rempal, Matt Luff - PP : Kalle Kossila, Sheldon Rempal - PK : Matt Luff
<b>Extra Defensemen</b>
Normal : Noah Juulsen, T.J. Brennan, Otto Leskinen - PP : Noah Juulsen - PK : T.J. Brennan, Otto Leskinen
<b>Penalty Shots</b>
Jonny Brodzinski, Yakov Trenin, Matthew Phillips, Matt Luff, Kalle Kossila
<b>Custom OT Lines Forwards</b>
Jonny Brodzinski, Yakov Trenin, Matthew Phillips, Matt Luff, Kalle Kossila, Sheldon Rempal, Unknown Player, Unknown Player, Unknown Player, Unknown Player
<b>Custom OT Lines Defensemen</b>
Chase Priskie, Alex Petrovic, T.J. Brennan, Otto Leskinen, Noah Juulsen

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
 1 Michael McLeod           Joel Farabee             Joshua Ho-Sang           40     1   2  2  
 2 Alexander True           Brett Seney              Tyler Steenbergen        30     1   2  2  
 3 Brian Pinho              Rudolfs Balcers          Logan O'Connor           20     1   2  2  
 4 Garrett Pilon            Boris Katchouk           Joel Farabee             10     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Haydn Fleury             Jacob Middleton                                   40     1   2  2  
 2 Unknown Player           Gavin Bayreuther                                  30     1   2  2  
 3 Frederic Allard          Garrett Pilon                                     20     1   2  2  
 4 Haydn Fleury             Jacob Middleton                                   10     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Michael McLeod           Joel Farabee             Joshua Ho-Sang           60     1   2  2  
 2 Alexander True           Brett Seney              Tyler Steenbergen        40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Haydn Fleury             Jacob Middleton                                   60     1   2  2  
 2 Unknown Player           Gavin Bayreuther                                  40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Joel Farabee             Michael McLeod           60     1   2  2  
 2 Alexander True           Brett Seney              40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Haydn Fleury             Jacob Middleton          60     1   2  2  
 2 Unknown Player           Gavin Bayreuther         40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Joel Farabee                                      60     1   2  2  
 2 Michael McLeod                                    40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Haydn Fleury             Jacob Middleton          60     1   2  2  
 2 Unknown Player           Gavin Bayreuther         40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Joel Farabee             Michael McLeod           60     1   2  2  
 2 Alexander True           Brett Seney              40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Haydn Fleury             Jacob Middleton          60     1   2  2  
 2 Unknown Player           Gavin Bayreuther         40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Michael McLeod           Joel Farabee             Joshua Ho-Sang           Haydn Fleury             Jacob Middleton          

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Michael McLeod           Joel Farabee             Joshua Ho-Sang           Haydn Fleury             Jacob Middleton          

<b>Goaltenders</b>
Starting : Alexandar Georgiev       
Backup : Hunter Miska             

<b>Extra Forwards</b>
Normal : Rudolfs Balcers, Brian Pinho, Boris Katchouk - PP : Rudolfs Balcers, Brian Pinho - PK : Boris Katchouk
<b>Extra Defensemen</b>
Normal : Frederic Allard, Unknown Player, Gavin Bayreuther - PP : Frederic Allard - PK : Unknown Player, Gavin Bayreuther
<b>Penalty Shots</b>
Joel Farabee, Michael McLeod, Alexander True, Brett Seney, Rudolfs Balcers
<b>Custom OT Lines Forwards</b>
Joel Farabee, Michael McLeod, Alexander True, Brett Seney, Rudolfs Balcers, Brian Pinho, Garrett Pilon, Boris Katchouk, Joshua Ho-Sang, Tyler Steenbergen
<b>Custom OT Lines Defensemen</b>
Haydn Fleury, Jacob Middleton, Unknown Player, Gavin Bayreuther, Frederic Allard

<b>Scratches</b>
Anton Blidh (Healthy), Ben Gleason (Healthy), Gabriel Carlsson (Healthy), Jonathan Ang (Healthy), Tanner Kaspick (Healthy)
Landon Bow (Healthy)</pre></div>
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
 1 Unknown Player           Unknown Player           Unknown Player           40     1   2  2  
 2 Unknown Player           A.J. Greer               Unknown Player           30     1   2  2  
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
 2 Unknown Player           A.J. Greer               Unknown Player           40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player                                    60     1   2  2  
 2 Unknown Player           Unknown Player                                    40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           60     1   2  2  
 2 A.J. Greer               Unknown Player           40     1   2  2  

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
 2 A.J. Greer               Unknown Player           40     1   2  2  

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
Normal : A.J. Greer, Unknown Player, Unknown Player - PP : A.J. Greer, Unknown Player - PK : Unknown Player
<b>Extra Defensemen</b>
Normal : Unknown Player, Unknown Player, Unknown Player - PP : Unknown Player - PK : Unknown Player, Unknown Player
<b>Penalty Shots</b>
Unknown Player, Unknown Player, Unknown Player, A.J. Greer, Unknown Player
<b>Custom OT Lines Forwards</b>
Unknown Player, Unknown Player, Unknown Player, Unknown Player, Unknown Player, Unknown Player, Unknown Player, Unknown Player, Unknown Player, Unknown Player
<b>Custom OT Lines Defensemen</b>
Unknown Player, Unknown Player, Unknown Player, Unknown Player, Unknown Player

<b>Scratches</b>
None
</pre></div>
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
 1 Unknown Player           Unknown Player           Unknown Player           40     1   2  2  
 2 Tanner Fritz             Unknown Player           Unknown Player           30     1   2  2  
 3 Unknown Player           Unknown Player           Nico Sturm               20     1   2  2  
 4 Unknown Player           Unknown Player           Unknown Player           10     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player                                    40     1   2  2  
 2 Brady Keeper             Unknown Player                                    30     1   2  2  
 3 Unknown Player           Unknown Player                                    20     1   2  2  
 4 Unknown Player           Unknown Player                                    10     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           Unknown Player           60     1   2  2  
 2 Tanner Fritz             Unknown Player           Unknown Player           40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player                                    60     1   2  2  
 2 Brady Keeper             Unknown Player                                    40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           60     1   2  2  
 2 Unknown Player           Unknown Player           40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           60     1   2  2  
 2 Brady Keeper             Unknown Player           40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Unknown Player                                    60     1   2  2  
 2 Unknown Player                                    40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           60     1   2  2  
 2 Brady Keeper             Unknown Player           40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           60     1   2  2  
 2 Unknown Player           Unknown Player           40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           60     1   2  2  
 2 Brady Keeper             Unknown Player           40     1   2  2  

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
Normal : Unknown Player, Nico Sturm, Tanner Fritz - PP : Unknown Player, Nico Sturm - PK : Tanner Fritz
<b>Extra Defensemen</b>
Normal : Brady Keeper, Unknown Player, Unknown Player - PP : Brady Keeper - PK : Unknown Player, Unknown Player
<b>Penalty Shots</b>
Unknown Player, Unknown Player, Unknown Player, Unknown Player, Tanner Fritz
<b>Custom OT Lines Forwards</b>
Unknown Player, Unknown Player, Unknown Player, Unknown Player, Unknown Player, Unknown Player, Unknown Player, Unknown Player, Unknown Player, Unknown Player
<b>Custom OT Lines Defensemen</b>
Unknown Player, Unknown Player, Unknown Player, Unknown Player, Unknown Player

<b>Scratches</b>
David Backes (Healthy), Sheldon Dries (Healthy)</pre></div>
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
 1 Unknown Player           Unknown Player           Scott Sabourin           40     1   2  2  
 2 Unknown Player           Joakim Nygard            Joel Kiviranta           30     1   2  2  
 3 Kyle Criscuolo           Unknown Player           Blake Speers             20     1   2  2  
 4 Brent Gates              Unknown Player           Unknown Player           10     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player                                    40     1   2  2  
 2 Leon Gawanke             Unknown Player                                    30     1   2  2  
 3 Niko Mikkola             Unknown Player                                    20     1   2  2  
 4 Unknown Player           Unknown Player                                    10     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           Scott Sabourin           60     1   2  2  
 2 Unknown Player           Joakim Nygard            Joel Kiviranta           40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player                                    60     1   2  2  
 2 Leon Gawanke             Unknown Player                                    40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           60     1   2  2  
 2 Unknown Player           Joakim Nygard            40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           60     1   2  2  
 2 Leon Gawanke             Unknown Player           40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Unknown Player                                    60     1   2  2  
 2 Unknown Player                                    40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           60     1   2  2  
 2 Leon Gawanke             Unknown Player           40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           60     1   2  2  
 2 Unknown Player           Joakim Nygard            40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           60     1   2  2  
 2 Leon Gawanke             Unknown Player           40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Unknown Player           Unknown Player           Scott Sabourin           Unknown Player           Unknown Player           

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Unknown Player           Unknown Player           Scott Sabourin           Unknown Player           Unknown Player           

<b>Goaltenders</b>
Starting : Unknown Goalie           
Backup : Unknown Goalie           

<b>Extra Forwards</b>
Normal : Kyle Criscuolo, Unknown Player, Brent Gates - PP : Kyle Criscuolo, Unknown Player - PK : Brent Gates
<b>Extra Defensemen</b>
Normal : Niko Mikkola, Unknown Player, Leon Gawanke - PP : Niko Mikkola - PK : Unknown Player, Leon Gawanke
<b>Penalty Shots</b>
Unknown Player, Unknown Player, Unknown Player, Joakim Nygard, Scott Sabourin
<b>Custom OT Lines Forwards</b>
Unknown Player, Unknown Player, Unknown Player, Unknown Player, Unknown Player, Unknown Player, Unknown Player, Unknown Player, Unknown Player, Unknown Player
<b>Custom OT Lines Defensemen</b>
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
 1 Alex Steen               Matthew Peca             Kevin Stenlund           40     1   2  2  
 2 Trent Frederic           Cameron Hughes           Zach Senyshyn            30     1   2  2  
 3 Ryan MacInnis            Unknown Player           Unknown Player           20     1   2  2  
 4 Cameron Hughes           Alex Steen               Kevin Stenlund           10     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Noah Dobson              Jeremy Roy                                        40     1   2  2  
 2 Lucas Johansen           Unknown Player                                    30     1   2  2  
 3 Unknown Player           Unknown Player                                    20     1   2  2  
 4 Noah Dobson              Jeremy Roy                                        10     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Alex Steen               Matthew Peca             Kevin Stenlund           60     1   2  2  
 2 Trent Frederic           Cameron Hughes           Zach Senyshyn            40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Noah Dobson              Jeremy Roy                                        60     1   2  2  
 2 Lucas Johansen           Unknown Player                                    40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Alex Steen               Kevin Stenlund           60     1   2  2  
 2 Matthew Peca             Zach Senyshyn            40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Noah Dobson              Jeremy Roy               60     1   2  2  
 2 Lucas Johansen           Unknown Player           40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Alex Steen                                        60     1   2  2  
 2 Kevin Stenlund                                    40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Noah Dobson              Jeremy Roy               60     1   2  2  
 2 Lucas Johansen           Unknown Player           40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Alex Steen               Kevin Stenlund           60     1   2  2  
 2 Matthew Peca             Zach Senyshyn            40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Noah Dobson              Jeremy Roy               60     1   2  2  
 2 Lucas Johansen           Unknown Player           40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Alex Steen               Matthew Peca             Kevin Stenlund           Noah Dobson              Jeremy Roy               

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Alex Steen               Matthew Peca             Kevin Stenlund           Noah Dobson              Jeremy Roy               

<b>Goaltenders</b>
Starting : Ian Scott                
Backup : Unknown Goalie           

<b>Extra Forwards</b>
Normal : Ryan MacInnis, Trent Frederic, Cameron Hughes - PP : Ryan MacInnis, Trent Frederic - PK : Cameron Hughes
<b>Extra Defensemen</b>
Normal : Lucas Johansen, Noah Dobson, Jeremy Roy - PP : Lucas Johansen - PK : Noah Dobson, Jeremy Roy
<b>Penalty Shots</b>
Alex Steen, Kevin Stenlund, Matthew Peca, Zach Senyshyn, Trent Frederic
<b>Custom OT Lines Forwards</b>
Alex Steen, Kevin Stenlund, Matthew Peca, Zach Senyshyn, Trent Frederic, Ryan MacInnis, Cameron Hughes, Unknown Player, Unknown Player, Unknown Player
<b>Custom OT Lines Defensemen</b>
Noah Dobson, Jeremy Roy, Lucas Johansen, Unknown Player, Unknown Player

<b>Scratches</b>
None
</pre></div>
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
 1 Brad Malone              Vitaly Abramov           Nick Merkley             40     0   0  5  
 2 David Gustafsson         Taro Hirose              Mathieu Olivier          30     0   0  5  
 3 Rasmus Asplund           Danil Yurtaykin          Tyrell Goulbourne        20     0   0  5  
 4 Rasmus Asplund           Vitaly Abramov           Taro Hirose              10     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Brent Seabrook           Travis Dermott                                    40     0   0  5  
 2 Jake Bean                Samuel Morin                                      30     0   0  5  
 3 Blake Hillman            Steven Santini                                    20     1   2  2  
 4 Jake Bean                Brent Seabrook                                    10     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Brad Malone              Vitaly Abramov           Nick Merkley             60     0   0  5  
 2 David Gustafsson         Taro Hirose              Rasmus Asplund           40     0   0  5  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Brent Seabrook           Travis Dermott                                    60     0   0  5  
 2 Jake Bean                Samuel Morin                                      40     0   0  5  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Rasmus Asplund           Vitaly Abramov           60     0   5  0  
 2 Taro Hirose              Nick Merkley             40     0   5  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Brent Seabrook           Travis Dermott           60     0   5  0  
 2 Jake Bean                Samuel Morin             40     0   5  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Rasmus Asplund                                    60     0   5  0  
 2 Vitaly Abramov                                    40     0   5  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Brent Seabrook           Travis Dermott           60     0   5  0  
 2 Jake Bean                Samuel Morin             40     0   5  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Brad Malone              Vitaly Abramov           60     0   0  5  
 2 Taro Hirose              Nick Merkley             40     0   0  5  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Brent Seabrook           Travis Dermott           60     0   0  5  
 2 Jake Bean                Samuel Morin             40     0   0  5  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Brad Malone              Rasmus Asplund           Nick Merkley             Brent Seabrook           Travis Dermott           

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Brad Malone              Vitaly Abramov           Nick Merkley             Brent Seabrook           Travis Dermott           

<b>Goaltenders</b>
Starting : Casey DeSmith            
Backup : Oscar Dansk              

<b>Extra Forwards</b>
Normal : Brad Malone, Tyrell Goulbourne, David Gustafsson - PP : Brad Malone, Tyrell Goulbourne - PK : David Gustafsson
<b>Extra Defensemen</b>
Normal : Travis Dermott, Steven Santini, Samuel Morin - PP : Travis Dermott - PK : Travis Dermott, Samuel Morin
<b>Penalty Shots</b>
Travis Dermott, Vitaly Abramov, Taro Hirose, Nick Merkley, David Gustafsson
<b>Custom OT Lines Forwards</b>
Brad Malone, Nick Merkley, Danil Yurtaykin, David Gustafsson, Vitaly Abramov, Tyrell Goulbourne, Mathieu Olivier, Taro Hirose, Rasmus Asplund, Unknown Player
<b>Custom OT Lines Defensemen</b>
Travis Dermott, Samuel Morin, Jake Bean, Steven Santini, Zach Trotman

<b>Scratches</b>
Paul Carey (Healthy)</pre></div>
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
 1 Jordan Weal              Ross Colton              Trey Fix-Wolansky        40     1   2  2  
 2 Nolan Stevens            Adam Johnson             Brandon Duhaime          30     1   2  2  
 3 Mason Shaw               Luke Gazdic              Josiah Didier            20     1   2  2  
 4 Jordan Weal              Ross Colton              Nolan Stevens            10     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Jan Rutta                Cameron Gaunce                                    40     1   2  2  
 2 Dillon Simpson           Brandon Manning                                   30     1   2  2  
 3 Joel Hanley              Erik Burgdoerfer                                  20     1   2  2  
 4 Josiah Didier            Jan Rutta                                         10     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Jordan Weal              Ross Colton              Trey Fix-Wolansky        60     1   2  2  
 2 Nolan Stevens            Adam Johnson             Brandon Duhaime          40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Jan Rutta                Cameron Gaunce                                    60     1   2  2  
 2 Dillon Simpson           Brandon Manning                                   40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Jordan Weal              Ross Colton              60     1   2  2  
 2 Nolan Stevens            Adam Johnson             40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Jan Rutta                Cameron Gaunce           60     1   2  2  
 2 Dillon Simpson           Brandon Manning          40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Jordan Weal                                       60     1   2  2  
 2 Ross Colton                                       40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Jan Rutta                Cameron Gaunce           60     1   2  2  
 2 Dillon Simpson           Brandon Manning          40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Jordan Weal              Ross Colton              60     1   2  2  
 2 Nolan Stevens            Adam Johnson             40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Jan Rutta                Cameron Gaunce           60     1   2  2  
 2 Dillon Simpson           Brandon Manning          40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Jordan Weal              Ross Colton              Trey Fix-Wolansky        Jan Rutta                Cameron Gaunce           

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Jordan Weal              Ross Colton              Trey Fix-Wolansky        Jan Rutta                Cameron Gaunce           

<b>Goaltenders</b>
Starting : Michael Hutchinson       
Backup : Unknown Goalie           

<b>Extra Forwards</b>
Normal : Mason Shaw, Luke Gazdic, Trey Fix-Wolansky - PP : Mason Shaw, Luke Gazdic - PK : Trey Fix-Wolansky
<b>Extra Defensemen</b>
Normal : Joel Hanley, Erik Burgdoerfer, Josiah Didier - PP : Joel Hanley - PK : Erik Burgdoerfer, Josiah Didier
<b>Penalty Shots</b>
Jordan Weal, Ross Colton, Nolan Stevens, Adam Johnson, Trey Fix-Wolansky
<b>Custom OT Lines Forwards</b>
Jordan Weal, Ross Colton, Nolan Stevens, Adam Johnson, Trey Fix-Wolansky, Brandon Duhaime, Mason Shaw, Luke Gazdic, Unknown Player, Unknown Player
<b>Custom OT Lines Defensemen</b>
Jan Rutta, Cameron Gaunce, Dillon Simpson, Brandon Manning, Joel Hanley

<b>Scratches</b>
Byron Froese (Healthy)</pre></div>
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
 1 Dominic Turgeon          Liam Foudy               Nicholas Baptiste        40     1   2  2  
 2 Unknown Player           Unknown Player           Unknown Player           30     1   2  2  
 3 Unknown Player           Unknown Player           Unknown Player           20     1   2  2  
 4 Dominic Turgeon          Nicholas Baptiste        Liam Foudy               10     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Juuso Valimaki           Sami Niku                                         40     1   2  2  
 2 Kale Clague              Daniel Brickley                                   30     1   2  2  
 3 Unknown Player           Unknown Player                                    20     1   2  2  
 4 Juuso Valimaki           Sami Niku                                         10     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Dominic Turgeon          Liam Foudy               Nicholas Baptiste        60     1   2  2  
 2 Unknown Player           Unknown Player           Unknown Player           40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Juuso Valimaki           Sami Niku                                         60     1   2  2  
 2 Kale Clague              Daniel Brickley                                   40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Dominic Turgeon          Nicholas Baptiste        60     1   2  2  
 2 Liam Foudy               Unknown Player           40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Juuso Valimaki           Sami Niku                60     1   2  2  
 2 Kale Clague              Daniel Brickley          40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Dominic Turgeon                                   60     1   2  2  
 2 Nicholas Baptiste                                 40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Juuso Valimaki           Sami Niku                60     1   2  2  
 2 Kale Clague              Daniel Brickley          40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Dominic Turgeon          Nicholas Baptiste        60     1   2  2  
 2 Liam Foudy               Unknown Player           40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Juuso Valimaki           Sami Niku                60     1   2  2  
 2 Kale Clague              Daniel Brickley          40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Dominic Turgeon          Liam Foudy               Nicholas Baptiste        Juuso Valimaki           Sami Niku                

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Dominic Turgeon          Liam Foudy               Nicholas Baptiste        Juuso Valimaki           Sami Niku                

<b>Goaltenders</b>
Starting : Adam Werner              
Backup : Unknown Goalie           

<b>Extra Forwards</b>
Normal : Liam Foudy, Dominic Turgeon, Nicholas Baptiste - PP : Liam Foudy, Dominic Turgeon - PK : Nicholas Baptiste
<b>Extra Defensemen</b>
Normal : Kale Clague, Daniel Brickley, Juuso Valimaki - PP : Kale Clague - PK : Daniel Brickley, Juuso Valimaki
<b>Penalty Shots</b>
Dominic Turgeon, Nicholas Baptiste, Liam Foudy, Unknown Player, Unknown Player
<b>Custom OT Lines Forwards</b>
Dominic Turgeon, Nicholas Baptiste, Liam Foudy, Unknown Player, Unknown Player, Unknown Player, Unknown Player, Unknown Player, Unknown Player, Unknown Player
<b>Custom OT Lines Defensemen</b>
Juuso Valimaki, Sami Niku, Kale Clague, Daniel Brickley, Unknown Player

<b>Scratches</b>
John Gilmour (Healthy)</pre></div>
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
 1 Unknown Player           Casey Mittelstadt        Kaapo Kakko              40     1   2  2  
 2 Ryan Donato              Jack Hughes              Troy Terry               30     1   2  2  
 3 Mitchell Stephens        Alexander Volkov         Sasha Chmelevski         20     1   2  2  
 4 Philipp Kurashev         Unknown Player           Unknown Player           10     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Unknown Player           Christian Jaros                                   40     1   2  2  
 2 Alex Alexeyev            Nelson Nogier                                     30     1   2  2  
 3 Philipp Kurashev         Egor Sharangovich                                 20     1   2  2  
 4 Unknown Player           Christian Jaros                                   10     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Unknown Player           Casey Mittelstadt        Kaapo Kakko              60     1   2  2  
 2 Ryan Donato              Jack Hughes              Troy Terry               40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Unknown Player           Christian Jaros                                   60     1   2  2  
 2 Alex Alexeyev            Nelson Nogier                                     40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Unknown Player           Casey Mittelstadt        60     1   2  2  
 2 Ryan Donato              Kaapo Kakko              40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Unknown Player           Christian Jaros          60     1   2  2  
 2 Alex Alexeyev            Nelson Nogier            40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Unknown Player                                    60     1   2  2  
 2 Casey Mittelstadt                                 40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Unknown Player           Christian Jaros          60     1   2  2  
 2 Alex Alexeyev            Nelson Nogier            40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Unknown Player           Casey Mittelstadt        60     1   2  2  
 2 Ryan Donato              Kaapo Kakko              40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Unknown Player           Christian Jaros          60     1   2  2  
 2 Alex Alexeyev            Nelson Nogier            40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Unknown Player           Casey Mittelstadt        Kaapo Kakko              Unknown Player           Christian Jaros          

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Unknown Player           Casey Mittelstadt        Kaapo Kakko              Unknown Player           Christian Jaros          

<b>Goaltenders</b>
Starting : Matiss Kivlenieks        
Backup : Unknown Goalie           

<b>Extra Forwards</b>
Normal : Unknown Player, Alexander Volkov, Mitchell Stephens - PP : Unknown Player, Alexander Volkov - PK : Mitchell Stephens
<b>Extra Defensemen</b>
Normal : Alex Alexeyev, Nelson Nogier, Unknown Player - PP : Alex Alexeyev - PK : Nelson Nogier, Unknown Player
<b>Penalty Shots</b>
Unknown Player, Casey Mittelstadt, Ryan Donato, Kaapo Kakko, Jack Hughes
<b>Custom OT Lines Forwards</b>
Unknown Player, Casey Mittelstadt, Ryan Donato, Kaapo Kakko, Jack Hughes, Troy Terry, Alexander Volkov, Mitchell Stephens, Philipp Kurashev, Egor Sharangovich
<b>Custom OT Lines Defensemen</b>
Unknown Player, Christian Jaros, Alex Alexeyev, Nelson Nogier, Unknown Player

<b>Scratches</b>
Jesse Puljujarvi (Healthy), Axel Jonsson-Fjallby (Healthy), Kirill Maksimov (Healthy), Michael Mersch (Healthy)</pre></div>
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
<b>Custom OT Lines Forwards</b>
Unknown Player, Unknown Player, Unknown Player, Unknown Player, Unknown Player, Unknown Player, Unknown Player, Unknown Player, Unknown Player, Unknown Player
<b>Custom OT Lines Defensemen</b>
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
 1 Eetu Luostarinen         Scott Wilson             Clark Bishop             40     1   2  2  
 2 Taylor Raddysh           Eeli Tolvanen            Markus Hannikainen       30     1   2  2  
 3 Joona Koppanen           Jansen Harkins           Lukas Vejdemo            20     1   2  2  
 4 Rasmus Kupari            Ryan Gropp               Brett Pollock            10     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Julius Honka             Juuso Riikola                                     40     1   2  2  
 2 Olli Juolevi             Unknown Player                                    30     1   2  2  
 3 Unknown Player           Guillaume Brisebois                               20     1   2  2  
 4 Unknown Player           Julius Honka                                      10     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Joona Koppanen           Eeli Tolvanen            Rasmus Kupari            60     1   2  2  
 2 Eetu Luostarinen         Scott Wilson             Markus Hannikainen       40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player                                    60     1   2  2  
 2 Olli Juolevi             Julius Honka                                      40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Eetu Luostarinen         Markus Hannikainen       60     1   2  2  
 2 Joona Koppanen           Scott Wilson             40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Unknown Player           Julius Honka             60     1   2  2  
 2 Olli Juolevi             Unknown Player           40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Joona Koppanen                                    60     1   2  2  
 2 Markus Hannikainen                                40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Unknown Player           Julius Honka             60     1   2  2  
 2 Olli Juolevi             Unknown Player           40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Eetu Luostarinen         Markus Hannikainen       60     1   2  2  
 2 Joona Koppanen           Scott Wilson             40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           60     1   2  2  
 2 Olli Juolevi             Julius Honka             40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Eetu Luostarinen         Scott Wilson             Markus Hannikainen       Unknown Player           Julius Honka             

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Eetu Luostarinen         Scott Wilson             Markus Hannikainen       Juuso Riikola            Unknown Player           

<b>Goaltenders</b>
Starting : Veini Vehvilainen        
Backup : Jeremy Helvig            

<b>Extra Forwards</b>
Normal : Rasmus Kupari, Joona Koppanen, Markus Hannikainen - PP : Rasmus Kupari, Joona Koppanen - PK : Markus Hannikainen
<b>Extra Defensemen</b>
Normal : Unknown Player, Olli Juolevi, Guillaume Brisebois - PP : Unknown Player - PK : Olli Juolevi, Guillaume Brisebois
<b>Penalty Shots</b>
Eeli Tolvanen, Eetu Luostarinen, Markus Hannikainen, Scott Wilson, Joona Koppanen
<b>Custom OT Lines Forwards</b>
Markus Hannikainen, Taylor Raddysh, Scott Wilson, Joona Koppanen, Eetu Luostarinen, Eeli Tolvanen, Rasmus Kupari, Jansen Harkins, Lukas Vejdemo, Clark Bishop
<b>Custom OT Lines Defensemen</b>
Guillaume Brisebois, Unknown Player, Olli Juolevi, Unknown Player, Julius Honka

<b>Scratches</b>
John Quenneville (Healthy), Brian Strait (Suspend), Beck Malenstyn (Healthy), Matheson Iacopelli (Healthy), David Kase (Healthy)
Alex Chiasson (Healthy)</pre></div>
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
 1 Unknown Player           Kyle Clifford            Unknown Player           40     1   2  2  
 2 Ryan Kujawinski          Unknown Player           Unknown Player           30     1   2  2  
 3 Unknown Player           Unknown Player           Unknown Player           20     1   2  2  
 4 Kyle Clifford            Unknown Player           Unknown Player           10     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player                                    40     1   2  2  
 2 Calle Rosen              Unknown Player                                    30     1   2  2  
 3 Christian Wolanin        Unknown Player                                    20     1   2  2  
 4 Unknown Player           Unknown Player                                    10     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Unknown Player           Kyle Clifford            Unknown Player           60     1   2  2  
 2 Ryan Kujawinski          Unknown Player           Unknown Player           40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player                                    60     1   2  2  
 2 Calle Rosen              Unknown Player                                    40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Kyle Clifford            Unknown Player           60     1   2  2  
 2 Unknown Player           Ryan Kujawinski          40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           60     1   2  2  
 2 Calle Rosen              Unknown Player           40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Kyle Clifford                                     60     1   2  2  
 2 Unknown Player                                    40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           60     1   2  2  
 2 Calle Rosen              Unknown Player           40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Kyle Clifford            Unknown Player           60     1   2  2  
 2 Unknown Player           Ryan Kujawinski          40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           60     1   2  2  
 2 Calle Rosen              Unknown Player           40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Unknown Player           Kyle Clifford            Unknown Player           Unknown Player           Unknown Player           

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Unknown Player           Kyle Clifford            Unknown Player           Unknown Player           Unknown Player           

<b>Goaltenders</b>
Starting : Antoine Bibeau           
Backup : Unknown Goalie           

<b>Extra Forwards</b>
Normal : Ryan Kujawinski, Unknown Player, Kyle Clifford - PP : Ryan Kujawinski, Unknown Player - PK : Kyle Clifford
<b>Extra Defensemen</b>
Normal : Christian Wolanin, Calle Rosen, Unknown Player - PP : Christian Wolanin - PK : Calle Rosen, Unknown Player
<b>Penalty Shots</b>
Kyle Clifford, Unknown Player, Unknown Player, Ryan Kujawinski, Unknown Player
<b>Custom OT Lines Forwards</b>
Kyle Clifford, Unknown Player, Unknown Player, Ryan Kujawinski, Unknown Player, Unknown Player, Unknown Player, Unknown Player, Unknown Player, Unknown Player
<b>Custom OT Lines Defensemen</b>
Unknown Player, Unknown Player, Calle Rosen, Unknown Player, Christian Wolanin

<b>Scratches</b>
None
</pre></div>
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
 1 Unknown Player           Unknown Player           Unknown Player           40     1   2  2  
 2 Unknown Player           Morgan Klimchuk          Unknown Player           30     1   2  2  
 3 Unknown Player           Jan Drozg                Unknown Player           20     1   2  2  
 4 Unknown Player           Unknown Player           Morgan Klimchuk          10     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Unknown Player           Colton White                                      40     1   2  2  
 2 Seth Helgeson            Josh Teves                                        30     1   2  2  
 3 Unknown Player           Unknown Player                                    20     1   2  2  
 4 Unknown Player           Colton White                                      10     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           Unknown Player           60     1   2  2  
 2 Unknown Player           Morgan Klimchuk          Unknown Player           40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Unknown Player           Colton White                                      60     1   2  2  
 2 Seth Helgeson            Josh Teves                                        40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           60     1   2  2  
 2 Morgan Klimchuk          Jan Drozg                40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Unknown Player           Colton White             60     1   2  2  
 2 Seth Helgeson            Josh Teves               40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Unknown Player                                    60     1   2  2  
 2 Unknown Player                                    40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Unknown Player           Colton White             60     1   2  2  
 2 Seth Helgeson            Josh Teves               40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           60     1   2  2  
 2 Morgan Klimchuk          Jan Drozg                40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Unknown Player           Colton White             60     1   2  2  
 2 Seth Helgeson            Josh Teves               40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Unknown Player           Unknown Player           Unknown Player           Unknown Player           Colton White             

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Unknown Player           Unknown Player           Unknown Player           Unknown Player           Colton White             

<b>Goaltenders</b>
Starting : Matt Tomkins             
Backup : Unknown Goalie           

<b>Extra Forwards</b>
Normal : Jan Drozg, Morgan Klimchuk, Unknown Player - PP : Jan Drozg, Morgan Klimchuk - PK : Unknown Player
<b>Extra Defensemen</b>
Normal : Seth Helgeson, Josh Teves, Unknown Player - PP : Seth Helgeson - PK : Josh Teves, Unknown Player
<b>Penalty Shots</b>
Unknown Player, Unknown Player, Morgan Klimchuk, Jan Drozg, Unknown Player
<b>Custom OT Lines Forwards</b>
Unknown Player, Unknown Player, Morgan Klimchuk, Jan Drozg, Unknown Player, Unknown Player, Unknown Player, Unknown Player, Unknown Player, Unknown Player
<b>Custom OT Lines Defensemen</b>
Unknown Player, Colton White, Seth Helgeson, Josh Teves, Unknown Player

<b>Scratches</b>
Francois Brassard (Healthy)</pre></div>
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
 1 Cody Glass               Barrett Hayton           Martin Kaut              40     0   1  4  
 2 Steven Lorentz           Adam Mascherin           Jeremy Bracco            30     1   2  2  
 3 Liam O'Brien             Emile Poirier            Justin Auger             20     1   2  2  
 4 Tyler Gaudet             Unknown Player           Unknown Player           10     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Nic Hague                Cody Goloubef                                     35     1   3  1  
 2 Oleg Sosunov             Ryan Stanton                                      35     1   3  1  
 3 Jeremy Davies            Keaton Middleton                                  30     1   3  1  
 4 Nic Hague                Cody Goloubef                                     0      1   3  1  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Cody Glass               Barrett Hayton           Martin Kaut              60     0   0  5  
 2 Steven Lorentz           Tyler Gaudet             Jeremy Bracco            40     0   1  4  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Nic Hague                Cody Goloubef                                     60     0   1  4  
 2 Oleg Sosunov             Ryan Stanton                                      40     0   1  4  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Cody Glass               Barrett Hayton           60     1   2  2  
 2 Steven Lorentz           Tyler Gaudet             40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Nic Hague                Keaton Middleton         60     1   2  2  
 2 Oleg Sosunov             Ryan Stanton             40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Barrett Hayton                                    60     1   2  2  
 2 Steven Lorentz                                    40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Nic Hague                Cody Goloubef            60     1   2  2  
 2 Oleg Sosunov             Ryan Stanton             40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Cody Glass               Barrett Hayton           60     1   2  2  
 2 Steven Lorentz           Martin Kaut              40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Nic Hague                Cody Goloubef            60     1   2  2  
 2 Oleg Sosunov             Ryan Stanton             40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Cody Glass               Barrett Hayton           Martin Kaut              Nic Hague                Cody Goloubef            

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Cody Glass               Barrett Hayton           Martin Kaut              Nic Hague                Cody Goloubef            

<b>Goaltenders</b>
Starting : Jared Coreau             
Backup : Calvin Pickard           

<b>Extra Forwards</b>
Normal : Martin Kaut, Barrett Hayton, Justin Auger - PP : Martin Kaut, Barrett Hayton - PK : Martin Kaut
<b>Extra Defensemen</b>
Normal : Ryan Stanton, Jeremy Davies, Nic Hague - PP : Ryan Stanton - PK : Ryan Stanton, Jeremy Davies
<b>Penalty Shots</b>
Cody Glass, Steven Lorentz, Barrett Hayton, Jeremy Bracco, Martin Kaut
<b>Custom OT Lines Forwards</b>
Cody Glass, Steven Lorentz, Liam O'Brien, Jeremy Bracco, Martin Kaut, Barrett Hayton, Justin Auger, Tyler Gaudet, Adam Mascherin, Emile Poirier
<b>Custom OT Lines Defensemen</b>
Nic Hague, Cody Goloubef, Oleg Sosunov, Ryan Stanton, Jeremy Davies

<b>Scratches</b>
Jonathan Davidsson (Healthy), Brandon Crawley (Healthy), Sean Day (Healthy), Spencer Smallman (Healthy), Joseph Cecconi (Healthy)
Dylan Wells (Healthy)</pre></div>
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
 1 Unknown Player           Corey Perry              Unknown Player           40     1   2  2  
 2 Adam Gaudette            Eric Robinson            Buddy Robinson           30     1   2  2  
 3 Rhett Gardner            John Hayden              Givani Smith             20     1   2  2  
 4 Patrick Brown            Unknown Player           Marian Studenic          10     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Dennis Gilbert           Unknown Player                                    40     1   2  2  
 2 Jeremy Lauzon            Brian Lashoff                                     30     1   2  2  
 3 Jordan Schmaltz          Zach Whitecloud                                   20     1   2  2  
 4 Dennis Gilbert           Unknown Player                                    10     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Unknown Player           Corey Perry              Unknown Player           60     1   2  2  
 2 Adam Gaudette            Eric Robinson            Buddy Robinson           40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Dennis Gilbert           Unknown Player                                    60     1   2  2  
 2 Jeremy Lauzon            Brian Lashoff                                     40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Unknown Player           Corey Perry              60     1   2  2  
 2 Adam Gaudette            Unknown Player           40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Dennis Gilbert           Unknown Player           60     1   2  2  
 2 Jeremy Lauzon            Brian Lashoff            40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Unknown Player                                    60     1   2  2  
 2 Corey Perry                                       40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Dennis Gilbert           Unknown Player           60     1   2  2  
 2 Jeremy Lauzon            Brian Lashoff            40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Unknown Player           Corey Perry              60     1   2  2  
 2 Adam Gaudette            Unknown Player           40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Dennis Gilbert           Unknown Player           60     1   2  2  
 2 Jeremy Lauzon            Brian Lashoff            40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Unknown Player           Corey Perry              Unknown Player           Dennis Gilbert           Unknown Player           

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Unknown Player           Corey Perry              Unknown Player           Dennis Gilbert           Unknown Player           

<b>Goaltenders</b>
Starting : Zane McIntyre            
Backup : Kaden Fulcher            

<b>Extra Forwards</b>
Normal : John Hayden, Rhett Gardner, Givani Smith - PP : John Hayden, Rhett Gardner - PK : Givani Smith
<b>Extra Defensemen</b>
Normal : Jordan Schmaltz, Zach Whitecloud, Jeremy Lauzon - PP : Jordan Schmaltz - PK : Zach Whitecloud, Jeremy Lauzon
<b>Penalty Shots</b>
Unknown Player, Corey Perry, Adam Gaudette, Unknown Player, Buddy Robinson
<b>Custom OT Lines Forwards</b>
Unknown Player, Corey Perry, Adam Gaudette, Unknown Player, Buddy Robinson, Eric Robinson, John Hayden, Rhett Gardner, Givani Smith, Patrick Brown
<b>Custom OT Lines Defensemen</b>
Dennis Gilbert, Unknown Player, Jeremy Lauzon, Brian Lashoff, Jordan Schmaltz

<b>Scratches</b>
Christopher Brown (Healthy)</pre></div>
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
 1 Sam Steel                Alexander Nylander       Martin Necas             40     1   2  2  
 2 Luke Johnson             Max Jones                Emil Bemstrom            30     1   2  2  
 3 Michael McCarron         Matthew Highmore         Cooper Marody            20     1   2  2  
 4 Unknown Player           Unknown Player           Unknown Player           10     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Brendan Guhle            Erik Brannstrom                                   40     1   2  2  
 2 Alexandre Carrier        Tyler Wotherspoon                                 30     1   2  2  
 3 Lucas Carlsson           Dan Renouf                                        20     1   2  2  
 4 Brendan Guhle            Erik Brannstrom                                   10     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Sam Steel                Alexander Nylander       Martin Necas             60     1   2  2  
 2 Michael McCarron         Max Jones                Emil Bemstrom            40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Brendan Guhle            Erik Brannstrom                                   60     1   2  2  
 2 Alexandre Carrier        Tyler Wotherspoon                                 40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Luke Johnson             Alexander Nylander       60     1   2  2  
 2 Michael McCarron         Max Jones                40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Brendan Guhle            Erik Brannstrom          60     1   2  2  
 2 Alexandre Carrier        Tyler Wotherspoon        40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Luke Johnson                                      60     1   2  2  
 2 Michael McCarron                                  40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Brendan Guhle            Erik Brannstrom          60     1   2  2  
 2 Alexandre Carrier        Tyler Wotherspoon        40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Luke Johnson             Alexander Nylander       60     1   2  2  
 2 Sam Steel                Max Jones                40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Brendan Guhle            Erik Brannstrom          60     1   2  2  
 2 Alexandre Carrier        Tyler Wotherspoon        40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Sam Steel                Alexander Nylander       Martin Necas             Brendan Guhle            Erik Brannstrom          

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Luke Johnson             Alexander Nylander       Emil Bemstrom            Brendan Guhle            Erik Brannstrom          

<b>Goaltenders</b>
Starting : Dan Vladar               
Backup : Jake Oettinger           

<b>Extra Forwards</b>
Normal : Luke Johnson, Matthew Highmore, Michael McCarron - PP : Luke Johnson, Matthew Highmore - PK : Michael McCarron
<b>Extra Defensemen</b>
Normal : Lucas Carlsson, Dan Renouf, Alexandre Carrier - PP : Lucas Carlsson - PK : Dan Renouf, Alexandre Carrier
<b>Penalty Shots</b>
Martin Necas, Alexander Nylander, Sam Steel, Max Jones, Emil Bemstrom
<b>Custom OT Lines Forwards</b>
Martin Necas, Alexander Nylander, Sam Steel, Max Jones, Emil Bemstrom, Luke Johnson, Michael Dal Colle, Matthew Highmore, Michael McCarron, Cooper Marody
<b>Custom OT Lines Defensemen</b>
Brendan Guhle, Erik Brannstrom, Alexandre Carrier, Tyler Wotherspoon, Lucas Carlsson

<b>Scratches</b>
Parker Wotherspoon (Healthy), Trevor Lewis (Healthy), Ilya Sorokin (Healthy)</pre></div>
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
 1 Michael Rasmussen        Tyson Jost               Anthony Greco            45     1   2  2  
 2 Unknown Player           Micheal Ferland          Alexandre Fortin         25     1   2  2  
 3 Unknown Player           Tomas Jurco              Gabriel Gagne            20     1   2  2  
 4 Unknown Player           Unknown Player           Unknown Player           10     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Aaron Ness               Dante Fabbro                                      45     1   2  2  
 2 Unknown Player           Unknown Player                                    25     1   2  2  
 3 Unknown Player           Unknown Player                                    20     1   2  2  
 4 Unknown Player           Unknown Player                                    10     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Unknown Player           Anthony Greco            Tomas Jurco              60     1   2  2  
 2 Michael Rasmussen        Alexandre Fortin         Gabriel Gagne            40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Dante Fabbro             Unknown Player                                    60     1   2  2  
 2 Unknown Player           Unknown Player                                    40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Michael Rasmussen        Alexandre Fortin         60     1   2  2  
 2 Unknown Player           Unknown Player           40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Dante Fabbro             Unknown Player           60     1   2  2  
 2 Unknown Player           Unknown Player           40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Michael Rasmussen                                 60     1   2  2  
 2 Gabriel Gagne                                     40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           60     1   2  2  
 2 Dante Fabbro             Unknown Player           40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Unknown Player           Alexandre Fortin         60     1   2  2  
 2 Michael Rasmussen        Gabriel Gagne            40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Dante Fabbro             Unknown Player           60     1   2  2  
 2 Unknown Player           Unknown Player           40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Michael Rasmussen        Unknown Player           Gabriel Gagne            Aaron Ness               Unknown Player           

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Michael Rasmussen        Unknown Player           Gabriel Gagne            Aaron Ness               Unknown Player           

<b>Goaltenders</b>
Starting : Tom McCollum             
Backup : Unknown Goalie           

<b>Extra Forwards</b>
Normal : Unknown Player, Unknown Player, Unknown Player - PP : Unknown Player, Unknown Player - PK : Unknown Player
<b>Extra Defensemen</b>
Normal : Unknown Player, Unknown Player, Unknown Player - PP : Unknown Player - PK : Unknown Player, Unknown Player
<b>Penalty Shots</b>
Unknown Player, Unknown Player, Unknown Player, Unknown Player, Unknown Player
<b>Custom OT Lines Forwards</b>
Unknown Player, Michael Rasmussen, Micheal Ferland, Unknown Player, Anthony Greco, Tomas Jurco, Alexandre Fortin, Gabriel Gagne, Unknown Player, Unknown Player
<b>Custom OT Lines Defensemen</b>
Dante Fabbro, Aaron Ness, Unknown Player, Unknown Player, Unknown Player

<b>Scratches</b>
None
</pre></div>
<h1 class="TeamLineFarm_MIL"><a id="Admirals">Admirals</a></h1>
<b>Lines are Incomplete</b><br />
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
 1 Morgan Frost             Justin Dowling           Alex Tuch                40     0   2  3  
 2 Gaetan Haas              Stefan Matteau           Logan Shaw               25     0   2  3  
 3 J.C. Beaudin             Greg Carey               Lean Bergmann            25     0   2  3  
 4 Adam Musil               Brandon Gignac           Nick Lappin              10     0   2  3  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Dennis Cholowski         Dennis Robertson                                  40     0   2  3  
 2 Julius Bergman           Stuart Percy                                      30     0   2  3  
 3 Stefan Matteau           Aaron Harstad                                     20     0   2  3  
 4 Stuart Percy             Julius Bergman                                    10     0   2  3  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Morgan Frost             Alex Tuch                Justin Dowling           60     0   0  5  
 2 Gaetan Haas              Greg Carey               Logan Shaw               40     0   0  5  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Dennis Cholowski         Dennis Robertson                                  60     0   1  4  
 2 Stuart Percy             Aaron Harstad                                     40     0   1  4  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Justin Dowling           Alex Tuch                60     0   5  0  
 2 J.C. Beaudin             Stefan Matteau           40     0   5  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Dennis Cholowski         Dennis Robertson         60     0   5  0  
 2 Stuart Percy             Aaron Harstad            40     0   5  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Greg Carey                                        60     0   5  0  
 2 Gaetan Haas                                       40     0   5  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Dennis Cholowski         Dennis Robertson         60     0   5  0  
 2 Stuart Percy             Aaron Harstad            40     0   5  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Morgan Frost             Alex Tuch                60     0   2  3  
 2 Greg Carey               Justin Dowling           40     0   2  3  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Dennis Cholowski         Dennis Robertson         60     0   2  3  
 2 Stuart Percy             Aaron Harstad            40     0   2  3  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Greg Carey               Alex Tuch                Justin Dowling           Dennis Cholowski         Dennis Robertson         

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Greg Carey               Alex Tuch                Justin Dowling           Dennis Cholowski         Dennis Robertson         

<b>Goaltenders</b>
Starting : Pheonix Copley           
Backup : Joseph Woll              

<b>Extra Forwards</b>
Normal : Justin Dowling, Gaetan Haas, Greg Carey - PP : Stefan Matteau, Gaetan Haas - PK : Greg Carey
<b>Extra Defensemen</b>
Normal : Dennis Robertson, Aaron Harstad, Stuart Percy - PP : Julius Bergman - PK : Aaron Harstad, Dennis Robertson
<b>Penalty Shots</b>
Alex Tuch, Morgan Frost, Greg Carey, Stefan Matteau, Gaetan Haas
<b>Custom OT Lines Forwards</b>
Alex Tuch, Morgan Frost, Justin Dowling, Greg Carey, Gaetan Haas, Stefan Matteau, Logan Shaw, J.C. Beaudin, Adam Musil, Nick Lappin
<b>Custom OT Lines Defensemen</b>
Dennis Cholowski, Dennis Robertson, Stuart Percy, Julius Bergman, Aaron Harstad

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
<b>Custom OT Lines Forwards</b>
Unknown Player, Unknown Player, Unknown Player, Unknown Player, Unknown Player, Unknown Player, Unknown Player, Unknown Player, Unknown Player, Unknown Player
<b>Custom OT Lines Defensemen</b>
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
 1 Anthony Richard          Unknown Player           Unknown Player           40     1   2  2  
 2 Noah Gregor              Unknown Player           Unknown Player           30     1   2  2  
 3 Unknown Player           Unknown Player           Unknown Player           20     1   2  2  
 4 Unknown Player           Unknown Player           Anthony Richard          10     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Unknown Player           Jack Dougherty                                    40     1   2  2  
 2 Unknown Player           Unknown Player                                    30     1   2  2  
 3 Unknown Player           Unknown Player                                    20     1   2  2  
 4 Unknown Player           Jack Dougherty                                    10     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Anthony Richard          Unknown Player           Unknown Player           60     1   2  2  
 2 Noah Gregor              Unknown Player           Unknown Player           40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Unknown Player           Jack Dougherty                                    60     1   2  2  
 2 Unknown Player           Unknown Player                                    40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           60     1   2  2  
 2 Anthony Richard          Noah Gregor              40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Unknown Player           Jack Dougherty           60     1   2  2  
 2 Unknown Player           Unknown Player           40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Unknown Player                                    60     1   2  2  
 2 Unknown Player                                    40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Unknown Player           Jack Dougherty           60     1   2  2  
 2 Unknown Player           Unknown Player           40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           60     1   2  2  
 2 Anthony Richard          Noah Gregor              40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Unknown Player           Jack Dougherty           60     1   2  2  
 2 Unknown Player           Unknown Player           40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Anthony Richard          Unknown Player           Unknown Player           Unknown Player           Jack Dougherty           

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Anthony Richard          Unknown Player           Unknown Player           Unknown Player           Jack Dougherty           

<b>Goaltenders</b>
Starting : Sergei Bobrovsky         
Backup : Unknown Goalie           

<b>Extra Forwards</b>
Normal : Noah Gregor, Anthony Richard, Unknown Player - PP : Noah Gregor, Anthony Richard - PK : Unknown Player
<b>Extra Defensemen</b>
Normal : Unknown Player, Jack Dougherty, Unknown Player - PP : Unknown Player - PK : Jack Dougherty, Unknown Player
<b>Penalty Shots</b>
Unknown Player, Unknown Player, Anthony Richard, Noah Gregor, Unknown Player
<b>Custom OT Lines Forwards</b>
Unknown Player, Unknown Player, Unknown Player, Unknown Player, Unknown Player, Unknown Player, Unknown Player, Unknown Player, Unknown Player, Unknown Player
<b>Custom OT Lines Defensemen</b>
Unknown Player, Unknown Player, Unknown Player, Unknown Player, Unknown Player

<b>Scratches</b>
Anton Lindholm (Healthy)</pre></div>
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
 1 Michael Amadio           Chris Terry              Cole Schneider           40     1   2  2  
 2 Trevor Moore             Laurent Dauphin          Keegan Kolesar           30     1   2  2  
 3 Mikey Eyssimont          Unknown Player           Sean Malone              20     1   2  2  
 4 Sean Malone              Unknown Player           Chris Terry              10     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Taylor Fedun             Alexander Yelesin                                 40     1   2  2  
 2 Tyler Lewington          Unknown Player                                    30     1   2  2  
 3 Ross Johnston            Unknown Player                                    20     1   2  2  
 4 Taylor Fedun             Alexander Yelesin                                 10     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Michael Amadio           Chris Terry              Cole Schneider           60     1   2  2  
 2 Trevor Moore             Laurent Dauphin          Keegan Kolesar           40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Taylor Fedun             Alexander Yelesin                                 60     1   2  2  
 2 Tyler Lewington          Unknown Player                                    40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Chris Terry              Cole Schneider           60     1   2  2  
 2 Michael Amadio           Trevor Moore             40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Taylor Fedun             Alexander Yelesin        60     1   2  2  
 2 Tyler Lewington          Unknown Player           40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Chris Terry                                       60     1   2  2  
 2 Cole Schneider                                    40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Taylor Fedun             Alexander Yelesin        60     1   2  2  
 2 Tyler Lewington          Unknown Player           40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Chris Terry              Cole Schneider           60     1   2  2  
 2 Michael Amadio           Trevor Moore             40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Taylor Fedun             Alexander Yelesin        60     1   2  2  
 2 Tyler Lewington          Unknown Player           40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Michael Amadio           Chris Terry              Cole Schneider           Taylor Fedun             Alexander Yelesin        

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Michael Amadio           Chris Terry              Cole Schneider           Taylor Fedun             Alexander Yelesin        

<b>Goaltenders</b>
Starting : Unknown Goalie           
Backup : Unknown Goalie           

<b>Extra Forwards</b>
Normal : Mikey Eyssimont, Unknown Player, Ross Johnston - PP : Mikey Eyssimont, Unknown Player - PK : Ross Johnston
<b>Extra Defensemen</b>
Normal : Tyler Lewington, Taylor Fedun, Alexander Yelesin - PP : Tyler Lewington - PK : Taylor Fedun, Alexander Yelesin
<b>Penalty Shots</b>
Chris Terry, Cole Schneider, Michael Amadio, Trevor Moore, Keegan Kolesar
<b>Custom OT Lines Forwards</b>
Chris Terry, Cole Schneider, Michael Amadio, Trevor Moore, Keegan Kolesar, Laurent Dauphin, Mikey Eyssimont, Sean Malone, Unknown Player, Unknown Player
<b>Custom OT Lines Defensemen</b>
Taylor Fedun, Alexander Yelesin, Tyler Lewington, Unknown Player, Unknown Player

<b>Scratches</b>
Andrew Poturalski (Healthy), Ryan Fitzgerald (Healthy), Joona Luoto (Healthy), Dalton Smith (Healthy)</pre></div>
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
 1 Unknown Player           Michael Bunting          Nick Moutrey             40     1   2  2  
 2 Unknown Player           Dmytro Timashov          Unknown Player           30     1   2  2  
 3 Unknown Player           Ryan Kuffner             Unknown Player           20     1   2  2  
 4 Unknown Player           Michael Bunting          Dmytro Timashov          10     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Unknown Player           Mitch Reinke                                      40     1   2  2  
 2 Unknown Player           Unknown Player                                    30     1   2  2  
 3 Unknown Player           Unknown Player                                    20     1   2  2  
 4 Unknown Player           Mitch Reinke                                      10     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Unknown Player           Michael Bunting          Nick Moutrey             60     1   2  2  
 2 Unknown Player           Dmytro Timashov          Unknown Player           40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Unknown Player           Mitch Reinke                                      60     1   2  2  
 2 Unknown Player           Unknown Player                                    40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Unknown Player           Michael Bunting          60     1   2  2  
 2 Dmytro Timashov          Nick Moutrey             40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Unknown Player           Mitch Reinke             60     1   2  2  
 2 Unknown Player           Unknown Player           40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Unknown Player                                    60     1   2  2  
 2 Michael Bunting                                   40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Unknown Player           Mitch Reinke             60     1   2  2  
 2 Unknown Player           Unknown Player           40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Unknown Player           Michael Bunting          60     1   2  2  
 2 Dmytro Timashov          Nick Moutrey             40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Unknown Player           Mitch Reinke             60     1   2  2  
 2 Unknown Player           Unknown Player           40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Unknown Player           Michael Bunting          Nick Moutrey             Unknown Player           Mitch Reinke             

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Unknown Player           Michael Bunting          Nick Moutrey             Unknown Player           Mitch Reinke             

<b>Goaltenders</b>
Starting : Jimmy Howard             
Backup : Unknown Goalie           

<b>Extra Forwards</b>
Normal : Ryan Kuffner, Nick Moutrey, Dmytro Timashov - PP : Ryan Kuffner, Nick Moutrey - PK : Dmytro Timashov
<b>Extra Defensemen</b>
Normal : Unknown Player, Mitch Reinke, Unknown Player - PP : Unknown Player - PK : Mitch Reinke, Unknown Player
<b>Penalty Shots</b>
Unknown Player, Michael Bunting, Dmytro Timashov, Nick Moutrey, Ryan Kuffner
<b>Custom OT Lines Forwards</b>
Unknown Player, Michael Bunting, Dmytro Timashov, Nick Moutrey, Ryan Kuffner, Unknown Player, Unknown Player, Unknown Player, Unknown Player, Unknown Player
<b>Custom OT Lines Defensemen</b>
Unknown Player, Mitch Reinke, Unknown Player, Unknown Player, Unknown Player

<b>Scratches</b>
Trevor Carrick (Healthy), Brandon Halverson (Healthy)</pre></div>
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
 1 Unknown Player           Unknown Player           Zack MacEwen             40     1   2  2  
 2 Nic Petan                Unknown Player           Dylan Sikura             30     1   2  2  
 3 Unknown Player           Unknown Player           Matt Lorito              20     1   2  2  
 4 Unknown Player           Cole Ully                Unknown Player           10     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Unknown Player           Zac Leslie                                        40     1   2  2  
 2 Unknown Player           Cole Ully                                         30     1   2  2  
 3 Unknown Player           Unknown Player                                    20     1   2  2  
 4 Unknown Player           Zac Leslie                                        10     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           Zack MacEwen             60     1   2  2  
 2 Nic Petan                Unknown Player           Dylan Sikura             40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Unknown Player           Zac Leslie                                        60     1   2  2  
 2 Unknown Player           Cole Ully                                         40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           60     1   2  2  
 2 Unknown Player           Zack MacEwen             40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Unknown Player           Zac Leslie               60     1   2  2  
 2 Unknown Player           Unknown Player           40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Unknown Player                                    60     1   2  2  
 2 Unknown Player                                    40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Unknown Player           Zac Leslie               60     1   2  2  
 2 Unknown Player           Unknown Player           40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           60     1   2  2  
 2 Unknown Player           Zack MacEwen             40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Unknown Player           Zac Leslie               60     1   2  2  
 2 Unknown Player           Unknown Player           40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Unknown Player           Unknown Player           Zack MacEwen             Unknown Player           Zac Leslie               

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Unknown Player           Unknown Player           Zack MacEwen             Unknown Player           Zac Leslie               

<b>Goaltenders</b>
Starting : Unknown Goalie           
Backup : Unknown Goalie           

<b>Extra Forwards</b>
Normal : Unknown Player, Unknown Player, Matt Lorito - PP : Unknown Player, Unknown Player - PK : Matt Lorito
<b>Extra Defensemen</b>
Normal : Unknown Player, Unknown Player, Zac Leslie - PP : Unknown Player - PK : Unknown Player, Zac Leslie
<b>Penalty Shots</b>
Unknown Player, Unknown Player, Unknown Player, Zack MacEwen, Nic Petan
<b>Custom OT Lines Forwards</b>
Unknown Player, Unknown Player, Unknown Player, Unknown Player, Unknown Player, Unknown Player, Unknown Player, Unknown Player, Unknown Player, Unknown Player
<b>Custom OT Lines Defensemen</b>
Unknown Player, Unknown Player, Unknown Player, Unknown Player, Unknown Player

<b>Scratches</b>
Robbie Russo (Healthy)</pre></div>
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
 1 Andrew Agozzino          Matt Puempel             Unknown Player           40     1   2  2  
 2 Andy Andreoff            Ryan Poehling            Unknown Player           30     1   2  2  
 3 Unknown Player           Unknown Player           Unknown Player           20     1   2  2  
 4 Matt Puempel             Andrew Agozzino          Andy Andreoff            10     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player                                    40     1   2  2  
 2 Unknown Player           Unknown Player                                    30     1   2  2  
 3 Unknown Player           Unknown Player                                    20     1   2  2  
 4 Unknown Player           Unknown Player                                    10     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Andrew Agozzino          Matt Puempel             Unknown Player           60     1   2  2  
 2 Andy Andreoff            Ryan Poehling            Unknown Player           40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player                                    60     1   2  2  
 2 Unknown Player           Unknown Player                                    40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Matt Puempel             Andrew Agozzino          60     1   2  2  
 2 Andy Andreoff            Ryan Poehling            40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           60     1   2  2  
 2 Unknown Player           Unknown Player           40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Matt Puempel                                      60     1   2  2  
 2 Andrew Agozzino                                   40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           60     1   2  2  
 2 Unknown Player           Unknown Player           40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Matt Puempel             Andrew Agozzino          60     1   2  2  
 2 Andy Andreoff            Ryan Poehling            40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           60     1   2  2  
 2 Unknown Player           Unknown Player           40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Andrew Agozzino          Matt Puempel             Unknown Player           Unknown Player           Unknown Player           

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Andrew Agozzino          Matt Puempel             Unknown Player           Unknown Player           Unknown Player           

<b>Goaltenders</b>
Starting : Unknown Goalie           
Backup : Unknown Goalie           

<b>Extra Forwards</b>
Normal : Ryan Poehling, Andy Andreoff, Matt Puempel - PP : Ryan Poehling, Andy Andreoff - PK : Matt Puempel
<b>Extra Defensemen</b>
Normal : Unknown Player, Unknown Player, Unknown Player - PP : Unknown Player - PK : Unknown Player, Unknown Player
<b>Penalty Shots</b>
Matt Puempel, Andrew Agozzino, Andy Andreoff, Ryan Poehling, Unknown Player
<b>Custom OT Lines Forwards</b>
Matt Puempel, Andrew Agozzino, Andy Andreoff, Ryan Poehling, Unknown Player, Unknown Player, Unknown Player, Unknown Player, Unknown Player, Unknown Player
<b>Custom OT Lines Defensemen</b>
Unknown Player, Unknown Player, Unknown Player, Unknown Player, Unknown Player

<b>Scratches</b>
Thomas Hickey (Suspend)</pre></div>
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
<b>Custom OT Lines Forwards</b>
Unknown Player, Unknown Player, Unknown Player, Unknown Player, Unknown Player, Unknown Player, Unknown Player, Unknown Player, Unknown Player, Unknown Player
<b>Custom OT Lines Defensemen</b>
Unknown Player, Unknown Player, Unknown Player, Unknown Player, Unknown Player

<b>Scratches</b>
None
</pre></div>
<?php include "Footer.php";?>
