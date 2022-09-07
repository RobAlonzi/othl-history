<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<title>OTHL - Pro Team Lines</title>
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
<div class="STHSTopLink"><a id="STHSRosterTop"></a> <a href="#Avalanche">Avalanche</a> | <a href="#Blackhawks">Blackhawks</a> | <a href="#BlueJackets">Blue Jackets</a> | <a href="#Blues">Blues</a> | <a href="#Bruins">Bruins</a> | <a href="#Canadiens">Canadiens</a> | <a href="#Canucks">Canucks</a> | <a href="#Capitals">Capitals</a> | <a href="#Coyotes">Coyotes</a> | <a href="#Devils">Devils</a> | <a href="#Ducks">Ducks</a> | <a href="#Flames">Flames</a> | <a href="#Flyers">Flyers</a> | <a href="#GoldenKnights">Golden Knights</a> | <a href="#Hurricanes">Hurricanes</a> | <a href="#Islanders">Islanders</a> | <a href="#Jets">Jets</a> | <a href="#Kings">Kings</a> | <a href="#Lightning">Lightning</a> | <a href="#MapleLeafs">Maple Leafs</a> | <a href="#Oilers">Oilers</a> | <a href="#Panthers">Panthers</a> | <a href="#Penguins">Penguins</a> | <a href="#Predators">Predators</a> | <a href="#Rangers">Rangers</a> | <a href="#RedWings">Red Wings</a> | <a href="#Sabres">Sabres</a> | <a href="#Senators">Senators</a> | <a href="#Sharks">Sharks</a> | <a href="#Stars">Stars</a> | <a href="#Wild">Wild</a> | <a href="javascript:STHS_JS_CloseAll('');">Close All Team View</a> | <a href="javascript:STHS_JS_OpenAll('');">Open All Team View</a>
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
 1 Mikko Koivu              Michael Frolik           Patrick Kane             30     0   1  4  
 2 Chris Mueller            J.T. Miller              Travis Boyd              27     1   2  2  
 3 Lucas Wallmark           Tomas Nosek              Josh Archibald           24     2   2  1  
 4 Blake Pietila            Tobias Rieder            Brock McGinn             19     1   3  1  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Unknown Player           Hampus Lindholm                                   40     1   2  2  
 2 Brett Pesce              Will Butcher                                      25     1   2  2  
 3 Brandon Manning          Jonas Siegenthaler                                25     2   2  1  
 4 Brett Pesce              Will Butcher                                      10     1   3  1  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Mikko Koivu              J.T. Miller              Patrick Kane             60     0   1  4  
 2 Chris Mueller            Michael Frolik           Travis Boyd              40     1   1  3  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Unknown Player           Hampus Lindholm                                   60     0   2  3  
 2 Will Butcher             Brett Pesce                                       40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Blake Pietila            Josh Archibald           60     1   2  2  
 2 Mikko Koivu              Brock McGinn             40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Unknown Player           Hampus Lindholm          60     1   4  0  
 2 Brandon Manning          Will Butcher             40     1   4  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Patrick Kane                                      60     1   2  2  
 2 Mikko Koivu                                       40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Unknown Player           Hampus Lindholm          60     1   4  0  
 2 Brandon Manning          Will Butcher             40     1   4  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Patrick Kane             Mikko Koivu              60     1   2  2  
 2 Travis Boyd              Michael Frolik           40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Unknown Player           Hampus Lindholm          60     1   2  2  
 2 Brett Pesce              Will Butcher             40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Mikko Koivu              J.T. Miller              Patrick Kane             Unknown Player           Hampus Lindholm          

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Mikko Koivu              Tomas Nosek              Blake Pietila            Unknown Player           Hampus Lindholm          

<b>Goaltenders</b>
Starting : Jake Allen               
Backup : Anders Nilsson           

<b>Extra Forwards</b>
Normal : Patrick Kane, Mikko Koivu, Travis Boyd - PP : Patrick Kane, Mikko Koivu - PK : Travis Boyd
<b>Extra Defensemen</b>
Normal : Brandon Manning, Brett Pesce, Hampus Lindholm - PP : Brandon Manning - PK : Brett Pesce, Unknown Player
<b>Penalty Shots</b>
Patrick Kane, Mikko Koivu, J.T. Miller, Brett Pesce, Brock McGinn

<b>Scratches</b>
Brandon Carlo (Right Eye Injury)</pre></div>
<h1 class="TeamLinesPro_CHI"><a id="Blackhawks">Blackhawks</a></h1>
<b>Lines are Complete</b><br />
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
 1 Tyler Johnson            Brian Boyle              Jason Zucker             35     1   2  2  
 2 Evgeni Malkin            Sebastian Aho            Vladislav Namestnikov    35     1   1  3  
 3 Alexander Wennberg       Carl Hagelin             Matt Calvert             25     1   3  1  
 4 Zac Dalpe                Adam Erne                David Kampf              5      2   2  1  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Justin Faulk             Shayne Gostisbehere                               40     1   2  2  
 2 Andrew MacDonald         Zach Werenski                                     40     1   3  1  
 3 Cameron Schilling        Anthony DeAngelo                                  10     0   2  3  
 4 Justin Faulk             Zach Werenski                                     10     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Evgeni Malkin            Sebastian Aho            Tyler Johnson            65     0   0  5  
 2 Alexander Wennberg       Brian Boyle              Jason Zucker             35     0   1  4  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Justin Faulk             Zach Werenski                                     65     0   1  4  
 2 Anthony DeAngelo         Shayne Gostisbehere                               35     1   1  3  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 David Kampf              Matt Calvert             60     0   5  0  
 2 Brian Boyle              Vladislav Namestnikov    40     0   5  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Justin Faulk             Andrew MacDonald         60     0   5  0  
 2 Anthony DeAngelo         Zach Werenski            40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Brian Boyle                                       60     0   5  0  
 2 David Kampf                                       40     0   5  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Justin Faulk             Andrew MacDonald         60     0   5  0  
 2 Zach Werenski            Anthony DeAngelo         40     0   5  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Evgeni Malkin            Sebastian Aho            60     1   1  3  
 2 Tyler Johnson            Brian Boyle              40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Justin Faulk             Zach Werenski            60     1   2  2  
 2 Andrew MacDonald         Cameron Schilling        40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Evgeni Malkin            Sebastian Aho            Jason Zucker             Justin Faulk             Zach Werenski            

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   David Kampf              Brian Boyle              Matt Calvert             Andrew MacDonald         Justin Faulk             

<b>Goaltenders</b>
Starting : Jimmy Howard             
Backup : Corey Crawford           

<b>Extra Forwards</b>
Normal : Tyler Johnson, Matt Calvert, David Kampf - PP : Vladislav Namestnikov, Matt Calvert - PK : Alexander Wennberg
<b>Extra Defensemen</b>
Normal : Andrew MacDonald, Cameron Schilling, Zach Werenski - PP : Cameron Schilling - PK : Cameron Schilling, Shayne Gostisbehere
<b>Penalty Shots</b>
Zac Dalpe, Andrew MacDonald, Alexander Wennberg, Evgeni Malkin, Brian Boyle

<b>Scratches</b>
Dominik Simon (Healthy), Jordan Oesterle (Healthy)</pre></div>
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
 1 Elias Pettersson         Mats Zuccarello          Kyle Okposo              27     0   2  3  
 2 Bo Horvat                Evander Kane             Vinnie Hinostroza        27     0   2  3  
 3 Alexander Kerfoot        Sven Baertschi           Jake Virtanen            25     1   1  3  
 4 Sam Steel                Thomas Vanek             Zach Sanford             21     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Anton Stralman           Jason Demers                                      40     1   2  2  
 2 Mark Pysyk               Danny DeKeyser                                    30     1   2  2  
 3 Ian Cole                 Robert Hagg                                       20     1   2  2  
 4 Ian Cole                 Danny DeKeyser                                    10     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Elias Pettersson         Mats Zuccarello          Kyle Okposo              60     1   2  2  
 2 Alexander Kerfoot        Sven Baertschi           Bo Horvat                40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Robert Hagg              Danny DeKeyser                                    60     1   2  2  
 2 Anton Stralman           Ian Cole                                          40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Mats Zuccarello          Sven Baertschi           60     1   2  2  
 2 Kyle Okposo              Alexander Kerfoot        40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Ian Cole                 Danny DeKeyser           60     1   2  2  
 2 Anton Stralman           Robert Hagg              40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Mats Zuccarello                                   60     1   2  2  
 2 Kyle Okposo                                       40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Ian Cole                 Danny DeKeyser           60     1   2  2  
 2 Anton Stralman           Robert Hagg              40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Mats Zuccarello          Elias Pettersson         60     1   2  2  
 2 Kyle Okposo              Evander Kane             40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Robert Hagg              Anton Stralman           60     1   2  2  
 2 Danny DeKeyser           Ian Cole                 40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Elias Pettersson         Mats Zuccarello          Kyle Okposo              Anton Stralman           Jason Demers             

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Elias Pettersson         Mats Zuccarello          Kyle Okposo              Anton Stralman           Jason Demers             

<b>Goaltenders</b>
Starting : Alex Lyon                
Backup : Jacob Markstrom          

<b>Extra Forwards</b>
Normal : Sven Baertschi, Mats Zuccarello, Kyle Okposo - PP : Sven Baertschi, Mats Zuccarello - PK : Mats Zuccarello
<b>Extra Defensemen</b>
Normal : Ian Cole, Robert Hagg, Anton Stralman - PP : Ian Cole - PK : Robert Hagg, Ian Cole
<b>Penalty Shots</b>
Mats Zuccarello, Elias Pettersson, Kyle Okposo, Thomas Vanek, Vinnie Hinostroza

<b>Scratches</b>
Troy Stecher (Lower Body Injury), Alex Stalock (Healthy)</pre></div>
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
 1 Jonathan Drouin          Jakub Vrana              Andrew Ladd              40     0   0  5  
 2 Cedric Paquette          Anthony Beauvillier      Tyler Ennis              30     0   0  5  
 3 Tanner Kero              Brendan Perlini          Jason Pominville         20     1   2  2  
 4 Steve Bernier            Devante Smith-Pelly      Unknown Player           10     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 David Savard             Jakob Chychrun                                    40     1   2  2  
 2 Mirco Mueller            Brendan Smith                                     30     1   2  2  
 3 Victor Mete              Dalton Prout                                      20     1   2  2  
 4 David Savard             Jakob Chychrun                                    10     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Jonathan Drouin          Jakub Vrana              Andrew Ladd              60     1   2  2  
 2 Cedric Paquette          Anthony Beauvillier      Tyler Ennis              40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 David Savard             Jakob Chychrun                                    60     1   2  2  
 2 Mirco Mueller            Brendan Smith                                     40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Jonathan Drouin          Jakub Vrana              60     1   2  2  
 2 Cedric Paquette          Andrew Ladd              40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 David Savard             Jakob Chychrun           60     1   2  2  
 2 Mirco Mueller            Brendan Smith            40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Jonathan Drouin                                   60     1   2  2  
 2 Jakub Vrana                                       40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 David Savard             Jakob Chychrun           60     1   2  2  
 2 Mirco Mueller            Brendan Smith            40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Jonathan Drouin          Jakub Vrana              60     1   2  2  
 2 Cedric Paquette          Andrew Ladd              40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 David Savard             Jakob Chychrun           60     1   2  2  
 2 Mirco Mueller            Brendan Smith            40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Jonathan Drouin          Jakub Vrana              Andrew Ladd              David Savard             Jakob Chychrun           

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Jonathan Drouin          Jakub Vrana              Andrew Ladd              David Savard             Jakob Chychrun           

