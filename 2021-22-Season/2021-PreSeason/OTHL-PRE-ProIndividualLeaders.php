<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<title>OTHL - Pro Individual Leaders</title>
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
<b>Minimum Games Played: 1</b><br />
<script>$(function(){$("table").basictablesorter()});</script>
<table class="STHSTableFullW">
<tr><td colspan="3"><h2 class="STHSProIndividualLeader_Players">Players</h2></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Goals</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>G</th></tr></thead>
<tr><td>1</td><td>Dominik Kubalik (NSH)</td><td>13</td><td>8</td></tr>
<tr><td>2</td><td>Connor Brown (NYI)</td><td>13</td><td>8</td></tr>
<tr><td>3</td><td>Kevin Fiala (PHL)</td><td>14</td><td>8</td></tr>
<tr><td>4</td><td>Evander Kane (TBL)</td><td>14</td><td>7</td></tr>
<tr><td>5</td><td>Zach Hyman (ANH)</td><td>14</td><td>7</td></tr>
<tr><td>6</td><td>Dustin Brown (PIT)</td><td>14</td><td>7</td></tr>
<tr><td>7</td><td>Bo Horvat (CGY)</td><td>14</td><td>7</td></tr>
<tr><td>8</td><td>Drake Batherson (VGK)</td><td>14</td><td>7</td></tr>
<tr><td>9</td><td>Sean Couturier (BOS)</td><td>14</td><td>7</td></tr>
<tr><td>10</td><td>Chris Kreider (BUF)</td><td>14</td><td>7</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Assists</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>A</th></tr></thead>
<tr><td>1</td><td>Mikael Granlund (EDM)</td><td>14</td><td>15</td></tr>
<tr><td>2</td><td>Victor Hedman (NYI)</td><td>13</td><td>13</td></tr>
<tr><td>3</td><td>Kasperi Kapanen (WPG)</td><td>14</td><td>11</td></tr>
<tr><td>4</td><td>Blake Wheeler (EDM)</td><td>14</td><td>11</td></tr>
<tr><td>5</td><td>Oscar Klefbom (NSH)</td><td>14</td><td>11</td></tr>
<tr><td>6</td><td>Alexander Radulov (NYI)</td><td>14</td><td>10</td></tr>
<tr><td>7</td><td>Marc-Edouard Vlasic (SEA)</td><td>14</td><td>10</td></tr>
<tr><td>8</td><td>Jeff Petry (EDM)</td><td>14</td><td>10</td></tr>
<tr><td>9</td><td>Jonas Brodin (PHL)</td><td>14</td><td>10</td></tr>
<tr><td>10</td><td>Elias Lindholm (LAK)</td><td>14</td><td>10</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Shots</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>SHT</th></tr></thead>
<tr><td>1</td><td>Aleksander Barkov (SJS)</td><td>14</td><td>79</td></tr>
<tr><td>2</td><td>Mikael Granlund (EDM)</td><td>14</td><td>62</td></tr>
<tr><td>3</td><td>Joe Pavelski (CLB)</td><td>14</td><td>61</td></tr>
<tr><td>4</td><td>Brock Boeser (LAK)</td><td>14</td><td>59</td></tr>
<tr><td>5</td><td>Alex Iafallo (WSH)</td><td>14</td><td>58</td></tr>
<tr><td>6</td><td>Leon Draisaitl (ARI)</td><td>13</td><td>56</td></tr>
<tr><td>7</td><td>Ryan Nugent-Hopkins (EDM)</td><td>14</td><td>56</td></tr>
<tr><td>8</td><td>Sam Reinhart (NSH)</td><td>14</td><td>56</td></tr>
<tr><td>9</td><td>Christian Dvorak (TOR)</td><td>14</td><td>55</td></tr>
<tr><td>10</td><td>Tyler Bertuzzi (EDM)</td><td>14</td><td>55</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Shots %</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>SHT %</th></tr></thead>
<tr><td>1</td><td>Devin Shore (OTT)</td><td>12</td><td>30.77%</td></tr>
<tr><td>2</td><td>Connor Brown (NYI)</td><td>13</td><td>30.77%</td></tr>
<tr><td>3</td><td>Jesper Bratt (NYR)</td><td>14</td><td>26.67%</td></tr>
<tr><td>4</td><td>Isac Lundestrom (MTL)</td><td>14</td><td>26.67%</td></tr>
<tr><td>5</td><td>Tyler Bozak (VGK)</td><td>3</td><td>25.00%</td></tr>
<tr><td>6</td><td>Anze Kopitar (BUF)</td><td>7</td><td>25.00%</td></tr>
<tr><td>7</td><td>Jason Zucker (CAR)</td><td>14</td><td>25.00%</td></tr>
<tr><td>8</td><td>Dominik Kubalik (NSH)</td><td>13</td><td>24.24%</td></tr>
<tr><td>9</td><td>Andrew Mangiapane (DET)</td><td>11</td><td>23.81%</td></tr>
<tr><td>10</td><td>Cam Atkinson (PHL)</td><td>13</td><td>23.53%</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Centers</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PTS</th></tr></thead>
<tr><td>1</td><td>Mikael Granlund (EDM)</td><td>14</td><td>5-15-20</td></tr>
<tr><td>2</td><td>Sean Couturier (BOS)</td><td>14</td><td>7-9-16</td></tr>
<tr><td>3</td><td>Sam Reinhart (NSH)</td><td>14</td><td>6-10-16</td></tr>
<tr><td>4</td><td>Elias Pettersson (CLB)</td><td>14</td><td>6-9-15</td></tr>
<tr><td>5</td><td>Elias Lindholm (LAK)</td><td>14</td><td>5-10-15</td></tr>
<tr><td>6</td><td>Ryan Nugent-Hopkins (EDM)</td><td>14</td><td>6-8-14</td></tr>
<tr><td>7</td><td>Blake Wheeler (EDM)</td><td>14</td><td>3-11-14</td></tr>
<tr><td>8</td><td>Drake Batherson (VGK)</td><td>14</td><td>7-6-13</td></tr>
<tr><td>9</td><td>Mikael Backlund (STL)</td><td>14</td><td>5-8-13</td></tr>
<tr><td>10</td><td>Bo Horvat (CGY)</td><td>14</td><td>7-5-12</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Left Wings</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PTS</th></tr></thead>
<tr><td>1</td><td>Mikael Granlund (EDM)</td><td>14</td><td>5-15-20</td></tr>
<tr><td>2</td><td>Chris Kreider (BUF)</td><td>14</td><td>7-8-15</td></tr>
<tr><td>3</td><td>Alexander Radulov (NYI)</td><td>14</td><td>5-10-15</td></tr>
<tr><td>4</td><td>Kasperi Kapanen (WPG)</td><td>14</td><td>4-11-15</td></tr>
<tr><td>5</td><td>Kevin Fiala (PHL)</td><td>14</td><td>8-6-14</td></tr>
<tr><td>6</td><td>Ryan Nugent-Hopkins (EDM)</td><td>14</td><td>6-8-14</td></tr>
<tr><td>7</td><td>Evander Kane (TBL)</td><td>14</td><td>7-6-13</td></tr>
<tr><td>8</td><td>Tyler Bertuzzi (EDM)</td><td>14</td><td>5-8-13</td></tr>
<tr><td>9</td><td>Dustin Brown (PIT)</td><td>14</td><td>7-5-12</td></tr>
<tr><td>10</td><td>Jamie Benn (VGK)</td><td>14</td><td>5-7-12</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Right Wings</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PTS</th></tr></thead>
<tr><td>1</td><td>Mikael Granlund (EDM)</td><td>14</td><td>5-15-20</td></tr>
<tr><td>2</td><td>Sam Reinhart (NSH)</td><td>14</td><td>6-10-16</td></tr>
<tr><td>3</td><td>Chris Kreider (BUF)</td><td>14</td><td>7-8-15</td></tr>
<tr><td>4</td><td>Alexander Radulov (NYI)</td><td>14</td><td>5-10-15</td></tr>
<tr><td>5</td><td>Elias Lindholm (LAK)</td><td>14</td><td>5-10-15</td></tr>
<tr><td>6</td><td>Kasperi Kapanen (WPG)</td><td>14</td><td>4-11-15</td></tr>
<tr><td>7</td><td>Kevin Fiala (PHL)</td><td>14</td><td>8-6-14</td></tr>
<tr><td>8</td><td>Blake Wheeler (EDM)</td><td>14</td><td>3-11-14</td></tr>
<tr><td>9</td><td>Drake Batherson (VGK)</td><td>14</td><td>7-6-13</td></tr>
<tr><td>10</td><td>Tyler Bertuzzi (EDM)</td><td>14</td><td>5-8-13</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Defenseman</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PTS</th></tr></thead>
<tr><td>1</td><td>Oscar Klefbom (NSH)</td><td>14</td><td>2-11-13</td></tr>
<tr><td>2</td><td>Victor Hedman (NYI)</td><td>13</td><td>0-13-13</td></tr>
<tr><td>3</td><td>Nikita Zaitsev (VAN)</td><td>14</td><td>3-9-12</td></tr>
<tr><td>4</td><td>Thomas Chabot (ARI)</td><td>14</td><td>3-9-12</td></tr>
<tr><td>5</td><td>Jeff Petry (EDM)</td><td>14</td><td>2-10-12</td></tr>
<tr><td>6</td><td>Ivan Provorov (MTL)</td><td>14</td><td>3-8-11</td></tr>
<tr><td>7</td><td>Erik Karlsson (FLA)</td><td>14</td><td>3-8-11</td></tr>
<tr><td>8</td><td>Aaron Ekblad (MTL)</td><td>14</td><td>2-9-11</td></tr>
<tr><td>9</td><td>Marc-Edouard Vlasic (SEA)</td><td>14</td><td>1-10-11</td></tr>
<tr><td>10</td><td>Esa Lindell (EDM)</td><td>14</td><td>4-6-10</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Points per 20 Minutes</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>P/20</th></tr></thead>
<tr><td>1</td><td>Mikael Granlund (EDM)</td><td>14</td><td>1.55</td></tr>
<tr><td>2</td><td>Chris Terry (BUF)</td><td>7</td><td>1.40</td></tr>
<tr><td>3</td><td>Matt Moulson (NYI)</td><td>2</td><td>1.39</td></tr>
<tr><td>4</td><td>Anze Kopitar (BUF)</td><td>7</td><td>1.34</td></tr>
<tr><td>5</td><td>Alexander Radulov (NYI)</td><td>14</td><td>1.30</td></tr>
<tr><td>6</td><td>Kasperi Kapanen (WPG)</td><td>14</td><td>1.26</td></tr>
<tr><td>7</td><td>Sam Reinhart (NSH)</td><td>14</td><td>1.25</td></tr>
<tr><td>8</td><td>Alex DeBrincat (MTL)</td><td>8</td><td>1.22</td></tr>
<tr><td>9</td><td>Elias Pettersson (CLB)</td><td>14</td><td>1.19</td></tr>
<tr><td>10</td><td>Tomas Nosek (CLB)</td><td>11</td><td>1.18</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Face-Off %</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>FO %</th></tr></thead>
<tr><td>1</td><td>Nolan Stevens (PHL)</td><td>1</td><td>80.00%</td></tr>
<tr><td>2</td><td>Gemel Smith (NJD)</td><td>10</td><td>68.18%</td></tr>
<tr><td>3</td><td>Shane Pinto (EDM)</td><td>1</td><td>66.67%</td></tr>
<tr><td>4</td><td>Patrice Bergeron (DAL)</td><td>14</td><td>65.97%</td></tr>
<tr><td>5</td><td>Gabriel Landeskog (CAR)</td><td>13</td><td>61.07%</td></tr>
<tr><td>6</td><td>Brandon Sutter (NJD)</td><td>14</td><td>61.00%</td></tr>
<tr><td>7</td><td>Pierre-Edouard Bellemare (STL)</td><td>14</td><td>60.90%</td></tr>
<tr><td>8</td><td>Roope Hintz (WPG)</td><td>14</td><td>60.83%</td></tr>
<tr><td>9</td><td>Tyler Seguin (FLA)</td><td>14</td><td>60.75%</td></tr>
<tr><td>10</td><td>Evgeni Malkin (CHI)</td><td>14</td><td>60.70%</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Plus/Minus</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>+/-</th></tr></thead>
<tr><td>1</td><td>Aaron Ekblad (MTL)</td><td>14</td><td>13</td></tr>
<tr><td>2</td><td>Nate Schmidt (BOS)</td><td>14</td><td>12</td></tr>
<tr><td>3</td><td>Mikael Granlund (EDM)</td><td>14</td><td>11</td></tr>
<tr><td>4</td><td>Blake Wheeler (EDM)</td><td>14</td><td>10</td></tr>
<tr><td>5</td><td>Scott Mayfield (MTL)</td><td>14</td><td>10</td></tr>
<tr><td>6</td><td>Vincent Trocheck (EDM)</td><td>14</td><td>10</td></tr>
<tr><td>7</td><td>Victor Hedman (NYI)</td><td>13</td><td>9</td></tr>
<tr><td>8</td><td>Cale Makar (NYI)</td><td>14</td><td>9</td></tr>
<tr><td>9</td><td>Ryan Nugent-Hopkins (EDM)</td><td>14</td><td>9</td></tr>
<tr><td>10</td><td>Sean Couturier (BOS)</td><td>14</td><td>9</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Penalty Minutes</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PIM</th></tr></thead>
<tr><td>1</td><td>Justin Faulk (CHI)</td><td>14</td><td>37</td></tr>
<tr><td>2</td><td>Robert Bortuzzo (PIT)</td><td>14</td><td>26</td></tr>
<tr><td>3</td><td>Jamie Benn (VGK)</td><td>14</td><td>25</td></tr>
<tr><td>4</td><td>Brady Skjei (CGY)</td><td>11</td><td>23</td></tr>
<tr><td>5</td><td>K'Andre Miller (VGK)</td><td>13</td><td>23</td></tr>
<tr><td>6</td><td>Cody Ceci (ARI)</td><td>14</td><td>23</td></tr>
<tr><td>7</td><td>Joel Edmundson (SJS)</td><td>14</td><td>23</td></tr>
<tr><td>8</td><td>Richard Panik (COL)</td><td>13</td><td>22</td></tr>
<tr><td>9</td><td>Jake Muzzin (ANH)</td><td>14</td><td>22</td></tr>
<tr><td>10</td><td>Darnell Nurse (NJD)</td><td>14</td><td>22</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Shots Blocked</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>SB</th></tr></thead>
<tr><td>1</td><td>Alex Goligoski (NSH)</td><td>14</td><td>36</td></tr>
<tr><td>2</td><td>Samuel Girard (STL)</td><td>14</td><td>30</td></tr>
<tr><td>3</td><td>Dmitry Kulikov (PIT)</td><td>14</td><td>30</td></tr>
<tr><td>4</td><td>Alec Martinez (ANH)</td><td>14</td><td>27</td></tr>
<tr><td>5</td><td>Jonas Brodin (PHL)</td><td>14</td><td>27</td></tr>
<tr><td>6</td><td>Adam Fox (MIN)</td><td>14</td><td>25</td></tr>
<tr><td>7</td><td>Mark Giordano (OTT)</td><td>14</td><td>25</td></tr>
<tr><td>8</td><td>Erik Johnson (CLB)</td><td>14</td><td>25</td></tr>
<tr><td>9</td><td>David Savard (TOR)</td><td>14</td><td>25</td></tr>
<tr><td>10</td><td>Ryan McDonagh (VGK)</td><td>14</td><td>24</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Rookies</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PTS</th></tr></thead>
<tr><td>1</td><td>Jack Hughes (CAR)</td><td>14</td><td>4-8-12</td></tr>
<tr><td>2</td><td>Joel Farabee (VAN)</td><td>14</td><td>6-5-11</td></tr>
<tr><td>3</td><td>Trevor Zegras (COL)</td><td>14</td><td>4-5-9</td></tr>
<tr><td>4</td><td>Tim Stutzle (MIN)</td><td>14</td><td>1-8-9</td></tr>
<tr><td>5</td><td>Kirill Kaprizov (ARI)</td><td>14</td><td>4-1-5</td></tr>
<tr><td>6</td><td>Jason Robertson (CGY)</td><td>14</td><td>2-3-5</td></tr>
<tr><td>7</td><td>Nick Suzuki (ANH)</td><td>13</td><td>2-2-4</td></tr>
<tr><td>8</td><td>Adam Boqvist (STL)</td><td>14</td><td>2-2-4</td></tr>
<tr><td>9</td><td>Ville Heinola (NSH)</td><td>14</td><td>2-2-4</td></tr>
<tr><td>10</td><td>K'Andre Miller (VGK)</td><td>13</td><td>1-3-4</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Hits</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>HIT</th></tr></thead>
<tr><td>1</td><td>Brenden Dillon (SEA)</td><td>14</td><td>64</td></tr>
<tr><td>2</td><td>Robert Bortuzzo (PIT)</td><td>14</td><td>60</td></tr>
<tr><td>3</td><td>Dylan McIlrath (OTT)</td><td>14</td><td>57</td></tr>
<tr><td>4</td><td>Brady Tkachuk (PIT)</td><td>14</td><td>54</td></tr>
<tr><td>5</td><td>Tom Wilson (CGY)</td><td>14</td><td>53</td></tr>
<tr><td>6</td><td>Zdeno Chara (CGY)</td><td>14</td><td>46</td></tr>
<tr><td>7</td><td>Sam Carrick (MIN)</td><td>14</td><td>44</td></tr>
<tr><td>8</td><td>Dmitry Kulikov (PIT)</td><td>14</td><td>43</td></tr>
<tr><td>9</td><td>Jake Muzzin (ANH)</td><td>14</td><td>42</td></tr>
<tr><td>10</td><td>Matt Martin (COL)</td><td>14</td><td>41</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Power Play Goals</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PP</th></tr></thead>
<tr><td>1</td><td>Connor Brown (NYI)</td><td>13</td><td>3</td></tr>
<tr><td>2</td><td>Brady Tkachuk (PIT)</td><td>14</td><td>3</td></tr>
<tr><td>3</td><td>Bo Horvat (CGY)</td><td>14</td><td>3</td></tr>
<tr><td>4</td><td>Max Pacioretty (DAL)</td><td>14</td><td>3</td></tr>
<tr><td>5</td><td>Kevin Fiala (PHL)</td><td>14</td><td>3</td></tr>
<tr><td>6</td><td>Justin Faulk (CHI)</td><td>14</td><td>3</td></tr>
<tr><td>7</td><td>Chris Kreider (BUF)</td><td>14</td><td>3</td></tr>
<tr><td>8</td><td>Jamie Oleksiak (EDM)</td><td>10</td><td>2</td></tr>
<tr><td>9</td><td>Nico Hischier (VAN)</td><td>12</td><td>2</td></tr>
<tr><td>10</td><td>David Pastrnak (BUF)</td><td>13</td><td>2</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Short Handed Goals</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>SH</th></tr></thead>
<tr><td>1</td><td>Jani Hakanpaa (WSH)</td><td>5</td><td>1</td></tr>
<tr><td>2</td><td>Elias Pettersson (CLB)</td><td>14</td><td>1</td></tr>
<tr><td>3</td><td>Marcus Johansson (COL)</td><td>14</td><td>1</td></tr>
<tr><td>4</td><td>Zach Hyman (ANH)</td><td>14</td><td>1</td></tr>
<tr><td>5</td><td>Valeri Nichushkin (SEA)</td><td>14</td><td>1</td></tr>
<tr><td>6</td><td>Steven Stamkos (NYI)</td><td>14</td><td>1</td></tr>
<tr><td>7</td><td>Charlie McAvoy (ARI)</td><td>14</td><td>1</td></tr>
<tr><td>8</td><td>Lawson Crouse (BOS)</td><td>14</td><td>1</td></tr>
<tr><td>9</td><td>Joel Eriksson Ek (PHL)</td><td>14</td><td>1</td></tr>
<tr><td>10</td><td>Jay Beagle (BOS)</td><td>14</td><td>1</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Game Winning Goals</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>GW</th></tr></thead>
<tr><td>1</td><td>Mark Stone (CHI)</td><td>14</td><td>3</td></tr>
<tr><td>2</td><td>Calle Jarnkrok (NYI)</td><td>14</td><td>3</td></tr>
<tr><td>3</td><td>Sidney Crosby (BUF)</td><td>10</td><td>2</td></tr>
<tr><td>4</td><td>Mitch Marner (LAK)</td><td>11</td><td>2</td></tr>
<tr><td>5</td><td>Alexander Wennberg (SEA)</td><td>12</td><td>2</td></tr>
<tr><td>6</td><td>Nico Hischier (VAN)</td><td>12</td><td>2</td></tr>
<tr><td>7</td><td>Dominik Kubalik (NSH)</td><td>13</td><td>2</td></tr>
<tr><td>8</td><td>Lars Eller (EDM)</td><td>13</td><td>2</td></tr>
<tr><td>9</td><td>William Karlsson (NJD)</td><td>13</td><td>2</td></tr>
<tr><td>10</td><td>Connor Brown (NYI)</td><td>13</td><td>2</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Game Tying Goals</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>GT</th></tr></thead>
<tr><td>1</td><td>Connor Brown (NYI)</td><td>13</td><td>2</td></tr>
<tr><td>2</td><td>Brady Tkachuk (PIT)</td><td>14</td><td>2</td></tr>
<tr><td>3</td><td>Mathew Barzal (NYI)</td><td>14</td><td>2</td></tr>
<tr><td>4</td><td>Bryan Rust (PHL)</td><td>14</td><td>2</td></tr>
<tr><td>5</td><td>Jeff Skinner (WPG)</td><td>14</td><td>2</td></tr>
<tr><td>6</td><td>Kevin Hayes (ARI)</td><td>14</td><td>2</td></tr>
<tr><td>7</td><td>Dougie Hamilton (VAN)</td><td>14</td><td>2</td></tr>
<tr><td>8</td><td>Tyler Bozak (VGK)</td><td>3</td><td>1</td></tr>
<tr><td>9</td><td>Austin Wagner (DET)</td><td>3</td><td>1</td></tr>
<tr><td>10</td><td>Zach Aston-Reese (BUF)</td><td>5</td><td>1</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Empty Net Goals</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>ENG</th></tr></thead>
<tr><td>1</td><td>Logan Couture (NSH)</td><td>9</td><td>1</td></tr>
<tr><td>2</td><td>Connor Brown (NYI)</td><td>13</td><td>1</td></tr>
<tr><td>3</td><td>Joonas Donskoi (WPG)</td><td>14</td><td>1</td></tr>
<tr><td>4</td><td>Andrew Copp (CLB)</td><td>14</td><td>1</td></tr>
<tr><td>5</td><td>Sebastian Aho (CHI)</td><td>14</td><td>1</td></tr>
<tr><td>6</td><td>Nikita Zaitsev (VAN)</td><td>14</td><td>1</td></tr>
<tr><td>7</td><td>Drake Batherson (VGK)</td><td>14</td><td>1</td></tr>
<tr><td>8</td><td>Joel Eriksson Ek (PHL)</td><td>14</td><td>1</td></tr>
<tr><td>9</td><td>Kyle Palmieri (CLB)</td><td>14</td><td>1</td></tr>
<tr><td>10</td><td>Sam Carrick (MIN)</td><td>14</td><td>1</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Minutes Played</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>MP</th></tr></thead>
<tr><td>1</td><td>Oscar Klefbom (NSH)</td><td>14</td><td>361</td></tr>
<tr><td>2</td><td>Drew Doughty (WSH)</td><td>14</td><td>359</td></tr>
<tr><td>3</td><td>Darnell Nurse (NJD)</td><td>14</td><td>359</td></tr>
<tr><td>4</td><td>Alex Goligoski (NSH)</td><td>14</td><td>357</td></tr>
<tr><td>5</td><td>Roman Josi (NYR)</td><td>14</td><td>350</td></tr>
<tr><td>6</td><td>Thomas Chabot (ARI)</td><td>14</td><td>347</td></tr>
<tr><td>7</td><td>Seth Jones (LAK)</td><td>14</td><td>346</td></tr>
<tr><td>8</td><td>Samuel Girard (STL)</td><td>14</td><td>345</td></tr>
<tr><td>9</td><td>Esa Lindell (EDM)</td><td>14</td><td>343</td></tr>
<tr><td>10</td><td>Erik Karlsson (FLA)</td><td>14</td><td>342</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Hat Tricks</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>HT</th></tr></thead>
<tr><td>1</td><td>Dustin Brown (PIT)</td><td>14</td><td>1</td></tr>
<tr><td>2</td><td>Kevin Fiala (PHL)</td><td>14</td><td>1</td></tr>
<tr><td>3</td><td>Sam Reinhart (NSH)</td><td>14</td><td>1</td></tr>
<tr><td>4</td><td>Viktor Arvidsson (PHL)</td><td>14</td><td>1</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Goal Scoring Streak</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>GS</th></tr></thead>
<tr><td>1</td><td>Brady Tkachuk (PIT)</td><td>14</td><td>3</td></tr>
<tr><td>2</td><td>Joel Farabee (VAN)</td><td>14</td><td>3</td></tr>
<tr><td>3</td><td>Kyle Connor (VAN)</td><td>13</td><td>2</td></tr>
<tr><td>4</td><td>Max Domi (FLA)</td><td>14</td><td>2</td></tr>
<tr><td>5</td><td>Patrice Bergeron (DAL)</td><td>14</td><td>2</td></tr>
<tr><td>6</td><td>Christian Dvorak (TOR)</td><td>14</td><td>2</td></tr>
<tr><td>7</td><td>Alex Iafallo (WSH)</td><td>14</td><td>2</td></tr>
<tr><td>8</td><td>Samuel Girard (STL)</td><td>14</td><td>2</td></tr>
<tr><td>9</td><td>Oskar Lindblom (TBL)</td><td>14</td><td>2</td></tr>
<tr><td>10</td><td>Jason Robertson (CGY)</td><td>14</td><td>2</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Point Scoring Streak</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PS</th></tr></thead>
<tr><td>1</td><td>Marcus Johansson (COL)</td><td>14</td><td>5</td></tr>
<tr><td>2</td><td>Elias Lindholm (LAK)</td><td>14</td><td>5</td></tr>
<tr><td>3</td><td>Brady Tkachuk (PIT)</td><td>14</td><td>4</td></tr>
<tr><td>4</td><td>Alexander Radulov (NYI)</td><td>14</td><td>4</td></tr>
<tr><td>5</td><td>Joel Farabee (VAN)</td><td>14</td><td>4</td></tr>
<tr><td>6</td><td>Patrick Kane (DAL)</td><td>14</td><td>4</td></tr>
<tr><td>7</td><td>Evgeni Malkin (CHI)</td><td>14</td><td>4</td></tr>
<tr><td>8</td><td>Brenden Dillon (SEA)</td><td>14</td><td>4</td></tr>
<tr><td>9</td><td>Chris Kreider (BUF)</td><td>14</td><td>4</td></tr>
<tr><td>10</td><td>Chandler Stephenson (WSH)</td><td>14</td><td>4</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Hits Taken</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>HTT</th></tr></thead>
<tr><td>1</td><td>Aleksander Barkov (SJS)</td><td>14</td><td>44</td></tr>
<tr><td>2</td><td>Radek Faksa (TOR)</td><td>14</td><td>41</td></tr>
<tr><td>3</td><td>Nick Foligno (PIT)</td><td>12</td><td>40</td></tr>
<tr><td>4</td><td>Ryan O'Reilly (NYI)</td><td>13</td><td>37</td></tr>
<tr><td>5</td><td>Mikael Backlund (STL)</td><td>14</td><td>37</td></tr>
<tr><td>6</td><td>Dylan Larkin (CGY)</td><td>14</td><td>36</td></tr>
<tr><td>7</td><td>Evgeny Kuznetsov (SJS)</td><td>14</td><td>36</td></tr>
<tr><td>8</td><td>Alexander Wennberg (SEA)</td><td>12</td><td>35</td></tr>
<tr><td>9</td><td>Jack Eichel (WSH)</td><td>14</td><td>35</td></tr>
<tr><td>10</td><td>Trevor Zegras (COL)</td><td>14</td><td>35</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Penalty Shots</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PSG </th></tr></thead>
<tr><td>1</td><td>Viktor Arvidsson (PHL)</td><td>14</td><td>2</td></tr>
<tr><td>2</td><td>Boris Katchouk (VAN)</td><td>1</td><td>1</td></tr>
<tr><td>3</td><td>Tyler Bozak (VGK)</td><td>3</td><td>1</td></tr>
<tr><td>4</td><td>Nicklas Backstrom (VGK)</td><td>9</td><td>1</td></tr>
<tr><td>5</td><td>Brian Pinho (VAN)</td><td>11</td><td>1</td></tr>
<tr><td>6</td><td>Kirby Dach (NJD)</td><td>13</td><td>1</td></tr>
<tr><td>7</td><td>Leon Draisaitl (ARI)</td><td>13</td><td>1</td></tr>
<tr><td>8</td><td>Gabriel Landeskog (CAR)</td><td>13</td><td>1</td></tr>
<tr><td>9</td><td>Casey Mittelstadt (CAR)</td><td>14</td><td>1</td></tr>
<tr><td>10</td><td>Brett Pesce (COL)</td><td>14</td><td>1</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Give Away</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>GA  </th></tr></thead>
<tr><td colspan="4" class="STHSCenter">No Result</td></tr></table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Take Away</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>TA   </th></tr></thead>
<tr><td colspan="4" class="STHSCenter">No Result</td></tr></table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Total Fight</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>FT  </th></tr></thead>
<tr><td>1</td><td>Richard Panik (COL)</td><td>13</td><td>2</td></tr>
<tr><td>2</td><td>Jake Muzzin (ANH)</td><td>14</td><td>2</td></tr>
<tr><td>3</td><td>Austin Watson (NYI)</td><td>14</td><td>2</td></tr>
<tr><td>4</td><td>Boone Jenner (LAK)</td><td>14</td><td>2</td></tr>
<tr><td>5</td><td>Cedric Paquette (ARI)</td><td>1</td><td>1</td></tr>
<tr><td>6</td><td>C.J. Suess (VAN)</td><td>3</td><td>1</td></tr>
<tr><td>7</td><td>Alexander True (VAN)</td><td>4</td><td>1</td></tr>
<tr><td>8</td><td>Emil Bemstrom (FLA)</td><td>6</td><td>1</td></tr>
<tr><td>9</td><td>Pavel Buchnevich (OTT)</td><td>6</td><td>1</td></tr>
<tr><td>10</td><td>Nic Petan (SJS)</td><td>7</td><td>1</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Fight Won</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>FW   </th></tr></thead>
<tr><td>1</td><td>Cedric Paquette (ARI)</td><td>1</td><td>1</td></tr>
<tr><td>2</td><td>C.J. Suess (VAN)</td><td>3</td><td>1</td></tr>
<tr><td>3</td><td>Alexander True (VAN)</td><td>4</td><td>1</td></tr>
<tr><td>4</td><td>Devin Shore (OTT)</td><td>12</td><td>1</td></tr>
<tr><td>5</td><td>K'Andre Miller (VGK)</td><td>13</td><td>1</td></tr>
<tr><td>6</td><td>Alex Ovechkin (LAK)</td><td>14</td><td>1</td></tr>
<tr><td>7</td><td>Justin Bailey (PHL)</td><td>14</td><td>1</td></tr>
<tr><td>8</td><td>Josh Anderson (LAK)</td><td>14</td><td>1</td></tr>
<tr><td>9</td><td>Leo Komarov (WPG)</td><td>14</td><td>1</td></tr>
<tr><td>10</td><td>Ben Chiarot (BOS)</td><td>14</td><td>1</td></tr>
</table></td></tr>
<tr><td colspan="3"><h2 class="STHSProIndividualLeader_Goalies">Goalies</h2></td></tr><tr>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Save Percentage</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><th>GP</th><th>SAVE %</th></tr></thead>
<tr><td>1</td><td>Casey DeSmith (CGY)</td><td>2</td><td>1.000</td></tr>
<tr><td>2</td><td>Mike Smith (DET)</td><td>1</td><td>0.967</td></tr>
<tr><td>3</td><td>Kaapo Kahkonen (ARI)</td><td>3</td><td>0.966</td></tr>
<tr><td>4</td><td>Antti Raanta (STL)</td><td>2</td><td>0.963</td></tr>
<tr><td>5</td><td>Robin Lehner (NJD)</td><td>9</td><td>0.948</td></tr>
<tr><td>6</td><td>Alex Nedeljkovic (MTL)</td><td>6</td><td>0.942</td></tr>
<tr><td>7</td><td>Aaron Dell (COL)</td><td>2</td><td>0.941</td></tr>
<tr><td>8</td><td>Linus Ullmark (BOS)</td><td>8</td><td>0.932</td></tr>
<tr><td>9</td><td>Adin Hill (VGK)</td><td>2</td><td>0.932</td></tr>
<tr><td>10</td><td>Connor Hellebuyck (TBL)</td><td>12</td><td>0.931</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Goals Against Average</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><th>GP</th><th>GAA</th></tr></thead>
<tr><td>1</td><td>Casey DeSmith (CGY)</td><td>2</td><td>0.00</td></tr>
<tr><td>2</td><td>Mike Smith (DET)</td><td>1</td><td>0.92</td></tr>
<tr><td>3</td><td>Kaapo Kahkonen (ARI)</td><td>3</td><td>1.00</td></tr>
<tr><td>4</td><td>Antti Raanta (STL)</td><td>2</td><td>1.22</td></tr>
<tr><td>5</td><td>Alex Nedeljkovic (MTL)</td><td>6</td><td>1.33</td></tr>
<tr><td>6</td><td>Jonathan Quick (DAL)</td><td>5</td><td>1.38</td></tr>
<tr><td>7</td><td>Robin Lehner (NJD)</td><td>9</td><td>1.39</td></tr>
<tr><td>8</td><td>Adin Hill (VGK)</td><td>2</td><td>1.50</td></tr>
<tr><td>9</td><td>Martin Jones (CHI)</td><td>3</td><td>1.67</td></tr>
<tr><td>10</td><td>Linus Ullmark (BOS)</td><td>8</td><td>1.71</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Minutes Played</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><th>GP</th><th>MP</th></tr></thead>
<tr><td>1</td><td>Thomas Greiss (BUF)</td><td>14</td><td>845</td></tr>
<tr><td>2</td><td>Jaroslav Halak (NYR)</td><td>14</td><td>819</td></tr>
<tr><td>3</td><td>Anton Khudobin (CAR)</td><td>14</td><td>816</td></tr>
<tr><td>4</td><td>Semyon Varlamov (EDM)</td><td>13</td><td>778</td></tr>
<tr><td>5</td><td>Ben Bishop (CGY)</td><td>13</td><td>766</td></tr>
<tr><td>6</td><td>Vitek Vanecek (STL)</td><td>14</td><td>752</td></tr>
<tr><td>7</td><td>Mackenzie Blackwood (VGK)</td><td>12</td><td>730</td></tr>
<tr><td>8</td><td>Philipp Grubauer (NYI)</td><td>12</td><td>726</td></tr>
<tr><td>9</td><td>Connor Hellebuyck (TBL)</td><td>12</td><td>721</td></tr>
<tr><td>10</td><td>Tuukka Rask (ARI)</td><td>11</td><td>671</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Shots Faced</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><th>GP</th><th>SHT</th></tr></thead>
<tr><td>1</td><td>Mackenzie Blackwood (VGK)</td><td>12</td><td>378</td></tr>
<tr><td>2</td><td>Vitek Vanecek (STL)</td><td>14</td><td>378</td></tr>
<tr><td>3</td><td>Connor Hellebuyck (TBL)</td><td>12</td><td>350</td></tr>
<tr><td>4</td><td>Jaroslav Halak (NYR)</td><td>14</td><td>350</td></tr>
<tr><td>5</td><td>Thomas Greiss (BUF)</td><td>14</td><td>340</td></tr>
<tr><td>6</td><td>Anton Khudobin (CAR)</td><td>14</td><td>335</td></tr>
<tr><td>7</td><td>Philipp Grubauer (NYI)</td><td>12</td><td>333</td></tr>
<tr><td>8</td><td>Laurent Brossoit (SJS)</td><td>11</td><td>319</td></tr>
<tr><td>9</td><td>Ben Bishop (CGY)</td><td>13</td><td>306</td></tr>
<tr><td>10</td><td>Semyon Varlamov (EDM)</td><td>13</td><td>299</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Shutouts</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><th>GP</th><th>SO</th></tr></thead>
<tr><td>1</td><td>Jaroslav Halak (NYR)</td><td>14</td><td>3</td></tr>
<tr><td>2</td><td>Robin Lehner (NJD)</td><td>9</td><td>2</td></tr>
<tr><td>3</td><td>Igor Shesterkin (CHI)</td><td>11</td><td>2</td></tr>
<tr><td>4</td><td>Connor Hellebuyck (TBL)</td><td>12</td><td>2</td></tr>
<tr><td>5</td><td>Semyon Varlamov (EDM)</td><td>13</td><td>2</td></tr>
<tr><td>6</td><td>Ben Bishop (CGY)</td><td>13</td><td>2</td></tr>
<tr><td>7</td><td>Casey DeSmith (CGY)</td><td>2</td><td>1</td></tr>
<tr><td>8</td><td>Adin Hill (VGK)</td><td>2</td><td>1</td></tr>
<tr><td>9</td><td>Kaapo Kahkonen (ARI)</td><td>3</td><td>1</td></tr>
<tr><td>10</td><td>Martin Jones (CHI)</td><td>3</td><td>1</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Wins</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><th>GP</th><th>W</th></tr></thead>
<tr><td>1</td><td>Philipp Grubauer (NYI)</td><td>12</td><td>11</td></tr>
<tr><td>2</td><td>Thomas Greiss (BUF)</td><td>14</td><td>11</td></tr>
<tr><td>3</td><td>Semyon Varlamov (EDM)</td><td>13</td><td>10</td></tr>
<tr><td>4</td><td>Igor Shesterkin (CHI)</td><td>11</td><td>9</td></tr>
<tr><td>5</td><td>Mackenzie Blackwood (VGK)</td><td>12</td><td>8</td></tr>
<tr><td>6</td><td>Connor Hellebuyck (TBL)</td><td>12</td><td>7</td></tr>
<tr><td>7</td><td>Mikko Koskinen (PHL)</td><td>9</td><td>6</td></tr>
<tr><td>8</td><td>Anton Khudobin (CAR)</td><td>14</td><td>6</td></tr>
<tr><td>9</td><td>Jaroslav Halak (NYR)</td><td>14</td><td>6</td></tr>
<tr><td>10</td><td>Alex Nedeljkovic (MTL)</td><td>6</td><td>5</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Penalty Shots Percentage</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><td>PSA</td><th>PS SHT %</th></tr></thead>
<tr><td>1</td><td>Mackenzie Blackwood (VGK)</td><td>6</td><td>1.000</td></tr>
<tr><td>2</td><td>Igor Shesterkin (CHI)</td><td>5</td><td>1.000</td></tr>
<tr><td>3</td><td>Mikko Koskinen (PHL)</td><td>5</td><td>1.000</td></tr>
<tr><td>4</td><td>Philipp Grubauer (NYI)</td><td>4</td><td>1.000</td></tr>
<tr><td>5</td><td>Ilya Sorokin (FLA)</td><td>3</td><td>1.000</td></tr>
<tr><td>6</td><td>Anton Khudobin (CAR)</td><td>9</td><td>0.889</td></tr>
<tr><td>7</td><td>Andrei Vasilevskiy (NSH)</td><td>7</td><td>0.857</td></tr>
<tr><td>8</td><td>Vitek Vanecek (STL)</td><td>7</td><td>0.857</td></tr>
<tr><td>9</td><td>Jaroslav Halak (NYR)</td><td>6</td><td>0.833</td></tr>
<tr><td>10</td><td>Kevin Lankinen (SEA)</td><td>6</td><td>0.833</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Losses</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><th>GP</th><th>L</th></tr></thead>
<tr><td>1</td><td>Ben Bishop (CGY)</td><td>13</td><td>8</td></tr>
<tr><td>2</td><td>Jake Allen (OTT)</td><td>8</td><td>7</td></tr>
<tr><td>3</td><td>Marcus Hogberg (DET)</td><td>10</td><td>7</td></tr>
<tr><td>4</td><td>Jaroslav Halak (NYR)</td><td>14</td><td>7</td></tr>
<tr><td>5</td><td>Anton Khudobin (CAR)</td><td>14</td><td>6</td></tr>
<tr><td>6</td><td>Cam Talbot (DAL)</td><td>9</td><td>5</td></tr>
<tr><td>7</td><td>Logan Thompson (PIT)</td><td>9</td><td>5</td></tr>
<tr><td>8</td><td>Tuukka Rask (ARI)</td><td>11</td><td>5</td></tr>
<tr><td>9</td><td>Vitek Vanecek (STL)</td><td>14</td><td>5</td></tr>
<tr><td>10</td><td>Jeremy Swayman (TOR)</td><td>6</td><td>4</td></tr>
</table></td></tr>
</table>
<?php include "Footer.php";?>
