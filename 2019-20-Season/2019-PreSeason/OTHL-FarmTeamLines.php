<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<title>OTHL - Farm Team Lines</title>
<script src="OTHL.js"></script>
<meta name="author" content="Simon Tremblay, sths.simont.info" />
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="Decription" content="Tyler Bell - STHS - Version : 3.1.6.6" />
<link href="STHSMain.css" rel="stylesheet" type="text/css" />
<link href="OTHL.css" rel="stylesheet" type="text/css" />
<?php If (file_exists("STHSMain-CSSOverwrite.css") == true){echo "<link href=\"STHSMain-CSSOverwrite.css\" rel=\"stylesheet\" type=\"text/css\" />";}?>
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
Mike Sgarbossa (Healthy), Cameron Gaunce (Healthy), Adam Clendening (Healthy), Julian Melchiori (Healthy), Kevin Czuczman (Healthy)
Keegan Lowe (Healthy), Mark Alt (Healthy), Kurtis Gabriel (Healthy), Chris Driedger (Healthy)</pre></div>
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
 1 Logan Brown              Austin Czarnik           Joshua Ho-Sang           40     1   2  2  
 2 Griffen Molino           Kiefer Sherwood          Peter Cehlarik           30     1   2  2  
 3 Unknown Player           Valentin Zykov           Max Veronneau            20     1   2  2  
 4 Joshua Ho-Sang           Logan Brown              Austin Czarnik           10     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Unknown Player           Matt Tennyson                                     40     1   2  2  
 2 Unknown Player           Justin Holl                                       30     1   2  2  
 3 Unknown Player           Unknown Player                                    20     1   2  2  
 4 Unknown Player           Matt Tennyson                                     10     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Logan Brown              Austin Czarnik           Joshua Ho-Sang           60     1   2  2  
 2 Griffen Molino           Kiefer Sherwood          Peter Cehlarik           40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Unknown Player           Matt Tennyson                                     60     1   2  2  
 2 Unknown Player           Justin Holl                                       40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Joshua Ho-Sang           Logan Brown              60     1   2  2  
 2 Austin Czarnik           Kiefer Sherwood          40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Unknown Player           Matt Tennyson            60     1   2  2  
 2 Unknown Player           Justin Holl              40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Joshua Ho-Sang                                    60     1   2  2  
 2 Logan Brown                                       40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Unknown Player           Matt Tennyson            60     1   2  2  
 2 Unknown Player           Justin Holl              40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Joshua Ho-Sang           Logan Brown              60     1   2  2  
 2 Austin Czarnik           Kiefer Sherwood          40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Unknown Player           Matt Tennyson            60     1   2  2  
 2 Unknown Player           Justin Holl              40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Logan Brown              Austin Czarnik           Joshua Ho-Sang           Unknown Player           Matt Tennyson            

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Logan Brown              Austin Czarnik           Joshua Ho-Sang           Unknown Player           Matt Tennyson            

<b>Goaltenders</b>
Starting : Al Montoya               
Backup : Unknown Goalie           

<b>Extra Forwards</b>
Normal : Valentin Zykov, Max Veronneau, Peter Cehlarik - PP : Valentin Zykov, Max Veronneau - PK : Peter Cehlarik
<b>Extra Defensemen</b>
Normal : Unknown Player, Justin Holl, Unknown Player - PP : Unknown Player - PK : Justin Holl, Unknown Player
<b>Penalty Shots</b>
Joshua Ho-Sang, Logan Brown, Austin Czarnik, Kiefer Sherwood, Peter Cehlarik

<b>Scratches</b>
Joseph Blandisi (Healthy)</pre></div>
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
 1 Unknown Player           Unknown Player           Unknown Player           40     1   2  2  
 2 Unknown Player           Patrick Russell          Jack Rodewald            30     1   2  2  
 3 Frederick Gaudreau       Giovanni Fiore           Phillip Di Giuseppe      20     1   2  2  
 4 Unknown Player           Hunter Shinkaruk         Unknown Player           10     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Unknown Player           Ashton Sautner                                    40     1   2  2  
 2 Philippe Myers           Josh Brown                                        30     1   2  2  
 3 Tommy Cross              Sami Niku                                         20     1   2  2  
 4 Evan McEneny             Unknown Player                                    10     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           Unknown Player           60     1   2  2  
 2 Unknown Player           Patrick Russell          Jack Rodewald            40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Unknown Player           Ashton Sautner                                    60     1   2  2  
 2 Philippe Myers           Josh Brown                                        40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           60     1   2  2  
 2 Unknown Player           Unknown Player           40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Unknown Player           Ashton Sautner           60     1   2  2  
 2 Philippe Myers           Josh Brown               40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Unknown Player                                    60     1   2  2  
 2 Unknown Player                                    40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Unknown Player           Ashton Sautner           60     1   2  2  
 2 Philippe Myers           Josh Brown               40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           60     1   2  2  
 2 Unknown Player           Unknown Player           40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Unknown Player           Ashton Sautner           60     1   2  2  
 2 Philippe Myers           Josh Brown               40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Unknown Player           Unknown Player           Unknown Player           Unknown Player           Ashton Sautner           

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Unknown Player           Unknown Player           Unknown Player           Unknown Player           Ashton Sautner           

<b>Goaltenders</b>
Starting : Brad Thiessen            
Backup : Adam Wilcox              

