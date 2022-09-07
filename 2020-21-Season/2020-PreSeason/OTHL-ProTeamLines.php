<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<title>OTHL - Pro Team Lines</title>
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
<div class="STHSTopLink"><a id="STHSRosterTop"></a> <a href="#Avalanche">Avalanche</a> | <a href="#Blackhawks">Blackhawks</a> | <a href="#BlueJackets">Blue Jackets</a> | <a href="#Blues">Blues</a> | <a href="#Bruins">Bruins</a> | <a href="#Canadiens">Canadiens</a> | <a href="#Canucks">Canucks</a> | <a href="#Capitals">Capitals</a> | <a href="#Coyotes">Coyotes</a> | <a href="#Devils">Devils</a> | <a href="#Ducks">Ducks</a> | <a href="#Flames">Flames</a> | <a href="#Flyers">Flyers</a> | <a href="#GoldenKnights">Golden Knights</a> | <a href="#Hurricanes">Hurricanes</a> | <a href="#Islanders">Islanders</a> | <a href="#Jets">Jets</a> | <a href="#Kings">Kings</a> | <a href="#Lightning">Lightning</a> | <a href="#MapleLeafs">Maple Leafs</a> | <a href="#Oilers">Oilers</a> | <a href="#Panthers">Panthers</a> | <a href="#Penguins">Penguins</a> | <a href="#Predators">Predators</a> | <a href="#Rangers">Rangers</a> | <a href="#RedWings">Red Wings</a> | <a href="#Sabres">Sabres</a> | <a href="#Senators">Senators</a> | <a href="#Sharks">Sharks</a> | <a href="#Stars">Stars</a> | <a href="#Wild">Wild</a> | <a href="javascript:STHS_JS_CloseAll('');">Close All Team View</a> | <a href="javascript:STHS_JS_OpenAll('');">Open All Team View</a>
</div>
<h1 class="TeamLinesPro_COL"><a id="Avalanche">Avalanche</a></h1>
<b>Lines are Incomplete</b><br />
<div class="STHSTeamLink">
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
 1 Mikko Koivu              Unknown Player           Unknown Player           34     0   1  4  
 2 Chris Mueller            Michael Frolik           Unknown Player           27     1   2  2  
 3 Unknown Player           Richard Panik            Unknown Player           24     2   2  1  
 4 Unknown Player           Tobias Rieder            Blake Pietila            15     1   3  1  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Braydon Coburn           Hampus Lindholm                                   37     1   2  2  
 2 Brett Pesce              Brandon Carlo                                     28     1   2  2  
 3 Will Butcher             Jonas Siegenthaler                                28     2   2  1  
 4 Braydon Coburn           Hampus Lindholm                                   7      1   3  1  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Mikko Koivu              Unknown Player           Unknown Player           60     0   1  4  
 2 Chris Mueller            Michael Frolik           Richard Panik            40     1   1  3  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Braydon Coburn           Hampus Lindholm                                   60     0   2  3  
 2 Brandon Carlo            Jonas Siegenthaler                                40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           60     1   2  2  
 2 Mikko Koivu              Unknown Player           40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Braydon Coburn           Brandon Carlo            60     1   4  0  
 2 Hampus Lindholm          Jonas Siegenthaler       40     1   4  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Unknown Player                                    60     1   2  2  
 2 Mikko Koivu                                       40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Braydon Coburn           Brandon Carlo            60     1   4  0  
 2 Will Butcher             Jonas Siegenthaler       40     1   4  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           60     1   1  3  
 2 Chris Mueller            Tobias Rieder            40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Braydon Coburn           Hampus Lindholm          60     1   2  2  
 2 Brett Pesce              Brandon Carlo            40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Mikko Koivu              Unknown Player           Michael Frolik           Braydon Coburn           Brandon Carlo            

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Unknown Player           Tobias Rieder            Unknown Player           Jonas Siegenthaler       Will Butcher             

<b>Goaltenders</b>
Starting : Jake Allen               
Backup : Unknown Goalie           

<b>Extra Forwards</b>
Normal : Unknown Player, Mikko Koivu, Michael Frolik - PP : Unknown Player, Mikko Koivu - PK : Tobias Rieder
<b>Extra Defensemen</b>
Normal : Brandon Carlo, Hampus Lindholm, Braydon Coburn - PP : Braydon Coburn - PK : Will Butcher, Jonas Siegenthaler
<b>Penalty Shots</b>
Unknown Player, Brett Pesce, Braydon Coburn, Mikko Koivu, Unknown Player

<b>Scratches</b>
Mike Vecchione (Healthy), Andreas Englund (Healthy), Travis Boyd (Healthy), Lucas Wallmark (Healthy), Carson Soucy (Healthy)
Michael Sgarbossa (Healthy), Julian Melchiori (Healthy), Keegan Lowe (Healthy), Mark Alt (Healthy), Brock McGinn (Healthy)
Chris Driedger (Healthy)</pre></div>
<h1 class="TeamLinesPro_CHI"><a id="Blackhawks">Blackhawks</a></h1>
<b>Lines are Incomplete</b><br />
<div class="STHSTeamLink">
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
Matt Calvert (Healthy), Sebastian Aho (Healthy), Zach Werenski (Healthy), Matt Benning (Healthy), Jesper Boqvist (Healthy)
Kevin Rooney (Healthy), Carl Hagelin (Healthy), Justin Faulk (Healthy), Tyler Johnson (Healthy), Vladislav Namestnikov (Healthy)</pre></div>
<h1 class="TeamLinesPro_CLB"><a id="BlueJackets">Blue Jackets</a></h1>
<b>Lines are Incomplete</b><br />
<div class="STHSTeamLink">
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
 1 Elias Pettersson         Andreas Johnsson         Vinnie Hinostroza        40     1   1  3  
 2 Sam Steel                Alexander Kerfoot        Jake Virtanen            30     1   2  2  
 3 Unknown Player           Denis Malgin             Jason Spezza             20     1   2  2  
 4 Sam Steel                Zach Sanford             Unknown Player           10     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Ian Cole                 Anton Stralman                                    40     1   2  2  
 2 Danny DeKeyser           Unknown Player                                    30     1   2  2  
 3 Unknown Player           Philippe Myers                                    20     1   2  2  
 4 Ian Cole                 Danny DeKeyser                                    10     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Elias Pettersson         Andreas Johnsson         Vinnie Hinostroza        60     1   2  2  
 2 Alexander Kerfoot        Sam Steel                Jake Virtanen            40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Ian Cole                 Unknown Player                                    60     1   2  2  
 2 Danny DeKeyser           Philippe Myers                                    40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Elias Pettersson         Alexander Kerfoot        60     1   2  2  
 2 Vinnie Hinostroza        Sam Steel                40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Ian Cole                 Philippe Myers           60     1   2  2  
 2 Danny DeKeyser           Unknown Player           40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Elias Pettersson                                  60     1   2  2  
 2 Vinnie Hinostroza                                 40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Ian Cole                 Unknown Player           60     1   2  2  
 2 Danny DeKeyser           Philippe Myers           40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Elias Pettersson         Andreas Johnsson         60     1   2  2  
 2 Vinnie Hinostroza        Alexander Kerfoot        40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Ian Cole                 Unknown Player           60     1   2  2  
 2 Danny DeKeyser           Philippe Myers           40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Elias Pettersson         Denis Malgin             Vinnie Hinostroza        Ian Cole                 Philippe Myers           

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Elias Pettersson         Denis Malgin             Vinnie Hinostroza        Ian Cole                 Philippe Myers           

<b>Goaltenders</b>
Starting : Alex Lyon                
Backup : Jacob Markstrom          

<b>Extra Forwards</b>
Normal : Elias Pettersson, Andreas Johnsson, Sam Steel - PP : Vinnie Hinostroza, Andreas Johnsson - PK : Sam Steel
<b>Extra Defensemen</b>
Normal : Unknown Player, Ian Cole, Danny DeKeyser - PP : Unknown Player - PK : Ian Cole, Danny DeKeyser
<b>Penalty Shots</b>
Elias Pettersson, Sam Steel, Vinnie Hinostroza, Jake Virtanen, Alexander Kerfoot

<b>Scratches</b>
Quinn Hughes (Healthy), Cory Conacher (Healthy), Andrew Copp (Healthy), Anthony Duclair (Healthy), Troy Stecher (Healthy)
Nicolas Aube-Kubel (Healthy), Jason Demers (Healthy), Robert Hagg (Healthy), Sonny Milano (Healthy), Thatcher Demko (Healthy)</pre></div>
<h1 class="TeamLinesPro_STL"><a id="Blues">Blues</a></h1>
<b>Lines are Incomplete</b><br />
<div class="STHSTeamLink">
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
 1 Jonathan Drouin          Anthony Beauvillier      Unknown Player           40     1   1  3  
 2 Jean-Sebastien Dea       Antoine Roussel          Jakub Vrana              30     2   2  1  
 3 Cedric Paquette          Andrew Ladd              Carter Rowney            20     3   2  0  
 4 Unknown Player           Unknown Player           Steve Bernier            10     3   2  0  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 David Savard             Samuel Girard                                     40     1   2  2  
 2 Dalton Prout             Nick Seeler                                       30     1   2  2  
 3 Ashton Sautner           Unknown Player                                    20     1   2  2  
 4 Samuel Girard            David Savard                                      10     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Jonathan Drouin          Carter Rowney            Antoine Roussel          60     1   2  2  
 2 Steve Bernier            Anthony Beauvillier      Unknown Player           40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 David Savard             Nick Seeler                                       60     1   2  2  
 2 Samuel Girard            Ashton Sautner                                    40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Jonathan Drouin          Steve Bernier            60     1   2  2  
 2 Carter Rowney            Anthony Beauvillier      40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 David Savard             Samuel Girard            60     1   2  2  
 2 Dalton Prout             Nick Seeler              40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Jonathan Drouin                                   60     1   2  2  
 2 Steve Bernier                                     40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 David Savard             Nick Seeler              60     1   2  2  
 2 Samuel Girard            Dalton Prout             40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Jonathan Drouin          Steve Bernier            60     1   2  2  
 2 Unknown Player           Anthony Beauvillier      40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 David Savard             Samuel Girard            60     1   2  2  
 2 Nick Seeler              Unknown Player           40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Jonathan Drouin          Carter Rowney            Antoine Roussel          David Savard             Samuel Girard            

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Jonathan Drouin          Carter Rowney            Antoine Roussel          David Savard             Samuel Girard            

<b>Goaltenders</b>
Starting : Jonathan Quick           
Backup : Louis Domingue           

<b>Extra Forwards</b>
Normal : Jonathan Drouin, Anthony Beauvillier, Steve Bernier - PP : Jonathan Drouin, Anthony Beauvillier - PK : Steve Bernier
<b>Extra Defensemen</b>
Normal : Samuel Girard, David Savard, Nick Seeler - PP : David Savard - PK : David Savard, Nick Seeler
<b>Penalty Shots</b>
Jonathan Drouin, Unknown Player, Steve Bernier, Anthony Beauvillier, Carter Rowney