<b>Goaltenders</b>
Starting : Louis Domingue           
Backup : Jonathan Quick           

<b>Extra Forwards</b>
Normal : Steve Bernier, Jason Pominville, Unknown Player - PP : Steve Bernier, Jason Pominville - PK : Unknown Player
<b>Extra Defensemen</b>
Normal : Victor Mete, Dalton Prout, Mirco Mueller - PP : Victor Mete - PK : Dalton Prout, Mirco Mueller
<b>Penalty Shots</b>
Jonathan Drouin, Jakub Vrana, Cedric Paquette, Andrew Ladd, Anthony Beauvillier

<b>Scratches</b>
Ryan Callahan (Healthy), Nick Seeler (Healthy), Alex Biega (Left Ankle Injury), Antoine Roussel (Left Foot Injury), Carter Rowney (Strained Left Knee Injury)</pre></div>
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
 1 Sean Couturier           Brad Marchand            Blake Coleman            40     0   2  3  
 2 Radek Faksa              Zach Hyman               Evgenii Dadonov          30     0   2  3  
 3 Bryan Little             Leo Komarov              Justin Abdelkader        24     1   2  2  
 4 Barclay Goodrow          Trevor Moore             Tim Schaller             6      2   3  0  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Dustin Byfuglien         Brayden McNabb                                    50     0   3  2  
 2 Ben Chiarot              Ben Harpur                                        30     0   3  2  
 3 Erik Gudbranson          Matt Roy                                          15     0   4  1  
 4 Ben Chiarot              Erik Gudbranson                                   5      0   4  1  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Sean Couturier           Zach Hyman               Evgenii Dadonov          60     0   0  5  
 2 Radek Faksa              Blake Coleman            Bryan Little             40     1   0  4  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Brad Marchand            Brayden McNabb                                    60     0   0  5  
 2 Ben Harpur               Dustin Byfuglien                                  40     0   0  5  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Radek Faksa              Justin Abdelkader        60     1   4  0  
 2 Sean Couturier           Blake Coleman            40     1   4  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Ben Harpur               Brayden McNabb           60     1   4  0  
 2 Ben Chiarot              Erik Gudbranson          40     1   4  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Sean Couturier                                    60     0   5  0  
 2 Radek Faksa                                       40     0   5  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Ben Harpur               Brayden McNabb           60     0   5  0  
 2 Ben Chiarot              Erik Gudbranson          40     0   5  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Sean Couturier           Brad Marchand            60     1   2  2  
 2 Blake Coleman            Evgenii Dadonov          40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Dustin Byfuglien         Brayden McNabb           60     1   2  2  
 2 Erik Gudbranson          Ben Harpur               40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Sean Couturier           Brad Marchand            Evgenii Dadonov          Dustin Byfuglien         Brayden McNabb           

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Sean Couturier           Blake Coleman            Justin Abdelkader        Ben Harpur               Brayden McNabb           

<b>Goaltenders</b>
Starting : Braden Holtby            
Backup : Joonas Korpisalo         

<b>Extra Forwards</b>
Normal : Blake Coleman, Brad Marchand, Evgenii Dadonov - PP : Brad Marchand, Blake Coleman - PK : Blake Coleman
<b>Extra Defensemen</b>
Normal : Brayden McNabb, Ben Harpur, Erik Gudbranson - PP : Dustin Byfuglien - PK : Brayden McNabb, Ben Harpur
<b>Penalty Shots</b>
Sean Couturier, Brad Marchand, Bryan Little, Evgenii Dadonov, Blake Coleman

<b>Scratches</b>
Par Lindholm (Sprained Right Finger Injury), Brandon Saad (Left Forearm Injury), Jaycob Megna (Healthy)</pre></div>
<h1 class="TeamLinesPro_MTL"><a id="Canadiens">Canadiens</a></h1>
<b>Lines are Complete</b><br />
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
 1 Mark Scheifele           Artemi Panarin           Anthony Mantha           30     1   1  3  
 2 Jeff Carter              Alex DeBrincat           Nikolaj Ehlers           30     1   1  3  
 3 Valtteri Filppula        Brandon Tanev            Clayton Keller           25     1   2  2  
 4 Cal O'Reilly             Daniel Sprong            Melker Karlsson          15     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Ivan Provorov            Aaron Ekblad                                      30     1   2  2  
 2 Marc-Edouard Vlasic      John Klingberg                                    30     1   2  2  
 3 Connor Murphy            Nikita Zadorov                                    25     1   2  2  
 4 Ivan Provorov            Aaron Ekblad                                      15     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Mark Scheifele           Artemi Panarin           Anthony Mantha           50     0   1  4  
 2 Jeff Carter              Alex DeBrincat           Nikolaj Ehlers           50     0   1  4  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 John Klingberg           Aaron Ekblad                                      50     0   2  3  
 2 Ivan Provorov            Marc-Edouard Vlasic                               50     0   2  3  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Valtteri Filppula        Brandon Tanev            50     1   3  1  
 2 Cal O'Reilly             Melker Karlsson          50     1   3  1  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Ivan Provorov            Aaron Ekblad             50     1   3  1  
 2 Marc-Edouard Vlasic      Connor Murphy            50     1   3  1  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Valtteri Filppula                                 50     1   2  2  
 2 Cal O'Reilly                                      50     1   3  1  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Ivan Provorov            Aaron Ekblad             50     1   3  1  
 2 Marc-Edouard Vlasic      Connor Murphy            50     1   3  1  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Mark Scheifele           Artemi Panarin           50     1   2  2  
 2 Jeff Carter              Alex DeBrincat           50     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Ivan Provorov            Aaron Ekblad             50     1   3  1  
 2 Marc-Edouard Vlasic      John Klingberg           50     1   3  1  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Mark Scheifele           Artemi Panarin           Alex DeBrincat           John Klingberg           Aaron Ekblad             

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Valtteri Filppula        Brandon Tanev            Melker Karlsson          Ivan Provorov            Connor Murphy            

<b>Goaltenders</b>
Starting : Ben Bishop               
Backup : Carter Hart              

<b>Extra Forwards</b>
Normal : Alex DeBrincat, Clayton Keller, Artemi Panarin - PP : Clayton Keller, Valtteri Filppula - PK : Jeff Carter
<b>Extra Defensemen</b>
Normal : Marc-Edouard Vlasic, Connor Murphy, Ivan Provorov - PP : Connor Murphy - PK : Nikita Zadorov, John Klingberg
<b>Penalty Shots</b>
Artemi Panarin, Daniel Sprong, Mark Scheifele, Melker Karlsson, Brandon Tanev

<b>Scratches</b>
None
</pre></div>
<h1 class="TeamLinesPro_VAN"><a id="Canucks">Canucks</a></h1>
<b>Lines are Complete</b><br />
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
 1 Auston Matthews          Zack Smith               Mikko Rantanen           35     0   2  3  
 2 Nico Hischier            Kyle Connor              Alex Steen               32     0   2  3  
 3 Nick Bonino              Pavel Zacha              Gustav Nyquist           23     0   3  2  
 4 Ryan Kesler              Jamie McGinn             Cal Clutterbuck          10     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Tyler Myers              Nikita Zaitsev                                    44     0   3  2  
 2 Scott Mayfield           Jake Gardiner                                     33     1   2  2  
 3 Gavin Bayreuther         Stephen Johns                                     23     1   4  0  
 4 Tyler Myers              Nikita Zaitsev                                    0      1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Auston Matthews          Pavel Zacha              Mikko Rantanen           70     0   1  4  
 2 Nico Hischier            Kyle Connor              Alex Steen               30     0   1  4  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Gavin Bayreuther         Jake Gardiner                                     65     0   1  4  
 2 Tyler Myers              Scott Mayfield                                    35     0   1  4  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Nick Bonino              Cal Clutterbuck          70     1   4  0  
 2 Ryan Kesler              Zack Smith               30     1   4  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Nikita Zaitsev           Stephen Johns            65     1   4  0  
 2 Stephen Johns            Gavin Bayreuther         35     1   4  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Nick Bonino                                       60     1   4  0  
 2 Ryan Kesler                                       40     1   4  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Nikita Zaitsev           Stephen Johns            60     0   5  0  
 2 Gavin Bayreuther         Scott Mayfield           40     0   5  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Auston Matthews          Mikko Rantanen           60     1   2  2  
 2 Nico Hischier            Kyle Connor              40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Tyler Myers              Nikita Zaitsev           60     1   2  2  
 2 Stephen Johns            Jake Gardiner            40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Auston Matthews          Zack Smith               Mikko Rantanen           Gavin Bayreuther         Jake Gardiner            

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Nick Bonino              Zack Smith               Cal Clutterbuck          Nikita Zaitsev           Stephen Johns            

<b>Goaltenders</b>
Starting : Henrik Lundqvist         
Backup : Cory Schneider           

<b>Extra Forwards</b>
Normal : Gustav Nyquist, Nick Bonino, Jamie McGinn - PP : Jamie McGinn, Nick Bonino - PK : Pavel Zacha
<b>Extra Defensemen</b>
Normal : Gavin Bayreuther, Nikita Zaitsev, Stephen Johns - PP : Scott Mayfield - PK : Tyler Myers, Stephen Johns
<b>Penalty Shots</b>
Alex Steen, Pavel Zacha, Kyle Connor, Mikko Rantanen, Nick Bonino

<b>Scratches</b>
Matt Benning (Healthy), Jean-Sebastien Dea (Healthy), William Carrier (Healthy)</pre></div>
<h1 class="TeamLinesPro_WSH"><a id="Capitals">Capitals</a></h1>
<b>Lines are Complete</b><br />
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
 1 Jack Eichel              Jamie Benn               T.J. Oshie               35     2   1  2  
 2 Ryan Johansen            Alex Iafallo             Kyle Palmieri            35     2   1  2  
 3 Jason Dickinson          Jujhar Khaira            Carl Grundstrom          20     2   2  1  
 4 Michael Chaput           Gemel Smith              Chandler Stephenson      10     2   3  0  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Drew Doughty             Derek Forbort                                     40     2   2  1  
 2 Jacob Trouba             Alec Martinez                                     30     2   2  1  
 3 David Schlemko           Jacob Larsson                                     20     2   3  0  
 4 Drew Doughty             Jacob Trouba                                      10     2   2  1  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Jack Eichel              Jamie Benn               T.J. Oshie               60     1   0  4  
 2 Ryan Johansen            Alex Iafallo             Kyle Palmieri            40     1   0  4  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Drew Doughty             Jacob Trouba                                      60     1   1  3  
 2 Alec Martinez            Derek Forbort                                     40     1   1  3  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Jason Dickinson          Jujhar Khaira            60     1   4  0  
 2 Michael Chaput           Chandler Stephenson      40     1   4  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Alec Martinez            Jacob Trouba             60     2   3  0  
 2 Drew Doughty             Derek Forbort            40     2   3  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Jason Dickinson                                   60     1   4  0  
 2 Michael Chaput                                    40     1   4  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Alec Martinez            Jacob Trouba             60     2   3  0  
 2 Drew Doughty             Derek Forbort            40     2   3  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Jack Eichel              Jamie Benn               60     2   1  2  
 2 Ryan Johansen            T.J. Oshie               40     2   1  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Drew Doughty             Alec Martinez            60     2   1  2  
 2 Jacob Trouba             Derek Forbort            40     2   2  1  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Jack Eichel              Jamie Benn               T.J. Oshie               Drew Doughty             Jacob Trouba             

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Ryan Johansen            Jamie Benn               T.J. Oshie               Drew Doughty             Alec Martinez            