<b>Extra Forwards</b>
Normal : Frederick Gaudreau, Giovanni Fiore, Phillip Di Giuseppe - PP : Frederick Gaudreau, Giovanni Fiore - PK : Phillip Di Giuseppe
<b>Extra Defensemen</b>
Normal : Tommy Cross, Sami Niku, Evan McEneny - PP : Tommy Cross - PK : Sami Niku, Evan McEneny
<b>Penalty Shots</b>
Unknown Player, Unknown Player, Unknown Player, Unknown Player, Patrick Russell

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
Brendan Lemieux (Healthy)</pre></div>
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
 1 Karson Kuhlman           Unknown Player           Kole Sherwood            40     1   2  2  
 2 Chris Bigras             Nathan Walker            Justin Auger             30     1   2  2  
 3 Unknown Player           Unknown Player           Unknown Player           20     1   2  2  
 4 Karson Kuhlman           Unknown Player           Nathan Walker            10     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Madison Bowey            Gustav Olofsson                                   40     1   2  2  
 2 Radim Simek              Luca Sbisa                                        30     1   2  2  
 3 Jake Dotchin             Colton White                                      20     1   2  2  
 4 Chris Bigras             Madison Bowey                                     10     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Karson Kuhlman           Unknown Player           Kole Sherwood            60     1   2  2  
 2 Chris Bigras             Nathan Walker            Justin Auger             40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Madison Bowey            Gustav Olofsson                                   60     1   2  2  
 2 Radim Simek              Luca Sbisa                                        40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Karson Kuhlman           Unknown Player           60     1   2  2  
 2 Nathan Walker            Kole Sherwood            40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Madison Bowey            Gustav Olofsson          60     1   2  2  
 2 Radim Simek              Luca Sbisa               40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Karson Kuhlman                                    60     1   2  2  
 2 Unknown Player                                    40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Madison Bowey            Gustav Olofsson          60     1   2  2  
 2 Radim Simek              Luca Sbisa               40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Karson Kuhlman           Unknown Player           60     1   2  2  
 2 Nathan Walker            Kole Sherwood            40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Madison Bowey            Gustav Olofsson          60     1   2  2  
 2 Radim Simek              Luca Sbisa               40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Karson Kuhlman           Unknown Player           Kole Sherwood            Madison Bowey            Gustav Olofsson          

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Karson Kuhlman           Unknown Player           Kole Sherwood            Madison Bowey            Gustav Olofsson          

<b>Goaltenders</b>
Starting : Adin Hill                
Backup : Unknown Goalie           

<b>Extra Forwards</b>
Normal : Justin Auger, Kole Sherwood, Nathan Walker - PP : Justin Auger, Kole Sherwood - PK : Nathan Walker
<b>Extra Defensemen</b>
Normal : Jake Dotchin, Colton White, Chris Bigras - PP : Jake Dotchin - PK : Colton White, Chris Bigras
<b>Penalty Shots</b>
Karson Kuhlman, Unknown Player, Nathan Walker, Kole Sherwood, Justin Auger

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
Normal : Sheldon Rempal, Austen Brassard, Jonny Brodzinski - PP : Sheldon Rempal, Austen Brassard - PK : Jonny Brodzinski
<b>Extra Defensemen</b>
Normal : T.J. Brennan, Michael Kapla, Jacob MacDonald - PP : T.J. Brennan - PK : Michael Kapla, Jacob MacDonald
<b>Penalty Shots</b>
Curtis McKenzie, Henrik Borgstrom, Kalle Kossila, Adam Tambellini, Jonny Brodzinski

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
 1 Unknown Player           Tage Thompson            Valeri Nichushkin        40     1   2  2  
 2 Gabriel Dumont           Rudolfs Balcers          J.T. Brown               30     1   2  2  
 3 Joel L'Esperance         Brett Seney              Logan O'Connor           20     1   2  2  
 4 Steven Fogarty           Anton Blidh              Matt Lorito              10     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Joe Hicketts             Haydn Fleury                                      40     1   2  2  
 2 Matt Irwin               Ben Gleason                                       30     1   2  2  
 3 Brogan Rafferty          Josh Teves                                        20     1   2  2  
 4 Joe Hicketts             Haydn Fleury                                      10     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Unknown Player           Tage Thompson            Valeri Nichushkin        60     1   2  2  
 2 Gabriel Dumont           Rudolfs Balcers          J.T. Brown               40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Joe Hicketts             Haydn Fleury                                      60     1   2  2  
 2 Matt Irwin               Ben Gleason                                       40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Tage Thompson            Valeri Nichushkin        60     1   2  2  
 2 Unknown Player           Gabriel Dumont           40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Joe Hicketts             Haydn Fleury             60     1   2  2  
 2 Matt Irwin               Ben Gleason              40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Tage Thompson                                     60     1   2  2  
 2 Valeri Nichushkin                                 40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Joe Hicketts             Haydn Fleury             60     1   2  2  
 2 Matt Irwin               Ben Gleason              40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Tage Thompson            Valeri Nichushkin        60     1   2  2  
 2 Unknown Player           Gabriel Dumont           40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Joe Hicketts             Haydn Fleury             60     1   2  2  
 2 Matt Irwin               Ben Gleason              40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Unknown Player           Tage Thompson            Valeri Nichushkin        Joe Hicketts             Haydn Fleury             

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Unknown Player           Tage Thompson            Valeri Nichushkin        Joe Hicketts             Haydn Fleury             

<b>Goaltenders</b>
Starting : Landon Bow               
Backup : Hunter Miska             

<b>Extra Forwards</b>
Normal : Logan O'Connor, Joel L'Esperance, Brett Seney - PP : Logan O'Connor, Joel L'Esperance - PK : Brett Seney
<b>Extra Defensemen</b>
Normal : Brogan Rafferty, Josh Teves, Matt Irwin - PP : Brogan Rafferty - PK : Josh Teves, Matt Irwin
<b>Penalty Shots</b>
Tage Thompson, Valeri Nichushkin, Unknown Player, Gabriel Dumont, Rudolfs Balcers

