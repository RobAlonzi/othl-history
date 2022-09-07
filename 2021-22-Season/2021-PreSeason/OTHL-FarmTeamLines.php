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
<div class="STHSTopLink"><a id="STHSRosterTop"></a> <a href="#Eagles">Eagles</a> | <a href="#IceHogs">IceHogs</a> | <a href="#Monsters">Monsters</a> | <a href="#Rampage">Rampage </a> | <a href="#Bruins">Bruins</a> | <a href="#Rocket">Rocket</a> | <a href="#Canucks">Canucks</a> | <a href="#Bears">Bears</a> | <a href="#Roadrunners">Roadrunners</a> | <a href="#Comets">Comets</a> | <a href="#Gulls">Gulls</a> | <a href="#Heat">Heat</a> | <a href="#Phantoms">Phantoms</a> | <a href="#Wolves">Wolves</a> | <a href="#Checkers">Checkers</a> | <a href="#SoundTigers">Sound Tigers</a> | <a href="#Moose">Moose</a> | <a href="#Reign">Reign</a> | <a href="#Mariners">Mariners</a> | <a href="#Crunch">Crunch</a> | <a href="#Marlies">Marlies</a> | <a href="#Condors">Condors</a> | <a href="#Thunderbirds">Thunderbirds</a> | <a href="#Penguins">Penguins</a> | <a href="#Admirals">Admirals</a> | <a href="#WolfPack">Wolf Pack</a> | <a href="#Griffins">Griffins</a> | <a href="#Americans"> Americans</a> | <a href="#Senators">Senators</a> | <a href="#Barracudas">Barracudas</a> | <a href="#Stars">Stars</a> | <a href="#Wild">Wild</a> | <a href="javascript:STHS_JS_CloseAll('');">Close All Team View</a> | <a href="javascript:STHS_JS_OpenAll('');">Open All Team View</a>
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
Trevor Zegras (Healthy), William Borgen (Healthy), Brett Sutter (Healthy), Nathan Bastian (Healthy), Tyler Benson (Healthy)
Maxim Letunov (Healthy), Mackenzie Entwistle (Healthy)</pre></div>
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
 1 Glenn Gawdin             Unknown Player           Dominik Simon            40     1   2  2  
 2 Unknown Player           Unknown Player           Unknown Player           30     1   2  2  
 3 Joseph Blandisi          Unknown Player           Unknown Player           20     1   2  2  
 4 Unknown Player           Carsen Twarynski         Unknown Player           10     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player                                    40     1   2  2  
 2 Ville Pokka              Mitch Vande Sompel                                30     1   2  2  
 3 Carsen Twarynski         Skyler McKenzie                                   20     1   2  2  
 4 Unknown Player           Unknown Player                                    10     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Glenn Gawdin             Unknown Player           Dominik Simon            60     1   2  2  
 2 Unknown Player           Unknown Player           Unknown Player           40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player                                    60     1   2  2  
 2 Ville Pokka              Mitch Vande Sompel                                40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Unknown Player           Glenn Gawdin             60     1   2  2  
 2 Dominik Simon            Unknown Player           40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           60     1   2  2  
 2 Ville Pokka              Mitch Vande Sompel       40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Unknown Player                                    60     1   2  2  
 2 Glenn Gawdin                                      40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           60     1   2  2  
 2 Ville Pokka              Mitch Vande Sompel       40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Unknown Player           Glenn Gawdin             60     1   2  2  
 2 Dominik Simon            Unknown Player           40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           60     1   2  2  
 2 Ville Pokka              Mitch Vande Sompel       40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Glenn Gawdin             Unknown Player           Dominik Simon            Unknown Player           Unknown Player           

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Glenn Gawdin             Unknown Player           Dominik Simon            Unknown Player           Unknown Player           

<b>Goaltenders</b>
Starting : Unknown Goalie           
Backup : Unknown Goalie           

<b>Extra Forwards</b>
Normal : Joseph Blandisi, Unknown Player, Unknown Player - PP : Joseph Blandisi, Unknown Player - PK : Unknown Player
<b>Extra Defensemen</b>
Normal : Ville Pokka, Mitch Vande Sompel, Unknown Player - PP : Ville Pokka - PK : Mitch Vande Sompel, Unknown Player
<b>Penalty Shots</b>
Unknown Player, Glenn Gawdin, Dominik Simon, Unknown Player, Unknown Player
<b>Custom OT Lines Forwards</b>
Unknown Player, Glenn Gawdin, Dominik Simon, Unknown Player, Unknown Player, Joseph Blandisi, Unknown Player, Unknown Player, Unknown Player, Carsen Twarynski
<b>Custom OT Lines Defensemen</b>
Unknown Player, Unknown Player, Ville Pokka, Mitch Vande Sompel, Unknown Player

<b>Scratches</b>
Griffen Molino (Healthy), Max Veronneau (Healthy), Valentin Zykov (Healthy), Cameron Schilling (Healthy)</pre></div>
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
 1 T.J. Tynan               Phillip Di Giuseppe      Lukas Jasek              40     1   2  2  
 2 Brent Pedersen           Jonah Gadjovich          Brandon Baddock          30     1   2  2  
 3 Unknown Player           Justin Kirkland          Unknown Player           20     1   2  2  
 4 Phillip Di Giuseppe      Brent Pedersen           T.J. Tynan               10     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Nikolai Knyzhov          Tommy Cross                                       40     1   2  2  
 2 Evan McEneny             Mason Geertsen                                    30     1   2  2  
 3 Unknown Player           Unknown Player                                    20     1   2  2  
 4 Nikolai Knyzhov          Tommy Cross                                       10     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 T.J. Tynan               Phillip Di Giuseppe      Lukas Jasek              60     1   2  2  
 2 Brent Pedersen           Jonah Gadjovich          Brandon Baddock          40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Nikolai Knyzhov          Tommy Cross                                       60     1   2  2  
 2 Evan McEneny             Mason Geertsen                                    40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Phillip Di Giuseppe      T.J. Tynan               60     1   2  2  
 2 Jonah Gadjovich          Lukas Jasek              40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Nikolai Knyzhov          Tommy Cross              60     1   2  2  
 2 Evan McEneny             Mason Geertsen           40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Phillip Di Giuseppe                               60     1   2  2  
 2 T.J. Tynan                                        40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Nikolai Knyzhov          Tommy Cross              60     1   2  2  
 2 Evan McEneny             Mason Geertsen           40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Phillip Di Giuseppe      T.J. Tynan               60     1   2  2  
 2 Jonah Gadjovich          Lukas Jasek              40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Nikolai Knyzhov          Tommy Cross              60     1   2  2  
 2 Evan McEneny             Mason Geertsen           40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   T.J. Tynan               Phillip Di Giuseppe      Lukas Jasek              Nikolai Knyzhov          Tommy Cross              

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   T.J. Tynan               Phillip Di Giuseppe      Lukas Jasek              Nikolai Knyzhov          Tommy Cross              

<b>Goaltenders</b>
Starting : Scott Wedgewood          
Backup : Unknown Goalie           

<b>Extra Forwards</b>
Normal : Justin Kirkland, Brandon Baddock, Brent Pedersen - PP : Justin Kirkland, Brandon Baddock - PK : Brent Pedersen
<b>Extra Defensemen</b>
Normal : Evan McEneny, Mason Geertsen, Nikolai Knyzhov - PP : Evan McEneny - PK : Mason Geertsen, Nikolai Knyzhov
<b>Penalty Shots</b>
Phillip Di Giuseppe, T.J. Tynan, Jonah Gadjovich, Lukas Jasek, Justin Kirkland
<b>Custom OT Lines Forwards</b>
Phillip Di Giuseppe, T.J. Tynan, Jonah Gadjovich, Lukas Jasek, Justin Kirkland, Brent Pedersen, Brandon Baddock, Unknown Player, Unknown Player, Unknown Player
<b>Custom OT Lines Defensemen</b>
Nikolai Knyzhov, Tommy Cross, Evan McEneny, Mason Geertsen, Unknown Player

