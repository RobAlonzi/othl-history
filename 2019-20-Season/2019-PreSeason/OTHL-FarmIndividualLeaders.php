<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<title>OTHL - Farm Individual Leaders</title>
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
<tr><td colspan="3"><h2 class="STHSFarmIndividualLeader_Players">Players</h2></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Goals</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>G</th></tr></thead>
<tr><td>1</td><td>Clark Bishop (MAN)</td><td>9</td><td>15</td></tr>
<tr><td>2</td><td>John Quenneville (MAN)</td><td>9</td><td>14</td></tr>
<tr><td>3</td><td>Anthony Duclair (STK)</td><td>8</td><td>12</td></tr>
<tr><td>4</td><td>Andrei Svechnikov (CHI)</td><td>7</td><td>11</td></tr>
<tr><td>5</td><td>Andre Burakovsky (STK)</td><td>8</td><td>11</td></tr>
<tr><td>6</td><td>Spencer Smallman (TOR)</td><td>8</td><td>11</td></tr>
<tr><td>7</td><td>Rudolfs Balcers (UTI)</td><td>6</td><td>9</td></tr>
<tr><td>8</td><td>Trevor Moore (PRO)</td><td>7</td><td>9</td></tr>
<tr><td>9</td><td>Nick Schmaltz (BKR)</td><td>8</td><td>9</td></tr>
<tr><td>10</td><td>Matthew Highmore (STK)</td><td>8</td><td>9</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Assists</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>A</th></tr></thead>
<tr><td>1</td><td>Taro Hirose (STK)</td><td>8</td><td>17</td></tr>
<tr><td>2</td><td>Jack Roslovic (STK)</td><td>8</td><td>16</td></tr>
<tr><td>3</td><td>Anthony Duclair (STK)</td><td>8</td><td>14</td></tr>
<tr><td>4</td><td>Luke Kunin (BKR)</td><td>8</td><td>13</td></tr>
<tr><td>5</td><td>Drake Batherson (CHI)</td><td>7</td><td>12</td></tr>
<tr><td>6</td><td>Karson Kuhlman (PRO)</td><td>7</td><td>12</td></tr>
<tr><td>7</td><td>Andre Burakovsky (STK)</td><td>8</td><td>12</td></tr>
<tr><td>8</td><td>Brian Strait (MAN)</td><td>9</td><td>12</td></tr>
<tr><td>9</td><td>Guillaume Brisebois (MAN)</td><td>9</td><td>12</td></tr>
<tr><td>10</td><td>Ashton Sautner (CLE)</td><td>7</td><td>11</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Shots</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>SHT</th></tr></thead>
<tr><td>1</td><td>Clark Bishop (MAN)</td><td>9</td><td>75</td></tr>
<tr><td>2</td><td>John Quenneville (MAN)</td><td>9</td><td>69</td></tr>
<tr><td>3</td><td>Brad Malone (STK)</td><td>8</td><td>67</td></tr>
<tr><td>4</td><td>Jimmy Hayes (TOR)</td><td>8</td><td>57</td></tr>
<tr><td>5</td><td>Henrik Samuelsson (TOR)</td><td>8</td><td>56</td></tr>
<tr><td>6</td><td>Kyle Rau (STK)</td><td>8</td><td>55</td></tr>
<tr><td>7</td><td>Andre Burakovsky (STK)</td><td>8</td><td>54</td></tr>
<tr><td>8</td><td>Anthony Duclair (STK)</td><td>8</td><td>51</td></tr>
<tr><td>9</td><td>Spencer Smallman (TOR)</td><td>8</td><td>49</td></tr>
<tr><td>10</td><td>Luke Gazdic (SAR)</td><td>7</td><td>46</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Shots %</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>SHT %</th></tr></thead>
<tr><td>1</td><td>Marcus Pettersson (CHR)</td><td>6</td><td>40.00%</td></tr>
<tr><td>2</td><td>Alex Broadhurst (LVP)</td><td>5</td><td>38.89%</td></tr>
<tr><td>3</td><td>Logan Brown (RCK)</td><td>5</td><td>37.50%</td></tr>
<tr><td>4</td><td>Lawrence Pilut (SYR)</td><td>7</td><td>37.50%</td></tr>
<tr><td>5</td><td>Valentin Zykov (RCK)</td><td>5</td><td>35.71%</td></tr>
<tr><td>6</td><td>Rudolfs Balcers (UTI)</td><td>6</td><td>34.62%</td></tr>
<tr><td>7</td><td>Sonny Milano (SPR)</td><td>5</td><td>33.33%</td></tr>
<tr><td>8</td><td>Frank Corrado (BEL)</td><td>6</td><td>33.33%</td></tr>
<tr><td>9</td><td>Andrei Svechnikov (CHI)</td><td>7</td><td>33.33%</td></tr>
<tr><td>10</td><td>Carl Dahlstrom (SPR)</td><td>7</td><td>28.57%</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Centers</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PTS</th></tr></thead>
<tr><td>1</td><td>John Quenneville (MAN)</td><td>9</td><td>14-7-21</td></tr>
<tr><td>2</td><td>Jack Roslovic (STK)</td><td>8</td><td>4-16-20</td></tr>
<tr><td>3</td><td>Nick Schmaltz (BKR)</td><td>8</td><td>9-10-19</td></tr>
<tr><td>4</td><td>Clark Bishop (MAN)</td><td>9</td><td>15-3-18</td></tr>
<tr><td>5</td><td>Christoffer Ehn (STK)</td><td>8</td><td>7-11-18</td></tr>
<tr><td>6</td><td>Drake Batherson (CHI)</td><td>7</td><td>6-12-18</td></tr>
<tr><td>7</td><td>Kyle Rau (STK)</td><td>8</td><td>8-9-17</td></tr>
<tr><td>8</td><td>Brad Malone (STK)</td><td>8</td><td>9-7-16</td></tr>
<tr><td>9</td><td>Luke Kunin (BKR)</td><td>8</td><td>3-13-16</td></tr>
<tr><td>10</td><td>Trevor Smith (ROC)</td><td>8</td><td>8-7-15</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Left Wings</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PTS</th></tr></thead>
<tr><td>1</td><td>Anthony Duclair (STK)</td><td>8</td><td>12-14-26</td></tr>
<tr><td>2</td><td>Andre Burakovsky (STK)</td><td>8</td><td>11-12-23</td></tr>
<tr><td>3</td><td>John Quenneville (MAN)</td><td>9</td><td>14-7-21</td></tr>
<tr><td>4</td><td>Nick Schmaltz (BKR)</td><td>8</td><td>9-10-19</td></tr>
<tr><td>5</td><td>Taro Hirose (STK)</td><td>8</td><td>2-17-19</td></tr>
<tr><td>6</td><td>Andrei Svechnikov (CHI)</td><td>7</td><td>11-7-18</td></tr>
<tr><td>7</td><td>Christoffer Ehn (STK)</td><td>8</td><td>7-11-18</td></tr>
<tr><td>8</td><td>Kyle Rau (STK)</td><td>8</td><td>8-9-17</td></tr>
<tr><td>9</td><td>Trevor Moore (PRO)</td><td>7</td><td>9-7-16</td></tr>
<tr><td>10</td><td>Brad Malone (STK)</td><td>8</td><td>9-7-16</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Right Wings</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PTS</th></tr></thead>
<tr><td>1</td><td>Anthony Duclair (STK)</td><td>8</td><td>12-14-26</td></tr>
<tr><td>2</td><td>Andre Burakovsky (STK)</td><td>8</td><td>11-12-23</td></tr>
<tr><td>3</td><td>John Quenneville (MAN)</td><td>9</td><td>14-7-21</td></tr>
<tr><td>4</td><td>Jack Roslovic (STK)</td><td>8</td><td>4-16-20</td></tr>
<tr><td>5</td><td>Nick Schmaltz (BKR)</td><td>8</td><td>9-10-19</td></tr>
<tr><td>6</td><td>Andrei Svechnikov (CHI)</td><td>7</td><td>11-7-18</td></tr>
<tr><td>7</td><td>Christoffer Ehn (STK)</td><td>8</td><td>7-11-18</td></tr>
<tr><td>8</td><td>Jeremy Bracco (TOR)</td><td>8</td><td>7-11-18</td></tr>
<tr><td>9</td><td>Drake Batherson (CHI)</td><td>7</td><td>6-12-18</td></tr>
<tr><td>10</td><td>Lukas Radil (TOR)</td><td>8</td><td>6-10-16</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Defenseman</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PTS</th></tr></thead>
<tr><td>1</td><td>Brian Strait (MAN)</td><td>9</td><td>5-12-17</td></tr>
<tr><td>2</td><td>Ashton Sautner (CLE)</td><td>7</td><td>4-11-15</td></tr>
<tr><td>3</td><td>Guillaume Brisebois (MAN)</td><td>9</td><td>1-12-13</td></tr>
<tr><td>4</td><td>Brendan Guhle (SPR)</td><td>7</td><td>2-10-12</td></tr>
<tr><td>5</td><td>Lawrence Pilut (SYR)</td><td>7</td><td>3-8-11</td></tr>
<tr><td>6</td><td>Ryan Lindgren (MAN)</td><td>9</td><td>1-10-11</td></tr>
<tr><td>7</td><td>Filip Hronek (CHR)</td><td>6</td><td>2-8-10</td></tr>
<tr><td>8</td><td>Christian Jaros (CHR)</td><td>8</td><td>2-8-10</td></tr>
<tr><td>9</td><td>David Warsofsky (CHI)</td><td>8</td><td>1-9-10</td></tr>
<tr><td>10</td><td>Carl Dahlstrom (SPR)</td><td>7</td><td>4-4-8</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Points per 20 Minutes</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>P/20</th></tr></thead>
<tr><td>1</td><td>Anthony Duclair (STK)</td><td>8</td><td>2.97</td></tr>
<tr><td>2</td><td>Andrei Svechnikov (CHI)</td><td>7</td><td>2.84</td></tr>
<tr><td>3</td><td>Rudolfs Balcers (UTI)</td><td>6</td><td>2.79</td></tr>
<tr><td>4</td><td>Drake Batherson (CHI)</td><td>7</td><td>2.76</td></tr>
<tr><td>5</td><td>Andre Burakovsky (STK)</td><td>8</td><td>2.74</td></tr>
<tr><td>6</td><td>Jack Roslovic (STK)</td><td>8</td><td>2.73</td></tr>
<tr><td>7</td><td>Sonny Milano (SPR)</td><td>5</td><td>2.73</td></tr>
<tr><td>8</td><td>Emile Poirier (SDG)</td><td>8</td><td>2.70</td></tr>
<tr><td>9</td><td>Morgan Klimchuk (SDG)</td><td>8</td><td>2.61</td></tr>
<tr><td>10</td><td>Griffen Molino (RCK)</td><td>5</td><td>2.48</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Face-Off %</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>FO %</th></tr></thead>
<tr><td>1</td><td>Drake Batherson (CHI)</td><td>7</td><td>84.67%</td></tr>
<tr><td>2</td><td>Mario Kempe (ROC)</td><td>6</td><td>84.15%</td></tr>
<tr><td>3</td><td>Clark Bishop (MAN)</td><td>9</td><td>83.21%</td></tr>
<tr><td>4</td><td>Nicolas Deslauriers (TEX)</td><td>4</td><td>80.95%</td></tr>
<tr><td>5</td><td>Filip Chlapik (SPR)</td><td>7</td><td>79.75%</td></tr>
<tr><td>6</td><td>Christoffer Ehn (STK)</td><td>8</td><td>79.74%</td></tr>
<tr><td>7</td><td>Dominic Toninato (BKR)</td><td>8</td><td>79.02%</td></tr>
<tr><td>8</td><td>Steven Lorentz (TOR)</td><td>8</td><td>78.82%</td></tr>
<tr><td>9</td><td>Anthony Cirelli (BKR)</td><td>6</td><td>78.52%</td></tr>
<tr><td>10</td><td>Jordan Szwarz (CHR)</td><td>9</td><td>77.50%</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Plus/Minus</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>+/-</th></tr></thead>
<tr><td>1</td><td>Andre Burakovsky (STK)</td><td>8</td><td>22</td></tr>
<tr><td>2</td><td>Anthony Duclair (STK)</td><td>8</td><td>22</td></tr>
<tr><td>3</td><td>Kyle Rau (STK)</td><td>8</td><td>18</td></tr>
<tr><td>4</td><td>Jack Roslovic (STK)</td><td>8</td><td>18</td></tr>
<tr><td>5</td><td>Brad Malone (STK)</td><td>8</td><td>18</td></tr>
<tr><td>6</td><td>Taro Hirose (STK)</td><td>8</td><td>17</td></tr>
<tr><td>7</td><td>Christoffer Ehn (STK)</td><td>8</td><td>16</td></tr>
<tr><td>8</td><td>Tyrell Goulbourne (STK)</td><td>8</td><td>16</td></tr>
<tr><td>9</td><td>Vinni Lettieri (STK)</td><td>8</td><td>16</td></tr>
<tr><td>10</td><td>Drake Batherson (CHI)</td><td>7</td><td>15</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Penalty Minutes</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PIM</th></tr></thead>
<tr><td>1</td><td>Josh Brown (CLE)</td><td>7</td><td>24</td></tr>
<tr><td>2</td><td>Clark Bishop (MAN)</td><td>9</td><td>23</td></tr>
<tr><td>3</td><td>Ross Johnston (ROC)</td><td>8</td><td>21</td></tr>
<tr><td>4</td><td>Jake Dotchin (PRO)</td><td>7</td><td>20</td></tr>
<tr><td>5</td><td>Griffin Reinhart (TUC)</td><td>6</td><td>15</td></tr>
<tr><td>6</td><td>Luke Kunin (BKR)</td><td>8</td><td>15</td></tr>
<tr><td>7</td><td>Madison Bowey (PRO)</td><td>7</td><td>14</td></tr>
<tr><td>8</td><td>Tommy Cross (CLE)</td><td>7</td><td>14</td></tr>
<tr><td>9</td><td>Liam O'Brien (SYR)</td><td>7</td><td>14</td></tr>
<tr><td>10</td><td>Seth Helgeson (SYR)</td><td>7</td><td>14</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Shots Blocked</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>SB</th></tr></thead>
<tr><td>1</td><td>Frank Corrado (BEL)</td><td>6</td><td>16</td></tr>
<tr><td>2</td><td>Seth Helgeson (SYR)</td><td>7</td><td>14</td></tr>
<tr><td>3</td><td>Warren Foegele (SDG)</td><td>8</td><td>13</td></tr>
<tr><td>4</td><td>Spencer Smallman (TOR)</td><td>8</td><td>13</td></tr>
<tr><td>5</td><td>Turner Elson (ROC)</td><td>8</td><td>11</td></tr>
<tr><td>6</td><td>Ashton Sautner (CLE)</td><td>7</td><td>10</td></tr>
<tr><td>7</td><td>Evan McEneny (CLE)</td><td>7</td><td>10</td></tr>
<tr><td>8</td><td>Luke Gazdic (SAR)</td><td>7</td><td>10</td></tr>
<tr><td>9</td><td>Alan Quine (BPT)</td><td>7</td><td>10</td></tr>
<tr><td>10</td><td>Alexandre Carrier (SPR)</td><td>7</td><td>9</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Rookies</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PTS</th></tr></thead>
<tr><td>1</td><td>John Quenneville (MAN)</td><td>9</td><td>14-7-21</td></tr>
<tr><td>2</td><td>Taro Hirose (STK)</td><td>8</td><td>2-17-19</td></tr>
<tr><td>3</td><td>Clark Bishop (MAN)</td><td>9</td><td>15-3-18</td></tr>
<tr><td>4</td><td>Andrei Svechnikov (CHI)</td><td>7</td><td>11-7-18</td></tr>
<tr><td>5</td><td>Christoffer Ehn (STK)</td><td>8</td><td>7-11-18</td></tr>
<tr><td>6</td><td>Jeremy Bracco (TOR)</td><td>8</td><td>7-11-18</td></tr>
<tr><td>7</td><td>Drake Batherson (CHI)</td><td>7</td><td>6-12-18</td></tr>
<tr><td>8</td><td>Trevor Moore (PRO)</td><td>7</td><td>9-7-16</td></tr>
<tr><td>9</td><td>Lukas Radil (TOR)</td><td>8</td><td>6-10-16</td></tr>
<tr><td>10</td><td>Luke Kunin (BKR)</td><td>8</td><td>3-13-16</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Hits</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>HIT</th></tr></thead>
<tr><td>1</td><td>Seth Helgeson (SYR)</td><td>7</td><td>42</td></tr>
<tr><td>2</td><td>Frank Corrado (BEL)</td><td>6</td><td>38</td></tr>
<tr><td>3</td><td>Ashton Sautner (CLE)</td><td>7</td><td>37</td></tr>
<tr><td>4</td><td>Jake Dotchin (PRO)</td><td>7</td><td>37</td></tr>
<tr><td>5</td><td>Luke Gazdic (SAR)</td><td>7</td><td>31</td></tr>
<tr><td>6</td><td>Spencer Smallman (TOR)</td><td>8</td><td>31</td></tr>
<tr><td>7</td><td>Kurtis MacDermid (ROC)</td><td>8</td><td>30</td></tr>
<tr><td>8</td><td>Anton Lindholm (GRP)</td><td>6</td><td>29</td></tr>
<tr><td>9</td><td>John Quenneville (MAN)</td><td>9</td><td>28</td></tr>
<tr><td>10</td><td>Clark Bishop (MAN)</td><td>9</td><td>28</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Power Play Goals</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PP</th></tr></thead>
<tr><td>1</td><td>Marcus Pettersson (CHR)</td><td>6</td><td>3</td></tr>
<tr><td>2</td><td>Andrei Svechnikov (CHI)</td><td>7</td><td>3</td></tr>
<tr><td>3</td><td>Ashton Sautner (CLE)</td><td>7</td><td>3</td></tr>
<tr><td>4</td><td>Carl Dahlstrom (SPR)</td><td>7</td><td>3</td></tr>
<tr><td>5</td><td>Dion Phaneuf (CLE)</td><td>1</td><td>2</td></tr>
<tr><td>6</td><td>Julius Honka (MAN)</td><td>1</td><td>2</td></tr>
<tr><td>7</td><td>Colin McDonald (GRP)</td><td>3</td><td>2</td></tr>
<tr><td>8</td><td>Griffen Molino (RCK)</td><td>5</td><td>2</td></tr>
<tr><td>9</td><td>Caleb Jones (CHI)</td><td>6</td><td>2</td></tr>
<tr><td>10</td><td>Brendan Guhle (SPR)</td><td>7</td><td>2</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Short Handed Goals</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>SH</th></tr></thead>
<tr><td>1</td><td>Julius Honka (MAN)</td><td>1</td><td>1</td></tr>
<tr><td>2</td><td>Cole Schneider (ROC)</td><td>2</td><td>1</td></tr>
<tr><td>3</td><td>Paul Thompson (GRP)</td><td>3</td><td>1</td></tr>
<tr><td>4</td><td>Jesse Puljujarvi (CHR)</td><td>6</td><td>1</td></tr>
<tr><td>5</td><td>Filip Hronek (CHR)</td><td>6</td><td>1</td></tr>
<tr><td>6</td><td>Gabriel Dumont (UTI)</td><td>6</td><td>1</td></tr>
<tr><td>7</td><td>Christoffer Ehn (STK)</td><td>8</td><td>1</td></tr>
<tr><td>8</td><td>Trevor Smith (ROC)</td><td>8</td><td>1</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Game Winning Goals</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>GW</th></tr></thead>
<tr><td>1</td><td>Morgan Klimchuk (SDG)</td><td>8</td><td>3</td></tr>
<tr><td>2</td><td>Nick Schmaltz (BKR)</td><td>8</td><td>3</td></tr>
<tr><td>3</td><td>John Quenneville (MAN)</td><td>9</td><td>3</td></tr>
<tr><td>4</td><td>Clark Bishop (MAN)</td><td>9</td><td>3</td></tr>
<tr><td>5</td><td>Max Veronneau (RCK)</td><td>5</td><td>2</td></tr>
<tr><td>6</td><td>Joshua Ho-Sang (RCK)</td><td>5</td><td>2</td></tr>
<tr><td>7</td><td>Byron Froese (CHR)</td><td>6</td><td>2</td></tr>
<tr><td>8</td><td>Vladislav Kamenev (LAV)</td><td>7</td><td>2</td></tr>
<tr><td>9</td><td>Kalle Kossila (LAV)</td><td>7</td><td>2</td></tr>
<tr><td>10</td><td>Trevor Moore (PRO)</td><td>7</td><td>2</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Game Tying Goals</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>GT</th></tr></thead>
<tr><td>1</td><td>Julius Honka (MAN)</td><td>1</td><td>1</td></tr>
<tr><td>2</td><td>Roland McKeown (WBS)</td><td>2</td><td>1</td></tr>
<tr><td>3</td><td>Lias Andersson (GRP)</td><td>3</td><td>1</td></tr>
<tr><td>4</td><td>Colin McDonald (GRP)</td><td>3</td><td>1</td></tr>
<tr><td>5</td><td>Austin Wagner (GRP)</td><td>6</td><td>1</td></tr>
<tr><td>6</td><td>Andrei Svechnikov (CHI)</td><td>7</td><td>1</td></tr>
<tr><td>7</td><td>Patrick Russell (CLE)</td><td>7</td><td>1</td></tr>
<tr><td>8</td><td>Philippe Myers (CLE)</td><td>7</td><td>1</td></tr>
<tr><td>9</td><td>Liam O'Brien (SYR)</td><td>7</td><td>1</td></tr>
<tr><td>10</td><td>Justin Auger (PRO)</td><td>7</td><td>1</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Empty Net Goals</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>ENG</th></tr></thead>
<tr><td colspan="4" class="STHSCenter">No Result</td></tr></table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Minutes Played</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>MP</th></tr></thead>
<tr><td>1</td><td>Nick Schmaltz (BKR)</td><td>8</td><td>187</td></tr>
<tr><td>2</td><td>Guillaume Brisebois (MAN)</td><td>9</td><td>184</td></tr>
<tr><td>3</td><td>Dominik Kahun (CHR)</td><td>8</td><td>178</td></tr>
<tr><td>4</td><td>Anthony Duclair (STK)</td><td>8</td><td>175</td></tr>
<tr><td>5</td><td>Ryan Lindgren (MAN)</td><td>9</td><td>174</td></tr>
<tr><td>6</td><td>John Quenneville (MAN)</td><td>9</td><td>173</td></tr>
<tr><td>7</td><td>Kyle Rau (STK)</td><td>8</td><td>169</td></tr>
<tr><td>8</td><td>Jordan Subban (STK)</td><td>8</td><td>168</td></tr>
<tr><td>9</td><td>Andre Burakovsky (STK)</td><td>8</td><td>168</td></tr>
<tr><td>10</td><td>Jacob MacDonald (LAV)</td><td>7</td><td>167</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Hat Tricks</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>HT</th></tr></thead>
<tr><td>1</td><td>Anthony Duclair (STK)</td><td>8</td><td>3</td></tr>
<tr><td>2</td><td>Trevor Moore (PRO)</td><td>7</td><td>2</td></tr>
<tr><td>3</td><td>Nick Schmaltz (BKR)</td><td>8</td><td>2</td></tr>
<tr><td>4</td><td>Trevor Smith (ROC)</td><td>8</td><td>2</td></tr>
<tr><td>5</td><td>Jacob de La Rose (CHI)</td><td>8</td><td>2</td></tr>
<tr><td>6</td><td>John Quenneville (MAN)</td><td>9</td><td>2</td></tr>
<tr><td>7</td><td>Clark Bishop (MAN)</td><td>9</td><td>2</td></tr>
<tr><td>8</td><td>Jean-Sebastien Dea (UTI)</td><td>1</td><td>1</td></tr>
<tr><td>9</td><td>Julius Honka (MAN)</td><td>1</td><td>1</td></tr>
<tr><td>10</td><td>Colin McDonald (GRP)</td><td>3</td><td>1</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Goal Scoring Streak</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>GS</th></tr></thead>
<tr><td>1</td><td>Joshua Ho-Sang (RCK)</td><td>5</td><td>5</td></tr>
<tr><td>2</td><td>Spencer Smallman (TOR)</td><td>8</td><td>5</td></tr>
<tr><td>3</td><td>Alex Broadhurst (LVP)</td><td>5</td><td>4</td></tr>
<tr><td>4</td><td>Rudolfs Balcers (UTI)</td><td>6</td><td>4</td></tr>
<tr><td>5</td><td>Gabriel Dumont (UTI)</td><td>6</td><td>4</td></tr>
<tr><td>6</td><td>Henrik Borgstrom (LAV)</td><td>7</td><td>4</td></tr>
<tr><td>7</td><td>Kalle Kossila (LAV)</td><td>7</td><td>4</td></tr>
<tr><td>8</td><td>Curtis McKenzie (LAV)</td><td>7</td><td>4</td></tr>
<tr><td>9</td><td>Christoffer Ehn (STK)</td><td>8</td><td>4</td></tr>
<tr><td>10</td><td>Turner Elson (ROC)</td><td>8</td><td>4</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Point Scoring Streak</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PS</th></tr></thead>
<tr><td>1</td><td>Christoffer Ehn (STK)</td><td>8</td><td>8</td></tr>
<tr><td>2</td><td>Lukas Radil (TOR)</td><td>8</td><td>8</td></tr>
<tr><td>3</td><td>Nick Schmaltz (BKR)</td><td>8</td><td>8</td></tr>
<tr><td>4</td><td>Jeremy Bracco (TOR)</td><td>8</td><td>8</td></tr>
<tr><td>5</td><td>Turner Elson (ROC)</td><td>8</td><td>8</td></tr>
<tr><td>6</td><td>Vladislav Kamenev (LAV)</td><td>7</td><td>7</td></tr>
<tr><td>7</td><td>Karson Kuhlman (PRO)</td><td>7</td><td>7</td></tr>
<tr><td>8</td><td>Ashton Sautner (CLE)</td><td>7</td><td>7</td></tr>
<tr><td>9</td><td>Carl Dahlstrom (SPR)</td><td>7</td><td>7</td></tr>
<tr><td>10</td><td>Brian Strait (MAN)</td><td>9</td><td>7</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Hits Taken</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>HTT</th></tr></thead>
<tr><td>1</td><td>Clark Bishop (MAN)</td><td>9</td><td>26</td></tr>
<tr><td>2</td><td>John Quenneville (MAN)</td><td>9</td><td>24</td></tr>
<tr><td>3</td><td>Christoffer Ehn (STK)</td><td>8</td><td>22</td></tr>
<tr><td>4</td><td>Dominik Kahun (CHR)</td><td>8</td><td>21</td></tr>
<tr><td>5</td><td>Alan Quine (BPT)</td><td>7</td><td>19</td></tr>
<tr><td>6</td><td>Jeremy Bracco (TOR)</td><td>8</td><td>19</td></tr>
<tr><td>7</td><td>Liam O'Brien (SYR)</td><td>7</td><td>18</td></tr>
<tr><td>8</td><td>Adam Gaudette (BKR)</td><td>8</td><td>18</td></tr>
<tr><td>9</td><td>Spencer Smallman (TOR)</td><td>8</td><td>17</td></tr>
<tr><td>10</td><td>Alexandre Grenier (SYR)</td><td>7</td><td>16</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Penalty Shots</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PSG </th></tr></thead>
<tr><td>1</td><td>Adam Johnson (BKR)</td><td>1</td><td>1</td></tr>
<tr><td>2</td><td>Mario Kempe (ROC)</td><td>6</td><td>1</td></tr>
<tr><td>3</td><td>Kalle Kossila (LAV)</td><td>7</td><td>1</td></tr>
<tr><td>4</td><td>Jacob MacDonald (LAV)</td><td>7</td><td>1</td></tr>
<tr><td>5</td><td>Nathan Walker (PRO)</td><td>7</td><td>1</td></tr>
<tr><td>6</td><td>Justin Bailey (ROC)</td><td>8</td><td>1</td></tr>
<tr><td>7</td><td>Tyler Lewington (ROC)</td><td>8</td><td>1</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Give Away</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>GA  </th></tr></thead>
<tr><td colspan="4" class="STHSCenter">No Result</td></tr></table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Take Away</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>TA   </th></tr></thead>
<tr><td colspan="4" class="STHSCenter">No Result</td></tr></table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Total Fight</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>FT  </th></tr></thead>
<tr><td>1</td><td>T.J. Brennan (LAV)</td><td>7</td><td>2</td></tr>
<tr><td>2</td><td>Griffen Molino (RCK)</td><td>5</td><td>1</td></tr>
<tr><td>3</td><td>Marcus Pettersson (CHR)</td><td>6</td><td>1</td></tr>
<tr><td>4</td><td>Griffin Reinhart (TUC)</td><td>6</td><td>1</td></tr>
<tr><td>5</td><td>Byron Froese (CHR)</td><td>6</td><td>1</td></tr>
<tr><td>6</td><td>Matt Irwin (UTI)</td><td>6</td><td>1</td></tr>
<tr><td>7</td><td>Josh Brown (CLE)</td><td>7</td><td>1</td></tr>
<tr><td>8</td><td>Luke Johnson (SPR)</td><td>7</td><td>1</td></tr>
<tr><td>9</td><td>Alan Quine (BPT)</td><td>7</td><td>1</td></tr>
<tr><td>10</td><td>Ross Johnston (ROC)</td><td>8</td><td>1</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Fight Won</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>FW   </th></tr></thead>
<tr><td>1</td><td>T.J. Brennan (LAV)</td><td>7</td><td>2</td></tr>
<tr><td>2</td><td>Marcus Pettersson (CHR)</td><td>6</td><td>1</td></tr>
<tr><td>3</td><td>Byron Froese (CHR)</td><td>6</td><td>1</td></tr>
<tr><td>4</td><td>Josh Brown (CLE)</td><td>7</td><td>1</td></tr>
<tr><td>5</td><td>Ross Johnston (ROC)</td><td>8</td><td>1</td></tr>
<tr><td>6</td><td>Emile Poirier (SDG)</td><td>8</td><td>1</td></tr>
<tr><td>7</td><td>Dominic Turgeon (CHI)</td><td>8</td><td>1</td></tr>
<tr><td>8</td><td>Brian Strait (MAN)</td><td>9</td><td>1</td></tr>
</table></td></tr>
<tr><td colspan="3"><h2 class="STHSFarmIndividualLeader_Goalies">Goalies </h2></td></tr><tr>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Save Percentage</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><th>GP</th><th>SAVE %</th></tr></thead>
<tr><td>1</td><td>Ken Appleby (ROC)</td><td>8</td><td>0.946</td></tr>
<tr><td>2</td><td>Ian Scott (CHR)</td><td>5</td><td>0.929</td></tr>
<tr><td>3</td><td>Adin Hill (PRO)</td><td>7</td><td>0.926</td></tr>
<tr><td>4</td><td>MacKenzie Blackwood (CHI)</td><td>8</td><td>0.921</td></tr>
<tr><td>5</td><td>Oscar Dansk (STK)</td><td>8</td><td>0.919</td></tr>
<tr><td>6</td><td>Tristan Jarry (SDG)</td><td>8</td><td>0.901</td></tr>
<tr><td>7</td><td>Vitek Vanecek (MAN)</td><td>9</td><td>0.901</td></tr>
<tr><td>8</td><td>Jean-Francois Berube (TEX)</td><td>9</td><td>0.901</td></tr>
<tr><td>9</td><td>Alex Nedeljkovic (LAV)</td><td>7</td><td>0.890</td></tr>
<tr><td>10</td><td>Al Montoya (RCK)</td><td>5</td><td>0.886</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Goals Against Average</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><th>GP</th><th>GAA</th></tr></thead>
<tr><td>1</td><td>Ken Appleby (ROC)</td><td>8</td><td>1.11</td></tr>
<tr><td>2</td><td>Adin Hill (PRO)</td><td>7</td><td>1.13</td></tr>
<tr><td>3</td><td>Oscar Dansk (STK)</td><td>8</td><td>1.25</td></tr>
<tr><td>4</td><td>Ian Scott (CHR)</td><td>5</td><td>1.38</td></tr>
<tr><td>5</td><td>MacKenzie Blackwood (CHI)</td><td>8</td><td>1.50</td></tr>
<tr><td>6</td><td>Alex Nedeljkovic (LAV)</td><td>7</td><td>1.55</td></tr>
<tr><td>7</td><td>Al Montoya (RCK)</td><td>5</td><td>2.00</td></tr>
<tr><td>8</td><td>Vitek Vanecek (MAN)</td><td>9</td><td>2.56</td></tr>
<tr><td>9</td><td>Landon Bow (UTI)</td><td>6</td><td>2.61</td></tr>
<tr><td>10</td><td>Tristan Jarry (SDG)</td><td>8</td><td>2.95</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Minutes Played</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><th>GP</th><th>MP</th></tr></thead>
<tr><td>1</td><td>Jean-Francois Berube (TEX)</td><td>9</td><td>540</td></tr>
<tr><td>2</td><td>Vitek Vanecek (MAN)</td><td>9</td><td>540</td></tr>
<tr><td>3</td><td>Ken Appleby (ROC)</td><td>8</td><td>485</td></tr>
<tr><td>4</td><td>MacKenzie Blackwood (CHI)</td><td>8</td><td>480</td></tr>
<tr><td>5</td><td>Oscar Dansk (STK)</td><td>8</td><td>480</td></tr>
<tr><td>6</td><td>Tristan Jarry (SDG)</td><td>8</td><td>447</td></tr>
<tr><td>7</td><td>Alex Nedeljkovic (LAV)</td><td>7</td><td>425</td></tr>
<tr><td>8</td><td>Adin Hill (PRO)</td><td>7</td><td>424</td></tr>
<tr><td>9</td><td>Brad Thiessen (CLE)</td><td>7</td><td>400</td></tr>
<tr><td>10</td><td>Francois Brassard (SYR)</td><td>7</td><td>377</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Shots Faced</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><th>GP</th><th>SHT</th></tr></thead>
<tr><td>1</td><td>Jean-Francois Berube (TEX)</td><td>9</td><td>403</td></tr>
<tr><td>2</td><td>Vitek Vanecek (MAN)</td><td>9</td><td>232</td></tr>
<tr><td>3</td><td>Tristan Jarry (SDG)</td><td>8</td><td>223</td></tr>
<tr><td>4</td><td>Francois Brassard (SYR)</td><td>7</td><td>210</td></tr>
<tr><td>5</td><td>Ken Appleby (ROC)</td><td>8</td><td>166</td></tr>
<tr><td>6</td><td>Brad Thiessen (CLE)</td><td>7</td><td>151</td></tr>
<tr><td>7</td><td>MacKenzie Blackwood (CHI)</td><td>8</td><td>151</td></tr>
<tr><td>8</td><td>Oscar Dansk (STK)</td><td>8</td><td>123</td></tr>
<tr><td>9</td><td>Adin Hill (PRO)</td><td>7</td><td>108</td></tr>
<tr><td>10</td><td>Alex Nedeljkovic (LAV)</td><td>7</td><td>100</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Shutouts</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><th>GP</th><th>SO</th></tr></thead>
<tr><td>1</td><td>Ian Scott (CHR)</td><td>5</td><td>2</td></tr>
<tr><td>2</td><td>Adin Hill (PRO)</td><td>7</td><td>2</td></tr>
<tr><td>3</td><td>MacKenzie Blackwood (CHI)</td><td>8</td><td>2</td></tr>
<tr><td>4</td><td>Ken Appleby (ROC)</td><td>8</td><td>2</td></tr>
<tr><td>5</td><td>Oscar Dansk (STK)</td><td>8</td><td>2</td></tr>
<tr><td>6</td><td>Kevin Boyle (CHR)</td><td>3</td><td>1</td></tr>
<tr><td>7</td><td>Landon Bow (UTI)</td><td>6</td><td>1</td></tr>
<tr><td>8</td><td>Alex Nedeljkovic (LAV)</td><td>7</td><td>1</td></tr>
<tr><td>9</td><td>Brad Thiessen (CLE)</td><td>7</td><td>1</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Wins</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><th>GP</th><th>W</th></tr></thead>
<tr><td>1</td><td>Ken Appleby (ROC)</td><td>8</td><td>8</td></tr>
<tr><td>2</td><td>Oscar Dansk (STK)</td><td>8</td><td>8</td></tr>
<tr><td>3</td><td>Vitek Vanecek (MAN)</td><td>9</td><td>8</td></tr>
<tr><td>4</td><td>MacKenzie Blackwood (CHI)</td><td>8</td><td>7</td></tr>
<tr><td>5</td><td>Ian Scott (CHR)</td><td>5</td><td>5</td></tr>
<tr><td>6</td><td>Al Montoya (RCK)</td><td>5</td><td>5</td></tr>
<tr><td>7</td><td>Alex Nedeljkovic (LAV)</td><td>7</td><td>5</td></tr>
<tr><td>8</td><td>Adin Hill (PRO)</td><td>7</td><td>5</td></tr>
<tr><td>9</td><td>Tristan Jarry (SDG)</td><td>8</td><td>5</td></tr>
<tr><td>10</td><td>Landon Bow (UTI)</td><td>6</td><td>4</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Penalty Shots Percentage</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><td>PSA</td><th>PS SHT %</th></tr></thead>
<tr><td>1</td><td>Ryan Miller (BKR)</td><td>5</td><td>1.000</td></tr>
<tr><td>2</td><td>Ian Scott (CHR)</td><td>3</td><td>1.000</td></tr>
<tr><td>3</td><td>Adin Hill (PRO)</td><td>3</td><td>1.000</td></tr>
<tr><td>4</td><td>Aaron Dell (GRP)</td><td>5</td><td>0.800</td></tr>
<tr><td>5</td><td>Ken Appleby (ROC)</td><td>9</td><td>0.778</td></tr>
<tr><td>6</td><td>Alex Nedeljkovic (LAV)</td><td>9</td><td>0.667</td></tr>
<tr><td>7</td><td>Francois Brassard (SYR)</td><td>3</td><td>0.667</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Losses</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><th>GP</th><th>L</th></tr></thead>
<tr><td>1</td><td>Jean-Francois Berube (TEX)</td><td>9</td><td>6</td></tr>
<tr><td>2</td><td>Brad Thiessen (CLE)</td><td>7</td><td>4</td></tr>
<tr><td>3</td><td>Tristan Jarry (SDG)</td><td>8</td><td>3</td></tr>
<tr><td>4</td><td>Michal Neuvirth (SJB)</td><td>2</td><td>2</td></tr>
<tr><td>5</td><td>Landon Bow (UTI)</td><td>6</td><td>2</td></tr>
<tr><td>6</td><td>Francois Brassard (SYR)</td><td>7</td><td>2</td></tr>
<tr><td>7</td><td>Adin Hill (PRO)</td><td>7</td><td>2</td></tr>
<tr><td>8</td><td>Aaron Dell (GRP)</td><td>2</td><td>1</td></tr>
<tr><td>9</td><td>Alex Nedeljkovic (LAV)</td><td>7</td><td>1</td></tr>
<tr><td>10</td><td>MacKenzie Blackwood (CHI)</td><td>8</td><td>1</td></tr>
</table></td></tr>
</table>
<?php include "Footer.php";?>
