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
 1 Mikko Koivu              Unknown Player           Travis Boyd              34     0   1  4  
 2 Chris Mueller            Michael Frolik           Brock McGinn             27     1   2  2  
 3 Lucas Wallmark           Richard Panik            Mike Vecchione           24     2   2  1  
 4 Mike Sgarbossa           Tobias Rieder            Blake Pietila            15     1   3  1  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Braydon Coburn           Hampus Lindholm                                   37     1   2  2  
 2 Brett Pesce              Brandon Carlo                                     28     1   2  2  
 3 Will Butcher             Jonas Siegenthaler                                28     2   2  1  
 4 Braydon Coburn           Hampus Lindholm                                   7      1   3  1  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Mikko Koivu              Unknown Player           Travis Boyd              60     0   1  4  
 2 Chris Mueller            Michael Frolik           Richard Panik            40     1   1  3  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Braydon Coburn           Hampus Lindholm                                   60     0   2  3  
 2 Brandon Carlo            Jonas Siegenthaler                                40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Lucas Wallmark           Brock McGinn             60     1   2  2  
 2 Mikko Koivu              Brock McGinn             40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Braydon Coburn           Brandon Carlo            60     1   4  0  
 2 Hampus Lindholm          Jonas Siegenthaler       40     1   4  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Brock McGinn                                      60     1   2  2  
 2 Mikko Koivu                                       40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Braydon Coburn           Brandon Carlo            60     1   4  0  
 2 Will Butcher             Jonas Siegenthaler       40     1   4  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Unknown Player           Travis Boyd              60     1   1  3  
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
   Lucas Wallmark           Tobias Rieder            Brock McGinn             Jonas Siegenthaler       Will Butcher             

<b>Goaltenders</b>
Starting : Jake Allen               
Backup : Chris Driedger           

<b>Extra Forwards</b>
Normal : Unknown Player, Mikko Koivu, Michael Frolik - PP : Unknown Player, Mikko Koivu - PK : Tobias Rieder
<b>Extra Defensemen</b>
Normal : Brandon Carlo, Hampus Lindholm, Braydon Coburn - PP : Braydon Coburn - PK : Will Butcher, Jonas Siegenthaler
<b>Penalty Shots</b>
Unknown Player, Brett Pesce, Braydon Coburn, Mikko Koivu, Brock McGinn

<b>Scratches</b>
Patrick Kane (Separated Right Shoulder Injury), Brandon Manning (Bruised Right Leg Injury), J.T. Miller (Separated Right Shoulder Injury), Martin Ouellette (Healthy)</pre></div>
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
 1 Unknown Player           Brian Boyle              Jason Zucker             31     1   2  2  
 2 Alexander Wennberg       Carl Hagelin             Matt Calvert             31     1   3  1  
 3 Evgeni Malkin            Sebastian Aho            Vladislav Namestnikov    31     0   1  4  
 4 Kevin Rooney             David Kampf              Tyler Ennis              7      1   3  1  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Justin Faulk             Anthony DeAngelo                                  35     1   2  2  
 2 Zach Werenski            Jordan Oesterle                                   33     1   2  2  
 3 Shayne Gostisbehere      Andrew MacDonald                                  22     0   2  3  
 4 Justin Faulk             Zach Werenski                                     10     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Evgeni Malkin            Sebastian Aho            Unknown Player           65     0   0  5  
 2 Alexander Wennberg       Brian Boyle              Jason Zucker             35     0   1  4  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Justin Faulk             Zach Werenski                                     65     0   1  4  
 2 Anthony DeAngelo         Shayne Gostisbehere                               35     1   1  3  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Kevin Rooney             Matt Calvert             60     0   5  0  
 2 David Kampf              Brian Boyle              40     0   5  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Justin Faulk             Andrew MacDonald         60     0   5  0  
 2 Jordan Oesterle          Zach Werenski            40     0   5  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Brian Boyle                                       60     0   5  0  
 2 Kevin Rooney                                      40     0   5  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Justin Faulk             Andrew MacDonald         60     0   5  0  
 2 Jordan Oesterle          Zach Werenski            40     0   5  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Evgeni Malkin            Sebastian Aho            60     1   1  3  
 2 Unknown Player           Jason Zucker             40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Justin Faulk             Zach Werenski            60     1   2  2  
 2 Shayne Gostisbehere      Anthony DeAngelo         40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Evgeni Malkin            Sebastian Aho            Jason Zucker             Justin Faulk             Zach Werenski            

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Kevin Rooney             Brian Boyle              Matt Calvert             Andrew MacDonald         Justin Faulk             

<b>Goaltenders</b>
Starting : Corey Crawford           
Backup : Jimmy Howard             

<b>Extra Forwards</b>
Normal : Unknown Player, Matt Calvert, David Kampf - PP : Vladislav Namestnikov, Matt Calvert - PK : Vladislav Namestnikov
<b>Extra Defensemen</b>
Normal : Shayne Gostisbehere, Jordan Oesterle, Zach Werenski - PP : Jordan Oesterle - PK : Jordan Oesterle, Shayne Gostisbehere
<b>Penalty Shots</b>
David Kampf, Alexander Wennberg, Tyler Ennis, Evgeni Malkin, Brian Boyle

<b>Scratches</b>
Zac Dalpe (Healthy), Dominik Simon (Healthy), Matt Benning (Healthy), Tyler Johnson (Lacerated Right Calf Injury)</pre></div>
<h1 class="TeamLinesPro_CLB"><a id="BlueJackets">Blue Jackets</a></h1>
<b>Lines are Incomplete</b><br />
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
 1 Elias Pettersson         Andreas Johnsson         Vinnie Hinostroza        40     1   1  3  
 2 Sam Steel                Alexander Kerfoot        Jake Virtanen            30     1   2  2  
 3 Andrew Copp              Denis Malgin             Jason Spezza             20     1   2  2  
 4 Sam Steel                Zach Sanford             Anthony Duclair          10     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Ian Cole                 Anton Stralman                                    40     1   2  2  
 2 Danny DeKeyser           Unknown Player                                    30     1   2  2  
 3 Troy Stecher             Philippe Myers                                    20     1   2  2  
 4 Ian Cole                 Danny DeKeyser                                    10     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Elias Pettersson         Andreas Johnsson         Vinnie Hinostroza        60     1   2  2  
 2 Alexander Kerfoot        Sam Steel                Jake Virtanen            40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Ian Cole                 Troy Stecher                                      60     1   2  2  
 2 Danny DeKeyser           Philippe Myers                                    40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Elias Pettersson         Alexander Kerfoot        60     1   2  2  
 2 Vinnie Hinostroza        Sam Steel                40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Ian Cole                 Philippe Myers           60     1   2  2  
 2 Danny DeKeyser           Troy Stecher             40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Elias Pettersson                                  60     1   2  2  
 2 Vinnie Hinostroza                                 40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Ian Cole                 Troy Stecher             60     1   2  2  
 2 Danny DeKeyser           Philippe Myers           40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Elias Pettersson         Andreas Johnsson         60     1   2  2  
 2 Vinnie Hinostroza        Alexander Kerfoot        40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Ian Cole                 Troy Stecher             60     1   2  2  
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
Normal : Troy Stecher, Ian Cole, Danny DeKeyser - PP : Troy Stecher - PK : Ian Cole, Danny DeKeyser
<b>Penalty Shots</b>
Elias Pettersson, Sam Steel, Vinnie Hinostroza, Jake Virtanen, Alexander Kerfoot

<b>Scratches</b>
Cory Conacher (Healthy), Jason Demers (Healthy), Robert Hagg (Separated Left Shoulder Injury), Sonny Milano (Healthy)</pre></div>
<h1 class="TeamLinesPro_STL"><a id="Blues">Blues</a></h1>
<b>Lines are Complete</b><br />
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
 1 Jonathan Drouin          Anthony Beauvillier      Jason Pominville         40     1   1  3  
 2 Jean-Sebastien Dea       Antoine Roussel          Jakub Vrana              30     2   2  1  
 3 Cedric Paquette          Andrew Ladd              Carter Rowney            20     3   2  0  
 4 Tanner Kero              Thomas Vanek             Steve Bernier            10     3   2  0  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 David Savard             Samuel Girard                                     40     1   2  2  
 2 Dalton Prout             Nick Seeler                                       30     1   2  2  
 3 Ashton Sautner           Duncan Siemens                                    20     1   2  2  
 4 Samuel Girard            David Savard                                      10     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Jonathan Drouin          Carter Rowney            Antoine Roussel          60     1   2  2  
 2 Steve Bernier            Anthony Beauvillier      Jason Pominville         40     1   2  2  

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
 2 Jason Pominville         Anthony Beauvillier      40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 David Savard             Samuel Girard            60     1   2  2  
 2 Nick Seeler              Duncan Siemens           40     1   2  2  

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
Jonathan Drouin, Jason Pominville, Steve Bernier, Anthony Beauvillier, Carter Rowney