<b>Scratches</b>
Greg McKegg (Suspend)</pre></div>
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
Nic Hague (Healthy), Alex Barre-Boulet (Healthy), Jakub Zboril (Healthy), Julien Gauthier (Healthy), Nicolas Beaudin (Healthy)</pre></div>
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
 1 Anthony Angello          Unknown Player           Unknown Player           40     0   2  3  
 2 Unknown Player           Nathan Walker            Unknown Player           30     0   3  2  
 3 Gabriel Fontaine         Giorgio Estephan         Kole Sherwood            20     0   3  2  
 4 Giorgio Estephan         Unknown Player           Unknown Player           10     0   3  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Jaycob Megna             Unknown Player                                    40     1   2  2  
 2 Unknown Player           Michael Anderson                                  30     1   2  2  
 3 Devante Stephens         Gustav Olofsson                                   20     1   2  2  
 4 Unknown Player           Ryan Collins                                      10     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Anthony Angello          Unknown Player           Unknown Player           60     1   2  2  
 2 Unknown Player           Nathan Walker            Unknown Player           40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Jaycob Megna             Unknown Player                                    60     1   2  2  
 2 Unknown Player           Michael Anderson                                  40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           60     1   2  2  
 2 Anthony Angello          Nathan Walker            40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Jaycob Megna             Unknown Player           60     1   2  2  
 2 Unknown Player           Michael Anderson         40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Unknown Player                                    60     1   2  2  
 2 Unknown Player                                    40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Jaycob Megna             Unknown Player           60     1   2  2  
 2 Unknown Player           Michael Anderson         40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           60     1   2  2  
 2 Anthony Angello          Nathan Walker            40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Jaycob Megna             Unknown Player           60     1   2  2  
 2 Unknown Player           Michael Anderson         40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Anthony Angello          Unknown Player           Unknown Player           Jaycob Megna             Unknown Player           

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Anthony Angello          Unknown Player           Unknown Player           Jaycob Megna             Unknown Player           

<b>Goaltenders</b>
Starting : Unknown Goalie           
Backup : Matthew Villalta         

<b>Extra Forwards</b>
Normal : Kole Sherwood, Gabriel Fontaine, Unknown Player - PP : Kole Sherwood, Gabriel Fontaine - PK : Unknown Player
<b>Extra Defensemen</b>
Normal : Devante Stephens, Gustav Olofsson, Unknown Player - PP : Devante Stephens - PK : Gustav Olofsson, Unknown Player
<b>Penalty Shots</b>
Unknown Player, Unknown Player, Anthony Angello, Nathan Walker, Unknown Player
<b>Custom OT Lines Forwards</b>
Unknown Player, Unknown Player, Anthony Angello, Nathan Walker, Unknown Player, Kole Sherwood, Unknown Player, Gabriel Fontaine, Giorgio Estephan, Unknown Player
<b>Custom OT Lines Defensemen</b>
Jaycob Megna, Unknown Player, Unknown Player, Michael Anderson, Devante Stephens

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
 1 Unknown Player           Kalle Kossila            Jonny Brodzinski         40     1   2  2  
 2 Matthew Phillips         Sheldon Rempal           Matt Luff                30     1   2  2  
 3 Unknown Player           Unknown Player           Unknown Player           20     1   2  2  
 4 Jonny Brodzinski         Unknown Player           Matthew Phillips         10     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Chase Priskie            Alex Petrovic                                     40     1   2  2  
 2 Unknown Player           Otto Leskinen                                     30     1   2  2  
 3 Noah Juulsen             Unknown Player                                    20     1   2  2  
 4 Chase Priskie            Alex Petrovic                                     10     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Unknown Player           Kalle Kossila            Jonny Brodzinski         60     1   2  2  
 2 Matthew Phillips         Sheldon Rempal           Matt Luff                40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Chase Priskie            Alex Petrovic                                     60     1   2  2  
 2 Unknown Player           Otto Leskinen                                     40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Jonny Brodzinski         Unknown Player           60     1   2  2  
 2 Matthew Phillips         Matt Luff                40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Chase Priskie            Alex Petrovic            60     1   2  2  
 2 Unknown Player           Otto Leskinen            40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Jonny Brodzinski                                  60     1   2  2  
 2 Unknown Player                                    40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Chase Priskie            Alex Petrovic            60     1   2  2  
 2 Unknown Player           Otto Leskinen            40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Jonny Brodzinski         Unknown Player           60     1   2  2  
 2 Matthew Phillips         Matt Luff                40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Chase Priskie            Alex Petrovic            60     1   2  2  
 2 Unknown Player           Otto Leskinen            40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Unknown Player           Kalle Kossila            Jonny Brodzinski         Chase Priskie            Alex Petrovic            

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Unknown Player           Kalle Kossila            Jonny Brodzinski         Chase Priskie            Alex Petrovic            

<b>Goaltenders</b>
Starting : Mikhail Berdin           
Backup : Unknown Goalie           

<b>Extra Forwards</b>
Normal : Kalle Kossila, Sheldon Rempal, Matt Luff - PP : Kalle Kossila, Sheldon Rempal - PK : Matt Luff
<b>Extra Defensemen</b>
Normal : Noah Juulsen, Unknown Player, Otto Leskinen - PP : Noah Juulsen - PK : Unknown Player, Otto Leskinen
<b>Penalty Shots</b>
Jonny Brodzinski, Unknown Player, Matthew Phillips, Matt Luff, Kalle Kossila
<b>Custom OT Lines Forwards</b>
Jonny Brodzinski, Unknown Player, Matthew Phillips, Matt Luff, Kalle Kossila, Sheldon Rempal, Unknown Player, Unknown Player, Unknown Player, Unknown Player
<b>Custom OT Lines Defensemen</b>
Chase Priskie, Alex Petrovic, Unknown Player, Otto Leskinen, Noah Juulsen