<b>Scratches</b>
Danick Martel (Healthy), Jacob Middleton (Healthy), Chris Terry (Healthy)</pre></div>
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
Oscar Fantenberg (Healthy), Jordan Weal (Healthy), Spencer Martin (Healthy)</pre></div>
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
 3 Unknown Player           Unknown Player           Unknown Player           20     1   2  2  
 4 Unknown Player           Unknown Player           Unknown Player           10     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player                                    40     1   2  2  
 2 Unknown Player           Unknown Player                                    30     1   2  2  
 3 Griffin Reinhart         Unknown Player                                    20     1   2  2  
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
Normal : Griffin Reinhart, Unknown Player, Unknown Player - PP : Griffin Reinhart - PK : Unknown Player, Unknown Player
<b>Penalty Shots</b>
Unknown Player, Unknown Player, Unknown Player, Unknown Player, Unknown Player

<b>Scratches</b>
Sheldon Dries (Healthy)</pre></div>
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
 1 Unknown Player           Unknown Player           Unknown Player           40     1   2  2  
 2 Unknown Player           Warren Foegele           Unknown Player           30     1   2  2  
 3 Unknown Player           Morgan Klimchuk          Emile Poirier            20     1   2  2  
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
 2 Unknown Player           Warren Foegele           Unknown Player           40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player                                    60     1   2  2  
 2 Unknown Player           Unknown Player                                    40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           60     1   2  2  
 2 Unknown Player           Warren Foegele           40     1   2  2  

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
 2 Unknown Player           Warren Foegele           40     1   2  2  

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
Starting : Tristan Jarry            
Backup : Unknown Goalie           

<b>Extra Forwards</b>
Normal : Morgan Klimchuk, Unknown Player, Emile Poirier - PP : Morgan Klimchuk, Unknown Player - PK : Emile Poirier
<b>Extra Defensemen</b>
Normal : Unknown Player, Unknown Player, Unknown Player - PP : Unknown Player - PK : Unknown Player, Unknown Player
<b>Penalty Shots</b>
Unknown Player, Unknown Player, Unknown Player, Warren Foegele, Unknown Player

<b>Scratches</b>
Jon Gillies (Healthy)</pre></div>
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
 1 Jack Roslovic            Anthony Duclair          Andre Burakovsky         48     0   0  5  
 2 Brad Malone              Taro Hirose              Kyle Rau                 22     0   0  5  
 3 Christoffer Ehn          Matthew Highmore         Vinni Lettieri           20     0   0  5  
 4 Anthony Duclair          Tyrell Goulbourne        Andre Burakovsky         10     0   0  5  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Unknown Player           Jordan Subban                                     40     1   2  2  
 2 Blake Hillman            Tyrell Goulbourne                                 30     1   2  2  
 3 Unknown Player           Unknown Player                                    20     1   2  2  
 4 Unknown Player           Jordan Subban                                     10     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Jack Roslovic            Anthony Duclair          Andre Burakovsky         60     0   0  5  
 2 Kyle Rau                 Taro Hirose              Christoffer Ehn          40     0   0  5  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Unknown Player           Jordan Subban                                     60     0   0  5  
 2 Blake Hillman            Tyrell Goulbourne                                 40     0   0  5  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Christoffer Ehn          Vinni Lettieri           60     0   5  0  
 2 Kyle Rau                 Brad Malone              40     0   5  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Unknown Player           Jordan Subban            60     0   5  0  
 2 Blake Hillman            Unknown Player           40     0   5  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Christoffer Ehn                                   60     1   2  2  
 2 Kyle Rau                                          40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Unknown Player           Jordan Subban            60     1   2  2  
 2 Blake Hillman            Unknown Player           40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Anthony Duclair          Andre Burakovsky         60     1   2  2  
 2 Kyle Rau                 Brad Malone              40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Unknown Player           Jordan Subban            60     1   2  2  
 2 Blake Hillman            Unknown Player           40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Jack Roslovic            Anthony Duclair          Andre Burakovsky         Unknown Player           Jordan Subban            

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Kyle Rau                 Anthony Duclair          Andre Burakovsky         Unknown Player           Jordan Subban            

<b>Goaltenders</b>
Starting : Oscar Dansk              
Backup : Unknown Goalie           

<b>Extra Forwards</b>
Normal : Christoffer Ehn, Taro Hirose, Vinni Lettieri - PP : Christoffer Ehn, Taro Hirose - PK : Vinni Lettieri
<b>Extra Defensemen</b>
Normal : Blake Hillman, Unknown Player, Jordan Subban - PP : Blake Hillman - PK : Unknown Player, Jordan Subban
<b>Penalty Shots</b>
Anthony Duclair, Andre Burakovsky, Kyle Rau, Brad Malone, Jack Roslovic

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
 1 Unknown Player           Unknown Player           Unknown Player           40     1   2  2  
 2 Alex Broadhurst          Unknown Player           Unknown Player           30     1   2  2  
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
 2 Alex Broadhurst          Unknown Player           Unknown Player           40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player                                    60     1   2  2  
 2 Unknown Player           Unknown Player                                    40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           60     1   2  2  
 2 Unknown Player           Alex Broadhurst          40     1   2  2  

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
 2 Unknown Player           Alex Broadhurst          40     1   2  2  

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
Normal : Unknown Player, Alex Broadhurst, Unknown Player - PP : Unknown Player, Alex Broadhurst - PK : Unknown Player
<b>Extra Defensemen</b>
Normal : Unknown Player, Unknown Player, Unknown Player - PP : Unknown Player - PK : Unknown Player, Unknown Player
<b>Penalty Shots</b>
Unknown Player, Unknown Player, Unknown Player, Alex Broadhurst, Unknown Player