<b>Scratches</b>
Tanner Kero (Healthy), Denis Gurianov (Healthy), Loui Eriksson (Healthy), Alexandre Texier (Healthy), Adam Boqvist (Healthy)
Sammy Blais (Healthy), Janne Kuokkanen (Healthy), Lukas Vejdemo (Healthy), Cale Fleury (Healthy), Joe Gambardella (Healthy)</pre></div>
<h1 class="TeamLinesPro_BOS"><a id="Bruins">Bruins</a></h1>
<b>Lines are Incomplete</b><br />
<div class="STHSTeamLink">
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
 1 Boone Jenner             Tomas Tatar              Unknown Player           33     0   3  2  
 2 Sean Couturier           Unknown Player           Zach Hyman               32     0   3  2  
 3 Unknown Player           Justin Abdelkader        Bryan Little             25     1   2  2  
 4 Cody Eakin               Mikkel Boedker           Gabriel Bourque          10     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Ben Harpur               Ben Chiarot                                       33     0   5  0  
 2 Unknown Player           Brayden McNabb                                    32     0   4  1  
 3 Erik Gudbranson          Mirco Mueller                                     25     0   5  0  
 4 Unknown Player           Brayden McNabb                                    10     0   5  0  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Bryan Little             Unknown Player           Unknown Player           55     0   0  5  
 2 Unknown Player           Zach Hyman               Tomas Tatar              45     0   0  5  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Unknown Player           Ben Chiarot                                       70     1   0  4  
 2 Brayden McNabb           Mirco Mueller                                     30     0   1  4  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Boone Jenner             Unknown Player           65     0   5  0  
 2 Sean Couturier           Justin Abdelkader        35     0   5  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Ben Harpur               Brayden McNabb           65     0   5  0  
 2 Ben Chiarot              Mirco Mueller            35     0   5  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Boone Jenner                                      50     0   5  0  
 2 Sean Couturier                                    50     0   5  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Ben Harpur               Brayden McNabb           50     0   5  0  
 2 Ben Chiarot              Mirco Mueller            50     0   5  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Unknown Player           Tomas Tatar              60     0   2  3  
 2 Bryan Little             Unknown Player           40     0   2  3  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Unknown Player           Brayden McNabb           60     0   2  3  
 2 Ben Chiarot              Erik Gudbranson          40     0   2  3  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Unknown Player           Unknown Player           Tomas Tatar              Unknown Player           Ben Chiarot              

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Sean Couturier           Boone Jenner             Unknown Player           Brayden McNabb           Ben Harpur               

<b>Goaltenders</b>
Starting : Braden Holtby            
Backup : Jack Campbell            

<b>Extra Forwards</b>
Normal : Unknown Player, Unknown Player, Tomas Tatar - PP : Unknown Player, Unknown Player - PK : Unknown Player
<b>Extra Defensemen</b>
Normal : Brayden McNabb, Ben Chiarot, Erik Gudbranson - PP : Unknown Player - PK : Brayden McNabb, Ben Chiarot
<b>Penalty Shots</b>
Sean Couturier, Tomas Tatar, Unknown Player, Unknown Player, Zach Hyman

<b>Scratches</b>
Evgenii Dadonov (Healthy), Par Lindholm (Healthy), Matt Roy (Healthy), Blake Coleman (Healthy), Brad Marchand (Healthy)
Joonas Korpisalo (Healthy)</pre></div>
<h1 class="TeamLinesPro_MTL"><a id="Canadiens">Canadiens</a></h1>
<b>Lines are Incomplete</b><br />
<div class="STHSTeamLink">
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
 1 Mark Scheifele           Unknown Player           Jeff Carter              40     1   2  2  
 2 Clayton Keller           Alex DeBrincat           Unknown Player           30     1   2  2  
 3 Valtteri Filppula        Nikolaj Ehlers           Brandon Tanev            20     1   2  2  
 4 Cal O'Reilly             Daniel Sprong            Melker Karlsson          10     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Unknown Player           Aaron Ekblad                                      40     1   2  2  
 2 Marc-Edouard Vlasic      Unknown Player                                    30     1   2  2  
 3 Unknown Player           Unknown Player                                    20     1   2  2  
 4 Unknown Player           Aaron Ekblad                                      10     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Mark Scheifele           Unknown Player           Jeff Carter              60     1   2  2  
 2 Clayton Keller           Alex DeBrincat           Unknown Player           40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Unknown Player           Aaron Ekblad                                      60     1   2  2  
 2 Marc-Edouard Vlasic      Unknown Player                                    40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Mark Scheifele           Unknown Player           60     1   2  2  
 2 Jeff Carter              Alex DeBrincat           40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Unknown Player           Aaron Ekblad             60     1   2  2  
 2 Marc-Edouard Vlasic      Unknown Player           40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Mark Scheifele                                    60     1   2  2  
 2 Unknown Player                                    40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Unknown Player           Aaron Ekblad             60     1   2  2  
 2 Marc-Edouard Vlasic      Unknown Player           40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Mark Scheifele           Unknown Player           60     1   2  2  
 2 Jeff Carter              Alex DeBrincat           40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Unknown Player           Aaron Ekblad             60     1   2  2  
 2 Marc-Edouard Vlasic      Unknown Player           40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Mark Scheifele           Unknown Player           Jeff Carter              Unknown Player           Aaron Ekblad             

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Mark Scheifele           Unknown Player           Jeff Carter              Unknown Player           Aaron Ekblad             

<b>Goaltenders</b>
Starting : Unknown Goalie           
Backup : Carter Hart              

<b>Extra Forwards</b>
Normal : Nikolaj Ehlers, Valtteri Filppula, Brandon Tanev - PP : Nikolaj Ehlers, Valtteri Filppula - PK : Brandon Tanev
<b>Extra Defensemen</b>
Normal : Unknown Player, Unknown Player, Marc-Edouard Vlasic - PP : Unknown Player - PK : Unknown Player, Marc-Edouard Vlasic
<b>Penalty Shots</b>
Mark Scheifele, Unknown Player, Jeff Carter, Alex DeBrincat, Unknown Player

<b>Scratches</b>
Michael Kapla (Healthy), Vladimir Sobotka (Healthy), Ivan Provorov (Healthy), Jonny Brodzinski (Healthy), Nikolai Prokhorkin (Healthy)
Vladislav Kamenev (Healthy), Tucker Poolman (Healthy), Kalle Kossila (Healthy), Matthew Phillips (Healthy), Alex Petrovic (Healthy)
Chase Priskie (Healthy), Kevin Connauton (Healthy), Connor Murphy (Healthy), Anthony Mantha (Healthy), Alex Nedeljkovic (Healthy)</pre></div>
<h1 class="TeamLinesPro_VAN"><a id="Canucks">Canucks</a></h1>
<b>Lines are Incomplete</b><br />
<div class="STHSTeamLink">
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
 1 Unknown Player           Kyle Connor              Unknown Player           36     0   2  3  
 2 Unknown Player           Alex Steen               Nick Bjugstad            36     0   1  4  
 3 Nico Hischier            Brandon Dubinsky         Pat Maroon               23     0   2  2  
 4 Ryan Kesler              Unknown Player           Cal Clutterbuck          5      0   4  1  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Dougie Hamilton          Nikita Zaitsev                                    45     0   3  2  
 2 Tyler Myers              Scott Mayfield                                    35     0   3  2  
 3 MacKenzie Weegar         Gavin Bayreuther                                  20     0   3  2  
 4 Dougie Hamilton          Nikita Zaitsev                                    0      0   3  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Unknown Player           Kyle Connor              Unknown Player           70     0   0  5  
 2 Nico Hischier            Pat Maroon               Alex Steen               30     0   0  5  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Dougie Hamilton          Tyler Myers                                       65     0   0  5  
 2 Gavin Bayreuther         MacKenzie Weegar                                  35     0   0  5  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Unknown Player           Brandon Dubinsky         70     0   5  0  
 2 Ryan Kesler              Cal Clutterbuck          30     0   5  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Scott Mayfield           Nikita Zaitsev           65     0   5  0  
 2 Dougie Hamilton          MacKenzie Weegar         35     0   5  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Unknown Player                                    60     0   5  0  
 2 Ryan Kesler                                       40     0   5  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Nikita Zaitsev           Scott Mayfield           60     0   5  0  
 2 Dougie Hamilton          MacKenzie Weegar         40     0   5  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           60     0   2  3  
 2 Nico Hischier            Kyle Connor              40     0   2  3  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Dougie Hamilton          Nikita Zaitsev           60     0   4  1  
 2 Tyler Myers              Scott Mayfield           40     0   4  1  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Unknown Player           Kyle Connor              Unknown Player           Tyler Myers              Dougie Hamilton          

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Unknown Player           Brandon Dubinsky         Cal Clutterbuck          Nikita Zaitsev           Scott Mayfield           

<b>Goaltenders</b>
Starting : Henrik Lundqvist         
Backup : Alexandar Georgiev       

<b>Extra Forwards</b>
Normal : Unknown Player, Unknown Player, Unknown Player - PP : Nick Bjugstad, Cal Clutterbuck - PK : Alex Steen
<b>Extra Defensemen</b>
Normal : Dougie Hamilton, Scott Mayfield, Gavin Bayreuther - PP : Scott Mayfield - PK : MacKenzie Weegar, Dougie Hamilton
<b>Penalty Shots</b>
Alex Steen, Kyle Connor, Unknown Player, Unknown Player, Unknown Player

<b>Scratches</b>
Mikko Rantanen (Healthy), Auston Matthews (Healthy), Joel Farabee (Healthy), Michael McLeod (Healthy), Nick Bonino (Healthy)
Ryan Carpenter (Healthy), Stephen Johns (Healthy), William Carrier (Healthy)</pre></div>
<h1 class="TeamLinesPro_WSH"><a id="Capitals">Capitals</a></h1>
<b>Lines are Incomplete</b><br />
<div class="STHSTeamLink">
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
 1 Jack Eichel              Gustav Nyquist           Kyle Palmieri            35     2   1  2  
 2 Vincent Trocheck         Jamie Benn               T.J. Oshie               35     2   1  2  
 3 Unknown Player           Alex Iafallo             Paul Byron               20     2   2  1  
 4 Chandler Stephenson      Unknown Player           Carl Grundstrom          10     2   2  1  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Drew Doughty             Alec Martinez                                     40     2   2  1  
 2 Jacob Trouba             Dmitry Orlov                                      30     2   2  1  
 3 Greg Pateryn             Unknown Player                                    20     2   3  0  
 4 Drew Doughty             Jacob Trouba                                      10     2   2  1  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Jack Eichel              Jamie Benn               Kyle Palmieri            60     1   0  4  
 2 Vincent Trocheck         Gustav Nyquist           T.J. Oshie               40     1   0  4  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Drew Doughty             Jacob Trouba                                      60     1   1  3  
 2 Alec Martinez            Dmitry Orlov                                      40     1   1  3  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           60     1   4  0  
 2 Jamie Benn               Alex Iafallo             40     1   4  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Alec Martinez            Jacob Trouba             60     2   3  0  
 2 Drew Doughty             Dmitry Orlov             40     2   3  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Unknown Player                                    60     1   4  0  
 2 Jamie Benn                                        40     1   4  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Alec Martinez            Jacob Trouba             60     2   3  0  
 2 Drew Doughty             Dmitry Orlov             40     2   3  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Jack Eichel              T.J. Oshie               60     2   1  2  
 2 Vincent Trocheck         Jamie Benn               40     2   1  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Drew Doughty             Alec Martinez            60     2   1  2  
 2 Jacob Trouba             Dmitry Orlov             40     2   2  1  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Jack Eichel              Jamie Benn               T.J. Oshie               Drew Doughty             Jacob Trouba             

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Vincent Trocheck         Jamie Benn               Kyle Palmieri            Drew Doughty             Alec Martinez            

<b>Goaltenders</b>
Starting : Curtis McElhinney        
Backup : Unknown Goalie           