<b>Scratches</b>
Loui Eriksson (Healthy)</pre></div>
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
 1 Sean Couturier           Brad Marchand            Blake Coleman            35     1   1  3  
 2 Boone Jenner             Tomas Tatar              Zach Hyman               35     1   1  3  
 3 Eric Staal               Justin Abdelkader        Bryan Little             25     1   2  2  
 4 Cody Eakin               Par Lindholm             Gabriel Bourque          5      0   4  1  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Dustin Byfuglien         Brayden McNabb                                    40     0   5  0  
 2 Erik Gudbranson          Ben Chiarot                                       30     0   5  0  
 3 Noah Juulsen             Mirco Mueller                                     20     0   5  0  
 4 Noah Juulsen             Mirco Mueller                                     10     0   5  0  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Sean Couturier           Brad Marchand            Tomas Tatar              60     0   0  5  
 2 Eric Staal               Zach Hyman               Blake Coleman            40     0   0  5  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Dustin Byfuglien         Noah Juulsen                                      60     0   1  4  
 2 Brayden McNabb           Mirco Mueller                                     40     0   1  4  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Sean Couturier           Blake Coleman            60     0   5  0  
 2 Boone Jenner             Justin Abdelkader        40     0   5  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Ben Chiarot              Brayden McNabb           60     0   5  0  
 2 Noah Juulsen             Erik Gudbranson          40     0   5  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Sean Couturier                                    55     0   5  0  
 2 Boone Jenner                                      45     0   5  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Ben Chiarot              Brayden McNabb           55     0   5  0  
 2 Noah Juulsen             Erik Gudbranson          45     0   5  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Sean Couturier           Brad Marchand            60     0   2  3  
 2 Eric Staal               Tomas Tatar              40     0   2  3  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Dustin Byfuglien         Brayden McNabb           60     0   2  3  
 2 Ben Chiarot              Noah Juulsen             40     0   2  3  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Sean Couturier           Brad Marchand            Tomas Tatar              Dustin Byfuglien         Ben Chiarot              

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Sean Couturier           Boone Jenner             Blake Coleman            Brayden McNabb           Ben Chiarot              

<b>Goaltenders</b>
Starting : Matthew Villalta         
Backup : Braden Holtby            

<b>Extra Forwards</b>
Normal : Sean Couturier, Brad Marchand, Tomas Tatar - PP : Sean Couturier, Brad Marchand - PK : Blake Coleman
<b>Extra Defensemen</b>
Normal : Brayden McNabb, Ben Chiarot, Erik Gudbranson - PP : Dustin Byfuglien - PK : Brayden McNabb, Ben Chiarot
<b>Penalty Shots</b>
Sean Couturier, Tomas Tatar, Brad Marchand, Eric Staal, Zach Hyman

<b>Scratches</b>
Evgenii Dadonov (Left Knee Injury), Ben Harpur (Sprained Left Ankle Injury), Matt Roy (Healthy), Mikkel Boedker (Healthy), Jack Campbell (Bruised Left Leg Injury)
Joonas Korpisalo (Healthy)</pre></div>
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
 1 Mark Scheifele           Alex DeBrincat           Anthony Mantha           30     1   2  2  
 2 Unknown Player           Artemi Panarin           Nikolaj Ehlers           30     1   2  2  
 3 Valtteri Filppula        Brandon Tanev            Clayton Keller           28     1   2  2  
 4 Cal O'Reilly             Daniel Sprong            Melker Karlsson          12     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Ivan Provorov            Aaron Ekblad                                      28     1   3  1  
 2 Marc-Edouard Vlasic      John Klingberg                                    28     1   3  1  
 3 Connor Murphy            Nikita Zadorov                                    28     2   3  0  
 4 Ivan Provorov            Aaron Ekblad                                      16     1   3  1  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Mark Scheifele           Alex DeBrincat           Anthony Mantha           50     0   1  4  
 2 Unknown Player           Artemi Panarin           Nikolaj Ehlers           50     0   1  4  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Ivan Provorov            John Klingberg                                    50     0   2  3  
 2 Marc-Edouard Vlasic      Aaron Ekblad                                      50     0   2  3  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Valtteri Filppula        Brandon Tanev            50     1   3  1  
 2 Unknown Player           Melker Karlsson          50     1   3  1  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Ivan Provorov            Aaron Ekblad             50     1   3  1  
 2 Marc-Edouard Vlasic      Connor Murphy            50     1   3  1  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Brandon Tanev                                     50     1   2  2  
 2 Valtteri Filppula                                 50     1   3  1  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Ivan Provorov            Aaron Ekblad             50     1   3  1  
 2 Marc-Edouard Vlasic      Connor Murphy            50     1   3  1  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Mark Scheifele           Artemi Panarin           50     1   2  2  
 2 Unknown Player           Alex DeBrincat           50     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Ivan Provorov            Aaron Ekblad             50     1   3  1  
 2 Marc-Edouard Vlasic      John Klingberg           50     1   3  1  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Mark Scheifele           Artemi Panarin           Alex DeBrincat           Ivan Provorov            Aaron Ekblad             

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Valtteri Filppula        Unknown Player           Melker Karlsson          Ivan Provorov            Marc-Edouard Vlasic      

<b>Goaltenders</b>
Starting : Ben Bishop               
Backup : Carter Hart              

<b>Extra Forwards</b>
Normal : Artemi Panarin, Mark Scheifele, Alex DeBrincat - PP : Artemi Panarin, Mark Scheifele - PK : Mark Scheifele
<b>Extra Defensemen</b>
Normal : Marc-Edouard Vlasic, Ivan Provorov, Aaron Ekblad - PP : Connor Murphy - PK : Nikita Zadorov, John Klingberg
<b>Penalty Shots</b>
Artemi Panarin, Daniel Sprong, Brandon Tanev, Melker Karlsson, Mark Scheifele

<b>Scratches</b>
Alexander Petrovic (Healthy), Jeff Carter (Left Wrist Injury)</pre></div>
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
 1 Nick Bonino              Kyle Connor              Mikko Rantanen           36     0   2  3  
 2 Auston Matthews          Pat Maroon               Alex Steen               36     0   2  3  
 3 Nico Hischier            Brandon Dubinsky         Nick Bjugstad            23     1   2  2  
 4 Ryan Kesler              Devante Smith-Pelly      Cal Clutterbuck          5      2   3  0  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Tyler Myers              Nikita Zaitsev                                    45     1   2  2  
 2 Gavin Bayreuther         Scott Mayfield                                    35     1   2  2  
 3 MacKenzie Weegar         Stephen Johns                                     20     1   2  2  
 4 Tyler Myers              Nikita Zaitsev                                    0      1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Auston Matthews          Kyle Connor              Mikko Rantanen           70     0   1  4  
 2 Nico Hischier            Pat Maroon               Alex Steen               30     0   1  4  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Gavin Bayreuther         Tyler Myers                                       65     0   1  4  
 2 Stephen Johns            MacKenzie Weegar                                  35     0   1  4  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Nick Bonino              Cal Clutterbuck          70     1   4  0  
 2 Ryan Kesler              Brandon Dubinsky         30     1   4  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Scott Mayfield           Nikita Zaitsev           65     1   4  0  
 2 MacKenzie Weegar         Stephen Johns            35     1   4  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Nick Bonino                                       60     1   4  0  
 2 Ryan Kesler                                       40     1   4  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Nikita Zaitsev           Scott Mayfield           60     0   5  0  
 2 MacKenzie Weegar         Stephen Johns            40     0   5  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Auston Matthews          Mikko Rantanen           60     1   2  2  
 2 Nico Hischier            Kyle Connor              40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Tyler Myers              Nikita Zaitsev           60     1   2  2  
 2 Gavin Bayreuther         Scott Mayfield           40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Auston Matthews          Kyle Connor              Mikko Rantanen           Tyler Myers              Gavin Bayreuther         

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Nick Bonino              Brandon Dubinsky         Cal Clutterbuck          Nikita Zaitsev           Scott Mayfield           

<b>Goaltenders</b>
Starting : Alexandar Georgiev       
Backup : Henrik Lundqvist         

<b>Extra Forwards</b>
Normal : Nick Bjugstad, Cal Clutterbuck, Ryan Kesler - PP : Nick Bjugstad, Cal Clutterbuck - PK : Alex Steen
<b>Extra Defensemen</b>
Normal : Tyler Myers, Stephen Johns, Scott Mayfield - PP : Scott Mayfield - PK : MacKenzie Weegar, Gavin Bayreuther
<b>Penalty Shots</b>
Alex Steen, Kyle Connor, Devante Smith-Pelly, Mikko Rantanen, Nick Bonino

<b>Scratches</b>
Dougie Hamilton (Torn Left ACL Injury), Ryan Carpenter (Healthy), William Carrier (Healthy)</pre></div>
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
 2 Vincent Trocheck         Gustav Nyquist           Kyle Palmieri            35     2   1  2  
 3 Pavel Zacha              Alex Iafallo             Paul Byron               20     2   1  2  
 4 Michael Chaput           Jujhar Khaira            Chandler Stephenson      10     3   2  0  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Drew Doughty             Alec Martinez                                     40     2   2  1  
 2 Jacob Trouba             Dmitry Orlov                                      30     2   2  1  
 3 Greg Pateryn             David Schlemko                                    20     2   3  0  
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
 1 Michael Chaput           Jujhar Khaira            60     1   4  0  
 2 Pavel Zacha              Jamie Benn               40     1   4  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Alec Martinez            Jacob Trouba             60     2   3  0  
 2 Drew Doughty             Dmitry Orlov             40     2   3  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Pavel Zacha                                       60     1   4  0  
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
Starting : Petr Mrazek              
Backup : Curtis McElhinney        

<b>Extra Forwards</b>
Normal : Jack Eichel, Jamie Benn, Alex Iafallo - PP : Alex Iafallo, Kyle Palmieri - PK : Jamie Benn
<b>Extra Defensemen</b>
Normal : Jacob Trouba, Alec Martinez, Drew Doughty - PP : Drew Doughty - PK : Jacob Trouba, Alec Martinez
<b>Penalty Shots</b>
T.J. Oshie, Paul Byron, Pavel Zacha, David Schlemko, Jack Eichel

