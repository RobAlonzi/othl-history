<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<title>OTHL - Farm Individual Leaders</title>
<script src="OTHL-PLF.js"></script>
<meta name="author" content="Simon Tremblay, sths.simont.info" />
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="Decription" content="Tyler Bell - STHS - Version : 3.3.1.4 - OTHL-STHS.db - OTHL-STHSCareerStat.db"/>
<link href="STHSMain.css" rel="stylesheet" type="text/css" />
</head><body>
<?php If (file_exists("STHSMain-CSSOverwrite.css") == True){echo "<link href=\"STHSMain-CSSOverwrite.css\" rel=\"stylesheet\" type=\"text/css\" />";}?>
<?php If (file_exists("STHSSetting.php") == true){
require_once "STHSSetting.php";
$db = new SQLite3($DatabaseFile);
include "Menu.php";}?>
<b>Minimum Games Played: 7</b><br />
<script>$(function(){$("table").basictablesorter()});</script>
<table class="STHSTableFullW">
<tr><td colspan="3"><h2 class="STHSFarmIndividualLeader_Players">Players</h2></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Goals</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>G</th></tr></thead>
<tr><td>1</td><td>Brian Pinho (ABB)</td><td>20</td><td>19</td></tr>
<tr><td>2</td><td>Max Willman (MAN)</td><td>24</td><td>17</td></tr>
<tr><td>3</td><td>Rasmus Kupari (MAN)</td><td>24</td><td>17</td></tr>
<tr><td>4</td><td>Joel Kellman (STK)</td><td>21</td><td>15</td></tr>
<tr><td>5</td><td>Jansen Harkins (MAN)</td><td>24</td><td>15</td></tr>
<tr><td>6</td><td>Alexis Lafreniere (WBS)</td><td>10</td><td>12</td></tr>
<tr><td>7</td><td>Adam Mascherin (TOR)</td><td>15</td><td>11</td></tr>
<tr><td>8</td><td>Dominic Toninato (BKR)</td><td>11</td><td>9</td></tr>
<tr><td>9</td><td>Andy Andreoff (TOR)</td><td>15</td><td>9</td></tr>
<tr><td>10</td><td>Boris Katchouk (ABB)</td><td>20</td><td>9</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Assists</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>A</th></tr></thead>
<tr><td>1</td><td>Brian Pinho (ABB)</td><td>20</td><td>19</td></tr>
<tr><td>2</td><td>Boris Katchouk (ABB)</td><td>20</td><td>18</td></tr>
<tr><td>3</td><td>Max Willman (MAN)</td><td>24</td><td>18</td></tr>
<tr><td>4</td><td>Rasmus Kupari (MAN)</td><td>24</td><td>16</td></tr>
<tr><td>5</td><td>Gabriel Bourque (TOR)</td><td>15</td><td>15</td></tr>
<tr><td>6</td><td>Joel Kellman (STK)</td><td>21</td><td>15</td></tr>
<tr><td>7</td><td>Parker Kelly (ABB)</td><td>20</td><td>14</td></tr>
<tr><td>8</td><td>Clark Bishop (MAN)</td><td>24</td><td>14</td></tr>
<tr><td>9</td><td>Mikko Lehtonen (ABB)</td><td>20</td><td>13</td></tr>
<tr><td>10</td><td>Jake Bean (STK)</td><td>21</td><td>13</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Shots</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>SHT</th></tr></thead>
<tr><td>1</td><td>Max Willman (MAN)</td><td>24</td><td>116</td></tr>
<tr><td>2</td><td>Jansen Harkins (MAN)</td><td>24</td><td>110</td></tr>
<tr><td>3</td><td>Rasmus Kupari (MAN)</td><td>24</td><td>88</td></tr>
<tr><td>4</td><td>Joel Kellman (STK)</td><td>21</td><td>86</td></tr>
<tr><td>5</td><td>Eetu Luostarinen (MAN)</td><td>24</td><td>82</td></tr>
<tr><td>6</td><td>Brian Pinho (ABB)</td><td>20</td><td>78</td></tr>
<tr><td>7</td><td>Beck Malenstyn (MAN)</td><td>24</td><td>78</td></tr>
<tr><td>8</td><td>Clark Bishop (MAN)</td><td>24</td><td>75</td></tr>
<tr><td>9</td><td>Adam Mascherin (TOR)</td><td>15</td><td>61</td></tr>
<tr><td>10</td><td>Brad Malone (STK)</td><td>21</td><td>60</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Shots %</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>SHT %</th></tr></thead>
<tr><td>1</td><td>Keegan Kolesar (ROC)</td><td>7</td><td>33.33%</td></tr>
<tr><td>2</td><td>Alexis Lafreniere (WBS)</td><td>10</td><td>30.77%</td></tr>
<tr><td>3</td><td>Shane Pinto (BKR)</td><td>11</td><td>30.77%</td></tr>
<tr><td>4</td><td>Christian Djoos (ROC)</td><td>7</td><td>26.67%</td></tr>
<tr><td>5</td><td>Stelio Mattheos (PRO)</td><td>10</td><td>26.67%</td></tr>
<tr><td>6</td><td>Drew O'Connor (PRO)</td><td>10</td><td>25.00%</td></tr>
<tr><td>7</td><td>Brian Pinho (ABB)</td><td>20</td><td>24.36%</td></tr>
<tr><td>8</td><td>Wyatt Kalynuk (RCK)</td><td>11</td><td>21.74%</td></tr>
<tr><td>9</td><td>Ryan Fitzgerald (ROC)</td><td>7</td><td>21.43%</td></tr>
<tr><td>10</td><td>Rhett Gardner (BKR)</td><td>11</td><td>21.43%</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Centers</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PTS</th></tr></thead>
<tr><td>1</td><td>Brian Pinho (ABB)</td><td>20</td><td>19-19-38</td></tr>
<tr><td>2</td><td>Max Willman (MAN)</td><td>24</td><td>17-18-35</td></tr>
<tr><td>3</td><td>Rasmus Kupari (MAN)</td><td>24</td><td>17-16-33</td></tr>
<tr><td>4</td><td>Joel Kellman (STK)</td><td>21</td><td>15-15-30</td></tr>
<tr><td>5</td><td>Jansen Harkins (MAN)</td><td>24</td><td>15-10-25</td></tr>
<tr><td>6</td><td>Clark Bishop (MAN)</td><td>24</td><td>9-14-23</td></tr>
<tr><td>7</td><td>Parker Kelly (ABB)</td><td>20</td><td>8-14-22</td></tr>
<tr><td>8</td><td>Brad Malone (STK)</td><td>21</td><td>9-12-21</td></tr>
<tr><td>9</td><td>Barrett Hayton (TOR)</td><td>15</td><td>8-8-16</td></tr>
<tr><td>10</td><td>Eetu Luostarinen (MAN)</td><td>24</td><td>8-8-16</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Left Wings</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PTS</th></tr></thead>
<tr><td>1</td><td>Boris Katchouk (ABB)</td><td>20</td><td>9-18-27</td></tr>
<tr><td>2</td><td>Brad Malone (STK)</td><td>21</td><td>9-12-21</td></tr>
<tr><td>3</td><td>Alexis Lafreniere (WBS)</td><td>10</td><td>12-7-19</td></tr>
<tr><td>4</td><td>Adam Mascherin (TOR)</td><td>15</td><td>11-7-18</td></tr>
<tr><td>5</td><td>Gabriel Bourque (TOR)</td><td>15</td><td>3-15-18</td></tr>
<tr><td>6</td><td>Beck Malenstyn (MAN)</td><td>24</td><td>6-11-17</td></tr>
<tr><td>7</td><td>Barrett Hayton (TOR)</td><td>15</td><td>8-8-16</td></tr>
<tr><td>8</td><td>Dominic Toninato (BKR)</td><td>11</td><td>9-6-15</td></tr>
<tr><td>9</td><td>Vitaly Abramov (STK)</td><td>21</td><td>7-7-14</td></tr>
<tr><td>10</td><td>Rudolfs Balcers (ABB)</td><td>15</td><td>5-9-14</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Right Wings</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PTS</th></tr></thead>
<tr><td>1</td><td>Joel Kellman (STK)</td><td>21</td><td>15-15-30</td></tr>
<tr><td>2</td><td>Parker Kelly (ABB)</td><td>20</td><td>8-14-22</td></tr>
<tr><td>3</td><td>Brad Malone (STK)</td><td>21</td><td>9-12-21</td></tr>
<tr><td>4</td><td>Alexis Lafreniere (WBS)</td><td>10</td><td>12-7-19</td></tr>
<tr><td>5</td><td>Cole Caufield (WBS)</td><td>10</td><td>7-11-18</td></tr>
<tr><td>6</td><td>Gabriel Bourque (TOR)</td><td>15</td><td>3-15-18</td></tr>
<tr><td>7</td><td>Dominic Toninato (BKR)</td><td>11</td><td>9-6-15</td></tr>
<tr><td>8</td><td>Cody Glass (TOR)</td><td>15</td><td>6-9-15</td></tr>
<tr><td>9</td><td>Nick Merkley (STK)</td><td>21</td><td>3-12-15</td></tr>
<tr><td>10</td><td>Vitaly Abramov (STK)</td><td>21</td><td>7-7-14</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Defenseman</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PTS</th></tr></thead>
<tr><td>1</td><td>Kale Clague (ABB)</td><td>20</td><td>7-11-18</td></tr>
<tr><td>2</td><td>Wyatt Kalynuk (RCK)</td><td>11</td><td>5-10-15</td></tr>
<tr><td>3</td><td>Mikko Lehtonen (ABB)</td><td>20</td><td>2-13-15</td></tr>
<tr><td>4</td><td>Zach Trotman (STK)</td><td>21</td><td>2-12-14</td></tr>
<tr><td>5</td><td>Guillaume Brisebois (MAN)</td><td>24</td><td>2-12-14</td></tr>
<tr><td>6</td><td>Jake Bean (STK)</td><td>21</td><td>1-13-14</td></tr>
<tr><td>7</td><td>Jeremy Davies (TOR)</td><td>15</td><td>3-10-13</td></tr>
<tr><td>8</td><td>Andy Welinski (ROC)</td><td>7</td><td>2-9-11</td></tr>
<tr><td>9</td><td>Gabriel Carlsson (ABB)</td><td>20</td><td>2-9-11</td></tr>
<tr><td>10</td><td>Frederic Allard (ABB)</td><td>20</td><td>1-10-11</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Points per 20 Minutes</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>P/20</th></tr></thead>
<tr><td>1</td><td>Cole Caufield (WBS)</td><td>10</td><td>2.02</td></tr>
<tr><td>2</td><td>Shane Pinto (BKR)</td><td>11</td><td>1.97</td></tr>
<tr><td>3</td><td>Alexis Lafreniere (WBS)</td><td>10</td><td>1.95</td></tr>
<tr><td>4</td><td>Brian Pinho (ABB)</td><td>20</td><td>1.91</td></tr>
<tr><td>5</td><td>Dominic Toninato (BKR)</td><td>11</td><td>1.88</td></tr>
<tr><td>6</td><td>Max Willman (MAN)</td><td>24</td><td>1.69</td></tr>
<tr><td>7</td><td>Ryan Fitzgerald (ROC)</td><td>7</td><td>1.61</td></tr>
<tr><td>8</td><td>Rasmus Kupari (MAN)</td><td>24</td><td>1.59</td></tr>
<tr><td>9</td><td>Joey Anderson (BKR)</td><td>11</td><td>1.54</td></tr>
<tr><td>10</td><td>John Hayden (BKR)</td><td>11</td><td>1.51</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Face-Off %</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>FO %</th></tr></thead>
<tr><td>1</td><td>Mathieu Olivier (STK)</td><td>17</td><td>71.73%</td></tr>
<tr><td>2</td><td>Andrew Poturalski (ROC)</td><td>7</td><td>69.12%</td></tr>
<tr><td>3</td><td>Brad Malone (STK)</td><td>21</td><td>68.48%</td></tr>
<tr><td>4</td><td>Steven Lorentz (TOR)</td><td>15</td><td>68.27%</td></tr>
<tr><td>5</td><td>Joseph Blandisi (RCK)</td><td>11</td><td>67.76%</td></tr>
<tr><td>6</td><td>Glenn Gawdin (RCK)</td><td>11</td><td>67.65%</td></tr>
<tr><td>7</td><td>David Gustafsson (STK)</td><td>21</td><td>64.46%</td></tr>
<tr><td>8</td><td>Alexander True (ABB)</td><td>20</td><td>63.90%</td></tr>
<tr><td>9</td><td>Cody Glass (TOR)</td><td>15</td><td>63.75%</td></tr>
<tr><td>10</td><td>Brian Pinho (ABB)</td><td>20</td><td>63.06%</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Plus/Minus</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>+/-</th></tr></thead>
<tr><td>1</td><td>Brian Pinho (ABB)</td><td>20</td><td>21</td></tr>
<tr><td>2</td><td>Parker Kelly (ABB)</td><td>20</td><td>21</td></tr>
<tr><td>3</td><td>Max Willman (MAN)</td><td>24</td><td>16</td></tr>
<tr><td>4</td><td>Boris Katchouk (ABB)</td><td>20</td><td>15</td></tr>
<tr><td>5</td><td>Rasmus Kupari (MAN)</td><td>24</td><td>14</td></tr>
<tr><td>6</td><td>Ben Gleason (ABB)</td><td>20</td><td>11</td></tr>
<tr><td>7</td><td>Gabriel Carlsson (ABB)</td><td>20</td><td>11</td></tr>
<tr><td>8</td><td>Tyler Steenbergen (ABB)</td><td>20</td><td>11</td></tr>
<tr><td>9</td><td>Kale Clague (ABB)</td><td>20</td><td>11</td></tr>
<tr><td>10</td><td>Shane Pinto (BKR)</td><td>11</td><td>10</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Penalty Minutes</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PIM</th></tr></thead>
<tr><td>1</td><td>Guillaume Brisebois (MAN)</td><td>24</td><td>56</td></tr>
<tr><td>2</td><td>Samuel Morin (STK)</td><td>21</td><td>42</td></tr>
<tr><td>3</td><td>Beck Malenstyn (MAN)</td><td>24</td><td>40</td></tr>
<tr><td>4</td><td>Luke Schenn (TOR)</td><td>15</td><td>39</td></tr>
<tr><td>5</td><td>Jaycob Megna (PRO)</td><td>10</td><td>35</td></tr>
<tr><td>6</td><td>Tyrell Goulbourne (STK)</td><td>21</td><td>34</td></tr>
<tr><td>7</td><td>Zach Trotman (STK)</td><td>21</td><td>33</td></tr>
<tr><td>8</td><td>Gabriel Carlsson (ABB)</td><td>20</td><td>30</td></tr>
<tr><td>9</td><td>Clark Bishop (MAN)</td><td>24</td><td>29</td></tr>
<tr><td>10</td><td>Steven Santini (STK)</td><td>21</td><td>28</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Shots Blocked</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>SB</th></tr></thead>
<tr><td>1</td><td>Mikko Lehtonen (ABB)</td><td>20</td><td>27</td></tr>
<tr><td>2</td><td>Guillaume Brisebois (MAN)</td><td>24</td><td>27</td></tr>
<tr><td>3</td><td>Rasmus Kupari (MAN)</td><td>24</td><td>27</td></tr>
<tr><td>4</td><td>Eetu Luostarinen (MAN)</td><td>24</td><td>25</td></tr>
<tr><td>5</td><td>Nelson Nogier (WBS)</td><td>10</td><td>21</td></tr>
<tr><td>6</td><td>Max Willman (MAN)</td><td>24</td><td>21</td></tr>
<tr><td>7</td><td>Steven Santini (STK)</td><td>21</td><td>20</td></tr>
<tr><td>8</td><td>Gabriel Carlsson (ABB)</td><td>20</td><td>19</td></tr>
<tr><td>9</td><td>Kale Clague (ABB)</td><td>20</td><td>19</td></tr>
<tr><td>10</td><td>Rob O'Gara (STK)</td><td>21</td><td>18</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Rookies</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PTS</th></tr></thead>
<tr><td>1</td><td>Rasmus Kupari (MAN)</td><td>24</td><td>17-16-33</td></tr>
<tr><td>2</td><td>Jansen Harkins (MAN)</td><td>24</td><td>15-10-25</td></tr>
<tr><td>3</td><td>Parker Kelly (ABB)</td><td>20</td><td>8-14-22</td></tr>
<tr><td>4</td><td>Alexis Lafreniere (WBS)</td><td>10</td><td>12-7-19</td></tr>
<tr><td>5</td><td>Cole Caufield (WBS)</td><td>10</td><td>7-11-18</td></tr>
<tr><td>6</td><td>Beck Malenstyn (MAN)</td><td>24</td><td>6-11-17</td></tr>
<tr><td>7</td><td>Barrett Hayton (TOR)</td><td>15</td><td>8-8-16</td></tr>
<tr><td>8</td><td>Eetu Luostarinen (MAN)</td><td>24</td><td>8-8-16</td></tr>
<tr><td>9</td><td>David Gustafsson (STK)</td><td>21</td><td>7-9-16</td></tr>
<tr><td>10</td><td>Cody Glass (TOR)</td><td>15</td><td>6-9-15</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Hits</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>HIT</th></tr></thead>
<tr><td>1</td><td>Samuel Morin (STK)</td><td>21</td><td>70</td></tr>
<tr><td>2</td><td>Guillaume Brisebois (MAN)</td><td>24</td><td>65</td></tr>
<tr><td>3</td><td>Zach Trotman (STK)</td><td>21</td><td>54</td></tr>
<tr><td>4</td><td>Kiefer Sherwood (RCK)</td><td>11</td><td>45</td></tr>
<tr><td>5</td><td>Jacob Middleton (ABB)</td><td>20</td><td>45</td></tr>
<tr><td>6</td><td>Mitch Vande Sompel (RCK)</td><td>11</td><td>42</td></tr>
<tr><td>7</td><td>John Quenneville (MAN)</td><td>24</td><td>41</td></tr>
<tr><td>8</td><td>Clark Bishop (MAN)</td><td>24</td><td>41</td></tr>
<tr><td>9</td><td>Michael Rasmussen (BKR)</td><td>11</td><td>40</td></tr>
<tr><td>10</td><td>Mike Hardman (STK)</td><td>21</td><td>39</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Power Play Goals</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PP</th></tr></thead>
<tr><td>1</td><td>Andy Andreoff (TOR)</td><td>15</td><td>7</td></tr>
<tr><td>2</td><td>Brian Pinho (ABB)</td><td>20</td><td>6</td></tr>
<tr><td>3</td><td>Alexis Lafreniere (WBS)</td><td>10</td><td>5</td></tr>
<tr><td>4</td><td>Joel Kellman (STK)</td><td>21</td><td>5</td></tr>
<tr><td>5</td><td>Brad Malone (STK)</td><td>21</td><td>5</td></tr>
<tr><td>6</td><td>Jansen Harkins (MAN)</td><td>24</td><td>5</td></tr>
<tr><td>7</td><td>Dominic Toninato (BKR)</td><td>11</td><td>4</td></tr>
<tr><td>8</td><td>Adam Mascherin (TOR)</td><td>15</td><td>4</td></tr>
<tr><td>9</td><td>Kale Clague (ABB)</td><td>20</td><td>4</td></tr>
<tr><td>10</td><td>Clark Bishop (MAN)</td><td>24</td><td>4</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Short Handed Goals</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>SH</th></tr></thead>
<tr><td>1</td><td>Aidan Dudas (SDG)</td><td>5</td><td>1</td></tr>
<tr><td>2</td><td>Dominik Simon (RCK)</td><td>11</td><td>1</td></tr>
<tr><td>3</td><td>Cody Glass (TOR)</td><td>15</td><td>1</td></tr>
<tr><td>4</td><td>Boris Katchouk (ABB)</td><td>20</td><td>1</td></tr>
<tr><td>5</td><td>C.J. Suess (ABB)</td><td>20</td><td>1</td></tr>
<tr><td>6</td><td>David Gustafsson (STK)</td><td>21</td><td>1</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Game Winning Goals</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>GW</th></tr></thead>
<tr><td>1</td><td>Max Willman (MAN)</td><td>24</td><td>4</td></tr>
<tr><td>2</td><td>Alexis Lafreniere (WBS)</td><td>10</td><td>3</td></tr>
<tr><td>3</td><td>Dylan Sikura (RCK)</td><td>11</td><td>3</td></tr>
<tr><td>4</td><td>Parker Kelly (ABB)</td><td>20</td><td>3</td></tr>
<tr><td>5</td><td>Vitaly Abramov (STK)</td><td>21</td><td>3</td></tr>
<tr><td>6</td><td>Eetu Luostarinen (MAN)</td><td>24</td><td>3</td></tr>
<tr><td>7</td><td>Jansen Harkins (MAN)</td><td>24</td><td>3</td></tr>
<tr><td>8</td><td>Rasmus Kupari (MAN)</td><td>24</td><td>3</td></tr>
<tr><td>9</td><td>Anthony Richard (GRP)</td><td>6</td><td>2</td></tr>
<tr><td>10</td><td>Drew O'Connor (PRO)</td><td>10</td><td>2</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Game Tying Goals</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>GT</th></tr></thead>
<tr><td>1</td><td>Brian Pinho (ABB)</td><td>20</td><td>2</td></tr>
<tr><td>2</td><td>C.J. Suess (ABB)</td><td>20</td><td>2</td></tr>
<tr><td>3</td><td>Tyrell Goulbourne (STK)</td><td>21</td><td>2</td></tr>
<tr><td>4</td><td>Clark Bishop (MAN)</td><td>24</td><td>2</td></tr>
<tr><td>5</td><td>Joseph Cramarossa (PSM)</td><td>2</td><td>1</td></tr>
<tr><td>6</td><td>Greg McKegg (CLE)</td><td>4</td><td>1</td></tr>
<tr><td>7</td><td>Michael McCarron (SPR)</td><td>6</td><td>1</td></tr>
<tr><td>8</td><td>Andy Welinski (ROC)</td><td>7</td><td>1</td></tr>
<tr><td>9</td><td>Keegan Kolesar (ROC)</td><td>7</td><td>1</td></tr>
<tr><td>10</td><td>Cole Caufield (WBS)</td><td>10</td><td>1</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Empty Net Goals</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>ENG</th></tr></thead>
<tr><td>1</td><td>Kale Clague (ABB)</td><td>20</td><td>1</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Minutes Played</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>MP</th></tr></thead>
<tr><td>1</td><td>Eetu Luostarinen (MAN)</td><td>24</td><td>550</td></tr>
<tr><td>2</td><td>Clark Bishop (MAN)</td><td>24</td><td>513</td></tr>
<tr><td>3</td><td>Guillaume Brisebois (MAN)</td><td>24</td><td>489</td></tr>
<tr><td>4</td><td>Joel Kellman (STK)</td><td>21</td><td>486</td></tr>
<tr><td>5</td><td>Jansen Harkins (MAN)</td><td>24</td><td>481</td></tr>
<tr><td>6</td><td>Beck Malenstyn (MAN)</td><td>24</td><td>468</td></tr>
<tr><td>7</td><td>John Quenneville (MAN)</td><td>24</td><td>452</td></tr>
<tr><td>8</td><td>Alexander True (ABB)</td><td>20</td><td>449</td></tr>
<tr><td>9</td><td>Gabriel Carlsson (ABB)</td><td>20</td><td>442</td></tr>
<tr><td>10</td><td>Zach Trotman (STK)</td><td>21</td><td>440</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Hat Tricks</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>HT</th></tr></thead>
<tr><td>1</td><td>Rasmus Kupari (MAN)</td><td>24</td><td>2</td></tr>
<tr><td>2</td><td>Keegan Kolesar (ROC)</td><td>7</td><td>1</td></tr>
<tr><td>3</td><td>Alexis Lafreniere (WBS)</td><td>10</td><td>1</td></tr>
<tr><td>4</td><td>Cole Caufield (WBS)</td><td>10</td><td>1</td></tr>
<tr><td>5</td><td>Oskar Steen (PRO)</td><td>10</td><td>1</td></tr>
<tr><td>6</td><td>Joseph Blandisi (RCK)</td><td>11</td><td>1</td></tr>
<tr><td>7</td><td>Dominic Toninato (BKR)</td><td>11</td><td>1</td></tr>
<tr><td>8</td><td>Barrett Hayton (TOR)</td><td>15</td><td>1</td></tr>
<tr><td>9</td><td>Brian Pinho (ABB)</td><td>20</td><td>1</td></tr>
<tr><td>10</td><td>Joel Kellman (STK)</td><td>21</td><td>1</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Goal Scoring Streak</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>GS</th></tr></thead>
<tr><td>1</td><td>Ryan Fitzgerald (ROC)</td><td>7</td><td>3</td></tr>
<tr><td>2</td><td>Alexis Lafreniere (WBS)</td><td>10</td><td>3</td></tr>
<tr><td>3</td><td>Mason Geertsen (CLE)</td><td>5</td><td>2</td></tr>
<tr><td>4</td><td>Brent Pedersen (CLE)</td><td>5</td><td>2</td></tr>
<tr><td>5</td><td>Christian Djoos (ROC)</td><td>7</td><td>2</td></tr>
<tr><td>6</td><td>Stelio Mattheos (PRO)</td><td>10</td><td>2</td></tr>
<tr><td>7</td><td>Barrett Hayton (TOR)</td><td>15</td><td>2</td></tr>
<tr><td>8</td><td>Matthew Phillips (LAV)</td><td>4</td><td>1</td></tr>
<tr><td>9</td><td>Cameron Hughes (SDG)</td><td>5</td><td>1</td></tr>
<tr><td>10</td><td>Eetu Tuulola (SDG)</td><td>5</td><td>1</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Point Scoring Streak</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PS</th></tr></thead>
<tr><td>1</td><td>Brian Pinho (ABB)</td><td>20</td><td>8</td></tr>
<tr><td>2</td><td>Joel Kellman (STK)</td><td>21</td><td>6</td></tr>
<tr><td>3</td><td>Mason Geertsen (CLE)</td><td>5</td><td>5</td></tr>
<tr><td>4</td><td>Matthew Peca (SDG)</td><td>5</td><td>4</td></tr>
<tr><td>5</td><td>Cooper Marody (SPR)</td><td>5</td><td>4</td></tr>
<tr><td>6</td><td>Trent Frederic (SDG)</td><td>5</td><td>4</td></tr>
<tr><td>7</td><td>Barrett Hayton (TOR)</td><td>15</td><td>4</td></tr>
<tr><td>8</td><td>Boris Katchouk (ABB)</td><td>20</td><td>4</td></tr>
<tr><td>9</td><td>Stuart Percy (MIL)</td><td>4</td><td>3</td></tr>
<tr><td>10</td><td>Ryan Fitzgerald (ROC)</td><td>7</td><td>3</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Hits Taken</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>HTT</th></tr></thead>
<tr><td>1</td><td>Clark Bishop (MAN)</td><td>24</td><td>94</td></tr>
<tr><td>2</td><td>Eetu Luostarinen (MAN)</td><td>24</td><td>88</td></tr>
<tr><td>3</td><td>Jansen Harkins (MAN)</td><td>24</td><td>76</td></tr>
<tr><td>4</td><td>Max Willman (MAN)</td><td>24</td><td>76</td></tr>
<tr><td>5</td><td>Rasmus Kupari (MAN)</td><td>24</td><td>74</td></tr>
<tr><td>6</td><td>Beck Malenstyn (MAN)</td><td>24</td><td>58</td></tr>
<tr><td>7</td><td>Cody Glass (TOR)</td><td>15</td><td>47</td></tr>
<tr><td>8</td><td>David Gustafsson (STK)</td><td>21</td><td>47</td></tr>
<tr><td>9</td><td>Alexander True (ABB)</td><td>20</td><td>45</td></tr>
<tr><td>10</td><td>Brian Pinho (ABB)</td><td>20</td><td>40</td></tr>
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
<tr><td>1</td><td>Beck Malenstyn (MAN)</td><td>24</td><td>2</td></tr>
<tr><td>2</td><td>Yegor Zamula (LAV)</td><td>4</td><td>1</td></tr>
<tr><td>3</td><td>Dominic Turgeon (SDG)</td><td>5</td><td>1</td></tr>
<tr><td>4</td><td>Anton Lindholm (GRP)</td><td>6</td><td>1</td></tr>
<tr><td>5</td><td>Ryan Fitzgerald (ROC)</td><td>7</td><td>1</td></tr>
<tr><td>6</td><td>Gustav Olofsson (PRO)</td><td>10</td><td>1</td></tr>
<tr><td>7</td><td>Jaycob Megna (PRO)</td><td>10</td><td>1</td></tr>
<tr><td>8</td><td>Luke Schenn (TOR)</td><td>15</td><td>1</td></tr>
<tr><td>9</td><td>Boris Katchouk (ABB)</td><td>20</td><td>1</td></tr>
<tr><td>10</td><td>Alexander True (ABB)</td><td>20</td><td>1</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Fight Won</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>FW   </th></tr></thead>
<tr><td>1</td><td>Boris Katchouk (ABB)</td><td>20</td><td>1</td></tr>
<tr><td>2</td><td>Joel Kellman (STK)</td><td>21</td><td>1</td></tr>
</table></td></tr>
<tr><td colspan="3"><h2 class="STHSFarmIndividualLeader_Goalies">Goalies </h2></td></tr><tr>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Save Percentage</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><th>GP</th><th>SAVE %</th></tr></thead>
<tr><td>1</td><td>Zane McIntyre (BKR)</td><td>11</td><td>0.905</td></tr>
<tr><td>2</td><td>Christopher Gibson (WBS)</td><td>10</td><td>0.892</td></tr>
<tr><td>3</td><td>Kaden Fulcher (RCK)</td><td>11</td><td>0.887</td></tr>
<tr><td>4</td><td>Callum Booth (MAN)</td><td>24</td><td>0.880</td></tr>
<tr><td>5</td><td>Ken Appleby (ABB)</td><td>20</td><td>0.880</td></tr>
<tr><td>6</td><td>Calvin Pickard (TOR)</td><td>15</td><td>0.854</td></tr>
<tr><td>7</td><td>Matthew Villalta (PRO)</td><td>10</td><td>0.841</td></tr>
<tr><td>8</td><td>Evan Cormier (STK)</td><td>21</td><td>0.838</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Goals Against Average</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><th>GP</th><th>GAA</th></tr></thead>
<tr><td>1</td><td>Ken Appleby (ABB)</td><td>20</td><td>2.21</td></tr>
<tr><td>2</td><td>Zane McIntyre (BKR)</td><td>11</td><td>2.64</td></tr>
<tr><td>3</td><td>Kaden Fulcher (RCK)</td><td>11</td><td>2.72</td></tr>
<tr><td>4</td><td>Calvin Pickard (TOR)</td><td>15</td><td>2.94</td></tr>
<tr><td>5</td><td>Callum Booth (MAN)</td><td>24</td><td>3.05</td></tr>
<tr><td>6</td><td>Matthew Villalta (PRO)</td><td>10</td><td>3.44</td></tr>
<tr><td>7</td><td>Evan Cormier (STK)</td><td>21</td><td>3.67</td></tr>
<tr><td>8</td><td>Christopher Gibson (WBS)</td><td>10</td><td>4.01</td></tr>
<tr><td colspan="4" class="STHSCenter">No Result</td></tr></table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Minutes Played</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><th>GP</th><th>MP</th></tr></thead>
<tr><td>1</td><td>Callum Booth (MAN)</td><td>24</td><td>1,338</td></tr>
<tr><td>2</td><td>Ken Appleby (ABB)</td><td>20</td><td>1,169</td></tr>
<tr><td>3</td><td>Evan Cormier (STK)</td><td>21</td><td>1,161</td></tr>
<tr><td>4</td><td>Calvin Pickard (TOR)</td><td>15</td><td>857</td></tr>
<tr><td>5</td><td>Kaden Fulcher (RCK)</td><td>11</td><td>684</td></tr>
<tr><td>6</td><td>Zane McIntyre (BKR)</td><td>11</td><td>682</td></tr>
<tr><td>7</td><td>Christopher Gibson (WBS)</td><td>10</td><td>599</td></tr>
<tr><td>8</td><td>Matthew Villalta (PRO)</td><td>10</td><td>541</td></tr>
<tr><td>9</td><td>Jonas Johansson (ROC)</td><td>7</td><td>404</td></tr>
<tr><td>10</td><td>Samuel Montembeault (PSM)</td><td>5</td><td>348</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Shots Faced</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><th>GP</th><th>SHT</th></tr></thead>
<tr><td>1</td><td>Callum Booth (MAN)</td><td>24</td><td>568</td></tr>
<tr><td>2</td><td>Evan Cormier (STK)</td><td>21</td><td>439</td></tr>
<tr><td>3</td><td>Christopher Gibson (WBS)</td><td>10</td><td>372</td></tr>
<tr><td>4</td><td>Ken Appleby (ABB)</td><td>20</td><td>358</td></tr>
<tr><td>5</td><td>Zane McIntyre (BKR)</td><td>11</td><td>317</td></tr>
<tr><td>6</td><td>Calvin Pickard (TOR)</td><td>15</td><td>287</td></tr>
<tr><td>7</td><td>Kaden Fulcher (RCK)</td><td>11</td><td>275</td></tr>
<tr><td>8</td><td>Samuel Montembeault (PSM)</td><td>5</td><td>228</td></tr>
<tr><td>9</td><td>Matthew Villalta (PRO)</td><td>10</td><td>195</td></tr>
<tr><td>10</td><td>Jonas Johansson (ROC)</td><td>7</td><td>149</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Shutouts</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><th>GP</th><th>SO</th></tr></thead>
<tr><td>1</td><td>Ken Appleby (ABB)</td><td>20</td><td>2</td></tr>
<tr><td>2</td><td>Dan Vladar (SPR)</td><td>6</td><td>1</td></tr>
<tr><td>3</td><td>Kaden Fulcher (RCK)</td><td>11</td><td>1</td></tr>
<tr><td>4</td><td>Callum Booth (MAN)</td><td>24</td><td>1</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Wins</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><th>GP</th><th>W</th></tr></thead>
<tr><td>1</td><td>Ken Appleby (ABB)</td><td>20</td><td>15</td></tr>
<tr><td>2</td><td>Callum Booth (MAN)</td><td>24</td><td>13</td></tr>
<tr><td>3</td><td>Evan Cormier (STK)</td><td>21</td><td>11</td></tr>
<tr><td>4</td><td>Calvin Pickard (TOR)</td><td>15</td><td>9</td></tr>
<tr><td>5</td><td>Zane McIntyre (BKR)</td><td>11</td><td>7</td></tr>
<tr><td>6</td><td>Kaden Fulcher (RCK)</td><td>11</td><td>5</td></tr>
<tr><td>7</td><td>Matthew Villalta (PRO)</td><td>10</td><td>4</td></tr>
<tr><td>8</td><td>Christopher Gibson (WBS)</td><td>10</td><td>4</td></tr>
<tr><td>9</td><td>Jonas Johansson (ROC)</td><td>7</td><td>3</td></tr>
<tr><td>10</td><td>Jake Paterson (GRP)</td><td>6</td><td>2</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Penalty Shots Percentage</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><td>PSA</td><th>PS SHT %</th></tr></thead>
<tr><td colspan="4" class="STHSCenter">No Result</td></tr></table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Losses</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><th>GP</th><th>L</th></tr></thead>
<tr><td>1</td><td>Evan Cormier (STK)</td><td>21</td><td>8</td></tr>
<tr><td>2</td><td>Christopher Gibson (WBS)</td><td>10</td><td>6</td></tr>
<tr><td>3</td><td>Callum Booth (MAN)</td><td>24</td><td>6</td></tr>
<tr><td>4</td><td>Matthew Villalta (PRO)</td><td>10</td><td>5</td></tr>
<tr><td>5</td><td>Carter Hart (LAV)</td><td>4</td><td>4</td></tr>
<tr><td>6</td><td>Joseph Woll (MIL)</td><td>4</td><td>4</td></tr>
<tr><td>7</td><td>Mason McDonald (SDG)</td><td>5</td><td>4</td></tr>
<tr><td>8</td><td>Dan Vladar (SPR)</td><td>6</td><td>4</td></tr>
<tr><td>9</td><td>Kaden Fulcher (RCK)</td><td>11</td><td>4</td></tr>
<tr><td>10</td><td>Calvin Pickard (TOR)</td><td>15</td><td>4</td></tr>
</table></td></tr>
</table>
<?php include "Footer.php";?>