<b>Extra Forwards</b>
Normal : Jack Eichel, Jamie Benn, Alex Iafallo - PP : Alex Iafallo, Kyle Palmieri - PK : Jamie Benn
<b>Extra Defensemen</b>
Normal : Jacob Trouba, Alec Martinez, Drew Doughty - PP : Drew Doughty - PK : Jacob Trouba, Alec Martinez
<b>Penalty Shots</b>
T.J. Oshie, Paul Byron, Unknown Player, Unknown Player, Jack Eichel

<b>Scratches</b>
Nikita Gusev (Healthy), Sean Walker (Healthy), Matthew Peca (Healthy), Pavel Zacha (Healthy), Dylan Gambrell (Healthy)
Michael Chaput (Healthy), Jujhar Khaira (Healthy), Kevin Gravel (Healthy), Spencer Martin (Healthy), Petr Mrazek (Healthy)</pre></div>
<h1 class="TeamLinesPro_ARI"><a id="Coyotes">Coyotes</a></h1>
<b>Lines are Incomplete</b><br />
<div class="STHSTeamLink">
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
 1 Leon Draisaitl           Unknown Player           William Nylander         38     0   2  3  
 2 Mika Zibanejad           Jeff Skinner             Kevin Hayes              37     0   2  3  
 3 Dylan Strome             Unknown Player           Wayne Simmonds           20     0   2  3  
 4 Nic Dowd                 Unknown Player           Dale Weise               5      1   3  1  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Unknown Player           Jay Bouwmeester                                   40     0   3  2  
 2 Thomas Chabot            Niklas Hjalmarsson                                30     0   3  2  
 3 Carl Gunnarsson          Andrej Sekera                                     25     0   3  2  
 4 Unknown Player           Jay Bouwmeester                                   5      0   3  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Mika Zibanejad           Jeff Skinner             Kevin Hayes              50     0   2  3  
 2 Leon Draisaitl           Wayne Simmonds           William Nylander         50     0   2  3  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Thomas Chabot            Unknown Player                                    70     0   2  3  
 2 Andrej Sekera            Jay Bouwmeester                                   30     0   2  3  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Mika Zibanejad           Kevin Hayes              85     1   2  2  
 2 Leon Draisaitl           Unknown Player           15     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Jay Bouwmeester          Unknown Player           85     1   2  2  
 2 Niklas Hjalmarsson       Carl Gunnarsson          15     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Mika Zibanejad                                    60     1   2  2  
 2 Kevin Hayes                                       40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Jay Bouwmeester          Unknown Player           60     1   2  2  
 2 Niklas Hjalmarsson       Carl Gunnarsson          40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Leon Draisaitl           Kevin Hayes              60     0   2  3  
 2 Mika Zibanejad           Jeff Skinner             40     0   2  3  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Thomas Chabot            Jay Bouwmeester          60     0   2  3  
 2 Unknown Player           Niklas Hjalmarsson       40     0   2  3  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Mika Zibanejad           Leon Draisaitl           Jeff Skinner             Thomas Chabot            Jay Bouwmeester          

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Mika Zibanejad           Kevin Hayes              Unknown Player           Jay Bouwmeester          Unknown Player           

<b>Goaltenders</b>
Starting : Tuukka Rask              
Backup : Keith Kinkaid            

<b>Extra Forwards</b>
Normal : Mika Zibanejad, Leon Draisaitl, Jeff Skinner - PP : Mika Zibanejad, Leon Draisaitl - PK : Kevin Hayes
<b>Extra Defensemen</b>
Normal : Thomas Chabot, Unknown Player, Jay Bouwmeester - PP : Thomas Chabot - PK : Unknown Player, Jay Bouwmeester
<b>Penalty Shots</b>
Leon Draisaitl, Mika Zibanejad, Dylan Strome, Kevin Hayes, William Nylander

<b>Scratches</b>
Nate Thompson (Healthy), Libor Hajek (Healthy), Ethan Bear (Healthy), Oliver Ekman-Larsson (Healthy), Cody Ceci (Healthy)
Nikita Kucherov (Healthy), Slater Koekkoek (Healthy)</pre></div>
<h1 class="TeamLinesPro_NJD"><a id="Devils">Devils</a></h1>
<b>Lines are Incomplete</b><br />
<div class="STHSTeamLink">
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
 2 William Karlsson         Unknown Player           Matt Moulson             30     1   2  2  
 3 Riley Sheahan            Nick Ritchie             Michael Raffl            20     1   2  2  
 4 Martin Hanzal            Unknown Player           Patrick Brown            10     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Unknown Player           Adam Larsson                                      40     1   2  2  
 2 Chris Tanev              Unknown Player                                    30     1   2  2  
 3 Unknown Player           Maxime Lajoie                                     20     1   2  2  
 4 Unknown Player           Adam Larsson                                      10     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Ryan Getzlaf             Timo Meier               Patric Hornqvist         60     1   2  2  
 2 William Karlsson         Unknown Player           Matt Moulson             40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Unknown Player           Adam Larsson                                      60     1   2  2  
 2 Chris Tanev              Unknown Player                                    40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Riley Sheahan            Michael Raffl            60     1   2  2  
 2 Martin Hanzal            Matt Moulson             40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Unknown Player           Adam Larsson             60     1   2  2  
 2 Chris Tanev              Unknown Player           40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Riley Sheahan                                     60     1   2  2  
 2 Martin Hanzal                                     40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Unknown Player           Adam Larsson             60     1   2  2  
 2 Chris Tanev              Unknown Player           40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Ryan Getzlaf             William Karlsson         60     1   2  2  
 2 Timo Meier               Patric Hornqvist         40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Unknown Player           Adam Larsson             60     1   2  2  
 2 Chris Tanev              Unknown Player           40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Ryan Getzlaf             Timo Meier               Patric Hornqvist         Unknown Player           Adam Larsson             

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Ryan Getzlaf             Michael Raffl            Unknown Player           Chris Tanev              Adam Larsson             

<b>Goaltenders</b>
Starting : Unknown Goalie           
Backup : Robin Lehner             

<b>Extra Forwards</b>
Normal : Martin Hanzal, Riley Sheahan, Nick Ritchie - PP : Martin Hanzal, Riley Sheahan - PK : Nick Ritchie
<b>Extra Defensemen</b>
Normal : Unknown Player, Maxime Lajoie, Chris Tanev - PP : Unknown Player - PK : Maxime Lajoie, Chris Tanev
<b>Penalty Shots</b>
Ryan Getzlaf, William Karlsson, Timo Meier, Patric Hornqvist, Unknown Player

<b>Scratches</b>
Jonathan Toews (Healthy), Jimmy Vesey (Healthy), Colby Cave (Healthy), Markus Nutivaara (Healthy), Michal Kempny (Healthy)
Darnell Nurse (Healthy), Lucas Carlsson (Healthy), Niko Mikkola (Healthy), Michael Grabner (Healthy), Christian Folin (Healthy)
Gemel Smith (Healthy), Garret Sparks (Healthy)</pre></div>
<h1 class="TeamLinesPro_ANH"><a id="Ducks">Ducks</a></h1>
<b>Lines are Incomplete</b><br />
<div class="STHSTeamLink">
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
 1 Nazem Kadri              Johnny Gaudreau          Unknown Player           30     0   2  3  
 2 Sean Monahan             Unknown Player           Unknown Player           30     0   2  3  
 3 Unknown Player           Unknown Player           Zach Aston-Reese         25     0   1  4  
 4 Unknown Player           Devin Shore              Unknown Player           15     0   3  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Unknown Player           Jake Muzzin                                       37     0   3  2  
 2 Unknown Player           Morgan Rielly                                     31     0   2  3  
 3 Unknown Player           Colin Miller                                      20     0   3  2  
 4 Unknown Player           Morgan Rielly                                     12     0   3  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Sean Monahan             Johnny Gaudreau          Unknown Player           60     0   0  5  
 2 Nazem Kadri              Unknown Player           Unknown Player           40     0   0  5  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Unknown Player           Morgan Rielly                                     60     0   0  5  
 2 Jake Muzzin              Unknown Player                                    40     0   1  4  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Unknown Player           Devin Shore              50     0   4  1  
 2 Unknown Player           Zach Aston-Reese         50     0   4  1  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Unknown Player           Jake Muzzin              60     0   5  0  
 2 Morgan Rielly            Unknown Player           40     0   5  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Unknown Player                                    60     0   5  0  
 2 Unknown Player                                    40     0   5  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Unknown Player           Jake Muzzin              60     0   5  0  
 2 Unknown Player           Morgan Rielly            40     0   5  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Nazem Kadri              Unknown Player           60     0   2  3  
 2 Unknown Player           Unknown Player           40     0   2  3  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Unknown Player           Morgan Rielly            60     0   2  3  
 2 Jake Muzzin              Unknown Player           40     0   2  3  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Sean Monahan             Johnny Gaudreau          Unknown Player           Morgan Rielly            Unknown Player           

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Unknown Player           Unknown Player           Zach Aston-Reese         Jake Muzzin              Unknown Player           

<b>Goaltenders</b>
Starting : Unknown Goalie           
Backup : Unknown Goalie           

<b>Extra Forwards</b>
Normal : Johnny Gaudreau, Nazem Kadri, Unknown Player - PP : Unknown Player, Unknown Player - PK : Unknown Player
<b>Extra Defensemen</b>
Normal : Unknown Player, Morgan Rielly, Jake Muzzin - PP : Colin Miller - PK : Morgan Rielly, Jake Muzzin
<b>Penalty Shots</b>
Sean Monahan, Unknown Player, Nazem Kadri, Johnny Gaudreau, Unknown Player

<b>Scratches</b>
Luke Schenn (Healthy), Josh Morrissey (Healthy), Tyler Bertuzzi (Healthy), Charlie McAvoy (Healthy), Jordan Kyrou (Healthy)
Noah Dobson (Healthy), Jake Guentzel (Healthy), Kevin Stenlund (Healthy), Rasmus Sandin (Healthy), Brayden Schenn (Healthy)
Martin Marincin (Healthy), Kenny Agostino (Healthy), Josh Archibald (Healthy), Tristan Jarry (Healthy), Antti Raanta (Healthy)</pre></div>
<h1 class="TeamLinesPro_CGY"><a id="Flames">Flames</a></h1>
<b>Lines are Incomplete</b><br />
<div class="STHSTeamLink">
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
 1 Bo Horvat                David Perron             Unknown Player           40     1   3  1  
 2 Phillip Danault          Unknown Player           Tom Wilson               40     0   4  1  
 3 Adam Lowry               Andre Burakovsky         Kevin Labanc             15     0   3  2  
 4 Markus Granlund          Unknown Player           Austin Watson            5      0   4  1  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Erik Karlsson            Radko Gudas                                       40     0   4  1  
 2 Jaccob Slavin            Roman Polak                                       32     0   4  1  
 3 Jonathon Merrill         Brady Skjei                                       18     0   4  1  
 4 Erik Karlsson            Jaccob Slavin                                     10     0   3  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Bo Horvat                Unknown Player           Tom Wilson               67     0   0  5  
 2 Phillip Danault          David Perron             Unknown Player           33     0   0  5  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Erik Karlsson            Jaccob Slavin                                     80     0   0  5  
 2 Brady Skjei              Jonathon Merrill                                  20     0   0  5  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Phillip Danault          Austin Watson            76     0   5  0  
 2 Adam Lowry               Markus Granlund          24     0   5  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Radko Gudas              Jaccob Slavin            72     0   5  0  
 2 Roman Polak              Brady Skjei              28     0   5  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Phillip Danault                                   60     0   5  0  
 2 Adam Lowry                                        40     0   5  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Radko Gudas              Jaccob Slavin            74     0   5  0  
 2 Roman Polak              Brady Skjei              26     0   5  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Bo Horvat                Unknown Player           69     0   2  3  
 2 Phillip Danault          Tom Wilson               31     0   2  3  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Erik Karlsson            Jaccob Slavin            70     0   4  1  
 2 Brady Skjei              Roman Polak              30     0   4  1  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Bo Horvat                Unknown Player           Unknown Player           Erik Karlsson            Jaccob Slavin            

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Phillip Danault          Adam Lowry               Austin Watson            Radko Gudas              Jaccob Slavin            