<b>Scratches</b>
Sean Walker (Healthy), Kevin Gravel (Healthy)</pre></div>
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
 1 Leon Draisaitl           Kevin Hayes              Nikita Kucherov          40     1   2  2  
 2 Mika Zibanejad           Jeff Skinner             William Nylander         35     1   2  2  
 3 Dylan Strome             Wayne Simmonds           Oskar Sundqvist          20     2   2  1  
 4 Nate Thompson            Nic Dowd                 Dale Weise               5      2   2  1  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Oliver Ekman-Larsson     Jay Bouwmeester                                   40     1   2  2  
 2 Thomas Chabot            Cody Ceci                                         30     1   2  2  
 3 Carl Gunnarsson          Niklas Hjalmarsson                                20     1   3  1  
 4 Jay Bouwmeester          Oliver Ekman-Larsson                              10     1   3  1  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Leon Draisaitl           Kevin Hayes              Nikita Kucherov          60     1   2  2  
 2 Mika Zibanejad           Jeff Skinner             William Nylander         40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Oliver Ekman-Larsson     Andrej Sekera                                     60     1   2  2  
 2 Thomas Chabot            Cody Ceci                                         40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Mika Zibanejad           Oskar Sundqvist          60     1   2  2  
 2 Kevin Hayes              Leon Draisaitl           40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Niklas Hjalmarsson       Cody Ceci                60     1   2  2  
 2 Jay Bouwmeester          Carl Gunnarsson          40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Mika Zibanejad                                    60     1   2  2  
 2 Kevin Hayes                                       40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Niklas Hjalmarsson       Cody Ceci                60     1   2  2  
 2 Jay Bouwmeester          Carl Gunnarsson          40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Leon Draisaitl           Nikita Kucherov          60     1   2  2  
 2 Mika Zibanejad           Jeff Skinner             40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Oliver Ekman-Larsson     Cody Ceci                60     1   2  2  
 2 Jay Bouwmeester          Thomas Chabot            40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Mika Zibanejad           Leon Draisaitl           Nikita Kucherov          Thomas Chabot            Oliver Ekman-Larsson     

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Mika Zibanejad           Kevin Hayes              Oskar Sundqvist          Niklas Hjalmarsson       Cody Ceci                

<b>Goaltenders</b>
Starting : Keith Kinkaid            
Backup : Unknown Goalie           

<b>Extra Forwards</b>
Normal : Dylan Strome, Mika Zibanejad, Kevin Hayes - PP : Leon Draisaitl, Nikita Kucherov - PK : Oskar Sundqvist
<b>Extra Defensemen</b>
Normal : Niklas Hjalmarsson, Oliver Ekman-Larsson, Cody Ceci - PP : Oliver Ekman-Larsson - PK : Cody Ceci, Carl Gunnarsson
<b>Penalty Shots</b>
Leon Draisaitl, Mika Zibanejad, Nikita Kucherov, Kevin Hayes, William Nylander

<b>Scratches</b>
Slater Koekkoek (Healthy), Michael Leighton (Healthy)</pre></div>
<h1 class="TeamLinesPro_NJD"><a id="Devils">Devils</a></h1>
<b>Lines are Incomplete</b><br />
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
 2 William Karlsson         Jimmy Vesey              Matt Moulson             30     1   2  2  
 3 Riley Sheahan            Nick Ritchie             Michael Raffl            20     1   2  2  
 4 Martin Hanzal            Gemel Smith              Patrick Brown            10     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Darnell Nurse            Adam Larsson                                      40     1   2  2  
 2 Chris Tanev              Michal Kempny                                     30     1   2  2  
 3 Christian Folin          Maxime Lajoie                                     20     1   2  2  
 4 Darnell Nurse            Adam Larsson                                      10     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Ryan Getzlaf             Timo Meier               Patric Hornqvist         60     1   2  2  
 2 William Karlsson         Jimmy Vesey              Matt Moulson             40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Darnell Nurse            Adam Larsson                                      60     1   2  2  
 2 Chris Tanev              Michal Kempny                                     40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Riley Sheahan            Michael Raffl            60     1   2  2  
 2 Martin Hanzal            Matt Moulson             40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Darnell Nurse            Adam Larsson             60     1   2  2  
 2 Chris Tanev              Michal Kempny            40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Riley Sheahan                                     60     1   2  2  
 2 Martin Hanzal                                     40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Darnell Nurse            Adam Larsson             60     1   2  2  
 2 Chris Tanev              Michal Kempny            40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Ryan Getzlaf             William Karlsson         60     1   2  2  
 2 Timo Meier               Patric Hornqvist         40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Darnell Nurse            Adam Larsson             60     1   2  2  
 2 Chris Tanev              Michal Kempny            40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Ryan Getzlaf             Timo Meier               Patric Hornqvist         Darnell Nurse            Adam Larsson             

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Ryan Getzlaf             Michael Raffl            Jimmy Vesey              Chris Tanev              Adam Larsson             

<b>Goaltenders</b>
Starting : Unknown Goalie           
Backup : Robin Lehner             

<b>Extra Forwards</b>
Normal : Martin Hanzal, Riley Sheahan, Nick Ritchie - PP : Martin Hanzal, Riley Sheahan - PK : Nick Ritchie
<b>Extra Defensemen</b>
Normal : Christian Folin, Maxime Lajoie, Chris Tanev - PP : Christian Folin - PK : Maxime Lajoie, Chris Tanev
<b>Penalty Shots</b>
Ryan Getzlaf, William Karlsson, Timo Meier, Patric Hornqvist, Jimmy Vesey

<b>Scratches</b>
Colby Cave (Healthy), Markus Nutivaara (Healthy), Michael Grabner (Healthy), Garret Sparks (Abdominal Strain Injury)</pre></div>
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
 1 Nazem Kadri              Johnny Gaudreau          Jake Guentzel            30     0   2  3  
 2 Sean Monahan             Brayden Schenn           Tyler Bertuzzi           30     0   2  3  
 3 Travis Zajac             Jay Beagle               Zach Aston-Reese         25     0   1  4  
 4 Mark Jankowski           Devin Shore              Alex Chiasson            15     0   3  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Josh Morrissey           Jake Muzzin                                       37     0   3  2  
 2 Unknown Player           Morgan Rielly                                     31     0   2  3  
 3 Luke Schenn              Colin Miller                                      20     0   3  2  
 4 Unknown Player           Morgan Rielly                                     12     0   3  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Sean Monahan             Johnny Gaudreau          Jake Guentzel            60     0   0  5  
 2 Nazem Kadri              Brayden Schenn           Tyler Bertuzzi           40     0   0  5  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Josh Morrissey           Morgan Rielly                                     60     0   0  5  
 2 Jake Muzzin              Unknown Player                                    40     0   1  4  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Jay Beagle               Devin Shore              50     0   4  1  
 2 Travis Zajac             Zach Aston-Reese         50     0   4  1  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Unknown Player           Jake Muzzin              60     0   5  0  
 2 Morgan Rielly            Josh Morrissey           40     0   5  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Jay Beagle                                        60     0   5  0  
 2 Mark Jankowski                                    40     0   5  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Unknown Player           Jake Muzzin              60     0   5  0  
 2 Josh Morrissey           Morgan Rielly            40     0   5  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Nazem Kadri              Brayden Schenn           60     0   2  3  
 2 Travis Zajac             Tyler Bertuzzi           40     0   2  3  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Josh Morrissey           Morgan Rielly            60     0   2  3  
 2 Jake Muzzin              Unknown Player           40     0   2  3  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Sean Monahan             Johnny Gaudreau          Jake Guentzel            Morgan Rielly            Unknown Player           

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Brayden Schenn           Jay Beagle               Zach Aston-Reese         Jake Muzzin              Unknown Player           

<b>Goaltenders</b>
Starting : Unknown Goalie           
Backup : Mike Smith               

<b>Extra Forwards</b>
Normal : Johnny Gaudreau, Nazem Kadri, Tyler Bertuzzi - PP : Tyler Bertuzzi, Jake Guentzel - PK : Jay Beagle
<b>Extra Defensemen</b>
Normal : Josh Morrissey, Morgan Rielly, Jake Muzzin - PP : Colin Miller - PK : Morgan Rielly, Jake Muzzin
<b>Penalty Shots</b>
Sean Monahan, Jake Guentzel, Nazem Kadri, Johnny Gaudreau, Brayden Schenn

<b>Scratches</b>
Mattias Janmark (Healthy), Marc Methot (Healthy), Charlie McAvoy (Healthy), Ryan Murray (Sprained Left Finger Injury), Antti Raanta (Exhaustion)</pre></div>
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
 1 Bo Horvat                David Perron             Viktor Arvidsson         40     1   3  1  
 2 Dylan Larkin             Taylor Hall              Tom Wilson               40     0   1  4  
 3 Phillip Danault          Kevin Labanc             Andre Burakovsky         15     2   2  1  
 4 Adam Lowry               Austin Watson            Markus Granlund          5      1   0  4  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Erik Karlsson            Radko Gudas                                       40     0   4  1  
 2 Jaccob Slavin            Roman Polak                                       40     0   4  1  
 3 Jonathon Merrill         Brady Skjei                                       10     0   4  1  
 4 Erik Karlsson            Jaccob Slavin                                     10     0   3  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Dylan Larkin             Taylor Hall              David Perron             85     0   0  5  
 2 Bo Horvat                Viktor Arvidsson         Tom Wilson               15     0   0  5  

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
 1 Dylan Larkin             Taylor Hall              69     0   2  3  
 2 Bo Horvat                Tom Wilson               31     0   2  3  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Erik Karlsson            Jaccob Slavin            70     0   4  1  
 2 Brady Skjei              Roman Polak              30     0   4  1  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Dylan Larkin             David Perron             Viktor Arvidsson         Erik Karlsson            Jaccob Slavin            

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Phillip Danault          Adam Lowry               Austin Watson            Radko Gudas              Jaccob Slavin            