<b>Goaltenders</b>
Starting : Alexandar Georgiev       
Backup : Petr Mrazek              

<b>Extra Forwards</b>
Normal : Kyle Palmieri, Jamie Benn, T.J. Oshie - PP : Ryan Johansen, Kyle Palmieri - PK : Jamie Benn
<b>Extra Defensemen</b>
Normal : Jacob Trouba, Alec Martinez, Drew Doughty - PP : Drew Doughty - PK : Jacob Trouba, Alec Martinez
<b>Penalty Shots</b>
T.J. Oshie, Ryan Johansen, Jamie Benn, Jack Eichel, Drew Doughty

<b>Scratches</b>
Sean Walker (Healthy), Kevin Gravel (Healthy), Curtis McElhinney (Left Leg Injury)</pre></div>
<h1 class="TeamLinesPro_ARI"><a id="Coyotes">Coyotes</a></h1>
<b>Lines are Complete</b><br />
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
 1 Mika Zibanejad           Kevin Hayes              Nikita Kucherov          40     1   2  2  
 2 Leon Draisaitl           Jeff Skinner             William Nylander         30     1   2  2  
 3 Kyle Turris              Oskar Sundqvist          Dylan Strome             20     1   2  2  
 4 Nate Thompson            Kevin Fiala              Dale Weise               10     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Oliver Ekman-Larsson     Cody Ceci                                         40     1   2  2  
 2 Thomas Chabot            Jay Bouwmeester                                   30     1   2  2  
 3 John Gilmour             Carl Gunnarsson                                   20     1   2  2  
 4 Cody Ceci                Oliver Ekman-Larsson                              10     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Mika Zibanejad           Kevin Hayes              Nikita Kucherov          60     1   2  2  
 2 Leon Draisaitl           Jeff Skinner             Dylan Strome             40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Oliver Ekman-Larsson     Cody Ceci                                         60     1   2  2  
 2 Thomas Chabot            Jay Bouwmeester                                   40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Mika Zibanejad           Oskar Sundqvist          60     1   2  2  
 2 Kevin Hayes              Leon Draisaitl           40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Oliver Ekman-Larsson     Cody Ceci                60     1   2  2  
 2 Carl Gunnarsson          Jay Bouwmeester          40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Mika Zibanejad                                    60     1   2  2  
 2 Kevin Hayes                                       40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Oliver Ekman-Larsson     Cody Ceci                60     1   2  2  
 2 Carl Gunnarsson          Jay Bouwmeester          40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Mika Zibanejad           Nikita Kucherov          60     1   2  2  
 2 Leon Draisaitl           Kevin Hayes              40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Oliver Ekman-Larsson     Cody Ceci                60     1   2  2  
 2 Thomas Chabot            Jay Bouwmeester          40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Leon Draisaitl           Kevin Hayes              Nikita Kucherov          Oliver Ekman-Larsson     Thomas Chabot            

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Mika Zibanejad           Kevin Hayes              Oskar Sundqvist          Jay Bouwmeester          Cody Ceci                

<b>Goaltenders</b>
Starting : Tuukka Rask              
Backup : Keith Kinkaid            

<b>Extra Forwards</b>
Normal : William Nylander, Mika Zibanejad, Kyle Turris - PP : Jeff Skinner, Dylan Strome - PK : Dale Weise
<b>Extra Defensemen</b>
Normal : Jay Bouwmeester, Thomas Chabot, Cody Ceci - PP : Thomas Chabot - PK : Cody Ceci, Carl Gunnarsson
<b>Penalty Shots</b>
Leon Draisaitl, Mika Zibanejad, Nikita Kucherov, Kevin Hayes, Jeff Skinner

<b>Scratches</b>
Niklas Hjalmarsson (Broken Left Index Finger Injury)</pre></div>
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
 1 Ryan Getzlaf             Timo Meier               Patric Hornqvist         40     1   2  2  
 2 William Karlsson         Michael Grabner          Matt Moulson             30     1   2  2  
 3 Riley Sheahan            Brandon Dubinsky         Michael Raffl            20     1   2  2  
 4 Martin Hanzal            Nick Ritchie             Jimmy Vesey              10     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Darnell Nurse            Adam Larsson                                      40     1   2  2  
 2 Chris Tanev              Maxime Lajoie                                     30     1   2  2  
 3 Christian Folin          Michal Kempny                                     20     1   2  2  
 4 Darnell Nurse            Adam Larsson                                      10     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Ryan Getzlaf             Timo Meier               Patric Hornqvist         60     1   2  2  
 2 William Karlsson         Jimmy Vesey              Matt Moulson             40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Darnell Nurse            Adam Larsson                                      60     1   2  2  
 2 Chris Tanev              Maxime Lajoie                                     40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Brandon Dubinsky         Michael Grabner          60     1   2  2  
 2 Riley Sheahan            Michael Raffl            40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Darnell Nurse            Adam Larsson             60     1   2  2  
 2 Chris Tanev              Maxime Lajoie            40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Brandon Dubinsky                                  60     1   2  2  
 2 Riley Sheahan                                     40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Darnell Nurse            Adam Larsson             60     1   2  2  
 2 Chris Tanev              Maxime Lajoie            40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Ryan Getzlaf             Timo Meier               60     1   2  2  
 2 William Karlsson         Patric Hornqvist         40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Darnell Nurse            Adam Larsson             60     1   2  2  
 2 Chris Tanev              Maxime Lajoie            40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Ryan Getzlaf             Timo Meier               Patric Hornqvist         Darnell Nurse            Adam Larsson             

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Brandon Dubinsky         Michael Grabner          Matt Moulson             Darnell Nurse            Adam Larsson             

<b>Goaltenders</b>
Starting : Robin Lehner             
Backup : Garret Sparks            

<b>Extra Forwards</b>
Normal : Michael Grabner, Brandon Dubinsky, Riley Sheahan - PP : Michael Grabner, Brandon Dubinsky - PK : Riley Sheahan
<b>Extra Defensemen</b>
Normal : Christian Folin, Michal Kempny, Chris Tanev - PP : Christian Folin - PK : Michal Kempny, Chris Tanev
<b>Penalty Shots</b>
Ryan Getzlaf, William Karlsson, Timo Meier, Patric Hornqvist, Jimmy Vesey

<b>Scratches</b>
Colby Cave (Healthy), Markus Nutivaara (Healthy), Patrick Brown (Healthy)</pre></div>
<h1 class="TeamLinesPro_ANH"><a id="Ducks">Ducks</a></h1>
<b>Lines are Complete</b><br />
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
 1 Sean Monahan             Alex Chiasson            Jake Guentzel            32     0   2  3  
 2 Nazem Kadri              Johnny Gaudreau          Tyler Bertuzzi           32     0   2  3  
 3 Travis Zajac             Mattias Janmark          Andrew Cogliano          25     0   3  2  
 4 Jay Beagle               Kenny Agostino           Devin Shore              11     0   3  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Morgan Rielly            Josh Morrissey                                    30     0   3  2  
 2 Jake Muzzin              Charlie McAvoy                                    30     0   3  2  
 3 Colin Miller             Kris Russell                                      25     0   4  1  
 4 Josh Morrissey           Morgan Rielly                                     15     0   2  3  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Sean Monahan             Johnny Gaudreau          Jake Guentzel            60     0   1  4  
 2 Nazem Kadri              Alex Chiasson            Tyler Bertuzzi           40     0   1  4  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Morgan Rielly            Josh Morrissey                                    60     0   2  3  
 2 Charlie McAvoy           Colin Miller                                      40     0   2  3  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Jay Beagle               Andrew Cogliano          50     0   4  1  
 2 Travis Zajac             Mattias Janmark          50     0   4  1  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Kris Russell             Josh Morrissey           60     0   5  0  
 2 Charlie McAvoy           Jake Muzzin              40     0   5  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Jay Beagle                                        60     0   5  0  
 2 Travis Zajac                                      40     0   5  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Kris Russell             Josh Morrissey           60     0   5  0  
 2 Charlie McAvoy           Jake Muzzin              40     0   4  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Travis Zajac             Johnny Gaudreau          60     0   2  3  
 2 Nazem Kadri              Jake Guentzel            40     0   2  3  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Morgan Rielly            Josh Morrissey           60     0   2  3  
 2 Charlie McAvoy           Jake Muzzin              40     0   2  3  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Sean Monahan             Johnny Gaudreau          Jake Guentzel            Morgan Rielly            Josh Morrissey           

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Sean Monahan             Johnny Gaudreau          Jake Guentzel            Morgan Rielly            Josh Morrissey           

<b>Goaltenders</b>
Starting : Mike Smith               
Backup : Martin Jones             

<b>Extra Forwards</b>
Normal : Tyler Bertuzzi, Nazem Kadri, Devin Shore - PP : Tyler Bertuzzi, Nazem Kadri - PK : Andrew Cogliano
<b>Extra Defensemen</b>
Normal : Colin Miller, Jake Muzzin, Charlie McAvoy - PP : Colin Miller - PK : Jake Muzzin, Charlie McAvoy
<b>Penalty Shots</b>
Johnny Gaudreau, Sean Monahan, Travis Zajac, Jake Guentzel, Nazem Kadri