<b>Goaltenders</b>
Starting : Pekka Rinne              
Backup : Casey DeSmith            

<b>Extra Forwards</b>
Normal : Bo Horvat, Unknown Player, David Perron - PP : David Perron, Bo Horvat - PK : Phillip Danault
<b>Extra Defensemen</b>
Normal : Jaccob Slavin, Erik Karlsson, Radko Gudas - PP : Jaccob Slavin - PK : Jaccob Slavin, Radko Gudas
<b>Penalty Shots</b>
Markus Granlund, Kevin Labanc, Erik Karlsson, David Perron, Unknown Player

<b>Scratches</b>
Dylan Larkin (Healthy), Devon Toews (Healthy), Taylor Hall (Healthy), Rasmus Asplund (Healthy), Garnet Hathaway (Healthy)
Ben Bishop (Healthy), Alex Stalock (Healthy)</pre></div>
<h1 class="TeamLinesPro_PHL"><a id="Flyers">Flyers</a></h1>
<b>Lines are Incomplete</b><br />
<div class="STHSTeamLink">
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
 1 Pierre-Luc Dubois        Unknown Player           Cam Atkinson             35     0   0  5  
 2 Brock Nelson             Unknown Player           Unknown Player           30     0   0  5  
 3 Unknown Player           Unknown Player           Unknown Player           25     0   0  5  
 4 Unknown Player           Unknown Player           Josh Leivo               10     0   0  5  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Alexander Edler          Keith Yandle                                      40     0   0  5  
 2 Jonas Brodin             Unknown Player                                    30     0   2  3  
 3 Rasmus Dahlin            Jonathan Ericsson                                 20     0   2  3  
 4 Alexander Edler          Jonas Brodin                                      10     0   5  0  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Pierre-Luc Dubois        Unknown Player           Unknown Player           60     0   0  5  
 2 Brock Nelson             Unknown Player           Unknown Player           40     0   0  5  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Keith Yandle             Cam Atkinson                                      60     0   0  5  
 2 Unknown Player           Unknown Player                                    40     0   0  5  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Brock Nelson             Unknown Player           60     0   5  0  
 2 Unknown Player           Unknown Player           40     0   5  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Alexander Edler          Jonas Brodin             60     0   5  0  
 2 Jonathan Ericsson        Keith Yandle             40     0   5  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Brock Nelson                                      60     0   5  0  
 2 Unknown Player                                    40     0   5  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Alexander Edler          Jonas Brodin             60     0   5  0  
 2 Jonathan Ericsson        Keith Yandle             40     0   5  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Pierre-Luc Dubois        Unknown Player           60     0   2  3  
 2 Brock Nelson             Cam Atkinson             40     0   2  3  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Keith Yandle             Alexander Edler          60     0   2  3  
 2 Jonas Brodin             Jonathan Ericsson        40     0   2  3  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Pierre-Luc Dubois        Unknown Player           Cam Atkinson             Keith Yandle             Unknown Player           

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Brock Nelson             Unknown Player           Unknown Player           Alexander Edler          Jonas Brodin             

<b>Goaltenders</b>
Starting : Jaroslav Halak           
Backup : Unknown Goalie           

<b>Extra Forwards</b>
Normal : Unknown Player, Cam Atkinson, Pierre-Luc Dubois - PP : Unknown Player, Cam Atkinson - PK : Unknown Player
<b>Extra Defensemen</b>
Normal : Alexander Edler, Keith Yandle, Jonas Brodin - PP : Keith Yandle - PK : Alexander Edler, Jonas Brodin
<b>Penalty Shots</b>
Unknown Player, Pierre-Luc Dubois, Cam Atkinson, Brock Nelson, Unknown Player

<b>Scratches</b>
Emil Bemstrom (Healthy), Max Comtois (Healthy), Tyler Ennis (Healthy), Brett Connolly (Healthy), Filip Zadina (Healthy)
Andrew Peeke (Healthy), Joel Eriksson Ek (Healthy), Yakov Trenin (Healthy), Brandon Saad (Healthy), Mark Pysyk (Healthy)
Ryan Strome (Healthy), Mikko Koskinen (Healthy)</pre></div>
<h1 class="TeamLinesPro_VGK"><a id="GoldenKnights">Golden Knights</a></h1>
<b>Lines are Complete</b><br />
<div class="STHSTeamLink">
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
 1 Nicklas Backstrom        Craig Smith              Andrei Svechnikov        25     2   2  1  
 2 Colton Sissons           Milan Lucic              Jordan Eberle            25     2   2  1  
 3 Nolan Patrick            Scott Laughton           Drake Batherson          25     2   2  1  
 4 Jacob de La Rose         Marcus Sorensen          Dryden Hunt              25     2   2  1  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Alex Goligoski           Travis Sanheim                                    30     1   2  2  
 2 Johnny Boychuk           Henri Jokiharju                                   30     1   2  2  
 3 John Gilmour             Joel Hanley                                       30     1   2  2  
 4 Alex Goligoski           Johnny Boychuk                                    10     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Nicklas Backstrom        Craig Smith              Jordan Eberle            65     0   1  4  
 2 Nolan Patrick            Andrei Svechnikov        Drake Batherson          35     0   1  4  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Alex Goligoski           Travis Sanheim                                    65     0   1  4  
 2 Henri Jokiharju          Johnny Boychuk                                    35     0   1  4  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Colton Sissons           Scott Laughton           70     1   4  0  
 2 Jacob de La Rose         Marcus Sorensen          30     1   4  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Alex Goligoski           Johnny Boychuk           60     1   4  0  
 2 Travis Sanheim           Joel Hanley              40     1   4  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Colton Sissons                                    60     0   5  0  
 2 Scott Laughton                                    40     0   5  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Alex Goligoski           Johnny Boychuk           60     0   5  0  
 2 Travis Sanheim           Joel Hanley              40     0   5  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Nicklas Backstrom        Craig Smith              50     1   2  2  
 2 Colton Sissons           Jordan Eberle            50     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Alex Goligoski           Johnny Boychuk           50     1   2  2  
 2 Henri Jokiharju          Travis Sanheim           50     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Nicklas Backstrom        Craig Smith              Jordan Eberle            Alex Goligoski           Travis Sanheim           

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Scott Laughton           Jacob de La Rose         Colton Sissons           Alex Goligoski           Johnny Boychuk           

<b>Goaltenders</b>
Starting : Mackenzie Blackwood      
Backup : Adin Hill                

<b>Extra Forwards</b>
Normal : Colton Sissons, Craig Smith, Jordan Eberle - PP : Colton Sissons, Jordan Eberle - PK : Colton Sissons
<b>Extra Defensemen</b>
Normal : Alex Goligoski, Johnny Boychuk, Travis Sanheim - PP : Alex Goligoski - PK : Alex Goligoski, Johnny Boychuk
<b>Penalty Shots</b>
Alex Goligoski, Nolan Patrick, Nicklas Backstrom, Jordan Eberle, Craig Smith

<b>Scratches</b>
None
</pre></div>
<h1 class="TeamLinesPro_CAR"><a id="Hurricanes">Hurricanes</a></h1>
<b>Lines are Incomplete</b><br />
<div class="STHSTeamLink">
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
 1 Jordan Szwarz            Evander Kane             Unknown Player           25     3   1  1  
 2 Paul Stastny             James Neal               Mathieu Perreault        25     3   1  1  
 3 Brett Sutter             Pontus Aberg             Bobby Ryan               25     3   1  1  
 4 Rem Pitlick              Unknown Player           Mathieu Perreault        25     3   1  1  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Ilya Lyubushkin          Unknown Player                                    25     1   2  2  
 2 Unknown Player           Jordan Schmaltz                                   25     1   2  2  
 3 Josh Mahura              Riley Stillman                                    25     1   2  2  
 4 Ilya Lyubushkin          Unknown Player                                    25     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Paul Stastny             Pontus Aberg             Mathieu Perreault        60     3   1  1  
 2 Brett Sutter             Evander Kane             Unknown Player           40     3   1  1  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player                                    60     3   1  1  
 2 Josh Mahura              Riley Stillman                                    40     3   1  1  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Paul Stastny             Unknown Player           60     3   1  1  
 2 Mathieu Perreault        Unknown Player           40     3   1  1  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Unknown Player           Ilya Lyubushkin          60     3   1  1  
 2 Josh Mahura              Jordan Schmaltz          40     3   1  1  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Brett Sutter                                      60     2   2  1  
 2 Unknown Player                                    40     2   2  1  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Unknown Player           Ilya Lyubushkin          60     2   2  1  
 2 Riley Stillman           Unknown Player           40     2   2  1  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           60     3   1  1  
 2 Jordan Szwarz            Brett Sutter             40     3   1  1  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Ilya Lyubushkin          Unknown Player           60     3   1  1  
 2 Unknown Player           Josh Mahura              40     3   1  1  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Unknown Player           Evander Kane             Paul Stastny             Ilya Lyubushkin          Unknown Player           

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Unknown Player           Evander Kane             Paul Stastny             Ilya Lyubushkin          Unknown Player           

<b>Goaltenders</b>
Starting : Unknown Goalie           
Backup : Jonathan Bernier         

<b>Extra Forwards</b>
Normal : Rem Pitlick, Paul Stastny, Evander Kane - PP : Bobby Ryan, Mathieu Perreault - PK : Brett Sutter
<b>Extra Defensemen</b>
Normal : Unknown Player, Riley Stillman, Ilya Lyubushkin - PP : Unknown Player - PK : Jordan Schmaltz, Ilya Lyubushkin
<b>Penalty Shots</b>
Rem Pitlick, Paul Stastny, Evander Kane, Bobby Ryan, Mathieu Perreault