<b>Scratches</b>
Justin Kloos (Healthy), Brian Gibbons (Healthy), Buddy Robinson (Healthy)</pre></div>
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
 1 Drake Batherson          Andrei Svechnikov        Dryden Hunt              40     1   2  2  
 2 Jacob de La Rose         Dominic Turgeon          Unknown Player           30     1   2  2  
 3 Unknown Player           Unknown Player           Unknown Player           20     1   2  2  
 4 Andrei Svechnikov        Drake Batherson          Jacob de La Rose         10     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Caleb Jones              Henri Jokiharju                                   40     1   2  2  
 2 David Warsofsky          Unknown Player                                    30     1   2  2  
 3 Unknown Player           Unknown Player                                    20     1   2  2  
 4 Caleb Jones              Henri Jokiharju                                   10     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Drake Batherson          Andrei Svechnikov        Dryden Hunt              60     1   2  2  
 2 Jacob de La Rose         Dominic Turgeon          Unknown Player           40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Caleb Jones              Henri Jokiharju                                   60     1   2  2  
 2 David Warsofsky          Unknown Player                                    40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Andrei Svechnikov        Drake Batherson          60     1   2  2  
 2 Jacob de La Rose         Dryden Hunt              40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Caleb Jones              Henri Jokiharju          60     1   2  2  
 2 David Warsofsky          Unknown Player           40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Andrei Svechnikov                                 60     1   2  2  
 2 Drake Batherson                                   40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Caleb Jones              Henri Jokiharju          60     1   2  2  
 2 David Warsofsky          Unknown Player           40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Andrei Svechnikov        Drake Batherson          60     1   2  2  
 2 Jacob de La Rose         Dryden Hunt              40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Caleb Jones              Henri Jokiharju          60     1   2  2  
 2 David Warsofsky          Unknown Player           40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Drake Batherson          Andrei Svechnikov        Dryden Hunt              Caleb Jones              Henri Jokiharju          

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Drake Batherson          Andrei Svechnikov        Dryden Hunt              Caleb Jones              Henri Jokiharju          

<b>Goaltenders</b>
Starting : MacKenzie Blackwood      
Backup : Unknown Goalie           

<b>Extra Forwards</b>
Normal : Dominic Turgeon, Dryden Hunt, Jacob de La Rose - PP : Dominic Turgeon, Dryden Hunt - PK : Jacob de La Rose
<b>Extra Defensemen</b>
Normal : David Warsofsky, Caleb Jones, Henri Jokiharju - PP : David Warsofsky - PK : Caleb Jones, Henri Jokiharju
<b>Penalty Shots</b>
Andrei Svechnikov, Drake Batherson, Jacob de La Rose, Dryden Hunt, Dominic Turgeon

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
 1 Dominik Kahun            Casey Mittelstadt        Jordan Szwarz            40     1   2  2  
 2 Andy Andreoff            Michael Mersch           Nathan Gerbe             30     1   2  2  
 3 Brett Sutter             Nick Paul                Nicholas Baptiste        20     1   2  2  
 4 Dylan Sikura             Rem Pitlick              Dominik Kahun            10     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Filip Hronek             Marcus Pettersson                                 40     1   2  2  
 2 Samuel Girard            Christian Jaros                                   30     1   2  2  
 3 Rasmus Andersson         Riley Stillman                                    20     1   2  2  
 4 Filip Hronek             Marcus Pettersson                                 10     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Dominik Kahun            Casey Mittelstadt        Jordan Szwarz            60     1   2  2  
 2 Andy Andreoff            Michael Mersch           Nathan Gerbe             40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Filip Hronek             Marcus Pettersson                                 60     1   2  2  
 2 Samuel Girard            Christian Jaros                                   40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Dominik Kahun            Casey Mittelstadt        60     1   2  2  
 2 Andy Andreoff            Michael Mersch           40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Filip Hronek             Marcus Pettersson        60     1   2  2  
 2 Samuel Girard            Christian Jaros          40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Dominik Kahun                                     60     1   2  2  
 2 Casey Mittelstadt                                 40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Filip Hronek             Marcus Pettersson        60     1   2  2  
 2 Samuel Girard            Christian Jaros          40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Dominik Kahun            Casey Mittelstadt        60     1   2  2  
 2 Andy Andreoff            Michael Mersch           40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Filip Hronek             Marcus Pettersson        60     1   2  2  
 2 Samuel Girard            Christian Jaros          40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Dominik Kahun            Casey Mittelstadt        Jordan Szwarz            Filip Hronek             Marcus Pettersson        

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Dominik Kahun            Casey Mittelstadt        Jordan Szwarz            Filip Hronek             Marcus Pettersson        

<b>Goaltenders</b>
Starting : Kevin Boyle              
Backup : Ian Scott                

<b>Extra Forwards</b>
Normal : Nicholas Baptiste, Brett Sutter, Nick Paul - PP : Nicholas Baptiste, Brett Sutter - PK : Nick Paul
<b>Extra Defensemen</b>
Normal : Rasmus Andersson, Riley Stillman, Samuel Girard - PP : Rasmus Andersson - PK : Riley Stillman, Samuel Girard
<b>Penalty Shots</b>
Dominik Kahun, Casey Mittelstadt, Andy Andreoff, Michael Mersch, Jordan Szwarz

<b>Scratches</b>
Daniel Brickley (Healthy), Jordan Schmaltz (Healthy), Jesse Puljujarvi (Healthy)</pre></div>
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
 2 Alan Quine               Unknown Player           Unknown Player           30     1   2  2  
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
 2 Alan Quine               Unknown Player           Unknown Player           40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player                                    60     1   2  2  
 2 Unknown Player           Unknown Player                                    40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           60     1   2  2  
 2 Alan Quine               Unknown Player           40     1   2  2  

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
 2 Alan Quine               Unknown Player           40     1   2  2  

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
Unknown Player, Unknown Player, Alan Quine, Unknown Player, Unknown Player

