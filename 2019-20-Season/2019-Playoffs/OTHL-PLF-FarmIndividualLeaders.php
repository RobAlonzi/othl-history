<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<title>OTHL - Farm Individual Leaders</title>
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
<tr><td colspan="3"><h2 class="STHSFarmIndividualLeader_Players">Players</h2></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Goals</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>G</th></tr></thead>
<tr><td>1</td><td>Matthew Highmore (STK)</td><td>14</td><td>17</td></tr>
<tr><td>2</td><td>Joseph Blandisi (RCK)</td><td>22</td><td>17</td></tr>
<tr><td>3</td><td>Nathan Gerbe (CHR)</td><td>22</td><td>15</td></tr>
<tr><td>4</td><td>Peter Cehlarik (RCK)</td><td>22</td><td>14</td></tr>
<tr><td>5</td><td>Casey Mittelstadt (CHR)</td><td>22</td><td>12</td></tr>
<tr><td>6</td><td>Jesse Puljujarvi (CHR)</td><td>22</td><td>12</td></tr>
<tr><td>7</td><td>Brad Malone (STK)</td><td>14</td><td>11</td></tr>
<tr><td>8</td><td>Nick Paul (CHR)</td><td>22</td><td>11</td></tr>
<tr><td>9</td><td>Kiefer Sherwood (RCK)</td><td>22</td><td>11</td></tr>
<tr><td>10</td><td>Henrik Borgstrom (LAV)</td><td>13</td><td>10</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Assists</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>A</th></tr></thead>
<tr><td>1</td><td>Andy Andreoff (CHR)</td><td>22</td><td>20</td></tr>
<tr><td>2</td><td>Joseph Blandisi (RCK)</td><td>22</td><td>19</td></tr>
<tr><td>3</td><td>Michael Mersch (CHR)</td><td>22</td><td>18</td></tr>
<tr><td>4</td><td>Christian Jaros (CHR)</td><td>22</td><td>15</td></tr>
<tr><td>5</td><td>Max Veronneau (RCK)</td><td>22</td><td>14</td></tr>
<tr><td>6</td><td>Logan Brown (RCK)</td><td>22</td><td>14</td></tr>
<tr><td>7</td><td>Taro Hirose (STK)</td><td>14</td><td>12</td></tr>
<tr><td>8</td><td>Matthew Highmore (STK)</td><td>14</td><td>12</td></tr>
<tr><td>9</td><td>Casey Mittelstadt (CHR)</td><td>22</td><td>12</td></tr>
<tr><td>10</td><td>Kiefer Sherwood (RCK)</td><td>22</td><td>12</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Shots</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>SHT</th></tr></thead>
<tr><td>1</td><td>Casey Mittelstadt (CHR)</td><td>22</td><td>91</td></tr>
<tr><td>2</td><td>Jesse Puljujarvi (CHR)</td><td>22</td><td>78</td></tr>
<tr><td>3</td><td>Kiefer Sherwood (RCK)</td><td>22</td><td>74</td></tr>
<tr><td>4</td><td>Brad Malone (STK)</td><td>14</td><td>72</td></tr>
<tr><td>5</td><td>Joseph Blandisi (RCK)</td><td>22</td><td>68</td></tr>
<tr><td>6</td><td>Matthew Highmore (STK)</td><td>14</td><td>66</td></tr>
<tr><td>7</td><td>Peter Cehlarik (RCK)</td><td>22</td><td>62</td></tr>
<tr><td>8</td><td>Michael Mersch (CHR)</td><td>22</td><td>62</td></tr>
<tr><td>9</td><td>Nathan Gerbe (CHR)</td><td>22</td><td>61</td></tr>
<tr><td>10</td><td>Kalle Kossila (LAV)</td><td>14</td><td>59</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Shots %</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>SHT %</th></tr></thead>
<tr><td>1</td><td>Nic Petan (UTI)</td><td>10</td><td>30.43%</td></tr>
<tr><td>2</td><td>Noah Juulsen (PRO)</td><td>7</td><td>30.00%</td></tr>
<tr><td>3</td><td>Joel L'Esperance (UTI)</td><td>10</td><td>26.09%</td></tr>
<tr><td>4</td><td>Eric Robinson (BKR)</td><td>13</td><td>25.93%</td></tr>
<tr><td>5</td><td>Dylan Sikura (CHR)</td><td>22</td><td>25.81%</td></tr>
<tr><td>6</td><td>Matthew Highmore (STK)</td><td>14</td><td>25.76%</td></tr>
<tr><td>7</td><td>Jack Roslovic (STK)</td><td>14</td><td>25.00%</td></tr>
<tr><td>8</td><td>Joseph Blandisi (RCK)</td><td>22</td><td>25.00%</td></tr>
<tr><td>9</td><td>Nathan Gerbe (CHR)</td><td>22</td><td>24.59%</td></tr>
<tr><td>10</td><td>Henrik Borgstrom (LAV)</td><td>13</td><td>23.81%</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Centers</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PTS</th></tr></thead>
<tr><td>1</td><td>Joseph Blandisi (RCK)</td><td>22</td><td>17-19-36</td></tr>
<tr><td>2</td><td>Casey Mittelstadt (CHR)</td><td>22</td><td>12-12-24</td></tr>
<tr><td>3</td><td>Andy Andreoff (CHR)</td><td>22</td><td>4-20-24</td></tr>
<tr><td>4</td><td>Brad Malone (STK)</td><td>14</td><td>11-11-22</td></tr>
<tr><td>5</td><td>Nick Paul (CHR)</td><td>22</td><td>11-10-21</td></tr>
<tr><td>6</td><td>Christoffer Ehn (STK)</td><td>14</td><td>10-11-21</td></tr>
<tr><td>7</td><td>Austin Czarnik (RCK)</td><td>22</td><td>10-11-21</td></tr>
<tr><td>8</td><td>Logan Brown (RCK)</td><td>22</td><td>7-14-21</td></tr>
<tr><td>9</td><td>Dylan Sikura (CHR)</td><td>22</td><td>8-12-20</td></tr>
<tr><td>10</td><td>Henrik Borgstrom (LAV)</td><td>13</td><td>10-7-17</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Left Wings</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PTS</th></tr></thead>
<tr><td>1</td><td>Joseph Blandisi (RCK)</td><td>22</td><td>17-19-36</td></tr>
<tr><td>2</td><td>Matthew Highmore (STK)</td><td>14</td><td>17-12-29</td></tr>
<tr><td>3</td><td>Michael Mersch (CHR)</td><td>22</td><td>10-18-28</td></tr>
<tr><td>4</td><td>Nathan Gerbe (CHR)</td><td>22</td><td>15-11-26</td></tr>
<tr><td>5</td><td>Casey Mittelstadt (CHR)</td><td>22</td><td>12-12-24</td></tr>
<tr><td>6</td><td>Andy Andreoff (CHR)</td><td>22</td><td>4-20-24</td></tr>
<tr><td>7</td><td>Kiefer Sherwood (RCK)</td><td>22</td><td>11-12-23</td></tr>
<tr><td>8</td><td>Brad Malone (STK)</td><td>14</td><td>11-11-22</td></tr>
<tr><td>9</td><td>Peter Cehlarik (RCK)</td><td>22</td><td>14-7-21</td></tr>
<tr><td>10</td><td>Nick Paul (CHR)</td><td>22</td><td>11-10-21</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Right Wings</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PTS</th></tr></thead>
<tr><td>1</td><td>Matthew Highmore (STK)</td><td>14</td><td>17-12-29</td></tr>
<tr><td>2</td><td>Nathan Gerbe (CHR)</td><td>22</td><td>15-11-26</td></tr>
<tr><td>3</td><td>Jesse Puljujarvi (CHR)</td><td>22</td><td>12-11-23</td></tr>
<tr><td>4</td><td>Kiefer Sherwood (RCK)</td><td>22</td><td>11-12-23</td></tr>
<tr><td>5</td><td>Peter Cehlarik (RCK)</td><td>22</td><td>14-7-21</td></tr>
<tr><td>6</td><td>Christoffer Ehn (STK)</td><td>14</td><td>10-11-21</td></tr>
<tr><td>7</td><td>Austin Czarnik (RCK)</td><td>22</td><td>10-11-21</td></tr>
<tr><td>8</td><td>Dylan Sikura (CHR)</td><td>22</td><td>8-12-20</td></tr>
<tr><td>9</td><td>Max Veronneau (RCK)</td><td>22</td><td>6-14-20</td></tr>
<tr><td>10</td><td>Valentin Zykov (RCK)</td><td>22</td><td>7-12-19</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Defenseman</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PTS</th></tr></thead>
<tr><td>1</td><td>Christian Jaros (CHR)</td><td>22</td><td>1-15-16</td></tr>
<tr><td>2</td><td>Samuel Morin (STK)</td><td>14</td><td>3-11-14</td></tr>
<tr><td>3</td><td>Steven Santini (STK)</td><td>11</td><td>4-8-12</td></tr>
<tr><td>4</td><td>Yannick Weber (ROC)</td><td>10</td><td>2-9-11</td></tr>
<tr><td>5</td><td>Jacob MacDonald (LAV)</td><td>14</td><td>2-9-11</td></tr>
<tr><td>6</td><td>Cameron Schilling (RCK)</td><td>22</td><td>0-9-9</td></tr>
<tr><td>7</td><td>Matt Bartkowski (RCK)</td><td>22</td><td>2-6-8</td></tr>
<tr><td>8</td><td>Jordan Subban (STK)</td><td>14</td><td>1-7-8</td></tr>
<tr><td>9</td><td>Jacob Larsson (UTI)</td><td>10</td><td>4-3-7</td></tr>
<tr><td>10</td><td>Chad Ruhwedel (ROC)</td><td>10</td><td>4-3-7</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Points per 20 Minutes</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>P/20</th></tr></thead>
<tr><td>1</td><td>Matthew Highmore (STK)</td><td>14</td><td>2.22</td></tr>
<tr><td>2</td><td>Rudolfs Balcers (UTI)</td><td>10</td><td>1.88</td></tr>
<tr><td>3</td><td>Brad Malone (STK)</td><td>14</td><td>1.78</td></tr>
<tr><td>4</td><td>Nic Petan (UTI)</td><td>10</td><td>1.72</td></tr>
<tr><td>5</td><td>Joel L'Esperance (UTI)</td><td>10</td><td>1.62</td></tr>
<tr><td>6</td><td>Logan O'Connor (UTI)</td><td>10</td><td>1.61</td></tr>
<tr><td>7</td><td>Christoffer Ehn (STK)</td><td>14</td><td>1.48</td></tr>
<tr><td>8</td><td>Michael Mersch (CHR)</td><td>22</td><td>1.47</td></tr>
<tr><td>9</td><td>Joseph Blandisi (RCK)</td><td>22</td><td>1.46</td></tr>
<tr><td>10</td><td>Valeri Nichushkin (UTI)</td><td>10</td><td>1.44</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Face-Off %</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>FO %</th></tr></thead>
<tr><td>1</td><td>Kalle Kossila (LAV)</td><td>14</td><td>75.68%</td></tr>
<tr><td>2</td><td>Joseph Blandisi (RCK)</td><td>22</td><td>69.92%</td></tr>
<tr><td>3</td><td>Logan Brown (RCK)</td><td>22</td><td>69.34%</td></tr>
<tr><td>4</td><td>Gabriel Dumont (UTI)</td><td>10</td><td>67.58%</td></tr>
<tr><td>5</td><td>Henrik Borgstrom (LAV)</td><td>13</td><td>66.49%</td></tr>
<tr><td>6</td><td>Aleksi Saarela (CHR)</td><td>11</td><td>65.67%</td></tr>
<tr><td>7</td><td>Adam Tambellini (LAV)</td><td>14</td><td>65.11%</td></tr>
<tr><td>8</td><td>Griffen Molino (RCK)</td><td>11</td><td>65.00%</td></tr>
<tr><td>9</td><td>Dominic Toninato (BKR)</td><td>13</td><td>64.56%</td></tr>
<tr><td>10</td><td>Nick Schmaltz (BKR)</td><td>13</td><td>64.42%</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Plus/Minus</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>+/-</th></tr></thead>
<tr><td>1</td><td>Alex Schoenborn (LAV)</td><td>14</td><td>18</td></tr>
<tr><td>2</td><td>Matthew Highmore (STK)</td><td>14</td><td>16</td></tr>
<tr><td>3</td><td>Joseph Blandisi (RCK)</td><td>22</td><td>16</td></tr>
<tr><td>4</td><td>Brad Malone (STK)</td><td>14</td><td>15</td></tr>
<tr><td>5</td><td>Matt Lorito (UTI)</td><td>10</td><td>13</td></tr>
<tr><td>6</td><td>Brogan Rafferty (UTI)</td><td>10</td><td>12</td></tr>
<tr><td>7</td><td>Sheldon Rempal (LAV)</td><td>14</td><td>11</td></tr>
<tr><td>8</td><td>Austen Brassard (LAV)</td><td>14</td><td>11</td></tr>
<tr><td>9</td><td>Valeri Nichushkin (UTI)</td><td>10</td><td>10</td></tr>
<tr><td>10</td><td>Christoffer Ehn (STK)</td><td>14</td><td>10</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Penalty Minutes</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PIM</th></tr></thead>
<tr><td>1</td><td>Christian Jaros (CHR)</td><td>22</td><td>44</td></tr>
<tr><td>2</td><td>Matt Bartkowski (RCK)</td><td>22</td><td>39</td></tr>
<tr><td>3</td><td>Jake Dotchin (PRO)</td><td>9</td><td>33</td></tr>
<tr><td>4</td><td>Matt Tennyson (RCK)</td><td>22</td><td>33</td></tr>
<tr><td>5</td><td>Logan Brown (RCK)</td><td>22</td><td>31</td></tr>
<tr><td>6</td><td>T.J. Brennan (LAV)</td><td>14</td><td>25</td></tr>
<tr><td>7</td><td>Rasmus Andersson (CHR)</td><td>22</td><td>25</td></tr>
<tr><td>8</td><td>Michael Mersch (CHR)</td><td>22</td><td>25</td></tr>
<tr><td>9</td><td>Alex Schoenborn (LAV)</td><td>14</td><td>23</td></tr>
<tr><td>10</td><td>Brian Lashoff (LAV)</td><td>14</td><td>23</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Shots Blocked</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>SB</th></tr></thead>
<tr><td>1</td><td>Casey Mittelstadt (CHR)</td><td>22</td><td>26</td></tr>
<tr><td>2</td><td>Dylan Sikura (CHR)</td><td>22</td><td>23</td></tr>
<tr><td>3</td><td>Jesse Puljujarvi (CHR)</td><td>22</td><td>21</td></tr>
<tr><td>4</td><td>Christian Jaros (CHR)</td><td>22</td><td>21</td></tr>
<tr><td>5</td><td>Matt Bartkowski (RCK)</td><td>22</td><td>19</td></tr>
<tr><td>6</td><td>Ryan Graves (BKR)</td><td>13</td><td>17</td></tr>
<tr><td>7</td><td>Jordan Subban (STK)</td><td>14</td><td>17</td></tr>
<tr><td>8</td><td>Chad Ruhwedel (ROC)</td><td>10</td><td>16</td></tr>
<tr><td>9</td><td>Justin Holl (RCK)</td><td>22</td><td>15</td></tr>
<tr><td>10</td><td>Zach Werenski (RCK)</td><td>11</td><td>14</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Rookies</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PTS</th></tr></thead>
<tr><td>1</td><td>Casey Mittelstadt (CHR)</td><td>22</td><td>12-12-24</td></tr>
<tr><td>2</td><td>Kiefer Sherwood (RCK)</td><td>22</td><td>11-12-23</td></tr>
<tr><td>3</td><td>Christoffer Ehn (STK)</td><td>14</td><td>10-11-21</td></tr>
<tr><td>4</td><td>Logan Brown (RCK)</td><td>22</td><td>7-14-21</td></tr>
<tr><td>5</td><td>Dylan Sikura (CHR)</td><td>22</td><td>8-12-20</td></tr>
<tr><td>6</td><td>Max Veronneau (RCK)</td><td>22</td><td>6-14-20</td></tr>
<tr><td>7</td><td>Henrik Borgstrom (LAV)</td><td>13</td><td>10-7-17</td></tr>
<tr><td>8</td><td>Matt Luff (LAV)</td><td>14</td><td>8-8-16</td></tr>
<tr><td>9</td><td>Luke Kunin (BKR)</td><td>13</td><td>7-9-16</td></tr>
<tr><td>10</td><td>Rudolfs Balcers (UTI)</td><td>10</td><td>5-11-16</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Hits</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>HIT</th></tr></thead>
<tr><td>1</td><td>Christian Jaros (CHR)</td><td>22</td><td>63</td></tr>
<tr><td>2</td><td>Adam Erne (RCK)</td><td>22</td><td>58</td></tr>
<tr><td>3</td><td>Matt Tennyson (RCK)</td><td>22</td><td>50</td></tr>
<tr><td>4</td><td>Andy Andreoff (CHR)</td><td>22</td><td>50</td></tr>
<tr><td>5</td><td>Jake Dotchin (PRO)</td><td>9</td><td>48</td></tr>
<tr><td>6</td><td>Jesse Puljujarvi (CHR)</td><td>22</td><td>46</td></tr>
<tr><td>7</td><td>Nick Paul (CHR)</td><td>22</td><td>42</td></tr>
<tr><td>8</td><td>Brian Lashoff (LAV)</td><td>14</td><td>41</td></tr>
<tr><td>9</td><td>Brad Malone (STK)</td><td>14</td><td>41</td></tr>
<tr><td>10</td><td>Adam Tambellini (LAV)</td><td>14</td><td>36</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Power Play Goals</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PP</th></tr></thead>
<tr><td>1</td><td>Jesse Puljujarvi (CHR)</td><td>22</td><td>6</td></tr>
<tr><td>2</td><td>Casey Mittelstadt (CHR)</td><td>22</td><td>5</td></tr>
<tr><td>3</td><td>Colton White (CHI)</td><td>6</td><td>4</td></tr>
<tr><td>4</td><td>Matthew Highmore (STK)</td><td>14</td><td>4</td></tr>
<tr><td>5</td><td>Kiefer Sherwood (RCK)</td><td>22</td><td>4</td></tr>
<tr><td>6</td><td>Nathan Gerbe (CHR)</td><td>22</td><td>4</td></tr>
<tr><td>7</td><td>Noah Juulsen (PRO)</td><td>7</td><td>3</td></tr>
<tr><td>8</td><td>Ross Johnston (ROC)</td><td>10</td><td>3</td></tr>
<tr><td>9</td><td>Steven Santini (STK)</td><td>11</td><td>3</td></tr>
<tr><td>10</td><td>Henrik Borgstrom (LAV)</td><td>13</td><td>3</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Short Handed Goals</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>SH</th></tr></thead>
<tr><td>1</td><td>Dominic Toninato (BKR)</td><td>13</td><td>1</td></tr>
<tr><td>2</td><td>Luke Kunin (BKR)</td><td>13</td><td>1</td></tr>
<tr><td>3</td><td>Casey Mittelstadt (CHR)</td><td>22</td><td>1</td></tr>
<tr><td>4</td><td>Joseph Blandisi (RCK)</td><td>22</td><td>1</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Game Winning Goals</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>GW</th></tr></thead>
<tr><td>1</td><td>Joseph Blandisi (RCK)</td><td>22</td><td>4</td></tr>
<tr><td>2</td><td>Brad Malone (STK)</td><td>14</td><td>3</td></tr>
<tr><td>3</td><td>Austin Czarnik (RCK)</td><td>22</td><td>3</td></tr>
<tr><td>4</td><td>Jesse Puljujarvi (CHR)</td><td>22</td><td>3</td></tr>
<tr><td>5</td><td>Logan Brown (RCK)</td><td>22</td><td>3</td></tr>
<tr><td>6</td><td>Nathan Gerbe (CHR)</td><td>22</td><td>3</td></tr>
<tr><td>7</td><td>Michael Mersch (CHR)</td><td>22</td><td>3</td></tr>
<tr><td>8</td><td>Chad Ruhwedel (ROC)</td><td>10</td><td>2</td></tr>
<tr><td>9</td><td>Luke Kunin (BKR)</td><td>13</td><td>2</td></tr>
<tr><td>10</td><td>Matt Luff (LAV)</td><td>14</td><td>2</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Game Tying Goals</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>GT</th></tr></thead>
<tr><td>1</td><td>Logan O'Connor (UTI)</td><td>10</td><td>2</td></tr>
<tr><td>2</td><td>Joseph Blandisi (RCK)</td><td>22</td><td>2</td></tr>
<tr><td>3</td><td>Jesse Puljujarvi (CHR)</td><td>22</td><td>2</td></tr>
<tr><td>4</td><td>Anthony Cirelli (BKR)</td><td>6</td><td>1</td></tr>
<tr><td>5</td><td>Nic Petan (UTI)</td><td>10</td><td>1</td></tr>
<tr><td>6</td><td>Ross Johnston (ROC)</td><td>10</td><td>1</td></tr>
<tr><td>7</td><td>Yannick Weber (ROC)</td><td>10</td><td>1</td></tr>
<tr><td>8</td><td>Sebastian Aho (RCK)</td><td>11</td><td>1</td></tr>
<tr><td>9</td><td>Adam Johnson (BKR)</td><td>13</td><td>1</td></tr>
<tr><td>10</td><td>Adam Tambellini (LAV)</td><td>14</td><td>1</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Empty Net Goals</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>ENG</th></tr></thead>
<tr><td>1</td><td>Nick Paul (CHR)</td><td>22</td><td>1</td></tr>
<tr><td>2</td><td>Austin Czarnik (RCK)</td><td>22</td><td>1</td></tr>
<tr><td>3</td><td>Nathan Gerbe (CHR)</td><td>22</td><td>1</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Minutes Played</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>MP</th></tr></thead>
<tr><td>1</td><td>Casey Mittelstadt (CHR)</td><td>22</td><td>513</td></tr>
<tr><td>2</td><td>Joseph Blandisi (RCK)</td><td>22</td><td>492</td></tr>
<tr><td>3</td><td>Matt Tennyson (RCK)</td><td>22</td><td>488</td></tr>
<tr><td>4</td><td>Adam Erne (RCK)</td><td>22</td><td>483</td></tr>
<tr><td>5</td><td>Cameron Schilling (RCK)</td><td>22</td><td>474</td></tr>
<tr><td>6</td><td>Logan Brown (RCK)</td><td>22</td><td>452</td></tr>
<tr><td>7</td><td>Austin Czarnik (RCK)</td><td>22</td><td>449</td></tr>
<tr><td>8</td><td>Matt Bartkowski (RCK)</td><td>22</td><td>428</td></tr>
<tr><td>9</td><td>Kiefer Sherwood (RCK)</td><td>22</td><td>417</td></tr>
<tr><td>10</td><td>Andy Andreoff (CHR)</td><td>22</td><td>413</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Hat Tricks</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>HT</th></tr></thead>
<tr><td>1</td><td>Nic Petan (UTI)</td><td>10</td><td>1</td></tr>
<tr><td>2</td><td>Jacob Larsson (UTI)</td><td>10</td><td>1</td></tr>
<tr><td>3</td><td>Turner Elson (ROC)</td><td>10</td><td>1</td></tr>
<tr><td>4</td><td>Dominic Toninato (BKR)</td><td>13</td><td>1</td></tr>
<tr><td>5</td><td>Nick Schmaltz (BKR)</td><td>13</td><td>1</td></tr>
<tr><td>6</td><td>Kalle Kossila (LAV)</td><td>14</td><td>1</td></tr>
<tr><td>7</td><td>Matthew Highmore (STK)</td><td>14</td><td>1</td></tr>
<tr><td>8</td><td>Brad Malone (STK)</td><td>14</td><td>1</td></tr>
<tr><td>9</td><td>Casey Mittelstadt (CHR)</td><td>22</td><td>1</td></tr>
<tr><td>10</td><td>Nathan Gerbe (CHR)</td><td>22</td><td>1</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Goal Scoring Streak</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>GS</th></tr></thead>
<tr><td>1</td><td>Joseph Blandisi (RCK)</td><td>22</td><td>4</td></tr>
<tr><td>2</td><td>Colton White (CHI)</td><td>6</td><td>3</td></tr>
<tr><td>3</td><td>Rudolfs Balcers (UTI)</td><td>10</td><td>3</td></tr>
<tr><td>4</td><td>Gabriel Dumont (UTI)</td><td>10</td><td>3</td></tr>
<tr><td>5</td><td>Casey Mittelstadt (CHR)</td><td>22</td><td>3</td></tr>
<tr><td>6</td><td>A.J. Greer (HER)</td><td>4</td><td>2</td></tr>
<tr><td>7</td><td>Clark Bishop (MAN)</td><td>5</td><td>2</td></tr>
<tr><td>8</td><td>Daniel O'Regan (SPR)</td><td>4</td><td>1</td></tr>
<tr><td>9</td><td>Morgan Klimchuk (SDG)</td><td>5</td><td>1</td></tr>
<tr><td>10</td><td>John Quenneville (MAN)</td><td>5</td><td>1</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Point Scoring Streak</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PS</th></tr></thead>
<tr><td>1</td><td>Casey Mittelstadt (CHR)</td><td>22</td><td>5</td></tr>
<tr><td>2</td><td>Patrick Russell (CLE)</td><td>5</td><td>4</td></tr>
<tr><td>3</td><td>Daniel Brickley (CHI)</td><td>6</td><td>4</td></tr>
<tr><td>4</td><td>Joseph Blandisi (RCK)</td><td>22</td><td>4</td></tr>
<tr><td>5</td><td>Dillon Dube (SDG)</td><td>5</td><td>3</td></tr>
<tr><td>6</td><td>John Quenneville (MAN)</td><td>5</td><td>3</td></tr>
<tr><td>7</td><td>Warren Foegele (SDG)</td><td>5</td><td>3</td></tr>
<tr><td>8</td><td>Clark Bishop (MAN)</td><td>5</td><td>3</td></tr>
<tr><td>9</td><td>Eeli Tolvanen (MAN)</td><td>5</td><td>3</td></tr>
<tr><td>10</td><td>Nicolas Kerdiles (SDG)</td><td>5</td><td>3</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Hits Taken</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>HTT</th></tr></thead>
<tr><td>1</td><td>Casey Mittelstadt (CHR)</td><td>22</td><td>60</td></tr>
<tr><td>2</td><td>Jesse Puljujarvi (CHR)</td><td>22</td><td>55</td></tr>
<tr><td>3</td><td>Andy Andreoff (CHR)</td><td>22</td><td>50</td></tr>
<tr><td>4</td><td>Logan Brown (RCK)</td><td>22</td><td>48</td></tr>
<tr><td>5</td><td>Henrik Borgstrom (LAV)</td><td>13</td><td>47</td></tr>
<tr><td>6</td><td>Brad Malone (STK)</td><td>14</td><td>45</td></tr>
<tr><td>7</td><td>Nathan Gerbe (CHR)</td><td>22</td><td>45</td></tr>
<tr><td>8</td><td>Matthew Highmore (STK)</td><td>14</td><td>36</td></tr>
<tr><td>9</td><td>Dylan Sikura (CHR)</td><td>22</td><td>36</td></tr>
<tr><td>10</td><td>Michael Mersch (CHR)</td><td>22</td><td>36</td></tr>
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
<tr><td>1</td><td>Andrew Campbell (HER)</td><td>4</td><td>1</td></tr>
<tr><td>2</td><td>Cameron Gaunce (LVP)</td><td>4</td><td>1</td></tr>
<tr><td>3</td><td>Brian Strait (MAN)</td><td>5</td><td>1</td></tr>
<tr><td>4</td><td>Daniel Brickley (CHI)</td><td>6</td><td>1</td></tr>
<tr><td>5</td><td>Anthony Angello (PRO)</td><td>9</td><td>1</td></tr>
<tr><td>6</td><td>Jake Dotchin (PRO)</td><td>9</td><td>1</td></tr>
<tr><td>7</td><td>Logan O'Connor (UTI)</td><td>10</td><td>1</td></tr>
<tr><td>8</td><td>Jacob Middleton (UTI)</td><td>10</td><td>1</td></tr>
<tr><td>9</td><td>Aleksi Saarela (CHR)</td><td>11</td><td>1</td></tr>
<tr><td>10</td><td>Zach Whitecloud (BKR)</td><td>13</td><td>1</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Fight Won</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>FW   </th></tr></thead>
<tr><td>1</td><td>Andrew Campbell (HER)</td><td>4</td><td>1</td></tr>
<tr><td>2</td><td>Daniel Brickley (CHI)</td><td>6</td><td>1</td></tr>
<tr><td>3</td><td>Jake Dotchin (PRO)</td><td>9</td><td>1</td></tr>
<tr><td>4</td><td>Logan O'Connor (UTI)</td><td>10</td><td>1</td></tr>
<tr><td>5</td><td>Jarred Tinordi (BKR)</td><td>13</td><td>1</td></tr>
<tr><td>6</td><td>Rasmus Andersson (CHR)</td><td>22</td><td>1</td></tr>
<tr><td>7</td><td>Matt Tennyson (RCK)</td><td>22</td><td>1</td></tr>
</table></td></tr>
<tr><td colspan="3"><h2 class="STHSFarmIndividualLeader_Goalies">Goalies </h2></td></tr><tr>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Save Percentage</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><th>GP</th><th>SAVE %</th></tr></thead>
<tr><td>1</td><td>Matthew Villalta (PRO)</td><td>9</td><td>0.899</td></tr>
<tr><td>2</td><td>Alex Nedeljkovic (LAV)</td><td>14</td><td>0.879</td></tr>
<tr><td>3</td><td>Ken Appleby (ROC)</td><td>10</td><td>0.877</td></tr>
<tr><td>4</td><td>Oscar Dansk (STK)</td><td>14</td><td>0.872</td></tr>
<tr><td>5</td><td>Kevin Boyle (CHR)</td><td>22</td><td>0.865</td></tr>
<tr><td>6</td><td>Scott Wedgewood (BKR)</td><td>12</td><td>0.864</td></tr>
<tr><td>7</td><td>Al Montoya (RCK)</td><td>22</td><td>0.858</td></tr>
<tr><td>8</td><td>Cory Schneider (UTI)</td><td>10</td><td>0.847</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Goals Against Average</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><th>GP</th><th>GAA</th></tr></thead>
<tr><td>1</td><td>Alex Nedeljkovic (LAV)</td><td>14</td><td>1.99</td></tr>
<tr><td>2</td><td>Matthew Villalta (PRO)</td><td>9</td><td>2.33</td></tr>
<tr><td>3</td><td>Scott Wedgewood (BKR)</td><td>12</td><td>2.41</td></tr>
<tr><td>4</td><td>Oscar Dansk (STK)</td><td>14</td><td>2.53</td></tr>
<tr><td>5</td><td>Al Montoya (RCK)</td><td>22</td><td>2.92</td></tr>
<tr><td>6</td><td>Cory Schneider (UTI)</td><td>10</td><td>3.06</td></tr>
<tr><td>7</td><td>Ken Appleby (ROC)</td><td>10</td><td>3.19</td></tr>
<tr><td>8</td><td>Kevin Boyle (CHR)</td><td>22</td><td>3.37</td></tr>
<tr><td colspan="4" class="STHSCenter">No Result</td></tr></table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Minutes Played</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><th>GP</th><th>MP</th></tr></thead>
<tr><td>1</td><td>Al Montoya (RCK)</td><td>22</td><td>1,233</td></tr>
<tr><td>2</td><td>Kevin Boyle (CHR)</td><td>22</td><td>1,210</td></tr>
<tr><td>3</td><td>Alex Nedeljkovic (LAV)</td><td>14</td><td>845</td></tr>
<tr><td>4</td><td>Oscar Dansk (STK)</td><td>14</td><td>830</td></tr>
<tr><td>5</td><td>Scott Wedgewood (BKR)</td><td>12</td><td>721</td></tr>
<tr><td>6</td><td>Ken Appleby (ROC)</td><td>10</td><td>584</td></tr>
<tr><td>7</td><td>Matthew Villalta (PRO)</td><td>9</td><td>540</td></tr>
<tr><td>8</td><td>Cory Schneider (UTI)</td><td>10</td><td>530</td></tr>
<tr><td>9</td><td>Jon Gillies (CHI)</td><td>6</td><td>332</td></tr>
<tr><td>10</td><td>Collin Delia (SPR)</td><td>5</td><td>308</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Shots Faced</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><th>GP</th><th>SHT</th></tr></thead>
<tr><td>1</td><td>Kevin Boyle (CHR)</td><td>22</td><td>502</td></tr>
<tr><td>2</td><td>Al Montoya (RCK)</td><td>22</td><td>424</td></tr>
<tr><td>3</td><td>Oscar Dansk (STK)</td><td>14</td><td>273</td></tr>
<tr><td>4</td><td>Ken Appleby (ROC)</td><td>10</td><td>253</td></tr>
<tr><td>5</td><td>Alex Nedeljkovic (LAV)</td><td>14</td><td>232</td></tr>
<tr><td>6</td><td>Scott Wedgewood (BKR)</td><td>12</td><td>214</td></tr>
<tr><td>7</td><td>Matthew Villalta (PRO)</td><td>9</td><td>207</td></tr>
<tr><td>8</td><td>Cory Schneider (UTI)</td><td>10</td><td>177</td></tr>
<tr><td>9</td><td>Jon Gillies (CHI)</td><td>6</td><td>172</td></tr>
<tr><td>10</td><td>Vitek Vanecek (MAN)</td><td>5</td><td>167</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Shutouts</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><th>GP</th><th>SO</th></tr></thead>
<tr><td>1</td><td>Alex Nedeljkovic (LAV)</td><td>14</td><td>3</td></tr>
<tr><td>2</td><td>Oscar Dansk (STK)</td><td>14</td><td>2</td></tr>
<tr><td>3</td><td>Brad Thiessen (CLE)</td><td>5</td><td>1</td></tr>
<tr><td>4</td><td>Matthew Villalta (PRO)</td><td>9</td><td>1</td></tr>
<tr><td>5</td><td>Ken Appleby (ROC)</td><td>10</td><td>1</td></tr>
<tr><td>6</td><td>Al Montoya (RCK)</td><td>22</td><td>1</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Wins</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><th>GP</th><th>W</th></tr></thead>
<tr><td>1</td><td>Al Montoya (RCK)</td><td>22</td><td>16</td></tr>
<tr><td>2</td><td>Kevin Boyle (CHR)</td><td>22</td><td>13</td></tr>
<tr><td>3</td><td>Alex Nedeljkovic (LAV)</td><td>14</td><td>10</td></tr>
<tr><td>4</td><td>Oscar Dansk (STK)</td><td>14</td><td>9</td></tr>
<tr><td>5</td><td>Scott Wedgewood (BKR)</td><td>12</td><td>7</td></tr>
<tr><td>6</td><td>Cory Schneider (UTI)</td><td>10</td><td>6</td></tr>
<tr><td>7</td><td>Ken Appleby (ROC)</td><td>10</td><td>5</td></tr>
<tr><td>8</td><td>Matthew Villalta (PRO)</td><td>9</td><td>4</td></tr>
<tr><td>9</td><td>Jon Gillies (CHI)</td><td>6</td><td>2</td></tr>
<tr><td>10</td><td>Collin Delia (SPR)</td><td>5</td><td>1</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Penalty Shots Percentage</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><td>PSA</td><th>PS SHT %</th></tr></thead>
<tr><td colspan="4" class="STHSCenter">No Result</td></tr></table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Losses</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><th>GP</th><th>L</th></tr></thead>
<tr><td>1</td><td>Kevin Boyle (CHR)</td><td>22</td><td>7</td></tr>
<tr><td>2</td><td>Oscar Dansk (STK)</td><td>14</td><td>5</td></tr>
<tr><td>3</td><td>Al Montoya (RCK)</td><td>22</td><td>5</td></tr>
<tr><td>4</td><td>Brad Thiessen (CLE)</td><td>5</td><td>4</td></tr>
<tr><td>5</td><td>Vitek Vanecek (MAN)</td><td>5</td><td>4</td></tr>
<tr><td>6</td><td>Jon Gillies (CHI)</td><td>6</td><td>4</td></tr>
<tr><td>7</td><td>Matthew Villalta (PRO)</td><td>9</td><td>4</td></tr>
<tr><td>8</td><td>Cory Schneider (UTI)</td><td>10</td><td>4</td></tr>
<tr><td>9</td><td>Ken Appleby (ROC)</td><td>10</td><td>4</td></tr>
<tr><td>10</td><td>Ryan Miller (LVP)</td><td>4</td><td>3</td></tr>
</table></td></tr>
</table>
<?php include "Footer.php";?>