<b>Scratches</b>
Boo Nieves (Healthy), Nick Suzuki (Healthy), Kaapo Kakko (Healthy), Jack Hughes (Healthy), Oliver Kylington (Healthy)
Christian Djoos (Healthy), Jan Rutta (Healthy), Jakob Chychrun (Healthy), Drake Caggiula (Healthy), Mark Jankowski (Healthy)
Rasmus Andersson (Healthy), Michael Anderson (Healthy), Alexander Volkov (Healthy), Mitchell Stephens (Healthy), German Rubtsov (Healthy)
Ryan Murray (Healthy), Ryan Hartman (Healthy), Cayden Primeau (Healthy), Pavel Francouz (Healthy), Martin Jones (Healthy)</pre></div>
<h1 class="TeamLinesPro_NYI"><a id="Islanders">Islanders</a></h1>
<b>Lines are Incomplete</b><br />
<div class="STHSTeamLink">
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
 1 Steven Stamkos           Jakub Voracek            Joe Pavelski             40     0   2  3  
 2 Ryan O'Reilly            Brad Richardson          Josh Anderson            30     0   4  1  
 3 Mathew Barzal            Matthew Nieto            Alexander Radulov        20     0   2  3  
 4 Calle Jarnkrok           Daniel Carr              Connor Brown             10     0   4  1  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Ryan Pulock              Ryan Ellis                                        45     0   2  3  
 2 Colton Parayko           Joe Hicketts                                      30     0   3  2  
 3 Dylan DeMelo             Scott Harrington                                  15     1   3  1  
 4 Colton Parayko           Ryan Ellis                                        10     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Ryan O'Reilly            Jakub Voracek            Steven Stamkos           60     0   0  5  
 2 Joe Pavelski             Mathew Barzal            Alexander Radulov        40     0   0  5  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Colton Parayko           Ryan Ellis                                        70     0   0  5  
 2 Ryan Pulock              Dylan DeMelo                                      30     0   0  5  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Brad Richardson          Matthew Nieto            60     0   5  0  
 2 Ryan O'Reilly            Connor Brown             40     0   5  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Joe Hicketts             Ryan Ellis               60     0   5  0  
 2 Ryan Pulock              Colton Parayko           40     0   5  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Brad Richardson                                   60     0   5  0  
 2 Matthew Nieto                                     40     0   5  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Joe Hicketts             Ryan Ellis               60     0   5  0  
 2 Ryan Pulock              Colton Parayko           40     0   5  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Ryan O'Reilly            Alexander Radulov        60     0   2  3  
 2 Steven Stamkos           Jakub Voracek            40     0   2  3  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Colton Parayko           Ryan Ellis               60     1   2  2  
 2 Ryan Pulock              Dylan DeMelo             40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Ryan O'Reilly            Jakub Voracek            Steven Stamkos           Alexander Radulov        Ryan Ellis               

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Ryan O'Reilly            Brad Richardson          Matthew Nieto            Joe Hicketts             Ryan Ellis               

<b>Goaltenders</b>
Starting : Unknown Goalie           
Backup : Philipp Grubauer         

<b>Extra Forwards</b>
Normal : Mathew Barzal, Josh Anderson, Daniel Carr - PP : Mathew Barzal, Josh Anderson - PK : Steven Stamkos
<b>Extra Defensemen</b>
Normal : Joe Hicketts, Scott Harrington, Ryan Pulock - PP : Joe Hicketts - PK : Scott Harrington, Ryan Pulock
<b>Penalty Shots</b>
Steven Stamkos, Ryan O'Reilly, Joe Pavelski, Jakub Voracek, Alexander Radulov

<b>Scratches</b>
Cale Makar (Healthy), Victor Hedman (Healthy), Mark Barberio (Healthy), Jordan Binnington (Healthy)</pre></div>
<h1 class="TeamLinesPro_WPG"><a id="Jets">Jets</a></h1>
<b>Lines are Incomplete</b><br />
<div class="STHSTeamLink">
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
 1 Derek Stepan             Unknown Player           Kasperi Kapanen          40     0   1  4  
 2 Casey Cizikas            Roope Hintz              Erik Haula               30     0   2  3  
 3 Unknown Player           Unknown Player           Leo Komarov              20     0   3  2  
 4 Jesperi Kotkaniemi       Unknown Player           Unknown Player           10     1   3  1  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Mike Green               Kevin Shattenkirk                                 40     0   1  4  
 2 Unknown Player           Miro Heiskanen                                    30     0   2  3  
 3 Madison Bowey            Olli Maatta                                       20     0   3  2  
 4 Mike Green               Olli Maatta                                       10     1   3  1  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           Kasperi Kapanen          60     1   2  2  
 2 Unknown Player           Roope Hintz              Leo Komarov              40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Miro Heiskanen           Mike Green                                        60     1   2  2  
 2 Unknown Player           Kevin Shattenkirk                                 40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Casey Cizikas            Unknown Player           60     0   4  1  
 2 Unknown Player           Leo Komarov              40     0   4  1  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Unknown Player           Olli Maatta              60     0   4  1  
 2 Miro Heiskanen           Madison Bowey            40     0   4  1  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Casey Cizikas                                     60     0   5  0  
 2 Unknown Player                                    40     0   5  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Unknown Player           Olli Maatta              60     0   5  0  
 2 Miro Heiskanen           Madison Bowey            40     0   5  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Casey Cizikas            Unknown Player           60     1   2  2  
 2 Derek Stepan             Leo Komarov              40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Unknown Player           Olli Maatta              60     1   2  2  
 2 Kevin Shattenkirk        Mike Green               40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Derek Stepan             Unknown Player           Kasperi Kapanen          Mike Green               Kevin Shattenkirk        

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Casey Cizikas            Unknown Player           Leo Komarov              Olli Maatta              Unknown Player           

<b>Goaltenders</b>
Starting : Matt Murray              
Backup : Unknown Goalie           

<b>Extra Forwards</b>
Normal : Leo Komarov, Unknown Player, Casey Cizikas - PP : Kasperi Kapanen, Casey Cizikas - PK : Unknown Player
<b>Extra Defensemen</b>
Normal : Mike Green, Miro Heiskanen, Olli Maatta - PP : Mike Green - PK : Olli Maatta, Mike Green
<b>Penalty Shots</b>
Casey Cizikas, Derek Stepan, Unknown Player, Kasperi Kapanen, Leo Komarov

<b>Scratches</b>
Joonas Donskoi (Healthy), Markus Hannikainen (Healthy), Juuso Riikola (Healthy), Matthew Tkachuk (Healthy), Eetu Luostarinen (Healthy)
Beck Malenstyn (Healthy), Carsen Twarynski (Healthy), Jansen Harkins (Healthy), Kale Clague (Healthy), David Kase (Healthy)
Ben Street (Healthy), Sami Vatanen (Healthy), Jean-Gabriel Pageau (Healthy), Scott Wilson (Healthy), Barclay Goodrow (Healthy)
Juuse Saros (Healthy), Vitek Vanecek (Healthy)</pre></div>
<h1 class="TeamLinesPro_LAK"><a id="Kings">Kings</a></h1>
<b>Lines are Incomplete</b><br />
<div class="STHSTeamLink">
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
 1 Elias Lindholm           Alex Ovechkin            Unknown Player           35     0   1  4  
 2 Unknown Player           Jonathan Huberdeau       Brock Boeser             35     0   1  4  
 3 Unknown Player           Unknown Player           Unknown Player           20     0   3  2  
 4 Carter Verhaeghe         Unknown Player           Riley Nash               10     1   3  1  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 P.K. Subban              Unknown Player                                    40     0   3  2  
 2 Travis Hamonic           Unknown Player                                    30     0   4  1  
 3 Neal Pionk               Adam Pelech                                       25     0   4  1  
 4 P.K. Subban              Unknown Player                                    5      0   3  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Unknown Player           Alex Ovechkin            Unknown Player           60     0   0  5  
 2 Elias Lindholm           Jonathan Huberdeau       Brock Boeser             40     0   0  5  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 P.K. Subban              Unknown Player                                    60     0   2  3  
 2 Neal Pionk               Unknown Player                                    40     0   2  3  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           60     0   5  0  
 2 Elias Lindholm           Unknown Player           40     0   5  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Travis Hamonic           Unknown Player           60     0   5  0  
 2 Neal Pionk               Unknown Player           40     0   5  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Unknown Player                                    60     0   5  0  
 2 Elias Lindholm                                    40     0   5  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Travis Hamonic           Unknown Player           60     0   5  0  
 2 P.K. Subban              Neal Pionk               40     0   5  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           55     0   1  4  
 2 Elias Lindholm           Alex Ovechkin            45     0   1  4  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 P.K. Subban              Unknown Player           60     0   3  2  
 2 Travis Hamonic           Unknown Player           40     0   3  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Unknown Player           Alex Ovechkin            Unknown Player           P.K. Subban              Unknown Player           

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Elias Lindholm           Unknown Player           Unknown Player           Travis Hamonic           Unknown Player           

<b>Goaltenders</b>
Starting : Unknown Goalie           
Backup : Malcolm Subban           

<b>Extra Forwards</b>
Normal : Unknown Player, Unknown Player, Unknown Player - PP : Unknown Player, Unknown Player - PK : Unknown Player
<b>Extra Defensemen</b>
Normal : Unknown Player, Adam Pelech, Travis Hamonic - PP : Unknown Player - PK : Adam Pelech, Travis Hamonic
<b>Penalty Shots</b>
Unknown Player, Alex Ovechkin, Jonathan Huberdeau, Unknown Player, Brock Boeser

<b>Scratches</b>
Jordan Greenway (Healthy), Frederik Gauthier (Healthy), Mitch Marner (Healthy), Miles Wood (Healthy), Christian Wolanin (Healthy)
Calle Rosen (Healthy), Pierre Engvall (Healthy), Nicolas Roy (Healthy), Seth Jones (Healthy), Nathan MacKinnon (Healthy)
Devan Dubnyk (Healthy)</pre></div>
<h1 class="TeamLinesPro_TBL"><a id="Lightning">Lightning</a></h1>
<b>Lines are Incomplete</b><br />
<div class="STHSTeamLink">
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
 1 John Tavares             Mike Hoffman             Brendan Gallagher        40     0   3  2  
 2 Joe Thornton             Unknown Player           Tanner Pearson           30     0   3  2  
 3 Unknown Player           Ondrej Palat             Tyler Pitlick            20     1   2  2  
 4 Brandon Sutter           Unknown Player           Matt Martin              10     2   2  1  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Esa Lindell              Kris Russell                                      40     1   4  0  
 2 Unknown Player           Zach Bogosian                                     30     1   4  0  
 3 Vince Dunn               Unknown Player                                    20     1   4  0  
 4 Unknown Player           Zach Bogosian                                     10     1   4  0  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 John Tavares             Brendan Gallagher        Mike Hoffman             60     0   0  5  
 2 Joe Thornton             Unknown Player           Tanner Pearson           40     0   0  5  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Ondrej Palat             Vince Dunn                                        60     0   0  5  
 2 Esa Lindell              Unknown Player                                    40     0   0  5  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Brandon Sutter           Unknown Player           55     0   5  0  
 2 Unknown Player           Tyler Pitlick            45     0   5  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Esa Lindell              Kris Russell             55     0   5  0  
 2 Unknown Player           Zach Bogosian            45     0   5  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Brandon Sutter                                    60     0   5  0  
 2 Unknown Player                                    40     0   5  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Esa Lindell              Kris Russell             60     0   5  0  
 2 Unknown Player           Zach Bogosian            40     0   5  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 John Tavares             Mike Hoffman             60     0   3  2  
 2 Unknown Player           Brendan Gallagher        40     0   3  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Esa Lindell              Zach Bogosian            60     0   3  2  
 2 Unknown Player           Unknown Player           40     0   3  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   John Tavares             Mike Hoffman             Brendan Gallagher        Esa Lindell              Vince Dunn               

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Brandon Sutter           Unknown Player           Unknown Player           Esa Lindell              Kris Russell             

<b>Goaltenders</b>
Starting : Connor Hellebuyck        
Backup : Unknown Goalie           

<b>Extra Forwards</b>
Normal : John Tavares, Mike Hoffman, Brendan Gallagher - PP : Joe Thornton, Mike Hoffman - PK : Unknown Player
<b>Extra Defensemen</b>
Normal : Kris Russell, Esa Lindell, Zach Bogosian - PP : Kris Russell - PK : Zach Bogosian, Esa Lindell
<b>Penalty Shots</b>
Joe Thornton, Tanner Pearson, Zach Bogosian, John Tavares, Unknown Player