<b>Scratches</b>
Chase De Leo (Healthy)</pre></div>
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
 1 John Quenneville         Unknown Player           Unknown Player           40     1   2  2  
 2 Clark Bishop             Unknown Player           Unknown Player           30     1   2  2  
 3 Unknown Player           Unknown Player           Unknown Player           20     1   2  2  
 4 John Quenneville         Clark Bishop             Brian Strait             10     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Guillaume Brisebois      Ryan Lindgren                                     40     1   2  2  
 2 Brian Strait             Unknown Player                                    30     1   2  2  
 3 Unknown Player           Unknown Player                                    20     1   2  2  
 4 Guillaume Brisebois      Ryan Lindgren                                     10     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 John Quenneville         Unknown Player           Unknown Player           60     1   2  2  
 2 Clark Bishop             Unknown Player           Unknown Player           40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Guillaume Brisebois      Ryan Lindgren                                     60     1   2  2  
 2 Brian Strait             Unknown Player                                    40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 John Quenneville         Clark Bishop             60     1   2  2  
 2 Unknown Player           Unknown Player           40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Guillaume Brisebois      Ryan Lindgren            60     1   2  2  
 2 Brian Strait             Unknown Player           40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 John Quenneville                                  60     1   2  2  
 2 Clark Bishop                                      40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Guillaume Brisebois      Ryan Lindgren            60     1   2  2  
 2 Brian Strait             Unknown Player           40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 John Quenneville         Clark Bishop             60     1   2  2  
 2 Unknown Player           Unknown Player           40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Guillaume Brisebois      Ryan Lindgren            60     1   2  2  
 2 Brian Strait             Unknown Player           40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   John Quenneville         Unknown Player           Unknown Player           Guillaume Brisebois      Ryan Lindgren            

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   John Quenneville         Unknown Player           Unknown Player           Guillaume Brisebois      Ryan Lindgren            

<b>Goaltenders</b>
Starting : Vitek Vanecek            
Backup : Unknown Goalie           

<b>Extra Forwards</b>
Normal : John Quenneville, Clark Bishop, Unknown Player - PP : John Quenneville, Clark Bishop - PK : Unknown Player
<b>Extra Defensemen</b>
Normal : Guillaume Brisebois, Ryan Lindgren, Brian Strait - PP : Guillaume Brisebois - PK : Ryan Lindgren, Brian Strait
<b>Penalty Shots</b>
John Quenneville, Clark Bishop, Unknown Player, Unknown Player, Unknown Player

<b>Scratches</b>
None
</pre></div>
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
 1 Liam O'Brien             Unknown Player           Alexandre Grenier        40     1   2  2  
 2 Unknown Player           Unknown Player           Unknown Player           30     1   2  2  
 3 Unknown Player           Unknown Player           Unknown Player           20     1   2  2  
 4 Alexandre Grenier        Liam O'Brien             Seth Helgeson            10     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Martin Marincin          Lawrence Pilut                                    40     1   2  2  
 2 Seth Helgeson            Unknown Player                                    30     1   2  2  
 3 Unknown Player           Unknown Player                                    20     1   2  2  
 4 Martin Marincin          Lawrence Pilut                                    10     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Liam O'Brien             Unknown Player           Alexandre Grenier        60     1   2  2  
 2 Unknown Player           Unknown Player           Unknown Player           40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Martin Marincin          Lawrence Pilut                                    60     1   2  2  
 2 Seth Helgeson            Unknown Player                                    40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Alexandre Grenier        Liam O'Brien             60     1   2  2  
 2 Unknown Player           Unknown Player           40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Martin Marincin          Lawrence Pilut           60     1   2  2  
 2 Seth Helgeson            Unknown Player           40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Alexandre Grenier                                 60     1   2  2  
 2 Liam O'Brien                                      40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Martin Marincin          Lawrence Pilut           60     1   2  2  
 2 Seth Helgeson            Unknown Player           40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Alexandre Grenier        Liam O'Brien             60     1   2  2  
 2 Unknown Player           Unknown Player           40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Martin Marincin          Lawrence Pilut           60     1   2  2  
 2 Seth Helgeson            Unknown Player           40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Liam O'Brien             Unknown Player           Alexandre Grenier        Martin Marincin          Lawrence Pilut           

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Liam O'Brien             Unknown Player           Alexandre Grenier        Martin Marincin          Lawrence Pilut           

<b>Goaltenders</b>
Starting : Francois Brassard        
Backup : Matt Tomkins             

<b>Extra Forwards</b>
Normal : Alexandre Grenier, Liam O'Brien, Unknown Player - PP : Alexandre Grenier, Liam O'Brien - PK : Unknown Player
<b>Extra Defensemen</b>
Normal : Martin Marincin, Lawrence Pilut, Seth Helgeson - PP : Martin Marincin - PK : Lawrence Pilut, Seth Helgeson
<b>Penalty Shots</b>
Alexandre Grenier, Liam O'Brien, Unknown Player, Unknown Player, Unknown Player

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
 1 Steven Lorentz           Lukas Radil              Jeremy Bracco            40     1   2  2  
 2 Unknown Player           Henrik Samuelsson        Jimmy Hayes              30     1   2  2  
 3 Unknown Player           Unknown Player           Spencer Smallman         20     1   2  2  
 4 Jeremy Bracco            Jimmy Hayes              Lukas Radil              10     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Cody Goloubef            Ryan Stanton                                      40     1   2  2  
 2 Unknown Player           Unknown Player                                    30     1   2  2  
 3 Unknown Player           Unknown Player                                    20     1   2  2  
 4 Cody Goloubef            Ryan Stanton                                      10     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Steven Lorentz           Lukas Radil              Jeremy Bracco            60     1   2  2  
 2 Unknown Player           Henrik Samuelsson        Jimmy Hayes              40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Cody Goloubef            Ryan Stanton                                      60     1   2  2  
 2 Unknown Player           Unknown Player                                    40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Jeremy Bracco            Jimmy Hayes              60     1   2  2  
 2 Lukas Radil              Henrik Samuelsson        40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Cody Goloubef            Ryan Stanton             60     1   2  2  
 2 Unknown Player           Unknown Player           40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Jeremy Bracco                                     60     1   2  2  
 2 Jimmy Hayes                                       40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Cody Goloubef            Ryan Stanton             60     1   2  2  
 2 Unknown Player           Unknown Player           40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Jeremy Bracco            Jimmy Hayes              60     1   2  2  
 2 Lukas Radil              Henrik Samuelsson        40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Cody Goloubef            Ryan Stanton             60     1   2  2  
 2 Unknown Player           Unknown Player           40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Steven Lorentz           Lukas Radil              Jeremy Bracco            Cody Goloubef            Ryan Stanton             

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Steven Lorentz           Lukas Radil              Jeremy Bracco            Cody Goloubef            Ryan Stanton             