<b>Scratches</b>
Zach Aston-Reese (Healthy), Mark Jankowski (Healthy)</pre></div>
<h1 class="TeamLinesPro_CGY"><a id="Flames">Flames</a></h1>
<b>Lines are Complete</b><br />
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
 1 Phillip Danault          David Perron             Viktor Arvidsson         41     0   3  2  
 2 Dylan Larkin             Taylor Hall              Tom Wilson               38     0   3  2  
 3 Adam Lowry               Andreas Johnsson         Justin Williams          14     0   2  3  
 4 Andrew Copp              Austin Watson            Markus Granlund          7      1   3  1  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Erik Karlsson            Brady Skjei                                       40     0   4  1  
 2 Jaccob Slavin            Roman Polak                                       40     0   4  1  
 3 Mathew Dumba             Steven Santini                                    10     0   5  0  
 4 Erik Karlsson            Jaccob Slavin                                     10     0   3  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Dylan Larkin             Taylor Hall              Viktor Arvidsson         70     0   0  5  
 2 Phillip Danault          Andreas Johnsson         Tom Wilson               30     0   1  4  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Erik Karlsson            Mathew Dumba                                      80     0   0  5  
 2 Brady Skjei              Jaccob Slavin                                     20     0   1  4  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Adam Lowry               Austin Watson            60     0   5  0  
 2 Phillip Danault          Markus Granlund          40     0   5  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Jaccob Slavin            Roman Polak              72     0   5  0  
 2 Steven Santini           Brady Skjei              28     0   5  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Adam Lowry                                        60     0   5  0  
 2 Phillip Danault                                   40     0   5  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Jaccob Slavin            Roman Polak              74     0   5  0  
 2 Steven Santini           Brady Skjei              26     0   5  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Dylan Larkin             Taylor Hall              60     1   2  2  
 2 Phillip Danault          Viktor Arvidsson         40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Erik Karlsson            Mathew Dumba             60     1   2  2  
 2 Brady Skjei              Jaccob Slavin            40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Dylan Larkin             Taylor Hall              Viktor Arvidsson         Erik Karlsson            Jaccob Slavin            

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Adam Lowry               Markus Granlund          Austin Watson            Brady Skjei              Jaccob Slavin            

<b>Goaltenders</b>
Starting : Pekka Rinne              
Backup : Casey DeSmith            

<b>Extra Forwards</b>
Normal : Taylor Hall, Dylan Larkin, Viktor Arvidsson - PP : Markus Granlund, Justin Williams - PK : Dylan Larkin
<b>Extra Defensemen</b>
Normal : Mathew Dumba, Steven Santini, Brady Skjei - PP : Mathew Dumba - PK : Brady Skjei, Steven Santini
<b>Penalty Shots</b>
Andreas Johnsson, Markus Granlund, Erik Karlsson, David Perron, Andrew Copp

<b>Scratches</b>
Devon Toews (Healthy), Jonathon Merrill (Healthy), Garnet Hathaway (Healthy)</pre></div>
<h1 class="TeamLinesPro_PHL"><a id="Flyers">Flyers</a></h1>
<b>Lines are Complete</b><br />
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
 1 Brock Nelson             Max Domi                 Nick Bjugstad            40     1   2  2  
 2 Pierre-Luc Dubois        Pat Maroon               Ryan Strome              30     1   2  2  
 3 Cody Eakin               Loui Eriksson            Joel Eriksson Ek         20     1   2  2  
 4 Trevor Lewis             Conor Sheary             Brock Nelson             10     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Alexander Edler          Keith Yandle                                      40     1   2  2  
 2 Radko Gudas              Jonas Brodin                                      30     1   2  2  
 3 Jonathan Ericsson        Rasmus Dahlin                                     20     1   2  2  
 4 Alexander Edler          Keith Yandle                                      10     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Brock Nelson             Max Domi                 Nick Bjugstad            60     1   2  2  
 2 Pierre-Luc Dubois        Pat Maroon               Ryan Strome              40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Alexander Edler          Keith Yandle                                      60     1   2  2  
 2 Radko Gudas              Jonas Brodin                                      40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Brock Nelson             Max Domi                 60     1   2  2  
 2 Pierre-Luc Dubois        Cody Eakin               40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Alexander Edler          Keith Yandle             60     1   2  2  
 2 Radko Gudas              Jonas Brodin             40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Brock Nelson                                      60     1   2  2  
 2 Max Domi                                          40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Alexander Edler          Keith Yandle             60     1   2  2  
 2 Radko Gudas              Jonas Brodin             40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Brock Nelson             Max Domi                 60     1   2  2  
 2 Pierre-Luc Dubois        Cody Eakin               40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Alexander Edler          Keith Yandle             60     1   2  2  
 2 Radko Gudas              Jonas Brodin             40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Brock Nelson             Max Domi                 Nick Bjugstad            Alexander Edler          Keith Yandle             

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Brock Nelson             Max Domi                 Nick Bjugstad            Alexander Edler          Keith Yandle             

<b>Goaltenders</b>
Starting : Jaroslav Halak           
Backup : Mikko Koskinen           

<b>Extra Forwards</b>
Normal : Maxime Comtois, Loui Eriksson, Conor Sheary - PP : Maxime Comtois, Loui Eriksson - PK : Conor Sheary
<b>Extra Defensemen</b>
Normal : Jonathan Ericsson, Rasmus Dahlin, Radko Gudas - PP : Jonathan Ericsson - PK : Rasmus Dahlin, Radko Gudas
<b>Penalty Shots</b>
Brock Nelson, Max Domi, Pierre-Luc Dubois, Cody Eakin, Nick Bjugstad

<b>Scratches</b>
Matt Martin (Healthy), Andrej Sekera (Healthy), Kailer Yamamoto (Healthy)</pre></div>
<h1 class="TeamLinesPro_VGK"><a id="GoldenKnights">Golden Knights</a></h1>
<b>Lines are Complete</b><br />
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
 1 Nicklas Backstrom        Tomas Tatar              Marcus Sorensen          25     1   2  2  
 2 Nolan Patrick            Patrick Marleau          Jordan Eberle            25     1   2  2  
 3 Colton Sissons           Tanner Pearson           Craig Smith              25     2   2  1  
 4 Scott Laughton           Milan Lucic              Nic Dowd                 25     2   2  1  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Mark Giordano            Travis Hamonic                                    30     1   2  2  
 2 Ryan Murray              Alex Goligoski                                    30     1   2  2  
 3 Travis Sanheim           Luke Schenn                                       30     2   2  1  
 4 Mark Giordano            Alex Goligoski                                    10     2   2  1  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Nicklas Backstrom        Tomas Tatar              Jordan Eberle            65     0   1  4  
 2 Nolan Patrick            Patrick Marleau          Craig Smith              35     0   1  4  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Mark Giordano            Alex Goligoski                                    65     0   1  4  
 2 Ryan Murray              Travis Hamonic                                    35     0   1  4  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Colton Sissons           Scott Laughton           70     1   4  0  
 2 Nicklas Backstrom        Nic Dowd                 30     1   4  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Ryan Murray              Travis Hamonic           60     1   4  0  
 2 Mark Giordano            Alex Goligoski           40     1   4  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Colton Sissons                                    60     0   5  0  
 2 Scott Laughton                                    40     0   5  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Ryan Murray              Travis Hamonic           60     0   5  0  
 2 Mark Giordano            Alex Goligoski           40     0   5  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Nicklas Backstrom        Tomas Tatar              50     1   2  2  
 2 Colton Sissons           Jordan Eberle            50     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Mark Giordano            Alex Goligoski           50     1   2  2  
 2 Ryan Murray              Travis Hamonic           50     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Nicklas Backstrom        Tomas Tatar              Jordan Eberle            Mark Giordano            Alex Goligoski           

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Colton Sissons           Scott Laughton           Nic Dowd                 Ryan Murray              Travis Hamonic           

<b>Goaltenders</b>
Starting : Jack Campbell            
Backup : Antti Raanta             

<b>Extra Forwards</b>
Normal : Nicklas Backstrom, Tomas Tatar, Jordan Eberle - PP : Nicklas Backstrom, Tomas Tatar - PK : Nicklas Backstrom
<b>Extra Defensemen</b>
Normal : Mark Giordano, Alex Goligoski, Travis Hamonic - PP : Mark Giordano - PK : Mark Giordano, Alex Goligoski
<b>Penalty Shots</b>
Alex Goligoski, Mark Giordano, Nolan Patrick, Nicklas Backstrom, Jordan Eberle

<b>Scratches</b>
Johnny Boychuk (Healthy)</pre></div>
<h1 class="TeamLinesPro_CAR"><a id="Hurricanes">Hurricanes</a></h1>
<b>Lines are Complete</b><br />
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
 1 Paul Stastny             Mathieu Perreault        Wayne Simmonds           40     1   2  2  
 2 David Backes             James Neal               Bobby Ryan               30     1   2  2  
 3 Greg McKegg              Pontus Aberg             Drake Caggiula           20     1   2  2  
 4 Byron Froese             Nick Cousins             Ryan Hartman             10     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Calvin de Haan           Slater Koekkoek                                   40     1   2  2  
 2 Joakim Ryan              Connor Carrick                                    30     1   2  2  
 3 Ilya Lyubushkin          MacKenzie Weegar                                  20     1   2  2  
 4 Calvin de Haan           Slater Koekkoek                                   10     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Paul Stastny             Wayne Simmonds           Bobby Ryan               60     1   2  2  
 2 Pontus Aberg             Mathieu Perreault        Ryan Hartman             40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 MacKenzie Weegar         Connor Carrick                                    60     1   2  2  
 2 Slater Koekkoek          Calvin de Haan                                    40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Paul Stastny             Bobby Ryan               60     1   2  2  
 2 Drake Caggiula           Pontus Aberg             40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Connor Carrick           Calvin de Haan           60     1   2  2  
 2 Joakim Ryan              Slater Koekkoek          40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Wayne Simmonds                                    60     1   2  2  
 2 Nick Cousins                                      40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Slater Koekkoek          Calvin de Haan           60     1   2  2  
 2 MacKenzie Weegar         Connor Carrick           40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Wayne Simmonds           Paul Stastny             60     1   2  2  
 2 Bobby Ryan               James Neal               40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Calvin de Haan           Slater Koekkoek          60     1   2  2  
 2 Connor Carrick           Joakim Ryan              40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Paul Stastny             Wayne Simmonds           Bobby Ryan               Joakim Ryan              Connor Carrick           

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Paul Stastny             Wayne Simmonds           Bobby Ryan               Joakim Ryan              Connor Carrick           

<b>Goaltenders</b>
Starting : Jonathan Bernier         
Backup : Pavel Francouz           

<b>Extra Forwards</b>
Normal : Bobby Ryan, Paul Stastny, Wayne Simmonds - PP : Bobby Ryan, Wayne Simmonds - PK : Paul Stastny
<b>Extra Defensemen</b>
Normal : Connor Carrick, Calvin de Haan, Slater Koekkoek - PP : Slater Koekkoek - PK : Connor Carrick, Calvin de Haan
<b>Penalty Shots</b>
Mathieu Perreault, Paul Stastny, Wayne Simmonds, Bobby Ryan, Ryan Hartman