<b>Goaltenders</b>
Starting : Pekka Rinne              
Backup : Casey DeSmith            

<b>Extra Forwards</b>
Normal : Dylan Larkin, Viktor Arvidsson, David Perron - PP : David Perron, Bo Horvat - PK : Dylan Larkin
<b>Extra Defensemen</b>
Normal : Jaccob Slavin, Erik Karlsson, Radko Gudas - PP : Jaccob Slavin - PK : Jaccob Slavin, Radko Gudas
<b>Penalty Shots</b>
Markus Granlund, Kevin Labanc, Erik Karlsson, David Perron, Austin Watson

<b>Scratches</b>
Devon Toews (Healthy), Garnet Hathaway (Healthy), Alex Stalock (Healthy)</pre></div>
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
 1 Pierre-Luc Dubois        Max Domi                 Cam Atkinson             35     0   0  5  
 2 Brock Nelson             Brandon Saad             Andrew Shaw              30     0   0  5  
 3 Ryan Strome              Justin Williams          Brett Connolly           25     0   0  5  
 4 Maxime Comtois           Ilya Kovalchuk           Josh Leivo               10     0   0  5  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Alexander Edler          Keith Yandle                                      40     0   0  5  
 2 Jonas Brodin             Jake Gardiner                                     30     0   2  3  
 3 Rasmus Dahlin            Jonathan Ericsson                                 20     0   2  3  
 4 Alexander Edler          Jonas Brodin                                      10     0   5  0  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Pierre-Luc Dubois        Max Domi                 Andrew Shaw              60     0   0  5  
 2 Brock Nelson             Brandon Saad             Ryan Strome              40     0   0  5  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Keith Yandle             Cam Atkinson                                      60     0   0  5  
 2 Jake Gardiner            Justin Williams                                   40     0   0  5  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Brock Nelson             Max Domi                 60     0   5  0  
 2 Ryan Strome              Brandon Saad             40     0   5  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Alexander Edler          Jonas Brodin             60     0   5  0  
 2 Jonathan Ericsson        Keith Yandle             40     0   5  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Brock Nelson                                      60     0   5  0  
 2 Ryan Strome                                       40     0   5  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Alexander Edler          Jonas Brodin             60     0   5  0  
 2 Jonathan Ericsson        Keith Yandle             40     0   5  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Pierre-Luc Dubois        Max Domi                 60     0   2  3  
 2 Brock Nelson             Cam Atkinson             40     0   2  3  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Keith Yandle             Alexander Edler          60     0   2  3  
 2 Jonas Brodin             Jonathan Ericsson        40     0   2  3  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Pierre-Luc Dubois        Max Domi                 Cam Atkinson             Keith Yandle             Jake Gardiner            

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Brock Nelson             Ryan Strome              Brandon Saad             Alexander Edler          Jonas Brodin             

<b>Goaltenders</b>
Starting : Jaroslav Halak           
Backup : Mikko Koskinen           

<b>Extra Forwards</b>
Normal : Max Domi, Cam Atkinson, Pierre-Luc Dubois - PP : Max Domi, Cam Atkinson - PK : Ryan Strome
<b>Extra Defensemen</b>
Normal : Alexander Edler, Keith Yandle, Jonas Brodin - PP : Keith Yandle - PK : Alexander Edler, Jonas Brodin
<b>Penalty Shots</b>
Ilya Kovalchuk, Pierre-Luc Dubois, Cam Atkinson, Brock Nelson, Andrew Shaw

<b>Scratches</b>
Joel Eriksson Ek (Head Injury), Marco Scandella (Healthy), Sven Baertschi (Sore Right Knee Injury), Mark Pysyk (Healthy)</pre></div>
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
Starting : MacKenzie Blackwood      
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
 1 Jordan Szwarz            Evander Kane             Ryan Hartman             25     3   1  1  
 2 Paul Stastny             James Neal               Mathieu Perreault        25     3   1  1  
 3 Brett Sutter             Pontus Aberg             Bobby Ryan               25     3   1  1  
 4 Rem Pitlick              Drake Caggiula           Mathieu Perreault        25     3   1  1  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Ilya Lyubushkin          Christian Djoos                                   25     1   2  2  
 2 Joakim Ryan              Jordan Schmaltz                                   25     1   2  2  
 3 Josh Mahura              Riley Stillman                                    25     1   2  2  
 4 Ilya Lyubushkin          Christian Djoos                                   25     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Paul Stastny             Pontus Aberg             Mathieu Perreault        60     3   1  1  
 2 Brett Sutter             Evander Kane             Drake Caggiula           40     3   1  1  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Christian Djoos          Joakim Ryan                                       60     3   1  1  
 2 Josh Mahura              Riley Stillman                                    40     3   1  1  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Paul Stastny             Kyle Clifford            60     3   1  1  
 2 Mathieu Perreault        Drake Caggiula           40     3   1  1  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Joakim Ryan              Ilya Lyubushkin          60     3   1  1  
 2 Josh Mahura              Jordan Schmaltz          40     3   1  1  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Brett Sutter                                      60     2   2  1  
 2 Ryan Hartman                                      40     2   2  1  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Joakim Ryan              Ilya Lyubushkin          60     2   2  1  
 2 Riley Stillman           Christian Djoos          40     2   2  1  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Ryan Hartman             Drake Caggiula           60     3   1  1  
 2 Jordan Szwarz            Brett Sutter             40     3   1  1  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Ilya Lyubushkin          Christian Djoos          60     3   1  1  
 2 Joakim Ryan              Josh Mahura              40     3   1  1  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Kyle Clifford            Evander Kane             Paul Stastny             Ilya Lyubushkin          Joakim Ryan              

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Kyle Clifford            Evander Kane             Paul Stastny             Ilya Lyubushkin          Joakim Ryan              

<b>Goaltenders</b>
Starting : Unknown Goalie           
Backup : Jonathan Bernier         

<b>Extra Forwards</b>
Normal : Rem Pitlick, Paul Stastny, Evander Kane - PP : Bobby Ryan, Mathieu Perreault - PK : Brett Sutter
<b>Extra Defensemen</b>
Normal : Joakim Ryan, Riley Stillman, Ilya Lyubushkin - PP : Joakim Ryan - PK : Jordan Schmaltz, Ilya Lyubushkin
<b>Penalty Shots</b>
Rem Pitlick, Paul Stastny, Evander Kane, Bobby Ryan, Mathieu Perreault

<b>Scratches</b>
Boo Nieves (Lower Body Injury), Jan Rutta (Healthy), Tucker Poolman (Strained Back Injury), Pavel Francouz (Exhaustion), Martin Jones (Healthy)</pre></div>
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
 1 Alan Quine               Jakub Voracek            Joe Pavelski             40     0   2  3  
 2 Steven Stamkos           Daniel Carr              Alexander Radulov        35     1   2  2  
 3 Unknown Player           Josh Anderson            Matthew Nieto            15     1   2  2  
 4 Calle Jarnkrok           Mathew Barzal            Connor Brown             10     1   4  0  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Victor Hedman            Joe Hicketts                                      40     1   2  2  
 2 Colton Parayko           Ryan Ellis                                        30     1   2  2  
 3 Ryan Pulock              Dylan DeMelo                                      20     1   2  2  
 4 Victor Hedman            Colton Parayko                                    10     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Steven Stamkos           Unknown Player           Joe Pavelski             60     1   2  2  
 2 Alexander Radulov        Unknown Player           Jakub Voracek            40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Victor Hedman            Joe Hicketts                                      60     1   2  2  
 2 Dylan DeMelo             Colton Parayko                                    40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Steven Stamkos           Unknown Player           60     1   2  2  
 2 Jakub Voracek            Joe Pavelski             40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Victor Hedman            Dylan DeMelo             60     1   2  2  
 2 Joe Hicketts             Colton Parayko           40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Unknown Player                                    60     1   2  2  
 2 Joe Pavelski                                      40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Colton Parayko           Ryan Ellis               60     1   2  2  
 2 Dylan DeMelo             Victor Hedman            40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Steven Stamkos           Jakub Voracek            60     1   2  2  
 2 Joe Pavelski             Unknown Player           40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Victor Hedman            Joe Hicketts             60     1   2  2  
 2 Dylan DeMelo             Colton Parayko           40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Steven Stamkos           Jakub Voracek            Joe Pavelski             Victor Hedman            Joe Hicketts             

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Steven Stamkos           Jakub Voracek            Joe Pavelski             Ryan Ellis               Joe Hicketts             

<b>Goaltenders</b>
Starting : Jordan Binnington        
Backup : Philipp Grubauer         

<b>Extra Forwards</b>
Normal : Jakub Voracek, Unknown Player, Joe Pavelski - PP : Joe Pavelski, Unknown Player - PK : Joe Pavelski
<b>Extra Defensemen</b>
Normal : Dylan DeMelo, Colton Parayko, Victor Hedman - PP : Victor Hedman - PK : Dylan DeMelo, Colton Parayko
<b>Penalty Shots</b>
Jakub Voracek, Unknown Player, Joe Pavelski, Alexander Radulov, Calle Jarnkrok

