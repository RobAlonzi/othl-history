<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<title>OTHL - Pro Individual Leaders</title>
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
<b>Minimum Games Played: 4</b><br />
<script>$(function(){$("table").basictablesorter()});</script>
<table class="STHSTableFullW">
<tr><td colspan="3"><h2 class="STHSProIndividualLeader_Players">Players</h2></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Goals</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>G</th></tr></thead>
<tr><td>1</td><td>Jonathan Toews (WPG)</td><td>9</td><td>7</td></tr>
<tr><td>2</td><td>Ryan Nugent-Hopkins (EDM)</td><td>8</td><td>6</td></tr>
<tr><td>3</td><td>Travis Zajac (ANH)</td><td>8</td><td>6</td></tr>
<tr><td>4</td><td>Jeff Carter (MTL)</td><td>7</td><td>5</td></tr>
<tr><td>5</td><td>Filip Forsberg (SJS)</td><td>7</td><td>5</td></tr>
<tr><td>6</td><td>Blake Wheeler (EDM)</td><td>8</td><td>5</td></tr>
<tr><td>7</td><td>Viktor Arvidsson (CGY)</td><td>8</td><td>5</td></tr>
<tr><td>8</td><td>Jack Eichel (WSH)</td><td>9</td><td>5</td></tr>
<tr><td>9</td><td>Kasperi Kapanen (WPG)</td><td>9</td><td>5</td></tr>
<tr><td>10</td><td>Zach Parise (DAL)</td><td>9</td><td>5</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Assists</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>A</th></tr></thead>
<tr><td>1</td><td>Sami Vatanen (WPG)</td><td>9</td><td>9</td></tr>
<tr><td>2</td><td>Tyler Myers (VAN)</td><td>6</td><td>8</td></tr>
<tr><td>3</td><td>Tyler Ennis (STL)</td><td>7</td><td>8</td></tr>
<tr><td>4</td><td>Evgeny Kuznetsov (SJS)</td><td>7</td><td>8</td></tr>
<tr><td>5</td><td>Erik Karlsson (CGY)</td><td>8</td><td>8</td></tr>
<tr><td>6</td><td>Kevin Shattenkirk (WPG)</td><td>9</td><td>8</td></tr>
<tr><td>7</td><td>Taylor Hall (CGY)</td><td>8</td><td>7</td></tr>
<tr><td>8</td><td>Phillip Danault (CGY)</td><td>8</td><td>7</td></tr>
<tr><td>9</td><td>Mika Zibanejad (ARI)</td><td>6</td><td>6</td></tr>
<tr><td>10</td><td>Tyson Barrie (MIN)</td><td>7</td><td>6</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Shots</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>SHT</th></tr></thead>
<tr><td>1</td><td>Connor McDavid (DET)</td><td>8</td><td>43</td></tr>
<tr><td>2</td><td>Brayden Point (DET)</td><td>8</td><td>41</td></tr>
<tr><td>3</td><td>Aleksander Barkov (SJS)</td><td>7</td><td>40</td></tr>
<tr><td>4</td><td>Patrice Bergeron (DAL)</td><td>9</td><td>39</td></tr>
<tr><td>5</td><td>Jon Marchessault (DAL)</td><td>9</td><td>38</td></tr>
<tr><td>6</td><td>Jonathan Toews (WPG)</td><td>9</td><td>38</td></tr>
<tr><td>7</td><td>Matthew Tkachuk (WPG)</td><td>9</td><td>38</td></tr>
<tr><td>8</td><td>Leon Draisaitl (ARI)</td><td>6</td><td>36</td></tr>
<tr><td>9</td><td>Brad Marchand (BOS)</td><td>7</td><td>36</td></tr>
<tr><td>10</td><td>Mike Hoffman (TBL)</td><td>7</td><td>36</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Shots %</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>SHT %</th></tr></thead>
<tr><td>1</td><td>Kevin Labanc (DET)</td><td>6</td><td>40.00%</td></tr>
<tr><td>2</td><td>Brandon Pirri (MIN)</td><td>7</td><td>30.00%</td></tr>
<tr><td>3</td><td>Oskar Sundqvist (ARI)</td><td>6</td><td>28.57%</td></tr>
<tr><td>4</td><td>Tyler Bozak (FLA)</td><td>7</td><td>28.57%</td></tr>
<tr><td>5</td><td>William Karlsson (NJD)</td><td>7</td><td>28.57%</td></tr>
<tr><td>6</td><td>Andrew Cogliano (ANH)</td><td>8</td><td>27.27%</td></tr>
<tr><td>7</td><td>Jason Dickinson (WSH)</td><td>9</td><td>27.27%</td></tr>
<tr><td>8</td><td>Craig Smith (VGK)</td><td>8</td><td>26.67%</td></tr>
<tr><td>9</td><td>Brock Nelson (PHL)</td><td>5</td><td>25.00%</td></tr>
<tr><td>10</td><td>Maxime Lajoie (NJD)</td><td>7</td><td>25.00%</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Centers</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PTS</th></tr></thead>
<tr><td>1</td><td>Ryan Nugent-Hopkins (EDM)</td><td>8</td><td>6-6-12</td></tr>
<tr><td>2</td><td>Evgeny Kuznetsov (SJS)</td><td>7</td><td>4-8-12</td></tr>
<tr><td>3</td><td>Jonathan Toews (WPG)</td><td>9</td><td>7-4-11</td></tr>
<tr><td>4</td><td>Blake Wheeler (EDM)</td><td>8</td><td>5-4-9</td></tr>
<tr><td>5</td><td>Jack Eichel (WSH)</td><td>9</td><td>5-4-9</td></tr>
<tr><td>6</td><td>Mika Zibanejad (ARI)</td><td>6</td><td>3-6-9</td></tr>
<tr><td>7</td><td>Aleksander Barkov (SJS)</td><td>7</td><td>3-6-9</td></tr>
<tr><td>8</td><td>Patrice Bergeron (DAL)</td><td>9</td><td>3-6-9</td></tr>
<tr><td>9</td><td>Phillip Danault (CGY)</td><td>8</td><td>2-7-9</td></tr>
<tr><td>10</td><td>Travis Zajac (ANH)</td><td>8</td><td>6-2-8</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Left Wings</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PTS</th></tr></thead>
<tr><td>1</td><td>Ryan Nugent-Hopkins (EDM)</td><td>8</td><td>6-6-12</td></tr>
<tr><td>2</td><td>Taylor Hall (CGY)</td><td>8</td><td>3-7-10</td></tr>
<tr><td>3</td><td>Viktor Arvidsson (CGY)</td><td>8</td><td>5-4-9</td></tr>
<tr><td>4</td><td>Dustin Brown (EDM)</td><td>8</td><td>4-5-9</td></tr>
<tr><td>5</td><td>Zach Parise (DAL)</td><td>9</td><td>5-3-8</td></tr>
<tr><td>6</td><td>Matthew Tkachuk (WPG)</td><td>9</td><td>4-4-8</td></tr>
<tr><td>7</td><td>Alex DeBrincat (MTL)</td><td>7</td><td>3-5-8</td></tr>
<tr><td>8</td><td>Tyler Ennis (STL)</td><td>7</td><td>0-8-8</td></tr>
<tr><td>9</td><td>Leon Draisaitl (ARI)</td><td>6</td><td>2-5-7</td></tr>
<tr><td>10</td><td>Gustav Nyquist (VAN)</td><td>6</td><td>2-5-7</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Right Wings</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PTS</th></tr></thead>
<tr><td>1</td><td>Blake Wheeler (EDM)</td><td>8</td><td>5-4-9</td></tr>
<tr><td>2</td><td>Viktor Arvidsson (CGY)</td><td>8</td><td>5-4-9</td></tr>
<tr><td>3</td><td>Dustin Brown (EDM)</td><td>8</td><td>4-5-9</td></tr>
<tr><td>4</td><td>T.J. Oshie (WSH)</td><td>9</td><td>3-6-9</td></tr>
<tr><td>5</td><td>Jeff Carter (MTL)</td><td>7</td><td>5-3-8</td></tr>
<tr><td>6</td><td>Matthew Tkachuk (WPG)</td><td>9</td><td>4-4-8</td></tr>
<tr><td>7</td><td>Alex DeBrincat (MTL)</td><td>7</td><td>3-5-8</td></tr>
<tr><td>8</td><td>Mats Zuccarello (CLB)</td><td>7</td><td>3-5-8</td></tr>
<tr><td>9</td><td>Tyler Ennis (STL)</td><td>7</td><td>0-8-8</td></tr>
<tr><td>10</td><td>Wayne Simmonds (CAR)</td><td>9</td><td>3-4-7</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Defenseman</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PTS</th></tr></thead>
<tr><td>1</td><td>Erik Karlsson (CGY)</td><td>8</td><td>2-8-10</td></tr>
<tr><td>2</td><td>Kevin Shattenkirk (WPG)</td><td>9</td><td>1-8-9</td></tr>
<tr><td>3</td><td>Sami Vatanen (WPG)</td><td>9</td><td>0-9-9</td></tr>
<tr><td>4</td><td>Josh Morrissey (ANH)</td><td>8</td><td>2-6-8</td></tr>
<tr><td>5</td><td>Tyler Myers (VAN)</td><td>6</td><td>0-8-8</td></tr>
<tr><td>6</td><td>Cam Fowler (PIT)</td><td>6</td><td>2-5-7</td></tr>
<tr><td>7</td><td>Justin Faulk (CHI)</td><td>5</td><td>3-3-6</td></tr>
<tr><td>8</td><td>Esa Lindell (TBL)</td><td>7</td><td>2-4-6</td></tr>
<tr><td>9</td><td>Jared Spurgeon (SJS)</td><td>7</td><td>2-4-6</td></tr>
<tr><td>10</td><td>Michael Stone (FLA)</td><td>7</td><td>2-4-6</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Points per 20 Minutes</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>P/20</th></tr></thead>
<tr><td>1</td><td>Gustav Nyquist (VAN)</td><td>6</td><td>1.89</td></tr>
<tr><td>2</td><td>Evgeny Kuznetsov (SJS)</td><td>7</td><td>1.69</td></tr>
<tr><td>3</td><td>Tyler Ennis (STL)</td><td>7</td><td>1.48</td></tr>
<tr><td>4</td><td>Mika Zibanejad (ARI)</td><td>6</td><td>1.39</td></tr>
<tr><td>5</td><td>Mathew Barzal (NYI)</td><td>7</td><td>1.32</td></tr>
<tr><td>6</td><td>Travis Zajac (ANH)</td><td>8</td><td>1.32</td></tr>
<tr><td>7</td><td>Ryan Nugent-Hopkins (EDM)</td><td>8</td><td>1.31</td></tr>
<tr><td>8</td><td>Taylor Hall (CGY)</td><td>8</td><td>1.28</td></tr>
<tr><td>9</td><td>Michael McCarron (FLA)</td><td>5</td><td>1.25</td></tr>
<tr><td>10</td><td>Alex DeBrincat (MTL)</td><td>7</td><td>1.19</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Face-Off %</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>FO %</th></tr></thead>
<tr><td>1</td><td>Ryan Kesler (VAN)</td><td>6</td><td>66.67%</td></tr>
<tr><td>2</td><td>Brandon Dubinsky (NJD)</td><td>7</td><td>66.67%</td></tr>
<tr><td>3</td><td>Christian Dvorak (TOR)</td><td>8</td><td>66.10%</td></tr>
<tr><td>4</td><td>Claude Giroux (NYR)</td><td>5</td><td>65.47%</td></tr>
<tr><td>5</td><td>Jeff Carter (MTL)</td><td>7</td><td>62.31%</td></tr>
<tr><td>6</td><td>Jordan Staal (NSH)</td><td>7</td><td>61.99%</td></tr>
<tr><td>7</td><td>Jay Beagle (ANH)</td><td>8</td><td>60.67%</td></tr>
<tr><td>8</td><td>Tomas Hertl (TOR)</td><td>8</td><td>60.62%</td></tr>
<tr><td>9</td><td>Paul Stastny (CAR)</td><td>9</td><td>60.00%</td></tr>
<tr><td>10</td><td>Patrice Bergeron (DAL)</td><td>9</td><td>59.74%</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Plus/Minus</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>+/-</th></tr></thead>
<tr><td>1</td><td>Erik Karlsson (CGY)</td><td>8</td><td>10</td></tr>
<tr><td>2</td><td>Dylan DeMelo (NYI)</td><td>7</td><td>9</td></tr>
<tr><td>3</td><td>Tyler Myers (VAN)</td><td>6</td><td>8</td></tr>
<tr><td>4</td><td>Mark Barberio (NYI)</td><td>7</td><td>8</td></tr>
<tr><td>5</td><td>Jaccob Slavin (CGY)</td><td>8</td><td>8</td></tr>
<tr><td>6</td><td>Mattias Janmark (ANH)</td><td>8</td><td>7</td></tr>
<tr><td>7</td><td>Travis Zajac (ANH)</td><td>8</td><td>7</td></tr>
<tr><td>8</td><td>Sean Kuraly (TOR)</td><td>8</td><td>7</td></tr>
<tr><td>9</td><td>Casey Cizikas (TOR)</td><td>8</td><td>7</td></tr>
<tr><td>10</td><td>Steven Stamkos (NYI)</td><td>7</td><td>6</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Penalty Minutes</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PIM</th></tr></thead>
<tr><td>1</td><td>Brenden Dillon (BUF)</td><td>8</td><td>27</td></tr>
<tr><td>2</td><td>Tom Wilson (CGY)</td><td>8</td><td>24</td></tr>
<tr><td>3</td><td>Christian Folin (NJD)</td><td>7</td><td>21</td></tr>
<tr><td>4</td><td>Evander Kane (CLB)</td><td>7</td><td>18</td></tr>
<tr><td>5</td><td>Micheal Ferland (PIT)</td><td>8</td><td>18</td></tr>
<tr><td>6</td><td>Josh Morrissey (ANH)</td><td>8</td><td>17</td></tr>
<tr><td>7</td><td>Austin Watson (CGY)</td><td>8</td><td>17</td></tr>
<tr><td>8</td><td>Luke Schenn (VGK)</td><td>8</td><td>16</td></tr>
<tr><td>9</td><td>Jeff Petry (EDM)</td><td>8</td><td>16</td></tr>
<tr><td>10</td><td>Justin Falk (TBL)</td><td>7</td><td>14</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Shots Blocked</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>SB</th></tr></thead>
<tr><td>1</td><td>Robert Bortuzzo (PIT)</td><td>8</td><td>24</td></tr>
<tr><td>2</td><td>Andy Greene (PIT)</td><td>8</td><td>22</td></tr>
<tr><td>3</td><td>Damon Severson (FLA)</td><td>7</td><td>21</td></tr>
<tr><td>4</td><td>Mark Giordano (VGK)</td><td>8</td><td>20</td></tr>
<tr><td>5</td><td>Michael Stone (FLA)</td><td>7</td><td>19</td></tr>
<tr><td>6</td><td>Drew Doughty (WSH)</td><td>9</td><td>19</td></tr>
<tr><td>7</td><td>Thomas Hickey (DAL)</td><td>9</td><td>19</td></tr>
<tr><td>8</td><td>Kevin Connauton (TBL)</td><td>7</td><td>18</td></tr>
<tr><td>9</td><td>Sami Vatanen (WPG)</td><td>9</td><td>18</td></tr>
<tr><td>10</td><td>Slater Koekkoek (CAR)</td><td>9</td><td>18</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Rookies</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PTS</th></tr></thead>
<tr><td>1</td><td>Elias Pettersson (CLB)</td><td>7</td><td>4-3-7</td></tr>
<tr><td>2</td><td>Jesperi Kotkaniemi (WPG)</td><td>9</td><td>4-0-4</td></tr>
<tr><td>3</td><td>Brady Tkachuk (PIT)</td><td>8</td><td>0-4-4</td></tr>
<tr><td>4</td><td>Kyle Brodziak (MIN)</td><td>7</td><td>2-1-3</td></tr>
<tr><td>5</td><td>Sam Steel (CLB)</td><td>7</td><td>2-1-3</td></tr>
<tr><td>6</td><td>Mathieu Joseph (DET)</td><td>8</td><td>2-1-3</td></tr>
<tr><td>7</td><td>Roope Hintz (WPG)</td><td>9</td><td>2-1-3</td></tr>
<tr><td>8</td><td>Evgenii Dadonov (BOS)</td><td>7</td><td>1-2-3</td></tr>
<tr><td>9</td><td>Ilya Lyubushkin (CAR)</td><td>7</td><td>1-2-3</td></tr>
<tr><td>10</td><td>Lias Andersson (DET)</td><td>5</td><td>1-1-2</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Hits</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>HIT</th></tr></thead>
<tr><td>1</td><td>Alex Ovechkin (LAK)</td><td>7</td><td>30</td></tr>
<tr><td>2</td><td>Luke Schenn (VGK)</td><td>8</td><td>30</td></tr>
<tr><td>3</td><td>Noah Juulsen (MIN)</td><td>7</td><td>27</td></tr>
<tr><td>4</td><td>Brenden Dillon (BUF)</td><td>8</td><td>27</td></tr>
<tr><td>5</td><td>Brendan Smith (STL)</td><td>7</td><td>26</td></tr>
<tr><td>6</td><td>Max Pacioretty (DAL)</td><td>9</td><td>26</td></tr>
<tr><td>7</td><td>Tom Wilson (CGY)</td><td>8</td><td>25</td></tr>
<tr><td>8</td><td>Radko Gudas (PHL)</td><td>5</td><td>24</td></tr>
<tr><td>9</td><td>Jack Johnson (NSH)</td><td>7</td><td>24</td></tr>
<tr><td>10</td><td>Lawson Crouse (FLA)</td><td>7</td><td>24</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Power Play Goals</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PP</th></tr></thead>
<tr><td>1</td><td>Zach Parise (DAL)</td><td>9</td><td>4</td></tr>
<tr><td>2</td><td>Jeff Skinner (ARI)</td><td>6</td><td>3</td></tr>
<tr><td>3</td><td>Pavel Zacha (VAN)</td><td>6</td><td>2</td></tr>
<tr><td>4</td><td>Cam Fowler (PIT)</td><td>6</td><td>2</td></tr>
<tr><td>5</td><td>Oliver Ekman-Larsson (ARI)</td><td>6</td><td>2</td></tr>
<tr><td>6</td><td>Kyle Brodziak (MIN)</td><td>7</td><td>2</td></tr>
<tr><td>7</td><td>Patric Hornqvist (NJD)</td><td>7</td><td>2</td></tr>
<tr><td>8</td><td>John Carlson (MIN)</td><td>7</td><td>2</td></tr>
<tr><td>9</td><td>Mats Zuccarello (CLB)</td><td>7</td><td>2</td></tr>
<tr><td>10</td><td>Jeff Carter (MTL)</td><td>7</td><td>2</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Short Handed Goals</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>SH</th></tr></thead>
<tr><td>1</td><td>Travis Zajac (ANH)</td><td>8</td><td>2</td></tr>
<tr><td>2</td><td>Mika Zibanejad (ARI)</td><td>6</td><td>1</td></tr>
<tr><td>3</td><td>Evgenii Dadonov (BOS)</td><td>7</td><td>1</td></tr>
<tr><td>4</td><td>Adrian Kempe (NSH)</td><td>7</td><td>1</td></tr>
<tr><td>5</td><td>Marc Staal (DET)</td><td>8</td><td>1</td></tr>
<tr><td>6</td><td>Andrew Cogliano (ANH)</td><td>8</td><td>1</td></tr>
<tr><td>7</td><td>Chris Wideman (PIT)</td><td>8</td><td>1</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Game Winning Goals</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>GW</th></tr></thead>
<tr><td>1</td><td>Artemi Panarin (MTL)</td><td>7</td><td>2</td></tr>
<tr><td>2</td><td>Darren Helm (FLA)</td><td>7</td><td>2</td></tr>
<tr><td>3</td><td>Ryan O'Reilly (NYI)</td><td>7</td><td>2</td></tr>
<tr><td>4</td><td>Sam Reinhart (NSH)</td><td>7</td><td>2</td></tr>
<tr><td>5</td><td>Taylor Hall (CGY)</td><td>8</td><td>2</td></tr>
<tr><td>6</td><td>Viktor Arvidsson (CGY)</td><td>8</td><td>2</td></tr>
<tr><td>7</td><td>Ryan Johansen (WSH)</td><td>9</td><td>2</td></tr>
<tr><td>8</td><td>Marcus Pettersson (CAR)</td><td>2</td><td>1</td></tr>
<tr><td>9</td><td>Michael McCarron (FLA)</td><td>5</td><td>1</td></tr>
<tr><td>10</td><td>Chris Tierney (NYR)</td><td>5</td><td>1</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Game Tying Goals</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>GT</th></tr></thead>
<tr><td>1</td><td>Sean Couturier (BOS)</td><td>7</td><td>2</td></tr>
<tr><td>2</td><td>Dustin Brown (EDM)</td><td>8</td><td>2</td></tr>
<tr><td>3</td><td>Viktor Arvidsson (CGY)</td><td>8</td><td>2</td></tr>
<tr><td>4</td><td>Shea Weber (NYR)</td><td>5</td><td>1</td></tr>
<tr><td>5</td><td>Ryan Strome (PHL)</td><td>5</td><td>1</td></tr>
<tr><td>6</td><td>Oskar Sundqvist (ARI)</td><td>6</td><td>1</td></tr>
<tr><td>7</td><td>Alex Steen (VAN)</td><td>6</td><td>1</td></tr>
<tr><td>8</td><td>Brett Connolly (OTT)</td><td>6</td><td>1</td></tr>
<tr><td>9</td><td>Vladimir Tarasenko (OTT)</td><td>6</td><td>1</td></tr>
<tr><td>10</td><td>Pierre-Edouard Bellemare (OTT)</td><td>6</td><td>1</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Empty Net Goals</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>ENG</th></tr></thead>
<tr><td>1</td><td>Olli Maatta (WPG)</td><td>9</td><td>2</td></tr>
<tr><td>2</td><td>Justin Faulk (CHI)</td><td>5</td><td>1</td></tr>
<tr><td>3</td><td>Zach Parise (DAL)</td><td>9</td><td>1</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Minutes Played</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>MP</th></tr></thead>
<tr><td>1</td><td>Drew Doughty (WSH)</td><td>9</td><td>228</td></tr>
<tr><td>2</td><td>Sami Vatanen (WPG)</td><td>9</td><td>223</td></tr>
<tr><td>3</td><td>Slater Koekkoek (CAR)</td><td>9</td><td>209</td></tr>
<tr><td>4</td><td>Duncan Keith (DAL)</td><td>9</td><td>209</td></tr>
<tr><td>5</td><td>Mattias Ekholm (EDM)</td><td>8</td><td>208</td></tr>
<tr><td>6</td><td>Ryan Suter (DET)</td><td>8</td><td>207</td></tr>
<tr><td>7</td><td>Mike Green (WPG)</td><td>9</td><td>206</td></tr>
<tr><td>8</td><td>Jaccob Slavin (CGY)</td><td>8</td><td>205</td></tr>
<tr><td>9</td><td>Rasmus Ristolainen (BUF)</td><td>8</td><td>205</td></tr>
<tr><td>10</td><td>Jacob Trouba (WSH)</td><td>9</td><td>204</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Hat Tricks</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>HT</th></tr></thead>
<tr><td>1</td><td>Alexander Radulov (NYI)</td><td>7</td><td>1</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Goal Scoring Streak</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>GS</th></tr></thead>
<tr><td>1</td><td>Brandon Pirri (MIN)</td><td>7</td><td>3</td></tr>
<tr><td>2</td><td>Kasperi Kapanen (WPG)</td><td>9</td><td>3</td></tr>
<tr><td>3</td><td>Chris Tierney (NYR)</td><td>5</td><td>2</td></tr>
<tr><td>4</td><td>Oskar Sundqvist (ARI)</td><td>6</td><td>2</td></tr>
<tr><td>5</td><td>Mats Zuccarello (CLB)</td><td>7</td><td>2</td></tr>
<tr><td>6</td><td>Jeff Carter (MTL)</td><td>7</td><td>2</td></tr>
<tr><td>7</td><td>Deryk Engelland (NSH)</td><td>7</td><td>2</td></tr>
<tr><td>8</td><td>Josh Anderson (NYI)</td><td>7</td><td>2</td></tr>
<tr><td>9</td><td>Jakub Voracek (NYI)</td><td>7</td><td>2</td></tr>
<tr><td>10</td><td>Carl Soderberg (FLA)</td><td>7</td><td>2</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Point Scoring Streak</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PS</th></tr></thead>
<tr><td>1</td><td>Jeff Carter (MTL)</td><td>7</td><td>7</td></tr>
<tr><td>2</td><td>Evgeny Kuznetsov (SJS)</td><td>7</td><td>7</td></tr>
<tr><td>3</td><td>Alex DeBrincat (MTL)</td><td>7</td><td>5</td></tr>
<tr><td>4</td><td>Jeff Skinner (ARI)</td><td>6</td><td>4</td></tr>
<tr><td>5</td><td>Gustav Nyquist (VAN)</td><td>6</td><td>4</td></tr>
<tr><td>6</td><td>Anze Kopitar (BUF)</td><td>8</td><td>4</td></tr>
<tr><td>7</td><td>Viktor Arvidsson (CGY)</td><td>8</td><td>4</td></tr>
<tr><td>8</td><td>Brian Boyle (CHI)</td><td>5</td><td>3</td></tr>
<tr><td>9</td><td>Jay Bouwmeester (ARI)</td><td>6</td><td>3</td></tr>
<tr><td>10</td><td>Alex Ovechkin (LAK)</td><td>7</td><td>3</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Hits Taken</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>HTT</th></tr></thead>
<tr><td>1</td><td>Eric Staal (WPG)</td><td>9</td><td>33</td></tr>
<tr><td>2</td><td>Paul Stastny (CAR)</td><td>9</td><td>30</td></tr>
<tr><td>3</td><td>Patrice Bergeron (DAL)</td><td>9</td><td>30</td></tr>
<tr><td>4</td><td>Anze Kopitar (BUF)</td><td>8</td><td>28</td></tr>
<tr><td>5</td><td>Casey Cizikas (TOR)</td><td>8</td><td>27</td></tr>
<tr><td>6</td><td>Radek Faksa (BOS)</td><td>7</td><td>25</td></tr>
<tr><td>7</td><td>Jonathan Toews (WPG)</td><td>9</td><td>25</td></tr>
<tr><td>8</td><td>Frans Nielsen (DAL)</td><td>9</td><td>25</td></tr>
<tr><td>9</td><td>Sean Couturier (BOS)</td><td>7</td><td>24</td></tr>
<tr><td>10</td><td>Dylan Larkin (CGY)</td><td>8</td><td>24</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Penalty Shots</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PSG </th></tr></thead>
<tr><td>1</td><td>Kyle Connor (VAN)</td><td>6</td><td>2</td></tr>
<tr><td>2</td><td>Sean Couturier (BOS)</td><td>7</td><td>2</td></tr>
<tr><td>3</td><td>Connor McDavid (DET)</td><td>8</td><td>2</td></tr>
<tr><td>4</td><td>Brayden Point (DET)</td><td>8</td><td>2</td></tr>
<tr><td>5</td><td>Sean Monahan (ANH)</td><td>8</td><td>2</td></tr>
<tr><td>6</td><td>Charlie Coyle (NYR)</td><td>5</td><td>1</td></tr>
<tr><td>7</td><td>Mikko Rantanen (VAN)</td><td>6</td><td>1</td></tr>
<tr><td>8</td><td>Alex Steen (VAN)</td><td>6</td><td>1</td></tr>
<tr><td>9</td><td>Leon Draisaitl (ARI)</td><td>6</td><td>1</td></tr>
<tr><td>10</td><td>Evgenii Dadonov (BOS)</td><td>7</td><td>1</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Give Away</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>GA  </th></tr></thead>
<tr><td colspan="4" class="STHSCenter">No Result</td></tr></table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Take Away</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>TA   </th></tr></thead>
<tr><td colspan="4" class="STHSCenter">No Result</td></tr></table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Total Fight</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>FT  </th></tr></thead>
<tr><td>1</td><td>Trevor Lewis (PHL)</td><td>5</td><td>1</td></tr>
<tr><td>2</td><td>Gabriel Landeskog (NYR)</td><td>5</td><td>1</td></tr>
<tr><td>3</td><td>Cole Schneider (BUF)</td><td>6</td><td>1</td></tr>
<tr><td>4</td><td>Ryan Getzlaf (NJD)</td><td>7</td><td>1</td></tr>
<tr><td>5</td><td>Brandon Dubinsky (NJD)</td><td>7</td><td>1</td></tr>
<tr><td>6</td><td>Travis Konecny (SJS)</td><td>7</td><td>1</td></tr>
<tr><td>7</td><td>Curtis Lazar (FLA)</td><td>7</td><td>1</td></tr>
<tr><td>8</td><td>Ron Hainsey (EDM)</td><td>7</td><td>1</td></tr>
<tr><td>9</td><td>Matt Moulson (NJD)</td><td>7</td><td>1</td></tr>
<tr><td>10</td><td>Riley Sheahan (NJD)</td><td>7</td><td>1</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Fight Won</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>FW   </th></tr></thead>
<tr><td>1</td><td>Brandon Dubinsky (NJD)</td><td>7</td><td>1</td></tr>
<tr><td>2</td><td>Blake Wheeler (EDM)</td><td>8</td><td>1</td></tr>
</table></td></tr>
<tr><td colspan="3"><h2 class="STHSProIndividualLeader_Goalies">Goalies</h2></td></tr><tr>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Save Percentage</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><th>GP</th><th>SAVE %</th></tr></thead>
<tr><td>1</td><td>Casey DeSmith (CGY)</td><td>4</td><td>0.966</td></tr>
<tr><td>2</td><td>Philipp Grubauer (NYI)</td><td>5</td><td>0.955</td></tr>
<tr><td>3</td><td>Pekka Rinne (CGY)</td><td>4</td><td>0.943</td></tr>
<tr><td>4</td><td>Carey Price (NSH)</td><td>7</td><td>0.942</td></tr>
<tr><td>5</td><td>Darcy Kuemper (SJS)</td><td>7</td><td>0.940</td></tr>
<tr><td>6</td><td>Andrei Vasilevskiy (OTT)</td><td>6</td><td>0.939</td></tr>
<tr><td>7</td><td>Henrik Lundqvist (VAN)</td><td>6</td><td>0.936</td></tr>
<tr><td>8</td><td>Matt Murray (WPG)</td><td>7</td><td>0.934</td></tr>
<tr><td>9</td><td>Thomas Greiss (BUF)</td><td>8</td><td>0.933</td></tr>
<tr><td>10</td><td>Sergei Bobrovsky (DET)</td><td>7</td><td>0.931</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Goals Against Average</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><th>GP</th><th>GAA</th></tr></thead>
<tr><td>1</td><td>Casey DeSmith (CGY)</td><td>4</td><td>1.00</td></tr>
<tr><td>2</td><td>Philipp Grubauer (NYI)</td><td>5</td><td>1.21</td></tr>
<tr><td>3</td><td>Darcy Kuemper (SJS)</td><td>7</td><td>1.84</td></tr>
<tr><td>4</td><td>Andrei Vasilevskiy (OTT)</td><td>6</td><td>1.84</td></tr>
<tr><td>5</td><td>Thomas Greiss (BUF)</td><td>8</td><td>1.87</td></tr>
<tr><td>6</td><td>Matt Murray (WPG)</td><td>7</td><td>1.92</td></tr>
<tr><td>7</td><td>Henrik Lundqvist (VAN)</td><td>6</td><td>1.95</td></tr>
<tr><td>8</td><td>Pekka Rinne (CGY)</td><td>4</td><td>1.97</td></tr>
<tr><td>9</td><td>Carey Price (NSH)</td><td>7</td><td>2.12</td></tr>
<tr><td>10</td><td>Marc-Andre Fleury (NYR)</td><td>5</td><td>2.17</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Minutes Played</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><th>GP</th><th>MP</th></tr></thead>
<tr><td>1</td><td>John Gibson (EDM)</td><td>8</td><td>494</td></tr>
<tr><td>2</td><td>Petr Mrazek (WSH)</td><td>9</td><td>492</td></tr>
<tr><td>3</td><td>Thomas Greiss (BUF)</td><td>8</td><td>481</td></tr>
<tr><td>4</td><td>Jonathan Bernier (CAR)</td><td>8</td><td>452</td></tr>
<tr><td>5</td><td>Braden Holtby (BOS)</td><td>7</td><td>435</td></tr>
<tr><td>6</td><td>Sergei Bobrovsky (DET)</td><td>7</td><td>433</td></tr>
<tr><td>7</td><td>Mike Smith (ANH)</td><td>7</td><td>430</td></tr>
<tr><td>8</td><td>Carey Price (NSH)</td><td>7</td><td>425</td></tr>
<tr><td>9</td><td>Darcy Kuemper (SJS)</td><td>7</td><td>425</td></tr>
<tr><td>10</td><td>Craig Anderson (DAL)</td><td>7</td><td>422</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Shots Faced</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><th>GP</th><th>SHT</th></tr></thead>
<tr><td>1</td><td>Jonathan Bernier (CAR)</td><td>8</td><td>292</td></tr>
<tr><td>2</td><td>Sergei Bobrovsky (DET)</td><td>7</td><td>276</td></tr>
<tr><td>3</td><td>Carey Price (NSH)</td><td>7</td><td>259</td></tr>
<tr><td>4</td><td>Braden Holtby (BOS)</td><td>7</td><td>253</td></tr>
<tr><td>5</td><td>Petr Mrazek (WSH)</td><td>9</td><td>250</td></tr>
<tr><td>6</td><td>Robin Lehner (NJD)</td><td>7</td><td>236</td></tr>
<tr><td>7</td><td>Mike Smith (ANH)</td><td>7</td><td>233</td></tr>
<tr><td>8</td><td>Frederik Andersen (TOR)</td><td>7</td><td>231</td></tr>
<tr><td>9</td><td>John Gibson (EDM)</td><td>8</td><td>227</td></tr>
<tr><td>10</td><td>Thomas Greiss (BUF)</td><td>8</td><td>223</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Shutouts</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><th>GP</th><th>SO</th></tr></thead>
<tr><td>1</td><td>Carey Price (NSH)</td><td>7</td><td>2</td></tr>
<tr><td>2</td><td>Casey DeSmith (CGY)</td><td>4</td><td>1</td></tr>
<tr><td>3</td><td>Pekka Rinne (CGY)</td><td>4</td><td>1</td></tr>
<tr><td>4</td><td>Troy Grosenick (MIN)</td><td>4</td><td>1</td></tr>
<tr><td>5</td><td>Marc-Andre Fleury (NYR)</td><td>5</td><td>1</td></tr>
<tr><td>6</td><td>Philipp Grubauer (NYI)</td><td>5</td><td>1</td></tr>
<tr><td>7</td><td>Jack Campbell (VGK)</td><td>5</td><td>1</td></tr>
<tr><td>8</td><td>Henrik Lundqvist (VAN)</td><td>6</td><td>1</td></tr>
<tr><td>9</td><td>Braden Holtby (BOS)</td><td>7</td><td>1</td></tr>
<tr><td>10</td><td>Frederik Andersen (TOR)</td><td>7</td><td>1</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Wins</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><th>GP</th><th>W</th></tr></thead>
<tr><td>1</td><td>Henrik Lundqvist (VAN)</td><td>6</td><td>6</td></tr>
<tr><td>2</td><td>Ben Bishop (MTL)</td><td>6</td><td>5</td></tr>
<tr><td>3</td><td>Carey Price (NSH)</td><td>7</td><td>5</td></tr>
<tr><td>4</td><td>Darcy Kuemper (SJS)</td><td>7</td><td>5</td></tr>
<tr><td>5</td><td>Petr Mrazek (WSH)</td><td>9</td><td>5</td></tr>
<tr><td>6</td><td>Casey DeSmith (CGY)</td><td>4</td><td>4</td></tr>
<tr><td>7</td><td>Philipp Grubauer (NYI)</td><td>5</td><td>4</td></tr>
<tr><td>8</td><td>Andrei Vasilevskiy (OTT)</td><td>6</td><td>4</td></tr>
<tr><td>9</td><td>Anton Khudobin (FLA)</td><td>6</td><td>4</td></tr>
<tr><td>10</td><td>Mike Smith (ANH)</td><td>7</td><td>4</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Penalty Shots Percentage</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><td>PSA</td><th>PS SHT %</th></tr></thead>
<tr><td>1</td><td>Carey Price (NSH)</td><td>4</td><td>1.000</td></tr>
<tr><td>2</td><td>Ben Bishop (MTL)</td><td>3</td><td>1.000</td></tr>
<tr><td>3</td><td>Pekka Rinne (CGY)</td><td>3</td><td>1.000</td></tr>
<tr><td>4</td><td>Marc-Andre Fleury (NYR)</td><td>3</td><td>1.000</td></tr>
<tr><td>5</td><td>Marcus Hogberg (DET)</td><td>3</td><td>1.000</td></tr>
<tr><td>6</td><td>Louis Domingue (STL)</td><td>3</td><td>1.000</td></tr>
<tr><td>7</td><td>Henrik Lundqvist (VAN)</td><td>5</td><td>0.800</td></tr>
<tr><td>8</td><td>Michael Hutchinson (NYI)</td><td>5</td><td>0.800</td></tr>
<tr><td>9</td><td>Jordan Binnington (MIN)</td><td>4</td><td>0.750</td></tr>
<tr><td>10</td><td>Braden Holtby (BOS)</td><td>14</td><td>0.714</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Losses</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><th>GP</th><th>L</th></tr></thead>
<tr><td>1</td><td>Jonathan Bernier (CAR)</td><td>8</td><td>6</td></tr>
<tr><td>2</td><td>Semyon Varlamov (PIT)</td><td>6</td><td>5</td></tr>
<tr><td>3</td><td>Craig Anderson (DAL)</td><td>7</td><td>5</td></tr>
<tr><td>4</td><td>Frederik Andersen (TOR)</td><td>7</td><td>5</td></tr>
<tr><td>5</td><td>Jaroslav Halak (PHL)</td><td>5</td><td>4</td></tr>
<tr><td>6</td><td>Devan Dubnyk (LAK)</td><td>5</td><td>4</td></tr>
<tr><td>7</td><td>Jimmy Howard (CHI)</td><td>4</td><td>3</td></tr>
<tr><td>8</td><td>Troy Grosenick (MIN)</td><td>4</td><td>3</td></tr>
<tr><td>9</td><td>Jake Allen (COL)</td><td>5</td><td>3</td></tr>
<tr><td>10</td><td>Jacob Markstrom (CLB)</td><td>6</td><td>3</td></tr>
</table></td></tr>
</table>
<?php include "Footer.php";?>