<b>Scratches</b>
Boo Nieves (Healthy), Jan Rutta (Healthy), Tucker Poolman (Healthy)</pre></div>
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
 1 Ryan O'Reilly            Jakub Voracek            Joe Pavelski             40     0   2  3  
 2 Steven Stamkos           Daniel Carr              Alexander Radulov        35     1   2  2  
 3 Mathew Barzal            Josh Anderson            Nikolay Goldobin         15     1   2  2  
 4 Brad Richardson          Calle Jarnkrok           Connor Brickley          10     1   4  0  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Victor Hedman            Ryan Ellis                                        40     1   2  2  
 2 Colton Parayko           Unknown Player                                    30     1   2  2  
 3 Mark Barberio            Dylan DeMelo                                      20     1   2  2  
 4 Victor Hedman            Colton Parayko                                    10     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Steven Stamkos           Jakub Voracek            Joe Pavelski             60     1   2  2  
 2 Ryan O'Reilly            Mathew Barzal            Alexander Radulov        40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Victor Hedman            Ryan Ellis                                        60     1   2  2  
 2 Colton Parayko           Mark Barberio                                     40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Ryan O'Reilly            Brad Richardson          60     1   2  2  
 2 Steven Stamkos           Jakub Voracek            40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Victor Hedman            Mark Barberio            60     1   2  2  
 2 Ryan Ellis               Unknown Player           40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Brad Richardson                                   60     1   2  2  
 2 Steven Stamkos                                    40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Victor Hedman            Mark Barberio            60     1   2  2  
 2 Dylan DeMelo             Ryan Ellis               40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Ryan O'Reilly            Steven Stamkos           60     1   2  2  
 2 Joe Pavelski             Alexander Radulov        40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Victor Hedman            Ryan Ellis               60     1   2  2  
 2 Unknown Player           Colton Parayko           40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Steven Stamkos           Jakub Voracek            Joe Pavelski             Victor Hedman            Ryan Ellis               

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Steven Stamkos           Jakub Voracek            Joe Pavelski             Victor Hedman            Ryan Ellis               

<b>Goaltenders</b>
Starting : Michael Hutchinson       
Backup : Brandon Halverson        

<b>Extra Forwards</b>
Normal : Jakub Voracek, Steven Stamkos, Joe Pavelski - PP : Jakub Voracek, Steven Stamkos - PK : Steven Stamkos
<b>Extra Defensemen</b>
Normal : Mark Barberio, Victor Hedman, Unknown Player - PP : Mark Barberio - PK : Dylan DeMelo, Victor Hedman
<b>Penalty Shots</b>
Jakub Voracek, Steven Stamkos, Joe Pavelski, Alexander Radulov, Mathew Barzal

<b>Scratches</b>
Matthew Nieto (Healthy), Scott Harrington (Healthy), Connor Brown (Healthy), Ryan Pulock (Sports Hernia Injury), Philipp Grubauer (Healthy)</pre></div>
<h1 class="TeamLinesPro_WPG"><a id="Jets">Jets</a></h1>
<b>Lines are Complete</b><br />
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
 1 Jonathan Toews           Matthew Tkachuk          Mikkel Boedker           40     1   1  3  
 2 Eric Staal               Kasperi Kapanen          Erik Haula               30     1   2  2  
 3 Jesperi Kotkaniemi       Markus Hannikainen       Joonas Donskoi           20     1   3  1  
 4 Jonathan Toews           Roope Hintz              Eeli Tolvanen            10     2   2  1  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Sami Vatanen             Kevin Shattenkirk                                 40     1   1  3  
 2 Olli Maatta              Mike Green                                        30     1   2  2  
 3 Rob O'Gara               Julius Honka                                      20     1   3  1  
 4 Sami Vatanen             Mike Green                                        10     2   2  1  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Jonathan Toews           Eric Staal               Mikkel Boedker           60     1   2  2  
 2 Eric Staal               Matthew Tkachuk          Kasperi Kapanen          40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Sami Vatanen             Mike Green                                        60     1   2  2  
 2 Olli Maatta              Kevin Shattenkirk                                 40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Eric Staal               Markus Hannikainen       60     1   2  2  
 2 Matthew Tkachuk          Mikkel Boedker           40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Sami Vatanen             Olli Maatta              60     1   2  2  
 2 Julius Honka             Kevin Shattenkirk        40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Matthew Tkachuk                                   60     1   2  2  
 2 Mikkel Boedker                                    40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Sami Vatanen             Olli Maatta              60     1   2  2  
 2 Julius Honka             Kevin Shattenkirk        40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Jonathan Toews           Kasperi Kapanen          60     1   2  2  
 2 Matthew Tkachuk          Mikkel Boedker           40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Sami Vatanen             Mike Green               60     1   2  2  
 2 Rob O'Gara               Kevin Shattenkirk        40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Jonathan Toews           Eric Staal               Mikkel Boedker           Sami Vatanen             Mike Green               

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Markus Hannikainen       Eric Staal               Mikkel Boedker           Sami Vatanen             Olli Maatta              

<b>Goaltenders</b>
Starting : Christopher Gibson       
Backup : Matt Murray              

<b>Extra Forwards</b>
Normal : Jonathan Toews, Matthew Tkachuk, Mikkel Boedker - PP : Kasperi Kapanen, Eric Staal - PK : Mikkel Boedker
<b>Extra Defensemen</b>
Normal : Rob O'Gara, Sami Vatanen, Mike Green - PP : Rob O'Gara - PK : Olli Maatta, Kevin Shattenkirk
<b>Penalty Shots</b>
Eric Staal, Erik Haula, Matthew Tkachuk, Mikkel Boedker, Jonathan Toews

<b>Scratches</b>
Miro Heiskanen (Healthy), Chris Thorburn (Severed Right Wrist Tendon Injury), Juuso Riikola (Healthy), Ben Street (Torn Left ACL Injury), Juuse Saros (Left Eye Injury)</pre></div>
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
 1 Nathan MacKinnon         Alex Ovechkin            Mitch Marner             40     0   2  3  
 2 Elias Lindholm           Jonathan Huberdeau       Brock Boeser             30     0   2  3  
 3 Yanni Gourde             Alex Galchenyuk          Miles Wood               20     1   2  2  
 4 Frederik Gauthier        Jordan Greenway          Zack Kassian             10     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 P.K. Subban              Seth Jones                                        40     1   2  2  
 2 Neal Pionk               Nate Schmidt                                      30     1   2  2  
 3 Adam Pelech              Christian Wolanin                                 20     1   2  2  
 4 P.K. Subban              Seth Jones                                        10     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Nathan MacKinnon         Alex Ovechkin            Mitch Marner             60     0   0  5  
 2 Elias Lindholm           Jonathan Huberdeau       Brock Boeser             40     0   0  5  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 P.K. Subban              Seth Jones                                        60     0   2  3  
 2 Neal Pionk               Nate Schmidt                                      40     0   2  3  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Yanni Gourde             Zack Kassian             60     1   4  0  
 2 Frederik Gauthier        Miles Wood               40     1   4  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 P.K. Subban              Seth Jones               60     1   4  0  
 2 Neal Pionk               Nate Schmidt             40     1   4  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Yanni Gourde                                      60     0   5  0  
 2 Frederik Gauthier                                 40     0   5  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 P.K. Subban              Seth Jones               60     0   5  0  
 2 Neal Pionk               Nate Schmidt             40     0   5  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Nathan MacKinnon         Alex Ovechkin            60     0   2  3  
 2 Elias Lindholm           Jonathan Huberdeau       40     0   2  3  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 P.K. Subban              Seth Jones               60     1   2  2  
 2 Neal Pionk               Nate Schmidt             40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Nathan MacKinnon         Alex Ovechkin            Mitch Marner             P.K. Subban              Seth Jones               

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Nathan MacKinnon         Alex Ovechkin            Elias Lindholm           P.K. Subban              Seth Jones               

<b>Goaltenders</b>
Starting : Devan Dubnyk             
Backup : Malcolm Subban           

<b>Extra Forwards</b>
Normal : Brock Boeser, Yanni Gourde, Zack Kassian - PP : Brock Boeser, Yanni Gourde - PK : Zack Kassian
<b>Extra Defensemen</b>
Normal : Adam Pelech, Christian Wolanin, Neal Pionk - PP : Adam Pelech - PK : Christian Wolanin, Neal Pionk
<b>Penalty Shots</b>
Nathan MacKinnon, Alex Ovechkin, Elias Lindholm, Jonathan Huberdeau, Mitch Marner

<b>Scratches</b>
Riley Nash (Healthy)</pre></div>
<h1 class="TeamLinesPro_TBL"><a id="Lightning">Lightning</a></h1>
<b>Lines are Complete</b><br />
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
 1 John Tavares             Mike Hoffman             Cam Atkinson             40     0   3  2  
 2 Derick Brassard          Ondrej Palat             Frank Vatrano            30     0   3  2  
 3 Vladimir Sobotka         Sam Gagner               Josh Leivo               20     0   3  2  
 4 Brandon Sutter           Miikka Salomaki          Magnus Paajarvi          10     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Esa Lindell              Zach Bogosian                                     40     1   4  0  
 2 Kevin Connauton          Adam McQuaid                                      30     1   4  0  
 3 Justin Falk              Marc Methot                                       20     1   4  0  
 4 Kevin Connauton          Adam McQuaid                                      10     1   4  0  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 John Tavares             Cam Atkinson             Mike Hoffman             60     0   1  4  
 2 Derick Brassard          Ondrej Palat             Josh Leivo               40     0   1  4  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Esa Lindell              Frank Vatrano                                     60     0   1  4  
 2 Sam Gagner               Adam McQuaid                                      40     0   1  4  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Brandon Sutter           Magnus Paajarvi          55     1   4  0  
 2 Vladimir Sobotka         Miikka Salomaki          45     1   4  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Esa Lindell              Zach Bogosian            55     0   5  0  
 2 Kevin Connauton          Adam McQuaid             45     0   5  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Brandon Sutter                                    60     0   5  0  
 2 Vladimir Sobotka                                  40     0   5  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Esa Lindell              Zach Bogosian            60     0   5  0  
 2 Kevin Connauton          Adam McQuaid             40     0   5  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 John Tavares             Mike Hoffman             60     0   2  3  
 2 Derick Brassard          Cam Atkinson             40     0   2  3  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Esa Lindell              Zach Bogosian            60     1   2  2  
 2 Justin Falk              Marc Methot              40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   John Tavares             Mike Hoffman             Cam Atkinson             Esa Lindell              Zach Bogosian            

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Brandon Sutter           Miikka Salomaki          Magnus Paajarvi          Esa Lindell              Zach Bogosian            

<b>Goaltenders</b>
Starting : Brian Elliott            
Backup : Connor Hellebuyck        

<b>Extra Forwards</b>
Normal : John Tavares, Cam Atkinson, Mike Hoffman - PP : Frank Vatrano, John Tavares - PK : Magnus Paajarvi
<b>Extra Defensemen</b>
Normal : Justin Falk, Marc Methot, Kevin Connauton - PP : Justin Falk - PK : Marc Methot, Kevin Connauton
<b>Penalty Shots</b>
John Tavares, Cam Atkinson, Mike Hoffman, Josh Leivo, Sam Gagner