<b>Scratches</b>
Nikita Nesterov (Healthy), Yegor Zamula (Healthy)</pre></div>
<h1 class="TeamLineFarm_ABB"><a id="Canucks">Canucks</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=29">Canucks Page</a> ]
[ <a href="OTHL-ProTeamRoster.php#Canucks">Pro Team Roster</a> ]
[ <a href="OTHL-FarmTeamScoring.php#Canucks">Farm Team Scoring</a> ]
[ <a href="OTHL-FarmTeamLines.php#Canucks">Farm Team Lines</a> ]
[ <a href="OTHL-FarmTeamSchedule.php#Canucks">Farm Team Schedule</a> ]
[ <a href="OTHL-FarmTeamStats.php#Canucks">Farm Team Stats</a> ]
[ <a href="OTHL-FarmTeamStatsVS.php#Canucks">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Canucks');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Canucks" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Michael McLeod           Joel Farabee             Anton Blidh              55     0   2  3  
 2 Alexander True           Brett Seney              Logan O'Connor           25     0   2  3  
 3 Garrett Pilon            Boris Katchouk           Tyler Steenbergen        15     0   2  3  
 4 Brian Pinho              Joel Farabee             Unknown Player           5      0   2  3  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Jacob Larsson            Haydn Fleury                                      40     1   2  2  
 2 Jacob Middleton          Gavin Bayreuther                                  30     1   2  2  
 3 Frederic Allard          Gabriel Carlsson                                  20     1   2  2  
 4 Jacob Larsson            Haydn Fleury                                      10     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Michael McLeod           Joel Farabee             Anton Blidh              60     0   1  4  
 2 Brett Seney              Boris Katchouk           Logan O'Connor           40     0   1  4  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Jacob Larsson            Haydn Fleury                                      60     0   2  3  
 2 Jacob Middleton          Gavin Bayreuther                                  40     0   2  3  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Joel Farabee             Michael McLeod           60     1   2  2  
 2 Brett Seney              Alexander True           40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Jacob Larsson            Haydn Fleury             60     1   2  2  
 2 Jacob Middleton          Gavin Bayreuther         40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Joel Farabee                                      60     1   2  2  
 2 Michael McLeod                                    40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Jacob Larsson            Haydn Fleury             60     1   2  2  
 2 Jacob Middleton          Gavin Bayreuther         40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Joel Farabee             Michael McLeod           60     1   2  2  
 2 Brett Seney              Alexander True           40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Jacob Larsson            Haydn Fleury             60     1   2  2  
 2 Jacob Middleton          Gavin Bayreuther         40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Michael McLeod           Joel Farabee             Anton Blidh              Jacob Larsson            Haydn Fleury             

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Michael McLeod           Joel Farabee             Unknown Player           Jacob Larsson            Haydn Fleury             

<b>Goaltenders</b>
Starting : Alexandar Georgiev       
Backup : Hunter Miska             

<b>Extra Forwards</b>
Normal : Brian Pinho, Alexander True, Tyler Steenbergen - PP : Brian Pinho, Logan O'Connor - PK : Tyler Steenbergen
<b>Extra Defensemen</b>
Normal : Frederic Allard, Jacob Middleton, Gavin Bayreuther - PP : Frederic Allard - PK : Jacob Middleton, Gavin Bayreuther
<b>Penalty Shots</b>
Joel Farabee, Michael McLeod, Brett Seney, Alexander True, Garrett Pilon
<b>Custom OT Lines Forwards</b>
Joel Farabee, Michael McLeod, Brett Seney, Alexander True, Garrett Pilon, Boris Katchouk, Brian Pinho, Unknown Player, Unknown Player, Logan O'Connor
<b>Custom OT Lines Defensemen</b>
Jacob Larsson, Haydn Fleury, Jacob Middleton, Gavin Bayreuther, Frederic Allard

<b>Scratches</b>
Arttu Ruotsalainen (Healthy), Mikko Lehtonen (Healthy), Ben Gleason (Healthy), Rudolfs Balcers (Healthy), Michael Pezzetta (Healthy)
Tanner Kaspick (Healthy), Parker Kelly (Healthy), Matt Kiersted (Healthy)</pre></div>
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
Jaret Anderson-Dolan (Healthy), Calvin Petersen (Healthy)</pre></div>
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
 2 Unknown Player           Unknown Player           Unknown Player           30     1   2  2  
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
 2 Unknown Player           Unknown Player           Unknown Player           40     1   2  2  

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
Normal : Unknown Player, Nico Sturm, Unknown Player - PP : Unknown Player, Nico Sturm - PK : Unknown Player
<b>Extra Defensemen</b>
Normal : Brady Keeper, Unknown Player, Unknown Player - PP : Brady Keeper - PK : Unknown Player, Unknown Player
<b>Penalty Shots</b>
Unknown Player, Unknown Player, Unknown Player, Unknown Player, Unknown Player
<b>Custom OT Lines Forwards</b>
Unknown Player, Unknown Player, Unknown Player, Unknown Player, Unknown Player, Unknown Player, Unknown Player, Unknown Player, Unknown Player, Unknown Player
<b>Custom OT Lines Defensemen</b>
Unknown Player, Unknown Player, Unknown Player, Unknown Player, Unknown Player

<b>Scratches</b>
Kirill Kaprizov (Healthy), Matt Read (Healthy), Christian Fischer (Healthy)</pre></div>
<h1 class="TeamLineFarm_UTI"><a id="Comets">Comets</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=18">Devils Page</a> ]
[ <a href="OTHL-ProTeamRoster.php#Devils">Pro Team Roster</a> ]
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
 1 Unknown Player           Unknown Player           Unknown Player           40     1   2  2  
 2 Unknown Player           Unknown Player           Joel Kiviranta           30     1   2  2  
 3 Kyle Criscuolo           Unknown Player           Blake Speers             20     1   2  2  
 4 Brent Gates              Unknown Player           Unknown Player           10     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player                                    40     1   2  2  
 2 Leon Gawanke             Unknown Player                                    30     1   2  2  
 3 Unknown Player           Unknown Player                                    20     1   2  2  
 4 Unknown Player           Unknown Player                                    10     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           Unknown Player           60     1   2  2  
 2 Unknown Player           Unknown Player           Joel Kiviranta           40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player                                    60     1   2  2  
 2 Leon Gawanke             Unknown Player                                    40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           60     1   2  2  
 2 Unknown Player           Unknown Player           40     1   2  2  

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
 2 Unknown Player           Unknown Player           40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           60     1   2  2  
 2 Leon Gawanke             Unknown Player           40     1   2  2  

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
Normal : Kyle Criscuolo, Unknown Player, Brent Gates - PP : Kyle Criscuolo, Unknown Player - PK : Brent Gates
<b>Extra Defensemen</b>
Normal : Unknown Player, Unknown Player, Leon Gawanke - PP : Unknown Player - PK : Unknown Player, Leon Gawanke
<b>Penalty Shots</b>
Unknown Player, Unknown Player, Unknown Player, Unknown Player, Unknown Player
<b>Custom OT Lines Forwards</b>
Unknown Player, Unknown Player, Unknown Player, Unknown Player, Unknown Player, Unknown Player, Unknown Player, Unknown Player, Unknown Player, Unknown Player
<b>Custom OT Lines Defensemen</b>
Unknown Player, Unknown Player, Unknown Player, Unknown Player, Unknown Player

<b>Scratches</b>
Scott Sabourin (Healthy)</pre></div>
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
 1 Unknown Player           Unknown Player           Unknown Player           40     1   2  2  
 2 Trent Frederic           Cameron Hughes           Zach Senyshyn            30     1   2  2  
 3 Ryan MacInnis            Unknown Player           Unknown Player           20     1   2  2  
 4 Cameron Hughes           Unknown Player           Unknown Player           10     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Unknown Player           Jeremy Roy                                        40     1   2  2  
 2 Lucas Johansen           Unknown Player                                    30     1   2  2  
 3 Unknown Player           Unknown Player                                    20     1   2  2  
 4 Unknown Player           Jeremy Roy                                        10     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           Unknown Player           60     1   2  2  
 2 Trent Frederic           Cameron Hughes           Zach Senyshyn            40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Unknown Player           Jeremy Roy                                        60     1   2  2  
 2 Lucas Johansen           Unknown Player                                    40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           60     1   2  2  
 2 Unknown Player           Zach Senyshyn            40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Unknown Player           Jeremy Roy               60     1   2  2  
 2 Lucas Johansen           Unknown Player           40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Unknown Player                                    60     1   2  2  
 2 Unknown Player                                    40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Unknown Player           Jeremy Roy               60     1   2  2  
 2 Lucas Johansen           Unknown Player           40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           60     1   2  2  
 2 Unknown Player           Zach Senyshyn            40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Unknown Player           Jeremy Roy               60     1   2  2  
 2 Lucas Johansen           Unknown Player           40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Unknown Player           Unknown Player           Unknown Player           Unknown Player           Jeremy Roy               

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Unknown Player           Unknown Player           Unknown Player           Unknown Player           Jeremy Roy               

<b>Goaltenders</b>
Starting : Ian Scott                
Backup : Unknown Goalie           

<b>Extra Forwards</b>
Normal : Ryan MacInnis, Trent Frederic, Cameron Hughes - PP : Ryan MacInnis, Trent Frederic - PK : Cameron Hughes
<b>Extra Defensemen</b>
Normal : Lucas Johansen, Unknown Player, Jeremy Roy - PP : Lucas Johansen - PK : Unknown Player, Jeremy Roy
<b>Penalty Shots</b>
Unknown Player, Unknown Player, Unknown Player, Zach Senyshyn, Trent Frederic
<b>Custom OT Lines Forwards</b>
Unknown Player, Unknown Player, Unknown Player, Zach Senyshyn, Trent Frederic, Ryan MacInnis, Cameron Hughes, Unknown Player, Unknown Player, Unknown Player
<b>Custom OT Lines Defensemen</b>
Unknown Player, Jeremy Roy, Lucas Johansen, Unknown Player, Unknown Player

<b>Scratches</b>
Luke Green (Healthy), Eetu Tuulola (Healthy), Martin Pospisil (Healthy), Aidan Dudas (Healthy), Mason McDonald (Healthy)</pre></div>
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
 2 David Gustafsson         Unknown Player           Mathieu Olivier          30     0   0  5  
 3 Unknown Player           Paul Carey               Tyrell Goulbourne        20     0   0  5  
 4 Unknown Player           Vitaly Abramov           Unknown Player           10     0   0  5  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Jake Bean                Unknown Player                                    40     0   0  5  
 2 Zach Trotman             Samuel Morin                                      30     0   0  5  
 3 Blake Hillman            Steven Santini                                    20     0   0  5  
 4 Jake Bean                Unknown Player                                    10     0   0  5  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Brad Malone              Vitaly Abramov           Nick Merkley             60     0   0  5  
 2 David Gustafsson         Unknown Player           Unknown Player           40     0   0  5  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Jake Bean                Unknown Player                                    60     0   0  5  
 2 Zach Trotman             Samuel Morin                                      40     0   0  5  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Unknown Player           Vitaly Abramov           60     0   5  0  
 2 Unknown Player           Nick Merkley             40     0   5  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Jake Bean                Unknown Player           60     0   5  0  
 2 Zach Trotman             Samuel Morin             40     0   5  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Unknown Player                                    60     0   5  0  
 2 Vitaly Abramov                                    40     0   5  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Jake Bean                Unknown Player           60     0   5  0  
 2 Zach Trotman             Samuel Morin             40     0   5  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Brad Malone              Vitaly Abramov           60     0   0  5  
 2 Unknown Player           Nick Merkley             40     0   0  5  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Jake Bean                Unknown Player           60     0   0  5  
 2 Zach Trotman             Samuel Morin             40     0   0  5  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Brad Malone              Unknown Player           Nick Merkley             Jake Bean                Unknown Player           

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Brad Malone              Vitaly Abramov           Nick Merkley             Jake Bean                Unknown Player           

<b>Goaltenders</b>
Starting : Casey DeSmith            
Backup : Unknown Goalie           

<b>Extra Forwards</b>
Normal : Brad Malone, Tyrell Goulbourne, David Gustafsson - PP : Brad Malone, Tyrell Goulbourne - PK : David Gustafsson
<b>Extra Defensemen</b>
Normal : Unknown Player, Steven Santini, Samuel Morin - PP : Unknown Player - PK : Unknown Player, Samuel Morin
<b>Penalty Shots</b>
Unknown Player, Vitaly Abramov, Unknown Player, Nick Merkley, David Gustafsson
<b>Custom OT Lines Forwards</b>
Brad Malone, Nick Merkley, Paul Carey, David Gustafsson, Vitaly Abramov, Tyrell Goulbourne, Mathieu Olivier, Unknown Player, Unknown Player, Unknown Player
<b>Custom OT Lines Defensemen</b>
Unknown Player, Samuel Morin, Jake Bean, Steven Santini, Zach Trotman

<b>Scratches</b>
Mike Hardman (Healthy), Jason Robertson (Healthy), Logan Stanley (Healthy), Danil Yurtaykin (Healthy), Reese Johnson (Healthy)
Evan Cormier (Healthy)</pre></div>
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
 1 Jordan Weal              Unknown Player           Trey Fix-Wolansky        40     1   2  2  
 2 Nolan Stevens            Adam Johnson             Brandon Duhaime          30     1   2  2  
 3 Mason Shaw               Luke Gazdic              Josiah Didier            20     1   2  2  
 4 Jordan Weal              Unknown Player           Nolan Stevens            10     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Unknown Player           Cameron Gaunce                                    40     1   2  2  
 2 Dillon Simpson           Brandon Manning                                   30     1   2  2  
 3 Joel Hanley              Erik Burgdoerfer                                  20     1   2  2  
 4 Josiah Didier            Unknown Player                                    10     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Jordan Weal              Unknown Player           Trey Fix-Wolansky        60     1   2  2  
 2 Nolan Stevens            Adam Johnson             Brandon Duhaime          40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Unknown Player           Cameron Gaunce                                    60     1   2  2  
 2 Dillon Simpson           Brandon Manning                                   40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Jordan Weal              Unknown Player           60     1   2  2  
 2 Nolan Stevens            Adam Johnson             40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Unknown Player           Cameron Gaunce           60     1   2  2  
 2 Dillon Simpson           Brandon Manning          40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Jordan Weal                                       60     1   2  2  
 2 Unknown Player                                    40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Unknown Player           Cameron Gaunce           60     1   2  2  
 2 Dillon Simpson           Brandon Manning          40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Jordan Weal              Unknown Player           60     1   2  2  
 2 Nolan Stevens            Adam Johnson             40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Unknown Player           Cameron Gaunce           60     1   2  2  
 2 Dillon Simpson           Brandon Manning          40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Jordan Weal              Unknown Player           Trey Fix-Wolansky        Unknown Player           Cameron Gaunce           

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Jordan Weal              Unknown Player           Trey Fix-Wolansky        Unknown Player           Cameron Gaunce           

<b>Goaltenders</b>
Starting : Michael Hutchinson       
Backup : Unknown Goalie           

<b>Extra Forwards</b>
Normal : Mason Shaw, Luke Gazdic, Trey Fix-Wolansky - PP : Mason Shaw, Luke Gazdic - PK : Trey Fix-Wolansky
<b>Extra Defensemen</b>
Normal : Joel Hanley, Erik Burgdoerfer, Josiah Didier - PP : Joel Hanley - PK : Erik Burgdoerfer, Josiah Didier
<b>Penalty Shots</b>
Jordan Weal, Unknown Player, Nolan Stevens, Adam Johnson, Trey Fix-Wolansky
<b>Custom OT Lines Forwards</b>
Jordan Weal, Unknown Player, Nolan Stevens, Adam Johnson, Trey Fix-Wolansky, Brandon Duhaime, Mason Shaw, Luke Gazdic, Unknown Player, Unknown Player
<b>Custom OT Lines Defensemen</b>
Unknown Player, Cameron Gaunce, Dillon Simpson, Brandon Manning, Joel Hanley

<b>Scratches</b>
Sheldon Dries (Healthy), Byron Froese (Healthy)</pre></div>
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
 1 Dominic Turgeon          Liam Foudy               Unknown Player           40     1   2  2  
 2 Unknown Player           Unknown Player           Unknown Player           30     1   2  2  
 3 Unknown Player           Unknown Player           Unknown Player           20     1   2  2  
 4 Dominic Turgeon          Unknown Player           Liam Foudy               10     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Juuso Valimaki           Unknown Player                                    40     1   2  2  
 2 Unknown Player           Unknown Player                                    30     1   2  2  
 3 Unknown Player           Unknown Player                                    20     1   2  2  
 4 Juuso Valimaki           Unknown Player                                    10     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Dominic Turgeon          Liam Foudy               Unknown Player           60     1   2  2  
 2 Unknown Player           Unknown Player           Unknown Player           40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Juuso Valimaki           Unknown Player                                    60     1   2  2  
 2 Unknown Player           Unknown Player                                    40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Dominic Turgeon          Unknown Player           60     1   2  2  
 2 Liam Foudy               Unknown Player           40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Juuso Valimaki           Unknown Player           60     1   2  2  
 2 Unknown Player           Unknown Player           40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Dominic Turgeon                                   60     1   2  2  
 2 Unknown Player                                    40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Juuso Valimaki           Unknown Player           60     1   2  2  
 2 Unknown Player           Unknown Player           40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Dominic Turgeon          Unknown Player           60     1   2  2  
 2 Liam Foudy               Unknown Player           40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Juuso Valimaki           Unknown Player           60     1   2  2  
 2 Unknown Player           Unknown Player           40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Dominic Turgeon          Liam Foudy               Unknown Player           Juuso Valimaki           Unknown Player           

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Dominic Turgeon          Liam Foudy               Unknown Player           Juuso Valimaki           Unknown Player           

<b>Goaltenders</b>
Starting : Adam Werner              
Backup : Unknown Goalie           

<b>Extra Forwards</b>
Normal : Liam Foudy, Dominic Turgeon, Unknown Player - PP : Liam Foudy, Dominic Turgeon - PK : Unknown Player
<b>Extra Defensemen</b>
Normal : Unknown Player, Unknown Player, Juuso Valimaki - PP : Unknown Player - PK : Unknown Player, Juuso Valimaki
<b>Penalty Shots</b>
Dominic Turgeon, Unknown Player, Liam Foudy, Unknown Player, Unknown Player
<b>Custom OT Lines Forwards</b>
Dominic Turgeon, Unknown Player, Liam Foudy, Unknown Player, Unknown Player, Unknown Player, Unknown Player, Unknown Player, Unknown Player, Unknown Player
<b>Custom OT Lines Defensemen</b>
Juuso Valimaki, Unknown Player, Unknown Player, Unknown Player, Unknown Player

<b>Scratches</b>
K'Andre Miller (Healthy), Jamie Drysdale (Healthy), Pierre-Olivier Joseph (Healthy), Josh Brook (Healthy), Vitaly Kravtsov (Healthy)
Nick Baptiste (Healthy)</pre></div>
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
 2 Unknown Player           Jack Hughes              Troy Terry               30     1   2  2  
 3 Mitchell Stephens        Alexander Volkov         Sasha Chmelevski         20     1   2  2  
 4 Philipp Kurashev         Unknown Player           Unknown Player           10     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player                                    40     1   2  2  
 2 Alex Alexeyev            Unknown Player                                    30     1   2  2  
 3 Philipp Kurashev         Egor Sharangovich                                 20     1   2  2  
 4 Unknown Player           Unknown Player                                    10     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Unknown Player           Casey Mittelstadt        Kaapo Kakko              60     1   2  2  
 2 Unknown Player           Jack Hughes              Troy Terry               40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player                                    60     1   2  2  
 2 Alex Alexeyev            Unknown Player                                    40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Unknown Player           Casey Mittelstadt        60     1   2  2  
 2 Unknown Player           Kaapo Kakko              40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           60     1   2  2  
 2 Alex Alexeyev            Unknown Player           40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Unknown Player                                    60     1   2  2  
 2 Casey Mittelstadt                                 40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           60     1   2  2  
 2 Alex Alexeyev            Unknown Player           40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Unknown Player           Casey Mittelstadt        60     1   2  2  
 2 Unknown Player           Kaapo Kakko              40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           60     1   2  2  
 2 Alex Alexeyev            Unknown Player           40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Unknown Player           Casey Mittelstadt        Kaapo Kakko              Unknown Player           Unknown Player           

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Unknown Player           Casey Mittelstadt        Kaapo Kakko              Unknown Player           Unknown Player           

<b>Goaltenders</b>
Starting : Unknown Goalie           
Backup : Unknown Goalie           

<b>Extra Forwards</b>
Normal : Unknown Player, Alexander Volkov, Mitchell Stephens - PP : Unknown Player, Alexander Volkov - PK : Mitchell Stephens
<b>Extra Defensemen</b>
Normal : Alex Alexeyev, Unknown Player, Unknown Player - PP : Alex Alexeyev - PK : Unknown Player, Unknown Player
<b>Penalty Shots</b>
Unknown Player, Casey Mittelstadt, Unknown Player, Kaapo Kakko, Jack Hughes
<b>Custom OT Lines Forwards</b>
Unknown Player, Casey Mittelstadt, Unknown Player, Kaapo Kakko, Jack Hughes, Troy Terry, Alexander Volkov, Mitchell Stephens, Philipp Kurashev, Egor Sharangovich
<b>Custom OT Lines Defensemen</b>
Unknown Player, Unknown Player, Alex Alexeyev, Unknown Player, Unknown Player

<b>Scratches</b>
Ty Emberson (Healthy), Pius Suter (Healthy), Ty Smith (Healthy), Artem Zub (Healthy), Wade Allison (Healthy)
Mattias Samuelsson (Healthy), Quinton Byfield (Healthy), Jesse Puljujarvi (Healthy), Tanner Jeannot (Healthy), Michal Teply (Healthy)
Alec Regula (Healthy), Andrei Altybarmakyan (Healthy), Cole Koepke (Healthy), Will Cuylle (Healthy), Matej Pekar (Healthy)
Angus Crookshank (Healthy), Donovan Sebrango (Healthy), Kaedan Korczak (Healthy), Michael Mersch (Healthy), Zachary Fucale (Healthy)
Michael Houser (Healthy)</pre></div>
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
Jacob Bryson (Healthy)</pre></div>
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
 2 Taylor Raddysh           Eeli Tolvanen            Unknown Player           30     1   2  2  
 3 Joona Koppanen           Jansen Harkins           Lukas Vejdemo            20     1   2  2  
 4 Rasmus Kupari            Unknown Player           Unknown Player           10     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Unknown Player           Juuso Riikola                                     40     1   2  2  
 2 Olli Juolevi             Unknown Player                                    30     1   2  2  
 3 Unknown Player           Guillaume Brisebois                               20     1   2  2  
 4 Unknown Player           Unknown Player                                    10     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Joona Koppanen           Eeli Tolvanen            Rasmus Kupari            60     1   2  2  
 2 Eetu Luostarinen         Scott Wilson             Unknown Player           40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player                                    60     1   2  2  
 2 Olli Juolevi             Unknown Player                                    40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Eetu Luostarinen         Unknown Player           60     1   2  2  
 2 Joona Koppanen           Scott Wilson             40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           60     1   2  2  
 2 Olli Juolevi             Unknown Player           40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Joona Koppanen                                    60     1   2  2  
 2 Unknown Player                                    40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           60     1   2  2  
 2 Olli Juolevi             Unknown Player           40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Eetu Luostarinen         Unknown Player           60     1   2  2  
 2 Joona Koppanen           Scott Wilson             40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           60     1   2  2  
 2 Olli Juolevi             Unknown Player           40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Eetu Luostarinen         Scott Wilson             Unknown Player           Unknown Player           Unknown Player           

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Eetu Luostarinen         Scott Wilson             Unknown Player           Juuso Riikola            Unknown Player           

<b>Goaltenders</b>
Starting : Unknown Goalie           
Backup : Jeremy Helvig            

<b>Extra Forwards</b>
Normal : Rasmus Kupari, Joona Koppanen, Unknown Player - PP : Rasmus Kupari, Joona Koppanen - PK : Unknown Player
<b>Extra Defensemen</b>
Normal : Unknown Player, Olli Juolevi, Guillaume Brisebois - PP : Unknown Player - PK : Olli Juolevi, Guillaume Brisebois
<b>Penalty Shots</b>
Eeli Tolvanen, Eetu Luostarinen, Unknown Player, Scott Wilson, Joona Koppanen
<b>Custom OT Lines Forwards</b>
Unknown Player, Taylor Raddysh, Scott Wilson, Joona Koppanen, Eetu Luostarinen, Eeli Tolvanen, Rasmus Kupari, Jansen Harkins, Lukas Vejdemo, Clark Bishop
<b>Custom OT Lines Defensemen</b>
Guillaume Brisebois, Unknown Player, Olli Juolevi, Unknown Player, Unknown Player

<b>Scratches</b>
John Quenneville (Healthy), Beck Malenstyn (Healthy), Matheson Iacopelli (Healthy)</pre></div>
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
 2 Ryan Kujawinski          Unknown Player           Unknown Player           30     1   2  2  
 3 Unknown Player           Unknown Player           Unknown Player           20     1   2  2  
 4 Unknown Player           Unknown Player           Unknown Player           10     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player                                    40     1   2  2  
 2 Unknown Player           Unknown Player                                    30     1   2  2  
 3 Christian Wolanin        Unknown Player                                    20     1   2  2  
 4 Unknown Player           Unknown Player                                    10     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           Unknown Player           60     1   2  2  
 2 Ryan Kujawinski          Unknown Player           Unknown Player           40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player                                    60     1   2  2  
 2 Unknown Player           Unknown Player                                    40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           60     1   2  2  
 2 Unknown Player           Ryan Kujawinski          40     1   2  2  

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
 2 Unknown Player           Ryan Kujawinski          40     1   2  2  

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
Starting : Antoine Bibeau           
Backup : Unknown Goalie           

<b>Extra Forwards</b>
Normal : Ryan Kujawinski, Unknown Player, Unknown Player - PP : Ryan Kujawinski, Unknown Player - PK : Unknown Player
<b>Extra Defensemen</b>
Normal : Christian Wolanin, Unknown Player, Unknown Player - PP : Christian Wolanin - PK : Unknown Player, Unknown Player
<b>Penalty Shots</b>
Unknown Player, Unknown Player, Unknown Player, Ryan Kujawinski, Unknown Player
<b>Custom OT Lines Forwards</b>
Unknown Player, Unknown Player, Unknown Player, Ryan Kujawinski, Unknown Player, Unknown Player, Unknown Player, Unknown Player, Unknown Player, Unknown Player
<b>Custom OT Lines Defensemen</b>
Unknown Player, Unknown Player, Unknown Player, Unknown Player, Christian Wolanin

<b>Scratches</b>
Kyle Clifford (Healthy), Calle Rosen (Healthy)</pre></div>
<h1 class="TeamLineFarm_PSM"><a id="Mariners">Mariners</a></h1>
<b>Lines are Incomplete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=32">Kraken Page</a> ]
[ <a href="OTHL-ProTeamRoster.php#Kraken">Pro Team Roster</a> ]
[ <a href="OTHL-FarmTeamScoring.php#Mariners">Farm Team Scoring</a> ]
[ <a href="OTHL-FarmTeamLines.php#Mariners">Farm Team Lines</a> ]
[ <a href="OTHL-FarmTeamSchedule.php#Mariners">Farm Team Schedule</a> ]
[ <a href="OTHL-FarmTeamStats.php#Mariners">Farm Team Stats</a> ]
[ <a href="OTHL-FarmTeamStatsVS.php#Mariners">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Mariners');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Mariners" style="display: block;">
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
Matt Bartkowski (Healthy)</pre></div>
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
 2 Unknown Player           Unknown Player           Unknown Player           30     1   2  2  
 3 Unknown Player           Jan Drozg                Unknown Player           20     1   2  2  
 4 Unknown Player           Unknown Player           Unknown Player           10     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Unknown Player           Colton White                                      40     1   2  2  
 2 Seth Helgeson            Josh Teves                                        30     1   2  2  
 3 Unknown Player           Unknown Player                                    20     1   2  2  
 4 Unknown Player           Colton White                                      10     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           Unknown Player           60     1   2  2  
 2 Unknown Player           Unknown Player           Unknown Player           40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Unknown Player           Colton White                                      60     1   2  2  
 2 Seth Helgeson            Josh Teves                                        40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           60     1   2  2  
 2 Unknown Player           Jan Drozg                40     1   2  2  

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
 2 Unknown Player           Jan Drozg                40     1   2  2  

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
Starting : Unknown Goalie           
Backup : Unknown Goalie           

<b>Extra Forwards</b>
Normal : Jan Drozg, Unknown Player, Unknown Player - PP : Jan Drozg, Unknown Player - PK : Unknown Player
<b>Extra Defensemen</b>
Normal : Seth Helgeson, Josh Teves, Unknown Player - PP : Seth Helgeson - PK : Josh Teves, Unknown Player
<b>Penalty Shots</b>
Unknown Player, Unknown Player, Unknown Player, Jan Drozg, Unknown Player
<b>Custom OT Lines Forwards</b>
Unknown Player, Unknown Player, Unknown Player, Jan Drozg, Unknown Player, Unknown Player, Unknown Player, Unknown Player, Unknown Player, Unknown Player
<b>Custom OT Lines Defensemen</b>
Unknown Player, Colton White, Seth Helgeson, Josh Teves, Unknown Player

<b>Scratches</b>
Alexander Barabanov (Healthy), Tanner Fritz (Healthy), William Lagesson (Healthy)</pre></div>
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
 2 Steven Lorentz           Adam Mascherin           Unknown Player           30     1   2  2  
 3 Unknown Player           Unknown Player           Unknown Player           20     1   2  2  
 4 Tyler Gaudet             Unknown Player           Unknown Player           10     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Unknown Player           Cody Goloubef                                     35     1   3  1  
 2 Oleg Sosunov             Ryan Stanton                                      35     1   3  1  
 3 Jeremy Davies            Keaton Middleton                                  30     1   3  1  
 4 Unknown Player           Cody Goloubef                                     0      1   3  1  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Cody Glass               Barrett Hayton           Martin Kaut              60     0   0  5  
 2 Steven Lorentz           Tyler Gaudet             Unknown Player           40     0   1  4  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Unknown Player           Cody Goloubef                                     60     0   1  4  
 2 Oleg Sosunov             Ryan Stanton                                      40     0   1  4  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Cody Glass               Barrett Hayton           60     1   2  2  
 2 Steven Lorentz           Tyler Gaudet             40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Unknown Player           Keaton Middleton         60     1   2  2  
 2 Oleg Sosunov             Ryan Stanton             40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Barrett Hayton                                    60     1   2  2  
 2 Steven Lorentz                                    40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Unknown Player           Cody Goloubef            60     1   2  2  
 2 Oleg Sosunov             Ryan Stanton             40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Cody Glass               Barrett Hayton           60     1   2  2  
 2 Steven Lorentz           Martin Kaut              40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Unknown Player           Cody Goloubef            60     1   2  2  
 2 Oleg Sosunov             Ryan Stanton             40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Cody Glass               Barrett Hayton           Martin Kaut              Unknown Player           Cody Goloubef            

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Cody Glass               Barrett Hayton           Martin Kaut              Unknown Player           Cody Goloubef            

<b>Goaltenders</b>
Starting : Unknown Goalie           
Backup : Calvin Pickard           

<b>Extra Forwards</b>
Normal : Martin Kaut, Barrett Hayton, Unknown Player - PP : Martin Kaut, Barrett Hayton - PK : Martin Kaut
<b>Extra Defensemen</b>
Normal : Ryan Stanton, Jeremy Davies, Unknown Player - PP : Ryan Stanton - PK : Ryan Stanton, Jeremy Davies
<b>Penalty Shots</b>
Cody Glass, Steven Lorentz, Barrett Hayton, Unknown Player, Martin Kaut
<b>Custom OT Lines Forwards</b>
Cody Glass, Steven Lorentz, Unknown Player, Unknown Player, Martin Kaut, Barrett Hayton, Unknown Player, Tyler Gaudet, Adam Mascherin, Unknown Player
<b>Custom OT Lines Defensemen</b>
Unknown Player, Cody Goloubef, Oleg Sosunov, Ryan Stanton, Jeremy Davies

<b>Scratches</b>
Jonathan Davidsson (Healthy), Brandon Crawley (Healthy), Stepan Falkovsky (Healthy), Sean Day (Healthy), Spencer Smallman (Healthy)
Liam O'Brien (Healthy)</pre></div>
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
 1 Unknown Player           Unknown Player           Luke Kunin               40     1   2  2  
 2 Unknown Player           Dominic Toninato         Joey Anderson            30     1   2  2  
 3 Patrick Brown            John Hayden              Buddy Robinson           20     1   2  2  
 4 Christopher Brown        Eric Robinson            Givani Smith             10     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Noah Hanifin             Dennis Gilbert                                    40     1   2  2  
 2 Jeremy Lauzon            Brian Lashoff                                     30     1   2  2  
 3 Zach Whitecloud          Unknown Player                                    20     1   2  2  
 4 Noah Hanifin             Dennis Gilbert                                    10     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           Luke Kunin               60     1   2  2  
 2 Luke Kunin               Dominic Toninato         Joey Anderson            40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Noah Hanifin             Dennis Gilbert                                    60     1   2  2  
 2 Jeremy Lauzon            Brian Lashoff                                     40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           60     1   2  2  
 2 Luke Kunin               Dominic Toninato         40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Noah Hanifin             Dennis Gilbert           60     1   2  2  
 2 Jeremy Lauzon            Brian Lashoff            40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Unknown Player                                    60     1   2  2  
 2 Luke Kunin                                        40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Noah Hanifin             Dennis Gilbert           60     1   2  2  
 2 Jeremy Lauzon            Brian Lashoff            40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           60     1   2  2  
 2 Luke Kunin               Dominic Toninato         40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Noah Hanifin             Dennis Gilbert           60     1   2  2  
 2 Jeremy Lauzon            Brian Lashoff            40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Unknown Player           Unknown Player           Luke Kunin               Noah Hanifin             Dennis Gilbert           

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Unknown Player           Unknown Player           Luke Kunin               Noah Hanifin             Dennis Gilbert           

<b>Goaltenders</b>
Starting : Zane McIntyre            
Backup : Unknown Goalie           

<b>Extra Forwards</b>
Normal : Joey Anderson, Buddy Robinson, Dominic Toninato - PP : Joey Anderson, Buddy Robinson - PK : Joey Anderson
<b>Extra Defensemen</b>
Normal : Brian Lashoff, Zach Whitecloud, Unknown Player - PP : Brian Lashoff - PK : Brian Lashoff, Zach Whitecloud
<b>Penalty Shots</b>
Unknown Player, Luke Kunin, Unknown Player, Unknown Player, Joey Anderson
<b>Custom OT Lines Forwards</b>
Unknown Player, Luke Kunin, Unknown Player, Unknown Player, Joey Anderson, Buddy Robinson, Dominic Toninato, John Hayden, Eric Robinson, Givani Smith
<b>Custom OT Lines Defensemen</b>
Noah Hanifin, Dennis Gilbert, Jeremy Lauzon, Brian Lashoff, Zach Whitecloud

<b>Scratches</b>
Anthony Cirelli (Healthy), Shane Pinto (Healthy), Joshua Norris (Healthy), Ty Dellandrea (Healthy), Max Willman (Healthy)
Adam Huska (Healthy)</pre></div>
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
 1 Sam Steel                Emil Bemstrom            Martin Necas             40     0   1  4  
 2 Luke Johnson             Max Jones                Alexander Nylander       30     0   1  4  
 3 Michael McCarron         Michael Dal Colle        Unknown Player           20     1   2  2  
 4 Cooper Marody            Unknown Player           Unknown Player           10     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Parker Wotherspoon       Erik Brannstrom                                   40     1   2  2  
 2 Alexandre Carrier        Tyler Wotherspoon                                 30     1   2  2  
 3 Lucas Carlsson           Dan Renouf                                        20     1   2  2  
 4 Unknown Player           Erik Brannstrom                                   10     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Sam Steel                Emil Bemstrom            Martin Necas             60     0   0  5  
 2 Luke Johnson             Max Jones                Alexander Nylander       40     0   0  5  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Parker Wotherspoon       Erik Brannstrom                                   60     1   2  2  
 2 Alexandre Carrier        Tyler Wotherspoon                                 40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Luke Johnson             Alexander Nylander       60     1   2  2  
 2 Michael McCarron         Max Jones                40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Parker Wotherspoon       Erik Brannstrom          60     1   2  2  
 2 Alexandre Carrier        Tyler Wotherspoon        40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Luke Johnson                                      60     1   2  2  
 2 Michael McCarron                                  40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Parker Wotherspoon       Erik Brannstrom          60     1   2  2  
 2 Alexandre Carrier        Tyler Wotherspoon        40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Luke Johnson             Alexander Nylander       60     1   2  2  
 2 Sam Steel                Max Jones                40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Parker Wotherspoon       Erik Brannstrom          60     1   2  2  
 2 Alexandre Carrier        Tyler Wotherspoon        40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Sam Steel                Emil Bemstrom            Martin Necas             Parker Wotherspoon       Erik Brannstrom          

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Luke Johnson             Max Jones                Michael McCarron         Parker Wotherspoon       Erik Brannstrom          

<b>Goaltenders</b>
Starting : Dan Vladar               
Backup : Jake Oettinger           

<b>Extra Forwards</b>
Normal : Luke Johnson, Unknown Player, Michael McCarron - PP : Luke Johnson, Unknown Player - PK : Michael McCarron
<b>Extra Defensemen</b>
Normal : Lucas Carlsson, Dan Renouf, Alexandre Carrier - PP : Lucas Carlsson - PK : Dan Renouf, Alexandre Carrier
<b>Penalty Shots</b>
Martin Necas, Alexander Nylander, Sam Steel, Max Jones, Emil Bemstrom
<b>Custom OT Lines Forwards</b>
Martin Necas, Alexander Nylander, Sam Steel, Max Jones, Emil Bemstrom, Luke Johnson, Michael Dal Colle, Unknown Player, Michael McCarron, Cooper Marody
<b>Custom OT Lines Defensemen</b>
Parker Wotherspoon, Erik Brannstrom, Alexandre Carrier, Tyler Wotherspoon, Lucas Carlsson

<b>Scratches</b>
Jackson Cates (Healthy), Justin Richards (Healthy), Brogan Rafferty (Healthy), Ilya Sorokin (Healthy)</pre></div>
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
 1 Unknown Player           Michael Rasmussen        Micheal Ferland          40     1   1  3  
 2 Steven Fogarty           Anthony Greco            Alexandre Fortin         30     0   2  3  
 3 Unknown Player           Unknown Player           Gabriel Gagne            20     1   2  2  
 4 Unknown Player           Anthony Greco            Unknown Player           10     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Aaron Ness               Unknown Player                                    40     1   2  2  
 2 Unknown Player           Unknown Player                                    30     1   2  2  
 3 Unknown Player           Unknown Player                                    20     1   2  2  
 4 Aaron Ness               Unknown Player                                    10     1   1  3  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Unknown Player           Anthony Greco            Unknown Player           60     0   1  4  
 2 Michael Rasmussen        Alexandre Fortin         Gabriel Gagne            40     1   1  3  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Unknown Player           Aaron Ness                                        60     0   1  3  
 2 Unknown Player           Unknown Player                                    40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Michael Rasmussen        Alexandre Fortin         60     1   2  2  
 2 Steven Fogarty           Unknown Player           40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Unknown Player           Aaron Ness               60     1   2  2  
 2 Unknown Player           Unknown Player           40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Michael Rasmussen                                 60     1   2  2  
 2 Gabriel Gagne                                     40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Aaron Ness               Unknown Player           60     1   2  2  
 2 Unknown Player           Unknown Player           40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Unknown Player           Alexandre Fortin         60     1   2  2  
 2 Michael Rasmussen        Gabriel Gagne            40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Unknown Player           Aaron Ness               60     1   2  2  
 2 Unknown Player           Unknown Player           40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Michael Rasmussen        Unknown Player           Gabriel Gagne            Aaron Ness               Unknown Player           

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Michael Rasmussen        Unknown Player           Gabriel Gagne            Aaron Ness               Unknown Player           

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
Unknown Player, Michael Rasmussen, Micheal Ferland, Steven Fogarty, Anthony Greco, Unknown Player, Alexandre Fortin, Gabriel Gagne, Unknown Player, Unknown Player
<b>Custom OT Lines Defensemen</b>
Unknown Player, Aaron Ness, Unknown Player, Unknown Player, Unknown Player

<b>Scratches</b>
Matej Tomek (Healthy)</pre></div>
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
 1 Morgan Frost             Greg Carey               Unknown Player           40     0   2  3  
 2 Unknown Player           Stefan Matteau           Logan Shaw               30     0   2  3  
 3 J.C. Beaudin             Nick Lappin              Austin Poganski          20     0   2  3  
 4 Adam Musil               Brandon Gignac           Lean Bergmann            10     0   2  3  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Dennis Cholowski         Unknown Player                                    40     0   2  3  
 2 Stuart Percy             Julius Bergman                                    30     0   2  3  
 3 Dennis Robertson         Unknown Player                                    20     0   2  3  
 4 Unknown Player           Dennis Cholowski                                  10     0   2  3  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Unknown Player           Greg Carey               Unknown Player           60     0   0  5  
 2 Morgan Frost             Stefan Matteau           Logan Shaw               40     0   0  5  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Dennis Cholowski         Unknown Player                                    60     0   0  5  
 2 Julius Bergman           Dennis Robertson                                  40     0   0  5  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Unknown Player           Greg Carey               60     0   5  0  
 2 Morgan Frost             Greg Carey               40     0   5  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Dennis Cholowski         Unknown Player           60     0   5  0  
 2 Julius Bergman           Dennis Robertson         40     0   5  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Unknown Player                                    60     0   5  0  
 2 Greg Carey                                        40     0   5  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Dennis Cholowski         Unknown Player           60     0   5  0  
 2 Julius Bergman           Dennis Robertson         40     0   5  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Morgan Frost             Greg Carey               60     1   2  2  
 2 Unknown Player           Stefan Matteau           40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Dennis Cholowski         Unknown Player           60     1   2  2  
 2 Julius Bergman           Dennis Robertson         40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Morgan Frost             Greg Carey               Unknown Player           Dennis Cholowski         Unknown Player           

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Unknown Player           Stefan Matteau           Unknown Player           Dennis Cholowski         Unknown Player           

<b>Goaltenders</b>
Starting : Pheonix Copley           
Backup : Joseph Woll              

<b>Extra Forwards</b>
Normal : Stefan Matteau, Unknown Player, Austin Poganski - PP : Stefan Matteau, Unknown Player - PK : Austin Poganski
<b>Extra Defensemen</b>
Normal : Stuart Percy, Unknown Player, Julius Bergman - PP : Stuart Percy - PK : Unknown Player, Julius Bergman
<b>Penalty Shots</b>
Greg Carey, Unknown Player, Lean Bergmann, Unknown Player, Morgan Frost
<b>Custom OT Lines Forwards</b>
Adam Musil, Lean Bergmann, Morgan Frost, Greg Carey, Unknown Player, Stefan Matteau, Unknown Player, Logan Shaw, Austin Poganski, J.C. Beaudin
<b>Custom OT Lines Defensemen</b>
Dennis Cholowski, Unknown Player, Julius Bergman, Dennis Robertson, Stuart Percy

<b>Scratches</b>
Nils Hoglander (Healthy), Dylan Cozens (Healthy), Aaron Harstad (Healthy), Ville Heinola (Healthy), Brandon Hagel (Healthy)</pre></div>
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
Ian McCoshen (Healthy), Kevin Roy (Healthy), Dominik Bokk (Healthy), Jesse Ylonen (Healthy), Linus Hogberg (Healthy)
Max Gildon (Healthy), Charlie Lindgren (Healthy)</pre></div>
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
 1 Noah Gregor              Dryden Hunt              Martin Frk               40     1   2  2  
 2 Anthony Richard          Stefan Noesen            Austin Wagner            30     1   2  2  
 3 Unknown Player           Axel Jonsson-Fjallby     Unknown Player           20     1   2  2  
 4 Dryden Hunt              Martin Frk               Stefan Noesen            10     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Josh Mahura              Jake Bischoff                                     40     1   2  2  
 2 Reece Willcox            Anton Lindholm                                    30     1   2  2  
 3 Jack Dougherty           Unknown Player                                    20     1   2  2  
 4 Josh Mahura              Jake Bischoff                                     10     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Noah Gregor              Dryden Hunt              Martin Frk               60     1   2  2  
 2 Anthony Richard          Stefan Noesen            Austin Wagner            40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Josh Mahura              Jake Bischoff                                     60     1   2  2  
 2 Reece Willcox            Anton Lindholm                                    40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Dryden Hunt              Martin Frk               60     1   2  2  
 2 Stefan Noesen            Noah Gregor              40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Josh Mahura              Jake Bischoff            60     1   2  2  
 2 Reece Willcox            Anton Lindholm           40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Dryden Hunt                                       60     1   2  2  
 2 Martin Frk                                        40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Josh Mahura              Jake Bischoff            60     1   2  2  
 2 Reece Willcox            Anton Lindholm           40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Dryden Hunt              Martin Frk               60     1   2  2  
 2 Stefan Noesen            Noah Gregor              40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Josh Mahura              Jake Bischoff            60     1   2  2  
 2 Reece Willcox            Anton Lindholm           40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Noah Gregor              Dryden Hunt              Martin Frk               Josh Mahura              Jake Bischoff            

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Noah Gregor              Dryden Hunt              Martin Frk               Josh Mahura              Jake Bischoff            

<b>Goaltenders</b>
Starting : Marcus Hogberg           
Backup : Jake Paterson            

<b>Extra Forwards</b>
Normal : Axel Jonsson-Fjallby, Austin Wagner, Anthony Richard - PP : Axel Jonsson-Fjallby, Austin Wagner - PK : Anthony Richard
<b>Extra Defensemen</b>
Normal : Jack Dougherty, Reece Willcox, Anton Lindholm - PP : Jack Dougherty - PK : Reece Willcox, Anton Lindholm
<b>Penalty Shots</b>
Dryden Hunt, Martin Frk, Stefan Noesen, Noah Gregor, Austin Wagner
<b>Custom OT Lines Forwards</b>
Dryden Hunt, Martin Frk, Stefan Noesen, Noah Gregor, Austin Wagner, Anthony Richard, Axel Jonsson-Fjallby, Unknown Player, Unknown Player, Unknown Player
<b>Custom OT Lines Defensemen</b>
Josh Mahura, Jake Bischoff, Reece Willcox, Anton Lindholm, Jack Dougherty

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
 1 Michael Amadio           Chris Terry              Cole Schneider           40     1   2  2  
 2 Unknown Player           Tage Thompson            Keegan Kolesar           30     1   2  2  
 3 Unknown Player           Laurent Dauphin          Turner Elson             20     1   2  2  
 4 Sean Malone              Mikey Eyssimont          Ross Johnston            10     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player                                    40     1   2  2  
 2 Andy Welinski            Taylor Fedun                                      30     1   2  2  
 3 Alexander Yelesin        Tyler Lewington                                   20     1   2  2  
 4 Unknown Player           Unknown Player                                    10     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Michael Amadio           Chris Terry              Cole Schneider           60     1   2  2  
 2 Unknown Player           Unknown Player           Tage Thompson            40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player                                    60     1   2  2  
 2 Andy Welinski            Taylor Fedun                                      40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Michael Amadio           Chris Terry              60     1   2  2  
 2 Unknown Player           Tage Thompson            40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           60     1   2  2  
 2 Andy Welinski            Taylor Fedun             40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Michael Amadio                                    60     1   2  2  
 2 Unknown Player                                    40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           60     1   2  2  
 2 Andy Welinski            Taylor Fedun             40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Michael Amadio           Chris Terry              60     1   2  2  
 2 Unknown Player           Tage Thompson            40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           60     1   2  2  
 2 Andy Welinski            Taylor Fedun             40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Michael Amadio           Chris Terry              Cole Schneider           Unknown Player           Unknown Player           

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Michael Amadio           Chris Terry              Cole Schneider           Unknown Player           Unknown Player           

<b>Goaltenders</b>
Starting : Ilya Samsonov            
Backup : Jonas Johansson          

<b>Extra Forwards</b>
Normal : Unknown Player, Unknown Player, Laurent Dauphin - PP : Unknown Player, Unknown Player - PK : Unknown Player
<b>Extra Defensemen</b>
Normal : Taylor Fedun, Alexander Yelesin, Tyler Lewington - PP : Taylor Fedun - PK : Taylor Fedun, Alexander Yelesin
<b>Penalty Shots</b>
Chris Terry, Tage Thompson, Cole Schneider, Michael Amadio, Unknown Player
<b>Custom OT Lines Forwards</b>
Chris Terry, Tage Thompson, Cole Schneider, Michael Amadio, Unknown Player, Unknown Player, Laurent Dauphin, Keegan Kolesar, Mikey Eyssimont, Sean Malone
<b>Custom OT Lines Defensemen</b>
Unknown Player, Unknown Player, Andy Welinski, Taylor Fedun, Alexander Yelesin

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
 1 Unknown Player           Unknown Player           Nick Moutrey             40     1   2  2  
 2 Unknown Player           Dmytro Timashov          Unknown Player           30     1   2  2  
 3 Unknown Player           Unknown Player           Unknown Player           20     1   2  2  
 4 Unknown Player           Unknown Player           Dmytro Timashov          10     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player                                    40     1   2  2  
 2 Unknown Player           Unknown Player                                    30     1   2  2  
 3 Unknown Player           Unknown Player                                    20     1   2  2  
 4 Unknown Player           Unknown Player                                    10     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           Nick Moutrey             60     1   2  2  
 2 Unknown Player           Dmytro Timashov          Unknown Player           40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player                                    60     1   2  2  
 2 Unknown Player           Unknown Player                                    40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           60     1   2  2  
 2 Dmytro Timashov          Nick Moutrey             40     1   2  2  

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
 2 Dmytro Timashov          Nick Moutrey             40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           60     1   2  2  
 2 Unknown Player           Unknown Player           40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Unknown Player           Unknown Player           Nick Moutrey             Unknown Player           Unknown Player           

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Unknown Player           Unknown Player           Nick Moutrey             Unknown Player           Unknown Player           

<b>Goaltenders</b>
Starting : Unknown Goalie           
Backup : Unknown Goalie           

<b>Extra Forwards</b>
Normal : Unknown Player, Nick Moutrey, Dmytro Timashov - PP : Unknown Player, Nick Moutrey - PK : Dmytro Timashov
<b>Extra Defensemen</b>
Normal : Unknown Player, Unknown Player, Unknown Player - PP : Unknown Player - PK : Unknown Player, Unknown Player
<b>Penalty Shots</b>
Unknown Player, Unknown Player, Dmytro Timashov, Nick Moutrey, Unknown Player
<b>Custom OT Lines Forwards</b>
Unknown Player, Unknown Player, Dmytro Timashov, Nick Moutrey, Unknown Player, Unknown Player, Unknown Player, Unknown Player, Unknown Player, Unknown Player
<b>Custom OT Lines Defensemen</b>
Unknown Player, Unknown Player, Unknown Player, Unknown Player, Unknown Player

<b>Scratches</b>
Trevor Carrick (Healthy)</pre></div>
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
John Leonard (Healthy), Robbie Russo (Healthy), Kristian Vesalainen (Healthy), Timothy Gettinger (Healthy), Oliver Wahlstrom (Healthy)
Stuart Skinner (Healthy)</pre></div>
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
 2 Unknown Player           Ryan Poehling            Unknown Player           30     1   2  2  
 3 Unknown Player           Unknown Player           Unknown Player           20     1   2  2  
 4 Matt Puempel             Andrew Agozzino          Unknown Player           10     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player                                    40     1   2  2  
 2 Unknown Player           Unknown Player                                    30     1   2  2  
 3 Unknown Player           Unknown Player                                    20     1   2  2  
 4 Unknown Player           Unknown Player                                    10     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Andrew Agozzino          Matt Puempel             Unknown Player           60     1   2  2  
 2 Unknown Player           Ryan Poehling            Unknown Player           40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player                                    60     1   2  2  
 2 Unknown Player           Unknown Player                                    40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Matt Puempel             Andrew Agozzino          60     1   2  2  
 2 Unknown Player           Ryan Poehling            40     1   2  2  

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
 2 Unknown Player           Ryan Poehling            40     1   2  2  

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
Normal : Ryan Poehling, Unknown Player, Matt Puempel - PP : Ryan Poehling, Unknown Player - PK : Matt Puempel
<b>Extra Defensemen</b>
Normal : Unknown Player, Unknown Player, Unknown Player - PP : Unknown Player - PK : Unknown Player, Unknown Player
<b>Penalty Shots</b>
Matt Puempel, Andrew Agozzino, Unknown Player, Ryan Poehling, Unknown Player
<b>Custom OT Lines Forwards</b>
Matt Puempel, Andrew Agozzino, Unknown Player, Ryan Poehling, Unknown Player, Unknown Player, Unknown Player, Unknown Player, Unknown Player, Unknown Player
<b>Custom OT Lines Defensemen</b>
Unknown Player, Unknown Player, Unknown Player, Unknown Player, Unknown Player

<b>Scratches</b>
Kyle Burroughs (Healthy), Cal Foote (Healthy), Thomas Hickey (Healthy)</pre></div>
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
Sebastian AhoD (Healthy), Nathan Paetsch (Healthy), David Warsofsky (Healthy)</pre></div>
<?php include "Footer.php";?>
