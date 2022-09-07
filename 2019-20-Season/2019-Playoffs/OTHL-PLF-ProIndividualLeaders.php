<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<title>OTHL - Pro Individual Leaders</title>
<script src="OTHL-PLF.js"></script>
<meta name="author" content="Simon Tremblay, sths.simont.info" />
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="Decription" content="Tyler Bell - STHS - Version : 3.2.0.0 - OTHL-STHS.db - OTHL-STHSCareerStat.db"/>
<link href="STHSMain.css" rel="stylesheet" type="text/css" />
<link href="OTHL-PLF.css" rel="stylesheet" type="text/css" />
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
<b>Minimum Games Played: 7</b><br />
<script>$(function(){$("table").basictablesorter()});</script>
<table class="STHSTableFullW">
<tr><td colspan="3"><h2 class="STHSProIndividualLeader_Players">Players</h2></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Goals</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>G</th></tr></thead>
<tr><td>1</td><td>Sidney Crosby (BUF)</td><td>23</td><td>12</td></tr>
<tr><td>2</td><td>Reilly Smith (NSH)</td><td>27</td><td>11</td></tr>
<tr><td>3</td><td>Anze Kopitar (BUF)</td><td>23</td><td>10</td></tr>
<tr><td>4</td><td>Alex Killorn (NSH)</td><td>27</td><td>10</td></tr>
<tr><td>5</td><td>Andreas Athanasiou (NSH)</td><td>27</td><td>9</td></tr>
<tr><td>6</td><td>Taylor Hall (CGY)</td><td>12</td><td>8</td></tr>
<tr><td>7</td><td>Jeff Skinner (ARI)</td><td>20</td><td>8</td></tr>
<tr><td>8</td><td>Logan Couture (NSH)</td><td>23</td><td>8</td></tr>
<tr><td>9</td><td>Teuvo Teravainen (BUF)</td><td>23</td><td>8</td></tr>
<tr><td>10</td><td>Gabriel Landeskog (NYR)</td><td>11</td><td>7</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Assists</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>A</th></tr></thead>
<tr><td>1</td><td>Oscar Klefbom (NSH)</td><td>27</td><td>18</td></tr>
<tr><td>2</td><td>Sam Reinhart (NSH)</td><td>27</td><td>17</td></tr>
<tr><td>3</td><td>Chris Kreider (BUF)</td><td>23</td><td>16</td></tr>
<tr><td>4</td><td>Rasmus Ristolainen (BUF)</td><td>23</td><td>15</td></tr>
<tr><td>5</td><td>Alex Killorn (NSH)</td><td>27</td><td>15</td></tr>
<tr><td>6</td><td>Ryan O'Reilly (NYI)</td><td>18</td><td>14</td></tr>
<tr><td>7</td><td>Logan Couture (NSH)</td><td>23</td><td>14</td></tr>
<tr><td>8</td><td>Reilly Smith (NSH)</td><td>27</td><td>14</td></tr>
<tr><td>9</td><td>Teuvo Teravainen (BUF)</td><td>23</td><td>13</td></tr>
<tr><td>10</td><td>Adam Henrique (NSH)</td><td>27</td><td>13</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Shots</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>SHT</th></tr></thead>
<tr><td>1</td><td>Anze Kopitar (BUF)</td><td>23</td><td>122</td></tr>
<tr><td>2</td><td>Mika Zibanejad (ARI)</td><td>20</td><td>116</td></tr>
<tr><td>3</td><td>Sidney Crosby (BUF)</td><td>23</td><td>106</td></tr>
<tr><td>4</td><td>Alex Killorn (NSH)</td><td>27</td><td>105</td></tr>
<tr><td>5</td><td>Logan Couture (NSH)</td><td>23</td><td>92</td></tr>
<tr><td>6</td><td>Reilly Smith (NSH)</td><td>27</td><td>90</td></tr>
<tr><td>7</td><td>Leon Draisaitl (ARI)</td><td>20</td><td>87</td></tr>
<tr><td>8</td><td>Anders Lee (BUF)</td><td>23</td><td>82</td></tr>
<tr><td>9</td><td>Teuvo Teravainen (BUF)</td><td>23</td><td>81</td></tr>
<tr><td>10</td><td>Andreas Athanasiou (NSH)</td><td>27</td><td>80</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Shots %</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>SHT %</th></tr></thead>
<tr><td>1</td><td>Chris Tierney (NYR)</td><td>11</td><td>27.78%</td></tr>
<tr><td>2</td><td>Roope Hintz (WPG)</td><td>13</td><td>21.43%</td></tr>
<tr><td>3</td><td>Casey Cizikas (WPG)</td><td>13</td><td>20.69%</td></tr>
<tr><td>4</td><td>Taylor Hall (CGY)</td><td>12</td><td>20.00%</td></tr>
<tr><td>5</td><td>Adam Lowry (CGY)</td><td>13</td><td>20.00%</td></tr>
<tr><td>6</td><td>Mark Scheifele (MTL)</td><td>12</td><td>18.92%</td></tr>
<tr><td>7</td><td>Anthony Cirelli (EDM)</td><td>7</td><td>18.18%</td></tr>
<tr><td>8</td><td>Matthew Nieto (NYI)</td><td>18</td><td>18.18%</td></tr>
<tr><td>9</td><td>Nick Bjugstad (VAN)</td><td>7</td><td>16.67%</td></tr>
<tr><td>10</td><td>Kasperi Kapanen (WPG)</td><td>13</td><td>16.67%</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Centers</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PTS</th></tr></thead>
<tr><td>1</td><td>Sam Reinhart (NSH)</td><td>27</td><td>7-17-24</td></tr>
<tr><td>2</td><td>Sidney Crosby (BUF)</td><td>23</td><td>12-10-22</td></tr>
<tr><td>3</td><td>Logan Couture (NSH)</td><td>23</td><td>8-14-22</td></tr>
<tr><td>4</td><td>Anze Kopitar (BUF)</td><td>23</td><td>10-10-20</td></tr>
<tr><td>5</td><td>Andreas Athanasiou (NSH)</td><td>27</td><td>9-11-20</td></tr>
<tr><td>6</td><td>Adam Henrique (NSH)</td><td>27</td><td>7-13-20</td></tr>
<tr><td>7</td><td>Ryan O'Reilly (NYI)</td><td>18</td><td>5-14-19</td></tr>
<tr><td>8</td><td>Mikael Backlund (BUF)</td><td>23</td><td>7-11-18</td></tr>
<tr><td>9</td><td>Jordan Staal (NSH)</td><td>24</td><td>7-11-18</td></tr>
<tr><td>10</td><td>Mika Zibanejad (ARI)</td><td>20</td><td>5-12-17</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Left Wings</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PTS</th></tr></thead>
<tr><td>1</td><td>Reilly Smith (NSH)</td><td>27</td><td>11-14-25</td></tr>
<tr><td>2</td><td>Alex Killorn (NSH)</td><td>27</td><td>10-15-25</td></tr>
<tr><td>3</td><td>Chris Kreider (BUF)</td><td>23</td><td>6-16-22</td></tr>
<tr><td>4</td><td>Teuvo Teravainen (BUF)</td><td>23</td><td>8-13-21</td></tr>
<tr><td>5</td><td>Andreas Athanasiou (NSH)</td><td>27</td><td>9-11-20</td></tr>
<tr><td>6</td><td>Adam Henrique (NSH)</td><td>27</td><td>7-13-20</td></tr>
<tr><td>7</td><td>Anders Lee (BUF)</td><td>23</td><td>7-9-16</td></tr>
<tr><td>8</td><td>Leon Draisaitl (ARI)</td><td>20</td><td>6-10-16</td></tr>
<tr><td>9</td><td>Gabriel Landeskog (NYR)</td><td>11</td><td>7-7-14</td></tr>
<tr><td>10</td><td>Taylor Hall (CGY)</td><td>12</td><td>8-5-13</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Right Wings</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PTS</th></tr></thead>
<tr><td>1</td><td>Reilly Smith (NSH)</td><td>27</td><td>11-14-25</td></tr>
<tr><td>2</td><td>Alex Killorn (NSH)</td><td>27</td><td>10-15-25</td></tr>
<tr><td>3</td><td>Sam Reinhart (NSH)</td><td>27</td><td>7-17-24</td></tr>
<tr><td>4</td><td>Teuvo Teravainen (BUF)</td><td>23</td><td>8-13-21</td></tr>
<tr><td>5</td><td>Andreas Athanasiou (NSH)</td><td>27</td><td>9-11-20</td></tr>
<tr><td>6</td><td>Steven Stamkos (NYI)</td><td>18</td><td>6-10-16</td></tr>
<tr><td>7</td><td>Leon Draisaitl (ARI)</td><td>20</td><td>6-10-16</td></tr>
<tr><td>8</td><td>J.T. Compher (BUF)</td><td>23</td><td>7-7-14</td></tr>
<tr><td>9</td><td>Matthew Tkachuk (WPG)</td><td>13</td><td>4-9-13</td></tr>
<tr><td>10</td><td>Jakub Voracek (NYI)</td><td>18</td><td>2-11-13</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Defenseman</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PTS</th></tr></thead>
<tr><td>1</td><td>Oscar Klefbom (NSH)</td><td>27</td><td>4-18-22</td></tr>
<tr><td>2</td><td>Rasmus Ristolainen (BUF)</td><td>23</td><td>3-15-18</td></tr>
<tr><td>3</td><td>Jack Johnson (NSH)</td><td>27</td><td>5-8-13</td></tr>
<tr><td>4</td><td>Victor Hedman (NYI)</td><td>14</td><td>3-10-13</td></tr>
<tr><td>5</td><td>Erik Karlsson (CGY)</td><td>13</td><td>1-11-12</td></tr>
<tr><td>6</td><td>Jaccob Slavin (CGY)</td><td>13</td><td>2-9-11</td></tr>
<tr><td>7</td><td>Jonathon Merrill (CGY)</td><td>13</td><td>2-9-11</td></tr>
<tr><td>8</td><td>Matt Niskanen (BUF)</td><td>23</td><td>2-9-11</td></tr>
<tr><td>9</td><td>Oliver Ekman-Larsson (ARI)</td><td>16</td><td>1-10-11</td></tr>
<tr><td>10</td><td>Nick Holden (NSH)</td><td>27</td><td>4-6-10</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Points per 20 Minutes</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>P/20</th></tr></thead>
<tr><td>1</td><td>Nikolay Goldobin (NYI)</td><td>9</td><td>5.26</td></tr>
<tr><td>2</td><td>Nico Hischier (VAN)</td><td>7</td><td>1.52</td></tr>
<tr><td>3</td><td>Gabriel Landeskog (NYR)</td><td>11</td><td>1.19</td></tr>
<tr><td>4</td><td>Ryan Nugent-Hopkins (EDM)</td><td>7</td><td>1.19</td></tr>
<tr><td>5</td><td>Cal Clutterbuck (VAN)</td><td>7</td><td>1.15</td></tr>
<tr><td>6</td><td>Taylor Hall (CGY)</td><td>12</td><td>1.12</td></tr>
<tr><td>7</td><td>Eric Staal (BOS)</td><td>7</td><td>1.10</td></tr>
<tr><td>8</td><td>Mikael Granlund (EDM)</td><td>7</td><td>1.08</td></tr>
<tr><td>9</td><td>Jonathon Merrill (CGY)</td><td>13</td><td>1.04</td></tr>
<tr><td>10</td><td>Mark Barberio (NYI)</td><td>14</td><td>1.03</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Face-Off %</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>FO %</th></tr></thead>
<tr><td>1</td><td>Ryan Kesler (VAN)</td><td>7</td><td>70.59%</td></tr>
<tr><td>2</td><td>Eric Staal (BOS)</td><td>7</td><td>60.92%</td></tr>
<tr><td>3</td><td>Bryan Little (BOS)</td><td>7</td><td>59.18%</td></tr>
<tr><td>4</td><td>Ryan O'Reilly (NYI)</td><td>18</td><td>59.00%</td></tr>
<tr><td>5</td><td>Barclay Goodrow (WPG)</td><td>13</td><td>58.20%</td></tr>
<tr><td>6</td><td>Jonathan Toews (EDM)</td><td>7</td><td>58.04%</td></tr>
<tr><td>7</td><td>Jordan Staal (NSH)</td><td>24</td><td>57.51%</td></tr>
<tr><td>8</td><td>Colin White (NYR)</td><td>11</td><td>57.26%</td></tr>
<tr><td>9</td><td>Kyle Brodziak (NSH)</td><td>27</td><td>57.02%</td></tr>
<tr><td>10</td><td>Boone Jenner (BOS)</td><td>7</td><td>56.80%</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Plus/Minus</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>+/-</th></tr></thead>
<tr><td>1</td><td>Dan Hamhuis (BUF)</td><td>23</td><td>15</td></tr>
<tr><td>2</td><td>Jack Johnson (NSH)</td><td>27</td><td>13</td></tr>
<tr><td>3</td><td>Oscar Klefbom (NSH)</td><td>27</td><td>13</td></tr>
<tr><td>4</td><td>Josh Manson (BUF)</td><td>20</td><td>12</td></tr>
<tr><td>5</td><td>Sidney Crosby (BUF)</td><td>23</td><td>12</td></tr>
<tr><td>6</td><td>Chris Kreider (BUF)</td><td>23</td><td>12</td></tr>
<tr><td>7</td><td>Teuvo Teravainen (BUF)</td><td>23</td><td>12</td></tr>
<tr><td>8</td><td>Ryan O'Reilly (NYI)</td><td>18</td><td>11</td></tr>
<tr><td>9</td><td>Mikael Backlund (BUF)</td><td>23</td><td>11</td></tr>
<tr><td>10</td><td>Victor Hedman (NYI)</td><td>14</td><td>8</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Penalty Minutes</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PIM</th></tr></thead>
<tr><td>1</td><td>Rasmus Ristolainen (BUF)</td><td>23</td><td>28</td></tr>
<tr><td>2</td><td>Josh Manson (BUF)</td><td>20</td><td>26</td></tr>
<tr><td>3</td><td>Chris Kreider (BUF)</td><td>23</td><td>26</td></tr>
<tr><td>4</td><td>Jack Johnson (NSH)</td><td>27</td><td>26</td></tr>
<tr><td>5</td><td>Aaron Ekblad (MTL)</td><td>12</td><td>24</td></tr>
<tr><td>6</td><td>Radko Gudas (CGY)</td><td>13</td><td>24</td></tr>
<tr><td>7</td><td>Tom Wilson (CGY)</td><td>13</td><td>24</td></tr>
<tr><td>8</td><td>MacKenzie Weegar (VAN)</td><td>7</td><td>23</td></tr>
<tr><td>9</td><td>Pat Maroon (VAN)</td><td>7</td><td>22</td></tr>
<tr><td>10</td><td>Oliver Ekman-Larsson (ARI)</td><td>16</td><td>22</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Shots Blocked</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>SB</th></tr></thead>
<tr><td>1</td><td>Jack Johnson (NSH)</td><td>27</td><td>51</td></tr>
<tr><td>2</td><td>Matt Niskanen (BUF)</td><td>23</td><td>49</td></tr>
<tr><td>3</td><td>Rasmus Ristolainen (BUF)</td><td>23</td><td>45</td></tr>
<tr><td>4</td><td>Oscar Klefbom (NSH)</td><td>27</td><td>44</td></tr>
<tr><td>5</td><td>Zdeno Chara (BUF)</td><td>23</td><td>40</td></tr>
<tr><td>6</td><td>Brent Seabrook (BUF)</td><td>23</td><td>39</td></tr>
<tr><td>7</td><td>Deryk Engelland (NSH)</td><td>27</td><td>39</td></tr>
<tr><td>8</td><td>Cody Ceci (ARI)</td><td>20</td><td>38</td></tr>
<tr><td>9</td><td>Jaccob Slavin (CGY)</td><td>13</td><td>34</td></tr>
<tr><td>10</td><td>Joe Hicketts (NYI)</td><td>16</td><td>33</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Rookies</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PTS</th></tr></thead>
<tr><td>1</td><td>Miro Heiskanen (WPG)</td><td>13</td><td>2-7-9</td></tr>
<tr><td>2</td><td>Gavin Bayreuther (VAN)</td><td>4</td><td>3-0-3</td></tr>
<tr><td>3</td><td>Roope Hintz (WPG)</td><td>13</td><td>3-0-3</td></tr>
<tr><td>4</td><td>Kyle Brodziak (NSH)</td><td>27</td><td>2-1-3</td></tr>
<tr><td>5</td><td>Ryan Donato (NYR)</td><td>11</td><td>2-0-2</td></tr>
<tr><td>6</td><td>Pat Maroon (VAN)</td><td>7</td><td>1-1-2</td></tr>
<tr><td>7</td><td>Colin White (NYR)</td><td>11</td><td>1-1-2</td></tr>
<tr><td>8</td><td>Erik Cernak (NSH)</td><td>11</td><td>0-2-2</td></tr>
<tr><td>9</td><td>Cooper Marody (FLA)</td><td>1</td><td>0-1-1</td></tr>
<tr><td>10</td><td>Henrik Borgstrom (MTL)</td><td>4</td><td>0-1-1</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Hits</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>HIT</th></tr></thead>
<tr><td>1</td><td>Jack Johnson (NSH)</td><td>27</td><td>87</td></tr>
<tr><td>2</td><td>Mika Zibanejad (ARI)</td><td>20</td><td>70</td></tr>
<tr><td>3</td><td>Chris Kreider (BUF)</td><td>23</td><td>64</td></tr>
<tr><td>4</td><td>Radko Gudas (CGY)</td><td>13</td><td>63</td></tr>
<tr><td>5</td><td>Rasmus Ristolainen (BUF)</td><td>23</td><td>63</td></tr>
<tr><td>6</td><td>Jordan Staal (NSH)</td><td>24</td><td>63</td></tr>
<tr><td>7</td><td>Kevan Miller (NSH)</td><td>26</td><td>55</td></tr>
<tr><td>8</td><td>Tom Wilson (CGY)</td><td>13</td><td>52</td></tr>
<tr><td>9</td><td>Shea Weber (NYR)</td><td>11</td><td>50</td></tr>
<tr><td>10</td><td>Anders Lee (BUF)</td><td>23</td><td>47</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Power Play Goals</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PP</th></tr></thead>
<tr><td>1</td><td>Taylor Hall (CGY)</td><td>12</td><td>4</td></tr>
<tr><td>2</td><td>Sidney Crosby (BUF)</td><td>23</td><td>4</td></tr>
<tr><td>3</td><td>Tomas Tatar (BOS)</td><td>7</td><td>3</td></tr>
<tr><td>4</td><td>Kasperi Kapanen (WPG)</td><td>13</td><td>3</td></tr>
<tr><td>5</td><td>Jeff Skinner (ARI)</td><td>20</td><td>3</td></tr>
<tr><td>6</td><td>Leon Draisaitl (ARI)</td><td>20</td><td>3</td></tr>
<tr><td>7</td><td>Anze Kopitar (BUF)</td><td>23</td><td>3</td></tr>
<tr><td>8</td><td>Mikael Backlund (BUF)</td><td>23</td><td>3</td></tr>
<tr><td>9</td><td>Alex Killorn (NSH)</td><td>27</td><td>3</td></tr>
<tr><td>10</td><td>Adam Henrique (NSH)</td><td>27</td><td>3</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Short Handed Goals</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>SH</th></tr></thead>
<tr><td>1</td><td>Ryan Donato (NYR)</td><td>11</td><td>1</td></tr>
<tr><td>2</td><td>Matthew Nieto (NYI)</td><td>18</td><td>1</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Game Winning Goals</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>GW</th></tr></thead>
<tr><td>1</td><td>Ryan O'Reilly (NYI)</td><td>18</td><td>4</td></tr>
<tr><td>2</td><td>Taylor Hall (CGY)</td><td>12</td><td>3</td></tr>
<tr><td>3</td><td>Casey Cizikas (WPG)</td><td>13</td><td>3</td></tr>
<tr><td>4</td><td>Jeff Skinner (ARI)</td><td>20</td><td>3</td></tr>
<tr><td>5</td><td>Logan Couture (NSH)</td><td>23</td><td>3</td></tr>
<tr><td>6</td><td>Reilly Smith (NSH)</td><td>27</td><td>3</td></tr>
<tr><td>7</td><td>Jack Eichel (WSH)</td><td>6</td><td>2</td></tr>
<tr><td>8</td><td>Eric Staal (BOS)</td><td>7</td><td>2</td></tr>
<tr><td>9</td><td>Ryan Nugent-Hopkins (EDM)</td><td>7</td><td>2</td></tr>
<tr><td>10</td><td>Mark Stone (NYR)</td><td>11</td><td>2</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Game Tying Goals</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>GT</th></tr></thead>
<tr><td>1</td><td>Joe Pavelski (NYI)</td><td>18</td><td>3</td></tr>
<tr><td>2</td><td>Anze Kopitar (BUF)</td><td>23</td><td>2</td></tr>
<tr><td>3</td><td>Alex Killorn (NSH)</td><td>27</td><td>2</td></tr>
<tr><td>4</td><td>Brian Boyle (CHI)</td><td>6</td><td>1</td></tr>
<tr><td>5</td><td>Oskar Lindblom (SJS)</td><td>6</td><td>1</td></tr>
<tr><td>6</td><td>Mikko Rantanen (VAN)</td><td>7</td><td>1</td></tr>
<tr><td>7</td><td>Auston Matthews (VAN)</td><td>7</td><td>1</td></tr>
<tr><td>8</td><td>Brad Marchand (BOS)</td><td>7</td><td>1</td></tr>
<tr><td>9</td><td>Gabriel Bourque (BOS)</td><td>7</td><td>1</td></tr>
<tr><td>10</td><td>Mikael Granlund (EDM)</td><td>7</td><td>1</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Empty Net Goals</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>ENG</th></tr></thead>
<tr><td>1</td><td>Esa Lindell (TBL)</td><td>6</td><td>1</td></tr>
<tr><td>2</td><td>Anthony Cirelli (EDM)</td><td>7</td><td>1</td></tr>
<tr><td>3</td><td>Mark Stone (NYR)</td><td>11</td><td>1</td></tr>
<tr><td>4</td><td>Ryan Ellis (NYI)</td><td>18</td><td>1</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Minutes Played</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>MP</th></tr></thead>
<tr><td>1</td><td>Oscar Klefbom (NSH)</td><td>27</td><td>705</td></tr>
<tr><td>2</td><td>Jack Johnson (NSH)</td><td>27</td><td>645</td></tr>
<tr><td>3</td><td>Deryk Engelland (NSH)</td><td>27</td><td>588</td></tr>
<tr><td>4</td><td>Rasmus Ristolainen (BUF)</td><td>23</td><td>583</td></tr>
<tr><td>5</td><td>Matt Niskanen (BUF)</td><td>23</td><td>541</td></tr>
<tr><td>6</td><td>Reilly Smith (NSH)</td><td>27</td><td>535</td></tr>
<tr><td>7</td><td>Anze Kopitar (BUF)</td><td>23</td><td>531</td></tr>
<tr><td>8</td><td>Nick Holden (NSH)</td><td>27</td><td>531</td></tr>
<tr><td>9</td><td>Sam Reinhart (NSH)</td><td>27</td><td>530</td></tr>
<tr><td>10</td><td>Cody Ceci (ARI)</td><td>20</td><td>523</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Hat Tricks</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>HT</th></tr></thead>
<tr><td>1</td><td>Steven Stamkos (NYI)</td><td>18</td><td>1</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Goal Scoring Streak</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>GS</th></tr></thead>
<tr><td>1</td><td>Aleksander Barkov (SJS)</td><td>6</td><td>2</td></tr>
<tr><td>2</td><td>Shea Weber (NYR)</td><td>11</td><td>2</td></tr>
<tr><td>3</td><td>Alexander Radulov (NYI)</td><td>18</td><td>2</td></tr>
<tr><td>4</td><td>Anze Kopitar (BUF)</td><td>23</td><td>2</td></tr>
<tr><td>5</td><td>Reilly Smith (NSH)</td><td>27</td><td>2</td></tr>
<tr><td>6</td><td>Brent Burns (FLA)</td><td>4</td><td>1</td></tr>
<tr><td>7</td><td>Gavin Bayreuther (VAN)</td><td>4</td><td>1</td></tr>
<tr><td>8</td><td>Joe Thornton (TBL)</td><td>6</td><td>1</td></tr>
<tr><td>9</td><td>Travis Konecny (SJS)</td><td>6</td><td>1</td></tr>
<tr><td>10</td><td>Evgeni Malkin (CHI)</td><td>6</td><td>1</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Point Scoring Streak</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PS</th></tr></thead>
<tr><td>1</td><td>Aleksander Barkov (SJS)</td><td>6</td><td>6</td></tr>
<tr><td>2</td><td>Mika Zibanejad (ARI)</td><td>20</td><td>6</td></tr>
<tr><td>3</td><td>Brandon Montour (EDM)</td><td>7</td><td>5</td></tr>
<tr><td>4</td><td>Nico Hischier (VAN)</td><td>7</td><td>4</td></tr>
<tr><td>5</td><td>Shea Weber (NYR)</td><td>11</td><td>4</td></tr>
<tr><td>6</td><td>Phillip Danault (CGY)</td><td>13</td><td>4</td></tr>
<tr><td>7</td><td>Oscar Klefbom (NSH)</td><td>27</td><td>4</td></tr>
<tr><td>8</td><td>Bo Horvat (CGY)</td><td>13</td><td>3</td></tr>
<tr><td>9</td><td>Alexander Radulov (NYI)</td><td>18</td><td>3</td></tr>
<tr><td>10</td><td>Sam Reinhart (NSH)</td><td>27</td><td>3</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Hits Taken</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>HTT</th></tr></thead>
<tr><td>1</td><td>Anze Kopitar (BUF)</td><td>23</td><td>74</td></tr>
<tr><td>2</td><td>Leon Draisaitl (ARI)</td><td>20</td><td>70</td></tr>
<tr><td>3</td><td>Mika Zibanejad (ARI)</td><td>20</td><td>69</td></tr>
<tr><td>4</td><td>Sidney Crosby (BUF)</td><td>23</td><td>64</td></tr>
<tr><td>5</td><td>Logan Couture (NSH)</td><td>23</td><td>62</td></tr>
<tr><td>6</td><td>Jordan Staal (NSH)</td><td>24</td><td>58</td></tr>
<tr><td>7</td><td>Phillip Danault (CGY)</td><td>13</td><td>56</td></tr>
<tr><td>8</td><td>Derek Stepan (WPG)</td><td>13</td><td>44</td></tr>
<tr><td>9</td><td>Ryan O'Reilly (NYI)</td><td>18</td><td>44</td></tr>
<tr><td>10</td><td>Oscar Klefbom (NSH)</td><td>27</td><td>44</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Penalty Shots</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PSG </th></tr></thead>
<tr><td colspan="4" class="STHSCenter">No Result</td></tr></table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Give Away</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>GA  </th></tr></thead>
<tr><td colspan="4" class="STHSCenter">No Result</td></tr></table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Take Away</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>TA   </th></tr></thead>
<tr><td colspan="4" class="STHSCenter">No Result</td></tr></table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Total Fight</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>FT  </th></tr></thead>
<tr><td>1</td><td>Pat Maroon (VAN)</td><td>7</td><td>2</td></tr>
<tr><td>2</td><td>Austin Watson (CGY)</td><td>13</td><td>2</td></tr>
<tr><td>3</td><td>Dylan Larkin (CGY)</td><td>3</td><td>1</td></tr>
<tr><td>4</td><td>Brian Boyle (CHI)</td><td>6</td><td>1</td></tr>
<tr><td>5</td><td>Matt Martin (TBL)</td><td>6</td><td>1</td></tr>
<tr><td>6</td><td>Zach Hyman (BOS)</td><td>7</td><td>1</td></tr>
<tr><td>7</td><td>MacKenzie Weegar (VAN)</td><td>7</td><td>1</td></tr>
<tr><td>8</td><td>Roman Polak (CGY)</td><td>10</td><td>1</td></tr>
<tr><td>9</td><td>Erik Cernak (NSH)</td><td>11</td><td>1</td></tr>
<tr><td>10</td><td>Nikita Zadorov (MTL)</td><td>12</td><td>1</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Fight Won</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>FW   </th></tr></thead>
<tr><td>1</td><td>Pat Maroon (VAN)</td><td>7</td><td>1</td></tr>
<tr><td>2</td><td>Nikita Zadorov (MTL)</td><td>12</td><td>1</td></tr>
<tr><td>3</td><td>Austin Watson (CGY)</td><td>13</td><td>1</td></tr>
<tr><td>4</td><td>Zdeno Chara (BUF)</td><td>23</td><td>1</td></tr>
<tr><td>5</td><td>Zemgus Girgensons (BUF)</td><td>23</td><td>1</td></tr>
</table></td></tr>
<tr><td colspan="3"><h2 class="STHSProIndividualLeader_Goalies">Goalies</h2></td></tr><tr>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Save Percentage</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><th>GP</th><th>SAVE %</th></tr></thead>
<tr><td>1</td><td>Thomas Greiss (BUF)</td><td>22</td><td>0.930</td></tr>
<tr><td>2</td><td>Pekka Rinne (CGY)</td><td>13</td><td>0.927</td></tr>
<tr><td>3</td><td>Marc-Andre Fleury (NYR)</td><td>9</td><td>0.923</td></tr>
<tr><td>4</td><td>Ben Bishop (MTL)</td><td>12</td><td>0.922</td></tr>
<tr><td>5</td><td>Jordan Binnington (NYI)</td><td>17</td><td>0.922</td></tr>
<tr><td>6</td><td>Tuukka Rask (ARI)</td><td>20</td><td>0.921</td></tr>
<tr><td>7</td><td>John Gibson (EDM)</td><td>7</td><td>0.919</td></tr>
<tr><td>8</td><td>Carey Price (NSH)</td><td>27</td><td>0.918</td></tr>
<tr><td>9</td><td>Matt Murray (WPG)</td><td>8</td><td>0.897</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Goals Against Average</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><th>GP</th><th>GAA</th></tr></thead>
<tr><td>1</td><td>Thomas Greiss (BUF)</td><td>22</td><td>2.12</td></tr>
<tr><td>2</td><td>Marc-Andre Fleury (NYR)</td><td>9</td><td>2.12</td></tr>
<tr><td>3</td><td>Pekka Rinne (CGY)</td><td>13</td><td>2.33</td></tr>
<tr><td>4</td><td>Tuukka Rask (ARI)</td><td>20</td><td>2.43</td></tr>
<tr><td>5</td><td>Jordan Binnington (NYI)</td><td>17</td><td>2.52</td></tr>
<tr><td>6</td><td>Ben Bishop (MTL)</td><td>12</td><td>2.53</td></tr>
<tr><td>7</td><td>Carey Price (NSH)</td><td>27</td><td>2.66</td></tr>
<tr><td>8</td><td>John Gibson (EDM)</td><td>7</td><td>2.74</td></tr>
<tr><td>9</td><td>Matt Murray (WPG)</td><td>8</td><td>3.43</td></tr>
<tr><td colspan="4" class="STHSCenter">No Result</td></tr></table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Minutes Played</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><th>GP</th><th>MP</th></tr></thead>
<tr><td>1</td><td>Carey Price (NSH)</td><td>27</td><td>1,645</td></tr>
<tr><td>2</td><td>Thomas Greiss (BUF)</td><td>22</td><td>1,390</td></tr>
<tr><td>3</td><td>Tuukka Rask (ARI)</td><td>20</td><td>1,308</td></tr>
<tr><td>4</td><td>Jordan Binnington (NYI)</td><td>17</td><td>1,049</td></tr>
<tr><td>5</td><td>Pekka Rinne (CGY)</td><td>13</td><td>773</td></tr>
<tr><td>6</td><td>Ben Bishop (MTL)</td><td>12</td><td>759</td></tr>
<tr><td>7</td><td>Marc-Andre Fleury (NYR)</td><td>9</td><td>565</td></tr>
<tr><td>8</td><td>John Gibson (EDM)</td><td>7</td><td>460</td></tr>
<tr><td>9</td><td>Matt Murray (WPG)</td><td>8</td><td>455</td></tr>
<tr><td>10</td><td>Henrik Lundqvist (VAN)</td><td>7</td><td>401</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Shots Faced</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><th>GP</th><th>SHT</th></tr></thead>
<tr><td>1</td><td>Carey Price (NSH)</td><td>27</td><td>894</td></tr>
<tr><td>2</td><td>Thomas Greiss (BUF)</td><td>22</td><td>704</td></tr>
<tr><td>3</td><td>Tuukka Rask (ARI)</td><td>20</td><td>672</td></tr>
<tr><td>4</td><td>Jordan Binnington (NYI)</td><td>17</td><td>562</td></tr>
<tr><td>5</td><td>Ben Bishop (MTL)</td><td>12</td><td>410</td></tr>
<tr><td>6</td><td>Pekka Rinne (CGY)</td><td>13</td><td>410</td></tr>
<tr><td>7</td><td>Marc-Andre Fleury (NYR)</td><td>9</td><td>260</td></tr>
<tr><td>8</td><td>John Gibson (EDM)</td><td>7</td><td>258</td></tr>
<tr><td>9</td><td>Matt Murray (WPG)</td><td>8</td><td>253</td></tr>
<tr><td>10</td><td>Henrik Lundqvist (VAN)</td><td>7</td><td>229</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Shutouts</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><th>GP</th><th>SO</th></tr></thead>
<tr><td>1</td><td>Thomas Greiss (BUF)</td><td>22</td><td>2</td></tr>
<tr><td>2</td><td>Connor Hellebuyck (TBL)</td><td>6</td><td>1</td></tr>
<tr><td>3</td><td>Marc-Andre Fleury (NYR)</td><td>9</td><td>1</td></tr>
<tr><td>4</td><td>Jordan Binnington (NYI)</td><td>17</td><td>1</td></tr>
<tr><td>5</td><td>Tuukka Rask (ARI)</td><td>20</td><td>1</td></tr>
<tr><td>6</td><td>Carey Price (NSH)</td><td>27</td><td>1</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Wins</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><th>GP</th><th>W</th></tr></thead>
<tr><td>1</td><td>Carey Price (NSH)</td><td>27</td><td>16</td></tr>
<tr><td>2</td><td>Thomas Greiss (BUF)</td><td>22</td><td>15</td></tr>
<tr><td>3</td><td>Tuukka Rask (ARI)</td><td>20</td><td>11</td></tr>
<tr><td>4</td><td>Jordan Binnington (NYI)</td><td>17</td><td>10</td></tr>
<tr><td>5</td><td>Pekka Rinne (CGY)</td><td>13</td><td>6</td></tr>
<tr><td>6</td><td>Marc-Andre Fleury (NYR)</td><td>9</td><td>5</td></tr>
<tr><td>7</td><td>Ben Bishop (MTL)</td><td>12</td><td>5</td></tr>
<tr><td>8</td><td>Matt Murray (WPG)</td><td>8</td><td>4</td></tr>
<tr><td>9</td><td>Juuse Saros (WPG)</td><td>6</td><td>3</td></tr>
<tr><td>10</td><td>Braden Holtby (BOS)</td><td>6</td><td>3</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Penalty Shots Percentage</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><td>PSA</td><th>PS SHT %</th></tr></thead>
<tr><td colspan="4" class="STHSCenter">No Result</td></tr></table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Losses</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><th>GP</th><th>L</th></tr></thead>
<tr><td>1</td><td>Carey Price (NSH)</td><td>27</td><td>9</td></tr>
<tr><td>2</td><td>Tuukka Rask (ARI)</td><td>20</td><td>7</td></tr>
<tr><td>3</td><td>Ben Bishop (MTL)</td><td>12</td><td>5</td></tr>
<tr><td>4</td><td>Jordan Binnington (NYI)</td><td>17</td><td>5</td></tr>
<tr><td>5</td><td>Thomas Greiss (BUF)</td><td>22</td><td>5</td></tr>
<tr><td>6</td><td>Matt Murray (WPG)</td><td>8</td><td>4</td></tr>
<tr><td>7</td><td>Pekka Rinne (CGY)</td><td>13</td><td>4</td></tr>
<tr><td>8</td><td>Laurent Brossoit (SJS)</td><td>5</td><td>3</td></tr>
<tr><td>9</td><td>Henrik Lundqvist (VAN)</td><td>7</td><td>3</td></tr>
<tr><td>10</td><td>John Gibson (EDM)</td><td>7</td><td>3</td></tr>
</table></td></tr>
</table>
<?php include "Footer.php";?>