<b>Scratches</b>
Tyler Motte (Healthy)</pre></div>
<h1 class="TeamLinesPro_TOR"><a id="MapleLeafs">Maple Leafs</a></h1>
<b>Lines are Complete</b><br />
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
 1 Tomas Hertl              Brayden Schenn           Brendan Gallagher        35     1   2  2  
 2 David Krejci             Boone Jenner             Sam Bennett              30     1   2  2  
 3 Casey Cizikas            Sean Kuraly              Tyler Pitlick            25     1   2  2  
 4 Christian Dvorak         Brett Howden             Noel Acciari             10     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Alex Pietrangelo         Shea Theodore                                     40     1   2  2  
 2 Zdeno Chara              Mike Matheson                                     35     1   2  2  
 3 Patrik Nemeth            Mark Borowiecki                                   25     2   2  1  
 4 Alex Pietrangelo         Shea Theodore                                     0      1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 David Krejci             Brayden Schenn           Tomas Hertl              65     0   1  4  
 2 Casey Cizikas            Boone Jenner             Brendan Gallagher        35     0   1  4  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Alex Pietrangelo         Shea Theodore                                     60     0   2  3  
 2 Zdeno Chara              Mike Matheson                                     40     0   2  3  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Casey Cizikas            Tomas Hertl              60     0   4  1  
 2 Boone Jenner             Noel Acciari             40     0   4  1  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Mike Matheson            Zdeno Chara              60     0   4  1  
 2 Mark Borowiecki          Patrik Nemeth            40     0   4  1  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Casey Cizikas                                     60     0   5  0  
 2 Boone Jenner                                      40     0   5  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Mike Matheson            Zdeno Chara              60     0   5  0  
 2 Mark Borowiecki          Patrik Nemeth            40     0   5  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Tomas Hertl              Brayden Schenn           60     1   2  2  
 2 David Krejci             Brendan Gallagher        40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Alex Pietrangelo         Shea Theodore            60     0   4  1  
 2 Zdeno Chara              Mike Matheson            40     0   4  1  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   David Krejci             Brayden Schenn           Tomas Hertl              Alex Pietrangelo         Shea Theodore            

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Casey Cizikas            Boone Jenner             Tomas Hertl              Alex Pietrangelo         Zdeno Chara              

<b>Goaltenders</b>
Starting : Frederik Andersen        
Backup : James Reimer             

<b>Extra Forwards</b>
Normal : Boone Jenner, Tomas Hertl, Casey Cizikas - PP : Tomas Hertl, Brayden Schenn - PK : Casey Cizikas
<b>Extra Defensemen</b>
Normal : Zdeno Chara, Alex Pietrangelo, Mike Matheson - PP : Alex Pietrangelo - PK : Mike Matheson, Alex Pietrangelo
<b>Penalty Shots</b>
Tomas Hertl, Brayden Schenn, Boone Jenner, Casey Cizikas, Shea Theodore

<b>Scratches</b>
Travis Dermott (Healthy), Jordan Martinook (Healthy)</pre></div>
<h1 class="TeamLinesPro_EDM"><a id="Oilers">Oilers</a></h1>
<b>Lines are Complete</b><br />
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
 1 Derek Stepan             Ryan Nugent-Hopkins      Blake Wheeler            40     1   2  2  
 2 Lars Eller               Dustin Brown             Mikael Granlund          30     1   2  2  
 3 Anthony Cirelli          Nick Foligno             Richard Panik            20     1   2  2  
 4 Jean-Gabriel Pageau      Marcus Foligno           Luke Glendening          10     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Jeff Petry               Mattias Ekholm                                    40     1   2  2  
 2 Brandon Montour          Noah Hanifin                                      30     1   2  2  
 3 John Moore               Ron Hainsey                                       20     1   2  2  
 4 Brandon Montour          Noah Hanifin                                      10     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Ryan Nugent-Hopkins      Dustin Brown             Blake Wheeler            60     1   2  2  
 2 Derek Stepan             Nick Foligno             Mikael Granlund          40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Jeff Petry               Mattias Ekholm                                    60     1   2  2  
 2 Brandon Montour          Noah Hanifin                                      40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Jean-Gabriel Pageau      Nick Foligno             60     1   2  2  
 2 Lars Eller               Dustin Brown             40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Jeff Petry               Mattias Ekholm           60     1   2  2  
 2 John Moore               Ron Hainsey              40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Jean-Gabriel Pageau                               60     1   2  2  
 2 Lars Eller                                        40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Jeff Petry               Mattias Ekholm           60     1   2  2  
 2 John Moore               Ron Hainsey              40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Lars Eller               Mikael Granlund          60     1   2  2  
 2 Ryan Nugent-Hopkins      Blake Wheeler            40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Jeff Petry               Mattias Ekholm           60     1   2  2  
 2 Brandon Montour          Noah Hanifin             40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Ryan Nugent-Hopkins      Dustin Brown             Blake Wheeler            Jeff Petry               Mattias Ekholm           

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Lars Eller               Nick Foligno             Dustin Brown             Jeff Petry               Mattias Ekholm           

<b>Goaltenders</b>
Starting : John Gibson              
Backup : Martin Ouellette         

<b>Extra Forwards</b>
Normal : Nick Foligno, Richard Panik, Mikael Granlund - PP : Lars Eller, Richard Panik - PK : Ryan Nugent-Hopkins
<b>Extra Defensemen</b>
Normal : Brandon Montour, Noah Hanifin, John Moore - PP : Noah Hanifin - PK : Brandon Montour, Ron Hainsey
<b>Penalty Shots</b>
Blake Wheeler, Ryan Nugent-Hopkins, Dustin Brown, Derek Stepan, Lars Eller

<b>Scratches</b>
None
</pre></div>
<h1 class="TeamLinesPro_FLA"><a id="Panthers">Panthers</a></h1>
<b>Lines are Complete</b><br />
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
 1 Tyler Seguin             Lawson Crouse            Josh Bailey              25     1   1  3  
 2 Carl Soderberg           Marcus Johansson         Darren Helm              25     1   1  3  
 3 Tyler Bozak              Jake Debrusk             Curtis Lazar             25     1   1  3  
 4 Cooper Marody            Paul Carey               Michael McCarron         25     1   1  3  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Brent Burns              Damon Severson                                    30     1   4  0  
 2 Brian Dumoulin           Justin Schultz                                    30     1   4  0  
 3 Michael Stone            Xavier Ouellet                                    30     1   4  0  
 4 Brent Burns              Damon Severson                                    10     1   4  0  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Tyler Bozak              Josh Bailey              Tyler Seguin             60     1   0  4  
 2 Cooper Marody            Jake Debrusk             Marcus Johansson         40     1   0  4  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Brent Burns              Justin Schultz                                    60     1   0  4  
 2 Damon Severson           Brian Dumoulin                                    40     1   0  4  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Carl Soderberg           Darren Helm              50     1   4  0  
 2 Tyler Bozak              Curtis Lazar             50     1   4  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Brian Dumoulin           Michael Stone            50     1   4  0  
 2 Brent Burns              Damon Severson           50     1   4  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Carl Soderberg                                    50     1   4  0  
 2 Darren Helm                                       50     1   4  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Brian Dumoulin           Michael Stone            50     1   4  0  
 2 Brent Burns              Damon Severson           50     1   4  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Tyler Bozak              Tyler Seguin             50     1   1  3  
 2 Carl Soderberg           Josh Bailey              50     1   1  3  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Brent Burns              Justin Schultz           50     1   1  3  
 2 Brian Dumoulin           Damon Severson           50     1   1  3  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Tyler Bozak              Josh Bailey              Tyler Seguin             Brent Burns              Justin Schultz           

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Carl Soderberg           Lawson Crouse            Darren Helm              Brent Burns              Brian Dumoulin           

<b>Goaltenders</b>
Starting : Anton Khudobin           
Backup : David Rittich            

<b>Extra Forwards</b>
Normal : Carl Soderberg, Josh Bailey, Tyler Seguin - PP : Carl Soderberg, Josh Bailey - PK : Tyler Seguin
<b>Extra Defensemen</b>
Normal : Damon Severson, Brent Burns, Brian Dumoulin - PP : Damon Severson - PK : Damon Severson, Brent Burns
<b>Penalty Shots</b>
Carl Soderberg, Josh Bailey, Tyler Seguin, Tyler Bozak, Darren Helm

<b>Scratches</b>
Nathan Beaulieu (Healthy), Collin Delia (Healthy)</pre></div>
<h1 class="TeamLinesPro_PIT"><a id="Penguins">Penguins</a></h1>
<b>Lines are Complete</b><br />
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
 1 Joe Thornton             James van Riemsdyk       Andrew Shaw              40     1   1  3  
 2 Evan Rodrigues           Brady Tkachuk            Chris Wagner             35     1   1  3  
 3 Colin Wilson             Kyle Clifford            Micheal Ferland          15     0   1  4  
 4 Tyson Jost               Tomas Jurco              Michael Rasmussen        10     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Andy Greene              Trevor van Riemsdyk                               45     0   2  3  
 2 Cam Fowler               Robert Bortuzzo                                   35     0   2  3  
 3 Chris Wideman            Aaron Ness                                        10     2   3  0  
 4 Robert Bortuzzo          Andy Greene                                       10     1   1  3  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Joe Thornton             James van Riemsdyk       Chris Wagner             60     0   1  4  
 2 Andrew Shaw              Brady Tkachuk            Evan Rodrigues           40     0   1  4  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Andy Greene              Cam Fowler                                        60     0   2  3  
 2 Robert Bortuzzo          Aaron Ness                                        40     3   1  1  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Chris Wagner             Tomas Jurco              65     1   4  0  
 2 Evan Rodrigues           Brady Tkachuk            35     1   3  1  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Andy Greene              Robert Bortuzzo          65     0   5  0  
 2 Trevor van Riemsdyk      Chris Wideman            35     1   4  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Evan Rodrigues                                    60     1   4  0  
 2 Brady Tkachuk                                     40     0   5  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Andy Greene              Cam Fowler               60     1   4  0  
 2 Aaron Ness               Robert Bortuzzo          40     2   3  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Joe Thornton             Micheal Ferland          65     0   2  3  
 2 Evan Rodrigues           Brady Tkachuk            35     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Cam Fowler               Andy Greene              60     2   2  1  
 2 Trevor van Riemsdyk      Robert Bortuzzo          40     1   3  1  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Joe Thornton             James van Riemsdyk       Andrew Shaw              Trevor van Riemsdyk      Robert Bortuzzo          

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Evan Rodrigues           Brady Tkachuk            Chris Wagner             Robert Bortuzzo          Andy Greene              

<b>Goaltenders</b>
Starting : Anton Forsberg           
Backup : Semyon Varlamov          

<b>Extra Forwards</b>
Normal : Andrew Shaw, James van Riemsdyk, Chris Wagner - PP : Evan Rodrigues, Colin Wilson - PK : Chris Wagner
<b>Extra Defensemen</b>
Normal : Robert Bortuzzo, Aaron Ness, Chris Wideman - PP : Trevor van Riemsdyk - PK : Trevor van Riemsdyk, Aaron Ness
<b>Penalty Shots</b>
Evan Rodrigues, James van Riemsdyk, Brady Tkachuk, Andrew Shaw, Tomas Jurco