<b>Scratches</b>
Tyler Motte (Healthy), Luca Sbisa (Healthy), Andrew Cogliano (Healthy), Derick Brassard (Healthy), Marco Scandella (Healthy)
Zack Smith (Healthy), Brian Elliott (Healthy)</pre></div>
<h1 class="TeamLinesPro_TOR"><a id="MapleLeafs">Maple Leafs</a></h1>
<b>Lines are Incomplete</b><br />
<div class="STHSTeamLink">
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
 1 Noel Acciari             Lukas Radil              Troy Terry               40     1   2  2  
 2 David Krejci             Sam Bennett              Unknown Player           30     1   2  2  
 3 Tomas Hertl              Unknown Player           Tomas Nosek              20     1   2  2  
 4 Unknown Player           Brett Howden             Frank Vatrano            10     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Alex Pietrangelo         Brenden Dillon                                    40     1   2  2  
 2 Unknown Player           Patrik Nemeth                                     30     1   2  2  
 3 Shea Theodore            Mark Borowiecki                                   20     1   2  2  
 4 Unknown Player           Brenden Dillon                                    10     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Troy Terry               Lukas Radil              Unknown Player           60     1   2  2  
 2 David Krejci             Sam Bennett              Noel Acciari             40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Mark Borowiecki          Brenden Dillon                                    60     1   2  2  
 2 Unknown Player           Patrik Nemeth                                     40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Noel Acciari             David Krejci             60     1   2  2  
 2 Troy Terry               Unknown Player           40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Shea Theodore            Brenden Dillon           60     1   2  2  
 2 Unknown Player           Patrik Nemeth            40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Unknown Player                                    60     1   2  2  
 2 David Krejci                                      40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Shea Theodore            Brenden Dillon           60     1   2  2  
 2 Unknown Player           Patrik Nemeth            40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Troy Terry               David Krejci             60     1   2  2  
 2 Sam Bennett              Unknown Player           40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Shea Theodore            Brenden Dillon           60     1   2  2  
 2 Unknown Player           Patrik Nemeth            40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Noel Acciari             Lukas Radil              Troy Terry               Alex Pietrangelo         Brenden Dillon           

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Noel Acciari             Lukas Radil              Troy Terry               Alex Pietrangelo         Brenden Dillon           

<b>Goaltenders</b>
Starting : James Reimer             
Backup : Jared Coreau             

<b>Extra Forwards</b>
Normal : Troy Terry, David Krejci, Unknown Player - PP : Troy Terry, David Krejci - PK : Unknown Player
<b>Extra Defensemen</b>
Normal : Shea Theodore, Mark Borowiecki, Brenden Dillon - PP : Shea Theodore - PK : Mark Borowiecki, Brenden Dillon
<b>Penalty Shots</b>
Troy Terry, David Krejci, Noel Acciari, Sam Bennett, Unknown Player

<b>Scratches</b>
Mike Matheson (Healthy), Christian Dvorak (Healthy), Cody Glass (Healthy), Sean Kuraly (Healthy), Nic Hague (Healthy)
Cody Goloubef (Healthy), Radek Faksa (Healthy), Frederik Andersen (Suspend)</pre></div>
<h1 class="TeamLinesPro_EDM"><a id="Oilers">Oilers</a></h1>
<b>Lines are Incomplete</b><br />
<div class="STHSTeamLink">
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
 1 Unknown Player           Unknown Player           Unknown Player           40     1   2  2  
 2 Unknown Player           Dustin Brown             Luke Glendening          30     1   2  2  
 3 Unknown Player           Unknown Player           Marcus Foligno           20     1   2  2  
 4 Anthony Cirelli          Unknown Player           Luke Kunin               10     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Jeff Petry               Mattias Ekholm                                    40     1   2  2  
 2 Brandon Montour          John Moore                                        30     1   2  2  
 3 Noah Hanifin             Ryan Graves                                       20     1   2  2  
 4 Jeff Petry               Mattias Ekholm                                    10     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           Unknown Player           60     1   2  2  
 2 Unknown Player           Dustin Brown             Luke Glendening          40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Jeff Petry               Mattias Ekholm                                    60     1   2  2  
 2 Brandon Montour          John Moore                                        40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           60     1   2  2  
 2 Unknown Player           Dustin Brown             40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Jeff Petry               Mattias Ekholm           60     1   2  2  
 2 Brandon Montour          John Moore               40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Unknown Player                                    60     1   2  2  
 2 Unknown Player                                    40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Jeff Petry               Mattias Ekholm           60     1   2  2  
 2 Brandon Montour          John Moore               40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           60     1   2  2  
 2 Unknown Player           Dustin Brown             40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Jeff Petry               Mattias Ekholm           60     1   2  2  
 2 Brandon Montour          John Moore               40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Unknown Player           Unknown Player           Unknown Player           Jeff Petry               Mattias Ekholm           

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Unknown Player           Unknown Player           Unknown Player           Jeff Petry               Mattias Ekholm           

<b>Goaltenders</b>
Starting : John Gibson              
Backup : Unknown Goalie           

<b>Extra Forwards</b>
Normal : Unknown Player, Unknown Player, Anthony Cirelli - PP : Unknown Player, Unknown Player - PK : Anthony Cirelli
<b>Extra Defensemen</b>
Normal : Noah Hanifin, Ryan Graves, Brandon Montour - PP : Noah Hanifin - PK : Ryan Graves, Brandon Montour
<b>Penalty Shots</b>
Unknown Player, Unknown Player, Unknown Player, Dustin Brown, Unknown Player

<b>Scratches</b>
Lars Eller (Healthy), Joey Anderson (Healthy), Ryan Nugent-Hopkins (Healthy), Blake Wheeler (Healthy), Dominic Toninato (Healthy)
Nick Schmaltz (Healthy), Givani Smith (Healthy), Rhett Gardner (Healthy), Mikael Granlund (Healthy), Jarred Tinordi (Healthy)
Jamie Oleksiak (Healthy), Anthony Bitetto (Healthy), Eric Robinson (Healthy), Elvis Merzlikins (Healthy)</pre></div>
<h1 class="TeamLinesPro_FLA"><a id="Panthers">Panthers</a></h1>
<b>Lines are Incomplete</b><br />
<div class="STHSTeamLink">
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
 1 Tyler Seguin             Unknown Player           Unknown Player           35     1   2  2  
 2 Tyler Bozak              Josh Bailey              Jake Debrusk             30     1   2  2  
 3 Unknown Player           Lawson Crouse            Curtis Lazar             25     1   2  2  
 4 Paul Carey               Max Jones                Buddy Robinson           10     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Damon Severson           Unknown Player                                    30     1   2  2  
 2 Brent Burns              Carl Dahlstrom                                    30     1   2  2  
 3 Justin Schultz           Michael Stone                                     25     1   2  2  
 4 Brent Burns              Unknown Player                                    15     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Tyler Seguin             Unknown Player           Jake Debrusk             65     0   0  5  
 2 Unknown Player           Paul Carey               Josh Bailey              35     0   0  5  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Brent Burns              Damon Severson                                    65     0   0  5  
 2 Unknown Player           Justin Schultz                                    35     0   0  5  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           50     1   4  0  
 2 Curtis Lazar             Buddy Robinson           50     1   4  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Unknown Player           Carl Dahlstrom           50     1   4  0  
 2 Brent Burns              Damon Severson           50     1   4  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Unknown Player                                    50     1   4  0  
 2 Unknown Player                                    50     1   4  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Unknown Player           Carl Dahlstrom           50     1   4  0  
 2 Brent Burns              Damon Severson           50     1   4  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Tyler Seguin             Jake Debrusk             50     1   2  2  
 2 Tyler Bozak              Josh Bailey              50     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Brent Burns              Unknown Player           50     1   2  2  
 2 Damon Severson           Justin Schultz           50     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Tyler Seguin             Unknown Player           Jake Debrusk             Brent Burns              Damon Severson           

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Unknown Player           Curtis Lazar             Buddy Robinson           Unknown Player           Damon Severson           

<b>Goaltenders</b>
Starting : Anton Khudobin           
Backup : Jake Oettinger           

<b>Extra Forwards</b>
Normal : Tyler Seguin, Josh Bailey, Unknown Player - PP : Tyler Seguin, Unknown Player - PK : Unknown Player
<b>Extra Defensemen</b>
Normal : Justin Schultz, Brent Burns, Carl Dahlstrom - PP : Justin Schultz - PK : Justin Schultz, Brent Burns
<b>Penalty Shots</b>
Unknown Player, Carl Dahlstrom, Tyler Seguin, Tyler Bozak, Paul Carey

<b>Scratches</b>
Darren Helm (Healthy), Marcus Johansson (Healthy), Martin Necas (Healthy), Erik Brannstrom (Healthy), Alexander Nylander (Healthy)
Danny O'Regan (Healthy), Carl Soderberg (Healthy), Nathan Beaulieu (Healthy), Xavier Ouellet (Healthy), David Rittich (Healthy)</pre></div>
<h1 class="TeamLinesPro_PIT"><a id="Penguins">Penguins</a></h1>
<b>Lines are Incomplete</b><br />
<div class="STHSTeamLink">
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
 1 Michael Rasmussen        Brady Tkachuk            Unknown Player           40     1   1  3  
 2 Unknown Player           Unknown Player           Micheal Ferland          30     1   2  2  
 3 Unknown Player           James van Riemsdyk       Chris Wagner             20     1   1  3  
 4 Tyson Jost               Colin Wilson             Anthony Greco            10     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Dmitry Kulikov           Cam Fowler                                        40     2   2  1  
 2 Unknown Player           Unknown Player                                    30     1   2  2  
 3 Unknown Player           Unknown Player                                    20     1   3  1  
 4 Unknown Player           Unknown Player                                    10     0   1  4  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Unknown Player           Brady Tkachuk            Michael Rasmussen        55     0   0  5  
 2 Tyson Jost               Chris Wagner             Colin Wilson             45     0   1  4  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Cam Fowler               Unknown Player                                    55     0   1  4  
 2 Unknown Player           Unknown Player                                    45     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Chris Wagner             Unknown Player           60     1   4  0  
 2 Michael Rasmussen        Unknown Player           40     1   3  1  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           60     1   4  0  
 2 Dmitry Kulikov           Cam Fowler               40     1   3  1  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Unknown Player                                    60     1   4  0  
 2 Unknown Player                                    40     1   4  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Cam Fowler               Dmitry Kulikov           60     0   5  0  
 2 Unknown Player           Unknown Player           40     1   4  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Chris Wagner             Brady Tkachuk            60     1   1  3  
 2 Unknown Player           Micheal Ferland          40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Unknown Player           Cam Fowler               65     2   1  2  
 2 Dmitry Kulikov           Unknown Player           35     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Chris Wagner             Brady Tkachuk            Unknown Player           Cam Fowler               Dmitry Kulikov           

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Unknown Player           Brady Tkachuk            Chris Wagner             Unknown Player           Cam Fowler               

<b>Goaltenders</b>
Starting : Semyon Varlamov          
Backup : Anton Forsberg           

<b>Extra Forwards</b>
Normal : Unknown Player, James van Riemsdyk, Chris Wagner - PP : Michael Rasmussen, Colin Wilson - PK : Brady Tkachuk
<b>Extra Defensemen</b>
Normal : Unknown Player, Dmitry Kulikov, Unknown Player - PP : Unknown Player - PK : Cam Fowler, Unknown Player
<b>Penalty Shots</b>
Brady Tkachuk, Unknown Player, Chris Wagner, Unknown Player, James van Riemsdyk