<b>Scratches</b>
Brad Richardson (Left Hand Injury), Ryan O'Reilly (Healthy), Connor Brickley (Healthy), Michael Hutchinson (Healthy)</pre></div>
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
 1 Derek Stepan             Matthew Tkachuk          Kasperi Kapanen          40     1   1  3  
 2 Casey Cizikas            Leo Komarov              Erik Haula               30     1   2  2  
 3 Barclay Goodrow          Roope Hintz              Joonas Donskoi           20     1   3  1  
 4 Jean-Gabriel Pageau      Scott Wilson             Chris Thorburn           10     2   2  1  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Rob O'Gara               Olli Maatta                                       40     1   1  3  
 2 Mike Green               Kevin Shattenkirk                                 30     1   2  2  
 3 Miro Heiskanen           Juuso Riikola                                     20     1   3  1  
 4 Mike Green               Olli Maatta                                       10     2   2  1  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Erik Haula               Joonas Donskoi           Leo Komarov              60     1   2  2  
 2 Barclay Goodrow          Matthew Tkachuk          Kasperi Kapanen          40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Rob O'Gara               Olli Maatta                                       60     1   2  2  
 2 Miro Heiskanen           Mike Green                                        40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Casey Cizikas            Leo Komarov              60     1   2  2  
 2 Matthew Tkachuk          Kasperi Kapanen          40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Juuso Riikola            Olli Maatta              60     1   2  2  
 2 Miro Heiskanen           Mike Green               40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Matthew Tkachuk                                   60     1   2  2  
 2 Leo Komarov                                       40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Kevin Shattenkirk        Olli Maatta              60     1   2  2  
 2 Miro Heiskanen           Mike Green               40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Erik Haula               Kasperi Kapanen          60     1   2  2  
 2 Matthew Tkachuk          Leo Komarov              40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Rob O'Gara               Olli Maatta              60     1   2  2  
 2 Miro Heiskanen           Mike Green               40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Derek Stepan             Matthew Tkachuk          Leo Komarov              Rob O'Gara               Juuso Riikola            

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Chris Thorburn           Scott Wilson             Leo Komarov              Rob O'Gara               Miro Heiskanen           

<b>Goaltenders</b>
Starting : Matt Murray              
Backup : Christopher Gibson       

<b>Extra Forwards</b>
Normal : Leo Komarov, Matthew Tkachuk, Casey Cizikas - PP : Kasperi Kapanen, Casey Cizikas - PK : Matthew Tkachuk
<b>Extra Defensemen</b>
Normal : Mike Green, Miro Heiskanen, Olli Maatta - PP : Mike Green - PK : Olli Maatta, Mike Green
<b>Penalty Shots</b>
Casey Cizikas, Erik Haula, Matthew Tkachuk, Kasperi Kapanen, Leo Komarov

<b>Scratches</b>
Jesperi Kotkaniemi (Healthy), Ben Street (Healthy), Sami Vatanen (Sprained Right Finger Injury), Juuse Saros (Healthy)</pre></div>
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
 1 Elias Lindholm           Alex Ovechkin            Mitch Marner             35     0   1  4  
 2 Nathan MacKinnon         Jonathan Huberdeau       Brock Boeser             35     0   1  4  
 3 Yanni Gourde             Jaden Schwartz           Zack Kassian             20     0   3  2  
 4 Carter Verhaeghe         Miles Wood               Riley Nash               10     1   3  1  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 P.K. Subban              Seth Jones                                        40     0   3  2  
 2 Travis Hamonic           Nate Schmidt                                      30     0   4  1  
 3 Neal Pionk               Adam Pelech                                       25     0   4  1  
 4 P.K. Subban              Seth Jones                                        5      0   3  2  

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
 1 Yanni Gourde             Zack Kassian             60     0   5  0  
 2 Elias Lindholm           Miles Wood               40     0   5  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Travis Hamonic           Seth Jones               60     0   5  0  
 2 Neal Pionk               Nate Schmidt             40     0   5  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Yanni Gourde                                      60     0   5  0  
 2 Elias Lindholm                                    40     0   5  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Travis Hamonic           Seth Jones               60     0   5  0  
 2 P.K. Subban              Neal Pionk               40     0   5  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Nathan MacKinnon         Mitch Marner             55     0   1  4  
 2 Elias Lindholm           Alex Ovechkin            45     0   1  4  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 P.K. Subban              Seth Jones               60     0   3  2  
 2 Travis Hamonic           Nate Schmidt             40     0   3  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Nathan MacKinnon         Alex Ovechkin            Mitch Marner             P.K. Subban              Seth Jones               

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Elias Lindholm           Yanni Gourde             Mitch Marner             Travis Hamonic           Seth Jones               

<b>Goaltenders</b>
Starting : Devan Dubnyk             
Backup : Malcolm Subban           

<b>Extra Forwards</b>
Normal : Jaden Schwartz, Zack Kassian, Miles Wood - PP : Jaden Schwartz, Zack Kassian - PK : Miles Wood
<b>Extra Defensemen</b>
Normal : Nate Schmidt, Adam Pelech, Travis Hamonic - PP : Nate Schmidt - PK : Adam Pelech, Travis Hamonic
<b>Penalty Shots</b>
Nathan MacKinnon, Alex Ovechkin, Jonathan Huberdeau, Mitch Marner, Brock Boeser

<b>Scratches</b>
Jordan Greenway (Healthy), Christian Wolanin (Healthy), Calle Rosen (Healthy)</pre></div>
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
 1 John Tavares             Mike Hoffman             Brendan Gallagher        40     0   3  2  
 2 Joe Thornton             Derick Brassard          Tanner Pearson           30     0   3  2  
 3 Zack Smith               Ondrej Palat             Tyler Pitlick            20     2   2  1  
 4 Brandon Sutter           Tyler Motte              Matt Martin              10     2   2  1  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Esa Lindell              Kris Russell                                      40     1   4  0  
 2 Kevin Connauton          Zach Bogosian                                     30     1   4  0  
 3 Vince Dunn               Adam McQuaid                                      20     1   4  0  
 4 Kevin Connauton          Zach Bogosian                                     10     1   4  0  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 John Tavares             Mike Hoffman             Brendan Gallagher        60     0   0  5  
 2 Joe Thornton             Derick Brassard          Tanner Pearson           40     0   0  5  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Ondrej Palat             Vince Dunn                                        60     0   0  5  
 2 Esa Lindell              Zack Smith                                        40     0   0  5  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Brandon Sutter           Tyler Motte              55     0   5  0  
 2 Zack Smith               Tyler Pitlick            45     0   5  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Esa Lindell              Kris Russell             55     0   5  0  
 2 Kevin Connauton          Zach Bogosian            45     0   5  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Brandon Sutter                                    60     0   5  0  
 2 Zack Smith                                        40     0   5  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Esa Lindell              Kris Russell             60     0   5  0  
 2 Kevin Connauton          Zach Bogosian            40     0   5  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 John Tavares             Mike Hoffman             60     0   3  2  
 2 Derick Brassard          Brendan Gallagher        40     0   3  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Esa Lindell              Zach Bogosian            60     0   3  2  
 2 Adam McQuaid             Kevin Connauton          40     0   3  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   John Tavares             Mike Hoffman             Brendan Gallagher        Esa Lindell              Vince Dunn               

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Brandon Sutter           Zack Smith               Tyler Motte              Esa Lindell              Kris Russell             

<b>Goaltenders</b>
Starting : Brian Elliott            
Backup : Francois Brassard        

<b>Extra Forwards</b>
Normal : John Tavares, Mike Hoffman, Brendan Gallagher - PP : Joe Thornton, Mike Hoffman - PK : Zack Smith
<b>Extra Defensemen</b>
Normal : Kris Russell, Esa Lindell, Zach Bogosian - PP : Kris Russell - PK : Kevin Connauton, Esa Lindell
<b>Penalty Shots</b>
Joe Thornton, Tanner Pearson, Zach Bogosian, John Tavares, Derick Brassard

<b>Scratches</b>
Vladimir Sobotka (Healthy), Andrew Cogliano (Healthy), Connor Hellebuyck (Healthy)</pre></div>
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
 1 Noel Acciari             Lukas Radil              Troy Terry               40     1   2  2  
 2 David Krejci             Sam Bennett              Jimmy Hayes              30     1   2  2  
 3 Tomas Hertl              Sean Kuraly              Tomas Nosek              20     1   2  2  
 4 Radek Faksa              Brett Howden             Frank Vatrano            10     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Alex Pietrangelo         Brenden Dillon                                    40     1   2  2  
 2 Mike Matheson            Patrik Nemeth                                     30     1   2  2  
 3 Shea Theodore            Mark Borowiecki                                   20     1   2  2  
 4 Mike Matheson            Brenden Dillon                                    10     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Troy Terry               Lukas Radil              Radek Faksa              60     1   2  2  
 2 David Krejci             Sam Bennett              Noel Acciari             40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Mark Borowiecki          Brenden Dillon                                    60     1   2  2  
 2 Mike Matheson            Patrik Nemeth                                     40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Noel Acciari             David Krejci             60     1   2  2  
 2 Troy Terry               Radek Faksa              40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Shea Theodore            Brenden Dillon           60     1   2  2  
 2 Mike Matheson            Patrik Nemeth            40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Radek Faksa                                       60     1   2  2  
 2 David Krejci                                      40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Shea Theodore            Brenden Dillon           60     1   2  2  
 2 Mike Matheson            Patrik Nemeth            40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Troy Terry               David Krejci             60     1   2  2  
 2 Sam Bennett              Radek Faksa              40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Shea Theodore            Brenden Dillon           60     1   2  2  
 2 Mike Matheson            Patrik Nemeth            40     1   2  2  

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
Normal : Troy Terry, David Krejci, Radek Faksa - PP : Troy Terry, David Krejci - PK : Radek Faksa
<b>Extra Defensemen</b>
Normal : Shea Theodore, Mark Borowiecki, Brenden Dillon - PP : Shea Theodore - PK : Mark Borowiecki, Brenden Dillon
<b>Penalty Shots</b>
Troy Terry, David Krejci, Noel Acciari, Sam Bennett, Radek Faksa