<b>Scratches</b>
Matt Read (Suspend), Michael Del Zotto (Suspend), Dmitry Kulikov (Head Injury), Mackenzie MacEachern (Healthy)</pre></div>
<h1 class="TeamLinesPro_NSH"><a id="Predators">Predators</a></h1>
<b>Lines are Complete</b><br />
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
 1 Logan Couture            Reilly Smith             Sam Reinhart             38     0   1  4  
 2 Jordan Staal             Alex Tuch                Andreas Athanasiou       34     0   0  5  
 3 Adrian Kempe             Ryan Dzingel             Alex Killorn             20     0   0  5  
 4 Greg Carey               Danton Heinen            Logan Shaw               8      0   1  4  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Oscar Klefbom            Jack Johnson                                      40     0   2  3  
 2 Deryk Engelland          Erik Cernak                                       30     0   2  3  
 3 Nick Holden              Kevan Miller                                      20     0   2  3  
 4 Oscar Klefbom            Deryk Engelland                                   10     0   2  3  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Logan Couture            Andreas Athanasiou       Sam Reinhart             60     0   0  5  
 2 Jordan Staal             Alex Tuch                Ryan Dzingel             40     0   0  5  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Oscar Klefbom            Erik Cernak                                       60     0   0  5  
 2 Nick Holden              Jack Johnson                                      40     0   0  5  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Jordan Staal             Alex Killorn             60     0   5  0  
 2 Logan Couture            Reilly Smith             40     0   5  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Deryk Engelland          Jack Johnson             60     0   5  0  
 2 Kevan Miller             Erik Cernak              40     0   5  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Jordan Staal                                      60     0   5  0  
 2 Logan Couture                                     40     0   5  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Jack Johnson             Deryk Engelland          60     0   5  0  
 2 Kevan Miller             Erik Cernak              40     0   5  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Logan Couture            Reilly Smith             60     0   2  3  
 2 Jordan Staal             Alex Tuch                40     0   2  3  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Oscar Klefbom            Jack Johnson             60     0   2  3  
 2 Deryk Engelland          Erik Cernak              40     0   2  3  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Logan Couture            Andreas Athanasiou       Ryan Dzingel             Oscar Klefbom            Erik Cernak              

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Jordan Staal             Alex Killorn             Reilly Smith             Deryk Engelland          Jack Johnson             

<b>Goaltenders</b>
Starting : Carey Price              
Backup : Pheonix Copley           

<b>Extra Forwards</b>
Normal : Andreas Athanasiou, Sam Reinhart, Alex Tuch - PP : Sam Reinhart, Andreas Athanasiou - PK : Adrian Kempe
<b>Extra Defensemen</b>
Normal : Deryk Engelland, Oscar Klefbom, Erik Cernak - PP : Kevan Miller - PK : Nick Holden, Oscar Klefbom
<b>Penalty Shots</b>
Logan Couture, Sam Reinhart, Andreas Athanasiou, Greg Carey, Reilly Smith

<b>Scratches</b>
Zach Redmond (Healthy), Brett Ritchie (Healthy)</pre></div>
<h1 class="TeamLinesPro_NYR"><a id="Rangers">Rangers</a></h1>
<b>Lines are Incomplete</b><br />
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
 1 Claude Giroux            Charlie Coyle            Mark Stone               34     0   2  3  
 2 Chris Tierney            Gabriel Landeskog        Unknown Player           32     0   2  3  
 3 Colin White              Reid Boucher             Jesper Fast              19     0   3  2  
 4 Artem Anisimov           Ryan Donato              Artturi Lehkonen         15     0   3  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Ben Hutton               Roman Josi                                        36     0   3  2  
 2 Shea Weber               Erik Gustafsson                                   34     0   3  2  
 3 Nick Jensen              Matt Grzelcyk                                     23     0   3  2  
 4 Shea Weber               Roman Josi                                        7      0   3  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Claude Giroux            Gabriel Landeskog        Mark Stone               60     0   0  5  
 2 Chris Tierney            Charlie Coyle            Unknown Player           40     0   1  4  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Erik Gustafsson          Roman Josi                                        60     0   1  4  
 2 Colin White              Shea Weber                                        40     0   0  5  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Chris Tierney            Jesper Fast              60     0   4  1  
 2 Charlie Coyle            Artturi Lehkonen         40     0   4  1  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Shea Weber               Roman Josi               60     0   4  1  
 2 Ben Hutton               Nick Jensen              40     0   4  1  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Claude Giroux                                     60     0   5  0  
 2 Chris Tierney                                     40     0   5  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Shea Weber               Roman Josi               60     0   5  0  
 2 Ben Hutton               Nick Jensen              40     0   5  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Claude Giroux            Gabriel Landeskog        60     0   2  3  
 2 Chris Tierney            Mark Stone               40     0   2  3  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Ben Hutton               Roman Josi               55     0   3  2  
 2 Shea Weber               Erik Gustafsson          45     0   3  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Claude Giroux            Gabriel Landeskog        Mark Stone               Shea Weber               Roman Josi               

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Claude Giroux            Gabriel Landeskog        Mark Stone               Shea Weber               Roman Josi               

<b>Goaltenders</b>
Starting : Marc-Andre Fleury        
Backup : Carter Hutton            

<b>Extra Forwards</b>
Normal : Colin White, Unknown Player, Jesper Fast - PP : Colin White, Artem Anisimov - PK : Reid Boucher
<b>Extra Defensemen</b>
Normal : Nick Jensen, Matt Grzelcyk, Ben Hutton - PP : Matt Grzelcyk - PK : Nick Jensen, Matt Grzelcyk
<b>Penalty Shots</b>
Charlie Coyle, Gabriel Landeskog, Mark Stone, Erik Gustafsson, Colin White

<b>Scratches</b>
Jesper Bratt (Sprained Left Ankle Injury)</pre></div>
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
 1 Connor McDavid           Ilya Kovalchuk           Brayden Point            40     0   1  4  
 2 Matt Duchene             Patrik Laine             Oliver Bjorkstrand       30     1   2  2  
 3 Ivan Barbashev           Jared McCann             Mathieu Joseph           20     2   2  1  
 4 Teddy Blueger            Lias Andersson           Paul Thompson            10     1   3  1  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Ryan Suter               Torey Krug                                        40     1   2  2  
 2 Marco Scandella          Marc Staal                                        30     1   2  2  
 3 Korbinian Holzer         Jake McCabe                                       20     1   2  2  
 4 Marco Scandella          Marc Staal                                        10     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Connor McDavid           Patrik Laine             Brayden Point            60     1   2  2  
 2 Matt Duchene             Ilya Kovalchuk           Mathieu Joseph           40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Ryan Suter               Torey Krug                                        60     1   2  2  
 2 Marc Staal               Jake McCabe                                       40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Teddy Blueger            Ivan Barbashev           60     1   2  2  
 2 Connor McDavid           Jared McCann             40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Marco Scandella          Marc Staal               60     1   2  2  
 2 Ryan Suter               Jake McCabe              40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Ivan Barbashev                                    60     1   2  2  
 2 Teddy Blueger                                     40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Korbinian Holzer         Marc Staal               60     1   2  2  
 2 Ryan Suter               Jake McCabe              40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Connor McDavid           Ivan Barbashev           60     1   2  2  
 2 Matt Duchene             Jared McCann             40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Ryan Suter               Marc Staal               60     1   2  2  
 2 Jake McCabe              Marco Scandella          40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Connor McDavid           Patrik Laine             Brayden Point            Ryan Suter               Torey Krug               

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Teddy Blueger            Ivan Barbashev           Oliver Bjorkstrand       Korbinian Holzer         Marc Staal               

<b>Goaltenders</b>
Starting : Marcus Hogberg           
Backup : Sergei Bobrovsky         

<b>Extra Forwards</b>
Normal : Oliver Bjorkstrand, Matt Duchene, Jared McCann - PP : Jared McCann, Ilya Kovalchuk - PK : Ivan Barbashev
<b>Extra Defensemen</b>
Normal : Jake McCabe, Marc Staal, Marco Scandella - PP : Torey Krug - PK : Ryan Suter, Jake McCabe
<b>Penalty Shots</b>
Brayden Point, Patrik Laine, Connor McDavid, Matt Duchene, Ilya Kovalchuk

<b>Scratches</b>
Vince Dunn (Healthy), Connor Clifton (Healthy), Stefan Noesen (Healthy)</pre></div>
<h1 class="TeamLinesPro_BUF"><a id="Sabres">Sabres</a></h1>
<b>Lines are Complete</b><br />
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
 1 Sidney Crosby            Chris Kreider            J.T. Compher             32     0   2  3  
 2 Anze Kopitar             Anders Lee               Cole Schneider           32     0   2  3  
 3 Mikael Backlund          Pavel Buchnevich         Teuvo Teravainen         31     0   2  3  
 4 Derek Grant              Ryan Carpenter           Zemgus Girgensons        5      0   4  1  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Rasmus Ristolainen       Josh Manson                                       40     0   4  1  
 2 Brent Seabrook           Matt Niskanen                                     35     0   4  1  
 3 Brenden Dillon           Dan Hamhuis                                       15     0   4  1  
 4 Rasmus Ristolainen       Matt Niskanen                                     10     0   4  1  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Sidney Crosby            J.T. Compher             Pavel Buchnevich         70     0   0  5  
 2 Anze Kopitar             Anders Lee               Chris Kreider            30     0   0  5  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Rasmus Ristolainen       Brent Seabrook                                    70     0   1  4  
 2 Matt Niskanen            Brenden Dillon                                    30     0   1  4  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Anze Kopitar             J.T. Compher             60     1   4  0  
 2 Mikael Backlund          Zemgus Girgensons        40     1   4  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Matt Niskanen            Josh Manson              65     1   4  0  
 2 Brent Seabrook           Rasmus Ristolainen       35     1   4  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Anze Kopitar                                      55     0   5  0  
 2 J.T. Compher                                      45     0   5  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Josh Manson              Matt Niskanen            55     0   5  0  
 2 Brent Seabrook           Rasmus Ristolainen       45     0   5  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Anze Kopitar             J.T. Compher             60     0   3  2  
 2 Sidney Crosby            Anders Lee               40     0   1  4  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Rasmus Ristolainen       Josh Manson              65     0   4  1  
 2 Brent Seabrook           Matt Niskanen            35     0   4  1  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Sidney Crosby            Chris Kreider            Anze Kopitar             Brent Seabrook           Rasmus Ristolainen       

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Anze Kopitar             J.T. Compher             Sidney Crosby            Josh Manson              Matt Niskanen            

<b>Goaltenders</b>
Starting : Thomas Greiss            
Backup : Linus Ullmark            

<b>Extra Forwards</b>
Normal : Anze Kopitar, Anders Lee, Sidney Crosby - PP : Anze Kopitar, J.T. Compher - PK : J.T. Compher
<b>Extra Defensemen</b>
Normal : Rasmus Ristolainen, Brent Seabrook, Josh Manson - PP : Rasmus Ristolainen - PK : Brent Seabrook, Rasmus Ristolainen
<b>Penalty Shots</b>
Anders Lee, Anze Kopitar, Rasmus Ristolainen, Brent Seabrook, J.T. Compher

