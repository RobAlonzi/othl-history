﻿<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<title>OTHL - Teams And GM Info</title>
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
<td>February 27, 2021 at 18:38</td>
<td>0</td>
<td>123</td>
<td>104</td>
<td>13</td>
<td>7</td></tr>
<tr><td>Blackhawks</td>
<td>Mark </td>
<td></td>
<td><a href="mailto:markdsnyder4@gmail.com">markdsnyder4@gmail.com</a></td>
<td>Chicago</td>
<td>United Center</td>
<td>IceHogs</td>
<td>November 5, 2021 at 17:07</td>
<td>5</td>
<td>77</td>
<td>44</td>
<td>4</td>
<td>9</td></tr>
<tr><td>Blue Jackets</td>
<td>Tyler Bell</td>
<td>553140854</td>
<td><a href="mailto:"></a></td>
<td>Columbus</td>
<td>Nationwide Arena</td>
<td>Monsters</td>
<td>June 2, 2021 at 21:00</td>
<td>0</td>
<td>68</td>
<td>43</td>
<td>4</td>
<td>5</td></tr>
<tr><td>Blues</td>
<td>Fred </td>
<td>611507518</td>
<td><a href="mailto:younan.fred@gmail.com">younan.fred@gmail.com</a></td>
<td>St. Louis</td>
<td>Enterprise Center</td>
<td>Rampage </td>
<td>October 28, 2021 at 17:00</td>
<td>1</td>
<td>224</td>
<td>168</td>
<td>8</td>
<td>14</td></tr>
<tr><td>Bruins</td>
<td>Chris </td>
<td>707286171</td>
<td><a href="mailto:"></a></td>
<td>Boston</td>
<td>TD Banknorth Garden</td>
<td>Bruins</td>
<td>November 10, 2021 at 16:44</td>
<td>22</td>
<td>13</td>
<td>15</td>
<td>0</td>
<td>0</td></tr>
<tr><td>Canadiens</td>
<td>P.J. </td>
<td>664448514</td>
<td><a href="mailto:pjjennings918@gmail.com">pjjennings918@gmail.com</a></td>
<td>Montreal</td>
<td>Bell Centre</td>
<td>Rocket</td>
<td>November 8, 2021 at 14:36</td>
<td>7</td>
<td>53</td>
<td>32</td>
<td>0</td>
<td>2</td></tr>
<tr><td>Canucks</td>
<td>Rob </td>
<td></td>
<td><a href="mailto:"></a></td>
<td>Vancouver</td>
<td>GM Place</td>
<td>Canucks</td>
<td>October 27, 2021 at 17:08</td>
<td>2</td>
<td>72</td>
<td>54</td>
<td>2</td>
<td>10</td></tr>
<tr><td>Capitals</td>
<td>Bo </td>
<td>365268878</td>
<td><a href="mailto:"></a></td>
<td>Washington</td>
<td>Verizon Center</td>
<td>Bears</td>
<td>November 3, 2021 at 16:54</td>
<td>1</td>
<td>72</td>
<td>63</td>
<td>2</td>
<td>1</td></tr>
<tr><td>Coyotes</td>
<td>Jimmy </td>
<td></td>
<td><a href="mailto:"></a></td>
<td>Arizona</td>
<td>Jobing.com Arena</td>
<td>Roadrunners</td>
<td>November 8, 2021 at 14:36</td>
<td>6</td>
<td>39</td>
<td>34</td>
<td>0</td>
<td>6</td></tr>
<tr><td>Devils</td>
<td>Mathias </td>
<td>0</td>
<td><a href="mailto:"></a></td>
<td>New Jersey</td>
<td>Prudential Center</td>
<td>Comets</td>
<td>November 8, 2021 at 14:36</td>
<td>5</td>
<td>99</td>
<td>74</td>
<td>14</td>
<td>4</td></tr>
<tr><td>Ducks</td>
<td>Jeff Ducksworthy</td>
<td>203188266</td>
<td><a href="mailto:"></a></td>
<td>Anaheim</td>
<td>Honda Center</td>
<td>Gulls</td>
<td>November 9, 2021 at 08:59</td>
<td>6</td>
<td>46</td>
<td>45</td>
<td>1</td>
<td>3</td></tr>
<tr><td>Flames</td>
<td>Alex </td>
<td></td>
<td><a href="mailto:"></a></td>
<td>Calgary</td>
<td>Pengrowth Saddledome</td>
<td>Heat</td>
<td>November 6, 2021 at 21:25</td>
<td>7</td>
<td>73</td>
<td>48</td>
<td>3</td>
<td>12</td></tr>
<tr><td>Flyers</td>
<td>Vacant</td>
<td>677317150</td>
<td><a href="mailto:"></a></td>
<td>Philadelphia</td>
<td>Wachovia Center</td>
<td>Phantoms</td>
<td>July 8, 2021 at 21:58</td>
<td>0</td>
<td>136</td>
<td>85</td>
<td>14</td>
<td>18</td></tr>
<tr><td>Golden Knights</td>
<td>James </td>
<td>617446788</td>
<td><a href="mailto:"></a></td>
<td>Vegas</td>
<td>T-Mobile Arena</td>
<td>Wolves</td>
<td>October 25, 2021 at 14:52</td>
<td>1</td>
<td>71</td>
<td>51</td>
<td>0</td>
<td>8</td></tr>
<tr><td>Hurricanes</td>
<td>Neil </td>
<td>389579308</td>
<td><a href="mailto:nmburkholder@yahoo.com">nmburkholder@yahoo.com</a></td>
<td>Carolina</td>
<td>RBC Center</td>
<td>Checkers</td>
<td>October 24, 2021 at 22:00</td>
<td>2</td>
<td>139</td>
<td>100</td>
<td>1</td>
<td>22</td></tr>
<tr><td>Islanders</td>
<td>Peter </td>
<td>672616372</td>
<td><a href="mailto:"></a></td>
<td>New York</td>
<td>Barclays Center</td>
<td>Sound Tigers</td>
<td>October 24, 2021 at 22:00</td>
<td>1</td>
<td>208</td>
<td>112</td>
<td>8</td>
<td>21</td></tr>
<tr><td>Jets</td>
<td>Mika </td>
<td></td>
<td><a href="mailto:mikalaakso67@gmail.com">mikalaakso67@gmail.com</a></td>
<td>Winnipeg</td>
<td>MTS Center</td>
<td>Moose</td>
<td>November 7, 2021 at 13:59</td>
<td>4</td>
<td>46</td>
<td>31</td>
<td>5</td>
<td>9</td></tr>
<tr><td>Kings</td>
<td>Jordan </td>
<td>207706500</td>
<td><a href="mailto:"></a></td>
<td>Los Angeles</td>
<td>Staples Center</td>
<td>Reign</td>
<td>November 10, 2021 at 16:44</td>
<td>6</td>
<td>106</td>
<td>71</td>
<td>21</td>
<td>11</td></tr>
<tr><td>Kraken</td>
<td></td>
<td></td>
<td><a href="mailto:"></a></td>
<td>Seattle</td>
<td>Climate Pledge Arena</td>
<td>Mariners</td>
<td>October 30, 2021 at 21:00</td>
<td>1</td>
<td>8</td>
<td>6</td>
<td>1</td>
<td>0</td></tr>
<tr><td>Lightning</td>
<td>Ron</td>
<td>152903484</td>
<td><a href="mailto:"></a></td>
<td>Tampa Bay</td>
<td>Amalie Arena</td>
<td>Crunch</td>
<td>November 6, 2021 at 21:24</td>
<td>3</td>
<td>102</td>
<td>59</td>
<td>0</td>
<td>5</td></tr>
<tr><td>Maple Leafs</td>
<td>Garrett </td>
<td>416250276</td>
<td><a href="mailto:garrett.hansford@me.com">garrett.hansford@me.com</a></td>
<td>Toronto</td>
<td>Air Canada Centre</td>
<td>Marlies</td>
<td>November 10, 2021 at 16:44</td>
<td>21</td>
<td>79</td>
<td>66</td>
<td>0</td>
<td>5</td></tr>
<tr><td>Oilers</td>
<td>Scott </td>
<td>400400799</td>
<td><a href="mailto:"></a></td>
<td>Edmonton</td>
<td>Rexall Place</td>
<td>Condors</td>
<td>November 8, 2021 at 14:36</td>
<td>15</td>
<td>58</td>
<td>23</td>
<td>0</td>
<td>0</td></tr>
<tr><td>Panthers</td>
<td>Scott </td>
<td>715703855</td>
<td><a href="mailto:"></a></td>
<td>Florida</td>
<td>Bank Atlantic Center</td>
<td>Thunderbirds</td>
<td>November 10, 2021 at 16:44</td>
<td>11</td>
<td>48</td>
<td>23</td>
<td>6</td>
<td>5</td></tr>
<tr><td>Penguins</td>
<td>Nick</td>
<td></td>
<td><a href="mailto:nick.procyk@hotmail.com">nick.procyk@hotmail.com</a></td>
<td>Pittsburgh</td>
<td>Consol Energy Center</td>
<td>Penguins</td>
<td>November 10, 2021 at 16:44</td>
<td>20</td>
<td>124</td>
<td>59</td>
<td>17</td>
<td>14</td></tr>
<tr><td>Predators</td>
<td>Tyler W</td>
<td>0</td>
<td><a href="mailto:"></a></td>
<td>Nashville</td>
<td>Sommet Center</td>
<td>Admirals</td>
<td>July 7, 2021 at 16:46</td>
<td>0</td>
<td>197</td>
<td>125</td>
<td>39</td>
<td>14</td></tr>
<tr><td>Rangers</td>
<td>Daniel</td>
<td>672616372</td>
<td><a href="mailto:"></a></td>
<td>New York</td>
<td>Madison Square Gardens</td>
<td>Wolf Pack</td>
<td>October 15, 2021 at 17:19</td>
<td>1</td>
<td>130</td>
<td>97</td>
<td>8</td>
<td>9</td></tr>
<tr><td>Red Wings</td>
<td>Jordan L</td>
<td>602565133</td>
<td><a href="mailto:detroitredwingsgm@gmail.com">detroitredwingsgm@gmail.com</a></td>
<td>Detroit</td>
<td>Little Caesars Arena</td>
<td>Griffins</td>
<td>November 10, 2021 at 16:44</td>
<td>14</td>
<td>195</td>
<td>121</td>
<td>0</td>
<td>28</td></tr>
<tr><td>Sabres</td>
<td>Jason </td>
<td>82579933</td>
<td><a href="mailto:"></a></td>
<td>Buffalo</td>
<td>HSBC Arena</td>
<td> Americans</td>
<td>June 26, 2021 at 19:11</td>
<td>0</td>
<td>151</td>
<td>100</td>
<td>15</td>
<td>16</td></tr>
<tr><td>Senators</td>
<td>Jason B</td>
<td>parkbench@gmail.com</td>
<td><a href="mailto:parkbench@gmail.com">parkbench@gmail.com</a></td>
<td>Ottawa</td>
<td>Scotiabank Place</td>
<td>Senators</td>
<td>November 10, 2021 at 16:44</td>
<td>8</td>
<td>134</td>
<td>89</td>
<td>0</td>
<td>22</td></tr>
<tr><td>Sharks</td>
<td>Brian</td>
<td>SharksGM</td>
<td><a href="mailto:"></a></td>
<td>San Jose</td>
<td>HP Pavillion</td>
<td>Barracudas</td>
<td>March 30, 2021 at 19:52</td>
<td>0</td>
<td>90</td>
<td>65</td>
<td>0</td>
<td>6</td></tr>
<tr><td>Stars</td>
<td>Charles </td>
<td>19341432</td>
<td><a href="mailto:"></a></td>
<td>Dallas</td>
<td>American Airlines Center</td>
<td>Stars</td>
<td>November 10, 2021 at 16:44</td>
<td>9</td>
<td>156</td>
<td>108</td>
<td>22</td>
<td>21</td></tr>
<tr><td>Wild</td>
<td>David </td>
<td>354724199</td>
<td><a href="mailto:eric.draven99@gmail.com">eric.draven99@gmail.com</a></td>
<td>Minnesota</td>
<td>Xcel Energy Center</td>
<td>Wild</td>
<td>November 4, 2021 at 20:37</td>
<td>4</td>
<td>101</td>
<td>80</td>
<td>15</td>
<td>13</td></tr>
</tbody></table><br />
<a href="mailto:0;markdsnyder4@gmail.com;younan.fred@gmail.com;pjjennings918@gmail.com;nmburkholder@yahoo.com;mikalaakso67@gmail.com;garrett.hansford@me.com;nick.procyk@hotmail.com;detroitredwingsgm@gmail.com;parkbench@gmail.com;eric.draven99@gmail.com">Email all General Manager</a>
<?php include "Footer.php";?>
