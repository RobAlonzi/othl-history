<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<title>OTHL - Pro Individual Leaders</title>
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
<tr><td colspan="3"><h2 class="STHSProIndividualLeader_Players">Players</h2></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Goals</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>G</th></tr></thead>
<tr><td>1</td><td>Logan Couture (NSH)</td><td>11</td><td>9</td></tr>
<tr><td>2</td><td>Yanni Gourde (VAN)</td><td>18</td><td>9</td></tr>
<tr><td>3</td><td>Nazem Kadri (MTL)</td><td>24</td><td>9</td></tr>
<tr><td>4</td><td>Jordan Staal (TOR)</td><td>14</td><td>8</td></tr>
<tr><td>5</td><td>Tomas Hertl (TOR)</td><td>14</td><td>8</td></tr>
<tr><td>6</td><td>Auston Matthews (VAN)</td><td>18</td><td>8</td></tr>
<tr><td>7</td><td>Dylan Larkin (CGY)</td><td>23</td><td>8</td></tr>
<tr><td>8</td><td>Claude Giroux (CGY)</td><td>23</td><td>8</td></tr>
<tr><td>9</td><td>Alex DeBrincat (MTL)</td><td>27</td><td>8</td></tr>
<tr><td>10</td><td>Mark Scheifele (MTL)</td><td>27</td><td>8</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Assists</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>A</th></tr></thead>
<tr><td>1</td><td>Jaccob Slavin (CGY)</td><td>23</td><td>15</td></tr>
<tr><td>2</td><td>Ivan Provorov (MTL)</td><td>27</td><td>15</td></tr>
<tr><td>3</td><td>Mark Scheifele (MTL)</td><td>27</td><td>15</td></tr>
<tr><td>4</td><td>Connor Murphy (MTL)</td><td>27</td><td>15</td></tr>
<tr><td>5</td><td>Bo Horvat (CGY)</td><td>23</td><td>14</td></tr>
<tr><td>6</td><td>William Karlsson (NJD)</td><td>12</td><td>13</td></tr>
<tr><td>7</td><td>Dougie Hamilton (VAN)</td><td>18</td><td>13</td></tr>
<tr><td>8</td><td>Alex DeBrincat (MTL)</td><td>27</td><td>13</td></tr>
<tr><td>9</td><td>Alex Killorn (NSH)</td><td>13</td><td>12</td></tr>
<tr><td>10</td><td>Sam Reinhart (NSH)</td><td>13</td><td>12</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Shots</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>SHT</th></tr></thead>
<tr><td>1</td><td>Alex DeBrincat (MTL)</td><td>27</td><td>128</td></tr>
<tr><td>2</td><td>Pavel Buchnevich (CGY)</td><td>23</td><td>101</td></tr>
<tr><td>3</td><td>Bo Horvat (CGY)</td><td>23</td><td>97</td></tr>
<tr><td>4</td><td>Nazem Kadri (MTL)</td><td>24</td><td>86</td></tr>
<tr><td>5</td><td>Nikolaj Ehlers (MTL)</td><td>27</td><td>86</td></tr>
<tr><td>6</td><td>David Perron (CGY)</td><td>23</td><td>84</td></tr>
<tr><td>7</td><td>Dylan Larkin (CGY)</td><td>23</td><td>79</td></tr>
<tr><td>8</td><td>Mark Scheifele (MTL)</td><td>27</td><td>78</td></tr>
<tr><td>9</td><td>Brandon Tanev (MTL)</td><td>27</td><td>77</td></tr>
<tr><td>10</td><td>Brayden Schenn (MTL)</td><td>27</td><td>77</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Shots %</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>SHT %</th></tr></thead>
<tr><td>1</td><td>Zemgus Girgensons (BUF)</td><td>7</td><td>33.33%</td></tr>
<tr><td>2</td><td>Denis Gurianov (BOS)</td><td>7</td><td>25.00%</td></tr>
<tr><td>3</td><td>William Borgen (BOS)</td><td>7</td><td>25.00%</td></tr>
<tr><td>4</td><td>Mats Zuccarello (NYI)</td><td>14</td><td>21.74%</td></tr>
<tr><td>5</td><td>Miles Wood (CLB)</td><td>7</td><td>21.43%</td></tr>
<tr><td>6</td><td>Mathew Barzal (NYI)</td><td>15</td><td>19.35%</td></tr>
<tr><td>7</td><td>Radek Faksa (TOR)</td><td>14</td><td>19.05%</td></tr>
<tr><td>8</td><td>Sean Kuraly (TOR)</td><td>14</td><td>17.65%</td></tr>
<tr><td>9</td><td>Pius Suter (BOS)</td><td>7</td><td>16.67%</td></tr>
<tr><td>10</td><td>Nic Dowd (CLB)</td><td>7</td><td>16.67%</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Centers</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PTS</th></tr></thead>
<tr><td>1</td><td>Mark Scheifele (MTL)</td><td>27</td><td>8-15-23</td></tr>
<tr><td>2</td><td>Bo Horvat (CGY)</td><td>23</td><td>7-14-21</td></tr>
<tr><td>3</td><td>Nazem Kadri (MTL)</td><td>24</td><td>9-11-20</td></tr>
<tr><td>4</td><td>Logan Couture (NSH)</td><td>11</td><td>9-10-19</td></tr>
<tr><td>5</td><td>Sam Reinhart (NSH)</td><td>13</td><td>6-12-18</td></tr>
<tr><td>6</td><td>Yanni Gourde (VAN)</td><td>18</td><td>9-8-17</td></tr>
<tr><td>7</td><td>Dylan Larkin (CGY)</td><td>23</td><td>8-9-17</td></tr>
<tr><td>8</td><td>Claude Giroux (CGY)</td><td>23</td><td>8-8-16</td></tr>
<tr><td>9</td><td>Nico Hischier (VAN)</td><td>18</td><td>5-11-16</td></tr>
<tr><td>10</td><td>William Karlsson (NJD)</td><td>12</td><td>3-13-16</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Left Wings</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PTS</th></tr></thead>
<tr><td>1</td><td>Alex DeBrincat (MTL)</td><td>27</td><td>8-13-21</td></tr>
<tr><td>2</td><td>Nazem Kadri (MTL)</td><td>24</td><td>9-11-20</td></tr>
<tr><td>3</td><td>Alex Killorn (NSH)</td><td>13</td><td>6-12-18</td></tr>
<tr><td>4</td><td>Yanni Gourde (VAN)</td><td>18</td><td>9-8-17</td></tr>
<tr><td>5</td><td>Nikolaj Ehlers (MTL)</td><td>27</td><td>7-10-17</td></tr>
<tr><td>6</td><td>Claude Giroux (CGY)</td><td>23</td><td>8-8-16</td></tr>
<tr><td>7</td><td>Jonathan Huberdeau (NYI)</td><td>15</td><td>6-10-16</td></tr>
<tr><td>8</td><td>Alexander Radulov (NYI)</td><td>15</td><td>7-8-15</td></tr>
<tr><td>9</td><td>Pavel Buchnevich (CGY)</td><td>23</td><td>6-9-15</td></tr>
<tr><td>10</td><td>David Perron (CGY)</td><td>23</td><td>7-7-14</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Right Wings</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PTS</th></tr></thead>
<tr><td>1</td><td>Alex DeBrincat (MTL)</td><td>27</td><td>8-13-21</td></tr>
<tr><td>2</td><td>Alex Killorn (NSH)</td><td>13</td><td>6-12-18</td></tr>
<tr><td>3</td><td>Sam Reinhart (NSH)</td><td>13</td><td>6-12-18</td></tr>
<tr><td>4</td><td>Yanni Gourde (VAN)</td><td>18</td><td>9-8-17</td></tr>
<tr><td>5</td><td>Nikolaj Ehlers (MTL)</td><td>27</td><td>7-10-17</td></tr>
<tr><td>6</td><td>Claude Giroux (CGY)</td><td>23</td><td>8-8-16</td></tr>
<tr><td>7</td><td>Alexander Radulov (NYI)</td><td>15</td><td>7-8-15</td></tr>
<tr><td>8</td><td>Pavel Buchnevich (CGY)</td><td>23</td><td>6-9-15</td></tr>
<tr><td>9</td><td>David Perron (CGY)</td><td>23</td><td>7-7-14</td></tr>
<tr><td>10</td><td>Brandon Tanev (MTL)</td><td>27</td><td>7-7-14</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Defenseman</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PTS</th></tr></thead>
<tr><td>1</td><td>Ivan Provorov (MTL)</td><td>27</td><td>4-15-19</td></tr>
<tr><td>2</td><td>Dougie Hamilton (VAN)</td><td>18</td><td>5-13-18</td></tr>
<tr><td>3</td><td>Jaccob Slavin (CGY)</td><td>23</td><td>1-15-16</td></tr>
<tr><td>4</td><td>Connor Murphy (MTL)</td><td>27</td><td>1-15-16</td></tr>
<tr><td>5</td><td>Darnell Nurse (NJD)</td><td>12</td><td>4-11-15</td></tr>
<tr><td>6</td><td>Victor Hedman (NYI)</td><td>15</td><td>3-10-13</td></tr>
<tr><td>7</td><td>Shea Weber (NYI)</td><td>15</td><td>2-11-13</td></tr>
<tr><td>8</td><td>Nick Leddy (VAN)</td><td>18</td><td>2-11-13</td></tr>
<tr><td>9</td><td>Brady Skjei (CGY)</td><td>23</td><td>6-5-11</td></tr>
<tr><td>10</td><td>John Carlson (TOR)</td><td>14</td><td>2-9-11</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Points per 20 Minutes</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>P/20</th></tr></thead>
<tr><td>1</td><td>Logan Couture (NSH)</td><td>11</td><td>1.74</td></tr>
<tr><td>2</td><td>William Karlsson (NJD)</td><td>12</td><td>1.44</td></tr>
<tr><td>3</td><td>Sam Reinhart (NSH)</td><td>13</td><td>1.38</td></tr>
<tr><td>4</td><td>Alex Killorn (NSH)</td><td>13</td><td>1.29</td></tr>
<tr><td>5</td><td>Valeri Nichushkin (SEA)</td><td>8</td><td>1.17</td></tr>
<tr><td>6</td><td>Jonathan Huberdeau (NYI)</td><td>15</td><td>1.12</td></tr>
<tr><td>7</td><td>Joe Pavelski (CLB)</td><td>7</td><td>1.12</td></tr>
<tr><td>8</td><td>Pius Suter (BOS)</td><td>7</td><td>1.11</td></tr>
<tr><td>9</td><td>Gabriel Landeskog (TOR)</td><td>14</td><td>1.10</td></tr>
<tr><td>10</td><td>Mathew Barzal (NYI)</td><td>15</td><td>1.10</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Face-Off %</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>FO %</th></tr></thead>
<tr><td>1</td><td>Jonathan Toews (NJD)</td><td>12</td><td>63.76%</td></tr>
<tr><td>2</td><td>William Karlsson (NJD)</td><td>12</td><td>60.76%</td></tr>
<tr><td>3</td><td>Brandon Sutter (NJD)</td><td>12</td><td>59.57%</td></tr>
<tr><td>4</td><td>Phillip Danault (CGY)</td><td>23</td><td>59.22%</td></tr>
<tr><td>5</td><td>Adam Lowry (CGY)</td><td>12</td><td>58.57%</td></tr>
<tr><td>6</td><td>Jordan Staal (TOR)</td><td>14</td><td>57.72%</td></tr>
<tr><td>7</td><td>Bo Horvat (CGY)</td><td>23</td><td>57.63%</td></tr>
<tr><td>8</td><td>Sean Couturier (BOS)</td><td>7</td><td>56.54%</td></tr>
<tr><td>9</td><td>Nico Hischier (VAN)</td><td>18</td><td>55.64%</td></tr>
<tr><td>10</td><td>John Tavares (SEA)</td><td>8</td><td>55.34%</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Plus/Minus</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>+/-</th></tr></thead>
<tr><td>1</td><td>Nico Hischier (VAN)</td><td>18</td><td>11</td></tr>
<tr><td>2</td><td>Kyle Connor (VAN)</td><td>18</td><td>10</td></tr>
<tr><td>3</td><td>Brady Skjei (CGY)</td><td>23</td><td>10</td></tr>
<tr><td>4</td><td>Connor Murphy (MTL)</td><td>27</td><td>10</td></tr>
<tr><td>5</td><td>Jordan Staal (TOR)</td><td>14</td><td>9</td></tr>
<tr><td>6</td><td>Matt Benning (CGY)</td><td>23</td><td>9</td></tr>
<tr><td>7</td><td>Phillip Danault (CGY)</td><td>23</td><td>9</td></tr>
<tr><td>8</td><td>Adam Lowry (CGY)</td><td>12</td><td>8</td></tr>
<tr><td>9</td><td>Sam Reinhart (NSH)</td><td>13</td><td>8</td></tr>
<tr><td>10</td><td>Jacob Larsson (VAN)</td><td>18</td><td>8</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Penalty Minutes</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PIM</th></tr></thead>
<tr><td>1</td><td>Zdeno Chara (CGY)</td><td>23</td><td>49</td></tr>
<tr><td>2</td><td>Connor Murphy (MTL)</td><td>27</td><td>40</td></tr>
<tr><td>3</td><td>Tom Wilson (CGY)</td><td>17</td><td>35</td></tr>
<tr><td>4</td><td>Erik Cernak (NSH)</td><td>11</td><td>27</td></tr>
<tr><td>5</td><td>Darnell Nurse (NJD)</td><td>12</td><td>26</td></tr>
<tr><td>6</td><td>Nikita Zadorov (DAL)</td><td>6</td><td>25</td></tr>
<tr><td>7</td><td>Jacob Larsson (VAN)</td><td>18</td><td>23</td></tr>
<tr><td>8</td><td>Brandon Tanev (MTL)</td><td>27</td><td>23</td></tr>
<tr><td>9</td><td>Josh Brown (TOR)</td><td>14</td><td>21</td></tr>
<tr><td>10</td><td>Scott Mayfield (MTL)</td><td>27</td><td>20</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Shots Blocked</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>SB</th></tr></thead>
<tr><td>1</td><td>Ivan Provorov (MTL)</td><td>27</td><td>57</td></tr>
<tr><td>2</td><td>Connor Murphy (MTL)</td><td>27</td><td>48</td></tr>
<tr><td>3</td><td>Zdeno Chara (CGY)</td><td>23</td><td>40</td></tr>
<tr><td>4</td><td>MacKenzie Weegar (VAN)</td><td>18</td><td>34</td></tr>
<tr><td>5</td><td>Jaccob Slavin (CGY)</td><td>23</td><td>34</td></tr>
<tr><td>6</td><td>Tucker Poolman (MTL)</td><td>27</td><td>34</td></tr>
<tr><td>7</td><td>Vladislav Gavrikov (MTL)</td><td>27</td><td>32</td></tr>
<tr><td>8</td><td>Victor Hedman (NYI)</td><td>15</td><td>28</td></tr>
<tr><td>9</td><td>Patrik Nemeth (VAN)</td><td>18</td><td>28</td></tr>
<tr><td>10</td><td>Matt Benning (CGY)</td><td>23</td><td>28</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Rookies</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PTS</th></tr></thead>
<tr><td>1</td><td>Jason Robertson (CGY)</td><td>23</td><td>6-7-13</td></tr>
<tr><td>2</td><td>Pius Suter (BOS)</td><td>7</td><td>3-3-6</td></tr>
<tr><td>3</td><td>William Borgen (BOS)</td><td>7</td><td>2-3-5</td></tr>
<tr><td>4</td><td>Joel Farabee (VAN)</td><td>18</td><td>2-3-5</td></tr>
<tr><td>5</td><td>Michael McLeod (VAN)</td><td>18</td><td>2-1-3</td></tr>
<tr><td>6</td><td>Michael Anderson (BOS)</td><td>2</td><td>0-3-3</td></tr>
<tr><td>7</td><td>Brandon Hagel (NSH)</td><td>13</td><td>2-0-2</td></tr>
<tr><td>8</td><td>Alexander Nylander (FLA)</td><td>3</td><td>0-2-2</td></tr>
<tr><td>9</td><td>Dysin Mayo (TOR)</td><td>11</td><td>0-2-2</td></tr>
<tr><td>10</td><td>Nils Hoglander (NSH)</td><td>3</td><td>1-0-1</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Hits</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>HIT</th></tr></thead>
<tr><td>1</td><td>Connor Murphy (MTL)</td><td>27</td><td>78</td></tr>
<tr><td>2</td><td>MacKenzie Weegar (VAN)</td><td>18</td><td>67</td></tr>
<tr><td>3</td><td>Brandon Tanev (MTL)</td><td>27</td><td>65</td></tr>
<tr><td>4</td><td>Zdeno Chara (CGY)</td><td>23</td><td>62</td></tr>
<tr><td>5</td><td>Brayden Schenn (MTL)</td><td>27</td><td>62</td></tr>
<tr><td>6</td><td>Pavel Buchnevich (CGY)</td><td>23</td><td>53</td></tr>
<tr><td>7</td><td>Ivan Provorov (MTL)</td><td>27</td><td>46</td></tr>
<tr><td>8</td><td>Scott Mayfield (MTL)</td><td>27</td><td>46</td></tr>
<tr><td>9</td><td>Brady Skjei (CGY)</td><td>23</td><td>43</td></tr>
<tr><td>10</td><td>Darnell Nurse (NJD)</td><td>12</td><td>42</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Power Play Goals</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PP</th></tr></thead>
<tr><td>1</td><td>Logan Couture (NSH)</td><td>11</td><td>4</td></tr>
<tr><td>2</td><td>Timo Meier (NJD)</td><td>12</td><td>3</td></tr>
<tr><td>3</td><td>Jordan Staal (TOR)</td><td>14</td><td>3</td></tr>
<tr><td>4</td><td>Ryan O'Reilly (NYI)</td><td>15</td><td>3</td></tr>
<tr><td>5</td><td>Auston Matthews (VAN)</td><td>18</td><td>3</td></tr>
<tr><td>6</td><td>David Perron (CGY)</td><td>23</td><td>3</td></tr>
<tr><td>7</td><td>Scott Mayfield (MTL)</td><td>27</td><td>3</td></tr>
<tr><td>8</td><td>John Carlson (TOR)</td><td>14</td><td>2</td></tr>
<tr><td>9</td><td>Mats Zuccarello (NYI)</td><td>14</td><td>2</td></tr>
<tr><td>10</td><td>Tomas Hertl (TOR)</td><td>14</td><td>2</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Short Handed Goals</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>SH</th></tr></thead>
<tr><td>1</td><td>Valeri Nichushkin (SEA)</td><td>8</td><td>1</td></tr>
<tr><td>2</td><td>Alex Pietrangelo (TOR)</td><td>11</td><td>1</td></tr>
<tr><td>3</td><td>Jordan Staal (TOR)</td><td>14</td><td>1</td></tr>
<tr><td>4</td><td>Nick Bonino (VAN)</td><td>18</td><td>1</td></tr>
<tr><td>5</td><td>Tanner Pearson (CGY)</td><td>23</td><td>1</td></tr>
<tr><td>6</td><td>Phillip Danault (CGY)</td><td>23</td><td>1</td></tr>
<tr><td>7</td><td>Jonny Brodzinski (MTL)</td><td>27</td><td>1</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Game Winning Goals</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>GW</th></tr></thead>
<tr><td>1</td><td>Jordan Staal (TOR)</td><td>14</td><td>4</td></tr>
<tr><td>2</td><td>Valeri Nichushkin (SEA)</td><td>8</td><td>2</td></tr>
<tr><td>3</td><td>Sam Reinhart (NSH)</td><td>13</td><td>2</td></tr>
<tr><td>4</td><td>Mathew Barzal (NYI)</td><td>15</td><td>2</td></tr>
<tr><td>5</td><td>Alexander Radulov (NYI)</td><td>15</td><td>2</td></tr>
<tr><td>6</td><td>Egor Sharangovich (NYI)</td><td>15</td><td>2</td></tr>
<tr><td>7</td><td>Yanni Gourde (VAN)</td><td>18</td><td>2</td></tr>
<tr><td>8</td><td>Clayton Keller (MTL)</td><td>23</td><td>2</td></tr>
<tr><td>9</td><td>Pavel Buchnevich (CGY)</td><td>23</td><td>2</td></tr>
<tr><td>10</td><td>Jason Robertson (CGY)</td><td>23</td><td>2</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Game Tying Goals</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>GT</th></tr></thead>
<tr><td>1</td><td>Auston Matthews (VAN)</td><td>18</td><td>2</td></tr>
<tr><td>2</td><td>Bo Horvat (CGY)</td><td>23</td><td>2</td></tr>
<tr><td>3</td><td>Pavel Buchnevich (CGY)</td><td>23</td><td>2</td></tr>
<tr><td>4</td><td>Nazem Kadri (MTL)</td><td>24</td><td>2</td></tr>
<tr><td>5</td><td>Jimmy Vesey (NJD)</td><td>4</td><td>1</td></tr>
<tr><td>6</td><td>Trevor van Riemsdyk (VAN)</td><td>4</td><td>1</td></tr>
<tr><td>7</td><td>Frederick Gaudreau (CLB)</td><td>4</td><td>1</td></tr>
<tr><td>8</td><td>Max Pacioretty (DAL)</td><td>6</td><td>1</td></tr>
<tr><td>9</td><td>Ben Hutton (BOS)</td><td>7</td><td>1</td></tr>
<tr><td>10</td><td>Pius Suter (BOS)</td><td>7</td><td>1</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Empty Net Goals</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>ENG</th></tr></thead>
<tr><td>1</td><td>Alex Pietrangelo (TOR)</td><td>11</td><td>1</td></tr>
<tr><td>2</td><td>Tyler Pitlick (NYI)</td><td>15</td><td>1</td></tr>
<tr><td>3</td><td>Brady Skjei (CGY)</td><td>23</td><td>1</td></tr>
<tr><td>4</td><td>Ryan Getzlaf (MTL)</td><td>27</td><td>1</td></tr>
<tr><td>5</td><td>Brandon Tanev (MTL)</td><td>27</td><td>1</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Minutes Played</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>MP</th></tr></thead>
<tr><td>1</td><td>Ivan Provorov (MTL)</td><td>27</td><td>704</td></tr>
<tr><td>2</td><td>Connor Murphy (MTL)</td><td>27</td><td>627</td></tr>
<tr><td>3</td><td>Jaccob Slavin (CGY)</td><td>23</td><td>582</td></tr>
<tr><td>4</td><td>Devon Toews (CGY)</td><td>23</td><td>574</td></tr>
<tr><td>5</td><td>Scott Mayfield (MTL)</td><td>27</td><td>536</td></tr>
<tr><td>6</td><td>Vladislav Gavrikov (MTL)</td><td>27</td><td>519</td></tr>
<tr><td>7</td><td>Brady Skjei (CGY)</td><td>23</td><td>501</td></tr>
<tr><td>8</td><td>Zdeno Chara (CGY)</td><td>23</td><td>496</td></tr>
<tr><td>9</td><td>Mark Scheifele (MTL)</td><td>27</td><td>493</td></tr>
<tr><td>10</td><td>Alex DeBrincat (MTL)</td><td>27</td><td>489</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Hat Tricks</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>HT</th></tr></thead>
<tr><td>1</td><td>Patrick Kane (DAL)</td><td>6</td><td>1</td></tr>
<tr><td>2</td><td>Max Pacioretty (DAL)</td><td>6</td><td>1</td></tr>
<tr><td>3</td><td>Logan Couture (NSH)</td><td>11</td><td>1</td></tr>
<tr><td>4</td><td>Jordan Staal (TOR)</td><td>14</td><td>1</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Goal Scoring Streak</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>GS</th></tr></thead>
<tr><td>1</td><td>Ryan Nugent-Hopkins (EDM)</td><td>4</td><td>2</td></tr>
<tr><td>2</td><td>Boone Jenner (LAK)</td><td>5</td><td>2</td></tr>
<tr><td>3</td><td>Pius Suter (BOS)</td><td>7</td><td>2</td></tr>
<tr><td>4</td><td>Patric Hornqvist (NJD)</td><td>12</td><td>2</td></tr>
<tr><td>5</td><td>Alex Killorn (NSH)</td><td>13</td><td>2</td></tr>
<tr><td>6</td><td>Auston Matthews (VAN)</td><td>18</td><td>2</td></tr>
<tr><td>7</td><td>Mitch Marner (LAK)</td><td>1</td><td>1</td></tr>
<tr><td>8</td><td>Nils Hoglander (NSH)</td><td>3</td><td>1</td></tr>
<tr><td>9</td><td>Alexandre Carrier (FLA)</td><td>4</td><td>1</td></tr>
<tr><td>10</td><td>Zach Werenski (CHI)</td><td>4</td><td>1</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Point Scoring Streak</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>PS</th></tr></thead>
<tr><td>1</td><td>William Karlsson (NJD)</td><td>12</td><td>6</td></tr>
<tr><td>2</td><td>Sam Reinhart (NSH)</td><td>13</td><td>5</td></tr>
<tr><td>3</td><td>Mikko Rantanen (VAN)</td><td>18</td><td>5</td></tr>
<tr><td>4</td><td>Auston Matthews (VAN)</td><td>18</td><td>5</td></tr>
<tr><td>5</td><td>Nico Hischier (VAN)</td><td>18</td><td>5</td></tr>
<tr><td>6</td><td>Dougie Hamilton (VAN)</td><td>18</td><td>5</td></tr>
<tr><td>7</td><td>Ryan Ellis (DAL)</td><td>6</td><td>4</td></tr>
<tr><td>8</td><td>Jonathan Huberdeau (NYI)</td><td>15</td><td>4</td></tr>
<tr><td>9</td><td>Mattias Ekholm (NJD)</td><td>7</td><td>3</td></tr>
<tr><td>10</td><td>Alex Pietrangelo (TOR)</td><td>11</td><td>3</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Hits Taken</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>HTT</th></tr></thead>
<tr><td>1</td><td>Bo Horvat (CGY)</td><td>23</td><td>65</td></tr>
<tr><td>2</td><td>Dylan Larkin (CGY)</td><td>23</td><td>64</td></tr>
<tr><td>3</td><td>Mark Scheifele (MTL)</td><td>27</td><td>64</td></tr>
<tr><td>4</td><td>Brayden Schenn (MTL)</td><td>27</td><td>54</td></tr>
<tr><td>5</td><td>Nico Hischier (VAN)</td><td>18</td><td>51</td></tr>
<tr><td>6</td><td>Ryan O'Reilly (NYI)</td><td>15</td><td>48</td></tr>
<tr><td>7</td><td>Nazem Kadri (MTL)</td><td>24</td><td>47</td></tr>
<tr><td>8</td><td>Nick Bonino (VAN)</td><td>18</td><td>46</td></tr>
<tr><td>9</td><td>Ivan Provorov (MTL)</td><td>27</td><td>46</td></tr>
<tr><td>10</td><td>Phillip Danault (CGY)</td><td>23</td><td>45</td></tr>
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
<tr><td>1</td><td>Nikita Zadorov (DAL)</td><td>6</td><td>3</td></tr>
<tr><td>2</td><td>Sam Bennett (TOR)</td><td>10</td><td>2</td></tr>
<tr><td>3</td><td>Darnell Nurse (NJD)</td><td>12</td><td>2</td></tr>
<tr><td>4</td><td>Alex Tuch (NSH)</td><td>13</td><td>2</td></tr>
<tr><td>5</td><td>Tom Wilson (CGY)</td><td>17</td><td>2</td></tr>
<tr><td>6</td><td>Connor Murphy (MTL)</td><td>27</td><td>2</td></tr>
<tr><td>7</td><td>Alex Ovechkin (LAK)</td><td>5</td><td>1</td></tr>
<tr><td>8</td><td>Boone Jenner (LAK)</td><td>5</td><td>1</td></tr>
<tr><td>9</td><td>Ilya Lyubushkin (BUF)</td><td>6</td><td>1</td></tr>
<tr><td>10</td><td>Josh Archibald (DAL)</td><td>6</td><td>1</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Fight Won</span></th></tr>
<tr><th>#</th><th>Player Name</th><th>GP</th><th>FW   </th></tr></thead>
<tr><td>1</td><td>Nikita Zadorov (DAL)</td><td>6</td><td>2</td></tr>
<tr><td>2</td><td>Josh Archibald (DAL)</td><td>6</td><td>1</td></tr>
<tr><td>3</td><td>Darnell Nurse (NJD)</td><td>12</td><td>1</td></tr>
<tr><td>4</td><td>Josh Brown (TOR)</td><td>14</td><td>1</td></tr>
<tr><td>5</td><td>Tom Wilson (CGY)</td><td>17</td><td>1</td></tr>
</table></td></tr>
<tr><td colspan="3"><h2 class="STHSProIndividualLeader_Goalies">Goalies</h2></td></tr><tr>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Save Percentage</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><th>GP</th><th>SAVE %</th></tr></thead>
<tr><td>1</td><td>Ben Bishop (CGY)</td><td>22</td><td>0.929</td></tr>
<tr><td>2</td><td>Carey Price (SEA)</td><td>8</td><td>0.926</td></tr>
<tr><td>3</td><td>Jacob Markstrom (VAN)</td><td>14</td><td>0.925</td></tr>
<tr><td>4</td><td>Frederik Andersen (TOR)</td><td>13</td><td>0.923</td></tr>
<tr><td>5</td><td>Marc-Andre Fleury (MTL)</td><td>25</td><td>0.921</td></tr>
<tr><td>6</td><td>Andrei Vasilevskiy (NSH)</td><td>13</td><td>0.909</td></tr>
<tr><td>7</td><td>Robin Lehner (NJD)</td><td>12</td><td>0.908</td></tr>
<tr><td>8</td><td>Philipp Grubauer (NYI)</td><td>15</td><td>0.899</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Goals Against Average</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><th>GP</th><th>GAA</th></tr></thead>
<tr><td>1</td><td>Ben Bishop (CGY)</td><td>22</td><td>2.32</td></tr>
<tr><td>2</td><td>Jacob Markstrom (VAN)</td><td>14</td><td>2.62</td></tr>
<tr><td>3</td><td>Marc-Andre Fleury (MTL)</td><td>25</td><td>2.79</td></tr>
<tr><td>4</td><td>Carey Price (SEA)</td><td>8</td><td>2.84</td></tr>
<tr><td>5</td><td>Frederik Andersen (TOR)</td><td>13</td><td>2.87</td></tr>
<tr><td>6</td><td>Philipp Grubauer (NYI)</td><td>15</td><td>3.02</td></tr>
<tr><td>7</td><td>Andrei Vasilevskiy (NSH)</td><td>13</td><td>3.11</td></tr>
<tr><td>8</td><td>Robin Lehner (NJD)</td><td>12</td><td>3.13</td></tr>
<tr><td colspan="4" class="STHSCenter">No Result</td></tr></table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Minutes Played</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><th>GP</th><th>MP</th></tr></thead>
<tr><td>1</td><td>Marc-Andre Fleury (MTL)</td><td>25</td><td>1,551</td></tr>
<tr><td>2</td><td>Ben Bishop (CGY)</td><td>22</td><td>1,316</td></tr>
<tr><td>3</td><td>Jacob Markstrom (VAN)</td><td>14</td><td>870</td></tr>
<tr><td>4</td><td>Frederik Andersen (TOR)</td><td>13</td><td>774</td></tr>
<tr><td>5</td><td>Andrei Vasilevskiy (NSH)</td><td>13</td><td>772</td></tr>
<tr><td>6</td><td>Philipp Grubauer (NYI)</td><td>15</td><td>755</td></tr>
<tr><td>7</td><td>Robin Lehner (NJD)</td><td>12</td><td>709</td></tr>
<tr><td>8</td><td>Carey Price (SEA)</td><td>8</td><td>466</td></tr>
<tr><td>9</td><td>Sergei Bobrovsky (CLB)</td><td>6</td><td>364</td></tr>
<tr><td>10</td><td>Cam Talbot (DAL)</td><td>6</td><td>323</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Shots Faced</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><th>GP</th><th>SHT</th></tr></thead>
<tr><td>1</td><td>Marc-Andre Fleury (MTL)</td><td>25</td><td>909</td></tr>
<tr><td>2</td><td>Ben Bishop (CGY)</td><td>22</td><td>722</td></tr>
<tr><td>3</td><td>Jacob Markstrom (VAN)</td><td>14</td><td>507</td></tr>
<tr><td>4</td><td>Frederik Andersen (TOR)</td><td>13</td><td>481</td></tr>
<tr><td>5</td><td>Andrei Vasilevskiy (NSH)</td><td>13</td><td>440</td></tr>
<tr><td>6</td><td>Robin Lehner (NJD)</td><td>12</td><td>403</td></tr>
<tr><td>7</td><td>Philipp Grubauer (NYI)</td><td>15</td><td>376</td></tr>
<tr><td>8</td><td>Carey Price (SEA)</td><td>8</td><td>297</td></tr>
<tr><td>9</td><td>Sergei Bobrovsky (CLB)</td><td>6</td><td>219</td></tr>
<tr><td>10</td><td>Cam Talbot (DAL)</td><td>6</td><td>180</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Shutouts</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><th>GP</th><th>SO</th></tr></thead>
<tr><td>1</td><td>Ben Bishop (CGY)</td><td>22</td><td>2</td></tr>
<tr><td>2</td><td>Jordan Binnington (LAK)</td><td>4</td><td>1</td></tr>
<tr><td>3</td><td>Carey Price (SEA)</td><td>8</td><td>1</td></tr>
<tr><td>4</td><td>Robin Lehner (NJD)</td><td>12</td><td>1</td></tr>
<tr><td>5</td><td>Andrei Vasilevskiy (NSH)</td><td>13</td><td>1</td></tr>
<tr><td>6</td><td>Frederik Andersen (TOR)</td><td>13</td><td>1</td></tr>
<tr><td>7</td><td>Marc-Andre Fleury (MTL)</td><td>25</td><td>1</td></tr>
</table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Wins</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><th>GP</th><th>W</th></tr></thead>
<tr><td>1</td><td>Ben Bishop (CGY)</td><td>22</td><td>15</td></tr>
<tr><td>2</td><td>Marc-Andre Fleury (MTL)</td><td>25</td><td>13</td></tr>
<tr><td>3</td><td>Philipp Grubauer (NYI)</td><td>15</td><td>10</td></tr>
<tr><td>4</td><td>Jacob Markstrom (VAN)</td><td>14</td><td>9</td></tr>
<tr><td>5</td><td>Andrei Vasilevskiy (NSH)</td><td>13</td><td>7</td></tr>
<tr><td>6</td><td>Frederik Andersen (TOR)</td><td>13</td><td>7</td></tr>
<tr><td>7</td><td>Robin Lehner (NJD)</td><td>12</td><td>5</td></tr>
<tr><td>8</td><td>Carey Price (SEA)</td><td>8</td><td>4</td></tr>
<tr><td>9</td><td>Sergei Bobrovsky (CLB)</td><td>6</td><td>3</td></tr>
<tr><td>10</td><td>Alex Nedeljkovic (MTL)</td><td>2</td><td>2</td></tr>
</table></td></tr>
<tr><td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Penalty Shots Percentage</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><td>PSA</td><th>PS SHT %</th></tr></thead>
<tr><td colspan="4" class="STHSCenter">No Result</td></tr></table></td><td class="STHSWP2"></td>
<td class="STHSWP49"><table class="basictablesorter"><thead><tr><th colspan="4"><span class="STHSIndividualLeadersTitle">Losses</span></th></tr>
<tr><th>#</th><th>Goalie Name</th><th>GP</th><th>L</th></tr></thead>
<tr><td>1</td><td>Marc-Andre Fleury (MTL)</td><td>25</td><td>11</td></tr>
<tr><td>2</td><td>Ben Bishop (CGY)</td><td>22</td><td>6</td></tr>
<tr><td>3</td><td>Frederik Andersen (TOR)</td><td>13</td><td>5</td></tr>
<tr><td>4</td><td>Igor Shesterkin (CHI)</td><td>4</td><td>4</td></tr>
<tr><td>5</td><td>Carey Price (SEA)</td><td>8</td><td>4</td></tr>
<tr><td>6</td><td>Robin Lehner (NJD)</td><td>12</td><td>4</td></tr>
<tr><td>7</td><td>Andrei Vasilevskiy (NSH)</td><td>13</td><td>4</td></tr>
<tr><td>8</td><td>Ilya Sorokin (FLA)</td><td>3</td><td>3</td></tr>
<tr><td>9</td><td>Ilya Samsonov (BUF)</td><td>4</td><td>3</td></tr>
<tr><td>10</td><td>Cam Talbot (DAL)</td><td>6</td><td>3</td></tr>
</table></td></tr>
</table>
<?php include "Footer.php";?>
