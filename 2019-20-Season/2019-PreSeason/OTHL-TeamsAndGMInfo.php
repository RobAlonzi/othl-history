<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<title>OTHL - Teams And GM Info</title>
<script src="OTHL.js"></script>
<meta name="author" content="Simon Tremblay, sths.simont.info" />
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="Decription" content="Tyler Bell - STHS - Version : 3.1.6.6" />
<link href="STHSMain.css" rel="stylesheet" type="text/css" />
<style>
@media screen and (max-width: 1160px) {
.STHSWarning {display:block;}
.STHSTeamsAndGMInfo_MainTable tbody td:nth-last-child(1){display:none;}
.STHSTeamsAndGMInfo_MainTable thead th:nth-last-child(1){display:none;}
.STHSTeamsAndGMInfo_MainTable tbody td:nth-last-child(2){display:none;}
.STHSTeamsAndGMInfo_MainTable thead th:nth-last-child(2){display:none;}
.STHSTeamsAndGMInfo_MainTable tbody td:nth-last-child(3){display:none;}
.STHSTeamsAndGMInfo_MainTable thead th:nth-last-child(3){display:none;}
.STHSTeamsAndGMInfo_MainTable tbody td:nth-last-child(4){display:none;}
.STHSTeamsAndGMInfo_MainTable thead th:nth-last-child(4){display:none;}
.STHSTeamsAndGMInfo_MainTable tbody td:nth-last-child(5){display:none;}
.STHSTeamsAndGMInfo_MainTable thead th:nth-last-child(5){display:none;}
.STHSTeamsAndGMInfo_MainTable tbody td:nth-last-child(6){display:none;}
.STHSTeamsAndGMInfo_MainTable thead th:nth-last-child(6){display:none;}
}</style>
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
<table class="STHSTeamsAndGMInfo_MainTable"><thead><tr>
<th>Team Name</th>
<th>General Manager</th>
<th>Instant Messenger</th>
<th>Email</th>
<th>City</th>
<th>Arena</th>
<th>Farm Team Name</th>
<th>Last File Load Date</th>
<th># of Load Lines</th>
<th># of Fail Auto Roster</th>
<th># of Fail Pro Auto Line</th>
<th># of Fail Farm Auto Line</th>
<th># of Fail Simulation</th></tr></thead><tbody>
<tr><td>Avalanche</td>
<td>Rushi </td>
<td>0</td>
<td><a href="mailto:0">0</a></td>
<td>Colorado</td>
<td>Pepsi Center</td>
<td>Eagles</td>
<td>November 4, 2019 at 17:22</td>
<td>2</td>
<td>57</td>
<td>29</td>
<td>13</td>
<td>4</td></tr>
<tr><td>Blackhawks</td>
<td>Mark </td>
<td></td>
<td><a href="mailto:"></a></td>
<td>Chicago</td>
<td>United Center</td>
<td>IceHogs</td>
<td>November 5, 2019 at 16:42</td>
<td>10</td>
<td>66</td>
<td>32</td>
<td>4</td>
<td>9</td></tr>
<tr><td>Blue Jackets</td>
<td>Tyler Bell</td>
<td>553140854</td>
<td><a href="mailto:"></a></td>
<td>Columbus</td>
<td>Nationwide Arena</td>
<td>Monsters</td>
<td>August 2, 2019 at 22:15</td>
<td>4</td>
<td>45</td>
<td>20</td>
<td>4</td>
<td>4</td></tr>
<tr><td>Blues</td>
<td>Fred </td>
<td>611507518</td>
<td><a href="mailto:younan.fred@gmail.com">younan.fred@gmail.com</a></td>
<td>St. Louis</td>
<td>Scottrade Center</td>
<td>Rampage </td>
<td>November 3, 2019 at 16:15</td>
<td>4</td>
<td>138</td>
<td>81</td>
<td>8</td>
<td>5</td></tr>
<tr><td>Bruins</td>
<td>Chris </td>
<td>707286171</td>
<td><a href="mailto:"></a></td>
<td>Boston</td>
<td>TD Banknorth Garden</td>
<td>Bruins</td>
<td>November 7, 2019 at 16:46</td>
<td>17</td>
<td>12</td>
<td>12</td>
<td>0</td>
<td>0</td></tr>
<tr><td>Canadiens</td>
<td>P.J. </td>
<td>664448514</td>
<td><a href="mailto:pjjennings918@gmail.com">pjjennings918@gmail.com</a></td>
<td>Montreal</td>
<td>Bell Centre</td>
<td>Rocket</td>
<td>November 7, 2019 at 16:46</td>
<td>8</td>
<td>39</td>
<td>20</td>
<td>0</td>
<td>0</td></tr>
<tr><td>Canucks</td>
<td>Rob </td>
<td></td>
<td><a href="mailto:"></a></td>
<td>Vancouver</td>
<td>GM Place</td>
<td>Comets</td>
<td>October 31, 2019 at 16:02</td>
<td>5</td>
<td>52</td>
<td>37</td>
<td>2</td>
<td>9</td></tr>
<tr><td>Capitals</td>
<td>Bo </td>
<td>365268878</td>
<td><a href="mailto:"></a></td>
<td>Washington</td>
<td>Verizon Center</td>
<td>Bears</td>
<td>November 4, 2019 at 17:22</td>
<td>4</td>
<td>54</td>
<td>41</td>
<td>2</td>
<td>0</td></tr>
<tr><td>Coyotes</td>
<td>Jimmy </td>
<td></td>
<td><a href="mailto:"></a></td>
<td>Arizona</td>
<td>Jobing.com Arena</td>
<td>Roadrunners</td>
<td>November 5, 2019 at 16:42</td>
<td>4</td>
<td>22</td>
<td>12</td>
<td>0</td>
<td>4</td></tr>
<tr><td>Devils</td>
<td>Mathias </td>
<td>5174025</td>
<td><a href="mailto:"></a></td>
<td>New Jersey</td>
<td>Prudential Center</td>
<td>Devils</td>
<td>October 22, 2019 at 16:33</td>
<td>5</td>
<td>69</td>
<td>47</td>
<td>14</td>
<td>1</td></tr>
<tr><td>Ducks</td>
<td>Chris C</td>
<td>203188266</td>
<td><a href="mailto:"></a></td>
<td>Anaheim</td>
<td>Honda Center</td>
<td>Gulls</td>
<td>November 3, 2019 at 16:15</td>
<td>11</td>
<td>18</td>
<td>16</td>
<td>1</td>
<td>0</td></tr>
<tr><td>Flames</td>
<td>Alex </td>
<td></td>
<td><a href="mailto:"></a></td>
<td>Calgary</td>
<td>Pengrowth Saddledome</td>
<td>Heat</td>
<td>November 6, 2019 at 16:30</td>
<td>14</td>
<td>54</td>
<td>31</td>
<td>3</td>
<td>10</td></tr>
<tr><td>Flyers</td>
<td>Matt</td>
<td>677317150</td>
<td><a href="mailto:"></a></td>
<td>Philadelphia</td>
<td>Wachovia Center</td>
<td>Phantoms</td>
<td>October 26, 2019 at 08:39</td>
<td>2</td>
<td>97</td>
<td>45</td>
<td>14</td>
<td>14</td></tr>
<tr><td>Golden Knights</td>
<td>James </td>
<td>617446788</td>
<td><a href="mailto:"></a></td>
<td>Vegas</td>
<td>T-Mobile Arena</td>
<td>Wolves</td>
<td>November 6, 2019 at 16:30</td>
<td>5</td>
<td>40</td>
<td>15</td>
<td>0</td>
<td>8</td></tr>
<tr><td>Hurricanes</td>
<td>Neil </td>
<td>389579308</td>
<td><a href="mailto:nmburkholder@yahoo.com">nmburkholder@yahoo.com</a></td>
<td>Carolina</td>
<td>RBC Center</td>
<td>Checkers</td>
<td>November 5, 2019 at 16:42</td>
<td>6</td>
<td>92</td>
<td>54</td>
<td>1</td>
<td>20</td></tr>
<tr><td>Islanders</td>
<td>Peter </td>
<td>672616372</td>
<td><a href="mailto:"></a></td>
<td>New York</td>
<td>Barclays Center</td>
<td>Sound Tigers</td>
<td>October 17, 2019 at 18:51</td>
<td>1</td>
<td>141</td>
<td>58</td>
<td>8</td>
<td>10</td></tr>
<tr><td>Jets</td>
<td>Mika </td>
<td></td>
<td><a href="mailto:mixula@suomi24.fi">mixula@suomi24.fi</a></td>
<td>Winnipeg</td>
<td>MTS Center</td>
<td>Moose</td>
<td>November 5, 2019 at 16:42</td>
<td>10</td>
<td>37</td>
<td>19</td>
<td>0</td>
<td>7</td></tr>
<tr><td>Kings</td>
<td>Jordan </td>
<td>207706500</td>
<td><a href="mailto:"></a></td>
<td>Los Angeles</td>
<td>Staples Center</td>
<td>Reign</td>
<td>November 5, 2019 at 16:42</td>
<td>7</td>
<td>82</td>
<td>44</td>
<td>21</td>
<td>9</td></tr>
<tr><td>Lightning</td>
<td>Ron</td>
<td>152903484</td>
<td><a href="mailto:"></a></td>
<td>Tampa Bay</td>
<td>St.Pete Times Forum</td>
<td>Crunch</td>
<td>November 6, 2019 at 16:30</td>
<td>11</td>
<td>84</td>
<td>43</td>
<td>0</td>
<td>1</td></tr>
<tr><td>Maple Leafs</td>
<td>Garrett </td>
<td>416250276</td>
<td><a href="mailto:garrett.hansford@me.com">garrett.hansford@me.com</a></td>
<td>Toronto</td>
<td>Air Canada Centre</td>
<td>Marlies</td>
<td>October 17, 2019 at 18:51</td>
<td>8</td>
<td>17</td>
<td>8</td>
<td>0</td>
<td>1</td></tr>
<tr><td>Oilers</td>
<td>Scott </td>
<td>400400799</td>
<td><a href="mailto:"></a></td>
<td>Edmonton</td>
<td>Rexall Place</td>
<td>Condors</td>
<td>November 6, 2019 at 16:30</td>
<td>8</td>
<td>35</td>
<td>14</td>
<td>0</td>
<td>0</td></tr>
<tr><td>Panthers</td>
<td>Scott </td>
<td>715703855</td>
<td><a href="mailto:"></a></td>
<td>Florida</td>
<td>Bank Atlantic Center</td>
<td>Thunderbirds</td>
<td>November 7, 2019 at 16:46</td>
<td>12</td>
<td>45</td>
<td>19</td>
<td>6</td>
<td>4</td></tr>
<tr><td>Penguins</td>
<td>Nick</td>
<td></td>
<td><a href="mailto:nick.procyk@hotmail.com">nick.procyk@hotmail.com</a></td>
<td>Pittsburgh</td>
<td>Consol Energy Center</td>
<td>Penguins</td>
<td>November 7, 2019 at 16:46</td>
<td>14</td>
<td>115</td>
<td>52</td>
<td>17</td>
<td>10</td></tr>
<tr><td>Predators</td>
<td>Tyler W</td>
<td>0</td>
<td><a href="mailto:"></a></td>
<td>Nashville</td>
<td>Sommet Center</td>
<td>Admirals</td>
<td>October 17, 2019 at 21:09</td>
<td>3</td>
<td>136</td>
<td>69</td>
<td>36</td>
<td>12</td></tr>
<tr><td>Rangers</td>
<td>Marc-Olivier </td>
<td>672616372</td>
<td><a href="mailto:"></a></td>
<td>New York</td>
<td>Madison Square Gardens</td>
<td>Wolf Pack</td>
<td>October 9, 2019 at 17:04</td>
<td>2</td>
<td>67</td>
<td>35</td>
<td>8</td>
<td>5</td></tr>
<tr><td>Red Wings</td>
<td>Tyler Sn</td>
<td>602565133</td>
<td><a href="mailto:tyler.procyk@rogers.com">tyler.procyk@rogers.com</a></td>
<td>Detroit</td>
<td>Joe Louis Arena</td>
<td>Griffins</td>
<td>November 7, 2019 at 16:46</td>
<td>5</td>
<td>139</td>
<td>65</td>
<td>0</td>
<td>17</td></tr>
<tr><td>Sabres</td>
<td>Jason </td>
<td>82579933</td>
<td><a href="mailto:"></a></td>
<td>Buffalo</td>
<td>HSBC Arena</td>
<td> Americans</td>
<td>October 20, 2019 at 18:44</td>
<td>2</td>
<td>109</td>
<td>58</td>
<td>15</td>
<td>14</td></tr>
<tr><td>Senators</td>
<td>Haedyn </td>
<td></td>
<td><a href="mailto:"></a></td>
<td>Ottawa</td>
<td>Scotiabank Place</td>
<td>Senators</td>
<td>October 17, 2019 at 21:09</td>
<td>1</td>
<td>107</td>
<td>58</td>
<td>0</td>
<td>19</td></tr>
<tr><td>Sharks</td>
<td>Trevor </td>
<td>SharksGM</td>
<td><a href="mailto:"></a></td>
<td>San Jose</td>
<td>HP Pavillion</td>
<td>Barracudas</td>
<td>November 7, 2019 at 16:46</td>
<td>8</td>
<td>56</td>
<td>25</td>
<td>0</td>
<td>3</td></tr>
<tr><td>Stars</td>
<td>Charles </td>
<td>19341432</td>
<td><a href="mailto:"></a></td>
<td>Dallas</td>
<td>American Airlines Center</td>
<td>Stars</td>
<td>November 4, 2019 at 17:22</td>
<td>3</td>
<td>118</td>
<td>68</td>
<td>22</td>
<td>10</td></tr>
<tr><td>Wild</td>
<td>David </td>
<td>354724199</td>
<td><a href="mailto:eric.draven99@gmail.com">eric.draven99@gmail.com</a></td>
<td>Minnesota</td>
<td>Xcel Energy Center</td>
<td>Wild</td>
<td>November 6, 2019 at 16:30</td>
<td>8</td>
<td>58</td>
<td>38</td>
<td>15</td>
<td>10</td></tr>
</tbody></table><br />
<a href="mailto:0;younan.fred@gmail.com;pjjennings918@gmail.com;nmburkholder@yahoo.com;mixula@suomi24.fi;garrett.hansford@me.com;nick.procyk@hotmail.com;tyler.procyk@rogers.com;eric.draven99@gmail.com">Email all General Manager</a>
<?php include "Footer.php";?>
