<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<title>OTHL - Farm Team Lines</title>
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
<div class="STHSTopLink"><a id="STHSRosterTop"></a> <a href="#Eagles">Eagles</a> | <a href="#IceHogs">IceHogs</a> | <a href="#Monsters">Monsters</a> | <a href="#Rampage">Rampage </a> | <a href="#Bruins">Bruins</a> | <a href="#Rocket">Rocket</a> | <a href="#Canucks">Canucks</a> | <a href="#Bears">Bears</a> | <a href="#Roadrunners">Roadrunners</a> | <a href="#Comets">Comets</a> | <a href="#Gulls">Gulls</a> | <a href="#Heat">Heat</a> | <a href="#Phantoms">Phantoms</a> | <a href="#Wolves">Wolves</a> | <a href="#Checkers">Checkers</a> | <a href="#SoundTigers">Sound Tigers</a> | <a href="#Moose">Moose</a> | <a href="#Reign">Reign</a> | <a href="#Mariners">Mariners</a> | <a href="#Crunch">Crunch</a> | <a href="#Marlies">Marlies</a> | <a href="#Condors">Condors</a> | <a href="#Thunderbirds">Thunderbirds</a> | <a href="#Penguins">Penguins</a> | <a href="#Admirals">Admirals</a> | <a href="#WolfPack">Wolf Pack</a> | <a href="#Griffins">Griffins</a> | <a href="#Americans"> Americans</a> | <a href="#Senators">Senators</a> | <a href="#Barracudas">Barracudas</a> | <a href="#Stars">Stars</a> | <a href="#Wild">Wild</a> | <a href="javascript:STHS_JS_CloseAll('');">Close All Team View</a> | <a href="javascript:STHS_JS_OpenAll('');">Open All Team View</a>
</div>
<h1 class="TeamLineFarm_COL"><a id="Eagles">Eagles</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=8">Avalanche Page</a> ]
[ <a href="OTHL-PRE-ProTeamRoster.php#Avalanche">Pro Team Roster</a> ]
[ <a href="OTHL-PRE-FarmTeamScoring.php#Eagles">Farm Team Scoring</a> ]
[ <a href="OTHL-PRE-FarmTeamLines.php#Eagles">Farm Team Lines</a> ]
[ <a href="OTHL-PRE-FarmTeamSchedule.php#Eagles">Farm Team Schedule</a> ]
[ <a href="OTHL-PRE-FarmTeamStats.php#Eagles">Farm Team Stats</a> ]
[ <a href="OTHL-PRE-FarmTeamStatsVS.php#Eagles">Farm Team StatsVS</a> ]
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
None
</pre></div>
<h1 class="TeamLineFarm_RCK"><a id="IceHogs">IceHogs</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=7">Blackhawks Page</a> ]
[ <a href="OTHL-PRE-ProTeamRoster.php#Blackhawks">Pro Team Roster</a> ]
[ <a href="OTHL-PRE-FarmTeamScoring.php#IceHogs">Farm Team Scoring</a> ]
[ <a href="OTHL-PRE-FarmTeamLines.php#IceHogs">Farm Team Lines</a> ]
[ <a href="OTHL-PRE-FarmTeamSchedule.php#IceHogs">Farm Team Schedule</a> ]
[ <a href="OTHL-PRE-FarmTeamStats.php#IceHogs">Farm Team Stats</a> ]
[ <a href="OTHL-PRE-FarmTeamStatsVS.php#IceHogs">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_IceHogs');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_IceHogs" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Unknown Player           Kiefer Sherwood          Dominik Simon            40     1   2  2  
 2 Joseph Blandisi          Skyler McKenzie          Jake Leschyshyn          30     1   2  2  
 3 Glenn Gawdin             Carsen Twarynski         Unknown Player           20     1   2  2  
 4 Jake Leschyshyn          Unknown Player           Kiefer Sherwood          10     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Wyatt Kalynuk            Simon Benoit                                      40     1   2  2  
 2 Dylan Coghlan            Connor Mackey                                     30     1   2  2  
 3 Ville Pokka              Mitch Vande Sompel                                20     1   2  2  
 4 Wyatt Kalynuk            Simon Benoit                                      10     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Unknown Player           Kiefer Sherwood          Dominik Simon            60     1   2  2  
 2 Joseph Blandisi          Skyler McKenzie          Jake Leschyshyn          40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Wyatt Kalynuk            Simon Benoit                                      60     1   2  2  
 2 Dylan Coghlan            Connor Mackey                                     40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Unknown Player           Kiefer Sherwood          60     1   2  2  
 2 Joseph Blandisi          Glenn Gawdin             40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Wyatt Kalynuk            Simon Benoit             60     1   2  2  
 2 Dylan Coghlan            Connor Mackey            40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Unknown Player                                    60     1   2  2  
 2 Kiefer Sherwood                                   40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Wyatt Kalynuk            Simon Benoit             60     1   2  2  
 2 Dylan Coghlan            Connor Mackey            40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Unknown Player           Kiefer Sherwood          60     1   2  2  
 2 Joseph Blandisi          Glenn Gawdin             40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Wyatt Kalynuk            Simon Benoit             60     1   2  2  
 2 Dylan Coghlan            Connor Mackey            40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Unknown Player           Kiefer Sherwood          Dominik Simon            Wyatt Kalynuk            Simon Benoit             

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Unknown Player           Kiefer Sherwood          Dominik Simon            Wyatt Kalynuk            Simon Benoit             

<b>Goaltenders</b>
Starting : Kaden Fulcher            
Backup : Colton Point             

<b>Extra Forwards</b>
Normal : Carsen Twarynski, Dominik Simon, Skyler McKenzie - PP : Carsen Twarynski, Dominik Simon - PK : Skyler McKenzie
<b>Extra Defensemen</b>
Normal : Ville Pokka, Mitch Vande Sompel, Dylan Coghlan - PP : Ville Pokka - PK : Mitch Vande Sompel, Dylan Coghlan
<b>Penalty Shots</b>
Unknown Player, Kiefer Sherwood, Joseph Blandisi, Glenn Gawdin, Dominik Simon
<b>Custom OT Lines Forwards</b>
Unknown Player, Kiefer Sherwood, Joseph Blandisi, Glenn Gawdin, Dominik Simon, Jake Leschyshyn, Skyler McKenzie, Carsen Twarynski, Unknown Player, Unknown Player
<b>Custom OT Lines Defensemen</b>
Wyatt Kalynuk, Simon Benoit, Dylan Coghlan, Connor Mackey, Ville Pokka

<b>Scratches</b>
None
</pre></div>
<h1 class="TeamLineFarm_CLE"><a id="Monsters">Monsters</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=9">Blue Jackets Page</a> ]
[ <a href="OTHL-PRE-ProTeamRoster.php#BlueJackets">Pro Team Roster</a> ]
[ <a href="OTHL-PRE-FarmTeamScoring.php#Monsters">Farm Team Scoring</a> ]
[ <a href="OTHL-PRE-FarmTeamLines.php#Monsters">Farm Team Lines</a> ]
[ <a href="OTHL-PRE-FarmTeamSchedule.php#Monsters">Farm Team Schedule</a> ]
[ <a href="OTHL-PRE-FarmTeamStats.php#Monsters">Farm Team Stats</a> ]
[ <a href="OTHL-PRE-FarmTeamStatsVS.php#Monsters">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Monsters');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Monsters" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 T.J. Tynan               Phillip Di Giuseppe      Lukas Jasek              40     1   2  2  
 2 Greg McKegg              Jonah Gadjovich          Brent Pedersen           30     1   2  2  
 3 Brandon Baddock          Justin Kirkland          Unknown Player           20     1   2  2  
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
 2 Greg McKegg              Jonah Gadjovich          Brent Pedersen           40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Nikolai Knyzhov          Tommy Cross                                       60     1   2  2  
 2 Evan McEneny             Mason Geertsen                                    40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Phillip Di Giuseppe      T.J. Tynan               60     1   2  2  
 2 Greg McKegg              Jonah Gadjovich          40     1   2  2  

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
 2 Greg McKegg              Jonah Gadjovich          40     1   2  2  

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
Backup : Jeff Glass               

<b>Extra Forwards</b>
Normal : Justin Kirkland, Brandon Baddock, Lukas Jasek - PP : Justin Kirkland, Brandon Baddock - PK : Lukas Jasek
<b>Extra Defensemen</b>
Normal : Evan McEneny, Mason Geertsen, Nikolai Knyzhov - PP : Evan McEneny - PK : Mason Geertsen, Nikolai Knyzhov
<b>Penalty Shots</b>
Phillip Di Giuseppe, T.J. Tynan, Greg McKegg, Jonah Gadjovich, Lukas Jasek
<b>Custom OT Lines Forwards</b>
Phillip Di Giuseppe, T.J. Tynan, Greg McKegg, Jonah Gadjovich, Lukas Jasek, Justin Kirkland, Brent Pedersen, Brandon Baddock, Unknown Player, Unknown Player
<b>Custom OT Lines Defensemen</b>
Nikolai Knyzhov, Tommy Cross, Evan McEneny, Mason Geertsen, Unknown Player

<b>Scratches</b>
None
</pre></div>
<h1 class="TeamLineFarm_SAR"><a id="Rampage">Rampage </a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=25">Blues Page</a> ]
[ <a href="OTHL-PRE-ProTeamRoster.php#Blues">Pro Team Roster</a> ]
[ <a href="OTHL-PRE-FarmTeamScoring.php#Rampage">Farm Team Scoring</a> ]
[ <a href="OTHL-PRE-FarmTeamLines.php#Rampage">Farm Team Lines</a> ]
[ <a href="OTHL-PRE-FarmTeamSchedule.php#Rampage">Farm Team Schedule</a> ]
[ <a href="OTHL-PRE-FarmTeamStats.php#Rampage">Farm Team Stats</a> ]
[ <a href="OTHL-PRE-FarmTeamStatsVS.php#Rampage">Farm Team StatsVS</a> ]
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
[ <a href="OTHL-PRE-ProTeamRoster.php#Bruins">Pro Team Roster</a> ]
[ <a href="OTHL-PRE-FarmTeamScoring.php#Bruins">Farm Team Scoring</a> ]
[ <a href="OTHL-PRE-FarmTeamLines.php#Bruins">Farm Team Lines</a> ]
[ <a href="OTHL-PRE-FarmTeamSchedule.php#Bruins">Farm Team Schedule</a> ]
[ <a href="OTHL-PRE-FarmTeamStats.php#Bruins">Farm Team Stats</a> ]
[ <a href="OTHL-PRE-FarmTeamStatsVS.php#Bruins">Farm Team StatsVS</a> ]
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
 2 Unknown Player           Unknown Player                                    30     1   2  2  
 3 Devante Stephens         Gustav Olofsson                                   20     1   2  2  
 4 Unknown Player           Ryan Collins                                      10     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Anthony Angello          Unknown Player           Unknown Player           60     1   2  2  
 2 Unknown Player           Nathan Walker            Unknown Player           40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Jaycob Megna             Unknown Player                                    60     1   2  2  
 2 Unknown Player           Unknown Player                                    40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           60     1   2  2  
 2 Anthony Angello          Nathan Walker            40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Jaycob Megna             Unknown Player           60     1   2  2  
 2 Unknown Player           Unknown Player           40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Unknown Player                                    60     1   2  2  
 2 Unknown Player                                    40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Jaycob Megna             Unknown Player           60     1   2  2  
 2 Unknown Player           Unknown Player           40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           60     1   2  2  
 2 Anthony Angello          Nathan Walker            40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Jaycob Megna             Unknown Player           60     1   2  2  
 2 Unknown Player           Unknown Player           40     1   2  2  

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
Jaycob Megna, Unknown Player, Unknown Player, Unknown Player, Devante Stephens

<b>Scratches</b>
None
</pre></div>
<h1 class="TeamLineFarm_LAV"><a id="Rocket">Rocket</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=16">Canadiens Page</a> ]
[ <a href="OTHL-PRE-ProTeamRoster.php#Canadiens">Pro Team Roster</a> ]
[ <a href="OTHL-PRE-FarmTeamScoring.php#Rocket">Farm Team Scoring</a> ]
[ <a href="OTHL-PRE-FarmTeamLines.php#Rocket">Farm Team Lines</a> ]
[ <a href="OTHL-PRE-FarmTeamSchedule.php#Rocket">Farm Team Schedule</a> ]
[ <a href="OTHL-PRE-FarmTeamStats.php#Rocket">Farm Team Stats</a> ]
[ <a href="OTHL-PRE-FarmTeamStatsVS.php#Rocket">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Rocket');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Rocket" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Henrik Borgstrom         Kalle Kossila            Matthew Phillips         40     1   2  2  
 2 Noah Juulsen             Sheldon Rempal           Matt Luff                30     1   2  2  
 3 Unknown Player           Unknown Player           Unknown Player           20     1   2  2  
 4 Henrik Borgstrom         Kalle Kossila            Matthew Phillips         10     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Nikita Nesterov          Otto Leskinen                                     40     1   2  2  
 2 Madison Bowey            Chris Bigras                                      30     1   2  2  
 3 Chase Priskie            Yegor Zamula                                      20     1   2  2  
 4 Noah Juulsen             Nikita Nesterov                                   10     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Henrik Borgstrom         Kalle Kossila            Matthew Phillips         60     1   2  2  
 2 Noah Juulsen             Sheldon Rempal           Matt Luff                40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Nikita Nesterov          Otto Leskinen                                     60     1   2  2  
 2 Madison Bowey            Chris Bigras                                      40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Henrik Borgstrom         Kalle Kossila            60     1   2  2  
 2 Matthew Phillips         Sheldon Rempal           40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Nikita Nesterov          Otto Leskinen            60     1   2  2  
 2 Madison Bowey            Chris Bigras             40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Henrik Borgstrom                                  60     1   2  2  
 2 Kalle Kossila                                     40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Nikita Nesterov          Otto Leskinen            60     1   2  2  
 2 Madison Bowey            Chris Bigras             40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Henrik Borgstrom         Kalle Kossila            60     1   2  2  
 2 Matthew Phillips         Sheldon Rempal           40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Nikita Nesterov          Otto Leskinen            60     1   2  2  
 2 Madison Bowey            Chris Bigras             40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Henrik Borgstrom         Kalle Kossila            Matthew Phillips         Nikita Nesterov          Otto Leskinen            

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Henrik Borgstrom         Kalle Kossila            Matthew Phillips         Nikita Nesterov          Otto Leskinen            

<b>Goaltenders</b>
Starting : Carter Hart              
Backup : Mikhail Berdin           

<b>Extra Forwards</b>
Normal : Matt Luff, Sheldon Rempal, Matthew Phillips - PP : Matt Luff, Sheldon Rempal - PK : Matthew Phillips
<b>Extra Defensemen</b>
Normal : Chase Priskie, Yegor Zamula, Noah Juulsen - PP : Chase Priskie - PK : Yegor Zamula, Noah Juulsen
<b>Penalty Shots</b>
Henrik Borgstrom, Kalle Kossila, Matthew Phillips, Sheldon Rempal, Matt Luff
<b>Custom OT Lines Forwards</b>
Henrik Borgstrom, Kalle Kossila, Matthew Phillips, Sheldon Rempal, Matt Luff, Unknown Player, Unknown Player, Unknown Player, Unknown Player, Unknown Player
<b>Custom OT Lines Defensemen</b>
Nikita Nesterov, Otto Leskinen, Madison Bowey, Chris Bigras, Chase Priskie

<b>Scratches</b>
None
</pre></div>
<h1 class="TeamLineFarm_ABB"><a id="Canucks">Canucks</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=29">Canucks Page</a> ]
[ <a href="OTHL-PRE-ProTeamRoster.php#Canucks">Pro Team Roster</a> ]
[ <a href="OTHL-PRE-FarmTeamScoring.php#Canucks">Farm Team Scoring</a> ]
[ <a href="OTHL-PRE-FarmTeamLines.php#Canucks">Farm Team Lines</a> ]
[ <a href="OTHL-PRE-FarmTeamSchedule.php#Canucks">Farm Team Schedule</a> ]
[ <a href="OTHL-PRE-FarmTeamStats.php#Canucks">Farm Team Stats</a> ]
[ <a href="OTHL-PRE-FarmTeamStatsVS.php#Canucks">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Canucks');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Canucks" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           Parker Kelly             40     1   2  2  
 2 Garrett Pilon            Boris Katchouk           Tyler Steenbergen        30     1   2  2  
 3 Brett Seney              C.J. Suess               Tanner Kaspick           20     1   2  2  
 4 Tanner Kaspick           Michael Pezzetta         Unknown Player           10     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Gabriel Carlsson         Kale Clague                                       40     1   2  2  
 2 Mikko Lehtonen           Jacob Middleton                                   30     1   2  2  
 3 Frederic Allard          Gavin Bayreuther                                  20     1   2  2  
 4 Ben Gleason              Gabriel Carlsson                                  10     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           Parker Kelly             60     1   2  2  
 2 Garrett Pilon            Boris Katchouk           Tyler Steenbergen        40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Gabriel Carlsson         Kale Clague                                       60     1   2  2  
 2 Mikko Lehtonen           Jacob Middleton                                   40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           60     1   2  2  
 2 Boris Katchouk           Garrett Pilon            40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Gabriel Carlsson         Kale Clague              60     1   2  2  
 2 Mikko Lehtonen           Jacob Middleton          40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Unknown Player                                    60     1   2  2  
 2 Unknown Player                                    40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Gabriel Carlsson         Kale Clague              60     1   2  2  
 2 Mikko Lehtonen           Jacob Middleton          40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           60     1   2  2  
 2 Boris Katchouk           Garrett Pilon            40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Gabriel Carlsson         Kale Clague              60     1   2  2  
 2 Mikko Lehtonen           Jacob Middleton          40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Unknown Player           Unknown Player           Parker Kelly             Gabriel Carlsson         Kale Clague              

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Unknown Player           Unknown Player           Parker Kelly             Gabriel Carlsson         Kale Clague              

<b>Goaltenders</b>
Starting : Alexandar Georgiev       
Backup : Hunter Miska             

<b>Extra Forwards</b>
Normal : C.J. Suess, Brett Seney, Michael Pezzetta - PP : C.J. Suess, Brett Seney - PK : Michael Pezzetta
<b>Extra Defensemen</b>
Normal : Frederic Allard, Gavin Bayreuther, Ben Gleason - PP : Frederic Allard - PK : Gavin Bayreuther, Ben Gleason
<b>Penalty Shots</b>
Unknown Player, Unknown Player, Boris Katchouk, Garrett Pilon, Parker Kelly
<b>Custom OT Lines Forwards</b>
Unknown Player, Unknown Player, Boris Katchouk, Garrett Pilon, Parker Kelly, Tyler Steenbergen, C.J. Suess, Brett Seney, Tanner Kaspick, Michael Pezzetta
<b>Custom OT Lines Defensemen</b>
Gabriel Carlsson, Kale Clague, Mikko Lehtonen, Jacob Middleton, Frederic Allard

<b>Scratches</b>
None
</pre></div>
<h1 class="TeamLineFarm_HER"><a id="Bears">Bears</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=30">Capitals Page</a> ]
[ <a href="OTHL-PRE-ProTeamRoster.php#Capitals">Pro Team Roster</a> ]
[ <a href="OTHL-PRE-FarmTeamScoring.php#Bears">Farm Team Scoring</a> ]
[ <a href="OTHL-PRE-FarmTeamLines.php#Bears">Farm Team Lines</a> ]
[ <a href="OTHL-PRE-FarmTeamSchedule.php#Bears">Farm Team Schedule</a> ]
[ <a href="OTHL-PRE-FarmTeamStats.php#Bears">Farm Team Stats</a> ]
[ <a href="OTHL-PRE-FarmTeamStatsVS.php#Bears">Farm Team StatsVS</a> ]
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
[ <a href="OTHL-PRE-ProTeamRoster.php#Coyotes">Pro Team Roster</a> ]
[ <a href="OTHL-PRE-FarmTeamScoring.php#Roadrunners">Farm Team Scoring</a> ]
[ <a href="OTHL-PRE-FarmTeamLines.php#Roadrunners">Farm Team Lines</a> ]
[ <a href="OTHL-PRE-FarmTeamSchedule.php#Roadrunners">Farm Team Schedule</a> ]
[ <a href="OTHL-PRE-FarmTeamStats.php#Roadrunners">Farm Team Stats</a> ]
[ <a href="OTHL-PRE-FarmTeamStatsVS.php#Roadrunners">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Roadrunners');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Roadrunners" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           Unknown Player           40     1   2  2  
 2 Unknown Player           Unknown Player           Unknown Player           30     1   2  2  
 3 Unknown Player           Unknown Player           Unknown Player           20     1   2  2  
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
Normal : Unknown Player, Unknown Player, Unknown Player - PP : Unknown Player, Unknown Player - PK : Unknown Player
<b>Extra Defensemen</b>
Normal : Brady Keeper, Unknown Player, Unknown Player - PP : Brady Keeper - PK : Unknown Player, Unknown Player
<b>Penalty Shots</b>
Unknown Player, Unknown Player, Unknown Player, Unknown Player, Unknown Player
<b>Custom OT Lines Forwards</b>
Unknown Player, Unknown Player, Unknown Player, Unknown Player, Unknown Player, Unknown Player, Unknown Player, Unknown Player, Unknown Player, Unknown Player
<b>Custom OT Lines Defensemen</b>
Unknown Player, Unknown Player, Unknown Player, Unknown Player, Unknown Player

<b>Scratches</b>
None
</pre></div>
<h1 class="TeamLineFarm_UTI"><a id="Comets">Comets</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=18">Devils Page</a> ]
[ <a href="OTHL-PRE-ProTeamRoster.php#Devils">Pro Team Roster</a> ]
[ <a href="OTHL-PRE-FarmTeamScoring.php#Comets">Farm Team Scoring</a> ]
[ <a href="OTHL-PRE-FarmTeamLines.php#Comets">Farm Team Lines</a> ]
[ <a href="OTHL-PRE-FarmTeamSchedule.php#Comets">Farm Team Schedule</a> ]
[ <a href="OTHL-PRE-FarmTeamStats.php#Comets">Farm Team Stats</a> ]
[ <a href="OTHL-PRE-FarmTeamStatsVS.php#Comets">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Comets');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Comets" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           Unknown Player           40     1   2  2  
 2 Unknown Player           Unknown Player           Unknown Player           30     1   2  2  
 3 Unknown Player           Unknown Player           Blake Speers             20     1   2  2  
 4 Unknown Player           Unknown Player           Unknown Player           10     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player                                    40     1   2  2  
 2 Leon Gawanke             Unknown Player                                    30     1   2  2  
 3 Unknown Player           Unknown Player                                    20     1   2  2  
 4 Unknown Player           Unknown Player                                    10     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           Unknown Player           60     1   2  2  
 2 Unknown Player           Unknown Player           Unknown Player           40     1   2  2  

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
Normal : Unknown Player, Unknown Player, Unknown Player - PP : Unknown Player, Unknown Player - PK : Unknown Player
<b>Extra Defensemen</b>
Normal : Unknown Player, Unknown Player, Leon Gawanke - PP : Unknown Player - PK : Unknown Player, Leon Gawanke
<b>Penalty Shots</b>
Unknown Player, Unknown Player, Unknown Player, Unknown Player, Unknown Player
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
[ <a href="OTHL-PRE-ProTeamRoster.php#Ducks">Pro Team Roster</a> ]
[ <a href="OTHL-PRE-FarmTeamScoring.php#Gulls">Farm Team Scoring</a> ]
[ <a href="OTHL-PRE-FarmTeamLines.php#Gulls">Farm Team Lines</a> ]
[ <a href="OTHL-PRE-FarmTeamSchedule.php#Gulls">Farm Team Schedule</a> ]
[ <a href="OTHL-PRE-FarmTeamStats.php#Gulls">Farm Team Stats</a> ]
[ <a href="OTHL-PRE-FarmTeamStatsVS.php#Gulls">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Gulls');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Gulls" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           Unknown Player           40     1   2  2  
 2 Unknown Player           Unknown Player           Unknown Player           30     1   2  2  
 3 Ryan MacInnis            Unknown Player           Unknown Player           20     1   2  2  
 4 Unknown Player           Unknown Player           Unknown Player           10     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Unknown Player           Jeremy Roy                                        40     1   2  2  
 2 Lucas Johansen           Unknown Player                                    30     1   2  2  
 3 Unknown Player           Unknown Player                                    20     1   2  2  
 4 Unknown Player           Jeremy Roy                                        10     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           Unknown Player           60     1   2  2  
 2 Unknown Player           Unknown Player           Unknown Player           40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Unknown Player           Jeremy Roy                                        60     1   2  2  
 2 Lucas Johansen           Unknown Player                                    40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           60     1   2  2  
 2 Unknown Player           Unknown Player           40     1   2  2  

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
 2 Unknown Player           Unknown Player           40     1   2  2  

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
Starting : Unknown Goalie           
Backup : Unknown Goalie           

<b>Extra Forwards</b>
Normal : Ryan MacInnis, Unknown Player, Unknown Player - PP : Ryan MacInnis, Unknown Player - PK : Unknown Player
<b>Extra Defensemen</b>
Normal : Lucas Johansen, Unknown Player, Jeremy Roy - PP : Lucas Johansen - PK : Unknown Player, Jeremy Roy
<b>Penalty Shots</b>
Unknown Player, Unknown Player, Unknown Player, Unknown Player, Unknown Player
<b>Custom OT Lines Forwards</b>
Unknown Player, Unknown Player, Unknown Player, Unknown Player, Unknown Player, Ryan MacInnis, Unknown Player, Unknown Player, Unknown Player, Unknown Player
<b>Custom OT Lines Defensemen</b>
Unknown Player, Jeremy Roy, Lucas Johansen, Unknown Player, Unknown Player

<b>Scratches</b>
Ian Scott (Healthy)</pre></div>
<h1 class="TeamLineFarm_STK"><a id="Heat">Heat</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=5">Flames Page</a> ]
[ <a href="OTHL-PRE-ProTeamRoster.php#Flames">Pro Team Roster</a> ]
[ <a href="OTHL-PRE-FarmTeamScoring.php#Heat">Farm Team Scoring</a> ]
[ <a href="OTHL-PRE-FarmTeamLines.php#Heat">Farm Team Lines</a> ]
[ <a href="OTHL-PRE-FarmTeamSchedule.php#Heat">Farm Team Schedule</a> ]
[ <a href="OTHL-PRE-FarmTeamStats.php#Heat">Farm Team Stats</a> ]
[ <a href="OTHL-PRE-FarmTeamStatsVS.php#Heat">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Heat');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Heat" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Unknown Player           Brad Malone              Mike Hardman             40     1   2  2  
 2 David Gustafsson         Vitaly Abramov           Mathieu Olivier          30     1   2  2  
 3 Nick Merkley             Tyrell Goulbourne        Reese Johnson            20     1   2  2  
 4 Unknown Player           Brad Malone              David Gustafsson         10     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Travis Dermott           Steven Santini                                    40     1   2  2  
 2 Jake Bean                Zach Trotman                                      30     1   2  2  
 3 Logan Stanley            Samuel Morin                                      20     1   2  2  
 4 Rob O'Gara               Blake Hillman                                     10     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Unknown Player           Brad Malone              Mike Hardman             60     1   2  2  
 2 David Gustafsson         Vitaly Abramov           Mathieu Olivier          40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Travis Dermott           Steven Santini                                    60     1   2  2  
 2 Jake Bean                Zach Trotman                                      40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Unknown Player           Brad Malone              60     1   2  2  
 2 David Gustafsson         Mike Hardman             40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Travis Dermott           Steven Santini           60     1   2  2  
 2 Jake Bean                Zach Trotman             40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Unknown Player                                    60     1   2  2  
 2 Brad Malone                                       40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Travis Dermott           Steven Santini           60     1   2  2  
 2 Jake Bean                Zach Trotman             40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Unknown Player           Brad Malone              60     1   2  2  
 2 David Gustafsson         Mike Hardman             40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Travis Dermott           Steven Santini           60     1   2  2  
 2 Jake Bean                Zach Trotman             40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Unknown Player           Brad Malone              Mike Hardman             Travis Dermott           Steven Santini           

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Unknown Player           Brad Malone              Mike Hardman             Travis Dermott           Steven Santini           

<b>Goaltenders</b>
Starting : Evan Cormier             
Backup : Unknown Goalie           

<b>Extra Forwards</b>
Normal : Nick Merkley, Reese Johnson, Tyrell Goulbourne - PP : Nick Merkley, Reese Johnson - PK : Tyrell Goulbourne
<b>Extra Defensemen</b>
Normal : Logan Stanley, Samuel Morin, Rob O'Gara - PP : Logan Stanley - PK : Samuel Morin, Rob O'Gara
<b>Penalty Shots</b>
Jake Bean, Brad Malone, David Gustafsson, Mike Hardman, Mathieu Olivier
<b>Custom OT Lines Forwards</b>
Unknown Player, Brad Malone, David Gustafsson, Mike Hardman, Mathieu Olivier, Vitaly Abramov, Nick Merkley, Reese Johnson, Tyrell Goulbourne, Jake Bean
<b>Custom OT Lines Defensemen</b>
Travis Dermott, Steven Santini, Jake Bean, Zach Trotman, Logan Stanley

<b>Scratches</b>
None
</pre></div>
<h1 class="TeamLineFarm_LVP"><a id="Phantoms">Phantoms</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=22">Flyers Page</a> ]
[ <a href="OTHL-PRE-ProTeamRoster.php#Flyers">Pro Team Roster</a> ]
[ <a href="OTHL-PRE-FarmTeamScoring.php#Phantoms">Farm Team Scoring</a> ]
[ <a href="OTHL-PRE-FarmTeamLines.php#Phantoms">Farm Team Lines</a> ]
[ <a href="OTHL-PRE-FarmTeamSchedule.php#Phantoms">Farm Team Schedule</a> ]
[ <a href="OTHL-PRE-FarmTeamStats.php#Phantoms">Farm Team Stats</a> ]
[ <a href="OTHL-PRE-FarmTeamStatsVS.php#Phantoms">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Phantoms');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Phantoms" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           Unknown Player           40     1   2  2  
 2 Unknown Player           Unknown Player           Brandon Duhaime          30     1   2  2  
 3 Mason Shaw               Unknown Player           Josiah Didier            20     1   2  2  
 4 Unknown Player           Unknown Player           Unknown Player           10     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Unknown Player           Cameron Gaunce                                    40     1   2  2  
 2 Unknown Player           Brandon Manning                                   30     1   2  2  
 3 Unknown Player           Unknown Player                                    20     1   2  2  
 4 Josiah Didier            Unknown Player                                    10     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           Unknown Player           60     1   2  2  
 2 Unknown Player           Unknown Player           Brandon Duhaime          40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Unknown Player           Cameron Gaunce                                    60     1   2  2  
 2 Unknown Player           Brandon Manning                                   40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           60     1   2  2  
 2 Unknown Player           Unknown Player           40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Unknown Player           Cameron Gaunce           60     1   2  2  
 2 Unknown Player           Brandon Manning          40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Unknown Player                                    60     1   2  2  
 2 Unknown Player                                    40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Unknown Player           Cameron Gaunce           60     1   2  2  
 2 Unknown Player           Brandon Manning          40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           60     1   2  2  
 2 Unknown Player           Unknown Player           40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Unknown Player           Cameron Gaunce           60     1   2  2  
 2 Unknown Player           Brandon Manning          40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Unknown Player           Unknown Player           Unknown Player           Unknown Player           Cameron Gaunce           

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Unknown Player           Unknown Player           Unknown Player           Unknown Player           Cameron Gaunce           

<b>Goaltenders</b>
Starting : Michael Hutchinson       
Backup : Unknown Goalie           

<b>Extra Forwards</b>
Normal : Mason Shaw, Unknown Player, Unknown Player - PP : Mason Shaw, Unknown Player - PK : Unknown Player
<b>Extra Defensemen</b>
Normal : Unknown Player, Unknown Player, Josiah Didier - PP : Unknown Player - PK : Unknown Player, Josiah Didier
<b>Penalty Shots</b>
Unknown Player, Unknown Player, Unknown Player, Unknown Player, Unknown Player
<b>Custom OT Lines Forwards</b>
Unknown Player, Unknown Player, Unknown Player, Unknown Player, Unknown Player, Brandon Duhaime, Mason Shaw, Unknown Player, Unknown Player, Unknown Player
<b>Custom OT Lines Defensemen</b>
Unknown Player, Cameron Gaunce, Unknown Player, Brandon Manning, Unknown Player

<b>Scratches</b>
None
</pre></div>
<h1 class="TeamLineFarm_CHI"><a id="Wolves">Wolves</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=31">Golden Knights Page</a> ]
[ <a href="OTHL-PRE-ProTeamRoster.php#GoldenKnights">Pro Team Roster</a> ]
[ <a href="OTHL-PRE-FarmTeamScoring.php#Wolves">Farm Team Scoring</a> ]
[ <a href="OTHL-PRE-FarmTeamLines.php#Wolves">Farm Team Lines</a> ]
[ <a href="OTHL-PRE-FarmTeamSchedule.php#Wolves">Farm Team Schedule</a> ]
[ <a href="OTHL-PRE-FarmTeamStats.php#Wolves">Farm Team Stats</a> ]
[ <a href="OTHL-PRE-FarmTeamStatsVS.php#Wolves">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Wolves');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Wolves" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Nolan Patrick            Dominic Turgeon          Nick Baptiste            40     1   2  2  
 2 Morgan Geekie            Liam Foudy               Vitaly Kravtsov          30     1   2  2  
 3 Unknown Player           Unknown Player           Unknown Player           20     1   2  2  
 4 Nolan Patrick            Nick Baptiste            Dominic Turgeon          10     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Gustav Lindstrom         Jamie Drysdale                                    40     1   2  2  
 2 Juuso Valimaki           Pierre-Olivier Joseph                             30     1   2  2  
 3 Josh Brook               Unknown Player                                    20     1   2  2  
 4 Gustav Lindstrom         Jamie Drysdale                                    10     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Nolan Patrick            Dominic Turgeon          Nick Baptiste            60     1   2  2  
 2 Morgan Geekie            Liam Foudy               Vitaly Kravtsov          40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Gustav Lindstrom         Jamie Drysdale                                    60     1   2  2  
 2 Juuso Valimaki           Pierre-Olivier Joseph                             40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Nolan Patrick            Nick Baptiste            60     1   2  2  
 2 Dominic Turgeon          Morgan Geekie            40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Gustav Lindstrom         Jamie Drysdale           60     1   2  2  
 2 Juuso Valimaki           Pierre-Olivier Joseph    40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Nolan Patrick                                     60     1   2  2  
 2 Nick Baptiste                                     40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Gustav Lindstrom         Jamie Drysdale           60     1   2  2  
 2 Juuso Valimaki           Pierre-Olivier Joseph    40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Nolan Patrick            Nick Baptiste            60     1   2  2  
 2 Dominic Turgeon          Morgan Geekie            40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Gustav Lindstrom         Jamie Drysdale           60     1   2  2  
 2 Juuso Valimaki           Pierre-Olivier Joseph    40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Nolan Patrick            Dominic Turgeon          Nick Baptiste            Gustav Lindstrom         Jamie Drysdale           

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Nolan Patrick            Dominic Turgeon          Nick Baptiste            Gustav Lindstrom         Jamie Drysdale           

<b>Goaltenders</b>
Starting : Adam Werner              
Backup : Unknown Goalie           

<b>Extra Forwards</b>
Normal : Liam Foudy, Vitaly Kravtsov, Morgan Geekie - PP : Liam Foudy, Vitaly Kravtsov - PK : Morgan Geekie
<b>Extra Defensemen</b>
Normal : Josh Brook, Juuso Valimaki, Pierre-Olivier Joseph - PP : Josh Brook - PK : Juuso Valimaki, Pierre-Olivier Joseph
<b>Penalty Shots</b>
Nolan Patrick, Nick Baptiste, Dominic Turgeon, Morgan Geekie, Liam Foudy
<b>Custom OT Lines Forwards</b>
Nolan Patrick, Nick Baptiste, Dominic Turgeon, Morgan Geekie, Liam Foudy, Vitaly Kravtsov, Unknown Player, Unknown Player, Unknown Player, Unknown Player
<b>Custom OT Lines Defensemen</b>
Gustav Lindstrom, Jamie Drysdale, Juuso Valimaki, Pierre-Olivier Joseph, Josh Brook

<b>Scratches</b>
None
</pre></div>
<h1 class="TeamLineFarm_CHR"><a id="Checkers">Checkers</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=6">Hurricanes Page</a> ]
[ <a href="OTHL-PRE-ProTeamRoster.php#Hurricanes">Pro Team Roster</a> ]
[ <a href="OTHL-PRE-FarmTeamScoring.php#Checkers">Farm Team Scoring</a> ]
[ <a href="OTHL-PRE-FarmTeamLines.php#Checkers">Farm Team Lines</a> ]
[ <a href="OTHL-PRE-FarmTeamSchedule.php#Checkers">Farm Team Schedule</a> ]
[ <a href="OTHL-PRE-FarmTeamStats.php#Checkers">Farm Team Stats</a> ]
[ <a href="OTHL-PRE-FarmTeamStatsVS.php#Checkers">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Checkers');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Checkers" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           Kaapo Kakko              40     1   2  2  
 2 Unknown Player           Unknown Player           Unknown Player           30     1   2  2  
 3 Mitchell Stephens        Alexander Volkov         Sasha Chmelevski         20     1   2  2  
 4 Philipp Kurashev         Unknown Player           Unknown Player           10     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player                                    40     1   2  2  
 2 Unknown Player           Unknown Player                                    30     1   2  2  
 3 Philipp Kurashev         Unknown Player                                    20     1   2  2  
 4 Unknown Player           Unknown Player                                    10     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           Kaapo Kakko              60     1   2  2  
 2 Unknown Player           Unknown Player           Unknown Player           40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player                                    60     1   2  2  
 2 Unknown Player           Unknown Player                                    40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           60     1   2  2  
 2 Unknown Player           Kaapo Kakko              40     1   2  2  

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
 2 Unknown Player           Kaapo Kakko              40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           60     1   2  2  
 2 Unknown Player           Unknown Player           40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Unknown Player           Unknown Player           Kaapo Kakko              Unknown Player           Unknown Player           

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Unknown Player           Unknown Player           Kaapo Kakko              Unknown Player           Unknown Player           

<b>Goaltenders</b>
Starting : Unknown Goalie           
Backup : Unknown Goalie           

<b>Extra Forwards</b>
Normal : Unknown Player, Alexander Volkov, Mitchell Stephens - PP : Unknown Player, Alexander Volkov - PK : Mitchell Stephens
<b>Extra Defensemen</b>
Normal : Unknown Player, Unknown Player, Unknown Player - PP : Unknown Player - PK : Unknown Player, Unknown Player
<b>Penalty Shots</b>
Unknown Player, Unknown Player, Unknown Player, Kaapo Kakko, Unknown Player
<b>Custom OT Lines Forwards</b>
Unknown Player, Unknown Player, Unknown Player, Kaapo Kakko, Unknown Player, Unknown Player, Alexander Volkov, Mitchell Stephens, Philipp Kurashev, Unknown Player
<b>Custom OT Lines Defensemen</b>
Unknown Player, Unknown Player, Unknown Player, Unknown Player, Unknown Player

<b>Scratches</b>
Ty Emberson (Healthy), Will Cuylle (Healthy), Matej Pekar (Healthy), Connor Ingram (Healthy)</pre></div>
<h1 class="TeamLineFarm_BPT"><a id="SoundTigers">Sound Tigers</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=19">Islanders Page</a> ]
[ <a href="OTHL-PRE-ProTeamRoster.php#Islanders">Pro Team Roster</a> ]
[ <a href="OTHL-PRE-FarmTeamScoring.php#SoundTigers">Farm Team Scoring</a> ]
[ <a href="OTHL-PRE-FarmTeamLines.php#SoundTigers">Farm Team Lines</a> ]
[ <a href="OTHL-PRE-FarmTeamSchedule.php#SoundTigers">Farm Team Schedule</a> ]
[ <a href="OTHL-PRE-FarmTeamStats.php#SoundTigers">Farm Team Stats</a> ]
[ <a href="OTHL-PRE-FarmTeamStatsVS.php#SoundTigers">Farm Team StatsVS</a> ]
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
[ <a href="OTHL-PRE-ProTeamRoster.php#Jets">Pro Team Roster</a> ]
[ <a href="OTHL-PRE-FarmTeamScoring.php#Moose">Farm Team Scoring</a> ]
[ <a href="OTHL-PRE-FarmTeamLines.php#Moose">Farm Team Lines</a> ]
[ <a href="OTHL-PRE-FarmTeamSchedule.php#Moose">Farm Team Schedule</a> ]
[ <a href="OTHL-PRE-FarmTeamStats.php#Moose">Farm Team Stats</a> ]
[ <a href="OTHL-PRE-FarmTeamStatsVS.php#Moose">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Moose');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Moose" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Eetu Luostarinen         Unknown Player           Clark Bishop             40     1   2  2  
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
 2 Eetu Luostarinen         Unknown Player           Unknown Player           40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player                                    60     1   2  2  
 2 Olli Juolevi             Unknown Player                                    40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Eetu Luostarinen         Unknown Player           60     1   2  2  
 2 Joona Koppanen           Unknown Player           40     1   2  2  

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
 2 Joona Koppanen           Unknown Player           40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           60     1   2  2  
 2 Olli Juolevi             Unknown Player           40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Eetu Luostarinen         Unknown Player           Unknown Player           Unknown Player           Unknown Player           

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Eetu Luostarinen         Unknown Player           Unknown Player           Juuso Riikola            Unknown Player           

<b>Goaltenders</b>
Starting : Unknown Goalie           
Backup : Jeremy Helvig            

<b>Extra Forwards</b>
Normal : Rasmus Kupari, Joona Koppanen, Unknown Player - PP : Rasmus Kupari, Joona Koppanen - PK : Unknown Player
<b>Extra Defensemen</b>
Normal : Unknown Player, Olli Juolevi, Guillaume Brisebois - PP : Unknown Player - PK : Olli Juolevi, Guillaume Brisebois
<b>Penalty Shots</b>
Eeli Tolvanen, Eetu Luostarinen, Unknown Player, Unknown Player, Joona Koppanen
<b>Custom OT Lines Forwards</b>
Unknown Player, Taylor Raddysh, Unknown Player, Joona Koppanen, Eetu Luostarinen, Eeli Tolvanen, Rasmus Kupari, Jansen Harkins, Lukas Vejdemo, Clark Bishop
<b>Custom OT Lines Defensemen</b>
Guillaume Brisebois, Unknown Player, Olli Juolevi, Unknown Player, Unknown Player

<b>Scratches</b>
None
</pre></div>
<h1 class="TeamLineFarm_ONT"><a id="Reign">Reign</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=14">Kings Page</a> ]
[ <a href="OTHL-PRE-ProTeamRoster.php#Kings">Pro Team Roster</a> ]
[ <a href="OTHL-PRE-FarmTeamScoring.php#Reign">Farm Team Scoring</a> ]
[ <a href="OTHL-PRE-FarmTeamLines.php#Reign">Farm Team Lines</a> ]
[ <a href="OTHL-PRE-FarmTeamSchedule.php#Reign">Farm Team Schedule</a> ]
[ <a href="OTHL-PRE-FarmTeamStats.php#Reign">Farm Team Stats</a> ]
[ <a href="OTHL-PRE-FarmTeamStatsVS.php#Reign">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Reign');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Reign" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Mikhail Maltsev          Morgan Klimchuk          Tomas Jurco              40     1   2  2  
 2 Ryan Kujawinski          Unknown Player           Unknown Player           30     1   2  2  
 3 Unknown Player           Unknown Player           Unknown Player           20     1   2  2  
 4 Mikhail Maltsev          Morgan Klimchuk          Tomas Jurco              10     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Tobias Bjornfot          Andreas Borgman                                   40     1   2  2  
 2 Austin Strand            Calle Rosen                                       30     1   2  2  
 3 Christian Wolanin        Timothy Liljegren                                 20     1   2  2  
 4 Tobias Bjornfot          Andreas Borgman                                   10     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Mikhail Maltsev          Morgan Klimchuk          Tomas Jurco              60     1   2  2  
 2 Ryan Kujawinski          Unknown Player           Unknown Player           40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Tobias Bjornfot          Andreas Borgman                                   60     1   2  2  
 2 Austin Strand            Calle Rosen                                       40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Mikhail Maltsev          Morgan Klimchuk          60     1   2  2  
 2 Tomas Jurco              Ryan Kujawinski          40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Tobias Bjornfot          Andreas Borgman          60     1   2  2  
 2 Austin Strand            Calle Rosen              40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Mikhail Maltsev                                   60     1   2  2  
 2 Morgan Klimchuk                                   40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Tobias Bjornfot          Andreas Borgman          60     1   2  2  
 2 Austin Strand            Calle Rosen              40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Mikhail Maltsev          Morgan Klimchuk          60     1   2  2  
 2 Tomas Jurco              Ryan Kujawinski          40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Tobias Bjornfot          Andreas Borgman          60     1   2  2  
 2 Austin Strand            Calle Rosen              40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Mikhail Maltsev          Morgan Klimchuk          Tomas Jurco              Tobias Bjornfot          Andreas Borgman          

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Mikhail Maltsev          Morgan Klimchuk          Tomas Jurco              Tobias Bjornfot          Andreas Borgman          

<b>Goaltenders</b>
Starting : Antoine Bibeau           
Backup : Josef Korenar            

<b>Extra Forwards</b>
Normal : Ryan Kujawinski, Tomas Jurco, Mikhail Maltsev - PP : Ryan Kujawinski, Tomas Jurco - PK : Mikhail Maltsev
<b>Extra Defensemen</b>
Normal : Christian Wolanin, Timothy Liljegren, Austin Strand - PP : Christian Wolanin - PK : Timothy Liljegren, Austin Strand
<b>Penalty Shots</b>
Mikhail Maltsev, Morgan Klimchuk, Tomas Jurco, Ryan Kujawinski, Unknown Player
<b>Custom OT Lines Forwards</b>
Mikhail Maltsev, Morgan Klimchuk, Tomas Jurco, Ryan Kujawinski, Unknown Player, Unknown Player, Unknown Player, Unknown Player, Unknown Player, Unknown Player
<b>Custom OT Lines Defensemen</b>
Tobias Bjornfot, Andreas Borgman, Austin Strand, Calle Rosen, Christian Wolanin

<b>Scratches</b>
None
</pre></div>
<h1 class="TeamLineFarm_PSM"><a id="Mariners">Mariners</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=32">Kraken Page</a> ]
[ <a href="OTHL-PRE-ProTeamRoster.php#Kraken">Pro Team Roster</a> ]
[ <a href="OTHL-PRE-FarmTeamScoring.php#Mariners">Farm Team Scoring</a> ]
[ <a href="OTHL-PRE-FarmTeamLines.php#Mariners">Farm Team Lines</a> ]
[ <a href="OTHL-PRE-FarmTeamSchedule.php#Mariners">Farm Team Schedule</a> ]
[ <a href="OTHL-PRE-FarmTeamStats.php#Mariners">Farm Team Stats</a> ]
[ <a href="OTHL-PRE-FarmTeamStatsVS.php#Mariners">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Mariners');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Mariners" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Ryan Donato              Jesper Boqvist           Kole Lind                40     1   2  2  
 2 Yakov Trenin             Ryan Lomberg             Joseph Cramarossa        30     1   2  2  
 3 Logan Brown              Unknown Player           Unknown Player           20     1   2  2  
 4 Ryan Donato              Jesper Boqvist           Yakov Trenin             10     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Dean Kukan               Unknown Player                                    40     1   2  2  
 2 Nate Prosser             Unknown Player                                    30     1   2  2  
 3 Unknown Player           Unknown Player                                    20     1   2  2  
 4 Dean Kukan               Unknown Player                                    10     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Ryan Donato              Jesper Boqvist           Kole Lind                60     1   2  2  
 2 Yakov Trenin             Ryan Lomberg             Joseph Cramarossa        40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Dean Kukan               Unknown Player                                    60     1   2  2  
 2 Nate Prosser             Unknown Player                                    40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Ryan Donato              Jesper Boqvist           60     1   2  2  
 2 Yakov Trenin             Kole Lind                40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Dean Kukan               Unknown Player           60     1   2  2  
 2 Nate Prosser             Unknown Player           40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Ryan Donato                                       60     1   2  2  
 2 Jesper Boqvist                                    40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Dean Kukan               Unknown Player           60     1   2  2  
 2 Nate Prosser             Unknown Player           40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Ryan Donato              Jesper Boqvist           60     1   2  2  
 2 Yakov Trenin             Kole Lind                40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Dean Kukan               Unknown Player           60     1   2  2  
 2 Nate Prosser             Unknown Player           40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Ryan Donato              Jesper Boqvist           Kole Lind                Dean Kukan               Unknown Player           

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Ryan Donato              Jesper Boqvist           Kole Lind                Dean Kukan               Unknown Player           

<b>Goaltenders</b>
Starting : Unknown Goalie           
Backup : Unknown Goalie           

<b>Extra Forwards</b>
Normal : Logan Brown, Ryan Lomberg, Joseph Cramarossa - PP : Logan Brown, Ryan Lomberg - PK : Joseph Cramarossa
<b>Extra Defensemen</b>
Normal : Nate Prosser, Dean Kukan, Unknown Player - PP : Nate Prosser - PK : Dean Kukan, Unknown Player
<b>Penalty Shots</b>
Ryan Donato, Jesper Boqvist, Yakov Trenin, Kole Lind, Logan Brown
<b>Custom OT Lines Forwards</b>
Ryan Donato, Jesper Boqvist, Yakov Trenin, Kole Lind, Logan Brown, Ryan Lomberg, Joseph Cramarossa, Unknown Player, Unknown Player, Unknown Player
<b>Custom OT Lines Defensemen</b>
Dean Kukan, Unknown Player, Nate Prosser, Unknown Player, Unknown Player

<b>Scratches</b>
Spencer Martin (Healthy)</pre></div>
<h1 class="TeamLineFarm_SYR"><a id="Crunch">Crunch</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=27">Lightning Page</a> ]
[ <a href="OTHL-PRE-ProTeamRoster.php#Lightning">Pro Team Roster</a> ]
[ <a href="OTHL-PRE-FarmTeamScoring.php#Crunch">Farm Team Scoring</a> ]
[ <a href="OTHL-PRE-FarmTeamLines.php#Crunch">Farm Team Lines</a> ]
[ <a href="OTHL-PRE-FarmTeamSchedule.php#Crunch">Farm Team Schedule</a> ]
[ <a href="OTHL-PRE-FarmTeamStats.php#Crunch">Farm Team Stats</a> ]
[ <a href="OTHL-PRE-FarmTeamStatsVS.php#Crunch">Farm Team StatsVS</a> ]
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
 2 Unknown Player           Unknown Player                                    30     1   2  2  
 3 Unknown Player           Unknown Player                                    20     1   2  2  
 4 Unknown Player           Colton White                                      10     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           Unknown Player           60     1   2  2  
 2 Unknown Player           Unknown Player           Unknown Player           40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Unknown Player           Colton White                                      60     1   2  2  
 2 Unknown Player           Unknown Player                                    40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           60     1   2  2  
 2 Unknown Player           Jan Drozg                40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Unknown Player           Colton White             60     1   2  2  
 2 Unknown Player           Unknown Player           40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Unknown Player                                    60     1   2  2  
 2 Unknown Player                                    40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Unknown Player           Colton White             60     1   2  2  
 2 Unknown Player           Unknown Player           40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           60     1   2  2  
 2 Unknown Player           Jan Drozg                40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Unknown Player           Colton White             60     1   2  2  
 2 Unknown Player           Unknown Player           40     1   2  2  

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
Normal : Unknown Player, Unknown Player, Unknown Player - PP : Unknown Player - PK : Unknown Player, Unknown Player
<b>Penalty Shots</b>
Unknown Player, Unknown Player, Unknown Player, Jan Drozg, Unknown Player
<b>Custom OT Lines Forwards</b>
Unknown Player, Unknown Player, Unknown Player, Jan Drozg, Unknown Player, Unknown Player, Unknown Player, Unknown Player, Unknown Player, Unknown Player
<b>Custom OT Lines Defensemen</b>
Unknown Player, Colton White, Unknown Player, Unknown Player, Unknown Player

<b>Scratches</b>
None
</pre></div>
<h1 class="TeamLineFarm_TOR"><a id="Marlies">Marlies</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=28">Maple Leafs Page</a> ]
[ <a href="OTHL-PRE-ProTeamRoster.php#MapleLeafs">Pro Team Roster</a> ]
[ <a href="OTHL-PRE-FarmTeamScoring.php#Marlies">Farm Team Scoring</a> ]
[ <a href="OTHL-PRE-FarmTeamLines.php#Marlies">Farm Team Lines</a> ]
[ <a href="OTHL-PRE-FarmTeamSchedule.php#Marlies">Farm Team Schedule</a> ]
[ <a href="OTHL-PRE-FarmTeamStats.php#Marlies">Farm Team Stats</a> ]
[ <a href="OTHL-PRE-FarmTeamStatsVS.php#Marlies">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Marlies');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Marlies" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Barrett Hayton           Gabriel Bourque          Andrew Ladd              40     0   1  4  
 2 Tyler Gaudet             Adam Mascherin           Martin Kaut              30     1   2  2  
 3 Steven Lorentz           Andy Andreoff            Liam O'Brien             20     1   2  2  
 4 Jack Studnicka           Tyler Gaudet             Justin Dowling           10     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Bowen Byram              Keaton Middleton                                  35     1   3  1  
 2 Oleg Sosunov             Jeremy Davies                                     35     1   3  1  
 3 Joseph Cecconi           Brinson Pasichnuk                                 30     1   3  1  
 4 Bowen Byram              Keaton Middleton                                  0      1   3  1  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Barrett Hayton           Gabriel Bourque          Andrew Ladd              60     0   0  5  
 2 Tyler Gaudet             Adam Mascherin           Gabriel Bourque          40     0   1  4  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Bowen Byram              Keaton Middleton                                  60     0   1  4  
 2 Oleg Sosunov             Jeremy Davies                                     40     0   1  4  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Barrett Hayton           Gabriel Bourque          60     1   2  2  
 2 Tyler Gaudet             Adam Mascherin           40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Bowen Byram              Keaton Middleton         60     1   2  2  
 2 Oleg Sosunov             Jeremy Davies            40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Barrett Hayton                                    60     1   2  2  
 2 Tyler Gaudet                                      40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Bowen Byram              Keaton Middleton         60     1   2  2  
 2 Oleg Sosunov             Jeremy Davies            40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Barrett Hayton           Gabriel Bourque          60     1   2  2  
 2 Tyler Gaudet             Adam Mascherin           40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Bowen Byram              Keaton Middleton         60     1   2  2  
 2 Oleg Sosunov             Jeremy Davies            40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Barrett Hayton           Gabriel Bourque          Andrew Ladd              Bowen Byram              Keaton Middleton         

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Barrett Hayton           Gabriel Bourque          Andrew Ladd              Bowen Byram              Keaton Middleton         

<b>Goaltenders</b>
Starting : Calvin Pickard           
Backup : Dylan Wells              

<b>Extra Forwards</b>
Normal : Martin Kaut, Andy Andreoff, Tyler Gaudet - PP : Martin Kaut, Andy Andreoff - PK : Martin Kaut
<b>Extra Defensemen</b>
Normal : Jeremy Davies, Joseph Cecconi, Brinson Pasichnuk - PP : Jeremy Davies - PK : Jeremy Davies, Joseph Cecconi
<b>Penalty Shots</b>
Andrew Ladd, Barrett Hayton, Gabriel Bourque, Adam Mascherin, Martin Kaut
<b>Custom OT Lines Forwards</b>
Andrew Ladd, Barrett Hayton, Gabriel Bourque, Adam Mascherin, Martin Kaut, Andy Andreoff, Tyler Gaudet, Justin Dowling, Jack Studnicka, Steven Lorentz
<b>Custom OT Lines Defensemen</b>
Bowen Byram, Keaton Middleton, Oleg Sosunov, Jeremy Davies, Joseph Cecconi

<b>Scratches</b>
Jonathan Davidsson (Healthy), Brandon Crawley (Healthy), Stepan Falkovsky (Healthy), Sean Day (Healthy), Spencer Smallman (Healthy)
Simon Holmstrom (Healthy)</pre></div>
<h1 class="TeamLineFarm_BKR"><a id="Condors">Condors</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=12">Oilers Page</a> ]
[ <a href="OTHL-PRE-ProTeamRoster.php#Oilers">Pro Team Roster</a> ]
[ <a href="OTHL-PRE-FarmTeamScoring.php#Condors">Farm Team Scoring</a> ]
[ <a href="OTHL-PRE-FarmTeamLines.php#Condors">Farm Team Lines</a> ]
[ <a href="OTHL-PRE-FarmTeamSchedule.php#Condors">Farm Team Schedule</a> ]
[ <a href="OTHL-PRE-FarmTeamStats.php#Condors">Farm Team Stats</a> ]
[ <a href="OTHL-PRE-FarmTeamStatsVS.php#Condors">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Condors');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Condors" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           Unknown Player           40     1   2  2  
 2 Unknown Player           Rhett Gardner            Unknown Player           30     1   2  2  
 3 Ty Dellandrea            Givani Smith             Dominic Toninato         20     1   2  2  
 4 Max Willman              Unknown Player           Joey Anderson            10     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player                                    40     1   2  2  
 2 Kevin Connauton          Brian Lashoff                                     30     1   2  2  
 3 Dennis Gilbert           Joey Anderson                                     20     1   2  2  
 4 Unknown Player           Unknown Player                                    10     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           Unknown Player           60     1   2  2  
 2 Unknown Player           Rhett Gardner            Unknown Player           40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player                                    60     1   2  2  
 2 Kevin Connauton          Brian Lashoff                                     40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           60     1   2  2  
 2 Unknown Player           Ty Dellandrea            40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           60     1   2  2  
 2 Kevin Connauton          Brian Lashoff            40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Unknown Player                                    60     1   2  2  
 2 Unknown Player                                    40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           60     1   2  2  
 2 Kevin Connauton          Brian Lashoff            40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           60     1   2  2  
 2 Unknown Player           Ty Dellandrea            40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           60     1   2  2  
 2 Kevin Connauton          Brian Lashoff            40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Unknown Player           Unknown Player           Unknown Player           Unknown Player           Unknown Player           

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Unknown Player           Unknown Player           Unknown Player           Unknown Player           Unknown Player           

<b>Goaltenders</b>
Starting : Zane McIntyre            
Backup : Adam Huska               

<b>Extra Forwards</b>
Normal : Marian Studenic, Givani Smith, Dominic Toninato - PP : Marian Studenic, Givani Smith - PK : Dominic Toninato
<b>Extra Defensemen</b>
Normal : Dennis Gilbert, Kevin Connauton, Brian Lashoff - PP : Dennis Gilbert - PK : Kevin Connauton, Brian Lashoff
<b>Penalty Shots</b>
Unknown Player, Unknown Player, Unknown Player, Ty Dellandrea, Unknown Player
<b>Custom OT Lines Forwards</b>
Unknown Player, Unknown Player, Unknown Player, Ty Dellandrea, Unknown Player, Unknown Player, Rhett Gardner, Givani Smith, Dominic Toninato, Joey Anderson
<b>Custom OT Lines Defensemen</b>
Unknown Player, Unknown Player, Kevin Connauton, Brian Lashoff, Dennis Gilbert

<b>Scratches</b>
Christopher Brown (Healthy), Buddy Robinson (Healthy)</pre></div>
<h1 class="TeamLineFarm_SPR"><a id="Thunderbirds">Thunderbirds</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=13">Panthers Page</a> ]
[ <a href="OTHL-PRE-ProTeamRoster.php#Panthers">Pro Team Roster</a> ]
[ <a href="OTHL-PRE-FarmTeamScoring.php#Thunderbirds">Farm Team Scoring</a> ]
[ <a href="OTHL-PRE-FarmTeamLines.php#Thunderbirds">Farm Team Lines</a> ]
[ <a href="OTHL-PRE-FarmTeamSchedule.php#Thunderbirds">Farm Team Schedule</a> ]
[ <a href="OTHL-PRE-FarmTeamStats.php#Thunderbirds">Farm Team Stats</a> ]
[ <a href="OTHL-PRE-FarmTeamStatsVS.php#Thunderbirds">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Thunderbirds');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Thunderbirds" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           Unknown Player           40     0   1  4  
 2 Luke Johnson             Unknown Player           Unknown Player           30     0   1  4  
 3 Michael McCarron         Unknown Player           Unknown Player           20     1   2  2  
 4 Unknown Player           Unknown Player           Unknown Player           10     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Parker Wotherspoon       Unknown Player                                    40     1   2  2  
 2 Unknown Player           Tyler Wotherspoon                                 30     1   2  2  
 3 Lucas Carlsson           Dan Renouf                                        20     1   2  2  
 4 Unknown Player           Unknown Player                                    10     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           Unknown Player           60     0   0  5  
 2 Luke Johnson             Unknown Player           Unknown Player           40     0   0  5  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Parker Wotherspoon       Unknown Player                                    60     1   2  2  
 2 Unknown Player           Tyler Wotherspoon                                 40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Luke Johnson             Unknown Player           60     1   2  2  
 2 Michael McCarron         Unknown Player           40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Parker Wotherspoon       Unknown Player           60     1   2  2  
 2 Unknown Player           Tyler Wotherspoon        40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Luke Johnson                                      60     1   2  2  
 2 Michael McCarron                                  40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Parker Wotherspoon       Unknown Player           60     1   2  2  
 2 Unknown Player           Tyler Wotherspoon        40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Luke Johnson             Unknown Player           60     1   2  2  
 2 Unknown Player           Unknown Player           40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Parker Wotherspoon       Unknown Player           60     1   2  2  
 2 Unknown Player           Tyler Wotherspoon        40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Unknown Player           Unknown Player           Unknown Player           Parker Wotherspoon       Unknown Player           

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Luke Johnson             Unknown Player           Michael McCarron         Parker Wotherspoon       Unknown Player           

<b>Goaltenders</b>
Starting : Unknown Goalie           
Backup : Unknown Goalie           

<b>Extra Forwards</b>
Normal : Luke Johnson, Unknown Player, Michael McCarron - PP : Luke Johnson, Unknown Player - PK : Michael McCarron
<b>Extra Defensemen</b>
Normal : Lucas Carlsson, Dan Renouf, Unknown Player - PP : Lucas Carlsson - PK : Dan Renouf, Unknown Player
<b>Penalty Shots</b>
Unknown Player, Unknown Player, Unknown Player, Unknown Player, Unknown Player
<b>Custom OT Lines Forwards</b>
Unknown Player, Unknown Player, Unknown Player, Unknown Player, Unknown Player, Luke Johnson, Unknown Player, Unknown Player, Michael McCarron, Unknown Player
<b>Custom OT Lines Defensemen</b>
Parker Wotherspoon, Unknown Player, Unknown Player, Tyler Wotherspoon, Lucas Carlsson

<b>Scratches</b>
None
</pre></div>
<h1 class="TeamLineFarm_WBS"><a id="Penguins">Penguins</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=24">Penguins Page</a> ]
[ <a href="OTHL-PRE-ProTeamRoster.php#Penguins">Pro Team Roster</a> ]
[ <a href="OTHL-PRE-FarmTeamScoring.php#Penguins">Farm Team Scoring</a> ]
[ <a href="OTHL-PRE-FarmTeamLines.php#Penguins">Farm Team Lines</a> ]
[ <a href="OTHL-PRE-FarmTeamSchedule.php#Penguins">Farm Team Schedule</a> ]
[ <a href="OTHL-PRE-FarmTeamStats.php#Penguins">Farm Team Stats</a> ]
[ <a href="OTHL-PRE-FarmTeamStatsVS.php#Penguins">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Penguins');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Penguins" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           Micheal Ferland          40     1   1  3  
 2 Unknown Player           Unknown Player           Alexandre Fortin         30     0   2  3  
 3 Unknown Player           Unknown Player           Gabriel Gagne            20     1   2  2  
 4 Unknown Player           Unknown Player           Unknown Player           10     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Aaron Ness               Unknown Player                                    40     1   2  2  
 2 Unknown Player           Unknown Player                                    30     1   2  2  
 3 Unknown Player           Unknown Player                                    20     1   2  2  
 4 Aaron Ness               Unknown Player                                    10     1   1  3  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           Unknown Player           60     0   1  4  
 2 Unknown Player           Alexandre Fortin         Gabriel Gagne            40     1   1  3  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Unknown Player           Aaron Ness                                        60     0   1  3  
 2 Unknown Player           Unknown Player                                    40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Unknown Player           Alexandre Fortin         60     1   2  2  
 2 Unknown Player           Unknown Player           40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Unknown Player           Aaron Ness               60     1   2  2  
 2 Unknown Player           Unknown Player           40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Unknown Player                                    60     1   2  2  
 2 Gabriel Gagne                                     40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Aaron Ness               Unknown Player           60     1   2  2  
 2 Unknown Player           Unknown Player           40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Unknown Player           Alexandre Fortin         60     1   2  2  
 2 Unknown Player           Gabriel Gagne            40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Unknown Player           Aaron Ness               60     1   2  2  
 2 Unknown Player           Unknown Player           40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Unknown Player           Unknown Player           Gabriel Gagne            Aaron Ness               Unknown Player           

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Unknown Player           Unknown Player           Gabriel Gagne            Aaron Ness               Unknown Player           

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
Unknown Player, Unknown Player, Micheal Ferland, Unknown Player, Unknown Player, Unknown Player, Alexandre Fortin, Gabriel Gagne, Unknown Player, Unknown Player
<b>Custom OT Lines Defensemen</b>
Unknown Player, Aaron Ness, Unknown Player, Unknown Player, Unknown Player

<b>Scratches</b>
None
</pre></div>
<h1 class="TeamLineFarm_MIL"><a id="Admirals">Admirals</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=17">Predators Page</a> ]
[ <a href="OTHL-PRE-ProTeamRoster.php#Predators">Pro Team Roster</a> ]
[ <a href="OTHL-PRE-FarmTeamScoring.php#Admirals">Farm Team Scoring</a> ]
[ <a href="OTHL-PRE-FarmTeamLines.php#Admirals">Farm Team Lines</a> ]
[ <a href="OTHL-PRE-FarmTeamSchedule.php#Admirals">Farm Team Schedule</a> ]
[ <a href="OTHL-PRE-FarmTeamStats.php#Admirals">Farm Team Stats</a> ]
[ <a href="OTHL-PRE-FarmTeamStatsVS.php#Admirals">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Admirals');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Admirals" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           Unknown Player           40     1   2  2  
 2 Greg Carey               Stefan Matteau           Austin Poganski          30     1   2  2  
 3 J.C. Beaudin             Brandon Gignac           Lean Bergmann            20     1   2  2  
 4 Morgan Frost             Nick Lappin              Unknown Player           10     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Dennis Robertson         Stuart Percy                                      40     1   2  2  
 2 Unknown Player           Aaron Harstad                                     30     1   2  2  
 3 Morgan Frost             Adam Musil                                        20     1   2  2  
 4 Dennis Robertson         Stuart Percy                                      10     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           Unknown Player           60     1   2  2  
 2 Greg Carey               Stefan Matteau           Austin Poganski          40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Dennis Robertson         Stuart Percy                                      60     1   2  2  
 2 Unknown Player           Aaron Harstad                                     40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           60     1   2  2  
 2 Unknown Player           Greg Carey               40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Dennis Robertson         Stuart Percy             60     1   2  2  
 2 Unknown Player           Aaron Harstad            40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Unknown Player                                    60     1   2  2  
 2 Unknown Player                                    40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Dennis Robertson         Stuart Percy             60     1   2  2  
 2 Unknown Player           Aaron Harstad            40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           60     1   2  2  
 2 Unknown Player           Greg Carey               40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Dennis Robertson         Stuart Percy             60     1   2  2  
 2 Unknown Player           Aaron Harstad            40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Unknown Player           Unknown Player           Unknown Player           Dennis Robertson         Stuart Percy             

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Unknown Player           Unknown Player           Unknown Player           Dennis Robertson         Stuart Percy             

<b>Goaltenders</b>
Starting : Pheonix Copley           
Backup : Joseph Woll              

<b>Extra Forwards</b>
Normal : J.C. Beaudin, Adam Musil, Brandon Gignac - PP : J.C. Beaudin, Adam Musil - PK : Brandon Gignac
<b>Extra Defensemen</b>
Normal : Unknown Player, Aaron Harstad, Dennis Robertson - PP : Unknown Player - PK : Aaron Harstad, Dennis Robertson
<b>Penalty Shots</b>
Unknown Player, Unknown Player, Unknown Player, Greg Carey, Stefan Matteau
<b>Custom OT Lines Forwards</b>
Unknown Player, Unknown Player, Unknown Player, Greg Carey, Stefan Matteau, J.C. Beaudin, Morgan Frost, Austin Poganski, Adam Musil, Brandon Gignac
<b>Custom OT Lines Defensemen</b>
Dennis Robertson, Stuart Percy, Unknown Player, Aaron Harstad, Unknown Player

<b>Scratches</b>
Julius Bergman (Healthy)</pre></div>
<h1 class="TeamLineFarm_HFD"><a id="WolfPack">Wolf Pack</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=20">Rangers Page</a> ]
[ <a href="OTHL-PRE-ProTeamRoster.php#Rangers">Pro Team Roster</a> ]
[ <a href="OTHL-PRE-FarmTeamScoring.php#WolfPack">Farm Team Scoring</a> ]
[ <a href="OTHL-PRE-FarmTeamLines.php#WolfPack">Farm Team Lines</a> ]
[ <a href="OTHL-PRE-FarmTeamSchedule.php#WolfPack">Farm Team Schedule</a> ]
[ <a href="OTHL-PRE-FarmTeamStats.php#WolfPack">Farm Team Stats</a> ]
[ <a href="OTHL-PRE-FarmTeamStatsVS.php#WolfPack">Farm Team StatsVS</a> ]
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
[ <a href="OTHL-PRE-ProTeamRoster.php#RedWings">Pro Team Roster</a> ]
[ <a href="OTHL-PRE-FarmTeamScoring.php#Griffins">Farm Team Scoring</a> ]
[ <a href="OTHL-PRE-FarmTeamLines.php#Griffins">Farm Team Lines</a> ]
[ <a href="OTHL-PRE-FarmTeamSchedule.php#Griffins">Farm Team Schedule</a> ]
[ <a href="OTHL-PRE-FarmTeamStats.php#Griffins">Farm Team Stats</a> ]
[ <a href="OTHL-PRE-FarmTeamStatsVS.php#Griffins">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Griffins');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Griffins" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           Unknown Player           40     1   2  2  
 2 Anthony Richard          Stefan Noesen            Unknown Player           30     1   2  2  
 3 Unknown Player           Axel Jonsson-Fjallby     Unknown Player           20     1   2  2  
 4 Unknown Player           Unknown Player           Stefan Noesen            10     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Josh Mahura              Jake Bischoff                                     40     1   2  2  
 2 Unknown Player           Anton Lindholm                                    30     1   2  2  
 3 Jack Dougherty           Unknown Player                                    20     1   2  2  
 4 Josh Mahura              Jake Bischoff                                     10     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           Unknown Player           60     1   2  2  
 2 Anthony Richard          Stefan Noesen            Unknown Player           40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Josh Mahura              Jake Bischoff                                     60     1   2  2  
 2 Unknown Player           Anton Lindholm                                    40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           60     1   2  2  
 2 Stefan Noesen            Unknown Player           40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Josh Mahura              Jake Bischoff            60     1   2  2  
 2 Unknown Player           Anton Lindholm           40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Unknown Player                                    60     1   2  2  
 2 Unknown Player                                    40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Josh Mahura              Jake Bischoff            60     1   2  2  
 2 Unknown Player           Anton Lindholm           40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           60     1   2  2  
 2 Stefan Noesen            Unknown Player           40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Josh Mahura              Jake Bischoff            60     1   2  2  
 2 Unknown Player           Anton Lindholm           40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Unknown Player           Unknown Player           Unknown Player           Josh Mahura              Jake Bischoff            

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Unknown Player           Unknown Player           Unknown Player           Josh Mahura              Jake Bischoff            

<b>Goaltenders</b>
Starting : Unknown Goalie           
Backup : Unknown Goalie           

<b>Extra Forwards</b>
Normal : Axel Jonsson-Fjallby, Unknown Player, Anthony Richard - PP : Axel Jonsson-Fjallby, Unknown Player - PK : Anthony Richard
<b>Extra Defensemen</b>
Normal : Jack Dougherty, Unknown Player, Anton Lindholm - PP : Jack Dougherty - PK : Unknown Player, Anton Lindholm
<b>Penalty Shots</b>
Unknown Player, Unknown Player, Stefan Noesen, Unknown Player, Unknown Player
<b>Custom OT Lines Forwards</b>
Unknown Player, Unknown Player, Stefan Noesen, Unknown Player, Unknown Player, Anthony Richard, Axel Jonsson-Fjallby, Unknown Player, Unknown Player, Unknown Player
<b>Custom OT Lines Defensemen</b>
Josh Mahura, Jake Bischoff, Unknown Player, Anton Lindholm, Jack Dougherty

<b>Scratches</b>
None
</pre></div>
<h1 class="TeamLineFarm_ROC"><a id="Americans"> Americans</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=4">Sabres Page</a> ]
[ <a href="OTHL-PRE-ProTeamRoster.php#Sabres">Pro Team Roster</a> ]
[ <a href="OTHL-PRE-FarmTeamScoring.php#Americans">Farm Team Scoring</a> ]
[ <a href="OTHL-PRE-FarmTeamLines.php#Americans">Farm Team Lines</a> ]
[ <a href="OTHL-PRE-FarmTeamSchedule.php#Americans">Farm Team Schedule</a> ]
[ <a href="OTHL-PRE-FarmTeamStats.php#Americans">Farm Team Stats</a> ]
[ <a href="OTHL-PRE-FarmTeamStatsVS.php#Americans">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Americans');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Americans" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Ryan Fitzgerald          Unknown Player           Unknown Player           40     1   2  2  
 2 Michael Amadio           Unknown Player           Laurent Dauphin          30     1   2  2  
 3 Andrew Poturalski        Remi Elie                Keegan Kolesar           20     1   2  2  
 4 Sean Malone              Mikey Eyssimont          Unknown Player           10     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Taylor Fedun             Christian Djoos                                   40     1   2  2  
 2 Andy Welinski            Tyler Lewington                                   30     1   2  2  
 3 Sean Malone              Mikey Eyssimont                                   20     1   2  2  
 4 Taylor Fedun             Christian Djoos                                   10     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Ryan Fitzgerald          Unknown Player           Unknown Player           60     1   2  2  
 2 Michael Amadio           Unknown Player           Laurent Dauphin          40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Taylor Fedun             Christian Djoos                                   60     1   2  2  
 2 Andy Welinski            Tyler Lewington                                   40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           60     1   2  2  
 2 Unknown Player           Ryan Fitzgerald          40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Taylor Fedun             Christian Djoos          60     1   2  2  
 2 Andy Welinski            Tyler Lewington          40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Unknown Player                                    60     1   2  2  
 2 Unknown Player                                    40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Taylor Fedun             Christian Djoos          60     1   2  2  
 2 Andy Welinski            Tyler Lewington          40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           60     1   2  2  
 2 Unknown Player           Ryan Fitzgerald          40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Taylor Fedun             Christian Djoos          60     1   2  2  
 2 Andy Welinski            Tyler Lewington          40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Ryan Fitzgerald          Unknown Player           Unknown Player           Taylor Fedun             Christian Djoos          

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Ryan Fitzgerald          Unknown Player           Unknown Player           Taylor Fedun             Christian Djoos          

<b>Goaltenders</b>
Starting : Ilya Samsonov            
Backup : Jonas Johansson          

<b>Extra Forwards</b>
Normal : Ross Johnston, Andrew Poturalski, Remi Elie - PP : Ross Johnston, Andrew Poturalski - PK : Remi Elie
<b>Extra Defensemen</b>
Normal : Andy Welinski, Tyler Lewington, Taylor Fedun - PP : Andy Welinski - PK : Tyler Lewington, Taylor Fedun
<b>Penalty Shots</b>
Unknown Player, Unknown Player, Unknown Player, Ryan Fitzgerald, Michael Amadio
<b>Custom OT Lines Forwards</b>
Unknown Player, Unknown Player, Unknown Player, Ryan Fitzgerald, Michael Amadio, Andrew Poturalski, Remi Elie, Laurent Dauphin, Sean Malone, Mikey Eyssimont
<b>Custom OT Lines Defensemen</b>
Taylor Fedun, Christian Djoos, Andy Welinski, Tyler Lewington, Unknown Player

<b>Scratches</b>
Jon Gillies (Healthy)</pre></div>
<h1 class="TeamLineFarm_BEL"><a id="Senators">Senators</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=21">Senators Page</a> ]
[ <a href="OTHL-PRE-ProTeamRoster.php#Senators">Pro Team Roster</a> ]
[ <a href="OTHL-PRE-FarmTeamScoring.php#Senators">Farm Team Scoring</a> ]
[ <a href="OTHL-PRE-FarmTeamLines.php#Senators">Farm Team Lines</a> ]
[ <a href="OTHL-PRE-FarmTeamSchedule.php#Senators">Farm Team Schedule</a> ]
[ <a href="OTHL-PRE-FarmTeamStats.php#Senators">Farm Team Stats</a> ]
[ <a href="OTHL-PRE-FarmTeamStatsVS.php#Senators">Farm Team StatsVS</a> ]
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
None
</pre></div>
<h1 class="TeamLineFarm_SJB"><a id="Barracudas">Barracudas</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=26">Sharks Page</a> ]
[ <a href="OTHL-PRE-ProTeamRoster.php#Sharks">Pro Team Roster</a> ]
[ <a href="OTHL-PRE-FarmTeamScoring.php#Barracudas">Farm Team Scoring</a> ]
[ <a href="OTHL-PRE-FarmTeamLines.php#Barracudas">Farm Team Lines</a> ]
[ <a href="OTHL-PRE-FarmTeamSchedule.php#Barracudas">Farm Team Schedule</a> ]
[ <a href="OTHL-PRE-FarmTeamStats.php#Barracudas">Farm Team Stats</a> ]
[ <a href="OTHL-PRE-FarmTeamStatsVS.php#Barracudas">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Barracudas');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Barracudas" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           Unknown Player           40     1   2  2  
 2 Unknown Player           Unknown Player           Unknown Player           30     1   2  2  
 3 Unknown Player           Unknown Player           Unknown Player           20     1   2  2  
 4 Unknown Player           Cole Ully                Unknown Player           10     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Unknown Player           Zac Leslie                                        40     1   2  2  
 2 Unknown Player           Cole Ully                                         30     1   2  2  
 3 Unknown Player           Unknown Player                                    20     1   2  2  
 4 Unknown Player           Zac Leslie                                        10     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           Unknown Player           60     1   2  2  
 2 Unknown Player           Unknown Player           Unknown Player           40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Unknown Player           Zac Leslie                                        60     1   2  2  
 2 Unknown Player           Cole Ully                                         40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           60     1   2  2  
 2 Unknown Player           Unknown Player           40     1   2  2  

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
 2 Unknown Player           Unknown Player           40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Unknown Player           Zac Leslie               60     1   2  2  
 2 Unknown Player           Unknown Player           40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Unknown Player           Unknown Player           Unknown Player           Unknown Player           Zac Leslie               

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Unknown Player           Unknown Player           Unknown Player           Unknown Player           Zac Leslie               

<b>Goaltenders</b>
Starting : Unknown Goalie           
Backup : Unknown Goalie           

<b>Extra Forwards</b>
Normal : Unknown Player, Unknown Player, Unknown Player - PP : Unknown Player, Unknown Player - PK : Unknown Player
<b>Extra Defensemen</b>
Normal : Unknown Player, Unknown Player, Zac Leslie - PP : Unknown Player - PK : Unknown Player, Zac Leslie
<b>Penalty Shots</b>
Unknown Player, Unknown Player, Unknown Player, Unknown Player, Unknown Player
<b>Custom OT Lines Forwards</b>
Unknown Player, Unknown Player, Unknown Player, Unknown Player, Unknown Player, Unknown Player, Unknown Player, Unknown Player, Unknown Player, Unknown Player
<b>Custom OT Lines Defensemen</b>
Unknown Player, Unknown Player, Unknown Player, Unknown Player, Unknown Player

<b>Scratches</b>
Brogan Raferty (Healthy)</pre></div>
<h1 class="TeamLineFarm_TEX"><a id="Stars">Stars</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=10">Stars Page</a> ]
[ <a href="OTHL-PRE-ProTeamRoster.php#Stars">Pro Team Roster</a> ]
[ <a href="OTHL-PRE-FarmTeamScoring.php#Stars">Farm Team Scoring</a> ]
[ <a href="OTHL-PRE-FarmTeamLines.php#Stars">Farm Team Lines</a> ]
[ <a href="OTHL-PRE-FarmTeamSchedule.php#Stars">Farm Team Schedule</a> ]
[ <a href="OTHL-PRE-FarmTeamStats.php#Stars">Farm Team Stats</a> ]
[ <a href="OTHL-PRE-FarmTeamStatsVS.php#Stars">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Stars');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Stars" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Andrew Agozzino          Unknown Player           Unknown Player           40     1   2  2  
 2 Unknown Player           Ryan Poehling            Unknown Player           30     1   2  2  
 3 Unknown Player           Unknown Player           Unknown Player           20     1   2  2  
 4 Unknown Player           Andrew Agozzino          Unknown Player           10     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player                                    40     1   2  2  
 2 Unknown Player           Unknown Player                                    30     1   2  2  
 3 Unknown Player           Unknown Player                                    20     1   2  2  
 4 Unknown Player           Unknown Player                                    10     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Andrew Agozzino          Unknown Player           Unknown Player           60     1   2  2  
 2 Unknown Player           Ryan Poehling            Unknown Player           40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player                                    60     1   2  2  
 2 Unknown Player           Unknown Player                                    40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Unknown Player           Andrew Agozzino          60     1   2  2  
 2 Unknown Player           Ryan Poehling            40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           60     1   2  2  
 2 Unknown Player           Unknown Player           40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Unknown Player                                    60     1   2  2  
 2 Andrew Agozzino                                   40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           60     1   2  2  
 2 Unknown Player           Unknown Player           40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Unknown Player           Andrew Agozzino          60     1   2  2  
 2 Unknown Player           Ryan Poehling            40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           60     1   2  2  
 2 Unknown Player           Unknown Player           40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Andrew Agozzino          Unknown Player           Unknown Player           Unknown Player           Unknown Player           

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Andrew Agozzino          Unknown Player           Unknown Player           Unknown Player           Unknown Player           

<b>Goaltenders</b>
Starting : Unknown Goalie           
Backup : Unknown Goalie           

<b>Extra Forwards</b>
Normal : Ryan Poehling, Unknown Player, Unknown Player - PP : Ryan Poehling, Unknown Player - PK : Unknown Player
<b>Extra Defensemen</b>
Normal : Unknown Player, Unknown Player, Unknown Player - PP : Unknown Player - PK : Unknown Player, Unknown Player
<b>Penalty Shots</b>
Unknown Player, Andrew Agozzino, Unknown Player, Ryan Poehling, Unknown Player
<b>Custom OT Lines Forwards</b>
Unknown Player, Andrew Agozzino, Unknown Player, Ryan Poehling, Unknown Player, Unknown Player, Unknown Player, Unknown Player, Unknown Player, Unknown Player
<b>Custom OT Lines Defensemen</b>
Unknown Player, Unknown Player, Unknown Player, Unknown Player, Unknown Player

<b>Scratches</b>
None
</pre></div>
<h1 class="TeamLineFarm_IOA"><a id="Wild">Wild</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=15">Wild Page</a> ]
[ <a href="OTHL-PRE-ProTeamRoster.php#Wild">Pro Team Roster</a> ]
[ <a href="OTHL-PRE-FarmTeamScoring.php#Wild">Farm Team Scoring</a> ]
[ <a href="OTHL-PRE-FarmTeamLines.php#Wild">Farm Team Lines</a> ]
[ <a href="OTHL-PRE-FarmTeamSchedule.php#Wild">Farm Team Schedule</a> ]
[ <a href="OTHL-PRE-FarmTeamStats.php#Wild">Farm Team Stats</a> ]
[ <a href="OTHL-PRE-FarmTeamStatsVS.php#Wild">Farm Team StatsVS</a> ]
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
Nathan Paetsch (Healthy)</pre></div>
<?php include "Footer.php";?>
