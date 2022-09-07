<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<script src="STHSMain.js"></script>
<title>OTHL - Teams And GM Info</title>
<script src="OTHL.js"></script>
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
<td>May 9, 2022 at 16:27</td>
<td>6</td>
<td>167</td>
<td>128</td>
<td>13</td>
<td>7</td></tr>
<tr><td>Blackhawks</td>
<td>Mark </td>
<td></td>
<td><a href="mailto:markdsnyder4@gmail.com">markdsnyder4@gmail.com</a></td>
<td>Chicago</td>
<td>United Center</td>
<td>IceHogs</td>
<td>June 1, 2022 at 15:51</td>
<td>42</td>
<td>86</td>
<td>47</td>
<td>4</td>
<td>9</td></tr>
<tr><td>Blue Jackets</td>
<td>Tyler Bell</td>
<td>553140854</td>
<td><a href="mailto:"></a></td>
<td>Columbus</td>
<td>Nationwide Arena</td>
<td>Monsters</td>
<td>January 5, 2022 at 20:13</td>
<td>3</td>
<td>75</td>
<td>47</td>
<td>4</td>
<td>5</td></tr>
<tr><td>Blues</td>
<td>Fred </td>
<td>611507518</td>
<td><a href="mailto:younan.fred@gmail.com">younan.fred@gmail.com</a></td>
<td>St. Louis</td>
<td>Enterprise Center</td>
<td>Rampage </td>
<td>May 31, 2022 at 16:11</td>
<td>15</td>
<td>265</td>
<td>187</td>
<td>8</td>
<td>14</td></tr>
<tr><td>Bruins</td>
<td>Chris </td>
<td>707286171</td>
<td><a href="mailto:"></a></td>
<td>Boston</td>
<td>TD Banknorth Garden</td>
<td>Bruins</td>
<td>June 1, 2022 at 15:51</td>
<td>138</td>
<td>15</td>
<td>18</td>
<td>0</td>
<td>0</td></tr>
<tr><td>Canadiens</td>
<td>P.J. </td>
<td>664448514</td>
<td><a href="mailto:pjjennings918@gmail.com">pjjennings918@gmail.com</a></td>
<td>Montreal</td>
<td>Bell Centre</td>
<td>Rocket</td>
<td>June 3, 2022 at 19:48</td>
<td>52</td>
<td>54</td>
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
<td>April 28, 2022 at 17:20</td>
<td>15</td>
<td>92</td>
<td>76</td>
<td>2</td>
<td>10</td></tr>
<tr><td>Capitals</td>
<td>Bo </td>
<td>365268878</td>
<td><a href="mailto:"></a></td>
<td>Washington</td>
<td>Verizon Center</td>
<td>Bears</td>
<td>May 16, 2022 at 16:09</td>
<td>38</td>
<td>96</td>
<td>74</td>
<td>2</td>
<td>1</td></tr>
<tr><td>Coyotes</td>
<td>Jimmy </td>
<td></td>
<td><a href="mailto:"></a></td>
<td>Arizona</td>
<td>Jobing.com Arena</td>
<td>Roadrunners</td>
<td>May 23, 2022 at 15:54</td>
<td>48</td>
<td>42</td>
<td>36</td>
<td>0</td>
<td>6</td></tr>
<tr><td>Devils</td>
<td>Mathias </td>
<td>0</td>
<td><a href="mailto:"></a></td>
<td>New Jersey</td>
<td>Prudential Center</td>
<td>Comets</td>
<td>June 1, 2022 at 15:51</td>
<td>44</td>
<td>105</td>
<td>77</td>
<td>14</td>
<td>4</td></tr>
<tr><td>Ducks</td>
<td>Jeff Ducksworthy</td>
<td>203188266</td>
<td><a href="mailto:"></a></td>
<td>Anaheim</td>
<td>Honda Center</td>
<td>Gulls</td>
<td>May 10, 2022 at 16:04</td>
<td>35</td>
<td>68</td>
<td>60</td>
<td>1</td>
<td>3</td></tr>
<tr><td>Flames</td>
<td>Alex </td>
<td></td>
<td><a href="mailto:"></a></td>
<td>Calgary</td>
<td>Pengrowth Saddledome</td>
<td>Heat</td>
<td>June 2, 2022 at 17:23</td>
<td>47</td>
<td>81</td>
<td>54</td>
<td>3</td>
<td>12</td></tr>
<tr><td>Flyers</td>
<td>Vacant</td>
<td>677317150</td>
<td><a href="mailto:"></a></td>
<td>Philadelphia</td>
<td>Wachovia Center</td>
<td>Phantoms</td>
<td>June 3, 2022 at 19:48</td>
<td>9</td>
<td>157</td>
<td>96</td>
<td>14</td>
<td>19</td></tr>
<tr><td>Golden Knights</td>
<td>James </td>
<td>617446788</td>
<td><a href="mailto:"></a></td>
<td>Vegas</td>
<td>T-Mobile Arena</td>
<td>Wolves</td>
<td>June 3, 2022 at 19:48</td>
<td>72</td>
<td>77</td>
<td>55</td>
<td>0</td>
<td>8</td></tr>
<tr><td>Hurricanes</td>
<td>Neil </td>
<td>389579308</td>
<td><a href="mailto:nmburkholder@yahoo.com">nmburkholder@yahoo.com</a></td>
<td>Carolina</td>
<td>RBC Center</td>
<td>Checkers</td>
<td>April 18, 2022 at 16:12</td>
<td>13</td>
<td>165</td>
<td>112</td>
<td>1</td>
<td>22</td></tr>
<tr><td>Islanders</td>
<td>Peter </td>
<td>672616372</td>
<td><a href="mailto:"></a></td>
<td>New York</td>
<td>Barclays Center</td>
<td>Sound Tigers</td>
<td>May 30, 2022 at 16:31</td>
<td>36</td>
<td>232</td>
<td>129</td>
<td>8</td>
<td>22</td></tr>
<tr><td>Jets</td>
<td>Mika </td>
<td></td>
<td><a href="mailto:mikalaakso67@gmail.com">mikalaakso67@gmail.com</a></td>
<td>Winnipeg</td>
<td>MTS Center</td>
<td>Moose</td>
<td>June 2, 2022 at 17:23</td>
<td>41</td>
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
<td>May 20, 2022 at 16:22</td>
<td>31</td>
<td>116</td>
<td>75</td>
<td>21</td>
<td>11</td></tr>
<tr><td>Kraken</td>
<td></td>
<td></td>
<td><a href="mailto:"></a></td>
<td>Seattle</td>
<td>Climate Pledge Arena</td>
<td>Mariners</td>
<td>May 30, 2022 at 16:31</td>
<td>38</td>
<td>14</td>
<td>19</td>
<td>1</td>
<td>0</td></tr>
<tr><td>Lightning</td>
<td>Ron</td>
<td>152903484</td>
<td><a href="mailto:"></a></td>
<td>Tampa Bay</td>
<td>Amalie Arena</td>
<td>Crunch</td>
<td>June 3, 2022 at 19:48</td>
<td>63</td>
<td>112</td>
<td>63</td>
<td>0</td>
<td>5</td></tr>
<tr><td>Maple Leafs</td>
<td>Garrett </td>
<td>416250276</td>
<td><a href="mailto:garrett.hansford@me.com">garrett.hansford@me.com</a></td>
<td>Toronto</td>
<td>Air Canada Centre</td>
<td>Marlies</td>
<td>May 30, 2022 at 16:31</td>
<td>140</td>
<td>104</td>
<td>78</td>
<td>0</td>
<td>5</td></tr>
<tr><td>Oilers</td>
<td>Scott </td>
<td>400400799</td>
<td><a href="mailto:"></a></td>
<td>Edmonton</td>
<td>Rexall Place</td>
<td>Condors</td>
<td>June 3, 2022 at 19:48</td>
<td>102</td>
<td>59</td>
<td>24</td>
<td>7</td>
<td>0</td></tr>
<tr><td>Panthers</td>
<td>Scott </td>
<td>715703855</td>
<td><a href="mailto:"></a></td>
<td>Florida</td>
<td>Bank Atlantic Center</td>
<td>Thunderbirds</td>
<td>June 3, 2022 at 19:48</td>
<td>83</td>
<td>51</td>
<td>25</td>
<td>6</td>
<td>5</td></tr>
<tr><td>Penguins</td>
<td>Nick</td>
<td></td>
<td><a href="mailto:nick.procyk@hotmail.com">nick.procyk@hotmail.com</a></td>
<td>Pittsburgh</td>
<td>Consol Energy Center</td>
<td>Penguins</td>
<td>June 2, 2022 at 17:22</td>
<td>138</td>
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
<td>May 18, 2022 at 16:38</td>
<td>15</td>
<td>216</td>
<td>135</td>
<td>39</td>
<td>14</td></tr>
<tr><td>Rangers</td>
<td>Daniel</td>
<td>672616372</td>
<td><a href="mailto:"></a></td>
<td>New York</td>
<td>Madison Square Gardens</td>
<td>Wolf Pack</td>
<td>March 24, 2022 at 16:38</td>
<td>17</td>
<td>154</td>
<td>106</td>
<td>8</td>
<td>9</td></tr>
<tr><td>Red Wings</td>
<td>Jordan L</td>
<td>602565133</td>
<td><a href="mailto:detroitredwingsgm@gmail.com">detroitredwingsgm@gmail.com</a></td>
<td>Detroit</td>
<td>Little Caesars Arena</td>
<td>Griffins</td>
<td>April 10, 2022 at 14:19</td>
<td>64</td>
<td>200</td>
<td>130</td>
<td>0</td>
<td>28</td></tr>
<tr><td>Sabres</td>
<td>Jason </td>
<td>82579933</td>
<td><a href="mailto:"></a></td>
<td>Buffalo</td>
<td>HSBC Arena</td>
<td> Americans</td>
<td>June 3, 2022 at 19:48</td>
<td>25</td>
<td>185</td>
<td>114</td>
<td>15</td>
<td>16</td></tr>
<tr><td>Senators</td>
<td>Jason B</td>
<td>parkbench@gmail.com</td>
<td><a href="mailto:parkbench@gmail.com">parkbench@gmail.com</a></td>
<td>Ottawa</td>
<td>Scotiabank Place</td>
<td>Senators</td>
<td>May 31, 2022 at 16:11</td>
<td>128</td>
<td>137</td>
<td>91</td>
<td>0</td>
<td>22</td></tr>
<tr><td>Sharks</td>
<td>Brian</td>
<td>SharksGM</td>
<td><a href="mailto:"></a></td>
<td>San Jose</td>
<td>HP Pavillion</td>
<td>Barracudas</td>
<td>April 12, 2022 at 16:17</td>
<td>28</td>
<td>126</td>
<td>79</td>
<td>0</td>
<td>6</td></tr>
<tr><td>Stars</td>
<td>Charles </td>
<td>19341432</td>
<td><a href="mailto:"></a></td>
<td>Dallas</td>
<td>American Airlines Center</td>
<td>Stars</td>
<td>June 3, 2022 at 19:48</td>
<td>100</td>
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
<td>May 30, 2022 at 16:31</td>
<td>27</td>
<td>130</td>
<td>94</td>
<td>15</td>
<td>13</td></tr>
</tbody></table><br />
<a href="mailto:0;markdsnyder4@gmail.com;younan.fred@gmail.com;pjjennings918@gmail.com;nmburkholder@yahoo.com;mikalaakso67@gmail.com;garrett.hansford@me.com;nick.procyk@hotmail.com;detroitredwingsgm@gmail.com;parkbench@gmail.com;eric.draven99@gmail.com">Email all General Manager</a>
<?php include "Footer.php";?>