<b>Scratches</b>
Cody Goloubef (Right Forearm Injury), Frederik Andersen (Suspend)</pre></div>
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
 1 Jonathan Toews           Nick Foligno             Blake Wheeler            35     2   2  1  
 2 Ryan Nugent-Hopkins      Mikael Granlund          Dustin Brown             35     1   1  3  
 3 Lars Eller               Patrick Marleau          Luke Glendening          20     2   2  1  
 4 Anthony Cirelli          Marcus Foligno           Josh Archibald           10     2   2  1  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Jeff Petry               Mattias Ekholm                                    40     1   2  2  
 2 Jamie Oleksiak           Noah Hanifin                                      30     2   2  1  
 3 John Moore               Brandon Montour                                   20     2   2  1  
 4 Jamie Oleksiak           Noah Hanifin                                      10     2   2  1  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Jonathan Toews           Nick Foligno             Blake Wheeler            60     1   2  2  
 2 Ryan Nugent-Hopkins      Mikael Granlund          Dustin Brown             40     1   2  2  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Jeff Petry               Mattias Ekholm                                    60     1   2  2  
 2 Brandon Montour          Noah Hanifin                                      40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Lars Eller               Dustin Brown             60     1   2  2  
 2 Anthony Cirelli          Luke Glendening          40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Jeff Petry               Jamie Oleksiak           60     1   2  2  
 2 Mattias Ekholm           John Moore               40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Luke Glendening                                   60     1   2  2  
 2 Lars Eller                                        40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Jeff Petry               Jamie Oleksiak           60     1   2  2  
 2 Mattias Ekholm           John Moore               40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Jonathan Toews           Blake Wheeler            60     1   2  2  
 2 Ryan Nugent-Hopkins      Mikael Granlund          40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Jeff Petry               Mattias Ekholm           60     1   2  2  
 2 John Moore               Brandon Montour          40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Jonathan Toews           Ryan Nugent-Hopkins      Blake Wheeler            Jeff Petry               Mattias Ekholm           

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Lars Eller               Nick Foligno             Dustin Brown             Jeff Petry               John Moore               

<b>Goaltenders</b>
Starting : Anders Nilsson           
Backup : Elvis Merlikins          

<b>Extra Forwards</b>
Normal : Ryan Nugent-Hopkins, Mikael Granlund, Dustin Brown - PP : Anthony Cirelli, Lars Eller - PK : Nick Foligno
<b>Extra Defensemen</b>
Normal : Noah Hanifin, John Moore, Jeff Petry - PP : Noah Hanifin - PK : Mattias Ekholm, John Moore
<b>Penalty Shots</b>
Jonathan Toews, Anthony Cirelli, Blake Wheeler, Dustin Brown, Ryan Nugent-Hopkins

<b>Scratches</b>
Ron Hainsey (Healthy), John Gibson (Healthy)</pre></div>
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
 1 Carl Soderberg           Darren Helm              Tyler Seguin             30     1   2  2  
 2 Tyler Bozak              Josh Bailey              Mats Zuccarello          30     1   2  2  
 3 Paul Carey               Lawson Crouse            Jake Debrusk             30     1   2  2  
 4 Curtis Lazar             Max Jones                Buddy Robinson           10     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Damon Severson           Brian Dumoulin                                    35     1   2  2  
 2 Brent Burns              Carl Dahlstrom                                    35     1   2  2  
 3 Justin Schultz           Michael Stone                                     20     1   2  2  
 4 Brent Burns              Brian Dumoulin                                    10     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Carl Soderberg           Josh Bailey              Tyler Seguin             50     0   1  4  
 2 Tyler Bozak              Paul Carey               Jake Debrusk             50     0   1  4  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Brent Burns              Brian Dumoulin                                    50     0   1  4  
 2 Damon Severson           Justin Schultz                                    50     0   1  4  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Carl Soderberg           Buddy Robinson           50     1   4  0  
 2 Paul Carey               Lawson Crouse            50     1   4  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Brian Dumoulin           Carl Dahlstrom           50     1   4  0  
 2 Brent Burns              Damon Severson           50     1   4  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Buddy Robinson                                    50     1   4  0  
 2 Lawson Crouse                                     50     1   4  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Brian Dumoulin           Carl Dahlstrom           50     1   4  0  
 2 Brent Burns              Damon Severson           50     1   4  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Tyler Seguin             Jake Debrusk             50     1   2  2  
 2 Tyler Bozak              Josh Bailey              50     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Brent Burns              Brian Dumoulin           50     1   2  2  
 2 Damon Severson           Justin Schultz           50     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Carl Soderberg           Josh Bailey              Tyler Seguin             Brent Burns              Damon Severson           

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Carl Soderberg           Paul Carey               Darren Helm              Brian Dumoulin           Damon Severson           

<b>Goaltenders</b>
Starting : David Rittich            
Backup : Jake Oettinger           

<b>Extra Forwards</b>
Normal : Tyler Seguin, Josh Bailey, Carl Soderberg - PP : Tyler Seguin, Carl Soderberg - PK : Carl Soderberg
<b>Extra Defensemen</b>
Normal : Justin Schultz, Brent Burns, Carl Dahlstrom - PP : Justin Schultz - PK : Justin Schultz, Brent Burns
<b>Penalty Shots</b>
Mats Zuccarello, Carl Dahlstrom, Tyler Seguin, Tyler Bozak, Paul Carey

<b>Scratches</b>
Marcus Johansson (Broken Left Foot Toe Injury), Nathan Beaulieu (Healthy), Xavier Ouellet (Healthy), Collin Delia (Healthy), Anton Khudobin (Healthy)</pre></div>
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
 1 Michael Rasmussen        Brady Tkachuk            Alexandre Fortin         40     1   1  3  
 2 Nick Cousins             Mackenzie MacEachern     Micheal Ferland          30     1   2  2  
 3 Unknown Player           James van Riemsdyk       Chris Wagner             20     1   1  3  
 4 Tyson Jost               Colin Wilson             Anthony Greco            10     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Dmitry Kulikov           Cam Fowler                                        40     2   2  1  
 2 Chris Wideman            Trevor van Riemsdyk                               30     1   2  2  
 3 Andy Greene              Unknown Player                                    20     1   3  1  
 4 Unknown Player           Chris Wideman                                     10     0   1  4  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Nick Cousins             Brady Tkachuk            Michael Rasmussen        55     0   0  5  
 2 Tyson Jost               Chris Wagner             Colin Wilson             45     0   1  4  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Cam Fowler               Chris Wideman                                     55     0   1  4  
 2 Unknown Player           Andy Greene                                       45     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Chris Wagner             Unknown Player           60     1   4  0  
 2 Michael Rasmussen        Alexandre Fortin         40     1   3  1  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Andy Greene              Chris Wideman            60     1   4  0  
 2 Dmitry Kulikov           Cam Fowler               40     1   3  1  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Unknown Player                                    60     1   4  0  
 2 Alexandre Fortin                                  40     1   4  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Cam Fowler               Dmitry Kulikov           60     0   5  0  
 2 Andy Greene              Chris Wideman            40     1   4  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Chris Wagner             Brady Tkachuk            60     1   1  3  
 2 Unknown Player           Micheal Ferland          40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Chris Wideman            Cam Fowler               65     2   1  2  
 2 Dmitry Kulikov           Andy Greene              35     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Chris Wagner             Brady Tkachuk            Nick Cousins             Cam Fowler               Dmitry Kulikov           

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Unknown Player           Brady Tkachuk            Chris Wagner             Andy Greene              Cam Fowler               

<b>Goaltenders</b>
Starting : Semyon Varlamov          
Backup : Anton Forsberg           

<b>Extra Forwards</b>
Normal : Unknown Player, James van Riemsdyk, Chris Wagner - PP : Michael Rasmussen, Colin Wilson - PK : Brady Tkachuk
<b>Extra Defensemen</b>
Normal : Chris Wideman, Dmitry Kulikov, Unknown Player - PP : Andy Greene - PK : Cam Fowler, Trevor van Riemsdyk
<b>Penalty Shots</b>
Brady Tkachuk, Unknown Player, Chris Wagner, Andy Greene, James van Riemsdyk