<b>Scratches</b>
Sam Gagner (Healthy), Evan Rodrigues (Healthy), Dante Fabbro (Healthy), Alexandre Fortin (Healthy), Nick Cousins (Healthy)</pre></div>
<h1 class="TeamLinesPro_NSH"><a id="Predators">Predators</a></h1>
<b>Lines are Incomplete</b><br />
<div class="STHSTeamLink">
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
 1 Logan Couture            Reilly Smith             Alex Killorn             40     0   1  4  
 2 Jordan Staal             Andreas Athanasiou       Sam Reinhart             35     0   0  5  
 3 Adam Henrique            Ryan Dzingel             Alex Tuch                20     0   0  5  
 4 Unknown Player           Adrian Kempe             Blake Comeau             5      0   5  0  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Oscar Klefbom            Jack Johnson                                      40     0   2  3  
 2 Deryk Engelland          Nick Holden                                       35     0   2  3  
 3 Erik Cernak              Zach Redmond                                      15     0   2  3  
 4 Oscar Klefbom            Jack Johnson                                      10     0   2  3  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Logan Couture            Reilly Smith             Sam Reinhart             60     0   0  5  
 2 Adam Henrique            Alex Killorn             Andreas Athanasiou       40     0   0  5  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Oscar Klefbom            Deryk Engelland                                   60     0   0  5  
 2 Nick Holden              Jack Johnson                                      40     0   0  5  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Jordan Staal             Alex Killorn             60     0   5  0  
 2 Unknown Player           Reilly Smith             40     0   5  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Oscar Klefbom            Jack Johnson             60     0   5  0  
 2 Deryk Engelland          Nick Holden              40     0   5  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Jordan Staal                                      60     0   5  0  
 2 Unknown Player                                    40     0   5  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Jack Johnson             Oscar Klefbom            60     0   5  0  
 2 Deryk Engelland          Nick Holden              40     0   5  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Logan Couture            Alex Killorn             60     0   2  3  
 2 Jordan Staal             Reilly Smith             40     0   2  3  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Oscar Klefbom            Jack Johnson             60     0   2  3  
 2 Deryk Engelland          Nick Holden              40     0   2  3  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Jordan Staal             Alex Killorn             Sam Reinhart             Oscar Klefbom            Jack Johnson             

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Jordan Staal             Blake Comeau             Unknown Player           Oscar Klefbom            Jack Johnson             

<b>Goaltenders</b>
Starting : Carey Price              
Backup : Pheonix Copley           

<b>Extra Forwards</b>
Normal : Andreas Athanasiou, Alex Killorn, Alex Tuch - PP : Adrian Kempe, Andreas Athanasiou - PK : Adrian Kempe
<b>Extra Defensemen</b>
Normal : Erik Cernak, Oscar Klefbom, Nick Holden - PP : Nick Holden - PK : Erik Cernak, Nick Holden
<b>Penalty Shots</b>
Alex Killorn, Ryan Dzingel, Andreas Athanasiou, Sam Reinhart, Reilly Smith

<b>Scratches</b>
Dominik Kubalik (Healthy), Morgan Frost (Healthy), Danton Heinen (Healthy), J.C. Beaudin (Healthy), Brandon Gignac (Healthy)
Kevan Miller (Healthy), Jayson Megna (Healthy), Greg Carey (Healthy), Logan Shaw (Healthy)</pre></div>
<h1 class="TeamLinesPro_NYR"><a id="Rangers">Rangers</a></h1>
<b>Lines are Incomplete</b><br />
<div class="STHSTeamLink">
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
 1 Claude Giroux            Gabriel Landeskog        Mark Stone               40     1   2  2  
 2 Chris Tierney            Charlie Coyle            Artem Anisimov           30     1   2  2  
 3 Colin White              Jesper Bratt             Unknown Player           20     1   2  2  
 4 Ryan Donato              Reid Boucher             Artturi Lehkonen         10     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Shea Weber               Roman Josi                                        40     1   2  2  
 2 Ben Hutton               Erik Gustafsson                                   30     1   2  2  
 3 Nick Jensen              Matt Grzelcyk                                     20     1   2  2  
 4 Shea Weber               Roman Josi                                        10     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Claude Giroux            Gabriel Landeskog        Mark Stone               60     1   2  2  
 2 Chris Tierney            Charlie Coyle            Jesper Bratt             40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Shea Weber               Roman Josi                                        60     1   2  2  
 2 Ben Hutton               Erik Gustafsson                                   40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Chris Tierney            Unknown Player           60     1   3  1  
 2 Claude Giroux            Artturi Lehkonen         40     1   3  1  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Shea Weber               Roman Josi               60     0   4  1  
 2 Ben Hutton               Erik Gustafsson          40     0   4  1  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Claude Giroux                                     60     0   5  0  
 2 Gabriel Landeskog                                 40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Shea Weber               Roman Josi               60     0   5  0  
 2 Ben Hutton               Erik Gustafsson          40     0   5  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Claude Giroux            Gabriel Landeskog        60     1   2  2  
 2 Mark Stone               Chris Tierney            40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Shea Weber               Roman Josi               60     1   2  2  
 2 Ben Hutton               Erik Gustafsson          40     1   2  2  

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
Normal : Artem Anisimov, Colin White, Unknown Player - PP : Artem Anisimov, Colin White - PK : Unknown Player
<b>Extra Defensemen</b>
Normal : Nick Jensen, Matt Grzelcyk, Ben Hutton - PP : Nick Jensen - PK : Matt Grzelcyk, Ben Hutton
<b>Penalty Shots</b>
Claude Giroux, Gabriel Landeskog, Mark Stone, Chris Tierney, Charlie Coyle

<b>Scratches</b>
John Marino (Healthy), Kevin Porter (Healthy), Ian McCoshen (Healthy), Charlie Lindgren (Healthy)</pre></div>
<h1 class="TeamLinesPro_DET"><a id="RedWings">Red Wings</a></h1>
<b>Lines are Incomplete</b><br />
<div class="STHSTeamLink">
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
 1 Matt Duchene             Unknown Player           Unknown Player           40     1   2  2  
 2 Unknown Player           Unknown Player           Unknown Player           30     1   2  2  
 3 Ivan Barbashev           Unknown Player           Unknown Player           20     1   2  2  
 4 Unknown Player           Andrew Mangiapane        Mathieu Joseph           10     0   3  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Ryan Suter               Unknown Player                                    40     1   2  2  
 2 Torey Krug               Unknown Player                                    30     1   2  2  
 3 Unknown Player           Unknown Player                                    20     1   2  2  
 4 Unknown Player           Unknown Player                                    10     1   3  1  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           Unknown Player           60     0   1  4  
 2 Matt Duchene             Unknown Player           Unknown Player           40     0   1  4  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Ryan Suter               Unknown Player                                    60     1   2  2  
 2 Torey Krug               Unknown Player                                    40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Unknown Player           Ivan Barbashev           60     1   2  2  
 2 Unknown Player           Unknown Player           40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Unknown Player           Ryan Suter               60     1   2  2  
 2 Torey Krug               Unknown Player           40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Ivan Barbashev                                    60     1   2  2  
 2 Unknown Player                                    40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           60     1   2  2  
 2 Unknown Player           Ryan Suter               40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Unknown Player           Ivan Barbashev           60     1   2  2  
 2 Unknown Player           Unknown Player           40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Unknown Player           Ryan Suter               60     1   2  2  
 2 Unknown Player           Torey Krug               40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Unknown Player           Unknown Player           Unknown Player           Ryan Suter               Unknown Player           

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Unknown Player           Ivan Barbashev           Unknown Player           Unknown Player           Unknown Player           

<b>Goaltenders</b>
Starting : Sergei Bobrovsky         
Backup : Marcus Hogberg           

<b>Extra Forwards</b>
Normal : Unknown Player, Matt Duchene, Unknown Player - PP : Unknown Player, Unknown Player - PK : Ivan Barbashev
<b>Extra Defensemen</b>
Normal : Unknown Player, Ryan Suter, Unknown Player - PP : Torey Krug - PK : Unknown Player, Ryan Suter
<b>Penalty Shots</b>
Unknown Player, Unknown Player, Unknown Player, Matt Duchene, Unknown Player

<b>Scratches</b>
Jared McCann (Healthy), Connor McDavid (Healthy), Oliver Bjorkstrand (Healthy), Mark Giordano (Healthy), Marc Staal (Healthy)
Patrik Laine (Healthy), Brayden Point (Healthy), Teddy Blueger (Healthy), Colin McDonald (Healthy), Kyle Turris (Healthy)
Korbinian Holzer (Healthy), Paul Thompson (Healthy), Jake McCabe (Healthy), Mathew Dumba (Healthy), Stefan Noesen (Healthy)
Conor Sheary (Healthy)</pre></div>
<h1 class="TeamLinesPro_BUF"><a id="Sabres">Sabres</a></h1>
<b>Lines are Incomplete</b><br />
<div class="STHSTeamLink">
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
 1 Sidney Crosby            Chris Kreider            Teuvo Teravainen         40     0   0  5  
 2 Unknown Player           Anders Lee               Unknown Player           30     0   2  3  
 3 Unknown Player           Unknown Player           Unknown Player           25     0   4  1  
 4 Unknown Player           Unknown Player           Unknown Player           5      2   3  0  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Rasmus Ristolainen       Matt Niskanen                                     40     0   4  1  
 2 Unknown Player           Zdeno Chara                                       35     0   4  1  
 3 Josh Manson              Dan Hamhuis                                       20     0   4  1  
 4 Rasmus Ristolainen       Matt Niskanen                                     5      0   4  1  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Sidney Crosby            Chris Kreider            Teuvo Teravainen         70     1   0  4  
 2 Unknown Player           Anders Lee               Unknown Player           30     0   2  3  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Rasmus Ristolainen       Unknown Player                                    70     0   1  4  
 2 Matt Niskanen            Unknown Player                                    30     0   1  4  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           70     2   3  0  
 2 Unknown Player           Unknown Player           30     2   3  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Rasmus Ristolainen       Matt Niskanen            50     1   4  0  
 2 Unknown Player           Zdeno Chara              50     1   4  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Unknown Player                                    50     2   3  0  
 2 Unknown Player                                    50     2   3  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Rasmus Ristolainen       Matt Niskanen            50     1   4  0  
 2 Unknown Player           Zdeno Chara              50     1   4  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Sidney Crosby            Teuvo Teravainen         60     0   0  5  
 2 Unknown Player           Chris Kreider            40     0   1  4  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Rasmus Ristolainen       Matt Niskanen            55     0   4  1  
 2 Unknown Player           Zdeno Chara              45     0   4  1  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Sidney Crosby            Chris Kreider            Teuvo Teravainen         Unknown Player           Rasmus Ristolainen       

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Unknown Player           Unknown Player           Unknown Player           Zdeno Chara              Matt Niskanen            

<b>Goaltenders</b>
Starting : Unknown Goalie           
Backup : Unknown Goalie           

<b>Extra Forwards</b>
Normal : Sidney Crosby, Unknown Player, Teuvo Teravainen - PP : Unknown Player, Sidney Crosby - PK : Unknown Player
<b>Extra Defensemen</b>
Normal : Rasmus Ristolainen, Matt Niskanen, Zdeno Chara - PP : Matt Niskanen - PK : Josh Manson, Zdeno Chara
<b>Penalty Shots</b>
Sidney Crosby, Unknown Player, Rasmus Ristolainen, Unknown Player, Chris Kreider