<b>Scratches</b>
Mario Kempe (Healthy), Rickard Rakell (Healthy), Chad Ruhwedel (Healthy)</pre></div>
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
 1 Vincent Trocheck         David Pastrnak           Vladimir Tarasenko       35     0   1  4  
 2 Jaden Schwartz           Bryan Rust               Drew Stafford            30     0   2  3  
 3 Pierre-Edouard Bellemare Brett Connolly           Jordan Nolan             25     1   3  1  
 4 Joakim Nordstrom         Corey Tropp              Ryan Reaves              10     0   4  1  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Alexander Petrovic       Ryan McDonagh                                     40     0   3  2  
 2 Erik Johnson             Nick Leddy                                        30     0   3  2  
 3 Dmitry Orlov             Jamie Oleksiak                                    20     1   2  2  
 4 Erik Johnson             Ryan McDonagh                                     10     0   3  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Vincent Trocheck         Pierre-Edouard Bellemare Vladimir Tarasenko       60     0   1  4  
 2 Jaden Schwartz           David Pastrnak           Bryan Rust               40     0   1  4  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Ryan McDonagh            Erik Johnson                                      60     0   1  4  
 2 Dmitry Orlov             Nick Leddy                                        40     0   2  3  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Joakim Nordstrom         Bryan Rust               60     1   3  1  
 2 Vincent Trocheck         Pierre-Edouard Bellemare 40     1   3  1  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Alexander Petrovic       Ryan McDonagh            60     1   3  1  
 2 Dmitry Orlov             Erik Johnson             40     1   3  1  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Vincent Trocheck                                  60     0   5  0  
 2 Pierre-Edouard Bellemare                          40     0   5  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Ryan McDonagh            Erik Johnson             60     0   5  0  
 2 Alexander Petrovic       Dmitry Orlov             40     0   5  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Vincent Trocheck         David Pastrnak           60     0   2  3  
 2 Pierre-Edouard Bellemare Vladimir Tarasenko       40     0   2  3  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Dmitry Orlov             Erik Johnson             60     1   2  2  
 2 Jamie Oleksiak           Ryan McDonagh            40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Vincent Trocheck         David Pastrnak           Vladimir Tarasenko       Ryan McDonagh            Erik Johnson             

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Vincent Trocheck         Jaden Schwartz           Pierre-Edouard Bellemare Erik Johnson             Ryan McDonagh            

<b>Goaltenders</b>
Starting : Andrei Vasilevskiy       
Backup : Max Lagace               

<b>Extra Forwards</b>
Normal : Vincent Trocheck, Pierre-Edouard Bellemare, David Pastrnak - PP : Vincent Trocheck, Pierre-Edouard Bellemare - PK : Vincent Trocheck
<b>Extra Defensemen</b>
Normal : Nick Leddy, Jamie Oleksiak, Alexander Petrovic - PP : Ryan McDonagh - PK : Erik Johnson, Ryan McDonagh
<b>Penalty Shots</b>
Vladimir Tarasenko, Vincent Trocheck, Pierre-Edouard Bellemare, Jaden Schwartz, David Pastrnak

<b>Scratches</b>
Dean Kukan (Healthy), Fredrik Claesson (Healthy)</pre></div>
<h1 class="TeamLinesPro_SJS"><a id="Sharks">Sharks</a></h1>
<b>Lines are Complete</b><br />
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
 1 Aleksander Barkov        Phil Kessel              Ondrej Kase              35     0   2  3  
 2 Evgeny Kuznetsov         Filip Forsberg           Tyler Toffoli            35     0   2  3  
 3 Derek Ryan               Travis Konecny           Joel Armia               25     0   3  2  
 4 Andrew Poturalski        Oskar Lindblom           Robert Thomas            5      1   3  1  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Kris Letang              Justin Braun                                      35     0   3  2  
 2 Jared Spurgeon           Joel Edmundson                                    35     0   3  2  
 3 Brett Kulak              T.J. Brodie                                       20     0   3  2  
 4 Justin Braun             Jared Spurgeon                                    10     0   3  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Aleksander Barkov        Filip Forsberg           Phil Kessel              80     0   0  5  
 2 Derek Ryan               Travis Konecny           Ondrej Kase              20     0   0  5  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Kris Letang              Evgeny Kuznetsov                                  80     0   0  5  
 2 T.J. Brodie              Jared Spurgeon                                    20     0   0  5  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Derek Ryan               Oskar Lindblom           50     0   5  0  
 2 Aleksander Barkov        Joel Armia               50     0   5  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Jared Spurgeon           Justin Braun             60     0   5  0  
 2 Joel Edmundson           T.J. Brodie              40     0   5  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Derek Ryan                                        65     0   5  0  
 2 Aleksander Barkov                                 35     0   5  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Justin Braun             Jared Spurgeon           75     0   5  0  
 2 Joel Edmundson           T.J. Brodie              25     0   5  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Aleksander Barkov        Phil Kessel              50     0   2  3  
 2 Evgeny Kuznetsov         Filip Forsberg           50     0   2  3  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Kris Letang              Justin Braun             50     0   3  2  
 2 Jared Spurgeon           T.J. Brodie              50     0   3  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Aleksander Barkov        Filip Forsberg           Phil Kessel              Kris Letang              Jared Spurgeon           

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Aleksander Barkov        Oskar Lindblom           Derek Ryan               Justin Braun             Jared Spurgeon           

<b>Goaltenders</b>
Starting : Darcy Kuemper            
Backup : Laurent Brossoit         

<b>Extra Forwards</b>
Normal : Aleksander Barkov, Derek Ryan, Oskar Lindblom - PP : Tyler Toffoli, Joel Armia - PK : Tyler Toffoli
<b>Extra Defensemen</b>
Normal : T.J. Brodie, Jared Spurgeon, Joel Edmundson - PP : T.J. Brodie - PK : T.J. Brodie, Jared Spurgeon
<b>Penalty Shots</b>
Aleksander Barkov, Evgeny Kuznetsov, Ondrej Kase, Derek Ryan, Phil Kessel

<b>Scratches</b>
Brendan Leipsic (Healthy)</pre></div>
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
 1 Patrice Bergeron         Jon Marchessault         Zach Parise              34     0   2  3  
 2 Frans Nielsen            Max Pacioretty           Paul Byron               34     0   1  4  
 3 Mark Letestu             Colton Sceviour          Corey Perry              26     0   2  3  
 4 Johan Larsson            Brendan Gaunce           Jason Spezza             6      0   4  1  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Thomas Hickey            Jordie Benn                                       34     0   3  2  
 2 Greg Pateryn             Duncan Keith                                      33     0   4  1  
 3 Brandon Davidson         Mike Reilly                                       23     1   3  1  
 4 Greg Pateryn             Duncan Keith                                      10     1   4  0  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Patrice Bergeron         Max Pacioretty           Zach Parise              60     0   1  4  
 2 Frans Nielsen            Paul Byron               Jon Marchessault         40     0   1  4  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Duncan Keith             Jason Spezza                                      60     0   1  4  
 2 Thomas Hickey            Corey Perry                                       40     0   1  4  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Johan Larsson            Mark Letestu             60     1   4  0  
 2 Frans Nielsen            Colton Sceviour          40     1   4  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Jordie Benn              Greg Pateryn             60     1   4  0  
 2 Duncan Keith             Thomas Hickey            40     1   4  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Johan Larsson                                     60     1   4  0  
 2 Colton Sceviour                                   40     1   4  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Jordie Benn              Greg Pateryn             60     1   2  2  
 2 Duncan Keith             Thomas Hickey            40     1   4  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Frans Nielsen            Max Pacioretty           60     1   2  2  
 2 Mark Letestu             Paul Byron               40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Thomas Hickey            Mike Reilly              60     1   2  2  
 2 Greg Pateryn             Jordie Benn              40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Patrice Bergeron         Max Pacioretty           Zach Parise              Duncan Keith             Thomas Hickey            

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Johan Larsson            Colton Sceviour          Patrice Bergeron         Greg Pateryn             Jordie Benn              

<b>Goaltenders</b>
Starting : Cam Talbot               
Backup : Craig Anderson           

<b>Extra Forwards</b>
Normal : Frans Nielsen, Corey Perry, Colton Sceviour - PP : Colton Sceviour, Paul Byron - PK : Colton Sceviour
<b>Extra Defensemen</b>
Normal : Duncan Keith, Greg Pateryn, Jordie Benn - PP : Jordie Benn - PK : Greg Pateryn, Jordie Benn
<b>Penalty Shots</b>
Frans Nielsen, Paul Byron, Thomas Hickey, Zach Parise, Jason Spezza

<b>Scratches</b>
Nate Prosser (Healthy)</pre></div>
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
 1 Jayce Hawryluk           Brandon Pirri            Jakob Silfverberg        30     0   2  3  
 2 Sam Carrick              Nino Niederreiter        Conor Garland            30     0   1  4  
 3 Kyle Brodziak            Blake Comeau             Troy Brouwer             25     0   4  1  
 4 Tyler Graovac            Seth Griffith            Rocco Grimaldi           15     0   3  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Dougie Hamilton          John Carlson                                      30     0   4  1  
 2 Tyson Barrie             Trevor Daley                                      30     0   4  1  
 3 Noah Juulsen             Mikhail Sergachev                                 30     0   4  1  
 4 Tyson Barrie             John Carlson                                      10     0   4  1  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Kyle Brodziak            Brandon Pirri            Jakob Silfverberg        50     0   0  5  
 2 Sam Carrick              Nino Niederreiter        Conor Garland            50     0   0  5  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Dougie Hamilton          John Carlson                                      50     0   1  4  
 2 Tyson Barrie             Mikhail Sergachev                                 50     0   1  4  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Nino Niederreiter        Jakob Silfverberg        50     0   5  0  
 2 Kyle Brodziak            Blake Comeau             50     0   5  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Dougie Hamilton          John Carlson             50     1   4  0  
 2 Noah Juulsen             Trevor Daley             50     1   4  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Kyle Brodziak                                     50     0   5  0  
 2 Jakob Silfverberg                                 50     0   5  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Dougie Hamilton          John Carlson             50     0   5  0  
 2 Noah Juulsen             Trevor Daley             50     0   5  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Tyler Graovac            Jayce Hawryluk           50     0   3  2  
 2 Nino Niederreiter        Conor Garland            50     0   3  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Dougie Hamilton          John Carlson             50     0   4  1  
 2 Tyson Barrie             Noah Juulsen             50     0   4  1  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Rocco Grimaldi           Nino Niederreiter        Jakob Silfverberg        Tyson Barrie             John Carlson             

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Kyle Brodziak            Blake Comeau             Jakob Silfverberg        Noah Juulsen             Trevor Daley             

<b>Goaltenders</b>
Starting : Jordan Binnington        
Backup : Troy Grosenick           

<b>Extra Forwards</b>
Normal : Nino Niederreiter, Troy Brouwer, Jakob Silfverberg - PP : Nino Niederreiter, Brandon Pirri - PK : Troy Brouwer
<b>Extra Defensemen</b>
Normal : Dougie Hamilton, Noah Juulsen, John Carlson - PP : Noah Juulsen - PK : John Carlson, Noah Juulsen
<b>Penalty Shots</b>
Brandon Pirri, Jakob Silfverberg, John Carlson, Conor Garland, Dougie Hamilton

<b>Scratches</b>
Casey Nelson (Healthy), Adam Henrique (Healthy), Anthony Stolarz (Healthy)</pre></div>
<?php include "Footer.php";?>