<b>Scratches</b>
Sam Gagner (Healthy), Evan Rodrigues (Strained Right Knee Injury), Michael Del Zotto (Strained Right Elbow Injury), Robert Bortuzzo (Healthy), Jordan Martinook (Back Spasms Injury)
Tomas Jurco (Healthy), Connor Carrick (Healthy), Matej Tomek (Healthy)</pre></div>
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
 1 Kyle Brodziak            Danton Heinen            Logan Shaw               35     0   5  0  
 2 Greg Carey               Ryan Dzingel             Jayson Megna             30     0   5  0  
 3 Adrian Kempe             Reilly Smith             Unknown Player           27     0   5  0  
 4 Adam Henrique            Alex Tuch                Andreas Athanasiou       8      0   5  0  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Kevan Miller             Jack Johnson                                      40     0   5  0  
 2 Deryk Engelland          Erik Cernak                                       30     0   5  0  
 3 Nick Holden              Zach Redmond                                      20     0   5  0  
 4 Erik Cernak              Deryk Engelland                                   10     0   5  0  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Logan Shaw               Danton Heinen            Ryan Dzingel             60     0   0  5  
 2 Greg Carey               Andreas Athanasiou       Ryan Dzingel             40     0   0  5  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Kevan Miller             Erik Cernak                                       60     0   0  5  
 2 Nick Holden              Jack Johnson                                      40     0   0  5  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Greg Carey               Logan Shaw               60     0   5  0  
 2 Jayson Megna             Unknown Player           40     0   5  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Zach Redmond             Kevan Miller             60     0   5  0  
 2 Deryk Engelland          Erik Cernak              40     0   5  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Logan Shaw                                        60     0   5  0  
 2 Greg Carey                                        40     0   5  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Jack Johnson             Kevan Miller             60     0   5  0  
 2 Deryk Engelland          Erik Cernak              40     0   5  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Jayson Megna             Greg Carey               60     0   2  3  
 2 Logan Shaw               Unknown Player           40     0   2  3  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Kevan Miller             Jack Johnson             60     0   2  3  
 2 Deryk Engelland          Erik Cernak              40     0   2  3  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Greg Carey               Danton Heinen            Logan Shaw               Nick Holden              Jack Johnson             

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Adrian Kempe             Greg Carey               Unknown Player           Nick Holden              Jack Johnson             

<b>Goaltenders</b>
Starting : Pheonix Copley           
Backup : Carey Price              

<b>Extra Forwards</b>
Normal : Andreas Athanasiou, Danton Heinen, Alex Tuch - PP : Danton Heinen, Andreas Athanasiou - PK : Adrian Kempe
<b>Extra Defensemen</b>
Normal : Deryk Engelland, Erik Cernak, Nick Holden - PP : Zach Redmond - PK : Deryk Engelland, Nick Holden
<b>Penalty Shots</b>
Greg Carey, Danton Heinen, Andreas Athanasiou, Unknown Player, Reilly Smith

<b>Scratches</b>
Jordan Staal (Strained Left Knee Injury), Alex Killorn (Healthy), Blake Comeau (Lacerated Right Calf Injury), Logan Couture (Healthy), Oscar Klefbom (Healthy)
Sam Reinhart (Healthy)</pre></div>
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
 1 Claude Giroux            Chris Tierney            Mark Stone               34     0   3  2  
 2 Charlie Coyle            Gabriel Landeskog        Unknown Player           31     0   2  3  
 3 Colin White              Jesper Bratt             Artturi Lehkonen         23     1   2  2  
 4 Artem Anisimov           Ryan Donato              Reid Boucher             12     1   2  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Roman Josi               Erik Gustafsson                                   36     0   4  1  
 2 Ben Hutton               Nick Jensen                                       33     0   4  1  
 3 Ian McCoshen             Shea Weber                                        21     0   4  1  
 4 Roman Josi               Nick Jensen                                       10     0   4  1  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Claude Giroux            Chris Tierney            Mark Stone               53     0   0  5  
 2 Charlie Coyle            Gabriel Landeskog        Jesper Bratt             47     1   0  4  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Roman Josi               Erik Gustafsson                                   60     0   1  4  
 2 Nick Jensen              Ben Hutton                                        40     0   0  5  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Chris Tierney            Unknown Player           60     0   4  1  
 2 Charlie Coyle            Artturi Lehkonen         40     0   4  1  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Roman Josi               Nick Jensen              60     0   4  1  
 2 Ben Hutton               Erik Gustafsson          40     0   4  1  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Claude Giroux                                     60     0   5  0  
 2 Unknown Player                                    40     0   5  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Roman Josi               Erik Gustafsson          60     0   5  0  
 2 Ben Hutton               Nick Jensen              40     0   5  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Claude Giroux            Gabriel Landeskog        60     1   2  2  
 2 Charlie Coyle            Mark Stone               40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Ben Hutton               Roman Josi               55     1   2  2  
 2 Nick Jensen              Erik Gustafsson          45     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Claude Giroux            Gabriel Landeskog        Mark Stone               Roman Josi               Erik Gustafsson          

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Claude Giroux            Gabriel Landeskog        Mark Stone               Roman Josi               Nick Jensen              

<b>Goaltenders</b>
Starting : Carter Hutton            
Backup : Charlie Lindgren         

<b>Extra Forwards</b>
Normal : Gabriel Landeskog, Claude Giroux, Unknown Player - PP : Mark Stone, Claude Giroux - PK : Reid Boucher
<b>Extra Defensemen</b>
Normal : Nick Jensen, Erik Gustafsson, Roman Josi - PP : Roman Josi - PK : Nick Jensen, Roman Josi
<b>Penalty Shots</b>
Charlie Coyle, Gabriel Landeskog, Mark Stone, Unknown Player, Claude Giroux

<b>Scratches</b>
Matt Grzelcyk (Strained Back Injury), Matt Taormina (Healthy), Jesper Fast (Bruised Right Leg Injury), Marc-Andre Fleury (Suspend)</pre></div>
<h1 class="TeamLinesPro_DET"><a id="RedWings">Red Wings</a></h1>
<b>Lines are Incomplete</b><br />
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
 1 Matt Duchene             Patrik Laine             Kyle Turris              40     1   2  2  
 2 Connor McDavid           Jared McCann             Brayden Point            30     1   2  2  
 3 Ivan Barbashev           Conor Sheary             Oliver Bjorkstrand       20     1   2  2  
 4 Unknown Player           Andrew Mangiapane        Mathieu Joseph           10     0   3  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Ryan Suter               Unknown Player                                    40     1   2  2  
 2 Torey Krug               Marc Staal                                        30     1   2  2  
 3 Korbinian Holzer         Calvin de Haan                                    20     1   2  2  
 4 Korbinian Holzer         Unknown Player                                    10     1   3  1  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Connor McDavid           Patrik Laine             Brayden Point            60     0   1  4  
 2 Matt Duchene             Conor Sheary             Kyle Turris              40     0   1  4  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Ryan Suter               Unknown Player                                    60     1   2  2  
 2 Torey Krug               Marc Staal                                        40     1   2  2  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Unknown Player           Ivan Barbashev           60     1   2  2  
 2 Connor McDavid           Jared McCann             40     1   2  2  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Unknown Player           Ryan Suter               60     1   2  2  
 2 Torey Krug               Marc Staal               40     1   2  2  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Ivan Barbashev                                    60     1   2  2  
 2 Unknown Player                                    40     1   2  2  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Korbinian Holzer         Marc Staal               60     1   2  2  
 2 Unknown Player           Ryan Suter               40     1   2  2  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Connor McDavid           Ivan Barbashev           60     1   2  2  
 2 Unknown Player           Jared McCann             40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Unknown Player           Ryan Suter               60     1   2  2  
 2 Marc Staal               Torey Krug               40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Connor McDavid           Kyle Turris              Brayden Point            Ryan Suter               Unknown Player           

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Unknown Player           Ivan Barbashev           Oliver Bjorkstrand       Korbinian Holzer         Marc Staal               

<b>Goaltenders</b>
Starting : Sergei Bobrovsky         
Backup : Marcus Hogberg           

<b>Extra Forwards</b>
Normal : Oliver Bjorkstrand, Matt Duchene, Jared McCann - PP : Jared McCann, Conor Sheary - PK : Ivan Barbashev
<b>Extra Defensemen</b>
Normal : Unknown Player, Ryan Suter, Marc Staal - PP : Torey Krug - PK : Calvin de Haan, Ryan Suter
<b>Penalty Shots</b>
Connor McDavid, Patrik Laine, Jared McCann, Matt Duchene, Kyle Turris

<b>Scratches</b>
Mark Giordano (Bruised Left Leg Injury), Teddy Blueger (Left Leg Injury), Paul Thompson (Healthy), Jake McCabe (Left Hand Injury), Mathew Dumba (Healthy)
Stefan Noesen (Healthy)</pre></div>
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
 1 Anze Kopitar             Pavel Buchnevich         J.T. Compher             32     0   3  2  
 2 Mikael Backlund          Anders Lee               Rickard Rakell           32     0   2  3  
 3 Zemgus Girgensons        Chris Kreider            Magnus Paajarvi          31     1   2  2  
 4 Derek Grant              Cole Schneider           Tim Schaller             5      2   3  0  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Rasmus Ristolainen       Zdeno Chara                                       40     1   3  1  
 2 Brent Seabrook           Matt Niskanen                                     40     0   4  1  
 3 Josh Manson              Dan Hamhuis                                       12     1   3  1  
 4 Rasmus Ristolainen       Matt Niskanen                                     8      0   4  1  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Anze Kopitar             Chris Kreider            Pavel Buchnevich         70     0   1  4  
 2 Mikael Backlund          Anders Lee               Rickard Rakell           30     0   1  4  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Rasmus Ristolainen       Matt Niskanen                                     70     0   1  4  
 2 Brent Seabrook           Josh Manson                                       30     0   1  4  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Anze Kopitar             Zemgus Girgensons        60     1   4  0  
 2 J.T. Compher             Magnus Paajarvi          40     1   4  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Matt Niskanen            Josh Manson              50     1   4  0  
 2 Zdeno Chara              Rasmus Ristolainen       50     1   4  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Anze Kopitar                                      55     1   4  0  
 2 J.T. Compher                                      45     1   4  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Josh Manson              Matt Niskanen            50     1   4  0  
 2 Zdeno Chara              Rasmus Ristolainen       50     1   4  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Anze Kopitar             J.T. Compher             50     0   3  2  
 2 Mikael Backlund          Chris Kreider            50     0   1  4  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Rasmus Ristolainen       Josh Manson              55     0   4  1  
 2 Brent Seabrook           Matt Niskanen            45     0   4  1  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Anze Kopitar             Chris Kreider            Rickard Rakell           Brent Seabrook           Rasmus Ristolainen       

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Anze Kopitar             J.T. Compher             Zemgus Girgensons        Josh Manson              Matt Niskanen            