<b>Goaltenders</b>
Starting : Unknown Goalie           
Backup : Unknown Goalie           

<b>Extra Forwards</b>
Normal : Spencer Smallman, Steven Lorentz, Henrik Samuelsson - PP : Spencer Smallman, Steven Lorentz - PK : Henrik Samuelsson
<b>Extra Defensemen</b>
Normal : Cody Goloubef, Ryan Stanton, Unknown Player - PP : Cody Goloubef - PK : Ryan Stanton, Unknown Player
<b>Penalty Shots</b>
Jeremy Bracco, Jimmy Hayes, Lukas Radil, Henrik Samuelsson, Steven Lorentz

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
 2 Dominic Toninato         John Hayden              Joey Anderson            30     1   2  2  
 3 Adam Gaudette            Eric Robinson            Ryan Kuffner             20     1   2  2  
 4 Nick Schmaltz            Ryan Kuffner             Luke Kunin               10     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Ryan Graves              Jeremy Lauzon                                     40     1   2  2  
 2 Jarred Tinordi           Anthony Bitetto                                   30     1   2  2  
 3 Erik Burgdoerfer         Mitch Reinke                                      20     1   2  2  
 4 Zach Whitecloud          Dennis Gilbert                                    10     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Nick Schmaltz            Adam Johnson             Luke Kunin               60     1   2  2  
 2 Dominic Toninato         John Hayden              Joey Anderson            40     1   2  2  

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
Starting : Ryan Miller              
Backup : Scott Wedgewood          

<b>Extra Forwards</b>
Normal : Adam Gaudette, Eric Robinson, Adam Johnson - PP : Adam Gaudette, Eric Robinson - PK : Adam Johnson
<b>Extra Defensemen</b>
Normal : Erik Burgdoerfer, Mitch Reinke, Zach Whitecloud - PP : Erik Burgdoerfer - PK : Mitch Reinke, Zach Whitecloud
<b>Penalty Shots</b>
Nick Schmaltz, Luke Kunin, Dominic Toninato, Joey Anderson, Adam Johnson

<b>Scratches</b>
Zane McIntyre (Healthy), Kaden Fulcher (Healthy)</pre></div>
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
 1 Filip Chlapik            Garrett Wilson           Sonny Milano             40     1   2  2  
 2 Luke Johnson             C.J. Smith               Michael Dal Colle        30     1   2  2  
 3 Unknown Player           Max Jones                Unknown Player           20     1   2  2  
 4 Unknown Player           Unknown Player           Unknown Player           10     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Carl Dahlstrom           Derrick Pouliot                                   40     1   2  2  
 2 Brendan Guhle            Andy Welinski                                     30     1   2  2  
 3 Alexandre Carrier        Unknown Player                                    20     1   2  2  
 4 Unknown Player           Unknown Player                                    10     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Filip Chlapik            Garrett Wilson           Sonny Milano             60     1   2  2  
 2 Luke Johnson             C.J. Smith               Michael Dal Colle        40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Carl Dahlstrom           Derrick Pouliot                                   60     1   2  2  
 2 Brendan Guhle            Andy Welinski                                     40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Filip Chlapik            Garrett Wilson           60     1   2  2  
 2 Sonny Milano             C.J. Smith               40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Carl Dahlstrom           Derrick Pouliot          60     1   2  2  
 2 Brendan Guhle            Andy Welinski            40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Filip Chlapik                                     60     1   2  2  
 2 Garrett Wilson                                    40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Carl Dahlstrom           Derrick Pouliot          60     1   2  2  
 2 Brendan Guhle            Andy Welinski            40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Filip Chlapik            Garrett Wilson           60     1   2  2  
 2 Sonny Milano             C.J. Smith               40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Carl Dahlstrom           Derrick Pouliot          60     1   2  2  
 2 Brendan Guhle            Andy Welinski            40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Filip Chlapik            Garrett Wilson           Sonny Milano             Carl Dahlstrom           Derrick Pouliot          

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Filip Chlapik            Garrett Wilson           Sonny Milano             Carl Dahlstrom           Derrick Pouliot          

<b>Goaltenders</b>
Starting : Unknown Goalie           
Backup : Unknown Goalie           

<b>Extra Forwards</b>
Normal : Max Jones, Luke Johnson, Michael Dal Colle - PP : Max Jones, Luke Johnson - PK : Michael Dal Colle
<b>Extra Defensemen</b>
Normal : Alexandre Carrier, Brendan Guhle, Andy Welinski - PP : Alexandre Carrier - PK : Brendan Guhle, Andy Welinski
<b>Penalty Shots</b>
Filip Chlapik, Garrett Wilson, Sonny Milano, C.J. Smith, Luke Johnson

