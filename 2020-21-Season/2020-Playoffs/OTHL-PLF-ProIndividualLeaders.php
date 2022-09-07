<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<title>OTHL - Pro Individual Leaders</title>
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
<b>Minimum Games Played: 7</b><br />
<script>$(function(){$("table").basictablesorter()});</script>
<table class="STHSTableFullW">
<tr><td colspan="3"><h2 class="STHSProIndividualLeader_Players">Players</h2></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Goals</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>G</th></tr></thead>
<tr><td>1</td><td>Brock Nelson (PHL)</td><td>16</td><td>11</td></tr>
<tr><td>2</td><td>Kyle Connor (VAN)</td><td>17</td><td>11</td></tr>
<tr><td>3</td><td>Blake Coleman (BOS)</td><td>22</td><td>11</td></tr>
<tr><td>4</td><td>Sean Couturier (BOS)</td><td>22</td><td>11</td></tr>
<tr><td>5</td><td>Mikko Rantanen (VAN)</td><td>17</td><td>8</td></tr>
<tr><td>6</td><td>Brad Marchand (BOS)</td><td>22</td><td>8</td></tr>
<tr><td>7</td><td>Jean-Gabriel Pageau (BOS)</td><td>22</td><td>8</td></tr>
<tr><td>8</td><td>Artemi Panarin (ANH)</td><td>11</td><td>6</td></tr>
<tr><td>9</td><td>Ryan Nugent-Hopkins (EDM)</td><td>11</td><td>6</td></tr>
<tr><td>10</td><td>Kailer Yamamoto (PHL)</td><td>16</td><td>6</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Assists</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>A</th></tr></thead>
<tr><td>1</td><td>Brad Marchand (BOS)</td><td>22</td><td>22</td></tr>
<tr><td>2</td><td>Sean Couturier (BOS)</td><td>22</td><td>17</td></tr>
<tr><td>3</td><td>Brent Burns (BOS)</td><td>22</td><td>16</td></tr>
<tr><td>4</td><td>Mikko Rantanen (VAN)</td><td>17</td><td>13</td></tr>
<tr><td>5</td><td>Tyler Myers (VAN)</td><td>17</td><td>13</td></tr>
<tr><td>6</td><td>Dougie Hamilton (VAN)</td><td>17</td><td>13</td></tr>
<tr><td>7</td><td>Oscar Klefbom (NSH)</td><td>18</td><td>13</td></tr>
<tr><td>8</td><td>Kevin Fiala (PHL)</td><td>16</td><td>12</td></tr>
<tr><td>9</td><td>Ryan Strome (PHL)</td><td>16</td><td>12</td></tr>
<tr><td>10</td><td>Auston Matthews (VAN)</td><td>17</td><td>11</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Shots</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>SHT</th></tr></thead>
<tr><td>1</td><td>Brad Marchand (BOS)</td><td>22</td><td>101</td></tr>
<tr><td>2</td><td>Sean Couturier (BOS)</td><td>22</td><td>100</td></tr>
<tr><td>3</td><td>Jean-Gabriel Pageau (BOS)</td><td>22</td><td>91</td></tr>
<tr><td>4</td><td>Kyle Connor (VAN)</td><td>17</td><td>90</td></tr>
<tr><td>5</td><td>Auston Matthews (VAN)</td><td>17</td><td>89</td></tr>
<tr><td>6</td><td>Blake Coleman (BOS)</td><td>22</td><td>84</td></tr>
<tr><td>7</td><td>Mikko Rantanen (VAN)</td><td>17</td><td>79</td></tr>
<tr><td>8</td><td>Alex Killorn (NSH)</td><td>18</td><td>75</td></tr>
<tr><td>9</td><td>Brendan Gallagher (BOS)</td><td>22</td><td>75</td></tr>
<tr><td>10</td><td>Logan Couture (NSH)</td><td>18</td><td>72</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Shots %</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>SHT %</th></tr></thead>
<tr><td>1</td><td>Oscar Klefbom (NSH)</td><td>18</td><td>19.35%</td></tr>
<tr><td>2</td><td>Zach Hyman (ANH)</td><td>11</td><td>17.86%</td></tr>
<tr><td>3</td><td>Jeff Petry (EDM)</td><td>11</td><td>17.65%</td></tr>
<tr><td>4</td><td>Andreas Athanasiou (NSH)</td><td>16</td><td>17.65%</td></tr>
<tr><td>5</td><td>Brock Nelson (PHL)</td><td>16</td><td>17.19%</td></tr>
<tr><td>6</td><td>Anders Lee (BUF)</td><td>7</td><td>16.67%</td></tr>
<tr><td>7</td><td>Jordan Staal (ANH)</td><td>11</td><td>16.67%</td></tr>
<tr><td>8</td><td>Artemi Panarin (ANH)</td><td>11</td><td>16.22%</td></tr>
<tr><td>9</td><td>Andre Burakovsky (CGY)</td><td>7</td><td>15.38%</td></tr>
<tr><td>10</td><td>Dylan Larkin (CGY)</td><td>7</td><td>14.81%</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Centers</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PTS</th></tr></thead>
<tr><td>1</td><td>Brad Marchand (BOS)</td><td>22</td><td>8-22-30</td></tr>
<tr><td>2</td><td>Sean Couturier (BOS)</td><td>22</td><td>11-17-28</td></tr>
<tr><td>3</td><td>Blake Coleman (BOS)</td><td>22</td><td>11-10-21</td></tr>
<tr><td>4</td><td>Brock Nelson (PHL)</td><td>16</td><td>11-8-19</td></tr>
<tr><td>5</td><td>Ryan Strome (PHL)</td><td>16</td><td>5-12-17</td></tr>
<tr><td>6</td><td>Auston Matthews (VAN)</td><td>17</td><td>5-11-16</td></tr>
<tr><td>7</td><td>Jean-Gabriel Pageau (BOS)</td><td>22</td><td>8-7-15</td></tr>
<tr><td>8</td><td>Nick Bonino (VAN)</td><td>17</td><td>6-9-15</td></tr>
<tr><td>9</td><td>Ryan Nugent-Hopkins (EDM)</td><td>11</td><td>6-7-13</td></tr>
<tr><td>10</td><td>Logan Couture (NSH)</td><td>18</td><td>6-6-12</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Left Wings</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PTS</th></tr></thead>
<tr><td>1</td><td>Brad Marchand (BOS)</td><td>22</td><td>8-22-30</td></tr>
<tr><td>2</td><td>Kyle Connor (VAN)</td><td>17</td><td>11-11-22</td></tr>
<tr><td>3</td><td>Blake Coleman (BOS)</td><td>22</td><td>11-10-21</td></tr>
<tr><td>4</td><td>Brock Nelson (PHL)</td><td>16</td><td>11-8-19</td></tr>
<tr><td>5</td><td>Kevin Fiala (PHL)</td><td>16</td><td>5-12-17</td></tr>
<tr><td>6</td><td>Ryan Strome (PHL)</td><td>16</td><td>5-12-17</td></tr>
<tr><td>7</td><td>Reilly Smith (NSH)</td><td>18</td><td>4-11-15</td></tr>
<tr><td>8</td><td>Evgenii Dadonov (BOS)</td><td>22</td><td>6-8-14</td></tr>
<tr><td>9</td><td>Ryan Nugent-Hopkins (EDM)</td><td>11</td><td>6-7-13</td></tr>
<tr><td>10</td><td>Alex Killorn (NSH)</td><td>18</td><td>4-8-12</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Right Wings</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PTS</th></tr></thead>
<tr><td>1</td><td>Blake Coleman (BOS)</td><td>22</td><td>11-10-21</td></tr>
<tr><td>2</td><td>Mikko Rantanen (VAN)</td><td>17</td><td>8-13-21</td></tr>
<tr><td>3</td><td>Kevin Fiala (PHL)</td><td>16</td><td>5-12-17</td></tr>
<tr><td>4</td><td>Ryan Strome (PHL)</td><td>16</td><td>5-12-17</td></tr>
<tr><td>5</td><td>Nick Bonino (VAN)</td><td>17</td><td>6-9-15</td></tr>
<tr><td>6</td><td>Reilly Smith (NSH)</td><td>18</td><td>4-11-15</td></tr>
<tr><td>7</td><td>Evgenii Dadonov (BOS)</td><td>22</td><td>6-8-14</td></tr>
<tr><td>8</td><td>Alex Killorn (NSH)</td><td>18</td><td>4-8-12</td></tr>
<tr><td>9</td><td>Bryan Rust (PHL)</td><td>13</td><td>4-6-10</td></tr>
<tr><td>10</td><td>Cam Atkinson (PHL)</td><td>16</td><td>4-6-10</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Defenseman</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PTS</th></tr></thead>
<tr><td>1</td><td>Oscar Klefbom (NSH)</td><td>18</td><td>6-13-19</td></tr>
<tr><td>2</td><td>Brent Burns (BOS)</td><td>22</td><td>1-16-17</td></tr>
<tr><td>3</td><td>Tyler Myers (VAN)</td><td>17</td><td>3-13-16</td></tr>
<tr><td>4</td><td>Dougie Hamilton (VAN)</td><td>17</td><td>3-13-16</td></tr>
<tr><td>5</td><td>Brian Dumoulin (PHL)</td><td>16</td><td>3-9-12</td></tr>
<tr><td>6</td><td>Rasmus Dahlin (PHL)</td><td>16</td><td>3-8-11</td></tr>
<tr><td>7</td><td>Mattias Ekholm (EDM)</td><td>11</td><td>2-8-10</td></tr>
<tr><td>8</td><td>Morgan Rielly (ANH)</td><td>11</td><td>1-9-10</td></tr>
<tr><td>9</td><td>Patrik Nemeth (VAN)</td><td>17</td><td>6-3-9</td></tr>
<tr><td>10</td><td>Jonas Brodin (PHL)</td><td>16</td><td>2-7-9</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Points per 20 Minutes</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>P/20</th></tr></thead>
<tr><td>1</td><td>Brad Marchand (BOS)</td><td>22</td><td>1.41</td></tr>
<tr><td>2</td><td>Sean Couturier (BOS)</td><td>22</td><td>1.30</td></tr>
<tr><td>3</td><td>Ryan Nugent-Hopkins (EDM)</td><td>11</td><td>1.26</td></tr>
<tr><td>4</td><td>Kevin Fiala (PHL)</td><td>16</td><td>1.24</td></tr>
<tr><td>5</td><td>Dylan Larkin (CGY)</td><td>7</td><td>1.23</td></tr>
<tr><td>6</td><td>Kyle Connor (VAN)</td><td>17</td><td>1.20</td></tr>
<tr><td>7</td><td>Mikko Rantanen (VAN)</td><td>17</td><td>1.19</td></tr>
<tr><td>8</td><td>Tom Wilson (CGY)</td><td>7</td><td>1.17</td></tr>
<tr><td>9</td><td>Andreas Athanasiou (NSH)</td><td>16</td><td>1.16</td></tr>
<tr><td>10</td><td>Patrice Bergeron (DAL)</td><td>7</td><td>1.15</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Face-Off %</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>FO %</th></tr></thead>
<tr><td>1</td><td>Anze Kopitar (BUF)</td><td>7</td><td>64.33%</td></tr>
<tr><td>2</td><td>Jay Beagle (BOS)</td><td>11</td><td>63.16%</td></tr>
<tr><td>3</td><td>Luke Glendening (EDM)</td><td>11</td><td>61.38%</td></tr>
<tr><td>4</td><td>Dylan Larkin (CGY)</td><td>7</td><td>61.11%</td></tr>
<tr><td>5</td><td>Patrice Bergeron (DAL)</td><td>7</td><td>59.73%</td></tr>
<tr><td>6</td><td>Brandon Dubinsky (VAN)</td><td>17</td><td>59.57%</td></tr>
<tr><td>7</td><td>Sidney Crosby (BUF)</td><td>7</td><td>59.28%</td></tr>
<tr><td>8</td><td>Ryan O'Reilly (NYI)</td><td>11</td><td>58.73%</td></tr>
<tr><td>9</td><td>Sean Couturier (BOS)</td><td>22</td><td>58.33%</td></tr>
<tr><td>10</td><td>Frederik Gauthier (BOS)</td><td>14</td><td>55.66%</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Plus/Minus</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>+/-</th></tr></thead>
<tr><td>1</td><td>Blake Coleman (BOS)</td><td>22</td><td>19</td></tr>
<tr><td>2</td><td>Brad Marchand (BOS)</td><td>22</td><td>18</td></tr>
<tr><td>3</td><td>Sean Couturier (BOS)</td><td>22</td><td>18</td></tr>
<tr><td>4</td><td>Nikita Zaitsev (VAN)</td><td>17</td><td>14</td></tr>
<tr><td>5</td><td>Tyler Myers (VAN)</td><td>17</td><td>14</td></tr>
<tr><td>6</td><td>Erik Gudbranson (BOS)</td><td>22</td><td>13</td></tr>
<tr><td>7</td><td>Mirco Mueller (BOS)</td><td>22</td><td>12</td></tr>
<tr><td>8</td><td>Ben Chiarot (BOS)</td><td>22</td><td>12</td></tr>
<tr><td>9</td><td>Ben Hutton (BOS)</td><td>22</td><td>11</td></tr>
<tr><td>10</td><td>Andreas Athanasiou (NSH)</td><td>16</td><td>8</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Penalty Minutes</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PIM</th></tr></thead>
<tr><td>1</td><td>Alexander Edler (PHL)</td><td>16</td><td>37</td></tr>
<tr><td>2</td><td>Deryk Engelland (NSH)</td><td>18</td><td>36</td></tr>
<tr><td>3</td><td>Erik Gudbranson (BOS)</td><td>22</td><td>34</td></tr>
<tr><td>4</td><td>Mark Borowiecki (PHL)</td><td>16</td><td>28</td></tr>
<tr><td>5</td><td>Ben Chiarot (BOS)</td><td>22</td><td>28</td></tr>
<tr><td>6</td><td>Jack Johnson (NSH)</td><td>18</td><td>24</td></tr>
<tr><td>7</td><td>Blake Coleman (BOS)</td><td>22</td><td>22</td></tr>
<tr><td>8</td><td>Brad Marchand (BOS)</td><td>22</td><td>21</td></tr>
<tr><td>9</td><td>Brayden McNabb (BOS)</td><td>22</td><td>20</td></tr>
<tr><td>10</td><td>Brady Skjei (CGY)</td><td>4</td><td>19</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Shots Blocked</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>SB</th></tr></thead>
<tr><td>1</td><td>Brayden McNabb (BOS)</td><td>22</td><td>41</td></tr>
<tr><td>2</td><td>Oscar Klefbom (NSH)</td><td>18</td><td>39</td></tr>
<tr><td>3</td><td>Mirco Mueller (BOS)</td><td>22</td><td>39</td></tr>
<tr><td>4</td><td>Jonas Brodin (PHL)</td><td>16</td><td>37</td></tr>
<tr><td>5</td><td>Jack Johnson (NSH)</td><td>18</td><td>37</td></tr>
<tr><td>6</td><td>Ben Chiarot (BOS)</td><td>22</td><td>36</td></tr>
<tr><td>7</td><td>Alexander Edler (PHL)</td><td>16</td><td>32</td></tr>
<tr><td>8</td><td>Patrik Nemeth (VAN)</td><td>17</td><td>30</td></tr>
<tr><td>9</td><td>Deryk Engelland (NSH)</td><td>18</td><td>30</td></tr>
<tr><td>10</td><td>Dougie Hamilton (VAN)</td><td>17</td><td>28</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Rookies</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PTS</th></tr></thead>
<tr><td>1</td><td>Dominik Kubalik (NSH)</td><td>18</td><td>1-9-10</td></tr>
<tr><td>2</td><td>Cale Makar (NYI)</td><td>11</td><td>1-5-6</td></tr>
<tr><td>3</td><td>Quinn Hughes (CLB)</td><td>6</td><td>1-3-4</td></tr>
<tr><td>4</td><td>Filip Zadina (PHL)</td><td>16</td><td>1-1-2</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Hits</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>HIT</th></tr></thead>
<tr><td>1</td><td>Blake Coleman (BOS)</td><td>22</td><td>76</td></tr>
<tr><td>2</td><td>Brayden McNabb (BOS)</td><td>22</td><td>75</td></tr>
<tr><td>3</td><td>Ben Chiarot (BOS)</td><td>22</td><td>72</td></tr>
<tr><td>4</td><td>Erik Gudbranson (BOS)</td><td>22</td><td>71</td></tr>
<tr><td>5</td><td>Jack Johnson (NSH)</td><td>18</td><td>62</td></tr>
<tr><td>6</td><td>Mark Borowiecki (PHL)</td><td>16</td><td>53</td></tr>
<tr><td>7</td><td>Erik Cernak (NSH)</td><td>18</td><td>49</td></tr>
<tr><td>8</td><td>Alexander Edler (PHL)</td><td>16</td><td>48</td></tr>
<tr><td>9</td><td>Jean-Gabriel Pageau (BOS)</td><td>22</td><td>43</td></tr>
<tr><td>10</td><td>Reilly Smith (NSH)</td><td>18</td><td>36</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Power Play Goals</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PP</th></tr></thead>
<tr><td>1</td><td>Kyle Connor (VAN)</td><td>17</td><td>5</td></tr>
<tr><td>2</td><td>Kevin Fiala (PHL)</td><td>16</td><td>4</td></tr>
<tr><td>3</td><td>Patrik Nemeth (VAN)</td><td>17</td><td>4</td></tr>
<tr><td>4</td><td>Scott Laughton (NYI)</td><td>11</td><td>3</td></tr>
<tr><td>5</td><td>Ryan Strome (PHL)</td><td>16</td><td>3</td></tr>
<tr><td>6</td><td>Tyler Myers (VAN)</td><td>17</td><td>3</td></tr>
<tr><td>7</td><td>Dougie Hamilton (VAN)</td><td>17</td><td>3</td></tr>
<tr><td>8</td><td>Logan Couture (NSH)</td><td>18</td><td>3</td></tr>
<tr><td>9</td><td>Reilly Smith (NSH)</td><td>18</td><td>3</td></tr>
<tr><td>10</td><td>Oscar Klefbom (NSH)</td><td>18</td><td>3</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Short Handed Goals</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>SH</th></tr></thead>
<tr><td>1</td><td>Matthew Nieto (CGY)</td><td>7</td><td>1</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Game Winning Goals</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>GW</th></tr></thead>
<tr><td>1</td><td>Kailer Yamamoto (PHL)</td><td>16</td><td>3</td></tr>
<tr><td>2</td><td>Mikko Rantanen (VAN)</td><td>17</td><td>3</td></tr>
<tr><td>3</td><td>Adam Henrique (NSH)</td><td>17</td><td>3</td></tr>
<tr><td>4</td><td>Patrice Bergeron (DAL)</td><td>7</td><td>2</td></tr>
<tr><td>5</td><td>Zach Hyman (ANH)</td><td>11</td><td>2</td></tr>
<tr><td>6</td><td>Shea Weber (EDM)</td><td>11</td><td>2</td></tr>
<tr><td>7</td><td>Connor Brown (NYI)</td><td>11</td><td>2</td></tr>
<tr><td>8</td><td>Frederik Gauthier (BOS)</td><td>14</td><td>2</td></tr>
<tr><td>9</td><td>Nick Bonino (VAN)</td><td>17</td><td>2</td></tr>
<tr><td>10</td><td>Patrik Nemeth (VAN)</td><td>17</td><td>2</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Game Tying Goals</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>GT</th></tr></thead>
<tr><td>1</td><td>Sidney Crosby (BUF)</td><td>7</td><td>2</td></tr>
<tr><td>2</td><td>Kyle Connor (VAN)</td><td>17</td><td>2</td></tr>
<tr><td>3</td><td>Dougie Hamilton (VAN)</td><td>17</td><td>2</td></tr>
<tr><td>4</td><td>Brad Marchand (BOS)</td><td>22</td><td>2</td></tr>
<tr><td>5</td><td>Nick Jensen (DAL)</td><td>7</td><td>1</td></tr>
<tr><td>6</td><td>Artemi Panarin (ANH)</td><td>11</td><td>1</td></tr>
<tr><td>7</td><td>Ryan Nugent-Hopkins (EDM)</td><td>11</td><td>1</td></tr>
<tr><td>8</td><td>Luke Kunin (EDM)</td><td>11</td><td>1</td></tr>
<tr><td>9</td><td>Jacob de La Rose (ANH)</td><td>11</td><td>1</td></tr>
<tr><td>10</td><td>Zack Smith (NYI)</td><td>11</td><td>1</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Empty Net Goals</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>ENG</th></tr></thead>
<tr><td>1</td><td>Patrice Bergeron (DAL)</td><td>7</td><td>1</td></tr>
<tr><td>2</td><td>Jordan Staal (ANH)</td><td>11</td><td>1</td></tr>
<tr><td>3</td><td>Marcus Foligno (TBL)</td><td>14</td><td>1</td></tr>
<tr><td>4</td><td>Ryan Strome (PHL)</td><td>16</td><td>1</td></tr>
<tr><td>5</td><td>Ryan Carpenter (VAN)</td><td>17</td><td>1</td></tr>
<tr><td>6</td><td>Jean-Gabriel Pageau (BOS)</td><td>22</td><td>1</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Minutes Played</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>MP</th></tr></thead>
<tr><td>1</td><td>Brayden McNabb (BOS)</td><td>22</td><td>510</td></tr>
<tr><td>2</td><td>Oscar Klefbom (NSH)</td><td>18</td><td>471</td></tr>
<tr><td>3</td><td>Jack Johnson (NSH)</td><td>18</td><td>460</td></tr>
<tr><td>4</td><td>Blake Coleman (BOS)</td><td>22</td><td>458</td></tr>
<tr><td>5</td><td>Brent Burns (BOS)</td><td>22</td><td>456</td></tr>
<tr><td>6</td><td>Ben Chiarot (BOS)</td><td>22</td><td>447</td></tr>
<tr><td>7</td><td>Dougie Hamilton (VAN)</td><td>17</td><td>437</td></tr>
<tr><td>8</td><td>Sean Couturier (BOS)</td><td>22</td><td>431</td></tr>
<tr><td>9</td><td>Brad Marchand (BOS)</td><td>22</td><td>425</td></tr>
<tr><td>10</td><td>Patrik Nemeth (VAN)</td><td>17</td><td>418</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Hat Tricks</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>HT</th></tr></thead>
<tr><td>1</td><td>Brock Nelson (PHL)</td><td>16</td><td>1</td></tr>
<tr><td>2</td><td>Kyle Connor (VAN)</td><td>17</td><td>1</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Goal Scoring Streak</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>GS</th></tr></thead>
<tr><td>1</td><td>Vladislav Namestnikov (CHI)</td><td>4</td><td>2</td></tr>
<tr><td>2</td><td>Ryan Nugent-Hopkins (EDM)</td><td>11</td><td>2</td></tr>
<tr><td>3</td><td>Shea Weber (EDM)</td><td>11</td><td>2</td></tr>
<tr><td>4</td><td>Darren Helm (FLA)</td><td>4</td><td>1</td></tr>
<tr><td>5</td><td>Marcus Johansson (FLA)</td><td>4</td><td>1</td></tr>
<tr><td>6</td><td>Sebastian Aho (CHI)</td><td>4</td><td>1</td></tr>
<tr><td>7</td><td>Evgeni Malkin (CHI)</td><td>4</td><td>1</td></tr>
<tr><td>8</td><td>Brandon Saad (TOR)</td><td>4</td><td>1</td></tr>
<tr><td>9</td><td>Jesper Fast (ARI)</td><td>5</td><td>1</td></tr>
<tr><td>10</td><td>Nikita Kucherov (ARI)</td><td>5</td><td>1</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Point Scoring Streak</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PS</th></tr></thead>
<tr><td>1</td><td>Sean Couturier (BOS)</td><td>22</td><td>9</td></tr>
<tr><td>2</td><td>Logan Couture (NSH)</td><td>18</td><td>7</td></tr>
<tr><td>3</td><td>Brad Marchand (BOS)</td><td>22</td><td>6</td></tr>
<tr><td>4</td><td>Mika Zibanejad (ARI)</td><td>5</td><td>5</td></tr>
<tr><td>5</td><td>Dylan Larkin (CGY)</td><td>7</td><td>4</td></tr>
<tr><td>6</td><td>Brian Dumoulin (PHL)</td><td>16</td><td>4</td></tr>
<tr><td>7</td><td>Reilly Smith (NSH)</td><td>18</td><td>4</td></tr>
<tr><td>8</td><td>Marcus Johansson (FLA)</td><td>4</td><td>3</td></tr>
<tr><td>9</td><td>Damon Severson (FLA)</td><td>4</td><td>3</td></tr>
<tr><td>10</td><td>Andy Greene (CHI)</td><td>4</td><td>3</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Hits Taken</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>HTT</th></tr></thead>
<tr><td>1</td><td>Sean Couturier (BOS)</td><td>22</td><td>57</td></tr>
<tr><td>2</td><td>Jean-Gabriel Pageau (BOS)</td><td>22</td><td>57</td></tr>
<tr><td>3</td><td>Brandon Sutter (NSH)</td><td>17</td><td>50</td></tr>
<tr><td>4</td><td>Logan Couture (NSH)</td><td>18</td><td>50</td></tr>
<tr><td>5</td><td>Brock Nelson (PHL)</td><td>16</td><td>49</td></tr>
<tr><td>6</td><td>Nick Bonino (VAN)</td><td>17</td><td>49</td></tr>
<tr><td>7</td><td>Chris Tierney (BOS)</td><td>22</td><td>43</td></tr>
<tr><td>8</td><td>Ryan Strome (PHL)</td><td>16</td><td>42</td></tr>
<tr><td>9</td><td>Vincent Trocheck (TBL)</td><td>14</td><td>41</td></tr>
<tr><td>10</td><td>Auston Matthews (VAN)</td><td>17</td><td>41</td></tr>
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
<tr><td>1</td><td>Brad Marchand (BOS)</td><td>22</td><td>3</td></tr>
<tr><td>2</td><td>Mark Borowiecki (PHL)</td><td>16</td><td>2</td></tr>
<tr><td>3</td><td>Deryk Engelland (NSH)</td><td>18</td><td>2</td></tr>
<tr><td>4</td><td>Brady Skjei (CGY)</td><td>4</td><td>1</td></tr>
<tr><td>5</td><td>Anthony Bitetto (DAL)</td><td>4</td><td>1</td></tr>
<tr><td>6</td><td>Jamie Benn (CLB)</td><td>6</td><td>1</td></tr>
<tr><td>7</td><td>Jordie Benn (DAL)</td><td>7</td><td>1</td></tr>
<tr><td>8</td><td>Chris Wagner (EDM)</td><td>9</td><td>1</td></tr>
<tr><td>9</td><td>Ryan Graves (EDM)</td><td>11</td><td>1</td></tr>
<tr><td>10</td><td>Luca Sbisa (TBL)</td><td>11</td><td>1</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Fight Won</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>FW   </th></tr></thead>
<tr><td>1</td><td>Brady Skjei (CGY)</td><td>4</td><td>1</td></tr>
<tr><td>2</td><td>Chris Wagner (EDM)</td><td>9</td><td>1</td></tr>
<tr><td>3</td><td>Ryan Graves (EDM)</td><td>11</td><td>1</td></tr>
<tr><td>4</td><td>Victor Hedman (NYI)</td><td>11</td><td>1</td></tr>
<tr><td>5</td><td>Alexander Edler (PHL)</td><td>16</td><td>1</td></tr>
<tr><td>6</td><td>Mark Borowiecki (PHL)</td><td>16</td><td>1</td></tr>
<tr><td>7</td><td>Deryk Engelland (NSH)</td><td>18</td><td>1</td></tr>
</table></td></tr>
<tr><td colspan="3"><h2 class="STHSProIndividualLeader_Goalies">Goalies</h2></td></tr><tr>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Save Percentage</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><th>GP</th><th>SAVE %</th></tr></thead>
<tr><td>1</td><td>Connor Hellebuyck (TBL)</td><td>14</td><td>0.936</td></tr>
<tr><td>2</td><td>Pavel Francouz (BOS)</td><td>22</td><td>0.933</td></tr>
<tr><td>3</td><td>Anton Khudobin (PHL)</td><td>14</td><td>0.929</td></tr>
<tr><td>4</td><td>Jacob Markstrom (VAN)</td><td>15</td><td>0.929</td></tr>
<tr><td>5</td><td>Carey Price (NSH)</td><td>18</td><td>0.928</td></tr>
<tr><td>6</td><td>Elvis Merzlikins (EDM)</td><td>9</td><td>0.924</td></tr>
<tr><td>7</td><td>Tristan Jarry (ANH)</td><td>10</td><td>0.922</td></tr>
<tr><td>8</td><td>Philipp Grubauer (NYI)</td><td>10</td><td>0.919</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Goals Against Average</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><th>GP</th><th>GAA</th></tr></thead>
<tr><td>1</td><td>Pavel Francouz (BOS)</td><td>22</td><td>2.16</td></tr>
<tr><td>2</td><td>Anton Khudobin (PHL)</td><td>14</td><td>2.33</td></tr>
<tr><td>3</td><td>Connor Hellebuyck (TBL)</td><td>14</td><td>2.38</td></tr>
<tr><td>4</td><td>Jacob Markstrom (VAN)</td><td>15</td><td>2.43</td></tr>
<tr><td>5</td><td>Elvis Merzlikins (EDM)</td><td>9</td><td>2.78</td></tr>
<tr><td>6</td><td>Tristan Jarry (ANH)</td><td>10</td><td>2.83</td></tr>
<tr><td>7</td><td>Carey Price (NSH)</td><td>18</td><td>2.86</td></tr>
<tr><td>8</td><td>Philipp Grubauer (NYI)</td><td>10</td><td>2.94</td></tr>
<tr><td colspan="4" class="STHSCenter">No Result</td></tr></table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Minutes Played</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><th>GP</th><th>MP</th></tr></thead>
<tr><td>1</td><td>Pavel Francouz (BOS)</td><td>22</td><td>1,248</td></tr>
<tr><td>2</td><td>Carey Price (NSH)</td><td>18</td><td>1,135</td></tr>
<tr><td>3</td><td>Jacob Markstrom (VAN)</td><td>15</td><td>963</td></tr>
<tr><td>4</td><td>Anton Khudobin (PHL)</td><td>14</td><td>876</td></tr>
<tr><td>5</td><td>Connor Hellebuyck (TBL)</td><td>14</td><td>832</td></tr>
<tr><td>6</td><td>Tristan Jarry (ANH)</td><td>10</td><td>593</td></tr>
<tr><td>7</td><td>Philipp Grubauer (NYI)</td><td>10</td><td>591</td></tr>
<tr><td>8</td><td>Elvis Merzlikins (EDM)</td><td>9</td><td>540</td></tr>
<tr><td>9</td><td>Henrik Lundqvist (CLB)</td><td>6</td><td>371</td></tr>
<tr><td>10</td><td>Thomas Greiss (BUF)</td><td>6</td><td>360</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Shots Faced</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><th>GP</th><th>SHT</th></tr></thead>
<tr><td>1</td><td>Carey Price (NSH)</td><td>18</td><td>747</td></tr>
<tr><td>2</td><td>Pavel Francouz (BOS)</td><td>22</td><td>668</td></tr>
<tr><td>3</td><td>Jacob Markstrom (VAN)</td><td>15</td><td>546</td></tr>
<tr><td>4</td><td>Connor Hellebuyck (TBL)</td><td>14</td><td>512</td></tr>
<tr><td>5</td><td>Anton Khudobin (PHL)</td><td>14</td><td>482</td></tr>
<tr><td>6</td><td>Tristan Jarry (ANH)</td><td>10</td><td>360</td></tr>
<tr><td>7</td><td>Philipp Grubauer (NYI)</td><td>10</td><td>356</td></tr>
<tr><td>8</td><td>Elvis Merzlikins (EDM)</td><td>9</td><td>330</td></tr>
<tr><td>9</td><td>Thomas Greiss (BUF)</td><td>6</td><td>205</td></tr>
<tr><td>10</td><td>Ben Bishop (CGY)</td><td>6</td><td>201</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Shutouts</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><th>GP</th><th>SO</th></tr></thead>
<tr><td>1</td><td>Anton Khudobin (PHL)</td><td>14</td><td>2</td></tr>
<tr><td>2</td><td>Connor Hellebuyck (TBL)</td><td>14</td><td>2</td></tr>
<tr><td>3</td><td>Pavel Francouz (BOS)</td><td>22</td><td>2</td></tr>
<tr><td>4</td><td>Thomas Greiss (BUF)</td><td>6</td><td>1</td></tr>
<tr><td>5</td><td>Elvis Merzlikins (EDM)</td><td>9</td><td>1</td></tr>
<tr><td>6</td><td>Carey Price (NSH)</td><td>18</td><td>1</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Wins</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><th>GP</th><th>W</th></tr></thead>
<tr><td>1</td><td>Pavel Francouz (BOS)</td><td>22</td><td>15</td></tr>
<tr><td>2</td><td>Anton Khudobin (PHL)</td><td>14</td><td>10</td></tr>
<tr><td>3</td><td>Jacob Markstrom (VAN)</td><td>15</td><td>10</td></tr>
<tr><td>4</td><td>Carey Price (NSH)</td><td>18</td><td>8</td></tr>
<tr><td>5</td><td>Connor Hellebuyck (TBL)</td><td>14</td><td>7</td></tr>
<tr><td>6</td><td>Elvis Merzlikins (EDM)</td><td>9</td><td>6</td></tr>
<tr><td>7</td><td>Tristan Jarry (ANH)</td><td>10</td><td>4</td></tr>
<tr><td>8</td><td>Philipp Grubauer (NYI)</td><td>10</td><td>4</td></tr>
<tr><td>9</td><td>Cam Talbot (DAL)</td><td>6</td><td>3</td></tr>
<tr><td>10</td><td>Ben Bishop (CGY)</td><td>6</td><td>3</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Penalty Shots Percentage</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><td>PSA</td><th>PS SHT %</th></tr></thead>
<tr><td colspan="4" class="STHSCenter">No Result</td></tr></table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Losses</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><th>GP</th><th>L</th></tr></thead>
<tr><td>1</td><td>Connor Hellebuyck (TBL)</td><td>14</td><td>7</td></tr>
<tr><td>2</td><td>Carey Price (NSH)</td><td>18</td><td>7</td></tr>
<tr><td>3</td><td>Tristan Jarry (ANH)</td><td>10</td><td>6</td></tr>
<tr><td>4</td><td>Pavel Francouz (BOS)</td><td>22</td><td>6</td></tr>
<tr><td>5</td><td>Jacob Markstrom (VAN)</td><td>15</td><td>5</td></tr>
<tr><td>6</td><td>Corey Crawford (CHI)</td><td>4</td><td>4</td></tr>
<tr><td>7</td><td>Tuukka Rask (ARI)</td><td>5</td><td>4</td></tr>
<tr><td>8</td><td>Thomas Greiss (BUF)</td><td>6</td><td>4</td></tr>
<tr><td>9</td><td>Anton Khudobin (PHL)</td><td>14</td><td>4</td></tr>
<tr><td>10</td><td>Ben Bishop (CGY)</td><td>6</td><td>3</td></tr>
</table></td></tr>
</table>
<?php include "Footer.php";?>