<b>Goaltenders</b>
Starting : Linus Ullmark            
Backup : Thomas Greiss            

<b>Extra Forwards</b>
Normal : Chris Kreider, Anders Lee, Anze Kopitar - PP : Rickard Rakell, Chris Kreider - PK : Magnus Paajarvi
<b>Extra Defensemen</b>
Normal : Rasmus Ristolainen, Brent Seabrook, Zdeno Chara - PP : Rasmus Ristolainen - PK : Brent Seabrook, Rasmus Ristolainen
<b>Penalty Shots</b>
Chris Kreider, Anze Kopitar, Rasmus Ristolainen, Brent Seabrook, Rickard Rakell

<b>Scratches</b>
Sidney Crosby (Healthy), Chad Ruhwedel (Healthy), Taylor Fedun (Healthy), Teuvo Teravainen (Torn Right Knee Ligaments Injury)</pre></div>
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
 1 Ryan Johansen            Jason Dickinson          David Pastrnak           35     0   1  4  
 2 Alex Galchenyuk          Bryan Rust               Vladimir Tarasenko       34     0   2  3  
 3 Pierre-Edouard Bellemare Drew Stafford            John Hayden              21     1   3  1  
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
Starting : Andrei Vasilevskiy       
Backup : Max Lagace               

<b>Extra Forwards</b>
Normal : Vladimir Tarasenko, Drew Stafford, David Pastrnak - PP : David Pastrnak, Vladimir Tarasenko - PK : David Pastrnak
<b>Extra Defensemen</b>
Normal : Nick Leddy, Erik Johnson, Ryan McDonagh - PP : Erik Johnson - PK : Erik Johnson, Nick Leddy
<b>Penalty Shots</b>
Ryan Johansen, Nick Leddy, Drew Stafford, David Pastrnak, Vladimir Tarasenko

<b>Scratches</b>
Dean Kukan (Healthy), Corey Tropp (Healthy), Joakim Nordstrom (Healthy), Calvin Pickard (Healthy)</pre></div>
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
 1 Aleksander Barkov        Filip Forsberg           Ondrej Kase              40     1   2  2  
 2 Robert Thomas            Phil Kessel              Travis Konecny           35     1   2  2  
 3 Derek Ryan               Brendan Leipsic          Tyler Toffoli            20     1   2  2  
 4 Victor Rask              Oskar Lindblom           Joel Armia               5      1   3  1  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Kris Letang              Jared Spurgeon                                    40     1   2  2  
 2 Justin Braun             T.J. Brodie                                       30     1   2  2  
 3 Joel Edmundson           Gustav Forsling                                   20     1   2  2  
 4 Kris Letang              Jared Spurgeon                                    10     1   2  2  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Aleksander Barkov        Filip Forsberg           Phil Kessel              60     0   0  5  
 2 Joel Armia               Travis Konecny           Ondrej Kase              40     0   0  5  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Kris Letang              Jared Spurgeon                                    60     0   0  5  
 2 Justin Braun             Tyler Toffoli                                     40     0   0  5  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Aleksander Barkov        Oskar Lindblom           60     0   5  0  
 2 Derek Ryan               Joel Armia               40     0   5  0  

<b>Penalty Kill 4 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Justin Braun             Jared Spurgeon           60     0   5  0  
 2 Justin Braun             Joel Edmundson           40     0   5  0  

<b>Penalty Kill - 3 Players Forward 
   Forward                                           Time % Phy DF OF </b>
 1 Aleksander Barkov                                 60     0   5  0  
 2 Derek Ryan                                        40     0   5  0  

<b>Penalty Kill - 3 Players Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Justin Braun             Jared Spurgeon           60     0   5  0  
 2 Justin Braun             Joel Edmundson           40     0   5  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Aleksander Barkov        Derek Ryan               60     1   1  3  
 2 Phil Kessel              Filip Forsberg           40     1   1  3  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Kris Letang              Jared Spurgeon           60     1   2  2  
 2 Justin Braun             T.J. Brodie              40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Aleksander Barkov        Filip Forsberg           Phil Kessel              Kris Letang              Jared Spurgeon           

<b>Last Minutes Defensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Aleksander Barkov        Derek Ryan               Joel Armia               Justin Braun             Jared Spurgeon           

<b>Goaltenders</b>
Starting : Laurent Brossoit         
Backup : Michal Neuvirth          

<b>Extra Forwards</b>
Normal : Aleksander Barkov, Filip Forsberg, Phil Kessel - PP : Aleksander Barkov, Phil Kessel - PK : Aleksander Barkov
<b>Extra Defensemen</b>
Normal : Jared Spurgeon, Kris Letang, Justin Braun - PP : Kris Letang - PK : Jared Spurgeon, Justin Braun
<b>Penalty Shots</b>
Aleksander Barkov, Derek Ryan, Phil Kessel, Travis Konecny, Filip Forsberg

<b>Scratches</b>
Evgeny Kuznetsov (Left Hip Injury), Darcy Kuemper (Suspend)</pre></div>
<h1 class="TeamLinesPro_DAL"><a id="Stars">Stars</a></h1>
<b>Lines are Incomplete</b><br />
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
 1 Patrice Bergeron         Max Pacioretty           Zach Parise              34     0   2  3  
 2 Jordan Weal              Jon Marchessault         Mark Letestu             34     0   1  4  
 3 Johan Larsson            Corey Perry              Byron Froese             26     0   2  3  
 4 Matt Puempel             Frans Nielsen            Unknown Player           6      0   4  1  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Derek Forbort            Jordie Benn                                       34     0   3  2  
 2 Brandon Davidson         Duncan Keith                                      33     0   4  1  
 3 Ryan Sproul              Thomas Hickey                                     23     1   3  1  
 4 Ryan Sproul              Duncan Keith                                      10     1   4  0  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 Patrice Bergeron         Max Pacioretty           Unknown Player           60     0   1  4  
 2 Johan Larsson            Zach Parise              Mark Letestu             40     0   1  4  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Duncan Keith             Derek Forbort                                     60     0   1  4  
 2 Brandon Davidson         Jordie Benn                                       40     0   1  4  

<b>Penalty Kill 4 Players Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Johan Larsson            Max Pacioretty           60     1   4  0  
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
 2 Duncan Keith             Ryan Sproul              40     1   4  0  

<b>4 vs 4 Forward 
   Center                   Wing                     Time % Phy DF OF </b>
 1 Unknown Player           Max Pacioretty           60     1   2  2  
 2 Johan Larsson            Patrice Bergeron         40     1   2  2  

<b>4 vs 4 Defense
   Defense                  Defense                  Time % Phy DF OF </b>
 1 Duncan Keith             Ryan Sproul              60     1   2  2  
 2 Derek Forbort            Jordie Benn              40     1   2  2  

<b>Last Minutes Offensive
   Center                   Left Wing                Right Wing               Defense                  Defense                  </b>
   Patrice Bergeron         Max Pacioretty           Zach Parise              Duncan Keith             Derek Forbort            

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
Zach Parise, Johan Larsson, Unknown Player, Patrice Bergeron, Max Pacioretty

<b>Scratches</b>
Colton Sceviour (Sprained Right Knee Injury), Andrew Agozzino (Healthy), Anthony Stolarz (Healthy)</pre></div>
<h1 class="TeamLinesPro_MIN"><a id="Wild">Wild</a></h1>
<b>Lines are Incomplete</b><br />
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
 1 David Backes             Brandon Pirri            Jakob Silfverberg        25     0   2  3  
 2 Sam Carrick              Nino Niederreiter        Conor Garland            25     0   1  4  
 3 Tyler Graovac            Unknown Player           Troy Brouwer             25     0   4  1  
 4 Rocco Grimaldi           Seth Griffith            Kyle Okposo              25     0   3  2  

<b>5 vs 5 Defense 
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Tyson Barrie             John Carlson                                      30     0   4  1  
 2 Mikhail Sergachev        Casey Nelson                                      30     0   4  1  
 3 Karl Alzner              Nathan Paetsch                                    30     0   4  1  
 4 Tyson Barrie             John Carlson                                      10     0   4  1  

<b>PowerPlay Forward 
   Center                   Left Wing                Right Wing               Time % Phy DF OF </b>
 1 David Backes             Brandon Pirri            Jakob Silfverberg        50     0   0  5  
 2 Sam Carrick              Nino Niederreiter        Conor Garland            50     0   0  5  

<b>PowerPlay Defense
   Defense                  Defense                                           Time % Phy DF OF </b>
 1 Tyson Barrie             John Carlson                                      50     0   1  4  
 2 Mikhail Sergachev        Nathan Paetsch                                    50     0   1  4  

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
Trevor Daley (Strained Left Knee Injury), Riley Barber (Healthy), Patrick Eaves (Healthy), Tage Thompson (Healthy), Matt Irwin (Healthy)
Brett Ritchie (Healthy), Eddie Lack (Healthy), Mike Condon (Healthy)</pre></div>
<?php include "Footer.php";?>