<b>Scratches</b>
Daniel O'Regan (Healthy), Tyler Wotherspoon (Healthy)</pre></div>
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
 1 Unknown Player           Jamie Devane             Alexandre Fortin         40     1   2  2  
 2 Unknown Player           Dave Dziurzynski         Unknown Player           30     1   2  2  
 3 Unknown Player           Unknown Player           Unknown Player           20     1   2  2  
 4 Unknown Player           Unknown Player           Unknown Player           10     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Nelson Nogier            Roland McKeown                                    40     1   2  2  
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
Starting : Tom McCollum             
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
Justin Dowling (Healthy), Jayson Megna (Healthy), Charles Hudon (Healthy)</pre></div>
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
 1 Unknown Player           Kevin Labanc             Austin Wagner            40     1   2  2  
 2 Unknown Player           Andrew Mangiapane        Martin Frk               30     1   2  2  
 3 Unknown Player           Unknown Player           Unknown Player           20     1   2  2  
 4 Kevin Labanc             Andrew Mangiapane        Austin Wagner            10     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Anton Lindholm           Unknown Player                                    40     1   2  2  
 2 Unknown Player           Unknown Player                                    30     1   2  2  
 3 Unknown Player           Unknown Player                                    20     1   2  2  
 4 Anton Lindholm           Martin Frk                                        10     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Unknown Player           Kevin Labanc             Austin Wagner            60     1   2  2  
 2 Unknown Player           Andrew Mangiapane        Martin Frk               40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Anton Lindholm           Unknown Player                                    60     1   2  2  
 2 Unknown Player           Unknown Player                                    40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Kevin Labanc             Andrew Mangiapane        60     1   2  2  
 2 Austin Wagner            Martin Frk               40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Anton Lindholm           Unknown Player           60     1   2  2  
 2 Unknown Player           Unknown Player           40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Kevin Labanc                                      60     1   2  2  
 2 Andrew Mangiapane                                 40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Anton Lindholm           Unknown Player           60     1   2  2  
 2 Unknown Player           Unknown Player           40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Kevin Labanc             Andrew Mangiapane        60     1   2  2  
 2 Austin Wagner            Martin Frk               40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Anton Lindholm           Unknown Player           60     1   2  2  
 2 Unknown Player           Unknown Player           40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Unknown Player           Kevin Labanc             Austin Wagner            Anton Lindholm           Unknown Player           

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Unknown Player           Kevin Labanc             Austin Wagner            Anton Lindholm           Unknown Player           

<b>Goaltenders</b>
Starting : Aaron Dell               
Backup : Unknown Goalie           

<b>Extra Forwards</b>
Normal : Austin Wagner, Martin Frk, Kevin Labanc - PP : Austin Wagner, Martin Frk - PK : Kevin Labanc
<b>Extra Defensemen</b>
Normal : Anton Lindholm, Unknown Player, Unknown Player - PP : Anton Lindholm - PK : Unknown Player, Unknown Player
<b>Penalty Shots</b>
Kevin Labanc, Andrew Mangiapane, Austin Wagner, Martin Frk, Unknown Player

<b>Scratches</b>
Colin McDonald (Healthy)</pre></div>
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
 1 Unknown Player           Unknown Player           Zac Rinaldo              40     1   2  2  
 2 Trevor Smith             Ross Johnston            Justin Bailey            30     1   2  2  
 3 Unknown Player           Turner Elson             Unknown Player           20     1   2  2  
 4 Unknown Player           Unknown Player           Trevor Smith             10     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player                                    40     1   2  2  
 2 Unknown Player           Dakota Mermis                                     30     1   2  2  
 3 Kurtis MacDermid         Tyler Lewington                                   20     1   2  2  
 4 Unknown Player           Unknown Player                                    10     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           Zac Rinaldo              60     1   2  2  
 2 Trevor Smith             Ross Johnston            Justin Bailey            40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player                                    60     1   2  2  
 2 Unknown Player           Dakota Mermis                                     40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           60     1   2  2  
 2 Trevor Smith             Ross Johnston            40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           60     1   2  2  
 2 Unknown Player           Dakota Mermis            40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Unknown Player                                    60     1   2  2  
 2 Unknown Player                                    40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           60     1   2  2  
 2 Unknown Player           Dakota Mermis            40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           60     1   2  2  
 2 Trevor Smith             Ross Johnston            40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           60     1   2  2  
 2 Unknown Player           Dakota Mermis            40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Unknown Player           Unknown Player           Zac Rinaldo              Unknown Player           Unknown Player           

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Unknown Player           Unknown Player           Zac Rinaldo              Unknown Player           Unknown Player           

<b>Goaltenders</b>
Starting : Ken Appleby              
Backup : Unknown Goalie           

<b>Extra Forwards</b>
Normal : Turner Elson, Zac Rinaldo, Justin Bailey - PP : Turner Elson, Zac Rinaldo - PK : Justin Bailey
<b>Extra Defensemen</b>
Normal : Kurtis MacDermid, Tyler Lewington, Unknown Player - PP : Kurtis MacDermid - PK : Tyler Lewington, Unknown Player
<b>Penalty Shots</b>
Unknown Player, Unknown Player, Trevor Smith, Ross Johnston, Zac Rinaldo

