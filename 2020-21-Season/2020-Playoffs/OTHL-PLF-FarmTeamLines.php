<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<title>OTHL - Farm Team Lines</title>
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
<div class="STHSTopLink"><a id="STHSRosterTop"></a> <a href="#Eagles">Eagles</a> | <a href="#IceHogs">IceHogs</a> | <a href="#Monsters">Monsters</a> | <a href="#Rampage">Rampage </a> | <a href="#Bruins">Bruins</a> | <a href="#Rocket">Rocket</a> | <a href="#Comets">Comets</a> | <a href="#Bears">Bears</a> | <a href="#Roadrunners">Roadrunners</a> | <a href="#Devils">Devils</a> | <a href="#Gulls">Gulls</a> | <a href="#Heat">Heat</a> | <a href="#Phantoms">Phantoms</a> | <a href="#Wolves">Wolves</a> | <a href="#Checkers">Checkers</a> | <a href="#SoundTigers">Sound Tigers</a> | <a href="#Moose">Moose</a> | <a href="#Reign">Reign</a> | <a href="#Crunch">Crunch</a> | <a href="#Marlies">Marlies</a> | <a href="#Condors">Condors</a> | <a href="#Thunderbirds">Thunderbirds</a> | <a href="#Penguins">Penguins</a> | <a href="#Admirals">Admirals</a> | <a href="#WolfPack">Wolf Pack</a> | <a href="#Griffins">Griffins</a> | <a href="#Americans"> Americans</a> | <a href="#Senators">Senators</a> | <a href="#Barracudas">Barracudas</a> | <a href="#Stars">Stars</a> | <a href="#Wild">Wild</a> | <a href="javascript:STHS_JS_CloseAll('');">Close All Team View</a> | <a href="javascript:STHS_JS_OpenAll('');">Open All Team View</a>
</div>
<h1 class="TeamLineFarm_COL"><a id="Eagles">Eagles</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=8">Avalanche Page</a> ]
[ <a href="OTHL-PLF-ProTeamRoster.php#Avalanche">Pro Team Roster</a> ]
[ <a href="OTHL-PLF-FarmTeamScoring.php#Eagles">Farm Team Scoring</a> ]
[ <a href="OTHL-PLF-FarmTeamLines.php#Eagles">Farm Team Lines</a> ]
[ <a href="OTHL-PLF-FarmTeamSchedule.php#Eagles">Farm Team Schedule</a> ]
[ <a href="OTHL-PLF-FarmTeamStats.php#Eagles">Farm Team Stats</a> ]
[ <a href="OTHL-PLF-FarmTeamStatsVS.php#Eagles">Farm Team StatsVS</a> ]
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
[ <a href="OTHL-PLF-ProTeamRoster.php#Blackhawks">Pro Team Roster</a> ]
[ <a href="OTHL-PLF-FarmTeamScoring.php#IceHogs">Farm Team Scoring</a> ]
[ <a href="OTHL-PLF-FarmTeamLines.php#IceHogs">Farm Team Lines</a> ]
[ <a href="OTHL-PLF-FarmTeamSchedule.php#IceHogs">Farm Team Schedule</a> ]
[ <a href="OTHL-PLF-FarmTeamStats.php#IceHogs">Farm Team Stats</a> ]
[ <a href="OTHL-PLF-FarmTeamStatsVS.php#IceHogs">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_IceHogs');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_IceHogs" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Glenn Gawdin             Max Comtois              Dominik Simon            40     1   2  2  
 2 Logan Brown              Kiefer Sherwood          Valentin Zykov           30     1   2  2  
 3 Joseph Blandisi          Jesper Boqvist           Zac Dalpe                20     1   2  2  
 4 Griffen Molino           Carsen Twarynski         Max Comtois              10     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Cameron Schilling        Matt Bartkowski                                   40     1   2  2  
 2 Ville Pokka              Mitch Vande Sompel                                30     1   2  2  
 3 Carsen Twarynski         Skyler McKenzie                                   20     1   2  2  
 4 Cameron Schilling        Matt Bartkowski                                   10     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Glenn Gawdin             Max Comtois              Dominik Simon            60     1   2  2  
 2 Logan Brown              Kiefer Sherwood          Valentin Zykov           40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Cameron Schilling        Matt Bartkowski                                   60     1   2  2  
 2 Ville Pokka              Mitch Vande Sompel                                40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Max Comtois              Glenn Gawdin             60     1   2  2  
 2 Dominik Simon            Logan Brown              40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Cameron Schilling        Matt Bartkowski          60     1   2  2  
 2 Ville Pokka              Mitch Vande Sompel       40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Max Comtois                                       60     1   2  2  
 2 Glenn Gawdin                                      40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Cameron Schilling        Matt Bartkowski          60     1   2  2  
 2 Ville Pokka              Mitch Vande Sompel       40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Max Comtois              Glenn Gawdin             60     1   2  2  
 2 Dominik Simon            Logan Brown              40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Cameron Schilling        Matt Bartkowski          60     1   2  2  
 2 Ville Pokka              Mitch Vande Sompel       40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Glenn Gawdin             Max Comtois              Dominik Simon            Cameron Schilling        Matt Bartkowski          

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Glenn Gawdin             Max Comtois              Dominik Simon            Cameron Schilling        Matt Bartkowski          

<b>Goaltenders</b>
Starting : Unknown Goalie           
Backup : Unknown Goalie           

<b>Extra Forwards</b>
Normal : Joseph Blandisi, Jesper Boqvist, Zac Dalpe - PP : Joseph Blandisi, Jesper Boqvist - PK : Zac Dalpe
<b>Extra Defensemen</b>
Normal : Ville Pokka, Mitch Vande Sompel, Cameron Schilling - PP : Ville Pokka - PK : Mitch Vande Sompel, Cameron Schilling
<b>Penalty Shots</b>
Max Comtois, Glenn Gawdin, Dominik Simon, Logan Brown, Kiefer Sherwood
<b>Custom OT Lines Forwards</b>
Max Comtois, Glenn Gawdin, Dominik Simon, Logan Brown, Kiefer Sherwood, Joseph Blandisi, Jesper Boqvist, Valentin Zykov, Zac Dalpe, Carsen Twarynski
<b>Custom OT Lines Defensemen</b>
Cameron Schilling, Matt Bartkowski, Ville Pokka, Mitch Vande Sompel, Unknown Player

<b>Scratches</b>
Max Veronneau (Healthy), Colton Point (Healthy)</pre></div>
<h1 class="TeamLineFarm_CLE"><a id="Monsters">Monsters</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=9">Blue Jackets Page</a> ]
[ <a href="OTHL-PLF-ProTeamRoster.php#BlueJackets">Pro Team Roster</a> ]
[ <a href="OTHL-PLF-FarmTeamScoring.php#Monsters">Farm Team Scoring</a> ]
[ <a href="OTHL-PLF-FarmTeamLines.php#Monsters">Farm Team Lines</a> ]
[ <a href="OTHL-PLF-FarmTeamSchedule.php#Monsters">Farm Team Schedule</a> ]
[ <a href="OTHL-PLF-FarmTeamStats.php#Monsters">Farm Team Stats</a> ]
[ <a href="OTHL-PLF-FarmTeamStatsVS.php#Monsters">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Monsters');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Monsters" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Denis Malgin             Phillip Di Giuseppe      Frederick Gaudreau       40     1   2  2  
 2 Filip Chlapik            Unknown Player           Patrick Russell          30     1   2  2  
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
 2 Filip Chlapik            Unknown Player           Patrick Russell          40     1   2  2  

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
Phillip Di Giuseppe, Denis Malgin, Filip Chlapik, Frederick Gaudreau, Unknown Player
<b>Custom OT Lines Forwards</b>
Unknown Player, Unknown Player, Unknown Player, Unknown Player, Unknown Player, Unknown Player, Unknown Player, Unknown Player, Unknown Player, Unknown Player
<b>Custom OT Lines Defensemen</b>
Unknown Player, Unknown Player, Unknown Player, Unknown Player, Unknown Player

<b>Scratches</b>
Jack Rodewald (Healthy), Giovanni Fiore (Healthy), Brandon Baddock (Healthy), Greg McKegg (Suspend), Adam Wilcox (Healthy)
Brad Thiessen (Healthy)</pre></div>
<h1 class="TeamLineFarm_SAR"><a id="Rampage">Rampage </a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=25">Blues Page</a> ]
[ <a href="OTHL-PLF-ProTeamRoster.php#Blues">Pro Team Roster</a> ]
[ <a href="OTHL-PLF-FarmTeamScoring.php#Rampage">Farm Team Scoring</a> ]
[ <a href="OTHL-PLF-FarmTeamLines.php#Rampage">Farm Team Lines</a> ]
[ <a href="OTHL-PLF-FarmTeamSchedule.php#Rampage">Farm Team Schedule</a> ]
[ <a href="OTHL-PLF-FarmTeamStats.php#Rampage">Farm Team Stats</a> ]
[ <a href="OTHL-PLF-FarmTeamStatsVS.php#Rampage">Farm Team StatsVS</a> ]
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
[ <a href="OTHL-PLF-ProTeamRoster.php#Bruins">Pro Team Roster</a> ]
[ <a href="OTHL-PLF-FarmTeamScoring.php#Bruins">Farm Team Scoring</a> ]
[ <a href="OTHL-PLF-FarmTeamLines.php#Bruins">Farm Team Lines</a> ]
[ <a href="OTHL-PLF-FarmTeamSchedule.php#Bruins">Farm Team Schedule</a> ]
[ <a href="OTHL-PLF-FarmTeamStats.php#Bruins">Farm Team Stats</a> ]
[ <a href="OTHL-PLF-FarmTeamStatsVS.php#Bruins">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Bruins');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Bruins" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Anthony Angello          Unknown Player           Gabriel Bourque          40     0   2  3  
 2 Manuel Wiederer          Nathan Walker            Jens Looke               30     0   3  2  
 3 Gabriel Fontaine         Giorgio Estephan         Kole Sherwood            20     0   3  2  
 4 Giorgio Estephan         Unknown Player           Gabriel Bourque          10     0   3  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Jaycob Megna             Ben Harpur                                        40     1   2  2  
 2 Chris Bigras             Michael Anderson                                  30     1   2  2  
 3 Devante Stephens         Gustav Olofsson                                   20     1   2  2  
 4 Jake Dotchin             Ryan Collins                                      10     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Anthony Angello          Unknown Player           Gabriel Bourque          60     1   2  2  
 2 Manuel Wiederer          Nathan Walker            Jens Looke               40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Jaycob Megna             Ben Harpur                                        60     1   2  2  
 2 Chris Bigras             Michael Anderson                                  40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Unknown Player           Gabriel Bourque          60     1   2  2  
 2 Anthony Angello          Nathan Walker            40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Jaycob Megna             Ben Harpur               60     1   2  2  
 2 Chris Bigras             Michael Anderson         40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Unknown Player                                    60     1   2  2  
 2 Gabriel Bourque                                   40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Jaycob Megna             Ben Harpur               60     1   2  2  
 2 Chris Bigras             Michael Anderson         40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Unknown Player           Gabriel Bourque          60     1   2  2  
 2 Anthony Angello          Nathan Walker            40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Jaycob Megna             Ben Harpur               60     1   2  2  
 2 Chris Bigras             Michael Anderson         40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Anthony Angello          Unknown Player           Gabriel Bourque          Jaycob Megna             Ben Harpur               

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Anthony Angello          Unknown Player           Gabriel Bourque          Jaycob Megna             Ben Harpur               

<b>Goaltenders</b>
Starting : Connor Ingram            
Backup : Matthew Villalta         

<b>Extra Forwards</b>
Normal : Kole Sherwood, Gabriel Fontaine, Jens Looke - PP : Kole Sherwood, Gabriel Fontaine - PK : Jens Looke
<b>Extra Defensemen</b>
Normal : Devante Stephens, Gustav Olofsson, Jake Dotchin - PP : Devante Stephens - PK : Gustav Olofsson, Jake Dotchin
<b>Penalty Shots</b>
Unknown Player, Gabriel Bourque, Anthony Angello, Nathan Walker, Jens Looke
<b>Custom OT Lines Forwards</b>
Unknown Player, Gabriel Bourque, Anthony Angello, Nathan Walker, Jens Looke, Kole Sherwood, Manuel Wiederer, Gabriel Fontaine, Giorgio Estephan, Unknown Player
<b>Custom OT Lines Defensemen</b>
Jaycob Megna, Ben Harpur, Chris Bigras, Michael Anderson, Devante Stephens

<b>Scratches</b>
None
</pre></div>
<h1 class="TeamLineFarm_LAV"><a id="Rocket">Rocket</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=16">Canadiens Page</a> ]
[ <a href="OTHL-PLF-ProTeamRoster.php#Canadiens">Pro Team Roster</a> ]
[ <a href="OTHL-PLF-FarmTeamScoring.php#Rocket">Farm Team Scoring</a> ]
[ <a href="OTHL-PLF-FarmTeamLines.php#Rocket">Farm Team Lines</a> ]
[ <a href="OTHL-PLF-FarmTeamSchedule.php#Rocket">Farm Team Schedule</a> ]
[ <a href="OTHL-PLF-FarmTeamStats.php#Rocket">Farm Team Stats</a> ]
[ <a href="OTHL-PLF-FarmTeamStatsVS.php#Rocket">Farm Team StatsVS</a> ]
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
[ <a href="OTHL-PLF-ProTeamRoster.php#Canucks">Pro Team Roster</a> ]
[ <a href="OTHL-PLF-FarmTeamScoring.php#Comets">Farm Team Scoring</a> ]
[ <a href="OTHL-PLF-FarmTeamLines.php#Comets">Farm Team Lines</a> ]
[ <a href="OTHL-PLF-FarmTeamSchedule.php#Comets">Farm Team Schedule</a> ]
[ <a href="OTHL-PLF-FarmTeamStats.php#Comets">Farm Team Stats</a> ]
[ <a href="OTHL-PLF-FarmTeamStatsVS.php#Comets">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Comets');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Comets" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Michael McLeod           Joel Farabee             Anton Blidh              55     0   2  3  
 2 Alexander True           Brett Seney              Logan O'Connor           25     0   2  3  
 3 Garrett Pilon            Boris Katchouk           Tyler Steenbergen        15     0   2  3  
 4 Brian Pinho              Joel Farabee             Joshua Ho-Sang           5      0   2  3  

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
   Michael McLeod           Joel Farabee             Joshua Ho-Sang           Jacob Larsson            Haydn Fleury             

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
Ben Gleason (Healthy), Jonathan Ang (Healthy), Rudolfs Balcers (Healthy), Dennis Yan (Healthy), Tanner Kaspick (Healthy)
Landon Bow (Healthy)</pre></div>
<h1 class="TeamLineFarm_HER"><a id="Bears">Bears</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=30">Capitals Page</a> ]
[ <a href="OTHL-PLF-ProTeamRoster.php#Capitals">Pro Team Roster</a> ]
[ <a href="OTHL-PLF-FarmTeamScoring.php#Bears">Farm Team Scoring</a> ]
[ <a href="OTHL-PLF-FarmTeamLines.php#Bears">Farm Team Lines</a> ]
[ <a href="OTHL-PLF-FarmTeamSchedule.php#Bears">Farm Team Schedule</a> ]
[ <a href="OTHL-PLF-FarmTeamStats.php#Bears">Farm Team Stats</a> ]
[ <a href="OTHL-PLF-FarmTeamStatsVS.php#Bears">Farm Team StatsVS</a> ]
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
[ <a href="OTHL-PLF-ProTeamRoster.php#Coyotes">Pro Team Roster</a> ]
[ <a href="OTHL-PLF-FarmTeamScoring.php#Roadrunners">Farm Team Scoring</a> ]
[ <a href="OTHL-PLF-FarmTeamLines.php#Roadrunners">Farm Team Lines</a> ]
[ <a href="OTHL-PLF-FarmTeamSchedule.php#Roadrunners">Farm Team Schedule</a> ]
[ <a href="OTHL-PLF-FarmTeamStats.php#Roadrunners">Farm Team Stats</a> ]
[ <a href="OTHL-PLF-FarmTeamStatsVS.php#Roadrunners">Farm Team StatsVS</a> ]
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
[ <a href="OTHL-PLF-ProTeamRoster.php#Devils">Pro Team Roster</a> ]
[ <a href="OTHL-PLF-FarmTeamScoring.php#Devils">Farm Team Scoring</a> ]
[ <a href="OTHL-PLF-FarmTeamLines.php#Devils">Farm Team Lines</a> ]
[ <a href="OTHL-PLF-FarmTeamSchedule.php#Devils">Farm Team Schedule</a> ]
[ <a href="OTHL-PLF-FarmTeamStats.php#Devils">Farm Team Stats</a> ]
[ <a href="OTHL-PLF-FarmTeamStatsVS.php#Devils">Farm Team StatsVS</a> ]
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
[ <a href="OTHL-PLF-ProTeamRoster.php#Ducks">Pro Team Roster</a> ]
[ <a href="OTHL-PLF-FarmTeamScoring.php#Gulls">Farm Team Scoring</a> ]
[ <a href="OTHL-PLF-FarmTeamLines.php#Gulls">Farm Team Lines</a> ]
[ <a href="OTHL-PLF-FarmTeamSchedule.php#Gulls">Farm Team Schedule</a> ]
[ <a href="OTHL-PLF-FarmTeamStats.php#Gulls">Farm Team Stats</a> ]
[ <a href="OTHL-PLF-FarmTeamStatsVS.php#Gulls">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Gulls');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Gulls" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           Kevin Stenlund           40     1   2  2  
 2 Trent Frederic           Cameron Hughes           Zach Senyshyn            30     1   2  2  
 3 Ryan MacInnis            Unknown Player           Unknown Player           20     1   2  2  
 4 Cameron Hughes           Unknown Player           Kevin Stenlund           10     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Noah Dobson              Jeremy Roy                                        40     1   2  2  
 2 Lucas Johansen           Unknown Player                                    30     1   2  2  
 3 Unknown Player           Unknown Player                                    20     1   2  2  
 4 Noah Dobson              Jeremy Roy                                        10     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           Kevin Stenlund           60     1   2  2  
 2 Trent Frederic           Cameron Hughes           Zach Senyshyn            40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Noah Dobson              Jeremy Roy                                        60     1   2  2  
 2 Lucas Johansen           Unknown Player                                    40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Unknown Player           Kevin Stenlund           60     1   2  2  
 2 Unknown Player           Zach Senyshyn            40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Noah Dobson              Jeremy Roy               60     1   2  2  
 2 Lucas Johansen           Unknown Player           40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Unknown Player                                    60     1   2  2  
 2 Kevin Stenlund                                    40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Noah Dobson              Jeremy Roy               60     1   2  2  
 2 Lucas Johansen           Unknown Player           40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Unknown Player           Kevin Stenlund           60     1   2  2  
 2 Unknown Player           Zach Senyshyn            40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Noah Dobson              Jeremy Roy               60     1   2  2  
 2 Lucas Johansen           Unknown Player           40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Unknown Player           Unknown Player           Kevin Stenlund           Noah Dobson              Jeremy Roy               

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Unknown Player           Unknown Player           Kevin Stenlund           Noah Dobson              Jeremy Roy               

<b>Goaltenders</b>
Starting : Ian Scott                
Backup : Unknown Goalie           

<b>Extra Forwards</b>
Normal : Ryan MacInnis, Trent Frederic, Cameron Hughes - PP : Ryan MacInnis, Trent Frederic - PK : Cameron Hughes
<b>Extra Defensemen</b>
Normal : Lucas Johansen, Noah Dobson, Jeremy Roy - PP : Lucas Johansen - PK : Noah Dobson, Jeremy Roy
<b>Penalty Shots</b>
Unknown Player, Kevin Stenlund, Unknown Player, Zach Senyshyn, Trent Frederic
<b>Custom OT Lines Forwards</b>
Unknown Player, Kevin Stenlund, Unknown Player, Zach Senyshyn, Trent Frederic, Ryan MacInnis, Cameron Hughes, Unknown Player, Unknown Player, Unknown Player
<b>Custom OT Lines Defensemen</b>
Noah Dobson, Jeremy Roy, Lucas Johansen, Unknown Player, Unknown Player

<b>Scratches</b>
None
</pre></div>
<h1 class="TeamLineFarm_STK"><a id="Heat">Heat</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=5">Flames Page</a> ]
[ <a href="OTHL-PLF-ProTeamRoster.php#Flames">Pro Team Roster</a> ]
[ <a href="OTHL-PLF-FarmTeamScoring.php#Heat">Farm Team Scoring</a> ]
[ <a href="OTHL-PLF-FarmTeamLines.php#Heat">Farm Team Lines</a> ]
[ <a href="OTHL-PLF-FarmTeamSchedule.php#Heat">Farm Team Schedule</a> ]
[ <a href="OTHL-PLF-FarmTeamStats.php#Heat">Farm Team Stats</a> ]
[ <a href="OTHL-PLF-FarmTeamStatsVS.php#Heat">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Heat');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Heat" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Brad Malone              Vitaly Abramov           Nick Merkley             40     0   0  5  
 2 David Gustafsson         Taro Hirose              Mathieu Olivier          30     0   0  5  
 3 Unknown Player           Paul Carey               Tyrell Goulbourne        20     0   0  5  
 4 Unknown Player           Vitaly Abramov           Taro Hirose              10     0   0  5  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Jake Bean                Unknown Player                                    40     0   0  5  
 2 Zach Trotman             Samuel Morin                                      30     0   0  5  
 3 Blake Hillman            Steven Santini                                    20     0   0  5  
 4 Jake Bean                Unknown Player                                    10     0   0  5  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Brad Malone              Vitaly Abramov           Nick Merkley             60     0   0  5  
 2 David Gustafsson         Taro Hirose              Unknown Player           40     0   0  5  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Jake Bean                Unknown Player                                    60     0   0  5  
 2 Zach Trotman             Samuel Morin                                      40     0   0  5  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Unknown Player           Vitaly Abramov           60     0   5  0  
 2 Taro Hirose              Nick Merkley             40     0   5  0  

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
 2 Taro Hirose              Nick Merkley             40     0   0  5  

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
Backup : Oscar Dansk              

<b>Extra Forwards</b>
Normal : Brad Malone, Tyrell Goulbourne, David Gustafsson - PP : Brad Malone, Tyrell Goulbourne - PK : David Gustafsson
<b>Extra Defensemen</b>
Normal : Unknown Player, Steven Santini, Samuel Morin - PP : Unknown Player - PK : Unknown Player, Samuel Morin
<b>Penalty Shots</b>
Unknown Player, Vitaly Abramov, Taro Hirose, Nick Merkley, David Gustafsson
<b>Custom OT Lines Forwards</b>
Brad Malone, Nick Merkley, Paul Carey, David Gustafsson, Vitaly Abramov, Tyrell Goulbourne, Mathieu Olivier, Taro Hirose, Unknown Player, Unknown Player
<b>Custom OT Lines Defensemen</b>
Unknown Player, Samuel Morin, Jake Bean, Steven Santini, Zach Trotman

<b>Scratches</b>
Danil Yurtaykin (Healthy)</pre></div>
<h1 class="TeamLineFarm_LVP"><a id="Phantoms">Phantoms</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=22">Flyers Page</a> ]
[ <a href="OTHL-PLF-ProTeamRoster.php#Flyers">Pro Team Roster</a> ]
[ <a href="OTHL-PLF-FarmTeamScoring.php#Phantoms">Farm Team Scoring</a> ]
[ <a href="OTHL-PLF-FarmTeamLines.php#Phantoms">Farm Team Lines</a> ]
[ <a href="OTHL-PLF-FarmTeamSchedule.php#Phantoms">Farm Team Schedule</a> ]
[ <a href="OTHL-PLF-FarmTeamStats.php#Phantoms">Farm Team Stats</a> ]
[ <a href="OTHL-PLF-FarmTeamStatsVS.php#Phantoms">Farm Team StatsVS</a> ]
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
[ <a href="OTHL-PLF-ProTeamRoster.php#GoldenKnights">Pro Team Roster</a> ]
[ <a href="OTHL-PLF-FarmTeamScoring.php#Wolves">Farm Team Scoring</a> ]
[ <a href="OTHL-PLF-FarmTeamLines.php#Wolves">Farm Team Lines</a> ]
[ <a href="OTHL-PLF-FarmTeamSchedule.php#Wolves">Farm Team Schedule</a> ]
[ <a href="OTHL-PLF-FarmTeamStats.php#Wolves">Farm Team Stats</a> ]
[ <a href="OTHL-PLF-FarmTeamStatsVS.php#Wolves">Farm Team StatsVS</a> ]
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
[ <a href="OTHL-PLF-ProTeamRoster.php#Hurricanes">Pro Team Roster</a> ]
[ <a href="OTHL-PLF-FarmTeamScoring.php#Checkers">Farm Team Scoring</a> ]
[ <a href="OTHL-PLF-FarmTeamLines.php#Checkers">Farm Team Lines</a> ]
[ <a href="OTHL-PLF-FarmTeamSchedule.php#Checkers">Farm Team Schedule</a> ]
[ <a href="OTHL-PLF-FarmTeamStats.php#Checkers">Farm Team Stats</a> ]
[ <a href="OTHL-PLF-FarmTeamStatsVS.php#Checkers">Farm Team StatsVS</a> ]
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
[ <a href="OTHL-PLF-ProTeamRoster.php#Islanders">Pro Team Roster</a> ]
[ <a href="OTHL-PLF-FarmTeamScoring.php#SoundTigers">Farm Team Scoring</a> ]
[ <a href="OTHL-PLF-FarmTeamLines.php#SoundTigers">Farm Team Lines</a> ]
[ <a href="OTHL-PLF-FarmTeamSchedule.php#SoundTigers">Farm Team Schedule</a> ]
[ <a href="OTHL-PLF-FarmTeamStats.php#SoundTigers">Farm Team Stats</a> ]
[ <a href="OTHL-PLF-FarmTeamStatsVS.php#SoundTigers">Farm Team StatsVS</a> ]
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
[ <a href="OTHL-PLF-ProTeamRoster.php#Jets">Pro Team Roster</a> ]
[ <a href="OTHL-PLF-FarmTeamScoring.php#Moose">Farm Team Scoring</a> ]
[ <a href="OTHL-PLF-FarmTeamLines.php#Moose">Farm Team Lines</a> ]
[ <a href="OTHL-PLF-FarmTeamSchedule.php#Moose">Farm Team Schedule</a> ]
[ <a href="OTHL-PLF-FarmTeamStats.php#Moose">Farm Team Stats</a> ]
[ <a href="OTHL-PLF-FarmTeamStatsVS.php#Moose">Farm Team StatsVS</a> ]
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
John Quenneville (Healthy), Brian Strait (Healthy), Beck Malenstyn (Healthy), Matheson Iacopelli (Healthy), David Kase (Healthy)
Alex Chiasson (Healthy)</pre></div>
<h1 class="TeamLineFarm_ONT"><a id="Reign">Reign</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=14">Kings Page</a> ]
[ <a href="OTHL-PLF-ProTeamRoster.php#Kings">Pro Team Roster</a> ]
[ <a href="OTHL-PLF-FarmTeamScoring.php#Reign">Farm Team Scoring</a> ]
[ <a href="OTHL-PLF-FarmTeamLines.php#Reign">Farm Team Lines</a> ]
[ <a href="OTHL-PLF-FarmTeamSchedule.php#Reign">Farm Team Schedule</a> ]
[ <a href="OTHL-PLF-FarmTeamStats.php#Reign">Farm Team Stats</a> ]
[ <a href="OTHL-PLF-FarmTeamStatsVS.php#Reign">Farm Team StatsVS</a> ]
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
[ <a href="OTHL-PLF-ProTeamRoster.php#Lightning">Pro Team Roster</a> ]
[ <a href="OTHL-PLF-FarmTeamScoring.php#Crunch">Farm Team Scoring</a> ]
[ <a href="OTHL-PLF-FarmTeamLines.php#Crunch">Farm Team Lines</a> ]
[ <a href="OTHL-PLF-FarmTeamSchedule.php#Crunch">Farm Team Schedule</a> ]
[ <a href="OTHL-PLF-FarmTeamStats.php#Crunch">Farm Team Stats</a> ]
[ <a href="OTHL-PLF-FarmTeamStatsVS.php#Crunch">Farm Team StatsVS</a> ]
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
Starting : Matt Tomkins             
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
None
</pre></div>
<h1 class="TeamLineFarm_TOR"><a id="Marlies">Marlies</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=28">Maple Leafs Page</a> ]
[ <a href="OTHL-PLF-ProTeamRoster.php#MapleLeafs">Pro Team Roster</a> ]
[ <a href="OTHL-PLF-FarmTeamScoring.php#Marlies">Farm Team Scoring</a> ]
[ <a href="OTHL-PLF-FarmTeamLines.php#Marlies">Farm Team Lines</a> ]
[ <a href="OTHL-PLF-FarmTeamSchedule.php#Marlies">Farm Team Schedule</a> ]
[ <a href="OTHL-PLF-FarmTeamStats.php#Marlies">Farm Team Stats</a> ]
[ <a href="OTHL-PLF-FarmTeamStatsVS.php#Marlies">Farm Team StatsVS</a> ]
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
[ <a href="OTHL-PLF-ProTeamRoster.php#Oilers">Pro Team Roster</a> ]
[ <a href="OTHL-PLF-FarmTeamScoring.php#Condors">Farm Team Scoring</a> ]
[ <a href="OTHL-PLF-FarmTeamLines.php#Condors">Farm Team Lines</a> ]
[ <a href="OTHL-PLF-FarmTeamSchedule.php#Condors">Farm Team Schedule</a> ]
[ <a href="OTHL-PLF-FarmTeamStats.php#Condors">Farm Team Stats</a> ]
[ <a href="OTHL-PLF-FarmTeamStatsVS.php#Condors">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Condors');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Condors" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Anthony Cirelli          Corey Perry              Luke Kunin               40     1   2  2  
 2 Adam Gaudette            Dominic Toninato         Joey Anderson            30     1   2  2  
 3 Patrick Brown            John Hayden              Buddy Robinson           20     1   2  2  
 4 Christopher Brown        Eric Robinson            Givani Smith             10     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Noah Hanifin             Dennis Gilbert                                    40     1   2  2  
 2 Jeremy Lauzon            Brian Lashoff                                     30     1   2  2  
 3 Zach Whitecloud          Jordan Schmaltz                                   20     1   2  2  
 4 Noah Hanifin             Dennis Gilbert                                    10     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Anthony Cirelli          Corey Perry              Luke Kunin               60     1   2  2  
 2 Luke Kunin               Dominic Toninato         Joey Anderson            40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Noah Hanifin             Dennis Gilbert                                    60     1   2  2  
 2 Jeremy Lauzon            Brian Lashoff                                     40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Anthony Cirelli          Corey Perry              60     1   2  2  
 2 Luke Kunin               Dominic Toninato         40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Noah Hanifin             Dennis Gilbert           60     1   2  2  
 2 Jeremy Lauzon            Brian Lashoff            40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Anthony Cirelli                                   60     1   2  2  
 2 Luke Kunin                                        40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Noah Hanifin             Dennis Gilbert           60     1   2  2  
 2 Jeremy Lauzon            Brian Lashoff            40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Anthony Cirelli          Corey Perry              60     1   2  2  
 2 Luke Kunin               Dominic Toninato         40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Noah Hanifin             Dennis Gilbert           60     1   2  2  
 2 Jeremy Lauzon            Brian Lashoff            40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Anthony Cirelli          Corey Perry              Luke Kunin               Noah Hanifin             Dennis Gilbert           

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Anthony Cirelli          Corey Perry              Luke Kunin               Noah Hanifin             Dennis Gilbert           

<b>Goaltenders</b>
Starting : Zane McIntyre            
Backup : Kaden Fulcher            

<b>Extra Forwards</b>
Normal : Joey Anderson, Buddy Robinson, Dominic Toninato - PP : Joey Anderson, Buddy Robinson - PK : Joey Anderson
<b>Extra Defensemen</b>
Normal : Brian Lashoff, Zach Whitecloud, Jordan Schmaltz - PP : Brian Lashoff - PK : Brian Lashoff, Zach Whitecloud
<b>Penalty Shots</b>
Anthony Cirelli, Luke Kunin, Corey Perry, Adam Gaudette, Joey Anderson
<b>Custom OT Lines Forwards</b>
Anthony Cirelli, Luke Kunin, Corey Perry, Adam Gaudette, Joey Anderson, Buddy Robinson, Dominic Toninato, John Hayden, Eric Robinson, Givani Smith
<b>Custom OT Lines Defensemen</b>
Noah Hanifin, Dennis Gilbert, Jeremy Lauzon, Brian Lashoff, Zach Whitecloud

<b>Scratches</b>
Max Willman (Healthy)</pre></div>
<h1 class="TeamLineFarm_SPR"><a id="Thunderbirds">Thunderbirds</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=13">Panthers Page</a> ]
[ <a href="OTHL-PLF-ProTeamRoster.php#Panthers">Pro Team Roster</a> ]
[ <a href="OTHL-PLF-FarmTeamScoring.php#Thunderbirds">Farm Team Scoring</a> ]
[ <a href="OTHL-PLF-FarmTeamLines.php#Thunderbirds">Farm Team Lines</a> ]
[ <a href="OTHL-PLF-FarmTeamSchedule.php#Thunderbirds">Farm Team Schedule</a> ]
[ <a href="OTHL-PLF-FarmTeamStats.php#Thunderbirds">Farm Team Stats</a> ]
[ <a href="OTHL-PLF-FarmTeamStatsVS.php#Thunderbirds">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Thunderbirds');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Thunderbirds" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Sam Steel                Emil Bemstrom            Martin Necas             40     0   1  4  
 2 Luke Johnson             Max Jones                Alexander Nylander       30     0   1  4  
 3 Michael McCarron         Michael Dal Colle        Matthew Highmore         20     1   2  2  
 4 Cooper Marody            Unknown Player           Trevor Lewis             10     1   2  2  

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
Normal : Luke Johnson, Matthew Highmore, Michael McCarron - PP : Luke Johnson, Matthew Highmore - PK : Michael McCarron
<b>Extra Defensemen</b>
Normal : Lucas Carlsson, Dan Renouf, Alexandre Carrier - PP : Lucas Carlsson - PK : Dan Renouf, Alexandre Carrier
<b>Penalty Shots</b>
Martin Necas, Alexander Nylander, Sam Steel, Max Jones, Emil Bemstrom
<b>Custom OT Lines Forwards</b>
Martin Necas, Alexander Nylander, Sam Steel, Max Jones, Emil Bemstrom, Luke Johnson, Michael Dal Colle, Matthew Highmore, Michael McCarron, Cooper Marody
<b>Custom OT Lines Defensemen</b>
Parker Wotherspoon, Erik Brannstrom, Alexandre Carrier, Tyler Wotherspoon, Lucas Carlsson

<b>Scratches</b>
Ilya Sorokin (Healthy)</pre></div>
<h1 class="TeamLineFarm_WBS"><a id="Penguins">Penguins</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=24">Penguins Page</a> ]
[ <a href="OTHL-PLF-ProTeamRoster.php#Penguins">Pro Team Roster</a> ]
[ <a href="OTHL-PLF-FarmTeamScoring.php#Penguins">Farm Team Scoring</a> ]
[ <a href="OTHL-PLF-FarmTeamLines.php#Penguins">Farm Team Lines</a> ]
[ <a href="OTHL-PLF-FarmTeamSchedule.php#Penguins">Farm Team Schedule</a> ]
[ <a href="OTHL-PLF-FarmTeamStats.php#Penguins">Farm Team Stats</a> ]
[ <a href="OTHL-PLF-FarmTeamStatsVS.php#Penguins">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Penguins');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Penguins" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Tyson Jost               Michael Rasmussen        Micheal Ferland          40     1   1  3  
 2 Steven Fogarty           Anthony Greco            Alexandre Fortin         30     0   2  3  
 3 Unknown Player           Tomas Jurco              Gabriel Gagne            20     1   2  2  
 4 Tyson Jost               Anthony Greco            Tomas Jurco              10     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Aaron Ness               Dante Fabbro                                      40     1   2  2  
 2 Unknown Player           Unknown Player                                    30     1   2  2  
 3 Unknown Player           Unknown Player                                    20     1   2  2  
 4 Aaron Ness               Dante Fabbro                                      10     1   1  3  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Tyson Jost               Anthony Greco            Tomas Jurco              60     0   1  4  
 2 Michael Rasmussen        Alexandre Fortin         Gabriel Gagne            40     1   1  3  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Dante Fabbro             Aaron Ness                                        60     0   1  3  
 2 Unknown Player           Unknown Player                                    40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Michael Rasmussen        Alexandre Fortin         60     1   2  2  
 2 Steven Fogarty           Tyson Jost               40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Dante Fabbro             Aaron Ness               60     1   2  2  
 2 Unknown Player           Unknown Player           40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Michael Rasmussen                                 60     1   2  2  
 2 Gabriel Gagne                                     40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Aaron Ness               Dante Fabbro             60     1   2  2  
 2 Unknown Player           Unknown Player           40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Tyson Jost               Alexandre Fortin         60     1   2  2  
 2 Michael Rasmussen        Gabriel Gagne            40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Dante Fabbro             Aaron Ness               60     1   2  2  
 2 Unknown Player           Unknown Player           40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Michael Rasmussen        Tyson Jost               Gabriel Gagne            Aaron Ness               Dante Fabbro             

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Michael Rasmussen        Tyson Jost               Gabriel Gagne            Aaron Ness               Dante Fabbro             

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
Tyson Jost, Michael Rasmussen, Micheal Ferland, Steven Fogarty, Anthony Greco, Tomas Jurco, Alexandre Fortin, Gabriel Gagne, Unknown Player, Unknown Player
<b>Custom OT Lines Defensemen</b>
Dante Fabbro, Aaron Ness, Unknown Player, Unknown Player, Unknown Player

<b>Scratches</b>
Matej Tomek (Healthy)</pre></div>
<h1 class="TeamLineFarm_MIL"><a id="Admirals">Admirals</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=17">Predators Page</a> ]
[ <a href="OTHL-PLF-ProTeamRoster.php#Predators">Pro Team Roster</a> ]
[ <a href="OTHL-PLF-FarmTeamScoring.php#Admirals">Farm Team Scoring</a> ]
[ <a href="OTHL-PLF-FarmTeamLines.php#Admirals">Farm Team Lines</a> ]
[ <a href="OTHL-PLF-FarmTeamSchedule.php#Admirals">Farm Team Schedule</a> ]
[ <a href="OTHL-PLF-FarmTeamStats.php#Admirals">Farm Team Stats</a> ]
[ <a href="OTHL-PLF-FarmTeamStatsVS.php#Admirals">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Admirals');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Admirals" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Morgan Frost             Greg Carey               Justin Dowling           40     0   2  3  
 2 Gaetan Haas              Stefan Matteau           Logan Shaw               30     0   2  3  
 3 J.C. Beaudin             Nick Lappin              Austin Poganski          20     0   2  3  
 4 Adam Musil               Brandon Gignac           Lean Bergmann            10     0   2  3  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Dennis Cholowski         Kevin Connauton                                   40     0   2  3  
 2 Stuart Percy             Julius Bergman                                    30     0   2  3  
 3 Dennis Robertson         Unknown Player                                    20     0   2  3  
 4 Kevin Connauton          Dennis Cholowski                                  10     0   2  3  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Gaetan Haas              Greg Carey               Justin Dowling           60     0   0  5  
 2 Morgan Frost             Stefan Matteau           Logan Shaw               40     0   0  5  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Dennis Cholowski         Kevin Connauton                                   60     0   0  5  
 2 Julius Bergman           Dennis Robertson                                  40     0   0  5  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Gaetan Haas              Greg Carey               60     0   5  0  
 2 Morgan Frost             Greg Carey               40     0   5  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Dennis Cholowski         Kevin Connauton          60     0   5  0  
 2 Julius Bergman           Dennis Robertson         40     0   5  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Gaetan Haas                                       60     0   5  0  
 2 Greg Carey                                        40     0   5  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Dennis Cholowski         Kevin Connauton          60     0   5  0  
 2 Julius Bergman           Dennis Robertson         40     0   5  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Morgan Frost             Greg Carey               60     1   2  2  
 2 Gaetan Haas              Stefan Matteau           40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Dennis Cholowski         Kevin Connauton          60     1   2  2  
 2 Julius Bergman           Dennis Robertson         40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Morgan Frost             Greg Carey               Justin Dowling           Dennis Cholowski         Kevin Connauton          

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Gaetan Haas              Stefan Matteau           Justin Dowling           Dennis Cholowski         Kevin Connauton          

<b>Goaltenders</b>
Starting : Pheonix Copley           
Backup : Joseph Woll              

<b>Extra Forwards</b>
Normal : Stefan Matteau, Gaetan Haas, Austin Poganski - PP : Stefan Matteau, Gaetan Haas - PK : Austin Poganski
<b>Extra Defensemen</b>
Normal : Stuart Percy, Unknown Player, Julius Bergman - PP : Stuart Percy - PK : Unknown Player, Julius Bergman
<b>Penalty Shots</b>
Greg Carey, Justin Dowling, Lean Bergmann, Gaetan Haas, Morgan Frost
<b>Custom OT Lines Forwards</b>
Adam Musil, Lean Bergmann, Morgan Frost, Greg Carey, Justin Dowling, Stefan Matteau, Gaetan Haas, Logan Shaw, Austin Poganski, J.C. Beaudin
<b>Custom OT Lines Defensemen</b>
Dennis Cholowski, Kevin Connauton, Julius Bergman, Dennis Robertson, Stuart Percy

<b>Scratches</b>
Aaron Harstad (Healthy)</pre></div>
<h1 class="TeamLineFarm_HFD"><a id="WolfPack">Wolf Pack</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=20">Rangers Page</a> ]
[ <a href="OTHL-PLF-ProTeamRoster.php#Rangers">Pro Team Roster</a> ]
[ <a href="OTHL-PLF-FarmTeamScoring.php#WolfPack">Farm Team Scoring</a> ]
[ <a href="OTHL-PLF-FarmTeamLines.php#WolfPack">Farm Team Lines</a> ]
[ <a href="OTHL-PLF-FarmTeamSchedule.php#WolfPack">Farm Team Schedule</a> ]
[ <a href="OTHL-PLF-FarmTeamStats.php#WolfPack">Farm Team Stats</a> ]
[ <a href="OTHL-PLF-FarmTeamStatsVS.php#WolfPack">Farm Team StatsVS</a> ]
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
[ <a href="OTHL-PLF-ProTeamRoster.php#RedWings">Pro Team Roster</a> ]
[ <a href="OTHL-PLF-FarmTeamScoring.php#Griffins">Farm Team Scoring</a> ]
[ <a href="OTHL-PLF-FarmTeamLines.php#Griffins">Farm Team Lines</a> ]
[ <a href="OTHL-PLF-FarmTeamSchedule.php#Griffins">Farm Team Schedule</a> ]
[ <a href="OTHL-PLF-FarmTeamStats.php#Griffins">Farm Team Stats</a> ]
[ <a href="OTHL-PLF-FarmTeamStatsVS.php#Griffins">Farm Team StatsVS</a> ]
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
[ <a href="OTHL-PLF-ProTeamRoster.php#Sabres">Pro Team Roster</a> ]
[ <a href="OTHL-PLF-FarmTeamScoring.php#Americans">Farm Team Scoring</a> ]
[ <a href="OTHL-PLF-FarmTeamLines.php#Americans">Farm Team Lines</a> ]
[ <a href="OTHL-PLF-FarmTeamSchedule.php#Americans">Farm Team Schedule</a> ]
[ <a href="OTHL-PLF-FarmTeamStats.php#Americans">Farm Team Stats</a> ]
[ <a href="OTHL-PLF-FarmTeamStatsVS.php#Americans">Farm Team StatsVS</a> ]
 [ <a href="#STHSRosterTop"><b>Page Top</b></a> ]
[ <a href="javascript:STHS_JS_ToggleTeam('STHS_JS_Team_Americans');"><b>Close / Open Team View</b></a> ]
</div><div id="STHS_JS_Team_Americans" style="display: block;">
<pre><b>5 vs 5 Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Michael Amadio           Chris Terry              Cole Schneider           40     1   2  2  
 2 Trevor Moore             Tage Thompson            Keegan Kolesar           30     1   2  2  
 3 Carter Verhaeghe         Laurent Dauphin          Turner Elson             20     1   2  2  
 4 Sean Malone              Mikey Eyssimont          Ross Johnston            10     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Dakota Mermis            Ilya Lyubushkin                                   40     1   2  2  
 2 Andy Welinski            Taylor Fedun                                      30     1   2  2  
 3 Alexander Yelesin        Tyler Lewington                                   20     1   2  2  
 4 Dakota Mermis            Ilya Lyubushkin                                   10     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Michael Amadio           Chris Terry              Cole Schneider           60     1   2  2  
 2 Carter Verhaeghe         Trevor Moore             Tage Thompson            40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Dakota Mermis            Ilya Lyubushkin                                   60     1   2  2  
 2 Andy Welinski            Taylor Fedun                                      40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Michael Amadio           Chris Terry              60     1   2  2  
 2 Carter Verhaeghe         Tage Thompson            40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Dakota Mermis            Ilya Lyubushkin          60     1   2  2  
 2 Andy Welinski            Taylor Fedun             40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Michael Amadio                                    60     1   2  2  
 2 Carter Verhaeghe                                  40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Dakota Mermis            Ilya Lyubushkin          60     1   2  2  
 2 Andy Welinski            Taylor Fedun             40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Michael Amadio           Chris Terry              60     1   2  2  
 2 Carter Verhaeghe         Tage Thompson            40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Dakota Mermis            Ilya Lyubushkin          60     1   2  2  
 2 Andy Welinski            Taylor Fedun             40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Michael Amadio           Chris Terry              Cole Schneider           Dakota Mermis            Ilya Lyubushkin          

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Michael Amadio           Chris Terry              Cole Schneider           Dakota Mermis            Ilya Lyubushkin          

<b>Goaltenders</b>
Starting : Ilya Samsonov            
Backup : Jonas Johansson          

<b>Extra Forwards</b>
Normal : Carter Verhaeghe, Trevor Moore, Laurent Dauphin - PP : Carter Verhaeghe, Trevor Moore - PK : Carter Verhaeghe
<b>Extra Defensemen</b>
Normal : Taylor Fedun, Alexander Yelesin, Tyler Lewington - PP : Taylor Fedun - PK : Taylor Fedun, Alexander Yelesin
<b>Penalty Shots</b>
Chris Terry, Tage Thompson, Cole Schneider, Michael Amadio, Carter Verhaeghe
<b>Custom OT Lines Forwards</b>
Chris Terry, Tage Thompson, Cole Schneider, Michael Amadio, Carter Verhaeghe, Trevor Moore, Laurent Dauphin, Keegan Kolesar, Mikey Eyssimont, Sean Malone
<b>Custom OT Lines Defensemen</b>
Dakota Mermis, Ilya Lyubushkin, Andy Welinski, Taylor Fedun, Alexander Yelesin

<b>Scratches</b>
Andrew Poturalski (Healthy), Ryan Fitzgerald (Healthy), Joona Luoto (Healthy), Dalton Smith (Healthy)</pre></div>
<h1 class="TeamLineFarm_BEL"><a id="Senators">Senators</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=21">Senators Page</a> ]
[ <a href="OTHL-PLF-ProTeamRoster.php#Senators">Pro Team Roster</a> ]
[ <a href="OTHL-PLF-FarmTeamScoring.php#Senators">Farm Team Scoring</a> ]
[ <a href="OTHL-PLF-FarmTeamLines.php#Senators">Farm Team Lines</a> ]
[ <a href="OTHL-PLF-FarmTeamSchedule.php#Senators">Farm Team Schedule</a> ]
[ <a href="OTHL-PLF-FarmTeamStats.php#Senators">Farm Team Stats</a> ]
[ <a href="OTHL-PLF-FarmTeamStatsVS.php#Senators">Farm Team StatsVS</a> ]
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
Starting : Unknown Goalie           
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
Trevor Carrick (Healthy), Brandon Halverson (Healthy), Jimmy Howard (Healthy)</pre></div>
<h1 class="TeamLineFarm_SJB"><a id="Barracudas">Barracudas</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
[ <a href="ProTeam.php?Team=26">Sharks Page</a> ]
[ <a href="OTHL-PLF-ProTeamRoster.php#Sharks">Pro Team Roster</a> ]
[ <a href="OTHL-PLF-FarmTeamScoring.php#Barracudas">Farm Team Scoring</a> ]
[ <a href="OTHL-PLF-FarmTeamLines.php#Barracudas">Farm Team Lines</a> ]
[ <a href="OTHL-PLF-FarmTeamSchedule.php#Barracudas">Farm Team Schedule</a> ]
[ <a href="OTHL-PLF-FarmTeamStats.php#Barracudas">Farm Team Stats</a> ]
[ <a href="OTHL-PLF-FarmTeamStatsVS.php#Barracudas">Farm Team StatsVS</a> ]
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
[ <a href="OTHL-PLF-ProTeamRoster.php#Stars">Pro Team Roster</a> ]
[ <a href="OTHL-PLF-FarmTeamScoring.php#Stars">Farm Team Scoring</a> ]
[ <a href="OTHL-PLF-FarmTeamLines.php#Stars">Farm Team Lines</a> ]
[ <a href="OTHL-PLF-FarmTeamSchedule.php#Stars">Farm Team Schedule</a> ]
[ <a href="OTHL-PLF-FarmTeamStats.php#Stars">Farm Team Stats</a> ]
[ <a href="OTHL-PLF-FarmTeamStatsVS.php#Stars">Farm Team StatsVS</a> ]
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
[ <a href="OTHL-PLF-ProTeamRoster.php#Wild">Pro Team Roster</a> ]
[ <a href="OTHL-PLF-FarmTeamScoring.php#Wild">Farm Team Scoring</a> ]
[ <a href="OTHL-PLF-FarmTeamLines.php#Wild">Farm Team Lines</a> ]
[ <a href="OTHL-PLF-FarmTeamSchedule.php#Wild">Farm Team Schedule</a> ]
[ <a href="OTHL-PLF-FarmTeamStats.php#Wild">Farm Team Stats</a> ]
[ <a href="OTHL-PLF-FarmTeamStatsVS.php#Wild">Farm Team StatsVS</a> ]
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