<b>Scratches</b>
Mattias Janmark (Healthy), Remi Elie (Healthy), Anze Kopitar (Healthy), Pavel Buchnevich (Healthy), J.T. Compher (Healthy)
Derek Grant (Healthy), Rickard Rakell (Healthy), Chad Ruhwedel (Healthy), Zemgus Girgensons (Healthy), Tim Schaller (Healthy)
Linus Ullmark (Healthy), Ilya Samsonov (Healthy), Thomas Greiss (Healthy)</pre></div>
<h1 class="TeamLinesPro_OTT"><a id="Senators">Senators</a></h1>
<b>Lines are Incomplete</b><br />
<div class="STHSTeamLink">
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
 1 Ryan Johansen            Jason Dickinson          David Pastrnak           35     0   1  4  
 2 Alex Galchenyuk          Bryan Rust               Vladimir Tarasenko       34     0   2  3  
 3 Pierre-Edouard Bellemare Unknown Player           John Hayden              21     1   3  1  
 4 Trevor Lewis             Jordan Nolan             Ryan Reaves              10     3   1  1  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Erik Johnson             Ryan McDonagh                                     40     0   3  2  
 2 Nick Leddy               Fredrik Claesson                                  30     0   3  2  
 3 Trevor Carrick           Dylan McIlrath                                    20     1   2  2  
 4 Erik Johnson             Ryan McDonagh                                     10     0   3  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Ryan Johansen            Vladimir Tarasenko       David Pastrnak           60     0   1  4  
 2 Alex Galchenyuk          Jason Dickinson          Bryan Rust               40     0   1  4  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Ryan McDonagh            Nick Leddy                                        60     0   1  4  
 2 Dylan McIlrath           Erik Johnson                                      40     0   2  3  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Pierre-Edouard Bellemare Jason Dickinson          60     1   3  1  
 2 Trevor Lewis             Bryan Rust               40     1   3  1  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Erik Johnson             Ryan McDonagh            60     1   3  1  
 2 Fredrik Claesson         Nick Leddy               40     1   3  1  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Pierre-Edouard Bellemare                          60     0   5  0  
 2 David Pastrnak                                    40     0   5  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Ryan McDonagh            Erik Johnson             60     0   5  0  
 2 Nick Leddy               Trevor Carrick           40     0   5  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Ryan Johansen            David Pastrnak           60     0   2  3  
 2 Alex Galchenyuk          Vladimir Tarasenko       40     0   2  3  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Nick Leddy               Erik Johnson             60     1   2  2  
 2 Ryan McDonagh            Dylan McIlrath           40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Alex Galchenyuk          David Pastrnak           Vladimir Tarasenko       Nick Leddy               Ryan McDonagh            

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Ryan Johansen            Bryan Rust               Jason Dickinson          Erik Johnson             Ryan McDonagh            

<b>Goaltenders</b>
Starting : Unknown Goalie           
Backup : Max Lagace               

<b>Extra Forwards</b>
Normal : Vladimir Tarasenko, Unknown Player, David Pastrnak - PP : David Pastrnak, Vladimir Tarasenko - PK : David Pastrnak
<b>Extra Defensemen</b>
Normal : Nick Leddy, Erik Johnson, Ryan McDonagh - PP : Erik Johnson - PK : Erik Johnson, Nick Leddy
<b>Penalty Shots</b>
Ryan Johansen, Nick Leddy, Unknown Player, David Pastrnak, Vladimir Tarasenko

<b>Scratches</b>
Dean Kukan (Healthy), Dmytro Timashov (Healthy), Klim Kostin (Healthy), Corey Tropp (Healthy), Joakim Nordstrom (Healthy)
Andrei Vasilevskiy (Healthy), Gilles Senn (Healthy), Calvin Pickard (Healthy)</pre></div>
<h1 class="TeamLinesPro_SJS"><a id="Sharks">Sharks</a></h1>
<b>Lines are Incomplete</b><br />
<div class="STHSTeamLink">
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
 1 Aleksander Barkov        Filip Forsberg           Unknown Player           40     1   2  2  
 2 Derek Ryan               Travis Konecny           Tyler Toffoli            30     1   2  2  
 3 Robert Thomas            Oskar Lindblom           Joel Armia               20     1   2  2  
 4 Andrew Poturalski        Brendan Leipsic          Zack MacEwen             10     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Kris Letang              Jared Spurgeon                                    40     1   2  2  
 2 Justin Braun             T.J. Brodie                                       30     1   2  2  
 3 Joel Edmundson           Brett Kulak                                       20     1   2  2  
 4 Gustav Forsling          Kris Letang                                       10     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Aleksander Barkov        Filip Forsberg           Unknown Player           60     1   2  2  
 2 Derek Ryan               Travis Konecny           Tyler Toffoli            40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Kris Letang              Jared Spurgeon                                    60     1   2  2  
 2 Justin Braun             T.J. Brodie                                       40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Aleksander Barkov        Filip Forsberg           60     1   2  2  
 2 Unknown Player           Travis Konecny           40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Kris Letang              Jared Spurgeon           60     1   2  2  
 2 Justin Braun             T.J. Brodie              40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Aleksander Barkov                                 60     1   2  2  
 2 Filip Forsberg                                    40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Kris Letang              Jared Spurgeon           60     1   2  2  
 2 Justin Braun             T.J. Brodie              40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Aleksander Barkov        Filip Forsberg           60     1   2  2  
 2 Unknown Player           Travis Konecny           40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Kris Letang              Jared Spurgeon           60     1   2  2  
 2 Justin Braun             T.J. Brodie              40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Aleksander Barkov        Filip Forsberg           Unknown Player           Kris Letang              Jared Spurgeon           

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Aleksander Barkov        Filip Forsberg           Unknown Player           Kris Letang              Jared Spurgeon           

<b>Goaltenders</b>
Starting : Darcy Kuemper            
Backup : Laurent Brossoit         

<b>Extra Forwards</b>
Normal : Victor Rask, Joel Armia, Oskar Lindblom - PP : Victor Rask, Joel Armia - PK : Oskar Lindblom
<b>Extra Defensemen</b>
Normal : Joel Edmundson, Brett Kulak, Gustav Forsling - PP : Joel Edmundson - PK : Brett Kulak, Gustav Forsling
<b>Penalty Shots</b>
Aleksander Barkov, Filip Forsberg, Unknown Player, Travis Konecny, Tyler Toffoli

<b>Scratches</b>
Ondrej Kase (Healthy), Sven Baertschi (Healthy), Evgeny Kuznetsov (Healthy)</pre></div>
<h1 class="TeamLinesPro_DAL"><a id="Stars">Stars</a></h1>
<b>Lines are Incomplete</b><br />
<div class="STHSTeamLink">
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
 1 Patrice Bergeron         Unknown Player           Zach Parise              34     0   2  3  
 2 Jordan Weal              Unknown Player           Mark Letestu             34     0   1  4  
 3 Johan Larsson            Corey Perry              Byron Froese             26     0   2  3  
 4 Matt Puempel             Frans Nielsen            Unknown Player           6      0   4  1  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Derek Forbort            Jordie Benn                                       34     0   3  2  
 2 Brandon Davidson         Duncan Keith                                      33     0   4  1  
 3 Unknown Player           Thomas Hickey                                     23     1   3  1  
 4 Unknown Player           Duncan Keith                                      10     1   4  0  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Patrice Bergeron         Unknown Player           Unknown Player           60     0   1  4  
 2 Johan Larsson            Zach Parise              Mark Letestu             40     0   1  4  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Duncan Keith             Derek Forbort                                     60     0   1  4  
 2 Brandon Davidson         Jordie Benn                                       40     0   1  4  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Johan Larsson            Unknown Player           60     1   4  0  
 2 Patrice Bergeron         Unknown Player           40     1   4  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Jordie Benn              Derek Forbort            60     1   4  0  
 2 Duncan Keith             Brandon Davidson         40     1   4  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Johan Larsson                                     60     1   4  0  
 2 Unknown Player                                    40     1   4  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Jordie Benn              Derek Forbort            60     1   2  2  
 2 Duncan Keith             Unknown Player           40     1   4  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Unknown Player           Unknown Player           60     1   2  2  
 2 Johan Larsson            Patrice Bergeron         40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Duncan Keith             Unknown Player           60     1   2  2  
 2 Derek Forbort            Jordie Benn              40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Patrice Bergeron         Unknown Player           Zach Parise              Duncan Keith             Derek Forbort            

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Johan Larsson            Unknown Player           Mark Letestu             Derek Forbort            Jordie Benn              

<b>Goaltenders</b>
Starting : Cam Talbot               
Backup : Craig Anderson           

<b>Extra Forwards</b>
Normal : Johan Larsson, Patrice Bergeron, Unknown Player - PP : Unknown Player, Johan Larsson - PK : Unknown Player
<b>Extra Defensemen</b>
Normal : Duncan Keith, Derek Forbort, Jordie Benn - PP : Jordie Benn - PK : Duncan Keith, Jordie Benn
<b>Penalty Shots</b>
Zach Parise, Johan Larsson, Unknown Player, Patrice Bergeron, Unknown Player

<b>Scratches</b>
Jonathan Marchessault (Healthy), Colton Sceviour (Healthy), Max Pacioretty (Healthy), Andrew Agozzino (Healthy), Anthony Stolarz (Healthy)</pre></div>
<h1 class="TeamLinesPro_MIN"><a id="Wild">Wild</a></h1>
<b>Lines are Incomplete</b><br />
<div class="STHSTeamLink">
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
 1 David Backes             Brandon Pirri            Jakob Silfverberg        25     0   2  3  
 2 Sam Carrick              Nino Niederreiter        Conor Garland            25     0   1  4  
 3 Tyler Graovac            Unknown Player           Troy Brouwer             25     0   4  1  
 4 Unknown Player           Seth Griffith            Kyle Okposo              25     0   3  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Tyson Barrie             John Carlson                                      30     0   4  1  
 2 Mikhail Sergachev        Casey Nelson                                      30     0   4  1  
 3 Karl Alzner              Unknown Player                                    30     0   4  1  
 4 Tyson Barrie             John Carlson                                      10     0   4  1  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 David Backes             Brandon Pirri            Jakob Silfverberg        50     0   0  5  
 2 Sam Carrick              Nino Niederreiter        Conor Garland            50     0   0  5  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Tyson Barrie             John Carlson                                      50     0   1  4  
 2 Mikhail Sergachev        Unknown Player                                    50     0   1  4  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 David Backes             Jakob Silfverberg        50     0   5  0  
 2 Tyler Graovac            Troy Brouwer             50     0   5  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Tyson Barrie             John Carlson             50     1   4  0  
 2 Karl Alzner              Casey Nelson             50     1   4  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Troy Brouwer                                      50     0   5  0  
 2 Jakob Silfverberg                                 50     0   5  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Tyson Barrie             John Carlson             50     0   5  0  
 2 Karl Alzner              Casey Nelson             50     0   5  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Sam Carrick              Conor Garland            50     0   3  2  
 2 Tyler Graovac            Troy Brouwer             50     0   3  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Tyson Barrie             John Carlson             50     0   4  1  
 2 Karl Alzner              Casey Nelson             50     0   4  1  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Sam Carrick              Nino Niederreiter        Jakob Silfverberg        Tyson Barrie             John Carlson             

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Tyler Graovac            Troy Brouwer             Jakob Silfverberg        Karl Alzner              John Carlson             

<b>Goaltenders</b>
Starting : Unknown Goalie           
Backup : Troy Grosenick           

<b>Extra Forwards</b>
Normal : Nino Niederreiter, Troy Brouwer, Jakob Silfverberg - PP : Kyle Okposo, Conor Garland - PK : Troy Brouwer
<b>Extra Defensemen</b>
Normal : Mikhail Sergachev, Karl Alzner, John Carlson - PP : John Carlson - PK : Casey Nelson, Mikhail Sergachev
<b>Penalty Shots</b>
Conor Garland, Jakob Silfverberg, Brandon Pirri, Sam Carrick, Kyle Okposo

<b>Scratches</b>
None
</pre></div>
<?php include "Footer.php";?>