<b>Scratches</b>
Karl Alzner (Healthy), Yannick Weber (Healthy), Taylor Fedun (Healthy)</pre></div>
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
 1 Unknown Player           Unknown Player           Unknown Player           40     1   2  2  
 2 Unknown Player           Unknown Player           Unknown Player           30     1   2  2  
 3 Unknown Player           Unknown Player           Unknown Player           20     1   2  2  
 4 Unknown Player           Frank Corrado            Unknown Player           10     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player                                    40     1   2  2  
 2 Unknown Player           Frank Corrado                                     30     1   2  2  
 3 Unknown Player           Unknown Player                                    20     1   2  2  
 4 Unknown Player           Unknown Player                                    10     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           Unknown Player           60     1   2  2  
 2 Unknown Player           Unknown Player           Unknown Player           40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player                                    60     1   2  2  
 2 Unknown Player           Frank Corrado                                     40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           60     1   2  2  
 2 Unknown Player           Unknown Player           40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           60     1   2  2  
 2 Unknown Player           Frank Corrado            40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Unknown Player                                    60     1   2  2  
 2 Unknown Player                                    40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           60     1   2  2  
 2 Unknown Player           Frank Corrado            40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           60     1   2  2  
 2 Unknown Player           Unknown Player           40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           60     1   2  2  
 2 Unknown Player           Frank Corrado            40     1   2  2  

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
Tim Heed (Healthy), Dylan McIlrath (Healthy), Trevor Carrick (Healthy), Calvin Pickard (Healthy)</pre></div>
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
 1 Zack MacEwen             Victor Rask              Unknown Player           40     1   2  2  
 2 Joseph LaBate            Unknown Player           Unknown Player           30     1   2  2  
 3 Unknown Player           Unknown Player           Unknown Player           20     1   2  2  
 4 Zack MacEwen             Victor Rask              Joseph LaBate            10     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Gustav Forsling          Robbie Russo                                      40     1   2  2  
 2 Dan Renouf               Jimmy Schuldt                                     30     1   2  2  
 3 Unknown Player           Unknown Player                                    20     1   2  2  
 4 Gustav Forsling          Robbie Russo                                      10     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Zack MacEwen             Victor Rask              Unknown Player           60     1   2  2  
 2 Joseph LaBate            Unknown Player           Unknown Player           40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Gustav Forsling          Robbie Russo                                      60     1   2  2  
 2 Dan Renouf               Jimmy Schuldt                                     40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Zack MacEwen             Victor Rask              60     1   2  2  
 2 Joseph LaBate            Unknown Player           40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Gustav Forsling          Robbie Russo             60     1   2  2  
 2 Dan Renouf               Jimmy Schuldt            40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Zack MacEwen                                      60     1   2  2  
 2 Victor Rask                                       40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Gustav Forsling          Robbie Russo             60     1   2  2  
 2 Dan Renouf               Jimmy Schuldt            40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Zack MacEwen             Victor Rask              60     1   2  2  
 2 Joseph LaBate            Unknown Player           40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Gustav Forsling          Robbie Russo             60     1   2  2  
 2 Dan Renouf               Jimmy Schuldt            40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Zack MacEwen             Victor Rask              Unknown Player           Gustav Forsling          Robbie Russo             

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Zack MacEwen             Victor Rask              Unknown Player           Gustav Forsling          Robbie Russo             

<b>Goaltenders</b>
Starting : Michal Neuvirth          
Backup : Unknown Goalie           

<b>Extra Forwards</b>
Normal : Joseph LaBate, Zack MacEwen, Victor Rask - PP : Joseph LaBate, Zack MacEwen - PK : Victor Rask
<b>Extra Defensemen</b>
Normal : Dan Renouf, Jimmy Schuldt, Gustav Forsling - PP : Dan Renouf - PK : Jimmy Schuldt, Gustav Forsling
<b>Penalty Shots</b>
Zack MacEwen, Victor Rask, Joseph LaBate, Unknown Player, Unknown Player

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
 1 Andrew Agozzino          Nicolas Deslauriers      Phil Varone              40     1   2  2  
 2 Unknown Player           Unknown Player           Unknown Player           30     1   2  2  
 3 Unknown Player           Unknown Player           Unknown Player           20     1   2  2  
 4 Nicolas Deslauriers      Andrew Agozzino          Phil Varone              10     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player                                    40     1   2  2  
 2 Unknown Player           Unknown Player                                    30     1   2  2  
 3 Unknown Player           Unknown Player                                    20     1   2  2  
 4 Unknown Player           Unknown Player                                    10     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Andrew Agozzino          Nicolas Deslauriers      Phil Varone              60     1   2  2  
 2 Unknown Player           Unknown Player           Unknown Player           40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player                                    60     1   2  2  
 2 Unknown Player           Unknown Player                                    40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Nicolas Deslauriers      Andrew Agozzino          60     1   2  2  
 2 Phil Varone              Unknown Player           40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           60     1   2  2  
 2 Unknown Player           Unknown Player           40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Nicolas Deslauriers                               60     1   2  2  
 2 Andrew Agozzino                                   40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           60     1   2  2  
 2 Unknown Player           Unknown Player           40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Nicolas Deslauriers      Andrew Agozzino          60     1   2  2  
 2 Phil Varone              Unknown Player           40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           60     1   2  2  
 2 Unknown Player           Unknown Player           40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Andrew Agozzino          Nicolas Deslauriers      Phil Varone              Unknown Player           Unknown Player           

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Andrew Agozzino          Nicolas Deslauriers      Phil Varone              Unknown Player           Unknown Player           

<b>Goaltenders</b>
Starting : Jean-Francois Berube     
Backup : Unknown Goalie           

<b>Extra Forwards</b>
Normal : Phil Varone, Nicolas Deslauriers, Andrew Agozzino - PP : Phil Varone, Nicolas Deslauriers - PK : Andrew Agozzino
<b>Extra Defensemen</b>
Normal : Unknown Player, Unknown Player, Unknown Player - PP : Unknown Player - PK : Unknown Player, Unknown Player
<b>Penalty Shots</b>
Nicolas Deslauriers, Andrew Agozzino, Phil Varone, Unknown Player, Unknown Player

<b>Scratches</b>
Ryan Sproul (Healthy), Matt Puempel (Healthy)</pre></div>
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
Christian Djoos (Healthy), Dillon Simpson (Healthy)</pre></div>
<?php include "Footer.php";?>
