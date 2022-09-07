<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<title>OTHL - Farm Individual Leaders</title>
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
<tr><td colspan="3"><h2 class="STHSFarmIndividualLeader_Players">Players</h2></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Goals</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>G</th></tr></thead>
<tr><td>1</td><td>Zack MacEwen (SJB)</td><td>7</td><td>12</td></tr>
<tr><td>2</td><td>Max Comtois (RCK)</td><td>11</td><td>8</td></tr>
<tr><td>3</td><td>Adam Gaudette (BKR)</td><td>17</td><td>8</td></tr>
<tr><td>4</td><td>Joel Farabee (UTI)</td><td>21</td><td>8</td></tr>
<tr><td>5</td><td>Nic Petan (SJB)</td><td>7</td><td>7</td></tr>
<tr><td>6</td><td>Frederick Gaudreau (CLE)</td><td>13</td><td>7</td></tr>
<tr><td>7</td><td>Justin Dowling (MIL)</td><td>16</td><td>7</td></tr>
<tr><td>8</td><td>Max Jones (SPR)</td><td>19</td><td>7</td></tr>
<tr><td>9</td><td>Martin Necas (SPR)</td><td>19</td><td>7</td></tr>
<tr><td>10</td><td>Cole Ully (SJB)</td><td>7</td><td>6</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Assists</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>A</th></tr></thead>
<tr><td>1</td><td>Michael McLeod (UTI)</td><td>21</td><td>13</td></tr>
<tr><td>2</td><td>Dominik Simon (RCK)</td><td>11</td><td>12</td></tr>
<tr><td>3</td><td>Corey Perry (BKR)</td><td>17</td><td>11</td></tr>
<tr><td>4</td><td>Joel Farabee (UTI)</td><td>21</td><td>11</td></tr>
<tr><td>5</td><td>Jesper Boqvist (RCK)</td><td>11</td><td>10</td></tr>
<tr><td>6</td><td>Adam Gaudette (BKR)</td><td>17</td><td>10</td></tr>
<tr><td>7</td><td>Joseph Blandisi (RCK)</td><td>11</td><td>9</td></tr>
<tr><td>8</td><td>Valentin Zykov (RCK)</td><td>11</td><td>9</td></tr>
<tr><td>9</td><td>Dennis Cholowski (MIL)</td><td>16</td><td>9</td></tr>
<tr><td>10</td><td>Stefan Matteau (MIL)</td><td>16</td><td>9</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Shots</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>SHT</th></tr></thead>
<tr><td>1</td><td>Martin Necas (SPR)</td><td>19</td><td>57</td></tr>
<tr><td>2</td><td>Max Jones (SPR)</td><td>19</td><td>52</td></tr>
<tr><td>3</td><td>Kole Lind (CLE)</td><td>13</td><td>50</td></tr>
<tr><td>4</td><td>Max Comtois (RCK)</td><td>11</td><td>49</td></tr>
<tr><td>5</td><td>Morgan Frost (MIL)</td><td>16</td><td>48</td></tr>
<tr><td>6</td><td>Joel Farabee (UTI)</td><td>21</td><td>46</td></tr>
<tr><td>7</td><td>Alexander Nylander (SPR)</td><td>19</td><td>45</td></tr>
<tr><td>8</td><td>Luke Johnson (SPR)</td><td>19</td><td>43</td></tr>
<tr><td>9</td><td>Frederick Gaudreau (CLE)</td><td>13</td><td>40</td></tr>
<tr><td>10</td><td>Gaetan Haas (MIL)</td><td>16</td><td>38</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Shots %</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>SHT %</th></tr></thead>
<tr><td>1</td><td>Cole Ully (SJB)</td><td>7</td><td>40.00%</td></tr>
<tr><td>2</td><td>Zack MacEwen (SJB)</td><td>7</td><td>32.43%</td></tr>
<tr><td>3</td><td>Troy Terry (CHR)</td><td>7</td><td>29.41%</td></tr>
<tr><td>4</td><td>Nic Petan (SJB)</td><td>7</td><td>29.17%</td></tr>
<tr><td>5</td><td>Matt Lorito (SJB)</td><td>7</td><td>28.57%</td></tr>
<tr><td>6</td><td>Rhett Gardner (BKR)</td><td>9</td><td>27.27%</td></tr>
<tr><td>7</td><td>Alexander Volkov (CHR)</td><td>7</td><td>25.00%</td></tr>
<tr><td>8</td><td>Giorgio Estephan (PRO)</td><td>7</td><td>25.00%</td></tr>
<tr><td>9</td><td>Kiefer Sherwood (RCK)</td><td>11</td><td>25.00%</td></tr>
<tr><td>10</td><td>Glenn Gawdin (RCK)</td><td>11</td><td>24.00%</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Centers</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PTS</th></tr></thead>
<tr><td>1</td><td>Michael McLeod (UTI)</td><td>21</td><td>6-13-19</td></tr>
<tr><td>2</td><td>Adam Gaudette (BKR)</td><td>17</td><td>8-10-18</td></tr>
<tr><td>3</td><td>Zack MacEwen (SJB)</td><td>7</td><td>12-4-16</td></tr>
<tr><td>4</td><td>Justin Dowling (MIL)</td><td>16</td><td>7-9-16</td></tr>
<tr><td>5</td><td>Emil Bemstrom (SPR)</td><td>19</td><td>6-9-15</td></tr>
<tr><td>6</td><td>Joseph Blandisi (RCK)</td><td>11</td><td>5-9-14</td></tr>
<tr><td>7</td><td>Glenn Gawdin (RCK)</td><td>11</td><td>6-7-13</td></tr>
<tr><td>8</td><td>Greg Carey (MIL)</td><td>16</td><td>6-7-13</td></tr>
<tr><td>9</td><td>Brett Seney (UTI)</td><td>21</td><td>5-8-13</td></tr>
<tr><td>10</td><td>Dominic Toninato (BKR)</td><td>17</td><td>4-9-13</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Left Wings</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PTS</th></tr></thead>
<tr><td>1</td><td>Joel Farabee (UTI)</td><td>21</td><td>8-11-19</td></tr>
<tr><td>2</td><td>Dominik Simon (RCK)</td><td>11</td><td>5-12-17</td></tr>
<tr><td>3</td><td>Max Comtois (RCK)</td><td>11</td><td>8-8-16</td></tr>
<tr><td>4</td><td>Justin Dowling (MIL)</td><td>16</td><td>7-9-16</td></tr>
<tr><td>5</td><td>Max Jones (SPR)</td><td>19</td><td>7-8-15</td></tr>
<tr><td>6</td><td>Emil Bemstrom (SPR)</td><td>19</td><td>6-9-15</td></tr>
<tr><td>7</td><td>Jesper Boqvist (RCK)</td><td>11</td><td>5-10-15</td></tr>
<tr><td>8</td><td>Corey Perry (BKR)</td><td>17</td><td>4-11-15</td></tr>
<tr><td>9</td><td>Cole Ully (SJB)</td><td>7</td><td>6-8-14</td></tr>
<tr><td>10</td><td>Joseph Blandisi (RCK)</td><td>11</td><td>5-9-14</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Right Wings</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PTS</th></tr></thead>
<tr><td>1</td><td>Dominik Simon (RCK)</td><td>11</td><td>5-12-17</td></tr>
<tr><td>2</td><td>Zack MacEwen (SJB)</td><td>7</td><td>12-4-16</td></tr>
<tr><td>3</td><td>Justin Dowling (MIL)</td><td>16</td><td>7-9-16</td></tr>
<tr><td>4</td><td>Emil Bemstrom (SPR)</td><td>19</td><td>6-9-15</td></tr>
<tr><td>5</td><td>Corey Perry (BKR)</td><td>17</td><td>4-11-15</td></tr>
<tr><td>6</td><td>Cole Ully (SJB)</td><td>7</td><td>6-8-14</td></tr>
<tr><td>7</td><td>Dominic Toninato (BKR)</td><td>17</td><td>4-9-13</td></tr>
<tr><td>8</td><td>Frederick Gaudreau (CLE)</td><td>13</td><td>7-5-12</td></tr>
<tr><td>9</td><td>Buddy Robinson (BKR)</td><td>17</td><td>5-6-11</td></tr>
<tr><td>10</td><td>Chris Terry (ROC)</td><td>11</td><td>4-7-11</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Defenseman</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PTS</th></tr></thead>
<tr><td>1</td><td>Dennis Cholowski (MIL)</td><td>16</td><td>4-9-13</td></tr>
<tr><td>2</td><td>Jacob Larsson (UTI)</td><td>16</td><td>4-7-11</td></tr>
<tr><td>3</td><td>Dennis Gilbert (BKR)</td><td>17</td><td>4-7-11</td></tr>
<tr><td>4</td><td>Erik Brannstrom (SPR)</td><td>19</td><td>3-7-10</td></tr>
<tr><td>5</td><td>Jacob Middleton (UTI)</td><td>21</td><td>1-9-10</td></tr>
<tr><td>6</td><td>Matt Bartkowski (RCK)</td><td>11</td><td>1-8-9</td></tr>
<tr><td>7</td><td>Jeremy Lauzon (BKR)</td><td>17</td><td>1-8-9</td></tr>
<tr><td>8</td><td>Gavin Bayreuther (UTI)</td><td>21</td><td>1-8-9</td></tr>
<tr><td>9</td><td>Kevin Connauton (MIL)</td><td>16</td><td>0-9-9</td></tr>
<tr><td>10</td><td>Noah Hanifin (BKR)</td><td>8</td><td>2-6-8</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Points per 20 Minutes</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>P/20</th></tr></thead>
<tr><td>1</td><td>Zack MacEwen (SJB)</td><td>7</td><td>2.47</td></tr>
<tr><td>2</td><td>Cole Ully (SJB)</td><td>7</td><td>2.45</td></tr>
<tr><td>3</td><td>Turner Elson (ROC)</td><td>9</td><td>1.93</td></tr>
<tr><td>4</td><td>Nic Petan (SJB)</td><td>7</td><td>1.86</td></tr>
<tr><td>5</td><td>Dylan Sikura (SJB)</td><td>7</td><td>1.83</td></tr>
<tr><td>6</td><td>Jesper Boqvist (RCK)</td><td>11</td><td>1.76</td></tr>
<tr><td>7</td><td>Dominik Simon (RCK)</td><td>11</td><td>1.53</td></tr>
<tr><td>8</td><td>Joseph Blandisi (RCK)</td><td>11</td><td>1.50</td></tr>
<tr><td>9</td><td>Max Comtois (RCK)</td><td>11</td><td>1.29</td></tr>
<tr><td>10</td><td>Justin Dowling (MIL)</td><td>16</td><td>1.27</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Face-Off %</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>FO %</th></tr></thead>
<tr><td>1</td><td>Michael Rasmussen (WBS)</td><td>7</td><td>72.86%</td></tr>
<tr><td>2</td><td>Steven Fogarty (WBS)</td><td>7</td><td>71.07%</td></tr>
<tr><td>3</td><td>Glenn Gawdin (RCK)</td><td>11</td><td>70.79%</td></tr>
<tr><td>4</td><td>Logan Brown (RCK)</td><td>11</td><td>68.29%</td></tr>
<tr><td>5</td><td>Steven Lorentz (TOR)</td><td>11</td><td>67.52%</td></tr>
<tr><td>6</td><td>Sam Steel (SPR)</td><td>19</td><td>66.75%</td></tr>
<tr><td>7</td><td>Joseph Blandisi (RCK)</td><td>11</td><td>65.74%</td></tr>
<tr><td>8</td><td>Michael McCarron (SPR)</td><td>19</td><td>62.04%</td></tr>
<tr><td>9</td><td>Luke Johnson (SPR)</td><td>19</td><td>61.71%</td></tr>
<tr><td>10</td><td>Nolan Stevens (LVP)</td><td>7</td><td>60.78%</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Plus/Minus</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>+/-</th></tr></thead>
<tr><td>1</td><td>Marian Studenic (BKR)</td><td>9</td><td>12</td></tr>
<tr><td>2</td><td>Zach Whitecloud (BKR)</td><td>17</td><td>10</td></tr>
<tr><td>3</td><td>Zac Dalpe (RCK)</td><td>11</td><td>8</td></tr>
<tr><td>4</td><td>Givani Smith (BKR)</td><td>17</td><td>8</td></tr>
<tr><td>5</td><td>Brett Seney (UTI)</td><td>21</td><td>8</td></tr>
<tr><td>6</td><td>Gabriel Carlsson (UTI)</td><td>9</td><td>7</td></tr>
<tr><td>7</td><td>Ville Pokka (RCK)</td><td>11</td><td>7</td></tr>
<tr><td>8</td><td>Dominik Simon (RCK)</td><td>11</td><td>7</td></tr>
<tr><td>9</td><td>Morgan Frost (MIL)</td><td>16</td><td>7</td></tr>
<tr><td>10</td><td>Justin Dowling (MIL)</td><td>16</td><td>7</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Penalty Minutes</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PIM</th></tr></thead>
<tr><td>1</td><td>Dennis Gilbert (BKR)</td><td>17</td><td>53</td></tr>
<tr><td>2</td><td>Jacob Middleton (UTI)</td><td>21</td><td>41</td></tr>
<tr><td>3</td><td>Buddy Robinson (BKR)</td><td>17</td><td>36</td></tr>
<tr><td>4</td><td>Jeremy Lauzon (BKR)</td><td>17</td><td>32</td></tr>
<tr><td>5</td><td>Haydn Fleury (UTI)</td><td>21</td><td>32</td></tr>
<tr><td>6</td><td>Frederic Allard (UTI)</td><td>21</td><td>32</td></tr>
<tr><td>7</td><td>Dennis Robertson (MIL)</td><td>16</td><td>30</td></tr>
<tr><td>8</td><td>Alex Alexeyev (CHR)</td><td>7</td><td>29</td></tr>
<tr><td>9</td><td>Tage Thompson (ROC)</td><td>11</td><td>29</td></tr>
<tr><td>10</td><td>Michael McCarron (SPR)</td><td>19</td><td>29</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Shots Blocked</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>SB</th></tr></thead>
<tr><td>1</td><td>Kevin Connauton (MIL)</td><td>16</td><td>20</td></tr>
<tr><td>2</td><td>Jeremy Lauzon (BKR)</td><td>17</td><td>20</td></tr>
<tr><td>3</td><td>Tyler Wotherspoon (SPR)</td><td>19</td><td>20</td></tr>
<tr><td>4</td><td>Jacob Middleton (UTI)</td><td>21</td><td>20</td></tr>
<tr><td>5</td><td>Dennis Robertson (MIL)</td><td>16</td><td>19</td></tr>
<tr><td>6</td><td>Erik Brannstrom (SPR)</td><td>19</td><td>19</td></tr>
<tr><td>7</td><td>Parker Wotherspoon (SPR)</td><td>17</td><td>18</td></tr>
<tr><td>8</td><td>Dan Renouf (SPR)</td><td>19</td><td>17</td></tr>
<tr><td>9</td><td>Jordan Schmaltz (BKR)</td><td>17</td><td>16</td></tr>
<tr><td>10</td><td>Dennis Gilbert (BKR)</td><td>17</td><td>16</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Rookies</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PTS</th></tr></thead>
<tr><td>1</td><td>Joel Farabee (UTI)</td><td>21</td><td>8-11-19</td></tr>
<tr><td>2</td><td>Michael McLeod (UTI)</td><td>21</td><td>6-13-19</td></tr>
<tr><td>3</td><td>Max Comtois (RCK)</td><td>11</td><td>8-8-16</td></tr>
<tr><td>4</td><td>Emil Bemstrom (SPR)</td><td>19</td><td>6-9-15</td></tr>
<tr><td>5</td><td>Jesper Boqvist (RCK)</td><td>11</td><td>5-10-15</td></tr>
<tr><td>6</td><td>Gaetan Haas (MIL)</td><td>16</td><td>6-6-12</td></tr>
<tr><td>7</td><td>Morgan Frost (MIL)</td><td>16</td><td>6-5-11</td></tr>
<tr><td>8</td><td>Erik Brannstrom (SPR)</td><td>19</td><td>3-7-10</td></tr>
<tr><td>9</td><td>Martin Necas (SPR)</td><td>19</td><td>7-2-9</td></tr>
<tr><td>10</td><td>Rhett Gardner (BKR)</td><td>9</td><td>3-6-9</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Hits</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>HIT</th></tr></thead>
<tr><td>1</td><td>Dennis Gilbert (BKR)</td><td>17</td><td>54</td></tr>
<tr><td>2</td><td>Jacob Middleton (UTI)</td><td>21</td><td>48</td></tr>
<tr><td>3</td><td>Tommy Cross (CLE)</td><td>13</td><td>46</td></tr>
<tr><td>4</td><td>Jeremy Lauzon (BKR)</td><td>17</td><td>42</td></tr>
<tr><td>5</td><td>Dan Renouf (SPR)</td><td>19</td><td>42</td></tr>
<tr><td>6</td><td>Brian Lashoff (BKR)</td><td>17</td><td>38</td></tr>
<tr><td>7</td><td>Stefan Matteau (MIL)</td><td>16</td><td>37</td></tr>
<tr><td>8</td><td>Buddy Robinson (BKR)</td><td>17</td><td>35</td></tr>
<tr><td>9</td><td>Max Comtois (RCK)</td><td>11</td><td>34</td></tr>
<tr><td>10</td><td>Martin Necas (SPR)</td><td>19</td><td>34</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Power Play Goals</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PP</th></tr></thead>
<tr><td>1</td><td>Justin Dowling (MIL)</td><td>16</td><td>5</td></tr>
<tr><td>2</td><td>Max Comtois (RCK)</td><td>11</td><td>4</td></tr>
<tr><td>3</td><td>Cole Schneider (ROC)</td><td>11</td><td>4</td></tr>
<tr><td>4</td><td>Greg Carey (MIL)</td><td>16</td><td>4</td></tr>
<tr><td>5</td><td>Max Jones (SPR)</td><td>19</td><td>4</td></tr>
<tr><td>6</td><td>Kale Clague (CHI)</td><td>4</td><td>3</td></tr>
<tr><td>7</td><td>Troy Terry (CHR)</td><td>7</td><td>3</td></tr>
<tr><td>8</td><td>Zack MacEwen (SJB)</td><td>7</td><td>3</td></tr>
<tr><td>9</td><td>Dennis Cholowski (MIL)</td><td>16</td><td>3</td></tr>
<tr><td>10</td><td>Jacob Larsson (UTI)</td><td>16</td><td>3</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Short Handed Goals</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>SH</th></tr></thead>
<tr><td>1</td><td>Tyler Gaudet (TOR)</td><td>11</td><td>2</td></tr>
<tr><td>2</td><td>Aaron Ness (WBS)</td><td>7</td><td>1</td></tr>
<tr><td>3</td><td>Anthony Angello (PRO)</td><td>7</td><td>1</td></tr>
<tr><td>4</td><td>Luke Kunin (BKR)</td><td>8</td><td>1</td></tr>
<tr><td>5</td><td>Max Comtois (RCK)</td><td>11</td><td>1</td></tr>
<tr><td>6</td><td>Barrett Hayton (TOR)</td><td>11</td><td>1</td></tr>
<tr><td>7</td><td>Chris Terry (ROC)</td><td>11</td><td>1</td></tr>
<tr><td>8</td><td>Greg McKegg (CLE)</td><td>13</td><td>1</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Game Winning Goals</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>GW</th></tr></thead>
<tr><td>1</td><td>Lean Bergmann (MIL)</td><td>13</td><td>3</td></tr>
<tr><td>2</td><td>Gage Quinney (MIL)</td><td>3</td><td>2</td></tr>
<tr><td>3</td><td>Nic Petan (SJB)</td><td>7</td><td>2</td></tr>
<tr><td>4</td><td>Anton Blidh (UTI)</td><td>9</td><td>2</td></tr>
<tr><td>5</td><td>Rhett Gardner (BKR)</td><td>9</td><td>2</td></tr>
<tr><td>6</td><td>Carter Verhaeghe (ROC)</td><td>10</td><td>2</td></tr>
<tr><td>7</td><td>Kiefer Sherwood (RCK)</td><td>11</td><td>2</td></tr>
<tr><td>8</td><td>Cody Glass (TOR)</td><td>11</td><td>2</td></tr>
<tr><td>9</td><td>Michael Amadio (ROC)</td><td>11</td><td>2</td></tr>
<tr><td>10</td><td>Justin Kirkland (CLE)</td><td>13</td><td>2</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Game Tying Goals</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>GT</th></tr></thead>
<tr><td>1</td><td>Denis Malgin (CLE)</td><td>13</td><td>2</td></tr>
<tr><td>2</td><td>Frederick Gaudreau (CLE)</td><td>13</td><td>2</td></tr>
<tr><td>3</td><td>Gage Quinney (MIL)</td><td>3</td><td>1</td></tr>
<tr><td>4</td><td>Casey Mittelstadt (CHR)</td><td>7</td><td>1</td></tr>
<tr><td>5</td><td>Tyson Jost (WBS)</td><td>7</td><td>1</td></tr>
<tr><td>6</td><td>Alexander Volkov (CHR)</td><td>7</td><td>1</td></tr>
<tr><td>7</td><td>Zack MacEwen (SJB)</td><td>7</td><td>1</td></tr>
<tr><td>8</td><td>Anthony Angello (PRO)</td><td>7</td><td>1</td></tr>
<tr><td>9</td><td>Matt Lorito (SJB)</td><td>7</td><td>1</td></tr>
<tr><td>10</td><td>Noah Hanifin (BKR)</td><td>8</td><td>1</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Empty Net Goals</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>ENG</th></tr></thead>
<tr><td>1</td><td>Lawson Crouse (PRO)</td><td>7</td><td>1</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Minutes Played</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>MP</th></tr></thead>
<tr><td>1</td><td>Joel Farabee (UTI)</td><td>21</td><td>515</td></tr>
<tr><td>2</td><td>Gavin Bayreuther (UTI)</td><td>21</td><td>490</td></tr>
<tr><td>3</td><td>Haydn Fleury (UTI)</td><td>21</td><td>488</td></tr>
<tr><td>4</td><td>Brett Seney (UTI)</td><td>21</td><td>476</td></tr>
<tr><td>5</td><td>Jacob Middleton (UTI)</td><td>21</td><td>450</td></tr>
<tr><td>6</td><td>Erik Brannstrom (SPR)</td><td>19</td><td>446</td></tr>
<tr><td>7</td><td>Michael McLeod (UTI)</td><td>21</td><td>446</td></tr>
<tr><td>8</td><td>Alexandre Carrier (SPR)</td><td>19</td><td>428</td></tr>
<tr><td>9</td><td>Tyler Wotherspoon (SPR)</td><td>19</td><td>413</td></tr>
<tr><td>10</td><td>Alexander Nylander (SPR)</td><td>19</td><td>389</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Hat Tricks</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>HT</th></tr></thead>
<tr><td>1</td><td>Gage Quinney (MIL)</td><td>3</td><td>1</td></tr>
<tr><td>2</td><td>Troy Terry (CHR)</td><td>7</td><td>1</td></tr>
<tr><td>3</td><td>Zack MacEwen (SJB)</td><td>7</td><td>1</td></tr>
<tr><td>4</td><td>Kiefer Sherwood (RCK)</td><td>11</td><td>1</td></tr>
<tr><td>5</td><td>Dominik Simon (RCK)</td><td>11</td><td>1</td></tr>
<tr><td>6</td><td>Max Comtois (RCK)</td><td>11</td><td>1</td></tr>
<tr><td>7</td><td>Jesper Boqvist (RCK)</td><td>11</td><td>1</td></tr>
<tr><td>8</td><td>Glenn Gawdin (RCK)</td><td>11</td><td>1</td></tr>
<tr><td>9</td><td>Emil Bemstrom (SPR)</td><td>19</td><td>1</td></tr>
<tr><td>10</td><td>Martin Necas (SPR)</td><td>19</td><td>1</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Goal Scoring Streak</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>GS</th></tr></thead>
<tr><td>1</td><td>Zack MacEwen (SJB)</td><td>7</td><td>4</td></tr>
<tr><td>2</td><td>Greg Carey (MIL)</td><td>16</td><td>2</td></tr>
<tr><td>3</td><td>Logan O'Connor (UTI)</td><td>21</td><td>2</td></tr>
<tr><td>4</td><td>Eetu Luostarinen (MAN)</td><td>4</td><td>1</td></tr>
<tr><td>5</td><td>Vitaly Abramov (STK)</td><td>4</td><td>1</td></tr>
<tr><td>6</td><td>Kale Clague (CHI)</td><td>4</td><td>1</td></tr>
<tr><td>7</td><td>Rasmus Kupari (MAN)</td><td>4</td><td>1</td></tr>
<tr><td>8</td><td>Casey Mittelstadt (CHR)</td><td>7</td><td>1</td></tr>
<tr><td>9</td><td>Gabriel Gagne (WBS)</td><td>7</td><td>1</td></tr>
<tr><td>10</td><td>Alexander Volkov (CHR)</td><td>7</td><td>1</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Point Scoring Streak</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PS</th></tr></thead>
<tr><td>1</td><td>Zack MacEwen (SJB)</td><td>7</td><td>7</td></tr>
<tr><td>2</td><td>Vitaly Abramov (STK)</td><td>4</td><td>4</td></tr>
<tr><td>3</td><td>Michael McLeod (UTI)</td><td>21</td><td>4</td></tr>
<tr><td>4</td><td>Eetu Luostarinen (MAN)</td><td>4</td><td>3</td></tr>
<tr><td>5</td><td>Nick Merkley (STK)</td><td>4</td><td>3</td></tr>
<tr><td>6</td><td>Scott Wilson (MAN)</td><td>4</td><td>3</td></tr>
<tr><td>7</td><td>Gabriel Carlsson (UTI)</td><td>9</td><td>3</td></tr>
<tr><td>8</td><td>Chris Terry (ROC)</td><td>11</td><td>3</td></tr>
<tr><td>9</td><td>Joel Farabee (UTI)</td><td>21</td><td>3</td></tr>
<tr><td>10</td><td>Gavin Bayreuther (UTI)</td><td>21</td><td>3</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Hits Taken</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>HTT</th></tr></thead>
<tr><td>1</td><td>Joel Farabee (UTI)</td><td>21</td><td>59</td></tr>
<tr><td>2</td><td>Brett Seney (UTI)</td><td>21</td><td>55</td></tr>
<tr><td>3</td><td>Michael McLeod (UTI)</td><td>21</td><td>54</td></tr>
<tr><td>4</td><td>Luke Johnson (SPR)</td><td>19</td><td>52</td></tr>
<tr><td>5</td><td>Morgan Frost (MIL)</td><td>16</td><td>41</td></tr>
<tr><td>6</td><td>Sam Steel (SPR)</td><td>19</td><td>39</td></tr>
<tr><td>7</td><td>Cody Glass (TOR)</td><td>11</td><td>38</td></tr>
<tr><td>8</td><td>Steven Lorentz (TOR)</td><td>11</td><td>34</td></tr>
<tr><td>9</td><td>Filip Chlapik (CLE)</td><td>13</td><td>33</td></tr>
<tr><td>10</td><td>Garrett Pilon (UTI)</td><td>21</td><td>33</td></tr>
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
<tr><td>1</td><td>Steven Fogarty (WBS)</td><td>7</td><td>1</td></tr>
<tr><td>2</td><td>Gabriel Gagne (WBS)</td><td>7</td><td>1</td></tr>
<tr><td>3</td><td>Philipp Kurashev (CHR)</td><td>7</td><td>1</td></tr>
<tr><td>4</td><td>Alex Alexeyev (CHR)</td><td>7</td><td>1</td></tr>
<tr><td>5</td><td>Jaycob Megna (PRO)</td><td>7</td><td>1</td></tr>
<tr><td>6</td><td>Tage Thompson (ROC)</td><td>11</td><td>1</td></tr>
<tr><td>7</td><td>Keaton Middleton (TOR)</td><td>11</td><td>1</td></tr>
<tr><td>8</td><td>Oleg Sosunov (TOR)</td><td>11</td><td>1</td></tr>
<tr><td>9</td><td>Evan McEneny (CLE)</td><td>13</td><td>1</td></tr>
<tr><td>10</td><td>Greg McKegg (CLE)</td><td>13</td><td>1</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Fight Won</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>FW   </th></tr></thead>
<tr><td>1</td><td>Oleg Sosunov (TOR)</td><td>11</td><td>1</td></tr>
<tr><td>2</td><td>Evan McEneny (CLE)</td><td>13</td><td>1</td></tr>
<tr><td>3</td><td>Kevin Connauton (MIL)</td><td>16</td><td>1</td></tr>
<tr><td>4</td><td>Michael McCarron (SPR)</td><td>19</td><td>1</td></tr>
<tr><td>5</td><td>Jacob Middleton (UTI)</td><td>21</td><td>1</td></tr>
</table></td></tr>
<tr><td colspan="3"><h2 class="STHSFarmIndividualLeader_Goalies">Goalies </h2></td></tr><tr>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Save Percentage</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><th>GP</th><th>SAVE %</th></tr></thead>
<tr><td>1</td><td>Dan Vladar (SPR)</td><td>19</td><td>0.913</td></tr>
<tr><td>2</td><td>Connor Ingram (PRO)</td><td>7</td><td>0.903</td></tr>
<tr><td>3</td><td>Matiss Kivlenieks (CHR)</td><td>7</td><td>0.902</td></tr>
<tr><td>4</td><td>Alexandar Georgiev (UTI)</td><td>21</td><td>0.902</td></tr>
<tr><td>5</td><td>Michael Hutchinson (LVP)</td><td>7</td><td>0.893</td></tr>
<tr><td>6</td><td>Alex Lyon (CLE)</td><td>13</td><td>0.890</td></tr>
<tr><td>7</td><td>Jonas Johansson (ROC)</td><td>9</td><td>0.880</td></tr>
<tr><td>8</td><td>Pheonix Copley (MIL)</td><td>16</td><td>0.880</td></tr>
<tr><td>9</td><td>Jared Coreau (TOR)</td><td>11</td><td>0.874</td></tr>
<tr><td>10</td><td>Zane McIntyre (BKR)</td><td>17</td><td>0.869</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Goals Against Average</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><th>GP</th><th>GAA</th></tr></thead>
<tr><td>1</td><td>Dan Vladar (SPR)</td><td>19</td><td>1.58</td></tr>
<tr><td>2</td><td>Alexandar Georgiev (UTI)</td><td>21</td><td>1.66</td></tr>
<tr><td>3</td><td>Connor Ingram (PRO)</td><td>7</td><td>1.81</td></tr>
<tr><td>4</td><td>Michael Hutchinson (LVP)</td><td>7</td><td>1.91</td></tr>
<tr><td>5</td><td>Matiss Kivlenieks (CHR)</td><td>7</td><td>2.09</td></tr>
<tr><td>6</td><td>Jared Coreau (TOR)</td><td>11</td><td>2.20</td></tr>
<tr><td>7</td><td>Alex Lyon (CLE)</td><td>13</td><td>2.47</td></tr>
<tr><td>8</td><td>Pheonix Copley (MIL)</td><td>16</td><td>2.49</td></tr>
<tr><td>9</td><td>Jonas Johansson (ROC)</td><td>9</td><td>2.55</td></tr>
<tr><td>10</td><td>Zane McIntyre (BKR)</td><td>17</td><td>2.68</td></tr>
<tr><td colspan="4" class="STHSCenter">No Result</td></tr></table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Minutes Played</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><th>GP</th><th>MP</th></tr></thead>
<tr><td>1</td><td>Alexandar Georgiev (UTI)</td><td>21</td><td>1,337</td></tr>
<tr><td>2</td><td>Dan Vladar (SPR)</td><td>19</td><td>1,179</td></tr>
<tr><td>3</td><td>Zane McIntyre (BKR)</td><td>17</td><td>985</td></tr>
<tr><td>4</td><td>Pheonix Copley (MIL)</td><td>16</td><td>915</td></tr>
<tr><td>5</td><td>Jared Coreau (TOR)</td><td>11</td><td>765</td></tr>
<tr><td>6</td><td>Alex Lyon (CLE)</td><td>13</td><td>752</td></tr>
<tr><td>7</td><td>Jonas Johansson (ROC)</td><td>9</td><td>541</td></tr>
<tr><td>8</td><td>Matiss Kivlenieks (CHR)</td><td>7</td><td>516</td></tr>
<tr><td>9</td><td>Michael Hutchinson (LVP)</td><td>7</td><td>503</td></tr>
<tr><td>10</td><td>Connor Ingram (PRO)</td><td>7</td><td>465</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Shots Faced</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><th>GP</th><th>SHT</th></tr></thead>
<tr><td>1</td><td>Alexandar Georgiev (UTI)</td><td>21</td><td>376</td></tr>
<tr><td>2</td><td>Dan Vladar (SPR)</td><td>19</td><td>357</td></tr>
<tr><td>3</td><td>Zane McIntyre (BKR)</td><td>17</td><td>335</td></tr>
<tr><td>4</td><td>Pheonix Copley (MIL)</td><td>16</td><td>316</td></tr>
<tr><td>5</td><td>Alex Lyon (CLE)</td><td>13</td><td>283</td></tr>
<tr><td>6</td><td>Jared Coreau (TOR)</td><td>11</td><td>222</td></tr>
<tr><td>7</td><td>Jonas Johansson (ROC)</td><td>9</td><td>192</td></tr>
<tr><td>8</td><td>Matiss Kivlenieks (CHR)</td><td>7</td><td>184</td></tr>
<tr><td>9</td><td>Tom McCollum (WBS)</td><td>7</td><td>172</td></tr>
<tr><td>10</td><td>Michael Hutchinson (LVP)</td><td>7</td><td>150</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Shutouts</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><th>GP</th><th>SO</th></tr></thead>
<tr><td>1</td><td>Alexandar Georgiev (UTI)</td><td>21</td><td>5</td></tr>
<tr><td>2</td><td>Dan Vladar (SPR)</td><td>19</td><td>3</td></tr>
<tr><td>3</td><td>Connor Ingram (PRO)</td><td>7</td><td>1</td></tr>
<tr><td>4</td><td>Michael Hutchinson (LVP)</td><td>7</td><td>1</td></tr>
<tr><td>5</td><td>Jonas Johansson (ROC)</td><td>9</td><td>1</td></tr>
<tr><td>6</td><td>Jared Coreau (TOR)</td><td>11</td><td>1</td></tr>
<tr><td>7</td><td>Alex Lyon (CLE)</td><td>13</td><td>1</td></tr>
<tr><td>8</td><td>Pheonix Copley (MIL)</td><td>16</td><td>1</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Wins</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><th>GP</th><th>W</th></tr></thead>
<tr><td>1</td><td>Alexandar Georgiev (UTI)</td><td>21</td><td>16</td></tr>
<tr><td>2</td><td>Zane McIntyre (BKR)</td><td>17</td><td>12</td></tr>
<tr><td>3</td><td>Dan Vladar (SPR)</td><td>19</td><td>10</td></tr>
<tr><td>4</td><td>Pheonix Copley (MIL)</td><td>16</td><td>9</td></tr>
<tr><td>5</td><td>Jonas Johansson (ROC)</td><td>9</td><td>6</td></tr>
<tr><td>6</td><td>Alex Lyon (CLE)</td><td>13</td><td>6</td></tr>
<tr><td>7</td><td>Jared Coreau (TOR)</td><td>11</td><td>4</td></tr>
<tr><td>8</td><td>Tom McCollum (WBS)</td><td>7</td><td>3</td></tr>
<tr><td>9</td><td>Matiss Kivlenieks (CHR)</td><td>7</td><td>3</td></tr>
<tr><td>10</td><td>Connor Ingram (PRO)</td><td>7</td><td>3</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Penalty Shots Percentage</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><td>PSA</td><th>PS SHT %</th></tr></thead>
<tr><td colspan="4" class="STHSCenter">No Result</td></tr></table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Losses</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><th>GP</th><th>L</th></tr></thead>
<tr><td>1</td><td>Alex Lyon (CLE)</td><td>13</td><td>5</td></tr>
<tr><td>2</td><td>Dan Vladar (SPR)</td><td>19</td><td>5</td></tr>
<tr><td>3</td><td>Casey DeSmith (STK)</td><td>4</td><td>4</td></tr>
<tr><td>4</td><td>Adam Werner (CHI)</td><td>4</td><td>4</td></tr>
<tr><td>5</td><td>Connor Ingram (PRO)</td><td>7</td><td>4</td></tr>
<tr><td>6</td><td>Pheonix Copley (MIL)</td><td>16</td><td>4</td></tr>
<tr><td>7</td><td>Zane McIntyre (BKR)</td><td>17</td><td>4</td></tr>
<tr><td>8</td><td>Alexandar Georgiev (UTI)</td><td>21</td><td>4</td></tr>
<tr><td>9</td><td>Veini Vehvilainen (MAN)</td><td>4</td><td>3</td></tr>
<tr><td>10</td><td>Tom McCollum (WBS)</td><td>7</td><td>3</td></tr>
</table></td></tr>
</table>
<?php include "Footer.php";?>
